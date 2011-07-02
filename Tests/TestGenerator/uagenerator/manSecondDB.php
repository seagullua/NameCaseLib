<?php
$type = 'boy';
$val = 'second';
mysql_connect('localhost', 'root', '');
mysql_select_db('names');
mysql_set_charset('utf8');
$tablename=$type . $val;
header('Content-type: text/html; charset=utf-8');
require '../../../Library/NCL.NameCase.ua.php';
$nc = new NCLNameCaseUa();
$all = mysql_query("SELECT `name`,`id`,`nameCase` FROM {$tablename}");
$t='';
while ($row = mysql_fetch_array($all))
{
    if(implode('#', $nc->qSecondName($row['name'], null, 1))!=$row['nameCase'])
    {
        $t.= "<a href='saveme.php?id={$row['id']}&val={$val}&type={$type}'><b>{$row['name']}</b></a><br>";
    $t.=  "<font style='font-size:12px;'>".
    implode('<br>', $nc->qSecondName($row['name'], null, 1))
            ."</font><br>";
    }
    
}
echo $t;
?>
