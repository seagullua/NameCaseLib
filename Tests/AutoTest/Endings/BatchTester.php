<?php

/**
 * Description of BathTester
 *
 * @author seagull
 */
require 'EndingsCompiler.php';

class BatchTester
{
    private $compiler;
    private $mode;
    
    public $epsilon;
    
    public function __construct($mode)
    {
        copy('../../../Library/NCL.NameCase.core.php','compiled/NCL.NameCase.core.php');
        $testPHP = file_get_contents('../../Library/NameSplitUAname.php');
        $testPHP = str_replace("require_once dirname(__FILE__) . '/../../Library/NCL.NameCase.ua.php';", "require_once dirname(__FILE__) . '/NCL.NameCase.ua.php';", $testPHP);
        file_put_contents('compiled/Test.php', $testPHP);
        
        $this->compiler = new EndingsCompiler($mode);
        $this->mode = $mode;
        $this->compiler->compile();
        
        $this->epsilon = $this->runTest();
    }
    
    public function testText($ending)
    {
        $this->compiler->compile($ending);
        
        return $this->runTest();
    }
    
    public function runTest()
    {
        exec("phpunit compiled/Test.php", $output);
        
        preg_match_all('#Tests: ([\d]+), Assertions: ([\d]+), Failures: ([\d]+).#is', $output[count($output)-1], $found);
        $tests = (float)$found[2][0];
        $bad = (float)$found[3][0];
        
        //var_dump($tests);
        //var_dump(($bad/$tests));
       // print_r($found);
        //echo $bad." ".$tests;
        return (1-($bad/$tests));
    }
}

$good = array();
$bad = array();
$tester = new BatchTester('endings3');

$epsilon = $tester->epsilon;

$endings = file('endings3.txt');

foreach ($endings as $ending)
{
    $persent = $tester->testText(trim($ending));
    echo trim($ending)." - ".$persent."\n";
    
    if($persent==$epsilon)
    {
        $good[] = $ending;
    }
    else
    {
        $bad[] = $ending;
    }
}

echo "\n\n GOOD";
print_r($good);
echo "\n\n BAD";
print_r($bad);
?>
