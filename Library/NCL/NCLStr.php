<?php
/**
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @package NameCaseLib
 */

/**
 * Класс содержит функции для работы со строками, которые используются в NCLNameCaseLib
 * 
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4.1
 * @package NameCaseLib
 */
class NCLStr
{
    /**
     * Кодировка, в котороя работает система
     * @var string 
     */
    static $charset = 'utf-8';

    /**
     * Получить подстроку из строки
     * @param string $str строка
     * @param int $start начало подстроки
     * @param int $length длина подстроки
     * @return int подстрока 
     */
    static function substr($str, $start, $length=null)
    {
        return mb_substr($str, $start, $length, NCLStr::$charset);
    }

    /**
     * Поиск подстроки в строке
     * @param string $haystack строка, в которой искать
     * @param string $needle подстрока, которую нужно найти
     * @param int $offset начало поиска
     * @return int позиция подстроки в строке
     */
    static function strpos($haystack, $needle, $offset = 0)
    {
        return mb_strpos($haystack, $needle, $offset, NCLStr::$charset);
    }

    /**
     * Определение длины строки
     * @param string $str строка
     * @return int длина строки
     */
    static function strlen($str)
    {
        return mb_strlen($str, NCLStr::$charset);
    }

    /**
     * Переводит строку в нижний регистр
     * @param string $str строка
     * @return string строка в нижнем регистре
     */
    static function strtolower($str)
    {
        return mb_strtolower($str, NCLStr::$charset);
    }
    
    /**
     * Переводит строку в верхний регистр
     * @param string $str строка
     * @return string строка в верхнем регистре
     */
    static function strtoupper($str)
    {
        return mb_strtoupper($str, NCLStr::$charset);
    }

    /**
     * Поиск подстроки в строке справа
     * @param string $haystack строка, в которой искать
     * @param string $needle подстрока, которую нужно найти
     * @param int $offset начало поиска
     * @return int позиция подстроки в строке
     */
    static function strrpos($haystack, $needle, $offset=null)
    {
        return mb_strrpos($haystack, $needle, $offset, NCLStr::$charset);
    }
    
    /**
     * Проверяет в нижнем ли регистре находится строка
     * @param string $phrase строка
     * @return bool в нижнем ли регистре строка 
     */
    static function isLowerCase($phrase)
    {
        return ($phrase == NCLStr::strtolower($phrase));
    }
    
     /**
     * Проверяет в верхнем ли регистре находится строка
     * @param string $phrase строка
     * @return bool в верхнем ли регистре строка 
     */
    static function isUpperCase($phrase)
    {
        return ($phrase == NCLStr::strtoupper($phrase));
    }
    
    /**
     * Превращает строку в массив букв
     * @param string $phrase строка
     * @return array массив букв
     */
    static function splitLetters($phrase)
    {
        $resultArr = array();
        $stop = NCLStr::strlen($phrase);
        for ($idx = 0; $idx < $stop; $idx++)
        {
            $resultArr[] = NCLStr::substr($phrase, $idx, 1);
        }
        return $resultArr;
    }
    
    /**
     * Соединяет массив букв в строку
     * @param array $lettersArr массив букв
     * @return string строка
     */
    static function connectLetters($lettersArr)
    {
        return implode('', $lettersArr);
    }
    
    /**
     * Разбивает строку на части использую шаблон
     * @param string $pattern шаблон разбития
     * @param string $string строка, которую нужно разбить
     * @return array разбитый массив 
     */
    static function explode($pattern, $string)
    {
        return mb_split($pattern, $string);
    }
}

?>
