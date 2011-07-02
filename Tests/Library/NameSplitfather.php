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
        $this->assertEquals('F-Александрович', $this->object->splitFullName('Александрович').'-Александрович');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('F-Алексеевич', $this->object->splitFullName('Алексеевич').'-Алексеевич');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('F-Анатольевич', $this->object->splitFullName('Анатольевич').'-Анатольевич');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('F-Андреевич', $this->object->splitFullName('Андреевич').'-Андреевич');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('F-Антонович', $this->object->splitFullName('Антонович').'-Антонович');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('F-Аркадьевич', $this->object->splitFullName('Аркадьевич').'-Аркадьевич');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('F-Богданович', $this->object->splitFullName('Богданович').'-Богданович');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('F-Борисович', $this->object->splitFullName('Борисович').'-Борисович');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('F-Валентинович', $this->object->splitFullName('Валентинович').'-Валентинович');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('F-Валерьевич', $this->object->splitFullName('Валерьевич').'-Валерьевич');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('F-Васильевич', $this->object->splitFullName('Васильевич').'-Васильевич');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('F-Викторович', $this->object->splitFullName('Викторович').'-Викторович');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('F-Владимирович', $this->object->splitFullName('Владимирович').'-Владимирович');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('F-Вячеславович', $this->object->splitFullName('Вячеславович').'-Вячеславович');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('F-Генадиевич', $this->object->splitFullName('Генадиевич').'-Генадиевич');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('F-Георгиевич', $this->object->splitFullName('Георгиевич').'-Георгиевич');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('F-Григорьевич', $this->object->splitFullName('Григорьевич').'-Григорьевич');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('F-Данилович', $this->object->splitFullName('Данилович').'-Данилович');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('F-Дмитриевич', $this->object->splitFullName('Дмитриевич').'-Дмитриевич');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('F-Евгеньевич', $this->object->splitFullName('Евгеньевич').'-Евгеньевич');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('F-Егорович', $this->object->splitFullName('Егорович').'-Егорович');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('F-Ефимович', $this->object->splitFullName('Ефимович').'-Ефимович');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('F-Иванович', $this->object->splitFullName('Иванович').'-Иванович');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('F-Игоревич', $this->object->splitFullName('Игоревич').'-Игоревич');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('F-Ильич', $this->object->splitFullName('Ильич').'-Ильич');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('F-Иосифович', $this->object->splitFullName('Иосифович').'-Иосифович');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('F-Кириллович', $this->object->splitFullName('Кириллович').'-Кириллович');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('F-Константинович', $this->object->splitFullName('Константинович').'-Константинович');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('F-Леонидович', $this->object->splitFullName('Леонидович').'-Леонидович');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('F-Львович', $this->object->splitFullName('Львович').'-Львович');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('F-Максимович', $this->object->splitFullName('Максимович').'-Максимович');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('F-Матвеевич', $this->object->splitFullName('Матвеевич').'-Матвеевич');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('F-Михайлович', $this->object->splitFullName('Михайлович').'-Михайлович');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('F-Николаевич', $this->object->splitFullName('Николаевич').'-Николаевич');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('F-Олегович', $this->object->splitFullName('Олегович').'-Олегович');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('F-Павлович', $this->object->splitFullName('Павлович').'-Павлович');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('F-Петрович', $this->object->splitFullName('Петрович').'-Петрович');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('F-Платонович', $this->object->splitFullName('Платонович').'-Платонович');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('F-Робертович', $this->object->splitFullName('Робертович').'-Робертович');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('F-Романович', $this->object->splitFullName('Романович').'-Романович');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('F-Семенович', $this->object->splitFullName('Семенович').'-Семенович');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('F-Сергеевич', $this->object->splitFullName('Сергеевич').'-Сергеевич');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('F-Степанович', $this->object->splitFullName('Степанович').'-Степанович');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('F-Станиславович', $this->object->splitFullName('Станиславович').'-Станиславович');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('F-Тарасович', $this->object->splitFullName('Тарасович').'-Тарасович');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('F-Тимофеевич', $this->object->splitFullName('Тимофеевич').'-Тимофеевич');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('F-Федорович', $this->object->splitFullName('Федорович').'-Федорович');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('F-Феликсович', $this->object->splitFullName('Феликсович').'-Феликсович');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('F-Филиппович', $this->object->splitFullName('Филиппович').'-Филиппович');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('F-Эдуардович', $this->object->splitFullName('Эдуардович').'-Эдуардович');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('F-Юрьевич', $this->object->splitFullName('Юрьевич').'-Юрьевич');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('F-Яковлевич', $this->object->splitFullName('Яковлевич').'-Яковлевич');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('F-Ярославочвич', $this->object->splitFullName('Ярославочвич').'-Ярославочвич');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('F-Александровна', $this->object->splitFullName('Александровна').'-Александровна');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('F-Алексеевна', $this->object->splitFullName('Алексеевна').'-Алексеевна');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('F-Анатольевна', $this->object->splitFullName('Анатольевна').'-Анатольевна');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('F-Андреевна', $this->object->splitFullName('Андреевна').'-Андреевна');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('F-Антоновна', $this->object->splitFullName('Антоновна').'-Антоновна');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('F-Аркадьевна', $this->object->splitFullName('Аркадьевна').'-Аркадьевна');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('F-Богдановна', $this->object->splitFullName('Богдановна').'-Богдановна');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('F-Борисовна', $this->object->splitFullName('Борисовна').'-Борисовна');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('F-Валентиновна', $this->object->splitFullName('Валентиновна').'-Валентиновна');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('F-Валерьевна', $this->object->splitFullName('Валерьевна').'-Валерьевна');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('F-Васильевна', $this->object->splitFullName('Васильевна').'-Васильевна');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('F-Викторовна', $this->object->splitFullName('Викторовна').'-Викторовна');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('F-Владимировна', $this->object->splitFullName('Владимировна').'-Владимировна');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('F-Владиславовна', $this->object->splitFullName('Владиславовна').'-Владиславовна');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('F-Вячеславовна', $this->object->splitFullName('Вячеславовна').'-Вячеславовна');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('F-Генадиевна', $this->object->splitFullName('Генадиевна').'-Генадиевна');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('F-Георгиевна', $this->object->splitFullName('Георгиевна').'-Георгиевна');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('F-Григорьевна', $this->object->splitFullName('Григорьевна').'-Григорьевна');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('F-Даниловна', $this->object->splitFullName('Даниловна').'-Даниловна');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('F-Дмитриевна', $this->object->splitFullName('Дмитриевна').'-Дмитриевна');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('F-Евгеньевна', $this->object->splitFullName('Евгеньевна').'-Евгеньевна');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('F-Егоровна', $this->object->splitFullName('Егоровна').'-Егоровна');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('F-Ефимовна', $this->object->splitFullName('Ефимовна').'-Ефимовна');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('F-Ивановна', $this->object->splitFullName('Ивановна').'-Ивановна');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('F-Игоревна', $this->object->splitFullName('Игоревна').'-Игоревна');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('F-Ильинична', $this->object->splitFullName('Ильинична').'-Ильинична');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('F-Кирилловна', $this->object->splitFullName('Кирилловна').'-Кирилловна');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('F-Константиновна', $this->object->splitFullName('Константиновна').'-Константиновна');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('F-Леонидовна', $this->object->splitFullName('Леонидовна').'-Леонидовна');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('F-Львовна', $this->object->splitFullName('Львовна').'-Львовна');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('F-Максимовна', $this->object->splitFullName('Максимовна').'-Максимовна');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('F-Михайловна', $this->object->splitFullName('Михайловна').'-Михайловна');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('F-Николаевна', $this->object->splitFullName('Николаевна').'-Николаевна');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('F-Олеговна', $this->object->splitFullName('Олеговна').'-Олеговна');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('F-Павловна', $this->object->splitFullName('Павловна').'-Павловна');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('F-Петровна', $this->object->splitFullName('Петровна').'-Петровна');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('F-Робертовна', $this->object->splitFullName('Робертовна').'-Робертовна');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('F-Романовна', $this->object->splitFullName('Романовна').'-Романовна');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('F-Семеновна', $this->object->splitFullName('Семеновна').'-Семеновна');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('F-Сергеевна', $this->object->splitFullName('Сергеевна').'-Сергеевна');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('F-Степановна', $this->object->splitFullName('Степановна').'-Степановна');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('F-Станиславовна', $this->object->splitFullName('Станиславовна').'-Станиславовна');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('F-Тарасовна', $this->object->splitFullName('Тарасовна').'-Тарасовна');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('F-Федоровна', $this->object->splitFullName('Федоровна').'-Федоровна');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('F-Феликсовна', $this->object->splitFullName('Феликсовна').'-Феликсовна');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('F-Филипповна', $this->object->splitFullName('Филипповна').'-Филипповна');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('F-Эдуардовна', $this->object->splitFullName('Эдуардовна').'-Эдуардовна');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('F-Юрьевна', $this->object->splitFullName('Юрьевна').'-Юрьевна');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('F-Яковлевна', $this->object->splitFullName('Яковлевна').'-Яковлевна');
    }

}