<?php
/**
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @package NameCaseLib
 */

/**
 * Интерфейс для русского и украинского языка
 * 
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4
 * @package NameCaseLib
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

    public function q($fullname, $caseNum=null, $gender=null);
}

?>
