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
 * <b>NCL NameCase Ukranian Language</b>
 * 
 * Украинские правила склонений ФИО. 
 * Правила определения пола человека по ФИО для украинского языка
 * Система разделения фамилий имен и отчеств для украинского языка 
 * 
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4
 * @package NameCaseLib
 */
class NCLNameCaseUa extends NCLNameCaseCore
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
    protected $CaseCount = 7;
    /**
     * Список гласных украинского языка
     * @var string 
     */
    private $vowels = 'аеиоуіїєюя';
    /**
     * Список согласных украинского языка
     * @var string  
     */
    private $consonant = "бвгджзйклмнпрстфхцчшщ";
    /**
     * Українські шиплячі приголосні 
     * @var string 
     */
    private $shyplyachi = "жчшщ";
    /**
     * Українські нешиплячі приголосні
     * @var string  
     */
    private $neshyplyachi = "бвгдзклмнпрстфхц";
    /**
     * Українські завжди м’які звуки
     * @var string  
     */
    private $myaki = 'ьюяєї';
    /**
     * Українські губні звуки
     * @var string 
     */
    private $gubni = 'мвпбф';

    /**
     * Чергування українських приголосних
     * Чергування г к х —» з ц с
     * @param string $letter літера, яку необхідно перевірити на чергування
     * @return string літера, де вже відбулося чергування
     */
    private function inverseGKH($letter)
    {
        switch ($letter)
        {
            case 'г': return 'з';
            case 'к': return 'ц';
            case 'х': return 'с';
        }
        return $letter;
    }

    /**
     * Чергування українських приголосних
     * Чергування г к —» ж ч
     * @param string $letter літера, яку необхідно перевірити на чергування
     * @return string літера, де вже відбулося чергування 
     */
    private function inverse2($letter)
    {
        switch ($letter)
        {
            case 'к': return 'ч';
            case 'г': return 'ж';
        }
        return $letter;
    }

    /**
     * <b>Визначення групи для іменників 2-ї відміни</b>
     * 1 - тверда
     * 2 - мішана
     * 3 - м’яка
     * 
     * <b>Правило:</b>
     * - Іменники з основою на твердий нешиплячий належать до твердої групи: 
     *   береза, дорога, Дніпро, шлях, віз, село, яблуко.
     * - Іменники з основою на твердий шиплячий належать до мішаної групи: 
     *   пожеж-а, пущ-а, тиш-а, алич-а, вуж, кущ, плющ, ключ, плече, прізвище.
     * - Іменники з основою на будь-який м'який чи пом'якше­ний належать до м'якої групи: 
     *   земля [земл'а], зоря [зор'а], армія [арм'ійа], сім'я [с'імйа], серпень, фахівець, 
     *   трамвай, су­зір'я [суз'ірйа], насіння [насін'н'а], узвишшя Іузвиш'ш'а
     * @param string $word іменник, групу якого необхідно визначити
     * @return int номер групи іменника 
     */
    private function detect2Group($word)
    {
        $osnova = $word;
        $stack = array();
        //Ріжемо слово поки не зустрінемо приголосний і записуемо в стек всі голосні які зустріли
        while ($this->in(NCLStr::substr($osnova, -1, 1), $this->vowels . 'ь'))
        {
            $stack[] = NCLStr::substr($osnova, -1, 1);
            $osnova = NCLStr::substr($osnova, 0, NCLStr::strlen($osnova) - 1);
        }
        $stacksize = count($stack);
        $Last = 'Z'; //нульове закінчення
        if ($stacksize)
        {
            $Last = $stack[count($stack) - 1];
        }

        $osnovaEnd = NCLStr::substr($osnova, -1, 1);
        if ($this->in($osnovaEnd, $this->neshyplyachi) and !$this->in($Last, $this->myaki))
        {
            return 1;
        }
        elseif ($this->in($osnovaEnd, $this->shyplyachi) and !$this->in($Last, $this->myaki))
        {
            return 2;
        }
        else
        {
            return 3;
        }
    }

    /**
     * Шукаємо в слові <var>$word</var> перше входження літери з переліку <var>$vowels</var> з кінця
     * @param string $word слово, якому необхідно знайти голосні
     * @param string $vowels перелік літер, які треба знайти
     * @return string(1) перша з кінця літера з переліку <var>$vowels</var>
     */
    private function FirstLastVowel($word, $vowels)
    {
        $length = NCLStr::strlen($word);
        for ($i = $length - 1; $i > 0; $i--)
        {
            $char = NCLStr::substr($word, $i, 1);
            if ($this->in($char, $vowels))
            {
                return $char;
            }
        }
    }

    /**
     * Пошук основи іменника <var>$word</var>
     * <b>Основа слова</b> - це частина слова (як правило незмінна), яка вказує на його лексичне значення.
     * @param string $word слово, в якому необхідно знати основу
     * @return string основа іменника <var>$word</var>
     */
    private function getOsnova($word)
    {
        $osnova = $word;
        //Ріжемо слово поки не зустрінемо приголосний
        while ($this->in(NCLStr::substr($osnova, -1, 1), $this->vowels . 'ь'))
        {
            $osnova = NCLStr::substr($osnova, 0, NCLStr::strlen($osnova) - 1);
        }
        return $osnova;
    }

    /**
     * Українські чоловічі та жіночі імена, що в називному відмінку однини закінчуються на -а (-я),
     * відмінються як відповідні іменники І відміни.
     * <ul>
     * <li>Примітка 1. Кінцеві приголосні основи г, к, х у жіночих іменах 
     *   у давальному та місцевому відмінках однини перед закінченням -і 
     *   змінюються на з, ц, с: Ольга - Ользі, Палажка - Палажці, Солоха - Солосі.</li>
     * <li>Примітка 2. У жіночих іменах типу Одарка, Параска в родовому відмінку множини 
     *   в кінці основи між приголосними з'являється звук о: Одарок, Парасок. </li>
     * </ul>
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено
     */
    protected function manRule1()
    {
        //Предпоследний символ
        $BeforeLast = $this->Last(2, 1);

        //Останні літера або а
        if ($this->Last(1) == 'а')
        {
            $this->wordForms($this->workingWord, array($BeforeLast . 'и', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'у', $BeforeLast . 'ою', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'о'), 2);
            $this->Rule(101);
            return true;
        }
        //Остання літера я
        elseif ($this->Last(1) == 'я')
        {
            //Перед останньою літерою стоїть я
            if ($BeforeLast == 'і')
            {
                $this->wordForms($this->workingWord, array('ї', 'ї', 'ю', 'єю', 'ї', 'є'), 1);
                $this->Rule(102);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array($BeforeLast . 'і', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'ю', $BeforeLast . 'ею', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'е'), 2);
                $this->Rule(103);
                return true;
            }
        }
        return false;
    }

    /**
     * Імена, що в називному відмінку закінчуються на -р, у родовому мають закінчення -а: 
     * Віктор - Віктора, Макар - Макара, але: Ігор - Ігоря, Лазар - Лазаря.
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено
     */
    protected function manRule2()
    {
        if ($this->Last(1) == 'р')
        {
            if ($this->inNames($this->workingWord, array('Ігор', 'Лазар')))
            {
                $this->wordForms($this->workingWord, array('я', 'еві', 'я', 'ем', 'еві', 'е'));
                $this->Rule(201);
                return true;
            }
            else
            {
                $osnova = $this->workingWord;
                if (NCLStr::substr($osnova, -2, 1) == 'і')
                {
                    $osnova = NCLStr::substr($osnova, 0, NCLStr::strlen($osnova) - 2) . 'о' . NCLStr::substr($osnova, -1, 1);
                }
                $this->wordForms($osnova, array('а', 'ові', 'а', 'ом', 'ові', 'е'));
                $this->Rule(202);
                return true;
            }
        }
        return false;
    }

    /**
     * Українські чоловічі імена, що в називному відмінку однини закінчуються на приголосний та -о, 
     * відмінюються як відповідні іменники ІІ відміни.
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено 
     */
    protected function manRule3()
    {
        //Предпоследний символ
        $BeforeLast = $this->Last(2, 1);

        if ($this->in($this->Last(1), $this->consonant . 'оь'))
        {
            $group = $this->detect2Group($this->workingWord);
            $osnova = $this->getOsnova($this->workingWord);
            //В іменах типу Антін, Нестір, Нечипір, Прокіп, Сидір, Тиміш, Федір голосний і виступає тільки в 
            //називному відмінку, у непрямих - о: Антона, Антонові                           
            //Чергування і -» о всередині
            $osLast = NCLStr::substr($osnova, -1, 1);
            if ($osLast != 'й' and NCLStr::substr($osnova, -2, 1) == 'і' and !$this->in(NCLStr::substr(NCLStr::strtolower($osnova), -4, 4), array('світ', 'цвіт')) and !$this->inNames($this->workingWord, 'Гліб'))
            {
                $osnova = NCLStr::substr($osnova, 0, NCLStr::strlen($osnova) - 2) . 'о' . NCLStr::substr($osnova, -1, 1);
            }


            //Випадання букви е при відмінюванні слів типу Орел
            if (NCLStr::substr($osnova, 0, 1) == 'о' and $this->FirstLastVowel($osnova, $this->vowels . 'гк') == 'е' and $this->Last(2) != 'сь')
            {
                $delim = NCLStr::strrpos($osnova, 'е');
                $osnova = NCLStr::substr($osnova, 0, $delim) . NCLStr::substr($osnova, $delim + 1, NCLStr::strlen($osnova) - $delim);
            }


            if ($group == 1)
            {
                //Тверда група
                //Слова що закінчуються на ок
                if ($this->Last(2) == 'ок' and $this->Last(3) != 'оок')
                {
                    $this->wordForms($this->workingWord, array('ка', 'кові', 'ка', 'ком', 'кові', 'че'), 2);
                    $this->Rule(301);
                    return true;
                }
                //Російські прізвища на ов, ев, єв
                elseif ($this->in($this->Last(2), array('ов', 'ев', 'єв')) and !$this->inNames($this->workingWord, array('Лев', 'Остромов')))
                {
                    $this->wordForms($osnova, array($osLast . 'а', $osLast . 'у', $osLast . 'а', $osLast . 'им', $osLast . 'у', $this->inverse2($osLast) . 'е'), 1);
                    $this->Rule(302);
                    return true;
                }
                //Російські прізвища на ін
                elseif ($this->in($this->Last(2), array('ін')))
                {
                    $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ом', 'у', 'е'));
                    $this->Rule(303);
                    return true;
                }
                else
                {
                    $this->wordForms($osnova, array($osLast . 'а', $osLast . 'ові', $osLast . 'а', $osLast . 'ом', $osLast . 'ові', $this->inverse2($osLast) . 'е'), 1);
                    $this->Rule(304);
                    return true;
                }
            }
            if ($group == 2)
            {
                //Мішана група
                $this->wordForms($osnova, array('а', 'еві', 'а', 'ем', 'еві', 'е'));
                $this->Rule(305);
                return true;
            }
            if ($group == 3)
            {
                //М’яка група
                //Соловей
                if ($this->Last(2) == 'ей' and $this->in($this->Last(3, 1), $this->gubni))
                {
                    $osnova = NCLStr::substr($this->workingWord, 0, NCLStr::strlen($this->workingWord) - 2) . '’';
                    $this->wordForms($osnova, array('я', 'єві', 'я', 'єм', 'єві', 'ю'));
                    $this->Rule(306);
                    return true;
                }
                elseif ($this->Last(1) == 'й' or $BeforeLast == 'і')
                {
                    $this->wordForms($this->workingWord, array('я', 'єві', 'я', 'єм', 'єві', 'ю'), 1);
                    $this->Rule(307);
                    return true;
                }
                //Швець
                elseif ($this->workingWord == 'швець')
                {
                    $this->wordForms($this->workingWord, array('евця', 'евцеві', 'евця', 'евцем', 'евцеві', 'евцю'), 4);
                    $this->Rule(308);
                    return true;
                }
                //Слова що закінчуються на ець
                elseif ($this->Last(3) == 'ець')
                {
                    $this->wordForms($this->workingWord, array('ця', 'цеві', 'ця', 'цем', 'цеві', 'цю'), 3);
                    $this->Rule(309);
                    return true;
                }
                //Слова що закінчуються на єць яць
                elseif ($this->in($this->Last(3), array('єць', 'яць')))
                {
                    $this->wordForms($this->workingWord, array('йця', 'йцеві', 'йця', 'йцем', 'йцеві', 'йцю'), 3);
                    $this->Rule(310);
                    return true;
                }
                else
                {
                    $this->wordForms($osnova, array('я', 'еві', 'я', 'ем', 'еві', 'ю'));
                    $this->Rule(311);
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Якщо слово закінчується на і, то відмінюємо як множину
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено
     */
    protected function manRule4()
    {
        if ($this->Last(1) == 'і')
        {
            $this->wordForms($this->workingWord, array('их', 'им', 'их', 'ими', 'их', 'і'), 1);
            $this->Rule(4);
            return true;
        }
        return false;
    }

    /**
     * Якщо слово закінчується на ий або ой
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено 
     */
    protected function manRule5()
    {
        if ($this->in($this->Last(2), array('ий', 'ой')))
        {
            $this->wordForms($this->workingWord, array('ого', 'ому', 'ого', 'им', 'ому', 'ий'), 2);
            $this->Rule(5);
            return true;
        }
        return false;
    }

    /**
     * Українські чоловічі та жіночі імена, що в називному відмінку однини закінчуються на -а (-я), 
     * відмінються як відповідні іменники І відміни.  
     * - Примітка 1. Кінцеві приголосні основи г, к, х у жіночих іменах 
     *   у давальному та місцевому відмінках однини перед закінченням -і 
     *   змінюються на з, ц, с: Ольга - Ользі, Палажка - Палажці, Солоха - Солосі.
     * - Примітка 2. У жіночих іменах типу Одарка, Параска в родовому відмінку множини 
     *   в кінці основи між приголосними з'являється звук о: Одарок, Парасок 
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено 
     */
    protected function womanRule1()
    {
        //Предпоследний символ
        $BeforeLast = $this->Last(2, 1);

        //Якщо закінчується на ніга -» нога
        if ($this->Last(4) == 'ніга')
        {
            $osnova = NCLStr::substr($this->workingWord, 0, NCLStr::strlen($this->workingWord) - 3) . 'о';
            $this->wordForms($osnova, array('ги', 'зі', 'гу', 'гою', 'зі', 'го'));
            $this->Rule(101);
            return true;
        }

        //Останні літера або а
        elseif ($this->Last(1) == 'а')
        {
            $this->wordForms($this->workingWord, array($BeforeLast . 'и', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'у', $BeforeLast . 'ою', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'о'), 2);
            $this->Rule(102);
            return true;
        }
        //Остання літера я
        elseif ($this->Last(1) == 'я')
        {

            if ($this->in($BeforeLast, $this->vowels))
            {
                $this->wordForms($this->workingWord, array('ї', 'ї', 'ю', 'єю', 'ї', 'є'), 1);
                $this->Rule(103);
                return true;
            }
            else
            {
                $this->wordForms($this->workingWord, array($BeforeLast . 'і', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'ю', $BeforeLast . 'ею', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'е'), 2);
                $this->Rule(104);
                return true;
            }
        }
        return false;
    }

    /**
     * Українські жіночі імена, що в називному відмінку однини закінчуються на приголосний, 
     * відмінюються як відповідні іменники ІІІ відміни
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено 
     */
    protected function womanRule2()
    {
        if ($this->in($this->Last(1), $this->consonant . 'ь'))
        {
            $osnova = $this->getOsnova($this->workingWord);
            $apostrof = '';
            $duplicate = '';
            $osLast = NCLStr::substr($osnova, -1, 1);
            $osBeforeLast = NCLStr::substr($osnova, -2, 1);

            //Чи треба ставити апостроф
            if ($this->in($osLast, 'мвпбф') and ($this->in($osBeforeLast, $this->vowels)))
            {
                $apostrof = '’';
            }

            //Чи треба подвоювати
            if ($this->in($osLast, 'дтзсцлн'))
            {
                $duplicate = $osLast;
            }


            //Відмінюємо
            if ($this->Last(1) == 'ь')
            {
                $this->wordForms($osnova, array('і', 'і', 'ь', $duplicate . $apostrof . 'ю', 'і', 'е'));
                $this->Rule(201);
                return true;
            }
            else
            {
                $this->wordForms($osnova, array('і', 'і', '', $duplicate . $apostrof . 'ю', 'і', 'е'));
                $this->Rule(202);
                return true;
            }
        }
        return false;
    }

    /**
     * Якщо слово на ськ або це російське прізвище
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено 
     */
    protected function womanRule3()
    {
        //Предпоследний символ
        $BeforeLast = $this->Last(2, 1);

        //Донская
        if ($this->Last(2) == 'ая')
        {
            $this->wordForms($this->workingWord, array('ої', 'ій', 'ую', 'ою', 'ій', 'ая'), 2);
            $this->Rule(301);
            return true;
        }

        //Ті що на ськ
        if ($this->Last(1) == 'а' and ($this->in($this->Last(3, 2), array('ов', 'ев', 'єв', 'ив', 'ьк', 'тн', 'рн', 'ин'))))
        {
            $this->wordForms($this->workingWord, array($BeforeLast . 'ої', $BeforeLast . 'ій', $BeforeLast . 'у', $BeforeLast . 'ою', $BeforeLast . 'ій', $BeforeLast . 'о'), 2);
            $this->Rule(302);
            return true;
        }

        return false;
    }

    /**
     * Функція намагається застосувати ланцюг правил для чоловічих імен
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено
     */
    protected function manFirstName()
    {
        return $this->RulesChain('man', array(1, 2, 3));
    }

    /**
     * Функція намагається застосувати ланцюг правил для жіночих імен
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено
     */
    protected function womanFirstName()
    {
        return $this->RulesChain('woman', array(1, 2));
    }

    /**
     * Функція намагається застосувати ланцюг правил для чоловічих прізвищ
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено
     */
    protected function manSecondName()
    {
        return $this->RulesChain('man', array(5, 1, 2, 3, 4));
    }

    /**
     * Функція намагається застосувати ланцюг правил для жіночих прізвищ
     * @return boolean true - якщо було задіяно правило з переліку, false - якщо правило не знайдено
     */
    protected function womanSecondName()
    {
        return $this->RulesChain('woman', array(3, 1));
    }

    /**
     * Фунція відмінює чоловічі по-батькові
     * @return boolean true - якщо слово успішно змінене, false - якщо невдалося провідміняти слово
     */
    protected function manFatherName()
    {
        if ($this->in($this->Last(2), array('ич', 'іч')))
        {
            $this->wordForms($this->workingWord, array('а', 'у', 'а', 'ем', 'у', 'у'));
            return true;
        }
        return false;
    }

    /**
     * Фунція відмінює жіночі по-батькові
     * @return boolean true - якщо слово успішно змінене, false - якщо невдалося провідміняти слово
     */
    protected function womanFatherName()
    {
        if ($this->in($this->Last(3), array('вна')))
        {
            $this->wordForms($this->workingWord, array('и', 'і', 'у', 'ою', 'і', 'о'), 1);
            return true;
        }
        return false;
    }

    /**
     * Визначення статі, за правилами імені
     * @param NCLNameCaseWord $word об’єкт класу зі словом, для якого необхідно визначити стать
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

        if ($this->inNames($this->workingWord, array('Петро', 'Микола')))
        {
            $man+=30;
        }

        if ($this->in($this->Last(2), array('он', 'ов', 'ав', 'ам', 'ол', 'ан', 'рд', 'мп', 'ко', 'ло')))
        {
            $man+=0.5;
        }

        if ($this->in($this->Last(3), array('бов', 'нка', 'яра', 'ила', 'опа')))
        {
            $woman+=0.5;
        }

        if ($this->in($this->Last(1), $this->consonant))
        {
            $man+=0.01;
        }

        if ($this->Last(1) == 'ь')
        {
            $man+=0.02;
        }

        if ($this->in($this->Last(2), array('дь')))
        {
            $woman+=0.1;
        }

        if ($this->in($this->Last(3), array('ель', 'бов')))
        {
            $woman+=0.4;
        }

        $word->setGender($man, $woman);
    }

    /**
     * Визначення статі, за правилами прізвища
     * @param NCLNameCaseWord $word об’єкт класу зі словом, для якого необхідно визначити стать
     */
    protected function GenderBySecondName(NCLNameCaseWord $word)
    {
        $this->setWorkingWord($word->getWord());

        $man = 0; //Мужчина
        $woman = 0; //Женщина

        if ($this->in($this->Last(2), array('ов', 'ин', 'ев', 'єв', 'ін', 'їн', 'ий', 'їв', 'ів', 'ой', 'ей')))
        {
            $man+=0.4;
        }

        if ($this->in($this->Last(3), array('ова', 'ина', 'ева', 'єва', 'іна')))
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
     * Визначення статі, за правилами по-батькові
     * @param NCLNameCaseWord $word об’єкт класу зі словом, для якого необхідно визначити стать
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
     * Ідентифікує слово визначаючи чи це ім’я, чи це прізвище, чи це побатькові
     * - <b>N</b> - ім’я
     * - <b>S</b> - прізвище
     * - <b>F</b> - по-батькові
     * @param NCLNameCaseWord $word об’єкт класу зі словом, яке необхідно ідентифікувати
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
        if ($this->in($this->Last(3), array('вна', 'чна', 'ліч')) or $this->in($this->Last(4), array('ьмич', 'ович')))
        {
            $father+=3;
        }

        //Похоже на имя
        if ($this->in($this->Last(3), array('тин' /* {endings_sirname3} */)) or $this->in($this->Last(4), array('ьмич', 'юбов', 'івна', 'явка', 'орив', 'кіян' /* {endings_sirname4} */)))
        {
            $first+=0.5;
        }

        //Исключения
        if ($this->inNames($namepart, array('Лев', 'Гаїна', 'Афіна', 'Антоніна', 'Ангеліна', 'Альвіна', 'Альбіна', 'Аліна', 'Павло', 'Олесь', 'Микола', 'Мая', 'Англеліна', 'Елькін')))
        {
            $first+=10;
        }

        //похоже на фамилию
        if ($this->in($this->Last(2), array('ов', 'ін', 'ев', 'єв', 'ий', 'ин', 'ой', 'ко', 'ук', 'як', 'ца', 'их', 'ик', 'ун', 'ок', 'ша', 'ая', 'га', 'єк', 'аш', 'ив', 'юк', 'ус', 'це', 'ак', 'бр', 'яр', 'іл', 'ів', 'ич', 'сь', 'ей', 'нс', 'яс', 'ер', 'ай', 'ян', 'ах', 'ць', 'ющ', 'іс', 'ач', 'уб', 'ох', 'юх', 'ут', 'ча', 'ул', 'вк', 'зь', 'уц', 'їн', 'де', 'уз' /* {endings_name2} */)))
        {
            $second+=0.4;
        }

        if ($this->in($this->Last(3), array('ова', 'ева', 'єва', 'тих', 'рик', 'вач', 'аха', 'шен', 'мей', 'арь', 'вка', 'шир', 'бан', 'чий', 'іна', 'їна', 'ька', 'ань', 'ива', 'аль', 'ура', 'ран', 'ало', 'ола', 'кур', 'оба', 'оль', 'нта', 'зій', 'ґан', 'іло', 'шта', 'юпа', 'рна', 'бла', 'еїн', 'има', 'мар', 'кар', 'оха', 'чур', 'ниш', 'ета', 'тна', 'зур', 'нір', 'йма', 'орж', 'рба', 'іла', 'лас', 'дід', 'роз', 'аба', 'лест', 'мара', 'обка', 'рока', 'сика', 'одна', 'нчар', 'вата', 'ндар', 'грій' /* {endings_name3} */)))
        {
            $second+=0.4;
        }

        if ($this->in($this->Last(4), array('ьник', 'нчук', 'тник', 'кирь', 'ский', 'шена', 'шина', 'вина', 'нина', 'гана', 'гана', 'хній', 'зюба', 'орош', 'орон', 'сило', 'руба' /* {endings_name4} */)))
        {
            $second+=0.4;
        }

        if ($this->Last(1) == 'і')
        {
            $second+=0.2;
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