<?php
header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ru.php';
$nc = new NCLNameCaseRu();

$people = array("Андрей Николаевич", 'Ирина', 'Ефиопский Аркадий Василевич',
    'Мария Николаевна', 'Розумовский Илья');

foreach ($people as $person)
{
    /**
     * Для каждого человека выводим формат ФИО
     */
    echo $nc->getFullNameFormat($person).' - '.$person."\n";
}
/**
 * Результат выполнения:
 * N F  - Андрей Николаевич
 * N  - Ирина
 * S N F  - Ефиопский Аркадий Василевич
 * N F  - Мария Николаевна
 * S N  - Розумовский Илья
 */
?>
