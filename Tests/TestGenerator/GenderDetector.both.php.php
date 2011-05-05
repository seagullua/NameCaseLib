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
        
        //$this->resultArr[]=file('Names/boy_full_result.txt');
        //$this->resultArr[]=file('Names/girl_full_result.txt');
    }
    
    public function generate($fname)
    {
        $this->maintemplate = file_get_contents('Template/NCLNameCaseRuTest.main');
        $this->testtemplate = file_get_contents('Template/GenderGen'.$fname.'.test');
        $this->resultArrB=file('Names/boy_SF.txt');
        $this->resultArrG=file('Names/girl_SF.txt');
        $this->count=0;
        $this->gender=1;
        //foreach ($this->resultArr as $key=>$value)
        //{
            //$this->gender=$key+1;
            foreach ($this->resultArrB as $id=>$name)
            {
                $t=explode(' ', trim($name));
                $this->generateTest(trim($t[0]),trim($t[1]));
            }
        $this->gender=2;
        //foreach ($this->resultArr as $key=>$value)
        //{
            //$this->gender=$key+1;
            foreach ($this->resultArrG as $id=>$name)
            {
                $t=explode(' ', trim($name));
                $this->generateTest(trim($t[0]),trim($t[1]));
            }
        //}
        $res=str_replace('{% tests %}', $this->tests, $this->maintemplate);
        $res=str_replace('{% name %}', $fname, $res);
        file_put_contents('../Library/GenderDetect'.$fname.'.php',$res);
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
