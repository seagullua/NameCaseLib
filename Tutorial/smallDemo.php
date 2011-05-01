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
 * NCLNameCaseRu::$MAN - мужской пол
 * NCLNameCaseRu::$WOMAN - женский пол
 * 
 * NCLNameCaseRu::$IMENITLN - именительный падеж
 * NCLNameCaseRu::$RODITLN - родительные падеж
 * NCLNameCaseRu::$DATELN - дательные падеж
 * NCLNameCaseRu::$VINITELN - винительный падеж
 * NCLNameCaseRu::$TVORITELN - творительный падеж
 * NCLNameCaseRu::$PREDLOGN - предложный падеж
 * 
 * ========================
 * Описание формата вывода
 * ========================
 * S - фамилия
 * N - имя
 * F - отчество
 */

echo 'Отчет, ' .
 $nc->qFullName("Афонин", "Николай", "Сергеевич", NCLNameCaseRu::$MAN, NCLNameCaseRu::$RODITLN)
 . ' о проделаной работе вместе с его сыном ' .
 $nc->qFullName("Афонин", "Никита", "", NCLNameCaseRu::$MAN, NCLNameCaseRu::$TVORITELN, "N S") .
 ' на осенних каникулах. Задание держалось ' .
 $nc->qFullName("", "Маргаритта", "Николаевна", NCLNameCaseRu::$WOMAN, NCLNameCaseRu::$PREDLOGN, "на N F; ") .
 'Поздравляем всех предчастных, в том числе и ' .
 $nc->qFullName("Кардонский", "Серафим", "Ильич", NCLNameCaseRu::$MAN, NCLNameCaseRu::$VINITELN) . ' и ' .
 $nc->qFullName("Лобудская", "София", "Викторовна", NCLNameCaseRu::$WOMAN, NCLNameCaseRu::$VINITELN) .
 '. Хотим передать поздравление также ' .
 $nc->qFullName("Игнатьев", "Павел", "Викторович", NCLNameCaseRu::$MAN, NCLNameCaseRu::$DATELN) . ' и ' .
 $nc->qFullName("Сумарский", "Лев", "", NCLNameCaseRu::$MAN, NCLNameCaseRu::$DATELN, "S N");

/*
 * ========================
 * Результат выполнения
 * ========================
 * Отчет, Афонина Николая Сергеевича о проделаной работе вместе с его сыном Никитой Афониным на осенних каникулах. Задание держалось на Маргаритте Николаевне; Поздравляем всех предчастных, в том числе и Кардонского Серафима Ильича и Лобудскую Софию Викторовну. Хотим передать поздравление также Игнатьеву Павлу Викторовичу и Сумарскому Льву
 */





