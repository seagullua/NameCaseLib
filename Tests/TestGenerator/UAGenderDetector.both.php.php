<?php

class TestGenerator
{
    public $maintemplate;
    public $testtemplate;
    
    public $resultArrB=array();
    public $resultArrG=array();
    
    private $gender;
    
    private $tests;
    private $count=0;
    
    
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('names');
        mysql_set_charset('utf8');
        //$this->resultArr[]=file('Names/boy_full_result.txt');
        //$this->resultArr[]=file('Names/girl_full_result.txt');
    }

    private function make($gender)
    {
        $res = mysql_query("SELECT * FROM {$gender}second");
        $secondArr = array();
        while($row = mysql_fetch_assoc($res))
        {
            $secondArr[] = $row['name'];
        }
        $res = mysql_query("SELECT * FROM {$gender}names");
        $firstArr = array();
        while($row = mysql_fetch_assoc($res))
        {
            $firstArr[] = $row['name'];
        }
        
        $countFirst = count($firstArr);
        $countSecond = count($secondArr);
        
        $max = max(array($countFirst, $countSecond));
        
        $result = array();
        
        for($i=0; $i<$max; $i++)
        {
            $indexFirst = $i % $countFirst;
            $indexSecond = $i % $countSecond;
            
            $this->generateTest($secondArr[$indexSecond],$firstArr[$indexFirst]);
        }
        
        return $result;
    }
    
    public function generate()
    {
        $this->maintemplate = file_get_contents('Template/NCLNameCaseUaTest.main');
        $this->testtemplate = file_get_contents('Template/GenderGenBoth.test');

        $this->count=0;
        

        $this->gender = 1;
        $this->make('boy');
        
        
        $this->gender = 2;
        $this->make('girl');
        
        
        $res=str_replace('{% tests %}', $this->tests, $this->maintemplate);
        file_put_contents('../Library/GenderDetectUABoth.php',$res);
    }
    
    private function generateTest($sname, $fname)
    {
        $tpl=$this->testtemplate;
        $tpl=str_replace('{% id %}', $this->count, $tpl);
        $tpl=str_replace('{% name %}', $fname, $tpl);
        $tpl=str_replace('{% sname %}', $sname, $tpl);
        $tpl=str_replace('{% gender %}', $this->gender, $tpl);

        $this->tests.=$tpl;
        $this->count++;
    }
    
    
}


$p= new TestGenerator;
$p->generate('Both');


?>
