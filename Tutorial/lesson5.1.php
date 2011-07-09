<?php
header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ru.php';
$nc = new NCLNameCaseRu();

/**
 * Можно не указывать пол и формат
 */
echo $nc->qFullName("Иванов", "Фёдор", "Ильич", null, NCL::$TVORITELN)."\n"; //Ивановым Фёдором Ильичом

/**
 * В формате не обязательно использовать все слова
 */
echo $nc->qFullName("Иванов", "Фёдор", "Ильич", NCL::$MAN, NCL::$TVORITELN, "N F")."\n"; //Фёдором Ильичом

/**
 * Можно указать формат и не указывать пол человека
 */
echo $nc->qFullName("Иванов", "Фёдор", "Ильич", null, NCL::$TVORITELN, "S N")."\n"; //Ивановым Фёдором

/**
 * Можно указать все параметры
 */
echo $nc->qFullName("Иванов", "Фёдор", "Ильич", NCL::$MAN, NCL::$TVORITELN, "S N F")."\n"; //Ивановым Фёдором Ильичом

/**
 * В строке-формате могут присутствовать любые символы
 */
echo $nc->qFullName("Иванов", "Фёдор", "Ильич", NCL::$MAN, NCL::$TVORITELN, "Фамилия: S, Имя: N, Отчество: F")."\n"; //Фамилия: Ивановым, Имя: Фёдором, Отчество: Ильичом
?>
