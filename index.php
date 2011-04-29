<?php
//@error_reporting ( E_ALL );
include ("names.class.php");
$names = file("names1.txt");
$nn = new names();
$cheched = file("names-checked.txt");
//print_r($cheched);
//$cheched = array();
///$cheched = explode("\n",$checheda[0]);
//print_r($cheched);
//die();
$count = 0;
$count_all = 0;
$html_all= "";
foreach($names as $key=>$value)
{
	$tmp = explode(" ",$value);
	//print_r($tmp);
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

	$html = compare($nn->firstResult, $nn->secondResult, $cheched[$key]);
	if($html!=false)
	{
		//$count += 1;
		$html_all .= $html;
	}
	//$count_all += 1;
	//print_r($nn->firstResult);
	//echo $tmp[2]." $who  </br>";
}
echo "<h1>РћС€РёР±РѕРє: $count / Р’СЃРµРіРѕ: $count_all / РџСЂРѕР±РёРІ: ".((round(($count_all-$count)/$count_all*10000))/100)."%</h1>".$html_all;
function compare($firstArray, $secondArray, $checkline)
{
	global $names;
	$result = "";
	$check = explode("#",$checkline);
	//print_r($check);
	$i = 0;
	for($i==1;$i<6;$i++)
	{
		$comp = compare_word($firstArray[$i], $secondArray[$i], trim($check[$i]));
		if($comp==3)
		{
			//return false;
			$tt = explode(" ",trim($check[$i]));
			$result .= "<li>$i - {$firstArray[$i]}/<b>{$tt[1]}</b> {$secondArray[$i]}/<b>{$tt[0]}</b></li>";
		}
		elseif($comp==2)
		{
			$tt = explode(" ",trim($check[$i]));
			$result .= "<li>$i - {$secondArray[$i]}/<b>{$tt[0]}</b></li>";
		}
		elseif($comp==1)
		{
			$tt = explode(" ",trim($check[$i]));
			$result .= "<li>$i - {$firstArray[$i]}/<b>{$tt[1]}</b></li>";
		}
	}
	if($result)
	{
		return "<a href='checkword.php?name=".urlencode($check[0])."' targe='_blank'>".$check[0]."</a><ul>".$result."</ul><hr>";
	}
	else
	{
		return false;
	}
}
function compare_word($firstStr, $secondStr, $checkStr)
{
    global $count, $count_all;
    $tmp = explode(" ",$checkStr);
    //echo $checkStr;
    $nsecond = trim($tmp[0]);
    $nfirst = trim($tmp[1]);
    //echo "_{$firstStr}_{$nfirst}_<br>";
    $count_all += 2;
    if($firstStr!=$nfirst and $secondStr!=$nsecond)
    {

    	$count += 2;
    	return 3;
    }
    elseif($firstStr!=$nfirst)
    {

    	$count += 1;
    	return 1;
    }
    elseif($secondStr!=$nsecond)
    {

    	$count += 1;
    	return 2;
    }

}
//print_r($names);
?>