<?php

class TestGenerator
{

    public $maintemplate;
    public $testtemplate;
    public $resultArrB = array();
    public $resultArrG = array();
    private $gender;
    private $tests;
    private $count = 0;

    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('names');
        mysql_set_charset('utf8');
    }

    private function getList($gender, $type)
    {
        $res = mysql_query("SELECT * FROM {$gender}{$type}");
        $resultArr = array();
        while($row = mysql_fetch_assoc($res))
        {
            $resultArr[] = $row['name'];
        }
        return $resultArr;
    }

    public function generate($fname)
    {
        $this->maintemplate = file_get_contents('Template/NCLNameCaseUaTest.main');
        $this->testtemplate = file_get_contents('Template/NameSplit.test');

        $this->count = 0;
        if ($fname == 'name')
        {
            $this->gender = 'N';
            $tableName = 'names';
        }
        elseif ($fname == 'sirname')
        {
            $this->gender = 'S';
            $tableName = 'second';
        }
        else
        {
            $this->gender = 'F';
            $tableName = 'father';
        }
        
        $names = array_merge($this->getList('boy', $tableName), $this->getList('girl', $tableName));
        
        
        //foreach ($this->resultArr as $key=>$value)
        //{
        //$this->gender=$key+1;
        foreach ($names as $id => $name)
        {
            $this->generateTest(trim($name));
        }
        //foreach ($this->resultArr as $key=>$value)
        //{
        //$this->gender=$key+1;
//        foreach ($this->resultArrG as $id => $name)
//        {
//            $this->generateTest(trim($name));
//        }
        //}
        $res = str_replace('{% tests %}', $this->tests, $this->maintemplate);
        $res = str_replace('{% name %}', $fname, $res);
        file_put_contents('../Library/NameSplitUA' . $fname . '.php', $res);
    }

    private function generateTest($name)
    {
        $tpl = $this->testtemplate;
        $tpl = str_replace('{% id %}', $this->count, $tpl);
        $tpl = str_replace('{% name %}', $name, $tpl);
        $tpl = str_replace('{% gender %}', $this->gender, $tpl);

        $this->tests.=$tpl;
        $this->count++;
    }

}

$p = new TestGenerator;
$p->generate('name');
$p = new TestGenerator;
$p->generate('sirname');
$p = new TestGenerator;
$p->generate('father');
?>
