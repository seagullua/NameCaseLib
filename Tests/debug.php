<?php

header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ua.php';
$ob = new NCLNameCaseUa;

print_r($ob->q("Іванцов Микола Микита Андрій Петро Михайлович Миколайович Антонівна"));
echo $ob->getFullNameFormat("Мая");
//echo $ob->getSecondNameRule();
?>
