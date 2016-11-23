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
 * @version 0.4.1
 * @package NameCaseLib
 */
class NCLNameCaseRu extends NCLNameCaseCore
{

    /**
     * Версия языкового файла
     * @var string 
     */
    protected $languageBuild = '11072716';
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
    private $ih = array('их', 'ых', 'ко', 'уа'/*Бенуа, Франсуа*/);
    /**
     * Список окончаний характерных для фамилий 
     * По шаблону {letter}* где * любой символ кроме тех, что в {exclude}
     * @var array of {letter}=>{exclude}
     */
    private $splitSecondExclude = array(
        'а' => 'взйкмнпрстфя',
        'б' => 'а',
        'в' => 'аь',
        'г' => 'а',
        'д' => 'ар',
        'е' => 'бвгдйлмня',
        'ё' => 'бвгдйлмня',
        'ж' => '',
        'з' => 'а',
        'и' => 'гдйклмнопрсфя',
        'й' => 'ля',
        'к' => 'аст',
        'л' => 'аилоья',
        'м' => 'аип',
        'н' => 'ат',
        'о' => 'вдлнпря',
        'п' => 'п',
        'р' => 'адикпть',
        'с' => 'атуя',
        'т' => 'аор',
        'у' => 'дмр',
        'ф' => 'аь',
        'х' => 'а',
        'ц' => 'а',
        'ч' => '',
        'ш' => 'а',
        'щ' => '',
        'ъ' => '',
        'ы' => 'дн',
        'ь' => 'я',
        'э' => '',
        'ю' => '',
        'я' => 'нс'
    );

		private $names_man=array('Вова', 'Анри', 'Питер', 'Пауль', 'Франц', 'Вильям', 'Уильям',
				'Альфонс', 'Ганс', 'Франс', 'Филиппо', 'Андреа', 'Корнелис', 'Фрэнк', 'Леонардо',
				'Джеймс', 'Отто', 'жан-пьер', 'Джованни', 'Джозеф', 'Педро', 'Адольф', 'Уолтер',
				'Антонио', 'Якоб', 'Эсташ', 'Адрианс', 'Франческо', 'Доменико', 'Ханс', 'Гун',
				'Шарль', 'Хендрик', 'Амброзиус', 'Таддео', 'Фердинанд', 'Джошуа', 'Изак', 'Иоганн',
				'Фридрих', 'Эмиль', 'Умберто', 'Франсуа', 'Ян', 'Эрнст', 'Георг', 'Карл'
		);

    /**
     * Мужские имена, оканчивающиеся на любой ь и -й, 
     * скло­няются так же, как обычные существительные мужского рода
     * @return bool true если правило было задействовано и false если нет. 
     */
    protected function manRule1()
    {
        if ($this->in($this->Last(1), 'ьй'))
        {
            if ($this->inNames($this->workingWord, array('Дель')))
            {
                $this->Rule(101);
                $this->makeResultTheSame();
                return true;
            }

            if ($this->Last(2, 1) != "и")
            {
                $this->wordForms($this->workingWord, array('я', 'ю', 'я', 'ем', 'е'), 1);
                $this->Rule(102);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('я', 'ю', 'я', 'ем', 'и'), 1);
                $this->Rule(103);
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
            elseif ($this->inNames($this->workingWord, 'ван'))
            {
                $this->Rule(203);
                $this->makeResultTheSame();
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ом', 'е'));
                $this->Rule(204);
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
						if ($this->inNames($this->workingWord, array('фра', 'Дега', 'Андреа', 'Сёра', 'Сера')))
            {
                $this->Rule(301);
                $this->makeResultTheSame();
                return true;
            }
            elseif (!$this->in($this->Last(2, 1), 'кшгх'))
            {
                $this->wordForms($this->workingWord, array('ы', 'е', 'у', 'ой', 'е'), 1);
                $this->Rule(302);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ой', 'е'), 1);
                $this->Rule(303);
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

//Слова типа Воробей
            if ($this->Last(3) == 'бей')
            {
                $this->wordForms($this->workingWord, array('ья', 'ью', 'ья', 'ьем', 'ье'), 2);
                $this->Rule(400);
                return true;
            }
            elseif ($this->Last(3, 1) == 'а' or $this->in($this->Last(2, 1), 'ел'))
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
            elseif (!$this->in($this->Last(2, 1), $this->vowels) or $this->Last(2, 1) == 'и')
            {
                $this->wordForms($this->workingWord, array('ого', 'ому', 'ого', 'им', 'ом'), 2);
                $this->Rule(404);
                return true;
            }
            else
            {
                $this->makeResultTheSame();
                $this->Rule(405);
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
						if ($this->Last(4)=='енок' || $this->Last(4)=='ёнок')//Поллок
            {
                $this->wordForms($this->workingWord, array('ка', 'ку', 'ка', 'ком', 'ке'), 2);
                $this->Rule(501);
                return true;
            }
						if ($this->Last(2, 1) == 'е' && !in_array($this->Last(3, 1), array('р')))//Лотрек
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
//е перед ц выпадает
        elseif ($this->Last(2) == 'ец')
        {
            $this->wordForms($this->workingWord, array('ца', 'цу', 'ца', 'цом', 'це'), 2);
            $this->Rule(604);
            return true;
        }
        elseif ($this->in($this->Last(1), 'цсршмхт'))
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
						if ($this->inNames($this->workingWord, array('да')))
						{
							$this->Rule(701);
							$this->makeResultTheSame();
							return true;
						}
//Если основа на ш, то нужно и, ей
            if ($this->Last(2, 1) == 'ш')
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ей', 'е'), 1);
								$this->Rule(702);
                return true;
            }
            elseif ($this->in($this->Last(2, 1), 'хкг'))
            {
                $this->wordForms($this->workingWord, array('и', 'е', 'у', 'ой', 'е'), 1);
								$this->Rule(703);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array('ы', 'е', 'у', 'ой', 'е'), 1);
								$this->Rule(704);
                return true;
            }
        }
        elseif ($this->Last(1) == "я")
        {
            $this->wordForms($this->workingWord, array('ой', 'ой', 'ую', 'ой', 'ой'), 2);
						$this->Rule(705);
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
				if ($this->in($this->Last(3), $this->ovo) || $this->in($this->Last(2), $this->ih))
        {
						if ( $this->inNames($this->workingWord, array('рерих')) ) return false;
            $this->Rule(8);
            $this->makeResultTheSame();
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
        if ($this->Last(1) == "а" and $this->Last(2, 1) != 'и')
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
     * Функция пытается применить цепочку правил для мужских имен
     * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
     */
    protected function manFirstName()
    {
        if ($this->inNames($this->workingWord, array('Старший', 'Младший')))
        {
            $this->wordForms($this->workingWord, array('его', 'ему', 'его', 'им', 'ем'), 2);
            return true;
        }
        if ($this->inNames($this->workingWord, array('Мариа')))
        {
            //Альфонс Мария Муха
            $this->wordForms($this->workingWord, array('и', 'и', 'ю', 'ей', 'ии'), 1);
            return true;
        }
        return $this->RulesChain('man', array(1, 2, 3));
    }

    /**
     * Функция пытается применить цепочку правил для женских имен
     * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
     */
    protected function womanFirstName()
    {
        return $this->RulesChain('woman', array(1, 2, 3));
    }

    /**
     * Функция пытается применить цепочку правил для мужских фамилий
     * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
     */
    protected function manSecondName()
    {
        return $this->RulesChain('man', array(8, 4, 5, 6, 7));
    }

    /**
     * Функция пытается применить цепочку правил для женских фамилий
     * @return boolean true - если было использовано правило из списка, false - если правило не было найденым
     */
    protected function womanSecondName()
    {
        return $this->RulesChain('woman', array(4));
    }

    /**
     * Функция склоняет мужские отчества
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
				if ($this->in($this->Last(2), array('он', 'ов', 'ав', 'ам', 'ол', 'ан', 'рд', 'мп', 'по'/*Филиппо*/, 'до'/*Леонардо*/, 'др', 'рт')))
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

				if ($this->in($this->Last(2), array('вь', 'фь', 'ль', 'на')))
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

        if ($this->in($this->Last(3), array('лья', 'вва', 'ока', 'ука', 'ита', 'эль'/*Рафаэль, Габриэль*/, 'реа'/*Андреа*/)))
        {
            $man+=0.2;
        }

        if ($this->in($this->Last(3), array('има')))
        {
            $woman+=0.15;
        }

        if ($this->in($this->Last(3), array('лия', 'ния', 'сия', 'дра', 'лла', 'кла', 'опа', 'вия')))
        {
            $woman+=0.5;
        }

        if ($this->in($this->Last(4), array('льда', 'фира', 'нина', 'лита', 'алья')))
        {
            $woman+=0.5;
        }
        
				if ($this->inNames($this->workingWord, $this->names_man))
        {
            $man += 10;
        }
        
				if ($this->inNames($this->workingWord, array('Бриджет', 'Элизабет', 'Маргарет', 'Джанет', 'Жаклин', 'Эвелин')))
        {
            $woman += 10;
        }

				//Исключение для Берил Кук, которая женщина
				if ($this->inNames($this->workingWord, array('Берил')))
				{
						$woman += 0.05;
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

        if ($this->in($this->Last(3), array('ова', 'ина', 'ева', 'ёва', 'ына', 'мин')))
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
        $length = NCLStr::strlen($namepart);
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

        if ($this->in($this->Last(2), array('ша')))
        {
            $first+=0.5;
        }

        if ($this->in($this->Last(3), array('эль'/*Рафаэль, Габриэль*/)))
        {
            $first+=0.5;
        }

        /**
				 * буквы на которые никогда не заканчиваются имена
         */
        if ($this->in($this->Last(1), 'еёжхцочшщъыэю'))
        {
					/**
					 * Просто исключения
					 */
					if ($this->inNames($namepart, array('Мауриц')))
					{
						$first += 10;
					}
					else {
            $second += 0.3;
          }
				}

        /**
         * Используем массив характерных окончаний
         */
        if (isset($this->splitSecondExclude[$this->Last(2, 1)]))
        {
            if (!$this->in($this->Last(1), $this->splitSecondExclude[$this->Last(2, 1)]))
            {
                $second += 0.4;
            }
        }

        /**
         * Сокращенные ласкательные имена типя Аня Галя и.т.д.
         */
        if ($this->Last(1) == 'я' and $this->in($this->Last(3, 1), $this->vowels))
        {
            $first += 0.5;
        }

        /**
         * Не бывает имен с такими предпоследними буквами
         */
        if ($this->in($this->Last(2, 1), 'жчщъэю'))
        {
            $second += 0.3;
        }

        /**
         * Слова на мягкий знак. Существует очень мало имен на мягкий знак. Все остальное фамилии
         */
        if ($this->Last(1) == 'ь')
        {
            /**
             * Имена типа нинЕЛь адЕЛь асЕЛь
             */
            if ($this->Last(3, 2) == 'ел')
            {
                $first += 0.7;
            }
            /**
             * Просто исключения
             */
            elseif ($this->inNames($namepart, array('Лазарь', 'Игорь', 'Любовь')))
            {
                $first += 10;
            }
            /**
             * Если не то и не другое, тогда фамилия
             */
            else
            {
                $second += 0.3;
            }
        }
        /**
         * Если две последних букв согласные то скорее всего это фамилия
         */
        elseif ($this->in($this->Last(1), $this->consonant . 'ь') and $this->in($this->Last(2, 1), $this->consonant . 'ь'))
        {
            /**
             * Практически все кроме тех которые оканчиваются на следующие буквы
             */
            if (!$this->in($this->Last(2), array('др', 'кт', 'лл', 'пп', 'рд', 'рк', 'рп', 'рт', 'тр')))
            {
                $second += 0.25;
            }
        }

        /**
         * Слова, которые заканчиваются на тин
         */
        if ($this->Last(3) == 'тин' and $this->in($this->Last(4, 1), 'нст'))
        {
            $first += 0.5;
        }

//Исключения
        if ($this->inNames($namepart, array('Лев', 'Яков', 'Вова', 'Маша', 'Ольга', 'Еремей',
						'Исак', 'Исаак', 'Ева', 'Ирина', 'Элькин', 'Мерлин', 'Макс', 'Алекс',
						'Мариа'/*Альфонс Мариа Муха*/,
						'Бриджет', 'Элизабет', 'Маргарет', 'Джанет', 'Жаклин', 'Эвелин'/*женские иностранные*/))
						|| $this->inNames($namepart, $this->names_man)
						)
        {
            $first+=10;
        }



        /**
         * Фамилии которые заканчиваются на -ли кроме тех что типа натАли и.т.д.
         */
        if ($this->Last(2) == 'ли' and $this->Last(3, 1) != 'а')
        {
            $second+=0.4;
        }

        /**
         * Фамилии на -як кроме тех что типа Касьян Куприян + Ян и.т.д.
         */
        if ($this->Last(2) == 'ян' and $length > 2 and !$this->in($this->Last(3, 1), 'ьи'))
        {
            $second+=0.4;
        }

        /**
         * Фамилии на -ур кроме имен Артур Тимур
         */
        if ($this->Last(2) == 'ур')
        {
            if (!$this->inNames($namepart, array('Артур', 'Тимур')))
            {
                $second += 0.4;
            }
        }

        /**
         * Разбор ласкательных имен на -ик
         */
        if ($this->Last(2) == 'ик')
        {
            /**
             * Ласкательные буквы перед ик
             */
            if ($this->in($this->Last(3, 1), 'лшхд'))
            {
                $first += 0.3;
            }
            else
            {
                $second += 0.4;
            }
        }

        /**
         * Разбор имен и фамилий, который заканчиваются на ина
         */
        if ($this->Last(3) == 'ина')
        {
            /**
             * Все похожие на Катерина и Кристина
             */
            if ($this->in($this->Last(7), array('атерина', 'ристина')))
            {
                $first+=10;
            }
            /**
             * Исключения
             */
            elseif ($this->inNames($namepart, array('Мальвина', 'Антонина', 'Альбина', 'Агриппина', 'Фаина', 'Карина', 'Марина', 'Валентина', 'Калина', 'Аделина', 'Алина', 'Ангелина', 'Галина', 'Каролина', 'Павлина', 'Полина', 'Элина', 'Мина', 'Нина', 'Дина')))
            {
                $first+=10;
            }
            /**
             * Иначе фамилия
             */
            else
            {
                $second += 0.4;
            }
        }

        /**
         * Имена типа Николай
         */
        if ($this->Last(4) == 'олай')
        {
            $first += 0.6;
        }

        /**
         * Фамильные окончания
         */
        if ($this->in($this->Last(2), array('ов', 'ин', 'ев', 'ёв', 'ый', 'ын', 'ой', 'ук', 'як', 'ца', 'ун', 'ок', 'ая', 'ёк', 'ив', 'ус', 'ак', 'яр', 'уз', 'ах', 'ай')))
        {
            $second+=0.4;
        }

        if ($this->in($this->Last(3), array('ова', 'ева', 'ёва', 'ына', 'шен', 'мей', 'вка', 'шир', 'бан', 'чий', 'кий', 'бей', 'чан', 'ган', 'ким', 'кан', 'мар', 'лис')))
        {
            $second+=0.4;
        }

        if ($this->in($this->Last(4), array('шена')))
        {
            $second+=0.4;
        }

				//исключения и частички
				if ($this->inNames($namepart, array('да', 'валадон', 'Данбар'))){
					$second += 10;
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