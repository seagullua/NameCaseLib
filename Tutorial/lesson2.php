<?php
header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ru.php';
$nc = new NCLNameCaseRu();

/**
 * Указываем падеж русской константой
 */
echo $nc->q('Андрей Николаевич', NCL::$RODITLN)."\n";

/**
 * Указываем падеж украинской константой
 */
echo $nc->q('Андрей Николаевич', NCL::$UaRodovyi)."\n";

/**
 * Явно не указываем пол
 */
print_r($nc->q('Иващук'));

/**
 * Указываем мужской пол
 */
print_r($nc->q('Иващук', null, NCL::$MAN));        
?>
