<?php
header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ru.php';
$nc = new NCLNameCaseRu();

/**
 * В цепочках может вызыватся любое количество методов
 */
echo $nc->fullReset()->setFirstName("Андрей")->setFatherName("Николаевич")->getFormatted(NCL::$RODITLN, "N F")."\n";

/**
 * Заканчиваются методы вызовом метода getFormatted(), который возвращает искомую строку
 */
print_r($nc->fullReset()->setFullName("Афросинин", "Павел", "Илларионович")->getFormatted(null, "N F S"));

/**
 * Начинаются все цепочки с вызова метода fullReset();
 */
echo $nc->fullReset()->setSecondName("Романчук")->setGender(NCL::$MAN)->getFormatted(NCL::$DATELN);
?>
