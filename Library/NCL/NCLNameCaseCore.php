<?php

if (!defined('NCL_DIR'))
{
    define('NCL_DIR', dirname(__FILE__));
}

require_once NCL_DIR . '/NCL.php';
require_once NCL_DIR . '/NCLStr.php';
require_once NCL_DIR . '/NCLNameCaseInterface.php';
require_once NCL_DIR . '/NCLNameCaseWord.php';

class NCLNameCaseCore extends NCL
{

    /**
     * Система уже готово к склонению или нет
     * @var bool 
     */
    protected $ready = false;
    /**
     * Все слова уже просклонялись
     * @var bool 
     */
    protected $finished = false;
    /**
     * Список всех слов
     * @var array
     */
    protected $words = array();

    /*
     * Слово с которым работаем сейчас
     * @var string
     */
    protected $workingWord = '';

    /*
     * Кеш окончаний слова
     * @var array
     */
    protected $workindLastCache = array();
    /**
     * Последние правило
     * @var int 
     */
    protected $lastRule = 0;
    /**
     * Просклоненое слово
     * @var array 
     */
    protected $lastResult = array();
    protected $index = array();

    /**
     * Сброс всех настроек
     */
    protected function reset()
    {
        $this->lastRule = 0;
        $this->lastResult = array();
    }

    protected function fullReset()
    {
        $this->words = array();
        $this->index = array('N' => array(), 'F' => array(), 'S' => array());
        $this->reset();
        $this->notReady();
    }

    protected function notReady()
    {
        $this->ready = false;
        $this->finished = false;
    }

    /**
     * Установить номер парвила
     * @param int $index 
     */
    protected function Rule($index)
    {
        $this->lastRule = $index;
    }

    /*
     * Установить текущее слово
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

    /*
     * Если $stopAfter = 0, тогда вырезает $length последних букв
     * Если нет, тогда вырезает $stopAfter букв начиная от $length с конца
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
     * Выполняет над словом типа $gender (man / woman) в порядке указанов в $rulesArray
     * @param string $gender - мужские/женский правила
     * @param type $rulesArray - массив, порядок выполнения правил
     * @return boolean 
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

    /*
     * Функция проверяет, входит ли буква в строку.
     * 
     * @param $letter - буква
     * @param $string - строка
     * 
     * @return boolean
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
     * Функция проверяет, входит ли имя в перечень имен.
     * 
     * @param string $nameNeedle - имя
     * @param string $names - перечень имен
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

    /*
     * Функция дополняет переданое слово нужными окончаниями.
     * 
     * @param $word (string) - слово
     * @param $endings (array) - окончания
     * @param $replaceLast (int) - сколько букв убрать
     * 
     * @return (array)
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

    /*
     * Установка имени
     * 
     * @param $firstname
     * 
     * @return void
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
    }

    /*
     * Установка Фамилии
     * 
     * @param $secondname
     * 
     * @return void
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
    }

    /*
     * Установка Отчества
     * 
     * @param $secondname
     * 
     * @return void
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
    }

    /*
     * Установка пола
     * 
     * @param $gender
     * - 0 - не определено
     * - NCL::$MAN - мужчина
     * - NCL::$WOMAN - женщина
     * @return void
     */

    public function setGender($gender=0)
    {
        foreach ($this->words as $word)
        {
            $word->setTrueGender($gender);
        }
    }

    /*
     * Установка Имени, Фамилии, Отчества
     * 
     * @param $firstName - имя
     * @param $secondName - фамилия
     * @param $fatherName - отчество
     * 
     * @return void
     */

    public function setFullName($secondName="", $firstName="", $fatherName="")
    {
        $this->setFirstName($firstName);
        $this->setSecondName($secondName);
        $this->setFatherName($fatherName);
    }

    /*
     * Установка имени
     * 
     * @param $firstname
     * 
     * @return void
     */

    public function setName($firstname="")
    {
        $this->setFirstName($firstname);
    }

    /*
     * Установка Фамилии
     * 
     * @param $secondname
     * 
     * @return void
     */

    public function setLastName($secondname="")
    {
        $this->setSecondName($secondname);
    }

    /*
     * Установка Фамилии
     * 
     * @param $secondname
     * 
     * @return void
     */

    public function setSirname($secondname="")
    {
        $this->setSecondName($secondname);
    }

    protected function prepareNamePart(NCLNameCaseWord $word)
    {
        if (!$word->getNamePart())
        {
            $this->detectNamePart($word);
        }
    }

    protected function prepareAllNameParts()
    {
        foreach ($this->words as $word)
        {
            $this->prepareNamePart($word);
        }
    }

    protected function prepareGender(NCLNameCaseWord $word)
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

    protected function solveGender()
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

    protected function generateIndex()
    {
        $this->index = array('N' => array(), 'S' => array(), 'F' => array());
        foreach ($this->words as $index => $word)
        {
            $namepart = $word->getNamePart();
            $this->index[$namepart][] = $index;
        }
    }

    protected function prepareEverything()
    {
        if (!$this->ready)
        {
            $this->prepareAllNameParts();
            $this->solveGender();
            $this->generateIndex();
            $this->ready = true;
        }
    }

    /*
     * Автоматическое определение пола
     * Возвращает пол по ФИО
     * @return integer
     */

    public function genderAutoDetect()
    {
        $this->prepareEverything();
        if (isset($this->words[0]))
        {
            return $this->words[0]->gender();
        }
        return false;
    }

    /*
     * Разбиение фразы на слова и определение, где имя, где фамилия, где отчество
     * @return string $format - формат имен и фамилий
     */

    public function splitFullName($fullname)
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

        return implode(' ', $formatArr);
    }

    protected function WordCase(NCLNameCaseWord $word)
    {
        $gender = ($word->gender() == NCL::$MAN ? 'man' : 'woman');

        $namepart = '';

        switch ($word->getNamePart())
        {
            case 'F': $namepart = 'Father'; break;
            case 'N': $namepart = 'First'; break;
            case 'S': $namepart = 'Second'; break;
        }

        $method = $gender . $namepart . 'Name';

        $this->setWorkingWord($word->getWord());

        if ($this->$method())
        {
            $word->setNameCases($this->lastResult);
            $word->setRule($this->lastRule);
        }
        else
        {
            $word->setNameCases(array_fill(0, $this->CaseCount, $word->getWord()));
            $word->setRule(-1);
        }
    }

    protected function AllWordCases()
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
     * Возвращает склееные результаты склонения
     * @param array $indexArray - индексы слов, которые необходимо склеить
     * @param int $number - 
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

    /*
     * Поставить имя в определенный падеж
     * 
     * @return string
     */

    public function getFirstNameCase($number=null)
    {
        $this->AllWordCases();

        return $this->getCasesConnected($this->index['N'], $number);
    }

    /*
     * Поставить фамилию в определенный падеж
     * 
     * @return string
     */

    public function getSecondNameCase($number=null)
    {
        $this->AllWordCases();

        return $this->getCasesConnected($this->index['S'], $number);
    }

    /*
     * Поставить отчество в определенный падеж
     * 
     * @return string
     */

    public function getFatherNameCase($number=null)
    {
        $this->AllWordCases();

        return $this->getCasesConnected($this->index['F'], $number);
    }

    /*
     * Поставить фамилию в определенный падеж
     * 
     * @return string
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

    /*
     * Поставить фамилию в определенный падеж
     * 
     * @return string
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

    /*
     * Поставить отчество в определенный падеж
     * 
     * @return string
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

    /*
     * Склоняет во все падежи и форматирует по шаблону $format
     * Шаблон $format
     * S - Фамилия
     * N - Имя
     * F - Отчество
     * 
     * @return array
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
        for ($i = 0; $i < $length; $i++)
        {
            $symbol = NCLStr::substr($format, $i, 1);
            if ($symbol == 'S')
            {
                $cases['S'] = $this->getSecondNameCase();
            }
            elseif ($symbol == 'N')
            {
                $cases['N'] = $this->getFirstNameCase();
            }
            elseif ($symbol == 'F')
            {
                $cases['F'] = $this->getFatherNameCase();
            }
        }

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

    public function getFormattedArrayHard($format)
    {

        $result = array();
        $cases = array();
        foreach ($format as $value)
        {
            $symbol = $value[0];

            if ($symbol == 'S')
            {
                $this->setSecondName($value[1]);
                $cases[] = array('S', $this->getSecondNameCase());
            }
            elseif ($symbol == 'N')
            {
                $this->setFirstName($value[1]);
                $cases[] = array('N', $this->getFirstNameCase());
            }
            elseif ($symbol == 'F')
            {
                $this->setFatherName($value[1]);
                $cases[] = array('F', $this->getFatherNameCase());
            }
        }

        for ($curCase = 0; $curCase < $this->CaseCount; $curCase++)
        {
            $line = "";
            foreach ($cases as $value)
            {
                $symbol = $value[0];
                if ($symbol == 'S')
                {
                    $line.=$value[1][$curCase] . ' ';
                }
                elseif ($symbol == 'N')
                {
                    $line.=$value[1][$curCase] . ' ';
                }
                elseif ($symbol == 'F')
                {
                    $line.=$value[1][$curCase] . ' ';
                }
            }
            $result[] = trim($line);
        }
        return $result;
    }

    public function getFormattedHard($caseNum=0, $format=array())
    {
        $result = "";
        foreach ($format as $value)
        {
            $symbol = $value[0];
            if ($symbol == 'S')
            {
                $this->setSecondName($value[1]);
                $result.=$this->getSecondNameCase($caseNum) . ' ';
            }
            elseif ($symbol == 'N')
            {
                $this->setFirstName($value[1]);
                $result.=$this->getFirstNameCase($caseNum) . ' ';
            }
            elseif ($symbol == 'F')
            {
                $this->setFatherName($value[1]);
                $result.=$this->getFatherNameCase($caseNum) . ' ';
            }
        }
        return trim($result);
    }

    /*
     * Склоняет в падеж $caseNum, и форматирует по шаблону $format
     * Шаблон $format
     * S - Фамилия
     * N - Имя
     * F - Отчество
     * 
     * Например getFormatted(1, 'N F')
     * Выведет имя и отчество в родительном падиже
     * 
     * @return string
     */

    public function getFormatted($caseNum=0, $format="S N F")
    {
        //Если не указан падеж используем другую функцию
        if (is_null($caseNum))
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

    /*
     * Склоняет фамилию имя отчество в падеж $caseNum, и форматирует по шаблону $format
     * Шаблон $format
     * S - Фамилия
     * N - Имя
     * F - Отчество
     * 
     * @return string
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

    /*
     * Быстрое склонение имени. Передается один параметр строка, где может быть ФИО в любом виде. Есть необязательный параметр пол. И так ще необязательный параметр падеж. Если падеж указан, тогда возвращается строка в том падеже, если нет тогда все возможные падежи.
     * 
     * @return string
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

}

?>
