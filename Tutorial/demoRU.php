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
/*
 * =========================
 * Встроенные константы
 * =========================
 * NCL::$IMENITLN - именительный падеж
 * NCL::$RODITLN - родительные падеж
 * NCL::$DATELN - дательные падеж
 * NCL::$VINITELN - винительный падеж
 * NCL::$TVORITELN - творительный падеж
 * NCL::$PREDLOGN - предложный падеж
 */

echo 'Отчет, ' .
 $nc->q("Афонин Николай Сергеевич", NCL::$RODITLN)
 . ' о проделаной работе вместе с его сыном ' .
 $nc->q("Афонин Никита", NCL::$TVORITELN) .
 ' на осенних каникулах. Задание держалось на ' .
 $nc->q("Маргаритта Николаевна", NCL::$PREDLOGN) .
 '; Поздравляем всех предчастных, в том числе и ' .
 $nc->q("Кардонский Серафим Ильич", NCL::$VINITELN) . ' и ' .
 $nc->q("Лобудская София Викторовна", NCL::$VINITELN) .
 '. Хотим передать поздравление также ' .
 $nc->q("Игнатьев Павел Викторович", NCL::$DATELN) . ' и ' .
 $nc->q("Сумарский Лев", NCL::$DATELN);

/*
 * ========================
 * Результат выполнения
 * ========================
 * Отчет, Афонина Николая Сергеевича о проделаной работе вместе с его сыном Афониным Никитой на осенних каникулах. Задание держалось на Маргаритте Николаевне; Поздравляем всех предчастных, в том числе и Кардонского Серафима Ильича и Лобудскую Софию Викторовну. Хотим передать поздравление также Игнатьеву Павлу Викторовичу и Сумарскому Льву
 */




