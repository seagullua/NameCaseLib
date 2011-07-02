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


    public function testSplDetect0()
    {
        $this->assertEquals('F-Олександрович', $this->object->splitFullName('Олександрович').'-Олександрович');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('F-Миколайович', $this->object->splitFullName('Миколайович').'-Миколайович');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('F-Кузьмич', $this->object->splitFullName('Кузьмич').'-Кузьмич');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('F-Петрович', $this->object->splitFullName('Петрович').'-Петрович');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('F-Ілліч', $this->object->splitFullName('Ілліч').'-Ілліч');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('F-Василівна', $this->object->splitFullName('Василівна').'-Василівна');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('F-Антонівна', $this->object->splitFullName('Антонівна').'-Антонівна');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('F-Яківна', $this->object->splitFullName('Яківна').'-Яківна');
    }

}