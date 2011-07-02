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


    public function testGenDetect0()
    {
        $this->object->setSecondName('Абакумов');
        $this->assertEquals('1-Абакумов', $this->object->genderAutoDetect().'-Абакумов');
    }
    public function testGenDetect1()
    {
        $this->object->setSecondName('Абдулов');
        $this->assertEquals('1-Абдулов', $this->object->genderAutoDetect().'-Абдулов');
    }
    public function testGenDetect2()
    {
        $this->object->setSecondName('Абрамов');
        $this->assertEquals('1-Абрамов', $this->object->genderAutoDetect().'-Абрамов');
    }
    public function testGenDetect3()
    {
        $this->object->setSecondName('Авдеев');
        $this->assertEquals('1-Авдеев', $this->object->genderAutoDetect().'-Авдеев');
    }
    public function testGenDetect4()
    {
        $this->object->setSecondName('Аверин');
        $this->assertEquals('1-Аверин', $this->object->genderAutoDetect().'-Аверин');
    }
    public function testGenDetect5()
    {
        $this->object->setSecondName('Котляр');
        $this->assertEquals('1-Котляр', $this->object->genderAutoDetect().'-Котляр');
    }
    public function testGenDetect6()
    {
        $this->object->setSecondName('Кобзарь');
        $this->assertEquals('1-Кобзарь', $this->object->genderAutoDetect().'-Кобзарь');
    }
    public function testGenDetect7()
    {
        $this->object->setSecondName('Аверьянов');
        $this->assertEquals('1-Аверьянов', $this->object->genderAutoDetect().'-Аверьянов');
    }
    public function testGenDetect8()
    {
        $this->object->setSecondName('Агапов');
        $this->assertEquals('1-Агапов', $this->object->genderAutoDetect().'-Агапов');
    }
    public function testGenDetect9()
    {
        $this->object->setSecondName('Агафонов');
        $this->assertEquals('1-Агафонов', $this->object->genderAutoDetect().'-Агафонов');
    }
    public function testGenDetect10()
    {
        $this->object->setSecondName('Агейкин');
        $this->assertEquals('1-Агейкин', $this->object->genderAutoDetect().'-Агейкин');
    }
    public function testGenDetect11()
    {
        $this->object->setSecondName('Ажищенков');
        $this->assertEquals('1-Ажищенков', $this->object->genderAutoDetect().'-Ажищенков');
    }
    public function testGenDetect12()
    {
        $this->object->setSecondName('Аксаков');
        $this->assertEquals('1-Аксаков', $this->object->genderAutoDetect().'-Аксаков');
    }
    public function testGenDetect13()
    {
        $this->object->setSecondName('Аксёнов');
        $this->assertEquals('1-Аксёнов', $this->object->genderAutoDetect().'-Аксёнов');
    }
    public function testGenDetect14()
    {
        $this->object->setSecondName('Аксенчук');
        $this->assertEquals('1-Аксенчук', $this->object->genderAutoDetect().'-Аксенчук');
    }
    public function testGenDetect15()
    {
        $this->object->setSecondName('Аленин');
        $this->assertEquals('1-Аленин', $this->object->genderAutoDetect().'-Аленин');
    }
    public function testGenDetect16()
    {
        $this->object->setSecondName('Алиев');
        $this->assertEquals('1-Алиев', $this->object->genderAutoDetect().'-Алиев');
    }
    public function testGenDetect17()
    {
        $this->object->setSecondName('Амалиев');
        $this->assertEquals('1-Амалиев', $this->object->genderAutoDetect().'-Амалиев');
    }
    public function testGenDetect18()
    {
        $this->object->setSecondName('Амелин');
        $this->assertEquals('1-Амелин', $this->object->genderAutoDetect().'-Амелин');
    }
    public function testGenDetect19()
    {
        $this->object->setSecondName('Аминев');
        $this->assertEquals('1-Аминев', $this->object->genderAutoDetect().'-Аминев');
    }
    public function testGenDetect20()
    {
        $this->object->setSecondName('Александров');
        $this->assertEquals('1-Александров', $this->object->genderAutoDetect().'-Александров');
    }
    public function testGenDetect21()
    {
        $this->object->setSecondName('Алексеев');
        $this->assertEquals('1-Алексеев', $this->object->genderAutoDetect().'-Алексеев');
    }
    public function testGenDetect22()
    {
        $this->object->setSecondName('Алёхин');
        $this->assertEquals('1-Алёхин', $this->object->genderAutoDetect().'-Алёхин');
    }
    public function testGenDetect23()
    {
        $this->object->setSecondName('Аллилуев');
        $this->assertEquals('1-Аллилуев', $this->object->genderAutoDetect().'-Аллилуев');
    }
    public function testGenDetect24()
    {
        $this->object->setSecondName('Андреев');
        $this->assertEquals('1-Андреев', $this->object->genderAutoDetect().'-Андреев');
    }
    public function testGenDetect25()
    {
        $this->object->setSecondName('Андреюшкин');
        $this->assertEquals('1-Андреюшкин', $this->object->genderAutoDetect().'-Андреюшкин');
    }
    public function testGenDetect26()
    {
        $this->object->setSecondName('Андроников');
        $this->assertEquals('1-Андроников', $this->object->genderAutoDetect().'-Андроников');
    }
    public function testGenDetect27()
    {
        $this->object->setSecondName('Андропов');
        $this->assertEquals('1-Андропов', $this->object->genderAutoDetect().'-Андропов');
    }
    public function testGenDetect28()
    {
        $this->object->setSecondName('Аниканов');
        $this->assertEquals('1-Аниканов', $this->object->genderAutoDetect().'-Аниканов');
    }
    public function testGenDetect29()
    {
        $this->object->setSecondName('Анисимов');
        $this->assertEquals('1-Анисимов', $this->object->genderAutoDetect().'-Анисимов');
    }
    public function testGenDetect30()
    {
        $this->object->setSecondName('Анишин');
        $this->assertEquals('1-Анишин', $this->object->genderAutoDetect().'-Анишин');
    }
    public function testGenDetect31()
    {
        $this->object->setSecondName('Анников');
        $this->assertEquals('1-Анников', $this->object->genderAutoDetect().'-Анников');
    }
    public function testGenDetect32()
    {
        $this->object->setSecondName('Анохин');
        $this->assertEquals('1-Анохин', $this->object->genderAutoDetect().'-Анохин');
    }
    public function testGenDetect33()
    {
        $this->object->setSecondName('Аношкин');
        $this->assertEquals('1-Аношкин', $this->object->genderAutoDetect().'-Аношкин');
    }
    public function testGenDetect34()
    {
        $this->object->setSecondName('Антипов');
        $this->assertEquals('1-Антипов', $this->object->genderAutoDetect().'-Антипов');
    }
    public function testGenDetect35()
    {
        $this->object->setSecondName('Антонов');
        $this->assertEquals('1-Антонов', $this->object->genderAutoDetect().'-Антонов');
    }
    public function testGenDetect36()
    {
        $this->object->setSecondName('Антонович');
        $this->assertEquals('1-Антонович', $this->object->genderAutoDetect().'-Антонович');
    }
    public function testGenDetect37()
    {
        $this->object->setSecondName('Артамонов');
        $this->assertEquals('1-Артамонов', $this->object->genderAutoDetect().'-Артамонов');
    }
    public function testGenDetect38()
    {
        $this->object->setSecondName('Арефьев');
        $this->assertEquals('1-Арефьев', $this->object->genderAutoDetect().'-Арефьев');
    }
    public function testGenDetect39()
    {
        $this->object->setSecondName('Аристархов');
        $this->assertEquals('1-Аристархов', $this->object->genderAutoDetect().'-Аристархов');
    }
    public function testGenDetect40()
    {
        $this->object->setSecondName('Арсеньев');
        $this->assertEquals('1-Арсеньев', $this->object->genderAutoDetect().'-Арсеньев');
    }
    public function testGenDetect41()
    {
        $this->object->setSecondName('Артёмов');
        $this->assertEquals('1-Артёмов', $this->object->genderAutoDetect().'-Артёмов');
    }
    public function testGenDetect42()
    {
        $this->object->setSecondName('Асланов');
        $this->assertEquals('1-Асланов', $this->object->genderAutoDetect().'-Асланов');
    }
    public function testGenDetect43()
    {
        $this->object->setSecondName('Аслаханов');
        $this->assertEquals('1-Аслаханов', $this->object->genderAutoDetect().'-Аслаханов');
    }
    public function testGenDetect44()
    {
        $this->object->setSecondName('Астанков');
        $this->assertEquals('1-Астанков', $this->object->genderAutoDetect().'-Астанков');
    }
    public function testGenDetect45()
    {
        $this->object->setSecondName('Астафьев');
        $this->assertEquals('1-Астафьев', $this->object->genderAutoDetect().'-Астафьев');
    }
    public function testGenDetect46()
    {
        $this->object->setSecondName('Астахов');
        $this->assertEquals('1-Астахов', $this->object->genderAutoDetect().'-Астахов');
    }
    public function testGenDetect47()
    {
        $this->object->setSecondName('Афанасьев');
        $this->assertEquals('1-Афанасьев', $this->object->genderAutoDetect().'-Афанасьев');
    }
    public function testGenDetect48()
    {
        $this->object->setSecondName('Афонин');
        $this->assertEquals('1-Афонин', $this->object->genderAutoDetect().'-Афонин');
    }
    public function testGenDetect49()
    {
        $this->object->setSecondName('Аспидов');
        $this->assertEquals('1-Аспидов', $this->object->genderAutoDetect().'-Аспидов');
    }
    public function testGenDetect50()
    {
        $this->object->setSecondName('Бабатьев');
        $this->assertEquals('1-Бабатьев', $this->object->genderAutoDetect().'-Бабатьев');
    }
    public function testGenDetect51()
    {
        $this->object->setSecondName('Бабиков');
        $this->assertEquals('1-Бабиков', $this->object->genderAutoDetect().'-Бабиков');
    }
    public function testGenDetect52()
    {
        $this->object->setSecondName('Бабичев');
        $this->assertEquals('1-Бабичев', $this->object->genderAutoDetect().'-Бабичев');
    }
    public function testGenDetect53()
    {
        $this->object->setSecondName('Бабкин');
        $this->assertEquals('1-Бабкин', $this->object->genderAutoDetect().'-Бабкин');
    }
    public function testGenDetect54()
    {
        $this->object->setSecondName('Бабурин');
        $this->assertEquals('1-Бабурин', $this->object->genderAutoDetect().'-Бабурин');
    }
    public function testGenDetect55()
    {
        $this->object->setSecondName('Багров');
        $this->assertEquals('1-Багров', $this->object->genderAutoDetect().'-Багров');
    }
    public function testGenDetect56()
    {
        $this->object->setSecondName('Бакрылов');
        $this->assertEquals('1-Бакрылов', $this->object->genderAutoDetect().'-Бакрылов');
    }
    public function testGenDetect57()
    {
        $this->object->setSecondName('Бажанов');
        $this->assertEquals('1-Бажанов', $this->object->genderAutoDetect().'-Бажанов');
    }
    public function testGenDetect58()
    {
        $this->object->setSecondName('Баженов');
        $this->assertEquals('1-Баженов', $this->object->genderAutoDetect().'-Баженов');
    }
    public function testGenDetect59()
    {
        $this->object->setSecondName('Базанов');
        $this->assertEquals('1-Базанов', $this->object->genderAutoDetect().'-Базанов');
    }
    public function testGenDetect60()
    {
        $this->object->setSecondName('Базаров');
        $this->assertEquals('1-Базаров', $this->object->genderAutoDetect().'-Базаров');
    }
    public function testGenDetect61()
    {
        $this->object->setSecondName('Балакин');
        $this->assertEquals('1-Балакин', $this->object->genderAutoDetect().'-Балакин');
    }
    public function testGenDetect62()
    {
        $this->object->setSecondName('Балахнов');
        $this->assertEquals('1-Балахнов', $this->object->genderAutoDetect().'-Балахнов');
    }
    public function testGenDetect63()
    {
        $this->object->setSecondName('Балашов');
        $this->assertEquals('1-Балашов', $this->object->genderAutoDetect().'-Балашов');
    }
    public function testGenDetect64()
    {
        $this->object->setSecondName('Баранов');
        $this->assertEquals('1-Баранов', $this->object->genderAutoDetect().'-Баранов');
    }
    public function testGenDetect65()
    {
        $this->object->setSecondName('Барболин');
        $this->assertEquals('1-Барболин', $this->object->genderAutoDetect().'-Барболин');
    }
    public function testGenDetect66()
    {
        $this->object->setSecondName('Баренцев');
        $this->assertEquals('1-Баренцев', $this->object->genderAutoDetect().'-Баренцев');
    }
    public function testGenDetect67()
    {
        $this->object->setSecondName('Баринов');
        $this->assertEquals('1-Баринов', $this->object->genderAutoDetect().'-Баринов');
    }
    public function testGenDetect68()
    {
        $this->object->setSecondName('Барков');
        $this->assertEquals('1-Барков', $this->object->genderAutoDetect().'-Барков');
    }
    public function testGenDetect69()
    {
        $this->object->setSecondName('Барсуков');
        $this->assertEquals('1-Барсуков', $this->object->genderAutoDetect().'-Барсуков');
    }
    public function testGenDetect70()
    {
        $this->object->setSecondName('Батрутдинов');
        $this->assertEquals('1-Батрутдинов', $this->object->genderAutoDetect().'-Батрутдинов');
    }
    public function testGenDetect71()
    {
        $this->object->setSecondName('Безбородов');
        $this->assertEquals('1-Безбородов', $this->object->genderAutoDetect().'-Безбородов');
    }
    public function testGenDetect72()
    {
        $this->object->setSecondName('Безродный');
        $this->assertEquals('1-Безродный', $this->object->genderAutoDetect().'-Безродный');
    }
    public function testGenDetect73()
    {
        $this->object->setSecondName('Безруков');
        $this->assertEquals('1-Безруков', $this->object->genderAutoDetect().'-Безруков');
    }
    public function testGenDetect74()
    {
        $this->object->setSecondName('Безукладников');
        $this->assertEquals('1-Безукладников', $this->object->genderAutoDetect().'-Безукладников');
    }
    public function testGenDetect75()
    {
        $this->object->setSecondName('Беликов');
        $this->assertEquals('1-Беликов', $this->object->genderAutoDetect().'-Беликов');
    }
    public function testGenDetect76()
    {
        $this->object->setSecondName('Белов');
        $this->assertEquals('1-Белов', $this->object->genderAutoDetect().'-Белов');
    }
    public function testGenDetect77()
    {
        $this->object->setSecondName('Беломестнов');
        $this->assertEquals('1-Беломестнов', $this->object->genderAutoDetect().'-Беломестнов');
    }
    public function testGenDetect78()
    {
        $this->object->setSecondName('Бендлин');
        $this->assertEquals('1-Бендлин', $this->object->genderAutoDetect().'-Бендлин');
    }
    public function testGenDetect79()
    {
        $this->object->setSecondName('Бережной');
        $this->assertEquals('1-Бережной', $this->object->genderAutoDetect().'-Бережной');
    }
    public function testGenDetect80()
    {
        $this->object->setSecondName('Белоусов');
        $this->assertEquals('1-Белоусов', $this->object->genderAutoDetect().'-Белоусов');
    }
    public function testGenDetect81()
    {
        $this->object->setSecondName('Бершов');
        $this->assertEquals('1-Бершов', $this->object->genderAutoDetect().'-Бершов');
    }
    public function testGenDetect82()
    {
        $this->object->setSecondName('Беспалов');
        $this->assertEquals('1-Беспалов', $this->object->genderAutoDetect().'-Беспалов');
    }
    public function testGenDetect83()
    {
        $this->object->setSecondName('Бескрёстнов');
        $this->assertEquals('1-Бескрёстнов', $this->object->genderAutoDetect().'-Бескрёстнов');
    }
    public function testGenDetect84()
    {
        $this->object->setSecondName('Бирюков');
        $this->assertEquals('1-Бирюков', $this->object->genderAutoDetect().'-Бирюков');
    }
    public function testGenDetect85()
    {
        $this->object->setSecondName('Блаженов');
        $this->assertEquals('1-Блаженов', $this->object->genderAutoDetect().'-Блаженов');
    }
    public function testGenDetect86()
    {
        $this->object->setSecondName('Блатов');
        $this->assertEquals('1-Блатов', $this->object->genderAutoDetect().'-Блатов');
    }
    public function testGenDetect87()
    {
        $this->object->setSecondName('Блинов');
        $this->assertEquals('1-Блинов', $this->object->genderAutoDetect().'-Блинов');
    }
    public function testGenDetect88()
    {
        $this->object->setSecondName('Блохин');
        $this->assertEquals('1-Блохин', $this->object->genderAutoDetect().'-Блохин');
    }
    public function testGenDetect89()
    {
        $this->object->setSecondName('Бобр');
        $this->assertEquals('1-Бобр', $this->object->genderAutoDetect().'-Бобр');
    }
    public function testGenDetect90()
    {
        $this->object->setSecondName('Бобров');
        $this->assertEquals('1-Бобров', $this->object->genderAutoDetect().'-Бобров');
    }
    public function testGenDetect91()
    {
        $this->object->setSecondName('Бобрик');
        $this->assertEquals('1-Бобрик', $this->object->genderAutoDetect().'-Бобрик');
    }
    public function testGenDetect92()
    {
        $this->object->setSecondName('Богатырёв');
        $this->assertEquals('1-Богатырёв', $this->object->genderAutoDetect().'-Богатырёв');
    }
    public function testGenDetect93()
    {
        $this->object->setSecondName('Богданов');
        $this->assertEquals('1-Богданов', $this->object->genderAutoDetect().'-Богданов');
    }
    public function testGenDetect94()
    {
        $this->object->setSecondName('Боголепов');
        $this->assertEquals('1-Боголепов', $this->object->genderAutoDetect().'-Боголепов');
    }
    public function testGenDetect95()
    {
        $this->object->setSecondName('Боголюбов');
        $this->assertEquals('1-Боголюбов', $this->object->genderAutoDetect().'-Боголюбов');
    }
    public function testGenDetect96()
    {
        $this->object->setSecondName('Богомазов');
        $this->assertEquals('1-Богомазов', $this->object->genderAutoDetect().'-Богомазов');
    }
    public function testGenDetect97()
    {
        $this->object->setSecondName('Богомолов');
        $this->assertEquals('1-Богомолов', $this->object->genderAutoDetect().'-Богомолов');
    }
    public function testGenDetect98()
    {
        $this->object->setSecondName('Богров');
        $this->assertEquals('1-Богров', $this->object->genderAutoDetect().'-Богров');
    }
    public function testGenDetect99()
    {
        $this->object->setSecondName('Бойков');
        $this->assertEquals('1-Бойков', $this->object->genderAutoDetect().'-Бойков');
    }
    public function testGenDetect100()
    {
        $this->object->setSecondName('Болотников');
        $this->assertEquals('1-Болотников', $this->object->genderAutoDetect().'-Болотников');
    }
    public function testGenDetect101()
    {
        $this->object->setSecondName('Болтоногов');
        $this->assertEquals('1-Болтоногов', $this->object->genderAutoDetect().'-Болтоногов');
    }
    public function testGenDetect102()
    {
        $this->object->setSecondName('Большов');
        $this->assertEquals('1-Большов', $this->object->genderAutoDetect().'-Большов');
    }
    public function testGenDetect103()
    {
        $this->object->setSecondName('Бореев');
        $this->assertEquals('1-Бореев', $this->object->genderAutoDetect().'-Бореев');
    }
    public function testGenDetect104()
    {
        $this->object->setSecondName('Бортник');
        $this->assertEquals('1-Бортник', $this->object->genderAutoDetect().'-Бортник');
    }
    public function testGenDetect105()
    {
        $this->object->setSecondName('Борзилов');
        $this->assertEquals('1-Борзилов', $this->object->genderAutoDetect().'-Борзилов');
    }
    public function testGenDetect106()
    {
        $this->object->setSecondName('Борцов');
        $this->assertEquals('1-Борцов', $this->object->genderAutoDetect().'-Борцов');
    }
    public function testGenDetect107()
    {
        $this->object->setSecondName('Брагин');
        $this->assertEquals('1-Брагин', $this->object->genderAutoDetect().'-Брагин');
    }
    public function testGenDetect108()
    {
        $this->object->setSecondName('Брежнев');
        $this->assertEquals('1-Брежнев', $this->object->genderAutoDetect().'-Брежнев');
    }
    public function testGenDetect109()
    {
        $this->object->setSecondName('Бугаков');
        $this->assertEquals('1-Бугаков', $this->object->genderAutoDetect().'-Бугаков');
    }
    public function testGenDetect110()
    {
        $this->object->setSecondName('Буданов');
        $this->assertEquals('1-Буданов', $this->object->genderAutoDetect().'-Буданов');
    }
    public function testGenDetect111()
    {
        $this->object->setSecondName('Будников');
        $this->assertEquals('1-Будников', $this->object->genderAutoDetect().'-Будников');
    }
    public function testGenDetect112()
    {
        $this->object->setSecondName('Будылин');
        $this->assertEquals('1-Будылин', $this->object->genderAutoDetect().'-Будылин');
    }
    public function testGenDetect113()
    {
        $this->object->setSecondName('Букин');
        $this->assertEquals('1-Букин', $this->object->genderAutoDetect().'-Букин');
    }
    public function testGenDetect114()
    {
        $this->object->setSecondName('Букирь');
        $this->assertEquals('1-Букирь', $this->object->genderAutoDetect().'-Букирь');
    }
    public function testGenDetect115()
    {
        $this->object->setSecondName('Буклин');
        $this->assertEquals('1-Буклин', $this->object->genderAutoDetect().'-Буклин');
    }
    public function testGenDetect116()
    {
        $this->object->setSecondName('Булгаков');
        $this->assertEquals('1-Булгаков', $this->object->genderAutoDetect().'-Булгаков');
    }
    public function testGenDetect117()
    {
        $this->object->setSecondName('Бунин');
        $this->assertEquals('1-Бунин', $this->object->genderAutoDetect().'-Бунин');
    }
    public function testGenDetect118()
    {
        $this->object->setSecondName('Бурков');
        $this->assertEquals('1-Бурков', $this->object->genderAutoDetect().'-Бурков');
    }
    public function testGenDetect119()
    {
        $this->object->setSecondName('Буров');
        $this->assertEquals('1-Буров', $this->object->genderAutoDetect().'-Буров');
    }
    public function testGenDetect120()
    {
        $this->object->setSecondName('Бурцов');
        $this->assertEquals('1-Бурцов', $this->object->genderAutoDetect().'-Бурцов');
    }
    public function testGenDetect121()
    {
        $this->object->setSecondName('Буряков');
        $this->assertEquals('1-Буряков', $this->object->genderAutoDetect().'-Буряков');
    }
    public function testGenDetect122()
    {
        $this->object->setSecondName('Бутылин');
        $this->assertEquals('1-Бутылин', $this->object->genderAutoDetect().'-Бутылин');
    }
    public function testGenDetect123()
    {
        $this->object->setSecondName('Былинкин');
        $this->assertEquals('1-Былинкин', $this->object->genderAutoDetect().'-Былинкин');
    }
    public function testGenDetect124()
    {
        $this->object->setSecondName('Бычков');
        $this->assertEquals('1-Бычков', $this->object->genderAutoDetect().'-Бычков');
    }
    public function testGenDetect125()
    {
        $this->object->setSecondName('Вавилов');
        $this->assertEquals('1-Вавилов', $this->object->genderAutoDetect().'-Вавилов');
    }
    public function testGenDetect126()
    {
        $this->object->setSecondName('Вагин');
        $this->assertEquals('1-Вагин', $this->object->genderAutoDetect().'-Вагин');
    }
    public function testGenDetect127()
    {
        $this->object->setSecondName('Вазов');
        $this->assertEquals('1-Вазов', $this->object->genderAutoDetect().'-Вазов');
    }
    public function testGenDetect128()
    {
        $this->object->setSecondName('Валевач');
        $this->assertEquals('1-Валевач', $this->object->genderAutoDetect().'-Валевач');
    }
    public function testGenDetect129()
    {
        $this->object->setSecondName('Варенников');
        $this->assertEquals('1-Варенников', $this->object->genderAutoDetect().'-Варенников');
    }
    public function testGenDetect130()
    {
        $this->object->setSecondName('Васильев');
        $this->assertEquals('1-Васильев', $this->object->genderAutoDetect().'-Васильев');
    }
    public function testGenDetect131()
    {
        $this->object->setSecondName('Васин');
        $this->assertEquals('1-Васин', $this->object->genderAutoDetect().'-Васин');
    }
    public function testGenDetect132()
    {
        $this->object->setSecondName('Васнев');
        $this->assertEquals('1-Васнев', $this->object->genderAutoDetect().'-Васнев');
    }
    public function testGenDetect133()
    {
        $this->object->setSecondName('Васнецов');
        $this->assertEquals('1-Васнецов', $this->object->genderAutoDetect().'-Васнецов');
    }
    public function testGenDetect134()
    {
        $this->object->setSecondName('Вахров');
        $this->assertEquals('1-Вахров', $this->object->genderAutoDetect().'-Вахров');
    }
    public function testGenDetect135()
    {
        $this->object->setSecondName('Вахрушев');
        $this->assertEquals('1-Вахрушев', $this->object->genderAutoDetect().'-Вахрушев');
    }
    public function testGenDetect136()
    {
        $this->object->setSecondName('Венедиктов');
        $this->assertEquals('1-Венедиктов', $this->object->genderAutoDetect().'-Венедиктов');
    }
    public function testGenDetect137()
    {
        $this->object->setSecondName('Веденеев');
        $this->assertEquals('1-Веденеев', $this->object->genderAutoDetect().'-Веденеев');
    }
    public function testGenDetect138()
    {
        $this->object->setSecondName('Веденин');
        $this->assertEquals('1-Веденин', $this->object->genderAutoDetect().'-Веденин');
    }
    public function testGenDetect139()
    {
        $this->object->setSecondName('Ведерников');
        $this->assertEquals('1-Ведерников', $this->object->genderAutoDetect().'-Ведерников');
    }
    public function testGenDetect140()
    {
        $this->object->setSecondName('Вергунов');
        $this->assertEquals('1-Вергунов', $this->object->genderAutoDetect().'-Вергунов');
    }
    public function testGenDetect141()
    {
        $this->object->setSecondName('Верещагин');
        $this->assertEquals('1-Верещагин', $this->object->genderAutoDetect().'-Верещагин');
    }
    public function testGenDetect142()
    {
        $this->object->setSecondName('Вершинин');
        $this->assertEquals('1-Вершинин', $this->object->genderAutoDetect().'-Вершинин');
    }
    public function testGenDetect143()
    {
        $this->object->setSecondName('Веселов');
        $this->assertEquals('1-Веселов', $this->object->genderAutoDetect().'-Веселов');
    }
    public function testGenDetect144()
    {
        $this->object->setSecondName('Викашев');
        $this->assertEquals('1-Викашев', $this->object->genderAutoDetect().'-Викашев');
    }
    public function testGenDetect145()
    {
        $this->object->setSecondName('Виноградов');
        $this->assertEquals('1-Виноградов', $this->object->genderAutoDetect().'-Виноградов');
    }
    public function testGenDetect146()
    {
        $this->object->setSecondName('Винокуров');
        $this->assertEquals('1-Винокуров', $this->object->genderAutoDetect().'-Винокуров');
    }
    public function testGenDetect147()
    {
        $this->object->setSecondName('Витаев');
        $this->assertEquals('1-Витаев', $this->object->genderAutoDetect().'-Витаев');
    }
    public function testGenDetect148()
    {
        $this->object->setSecondName('Витвинин');
        $this->assertEquals('1-Витвинин', $this->object->genderAutoDetect().'-Витвинин');
    }
    public function testGenDetect149()
    {
        $this->object->setSecondName('Вицин');
        $this->assertEquals('1-Вицин', $this->object->genderAutoDetect().'-Вицин');
    }
    public function testGenDetect150()
    {
        $this->object->setSecondName('Водоватов');
        $this->assertEquals('1-Водоватов', $this->object->genderAutoDetect().'-Водоватов');
    }
    public function testGenDetect151()
    {
        $this->object->setSecondName('Воликов');
        $this->assertEquals('1-Воликов', $this->object->genderAutoDetect().'-Воликов');
    }
    public function testGenDetect152()
    {
        $this->object->setSecondName('Волков');
        $this->assertEquals('1-Волков', $this->object->genderAutoDetect().'-Волков');
    }
    public function testGenDetect153()
    {
        $this->object->setSecondName('Вольваков');
        $this->assertEquals('1-Вольваков', $this->object->genderAutoDetect().'-Вольваков');
    }
    public function testGenDetect154()
    {
        $this->object->setSecondName('Воробьев');
        $this->assertEquals('1-Воробьев', $this->object->genderAutoDetect().'-Воробьев');
    }
    public function testGenDetect155()
    {
        $this->object->setSecondName('Воронин');
        $this->assertEquals('1-Воронин', $this->object->genderAutoDetect().'-Воронин');
    }
    public function testGenDetect156()
    {
        $this->object->setSecondName('Воронов');
        $this->assertEquals('1-Воронов', $this->object->genderAutoDetect().'-Воронов');
    }
    public function testGenDetect157()
    {
        $this->object->setSecondName('Воронков');
        $this->assertEquals('1-Воронков', $this->object->genderAutoDetect().'-Воронков');
    }
    public function testGenDetect158()
    {
        $this->object->setSecondName('Воронцов');
        $this->assertEquals('1-Воронцов', $this->object->genderAutoDetect().'-Воронцов');
    }
    public function testGenDetect159()
    {
        $this->object->setSecondName('Воскобойников');
        $this->assertEquals('1-Воскобойников', $this->object->genderAutoDetect().'-Воскобойников');
    }
    public function testGenDetect160()
    {
        $this->object->setSecondName('Вотяков');
        $this->assertEquals('1-Вотяков', $this->object->genderAutoDetect().'-Вотяков');
    }
    public function testGenDetect161()
    {
        $this->object->setSecondName('Вырыпаев');
        $this->assertEquals('1-Вырыпаев', $this->object->genderAutoDetect().'-Вырыпаев');
    }
    public function testGenDetect162()
    {
        $this->object->setSecondName('Гавриков');
        $this->assertEquals('1-Гавриков', $this->object->genderAutoDetect().'-Гавриков');
    }
    public function testGenDetect163()
    {
        $this->object->setSecondName('Гаврилов');
        $this->assertEquals('1-Гаврилов', $this->object->genderAutoDetect().'-Гаврилов');
    }
    public function testGenDetect164()
    {
        $this->object->setSecondName('Гагарин');
        $this->assertEquals('1-Гагарин', $this->object->genderAutoDetect().'-Гагарин');
    }
    public function testGenDetect165()
    {
        $this->object->setSecondName('Гаголин');
        $this->assertEquals('1-Гаголин', $this->object->genderAutoDetect().'-Гаголин');
    }
    public function testGenDetect166()
    {
        $this->object->setSecondName('Галдин');
        $this->assertEquals('1-Галдин', $this->object->genderAutoDetect().'-Галдин');
    }
    public function testGenDetect167()
    {
        $this->object->setSecondName('Галкин');
        $this->assertEquals('1-Галкин', $this->object->genderAutoDetect().'-Галкин');
    }
    public function testGenDetect168()
    {
        $this->object->setSecondName('Галыгин');
        $this->assertEquals('1-Галыгин', $this->object->genderAutoDetect().'-Галыгин');
    }
    public function testGenDetect169()
    {
        $this->object->setSecondName('Гарин');
        $this->assertEquals('1-Гарин', $this->object->genderAutoDetect().'-Гарин');
    }
    public function testGenDetect170()
    {
        $this->object->setSecondName('Гачев');
        $this->assertEquals('1-Гачев', $this->object->genderAutoDetect().'-Гачев');
    }
    public function testGenDetect171()
    {
        $this->object->setSecondName('Генкин');
        $this->assertEquals('1-Генкин', $this->object->genderAutoDetect().'-Генкин');
    }
    public function testGenDetect172()
    {
        $this->object->setSecondName('Герасимов');
        $this->assertEquals('1-Герасимов', $this->object->genderAutoDetect().'-Герасимов');
    }
    public function testGenDetect173()
    {
        $this->object->setSecondName('Гибазов');
        $this->assertEquals('1-Гибазов', $this->object->genderAutoDetect().'-Гибазов');
    }
    public function testGenDetect174()
    {
        $this->object->setSecondName('Гилёв');
        $this->assertEquals('1-Гилёв', $this->object->genderAutoDetect().'-Гилёв');
    }
    public function testGenDetect175()
    {
        $this->object->setSecondName('Глазков');
        $this->assertEquals('1-Глазков', $this->object->genderAutoDetect().'-Глазков');
    }
    public function testGenDetect176()
    {
        $this->object->setSecondName('Голованов');
        $this->assertEquals('1-Голованов', $this->object->genderAutoDetect().'-Голованов');
    }
    public function testGenDetect177()
    {
        $this->object->setSecondName('Головин');
        $this->assertEquals('1-Головин', $this->object->genderAutoDetect().'-Головин');
    }
    public function testGenDetect178()
    {
        $this->object->setSecondName('Голодяев');
        $this->assertEquals('1-Голодяев', $this->object->genderAutoDetect().'-Голодяев');
    }
    public function testGenDetect179()
    {
        $this->object->setSecondName('Голубев');
        $this->assertEquals('1-Голубев', $this->object->genderAutoDetect().'-Голубев');
    }
    public function testGenDetect180()
    {
        $this->object->setSecondName('Голубов');
        $this->assertEquals('1-Голубов', $this->object->genderAutoDetect().'-Голубов');
    }
    public function testGenDetect181()
    {
        $this->object->setSecondName('Голубцов');
        $this->assertEquals('1-Голубцов', $this->object->genderAutoDetect().'-Голубцов');
    }
    public function testGenDetect182()
    {
        $this->object->setSecondName('Гончаров');
        $this->assertEquals('1-Гончаров', $this->object->genderAutoDetect().'-Гончаров');
    }
    public function testGenDetect183()
    {
        $this->object->setSecondName('Горбачёв');
        $this->assertEquals('1-Горбачёв', $this->object->genderAutoDetect().'-Горбачёв');
    }
    public function testGenDetect184()
    {
        $this->object->setSecondName('Горбунов');
        $this->assertEquals('1-Горбунов', $this->object->genderAutoDetect().'-Горбунов');
    }
    public function testGenDetect185()
    {
        $this->object->setSecondName('Горбунков');
        $this->assertEquals('1-Горбунков', $this->object->genderAutoDetect().'-Горбунков');
    }
    public function testGenDetect186()
    {
        $this->object->setSecondName('Горев');
        $this->assertEquals('1-Горев', $this->object->genderAutoDetect().'-Горев');
    }
    public function testGenDetect187()
    {
        $this->object->setSecondName('Горелов');
        $this->assertEquals('1-Горелов', $this->object->genderAutoDetect().'-Горелов');
    }
    public function testGenDetect188()
    {
        $this->object->setSecondName('Горемыкин');
        $this->assertEquals('1-Горемыкин', $this->object->genderAutoDetect().'-Горемыкин');
    }
    public function testGenDetect189()
    {
        $this->object->setSecondName('Горюнов');
        $this->assertEquals('1-Горюнов', $this->object->genderAutoDetect().'-Горюнов');
    }
    public function testGenDetect190()
    {
        $this->object->setSecondName('Грачёв');
        $this->assertEquals('1-Грачёв', $this->object->genderAutoDetect().'-Грачёв');
    }
    public function testGenDetect191()
    {
        $this->object->setSecondName('Графов');
        $this->assertEquals('1-Графов', $this->object->genderAutoDetect().'-Графов');
    }
    public function testGenDetect192()
    {
        $this->object->setSecondName('Гретченко');
        $this->assertEquals('1-Гретченко', $this->object->genderAutoDetect().'-Гретченко');
    }
    public function testGenDetect193()
    {
        $this->object->setSecondName('Гречко');
        $this->assertEquals('1-Гречко', $this->object->genderAutoDetect().'-Гречко');
    }
    public function testGenDetect194()
    {
        $this->object->setSecondName('Грешнев');
        $this->assertEquals('1-Грешнев', $this->object->genderAutoDetect().'-Грешнев');
    }
    public function testGenDetect195()
    {
        $this->object->setSecondName('Грибов');
        $this->assertEquals('1-Грибов', $this->object->genderAutoDetect().'-Грибов');
    }
    public function testGenDetect196()
    {
        $this->object->setSecondName('Грибоедов');
        $this->assertEquals('1-Грибоедов', $this->object->genderAutoDetect().'-Грибоедов');
    }
    public function testGenDetect197()
    {
        $this->object->setSecondName('Григорьев');
        $this->assertEquals('1-Григорьев', $this->object->genderAutoDetect().'-Григорьев');
    }
    public function testGenDetect198()
    {
        $this->object->setSecondName('Гринин');
        $this->assertEquals('1-Гринин', $this->object->genderAutoDetect().'-Гринин');
    }
    public function testGenDetect199()
    {
        $this->object->setSecondName('Гришин');
        $this->assertEquals('1-Гришин', $this->object->genderAutoDetect().'-Гришин');
    }
    public function testGenDetect200()
    {
        $this->object->setSecondName('Громов');
        $this->assertEquals('1-Громов', $this->object->genderAutoDetect().'-Громов');
    }
    public function testGenDetect201()
    {
        $this->object->setSecondName('Громыко');
        $this->assertEquals('1-Громыко', $this->object->genderAutoDetect().'-Громыко');
    }
    public function testGenDetect202()
    {
        $this->object->setSecondName('Гулин');
        $this->assertEquals('1-Гулин', $this->object->genderAutoDetect().'-Гулин');
    }
    public function testGenDetect203()
    {
        $this->object->setSecondName('Гурьянов');
        $this->assertEquals('1-Гурьянов', $this->object->genderAutoDetect().'-Гурьянов');
    }
    public function testGenDetect204()
    {
        $this->object->setSecondName('Гусаров');
        $this->assertEquals('1-Гусаров', $this->object->genderAutoDetect().'-Гусаров');
    }
    public function testGenDetect205()
    {
        $this->object->setSecondName('Гусев');
        $this->assertEquals('1-Гусев', $this->object->genderAutoDetect().'-Гусев');
    }
    public function testGenDetect206()
    {
        $this->object->setSecondName('Гунин');
        $this->assertEquals('1-Гунин', $this->object->genderAutoDetect().'-Гунин');
    }
    public function testGenDetect207()
    {
        $this->object->setSecondName('Гущин');
        $this->assertEquals('1-Гущин', $this->object->genderAutoDetect().'-Гущин');
    }
    public function testGenDetect208()
    {
        $this->object->setSecondName('Головаха');
        $this->assertEquals('1-Головаха', $this->object->genderAutoDetect().'-Головаха');
    }
    public function testGenDetect209()
    {
        $this->object->setSecondName('Дорофеев');
        $this->assertEquals('1-Дорофеев', $this->object->genderAutoDetect().'-Дорофеев');
    }
    public function testGenDetect210()
    {
        $this->object->setSecondName('Давыдкин');
        $this->assertEquals('1-Давыдкин', $this->object->genderAutoDetect().'-Давыдкин');
    }
    public function testGenDetect211()
    {
        $this->object->setSecondName('Данильцин');
        $this->assertEquals('1-Данильцин', $this->object->genderAutoDetect().'-Данильцин');
    }
    public function testGenDetect212()
    {
        $this->object->setSecondName('Дворников');
        $this->assertEquals('1-Дворников', $this->object->genderAutoDetect().'-Дворников');
    }
    public function testGenDetect213()
    {
        $this->object->setSecondName('Деменок');
        $this->assertEquals('1-Деменок', $this->object->genderAutoDetect().'-Деменок');
    }
    public function testGenDetect214()
    {
        $this->object->setSecondName('Дементьев');
        $this->assertEquals('1-Дементьев', $this->object->genderAutoDetect().'-Дементьев');
    }
    public function testGenDetect215()
    {
        $this->object->setSecondName('Демидов');
        $this->assertEquals('1-Демидов', $this->object->genderAutoDetect().'-Демидов');
    }
    public function testGenDetect216()
    {
        $this->object->setSecondName('Деникин');
        $this->assertEquals('1-Деникин', $this->object->genderAutoDetect().'-Деникин');
    }
    public function testGenDetect217()
    {
        $this->object->setSecondName('Дёгтин');
        $this->assertEquals('1-Дёгтин', $this->object->genderAutoDetect().'-Дёгтин');
    }
    public function testGenDetect218()
    {
        $this->object->setSecondName('Дегтярев');
        $this->assertEquals('1-Дегтярев', $this->object->genderAutoDetect().'-Дегтярев');
    }
    public function testGenDetect219()
    {
        $this->object->setSecondName('Дежнёв');
        $this->assertEquals('1-Дежнёв', $this->object->genderAutoDetect().'-Дежнёв');
    }
    public function testGenDetect220()
    {
        $this->object->setSecondName('Делов');
        $this->assertEquals('1-Делов', $this->object->genderAutoDetect().'-Делов');
    }
    public function testGenDetect221()
    {
        $this->object->setSecondName('Дементьев');
        $this->assertEquals('1-Дементьев', $this->object->genderAutoDetect().'-Дементьев');
    }
    public function testGenDetect222()
    {
        $this->object->setSecondName('Дёмин');
        $this->assertEquals('1-Дёмин', $this->object->genderAutoDetect().'-Дёмин');
    }
    public function testGenDetect223()
    {
        $this->object->setSecondName('Державин');
        $this->assertEquals('1-Державин', $this->object->genderAutoDetect().'-Державин');
    }
    public function testGenDetect224()
    {
        $this->object->setSecondName('Дернов');
        $this->assertEquals('1-Дернов', $this->object->genderAutoDetect().'-Дернов');
    }
    public function testGenDetect225()
    {
        $this->object->setSecondName('Десятков');
        $this->assertEquals('1-Десятков', $this->object->genderAutoDetect().'-Десятков');
    }
    public function testGenDetect226()
    {
        $this->object->setSecondName('Дмитриев');
        $this->assertEquals('1-Дмитриев', $this->object->genderAutoDetect().'-Дмитриев');
    }
    public function testGenDetect227()
    {
        $this->object->setSecondName('Добронравов');
        $this->assertEquals('1-Добронравов', $this->object->genderAutoDetect().'-Добронравов');
    }
    public function testGenDetect228()
    {
        $this->object->setSecondName('Добрынин');
        $this->assertEquals('1-Добрынин', $this->object->genderAutoDetect().'-Добрынин');
    }
    public function testGenDetect229()
    {
        $this->object->setSecondName('Долгоруков');
        $this->assertEquals('1-Долгоруков', $this->object->genderAutoDetect().'-Долгоруков');
    }
    public function testGenDetect230()
    {
        $this->object->setSecondName('Должиков');
        $this->assertEquals('1-Должиков', $this->object->genderAutoDetect().'-Должиков');
    }
    public function testGenDetect231()
    {
        $this->object->setSecondName('Домашев');
        $this->assertEquals('1-Домашев', $this->object->genderAutoDetect().'-Домашев');
    }
    public function testGenDetect232()
    {
        $this->object->setSecondName('Достовалов');
        $this->assertEquals('1-Достовалов', $this->object->genderAutoDetect().'-Достовалов');
    }
    public function testGenDetect233()
    {
        $this->object->setSecondName('Драгомиров');
        $this->assertEquals('1-Драгомиров', $this->object->genderAutoDetect().'-Драгомиров');
    }
    public function testGenDetect234()
    {
        $this->object->setSecondName('Дресвянин');
        $this->assertEquals('1-Дресвянин', $this->object->genderAutoDetect().'-Дресвянин');
    }
    public function testGenDetect235()
    {
        $this->object->setSecondName('Дрёмов');
        $this->assertEquals('1-Дрёмов', $this->object->genderAutoDetect().'-Дрёмов');
    }
    public function testGenDetect236()
    {
        $this->object->setSecondName('Друганин');
        $this->assertEquals('1-Друганин', $this->object->genderAutoDetect().'-Друганин');
    }
    public function testGenDetect237()
    {
        $this->object->setSecondName('Другов');
        $this->assertEquals('1-Другов', $this->object->genderAutoDetect().'-Другов');
    }
    public function testGenDetect238()
    {
        $this->object->setSecondName('Дубинин');
        $this->assertEquals('1-Дубинин', $this->object->genderAutoDetect().'-Дубинин');
    }
    public function testGenDetect239()
    {
        $this->object->setSecondName('Дубов');
        $this->assertEquals('1-Дубов', $this->object->genderAutoDetect().'-Дубов');
    }
    public function testGenDetect240()
    {
        $this->object->setSecondName('Дубровский');
        $this->assertEquals('1-Дубровский', $this->object->genderAutoDetect().'-Дубровский');
    }
    public function testGenDetect241()
    {
        $this->object->setSecondName('Дульцев');
        $this->assertEquals('1-Дульцев', $this->object->genderAutoDetect().'-Дульцев');
    }
    public function testGenDetect242()
    {
        $this->object->setSecondName('Думановский');
        $this->assertEquals('1-Думановский', $this->object->genderAutoDetect().'-Думановский');
    }
    public function testGenDetect243()
    {
        $this->object->setSecondName('Дуров');
        $this->assertEquals('1-Дуров', $this->object->genderAutoDetect().'-Дуров');
    }
    public function testGenDetect244()
    {
        $this->object->setSecondName('Дятлов');
        $this->assertEquals('1-Дятлов', $this->object->genderAutoDetect().'-Дятлов');
    }
    public function testGenDetect245()
    {
        $this->object->setSecondName('Евдокимов');
        $this->assertEquals('1-Евдокимов', $this->object->genderAutoDetect().'-Евдокимов');
    }
    public function testGenDetect246()
    {
        $this->object->setSecondName('Евстигнеев');
        $this->assertEquals('1-Евстигнеев', $this->object->genderAutoDetect().'-Евстигнеев');
    }
    public function testGenDetect247()
    {
        $this->object->setSecondName('Егоров');
        $this->assertEquals('1-Егоров', $this->object->genderAutoDetect().'-Егоров');
    }
    public function testGenDetect248()
    {
        $this->object->setSecondName('Едемский');
        $this->assertEquals('1-Едемский', $this->object->genderAutoDetect().'-Едемский');
    }
    public function testGenDetect249()
    {
        $this->object->setSecondName('Ежов');
        $this->assertEquals('1-Ежов', $this->object->genderAutoDetect().'-Ежов');
    }
    public function testGenDetect250()
    {
        $this->object->setSecondName('Елагин');
        $this->assertEquals('1-Елагин', $this->object->genderAutoDetect().'-Елагин');
    }
    public function testGenDetect251()
    {
        $this->object->setSecondName('Елизаров');
        $this->assertEquals('1-Елизаров', $this->object->genderAutoDetect().'-Елизаров');
    }
    public function testGenDetect252()
    {
        $this->object->setSecondName('Елисеев');
        $this->assertEquals('1-Елисеев', $this->object->genderAutoDetect().'-Елисеев');
    }
    public function testGenDetect253()
    {
        $this->object->setSecondName('Ельцин');
        $this->assertEquals('1-Ельцин', $this->object->genderAutoDetect().'-Ельцин');
    }
    public function testGenDetect254()
    {
        $this->object->setSecondName('Ельцов');
        $this->assertEquals('1-Ельцов', $this->object->genderAutoDetect().'-Ельцов');
    }
    public function testGenDetect255()
    {
        $this->object->setSecondName('Емельяненко');
        $this->assertEquals('1-Емельяненко', $this->object->genderAutoDetect().'-Емельяненко');
    }
    public function testGenDetect256()
    {
        $this->object->setSecondName('Емельянов');
        $this->assertEquals('1-Емельянов', $this->object->genderAutoDetect().'-Емельянов');
    }
    public function testGenDetect257()
    {
        $this->object->setSecondName('Енин');
        $this->assertEquals('1-Енин', $this->object->genderAutoDetect().'-Енин');
    }
    public function testGenDetect258()
    {
        $this->object->setSecondName('Ерзов');
        $this->assertEquals('1-Ерзов', $this->object->genderAutoDetect().'-Ерзов');
    }
    public function testGenDetect259()
    {
        $this->object->setSecondName('Ермаков');
        $this->assertEquals('1-Ермаков', $this->object->genderAutoDetect().'-Ермаков');
    }
    public function testGenDetect260()
    {
        $this->object->setSecondName('Ермилов');
        $this->assertEquals('1-Ермилов', $this->object->genderAutoDetect().'-Ермилов');
    }
    public function testGenDetect261()
    {
        $this->object->setSecondName('Еромеев');
        $this->assertEquals('1-Еромеев', $this->object->genderAutoDetect().'-Еромеев');
    }
    public function testGenDetect262()
    {
        $this->object->setSecondName('Ерофеев');
        $this->assertEquals('1-Ерофеев', $this->object->genderAutoDetect().'-Ерофеев');
    }
    public function testGenDetect263()
    {
        $this->object->setSecondName('Ершов');
        $this->assertEquals('1-Ершов', $this->object->genderAutoDetect().'-Ершов');
    }
    public function testGenDetect264()
    {
        $this->object->setSecondName('Есипов');
        $this->assertEquals('1-Есипов', $this->object->genderAutoDetect().'-Есипов');
    }
    public function testGenDetect265()
    {
        $this->object->setSecondName('Ефимов');
        $this->assertEquals('1-Ефимов', $this->object->genderAutoDetect().'-Ефимов');
    }
    public function testGenDetect266()
    {
        $this->object->setSecondName('Ефремов');
        $this->assertEquals('1-Ефремов', $this->object->genderAutoDetect().'-Ефремов');
    }
    public function testGenDetect267()
    {
        $this->object->setSecondName('Емелин');
        $this->assertEquals('1-Емелин', $this->object->genderAutoDetect().'-Емелин');
    }
    public function testGenDetect268()
    {
        $this->object->setSecondName('Ерохин');
        $this->assertEquals('1-Ерохин', $this->object->genderAutoDetect().'-Ерохин');
    }
    public function testGenDetect269()
    {
        $this->object->setSecondName('Ерёмин');
        $this->assertEquals('1-Ерёмин', $this->object->genderAutoDetect().'-Ерёмин');
    }
    public function testGenDetect270()
    {
        $this->object->setSecondName('Ешевский');
        $this->assertEquals('1-Ешевский', $this->object->genderAutoDetect().'-Ешевский');
    }
    public function testGenDetect271()
    {
        $this->object->setSecondName('Жабин');
        $this->assertEquals('1-Жабин', $this->object->genderAutoDetect().'-Жабин');
    }
    public function testGenDetect272()
    {
        $this->object->setSecondName('Жарков');
        $this->assertEquals('1-Жарков', $this->object->genderAutoDetect().'-Жарков');
    }
    public function testGenDetect273()
    {
        $this->object->setSecondName('Жарыхин');
        $this->assertEquals('1-Жарыхин', $this->object->genderAutoDetect().'-Жарыхин');
    }
    public function testGenDetect274()
    {
        $this->object->setSecondName('Жвиков');
        $this->assertEquals('1-Жвиков', $this->object->genderAutoDetect().'-Жвиков');
    }
    public function testGenDetect275()
    {
        $this->object->setSecondName('Жданов');
        $this->assertEquals('1-Жданов', $this->object->genderAutoDetect().'-Жданов');
    }
    public function testGenDetect276()
    {
        $this->object->setSecondName('Жеглов');
        $this->assertEquals('1-Жеглов', $this->object->genderAutoDetect().'-Жеглов');
    }
    public function testGenDetect277()
    {
        $this->object->setSecondName('Железкин');
        $this->assertEquals('1-Железкин', $this->object->genderAutoDetect().'-Железкин');
    }
    public function testGenDetect278()
    {
        $this->object->setSecondName('Жестакова');
        $this->assertEquals('1-Жестакова', $this->object->genderAutoDetect().'-Жестакова');
    }
    public function testGenDetect279()
    {
        $this->object->setSecondName('Живенков');
        $this->assertEquals('1-Живенков', $this->object->genderAutoDetect().'-Живенков');
    }
    public function testGenDetect280()
    {
        $this->object->setSecondName('Жиглов');
        $this->assertEquals('1-Жиглов', $this->object->genderAutoDetect().'-Жиглов');
    }
    public function testGenDetect281()
    {
        $this->object->setSecondName('Жигунов');
        $this->assertEquals('1-Жигунов', $this->object->genderAutoDetect().'-Жигунов');
    }
    public function testGenDetect282()
    {
        $this->object->setSecondName('Жидков');
        $this->assertEquals('1-Жидков', $this->object->genderAutoDetect().'-Жидков');
    }
    public function testGenDetect283()
    {
        $this->object->setSecondName('Жикин');
        $this->assertEquals('1-Жикин', $this->object->genderAutoDetect().'-Жикин');
    }
    public function testGenDetect284()
    {
        $this->object->setSecondName('Жилин');
        $this->assertEquals('1-Жилин', $this->object->genderAutoDetect().'-Жилин');
    }
    public function testGenDetect285()
    {
        $this->object->setSecondName('Жилов');
        $this->assertEquals('1-Жилов', $this->object->genderAutoDetect().'-Жилов');
    }
    public function testGenDetect286()
    {
        $this->object->setSecondName('Жолдин');
        $this->assertEquals('1-Жолдин', $this->object->genderAutoDetect().'-Жолдин');
    }
    public function testGenDetect287()
    {
        $this->object->setSecondName('Жуков');
        $this->assertEquals('1-Жуков', $this->object->genderAutoDetect().'-Жуков');
    }
    public function testGenDetect288()
    {
        $this->object->setSecondName('Жутов');
        $this->assertEquals('1-Жутов', $this->object->genderAutoDetect().'-Жутов');
    }
    public function testGenDetect289()
    {
        $this->object->setSecondName('Журавлёв');
        $this->assertEquals('1-Журавлёв', $this->object->genderAutoDetect().'-Журавлёв');
    }
    public function testGenDetect290()
    {
        $this->object->setSecondName('Журов');
        $this->assertEquals('1-Журов', $this->object->genderAutoDetect().'-Журов');
    }
    public function testGenDetect291()
    {
        $this->object->setSecondName('Заврагин');
        $this->assertEquals('1-Заврагин', $this->object->genderAutoDetect().'-Заврагин');
    }
    public function testGenDetect292()
    {
        $this->object->setSecondName('Завражин');
        $this->assertEquals('1-Завражин', $this->object->genderAutoDetect().'-Завражин');
    }
    public function testGenDetect293()
    {
        $this->object->setSecondName('Завражнов');
        $this->assertEquals('1-Завражнов', $this->object->genderAutoDetect().'-Завражнов');
    }
    public function testGenDetect294()
    {
        $this->object->setSecondName('Завражный');
        $this->assertEquals('1-Завражный', $this->object->genderAutoDetect().'-Завражный');
    }
    public function testGenDetect295()
    {
        $this->object->setSecondName('Завразин');
        $this->assertEquals('1-Завразин', $this->object->genderAutoDetect().'-Завразин');
    }
    public function testGenDetect296()
    {
        $this->object->setSecondName('Завьялов');
        $this->assertEquals('1-Завьялов', $this->object->genderAutoDetect().'-Завьялов');
    }
    public function testGenDetect297()
    {
        $this->object->setSecondName('Задорнов');
        $this->assertEquals('1-Задорнов', $this->object->genderAutoDetect().'-Задорнов');
    }
    public function testGenDetect298()
    {
        $this->object->setSecondName('Задорожный');
        $this->assertEquals('1-Задорожный', $this->object->genderAutoDetect().'-Задорожный');
    }
    public function testGenDetect299()
    {
        $this->object->setSecondName('Зайцев');
        $this->assertEquals('1-Зайцев', $this->object->genderAutoDetect().'-Зайцев');
    }
    public function testGenDetect300()
    {
        $this->object->setSecondName('Закревский');
        $this->assertEquals('1-Закревский', $this->object->genderAutoDetect().'-Закревский');
    }
    public function testGenDetect301()
    {
        $this->object->setSecondName('Закрятин');
        $this->assertEquals('1-Закрятин', $this->object->genderAutoDetect().'-Закрятин');
    }
    public function testGenDetect302()
    {
        $this->object->setSecondName('Захаров');
        $this->assertEquals('1-Захаров', $this->object->genderAutoDetect().'-Захаров');
    }
    public function testGenDetect303()
    {
        $this->object->setSecondName('Захарьин');
        $this->assertEquals('1-Захарьин', $this->object->genderAutoDetect().'-Захарьин');
    }
    public function testGenDetect304()
    {
        $this->object->setSecondName('Звягин');
        $this->assertEquals('1-Звягин', $this->object->genderAutoDetect().'-Звягин');
    }
    public function testGenDetect305()
    {
        $this->object->setSecondName('Зёмин');
        $this->assertEquals('1-Зёмин', $this->object->genderAutoDetect().'-Зёмин');
    }
    public function testGenDetect306()
    {
        $this->object->setSecondName('Зимин');
        $this->assertEquals('1-Зимин', $this->object->genderAutoDetect().'-Зимин');
    }
    public function testGenDetect307()
    {
        $this->object->setSecondName('Золин');
        $this->assertEquals('1-Золин', $this->object->genderAutoDetect().'-Золин');
    }
    public function testGenDetect308()
    {
        $this->object->setSecondName('Зонов');
        $this->assertEquals('1-Зонов', $this->object->genderAutoDetect().'-Зонов');
    }
    public function testGenDetect309()
    {
        $this->object->setSecondName('Зубков');
        $this->assertEquals('1-Зубков', $this->object->genderAutoDetect().'-Зубков');
    }
    public function testGenDetect310()
    {
        $this->object->setSecondName('Зубов');
        $this->assertEquals('1-Зубов', $this->object->genderAutoDetect().'-Зубов');
    }
    public function testGenDetect311()
    {
        $this->object->setSecondName('Зуев');
        $this->assertEquals('1-Зуев', $this->object->genderAutoDetect().'-Зуев');
    }
    public function testGenDetect312()
    {
        $this->object->setSecondName('Зуйков');
        $this->assertEquals('1-Зуйков', $this->object->genderAutoDetect().'-Зуйков');
    }
    public function testGenDetect313()
    {
        $this->object->setSecondName('Зимняков');
        $this->assertEquals('1-Зимняков', $this->object->genderAutoDetect().'-Зимняков');
    }
    public function testGenDetect314()
    {
        $this->object->setSecondName('Зинченко');
        $this->assertEquals('1-Зинченко', $this->object->genderAutoDetect().'-Зинченко');
    }
    public function testGenDetect315()
    {
        $this->object->setSecondName('Зыкин');
        $this->assertEquals('1-Зыкин', $this->object->genderAutoDetect().'-Зыкин');
    }
    public function testGenDetect316()
    {
        $this->object->setSecondName('Зырянов');
        $this->assertEquals('1-Зырянов', $this->object->genderAutoDetect().'-Зырянов');
    }
    public function testGenDetect317()
    {
        $this->object->setSecondName('Зюганов');
        $this->assertEquals('1-Зюганов', $this->object->genderAutoDetect().'-Зюганов');
    }
    public function testGenDetect318()
    {
        $this->object->setSecondName('Зверев');
        $this->assertEquals('1-Зверев', $this->object->genderAutoDetect().'-Зверев');
    }
    public function testGenDetect319()
    {
        $this->object->setSecondName('Игнаткович');
        $this->assertEquals('1-Игнаткович', $this->object->genderAutoDetect().'-Игнаткович');
    }
    public function testGenDetect320()
    {
        $this->object->setSecondName('Ивазов');
        $this->assertEquals('1-Ивазов', $this->object->genderAutoDetect().'-Ивазов');
    }
    public function testGenDetect321()
    {
        $this->object->setSecondName('Ивакин');
        $this->assertEquals('1-Ивакин', $this->object->genderAutoDetect().'-Ивакин');
    }
    public function testGenDetect322()
    {
        $this->object->setSecondName('Ибрагимов');
        $this->assertEquals('1-Ибрагимов', $this->object->genderAutoDetect().'-Ибрагимов');
    }
    public function testGenDetect323()
    {
        $this->object->setSecondName('Иванов');
        $this->assertEquals('1-Иванов', $this->object->genderAutoDetect().'-Иванов');
    }
    public function testGenDetect324()
    {
        $this->object->setSecondName('Иванков');
        $this->assertEquals('1-Иванков', $this->object->genderAutoDetect().'-Иванков');
    }
    public function testGenDetect325()
    {
        $this->object->setSecondName('Ивашин');
        $this->assertEquals('1-Ивашин', $this->object->genderAutoDetect().'-Ивашин');
    }
    public function testGenDetect326()
    {
        $this->object->setSecondName('Ивашов');
        $this->assertEquals('1-Ивашов', $this->object->genderAutoDetect().'-Ивашов');
    }
    public function testGenDetect327()
    {
        $this->object->setSecondName('Ивкин');
        $this->assertEquals('1-Ивкин', $this->object->genderAutoDetect().'-Ивкин');
    }
    public function testGenDetect328()
    {
        $this->object->setSecondName('Иволгин');
        $this->assertEquals('1-Иволгин', $this->object->genderAutoDetect().'-Иволгин');
    }
    public function testGenDetect329()
    {
        $this->object->setSecondName('Игнатьев');
        $this->assertEquals('1-Игнатьев', $this->object->genderAutoDetect().'-Игнатьев');
    }
    public function testGenDetect330()
    {
        $this->object->setSecondName('Игошин');
        $this->assertEquals('1-Игошин', $this->object->genderAutoDetect().'-Игошин');
    }
    public function testGenDetect331()
    {
        $this->object->setSecondName('Исмайлов');
        $this->assertEquals('1-Исмайлов', $this->object->genderAutoDetect().'-Исмайлов');
    }
    public function testGenDetect332()
    {
        $this->object->setSecondName('Измайлов');
        $this->assertEquals('1-Измайлов', $this->object->genderAutoDetect().'-Измайлов');
    }
    public function testGenDetect333()
    {
        $this->object->setSecondName('Иканов');
        $this->assertEquals('1-Иканов', $this->object->genderAutoDetect().'-Иканов');
    }
    public function testGenDetect334()
    {
        $this->object->setSecondName('Икашев');
        $this->assertEquals('1-Икашев', $this->object->genderAutoDetect().'-Икашев');
    }
    public function testGenDetect335()
    {
        $this->object->setSecondName('Ильин');
        $this->assertEquals('1-Ильин', $this->object->genderAutoDetect().'-Ильин');
    }
    public function testGenDetect336()
    {
        $this->object->setSecondName('Илькун');
        $this->assertEquals('1-Илькун', $this->object->genderAutoDetect().'-Илькун');
    }
    public function testGenDetect337()
    {
        $this->object->setSecondName('Илюшин');
        $this->assertEquals('1-Илюшин', $this->object->genderAutoDetect().'-Илюшин');
    }
    public function testGenDetect338()
    {
        $this->object->setSecondName('Ильюшин');
        $this->assertEquals('1-Ильюшин', $this->object->genderAutoDetect().'-Ильюшин');
    }
    public function testGenDetect339()
    {
        $this->object->setSecondName('Иноземцев');
        $this->assertEquals('1-Иноземцев', $this->object->genderAutoDetect().'-Иноземцев');
    }
    public function testGenDetect340()
    {
        $this->object->setSecondName('Ипатьев');
        $this->assertEquals('1-Ипатьев', $this->object->genderAutoDetect().'-Ипатьев');
    }
    public function testGenDetect341()
    {
        $this->object->setSecondName('Исаев');
        $this->assertEquals('1-Исаев', $this->object->genderAutoDetect().'-Исаев');
    }
    public function testGenDetect342()
    {
        $this->object->setSecondName('Истомин');
        $this->assertEquals('1-Истомин', $this->object->genderAutoDetect().'-Истомин');
    }
    public function testGenDetect343()
    {
        $this->object->setSecondName('Кабинов');
        $this->assertEquals('1-Кабинов', $this->object->genderAutoDetect().'-Кабинов');
    }
    public function testGenDetect344()
    {
        $this->object->setSecondName('Каблуков');
        $this->assertEquals('1-Каблуков', $this->object->genderAutoDetect().'-Каблуков');
    }
    public function testGenDetect345()
    {
        $this->object->setSecondName('Каверин');
        $this->assertEquals('1-Каверин', $this->object->genderAutoDetect().'-Каверин');
    }
    public function testGenDetect346()
    {
        $this->object->setSecondName('Кадников');
        $this->assertEquals('1-Кадников', $this->object->genderAutoDetect().'-Кадников');
    }
    public function testGenDetect347()
    {
        $this->object->setSecondName('Кадцын');
        $this->assertEquals('1-Кадцын', $this->object->genderAutoDetect().'-Кадцын');
    }
    public function testGenDetect348()
    {
        $this->object->setSecondName('Казаков');
        $this->assertEquals('1-Казаков', $this->object->genderAutoDetect().'-Казаков');
    }
    public function testGenDetect349()
    {
        $this->object->setSecondName('Казанцев');
        $this->assertEquals('1-Казанцев', $this->object->genderAutoDetect().'-Казанцев');
    }
    public function testGenDetect350()
    {
        $this->object->setSecondName('Казарезов');
        $this->assertEquals('1-Казарезов', $this->object->genderAutoDetect().'-Казарезов');
    }
    public function testGenDetect351()
    {
        $this->object->setSecondName('Калашник');
        $this->assertEquals('1-Калашник', $this->object->genderAutoDetect().'-Калашник');
    }
    public function testGenDetect352()
    {
        $this->object->setSecondName('Калганов');
        $this->assertEquals('1-Калганов', $this->object->genderAutoDetect().'-Калганов');
    }
    public function testGenDetect353()
    {
        $this->object->setSecondName('Каменских');
        $this->assertEquals('1-Каменских', $this->object->genderAutoDetect().'-Каменских');
    }
    public function testGenDetect354()
    {
        $this->object->setSecondName('Камкин');
        $this->assertEquals('1-Камкин', $this->object->genderAutoDetect().'-Камкин');
    }
    public function testGenDetect355()
    {
        $this->object->setSecondName('Каналин');
        $this->assertEquals('1-Каналин', $this->object->genderAutoDetect().'-Каналин');
    }
    public function testGenDetect356()
    {
        $this->object->setSecondName('Кандинский');
        $this->assertEquals('1-Кандинский', $this->object->genderAutoDetect().'-Кандинский');
    }
    public function testGenDetect357()
    {
        $this->object->setSecondName('Капица');
        $this->assertEquals('1-Капица', $this->object->genderAutoDetect().'-Капица');
    }
    public function testGenDetect358()
    {
        $this->object->setSecondName('Капралов');
        $this->assertEquals('1-Капралов', $this->object->genderAutoDetect().'-Капралов');
    }
    public function testGenDetect359()
    {
        $this->object->setSecondName('Караваев');
        $this->assertEquals('1-Караваев', $this->object->genderAutoDetect().'-Караваев');
    }
    public function testGenDetect360()
    {
        $this->object->setSecondName('Караулов');
        $this->assertEquals('1-Караулов', $this->object->genderAutoDetect().'-Караулов');
    }
    public function testGenDetect361()
    {
        $this->object->setSecondName('Карев');
        $this->assertEquals('1-Карев', $this->object->genderAutoDetect().'-Карев');
    }
    public function testGenDetect362()
    {
        $this->object->setSecondName('Каретников');
        $this->assertEquals('1-Каретников', $this->object->genderAutoDetect().'-Каретников');
    }
    public function testGenDetect363()
    {
        $this->object->setSecondName('Каргин');
        $this->assertEquals('1-Каргин', $this->object->genderAutoDetect().'-Каргин');
    }
    public function testGenDetect364()
    {
        $this->object->setSecondName('Карташов');
        $this->assertEquals('1-Карташов', $this->object->genderAutoDetect().'-Карташов');
    }
    public function testGenDetect365()
    {
        $this->object->setSecondName('Карчагин');
        $this->assertEquals('1-Карчагин', $this->object->genderAutoDetect().'-Карчагин');
    }
    public function testGenDetect366()
    {
        $this->object->setSecondName('Касатый');
        $this->assertEquals('1-Касатый', $this->object->genderAutoDetect().'-Касатый');
    }
    public function testGenDetect367()
    {
        $this->object->setSecondName('Катин');
        $this->assertEquals('1-Катин', $this->object->genderAutoDetect().'-Катин');
    }
    public function testGenDetect368()
    {
        $this->object->setSecondName('Качусов');
        $this->assertEquals('1-Качусов', $this->object->genderAutoDetect().'-Качусов');
    }
    public function testGenDetect369()
    {
        $this->object->setSecondName('Кашарин');
        $this->assertEquals('1-Кашарин', $this->object->genderAutoDetect().'-Кашарин');
    }
    public function testGenDetect370()
    {
        $this->object->setSecondName('Каширин');
        $this->assertEquals('1-Каширин', $this->object->genderAutoDetect().'-Каширин');
    }
    public function testGenDetect371()
    {
        $this->object->setSecondName('Кашканов');
        $this->assertEquals('1-Кашканов', $this->object->genderAutoDetect().'-Кашканов');
    }
    public function testGenDetect372()
    {
        $this->object->setSecondName('Кашников');
        $this->assertEquals('1-Кашников', $this->object->genderAutoDetect().'-Кашников');
    }
    public function testGenDetect373()
    {
        $this->object->setSecondName('Киреев');
        $this->assertEquals('1-Киреев', $this->object->genderAutoDetect().'-Киреев');
    }
    public function testGenDetect374()
    {
        $this->object->setSecondName('Кирилишен');
        $this->assertEquals('1-Кирилишен', $this->object->genderAutoDetect().'-Кирилишен');
    }
    public function testGenDetect375()
    {
        $this->object->setSecondName('Кирилловский');
        $this->assertEquals('1-Кирилловский', $this->object->genderAutoDetect().'-Кирилловский');
    }
    public function testGenDetect376()
    {
        $this->object->setSecondName('Кирилов');
        $this->assertEquals('1-Кирилов', $this->object->genderAutoDetect().'-Кирилов');
    }
    public function testGenDetect377()
    {
        $this->object->setSecondName('Кирсанов');
        $this->assertEquals('1-Кирсанов', $this->object->genderAutoDetect().'-Кирсанов');
    }
    public function testGenDetect378()
    {
        $this->object->setSecondName('Кирьянов');
        $this->assertEquals('1-Кирьянов', $this->object->genderAutoDetect().'-Кирьянов');
    }
    public function testGenDetect379()
    {
        $this->object->setSecondName('Клепахов');
        $this->assertEquals('1-Клепахов', $this->object->genderAutoDetect().'-Клепахов');
    }
    public function testGenDetect380()
    {
        $this->object->setSecondName('Климов');
        $this->assertEquals('1-Климов', $this->object->genderAutoDetect().'-Климов');
    }
    public function testGenDetect381()
    {
        $this->object->setSecondName('Климушин');
        $this->assertEquals('1-Климушин', $this->object->genderAutoDetect().'-Климушин');
    }
    public function testGenDetect382()
    {
        $this->object->setSecondName('Клоков');
        $this->assertEquals('1-Клоков', $this->object->genderAutoDetect().'-Клоков');
    }
    public function testGenDetect383()
    {
        $this->object->setSecondName('Князев');
        $this->assertEquals('1-Князев', $this->object->genderAutoDetect().'-Князев');
    }
    public function testGenDetect384()
    {
        $this->object->setSecondName('Ковалёв');
        $this->assertEquals('1-Ковалёв', $this->object->genderAutoDetect().'-Ковалёв');
    }
    public function testGenDetect385()
    {
        $this->object->setSecondName('Ковалевский');
        $this->assertEquals('1-Ковалевский', $this->object->genderAutoDetect().'-Ковалевский');
    }
    public function testGenDetect386()
    {
        $this->object->setSecondName('Ковров');
        $this->assertEquals('1-Ковров', $this->object->genderAutoDetect().'-Ковров');
    }
    public function testGenDetect387()
    {
        $this->object->setSecondName('Ковшутин');
        $this->assertEquals('1-Ковшутин', $this->object->genderAutoDetect().'-Ковшутин');
    }
    public function testGenDetect388()
    {
        $this->object->setSecondName('Кожуров');
        $this->assertEquals('1-Кожуров', $this->object->genderAutoDetect().'-Кожуров');
    }
    public function testGenDetect389()
    {
        $this->object->setSecondName('Кожухов');
        $this->assertEquals('1-Кожухов', $this->object->genderAutoDetect().'-Кожухов');
    }
    public function testGenDetect390()
    {
        $this->object->setSecondName('Козаков');
        $this->assertEquals('1-Козаков', $this->object->genderAutoDetect().'-Козаков');
    }
    public function testGenDetect391()
    {
        $this->object->setSecondName('Козарь');
        $this->assertEquals('1-Козарь', $this->object->genderAutoDetect().'-Козарь');
    }
    public function testGenDetect392()
    {
        $this->object->setSecondName('Козлов');
        $this->assertEquals('1-Козлов', $this->object->genderAutoDetect().'-Козлов');
    }
    public function testGenDetect393()
    {
        $this->object->setSecondName('Козловский');
        $this->assertEquals('1-Козловский', $this->object->genderAutoDetect().'-Козловский');
    }
    public function testGenDetect394()
    {
        $this->object->setSecondName('Колесников');
        $this->assertEquals('1-Колесников', $this->object->genderAutoDetect().'-Колесников');
    }
    public function testGenDetect395()
    {
        $this->object->setSecondName('Колонтаев');
        $this->assertEquals('1-Колонтаев', $this->object->genderAutoDetect().'-Колонтаев');
    }
    public function testGenDetect396()
    {
        $this->object->setSecondName('Колосов');
        $this->assertEquals('1-Колосов', $this->object->genderAutoDetect().'-Колосов');
    }
    public function testGenDetect397()
    {
        $this->object->setSecondName('Кольцов');
        $this->assertEquals('1-Кольцов', $this->object->genderAutoDetect().'-Кольцов');
    }
    public function testGenDetect398()
    {
        $this->object->setSecondName('Комаров');
        $this->assertEquals('1-Комаров', $this->object->genderAutoDetect().'-Комаров');
    }
    public function testGenDetect399()
    {
        $this->object->setSecondName('Комзин');
        $this->assertEquals('1-Комзин', $this->object->genderAutoDetect().'-Комзин');
    }
    public function testGenDetect400()
    {
        $this->object->setSecondName('Комолов');
        $this->assertEquals('1-Комолов', $this->object->genderAutoDetect().'-Комолов');
    }
    public function testGenDetect401()
    {
        $this->object->setSecondName('Кондратьев');
        $this->assertEquals('1-Кондратьев', $this->object->genderAutoDetect().'-Кондратьев');
    }
    public function testGenDetect402()
    {
        $this->object->setSecondName('Конев');
        $this->assertEquals('1-Конев', $this->object->genderAutoDetect().'-Конев');
    }
    public function testGenDetect403()
    {
        $this->object->setSecondName('Конников');
        $this->assertEquals('1-Конников', $this->object->genderAutoDetect().'-Конников');
    }
    public function testGenDetect404()
    {
        $this->object->setSecondName('Коновалов');
        $this->assertEquals('1-Коновалов', $this->object->genderAutoDetect().'-Коновалов');
    }
    public function testGenDetect405()
    {
        $this->object->setSecondName('Коньяков');
        $this->assertEquals('1-Коньяков', $this->object->genderAutoDetect().'-Коньяков');
    }
    public function testGenDetect406()
    {
        $this->object->setSecondName('Коняшев');
        $this->assertEquals('1-Коняшев', $this->object->genderAutoDetect().'-Коняшев');
    }
    public function testGenDetect407()
    {
        $this->object->setSecondName('Копейкин');
        $this->assertEquals('1-Копейкин', $this->object->genderAutoDetect().'-Копейкин');
    }
    public function testGenDetect408()
    {
        $this->object->setSecondName('Коренев');
        $this->assertEquals('1-Коренев', $this->object->genderAutoDetect().'-Коренев');
    }
    public function testGenDetect409()
    {
        $this->object->setSecondName('Коренёв');
        $this->assertEquals('1-Коренёв', $this->object->genderAutoDetect().'-Коренёв');
    }
    public function testGenDetect410()
    {
        $this->object->setSecondName('Коржаков');
        $this->assertEquals('1-Коржаков', $this->object->genderAutoDetect().'-Коржаков');
    }
    public function testGenDetect411()
    {
        $this->object->setSecondName('Коржев');
        $this->assertEquals('1-Коржев', $this->object->genderAutoDetect().'-Коржев');
    }
    public function testGenDetect412()
    {
        $this->object->setSecondName('Корнев');
        $this->assertEquals('1-Корнев', $this->object->genderAutoDetect().'-Корнев');
    }
    public function testGenDetect413()
    {
        $this->object->setSecondName('Корнилов');
        $this->assertEquals('1-Корнилов', $this->object->genderAutoDetect().'-Корнилов');
    }
    public function testGenDetect414()
    {
        $this->object->setSecondName('Коровин');
        $this->assertEquals('1-Коровин', $this->object->genderAutoDetect().'-Коровин');
    }
    public function testGenDetect415()
    {
        $this->object->setSecondName('Королёв');
        $this->assertEquals('1-Королёв', $this->object->genderAutoDetect().'-Королёв');
    }
    public function testGenDetect416()
    {
        $this->object->setSecondName('Коротаев');
        $this->assertEquals('1-Коротаев', $this->object->genderAutoDetect().'-Коротаев');
    }
    public function testGenDetect417()
    {
        $this->object->setSecondName('Корчагин');
        $this->assertEquals('1-Корчагин', $this->object->genderAutoDetect().'-Корчагин');
    }
    public function testGenDetect418()
    {
        $this->object->setSecondName('Косарёв');
        $this->assertEquals('1-Косарёв', $this->object->genderAutoDetect().'-Косарёв');
    }
    public function testGenDetect419()
    {
        $this->object->setSecondName('Косков');
        $this->assertEquals('1-Косков', $this->object->genderAutoDetect().'-Косков');
    }
    public function testGenDetect420()
    {
        $this->object->setSecondName('Косомов');
        $this->assertEquals('1-Косомов', $this->object->genderAutoDetect().'-Косомов');
    }
    public function testGenDetect421()
    {
        $this->object->setSecondName('Косоруков');
        $this->assertEquals('1-Косоруков', $this->object->genderAutoDetect().'-Косоруков');
    }
    public function testGenDetect422()
    {
        $this->object->setSecondName('Костин');
        $this->assertEquals('1-Костин', $this->object->genderAutoDetect().'-Костин');
    }
    public function testGenDetect423()
    {
        $this->object->setSecondName('Косяк');
        $this->assertEquals('1-Косяк', $this->object->genderAutoDetect().'-Косяк');
    }
    public function testGenDetect424()
    {
        $this->object->setSecondName('Котов');
        $this->assertEquals('1-Котов', $this->object->genderAutoDetect().'-Котов');
    }
    public function testGenDetect425()
    {
        $this->object->setSecondName('Костомаров');
        $this->assertEquals('1-Костомаров', $this->object->genderAutoDetect().'-Костомаров');
    }
    public function testGenDetect426()
    {
        $this->object->setSecondName('Коченков');
        $this->assertEquals('1-Коченков', $this->object->genderAutoDetect().'-Коченков');
    }
    public function testGenDetect427()
    {
        $this->object->setSecondName('Кошелев');
        $this->assertEquals('1-Кошелев', $this->object->genderAutoDetect().'-Кошелев');
    }
    public function testGenDetect428()
    {
        $this->object->setSecondName('Кошечкин');
        $this->assertEquals('1-Кошечкин', $this->object->genderAutoDetect().'-Кошечкин');
    }
    public function testGenDetect429()
    {
        $this->object->setSecondName('Кошкин');
        $this->assertEquals('1-Кошкин', $this->object->genderAutoDetect().'-Кошкин');
    }
    public function testGenDetect430()
    {
        $this->object->setSecondName('Кравчук');
        $this->assertEquals('1-Кравчук', $this->object->genderAutoDetect().'-Кравчук');
    }
    public function testGenDetect431()
    {
        $this->object->setSecondName('Краев');
        $this->assertEquals('1-Краев', $this->object->genderAutoDetect().'-Краев');
    }
    public function testGenDetect432()
    {
        $this->object->setSecondName('Краснов');
        $this->assertEquals('1-Краснов', $this->object->genderAutoDetect().'-Краснов');
    }
    public function testGenDetect433()
    {
        $this->object->setSecondName('Красноперов');
        $this->assertEquals('1-Красноперов', $this->object->genderAutoDetect().'-Красноперов');
    }
    public function testGenDetect434()
    {
        $this->object->setSecondName('Кропанин');
        $this->assertEquals('1-Кропанин', $this->object->genderAutoDetect().'-Кропанин');
    }
    public function testGenDetect435()
    {
        $this->object->setSecondName('Кругликов');
        $this->assertEquals('1-Кругликов', $this->object->genderAutoDetect().'-Кругликов');
    }
    public function testGenDetect436()
    {
        $this->object->setSecondName('Круглов');
        $this->assertEquals('1-Круглов', $this->object->genderAutoDetect().'-Круглов');
    }
    public function testGenDetect437()
    {
        $this->object->setSecondName('Крупин');
        $this->assertEquals('1-Крупин', $this->object->genderAutoDetect().'-Крупин');
    }
    public function testGenDetect438()
    {
        $this->object->setSecondName('Крутин');
        $this->assertEquals('1-Крутин', $this->object->genderAutoDetect().'-Крутин');
    }
    public function testGenDetect439()
    {
        $this->object->setSecondName('Кручинкин');
        $this->assertEquals('1-Кручинкин', $this->object->genderAutoDetect().'-Кручинкин');
    }
    public function testGenDetect440()
    {
        $this->object->setSecondName('Крылов');
        $this->assertEquals('1-Крылов', $this->object->genderAutoDetect().'-Крылов');
    }
    public function testGenDetect441()
    {
        $this->object->setSecondName('Крысов');
        $this->assertEquals('1-Крысов', $this->object->genderAutoDetect().'-Крысов');
    }
    public function testGenDetect442()
    {
        $this->object->setSecondName('Крюков');
        $this->assertEquals('1-Крюков', $this->object->genderAutoDetect().'-Крюков');
    }
    public function testGenDetect443()
    {
        $this->object->setSecondName('Кубланов');
        $this->assertEquals('1-Кубланов', $this->object->genderAutoDetect().'-Кубланов');
    }
    public function testGenDetect444()
    {
        $this->object->setSecondName('Кудашов');
        $this->assertEquals('1-Кудашов', $this->object->genderAutoDetect().'-Кудашов');
    }
    public function testGenDetect445()
    {
        $this->object->setSecondName('Кудрин');
        $this->assertEquals('1-Кудрин', $this->object->genderAutoDetect().'-Кудрин');
    }
    public function testGenDetect446()
    {
        $this->object->setSecondName('Кудрявцев');
        $this->assertEquals('1-Кудрявцев', $this->object->genderAutoDetect().'-Кудрявцев');
    }
    public function testGenDetect447()
    {
        $this->object->setSecondName('Кудряшов');
        $this->assertEquals('1-Кудряшов', $this->object->genderAutoDetect().'-Кудряшов');
    }
    public function testGenDetect448()
    {
        $this->object->setSecondName('Кузнецов');
        $this->assertEquals('1-Кузнецов', $this->object->genderAutoDetect().'-Кузнецов');
    }
    public function testGenDetect449()
    {
        $this->object->setSecondName('Кузьмин');
        $this->assertEquals('1-Кузьмин', $this->object->genderAutoDetect().'-Кузьмин');
    }
    public function testGenDetect450()
    {
        $this->object->setSecondName('Куимов');
        $this->assertEquals('1-Куимов', $this->object->genderAutoDetect().'-Куимов');
    }
    public function testGenDetect451()
    {
        $this->object->setSecondName('Куклачёв');
        $this->assertEquals('1-Куклачёв', $this->object->genderAutoDetect().'-Куклачёв');
    }
    public function testGenDetect452()
    {
        $this->object->setSecondName('Кулагин');
        $this->assertEquals('1-Кулагин', $this->object->genderAutoDetect().'-Кулагин');
    }
    public function testGenDetect453()
    {
        $this->object->setSecondName('Кулибин');
        $this->assertEquals('1-Кулибин', $this->object->genderAutoDetect().'-Кулибин');
    }
    public function testGenDetect454()
    {
        $this->object->setSecondName('Куликов');
        $this->assertEquals('1-Куликов', $this->object->genderAutoDetect().'-Куликов');
    }
    public function testGenDetect455()
    {
        $this->object->setSecondName('Куракин');
        $this->assertEquals('1-Куракин', $this->object->genderAutoDetect().'-Куракин');
    }
    public function testGenDetect456()
    {
        $this->object->setSecondName('Курбатов');
        $this->assertEquals('1-Курбатов', $this->object->genderAutoDetect().'-Курбатов');
    }
    public function testGenDetect457()
    {
        $this->object->setSecondName('Курганов');
        $this->assertEquals('1-Курганов', $this->object->genderAutoDetect().'-Курганов');
    }
    public function testGenDetect458()
    {
        $this->object->setSecondName('Курдин');
        $this->assertEquals('1-Курдин', $this->object->genderAutoDetect().'-Курдин');
    }
    public function testGenDetect459()
    {
        $this->object->setSecondName('Курепин');
        $this->assertEquals('1-Курепин', $this->object->genderAutoDetect().'-Курепин');
    }
    public function testGenDetect460()
    {
        $this->object->setSecondName('Курсалин');
        $this->assertEquals('1-Курсалин', $this->object->genderAutoDetect().'-Курсалин');
    }
    public function testGenDetect461()
    {
        $this->object->setSecondName('Кутиков');
        $this->assertEquals('1-Кутиков', $this->object->genderAutoDetect().'-Кутиков');
    }
    public function testGenDetect462()
    {
        $this->object->setSecondName('Кутузов');
        $this->assertEquals('1-Кутузов', $this->object->genderAutoDetect().'-Кутузов');
    }
    public function testGenDetect463()
    {
        $this->object->setSecondName('Кутяков');
        $this->assertEquals('1-Кутяков', $this->object->genderAutoDetect().'-Кутяков');
    }
    public function testGenDetect464()
    {
        $this->object->setSecondName('Лавров');
        $this->assertEquals('1-Лавров', $this->object->genderAutoDetect().'-Лавров');
    }
    public function testGenDetect465()
    {
        $this->object->setSecondName('Лагутов');
        $this->assertEquals('1-Лагутов', $this->object->genderAutoDetect().'-Лагутов');
    }
    public function testGenDetect466()
    {
        $this->object->setSecondName('Лазарев');
        $this->assertEquals('1-Лазарев', $this->object->genderAutoDetect().'-Лазарев');
    }
    public function testGenDetect467()
    {
        $this->object->setSecondName('Ланцов');
        $this->assertEquals('1-Ланцов', $this->object->genderAutoDetect().'-Ланцов');
    }
    public function testGenDetect468()
    {
        $this->object->setSecondName('Лапидус');
        $this->assertEquals('1-Лапидус', $this->object->genderAutoDetect().'-Лапидус');
    }
    public function testGenDetect469()
    {
        $this->object->setSecondName('Лапотников');
        $this->assertEquals('1-Лапотников', $this->object->genderAutoDetect().'-Лапотников');
    }
    public function testGenDetect470()
    {
        $this->object->setSecondName('Лаптев');
        $this->assertEquals('1-Лаптев', $this->object->genderAutoDetect().'-Лаптев');
    }
    public function testGenDetect471()
    {
        $this->object->setSecondName('Лапунов');
        $this->assertEquals('1-Лапунов', $this->object->genderAutoDetect().'-Лапунов');
    }
    public function testGenDetect472()
    {
        $this->object->setSecondName('Лапухов');
        $this->assertEquals('1-Лапухов', $this->object->genderAutoDetect().'-Лапухов');
    }
    public function testGenDetect473()
    {
        $this->object->setSecondName('Ларин');
        $this->assertEquals('1-Ларин', $this->object->genderAutoDetect().'-Ларин');
    }
    public function testGenDetect474()
    {
        $this->object->setSecondName('Ларионов');
        $this->assertEquals('1-Ларионов', $this->object->genderAutoDetect().'-Ларионов');
    }
    public function testGenDetect475()
    {
        $this->object->setSecondName('Ласкутин');
        $this->assertEquals('1-Ласкутин', $this->object->genderAutoDetect().'-Ласкутин');
    }
    public function testGenDetect476()
    {
        $this->object->setSecondName('Лачинов');
        $this->assertEquals('1-Лачинов', $this->object->genderAutoDetect().'-Лачинов');
    }
    public function testGenDetect477()
    {
        $this->object->setSecondName('Лачков');
        $this->assertEquals('1-Лачков', $this->object->genderAutoDetect().'-Лачков');
    }
    public function testGenDetect478()
    {
        $this->object->setSecondName('Лебедев');
        $this->assertEquals('1-Лебедев', $this->object->genderAutoDetect().'-Лебедев');
    }
    public function testGenDetect479()
    {
        $this->object->setSecondName('Лебединский');
        $this->assertEquals('1-Лебединский', $this->object->genderAutoDetect().'-Лебединский');
    }
    public function testGenDetect480()
    {
        $this->object->setSecondName('Лебединцев');
        $this->assertEquals('1-Лебединцев', $this->object->genderAutoDetect().'-Лебединцев');
    }
    public function testGenDetect481()
    {
        $this->object->setSecondName('Легкодимов');
        $this->assertEquals('1-Легкодимов', $this->object->genderAutoDetect().'-Легкодимов');
    }
    public function testGenDetect482()
    {
        $this->object->setSecondName('Леонов');
        $this->assertEquals('1-Леонов', $this->object->genderAutoDetect().'-Леонов');
    }
    public function testGenDetect483()
    {
        $this->object->setSecondName('Лепёхин');
        $this->assertEquals('1-Лепёхин', $this->object->genderAutoDetect().'-Лепёхин');
    }
    public function testGenDetect484()
    {
        $this->object->setSecondName('Лесков');
        $this->assertEquals('1-Лесков', $this->object->genderAutoDetect().'-Лесков');
    }
    public function testGenDetect485()
    {
        $this->object->setSecondName('Лесничий');
        $this->assertEquals('1-Лесничий', $this->object->genderAutoDetect().'-Лесничий');
    }
    public function testGenDetect486()
    {
        $this->object->setSecondName('Летов');
        $this->assertEquals('1-Летов', $this->object->genderAutoDetect().'-Летов');
    }
    public function testGenDetect487()
    {
        $this->object->setSecondName('Лещёв');
        $this->assertEquals('1-Лещёв', $this->object->genderAutoDetect().'-Лещёв');
    }
    public function testGenDetect488()
    {
        $this->object->setSecondName('Лилов');
        $this->assertEquals('1-Лилов', $this->object->genderAutoDetect().'-Лилов');
    }
    public function testGenDetect489()
    {
        $this->object->setSecondName('Липин');
        $this->assertEquals('1-Липин', $this->object->genderAutoDetect().'-Липин');
    }
    public function testGenDetect490()
    {
        $this->object->setSecondName('Лисицын');
        $this->assertEquals('1-Лисицын', $this->object->genderAutoDetect().'-Лисицын');
    }
    public function testGenDetect491()
    {
        $this->object->setSecondName('Лихачёв');
        $this->assertEquals('1-Лихачёв', $this->object->genderAutoDetect().'-Лихачёв');
    }
    public function testGenDetect492()
    {
        $this->object->setSecondName('Лобан');
        $this->assertEquals('1-Лобан', $this->object->genderAutoDetect().'-Лобан');
    }
    public function testGenDetect493()
    {
        $this->object->setSecondName('Лобанов');
        $this->assertEquals('1-Лобанов', $this->object->genderAutoDetect().'-Лобанов');
    }
    public function testGenDetect494()
    {
        $this->object->setSecondName('Лобов');
        $this->assertEquals('1-Лобов', $this->object->genderAutoDetect().'-Лобов');
    }
    public function testGenDetect495()
    {
        $this->object->setSecondName('Логинов');
        $this->assertEquals('1-Логинов', $this->object->genderAutoDetect().'-Логинов');
    }
    public function testGenDetect496()
    {
        $this->object->setSecondName('Логиновский');
        $this->assertEquals('1-Логиновский', $this->object->genderAutoDetect().'-Логиновский');
    }
    public function testGenDetect497()
    {
        $this->object->setSecondName('Локтев');
        $this->assertEquals('1-Локтев', $this->object->genderAutoDetect().'-Локтев');
    }
    public function testGenDetect498()
    {
        $this->object->setSecondName('Ломоносов');
        $this->assertEquals('1-Ломоносов', $this->object->genderAutoDetect().'-Ломоносов');
    }
    public function testGenDetect499()
    {
        $this->object->setSecondName('Ломтев');
        $this->assertEquals('1-Ломтев', $this->object->genderAutoDetect().'-Ломтев');
    }
    public function testGenDetect500()
    {
        $this->object->setSecondName('Лопатин');
        $this->assertEquals('1-Лопатин', $this->object->genderAutoDetect().'-Лопатин');
    }
    public function testGenDetect501()
    {
        $this->object->setSecondName('Лосев');
        $this->assertEquals('1-Лосев', $this->object->genderAutoDetect().'-Лосев');
    }
    public function testGenDetect502()
    {
        $this->object->setSecondName('Лосевский');
        $this->assertEquals('1-Лосевский', $this->object->genderAutoDetect().'-Лосевский');
    }
    public function testGenDetect503()
    {
        $this->object->setSecondName('Лоскутников');
        $this->assertEquals('1-Лоскутников', $this->object->genderAutoDetect().'-Лоскутников');
    }
    public function testGenDetect504()
    {
        $this->object->setSecondName('Лоскутов');
        $this->assertEquals('1-Лоскутов', $this->object->genderAutoDetect().'-Лоскутов');
    }
    public function testGenDetect505()
    {
        $this->object->setSecondName('Лужков');
        $this->assertEquals('1-Лужков', $this->object->genderAutoDetect().'-Лужков');
    }
    public function testGenDetect506()
    {
        $this->object->setSecondName('Лыткин');
        $this->assertEquals('1-Лыткин', $this->object->genderAutoDetect().'-Лыткин');
    }
    public function testGenDetect507()
    {
        $this->object->setSecondName('Любимов');
        $this->assertEquals('1-Любимов', $this->object->genderAutoDetect().'-Любимов');
    }
    public function testGenDetect508()
    {
        $this->object->setSecondName('Любов');
        $this->assertEquals('1-Любов', $this->object->genderAutoDetect().'-Любов');
    }
    public function testGenDetect509()
    {
        $this->object->setSecondName('Лягушкин');
        $this->assertEquals('1-Лягушкин', $this->object->genderAutoDetect().'-Лягушкин');
    }
    public function testGenDetect510()
    {
        $this->object->setSecondName('Лягушов');
        $this->assertEquals('1-Лягушов', $this->object->genderAutoDetect().'-Лягушов');
    }
    public function testGenDetect511()
    {
        $this->object->setSecondName('Лялюшкин');
        $this->assertEquals('1-Лялюшкин', $this->object->genderAutoDetect().'-Лялюшкин');
    }
    public function testGenDetect512()
    {
        $this->object->setSecondName('Лясин');
        $this->assertEquals('1-Лясин', $this->object->genderAutoDetect().'-Лясин');
    }
    public function testGenDetect513()
    {
        $this->object->setSecondName('Ляпин');
        $this->assertEquals('1-Ляпин', $this->object->genderAutoDetect().'-Ляпин');
    }
    public function testGenDetect514()
    {
        $this->object->setSecondName('Майсак');
        $this->assertEquals('1-Майсак', $this->object->genderAutoDetect().'-Майсак');
    }
    public function testGenDetect515()
    {
        $this->object->setSecondName('Макаров');
        $this->assertEquals('1-Макаров', $this->object->genderAutoDetect().'-Макаров');
    }
    public function testGenDetect516()
    {
        $this->object->setSecondName('Маклаков');
        $this->assertEquals('1-Маклаков', $this->object->genderAutoDetect().'-Маклаков');
    }
    public function testGenDetect517()
    {
        $this->object->setSecondName('Максимов');
        $this->assertEquals('1-Максимов', $this->object->genderAutoDetect().'-Максимов');
    }
    public function testGenDetect518()
    {
        $this->object->setSecondName('Максимушкин');
        $this->assertEquals('1-Максимушкин', $this->object->genderAutoDetect().'-Максимушкин');
    }
    public function testGenDetect519()
    {
        $this->object->setSecondName('Максудов');
        $this->assertEquals('1-Максудов', $this->object->genderAutoDetect().'-Максудов');
    }
    public function testGenDetect520()
    {
        $this->object->setSecondName('Малахов');
        $this->assertEquals('1-Малахов', $this->object->genderAutoDetect().'-Малахов');
    }
    public function testGenDetect521()
    {
        $this->object->setSecondName('Маликов');
        $this->assertEquals('1-Маликов', $this->object->genderAutoDetect().'-Маликов');
    }
    public function testGenDetect522()
    {
        $this->object->setSecondName('Малинин');
        $this->assertEquals('1-Малинин', $this->object->genderAutoDetect().'-Малинин');
    }
    public function testGenDetect523()
    {
        $this->object->setSecondName('Малышев');
        $this->assertEquals('1-Малышев', $this->object->genderAutoDetect().'-Малышев');
    }
    public function testGenDetect524()
    {
        $this->object->setSecondName('Малюгин');
        $this->assertEquals('1-Малюгин', $this->object->genderAutoDetect().'-Малюгин');
    }
    public function testGenDetect525()
    {
        $this->object->setSecondName('Малыхин');
        $this->assertEquals('1-Малыхин', $this->object->genderAutoDetect().'-Малыхин');
    }
    public function testGenDetect526()
    {
        $this->object->setSecondName('Мамонов');
        $this->assertEquals('1-Мамонов', $this->object->genderAutoDetect().'-Мамонов');
    }
    public function testGenDetect527()
    {
        $this->object->setSecondName('Манин');
        $this->assertEquals('1-Манин', $this->object->genderAutoDetect().'-Манин');
    }
    public function testGenDetect528()
    {
        $this->object->setSecondName('Маркин');
        $this->assertEquals('1-Маркин', $this->object->genderAutoDetect().'-Маркин');
    }
    public function testGenDetect529()
    {
        $this->object->setSecondName('Марков');
        $this->assertEquals('1-Марков', $this->object->genderAutoDetect().'-Марков');
    }
    public function testGenDetect530()
    {
        $this->object->setSecondName('Маслак');
        $this->assertEquals('1-Маслак', $this->object->genderAutoDetect().'-Маслак');
    }
    public function testGenDetect531()
    {
        $this->object->setSecondName('Маслов');
        $this->assertEquals('1-Маслов', $this->object->genderAutoDetect().'-Маслов');
    }
    public function testGenDetect532()
    {
        $this->object->setSecondName('Матвеев');
        $this->assertEquals('1-Матвеев', $this->object->genderAutoDetect().'-Матвеев');
    }
    public function testGenDetect533()
    {
        $this->object->setSecondName('Матвеева');
        $this->assertEquals('1-Матвеева', $this->object->genderAutoDetect().'-Матвеева');
    }
    public function testGenDetect534()
    {
        $this->object->setSecondName('Машарин');
        $this->assertEquals('1-Машарин', $this->object->genderAutoDetect().'-Машарин');
    }
    public function testGenDetect535()
    {
        $this->object->setSecondName('Машир');
        $this->assertEquals('1-Машир', $this->object->genderAutoDetect().'-Машир');
    }
    public function testGenDetect536()
    {
        $this->object->setSecondName('Медведев');
        $this->assertEquals('1-Медведев', $this->object->genderAutoDetect().'-Медведев');
    }
    public function testGenDetect537()
    {
        $this->object->setSecondName('Медников');
        $this->assertEquals('1-Медников', $this->object->genderAutoDetect().'-Медников');
    }
    public function testGenDetect538()
    {
        $this->object->setSecondName('Меледин');
        $this->assertEquals('1-Меледин', $this->object->genderAutoDetect().'-Меледин');
    }
    public function testGenDetect539()
    {
        $this->object->setSecondName('Мелехов');
        $this->assertEquals('1-Мелехов', $this->object->genderAutoDetect().'-Мелехов');
    }
    public function testGenDetect540()
    {
        $this->object->setSecondName('Меликов');
        $this->assertEquals('1-Меликов', $this->object->genderAutoDetect().'-Меликов');
    }
    public function testGenDetect541()
    {
        $this->object->setSecondName('Мельников');
        $this->assertEquals('1-Мельников', $this->object->genderAutoDetect().'-Мельников');
    }
    public function testGenDetect542()
    {
        $this->object->setSecondName('Меркушев');
        $this->assertEquals('1-Меркушев', $this->object->genderAutoDetect().'-Меркушев');
    }
    public function testGenDetect543()
    {
        $this->object->setSecondName('Мещеряков');
        $this->assertEquals('1-Мещеряков', $this->object->genderAutoDetect().'-Мещеряков');
    }
    public function testGenDetect544()
    {
        $this->object->setSecondName('Мигунов');
        $this->assertEquals('1-Мигунов', $this->object->genderAutoDetect().'-Мигунов');
    }
    public function testGenDetect545()
    {
        $this->object->setSecondName('Мизенов');
        $this->assertEquals('1-Мизенов', $this->object->genderAutoDetect().'-Мизенов');
    }
    public function testGenDetect546()
    {
        $this->object->setSecondName('Милехин');
        $this->assertEquals('1-Милехин', $this->object->genderAutoDetect().'-Милехин');
    }
    public function testGenDetect547()
    {
        $this->object->setSecondName('Милорадов');
        $this->assertEquals('1-Милорадов', $this->object->genderAutoDetect().'-Милорадов');
    }
    public function testGenDetect548()
    {
        $this->object->setSecondName('Милюков');
        $this->assertEquals('1-Милюков', $this->object->genderAutoDetect().'-Милюков');
    }
    public function testGenDetect549()
    {
        $this->object->setSecondName('Милютин');
        $this->assertEquals('1-Милютин', $this->object->genderAutoDetect().'-Милютин');
    }
    public function testGenDetect550()
    {
        $this->object->setSecondName('Минеев');
        $this->assertEquals('1-Минеев', $this->object->genderAutoDetect().'-Минеев');
    }
    public function testGenDetect551()
    {
        $this->object->setSecondName('Минин');
        $this->assertEquals('1-Минин', $this->object->genderAutoDetect().'-Минин');
    }
    public function testGenDetect552()
    {
        $this->object->setSecondName('Минкин');
        $this->assertEquals('1-Минкин', $this->object->genderAutoDetect().'-Минкин');
    }
    public function testGenDetect553()
    {
        $this->object->setSecondName('Миронов');
        $this->assertEquals('1-Миронов', $this->object->genderAutoDetect().'-Миронов');
    }
    public function testGenDetect554()
    {
        $this->object->setSecondName('Митин');
        $this->assertEquals('1-Митин', $this->object->genderAutoDetect().'-Митин');
    }
    public function testGenDetect555()
    {
        $this->object->setSecondName('Митрофанов');
        $this->assertEquals('1-Митрофанов', $this->object->genderAutoDetect().'-Митрофанов');
    }
    public function testGenDetect556()
    {
        $this->object->setSecondName('Михайлов');
        $this->assertEquals('1-Михайлов', $this->object->genderAutoDetect().'-Михайлов');
    }
    public function testGenDetect557()
    {
        $this->object->setSecondName('Михеев');
        $this->assertEquals('1-Михеев', $this->object->genderAutoDetect().'-Михеев');
    }
    public function testGenDetect558()
    {
        $this->object->setSecondName('Мишутин');
        $this->assertEquals('1-Мишутин', $this->object->genderAutoDetect().'-Мишутин');
    }
    public function testGenDetect559()
    {
        $this->object->setSecondName('Моисеев');
        $this->assertEquals('1-Моисеев', $this->object->genderAutoDetect().'-Моисеев');
    }
    public function testGenDetect560()
    {
        $this->object->setSecondName('Молчанов');
        $this->assertEquals('1-Молчанов', $this->object->genderAutoDetect().'-Молчанов');
    }
    public function testGenDetect561()
    {
        $this->object->setSecondName('Моренов');
        $this->assertEquals('1-Моренов', $this->object->genderAutoDetect().'-Моренов');
    }
    public function testGenDetect562()
    {
        $this->object->setSecondName('Морозов');
        $this->assertEquals('1-Морозов', $this->object->genderAutoDetect().'-Морозов');
    }
    public function testGenDetect563()
    {
        $this->object->setSecondName('Мосалев');
        $this->assertEquals('1-Мосалев', $this->object->genderAutoDetect().'-Мосалев');
    }
    public function testGenDetect564()
    {
        $this->object->setSecondName('Москвин');
        $this->assertEquals('1-Москвин', $this->object->genderAutoDetect().'-Москвин');
    }
    public function testGenDetect565()
    {
        $this->object->setSecondName('Муратов');
        $this->assertEquals('1-Муратов', $this->object->genderAutoDetect().'-Муратов');
    }
    public function testGenDetect566()
    {
        $this->object->setSecondName('Мухортов');
        $this->assertEquals('1-Мухортов', $this->object->genderAutoDetect().'-Мухортов');
    }
    public function testGenDetect567()
    {
        $this->object->setSecondName('Мягков');
        $this->assertEquals('1-Мягков', $this->object->genderAutoDetect().'-Мягков');
    }
    public function testGenDetect568()
    {
        $this->object->setSecondName('Мясников');
        $this->assertEquals('1-Мясников', $this->object->genderAutoDetect().'-Мясников');
    }
    public function testGenDetect569()
    {
        $this->object->setSecondName('Мятлев');
        $this->assertEquals('1-Мятлев', $this->object->genderAutoDetect().'-Мятлев');
    }
    public function testGenDetect570()
    {
        $this->object->setSecondName('Набатов');
        $this->assertEquals('1-Набатов', $this->object->genderAutoDetect().'-Набатов');
    }
    public function testGenDetect571()
    {
        $this->object->setSecondName('Нардин');
        $this->assertEquals('1-Нардин', $this->object->genderAutoDetect().'-Нардин');
    }
    public function testGenDetect572()
    {
        $this->object->setSecondName('Наумов');
        $this->assertEquals('1-Наумов', $this->object->genderAutoDetect().'-Наумов');
    }
    public function testGenDetect573()
    {
        $this->object->setSecondName('Невзоров');
        $this->assertEquals('1-Невзоров', $this->object->genderAutoDetect().'-Невзоров');
    }
    public function testGenDetect574()
    {
        $this->object->setSecondName('Неделяев');
        $this->assertEquals('1-Неделяев', $this->object->genderAutoDetect().'-Неделяев');
    }
    public function testGenDetect575()
    {
        $this->object->setSecondName('Нежданов');
        $this->assertEquals('1-Нежданов', $this->object->genderAutoDetect().'-Нежданов');
    }
    public function testGenDetect576()
    {
        $this->object->setSecondName('Ненашев');
        $this->assertEquals('1-Ненашев', $this->object->genderAutoDetect().'-Ненашев');
    }
    public function testGenDetect577()
    {
        $this->object->setSecondName('Нестеров');
        $this->assertEquals('1-Нестеров', $this->object->genderAutoDetect().'-Нестеров');
    }
    public function testGenDetect578()
    {
        $this->object->setSecondName('Нечаев');
        $this->assertEquals('1-Нечаев', $this->object->genderAutoDetect().'-Нечаев');
    }
    public function testGenDetect579()
    {
        $this->object->setSecondName('Никитин');
        $this->assertEquals('1-Никитин', $this->object->genderAutoDetect().'-Никитин');
    }
    public function testGenDetect580()
    {
        $this->object->setSecondName('Никифоров');
        $this->assertEquals('1-Никифоров', $this->object->genderAutoDetect().'-Никифоров');
    }
    public function testGenDetect581()
    {
        $this->object->setSecondName('Николаев');
        $this->assertEquals('1-Николаев', $this->object->genderAutoDetect().'-Николаев');
    }
    public function testGenDetect582()
    {
        $this->object->setSecondName('Никонов');
        $this->assertEquals('1-Никонов', $this->object->genderAutoDetect().'-Никонов');
    }
    public function testGenDetect583()
    {
        $this->object->setSecondName('Никулин');
        $this->assertEquals('1-Никулин', $this->object->genderAutoDetect().'-Никулин');
    }
    public function testGenDetect584()
    {
        $this->object->setSecondName('Некрасов');
        $this->assertEquals('1-Некрасов', $this->object->genderAutoDetect().'-Некрасов');
    }
    public function testGenDetect585()
    {
        $this->object->setSecondName('Новиков');
        $this->assertEquals('1-Новиков', $this->object->genderAutoDetect().'-Новиков');
    }
    public function testGenDetect586()
    {
        $this->object->setSecondName('Новосельцев');
        $this->assertEquals('1-Новосельцев', $this->object->genderAutoDetect().'-Новосельцев');
    }
    public function testGenDetect587()
    {
        $this->object->setSecondName('Носачёв');
        $this->assertEquals('1-Носачёв', $this->object->genderAutoDetect().'-Носачёв');
    }
    public function testGenDetect588()
    {
        $this->object->setSecondName('Носков');
        $this->assertEquals('1-Носков', $this->object->genderAutoDetect().'-Носков');
    }
    public function testGenDetect589()
    {
        $this->object->setSecondName('Носов');
        $this->assertEquals('1-Носов', $this->object->genderAutoDetect().'-Носов');
    }
    public function testGenDetect590()
    {
        $this->object->setSecondName('Оболенский');
        $this->assertEquals('1-Оболенский', $this->object->genderAutoDetect().'-Оболенский');
    }
    public function testGenDetect591()
    {
        $this->object->setSecondName('Оборин');
        $this->assertEquals('1-Оборин', $this->object->genderAutoDetect().'-Оборин');
    }
    public function testGenDetect592()
    {
        $this->object->setSecondName('Образцов');
        $this->assertEquals('1-Образцов', $this->object->genderAutoDetect().'-Образцов');
    }
    public function testGenDetect593()
    {
        $this->object->setSecondName('Обухов');
        $this->assertEquals('1-Обухов', $this->object->genderAutoDetect().'-Обухов');
    }
    public function testGenDetect594()
    {
        $this->object->setSecondName('Овечкин');
        $this->assertEquals('1-Овечкин', $this->object->genderAutoDetect().'-Овечкин');
    }
    public function testGenDetect595()
    {
        $this->object->setSecondName('Огородников');
        $this->assertEquals('1-Огородников', $this->object->genderAutoDetect().'-Огородников');
    }
    public function testGenDetect596()
    {
        $this->object->setSecondName('Огурцов');
        $this->assertEquals('1-Огурцов', $this->object->genderAutoDetect().'-Огурцов');
    }
    public function testGenDetect597()
    {
        $this->object->setSecondName('Озеров');
        $this->assertEquals('1-Озеров', $this->object->genderAutoDetect().'-Озеров');
    }
    public function testGenDetect598()
    {
        $this->object->setSecondName('Ольховский');
        $this->assertEquals('1-Ольховский', $this->object->genderAutoDetect().'-Ольховский');
    }
    public function testGenDetect599()
    {
        $this->object->setSecondName('Онегин');
        $this->assertEquals('1-Онегин', $this->object->genderAutoDetect().'-Онегин');
    }
    public function testGenDetect600()
    {
        $this->object->setSecondName('Опокин');
        $this->assertEquals('1-Опокин', $this->object->genderAutoDetect().'-Опокин');
    }
    public function testGenDetect601()
    {
        $this->object->setSecondName('Орлов');
        $this->assertEquals('1-Орлов', $this->object->genderAutoDetect().'-Орлов');
    }
    public function testGenDetect602()
    {
        $this->object->setSecondName('Осинцев');
        $this->assertEquals('1-Осинцев', $this->object->genderAutoDetect().'-Осинцев');
    }
    public function testGenDetect603()
    {
        $this->object->setSecondName('Остальцев');
        $this->assertEquals('1-Остальцев', $this->object->genderAutoDetect().'-Остальцев');
    }
    public function testGenDetect604()
    {
        $this->object->setSecondName('Остапюк');
        $this->assertEquals('1-Остапюк', $this->object->genderAutoDetect().'-Остапюк');
    }
    public function testGenDetect605()
    {
        $this->object->setSecondName('Островерхов');
        $this->assertEquals('1-Островерхов', $this->object->genderAutoDetect().'-Островерхов');
    }
    public function testGenDetect606()
    {
        $this->object->setSecondName('Островский');
        $this->assertEquals('1-Островский', $this->object->genderAutoDetect().'-Островский');
    }
    public function testGenDetect607()
    {
        $this->object->setSecondName('Павлов');
        $this->assertEquals('1-Павлов', $this->object->genderAutoDetect().'-Павлов');
    }
    public function testGenDetect608()
    {
        $this->object->setSecondName('Панарин');
        $this->assertEquals('1-Панарин', $this->object->genderAutoDetect().'-Панарин');
    }
    public function testGenDetect609()
    {
        $this->object->setSecondName('Панин');
        $this->assertEquals('1-Панин', $this->object->genderAutoDetect().'-Панин');
    }
    public function testGenDetect610()
    {
        $this->object->setSecondName('Панкин');
        $this->assertEquals('1-Панкин', $this->object->genderAutoDetect().'-Панкин');
    }
    public function testGenDetect611()
    {
        $this->object->setSecondName('Панков');
        $this->assertEquals('1-Панков', $this->object->genderAutoDetect().'-Панков');
    }
    public function testGenDetect612()
    {
        $this->object->setSecondName('Панфилов');
        $this->assertEquals('1-Панфилов', $this->object->genderAutoDetect().'-Панфилов');
    }
    public function testGenDetect613()
    {
        $this->object->setSecondName('Панькив');
        $this->assertEquals('1-Панькив', $this->object->genderAutoDetect().'-Панькив');
    }
    public function testGenDetect614()
    {
        $this->object->setSecondName('Папанов');
        $this->assertEquals('1-Папанов', $this->object->genderAutoDetect().'-Папанов');
    }
    public function testGenDetect615()
    {
        $this->object->setSecondName('Пахомов');
        $this->assertEquals('1-Пахомов', $this->object->genderAutoDetect().'-Пахомов');
    }
    public function testGenDetect616()
    {
        $this->object->setSecondName('Пенкин');
        $this->assertEquals('1-Пенкин', $this->object->genderAutoDetect().'-Пенкин');
    }
    public function testGenDetect617()
    {
        $this->object->setSecondName('Первак');
        $this->assertEquals('1-Первак', $this->object->genderAutoDetect().'-Первак');
    }
    public function testGenDetect618()
    {
        $this->object->setSecondName('Переверзев');
        $this->assertEquals('1-Переверзев', $this->object->genderAutoDetect().'-Переверзев');
    }
    public function testGenDetect619()
    {
        $this->object->setSecondName('Перевёртов');
        $this->assertEquals('1-Перевёртов', $this->object->genderAutoDetect().'-Перевёртов');
    }
    public function testGenDetect620()
    {
        $this->object->setSecondName('Пересторонин');
        $this->assertEquals('1-Пересторонин', $this->object->genderAutoDetect().'-Пересторонин');
    }
    public function testGenDetect621()
    {
        $this->object->setSecondName('Перехваткин');
        $this->assertEquals('1-Перехваткин', $this->object->genderAutoDetect().'-Перехваткин');
    }
    public function testGenDetect622()
    {
        $this->object->setSecondName('Перов');
        $this->assertEquals('1-Перов', $this->object->genderAutoDetect().'-Перов');
    }
    public function testGenDetect623()
    {
        $this->object->setSecondName('Перьмяков');
        $this->assertEquals('1-Перьмяков', $this->object->genderAutoDetect().'-Перьмяков');
    }
    public function testGenDetect624()
    {
        $this->object->setSecondName('Пестов');
        $this->assertEquals('1-Пестов', $this->object->genderAutoDetect().'-Пестов');
    }
    public function testGenDetect625()
    {
        $this->object->setSecondName('Петров');
        $this->assertEquals('1-Петров', $this->object->genderAutoDetect().'-Петров');
    }
    public function testGenDetect626()
    {
        $this->object->setSecondName('Петухов');
        $this->assertEquals('1-Петухов', $this->object->genderAutoDetect().'-Петухов');
    }
    public function testGenDetect627()
    {
        $this->object->setSecondName('Печеников');
        $this->assertEquals('1-Печеников', $this->object->genderAutoDetect().'-Печеников');
    }
    public function testGenDetect628()
    {
        $this->object->setSecondName('Пивоваров');
        $this->assertEquals('1-Пивоваров', $this->object->genderAutoDetect().'-Пивоваров');
    }
    public function testGenDetect629()
    {
        $this->object->setSecondName('Пирогов');
        $this->assertEquals('1-Пирогов', $this->object->genderAutoDetect().'-Пирогов');
    }
    public function testGenDetect630()
    {
        $this->object->setSecondName('Пирожков');
        $this->assertEquals('1-Пирожков', $this->object->genderAutoDetect().'-Пирожков');
    }
    public function testGenDetect631()
    {
        $this->object->setSecondName('Пичугин');
        $this->assertEquals('1-Пичугин', $this->object->genderAutoDetect().'-Пичугин');
    }
    public function testGenDetect632()
    {
        $this->object->setSecondName('Погодин');
        $this->assertEquals('1-Погодин', $this->object->genderAutoDetect().'-Погодин');
    }
    public function testGenDetect633()
    {
        $this->object->setSecondName('Погребнов');
        $this->assertEquals('1-Погребнов', $this->object->genderAutoDetect().'-Погребнов');
    }
    public function testGenDetect634()
    {
        $this->object->setSecondName('Подшивалов');
        $this->assertEquals('1-Подшивалов', $this->object->genderAutoDetect().'-Подшивалов');
    }
    public function testGenDetect635()
    {
        $this->object->setSecondName('Поздняков');
        $this->assertEquals('1-Поздняков', $this->object->genderAutoDetect().'-Поздняков');
    }
    public function testGenDetect636()
    {
        $this->object->setSecondName('Покровский');
        $this->assertEquals('1-Покровский', $this->object->genderAutoDetect().'-Покровский');
    }
    public function testGenDetect637()
    {
        $this->object->setSecondName('Поливанов');
        $this->assertEquals('1-Поливанов', $this->object->genderAutoDetect().'-Поливанов');
    }
    public function testGenDetect638()
    {
        $this->object->setSecondName('Полушин');
        $this->assertEquals('1-Полушин', $this->object->genderAutoDetect().'-Полушин');
    }
    public function testGenDetect639()
    {
        $this->object->setSecondName('Полищук');
        $this->assertEquals('1-Полищук', $this->object->genderAutoDetect().'-Полищук');
    }
    public function testGenDetect640()
    {
        $this->object->setSecondName('Полторак');
        $this->assertEquals('1-Полторак', $this->object->genderAutoDetect().'-Полторак');
    }
    public function testGenDetect641()
    {
        $this->object->setSecondName('Поляков');
        $this->assertEquals('1-Поляков', $this->object->genderAutoDetect().'-Поляков');
    }
    public function testGenDetect642()
    {
        $this->object->setSecondName('Поникаров');
        $this->assertEquals('1-Поникаров', $this->object->genderAutoDetect().'-Поникаров');
    }
    public function testGenDetect643()
    {
        $this->object->setSecondName('Пономарёв');
        $this->assertEquals('1-Пономарёв', $this->object->genderAutoDetect().'-Пономарёв');
    }
    public function testGenDetect644()
    {
        $this->object->setSecondName('Пончиков');
        $this->assertEquals('1-Пончиков', $this->object->genderAutoDetect().'-Пончиков');
    }
    public function testGenDetect645()
    {
        $this->object->setSecondName('Попов');
        $this->assertEquals('1-Попов', $this->object->genderAutoDetect().'-Попов');
    }
    public function testGenDetect646()
    {
        $this->object->setSecondName('Попырин');
        $this->assertEquals('1-Попырин', $this->object->genderAutoDetect().'-Попырин');
    }
    public function testGenDetect647()
    {
        $this->object->setSecondName('Посохов');
        $this->assertEquals('1-Посохов', $this->object->genderAutoDetect().'-Посохов');
    }
    public function testGenDetect648()
    {
        $this->object->setSecondName('Потапов');
        $this->assertEquals('1-Потапов', $this->object->genderAutoDetect().'-Потапов');
    }
    public function testGenDetect649()
    {
        $this->object->setSecondName('Потёмкин');
        $this->assertEquals('1-Потёмкин', $this->object->genderAutoDetect().'-Потёмкин');
    }
    public function testGenDetect650()
    {
        $this->object->setSecondName('Праздников');
        $this->assertEquals('1-Праздников', $this->object->genderAutoDetect().'-Праздников');
    }
    public function testGenDetect651()
    {
        $this->object->setSecondName('Примаков');
        $this->assertEquals('1-Примаков', $this->object->genderAutoDetect().'-Примаков');
    }
    public function testGenDetect652()
    {
        $this->object->setSecondName('Приходько');
        $this->assertEquals('1-Приходько', $this->object->genderAutoDetect().'-Приходько');
    }
    public function testGenDetect653()
    {
        $this->object->setSecondName('Проничев');
        $this->assertEquals('1-Проничев', $this->object->genderAutoDetect().'-Проничев');
    }
    public function testGenDetect654()
    {
        $this->object->setSecondName('Протасов');
        $this->assertEquals('1-Протасов', $this->object->genderAutoDetect().'-Протасов');
    }
    public function testGenDetect655()
    {
        $this->object->setSecondName('Прохоров');
        $this->assertEquals('1-Прохоров', $this->object->genderAutoDetect().'-Прохоров');
    }
    public function testGenDetect656()
    {
        $this->object->setSecondName('Пугачёв');
        $this->assertEquals('1-Пугачёв', $this->object->genderAutoDetect().'-Пугачёв');
    }
    public function testGenDetect657()
    {
        $this->object->setSecondName('Пугин');
        $this->assertEquals('1-Пугин', $this->object->genderAutoDetect().'-Пугин');
    }
    public function testGenDetect658()
    {
        $this->object->setSecondName('Пузанов');
        $this->assertEquals('1-Пузанов', $this->object->genderAutoDetect().'-Пузанов');
    }
    public function testGenDetect659()
    {
        $this->object->setSecondName('Путилин');
        $this->assertEquals('1-Путилин', $this->object->genderAutoDetect().'-Путилин');
    }
    public function testGenDetect660()
    {
        $this->object->setSecondName('Путин');
        $this->assertEquals('1-Путин', $this->object->genderAutoDetect().'-Путин');
    }
    public function testGenDetect661()
    {
        $this->object->setSecondName('Путятин');
        $this->assertEquals('1-Путятин', $this->object->genderAutoDetect().'-Путятин');
    }
    public function testGenDetect662()
    {
        $this->object->setSecondName('Пушкин');
        $this->assertEquals('1-Пушкин', $this->object->genderAutoDetect().'-Пушкин');
    }
    public function testGenDetect663()
    {
        $this->object->setSecondName('Пыжалов');
        $this->assertEquals('1-Пыжалов', $this->object->genderAutoDetect().'-Пыжалов');
    }
    public function testGenDetect664()
    {
        $this->object->setSecondName('Пырьев');
        $this->assertEquals('1-Пырьев', $this->object->genderAutoDetect().'-Пырьев');
    }
    public function testGenDetect665()
    {
        $this->object->setSecondName('Рабинович');
        $this->assertEquals('1-Рабинович', $this->object->genderAutoDetect().'-Рабинович');
    }
    public function testGenDetect666()
    {
        $this->object->setSecondName('Разин');
        $this->assertEquals('1-Разин', $this->object->genderAutoDetect().'-Разин');
    }
    public function testGenDetect667()
    {
        $this->object->setSecondName('Разуваев');
        $this->assertEquals('1-Разуваев', $this->object->genderAutoDetect().'-Разуваев');
    }
    public function testGenDetect668()
    {
        $this->object->setSecondName('Распопов');
        $this->assertEquals('1-Распопов', $this->object->genderAutoDetect().'-Распопов');
    }
    public function testGenDetect669()
    {
        $this->object->setSecondName('Распутин');
        $this->assertEquals('1-Распутин', $this->object->genderAutoDetect().'-Распутин');
    }
    public function testGenDetect670()
    {
        $this->object->setSecondName('Расторгуев');
        $this->assertEquals('1-Расторгуев', $this->object->genderAutoDetect().'-Расторгуев');
    }
    public function testGenDetect671()
    {
        $this->object->setSecondName('Ремизов');
        $this->assertEquals('1-Ремизов', $this->object->genderAutoDetect().'-Ремизов');
    }
    public function testGenDetect672()
    {
        $this->object->setSecondName('Репин');
        $this->assertEquals('1-Репин', $this->object->genderAutoDetect().'-Репин');
    }
    public function testGenDetect673()
    {
        $this->object->setSecondName('Решетилов');
        $this->assertEquals('1-Решетилов', $this->object->genderAutoDetect().'-Решетилов');
    }
    public function testGenDetect674()
    {
        $this->object->setSecondName('Решетников');
        $this->assertEquals('1-Решетников', $this->object->genderAutoDetect().'-Решетников');
    }
    public function testGenDetect675()
    {
        $this->object->setSecondName('Родзянко');
        $this->assertEquals('1-Родзянко', $this->object->genderAutoDetect().'-Родзянко');
    }
    public function testGenDetect676()
    {
        $this->object->setSecondName('Рогачёв');
        $this->assertEquals('1-Рогачёв', $this->object->genderAutoDetect().'-Рогачёв');
    }
    public function testGenDetect677()
    {
        $this->object->setSecondName('Рогов');
        $this->assertEquals('1-Рогов', $this->object->genderAutoDetect().'-Рогов');
    }
    public function testGenDetect678()
    {
        $this->object->setSecondName('Рогозин');
        $this->assertEquals('1-Рогозин', $this->object->genderAutoDetect().'-Рогозин');
    }
    public function testGenDetect679()
    {
        $this->object->setSecondName('Рожков');
        $this->assertEquals('1-Рожков', $this->object->genderAutoDetect().'-Рожков');
    }
    public function testGenDetect680()
    {
        $this->object->setSecondName('Рокоссовский');
        $this->assertEquals('1-Рокоссовский', $this->object->genderAutoDetect().'-Рокоссовский');
    }
    public function testGenDetect681()
    {
        $this->object->setSecondName('Романов');
        $this->assertEquals('1-Романов', $this->object->genderAutoDetect().'-Романов');
    }
    public function testGenDetect682()
    {
        $this->object->setSecondName('Ростов');
        $this->assertEquals('1-Ростов', $this->object->genderAutoDetect().'-Ростов');
    }
    public function testGenDetect683()
    {
        $this->object->setSecondName('Ростовцев');
        $this->assertEquals('1-Ростовцев', $this->object->genderAutoDetect().'-Ростовцев');
    }
    public function testGenDetect684()
    {
        $this->object->setSecondName('Рудавинa');
        $this->assertEquals('1-Рудавинa', $this->object->genderAutoDetect().'-Рудавинa');
    }
    public function testGenDetect685()
    {
        $this->object->setSecondName('Румянцев');
        $this->assertEquals('1-Румянцев', $this->object->genderAutoDetect().'-Румянцев');
    }
    public function testGenDetect686()
    {
        $this->object->setSecondName('Рунов');
        $this->assertEquals('1-Рунов', $this->object->genderAutoDetect().'-Рунов');
    }
    public function testGenDetect687()
    {
        $this->object->setSecondName('Русаков');
        $this->assertEquals('1-Русаков', $this->object->genderAutoDetect().'-Русаков');
    }
    public function testGenDetect688()
    {
        $this->object->setSecondName('Руских');
        $this->assertEquals('1-Руских', $this->object->genderAutoDetect().'-Руских');
    }
    public function testGenDetect689()
    {
        $this->object->setSecondName('Русских');
        $this->assertEquals('1-Русских', $this->object->genderAutoDetect().'-Русских');
    }
    public function testGenDetect690()
    {
        $this->object->setSecondName('Ручкин');
        $this->assertEquals('1-Ручкин', $this->object->genderAutoDetect().'-Ручкин');
    }
    public function testGenDetect691()
    {
        $this->object->setSecondName('Рыбалкин');
        $this->assertEquals('1-Рыбалкин', $this->object->genderAutoDetect().'-Рыбалкин');
    }
    public function testGenDetect692()
    {
        $this->object->setSecondName('Рыжанов');
        $this->assertEquals('1-Рыжанов', $this->object->genderAutoDetect().'-Рыжанов');
    }
    public function testGenDetect693()
    {
        $this->object->setSecondName('Рыжков');
        $this->assertEquals('1-Рыжков', $this->object->genderAutoDetect().'-Рыжков');
    }
    public function testGenDetect694()
    {
        $this->object->setSecondName('Рыжов');
        $this->assertEquals('1-Рыжов', $this->object->genderAutoDetect().'-Рыжов');
    }
    public function testGenDetect695()
    {
        $this->object->setSecondName('Рытин');
        $this->assertEquals('1-Рытин', $this->object->genderAutoDetect().'-Рытин');
    }
    public function testGenDetect696()
    {
        $this->object->setSecondName('Рыченков');
        $this->assertEquals('1-Рыченков', $this->object->genderAutoDetect().'-Рыченков');
    }
    public function testGenDetect697()
    {
        $this->object->setSecondName('Рябков');
        $this->assertEquals('1-Рябков', $this->object->genderAutoDetect().'-Рябков');
    }
    public function testGenDetect698()
    {
        $this->object->setSecondName('Рябов');
        $this->assertEquals('1-Рябов', $this->object->genderAutoDetect().'-Рябов');
    }
    public function testGenDetect699()
    {
        $this->object->setSecondName('Ряхин');
        $this->assertEquals('1-Ряхин', $this->object->genderAutoDetect().'-Ряхин');
    }
    public function testGenDetect700()
    {
        $this->object->setSecondName('Сабитов');
        $this->assertEquals('1-Сабитов', $this->object->genderAutoDetect().'-Сабитов');
    }
    public function testGenDetect701()
    {
        $this->object->setSecondName('Савасин');
        $this->assertEquals('1-Савасин', $this->object->genderAutoDetect().'-Савасин');
    }
    public function testGenDetect702()
    {
        $this->object->setSecondName('Савинков');
        $this->assertEquals('1-Савинков', $this->object->genderAutoDetect().'-Савинков');
    }
    public function testGenDetect703()
    {
        $this->object->setSecondName('Савенков');
        $this->assertEquals('1-Савенков', $this->object->genderAutoDetect().'-Савенков');
    }
    public function testGenDetect704()
    {
        $this->object->setSecondName('Саврасов');
        $this->assertEquals('1-Саврасов', $this->object->genderAutoDetect().'-Саврасов');
    }
    public function testGenDetect705()
    {
        $this->object->setSecondName('Садыков');
        $this->assertEquals('1-Садыков', $this->object->genderAutoDetect().'-Садыков');
    }
    public function testGenDetect706()
    {
        $this->object->setSecondName('Сазонов');
        $this->assertEquals('1-Сазонов', $this->object->genderAutoDetect().'-Сазонов');
    }
    public function testGenDetect707()
    {
        $this->object->setSecondName('Салко');
        $this->assertEquals('1-Салко', $this->object->genderAutoDetect().'-Салко');
    }
    public function testGenDetect708()
    {
        $this->object->setSecondName('Сальков');
        $this->assertEquals('1-Сальков', $this->object->genderAutoDetect().'-Сальков');
    }
    public function testGenDetect709()
    {
        $this->object->setSecondName('Сальников');
        $this->assertEquals('1-Сальников', $this->object->genderAutoDetect().'-Сальников');
    }
    public function testGenDetect710()
    {
        $this->object->setSecondName('Самойлов');
        $this->assertEquals('1-Самойлов', $this->object->genderAutoDetect().'-Самойлов');
    }
    public function testGenDetect711()
    {
        $this->object->setSecondName('Самохин');
        $this->assertEquals('1-Самохин', $this->object->genderAutoDetect().'-Самохин');
    }
    public function testGenDetect712()
    {
        $this->object->setSecondName('Самсонов');
        $this->assertEquals('1-Самсонов', $this->object->genderAutoDetect().'-Самсонов');
    }
    public function testGenDetect713()
    {
        $this->object->setSecondName('Санников');
        $this->assertEquals('1-Санников', $this->object->genderAutoDetect().'-Санников');
    }
    public function testGenDetect714()
    {
        $this->object->setSecondName('Сапогов');
        $this->assertEquals('1-Сапогов', $this->object->genderAutoDetect().'-Сапогов');
    }
    public function testGenDetect715()
    {
        $this->object->setSecondName('Сапожников');
        $this->assertEquals('1-Сапожников', $this->object->genderAutoDetect().'-Сапожников');
    }
    public function testGenDetect716()
    {
        $this->object->setSecondName('Сафиюлин');
        $this->assertEquals('1-Сафиюлин', $this->object->genderAutoDetect().'-Сафиюлин');
    }
    public function testGenDetect717()
    {
        $this->object->setSecondName('Сахаров');
        $this->assertEquals('1-Сахаров', $this->object->genderAutoDetect().'-Сахаров');
    }
    public function testGenDetect718()
    {
        $this->object->setSecondName('Свалов');
        $this->assertEquals('1-Свалов', $this->object->genderAutoDetect().'-Свалов');
    }
    public function testGenDetect719()
    {
        $this->object->setSecondName('Северинов');
        $this->assertEquals('1-Северинов', $this->object->genderAutoDetect().'-Северинов');
    }
    public function testGenDetect720()
    {
        $this->object->setSecondName('Севостьянов');
        $this->assertEquals('1-Севостьянов', $this->object->genderAutoDetect().'-Севостьянов');
    }
    public function testGenDetect721()
    {
        $this->object->setSecondName('Седельников');
        $this->assertEquals('1-Седельников', $this->object->genderAutoDetect().'-Седельников');
    }
    public function testGenDetect722()
    {
        $this->object->setSecondName('Седов');
        $this->assertEquals('1-Седов', $this->object->genderAutoDetect().'-Седов');
    }
    public function testGenDetect723()
    {
        $this->object->setSecondName('Селезнёв');
        $this->assertEquals('1-Селезнёв', $this->object->genderAutoDetect().'-Селезнёв');
    }
    public function testGenDetect724()
    {
        $this->object->setSecondName('Селиванов');
        $this->assertEquals('1-Селиванов', $this->object->genderAutoDetect().'-Селиванов');
    }
    public function testGenDetect725()
    {
        $this->object->setSecondName('Семёнов');
        $this->assertEquals('1-Семёнов', $this->object->genderAutoDetect().'-Семёнов');
    }
    public function testGenDetect726()
    {
        $this->object->setSecondName('Семичаевский');
        $this->assertEquals('1-Семичаевский', $this->object->genderAutoDetect().'-Семичаевский');
    }
    public function testGenDetect727()
    {
        $this->object->setSecondName('Сенькин');
        $this->assertEquals('1-Сенькин', $this->object->genderAutoDetect().'-Сенькин');
    }
    public function testGenDetect728()
    {
        $this->object->setSecondName('Серебров');
        $this->assertEquals('1-Серебров', $this->object->genderAutoDetect().'-Серебров');
    }
    public function testGenDetect729()
    {
        $this->object->setSecondName('Серебряков');
        $this->assertEquals('1-Серебряков', $this->object->genderAutoDetect().'-Серебряков');
    }
    public function testGenDetect730()
    {
        $this->object->setSecondName('Серёгин');
        $this->assertEquals('1-Серёгин', $this->object->genderAutoDetect().'-Серёгин');
    }
    public function testGenDetect731()
    {
        $this->object->setSecondName('Серов');
        $this->assertEquals('1-Серов', $this->object->genderAutoDetect().'-Серов');
    }
    public function testGenDetect732()
    {
        $this->object->setSecondName('Серпионов');
        $this->assertEquals('1-Серпионов', $this->object->genderAutoDetect().'-Серпионов');
    }
    public function testGenDetect733()
    {
        $this->object->setSecondName('Семянин');
        $this->assertEquals('1-Семянин', $this->object->genderAutoDetect().'-Семянин');
    }
    public function testGenDetect734()
    {
        $this->object->setSecondName('Сёмин');
        $this->assertEquals('1-Сёмин', $this->object->genderAutoDetect().'-Сёмин');
    }
    public function testGenDetect735()
    {
        $this->object->setSecondName('Серёгин');
        $this->assertEquals('1-Серёгин', $this->object->genderAutoDetect().'-Серёгин');
    }
    public function testGenDetect736()
    {
        $this->object->setSecondName('Сеченов');
        $this->assertEquals('1-Сеченов', $this->object->genderAutoDetect().'-Сеченов');
    }
    public function testGenDetect737()
    {
        $this->object->setSecondName('Сиваков');
        $this->assertEquals('1-Сиваков', $this->object->genderAutoDetect().'-Сиваков');
    }
    public function testGenDetect738()
    {
        $this->object->setSecondName('Сигаев');
        $this->assertEquals('1-Сигаев', $this->object->genderAutoDetect().'-Сигаев');
    }
    public function testGenDetect739()
    {
        $this->object->setSecondName('Сигачёв');
        $this->assertEquals('1-Сигачёв', $this->object->genderAutoDetect().'-Сигачёв');
    }
    public function testGenDetect740()
    {
        $this->object->setSecondName('Сидоров');
        $this->assertEquals('1-Сидоров', $this->object->genderAutoDetect().'-Сидоров');
    }
    public function testGenDetect741()
    {
        $this->object->setSecondName('Сизов');
        $this->assertEquals('1-Сизов', $this->object->genderAutoDetect().'-Сизов');
    }
    public function testGenDetect742()
    {
        $this->object->setSecondName('Сизый');
        $this->assertEquals('1-Сизый', $this->object->genderAutoDetect().'-Сизый');
    }
    public function testGenDetect743()
    {
        $this->object->setSecondName('Силиванов');
        $this->assertEquals('1-Силиванов', $this->object->genderAutoDetect().'-Силиванов');
    }
    public function testGenDetect744()
    {
        $this->object->setSecondName('Силин');
        $this->assertEquals('1-Силин', $this->object->genderAutoDetect().'-Силин');
    }
    public function testGenDetect745()
    {
        $this->object->setSecondName('Сильвестров');
        $this->assertEquals('1-Сильвестров', $this->object->genderAutoDetect().'-Сильвестров');
    }
    public function testGenDetect746()
    {
        $this->object->setSecondName('Силаев');
        $this->assertEquals('1-Силаев', $this->object->genderAutoDetect().'-Силаев');
    }
    public function testGenDetect747()
    {
        $this->object->setSecondName('Силиванов');
        $this->assertEquals('1-Силиванов', $this->object->genderAutoDetect().'-Силиванов');
    }
    public function testGenDetect748()
    {
        $this->object->setSecondName('Скворцов');
        $this->assertEquals('1-Скворцов', $this->object->genderAutoDetect().'-Скворцов');
    }
    public function testGenDetect749()
    {
        $this->object->setSecondName('Скрябин');
        $this->assertEquals('1-Скрябин', $this->object->genderAutoDetect().'-Скрябин');
    }
    public function testGenDetect750()
    {
        $this->object->setSecondName('Скоробогатов');
        $this->assertEquals('1-Скоробогатов', $this->object->genderAutoDetect().'-Скоробогатов');
    }
    public function testGenDetect751()
    {
        $this->object->setSecondName('Скороходов');
        $this->assertEquals('1-Скороходов', $this->object->genderAutoDetect().'-Скороходов');
    }
    public function testGenDetect752()
    {
        $this->object->setSecondName('Скуратов');
        $this->assertEquals('1-Скуратов', $this->object->genderAutoDetect().'-Скуратов');
    }
    public function testGenDetect753()
    {
        $this->object->setSecondName('Слобожанин');
        $this->assertEquals('1-Слобожанин', $this->object->genderAutoDetect().'-Слобожанин');
    }
    public function testGenDetect754()
    {
        $this->object->setSecondName('Случевский');
        $this->assertEquals('1-Случевский', $this->object->genderAutoDetect().'-Случевский');
    }
    public function testGenDetect755()
    {
        $this->object->setSecondName('Смирнитский');
        $this->assertEquals('1-Смирнитский', $this->object->genderAutoDetect().'-Смирнитский');
    }
    public function testGenDetect756()
    {
        $this->object->setSecondName('Смирнов');
        $this->assertEquals('1-Смирнов', $this->object->genderAutoDetect().'-Смирнов');
    }
    public function testGenDetect757()
    {
        $this->object->setSecondName('Сметанин');
        $this->assertEquals('1-Сметанин', $this->object->genderAutoDetect().'-Сметанин');
    }
    public function testGenDetect758()
    {
        $this->object->setSecondName('Смолин');
        $this->assertEquals('1-Смолин', $this->object->genderAutoDetect().'-Смолин');
    }
    public function testGenDetect759()
    {
        $this->object->setSecondName('Смолянинов');
        $this->assertEquals('1-Смолянинов', $this->object->genderAutoDetect().'-Смолянинов');
    }
    public function testGenDetect760()
    {
        $this->object->setSecondName('Снаткин');
        $this->assertEquals('1-Снаткин', $this->object->genderAutoDetect().'-Снаткин');
    }
    public function testGenDetect761()
    {
        $this->object->setSecondName('Снегирёв');
        $this->assertEquals('1-Снегирёв', $this->object->genderAutoDetect().'-Снегирёв');
    }
    public function testGenDetect762()
    {
        $this->object->setSecondName('Снетков');
        $this->assertEquals('1-Снетков', $this->object->genderAutoDetect().'-Снетков');
    }
    public function testGenDetect763()
    {
        $this->object->setSecondName('Соболев');
        $this->assertEquals('1-Соболев', $this->object->genderAutoDetect().'-Соболев');
    }
    public function testGenDetect764()
    {
        $this->object->setSecondName('Соболевский');
        $this->assertEquals('1-Соболевский', $this->object->genderAutoDetect().'-Соболевский');
    }
    public function testGenDetect765()
    {
        $this->object->setSecondName('Соколов');
        $this->assertEquals('1-Соколов', $this->object->genderAutoDetect().'-Соколов');
    }
    public function testGenDetect766()
    {
        $this->object->setSecondName('Солдатов');
        $this->assertEquals('1-Солдатов', $this->object->genderAutoDetect().'-Солдатов');
    }
    public function testGenDetect767()
    {
        $this->object->setSecondName('Соловьёв');
        $this->assertEquals('1-Соловьёв', $this->object->genderAutoDetect().'-Соловьёв');
    }
    public function testGenDetect768()
    {
        $this->object->setSecondName('Солодников');
        $this->assertEquals('1-Солодников', $this->object->genderAutoDetect().'-Солодников');
    }
    public function testGenDetect769()
    {
        $this->object->setSecondName('Соломин');
        $this->assertEquals('1-Соломин', $this->object->genderAutoDetect().'-Соломин');
    }
    public function testGenDetect770()
    {
        $this->object->setSecondName('Соломонов');
        $this->assertEquals('1-Соломонов', $this->object->genderAutoDetect().'-Соломонов');
    }
    public function testGenDetect771()
    {
        $this->object->setSecondName('Сопов');
        $this->assertEquals('1-Сопов', $this->object->genderAutoDetect().'-Сопов');
    }
    public function testGenDetect772()
    {
        $this->object->setSecondName('Сорокин');
        $this->assertEquals('1-Сорокин', $this->object->genderAutoDetect().'-Сорокин');
    }
    public function testGenDetect773()
    {
        $this->object->setSecondName('Спанов');
        $this->assertEquals('1-Спанов', $this->object->genderAutoDetect().'-Спанов');
    }
    public function testGenDetect774()
    {
        $this->object->setSecondName('Стариков');
        $this->assertEquals('1-Стариков', $this->object->genderAutoDetect().'-Стариков');
    }
    public function testGenDetect775()
    {
        $this->object->setSecondName('Староверов');
        $this->assertEquals('1-Староверов', $this->object->genderAutoDetect().'-Староверов');
    }
    public function testGenDetect776()
    {
        $this->object->setSecondName('Стеблев');
        $this->assertEquals('1-Стеблев', $this->object->genderAutoDetect().'-Стеблев');
    }
    public function testGenDetect777()
    {
        $this->object->setSecondName('Стегнов');
        $this->assertEquals('1-Стегнов', $this->object->genderAutoDetect().'-Стегнов');
    }
    public function testGenDetect778()
    {
        $this->object->setSecondName('Степанов');
        $this->assertEquals('1-Степанов', $this->object->genderAutoDetect().'-Степанов');
    }
    public function testGenDetect779()
    {
        $this->object->setSecondName('Степанков');
        $this->assertEquals('1-Степанков', $this->object->genderAutoDetect().'-Степанков');
    }
    public function testGenDetect780()
    {
        $this->object->setSecondName('Степашин');
        $this->assertEquals('1-Степашин', $this->object->genderAutoDetect().'-Степашин');
    }
    public function testGenDetect781()
    {
        $this->object->setSecondName('Стрелков');
        $this->assertEquals('1-Стрелков', $this->object->genderAutoDetect().'-Стрелков');
    }
    public function testGenDetect782()
    {
        $this->object->setSecondName('Стрекалов');
        $this->assertEquals('1-Стрекалов', $this->object->genderAutoDetect().'-Стрекалов');
    }
    public function testGenDetect783()
    {
        $this->object->setSecondName('Строганов');
        $this->assertEquals('1-Строганов', $this->object->genderAutoDetect().'-Строганов');
    }
    public function testGenDetect784()
    {
        $this->object->setSecondName('Субботин');
        $this->assertEquals('1-Субботин', $this->object->genderAutoDetect().'-Субботин');
    }
    public function testGenDetect785()
    {
        $this->object->setSecondName('Суботин');
        $this->assertEquals('1-Суботин', $this->object->genderAutoDetect().'-Суботин');
    }
    public function testGenDetect786()
    {
        $this->object->setSecondName('Суворин');
        $this->assertEquals('1-Суворин', $this->object->genderAutoDetect().'-Суворин');
    }
    public function testGenDetect787()
    {
        $this->object->setSecondName('Суворкин');
        $this->assertEquals('1-Суворкин', $this->object->genderAutoDetect().'-Суворкин');
    }
    public function testGenDetect788()
    {
        $this->object->setSecondName('Суворов');
        $this->assertEquals('1-Суворов', $this->object->genderAutoDetect().'-Суворов');
    }
    public function testGenDetect789()
    {
        $this->object->setSecondName('Сунгатулин');
        $this->assertEquals('1-Сунгатулин', $this->object->genderAutoDetect().'-Сунгатулин');
    }
    public function testGenDetect790()
    {
        $this->object->setSecondName('Сукачев');
        $this->assertEquals('1-Сукачев', $this->object->genderAutoDetect().'-Сукачев');
    }
    public function testGenDetect791()
    {
        $this->object->setSecondName('Суриков');
        $this->assertEquals('1-Суриков', $this->object->genderAutoDetect().'-Суриков');
    }
    public function testGenDetect792()
    {
        $this->object->setSecondName('Сусоев');
        $this->assertEquals('1-Сусоев', $this->object->genderAutoDetect().'-Сусоев');
    }
    public function testGenDetect793()
    {
        $this->object->setSecondName('Сутулин');
        $this->assertEquals('1-Сутулин', $this->object->genderAutoDetect().'-Сутулин');
    }
    public function testGenDetect794()
    {
        $this->object->setSecondName('Сухоруков');
        $this->assertEquals('1-Сухоруков', $this->object->genderAutoDetect().'-Сухоруков');
    }
    public function testGenDetect795()
    {
        $this->object->setSecondName('Сучков');
        $this->assertEquals('1-Сучков', $this->object->genderAutoDetect().'-Сучков');
    }
    public function testGenDetect796()
    {
        $this->object->setSecondName('Сысоев');
        $this->assertEquals('1-Сысоев', $this->object->genderAutoDetect().'-Сысоев');
    }
    public function testGenDetect797()
    {
        $this->object->setSecondName('Сытников');
        $this->assertEquals('1-Сытников', $this->object->genderAutoDetect().'-Сытников');
    }
    public function testGenDetect798()
    {
        $this->object->setSecondName('Сычёв');
        $this->assertEquals('1-Сычёв', $this->object->genderAutoDetect().'-Сычёв');
    }
    public function testGenDetect799()
    {
        $this->object->setSecondName('Сычкин');
        $this->assertEquals('1-Сычкин', $this->object->genderAutoDetect().'-Сычкин');
    }
    public function testGenDetect800()
    {
        $this->object->setSecondName('Сюкосев');
        $this->assertEquals('1-Сюкосев', $this->object->genderAutoDetect().'-Сюкосев');
    }
    public function testGenDetect801()
    {
        $this->object->setSecondName('Табаков');
        $this->assertEquals('1-Табаков', $this->object->genderAutoDetect().'-Табаков');
    }
    public function testGenDetect802()
    {
        $this->object->setSecondName('Табернакулов');
        $this->assertEquals('1-Табернакулов', $this->object->genderAutoDetect().'-Табернакулов');
    }
    public function testGenDetect803()
    {
        $this->object->setSecondName('Таланов');
        $this->assertEquals('1-Таланов', $this->object->genderAutoDetect().'-Таланов');
    }
    public function testGenDetect804()
    {
        $this->object->setSecondName('Талалихин');
        $this->assertEquals('1-Талалихин', $this->object->genderAutoDetect().'-Талалихин');
    }
    public function testGenDetect805()
    {
        $this->object->setSecondName('Танков');
        $this->assertEquals('1-Танков', $this->object->genderAutoDetect().'-Танков');
    }
    public function testGenDetect806()
    {
        $this->object->setSecondName('Тарасов');
        $this->assertEquals('1-Тарасов', $this->object->genderAutoDetect().'-Тарасов');
    }
    public function testGenDetect807()
    {
        $this->object->setSecondName('Татаров');
        $this->assertEquals('1-Татаров', $this->object->genderAutoDetect().'-Татаров');
    }
    public function testGenDetect808()
    {
        $this->object->setSecondName('Твардовский');
        $this->assertEquals('1-Твардовский', $this->object->genderAutoDetect().'-Твардовский');
    }
    public function testGenDetect809()
    {
        $this->object->setSecondName('Тёмкин');
        $this->assertEquals('1-Тёмкин', $this->object->genderAutoDetect().'-Тёмкин');
    }
    public function testGenDetect810()
    {
        $this->object->setSecondName('Теплов');
        $this->assertEquals('1-Теплов', $this->object->genderAutoDetect().'-Теплов');
    }
    public function testGenDetect811()
    {
        $this->object->setSecondName('Теребов');
        $this->assertEquals('1-Теребов', $this->object->genderAutoDetect().'-Теребов');
    }
    public function testGenDetect812()
    {
        $this->object->setSecondName('Тетерев');
        $this->assertEquals('1-Тетерев', $this->object->genderAutoDetect().'-Тетерев');
    }
    public function testGenDetect813()
    {
        $this->object->setSecondName('Типалов');
        $this->assertEquals('1-Типалов', $this->object->genderAutoDetect().'-Типалов');
    }
    public function testGenDetect814()
    {
        $this->object->setSecondName('Титов');
        $this->assertEquals('1-Титов', $this->object->genderAutoDetect().'-Титов');
    }
    public function testGenDetect815()
    {
        $this->object->setSecondName('Тихвинский');
        $this->assertEquals('1-Тихвинский', $this->object->genderAutoDetect().'-Тихвинский');
    }
    public function testGenDetect816()
    {
        $this->object->setSecondName('Тихомиров');
        $this->assertEquals('1-Тихомиров', $this->object->genderAutoDetect().'-Тихомиров');
    }
    public function testGenDetect817()
    {
        $this->object->setSecondName('Тихонов');
        $this->assertEquals('1-Тихонов', $this->object->genderAutoDetect().'-Тихонов');
    }
    public function testGenDetect818()
    {
        $this->object->setSecondName('Токарев');
        $this->assertEquals('1-Токарев', $this->object->genderAutoDetect().'-Токарев');
    }
    public function testGenDetect819()
    {
        $this->object->setSecondName('Токмаков');
        $this->assertEquals('1-Токмаков', $this->object->genderAutoDetect().'-Токмаков');
    }
    public function testGenDetect820()
    {
        $this->object->setSecondName('Толбанов');
        $this->assertEquals('1-Толбанов', $this->object->genderAutoDetect().'-Толбанов');
    }
    public function testGenDetect821()
    {
        $this->object->setSecondName('Толстобров');
        $this->assertEquals('1-Толстобров', $this->object->genderAutoDetect().'-Толстобров');
    }
    public function testGenDetect822()
    {
        $this->object->setSecondName('Толстокожев');
        $this->assertEquals('1-Толстокожев', $this->object->genderAutoDetect().'-Толстокожев');
    }
    public function testGenDetect823()
    {
        $this->object->setSecondName('Толстой');
        $this->assertEquals('1-Толстой', $this->object->genderAutoDetect().'-Толстой');
    }
    public function testGenDetect824()
    {
        $this->object->setSecondName('Топоров');
        $this->assertEquals('1-Топоров', $this->object->genderAutoDetect().'-Топоров');
    }
    public function testGenDetect825()
    {
        $this->object->setSecondName('Торопов');
        $this->assertEquals('1-Торопов', $this->object->genderAutoDetect().'-Торопов');
    }
    public function testGenDetect826()
    {
        $this->object->setSecondName('Торчинович');
        $this->assertEquals('1-Торчинович', $this->object->genderAutoDetect().'-Торчинович');
    }
    public function testGenDetect827()
    {
        $this->object->setSecondName('Травкин');
        $this->assertEquals('1-Травкин', $this->object->genderAutoDetect().'-Травкин');
    }
    public function testGenDetect828()
    {
        $this->object->setSecondName('Тредиаковский');
        $this->assertEquals('1-Тредиаковский', $this->object->genderAutoDetect().'-Тредиаковский');
    }
    public function testGenDetect829()
    {
        $this->object->setSecondName('Третьяков');
        $this->assertEquals('1-Третьяков', $this->object->genderAutoDetect().'-Третьяков');
    }
    public function testGenDetect830()
    {
        $this->object->setSecondName('Трифонов');
        $this->assertEquals('1-Трифонов', $this->object->genderAutoDetect().'-Трифонов');
    }
    public function testGenDetect831()
    {
        $this->object->setSecondName('Трофимов');
        $this->assertEquals('1-Трофимов', $this->object->genderAutoDetect().'-Трофимов');
    }
    public function testGenDetect832()
    {
        $this->object->setSecondName('Трусов');
        $this->assertEquals('1-Трусов', $this->object->genderAutoDetect().'-Трусов');
    }
    public function testGenDetect833()
    {
        $this->object->setSecondName('Трутнев');
        $this->assertEquals('1-Трутнев', $this->object->genderAutoDetect().'-Трутнев');
    }
    public function testGenDetect834()
    {
        $this->object->setSecondName('Труфанов');
        $this->assertEquals('1-Труфанов', $this->object->genderAutoDetect().'-Труфанов');
    }
    public function testGenDetect835()
    {
        $this->object->setSecondName('Трухин');
        $this->assertEquals('1-Трухин', $this->object->genderAutoDetect().'-Трухин');
    }
    public function testGenDetect836()
    {
        $this->object->setSecondName('Трындин');
        $this->assertEquals('1-Трындин', $this->object->genderAutoDetect().'-Трындин');
    }
    public function testGenDetect837()
    {
        $this->object->setSecondName('Туполев');
        $this->assertEquals('1-Туполев', $this->object->genderAutoDetect().'-Туполев');
    }
    public function testGenDetect838()
    {
        $this->object->setSecondName('Турбин');
        $this->assertEquals('1-Турбин', $this->object->genderAutoDetect().'-Турбин');
    }
    public function testGenDetect839()
    {
        $this->object->setSecondName('Тургенев');
        $this->assertEquals('1-Тургенев', $this->object->genderAutoDetect().'-Тургенев');
    }
    public function testGenDetect840()
    {
        $this->object->setSecondName('Туров');
        $this->assertEquals('1-Туров', $this->object->genderAutoDetect().'-Туров');
    }
    public function testGenDetect841()
    {
        $this->object->setSecondName('Турфанов');
        $this->assertEquals('1-Турфанов', $this->object->genderAutoDetect().'-Турфанов');
    }
    public function testGenDetect842()
    {
        $this->object->setSecondName('Тычкин');
        $this->assertEquals('1-Тычкин', $this->object->genderAutoDetect().'-Тычкин');
    }
    public function testGenDetect843()
    {
        $this->object->setSecondName('Тюшняков');
        $this->assertEquals('1-Тюшняков', $this->object->genderAutoDetect().'-Тюшняков');
    }
    public function testGenDetect844()
    {
        $this->object->setSecondName('Телицын');
        $this->assertEquals('1-Телицын', $this->object->genderAutoDetect().'-Телицын');
    }
    public function testGenDetect845()
    {
        $this->object->setSecondName('Тянников');
        $this->assertEquals('1-Тянников', $this->object->genderAutoDetect().'-Тянников');
    }
    public function testGenDetect846()
    {
        $this->object->setSecondName('Убейсобакин');
        $this->assertEquals('1-Убейсобакин', $this->object->genderAutoDetect().'-Убейсобакин');
    }
    public function testGenDetect847()
    {
        $this->object->setSecondName('Угольников');
        $this->assertEquals('1-Угольников', $this->object->genderAutoDetect().'-Угольников');
    }
    public function testGenDetect848()
    {
        $this->object->setSecondName('Ульянов');
        $this->assertEquals('1-Ульянов', $this->object->genderAutoDetect().'-Ульянов');
    }
    public function testGenDetect849()
    {
        $this->object->setSecondName('Ульяшин');
        $this->assertEquals('1-Ульяшин', $this->object->genderAutoDetect().'-Ульяшин');
    }
    public function testGenDetect850()
    {
        $this->object->setSecondName('Усатов');
        $this->assertEquals('1-Усатов', $this->object->genderAutoDetect().'-Усатов');
    }
    public function testGenDetect851()
    {
        $this->object->setSecondName('Усов');
        $this->assertEquals('1-Усов', $this->object->genderAutoDetect().'-Усов');
    }
    public function testGenDetect852()
    {
        $this->object->setSecondName('Устинов');
        $this->assertEquals('1-Устинов', $this->object->genderAutoDetect().'-Устинов');
    }
    public function testGenDetect853()
    {
        $this->object->setSecondName('Устюжанин');
        $this->assertEquals('1-Устюжанин', $this->object->genderAutoDetect().'-Устюжанин');
    }
    public function testGenDetect854()
    {
        $this->object->setSecondName('Утёсов');
        $this->assertEquals('1-Утёсов', $this->object->genderAutoDetect().'-Утёсов');
    }
    public function testGenDetect855()
    {
        $this->object->setSecondName('Ухов');
        $this->assertEquals('1-Ухов', $this->object->genderAutoDetect().'-Ухов');
    }
    public function testGenDetect856()
    {
        $this->object->setSecondName('Фанин');
        $this->assertEquals('1-Фанин', $this->object->genderAutoDetect().'-Фанин');
    }
    public function testGenDetect857()
    {
        $this->object->setSecondName('Фамусов');
        $this->assertEquals('1-Фамусов', $this->object->genderAutoDetect().'-Фамусов');
    }
    public function testGenDetect858()
    {
        $this->object->setSecondName('Федин');
        $this->assertEquals('1-Федин', $this->object->genderAutoDetect().'-Федин');
    }
    public function testGenDetect859()
    {
        $this->object->setSecondName('Федосов');
        $this->assertEquals('1-Федосов', $this->object->genderAutoDetect().'-Федосов');
    }
    public function testGenDetect860()
    {
        $this->object->setSecondName('Федотов');
        $this->assertEquals('1-Федотов', $this->object->genderAutoDetect().'-Федотов');
    }
    public function testGenDetect861()
    {
        $this->object->setSecondName('Федосеев');
        $this->assertEquals('1-Федосеев', $this->object->genderAutoDetect().'-Федосеев');
    }
    public function testGenDetect862()
    {
        $this->object->setSecondName('Федченков');
        $this->assertEquals('1-Федченков', $this->object->genderAutoDetect().'-Федченков');
    }
    public function testGenDetect863()
    {
        $this->object->setSecondName('Фёдоров');
        $this->assertEquals('1-Фёдоров', $this->object->genderAutoDetect().'-Фёдоров');
    }
    public function testGenDetect864()
    {
        $this->object->setSecondName('Федулов');
        $this->assertEquals('1-Федулов', $this->object->genderAutoDetect().'-Федулов');
    }
    public function testGenDetect865()
    {
        $this->object->setSecondName('Фетисов');
        $this->assertEquals('1-Фетисов', $this->object->genderAutoDetect().'-Фетисов');
    }
    public function testGenDetect866()
    {
        $this->object->setSecondName('Филатов');
        $this->assertEquals('1-Филатов', $this->object->genderAutoDetect().'-Филатов');
    }
    public function testGenDetect867()
    {
        $this->object->setSecondName('Филимонов');
        $this->assertEquals('1-Филимонов', $this->object->genderAutoDetect().'-Филимонов');
    }
    public function testGenDetect868()
    {
        $this->object->setSecondName('Филипов');
        $this->assertEquals('1-Филипов', $this->object->genderAutoDetect().'-Филипов');
    }
    public function testGenDetect869()
    {
        $this->object->setSecondName('Филиппов');
        $this->assertEquals('1-Филиппов', $this->object->genderAutoDetect().'-Филиппов');
    }
    public function testGenDetect870()
    {
        $this->object->setSecondName('Флёров');
        $this->assertEquals('1-Флёров', $this->object->genderAutoDetect().'-Флёров');
    }
    public function testGenDetect871()
    {
        $this->object->setSecondName('Фокин');
        $this->assertEquals('1-Фокин', $this->object->genderAutoDetect().'-Фокин');
    }
    public function testGenDetect872()
    {
        $this->object->setSecondName('Фомин');
        $this->assertEquals('1-Фомин', $this->object->genderAutoDetect().'-Фомин');
    }
    public function testGenDetect873()
    {
        $this->object->setSecondName('Фомичев');
        $this->assertEquals('1-Фомичев', $this->object->genderAutoDetect().'-Фомичев');
    }
    public function testGenDetect874()
    {
        $this->object->setSecondName('Фонвизин');
        $this->assertEquals('1-Фонвизин', $this->object->genderAutoDetect().'-Фонвизин');
    }
    public function testGenDetect875()
    {
        $this->object->setSecondName('Форопонов');
        $this->assertEquals('1-Форопонов', $this->object->genderAutoDetect().'-Форопонов');
    }
    public function testGenDetect876()
    {
        $this->object->setSecondName('Фирсов');
        $this->assertEquals('1-Фирсов', $this->object->genderAutoDetect().'-Фирсов');
    }
    public function testGenDetect877()
    {
        $this->object->setSecondName('Фролов');
        $this->assertEquals('1-Фролов', $this->object->genderAutoDetect().'-Фролов');
    }
    public function testGenDetect878()
    {
        $this->object->setSecondName('Францев');
        $this->assertEquals('1-Францев', $this->object->genderAutoDetect().'-Францев');
    }
    public function testGenDetect879()
    {
        $this->object->setSecondName('Фукин');
        $this->assertEquals('1-Фукин', $this->object->genderAutoDetect().'-Фукин');
    }
    public function testGenDetect880()
    {
        $this->object->setSecondName('Хабалов');
        $this->assertEquals('1-Хабалов', $this->object->genderAutoDetect().'-Хабалов');
    }
    public function testGenDetect881()
    {
        $this->object->setSecondName('Халтурин');
        $this->assertEquals('1-Халтурин', $this->object->genderAutoDetect().'-Халтурин');
    }
    public function testGenDetect882()
    {
        $this->object->setSecondName('Харитонов');
        $this->assertEquals('1-Харитонов', $this->object->genderAutoDetect().'-Харитонов');
    }
    public function testGenDetect883()
    {
        $this->object->setSecondName('Харламов');
        $this->assertEquals('1-Харламов', $this->object->genderAutoDetect().'-Харламов');
    }
    public function testGenDetect884()
    {
        $this->object->setSecondName('Хлебников');
        $this->assertEquals('1-Хлебников', $this->object->genderAutoDetect().'-Хлебников');
    }
    public function testGenDetect885()
    {
        $this->object->setSecondName('Хлопонин');
        $this->assertEquals('1-Хлопонин', $this->object->genderAutoDetect().'-Хлопонин');
    }
    public function testGenDetect886()
    {
        $this->object->setSecondName('Холодов');
        $this->assertEquals('1-Холодов', $this->object->genderAutoDetect().'-Холодов');
    }
    public function testGenDetect887()
    {
        $this->object->setSecondName('Хомколов');
        $this->assertEquals('1-Хомколов', $this->object->genderAutoDetect().'-Хомколов');
    }
    public function testGenDetect888()
    {
        $this->object->setSecondName('Храмов');
        $this->assertEquals('1-Храмов', $this->object->genderAutoDetect().'-Храмов');
    }
    public function testGenDetect889()
    {
        $this->object->setSecondName('Хромов');
        $this->assertEquals('1-Хромов', $this->object->genderAutoDetect().'-Хромов');
    }
    public function testGenDetect890()
    {
        $this->object->setSecondName('Худовеков');
        $this->assertEquals('1-Худовеков', $this->object->genderAutoDetect().'-Худовеков');
    }
    public function testGenDetect891()
    {
        $this->object->setSecondName('Хлебов');
        $this->assertEquals('1-Хлебов', $this->object->genderAutoDetect().'-Хлебов');
    }
    public function testGenDetect892()
    {
        $this->object->setSecondName('Хуртин');
        $this->assertEquals('1-Хуртин', $this->object->genderAutoDetect().'-Хуртин');
    }
    public function testGenDetect893()
    {
        $this->object->setSecondName('Хребтов');
        $this->assertEquals('1-Хребтов', $this->object->genderAutoDetect().'-Хребтов');
    }
    public function testGenDetect894()
    {
        $this->object->setSecondName('Худяков');
        $this->assertEquals('1-Худяков', $this->object->genderAutoDetect().'-Худяков');
    }
    public function testGenDetect895()
    {
        $this->object->setSecondName('Царицын');
        $this->assertEquals('1-Царицын', $this->object->genderAutoDetect().'-Царицын');
    }
    public function testGenDetect896()
    {
        $this->object->setSecondName('Цветаев');
        $this->assertEquals('1-Цветаев', $this->object->genderAutoDetect().'-Цветаев');
    }
    public function testGenDetect897()
    {
        $this->object->setSecondName('Цветков');
        $this->assertEquals('1-Цветков', $this->object->genderAutoDetect().'-Цветков');
    }
    public function testGenDetect898()
    {
        $this->object->setSecondName('Циолковский');
        $this->assertEquals('1-Циолковский', $this->object->genderAutoDetect().'-Циолковский');
    }
    public function testGenDetect899()
    {
        $this->object->setSecondName('Цитников');
        $this->assertEquals('1-Цитников', $this->object->genderAutoDetect().'-Цитников');
    }
    public function testGenDetect900()
    {
        $this->object->setSecondName('Цуканов');
        $this->assertEquals('1-Цуканов', $this->object->genderAutoDetect().'-Цуканов');
    }
    public function testGenDetect901()
    {
        $this->object->setSecondName('Чаадаев');
        $this->assertEquals('1-Чаадаев', $this->object->genderAutoDetect().'-Чаадаев');
    }
    public function testGenDetect902()
    {
        $this->object->setSecondName('Чадов');
        $this->assertEquals('1-Чадов', $this->object->genderAutoDetect().'-Чадов');
    }
    public function testGenDetect903()
    {
        $this->object->setSecondName('Чазов');
        $this->assertEquals('1-Чазов', $this->object->genderAutoDetect().'-Чазов');
    }
    public function testGenDetect904()
    {
        $this->object->setSecondName('Чалый');
        $this->assertEquals('1-Чалый', $this->object->genderAutoDetect().'-Чалый');
    }
    public function testGenDetect905()
    {
        $this->object->setSecondName('Чапаев');
        $this->assertEquals('1-Чапаев', $this->object->genderAutoDetect().'-Чапаев');
    }
    public function testGenDetect906()
    {
        $this->object->setSecondName('Чеботарёв');
        $this->assertEquals('1-Чеботарёв', $this->object->genderAutoDetect().'-Чеботарёв');
    }
    public function testGenDetect907()
    {
        $this->object->setSecondName('Чебыкин');
        $this->assertEquals('1-Чебыкин', $this->object->genderAutoDetect().'-Чебыкин');
    }
    public function testGenDetect908()
    {
        $this->object->setSecondName('Чежеков');
        $this->assertEquals('1-Чежеков', $this->object->genderAutoDetect().'-Чежеков');
    }
    public function testGenDetect909()
    {
        $this->object->setSecondName('Чекмарёв');
        $this->assertEquals('1-Чекмарёв', $this->object->genderAutoDetect().'-Чекмарёв');
    }
    public function testGenDetect910()
    {
        $this->object->setSecondName('Челомеев');
        $this->assertEquals('1-Челомеев', $this->object->genderAutoDetect().'-Челомеев');
    }
    public function testGenDetect911()
    {
        $this->object->setSecondName('Челомей');
        $this->assertEquals('1-Челомей', $this->object->genderAutoDetect().'-Челомей');
    }
    public function testGenDetect912()
    {
        $this->object->setSecondName('Челпанов');
        $this->assertEquals('1-Челпанов', $this->object->genderAutoDetect().'-Челпанов');
    }
    public function testGenDetect913()
    {
        $this->object->setSecondName('Чендев');
        $this->assertEquals('1-Чендев', $this->object->genderAutoDetect().'-Чендев');
    }
    public function testGenDetect914()
    {
        $this->object->setSecondName('Черенчиков');
        $this->assertEquals('1-Черенчиков', $this->object->genderAutoDetect().'-Черенчиков');
    }
    public function testGenDetect915()
    {
        $this->object->setSecondName('Черепанов');
        $this->assertEquals('1-Черепанов', $this->object->genderAutoDetect().'-Черепанов');
    }
    public function testGenDetect916()
    {
        $this->object->setSecondName('Черкашин');
        $this->assertEquals('1-Черкашин', $this->object->genderAutoDetect().'-Черкашин');
    }
    public function testGenDetect917()
    {
        $this->object->setSecondName('Чернов');
        $this->assertEquals('1-Чернов', $this->object->genderAutoDetect().'-Чернов');
    }
    public function testGenDetect918()
    {
        $this->object->setSecondName('Чернышёв');
        $this->assertEquals('1-Чернышёв', $this->object->genderAutoDetect().'-Чернышёв');
    }
    public function testGenDetect919()
    {
        $this->object->setSecondName('Чернаков');
        $this->assertEquals('1-Чернаков', $this->object->genderAutoDetect().'-Чернаков');
    }
    public function testGenDetect920()
    {
        $this->object->setSecondName('Черников');
        $this->assertEquals('1-Черников', $this->object->genderAutoDetect().'-Черников');
    }
    public function testGenDetect921()
    {
        $this->object->setSecondName('Чесноков');
        $this->assertEquals('1-Чесноков', $this->object->genderAutoDetect().'-Чесноков');
    }
    public function testGenDetect922()
    {
        $this->object->setSecondName('Чиграков');
        $this->assertEquals('1-Чиграков', $this->object->genderAutoDetect().'-Чиграков');
    }
    public function testGenDetect923()
    {
        $this->object->setSecondName('Чижиков');
        $this->assertEquals('1-Чижиков', $this->object->genderAutoDetect().'-Чижиков');
    }
    public function testGenDetect924()
    {
        $this->object->setSecondName('Чиркаш');
        $this->assertEquals('1-Чиркаш', $this->object->genderAutoDetect().'-Чиркаш');
    }
    public function testGenDetect925()
    {
        $this->object->setSecondName('Чистяков');
        $this->assertEquals('1-Чистяков', $this->object->genderAutoDetect().'-Чистяков');
    }
    public function testGenDetect926()
    {
        $this->object->setSecondName('Чичиков');
        $this->assertEquals('1-Чичиков', $this->object->genderAutoDetect().'-Чичиков');
    }
    public function testGenDetect927()
    {
        $this->object->setSecondName('Чичканов');
        $this->assertEquals('1-Чичканов', $this->object->genderAutoDetect().'-Чичканов');
    }
    public function testGenDetect928()
    {
        $this->object->setSecondName('Чкалов');
        $this->assertEquals('1-Чкалов', $this->object->genderAutoDetect().'-Чкалов');
    }
    public function testGenDetect929()
    {
        $this->object->setSecondName('Чмыхов');
        $this->assertEquals('1-Чмыхов', $this->object->genderAutoDetect().'-Чмыхов');
    }
    public function testGenDetect930()
    {
        $this->object->setSecondName('Чугунов');
        $this->assertEquals('1-Чугунов', $this->object->genderAutoDetect().'-Чугунов');
    }
    public function testGenDetect931()
    {
        $this->object->setSecondName('Чужинов');
        $this->assertEquals('1-Чужинов', $this->object->genderAutoDetect().'-Чужинов');
    }
    public function testGenDetect932()
    {
        $this->object->setSecondName('Чукчов');
        $this->assertEquals('1-Чукчов', $this->object->genderAutoDetect().'-Чукчов');
    }
    public function testGenDetect933()
    {
        $this->object->setSecondName('Чукреев');
        $this->assertEquals('1-Чукреев', $this->object->genderAutoDetect().'-Чукреев');
    }
    public function testGenDetect934()
    {
        $this->object->setSecondName('Чупов');
        $this->assertEquals('1-Чупов', $this->object->genderAutoDetect().'-Чупов');
    }
    public function testGenDetect935()
    {
        $this->object->setSecondName('Чуприн');
        $this->assertEquals('1-Чуприн', $this->object->genderAutoDetect().'-Чуприн');
    }
    public function testGenDetect936()
    {
        $this->object->setSecondName('Чупров');
        $this->assertEquals('1-Чупров', $this->object->genderAutoDetect().'-Чупров');
    }
    public function testGenDetect937()
    {
        $this->object->setSecondName('Чучанов');
        $this->assertEquals('1-Чучанов', $this->object->genderAutoDetect().'-Чучанов');
    }
    public function testGenDetect938()
    {
        $this->object->setSecondName('Чучумашев');
        $this->assertEquals('1-Чучумашев', $this->object->genderAutoDetect().'-Чучумашев');
    }
    public function testGenDetect939()
    {
        $this->object->setSecondName('Шабунин');
        $this->assertEquals('1-Шабунин', $this->object->genderAutoDetect().'-Шабунин');
    }
    public function testGenDetect940()
    {
        $this->object->setSecondName('Шакмаков');
        $this->assertEquals('1-Шакмаков', $this->object->genderAutoDetect().'-Шакмаков');
    }
    public function testGenDetect941()
    {
        $this->object->setSecondName('Шаляпин');
        $this->assertEquals('1-Шаляпин', $this->object->genderAutoDetect().'-Шаляпин');
    }
    public function testGenDetect942()
    {
        $this->object->setSecondName('Шаповалов');
        $this->assertEquals('1-Шаповалов', $this->object->genderAutoDetect().'-Шаповалов');
    }
    public function testGenDetect943()
    {
        $this->object->setSecondName('Шапошников');
        $this->assertEquals('1-Шапошников', $this->object->genderAutoDetect().'-Шапошников');
    }
    public function testGenDetect944()
    {
        $this->object->setSecondName('Шарапов');
        $this->assertEquals('1-Шарапов', $this->object->genderAutoDetect().'-Шарапов');
    }
    public function testGenDetect945()
    {
        $this->object->setSecondName('Шаров');
        $this->assertEquals('1-Шаров', $this->object->genderAutoDetect().'-Шаров');
    }
    public function testGenDetect946()
    {
        $this->object->setSecondName('Шаршин');
        $this->assertEquals('1-Шаршин', $this->object->genderAutoDetect().'-Шаршин');
    }
    public function testGenDetect947()
    {
        $this->object->setSecondName('Шашлов');
        $this->assertEquals('1-Шашлов', $this->object->genderAutoDetect().'-Шашлов');
    }
    public function testGenDetect948()
    {
        $this->object->setSecondName('Шведов');
        $this->assertEquals('1-Шведов', $this->object->genderAutoDetect().'-Шведов');
    }
    public function testGenDetect949()
    {
        $this->object->setSecondName('Шевелёк');
        $this->assertEquals('1-Шевелёк', $this->object->genderAutoDetect().'-Шевелёк');
    }
    public function testGenDetect950()
    {
        $this->object->setSecondName('Шеломов');
        $this->assertEquals('1-Шеломов', $this->object->genderAutoDetect().'-Шеломов');
    }
    public function testGenDetect951()
    {
        $this->object->setSecondName('Шепкин');
        $this->assertEquals('1-Шепкин', $this->object->genderAutoDetect().'-Шепкин');
    }
    public function testGenDetect952()
    {
        $this->object->setSecondName('Шеповалов');
        $this->assertEquals('1-Шеповалов', $this->object->genderAutoDetect().'-Шеповалов');
    }
    public function testGenDetect953()
    {
        $this->object->setSecondName('Шереметьев');
        $this->assertEquals('1-Шереметьев', $this->object->genderAutoDetect().'-Шереметьев');
    }
    public function testGenDetect954()
    {
        $this->object->setSecondName('Шерстов');
        $this->assertEquals('1-Шерстов', $this->object->genderAutoDetect().'-Шерстов');
    }
    public function testGenDetect955()
    {
        $this->object->setSecondName('Шикалов');
        $this->assertEquals('1-Шикалов', $this->object->genderAutoDetect().'-Шикалов');
    }
    public function testGenDetect956()
    {
        $this->object->setSecondName('Ширманов');
        $this->assertEquals('1-Ширманов', $this->object->genderAutoDetect().'-Ширманов');
    }
    public function testGenDetect957()
    {
        $this->object->setSecondName('Шихранов');
        $this->assertEquals('1-Шихранов', $this->object->genderAutoDetect().'-Шихранов');
    }
    public function testGenDetect958()
    {
        $this->object->setSecondName('Шишкин');
        $this->assertEquals('1-Шишкин', $this->object->genderAutoDetect().'-Шишкин');
    }
    public function testGenDetect959()
    {
        $this->object->setSecondName('Шишлов');
        $this->assertEquals('1-Шишлов', $this->object->genderAutoDetect().'-Шишлов');
    }
    public function testGenDetect960()
    {
        $this->object->setSecondName('Шишов');
        $this->assertEquals('1-Шишов', $this->object->genderAutoDetect().'-Шишов');
    }
    public function testGenDetect961()
    {
        $this->object->setSecondName('Шкуратов');
        $this->assertEquals('1-Шкуратов', $this->object->genderAutoDetect().'-Шкуратов');
    }
    public function testGenDetect962()
    {
        $this->object->setSecondName('Шлыков');
        $this->assertEquals('1-Шлыков', $this->object->genderAutoDetect().'-Шлыков');
    }
    public function testGenDetect963()
    {
        $this->object->setSecondName('Шмаков');
        $this->assertEquals('1-Шмаков', $this->object->genderAutoDetect().'-Шмаков');
    }
    public function testGenDetect964()
    {
        $this->object->setSecondName('Шмелев');
        $this->assertEquals('1-Шмелев', $this->object->genderAutoDetect().'-Шмелев');
    }
    public function testGenDetect965()
    {
        $this->object->setSecondName('Шубин');
        $this->assertEquals('1-Шубин', $this->object->genderAutoDetect().'-Шубин');
    }
    public function testGenDetect966()
    {
        $this->object->setSecondName('Шубкин');
        $this->assertEquals('1-Шубкин', $this->object->genderAutoDetect().'-Шубкин');
    }
    public function testGenDetect967()
    {
        $this->object->setSecondName('Шувалов');
        $this->assertEquals('1-Шувалов', $this->object->genderAutoDetect().'-Шувалов');
    }
    public function testGenDetect968()
    {
        $this->object->setSecondName('Шуйский');
        $this->assertEquals('1-Шуйский', $this->object->genderAutoDetect().'-Шуйский');
    }
    public function testGenDetect969()
    {
        $this->object->setSecondName('Шукшин');
        $this->assertEquals('1-Шукшин', $this->object->genderAutoDetect().'-Шукшин');
    }
    public function testGenDetect970()
    {
        $this->object->setSecondName('Шулёв');
        $this->assertEquals('1-Шулёв', $this->object->genderAutoDetect().'-Шулёв');
    }
    public function testGenDetect971()
    {
        $this->object->setSecondName('Шульдешов');
        $this->assertEquals('1-Шульдешов', $this->object->genderAutoDetect().'-Шульдешов');
    }
    public function testGenDetect972()
    {
        $this->object->setSecondName('Шульга');
        $this->assertEquals('1-Шульга', $this->object->genderAutoDetect().'-Шульга');
    }
    public function testGenDetect973()
    {
        $this->object->setSecondName('Шульгин');
        $this->assertEquals('1-Шульгин', $this->object->genderAutoDetect().'-Шульгин');
    }
    public function testGenDetect974()
    {
        $this->object->setSecondName('Шурупов');
        $this->assertEquals('1-Шурупов', $this->object->genderAutoDetect().'-Шурупов');
    }
    public function testGenDetect975()
    {
        $this->object->setSecondName('Шушалев');
        $this->assertEquals('1-Шушалев', $this->object->genderAutoDetect().'-Шушалев');
    }
    public function testGenDetect976()
    {
        $this->object->setSecondName('Шурша');
        $this->assertEquals('1-Шурша', $this->object->genderAutoDetect().'-Шурша');
    }
    public function testGenDetect977()
    {
        $this->object->setSecondName('Щавельский');
        $this->assertEquals('1-Щавельский', $this->object->genderAutoDetect().'-Щавельский');
    }
    public function testGenDetect978()
    {
        $this->object->setSecondName('Щегельский');
        $this->assertEquals('1-Щегельский', $this->object->genderAutoDetect().'-Щегельский');
    }
    public function testGenDetect979()
    {
        $this->object->setSecondName('Щеглов');
        $this->assertEquals('1-Щеглов', $this->object->genderAutoDetect().'-Щеглов');
    }
    public function testGenDetect980()
    {
        $this->object->setSecondName('Щеголев');
        $this->assertEquals('1-Щеголев', $this->object->genderAutoDetect().'-Щеголев');
    }
    public function testGenDetect981()
    {
        $this->object->setSecondName('Щеголихин');
        $this->assertEquals('1-Щеголихин', $this->object->genderAutoDetect().'-Щеголихин');
    }
    public function testGenDetect982()
    {
        $this->object->setSecondName('Щедрин');
        $this->assertEquals('1-Щедрин', $this->object->genderAutoDetect().'-Щедрин');
    }
    public function testGenDetect983()
    {
        $this->object->setSecondName('Щедров');
        $this->assertEquals('1-Щедров', $this->object->genderAutoDetect().'-Щедров');
    }
    public function testGenDetect984()
    {
        $this->object->setSecondName('Щекочихин');
        $this->assertEquals('1-Щекочихин', $this->object->genderAutoDetect().'-Щекочихин');
    }
    public function testGenDetect985()
    {
        $this->object->setSecondName('Щепкин');
        $this->assertEquals('1-Щепкин', $this->object->genderAutoDetect().'-Щепкин');
    }
    public function testGenDetect986()
    {
        $this->object->setSecondName('Щербаков');
        $this->assertEquals('1-Щербаков', $this->object->genderAutoDetect().'-Щербаков');
    }
    public function testGenDetect987()
    {
        $this->object->setSecondName('Щербатых');
        $this->assertEquals('1-Щербатых', $this->object->genderAutoDetect().'-Щербатых');
    }
    public function testGenDetect988()
    {
        $this->object->setSecondName('Щербина');
        $this->assertEquals('1-Щербина', $this->object->genderAutoDetect().'-Щербина');
    }
    public function testGenDetect989()
    {
        $this->object->setSecondName('Щетинин');
        $this->assertEquals('1-Щетинин', $this->object->genderAutoDetect().'-Щетинин');
    }
    public function testGenDetect990()
    {
        $this->object->setSecondName('Щеткин');
        $this->assertEquals('1-Щеткин', $this->object->genderAutoDetect().'-Щеткин');
    }
    public function testGenDetect991()
    {
        $this->object->setSecondName('Щукин');
        $this->assertEquals('1-Щукин', $this->object->genderAutoDetect().'-Щукин');
    }
    public function testGenDetect992()
    {
        $this->object->setSecondName('Энтин');
        $this->assertEquals('1-Энтин', $this->object->genderAutoDetect().'-Энтин');
    }
    public function testGenDetect993()
    {
        $this->object->setSecondName('Эсце');
        $this->assertEquals('1-Эсце', $this->object->genderAutoDetect().'-Эсце');
    }
    public function testGenDetect994()
    {
        $this->object->setSecondName('Ювелев');
        $this->assertEquals('1-Ювелев', $this->object->genderAutoDetect().'-Ювелев');
    }
    public function testGenDetect995()
    {
        $this->object->setSecondName('Юганцев');
        $this->assertEquals('1-Юганцев', $this->object->genderAutoDetect().'-Юганцев');
    }
    public function testGenDetect996()
    {
        $this->object->setSecondName('Югов');
        $this->assertEquals('1-Югов', $this->object->genderAutoDetect().'-Югов');
    }
    public function testGenDetect997()
    {
        $this->object->setSecondName('Юдашкин');
        $this->assertEquals('1-Юдашкин', $this->object->genderAutoDetect().'-Юдашкин');
    }
    public function testGenDetect998()
    {
        $this->object->setSecondName('Юдин');
        $this->assertEquals('1-Юдин', $this->object->genderAutoDetect().'-Юдин');
    }
    public function testGenDetect999()
    {
        $this->object->setSecondName('Юнкин');
        $this->assertEquals('1-Юнкин', $this->object->genderAutoDetect().'-Юнкин');
    }
    public function testGenDetect1000()
    {
        $this->object->setSecondName('Юрнаев');
        $this->assertEquals('1-Юрнаев', $this->object->genderAutoDetect().'-Юрнаев');
    }
    public function testGenDetect1001()
    {
        $this->object->setSecondName('Юрьев');
        $this->assertEquals('1-Юрьев', $this->object->genderAutoDetect().'-Юрьев');
    }
    public function testGenDetect1002()
    {
        $this->object->setSecondName('Юсупов');
        $this->assertEquals('1-Юсупов', $this->object->genderAutoDetect().'-Юсупов');
    }
    public function testGenDetect1003()
    {
        $this->object->setSecondName('Юферев');
        $this->assertEquals('1-Юферев', $this->object->genderAutoDetect().'-Юферев');
    }
    public function testGenDetect1004()
    {
        $this->object->setSecondName('Якимов');
        $this->assertEquals('1-Якимов', $this->object->genderAutoDetect().'-Якимов');
    }
    public function testGenDetect1005()
    {
        $this->object->setSecondName('Яковлев');
        $this->assertEquals('1-Яковлев', $this->object->genderAutoDetect().'-Яковлев');
    }
    public function testGenDetect1006()
    {
        $this->object->setSecondName('Якубов');
        $this->assertEquals('1-Якубов', $this->object->genderAutoDetect().'-Якубов');
    }
    public function testGenDetect1007()
    {
        $this->object->setSecondName('Якубович');
        $this->assertEquals('1-Якубович', $this->object->genderAutoDetect().'-Якубович');
    }
    public function testGenDetect1008()
    {
        $this->object->setSecondName('Якушев');
        $this->assertEquals('1-Якушев', $this->object->genderAutoDetect().'-Якушев');
    }
    public function testGenDetect1009()
    {
        $this->object->setSecondName('Янаев');
        $this->assertEquals('1-Янаев', $this->object->genderAutoDetect().'-Янаев');
    }
    public function testGenDetect1010()
    {
        $this->object->setSecondName('Янков');
        $this->assertEquals('1-Янков', $this->object->genderAutoDetect().'-Янков');
    }
    public function testGenDetect1011()
    {
        $this->object->setSecondName('Янковский');
        $this->assertEquals('1-Янковский', $this->object->genderAutoDetect().'-Янковский');
    }
    public function testGenDetect1012()
    {
        $this->object->setSecondName('Ярмольник');
        $this->assertEquals('1-Ярмольник', $this->object->genderAutoDetect().'-Ярмольник');
    }
    public function testGenDetect1013()
    {
        $this->object->setSecondName('Яромеев');
        $this->assertEquals('1-Яромеев', $this->object->genderAutoDetect().'-Яромеев');
    }
    public function testGenDetect1014()
    {
        $this->object->setSecondName('Ярцев');
        $this->assertEquals('1-Ярцев', $this->object->genderAutoDetect().'-Ярцев');
    }
    public function testGenDetect1015()
    {
        $this->object->setSecondName('Ясенев');
        $this->assertEquals('1-Ясенев', $this->object->genderAutoDetect().'-Ясенев');
    }
    public function testGenDetect1016()
    {
        $this->object->setSecondName('Яснеев');
        $this->assertEquals('1-Яснеев', $this->object->genderAutoDetect().'-Яснеев');
    }
    public function testGenDetect1017()
    {
        $this->object->setSecondName('Яшин');
        $this->assertEquals('1-Яшин', $this->object->genderAutoDetect().'-Яшин');
    }
    public function testGenDetect1018()
    {
        $this->object->setSecondName('Абакумова');
        $this->assertEquals('2-Абакумова', $this->object->genderAutoDetect().'-Абакумова');
    }
    public function testGenDetect1019()
    {
        $this->object->setSecondName('Абдулова');
        $this->assertEquals('2-Абдулова', $this->object->genderAutoDetect().'-Абдулова');
    }
    public function testGenDetect1020()
    {
        $this->object->setSecondName('Абрамова');
        $this->assertEquals('2-Абрамова', $this->object->genderAutoDetect().'-Абрамова');
    }
    public function testGenDetect1021()
    {
        $this->object->setSecondName('Авдеева');
        $this->assertEquals('2-Авдеева', $this->object->genderAutoDetect().'-Авдеева');
    }
    public function testGenDetect1022()
    {
        $this->object->setSecondName('Аверина');
        $this->assertEquals('2-Аверина', $this->object->genderAutoDetect().'-Аверина');
    }
    public function testGenDetect1023()
    {
        $this->object->setSecondName('Аверьянова');
        $this->assertEquals('2-Аверьянова', $this->object->genderAutoDetect().'-Аверьянова');
    }
    public function testGenDetect1024()
    {
        $this->object->setSecondName('Агапова');
        $this->assertEquals('2-Агапова', $this->object->genderAutoDetect().'-Агапова');
    }
    public function testGenDetect1025()
    {
        $this->object->setSecondName('Агафонова');
        $this->assertEquals('2-Агафонова', $this->object->genderAutoDetect().'-Агафонова');
    }
    public function testGenDetect1026()
    {
        $this->object->setSecondName('Агейкина');
        $this->assertEquals('2-Агейкина', $this->object->genderAutoDetect().'-Агейкина');
    }
    public function testGenDetect1027()
    {
        $this->object->setSecondName('Ажищенкова');
        $this->assertEquals('2-Ажищенкова', $this->object->genderAutoDetect().'-Ажищенкова');
    }
    public function testGenDetect1028()
    {
        $this->object->setSecondName('Аксакова');
        $this->assertEquals('2-Аксакова', $this->object->genderAutoDetect().'-Аксакова');
    }
    public function testGenDetect1029()
    {
        $this->object->setSecondName('Аксёнова');
        $this->assertEquals('2-Аксёнова', $this->object->genderAutoDetect().'-Аксёнова');
    }
    public function testGenDetect1030()
    {
        $this->object->setSecondName('Аксенчук');
        $this->assertEquals('2-Аксенчук', $this->object->genderAutoDetect().'-Аксенчук');
    }
    public function testGenDetect1031()
    {
        $this->object->setSecondName('Аленина');
        $this->assertEquals('2-Аленина', $this->object->genderAutoDetect().'-Аленина');
    }
    public function testGenDetect1032()
    {
        $this->object->setSecondName('Алиева');
        $this->assertEquals('2-Алиева', $this->object->genderAutoDetect().'-Алиева');
    }
    public function testGenDetect1033()
    {
        $this->object->setSecondName('Амалиева');
        $this->assertEquals('2-Амалиева', $this->object->genderAutoDetect().'-Амалиева');
    }
    public function testGenDetect1034()
    {
        $this->object->setSecondName('Амелина');
        $this->assertEquals('2-Амелина', $this->object->genderAutoDetect().'-Амелина');
    }
    public function testGenDetect1035()
    {
        $this->object->setSecondName('Аминаева');
        $this->assertEquals('2-Аминаева', $this->object->genderAutoDetect().'-Аминаева');
    }
    public function testGenDetect1036()
    {
        $this->object->setSecondName('Александрова');
        $this->assertEquals('2-Александрова', $this->object->genderAutoDetect().'-Александрова');
    }
    public function testGenDetect1037()
    {
        $this->object->setSecondName('Алексеева');
        $this->assertEquals('2-Алексеева', $this->object->genderAutoDetect().'-Алексеева');
    }
    public function testGenDetect1038()
    {
        $this->object->setSecondName('Алёхина');
        $this->assertEquals('2-Алёхина', $this->object->genderAutoDetect().'-Алёхина');
    }
    public function testGenDetect1039()
    {
        $this->object->setSecondName('Аллилуева');
        $this->assertEquals('2-Аллилуева', $this->object->genderAutoDetect().'-Аллилуева');
    }
    public function testGenDetect1040()
    {
        $this->object->setSecondName('Андреева');
        $this->assertEquals('2-Андреева', $this->object->genderAutoDetect().'-Андреева');
    }
    public function testGenDetect1041()
    {
        $this->object->setSecondName('Андреюшкина');
        $this->assertEquals('2-Андреюшкина', $this->object->genderAutoDetect().'-Андреюшкина');
    }
    public function testGenDetect1042()
    {
        $this->object->setSecondName('Андроникова');
        $this->assertEquals('2-Андроникова', $this->object->genderAutoDetect().'-Андроникова');
    }
    public function testGenDetect1043()
    {
        $this->object->setSecondName('Андропова');
        $this->assertEquals('2-Андропова', $this->object->genderAutoDetect().'-Андропова');
    }
    public function testGenDetect1044()
    {
        $this->object->setSecondName('Аниканова');
        $this->assertEquals('2-Аниканова', $this->object->genderAutoDetect().'-Аниканова');
    }
    public function testGenDetect1045()
    {
        $this->object->setSecondName('Анисимова');
        $this->assertEquals('2-Анисимова', $this->object->genderAutoDetect().'-Анисимова');
    }
    public function testGenDetect1046()
    {
        $this->object->setSecondName('Анишина');
        $this->assertEquals('2-Анишина', $this->object->genderAutoDetect().'-Анишина');
    }
    public function testGenDetect1047()
    {
        $this->object->setSecondName('Анникова');
        $this->assertEquals('2-Анникова', $this->object->genderAutoDetect().'-Анникова');
    }
    public function testGenDetect1048()
    {
        $this->object->setSecondName('Анохина');
        $this->assertEquals('2-Анохина', $this->object->genderAutoDetect().'-Анохина');
    }
    public function testGenDetect1049()
    {
        $this->object->setSecondName('Аношкина');
        $this->assertEquals('2-Аношкина', $this->object->genderAutoDetect().'-Аношкина');
    }
    public function testGenDetect1050()
    {
        $this->object->setSecondName('Антипова');
        $this->assertEquals('2-Антипова', $this->object->genderAutoDetect().'-Антипова');
    }
    public function testGenDetect1051()
    {
        $this->object->setSecondName('Антонова');
        $this->assertEquals('2-Антонова', $this->object->genderAutoDetect().'-Антонова');
    }
    public function testGenDetect1052()
    {
        $this->object->setSecondName('Артамонова');
        $this->assertEquals('2-Артамонова', $this->object->genderAutoDetect().'-Артамонова');
    }
    public function testGenDetect1053()
    {
        $this->object->setSecondName('Арефьева');
        $this->assertEquals('2-Арефьева', $this->object->genderAutoDetect().'-Арефьева');
    }
    public function testGenDetect1054()
    {
        $this->object->setSecondName('Аристархова');
        $this->assertEquals('2-Аристархова', $this->object->genderAutoDetect().'-Аристархова');
    }
    public function testGenDetect1055()
    {
        $this->object->setSecondName('Арсеньева');
        $this->assertEquals('2-Арсеньева', $this->object->genderAutoDetect().'-Арсеньева');
    }
    public function testGenDetect1056()
    {
        $this->object->setSecondName('Артёмова');
        $this->assertEquals('2-Артёмова', $this->object->genderAutoDetect().'-Артёмова');
    }
    public function testGenDetect1057()
    {
        $this->object->setSecondName('Асланова');
        $this->assertEquals('2-Асланова', $this->object->genderAutoDetect().'-Асланова');
    }
    public function testGenDetect1058()
    {
        $this->object->setSecondName('Аслаханова');
        $this->assertEquals('2-Аслаханова', $this->object->genderAutoDetect().'-Аслаханова');
    }
    public function testGenDetect1059()
    {
        $this->object->setSecondName('Астанкова');
        $this->assertEquals('2-Астанкова', $this->object->genderAutoDetect().'-Астанкова');
    }
    public function testGenDetect1060()
    {
        $this->object->setSecondName('Астафьева');
        $this->assertEquals('2-Астафьева', $this->object->genderAutoDetect().'-Астафьева');
    }
    public function testGenDetect1061()
    {
        $this->object->setSecondName('Астахова');
        $this->assertEquals('2-Астахова', $this->object->genderAutoDetect().'-Астахова');
    }
    public function testGenDetect1062()
    {
        $this->object->setSecondName('Афанасьева');
        $this->assertEquals('2-Афанасьева', $this->object->genderAutoDetect().'-Афанасьева');
    }
    public function testGenDetect1063()
    {
        $this->object->setSecondName('Афонина');
        $this->assertEquals('2-Афонина', $this->object->genderAutoDetect().'-Афонина');
    }
    public function testGenDetect1064()
    {
        $this->object->setSecondName('Аспидова');
        $this->assertEquals('2-Аспидова', $this->object->genderAutoDetect().'-Аспидова');
    }
    public function testGenDetect1065()
    {
        $this->object->setSecondName('Бабатьева');
        $this->assertEquals('2-Бабатьева', $this->object->genderAutoDetect().'-Бабатьева');
    }
    public function testGenDetect1066()
    {
        $this->object->setSecondName('Бабикова');
        $this->assertEquals('2-Бабикова', $this->object->genderAutoDetect().'-Бабикова');
    }
    public function testGenDetect1067()
    {
        $this->object->setSecondName('Бабичева');
        $this->assertEquals('2-Бабичева', $this->object->genderAutoDetect().'-Бабичева');
    }
    public function testGenDetect1068()
    {
        $this->object->setSecondName('Бабкина');
        $this->assertEquals('2-Бабкина', $this->object->genderAutoDetect().'-Бабкина');
    }
    public function testGenDetect1069()
    {
        $this->object->setSecondName('Бабурина');
        $this->assertEquals('2-Бабурина', $this->object->genderAutoDetect().'-Бабурина');
    }
    public function testGenDetect1070()
    {
        $this->object->setSecondName('Багрова');
        $this->assertEquals('2-Багрова', $this->object->genderAutoDetect().'-Багрова');
    }
    public function testGenDetect1071()
    {
        $this->object->setSecondName('Бажанова');
        $this->assertEquals('2-Бажанова', $this->object->genderAutoDetect().'-Бажанова');
    }
    public function testGenDetect1072()
    {
        $this->object->setSecondName('Баженова');
        $this->assertEquals('2-Баженова', $this->object->genderAutoDetect().'-Баженова');
    }
    public function testGenDetect1073()
    {
        $this->object->setSecondName('Базанова');
        $this->assertEquals('2-Базанова', $this->object->genderAutoDetect().'-Базанова');
    }
    public function testGenDetect1074()
    {
        $this->object->setSecondName('Базарова');
        $this->assertEquals('2-Базарова', $this->object->genderAutoDetect().'-Базарова');
    }
    public function testGenDetect1075()
    {
        $this->object->setSecondName('Балакина');
        $this->assertEquals('2-Балакина', $this->object->genderAutoDetect().'-Балакина');
    }
    public function testGenDetect1076()
    {
        $this->object->setSecondName('Балахнова');
        $this->assertEquals('2-Балахнова', $this->object->genderAutoDetect().'-Балахнова');
    }
    public function testGenDetect1077()
    {
        $this->object->setSecondName('Балашова');
        $this->assertEquals('2-Балашова', $this->object->genderAutoDetect().'-Балашова');
    }
    public function testGenDetect1078()
    {
        $this->object->setSecondName('Баранова');
        $this->assertEquals('2-Баранова', $this->object->genderAutoDetect().'-Баранова');
    }
    public function testGenDetect1079()
    {
        $this->object->setSecondName('Барболина');
        $this->assertEquals('2-Барболина', $this->object->genderAutoDetect().'-Барболина');
    }
    public function testGenDetect1080()
    {
        $this->object->setSecondName('Баренцева');
        $this->assertEquals('2-Баренцева', $this->object->genderAutoDetect().'-Баренцева');
    }
    public function testGenDetect1081()
    {
        $this->object->setSecondName('Баринова');
        $this->assertEquals('2-Баринова', $this->object->genderAutoDetect().'-Баринова');
    }
    public function testGenDetect1082()
    {
        $this->object->setSecondName('Баркова');
        $this->assertEquals('2-Баркова', $this->object->genderAutoDetect().'-Баркова');
    }
    public function testGenDetect1083()
    {
        $this->object->setSecondName('Барсукова');
        $this->assertEquals('2-Барсукова', $this->object->genderAutoDetect().'-Барсукова');
    }
    public function testGenDetect1084()
    {
        $this->object->setSecondName('Батрутдинова');
        $this->assertEquals('2-Батрутдинова', $this->object->genderAutoDetect().'-Батрутдинова');
    }
    public function testGenDetect1085()
    {
        $this->object->setSecondName('Безбородова');
        $this->assertEquals('2-Безбородова', $this->object->genderAutoDetect().'-Безбородова');
    }
    public function testGenDetect1086()
    {
        $this->object->setSecondName('Безродная');
        $this->assertEquals('2-Безродная', $this->object->genderAutoDetect().'-Безродная');
    }
    public function testGenDetect1087()
    {
        $this->object->setSecondName('Безрукова');
        $this->assertEquals('2-Безрукова', $this->object->genderAutoDetect().'-Безрукова');
    }
    public function testGenDetect1088()
    {
        $this->object->setSecondName('Безукладникова');
        $this->assertEquals('2-Безукладникова', $this->object->genderAutoDetect().'-Безукладникова');
    }
    public function testGenDetect1089()
    {
        $this->object->setSecondName('Беликова');
        $this->assertEquals('2-Беликова', $this->object->genderAutoDetect().'-Беликова');
    }
    public function testGenDetect1090()
    {
        $this->object->setSecondName('Белова');
        $this->assertEquals('2-Белова', $this->object->genderAutoDetect().'-Белова');
    }
    public function testGenDetect1091()
    {
        $this->object->setSecondName('Беломестнова');
        $this->assertEquals('2-Беломестнова', $this->object->genderAutoDetect().'-Беломестнова');
    }
    public function testGenDetect1092()
    {
        $this->object->setSecondName('Бендлина');
        $this->assertEquals('2-Бендлина', $this->object->genderAutoDetect().'-Бендлина');
    }
    public function testGenDetect1093()
    {
        $this->object->setSecondName('Бережной');
        $this->assertEquals('2-Бережной', $this->object->genderAutoDetect().'-Бережной');
    }
    public function testGenDetect1094()
    {
        $this->object->setSecondName('Белоусова');
        $this->assertEquals('2-Белоусова', $this->object->genderAutoDetect().'-Белоусова');
    }
    public function testGenDetect1095()
    {
        $this->object->setSecondName('Бершова');
        $this->assertEquals('2-Бершова', $this->object->genderAutoDetect().'-Бершова');
    }
    public function testGenDetect1096()
    {
        $this->object->setSecondName('Беспалова');
        $this->assertEquals('2-Беспалова', $this->object->genderAutoDetect().'-Беспалова');
    }
    public function testGenDetect1097()
    {
        $this->object->setSecondName('Бескрёстнова');
        $this->assertEquals('2-Бескрёстнова', $this->object->genderAutoDetect().'-Бескрёстнова');
    }
    public function testGenDetect1098()
    {
        $this->object->setSecondName('Бирюкова');
        $this->assertEquals('2-Бирюкова', $this->object->genderAutoDetect().'-Бирюкова');
    }
    public function testGenDetect1099()
    {
        $this->object->setSecondName('Блаженова');
        $this->assertEquals('2-Блаженова', $this->object->genderAutoDetect().'-Блаженова');
    }
    public function testGenDetect1100()
    {
        $this->object->setSecondName('Блатова');
        $this->assertEquals('2-Блатова', $this->object->genderAutoDetect().'-Блатова');
    }
    public function testGenDetect1101()
    {
        $this->object->setSecondName('Блинова');
        $this->assertEquals('2-Блинова', $this->object->genderAutoDetect().'-Блинова');
    }
    public function testGenDetect1102()
    {
        $this->object->setSecondName('Блохина');
        $this->assertEquals('2-Блохина', $this->object->genderAutoDetect().'-Блохина');
    }
    public function testGenDetect1103()
    {
        $this->object->setSecondName('Боброва');
        $this->assertEquals('2-Боброва', $this->object->genderAutoDetect().'-Боброва');
    }
    public function testGenDetect1104()
    {
        $this->object->setSecondName('Бобрикова');
        $this->assertEquals('2-Бобрикова', $this->object->genderAutoDetect().'-Бобрикова');
    }
    public function testGenDetect1105()
    {
        $this->object->setSecondName('Богатырёв');
        $this->assertEquals('2-Богатырёв', $this->object->genderAutoDetect().'-Богатырёв');
    }
    public function testGenDetect1106()
    {
        $this->object->setSecondName('Богданова');
        $this->assertEquals('2-Богданова', $this->object->genderAutoDetect().'-Богданова');
    }
    public function testGenDetect1107()
    {
        $this->object->setSecondName('Боголепова');
        $this->assertEquals('2-Боголепова', $this->object->genderAutoDetect().'-Боголепова');
    }
    public function testGenDetect1108()
    {
        $this->object->setSecondName('Боголюбова');
        $this->assertEquals('2-Боголюбова', $this->object->genderAutoDetect().'-Боголюбова');
    }
    public function testGenDetect1109()
    {
        $this->object->setSecondName('Богомазова');
        $this->assertEquals('2-Богомазова', $this->object->genderAutoDetect().'-Богомазова');
    }
    public function testGenDetect1110()
    {
        $this->object->setSecondName('Богомолова');
        $this->assertEquals('2-Богомолова', $this->object->genderAutoDetect().'-Богомолова');
    }
    public function testGenDetect1111()
    {
        $this->object->setSecondName('Богрова');
        $this->assertEquals('2-Богрова', $this->object->genderAutoDetect().'-Богрова');
    }
    public function testGenDetect1112()
    {
        $this->object->setSecondName('Бойкова');
        $this->assertEquals('2-Бойкова', $this->object->genderAutoDetect().'-Бойкова');
    }
    public function testGenDetect1113()
    {
        $this->object->setSecondName('Болотникова');
        $this->assertEquals('2-Болотникова', $this->object->genderAutoDetect().'-Болотникова');
    }
    public function testGenDetect1114()
    {
        $this->object->setSecondName('Болтоногова');
        $this->assertEquals('2-Болтоногова', $this->object->genderAutoDetect().'-Болтоногова');
    }
    public function testGenDetect1115()
    {
        $this->object->setSecondName('Большова');
        $this->assertEquals('2-Большова', $this->object->genderAutoDetect().'-Большова');
    }
    public function testGenDetect1116()
    {
        $this->object->setSecondName('Бореева');
        $this->assertEquals('2-Бореева', $this->object->genderAutoDetect().'-Бореева');
    }
    public function testGenDetect1117()
    {
        $this->object->setSecondName('Бортникова');
        $this->assertEquals('2-Бортникова', $this->object->genderAutoDetect().'-Бортникова');
    }
    public function testGenDetect1118()
    {
        $this->object->setSecondName('Борзилова');
        $this->assertEquals('2-Борзилова', $this->object->genderAutoDetect().'-Борзилова');
    }
    public function testGenDetect1119()
    {
        $this->object->setSecondName('Борцова');
        $this->assertEquals('2-Борцова', $this->object->genderAutoDetect().'-Борцова');
    }
    public function testGenDetect1120()
    {
        $this->object->setSecondName('Брагина');
        $this->assertEquals('2-Брагина', $this->object->genderAutoDetect().'-Брагина');
    }
    public function testGenDetect1121()
    {
        $this->object->setSecondName('Брежнева');
        $this->assertEquals('2-Брежнева', $this->object->genderAutoDetect().'-Брежнева');
    }
    public function testGenDetect1122()
    {
        $this->object->setSecondName('Бугакова');
        $this->assertEquals('2-Бугакова', $this->object->genderAutoDetect().'-Бугакова');
    }
    public function testGenDetect1123()
    {
        $this->object->setSecondName('Буданова');
        $this->assertEquals('2-Буданова', $this->object->genderAutoDetect().'-Буданова');
    }
    public function testGenDetect1124()
    {
        $this->object->setSecondName('Будникова');
        $this->assertEquals('2-Будникова', $this->object->genderAutoDetect().'-Будникова');
    }
    public function testGenDetect1125()
    {
        $this->object->setSecondName('Будылина');
        $this->assertEquals('2-Будылина', $this->object->genderAutoDetect().'-Будылина');
    }
    public function testGenDetect1126()
    {
        $this->object->setSecondName('Букина');
        $this->assertEquals('2-Букина', $this->object->genderAutoDetect().'-Букина');
    }
    public function testGenDetect1127()
    {
        $this->object->setSecondName('Букирь');
        $this->assertEquals('2-Букирь', $this->object->genderAutoDetect().'-Букирь');
    }
    public function testGenDetect1128()
    {
        $this->object->setSecondName('Буклина');
        $this->assertEquals('2-Буклина', $this->object->genderAutoDetect().'-Буклина');
    }
    public function testGenDetect1129()
    {
        $this->object->setSecondName('Булгакова');
        $this->assertEquals('2-Булгакова', $this->object->genderAutoDetect().'-Булгакова');
    }
    public function testGenDetect1130()
    {
        $this->object->setSecondName('Бунина');
        $this->assertEquals('2-Бунина', $this->object->genderAutoDetect().'-Бунина');
    }
    public function testGenDetect1131()
    {
        $this->object->setSecondName('Буркова');
        $this->assertEquals('2-Буркова', $this->object->genderAutoDetect().'-Буркова');
    }
    public function testGenDetect1132()
    {
        $this->object->setSecondName('Бурова');
        $this->assertEquals('2-Бурова', $this->object->genderAutoDetect().'-Бурова');
    }
    public function testGenDetect1133()
    {
        $this->object->setSecondName('Бурцова');
        $this->assertEquals('2-Бурцова', $this->object->genderAutoDetect().'-Бурцова');
    }
    public function testGenDetect1134()
    {
        $this->object->setSecondName('Бурякова');
        $this->assertEquals('2-Бурякова', $this->object->genderAutoDetect().'-Бурякова');
    }
    public function testGenDetect1135()
    {
        $this->object->setSecondName('Бутылина');
        $this->assertEquals('2-Бутылина', $this->object->genderAutoDetect().'-Бутылина');
    }
    public function testGenDetect1136()
    {
        $this->object->setSecondName('Былинкина');
        $this->assertEquals('2-Былинкина', $this->object->genderAutoDetect().'-Былинкина');
    }
    public function testGenDetect1137()
    {
        $this->object->setSecondName('Бычкова');
        $this->assertEquals('2-Бычкова', $this->object->genderAutoDetect().'-Бычкова');
    }
    public function testGenDetect1138()
    {
        $this->object->setSecondName('Вавилова');
        $this->assertEquals('2-Вавилова', $this->object->genderAutoDetect().'-Вавилова');
    }
    public function testGenDetect1139()
    {
        $this->object->setSecondName('Вагина');
        $this->assertEquals('2-Вагина', $this->object->genderAutoDetect().'-Вагина');
    }
    public function testGenDetect1140()
    {
        $this->object->setSecondName('Вазова');
        $this->assertEquals('2-Вазова', $this->object->genderAutoDetect().'-Вазова');
    }
    public function testGenDetect1141()
    {
        $this->object->setSecondName('Валевач');
        $this->assertEquals('2-Валевач', $this->object->genderAutoDetect().'-Валевач');
    }
    public function testGenDetect1142()
    {
        $this->object->setSecondName('Варенникова');
        $this->assertEquals('2-Варенникова', $this->object->genderAutoDetect().'-Варенникова');
    }
    public function testGenDetect1143()
    {
        $this->object->setSecondName('Васильева');
        $this->assertEquals('2-Васильева', $this->object->genderAutoDetect().'-Васильева');
    }
    public function testGenDetect1144()
    {
        $this->object->setSecondName('Васина');
        $this->assertEquals('2-Васина', $this->object->genderAutoDetect().'-Васина');
    }
    public function testGenDetect1145()
    {
        $this->object->setSecondName('Васнева');
        $this->assertEquals('2-Васнева', $this->object->genderAutoDetect().'-Васнева');
    }
    public function testGenDetect1146()
    {
        $this->object->setSecondName('Васнецова');
        $this->assertEquals('2-Васнецова', $this->object->genderAutoDetect().'-Васнецова');
    }
    public function testGenDetect1147()
    {
        $this->object->setSecondName('Вахрова');
        $this->assertEquals('2-Вахрова', $this->object->genderAutoDetect().'-Вахрова');
    }
    public function testGenDetect1148()
    {
        $this->object->setSecondName('Вахрушева');
        $this->assertEquals('2-Вахрушева', $this->object->genderAutoDetect().'-Вахрушева');
    }
    public function testGenDetect1149()
    {
        $this->object->setSecondName('Венедиктова');
        $this->assertEquals('2-Венедиктова', $this->object->genderAutoDetect().'-Венедиктова');
    }
    public function testGenDetect1150()
    {
        $this->object->setSecondName('Веденеева');
        $this->assertEquals('2-Веденеева', $this->object->genderAutoDetect().'-Веденеева');
    }
    public function testGenDetect1151()
    {
        $this->object->setSecondName('Веденина');
        $this->assertEquals('2-Веденина', $this->object->genderAutoDetect().'-Веденина');
    }
    public function testGenDetect1152()
    {
        $this->object->setSecondName('Ведерникова');
        $this->assertEquals('2-Ведерникова', $this->object->genderAutoDetect().'-Ведерникова');
    }
    public function testGenDetect1153()
    {
        $this->object->setSecondName('Вергунова');
        $this->assertEquals('2-Вергунова', $this->object->genderAutoDetect().'-Вергунова');
    }
    public function testGenDetect1154()
    {
        $this->object->setSecondName('Верещагина');
        $this->assertEquals('2-Верещагина', $this->object->genderAutoDetect().'-Верещагина');
    }
    public function testGenDetect1155()
    {
        $this->object->setSecondName('Вершинина');
        $this->assertEquals('2-Вершинина', $this->object->genderAutoDetect().'-Вершинина');
    }
    public function testGenDetect1156()
    {
        $this->object->setSecondName('Веселова');
        $this->assertEquals('2-Веселова', $this->object->genderAutoDetect().'-Веселова');
    }
    public function testGenDetect1157()
    {
        $this->object->setSecondName('Викашева');
        $this->assertEquals('2-Викашева', $this->object->genderAutoDetect().'-Викашева');
    }
    public function testGenDetect1158()
    {
        $this->object->setSecondName('Виноградова');
        $this->assertEquals('2-Виноградова', $this->object->genderAutoDetect().'-Виноградова');
    }
    public function testGenDetect1159()
    {
        $this->object->setSecondName('Винокурова');
        $this->assertEquals('2-Винокурова', $this->object->genderAutoDetect().'-Винокурова');
    }
    public function testGenDetect1160()
    {
        $this->object->setSecondName('Витаева');
        $this->assertEquals('2-Витаева', $this->object->genderAutoDetect().'-Витаева');
    }
    public function testGenDetect1161()
    {
        $this->object->setSecondName('Витвинина');
        $this->assertEquals('2-Витвинина', $this->object->genderAutoDetect().'-Витвинина');
    }
    public function testGenDetect1162()
    {
        $this->object->setSecondName('Вицина');
        $this->assertEquals('2-Вицина', $this->object->genderAutoDetect().'-Вицина');
    }
    public function testGenDetect1163()
    {
        $this->object->setSecondName('Водоватова');
        $this->assertEquals('2-Водоватова', $this->object->genderAutoDetect().'-Водоватова');
    }
    public function testGenDetect1164()
    {
        $this->object->setSecondName('Воликова');
        $this->assertEquals('2-Воликова', $this->object->genderAutoDetect().'-Воликова');
    }
    public function testGenDetect1165()
    {
        $this->object->setSecondName('Волкова');
        $this->assertEquals('2-Волкова', $this->object->genderAutoDetect().'-Волкова');
    }
    public function testGenDetect1166()
    {
        $this->object->setSecondName('Вольвакова');
        $this->assertEquals('2-Вольвакова', $this->object->genderAutoDetect().'-Вольвакова');
    }
    public function testGenDetect1167()
    {
        $this->object->setSecondName('Воробьева');
        $this->assertEquals('2-Воробьева', $this->object->genderAutoDetect().'-Воробьева');
    }
    public function testGenDetect1168()
    {
        $this->object->setSecondName('Воронина');
        $this->assertEquals('2-Воронина', $this->object->genderAutoDetect().'-Воронина');
    }
    public function testGenDetect1169()
    {
        $this->object->setSecondName('Воронова');
        $this->assertEquals('2-Воронова', $this->object->genderAutoDetect().'-Воронова');
    }
    public function testGenDetect1170()
    {
        $this->object->setSecondName('Воронкова');
        $this->assertEquals('2-Воронкова', $this->object->genderAutoDetect().'-Воронкова');
    }
    public function testGenDetect1171()
    {
        $this->object->setSecondName('Воронцова');
        $this->assertEquals('2-Воронцова', $this->object->genderAutoDetect().'-Воронцова');
    }
    public function testGenDetect1172()
    {
        $this->object->setSecondName('Воскобойникова');
        $this->assertEquals('2-Воскобойникова', $this->object->genderAutoDetect().'-Воскобойникова');
    }
    public function testGenDetect1173()
    {
        $this->object->setSecondName('Вотякова');
        $this->assertEquals('2-Вотякова', $this->object->genderAutoDetect().'-Вотякова');
    }
    public function testGenDetect1174()
    {
        $this->object->setSecondName('Вырыпаева');
        $this->assertEquals('2-Вырыпаева', $this->object->genderAutoDetect().'-Вырыпаева');
    }
    public function testGenDetect1175()
    {
        $this->object->setSecondName('Гаврикова');
        $this->assertEquals('2-Гаврикова', $this->object->genderAutoDetect().'-Гаврикова');
    }
    public function testGenDetect1176()
    {
        $this->object->setSecondName('Гаврилова');
        $this->assertEquals('2-Гаврилова', $this->object->genderAutoDetect().'-Гаврилова');
    }
    public function testGenDetect1177()
    {
        $this->object->setSecondName('Гагарина');
        $this->assertEquals('2-Гагарина', $this->object->genderAutoDetect().'-Гагарина');
    }
    public function testGenDetect1178()
    {
        $this->object->setSecondName('Гаголина');
        $this->assertEquals('2-Гаголина', $this->object->genderAutoDetect().'-Гаголина');
    }
    public function testGenDetect1179()
    {
        $this->object->setSecondName('Галдина');
        $this->assertEquals('2-Галдина', $this->object->genderAutoDetect().'-Галдина');
    }
    public function testGenDetect1180()
    {
        $this->object->setSecondName('Галкина');
        $this->assertEquals('2-Галкина', $this->object->genderAutoDetect().'-Галкина');
    }
    public function testGenDetect1181()
    {
        $this->object->setSecondName('Галыгина');
        $this->assertEquals('2-Галыгина', $this->object->genderAutoDetect().'-Галыгина');
    }
    public function testGenDetect1182()
    {
        $this->object->setSecondName('Гарина');
        $this->assertEquals('2-Гарина', $this->object->genderAutoDetect().'-Гарина');
    }
    public function testGenDetect1183()
    {
        $this->object->setSecondName('Гачева');
        $this->assertEquals('2-Гачева', $this->object->genderAutoDetect().'-Гачева');
    }
    public function testGenDetect1184()
    {
        $this->object->setSecondName('Генкина');
        $this->assertEquals('2-Генкина', $this->object->genderAutoDetect().'-Генкина');
    }
    public function testGenDetect1185()
    {
        $this->object->setSecondName('Герасимова');
        $this->assertEquals('2-Герасимова', $this->object->genderAutoDetect().'-Герасимова');
    }
    public function testGenDetect1186()
    {
        $this->object->setSecondName('Гибазова');
        $this->assertEquals('2-Гибазова', $this->object->genderAutoDetect().'-Гибазова');
    }
    public function testGenDetect1187()
    {
        $this->object->setSecondName('Гилёва');
        $this->assertEquals('2-Гилёва', $this->object->genderAutoDetect().'-Гилёва');
    }
    public function testGenDetect1188()
    {
        $this->object->setSecondName('Глазкова');
        $this->assertEquals('2-Глазкова', $this->object->genderAutoDetect().'-Глазкова');
    }
    public function testGenDetect1189()
    {
        $this->object->setSecondName('Голованова');
        $this->assertEquals('2-Голованова', $this->object->genderAutoDetect().'-Голованова');
    }
    public function testGenDetect1190()
    {
        $this->object->setSecondName('Головаина');
        $this->assertEquals('2-Головаина', $this->object->genderAutoDetect().'-Головаина');
    }
    public function testGenDetect1191()
    {
        $this->object->setSecondName('Голодяева');
        $this->assertEquals('2-Голодяева', $this->object->genderAutoDetect().'-Голодяева');
    }
    public function testGenDetect1192()
    {
        $this->object->setSecondName('Голубева');
        $this->assertEquals('2-Голубева', $this->object->genderAutoDetect().'-Голубева');
    }
    public function testGenDetect1193()
    {
        $this->object->setSecondName('Голубова');
        $this->assertEquals('2-Голубова', $this->object->genderAutoDetect().'-Голубова');
    }
    public function testGenDetect1194()
    {
        $this->object->setSecondName('Голубцова');
        $this->assertEquals('2-Голубцова', $this->object->genderAutoDetect().'-Голубцова');
    }
    public function testGenDetect1195()
    {
        $this->object->setSecondName('Гончарова');
        $this->assertEquals('2-Гончарова', $this->object->genderAutoDetect().'-Гончарова');
    }
    public function testGenDetect1196()
    {
        $this->object->setSecondName('Горбачёв');
        $this->assertEquals('2-Горбачёв', $this->object->genderAutoDetect().'-Горбачёв');
    }
    public function testGenDetect1197()
    {
        $this->object->setSecondName('Горбунова');
        $this->assertEquals('2-Горбунова', $this->object->genderAutoDetect().'-Горбунова');
    }
    public function testGenDetect1198()
    {
        $this->object->setSecondName('Горбункова');
        $this->assertEquals('2-Горбункова', $this->object->genderAutoDetect().'-Горбункова');
    }
    public function testGenDetect1199()
    {
        $this->object->setSecondName('Горева');
        $this->assertEquals('2-Горева', $this->object->genderAutoDetect().'-Горева');
    }
    public function testGenDetect1200()
    {
        $this->object->setSecondName('Горелова');
        $this->assertEquals('2-Горелова', $this->object->genderAutoDetect().'-Горелова');
    }
    public function testGenDetect1201()
    {
        $this->object->setSecondName('Горемыкина');
        $this->assertEquals('2-Горемыкина', $this->object->genderAutoDetect().'-Горемыкина');
    }
    public function testGenDetect1202()
    {
        $this->object->setSecondName('Горюнова');
        $this->assertEquals('2-Горюнова', $this->object->genderAutoDetect().'-Горюнова');
    }
    public function testGenDetect1203()
    {
        $this->object->setSecondName('Грачёва');
        $this->assertEquals('2-Грачёва', $this->object->genderAutoDetect().'-Грачёва');
    }
    public function testGenDetect1204()
    {
        $this->object->setSecondName('Графова');
        $this->assertEquals('2-Графова', $this->object->genderAutoDetect().'-Графова');
    }
    public function testGenDetect1205()
    {
        $this->object->setSecondName('Гретченко');
        $this->assertEquals('2-Гретченко', $this->object->genderAutoDetect().'-Гретченко');
    }
    public function testGenDetect1206()
    {
        $this->object->setSecondName('Гречко');
        $this->assertEquals('2-Гречко', $this->object->genderAutoDetect().'-Гречко');
    }
    public function testGenDetect1207()
    {
        $this->object->setSecondName('Грешнева');
        $this->assertEquals('2-Грешнева', $this->object->genderAutoDetect().'-Грешнева');
    }
    public function testGenDetect1208()
    {
        $this->object->setSecondName('Грибова');
        $this->assertEquals('2-Грибова', $this->object->genderAutoDetect().'-Грибова');
    }
    public function testGenDetect1209()
    {
        $this->object->setSecondName('Грибоедова');
        $this->assertEquals('2-Грибоедова', $this->object->genderAutoDetect().'-Грибоедова');
    }
    public function testGenDetect1210()
    {
        $this->object->setSecondName('Григорьева');
        $this->assertEquals('2-Григорьева', $this->object->genderAutoDetect().'-Григорьева');
    }
    public function testGenDetect1211()
    {
        $this->object->setSecondName('Гринаина');
        $this->assertEquals('2-Гринаина', $this->object->genderAutoDetect().'-Гринаина');
    }
    public function testGenDetect1212()
    {
        $this->object->setSecondName('Гришина');
        $this->assertEquals('2-Гришина', $this->object->genderAutoDetect().'-Гришина');
    }
    public function testGenDetect1213()
    {
        $this->object->setSecondName('Громова');
        $this->assertEquals('2-Громова', $this->object->genderAutoDetect().'-Громова');
    }
    public function testGenDetect1214()
    {
        $this->object->setSecondName('Громыко');
        $this->assertEquals('2-Громыко', $this->object->genderAutoDetect().'-Громыко');
    }
    public function testGenDetect1215()
    {
        $this->object->setSecondName('Гулина');
        $this->assertEquals('2-Гулина', $this->object->genderAutoDetect().'-Гулина');
    }
    public function testGenDetect1216()
    {
        $this->object->setSecondName('Гурьянова');
        $this->assertEquals('2-Гурьянова', $this->object->genderAutoDetect().'-Гурьянова');
    }
    public function testGenDetect1217()
    {
        $this->object->setSecondName('Гусарова');
        $this->assertEquals('2-Гусарова', $this->object->genderAutoDetect().'-Гусарова');
    }
    public function testGenDetect1218()
    {
        $this->object->setSecondName('Гусева');
        $this->assertEquals('2-Гусева', $this->object->genderAutoDetect().'-Гусева');
    }
    public function testGenDetect1219()
    {
        $this->object->setSecondName('Гунина');
        $this->assertEquals('2-Гунина', $this->object->genderAutoDetect().'-Гунина');
    }
    public function testGenDetect1220()
    {
        $this->object->setSecondName('Гущина');
        $this->assertEquals('2-Гущина', $this->object->genderAutoDetect().'-Гущина');
    }
    public function testGenDetect1221()
    {
        $this->object->setSecondName('Головаха');
        $this->assertEquals('2-Головаха', $this->object->genderAutoDetect().'-Головаха');
    }
    public function testGenDetect1222()
    {
        $this->object->setSecondName('Дорофеева');
        $this->assertEquals('2-Дорофеева', $this->object->genderAutoDetect().'-Дорофеева');
    }
    public function testGenDetect1223()
    {
        $this->object->setSecondName('Давыдкина');
        $this->assertEquals('2-Давыдкина', $this->object->genderAutoDetect().'-Давыдкина');
    }
    public function testGenDetect1224()
    {
        $this->object->setSecondName('Данильцина');
        $this->assertEquals('2-Данильцина', $this->object->genderAutoDetect().'-Данильцина');
    }
    public function testGenDetect1225()
    {
        $this->object->setSecondName('Дворникова');
        $this->assertEquals('2-Дворникова', $this->object->genderAutoDetect().'-Дворникова');
    }
    public function testGenDetect1226()
    {
        $this->object->setSecondName('Деменок');
        $this->assertEquals('2-Деменок', $this->object->genderAutoDetect().'-Деменок');
    }
    public function testGenDetect1227()
    {
        $this->object->setSecondName('Дементьева');
        $this->assertEquals('2-Дементьева', $this->object->genderAutoDetect().'-Дементьева');
    }
    public function testGenDetect1228()
    {
        $this->object->setSecondName('Демидова');
        $this->assertEquals('2-Демидова', $this->object->genderAutoDetect().'-Демидова');
    }
    public function testGenDetect1229()
    {
        $this->object->setSecondName('Деникина');
        $this->assertEquals('2-Деникина', $this->object->genderAutoDetect().'-Деникина');
    }
    public function testGenDetect1230()
    {
        $this->object->setSecondName('Дёгтина');
        $this->assertEquals('2-Дёгтина', $this->object->genderAutoDetect().'-Дёгтина');
    }
    public function testGenDetect1231()
    {
        $this->object->setSecondName('Дегтярева');
        $this->assertEquals('2-Дегтярева', $this->object->genderAutoDetect().'-Дегтярева');
    }
    public function testGenDetect1232()
    {
        $this->object->setSecondName('Дежнёв');
        $this->assertEquals('2-Дежнёв', $this->object->genderAutoDetect().'-Дежнёв');
    }
    public function testGenDetect1233()
    {
        $this->object->setSecondName('Делова');
        $this->assertEquals('2-Делова', $this->object->genderAutoDetect().'-Делова');
    }
    public function testGenDetect1234()
    {
        $this->object->setSecondName('Дементьева');
        $this->assertEquals('2-Дементьева', $this->object->genderAutoDetect().'-Дементьева');
    }
    public function testGenDetect1235()
    {
        $this->object->setSecondName('Дёмина');
        $this->assertEquals('2-Дёмина', $this->object->genderAutoDetect().'-Дёмина');
    }
    public function testGenDetect1236()
    {
        $this->object->setSecondName('Державина');
        $this->assertEquals('2-Державина', $this->object->genderAutoDetect().'-Державина');
    }
    public function testGenDetect1237()
    {
        $this->object->setSecondName('Дернова');
        $this->assertEquals('2-Дернова', $this->object->genderAutoDetect().'-Дернова');
    }
    public function testGenDetect1238()
    {
        $this->object->setSecondName('Десяткова');
        $this->assertEquals('2-Десяткова', $this->object->genderAutoDetect().'-Десяткова');
    }
    public function testGenDetect1239()
    {
        $this->object->setSecondName('Дмитриева');
        $this->assertEquals('2-Дмитриева', $this->object->genderAutoDetect().'-Дмитриева');
    }
    public function testGenDetect1240()
    {
        $this->object->setSecondName('Добронравова');
        $this->assertEquals('2-Добронравова', $this->object->genderAutoDetect().'-Добронравова');
    }
    public function testGenDetect1241()
    {
        $this->object->setSecondName('Добрынина');
        $this->assertEquals('2-Добрынина', $this->object->genderAutoDetect().'-Добрынина');
    }
    public function testGenDetect1242()
    {
        $this->object->setSecondName('Долгорукова');
        $this->assertEquals('2-Долгорукова', $this->object->genderAutoDetect().'-Долгорукова');
    }
    public function testGenDetect1243()
    {
        $this->object->setSecondName('Должикова');
        $this->assertEquals('2-Должикова', $this->object->genderAutoDetect().'-Должикова');
    }
    public function testGenDetect1244()
    {
        $this->object->setSecondName('Домашева');
        $this->assertEquals('2-Домашева', $this->object->genderAutoDetect().'-Домашева');
    }
    public function testGenDetect1245()
    {
        $this->object->setSecondName('Достовалова');
        $this->assertEquals('2-Достовалова', $this->object->genderAutoDetect().'-Достовалова');
    }
    public function testGenDetect1246()
    {
        $this->object->setSecondName('Драгомирова');
        $this->assertEquals('2-Драгомирова', $this->object->genderAutoDetect().'-Драгомирова');
    }
    public function testGenDetect1247()
    {
        $this->object->setSecondName('Дресвянина');
        $this->assertEquals('2-Дресвянина', $this->object->genderAutoDetect().'-Дресвянина');
    }
    public function testGenDetect1248()
    {
        $this->object->setSecondName('Дрёмова');
        $this->assertEquals('2-Дрёмова', $this->object->genderAutoDetect().'-Дрёмова');
    }
    public function testGenDetect1249()
    {
        $this->object->setSecondName('Друганина');
        $this->assertEquals('2-Друганина', $this->object->genderAutoDetect().'-Друганина');
    }
    public function testGenDetect1250()
    {
        $this->object->setSecondName('Другова');
        $this->assertEquals('2-Другова', $this->object->genderAutoDetect().'-Другова');
    }
    public function testGenDetect1251()
    {
        $this->object->setSecondName('Дубинина');
        $this->assertEquals('2-Дубинина', $this->object->genderAutoDetect().'-Дубинина');
    }
    public function testGenDetect1252()
    {
        $this->object->setSecondName('Дубова');
        $this->assertEquals('2-Дубова', $this->object->genderAutoDetect().'-Дубова');
    }
    public function testGenDetect1253()
    {
        $this->object->setSecondName('Дубровская');
        $this->assertEquals('2-Дубровская', $this->object->genderAutoDetect().'-Дубровская');
    }
    public function testGenDetect1254()
    {
        $this->object->setSecondName('Дульцева');
        $this->assertEquals('2-Дульцева', $this->object->genderAutoDetect().'-Дульцева');
    }
    public function testGenDetect1255()
    {
        $this->object->setSecondName('Думановская');
        $this->assertEquals('2-Думановская', $this->object->genderAutoDetect().'-Думановская');
    }
    public function testGenDetect1256()
    {
        $this->object->setSecondName('Дурова');
        $this->assertEquals('2-Дурова', $this->object->genderAutoDetect().'-Дурова');
    }
    public function testGenDetect1257()
    {
        $this->object->setSecondName('Дятлова');
        $this->assertEquals('2-Дятлова', $this->object->genderAutoDetect().'-Дятлова');
    }
    public function testGenDetect1258()
    {
        $this->object->setSecondName('Евстигнеева');
        $this->assertEquals('2-Евстигнеева', $this->object->genderAutoDetect().'-Евстигнеева');
    }
    public function testGenDetect1259()
    {
        $this->object->setSecondName('Егорова');
        $this->assertEquals('2-Егорова', $this->object->genderAutoDetect().'-Егорова');
    }
    public function testGenDetect1260()
    {
        $this->object->setSecondName('Едемская');
        $this->assertEquals('2-Едемская', $this->object->genderAutoDetect().'-Едемская');
    }
    public function testGenDetect1261()
    {
        $this->object->setSecondName('Ежова');
        $this->assertEquals('2-Ежова', $this->object->genderAutoDetect().'-Ежова');
    }
    public function testGenDetect1262()
    {
        $this->object->setSecondName('Елагина');
        $this->assertEquals('2-Елагина', $this->object->genderAutoDetect().'-Елагина');
    }
    public function testGenDetect1263()
    {
        $this->object->setSecondName('Елизарова');
        $this->assertEquals('2-Елизарова', $this->object->genderAutoDetect().'-Елизарова');
    }
    public function testGenDetect1264()
    {
        $this->object->setSecondName('Елисеева');
        $this->assertEquals('2-Елисеева', $this->object->genderAutoDetect().'-Елисеева');
    }
    public function testGenDetect1265()
    {
        $this->object->setSecondName('Ельцина');
        $this->assertEquals('2-Ельцина', $this->object->genderAutoDetect().'-Ельцина');
    }
    public function testGenDetect1266()
    {
        $this->object->setSecondName('Ельцова');
        $this->assertEquals('2-Ельцова', $this->object->genderAutoDetect().'-Ельцова');
    }
    public function testGenDetect1267()
    {
        $this->object->setSecondName('Емельяненко');
        $this->assertEquals('2-Емельяненко', $this->object->genderAutoDetect().'-Емельяненко');
    }
    public function testGenDetect1268()
    {
        $this->object->setSecondName('Емельянова');
        $this->assertEquals('2-Емельянова', $this->object->genderAutoDetect().'-Емельянова');
    }
    public function testGenDetect1269()
    {
        $this->object->setSecondName('Енина');
        $this->assertEquals('2-Енина', $this->object->genderAutoDetect().'-Енина');
    }
    public function testGenDetect1270()
    {
        $this->object->setSecondName('Ерзова');
        $this->assertEquals('2-Ерзова', $this->object->genderAutoDetect().'-Ерзова');
    }
    public function testGenDetect1271()
    {
        $this->object->setSecondName('Ермакова');
        $this->assertEquals('2-Ермакова', $this->object->genderAutoDetect().'-Ермакова');
    }
    public function testGenDetect1272()
    {
        $this->object->setSecondName('Ермилова');
        $this->assertEquals('2-Ермилова', $this->object->genderAutoDetect().'-Ермилова');
    }
    public function testGenDetect1273()
    {
        $this->object->setSecondName('Еромеева');
        $this->assertEquals('2-Еромеева', $this->object->genderAutoDetect().'-Еромеева');
    }
    public function testGenDetect1274()
    {
        $this->object->setSecondName('Ерофеева');
        $this->assertEquals('2-Ерофеева', $this->object->genderAutoDetect().'-Ерофеева');
    }
    public function testGenDetect1275()
    {
        $this->object->setSecondName('Ершова');
        $this->assertEquals('2-Ершова', $this->object->genderAutoDetect().'-Ершова');
    }
    public function testGenDetect1276()
    {
        $this->object->setSecondName('Есипова');
        $this->assertEquals('2-Есипова', $this->object->genderAutoDetect().'-Есипова');
    }
    public function testGenDetect1277()
    {
        $this->object->setSecondName('Ефимова');
        $this->assertEquals('2-Ефимова', $this->object->genderAutoDetect().'-Ефимова');
    }
    public function testGenDetect1278()
    {
        $this->object->setSecondName('Ефремова');
        $this->assertEquals('2-Ефремова', $this->object->genderAutoDetect().'-Ефремова');
    }
    public function testGenDetect1279()
    {
        $this->object->setSecondName('Емелина');
        $this->assertEquals('2-Емелина', $this->object->genderAutoDetect().'-Емелина');
    }
    public function testGenDetect1280()
    {
        $this->object->setSecondName('Ерохина');
        $this->assertEquals('2-Ерохина', $this->object->genderAutoDetect().'-Ерохина');
    }
    public function testGenDetect1281()
    {
        $this->object->setSecondName('Ерёмина');
        $this->assertEquals('2-Ерёмина', $this->object->genderAutoDetect().'-Ерёмина');
    }
    public function testGenDetect1282()
    {
        $this->object->setSecondName('Ешеваская');
        $this->assertEquals('2-Ешеваская', $this->object->genderAutoDetect().'-Ешеваская');
    }
    public function testGenDetect1283()
    {
        $this->object->setSecondName('Жабина');
        $this->assertEquals('2-Жабина', $this->object->genderAutoDetect().'-Жабина');
    }
    public function testGenDetect1284()
    {
        $this->object->setSecondName('Жаркова');
        $this->assertEquals('2-Жаркова', $this->object->genderAutoDetect().'-Жаркова');
    }
    public function testGenDetect1285()
    {
        $this->object->setSecondName('Жарыхина');
        $this->assertEquals('2-Жарыхина', $this->object->genderAutoDetect().'-Жарыхина');
    }
    public function testGenDetect1286()
    {
        $this->object->setSecondName('Жвикова');
        $this->assertEquals('2-Жвикова', $this->object->genderAutoDetect().'-Жвикова');
    }
    public function testGenDetect1287()
    {
        $this->object->setSecondName('Жданова');
        $this->assertEquals('2-Жданова', $this->object->genderAutoDetect().'-Жданова');
    }
    public function testGenDetect1288()
    {
        $this->object->setSecondName('Жеглова');
        $this->assertEquals('2-Жеглова', $this->object->genderAutoDetect().'-Жеглова');
    }
    public function testGenDetect1289()
    {
        $this->object->setSecondName('Железкина');
        $this->assertEquals('2-Железкина', $this->object->genderAutoDetect().'-Железкина');
    }
    public function testGenDetect1290()
    {
        $this->object->setSecondName('Жестакова');
        $this->assertEquals('2-Жестакова', $this->object->genderAutoDetect().'-Жестакова');
    }
    public function testGenDetect1291()
    {
        $this->object->setSecondName('Живенкова');
        $this->assertEquals('2-Живенкова', $this->object->genderAutoDetect().'-Живенкова');
    }
    public function testGenDetect1292()
    {
        $this->object->setSecondName('Жиглова');
        $this->assertEquals('2-Жиглова', $this->object->genderAutoDetect().'-Жиглова');
    }
    public function testGenDetect1293()
    {
        $this->object->setSecondName('Жигунова');
        $this->assertEquals('2-Жигунова', $this->object->genderAutoDetect().'-Жигунова');
    }
    public function testGenDetect1294()
    {
        $this->object->setSecondName('Жидкова');
        $this->assertEquals('2-Жидкова', $this->object->genderAutoDetect().'-Жидкова');
    }
    public function testGenDetect1295()
    {
        $this->object->setSecondName('Жикина');
        $this->assertEquals('2-Жикина', $this->object->genderAutoDetect().'-Жикина');
    }
    public function testGenDetect1296()
    {
        $this->object->setSecondName('Жилина');
        $this->assertEquals('2-Жилина', $this->object->genderAutoDetect().'-Жилина');
    }
    public function testGenDetect1297()
    {
        $this->object->setSecondName('Жилова');
        $this->assertEquals('2-Жилова', $this->object->genderAutoDetect().'-Жилова');
    }
    public function testGenDetect1298()
    {
        $this->object->setSecondName('Жолдина');
        $this->assertEquals('2-Жолдина', $this->object->genderAutoDetect().'-Жолдина');
    }
    public function testGenDetect1299()
    {
        $this->object->setSecondName('Жукова');
        $this->assertEquals('2-Жукова', $this->object->genderAutoDetect().'-Жукова');
    }
    public function testGenDetect1300()
    {
        $this->object->setSecondName('Жутова');
        $this->assertEquals('2-Жутова', $this->object->genderAutoDetect().'-Жутова');
    }
    public function testGenDetect1301()
    {
        $this->object->setSecondName('Журавлёв');
        $this->assertEquals('2-Журавлёв', $this->object->genderAutoDetect().'-Журавлёв');
    }
    public function testGenDetect1302()
    {
        $this->object->setSecondName('Журова');
        $this->assertEquals('2-Журова', $this->object->genderAutoDetect().'-Журова');
    }
    public function testGenDetect1303()
    {
        $this->object->setSecondName('Заврагина');
        $this->assertEquals('2-Заврагина', $this->object->genderAutoDetect().'-Заврагина');
    }
    public function testGenDetect1304()
    {
        $this->object->setSecondName('Завражина');
        $this->assertEquals('2-Завражина', $this->object->genderAutoDetect().'-Завражина');
    }
    public function testGenDetect1305()
    {
        $this->object->setSecondName('Завражнова');
        $this->assertEquals('2-Завражнова', $this->object->genderAutoDetect().'-Завражнова');
    }
    public function testGenDetect1306()
    {
        $this->object->setSecondName('Завразина');
        $this->assertEquals('2-Завразина', $this->object->genderAutoDetect().'-Завразина');
    }
    public function testGenDetect1307()
    {
        $this->object->setSecondName('Завьялова');
        $this->assertEquals('2-Завьялова', $this->object->genderAutoDetect().'-Завьялова');
    }
    public function testGenDetect1308()
    {
        $this->object->setSecondName('Задорнова');
        $this->assertEquals('2-Задорнова', $this->object->genderAutoDetect().'-Задорнова');
    }
    public function testGenDetect1309()
    {
        $this->object->setSecondName('Задорожный');
        $this->assertEquals('2-Задорожный', $this->object->genderAutoDetect().'-Задорожный');
    }
    public function testGenDetect1310()
    {
        $this->object->setSecondName('Зайцева');
        $this->assertEquals('2-Зайцева', $this->object->genderAutoDetect().'-Зайцева');
    }
    public function testGenDetect1311()
    {
        $this->object->setSecondName('Закревская');
        $this->assertEquals('2-Закревская', $this->object->genderAutoDetect().'-Закревская');
    }
    public function testGenDetect1312()
    {
        $this->object->setSecondName('Закрятина');
        $this->assertEquals('2-Закрятина', $this->object->genderAutoDetect().'-Закрятина');
    }
    public function testGenDetect1313()
    {
        $this->object->setSecondName('Захарова');
        $this->assertEquals('2-Захарова', $this->object->genderAutoDetect().'-Захарова');
    }
    public function testGenDetect1314()
    {
        $this->object->setSecondName('Захарьина');
        $this->assertEquals('2-Захарьина', $this->object->genderAutoDetect().'-Захарьина');
    }
    public function testGenDetect1315()
    {
        $this->object->setSecondName('Звягина');
        $this->assertEquals('2-Звягина', $this->object->genderAutoDetect().'-Звягина');
    }
    public function testGenDetect1316()
    {
        $this->object->setSecondName('Зёмина');
        $this->assertEquals('2-Зёмина', $this->object->genderAutoDetect().'-Зёмина');
    }
    public function testGenDetect1317()
    {
        $this->object->setSecondName('Зимина');
        $this->assertEquals('2-Зимина', $this->object->genderAutoDetect().'-Зимина');
    }
    public function testGenDetect1318()
    {
        $this->object->setSecondName('Золина');
        $this->assertEquals('2-Золина', $this->object->genderAutoDetect().'-Золина');
    }
    public function testGenDetect1319()
    {
        $this->object->setSecondName('Зонова');
        $this->assertEquals('2-Зонова', $this->object->genderAutoDetect().'-Зонова');
    }
    public function testGenDetect1320()
    {
        $this->object->setSecondName('Зубкова');
        $this->assertEquals('2-Зубкова', $this->object->genderAutoDetect().'-Зубкова');
    }
    public function testGenDetect1321()
    {
        $this->object->setSecondName('Зубова');
        $this->assertEquals('2-Зубова', $this->object->genderAutoDetect().'-Зубова');
    }
    public function testGenDetect1322()
    {
        $this->object->setSecondName('Зуева');
        $this->assertEquals('2-Зуева', $this->object->genderAutoDetect().'-Зуева');
    }
    public function testGenDetect1323()
    {
        $this->object->setSecondName('Зуйкова');
        $this->assertEquals('2-Зуйкова', $this->object->genderAutoDetect().'-Зуйкова');
    }
    public function testGenDetect1324()
    {
        $this->object->setSecondName('Зимнякова');
        $this->assertEquals('2-Зимнякова', $this->object->genderAutoDetect().'-Зимнякова');
    }
    public function testGenDetect1325()
    {
        $this->object->setSecondName('Зиначенко');
        $this->assertEquals('2-Зиначенко', $this->object->genderAutoDetect().'-Зиначенко');
    }
    public function testGenDetect1326()
    {
        $this->object->setSecondName('Зыкина');
        $this->assertEquals('2-Зыкина', $this->object->genderAutoDetect().'-Зыкина');
    }
    public function testGenDetect1327()
    {
        $this->object->setSecondName('Зырянова');
        $this->assertEquals('2-Зырянова', $this->object->genderAutoDetect().'-Зырянова');
    }
    public function testGenDetect1328()
    {
        $this->object->setSecondName('Зюганова');
        $this->assertEquals('2-Зюганова', $this->object->genderAutoDetect().'-Зюганова');
    }
    public function testGenDetect1329()
    {
        $this->object->setSecondName('Зверева');
        $this->assertEquals('2-Зверева', $this->object->genderAutoDetect().'-Зверева');
    }
    public function testGenDetect1330()
    {
        $this->object->setSecondName('Игнаткович');
        $this->assertEquals('2-Игнаткович', $this->object->genderAutoDetect().'-Игнаткович');
    }
    public function testGenDetect1331()
    {
        $this->object->setSecondName('Ивакина');
        $this->assertEquals('2-Ивакина', $this->object->genderAutoDetect().'-Ивакина');
    }
    public function testGenDetect1332()
    {
        $this->object->setSecondName('Ибрагимова');
        $this->assertEquals('2-Ибрагимова', $this->object->genderAutoDetect().'-Ибрагимова');
    }
    public function testGenDetect1333()
    {
        $this->object->setSecondName('Иванова');
        $this->assertEquals('2-Иванова', $this->object->genderAutoDetect().'-Иванова');
    }
    public function testGenDetect1334()
    {
        $this->object->setSecondName('Иванкова');
        $this->assertEquals('2-Иванкова', $this->object->genderAutoDetect().'-Иванкова');
    }
    public function testGenDetect1335()
    {
        $this->object->setSecondName('Ивашина');
        $this->assertEquals('2-Ивашина', $this->object->genderAutoDetect().'-Ивашина');
    }
    public function testGenDetect1336()
    {
        $this->object->setSecondName('Ивашова');
        $this->assertEquals('2-Ивашова', $this->object->genderAutoDetect().'-Ивашова');
    }
    public function testGenDetect1337()
    {
        $this->object->setSecondName('Ивкина');
        $this->assertEquals('2-Ивкина', $this->object->genderAutoDetect().'-Ивкина');
    }
    public function testGenDetect1338()
    {
        $this->object->setSecondName('Иволгина');
        $this->assertEquals('2-Иволгина', $this->object->genderAutoDetect().'-Иволгина');
    }
    public function testGenDetect1339()
    {
        $this->object->setSecondName('Игнатьева');
        $this->assertEquals('2-Игнатьева', $this->object->genderAutoDetect().'-Игнатьева');
    }
    public function testGenDetect1340()
    {
        $this->object->setSecondName('Игошина');
        $this->assertEquals('2-Игошина', $this->object->genderAutoDetect().'-Игошина');
    }
    public function testGenDetect1341()
    {
        $this->object->setSecondName('Измайлова');
        $this->assertEquals('2-Измайлова', $this->object->genderAutoDetect().'-Измайлова');
    }
    public function testGenDetect1342()
    {
        $this->object->setSecondName('Иканова');
        $this->assertEquals('2-Иканова', $this->object->genderAutoDetect().'-Иканова');
    }
    public function testGenDetect1343()
    {
        $this->object->setSecondName('Икашева');
        $this->assertEquals('2-Икашева', $this->object->genderAutoDetect().'-Икашева');
    }
    public function testGenDetect1344()
    {
        $this->object->setSecondName('Ильина');
        $this->assertEquals('2-Ильина', $this->object->genderAutoDetect().'-Ильина');
    }
    public function testGenDetect1345()
    {
        $this->object->setSecondName('Илюшина');
        $this->assertEquals('2-Илюшина', $this->object->genderAutoDetect().'-Илюшина');
    }
    public function testGenDetect1346()
    {
        $this->object->setSecondName('Ильюшина');
        $this->assertEquals('2-Ильюшина', $this->object->genderAutoDetect().'-Ильюшина');
    }
    public function testGenDetect1347()
    {
        $this->object->setSecondName('Иноземцева');
        $this->assertEquals('2-Иноземцева', $this->object->genderAutoDetect().'-Иноземцева');
    }
    public function testGenDetect1348()
    {
        $this->object->setSecondName('Ипатьева');
        $this->assertEquals('2-Ипатьева', $this->object->genderAutoDetect().'-Ипатьева');
    }
    public function testGenDetect1349()
    {
        $this->object->setSecondName('Исаева');
        $this->assertEquals('2-Исаева', $this->object->genderAutoDetect().'-Исаева');
    }
    public function testGenDetect1350()
    {
        $this->object->setSecondName('Истомина');
        $this->assertEquals('2-Истомина', $this->object->genderAutoDetect().'-Истомина');
    }
    public function testGenDetect1351()
    {
        $this->object->setSecondName('Кабинова');
        $this->assertEquals('2-Кабинова', $this->object->genderAutoDetect().'-Кабинова');
    }
    public function testGenDetect1352()
    {
        $this->object->setSecondName('Каблукова');
        $this->assertEquals('2-Каблукова', $this->object->genderAutoDetect().'-Каблукова');
    }
    public function testGenDetect1353()
    {
        $this->object->setSecondName('Каверина');
        $this->assertEquals('2-Каверина', $this->object->genderAutoDetect().'-Каверина');
    }
    public function testGenDetect1354()
    {
        $this->object->setSecondName('Кадникова');
        $this->assertEquals('2-Кадникова', $this->object->genderAutoDetect().'-Кадникова');
    }
    public function testGenDetect1355()
    {
        $this->object->setSecondName('Кадцына');
        $this->assertEquals('2-Кадцына', $this->object->genderAutoDetect().'-Кадцына');
    }
    public function testGenDetect1356()
    {
        $this->object->setSecondName('Казакова');
        $this->assertEquals('2-Казакова', $this->object->genderAutoDetect().'-Казакова');
    }
    public function testGenDetect1357()
    {
        $this->object->setSecondName('Казанцева');
        $this->assertEquals('2-Казанцева', $this->object->genderAutoDetect().'-Казанцева');
    }
    public function testGenDetect1358()
    {
        $this->object->setSecondName('Казарезова');
        $this->assertEquals('2-Казарезова', $this->object->genderAutoDetect().'-Казарезова');
    }
    public function testGenDetect1359()
    {
        $this->object->setSecondName('Калашник');
        $this->assertEquals('2-Калашник', $this->object->genderAutoDetect().'-Калашник');
    }
    public function testGenDetect1360()
    {
        $this->object->setSecondName('Калганова');
        $this->assertEquals('2-Калганова', $this->object->genderAutoDetect().'-Калганова');
    }
    public function testGenDetect1361()
    {
        $this->object->setSecondName('Каменских');
        $this->assertEquals('2-Каменских', $this->object->genderAutoDetect().'-Каменских');
    }
    public function testGenDetect1362()
    {
        $this->object->setSecondName('Камкина');
        $this->assertEquals('2-Камкина', $this->object->genderAutoDetect().'-Камкина');
    }
    public function testGenDetect1363()
    {
        $this->object->setSecondName('Каналина');
        $this->assertEquals('2-Каналина', $this->object->genderAutoDetect().'-Каналина');
    }
    public function testGenDetect1364()
    {
        $this->object->setSecondName('Кандинская');
        $this->assertEquals('2-Кандинская', $this->object->genderAutoDetect().'-Кандинская');
    }
    public function testGenDetect1365()
    {
        $this->object->setSecondName('Капица');
        $this->assertEquals('2-Капица', $this->object->genderAutoDetect().'-Капица');
    }
    public function testGenDetect1366()
    {
        $this->object->setSecondName('Капралова');
        $this->assertEquals('2-Капралова', $this->object->genderAutoDetect().'-Капралова');
    }
    public function testGenDetect1367()
    {
        $this->object->setSecondName('Караваева');
        $this->assertEquals('2-Караваева', $this->object->genderAutoDetect().'-Караваева');
    }
    public function testGenDetect1368()
    {
        $this->object->setSecondName('Караулова');
        $this->assertEquals('2-Караулова', $this->object->genderAutoDetect().'-Караулова');
    }
    public function testGenDetect1369()
    {
        $this->object->setSecondName('Карева');
        $this->assertEquals('2-Карева', $this->object->genderAutoDetect().'-Карева');
    }
    public function testGenDetect1370()
    {
        $this->object->setSecondName('Каретникова');
        $this->assertEquals('2-Каретникова', $this->object->genderAutoDetect().'-Каретникова');
    }
    public function testGenDetect1371()
    {
        $this->object->setSecondName('Каргина');
        $this->assertEquals('2-Каргина', $this->object->genderAutoDetect().'-Каргина');
    }
    public function testGenDetect1372()
    {
        $this->object->setSecondName('Карташова');
        $this->assertEquals('2-Карташова', $this->object->genderAutoDetect().'-Карташова');
    }
    public function testGenDetect1373()
    {
        $this->object->setSecondName('Карчагина');
        $this->assertEquals('2-Карчагина', $this->object->genderAutoDetect().'-Карчагина');
    }
    public function testGenDetect1374()
    {
        $this->object->setSecondName('Касатый');
        $this->assertEquals('2-Касатый', $this->object->genderAutoDetect().'-Касатый');
    }
    public function testGenDetect1375()
    {
        $this->object->setSecondName('Катина');
        $this->assertEquals('2-Катина', $this->object->genderAutoDetect().'-Катина');
    }
    public function testGenDetect1376()
    {
        $this->object->setSecondName('Качусова');
        $this->assertEquals('2-Качусова', $this->object->genderAutoDetect().'-Качусова');
    }
    public function testGenDetect1377()
    {
        $this->object->setSecondName('Кашарина');
        $this->assertEquals('2-Кашарина', $this->object->genderAutoDetect().'-Кашарина');
    }
    public function testGenDetect1378()
    {
        $this->object->setSecondName('Каширина');
        $this->assertEquals('2-Каширина', $this->object->genderAutoDetect().'-Каширина');
    }
    public function testGenDetect1379()
    {
        $this->object->setSecondName('Кашканова');
        $this->assertEquals('2-Кашканова', $this->object->genderAutoDetect().'-Кашканова');
    }
    public function testGenDetect1380()
    {
        $this->object->setSecondName('Кашникова');
        $this->assertEquals('2-Кашникова', $this->object->genderAutoDetect().'-Кашникова');
    }
    public function testGenDetect1381()
    {
        $this->object->setSecondName('Киреева');
        $this->assertEquals('2-Киреева', $this->object->genderAutoDetect().'-Киреева');
    }
    public function testGenDetect1382()
    {
        $this->object->setSecondName('Кирилишена');
        $this->assertEquals('2-Кирилишена', $this->object->genderAutoDetect().'-Кирилишена');
    }
    public function testGenDetect1383()
    {
        $this->object->setSecondName('Кирилова');
        $this->assertEquals('2-Кирилова', $this->object->genderAutoDetect().'-Кирилова');
    }
    public function testGenDetect1384()
    {
        $this->object->setSecondName('Кирсанова');
        $this->assertEquals('2-Кирсанова', $this->object->genderAutoDetect().'-Кирсанова');
    }
    public function testGenDetect1385()
    {
        $this->object->setSecondName('Кирьянова');
        $this->assertEquals('2-Кирьянова', $this->object->genderAutoDetect().'-Кирьянова');
    }
    public function testGenDetect1386()
    {
        $this->object->setSecondName('Клепахова');
        $this->assertEquals('2-Клепахова', $this->object->genderAutoDetect().'-Клепахова');
    }
    public function testGenDetect1387()
    {
        $this->object->setSecondName('Климова');
        $this->assertEquals('2-Климова', $this->object->genderAutoDetect().'-Климова');
    }
    public function testGenDetect1388()
    {
        $this->object->setSecondName('Климушина');
        $this->assertEquals('2-Климушина', $this->object->genderAutoDetect().'-Климушина');
    }
    public function testGenDetect1389()
    {
        $this->object->setSecondName('Клокова');
        $this->assertEquals('2-Клокова', $this->object->genderAutoDetect().'-Клокова');
    }
    public function testGenDetect1390()
    {
        $this->object->setSecondName('Князева');
        $this->assertEquals('2-Князева', $this->object->genderAutoDetect().'-Князева');
    }
    public function testGenDetect1391()
    {
        $this->object->setSecondName('Ковалёв');
        $this->assertEquals('2-Ковалёв', $this->object->genderAutoDetect().'-Ковалёв');
    }
    public function testGenDetect1392()
    {
        $this->object->setSecondName('Ковалевская');
        $this->assertEquals('2-Ковалевская', $this->object->genderAutoDetect().'-Ковалевская');
    }
    public function testGenDetect1393()
    {
        $this->object->setSecondName('Коварова');
        $this->assertEquals('2-Коварова', $this->object->genderAutoDetect().'-Коварова');
    }
    public function testGenDetect1394()
    {
        $this->object->setSecondName('Ковашутина');
        $this->assertEquals('2-Ковашутина', $this->object->genderAutoDetect().'-Ковашутина');
    }
    public function testGenDetect1395()
    {
        $this->object->setSecondName('Кожурова');
        $this->assertEquals('2-Кожурова', $this->object->genderAutoDetect().'-Кожурова');
    }
    public function testGenDetect1396()
    {
        $this->object->setSecondName('Кожухова');
        $this->assertEquals('2-Кожухова', $this->object->genderAutoDetect().'-Кожухова');
    }
    public function testGenDetect1397()
    {
        $this->object->setSecondName('Козакова');
        $this->assertEquals('2-Козакова', $this->object->genderAutoDetect().'-Козакова');
    }
    public function testGenDetect1398()
    {
        $this->object->setSecondName('Козарь');
        $this->assertEquals('2-Козарь', $this->object->genderAutoDetect().'-Козарь');
    }
    public function testGenDetect1399()
    {
        $this->object->setSecondName('Козлова');
        $this->assertEquals('2-Козлова', $this->object->genderAutoDetect().'-Козлова');
    }
    public function testGenDetect1400()
    {
        $this->object->setSecondName('Козловская');
        $this->assertEquals('2-Козловская', $this->object->genderAutoDetect().'-Козловская');
    }
    public function testGenDetect1401()
    {
        $this->object->setSecondName('Колесникова');
        $this->assertEquals('2-Колесникова', $this->object->genderAutoDetect().'-Колесникова');
    }
    public function testGenDetect1402()
    {
        $this->object->setSecondName('Колонтаева');
        $this->assertEquals('2-Колонтаева', $this->object->genderAutoDetect().'-Колонтаева');
    }
    public function testGenDetect1403()
    {
        $this->object->setSecondName('Колосова');
        $this->assertEquals('2-Колосова', $this->object->genderAutoDetect().'-Колосова');
    }
    public function testGenDetect1404()
    {
        $this->object->setSecondName('Кольцова');
        $this->assertEquals('2-Кольцова', $this->object->genderAutoDetect().'-Кольцова');
    }
    public function testGenDetect1405()
    {
        $this->object->setSecondName('Комарова');
        $this->assertEquals('2-Комарова', $this->object->genderAutoDetect().'-Комарова');
    }
    public function testGenDetect1406()
    {
        $this->object->setSecondName('Комзина');
        $this->assertEquals('2-Комзина', $this->object->genderAutoDetect().'-Комзина');
    }
    public function testGenDetect1407()
    {
        $this->object->setSecondName('Комолова');
        $this->assertEquals('2-Комолова', $this->object->genderAutoDetect().'-Комолова');
    }
    public function testGenDetect1408()
    {
        $this->object->setSecondName('Кондратьева');
        $this->assertEquals('2-Кондратьева', $this->object->genderAutoDetect().'-Кондратьева');
    }
    public function testGenDetect1409()
    {
        $this->object->setSecondName('Конева');
        $this->assertEquals('2-Конева', $this->object->genderAutoDetect().'-Конева');
    }
    public function testGenDetect1410()
    {
        $this->object->setSecondName('Конникова');
        $this->assertEquals('2-Конникова', $this->object->genderAutoDetect().'-Конникова');
    }
    public function testGenDetect1411()
    {
        $this->object->setSecondName('Коновалова');
        $this->assertEquals('2-Коновалова', $this->object->genderAutoDetect().'-Коновалова');
    }
    public function testGenDetect1412()
    {
        $this->object->setSecondName('Коньякова');
        $this->assertEquals('2-Коньякова', $this->object->genderAutoDetect().'-Коньякова');
    }
    public function testGenDetect1413()
    {
        $this->object->setSecondName('Коняшева');
        $this->assertEquals('2-Коняшева', $this->object->genderAutoDetect().'-Коняшева');
    }
    public function testGenDetect1414()
    {
        $this->object->setSecondName('Копейкина');
        $this->assertEquals('2-Копейкина', $this->object->genderAutoDetect().'-Копейкина');
    }
    public function testGenDetect1415()
    {
        $this->object->setSecondName('Коренева');
        $this->assertEquals('2-Коренева', $this->object->genderAutoDetect().'-Коренева');
    }
    public function testGenDetect1416()
    {
        $this->object->setSecondName('Коренёва');
        $this->assertEquals('2-Коренёва', $this->object->genderAutoDetect().'-Коренёва');
    }
    public function testGenDetect1417()
    {
        $this->object->setSecondName('Коржакова');
        $this->assertEquals('2-Коржакова', $this->object->genderAutoDetect().'-Коржакова');
    }
    public function testGenDetect1418()
    {
        $this->object->setSecondName('Коржева');
        $this->assertEquals('2-Коржева', $this->object->genderAutoDetect().'-Коржева');
    }
    public function testGenDetect1419()
    {
        $this->object->setSecondName('Корнева');
        $this->assertEquals('2-Корнева', $this->object->genderAutoDetect().'-Корнева');
    }
    public function testGenDetect1420()
    {
        $this->object->setSecondName('Корнилова');
        $this->assertEquals('2-Корнилова', $this->object->genderAutoDetect().'-Корнилова');
    }
    public function testGenDetect1421()
    {
        $this->object->setSecondName('Коровина');
        $this->assertEquals('2-Коровина', $this->object->genderAutoDetect().'-Коровина');
    }
    public function testGenDetect1422()
    {
        $this->object->setSecondName('Королёва');
        $this->assertEquals('2-Королёва', $this->object->genderAutoDetect().'-Королёва');
    }
    public function testGenDetect1423()
    {
        $this->object->setSecondName('Коротаева');
        $this->assertEquals('2-Коротаева', $this->object->genderAutoDetect().'-Коротаева');
    }
    public function testGenDetect1424()
    {
        $this->object->setSecondName('Корчагина');
        $this->assertEquals('2-Корчагина', $this->object->genderAutoDetect().'-Корчагина');
    }
    public function testGenDetect1425()
    {
        $this->object->setSecondName('Косарёва');
        $this->assertEquals('2-Косарёва', $this->object->genderAutoDetect().'-Косарёва');
    }
    public function testGenDetect1426()
    {
        $this->object->setSecondName('Коскова');
        $this->assertEquals('2-Коскова', $this->object->genderAutoDetect().'-Коскова');
    }
    public function testGenDetect1427()
    {
        $this->object->setSecondName('Косомова');
        $this->assertEquals('2-Косомова', $this->object->genderAutoDetect().'-Косомова');
    }
    public function testGenDetect1428()
    {
        $this->object->setSecondName('Косорукова');
        $this->assertEquals('2-Косорукова', $this->object->genderAutoDetect().'-Косорукова');
    }
    public function testGenDetect1429()
    {
        $this->object->setSecondName('Костина');
        $this->assertEquals('2-Костина', $this->object->genderAutoDetect().'-Костина');
    }
    public function testGenDetect1430()
    {
        $this->object->setSecondName('Косяк');
        $this->assertEquals('2-Косяк', $this->object->genderAutoDetect().'-Косяк');
    }
    public function testGenDetect1431()
    {
        $this->object->setSecondName('Котова');
        $this->assertEquals('2-Котова', $this->object->genderAutoDetect().'-Котова');
    }
    public function testGenDetect1432()
    {
        $this->object->setSecondName('Костомарова');
        $this->assertEquals('2-Костомарова', $this->object->genderAutoDetect().'-Костомарова');
    }
    public function testGenDetect1433()
    {
        $this->object->setSecondName('Коченкова');
        $this->assertEquals('2-Коченкова', $this->object->genderAutoDetect().'-Коченкова');
    }
    public function testGenDetect1434()
    {
        $this->object->setSecondName('Кошелева');
        $this->assertEquals('2-Кошелева', $this->object->genderAutoDetect().'-Кошелева');
    }
    public function testGenDetect1435()
    {
        $this->object->setSecondName('Кошечкина');
        $this->assertEquals('2-Кошечкина', $this->object->genderAutoDetect().'-Кошечкина');
    }
    public function testGenDetect1436()
    {
        $this->object->setSecondName('Кошкина');
        $this->assertEquals('2-Кошкина', $this->object->genderAutoDetect().'-Кошкина');
    }
    public function testGenDetect1437()
    {
        $this->object->setSecondName('Кравчук');
        $this->assertEquals('2-Кравчук', $this->object->genderAutoDetect().'-Кравчук');
    }
    public function testGenDetect1438()
    {
        $this->object->setSecondName('Краева');
        $this->assertEquals('2-Краева', $this->object->genderAutoDetect().'-Краева');
    }
    public function testGenDetect1439()
    {
        $this->object->setSecondName('Краснова');
        $this->assertEquals('2-Краснова', $this->object->genderAutoDetect().'-Краснова');
    }
    public function testGenDetect1440()
    {
        $this->object->setSecondName('Красноперова');
        $this->assertEquals('2-Красноперова', $this->object->genderAutoDetect().'-Красноперова');
    }
    public function testGenDetect1441()
    {
        $this->object->setSecondName('Кропанина');
        $this->assertEquals('2-Кропанина', $this->object->genderAutoDetect().'-Кропанина');
    }
    public function testGenDetect1442()
    {
        $this->object->setSecondName('Кругликова');
        $this->assertEquals('2-Кругликова', $this->object->genderAutoDetect().'-Кругликова');
    }
    public function testGenDetect1443()
    {
        $this->object->setSecondName('Круглова');
        $this->assertEquals('2-Круглова', $this->object->genderAutoDetect().'-Круглова');
    }
    public function testGenDetect1444()
    {
        $this->object->setSecondName('Крупина');
        $this->assertEquals('2-Крупина', $this->object->genderAutoDetect().'-Крупина');
    }
    public function testGenDetect1445()
    {
        $this->object->setSecondName('Крутина');
        $this->assertEquals('2-Крутина', $this->object->genderAutoDetect().'-Крутина');
    }
    public function testGenDetect1446()
    {
        $this->object->setSecondName('Кручинакина');
        $this->assertEquals('2-Кручинакина', $this->object->genderAutoDetect().'-Кручинакина');
    }
    public function testGenDetect1447()
    {
        $this->object->setSecondName('Крылова');
        $this->assertEquals('2-Крылова', $this->object->genderAutoDetect().'-Крылова');
    }
    public function testGenDetect1448()
    {
        $this->object->setSecondName('Крысова');
        $this->assertEquals('2-Крысова', $this->object->genderAutoDetect().'-Крысова');
    }
    public function testGenDetect1449()
    {
        $this->object->setSecondName('Крюкова');
        $this->assertEquals('2-Крюкова', $this->object->genderAutoDetect().'-Крюкова');
    }
    public function testGenDetect1450()
    {
        $this->object->setSecondName('Кубланова');
        $this->assertEquals('2-Кубланова', $this->object->genderAutoDetect().'-Кубланова');
    }
    public function testGenDetect1451()
    {
        $this->object->setSecondName('Кудашова');
        $this->assertEquals('2-Кудашова', $this->object->genderAutoDetect().'-Кудашова');
    }
    public function testGenDetect1452()
    {
        $this->object->setSecondName('Кудрина');
        $this->assertEquals('2-Кудрина', $this->object->genderAutoDetect().'-Кудрина');
    }
    public function testGenDetect1453()
    {
        $this->object->setSecondName('Кудрявцева');
        $this->assertEquals('2-Кудрявцева', $this->object->genderAutoDetect().'-Кудрявцева');
    }
    public function testGenDetect1454()
    {
        $this->object->setSecondName('Кудряшова');
        $this->assertEquals('2-Кудряшова', $this->object->genderAutoDetect().'-Кудряшова');
    }
    public function testGenDetect1455()
    {
        $this->object->setSecondName('Кузнецова');
        $this->assertEquals('2-Кузнецова', $this->object->genderAutoDetect().'-Кузнецова');
    }
    public function testGenDetect1456()
    {
        $this->object->setSecondName('Кузьмина');
        $this->assertEquals('2-Кузьмина', $this->object->genderAutoDetect().'-Кузьмина');
    }
    public function testGenDetect1457()
    {
        $this->object->setSecondName('Куимова');
        $this->assertEquals('2-Куимова', $this->object->genderAutoDetect().'-Куимова');
    }
    public function testGenDetect1458()
    {
        $this->object->setSecondName('Куклачёва');
        $this->assertEquals('2-Куклачёва', $this->object->genderAutoDetect().'-Куклачёва');
    }
    public function testGenDetect1459()
    {
        $this->object->setSecondName('Кулагина');
        $this->assertEquals('2-Кулагина', $this->object->genderAutoDetect().'-Кулагина');
    }
    public function testGenDetect1460()
    {
        $this->object->setSecondName('Кулибина');
        $this->assertEquals('2-Кулибина', $this->object->genderAutoDetect().'-Кулибина');
    }
    public function testGenDetect1461()
    {
        $this->object->setSecondName('Куликова');
        $this->assertEquals('2-Куликова', $this->object->genderAutoDetect().'-Куликова');
    }
    public function testGenDetect1462()
    {
        $this->object->setSecondName('Куракина');
        $this->assertEquals('2-Куракина', $this->object->genderAutoDetect().'-Куракина');
    }
    public function testGenDetect1463()
    {
        $this->object->setSecondName('Курбатова');
        $this->assertEquals('2-Курбатова', $this->object->genderAutoDetect().'-Курбатова');
    }
    public function testGenDetect1464()
    {
        $this->object->setSecondName('Курганова');
        $this->assertEquals('2-Курганова', $this->object->genderAutoDetect().'-Курганова');
    }
    public function testGenDetect1465()
    {
        $this->object->setSecondName('Курдина');
        $this->assertEquals('2-Курдина', $this->object->genderAutoDetect().'-Курдина');
    }
    public function testGenDetect1466()
    {
        $this->object->setSecondName('Курепина');
        $this->assertEquals('2-Курепина', $this->object->genderAutoDetect().'-Курепина');
    }
    public function testGenDetect1467()
    {
        $this->object->setSecondName('Курсалина');
        $this->assertEquals('2-Курсалина', $this->object->genderAutoDetect().'-Курсалина');
    }
    public function testGenDetect1468()
    {
        $this->object->setSecondName('Кутикова');
        $this->assertEquals('2-Кутикова', $this->object->genderAutoDetect().'-Кутикова');
    }
    public function testGenDetect1469()
    {
        $this->object->setSecondName('Кутузова');
        $this->assertEquals('2-Кутузова', $this->object->genderAutoDetect().'-Кутузова');
    }
    public function testGenDetect1470()
    {
        $this->object->setSecondName('Кутякова');
        $this->assertEquals('2-Кутякова', $this->object->genderAutoDetect().'-Кутякова');
    }
    public function testGenDetect1471()
    {
        $this->object->setSecondName('Лаврова');
        $this->assertEquals('2-Лаврова', $this->object->genderAutoDetect().'-Лаврова');
    }
    public function testGenDetect1472()
    {
        $this->object->setSecondName('Лагутова');
        $this->assertEquals('2-Лагутова', $this->object->genderAutoDetect().'-Лагутова');
    }
    public function testGenDetect1473()
    {
        $this->object->setSecondName('Лазарева');
        $this->assertEquals('2-Лазарева', $this->object->genderAutoDetect().'-Лазарева');
    }
    public function testGenDetect1474()
    {
        $this->object->setSecondName('Ланцова');
        $this->assertEquals('2-Ланцова', $this->object->genderAutoDetect().'-Ланцова');
    }
    public function testGenDetect1475()
    {
        $this->object->setSecondName('Лапидус');
        $this->assertEquals('2-Лапидус', $this->object->genderAutoDetect().'-Лапидус');
    }
    public function testGenDetect1476()
    {
        $this->object->setSecondName('Лапотникова');
        $this->assertEquals('2-Лапотникова', $this->object->genderAutoDetect().'-Лапотникова');
    }
    public function testGenDetect1477()
    {
        $this->object->setSecondName('Лаптева');
        $this->assertEquals('2-Лаптева', $this->object->genderAutoDetect().'-Лаптева');
    }
    public function testGenDetect1478()
    {
        $this->object->setSecondName('Лапунова');
        $this->assertEquals('2-Лапунова', $this->object->genderAutoDetect().'-Лапунова');
    }
    public function testGenDetect1479()
    {
        $this->object->setSecondName('Лапухова');
        $this->assertEquals('2-Лапухова', $this->object->genderAutoDetect().'-Лапухова');
    }
    public function testGenDetect1480()
    {
        $this->object->setSecondName('Ларина');
        $this->assertEquals('2-Ларина', $this->object->genderAutoDetect().'-Ларина');
    }
    public function testGenDetect1481()
    {
        $this->object->setSecondName('Ларионова');
        $this->assertEquals('2-Ларионова', $this->object->genderAutoDetect().'-Ларионова');
    }
    public function testGenDetect1482()
    {
        $this->object->setSecondName('Ласкутина');
        $this->assertEquals('2-Ласкутина', $this->object->genderAutoDetect().'-Ласкутина');
    }
    public function testGenDetect1483()
    {
        $this->object->setSecondName('Лачинова');
        $this->assertEquals('2-Лачинова', $this->object->genderAutoDetect().'-Лачинова');
    }
    public function testGenDetect1484()
    {
        $this->object->setSecondName('Лачкова');
        $this->assertEquals('2-Лачкова', $this->object->genderAutoDetect().'-Лачкова');
    }
    public function testGenDetect1485()
    {
        $this->object->setSecondName('Лебедева');
        $this->assertEquals('2-Лебедева', $this->object->genderAutoDetect().'-Лебедева');
    }
    public function testGenDetect1486()
    {
        $this->object->setSecondName('Лебединаская');
        $this->assertEquals('2-Лебединаская', $this->object->genderAutoDetect().'-Лебединаская');
    }
    public function testGenDetect1487()
    {
        $this->object->setSecondName('Лебединацева');
        $this->assertEquals('2-Лебединацева', $this->object->genderAutoDetect().'-Лебединацева');
    }
    public function testGenDetect1488()
    {
        $this->object->setSecondName('Легкодимова');
        $this->assertEquals('2-Легкодимова', $this->object->genderAutoDetect().'-Легкодимова');
    }
    public function testGenDetect1489()
    {
        $this->object->setSecondName('Леонова');
        $this->assertEquals('2-Леонова', $this->object->genderAutoDetect().'-Леонова');
    }
    public function testGenDetect1490()
    {
        $this->object->setSecondName('Лепёхина');
        $this->assertEquals('2-Лепёхина', $this->object->genderAutoDetect().'-Лепёхина');
    }
    public function testGenDetect1491()
    {
        $this->object->setSecondName('Лескова');
        $this->assertEquals('2-Лескова', $this->object->genderAutoDetect().'-Лескова');
    }
    public function testGenDetect1492()
    {
        $this->object->setSecondName('Лесничая');
        $this->assertEquals('2-Лесничая', $this->object->genderAutoDetect().'-Лесничая');
    }
    public function testGenDetect1493()
    {
        $this->object->setSecondName('Летова');
        $this->assertEquals('2-Летова', $this->object->genderAutoDetect().'-Летова');
    }
    public function testGenDetect1494()
    {
        $this->object->setSecondName('Лещёва');
        $this->assertEquals('2-Лещёва', $this->object->genderAutoDetect().'-Лещёва');
    }
    public function testGenDetect1495()
    {
        $this->object->setSecondName('Лилова');
        $this->assertEquals('2-Лилова', $this->object->genderAutoDetect().'-Лилова');
    }
    public function testGenDetect1496()
    {
        $this->object->setSecondName('Липина');
        $this->assertEquals('2-Липина', $this->object->genderAutoDetect().'-Липина');
    }
    public function testGenDetect1497()
    {
        $this->object->setSecondName('Лисицына');
        $this->assertEquals('2-Лисицына', $this->object->genderAutoDetect().'-Лисицына');
    }
    public function testGenDetect1498()
    {
        $this->object->setSecondName('Лихачёва');
        $this->assertEquals('2-Лихачёва', $this->object->genderAutoDetect().'-Лихачёва');
    }
    public function testGenDetect1499()
    {
        $this->object->setSecondName('Лобан');
        $this->assertEquals('2-Лобан', $this->object->genderAutoDetect().'-Лобан');
    }
    public function testGenDetect1500()
    {
        $this->object->setSecondName('Лобанова');
        $this->assertEquals('2-Лобанова', $this->object->genderAutoDetect().'-Лобанова');
    }
    public function testGenDetect1501()
    {
        $this->object->setSecondName('Лобова');
        $this->assertEquals('2-Лобова', $this->object->genderAutoDetect().'-Лобова');
    }
    public function testGenDetect1502()
    {
        $this->object->setSecondName('Логинова');
        $this->assertEquals('2-Логинова', $this->object->genderAutoDetect().'-Логинова');
    }
    public function testGenDetect1503()
    {
        $this->object->setSecondName('Логиновская');
        $this->assertEquals('2-Логиновская', $this->object->genderAutoDetect().'-Логиновская');
    }
    public function testGenDetect1504()
    {
        $this->object->setSecondName('Локтева');
        $this->assertEquals('2-Локтева', $this->object->genderAutoDetect().'-Локтева');
    }
    public function testGenDetect1505()
    {
        $this->object->setSecondName('Ломоносова');
        $this->assertEquals('2-Ломоносова', $this->object->genderAutoDetect().'-Ломоносова');
    }
    public function testGenDetect1506()
    {
        $this->object->setSecondName('Ломтева');
        $this->assertEquals('2-Ломтева', $this->object->genderAutoDetect().'-Ломтева');
    }
    public function testGenDetect1507()
    {
        $this->object->setSecondName('Лопатина');
        $this->assertEquals('2-Лопатина', $this->object->genderAutoDetect().'-Лопатина');
    }
    public function testGenDetect1508()
    {
        $this->object->setSecondName('Лосева');
        $this->assertEquals('2-Лосева', $this->object->genderAutoDetect().'-Лосева');
    }
    public function testGenDetect1509()
    {
        $this->object->setSecondName('Лосевская');
        $this->assertEquals('2-Лосевская', $this->object->genderAutoDetect().'-Лосевская');
    }
    public function testGenDetect1510()
    {
        $this->object->setSecondName('Лоскутникова');
        $this->assertEquals('2-Лоскутникова', $this->object->genderAutoDetect().'-Лоскутникова');
    }
    public function testGenDetect1511()
    {
        $this->object->setSecondName('Лоскутова');
        $this->assertEquals('2-Лоскутова', $this->object->genderAutoDetect().'-Лоскутова');
    }
    public function testGenDetect1512()
    {
        $this->object->setSecondName('Лужкова');
        $this->assertEquals('2-Лужкова', $this->object->genderAutoDetect().'-Лужкова');
    }
    public function testGenDetect1513()
    {
        $this->object->setSecondName('Лыткина');
        $this->assertEquals('2-Лыткина', $this->object->genderAutoDetect().'-Лыткина');
    }
    public function testGenDetect1514()
    {
        $this->object->setSecondName('Любимова');
        $this->assertEquals('2-Любимова', $this->object->genderAutoDetect().'-Любимова');
    }
    public function testGenDetect1515()
    {
        $this->object->setSecondName('Любова');
        $this->assertEquals('2-Любова', $this->object->genderAutoDetect().'-Любова');
    }
    public function testGenDetect1516()
    {
        $this->object->setSecondName('Лягушкина');
        $this->assertEquals('2-Лягушкина', $this->object->genderAutoDetect().'-Лягушкина');
    }
    public function testGenDetect1517()
    {
        $this->object->setSecondName('Лягушова');
        $this->assertEquals('2-Лягушова', $this->object->genderAutoDetect().'-Лягушова');
    }
    public function testGenDetect1518()
    {
        $this->object->setSecondName('Лялюшкина');
        $this->assertEquals('2-Лялюшкина', $this->object->genderAutoDetect().'-Лялюшкина');
    }
    public function testGenDetect1519()
    {
        $this->object->setSecondName('Лясина');
        $this->assertEquals('2-Лясина', $this->object->genderAutoDetect().'-Лясина');
    }
    public function testGenDetect1520()
    {
        $this->object->setSecondName('Ляпина');
        $this->assertEquals('2-Ляпина', $this->object->genderAutoDetect().'-Ляпина');
    }
    public function testGenDetect1521()
    {
        $this->object->setSecondName('Майсак');
        $this->assertEquals('2-Майсак', $this->object->genderAutoDetect().'-Майсак');
    }
    public function testGenDetect1522()
    {
        $this->object->setSecondName('Макарова');
        $this->assertEquals('2-Макарова', $this->object->genderAutoDetect().'-Макарова');
    }
    public function testGenDetect1523()
    {
        $this->object->setSecondName('Маклакова');
        $this->assertEquals('2-Маклакова', $this->object->genderAutoDetect().'-Маклакова');
    }
    public function testGenDetect1524()
    {
        $this->object->setSecondName('Максимова');
        $this->assertEquals('2-Максимова', $this->object->genderAutoDetect().'-Максимова');
    }
    public function testGenDetect1525()
    {
        $this->object->setSecondName('Максимушкина');
        $this->assertEquals('2-Максимушкина', $this->object->genderAutoDetect().'-Максимушкина');
    }
    public function testGenDetect1526()
    {
        $this->object->setSecondName('Максудова');
        $this->assertEquals('2-Максудова', $this->object->genderAutoDetect().'-Максудова');
    }
    public function testGenDetect1527()
    {
        $this->object->setSecondName('Малахова');
        $this->assertEquals('2-Малахова', $this->object->genderAutoDetect().'-Малахова');
    }
    public function testGenDetect1528()
    {
        $this->object->setSecondName('Маликова');
        $this->assertEquals('2-Маликова', $this->object->genderAutoDetect().'-Маликова');
    }
    public function testGenDetect1529()
    {
        $this->object->setSecondName('Малинина');
        $this->assertEquals('2-Малинина', $this->object->genderAutoDetect().'-Малинина');
    }
    public function testGenDetect1530()
    {
        $this->object->setSecondName('Малышева');
        $this->assertEquals('2-Малышева', $this->object->genderAutoDetect().'-Малышева');
    }
    public function testGenDetect1531()
    {
        $this->object->setSecondName('Малюгина');
        $this->assertEquals('2-Малюгина', $this->object->genderAutoDetect().'-Малюгина');
    }
    public function testGenDetect1532()
    {
        $this->object->setSecondName('Малыхина');
        $this->assertEquals('2-Малыхина', $this->object->genderAutoDetect().'-Малыхина');
    }
    public function testGenDetect1533()
    {
        $this->object->setSecondName('Мамонова');
        $this->assertEquals('2-Мамонова', $this->object->genderAutoDetect().'-Мамонова');
    }
    public function testGenDetect1534()
    {
        $this->object->setSecondName('Манина');
        $this->assertEquals('2-Манина', $this->object->genderAutoDetect().'-Манина');
    }
    public function testGenDetect1535()
    {
        $this->object->setSecondName('Маркина');
        $this->assertEquals('2-Маркина', $this->object->genderAutoDetect().'-Маркина');
    }
    public function testGenDetect1536()
    {
        $this->object->setSecondName('Маркова');
        $this->assertEquals('2-Маркова', $this->object->genderAutoDetect().'-Маркова');
    }
    public function testGenDetect1537()
    {
        $this->object->setSecondName('Маслак');
        $this->assertEquals('2-Маслак', $this->object->genderAutoDetect().'-Маслак');
    }
    public function testGenDetect1538()
    {
        $this->object->setSecondName('Маслова');
        $this->assertEquals('2-Маслова', $this->object->genderAutoDetect().'-Маслова');
    }
    public function testGenDetect1539()
    {
        $this->object->setSecondName('Матвеева');
        $this->assertEquals('2-Матвеева', $this->object->genderAutoDetect().'-Матвеева');
    }
    public function testGenDetect1540()
    {
        $this->object->setSecondName('Машарина');
        $this->assertEquals('2-Машарина', $this->object->genderAutoDetect().'-Машарина');
    }
    public function testGenDetect1541()
    {
        $this->object->setSecondName('Машир');
        $this->assertEquals('2-Машир', $this->object->genderAutoDetect().'-Машир');
    }
    public function testGenDetect1542()
    {
        $this->object->setSecondName('Медведева');
        $this->assertEquals('2-Медведева', $this->object->genderAutoDetect().'-Медведева');
    }
    public function testGenDetect1543()
    {
        $this->object->setSecondName('Медникова');
        $this->assertEquals('2-Медникова', $this->object->genderAutoDetect().'-Медникова');
    }
    public function testGenDetect1544()
    {
        $this->object->setSecondName('Меледина');
        $this->assertEquals('2-Меледина', $this->object->genderAutoDetect().'-Меледина');
    }
    public function testGenDetect1545()
    {
        $this->object->setSecondName('Мелехова');
        $this->assertEquals('2-Мелехова', $this->object->genderAutoDetect().'-Мелехова');
    }
    public function testGenDetect1546()
    {
        $this->object->setSecondName('Меликова');
        $this->assertEquals('2-Меликова', $this->object->genderAutoDetect().'-Меликова');
    }
    public function testGenDetect1547()
    {
        $this->object->setSecondName('Мельникова');
        $this->assertEquals('2-Мельникова', $this->object->genderAutoDetect().'-Мельникова');
    }
    public function testGenDetect1548()
    {
        $this->object->setSecondName('Меркушева');
        $this->assertEquals('2-Меркушева', $this->object->genderAutoDetect().'-Меркушева');
    }
    public function testGenDetect1549()
    {
        $this->object->setSecondName('Мещерякова');
        $this->assertEquals('2-Мещерякова', $this->object->genderAutoDetect().'-Мещерякова');
    }
    public function testGenDetect1550()
    {
        $this->object->setSecondName('Мигунова');
        $this->assertEquals('2-Мигунова', $this->object->genderAutoDetect().'-Мигунова');
    }
    public function testGenDetect1551()
    {
        $this->object->setSecondName('Мизенова');
        $this->assertEquals('2-Мизенова', $this->object->genderAutoDetect().'-Мизенова');
    }
    public function testGenDetect1552()
    {
        $this->object->setSecondName('Милехина');
        $this->assertEquals('2-Милехина', $this->object->genderAutoDetect().'-Милехина');
    }
    public function testGenDetect1553()
    {
        $this->object->setSecondName('Милорадова');
        $this->assertEquals('2-Милорадова', $this->object->genderAutoDetect().'-Милорадова');
    }
    public function testGenDetect1554()
    {
        $this->object->setSecondName('Милюкова');
        $this->assertEquals('2-Милюкова', $this->object->genderAutoDetect().'-Милюкова');
    }
    public function testGenDetect1555()
    {
        $this->object->setSecondName('Милютина');
        $this->assertEquals('2-Милютина', $this->object->genderAutoDetect().'-Милютина');
    }
    public function testGenDetect1556()
    {
        $this->object->setSecondName('Минаеева');
        $this->assertEquals('2-Минаеева', $this->object->genderAutoDetect().'-Минаеева');
    }
    public function testGenDetect1557()
    {
        $this->object->setSecondName('Минаина');
        $this->assertEquals('2-Минаина', $this->object->genderAutoDetect().'-Минаина');
    }
    public function testGenDetect1558()
    {
        $this->object->setSecondName('Минакина');
        $this->assertEquals('2-Минакина', $this->object->genderAutoDetect().'-Минакина');
    }
    public function testGenDetect1559()
    {
        $this->object->setSecondName('Миронова');
        $this->assertEquals('2-Миронова', $this->object->genderAutoDetect().'-Миронова');
    }
    public function testGenDetect1560()
    {
        $this->object->setSecondName('Митина');
        $this->assertEquals('2-Митина', $this->object->genderAutoDetect().'-Митина');
    }
    public function testGenDetect1561()
    {
        $this->object->setSecondName('Митрофанова');
        $this->assertEquals('2-Митрофанова', $this->object->genderAutoDetect().'-Митрофанова');
    }
    public function testGenDetect1562()
    {
        $this->object->setSecondName('Михайлова');
        $this->assertEquals('2-Михайлова', $this->object->genderAutoDetect().'-Михайлова');
    }
    public function testGenDetect1563()
    {
        $this->object->setSecondName('Михеева');
        $this->assertEquals('2-Михеева', $this->object->genderAutoDetect().'-Михеева');
    }
    public function testGenDetect1564()
    {
        $this->object->setSecondName('Мишутина');
        $this->assertEquals('2-Мишутина', $this->object->genderAutoDetect().'-Мишутина');
    }
    public function testGenDetect1565()
    {
        $this->object->setSecondName('Моисеева');
        $this->assertEquals('2-Моисеева', $this->object->genderAutoDetect().'-Моисеева');
    }
    public function testGenDetect1566()
    {
        $this->object->setSecondName('Молчанова');
        $this->assertEquals('2-Молчанова', $this->object->genderAutoDetect().'-Молчанова');
    }
    public function testGenDetect1567()
    {
        $this->object->setSecondName('Моренова');
        $this->assertEquals('2-Моренова', $this->object->genderAutoDetect().'-Моренова');
    }
    public function testGenDetect1568()
    {
        $this->object->setSecondName('Морозова');
        $this->assertEquals('2-Морозова', $this->object->genderAutoDetect().'-Морозова');
    }
    public function testGenDetect1569()
    {
        $this->object->setSecondName('Мосалева');
        $this->assertEquals('2-Мосалева', $this->object->genderAutoDetect().'-Мосалева');
    }
    public function testGenDetect1570()
    {
        $this->object->setSecondName('Москвина');
        $this->assertEquals('2-Москвина', $this->object->genderAutoDetect().'-Москвина');
    }
    public function testGenDetect1571()
    {
        $this->object->setSecondName('Муратова');
        $this->assertEquals('2-Муратова', $this->object->genderAutoDetect().'-Муратова');
    }
    public function testGenDetect1572()
    {
        $this->object->setSecondName('Мухортова');
        $this->assertEquals('2-Мухортова', $this->object->genderAutoDetect().'-Мухортова');
    }
    public function testGenDetect1573()
    {
        $this->object->setSecondName('Мягкова');
        $this->assertEquals('2-Мягкова', $this->object->genderAutoDetect().'-Мягкова');
    }
    public function testGenDetect1574()
    {
        $this->object->setSecondName('Мясникова');
        $this->assertEquals('2-Мясникова', $this->object->genderAutoDetect().'-Мясникова');
    }
    public function testGenDetect1575()
    {
        $this->object->setSecondName('Мятлева');
        $this->assertEquals('2-Мятлева', $this->object->genderAutoDetect().'-Мятлева');
    }
    public function testGenDetect1576()
    {
        $this->object->setSecondName('Набатова');
        $this->assertEquals('2-Набатова', $this->object->genderAutoDetect().'-Набатова');
    }
    public function testGenDetect1577()
    {
        $this->object->setSecondName('Нардина');
        $this->assertEquals('2-Нардина', $this->object->genderAutoDetect().'-Нардина');
    }
    public function testGenDetect1578()
    {
        $this->object->setSecondName('Наумова');
        $this->assertEquals('2-Наумова', $this->object->genderAutoDetect().'-Наумова');
    }
    public function testGenDetect1579()
    {
        $this->object->setSecondName('Невзорова');
        $this->assertEquals('2-Невзорова', $this->object->genderAutoDetect().'-Невзорова');
    }
    public function testGenDetect1580()
    {
        $this->object->setSecondName('Неделяева');
        $this->assertEquals('2-Неделяева', $this->object->genderAutoDetect().'-Неделяева');
    }
    public function testGenDetect1581()
    {
        $this->object->setSecondName('Нежданова');
        $this->assertEquals('2-Нежданова', $this->object->genderAutoDetect().'-Нежданова');
    }
    public function testGenDetect1582()
    {
        $this->object->setSecondName('Ненашева');
        $this->assertEquals('2-Ненашева', $this->object->genderAutoDetect().'-Ненашева');
    }
    public function testGenDetect1583()
    {
        $this->object->setSecondName('Нестерова');
        $this->assertEquals('2-Нестерова', $this->object->genderAutoDetect().'-Нестерова');
    }
    public function testGenDetect1584()
    {
        $this->object->setSecondName('Нечаева');
        $this->assertEquals('2-Нечаева', $this->object->genderAutoDetect().'-Нечаева');
    }
    public function testGenDetect1585()
    {
        $this->object->setSecondName('Никитина');
        $this->assertEquals('2-Никитина', $this->object->genderAutoDetect().'-Никитина');
    }
    public function testGenDetect1586()
    {
        $this->object->setSecondName('Никифорова');
        $this->assertEquals('2-Никифорова', $this->object->genderAutoDetect().'-Никифорова');
    }
    public function testGenDetect1587()
    {
        $this->object->setSecondName('Николаева');
        $this->assertEquals('2-Николаева', $this->object->genderAutoDetect().'-Николаева');
    }
    public function testGenDetect1588()
    {
        $this->object->setSecondName('Никонова');
        $this->assertEquals('2-Никонова', $this->object->genderAutoDetect().'-Никонова');
    }
    public function testGenDetect1589()
    {
        $this->object->setSecondName('Никулина');
        $this->assertEquals('2-Никулина', $this->object->genderAutoDetect().'-Никулина');
    }
    public function testGenDetect1590()
    {
        $this->object->setSecondName('Некрасова');
        $this->assertEquals('2-Некрасова', $this->object->genderAutoDetect().'-Некрасова');
    }
    public function testGenDetect1591()
    {
        $this->object->setSecondName('Новикова');
        $this->assertEquals('2-Новикова', $this->object->genderAutoDetect().'-Новикова');
    }
    public function testGenDetect1592()
    {
        $this->object->setSecondName('Новосельцева');
        $this->assertEquals('2-Новосельцева', $this->object->genderAutoDetect().'-Новосельцева');
    }
    public function testGenDetect1593()
    {
        $this->object->setSecondName('Носачёва');
        $this->assertEquals('2-Носачёва', $this->object->genderAutoDetect().'-Носачёва');
    }
    public function testGenDetect1594()
    {
        $this->object->setSecondName('Носкова');
        $this->assertEquals('2-Носкова', $this->object->genderAutoDetect().'-Носкова');
    }
    public function testGenDetect1595()
    {
        $this->object->setSecondName('Носова');
        $this->assertEquals('2-Носова', $this->object->genderAutoDetect().'-Носова');
    }
    public function testGenDetect1596()
    {
        $this->object->setSecondName('Оболенская');
        $this->assertEquals('2-Оболенская', $this->object->genderAutoDetect().'-Оболенская');
    }
    public function testGenDetect1597()
    {
        $this->object->setSecondName('Оборина');
        $this->assertEquals('2-Оборина', $this->object->genderAutoDetect().'-Оборина');
    }
    public function testGenDetect1598()
    {
        $this->object->setSecondName('Образцова');
        $this->assertEquals('2-Образцова', $this->object->genderAutoDetect().'-Образцова');
    }
    public function testGenDetect1599()
    {
        $this->object->setSecondName('Обухова');
        $this->assertEquals('2-Обухова', $this->object->genderAutoDetect().'-Обухова');
    }
    public function testGenDetect1600()
    {
        $this->object->setSecondName('Овечкина');
        $this->assertEquals('2-Овечкина', $this->object->genderAutoDetect().'-Овечкина');
    }
    public function testGenDetect1601()
    {
        $this->object->setSecondName('Огородникова');
        $this->assertEquals('2-Огородникова', $this->object->genderAutoDetect().'-Огородникова');
    }
    public function testGenDetect1602()
    {
        $this->object->setSecondName('Огурцова');
        $this->assertEquals('2-Огурцова', $this->object->genderAutoDetect().'-Огурцова');
    }
    public function testGenDetect1603()
    {
        $this->object->setSecondName('Озерова');
        $this->assertEquals('2-Озерова', $this->object->genderAutoDetect().'-Озерова');
    }
    public function testGenDetect1604()
    {
        $this->object->setSecondName('Ольховская');
        $this->assertEquals('2-Ольховская', $this->object->genderAutoDetect().'-Ольховская');
    }
    public function testGenDetect1605()
    {
        $this->object->setSecondName('Онегина');
        $this->assertEquals('2-Онегина', $this->object->genderAutoDetect().'-Онегина');
    }
    public function testGenDetect1606()
    {
        $this->object->setSecondName('Опокина');
        $this->assertEquals('2-Опокина', $this->object->genderAutoDetect().'-Опокина');
    }
    public function testGenDetect1607()
    {
        $this->object->setSecondName('Орлова');
        $this->assertEquals('2-Орлова', $this->object->genderAutoDetect().'-Орлова');
    }
    public function testGenDetect1608()
    {
        $this->object->setSecondName('Осинцева');
        $this->assertEquals('2-Осинцева', $this->object->genderAutoDetect().'-Осинцева');
    }
    public function testGenDetect1609()
    {
        $this->object->setSecondName('Остальцева');
        $this->assertEquals('2-Остальцева', $this->object->genderAutoDetect().'-Остальцева');
    }
    public function testGenDetect1610()
    {
        $this->object->setSecondName('Остапюк');
        $this->assertEquals('2-Остапюк', $this->object->genderAutoDetect().'-Остапюк');
    }
    public function testGenDetect1611()
    {
        $this->object->setSecondName('Островерхова');
        $this->assertEquals('2-Островерхова', $this->object->genderAutoDetect().'-Островерхова');
    }
    public function testGenDetect1612()
    {
        $this->object->setSecondName('Островская');
        $this->assertEquals('2-Островская', $this->object->genderAutoDetect().'-Островская');
    }
    public function testGenDetect1613()
    {
        $this->object->setSecondName('Павлова');
        $this->assertEquals('2-Павлова', $this->object->genderAutoDetect().'-Павлова');
    }
    public function testGenDetect1614()
    {
        $this->object->setSecondName('Панарина');
        $this->assertEquals('2-Панарина', $this->object->genderAutoDetect().'-Панарина');
    }
    public function testGenDetect1615()
    {
        $this->object->setSecondName('Панина');
        $this->assertEquals('2-Панина', $this->object->genderAutoDetect().'-Панина');
    }
    public function testGenDetect1616()
    {
        $this->object->setSecondName('Панкина');
        $this->assertEquals('2-Панкина', $this->object->genderAutoDetect().'-Панкина');
    }
    public function testGenDetect1617()
    {
        $this->object->setSecondName('Панкова');
        $this->assertEquals('2-Панкова', $this->object->genderAutoDetect().'-Панкова');
    }
    public function testGenDetect1618()
    {
        $this->object->setSecondName('Панфилова');
        $this->assertEquals('2-Панфилова', $this->object->genderAutoDetect().'-Панфилова');
    }
    public function testGenDetect1619()
    {
        $this->object->setSecondName('Панькив');
        $this->assertEquals('2-Панькив', $this->object->genderAutoDetect().'-Панькив');
    }
    public function testGenDetect1620()
    {
        $this->object->setSecondName('Папанова');
        $this->assertEquals('2-Папанова', $this->object->genderAutoDetect().'-Папанова');
    }
    public function testGenDetect1621()
    {
        $this->object->setSecondName('Пахомова');
        $this->assertEquals('2-Пахомова', $this->object->genderAutoDetect().'-Пахомова');
    }
    public function testGenDetect1622()
    {
        $this->object->setSecondName('Пенкина');
        $this->assertEquals('2-Пенкина', $this->object->genderAutoDetect().'-Пенкина');
    }
    public function testGenDetect1623()
    {
        $this->object->setSecondName('Первак');
        $this->assertEquals('2-Первак', $this->object->genderAutoDetect().'-Первак');
    }
    public function testGenDetect1624()
    {
        $this->object->setSecondName('Переверзева');
        $this->assertEquals('2-Переверзева', $this->object->genderAutoDetect().'-Переверзева');
    }
    public function testGenDetect1625()
    {
        $this->object->setSecondName('Перевёртова');
        $this->assertEquals('2-Перевёртова', $this->object->genderAutoDetect().'-Перевёртова');
    }
    public function testGenDetect1626()
    {
        $this->object->setSecondName('Пересторонина');
        $this->assertEquals('2-Пересторонина', $this->object->genderAutoDetect().'-Пересторонина');
    }
    public function testGenDetect1627()
    {
        $this->object->setSecondName('Перехваткина');
        $this->assertEquals('2-Перехваткина', $this->object->genderAutoDetect().'-Перехваткина');
    }
    public function testGenDetect1628()
    {
        $this->object->setSecondName('Перова');
        $this->assertEquals('2-Перова', $this->object->genderAutoDetect().'-Перова');
    }
    public function testGenDetect1629()
    {
        $this->object->setSecondName('Перьмякова');
        $this->assertEquals('2-Перьмякова', $this->object->genderAutoDetect().'-Перьмякова');
    }
    public function testGenDetect1630()
    {
        $this->object->setSecondName('Пестова');
        $this->assertEquals('2-Пестова', $this->object->genderAutoDetect().'-Пестова');
    }
    public function testGenDetect1631()
    {
        $this->object->setSecondName('Петрова');
        $this->assertEquals('2-Петрова', $this->object->genderAutoDetect().'-Петрова');
    }
    public function testGenDetect1632()
    {
        $this->object->setSecondName('Петухова');
        $this->assertEquals('2-Петухова', $this->object->genderAutoDetect().'-Петухова');
    }
    public function testGenDetect1633()
    {
        $this->object->setSecondName('Печеникова');
        $this->assertEquals('2-Печеникова', $this->object->genderAutoDetect().'-Печеникова');
    }
    public function testGenDetect1634()
    {
        $this->object->setSecondName('Пивоварова');
        $this->assertEquals('2-Пивоварова', $this->object->genderAutoDetect().'-Пивоварова');
    }
    public function testGenDetect1635()
    {
        $this->object->setSecondName('Пирогова');
        $this->assertEquals('2-Пирогова', $this->object->genderAutoDetect().'-Пирогова');
    }
    public function testGenDetect1636()
    {
        $this->object->setSecondName('Пирожкова');
        $this->assertEquals('2-Пирожкова', $this->object->genderAutoDetect().'-Пирожкова');
    }
    public function testGenDetect1637()
    {
        $this->object->setSecondName('Пичугина');
        $this->assertEquals('2-Пичугина', $this->object->genderAutoDetect().'-Пичугина');
    }
    public function testGenDetect1638()
    {
        $this->object->setSecondName('Погодина');
        $this->assertEquals('2-Погодина', $this->object->genderAutoDetect().'-Погодина');
    }
    public function testGenDetect1639()
    {
        $this->object->setSecondName('Погребнова');
        $this->assertEquals('2-Погребнова', $this->object->genderAutoDetect().'-Погребнова');
    }
    public function testGenDetect1640()
    {
        $this->object->setSecondName('Подшивалова');
        $this->assertEquals('2-Подшивалова', $this->object->genderAutoDetect().'-Подшивалова');
    }
    public function testGenDetect1641()
    {
        $this->object->setSecondName('Позднякова');
        $this->assertEquals('2-Позднякова', $this->object->genderAutoDetect().'-Позднякова');
    }
    public function testGenDetect1642()
    {
        $this->object->setSecondName('Покровская');
        $this->assertEquals('2-Покровская', $this->object->genderAutoDetect().'-Покровская');
    }
    public function testGenDetect1643()
    {
        $this->object->setSecondName('Поливанова');
        $this->assertEquals('2-Поливанова', $this->object->genderAutoDetect().'-Поливанова');
    }
    public function testGenDetect1644()
    {
        $this->object->setSecondName('Полушина');
        $this->assertEquals('2-Полушина', $this->object->genderAutoDetect().'-Полушина');
    }
    public function testGenDetect1645()
    {
        $this->object->setSecondName('Полищук');
        $this->assertEquals('2-Полищук', $this->object->genderAutoDetect().'-Полищук');
    }
    public function testGenDetect1646()
    {
        $this->object->setSecondName('Полторак');
        $this->assertEquals('2-Полторак', $this->object->genderAutoDetect().'-Полторак');
    }
    public function testGenDetect1647()
    {
        $this->object->setSecondName('Полякова');
        $this->assertEquals('2-Полякова', $this->object->genderAutoDetect().'-Полякова');
    }
    public function testGenDetect1648()
    {
        $this->object->setSecondName('Поникарова');
        $this->assertEquals('2-Поникарова', $this->object->genderAutoDetect().'-Поникарова');
    }
    public function testGenDetect1649()
    {
        $this->object->setSecondName('Пономарёва');
        $this->assertEquals('2-Пономарёва', $this->object->genderAutoDetect().'-Пономарёва');
    }
    public function testGenDetect1650()
    {
        $this->object->setSecondName('Пончикова');
        $this->assertEquals('2-Пончикова', $this->object->genderAutoDetect().'-Пончикова');
    }
    public function testGenDetect1651()
    {
        $this->object->setSecondName('Попова');
        $this->assertEquals('2-Попова', $this->object->genderAutoDetect().'-Попова');
    }
    public function testGenDetect1652()
    {
        $this->object->setSecondName('Попырина');
        $this->assertEquals('2-Попырина', $this->object->genderAutoDetect().'-Попырина');
    }
    public function testGenDetect1653()
    {
        $this->object->setSecondName('Посохова');
        $this->assertEquals('2-Посохова', $this->object->genderAutoDetect().'-Посохова');
    }
    public function testGenDetect1654()
    {
        $this->object->setSecondName('Потапова');
        $this->assertEquals('2-Потапова', $this->object->genderAutoDetect().'-Потапова');
    }
    public function testGenDetect1655()
    {
        $this->object->setSecondName('Потёмкина');
        $this->assertEquals('2-Потёмкина', $this->object->genderAutoDetect().'-Потёмкина');
    }
    public function testGenDetect1656()
    {
        $this->object->setSecondName('Праздникова');
        $this->assertEquals('2-Праздникова', $this->object->genderAutoDetect().'-Праздникова');
    }
    public function testGenDetect1657()
    {
        $this->object->setSecondName('Примакова');
        $this->assertEquals('2-Примакова', $this->object->genderAutoDetect().'-Примакова');
    }
    public function testGenDetect1658()
    {
        $this->object->setSecondName('Приходько');
        $this->assertEquals('2-Приходько', $this->object->genderAutoDetect().'-Приходько');
    }
    public function testGenDetect1659()
    {
        $this->object->setSecondName('Проничева');
        $this->assertEquals('2-Проничева', $this->object->genderAutoDetect().'-Проничева');
    }
    public function testGenDetect1660()
    {
        $this->object->setSecondName('Протасова');
        $this->assertEquals('2-Протасова', $this->object->genderAutoDetect().'-Протасова');
    }
    public function testGenDetect1661()
    {
        $this->object->setSecondName('Прохорова');
        $this->assertEquals('2-Прохорова', $this->object->genderAutoDetect().'-Прохорова');
    }
    public function testGenDetect1662()
    {
        $this->object->setSecondName('Пугачёв');
        $this->assertEquals('2-Пугачёв', $this->object->genderAutoDetect().'-Пугачёв');
    }
    public function testGenDetect1663()
    {
        $this->object->setSecondName('Пугина');
        $this->assertEquals('2-Пугина', $this->object->genderAutoDetect().'-Пугина');
    }
    public function testGenDetect1664()
    {
        $this->object->setSecondName('Пузанова');
        $this->assertEquals('2-Пузанова', $this->object->genderAutoDetect().'-Пузанова');
    }
    public function testGenDetect1665()
    {
        $this->object->setSecondName('Путилина');
        $this->assertEquals('2-Путилина', $this->object->genderAutoDetect().'-Путилина');
    }
    public function testGenDetect1666()
    {
        $this->object->setSecondName('Путина');
        $this->assertEquals('2-Путина', $this->object->genderAutoDetect().'-Путина');
    }
    public function testGenDetect1667()
    {
        $this->object->setSecondName('Путятина');
        $this->assertEquals('2-Путятина', $this->object->genderAutoDetect().'-Путятина');
    }
    public function testGenDetect1668()
    {
        $this->object->setSecondName('Пушкина');
        $this->assertEquals('2-Пушкина', $this->object->genderAutoDetect().'-Пушкина');
    }
    public function testGenDetect1669()
    {
        $this->object->setSecondName('Пыжалова');
        $this->assertEquals('2-Пыжалова', $this->object->genderAutoDetect().'-Пыжалова');
    }
    public function testGenDetect1670()
    {
        $this->object->setSecondName('Пырьева');
        $this->assertEquals('2-Пырьева', $this->object->genderAutoDetect().'-Пырьева');
    }
    public function testGenDetect1671()
    {
        $this->object->setSecondName('Рабинович');
        $this->assertEquals('2-Рабинович', $this->object->genderAutoDetect().'-Рабинович');
    }
    public function testGenDetect1672()
    {
        $this->object->setSecondName('Разина');
        $this->assertEquals('2-Разина', $this->object->genderAutoDetect().'-Разина');
    }
    public function testGenDetect1673()
    {
        $this->object->setSecondName('Разуваева');
        $this->assertEquals('2-Разуваева', $this->object->genderAutoDetect().'-Разуваева');
    }
    public function testGenDetect1674()
    {
        $this->object->setSecondName('Распопова');
        $this->assertEquals('2-Распопова', $this->object->genderAutoDetect().'-Распопова');
    }
    public function testGenDetect1675()
    {
        $this->object->setSecondName('Распутина');
        $this->assertEquals('2-Распутина', $this->object->genderAutoDetect().'-Распутина');
    }
    public function testGenDetect1676()
    {
        $this->object->setSecondName('Расторгуева');
        $this->assertEquals('2-Расторгуева', $this->object->genderAutoDetect().'-Расторгуева');
    }
    public function testGenDetect1677()
    {
        $this->object->setSecondName('Ремизова');
        $this->assertEquals('2-Ремизова', $this->object->genderAutoDetect().'-Ремизова');
    }
    public function testGenDetect1678()
    {
        $this->object->setSecondName('Репина');
        $this->assertEquals('2-Репина', $this->object->genderAutoDetect().'-Репина');
    }
    public function testGenDetect1679()
    {
        $this->object->setSecondName('Решетилова');
        $this->assertEquals('2-Решетилова', $this->object->genderAutoDetect().'-Решетилова');
    }
    public function testGenDetect1680()
    {
        $this->object->setSecondName('Решетникова');
        $this->assertEquals('2-Решетникова', $this->object->genderAutoDetect().'-Решетникова');
    }
    public function testGenDetect1681()
    {
        $this->object->setSecondName('Родзянко');
        $this->assertEquals('2-Родзянко', $this->object->genderAutoDetect().'-Родзянко');
    }
    public function testGenDetect1682()
    {
        $this->object->setSecondName('Рогачёва');
        $this->assertEquals('2-Рогачёва', $this->object->genderAutoDetect().'-Рогачёва');
    }
    public function testGenDetect1683()
    {
        $this->object->setSecondName('Рогова');
        $this->assertEquals('2-Рогова', $this->object->genderAutoDetect().'-Рогова');
    }
    public function testGenDetect1684()
    {
        $this->object->setSecondName('Рогозина');
        $this->assertEquals('2-Рогозина', $this->object->genderAutoDetect().'-Рогозина');
    }
    public function testGenDetect1685()
    {
        $this->object->setSecondName('Рожкова');
        $this->assertEquals('2-Рожкова', $this->object->genderAutoDetect().'-Рожкова');
    }
    public function testGenDetect1686()
    {
        $this->object->setSecondName('Рокоссовская');
        $this->assertEquals('2-Рокоссовская', $this->object->genderAutoDetect().'-Рокоссовская');
    }
    public function testGenDetect1687()
    {
        $this->object->setSecondName('Романова');
        $this->assertEquals('2-Романова', $this->object->genderAutoDetect().'-Романова');
    }
    public function testGenDetect1688()
    {
        $this->object->setSecondName('Ростова');
        $this->assertEquals('2-Ростова', $this->object->genderAutoDetect().'-Ростова');
    }
    public function testGenDetect1689()
    {
        $this->object->setSecondName('Ростовцева');
        $this->assertEquals('2-Ростовцева', $this->object->genderAutoDetect().'-Ростовцева');
    }
    public function testGenDetect1690()
    {
        $this->object->setSecondName('Рудавина');
        $this->assertEquals('2-Рудавина', $this->object->genderAutoDetect().'-Рудавина');
    }
    public function testGenDetect1691()
    {
        $this->object->setSecondName('Румянцева');
        $this->assertEquals('2-Румянцева', $this->object->genderAutoDetect().'-Румянцева');
    }
    public function testGenDetect1692()
    {
        $this->object->setSecondName('Рунова');
        $this->assertEquals('2-Рунова', $this->object->genderAutoDetect().'-Рунова');
    }
    public function testGenDetect1693()
    {
        $this->object->setSecondName('Русакова');
        $this->assertEquals('2-Русакова', $this->object->genderAutoDetect().'-Русакова');
    }
    public function testGenDetect1694()
    {
        $this->object->setSecondName('Русских');
        $this->assertEquals('2-Русских', $this->object->genderAutoDetect().'-Русских');
    }
    public function testGenDetect1695()
    {
        $this->object->setSecondName('Ручкина');
        $this->assertEquals('2-Ручкина', $this->object->genderAutoDetect().'-Ручкина');
    }
    public function testGenDetect1696()
    {
        $this->object->setSecondName('Рыбалкина');
        $this->assertEquals('2-Рыбалкина', $this->object->genderAutoDetect().'-Рыбалкина');
    }
    public function testGenDetect1697()
    {
        $this->object->setSecondName('Рыжанова');
        $this->assertEquals('2-Рыжанова', $this->object->genderAutoDetect().'-Рыжанова');
    }
    public function testGenDetect1698()
    {
        $this->object->setSecondName('Рыжкова');
        $this->assertEquals('2-Рыжкова', $this->object->genderAutoDetect().'-Рыжкова');
    }
    public function testGenDetect1699()
    {
        $this->object->setSecondName('Рыжова');
        $this->assertEquals('2-Рыжова', $this->object->genderAutoDetect().'-Рыжова');
    }
    public function testGenDetect1700()
    {
        $this->object->setSecondName('Рытина');
        $this->assertEquals('2-Рытина', $this->object->genderAutoDetect().'-Рытина');
    }
    public function testGenDetect1701()
    {
        $this->object->setSecondName('Рыченкова');
        $this->assertEquals('2-Рыченкова', $this->object->genderAutoDetect().'-Рыченкова');
    }
    public function testGenDetect1702()
    {
        $this->object->setSecondName('Рябкова');
        $this->assertEquals('2-Рябкова', $this->object->genderAutoDetect().'-Рябкова');
    }
    public function testGenDetect1703()
    {
        $this->object->setSecondName('Рябова');
        $this->assertEquals('2-Рябова', $this->object->genderAutoDetect().'-Рябова');
    }
    public function testGenDetect1704()
    {
        $this->object->setSecondName('Ряхина');
        $this->assertEquals('2-Ряхина', $this->object->genderAutoDetect().'-Ряхина');
    }
    public function testGenDetect1705()
    {
        $this->object->setSecondName('Сабитова');
        $this->assertEquals('2-Сабитова', $this->object->genderAutoDetect().'-Сабитова');
    }
    public function testGenDetect1706()
    {
        $this->object->setSecondName('Савасина');
        $this->assertEquals('2-Савасина', $this->object->genderAutoDetect().'-Савасина');
    }
    public function testGenDetect1707()
    {
        $this->object->setSecondName('Савинкова');
        $this->assertEquals('2-Савинкова', $this->object->genderAutoDetect().'-Савинкова');
    }
    public function testGenDetect1708()
    {
        $this->object->setSecondName('Савенкова');
        $this->assertEquals('2-Савенкова', $this->object->genderAutoDetect().'-Савенкова');
    }
    public function testGenDetect1709()
    {
        $this->object->setSecondName('Саврасова');
        $this->assertEquals('2-Саврасова', $this->object->genderAutoDetect().'-Саврасова');
    }
    public function testGenDetect1710()
    {
        $this->object->setSecondName('Садыкова');
        $this->assertEquals('2-Садыкова', $this->object->genderAutoDetect().'-Садыкова');
    }
    public function testGenDetect1711()
    {
        $this->object->setSecondName('Сазонова');
        $this->assertEquals('2-Сазонова', $this->object->genderAutoDetect().'-Сазонова');
    }
    public function testGenDetect1712()
    {
        $this->object->setSecondName('Салко');
        $this->assertEquals('2-Салко', $this->object->genderAutoDetect().'-Салко');
    }
    public function testGenDetect1713()
    {
        $this->object->setSecondName('Салькова');
        $this->assertEquals('2-Салькова', $this->object->genderAutoDetect().'-Салькова');
    }
    public function testGenDetect1714()
    {
        $this->object->setSecondName('Сальникова');
        $this->assertEquals('2-Сальникова', $this->object->genderAutoDetect().'-Сальникова');
    }
    public function testGenDetect1715()
    {
        $this->object->setSecondName('Самойлова');
        $this->assertEquals('2-Самойлова', $this->object->genderAutoDetect().'-Самойлова');
    }
    public function testGenDetect1716()
    {
        $this->object->setSecondName('Самохина');
        $this->assertEquals('2-Самохина', $this->object->genderAutoDetect().'-Самохина');
    }
    public function testGenDetect1717()
    {
        $this->object->setSecondName('Самсонова');
        $this->assertEquals('2-Самсонова', $this->object->genderAutoDetect().'-Самсонова');
    }
    public function testGenDetect1718()
    {
        $this->object->setSecondName('Санникова');
        $this->assertEquals('2-Санникова', $this->object->genderAutoDetect().'-Санникова');
    }
    public function testGenDetect1719()
    {
        $this->object->setSecondName('Сапогова');
        $this->assertEquals('2-Сапогова', $this->object->genderAutoDetect().'-Сапогова');
    }
    public function testGenDetect1720()
    {
        $this->object->setSecondName('Сапожникова');
        $this->assertEquals('2-Сапожникова', $this->object->genderAutoDetect().'-Сапожникова');
    }
    public function testGenDetect1721()
    {
        $this->object->setSecondName('Сафиюлина');
        $this->assertEquals('2-Сафиюлина', $this->object->genderAutoDetect().'-Сафиюлина');
    }
    public function testGenDetect1722()
    {
        $this->object->setSecondName('Сахарова');
        $this->assertEquals('2-Сахарова', $this->object->genderAutoDetect().'-Сахарова');
    }
    public function testGenDetect1723()
    {
        $this->object->setSecondName('Свалова');
        $this->assertEquals('2-Свалова', $this->object->genderAutoDetect().'-Свалова');
    }
    public function testGenDetect1724()
    {
        $this->object->setSecondName('Северинова');
        $this->assertEquals('2-Северинова', $this->object->genderAutoDetect().'-Северинова');
    }
    public function testGenDetect1725()
    {
        $this->object->setSecondName('Севастьянова');
        $this->assertEquals('2-Севастьянова', $this->object->genderAutoDetect().'-Севастьянова');
    }
    public function testGenDetect1726()
    {
        $this->object->setSecondName('Седельникова');
        $this->assertEquals('2-Седельникова', $this->object->genderAutoDetect().'-Седельникова');
    }
    public function testGenDetect1727()
    {
        $this->object->setSecondName('Седова');
        $this->assertEquals('2-Седова', $this->object->genderAutoDetect().'-Седова');
    }
    public function testGenDetect1728()
    {
        $this->object->setSecondName('Селезнёва');
        $this->assertEquals('2-Селезнёва', $this->object->genderAutoDetect().'-Селезнёва');
    }
    public function testGenDetect1729()
    {
        $this->object->setSecondName('Селиванова');
        $this->assertEquals('2-Селиванова', $this->object->genderAutoDetect().'-Селиванова');
    }
    public function testGenDetect1730()
    {
        $this->object->setSecondName('Семёнова');
        $this->assertEquals('2-Семёнова', $this->object->genderAutoDetect().'-Семёнова');
    }
    public function testGenDetect1731()
    {
        $this->object->setSecondName('Семичевская');
        $this->assertEquals('2-Семичевская', $this->object->genderAutoDetect().'-Семичевская');
    }
    public function testGenDetect1732()
    {
        $this->object->setSecondName('Сенькина');
        $this->assertEquals('2-Сенькина', $this->object->genderAutoDetect().'-Сенькина');
    }
    public function testGenDetect1733()
    {
        $this->object->setSecondName('Сереброва');
        $this->assertEquals('2-Сереброва', $this->object->genderAutoDetect().'-Сереброва');
    }
    public function testGenDetect1734()
    {
        $this->object->setSecondName('Серебрякова');
        $this->assertEquals('2-Серебрякова', $this->object->genderAutoDetect().'-Серебрякова');
    }
    public function testGenDetect1735()
    {
        $this->object->setSecondName('Серёгина');
        $this->assertEquals('2-Серёгина', $this->object->genderAutoDetect().'-Серёгина');
    }
    public function testGenDetect1736()
    {
        $this->object->setSecondName('Серова');
        $this->assertEquals('2-Серова', $this->object->genderAutoDetect().'-Серова');
    }
    public function testGenDetect1737()
    {
        $this->object->setSecondName('Серпинова');
        $this->assertEquals('2-Серпинова', $this->object->genderAutoDetect().'-Серпинова');
    }
    public function testGenDetect1738()
    {
        $this->object->setSecondName('Семянина');
        $this->assertEquals('2-Семянина', $this->object->genderAutoDetect().'-Семянина');
    }
    public function testGenDetect1739()
    {
        $this->object->setSecondName('Сёмина');
        $this->assertEquals('2-Сёмина', $this->object->genderAutoDetect().'-Сёмина');
    }
    public function testGenDetect1740()
    {
        $this->object->setSecondName('Серёгина');
        $this->assertEquals('2-Серёгина', $this->object->genderAutoDetect().'-Серёгина');
    }
    public function testGenDetect1741()
    {
        $this->object->setSecondName('Сеченова');
        $this->assertEquals('2-Сеченова', $this->object->genderAutoDetect().'-Сеченова');
    }
    public function testGenDetect1742()
    {
        $this->object->setSecondName('Сивакова');
        $this->assertEquals('2-Сивакова', $this->object->genderAutoDetect().'-Сивакова');
    }
    public function testGenDetect1743()
    {
        $this->object->setSecondName('Сигаева');
        $this->assertEquals('2-Сигаева', $this->object->genderAutoDetect().'-Сигаева');
    }
    public function testGenDetect1744()
    {
        $this->object->setSecondName('Сигачёва');
        $this->assertEquals('2-Сигачёва', $this->object->genderAutoDetect().'-Сигачёва');
    }
    public function testGenDetect1745()
    {
        $this->object->setSecondName('Сидорова');
        $this->assertEquals('2-Сидорова', $this->object->genderAutoDetect().'-Сидорова');
    }
    public function testGenDetect1746()
    {
        $this->object->setSecondName('Сизова');
        $this->assertEquals('2-Сизова', $this->object->genderAutoDetect().'-Сизова');
    }
    public function testGenDetect1747()
    {
        $this->object->setSecondName('Сизая');
        $this->assertEquals('2-Сизая', $this->object->genderAutoDetect().'-Сизая');
    }
    public function testGenDetect1748()
    {
        $this->object->setSecondName('Силиванова');
        $this->assertEquals('2-Силиванова', $this->object->genderAutoDetect().'-Силиванова');
    }
    public function testGenDetect1749()
    {
        $this->object->setSecondName('Силина');
        $this->assertEquals('2-Силина', $this->object->genderAutoDetect().'-Силина');
    }
    public function testGenDetect1750()
    {
        $this->object->setSecondName('Сильвестрова');
        $this->assertEquals('2-Сильвестрова', $this->object->genderAutoDetect().'-Сильвестрова');
    }
    public function testGenDetect1751()
    {
        $this->object->setSecondName('Силивёстрова');
        $this->assertEquals('2-Силивёстрова', $this->object->genderAutoDetect().'-Силивёстрова');
    }
    public function testGenDetect1752()
    {
        $this->object->setSecondName('Силаева');
        $this->assertEquals('2-Силаева', $this->object->genderAutoDetect().'-Силаева');
    }
    public function testGenDetect1753()
    {
        $this->object->setSecondName('Силиванова');
        $this->assertEquals('2-Силиванова', $this->object->genderAutoDetect().'-Силиванова');
    }
    public function testGenDetect1754()
    {
        $this->object->setSecondName('Скворцова');
        $this->assertEquals('2-Скворцова', $this->object->genderAutoDetect().'-Скворцова');
    }
    public function testGenDetect1755()
    {
        $this->object->setSecondName('Скрябина');
        $this->assertEquals('2-Скрябина', $this->object->genderAutoDetect().'-Скрябина');
    }
    public function testGenDetect1756()
    {
        $this->object->setSecondName('Скоробогатова');
        $this->assertEquals('2-Скоробогатова', $this->object->genderAutoDetect().'-Скоробогатова');
    }
    public function testGenDetect1757()
    {
        $this->object->setSecondName('Скороходова');
        $this->assertEquals('2-Скороходова', $this->object->genderAutoDetect().'-Скороходова');
    }
    public function testGenDetect1758()
    {
        $this->object->setSecondName('Скуратова');
        $this->assertEquals('2-Скуратова', $this->object->genderAutoDetect().'-Скуратова');
    }
    public function testGenDetect1759()
    {
        $this->object->setSecondName('Слобожанина');
        $this->assertEquals('2-Слобожанина', $this->object->genderAutoDetect().'-Слобожанина');
    }
    public function testGenDetect1760()
    {
        $this->object->setSecondName('Случевская');
        $this->assertEquals('2-Случевская', $this->object->genderAutoDetect().'-Случевская');
    }
    public function testGenDetect1761()
    {
        $this->object->setSecondName('Смирнитская');
        $this->assertEquals('2-Смирнитская', $this->object->genderAutoDetect().'-Смирнитская');
    }
    public function testGenDetect1762()
    {
        $this->object->setSecondName('Смирнова');
        $this->assertEquals('2-Смирнова', $this->object->genderAutoDetect().'-Смирнова');
    }
    public function testGenDetect1763()
    {
        $this->object->setSecondName('Сметанина');
        $this->assertEquals('2-Сметанина', $this->object->genderAutoDetect().'-Сметанина');
    }
    public function testGenDetect1764()
    {
        $this->object->setSecondName('Смолина');
        $this->assertEquals('2-Смолина', $this->object->genderAutoDetect().'-Смолина');
    }
    public function testGenDetect1765()
    {
        $this->object->setSecondName('Смолянова');
        $this->assertEquals('2-Смолянова', $this->object->genderAutoDetect().'-Смолянова');
    }
    public function testGenDetect1766()
    {
        $this->object->setSecondName('Снаткина');
        $this->assertEquals('2-Снаткина', $this->object->genderAutoDetect().'-Снаткина');
    }
    public function testGenDetect1767()
    {
        $this->object->setSecondName('Снегирёва');
        $this->assertEquals('2-Снегирёва', $this->object->genderAutoDetect().'-Снегирёва');
    }
    public function testGenDetect1768()
    {
        $this->object->setSecondName('Снеткова');
        $this->assertEquals('2-Снеткова', $this->object->genderAutoDetect().'-Снеткова');
    }
    public function testGenDetect1769()
    {
        $this->object->setSecondName('Соболева');
        $this->assertEquals('2-Соболева', $this->object->genderAutoDetect().'-Соболева');
    }
    public function testGenDetect1770()
    {
        $this->object->setSecondName('Соболевская');
        $this->assertEquals('2-Соболевская', $this->object->genderAutoDetect().'-Соболевская');
    }
    public function testGenDetect1771()
    {
        $this->object->setSecondName('Соколова');
        $this->assertEquals('2-Соколова', $this->object->genderAutoDetect().'-Соколова');
    }
    public function testGenDetect1772()
    {
        $this->object->setSecondName('Солдатова');
        $this->assertEquals('2-Солдатова', $this->object->genderAutoDetect().'-Солдатова');
    }
    public function testGenDetect1773()
    {
        $this->object->setSecondName('Соловьёва');
        $this->assertEquals('2-Соловьёва', $this->object->genderAutoDetect().'-Соловьёва');
    }
    public function testGenDetect1774()
    {
        $this->object->setSecondName('Солодникова');
        $this->assertEquals('2-Солодникова', $this->object->genderAutoDetect().'-Солодникова');
    }
    public function testGenDetect1775()
    {
        $this->object->setSecondName('Соломина');
        $this->assertEquals('2-Соломина', $this->object->genderAutoDetect().'-Соломина');
    }
    public function testGenDetect1776()
    {
        $this->object->setSecondName('Соломонова');
        $this->assertEquals('2-Соломонова', $this->object->genderAutoDetect().'-Соломонова');
    }
    public function testGenDetect1777()
    {
        $this->object->setSecondName('Сопова');
        $this->assertEquals('2-Сопова', $this->object->genderAutoDetect().'-Сопова');
    }
    public function testGenDetect1778()
    {
        $this->object->setSecondName('Сорокина');
        $this->assertEquals('2-Сорокина', $this->object->genderAutoDetect().'-Сорокина');
    }
    public function testGenDetect1779()
    {
        $this->object->setSecondName('Спанова');
        $this->assertEquals('2-Спанова', $this->object->genderAutoDetect().'-Спанова');
    }
    public function testGenDetect1780()
    {
        $this->object->setSecondName('Старикова');
        $this->assertEquals('2-Старикова', $this->object->genderAutoDetect().'-Старикова');
    }
    public function testGenDetect1781()
    {
        $this->object->setSecondName('Староверова');
        $this->assertEquals('2-Староверова', $this->object->genderAutoDetect().'-Староверова');
    }
    public function testGenDetect1782()
    {
        $this->object->setSecondName('Стеблева');
        $this->assertEquals('2-Стеблева', $this->object->genderAutoDetect().'-Стеблева');
    }
    public function testGenDetect1783()
    {
        $this->object->setSecondName('Стегнова');
        $this->assertEquals('2-Стегнова', $this->object->genderAutoDetect().'-Стегнова');
    }
    public function testGenDetect1784()
    {
        $this->object->setSecondName('Степанова');
        $this->assertEquals('2-Степанова', $this->object->genderAutoDetect().'-Степанова');
    }
    public function testGenDetect1785()
    {
        $this->object->setSecondName('Степанкова');
        $this->assertEquals('2-Степанкова', $this->object->genderAutoDetect().'-Степанкова');
    }
    public function testGenDetect1786()
    {
        $this->object->setSecondName('Степашина');
        $this->assertEquals('2-Степашина', $this->object->genderAutoDetect().'-Степашина');
    }
    public function testGenDetect1787()
    {
        $this->object->setSecondName('Стрелкова');
        $this->assertEquals('2-Стрелкова', $this->object->genderAutoDetect().'-Стрелкова');
    }
    public function testGenDetect1788()
    {
        $this->object->setSecondName('Стрекалова');
        $this->assertEquals('2-Стрекалова', $this->object->genderAutoDetect().'-Стрекалова');
    }
    public function testGenDetect1789()
    {
        $this->object->setSecondName('Строганова');
        $this->assertEquals('2-Строганова', $this->object->genderAutoDetect().'-Строганова');
    }
    public function testGenDetect1790()
    {
        $this->object->setSecondName('Субботина');
        $this->assertEquals('2-Субботина', $this->object->genderAutoDetect().'-Субботина');
    }
    public function testGenDetect1791()
    {
        $this->object->setSecondName('Суботина');
        $this->assertEquals('2-Суботина', $this->object->genderAutoDetect().'-Суботина');
    }
    public function testGenDetect1792()
    {
        $this->object->setSecondName('Суворина');
        $this->assertEquals('2-Суворина', $this->object->genderAutoDetect().'-Суворина');
    }
    public function testGenDetect1793()
    {
        $this->object->setSecondName('Суворкина');
        $this->assertEquals('2-Суворкина', $this->object->genderAutoDetect().'-Суворкина');
    }
    public function testGenDetect1794()
    {
        $this->object->setSecondName('Суворова');
        $this->assertEquals('2-Суворова', $this->object->genderAutoDetect().'-Суворова');
    }
    public function testGenDetect1795()
    {
        $this->object->setSecondName('Сунгатулина');
        $this->assertEquals('2-Сунгатулина', $this->object->genderAutoDetect().'-Сунгатулина');
    }
    public function testGenDetect1796()
    {
        $this->object->setSecondName('Сукачева');
        $this->assertEquals('2-Сукачева', $this->object->genderAutoDetect().'-Сукачева');
    }
    public function testGenDetect1797()
    {
        $this->object->setSecondName('Сурикова');
        $this->assertEquals('2-Сурикова', $this->object->genderAutoDetect().'-Сурикова');
    }
    public function testGenDetect1798()
    {
        $this->object->setSecondName('Сусоева');
        $this->assertEquals('2-Сусоева', $this->object->genderAutoDetect().'-Сусоева');
    }
    public function testGenDetect1799()
    {
        $this->object->setSecondName('Сутулина');
        $this->assertEquals('2-Сутулина', $this->object->genderAutoDetect().'-Сутулина');
    }
    public function testGenDetect1800()
    {
        $this->object->setSecondName('Сухорукова');
        $this->assertEquals('2-Сухорукова', $this->object->genderAutoDetect().'-Сухорукова');
    }
    public function testGenDetect1801()
    {
        $this->object->setSecondName('Сучкова');
        $this->assertEquals('2-Сучкова', $this->object->genderAutoDetect().'-Сучкова');
    }
    public function testGenDetect1802()
    {
        $this->object->setSecondName('Сысоева');
        $this->assertEquals('2-Сысоева', $this->object->genderAutoDetect().'-Сысоева');
    }
    public function testGenDetect1803()
    {
        $this->object->setSecondName('Сытникова');
        $this->assertEquals('2-Сытникова', $this->object->genderAutoDetect().'-Сытникова');
    }
    public function testGenDetect1804()
    {
        $this->object->setSecondName('Сычёвка');
        $this->assertEquals('2-Сычёвка', $this->object->genderAutoDetect().'-Сычёвка');
    }
    public function testGenDetect1805()
    {
        $this->object->setSecondName('Сычкина');
        $this->assertEquals('2-Сычкина', $this->object->genderAutoDetect().'-Сычкина');
    }
    public function testGenDetect1806()
    {
        $this->object->setSecondName('Сюсева');
        $this->assertEquals('2-Сюсева', $this->object->genderAutoDetect().'-Сюсева');
    }
    public function testGenDetect1807()
    {
        $this->object->setSecondName('Табакова');
        $this->assertEquals('2-Табакова', $this->object->genderAutoDetect().'-Табакова');
    }
    public function testGenDetect1808()
    {
        $this->object->setSecondName('Табернакулова');
        $this->assertEquals('2-Табернакулова', $this->object->genderAutoDetect().'-Табернакулова');
    }
    public function testGenDetect1809()
    {
        $this->object->setSecondName('Таланова');
        $this->assertEquals('2-Таланова', $this->object->genderAutoDetect().'-Таланова');
    }
    public function testGenDetect1810()
    {
        $this->object->setSecondName('Талалихина');
        $this->assertEquals('2-Талалихина', $this->object->genderAutoDetect().'-Талалихина');
    }
    public function testGenDetect1811()
    {
        $this->object->setSecondName('Танкова');
        $this->assertEquals('2-Танкова', $this->object->genderAutoDetect().'-Танкова');
    }
    public function testGenDetect1812()
    {
        $this->object->setSecondName('Тарасова');
        $this->assertEquals('2-Тарасова', $this->object->genderAutoDetect().'-Тарасова');
    }
    public function testGenDetect1813()
    {
        $this->object->setSecondName('Татарова');
        $this->assertEquals('2-Татарова', $this->object->genderAutoDetect().'-Татарова');
    }
    public function testGenDetect1814()
    {
        $this->object->setSecondName('Твардовская');
        $this->assertEquals('2-Твардовская', $this->object->genderAutoDetect().'-Твардовская');
    }
    public function testGenDetect1815()
    {
        $this->object->setSecondName('Тёмкина');
        $this->assertEquals('2-Тёмкина', $this->object->genderAutoDetect().'-Тёмкина');
    }
    public function testGenDetect1816()
    {
        $this->object->setSecondName('Теплова');
        $this->assertEquals('2-Теплова', $this->object->genderAutoDetect().'-Теплова');
    }
    public function testGenDetect1817()
    {
        $this->object->setSecondName('Теребова');
        $this->assertEquals('2-Теребова', $this->object->genderAutoDetect().'-Теребова');
    }
    public function testGenDetect1818()
    {
        $this->object->setSecondName('Тетерева');
        $this->assertEquals('2-Тетерева', $this->object->genderAutoDetect().'-Тетерева');
    }
    public function testGenDetect1819()
    {
        $this->object->setSecondName('Типалова');
        $this->assertEquals('2-Типалова', $this->object->genderAutoDetect().'-Типалова');
    }
    public function testGenDetect1820()
    {
        $this->object->setSecondName('Титова');
        $this->assertEquals('2-Титова', $this->object->genderAutoDetect().'-Титова');
    }
    public function testGenDetect1821()
    {
        $this->object->setSecondName('Тихвинская');
        $this->assertEquals('2-Тихвинская', $this->object->genderAutoDetect().'-Тихвинская');
    }
    public function testGenDetect1822()
    {
        $this->object->setSecondName('Тихомирова');
        $this->assertEquals('2-Тихомирова', $this->object->genderAutoDetect().'-Тихомирова');
    }
    public function testGenDetect1823()
    {
        $this->object->setSecondName('Тихонова');
        $this->assertEquals('2-Тихонова', $this->object->genderAutoDetect().'-Тихонова');
    }
    public function testGenDetect1824()
    {
        $this->object->setSecondName('Токарева');
        $this->assertEquals('2-Токарева', $this->object->genderAutoDetect().'-Токарева');
    }
    public function testGenDetect1825()
    {
        $this->object->setSecondName('Токмакова');
        $this->assertEquals('2-Токмакова', $this->object->genderAutoDetect().'-Токмакова');
    }
    public function testGenDetect1826()
    {
        $this->object->setSecondName('Толбанова');
        $this->assertEquals('2-Толбанова', $this->object->genderAutoDetect().'-Толбанова');
    }
    public function testGenDetect1827()
    {
        $this->object->setSecondName('Толстоброва');
        $this->assertEquals('2-Толстоброва', $this->object->genderAutoDetect().'-Толстоброва');
    }
    public function testGenDetect1828()
    {
        $this->object->setSecondName('Толстокожева');
        $this->assertEquals('2-Толстокожева', $this->object->genderAutoDetect().'-Толстокожева');
    }
    public function testGenDetect1829()
    {
        $this->object->setSecondName('Толстая');
        $this->assertEquals('2-Толстая', $this->object->genderAutoDetect().'-Толстая');
    }
    public function testGenDetect1830()
    {
        $this->object->setSecondName('Топорова');
        $this->assertEquals('2-Топорова', $this->object->genderAutoDetect().'-Топорова');
    }
    public function testGenDetect1831()
    {
        $this->object->setSecondName('Торопова');
        $this->assertEquals('2-Торопова', $this->object->genderAutoDetect().'-Торопова');
    }
    public function testGenDetect1832()
    {
        $this->object->setSecondName('Торчинова');
        $this->assertEquals('2-Торчинова', $this->object->genderAutoDetect().'-Торчинова');
    }
    public function testGenDetect1833()
    {
        $this->object->setSecondName('Травкина');
        $this->assertEquals('2-Травкина', $this->object->genderAutoDetect().'-Травкина');
    }
    public function testGenDetect1834()
    {
        $this->object->setSecondName('Тредиковская');
        $this->assertEquals('2-Тредиковская', $this->object->genderAutoDetect().'-Тредиковская');
    }
    public function testGenDetect1835()
    {
        $this->object->setSecondName('Третьякова');
        $this->assertEquals('2-Третьякова', $this->object->genderAutoDetect().'-Третьякова');
    }
    public function testGenDetect1836()
    {
        $this->object->setSecondName('Трифонова');
        $this->assertEquals('2-Трифонова', $this->object->genderAutoDetect().'-Трифонова');
    }
    public function testGenDetect1837()
    {
        $this->object->setSecondName('Трофимова');
        $this->assertEquals('2-Трофимова', $this->object->genderAutoDetect().'-Трофимова');
    }
    public function testGenDetect1838()
    {
        $this->object->setSecondName('Трусова');
        $this->assertEquals('2-Трусова', $this->object->genderAutoDetect().'-Трусова');
    }
    public function testGenDetect1839()
    {
        $this->object->setSecondName('Трутнева');
        $this->assertEquals('2-Трутнева', $this->object->genderAutoDetect().'-Трутнева');
    }
    public function testGenDetect1840()
    {
        $this->object->setSecondName('Труфанова');
        $this->assertEquals('2-Труфанова', $this->object->genderAutoDetect().'-Труфанова');
    }
    public function testGenDetect1841()
    {
        $this->object->setSecondName('Трухина');
        $this->assertEquals('2-Трухина', $this->object->genderAutoDetect().'-Трухина');
    }
    public function testGenDetect1842()
    {
        $this->object->setSecondName('Трындина');
        $this->assertEquals('2-Трындина', $this->object->genderAutoDetect().'-Трындина');
    }
    public function testGenDetect1843()
    {
        $this->object->setSecondName('Туполева');
        $this->assertEquals('2-Туполева', $this->object->genderAutoDetect().'-Туполева');
    }
    public function testGenDetect1844()
    {
        $this->object->setSecondName('Турбина');
        $this->assertEquals('2-Турбина', $this->object->genderAutoDetect().'-Турбина');
    }
    public function testGenDetect1845()
    {
        $this->object->setSecondName('Тургенева');
        $this->assertEquals('2-Тургенева', $this->object->genderAutoDetect().'-Тургенева');
    }
    public function testGenDetect1846()
    {
        $this->object->setSecondName('Турова');
        $this->assertEquals('2-Турова', $this->object->genderAutoDetect().'-Турова');
    }
    public function testGenDetect1847()
    {
        $this->object->setSecondName('Турфанова');
        $this->assertEquals('2-Турфанова', $this->object->genderAutoDetect().'-Турфанова');
    }
    public function testGenDetect1848()
    {
        $this->object->setSecondName('Тычкина');
        $this->assertEquals('2-Тычкина', $this->object->genderAutoDetect().'-Тычкина');
    }
    public function testGenDetect1849()
    {
        $this->object->setSecondName('Тюшнякова');
        $this->assertEquals('2-Тюшнякова', $this->object->genderAutoDetect().'-Тюшнякова');
    }
    public function testGenDetect1850()
    {
        $this->object->setSecondName('Телицына');
        $this->assertEquals('2-Телицына', $this->object->genderAutoDetect().'-Телицына');
    }
    public function testGenDetect1851()
    {
        $this->object->setSecondName('Тянникова');
        $this->assertEquals('2-Тянникова', $this->object->genderAutoDetect().'-Тянникова');
    }
    public function testGenDetect1852()
    {
        $this->object->setSecondName('Угольникова');
        $this->assertEquals('2-Угольникова', $this->object->genderAutoDetect().'-Угольникова');
    }
    public function testGenDetect1853()
    {
        $this->object->setSecondName('Ульянова');
        $this->assertEquals('2-Ульянова', $this->object->genderAutoDetect().'-Ульянова');
    }
    public function testGenDetect1854()
    {
        $this->object->setSecondName('Ульяшина');
        $this->assertEquals('2-Ульяшина', $this->object->genderAutoDetect().'-Ульяшина');
    }
    public function testGenDetect1855()
    {
        $this->object->setSecondName('Усатова');
        $this->assertEquals('2-Усатова', $this->object->genderAutoDetect().'-Усатова');
    }
    public function testGenDetect1856()
    {
        $this->object->setSecondName('Усова');
        $this->assertEquals('2-Усова', $this->object->genderAutoDetect().'-Усова');
    }
    public function testGenDetect1857()
    {
        $this->object->setSecondName('Устинова');
        $this->assertEquals('2-Устинова', $this->object->genderAutoDetect().'-Устинова');
    }
    public function testGenDetect1858()
    {
        $this->object->setSecondName('Устюжанина');
        $this->assertEquals('2-Устюжанина', $this->object->genderAutoDetect().'-Устюжанина');
    }
    public function testGenDetect1859()
    {
        $this->object->setSecondName('Утёсова');
        $this->assertEquals('2-Утёсова', $this->object->genderAutoDetect().'-Утёсова');
    }
    public function testGenDetect1860()
    {
        $this->object->setSecondName('Ухова');
        $this->assertEquals('2-Ухова', $this->object->genderAutoDetect().'-Ухова');
    }
    public function testGenDetect1861()
    {
        $this->object->setSecondName('Фанина');
        $this->assertEquals('2-Фанина', $this->object->genderAutoDetect().'-Фанина');
    }
    public function testGenDetect1862()
    {
        $this->object->setSecondName('Фамусова');
        $this->assertEquals('2-Фамусова', $this->object->genderAutoDetect().'-Фамусова');
    }
    public function testGenDetect1863()
    {
        $this->object->setSecondName('Федина');
        $this->assertEquals('2-Федина', $this->object->genderAutoDetect().'-Федина');
    }
    public function testGenDetect1864()
    {
        $this->object->setSecondName('Федосова');
        $this->assertEquals('2-Федосова', $this->object->genderAutoDetect().'-Федосова');
    }
    public function testGenDetect1865()
    {
        $this->object->setSecondName('Федотова');
        $this->assertEquals('2-Федотова', $this->object->genderAutoDetect().'-Федотова');
    }
    public function testGenDetect1866()
    {
        $this->object->setSecondName('Федосеева');
        $this->assertEquals('2-Федосеева', $this->object->genderAutoDetect().'-Федосеева');
    }
    public function testGenDetect1867()
    {
        $this->object->setSecondName('Федченкова');
        $this->assertEquals('2-Федченкова', $this->object->genderAutoDetect().'-Федченкова');
    }
    public function testGenDetect1868()
    {
        $this->object->setSecondName('Фёдорова');
        $this->assertEquals('2-Фёдорова', $this->object->genderAutoDetect().'-Фёдорова');
    }
    public function testGenDetect1869()
    {
        $this->object->setSecondName('Федулова');
        $this->assertEquals('2-Федулова', $this->object->genderAutoDetect().'-Федулова');
    }
    public function testGenDetect1870()
    {
        $this->object->setSecondName('Фетисова');
        $this->assertEquals('2-Фетисова', $this->object->genderAutoDetect().'-Фетисова');
    }
    public function testGenDetect1871()
    {
        $this->object->setSecondName('Филатова');
        $this->assertEquals('2-Филатова', $this->object->genderAutoDetect().'-Филатова');
    }
    public function testGenDetect1872()
    {
        $this->object->setSecondName('Филимонова');
        $this->assertEquals('2-Филимонова', $this->object->genderAutoDetect().'-Филимонова');
    }
    public function testGenDetect1873()
    {
        $this->object->setSecondName('Филиппова');
        $this->assertEquals('2-Филиппова', $this->object->genderAutoDetect().'-Филиппова');
    }
    public function testGenDetect1874()
    {
        $this->object->setSecondName('Флёрова');
        $this->assertEquals('2-Флёрова', $this->object->genderAutoDetect().'-Флёрова');
    }
    public function testGenDetect1875()
    {
        $this->object->setSecondName('Фокина');
        $this->assertEquals('2-Фокина', $this->object->genderAutoDetect().'-Фокина');
    }
    public function testGenDetect1876()
    {
        $this->object->setSecondName('Фомина');
        $this->assertEquals('2-Фомина', $this->object->genderAutoDetect().'-Фомина');
    }
    public function testGenDetect1877()
    {
        $this->object->setSecondName('Фомичева');
        $this->assertEquals('2-Фомичева', $this->object->genderAutoDetect().'-Фомичева');
    }
    public function testGenDetect1878()
    {
        $this->object->setSecondName('Фонвизина');
        $this->assertEquals('2-Фонвизина', $this->object->genderAutoDetect().'-Фонвизина');
    }
    public function testGenDetect1879()
    {
        $this->object->setSecondName('Форопонова');
        $this->assertEquals('2-Форопонова', $this->object->genderAutoDetect().'-Форопонова');
    }
    public function testGenDetect1880()
    {
        $this->object->setSecondName('Фирсова');
        $this->assertEquals('2-Фирсова', $this->object->genderAutoDetect().'-Фирсова');
    }
    public function testGenDetect1881()
    {
        $this->object->setSecondName('Фролова');
        $this->assertEquals('2-Фролова', $this->object->genderAutoDetect().'-Фролова');
    }
    public function testGenDetect1882()
    {
        $this->object->setSecondName('Францева');
        $this->assertEquals('2-Францева', $this->object->genderAutoDetect().'-Францева');
    }
    public function testGenDetect1883()
    {
        $this->object->setSecondName('Фукина');
        $this->assertEquals('2-Фукина', $this->object->genderAutoDetect().'-Фукина');
    }
    public function testGenDetect1884()
    {
        $this->object->setSecondName('Хабалова');
        $this->assertEquals('2-Хабалова', $this->object->genderAutoDetect().'-Хабалова');
    }
    public function testGenDetect1885()
    {
        $this->object->setSecondName('Халтурина');
        $this->assertEquals('2-Халтурина', $this->object->genderAutoDetect().'-Халтурина');
    }
    public function testGenDetect1886()
    {
        $this->object->setSecondName('Харитонова');
        $this->assertEquals('2-Харитонова', $this->object->genderAutoDetect().'-Харитонова');
    }
    public function testGenDetect1887()
    {
        $this->object->setSecondName('Харламова');
        $this->assertEquals('2-Харламова', $this->object->genderAutoDetect().'-Харламова');
    }
    public function testGenDetect1888()
    {
        $this->object->setSecondName('Хлебникова');
        $this->assertEquals('2-Хлебникова', $this->object->genderAutoDetect().'-Хлебникова');
    }
    public function testGenDetect1889()
    {
        $this->object->setSecondName('Хлопонина');
        $this->assertEquals('2-Хлопонина', $this->object->genderAutoDetect().'-Хлопонина');
    }
    public function testGenDetect1890()
    {
        $this->object->setSecondName('Холодова');
        $this->assertEquals('2-Холодова', $this->object->genderAutoDetect().'-Холодова');
    }
    public function testGenDetect1891()
    {
        $this->object->setSecondName('Хомколова');
        $this->assertEquals('2-Хомколова', $this->object->genderAutoDetect().'-Хомколова');
    }
    public function testGenDetect1892()
    {
        $this->object->setSecondName('Храмова');
        $this->assertEquals('2-Храмова', $this->object->genderAutoDetect().'-Храмова');
    }
    public function testGenDetect1893()
    {
        $this->object->setSecondName('Хромова');
        $this->assertEquals('2-Хромова', $this->object->genderAutoDetect().'-Хромова');
    }
    public function testGenDetect1894()
    {
        $this->object->setSecondName('Худовекова');
        $this->assertEquals('2-Худовекова', $this->object->genderAutoDetect().'-Худовекова');
    }
    public function testGenDetect1895()
    {
        $this->object->setSecondName('Хлебова');
        $this->assertEquals('2-Хлебова', $this->object->genderAutoDetect().'-Хлебова');
    }
    public function testGenDetect1896()
    {
        $this->object->setSecondName('Хуртина');
        $this->assertEquals('2-Хуртина', $this->object->genderAutoDetect().'-Хуртина');
    }
    public function testGenDetect1897()
    {
        $this->object->setSecondName('Хребтова');
        $this->assertEquals('2-Хребтова', $this->object->genderAutoDetect().'-Хребтова');
    }
    public function testGenDetect1898()
    {
        $this->object->setSecondName('Худякова');
        $this->assertEquals('2-Худякова', $this->object->genderAutoDetect().'-Худякова');
    }
    public function testGenDetect1899()
    {
        $this->object->setSecondName('Царицына');
        $this->assertEquals('2-Царицына', $this->object->genderAutoDetect().'-Царицына');
    }
    public function testGenDetect1900()
    {
        $this->object->setSecondName('Цветаева');
        $this->assertEquals('2-Цветаева', $this->object->genderAutoDetect().'-Цветаева');
    }
    public function testGenDetect1901()
    {
        $this->object->setSecondName('Цветкова');
        $this->assertEquals('2-Цветкова', $this->object->genderAutoDetect().'-Цветкова');
    }
    public function testGenDetect1902()
    {
        $this->object->setSecondName('Циолковская');
        $this->assertEquals('2-Циолковская', $this->object->genderAutoDetect().'-Циолковская');
    }
    public function testGenDetect1903()
    {
        $this->object->setSecondName('Цитникова');
        $this->assertEquals('2-Цитникова', $this->object->genderAutoDetect().'-Цитникова');
    }
    public function testGenDetect1904()
    {
        $this->object->setSecondName('Цуканова');
        $this->assertEquals('2-Цуканова', $this->object->genderAutoDetect().'-Цуканова');
    }
    public function testGenDetect1905()
    {
        $this->object->setSecondName('Чадаева');
        $this->assertEquals('2-Чадаева', $this->object->genderAutoDetect().'-Чадаева');
    }
    public function testGenDetect1906()
    {
        $this->object->setSecondName('Чадова');
        $this->assertEquals('2-Чадова', $this->object->genderAutoDetect().'-Чадова');
    }
    public function testGenDetect1907()
    {
        $this->object->setSecondName('Чазова');
        $this->assertEquals('2-Чазова', $this->object->genderAutoDetect().'-Чазова');
    }
    public function testGenDetect1908()
    {
        $this->object->setSecondName('Чалая');
        $this->assertEquals('2-Чалая', $this->object->genderAutoDetect().'-Чалая');
    }
    public function testGenDetect1909()
    {
        $this->object->setSecondName('Чапаева');
        $this->assertEquals('2-Чапаева', $this->object->genderAutoDetect().'-Чапаева');
    }
    public function testGenDetect1910()
    {
        $this->object->setSecondName('Чеботарёва');
        $this->assertEquals('2-Чеботарёва', $this->object->genderAutoDetect().'-Чеботарёва');
    }
    public function testGenDetect1911()
    {
        $this->object->setSecondName('Чебыкина');
        $this->assertEquals('2-Чебыкина', $this->object->genderAutoDetect().'-Чебыкина');
    }
    public function testGenDetect1912()
    {
        $this->object->setSecondName('Чежекова');
        $this->assertEquals('2-Чежекова', $this->object->genderAutoDetect().'-Чежекова');
    }
    public function testGenDetect1913()
    {
        $this->object->setSecondName('Чекмарёв');
        $this->assertEquals('2-Чекмарёв', $this->object->genderAutoDetect().'-Чекмарёв');
    }
    public function testGenDetect1914()
    {
        $this->object->setSecondName('Челомеева');
        $this->assertEquals('2-Челомеева', $this->object->genderAutoDetect().'-Челомеева');
    }
    public function testGenDetect1915()
    {
        $this->object->setSecondName('Челомей');
        $this->assertEquals('2-Челомей', $this->object->genderAutoDetect().'-Челомей');
    }
    public function testGenDetect1916()
    {
        $this->object->setSecondName('Челпанова');
        $this->assertEquals('2-Челпанова', $this->object->genderAutoDetect().'-Челпанова');
    }
    public function testGenDetect1917()
    {
        $this->object->setSecondName('Чендева');
        $this->assertEquals('2-Чендева', $this->object->genderAutoDetect().'-Чендева');
    }
    public function testGenDetect1918()
    {
        $this->object->setSecondName('Черенчикова');
        $this->assertEquals('2-Черенчикова', $this->object->genderAutoDetect().'-Черенчикова');
    }
    public function testGenDetect1919()
    {
        $this->object->setSecondName('Черепанова');
        $this->assertEquals('2-Черепанова', $this->object->genderAutoDetect().'-Черепанова');
    }
    public function testGenDetect1920()
    {
        $this->object->setSecondName('Черкашина');
        $this->assertEquals('2-Черкашина', $this->object->genderAutoDetect().'-Черкашина');
    }
    public function testGenDetect1921()
    {
        $this->object->setSecondName('Чернова');
        $this->assertEquals('2-Чернова', $this->object->genderAutoDetect().'-Чернова');
    }
    public function testGenDetect1922()
    {
        $this->object->setSecondName('Чернышёва');
        $this->assertEquals('2-Чернышёва', $this->object->genderAutoDetect().'-Чернышёва');
    }
    public function testGenDetect1923()
    {
        $this->object->setSecondName('Чернакова');
        $this->assertEquals('2-Чернакова', $this->object->genderAutoDetect().'-Чернакова');
    }
    public function testGenDetect1924()
    {
        $this->object->setSecondName('Черникова');
        $this->assertEquals('2-Черникова', $this->object->genderAutoDetect().'-Черникова');
    }
    public function testGenDetect1925()
    {
        $this->object->setSecondName('Чеснокова');
        $this->assertEquals('2-Чеснокова', $this->object->genderAutoDetect().'-Чеснокова');
    }
    public function testGenDetect1926()
    {
        $this->object->setSecondName('Чигракова');
        $this->assertEquals('2-Чигракова', $this->object->genderAutoDetect().'-Чигракова');
    }
    public function testGenDetect1927()
    {
        $this->object->setSecondName('Чижикова');
        $this->assertEquals('2-Чижикова', $this->object->genderAutoDetect().'-Чижикова');
    }
    public function testGenDetect1928()
    {
        $this->object->setSecondName('Чиркаш');
        $this->assertEquals('2-Чиркаш', $this->object->genderAutoDetect().'-Чиркаш');
    }
    public function testGenDetect1929()
    {
        $this->object->setSecondName('Чистякова');
        $this->assertEquals('2-Чистякова', $this->object->genderAutoDetect().'-Чистякова');
    }
    public function testGenDetect1930()
    {
        $this->object->setSecondName('Чичикова');
        $this->assertEquals('2-Чичикова', $this->object->genderAutoDetect().'-Чичикова');
    }
    public function testGenDetect1931()
    {
        $this->object->setSecondName('Чичканова');
        $this->assertEquals('2-Чичканова', $this->object->genderAutoDetect().'-Чичканова');
    }
    public function testGenDetect1932()
    {
        $this->object->setSecondName('Чкалова');
        $this->assertEquals('2-Чкалова', $this->object->genderAutoDetect().'-Чкалова');
    }
    public function testGenDetect1933()
    {
        $this->object->setSecondName('Чмыхова');
        $this->assertEquals('2-Чмыхова', $this->object->genderAutoDetect().'-Чмыхова');
    }
    public function testGenDetect1934()
    {
        $this->object->setSecondName('Чугунова');
        $this->assertEquals('2-Чугунова', $this->object->genderAutoDetect().'-Чугунова');
    }
    public function testGenDetect1935()
    {
        $this->object->setSecondName('Чужинова');
        $this->assertEquals('2-Чужинова', $this->object->genderAutoDetect().'-Чужинова');
    }
    public function testGenDetect1936()
    {
        $this->object->setSecondName('Чукчова');
        $this->assertEquals('2-Чукчова', $this->object->genderAutoDetect().'-Чукчова');
    }
    public function testGenDetect1937()
    {
        $this->object->setSecondName('Чукреева');
        $this->assertEquals('2-Чукреева', $this->object->genderAutoDetect().'-Чукреева');
    }
    public function testGenDetect1938()
    {
        $this->object->setSecondName('Чупова');
        $this->assertEquals('2-Чупова', $this->object->genderAutoDetect().'-Чупова');
    }
    public function testGenDetect1939()
    {
        $this->object->setSecondName('Чуприна');
        $this->assertEquals('2-Чуприна', $this->object->genderAutoDetect().'-Чуприна');
    }
    public function testGenDetect1940()
    {
        $this->object->setSecondName('Чупрова');
        $this->assertEquals('2-Чупрова', $this->object->genderAutoDetect().'-Чупрова');
    }
    public function testGenDetect1941()
    {
        $this->object->setSecondName('Чучанова');
        $this->assertEquals('2-Чучанова', $this->object->genderAutoDetect().'-Чучанова');
    }
    public function testGenDetect1942()
    {
        $this->object->setSecondName('Чучумашева');
        $this->assertEquals('2-Чучумашева', $this->object->genderAutoDetect().'-Чучумашева');
    }
    public function testGenDetect1943()
    {
        $this->object->setSecondName('Шабунина');
        $this->assertEquals('2-Шабунина', $this->object->genderAutoDetect().'-Шабунина');
    }
    public function testGenDetect1944()
    {
        $this->object->setSecondName('Шакмакова');
        $this->assertEquals('2-Шакмакова', $this->object->genderAutoDetect().'-Шакмакова');
    }
    public function testGenDetect1945()
    {
        $this->object->setSecondName('Шаляпина');
        $this->assertEquals('2-Шаляпина', $this->object->genderAutoDetect().'-Шаляпина');
    }
    public function testGenDetect1946()
    {
        $this->object->setSecondName('Шаповалова');
        $this->assertEquals('2-Шаповалова', $this->object->genderAutoDetect().'-Шаповалова');
    }
    public function testGenDetect1947()
    {
        $this->object->setSecondName('Шапошникова');
        $this->assertEquals('2-Шапошникова', $this->object->genderAutoDetect().'-Шапошникова');
    }
    public function testGenDetect1948()
    {
        $this->object->setSecondName('Шарапова');
        $this->assertEquals('2-Шарапова', $this->object->genderAutoDetect().'-Шарапова');
    }
    public function testGenDetect1949()
    {
        $this->object->setSecondName('Шарова');
        $this->assertEquals('2-Шарова', $this->object->genderAutoDetect().'-Шарова');
    }
    public function testGenDetect1950()
    {
        $this->object->setSecondName('Шаршина');
        $this->assertEquals('2-Шаршина', $this->object->genderAutoDetect().'-Шаршина');
    }
    public function testGenDetect1951()
    {
        $this->object->setSecondName('Шашлова');
        $this->assertEquals('2-Шашлова', $this->object->genderAutoDetect().'-Шашлова');
    }
    public function testGenDetect1952()
    {
        $this->object->setSecondName('Шведова');
        $this->assertEquals('2-Шведова', $this->object->genderAutoDetect().'-Шведова');
    }
    public function testGenDetect1953()
    {
        $this->object->setSecondName('Шеваелёк');
        $this->assertEquals('2-Шеваелёк', $this->object->genderAutoDetect().'-Шеваелёк');
    }
    public function testGenDetect1954()
    {
        $this->object->setSecondName('Шеломова');
        $this->assertEquals('2-Шеломова', $this->object->genderAutoDetect().'-Шеломова');
    }
    public function testGenDetect1955()
    {
        $this->object->setSecondName('Шепкина');
        $this->assertEquals('2-Шепкина', $this->object->genderAutoDetect().'-Шепкина');
    }
    public function testGenDetect1956()
    {
        $this->object->setSecondName('Шеповалова');
        $this->assertEquals('2-Шеповалова', $this->object->genderAutoDetect().'-Шеповалова');
    }
    public function testGenDetect1957()
    {
        $this->object->setSecondName('Шереметьева');
        $this->assertEquals('2-Шереметьева', $this->object->genderAutoDetect().'-Шереметьева');
    }
    public function testGenDetect1958()
    {
        $this->object->setSecondName('Шерстова');
        $this->assertEquals('2-Шерстова', $this->object->genderAutoDetect().'-Шерстова');
    }
    public function testGenDetect1959()
    {
        $this->object->setSecondName('Шикалова');
        $this->assertEquals('2-Шикалова', $this->object->genderAutoDetect().'-Шикалова');
    }
    public function testGenDetect1960()
    {
        $this->object->setSecondName('Ширманова');
        $this->assertEquals('2-Ширманова', $this->object->genderAutoDetect().'-Ширманова');
    }
    public function testGenDetect1961()
    {
        $this->object->setSecondName('Шихранова');
        $this->assertEquals('2-Шихранова', $this->object->genderAutoDetect().'-Шихранова');
    }
    public function testGenDetect1962()
    {
        $this->object->setSecondName('Шишкина');
        $this->assertEquals('2-Шишкина', $this->object->genderAutoDetect().'-Шишкина');
    }
    public function testGenDetect1963()
    {
        $this->object->setSecondName('Шишлова');
        $this->assertEquals('2-Шишлова', $this->object->genderAutoDetect().'-Шишлова');
    }
    public function testGenDetect1964()
    {
        $this->object->setSecondName('Шишова');
        $this->assertEquals('2-Шишова', $this->object->genderAutoDetect().'-Шишова');
    }
    public function testGenDetect1965()
    {
        $this->object->setSecondName('Шкуратова');
        $this->assertEquals('2-Шкуратова', $this->object->genderAutoDetect().'-Шкуратова');
    }
    public function testGenDetect1966()
    {
        $this->object->setSecondName('Шлыкова');
        $this->assertEquals('2-Шлыкова', $this->object->genderAutoDetect().'-Шлыкова');
    }
    public function testGenDetect1967()
    {
        $this->object->setSecondName('Шмакова');
        $this->assertEquals('2-Шмакова', $this->object->genderAutoDetect().'-Шмакова');
    }
    public function testGenDetect1968()
    {
        $this->object->setSecondName('Шмелева');
        $this->assertEquals('2-Шмелева', $this->object->genderAutoDetect().'-Шмелева');
    }
    public function testGenDetect1969()
    {
        $this->object->setSecondName('Шубина');
        $this->assertEquals('2-Шубина', $this->object->genderAutoDetect().'-Шубина');
    }
    public function testGenDetect1970()
    {
        $this->object->setSecondName('Шубкина');
        $this->assertEquals('2-Шубкина', $this->object->genderAutoDetect().'-Шубкина');
    }
    public function testGenDetect1971()
    {
        $this->object->setSecondName('Шувалова');
        $this->assertEquals('2-Шувалова', $this->object->genderAutoDetect().'-Шувалова');
    }
    public function testGenDetect1972()
    {
        $this->object->setSecondName('Шуйская');
        $this->assertEquals('2-Шуйская', $this->object->genderAutoDetect().'-Шуйская');
    }
    public function testGenDetect1973()
    {
        $this->object->setSecondName('Шукшина');
        $this->assertEquals('2-Шукшина', $this->object->genderAutoDetect().'-Шукшина');
    }
    public function testGenDetect1974()
    {
        $this->object->setSecondName('Шулёва');
        $this->assertEquals('2-Шулёва', $this->object->genderAutoDetect().'-Шулёва');
    }
    public function testGenDetect1975()
    {
        $this->object->setSecondName('Шульдешова');
        $this->assertEquals('2-Шульдешова', $this->object->genderAutoDetect().'-Шульдешова');
    }
    public function testGenDetect1976()
    {
        $this->object->setSecondName('Шульга');
        $this->assertEquals('2-Шульга', $this->object->genderAutoDetect().'-Шульга');
    }
    public function testGenDetect1977()
    {
        $this->object->setSecondName('Шульгина');
        $this->assertEquals('2-Шульгина', $this->object->genderAutoDetect().'-Шульгина');
    }
    public function testGenDetect1978()
    {
        $this->object->setSecondName('Шурупова');
        $this->assertEquals('2-Шурупова', $this->object->genderAutoDetect().'-Шурупова');
    }
    public function testGenDetect1979()
    {
        $this->object->setSecondName('Шушалева');
        $this->assertEquals('2-Шушалева', $this->object->genderAutoDetect().'-Шушалева');
    }
    public function testGenDetect1980()
    {
        $this->object->setSecondName('Шурша');
        $this->assertEquals('2-Шурша', $this->object->genderAutoDetect().'-Шурша');
    }
    public function testGenDetect1981()
    {
        $this->object->setSecondName('Щавельская');
        $this->assertEquals('2-Щавельская', $this->object->genderAutoDetect().'-Щавельская');
    }
    public function testGenDetect1982()
    {
        $this->object->setSecondName('Щегельская');
        $this->assertEquals('2-Щегельская', $this->object->genderAutoDetect().'-Щегельская');
    }
    public function testGenDetect1983()
    {
        $this->object->setSecondName('Щеглова');
        $this->assertEquals('2-Щеглова', $this->object->genderAutoDetect().'-Щеглова');
    }
    public function testGenDetect1984()
    {
        $this->object->setSecondName('Щеголева');
        $this->assertEquals('2-Щеголева', $this->object->genderAutoDetect().'-Щеголева');
    }
    public function testGenDetect1985()
    {
        $this->object->setSecondName('Щеголихина');
        $this->assertEquals('2-Щеголихина', $this->object->genderAutoDetect().'-Щеголихина');
    }
    public function testGenDetect1986()
    {
        $this->object->setSecondName('Щедрина');
        $this->assertEquals('2-Щедрина', $this->object->genderAutoDetect().'-Щедрина');
    }
    public function testGenDetect1987()
    {
        $this->object->setSecondName('Щедрова');
        $this->assertEquals('2-Щедрова', $this->object->genderAutoDetect().'-Щедрова');
    }
    public function testGenDetect1988()
    {
        $this->object->setSecondName('Щекочихина');
        $this->assertEquals('2-Щекочихина', $this->object->genderAutoDetect().'-Щекочихина');
    }
    public function testGenDetect1989()
    {
        $this->object->setSecondName('Щепкина');
        $this->assertEquals('2-Щепкина', $this->object->genderAutoDetect().'-Щепкина');
    }
    public function testGenDetect1990()
    {
        $this->object->setSecondName('Щербакова');
        $this->assertEquals('2-Щербакова', $this->object->genderAutoDetect().'-Щербакова');
    }
    public function testGenDetect1991()
    {
        $this->object->setSecondName('Щербатых');
        $this->assertEquals('2-Щербатых', $this->object->genderAutoDetect().'-Щербатых');
    }
    public function testGenDetect1992()
    {
        $this->object->setSecondName('Щербина');
        $this->assertEquals('2-Щербина', $this->object->genderAutoDetect().'-Щербина');
    }
    public function testGenDetect1993()
    {
        $this->object->setSecondName('Щетинаина');
        $this->assertEquals('2-Щетинаина', $this->object->genderAutoDetect().'-Щетинаина');
    }
    public function testGenDetect1994()
    {
        $this->object->setSecondName('Щеткина');
        $this->assertEquals('2-Щеткина', $this->object->genderAutoDetect().'-Щеткина');
    }
    public function testGenDetect1995()
    {
        $this->object->setSecondName('Щукина');
        $this->assertEquals('2-Щукина', $this->object->genderAutoDetect().'-Щукина');
    }
    public function testGenDetect1996()
    {
        $this->object->setSecondName('Энтина');
        $this->assertEquals('2-Энтина', $this->object->genderAutoDetect().'-Энтина');
    }
    public function testGenDetect1997()
    {
        $this->object->setSecondName('Эсце');
        $this->assertEquals('2-Эсце', $this->object->genderAutoDetect().'-Эсце');
    }
    public function testGenDetect1998()
    {
        $this->object->setSecondName('Ювелева');
        $this->assertEquals('2-Ювелева', $this->object->genderAutoDetect().'-Ювелева');
    }
    public function testGenDetect1999()
    {
        $this->object->setSecondName('Юганцева');
        $this->assertEquals('2-Юганцева', $this->object->genderAutoDetect().'-Юганцева');
    }
    public function testGenDetect2000()
    {
        $this->object->setSecondName('Югова');
        $this->assertEquals('2-Югова', $this->object->genderAutoDetect().'-Югова');
    }
    public function testGenDetect2001()
    {
        $this->object->setSecondName('Юдашкина');
        $this->assertEquals('2-Юдашкина', $this->object->genderAutoDetect().'-Юдашкина');
    }
    public function testGenDetect2002()
    {
        $this->object->setSecondName('Юдина');
        $this->assertEquals('2-Юдина', $this->object->genderAutoDetect().'-Юдина');
    }
    public function testGenDetect2003()
    {
        $this->object->setSecondName('Юнкина');
        $this->assertEquals('2-Юнкина', $this->object->genderAutoDetect().'-Юнкина');
    }
    public function testGenDetect2004()
    {
        $this->object->setSecondName('Юрнаева');
        $this->assertEquals('2-Юрнаева', $this->object->genderAutoDetect().'-Юрнаева');
    }
    public function testGenDetect2005()
    {
        $this->object->setSecondName('Юрьева');
        $this->assertEquals('2-Юрьева', $this->object->genderAutoDetect().'-Юрьева');
    }
    public function testGenDetect2006()
    {
        $this->object->setSecondName('Юсупова');
        $this->assertEquals('2-Юсупова', $this->object->genderAutoDetect().'-Юсупова');
    }
    public function testGenDetect2007()
    {
        $this->object->setSecondName('Юферева');
        $this->assertEquals('2-Юферева', $this->object->genderAutoDetect().'-Юферева');
    }
    public function testGenDetect2008()
    {
        $this->object->setSecondName('Якимова');
        $this->assertEquals('2-Якимова', $this->object->genderAutoDetect().'-Якимова');
    }
    public function testGenDetect2009()
    {
        $this->object->setSecondName('Яковалева');
        $this->assertEquals('2-Яковалева', $this->object->genderAutoDetect().'-Яковалева');
    }
    public function testGenDetect2010()
    {
        $this->object->setSecondName('Якубова');
        $this->assertEquals('2-Якубова', $this->object->genderAutoDetect().'-Якубова');
    }
    public function testGenDetect2011()
    {
        $this->object->setSecondName('Якубоваич');
        $this->assertEquals('2-Якубоваич', $this->object->genderAutoDetect().'-Якубоваич');
    }
    public function testGenDetect2012()
    {
        $this->object->setSecondName('Якушева');
        $this->assertEquals('2-Якушева', $this->object->genderAutoDetect().'-Якушева');
    }
    public function testGenDetect2013()
    {
        $this->object->setSecondName('Янаева');
        $this->assertEquals('2-Янаева', $this->object->genderAutoDetect().'-Янаева');
    }
    public function testGenDetect2014()
    {
        $this->object->setSecondName('Янкова');
        $this->assertEquals('2-Янкова', $this->object->genderAutoDetect().'-Янкова');
    }
    public function testGenDetect2015()
    {
        $this->object->setSecondName('Янковаская');
        $this->assertEquals('2-Янковаская', $this->object->genderAutoDetect().'-Янковаская');
    }
    public function testGenDetect2016()
    {
        $this->object->setSecondName('Ярмольник');
        $this->assertEquals('2-Ярмольник', $this->object->genderAutoDetect().'-Ярмольник');
    }
    public function testGenDetect2017()
    {
        $this->object->setSecondName('Яромеева');
        $this->assertEquals('2-Яромеева', $this->object->genderAutoDetect().'-Яромеева');
    }
    public function testGenDetect2018()
    {
        $this->object->setSecondName('Ярцева');
        $this->assertEquals('2-Ярцева', $this->object->genderAutoDetect().'-Ярцева');
    }
    public function testGenDetect2019()
    {
        $this->object->setSecondName('Ясенева');
        $this->assertEquals('2-Ясенева', $this->object->genderAutoDetect().'-Ясенева');
    }
    public function testGenDetect2020()
    {
        $this->object->setSecondName('Яснеева');
        $this->assertEquals('2-Яснеева', $this->object->genderAutoDetect().'-Яснеева');
    }
    public function testGenDetect2021()
    {
        $this->object->setSecondName('Яшина');
        $this->assertEquals('2-Яшина', $this->object->genderAutoDetect().'-Яшина');
    }

}