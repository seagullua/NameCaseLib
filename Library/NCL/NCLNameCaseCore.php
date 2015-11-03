<?php

/**
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @package NameCaseLib
 */
/**
 *
 */
if (!defined('NCL_DIR'))
{
		define('NCL_DIR', dirname(__FILE__));
}

require_once NCL_DIR . '/NCL.php';
require_once NCL_DIR . '/NCLStr.php';
require_once NCL_DIR . '/NCLNameCaseWord.php';

/**
 * <b>NCL NameCase Core</b>
 *
 * Набор основных функций, который позволяют сделать интерфейс слонения русского и украниского языка
 * абсолютно одинаковым. Содержит все функции для внешнего взаимодействия с библиотекой.
 *
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4.1
 * @package NameCaseLib
 */
class NCLNameCaseCore extends NCL
{

		/**
		 * Версия библиотеки
		 * @var string
		 */
		protected $version = '0.4.1';
		/**
		 * Версия языкового файла
		 * @var string
		 */
		protected $languageBuild = '0';
		/**
		 * Готовность системы:
		 * - Все слова идентифицированы (известо к какой части ФИО относится слово)
		 * - У всех слов определен пол
		 * Если все сделано стоит флаг true, при добавлении нового слова флаг сбрасывается на false
		 * @var bool
		 */
		private $ready = false;
		/**
		 * Если все текущие слова было просклонены и в каждом слове уже есть результат склонения,
		 * тогда true. Если было добавлено новое слово флаг збрасывается на false
		 * @var bool
		 */
		private $finished = false;
		/**
		 * Массив содержит елементы типа NCLNameCaseWord. Это все слова которые нужно обработать и просклонять
		 * @var array
		 */
		private $words = array();
		/**
		 * Переменная, в которую заносится слово с которым сейчас идет работа
		 * @var string
		 */
		protected $workingWord = '';
		/**
		 * Метод Last() вырезает подстроки разной длины. Посколько одинаковых вызовов бывает несколько,
		 * то все результаты выполнения кешируются в этом массиве.
		 * @var array
		 */
		protected $workindLastCache = array();
		/**
		 * Номер последнего использованого правила, устанавливается методом Rule()
		 * @var int
		 */
		private $lastRule = 0;
		/**
		 * Массив содержит результат склонения слова - слово во всех падежах
		 * @var array
		 */
		protected $lastResult = array();
		/**
		 * Массив содержит информацию о том какие слова из массива <var>$this->words</var> относятся к
		 * фамилии, какие к отчеству а какие к имени. Массив нужен потому, что при добавлении слов мы не
		 * всегда знаем какая часть ФИО сейчас, поэтому после идентификации всех слов генерируется массив
		 * индексов для быстрого поиска в дальнейшем.
		 * @var array
		 */
		private $index = array();

		public $gender_koef=0;//вероятность автоопредления пола [0..10]. Достаточно точно при 0.1

		/**
		 * Метод очищает результаты последнего склонения слова. Нужен при склонении нескольких слов.
		 */
		private function reset()
		{
				$this->lastRule = 0;
				$this->lastResult = array();
		}

		/**
		 * Сбрасывает все информацию на начальную. Очищает все слова добавленые в систему.
		 * После выполнения система готова работать с начала.
		 * @return NCLNameCaseCore
		 */
		public function fullReset()
		{
				$this->words = array();
				$this->index = array('N' => array(), 'F' => array(), 'S' => array());
				$this->reset();
				$this->notReady();
				return $this;
		}

		/**
		 * Устанавливает флаги о том, что система не готово и слова еще не были просклонены
		 */
		private function notReady()
		{
				$this->ready = false;
				$this->finished = false;
		}

		/**
		 * Устанавливает номер последнего правила
		 * @param int $index номер правила которое нужно установить
		 */
		protected function Rule($index)
		{
				$this->lastRule = $index;
		}

		/**
		 * Устанавливает слово текущим для работы системы. Очищает кеш слова.
		 * @param string $word слово, которое нужно установить
		 */
		protected function setWorkingWord($word)
		{
				//Сбрасываем настройки
				$this->reset();
				//Ставим слово
				$this->workingWord = $word;
				//Чистим кеш
				$this->workindLastCache = array();
		}

		/**
		 * Если не нужно склонять слово, делает результат таким же как и именительный падеж
		 */
		protected function makeResultTheSame()
		{
				$this->lastResult = array_fill(0, $this->CaseCount, $this->workingWord);
		}

		/**
		 * Если <var>$stopAfter</var> = 0, тогда вырезает $length последних букв с текущего слова (<var>$this->workingWord</var>)
		 * Если нет, тогда вырезает <var>$stopAfter</var> букв начиная от <var>$length</var> с конца
		 * @param int $length количество букв с конца
		 * @param int $stopAfter количество букв которые нужно вырезать (0 - все)
		 * @return string требуемая подстрока
		 */
		protected function Last($length=1, $stopAfter=0)
		{
				//Сколько букв нужно вырезать все или только часть
				if (!$stopAfter)
				{
						$cut = $length;
				}
				else
				{
						$cut = $stopAfter;
				}

				//Проверяем кеш
				if (!isset($this->workindLastCache[$length][$stopAfter]))
				{
						$this->workindLastCache[$length][$stopAfter] = NCLStr::substr($this->workingWord, -$length, $cut);
				}
				return $this->workindLastCache[$length][$stopAfter];
		}

		/**
		 * Над текущим словом (<var>$this->workingWord</var>) выполняются правила в порядке указаном в <var>$rulesArray</var>.
		 * <var>$gender</var> служит для указания какие правила использовать мужские ('man') или женские ('woman')
		 * @param string $gender - префикс мужских/женских правил
		 * @param array $rulesArray - массив, порядок выполнения правил
		 * @return boolean если правило было задествовано, тогда true, если нет - тогда false
		 */
		protected function RulesChain($gender, $rulesArray)
		{
				foreach ($rulesArray as $ruleID)
				{
						$ruleMethod = $gender . 'Rule' . $ruleID;
						if ($this->$ruleMethod())
						{
								return true;
						}
				}
				return false;
		}

		/**
		 * Если <var>$string</var> строка, тогда проверяется входит ли буква <var>$letter</var> в строку <var>$string</var>
		 * Если <var>$string</var> массив, тогда проверяется входит ли строка <var>$letter</var> в массив <var>$string</var>
		 * @param string $letter буква или строка, которую нужно искать
		 * @param mixed $string строка или массив, в котором нужно искать
		 * @return bool true если искомое значение найдено
		 */
		protected function in($letter, $string)
		{
				//Если второй параметр массив
				if (is_array($string))
				{
						return in_array($letter, $string);
				}
				else
				{
						if (!$letter or NCLStr::strpos($string, $letter) === false)
						{
								return false;
						}
						else
						{
								return true;
						}
				}
		}

		/**
		 * Функция проверяет, входит ли имя <var>$nameNeedle</var> в перечень имен <var>$names</var>.
		 * @param string $nameNeedle - имя которое нужно найти
		 * @param array $names - перечень имен в котором нужно найти имя
		 */
		protected function inNames($nameNeedle, $names)
		{
				if (!is_array($names))
				{
						$names = array($names);
				}

				foreach ($names as $name)
				{
						if (NCLStr::strtolower($nameNeedle) == NCLStr::strtolower($name))
						{
								return true;
						}
				}
				return false;
		}

		/**
		 * Склоняет слово <var>$word</var>, удаляя из него <var>$replaceLast</var> последних букв
		 * и добавляя в каждый падеж окончание из массива <var>$endings</var>.
		 * @param string $word слово, к которому нужно добавить окончания
		 * @param array $endings массив окончаний
		 * @param int $replaceLast сколько последних букв нужно убрать с начального слова
		 */
		protected function wordForms($word, $endings, $replaceLast=0)
		{
				//Создаем массив с именительный падежом
				$result = array($this->workingWord);
				//Убираем в окончание лишние буквы
				$word = NCLStr::substr($word, 0, NCLStr::strlen($word) - $replaceLast);

				//Добавляем окончания
				for ($padegIndex = 1; $padegIndex < $this->CaseCount; $padegIndex++)
				{
						$result[$padegIndex] = $word . $endings[$padegIndex - 1];
				}

				$this->lastResult = $result;
		}

		/**
		 * В массив <var>$this->words</var> добавляется новый об’єкт класса NCLNameCaseWord
		 * со словом <var>$firstname</var> и пометкой, что это имя
		 * @param string $firstname имя
		 * @return NCLNameCaseCore
		 */
		public function setFirstName($firstname="")
		{
				if ($firstname)
				{
						$index = count($this->words);
						$this->words[$index] = new NCLNameCaseWord($firstname);
						$this->words[$index]->setNamePart('N');
						$this->notReady();
				}
				return $this;
		}

		/**
		 * В массив <var>$this->words</var> добавляется новый об’єкт класса NCLNameCaseWord
		 * со словом <var>$secondname</var> и пометкой, что это фамилия
		 * @param string $secondname фамилия
		 * @return NCLNameCaseCore
		 */
		public function setSecondName($secondname="")
		{
				if ($secondname)
				{
						$index = count($this->words);
						$this->words[$index] = new NCLNameCaseWord($secondname);
						$this->words[$index]->setNamePart('S');
						$this->notReady();
				}
				return $this;
		}

		/**
		 * В массив <var>$this->words</var> добавляется новый об’єкт класса NCLNameCaseWord
		 * со словом <var>$fathername</var> и пометкой, что это отчество
		 * @param string $fathername отчество
		 * @return NCLNameCaseCore
		 */
		public function setFatherName($fathername="")
		{
				if ($fathername)
				{
						$index = count($this->words);
						$this->words[$index] = new NCLNameCaseWord($fathername);
						$this->words[$index]->setNamePart('F');
						$this->notReady();
				}
				return $this;
		}

		/**
		 * Всем словам устанавливается пол, который может иметь следующие значения
		 * - 0 - не определено
		 * - NCL::$MAN - мужчина
		 * - NCL::$WOMAN - женщина
		 * @param int $gender пол, который нужно установить
		 * @return NCLNameCaseCore
		 */
		public function setGender($gender=0)
		{
				foreach ($this->words as $word)
				{
						$word->setTrueGender($gender);
				}
				return $this;
		}

		/**
		 * В система заносится сразу фамилия, имя, отчество
		 * @param string $secondName фамилия
		 * @param string $firstName имя
		 * @param string $fatherName отчество
		 * @return NCLNameCaseCore
		 */
		public function setFullName($secondName="", $firstName="", $fatherName="")
		{
				$this->setFirstName($firstName);
				$this->setSecondName($secondName);
				$this->setFatherName($fatherName);
				return $this;
		}

		/**
		 * В массив <var>$this->words</var> добавляется новый об’єкт класса NCLNameCaseWord
		 * со словом <var>$firstname</var> и пометкой, что это имя
		 * @param string $firstname имя
		 * @return NCLNameCaseCore
		 */
		public function setName($firstname="")
		{
				return $this->setFirstName($firstname);
		}

		/**
		 * В массив <var>$this->words</var> добавляется новый об’єкт класса NCLNameCaseWord
		 * со словом <var>$secondname</var> и пометкой, что это фамилия
		 * @param string $secondname фамилия
		 * @return NCLNameCaseCore
		 */
		public function setLastName($secondname="")
		{
				return $this->setSecondName($secondname);
		}

		/**
		 * В массив <var>$this->words</var> добавляется новый об’єкт класса NCLNameCaseWord
		 * со словом <var>$secondname</var> и пометкой, что это фамилия
		 * @param string $secondname фамилия
		 * @return NCLNameCaseCore
		 */
		public function setSirName($secondname="")
		{
				return $this->setSecondName($secondname);
		}

		/**
		 * Если слово <var>$word</var> не идентифицировано, тогда определяется это имя, фамилия или отчество
		 * @param NCLNameCaseWord $word слово которое нужно идентифицировать
		 */
		private function prepareNamePart(NCLNameCaseWord $word)
		{
				if (!$word->getNamePart())
				{
						$this->detectNamePart($word);
				}
		}

		/**
		 * Проверяет все ли слова идентифицированы, если нет тогда для каждого определяется это имя, фамилия или отчество
		 */
		private function prepareAllNameParts()
		{
				foreach ($this->words as $word)
				{
						$this->prepareNamePart($word);
				}
		}

		/**
		 * Определяет пол для слова <var>$word</var>
		 * @param NCLNameCaseWord $word слово для которого нужно определить пол
		 */
		private function prepareGender(NCLNameCaseWord $word)
		{
				if (!$word->isGenderSolved())
				{
						$namePart = $word->getNamePart();
						switch ($namePart)
						{
								case 'N': $this->GenderByFirstName($word);
										break;
								case 'F': $this->GenderByFatherName($word);
										break;
								case 'S': $this->GenderBySecondName($word);
										break;
						}
				}
		}

		/**
		 * Для всех слов проверяет определен ли пол, если нет - определяет его
		 * После этого расчитывает пол для всех слов и устанавливает такой пол всем словам
		 * @return bool был ли определен пол
		 */
		private function solveGender()
		{
				//Ищем, может гдето пол уже установлен
				foreach ($this->words as $word)
				{
						if ($word->isGenderSolved())
						{
								$this->setGender($word->gender());
								return true;
						}
				}

				//Если нет тогда определяем у каждого слова и потом сумируем
				$man = 0;
				$woman = 0;

				foreach ($this->words as $word)
				{
						$this->prepareGender($word);
						$gender = $word->getGender();
						$man+=$gender[NCL::$MAN];
						$woman+=$gender[NCL::$WOMAN];
				}

				if ($man > $woman)
				{
						$this->setGender(NCL::$MAN);
				}
				else
				{
						$this->setGender(NCL::$WOMAN);
				}

				return true;
		}

		/**
		 * Генерируется массив, который содержит информацию о том какие слова из массива <var>$this->words</var> относятся к
		 * фамилии, какие к отчеству а какие к имени. Массив нужен потому, что при добавлении слов мы не
		 * всегда знаем какая часть ФИО сейчас, поэтому после идентификации всех слов генерируется массив
		 * индексов для быстрого поиска в дальнейшем.
		 */
		private function generateIndex()
		{
				$this->index = array('N' => array(), 'S' => array(), 'F' => array());
				foreach ($this->words as $index => $word)
				{
						$namepart = $word->getNamePart();
						$this->index[$namepart][] = $index;
				}
		}

		/**
		 * Выполнет все необходимые подготовления для склонения.
		 * Все слова идентфицируются. Определяется пол.
		 * Обновляется индекс.
		 */
		private function prepareEverything()
		{
				if (!$this->ready)
				{
						$this->prepareAllNameParts();
						$this->solveGender();
						$this->generateIndex();
						$this->ready = true;
				}
		}

		/**
		 * По указаным словам определяется пол человека:
		 * - 0 - не определено
		 * - NCL::$MAN - мужчина
		 * - NCL::$WOMAN - женщина
		 * @return int текущий пол человека
		 */
		public function genderAutoDetect()
		{
				$this->prepareEverything();

				if (!empty($this->words)){
					$n=-1;
					$max_koef=-1;
					foreach ($this->words as $k=>$word){
						$genders=$word->getGender();
						$min=min( $genders );
						$max=max( $genders );
						$koef=$max-$min;
						if ($koef>$max_koef) {
							$max_koef=$koef;
							$n=$k;
						}
					}

					if ($n>=0){
						if (isset($this->words[$n]))
				{
							$genders=$this->words[$n]->getGender();
							$min=min( $genders );
							$max=max( $genders );
							$this->gender_koef=$max-$min;

							return $this->words[$n]->gender();
						}
					}
				}
				return false;
		}

		/**
		 * Разбивает строку <var>$fullname</var> на слова и возвращает формат в котором записано имя
		 * <b>Формат:</b>
		 * - S - Фамилия
		 * - N - Имя
		 * - F - Отчество
		 * @param string $fullname строка, для которой необходимо определить формат
		 * @return array формат в котором записано имя массив типа <var>$this->words</var>
		 */
		private function splitFullName($fullname)
		{

				$fullname = trim($fullname);
				$list = explode(' ', $fullname);

				foreach ($list as $word)
				{
						$this->words[] = new NCLNameCaseWord($word);
				}

				$this->prepareEverything();
				$formatArr = array();

				foreach ($this->words as $word)
				{
						$formatArr[] = $word->getNamePart();
				}

				return $this->words;
		}

		/**
		 * Разбивает строку <var>$fullname</var> на слова и возвращает формат в котором записано имя
		 * <b>Формат:</b>
		 * - S - Фамилия
		 * - N - Имя
		 * - F - Отчество
		 * @param string $fullname строка, для которой необходимо определить формат
		 * @return string формат в котором записано имя
		 */
		public function getFullNameFormat($fullname)
		{
				$this->fullReset();
				$words = $this->splitFullName($fullname);
				$format = '';
				foreach ($words as $word)
				{
						$format .= $word->getNamePart() . ' ';
				}
				return $format;
		}

		/**
		 * Склоняет слово <var>$word</var> по нужным правилам в зависимости от пола и типа слова
		 * @param NCLNameCaseWord $word слово, которое нужно просклонять
		 */
		private function WordCase(NCLNameCaseWord $word)
		{
				$gender = ($word->gender() == NCL::$MAN ? 'man' : 'woman');

				$namepart = '';

				$name_part_letter=$word->getNamePart();
				switch ($name_part_letter)
				{
						case 'F': $namepart = 'Father';
								break;
						case 'N': $namepart = 'First';
								break;
						case 'S': $namepart = 'Second';
								break;
				}

				$method = $gender . $namepart . 'Name';

				//если фамилия из 2х слов через дефис
				//http://new.gramota.ru/spravka/buro/search-answer?s=273912

				//рабоиваем слово с дефисами на части
				$tmp=$word->getWordOrig();
				$cur_words=explode('-', $tmp);
				$o_cur_words=array();

				$result=array();
				$last_rule=-1;

				$cnt=count($cur_words);
				foreach ($cur_words as $k=>$cur_word){
					$is_norm_rules=true;

					$o_ncw=new NCLNameCaseWord($cur_word);
					if ( $name_part_letter=='S' && $cnt>1 && $k<$cnt-1 ){
						//если первая часть фамилии тоже фамилия, то склоняем по общим правилам
						//иначе не склоняется

						$exclusion=array('тулуз');//исключения
						$cur_word_=mb_strtolower($cur_word);
						if ( !in_array($cur_word_, $exclusion ) ){
							$o_nc = new NCLNameCaseRu();
							$o_nc->detectNamePart( $o_ncw );
							$is_norm_rules=( $o_ncw->getNamePart()=='S' );
						}
						else {
							$is_norm_rules=false;
						}
					}

					$this->setWorkingWord($cur_word);

					if ($is_norm_rules && $this->$method())
					{
						//склоняется
						$result_tmp=$this->lastResult;
						$last_rule=$this->lastRule;
					}
					else
					{
						//не склоняется. Заполняем что есть
						$result_tmp=array_fill(0, $this->CaseCount, $cur_word);
						$last_rule=-1;
					}

					$o_ncw->setNameCases($result_tmp);
					$o_cur_words[]=$o_ncw;
				}

				//объединение пачку частей слова в одно слово по каждому падежу
				foreach ($o_cur_words as $o_ncw){
					$namecases=$o_ncw->getNameCases();
					foreach ($namecases as $k=>$namecase){
						if ( key_exists($k, $result) ) $result[$k]=$result[$k].'-'.$namecase;
						else $result[$k]=$namecase;
					}
				}

				//устанавливаем падежи для целого слова
				$word->setNameCases($result, false);
				$word->setRule($last_rule);
		}

		/**
		 * Производит склонение всех слов, который хранятся в массиве <var>$this->words</var>
		 */
		private function AllWordCases()
		{
				if (!$this->finished)
				{
						$this->prepareEverything();

						foreach ($this->words as $word)
						{
								$this->WordCase($word);
						}

						$this->finished = true;
				}
		}

		/**
		 * Если указан номер падежа <var>$number</var>, тогда возвращается строка с таким номером падежа,
		 * если нет, тогда возвращается массив со всеми падежами текущего слова.
		 * @param NCLNameCaseWord $word слово для котрого нужно вернуть падеж
		 * @param int $number номер падежа, который нужно вернуть
		 * @return mixed массив или строка с нужным падежом
		 */
		private function getWordCase(NCLNameCaseWord $word, $number=null)
		{
				$cases = $word->getNameCases();
				if (is_null($number) or $number < 0 or $number > ($this->CaseCount - 1))
				{
						return $cases;
				}
				else
				{
						return $cases[$number];
				}
		}

		/**
		 * Если нужно было просклонять несколько слов, то их необходимо собрать в одну строку.
		 * Эта функция собирает все слова указаные в <var>$indexArray</var>  в одну строку.
		 * @param array $indexArray индексы слов, которые необходимо собрать вместе
		 * @param int $number номер падежа
		 * @return mixed либо массив со всеми падежами, либо строка с одним падежом
		 */
		private function getCasesConnected($indexArray, $number=null)
		{
				$readyArr = array();
				foreach ($indexArray as $index)
				{
						$readyArr[] = $this->getWordCase($this->words[$index], $number);
				}

				$all = count($readyArr);
				if ($all)
				{
						if (is_array($readyArr[0]))
						{
								//Масив нужно скелить каждый падеж
								$resultArr = array();
								for ($case = 0; $case < $this->CaseCount; $case++)
								{
										$tmp = array();
										for ($i = 0; $i < $all; $i++)
										{
												$tmp[] = $readyArr[$i][$case];
										}
										$resultArr[$case] = implode(' ', $tmp);
								}
								return $resultArr;
						}
						else
						{
								return implode(' ', $readyArr);
						}
				}
				return '';
		}

		/**
		 * Функция ставит имя в нужный падеж.
		 *
		 * Если указан номер падежа <var>$number</var>, тогда возвращается строка с таким номером падежа,
		 * если нет, тогда возвращается массив со всеми падежами текущего слова.
		 * @param int $number номер падежа
		 * @return mixed массив или строка с нужным падежом
		 */
		public function getFirstNameCase($number=null)
		{
				$this->AllWordCases();

				return $this->getCasesConnected($this->index['N'], $number);
		}

		/**
		 * Функция ставит фамилию в нужный падеж.
		 *
		 * Если указан номер падежа <var>$number</var>, тогда возвращается строка с таким номером падежа,
		 * если нет, тогда возвращается массив со всеми падежами текущего слова.
		 * @param int $number номер падежа
		 * @return mixed массив или строка с нужным падежом
		 */
		public function getSecondNameCase($number=null)
		{
				$this->AllWordCases();

				return $this->getCasesConnected($this->index['S'], $number);
		}

		/**
		 * Функция ставит отчество в нужный падеж.
		 *
		 * Если указан номер падежа <var>$number</var>, тогда возвращается строка с таким номером падежа,
		 * если нет, тогда возвращается массив со всеми падежами текущего слова.
		 * @param int $number номер падежа
		 * @return mixed массив или строка с нужным падежом
		 */
		public function getFatherNameCase($number=null)
		{
				$this->AllWordCases();

				return $this->getCasesConnected($this->index['F'], $number);
		}

		/**
		 * Функция ставит имя <var>$firstName</var> в нужный падеж <var>$CaseNumber</var> по правилам пола <var>$gender</var>.
		 *
		 * Если указан номер падежа <var>$CaseNumber</var>, тогда возвращается строка с таким номером падежа,
		 * если нет, тогда возвращается массив со всеми падежами текущего слова.
		 * @param string $firstName имя, которое нужно просклонять
		 * @param int $CaseNumber номер падежа
		 * @param int $gender пол, который нужно использовать
		 * @return mixed массив или строка с нужным падежом
		 */
		public function qFirstName($firstName, $CaseNumber=null, $gender=0)
		{
				$this->fullReset();
				$this->setFirstName($firstName);
				if ($gender)
				{
						$this->setGender($gender);
				}
				return $this->getFirstNameCase($CaseNumber);
		}

		/**
		 * Функция ставит фамилию <var>$secondName</var> в нужный падеж <var>$CaseNumber</var> по правилам пола <var>$gender</var>.
		 *
		 * Если указан номер падежа <var>$CaseNumber</var>, тогда возвращается строка с таким номером падежа,
		 * если нет, тогда возвращается массив со всеми падежами текущего слова.
		 * @param string $secondName фамилия, которую нужно просклонять
		 * @param int $CaseNumber номер падежа
		 * @param int $gender пол, который нужно использовать
		 * @return mixed массив или строка с нужным падежом
		 */
		public function qSecondName($secondName, $CaseNumber=null, $gender=0)
		{
				$this->fullReset();
				$this->setSecondName($secondName);
				if ($gender)
				{
						$this->setGender($gender);
				}

				return $this->getSecondNameCase($CaseNumber);
		}

		/**
		 * Функция ставит отчество <var>$fatherName</var> в нужный падеж <var>$CaseNumber</var> по правилам пола <var>$gender</var>.
		 *
		 * Если указан номер падежа <var>$CaseNumber</var>, тогда возвращается строка с таким номером падежа,
		 * если нет, тогда возвращается массив со всеми падежами текущего слова.
		 * @param string $fatherName отчество, которое нужно просклонять
		 * @param int $CaseNumber номер падежа
		 * @param int $gender пол, который нужно использовать
		 * @return mixed массив или строка с нужным падежом
		 */
		public function qFatherName($fatherName, $CaseNumber=null, $gender=0)
		{
				$this->fullReset();
				$this->setFatherName($fatherName);
				if ($gender)
				{
						$this->setGender($gender);
				}
				return $this->getFatherNameCase($CaseNumber);
		}

		/**
		 * Склоняет текущие слова во все падежи и форматирует слово по шаблону <var>$format</var>
		 * <b>Формат:</b>
		 * - S - Фамилия
		 * - N - Имя
		 * - F - Отчество
		 * @param string $format строка формат
		 * @return array массив со всеми падежами
		 */
		public function getFormattedArray($format)
		{
				if (is_array($format))
				{
						return $this->getFormattedArrayHard($format);
				}

				$length = NCLStr::strlen($format);
				$result = array();
				$cases = array();
				$cases['S'] = $this->getCasesConnected($this->index['S']);
				$cases['N'] = $this->getCasesConnected($this->index['N']);
				$cases['F'] = $this->getCasesConnected($this->index['F']);

				for ($curCase = 0; $curCase < $this->CaseCount; $curCase++)
				{
						$line = "";
						for ($i = 0; $i < $length; $i++)
						{
								$symbol = NCLStr::substr($format, $i, 1);
								if ($symbol == 'S')
								{
										$line.=$cases['S'][$curCase];
								}
								elseif ($symbol == 'N')
								{
										$line.=$cases['N'][$curCase];
								}
								elseif ($symbol == 'F')
								{
										$line.=$cases['F'][$curCase];
								}
								else
								{
										$line.=$symbol;
								}
						}
						$result[] = $line;
				}
				return $result;
		}

		/**
		 * Склоняет текущие слова во все падежи и форматирует слово по шаблону <var>$format</var>
		 * <b>Формат:</b>
		 * - S - Фамилия
		 * - N - Имя
		 * - F - Отчество
		 * @param array $format массив с форматом
		 * @return array массив со всеми падежами
		 */
		public function getFormattedArrayHard($format)
		{

				$result = array();
				$cases = array();
				foreach ($format as $word)
				{
						$cases[] = $word->getNameCases();
				}

				for ($curCase = 0; $curCase < $this->CaseCount; $curCase++)
				{
						$line = "";
						foreach ($cases as $value)
						{
								$line.=$value[$curCase] . ' ';
						}
						$result[] = trim($line);
				}
				return $result;
		}

		/**
		 * Склоняет текущие слова в падеж <var>$caseNum</var> и форматирует слово по шаблону <var>$format</var>
		 * <b>Формат:</b>
		 * - S - Фамилия
		 * - N - Имя
		 * - F - Отчество
		 * @param array $format массив с форматом
		 * @return string строка в нужном падеже
		 */
		public function getFormattedHard($caseNum=0, $format=array())
		{
				$result = "";
				foreach ($format as $word)
				{
						$cases = $word->getNameCases();
						$result.= $cases[$caseNum] . ' ';
				}
				return trim($result);
		}

		/**
		 * Склоняет текущие слова в падеж <var>$caseNum</var> и форматирует слово по шаблону <var>$format</var>
		 * <b>Формат:</b>
		 * - S - Фамилия
		 * - N - Имя
		 * - F - Отчество
		 * @param string $format строка с форматом
		 * @return string строка в нужном падеже
		 */
		public function getFormatted($caseNum=0, $format="S N F")
		{
				$this->AllWordCases();
				//Если не указан падеж используем другую функцию
				if (is_null($caseNum) or !$caseNum)
				{
						return $this->getFormattedArray($format);
				}
				//Если формат сложный
				elseif (is_array($format))
				{
						return $this->getFormattedHard($caseNum, $format);
				}
				else
				{
						$length = NCLStr::strlen($format);
						$result = "";
						for ($i = 0; $i < $length; $i++)
						{
								$symbol = NCLStr::substr($format, $i, 1);
								if ($symbol == 'S')
								{
										$result.=$this->getSecondNameCase($caseNum);
								}
								elseif ($symbol == 'N')
								{
										$result.=$this->getFirstNameCase($caseNum);
								}
								elseif ($symbol == 'F')
								{
										$result.=$this->getFatherNameCase($caseNum);
								}
								else
								{
										$result.=$symbol;
								}
						}
						return $result;
				}
		}

		/**
		 * Склоняет фамилию <var>$secondName</var>, имя <var>$firstName</var>, отчество <var>$fatherName</var>
		 * в падеж <var>$caseNum</var> по правилам пола <var>$gender</var> и форматирует результат по шаблону <var>$format</var>
		 * <b>Формат:</b>
		 * - S - Фамилия
		 * - N - Имя
		 * - F - Отчество
		 * @param string $secondName фамилия
		 * @param string $firstName имя
		 * @param string $fatherName отчество
		 * @param int $gender пол
		 * @param int $caseNum номер падежа
		 * @param string $format формат
		 * @return mixed либо массив со всеми падежами, либо строка
		 */
		public function qFullName($secondName="", $firstName="", $fatherName="", $gender=0, $caseNum=0, $format="S N F")
		{
				$this->fullReset();
				$this->setFirstName($firstName);
				$this->setSecondName($secondName);
				$this->setFatherName($fatherName);
				if ($gender)
				{
						$this->setGender($gender);
				}

				return $this->getFormatted($caseNum, $format);
		}

		/**
		 * Склоняет ФИО <var>$fullname</var> в падеж <var>$caseNum</var> по правилам пола <var>$gender</var>.
		 * Возвращает результат в таком же формате, как он и был.
		 * @param string $fullname ФИО
		 * @param int $caseNum номер падежа
		 * @param int $gender пол человека
		 * @return mixed либо массив со всеми падежами, либо строка
		 */
		public function q($fullname, $caseNum=null, $gender=null)
		{
				$this->fullReset();
				$format = $this->splitFullName($fullname);
				if ($gender)
				{
						$this->setGender($gender);
				}

				return $this->getFormatted($caseNum, $format);
		}

		/**
		 * Определяет пол человека по ФИО
		 * @param string $fullname ФИО
		 * @return int пол человека
		 */
		public function genderDetect($fullname)
		{
				$this->fullReset();
				$this->splitFullName($fullname);
				return $this->genderAutoDetect();
		}

		/**
		 * Возвращает внутренний массив $this->words каждая запись имеет тип NCLNameCaseWord
		 * @return array Массив всех слов в системе
		 */
		public function getWordsArray()
		{
				return $this->words;
		}

		/**
		 * Функция пытается применить цепочку правил для мужских имен
		 * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
		 */
		protected function manFirstName()
		{
				return false;
		}

		/**
		 * Функция пытается применить цепочку правил для женских имен
		 * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
		 */
		protected function womanFirstName()
		{
				return false;
		}

		/**
		 * Функция пытается применить цепочку правил для мужских фамилий
		 * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
		 */
		protected function manSecondName()
		{
				return false;
		}

		/**
		 * Функция пытается применить цепочку правил для женских фамилий
		 * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
		 */
		protected function womanSecondName()
		{
				return false;
		}

		/**
		 * Функция склоняет мужский отчества
		 * @return boolean true - если слово было успешно изменено, false - если не получилось этого сделать
		 */
		protected function manFatherName()
		{
				return false;
		}

		/**
		 * Функция склоняет женские отчества
		 * @return boolean true - если слово было успешно изменено, false - если не получилось этого сделать
		 */
		protected function womanFatherName()
		{
				return false;
		}

		/**
		 * Определение пола по правилам имен
		 * @param NCLNameCaseWord $word обьект класса слов, для которого нужно определить пол
		 */
		protected function GenderByFirstName(NCLNameCaseWord $word)
		{

		}

		/**
		 * Определение пола по правилам фамилий
		 * @param NCLNameCaseWord $word обьект класса слов, для которого нужно определить пол
		 */
		protected function GenderBySecondName(NCLNameCaseWord $word)
		{

		}

		/**
		 * Определение пола по правилам отчеств
		 * @param NCLNameCaseWord $word обьект класса слов, для которого нужно определить пол
		 */
		protected function GenderByFatherName(NCLNameCaseWord $word)
		{

		}

		/**
		 * Идетифицирует слово определяе имя это, или фамилия, или отчество
		 * - <b>N</b> - имя
		 * - <b>S</b> - фамилия
		 * - <b>F</b> - отчество
		 * @param NCLNameCaseWord $word обьект класса слов, который необходимо идентифицировать
		 */
		protected function detectNamePart(NCLNameCaseWord $word)
		{

		}

		/**
		 * Возвращает версию библиотеки
		 * @return string версия библиотеки
		 */
		public function version()
		{
				return $this->version;
		}

		/**
		 * Возвращает версию использованого языкового файла
		 * @return string версия языкового файла
		 */
		public function languageVersion()
		{
				return $this->languageBuild;
		}

}

?>
