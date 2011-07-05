<?php

require_once dirname(__FILE__) . '/../../Library/NCL.NameCase.ru.php';

class NCLNameCaseRuTest extends PHPUnit_Framework_TestCase
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
        $this->object = new NCLNameCaseRu;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    public function test1()
    {
        $this->object->setFirstName('Николай');
        $this->object->setGender(NCLNameCaseRu::$MAN);
        $this->assertEquals('Николаем', $this->object->getFirstNameCase(NCLNameCaseRu::$TVORITELN));
    }

    public function test2()
    {
        $this->object->setSecondName('Касюк');
        $this->object->setGender(1);
        $this->assertEquals('Касюка', $this->object->getSecondNameCase(1));
    }

    public function test3()
    {
        $this->object->setFatherName('Николаевич');
        $this->assertEquals('Николаевичу', $this->object->getFatherNameCase(NCLNameCaseRu::$DATELN));
    }

    public function test4()
    {
        $this->object->setName('Николай');
        $this->object->setGender(NCLNameCaseRu::$MAN);
        $this->assertEquals('Николаем', $this->object->getFirstNameCase(NCLNameCaseRu::$TVORITELN));
    }

    public function test5()
    {
        $this->object->setSirname('Касюк');
        $this->object->setGender(1);
        $this->assertEquals('Касюка', $this->object->getSecondNameCase(1));
    }

    public function test6()
    {
        $this->object->setLastName('Касюк');
        $this->object->setGender(1);
        $this->assertEquals('Касюка', $this->object->getSecondNameCase(1));
    }

    public function test7()
    {
        $this->object->setFullName('Гайка', 'Руслана', 'Петровна');
        $this->object->setGender(NCLNameCaseRu::$WOMAN);
        $this->assertEquals('Гайки-Русланы-Петровны', $this->object->getFormatted(NCLNameCaseRu::$RODITLN, "S-N-F"));
    }
    
    public function test8()
    {
        $this->object->setFullName('Гайка', 'Руслана', 'Петровна');
        $this->object->setGender(NCLNameCaseRu::$WOMAN);
        $this->assertEquals('Гайки-Русланы-Петровны', $this->object->getFormatted(NCLNameCaseRu::$RODITLN, "S-N-F"));
    }
    
    public function test9()
    {
        $this->assertEquals(explode(',','Андрей,Андрея,Андрею,Андрея,Андреем,Андрее'), $this->object->qFirstName('Андрей', -3, 1));
    }
    
    public function test10()
    {
        $this->assertEquals(explode(',','Чайка,Чайки,Чайке,Чайку,Чайкой,Чайке'), $this->object->qSecondName('Чайка', 15, 1));
    }
    
    
    
    public function test11()
    {
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->qFatherName('Николаевич', 15, 1));
    }
    
    public function test12()
    {
        $this->assertEquals('на Чайке Андрее Николаевиче красивая рубашка', $this->object->qFullName("Чайка", 'Андрей', 'Николаевич', 1, 5, "на S N F красивая рубашка"));
    }
    
    public function test13()
    {
        $this->assertEquals('комментария', $this->object->qFirstName('комментарий',NCLNameCaseRu::$RODITLN , NCLNameCaseRu::$MAN));
    }
}