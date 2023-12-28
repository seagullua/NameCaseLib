<?php


use seagullua\NameCaseLib\NCLNameCaseRu;

header('Content-type: text/html; charset=utf-8');

/**
 * Подключаем необходимый язык
 */
require '../vendor/autoload.php';
/**
 * Создаем обьект класса.
 * Теперь библиотека готова к работе
 */
$nc = new NCLNameCaseRu();
/**
 * Производим склонения и выводим результат на экран
 */

print_r($nc->qSecondName("Иванов"));
print_r($nc->qFirstName("Андрей"));
print_r($nc->qFatherName("Алексеевич"));
