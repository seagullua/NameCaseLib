<?php
header('Content-type: text/html; charset=utf-8');
require '../Library/NCL.NameCase.ru.php';
$nc = new NCLNameCaseRu();

echo $nc->q("АНДРЕЙ НИКОЛАЕВИЧ", NCL::$RODITLN)."\n";
echo $nc->q("королёв Никита ПЕТРОВИЧ", NCL::$RODITLN)."\n";
echo $nc->q("ПороСЁнОК ПёТР", NCL::$RODITLN)."\n";
?>
