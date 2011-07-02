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


    public function testFatherWoman0()
    {
        $this->object->setFatherName('Василівна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Василівна,Василівни,Василівні,Василівну,Василівною,Василівні,Василівно'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman1()
    {
        $this->object->setFatherName('Антонівна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антонівна,Антонівни,Антонівні,Антонівну,Антонівною,Антонівні,Антонівно'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman2()
    {
        $this->object->setFatherName('Яківна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яківна,Яківни,Яківні,Яківну,Яківною,Яківні,Яківно'), $this->object->getFatherNameCase());
    }

}