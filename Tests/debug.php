<?php

header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ua.php';
$ob = new NCLNameCaseUa;

//print_r($ob->q("Швець Антон"));
//var_dump($ob->getWordsArray());

print_r($ob->fullReset()->setFullName("Афросинин", "Павел", "Илларионович")->getFormatted(null, "N F S"));

//echo $ob->getFullNameFormat("Мая");
//echo $ob->genderDetect("Іванцов Микола Микита Андрій Петро Михайлович Миколайович Антонівна");
//echo $ob->getSecondNameRule();
?>
