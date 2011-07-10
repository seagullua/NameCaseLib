<?php

/**
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @package NameCaseLib
 */
/**
 * 
 */
require_once dirname(__FILE__) . '/NCL/NCLNameCaseCore.php';

/**
 * <b>NCL NameCase Russian Language</b>
 * 
 * Русские правила склонения ФИО
 * Правила определения пола человека по ФИО для русского языка
 * Система разделения фамилий имен и отчеств для русского языка
 * 
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4
 * @package NameCaseLib
 */
class NCLNameCaseRu extends NCLNameCaseCore
{
    /**
     * Версия языкового файла
     * @var string 
     */
    protected $languageBuild = '11071017';
    
    /**
     * Количество падежей в языке
     * @var int
     */
    protected $CaseCount = 6;
    /**
     * Список гласных русского языка
     * @var string 
     */
    private $vowels = "аеёиоуыэюя";
    /**
     * Список согласных русского языка
     * @var string  
     */
    private $consonant = "бвгджзйклмнпрстфхцчшщ";
    /**
     * Окончания имен/фамилий, который не склоняются
     * @var array 
     */
    private $ovo = array('ово', 'аго', 'яго', 'ирь');
    /**
     * Окончания имен/фамилий, который не склоняются
     * @var array 
     */
    private $ih = array('их', 'ых', 'ко');

    /**
     * Мужские имена, оканчивающиеся на любой ь и -й, 
     * скло­няются так же, как обычные существительные мужского рода
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function manRule1()
    {
        if ($this->in($this->Last(1), 'ьй'))
        {
            if ($this->Last(2, 1) != "и")
            {
                $this->wordForms($this->workingWord, array('я', 'ю', 'я', 'ем', 'е'), 1);
                $this->Rule(101);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('я', 'ю', 'я', 'ем', 'и'), 1);
                $this->Rule(102);
                return true;
            }
        }
        return false;
    }

    /**
     * Мужские имена, оканчивающиеся на любой твердый согласный, 
     * склоняются так же, как обычные существительные мужского рода
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function manRule2()
    {
        if ($this->in($this->Last(1), $this->consonant))
        {
            if ($this->inNames($this->workingWord, "Павел"))
            {
                $this->lastResult = array("Павел", "Павла", "Павлу", "Павла", "Павлом", "Павле");
                $this->Rule(201);
                return true;
            }
            elseif ($this->inNames($this->workingWord, "Лев"))
            {
                $this->lastResult = array("Лев", "Льва", "Льву", "Льва", "Львом", "Льве");
                $this->Rule(202);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ом', 'е'));
                $this->Rule(203);
                return true;
            }
        }
        return false;
    }

    /**
     * Мужские и женские имена, оканчивающиеся на -а, склоняются, как и любые 
     * существительные с таким же окончанием
     * Мужские и женские имена, оканчивающиеся иа -я, -ья, -ия, -ея, независимо от языка, 
     * из которого они происходят, склоняются как существительные с соответствующими окончаниями
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function manRule3()
    {
        if ($this->Last(1) == "а")
        {
            if ($this->Last(2, 1) <> 'к')
            {
                $this->wordForms($this->workingWord, array('ы', 'е', 'у', 'ой', 'е'), 1);
                $this->Rule(301);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ой', 'е'), 1);
                $this->Rule(302);
                return true;
            }
        }
        elseif ($this->Last(1) == "я")
        {
            $this->wordForms($this->workingWord, array('и', 'е', 'ю', 'ей', 'е'), 1);
            $this->Rule(303);
            return true;
        }
        return false;
    }

    /**
     * Мужские фамилии, оканчивающиеся на -ь -й, склоняются так же, 
     * как обычные существительные мужского рода
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function manRule4()
    {
        if ($this->in($this->Last(1), 'ьй'))
        {

            if ($this->Last(3, 1) == 'а' or $this->Last(2, 1) == 'е')
            {
                $this->wordForms($this->workingWord, array('я', 'ю', 'я', 'ем', 'е'), 1);
                $this->Rule(401);
                return true;
            }
            //Толстой -» ТолстЫм 
            elseif ($this->Last(2, 1) == 'ы' or $this->Last(3, 1) == 'т')
            {
                $this->wordForms($this->workingWord, array('ого', 'ому', 'ого', 'ым', 'ом'), 2);
                $this->Rule(402);
                return true;
            }
            //Лесничий
            elseif ($this->Last(3) == 'чий')
            {
                $this->wordForms($this->workingWord, array('ьего', 'ьему', 'ьего', 'ьим', 'ьем'), 2);
                $this->Rule(403);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('ого', 'ому', 'ого', 'им', 'ом'), 2);
                $this->Rule(404);
                return true;
            }
        }
        return false;
    }

    /**
     * Мужские фамилии, оканчивающиеся на -к
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function manRule5()
    {
        if ($this->Last(1) == 'к')
        {
            //Если перед слово на ок, то нужно убрать о
            if ($this->Last(2, 1) == 'о')
            {
                $this->wordForms($this->workingWord, array('ка', 'ку', 'ка', 'ком', 'ке'), 2);
                $this->Rule(501);
                return true;
            }
            if ($this->Last(2, 1) == 'е')
            {
                $this->wordForms($this->workingWord, array('ька', 'ьку', 'ька', 'ьком', 'ьке'), 2);
                $this->Rule(502);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ом', 'е'));
                $this->Rule(503);
                return true;
            }
        }
        return false;
    }

    /**
     * Мужские фамили на согласный выбираем ем/ом/ым
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function manRule6()
    {
        if ($this->Last(1) == 'ч')
        {
            $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ем', 'е'));
            $this->Rule(601);
            return true;
        }
        elseif ($this->Last(1) == 'р')
        {
            $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ом', 'е'));
            $this->Rule(602);
            return true;
        }
        elseif ($this->in($this->Last(1), $this->consonant))
        {
            $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ым', 'е'));
            $this->Rule(603);
            return true;
        }
        return false;
    }

    /**
     * Мужские фамили на -а -я
     * @return bool true если правило было задействовано и false если нет.  
     */
    protected function manRule7()
    {
        if ($this->Last(1) == "а")
        {
            //Если основа на ш, то нужно и, ей
            if ($this->Last(2, 1) == 'ш')
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ей', 'е'), 1);
                $this->Rule(701);
                return true;
            }
            elseif ($this->in($this->Last(2, 1), 'хк'))
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ой', 'е'), 1);
                $this->Rule(702);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('ы', 'е', 'у', 'ой', 'е'), 1);
                $this->Rule(703);
                return true;
            }
        }
        elseif ($this->Last(1) == "я")
        {
            $this->wordForms($this->workingWord, array('ой', 'ой', 'ую', 'ой', 'ой'), 2);
            $this->Rule(704);
            return true;
        }
        return false;
    }

    /**
     * Не склоняются мужский фамилии
     * @return bool true если правило было задействовано и false если нет.  
     */
    protected function manRule8()
    {
        if ($this->in($this->Last(3), $this->ovo) or $this->in($this->Last(2), $this->ih))
        {
            $this->Rule(8);
            $this->lastResult = array_fill(0, $this->CaseCount, $this->workingWord);
            return true;
        }
        return false;
    }

    /**
     * Мужские и женские имена, оканчивающиеся на -а, склоняются, 
     * как и любые существительные с таким же окончанием
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function womanRule1()
    {
        if ($this->Last(1) == "а" and $this->Last(2, 1)!='и')
        {
            if (!$this->in($this->Last(2, 1), 'шхкг'))
            {
                $this->wordForms($this->workingWord, array('ы', 'е', 'у', 'ой', 'е'), 1);
                $this->Rule(101);
                return true;
            }
            else
            {
                //ей посля шиплячего
                if ($this->Last(2, 1) == 'ш')
                {
                    $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ей', 'е'), 1);
                    $this->Rule(102);
                    return true;
                }
                else
                {
                    $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ой', 'е'), 1);
                    $this->Rule(103);
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Мужские и женские имена, оканчивающиеся иа -я, -ья, -ия, -ея, независимо от языка, 
     * из которого они происходят, склоняются как сущест­вительные с соответствующими окончаниями
     * @return bool true если правило было задействовано и false если нет.  
     */
    protected function womanRule2()
    {
        if ($this->Last(1) == "я")
        {
            if ($this->Last(2, 1) <> "и")
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'ю', 'ей', 'е'), 1);
                $this->Rule(201);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('и', 'и', 'ю', 'ей', 'и'), 1);
                $this->Rule(202);
                return true;
            }
        }
        return false;
    }

    /**
     * Русские женские имена, оканчивающиеся на мягкий согласный, склоняются, 
     * как существительные женского рода типа дочь, тень
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function womanRule3()
    {
        if ($this->Last(1) == "ь")
        {
            $this->wordForms($this->workingWord, array('и', 'и', 'ь', 'ью', 'и'), 1);
            $this->Rule(3);
            return true;
        }
        return false;
    }

    /**
     * Женские фамилия, оканчивающиеся на -а -я, склоняются,
     * как и любые существительные с таким же окончанием
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function womanRule4()
    {

        if ($this->Last(1) == "а")
        {
            if ($this->in($this->Last(2, 1), 'гк'))
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ой', 'е'), 1);
                $this->Rule(401);
                return true;
            }
            elseif ($this->in($this->Last(2, 1), 'ш'))
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ей', 'е'), 1);
                $this->Rule(402);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('ой', 'ой', 'у', 'ой', 'ой'), 1);
                $this->Rule(403);
                return true;
            }
        }
        elseif ($this->Last(1) == "я")
        {
            $this->wordForms($this->workingWord, array('ой', 'ой', 'ую', 'ой', 'ой'), 2);
            $this->Rule(404);
            return true;
        }
        return false;
    }

    /**
     * Функция пытается применить цыпочку правил для мужских имен
     * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
     */
    protected function manFirstName()
    {
        return $this->RulesChain('man', array(1, 2, 3));
    }

    /**
     * Функция пытается применить цыпочку правил для женских имен
     * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
     */
    protected function womanFirstName()
    {
        return $this->RulesChain('woman', array(1, 2, 3));
    }

    /**
     * Функция пытается применить цыпочку правил для мужских фамилий
     * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
     */
    protected function manSecondName()
    {
        return $this->RulesChain('man', array(8, 4, 5, 6, 7));
    }

    /**
     * Функция пытается применить цыпочку правил для женских фамилий
     * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
     */
    protected function womanSecondName()
    {
        return $this->RulesChain('woman', array(4));
    }

    /**
     * Функция склоняет мужский отчества
     * @return boolean true - если слово было успешно изменено, false - если не получилось этого сделать
     */
    protected function manFatherName()
    {
        //Проверяем действительно ли отчество
        if ($this->inNames($this->workingWord, 'Ильич'))
        {
            $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ом', 'е'));
            return true;
        }
        elseif ($this->Last(2) == 'ич')
        {
            $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ем', 'е'));
            return true;
        }
        return false;
    }

    /**
     * Функция склоняет женские отчества
     * @return boolean true - если слово было успешно изменено, false - если не получилось этого сделать
     */
    protected function womanFatherName()
    {
        //Проверяем действительно ли отчество
        if ($this->Last(2) == 'на')
        {
            $this->wordForms($this->workingWord, array('ы', 'е', 'у', 'ой', 'е'), 1);
            return true;
        }
        return false;
    }

    /**
     * Определение пола по правилам имен
     * @param NCLNameCaseWord $word обьект класса слов, для которого нужно определить пол
     */
    protected function GenderByFirstName(NCLNameCaseWord $word)
    {
        $this->setWorkingWord($word->getWord());

        $man = 0; //Мужчина
        $woman = 0; //Женщина
        //Попробуем выжать максимум из имени
        //Если имя заканчивается на й, то скорее всего мужчина
        if ($this->Last(1) == 'й')
        {
            $man+=0.9;
        }
        if ($this->in($this->Last(2), array('он', 'ов', 'ав', 'ам', 'ол', 'ан', 'рд', 'мп')))
        {
            $man+=0.3;
        }
        if ($this->in($this->Last(1), $this->consonant))
        {
            $man+=0.01;
        }
        if ($this->Last(1) == 'ь')
        {
            $man+=0.02;
        }

        if ($this->in($this->Last(2), array('вь', 'фь', 'ль')))
        {
            $woman+=0.1;
        }

        if ($this->in($this->Last(2), array('ла')))
        {
            $woman+=0.04;
        }

        if ($this->in($this->Last(2), array('то', 'ма')))
        {
            $man+=0.01;
        }

        if ($this->in($this->Last(3), array('лья', 'вва', 'ока', 'ука', 'ита')))
        {
            $man+=0.2;
        }

        if ($this->in($this->Last(3), array('има')))
        {
            $woman+=0.15;
        }

        if ($this->in($this->Last(3), array('лия', 'ния', 'сия', 'дра', 'лла', 'кла', 'опа')))
        {
            $woman+=0.5;
        }

        if ($this->in($this->Last(4), array('льда', 'фира', 'нина', 'лита')))
        {
            $woman+=0.5;
        }

        $word->setGender($man, $woman);
    }

    /**
     * Определение пола по правилам фамилий
     * @param NCLNameCaseWord $word обьект класса слов, для которого нужно определить пол
     */
    protected function GenderBySecondName(NCLNameCaseWord $word)
    {
        $this->setWorkingWord($word->getWord());

        $man = 0; //Мужчина
        $woman = 0; //Женщина

        if ($this->in($this->Last(2), array('ов', 'ин', 'ев', 'ий', 'ёв', 'ый', 'ын', 'ой')))
        {
            $man+=0.4;
        }

        if ($this->in($this->Last(3), array('ова', 'ина', 'ева', 'ёва', 'ына')))
        {
            $woman+=0.4;
        }

        if ($this->in($this->Last(2), array('ая')))
        {
            $woman+=0.4;
        }

        $word->setGender($man, $woman);
    }

    /**
     * Определение пола по правилам отчеств
     * @param NCLNameCaseWord $word обьект класса слов, для которого нужно определить пол
     */
    protected function GenderByFatherName(NCLNameCaseWord $word)
    {
        $this->setWorkingWord($word->getWord());

        if ($this->Last(2) == 'ич')
        {
            $word->setGender(10, 0); // мужчина
        }
        if ($this->Last(2) == 'на')
        {
            $word->setGender(0, 12); // женщина
        }
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
        $namepart = $word->getWord();
        $this->setWorkingWord($namepart);

        //Считаем вероятность
        $first = 0;
        $second = 0;
        $father = 0;

        //если смахивает на отчество
        if ($this->in($this->Last(3), array('вна', 'чна', 'вич', 'ьич')))
        {
            $father+=3;
        }

        //Похоже на имя
        if ($this->in($this->Last(3), array('тин', 'тын')))
        {
            $first+=0.5;
        }

        //Исключения
        if ($this->inNames($namepart, array('Лев', 'Яков', 'Мальвина', 'Антонина', 'Альбина', 'Агриппина', 'Каллиник', 'Маша', 'Ольга', 'Еремей', 'Фаина', 'Лазарь', 'Екатерина', 'Карина', 'Марина', 'Валентина', 'Кристина', 'Исак', 'Исаак', 'Валентин', 'Константин', 'Мартин', 'Устин', 'Калина', 'Аделина', 'Алина', 'Ангелина', 'Галина', 'Каролина', 'Павлина', 'Полина', 'Элина', 'Мина', 'Нина', 'Ева', 'Ирина', 'Элькин')))
        {
            $first+=10;
        }

        //похоже на фамилию
        if ($this->in($this->Last(2), array('ов', 'ин', 'ев', 'ёв', 'ый', 'ын', 'ой', 'ко', 'ук', 'як', 'ца', 'их', 'ик', 'ун', 'ок', 'ша', 'ая', 'га', 'ёк', 'аш', 'ив', 'юк', 'ус', 'це', 'ак', 'бр', 'яр', 'де', 'ых', 'уз')))
        {
            $second+=0.4;
        }

        if ($this->in($this->Last(3), array('ова', 'ева', 'ёва', 'ына', 'тых', 'рик', 'вач', 'аха', 'шен', 'мей', 'арь', 'вка', 'шир', 'бан', 'тин', 'чий', 'ина', 'гай')))
        {
            $second+=0.4;
        }

        if ($this->in($this->Last(4), array('ьник', 'нчук', 'тник', 'кирь', 'ский', 'шена')))
        {
            $second+=0.4;
        }


        $max = max(array($first, $second, $father));

        if ($first == $max)
        {
            $word->setNamePart('N');
        }
        elseif ($second == $max)
        {
            $word->setNamePart('S');
        }
        else
        {
            $word->setNamePart('F');
        }
    }

}

?>