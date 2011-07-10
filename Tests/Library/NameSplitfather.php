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


    public function testSplDetect0()
    {
        $this->assertEquals('F-Александрович', trim($this->object->getFullNameFormat('Александрович')).'-Александрович');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('F-Алексеевич', trim($this->object->getFullNameFormat('Алексеевич')).'-Алексеевич');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('F-Анатольевич', trim($this->object->getFullNameFormat('Анатольевич')).'-Анатольевич');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('F-Андреевич', trim($this->object->getFullNameFormat('Андреевич')).'-Андреевич');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('F-Антонович', trim($this->object->getFullNameFormat('Антонович')).'-Антонович');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('F-Аркадьевич', trim($this->object->getFullNameFormat('Аркадьевич')).'-Аркадьевич');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('F-Богданович', trim($this->object->getFullNameFormat('Богданович')).'-Богданович');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('F-Борисович', trim($this->object->getFullNameFormat('Борисович')).'-Борисович');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('F-Валентинович', trim($this->object->getFullNameFormat('Валентинович')).'-Валентинович');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('F-Валерьевич', trim($this->object->getFullNameFormat('Валерьевич')).'-Валерьевич');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('F-Васильевич', trim($this->object->getFullNameFormat('Васильевич')).'-Васильевич');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('F-Викторович', trim($this->object->getFullNameFormat('Викторович')).'-Викторович');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('F-Владимирович', trim($this->object->getFullNameFormat('Владимирович')).'-Владимирович');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('F-Вячеславович', trim($this->object->getFullNameFormat('Вячеславович')).'-Вячеславович');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('F-Генадиевич', trim($this->object->getFullNameFormat('Генадиевич')).'-Генадиевич');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('F-Георгиевич', trim($this->object->getFullNameFormat('Георгиевич')).'-Георгиевич');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('F-Григорьевич', trim($this->object->getFullNameFormat('Григорьевич')).'-Григорьевич');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('F-Данилович', trim($this->object->getFullNameFormat('Данилович')).'-Данилович');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('F-Дмитриевич', trim($this->object->getFullNameFormat('Дмитриевич')).'-Дмитриевич');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('F-Евгеньевич', trim($this->object->getFullNameFormat('Евгеньевич')).'-Евгеньевич');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('F-Егорович', trim($this->object->getFullNameFormat('Егорович')).'-Егорович');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('F-Ефимович', trim($this->object->getFullNameFormat('Ефимович')).'-Ефимович');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('F-Иванович', trim($this->object->getFullNameFormat('Иванович')).'-Иванович');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('F-Игоревич', trim($this->object->getFullNameFormat('Игоревич')).'-Игоревич');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('F-Ильич', trim($this->object->getFullNameFormat('Ильич')).'-Ильич');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('F-Иосифович', trim($this->object->getFullNameFormat('Иосифович')).'-Иосифович');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('F-Кириллович', trim($this->object->getFullNameFormat('Кириллович')).'-Кириллович');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('F-Константинович', trim($this->object->getFullNameFormat('Константинович')).'-Константинович');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('F-Леонидович', trim($this->object->getFullNameFormat('Леонидович')).'-Леонидович');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('F-Львович', trim($this->object->getFullNameFormat('Львович')).'-Львович');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('F-Максимович', trim($this->object->getFullNameFormat('Максимович')).'-Максимович');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('F-Матвеевич', trim($this->object->getFullNameFormat('Матвеевич')).'-Матвеевич');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('F-Михайлович', trim($this->object->getFullNameFormat('Михайлович')).'-Михайлович');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('F-Николаевич', trim($this->object->getFullNameFormat('Николаевич')).'-Николаевич');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('F-Олегович', trim($this->object->getFullNameFormat('Олегович')).'-Олегович');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('F-Павлович', trim($this->object->getFullNameFormat('Павлович')).'-Павлович');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('F-Петрович', trim($this->object->getFullNameFormat('Петрович')).'-Петрович');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('F-Платонович', trim($this->object->getFullNameFormat('Платонович')).'-Платонович');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('F-Робертович', trim($this->object->getFullNameFormat('Робертович')).'-Робертович');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('F-Романович', trim($this->object->getFullNameFormat('Романович')).'-Романович');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('F-Семенович', trim($this->object->getFullNameFormat('Семенович')).'-Семенович');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('F-Сергеевич', trim($this->object->getFullNameFormat('Сергеевич')).'-Сергеевич');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('F-Степанович', trim($this->object->getFullNameFormat('Степанович')).'-Степанович');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('F-Станиславович', trim($this->object->getFullNameFormat('Станиславович')).'-Станиславович');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('F-Тарасович', trim($this->object->getFullNameFormat('Тарасович')).'-Тарасович');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('F-Тимофеевич', trim($this->object->getFullNameFormat('Тимофеевич')).'-Тимофеевич');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('F-Федорович', trim($this->object->getFullNameFormat('Федорович')).'-Федорович');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('F-Феликсович', trim($this->object->getFullNameFormat('Феликсович')).'-Феликсович');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('F-Филиппович', trim($this->object->getFullNameFormat('Филиппович')).'-Филиппович');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('F-Эдуардович', trim($this->object->getFullNameFormat('Эдуардович')).'-Эдуардович');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('F-Юрьевич', trim($this->object->getFullNameFormat('Юрьевич')).'-Юрьевич');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('F-Яковлевич', trim($this->object->getFullNameFormat('Яковлевич')).'-Яковлевич');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('F-Ярославочвич', trim($this->object->getFullNameFormat('Ярославочвич')).'-Ярославочвич');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('F-Александровна', trim($this->object->getFullNameFormat('Александровна')).'-Александровна');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('F-Алексеевна', trim($this->object->getFullNameFormat('Алексеевна')).'-Алексеевна');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('F-Анатольевна', trim($this->object->getFullNameFormat('Анатольевна')).'-Анатольевна');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('F-Андреевна', trim($this->object->getFullNameFormat('Андреевна')).'-Андреевна');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('F-Антоновна', trim($this->object->getFullNameFormat('Антоновна')).'-Антоновна');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('F-Аркадьевна', trim($this->object->getFullNameFormat('Аркадьевна')).'-Аркадьевна');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('F-Богдановна', trim($this->object->getFullNameFormat('Богдановна')).'-Богдановна');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('F-Борисовна', trim($this->object->getFullNameFormat('Борисовна')).'-Борисовна');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('F-Валентиновна', trim($this->object->getFullNameFormat('Валентиновна')).'-Валентиновна');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('F-Валерьевна', trim($this->object->getFullNameFormat('Валерьевна')).'-Валерьевна');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('F-Васильевна', trim($this->object->getFullNameFormat('Васильевна')).'-Васильевна');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('F-Викторовна', trim($this->object->getFullNameFormat('Викторовна')).'-Викторовна');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('F-Владимировна', trim($this->object->getFullNameFormat('Владимировна')).'-Владимировна');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('F-Владиславовна', trim($this->object->getFullNameFormat('Владиславовна')).'-Владиславовна');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('F-Вячеславовна', trim($this->object->getFullNameFormat('Вячеславовна')).'-Вячеславовна');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('F-Генадиевна', trim($this->object->getFullNameFormat('Генадиевна')).'-Генадиевна');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('F-Георгиевна', trim($this->object->getFullNameFormat('Георгиевна')).'-Георгиевна');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('F-Григорьевна', trim($this->object->getFullNameFormat('Григорьевна')).'-Григорьевна');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('F-Даниловна', trim($this->object->getFullNameFormat('Даниловна')).'-Даниловна');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('F-Дмитриевна', trim($this->object->getFullNameFormat('Дмитриевна')).'-Дмитриевна');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('F-Евгеньевна', trim($this->object->getFullNameFormat('Евгеньевна')).'-Евгеньевна');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('F-Егоровна', trim($this->object->getFullNameFormat('Егоровна')).'-Егоровна');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('F-Ефимовна', trim($this->object->getFullNameFormat('Ефимовна')).'-Ефимовна');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('F-Ивановна', trim($this->object->getFullNameFormat('Ивановна')).'-Ивановна');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('F-Игоревна', trim($this->object->getFullNameFormat('Игоревна')).'-Игоревна');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('F-Ильинична', trim($this->object->getFullNameFormat('Ильинична')).'-Ильинична');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('F-Кирилловна', trim($this->object->getFullNameFormat('Кирилловна')).'-Кирилловна');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('F-Константиновна', trim($this->object->getFullNameFormat('Константиновна')).'-Константиновна');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('F-Леонидовна', trim($this->object->getFullNameFormat('Леонидовна')).'-Леонидовна');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('F-Львовна', trim($this->object->getFullNameFormat('Львовна')).'-Львовна');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('F-Максимовна', trim($this->object->getFullNameFormat('Максимовна')).'-Максимовна');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('F-Михайловна', trim($this->object->getFullNameFormat('Михайловна')).'-Михайловна');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('F-Николаевна', trim($this->object->getFullNameFormat('Николаевна')).'-Николаевна');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('F-Олеговна', trim($this->object->getFullNameFormat('Олеговна')).'-Олеговна');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('F-Павловна', trim($this->object->getFullNameFormat('Павловна')).'-Павловна');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('F-Петровна', trim($this->object->getFullNameFormat('Петровна')).'-Петровна');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('F-Робертовна', trim($this->object->getFullNameFormat('Робертовна')).'-Робертовна');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('F-Романовна', trim($this->object->getFullNameFormat('Романовна')).'-Романовна');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('F-Семеновна', trim($this->object->getFullNameFormat('Семеновна')).'-Семеновна');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('F-Сергеевна', trim($this->object->getFullNameFormat('Сергеевна')).'-Сергеевна');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('F-Степановна', trim($this->object->getFullNameFormat('Степановна')).'-Степановна');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('F-Станиславовна', trim($this->object->getFullNameFormat('Станиславовна')).'-Станиславовна');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('F-Тарасовна', trim($this->object->getFullNameFormat('Тарасовна')).'-Тарасовна');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('F-Федоровна', trim($this->object->getFullNameFormat('Федоровна')).'-Федоровна');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('F-Феликсовна', trim($this->object->getFullNameFormat('Феликсовна')).'-Феликсовна');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('F-Филипповна', trim($this->object->getFullNameFormat('Филипповна')).'-Филипповна');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('F-Эдуардовна', trim($this->object->getFullNameFormat('Эдуардовна')).'-Эдуардовна');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('F-Юрьевна', trim($this->object->getFullNameFormat('Юрьевна')).'-Юрьевна');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('F-Яковлевна', trim($this->object->getFullNameFormat('Яковлевна')).'-Яковлевна');
    }

}