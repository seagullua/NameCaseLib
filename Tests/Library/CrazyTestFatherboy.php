<?php

require_once dirname(__FILE__) . '/../../Library/NCL.NameCase.ua.php';


class NCLNameCaseUaTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var NCLNameCaseRu
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new NCLNameCaseUa;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }


    public function testCrazy0()
    { 
        $this->assertEquals(explode(',','Олександрович,Олександровича,Олександровичу,Олександровича,Олександровичем,Олександровичу,Олександровичу'), $this->object->q('Олександрович'));
    }
    public function testCrazy1()
    { 
        $this->assertEquals(explode(',','Миколайович,Миколайовича,Миколайовичу,Миколайовича,Миколайовичем,Миколайовичу,Миколайовичу'), $this->object->q('Миколайович'));
    }
    public function testCrazy2()
    { 
        $this->assertEquals(explode(',','Кузьмич,Кузьмича,Кузьмичу,Кузьмича,Кузьмичем,Кузьмичу,Кузьмичу'), $this->object->q('Кузьмич'));
    }
    public function testCrazy3()
    { 
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровичу,Петровичу'), $this->object->q('Петрович'));
    }
    public function testCrazy4()
    { 
        $this->assertEquals(explode(',','Ілліч,Ілліча,Іллічу,Ілліча,Іллічем,Іллічу,Іллічу'), $this->object->q('Ілліч'));
    }

}