<?php
mysql_connect('localhost', 'root');
mysql_select_db('names');
mysql_set_charset('utf8');

function importFile($file, $into)
{
    $names = file($file);
    foreach($names as $name)
    {
        mysql_query("INSERT INTO {$into} VALUES ('".trim($name)."');");
    }
}

importFile('boyname.txt', 'rufirst');
importFile('girlname.txt', 'rufirst');
importFile('girlsirname.txt', 'rusecond');
importFile('boysirname.txt', 'rusecond');

?>
