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


    public function testFatherMan0()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan2()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan3()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan4()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan5()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan6()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan7()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan8()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan9()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan10()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan11()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan12()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan13()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan14()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan15()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan16()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan17()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan18()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan19()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan20()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan21()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan22()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan23()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan24()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan25()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan26()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan27()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan28()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan29()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan30()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan31()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan32()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan33()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan34()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan35()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan36()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan37()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan38()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan39()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan40()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan41()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan42()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan43()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan44()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan45()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan46()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan47()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan48()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan49()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan50()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan51()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan52()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan53()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan54()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan55()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan56()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan57()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan58()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan59()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan60()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan61()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan62()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan63()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan64()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan65()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan66()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan67()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan68()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan69()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan70()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan71()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan72()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan73()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan74()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan75()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan76()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan77()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan78()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan79()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan80()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan81()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan82()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan83()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan84()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan85()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan86()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan87()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan88()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan89()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan90()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan91()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan92()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan93()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan94()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan95()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan96()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan97()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan98()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan99()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan100()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan101()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan102()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan103()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan104()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan105()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan106()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan107()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan108()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan109()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan110()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan111()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan112()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan113()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan114()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan115()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan116()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan117()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan118()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan119()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan120()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan121()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan122()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan123()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan124()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan125()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan126()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan127()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan128()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan129()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan130()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan131()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan132()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan133()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan134()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan135()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan136()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan137()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan138()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan139()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan140()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan141()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan142()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan143()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan144()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan145()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan146()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan147()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan148()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan149()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan150()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan151()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan152()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan153()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan154()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan155()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan156()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan157()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan158()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan159()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan160()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan161()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan162()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan163()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan164()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan165()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan166()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan167()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan168()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan169()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan170()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan171()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan172()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan173()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan174()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan175()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan176()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan177()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan178()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan179()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan180()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan181()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan182()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan183()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan184()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan185()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan186()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan187()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan188()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan189()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan190()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan191()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan192()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan193()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan194()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan195()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan196()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan197()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan198()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan199()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan200()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan201()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan202()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan203()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan204()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan205()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan206()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan207()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan208()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan209()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan210()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan211()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan212()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan213()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan214()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan215()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan216()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan217()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan218()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan219()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan220()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan221()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan222()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan223()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan224()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan225()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan226()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan227()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan228()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan229()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan230()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan231()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan232()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan233()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan234()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan235()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan236()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan237()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan238()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan239()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan240()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan241()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan242()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan243()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan244()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan245()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan246()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan247()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan248()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan249()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan250()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan251()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan252()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan253()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan254()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan255()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan256()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan257()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan258()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan259()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan260()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan261()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan262()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan263()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan264()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan265()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan266()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan267()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan268()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan269()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan270()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan271()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan272()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan273()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan274()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan275()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan276()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan277()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan278()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan279()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan280()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan281()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan282()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan283()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan284()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan285()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan286()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan287()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan288()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan289()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan290()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan291()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan292()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan293()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan294()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan295()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan296()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan297()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan298()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan299()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan300()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan301()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan302()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan303()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan304()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan305()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan306()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan307()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan308()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan309()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan310()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan311()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan312()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan313()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan314()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan315()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan316()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan317()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan318()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan319()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan320()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan321()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan322()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan323()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan324()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan325()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan326()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan327()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan328()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan329()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan330()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan331()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan332()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan333()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan334()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan335()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan336()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan337()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan338()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan339()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan340()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan341()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan342()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan343()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan344()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan345()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan346()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan347()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan348()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan349()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan350()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan351()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan352()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan353()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan354()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan355()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan356()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan357()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan358()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan359()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan360()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan361()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan362()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan363()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan364()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan365()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan366()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan367()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan368()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan369()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan370()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan371()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan372()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan373()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan374()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan375()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan376()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan377()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan378()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan379()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan380()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan381()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan382()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan383()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan384()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan385()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan386()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan387()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan388()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan389()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan390()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan391()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan392()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan393()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan394()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan395()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan396()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan397()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan398()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan399()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan400()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan401()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan402()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan403()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan404()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan405()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan406()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan407()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan408()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan409()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan410()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan411()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan412()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan413()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan414()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan415()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan416()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan417()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan418()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan419()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan420()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan421()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan422()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan423()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan424()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan425()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan426()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan427()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan428()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan429()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan430()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan431()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan432()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan433()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan434()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan435()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan436()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan437()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan438()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan439()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan440()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan441()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan442()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan443()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan444()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan445()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan446()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan447()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan448()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan449()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan450()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan451()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan452()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan453()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan454()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan455()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan456()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan457()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan458()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan459()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan460()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan461()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan462()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan463()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan464()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan465()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan466()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan467()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan468()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan469()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan470()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan471()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan472()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan473()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan474()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan475()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan476()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan477()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan478()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan479()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan480()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan481()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan482()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan483()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan484()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan485()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan486()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan487()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan488()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan489()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan490()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan491()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan492()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan493()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan494()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan495()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan496()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan497()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan498()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan499()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan500()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan501()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan502()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan503()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan504()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan505()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan506()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan507()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan508()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan509()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan510()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan511()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan512()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan513()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan514()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan515()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan516()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan517()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan518()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan519()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan520()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan521()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan522()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan523()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan524()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan525()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan526()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan527()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan528()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan529()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan530()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan531()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan532()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan533()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan534()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan535()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan536()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan537()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan538()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan539()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan540()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan541()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan542()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan543()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan544()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan545()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan546()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan547()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan548()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan549()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan550()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan551()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan552()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan553()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan554()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan555()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan556()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan557()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan558()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan559()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan560()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan561()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan562()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan563()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan564()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan565()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan566()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan567()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan568()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan569()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan570()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan571()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan572()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan573()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan574()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan575()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan576()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan577()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan578()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan579()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan580()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan581()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan582()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan583()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan584()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan585()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan586()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan587()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan588()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan589()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan590()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan591()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan592()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan593()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan594()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan595()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan596()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan597()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan598()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan599()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan600()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan601()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan602()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan603()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan604()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan605()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan606()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan607()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan608()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan609()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan610()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan611()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan612()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan613()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan614()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan615()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan616()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan617()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan618()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan619()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan620()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan621()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan622()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan623()
    {
        $this->object->setFatherName('Викторович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викторович,Викторовича,Викторовичу,Викторовича,Викторовичем,Викторовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan624()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan625()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan626()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan627()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan628()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan629()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan630()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan631()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan632()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan633()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan634()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan635()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan636()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan637()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan638()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan639()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan640()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan641()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan642()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan643()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan644()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan645()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan646()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan647()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan648()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan649()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan650()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan651()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan652()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan653()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan654()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan655()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan656()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan657()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan658()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan659()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan660()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan661()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan662()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan663()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan664()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan665()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan666()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan667()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan668()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan669()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan670()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan671()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan672()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan673()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan674()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan675()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan676()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan677()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan678()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan679()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan680()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan681()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan682()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan683()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan684()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan685()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan686()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan687()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan688()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan689()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan690()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan691()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan692()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan693()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan694()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan695()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan696()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan697()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan698()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan699()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan700()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan701()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan702()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan703()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan704()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan705()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan706()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan707()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan708()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan709()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan710()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan711()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan712()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan713()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan714()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan715()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan716()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan717()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan718()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan719()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan720()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan721()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan722()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan723()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan724()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan725()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan726()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan727()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan728()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan729()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan730()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan731()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan732()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan733()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan734()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan735()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan736()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan737()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan738()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan739()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan740()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan741()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan742()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan743()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan744()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan745()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan746()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan747()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan748()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan749()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan750()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan751()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan752()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan753()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan754()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan755()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan756()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan757()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan758()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan759()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan760()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan761()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan762()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan763()
    {
        $this->object->setFatherName('Тарасович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасович,Тарасовича,Тарасовичу,Тарасовича,Тарасовичем,Тарасовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan764()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan765()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan766()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan767()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan768()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan769()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan770()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan771()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan772()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan773()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan774()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan775()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan776()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan777()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan778()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan779()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan780()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan781()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan782()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan783()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan784()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan785()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan786()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan787()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan788()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan789()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan790()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan791()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan792()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan793()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan794()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan795()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan796()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan797()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan798()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan799()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan800()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan801()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan802()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan803()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan804()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan805()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan806()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan807()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan808()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan809()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan810()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan811()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan812()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan813()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan814()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan815()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan816()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan817()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan818()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan819()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan820()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan821()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan822()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan823()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan824()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan825()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan826()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan827()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan828()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan829()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan830()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan831()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan832()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan833()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan834()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan835()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan836()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan837()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan838()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan839()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan840()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan841()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan842()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan843()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan844()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan845()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan846()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan847()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan848()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan849()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan850()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan851()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan852()
    {
        $this->object->setFatherName('Игоревич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игоревич,Игоревича,Игоревичу,Игоревича,Игоревичем,Игоревиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan853()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan854()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan855()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan856()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan857()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan858()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan859()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan860()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan861()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan862()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan863()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan864()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan865()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan866()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan867()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan868()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan869()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan870()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan871()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan872()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan873()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan874()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan875()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan876()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan877()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan878()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan879()
    {
        $this->object->setFatherName('Васильевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильевич,Васильевича,Васильевичу,Васильевича,Васильевичем,Васильевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan880()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan881()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan882()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan883()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan884()
    {
        $this->object->setFatherName('Ефимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимович,Ефимовича,Ефимовичу,Ефимовича,Ефимовичем,Ефимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan885()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan886()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan887()
    {
        $this->object->setFatherName('Сергеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергеевич,Сергеевича,Сергеевичу,Сергеевича,Сергеевичем,Сергеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan888()
    {
        $this->object->setFatherName('Валентинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентинович,Валентиновича,Валентиновичу,Валентиновича,Валентиновичем,Валентиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan889()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan890()
    {
        $this->object->setFatherName('Яковлевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлевич,Яковлевича,Яковлевичу,Яковлевича,Яковлевичем,Яковлевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan891()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan892()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan893()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan894()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan895()
    {
        $this->object->setFatherName('Андреевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреевич,Андреевича,Андреевичу,Андреевича,Андреевичем,Андреевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan896()
    {
        $this->object->setFatherName('Феликсович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликсович,Феликсовича,Феликсовичу,Феликсовича,Феликсовичем,Феликсовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan897()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan898()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan899()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan900()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan901()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan902()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan903()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan904()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan905()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan906()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan907()
    {
        $this->object->setFatherName('Владимирович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимирович,Владимировича,Владимировичу,Владимировича,Владимировичем,Владимировиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan908()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan909()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan910()
    {
        $this->object->setFatherName('Федорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорович,Федоровича,Федоровичу,Федоровича,Федоровичем,Федоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan911()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan912()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan913()
    {
        $this->object->setFatherName('Матвеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеевич,Матвеевича,Матвеевичу,Матвеевича,Матвеевичем,Матвеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan914()
    {
        $this->object->setFatherName('Леонидович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонидович,Леонидовича,Леонидовичу,Леонидовича,Леонидовичем,Леонидовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan915()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan916()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan917()
    {
        $this->object->setFatherName('Георгиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгиевич,Георгиевича,Георгиевичу,Георгиевича,Георгиевичем,Георгиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan918()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan919()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan920()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan921()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan922()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan923()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan924()
    {
        $this->object->setFatherName('Константинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константинович,Константиновича,Константиновичу,Константиновича,Константиновичем,Константиновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan925()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan926()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan927()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan928()
    {
        $this->object->setFatherName('Аркадьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадьевич,Аркадьевича,Аркадьевичу,Аркадьевича,Аркадьевичем,Аркадьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan929()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan930()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan931()
    {
        $this->object->setFatherName('Олегович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олегович,Олеговича,Олеговичу,Олеговича,Олеговичем,Олеговиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan932()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan933()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan934()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan935()
    {
        $this->object->setFatherName('Платонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонович,Платоновича,Платоновичу,Платоновича,Платоновичем,Платоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan936()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan937()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan938()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan939()
    {
        $this->object->setFatherName('Романович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романович,Романовича,Романовичу,Романовича,Романовичем,Романовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan940()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan941()
    {
        $this->object->setFatherName('Тимофеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофеевич,Тимофеевича,Тимофеевичу,Тимофеевича,Тимофеевичем,Тимофеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan942()
    {
        $this->object->setFatherName('Николаевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаевич,Николаевича,Николаевичу,Николаевича,Николаевичем,Николаевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan943()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan944()
    {
        $this->object->setFatherName('Ярославочвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярославочвич,Ярославочвича,Ярославочвичу,Ярославочвича,Ярославочвичем,Ярославочвиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan945()
    {
        $this->object->setFatherName('Евгеньевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгеньевич,Евгеньевича,Евгеньевичу,Евгеньевича,Евгеньевичем,Евгеньевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan946()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan947()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan948()
    {
        $this->object->setFatherName('Юрьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьевич,Юрьевича,Юрьевичу,Юрьевича,Юрьевичем,Юрьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan949()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan950()
    {
        $this->object->setFatherName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan951()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan952()
    {
        $this->object->setFatherName('Валерьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьевич,Валерьевича,Валерьевичу,Валерьевича,Валерьевичем,Валерьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan953()
    {
        $this->object->setFatherName('Александрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александрович,Александровича,Александровичу,Александровича,Александровичем,Александровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan954()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan955()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan956()
    {
        $this->object->setFatherName('Павлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлович,Павловича,Павловичу,Павловича,Павловичем,Павловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan957()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan958()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan959()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan960()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan961()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan962()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan963()
    {
        $this->object->setFatherName('Иванович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванович,Ивановича,Ивановичу,Ивановича,Ивановичем,Ивановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan964()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan965()
    {
        $this->object->setFatherName('Станиславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станиславович,Станиславовича,Станиславовичу,Станиславовича,Станиславовичем,Станиславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan966()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan967()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan968()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan969()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan970()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan971()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan972()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan973()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan974()
    {
        $this->object->setFatherName('Генадиевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генадиевич,Генадиевича,Генадиевичу,Генадиевича,Генадиевичем,Генадиевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan975()
    {
        $this->object->setFatherName('Богданович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданович,Богдановича,Богдановичу,Богдановича,Богдановичем,Богдановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan976()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan977()
    {
        $this->object->setFatherName('Семенович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенович,Семеновича,Семеновичу,Семеновича,Семеновичем,Семеновиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan978()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan979()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan980()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan981()
    {
        $this->object->setFatherName('Данилович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилович,Даниловича,Даниловичу,Даниловича,Даниловичем,Даниловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan982()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan983()
    {
        $this->object->setFatherName('Михайлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлович,Михайловича,Михайловичу,Михайловича,Михайловичем,Михайловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan984()
    {
        $this->object->setFatherName('Эдуардович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуардович,Эдуардовича,Эдуардовичу,Эдуардовича,Эдуардовичем,Эдуардовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan985()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan986()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan987()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan988()
    {
        $this->object->setFatherName('Вячеславович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеславович,Вячеславовича,Вячеславовичу,Вячеславовича,Вячеславовичем,Вячеславовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan989()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan990()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan991()
    {
        $this->object->setFatherName('Анатольевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатольевич,Анатольевича,Анатольевичу,Анатольевича,Анатольевичем,Анатольевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan992()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan993()
    {
        $this->object->setFatherName('Григорьевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьевич,Григорьевича,Григорьевичу,Григорьевича,Григорьевичем,Григорьевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan994()
    {
        $this->object->setFatherName('Алексеевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеевич,Алексеевича,Алексеевичу,Алексеевича,Алексеевичем,Алексеевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan995()
    {
        $this->object->setFatherName('Ильич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильич,Ильича,Ильичу,Ильича,Ильичом,Ильиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan996()
    {
        $this->object->setFatherName('Максимович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимович,Максимовича,Максимовичу,Максимовича,Максимовичем,Максимовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan997()
    {
        $this->object->setFatherName('Егорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егорович,Егоровича,Егоровичу,Егоровича,Егоровичем,Егоровиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan998()
    {
        $this->object->setFatherName('Иосифович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосифович,Иосифовича,Иосифовичу,Иосифовича,Иосифовичем,Иосифовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan999()
    {
        $this->object->setFatherName('Степанович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанович,Степановича,Степановичу,Степановича,Степановичем,Степановиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1000()
    {
        $this->object->setFatherName('Дмитриевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриевич,Дмитриевича,Дмитриевичу,Дмитриевича,Дмитриевичем,Дмитриевиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1001()
    {
        $this->object->setFatherName('Борисович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисович,Борисовича,Борисовичу,Борисовича,Борисовичем,Борисовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1002()
    {
        $this->object->setFatherName('Робертович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Робертович,Робертовича,Робертовичу,Робертовича,Робертовичем,Робертовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1003()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1004()
    {
        $this->object->setFatherName('Львович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львович,Львовича,Львовичу,Львовича,Львовичем,Львовиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1005()
    {
        $this->object->setFatherName('Кириллович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириллович,Кирилловича,Кирилловичу,Кирилловича,Кирилловичем,Кирилловиче'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1006()
    {
        $this->object->setFatherName('Филиппович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппович,Филипповича,Филипповичу,Филипповича,Филипповичем,Филипповиче'), $this->object->getFatherNameCase());
    }

}