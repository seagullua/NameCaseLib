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

    public function __construct($mode, $direction)
    {
        copy('../../../Library/NCL.NameCase.core.php', 'compiled/NCL.NameCase.core.php');
        $testPHP = file_get_contents('../../Library/NameSplitUA' . $direction . '.php');
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

        preg_match_all('#Tests: ([\d]+), Assertions: ([\d]+), Failures: ([\d]+).#is', $output[count($output) - 1], $found);
        $tests = (float) $found[2][0];
        $bad = (float) $found[3][0];

        return (1 - ($bad / $tests));
    }

}

$direction = "sirname"; //sirname

for ($num = 2; $num <= 4; $num++)
{
    $good = array();
    $bad = array();
    $mode = 'endings_'.$direction . $num;
    echo "\n===========\n{$mode}\n===========\n";
    $tester = new BatchTester($mode, $direction);

    $epsilon = $tester->epsilon;

    $endings = file($mode . '.txt');
    
    
    $old = array();
    foreach ($endings as $ending)
    {
        if (mb_substr(trim($ending), 0, 1, 'utf-8') != '#')
        {
            $persent = $tester->testText(trim($ending));
            echo trim($ending) . " - " . $persent . "\n";

            if ($persent >= $epsilon)
            {
                $good[] = trim($ending);
            }
            else
            {
                $bad[] = trim($ending);
            }
        }
        else
        {
            $old[] =  $ending;
        }
    }
    
    
    $content = implode('', $old);
    if ($good)
    {
        echo "\nGOOD \n";
        echo ", '" . implode("', '", $good) . "'";
    }
    if ($bad)
    {
        echo "\nBAD \n";
        echo implode(" ", $bad);
        $content .= '#'.implode("\n#", $bad);
    }
    //file_put_contens($mode . '.txt', '#'.implode("\n#", $bad));
    file_put_contents($mode . '.txt', $content);
}
echo "\n\n";
?>
