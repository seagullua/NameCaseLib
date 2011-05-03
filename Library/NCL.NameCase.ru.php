<?php

/*
 * NCL NameCase Russian Language
 * 
 * Клас, которые позволяет склонять русские Имена, Фамили Отчества по падежам.
 * 
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @author Андрей Чайка http://seagull.net.ua/ bymer3@gmail.com
 * @version 0.1.1 03.05.2011 
 * 
 */

class NCLNameCaseRu
{
    /*
     * Имя для склонения
     * @var string
     */

    private $firstName = "";


    /*
     * Фамилия для склонения
     * @var string
     */
    private $secondName = "";


    /*
     * Отчество для склонения
     * @var string
     */
    private $fatherName = "";


    /*
     * @var integer
     * Пол человека
     * <li>0 - не известно</li>
     * <li>1 - мужчина</li>
     * <li>2 - женщина</li>
     */
    private $gender = 0;

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

    /*
     * @static string
     * Список гласных
     */
    private $vowels = "аеёиоуыэюя";

    /*
     * @static string
     * Список согласных
     */
    private $consonant = "бвгджзйклмнпрстфхцчшщ";


    /*
     * @static array()
     * Список окончание для неизменяемых имен
     */
    private $ovo = array('ово', 'аго', 'яго', 'ирь');

    /*
     * @static array()
     * Список окончание для неизменяемых имен
     */
    private $ih = array('их', 'ых', 'ко');

    /*
     * @var array()
     * Результат склонения имени
     */
    private $firstResult = array();


    /*
     * @var array()
     * Результат склонения фамилии
     */
    private $secondResult = array();

    /*
     * @var array()
     * Результат склонения отчества
     */
    private $fatherResult = array();

    /*
     * @var integer
     * Номер правила по которому не склоняется имя/фамилия
     */
    private $error = "";

    /*
     * @var integer
     * Номер правила по которому склоняется имя
     */
    private $frule = "";

    /*
     * @var integer
     * Номер правила по которому не склоняется фамилия
     */
    private $srule = "";

    /*
     * Функция, которая склоняет имя записаное в $this->firstName, по правилам склонения мужских имен.
     * 
     * @return boolean
     */

    private function manFirstName()
    {
        //Последний символ
        $LastSymbol = mb_substr($this->firstName, -1, 1, 'utf-8');
        //Предпоследний символ
        $BeforeLast = mb_substr($this->firstName, -2, 1, 'utf-8');
        $needToChange = true;
        $this->firstResult = array();
        //Не склоняются
        //Мужские и женские имена, оканчивающиеся на гласный звук исключая -а, -я
        if ($this->in($LastSymbol, $this->vowels) and !$this->in($LastSymbol, 'ая'))
        {
            $needToChange = false;
            $this->error = 3;
        }
        //Если нужно склонять
        if ($needToChange)
        {
            //Мужские имена, оканчивающиеся на любой согласный (твердый или мягкий) и на -й, скло­няются так же, как обычные существительные мужского рода
            if ($this->in($LastSymbol, $this->consonant) or
                    ($LastSymbol == "ь" and $this->in($BeforeLast, $this->consonant)))
            {
                //если на й или ь
                if ($this->in($LastSymbol, 'ьй'))
                {
                    if ($BeforeLast <> "и")
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('я', 'ю', 'я', 'ем', 'е'), true);
                        $this->frule = 1;
                        return true;
                    }
                    else
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('я', 'ю', 'я', 'ем', 'и'), true);
                        $this->frule = 10;
                        return true;
                    }
                }
                else
                {
                    if ($this->firstName == "Павел")
                    {
                        $this->firstResult = array("Павел", "Павла", "Павлу", "Павла", "Павлом", "Павле");
                        $this->frule = 200;
                        return true;
                    }
                    elseif ($this->firstName == "Лев")
                    {
                        $this->firstResult = array("Лев", "Льва", "Льву", "Льва", "Львом", "Льве");
                        $this->frule = 201;
                        return true;
                    }
                    else
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('а', 'у', 'а', 'ом', 'е'), false);
                        $this->frule = 2;
                        return true;
                    }
                }
            }
            //Мужские и женские имена, оканчивающиеся на -а, склоняются, как и любые существительные с таким же окончанием
            elseif ($LastSymbol == "а")
            {
                if ($BeforeLast <> 'к')
                {
                    $this->firstResult = $this->padeg($this->firstName, array('ы', 'е', 'у', 'ой', 'е'), true);
                    $this->frule = 3;
                    return true;
                }
                else
                {
                    $this->firstResult = $this->padeg($this->firstName, array('и', 'е', 'у', 'ой', 'е'), true);
                    $this->frule = 15;
                    return true;
                }
            }
            //Мужские и женские имена, оканчивающиеся иа -я, -ья, -ия, -ея, независимо от языка, из которого они происходят, склоняются как сущест­вительные с соответствующими окончаниями
            elseif ($LastSymbol == "я")
            {
                $this->firstResult = $this->padeg($this->firstName, array('и', 'е', 'ю', 'ей', 'е'), true);
                $this->frule = 4;
                return true;
            }
        }

        //Если правило не нашли, тогда оставляем как было
        if (!isset($this->firstResult[0]))
        {
            $this->makeFirstTheSame();
            return false;
        }
    }

    /*
     * Функция, которая склоняет имя записаное в $this->firstName, по правилам склонения женских имен.
     * 
     * @return boolean
     */

    private function womanFirstName()
    {
        //Последний символ
        $LastSymbol = mb_substr($this->firstName, -1, 1, 'utf-8');
        //Предпоследний символ
        $BeforeLast = mb_substr($this->firstName, -2, 1, 'utf-8');
        $needToChange = true;
        $this->firstResult = array();
        //Не склоняются
        //Женские имена, оканчивающиеся на согласный звук
        if ($this->in($LastSymbol, $this->consonant))
        {
            $needToChange = false;
            $this->error = 2;
        }
        //Мужские и женские имена, оканчивающиеся на гласный звук исключая -а, -я
        if ($this->in($LastSymbol, $this->vowels) and !$this->in($LastSymbol, 'ая'))
        {
            $needToChange = false;
            $this->error = 3;
        }
        //Если нужно склонять
        if ($needToChange)
        {
            //Мужские и женские имена, оканчивающиеся на -а, склоняются, как и любые существительные с таким же окончанием
            if ($LastSymbol == "а")
            {
                if (!$this->in($BeforeLast, 'шхкг'))
                {
                    $this->firstResult = $this->padeg($this->firstName, array('ы', 'е', 'у', 'ой', 'е'), true);
                    $this->frule = 3;
                    return true;
                }
                else
                {
                    //ей посля шиплячего
                    if ($BeforeLast == 'ш')
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('и', 'е', 'у', 'ей', 'е'), true);
                        $this->frule = 25;
                        return true;
                    }
                    else
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('и', 'е', 'у', 'ой', 'е'), true);
                        $this->frule = 15;
                        return true;
                    }
                }
            }
            //Мужские и женские имена, оканчивающиеся иа -я, -ья, -ия, -ея, независимо от языка, из которого они происходят, склоняются как сущест­вительные с соответствующими окончаниями
            elseif ($LastSymbol == "я")
            {
                if ($BeforeLast <> "и")
                {
                    $this->firstResult = $this->padeg($this->firstName, array('и', 'е', 'ю', 'ей', 'е'), true);
                    $this->frule = 5;
                    return true;
                }
                else
                {
                    $this->firstResult = $this->padeg($this->firstName, array('и', 'и', 'ю', 'ей', 'и'), true);
                    $this->frule = 8;
                    return true;
                }
            }
            //Русские женские имена, оканчивающиеся на мягкий согласный, склоняются, как существительные женского рода типа дочь, тень
            elseif ($LastSymbol == "ь")
            {
                $this->firstResult = $this->padeg($this->firstName, array('и', 'и', 'ь', 'ью', 'и'), true);
                $this->frule = 6;
                return true;
            }
        }
        //Если правило не нашли, тогда оставляем как было
        if (!isset($this->firstResult[0]))
        {
            $this->makeFirstTheSame();
            return false;
        }
    }

    /*
     * Функция, которая склоняет фамилию записаное в $this->secondName, по правилам склонения мужских фамилий.
     * 
     * @return boolean
     */

    private function manSecondName()
    {
        //Последний символ
        $LastSymbol = mb_substr($this->secondName, -1, 1, 'utf-8');
        //Предпоследний символ
        $BeforeLast = mb_substr($this->secondName, -2, 1, 'utf-8');
        $needToChange = true;
        $this->secondResult = array();
        //Не склоняются
        //Фамилии на -а, -я с предшествующим гласным -и
        if ($this->in($LastSymbol, 'ая') and $BeforeLast == "и")
        {
            $needToChange = false;
            $this->error = 4;
        }
        /* Русские фамилии, представляющие собой застывшие формы родительного падежа единственного числа с окончаниями: -ово, -аго, -яго (Дурново, Сухово, Живаго, Шамбинаго, Дебяго, Хитрово) и множественного числа с окончаниями: -их, -ых (Крученых, Островских, Польских, Долгих, Седых),  + украинские на ко */
        if (in_array(mb_substr($this->secondName, -3, 3, 'utf-8'), $this->ovo) or in_array(mb_substr($this->secondName, -2, 2, 'utf-8'), $this->ih))
        {
            $needToChange = false;
            $this->error = 5;
        }
        //Если нужно склонять
        if ($needToChange)
        {
            //Мужские фамилии, оканчивающиеся на любой согласный (твердый или мягкий) и на -й, скло­няются так же, как обычные существительные мужского рода
            if ($this->in($LastSymbol, $this->consonant) or
                    ($LastSymbol == "ь" and $this->in($BeforeLast, $this->consonant)))
            {
                //если на й или ь
                if ($this->in($LastSymbol, 'ьй'))
                {

                    if ((mb_substr($this->secondName, -3, 1, 'utf-8') == "а") or $BeforeLast == 'е')
                    {
                        $this->srule = 101;
                        $this->secondResult = $this->padeg($this->secondName, array('я', 'ю', 'я', 'ем', 'е'), true);
                        return true;
                    }
                    //Толстой -» ТолстЫм 
                    elseif ($BeforeLast == 'ы' or mb_substr($this->secondName, -3, 1, 'utf-8') == 'т')
                    {
                        $this->secondResult = $this->padeg($this->secondName, array('ого', 'ому', 'ого', 'ым', 'ом'), true, true);
                        $this->srule = 102;
                        return true;
                    }
                    //Лесничий
                    elseif ((mb_substr($this->secondName, -3, 3, 'utf-8')) == 'чий')
                    {
                        $this->secondResult = $this->padeg($this->secondName, array('ьего', 'ьему', 'ьего', 'ьим', 'ьем'), true, true);
                        $this->srule = 103;
                        return true;
                    }
                    else
                    {
                        $this->secondResult = $this->padeg($this->secondName, array('ого', 'ому', 'ого', 'им', 'ом'), true, true);
                        $this->srule = 1;
                        return true;
                    }
                }
                else
                {
                    //Если предпоследняя к, то нужно ом вместо ым
                    if ($this->in($LastSymbol, 'к'))
                    {
                        //Если перед слово на ок, то нужно убрать о
                        if ($this->in($BeforeLast, 'о'))
                        {
                            $this->secondResult = $this->padeg($this->secondName, array('ка', 'ку', 'ка', 'ком', 'ке'), false, true);
                            $this->srule = 2301;
                            return true;
                        }
                        if ($this->in($BeforeLast, 'е'))
                        {
                            $this->secondResult = $this->padeg($this->secondName, array('ька', 'ьку', 'ька', 'ьком', 'ьке'), false, true);
                            $this->srule = 2302;
                            return true;
                        }
                        else
                        {
                            $this->secondResult = $this->padeg($this->secondName, array('а', 'у', 'а', 'ом', 'е'), false);
                            $this->srule = 23;
                            return true;
                        }
                    }
                    else
                    {
                        //Если основа на ч, то нужно ем
                        if ($LastSymbol == 'ч')
                        {
                            $this->secondResult = $this->padeg($this->secondName, array('а', 'у', 'а', 'ем', 'е'), false);
                            $this->srule = 301;
                            return true;
                        }
                        else
                        {
                            $this->secondResult = $this->padeg($this->secondName, array('а', 'у', 'а', 'ым', 'е'), false);
                            $this->srule = 3;
                            return true;
                        }
                    }
                }
            }
            //Мужские и женские имена, оканчивающиеся на -а, склоняются, как и любые существительные с таким же окончанием
            elseif ($LastSymbol == "а")
            {
                //Если основа на ш, то нужно и, ей
                if ($this->in($BeforeLast, 'ш'))
                {
                    $this->secondResult = $this->padeg($this->secondName, array('и', 'е', 'у', 'ей', 'е'), true);
                    $this->srule = 401;
                    return true;
                }
                elseif ($this->in($BeforeLast, 'хк'))
                {
                    $this->secondResult = $this->padeg($this->secondName, array('и', 'е', 'у', 'ой', 'е'), true);
                    $this->srule = 402;
                    return true;
                }
                else
                {
                    $this->secondResult = $this->padeg($this->secondName, array('ы', 'е', 'у', 'ой', 'е'), true);
                    $this->srule = 4;
                    return true;
                }
            }
            //Мужские и женские имена, оканчивающиеся иа -я, -ья, -ия, -ея, независимо от языка, из которого они происходят, склоняются как сущест­вительные с соответствующими окончаниями
            elseif ($LastSymbol == "я")
            {
                $this->secondResult = $this->padeg($this->secondName, array('ой', 'ой', 'ую', 'ой', 'ой'), true, true);
                $this->srule = 6;
                return true;
            }
        }
        //Если правило не нашли, тогда оставляем как было
        if (!isset($this->secondResult[0]))
        {
            $this->makeSecondTheSame();
            return false;
        }
    }

    /*
     * Функция, которая склоняет фамилию записаное в $this->secondName, по правилам склонения женских фамилий.
     * 
     * @return boolean
     */

    private function womanSecondName()
    {
        //Последний символ
        $LastSymbol = mb_substr($this->secondName, -1, 1, 'utf-8');
        //Предпоследний символ
        $BeforeLast = mb_substr($this->secondName, -2, 1, 'utf-8');
        $needToChange = true;
        $this->secondResult = array();
        //Не склоняются
        //Женские фамилии, оканчивающиеся на согласный звук и мягкий знак
        if ($this->in($LastSymbol, $this->consonant) or $LastSymbol == 'ь')
        {
            $needToChange = false;
            $this->error = 1;
        }
        //Фамилии на -а, -я с предшествующим гласным -и
        if ($this->in($LastSymbol, 'ая') and $BeforeLast == "и")
        {
            $needToChange = false;
            $this->error = 4;
        }
        /* Русские фамилии, представляющие собой застывшие формы родительного падежа единственного числа с окончаниями: -ово, -аго, -яго (Дурново, Сухово, Живаго, Шамбинаго, Дебяго, Хитрово) и множественного числа с окончаниями: -их, -ых (Крученых, Островских, Польских, Долгих, Седых),  + украинские на ко */
        if (in_array(mb_substr($this->secondName, -3, 3, 'utf-8'), $this->ovo) or in_array(mb_substr($this->secondName, -2, 2, 'utf-8'), $this->ih))
        {
            $needToChange = false;
            $this->error = 5;
        }
        //Если нужно склонять
        if ($needToChange)
        {
            //Мужские и женские имена, оканчивающиеся на -а, склоняются, как и любые существительные с таким же окончанием
            if ($LastSymbol == "а")
            {
                if ($this->in($BeforeLast, 'гк'))
                {
                    $this->secondResult = $this->padeg($this->secondName, array('и', 'е', 'у', 'ой', 'е'), true);
                    $this->srule = 501;
                    return true;
                }
                elseif ($this->in($BeforeLast, 'ш'))
                {
                    $this->secondResult = $this->padeg($this->secondName, array('и', 'е', 'у', 'ей', 'е'), true);
                    $this->srule = 502;
                    return true;
                }
                else
                {
                    $this->secondResult = $this->padeg($this->secondName, array('ой', 'ой', 'у', 'ой', 'ой'), true);
                    $this->srule = 5;
                    return true;
                }
            }
            //Мужские и женские имена, оканчивающиеся иа -я, -ья, -ия, -ея, независимо от языка, из которого они происходят, склоняются как сущест­вительные с соответствующими окончаниями
            elseif ($LastSymbol == "я")
            {
                $this->secondResult = $this->padeg($this->secondName, array('ой', 'ой', 'ую', 'ой', 'ой'), true, true);
                $this->srule = 6;
                return true;
            }
        }

        //Если правило не нашли, тогда оставляем как было
        if (!isset($this->secondResult[0]))
        {
            $this->makeSecondTheSame();
            return false;
        }
    }

    /*
     * Функция, которая склоняет отчество записаное в $this->secondName, по правилам склонения мужских отчеств.
     * 
     * @return boolean
     */

    private function manFatherName()
    {
        //Проверяем действительно ли отчество
        if ($this->fatherName == 'Ильич')
        {
            $this->fatherResult = $this->padeg($this->fatherName, array('а', 'у', 'а', 'ом', 'е'), false, false);
            return true;
        }
        elseif (mb_substr($this->fatherName, -2, 2, 'utf-8') == 'ич')
        {
            $this->fatherResult = $this->padeg($this->fatherName, array('а', 'у', 'а', 'ем', 'е'), false, false);
            return true;
        }
        else
        {
            $this->makeFatherTheSame();
            return false;
        }
    }

    /*
     * Функция, которая склоняет отчество записаное в $this->fatherName, по правилам склонения женских отчеств.
     * 
     * @return boolean
     */

    private function womanFatherName()
    {
        //Проверяем действительно ли отчество
        if (mb_substr($this->fatherName, -2, 2, 'utf-8') == 'на')
        {
            $this->fatherResult = $this->padeg($this->fatherName, array('ы', 'е', 'у', 'ой', 'е'), true, false);
            return true;
        }
        else
        {
            $this->makeFatherTheSame();
            return false;
        }
    }

    /*
     * Функция, которая ставит имя во всех падежах в форме именительного падежа.
     * 
     * @return void
     */

    private function makeFirstTheSame()
    {
        $this->firstResult = array_fill(0, 6, $this->firstName);
    }

    /*
     * Функция, которая ставит фамилию во всех падежах в форме именительного падежа.
     * 
     * @return void
     */

    private function makeSecondTheSame()
    {
        $this->secondResult = array_fill(0, 6, $this->secondName);
    }

    /*
     * Функция, которая ставит фамилию во всех падежах в форме именительного падежа.
     * 
     * @return void
     */

    private function makeFatherTheSame()
    {
        $this->fatherResult = array_fill(0, 6, $this->fatherName);
    }

    /*
     * Функция проверяет, входит ли буква в строку.
     * 
     * @param $letter - буква
     * @param $string - строка
     * 
     * @return boolean
     */

    private function in($letter, $string)
    {

        if ($letter and mb_strpos($string, $letter) === false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    /*
     * Функция дополняет переданое слово нужными окончаниями.
     * 
     * @param $word (string) - слово
     * @param $endings (array) - окончания
     * @param $replaceLast (boolean) - убрать последнюю букву
     * @param $replaceTwoLast (boolean) - убрать две последних буквы
     * 
     * @return boolean
     */

    private function padeg($word, $endings, $replaceLast=false, $replaceTwoLast=false)
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
        for ($i == 0; $i < 5; $i++)
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
     * - NCLNameCaseRu::$MAN - мужчина
     * - NCLNameCaseRu::$WOMAN - женщина
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
     * @return void
     */

    private function genderDetect()
    {
        if (!$this->gender)
        {
            //Определение пола по отчеству
            if (isset($this->fatherName) and $this->fatherName)
            {
                $LastTwo = mb_substr($this->fatherName, -2, 2, 'utf-8');
                if ($LastTwo=='ич')
                {
                    $this->gender=NCLNameCaseRu::$MAN; // мужчина
                    return true;
                }
                if ($LastTwo=='на')
                {
                    $this->gender=NCLNameCaseRu::$WOMAN; // женщина
                    return true;
                }
            }
            $man=0; //Мужчина
            $woman=0; //Женщина
            $FLastSymbol=mb_substr($this->firstName, -1, 1, 'utf-8');
            $FLastTwo=mb_substr($this->firstName, -2, 2, 'utf-8');
            $FLastThree=mb_substr($this->firstName, -3, 3, 'utf-8');
            $FLastFour=mb_substr($this->firstName, -4, 4, 'utf-8');
            
            $SLastSymbol=mb_substr($this->secondName, -1, 1, 'utf-8');
            $SLastTwo=mb_substr($this->secondName, -2, 2, 'utf-8');
            $SLastThree=mb_substr($this->secondName, -3, 3, 'utf-8');
            //Если нет отчества, то определяем по имени и фамилии, будем считать вероятность
            if (isset($this->firstName) and $this->firstName)
            {
                //Попробуем выжать максимум из имени
                //Если имя заканчивается на й, то скорее всего мужчина
                if($FLastSymbol=='й')
                {
                    $man+=0.9;
                }
                if(in_array($FLastTwo, array('он', 'ов', 'ав', 'ам','ол', 'ан', 'рд', 'мп')))
                {
                    $man+=0.3;
                }
                if($this->in($FLastSymbol,$this->consonant))
                {
                    $man+=0.01;
                }
                if($FLastSymbol=='ь')
                {
                    $man+=0.02;
                }
                
                if(in_array($FLastTwo, array('вь', 'фь', 'ль')))
                {
                    $woman+=0.1;
                }
                
                if(in_array($FLastTwo, array('ла')))
                {
                    $woman+=0.04;
                }
                
                if(in_array($FLastTwo, array('то', 'ма')))
                {
                    $man+=0.01;
                }
                
                if(in_array($FLastThree, array('лья','вва','ока','ука', 'ита')))
                {
                    $man+=0.2;
                }
                
                if(in_array($FLastThree, array('има')))
                {
                    $woman+=0.15;
                }
                
                if(in_array($FLastThree, array('лия', 'ния', 'сия','дра','лла','кла')))
                {
                    $woman+=0.5;
                }
                
                if(in_array($FLastFour, array('льда', 'фира', 'нина','лита')))
                {
                    $woman+=0.5;
                }
                
            }
            if (isset($this->secondName) and $this->secondName)
            {
                if(in_array($SLastTwo, array('ов','ин', 'ев', 'ий', 'ёв','ый', 'ын','ой')))
                {
                    $man+=0.4;
                }
                
                if(in_array($SLastThree, array('ова', 'ина', 'ева', 'ёва', 'ына','ая')))
                {
                    $woman+=0.4;
                }
                
                if(in_array($SLastTwo, array('ая')))
                {
                    $woman+=0.4;
                }
            }
            //Теперь смотрим, кто больше набрал
            if($man>$woman)
            {
                $this->gender = NCLNameCaseRu::$MAN;
            }
            else
            {
                $this->gender = NCLNameCaseRu::$WOMAN;
            }
        }
    }
    
    /*
     * Автоматическое определение пола
     * Возвращает пол по ФИО
     * @return integer
     */
    public function genderAutoDetect()
    {
        $this->gender=null;
        $this->genderDetect();
        return $this->gender;
    }
    
    /*
     * Склонение имени
     * 
     * @return boolean
     */

    private function FirstName()
    {
        $this->genderDetect();
        if ($this->firstName)
        {
            if ($this->gender == 1)
            {
                return $this->manFirstName();
            }
            else
            {
                return $this->womanFirstName();
            }
        }
        else
        {
            $this->firstResult = array_fill(0, 6, "");
            return false;
        }
    }

    /*
     * Склонение фамилии
     * 
     * @return boolean
     */

    private function SecondName()
    {
        $this->genderDetect();
        if ($this->secondName)
        {
            if ($this->gender == 1)
            {
                return $this->manSecondName();
            }
            else
            {
                return $this->womanSecondName();
            }
        }
        else
        {
            $this->secondResult = array_fill(0, 6, "");
            return false;
        }
    }

    /*
     * Склонение отчеств
     * 
     * @return boolean
     */

    private function FatherName()
    {
        $this->genderDetect();
        if ($this->fatherName)
        {
            if ($this->gender == 1)
            {
                return $this->manFatherName();
            }
            else
            {
                return $this->womanFatherName();
            }
        }
        else
        {
            $this->fatherResult = array_fill(0, 6, "");
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
        if ($number < 0 or $number > 5)
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
        if ($number < 0 or $number > 5)
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
        if ($number < 0 or $number > 5)
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

}

?>