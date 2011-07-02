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
        //$this->resultArr[]=file('Names/boy_full_result.txt');
        //$this->resultArr[]=file('Names/girl_full_result.txt');
    }

    public function generate($fname)
    {
        $this->maintemplate = file_get_contents('Template/NCLNameCaseUaTest.main');
        $this->testtemplate = file_get_contents('Template/GenderGen' . $fname . '.test');
//        $this->resultArrB=file('NamesAll/boy'.$fname.'.txt');
//        $this->resultArrG=file('NamesAll/girl'.$fname.'.txt');
        $this->count = 0;
        
        
        $fnewname = $fname;
        if ($fnewname == 'sirname')
        {
            $fnewname = 'second';
        }
        else
        {
            $fnewname = 'names';
        }
        
        
        $this->gender = 1;
        $this->dbTable = 'boy' . strtolower($fnewname);
        $this->resultArr = mysql_query("SELECT * FROM {$this->dbTable}");
        //foreach ($this->resultArr as $key=>$value)
        //{
        //$this->gender=$key+1;
        while ($row = mysql_fetch_array($this->resultArr))
        {
            $this->generateTest(trim($row['name']));
        }
        
        $this->dbTable = 'girl' . strtolower($fnewname);
        $this->gender = 2;
        $this->resultArr = mysql_query("SELECT * FROM {$this->dbTable}");
        //foreach ($this->resultArr as $key=>$value)
        //{
        //$this->gender=$key+1;
        while ($row = mysql_fetch_array($this->resultArr))
        {
            $this->generateTest(trim($row['name']));
        }
        //}
        $res = str_replace('{% tests %}', $this->tests, $this->maintemplate);
        $res = str_replace('{% name %}', $fname, $res);
        file_put_contents('../Library/GenderDetectUA' . $fname . '.php', $res);
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
?>
