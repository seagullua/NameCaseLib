<?php

class NameCaseLibRu
{

    public $firstName = "";
    public $secondName = "";
    //Список гласных
    private $vowels = "аеёиоуыэюя";
    //Список согласных
    private $consonant = "бвгджзйклмнпрстфхцчшщ";
    //1 мужчина 2 женщина
    public $who = 1;
    //Нужно изменять имя
    private $needToChangeFirst = true;
    //нужно изменять фамилию
    private $needToChangeSecond = true;
    //ово, -аго, -яго
    private $ovo = array('ово', 'аго', 'яго');
    //их, -ых
    private $ih = array('их', 'ых', 'ко');
    public $firstResult = array();
    public $secondResult = array();
    public $error = "";
    public $frule = "";
    public $srule = "";
    //==========================
    private $firstLastSymbol = "";
    private $secondLastSymbol = "";

    //Сброс настроек
    private function init()
    {
        $this->needToChangeFirst = true;
        $this->needToChangeSecond = true;
        $this->firstLastSymbol = "";
        $this->secondLastSymbol = "";
        $this->firstResult = array();
        $this->secondResult = array();
        $this->error = "";
        $this->frule = "";
        $this->srule = "";
    }

    public function doit($first="", $second="", $type="")
    {
        $this->init();
        if ($first != "" and $second != "")
        {
            //напрямую
            $returnNames = true;
            $this->firstName = $first;
            $this->secondName = $second;
        }
        $this->firstLastSymbol = substr($this->firstName, -1);
        $this->secondLastSymbol = substr($this->secondName, -1);
        //==============
        //Не склоняются
        //==============
        //Женские фамилии, оканчивающиеся на согласный звук и мягкий знак
        if ($this->who == 2 and ($this->in($this->secondLastSymbol, $this->consonant) or $this->secondLastSymbol == 'ь'))
        {
            $this->needToChangeSecond = false;
            $this->error = 1;
        }
        //Женские имена, оканчивающиеся на согласный звук
        elseif ($this->who == 2 and $this->in($this->firstLastSymbol, $this->consonant))
        {
            $this->needToChangeFirst = false;
            $this->error = 2;
        }
        //Мужские и женские имена, оканчивающиеся на гласный звук исключая -а, -я
        elseif ($this->in($this->firstLastSymbol, $this->vowels) and $this->firstLastSymbol <> 'а' and $this->firstLastSymbol <> 'я')
        {
            $this->needToChangeFirst = false;
            $this->error = 3;
        }
        //Фамилии на -а, -я с предшествующим гласным -и
        elseif (($this->secondLastSymbol == 'а' or $this->secondLastSymbol == 'я') and substr($this->secondName, -2, 1) == "и")
        {
            $this->needToChangeSecond = false;
            $this->error = 4;
        }
        /* Русские фамилии, представляющие собой застывшие формы родительного падежа единственного числа с окончаниями: -ово, -аго, -яго (Дурново, Сухово, Живаго, Шамбинаго, Дебяго, Хитрово) и множественного числа с окончаниями: -их, -ых (Крученых, Островских, Польских, Долгих, Седых),  + украинские на ко */
        elseif (in_array(substr($this->secondName, -3, 3), $this->ovo) or in_array(substr($this->secondName, -2, 2), $this->ih))
        {
            $this->needToChangeSecond = false;
            $this->error = 5;
        }

        //Поехали с именами
        //Если надо конешно
        if ($this->needToChangeFirst)
        {
            //Мужские имена, оканчивающиеся на любой согласный (твердый или мягкий) и на -й, скло­няются так же, как обычные существительные мужского рода

            if ($this->who == 1 and (
                    ($this->in($this->firstLastSymbol, $this->consonant)) or
                    ($this->firstLastSymbol == "ь" and $this->in(substr($this->firstName, -2, 1), $this->consonant))))
            {
                //если на й или ь

                if ($this->firstLastSymbol == "ь" or $this->firstLastSymbol == "й")
                {
                    if (substr($this->firstName, -2, 1) <> "и")
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('я', 'ю', 'я', 'ем', 'е'), true);
                        $this->frule = 1;
                    }
                    else
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('я', 'ю', 'я', 'ем', 'и'), true);
                        $this->frule = 10;
                    }
                }
                else
                {
                    if ($this->firstName == "Павел")
                    {
                        $this->firstResult = array("Павел", "Павла", "Павлу", "Павла", "Павлом", "Павле");
                        $this->frule = 100;
                    }
                    else
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('а', 'у', 'а', 'ом', 'е'), false);
                        $this->frule = 2;
                    }
                }
            }
            //Мужские и женские имена, оканчивающиеся на -а, склоняются, как и любые существительные с таким же окончанием
            elseif ($this->firstLastSymbol == "а")
            {
                if (substr($this->firstName, -3, 2) <> "нк")
                {
                    $this->firstResult = $this->padeg($this->firstName, array('ы', 'е', 'у', 'ой', 'е'), true);
                    $this->frule = 3;
                }
                else
                {
                    $this->firstResult = $this->padeg($this->firstName, array('и', 'е', 'у', 'ой', 'е'), true);
                    $this->frule = 15;
                }
            }
            //Мужские и женские имена, оканчивающиеся иа -я, -ья, -ия, -ея, независимо от языка, из которого они происходят, склоняются как сущест­вительные с соответствующими окончаниями
            elseif ($this->firstLastSymbol == "я")
            {
                if ($this->who == 1)
                {
                    $this->firstResult = $this->padeg($this->firstName, array('и', 'е', 'ю', 'ей', 'е'), true);
                    $this->frule = 4;
                }
                else
                {
                    if (substr($this->firstName, -2, 1) <> "и")
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('и', 'е', 'ю', 'ей', 'е'), true);
                        $this->frule = 5;
                    }
                    else
                    {
                        $this->firstResult = $this->padeg($this->firstName, array('и', 'и', 'ю', 'ей', 'и'), true);
                        $this->frule = 8;
                    }
                }
            }
            //Русские женские имена, оканчивающиеся на мягкий согласный, склоняются, как существительные женского рода типа дочь, тень
            elseif ($this->who == 2 and $this->firstLastSymbol == "ь")
            {
                $this->firstResult = $this->padeg($this->firstName, array('и', 'и', 'ь', 'ью', 'и'), true);
                $this->frule = 6;
            }
            else
            {
                $this->makeFirstTheSame();
                $this->frule = 0;
            }
        }
        else
        {
            $this->makeFirstTheSame();
        }
        //Фамилии
        if ($this->needToChangeSecond)
        {
            //Мужские имена, оканчивающиеся на любой согласный (твердый или мягкий) и на -й, скло­няются так же, как обычные существительные мужского рода

            if ($this->who == 1 and (
                    ($this->in($this->secondLastSymbol, $this->consonant)) or
                    ($this->secondLastSymbol == "ь" and $this->in(substr($this->secondName, -2, 1), $this->consonant))))
            {
                //если на й или ь

                if ($this->secondLastSymbol == "ь" or $this->secondLastSymbol == "й")
                {
                    //$this->secondResult = $this->padeg($this->secondName,array('я','ю','я','ем','е'),true);
                    if ($this->who == 1)
                    {
                        if (substr($this->secondName, -2, 1) == "а")
                        {
                            $this->srule = 10;
                            $this->secondResult = $this->padeg($this->secondName, array('я', 'ю', 'я', 'ем', 'е'), true);
                        }
                        else
                        {
                            $this->secondResult = $this->padeg($this->secondName, array('ого', 'ому', 'ого', 'им', 'ом'), true, true);
                            $this->srule = 1;
                        }
                    }
                    else
                    {
                        $this->secondResult = $this->padeg($this->secondName, array('ой', 'ой', 'ую', 'ой', 'ой'), true);
                        $this->srule = 2;
                    }
                }
                else
                {
                    $this->secondResult = $this->padeg($this->secondName, array('а', 'у', 'а', 'ым', 'е'), false);
                    $this->srule = 3;
                }
            }
            //Мужские и женские имена, оканчивающиеся на -а, склоняются, как и любые существительные с таким же окончанием
            elseif ($this->secondLastSymbol == "а")
            {
                if ($this->who == 1)
                {
                    $this->secondResult = $this->padeg($this->secondName, array('ы', 'е', 'у', 'ой', 'е'), true);
                    $this->srule = 4;
                }
                else
                {
                    $this->secondResult = $this->padeg($this->secondName, array('ой', 'ой', 'у', 'ой', 'ой'), true);
                    $this->srule = 5;
                }
            }
            //Мужские и женские имена, оканчивающиеся иа -я, -ья, -ия, -ея, независимо от языка, из которого они происходят, склоняются как сущест­вительные с соответствующими окончаниями
            elseif ($this->secondLastSymbol == "я")
            {
                $this->secondResult = $this->padeg($this->secondName, array('ой', 'ой', 'ую', 'ой', 'ой'), true, true);
                $this->srule = 6;
            }
            //Русские женские имена, оканчивающиеся на мягкий согласный, склоняются, как существительные женского рода типа дочь, тень
            elseif ($this->who == 2 and $this->secondLastSymbol == "ь")
            {
                $this->secondResult = $this->padeg($this->secondName, array('и', 'и', 'ь', 'ью', 'е'), true);
                $this->srule = 7;
            }
            else
            {
                $this->makeSecondTheSame();
                $this->srule = 0;
            }
        }
        else
        {
            $this->makeSecondTheSame();
        }
    }

    private function makeFirstTheSame()
    {
        $this->firstResult = array($this->firstName, $this->firstName, $this->firstName, $this->firstName, $this->firstName, $this->firstName);
    }

    private function makeSecondTheSame()
    {
        $this->secondResult = array($this->secondName, $this->secondName, $this->secondName, $this->secondName, $this->secondName, $this->secondName);
    }

    //входит ли буква в строку
    private function in($letter, $string)
    {

        if (strpos($string, $letter) === false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    private function padeg($word, $endings, $replaceLast=false, $replaceTwoLast=false)
    {
        $result = array($word);
        if ($replaceTwoLast == true)
        {
            //убираем последнею букву
            $word = substr($word, 0, strlen($word) - 2);
        }
        elseif ($replaceLast == true)
        {
            //убираем последнею букву
            $word = substr($word, 0, strlen($word) - 1);
        }
        $i = 0;
        for ($i == 0; $i < 5; $i++)
        {
            $result[$i + 1] = $word . $endings[$i];
        }
        return $result;
    }

}

?>