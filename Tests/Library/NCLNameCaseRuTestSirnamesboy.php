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


    public function testManSirname0()
    {
        $this->object->setSecondName('Абакумов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абакумов,Абакумова,Абакумову,Абакумова,Абакумовым,Абакумове'), $this->object->getSecondNameCase());
    }
    public function testManSirname1()
    {
        $this->object->setSecondName('Абдулов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абдулов,Абдулова,Абдулову,Абдулова,Абдуловым,Абдулове'), $this->object->getSecondNameCase());
    }
    public function testManSirname2()
    {
        $this->object->setSecondName('Абрамов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абрамов,Абрамова,Абрамову,Абрамова,Абрамовым,Абрамове'), $this->object->getSecondNameCase());
    }
    public function testManSirname3()
    {
        $this->object->setSecondName('Авдеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авдеев,Авдеева,Авдееву,Авдеева,Авдеевым,Авдееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname4()
    {
        $this->object->setSecondName('Аверин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аверин,Аверина,Аверину,Аверина,Авериным,Аверине'), $this->object->getSecondNameCase());
    }
    public function testManSirname5()
    {
        $this->object->setSecondName('Аверьянов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аверьянов,Аверьянова,Аверьянову,Аверьянова,Аверьяновым,Аверьянове'), $this->object->getSecondNameCase());
    }
    public function testManSirname6()
    {
        $this->object->setSecondName('Агапов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Агапов,Агапова,Агапову,Агапова,Агаповым,Агапове'), $this->object->getSecondNameCase());
    }
    public function testManSirname7()
    {
        $this->object->setSecondName('Агафонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Агафонов,Агафонова,Агафонову,Агафонова,Агафоновым,Агафонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname8()
    {
        $this->object->setSecondName('Агейкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Агейкин,Агейкина,Агейкину,Агейкина,Агейкиным,Агейкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname9()
    {
        $this->object->setSecondName('Ажищенков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ажищенков,Ажищенкова,Ажищенкову,Ажищенкова,Ажищенковым,Ажищенкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname10()
    {
        $this->object->setSecondName('Аксаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аксаков,Аксакова,Аксакову,Аксакова,Аксаковым,Аксакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname11()
    {
        $this->object->setSecondName('Аксенов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аксенов,Аксенова,Аксенову,Аксенова,Аксеновым,Аксенове'), $this->object->getSecondNameCase());
    }
    public function testManSirname12()
    {
        $this->object->setSecondName('Аксенчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аксенчук,Аксенчука,Аксенчуку,Аксенчука,Аксенчуком,Аксенчуке'), $this->object->getSecondNameCase());
    }
    public function testManSirname13()
    {
        $this->object->setSecondName('Аленин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аленин,Аленина,Аленину,Аленина,Алениным,Аленине'), $this->object->getSecondNameCase());
    }
    public function testManSirname14()
    {
        $this->object->setSecondName('Алиев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алиев,Алиева,Алиеву,Алиева,Алиевым,Алиеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname15()
    {
        $this->object->setSecondName('Амалиев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Амалиев,Амалиева,Амалиеву,Амалиева,Амалиевым,Амалиеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname16()
    {
        $this->object->setSecondName('Амелин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Амелин,Амелина,Амелину,Амелина,Амелиным,Амелине'), $this->object->getSecondNameCase());
    }
    public function testManSirname17()
    {
        $this->object->setSecondName('Аминев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аминев,Аминева,Аминеву,Аминева,Аминевым,Аминеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname18()
    {
        $this->object->setSecondName('Александров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александров,Александрова,Александрову,Александрова,Александровым,Александрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname19()
    {
        $this->object->setSecondName('Алексеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексеев,Алексеева,Алексееву,Алексеева,Алексеевым,Алексееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname20()
    {
        $this->object->setSecondName('Алехин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алехин,Алехина,Алехину,Алехина,Алехиным,Алехине'), $this->object->getSecondNameCase());
    }
    public function testManSirname21()
    {
        $this->object->setSecondName('Аллилуев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аллилуев,Аллилуева,Аллилуеву,Аллилуева,Аллилуевым,Аллилуеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname22()
    {
        $this->object->setSecondName('Андреев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреев,Андреева,Андрееву,Андреева,Андреевым,Андрееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname23()
    {
        $this->object->setSecondName('Андреюшкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреюшкин,Андреюшкина,Андреюшкину,Андреюшкина,Андреюшкиным,Андреюшкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname24()
    {
        $this->object->setSecondName('Андроников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андроников,Андроникова,Андроникову,Андроникова,Андрониковым,Андроникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname25()
    {
        $this->object->setSecondName('Андропов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андропов,Андропова,Андропову,Андропова,Андроповым,Андропове'), $this->object->getSecondNameCase());
    }
    public function testManSirname26()
    {
        $this->object->setSecondName('Аниканов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аниканов,Аниканова,Аниканову,Аниканова,Аникановым,Аниканове'), $this->object->getSecondNameCase());
    }
    public function testManSirname27()
    {
        $this->object->setSecondName('Анисимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анисимов,Анисимова,Анисимову,Анисимова,Анисимовым,Анисимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname28()
    {
        $this->object->setSecondName('Анишин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анишин,Анишина,Анишину,Анишина,Анишиным,Анишине'), $this->object->getSecondNameCase());
    }
    public function testManSirname29()
    {
        $this->object->setSecondName('Анников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анников,Анникова,Анникову,Анникова,Анниковым,Анникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname30()
    {
        $this->object->setSecondName('Анохин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анохин,Анохина,Анохину,Анохина,Анохиным,Анохине'), $this->object->getSecondNameCase());
    }
    public function testManSirname31()
    {
        $this->object->setSecondName('Аношкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аношкин,Аношкина,Аношкину,Аношкина,Аношкиным,Аношкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname32()
    {
        $this->object->setSecondName('Антипов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антипов,Антипова,Антипову,Антипова,Антиповым,Антипове'), $this->object->getSecondNameCase());
    }
    public function testManSirname33()
    {
        $this->object->setSecondName('Антонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонов,Антонова,Антонову,Антонова,Антоновым,Антонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname34()
    {
        $this->object->setSecondName('Антонович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонович,Антоновича,Антоновичу,Антоновича,Антоновичем,Антоновиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname35()
    {
        $this->object->setSecondName('Артамонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артамонов,Артамонова,Артамонову,Артамонова,Артамоновым,Артамонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname36()
    {
        $this->object->setSecondName('Арефьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арефьев,Арефьева,Арефьеву,Арефьева,Арефьевым,Арефьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname37()
    {
        $this->object->setSecondName('Аристархов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аристархов,Аристархова,Аристархову,Аристархова,Аристарховым,Аристархове'), $this->object->getSecondNameCase());
    }
    public function testManSirname38()
    {
        $this->object->setSecondName('Арсеньев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсеньев,Арсеньева,Арсеньеву,Арсеньева,Арсеньевым,Арсеньеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname39()
    {
        $this->object->setSecondName('Артемов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артемов,Артемова,Артемову,Артемова,Артемовым,Артемове'), $this->object->getSecondNameCase());
    }
    public function testManSirname40()
    {
        $this->object->setSecondName('Асланов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Асланов,Асланова,Асланову,Асланова,Аслановым,Асланове'), $this->object->getSecondNameCase());
    }
    public function testManSirname41()
    {
        $this->object->setSecondName('Аслаханов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аслаханов,Аслаханова,Аслаханову,Аслаханова,Аслахановым,Аслаханове'), $this->object->getSecondNameCase());
    }
    public function testManSirname42()
    {
        $this->object->setSecondName('Астанков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Астанков,Астанкова,Астанкову,Астанкова,Астанковым,Астанкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname43()
    {
        $this->object->setSecondName('Астафьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Астафьев,Астафьева,Астафьеву,Астафьева,Астафьевым,Астафьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname44()
    {
        $this->object->setSecondName('Астахов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Астахов,Астахова,Астахову,Астахова,Астаховым,Астахове'), $this->object->getSecondNameCase());
    }
    public function testManSirname45()
    {
        $this->object->setSecondName('Афанасьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанасьев,Афанасьева,Афанасьеву,Афанасьева,Афанасьевым,Афанасьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname46()
    {
        $this->object->setSecondName('Афонин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афонин,Афонина,Афонину,Афонина,Афониным,Афонине'), $this->object->getSecondNameCase());
    }
    public function testManSirname47()
    {
        $this->object->setSecondName('Аспидов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аспидов,Аспидова,Аспидову,Аспидова,Аспидовым,Аспидове'), $this->object->getSecondNameCase());
    }
    public function testManSirname48()
    {
        $this->object->setSecondName('Бабатьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бабатьев,Бабатьева,Бабатьеву,Бабатьева,Бабатьевым,Бабатьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname49()
    {
        $this->object->setSecondName('Бабиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бабиков,Бабикова,Бабикову,Бабикова,Бабиковым,Бабикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname50()
    {
        $this->object->setSecondName('Бабичев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бабичев,Бабичева,Бабичеву,Бабичева,Бабичевым,Бабичеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname51()
    {
        $this->object->setSecondName('Бабкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бабкин,Бабкина,Бабкину,Бабкина,Бабкиным,Бабкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname52()
    {
        $this->object->setSecondName('Багров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Багров,Багрова,Багрову,Багрова,Багровым,Багрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname53()
    {
        $this->object->setSecondName('Бакрылов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бакрылов,Бакрылова,Бакрылову,Бакрылова,Бакрыловым,Бакрылове'), $this->object->getSecondNameCase());
    }
    public function testManSirname54()
    {
        $this->object->setSecondName('Бажанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бажанов,Бажанова,Бажанову,Бажанова,Бажановым,Бажанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname55()
    {
        $this->object->setSecondName('Баженов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баженов,Баженова,Баженову,Баженова,Баженовым,Баженове'), $this->object->getSecondNameCase());
    }
    public function testManSirname56()
    {
        $this->object->setSecondName('Базанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Базанов,Базанова,Базанову,Базанова,Базановым,Базанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname57()
    {
        $this->object->setSecondName('Базаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Базаров,Базарова,Базарову,Базарова,Базаровым,Базарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname58()
    {
        $this->object->setSecondName('Балакин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Балакин,Балакина,Балакину,Балакина,Балакиным,Балакине'), $this->object->getSecondNameCase());
    }
    public function testManSirname59()
    {
        $this->object->setSecondName('Балахнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Балахнов,Балахнова,Балахнову,Балахнова,Балахновым,Балахнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname60()
    {
        $this->object->setSecondName('Балашов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Балашов,Балашова,Балашову,Балашова,Балашовым,Балашове'), $this->object->getSecondNameCase());
    }
    public function testManSirname61()
    {
        $this->object->setSecondName('Баранов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баранов,Баранова,Баранову,Баранова,Барановым,Баранове'), $this->object->getSecondNameCase());
    }
    public function testManSirname62()
    {
        $this->object->setSecondName('Барболин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Барболин,Барболина,Барболину,Барболина,Барболиным,Барболине'), $this->object->getSecondNameCase());
    }
    public function testManSirname63()
    {
        $this->object->setSecondName('Баренцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баренцев,Баренцева,Баренцеву,Баренцева,Баренцевым,Баренцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname64()
    {
        $this->object->setSecondName('Баринов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баринов,Баринова,Баринову,Баринова,Бариновым,Баринове'), $this->object->getSecondNameCase());
    }
    public function testManSirname65()
    {
        $this->object->setSecondName('Барков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Барков,Баркова,Баркову,Баркова,Барковым,Баркове'), $this->object->getSecondNameCase());
    }
    public function testManSirname66()
    {
        $this->object->setSecondName('Барсуков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Барсуков,Барсукова,Барсукову,Барсукова,Барсуковым,Барсукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname67()
    {
        $this->object->setSecondName('Батрутдинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Батрутдинов,Батрутдинова,Батрутдинову,Батрутдинова,Батрутдиновым,Батрутдинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname68()
    {
        $this->object->setSecondName('Безбородов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Безбородов,Безбородова,Безбородову,Безбородова,Безбородовым,Безбородове'), $this->object->getSecondNameCase());
    }
    public function testManSirname69()
    {
        $this->object->setSecondName('Безродный');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Безродный,Безродного,Безродному,Безродного,Безродным,Безродном'), $this->object->getSecondNameCase());
    }
    public function testManSirname70()
    {
        $this->object->setSecondName('Безруков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Безруков,Безрукова,Безрукову,Безрукова,Безруковым,Безрукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname71()
    {
        $this->object->setSecondName('Безукладников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Безукладников,Безукладникова,Безукладникову,Безукладникова,Безукладниковым,Безукладникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname72()
    {
        $this->object->setSecondName('Беликов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Беликов,Беликова,Беликову,Беликова,Беликовым,Беликове'), $this->object->getSecondNameCase());
    }
    public function testManSirname73()
    {
        $this->object->setSecondName('Белов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Белов,Белова,Белову,Белова,Беловым,Белове'), $this->object->getSecondNameCase());
    }
    public function testManSirname74()
    {
        $this->object->setSecondName('Беломестнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Беломестнов,Беломестнова,Беломестнову,Беломестнова,Беломестновым,Беломестнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname75()
    {
        $this->object->setSecondName('Бендлин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бендлин,Бендлина,Бендлину,Бендлина,Бендлином,Бендлине'), $this->object->getSecondNameCase());
    }
    public function testManSirname76()
    {
        $this->object->setSecondName('Бережной');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бережной,Бережного,Бережному,Бережного,Бережным,Бережном'), $this->object->getSecondNameCase());
    }
    public function testManSirname77()
    {
        $this->object->setSecondName('Белоусов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Белоусов,Белоусова,Белоусову,Белоусова,Белоусовым,Белоусове'), $this->object->getSecondNameCase());
    }
    public function testManSirname78()
    {
        $this->object->setSecondName('Бершов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бершов,Бершова,Бершову,Бершова,Бершовым,Бершове'), $this->object->getSecondNameCase());
    }
    public function testManSirname79()
    {
        $this->object->setSecondName('Беспалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Беспалов,Беспалова,Беспалову,Беспалова,Беспаловым,Беспалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname80()
    {
        $this->object->setSecondName('Бескрестнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бескрестнов,Бескрестнова,Бескрестнову,Бескрестнова,Бескрестновым,Бескрестнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname81()
    {
        $this->object->setSecondName('Бирюков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бирюков,Бирюкова,Бирюкову,Бирюкова,Бирюковым,Бирюкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname82()
    {
        $this->object->setSecondName('Блаженов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Блаженов,Блаженова,Блаженову,Блаженова,Блаженовым,Блаженове'), $this->object->getSecondNameCase());
    }
    public function testManSirname83()
    {
        $this->object->setSecondName('Блатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Блатов,Блатова,Блатову,Блатова,Блатовым,Блатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname84()
    {
        $this->object->setSecondName('Блинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Блинов,Блинова,Блинову,Блинова,Блиновым,Блинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname85()
    {
        $this->object->setSecondName('Блохин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Блохин,Блохина,Блохину,Блохина,Блохиным,Блохине'), $this->object->getSecondNameCase());
    }
    public function testManSirname86()
    {
        $this->object->setSecondName('Бобр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бобр,Бобра,Бобру,Бобра,Бобром,Бобре'), $this->object->getSecondNameCase());
    }
    public function testManSirname87()
    {
        $this->object->setSecondName('Бобров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бобров,Боброва,Боброву,Боброва,Бобровым,Боброве'), $this->object->getSecondNameCase());
    }
    public function testManSirname88()
    {
        $this->object->setSecondName('Богатырев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богатырев,Богатырева,Богатыреву,Богатырева,Богатыревым,Богатыреве'), $this->object->getSecondNameCase());
    }
    public function testManSirname89()
    {
        $this->object->setSecondName('Богданов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданов,Богданова,Богданову,Богданова,Богдановым,Богданове'), $this->object->getSecondNameCase());
    }
    public function testManSirname90()
    {
        $this->object->setSecondName('Боголепов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боголепов,Боголепова,Боголепову,Боголепова,Боголеповым,Боголепове'), $this->object->getSecondNameCase());
    }
    public function testManSirname91()
    {
        $this->object->setSecondName('Боголюбов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боголюбов,Боголюбова,Боголюбову,Боголюбова,Боголюбовым,Боголюбове'), $this->object->getSecondNameCase());
    }
    public function testManSirname92()
    {
        $this->object->setSecondName('Богомазов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богомазов,Богомазова,Богомазову,Богомазова,Богомазовым,Богомазове'), $this->object->getSecondNameCase());
    }
    public function testManSirname93()
    {
        $this->object->setSecondName('Богомолов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богомолов,Богомолова,Богомолову,Богомолова,Богомоловым,Богомолове'), $this->object->getSecondNameCase());
    }
    public function testManSirname94()
    {
        $this->object->setSecondName('Богров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богров,Богрова,Богрову,Богрова,Богровым,Богрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname95()
    {
        $this->object->setSecondName('Бойков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бойков,Бойкова,Бойкову,Бойкова,Бойковым,Бойкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname96()
    {
        $this->object->setSecondName('Болотников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Болотников,Болотникова,Болотникову,Болотникова,Болотниковым,Болотникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname97()
    {
        $this->object->setSecondName('Болтоногов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Болтоногов,Болтоногова,Болтоногову,Болтоногова,Болтоноговым,Болтоногове'), $this->object->getSecondNameCase());
    }
    public function testManSirname98()
    {
        $this->object->setSecondName('Большов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Большов,Большова,Большову,Большова,Большовым,Большове'), $this->object->getSecondNameCase());
    }
    public function testManSirname99()
    {
        $this->object->setSecondName('Бореев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бореев,Бореева,Борееву,Бореева,Бореевым,Борееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname100()
    {
        $this->object->setSecondName('Бортник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бортник,Бортника,Бортнику,Бортника,Бортником,Бортнике'), $this->object->getSecondNameCase());
    }
    public function testManSirname101()
    {
        $this->object->setSecondName('Борзилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борзилов,Борзилова,Борзилову,Борзилова,Борзиловым,Борзилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname102()
    {
        $this->object->setSecondName('Борцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борцов,Борцова,Борцову,Борцова,Борцовым,Борцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname103()
    {
        $this->object->setSecondName('Брагин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Брагин,Брагина,Брагину,Брагина,Брагиным,Брагине'), $this->object->getSecondNameCase());
    }
    public function testManSirname104()
    {
        $this->object->setSecondName('Брежнев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Брежнев,Брежнева,Брежневу,Брежнева,Брежневым,Брежневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname105()
    {
        $this->object->setSecondName('Бугаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бугаков,Бугакова,Бугакову,Бугакова,Бугаковым,Бугакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname106()
    {
        $this->object->setSecondName('Буданов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Буданов,Буданова,Буданову,Буданова,Будановым,Буданове'), $this->object->getSecondNameCase());
    }
    public function testManSirname107()
    {
        $this->object->setSecondName('Будников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Будников,Будникова,Будникову,Будникова,Будниковым,Будникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname108()
    {
        $this->object->setSecondName('Будылин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Будылин,Будылина,Будылину,Будылина,Будылином,Будылине'), $this->object->getSecondNameCase());
    }
    public function testManSirname109()
    {
        $this->object->setSecondName('Букин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Букин,Букина,Букину,Букина,Букиным,Букине'), $this->object->getSecondNameCase());
    }
    public function testManSirname110()
    {
        $this->object->setSecondName('Букирь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Букирь,Букирь,Букирь,Букирь,Букирь,Букирь'), $this->object->getSecondNameCase());
    }
    public function testManSirname111()
    {
        $this->object->setSecondName('Буклин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Буклин,Буклина,Буклину,Буклина,Буклиным,Буклине'), $this->object->getSecondNameCase());
    }
    public function testManSirname112()
    {
        $this->object->setSecondName('Булгаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Булгаков,Булгакова,Булгакову,Булгакова,Булгаковым,Булгакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname113()
    {
        $this->object->setSecondName('Бунин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бунин,Бунина,Бунину,Бунина,Буниным,Бунине'), $this->object->getSecondNameCase());
    }
    public function testManSirname114()
    {
        $this->object->setSecondName('Бурков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бурков,Буркова,Буркову,Буркова,Бурковым,Буркове'), $this->object->getSecondNameCase());
    }
    public function testManSirname115()
    {
        $this->object->setSecondName('Буров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Буров,Бурова,Бурову,Бурова,Буровым,Бурове'), $this->object->getSecondNameCase());
    }
    public function testManSirname116()
    {
        $this->object->setSecondName('Бурцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бурцов,Бурцова,Бурцову,Бурцова,Бурцовым,Бурцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname117()
    {
        $this->object->setSecondName('Буряков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Буряков,Бурякова,Бурякову,Бурякова,Буряковым,Бурякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname118()
    {
        $this->object->setSecondName('Бутылин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бутылин,Бутылина,Бутылину,Бутылина,Бутылином,Бутылине'), $this->object->getSecondNameCase());
    }
    public function testManSirname119()
    {
        $this->object->setSecondName('Былинкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Былинкин,Былинкина,Былинкину,Былинкина,Былинкиным,Былинкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname120()
    {
        $this->object->setSecondName('Бычков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бычков,Бычкова,Бычкову,Бычкова,Бычковым,Бычкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname121()
    {
        $this->object->setSecondName('Вавилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вавилов,Вавилова,Вавилову,Вавилова,Вавиловым,Вавилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname122()
    {
        $this->object->setSecondName('Вагин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вагин,Вагина,Вагину,Вагина,Вагиным,Вагине'), $this->object->getSecondNameCase());
    }
    public function testManSirname123()
    {
        $this->object->setSecondName('Вазов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вазов,Вазова,Вазову,Вазова,Вазовым,Вазове'), $this->object->getSecondNameCase());
    }
    public function testManSirname124()
    {
        $this->object->setSecondName('Валевач');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валевач,Валевача,Валевачу,Валевача,Валевачом,Валеваче'), $this->object->getSecondNameCase());
    }
    public function testManSirname125()
    {
        $this->object->setSecondName('Варенников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Варенников,Варенникова,Варенникову,Варенникова,Варенниковым,Варенникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname126()
    {
        $this->object->setSecondName('Васильев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильев,Васильева,Васильеву,Васильева,Васильевым,Васильеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname127()
    {
        $this->object->setSecondName('Васин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васин,Васина,Васину,Васина,Васиным,Васине'), $this->object->getSecondNameCase());
    }
    public function testManSirname128()
    {
        $this->object->setSecondName('Васнев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васнев,Васнева,Васневу,Васнева,Васневым,Васневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname129()
    {
        $this->object->setSecondName('Васнецов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васнецов,Васнецова,Васнецову,Васнецова,Васнецовым,Васнецове'), $this->object->getSecondNameCase());
    }
    public function testManSirname130()
    {
        $this->object->setSecondName('Вахров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вахров,Вахрова,Вахрову,Вахрова,Вахровом,Вахрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname131()
    {
        $this->object->setSecondName('Вахрушев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вахрушев,Вахрушева,Вахрушеву,Вахрушева,Вахрушевым,Вахрушеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname132()
    {
        $this->object->setSecondName('Венедиктов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Венедиктов,Венедиктова,Венедиктову,Венедиктова,Венедиктовым,Венедиктове'), $this->object->getSecondNameCase());
    }
    public function testManSirname133()
    {
        $this->object->setSecondName('Веденеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Веденеев,Веденеева,Веденееву,Веденеева,Веденеевым,Веденееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname134()
    {
        $this->object->setSecondName('Веденин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Веденин,Веденина,Веденину,Веденина,Ведениным,Веденине'), $this->object->getSecondNameCase());
    }
    public function testManSirname135()
    {
        $this->object->setSecondName('Ведерников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ведерников,Ведерникова,Ведерникову,Ведерникова,Ведерниковым,Ведерникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname136()
    {
        $this->object->setSecondName('Вергунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вергунов,Вергунова,Вергунову,Вергунова,Вергуновым,Вергунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname137()
    {
        $this->object->setSecondName('Верещагин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Верещагин,Верещагина,Верещагину,Верещагина,Верещагиным,Верещагине'), $this->object->getSecondNameCase());
    }
    public function testManSirname138()
    {
        $this->object->setSecondName('Вершинин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вершинин,Вершинина,Вершинину,Вершинина,Вершининым,Вершинине'), $this->object->getSecondNameCase());
    }
    public function testManSirname139()
    {
        $this->object->setSecondName('Веселов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Веселов,Веселова,Веселову,Веселова,Веселовым,Веселове'), $this->object->getSecondNameCase());
    }
    public function testManSirname140()
    {
        $this->object->setSecondName('Викашев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викашев,Викашева,Викашеву,Викашева,Викашевым,Викашеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname141()
    {
        $this->object->setSecondName('Виноградов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Виноградов,Виноградова,Виноградову,Виноградова,Виноградовым,Виноградове'), $this->object->getSecondNameCase());
    }
    public function testManSirname142()
    {
        $this->object->setSecondName('Винокуров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Винокуров,Винокурова,Винокурову,Винокурова,Винокуровым,Винокурове'), $this->object->getSecondNameCase());
    }
    public function testManSirname143()
    {
        $this->object->setSecondName('Витаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Витаев,Витаева,Витаеву,Витаева,Витаевым,Витаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname144()
    {
        $this->object->setSecondName('Витвинин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Витвинин,Витвинина,Витвинину,Витвинина,Витвининым,Витвинине'), $this->object->getSecondNameCase());
    }
    public function testManSirname145()
    {
        $this->object->setSecondName('Вицин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вицин,Вицина,Вицину,Вицина,Вициным,Вицине'), $this->object->getSecondNameCase());
    }
    public function testManSirname146()
    {
        $this->object->setSecondName('Водоватов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Водоватов,Водоватова,Водоватову,Водоватова,Водоватовым,Водоватове'), $this->object->getSecondNameCase());
    }
    public function testManSirname147()
    {
        $this->object->setSecondName('Воликов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воликов,Воликова,Воликову,Воликова,Воликовым,Воликове'), $this->object->getSecondNameCase());
    }
    public function testManSirname148()
    {
        $this->object->setSecondName('Волков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Волков,Волкова,Волкову,Волкова,Волковым,Волкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname149()
    {
        $this->object->setSecondName('Вольваков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вольваков,Вольвакова,Вольвакову,Вольвакова,Вольваковом,Вольвакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname150()
    {
        $this->object->setSecondName('Воробьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воробьев,Воробьева,Воробьеву,Воробьева,Воробьевым,Воробьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname151()
    {
        $this->object->setSecondName('Воронин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воронин,Воронина,Воронину,Воронина,Ворониным,Воронине'), $this->object->getSecondNameCase());
    }
    public function testManSirname152()
    {
        $this->object->setSecondName('Воронов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воронов,Воронова,Воронову,Воронова,Вороновым,Воронове'), $this->object->getSecondNameCase());
    }
    public function testManSirname153()
    {
        $this->object->setSecondName('Воронков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воронков,Воронкова,Воронкову,Воронкова,Воронковым,Воронкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname154()
    {
        $this->object->setSecondName('Воронцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воронцов,Воронцова,Воронцову,Воронцова,Воронцовым,Воронцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname155()
    {
        $this->object->setSecondName('Воскобойников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воскобойников,Воскобойникова,Воскобойникову,Воскобойникова,Воскобойниковым,Воскобойникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname156()
    {
        $this->object->setSecondName('Вотяков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вотяков,Вотякова,Вотякову,Вотякова,Вотяковым,Вотякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname157()
    {
        $this->object->setSecondName('Вырыпаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вырыпаев,Вырыпаева,Вырыпаеву,Вырыпаева,Вырыпаевым,Вырыпаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname158()
    {
        $this->object->setSecondName('Гавриков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гавриков,Гаврикова,Гаврикову,Гаврикова,Гавриковым,Гаврикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname159()
    {
        $this->object->setSecondName('Гаврилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гаврилов,Гаврилова,Гаврилову,Гаврилова,Гавриловым,Гаврилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname160()
    {
        $this->object->setSecondName('Гагарин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гагарин,Гагарина,Гагарину,Гагарина,Гагариным,Гагарине'), $this->object->getSecondNameCase());
    }
    public function testManSirname161()
    {
        $this->object->setSecondName('Гаголин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гаголин,Гаголина,Гаголину,Гаголина,Гаголиным,Гаголине'), $this->object->getSecondNameCase());
    }
    public function testManSirname162()
    {
        $this->object->setSecondName('Галдин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Галдин,Галдина,Галдину,Галдина,Галдиным,Галдине'), $this->object->getSecondNameCase());
    }
    public function testManSirname163()
    {
        $this->object->setSecondName('Галкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Галкин,Галкина,Галкину,Галкина,Галкиным,Галкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname164()
    {
        $this->object->setSecondName('Галыгин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Галыгин,Галыгина,Галыгину,Галыгина,Галыгиным,Галыгине'), $this->object->getSecondNameCase());
    }
    public function testManSirname165()
    {
        $this->object->setSecondName('Гарин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гарин,Гарина,Гарину,Гарина,Гариным,Гарине'), $this->object->getSecondNameCase());
    }
    public function testManSirname166()
    {
        $this->object->setSecondName('Гачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гачев,Гачева,Гачеву,Гачева,Гачевым,Гачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname167()
    {
        $this->object->setSecondName('Генкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Генкин,Генкина,Генкину,Генкина,Генкиным,Генкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname168()
    {
        $this->object->setSecondName('Герасимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герасимов,Герасимова,Герасимову,Герасимова,Герасимовым,Герасимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname169()
    {
        $this->object->setSecondName('Гибазов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гибазов,Гибазова,Гибазову,Гибазова,Гибазовым,Гибазове'), $this->object->getSecondNameCase());
    }
    public function testManSirname170()
    {
        $this->object->setSecondName('Гилев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гилев,Гилева,Гилеву,Гилева,Гилевым,Гилеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname171()
    {
        $this->object->setSecondName('Глазков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Глазков,Глазкова,Глазкову,Глазкова,Глазковым,Глазкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname172()
    {
        $this->object->setSecondName('Голованов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Голованов,Голованова,Голованову,Голованова,Головановым,Голованове'), $this->object->getSecondNameCase());
    }
    public function testManSirname173()
    {
        $this->object->setSecondName('Головин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Головин,Головина,Головину,Головина,Головиным,Головине'), $this->object->getSecondNameCase());
    }
    public function testManSirname174()
    {
        $this->object->setSecondName('Голодяев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Голодяев,Голодяева,Голодяеву,Голодяева,Голодяевым,Голодяеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname175()
    {
        $this->object->setSecondName('Голубев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Голубев,Голубева,Голубеву,Голубева,Голубевым,Голубеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname176()
    {
        $this->object->setSecondName('Голубов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Голубов,Голубова,Голубову,Голубова,Голубовым,Голубове'), $this->object->getSecondNameCase());
    }
    public function testManSirname177()
    {
        $this->object->setSecondName('Голубцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Голубцов,Голубцова,Голубцову,Голубцова,Голубцовым,Голубцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname178()
    {
        $this->object->setSecondName('Гончаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гончаров,Гончарова,Гончарову,Гончарова,Гончаровым,Гончарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname179()
    {
        $this->object->setSecondName('Горбачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горбачев,Горбачева,Горбачеву,Горбачева,Горбачевым,Горбачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname180()
    {
        $this->object->setSecondName('Горбунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горбунов,Горбунова,Горбунову,Горбунова,Горбуновым,Горбунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname181()
    {
        $this->object->setSecondName('Горбунков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горбунков,Горбункова,Горбункову,Горбункова,Горбунковым,Горбункове'), $this->object->getSecondNameCase());
    }
    public function testManSirname182()
    {
        $this->object->setSecondName('Горев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горев,Горева,Гореву,Горева,Горевым,Гореве'), $this->object->getSecondNameCase());
    }
    public function testManSirname183()
    {
        $this->object->setSecondName('Горелов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горелов,Горелова,Горелову,Горелова,Гореловым,Горелове'), $this->object->getSecondNameCase());
    }
    public function testManSirname184()
    {
        $this->object->setSecondName('Горемыкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горемыкин,Горемыкина,Горемыкину,Горемыкина,Горемыкиным,Горемыкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname185()
    {
        $this->object->setSecondName('Горюнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горюнов,Горюнова,Горюнову,Горюнова,Горюновым,Горюнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname186()
    {
        $this->object->setSecondName('Грачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грачев,Грачева,Грачеву,Грачева,Грачевым,Грачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname187()
    {
        $this->object->setSecondName('Графов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Графов,Графова,Графову,Графова,Графовым,Графове'), $this->object->getSecondNameCase());
    }
    public function testManSirname188()
    {
        $this->object->setSecondName('Гретченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гретченко,Гретченко,Гретченко,Гретченко,Гретченко,Гретченко'), $this->object->getSecondNameCase());
    }
    public function testManSirname189()
    {
        $this->object->setSecondName('Гречко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гречко,Гречко,Гречко,Гречко,Гречко,Гречко'), $this->object->getSecondNameCase());
    }
    public function testManSirname190()
    {
        $this->object->setSecondName('Грешнев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грешнев,Грешнева,Грешневу,Грешнева,Грешневым,Грешневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname191()
    {
        $this->object->setSecondName('Грибов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грибов,Грибова,Грибову,Грибова,Грибовым,Грибове'), $this->object->getSecondNameCase());
    }
    public function testManSirname192()
    {
        $this->object->setSecondName('Грибоедов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грибоедов,Грибоедова,Грибоедову,Грибоедова,Грибоедовым,Грибоедове'), $this->object->getSecondNameCase());
    }
    public function testManSirname193()
    {
        $this->object->setSecondName('Григорьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорьев,Григорьева,Григорьеву,Григорьева,Григорьевым,Григорьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname194()
    {
        $this->object->setSecondName('Гринин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гринин,Гринина,Гринину,Гринина,Грининым,Гринине'), $this->object->getSecondNameCase());
    }
    public function testManSirname195()
    {
        $this->object->setSecondName('Гришин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гришин,Гришина,Гришину,Гришина,Гришиным,Гришине'), $this->object->getSecondNameCase());
    }
    public function testManSirname196()
    {
        $this->object->setSecondName('Громов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Громов,Громова,Громову,Громова,Громовым,Громове'), $this->object->getSecondNameCase());
    }
    public function testManSirname197()
    {
        $this->object->setSecondName('Громыко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Громыко,Громыко,Громыко,Громыко,Громыко,Громыко'), $this->object->getSecondNameCase());
    }
    public function testManSirname198()
    {
        $this->object->setSecondName('Гулин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гулин,Гулина,Гулину,Гулина,Гулиным,Гулине'), $this->object->getSecondNameCase());
    }
    public function testManSirname199()
    {
        $this->object->setSecondName('Гурьянов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гурьянов,Гурьянова,Гурьянову,Гурьянова,Гурьяновым,Гурьянове'), $this->object->getSecondNameCase());
    }
    public function testManSirname200()
    {
        $this->object->setSecondName('Гусаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гусаров,Гусарова,Гусарову,Гусарова,Гусаровым,Гусарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname201()
    {
        $this->object->setSecondName('Гусев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гусев,Гусева,Гусеву,Гусева,Гусевым,Гусеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname202()
    {
        $this->object->setSecondName('Гунин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гунин,Гунина,Гунину,Гунина,Гуниным,Гунине'), $this->object->getSecondNameCase());
    }
    public function testManSirname203()
    {
        $this->object->setSecondName('Гущин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гущин,Гущина,Гущину,Гущина,Гущиным,Гущине'), $this->object->getSecondNameCase());
    }
    public function testManSirname204()
    {
        $this->object->setSecondName('Головаха');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Головаха,Головахи,Головахе,Головаху,Головахой,Головахе'), $this->object->getSecondNameCase());
    }
    public function testManSirname205()
    {
        $this->object->setSecondName('Дорофеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорофеев,Дорофеева,Дорофееву,Дорофеева,Дорофеевым,Дорофееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname206()
    {
        $this->object->setSecondName('Давыдкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давыдкин,Давыдкина,Давыдкину,Давыдкина,Давыдкиным,Давыдкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname207()
    {
        $this->object->setSecondName('Данильцин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данильцин,Данильцина,Данильцину,Данильцина,Данильциным,Данильцине'), $this->object->getSecondNameCase());
    }
    public function testManSirname208()
    {
        $this->object->setSecondName('Дворников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дворников,Дворникова,Дворникову,Дворникова,Дворниковым,Дворникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname209()
    {
        $this->object->setSecondName('Деменок');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Деменок,Деменка,Деменку,Деменка,Деменком,Деменке'), $this->object->getSecondNameCase());
    }
    public function testManSirname210()
    {
        $this->object->setSecondName('Дементьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дементьев,Дементьева,Дементьеву,Дементьева,Дементьевым,Дементьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname211()
    {
        $this->object->setSecondName('Демидов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демидов,Демидова,Демидову,Демидова,Демидовым,Демидове'), $this->object->getSecondNameCase());
    }
    public function testManSirname212()
    {
        $this->object->setSecondName('Деникин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Деникин,Деникина,Деникину,Деникина,Деникиным,Деникине'), $this->object->getSecondNameCase());
    }
    public function testManSirname213()
    {
        $this->object->setSecondName('Дегтин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дегтин,Дегтина,Дегтину,Дегтина,Дегтином,Дегтине'), $this->object->getSecondNameCase());
    }
    public function testManSirname214()
    {
        $this->object->setSecondName('Дегтярев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дегтярев,Дегтярева,Дегтяреву,Дегтярева,Дегтяревом,Дегтяреве'), $this->object->getSecondNameCase());
    }
    public function testManSirname215()
    {
        $this->object->setSecondName('Дежнев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дежнев,Дежнева,Дежневу,Дежнева,Дежневым,Дежневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname216()
    {
        $this->object->setSecondName('Делов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Делов,Делова,Делову,Делова,Деловым,Делове'), $this->object->getSecondNameCase());
    }
    public function testManSirname217()
    {
        $this->object->setSecondName('Дементьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дементьев,Дементьева,Дементьеву,Дементьева,Дементьевым,Дементьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname218()
    {
        $this->object->setSecondName('Демин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демин,Демина,Демину,Демина,Деминым,Демине'), $this->object->getSecondNameCase());
    }
    public function testManSirname219()
    {
        $this->object->setSecondName('Державин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Державин,Державина,Державину,Державина,Державином,Державине'), $this->object->getSecondNameCase());
    }
    public function testManSirname220()
    {
        $this->object->setSecondName('Дернов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дернов,Дернова,Дернову,Дернова,Дерновым,Дернове'), $this->object->getSecondNameCase());
    }
    public function testManSirname221()
    {
        $this->object->setSecondName('Десятков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Десятков,Десяткова,Десяткову,Десяткова,Десятковым,Десяткове'), $this->object->getSecondNameCase());
    }
    public function testManSirname222()
    {
        $this->object->setSecondName('Дмитриев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитриев,Дмитриева,Дмитриеву,Дмитриева,Дмитриевым,Дмитриеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname223()
    {
        $this->object->setSecondName('Добронравов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добронравов,Добронравова,Добронравову,Добронравова,Добронравовым,Добронравове'), $this->object->getSecondNameCase());
    }
    public function testManSirname224()
    {
        $this->object->setSecondName('Добрынин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добрынин,Добрынина,Добрынину,Добрынина,Добрыниным,Добрынине'), $this->object->getSecondNameCase());
    }
    public function testManSirname225()
    {
        $this->object->setSecondName('Долгоруков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Долгоруков,Долгорукова,Долгорукову,Долгорукова,Долгоруковым,Долгорукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname226()
    {
        $this->object->setSecondName('Должиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Должиков,Должикова,Должикову,Должикова,Должиковым,Должикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname227()
    {
        $this->object->setSecondName('Домашев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Домашев,Домашева,Домашеву,Домашева,Домашевым,Домашеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname228()
    {
        $this->object->setSecondName('Достовалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Достовалов,Достовалова,Достовалову,Достовалова,Достоваловым,Достовалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname229()
    {
        $this->object->setSecondName('Драгомиров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Драгомиров,Драгомирова,Драгомирову,Драгомирова,Драгомировым,Драгомирове'), $this->object->getSecondNameCase());
    }
    public function testManSirname230()
    {
        $this->object->setSecondName('Дресвянин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дресвянин,Дресвянина,Дресвянину,Дресвянина,Дресвяниным,Дресвянине'), $this->object->getSecondNameCase());
    }
    public function testManSirname231()
    {
        $this->object->setSecondName('Дремов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дремов,Дремова,Дремову,Дремова,Дремовым,Дремове'), $this->object->getSecondNameCase());
    }
    public function testManSirname232()
    {
        $this->object->setSecondName('Друганин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Друганин,Друганина,Друганину,Друганина,Друганиным,Друганине'), $this->object->getSecondNameCase());
    }
    public function testManSirname233()
    {
        $this->object->setSecondName('Другов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Другов,Другова,Другову,Другова,Друговым,Другове'), $this->object->getSecondNameCase());
    }
    public function testManSirname234()
    {
        $this->object->setSecondName('Дубинин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дубинин,Дубинина,Дубинину,Дубинина,Дубининым,Дубинине'), $this->object->getSecondNameCase());
    }
    public function testManSirname235()
    {
        $this->object->setSecondName('Дубов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дубов,Дубова,Дубову,Дубова,Дубовым,Дубове'), $this->object->getSecondNameCase());
    }
    public function testManSirname236()
    {
        $this->object->setSecondName('Дубровский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дубровский,Дубровского,Дубровскому,Дубровского,Дубровским,Дубровском'), $this->object->getSecondNameCase());
    }
    public function testManSirname237()
    {
        $this->object->setSecondName('Дульцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дульцев,Дульцева,Дульцеву,Дульцева,Дульцевым,Дульцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname238()
    {
        $this->object->setSecondName('Думановский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Думановский,Думановского,Думановскому,Думановского,Думановским,Думановском'), $this->object->getSecondNameCase());
    }
    public function testManSirname239()
    {
        $this->object->setSecondName('Дуров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дуров,Дурова,Дурову,Дурова,Дуровым,Дурове'), $this->object->getSecondNameCase());
    }
    public function testManSirname240()
    {
        $this->object->setSecondName('Дятлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дятлов,Дятлова,Дятлову,Дятлова,Дятловым,Дятлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname241()
    {
        $this->object->setSecondName('Евдокимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евдокимов,Евдокимова,Евдокимову,Евдокимова,Евдокимовым,Евдокимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname242()
    {
        $this->object->setSecondName('Евстигнеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евстигнеев,Евстигнеева,Евстигнееву,Евстигнеева,Евстигнеевым,Евстигнееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname243()
    {
        $this->object->setSecondName('Егоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егоров,Егорова,Егорову,Егорова,Егоровым,Егорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname244()
    {
        $this->object->setSecondName('Едемский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Едемский,Едемского,Едемскому,Едемского,Едемским,Едемском'), $this->object->getSecondNameCase());
    }
    public function testManSirname245()
    {
        $this->object->setSecondName('Ежов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ежов,Ежова,Ежову,Ежова,Ежовым,Ежове'), $this->object->getSecondNameCase());
    }
    public function testManSirname246()
    {
        $this->object->setSecondName('Елагин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елагин,Елагина,Елагину,Елагина,Елагиным,Елагине'), $this->object->getSecondNameCase());
    }
    public function testManSirname247()
    {
        $this->object->setSecondName('Елизаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елизаров,Елизарова,Елизарову,Елизарова,Елизаровым,Елизарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname248()
    {
        $this->object->setSecondName('Елисеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елисеев,Елисеева,Елисееву,Елисеева,Елисеевым,Елисееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname249()
    {
        $this->object->setSecondName('Ельцин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ельцин,Ельцина,Ельцину,Ельцина,Ельциным,Ельцине'), $this->object->getSecondNameCase());
    }
    public function testManSirname250()
    {
        $this->object->setSecondName('Ельцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ельцов,Ельцова,Ельцову,Ельцова,Ельцовым,Ельцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname251()
    {
        $this->object->setSecondName('Емельяненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Емельяненко,Емельяненко,Емельяненко,Емельяненко,Емельяненко,Емельяненко'), $this->object->getSecondNameCase());
    }
    public function testManSirname252()
    {
        $this->object->setSecondName('Емельянов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Емельянов,Емельянова,Емельянову,Емельянова,Емельяновым,Емельянове'), $this->object->getSecondNameCase());
    }
    public function testManSirname253()
    {
        $this->object->setSecondName('Енин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Енин,Енина,Енину,Енина,Ениным,Енине'), $this->object->getSecondNameCase());
    }
    public function testManSirname254()
    {
        $this->object->setSecondName('Ерзов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ерзов,Ерзова,Ерзову,Ерзова,Ерзовым,Ерзове'), $this->object->getSecondNameCase());
    }
    public function testManSirname255()
    {
        $this->object->setSecondName('Ермаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермаков,Ермакова,Ермакову,Ермакова,Ермаковым,Ермакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname256()
    {
        $this->object->setSecondName('Ермилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермилов,Ермилова,Ермилову,Ермилова,Ермиловым,Ермилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname257()
    {
        $this->object->setSecondName('Еромеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еромеев,Еромеева,Еромееву,Еромеева,Еромеевым,Еромееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname258()
    {
        $this->object->setSecondName('Ерофеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ерофеев,Ерофеева,Ерофееву,Ерофеева,Ерофеевым,Ерофееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname259()
    {
        $this->object->setSecondName('Ершов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ершов,Ершова,Ершову,Ершова,Ершовым,Ершове'), $this->object->getSecondNameCase());
    }
    public function testManSirname260()
    {
        $this->object->setSecondName('Есипов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Есипов,Есипова,Есипову,Есипова,Есиповым,Есипове'), $this->object->getSecondNameCase());
    }
    public function testManSirname261()
    {
        $this->object->setSecondName('Ефимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимов,Ефимова,Ефимову,Ефимова,Ефимовым,Ефимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname262()
    {
        $this->object->setSecondName('Ефремов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефремов,Ефремова,Ефремову,Ефремова,Ефремовым,Ефремове'), $this->object->getSecondNameCase());
    }
    public function testManSirname263()
    {
        $this->object->setSecondName('Емелин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Емелин,Емелина,Емелину,Емелина,Емелиным,Емелине'), $this->object->getSecondNameCase());
    }
    public function testManSirname264()
    {
        $this->object->setSecondName('Ерохин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ерохин,Ерохина,Ерохину,Ерохина,Ерохиным,Ерохине'), $this->object->getSecondNameCase());
    }
    public function testManSirname265()
    {
        $this->object->setSecondName('Еремин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремин,Еремина,Еремину,Еремина,Ереминым,Еремине'), $this->object->getSecondNameCase());
    }
    public function testManSirname266()
    {
        $this->object->setSecondName('Ешевский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ешевский,Ешевского,Ешевскому,Ешевского,Ешевским,Ешевском'), $this->object->getSecondNameCase());
    }
    public function testManSirname267()
    {
        $this->object->setSecondName('Жабин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жабин,Жабина,Жабину,Жабина,Жабиным,Жабине'), $this->object->getSecondNameCase());
    }
    public function testManSirname268()
    {
        $this->object->setSecondName('Жарков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жарков,Жаркова,Жаркову,Жаркова,Жарковым,Жаркове'), $this->object->getSecondNameCase());
    }
    public function testManSirname269()
    {
        $this->object->setSecondName('Жарыхин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жарыхин,Жарыхина,Жарыхину,Жарыхина,Жарыхиным,Жарыхине'), $this->object->getSecondNameCase());
    }
    public function testManSirname270()
    {
        $this->object->setSecondName('Жвиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жвиков,Жвикова,Жвикову,Жвикова,Жвиковым,Жвикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname271()
    {
        $this->object->setSecondName('Жданов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жданов,Жданова,Жданову,Жданова,Ждановым,Жданове'), $this->object->getSecondNameCase());
    }
    public function testManSirname272()
    {
        $this->object->setSecondName('Жеглов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жеглов,Жеглова,Жеглову,Жеглова,Жегловым,Жеглове'), $this->object->getSecondNameCase());
    }
    public function testManSirname273()
    {
        $this->object->setSecondName('Железкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Железкин,Железкина,Железкину,Железкина,Железкиным,Железкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname274()
    {
        $this->object->setSecondName('Живенков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Живенков,Живенкова,Живенкову,Живенкова,Живенковым,Живенкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname275()
    {
        $this->object->setSecondName('Жиглов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жиглов,Жиглова,Жиглову,Жиглова,Жигловым,Жиглове'), $this->object->getSecondNameCase());
    }
    public function testManSirname276()
    {
        $this->object->setSecondName('Жигунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жигунов,Жигунова,Жигунову,Жигунова,Жигуновым,Жигунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname277()
    {
        $this->object->setSecondName('Жидков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жидков,Жидкова,Жидкову,Жидкова,Жидковым,Жидкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname278()
    {
        $this->object->setSecondName('Жикин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жикин,Жикина,Жикину,Жикина,Жикиным,Жикине'), $this->object->getSecondNameCase());
    }
    public function testManSirname279()
    {
        $this->object->setSecondName('Жилин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жилин,Жилина,Жилину,Жилина,Жилиным,Жилине'), $this->object->getSecondNameCase());
    }
    public function testManSirname280()
    {
        $this->object->setSecondName('Жилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жилов,Жилова,Жилову,Жилова,Жиловым,Жилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname281()
    {
        $this->object->setSecondName('Жолдин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жолдин,Жолдина,Жолдину,Жолдина,Жолдиным,Жолдине'), $this->object->getSecondNameCase());
    }
    public function testManSirname282()
    {
        $this->object->setSecondName('Жуков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жуков,Жукова,Жукову,Жукова,Жуковым,Жукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname283()
    {
        $this->object->setSecondName('Жутов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жутов,Жутова,Жутову,Жутова,Жутовым,Жутове'), $this->object->getSecondNameCase());
    }
    public function testManSirname284()
    {
        $this->object->setSecondName('Журавлев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Журавлев,Журавлева,Журавлеву,Журавлева,Журавлевым,Журавлеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname285()
    {
        $this->object->setSecondName('Журов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Журов,Журова,Журову,Журова,Журовым,Журове'), $this->object->getSecondNameCase());
    }
    public function testManSirname286()
    {
        $this->object->setSecondName('Заврагин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Заврагин,Заврагина,Заврагину,Заврагина,Заврагиным,Заврагине'), $this->object->getSecondNameCase());
    }
    public function testManSirname287()
    {
        $this->object->setSecondName('Завражин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Завражин,Завражина,Завражину,Завражина,Завражиным,Завражине'), $this->object->getSecondNameCase());
    }
    public function testManSirname288()
    {
        $this->object->setSecondName('Завражнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Завражнов,Завражнова,Завражнову,Завражнова,Завражновым,Завражнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname289()
    {
        $this->object->setSecondName('Завражный');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Завражный,Завражного,Завражному,Завражного,Завражным,Завражном'), $this->object->getSecondNameCase());
    }
    public function testManSirname290()
    {
        $this->object->setSecondName('Завразин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Завразин,Завразина,Завразину,Завразина,Завразиным,Завразине'), $this->object->getSecondNameCase());
    }
    public function testManSirname291()
    {
        $this->object->setSecondName('Завьялов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Завьялов,Завьялова,Завьялову,Завьялова,Завьяловым,Завьялове'), $this->object->getSecondNameCase());
    }
    public function testManSirname292()
    {
        $this->object->setSecondName('Задорнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Задорнов,Задорнова,Задорнову,Задорнова,Задорновым,Задорнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname293()
    {
        $this->object->setSecondName('Задорожный');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Задорожный,Задорожного,Задорожному,Задорожного,Задорожным,Задорожном'), $this->object->getSecondNameCase());
    }
    public function testManSirname294()
    {
        $this->object->setSecondName('Зайцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зайцев,Зайцева,Зайцеву,Зайцева,Зайцевым,Зайцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname295()
    {
        $this->object->setSecondName('Закревский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Закревский,Закревского,Закревскому,Закревского,Закревским,Закревском'), $this->object->getSecondNameCase());
    }
    public function testManSirname296()
    {
        $this->object->setSecondName('Закрятин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Закрятин,Закрятина,Закрятину,Закрятина,Закрятиным,Закрятине'), $this->object->getSecondNameCase());
    }
    public function testManSirname297()
    {
        $this->object->setSecondName('Захаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захаров,Захарова,Захарову,Захарова,Захаровым,Захарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname298()
    {
        $this->object->setSecondName('Захарьин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захарьин,Захарьина,Захарьину,Захарьина,Захарьиным,Захарьине'), $this->object->getSecondNameCase());
    }
    public function testManSirname299()
    {
        $this->object->setSecondName('Звягин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Звягин,Звягина,Звягину,Звягина,Звягиным,Звягине'), $this->object->getSecondNameCase());
    }
    public function testManSirname300()
    {
        $this->object->setSecondName('Земин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Земин,Земина,Земину,Земина,Земиным,Земине'), $this->object->getSecondNameCase());
    }
    public function testManSirname301()
    {
        $this->object->setSecondName('Зимин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зимин,Зимина,Зимину,Зимина,Зиминым,Зимине'), $this->object->getSecondNameCase());
    }
    public function testManSirname302()
    {
        $this->object->setSecondName('Золин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Золин,Золина,Золину,Золина,Золиным,Золине'), $this->object->getSecondNameCase());
    }
    public function testManSirname303()
    {
        $this->object->setSecondName('Зонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зонов,Зонова,Зонову,Зонова,Зоновым,Зонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname304()
    {
        $this->object->setSecondName('Зубков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зубков,Зубкова,Зубкову,Зубкова,Зубковым,Зубкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname305()
    {
        $this->object->setSecondName('Зубов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зубов,Зубова,Зубову,Зубова,Зубовым,Зубове'), $this->object->getSecondNameCase());
    }
    public function testManSirname306()
    {
        $this->object->setSecondName('Зуев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зуев,Зуева,Зуеву,Зуева,Зуевым,Зуеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname307()
    {
        $this->object->setSecondName('Зуйков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зуйков,Зуйкова,Зуйкову,Зуйкова,Зуйковым,Зуйкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname308()
    {
        $this->object->setSecondName('Зимняков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зимняков,Зимнякова,Зимнякову,Зимнякова,Зимняковым,Зимнякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname309()
    {
        $this->object->setSecondName('Зинченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зинченко,Зинченко,Зинченко,Зинченко,Зинченко,Зинченко'), $this->object->getSecondNameCase());
    }
    public function testManSirname310()
    {
        $this->object->setSecondName('Зыкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зыкин,Зыкина,Зыкину,Зыкина,Зыкиным,Зыкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname311()
    {
        $this->object->setSecondName('Зырянов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зырянов,Зырянова,Зырянову,Зырянова,Зыряновым,Зырянове'), $this->object->getSecondNameCase());
    }
    public function testManSirname312()
    {
        $this->object->setSecondName('Зюганов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зюганов,Зюганова,Зюганову,Зюганова,Зюгановым,Зюганове'), $this->object->getSecondNameCase());
    }
    public function testManSirname313()
    {
        $this->object->setSecondName('Зверев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зверев,Зверева,Звереву,Зверева,Зверевым,Звереве'), $this->object->getSecondNameCase());
    }
    public function testManSirname314()
    {
        $this->object->setSecondName('Игнаткович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнаткович,Игнатковича,Игнатковичу,Игнатковича,Игнатковичем,Игнатковиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname315()
    {
        $this->object->setSecondName('Ивазов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ивазов,Ивазова,Ивазову,Ивазова,Ивазовым,Ивазове'), $this->object->getSecondNameCase());
    }
    public function testManSirname316()
    {
        $this->object->setSecondName('Ивакин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ивакин,Ивакина,Ивакину,Ивакина,Ивакиным,Ивакине'), $this->object->getSecondNameCase());
    }
    public function testManSirname317()
    {
        $this->object->setSecondName('Ибрагимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ибрагимов,Ибрагимова,Ибрагимову,Ибрагимова,Ибрагимовым,Ибрагимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname318()
    {
        $this->object->setSecondName('Иванов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванов,Иванова,Иванову,Иванова,Ивановым,Иванове'), $this->object->getSecondNameCase());
    }
    public function testManSirname319()
    {
        $this->object->setSecondName('Иванков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иванков,Иванкова,Иванкову,Иванков,Иванковом,Иванкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname320()
    {
        $this->object->setSecondName('Ивашин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ивашин,Ивашина,Ивашину,Ивашина,Ивашиным,Ивашине'), $this->object->getSecondNameCase());
    }
    public function testManSirname321()
    {
        $this->object->setSecondName('Ивашов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ивашов,Ивашова,Ивашову,Ивашова,Ивашовым,Ивашове'), $this->object->getSecondNameCase());
    }
    public function testManSirname322()
    {
        $this->object->setSecondName('Ивкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ивкин,Ивкина,Ивкину,Ивкина,Ивкиным,Ивкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname323()
    {
        $this->object->setSecondName('Иволгин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иволгин,Иволгина,Иволгину,Иволгина,Иволгиным,Иволгине'), $this->object->getSecondNameCase());
    }
    public function testManSirname324()
    {
        $this->object->setSecondName('Игнатьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнатьев,Игнатьева,Игнатьеву,Игнатьева,Игнатьевым,Игнатьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname325()
    {
        $this->object->setSecondName('Игошин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игошин,Игошина,Игошину,Игошина,Игошиным,Игошине'), $this->object->getSecondNameCase());
    }
    public function testManSirname326()
    {
        $this->object->setSecondName('Исмайлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исмайлов,Исмайлова,Исмайлову,Исмайлова,Исмайловым,Исмайлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname327()
    {
        $this->object->setSecondName('Измайлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Измайлов,Измайлова,Измайлову,Измайлова,Измайловым,Измайлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname328()
    {
        $this->object->setSecondName('Иканов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иканов,Иканова,Иканову,Иканова,Икановым,Иканове'), $this->object->getSecondNameCase());
    }
    public function testManSirname329()
    {
        $this->object->setSecondName('Икашев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Икашев,Икашева,Икашеву,Икашева,Икашевым,Икашеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname330()
    {
        $this->object->setSecondName('Ильин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильин,Ильина,Ильину,Ильина,Ильиным,Ильине'), $this->object->getSecondNameCase());
    }
    public function testManSirname331()
    {
        $this->object->setSecondName('Илькун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Илькун,Илькуна,Илькуну,Илькуна,Илькуном,Илькуне'), $this->object->getSecondNameCase());
    }
    public function testManSirname332()
    {
        $this->object->setSecondName('Илюшин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Илюшин,Илюшина,Илюшину,Илюшина,Илюшиным,Илюшине'), $this->object->getSecondNameCase());
    }
    public function testManSirname333()
    {
        $this->object->setSecondName('Ильюшин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильюшин,Ильюшина,Ильюшину,Ильюшина,Ильюшиным,Ильюшине'), $this->object->getSecondNameCase());
    }
    public function testManSirname334()
    {
        $this->object->setSecondName('Иноземцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иноземцев,Иноземцева,Иноземцеву,Иноземцева,Иноземцевым,Иноземцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname335()
    {
        $this->object->setSecondName('Ипатьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ипатьев,Ипатьева,Ипатьеву,Ипатьева,Ипатьевым,Ипатьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname336()
    {
        $this->object->setSecondName('Исаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исаев,Исаева,Исаеву,Исаева,Исаевым,Исаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname337()
    {
        $this->object->setSecondName('Истомин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Истомин,Истомина,Истомину,Истомина,Истоминым,Истомине'), $this->object->getSecondNameCase());
    }
    public function testManSirname338()
    {
        $this->object->setSecondName('Кабинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кабинов,Кабинова,Кабинову,Кабинова,Кабиновым,Кабинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname339()
    {
        $this->object->setSecondName('Каблуков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каблуков,Каблукова,Каблукову,Каблукова,Каблуковым,Каблукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname340()
    {
        $this->object->setSecondName('Каверин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каверин,Каверина,Каверину,Каверина,Кавериным,Каверине'), $this->object->getSecondNameCase());
    }
    public function testManSirname341()
    {
        $this->object->setSecondName('Кадников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кадников,Кадникова,Кадникову,Кадников,Кадниковом,Кадникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname342()
    {
        $this->object->setSecondName('Кадцын');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кадцын,Кадцына,Кадцыну,Кадцына,Кадцыном,Кадцыне'), $this->object->getSecondNameCase());
    }
    public function testManSirname343()
    {
        $this->object->setSecondName('Казаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казаков,Казакова,Казакову,Казакова,Казаковым,Казакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname344()
    {
        $this->object->setSecondName('Казанцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казанцев,Казанцева,Казанцеву,Казанцева,Казанцевым,Казанцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname345()
    {
        $this->object->setSecondName('Казарезов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казарезов,Казарезова,Казарезову,Казарезова,Казарезовым,Казарезове'), $this->object->getSecondNameCase());
    }
    public function testManSirname346()
    {
        $this->object->setSecondName('Калашник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калашник,Калашника,Калашнику,Калашника,Калашником,Калашнике'), $this->object->getSecondNameCase());
    }
    public function testManSirname347()
    {
        $this->object->setSecondName('Калганов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калганов,Калганова,Калганову,Калганова,Калгановым,Калганове'), $this->object->getSecondNameCase());
    }
    public function testManSirname348()
    {
        $this->object->setSecondName('Каменских');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каменских,Каменских,Каменских,Каменских,Каменских,Каменских'), $this->object->getSecondNameCase());
    }
    public function testManSirname349()
    {
        $this->object->setSecondName('Камкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Камкин,Камкина,Камкину,Камкина,Камкиным,Камкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname350()
    {
        $this->object->setSecondName('Каналин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каналин,Каналина,Каналину,Каналина,Каналиным,Каналине'), $this->object->getSecondNameCase());
    }
    public function testManSirname351()
    {
        $this->object->setSecondName('Кандинский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кандинский,Кандинского,Кандинскому,Кандинского,Кандинским,Кандинском'), $this->object->getSecondNameCase());
    }
    public function testManSirname352()
    {
        $this->object->setSecondName('Капица');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Капица,Капицы,Капице,Капицу,Капицей,Капице'), $this->object->getSecondNameCase());
    }
    public function testManSirname353()
    {
        $this->object->setSecondName('Капралов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Капралов,Капралова,Капралову,Капралова,Капраловым,Капралове'), $this->object->getSecondNameCase());
    }
    public function testManSirname354()
    {
        $this->object->setSecondName('Караваев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Караваев,Караваева,Караваеву,Караваева,Караваевым,Караваеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname355()
    {
        $this->object->setSecondName('Караулов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Караулов,Караулова,Караулову,Караулова,Карауловым,Караулове'), $this->object->getSecondNameCase());
    }
    public function testManSirname356()
    {
        $this->object->setSecondName('Карев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карев,Карева,Кареву,Карева,Каревым,Кареве'), $this->object->getSecondNameCase());
    }
    public function testManSirname357()
    {
        $this->object->setSecondName('Каретников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каретников,Каретникова,Каретникову,Каретникова,Каретниковым,Каретникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname358()
    {
        $this->object->setSecondName('Каргин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каргин,Каргина,Каргину,Каргина,Каргиным,Каргине'), $this->object->getSecondNameCase());
    }
    public function testManSirname359()
    {
        $this->object->setSecondName('Карташов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карташов,Карташова,Карташову,Карташова,Карташовым,Карташове'), $this->object->getSecondNameCase());
    }
    public function testManSirname360()
    {
        $this->object->setSecondName('Карчагин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карчагин,Карчагина,Карчагину,Карчагина,Карчагиным,Карчагине'), $this->object->getSecondNameCase());
    }
    public function testManSirname361()
    {
        $this->object->setSecondName('Касатый');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Касатый,Касатого,Касатому,Касатого,Касатым,Касатом'), $this->object->getSecondNameCase());
    }
    public function testManSirname362()
    {
        $this->object->setSecondName('Катин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Катин,Катина,Катину,Катина,Катиным,Катине'), $this->object->getSecondNameCase());
    }
    public function testManSirname363()
    {
        $this->object->setSecondName('Качусов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Качусов,Качусова,Качусову,Качусова,Качусовым,Качусове'), $this->object->getSecondNameCase());
    }
    public function testManSirname364()
    {
        $this->object->setSecondName('Кашарин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кашарин,Кашарина,Кашарину,Кашарина,Кашариным,Кашарине'), $this->object->getSecondNameCase());
    }
    public function testManSirname365()
    {
        $this->object->setSecondName('Каширин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каширин,Каширина,Каширину,Каширина,Кашириным,Каширине'), $this->object->getSecondNameCase());
    }
    public function testManSirname366()
    {
        $this->object->setSecondName('Кашканов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кашканов,Кашканова,Кашканову,Кашканова,Кашкановым,Кашканове'), $this->object->getSecondNameCase());
    }
    public function testManSirname367()
    {
        $this->object->setSecondName('Кашников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кашников,Кашникова,Кашникову,Кашникова,Кашниковым,Кашникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname368()
    {
        $this->object->setSecondName('Киреев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Киреев,Киреева,Кирееву,Киреева,Киреевым,Кирееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname369()
    {
        $this->object->setSecondName('Кирилишен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирилишен,Кирилишена,Кирилишену,Кирилишена,Кирилишеном,Кирилишене'), $this->object->getSecondNameCase());
    }
    public function testManSirname370()
    {
        $this->object->setSecondName('Кирилловский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирилловский,Кирилловского,Кирилловскому,Кирилловского,Кирилловским,Кирилловском'), $this->object->getSecondNameCase());
    }
    public function testManSirname371()
    {
        $this->object->setSecondName('Кирилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирилов,Кирилова,Кирилову,Кирилова,Кириловым,Кирилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname372()
    {
        $this->object->setSecondName('Кирсанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирсанов,Кирсанова,Кирсанову,Кирсанова,Кирсановым,Кирсанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname373()
    {
        $this->object->setSecondName('Кирьянов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирьянов,Кирьянова,Кирьянову,Кирьянова,Кирьяновым,Кирьянове'), $this->object->getSecondNameCase());
    }
    public function testManSirname374()
    {
        $this->object->setSecondName('Клепахов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Клепахов,Клепахова,Клепахову,Клепахова,Клепаховым,Клепахове'), $this->object->getSecondNameCase());
    }
    public function testManSirname375()
    {
        $this->object->setSecondName('Климов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климов,Климова,Климову,Климова,Климовым,Климове'), $this->object->getSecondNameCase());
    }
    public function testManSirname376()
    {
        $this->object->setSecondName('Климушин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климушин,Климушина,Климушину,Климушина,Климушиным,Климушине'), $this->object->getSecondNameCase());
    }
    public function testManSirname377()
    {
        $this->object->setSecondName('Клоков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Клоков,Клокова,Клокову,Клокова,Клоковым,Клокове'), $this->object->getSecondNameCase());
    }
    public function testManSirname378()
    {
        $this->object->setSecondName('Князев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Князев,Князева,Князеву,Князева,Князевым,Князеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname379()
    {
        $this->object->setSecondName('Ковалев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковалев,Ковалева,Ковалеву,Ковалева,Ковалевым,Ковалеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname380()
    {
        $this->object->setSecondName('Ковалевский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковалевский,Ковалевского,Ковалевскому,Ковалевского,Ковалевским,Ковалевском'), $this->object->getSecondNameCase());
    }
    public function testManSirname381()
    {
        $this->object->setSecondName('Ковров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковров,Коврова,Коврову,Ковров,Ковровом,Коврове'), $this->object->getSecondNameCase());
    }
    public function testManSirname382()
    {
        $this->object->setSecondName('Ковшутин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковшутин,Ковшутина,Ковшутину,Ковшутина,Ковшутиным,Ковшутине'), $this->object->getSecondNameCase());
    }
    public function testManSirname383()
    {
        $this->object->setSecondName('Кожуров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кожуров,Кожурова,Кожурову,Кожурова,Кожуровым,Кожурове'), $this->object->getSecondNameCase());
    }
    public function testManSirname384()
    {
        $this->object->setSecondName('Кожухов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кожухов,Кожухова,Кожухову,Кожухова,Кожуховым,Кожухове'), $this->object->getSecondNameCase());
    }
    public function testManSirname385()
    {
        $this->object->setSecondName('Козаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козаков,Козакова,Козакову,Козакова,Козаковым,Козакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname386()
    {
        $this->object->setSecondName('Козарь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козарь,Козаря,Козарю,Козаря,Козарем,Козаре'), $this->object->getSecondNameCase());
    }
    public function testManSirname387()
    {
        $this->object->setSecondName('Козлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козлов,Козлова,Козлову,Козлова,Козловым,Козлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname388()
    {
        $this->object->setSecondName('Козловский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козловский,Козловского,Козловскому,Козловского,Козловским,Козловском'), $this->object->getSecondNameCase());
    }
    public function testManSirname389()
    {
        $this->object->setSecondName('Колесников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колесников,Колесникова,Колесникову,Колесникова,Колесниковым,Колесникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname390()
    {
        $this->object->setSecondName('Колонтаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колонтаев,Колонтаева,Колонтаеву,Колонтаева,Колонтаевым,Колонтаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname391()
    {
        $this->object->setSecondName('Колосов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колосов,Колосова,Колосову,Колосова,Колосовым,Колосове'), $this->object->getSecondNameCase());
    }
    public function testManSirname392()
    {
        $this->object->setSecondName('Кольцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кольцов,Кольцова,Кольцову,Кольцова,Кольцовым,Кольцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname393()
    {
        $this->object->setSecondName('Комаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Комаров,Комарова,Комарову,Комарова,Комаровым,Комарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname394()
    {
        $this->object->setSecondName('Комзин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Комзин,Комзина,Комзину,Комзина,Комзиным,Комзине'), $this->object->getSecondNameCase());
    }
    public function testManSirname395()
    {
        $this->object->setSecondName('Комолов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Комолов,Комолова,Комолову,Комолова,Комоловым,Комолове'), $this->object->getSecondNameCase());
    }
    public function testManSirname396()
    {
        $this->object->setSecondName('Кондратьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондратьев,Кондратьева,Кондратьеву,Кондратьева,Кондратьевым,Кондратьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname397()
    {
        $this->object->setSecondName('Конев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Конев,Конева,Коневу,Конева,Коневым,Коневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname398()
    {
        $this->object->setSecondName('Конников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Конников,Конникова,Конникову,Конникова,Конниковым,Конникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname399()
    {
        $this->object->setSecondName('Коновалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коновалов,Коновалова,Коновалову,Коновалова,Коноваловым,Коновалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname400()
    {
        $this->object->setSecondName('Коньяков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коньяков,Коньякова,Коньякову,Коньякова,Коньяковым,Коньякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname401()
    {
        $this->object->setSecondName('Коняшев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коняшев,Коняшева,Коняшеву,Коняшева,Коняшевым,Коняшеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname402()
    {
        $this->object->setSecondName('Копейкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Копейкин,Копейкина,Копейкину,Копейкина,Копейкиным,Копейкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname403()
    {
        $this->object->setSecondName('Коренев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коренев,Коренева,Кореневу,Коренева,Кореневым,Кореневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname404()
    {
        $this->object->setSecondName('Коренев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коренев,Коренева,Кореневу,Коренева,Кореневым,Кореневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname405()
    {
        $this->object->setSecondName('Коржаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коржаков,Коржакова,Коржакову,Коржакова,Коржаковым,Коржакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname406()
    {
        $this->object->setSecondName('Коржев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коржев,Коржева,Коржеву,Коржева,Коржевым,Коржеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname407()
    {
        $this->object->setSecondName('Корнев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корнев,Корнева,Корневу,Корнева,Корневым,Корневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname408()
    {
        $this->object->setSecondName('Корнилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корнилов,Корнилова,Корнилову,Корнилова,Корниловым,Корнилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname409()
    {
        $this->object->setSecondName('Коровин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коровин,Коровина,Коровину,Коровина,Коровиным,Коровине'), $this->object->getSecondNameCase());
    }
    public function testManSirname410()
    {
        $this->object->setSecondName('Королев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Королев,Королева,Королеву,Королева,Королевым,Королеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname411()
    {
        $this->object->setSecondName('Коротаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коротаев,Коротаева,Коротаеву,Коротаева,Коротаевым,Коротаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname412()
    {
        $this->object->setSecondName('Корчагин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корчагин,Корчагина,Корчагину,Корчагина,Корчагиным,Корчагине'), $this->object->getSecondNameCase());
    }
    public function testManSirname413()
    {
        $this->object->setSecondName('Косарев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Косарев,Косарева,Косареву,Косарева,Косаревым,Косареве'), $this->object->getSecondNameCase());
    }
    public function testManSirname414()
    {
        $this->object->setSecondName('Косков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Косков,Коскова,Коскову,Коскова,Косковым,Коскове'), $this->object->getSecondNameCase());
    }
    public function testManSirname415()
    {
        $this->object->setSecondName('Косомов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Косомов,Косомова,Косомову,Косомова,Косомовым,Косомове'), $this->object->getSecondNameCase());
    }
    public function testManSirname416()
    {
        $this->object->setSecondName('Косоруков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Косоруков,Косорукова,Косорукову,Косорукова,Косоруковым,Косорукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname417()
    {
        $this->object->setSecondName('Костин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Костин,Костина,Костину,Костина,Костиным,Костине'), $this->object->getSecondNameCase());
    }
    public function testManSirname418()
    {
        $this->object->setSecondName('Косяк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Косяк,Косяка,Косяку,Косяка,Косяком,Косяке'), $this->object->getSecondNameCase());
    }
    public function testManSirname419()
    {
        $this->object->setSecondName('Котов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Котов,Котова,Котову,Котова,Котовым,Котове'), $this->object->getSecondNameCase());
    }
    public function testManSirname420()
    {
        $this->object->setSecondName('Костомаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Костомаров,Костомарова,Костомарову,Костомарова,Костомаровым,Костомарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname421()
    {
        $this->object->setSecondName('Коченков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коченков,Коченкова,Коченкову,Коченкова,Коченковым,Коченкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname422()
    {
        $this->object->setSecondName('Кошелев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кошелев,Кошелева,Кошелеву,Кошелева,Кошелевым,Кошелеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname423()
    {
        $this->object->setSecondName('Кошечкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кошечкин,Кошечкина,Кошечкину,Кошечкина,Кошечкиным,Кошечкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname424()
    {
        $this->object->setSecondName('Кошкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кошкин,Кошкина,Кошкину,Кошкина,Кошкиным,Кошкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname425()
    {
        $this->object->setSecondName('Кравчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кравчук,Кравчука,Кравчуку,Кравчука,Кравчуком,Кравчуке'), $this->object->getSecondNameCase());
    }
    public function testManSirname426()
    {
        $this->object->setSecondName('Краев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Краев,Краева,Краеву,Краева,Краевым,Краеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname427()
    {
        $this->object->setSecondName('Краснов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Краснов,Краснова,Краснову,Краснова,Красновым,Краснове'), $this->object->getSecondNameCase());
    }
    public function testManSirname428()
    {
        $this->object->setSecondName('Красноперов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Красноперов,Красноперова,Красноперову,Красноперова,Красноперовым,Красноперове'), $this->object->getSecondNameCase());
    }
    public function testManSirname429()
    {
        $this->object->setSecondName('Кропанин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кропанин,Кропанина,Кропанину,Кропанина,Кропаниным,Кропанине'), $this->object->getSecondNameCase());
    }
    public function testManSirname430()
    {
        $this->object->setSecondName('Кругликов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кругликов,Кругликова,Кругликову,Кругликова,Кругликовым,Кругликове'), $this->object->getSecondNameCase());
    }
    public function testManSirname431()
    {
        $this->object->setSecondName('Круглов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Круглов,Круглова,Круглову,Круглова,Кругловым,Круглове'), $this->object->getSecondNameCase());
    }
    public function testManSirname432()
    {
        $this->object->setSecondName('Крупин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крупин,Крупина,Крупину,Крупина,Крупиным,Крупине'), $this->object->getSecondNameCase());
    }
    public function testManSirname433()
    {
        $this->object->setSecondName('Крутин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крутин,Крутина,Крутину,Крутина,Крутиным,Крутине'), $this->object->getSecondNameCase());
    }
    public function testManSirname434()
    {
        $this->object->setSecondName('Кручинкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кручинкин,Кручинкина,Кручинкину,Кручинкина,Кручинкиным,Кручинкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname435()
    {
        $this->object->setSecondName('Крылов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крылов,Крылова,Крылову,Крылова,Крыловым,Крылове'), $this->object->getSecondNameCase());
    }
    public function testManSirname436()
    {
        $this->object->setSecondName('Крысов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крысов,Крысова,Крысову,Крысова,Крысовым,Крысове'), $this->object->getSecondNameCase());
    }
    public function testManSirname437()
    {
        $this->object->setSecondName('Крюков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крюков,Крюкова,Крюкову,Крюкова,Крюковым,Крюкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname438()
    {
        $this->object->setSecondName('Кубланов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кубланов,Кубланова,Кубланову,Кубланова,Кублановым,Кубланове'), $this->object->getSecondNameCase());
    }
    public function testManSirname439()
    {
        $this->object->setSecondName('Кудашов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кудашов,Кудашова,Кудашову,Кудашова,Кудашовым,Кудашове'), $this->object->getSecondNameCase());
    }
    public function testManSirname440()
    {
        $this->object->setSecondName('Кудрин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кудрин,Кудрина,Кудрину,Кудрина,Кудрином,Кудрине'), $this->object->getSecondNameCase());
    }
    public function testManSirname441()
    {
        $this->object->setSecondName('Кудрявцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кудрявцев,Кудрявцева,Кудрявцеву,Кудрявцева,Кудрявцевым,Кудрявцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname442()
    {
        $this->object->setSecondName('Кудряшов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кудряшов,Кудряшова,Кудряшову,Кудряшова,Кудряшовым,Кудряшове'), $this->object->getSecondNameCase());
    }
    public function testManSirname443()
    {
        $this->object->setSecondName('Кузнецов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузнецов,Кузнецова,Кузнецову,Кузнецова,Кузнецовым,Кузнецове'), $this->object->getSecondNameCase());
    }
    public function testManSirname444()
    {
        $this->object->setSecondName('Кузьмин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьмин,Кузьмина,Кузьмину,Кузьмина,Кузьминым,Кузьмине'), $this->object->getSecondNameCase());
    }
    public function testManSirname445()
    {
        $this->object->setSecondName('Куимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куимов,Куимова,Куимову,Куимова,Куимовым,Куимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname446()
    {
        $this->object->setSecondName('Куклачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куклачев,Куклачева,Куклачеву,Куклачева,Куклачевым,Куклачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname447()
    {
        $this->object->setSecondName('Кулагин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кулагин,Кулагина,Кулагину,Кулагина,Кулагиным,Кулагине'), $this->object->getSecondNameCase());
    }
    public function testManSirname448()
    {
        $this->object->setSecondName('Кулибин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кулибин,Кулибина,Кулибину,Кулибина,Кулибином,Кулибине'), $this->object->getSecondNameCase());
    }
    public function testManSirname449()
    {
        $this->object->setSecondName('Куликов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куликов,Куликова,Куликову,Куликова,Куликовым,Куликове'), $this->object->getSecondNameCase());
    }
    public function testManSirname450()
    {
        $this->object->setSecondName('Куракин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куракин,Куракина,Куракину,Куракина,Куракиным,Куракине'), $this->object->getSecondNameCase());
    }
    public function testManSirname451()
    {
        $this->object->setSecondName('Курбатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Курбатов,Курбатова,Курбатову,Курбатова,Курбатовым,Курбатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname452()
    {
        $this->object->setSecondName('Курганов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Курганов,Курганова,Курганову,Курганова,Кургановым,Курганове'), $this->object->getSecondNameCase());
    }
    public function testManSirname453()
    {
        $this->object->setSecondName('Курдин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Курдин,Курдина,Курдину,Курдина,Курдиным,Курдине'), $this->object->getSecondNameCase());
    }
    public function testManSirname454()
    {
        $this->object->setSecondName('Курепин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Курепин,Курепина,Курепину,Курепина,Курепиным,Курепине'), $this->object->getSecondNameCase());
    }
    public function testManSirname455()
    {
        $this->object->setSecondName('Курсалин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Курсалин,Курсалина,Курсалину,Курсалина,Курсалиным,Курсалине'), $this->object->getSecondNameCase());
    }
    public function testManSirname456()
    {
        $this->object->setSecondName('Кутиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кутиков,Кутикова,Кутикову,Кутикова,Кутиковым,Кутикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname457()
    {
        $this->object->setSecondName('Кутузов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кутузов,Кутузова,Кутузову,Кутузова,Кутузовым,Кутузове'), $this->object->getSecondNameCase());
    }
    public function testManSirname458()
    {
        $this->object->setSecondName('Кутяков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кутяков,Кутякова,Кутякову,Кутякова,Кутяковым,Кутякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname459()
    {
        $this->object->setSecondName('Лавров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лавров,Лаврова,Лаврову,Лаврова,Лавровым,Лаврове'), $this->object->getSecondNameCase());
    }
    public function testManSirname460()
    {
        $this->object->setSecondName('Лагутов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лагутов,Лагутова,Лагутову,Лагутова,Лагутовым,Лагутове'), $this->object->getSecondNameCase());
    }
    public function testManSirname461()
    {
        $this->object->setSecondName('Лазарев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лазарев,Лазарева,Лазареву,Лазарева,Лазаревым,Лазареве'), $this->object->getSecondNameCase());
    }
    public function testManSirname462()
    {
        $this->object->setSecondName('Ланцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ланцов,Ланцова,Ланцову,Ланцова,Ланцовым,Ланцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname463()
    {
        $this->object->setSecondName('Лапидус');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лапидус,Лапидуса,Лапидусу,Лапидуса,Лапидусом,Лапидусе'), $this->object->getSecondNameCase());
    }
    public function testManSirname464()
    {
        $this->object->setSecondName('Лапотников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лапотников,Лапотникова,Лапотникову,Лапотникова,Лапотниковым,Лапотникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname465()
    {
        $this->object->setSecondName('Лаптев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лаптев,Лаптева,Лаптеву,Лаптева,Лаптевым,Лаптеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname466()
    {
        $this->object->setSecondName('Лапунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лапунов,Лапунова,Лапунову,Лапунова,Лапуновым,Лапунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname467()
    {
        $this->object->setSecondName('Лапухов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лапухов,Лапухова,Лапухову,Лапухова,Лапуховым,Лапухове'), $this->object->getSecondNameCase());
    }
    public function testManSirname468()
    {
        $this->object->setSecondName('Ларин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ларин,Ларина,Ларину,Ларина,Лариным,Ларине'), $this->object->getSecondNameCase());
    }
    public function testManSirname469()
    {
        $this->object->setSecondName('Ларионов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ларионов,Ларионова,Ларионову,Ларионова,Ларионовым,Ларионове'), $this->object->getSecondNameCase());
    }
    public function testManSirname470()
    {
        $this->object->setSecondName('Ласкутин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ласкутин,Ласкутина,Ласкутину,Ласкутина,Ласкутином,Ласкутине'), $this->object->getSecondNameCase());
    }
    public function testManSirname471()
    {
        $this->object->setSecondName('Лачинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лачинов,Лачинова,Лачинову,Лачинова,Лачиновым,Лачинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname472()
    {
        $this->object->setSecondName('Лачков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лачков,Лачкова,Лачкову,Лачкова,Лачковым,Лачкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname473()
    {
        $this->object->setSecondName('Лебедев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лебедев,Лебедева,Лебедеву,Лебедева,Лебедевым,Лебедеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname474()
    {
        $this->object->setSecondName('Лебединский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лебединский,Лебединского,Лебединскому,Лебединского,Лебединским,Лебединском'), $this->object->getSecondNameCase());
    }
    public function testManSirname475()
    {
        $this->object->setSecondName('Лебединцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лебединцев,Лебединцева,Лебединцеву,Лебединцева,Лебединцевым,Лебединцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname476()
    {
        $this->object->setSecondName('Легкодимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Легкодимов,Легкодимова,Легкодимову,Легкодимова,Легкодимовым,Легкодимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname477()
    {
        $this->object->setSecondName('Леонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонов,Леонова,Леонову,Леонова,Леоновым,Леонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname478()
    {
        $this->object->setSecondName('Лепехин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лепехин,Лепехина,Лепехину,Лепехина,Лепехиным,Лепехине'), $this->object->getSecondNameCase());
    }
    public function testManSirname479()
    {
        $this->object->setSecondName('Лесков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лесков,Лескова,Лескову,Лескова,Лесковым,Лескове'), $this->object->getSecondNameCase());
    }
    public function testManSirname480()
    {
        $this->object->setSecondName('Лесничий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лесничий,Лесничьего,Лесничьему,Лесничьего,Лесничьим,Лесничьем'), $this->object->getSecondNameCase());
    }
    public function testManSirname481()
    {
        $this->object->setSecondName('Летов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Летов,Летова,Летову,Летова,Летовым,Летове'), $this->object->getSecondNameCase());
    }
    public function testManSirname482()
    {
        $this->object->setSecondName('Лещев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лещев,Лещева,Лещеву,Лещева,Лещевым,Лещеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname483()
    {
        $this->object->setSecondName('Лилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лилов,Лилова,Лилову,Лилова,Лиловым,Лилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname484()
    {
        $this->object->setSecondName('Липин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Липин,Липина,Липину,Липина,Липиным,Липине'), $this->object->getSecondNameCase());
    }
    public function testManSirname485()
    {
        $this->object->setSecondName('Лисицын');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лисицын,Лисицына,Лисицыну,Лисицына,Лисицыном,Лисицыне'), $this->object->getSecondNameCase());
    }
    public function testManSirname486()
    {
        $this->object->setSecondName('Лихачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лихачев,Лихачева,Лихачеву,Лихачева,Лихачевым,Лихачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname487()
    {
        $this->object->setSecondName('Лобан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лобан,Лобана,Лобану,Лобана,Лобаном,Лобане'), $this->object->getSecondNameCase());
    }
    public function testManSirname488()
    {
        $this->object->setSecondName('Лобанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лобанов,Лобанова,Лобанову,Лобанова,Лобановым,Лобанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname489()
    {
        $this->object->setSecondName('Лобов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лобов,Лобова,Лобову,Лобова,Лобовым,Лобове'), $this->object->getSecondNameCase());
    }
    public function testManSirname490()
    {
        $this->object->setSecondName('Логинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Логинов,Логинова,Логинову,Логинова,Логиновым,Логинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname491()
    {
        $this->object->setSecondName('Логиновский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Логиновский,Логиновского,Логиновскому,Логиновского,Логиновским,Логиновском'), $this->object->getSecondNameCase());
    }
    public function testManSirname492()
    {
        $this->object->setSecondName('Локтев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Локтев,Локтева,Локтеву,Локтева,Локтевым,Локтеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname493()
    {
        $this->object->setSecondName('Ломоносов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ломоносов,Ломоносова,Ломоносову,Ломоносов,Ломоносовом,Ломоносове'), $this->object->getSecondNameCase());
    }
    public function testManSirname494()
    {
        $this->object->setSecondName('Ломтев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ломтев,Ломтева,Ломтеву,Ломтева,Ломтевым,Ломтеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname495()
    {
        $this->object->setSecondName('Лопатин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лопатин,Лопатина,Лопатину,Лопатина,Лопатиным,Лопатине'), $this->object->getSecondNameCase());
    }
    public function testManSirname496()
    {
        $this->object->setSecondName('Лосев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лосев,Лосева,Лосеву,Лосева,Лосевым,Лосеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname497()
    {
        $this->object->setSecondName('Лосевский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лосевский,Лосевского,Лосевскому,Лосевского,Лосевским,Лосевском'), $this->object->getSecondNameCase());
    }
    public function testManSirname498()
    {
        $this->object->setSecondName('Лоскутников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лоскутников,Лоскутникова,Лоскутникову,Лоскутникова,Лоскутниковым,Лоскутникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname499()
    {
        $this->object->setSecondName('Лоскутов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лоскутов,Лоскутова,Лоскутову,Лоскутова,Лоскутовым,Лоскутове'), $this->object->getSecondNameCase());
    }
    public function testManSirname500()
    {
        $this->object->setSecondName('Лужков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лужков,Лужкова,Лужкову,Лужкова,Лужковым,Лужкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname501()
    {
        $this->object->setSecondName('Лыткин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лыткин,Лыткина,Лыткину,Лыткина,Лыткиным,Лыткине'), $this->object->getSecondNameCase());
    }
    public function testManSirname502()
    {
        $this->object->setSecondName('Любимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любимов,Любимова,Любимову,Любимова,Любимовым,Любимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname503()
    {
        $this->object->setSecondName('Любов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любов,Любова,Любову,Любова,Любовым,Любове'), $this->object->getSecondNameCase());
    }
    public function testManSirname504()
    {
        $this->object->setSecondName('Лягушкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лягушкин,Лягушкина,Лягушкину,Лягушкина,Лягушкиным,Лягушкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname505()
    {
        $this->object->setSecondName('Лягушов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лягушов,Лягушова,Лягушову,Лягушова,Лягушовым,Лягушове'), $this->object->getSecondNameCase());
    }
    public function testManSirname506()
    {
        $this->object->setSecondName('Лялюшкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лялюшкин,Лялюшкина,Лялюшкину,Лялюшкина,Лялюшкиным,Лялюшкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname507()
    {
        $this->object->setSecondName('Лясин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лясин,Лясина,Лясину,Лясина,Лясиным,Лясине'), $this->object->getSecondNameCase());
    }
    public function testManSirname508()
    {
        $this->object->setSecondName('Ляпин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ляпин,Ляпина,Ляпину,Ляпина,Ляпиным,Ляпине'), $this->object->getSecondNameCase());
    }
    public function testManSirname509()
    {
        $this->object->setSecondName('Майсак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Майсак,Майсака,Майсаку,Майсака,Майсаком,Майсаке'), $this->object->getSecondNameCase());
    }
    public function testManSirname510()
    {
        $this->object->setSecondName('Макаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макаров,Макарова,Макарову,Макарова,Макаровым,Макарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname511()
    {
        $this->object->setSecondName('Маклаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маклаков,Маклакова,Маклакову,Маклакова,Маклаковым,Маклакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname512()
    {
        $this->object->setSecondName('Максимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимов,Максимова,Максимову,Максимова,Максимовым,Максимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname513()
    {
        $this->object->setSecondName('Максимушкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимушкин,Максимушкина,Максимушкину,Максимушкина,Максимушкиным,Максимушкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname514()
    {
        $this->object->setSecondName('Максудов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максудов,Максудова,Максудову,Максудова,Максудовым,Максудове'), $this->object->getSecondNameCase());
    }
    public function testManSirname515()
    {
        $this->object->setSecondName('Малахов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малахов,Малахова,Малахову,Малахова,Малаховым,Малахове'), $this->object->getSecondNameCase());
    }
    public function testManSirname516()
    {
        $this->object->setSecondName('Маликов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маликов,Маликова,Маликову,Маликова,Маликовым,Маликове'), $this->object->getSecondNameCase());
    }
    public function testManSirname517()
    {
        $this->object->setSecondName('Малинин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малинин,Малинина,Малинину,Малинина,Малининым,Малинине'), $this->object->getSecondNameCase());
    }
    public function testManSirname518()
    {
        $this->object->setSecondName('Малышев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малышев,Малышева,Малышеву,Малышева,Малышевым,Малышеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname519()
    {
        $this->object->setSecondName('Малюгин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малюгин,Малюгина,Малюгину,Малюгина,Малюгином,Малюгине'), $this->object->getSecondNameCase());
    }
    public function testManSirname520()
    {
        $this->object->setSecondName('Малыхин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малыхин,Малыхина,Малыхину,Малыхина,Малыхиным,Малыхине'), $this->object->getSecondNameCase());
    }
    public function testManSirname521()
    {
        $this->object->setSecondName('Мамонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мамонов,Мамонова,Мамонову,Мамонова,Мамоновым,Мамонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname522()
    {
        $this->object->setSecondName('Манин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Манин,Манина,Манину,Манина,Маниным,Манине'), $this->object->getSecondNameCase());
    }
    public function testManSirname523()
    {
        $this->object->setSecondName('Маркин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маркин,Маркина,Маркину,Маркина,Маркиным,Маркине'), $this->object->getSecondNameCase());
    }
    public function testManSirname524()
    {
        $this->object->setSecondName('Марков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марков,Маркова,Маркову,Маркова,Марковым,Маркове'), $this->object->getSecondNameCase());
    }
    public function testManSirname525()
    {
        $this->object->setSecondName('Маслак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маслак,Маслака,Маслаку,Маслака,Маслаком,Маслаке'), $this->object->getSecondNameCase());
    }
    public function testManSirname526()
    {
        $this->object->setSecondName('Маслов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маслов,Маслова,Маслову,Маслова,Масловым,Маслове'), $this->object->getSecondNameCase());
    }
    public function testManSirname527()
    {
        $this->object->setSecondName('Матвеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвеев,Матвеева,Матвееву,Матвеева,Матвеевым,Матвееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname528()
    {
        $this->object->setSecondName('Машарин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Машарин,Машарина,Машарину,Машарина,Машариным,Машарине'), $this->object->getSecondNameCase());
    }
    public function testManSirname529()
    {
        $this->object->setSecondName('Машир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Машир,Машира,Маширу,Машира,Маширом,Машире'), $this->object->getSecondNameCase());
    }
    public function testManSirname530()
    {
        $this->object->setSecondName('Медведев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Медведев,Медведева,Медведеву,Медведева,Медведевым,Медведеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname531()
    {
        $this->object->setSecondName('Медников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Медников,Медникова,Медникову,Медникова,Медниковым,Медникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname532()
    {
        $this->object->setSecondName('Меледин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Меледин,Меледина,Меледину,Меледина,Мелединым,Меледине'), $this->object->getSecondNameCase());
    }
    public function testManSirname533()
    {
        $this->object->setSecondName('Мелехов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мелехов,Мелехова,Мелехову,Мелехова,Мелеховым,Мелехове'), $this->object->getSecondNameCase());
    }
    public function testManSirname534()
    {
        $this->object->setSecondName('Меликов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Меликов,Меликова,Меликову,Меликова,Меликовым,Меликове'), $this->object->getSecondNameCase());
    }
    public function testManSirname535()
    {
        $this->object->setSecondName('Мельников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мельников,Мельникова,Мельникову,Мельникова,Мельниковым,Мельникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname536()
    {
        $this->object->setSecondName('Меркушев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Меркушев,Меркушева,Меркушеву,Меркушева,Меркушевым,Меркушеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname537()
    {
        $this->object->setSecondName('Мещеряков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мещеряков,Мещерякова,Мещерякову,Мещерякова,Мещеряковым,Мещерякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname538()
    {
        $this->object->setSecondName('Мигунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мигунов,Мигунова,Мигунову,Мигунова,Мигуновым,Мигунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname539()
    {
        $this->object->setSecondName('Мизенов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мизенов,Мизенова,Мизенову,Мизенова,Мизеновым,Мизенове'), $this->object->getSecondNameCase());
    }
    public function testManSirname540()
    {
        $this->object->setSecondName('Милехин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милехин,Милехина,Милехину,Милехина,Милехиным,Милехине'), $this->object->getSecondNameCase());
    }
    public function testManSirname541()
    {
        $this->object->setSecondName('Милорадов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милорадов,Милорадова,Милорадову,Милорадова,Милорадовым,Милорадове'), $this->object->getSecondNameCase());
    }
    public function testManSirname542()
    {
        $this->object->setSecondName('Милюков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милюков,Милюкова,Милюкову,Милюкова,Милюковым,Милюкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname543()
    {
        $this->object->setSecondName('Милютин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милютин,Милютина,Милютину,Милютина,Милютином,Милютине'), $this->object->getSecondNameCase());
    }
    public function testManSirname544()
    {
        $this->object->setSecondName('Минеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Минеев,Минеева,Минееву,Минеева,Минеевым,Минееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname545()
    {
        $this->object->setSecondName('Минин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Минин,Минина,Минину,Минина,Мининым,Минине'), $this->object->getSecondNameCase());
    }
    public function testManSirname546()
    {
        $this->object->setSecondName('Минкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Минкин,Минкина,Минкину,Минкина,Минкиным,Минкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname547()
    {
        $this->object->setSecondName('Миронов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Миронов,Миронова,Миронову,Миронова,Мироновым,Миронове'), $this->object->getSecondNameCase());
    }
    public function testManSirname548()
    {
        $this->object->setSecondName('Митин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Митин,Митина,Митину,Митина,Митиным,Митине'), $this->object->getSecondNameCase());
    }
    public function testManSirname549()
    {
        $this->object->setSecondName('Митрофанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Митрофанов,Митрофанова,Митрофанову,Митрофанова,Митрофановым,Митрофанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname550()
    {
        $this->object->setSecondName('Михайлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлов,Михайлова,Михайлову,Михайлова,Михайловым,Михайлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname551()
    {
        $this->object->setSecondName('Михеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михеев,Михеева,Михееву,Михеева,Михеевым,Михееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname552()
    {
        $this->object->setSecondName('Мишутин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мишутин,Мишутина,Мишутину,Мишутина,Мишутиным,Мишутине'), $this->object->getSecondNameCase());
    }
    public function testManSirname553()
    {
        $this->object->setSecondName('Моисеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моисеев,Моисеева,Моисееву,Моисеева,Моисеевым,Моисееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname554()
    {
        $this->object->setSecondName('Молчанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Молчанов,Молчанова,Молчанову,Молчанова,Молчановым,Молчанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname555()
    {
        $this->object->setSecondName('Моренов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моренов,Моренова,Моренову,Моренова,Мореновым,Моренове'), $this->object->getSecondNameCase());
    }
    public function testManSirname556()
    {
        $this->object->setSecondName('Морозов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Морозов,Морозова,Морозову,Морозова,Морозовым,Морозове'), $this->object->getSecondNameCase());
    }
    public function testManSirname557()
    {
        $this->object->setSecondName('Мосалев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мосалев,Мосалева,Мосалеву,Мосалева,Мосалевым,Мосалеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname558()
    {
        $this->object->setSecondName('Москвин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Москвин,Москвина,Москвину,Москвина,Москвиным,Москвине'), $this->object->getSecondNameCase());
    }
    public function testManSirname559()
    {
        $this->object->setSecondName('Муратов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Муратов,Муратова,Муратову,Муратова,Муратовым,Муратове'), $this->object->getSecondNameCase());
    }
    public function testManSirname560()
    {
        $this->object->setSecondName('Мухортов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мухортов,Мухортова,Мухортову,Мухортова,Мухортовым,Мухортове'), $this->object->getSecondNameCase());
    }
    public function testManSirname561()
    {
        $this->object->setSecondName('Мягков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мягков,Мягкова,Мягкову,Мягкова,Мягковым,Мягкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname562()
    {
        $this->object->setSecondName('Мясников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мясников,Мясникова,Мясникову,Мясникова,Мясниковым,Мясникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname563()
    {
        $this->object->setSecondName('Мятлев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мятлев,Мятлева,Мятлеву,Мятлева,Мятлевым,Мятлеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname564()
    {
        $this->object->setSecondName('Набатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Набатов,Набатова,Набатову,Набатова,Набатовым,Набатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname565()
    {
        $this->object->setSecondName('Нардин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нардин,Нардина,Нардину,Нардина,Нардиным,Нардине'), $this->object->getSecondNameCase());
    }
    public function testManSirname566()
    {
        $this->object->setSecondName('Наумов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наумов,Наумова,Наумову,Наумова,Наумовым,Наумове'), $this->object->getSecondNameCase());
    }
    public function testManSirname567()
    {
        $this->object->setSecondName('Невзоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Невзоров,Невзорова,Невзорову,Невзорова,Невзоровым,Невзорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname568()
    {
        $this->object->setSecondName('Неделяев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Неделяев,Неделяева,Неделяеву,Неделяева,Неделяевым,Неделяеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname569()
    {
        $this->object->setSecondName('Нежданов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нежданов,Нежданова,Нежданову,Нежданова,Неждановым,Нежданове'), $this->object->getSecondNameCase());
    }
    public function testManSirname570()
    {
        $this->object->setSecondName('Ненашев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ненашев,Ненашева,Ненашеву,Ненашева,Ненашевым,Ненашеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname571()
    {
        $this->object->setSecondName('Нестеров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестеров,Нестерова,Нестерову,Нестерова,Нестеровым,Нестерове'), $this->object->getSecondNameCase());
    }
    public function testManSirname572()
    {
        $this->object->setSecondName('Нечаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нечаев,Нечаева,Нечаеву,Нечаева,Нечаевым,Нечаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname573()
    {
        $this->object->setSecondName('Никитин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никитин,Никитина,Никитину,Никитина,Никитиным,Никитине'), $this->object->getSecondNameCase());
    }
    public function testManSirname574()
    {
        $this->object->setSecondName('Никифоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никифоров,Никифорова,Никифорову,Никифорова,Никифоровым,Никифорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname575()
    {
        $this->object->setSecondName('Николаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николаев,Николаева,Николаеву,Николаева,Николаевым,Николаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname576()
    {
        $this->object->setSecondName('Никонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никонов,Никонова,Никонову,Никонова,Никоновым,Никонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname577()
    {
        $this->object->setSecondName('Никулин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никулин,Никулина,Никулину,Никулина,Никулиным,Никулине'), $this->object->getSecondNameCase());
    }
    public function testManSirname578()
    {
        $this->object->setSecondName('Некрасов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Некрасов,Некрасова,Некрасову,Некрасова,Некрасовым,Некрасове'), $this->object->getSecondNameCase());
    }
    public function testManSirname579()
    {
        $this->object->setSecondName('Новиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Новиков,Новикова,Новикову,Новикова,Новиковым,Новикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname580()
    {
        $this->object->setSecondName('Новосельцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Новосельцев,Новосельцева,Новосельцеву,Новосельцева,Новосельцевым,Новосельцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname581()
    {
        $this->object->setSecondName('Носачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Носачев,Носачева,Носачеву,Носачева,Носачевым,Носачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname582()
    {
        $this->object->setSecondName('Носков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Носков,Носкова,Носкову,Носкова,Носковым,Носкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname583()
    {
        $this->object->setSecondName('Носов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Носов,Носова,Носову,Носова,Носовым,Носове'), $this->object->getSecondNameCase());
    }
    public function testManSirname584()
    {
        $this->object->setSecondName('Оболенский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Оболенский,Оболенского,Оболенскому,Оболенского,Оболенским,Оболенском'), $this->object->getSecondNameCase());
    }
    public function testManSirname585()
    {
        $this->object->setSecondName('Оборин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Оборин,Оборина,Оборину,Оборина,Обориным,Оборине'), $this->object->getSecondNameCase());
    }
    public function testManSirname586()
    {
        $this->object->setSecondName('Образцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Образцов,Образцова,Образцову,Образцова,Образцовым,Образцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname587()
    {
        $this->object->setSecondName('Обухов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Обухов,Обухова,Обухову,Обухова,Обуховым,Обухове'), $this->object->getSecondNameCase());
    }
    public function testManSirname588()
    {
        $this->object->setSecondName('Овечкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Овечкин,Овечкина,Овечкину,Овечкина,Овечкиным,Овечкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname589()
    {
        $this->object->setSecondName('Огородников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Огородников,Огородникова,Огородникову,Огородникова,Огородниковым,Огородникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname590()
    {
        $this->object->setSecondName('Огурцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Огурцов,Огурцова,Огурцову,Огурцова,Огурцовым,Огурцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname591()
    {
        $this->object->setSecondName('Озеров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Озеров,Озерова,Озерову,Озерова,Озеровым,Озерове'), $this->object->getSecondNameCase());
    }
    public function testManSirname592()
    {
        $this->object->setSecondName('Ольховский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ольховский,Ольховского,Ольховскому,Ольховского,Ольховским,Ольховском'), $this->object->getSecondNameCase());
    }
    public function testManSirname593()
    {
        $this->object->setSecondName('Онегин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онегин,Онегина,Онегину,Онегина,Онегиным,Онегине'), $this->object->getSecondNameCase());
    }
    public function testManSirname594()
    {
        $this->object->setSecondName('Опокин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Опокин,Опокина,Опокину,Опокина,Опокиным,Опокине'), $this->object->getSecondNameCase());
    }
    public function testManSirname595()
    {
        $this->object->setSecondName('Орлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орлов,Орлова,Орлову,Орлова,Орловым,Орлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname596()
    {
        $this->object->setSecondName('Осинцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осинцев,Осинцева,Осинцеву,Осинцева,Осинцевым,Осинцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname597()
    {
        $this->object->setSecondName('Остальцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остальцев,Остальцева,Остальцеву,Остальцева,Остальцевым,Остальцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname598()
    {
        $this->object->setSecondName('Остапюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остапюк,Остапюка,Остапюку,Остапюка,Остапюком,Остапюке'), $this->object->getSecondNameCase());
    }
    public function testManSirname599()
    {
        $this->object->setSecondName('Островерхов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Островерхов,Островерхова,Островерхову,Островерхова,Островерховым,Островерхове'), $this->object->getSecondNameCase());
    }
    public function testManSirname600()
    {
        $this->object->setSecondName('Островский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Островский,Островского,Островскому,Островского,Островским,Островском'), $this->object->getSecondNameCase());
    }
    public function testManSirname601()
    {
        $this->object->setSecondName('Павлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлов,Павлова,Павлову,Павлова,Павловым,Павлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname602()
    {
        $this->object->setSecondName('Панарин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панарин,Панарина,Панарину,Панарина,Панариным,Панарине'), $this->object->getSecondNameCase());
    }
    public function testManSirname603()
    {
        $this->object->setSecondName('Панин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панин,Панина,Панину,Панина,Паниным,Панине'), $this->object->getSecondNameCase());
    }
    public function testManSirname604()
    {
        $this->object->setSecondName('Панкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкин,Панкина,Панкину,Панкина,Панкиным,Панкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname605()
    {
        $this->object->setSecondName('Панков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панков,Панкова,Панкову,Панкова,Панковым,Панкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname606()
    {
        $this->object->setSecondName('Панфилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панфилов,Панфилова,Панфилову,Панфилова,Панфиловым,Панфилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname607()
    {
        $this->object->setSecondName('Панькив');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панькив,Панькива,Панькиву,Панькива,Панькивом,Панькиве'), $this->object->getSecondNameCase());
    }
    public function testManSirname608()
    {
        $this->object->setSecondName('Папанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Папанов,Папанова,Папанову,Папанова,Папановым,Папанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname609()
    {
        $this->object->setSecondName('Пахомов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пахомов,Пахомова,Пахомову,Пахомова,Пахомовым,Пахомове'), $this->object->getSecondNameCase());
    }
    public function testManSirname610()
    {
        $this->object->setSecondName('Пенкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пенкин,Пенкина,Пенкину,Пенкина,Пенкиным,Пенкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname611()
    {
        $this->object->setSecondName('Первак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Первак,Первака,Перваку,Первака,Перваком,Перваке'), $this->object->getSecondNameCase());
    }
    public function testManSirname612()
    {
        $this->object->setSecondName('Переверзев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Переверзев,Переверзева,Переверзеву,Переверзева,Переверзевым,Переверзеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname613()
    {
        $this->object->setSecondName('Перевертов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Перевертов,Перевертова,Перевертову,Перевертова,Перевертовым,Перевертове'), $this->object->getSecondNameCase());
    }
    public function testManSirname614()
    {
        $this->object->setSecondName('Пересторонин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пересторонин,Пересторонина,Пересторонину,Пересторонина,Пересторониным,Пересторонине'), $this->object->getSecondNameCase());
    }
    public function testManSirname615()
    {
        $this->object->setSecondName('Перехваткин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Перехваткин,Перехваткина,Перехваткину,Перехваткина,Перехваткиным,Перехваткине'), $this->object->getSecondNameCase());
    }
    public function testManSirname616()
    {
        $this->object->setSecondName('Перов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Перов,Перова,Перову,Перова,Перовым,Перове'), $this->object->getSecondNameCase());
    }
    public function testManSirname617()
    {
        $this->object->setSecondName('Перьмяков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Перьмяков,Перьмякова,Перьмякову,Перьмякова,Перьмяковым,Перьмякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname618()
    {
        $this->object->setSecondName('Пестов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пестов,Пестова,Пестову,Пестова,Пестовым,Пестове'), $this->object->getSecondNameCase());
    }
    public function testManSirname619()
    {
        $this->object->setSecondName('Петров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петров,Петрова,Петрову,Петрова,Петровым,Петрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname620()
    {
        $this->object->setSecondName('Петухов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петухов,Петухова,Петухову,Петухова,Петуховым,Петухове'), $this->object->getSecondNameCase());
    }
    public function testManSirname621()
    {
        $this->object->setSecondName('Печеников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Печеников,Печеникова,Печеникову,Печеникова,Печениковым,Печеникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname622()
    {
        $this->object->setSecondName('Пивоваров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пивоваров,Пивоварова,Пивоварову,Пивоварова,Пивоваровым,Пивоварове'), $this->object->getSecondNameCase());
    }
    public function testManSirname623()
    {
        $this->object->setSecondName('Пирогов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пирогов,Пирогова,Пирогову,Пирогова,Пироговым,Пирогове'), $this->object->getSecondNameCase());
    }
    public function testManSirname624()
    {
        $this->object->setSecondName('Пирожков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пирожков,Пирожкова,Пирожкову,Пирожкова,Пирожковым,Пирожкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname625()
    {
        $this->object->setSecondName('Пичугин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пичугин,Пичугина,Пичугину,Пичугина,Пичугиным,Пичугине'), $this->object->getSecondNameCase());
    }
    public function testManSirname626()
    {
        $this->object->setSecondName('Погодин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Погодин,Погодина,Погодину,Погодина,Погодиным,Погодине'), $this->object->getSecondNameCase());
    }
    public function testManSirname627()
    {
        $this->object->setSecondName('Погребнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Погребнов,Погребнова,Погребнову,Погребнова,Погребновым,Погребнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname628()
    {
        $this->object->setSecondName('Подшивалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Подшивалов,Подшивалова,Подшивалову,Подшивалова,Подшиваловым,Подшивалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname629()
    {
        $this->object->setSecondName('Поздняков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поздняков,Позднякова,Позднякову,Позднякова,Поздняковым,Позднякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname630()
    {
        $this->object->setSecondName('Покровский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Покровский,Покровского,Покровскому,Покровского,Покровским,Покровском'), $this->object->getSecondNameCase());
    }
    public function testManSirname631()
    {
        $this->object->setSecondName('Поливанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поливанов,Поливанова,Поливанову,Поливанова,Поливановым,Поливанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname632()
    {
        $this->object->setSecondName('Полушин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полушин,Полушина,Полушину,Полушина,Полушиным,Полушине'), $this->object->getSecondNameCase());
    }
    public function testManSirname633()
    {
        $this->object->setSecondName('Полищук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полищук,Полищука,Полищуку,Полищука,Полищуком,Полищуке'), $this->object->getSecondNameCase());
    }
    public function testManSirname634()
    {
        $this->object->setSecondName('Полторак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полторак,Полторака,Полтораку,Полторака,Полтораком,Полтораке'), $this->object->getSecondNameCase());
    }
    public function testManSirname635()
    {
        $this->object->setSecondName('Поляков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поляков,Полякова,Полякову,Полякова,Поляковым,Полякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname636()
    {
        $this->object->setSecondName('Поникаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поникаров,Поникарова,Поникарову,Поникарова,Поникаровым,Поникарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname637()
    {
        $this->object->setSecondName('Пономарев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пономарев,Пономарева,Пономареву,Пономарева,Пономаревым,Пономареве'), $this->object->getSecondNameCase());
    }
    public function testManSirname638()
    {
        $this->object->setSecondName('Пончиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пончиков,Пончикова,Пончикову,Пончикова,Пончиковым,Пончикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname639()
    {
        $this->object->setSecondName('Попов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Попов,Попова,Попову,Попова,Поповым,Попове'), $this->object->getSecondNameCase());
    }
    public function testManSirname640()
    {
        $this->object->setSecondName('Посохов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Посохов,Посохова,Посохову,Посохова,Посоховым,Посохове'), $this->object->getSecondNameCase());
    }
    public function testManSirname641()
    {
        $this->object->setSecondName('Потапов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Потапов,Потапова,Потапову,Потапова,Потаповым,Потапове'), $this->object->getSecondNameCase());
    }
    public function testManSirname642()
    {
        $this->object->setSecondName('Потемкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Потемкин,Потемкина,Потемкину,Потемкина,Потемкиным,Потемкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname643()
    {
        $this->object->setSecondName('Праздников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Праздников,Праздникова,Праздникову,Праздникова,Праздниковым,Праздникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname644()
    {
        $this->object->setSecondName('Примаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Примаков,Примакова,Примакову,Примакова,Примаковым,Примакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname645()
    {
        $this->object->setSecondName('Приходько');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Приходько,Приходько,Приходько,Приходько,Приходько,Приходько'), $this->object->getSecondNameCase());
    }
    public function testManSirname646()
    {
        $this->object->setSecondName('Проничев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Проничев,Проничева,Проничеву,Проничева,Проничевым,Проничеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname647()
    {
        $this->object->setSecondName('Протасов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Протасов,Протасова,Протасову,Протасова,Протасовым,Протасове'), $this->object->getSecondNameCase());
    }
    public function testManSirname648()
    {
        $this->object->setSecondName('Прохоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прохоров,Прохорова,Прохорову,Прохорова,Прохоровым,Прохорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname649()
    {
        $this->object->setSecondName('Пугачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пугачев,Пугачева,Пугачеву,Пугачева,Пугачевым,Пугачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname650()
    {
        $this->object->setSecondName('Пугин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пугин,Пугина,Пугину,Пугина,Пугиным,Пугине'), $this->object->getSecondNameCase());
    }
    public function testManSirname651()
    {
        $this->object->setSecondName('Пузанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пузанов,Пузанова,Пузанову,Пузанова,Пузановым,Пузанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname652()
    {
        $this->object->setSecondName('Путилин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Путилин,Путилина,Путилину,Путилина,Путилиным,Путилине'), $this->object->getSecondNameCase());
    }
    public function testManSirname653()
    {
        $this->object->setSecondName('Путин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Путин,Путина,Путину,Путина,Путиным,Путине'), $this->object->getSecondNameCase());
    }
    public function testManSirname654()
    {
        $this->object->setSecondName('Путятин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Путятин,Путятина,Путятину,Путятина,Путятиным,Путятине'), $this->object->getSecondNameCase());
    }
    public function testManSirname655()
    {
        $this->object->setSecondName('Пушкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пушкин,Пушкина,Пушкину,Пушкина,Пушкиным,Пушкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname656()
    {
        $this->object->setSecondName('Пыжалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пыжалов,Пыжалова,Пыжалову,Пыжалова,Пыжаловым,Пыжалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname657()
    {
        $this->object->setSecondName('Пырьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пырьев,Пырьева,Пырьеву,Пырьева,Пырьевым,Пырьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname658()
    {
        $this->object->setSecondName('Рабинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рабинович,Рабиновича,Рабиновичу,Рабиновича,Рабиновичем,Рабиновиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname659()
    {
        $this->object->setSecondName('Разин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Разин,Разина,Разину,Разина,Разиным,Разине'), $this->object->getSecondNameCase());
    }
    public function testManSirname660()
    {
        $this->object->setSecondName('Разуваев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Разуваев,Разуваева,Разуваеву,Разуваева,Разуваевым,Разуваеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname661()
    {
        $this->object->setSecondName('Распопов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Распопов,Распопова,Распопову,Распопова,Распоповым,Распопове'), $this->object->getSecondNameCase());
    }
    public function testManSirname662()
    {
        $this->object->setSecondName('Распутин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Распутин,Распутина,Распутину,Распутина,Распутиным,Распутине'), $this->object->getSecondNameCase());
    }
    public function testManSirname663()
    {
        $this->object->setSecondName('Расторгуев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Расторгуев,Расторгуева,Расторгуеву,Расторгуева,Расторгуевом,Расторгуеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname664()
    {
        $this->object->setSecondName('Ремизов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ремизов,Ремизова,Ремизову,Ремизова,Ремизовым,Ремизове'), $this->object->getSecondNameCase());
    }
    public function testManSirname665()
    {
        $this->object->setSecondName('Репин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Репин,Репина,Репину,Репина,Репиным,Репине'), $this->object->getSecondNameCase());
    }
    public function testManSirname666()
    {
        $this->object->setSecondName('Решетилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Решетилов,Решетилова,Решетилову,Решетилова,Решетиловым,Решетилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname667()
    {
        $this->object->setSecondName('Решетников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Решетников,Решетникова,Решетникову,Решетникова,Решетниковым,Решетникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname668()
    {
        $this->object->setSecondName('Родзянко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родзянко,Родзянко,Родзянко,Родзянко,Родзянко,Родзянко'), $this->object->getSecondNameCase());
    }
    public function testManSirname669()
    {
        $this->object->setSecondName('Рогачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рогачев,Рогачева,Рогачеву,Рогачев,Рогачевом,Рогачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname670()
    {
        $this->object->setSecondName('Рогов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рогов,Рогова,Рогову,Рогова,Роговым,Рогове'), $this->object->getSecondNameCase());
    }
    public function testManSirname671()
    {
        $this->object->setSecondName('Рогозин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рогозин,Рогозина,Рогозину,Рогозина,Рогозиным,Рогозине'), $this->object->getSecondNameCase());
    }
    public function testManSirname672()
    {
        $this->object->setSecondName('Рожков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рожков,Рожкова,Рожкову,Рожкова,Рожковым,Рожкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname673()
    {
        $this->object->setSecondName('Рокоссовский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рокоссовский,Рокоссовского,Рокоссовскому,Рокоссовского,Рокоссовским,Рокоссовском'), $this->object->getSecondNameCase());
    }
    public function testManSirname674()
    {
        $this->object->setSecondName('Романов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романов,Романова,Романову,Романова,Романовым,Романове'), $this->object->getSecondNameCase());
    }
    public function testManSirname675()
    {
        $this->object->setSecondName('Ростов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ростов,Ростова,Ростову,Ростов,Ростовом,Ростове'), $this->object->getSecondNameCase());
    }
    public function testManSirname676()
    {
        $this->object->setSecondName('Ростовцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ростовцев,Ростовцева,Ростовцеву,Ростовцева,Ростовцевым,Ростовцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname677()
    {
        $this->object->setSecondName('Румянцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Румянцев,Румянцева,Румянцеву,Румянцева,Румянцевым,Румянцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname678()
    {
        $this->object->setSecondName('Рунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рунов,Рунова,Рунову,Рунова,Руновым,Рунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname679()
    {
        $this->object->setSecondName('Русаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Русаков,Русакова,Русакову,Русакова,Русаковым,Русакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname680()
    {
        $this->object->setSecondName('Руских');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Руских,Руских,Руских,Руских,Руских,Руских'), $this->object->getSecondNameCase());
    }
    public function testManSirname681()
    {
        $this->object->setSecondName('Русских');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Русских,Русских,Русских,Русских,Русских,Русских'), $this->object->getSecondNameCase());
    }
    public function testManSirname682()
    {
        $this->object->setSecondName('Ручкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ручкин,Ручкина,Ручкину,Ручкина,Ручкиным,Ручкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname683()
    {
        $this->object->setSecondName('Рыбалкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рыбалкин,Рыбалкина,Рыбалкину,Рыбалкина,Рыбалкиным,Рыбалкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname684()
    {
        $this->object->setSecondName('Рыжанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рыжанов,Рыжанова,Рыжанову,Рыжанова,Рыжановым,Рыжанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname685()
    {
        $this->object->setSecondName('Рыжков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рыжков,Рыжкова,Рыжкову,Рыжкова,Рыжковым,Рыжкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname686()
    {
        $this->object->setSecondName('Рыжов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рыжов,Рыжова,Рыжову,Рыжова,Рыжовым,Рыжове'), $this->object->getSecondNameCase());
    }
    public function testManSirname687()
    {
        $this->object->setSecondName('Рытин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рытин,Рытина,Рытину,Рытина,Рытином,Рытине'), $this->object->getSecondNameCase());
    }
    public function testManSirname688()
    {
        $this->object->setSecondName('Рыченков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рыченков,Рыченкова,Рыченкову,Рыченкова,Рыченковым,Рыченкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname689()
    {
        $this->object->setSecondName('Рябков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рябков,Рябкова,Рябкову,Рябкова,Рябковым,Рябкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname690()
    {
        $this->object->setSecondName('Рябов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рябов,Рябова,Рябову,Рябова,Рябовым,Рябове'), $this->object->getSecondNameCase());
    }
    public function testManSirname691()
    {
        $this->object->setSecondName('Ряхин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ряхин,Ряхина,Ряхину,Ряхина,Ряхиным,Ряхине'), $this->object->getSecondNameCase());
    }
    public function testManSirname692()
    {
        $this->object->setSecondName('Сабитов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сабитов,Сабитова,Сабитову,Сабитова,Сабитовым,Сабитове'), $this->object->getSecondNameCase());
    }
    public function testManSirname693()
    {
        $this->object->setSecondName('Савасин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савасин,Савасина,Савасину,Савасина,Савасиным,Савасине'), $this->object->getSecondNameCase());
    }
    public function testManSirname694()
    {
        $this->object->setSecondName('Савинков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савинков,Савинкова,Савинкову,Савинкова,Савинковым,Савинкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname695()
    {
        $this->object->setSecondName('Савенков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савенков,Савенкова,Савенкову,Савенкова,Савенковым,Савенкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname696()
    {
        $this->object->setSecondName('Саврасов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Саврасов,Саврасова,Саврасову,Саврасова,Саврасовым,Саврасове'), $this->object->getSecondNameCase());
    }
    public function testManSirname697()
    {
        $this->object->setSecondName('Садыков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Садыков,Садыкова,Садыкову,Садыкова,Садыковым,Садыкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname698()
    {
        $this->object->setSecondName('Сазонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сазонов,Сазонова,Сазонову,Сазонова,Сазоновым,Сазонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname699()
    {
        $this->object->setSecondName('Салко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Салко,Салко,Салко,Салко,Салко,Салко'), $this->object->getSecondNameCase());
    }
    public function testManSirname700()
    {
        $this->object->setSecondName('Сальков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сальков,Салькова,Салькову,Салькова,Сальковым,Салькове'), $this->object->getSecondNameCase());
    }
    public function testManSirname701()
    {
        $this->object->setSecondName('Сальников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сальников,Сальникова,Сальникову,Сальникова,Сальниковым,Сальникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname702()
    {
        $this->object->setSecondName('Самойлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самойлов,Самойлова,Самойлову,Самойлова,Самойловым,Самойлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname703()
    {
        $this->object->setSecondName('Самохин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самохин,Самохина,Самохину,Самохина,Самохиным,Самохине'), $this->object->getSecondNameCase());
    }
    public function testManSirname704()
    {
        $this->object->setSecondName('Самсонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самсонов,Самсонова,Самсонову,Самсонова,Самсоновым,Самсонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname705()
    {
        $this->object->setSecondName('Санников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Санников,Санникова,Санникову,Санникова,Санниковым,Санникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname706()
    {
        $this->object->setSecondName('Сапогов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сапогов,Сапогова,Сапогову,Сапогова,Сапоговым,Сапогове'), $this->object->getSecondNameCase());
    }
    public function testManSirname707()
    {
        $this->object->setSecondName('Сапожников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сапожников,Сапожникова,Сапожникову,Сапожникова,Сапожниковым,Сапожникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname708()
    {
        $this->object->setSecondName('Сафиюлин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сафиюлин,Сафиюлина,Сафиюлину,Сафиюлина,Сафиюлиным,Сафиюлине'), $this->object->getSecondNameCase());
    }
    public function testManSirname709()
    {
        $this->object->setSecondName('Сахаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сахаров,Сахарова,Сахарову,Сахарова,Сахаровым,Сахарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname710()
    {
        $this->object->setSecondName('Свалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Свалов,Свалова,Свалову,Свалова,Сваловым,Свалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname711()
    {
        $this->object->setSecondName('Северинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Северинов,Северинова,Северинову,Северинова,Севериновым,Северинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname712()
    {
        $this->object->setSecondName('Севостьянов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Севостьянов,Севостьянова,Севостьянову,Севостьянова,Севостьяновым,Севостьянове'), $this->object->getSecondNameCase());
    }
    public function testManSirname713()
    {
        $this->object->setSecondName('Седельников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Седельников,Седельникова,Седельникову,Седельникова,Седельниковым,Седельникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname714()
    {
        $this->object->setSecondName('Седов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Седов,Седова,Седову,Седова,Седовым,Седове'), $this->object->getSecondNameCase());
    }
    public function testManSirname715()
    {
        $this->object->setSecondName('Селезнев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Селезнев,Селезнева,Селезневу,Селезнева,Селезневым,Селезневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname716()
    {
        $this->object->setSecondName('Селиванов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Селиванов,Селиванова,Селиванову,Селиванова,Селивановым,Селиванове'), $this->object->getSecondNameCase());
    }
    public function testManSirname717()
    {
        $this->object->setSecondName('Семенов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенов,Семенова,Семенову,Семенова,Семеновом,Семенове'), $this->object->getSecondNameCase());
    }
    public function testManSirname718()
    {
        $this->object->setSecondName('Семичаевский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семичаевский,Семичаевского,Семичаевскому,Семичаевского,Семичаевским,Семичаевском'), $this->object->getSecondNameCase());
    }
    public function testManSirname719()
    {
        $this->object->setSecondName('Сенькин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сенькин,Сенькина,Сенькину,Сенькина,Сенькиным,Сенькине'), $this->object->getSecondNameCase());
    }
    public function testManSirname720()
    {
        $this->object->setSecondName('Серебров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серебров,Сереброва,Сереброву,Сереброва,Серебровым,Сереброве'), $this->object->getSecondNameCase());
    }
    public function testManSirname721()
    {
        $this->object->setSecondName('Серебряков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серебряков,Серебрякова,Серебрякову,Серебрякова,Серебряковым,Серебрякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname722()
    {
        $this->object->setSecondName('Серегин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серегин,Серегина,Серегину,Серегина,Серегиным,Серегине'), $this->object->getSecondNameCase());
    }
    public function testManSirname723()
    {
        $this->object->setSecondName('Серов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серов,Серова,Серову,Серова,Серовым,Серове'), $this->object->getSecondNameCase());
    }
    public function testManSirname724()
    {
        $this->object->setSecondName('Серпионов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серпионов,Серпионова,Серпионову,Серпионова,Серпионовым,Серпионове'), $this->object->getSecondNameCase());
    }
    public function testManSirname725()
    {
        $this->object->setSecondName('Семянин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семянин,Семянина,Семянину,Семянина,Семяниным,Семянине'), $this->object->getSecondNameCase());
    }
    public function testManSirname726()
    {
        $this->object->setSecondName('Семин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семин,Семина,Семину,Семина,Семиным,Семине'), $this->object->getSecondNameCase());
    }
    public function testManSirname727()
    {
        $this->object->setSecondName('Серегин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серегин,Серегина,Серегину,Серегина,Серегиным,Серегине'), $this->object->getSecondNameCase());
    }
    public function testManSirname728()
    {
        $this->object->setSecondName('Сеченов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сеченов,Сеченова,Сеченову,Сеченова,Сеченовым,Сеченове'), $this->object->getSecondNameCase());
    }
    public function testManSirname729()
    {
        $this->object->setSecondName('Сиваков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сиваков,Сивакова,Сивакову,Сивакова,Сиваковым,Сивакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname730()
    {
        $this->object->setSecondName('Сигаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сигаев,Сигаева,Сигаеву,Сигаева,Сигаевым,Сигаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname731()
    {
        $this->object->setSecondName('Сигачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сигачев,Сигачева,Сигачеву,Сигачева,Сигачевым,Сигачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname732()
    {
        $this->object->setSecondName('Сидоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидоров,Сидорова,Сидорову,Сидорова,Сидоровым,Сидорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname733()
    {
        $this->object->setSecondName('Сизов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сизов,Сизова,Сизову,Сизова,Сизовым,Сизове'), $this->object->getSecondNameCase());
    }
    public function testManSirname734()
    {
        $this->object->setSecondName('Сизый');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сизый,Сизого,Сизому,Сизого,Сизым,Сизом'), $this->object->getSecondNameCase());
    }
    public function testManSirname735()
    {
        $this->object->setSecondName('Силиванов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Силиванов,Силиванова,Силиванову,Силиванова,Силивановым,Силиванове'), $this->object->getSecondNameCase());
    }
    public function testManSirname736()
    {
        $this->object->setSecondName('Силин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Силин,Силина,Силину,Силина,Силиным,Силине'), $this->object->getSecondNameCase());
    }
    public function testManSirname737()
    {
        $this->object->setSecondName('Сильвестров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сильвестров,Сильвестрова,Сильвестрову,Сильвестрова,Сильвестровым,Сильвестрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname738()
    {
        $this->object->setSecondName('Силаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Силаев,Силаева,Силаеву,Силаева,Силаевым,Силаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname739()
    {
        $this->object->setSecondName('Силиванов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Силиванов,Силиванова,Силиванову,Силиванова,Силивановым,Силиванове'), $this->object->getSecondNameCase());
    }
    public function testManSirname740()
    {
        $this->object->setSecondName('Скворцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скворцов,Скворцова,Скворцову,Скворцова,Скворцовым,Скворцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname741()
    {
        $this->object->setSecondName('Скрябин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скрябин,Скрябина,Скрябину,Скрябина,Скрябином,Скрябине'), $this->object->getSecondNameCase());
    }
    public function testManSirname742()
    {
        $this->object->setSecondName('Скоробогатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скоробогатов,Скоробогатова,Скоробогатову,Скоробогатова,Скоробогатовым,Скоробогатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname743()
    {
        $this->object->setSecondName('Скороходов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скороходов,Скороходова,Скороходову,Скороходова,Скороходовым,Скороходове'), $this->object->getSecondNameCase());
    }
    public function testManSirname744()
    {
        $this->object->setSecondName('Скуратов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скуратов,Скуратова,Скуратову,Скуратова,Скуратовым,Скуратове'), $this->object->getSecondNameCase());
    }
    public function testManSirname745()
    {
        $this->object->setSecondName('Слобожанин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Слобожанин,Слобожанина,Слобожанину,Слобожанина,Слобожанином,Слобожанине'), $this->object->getSecondNameCase());
    }
    public function testManSirname746()
    {
        $this->object->setSecondName('Случевский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Случевский,Случевского,Случевскому,Случевского,Случевским,Случевском'), $this->object->getSecondNameCase());
    }
    public function testManSirname747()
    {
        $this->object->setSecondName('Смирнитский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Смирнитский,Смирнитского,Смирнитскому,Смирнитского,Смирнитским,Смирнитском'), $this->object->getSecondNameCase());
    }
    public function testManSirname748()
    {
        $this->object->setSecondName('Смирнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Смирнов,Смирнова,Смирнову,Смирнова,Смирновым,Смирнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname749()
    {
        $this->object->setSecondName('Сметанин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сметанин,Сметанина,Сметанину,Сметанина,Сметаниным,Сметанине'), $this->object->getSecondNameCase());
    }
    public function testManSirname750()
    {
        $this->object->setSecondName('Смолин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Смолин,Смолина,Смолину,Смолина,Смолиным,Смолине'), $this->object->getSecondNameCase());
    }
    public function testManSirname751()
    {
        $this->object->setSecondName('Смолянинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Смолянинов,Смолянинова,Смолянинову,Смолянинова,Смоляниновым,Смолянинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname752()
    {
        $this->object->setSecondName('Снаткин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Снаткин,Снаткина,Снаткину,Снаткина,Снаткиным,Снаткине'), $this->object->getSecondNameCase());
    }
    public function testManSirname753()
    {
        $this->object->setSecondName('Снегирев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Снегирев,Снегирева,Снегиреву,Снегирева,Снегиревым,Снегиреве'), $this->object->getSecondNameCase());
    }
    public function testManSirname754()
    {
        $this->object->setSecondName('Снетков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Снетков,Снеткова,Снеткову,Снеткова,Снетковым,Снеткове'), $this->object->getSecondNameCase());
    }
    public function testManSirname755()
    {
        $this->object->setSecondName('Соболев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соболев,Соболева,Соболеву,Соболева,Соболевым,Соболеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname756()
    {
        $this->object->setSecondName('Соболевский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соболевский,Соболевского,Соболевскому,Соболевского,Соболевским,Соболевском'), $this->object->getSecondNameCase());
    }
    public function testManSirname757()
    {
        $this->object->setSecondName('Соколов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соколов,Соколова,Соколову,Соколова,Соколовым,Соколове'), $this->object->getSecondNameCase());
    }
    public function testManSirname758()
    {
        $this->object->setSecondName('Солдатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Солдатов,Солдатова,Солдатову,Солдатова,Солдатовым,Солдатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname759()
    {
        $this->object->setSecondName('Соловьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соловьев,Соловьева,Соловьеву,Соловьева,Соловьевым,Соловьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname760()
    {
        $this->object->setSecondName('Солодников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Солодников,Солодникова,Солодникову,Солодникова,Солодниковым,Солодникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname761()
    {
        $this->object->setSecondName('Соломин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соломин,Соломина,Соломину,Соломина,Соломиным,Соломине'), $this->object->getSecondNameCase());
    }
    public function testManSirname762()
    {
        $this->object->setSecondName('Соломонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соломонов,Соломонова,Соломонову,Соломонова,Соломоновым,Соломонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname763()
    {
        $this->object->setSecondName('Сопов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сопов,Сопова,Сопову,Сопова,Соповым,Сопове'), $this->object->getSecondNameCase());
    }
    public function testManSirname764()
    {
        $this->object->setSecondName('Сорокин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сорокин,Сорокина,Сорокину,Сорокина,Сорокиным,Сорокине'), $this->object->getSecondNameCase());
    }
    public function testManSirname765()
    {
        $this->object->setSecondName('Спанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Спанов,Спанова,Спанову,Спанова,Спановым,Спанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname766()
    {
        $this->object->setSecondName('Стариков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стариков,Старикова,Старикову,Старикова,Стариковым,Старикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname767()
    {
        $this->object->setSecondName('Староверов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Староверов,Староверова,Староверову,Староверова,Староверовым,Староверове'), $this->object->getSecondNameCase());
    }
    public function testManSirname768()
    {
        $this->object->setSecondName('Стеблев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стеблев,Стеблева,Стеблеву,Стеблева,Стеблевым,Стеблеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname769()
    {
        $this->object->setSecondName('Стегнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стегнов,Стегнова,Стегнову,Стегнова,Стегновым,Стегнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname770()
    {
        $this->object->setSecondName('Степанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанов,Степанова,Степанову,Степанова,Степановым,Степанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname771()
    {
        $this->object->setSecondName('Степанков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанков,Степанкова,Степанкову,Степанкова,Степанковым,Степанкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname772()
    {
        $this->object->setSecondName('Степашин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степашин,Степашина,Степашину,Степашина,Степашиным,Степашине'), $this->object->getSecondNameCase());
    }
    public function testManSirname773()
    {
        $this->object->setSecondName('Стрелков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стрелков,Стрелкова,Стрелкову,Стрелкова,Стрелковым,Стрелкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname774()
    {
        $this->object->setSecondName('Стрекалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стрекалов,Стрекалова,Стрекалову,Стрекалова,Стрекаловым,Стрекалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname775()
    {
        $this->object->setSecondName('Строганов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Строганов,Строганова,Строганову,Строганова,Строгановым,Строганове'), $this->object->getSecondNameCase());
    }
    public function testManSirname776()
    {
        $this->object->setSecondName('Субботин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Субботин,Субботина,Субботину,Субботина,Субботиным,Субботине'), $this->object->getSecondNameCase());
    }
    public function testManSirname777()
    {
        $this->object->setSecondName('Суботин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Суботин,Суботина,Суботину,Суботина,Суботиным,Суботине'), $this->object->getSecondNameCase());
    }
    public function testManSirname778()
    {
        $this->object->setSecondName('Суворин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Суворин,Суворина,Суворину,Суворина,Сувориным,Суворине'), $this->object->getSecondNameCase());
    }
    public function testManSirname779()
    {
        $this->object->setSecondName('Суворкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Суворкин,Суворкина,Суворкину,Суворкина,Суворкиным,Суворкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname780()
    {
        $this->object->setSecondName('Суворов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Суворов,Суворова,Суворову,Суворова,Суворовым,Суворове'), $this->object->getSecondNameCase());
    }
    public function testManSirname781()
    {
        $this->object->setSecondName('Сунгатулин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сунгатулин,Сунгатулина,Сунгатулину,Сунгатулина,Сунгатулиным,Сунгатулине'), $this->object->getSecondNameCase());
    }
    public function testManSirname782()
    {
        $this->object->setSecondName('Сукачев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сукачев,Сукачева,Сукачеву,Сукачева,Сукачевым,Сукачеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname783()
    {
        $this->object->setSecondName('Суриков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Суриков,Сурикова,Сурикову,Сурикова,Суриковым,Сурикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname784()
    {
        $this->object->setSecondName('Сусоев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сусоев,Сусоева,Сусоеву,Сусоева,Сусоевым,Сусоеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname785()
    {
        $this->object->setSecondName('Сутулин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сутулин,Сутулина,Сутулину,Сутулина,Сутулиным,Сутулине'), $this->object->getSecondNameCase());
    }
    public function testManSirname786()
    {
        $this->object->setSecondName('Сухоруков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сухоруков,Сухорукова,Сухорукову,Сухорукова,Сухоруковым,Сухорукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname787()
    {
        $this->object->setSecondName('Сучков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сучков,Сучкова,Сучкову,Сучкова,Сучковым,Сучкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname788()
    {
        $this->object->setSecondName('Сысоев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сысоев,Сысоева,Сысоеву,Сысоева,Сысоевым,Сысоеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname789()
    {
        $this->object->setSecondName('Сытников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сытников,Сытникова,Сытникову,Сытникова,Сытниковым,Сытникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname790()
    {
        $this->object->setSecondName('Сычев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сычев,Сычева,Сычеву,Сычева,Сычевым,Сычеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname791()
    {
        $this->object->setSecondName('Сюкосев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сюкосев,Сюкосева,Сюкосеву,Сюкосева,Сюкосевым,Сюкосеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname792()
    {
        $this->object->setSecondName('Табаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Табаков,Табакова,Табакову,Табакова,Табаковым,Табакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname793()
    {
        $this->object->setSecondName('Табернакулов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Табернакулов,Табернакулова,Табернакулову,Табернакулова,Табернакуловым,Табернакулове'), $this->object->getSecondNameCase());
    }
    public function testManSirname794()
    {
        $this->object->setSecondName('Таланов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Таланов,Таланова,Таланову,Таланова,Талановым,Таланове'), $this->object->getSecondNameCase());
    }
    public function testManSirname795()
    {
        $this->object->setSecondName('Талалихин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Талалихин,Талалихина,Талалихину,Талалихина,Талалихиным,Талалихине'), $this->object->getSecondNameCase());
    }
    public function testManSirname796()
    {
        $this->object->setSecondName('Танков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Танков,Танкова,Танкову,Танкова,Танковым,Танкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname797()
    {
        $this->object->setSecondName('Тарасов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасов,Тарасова,Тарасову,Тарасова,Тарасовым,Тарасове'), $this->object->getSecondNameCase());
    }
    public function testManSirname798()
    {
        $this->object->setSecondName('Татаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Татаров,Татарова,Татарову,Татарова,Татаровым,Татарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname799()
    {
        $this->object->setSecondName('Твардовский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Твардовский,Твардовского,Твардовскому,Твардовского,Твардовским,Твардовском'), $this->object->getSecondNameCase());
    }
    public function testManSirname800()
    {
        $this->object->setSecondName('Темкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Темкин,Темкина,Темкину,Темкина,Темкиным,Темкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname801()
    {
        $this->object->setSecondName('Теплов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Теплов,Теплова,Теплову,Теплова,Тепловым,Теплове'), $this->object->getSecondNameCase());
    }
    public function testManSirname802()
    {
        $this->object->setSecondName('Теребов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Теребов,Теребова,Теребову,Теребова,Теребовым,Теребове'), $this->object->getSecondNameCase());
    }
    public function testManSirname803()
    {
        $this->object->setSecondName('Тетерев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тетерев,Тетерева,Тетереву,Тетерева,Тетеревом,Тетереве'), $this->object->getSecondNameCase());
    }
    public function testManSirname804()
    {
        $this->object->setSecondName('Типалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Типалов,Типалова,Типалову,Типалова,Типаловым,Типалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname805()
    {
        $this->object->setSecondName('Титов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Титов,Титова,Титову,Титова,Титовым,Титове'), $this->object->getSecondNameCase());
    }
    public function testManSirname806()
    {
        $this->object->setSecondName('Тихвинский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихвинский,Тихвинского,Тихвинскому,Тихвинского,Тихвинским,Тихвинском'), $this->object->getSecondNameCase());
    }
    public function testManSirname807()
    {
        $this->object->setSecondName('Тихомиров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихомиров,Тихомирова,Тихомирову,Тихомирова,Тихомировым,Тихомирове'), $this->object->getSecondNameCase());
    }
    public function testManSirname808()
    {
        $this->object->setSecondName('Тихонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихонов,Тихонова,Тихонову,Тихонова,Тихоновым,Тихонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname809()
    {
        $this->object->setSecondName('Токарев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Токарев,Токарева,Токареву,Токарева,Токаревым,Токареве'), $this->object->getSecondNameCase());
    }
    public function testManSirname810()
    {
        $this->object->setSecondName('Токмаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Токмаков,Токмакова,Токмакову,Токмакова,Токмаковым,Токмакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname811()
    {
        $this->object->setSecondName('Толбанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Толбанов,Толбанова,Толбанову,Толбанова,Толбановым,Толбанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname812()
    {
        $this->object->setSecondName('Толстобров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Толстобров,Толстоброва,Толстоброву,Толстоброва,Толстобровым,Толстоброве'), $this->object->getSecondNameCase());
    }
    public function testManSirname813()
    {
        $this->object->setSecondName('Толстокожев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Толстокожев,Толстокожева,Толстокожеву,Толстокожева,Толстокожевым,Толстокожеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname814()
    {
        $this->object->setSecondName('Толстой');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Толстой,Толстого,Толстому,Толстого,Толстым,Толстом'), $this->object->getSecondNameCase());
    }
    public function testManSirname815()
    {
        $this->object->setSecondName('Топоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Топоров,Топорова,Топорову,Топорова,Топоровым,Топорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname816()
    {
        $this->object->setSecondName('Торопов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Торопов,Торопова,Торопову,Торопова,Тороповым,Торопове'), $this->object->getSecondNameCase());
    }
    public function testManSirname817()
    {
        $this->object->setSecondName('Торчинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Торчинович,Торчиновича,Торчиновичу,Торчиновича,Торчиновичем,Торчиновиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname818()
    {
        $this->object->setSecondName('Травкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Травкин,Травкина,Травкину,Травкина,Травкиным,Травкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname819()
    {
        $this->object->setSecondName('Тредиаковский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тредиаковский,Тредиаковского,Тредиаковскому,Тредиаковского,Тредиаковским,Тредиаковском'), $this->object->getSecondNameCase());
    }
    public function testManSirname820()
    {
        $this->object->setSecondName('Третьяков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Третьяков,Третьякова,Третьякову,Третьякова,Третьяковым,Третьякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname821()
    {
        $this->object->setSecondName('Трифонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трифонов,Трифонова,Трифонову,Трифонова,Трифоновым,Трифонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname822()
    {
        $this->object->setSecondName('Трофимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трофимов,Трофимова,Трофимову,Трофимова,Трофимовым,Трофимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname823()
    {
        $this->object->setSecondName('Трусов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трусов,Трусова,Трусову,Трусова,Трусовым,Трусове'), $this->object->getSecondNameCase());
    }
    public function testManSirname824()
    {
        $this->object->setSecondName('Трутнев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трутнев,Трутнева,Трутневу,Трутнева,Трутневым,Трутневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname825()
    {
        $this->object->setSecondName('Труфанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Труфанов,Труфанова,Труфанову,Труфанова,Труфановым,Труфанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname826()
    {
        $this->object->setSecondName('Трухин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трухин,Трухина,Трухину,Трухина,Трухиным,Трухине'), $this->object->getSecondNameCase());
    }
    public function testManSirname827()
    {
        $this->object->setSecondName('Трындин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трындин,Трындина,Трындину,Трындина,Трындином,Трындине'), $this->object->getSecondNameCase());
    }
    public function testManSirname828()
    {
        $this->object->setSecondName('Туполев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Туполев,Туполева,Туполеву,Туполева,Туполевым,Туполеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname829()
    {
        $this->object->setSecondName('Турбин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Турбин,Турбина,Турбину,Турбина,Турбиным,Турбине'), $this->object->getSecondNameCase());
    }
    public function testManSirname830()
    {
        $this->object->setSecondName('Тургенев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тургенев,Тургенева,Тургеневу,Тургенева,Тургеневым,Тургеневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname831()
    {
        $this->object->setSecondName('Туров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Туров,Турова,Турову,Турова,Туровым,Турове'), $this->object->getSecondNameCase());
    }
    public function testManSirname832()
    {
        $this->object->setSecondName('Турфанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Турфанов,Турфанова,Турфанову,Турфанова,Турфановым,Турфанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname833()
    {
        $this->object->setSecondName('Тычкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тычкин,Тычкина,Тычкину,Тычкина,Тычкиным,Тычкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname834()
    {
        $this->object->setSecondName('Тюшняков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тюшняков,Тюшнякова,Тюшнякову,Тюшнякова,Тюшняковым,Тюшнякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname835()
    {
        $this->object->setSecondName('Телицын');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Телицын,Телицына,Телицыну,Телицына,Телицыным,Телицыне'), $this->object->getSecondNameCase());
    }
    public function testManSirname836()
    {
        $this->object->setSecondName('Тянников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тянников,Тянникова,Тянникову,Тянникова,Тянниковым,Тянникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname837()
    {
        $this->object->setSecondName('Убейсобакин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Убейсобакин,Убейсобакина,Убейсобакину,Убейсобакина,Убейсобакиным,Убейсобакине'), $this->object->getSecondNameCase());
    }
    public function testManSirname838()
    {
        $this->object->setSecondName('Угольников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Угольников,Угольникова,Угольникову,Угольникова,Угольниковым,Угольникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname839()
    {
        $this->object->setSecondName('Ульянов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ульянов,Ульянова,Ульянову,Ульянова,Ульяновым,Ульянове'), $this->object->getSecondNameCase());
    }
    public function testManSirname840()
    {
        $this->object->setSecondName('Ульяшин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ульяшин,Ульяшина,Ульяшину,Ульяшина,Ульяшиным,Ульяшине'), $this->object->getSecondNameCase());
    }
    public function testManSirname841()
    {
        $this->object->setSecondName('Усатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Усатов,Усатова,Усатову,Усатова,Усатовым,Усатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname842()
    {
        $this->object->setSecondName('Усов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Усов,Усова,Усову,Усова,Усовым,Усове'), $this->object->getSecondNameCase());
    }
    public function testManSirname843()
    {
        $this->object->setSecondName('Устинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Устинов,Устинова,Устинову,Устинова,Устиновым,Устинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname844()
    {
        $this->object->setSecondName('Устюжанин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Устюжанин,Устюжанина,Устюжанину,Устюжанина,Устюжанином,Устюжанине'), $this->object->getSecondNameCase());
    }
    public function testManSirname845()
    {
        $this->object->setSecondName('Утесов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Утесов,Утесова,Утесову,Утесова,Утесовым,Утесове'), $this->object->getSecondNameCase());
    }
    public function testManSirname846()
    {
        $this->object->setSecondName('Ухов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ухов,Ухова,Ухову,Ухова,Уховым,Ухове'), $this->object->getSecondNameCase());
    }
    public function testManSirname847()
    {
        $this->object->setSecondName('Фанин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фанин,Фанина,Фанину,Фанина,Фаниным,Фанине'), $this->object->getSecondNameCase());
    }
    public function testManSirname848()
    {
        $this->object->setSecondName('Фамусов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фамусов,Фамусова,Фамусову,Фамусова,Фамусовым,Фамусове'), $this->object->getSecondNameCase());
    }
    public function testManSirname849()
    {
        $this->object->setSecondName('Федин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федин,Федина,Федину,Федина,Фединым,Федине'), $this->object->getSecondNameCase());
    }
    public function testManSirname850()
    {
        $this->object->setSecondName('Федосов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федосов,Федосова,Федосову,Федосова,Федосовым,Федосове'), $this->object->getSecondNameCase());
    }
    public function testManSirname851()
    {
        $this->object->setSecondName('Федотов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федотов,Федотова,Федотову,Федотова,Федотовым,Федотове'), $this->object->getSecondNameCase());
    }
    public function testManSirname852()
    {
        $this->object->setSecondName('Федосеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федосеев,Федосеева,Федосееву,Федосеева,Федосеевым,Федосееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname853()
    {
        $this->object->setSecondName('Федченков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федченков,Федченкова,Федченкову,Федченкова,Федченковым,Федченкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname854()
    {
        $this->object->setSecondName('Федоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федоров,Федорова,Федорову,Федорова,Федоровым,Федорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname855()
    {
        $this->object->setSecondName('Федулов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федулов,Федулова,Федулову,Федулова,Федуловым,Федулове'), $this->object->getSecondNameCase());
    }
    public function testManSirname856()
    {
        $this->object->setSecondName('Фетисов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фетисов,Фетисова,Фетисову,Фетисова,Фетисовым,Фетисове'), $this->object->getSecondNameCase());
    }
    public function testManSirname857()
    {
        $this->object->setSecondName('Филатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филатов,Филатова,Филатову,Филатова,Филатовым,Филатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname858()
    {
        $this->object->setSecondName('Филимонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филимонов,Филимонова,Филимонову,Филимонова,Филимоновым,Филимонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname859()
    {
        $this->object->setSecondName('Филипов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филипов,Филипова,Филипову,Филипова,Филиповым,Филипове'), $this->object->getSecondNameCase());
    }
    public function testManSirname860()
    {
        $this->object->setSecondName('Филиппов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филиппов,Филиппова,Филиппову,Филиппова,Филипповым,Филиппове'), $this->object->getSecondNameCase());
    }
    public function testManSirname861()
    {
        $this->object->setSecondName('Флеров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Флеров,Флерова,Флерову,Флерова,Флеровым,Флерове'), $this->object->getSecondNameCase());
    }
    public function testManSirname862()
    {
        $this->object->setSecondName('Фокин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фокин,Фокина,Фокину,Фокина,Фокиным,Фокине'), $this->object->getSecondNameCase());
    }
    public function testManSirname863()
    {
        $this->object->setSecondName('Фомин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фомин,Фомина,Фомину,Фомина,Фоминым,Фомине'), $this->object->getSecondNameCase());
    }
    public function testManSirname864()
    {
        $this->object->setSecondName('Фомичев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фомичев,Фомичева,Фомичеву,Фомичева,Фомичевым,Фомичеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname865()
    {
        $this->object->setSecondName('Фонвизин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фонвизин,Фонвизина,Фонвизину,Фонвизина,Фонвизиным,Фонвизине'), $this->object->getSecondNameCase());
    }
    public function testManSirname866()
    {
        $this->object->setSecondName('Форопонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Форопонов,Форопонова,Форопонову,Форопонова,Форопоновым,Форопонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname867()
    {
        $this->object->setSecondName('Фирсов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фирсов,Фирсова,Фирсову,Фирсова,Фирсовым,Фирсове'), $this->object->getSecondNameCase());
    }
    public function testManSirname868()
    {
        $this->object->setSecondName('Фролов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фролов,Фролова,Фролову,Фролова,Фроловым,Фролове'), $this->object->getSecondNameCase());
    }
    public function testManSirname869()
    {
        $this->object->setSecondName('Францев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Францев,Францева,Францеву,Францева,Францевым,Францеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname870()
    {
        $this->object->setSecondName('Фукин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фукин,Фукина,Фукину,Фукина,Фукиным,Фукине'), $this->object->getSecondNameCase());
    }
    public function testManSirname871()
    {
        $this->object->setSecondName('Хабалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хабалов,Хабалова,Хабалову,Хабалова,Хабаловым,Хабалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname872()
    {
        $this->object->setSecondName('Халтурин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Халтурин,Халтурина,Халтурину,Халтурин,Халтурином,Халтурине'), $this->object->getSecondNameCase());
    }
    public function testManSirname873()
    {
        $this->object->setSecondName('Харитонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харитонов,Харитонова,Харитонову,Харитонова,Харитоновым,Харитонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname874()
    {
        $this->object->setSecondName('Харламов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харламов,Харламова,Харламову,Харламова,Харламовым,Харламове'), $this->object->getSecondNameCase());
    }
    public function testManSirname875()
    {
        $this->object->setSecondName('Хлебников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хлебников,Хлебникова,Хлебникову,Хлебникова,Хлебниковым,Хлебникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname876()
    {
        $this->object->setSecondName('Хлопонин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хлопонин,Хлопонина,Хлопонину,Хлопонина,Хлопониным,Хлопонине'), $this->object->getSecondNameCase());
    }
    public function testManSirname877()
    {
        $this->object->setSecondName('Холодов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Холодов,Холодова,Холодову,Холодова,Холодовым,Холодове'), $this->object->getSecondNameCase());
    }
    public function testManSirname878()
    {
        $this->object->setSecondName('Хомколов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хомколов,Хомколова,Хомколову,Хомколова,Хомколовым,Хомколове'), $this->object->getSecondNameCase());
    }
    public function testManSirname879()
    {
        $this->object->setSecondName('Храмов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Храмов,Храмова,Храмову,Храмова,Храмовым,Храмове'), $this->object->getSecondNameCase());
    }
    public function testManSirname880()
    {
        $this->object->setSecondName('Хромов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хромов,Хромова,Хромову,Хромова,Хромовым,Хромове'), $this->object->getSecondNameCase());
    }
    public function testManSirname881()
    {
        $this->object->setSecondName('Худовеков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Худовеков,Худовекова,Худовекову,Худовекова,Худовековым,Худовекове'), $this->object->getSecondNameCase());
    }
    public function testManSirname882()
    {
        $this->object->setSecondName('Хлебов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хлебов,Хлебова,Хлебову,Хлебова,Хлебовым,Хлебове'), $this->object->getSecondNameCase());
    }
    public function testManSirname883()
    {
        $this->object->setSecondName('Хуртин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хуртин,Хуртина,Хуртину,Хуртина,Хуртином,Хуртине'), $this->object->getSecondNameCase());
    }
    public function testManSirname884()
    {
        $this->object->setSecondName('Хребтов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хребтов,Хребтова,Хребтову,Хребтова,Хребтовым,Хребтове'), $this->object->getSecondNameCase());
    }
    public function testManSirname885()
    {
        $this->object->setSecondName('Худяков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Худяков,Худякова,Худякову,Худякова,Худяковым,Худякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname886()
    {
        $this->object->setSecondName('Царицын');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Царицын,Царицына,Царицыну,Царицын,Царицыном,Царицыне'), $this->object->getSecondNameCase());
    }
    public function testManSirname887()
    {
        $this->object->setSecondName('Цветаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Цветаев,Цветаева,Цветаеву,Цветаева,Цветаевым,Цветаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname888()
    {
        $this->object->setSecondName('Цветков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Цветков,Цветкова,Цветкову,Цветкова,Цветковым,Цветкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname889()
    {
        $this->object->setSecondName('Циолковский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Циолковский,Циолковского,Циолковскому,Циолковского,Циолковским,Циолковском'), $this->object->getSecondNameCase());
    }
    public function testManSirname890()
    {
        $this->object->setSecondName('Цитников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Цитников,Цитникова,Цитникову,Цитникова,Цитниковым,Цитникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname891()
    {
        $this->object->setSecondName('Цуканов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Цуканов,Цуканова,Цуканову,Цуканова,Цукановым,Цуканове'), $this->object->getSecondNameCase());
    }
    public function testManSirname892()
    {
        $this->object->setSecondName('Чаадаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чаадаев,Чаадаева,Чаадаеву,Чаадаева,Чаадаевым,Чаадаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname893()
    {
        $this->object->setSecondName('Чадов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чадов,Чадова,Чадову,Чадова,Чадовым,Чадове'), $this->object->getSecondNameCase());
    }
    public function testManSirname894()
    {
        $this->object->setSecondName('Чазов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чазов,Чазова,Чазову,Чазова,Чазовым,Чазове'), $this->object->getSecondNameCase());
    }
    public function testManSirname895()
    {
        $this->object->setSecondName('Чалый');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чалый,Чалого,Чалому,Чалого,Чалым,Чалом'), $this->object->getSecondNameCase());
    }
    public function testManSirname896()
    {
        $this->object->setSecondName('Чапаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чапаев,Чапаева,Чапаеву,Чапаев,Чапаевом,Чапаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname897()
    {
        $this->object->setSecondName('Чебыкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чебыкин,Чебыкина,Чебыкину,Чебыкина,Чебыкиным,Чебыкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname898()
    {
        $this->object->setSecondName('Чежеков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чежеков,Чежекова,Чежекову,Чежекова,Чежековым,Чежекове'), $this->object->getSecondNameCase());
    }
    public function testManSirname899()
    {
        $this->object->setSecondName('Чекмарев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чекмарев,Чекмарева,Чекмареву,Чекмарева,Чекмаревым,Чекмареве'), $this->object->getSecondNameCase());
    }
    public function testManSirname900()
    {
        $this->object->setSecondName('Челомеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Челомеев,Челомеева,Челомееву,Челомеева,Челомеевым,Челомееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname901()
    {
        $this->object->setSecondName('Челомей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Челомей,Челомея,Челомею,Челомея,Челомеем,Челомее'), $this->object->getSecondNameCase());
    }
    public function testManSirname902()
    {
        $this->object->setSecondName('Челпанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Челпанов,Челпанова,Челпанову,Челпанова,Челпановым,Челпанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname903()
    {
        $this->object->setSecondName('Чендев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чендев,Чендева,Чендеву,Чендева,Чендевым,Чендеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname904()
    {
        $this->object->setSecondName('Черенчиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Черенчиков,Черенчикова,Черенчикову,Черенчикова,Черенчиковым,Черенчикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname905()
    {
        $this->object->setSecondName('Черепанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Черепанов,Черепанова,Черепанову,Черепанова,Черепановым,Черепанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname906()
    {
        $this->object->setSecondName('Черкашин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Черкашин,Черкашина,Черкашину,Черкашина,Черкашиным,Черкашине'), $this->object->getSecondNameCase());
    }
    public function testManSirname907()
    {
        $this->object->setSecondName('Чернов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чернов,Чернова,Чернову,Чернова,Черновым,Чернове'), $this->object->getSecondNameCase());
    }
    public function testManSirname908()
    {
        $this->object->setSecondName('Чернышев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чернышев,Чернышева,Чернышеву,Чернышева,Чернышевым,Чернышеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname909()
    {
        $this->object->setSecondName('Чернаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чернаков,Чернакова,Чернакову,Чернакова,Чернаковом,Чернакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname910()
    {
        $this->object->setSecondName('Черников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Черников,Черникова,Черникову,Черникова,Черниковым,Черникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname911()
    {
        $this->object->setSecondName('Чесноков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чесноков,Чеснокова,Чеснокову,Чеснокова,Чесноковым,Чеснокове'), $this->object->getSecondNameCase());
    }
    public function testManSirname912()
    {
        $this->object->setSecondName('Чиграков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чиграков,Чигракова,Чигракову,Чигракова,Чиграковым,Чигракове'), $this->object->getSecondNameCase());
    }
    public function testManSirname913()
    {
        $this->object->setSecondName('Чижиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чижиков,Чижикова,Чижикову,Чижикова,Чижиковым,Чижикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname914()
    {
        $this->object->setSecondName('Чиркаш');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чиркаш,Чиркаша,Чиркашу,Чиркаша,Чиркашом,Чиркаше'), $this->object->getSecondNameCase());
    }
    public function testManSirname915()
    {
        $this->object->setSecondName('Чистяков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чистяков,Чистякова,Чистякову,Чистякова,Чистяковым,Чистякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname916()
    {
        $this->object->setSecondName('Чичиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чичиков,Чичикова,Чичикову,Чичикова,Чичиковым,Чичикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname917()
    {
        $this->object->setSecondName('Чичканов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чичканов,Чичканова,Чичканову,Чичканова,Чичкановым,Чичканове'), $this->object->getSecondNameCase());
    }
    public function testManSirname918()
    {
        $this->object->setSecondName('Чкалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чкалов,Чкалова,Чкалову,Чкалова,Чкаловым,Чкалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname919()
    {
        $this->object->setSecondName('Чмыхов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чмыхов,Чмыхова,Чмыхову,Чмыхова,Чмыховым,Чмыхове'), $this->object->getSecondNameCase());
    }
    public function testManSirname920()
    {
        $this->object->setSecondName('Чугунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чугунов,Чугунова,Чугунову,Чугунова,Чугуновым,Чугунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname921()
    {
        $this->object->setSecondName('Чужинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чужинов,Чужинова,Чужинову,Чужинова,Чужиновым,Чужинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname922()
    {
        $this->object->setSecondName('Чукчов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чукчов,Чукчова,Чукчову,Чукчова,Чукчовым,Чукчове'), $this->object->getSecondNameCase());
    }
    public function testManSirname923()
    {
        $this->object->setSecondName('Чукреев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чукреев,Чукреева,Чукрееву,Чукреева,Чукреевым,Чукрееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname924()
    {
        $this->object->setSecondName('Чупов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чупов,Чупова,Чупову,Чупова,Чуповым,Чупове'), $this->object->getSecondNameCase());
    }
    public function testManSirname925()
    {
        $this->object->setSecondName('Чуприн');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чуприн,Чуприна,Чуприну,Чуприна,Чуприным,Чуприне'), $this->object->getSecondNameCase());
    }
    public function testManSirname926()
    {
        $this->object->setSecondName('Чупров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чупров,Чупрова,Чупрову,Чупрова,Чупровом,Чупрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname927()
    {
        $this->object->setSecondName('Чучанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чучанов,Чучанова,Чучанову,Чучанова,Чучановым,Чучанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname928()
    {
        $this->object->setSecondName('Чучумашев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чучумашев,Чучумашева,Чучумашеву,Чучумашева,Чучумашевым,Чучумашеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname929()
    {
        $this->object->setSecondName('Шабунин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шабунин,Шабунина,Шабунину,Шабунина,Шабуниным,Шабунине'), $this->object->getSecondNameCase());
    }
    public function testManSirname930()
    {
        $this->object->setSecondName('Шакмаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шакмаков,Шакмакова,Шакмакову,Шакмакова,Шакмаковым,Шакмакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname931()
    {
        $this->object->setSecondName('Шаляпин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шаляпин,Шаляпина,Шаляпину,Шаляпина,Шаляпиным,Шаляпине'), $this->object->getSecondNameCase());
    }
    public function testManSirname932()
    {
        $this->object->setSecondName('Шаповалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шаповалов,Шаповалова,Шаповалову,Шаповалова,Шаповаловым,Шаповалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname933()
    {
        $this->object->setSecondName('Шапошников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шапошников,Шапошникова,Шапошникову,Шапошникова,Шапошниковым,Шапошникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname934()
    {
        $this->object->setSecondName('Шарапов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шарапов,Шарапова,Шарапову,Шарапова,Шараповым,Шарапове'), $this->object->getSecondNameCase());
    }
    public function testManSirname935()
    {
        $this->object->setSecondName('Шаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шаров,Шарова,Шарову,Шарова,Шаровым,Шарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname936()
    {
        $this->object->setSecondName('Шаршин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шаршин,Шаршина,Шаршину,Шаршина,Шаршиным,Шаршине'), $this->object->getSecondNameCase());
    }
    public function testManSirname937()
    {
        $this->object->setSecondName('Шашлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шашлов,Шашлова,Шашлову,Шашлова,Шашловым,Шашлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname938()
    {
        $this->object->setSecondName('Шведов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шведов,Шведова,Шведову,Шведова,Шведовым,Шведове'), $this->object->getSecondNameCase());
    }
    public function testManSirname939()
    {
        $this->object->setSecondName('Шевелек');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шевелек,Шевелька,Шевельку,Шевелька,Шевельком,Шевельке'), $this->object->getSecondNameCase());
    }
    public function testManSirname940()
    {
        $this->object->setSecondName('Шеломов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шеломов,Шеломова,Шеломову,Шеломова,Шеломовым,Шеломове'), $this->object->getSecondNameCase());
    }
    public function testManSirname941()
    {
        $this->object->setSecondName('Шепкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шепкин,Шепкина,Шепкину,Шепкина,Шепкиным,Шепкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname942()
    {
        $this->object->setSecondName('Шеповалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шеповалов,Шеповалова,Шеповалову,Шеповалова,Шеповаловым,Шеповалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname943()
    {
        $this->object->setSecondName('Шереметьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шереметьев,Шереметьева,Шереметьеву,Шереметьева,Шереметьевым,Шереметьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname944()
    {
        $this->object->setSecondName('Шерстов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шерстов,Шерстова,Шерстову,Шерстова,Шерстовым,Шерстове'), $this->object->getSecondNameCase());
    }
    public function testManSirname945()
    {
        $this->object->setSecondName('Шикалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шикалов,Шикалова,Шикалову,Шикалова,Шикаловым,Шикалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname946()
    {
        $this->object->setSecondName('Ширманов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ширманов,Ширманова,Ширманову,Ширманова,Ширмановым,Ширманове'), $this->object->getSecondNameCase());
    }
    public function testManSirname947()
    {
        $this->object->setSecondName('Шихранов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шихранов,Шихранова,Шихранову,Шихранова,Шихрановым,Шихранове'), $this->object->getSecondNameCase());
    }
    public function testManSirname948()
    {
        $this->object->setSecondName('Шишкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шишкин,Шишкина,Шишкину,Шишкина,Шишкиным,Шишкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname949()
    {
        $this->object->setSecondName('Шишлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шишлов,Шишлова,Шишлову,Шишлова,Шишловым,Шишлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname950()
    {
        $this->object->setSecondName('Шишов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шишов,Шишова,Шишову,Шишова,Шишовым,Шишове'), $this->object->getSecondNameCase());
    }
    public function testManSirname951()
    {
        $this->object->setSecondName('Шкуратов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шкуратов,Шкуратова,Шкуратову,Шкуратова,Шкуратовым,Шкуратове'), $this->object->getSecondNameCase());
    }
    public function testManSirname952()
    {
        $this->object->setSecondName('Шлыков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шлыков,Шлыкова,Шлыкову,Шлыкова,Шлыковым,Шлыкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname953()
    {
        $this->object->setSecondName('Шмаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шмаков,Шмакова,Шмакову,Шмакова,Шмаковым,Шмакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname954()
    {
        $this->object->setSecondName('Шмелев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шмелев,Шмелева,Шмелеву,Шмелева,Шмелевым,Шмелеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname955()
    {
        $this->object->setSecondName('Шубин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шубин,Шубина,Шубину,Шубина,Шубиным,Шубине'), $this->object->getSecondNameCase());
    }
    public function testManSirname956()
    {
        $this->object->setSecondName('Шубкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шубкин,Шубкина,Шубкину,Шубкина,Шубкиным,Шубкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname957()
    {
        $this->object->setSecondName('Шувалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шувалов,Шувалова,Шувалову,Шувалова,Шуваловым,Шувалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname958()
    {
        $this->object->setSecondName('Шуйский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шуйский,Шуйского,Шуйскому,Шуйского,Шуйским,Шуйском'), $this->object->getSecondNameCase());
    }
    public function testManSirname959()
    {
        $this->object->setSecondName('Шукшин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шукшин,Шукшина,Шукшину,Шукшина,Шукшиным,Шукшине'), $this->object->getSecondNameCase());
    }
    public function testManSirname960()
    {
        $this->object->setSecondName('Шулев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шулев,Шулева,Шулеву,Шулева,Шулевым,Шулеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname961()
    {
        $this->object->setSecondName('Шульдешов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шульдешов,Шульдешова,Шульдешову,Шульдешова,Шульдешовым,Шульдешове'), $this->object->getSecondNameCase());
    }
    public function testManSirname962()
    {
        $this->object->setSecondName('Шульгин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шульгин,Шульгина,Шульгину,Шульгина,Шульгиным,Шульгине'), $this->object->getSecondNameCase());
    }
    public function testManSirname963()
    {
        $this->object->setSecondName('Шурупов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шурупов,Шурупова,Шурупову,Шурупова,Шуруповым,Шурупове'), $this->object->getSecondNameCase());
    }
    public function testManSirname964()
    {
        $this->object->setSecondName('Шушалев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шушалев,Шушалева,Шушалеву,Шушалева,Шушалевым,Шушалеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname965()
    {
        $this->object->setSecondName('Шурша');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шурша,Шурши,Шурше,Шуршу,Шуршей,Шурше'), $this->object->getSecondNameCase());
    }
    public function testManSirname966()
    {
        $this->object->setSecondName('Щавельский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щавельский,Щавельского,Щавельскому,Щавельского,Щавельским,Щавельском'), $this->object->getSecondNameCase());
    }
    public function testManSirname967()
    {
        $this->object->setSecondName('Щегельский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щегельский,Щегельского,Щегельскому,Щегельского,Щегельским,Щегельском'), $this->object->getSecondNameCase());
    }
    public function testManSirname968()
    {
        $this->object->setSecondName('Щеглов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щеглов,Щеглова,Щеглову,Щеглова,Щегловым,Щеглове'), $this->object->getSecondNameCase());
    }
    public function testManSirname969()
    {
        $this->object->setSecondName('Щеголев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щеголев,Щеголева,Щеголеву,Щеголева,Щеголевым,Щеголеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname970()
    {
        $this->object->setSecondName('Щеголихин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щеголихин,Щеголихина,Щеголихину,Щеголихина,Щеголихиным,Щеголихине'), $this->object->getSecondNameCase());
    }
    public function testManSirname971()
    {
        $this->object->setSecondName('Щедрин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щедрин,Щедрина,Щедрину,Щедрина,Щедриным,Щедрине'), $this->object->getSecondNameCase());
    }
    public function testManSirname972()
    {
        $this->object->setSecondName('Щедров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щедров,Щедрова,Щедрову,Щедрова,Щедровым,Щедрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname973()
    {
        $this->object->setSecondName('Щекочихин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щекочихин,Щекочихина,Щекочихину,Щекочихина,Щекочихиным,Щекочихине'), $this->object->getSecondNameCase());
    }
    public function testManSirname974()
    {
        $this->object->setSecondName('Щепкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щепкин,Щепкина,Щепкину,Щепкина,Щепкиным,Щепкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname975()
    {
        $this->object->setSecondName('Щербаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щербаков,Щербакова,Щербакову,Щербакова,Щербаковым,Щербакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname976()
    {
        $this->object->setSecondName('Щербатых');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щербатых,Щербатых,Щербатых,Щербатых,Щербатых,Щербатых'), $this->object->getSecondNameCase());
    }
    public function testManSirname977()
    {
        $this->object->setSecondName('Щербина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щербина,Щербины,Щербине,Щербину,Щербиной,Щербине'), $this->object->getSecondNameCase());
    }
    public function testManSirname978()
    {
        $this->object->setSecondName('Щетинин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щетинин,Щетинина,Щетинину,Щетинина,Щетининым,Щетинине'), $this->object->getSecondNameCase());
    }
    public function testManSirname979()
    {
        $this->object->setSecondName('Щеткин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щеткин,Щеткина,Щеткину,Щеткина,Щеткиным,Щеткине'), $this->object->getSecondNameCase());
    }
    public function testManSirname980()
    {
        $this->object->setSecondName('Щукин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щукин,Щукина,Щукину,Щукина,Щукиным,Щукине'), $this->object->getSecondNameCase());
    }
    public function testManSirname981()
    {
        $this->object->setSecondName('Энтин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Энтин,Энтина,Энтину,Энтина,Энтином,Энтине'), $this->object->getSecondNameCase());
    }
    public function testManSirname982()
    {
        $this->object->setSecondName('Эсце');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эсце,Эсце,Эсце,Эсце,Эсце,Эсце'), $this->object->getSecondNameCase());
    }
    public function testManSirname983()
    {
        $this->object->setSecondName('Ювелев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ювелев,Ювелева,Ювелеву,Ювелева,Ювелевым,Ювелеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname984()
    {
        $this->object->setSecondName('Юганцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юганцев,Юганцева,Юганцеву,Юганцева,Юганцевым,Юганцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname985()
    {
        $this->object->setSecondName('Югов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Югов,Югова,Югову,Югова,Юговым,Югове'), $this->object->getSecondNameCase());
    }
    public function testManSirname986()
    {
        $this->object->setSecondName('Юдашкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юдашкин,Юдашкина,Юдашкину,Юдашкина,Юдашкиным,Юдашкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname987()
    {
        $this->object->setSecondName('Юдин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юдин,Юдина,Юдину,Юдина,Юдиным,Юдине'), $this->object->getSecondNameCase());
    }
    public function testManSirname988()
    {
        $this->object->setSecondName('Юнкин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юнкин,Юнкина,Юнкину,Юнкина,Юнкиным,Юнкине'), $this->object->getSecondNameCase());
    }
    public function testManSirname989()
    {
        $this->object->setSecondName('Юрнаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрнаев,Юрнаева,Юрнаеву,Юрнаева,Юрнаевым,Юрнаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname990()
    {
        $this->object->setSecondName('Юрьев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрьев,Юрьева,Юрьеву,Юрьева,Юрьевым,Юрьеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname991()
    {
        $this->object->setSecondName('Юсупов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юсупов,Юсупова,Юсупову,Юсупова,Юсуповым,Юсупове'), $this->object->getSecondNameCase());
    }
    public function testManSirname992()
    {
        $this->object->setSecondName('Юферев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юферев,Юферева,Юфереву,Юферева,Юферевым,Юфереве'), $this->object->getSecondNameCase());
    }
    public function testManSirname993()
    {
        $this->object->setSecondName('Якимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Якимов,Якимова,Якимову,Якимова,Якимовым,Якимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname994()
    {
        $this->object->setSecondName('Яковлев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлев,Яковлева,Яковлеву,Яковлева,Яковлевым,Яковлеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname995()
    {
        $this->object->setSecondName('Якубов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Якубов,Якубова,Якубову,Якубова,Якубовым,Якубове'), $this->object->getSecondNameCase());
    }
    public function testManSirname996()
    {
        $this->object->setSecondName('Якубович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Якубович,Якубовича,Якубовичу,Якубовича,Якубовичем,Якубовиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname997()
    {
        $this->object->setSecondName('Якушев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Якушев,Якушева,Якушеву,Якушева,Якушевым,Якушеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname998()
    {
        $this->object->setSecondName('Янаев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Янаев,Янаева,Янаеву,Янаева,Янаевым,Янаеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname999()
    {
        $this->object->setSecondName('Янков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Янков,Янкова,Янкову,Янкова,Янковым,Янкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname1000()
    {
        $this->object->setSecondName('Янковский');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Янковский,Янковского,Янковскому,Янковского,Янковским,Янковском'), $this->object->getSecondNameCase());
    }
    public function testManSirname1001()
    {
        $this->object->setSecondName('Ярмольник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярмольник,Ярмольника,Ярмольнику,Ярмольника,Ярмольником,Ярмольнике'), $this->object->getSecondNameCase());
    }
    public function testManSirname1002()
    {
        $this->object->setSecondName('Яромеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яромеев,Яромеева,Яромееву,Яромеева,Яромеевым,Яромееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname1003()
    {
        $this->object->setSecondName('Ярцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярцев,Ярцева,Ярцеву,Ярцева,Ярцевым,Ярцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname1004()
    {
        $this->object->setSecondName('Ясенев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ясенев,Ясенева,Ясеневу,Ясенева,Ясеневым,Ясеневе'), $this->object->getSecondNameCase());
    }
    public function testManSirname1005()
    {
        $this->object->setSecondName('Яснеев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яснеев,Яснеева,Яснееву,Яснеева,Яснеевым,Яснееве'), $this->object->getSecondNameCase());
    }
    public function testManSirname1006()
    {
        $this->object->setSecondName('Яшин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яшин,Яшина,Яшину,Яшина,Яшиным,Яшине'), $this->object->getSecondNameCase());
    }

}