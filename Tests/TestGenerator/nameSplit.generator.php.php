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
        $this->testtemplate = file_get_contents('Template/NameSplit.test');
        $this->resultArrB=file('NamesAll/boy'.$fname.'.txt');
        $this->resultArrG=file('NamesAll/girl'.$fname.'.txt');
        $this->count=0;
        if ($fname=='name')
            $this->gender='N';
        elseif($fname=='sirname')
            $this->gender='S';
        else
        {
            $this->gender='F';
        }
        //foreach ($this->resultArr as $key=>$value)
        //{
            //$this->gender=$key+1;
            foreach ($this->resultArrB as $id=>$name)
            {
                $this->generateTest(trim($name));
            }
        //foreach ($this->resultArr as $key=>$value)
        //{
            //$this->gender=$key+1;
            foreach ($this->resultArrG as $id=>$name)
            {
                $this->generateTest(trim($name));
            }
        //}
        $res=str_replace('{% tests %}', $this->tests, $this->maintemplate);
        $res=str_replace('{% name %}', $fname, $res);
        file_put_contents('../Library/NameSplit'.$fname.'.php',$res);
    }
    
    private function generateTest($name)
    {
        $tpl=$this->testtemplate;
        $tpl=str_replace('{% id %}', $this->count, $tpl);
        $tpl=str_replace('{% name %}', $name, $tpl);
        $tpl=str_replace('{% gender %}', $this->gender, $tpl);

        $this->tests.=$tpl;
        $this->count++;
    }
    
    
}


$p= new TestGenerator;
$p->generate('name');
$p= new TestGenerator;
$p->generate('sirname');
$p= new TestGenerator;
$p->generate('father');
?>
