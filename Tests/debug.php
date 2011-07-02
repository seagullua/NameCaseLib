<?php

header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ua.php';
$ob = new NCLNameCaseUa;
print_r($ob->qSecondName('Донськая',null,2));
echo $ob->getSecondNameRule();
?>
