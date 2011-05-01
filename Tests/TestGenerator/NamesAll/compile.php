<?php
function cl($text)
{
    return trim($text);
}
$type='girl';

$names=file($type.'name.txt');
$sirnames=file($type.'sirname.txt');
$fathers=file($type.'father.txt');

$countname=count($names);
$countsirname=count($sirnames);
$countfather=count($fathers);

$all=max(array($countfather, $countname, $countsirname));
$res=array();
$cur=0;
for ($i=0;$i<$all;$i++)
{
    $cur++;
    $full="";
    if ($cur>$countsirname)
    {
        $full=cl($sirnames[rand(0,($countsirname-1))]);
    }
    else
    {
        $full=cl($sirnames[$i]);
    }
    $full.=' ';
    if ($cur>$countname)
    {
        $full.=cl($names[rand(0,($countname-1))]);
    }
    else
    {
        $full.=cl($names[$i]);
    }
    $full.=' ';
    if ($cur>$countfather)
    {
        $full.=cl($fathers[rand(0,($countfather-1))]);
    }
    else
    {
        $full.=cl($fathers[$i]);
    }
    $res[]=$full;
}
print_r(implode("\n", $res));
file_put_contents('../Names/'.$type."_full.txt", implode("\n", $res));
?>
