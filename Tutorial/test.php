<?php
header('Content-type: text/html; charset=utf-8');
/*
 * Небольшой пример использования библиотеки
 * 1. Шаг подключаем библиотеку
 */
require '../Library/NCL.NameCase.ru.php';
/*
 * 2. Создаем объект
 */
$nc = new NCLNameCaseRu();
print_r($nc->qFullName("Рижиков", "Тарас", "Геннадиевич", NCLNameCaseRu::$MAN, NCLNameCaseRu::$DATELN));