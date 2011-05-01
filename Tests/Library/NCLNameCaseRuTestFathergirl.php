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


    public function testFatherWoman0()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman1()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman2()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman3()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman4()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman5()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman6()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman7()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman8()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman9()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman10()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman11()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman12()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman13()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman14()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman15()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman16()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman17()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman18()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman19()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman20()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman21()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman22()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman23()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman24()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman25()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman26()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman27()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman28()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman29()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman30()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman31()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman32()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman33()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman34()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman35()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman36()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman37()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman38()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman39()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman40()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman41()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman42()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman43()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman44()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman45()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman46()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman47()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman48()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman49()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman50()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman51()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman52()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman53()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman54()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman55()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman56()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman57()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman58()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman59()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman60()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman61()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman62()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman63()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman64()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman65()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman66()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman67()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman68()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman69()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman70()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman71()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman72()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman73()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman74()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman75()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman76()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman77()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman78()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman79()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman80()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman81()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman82()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman83()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman84()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman85()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman86()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman87()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman88()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman89()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman90()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman91()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman92()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman93()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman94()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman95()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman96()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman97()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman98()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman99()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman100()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman101()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman102()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman103()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman104()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman105()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman106()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman107()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman108()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman109()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman110()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman111()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman112()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman113()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman114()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman115()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman116()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman117()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman118()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman119()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman120()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman121()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman122()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman123()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman124()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman125()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman126()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman127()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman128()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman129()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman130()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman131()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman132()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman133()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman134()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman135()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman136()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman137()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman138()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman139()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman140()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman141()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman142()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman143()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman144()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman145()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman146()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman147()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman148()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman149()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman150()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman151()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman152()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman153()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman154()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman155()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman156()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman157()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman158()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman159()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman160()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman161()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman162()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman163()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman164()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman165()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman166()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman167()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman168()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman169()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman170()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman171()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman172()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman173()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman174()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman175()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman176()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman177()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman178()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman179()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman180()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman181()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman182()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman183()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman184()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman185()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman186()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman187()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman188()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman189()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman190()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman191()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman192()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman193()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman194()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman195()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman196()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman197()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman198()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman199()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman200()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman201()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman202()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman203()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman204()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman205()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman206()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman207()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman208()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman209()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman210()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman211()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman212()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman213()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman214()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman215()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman216()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman217()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman218()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman219()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman220()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman221()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman222()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman223()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman224()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman225()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman226()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman227()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman228()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman229()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman230()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman231()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman232()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman233()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman234()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman235()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman236()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman237()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman238()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman239()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman240()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman241()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman242()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman243()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman244()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman245()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman246()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman247()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman248()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman249()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman250()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman251()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman252()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman253()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman254()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman255()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman256()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman257()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman258()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman259()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman260()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman261()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman262()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman263()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman264()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman265()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman266()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman267()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman268()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman269()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman270()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman271()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman272()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman273()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman274()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman275()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman276()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman277()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman278()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman279()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman280()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman281()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman282()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman283()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman284()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman285()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman286()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman287()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman288()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman289()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman290()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman291()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman292()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman293()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman294()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman295()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman296()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman297()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman298()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman299()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman300()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman301()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman302()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman303()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman304()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman305()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman306()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman307()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman308()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman309()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman310()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman311()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman312()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman313()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman314()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman315()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman316()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman317()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman318()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman319()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman320()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman321()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman322()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman323()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman324()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman325()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman326()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman327()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman328()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman329()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman330()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman331()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman332()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman333()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman334()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman335()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman336()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman337()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman338()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman339()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman340()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman341()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman342()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman343()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman344()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman345()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman346()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman347()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman348()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman349()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman350()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman351()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman352()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman353()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman354()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman355()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman356()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman357()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman358()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman359()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman360()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman361()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman362()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman363()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman364()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman365()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman366()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman367()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman368()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman369()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman370()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman371()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman372()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman373()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman374()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman375()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman376()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman377()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman378()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman379()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman380()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman381()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman382()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman383()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman384()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman385()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman386()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman387()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman388()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman389()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman390()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman391()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman392()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman393()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman394()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman395()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman396()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman397()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman398()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman399()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman400()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman401()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman402()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman403()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman404()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman405()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman406()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman407()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman408()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman409()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman410()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman411()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman412()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman413()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman414()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman415()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman416()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman417()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman418()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman419()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman420()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman421()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman422()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman423()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman424()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman425()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman426()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman427()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman428()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman429()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman430()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman431()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman432()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman433()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman434()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman435()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman436()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman437()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman438()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman439()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman440()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman441()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman442()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman443()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman444()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman445()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman446()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman447()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman448()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman449()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman450()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman451()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman452()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman453()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman454()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman455()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman456()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman457()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman458()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman459()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman460()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman461()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman462()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman463()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman464()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman465()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman466()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman467()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman468()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman469()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman470()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman471()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman472()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman473()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman474()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman475()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman476()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman477()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman478()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman479()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman480()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman481()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman482()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman483()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman484()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman485()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman486()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman487()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman488()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman489()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman490()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman491()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman492()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman493()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman494()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman495()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman496()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman497()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman498()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman499()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman500()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman501()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman502()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman503()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman504()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman505()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman506()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman507()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman508()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman509()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman510()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman511()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman512()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman513()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman514()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman515()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman516()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman517()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman518()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman519()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman520()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman521()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman522()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman523()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman524()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman525()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman526()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman527()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman528()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman529()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman530()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman531()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman532()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman533()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman534()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman535()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman536()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman537()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman538()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman539()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman540()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman541()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman542()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman543()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman544()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman545()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman546()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman547()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman548()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman549()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman550()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman551()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman552()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman553()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman554()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman555()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman556()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman557()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman558()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman559()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman560()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman561()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman562()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman563()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman564()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman565()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman566()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman567()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman568()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman569()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman570()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman571()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman572()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman573()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman574()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman575()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman576()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman577()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman578()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman579()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman580()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman581()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman582()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman583()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman584()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman585()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman586()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman587()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman588()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman589()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman590()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman591()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman592()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman593()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman594()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman595()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman596()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman597()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman598()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman599()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman600()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman601()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman602()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman603()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman604()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman605()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman606()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman607()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman608()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman609()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman610()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman611()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman612()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman613()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman614()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman615()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman616()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman617()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman618()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman619()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman620()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman621()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman622()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman623()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman624()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman625()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman626()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman627()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman628()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman629()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman630()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman631()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman632()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman633()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman634()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman635()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman636()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman637()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman638()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman639()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman640()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman641()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman642()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman643()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman644()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman645()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman646()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman647()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman648()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman649()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman650()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman651()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman652()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman653()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman654()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman655()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman656()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman657()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman658()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman659()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman660()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman661()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman662()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman663()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman664()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman665()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman666()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman667()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman668()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman669()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman670()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman671()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman672()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman673()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman674()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman675()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman676()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman677()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman678()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman679()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman680()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman681()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman682()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman683()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman684()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman685()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman686()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman687()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman688()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman689()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman690()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman691()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman692()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman693()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman694()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman695()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman696()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman697()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman698()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman699()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman700()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman701()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman702()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman703()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman704()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman705()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman706()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman707()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman708()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman709()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman710()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman711()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman712()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman713()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman714()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman715()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman716()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman717()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman718()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman719()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman720()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman721()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman722()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman723()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman724()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman725()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman726()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman727()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman728()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman729()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman730()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman731()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman732()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman733()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman734()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman735()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman736()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman737()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman738()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman739()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman740()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman741()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman742()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman743()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman744()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman745()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman746()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman747()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman748()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman749()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman750()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman751()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman752()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman753()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman754()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman755()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman756()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman757()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman758()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman759()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman760()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman761()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman762()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman763()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman764()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman765()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman766()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman767()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman768()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman769()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman770()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman771()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman772()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman773()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman774()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman775()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman776()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman777()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman778()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman779()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman780()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman781()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman782()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman783()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman784()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman785()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman786()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman787()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman788()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman789()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman790()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman791()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman792()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman793()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman794()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman795()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman796()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman797()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman798()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman799()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman800()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman801()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman802()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman803()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman804()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman805()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman806()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman807()
    {
        $this->object->setFatherName('Валерьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валерьевна,Валерьевны,Валерьевне,Валерьевну,Валерьевной,Валерьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman808()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman809()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman810()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman811()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman812()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman813()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman814()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman815()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman816()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman817()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman818()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman819()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman820()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman821()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman822()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman823()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman824()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman825()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman826()
    {
        $this->object->setFatherName('Ивановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивановна,Ивановны,Ивановне,Ивановну,Ивановной,Ивановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman827()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman828()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman829()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman830()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman831()
    {
        $this->object->setFatherName('Ефимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимовна,Ефимовны,Ефимовне,Ефимовну,Ефимовной,Ефимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman832()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman833()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman834()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman835()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman836()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman837()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman838()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman839()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman840()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman841()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman842()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman843()
    {
        $this->object->setFatherName('Семеновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеновна,Семеновны,Семеновне,Семеновну,Семеновной,Семеновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman844()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman845()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman846()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman847()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman848()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman849()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman850()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman851()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman852()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman853()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman854()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman855()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman856()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman857()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman858()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman859()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman860()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman861()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman862()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman863()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman864()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman865()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman866()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman867()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman868()
    {
        $this->object->setFatherName('Борисовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисовна,Борисовны,Борисовне,Борисовну,Борисовной,Борисовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman869()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman870()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman871()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman872()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman873()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman874()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman875()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman876()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman877()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman878()
    {
        $this->object->setFatherName('Алексеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеевна,Алексеевны,Алексеевне,Алексеевну,Алексеевной,Алексеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman879()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman880()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman881()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman882()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman883()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman884()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman885()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman886()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman887()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman888()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman889()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman890()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman891()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman892()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman893()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman894()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman895()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman896()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman897()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman898()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman899()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman900()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman901()
    {
        $this->object->setFatherName('Генадиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генадиевна,Генадиевны,Генадиевне,Генадиевну,Генадиевной,Генадиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman902()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman903()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman904()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman905()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman906()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman907()
    {
        $this->object->setFatherName('Александровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александровна,Александровны,Александровне,Александровну,Александровной,Александровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman908()
    {
        $this->object->setFatherName('Яковлевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлевна,Яковлевны,Яковлевне,Яковлевну,Яковлевной,Яковлевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman909()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman910()
    {
        $this->object->setFatherName('Викторовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викторовна,Викторовны,Викторовне,Викторовну,Викторовной,Викторовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman911()
    {
        $this->object->setFatherName('Васильевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильевна,Васильевны,Васильевне,Васильевну,Васильевной,Васильевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman912()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman913()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman914()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman915()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman916()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman917()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman918()
    {
        $this->object->setFatherName('Анатольевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анатольевна,Анатольевны,Анатольевне,Анатольевну,Анатольевной,Анатольевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman919()
    {
        $this->object->setFatherName('Ильинична');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильинична,Ильиничны,Ильиничне,Ильиничну,Ильиничной,Ильиничне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman920()
    {
        $this->object->setFatherName('Леонидовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонидовна,Леонидовны,Леонидовне,Леонидовну,Леонидовной,Леонидовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman921()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman922()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman923()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman924()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman925()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman926()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman927()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman928()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman929()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman930()
    {
        $this->object->setFatherName('Даниловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниловна,Даниловны,Даниловне,Даниловну,Даниловной,Даниловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman931()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman932()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman933()
    {
        $this->object->setFatherName('Степановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степановна,Степановны,Степановне,Степановну,Степановной,Степановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman934()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman935()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman936()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman937()
    {
        $this->object->setFatherName('Андреевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреевна,Андреевны,Андреевне,Андреевну,Андреевной,Андреевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman938()
    {
        $this->object->setFatherName('Тарасовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасовна,Тарасовны,Тарасовне,Тарасовну,Тарасовной,Тарасовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman939()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman940()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman941()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman942()
    {
        $this->object->setFatherName('Павловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павловна,Павловны,Павловне,Павловну,Павловной,Павловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman943()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman944()
    {
        $this->object->setFatherName('Вячеславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вячеславовна,Вячеславовны,Вячеславовне,Вячеславовну,Вячеславовной,Вячеславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman945()
    {
        $this->object->setFatherName('Григорьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьевна,Григорьевны,Григорьевне,Григорьевну,Григорьевной,Григорьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman946()
    {
        $this->object->setFatherName('Эдуардовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эдуардовна,Эдуардовны,Эдуардовне,Эдуардовну,Эдуардовной,Эдуардовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman947()
    {
        $this->object->setFatherName('Петровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петровна,Петровны,Петровне,Петровну,Петровной,Петровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman948()
    {
        $this->object->setFatherName('Игоревна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игоревна,Игоревны,Игоревне,Игоревну,Игоревной,Игоревне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman949()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman950()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman951()
    {
        $this->object->setFatherName('Филипповна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филипповна,Филипповны,Филипповне,Филипповну,Филипповной,Филипповне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman952()
    {
        $this->object->setFatherName('Антоновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоновна,Антоновны,Антоновне,Антоновну,Антоновной,Антоновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman953()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman954()
    {
        $this->object->setFatherName('Егоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егоровна,Егоровны,Егоровне,Егоровну,Егоровной,Егоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman955()
    {
        $this->object->setFatherName('Романовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романовна,Романовны,Романовне,Романовну,Романовной,Романовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman956()
    {
        $this->object->setFatherName('Аркадьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аркадьевна,Аркадьевны,Аркадьевне,Аркадьевну,Аркадьевной,Аркадьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman957()
    {
        $this->object->setFatherName('Владиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владиславовна,Владиславовны,Владиславовне,Владиславовну,Владиславовной,Владиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman958()
    {
        $this->object->setFatherName('Николаевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаевна,Николаевны,Николаевне,Николаевну,Николаевной,Николаевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman959()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman960()
    {
        $this->object->setFatherName('Сергеевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергеевна,Сергеевны,Сергеевне,Сергеевну,Сергеевной,Сергеевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman961()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman962()
    {
        $this->object->setFatherName('Робертовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Робертовна,Робертовны,Робертовне,Робертовну,Робертовной,Робертовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman963()
    {
        $this->object->setFatherName('Михайловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайловна,Михайловны,Михайловне,Михайловну,Михайловной,Михайловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman964()
    {
        $this->object->setFatherName('Феликсовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феликсовна,Феликсовны,Феликсовне,Феликсовну,Феликсовной,Феликсовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman965()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman966()
    {
        $this->object->setFatherName('Владимировна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владимировна,Владимировны,Владимировне,Владимировну,Владимировной,Владимировне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman967()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman968()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman969()
    {
        $this->object->setFatherName('Георгиевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Георгиевна,Георгиевны,Георгиевне,Георгиевну,Георгиевной,Георгиевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman970()
    {
        $this->object->setFatherName('Максимовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимовна,Максимовны,Максимовне,Максимовну,Максимовной,Максимовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman971()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman972()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman973()
    {
        $this->object->setFatherName('Кирилловна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилловна,Кирилловны,Кирилловне,Кирилловну,Кирилловной,Кирилловне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman974()
    {
        $this->object->setFatherName('Станиславовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станиславовна,Станиславовны,Станиславовне,Станиславовну,Станиславовной,Станиславовне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman975()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman976()
    {
        $this->object->setFatherName('Дмитриевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриевна,Дмитриевны,Дмитриевне,Дмитриевну,Дмитриевной,Дмитриевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman977()
    {
        $this->object->setFatherName('Евгеньевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгеньевна,Евгеньевны,Евгеньевне,Евгеньевну,Евгеньевной,Евгеньевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman978()
    {
        $this->object->setFatherName('Олеговна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеговна,Олеговны,Олеговне,Олеговну,Олеговной,Олеговне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman979()
    {
        $this->object->setFatherName('Константиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Константиновна,Константиновны,Константиновне,Константиновну,Константиновной,Константиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman980()
    {
        $this->object->setFatherName('Богдановна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдановна,Богдановны,Богдановне,Богдановну,Богдановной,Богдановне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman981()
    {
        $this->object->setFatherName('Юрьевна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьевна,Юрьевны,Юрьевне,Юрьевну,Юрьевной,Юрьевне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman982()
    {
        $this->object->setFatherName('Валентиновна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентиновна,Валентиновны,Валентиновне,Валентиновну,Валентиновной,Валентиновне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman983()
    {
        $this->object->setFatherName('Федоровна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоровна,Федоровны,Федоровне,Федоровну,Федоровной,Федоровне'), $this->object->getFatherNameCase());
    }
    public function testFatherWoman984()
    {
        $this->object->setFatherName('Львовна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львовна,Львовны,Львовне,Львовну,Львовной,Львовне'), $this->object->getFatherNameCase());
    }

}