<?php
$type = 'boy';
$val = 'second';
mysql_connect('localhost', 'root', '');
mysql_select_db('names');
mysql_set_charset('utf8');
$arr = file($type . $val . '.txt');
foreach ($arr as $cd)
{
    mysql_query('INSERT INTO ' . $type . $val . ' (`name`) VALUES (\'' . trim($cd) . '\')');
}
?>
