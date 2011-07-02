<?php

/*
 * NCL NameCase Ukranian Language
 * 
 * Клас, которые позволяет склонять украинские Имена, Фамили Отчества по падежам.
 * 
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @author Андрей Чайка http://seagull.net.ua/ bymer3@gmail.com
 * @version 0.1.2 05.05.2011 
 * 
 */
require_once dirname(__FILE__) . '/NCL.NameCase.core.php';

class NCLNameCaseUa extends NCLNameCaseCore implements NCLNameCaseInterface
{
    /*
     * @static string
     * Количество падежов
     */

    protected $CaseCount = 7;

    /*
     * @static string
     * Список гласных
     */
    private $vowels = "аеиоуіїєюя";

    /*
     * @static string
     * Список согласных
     */
    private $consonant = "бвгджзйклмнпрстфхцчшщ";

    /*
     * @static string
     * Шиплячі приголосні
     */
    private $shyplyachi = "жчшщ";
    private $neshyplyachi = "бвгдзклмнпрстфхц";
    private $myaki = 'ьюяєї';
    private $gubni = 'мвпбф';
    /*
     * Чергування г к х —» з ц с
     * 
     * @return boolean
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

    /*
     * Чергування к —» ч
     * 
     * @return boolean
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

    /*
     * Визначення групи для іменників 2-ї відміни
     * 1 - тверда
     * 2 - мішана
     * 3 - м’яка
     * 
     * Правило:
     * Іменники з основою на твердий нешиплячий належать до твердої групи: береза, дорога, Дніпро, шлях, віз, село, яблуко.
     * Іменники з основою на твердий шиплячий належать до мішаної групи: пожеж-а, пущ-а, тиш-а, алич-а, вуж, кущ, плющ, ключ, плече, прізвище.
     * Іменники з основою на будь-який м'який чи пом'якше­ний належать до м'якої групи: земля [земл'а], зоря [зор'а], армія [арм'ійа], сім'я [с'імйа], серпень, фахівець, трамвай, су­зір'я [суз'ірйа], насіння [насін'н'а], узвишшя Іузвиш'ш'а
     * 
     * @return integer
     */

    private function detect2Group($word)
    {
        $osnova = $word;
        $stack = array();
        //Ріжемо слово поки не зустрінемо приголосний і записуемо в стек всі голосні які зустріли
        while ($this->in(mb_substr($osnova, -1, 1, 'utf-8'), $this->vowels . 'ь'))
        {
            $stack[] = mb_substr($osnova, -1, 1, 'utf-8');
            $osnova = mb_substr($osnova, 0, mb_strlen($osnova, 'utf-8') - 1, 'utf-8');
        }
        $stacksize = count($stack);
        $Last = 'Z'; //нульове закінчення
        if ($stacksize)
        {
            $Last = $stack[count($stack) - 1];
        }

        $osnovaEnd = mb_substr($osnova, -1, 1, 'utf-8');
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

    /*
     * Повертає перший з кінця голосний
     * 
     * @return char
     */

    private function FirstLastVowel($word, $vowels)
    {
        $length = mb_strlen($word, 'utf-8');
        for ($i = $length - 1; $i > 0; $i--)
        {
            $char = mb_substr($word, $i, 1, 'utf-8');
            if ($this->in($char, $vowels))
            {
                return $char;
            }
        }
    }

    /*
     * Повертає основу слова
     * 
     * @return boolean
     */

    private function getOsnova($word)
    {
        $osnova = $word;
        //Ріжемо слово поки не зустрінемо приголосний
        while ($this->in(mb_substr($osnova, -1, 1, 'utf-8'), $this->vowels . 'ь'))
        {
            $osnova = mb_substr($osnova, 0, mb_strlen($osnova, 'utf-8') - 1, 'utf-8');
        }
        return $osnova;
    }

    /*
     * Функция, которая склоняет имя записаное в $this->firstName, по правилам склонения мужских имен.
     * 
     * @return boolean
     */

    protected function manFirstName()
    {
        /*
          Українські чоловічі та жіночі імена, що в називному відмінку однини закінчуються на -а (-я), відмінються як відповідні іменники І відміни
          Примітка 1. Кінцеві приголосні основи г, к, х у жіночих іменах у давальному та місцевому відмінках однини перед закінченням -і змінюються на з, ц, с: Ольга - Ользі, Палажка - Палажці, Солоха - Солосі.
          Примітка 2. У жіночих іменах типу Одарка, Параска в родовому відмінку множини в кінці основи між приголосними з'являється звук о: Одарок, Парасок */
        //Последний символ
        $LastSymbol = mb_substr($this->firstName, -1, 1, 'utf-8');
        //Предпоследний символ
        $BeforeLast = mb_substr($this->firstName, -2, 1, 'utf-8');
        //Останні літера або а або я
        if ($LastSymbol == 'а')
        {
            $this->firstResult = $this->padeg($this->firstName, array($BeforeLast . 'и', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'у', $BeforeLast . 'ою', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'о'), false, true);
            $this->frule = 101;
            return true;
        }
        elseif ($LastSymbol == 'я')
        {
            if ($BeforeLast == 'і')
            {
                $this->firstResult = $this->padeg($this->firstName, array('ї', 'ї', 'ю', 'єю', 'ї', 'є'), true);
                $this->frule = 103;
                return true;
            }
            else
            {
                $this->firstResult = $this->padeg($this->firstName, array($BeforeLast . 'і', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'ю', $BeforeLast . 'ею', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'е'), false, true);
                $this->frule = 102;
                return true;
            }
        }
        //Примітка 2. Імена, що в називному відмінку закінчуються на -р, у родовому мають закінчення -а: Віктор - Віктора, Макар - Макара, але: Ігор - Ігоря, Лазар - Лазаря.
        elseif ($LastSymbol == 'р')
        {

            if ($this->firstName == 'Ігор' or $this->firstName == 'Лазар')
            {
                $this->firstResult = $this->padeg($this->firstName, array('я', 'еві', 'я', 'ем', 'еві', 'е'));
                $this->frule = 201;
                return true;
            }
            else
            {
                $osnova = $this->firstName;
                if (mb_substr($osnova, -2, 1, 'utf-8') == 'і')
                {
                    $osnova = mb_substr($osnova, 0, mb_strlen($osnova, 'utf-8') - 2, 'utf-8') . 'о' . mb_substr($osnova, -1, 1, 'utf-8');
                }
                $this->firstResult = $this->padeg($osnova, array('а', 'ові', 'а', 'ом', 'ові', 'е'));
                $this->frule = 202;
                return true;
            }
        }
        //2. Українські чоловічі імена, що в називному відмінку однини закінчуються на приголосний та -о , відмінюються як відповідні іменники ІІ відміни.
        elseif ($this->in($LastSymbol, $this->consonant . 'оь'))
        {
            $group = $this->detect2Group($this->firstName);
            $osnova = $this->getOsnova($this->firstName);
            //В іменах типу Антін, Нестір, Нечипір, Прокіп, Сидір, Тиміш, Федір голосний і виступає тільки в називному відмінку, у непрямих - о: Антона, Антонові                           
            //Чергування і -» о всередині
            $osLast = mb_substr($osnova, -1, 1, 'utf-8');
            if ($osLast != 'й' and mb_substr($osnova, -2, 1, 'utf-8') == 'і' and !in_array(mb_substr(mb_strtolower($osnova, 'utf-8'), -4, 4, 'utf-8'), array('світ', 'цвіт')) and !in_array($this->firstName, array('Гліб')))
            {
                $osnova = mb_substr($osnova, 0, mb_strlen($osnova, 'utf-8') - 2, 'utf-8') . 'о' . mb_substr($osnova, -1, 1, 'utf-8');
            }
            //Випадання букви е при відмінюванні слів типу Орел
            if (mb_substr($osnova, 0, 1, 'utf-8') == 'О' and $this->FirstLastVowel($osnova, $this->vowels . 'гк') == 'е' and $BeforeLast . $LastSymbol != 'сь')
            {

                $delim = mb_strrpos($osnova, 'е', null, 'utf-8');
                $osnova = mb_substr($osnova, 0, $delim, 'utf-8') . mb_substr($osnova, $delim + 1, mb_strlen($osnova, 'utf-8') - $delim, 'utf-8');
            }
            if ($group == 1)
            {
                //Тверда група
                $this->firstResult = $this->padeg($osnova, array($osLast . 'а', $osLast . 'ові', $osLast . 'а', $osLast . 'ом', $osLast . 'ові', $this->inverse2($osLast) . 'е'), true);
                $this->frule = 301;
                return true;
            }
            if ($group == 2)
            {
                //Мішана група
                $this->firstResult = $this->padeg($osnova, array('а', 'еві', 'а', 'ем', 'еві', 'е'));
                $this->frule = 302;
                return true;
            }
            if ($group == 3)
            {
                //М’яка група
                //Соловей
                if (mb_substr($this->firstName, -3, 2, 'utf-8') == 'ве')
                {
                    $osnova = mb_substr($this->firstName, 0, mb_strlen($this->firstName, 'utf-8') - 2, 'utf-8') . '`';
                    $this->firstResult = $this->padeg($osnova, array('я', 'єві', 'я', 'єм', 'єві', 'ю'));
                    $this->frule = 305;
                    return true;
                }
                elseif ($BeforeLast == 'і' or $LastSymbol == 'й')
                {
                    $this->firstResult = $this->padeg($this->firstName, array('я', 'єві', 'я', 'єм', 'єві', 'ю'), true);
                    $this->frule = 304;
                    return true;
                }
                else
                {
                    $this->firstResult = $this->padeg($osnova, array('я', 'еві', 'я', 'ем', 'еві', 'ю'));
                    $this->frule = 303;
                    return true;
                }
            }
        }
        else
        {
            $this->makeFirstTheSame();
        }
    }

    /*
     * Функция, которая склоняет имя записаное в $this->firstName, по правилам склонения женских имен.
     * 
     * @return boolean
     */

    protected function womanFirstName()
    {
        /*
          Українські чоловічі та жіночі імена, що в називному відмінку однини закінчуються на -а (-я), відмінються як відповідні іменники І відміни
          Примітка 1. Кінцеві приголосні основи г, к, х у жіночих іменах у давальному та місцевому відмінках однини перед закінченням -і змінюються на з, ц, с: Ольга - Ользі, Палажка - Палажці, Солоха - Солосі.
          Примітка 2. У жіночих іменах типу Одарка, Параска в родовому відмінку множини в кінці основи між приголосними з'являється звук о: Одарок, Парасок */
        //Последний символ
        $LastSymbol = mb_substr($this->firstName, -1, 1, 'utf-8');
        //Предпоследний символ
        $BeforeLast = mb_substr($this->firstName, -2, 1, 'utf-8');
        //Якщо закінчується на ніга -» нога
        if (mb_substr($this->firstName, -4, 4, 'utf-8') == 'ніга')
        {
            $osnova = mb_substr($this->firstName, 0, mb_strlen($this->firstName, 'utf-8') - 3, 'utf-8') . 'о';
            $this->firstResult = $this->padeg($osnova, array('ги', 'зі', 'гу', 'гою', 'зі', 'го'));
            $this->frule = 101;
            return true;
        }
        //Останні літера або а або я
        elseif ($LastSymbol == 'а')
        {
            $this->firstResult = $this->padeg($this->firstName, array($BeforeLast . 'и', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'у', $BeforeLast . 'ою', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'о'), false, true);
            $this->frule = 101;
            return true;
        }
        elseif ($LastSymbol == 'я')
        {
            if ($this->in($BeforeLast, $this->vowels))
            {
                $this->firstResult = $this->padeg($this->firstName, array('ї', 'ї', 'ю', 'єю', 'ї', 'є'), true);
                $this->frule = 103;
                return true;
            }
            else
            {
                $this->firstResult = $this->padeg($this->firstName, array($BeforeLast . 'і', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'ю', $BeforeLast . 'ею', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'е'), false, true);
                $this->frule = 102;
                return true;
            }
        }
        //2. Українські жіночі імена, що в називному відмінку однини закінчуються на приголосний, відмінюються як відповідні іменники ІІІ відміни
        elseif ($this->in($LastSymbol, $this->consonant . 'ь'))
        {
            $osnova = $this->getOsnova($this->firstName);
            $apostrof = '';
            $duplicate = '';
            $osLast = mb_substr($osnova, -1, 1, 'utf-8');
            $osBeforeLast = mb_substr($osnova, -2, 1, 'utf-8');
            //Чи треба ставити апостроф
            if ($this->in($osLast, 'мвпбф') and ($this->in($BeforeLast, $this->vowels)))
            {
                $apostrof = '`';
            }
            //Чи треба подвоювати
            if ($this->in($osLast, 'дтзсцлн'))
            {
                $duplicate = $osLast;
            }
            if ($LastSymbol == 'ь')
            {
                $this->firstResult = $this->padeg($osnova, array('і', 'і', 'ь', $duplicate . $apostrof . 'ю', 'і', 'е'));
                $this->frule = 402;
                return true;
            }
            else
            {
                $this->firstResult = $this->padeg($osnova, array('і', 'і', '', $duplicate . $apostrof . 'ю', 'і', 'е'));
                $this->frule = 401;
                return true;
            }
        }
        else
        {
            $this->makeFirstTheSame();
        }
    }

    /*
     * Функция, которая склоняет фамилию записаное в $this->secondName, по правилам склонения мужских фамилий.
     * 
     * @return boolean
     */

    protected function manSecondName()
    {
        /*
          Українські чоловічі та жіночі імена, що в називному відмінку однини закінчуються на -а (-я), відмінються як відповідні іменники І відміни
          Примітка 1. Кінцеві приголосні основи г, к, х у жіночих іменах у давальному та місцевому відмінках однини перед закінченням -і змінюються на з, ц, с: Ольга - Ользі, Палажка - Палажці, Солоха - Солосі.
          Примітка 2. У жіночих іменах типу Одарка, Параска в родовому відмінку множини в кінці основи між приголосними з'являється звук о: Одарок, Парасок */
        //Последний символ
        $LastSymbol = mb_substr($this->secondName, -1, 1, 'utf-8');
        //Предпоследний символ
        $BeforeLast = mb_substr($this->secondName, -2, 1, 'utf-8');
        //Якщо закінчується на ий
        if ($BeforeLast . $LastSymbol == 'ий' or $BeforeLast . $LastSymbol == 'ой')
        {
            $this->secondResult = $this->padeg($this->secondName, array('ого', 'ому', 'ого', 'им', 'ому', 'ий'), true, true);
            $this->srule = 9;
            return true;
        }
        //Останні літера або а або я
        elseif ($LastSymbol == 'а')
        {
            $this->secondResult = $this->padeg($this->secondName, array($BeforeLast . 'и', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'у', $BeforeLast . 'ою', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'о'), false, true);
            $this->srule = 101;
            return true;
        }
        elseif ($LastSymbol == 'я')
        {
            if ($BeforeLast == 'і')
            {
                $this->secondResult = $this->padeg($this->secondName, array('ї', 'ї', 'ю', 'єю', 'ї', 'є'), true);
                $this->srule = 103;
                return true;
            }
            else
            {
                $this->secondResult = $this->padeg($this->secondName, array($BeforeLast . 'і', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'ю', $BeforeLast . 'ею', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'е'), false, true);
                $this->srule = 102;
                return true;
            }
        }
        //Примітка 2. Імена, що в називному відмінку закінчуються на -р, у родовому мають закінчення -а: Віктор - Віктора, Макар - Макара, але: Ігор - Ігоря, Лазар - Лазаря.
        elseif ($LastSymbol == 'р')
        {

            if ($this->secondName == 'Ігор' or $this->secondName == 'Лазар')
            {
                $this->secondResult = $this->padeg($this->secondName, array('я', 'еві', 'я', 'ем', 'еві', 'е'));
                $this->srule = 201;
                return true;
            }
            else
            {
                $osnova = $this->secondName;
                if (mb_substr($osnova, -2, 1, 'utf-8') == 'і')
                {
                    $osnova = mb_substr($osnova, 0, mb_strlen($osnova, 'utf-8') - 2, 'utf-8') . 'о' . mb_substr($osnova, -1, 1, 'utf-8');
                }
                $this->secondResult = $this->padeg($osnova, array('а', 'ові', 'а', 'ом', 'ові', 'е'));
                $this->srule = 202;
                return true;
            }
        }
        //2. Українські чоловічі імена, що в називному відмінку однини закінчуються на приголосний та -о , відмінюються як відповідні іменники ІІ відміни.
        elseif ($this->in($LastSymbol, $this->consonant . 'оь'))
        {
            $group = $this->detect2Group($this->secondName);
            $osnova = $this->getOsnova($this->secondName);
            //В іменах типу Антін, Нестір, Нечипір, Прокіп, Сидір, Тиміш, Федір голосний і виступає тільки в називному відмінку, у непрямих - о: Антона, Антонові                           
            //Чергування і -» о всередині
            $osLast = mb_substr($osnova, -1, 1, 'utf-8');
            if ($osLast != 'й' and mb_substr($osnova, -2, 1, 'utf-8') == 'і' and !in_array(mb_substr(mb_strtolower($osnova, 'utf-8'), -4, 4, 'utf-8'), array('світ', 'цвіт')) and !in_array($this->secondName, array('Гліб')))
            {
                $osnova = mb_substr($osnova, 0, mb_strlen($osnova, 'utf-8') - 2, 'utf-8') . 'о' . mb_substr($osnova, -1, 1, 'utf-8');
            }
            //Випадання букви е при відмінюванні слів типу Орел
            if (mb_substr($osnova, 0, 1, 'utf-8') == 'О' and $this->FirstLastVowel($osnova, $this->vowels . 'гк') == 'е' and $BeforeLast . $LastSymbol != 'сь')
            {

                $delim = mb_strrpos($osnova, 'е', null, 'utf-8');
                $osnova = mb_substr($osnova, 0, $delim, 'utf-8') . mb_substr($osnova, $delim + 1, mb_strlen($osnova, 'utf-8') - $delim, 'utf-8');
            }
            if ($group == 1)
            {
                //Слова що закінчуються на ок
                if (mb_substr($this->secondName, -2, 2, 'utf-8') == 'ок')
                {
                    $this->secondResult = $this->padeg(mb_substr($this->secondName, 0, (mb_strlen($this->secondName, 'utf-8') - 2), 'utf-8'), array('ка', 'кові', 'ка', 'ком', 'кові', 'че'));
                    $this->srule = 30101;
                    return true;
                }
                //Російські прізвища на ов, ев, єв
                elseif (in_array(mb_substr($this->secondName, -2, 2, 'utf-8'), array('ов', 'ев', 'єв')))
                {
                    $this->secondResult = $this->padeg($osnova, array($osLast . 'а', $osLast . 'у', $osLast . 'а', $osLast . 'им', $osLast . 'у', $this->inverse2($osLast) . 'е'), true);
                    $this->srule = 30102;
                    return true;
                }
                //Російські прізвища на ін
                elseif (in_array(mb_substr($this->secondName, -2, 2, 'utf-8'), array('ін')))
                {
                    $this->secondResult = $this->padeg($this->secondName, array('а', 'у', 'а', 'ом', 'у', 'е'));
                    $this->srule = 30103;
                    return true;
                }
                else
                {
                    //Тверда група
                    $this->secondResult = $this->padeg($osnova, array($osLast . 'а', $osLast . 'ові', $osLast . 'а', $osLast . 'ом', $osLast . 'ові', $this->inverse2($osLast) . 'е'), true);
                    $this->srule = 301;
                    return true;
                }
            }
            if ($group == 2)
            {
                //Мішана група
                $this->secondResult = $this->padeg($osnova, array('а', 'еві', 'а', 'ем', 'еві', 'е'));
                $this->srule = 302;
                return true;
            }
            if ($group == 3)
            {
                //М’яка група
                //Соловей
                if (mb_substr($this->secondName, -2, 2, 'utf-8') == 'ей' and $this->in(mb_substr($this->secondName, -3, 1, 'utf-8'), $this->gubni))
                {
                    $osnova = mb_substr($this->secondName, 0, mb_strlen($this->secondName, 'utf-8') - 2, 'utf-8') . '’';
                    $this->secondResult = $this->padeg($osnova, array('я', 'єві', 'я', 'єм', 'єві', 'ю'));
                    $this->srule = 305;
                    return true;
                }
                elseif ($BeforeLast == 'і' or $LastSymbol == 'й')
                {
                    $this->secondResult = $this->padeg($this->secondName, array('я', 'єві', 'я', 'єм', 'єві', 'ю'), true);
                    $this->srule = 304;
                    return true;
                }
                //Слова що закінчуються на ець
                elseif (mb_substr($this->secondName, -3, 3, 'utf-8') == 'ець')
                {
                    $this->secondResult = $this->padeg(mb_substr($this->secondName, 0, (mb_strlen($this->secondName, 'utf-8') - 3), 'utf-8') . 'ц', array('я', 'еві', 'я', 'ем', 'еві', 'ю'));
                    $this->srule = 305;
                    return true;
                }
                //Слова що закінчуються на єць яць
                elseif (in_array(mb_substr($this->secondName, -3, 3, 'utf-8'), array('єць', 'яць')))
                {
                    $this->secondResult = $this->padeg(mb_substr($this->secondName, 0, (mb_strlen($this->secondName, 'utf-8') - 3), 'utf-8') . 'йц', array('я', 'еві', 'я', 'ем', 'еві', 'ю'));
                    $this->srule = 306;
                    return true;
                }
                else
                {
                    $this->secondResult = $this->padeg($osnova, array('я', 'еві', 'я', 'ем', 'еві', 'ю'));
                    $this->srule = 303;
                    return true;
                }
            }
        }
        elseif ($LastSymbol == 'і')
        {
            $this->secondResult = $this->padeg($this->secondName, array('их', 'им', 'их', 'ими', 'их', 'і'), true);
            $this->srule = 4;
            return true;
        }
        else
        {
            $this->makeSecondTheSame();
        }
    }

    /*
     * Функция, которая склоняет фамилию записаное в $this->secondName, по правилам склонения женских фамилий.
     * 
     * @return boolean
     */

    protected function womanSecondName()
    {
        /*
          Українські чоловічі та жіночі імена, що в називному відмінку однини закінчуються на -а (-я), відмінються як відповідні іменники І відміни
          Примітка 1. Кінцеві приголосні основи г, к, х у жіночих іменах у давальному та місцевому відмінках однини перед закінченням -і змінюються на з, ц, с: Ольга - Ользі, Палажка - Палажці, Солоха - Солосі.
          Примітка 2. У жіночих іменах типу Одарка, Параска в родовому відмінку множини в кінці основи між приголосними з'являється звук о: Одарок, Парасок */
        //Последний символ
        $LastSymbol = mb_substr($this->secondName, -1, 1, 'utf-8');
        //Предпоследний символ
        $BeforeLast = mb_substr($this->secondName, -2, 1, 'utf-8');

        //Якщо закінчується на ніга -» нога        
        if (mb_substr($this->secondName, -4, 4, 'utf-8') == 'ніга')
        {
            $osnova = mb_substr($this->secondName, 0, mb_strlen($this->secondName, 'utf-8') - 3, 'utf-8') . 'о';
            $this->secondResult = $this->padeg($osnova, array('ги', 'зі', 'гу', 'гою', 'зі', 'го'));
            $this->srule = 10101;
            return true;
        }
        //Ті що на ськ
        elseif ($LastSymbol == 'а' and (in_array(mb_substr($this->secondName, -3, 2, 'utf-8'), array('ов', 'ев', 'єв', 'ив', 'ьк', 'тн', 'рн', 'ин'))))
        {
            $this->secondResult = $this->padeg($this->secondName, array($BeforeLast . 'ої', $BeforeLast . 'ій', $BeforeLast . 'у', $BeforeLast . 'ою', $BeforeLast . 'ій', $BeforeLast . 'о'), false, true);
            $this->srule = 10102;
            return true;
        }
        //Останні літера або а або я
        elseif ($LastSymbol == 'а')
        {
            $this->secondResult = $this->padeg($this->secondName, array($BeforeLast . 'и', $BeforeLast . 'і', $BeforeLast . 'у', $BeforeLast . 'ою', $BeforeLast . 'і', $BeforeLast . 'о'), false, true);

            $this->srule = 101;
            return true;
        }
        elseif ($LastSymbol == 'я')
        {
            //Донская
            if ($BeforeLast == 'а')
            {
                $this->secondResult = $this->padeg($this->secondName, array('ої', 'ій', 'ую', 'ою', 'ій', 'ая'), true, true);
                $this->srule = 10301;
                return true;
            }
            elseif ($this->in($BeforeLast, $this->vowels))
            {
                $this->secondResult = $this->padeg($this->secondName, array('ї', 'ї', 'ю', 'єю', 'ї', 'є'), true);
                $this->srule = 103;
                return true;
            }
            else
            {
                $this->secondResult = $this->padeg($this->secondName, array($BeforeLast . 'і', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'ю', $BeforeLast . 'ею', $this->inverseGKH($BeforeLast) . 'і', $BeforeLast . 'е'), false, true);
                $this->srule = 102;
                return true;
            }
        }
        else
        {
            $this->makeSecondTheSame();
        }
    }

    /*
     * Функция, которая склоняет отчество записаное в $this->secondName, по правилам склонения мужских отчеств.
     * 
     * @return boolean
     */

    protected function manFatherName()
    {
        $ending = mb_substr($this->fatherName, -2, 2, 'utf-8');
        if ($ending == 'ич' or $ending == 'іч')
        {
            $this->fatherResult = $this->padeg($this->fatherName, array('а', 'у', 'а', 'ем', 'у', 'у'), false, false);
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

    protected function womanFatherName()
    {
        if (mb_substr($this->fatherName, -3, 3, 'utf-8') == 'вна')
        {
            $this->fatherResult = $this->padeg($this->fatherName, array('и', 'і', 'у', 'ою', 'і', 'о'), true, false);
            return true;
        }
        else
        {
            $this->makeFatherTheSame();
            return false;
        }
    }

    /*
     * Автоматическое определение пола
     * @return void
     */

    protected function genderDetect()
    {

        //$this->gender = NCL::$MAN; // мужчина
        if (!$this->gender)
        {
            //Определение пола по отчеству
            if (isset($this->fatherName) and $this->fatherName)
            {
                $LastTwo = mb_substr($this->fatherName, -2, 2, 'utf-8');
                if ($LastTwo == 'ич')
                {
                    $this->gender = NCL::$MAN; // мужчина
                    return true;
                }
                if ($LastTwo == 'на')
                {
                    $this->gender = NCL::$WOMAN; // женщина
                    return true;
                }
            }
            $man = 0; //Мужчина
            $woman = 0; //Женщина

            $FLastSymbol = mb_substr($this->firstName, -1, 1, 'utf-8');
            $FLastTwo = mb_substr($this->firstName, -2, 2, 'utf-8');
            $FLastThree = mb_substr($this->firstName, -3, 3, 'utf-8');
            $FLastFour = mb_substr($this->firstName, -4, 4, 'utf-8');

            $SLastSymbol = mb_substr($this->secondName, -1, 1, 'utf-8');
            $SLastTwo = mb_substr($this->secondName, -2, 2, 'utf-8');
            $SLastThree = mb_substr($this->secondName, -3, 3, 'utf-8');

            //Если нет отчества, то определяем по имени и фамилии, будем считать вероятность
            if (isset($this->firstName) and $this->firstName)
            {
                //Попробуем выжать максимум из имени
                //Если имя заканчивается на й, то скорее всего мужчина
                if ($FLastSymbol == 'й')
                {
                    $man+=0.9;
                }
                if (in_array($FLastTwo, array('он', 'ов', 'ав', 'ам', 'ол', 'ан', 'рд', 'мп', 'ко', 'ло')))
                {
                    $man+=0.5;
                }
                if (in_array($FLastThree, array('бов', 'нка', 'яра', 'ила')))
                {
                    $woman+=0.5;
                }
                if ($this->in($FLastSymbol, $this->consonant))
                {
                    $man+=0.01;
                }
                if ($FLastSymbol == 'ь')
                {
                    $man+=0.02;
                }

                if (in_array($FLastTwo, array('дь')))
                {
                    $woman+=0.1;
                }

                if (in_array($FLastThree, array('ель', 'бов')))
                {
                    $woman+=0.4;
                }
            }

//            $man*=1.2;
//            $woman*=1.2;

            if (isset($this->secondName) and $this->secondName)
            {
                if (in_array($SLastTwo, array('ов', 'ин', 'ев', 'єв', 'ін', 'їн', 'ий', 'їв', 'ів', 'ой', 'ей')))
                {
                    $man+=0.4;
                }

                if (in_array($SLastThree, array('ова', 'ина', 'ева', 'єва', 'іна')))
                {
                    $woman+=0.4;
                }

                if (in_array($SLastTwo, array('ая')))
                {
                    $woman+=0.4;
                }
            }

            //Теперь смотрим, кто больше набрал
            if ($man > $woman)
            {
                $this->gender = NCL::$MAN;
            }
            else
            {
                $this->gender = NCL::$WOMAN;
            }
        }
        return true;
    }

    /*
     * Определение текущее слово есть фамилией, именем или отчеством
     * @return integer $number - 1-фамили 2-имя 3-отчество
     */

    protected function detectNamePart($namepart)
    {
        $LastSymbol = mb_substr($namepart, -1, 1, 'utf-8');
        $LastTwo = mb_substr($namepart, -2, 2, 'utf-8');
        $LastThree = mb_substr($namepart, -3, 3, 'utf-8');
        $LastFour = mb_substr($namepart, -4, 4, 'utf-8');

        //Считаем вероятность
        $first = 0;
        $second = 0;
        $father = 0;

        //если смахивает на отчество
        if (in_array($LastThree, array('вна', 'чна', 'ліч')) or in_array($LastFour, array('ьмич', 'ович')))
        {
            $father+=3;
        }

        //Похоже на имя
        if (in_array($LastThree, array('тин'  /*{endings_sirname3}*/)) or in_array($LastFour, array('ьмич', 'юбов', 'івна', 'явка', 'орив', 'кіян'  /*{endings_sirname4}*/)))
        {
            $first+=0.5;
        }

        //Исключения
        if (in_array($namepart, array('Лев', 'Гаїна', 'Афіна', 'Антоніна', 'Ангеліна', 'Альвіна', 'Альбіна', 'Аліна', 'Павло', 'Олесь')))
        {
            $first+=10;
        }

        //похоже на фамилию
        if (in_array($LastTwo, array('ов', 'ін', 'ев', 'єв', 'ий', 'ин', 'ой', 'ко', 'ук', 'як', 'ца', 'их', 'ик', 'ун', 'ок', 'ша', 'ая', 'га', 'єк', 'аш', 'ив', 'юк', 'ус', 'це', 'ак', 'бр', 'яр', 'іл', 'ів', 'ич', 'сь', 'ей', 'нс', 'яс', 'ер', 'ай', 'ян', 'ах', 'ць', 'ющ', 'іс', 'ач', 'уб', 'ох', 'юх','ут','ча','ул','вк','зь', 'уц', 'їн'  /*{endings_name2}*/)))
        {
            $second+=0.4;
        }

        if (in_array($LastThree, array('ова', 'ева', 'єва', 'тих', 'рик', 'вач', 'аха', 'шен', 'мей', 'арь', 'вка', 'шир', 'бан', 'чий', 'іна', 'їна', 'ька', 'ань', 'ива', 'аль','ура','ран','ало','ола','кур','оба','оль','нта','зій','ґан','іло','шта', 'юпа', 'рна', 'бла', 'еїн', 'има', 'мар', 'кар', 'оха', 'чур', 'ниш', 'ета', 'тна', 'зур', 'нір', 'йма', 'орж', 'рба', 'іла', 'лас', 'дід', 'роз', 'аба', 'лест', 'мара', 'обка', 'рока', 'сика', 'одна', 'нчар', 'вата', 'ндар', 'грій'  /*{endings_name3}*/)))
        {
            $second+=0.4;
        }

        if (in_array($LastFour, array('ьник', 'нчук', 'тник', 'кирь', 'ский', 'шена', 'шина', 'вина', 'нина', 'гана', 'гана', 'хній', 'зюба', 'орош', 'орон', 'сило', 'руба' /*{endings_name4}*/)))
        {
            $second+=0.4;
        }


        $max = max(array($first, $second, $father));

        if ($first == $max)
        {
            return 'N';
        }
        elseif ($second == $max)
        {
            return 'S';
        }
        else
        {
            return 'F';
        }
    }

}

?>