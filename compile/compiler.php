<?php
$firstname = "boysname.txt";
$secondname = "boyssirname.txt";
$dest = "boys.txt";
$third = "Иванович";
$f = file($firstname);
$s = file($secondname);
if(count($f)>count($s))
{	$to = count($f);}
else
{	$to = count($s);}
$r=fopen($dest,"w");
for($i==0;$i<=$to;$i++)
{	if($s[$i])
		$sec = trim($s[$i]);
	if($f[$i])
		$fir = trim($f[$i]);
	fwrite($r,"{$sec} {$fir} {$third}\r\n");}
fclose($r);
?>