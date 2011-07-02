<?php
function cl($text)
{
    return trim($text);
}
$type='boy';

$names=file($type.'name.txt');
$sirnames=file($type.'sirname.txt');

$countname=count($names);
$countsirname=count($sirnames);

$all=max(array($countname, $countsirname));
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
    $res[]=$full;
}
print_r(implode("\n", $res));
file_put_contents('../Names/'.$type."_SF.txt", implode("\n", $res));
?>
