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


    public function testWomanSirname0()
    {
        $this->object->setSecondName('Абакумова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Абакумова,Абакумовой,Абакумовой,Абакумову,Абакумовой,Абакумовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname1()
    {
        $this->object->setSecondName('Абдулова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Абдулова,Абдуловой,Абдуловой,Абдулову,Абдуловой,Абдуловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname2()
    {
        $this->object->setSecondName('Абрамова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Абрамова,Абрамовой,Абрамовой,Абрамову,Абрамовой,Абрамовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname3()
    {
        $this->object->setSecondName('Авдеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдеева,Авдеевой,Авдеевой,Авдееву,Авдеевой,Авдеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname4()
    {
        $this->object->setSecondName('Аверина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аверина,Авериной,Авериной,Аверину,Авериной,Авериной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname5()
    {
        $this->object->setSecondName('Аверьянова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аверьянова,Аверьяновой,Аверьяновой,Аверьянову,Аверьяновой,Аверьяновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname6()
    {
        $this->object->setSecondName('Агапова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агапова,Агаповой,Агаповой,Агапову,Агаповой,Агаповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname7()
    {
        $this->object->setSecondName('Агафонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агафонова,Агафоновой,Агафоновой,Агафонову,Агафоновой,Агафоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname8()
    {
        $this->object->setSecondName('Агейкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агейкина,Агейкиной,Агейкиной,Агейкину,Агейкиной,Агейкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname9()
    {
        $this->object->setSecondName('Ажищенкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ажищенкова,Ажищенковой,Ажищенковой,Ажищенкову,Ажищенковой,Ажищенковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname10()
    {
        $this->object->setSecondName('Аксакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аксакова,Аксаковой,Аксаковой,Аксакову,Аксаковой,Аксаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname11()
    {
        $this->object->setSecondName('Аксенова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аксенова,Аксеновой,Аксеновой,Аксенову,Аксеновой,Аксеновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname12()
    {
        $this->object->setSecondName('Аленина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аленина,Алениной,Алениной,Аленину,Алениной,Алениной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname13()
    {
        $this->object->setSecondName('Алиева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алиева,Алиевой,Алиевой,Алиеву,Алиевой,Алиевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname14()
    {
        $this->object->setSecondName('Амалиева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Амалиева,Амалиевой,Амалиевой,Амалиеву,Амалиевой,Амалиевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname15()
    {
        $this->object->setSecondName('Амелина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Амелина,Амелиной,Амелиной,Амелину,Амелиной,Амелиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname16()
    {
        $this->object->setSecondName('Аминаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аминаева,Аминаевой,Аминаевой,Аминаеву,Аминаевой,Аминаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname17()
    {
        $this->object->setSecondName('Александрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александрова,Александровой,Александровой,Александрову,Александровой,Александровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname18()
    {
        $this->object->setSecondName('Алексеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексеева,Алексеевой,Алексеевой,Алексееву,Алексеевой,Алексеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname19()
    {
        $this->object->setSecondName('Алехина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алехина,Алехиной,Алехиной,Алехину,Алехиной,Алехиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname20()
    {
        $this->object->setSecondName('Аллилуева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аллилуева,Аллилуевой,Аллилуевой,Аллилуеву,Аллилуевой,Аллилуевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname21()
    {
        $this->object->setSecondName('Андреева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреева,Андреевой,Андреевой,Андрееву,Андреевой,Андреевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname22()
    {
        $this->object->setSecondName('Андреюшкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреюшкина,Андреюшкиной,Андреюшкиной,Андреюшкину,Андреюшкиной,Андреюшкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname23()
    {
        $this->object->setSecondName('Андроникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андроникова,Андрониковой,Андрониковой,Андроникову,Андрониковой,Андрониковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname24()
    {
        $this->object->setSecondName('Андропова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андропова,Андроповой,Андроповой,Андропову,Андроповой,Андроповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname25()
    {
        $this->object->setSecondName('Аниканова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аниканова,Аникановой,Аникановой,Аниканову,Аникановой,Аникановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname26()
    {
        $this->object->setSecondName('Анисимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисимова,Анисимовой,Анисимовой,Анисимову,Анисимовой,Анисимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname27()
    {
        $this->object->setSecondName('Анишина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анишина,Анишиной,Анишиной,Анишину,Анишиной,Анишиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname28()
    {
        $this->object->setSecondName('Анникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анникова,Анниковой,Анниковой,Анникову,Анниковой,Анниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname29()
    {
        $this->object->setSecondName('Анохина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анохина,Анохиной,Анохиной,Анохину,Анохиной,Анохиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname30()
    {
        $this->object->setSecondName('Аношкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аношкина,Аношкиной,Аношкиной,Аношкину,Аношкиной,Аношкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname31()
    {
        $this->object->setSecondName('Антипова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антипова,Антиповой,Антиповой,Антипову,Антиповой,Антиповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname32()
    {
        $this->object->setSecondName('Антонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антонова,Антоновой,Антоновой,Антонову,Антоновой,Антоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname33()
    {
        $this->object->setSecondName('Артамонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Артамонова,Артамоновой,Артамоновой,Артамонову,Артамоновой,Артамоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname34()
    {
        $this->object->setSecondName('Арефьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Арефьева,Арефьевой,Арефьевой,Арефьеву,Арефьевой,Арефьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname35()
    {
        $this->object->setSecondName('Аристархова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аристархова,Аристарховой,Аристарховой,Аристархову,Аристарховой,Аристарховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname36()
    {
        $this->object->setSecondName('Арсеньева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Арсеньева,Арсеньевой,Арсеньевой,Арсеньеву,Арсеньевой,Арсеньевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname37()
    {
        $this->object->setSecondName('Артемова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Артемова,Артемовой,Артемовой,Артемову,Артемовой,Артемовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname38()
    {
        $this->object->setSecondName('Асланова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асланова,Аслановой,Аслановой,Асланову,Аслановой,Аслановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname39()
    {
        $this->object->setSecondName('Аслаханова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аслаханова,Аслахановой,Аслахановой,Аслаханову,Аслахановой,Аслахановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname40()
    {
        $this->object->setSecondName('Астанкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Астанкова,Астанковой,Астанковой,Астанкову,Астанковой,Астанковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname41()
    {
        $this->object->setSecondName('Астафьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Астафьева,Астафьевой,Астафьевой,Астафьеву,Астафьевой,Астафьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname42()
    {
        $this->object->setSecondName('Астахова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Астахова,Астаховой,Астаховой,Астахову,Астаховой,Астаховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname43()
    {
        $this->object->setSecondName('Афанасьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Афанасьева,Афанасьевой,Афанасьевой,Афанасьеву,Афанасьевой,Афанасьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname44()
    {
        $this->object->setSecondName('Афонина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Афонина,Афониной,Афониной,Афонину,Афониной,Афониной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname45()
    {
        $this->object->setSecondName('Аспидова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аспидова,Аспидовой,Аспидовой,Аспидову,Аспидовой,Аспидовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname46()
    {
        $this->object->setSecondName('Бабатьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бабатьева,Бабатьевой,Бабатьевой,Бабатьеву,Бабатьевой,Бабатьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname47()
    {
        $this->object->setSecondName('Бабикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бабикова,Бабиковой,Бабиковой,Бабикову,Бабиковой,Бабиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname48()
    {
        $this->object->setSecondName('Бабичева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бабичева,Бабичевой,Бабичевой,Бабичеву,Бабичевой,Бабичевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname49()
    {
        $this->object->setSecondName('Бабкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бабкина,Бабкиной,Бабкиной,Бабкину,Бабкиной,Бабкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname50()
    {
        $this->object->setSecondName('Бабурина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бабурина,Бабуриной,Бабуриной,Бабурину,Бабуриной,Бабуриной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname51()
    {
        $this->object->setSecondName('Багрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Багрова,Багровой,Багровой,Багрову,Багровой,Багровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname52()
    {
        $this->object->setSecondName('Бажанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бажанова,Бажановой,Бажановой,Бажанову,Бажановой,Бажановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname53()
    {
        $this->object->setSecondName('Баженова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баженова,Баженовой,Баженовой,Баженову,Баженовой,Баженовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname54()
    {
        $this->object->setSecondName('Базанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Базанова,Базановой,Базановой,Базанову,Базановой,Базановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname55()
    {
        $this->object->setSecondName('Базарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Базарова,Базаровой,Базаровой,Базарову,Базаровой,Базаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname56()
    {
        $this->object->setSecondName('Балакина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Балакина,Балакиной,Балакиной,Балакину,Балакиной,Балакиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname57()
    {
        $this->object->setSecondName('Балахнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Балахнова,Балахновой,Балахновой,Балахнову,Балахновой,Балахновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname58()
    {
        $this->object->setSecondName('Балашова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Балашова,Балашовой,Балашовой,Балашову,Балашовой,Балашовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname59()
    {
        $this->object->setSecondName('Баранова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баранова,Барановой,Барановой,Баранову,Барановой,Барановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname60()
    {
        $this->object->setSecondName('Барболина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Барболина,Барболиной,Барболиной,Барболину,Барболиной,Барболиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname61()
    {
        $this->object->setSecondName('Баренцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баренцева,Баренцевой,Баренцевой,Баренцеву,Баренцевой,Баренцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname62()
    {
        $this->object->setSecondName('Баринова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баринова,Бариновой,Бариновой,Баринову,Бариновой,Бариновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname63()
    {
        $this->object->setSecondName('Баркова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баркова,Барковой,Барковой,Баркову,Барковой,Барковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname64()
    {
        $this->object->setSecondName('Барсукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Барсукова,Барсуковой,Барсуковой,Барсукову,Барсуковой,Барсуковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname65()
    {
        $this->object->setSecondName('Батрутдинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Батрутдинова,Батрутдиновой,Батрутдиновой,Батрутдинову,Батрутдиновой,Батрутдиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname66()
    {
        $this->object->setSecondName('Безбородова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Безбородова,Безбородовой,Безбородовой,Безбородову,Безбородовой,Безбородовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname67()
    {
        $this->object->setSecondName('Безродная');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Безродная,Безродной,Безродной,Безродную,Безродной,Безродной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname68()
    {
        $this->object->setSecondName('Безрукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Безрукова,Безруковой,Безруковой,Безрукову,Безруковой,Безруковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname69()
    {
        $this->object->setSecondName('Безукладникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Безукладникова,Безукладниковой,Безукладниковой,Безукладникову,Безукладниковой,Безукладниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname70()
    {
        $this->object->setSecondName('Беликова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беликова,Беликовой,Беликовой,Беликову,Беликовой,Беликовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname71()
    {
        $this->object->setSecondName('Белова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Белова,Беловой,Беловой,Белову,Беловой,Беловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname72()
    {
        $this->object->setSecondName('Беломестнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беломестнова,Беломестновой,Беломестновой,Беломестнову,Беломестновой,Беломестновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname73()
    {
        $this->object->setSecondName('Бендлина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бендлина,Бендлиной,Бендлиной,Бендлину,Бендлиной,Бендлиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname74()
    {
        $this->object->setSecondName('Бережной');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бережной,Бережного,Бережному,Бережного,Бережным,Бережном'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname75()
    {
        $this->object->setSecondName('Белоусова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Белоусова,Белоусовой,Белоусовой,Белоусову,Белоусовой,Белоусовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname76()
    {
        $this->object->setSecondName('Бершова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бершова,Бершовой,Бершовой,Бершову,Бершовой,Бершовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname77()
    {
        $this->object->setSecondName('Беспалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беспалова,Беспаловой,Беспаловой,Беспалову,Беспаловой,Беспаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname78()
    {
        $this->object->setSecondName('Бескрестнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бескрестнова,Бескрестновой,Бескрестновой,Бескрестнову,Бескрестновой,Бескрестновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname79()
    {
        $this->object->setSecondName('Бирюкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бирюкова,Бирюковой,Бирюковой,Бирюкову,Бирюковой,Бирюковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname80()
    {
        $this->object->setSecondName('Блаженова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Блаженова,Блаженовой,Блаженовой,Блаженову,Блаженовой,Блаженовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname81()
    {
        $this->object->setSecondName('Блатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Блатова,Блатовой,Блатовой,Блатову,Блатовой,Блатовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname82()
    {
        $this->object->setSecondName('Блинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Блинова,Блиновой,Блиновой,Блинову,Блиновой,Блиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname83()
    {
        $this->object->setSecondName('Блохина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Блохина,Блохиной,Блохиной,Блохину,Блохиной,Блохиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname84()
    {
        $this->object->setSecondName('Боброва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боброва,Бобровой,Бобровой,Боброву,Бобровой,Бобровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname85()
    {
        $this->object->setSecondName('Бобрикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бобрикова,Бобриковой,Бобриковой,Бобрикову,Бобриковой,Бобриковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname86()
    {
        $this->object->setSecondName('Богданова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богданова,Богдановой,Богдановой,Богданову,Богдановой,Богдановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname87()
    {
        $this->object->setSecondName('Боголепова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боголепова,Боголеповой,Боголеповой,Боголепову,Боголеповой,Боголеповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname88()
    {
        $this->object->setSecondName('Боголюбова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боголюбова,Боголюбовой,Боголюбовой,Боголюбову,Боголюбовой,Боголюбовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname89()
    {
        $this->object->setSecondName('Богомазова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богомазова,Богомазовой,Богомазовой,Богомазову,Богомазовой,Богомазовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname90()
    {
        $this->object->setSecondName('Богомолова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богомолова,Богомоловой,Богомоловой,Богомолову,Богомоловой,Богомоловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname91()
    {
        $this->object->setSecondName('Богрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богрова,Богровой,Богровой,Богрову,Богровой,Богровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname92()
    {
        $this->object->setSecondName('Бойкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бойкова,Бойковой,Бойковой,Бойкову,Бойковой,Бойковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname93()
    {
        $this->object->setSecondName('Болотникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Болотникова,Болотниковой,Болотниковой,Болотникову,Болотниковой,Болотниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname94()
    {
        $this->object->setSecondName('Болтоногова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Болтоногова,Болтоноговой,Болтоноговой,Болтоногову,Болтоноговой,Болтоноговой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname95()
    {
        $this->object->setSecondName('Большова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Большова,Большовой,Большовой,Большову,Большовой,Большовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname96()
    {
        $this->object->setSecondName('Бореева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бореева,Бореевой,Бореевой,Борееву,Бореевой,Бореевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname97()
    {
        $this->object->setSecondName('Бортникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бортникова,Бортниковой,Бортниковой,Бортникову,Бортниковой,Бортниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname98()
    {
        $this->object->setSecondName('Борзилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борзилова,Борзиловой,Борзиловой,Борзилову,Борзиловой,Борзиловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname99()
    {
        $this->object->setSecondName('Борцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борцова,Борцовой,Борцовой,Борцову,Борцовой,Борцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname100()
    {
        $this->object->setSecondName('Брагина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Брагина,Брагиной,Брагиной,Брагину,Брагиной,Брагиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname101()
    {
        $this->object->setSecondName('Брежнева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Брежнева,Брежневы,Брежневе,Брежневу,Брежневой,Брежневе'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname102()
    {
        $this->object->setSecondName('Бугакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бугакова,Бугаковой,Бугаковой,Бугакову,Бугаковой,Бугаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname103()
    {
        $this->object->setSecondName('Буданова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Буданова,Будановой,Будановой,Буданову,Будановой,Будановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname104()
    {
        $this->object->setSecondName('Будникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Будникова,Будниковой,Будниковой,Будникову,Будниковой,Будниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname105()
    {
        $this->object->setSecondName('Будылина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Будылина,Будылиной,Будылиной,Будылину,Будылиной,Будылиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname106()
    {
        $this->object->setSecondName('Букина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Букина,Букины,Букине,Букину,Букиной,Букине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname107()
    {
        $this->object->setSecondName('Букирь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Букирь,Букири,Букири,Букирь,Букирью,Букири'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname108()
    {
        $this->object->setSecondName('Буклина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Буклина,Буклиной,Буклиной,Буклину,Буклиной,Буклиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname109()
    {
        $this->object->setSecondName('Булгакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Булгакова,Булгаковой,Булгаковой,Булгакову,Булгаковой,Булгаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname110()
    {
        $this->object->setSecondName('Бунина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бунина,Буниной,Буниной,Бунину,Буниной,Буниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname111()
    {
        $this->object->setSecondName('Буркова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Буркова,Бурковой,Бурковой,Буркову,Бурковой,Бурковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname112()
    {
        $this->object->setSecondName('Бурова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бурова,Буровой,Буровой,Бурову,Буровой,Буровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname113()
    {
        $this->object->setSecondName('Бурцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бурцова,Бурцовой,Бурцовой,Бурцову,Бурцовой,Бурцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname114()
    {
        $this->object->setSecondName('Бурякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бурякова,Буряковой,Буряковой,Бурякову,Буряковой,Буряковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname115()
    {
        $this->object->setSecondName('Бутылина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бутылина,Бутылиной,Бутылиной,Бутылину,Бутылиной,Бутылиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname116()
    {
        $this->object->setSecondName('Былинкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Былинкина,Былинкиной,Былинкиной,Былинкину,Былинкиной,Былинкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname117()
    {
        $this->object->setSecondName('Бычкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бычкова,Бычковой,Бычковой,Бычкову,Бычковой,Бычковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname118()
    {
        $this->object->setSecondName('Вавилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вавилова,Вавиловой,Вавиловой,Вавилову,Вавиловой,Вавиловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname119()
    {
        $this->object->setSecondName('Вагина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вагина,Вагиной,Вагиной,Вагину,Вагиной,Вагиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname120()
    {
        $this->object->setSecondName('Вазова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вазова,Вазовой,Вазовой,Вазову,Вазовой,Вазовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname121()
    {
        $this->object->setSecondName('Валевач');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валевач,Валевач,Валевач,Валевач,Валевач,Валевач'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname122()
    {
        $this->object->setSecondName('Варенникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Варенникова,Варенниковой,Варенниковой,Варенникову,Варенниковой,Варенниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname123()
    {
        $this->object->setSecondName('Васильева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильева,Васильевой,Васильевой,Васильеву,Васильевой,Васильевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname124()
    {
        $this->object->setSecondName('Васина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васина,Васиной,Васиной,Васину,Васиной,Васиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname125()
    {
        $this->object->setSecondName('Васнева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васнева,Васневы,Васневе,Васневу,Васневой,Васневе'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname126()
    {
        $this->object->setSecondName('Васнецова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васнецова,Васнецовой,Васнецовой,Васнецову,Васнецовой,Васнецовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname127()
    {
        $this->object->setSecondName('Вахрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вахрова,Вахровой,Вахровой,Вахрову,Вахровой,Вахровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname128()
    {
        $this->object->setSecondName('Вахрушева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вахрушева,Вахрушевой,Вахрушевой,Вахрушеву,Вахрушевой,Вахрушевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname129()
    {
        $this->object->setSecondName('Венедиктова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Венедиктова,Венедиктовой,Венедиктовой,Венедиктову,Венедиктовой,Венедиктовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname130()
    {
        $this->object->setSecondName('Веденеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Веденеева,Веденеевой,Веденеевой,Веденееву,Веденеевой,Веденеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname131()
    {
        $this->object->setSecondName('Веденина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Веденина,Ведениной,Ведениной,Веденину,Ведениной,Ведениной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname132()
    {
        $this->object->setSecondName('Ведерникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ведерникова,Ведерниковой,Ведерниковой,Ведерникову,Ведерниковой,Ведерниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname133()
    {
        $this->object->setSecondName('Вергунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вергунова,Вергуновой,Вергуновой,Вергунову,Вергуновой,Вергуновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname134()
    {
        $this->object->setSecondName('Верещагина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Верещагина,Верещагиной,Верещагиной,Верещагину,Верещагиной,Верещагиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname135()
    {
        $this->object->setSecondName('Вершинина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вершинина,Вершининой,Вершининой,Вершинину,Вершининой,Вершининой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname136()
    {
        $this->object->setSecondName('Веселова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Веселова,Веселовой,Веселовой,Веселову,Веселовой,Веселовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname137()
    {
        $this->object->setSecondName('Викашева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Викашева,Викашевой,Викашевой,Викашеву,Викашевой,Викашевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname138()
    {
        $this->object->setSecondName('Виноградова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виноградова,Виноградовой,Виноградовой,Виноградову,Виноградовой,Виноградовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname139()
    {
        $this->object->setSecondName('Винокурова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Винокурова,Винокуровой,Винокуровой,Винокурову,Винокуровой,Винокуровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname140()
    {
        $this->object->setSecondName('Витаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Витаева,Витаевой,Витаевой,Витаеву,Витаевой,Витаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname141()
    {
        $this->object->setSecondName('Витвинина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Витвинина,Витвининой,Витвининой,Витвинину,Витвининой,Витвининой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname142()
    {
        $this->object->setSecondName('Вицина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вицина,Вициной,Вициной,Вицину,Вициной,Вициной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname143()
    {
        $this->object->setSecondName('Водоватова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Водоватова,Водоватовой,Водоватовой,Водоватову,Водоватовой,Водоватовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname144()
    {
        $this->object->setSecondName('Воликова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воликова,Воликовой,Воликовой,Воликову,Воликовой,Воликовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname145()
    {
        $this->object->setSecondName('Волкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Волкова,Волковой,Волковой,Волкову,Волковой,Волковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname146()
    {
        $this->object->setSecondName('Вольвакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вольвакова,Вольваковой,Вольваковой,Вольвакову,Вольваковой,Вольваковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname147()
    {
        $this->object->setSecondName('Воробьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воробьева,Воробьевой,Воробьевой,Воробьеву,Воробьевой,Воробьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname148()
    {
        $this->object->setSecondName('Воронина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воронина,Ворониной,Ворониной,Воронину,Ворониной,Ворониной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname149()
    {
        $this->object->setSecondName('Воронова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воронова,Вороновой,Вороновой,Воронову,Вороновой,Вороновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname150()
    {
        $this->object->setSecondName('Воронкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воронкова,Воронковой,Воронковой,Воронкову,Воронковой,Воронковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname151()
    {
        $this->object->setSecondName('Воронцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воронцова,Воронцовой,Воронцовой,Воронцову,Воронцовой,Воронцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname152()
    {
        $this->object->setSecondName('Воскобойникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воскобойникова,Воскобойниковой,Воскобойниковой,Воскобойникову,Воскобойниковой,Воскобойниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname153()
    {
        $this->object->setSecondName('Вотякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вотякова,Вотяковой,Вотяковой,Вотякову,Вотяковой,Вотяковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname154()
    {
        $this->object->setSecondName('Вырыпаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вырыпаева,Вырыпаевой,Вырыпаевой,Вырыпаеву,Вырыпаевой,Вырыпаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname155()
    {
        $this->object->setSecondName('Гаврикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гаврикова,Гавриковой,Гавриковой,Гаврикову,Гавриковой,Гавриковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname156()
    {
        $this->object->setSecondName('Гаврилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гаврилова,Гавриловой,Гавриловой,Гаврилову,Гавриловой,Гавриловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname157()
    {
        $this->object->setSecondName('Гагарина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гагарина,Гагариной,Гагариной,Гагарину,Гагариной,Гагариной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname158()
    {
        $this->object->setSecondName('Гаголина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гаголина,Гаголины,Гаголине,Гаголину,Гаголиной,Гаголине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname159()
    {
        $this->object->setSecondName('Галдина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галдина,Галдиной,Галдиной,Галдину,Галдиной,Галдиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname160()
    {
        $this->object->setSecondName('Галкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галкина,Галкиной,Галкиной,Галкину,Галкиной,Галкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname161()
    {
        $this->object->setSecondName('Галыгина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галыгина,Галыгиной,Галыгиной,Галыгину,Галыгиной,Галыгиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname162()
    {
        $this->object->setSecondName('Гарина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гарина,Гариной,Гариной,Гарину,Гариной,Гариной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname163()
    {
        $this->object->setSecondName('Гачева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гачева,Гачевой,Гачевой,Гачеву,Гачевой,Гачевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname164()
    {
        $this->object->setSecondName('Генкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Генкина,Генкиной,Генкиной,Генкину,Генкиной,Генкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname165()
    {
        $this->object->setSecondName('Герасимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Герасимова,Герасимовой,Герасимовой,Герасимову,Герасимовой,Герасимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname166()
    {
        $this->object->setSecondName('Гибазова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гибазова,Гибазовой,Гибазовой,Гибазову,Гибазовой,Гибазовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname167()
    {
        $this->object->setSecondName('Гилева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гилева,Гилевой,Гилевой,Гилеву,Гилевой,Гилевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname168()
    {
        $this->object->setSecondName('Глазкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глазкова,Глазковой,Глазковой,Глазкову,Глазковой,Глазковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname169()
    {
        $this->object->setSecondName('Голованова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Голованова,Головановой,Головановой,Голованову,Головановой,Головановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname170()
    {
        $this->object->setSecondName('Головаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Головаина,Головаины,Головаине,Головаину,Головаиной,Головаине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname171()
    {
        $this->object->setSecondName('Голодяева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Голодяева,Голодяевой,Голодяевой,Голодяеву,Голодяевой,Голодяевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname172()
    {
        $this->object->setSecondName('Голубева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Голубева,Голубевой,Голубевой,Голубеву,Голубевой,Голубевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname173()
    {
        $this->object->setSecondName('Голубова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Голубова,Голубовой,Голубовой,Голубову,Голубовой,Голубовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname174()
    {
        $this->object->setSecondName('Голубцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Голубцова,Голубцовой,Голубцовой,Голубцову,Голубцовой,Голубцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname175()
    {
        $this->object->setSecondName('Гончарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гончарова,Гончаровой,Гончаровой,Гончарову,Гончаровой,Гончаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname176()
    {
        $this->object->setSecondName('Горбунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горбунова,Горбуновой,Горбуновой,Горбунову,Горбуновой,Горбуновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname177()
    {
        $this->object->setSecondName('Горбункова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горбункова,Горбунковой,Горбунковой,Горбункову,Горбунковой,Горбунковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname178()
    {
        $this->object->setSecondName('Горева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горева,Горевой,Горевой,Гореву,Горевой,Горевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname179()
    {
        $this->object->setSecondName('Горелова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горелова,Гореловой,Гореловой,Горелову,Гореловой,Гореловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname180()
    {
        $this->object->setSecondName('Горемыкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горемыкина,Горемыкиной,Горемыкиной,Горемыкину,Горемыкиной,Горемыкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname181()
    {
        $this->object->setSecondName('Горюнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горюнова,Горюновой,Горюновой,Горюнову,Горюновой,Горюновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname182()
    {
        $this->object->setSecondName('Грачева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Грачева,Грачевой,Грачевой,Грачеву,Грачевой,Грачевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname183()
    {
        $this->object->setSecondName('Графова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Графова,Графовой,Графовой,Графову,Графовой,Графовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname184()
    {
        $this->object->setSecondName('Гретченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гретченко,Гретченко,Гретченко,Гретченко,Гретченко,Гретченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname185()
    {
        $this->object->setSecondName('Гречко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гречко,Гречко,Гречко,Гречко,Гречко,Гречко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname186()
    {
        $this->object->setSecondName('Грешнева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Грешнева,Грешневы,Грешневе,Грешневу,Грешневой,Грешневе'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname187()
    {
        $this->object->setSecondName('Грибова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Грибова,Грибовой,Грибовой,Грибову,Грибовой,Грибовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname188()
    {
        $this->object->setSecondName('Грибоедова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Грибоедова,Грибоедовой,Грибоедовой,Грибоедову,Грибоедовой,Грибоедовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname189()
    {
        $this->object->setSecondName('Григорьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорьева,Григорьевой,Григорьевой,Григорьеву,Григорьевой,Григорьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname190()
    {
        $this->object->setSecondName('Гринаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гринаина,Гринаиной,Гринаиной,Гринаину,Гринаиной,Гринаиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname191()
    {
        $this->object->setSecondName('Гришина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гришина,Гришиной,Гришиной,Гришину,Гришиной,Гришиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname192()
    {
        $this->object->setSecondName('Громова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Громова,Громовой,Громовой,Громову,Громовой,Громовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname193()
    {
        $this->object->setSecondName('Громыко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Громыко,Громыко,Громыко,Громыко,Громыко,Громыко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname194()
    {
        $this->object->setSecondName('Гулина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гулина,Гулиной,Гулиной,Гулину,Гулиной,Гулиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname195()
    {
        $this->object->setSecondName('Гурьянова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гурьянова,Гурьяновой,Гурьяновой,Гурьянову,Гурьяновой,Гурьяновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname196()
    {
        $this->object->setSecondName('Гусарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гусарова,Гусаровой,Гусаровой,Гусарову,Гусаровой,Гусаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname197()
    {
        $this->object->setSecondName('Гусева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гусева,Гусевой,Гусевой,Гусеву,Гусевой,Гусевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname198()
    {
        $this->object->setSecondName('Гунина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гунина,Гуниной,Гуниной,Гунину,Гуниной,Гуниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname199()
    {
        $this->object->setSecondName('Гущина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гущина,Гущиной,Гущиной,Гущину,Гущиной,Гущиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname200()
    {
        $this->object->setSecondName('Головаха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Головаха,Головахи,Головахе,Головаху,Головахой,Головахе'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname201()
    {
        $this->object->setSecondName('Дорофеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дорофеева,Дорофеевой,Дорофеевой,Дорофееву,Дорофеевой,Дорофеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname202()
    {
        $this->object->setSecondName('Давыдкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Давыдкина,Давыдкиной,Давыдкиной,Давыдкину,Давыдкиной,Давыдкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname203()
    {
        $this->object->setSecondName('Данильцина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Данильцина,Данильциной,Данильциной,Данильцину,Данильциной,Данильциной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname204()
    {
        $this->object->setSecondName('Дворникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дворникова,Дворниковой,Дворниковой,Дворникову,Дворниковой,Дворниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname205()
    {
        $this->object->setSecondName('Деменок');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Деменок,Деменок,Деменок,Деменок,Деменок,Деменок'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname206()
    {
        $this->object->setSecondName('Дементьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дементьева,Дементьевой,Дементьевой,Дементьеву,Дементьевой,Дементьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname207()
    {
        $this->object->setSecondName('Демидова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Демидова,Демидовой,Демидовой,Демидову,Демидовой,Демидовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname208()
    {
        $this->object->setSecondName('Деникина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Деникина,Деникиной,Деникиной,Деникину,Деникиной,Деникиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname209()
    {
        $this->object->setSecondName('Дегтина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дегтина,Дегтины,Дегтине,Дегтину,Дегтиной,Дегтине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname210()
    {
        $this->object->setSecondName('Дегтярева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дегтярева,Дегтяревы,Дегтяреве,Дегтяреву,Дегтяревой,Дегтяреве'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname211()
    {
        $this->object->setSecondName('Делова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Делова,Деловой,Деловой,Делову,Деловой,Деловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname212()
    {
        $this->object->setSecondName('Дементьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дементьева,Дементьевой,Дементьевой,Дементьеву,Дементьевой,Дементьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname213()
    {
        $this->object->setSecondName('Демина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Демина,Деминой,Деминой,Демину,Деминой,Деминой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname214()
    {
        $this->object->setSecondName('Державина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Державина,Державины,Державине,Державину,Державиной,Державине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname215()
    {
        $this->object->setSecondName('Дернова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дернова,Дерновой,Дерновой,Дернову,Дерновой,Дерновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname216()
    {
        $this->object->setSecondName('Десяткова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Десяткова,Десятковой,Десятковой,Десяткову,Десятковой,Десятковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname217()
    {
        $this->object->setSecondName('Дмитриева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитриева,Дмитриевой,Дмитриевой,Дмитриеву,Дмитриевой,Дмитриевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname218()
    {
        $this->object->setSecondName('Добронравова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Добронравова,Добронравовой,Добронравовой,Добронравову,Добронравовой,Добронравовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname219()
    {
        $this->object->setSecondName('Добрынина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Добрынина,Добрыниной,Добрыниной,Добрынину,Добрыниной,Добрыниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname220()
    {
        $this->object->setSecondName('Долгорукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Долгорукова,Долгоруковой,Долгоруковой,Долгорукову,Долгоруковой,Долгоруковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname221()
    {
        $this->object->setSecondName('Должикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Должикова,Должиковой,Должиковой,Должикову,Должиковой,Должиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname222()
    {
        $this->object->setSecondName('Домашева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Домашева,Домашевой,Домашевой,Домашеву,Домашевой,Домашевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname223()
    {
        $this->object->setSecondName('Достовалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Достовалова,Достоваловой,Достоваловой,Достовалову,Достоваловой,Достоваловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname224()
    {
        $this->object->setSecondName('Драгомирова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Драгомирова,Драгомировой,Драгомировой,Драгомирову,Драгомировой,Драгомировой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname225()
    {
        $this->object->setSecondName('Дресвянина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дресвянина,Дресвянины,Дресвянине,Дресвянину,Дресвяниной,Дресвянине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname226()
    {
        $this->object->setSecondName('Дремова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дремова,Дремовой,Дремовой,Дремову,Дремовой,Дремовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname227()
    {
        $this->object->setSecondName('Друганина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Друганина,Друганиной,Друганиной,Друганину,Друганиной,Друганиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname228()
    {
        $this->object->setSecondName('Другова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Другова,Друговой,Друговой,Другову,Друговой,Друговой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname229()
    {
        $this->object->setSecondName('Дубинина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дубинина,Дубининой,Дубининой,Дубинину,Дубининой,Дубининой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname230()
    {
        $this->object->setSecondName('Дубова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дубова,Дубовой,Дубовой,Дубову,Дубовой,Дубовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname231()
    {
        $this->object->setSecondName('Дубровская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дубровская,Дубровской,Дубровской,Дубровскую,Дубровской,Дубровской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname232()
    {
        $this->object->setSecondName('Дульцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дульцева,Дульцевой,Дульцевой,Дульцеву,Дульцевой,Дульцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname233()
    {
        $this->object->setSecondName('Думановская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Думановская,Думановской,Думановской,Думановскую,Думановской,Думановской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname234()
    {
        $this->object->setSecondName('Дурова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дурова,Дуровой,Дуровой,Дурову,Дуровой,Дуровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname235()
    {
        $this->object->setSecondName('Дятлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дятлова,Дятловой,Дятловой,Дятлову,Дятловой,Дятловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname236()
    {
        $this->object->setSecondName('Евстигнеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евстигнеева,Евстигнеевой,Евстигнеевой,Евстигнееву,Евстигнеевой,Евстигнеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname237()
    {
        $this->object->setSecondName('Егорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Егорова,Егоровой,Егоровой,Егорову,Егоровой,Егоровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname238()
    {
        $this->object->setSecondName('Едемская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Едемская,Едемской,Едемской,Едемскую,Едемской,Едемской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname239()
    {
        $this->object->setSecondName('Ежова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ежова,Ежовой,Ежовой,Ежову,Ежовой,Ежовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname240()
    {
        $this->object->setSecondName('Елагина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елагина,Елагиной,Елагиной,Елагину,Елагиной,Елагиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname241()
    {
        $this->object->setSecondName('Елизарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елизарова,Елизаровой,Елизаровой,Елизарову,Елизаровой,Елизаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname242()
    {
        $this->object->setSecondName('Елисеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елисеева,Елисеевой,Елисеевой,Елисееву,Елисеевой,Елисеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname243()
    {
        $this->object->setSecondName('Ельцина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ельцина,Ельциной,Ельциной,Ельцину,Ельциной,Ельциной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname244()
    {
        $this->object->setSecondName('Ельцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ельцова,Ельцовой,Ельцовой,Ельцову,Ельцовой,Ельцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname245()
    {
        $this->object->setSecondName('Емельяненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Емельяненко,Емельяненко,Емельяненко,Емельяненко,Емельяненко,Емельяненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname246()
    {
        $this->object->setSecondName('Емельянова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Емельянова,Емельяновой,Емельяновой,Емельянову,Емельяновой,Емельяновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname247()
    {
        $this->object->setSecondName('Енина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Енина,Ениной,Ениной,Енину,Ениной,Ениной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname248()
    {
        $this->object->setSecondName('Ерзова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ерзова,Ерзовой,Ерзовой,Ерзову,Ерзовой,Ерзовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname249()
    {
        $this->object->setSecondName('Ермакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ермакова,Ермаковой,Ермаковой,Ермакову,Ермаковой,Ермаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname250()
    {
        $this->object->setSecondName('Ермилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ермилова,Ермиловой,Ермиловой,Ермилову,Ермиловой,Ермиловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname251()
    {
        $this->object->setSecondName('Еромеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Еромеева,Еромеевой,Еромеевой,Еромееву,Еромеевой,Еромеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname252()
    {
        $this->object->setSecondName('Ерофеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ерофеева,Ерофеевой,Ерофеевой,Ерофееву,Ерофеевой,Ерофеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname253()
    {
        $this->object->setSecondName('Ершова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ершова,Ершовой,Ершовой,Ершову,Ершовой,Ершовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname254()
    {
        $this->object->setSecondName('Есипова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Есипова,Есиповой,Есиповой,Есипову,Есиповой,Есиповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname255()
    {
        $this->object->setSecondName('Ефимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефимова,Ефимовой,Ефимовой,Ефимову,Ефимовой,Ефимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname256()
    {
        $this->object->setSecondName('Ефремова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ефремова,Ефремовой,Ефремовой,Ефремову,Ефремовой,Ефремовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname257()
    {
        $this->object->setSecondName('Емелина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Емелина,Емелиной,Емелиной,Емелину,Емелиной,Емелиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname258()
    {
        $this->object->setSecondName('Ерохина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ерохина,Ерохиной,Ерохиной,Ерохину,Ерохиной,Ерохиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname259()
    {
        $this->object->setSecondName('Еремина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Еремина,Ереминой,Ереминой,Еремину,Ереминой,Ереминой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname260()
    {
        $this->object->setSecondName('Ешеваская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ешеваская,Ешеваской,Ешеваской,Ешеваскую,Ешеваской,Ешеваской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname261()
    {
        $this->object->setSecondName('Жабина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жабина,Жабины,Жабине,Жабину,Жабиной,Жабине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname262()
    {
        $this->object->setSecondName('Жаркова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жаркова,Жарковой,Жарковой,Жаркову,Жарковой,Жарковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname263()
    {
        $this->object->setSecondName('Жарыхина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жарыхина,Жарыхины,Жарыхине,Жарыхину,Жарыхиной,Жарыхине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname264()
    {
        $this->object->setSecondName('Жвикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жвикова,Жвиковой,Жвиковой,Жвикову,Жвиковой,Жвиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname265()
    {
        $this->object->setSecondName('Жданова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жданова,Ждановой,Ждановой,Жданову,Ждановой,Ждановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname266()
    {
        $this->object->setSecondName('Жеглова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жеглова,Жегловой,Жегловой,Жеглову,Жегловой,Жегловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname267()
    {
        $this->object->setSecondName('Железкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Железкина,Железкиной,Железкиной,Железкину,Железкиной,Железкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname268()
    {
        $this->object->setSecondName('Жестакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жестакова,Жестаковой,Жестаковой,Жестакову,Жестаковой,Жестаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname269()
    {
        $this->object->setSecondName('Живенкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Живенкова,Живенковой,Живенковой,Живенкову,Живенковой,Живенковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname270()
    {
        $this->object->setSecondName('Жиглова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жиглова,Жигловой,Жигловой,Жиглову,Жигловой,Жигловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname271()
    {
        $this->object->setSecondName('Жигунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жигунова,Жигуновой,Жигуновой,Жигунову,Жигуновой,Жигуновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname272()
    {
        $this->object->setSecondName('Жидкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жидкова,Жидковой,Жидковой,Жидкову,Жидковой,Жидковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname273()
    {
        $this->object->setSecondName('Жикина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жикина,Жикиной,Жикиной,Жикину,Жикиной,Жикиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname274()
    {
        $this->object->setSecondName('Жилина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жилина,Жилиной,Жилиной,Жилину,Жилиной,Жилиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname275()
    {
        $this->object->setSecondName('Жилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жилова,Жиловой,Жиловой,Жилову,Жиловой,Жиловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname276()
    {
        $this->object->setSecondName('Жолдина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жолдина,Жолдиной,Жолдиной,Жолдину,Жолдиной,Жолдиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname277()
    {
        $this->object->setSecondName('Жукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жукова,Жуковой,Жуковой,Жукову,Жуковой,Жуковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname278()
    {
        $this->object->setSecondName('Жутова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жутова,Жутовой,Жутовой,Жутову,Жутовой,Жутовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname279()
    {
        $this->object->setSecondName('Журова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Журова,Журовой,Журовой,Журову,Журовой,Журовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname280()
    {
        $this->object->setSecondName('Заврагина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Заврагина,Заврагиной,Заврагиной,Заврагину,Заврагиной,Заврагиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname281()
    {
        $this->object->setSecondName('Завражина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Завражина,Завражиной,Завражиной,Завражину,Завражиной,Завражиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname282()
    {
        $this->object->setSecondName('Завражнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Завражнова,Завражновой,Завражновой,Завражнову,Завражновой,Завражновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname283()
    {
        $this->object->setSecondName('Завразина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Завразина,Завразиной,Завразиной,Завразину,Завразиной,Завразиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname284()
    {
        $this->object->setSecondName('Завьялова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Завьялова,Завьяловой,Завьяловой,Завьялову,Завьяловой,Завьяловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname285()
    {
        $this->object->setSecondName('Задорнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Задорнова,Задорновой,Задорновой,Задорнову,Задорновой,Задорновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname286()
    {
        $this->object->setSecondName('Задорожный');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Задорожный,Задорожного,Задорожному,Задорожный,Задорожным,Задорожном'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname287()
    {
        $this->object->setSecondName('Зайцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зайцева,Зайцевой,Зайцевой,Зайцеву,Зайцевой,Зайцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname288()
    {
        $this->object->setSecondName('Закревская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Закревская,Закревской,Закревской,Закревскую,Закревской,Закревской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname289()
    {
        $this->object->setSecondName('Закрятина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Закрятина,Закрятиной,Закрятиной,Закрятину,Закрятиной,Закрятиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname290()
    {
        $this->object->setSecondName('Захарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Захарова,Захаровой,Захаровой,Захарову,Захаровой,Захаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname291()
    {
        $this->object->setSecondName('Захарьина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Захарьина,Захарьиной,Захарьиной,Захарьину,Захарьиной,Захарьиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname292()
    {
        $this->object->setSecondName('Звягина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Звягина,Звягиной,Звягиной,Звягину,Звягиной,Звягиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname293()
    {
        $this->object->setSecondName('Земина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Земина,Земиной,Земиной,Земину,Земиной,Земиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname294()
    {
        $this->object->setSecondName('Зимина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зимина,Зиминой,Зиминой,Зимину,Зиминой,Зиминой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname295()
    {
        $this->object->setSecondName('Золина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Золина,Золиной,Золиной,Золину,Золиной,Золиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname296()
    {
        $this->object->setSecondName('Зонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зонова,Зоновой,Зоновой,Зонову,Зоновой,Зоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname297()
    {
        $this->object->setSecondName('Зубкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зубкова,Зубковой,Зубковой,Зубкову,Зубковой,Зубковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname298()
    {
        $this->object->setSecondName('Зубова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зубова,Зубовой,Зубовой,Зубову,Зубовой,Зубовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname299()
    {
        $this->object->setSecondName('Зуева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зуева,Зуевой,Зуевой,Зуеву,Зуевой,Зуевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname300()
    {
        $this->object->setSecondName('Зуйкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зуйкова,Зуйковой,Зуйковой,Зуйкову,Зуйковой,Зуйковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname301()
    {
        $this->object->setSecondName('Зимнякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зимнякова,Зимняковой,Зимняковой,Зимнякову,Зимняковой,Зимняковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname302()
    {
        $this->object->setSecondName('Зиначенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зиначенко,Зиначенко,Зиначенко,Зиначенко,Зиначенко,Зиначенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname303()
    {
        $this->object->setSecondName('Зыкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зыкина,Зыкиной,Зыкиной,Зыкину,Зыкиной,Зыкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname304()
    {
        $this->object->setSecondName('Зырянова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зырянова,Зыряновой,Зыряновой,Зырянову,Зыряновой,Зыряновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname305()
    {
        $this->object->setSecondName('Зюганова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зюганова,Зюгановой,Зюгановой,Зюганову,Зюгановой,Зюгановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname306()
    {
        $this->object->setSecondName('Зверева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зверева,Зверевой,Зверевой,Звереву,Зверевой,Зверевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname307()
    {
        $this->object->setSecondName('Ивакина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивакина,Ивакиной,Ивакиной,Ивакину,Ивакиной,Ивакиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname308()
    {
        $this->object->setSecondName('Ибрагимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ибрагимова,Ибрагимовой,Ибрагимовой,Ибрагимову,Ибрагимовой,Ибрагимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname309()
    {
        $this->object->setSecondName('Иванова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иванова,Ивановой,Ивановой,Иванову,Ивановой,Ивановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname310()
    {
        $this->object->setSecondName('Иванкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иванкова,Иванковой,Иванковой,Иванкову,Иванковой,Иванковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname311()
    {
        $this->object->setSecondName('Ивашина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивашина,Ивашиной,Ивашиной,Ивашину,Ивашиной,Ивашиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname312()
    {
        $this->object->setSecondName('Ивашова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивашова,Ивашовой,Ивашовой,Ивашову,Ивашовой,Ивашовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname313()
    {
        $this->object->setSecondName('Ивкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ивкина,Ивкиной,Ивкиной,Ивкину,Ивкиной,Ивкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname314()
    {
        $this->object->setSecondName('Иволгина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иволгина,Иволгиной,Иволгиной,Иволгину,Иволгиной,Иволгиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname315()
    {
        $this->object->setSecondName('Игнатьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игнатьева,Игнатьевой,Игнатьевой,Игнатьеву,Игнатьевой,Игнатьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname316()
    {
        $this->object->setSecondName('Игошина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Игошина,Игошиной,Игошиной,Игошину,Игошиной,Игошиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname317()
    {
        $this->object->setSecondName('Измайлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Измайлова,Измайловой,Измайловой,Измайлову,Измайловой,Измайловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname318()
    {
        $this->object->setSecondName('Иканова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иканова,Икановой,Икановой,Иканову,Икановой,Икановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname319()
    {
        $this->object->setSecondName('Икашева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Икашева,Икашевой,Икашевой,Икашеву,Икашевой,Икашевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname320()
    {
        $this->object->setSecondName('Ильина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильина,Ильины,Ильине,Ильину,Ильиной,Ильине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname321()
    {
        $this->object->setSecondName('Илюшина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Илюшина,Илюшиной,Илюшиной,Илюшину,Илюшиной,Илюшиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname322()
    {
        $this->object->setSecondName('Ильюшина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ильюшина,Ильюшиной,Ильюшиной,Ильюшину,Ильюшиной,Ильюшиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname323()
    {
        $this->object->setSecondName('Иноземцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иноземцева,Иноземцевой,Иноземцевой,Иноземцеву,Иноземцевой,Иноземцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname324()
    {
        $this->object->setSecondName('Ипатьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ипатьева,Ипатьевой,Ипатьевой,Ипатьеву,Ипатьевой,Ипатьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname325()
    {
        $this->object->setSecondName('Исаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Исаева,Исаевой,Исаевой,Исаеву,Исаевой,Исаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname326()
    {
        $this->object->setSecondName('Истомина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Истомина,Истоминой,Истоминой,Истомину,Истоминой,Истоминой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname327()
    {
        $this->object->setSecondName('Кабинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кабинова,Кабиновой,Кабиновой,Кабинову,Кабиновой,Кабиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname328()
    {
        $this->object->setSecondName('Каблукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каблукова,Каблуковой,Каблуковой,Каблукову,Каблуковой,Каблуковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname329()
    {
        $this->object->setSecondName('Каверина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каверина,Кавериной,Кавериной,Каверину,Кавериной,Кавериной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname330()
    {
        $this->object->setSecondName('Кадникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кадникова,Кадниковой,Кадниковой,Кадникову,Кадниковой,Кадниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname331()
    {
        $this->object->setSecondName('Кадцына');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кадцына,Кадцыной,Кадцыной,Кадцыну,Кадцыной,Кадцыной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname332()
    {
        $this->object->setSecondName('Казакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Казакова,Казаковой,Казаковой,Казакову,Казаковой,Казаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname333()
    {
        $this->object->setSecondName('Казанцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Казанцева,Казанцевой,Казанцевой,Казанцеву,Казанцевой,Казанцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname334()
    {
        $this->object->setSecondName('Казарезова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Казарезова,Казарезовой,Казарезовой,Казарезову,Казарезовой,Казарезовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname335()
    {
        $this->object->setSecondName('Калашник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Калашник,Калашник,Калашник,Калашник,Калашник,Калашник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname336()
    {
        $this->object->setSecondName('Калганова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Калганова,Калгановой,Калгановой,Калганову,Калгановой,Калгановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname337()
    {
        $this->object->setSecondName('Каменских');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каменских,Каменских,Каменских,Каменских,Каменских,Каменских'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname338()
    {
        $this->object->setSecondName('Камкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Камкина,Камкиной,Камкиной,Камкину,Камкиной,Камкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname339()
    {
        $this->object->setSecondName('Каналина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каналина,Каналиной,Каналиной,Каналину,Каналиной,Каналиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname340()
    {
        $this->object->setSecondName('Кандинская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кандинская,Кандинской,Кандинской,Кандинскую,Кандинской,Кандинской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname341()
    {
        $this->object->setSecondName('Капица');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Капица,Капицы,Капице,Капицу,Капицей,Капице'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname342()
    {
        $this->object->setSecondName('Капралова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Капралова,Капраловой,Капраловой,Капралову,Капраловой,Капраловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname343()
    {
        $this->object->setSecondName('Караваева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Караваева,Караваевой,Караваевой,Караваеву,Караваевой,Караваевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname344()
    {
        $this->object->setSecondName('Караулова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Караулова,Карауловой,Карауловой,Караулову,Карауловой,Карауловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname345()
    {
        $this->object->setSecondName('Карева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карева,Каревой,Каревой,Кареву,Каревой,Каревой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname346()
    {
        $this->object->setSecondName('Каретникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каретникова,Каретниковой,Каретниковой,Каретникову,Каретниковой,Каретниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname347()
    {
        $this->object->setSecondName('Каргина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каргина,Каргиной,Каргиной,Каргину,Каргиной,Каргиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname348()
    {
        $this->object->setSecondName('Карташова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карташова,Карташовой,Карташовой,Карташову,Карташовой,Карташовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname349()
    {
        $this->object->setSecondName('Карчагина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карчагина,Карчагиной,Карчагиной,Карчагину,Карчагиной,Карчагиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname350()
    {
        $this->object->setSecondName('Касатый');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Касатый,Касатого,Касатому,Касатый,Касатым,Касатом'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname351()
    {
        $this->object->setSecondName('Катина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Катина,Катиной,Катиной,Катину,Катиной,Катиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname352()
    {
        $this->object->setSecondName('Качусова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Качусова,Качусовой,Качусовой,Качусову,Качусовой,Качусовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname353()
    {
        $this->object->setSecondName('Кашарина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кашарина,Кашариной,Кашариной,Кашарину,Кашариной,Кашариной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname354()
    {
        $this->object->setSecondName('Каширина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каширина,Кашириной,Кашириной,Каширину,Кашириной,Кашириной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname355()
    {
        $this->object->setSecondName('Кашканова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кашканова,Кашкановой,Кашкановой,Кашканову,Кашкановой,Кашкановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname356()
    {
        $this->object->setSecondName('Кашникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кашникова,Кашниковой,Кашниковой,Кашникову,Кашниковой,Кашниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname357()
    {
        $this->object->setSecondName('Киреева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Киреева,Киреевой,Киреевой,Кирееву,Киреевой,Киреевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname358()
    {
        $this->object->setSecondName('Кирилишена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилишена,Кирилишены,Кирилишене,Кирилишену,Кирилишеной,Кирилишене'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname359()
    {
        $this->object->setSecondName('Кирилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирилова,Кириловой,Кириловой,Кирилову,Кириловой,Кириловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname360()
    {
        $this->object->setSecondName('Кирсанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирсанова,Кирсановой,Кирсановой,Кирсанову,Кирсановой,Кирсановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname361()
    {
        $this->object->setSecondName('Кирьянова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кирьянова,Кирьяновой,Кирьяновой,Кирьянову,Кирьяновой,Кирьяновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname362()
    {
        $this->object->setSecondName('Клепахова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клепахова,Клепаховой,Клепаховой,Клепахову,Клепаховой,Клепаховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname363()
    {
        $this->object->setSecondName('Климова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Климова,Климовой,Климовой,Климову,Климовой,Климовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname364()
    {
        $this->object->setSecondName('Климушина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Климушина,Климушиной,Климушиной,Климушину,Климушиной,Климушиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname365()
    {
        $this->object->setSecondName('Клокова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клокова,Клоковой,Клоковой,Клокову,Клоковой,Клоковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname366()
    {
        $this->object->setSecondName('Князева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Князева,Князевой,Князевой,Князеву,Князевой,Князевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname367()
    {
        $this->object->setSecondName('Ковалевская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ковалевская,Ковалевской,Ковалевской,Ковалевскую,Ковалевской,Ковалевской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname368()
    {
        $this->object->setSecondName('Коварова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коварова,Коваровой,Коваровой,Коварову,Коваровой,Коваровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname369()
    {
        $this->object->setSecondName('Ковашутина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ковашутина,Ковашутиной,Ковашутиной,Ковашутину,Ковашутиной,Ковашутиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname370()
    {
        $this->object->setSecondName('Кожурова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кожурова,Кожуровой,Кожуровой,Кожурову,Кожуровой,Кожуровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname371()
    {
        $this->object->setSecondName('Кожухова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кожухова,Кожуховой,Кожуховой,Кожухову,Кожуховой,Кожуховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname372()
    {
        $this->object->setSecondName('Козакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козакова,Козаковой,Козаковой,Козакову,Козаковой,Козаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname373()
    {
        $this->object->setSecondName('Козарь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козарь,Козарь,Козарь,Козарь,Козарь,Козарь'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname374()
    {
        $this->object->setSecondName('Козлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козлова,Козловой,Козловой,Козлову,Козловой,Козловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname375()
    {
        $this->object->setSecondName('Козловская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козловская,Козловской,Козловской,Козловскую,Козловской,Козловской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname376()
    {
        $this->object->setSecondName('Колесникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Колесникова,Колесниковой,Колесниковой,Колесникову,Колесниковой,Колесниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname377()
    {
        $this->object->setSecondName('Колонтаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Колонтаева,Колонтаевой,Колонтаевой,Колонтаеву,Колонтаевой,Колонтаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname378()
    {
        $this->object->setSecondName('Колосова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Колосова,Колосовой,Колосовой,Колосову,Колосовой,Колосовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname379()
    {
        $this->object->setSecondName('Кольцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кольцова,Кольцовой,Кольцовой,Кольцову,Кольцовой,Кольцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname380()
    {
        $this->object->setSecondName('Комарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Комарова,Комаровой,Комаровой,Комарову,Комаровой,Комаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname381()
    {
        $this->object->setSecondName('Комзина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Комзина,Комзины,Комзине,Комзину,Комзиной,Комзине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname382()
    {
        $this->object->setSecondName('Комолова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Комолова,Комоловой,Комоловой,Комолову,Комоловой,Комоловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname383()
    {
        $this->object->setSecondName('Кондратьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кондратьева,Кондратьевой,Кондратьевой,Кондратьеву,Кондратьевой,Кондратьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname384()
    {
        $this->object->setSecondName('Конева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Конева,Коневой,Коневой,Коневу,Коневой,Коневой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname385()
    {
        $this->object->setSecondName('Конникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Конникова,Конниковой,Конниковой,Конникову,Конниковой,Конниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname386()
    {
        $this->object->setSecondName('Коновалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коновалова,Коноваловой,Коноваловой,Коновалову,Коноваловой,Коноваловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname387()
    {
        $this->object->setSecondName('Коньякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коньякова,Коньяковой,Коньяковой,Коньякову,Коньяковой,Коньяковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname388()
    {
        $this->object->setSecondName('Коняшева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коняшева,Коняшевой,Коняшевой,Коняшеву,Коняшевой,Коняшевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname389()
    {
        $this->object->setSecondName('Копейкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Копейкина,Копейкиной,Копейкиной,Копейкину,Копейкиной,Копейкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname390()
    {
        $this->object->setSecondName('Коренева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коренева,Кореневой,Кореневой,Кореневу,Кореневой,Кореневой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname391()
    {
        $this->object->setSecondName('Коренева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коренева,Кореневой,Кореневой,Кореневу,Кореневой,Кореневой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname392()
    {
        $this->object->setSecondName('Коржакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коржакова,Коржаковой,Коржаковой,Коржакову,Коржаковой,Коржаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname393()
    {
        $this->object->setSecondName('Коржева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коржева,Коржевой,Коржевой,Коржеву,Коржевой,Коржевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname394()
    {
        $this->object->setSecondName('Корнева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корнева,Корневой,Корневой,Корневу,Корневой,Корневой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname395()
    {
        $this->object->setSecondName('Корнилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корнилова,Корниловой,Корниловой,Корнилову,Корниловой,Корниловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname396()
    {
        $this->object->setSecondName('Коровина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коровина,Коровиной,Коровиной,Коровину,Коровиной,Коровиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname397()
    {
        $this->object->setSecondName('Королева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Королева,Королевой,Королевой,Королеву,Королевой,Королевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname398()
    {
        $this->object->setSecondName('Коротаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коротаева,Коротаевой,Коротаевой,Коротаеву,Коротаевой,Коротаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname399()
    {
        $this->object->setSecondName('Корчагина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корчагина,Корчагиной,Корчагиной,Корчагину,Корчагиной,Корчагиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname400()
    {
        $this->object->setSecondName('Косарева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Косарева,Косаревой,Косаревой,Косареву,Косаревой,Косаревой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname401()
    {
        $this->object->setSecondName('Коскова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коскова,Косковой,Косковой,Коскову,Косковой,Косковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname402()
    {
        $this->object->setSecondName('Косомова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Косомова,Косомовой,Косомовой,Косомову,Косомовой,Косомовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname403()
    {
        $this->object->setSecondName('Косорукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Косорукова,Косоруковой,Косоруковой,Косорукову,Косоруковой,Косоруковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname404()
    {
        $this->object->setSecondName('Костина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Костина,Костиной,Костиной,Костину,Костиной,Костиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname405()
    {
        $this->object->setSecondName('Котова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Котова,Котовой,Котовой,Котову,Котовой,Котовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname406()
    {
        $this->object->setSecondName('Костомарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Костомарова,Костомаровой,Костомаровой,Костомарову,Костомаровой,Костомаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname407()
    {
        $this->object->setSecondName('Коченкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коченкова,Коченковой,Коченковой,Коченкову,Коченковой,Коченковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname408()
    {
        $this->object->setSecondName('Кошелева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кошелева,Кошелевой,Кошелевой,Кошелеву,Кошелевой,Кошелевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname409()
    {
        $this->object->setSecondName('Кошечкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кошечкина,Кошечкиной,Кошечкиной,Кошечкину,Кошечкиной,Кошечкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname410()
    {
        $this->object->setSecondName('Кошкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кошкина,Кошкиной,Кошкиной,Кошкину,Кошкиной,Кошкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname411()
    {
        $this->object->setSecondName('Краева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Краева,Краевой,Краевой,Краеву,Краевой,Краевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname412()
    {
        $this->object->setSecondName('Краснова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Краснова,Красновой,Красновой,Краснову,Красновой,Красновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname413()
    {
        $this->object->setSecondName('Красноперова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Красноперова,Красноперовой,Красноперовой,Красноперову,Красноперовой,Красноперовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname414()
    {
        $this->object->setSecondName('Кропанина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кропанина,Кропаниной,Кропаниной,Кропанину,Кропаниной,Кропаниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname415()
    {
        $this->object->setSecondName('Кругликова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кругликова,Кругликовой,Кругликовой,Кругликову,Кругликовой,Кругликовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname416()
    {
        $this->object->setSecondName('Круглова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Круглова,Кругловой,Кругловой,Круглову,Кругловой,Кругловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname417()
    {
        $this->object->setSecondName('Крупина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Крупина,Крупиной,Крупиной,Крупину,Крупиной,Крупиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname418()
    {
        $this->object->setSecondName('Крутина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Крутина,Крутиной,Крутиной,Крутину,Крутиной,Крутиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname419()
    {
        $this->object->setSecondName('Кручинакина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кручинакина,Кручинакиной,Кручинакиной,Кручинакину,Кручинакиной,Кручинакиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname420()
    {
        $this->object->setSecondName('Крылова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Крылова,Крыловой,Крыловой,Крылову,Крыловой,Крыловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname421()
    {
        $this->object->setSecondName('Крысова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Крысова,Крысовой,Крысовой,Крысову,Крысовой,Крысовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname422()
    {
        $this->object->setSecondName('Крюкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Крюкова,Крюковой,Крюковой,Крюкову,Крюковой,Крюковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname423()
    {
        $this->object->setSecondName('Кубланова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кубланова,Кублановой,Кублановой,Кубланову,Кублановой,Кублановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname424()
    {
        $this->object->setSecondName('Кудашова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кудашова,Кудашовой,Кудашовой,Кудашову,Кудашовой,Кудашовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname425()
    {
        $this->object->setSecondName('Кудрина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кудрина,Кудрины,Кудрине,Кудрину,Кудриной,Кудрине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname426()
    {
        $this->object->setSecondName('Кудрявцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кудрявцева,Кудрявцевой,Кудрявцевой,Кудрявцеву,Кудрявцевой,Кудрявцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname427()
    {
        $this->object->setSecondName('Кудряшова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кудряшова,Кудряшовой,Кудряшовой,Кудряшову,Кудряшовой,Кудряшовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname428()
    {
        $this->object->setSecondName('Кузнецова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кузнецова,Кузнецовой,Кузнецовой,Кузнецову,Кузнецовой,Кузнецовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname429()
    {
        $this->object->setSecondName('Кузьмина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кузьмина,Кузьминой,Кузьминой,Кузьмину,Кузьминой,Кузьминой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname430()
    {
        $this->object->setSecondName('Куимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Куимова,Куимовой,Куимовой,Куимову,Куимовой,Куимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname431()
    {
        $this->object->setSecondName('Куклачева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Куклачева,Куклачевой,Куклачевой,Куклачеву,Куклачевой,Куклачевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname432()
    {
        $this->object->setSecondName('Кулагина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кулагина,Кулагиной,Кулагиной,Кулагину,Кулагиной,Кулагиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname433()
    {
        $this->object->setSecondName('Кулибина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кулибина,Кулибиной,Кулибиной,Кулибину,Кулибиной,Кулибиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname434()
    {
        $this->object->setSecondName('Куликова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Куликова,Куликовой,Куликовой,Куликову,Куликовой,Куликовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname435()
    {
        $this->object->setSecondName('Куракина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Куракина,Куракиной,Куракиной,Куракину,Куракиной,Куракиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname436()
    {
        $this->object->setSecondName('Курбатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Курбатова,Курбатовой,Курбатовой,Курбатову,Курбатовой,Курбатовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname437()
    {
        $this->object->setSecondName('Курганова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Курганова,Кургановой,Кургановой,Курганову,Кургановой,Кургановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname438()
    {
        $this->object->setSecondName('Курдина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Курдина,Курдиной,Курдиной,Курдину,Курдиной,Курдиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname439()
    {
        $this->object->setSecondName('Курепина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Курепина,Курепиной,Курепиной,Курепину,Курепиной,Курепиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname440()
    {
        $this->object->setSecondName('Курсалина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Курсалина,Курсалиной,Курсалиной,Курсалину,Курсалиной,Курсалиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname441()
    {
        $this->object->setSecondName('Кутикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кутикова,Кутиковой,Кутиковой,Кутикову,Кутиковой,Кутиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname442()
    {
        $this->object->setSecondName('Кутузова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кутузова,Кутузовой,Кутузовой,Кутузову,Кутузовой,Кутузовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname443()
    {
        $this->object->setSecondName('Кутякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кутякова,Кутяковой,Кутяковой,Кутякову,Кутяковой,Кутяковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname444()
    {
        $this->object->setSecondName('Лаврова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лаврова,Лавровой,Лавровой,Лаврову,Лавровой,Лавровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname445()
    {
        $this->object->setSecondName('Лагутова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лагутова,Лагутовой,Лагутовой,Лагутову,Лагутовой,Лагутовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname446()
    {
        $this->object->setSecondName('Лазарева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лазарева,Лазаревой,Лазаревой,Лазареву,Лазаревой,Лазаревой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname447()
    {
        $this->object->setSecondName('Ланцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ланцова,Ланцовой,Ланцовой,Ланцову,Ланцовой,Ланцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname448()
    {
        $this->object->setSecondName('Лапидус');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лапидус,Лапидус,Лапидус,Лапидус,Лапидус,Лапидус'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname449()
    {
        $this->object->setSecondName('Лапотникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лапотникова,Лапотниковой,Лапотниковой,Лапотникову,Лапотниковой,Лапотниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname450()
    {
        $this->object->setSecondName('Лаптева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лаптева,Лаптевой,Лаптевой,Лаптеву,Лаптевой,Лаптевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname451()
    {
        $this->object->setSecondName('Лапунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лапунова,Лапуновой,Лапуновой,Лапунову,Лапуновой,Лапуновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname452()
    {
        $this->object->setSecondName('Лапухова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лапухова,Лапуховой,Лапуховой,Лапухову,Лапуховой,Лапуховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname453()
    {
        $this->object->setSecondName('Ларина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ларина,Лариной,Лариной,Ларину,Лариной,Лариной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname454()
    {
        $this->object->setSecondName('Ларионова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ларионова,Ларионовой,Ларионовой,Ларионову,Ларионовой,Ларионовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname455()
    {
        $this->object->setSecondName('Ласкутина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ласкутина,Ласкутиной,Ласкутиной,Ласкутину,Ласкутиной,Ласкутиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname456()
    {
        $this->object->setSecondName('Лачинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лачинова,Лачиновой,Лачиновой,Лачинову,Лачиновой,Лачиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname457()
    {
        $this->object->setSecondName('Лачкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лачкова,Лачковой,Лачковой,Лачкову,Лачковой,Лачковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname458()
    {
        $this->object->setSecondName('Лебедева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лебедева,Лебедевой,Лебедевой,Лебедеву,Лебедевой,Лебедевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname459()
    {
        $this->object->setSecondName('Лебединаская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лебединаская,Лебединаской,Лебединаской,Лебединаскую,Лебединаской,Лебединаской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname460()
    {
        $this->object->setSecondName('Лебединацева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лебединацева,Лебединацевой,Лебединацевой,Лебединацеву,Лебединацевой,Лебединацевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname461()
    {
        $this->object->setSecondName('Легкодимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Легкодимова,Легкодимовой,Легкодимовой,Легкодимову,Легкодимовой,Легкодимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname462()
    {
        $this->object->setSecondName('Леонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леонова,Леоновой,Леоновой,Леонову,Леоновой,Леоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname463()
    {
        $this->object->setSecondName('Лепехина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лепехина,Лепехиной,Лепехиной,Лепехину,Лепехиной,Лепехиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname464()
    {
        $this->object->setSecondName('Лескова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лескова,Лесковой,Лесковой,Лескову,Лесковой,Лесковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname465()
    {
        $this->object->setSecondName('Лесничая');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лесничая,Лесничая,Лесничая,Лесничая,Лесничая,Лесничая'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname466()
    {
        $this->object->setSecondName('Летова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Летова,Летовой,Летовой,Летову,Летовой,Летовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname467()
    {
        $this->object->setSecondName('Лещева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лещева,Лещевой,Лещевой,Лещеву,Лещевой,Лещевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname468()
    {
        $this->object->setSecondName('Лилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лилова,Лиловой,Лиловой,Лилову,Лиловой,Лиловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname469()
    {
        $this->object->setSecondName('Липина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Липина,Липиной,Липиной,Липину,Липиной,Липиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname470()
    {
        $this->object->setSecondName('Лисицына');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лисицына,Лисицыной,Лисицыной,Лисицыну,Лисицыной,Лисицыной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname471()
    {
        $this->object->setSecondName('Лихачева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лихачева,Лихачевой,Лихачевой,Лихачеву,Лихачевой,Лихачевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname472()
    {
        $this->object->setSecondName('Лобанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лобанова,Лобановой,Лобановой,Лобанову,Лобановой,Лобановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname473()
    {
        $this->object->setSecondName('Лобова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лобова,Лобовой,Лобовой,Лобову,Лобовой,Лобовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname474()
    {
        $this->object->setSecondName('Логинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Логинова,Логиновой,Логиновой,Логинову,Логиновой,Логиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname475()
    {
        $this->object->setSecondName('Логиновская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Логиновская,Логиновской,Логиновской,Логиновскую,Логиновской,Логиновской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname476()
    {
        $this->object->setSecondName('Локтева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Локтева,Локтевой,Локтевой,Локтеву,Локтевой,Локтевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname477()
    {
        $this->object->setSecondName('Ломоносова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ломоносова,Ломоносовой,Ломоносовой,Ломоносову,Ломоносовой,Ломоносовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname478()
    {
        $this->object->setSecondName('Ломтева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ломтева,Ломтевой,Ломтевой,Ломтеву,Ломтевой,Ломтевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname479()
    {
        $this->object->setSecondName('Лопатина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лопатина,Лопатиной,Лопатиной,Лопатину,Лопатиной,Лопатиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname480()
    {
        $this->object->setSecondName('Лосева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лосева,Лосевой,Лосевой,Лосеву,Лосевой,Лосевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname481()
    {
        $this->object->setSecondName('Лосевская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лосевская,Лосевской,Лосевской,Лосевскую,Лосевской,Лосевской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname482()
    {
        $this->object->setSecondName('Лоскутникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лоскутникова,Лоскутниковой,Лоскутниковой,Лоскутникову,Лоскутниковой,Лоскутниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname483()
    {
        $this->object->setSecondName('Лоскутова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лоскутова,Лоскутовой,Лоскутовой,Лоскутову,Лоскутовой,Лоскутовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname484()
    {
        $this->object->setSecondName('Лужкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лужкова,Лужковой,Лужковой,Лужкову,Лужковой,Лужковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname485()
    {
        $this->object->setSecondName('Лыткина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лыткина,Лыткиной,Лыткиной,Лыткину,Лыткиной,Лыткиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname486()
    {
        $this->object->setSecondName('Любимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любимова,Любимовой,Любимовой,Любимову,Любимовой,Любимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname487()
    {
        $this->object->setSecondName('Любова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любова,Любовой,Любовой,Любову,Любовой,Любовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname488()
    {
        $this->object->setSecondName('Лягушкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лягушкина,Лягушкиной,Лягушкиной,Лягушкину,Лягушкиной,Лягушкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname489()
    {
        $this->object->setSecondName('Лягушова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лягушова,Лягушовой,Лягушовой,Лягушову,Лягушовой,Лягушовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname490()
    {
        $this->object->setSecondName('Лялюшкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лялюшкина,Лялюшкиной,Лялюшкиной,Лялюшкину,Лялюшкиной,Лялюшкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname491()
    {
        $this->object->setSecondName('Лясина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лясина,Лясиной,Лясиной,Лясину,Лясиной,Лясиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname492()
    {
        $this->object->setSecondName('Ляпина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ляпина,Ляпины,Ляпине,Ляпину,Ляпиной,Ляпине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname493()
    {
        $this->object->setSecondName('Майсак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Майсак,Майсак,Майсак,Майсак,Майсак,Майсак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname494()
    {
        $this->object->setSecondName('Макарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Макарова,Макаровой,Макаровой,Макарову,Макаровой,Макаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname495()
    {
        $this->object->setSecondName('Маклакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маклакова,Маклаковой,Маклаковой,Маклакову,Маклаковой,Маклаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname496()
    {
        $this->object->setSecondName('Максимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимова,Максимовой,Максимовой,Максимову,Максимовой,Максимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname497()
    {
        $this->object->setSecondName('Максимушкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимушкина,Максимушкиной,Максимушкиной,Максимушкину,Максимушкиной,Максимушкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname498()
    {
        $this->object->setSecondName('Максудова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максудова,Максудовой,Максудовой,Максудову,Максудовой,Максудовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname499()
    {
        $this->object->setSecondName('Малахова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малахова,Малаховой,Малаховой,Малахову,Малаховой,Малаховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname500()
    {
        $this->object->setSecondName('Маликова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маликова,Маликовой,Маликовой,Маликову,Маликовой,Маликовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname501()
    {
        $this->object->setSecondName('Малинина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малинина,Малининой,Малининой,Малинину,Малининой,Малининой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname502()
    {
        $this->object->setSecondName('Малышева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малышева,Малышевой,Малышевой,Малышеву,Малышевой,Малышевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname503()
    {
        $this->object->setSecondName('Малюгина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малюгина,Малюгины,Малюгине,Малюгину,Малюгиной,Малюгине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname504()
    {
        $this->object->setSecondName('Малыхина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малыхина,Малыхины,Малыхине,Малыхину,Малыхиной,Малыхине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname505()
    {
        $this->object->setSecondName('Мамонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мамонова,Мамоновой,Мамоновой,Мамонову,Мамоновой,Мамоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname506()
    {
        $this->object->setSecondName('Манина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Манина,Маниной,Маниной,Манину,Маниной,Маниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname507()
    {
        $this->object->setSecondName('Маркина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маркина,Маркиной,Маркиной,Маркину,Маркиной,Маркиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname508()
    {
        $this->object->setSecondName('Маркова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маркова,Марковой,Марковой,Маркову,Марковой,Марковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname509()
    {
        $this->object->setSecondName('Маслак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маслак,Маслак,Маслак,Маслак,Маслак,Маслак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname510()
    {
        $this->object->setSecondName('Маслова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маслова,Масловой,Масловой,Маслову,Масловой,Масловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname511()
    {
        $this->object->setSecondName('Матвеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матвеева,Матвеевой,Матвеевой,Матвееву,Матвеевой,Матвеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname512()
    {
        $this->object->setSecondName('Машарина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Машарина,Машариной,Машариной,Машарину,Машариной,Машариной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname513()
    {
        $this->object->setSecondName('Машир');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Машир,Машир,Машир,Машир,Машир,Машир'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname514()
    {
        $this->object->setSecondName('Медведева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Медведева,Медведевой,Медведевой,Медведеву,Медведевой,Медведевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname515()
    {
        $this->object->setSecondName('Медникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Медникова,Медниковой,Медниковой,Медникову,Медниковой,Медниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname516()
    {
        $this->object->setSecondName('Меледина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Меледина,Мелединой,Мелединой,Меледину,Мелединой,Мелединой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname517()
    {
        $this->object->setSecondName('Мелехова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мелехова,Мелеховой,Мелеховой,Мелехову,Мелеховой,Мелеховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname518()
    {
        $this->object->setSecondName('Меликова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Меликова,Меликовой,Меликовой,Меликову,Меликовой,Меликовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname519()
    {
        $this->object->setSecondName('Мельникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мельникова,Мельниковой,Мельниковой,Мельникову,Мельниковой,Мельниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname520()
    {
        $this->object->setSecondName('Меркушева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Меркушева,Меркушевой,Меркушевой,Меркушеву,Меркушевой,Меркушевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname521()
    {
        $this->object->setSecondName('Мещерякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мещерякова,Мещеряковой,Мещеряковой,Мещерякову,Мещеряковой,Мещеряковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname522()
    {
        $this->object->setSecondName('Мигунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мигунова,Мигуновой,Мигуновой,Мигунову,Мигуновой,Мигуновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname523()
    {
        $this->object->setSecondName('Мизенова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мизенова,Мизеновой,Мизеновой,Мизенову,Мизеновой,Мизеновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname524()
    {
        $this->object->setSecondName('Милехина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милехина,Милехиной,Милехиной,Милехину,Милехиной,Милехиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname525()
    {
        $this->object->setSecondName('Милорадова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милорадова,Милорадовой,Милорадовой,Милорадову,Милорадовой,Милорадовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname526()
    {
        $this->object->setSecondName('Милюкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милюкова,Милюковой,Милюковой,Милюкову,Милюковой,Милюковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname527()
    {
        $this->object->setSecondName('Милютина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милютина,Милютины,Милютине,Милютину,Милютиной,Милютине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname528()
    {
        $this->object->setSecondName('Минаеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Минаеева,Минаеевой,Минаеевой,Минаееву,Минаеевой,Минаеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname529()
    {
        $this->object->setSecondName('Минаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Минаина,Минаиной,Минаиной,Минаину,Минаиной,Минаиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname530()
    {
        $this->object->setSecondName('Минакина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Минакина,Минакиной,Минакиной,Минакину,Минакиной,Минакиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname531()
    {
        $this->object->setSecondName('Миронова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Миронова,Мироновой,Мироновой,Миронову,Мироновой,Мироновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname532()
    {
        $this->object->setSecondName('Митина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Митина,Митиной,Митиной,Митину,Митиной,Митиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname533()
    {
        $this->object->setSecondName('Митрофанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Митрофанова,Митрофановой,Митрофановой,Митрофанову,Митрофановой,Митрофановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname534()
    {
        $this->object->setSecondName('Михайлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайлова,Михайловой,Михайловой,Михайлову,Михайловой,Михайловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname535()
    {
        $this->object->setSecondName('Михеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михеева,Михеевой,Михеевой,Михееву,Михеевой,Михеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname536()
    {
        $this->object->setSecondName('Мишутина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мишутина,Мишутиной,Мишутиной,Мишутину,Мишутиной,Мишутиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname537()
    {
        $this->object->setSecondName('Моисеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Моисеева,Моисеевой,Моисеевой,Моисееву,Моисеевой,Моисеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname538()
    {
        $this->object->setSecondName('Молчанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Молчанова,Молчановой,Молчановой,Молчанову,Молчановой,Молчановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname539()
    {
        $this->object->setSecondName('Моренова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Моренова,Мореновой,Мореновой,Моренову,Мореновой,Мореновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname540()
    {
        $this->object->setSecondName('Морозова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Морозова,Морозовой,Морозовой,Морозову,Морозовой,Морозовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname541()
    {
        $this->object->setSecondName('Мосалева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мосалева,Мосалевой,Мосалевой,Мосалеву,Мосалевой,Мосалевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname542()
    {
        $this->object->setSecondName('Москвина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Москвина,Москвиной,Москвиной,Москвину,Москвиной,Москвиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname543()
    {
        $this->object->setSecondName('Муратова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Муратова,Муратовой,Муратовой,Муратову,Муратовой,Муратовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname544()
    {
        $this->object->setSecondName('Мухортова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мухортова,Мухортовой,Мухортовой,Мухортову,Мухортовой,Мухортовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname545()
    {
        $this->object->setSecondName('Мягкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мягкова,Мягковой,Мягковой,Мягкову,Мягковой,Мягковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname546()
    {
        $this->object->setSecondName('Мясникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мясникова,Мясниковой,Мясниковой,Мясникову,Мясниковой,Мясниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname547()
    {
        $this->object->setSecondName('Мятлева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мятлева,Мятлева,Мятлева,Мятлева,Мятлева,Мятлева'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname548()
    {
        $this->object->setSecondName('Набатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Набатова,Набатовой,Набатовой,Набатову,Набатовой,Набатовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname549()
    {
        $this->object->setSecondName('Нардина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нардина,Нардиной,Нардиной,Нардину,Нардиной,Нардиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname550()
    {
        $this->object->setSecondName('Наумова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наумова,Наумовой,Наумовой,Наумову,Наумовой,Наумовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname551()
    {
        $this->object->setSecondName('Невзорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Невзорова,Невзоровой,Невзоровой,Невзорову,Невзоровой,Невзоровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname552()
    {
        $this->object->setSecondName('Неделяева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Неделяева,Неделяевой,Неделяевой,Неделяеву,Неделяевой,Неделяевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname553()
    {
        $this->object->setSecondName('Нежданова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нежданова,Неждановой,Неждановой,Нежданову,Неждановой,Неждановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname554()
    {
        $this->object->setSecondName('Ненашева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ненашева,Ненашевой,Ненашевой,Ненашеву,Ненашевой,Ненашевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname555()
    {
        $this->object->setSecondName('Нестерова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нестерова,Нестеровой,Нестеровой,Нестерову,Нестеровой,Нестеровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname556()
    {
        $this->object->setSecondName('Нечаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нечаева,Нечаевой,Нечаевой,Нечаеву,Нечаевой,Нечаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname557()
    {
        $this->object->setSecondName('Никитина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Никитина,Никитиной,Никитиной,Никитину,Никитиной,Никитиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname558()
    {
        $this->object->setSecondName('Никифорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Никифорова,Никифоровой,Никифоровой,Никифорову,Никифоровой,Никифоровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname559()
    {
        $this->object->setSecondName('Николаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Николаева,Николаевой,Николаевой,Николаеву,Николаевой,Николаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname560()
    {
        $this->object->setSecondName('Никонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Никонова,Никоновой,Никоновой,Никонову,Никоновой,Никоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname561()
    {
        $this->object->setSecondName('Никулина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Никулина,Никулиной,Никулиной,Никулину,Никулиной,Никулиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname562()
    {
        $this->object->setSecondName('Некрасова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Некрасова,Некрасовой,Некрасовой,Некрасову,Некрасовой,Некрасовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname563()
    {
        $this->object->setSecondName('Новикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Новикова,Новиковой,Новиковой,Новикову,Новиковой,Новиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname564()
    {
        $this->object->setSecondName('Новосельцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Новосельцева,Новосельцевой,Новосельцевой,Новосельцеву,Новосельцевой,Новосельцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname565()
    {
        $this->object->setSecondName('Носачева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Носачева,Носачевой,Носачевой,Носачеву,Носачевой,Носачевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname566()
    {
        $this->object->setSecondName('Носкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Носкова,Носковой,Носковой,Носкову,Носковой,Носковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname567()
    {
        $this->object->setSecondName('Носова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Носова,Носовой,Носовой,Носову,Носовой,Носовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname568()
    {
        $this->object->setSecondName('Оболенская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оболенская,Оболенской,Оболенской,Оболенскую,Оболенской,Оболенской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname569()
    {
        $this->object->setSecondName('Оборина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оборина,Оборины,Оборине,Оборину,Обориной,Оборине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname570()
    {
        $this->object->setSecondName('Образцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Образцова,Образцовой,Образцовой,Образцову,Образцовой,Образцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname571()
    {
        $this->object->setSecondName('Обухова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Обухова,Обуховой,Обуховой,Обухову,Обуховой,Обуховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname572()
    {
        $this->object->setSecondName('Овечкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Овечкина,Овечкиной,Овечкиной,Овечкину,Овечкиной,Овечкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname573()
    {
        $this->object->setSecondName('Огородникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Огородникова,Огородниковой,Огородниковой,Огородникову,Огородниковой,Огородниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname574()
    {
        $this->object->setSecondName('Огурцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Огурцова,Огурцовой,Огурцовой,Огурцову,Огурцовой,Огурцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname575()
    {
        $this->object->setSecondName('Озерова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Озерова,Озеровой,Озеровой,Озерову,Озеровой,Озеровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname576()
    {
        $this->object->setSecondName('Ольховская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ольховская,Ольховской,Ольховской,Ольховскую,Ольховской,Ольховской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname577()
    {
        $this->object->setSecondName('Онегина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Онегина,Онегиной,Онегиной,Онегину,Онегиной,Онегиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname578()
    {
        $this->object->setSecondName('Опокина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Опокина,Опокиной,Опокиной,Опокину,Опокиной,Опокиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname579()
    {
        $this->object->setSecondName('Орлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Орлова,Орловой,Орловой,Орлову,Орловой,Орловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname580()
    {
        $this->object->setSecondName('Осинцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Осинцева,Осинцевой,Осинцевой,Осинцеву,Осинцевой,Осинцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname581()
    {
        $this->object->setSecondName('Остальцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Остальцева,Остальцевой,Остальцевой,Остальцеву,Остальцевой,Остальцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname582()
    {
        $this->object->setSecondName('Остапюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Остапюк,Остапюк,Остапюк,Остапюк,Остапюк,Остапюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname583()
    {
        $this->object->setSecondName('Островерхова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Островерхова,Островерховой,Островерховой,Островерхову,Островерховой,Островерховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname584()
    {
        $this->object->setSecondName('Островская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Островская,Островской,Островской,Островскую,Островской,Островской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname585()
    {
        $this->object->setSecondName('Павлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлова,Павловой,Павловой,Павлову,Павловой,Павловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname586()
    {
        $this->object->setSecondName('Панарина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панарина,Панариной,Панариной,Панарину,Панариной,Панариной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname587()
    {
        $this->object->setSecondName('Панина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панина,Паниной,Паниной,Панину,Паниной,Паниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname588()
    {
        $this->object->setSecondName('Панкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панкина,Панкиной,Панкиной,Панкину,Панкиной,Панкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname589()
    {
        $this->object->setSecondName('Панкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панкова,Панковой,Панковой,Панкову,Панковой,Панковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname590()
    {
        $this->object->setSecondName('Панфилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панфилова,Панфиловой,Панфиловой,Панфилову,Панфиловой,Панфиловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname591()
    {
        $this->object->setSecondName('Панькив');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панькив,Панькив,Панькив,Панькив,Панькив,Панькив'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname592()
    {
        $this->object->setSecondName('Папанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Папанова,Папановой,Папановой,Папанову,Папановой,Папановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname593()
    {
        $this->object->setSecondName('Пахомова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пахомова,Пахомовой,Пахомовой,Пахомову,Пахомовой,Пахомовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname594()
    {
        $this->object->setSecondName('Пенкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пенкина,Пенкиной,Пенкиной,Пенкину,Пенкиной,Пенкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname595()
    {
        $this->object->setSecondName('Переверзева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Переверзева,Переверзевой,Переверзевой,Переверзеву,Переверзевой,Переверзевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname596()
    {
        $this->object->setSecondName('Перевертова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Перевертова,Перевертовой,Перевертовой,Перевертову,Перевертовой,Перевертовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname597()
    {
        $this->object->setSecondName('Пересторонина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пересторонина,Пересторониной,Пересторониной,Пересторонину,Пересторониной,Пересторониной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname598()
    {
        $this->object->setSecondName('Перехваткина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Перехваткина,Перехваткиной,Перехваткиной,Перехваткину,Перехваткиной,Перехваткиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname599()
    {
        $this->object->setSecondName('Перова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Перова,Перовой,Перовой,Перову,Перовой,Перовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname600()
    {
        $this->object->setSecondName('Перьмякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Перьмякова,Перьмяковой,Перьмяковой,Перьмякову,Перьмяковой,Перьмяковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname601()
    {
        $this->object->setSecondName('Пестова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пестова,Пестовой,Пестовой,Пестову,Пестовой,Пестовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname602()
    {
        $this->object->setSecondName('Петрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петрова,Петровой,Петровой,Петрову,Петровой,Петровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname603()
    {
        $this->object->setSecondName('Петухова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петухова,Петуховой,Петуховой,Петухову,Петуховой,Петуховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname604()
    {
        $this->object->setSecondName('Печеникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Печеникова,Печениковой,Печениковой,Печеникову,Печениковой,Печениковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname605()
    {
        $this->object->setSecondName('Пивоварова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пивоварова,Пивоваровой,Пивоваровой,Пивоварову,Пивоваровой,Пивоваровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname606()
    {
        $this->object->setSecondName('Пирогова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пирогова,Пироговой,Пироговой,Пирогову,Пироговой,Пироговой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname607()
    {
        $this->object->setSecondName('Пирожкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пирожкова,Пирожковой,Пирожковой,Пирожкову,Пирожковой,Пирожковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname608()
    {
        $this->object->setSecondName('Пичугина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пичугина,Пичугиной,Пичугиной,Пичугину,Пичугиной,Пичугиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname609()
    {
        $this->object->setSecondName('Погодина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Погодина,Погодиной,Погодиной,Погодину,Погодиной,Погодиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname610()
    {
        $this->object->setSecondName('Погребнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Погребнова,Погребновой,Погребновой,Погребнову,Погребновой,Погребновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname611()
    {
        $this->object->setSecondName('Подшивалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Подшивалова,Подшиваловой,Подшиваловой,Подшивалову,Подшиваловой,Подшиваловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname612()
    {
        $this->object->setSecondName('Позднякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Позднякова,Поздняковой,Поздняковой,Позднякову,Поздняковой,Поздняковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname613()
    {
        $this->object->setSecondName('Покровская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Покровская,Покровской,Покровской,Покровскую,Покровской,Покровской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname614()
    {
        $this->object->setSecondName('Поливанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Поливанова,Поливановой,Поливановой,Поливанову,Поливановой,Поливановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname615()
    {
        $this->object->setSecondName('Полушина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полушина,Полушиной,Полушиной,Полушину,Полушиной,Полушиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname616()
    {
        $this->object->setSecondName('Полякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полякова,Поляковой,Поляковой,Полякову,Поляковой,Поляковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname617()
    {
        $this->object->setSecondName('Поникарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Поникарова,Поникаровой,Поникаровой,Поникарову,Поникаровой,Поникаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname618()
    {
        $this->object->setSecondName('Пономарева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пономарева,Пономаревой,Пономаревой,Пономареву,Пономаревой,Пономаревой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname619()
    {
        $this->object->setSecondName('Пончикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пончикова,Пончиковой,Пончиковой,Пончикову,Пончиковой,Пончиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname620()
    {
        $this->object->setSecondName('Попова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Попова,Поповой,Поповой,Попову,Поповой,Поповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname621()
    {
        $this->object->setSecondName('Попырина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Попырина,Попырины,Попырине,Попырину,Попыриной,Попырине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname622()
    {
        $this->object->setSecondName('Посохова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Посохова,Посоховой,Посоховой,Посохову,Посоховой,Посоховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname623()
    {
        $this->object->setSecondName('Потапова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Потапова,Потаповой,Потаповой,Потапову,Потаповой,Потаповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname624()
    {
        $this->object->setSecondName('Потемкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Потемкина,Потемкиной,Потемкиной,Потемкину,Потемкиной,Потемкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname625()
    {
        $this->object->setSecondName('Праздникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Праздникова,Праздниковой,Праздниковой,Праздникову,Праздниковой,Праздниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname626()
    {
        $this->object->setSecondName('Примакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Примакова,Примаковой,Примаковой,Примакову,Примаковой,Примаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname627()
    {
        $this->object->setSecondName('Приходько');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Приходько,Приходько,Приходько,Приходько,Приходько,Приходько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname628()
    {
        $this->object->setSecondName('Проничева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Проничева,Проничевой,Проничевой,Проничеву,Проничевой,Проничевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname629()
    {
        $this->object->setSecondName('Протасова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Протасова,Протасовой,Протасовой,Протасову,Протасовой,Протасовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname630()
    {
        $this->object->setSecondName('Прохорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прохорова,Прохоровой,Прохоровой,Прохорову,Прохоровой,Прохоровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname631()
    {
        $this->object->setSecondName('Пугина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пугина,Пугиной,Пугиной,Пугину,Пугиной,Пугиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname632()
    {
        $this->object->setSecondName('Пузанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пузанова,Пузановой,Пузановой,Пузанову,Пузановой,Пузановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname633()
    {
        $this->object->setSecondName('Путилина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Путилина,Путилины,Путилине,Путилину,Путилиной,Путилине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname634()
    {
        $this->object->setSecondName('Путина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Путина,Путиной,Путиной,Путину,Путиной,Путиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname635()
    {
        $this->object->setSecondName('Путятина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Путятина,Путятиной,Путятиной,Путятину,Путятиной,Путятиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname636()
    {
        $this->object->setSecondName('Пушкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пушкина,Пушкиной,Пушкиной,Пушкину,Пушкиной,Пушкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname637()
    {
        $this->object->setSecondName('Пыжалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пыжалова,Пыжаловой,Пыжаловой,Пыжалову,Пыжаловой,Пыжаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname638()
    {
        $this->object->setSecondName('Пырьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пырьева,Пырьевой,Пырьевой,Пырьеву,Пырьевой,Пырьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname639()
    {
        $this->object->setSecondName('Разина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Разина,Разиной,Разиной,Разину,Разиной,Разиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname640()
    {
        $this->object->setSecondName('Разуваева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Разуваева,Разуваевой,Разуваевой,Разуваеву,Разуваевой,Разуваевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname641()
    {
        $this->object->setSecondName('Распопова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Распопова,Распоповой,Распоповой,Распопову,Распоповой,Распоповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname642()
    {
        $this->object->setSecondName('Распутина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Распутина,Распутиной,Распутиной,Распутину,Распутиной,Распутиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname643()
    {
        $this->object->setSecondName('Расторгуева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Расторгуева,Расторгуевой,Расторгуевой,Расторгуеву,Расторгуевой,Расторгуевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname644()
    {
        $this->object->setSecondName('Ремизова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ремизова,Ремизовой,Ремизовой,Ремизову,Ремизовой,Ремизовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname645()
    {
        $this->object->setSecondName('Репина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Репина,Репиной,Репиной,Репину,Репиной,Репиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname646()
    {
        $this->object->setSecondName('Решетилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Решетилова,Решетиловой,Решетиловой,Решетилову,Решетиловой,Решетиловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname647()
    {
        $this->object->setSecondName('Решетникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Решетникова,Решетниковой,Решетниковой,Решетникову,Решетниковой,Решетниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname648()
    {
        $this->object->setSecondName('Родзянко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Родзянко,Родзянко,Родзянко,Родзянко,Родзянко,Родзянко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname649()
    {
        $this->object->setSecondName('Рогачева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рогачева,Рогачевой,Рогачевой,Рогачеву,Рогачевой,Рогачевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname650()
    {
        $this->object->setSecondName('Рогова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рогова,Роговой,Роговой,Рогову,Роговой,Роговой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname651()
    {
        $this->object->setSecondName('Рогозина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рогозина,Рогозиной,Рогозиной,Рогозину,Рогозиной,Рогозиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname652()
    {
        $this->object->setSecondName('Рожкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рожкова,Рожковой,Рожковой,Рожкову,Рожковой,Рожковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname653()
    {
        $this->object->setSecondName('Рокоссовская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рокоссовская,Рокоссовской,Рокоссовской,Рокоссовскую,Рокоссовской,Рокоссовской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname654()
    {
        $this->object->setSecondName('Романова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романова,Романовой,Романовой,Романову,Романовой,Романовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname655()
    {
        $this->object->setSecondName('Ростова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ростова,Ростовой,Ростовой,Ростову,Ростовой,Ростовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname656()
    {
        $this->object->setSecondName('Ростовцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ростовцева,Ростовцевой,Ростовцевой,Ростовцеву,Ростовцевой,Ростовцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname657()
    {
        $this->object->setSecondName('Рудавина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рудавина,Рудавиной,Рудавиной,Рудавину,Рудавиной,Рудавиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname658()
    {
        $this->object->setSecondName('Румянцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Румянцева,Румянцевой,Румянцевой,Румянцеву,Румянцевой,Румянцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname659()
    {
        $this->object->setSecondName('Рунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рунова,Руновой,Руновой,Рунову,Руновой,Руновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname660()
    {
        $this->object->setSecondName('Русакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Русакова,Русаковой,Русаковой,Русакову,Русаковой,Русаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname661()
    {
        $this->object->setSecondName('Русских');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Русских,Русских,Русских,Русских,Русских,Русских'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname662()
    {
        $this->object->setSecondName('Ручкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ручкина,Ручкиной,Ручкиной,Ручкину,Ручкиной,Ручкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname663()
    {
        $this->object->setSecondName('Рыбалкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рыбалкина,Рыбалкиной,Рыбалкиной,Рыбалкину,Рыбалкиной,Рыбалкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname664()
    {
        $this->object->setSecondName('Рыжанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рыжанова,Рыжановой,Рыжановой,Рыжанову,Рыжановой,Рыжановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname665()
    {
        $this->object->setSecondName('Рыжкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рыжкова,Рыжковой,Рыжковой,Рыжкову,Рыжковой,Рыжковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname666()
    {
        $this->object->setSecondName('Рыжова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рыжова,Рыжовой,Рыжовой,Рыжову,Рыжовой,Рыжовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname667()
    {
        $this->object->setSecondName('Рытина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рытина,Рытины,Рытине,Рытину,Рытиной,Рытине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname668()
    {
        $this->object->setSecondName('Рыченкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рыченкова,Рыченковой,Рыченковой,Рыченкову,Рыченковой,Рыченковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname669()
    {
        $this->object->setSecondName('Рябкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рябкова,Рябковой,Рябковой,Рябкову,Рябковой,Рябковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname670()
    {
        $this->object->setSecondName('Рябова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рябова,Рябовой,Рябовой,Рябову,Рябовой,Рябовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname671()
    {
        $this->object->setSecondName('Ряхина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ряхина,Ряхиной,Ряхиной,Ряхину,Ряхиной,Ряхиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname672()
    {
        $this->object->setSecondName('Сабитова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сабитова,Сабитовой,Сабитовой,Сабитову,Сабитовой,Сабитовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname673()
    {
        $this->object->setSecondName('Савасина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савасина,Савасиной,Савасиной,Савасину,Савасиной,Савасиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname674()
    {
        $this->object->setSecondName('Савинкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савинкова,Савинковой,Савинковой,Савинкову,Савинковой,Савинковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname675()
    {
        $this->object->setSecondName('Савенкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савенкова,Савенковой,Савенковой,Савенкову,Савенковой,Савенковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname676()
    {
        $this->object->setSecondName('Саврасова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Саврасова,Саврасовой,Саврасовой,Саврасову,Саврасовой,Саврасовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname677()
    {
        $this->object->setSecondName('Садыкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Садыкова,Садыковой,Садыковой,Садыкову,Садыковой,Садыковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname678()
    {
        $this->object->setSecondName('Сазонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сазонова,Сазоновой,Сазоновой,Сазонову,Сазоновой,Сазоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname679()
    {
        $this->object->setSecondName('Салко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Салко,Салко,Салко,Салко,Салко,Салко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname680()
    {
        $this->object->setSecondName('Салькова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Салькова,Сальковой,Сальковой,Салькову,Сальковой,Сальковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname681()
    {
        $this->object->setSecondName('Сальникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сальникова,Сальниковой,Сальниковой,Сальникову,Сальниковой,Сальниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname682()
    {
        $this->object->setSecondName('Самойлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Самойлова,Самойловой,Самойловой,Самойлову,Самойловой,Самойловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname683()
    {
        $this->object->setSecondName('Самохина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Самохина,Самохиной,Самохиной,Самохину,Самохиной,Самохиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname684()
    {
        $this->object->setSecondName('Самсонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Самсонова,Самсоновой,Самсоновой,Самсонову,Самсоновой,Самсоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname685()
    {
        $this->object->setSecondName('Санникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Санникова,Санниковой,Санниковой,Санникову,Санниковой,Санниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname686()
    {
        $this->object->setSecondName('Сапогова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сапогова,Сапоговой,Сапоговой,Сапогову,Сапоговой,Сапоговой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname687()
    {
        $this->object->setSecondName('Сапожникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сапожникова,Сапожниковой,Сапожниковой,Сапожникову,Сапожниковой,Сапожниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname688()
    {
        $this->object->setSecondName('Сафиюлина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сафиюлина,Сафиюлиной,Сафиюлиной,Сафиюлину,Сафиюлиной,Сафиюлиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname689()
    {
        $this->object->setSecondName('Сахарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сахарова,Сахаровой,Сахаровой,Сахарову,Сахаровой,Сахаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname690()
    {
        $this->object->setSecondName('Свалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Свалова,Сваловой,Сваловой,Свалову,Сваловой,Сваловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname691()
    {
        $this->object->setSecondName('Северинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Северинова,Севериновой,Севериновой,Северинову,Севериновой,Севериновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname692()
    {
        $this->object->setSecondName('Севастьянова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Севастьянова,Севастьяновой,Севастьяновой,Севастьянову,Севастьяновой,Севастьяновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname693()
    {
        $this->object->setSecondName('Седельникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Седельникова,Седельниковой,Седельниковой,Седельникову,Седельниковой,Седельниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname694()
    {
        $this->object->setSecondName('Седова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Седова,Седовой,Седовой,Седову,Седовой,Седовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname695()
    {
        $this->object->setSecondName('Селезнева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Селезнева,Селезневой,Селезневой,Селезневу,Селезневой,Селезневой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname696()
    {
        $this->object->setSecondName('Селиванова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Селиванова,Селивановой,Селивановой,Селиванову,Селивановой,Селивановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname697()
    {
        $this->object->setSecondName('Семенова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семенова,Семеновой,Семеновой,Семенову,Семеновой,Семеновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname698()
    {
        $this->object->setSecondName('Семичевская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семичевская,Семичевской,Семичевской,Семичевскую,Семичевской,Семичевской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname699()
    {
        $this->object->setSecondName('Сенькина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сенькина,Сенькиной,Сенькиной,Сенькину,Сенькиной,Сенькиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname700()
    {
        $this->object->setSecondName('Сереброва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сереброва,Серебровой,Серебровой,Сереброву,Серебровой,Серебровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname701()
    {
        $this->object->setSecondName('Серебрякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Серебрякова,Серебряковой,Серебряковой,Серебрякову,Серебряковой,Серебряковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname702()
    {
        $this->object->setSecondName('Серегина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Серегина,Серегиной,Серегиной,Серегину,Серегиной,Серегиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname703()
    {
        $this->object->setSecondName('Серова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Серова,Серовой,Серовой,Серову,Серовой,Серовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname704()
    {
        $this->object->setSecondName('Серпинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Серпинова,Серпиновой,Серпиновой,Серпинову,Серпиновой,Серпиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname705()
    {
        $this->object->setSecondName('Семянина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семянина,Семянины,Семянине,Семянину,Семяниной,Семянине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname706()
    {
        $this->object->setSecondName('Семина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семина,Семиной,Семиной,Семину,Семиной,Семиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname707()
    {
        $this->object->setSecondName('Серегина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Серегина,Серегиной,Серегиной,Серегину,Серегиной,Серегиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname708()
    {
        $this->object->setSecondName('Сеченова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сеченова,Сеченовой,Сеченовой,Сеченову,Сеченовой,Сеченовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname709()
    {
        $this->object->setSecondName('Сивакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сивакова,Сиваковой,Сиваковой,Сивакову,Сиваковой,Сиваковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname710()
    {
        $this->object->setSecondName('Сигаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сигаева,Сигаевой,Сигаевой,Сигаеву,Сигаевой,Сигаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname711()
    {
        $this->object->setSecondName('Сигачева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сигачева,Сигачевой,Сигачевой,Сигачеву,Сигачевой,Сигачевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname712()
    {
        $this->object->setSecondName('Сидорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сидорова,Сидоровой,Сидоровой,Сидорову,Сидоровой,Сидоровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname713()
    {
        $this->object->setSecondName('Сизова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сизова,Сизовой,Сизовой,Сизову,Сизовой,Сизовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname714()
    {
        $this->object->setSecondName('Сизая');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сизая,Сизой,Сизой,Сизую,Сизой,Сизой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname715()
    {
        $this->object->setSecondName('Силиванова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силиванова,Силивановой,Силивановой,Силиванову,Силивановой,Силивановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname716()
    {
        $this->object->setSecondName('Силина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силина,Силиной,Силиной,Силину,Силиной,Силиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname717()
    {
        $this->object->setSecondName('Сильвестрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сильвестрова,Сильвестровой,Сильвестровой,Сильвестрову,Сильвестровой,Сильвестровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname718()
    {
        $this->object->setSecondName('Силивестрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силивестрова,Силивестровой,Силивестровой,Силивестрову,Силивестровой,Силивестровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname719()
    {
        $this->object->setSecondName('Силаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силаева,Силаевой,Силаевой,Силаеву,Силаевой,Силаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname720()
    {
        $this->object->setSecondName('Силиванова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силиванова,Силивановой,Силивановой,Силиванову,Силивановой,Силивановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname721()
    {
        $this->object->setSecondName('Скворцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скворцова,Скворцовой,Скворцовой,Скворцову,Скворцовой,Скворцовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname722()
    {
        $this->object->setSecondName('Скрябина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скрябина,Скрябиной,Скрябиной,Скрябину,Скрябиной,Скрябиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname723()
    {
        $this->object->setSecondName('Скоробогатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скоробогатова,Скоробогатовой,Скоробогатовой,Скоробогатову,Скоробогатовой,Скоробогатовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname724()
    {
        $this->object->setSecondName('Скороходова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скороходова,Скороходовой,Скороходовой,Скороходову,Скороходовой,Скороходовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname725()
    {
        $this->object->setSecondName('Скуратова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скуратова,Скуратовой,Скуратовой,Скуратову,Скуратовой,Скуратовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname726()
    {
        $this->object->setSecondName('Слобожанина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Слобожанина,Слобожаниной,Слобожаниной,Слобожанину,Слобожаниной,Слобожаниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname727()
    {
        $this->object->setSecondName('Случевская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Случевская,Случевской,Случевской,Случевскую,Случевской,Случевской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname728()
    {
        $this->object->setSecondName('Смирнитская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Смирнитская,Смирнитской,Смирнитской,Смирнитскую,Смирнитской,Смирнитской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname729()
    {
        $this->object->setSecondName('Смирнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Смирнова,Смирновой,Смирновой,Смирнову,Смирновой,Смирновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname730()
    {
        $this->object->setSecondName('Сметанина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сметанина,Сметаниной,Сметаниной,Сметанину,Сметаниной,Сметаниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname731()
    {
        $this->object->setSecondName('Смолина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Смолина,Смолиной,Смолиной,Смолину,Смолиной,Смолиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname732()
    {
        $this->object->setSecondName('Смолянова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Смолянова,Смоляновой,Смоляновой,Смолянову,Смоляновой,Смоляновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname733()
    {
        $this->object->setSecondName('Снаткина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Снаткина,Снаткиной,Снаткиной,Снаткину,Снаткиной,Снаткиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname734()
    {
        $this->object->setSecondName('Снегирева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Снегирева,Снегиревой,Снегиревой,Снегиреву,Снегиревой,Снегиревой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname735()
    {
        $this->object->setSecondName('Снеткова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Снеткова,Снетковой,Снетковой,Снеткову,Снетковой,Снетковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname736()
    {
        $this->object->setSecondName('Соболева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соболева,Соболевой,Соболевой,Соболеву,Соболевой,Соболевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname737()
    {
        $this->object->setSecondName('Соболевская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соболевская,Соболевской,Соболевской,Соболевскую,Соболевской,Соболевской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname738()
    {
        $this->object->setSecondName('Соколова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соколова,Соколовой,Соколовой,Соколову,Соколовой,Соколовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname739()
    {
        $this->object->setSecondName('Солдатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Солдатова,Солдатовой,Солдатовой,Солдатову,Солдатовой,Солдатовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname740()
    {
        $this->object->setSecondName('Соловьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соловьева,Соловьевой,Соловьевой,Соловьеву,Соловьевой,Соловьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname741()
    {
        $this->object->setSecondName('Солодникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Солодникова,Солодниковой,Солодниковой,Солодникову,Солодниковой,Солодниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname742()
    {
        $this->object->setSecondName('Соломина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соломина,Соломины,Соломине,Соломину,Соломиной,Соломине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname743()
    {
        $this->object->setSecondName('Соломонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соломонова,Соломоновой,Соломоновой,Соломонову,Соломоновой,Соломоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname744()
    {
        $this->object->setSecondName('Сопова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сопова,Соповой,Соповой,Сопову,Соповой,Соповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname745()
    {
        $this->object->setSecondName('Сорокина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сорокина,Сорокиной,Сорокиной,Сорокину,Сорокиной,Сорокиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname746()
    {
        $this->object->setSecondName('Спанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Спанова,Спановой,Спановой,Спанову,Спановой,Спановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname747()
    {
        $this->object->setSecondName('Старикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Старикова,Стариковой,Стариковой,Старикову,Стариковой,Стариковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname748()
    {
        $this->object->setSecondName('Староверова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Староверова,Староверовой,Староверовой,Староверову,Староверовой,Староверовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname749()
    {
        $this->object->setSecondName('Стеблева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стеблева,Стеблевой,Стеблевой,Стеблеву,Стеблевой,Стеблевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname750()
    {
        $this->object->setSecondName('Стегнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стегнова,Стегновой,Стегновой,Стегнову,Стегновой,Стегновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname751()
    {
        $this->object->setSecondName('Степанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанова,Степановой,Степановой,Степанову,Степановой,Степановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname752()
    {
        $this->object->setSecondName('Степанкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанкова,Степанковой,Степанковой,Степанкову,Степанковой,Степанковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname753()
    {
        $this->object->setSecondName('Степашина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степашина,Степашиной,Степашиной,Степашину,Степашиной,Степашиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname754()
    {
        $this->object->setSecondName('Стрелкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стрелкова,Стрелковой,Стрелковой,Стрелкову,Стрелковой,Стрелковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname755()
    {
        $this->object->setSecondName('Стрекалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стрекалова,Стрекаловой,Стрекаловой,Стрекалову,Стрекаловой,Стрекаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname756()
    {
        $this->object->setSecondName('Строганова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Строганова,Строгановой,Строгановой,Строганову,Строгановой,Строгановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname757()
    {
        $this->object->setSecondName('Субботина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Субботина,Субботиной,Субботиной,Субботину,Субботиной,Субботиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname758()
    {
        $this->object->setSecondName('Суботина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суботина,Суботиной,Суботиной,Суботину,Суботиной,Суботиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname759()
    {
        $this->object->setSecondName('Суворина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суворина,Сувориной,Сувориной,Суворину,Сувориной,Сувориной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname760()
    {
        $this->object->setSecondName('Суворкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суворкина,Суворкиной,Суворкиной,Суворкину,Суворкиной,Суворкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname761()
    {
        $this->object->setSecondName('Суворова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суворова,Суворовой,Суворовой,Суворову,Суворовой,Суворовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname762()
    {
        $this->object->setSecondName('Сунгатулина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сунгатулина,Сунгатулиной,Сунгатулиной,Сунгатулину,Сунгатулиной,Сунгатулиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname763()
    {
        $this->object->setSecondName('Сукачева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сукачева,Сукачевой,Сукачевой,Сукачеву,Сукачевой,Сукачевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname764()
    {
        $this->object->setSecondName('Сурикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сурикова,Суриковой,Суриковой,Сурикову,Суриковой,Суриковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname765()
    {
        $this->object->setSecondName('Сусоева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сусоева,Сусоевой,Сусоевой,Сусоеву,Сусоевой,Сусоевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname766()
    {
        $this->object->setSecondName('Сутулина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сутулина,Сутулины,Сутулине,Сутулину,Сутулиной,Сутулине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname767()
    {
        $this->object->setSecondName('Сухорукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сухорукова,Сухоруковой,Сухоруковой,Сухорукову,Сухоруковой,Сухоруковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname768()
    {
        $this->object->setSecondName('Сучкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сучкова,Сучковой,Сучковой,Сучкову,Сучковой,Сучковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname769()
    {
        $this->object->setSecondName('Сысоева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сысоева,Сысоевой,Сысоевой,Сысоеву,Сысоевой,Сысоевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname770()
    {
        $this->object->setSecondName('Сытникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сытникова,Сытниковой,Сытниковой,Сытникову,Сытниковой,Сытниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname771()
    {
        $this->object->setSecondName('Сычевка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сычевка,Сычевки,Сычевке,Сычевку,Сычевкой,Сычевке'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname772()
    {
        $this->object->setSecondName('Сычкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сычкина,Сычкиной,Сычкиной,Сычкину,Сычкиной,Сычкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname773()
    {
        $this->object->setSecondName('Сюсева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сюсева,Сюсева,Сюсева,Сюсева,Сюсева,Сюсева'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname774()
    {
        $this->object->setSecondName('Табакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Табакова,Табаковой,Табаковой,Табакову,Табаковой,Табаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname775()
    {
        $this->object->setSecondName('Табернакулова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Табернакулова,Табернакуловой,Табернакуловой,Табернакулову,Табернакуловой,Табернакуловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname776()
    {
        $this->object->setSecondName('Таланова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таланова,Талановой,Талановой,Таланову,Талановой,Талановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname777()
    {
        $this->object->setSecondName('Талалихина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Талалихина,Талалихиной,Талалихиной,Талалихину,Талалихиной,Талалихиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname778()
    {
        $this->object->setSecondName('Танкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Танкова,Танковой,Танковой,Танкову,Танковой,Танковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname779()
    {
        $this->object->setSecondName('Тарасова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасова,Тарасовой,Тарасовой,Тарасову,Тарасовой,Тарасовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname780()
    {
        $this->object->setSecondName('Татарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татарова,Татаровой,Татаровой,Татарову,Татаровой,Татаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname781()
    {
        $this->object->setSecondName('Твардовская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Твардовская,Твардовской,Твардовской,Твардовскую,Твардовской,Твардовской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname782()
    {
        $this->object->setSecondName('Темкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Темкина,Темкиной,Темкиной,Темкину,Темкиной,Темкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname783()
    {
        $this->object->setSecondName('Теплова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Теплова,Тепловой,Тепловой,Теплову,Тепловой,Тепловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname784()
    {
        $this->object->setSecondName('Теребова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Теребова,Теребовой,Теребовой,Теребову,Теребовой,Теребовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname785()
    {
        $this->object->setSecondName('Типалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Типалова,Типаловой,Типаловой,Типалову,Типаловой,Типаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname786()
    {
        $this->object->setSecondName('Титова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Титова,Титовой,Титовой,Титову,Титовой,Титовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname787()
    {
        $this->object->setSecondName('Тихвинская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тихвинская,Тихвинской,Тихвинской,Тихвинскую,Тихвинской,Тихвинской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname788()
    {
        $this->object->setSecondName('Тихомирова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тихомирова,Тихомировой,Тихомировой,Тихомирову,Тихомировой,Тихомировой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname789()
    {
        $this->object->setSecondName('Тихонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тихонова,Тихоновой,Тихоновой,Тихонову,Тихоновой,Тихоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname790()
    {
        $this->object->setSecondName('Токарева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Токарева,Токаревой,Токаревой,Токареву,Токаревой,Токаревой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname791()
    {
        $this->object->setSecondName('Токмакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Токмакова,Токмаковой,Токмаковой,Токмакову,Токмаковой,Токмаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname792()
    {
        $this->object->setSecondName('Толбанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Толбанова,Толбановой,Толбановой,Толбанову,Толбановой,Толбановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname793()
    {
        $this->object->setSecondName('Толстоброва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Толстоброва,Толстобровой,Толстобровой,Толстоброву,Толстобровой,Толстобровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname794()
    {
        $this->object->setSecondName('Толстокожева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Толстокожева,Толстокожевой,Толстокожевой,Толстокожеву,Толстокожевой,Толстокожевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname795()
    {
        $this->object->setSecondName('Толстая');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Толстая,Толстой,Толстой,Толстую,Толстой,Толстой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname796()
    {
        $this->object->setSecondName('Топорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Топорова,Топоровой,Топоровой,Топорову,Топоровой,Топоровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname797()
    {
        $this->object->setSecondName('Торопова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Торопова,Тороповой,Тороповой,Торопову,Тороповой,Тороповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname798()
    {
        $this->object->setSecondName('Торчинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Торчинова,Торчиновой,Торчиновой,Торчинову,Торчиновой,Торчиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname799()
    {
        $this->object->setSecondName('Травкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Травкина,Травкиной,Травкиной,Травкину,Травкиной,Травкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname800()
    {
        $this->object->setSecondName('Тредиковская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тредиковская,Тредиковской,Тредиковской,Тредиковскую,Тредиковской,Тредиковской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname801()
    {
        $this->object->setSecondName('Третьякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Третьякова,Третьяковой,Третьяковой,Третьякову,Третьяковой,Третьяковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname802()
    {
        $this->object->setSecondName('Трифонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Трифонова,Трифоновой,Трифоновой,Трифонову,Трифоновой,Трифоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname803()
    {
        $this->object->setSecondName('Трофимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Трофимова,Трофимовой,Трофимовой,Трофимову,Трофимовой,Трофимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname804()
    {
        $this->object->setSecondName('Трусова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Трусова,Трусовой,Трусовой,Трусову,Трусовой,Трусовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname805()
    {
        $this->object->setSecondName('Трутнева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Трутнева,Трутневой,Трутневой,Трутневу,Трутневой,Трутневой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname806()
    {
        $this->object->setSecondName('Труфанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Труфанова,Труфановой,Труфановой,Труфанову,Труфановой,Труфановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname807()
    {
        $this->object->setSecondName('Трухина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Трухина,Трухиной,Трухиной,Трухину,Трухиной,Трухиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname808()
    {
        $this->object->setSecondName('Трындина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Трындина,Трындины,Трындине,Трындину,Трындиной,Трындине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname809()
    {
        $this->object->setSecondName('Туполева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Туполева,Туполевой,Туполевой,Туполеву,Туполевой,Туполевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname810()
    {
        $this->object->setSecondName('Турбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Турбина,Турбины,Турбине,Турбину,Турбиной,Турбине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname811()
    {
        $this->object->setSecondName('Тургенева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тургенева,Тургеневой,Тургеневой,Тургеневу,Тургеневой,Тургеневой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname812()
    {
        $this->object->setSecondName('Турова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Турова,Туровой,Туровой,Турову,Туровой,Туровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname813()
    {
        $this->object->setSecondName('Турфанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Турфанова,Турфановой,Турфановой,Турфанову,Турфановой,Турфановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname814()
    {
        $this->object->setSecondName('Тычкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тычкина,Тычкиной,Тычкиной,Тычкину,Тычкиной,Тычкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname815()
    {
        $this->object->setSecondName('Тюшнякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тюшнякова,Тюшняковой,Тюшняковой,Тюшнякову,Тюшняковой,Тюшняковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname816()
    {
        $this->object->setSecondName('Телицына');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Телицына,Телицыной,Телицыной,Телицыну,Телицыной,Телицыной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname817()
    {
        $this->object->setSecondName('Тянникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тянникова,Тянниковой,Тянниковой,Тянникову,Тянниковой,Тянниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname818()
    {
        $this->object->setSecondName('Угольникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Угольникова,Угольниковой,Угольниковой,Угольникову,Угольниковой,Угольниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname819()
    {
        $this->object->setSecondName('Ульянова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульянова,Ульяновой,Ульяновой,Ульянову,Ульяновой,Ульяновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname820()
    {
        $this->object->setSecondName('Ульяшина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульяшина,Ульяшиной,Ульяшиной,Ульяшину,Ульяшиной,Ульяшиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname821()
    {
        $this->object->setSecondName('Усатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Усатова,Усатовой,Усатовой,Усатову,Усатовой,Усатовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname822()
    {
        $this->object->setSecondName('Усова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Усова,Усовой,Усовой,Усову,Усовой,Усовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname823()
    {
        $this->object->setSecondName('Устинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Устинова,Устиновой,Устиновой,Устинову,Устиновой,Устиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname824()
    {
        $this->object->setSecondName('Устюжанина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Устюжанина,Устюжаниной,Устюжаниной,Устюжанину,Устюжаниной,Устюжаниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname825()
    {
        $this->object->setSecondName('Утесова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Утесова,Утесовой,Утесовой,Утесову,Утесовой,Утесовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname826()
    {
        $this->object->setSecondName('Ухова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ухова,Уховой,Уховой,Ухову,Уховой,Уховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname827()
    {
        $this->object->setSecondName('Фанина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фанина,Фаниной,Фаниной,Фанину,Фаниной,Фаниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname828()
    {
        $this->object->setSecondName('Фамусова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фамусова,Фамусовой,Фамусовой,Фамусову,Фамусовой,Фамусовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname829()
    {
        $this->object->setSecondName('Федина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федина,Фединой,Фединой,Федину,Фединой,Фединой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname830()
    {
        $this->object->setSecondName('Федосова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федосова,Федосовой,Федосовой,Федосову,Федосовой,Федосовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname831()
    {
        $this->object->setSecondName('Федотова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федотова,Федотовой,Федотовой,Федотову,Федотовой,Федотовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname832()
    {
        $this->object->setSecondName('Федосеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федосеева,Федосеевой,Федосеевой,Федосееву,Федосеевой,Федосеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname833()
    {
        $this->object->setSecondName('Федченкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федченкова,Федченковой,Федченковой,Федченкову,Федченковой,Федченковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname834()
    {
        $this->object->setSecondName('Федорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федорова,Федоровой,Федоровой,Федорову,Федоровой,Федоровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname835()
    {
        $this->object->setSecondName('Федулова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федулова,Федуловой,Федуловой,Федулову,Федуловой,Федуловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname836()
    {
        $this->object->setSecondName('Фетисова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фетисова,Фетисовой,Фетисовой,Фетисову,Фетисовой,Фетисовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname837()
    {
        $this->object->setSecondName('Филатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филатова,Филатовой,Филатовой,Филатову,Филатовой,Филатовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname838()
    {
        $this->object->setSecondName('Филимонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филимонова,Филимоновой,Филимоновой,Филимонову,Филимоновой,Филимоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname839()
    {
        $this->object->setSecondName('Филиппова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филиппова,Филипповой,Филипповой,Филиппову,Филипповой,Филипповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname840()
    {
        $this->object->setSecondName('Флерова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Флерова,Флеровой,Флеровой,Флерову,Флеровой,Флеровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname841()
    {
        $this->object->setSecondName('Фокина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фокина,Фокиной,Фокиной,Фокину,Фокиной,Фокиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname842()
    {
        $this->object->setSecondName('Фомина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фомина,Фоминой,Фоминой,Фомину,Фоминой,Фоминой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname843()
    {
        $this->object->setSecondName('Фомичева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фомичева,Фомичевой,Фомичевой,Фомичеву,Фомичевой,Фомичевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname844()
    {
        $this->object->setSecondName('Фонвизина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фонвизина,Фонвизиной,Фонвизиной,Фонвизину,Фонвизиной,Фонвизиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname845()
    {
        $this->object->setSecondName('Форопонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Форопонова,Форопоновой,Форопоновой,Форопонову,Форопоновой,Форопоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname846()
    {
        $this->object->setSecondName('Фирсова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фирсова,Фирсовой,Фирсовой,Фирсову,Фирсовой,Фирсовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname847()
    {
        $this->object->setSecondName('Фролова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фролова,Фроловой,Фроловой,Фролову,Фроловой,Фроловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname848()
    {
        $this->object->setSecondName('Францева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Францева,Францевой,Францевой,Францеву,Францевой,Францевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname849()
    {
        $this->object->setSecondName('Фукина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фукина,Фукины,Фукине,Фукину,Фукиной,Фукине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname850()
    {
        $this->object->setSecondName('Хабалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хабалова,Хабаловой,Хабаловой,Хабалову,Хабаловой,Хабаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname851()
    {
        $this->object->setSecondName('Халтурина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Халтурина,Халтуриной,Халтуриной,Халтурину,Халтуриной,Халтуриной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname852()
    {
        $this->object->setSecondName('Харитонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Харитонова,Харитоновой,Харитоновой,Харитонову,Харитоновой,Харитоновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname853()
    {
        $this->object->setSecondName('Харламова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Харламова,Харламовой,Харламовой,Харламову,Харламовой,Харламовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname854()
    {
        $this->object->setSecondName('Хлебникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хлебникова,Хлебниковой,Хлебниковой,Хлебникову,Хлебниковой,Хлебниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname855()
    {
        $this->object->setSecondName('Хлопонина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хлопонина,Хлопониной,Хлопониной,Хлопонину,Хлопониной,Хлопониной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname856()
    {
        $this->object->setSecondName('Холодова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Холодова,Холодовой,Холодовой,Холодову,Холодовой,Холодовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname857()
    {
        $this->object->setSecondName('Хомколова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хомколова,Хомколовой,Хомколовой,Хомколову,Хомколовой,Хомколовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname858()
    {
        $this->object->setSecondName('Храмова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Храмова,Храмовой,Храмовой,Храмову,Храмовой,Храмовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname859()
    {
        $this->object->setSecondName('Хромова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хромова,Хромовой,Хромовой,Хромову,Хромовой,Хромовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname860()
    {
        $this->object->setSecondName('Худовекова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Худовекова,Худовековой,Худовековой,Худовекову,Худовековой,Худовековой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname861()
    {
        $this->object->setSecondName('Хуртина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хуртина,Хуртиной,Хуртиной,Хуртину,Хуртиной,Хуртиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname862()
    {
        $this->object->setSecondName('Хребтова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хребтова,Хребтовой,Хребтовой,Хребтову,Хребтовой,Хребтовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname863()
    {
        $this->object->setSecondName('Худякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Худякова,Худяковой,Худяковой,Худякову,Худяковой,Худяковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname864()
    {
        $this->object->setSecondName('Царицына');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Царицына,Царицыной,Царицыной,Царицыну,Царицыной,Царицыной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname865()
    {
        $this->object->setSecondName('Цветаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Цветаева,Цветаевой,Цветаевой,Цветаеву,Цветаевой,Цветаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname866()
    {
        $this->object->setSecondName('Цветкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Цветкова,Цветковой,Цветковой,Цветкову,Цветковой,Цветковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname867()
    {
        $this->object->setSecondName('Циолковская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Циолковская,Циолковской,Циолковской,Циолковскую,Циолковской,Циолковской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname868()
    {
        $this->object->setSecondName('Цитникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Цитникова,Цитниковой,Цитниковой,Цитникову,Цитниковой,Цитниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname869()
    {
        $this->object->setSecondName('Цуканова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Цуканова,Цукановой,Цукановой,Цуканову,Цукановой,Цукановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname870()
    {
        $this->object->setSecondName('Чадаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чадаева,Чадаевой,Чадаевой,Чадаеву,Чадаевой,Чадаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname871()
    {
        $this->object->setSecondName('Чадова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чадова,Чадовой,Чадовой,Чадову,Чадовой,Чадовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname872()
    {
        $this->object->setSecondName('Чазова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чазова,Чазовой,Чазовой,Чазову,Чазовой,Чазовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname873()
    {
        $this->object->setSecondName('Чалая');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чалая,Чалой,Чалой,Чалую,Чалой,Чалой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname874()
    {
        $this->object->setSecondName('Чапаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чапаева,Чапаевой,Чапаевой,Чапаеву,Чапаевой,Чапаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname875()
    {
        $this->object->setSecondName('Чеботарева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чеботарева,Чеботаревой,Чеботаревой,Чеботареву,Чеботаревой,Чеботаревой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname876()
    {
        $this->object->setSecondName('Чебыкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чебыкина,Чебыкиной,Чебыкиной,Чебыкину,Чебыкиной,Чебыкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname877()
    {
        $this->object->setSecondName('Чежекова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чежекова,Чежековой,Чежековой,Чежекову,Чежековой,Чежековой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname878()
    {
        $this->object->setSecondName('Челомеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Челомеева,Челомеевой,Челомеевой,Челомееву,Челомеевой,Челомеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname879()
    {
        $this->object->setSecondName('Челомей');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Челомей,Челомей,Челомей,Челомей,Челомей,Челомей'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname880()
    {
        $this->object->setSecondName('Челпанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Челпанова,Челпановой,Челпановой,Челпанову,Челпановой,Челпановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname881()
    {
        $this->object->setSecondName('Чендева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чендева,Чендевой,Чендевой,Чендеву,Чендевой,Чендевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname882()
    {
        $this->object->setSecondName('Черенчикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Черенчикова,Черенчиковой,Черенчиковой,Черенчикову,Черенчиковой,Черенчиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname883()
    {
        $this->object->setSecondName('Черепанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Черепанова,Черепановой,Черепановой,Черепанову,Черепановой,Черепановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname884()
    {
        $this->object->setSecondName('Черкашина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Черкашина,Черкашиной,Черкашиной,Черкашину,Черкашиной,Черкашиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname885()
    {
        $this->object->setSecondName('Чернова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чернова,Черновой,Черновой,Чернову,Черновой,Черновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname886()
    {
        $this->object->setSecondName('Чернышева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чернышева,Чернышевой,Чернышевой,Чернышеву,Чернышевой,Чернышевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname887()
    {
        $this->object->setSecondName('Чернакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чернакова,Чернаковой,Чернаковой,Чернакову,Чернаковой,Чернаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname888()
    {
        $this->object->setSecondName('Черникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Черникова,Черниковой,Черниковой,Черникову,Черниковой,Черниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname889()
    {
        $this->object->setSecondName('Чеснокова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чеснокова,Чесноковой,Чесноковой,Чеснокову,Чесноковой,Чесноковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname890()
    {
        $this->object->setSecondName('Чигракова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чигракова,Чиграковой,Чиграковой,Чигракову,Чиграковой,Чиграковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname891()
    {
        $this->object->setSecondName('Чижикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чижикова,Чижиковой,Чижиковой,Чижикову,Чижиковой,Чижиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname892()
    {
        $this->object->setSecondName('Чиркаш');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чиркаш,Чиркаш,Чиркаш,Чиркаш,Чиркаш,Чиркаш'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname893()
    {
        $this->object->setSecondName('Чистякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чистякова,Чистяковой,Чистяковой,Чистякову,Чистяковой,Чистяковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname894()
    {
        $this->object->setSecondName('Чичикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чичикова,Чичиковой,Чичиковой,Чичикову,Чичиковой,Чичиковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname895()
    {
        $this->object->setSecondName('Чичканова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чичканова,Чичкановой,Чичкановой,Чичканову,Чичкановой,Чичкановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname896()
    {
        $this->object->setSecondName('Чкалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чкалова,Чкаловой,Чкаловой,Чкалову,Чкаловой,Чкаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname897()
    {
        $this->object->setSecondName('Чмыхова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чмыхова,Чмыховой,Чмыховой,Чмыхову,Чмыховой,Чмыховой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname898()
    {
        $this->object->setSecondName('Чугунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чугунова,Чугуновой,Чугуновой,Чугунову,Чугуновой,Чугуновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname899()
    {
        $this->object->setSecondName('Чужинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чужинова,Чужиновой,Чужиновой,Чужинову,Чужиновой,Чужиновой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname900()
    {
        $this->object->setSecondName('Чукчова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чукчова,Чукчовы,Чукчове,Чукчову,Чукчовой,Чукчове'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname901()
    {
        $this->object->setSecondName('Чукреева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чукреева,Чукреевой,Чукреевой,Чукрееву,Чукреевой,Чукреевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname902()
    {
        $this->object->setSecondName('Чупова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чупова,Чуповой,Чуповой,Чупову,Чуповой,Чуповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname903()
    {
        $this->object->setSecondName('Чуприна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чуприна,Чуприны,Чуприне,Чуприну,Чуприной,Чуприне'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname904()
    {
        $this->object->setSecondName('Чупрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чупрова,Чупровой,Чупровой,Чупрову,Чупровой,Чупровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname905()
    {
        $this->object->setSecondName('Чучанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чучанова,Чучановой,Чучановой,Чучанову,Чучановой,Чучановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname906()
    {
        $this->object->setSecondName('Чучумашева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чучумашева,Чучумашевой,Чучумашевой,Чучумашеву,Чучумашевой,Чучумашевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname907()
    {
        $this->object->setSecondName('Шабунина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шабунина,Шабуниной,Шабуниной,Шабунину,Шабуниной,Шабуниной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname908()
    {
        $this->object->setSecondName('Шакмакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шакмакова,Шакмаковой,Шакмаковой,Шакмакову,Шакмаковой,Шакмаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname909()
    {
        $this->object->setSecondName('Шаляпина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шаляпина,Шаляпины,Шаляпине,Шаляпину,Шаляпиной,Шаляпине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname910()
    {
        $this->object->setSecondName('Шаповалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шаповалова,Шаповаловой,Шаповаловой,Шаповалову,Шаповаловой,Шаповаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname911()
    {
        $this->object->setSecondName('Шапошникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шапошникова,Шапошниковой,Шапошниковой,Шапошникову,Шапошниковой,Шапошниковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname912()
    {
        $this->object->setSecondName('Шарапова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шарапова,Шараповой,Шараповой,Шарапову,Шараповой,Шараповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname913()
    {
        $this->object->setSecondName('Шарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шарова,Шаровой,Шаровой,Шарову,Шаровой,Шаровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname914()
    {
        $this->object->setSecondName('Шаршина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шаршина,Шаршиной,Шаршиной,Шаршину,Шаршиной,Шаршиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname915()
    {
        $this->object->setSecondName('Шашлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шашлова,Шашловой,Шашловой,Шашлову,Шашловой,Шашловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname916()
    {
        $this->object->setSecondName('Шведова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шведова,Шведовой,Шведовой,Шведову,Шведовой,Шведовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname917()
    {
        $this->object->setSecondName('Шеваелек');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шеваелек,Шеваелек,Шеваелек,Шеваелек,Шеваелек,Шеваелек'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname918()
    {
        $this->object->setSecondName('Шеломова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шеломова,Шеломовой,Шеломовой,Шеломову,Шеломовой,Шеломовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname919()
    {
        $this->object->setSecondName('Шепкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шепкина,Шепкиной,Шепкиной,Шепкину,Шепкиной,Шепкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname920()
    {
        $this->object->setSecondName('Шеповалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шеповалова,Шеповаловой,Шеповаловой,Шеповалову,Шеповаловой,Шеповаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname921()
    {
        $this->object->setSecondName('Шереметьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шереметьева,Шереметьевой,Шереметьевой,Шереметьеву,Шереметьевой,Шереметьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname922()
    {
        $this->object->setSecondName('Шерстова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шерстова,Шерстовой,Шерстовой,Шерстову,Шерстовой,Шерстовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname923()
    {
        $this->object->setSecondName('Шикалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шикалова,Шикаловой,Шикаловой,Шикалову,Шикаловой,Шикаловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname924()
    {
        $this->object->setSecondName('Ширманова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ширманова,Ширмановой,Ширмановой,Ширманову,Ширмановой,Ширмановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname925()
    {
        $this->object->setSecondName('Шихранова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шихранова,Шихрановой,Шихрановой,Шихранову,Шихрановой,Шихрановой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname926()
    {
        $this->object->setSecondName('Шишкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шишкина,Шишкиной,Шишкиной,Шишкину,Шишкиной,Шишкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname927()
    {
        $this->object->setSecondName('Шишлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шишлова,Шишловой,Шишловой,Шишлову,Шишловой,Шишловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname928()
    {
        $this->object->setSecondName('Шишова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шишова,Шишовой,Шишовой,Шишову,Шишовой,Шишовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname929()
    {
        $this->object->setSecondName('Шкуратова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шкуратова,Шкуратовой,Шкуратовой,Шкуратову,Шкуратовой,Шкуратовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname930()
    {
        $this->object->setSecondName('Шлыкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шлыкова,Шлыковой,Шлыковой,Шлыкову,Шлыковой,Шлыковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname931()
    {
        $this->object->setSecondName('Шмакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шмакова,Шмаковой,Шмаковой,Шмакову,Шмаковой,Шмаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname932()
    {
        $this->object->setSecondName('Шмелева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шмелева,Шмелевой,Шмелевой,Шмелеву,Шмелевой,Шмелевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname933()
    {
        $this->object->setSecondName('Шубина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шубина,Шубиной,Шубиной,Шубину,Шубиной,Шубиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname934()
    {
        $this->object->setSecondName('Шубкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шубкина,Шубкиной,Шубкиной,Шубкину,Шубкиной,Шубкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname935()
    {
        $this->object->setSecondName('Шувалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шувалова,Шуваловой,Шуваловой,Шувалову,Шуваловой,Шуваловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname936()
    {
        $this->object->setSecondName('Шуйская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шуйская,Шуйской,Шуйской,Шуйскую,Шуйской,Шуйской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname937()
    {
        $this->object->setSecondName('Шукшина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шукшина,Шукшиной,Шукшиной,Шукшину,Шукшиной,Шукшиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname938()
    {
        $this->object->setSecondName('Шулева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шулева,Шулевой,Шулевой,Шулеву,Шулевой,Шулевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname939()
    {
        $this->object->setSecondName('Шульдешова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шульдешова,Шульдешовой,Шульдешовой,Шульдешову,Шульдешовой,Шульдешовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname940()
    {
        $this->object->setSecondName('Шульга');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шульга,Шульги,Шульге,Шульгу,Шульгой,Шульге'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname941()
    {
        $this->object->setSecondName('Шульгина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шульгина,Шульгиной,Шульгиной,Шульгину,Шульгиной,Шульгиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname942()
    {
        $this->object->setSecondName('Шурупова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шурупова,Шуруповой,Шуруповой,Шурупову,Шуруповой,Шуруповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname943()
    {
        $this->object->setSecondName('Шушалева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шушалева,Шушалевой,Шушалевой,Шушалеву,Шушалевой,Шушалевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname944()
    {
        $this->object->setSecondName('Шурша');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шурша,Шурши,Шурше,Шуршу,Шуршей,Шурше'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname945()
    {
        $this->object->setSecondName('Щавельская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щавельская,Щавельской,Щавельской,Щавельскую,Щавельской,Щавельской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname946()
    {
        $this->object->setSecondName('Щегельская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щегельская,Щегельской,Щегельской,Щегельскую,Щегельской,Щегельской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname947()
    {
        $this->object->setSecondName('Щеглова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щеглова,Щегловой,Щегловой,Щеглову,Щегловой,Щегловой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname948()
    {
        $this->object->setSecondName('Щеголева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щеголева,Щеголевой,Щеголевой,Щеголеву,Щеголевой,Щеголевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname949()
    {
        $this->object->setSecondName('Щеголихина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щеголихина,Щеголихиной,Щеголихиной,Щеголихину,Щеголихиной,Щеголихиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname950()
    {
        $this->object->setSecondName('Щедрина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щедрина,Щедрины,Щедрине,Щедрину,Щедриной,Щедрине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname951()
    {
        $this->object->setSecondName('Щедрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щедрова,Щедровой,Щедровой,Щедрову,Щедровой,Щедровой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname952()
    {
        $this->object->setSecondName('Щекочихина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щекочихина,Щекочихиной,Щекочихиной,Щекочихину,Щекочихиной,Щекочихиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname953()
    {
        $this->object->setSecondName('Щепкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щепкина,Щепкиной,Щепкиной,Щепкину,Щепкиной,Щепкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname954()
    {
        $this->object->setSecondName('Щербакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щербакова,Щербаковой,Щербаковой,Щербакову,Щербаковой,Щербаковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname955()
    {
        $this->object->setSecondName('Щербатых');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щербатых,Щербатых,Щербатых,Щербатых,Щербатых,Щербатых'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname956()
    {
        $this->object->setSecondName('Щербина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щербина,Щербины,Щербине,Щербину,Щербиной,Щербине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname957()
    {
        $this->object->setSecondName('Щетинаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щетинаина,Щетинаиной,Щетинаиной,Щетинаину,Щетинаиной,Щетинаиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname958()
    {
        $this->object->setSecondName('Щеткина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щеткина,Щеткиной,Щеткиной,Щеткину,Щеткиной,Щеткиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname959()
    {
        $this->object->setSecondName('Щукина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щукина,Щукиной,Щукиной,Щукину,Щукиной,Щукиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname960()
    {
        $this->object->setSecondName('Энтина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Энтина,Энтины,Энтине,Энтину,Энтиной,Энтине'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname961()
    {
        $this->object->setSecondName('Эсце');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эсце,Эсце,Эсце,Эсце,Эсце,Эсце'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname962()
    {
        $this->object->setSecondName('Ювелева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ювелева,Ювелевой,Ювелевой,Ювелеву,Ювелевой,Ювелевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname963()
    {
        $this->object->setSecondName('Юганцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юганцева,Юганцевой,Юганцевой,Юганцеву,Юганцевой,Юганцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname964()
    {
        $this->object->setSecondName('Югова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Югова,Юговой,Юговой,Югову,Юговой,Юговой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname965()
    {
        $this->object->setSecondName('Юдашкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юдашкина,Юдашкиной,Юдашкиной,Юдашкину,Юдашкиной,Юдашкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname966()
    {
        $this->object->setSecondName('Юдина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юдина,Юдиной,Юдиной,Юдину,Юдиной,Юдиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname967()
    {
        $this->object->setSecondName('Юнкина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юнкина,Юнкиной,Юнкиной,Юнкину,Юнкиной,Юнкиной'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname968()
    {
        $this->object->setSecondName('Юрнаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрнаева,Юрнаевой,Юрнаевой,Юрнаеву,Юрнаевой,Юрнаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname969()
    {
        $this->object->setSecondName('Юрьева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрьева,Юрьевой,Юрьевой,Юрьеву,Юрьевой,Юрьевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname970()
    {
        $this->object->setSecondName('Юсупова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юсупова,Юсуповой,Юсуповой,Юсупову,Юсуповой,Юсуповой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname971()
    {
        $this->object->setSecondName('Юферева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юферева,Юферевой,Юферевой,Юфереву,Юферевой,Юферевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname972()
    {
        $this->object->setSecondName('Якимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Якимова,Якимовой,Якимовой,Якимову,Якимовой,Якимовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname973()
    {
        $this->object->setSecondName('Яковалева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковалева,Яковалевой,Яковалевой,Яковалеву,Яковалевой,Яковалевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname974()
    {
        $this->object->setSecondName('Якубова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Якубова,Якубовой,Якубовой,Якубову,Якубовой,Якубовой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname975()
    {
        $this->object->setSecondName('Якушева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Якушева,Якушевой,Якушевой,Якушеву,Якушевой,Якушевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname976()
    {
        $this->object->setSecondName('Янаева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Янаева,Янаевой,Янаевой,Янаеву,Янаевой,Янаевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname977()
    {
        $this->object->setSecondName('Янкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Янкова,Янковой,Янковой,Янкову,Янковой,Янковой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname978()
    {
        $this->object->setSecondName('Янковаская');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Янковаская,Янковаской,Янковаской,Янковаскую,Янковаской,Янковаской'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname979()
    {
        $this->object->setSecondName('Ярмольник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярмольник,Ярмольник,Ярмольник,Ярмольник,Ярмольник,Ярмольник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname980()
    {
        $this->object->setSecondName('Яромеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яромеева,Яромеевой,Яромеевой,Яромееву,Яромеевой,Яромеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname981()
    {
        $this->object->setSecondName('Ярцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярцева,Ярцевой,Ярцевой,Ярцеву,Ярцевой,Ярцевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname982()
    {
        $this->object->setSecondName('Ясенева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ясенева,Ясеневой,Ясеневой,Ясеневу,Ясеневой,Ясеневой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname983()
    {
        $this->object->setSecondName('Яснеева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яснеева,Яснеевой,Яснеевой,Яснееву,Яснеевой,Яснеевой'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname984()
    {
        $this->object->setSecondName('Яшина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яшина,Яшиной,Яшиной,Яшину,Яшиной,Яшиной'), $this->object->getSecondNameCase());
    }

}