<?php

/*
 * NCL NameCase Core
 * 
 * Клас, которые содержит базовые функции склонения по падежам.
 * 
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @author Андрей Чайка http://seagull.net.ua/ bymer3@gmail.com
 * @version 0.1.2 05.05.2011 
 * 
 */
interface NCLNameCaseInterface
{

    public function setFirstName($firstname="");

    public function setSecondName($secondname="");

    public function setFatherName($fathername="");

    public function setGender($gender=0);

    public function setFullName($secondName="", $firstName="", $fatherName="");

    public function setName($firstname="");

    public function setLastName($secondname="");

    public function setSirname($secondname="");

    public function genderAutoDetect();

    public function splitFullName($fullname);

    public function getFirstNameCase($number=null);

    public function getSecondNameCase($number=null);

    public function getFatherNameCase($number=null);

    public function qFirstName($firstName, $CaseNumber=null, $gender=0);

    public function qSecondName($secondName, $CaseNumber=null, $gender=0);

    public function qFatherName($fatherName, $CaseNumber=null, $gender=0);

    public function getFormattedArray($format);

    public function getFormatted($caseNum=0, $format="S N F");

    public function qFullName($secondName="", $firstName="", $fatherName="", $gender=0, $caseNum=0, $format="S N F");

    public function getFirstNameRule();

    public function getSecondNameRule();

    public function q($fullname, $caseNum=null, $gender=null);
}

class NCL
{
    /*
     * @static integer
     */

    static $MAN = 1;

    /*
     * @static integer
     */
    static $WOMAN = 2;

    /*
     * @static integer
     * Падежи
     */
    static $IMENITLN = 0;
    static $RODITLN = 1;
    static $DATELN = 2;
    static $VINITELN = 3;
    static $TVORITELN = 4;
    static $PREDLOGN = 5;
    static $UaNazyvnyi = 0;
    static $UaRodovyi = 1;
    static $UaDavalnyi = 2;
    static $UaZnahidnyi = 3;
    static $UaOrudnyi = 4;
    static $UaMiszevyi = 5;
    static $UaKlychnyi = 6;

}

class NCLNameCaseCore extends NCL
{
    /*
     * Имя для склонения
     * @var string
     */

    protected $firstName = "";


    /*
     * Фамилия для склонения
     * @var string
     */
    protected $secondName = "";


    /*
     * Отчество для склонения
     * @var string
     */
    protected $fatherName = "";


    /*
     * @var integer
     * Пол человека
     * <li>0 - не известно</li>
     * <li>1 - мужчина</li>
     * <li>2 - женщина</li>
     */
    protected $gender = 0;

    /*
     * @var array()
     * Результат склонения имени
     */
    protected $firstResult = array();


    /*
     * @var array()
     * Результат склонения фамилии
     */
    protected $secondResult = array();

    /*
     * @var array()
     * Результат склонения отчества
     */
    protected $fatherResult = array();

    /*
     * @var integer
     * Номер правила по которому не склоняется имя/фамилия
     */
    protected $error = "";

    /*
     * @var integer
     * Номер правила по которому склоняется имя
     */
    protected $frule = "";

    /*
     * @var integer
     * Номер правила по которому не склоняется фамилия
     */
    protected $srule = "";



    /*
     * Кодировка библиотеки
     * @var string
     */
    protected $charset = 'utf-8';


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

    /**
     * Сброс всех настроек
     */
    protected function reset()
    {
        $this->lastRule = 0;
        $this->lastResult = array();
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
     * Обертка для substr
     */

    protected function substr($str, $start, $length=null)
    {
        return mb_substr($str, $start, $length, $this->charset);
    }

    /*
     * Обертка для strpos
     */

    protected function strpos($haystack, $needle, $offset = 0)
    {
        return mb_strpos($haystack, $needle, $offset, $this->charset);
    }

    /*
     * Обертка для strlen
     */

    protected function strlen($str)
    {
        return mb_strlen($str, $this->charset);
    }

    /*
     * Обертка для strtolower
     */

    protected function strtolower($str)
    {
        return mb_strtolower($str, $this->charset);
    }

    /**
     * Обертка для strrpos
     * @param type $haystack
     * @param type $needle
     * @param type $offset
     * @return type 
     */
    protected function strrpos($haystack, $needle, $offset=null)
    {
        return mb_strrpos($haystack, $needle, $offset, $this->charset);
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
            $this->workindLastCache[$length][$stopAfter] = $this->substr($this->workingWord, -$length, $cut);
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
        foreach($rulesArray as $ruleID)
        {
            $ruleMethod = $gender.'Rule'.$ruleID;
            if($this->$ruleMethod())
            {
                return true;
            }
        }
        return false;
    }

    protected function makeFirstTheSame()
    {
        $this->firstResult = array_fill(0, $this->CaseCount, $this->firstName);
    }

    /*
     * Функция, которая ставит фамилию во всех падежах в форме именительного падежа.
     * 
     * @return void
     */

    protected function makeSecondTheSame()
    {
        $this->secondResult = array_fill(0, $this->CaseCount, $this->secondName);
    }

    /*
     * Функция, которая ставит фамилию во всех падежах в форме именительного падежа.
     * 
     * @return void
     */

    protected function makeFatherTheSame()
    {
        $this->fatherResult = array_fill(0, $this->CaseCount, $this->fatherName);
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
            if (!$letter or $this->strpos($string, $letter) === false)
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
            if ($this->strtolower($nameNeedle) == $this->strtolower($name))
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
        $result = array($word);
        //Убираем в окончание лишние буквы
        $word = $this->substr($word, 0, $this->strlen($word) - $replaceLast);

        //Добавляем окончания
        for ($padegIndex = 1; $padegIndex < $this->CaseCount; $padegIndex++)
        {
            $result[$padegIndex] = $word . $endings[$padegIndex - 1];
        }

        $this->lastResult = $result;
    }

    /*
     * DEPRECATED!!!
     */

    protected function padeg($word, $endings, $replaceLast=false, $replaceTwoLast=false)
    {
        $result = array($word);
        if ($replaceTwoLast == true)
        {
            //убираем последнею букву
            $word = mb_substr($word, 0, mb_strlen($word, 'utf-8') - 2, 'utf-8');
        }
        elseif ($replaceLast == true)
        {
            //убираем последнею букву
            $word = mb_substr($word, 0, mb_strlen($word, 'utf-8') - 1, 'utf-8');
        }
        $i = 0;
        for ($i = 0; $i < ($this->CaseCount - 1); $i++)
        {
            $result[$i + 1] = $word . $endings[$i];
        }
        return $result;
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
        $this->firstName = $firstname;
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
        $this->secondName = $secondname;
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
        $this->fatherName = $fathername;
    }

    /*
     * Установка пола
     * 
     * @param $gender
     * - null - не определено
     * - NCL::$MAN - мужчина
     * - NCL::$WOMAN - женщина
     * @return void
     */

    public function setGender($gender=0)
    {
        $this->gender = $gender;
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

    /*
     * Автоматическое определение пола
     * Возвращает пол по ФИО
     * @return integer
     */

    public function genderAutoDetect()
    {
        $this->gender = null;
        $this->genderDetect();
        return $this->gender;
    }

    /*
     * Разбиение фразы на слова и определение, где имя, где фамилия, где отчество
     * @return string $format - формат имен и фамилий
     */

    public function splitFullName($fullname)
    {
        $this->firstName = '';
        $this->secondName = '';
        $this->fatherName = '';
        $this->gender = null;

        $fullname = trim($fullname);
        $list = explode(' ', $fullname);
        $found = array();
        $duplicate = array();
        $c = count($list);
        for ($i = 0; $i < $c; $i++)
        {
            if (trim($list[$i]))
            {
                $found[$i][0] = $this->detectNamePart($list[$i]);
                $found[$i][1] = $list[$i];
                if ($found[$i][0] == 'N')
                {
                    $this->firstName = $found[$i][1];
                }
                elseif ($found[$i][0] == 'S')
                {
                    $this->secondName = $found[$i][1];
                }
                elseif ($found[$i][0] == 'F')
                {
                    $this->fatherName = $found[$i][1];
                }
            }
        }

        $format = array();
        foreach ($found as $value)
        {
            $format[] = $value;
        }
        if (count($format) == 1)
        {
            return $format[0][0];
        }
        else
        {
            return $format;
        }
    }

    /*
     * Склонение имени
     * 
     * @return boolean
     */

    protected function FirstName()
    {
        $this->genderDetect();
        if ($this->firstName)
        {
            if ($this->gender == 1)
            {
                $result = $this->manFirstName();
            }
            else
            {
                $result = $this->womanFirstName();
            }
            $this->firstResult[0] = $this->firstName;
            return $result;
        }
        else
        {
            $this->firstResult = array_fill(0, $this->CaseCount, "");
            return false;
        }
    }

    /*
     * Склонение фамилии
     * 
     * @return boolean
     */

    protected function SecondName()
    {
        $this->genderDetect();
        if ($this->secondName)
        {
            if ($this->gender == 1)
            {
                $result = $this->manSecondName();
            }
            else
            {
                $result = $this->womanSecondName();
            }
            $this->secondResult[0] = $this->secondName;
            return $result;
        }
        else
        {
            $this->secondResult = array_fill(0, $this->CaseCount, "");
            return false;
        }
    }

    /*
     * Склонение отчеств
     * 
     * @return boolean
     */

    protected function FatherName()
    {
        $this->genderDetect();
        if ($this->fatherName)
        {
            if ($this->gender == 1)
            {
                $result = $this->manFatherName();
            }
            else
            {
                $result = $this->womanFatherName();
            }
            $this->fatherResult[0] = $this->fatherName;
            return $result;
        }
        else
        {
            $this->fatherResult = array_fill(0, $this->CaseCount, "");
            return false;
        }
    }

    /*
     * Поставить имя в определенный падеж
     * 
     * @return string
     */

    public function getFirstNameCase($number=null)
    {
        if (!isset($this->firstResult[0]) or $this->firstResult[0] <> $this->firstName)
        {
            $this->FirstName();
        }
        if ($number < 0 or $number > ($this->CaseCount - 1))
        {
            $number = null;
        }

        if (is_null($number))
        {
            //Возвращаем все падежи
            return $this->firstResult;
        }
        else
        {
            return $this->firstResult[$number];
        }
    }

    /*
     * Поставить фамилию в определенный падеж
     * 
     * @return string
     */

    public function getSecondNameCase($number=null)
    {
        if (!isset($this->secondResult[0]) or $this->secondResult[0] <> $this->secondName)
        {
            $this->SecondName();
        }
        if ($number < 0 or $number > ($this->CaseCount - 1))
        {
            $number = null;
        }

        if (is_null($number))
        {
            //Возвращаем все падежи
            return $this->secondResult;
        }
        else
        {
            return $this->secondResult[$number];
        }
    }

    /*
     * Поставить отчество в определенный падеж
     * 
     * @return string
     */

    public function getFatherNameCase($number=null)
    {
        if (!isset($this->fatherResult[0]) or $this->fatherResult[0] <> $this->fatherName)
        {
            $this->FatherName();
        }
        if ($number < 0 or $number > ($this->CaseCount - 1))
        {
            $number = null;
        }

        if (is_null($number))
        {
            //Возвращаем все падежи
            return $this->fatherResult;
        }
        else
        {
            return $this->fatherResult[$number];
        }
    }

    /*
     * Поставить фамилию в определенный падеж
     * 
     * @return string
     */

    public function qFirstName($firstName, $CaseNumber=null, $gender=0)
    {
        $this->gender = $gender;
        $this->firstName = $firstName;
        return $this->getFirstNameCase($CaseNumber);
    }

    /*
     * Поставить фамилию в определенный падеж
     * 
     * @return string
     */

    public function qSecondName($secondName, $CaseNumber=null, $gender=0)
    {
        $this->gender = $gender;
        $this->secondName = $secondName;
        return $this->getSecondNameCase($CaseNumber);
    }

    /*
     * Поставить отчество в определенный падеж
     * 
     * @return string
     */

    public function qFatherName($fatherName, $CaseNumber=null, $gender=0)
    {
        $this->gender = $gender;
        $this->fatherName = $fatherName;
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
        $length = mb_strlen($format);
        $result = array();
        $cases = array();
        for ($i = 0; $i < $length; $i++)
        {
            $symbol = mb_substr($format, $i, 1);
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
                $symbol = mb_substr($format, $i, 1);
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
        //Если не указан формат используем другую функцию
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
            $length = mb_strlen($format);
            $result = "";
            for ($i = 0; $i < $length; $i++)
            {
                $symbol = mb_substr($format, $i, 1);
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
        $this->gender = $gender;
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->fatherName = $fatherName;

        return $this->getFormatted($caseNum, $format);
    }

    public function getFirstNameRule()
    {
        return $this->frule;
    }

    public function getSecondNameRule()
    {
        return $this->srule;
    }

    /*
     * Быстрое склонение имени. Передается один параметр строка, где может быть ФИО в любом виде. Есть необязательный параметр пол. И так ще необязательный параметр падеж. Если падеж указан, тогда возвращается строка в том падеже, если нет тогда все возможные падежи.
     * 
     * @return string
     */

    public function q($fullname, $caseNum=null, $gender=null)
    {
        $format = $this->splitFullName($fullname);
        $this->gender = $gender;
        $this->genderAutoDetect();
        return $this->getFormatted($caseNum, $format);
    }

}

?>