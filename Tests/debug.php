<?php

header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ru.php';
$ob = new NCLNameCaseRu;
$ob->setSecondName('Чайка');
$ob->setGender(NCLNameCaseRu::$MAN);
print_r($ob->getSecondNameCase()); echo $ob->getSecondNameRule();
?>
