<?php
 include ("names.class.php");
$nn = new names();
 $tmp = explode(" ",$_GET['name']);
	if(substr(trim($tmp[2]),-1,1)=="С‡")
	{
		$who = 1;
	}
	else
	{
		$who = 2;
	}
	$nn->who = $who;
	$nn->firstName = trim($tmp[1]);
	$nn->secondName = trim($tmp[0]);
	$nn->doit();
	echo "<h1>{$who}</h1><pre>";
	print_r($nn->firstResult);
	print_r($nn->secondResult);
	echo "</pre><h1>РџСЂР°РІРёР»Рѕ РёРјРµРЅРё: {$nn->frule}</h1><h1>РџСЂР°РІРёР»Рѕ С„Р°РјРёР»РёРё: {$nn->srule}</h1>
	<h1>РљРѕРґ РћС€РёР±РєРё: {$nn->error}</h1>";
?>