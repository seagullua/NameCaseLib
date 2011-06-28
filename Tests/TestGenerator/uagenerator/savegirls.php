<?php
isset($_GET['type']) ? $type = $_GET['type'] :  $type = 'girl';
isset($_GET['val']) ? $val = $_GET['val'] : $val = 'second';
//$type = 'girl';
//$val = 'name';
mysql_connect('localhost', 'root', '');
mysql_select_db('names');
mysql_set_charset('utf8');
//$id=intval($_GET['id']);
$tablename=$type . $val;
header('Content-type: text/html; charset=utf-8');
require '../../../Library/NCL.NameCase.ua.php';
$nc = new NCLNameCaseUa();
$all = mysql_query("SELECT `name`,`id`,`nameCase` FROM {$tablename}");
$t='';
function in($letter, $string)
    {

        if ($letter and mb_strpos($string, $letter) === false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
while ($row = mysql_fetch_array($all))
{
//    if(implode('#', $nc->qSecondName($row['name'], null, 2))!=$row['nameCase'])
//    {
//        $t.= "<a href='saveme.php?id={$row['id']}&val={$val}&type={$type}'><b>{$row['name']}</b></a><br>";
//    $t.=  "<font style='font-size:12px;'>".
//    implode('<br>', $nc->qSecondName($row['name'], null, 2))
//            ."</font><br>";
//    }
    $LastSymbol = mb_substr($row['name'], -1, 1, 'utf-8');
    $TwoLast = mb_substr($row['name'], -2, 2, 'utf-8');
    if($TwoLast=='ко' or in($LastSymbol, 'бвгджзйклмнпрстфхцчшщіь'))
    {
        $res=implode('#', array($row['name'],$row['name'],$row['name'],$row['name'],$row['name'],$row['name'],$row['name']));
        mysql_query("UPDATE {$tablename} SET nameCase='{$res}' WHERE id={$row['id']}");
    }
}
//$t='';
//$row = mysql_fetch_array($all);
//$method = 'qFirstName';
//if($val=='father')
//{
//    $method = 'qFatherName';
//}
//if($val=='second')
//{
//    $method = 'qSecondName';
//}
//$res = implode('#', $nc->$method($row['name'], null, ($type=='girl' ? 2 : 1)));
//mysql_query("UPDATE {$tablename} SET nameCase='{$res}' WHERE id={$id}");
?>
