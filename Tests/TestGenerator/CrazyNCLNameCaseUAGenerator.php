<?php

class TestGeneratorDB
{

    public $maintemplate;
    public $testtemplate;
    public $resultArr = array();
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

    public function generate($fname, $gender)
    {
        $this->maintemplate = file_get_contents('Template/NCLNameCaseUaTest.main');
        $this->testtemplate = file_get_contents('Template/NCLNameCaseCrazyTest.test');
        //$this->resultArr=file('Names/'.$gender.'_full_result.txt');
        $this->count = 0;
        $fnewname = $fname;
        if ($fnewname == 'Sirnames')
        {
            $fnewname = 'second';
        }
        if ($gender == 'boy')
        {
            $this->gender = 1;
            $this->dbTable = 'boy' . strtolower($fnewname);
        }
        else
        {
            $this->gender = 2;
            $this->dbTable = 'girl' . strtolower($fnewname);
        }
        $this->resultArr = mysql_query("SELECT * FROM {$this->dbTable}");
        //foreach ($this->resultArr as $key=>$value)
        //{
        //$this->gender=$key+1;
        $all = array();
        while ($row = mysql_fetch_assoc($this->resultArr))
        {
            //$tmpnames=explode("#",trim(str_replace('ё','е',$name)));

            $firstRes = array();
            $secondRes = array();
            $fatherRes = array();
            $secondRes = $fatherRes = $firstRes = explode('#', $row['nameCase']);
            if ($row['nameCase'])
            {
                $this->generateTest($firstRes);
            }
        }
        //}
        $res = str_replace('{% tests %}', $this->tests, $this->maintemplate);
        $res = str_replace('{% name %}', $fname, $res);
        file_put_contents('../Library/CrazyTest' . $fname . $gender . '.php', $res);
    }

    private function generateTest($firstRes)
    {
        $tpl = $this->testtemplate;
        $tpl = str_replace('{% id %}', $this->count, $tpl);

        $tpl = str_replace('{% name %}', $firstRes[0], $tpl);
        $tpl = str_replace('{% OK %}', implode(',', $firstRes), $tpl);

        $this->tests.=$tpl;
        $this->count++;
    }

}

$p = new TestGeneratorDB;
$p->generate('Names', 'boy');
$p = new TestGeneratorDB;
$p->generate('Names', 'girl');

$p = new TestGeneratorDB;
$p->generate('Father', 'boy');
$p = new TestGeneratorDB;
$p->generate('Father', 'girl');

$p = new TestGeneratorDB;
$p->generate('Sirnames', 'boy');
$p = new TestGeneratorDB;
$p->generate('Sirnames', 'girl');
?>