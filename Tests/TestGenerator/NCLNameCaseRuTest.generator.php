<?php

class TestGenerator
{
    public $maintemplate;
    public $testtemplate;
    
    public $resultArr=array();
    
    private $gender;
    
    private $tests;
    private $count=0;
    
    
    public function __construct()
    {
        
        //$this->resultArr[]=file('Names/boy_full_result.txt');
        //$this->resultArr[]=file('Names/girl_full_result.txt');
    }
    
    public function generate($fname, $gender)
    {
        $this->maintemplate = file_get_contents('Template/NCLNameCaseRuTest.main');
        $this->testtemplate = file_get_contents('Template/NCLNameCaseRuTest'.$fname.$gender.'.test');
        $this->resultArr=file('Names/'.$gender.'_full_result.txt');
        $this->count=0;
        if ($gender=='boy')
        {
            $this->gender=1;
        }
        else
        {
            $this->gender=2;
        }
        //foreach ($this->resultArr as $key=>$value)
        //{
            //$this->gender=$key+1;
            foreach ($this->resultArr as $id=>$name)
            {
                $tmpnames=explode("#",trim(str_replace('ё','е',$name)));
                $firstRes=array();
                $secondRes=array();
                $fatherRes=array();
                $c=count($tmpnames);
                for ($i=0;$i<$c; $i++)
                {
                    $cur=explode(" ",trim($tmpnames[$i]));
                    $firstRes[]=trim($cur[1]);
                    $secondRes[]=trim($cur[0]);
                    $fatherRes[]=trim($cur[2]);
                }
                $this->generateTest($firstRes, $secondRes, $fatherRes);
            }
        //}
        $res=str_replace('{% tests %}', $this->tests, $this->maintemplate);
        $res=str_replace('{% name %}', $fname, $res);
        file_put_contents('../Library/NCLNameCaseRuTest'.$fname.$gender.'.php',$res);
    }
    
    private function generateTest($firstRes, $secondRes, $fatherRes)
    {
        $tpl=$this->testtemplate;
        $tpl=str_replace('{% id %}', $this->count, $tpl);
        $tpl=str_replace('{% second %}', $secondRes[0], $tpl);
        $tpl=str_replace('{% first %}', $firstRes[0], $tpl);
        $tpl=str_replace('{% father %}', $fatherRes[0], $tpl);
        $tpl=str_replace('{% gender %}', $this->gender, $tpl);
        $tpl=str_replace('{% firstOK %}', implode(',',$firstRes), $tpl);
        $tpl=str_replace('{% secondOK %}', implode(',',$secondRes), $tpl);
        $tpl=str_replace('{% fatherOK %}', implode(',',$fatherRes), $tpl);
        $this->tests.=$tpl;
        $this->count++;
    }
    
    
}


$p= new TestGenerator;
$p->generate('Names', 'boy');
$p= new TestGenerator;
$p->generate('Names', 'girl');
$p= new TestGenerator;
$p->generate('Sirnames', 'girl');
$p= new TestGenerator;
$p->generate('Sirnames', 'boy');
$p= new TestGenerator;
$p->generate('Father', 'girl');
$p= new TestGenerator;
$p->generate('Father', 'boy');

?>
