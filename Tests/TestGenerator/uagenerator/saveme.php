<?php
isset($_GET['type']) ? $type = $_GET['type'] : 'girl';
isset($_GET['val']) ? $val = $_GET['val'] : 'names';
//$type = 'girl';
//$val = 'name';
mysql_connect('localhost', 'root', '');
mysql_select_db('names');
mysql_set_charset('utf8');
$id=intval($_GET['id']);
$tablename=$type . $val;
header('Content-type: text/html; charset=utf-8');
require '../../../Library/NCL.NameCase.ua.php';
$nc = new NCLNameCaseUa();
$all = mysql_query("SELECT `name`,`id` FROM {$tablename} WHERE id={$id}");
$t='';
$row = mysql_fetch_array($all);
$method = 'qFirstName';
if($val=='father')
{
    $method = 'qFatherName';
}
if($val=='second')
{
    $method = 'qSecondName';
}
$res = implode('#', $nc->$method($row['name'], null, ($type=='girl' ? 2 : 1)));
mysql_query("UPDATE {$tablename} SET nameCase='{$res}' WHERE id={$id}");
?>
