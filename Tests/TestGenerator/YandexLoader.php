<?php

set_time_limit(0);

$c =0;
function get_text($name)
{
    global $c;
    $c++;
    echo $c.' '.$name."\n";
    $name = urlencode($name);
    
    $content = file_get_contents("http://export.yandex.ru/inflect.xml?name=".$name);
    $content = str_replace("\n", "", $content);
    preg_match_all("#<inflection case=\\\"[\d]\\\">(.*?)<\/inflection>#ie", $content, $matches);
    foreach ($matches[1] as $key => $value)
    {
        $matches[1][$key] = trim($value);
    }
    return implode("#", $matches[1]);
}

$names = file("Names/girl_full.txt");
$r = fopen("Names/girl_full_result.txt", "w");
foreach ($names as $key => $value)
{
    $nn = get_text($value);
    fwrite($r, $nn . "\n");
}
fclose($r);
?>