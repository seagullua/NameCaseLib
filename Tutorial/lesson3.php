<?php

header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ru.php';
$nc = new NCLNameCaseRu();

$people = array("Андрей Николаевич", 'Ирина', 'Ефиопский Аркадий Василевич',
    'Мария Николаевна', 'Розумовский Илья');

/**
 * Выбираем случайного человека из списка
 */
$person = $people[rand(0, count($people) - 1)];

/**
 * Определяем пол человека
 */
$gender = $nc->genderDetect($person);

/**
 * Выводим приветствие
 */
echo "Мы хотим предложить " . $nc->q($person, NCL::$DATELN) . " наши новые товары из категорий:
    <ul>";

/**
 * В зависимости от пола предлагаем разные товары
 */
if ($gender == NCL::$MAN)
{
    echo "<li>Рыбалка и охота</li>
          <li>Электроника</li>
          <li>Инструменты для дома</li>";
}
else
{
    echo "<li>Книги о кулинарии</li>
          <li>Косметика</li>
          <li>Дом и семья</li>";
}
echo "</ul>";
?>
