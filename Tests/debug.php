<?php

header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ua.php';
$ob = new NCLNameCaseUa;

print_r($ob->q("Афонін Микола Сергійович"));
//echo $ob->getSecondNameRule();
?>
