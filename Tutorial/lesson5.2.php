<?php
header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ru.php';
$nc = new NCLNameCaseRu();

/**
 * Пол можно не указывать
 */
echo $nc->qFatherName("Николаевич", NCL::$DATELN)."\n";

/**
 * Если не указать падеж, получим массив со всеми падежами.
 */
print_r($nc->qFirstName("Андрей"));

/**
 * В ситувациях, когда не возможно определить пол, его полезно указать.
 */
echo $nc->qSecondName("Касюк", NCL::$DATELN, NCL::$MAN)."\n";
?>
