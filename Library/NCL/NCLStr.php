<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NCLStr
 *
 * @author seagull
 */
class NCLStr
{

    static $charset = 'utf-8';

    /*
     * Обертка для substr
     */

    static function substr($str, $start, $length=null)
    {
        return mb_substr($str, $start, $length, NCLStr::$charset);
    }

    /*
     * Обертка для strpos
     */

    static function strpos($haystack, $needle, $offset = 0)
    {
        return mb_strpos($haystack, $needle, $offset, NCLStr::$charset);
    }

    /*
     * Обертка для strlen
     */

    static function strlen($str)
    {
        return mb_strlen($str, NCLStr::$charset);
    }

    /*
     * Обертка для strtolower
     */

    static function strtolower($str)
    {
        return mb_strtolower($str, NCLStr::$charset);
    }

    static function strtoupper($str)
    {
        return mb_strtoupper($str, NCLStr::$charset);
    }

    /**
     * Обертка для strrpos
     * @param type $haystack
     * @param type $needle
     * @param type $offset
     * @return type 
     */
    static function strrpos($haystack, $needle, $offset=null)
    {
        return mb_strrpos($haystack, $needle, $offset, NCLStr::$charset);
    }

    static function isLowerCase($phrase)
    {
        return ($phrase == NCLStr::strtolower($phrase));
    }

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
    
    static function explode($pattern, $string)
    {
        return mb_split($pattern, $string);
    }
}

?>
