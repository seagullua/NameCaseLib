<?php
header('Content-type: text/html; charset=utf-8');
/*
 * Небольшой пример использования библиотеки
 * 1. Шаг подключаем библиотеку
 */
require '../Library/NCL.NameCase.ua.php';
/*
 * 2. Создаем объект
 */
$nc = new NCLNameCaseUa();
//print_r($nc->q("Егор Котляр"));
print_r($nc->qFirstName('Доброніга',null,2));
echo $nc->getFirstNameRule();