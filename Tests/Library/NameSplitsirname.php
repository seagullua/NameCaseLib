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
        $this->assertEquals('S-Абакумов', $this->object->splitFullName('Абакумов').'-Абакумов');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('S-Абдулов', $this->object->splitFullName('Абдулов').'-Абдулов');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('S-Абрамов', $this->object->splitFullName('Абрамов').'-Абрамов');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('S-Авдеев', $this->object->splitFullName('Авдеев').'-Авдеев');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('S-Аверин', $this->object->splitFullName('Аверин').'-Аверин');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('S-Котляр', $this->object->splitFullName('Котляр').'-Котляр');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('S-Кобзарь', $this->object->splitFullName('Кобзарь').'-Кобзарь');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('S-Аверьянов', $this->object->splitFullName('Аверьянов').'-Аверьянов');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('S-Агапов', $this->object->splitFullName('Агапов').'-Агапов');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('S-Агафонов', $this->object->splitFullName('Агафонов').'-Агафонов');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('S-Агейкин', $this->object->splitFullName('Агейкин').'-Агейкин');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('S-Ажищенков', $this->object->splitFullName('Ажищенков').'-Ажищенков');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('S-Аксаков', $this->object->splitFullName('Аксаков').'-Аксаков');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('S-Аксёнов', $this->object->splitFullName('Аксёнов').'-Аксёнов');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('S-Аксенчук', $this->object->splitFullName('Аксенчук').'-Аксенчук');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('S-Аленин', $this->object->splitFullName('Аленин').'-Аленин');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('S-Алиев', $this->object->splitFullName('Алиев').'-Алиев');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('S-Амалиев', $this->object->splitFullName('Амалиев').'-Амалиев');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('S-Амелин', $this->object->splitFullName('Амелин').'-Амелин');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('S-Аминев', $this->object->splitFullName('Аминев').'-Аминев');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('S-Александров', $this->object->splitFullName('Александров').'-Александров');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('S-Алексеев', $this->object->splitFullName('Алексеев').'-Алексеев');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('S-Алёхин', $this->object->splitFullName('Алёхин').'-Алёхин');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('S-Аллилуев', $this->object->splitFullName('Аллилуев').'-Аллилуев');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('S-Андреев', $this->object->splitFullName('Андреев').'-Андреев');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('S-Андреюшкин', $this->object->splitFullName('Андреюшкин').'-Андреюшкин');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('S-Андроников', $this->object->splitFullName('Андроников').'-Андроников');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('S-Андропов', $this->object->splitFullName('Андропов').'-Андропов');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('S-Аниканов', $this->object->splitFullName('Аниканов').'-Аниканов');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('S-Анисимов', $this->object->splitFullName('Анисимов').'-Анисимов');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('S-Анишин', $this->object->splitFullName('Анишин').'-Анишин');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('S-Анников', $this->object->splitFullName('Анников').'-Анников');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('S-Анохин', $this->object->splitFullName('Анохин').'-Анохин');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('S-Аношкин', $this->object->splitFullName('Аношкин').'-Аношкин');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('S-Антипов', $this->object->splitFullName('Антипов').'-Антипов');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('S-Антонов', $this->object->splitFullName('Антонов').'-Антонов');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('S-Антонович', $this->object->splitFullName('Антонович').'-Антонович');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('S-Артамонов', $this->object->splitFullName('Артамонов').'-Артамонов');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('S-Арефьев', $this->object->splitFullName('Арефьев').'-Арефьев');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('S-Аристархов', $this->object->splitFullName('Аристархов').'-Аристархов');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('S-Арсеньев', $this->object->splitFullName('Арсеньев').'-Арсеньев');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('S-Артёмов', $this->object->splitFullName('Артёмов').'-Артёмов');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('S-Асланов', $this->object->splitFullName('Асланов').'-Асланов');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('S-Аслаханов', $this->object->splitFullName('Аслаханов').'-Аслаханов');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('S-Астанков', $this->object->splitFullName('Астанков').'-Астанков');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('S-Астафьев', $this->object->splitFullName('Астафьев').'-Астафьев');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('S-Астахов', $this->object->splitFullName('Астахов').'-Астахов');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('S-Афанасьев', $this->object->splitFullName('Афанасьев').'-Афанасьев');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('S-Афонин', $this->object->splitFullName('Афонин').'-Афонин');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('S-Аспидов', $this->object->splitFullName('Аспидов').'-Аспидов');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('S-Бабатьев', $this->object->splitFullName('Бабатьев').'-Бабатьев');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('S-Бабиков', $this->object->splitFullName('Бабиков').'-Бабиков');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('S-Бабичев', $this->object->splitFullName('Бабичев').'-Бабичев');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('S-Бабкин', $this->object->splitFullName('Бабкин').'-Бабкин');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('S-Бабурин', $this->object->splitFullName('Бабурин').'-Бабурин');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('S-Багров', $this->object->splitFullName('Багров').'-Багров');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('S-Бакрылов', $this->object->splitFullName('Бакрылов').'-Бакрылов');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('S-Бажанов', $this->object->splitFullName('Бажанов').'-Бажанов');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('S-Баженов', $this->object->splitFullName('Баженов').'-Баженов');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('S-Базанов', $this->object->splitFullName('Базанов').'-Базанов');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('S-Базаров', $this->object->splitFullName('Базаров').'-Базаров');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('S-Балакин', $this->object->splitFullName('Балакин').'-Балакин');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('S-Балахнов', $this->object->splitFullName('Балахнов').'-Балахнов');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('S-Балашов', $this->object->splitFullName('Балашов').'-Балашов');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('S-Баранов', $this->object->splitFullName('Баранов').'-Баранов');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('S-Барболин', $this->object->splitFullName('Барболин').'-Барболин');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('S-Баренцев', $this->object->splitFullName('Баренцев').'-Баренцев');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('S-Баринов', $this->object->splitFullName('Баринов').'-Баринов');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('S-Барков', $this->object->splitFullName('Барков').'-Барков');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('S-Барсуков', $this->object->splitFullName('Барсуков').'-Барсуков');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('S-Батрутдинов', $this->object->splitFullName('Батрутдинов').'-Батрутдинов');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('S-Безбородов', $this->object->splitFullName('Безбородов').'-Безбородов');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('S-Безродный', $this->object->splitFullName('Безродный').'-Безродный');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('S-Безруков', $this->object->splitFullName('Безруков').'-Безруков');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('S-Безукладников', $this->object->splitFullName('Безукладников').'-Безукладников');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('S-Беликов', $this->object->splitFullName('Беликов').'-Беликов');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('S-Белов', $this->object->splitFullName('Белов').'-Белов');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('S-Беломестнов', $this->object->splitFullName('Беломестнов').'-Беломестнов');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('S-Бендлин', $this->object->splitFullName('Бендлин').'-Бендлин');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('S-Бережной', $this->object->splitFullName('Бережной').'-Бережной');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('S-Белоусов', $this->object->splitFullName('Белоусов').'-Белоусов');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('S-Бершов', $this->object->splitFullName('Бершов').'-Бершов');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('S-Беспалов', $this->object->splitFullName('Беспалов').'-Беспалов');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('S-Бескрёстнов', $this->object->splitFullName('Бескрёстнов').'-Бескрёстнов');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('S-Бирюков', $this->object->splitFullName('Бирюков').'-Бирюков');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('S-Блаженов', $this->object->splitFullName('Блаженов').'-Блаженов');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('S-Блатов', $this->object->splitFullName('Блатов').'-Блатов');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('S-Блинов', $this->object->splitFullName('Блинов').'-Блинов');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('S-Блохин', $this->object->splitFullName('Блохин').'-Блохин');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('S-Бобр', $this->object->splitFullName('Бобр').'-Бобр');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('S-Бобров', $this->object->splitFullName('Бобров').'-Бобров');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('S-Бобрик', $this->object->splitFullName('Бобрик').'-Бобрик');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('S-Богатырёв', $this->object->splitFullName('Богатырёв').'-Богатырёв');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('S-Богданов', $this->object->splitFullName('Богданов').'-Богданов');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('S-Боголепов', $this->object->splitFullName('Боголепов').'-Боголепов');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('S-Боголюбов', $this->object->splitFullName('Боголюбов').'-Боголюбов');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('S-Богомазов', $this->object->splitFullName('Богомазов').'-Богомазов');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('S-Богомолов', $this->object->splitFullName('Богомолов').'-Богомолов');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('S-Богров', $this->object->splitFullName('Богров').'-Богров');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('S-Бойков', $this->object->splitFullName('Бойков').'-Бойков');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('S-Болотников', $this->object->splitFullName('Болотников').'-Болотников');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('S-Болтоногов', $this->object->splitFullName('Болтоногов').'-Болтоногов');
    }
    public function testSplDetect102()
    {
        $this->assertEquals('S-Большов', $this->object->splitFullName('Большов').'-Большов');
    }
    public function testSplDetect103()
    {
        $this->assertEquals('S-Бореев', $this->object->splitFullName('Бореев').'-Бореев');
    }
    public function testSplDetect104()
    {
        $this->assertEquals('S-Бортник', $this->object->splitFullName('Бортник').'-Бортник');
    }
    public function testSplDetect105()
    {
        $this->assertEquals('S-Борзилов', $this->object->splitFullName('Борзилов').'-Борзилов');
    }
    public function testSplDetect106()
    {
        $this->assertEquals('S-Борцов', $this->object->splitFullName('Борцов').'-Борцов');
    }
    public function testSplDetect107()
    {
        $this->assertEquals('S-Брагин', $this->object->splitFullName('Брагин').'-Брагин');
    }
    public function testSplDetect108()
    {
        $this->assertEquals('S-Брежнев', $this->object->splitFullName('Брежнев').'-Брежнев');
    }
    public function testSplDetect109()
    {
        $this->assertEquals('S-Бугаков', $this->object->splitFullName('Бугаков').'-Бугаков');
    }
    public function testSplDetect110()
    {
        $this->assertEquals('S-Буданов', $this->object->splitFullName('Буданов').'-Буданов');
    }
    public function testSplDetect111()
    {
        $this->assertEquals('S-Будников', $this->object->splitFullName('Будников').'-Будников');
    }
    public function testSplDetect112()
    {
        $this->assertEquals('S-Будылин', $this->object->splitFullName('Будылин').'-Будылин');
    }
    public function testSplDetect113()
    {
        $this->assertEquals('S-Букин', $this->object->splitFullName('Букин').'-Букин');
    }
    public function testSplDetect114()
    {
        $this->assertEquals('S-Букирь', $this->object->splitFullName('Букирь').'-Букирь');
    }
    public function testSplDetect115()
    {
        $this->assertEquals('S-Буклин', $this->object->splitFullName('Буклин').'-Буклин');
    }
    public function testSplDetect116()
    {
        $this->assertEquals('S-Булгаков', $this->object->splitFullName('Булгаков').'-Булгаков');
    }
    public function testSplDetect117()
    {
        $this->assertEquals('S-Бунин', $this->object->splitFullName('Бунин').'-Бунин');
    }
    public function testSplDetect118()
    {
        $this->assertEquals('S-Бурков', $this->object->splitFullName('Бурков').'-Бурков');
    }
    public function testSplDetect119()
    {
        $this->assertEquals('S-Буров', $this->object->splitFullName('Буров').'-Буров');
    }
    public function testSplDetect120()
    {
        $this->assertEquals('S-Бурцов', $this->object->splitFullName('Бурцов').'-Бурцов');
    }
    public function testSplDetect121()
    {
        $this->assertEquals('S-Буряков', $this->object->splitFullName('Буряков').'-Буряков');
    }
    public function testSplDetect122()
    {
        $this->assertEquals('S-Бутылин', $this->object->splitFullName('Бутылин').'-Бутылин');
    }
    public function testSplDetect123()
    {
        $this->assertEquals('S-Былинкин', $this->object->splitFullName('Былинкин').'-Былинкин');
    }
    public function testSplDetect124()
    {
        $this->assertEquals('S-Бычков', $this->object->splitFullName('Бычков').'-Бычков');
    }
    public function testSplDetect125()
    {
        $this->assertEquals('S-Вавилов', $this->object->splitFullName('Вавилов').'-Вавилов');
    }
    public function testSplDetect126()
    {
        $this->assertEquals('S-Вагин', $this->object->splitFullName('Вагин').'-Вагин');
    }
    public function testSplDetect127()
    {
        $this->assertEquals('S-Вазов', $this->object->splitFullName('Вазов').'-Вазов');
    }
    public function testSplDetect128()
    {
        $this->assertEquals('S-Валевач', $this->object->splitFullName('Валевач').'-Валевач');
    }
    public function testSplDetect129()
    {
        $this->assertEquals('S-Варенников', $this->object->splitFullName('Варенников').'-Варенников');
    }
    public function testSplDetect130()
    {
        $this->assertEquals('S-Васильев', $this->object->splitFullName('Васильев').'-Васильев');
    }
    public function testSplDetect131()
    {
        $this->assertEquals('S-Васин', $this->object->splitFullName('Васин').'-Васин');
    }
    public function testSplDetect132()
    {
        $this->assertEquals('S-Васнев', $this->object->splitFullName('Васнев').'-Васнев');
    }
    public function testSplDetect133()
    {
        $this->assertEquals('S-Васнецов', $this->object->splitFullName('Васнецов').'-Васнецов');
    }
    public function testSplDetect134()
    {
        $this->assertEquals('S-Вахров', $this->object->splitFullName('Вахров').'-Вахров');
    }
    public function testSplDetect135()
    {
        $this->assertEquals('S-Вахрушев', $this->object->splitFullName('Вахрушев').'-Вахрушев');
    }
    public function testSplDetect136()
    {
        $this->assertEquals('S-Венедиктов', $this->object->splitFullName('Венедиктов').'-Венедиктов');
    }
    public function testSplDetect137()
    {
        $this->assertEquals('S-Веденеев', $this->object->splitFullName('Веденеев').'-Веденеев');
    }
    public function testSplDetect138()
    {
        $this->assertEquals('S-Веденин', $this->object->splitFullName('Веденин').'-Веденин');
    }
    public function testSplDetect139()
    {
        $this->assertEquals('S-Ведерников', $this->object->splitFullName('Ведерников').'-Ведерников');
    }
    public function testSplDetect140()
    {
        $this->assertEquals('S-Вергунов', $this->object->splitFullName('Вергунов').'-Вергунов');
    }
    public function testSplDetect141()
    {
        $this->assertEquals('S-Верещагин', $this->object->splitFullName('Верещагин').'-Верещагин');
    }
    public function testSplDetect142()
    {
        $this->assertEquals('S-Вершинин', $this->object->splitFullName('Вершинин').'-Вершинин');
    }
    public function testSplDetect143()
    {
        $this->assertEquals('S-Веселов', $this->object->splitFullName('Веселов').'-Веселов');
    }
    public function testSplDetect144()
    {
        $this->assertEquals('S-Викашев', $this->object->splitFullName('Викашев').'-Викашев');
    }
    public function testSplDetect145()
    {
        $this->assertEquals('S-Виноградов', $this->object->splitFullName('Виноградов').'-Виноградов');
    }
    public function testSplDetect146()
    {
        $this->assertEquals('S-Винокуров', $this->object->splitFullName('Винокуров').'-Винокуров');
    }
    public function testSplDetect147()
    {
        $this->assertEquals('S-Витаев', $this->object->splitFullName('Витаев').'-Витаев');
    }
    public function testSplDetect148()
    {
        $this->assertEquals('S-Витвинин', $this->object->splitFullName('Витвинин').'-Витвинин');
    }
    public function testSplDetect149()
    {
        $this->assertEquals('S-Вицин', $this->object->splitFullName('Вицин').'-Вицин');
    }
    public function testSplDetect150()
    {
        $this->assertEquals('S-Водоватов', $this->object->splitFullName('Водоватов').'-Водоватов');
    }
    public function testSplDetect151()
    {
        $this->assertEquals('S-Воликов', $this->object->splitFullName('Воликов').'-Воликов');
    }
    public function testSplDetect152()
    {
        $this->assertEquals('S-Волков', $this->object->splitFullName('Волков').'-Волков');
    }
    public function testSplDetect153()
    {
        $this->assertEquals('S-Вольваков', $this->object->splitFullName('Вольваков').'-Вольваков');
    }
    public function testSplDetect154()
    {
        $this->assertEquals('S-Воробьев', $this->object->splitFullName('Воробьев').'-Воробьев');
    }
    public function testSplDetect155()
    {
        $this->assertEquals('S-Воронин', $this->object->splitFullName('Воронин').'-Воронин');
    }
    public function testSplDetect156()
    {
        $this->assertEquals('S-Воронов', $this->object->splitFullName('Воронов').'-Воронов');
    }
    public function testSplDetect157()
    {
        $this->assertEquals('S-Воронков', $this->object->splitFullName('Воронков').'-Воронков');
    }
    public function testSplDetect158()
    {
        $this->assertEquals('S-Воронцов', $this->object->splitFullName('Воронцов').'-Воронцов');
    }
    public function testSplDetect159()
    {
        $this->assertEquals('S-Воскобойников', $this->object->splitFullName('Воскобойников').'-Воскобойников');
    }
    public function testSplDetect160()
    {
        $this->assertEquals('S-Вотяков', $this->object->splitFullName('Вотяков').'-Вотяков');
    }
    public function testSplDetect161()
    {
        $this->assertEquals('S-Вырыпаев', $this->object->splitFullName('Вырыпаев').'-Вырыпаев');
    }
    public function testSplDetect162()
    {
        $this->assertEquals('S-Гавриков', $this->object->splitFullName('Гавриков').'-Гавриков');
    }
    public function testSplDetect163()
    {
        $this->assertEquals('S-Гаврилов', $this->object->splitFullName('Гаврилов').'-Гаврилов');
    }
    public function testSplDetect164()
    {
        $this->assertEquals('S-Гагарин', $this->object->splitFullName('Гагарин').'-Гагарин');
    }
    public function testSplDetect165()
    {
        $this->assertEquals('S-Гаголин', $this->object->splitFullName('Гаголин').'-Гаголин');
    }
    public function testSplDetect166()
    {
        $this->assertEquals('S-Галдин', $this->object->splitFullName('Галдин').'-Галдин');
    }
    public function testSplDetect167()
    {
        $this->assertEquals('S-Галкин', $this->object->splitFullName('Галкин').'-Галкин');
    }
    public function testSplDetect168()
    {
        $this->assertEquals('S-Галыгин', $this->object->splitFullName('Галыгин').'-Галыгин');
    }
    public function testSplDetect169()
    {
        $this->assertEquals('S-Гарин', $this->object->splitFullName('Гарин').'-Гарин');
    }
    public function testSplDetect170()
    {
        $this->assertEquals('S-Гачев', $this->object->splitFullName('Гачев').'-Гачев');
    }
    public function testSplDetect171()
    {
        $this->assertEquals('S-Генкин', $this->object->splitFullName('Генкин').'-Генкин');
    }
    public function testSplDetect172()
    {
        $this->assertEquals('S-Герасимов', $this->object->splitFullName('Герасимов').'-Герасимов');
    }
    public function testSplDetect173()
    {
        $this->assertEquals('S-Гибазов', $this->object->splitFullName('Гибазов').'-Гибазов');
    }
    public function testSplDetect174()
    {
        $this->assertEquals('S-Гилёв', $this->object->splitFullName('Гилёв').'-Гилёв');
    }
    public function testSplDetect175()
    {
        $this->assertEquals('S-Глазков', $this->object->splitFullName('Глазков').'-Глазков');
    }
    public function testSplDetect176()
    {
        $this->assertEquals('S-Голованов', $this->object->splitFullName('Голованов').'-Голованов');
    }
    public function testSplDetect177()
    {
        $this->assertEquals('S-Головин', $this->object->splitFullName('Головин').'-Головин');
    }
    public function testSplDetect178()
    {
        $this->assertEquals('S-Голодяев', $this->object->splitFullName('Голодяев').'-Голодяев');
    }
    public function testSplDetect179()
    {
        $this->assertEquals('S-Голубев', $this->object->splitFullName('Голубев').'-Голубев');
    }
    public function testSplDetect180()
    {
        $this->assertEquals('S-Голубов', $this->object->splitFullName('Голубов').'-Голубов');
    }
    public function testSplDetect181()
    {
        $this->assertEquals('S-Голубцов', $this->object->splitFullName('Голубцов').'-Голубцов');
    }
    public function testSplDetect182()
    {
        $this->assertEquals('S-Гончаров', $this->object->splitFullName('Гончаров').'-Гончаров');
    }
    public function testSplDetect183()
    {
        $this->assertEquals('S-Горбачёв', $this->object->splitFullName('Горбачёв').'-Горбачёв');
    }
    public function testSplDetect184()
    {
        $this->assertEquals('S-Горбунов', $this->object->splitFullName('Горбунов').'-Горбунов');
    }
    public function testSplDetect185()
    {
        $this->assertEquals('S-Горбунков', $this->object->splitFullName('Горбунков').'-Горбунков');
    }
    public function testSplDetect186()
    {
        $this->assertEquals('S-Горев', $this->object->splitFullName('Горев').'-Горев');
    }
    public function testSplDetect187()
    {
        $this->assertEquals('S-Горелов', $this->object->splitFullName('Горелов').'-Горелов');
    }
    public function testSplDetect188()
    {
        $this->assertEquals('S-Горемыкин', $this->object->splitFullName('Горемыкин').'-Горемыкин');
    }
    public function testSplDetect189()
    {
        $this->assertEquals('S-Горюнов', $this->object->splitFullName('Горюнов').'-Горюнов');
    }
    public function testSplDetect190()
    {
        $this->assertEquals('S-Грачёв', $this->object->splitFullName('Грачёв').'-Грачёв');
    }
    public function testSplDetect191()
    {
        $this->assertEquals('S-Графов', $this->object->splitFullName('Графов').'-Графов');
    }
    public function testSplDetect192()
    {
        $this->assertEquals('S-Гретченко', $this->object->splitFullName('Гретченко').'-Гретченко');
    }
    public function testSplDetect193()
    {
        $this->assertEquals('S-Гречко', $this->object->splitFullName('Гречко').'-Гречко');
    }
    public function testSplDetect194()
    {
        $this->assertEquals('S-Грешнев', $this->object->splitFullName('Грешнев').'-Грешнев');
    }
    public function testSplDetect195()
    {
        $this->assertEquals('S-Грибов', $this->object->splitFullName('Грибов').'-Грибов');
    }
    public function testSplDetect196()
    {
        $this->assertEquals('S-Грибоедов', $this->object->splitFullName('Грибоедов').'-Грибоедов');
    }
    public function testSplDetect197()
    {
        $this->assertEquals('S-Григорьев', $this->object->splitFullName('Григорьев').'-Григорьев');
    }
    public function testSplDetect198()
    {
        $this->assertEquals('S-Гринин', $this->object->splitFullName('Гринин').'-Гринин');
    }
    public function testSplDetect199()
    {
        $this->assertEquals('S-Гришин', $this->object->splitFullName('Гришин').'-Гришин');
    }
    public function testSplDetect200()
    {
        $this->assertEquals('S-Громов', $this->object->splitFullName('Громов').'-Громов');
    }
    public function testSplDetect201()
    {
        $this->assertEquals('S-Громыко', $this->object->splitFullName('Громыко').'-Громыко');
    }
    public function testSplDetect202()
    {
        $this->assertEquals('S-Гулин', $this->object->splitFullName('Гулин').'-Гулин');
    }
    public function testSplDetect203()
    {
        $this->assertEquals('S-Гурьянов', $this->object->splitFullName('Гурьянов').'-Гурьянов');
    }
    public function testSplDetect204()
    {
        $this->assertEquals('S-Гусаров', $this->object->splitFullName('Гусаров').'-Гусаров');
    }
    public function testSplDetect205()
    {
        $this->assertEquals('S-Гусев', $this->object->splitFullName('Гусев').'-Гусев');
    }
    public function testSplDetect206()
    {
        $this->assertEquals('S-Гунин', $this->object->splitFullName('Гунин').'-Гунин');
    }
    public function testSplDetect207()
    {
        $this->assertEquals('S-Гущин', $this->object->splitFullName('Гущин').'-Гущин');
    }
    public function testSplDetect208()
    {
        $this->assertEquals('S-Головаха', $this->object->splitFullName('Головаха').'-Головаха');
    }
    public function testSplDetect209()
    {
        $this->assertEquals('S-Дорофеев', $this->object->splitFullName('Дорофеев').'-Дорофеев');
    }
    public function testSplDetect210()
    {
        $this->assertEquals('S-Давыдкин', $this->object->splitFullName('Давыдкин').'-Давыдкин');
    }
    public function testSplDetect211()
    {
        $this->assertEquals('S-Данильцин', $this->object->splitFullName('Данильцин').'-Данильцин');
    }
    public function testSplDetect212()
    {
        $this->assertEquals('S-Дворников', $this->object->splitFullName('Дворников').'-Дворников');
    }
    public function testSplDetect213()
    {
        $this->assertEquals('S-Деменок', $this->object->splitFullName('Деменок').'-Деменок');
    }
    public function testSplDetect214()
    {
        $this->assertEquals('S-Дементьев', $this->object->splitFullName('Дементьев').'-Дементьев');
    }
    public function testSplDetect215()
    {
        $this->assertEquals('S-Демидов', $this->object->splitFullName('Демидов').'-Демидов');
    }
    public function testSplDetect216()
    {
        $this->assertEquals('S-Деникин', $this->object->splitFullName('Деникин').'-Деникин');
    }
    public function testSplDetect217()
    {
        $this->assertEquals('S-Дёгтин', $this->object->splitFullName('Дёгтин').'-Дёгтин');
    }
    public function testSplDetect218()
    {
        $this->assertEquals('S-Дегтярев', $this->object->splitFullName('Дегтярев').'-Дегтярев');
    }
    public function testSplDetect219()
    {
        $this->assertEquals('S-Дежнёв', $this->object->splitFullName('Дежнёв').'-Дежнёв');
    }
    public function testSplDetect220()
    {
        $this->assertEquals('S-Делов', $this->object->splitFullName('Делов').'-Делов');
    }
    public function testSplDetect221()
    {
        $this->assertEquals('S-Дементьев', $this->object->splitFullName('Дементьев').'-Дементьев');
    }
    public function testSplDetect222()
    {
        $this->assertEquals('S-Дёмин', $this->object->splitFullName('Дёмин').'-Дёмин');
    }
    public function testSplDetect223()
    {
        $this->assertEquals('S-Державин', $this->object->splitFullName('Державин').'-Державин');
    }
    public function testSplDetect224()
    {
        $this->assertEquals('S-Дернов', $this->object->splitFullName('Дернов').'-Дернов');
    }
    public function testSplDetect225()
    {
        $this->assertEquals('S-Десятков', $this->object->splitFullName('Десятков').'-Десятков');
    }
    public function testSplDetect226()
    {
        $this->assertEquals('S-Дмитриев', $this->object->splitFullName('Дмитриев').'-Дмитриев');
    }
    public function testSplDetect227()
    {
        $this->assertEquals('S-Добронравов', $this->object->splitFullName('Добронравов').'-Добронравов');
    }
    public function testSplDetect228()
    {
        $this->assertEquals('S-Добрынин', $this->object->splitFullName('Добрынин').'-Добрынин');
    }
    public function testSplDetect229()
    {
        $this->assertEquals('S-Долгоруков', $this->object->splitFullName('Долгоруков').'-Долгоруков');
    }
    public function testSplDetect230()
    {
        $this->assertEquals('S-Должиков', $this->object->splitFullName('Должиков').'-Должиков');
    }
    public function testSplDetect231()
    {
        $this->assertEquals('S-Домашев', $this->object->splitFullName('Домашев').'-Домашев');
    }
    public function testSplDetect232()
    {
        $this->assertEquals('S-Достовалов', $this->object->splitFullName('Достовалов').'-Достовалов');
    }
    public function testSplDetect233()
    {
        $this->assertEquals('S-Драгомиров', $this->object->splitFullName('Драгомиров').'-Драгомиров');
    }
    public function testSplDetect234()
    {
        $this->assertEquals('S-Дресвянин', $this->object->splitFullName('Дресвянин').'-Дресвянин');
    }
    public function testSplDetect235()
    {
        $this->assertEquals('S-Дрёмов', $this->object->splitFullName('Дрёмов').'-Дрёмов');
    }
    public function testSplDetect236()
    {
        $this->assertEquals('S-Друганин', $this->object->splitFullName('Друганин').'-Друганин');
    }
    public function testSplDetect237()
    {
        $this->assertEquals('S-Другов', $this->object->splitFullName('Другов').'-Другов');
    }
    public function testSplDetect238()
    {
        $this->assertEquals('S-Дубинин', $this->object->splitFullName('Дубинин').'-Дубинин');
    }
    public function testSplDetect239()
    {
        $this->assertEquals('S-Дубов', $this->object->splitFullName('Дубов').'-Дубов');
    }
    public function testSplDetect240()
    {
        $this->assertEquals('S-Дубровский', $this->object->splitFullName('Дубровский').'-Дубровский');
    }
    public function testSplDetect241()
    {
        $this->assertEquals('S-Дульцев', $this->object->splitFullName('Дульцев').'-Дульцев');
    }
    public function testSplDetect242()
    {
        $this->assertEquals('S-Думановский', $this->object->splitFullName('Думановский').'-Думановский');
    }
    public function testSplDetect243()
    {
        $this->assertEquals('S-Дуров', $this->object->splitFullName('Дуров').'-Дуров');
    }
    public function testSplDetect244()
    {
        $this->assertEquals('S-Дятлов', $this->object->splitFullName('Дятлов').'-Дятлов');
    }
    public function testSplDetect245()
    {
        $this->assertEquals('S-Евдокимов', $this->object->splitFullName('Евдокимов').'-Евдокимов');
    }
    public function testSplDetect246()
    {
        $this->assertEquals('S-Евстигнеев', $this->object->splitFullName('Евстигнеев').'-Евстигнеев');
    }
    public function testSplDetect247()
    {
        $this->assertEquals('S-Егоров', $this->object->splitFullName('Егоров').'-Егоров');
    }
    public function testSplDetect248()
    {
        $this->assertEquals('S-Едемский', $this->object->splitFullName('Едемский').'-Едемский');
    }
    public function testSplDetect249()
    {
        $this->assertEquals('S-Ежов', $this->object->splitFullName('Ежов').'-Ежов');
    }
    public function testSplDetect250()
    {
        $this->assertEquals('S-Елагин', $this->object->splitFullName('Елагин').'-Елагин');
    }
    public function testSplDetect251()
    {
        $this->assertEquals('S-Елизаров', $this->object->splitFullName('Елизаров').'-Елизаров');
    }
    public function testSplDetect252()
    {
        $this->assertEquals('S-Елисеев', $this->object->splitFullName('Елисеев').'-Елисеев');
    }
    public function testSplDetect253()
    {
        $this->assertEquals('S-Ельцин', $this->object->splitFullName('Ельцин').'-Ельцин');
    }
    public function testSplDetect254()
    {
        $this->assertEquals('S-Ельцов', $this->object->splitFullName('Ельцов').'-Ельцов');
    }
    public function testSplDetect255()
    {
        $this->assertEquals('S-Емельяненко', $this->object->splitFullName('Емельяненко').'-Емельяненко');
    }
    public function testSplDetect256()
    {
        $this->assertEquals('S-Емельянов', $this->object->splitFullName('Емельянов').'-Емельянов');
    }
    public function testSplDetect257()
    {
        $this->assertEquals('S-Енин', $this->object->splitFullName('Енин').'-Енин');
    }
    public function testSplDetect258()
    {
        $this->assertEquals('S-Ерзов', $this->object->splitFullName('Ерзов').'-Ерзов');
    }
    public function testSplDetect259()
    {
        $this->assertEquals('S-Ермаков', $this->object->splitFullName('Ермаков').'-Ермаков');
    }
    public function testSplDetect260()
    {
        $this->assertEquals('S-Ермилов', $this->object->splitFullName('Ермилов').'-Ермилов');
    }
    public function testSplDetect261()
    {
        $this->assertEquals('S-Еромеев', $this->object->splitFullName('Еромеев').'-Еромеев');
    }
    public function testSplDetect262()
    {
        $this->assertEquals('S-Ерофеев', $this->object->splitFullName('Ерофеев').'-Ерофеев');
    }
    public function testSplDetect263()
    {
        $this->assertEquals('S-Ершов', $this->object->splitFullName('Ершов').'-Ершов');
    }
    public function testSplDetect264()
    {
        $this->assertEquals('S-Есипов', $this->object->splitFullName('Есипов').'-Есипов');
    }
    public function testSplDetect265()
    {
        $this->assertEquals('S-Ефимов', $this->object->splitFullName('Ефимов').'-Ефимов');
    }
    public function testSplDetect266()
    {
        $this->assertEquals('S-Ефремов', $this->object->splitFullName('Ефремов').'-Ефремов');
    }
    public function testSplDetect267()
    {
        $this->assertEquals('S-Емелин', $this->object->splitFullName('Емелин').'-Емелин');
    }
    public function testSplDetect268()
    {
        $this->assertEquals('S-Ерохин', $this->object->splitFullName('Ерохин').'-Ерохин');
    }
    public function testSplDetect269()
    {
        $this->assertEquals('S-Ерёмин', $this->object->splitFullName('Ерёмин').'-Ерёмин');
    }
    public function testSplDetect270()
    {
        $this->assertEquals('S-Ешевский', $this->object->splitFullName('Ешевский').'-Ешевский');
    }
    public function testSplDetect271()
    {
        $this->assertEquals('S-Жабин', $this->object->splitFullName('Жабин').'-Жабин');
    }
    public function testSplDetect272()
    {
        $this->assertEquals('S-Жарков', $this->object->splitFullName('Жарков').'-Жарков');
    }
    public function testSplDetect273()
    {
        $this->assertEquals('S-Жарыхин', $this->object->splitFullName('Жарыхин').'-Жарыхин');
    }
    public function testSplDetect274()
    {
        $this->assertEquals('S-Жвиков', $this->object->splitFullName('Жвиков').'-Жвиков');
    }
    public function testSplDetect275()
    {
        $this->assertEquals('S-Жданов', $this->object->splitFullName('Жданов').'-Жданов');
    }
    public function testSplDetect276()
    {
        $this->assertEquals('S-Жеглов', $this->object->splitFullName('Жеглов').'-Жеглов');
    }
    public function testSplDetect277()
    {
        $this->assertEquals('S-Железкин', $this->object->splitFullName('Железкин').'-Железкин');
    }
    public function testSplDetect278()
    {
        $this->assertEquals('S-Жестакова', $this->object->splitFullName('Жестакова').'-Жестакова');
    }
    public function testSplDetect279()
    {
        $this->assertEquals('S-Живенков', $this->object->splitFullName('Живенков').'-Живенков');
    }
    public function testSplDetect280()
    {
        $this->assertEquals('S-Жиглов', $this->object->splitFullName('Жиглов').'-Жиглов');
    }
    public function testSplDetect281()
    {
        $this->assertEquals('S-Жигунов', $this->object->splitFullName('Жигунов').'-Жигунов');
    }
    public function testSplDetect282()
    {
        $this->assertEquals('S-Жидков', $this->object->splitFullName('Жидков').'-Жидков');
    }
    public function testSplDetect283()
    {
        $this->assertEquals('S-Жикин', $this->object->splitFullName('Жикин').'-Жикин');
    }
    public function testSplDetect284()
    {
        $this->assertEquals('S-Жилин', $this->object->splitFullName('Жилин').'-Жилин');
    }
    public function testSplDetect285()
    {
        $this->assertEquals('S-Жилов', $this->object->splitFullName('Жилов').'-Жилов');
    }
    public function testSplDetect286()
    {
        $this->assertEquals('S-Жолдин', $this->object->splitFullName('Жолдин').'-Жолдин');
    }
    public function testSplDetect287()
    {
        $this->assertEquals('S-Жуков', $this->object->splitFullName('Жуков').'-Жуков');
    }
    public function testSplDetect288()
    {
        $this->assertEquals('S-Жутов', $this->object->splitFullName('Жутов').'-Жутов');
    }
    public function testSplDetect289()
    {
        $this->assertEquals('S-Журавлёв', $this->object->splitFullName('Журавлёв').'-Журавлёв');
    }
    public function testSplDetect290()
    {
        $this->assertEquals('S-Журов', $this->object->splitFullName('Журов').'-Журов');
    }
    public function testSplDetect291()
    {
        $this->assertEquals('S-Заврагин', $this->object->splitFullName('Заврагин').'-Заврагин');
    }
    public function testSplDetect292()
    {
        $this->assertEquals('S-Завражин', $this->object->splitFullName('Завражин').'-Завражин');
    }
    public function testSplDetect293()
    {
        $this->assertEquals('S-Завражнов', $this->object->splitFullName('Завражнов').'-Завражнов');
    }
    public function testSplDetect294()
    {
        $this->assertEquals('S-Завражный', $this->object->splitFullName('Завражный').'-Завражный');
    }
    public function testSplDetect295()
    {
        $this->assertEquals('S-Завразин', $this->object->splitFullName('Завразин').'-Завразин');
    }
    public function testSplDetect296()
    {
        $this->assertEquals('S-Завьялов', $this->object->splitFullName('Завьялов').'-Завьялов');
    }
    public function testSplDetect297()
    {
        $this->assertEquals('S-Задорнов', $this->object->splitFullName('Задорнов').'-Задорнов');
    }
    public function testSplDetect298()
    {
        $this->assertEquals('S-Задорожный', $this->object->splitFullName('Задорожный').'-Задорожный');
    }
    public function testSplDetect299()
    {
        $this->assertEquals('S-Зайцев', $this->object->splitFullName('Зайцев').'-Зайцев');
    }
    public function testSplDetect300()
    {
        $this->assertEquals('S-Закревский', $this->object->splitFullName('Закревский').'-Закревский');
    }
    public function testSplDetect301()
    {
        $this->assertEquals('S-Закрятин', $this->object->splitFullName('Закрятин').'-Закрятин');
    }
    public function testSplDetect302()
    {
        $this->assertEquals('S-Захаров', $this->object->splitFullName('Захаров').'-Захаров');
    }
    public function testSplDetect303()
    {
        $this->assertEquals('S-Захарьин', $this->object->splitFullName('Захарьин').'-Захарьин');
    }
    public function testSplDetect304()
    {
        $this->assertEquals('S-Звягин', $this->object->splitFullName('Звягин').'-Звягин');
    }
    public function testSplDetect305()
    {
        $this->assertEquals('S-Зёмин', $this->object->splitFullName('Зёмин').'-Зёмин');
    }
    public function testSplDetect306()
    {
        $this->assertEquals('S-Зимин', $this->object->splitFullName('Зимин').'-Зимин');
    }
    public function testSplDetect307()
    {
        $this->assertEquals('S-Золин', $this->object->splitFullName('Золин').'-Золин');
    }
    public function testSplDetect308()
    {
        $this->assertEquals('S-Зонов', $this->object->splitFullName('Зонов').'-Зонов');
    }
    public function testSplDetect309()
    {
        $this->assertEquals('S-Зубков', $this->object->splitFullName('Зубков').'-Зубков');
    }
    public function testSplDetect310()
    {
        $this->assertEquals('S-Зубов', $this->object->splitFullName('Зубов').'-Зубов');
    }
    public function testSplDetect311()
    {
        $this->assertEquals('S-Зуев', $this->object->splitFullName('Зуев').'-Зуев');
    }
    public function testSplDetect312()
    {
        $this->assertEquals('S-Зуйков', $this->object->splitFullName('Зуйков').'-Зуйков');
    }
    public function testSplDetect313()
    {
        $this->assertEquals('S-Зимняков', $this->object->splitFullName('Зимняков').'-Зимняков');
    }
    public function testSplDetect314()
    {
        $this->assertEquals('S-Зинченко', $this->object->splitFullName('Зинченко').'-Зинченко');
    }
    public function testSplDetect315()
    {
        $this->assertEquals('S-Зыкин', $this->object->splitFullName('Зыкин').'-Зыкин');
    }
    public function testSplDetect316()
    {
        $this->assertEquals('S-Зырянов', $this->object->splitFullName('Зырянов').'-Зырянов');
    }
    public function testSplDetect317()
    {
        $this->assertEquals('S-Зюганов', $this->object->splitFullName('Зюганов').'-Зюганов');
    }
    public function testSplDetect318()
    {
        $this->assertEquals('S-Зверев', $this->object->splitFullName('Зверев').'-Зверев');
    }
    public function testSplDetect319()
    {
        $this->assertEquals('S-Игнаткович', $this->object->splitFullName('Игнаткович').'-Игнаткович');
    }
    public function testSplDetect320()
    {
        $this->assertEquals('S-Ивазов', $this->object->splitFullName('Ивазов').'-Ивазов');
    }
    public function testSplDetect321()
    {
        $this->assertEquals('S-Ивакин', $this->object->splitFullName('Ивакин').'-Ивакин');
    }
    public function testSplDetect322()
    {
        $this->assertEquals('S-Ибрагимов', $this->object->splitFullName('Ибрагимов').'-Ибрагимов');
    }
    public function testSplDetect323()
    {
        $this->assertEquals('S-Иванов', $this->object->splitFullName('Иванов').'-Иванов');
    }
    public function testSplDetect324()
    {
        $this->assertEquals('S-Иванков', $this->object->splitFullName('Иванков').'-Иванков');
    }
    public function testSplDetect325()
    {
        $this->assertEquals('S-Ивашин', $this->object->splitFullName('Ивашин').'-Ивашин');
    }
    public function testSplDetect326()
    {
        $this->assertEquals('S-Ивашов', $this->object->splitFullName('Ивашов').'-Ивашов');
    }
    public function testSplDetect327()
    {
        $this->assertEquals('S-Ивкин', $this->object->splitFullName('Ивкин').'-Ивкин');
    }
    public function testSplDetect328()
    {
        $this->assertEquals('S-Иволгин', $this->object->splitFullName('Иволгин').'-Иволгин');
    }
    public function testSplDetect329()
    {
        $this->assertEquals('S-Игнатьев', $this->object->splitFullName('Игнатьев').'-Игнатьев');
    }
    public function testSplDetect330()
    {
        $this->assertEquals('S-Игошин', $this->object->splitFullName('Игошин').'-Игошин');
    }
    public function testSplDetect331()
    {
        $this->assertEquals('S-Исмайлов', $this->object->splitFullName('Исмайлов').'-Исмайлов');
    }
    public function testSplDetect332()
    {
        $this->assertEquals('S-Измайлов', $this->object->splitFullName('Измайлов').'-Измайлов');
    }
    public function testSplDetect333()
    {
        $this->assertEquals('S-Иканов', $this->object->splitFullName('Иканов').'-Иканов');
    }
    public function testSplDetect334()
    {
        $this->assertEquals('S-Икашев', $this->object->splitFullName('Икашев').'-Икашев');
    }
    public function testSplDetect335()
    {
        $this->assertEquals('S-Ильин', $this->object->splitFullName('Ильин').'-Ильин');
    }
    public function testSplDetect336()
    {
        $this->assertEquals('S-Илькун', $this->object->splitFullName('Илькун').'-Илькун');
    }
    public function testSplDetect337()
    {
        $this->assertEquals('S-Илюшин', $this->object->splitFullName('Илюшин').'-Илюшин');
    }
    public function testSplDetect338()
    {
        $this->assertEquals('S-Ильюшин', $this->object->splitFullName('Ильюшин').'-Ильюшин');
    }
    public function testSplDetect339()
    {
        $this->assertEquals('S-Иноземцев', $this->object->splitFullName('Иноземцев').'-Иноземцев');
    }
    public function testSplDetect340()
    {
        $this->assertEquals('S-Ипатьев', $this->object->splitFullName('Ипатьев').'-Ипатьев');
    }
    public function testSplDetect341()
    {
        $this->assertEquals('S-Исаев', $this->object->splitFullName('Исаев').'-Исаев');
    }
    public function testSplDetect342()
    {
        $this->assertEquals('S-Истомин', $this->object->splitFullName('Истомин').'-Истомин');
    }
    public function testSplDetect343()
    {
        $this->assertEquals('S-Кабинов', $this->object->splitFullName('Кабинов').'-Кабинов');
    }
    public function testSplDetect344()
    {
        $this->assertEquals('S-Каблуков', $this->object->splitFullName('Каблуков').'-Каблуков');
    }
    public function testSplDetect345()
    {
        $this->assertEquals('S-Каверин', $this->object->splitFullName('Каверин').'-Каверин');
    }
    public function testSplDetect346()
    {
        $this->assertEquals('S-Кадников', $this->object->splitFullName('Кадников').'-Кадников');
    }
    public function testSplDetect347()
    {
        $this->assertEquals('S-Кадцын', $this->object->splitFullName('Кадцын').'-Кадцын');
    }
    public function testSplDetect348()
    {
        $this->assertEquals('S-Казаков', $this->object->splitFullName('Казаков').'-Казаков');
    }
    public function testSplDetect349()
    {
        $this->assertEquals('S-Казанцев', $this->object->splitFullName('Казанцев').'-Казанцев');
    }
    public function testSplDetect350()
    {
        $this->assertEquals('S-Казарезов', $this->object->splitFullName('Казарезов').'-Казарезов');
    }
    public function testSplDetect351()
    {
        $this->assertEquals('S-Калашник', $this->object->splitFullName('Калашник').'-Калашник');
    }
    public function testSplDetect352()
    {
        $this->assertEquals('S-Калганов', $this->object->splitFullName('Калганов').'-Калганов');
    }
    public function testSplDetect353()
    {
        $this->assertEquals('S-Каменских', $this->object->splitFullName('Каменских').'-Каменских');
    }
    public function testSplDetect354()
    {
        $this->assertEquals('S-Камкин', $this->object->splitFullName('Камкин').'-Камкин');
    }
    public function testSplDetect355()
    {
        $this->assertEquals('S-Каналин', $this->object->splitFullName('Каналин').'-Каналин');
    }
    public function testSplDetect356()
    {
        $this->assertEquals('S-Кандинский', $this->object->splitFullName('Кандинский').'-Кандинский');
    }
    public function testSplDetect357()
    {
        $this->assertEquals('S-Капица', $this->object->splitFullName('Капица').'-Капица');
    }
    public function testSplDetect358()
    {
        $this->assertEquals('S-Капралов', $this->object->splitFullName('Капралов').'-Капралов');
    }
    public function testSplDetect359()
    {
        $this->assertEquals('S-Караваев', $this->object->splitFullName('Караваев').'-Караваев');
    }
    public function testSplDetect360()
    {
        $this->assertEquals('S-Караулов', $this->object->splitFullName('Караулов').'-Караулов');
    }
    public function testSplDetect361()
    {
        $this->assertEquals('S-Карев', $this->object->splitFullName('Карев').'-Карев');
    }
    public function testSplDetect362()
    {
        $this->assertEquals('S-Каретников', $this->object->splitFullName('Каретников').'-Каретников');
    }
    public function testSplDetect363()
    {
        $this->assertEquals('S-Каргин', $this->object->splitFullName('Каргин').'-Каргин');
    }
    public function testSplDetect364()
    {
        $this->assertEquals('S-Карташов', $this->object->splitFullName('Карташов').'-Карташов');
    }
    public function testSplDetect365()
    {
        $this->assertEquals('S-Карчагин', $this->object->splitFullName('Карчагин').'-Карчагин');
    }
    public function testSplDetect366()
    {
        $this->assertEquals('S-Касатый', $this->object->splitFullName('Касатый').'-Касатый');
    }
    public function testSplDetect367()
    {
        $this->assertEquals('S-Катин', $this->object->splitFullName('Катин').'-Катин');
    }
    public function testSplDetect368()
    {
        $this->assertEquals('S-Качусов', $this->object->splitFullName('Качусов').'-Качусов');
    }
    public function testSplDetect369()
    {
        $this->assertEquals('S-Кашарин', $this->object->splitFullName('Кашарин').'-Кашарин');
    }
    public function testSplDetect370()
    {
        $this->assertEquals('S-Каширин', $this->object->splitFullName('Каширин').'-Каширин');
    }
    public function testSplDetect371()
    {
        $this->assertEquals('S-Кашканов', $this->object->splitFullName('Кашканов').'-Кашканов');
    }
    public function testSplDetect372()
    {
        $this->assertEquals('S-Кашников', $this->object->splitFullName('Кашников').'-Кашников');
    }
    public function testSplDetect373()
    {
        $this->assertEquals('S-Киреев', $this->object->splitFullName('Киреев').'-Киреев');
    }
    public function testSplDetect374()
    {
        $this->assertEquals('S-Кирилишен', $this->object->splitFullName('Кирилишен').'-Кирилишен');
    }
    public function testSplDetect375()
    {
        $this->assertEquals('S-Кирилловский', $this->object->splitFullName('Кирилловский').'-Кирилловский');
    }
    public function testSplDetect376()
    {
        $this->assertEquals('S-Кирилов', $this->object->splitFullName('Кирилов').'-Кирилов');
    }
    public function testSplDetect377()
    {
        $this->assertEquals('S-Кирсанов', $this->object->splitFullName('Кирсанов').'-Кирсанов');
    }
    public function testSplDetect378()
    {
        $this->assertEquals('S-Кирьянов', $this->object->splitFullName('Кирьянов').'-Кирьянов');
    }
    public function testSplDetect379()
    {
        $this->assertEquals('S-Клепахов', $this->object->splitFullName('Клепахов').'-Клепахов');
    }
    public function testSplDetect380()
    {
        $this->assertEquals('S-Климов', $this->object->splitFullName('Климов').'-Климов');
    }
    public function testSplDetect381()
    {
        $this->assertEquals('S-Климушин', $this->object->splitFullName('Климушин').'-Климушин');
    }
    public function testSplDetect382()
    {
        $this->assertEquals('S-Клоков', $this->object->splitFullName('Клоков').'-Клоков');
    }
    public function testSplDetect383()
    {
        $this->assertEquals('S-Князев', $this->object->splitFullName('Князев').'-Князев');
    }
    public function testSplDetect384()
    {
        $this->assertEquals('S-Ковалёв', $this->object->splitFullName('Ковалёв').'-Ковалёв');
    }
    public function testSplDetect385()
    {
        $this->assertEquals('S-Ковалевский', $this->object->splitFullName('Ковалевский').'-Ковалевский');
    }
    public function testSplDetect386()
    {
        $this->assertEquals('S-Ковров', $this->object->splitFullName('Ковров').'-Ковров');
    }
    public function testSplDetect387()
    {
        $this->assertEquals('S-Ковшутин', $this->object->splitFullName('Ковшутин').'-Ковшутин');
    }
    public function testSplDetect388()
    {
        $this->assertEquals('S-Кожуров', $this->object->splitFullName('Кожуров').'-Кожуров');
    }
    public function testSplDetect389()
    {
        $this->assertEquals('S-Кожухов', $this->object->splitFullName('Кожухов').'-Кожухов');
    }
    public function testSplDetect390()
    {
        $this->assertEquals('S-Козаков', $this->object->splitFullName('Козаков').'-Козаков');
    }
    public function testSplDetect391()
    {
        $this->assertEquals('S-Козарь', $this->object->splitFullName('Козарь').'-Козарь');
    }
    public function testSplDetect392()
    {
        $this->assertEquals('S-Козлов', $this->object->splitFullName('Козлов').'-Козлов');
    }
    public function testSplDetect393()
    {
        $this->assertEquals('S-Козловский', $this->object->splitFullName('Козловский').'-Козловский');
    }
    public function testSplDetect394()
    {
        $this->assertEquals('S-Колесников', $this->object->splitFullName('Колесников').'-Колесников');
    }
    public function testSplDetect395()
    {
        $this->assertEquals('S-Колонтаев', $this->object->splitFullName('Колонтаев').'-Колонтаев');
    }
    public function testSplDetect396()
    {
        $this->assertEquals('S-Колосов', $this->object->splitFullName('Колосов').'-Колосов');
    }
    public function testSplDetect397()
    {
        $this->assertEquals('S-Кольцов', $this->object->splitFullName('Кольцов').'-Кольцов');
    }
    public function testSplDetect398()
    {
        $this->assertEquals('S-Комаров', $this->object->splitFullName('Комаров').'-Комаров');
    }
    public function testSplDetect399()
    {
        $this->assertEquals('S-Комзин', $this->object->splitFullName('Комзин').'-Комзин');
    }
    public function testSplDetect400()
    {
        $this->assertEquals('S-Комолов', $this->object->splitFullName('Комолов').'-Комолов');
    }
    public function testSplDetect401()
    {
        $this->assertEquals('S-Кондратьев', $this->object->splitFullName('Кондратьев').'-Кондратьев');
    }
    public function testSplDetect402()
    {
        $this->assertEquals('S-Конев', $this->object->splitFullName('Конев').'-Конев');
    }
    public function testSplDetect403()
    {
        $this->assertEquals('S-Конников', $this->object->splitFullName('Конников').'-Конников');
    }
    public function testSplDetect404()
    {
        $this->assertEquals('S-Коновалов', $this->object->splitFullName('Коновалов').'-Коновалов');
    }
    public function testSplDetect405()
    {
        $this->assertEquals('S-Коньяков', $this->object->splitFullName('Коньяков').'-Коньяков');
    }
    public function testSplDetect406()
    {
        $this->assertEquals('S-Коняшев', $this->object->splitFullName('Коняшев').'-Коняшев');
    }
    public function testSplDetect407()
    {
        $this->assertEquals('S-Копейкин', $this->object->splitFullName('Копейкин').'-Копейкин');
    }
    public function testSplDetect408()
    {
        $this->assertEquals('S-Коренев', $this->object->splitFullName('Коренев').'-Коренев');
    }
    public function testSplDetect409()
    {
        $this->assertEquals('S-Коренёв', $this->object->splitFullName('Коренёв').'-Коренёв');
    }
    public function testSplDetect410()
    {
        $this->assertEquals('S-Коржаков', $this->object->splitFullName('Коржаков').'-Коржаков');
    }
    public function testSplDetect411()
    {
        $this->assertEquals('S-Коржев', $this->object->splitFullName('Коржев').'-Коржев');
    }
    public function testSplDetect412()
    {
        $this->assertEquals('S-Корнев', $this->object->splitFullName('Корнев').'-Корнев');
    }
    public function testSplDetect413()
    {
        $this->assertEquals('S-Корнилов', $this->object->splitFullName('Корнилов').'-Корнилов');
    }
    public function testSplDetect414()
    {
        $this->assertEquals('S-Коровин', $this->object->splitFullName('Коровин').'-Коровин');
    }
    public function testSplDetect415()
    {
        $this->assertEquals('S-Королёв', $this->object->splitFullName('Королёв').'-Королёв');
    }
    public function testSplDetect416()
    {
        $this->assertEquals('S-Коротаев', $this->object->splitFullName('Коротаев').'-Коротаев');
    }
    public function testSplDetect417()
    {
        $this->assertEquals('S-Корчагин', $this->object->splitFullName('Корчагин').'-Корчагин');
    }
    public function testSplDetect418()
    {
        $this->assertEquals('S-Косарёв', $this->object->splitFullName('Косарёв').'-Косарёв');
    }
    public function testSplDetect419()
    {
        $this->assertEquals('S-Косков', $this->object->splitFullName('Косков').'-Косков');
    }
    public function testSplDetect420()
    {
        $this->assertEquals('S-Косомов', $this->object->splitFullName('Косомов').'-Косомов');
    }
    public function testSplDetect421()
    {
        $this->assertEquals('S-Косоруков', $this->object->splitFullName('Косоруков').'-Косоруков');
    }
    public function testSplDetect422()
    {
        $this->assertEquals('S-Костин', $this->object->splitFullName('Костин').'-Костин');
    }
    public function testSplDetect423()
    {
        $this->assertEquals('S-Косяк', $this->object->splitFullName('Косяк').'-Косяк');
    }
    public function testSplDetect424()
    {
        $this->assertEquals('S-Котов', $this->object->splitFullName('Котов').'-Котов');
    }
    public function testSplDetect425()
    {
        $this->assertEquals('S-Костомаров', $this->object->splitFullName('Костомаров').'-Костомаров');
    }
    public function testSplDetect426()
    {
        $this->assertEquals('S-Коченков', $this->object->splitFullName('Коченков').'-Коченков');
    }
    public function testSplDetect427()
    {
        $this->assertEquals('S-Кошелев', $this->object->splitFullName('Кошелев').'-Кошелев');
    }
    public function testSplDetect428()
    {
        $this->assertEquals('S-Кошечкин', $this->object->splitFullName('Кошечкин').'-Кошечкин');
    }
    public function testSplDetect429()
    {
        $this->assertEquals('S-Кошкин', $this->object->splitFullName('Кошкин').'-Кошкин');
    }
    public function testSplDetect430()
    {
        $this->assertEquals('S-Кравчук', $this->object->splitFullName('Кравчук').'-Кравчук');
    }
    public function testSplDetect431()
    {
        $this->assertEquals('S-Краев', $this->object->splitFullName('Краев').'-Краев');
    }
    public function testSplDetect432()
    {
        $this->assertEquals('S-Краснов', $this->object->splitFullName('Краснов').'-Краснов');
    }
    public function testSplDetect433()
    {
        $this->assertEquals('S-Красноперов', $this->object->splitFullName('Красноперов').'-Красноперов');
    }
    public function testSplDetect434()
    {
        $this->assertEquals('S-Кропанин', $this->object->splitFullName('Кропанин').'-Кропанин');
    }
    public function testSplDetect435()
    {
        $this->assertEquals('S-Кругликов', $this->object->splitFullName('Кругликов').'-Кругликов');
    }
    public function testSplDetect436()
    {
        $this->assertEquals('S-Круглов', $this->object->splitFullName('Круглов').'-Круглов');
    }
    public function testSplDetect437()
    {
        $this->assertEquals('S-Крупин', $this->object->splitFullName('Крупин').'-Крупин');
    }
    public function testSplDetect438()
    {
        $this->assertEquals('S-Крутин', $this->object->splitFullName('Крутин').'-Крутин');
    }
    public function testSplDetect439()
    {
        $this->assertEquals('S-Кручинкин', $this->object->splitFullName('Кручинкин').'-Кручинкин');
    }
    public function testSplDetect440()
    {
        $this->assertEquals('S-Крылов', $this->object->splitFullName('Крылов').'-Крылов');
    }
    public function testSplDetect441()
    {
        $this->assertEquals('S-Крысов', $this->object->splitFullName('Крысов').'-Крысов');
    }
    public function testSplDetect442()
    {
        $this->assertEquals('S-Крюков', $this->object->splitFullName('Крюков').'-Крюков');
    }
    public function testSplDetect443()
    {
        $this->assertEquals('S-Кубланов', $this->object->splitFullName('Кубланов').'-Кубланов');
    }
    public function testSplDetect444()
    {
        $this->assertEquals('S-Кудашов', $this->object->splitFullName('Кудашов').'-Кудашов');
    }
    public function testSplDetect445()
    {
        $this->assertEquals('S-Кудрин', $this->object->splitFullName('Кудрин').'-Кудрин');
    }
    public function testSplDetect446()
    {
        $this->assertEquals('S-Кудрявцев', $this->object->splitFullName('Кудрявцев').'-Кудрявцев');
    }
    public function testSplDetect447()
    {
        $this->assertEquals('S-Кудряшов', $this->object->splitFullName('Кудряшов').'-Кудряшов');
    }
    public function testSplDetect448()
    {
        $this->assertEquals('S-Кузнецов', $this->object->splitFullName('Кузнецов').'-Кузнецов');
    }
    public function testSplDetect449()
    {
        $this->assertEquals('S-Кузьмин', $this->object->splitFullName('Кузьмин').'-Кузьмин');
    }
    public function testSplDetect450()
    {
        $this->assertEquals('S-Куимов', $this->object->splitFullName('Куимов').'-Куимов');
    }
    public function testSplDetect451()
    {
        $this->assertEquals('S-Куклачёв', $this->object->splitFullName('Куклачёв').'-Куклачёв');
    }
    public function testSplDetect452()
    {
        $this->assertEquals('S-Кулагин', $this->object->splitFullName('Кулагин').'-Кулагин');
    }
    public function testSplDetect453()
    {
        $this->assertEquals('S-Кулибин', $this->object->splitFullName('Кулибин').'-Кулибин');
    }
    public function testSplDetect454()
    {
        $this->assertEquals('S-Куликов', $this->object->splitFullName('Куликов').'-Куликов');
    }
    public function testSplDetect455()
    {
        $this->assertEquals('S-Куракин', $this->object->splitFullName('Куракин').'-Куракин');
    }
    public function testSplDetect456()
    {
        $this->assertEquals('S-Курбатов', $this->object->splitFullName('Курбатов').'-Курбатов');
    }
    public function testSplDetect457()
    {
        $this->assertEquals('S-Курганов', $this->object->splitFullName('Курганов').'-Курганов');
    }
    public function testSplDetect458()
    {
        $this->assertEquals('S-Курдин', $this->object->splitFullName('Курдин').'-Курдин');
    }
    public function testSplDetect459()
    {
        $this->assertEquals('S-Курепин', $this->object->splitFullName('Курепин').'-Курепин');
    }
    public function testSplDetect460()
    {
        $this->assertEquals('S-Курсалин', $this->object->splitFullName('Курсалин').'-Курсалин');
    }
    public function testSplDetect461()
    {
        $this->assertEquals('S-Кутиков', $this->object->splitFullName('Кутиков').'-Кутиков');
    }
    public function testSplDetect462()
    {
        $this->assertEquals('S-Кутузов', $this->object->splitFullName('Кутузов').'-Кутузов');
    }
    public function testSplDetect463()
    {
        $this->assertEquals('S-Кутяков', $this->object->splitFullName('Кутяков').'-Кутяков');
    }
    public function testSplDetect464()
    {
        $this->assertEquals('S-Лавров', $this->object->splitFullName('Лавров').'-Лавров');
    }
    public function testSplDetect465()
    {
        $this->assertEquals('S-Лагутов', $this->object->splitFullName('Лагутов').'-Лагутов');
    }
    public function testSplDetect466()
    {
        $this->assertEquals('S-Лазарев', $this->object->splitFullName('Лазарев').'-Лазарев');
    }
    public function testSplDetect467()
    {
        $this->assertEquals('S-Ланцов', $this->object->splitFullName('Ланцов').'-Ланцов');
    }
    public function testSplDetect468()
    {
        $this->assertEquals('S-Лапидус', $this->object->splitFullName('Лапидус').'-Лапидус');
    }
    public function testSplDetect469()
    {
        $this->assertEquals('S-Лапотников', $this->object->splitFullName('Лапотников').'-Лапотников');
    }
    public function testSplDetect470()
    {
        $this->assertEquals('S-Лаптев', $this->object->splitFullName('Лаптев').'-Лаптев');
    }
    public function testSplDetect471()
    {
        $this->assertEquals('S-Лапунов', $this->object->splitFullName('Лапунов').'-Лапунов');
    }
    public function testSplDetect472()
    {
        $this->assertEquals('S-Лапухов', $this->object->splitFullName('Лапухов').'-Лапухов');
    }
    public function testSplDetect473()
    {
        $this->assertEquals('S-Ларин', $this->object->splitFullName('Ларин').'-Ларин');
    }
    public function testSplDetect474()
    {
        $this->assertEquals('S-Ларионов', $this->object->splitFullName('Ларионов').'-Ларионов');
    }
    public function testSplDetect475()
    {
        $this->assertEquals('S-Ласкутин', $this->object->splitFullName('Ласкутин').'-Ласкутин');
    }
    public function testSplDetect476()
    {
        $this->assertEquals('S-Лачинов', $this->object->splitFullName('Лачинов').'-Лачинов');
    }
    public function testSplDetect477()
    {
        $this->assertEquals('S-Лачков', $this->object->splitFullName('Лачков').'-Лачков');
    }
    public function testSplDetect478()
    {
        $this->assertEquals('S-Лебедев', $this->object->splitFullName('Лебедев').'-Лебедев');
    }
    public function testSplDetect479()
    {
        $this->assertEquals('S-Лебединский', $this->object->splitFullName('Лебединский').'-Лебединский');
    }
    public function testSplDetect480()
    {
        $this->assertEquals('S-Лебединцев', $this->object->splitFullName('Лебединцев').'-Лебединцев');
    }
    public function testSplDetect481()
    {
        $this->assertEquals('S-Легкодимов', $this->object->splitFullName('Легкодимов').'-Легкодимов');
    }
    public function testSplDetect482()
    {
        $this->assertEquals('S-Леонов', $this->object->splitFullName('Леонов').'-Леонов');
    }
    public function testSplDetect483()
    {
        $this->assertEquals('S-Лепёхин', $this->object->splitFullName('Лепёхин').'-Лепёхин');
    }
    public function testSplDetect484()
    {
        $this->assertEquals('S-Лесков', $this->object->splitFullName('Лесков').'-Лесков');
    }
    public function testSplDetect485()
    {
        $this->assertEquals('S-Лесничий', $this->object->splitFullName('Лесничий').'-Лесничий');
    }
    public function testSplDetect486()
    {
        $this->assertEquals('S-Летов', $this->object->splitFullName('Летов').'-Летов');
    }
    public function testSplDetect487()
    {
        $this->assertEquals('S-Лещёв', $this->object->splitFullName('Лещёв').'-Лещёв');
    }
    public function testSplDetect488()
    {
        $this->assertEquals('S-Лилов', $this->object->splitFullName('Лилов').'-Лилов');
    }
    public function testSplDetect489()
    {
        $this->assertEquals('S-Липин', $this->object->splitFullName('Липин').'-Липин');
    }
    public function testSplDetect490()
    {
        $this->assertEquals('S-Лисицын', $this->object->splitFullName('Лисицын').'-Лисицын');
    }
    public function testSplDetect491()
    {
        $this->assertEquals('S-Лихачёв', $this->object->splitFullName('Лихачёв').'-Лихачёв');
    }
    public function testSplDetect492()
    {
        $this->assertEquals('S-Лобан', $this->object->splitFullName('Лобан').'-Лобан');
    }
    public function testSplDetect493()
    {
        $this->assertEquals('S-Лобанов', $this->object->splitFullName('Лобанов').'-Лобанов');
    }
    public function testSplDetect494()
    {
        $this->assertEquals('S-Лобов', $this->object->splitFullName('Лобов').'-Лобов');
    }
    public function testSplDetect495()
    {
        $this->assertEquals('S-Логинов', $this->object->splitFullName('Логинов').'-Логинов');
    }
    public function testSplDetect496()
    {
        $this->assertEquals('S-Логиновский', $this->object->splitFullName('Логиновский').'-Логиновский');
    }
    public function testSplDetect497()
    {
        $this->assertEquals('S-Локтев', $this->object->splitFullName('Локтев').'-Локтев');
    }
    public function testSplDetect498()
    {
        $this->assertEquals('S-Ломоносов', $this->object->splitFullName('Ломоносов').'-Ломоносов');
    }
    public function testSplDetect499()
    {
        $this->assertEquals('S-Ломтев', $this->object->splitFullName('Ломтев').'-Ломтев');
    }
    public function testSplDetect500()
    {
        $this->assertEquals('S-Лопатин', $this->object->splitFullName('Лопатин').'-Лопатин');
    }
    public function testSplDetect501()
    {
        $this->assertEquals('S-Лосев', $this->object->splitFullName('Лосев').'-Лосев');
    }
    public function testSplDetect502()
    {
        $this->assertEquals('S-Лосевский', $this->object->splitFullName('Лосевский').'-Лосевский');
    }
    public function testSplDetect503()
    {
        $this->assertEquals('S-Лоскутников', $this->object->splitFullName('Лоскутников').'-Лоскутников');
    }
    public function testSplDetect504()
    {
        $this->assertEquals('S-Лоскутов', $this->object->splitFullName('Лоскутов').'-Лоскутов');
    }
    public function testSplDetect505()
    {
        $this->assertEquals('S-Лужков', $this->object->splitFullName('Лужков').'-Лужков');
    }
    public function testSplDetect506()
    {
        $this->assertEquals('S-Лыткин', $this->object->splitFullName('Лыткин').'-Лыткин');
    }
    public function testSplDetect507()
    {
        $this->assertEquals('S-Любимов', $this->object->splitFullName('Любимов').'-Любимов');
    }
    public function testSplDetect508()
    {
        $this->assertEquals('S-Любов', $this->object->splitFullName('Любов').'-Любов');
    }
    public function testSplDetect509()
    {
        $this->assertEquals('S-Лягушкин', $this->object->splitFullName('Лягушкин').'-Лягушкин');
    }
    public function testSplDetect510()
    {
        $this->assertEquals('S-Лягушов', $this->object->splitFullName('Лягушов').'-Лягушов');
    }
    public function testSplDetect511()
    {
        $this->assertEquals('S-Лялюшкин', $this->object->splitFullName('Лялюшкин').'-Лялюшкин');
    }
    public function testSplDetect512()
    {
        $this->assertEquals('S-Лясин', $this->object->splitFullName('Лясин').'-Лясин');
    }
    public function testSplDetect513()
    {
        $this->assertEquals('S-Ляпин', $this->object->splitFullName('Ляпин').'-Ляпин');
    }
    public function testSplDetect514()
    {
        $this->assertEquals('S-Майсак', $this->object->splitFullName('Майсак').'-Майсак');
    }
    public function testSplDetect515()
    {
        $this->assertEquals('S-Макаров', $this->object->splitFullName('Макаров').'-Макаров');
    }
    public function testSplDetect516()
    {
        $this->assertEquals('S-Маклаков', $this->object->splitFullName('Маклаков').'-Маклаков');
    }
    public function testSplDetect517()
    {
        $this->assertEquals('S-Максимов', $this->object->splitFullName('Максимов').'-Максимов');
    }
    public function testSplDetect518()
    {
        $this->assertEquals('S-Максимушкин', $this->object->splitFullName('Максимушкин').'-Максимушкин');
    }
    public function testSplDetect519()
    {
        $this->assertEquals('S-Максудов', $this->object->splitFullName('Максудов').'-Максудов');
    }
    public function testSplDetect520()
    {
        $this->assertEquals('S-Малахов', $this->object->splitFullName('Малахов').'-Малахов');
    }
    public function testSplDetect521()
    {
        $this->assertEquals('S-Маликов', $this->object->splitFullName('Маликов').'-Маликов');
    }
    public function testSplDetect522()
    {
        $this->assertEquals('S-Малинин', $this->object->splitFullName('Малинин').'-Малинин');
    }
    public function testSplDetect523()
    {
        $this->assertEquals('S-Малышев', $this->object->splitFullName('Малышев').'-Малышев');
    }
    public function testSplDetect524()
    {
        $this->assertEquals('S-Малюгин', $this->object->splitFullName('Малюгин').'-Малюгин');
    }
    public function testSplDetect525()
    {
        $this->assertEquals('S-Малыхин', $this->object->splitFullName('Малыхин').'-Малыхин');
    }
    public function testSplDetect526()
    {
        $this->assertEquals('S-Мамонов', $this->object->splitFullName('Мамонов').'-Мамонов');
    }
    public function testSplDetect527()
    {
        $this->assertEquals('S-Манин', $this->object->splitFullName('Манин').'-Манин');
    }
    public function testSplDetect528()
    {
        $this->assertEquals('S-Маркин', $this->object->splitFullName('Маркин').'-Маркин');
    }
    public function testSplDetect529()
    {
        $this->assertEquals('S-Марков', $this->object->splitFullName('Марков').'-Марков');
    }
    public function testSplDetect530()
    {
        $this->assertEquals('S-Маслак', $this->object->splitFullName('Маслак').'-Маслак');
    }
    public function testSplDetect531()
    {
        $this->assertEquals('S-Маслов', $this->object->splitFullName('Маслов').'-Маслов');
    }
    public function testSplDetect532()
    {
        $this->assertEquals('S-Матвеев', $this->object->splitFullName('Матвеев').'-Матвеев');
    }
    public function testSplDetect533()
    {
        $this->assertEquals('S-Матвеева', $this->object->splitFullName('Матвеева').'-Матвеева');
    }
    public function testSplDetect534()
    {
        $this->assertEquals('S-Машарин', $this->object->splitFullName('Машарин').'-Машарин');
    }
    public function testSplDetect535()
    {
        $this->assertEquals('S-Машир', $this->object->splitFullName('Машир').'-Машир');
    }
    public function testSplDetect536()
    {
        $this->assertEquals('S-Медведев', $this->object->splitFullName('Медведев').'-Медведев');
    }
    public function testSplDetect537()
    {
        $this->assertEquals('S-Медников', $this->object->splitFullName('Медников').'-Медников');
    }
    public function testSplDetect538()
    {
        $this->assertEquals('S-Меледин', $this->object->splitFullName('Меледин').'-Меледин');
    }
    public function testSplDetect539()
    {
        $this->assertEquals('S-Мелехов', $this->object->splitFullName('Мелехов').'-Мелехов');
    }
    public function testSplDetect540()
    {
        $this->assertEquals('S-Меликов', $this->object->splitFullName('Меликов').'-Меликов');
    }
    public function testSplDetect541()
    {
        $this->assertEquals('S-Мельников', $this->object->splitFullName('Мельников').'-Мельников');
    }
    public function testSplDetect542()
    {
        $this->assertEquals('S-Меркушев', $this->object->splitFullName('Меркушев').'-Меркушев');
    }
    public function testSplDetect543()
    {
        $this->assertEquals('S-Мещеряков', $this->object->splitFullName('Мещеряков').'-Мещеряков');
    }
    public function testSplDetect544()
    {
        $this->assertEquals('S-Мигунов', $this->object->splitFullName('Мигунов').'-Мигунов');
    }
    public function testSplDetect545()
    {
        $this->assertEquals('S-Мизенов', $this->object->splitFullName('Мизенов').'-Мизенов');
    }
    public function testSplDetect546()
    {
        $this->assertEquals('S-Милехин', $this->object->splitFullName('Милехин').'-Милехин');
    }
    public function testSplDetect547()
    {
        $this->assertEquals('S-Милорадов', $this->object->splitFullName('Милорадов').'-Милорадов');
    }
    public function testSplDetect548()
    {
        $this->assertEquals('S-Милюков', $this->object->splitFullName('Милюков').'-Милюков');
    }
    public function testSplDetect549()
    {
        $this->assertEquals('S-Милютин', $this->object->splitFullName('Милютин').'-Милютин');
    }
    public function testSplDetect550()
    {
        $this->assertEquals('S-Минеев', $this->object->splitFullName('Минеев').'-Минеев');
    }
    public function testSplDetect551()
    {
        $this->assertEquals('S-Минин', $this->object->splitFullName('Минин').'-Минин');
    }
    public function testSplDetect552()
    {
        $this->assertEquals('S-Минкин', $this->object->splitFullName('Минкин').'-Минкин');
    }
    public function testSplDetect553()
    {
        $this->assertEquals('S-Миронов', $this->object->splitFullName('Миронов').'-Миронов');
    }
    public function testSplDetect554()
    {
        $this->assertEquals('S-Митин', $this->object->splitFullName('Митин').'-Митин');
    }
    public function testSplDetect555()
    {
        $this->assertEquals('S-Митрофанов', $this->object->splitFullName('Митрофанов').'-Митрофанов');
    }
    public function testSplDetect556()
    {
        $this->assertEquals('S-Михайлов', $this->object->splitFullName('Михайлов').'-Михайлов');
    }
    public function testSplDetect557()
    {
        $this->assertEquals('S-Михеев', $this->object->splitFullName('Михеев').'-Михеев');
    }
    public function testSplDetect558()
    {
        $this->assertEquals('S-Мишутин', $this->object->splitFullName('Мишутин').'-Мишутин');
    }
    public function testSplDetect559()
    {
        $this->assertEquals('S-Моисеев', $this->object->splitFullName('Моисеев').'-Моисеев');
    }
    public function testSplDetect560()
    {
        $this->assertEquals('S-Молчанов', $this->object->splitFullName('Молчанов').'-Молчанов');
    }
    public function testSplDetect561()
    {
        $this->assertEquals('S-Моренов', $this->object->splitFullName('Моренов').'-Моренов');
    }
    public function testSplDetect562()
    {
        $this->assertEquals('S-Морозов', $this->object->splitFullName('Морозов').'-Морозов');
    }
    public function testSplDetect563()
    {
        $this->assertEquals('S-Мосалев', $this->object->splitFullName('Мосалев').'-Мосалев');
    }
    public function testSplDetect564()
    {
        $this->assertEquals('S-Москвин', $this->object->splitFullName('Москвин').'-Москвин');
    }
    public function testSplDetect565()
    {
        $this->assertEquals('S-Муратов', $this->object->splitFullName('Муратов').'-Муратов');
    }
    public function testSplDetect566()
    {
        $this->assertEquals('S-Мухортов', $this->object->splitFullName('Мухортов').'-Мухортов');
    }
    public function testSplDetect567()
    {
        $this->assertEquals('S-Мягков', $this->object->splitFullName('Мягков').'-Мягков');
    }
    public function testSplDetect568()
    {
        $this->assertEquals('S-Мясников', $this->object->splitFullName('Мясников').'-Мясников');
    }
    public function testSplDetect569()
    {
        $this->assertEquals('S-Мятлев', $this->object->splitFullName('Мятлев').'-Мятлев');
    }
    public function testSplDetect570()
    {
        $this->assertEquals('S-Набатов', $this->object->splitFullName('Набатов').'-Набатов');
    }
    public function testSplDetect571()
    {
        $this->assertEquals('S-Нардин', $this->object->splitFullName('Нардин').'-Нардин');
    }
    public function testSplDetect572()
    {
        $this->assertEquals('S-Наумов', $this->object->splitFullName('Наумов').'-Наумов');
    }
    public function testSplDetect573()
    {
        $this->assertEquals('S-Невзоров', $this->object->splitFullName('Невзоров').'-Невзоров');
    }
    public function testSplDetect574()
    {
        $this->assertEquals('S-Неделяев', $this->object->splitFullName('Неделяев').'-Неделяев');
    }
    public function testSplDetect575()
    {
        $this->assertEquals('S-Нежданов', $this->object->splitFullName('Нежданов').'-Нежданов');
    }
    public function testSplDetect576()
    {
        $this->assertEquals('S-Ненашев', $this->object->splitFullName('Ненашев').'-Ненашев');
    }
    public function testSplDetect577()
    {
        $this->assertEquals('S-Нестеров', $this->object->splitFullName('Нестеров').'-Нестеров');
    }
    public function testSplDetect578()
    {
        $this->assertEquals('S-Нечаев', $this->object->splitFullName('Нечаев').'-Нечаев');
    }
    public function testSplDetect579()
    {
        $this->assertEquals('S-Никитин', $this->object->splitFullName('Никитин').'-Никитин');
    }
    public function testSplDetect580()
    {
        $this->assertEquals('S-Никифоров', $this->object->splitFullName('Никифоров').'-Никифоров');
    }
    public function testSplDetect581()
    {
        $this->assertEquals('S-Николаев', $this->object->splitFullName('Николаев').'-Николаев');
    }
    public function testSplDetect582()
    {
        $this->assertEquals('S-Никонов', $this->object->splitFullName('Никонов').'-Никонов');
    }
    public function testSplDetect583()
    {
        $this->assertEquals('S-Никулин', $this->object->splitFullName('Никулин').'-Никулин');
    }
    public function testSplDetect584()
    {
        $this->assertEquals('S-Некрасов', $this->object->splitFullName('Некрасов').'-Некрасов');
    }
    public function testSplDetect585()
    {
        $this->assertEquals('S-Новиков', $this->object->splitFullName('Новиков').'-Новиков');
    }
    public function testSplDetect586()
    {
        $this->assertEquals('S-Новосельцев', $this->object->splitFullName('Новосельцев').'-Новосельцев');
    }
    public function testSplDetect587()
    {
        $this->assertEquals('S-Носачёв', $this->object->splitFullName('Носачёв').'-Носачёв');
    }
    public function testSplDetect588()
    {
        $this->assertEquals('S-Носков', $this->object->splitFullName('Носков').'-Носков');
    }
    public function testSplDetect589()
    {
        $this->assertEquals('S-Носов', $this->object->splitFullName('Носов').'-Носов');
    }
    public function testSplDetect590()
    {
        $this->assertEquals('S-Оболенский', $this->object->splitFullName('Оболенский').'-Оболенский');
    }
    public function testSplDetect591()
    {
        $this->assertEquals('S-Оборин', $this->object->splitFullName('Оборин').'-Оборин');
    }
    public function testSplDetect592()
    {
        $this->assertEquals('S-Образцов', $this->object->splitFullName('Образцов').'-Образцов');
    }
    public function testSplDetect593()
    {
        $this->assertEquals('S-Обухов', $this->object->splitFullName('Обухов').'-Обухов');
    }
    public function testSplDetect594()
    {
        $this->assertEquals('S-Овечкин', $this->object->splitFullName('Овечкин').'-Овечкин');
    }
    public function testSplDetect595()
    {
        $this->assertEquals('S-Огородников', $this->object->splitFullName('Огородников').'-Огородников');
    }
    public function testSplDetect596()
    {
        $this->assertEquals('S-Огурцов', $this->object->splitFullName('Огурцов').'-Огурцов');
    }
    public function testSplDetect597()
    {
        $this->assertEquals('S-Озеров', $this->object->splitFullName('Озеров').'-Озеров');
    }
    public function testSplDetect598()
    {
        $this->assertEquals('S-Ольховский', $this->object->splitFullName('Ольховский').'-Ольховский');
    }
    public function testSplDetect599()
    {
        $this->assertEquals('S-Онегин', $this->object->splitFullName('Онегин').'-Онегин');
    }
    public function testSplDetect600()
    {
        $this->assertEquals('S-Опокин', $this->object->splitFullName('Опокин').'-Опокин');
    }
    public function testSplDetect601()
    {
        $this->assertEquals('S-Орлов', $this->object->splitFullName('Орлов').'-Орлов');
    }
    public function testSplDetect602()
    {
        $this->assertEquals('S-Осинцев', $this->object->splitFullName('Осинцев').'-Осинцев');
    }
    public function testSplDetect603()
    {
        $this->assertEquals('S-Остальцев', $this->object->splitFullName('Остальцев').'-Остальцев');
    }
    public function testSplDetect604()
    {
        $this->assertEquals('S-Остапюк', $this->object->splitFullName('Остапюк').'-Остапюк');
    }
    public function testSplDetect605()
    {
        $this->assertEquals('S-Островерхов', $this->object->splitFullName('Островерхов').'-Островерхов');
    }
    public function testSplDetect606()
    {
        $this->assertEquals('S-Островский', $this->object->splitFullName('Островский').'-Островский');
    }
    public function testSplDetect607()
    {
        $this->assertEquals('S-Павлов', $this->object->splitFullName('Павлов').'-Павлов');
    }
    public function testSplDetect608()
    {
        $this->assertEquals('S-Панарин', $this->object->splitFullName('Панарин').'-Панарин');
    }
    public function testSplDetect609()
    {
        $this->assertEquals('S-Панин', $this->object->splitFullName('Панин').'-Панин');
    }
    public function testSplDetect610()
    {
        $this->assertEquals('S-Панкин', $this->object->splitFullName('Панкин').'-Панкин');
    }
    public function testSplDetect611()
    {
        $this->assertEquals('S-Панков', $this->object->splitFullName('Панков').'-Панков');
    }
    public function testSplDetect612()
    {
        $this->assertEquals('S-Панфилов', $this->object->splitFullName('Панфилов').'-Панфилов');
    }
    public function testSplDetect613()
    {
        $this->assertEquals('S-Панькив', $this->object->splitFullName('Панькив').'-Панькив');
    }
    public function testSplDetect614()
    {
        $this->assertEquals('S-Папанов', $this->object->splitFullName('Папанов').'-Папанов');
    }
    public function testSplDetect615()
    {
        $this->assertEquals('S-Пахомов', $this->object->splitFullName('Пахомов').'-Пахомов');
    }
    public function testSplDetect616()
    {
        $this->assertEquals('S-Пенкин', $this->object->splitFullName('Пенкин').'-Пенкин');
    }
    public function testSplDetect617()
    {
        $this->assertEquals('S-Первак', $this->object->splitFullName('Первак').'-Первак');
    }
    public function testSplDetect618()
    {
        $this->assertEquals('S-Переверзев', $this->object->splitFullName('Переверзев').'-Переверзев');
    }
    public function testSplDetect619()
    {
        $this->assertEquals('S-Перевёртов', $this->object->splitFullName('Перевёртов').'-Перевёртов');
    }
    public function testSplDetect620()
    {
        $this->assertEquals('S-Пересторонин', $this->object->splitFullName('Пересторонин').'-Пересторонин');
    }
    public function testSplDetect621()
    {
        $this->assertEquals('S-Перехваткин', $this->object->splitFullName('Перехваткин').'-Перехваткин');
    }
    public function testSplDetect622()
    {
        $this->assertEquals('S-Перов', $this->object->splitFullName('Перов').'-Перов');
    }
    public function testSplDetect623()
    {
        $this->assertEquals('S-Перьмяков', $this->object->splitFullName('Перьмяков').'-Перьмяков');
    }
    public function testSplDetect624()
    {
        $this->assertEquals('S-Пестов', $this->object->splitFullName('Пестов').'-Пестов');
    }
    public function testSplDetect625()
    {
        $this->assertEquals('S-Петров', $this->object->splitFullName('Петров').'-Петров');
    }
    public function testSplDetect626()
    {
        $this->assertEquals('S-Петухов', $this->object->splitFullName('Петухов').'-Петухов');
    }
    public function testSplDetect627()
    {
        $this->assertEquals('S-Печеников', $this->object->splitFullName('Печеников').'-Печеников');
    }
    public function testSplDetect628()
    {
        $this->assertEquals('S-Пивоваров', $this->object->splitFullName('Пивоваров').'-Пивоваров');
    }
    public function testSplDetect629()
    {
        $this->assertEquals('S-Пирогов', $this->object->splitFullName('Пирогов').'-Пирогов');
    }
    public function testSplDetect630()
    {
        $this->assertEquals('S-Пирожков', $this->object->splitFullName('Пирожков').'-Пирожков');
    }
    public function testSplDetect631()
    {
        $this->assertEquals('S-Пичугин', $this->object->splitFullName('Пичугин').'-Пичугин');
    }
    public function testSplDetect632()
    {
        $this->assertEquals('S-Погодин', $this->object->splitFullName('Погодин').'-Погодин');
    }
    public function testSplDetect633()
    {
        $this->assertEquals('S-Погребнов', $this->object->splitFullName('Погребнов').'-Погребнов');
    }
    public function testSplDetect634()
    {
        $this->assertEquals('S-Подшивалов', $this->object->splitFullName('Подшивалов').'-Подшивалов');
    }
    public function testSplDetect635()
    {
        $this->assertEquals('S-Поздняков', $this->object->splitFullName('Поздняков').'-Поздняков');
    }
    public function testSplDetect636()
    {
        $this->assertEquals('S-Покровский', $this->object->splitFullName('Покровский').'-Покровский');
    }
    public function testSplDetect637()
    {
        $this->assertEquals('S-Поливанов', $this->object->splitFullName('Поливанов').'-Поливанов');
    }
    public function testSplDetect638()
    {
        $this->assertEquals('S-Полушин', $this->object->splitFullName('Полушин').'-Полушин');
    }
    public function testSplDetect639()
    {
        $this->assertEquals('S-Полищук', $this->object->splitFullName('Полищук').'-Полищук');
    }
    public function testSplDetect640()
    {
        $this->assertEquals('S-Полторак', $this->object->splitFullName('Полторак').'-Полторак');
    }
    public function testSplDetect641()
    {
        $this->assertEquals('S-Поляков', $this->object->splitFullName('Поляков').'-Поляков');
    }
    public function testSplDetect642()
    {
        $this->assertEquals('S-Поникаров', $this->object->splitFullName('Поникаров').'-Поникаров');
    }
    public function testSplDetect643()
    {
        $this->assertEquals('S-Пономарёв', $this->object->splitFullName('Пономарёв').'-Пономарёв');
    }
    public function testSplDetect644()
    {
        $this->assertEquals('S-Пончиков', $this->object->splitFullName('Пончиков').'-Пончиков');
    }
    public function testSplDetect645()
    {
        $this->assertEquals('S-Попов', $this->object->splitFullName('Попов').'-Попов');
    }
    public function testSplDetect646()
    {
        $this->assertEquals('S-Попырин', $this->object->splitFullName('Попырин').'-Попырин');
    }
    public function testSplDetect647()
    {
        $this->assertEquals('S-Посохов', $this->object->splitFullName('Посохов').'-Посохов');
    }
    public function testSplDetect648()
    {
        $this->assertEquals('S-Потапов', $this->object->splitFullName('Потапов').'-Потапов');
    }
    public function testSplDetect649()
    {
        $this->assertEquals('S-Потёмкин', $this->object->splitFullName('Потёмкин').'-Потёмкин');
    }
    public function testSplDetect650()
    {
        $this->assertEquals('S-Праздников', $this->object->splitFullName('Праздников').'-Праздников');
    }
    public function testSplDetect651()
    {
        $this->assertEquals('S-Примаков', $this->object->splitFullName('Примаков').'-Примаков');
    }
    public function testSplDetect652()
    {
        $this->assertEquals('S-Приходько', $this->object->splitFullName('Приходько').'-Приходько');
    }
    public function testSplDetect653()
    {
        $this->assertEquals('S-Проничев', $this->object->splitFullName('Проничев').'-Проничев');
    }
    public function testSplDetect654()
    {
        $this->assertEquals('S-Протасов', $this->object->splitFullName('Протасов').'-Протасов');
    }
    public function testSplDetect655()
    {
        $this->assertEquals('S-Прохоров', $this->object->splitFullName('Прохоров').'-Прохоров');
    }
    public function testSplDetect656()
    {
        $this->assertEquals('S-Пугачёв', $this->object->splitFullName('Пугачёв').'-Пугачёв');
    }
    public function testSplDetect657()
    {
        $this->assertEquals('S-Пугин', $this->object->splitFullName('Пугин').'-Пугин');
    }
    public function testSplDetect658()
    {
        $this->assertEquals('S-Пузанов', $this->object->splitFullName('Пузанов').'-Пузанов');
    }
    public function testSplDetect659()
    {
        $this->assertEquals('S-Путилин', $this->object->splitFullName('Путилин').'-Путилин');
    }
    public function testSplDetect660()
    {
        $this->assertEquals('S-Путин', $this->object->splitFullName('Путин').'-Путин');
    }
    public function testSplDetect661()
    {
        $this->assertEquals('S-Путятин', $this->object->splitFullName('Путятин').'-Путятин');
    }
    public function testSplDetect662()
    {
        $this->assertEquals('S-Пушкин', $this->object->splitFullName('Пушкин').'-Пушкин');
    }
    public function testSplDetect663()
    {
        $this->assertEquals('S-Пыжалов', $this->object->splitFullName('Пыжалов').'-Пыжалов');
    }
    public function testSplDetect664()
    {
        $this->assertEquals('S-Пырьев', $this->object->splitFullName('Пырьев').'-Пырьев');
    }
    public function testSplDetect665()
    {
        $this->assertEquals('S-Рабинович', $this->object->splitFullName('Рабинович').'-Рабинович');
    }
    public function testSplDetect666()
    {
        $this->assertEquals('S-Разин', $this->object->splitFullName('Разин').'-Разин');
    }
    public function testSplDetect667()
    {
        $this->assertEquals('S-Разуваев', $this->object->splitFullName('Разуваев').'-Разуваев');
    }
    public function testSplDetect668()
    {
        $this->assertEquals('S-Распопов', $this->object->splitFullName('Распопов').'-Распопов');
    }
    public function testSplDetect669()
    {
        $this->assertEquals('S-Распутин', $this->object->splitFullName('Распутин').'-Распутин');
    }
    public function testSplDetect670()
    {
        $this->assertEquals('S-Расторгуев', $this->object->splitFullName('Расторгуев').'-Расторгуев');
    }
    public function testSplDetect671()
    {
        $this->assertEquals('S-Ремизов', $this->object->splitFullName('Ремизов').'-Ремизов');
    }
    public function testSplDetect672()
    {
        $this->assertEquals('S-Репин', $this->object->splitFullName('Репин').'-Репин');
    }
    public function testSplDetect673()
    {
        $this->assertEquals('S-Решетилов', $this->object->splitFullName('Решетилов').'-Решетилов');
    }
    public function testSplDetect674()
    {
        $this->assertEquals('S-Решетников', $this->object->splitFullName('Решетников').'-Решетников');
    }
    public function testSplDetect675()
    {
        $this->assertEquals('S-Родзянко', $this->object->splitFullName('Родзянко').'-Родзянко');
    }
    public function testSplDetect676()
    {
        $this->assertEquals('S-Рогачёв', $this->object->splitFullName('Рогачёв').'-Рогачёв');
    }
    public function testSplDetect677()
    {
        $this->assertEquals('S-Рогов', $this->object->splitFullName('Рогов').'-Рогов');
    }
    public function testSplDetect678()
    {
        $this->assertEquals('S-Рогозин', $this->object->splitFullName('Рогозин').'-Рогозин');
    }
    public function testSplDetect679()
    {
        $this->assertEquals('S-Рожков', $this->object->splitFullName('Рожков').'-Рожков');
    }
    public function testSplDetect680()
    {
        $this->assertEquals('S-Рокоссовский', $this->object->splitFullName('Рокоссовский').'-Рокоссовский');
    }
    public function testSplDetect681()
    {
        $this->assertEquals('S-Романов', $this->object->splitFullName('Романов').'-Романов');
    }
    public function testSplDetect682()
    {
        $this->assertEquals('S-Ростов', $this->object->splitFullName('Ростов').'-Ростов');
    }
    public function testSplDetect683()
    {
        $this->assertEquals('S-Ростовцев', $this->object->splitFullName('Ростовцев').'-Ростовцев');
    }
    public function testSplDetect684()
    {
        $this->assertEquals('S-Рудавинa', $this->object->splitFullName('Рудавинa').'-Рудавинa');
    }
    public function testSplDetect685()
    {
        $this->assertEquals('S-Румянцев', $this->object->splitFullName('Румянцев').'-Румянцев');
    }
    public function testSplDetect686()
    {
        $this->assertEquals('S-Рунов', $this->object->splitFullName('Рунов').'-Рунов');
    }
    public function testSplDetect687()
    {
        $this->assertEquals('S-Русаков', $this->object->splitFullName('Русаков').'-Русаков');
    }
    public function testSplDetect688()
    {
        $this->assertEquals('S-Руских', $this->object->splitFullName('Руских').'-Руских');
    }
    public function testSplDetect689()
    {
        $this->assertEquals('S-Русских', $this->object->splitFullName('Русских').'-Русских');
    }
    public function testSplDetect690()
    {
        $this->assertEquals('S-Ручкин', $this->object->splitFullName('Ручкин').'-Ручкин');
    }
    public function testSplDetect691()
    {
        $this->assertEquals('S-Рыбалкин', $this->object->splitFullName('Рыбалкин').'-Рыбалкин');
    }
    public function testSplDetect692()
    {
        $this->assertEquals('S-Рыжанов', $this->object->splitFullName('Рыжанов').'-Рыжанов');
    }
    public function testSplDetect693()
    {
        $this->assertEquals('S-Рыжков', $this->object->splitFullName('Рыжков').'-Рыжков');
    }
    public function testSplDetect694()
    {
        $this->assertEquals('S-Рыжов', $this->object->splitFullName('Рыжов').'-Рыжов');
    }
    public function testSplDetect695()
    {
        $this->assertEquals('S-Рытин', $this->object->splitFullName('Рытин').'-Рытин');
    }
    public function testSplDetect696()
    {
        $this->assertEquals('S-Рыченков', $this->object->splitFullName('Рыченков').'-Рыченков');
    }
    public function testSplDetect697()
    {
        $this->assertEquals('S-Рябков', $this->object->splitFullName('Рябков').'-Рябков');
    }
    public function testSplDetect698()
    {
        $this->assertEquals('S-Рябов', $this->object->splitFullName('Рябов').'-Рябов');
    }
    public function testSplDetect699()
    {
        $this->assertEquals('S-Ряхин', $this->object->splitFullName('Ряхин').'-Ряхин');
    }
    public function testSplDetect700()
    {
        $this->assertEquals('S-Сабитов', $this->object->splitFullName('Сабитов').'-Сабитов');
    }
    public function testSplDetect701()
    {
        $this->assertEquals('S-Савасин', $this->object->splitFullName('Савасин').'-Савасин');
    }
    public function testSplDetect702()
    {
        $this->assertEquals('S-Савинков', $this->object->splitFullName('Савинков').'-Савинков');
    }
    public function testSplDetect703()
    {
        $this->assertEquals('S-Савенков', $this->object->splitFullName('Савенков').'-Савенков');
    }
    public function testSplDetect704()
    {
        $this->assertEquals('S-Саврасов', $this->object->splitFullName('Саврасов').'-Саврасов');
    }
    public function testSplDetect705()
    {
        $this->assertEquals('S-Садыков', $this->object->splitFullName('Садыков').'-Садыков');
    }
    public function testSplDetect706()
    {
        $this->assertEquals('S-Сазонов', $this->object->splitFullName('Сазонов').'-Сазонов');
    }
    public function testSplDetect707()
    {
        $this->assertEquals('S-Салко', $this->object->splitFullName('Салко').'-Салко');
    }
    public function testSplDetect708()
    {
        $this->assertEquals('S-Сальков', $this->object->splitFullName('Сальков').'-Сальков');
    }
    public function testSplDetect709()
    {
        $this->assertEquals('S-Сальников', $this->object->splitFullName('Сальников').'-Сальников');
    }
    public function testSplDetect710()
    {
        $this->assertEquals('S-Самойлов', $this->object->splitFullName('Самойлов').'-Самойлов');
    }
    public function testSplDetect711()
    {
        $this->assertEquals('S-Самохин', $this->object->splitFullName('Самохин').'-Самохин');
    }
    public function testSplDetect712()
    {
        $this->assertEquals('S-Самсонов', $this->object->splitFullName('Самсонов').'-Самсонов');
    }
    public function testSplDetect713()
    {
        $this->assertEquals('S-Санников', $this->object->splitFullName('Санников').'-Санников');
    }
    public function testSplDetect714()
    {
        $this->assertEquals('S-Сапогов', $this->object->splitFullName('Сапогов').'-Сапогов');
    }
    public function testSplDetect715()
    {
        $this->assertEquals('S-Сапожников', $this->object->splitFullName('Сапожников').'-Сапожников');
    }
    public function testSplDetect716()
    {
        $this->assertEquals('S-Сафиюлин', $this->object->splitFullName('Сафиюлин').'-Сафиюлин');
    }
    public function testSplDetect717()
    {
        $this->assertEquals('S-Сахаров', $this->object->splitFullName('Сахаров').'-Сахаров');
    }
    public function testSplDetect718()
    {
        $this->assertEquals('S-Свалов', $this->object->splitFullName('Свалов').'-Свалов');
    }
    public function testSplDetect719()
    {
        $this->assertEquals('S-Северинов', $this->object->splitFullName('Северинов').'-Северинов');
    }
    public function testSplDetect720()
    {
        $this->assertEquals('S-Севостьянов', $this->object->splitFullName('Севостьянов').'-Севостьянов');
    }
    public function testSplDetect721()
    {
        $this->assertEquals('S-Седельников', $this->object->splitFullName('Седельников').'-Седельников');
    }
    public function testSplDetect722()
    {
        $this->assertEquals('S-Седов', $this->object->splitFullName('Седов').'-Седов');
    }
    public function testSplDetect723()
    {
        $this->assertEquals('S-Селезнёв', $this->object->splitFullName('Селезнёв').'-Селезнёв');
    }
    public function testSplDetect724()
    {
        $this->assertEquals('S-Селиванов', $this->object->splitFullName('Селиванов').'-Селиванов');
    }
    public function testSplDetect725()
    {
        $this->assertEquals('S-Семёнов', $this->object->splitFullName('Семёнов').'-Семёнов');
    }
    public function testSplDetect726()
    {
        $this->assertEquals('S-Семичаевский', $this->object->splitFullName('Семичаевский').'-Семичаевский');
    }
    public function testSplDetect727()
    {
        $this->assertEquals('S-Сенькин', $this->object->splitFullName('Сенькин').'-Сенькин');
    }
    public function testSplDetect728()
    {
        $this->assertEquals('S-Серебров', $this->object->splitFullName('Серебров').'-Серебров');
    }
    public function testSplDetect729()
    {
        $this->assertEquals('S-Серебряков', $this->object->splitFullName('Серебряков').'-Серебряков');
    }
    public function testSplDetect730()
    {
        $this->assertEquals('S-Серёгин', $this->object->splitFullName('Серёгин').'-Серёгин');
    }
    public function testSplDetect731()
    {
        $this->assertEquals('S-Серов', $this->object->splitFullName('Серов').'-Серов');
    }
    public function testSplDetect732()
    {
        $this->assertEquals('S-Серпионов', $this->object->splitFullName('Серпионов').'-Серпионов');
    }
    public function testSplDetect733()
    {
        $this->assertEquals('S-Семянин', $this->object->splitFullName('Семянин').'-Семянин');
    }
    public function testSplDetect734()
    {
        $this->assertEquals('S-Сёмин', $this->object->splitFullName('Сёмин').'-Сёмин');
    }
    public function testSplDetect735()
    {
        $this->assertEquals('S-Серёгин', $this->object->splitFullName('Серёгин').'-Серёгин');
    }
    public function testSplDetect736()
    {
        $this->assertEquals('S-Сеченов', $this->object->splitFullName('Сеченов').'-Сеченов');
    }
    public function testSplDetect737()
    {
        $this->assertEquals('S-Сиваков', $this->object->splitFullName('Сиваков').'-Сиваков');
    }
    public function testSplDetect738()
    {
        $this->assertEquals('S-Сигаев', $this->object->splitFullName('Сигаев').'-Сигаев');
    }
    public function testSplDetect739()
    {
        $this->assertEquals('S-Сигачёв', $this->object->splitFullName('Сигачёв').'-Сигачёв');
    }
    public function testSplDetect740()
    {
        $this->assertEquals('S-Сидоров', $this->object->splitFullName('Сидоров').'-Сидоров');
    }
    public function testSplDetect741()
    {
        $this->assertEquals('S-Сизов', $this->object->splitFullName('Сизов').'-Сизов');
    }
    public function testSplDetect742()
    {
        $this->assertEquals('S-Сизый', $this->object->splitFullName('Сизый').'-Сизый');
    }
    public function testSplDetect743()
    {
        $this->assertEquals('S-Силиванов', $this->object->splitFullName('Силиванов').'-Силиванов');
    }
    public function testSplDetect744()
    {
        $this->assertEquals('S-Силин', $this->object->splitFullName('Силин').'-Силин');
    }
    public function testSplDetect745()
    {
        $this->assertEquals('S-Сильвестров', $this->object->splitFullName('Сильвестров').'-Сильвестров');
    }
    public function testSplDetect746()
    {
        $this->assertEquals('S-Силаев', $this->object->splitFullName('Силаев').'-Силаев');
    }
    public function testSplDetect747()
    {
        $this->assertEquals('S-Силиванов', $this->object->splitFullName('Силиванов').'-Силиванов');
    }
    public function testSplDetect748()
    {
        $this->assertEquals('S-Скворцов', $this->object->splitFullName('Скворцов').'-Скворцов');
    }
    public function testSplDetect749()
    {
        $this->assertEquals('S-Скрябин', $this->object->splitFullName('Скрябин').'-Скрябин');
    }
    public function testSplDetect750()
    {
        $this->assertEquals('S-Скоробогатов', $this->object->splitFullName('Скоробогатов').'-Скоробогатов');
    }
    public function testSplDetect751()
    {
        $this->assertEquals('S-Скороходов', $this->object->splitFullName('Скороходов').'-Скороходов');
    }
    public function testSplDetect752()
    {
        $this->assertEquals('S-Скуратов', $this->object->splitFullName('Скуратов').'-Скуратов');
    }
    public function testSplDetect753()
    {
        $this->assertEquals('S-Слобожанин', $this->object->splitFullName('Слобожанин').'-Слобожанин');
    }
    public function testSplDetect754()
    {
        $this->assertEquals('S-Случевский', $this->object->splitFullName('Случевский').'-Случевский');
    }
    public function testSplDetect755()
    {
        $this->assertEquals('S-Смирнитский', $this->object->splitFullName('Смирнитский').'-Смирнитский');
    }
    public function testSplDetect756()
    {
        $this->assertEquals('S-Смирнов', $this->object->splitFullName('Смирнов').'-Смирнов');
    }
    public function testSplDetect757()
    {
        $this->assertEquals('S-Сметанин', $this->object->splitFullName('Сметанин').'-Сметанин');
    }
    public function testSplDetect758()
    {
        $this->assertEquals('S-Смолин', $this->object->splitFullName('Смолин').'-Смолин');
    }
    public function testSplDetect759()
    {
        $this->assertEquals('S-Смолянинов', $this->object->splitFullName('Смолянинов').'-Смолянинов');
    }
    public function testSplDetect760()
    {
        $this->assertEquals('S-Снаткин', $this->object->splitFullName('Снаткин').'-Снаткин');
    }
    public function testSplDetect761()
    {
        $this->assertEquals('S-Снегирёв', $this->object->splitFullName('Снегирёв').'-Снегирёв');
    }
    public function testSplDetect762()
    {
        $this->assertEquals('S-Снетков', $this->object->splitFullName('Снетков').'-Снетков');
    }
    public function testSplDetect763()
    {
        $this->assertEquals('S-Соболев', $this->object->splitFullName('Соболев').'-Соболев');
    }
    public function testSplDetect764()
    {
        $this->assertEquals('S-Соболевский', $this->object->splitFullName('Соболевский').'-Соболевский');
    }
    public function testSplDetect765()
    {
        $this->assertEquals('S-Соколов', $this->object->splitFullName('Соколов').'-Соколов');
    }
    public function testSplDetect766()
    {
        $this->assertEquals('S-Солдатов', $this->object->splitFullName('Солдатов').'-Солдатов');
    }
    public function testSplDetect767()
    {
        $this->assertEquals('S-Соловьёв', $this->object->splitFullName('Соловьёв').'-Соловьёв');
    }
    public function testSplDetect768()
    {
        $this->assertEquals('S-Солодников', $this->object->splitFullName('Солодников').'-Солодников');
    }
    public function testSplDetect769()
    {
        $this->assertEquals('S-Соломин', $this->object->splitFullName('Соломин').'-Соломин');
    }
    public function testSplDetect770()
    {
        $this->assertEquals('S-Соломонов', $this->object->splitFullName('Соломонов').'-Соломонов');
    }
    public function testSplDetect771()
    {
        $this->assertEquals('S-Сопов', $this->object->splitFullName('Сопов').'-Сопов');
    }
    public function testSplDetect772()
    {
        $this->assertEquals('S-Сорокин', $this->object->splitFullName('Сорокин').'-Сорокин');
    }
    public function testSplDetect773()
    {
        $this->assertEquals('S-Спанов', $this->object->splitFullName('Спанов').'-Спанов');
    }
    public function testSplDetect774()
    {
        $this->assertEquals('S-Стариков', $this->object->splitFullName('Стариков').'-Стариков');
    }
    public function testSplDetect775()
    {
        $this->assertEquals('S-Староверов', $this->object->splitFullName('Староверов').'-Староверов');
    }
    public function testSplDetect776()
    {
        $this->assertEquals('S-Стеблев', $this->object->splitFullName('Стеблев').'-Стеблев');
    }
    public function testSplDetect777()
    {
        $this->assertEquals('S-Стегнов', $this->object->splitFullName('Стегнов').'-Стегнов');
    }
    public function testSplDetect778()
    {
        $this->assertEquals('S-Степанов', $this->object->splitFullName('Степанов').'-Степанов');
    }
    public function testSplDetect779()
    {
        $this->assertEquals('S-Степанков', $this->object->splitFullName('Степанков').'-Степанков');
    }
    public function testSplDetect780()
    {
        $this->assertEquals('S-Степашин', $this->object->splitFullName('Степашин').'-Степашин');
    }
    public function testSplDetect781()
    {
        $this->assertEquals('S-Стрелков', $this->object->splitFullName('Стрелков').'-Стрелков');
    }
    public function testSplDetect782()
    {
        $this->assertEquals('S-Стрекалов', $this->object->splitFullName('Стрекалов').'-Стрекалов');
    }
    public function testSplDetect783()
    {
        $this->assertEquals('S-Строганов', $this->object->splitFullName('Строганов').'-Строганов');
    }
    public function testSplDetect784()
    {
        $this->assertEquals('S-Субботин', $this->object->splitFullName('Субботин').'-Субботин');
    }
    public function testSplDetect785()
    {
        $this->assertEquals('S-Суботин', $this->object->splitFullName('Суботин').'-Суботин');
    }
    public function testSplDetect786()
    {
        $this->assertEquals('S-Суворин', $this->object->splitFullName('Суворин').'-Суворин');
    }
    public function testSplDetect787()
    {
        $this->assertEquals('S-Суворкин', $this->object->splitFullName('Суворкин').'-Суворкин');
    }
    public function testSplDetect788()
    {
        $this->assertEquals('S-Суворов', $this->object->splitFullName('Суворов').'-Суворов');
    }
    public function testSplDetect789()
    {
        $this->assertEquals('S-Сунгатулин', $this->object->splitFullName('Сунгатулин').'-Сунгатулин');
    }
    public function testSplDetect790()
    {
        $this->assertEquals('S-Сукачев', $this->object->splitFullName('Сукачев').'-Сукачев');
    }
    public function testSplDetect791()
    {
        $this->assertEquals('S-Суриков', $this->object->splitFullName('Суриков').'-Суриков');
    }
    public function testSplDetect792()
    {
        $this->assertEquals('S-Сусоев', $this->object->splitFullName('Сусоев').'-Сусоев');
    }
    public function testSplDetect793()
    {
        $this->assertEquals('S-Сутулин', $this->object->splitFullName('Сутулин').'-Сутулин');
    }
    public function testSplDetect794()
    {
        $this->assertEquals('S-Сухоруков', $this->object->splitFullName('Сухоруков').'-Сухоруков');
    }
    public function testSplDetect795()
    {
        $this->assertEquals('S-Сучков', $this->object->splitFullName('Сучков').'-Сучков');
    }
    public function testSplDetect796()
    {
        $this->assertEquals('S-Сысоев', $this->object->splitFullName('Сысоев').'-Сысоев');
    }
    public function testSplDetect797()
    {
        $this->assertEquals('S-Сытников', $this->object->splitFullName('Сытников').'-Сытников');
    }
    public function testSplDetect798()
    {
        $this->assertEquals('S-Сычёв', $this->object->splitFullName('Сычёв').'-Сычёв');
    }
    public function testSplDetect799()
    {
        $this->assertEquals('S-Сычкин', $this->object->splitFullName('Сычкин').'-Сычкин');
    }
    public function testSplDetect800()
    {
        $this->assertEquals('S-Сюкосев', $this->object->splitFullName('Сюкосев').'-Сюкосев');
    }
    public function testSplDetect801()
    {
        $this->assertEquals('S-Табаков', $this->object->splitFullName('Табаков').'-Табаков');
    }
    public function testSplDetect802()
    {
        $this->assertEquals('S-Табернакулов', $this->object->splitFullName('Табернакулов').'-Табернакулов');
    }
    public function testSplDetect803()
    {
        $this->assertEquals('S-Таланов', $this->object->splitFullName('Таланов').'-Таланов');
    }
    public function testSplDetect804()
    {
        $this->assertEquals('S-Талалихин', $this->object->splitFullName('Талалихин').'-Талалихин');
    }
    public function testSplDetect805()
    {
        $this->assertEquals('S-Танков', $this->object->splitFullName('Танков').'-Танков');
    }
    public function testSplDetect806()
    {
        $this->assertEquals('S-Тарасов', $this->object->splitFullName('Тарасов').'-Тарасов');
    }
    public function testSplDetect807()
    {
        $this->assertEquals('S-Татаров', $this->object->splitFullName('Татаров').'-Татаров');
    }
    public function testSplDetect808()
    {
        $this->assertEquals('S-Твардовский', $this->object->splitFullName('Твардовский').'-Твардовский');
    }
    public function testSplDetect809()
    {
        $this->assertEquals('S-Тёмкин', $this->object->splitFullName('Тёмкин').'-Тёмкин');
    }
    public function testSplDetect810()
    {
        $this->assertEquals('S-Теплов', $this->object->splitFullName('Теплов').'-Теплов');
    }
    public function testSplDetect811()
    {
        $this->assertEquals('S-Теребов', $this->object->splitFullName('Теребов').'-Теребов');
    }
    public function testSplDetect812()
    {
        $this->assertEquals('S-Тетерев', $this->object->splitFullName('Тетерев').'-Тетерев');
    }
    public function testSplDetect813()
    {
        $this->assertEquals('S-Типалов', $this->object->splitFullName('Типалов').'-Типалов');
    }
    public function testSplDetect814()
    {
        $this->assertEquals('S-Титов', $this->object->splitFullName('Титов').'-Титов');
    }
    public function testSplDetect815()
    {
        $this->assertEquals('S-Тихвинский', $this->object->splitFullName('Тихвинский').'-Тихвинский');
    }
    public function testSplDetect816()
    {
        $this->assertEquals('S-Тихомиров', $this->object->splitFullName('Тихомиров').'-Тихомиров');
    }
    public function testSplDetect817()
    {
        $this->assertEquals('S-Тихонов', $this->object->splitFullName('Тихонов').'-Тихонов');
    }
    public function testSplDetect818()
    {
        $this->assertEquals('S-Токарев', $this->object->splitFullName('Токарев').'-Токарев');
    }
    public function testSplDetect819()
    {
        $this->assertEquals('S-Токмаков', $this->object->splitFullName('Токмаков').'-Токмаков');
    }
    public function testSplDetect820()
    {
        $this->assertEquals('S-Толбанов', $this->object->splitFullName('Толбанов').'-Толбанов');
    }
    public function testSplDetect821()
    {
        $this->assertEquals('S-Толстобров', $this->object->splitFullName('Толстобров').'-Толстобров');
    }
    public function testSplDetect822()
    {
        $this->assertEquals('S-Толстокожев', $this->object->splitFullName('Толстокожев').'-Толстокожев');
    }
    public function testSplDetect823()
    {
        $this->assertEquals('S-Толстой', $this->object->splitFullName('Толстой').'-Толстой');
    }
    public function testSplDetect824()
    {
        $this->assertEquals('S-Топоров', $this->object->splitFullName('Топоров').'-Топоров');
    }
    public function testSplDetect825()
    {
        $this->assertEquals('S-Торопов', $this->object->splitFullName('Торопов').'-Торопов');
    }
    public function testSplDetect826()
    {
        $this->assertEquals('S-Торчинович', $this->object->splitFullName('Торчинович').'-Торчинович');
    }
    public function testSplDetect827()
    {
        $this->assertEquals('S-Травкин', $this->object->splitFullName('Травкин').'-Травкин');
    }
    public function testSplDetect828()
    {
        $this->assertEquals('S-Тредиаковский', $this->object->splitFullName('Тредиаковский').'-Тредиаковский');
    }
    public function testSplDetect829()
    {
        $this->assertEquals('S-Третьяков', $this->object->splitFullName('Третьяков').'-Третьяков');
    }
    public function testSplDetect830()
    {
        $this->assertEquals('S-Трифонов', $this->object->splitFullName('Трифонов').'-Трифонов');
    }
    public function testSplDetect831()
    {
        $this->assertEquals('S-Трофимов', $this->object->splitFullName('Трофимов').'-Трофимов');
    }
    public function testSplDetect832()
    {
        $this->assertEquals('S-Трусов', $this->object->splitFullName('Трусов').'-Трусов');
    }
    public function testSplDetect833()
    {
        $this->assertEquals('S-Трутнев', $this->object->splitFullName('Трутнев').'-Трутнев');
    }
    public function testSplDetect834()
    {
        $this->assertEquals('S-Труфанов', $this->object->splitFullName('Труфанов').'-Труфанов');
    }
    public function testSplDetect835()
    {
        $this->assertEquals('S-Трухин', $this->object->splitFullName('Трухин').'-Трухин');
    }
    public function testSplDetect836()
    {
        $this->assertEquals('S-Трындин', $this->object->splitFullName('Трындин').'-Трындин');
    }
    public function testSplDetect837()
    {
        $this->assertEquals('S-Туполев', $this->object->splitFullName('Туполев').'-Туполев');
    }
    public function testSplDetect838()
    {
        $this->assertEquals('S-Турбин', $this->object->splitFullName('Турбин').'-Турбин');
    }
    public function testSplDetect839()
    {
        $this->assertEquals('S-Тургенев', $this->object->splitFullName('Тургенев').'-Тургенев');
    }
    public function testSplDetect840()
    {
        $this->assertEquals('S-Туров', $this->object->splitFullName('Туров').'-Туров');
    }
    public function testSplDetect841()
    {
        $this->assertEquals('S-Турфанов', $this->object->splitFullName('Турфанов').'-Турфанов');
    }
    public function testSplDetect842()
    {
        $this->assertEquals('S-Тычкин', $this->object->splitFullName('Тычкин').'-Тычкин');
    }
    public function testSplDetect843()
    {
        $this->assertEquals('S-Тюшняков', $this->object->splitFullName('Тюшняков').'-Тюшняков');
    }
    public function testSplDetect844()
    {
        $this->assertEquals('S-Телицын', $this->object->splitFullName('Телицын').'-Телицын');
    }
    public function testSplDetect845()
    {
        $this->assertEquals('S-Тянников', $this->object->splitFullName('Тянников').'-Тянников');
    }
    public function testSplDetect846()
    {
        $this->assertEquals('S-Убейсобакин', $this->object->splitFullName('Убейсобакин').'-Убейсобакин');
    }
    public function testSplDetect847()
    {
        $this->assertEquals('S-Угольников', $this->object->splitFullName('Угольников').'-Угольников');
    }
    public function testSplDetect848()
    {
        $this->assertEquals('S-Ульянов', $this->object->splitFullName('Ульянов').'-Ульянов');
    }
    public function testSplDetect849()
    {
        $this->assertEquals('S-Ульяшин', $this->object->splitFullName('Ульяшин').'-Ульяшин');
    }
    public function testSplDetect850()
    {
        $this->assertEquals('S-Усатов', $this->object->splitFullName('Усатов').'-Усатов');
    }
    public function testSplDetect851()
    {
        $this->assertEquals('S-Усов', $this->object->splitFullName('Усов').'-Усов');
    }
    public function testSplDetect852()
    {
        $this->assertEquals('S-Устинов', $this->object->splitFullName('Устинов').'-Устинов');
    }
    public function testSplDetect853()
    {
        $this->assertEquals('S-Устюжанин', $this->object->splitFullName('Устюжанин').'-Устюжанин');
    }
    public function testSplDetect854()
    {
        $this->assertEquals('S-Утёсов', $this->object->splitFullName('Утёсов').'-Утёсов');
    }
    public function testSplDetect855()
    {
        $this->assertEquals('S-Ухов', $this->object->splitFullName('Ухов').'-Ухов');
    }
    public function testSplDetect856()
    {
        $this->assertEquals('S-Фанин', $this->object->splitFullName('Фанин').'-Фанин');
    }
    public function testSplDetect857()
    {
        $this->assertEquals('S-Фамусов', $this->object->splitFullName('Фамусов').'-Фамусов');
    }
    public function testSplDetect858()
    {
        $this->assertEquals('S-Федин', $this->object->splitFullName('Федин').'-Федин');
    }
    public function testSplDetect859()
    {
        $this->assertEquals('S-Федосов', $this->object->splitFullName('Федосов').'-Федосов');
    }
    public function testSplDetect860()
    {
        $this->assertEquals('S-Федотов', $this->object->splitFullName('Федотов').'-Федотов');
    }
    public function testSplDetect861()
    {
        $this->assertEquals('S-Федосеев', $this->object->splitFullName('Федосеев').'-Федосеев');
    }
    public function testSplDetect862()
    {
        $this->assertEquals('S-Федченков', $this->object->splitFullName('Федченков').'-Федченков');
    }
    public function testSplDetect863()
    {
        $this->assertEquals('S-Фёдоров', $this->object->splitFullName('Фёдоров').'-Фёдоров');
    }
    public function testSplDetect864()
    {
        $this->assertEquals('S-Федулов', $this->object->splitFullName('Федулов').'-Федулов');
    }
    public function testSplDetect865()
    {
        $this->assertEquals('S-Фетисов', $this->object->splitFullName('Фетисов').'-Фетисов');
    }
    public function testSplDetect866()
    {
        $this->assertEquals('S-Филатов', $this->object->splitFullName('Филатов').'-Филатов');
    }
    public function testSplDetect867()
    {
        $this->assertEquals('S-Филимонов', $this->object->splitFullName('Филимонов').'-Филимонов');
    }
    public function testSplDetect868()
    {
        $this->assertEquals('S-Филипов', $this->object->splitFullName('Филипов').'-Филипов');
    }
    public function testSplDetect869()
    {
        $this->assertEquals('S-Филиппов', $this->object->splitFullName('Филиппов').'-Филиппов');
    }
    public function testSplDetect870()
    {
        $this->assertEquals('S-Флёров', $this->object->splitFullName('Флёров').'-Флёров');
    }
    public function testSplDetect871()
    {
        $this->assertEquals('S-Фокин', $this->object->splitFullName('Фокин').'-Фокин');
    }
    public function testSplDetect872()
    {
        $this->assertEquals('S-Фомин', $this->object->splitFullName('Фомин').'-Фомин');
    }
    public function testSplDetect873()
    {
        $this->assertEquals('S-Фомичев', $this->object->splitFullName('Фомичев').'-Фомичев');
    }
    public function testSplDetect874()
    {
        $this->assertEquals('S-Фонвизин', $this->object->splitFullName('Фонвизин').'-Фонвизин');
    }
    public function testSplDetect875()
    {
        $this->assertEquals('S-Форопонов', $this->object->splitFullName('Форопонов').'-Форопонов');
    }
    public function testSplDetect876()
    {
        $this->assertEquals('S-Фирсов', $this->object->splitFullName('Фирсов').'-Фирсов');
    }
    public function testSplDetect877()
    {
        $this->assertEquals('S-Фролов', $this->object->splitFullName('Фролов').'-Фролов');
    }
    public function testSplDetect878()
    {
        $this->assertEquals('S-Францев', $this->object->splitFullName('Францев').'-Францев');
    }
    public function testSplDetect879()
    {
        $this->assertEquals('S-Фукин', $this->object->splitFullName('Фукин').'-Фукин');
    }
    public function testSplDetect880()
    {
        $this->assertEquals('S-Хабалов', $this->object->splitFullName('Хабалов').'-Хабалов');
    }
    public function testSplDetect881()
    {
        $this->assertEquals('S-Халтурин', $this->object->splitFullName('Халтурин').'-Халтурин');
    }
    public function testSplDetect882()
    {
        $this->assertEquals('S-Харитонов', $this->object->splitFullName('Харитонов').'-Харитонов');
    }
    public function testSplDetect883()
    {
        $this->assertEquals('S-Харламов', $this->object->splitFullName('Харламов').'-Харламов');
    }
    public function testSplDetect884()
    {
        $this->assertEquals('S-Хлебников', $this->object->splitFullName('Хлебников').'-Хлебников');
    }
    public function testSplDetect885()
    {
        $this->assertEquals('S-Хлопонин', $this->object->splitFullName('Хлопонин').'-Хлопонин');
    }
    public function testSplDetect886()
    {
        $this->assertEquals('S-Холодов', $this->object->splitFullName('Холодов').'-Холодов');
    }
    public function testSplDetect887()
    {
        $this->assertEquals('S-Хомколов', $this->object->splitFullName('Хомколов').'-Хомколов');
    }
    public function testSplDetect888()
    {
        $this->assertEquals('S-Храмов', $this->object->splitFullName('Храмов').'-Храмов');
    }
    public function testSplDetect889()
    {
        $this->assertEquals('S-Хромов', $this->object->splitFullName('Хромов').'-Хромов');
    }
    public function testSplDetect890()
    {
        $this->assertEquals('S-Худовеков', $this->object->splitFullName('Худовеков').'-Худовеков');
    }
    public function testSplDetect891()
    {
        $this->assertEquals('S-Хлебов', $this->object->splitFullName('Хлебов').'-Хлебов');
    }
    public function testSplDetect892()
    {
        $this->assertEquals('S-Хуртин', $this->object->splitFullName('Хуртин').'-Хуртин');
    }
    public function testSplDetect893()
    {
        $this->assertEquals('S-Хребтов', $this->object->splitFullName('Хребтов').'-Хребтов');
    }
    public function testSplDetect894()
    {
        $this->assertEquals('S-Худяков', $this->object->splitFullName('Худяков').'-Худяков');
    }
    public function testSplDetect895()
    {
        $this->assertEquals('S-Царицын', $this->object->splitFullName('Царицын').'-Царицын');
    }
    public function testSplDetect896()
    {
        $this->assertEquals('S-Цветаев', $this->object->splitFullName('Цветаев').'-Цветаев');
    }
    public function testSplDetect897()
    {
        $this->assertEquals('S-Цветков', $this->object->splitFullName('Цветков').'-Цветков');
    }
    public function testSplDetect898()
    {
        $this->assertEquals('S-Циолковский', $this->object->splitFullName('Циолковский').'-Циолковский');
    }
    public function testSplDetect899()
    {
        $this->assertEquals('S-Цитников', $this->object->splitFullName('Цитников').'-Цитников');
    }
    public function testSplDetect900()
    {
        $this->assertEquals('S-Цуканов', $this->object->splitFullName('Цуканов').'-Цуканов');
    }
    public function testSplDetect901()
    {
        $this->assertEquals('S-Чаадаев', $this->object->splitFullName('Чаадаев').'-Чаадаев');
    }
    public function testSplDetect902()
    {
        $this->assertEquals('S-Чадов', $this->object->splitFullName('Чадов').'-Чадов');
    }
    public function testSplDetect903()
    {
        $this->assertEquals('S-Чазов', $this->object->splitFullName('Чазов').'-Чазов');
    }
    public function testSplDetect904()
    {
        $this->assertEquals('S-Чалый', $this->object->splitFullName('Чалый').'-Чалый');
    }
    public function testSplDetect905()
    {
        $this->assertEquals('S-Чапаев', $this->object->splitFullName('Чапаев').'-Чапаев');
    }
    public function testSplDetect906()
    {
        $this->assertEquals('S-Чеботарёв', $this->object->splitFullName('Чеботарёв').'-Чеботарёв');
    }
    public function testSplDetect907()
    {
        $this->assertEquals('S-Чебыкин', $this->object->splitFullName('Чебыкин').'-Чебыкин');
    }
    public function testSplDetect908()
    {
        $this->assertEquals('S-Чежеков', $this->object->splitFullName('Чежеков').'-Чежеков');
    }
    public function testSplDetect909()
    {
        $this->assertEquals('S-Чекмарёв', $this->object->splitFullName('Чекмарёв').'-Чекмарёв');
    }
    public function testSplDetect910()
    {
        $this->assertEquals('S-Челомеев', $this->object->splitFullName('Челомеев').'-Челомеев');
    }
    public function testSplDetect911()
    {
        $this->assertEquals('S-Челомей', $this->object->splitFullName('Челомей').'-Челомей');
    }
    public function testSplDetect912()
    {
        $this->assertEquals('S-Челпанов', $this->object->splitFullName('Челпанов').'-Челпанов');
    }
    public function testSplDetect913()
    {
        $this->assertEquals('S-Чендев', $this->object->splitFullName('Чендев').'-Чендев');
    }
    public function testSplDetect914()
    {
        $this->assertEquals('S-Черенчиков', $this->object->splitFullName('Черенчиков').'-Черенчиков');
    }
    public function testSplDetect915()
    {
        $this->assertEquals('S-Черепанов', $this->object->splitFullName('Черепанов').'-Черепанов');
    }
    public function testSplDetect916()
    {
        $this->assertEquals('S-Черкашин', $this->object->splitFullName('Черкашин').'-Черкашин');
    }
    public function testSplDetect917()
    {
        $this->assertEquals('S-Чернов', $this->object->splitFullName('Чернов').'-Чернов');
    }
    public function testSplDetect918()
    {
        $this->assertEquals('S-Чернышёв', $this->object->splitFullName('Чернышёв').'-Чернышёв');
    }
    public function testSplDetect919()
    {
        $this->assertEquals('S-Чернаков', $this->object->splitFullName('Чернаков').'-Чернаков');
    }
    public function testSplDetect920()
    {
        $this->assertEquals('S-Черников', $this->object->splitFullName('Черников').'-Черников');
    }
    public function testSplDetect921()
    {
        $this->assertEquals('S-Чесноков', $this->object->splitFullName('Чесноков').'-Чесноков');
    }
    public function testSplDetect922()
    {
        $this->assertEquals('S-Чиграков', $this->object->splitFullName('Чиграков').'-Чиграков');
    }
    public function testSplDetect923()
    {
        $this->assertEquals('S-Чижиков', $this->object->splitFullName('Чижиков').'-Чижиков');
    }
    public function testSplDetect924()
    {
        $this->assertEquals('S-Чиркаш', $this->object->splitFullName('Чиркаш').'-Чиркаш');
    }
    public function testSplDetect925()
    {
        $this->assertEquals('S-Чистяков', $this->object->splitFullName('Чистяков').'-Чистяков');
    }
    public function testSplDetect926()
    {
        $this->assertEquals('S-Чичиков', $this->object->splitFullName('Чичиков').'-Чичиков');
    }
    public function testSplDetect927()
    {
        $this->assertEquals('S-Чичканов', $this->object->splitFullName('Чичканов').'-Чичканов');
    }
    public function testSplDetect928()
    {
        $this->assertEquals('S-Чкалов', $this->object->splitFullName('Чкалов').'-Чкалов');
    }
    public function testSplDetect929()
    {
        $this->assertEquals('S-Чмыхов', $this->object->splitFullName('Чмыхов').'-Чмыхов');
    }
    public function testSplDetect930()
    {
        $this->assertEquals('S-Чугунов', $this->object->splitFullName('Чугунов').'-Чугунов');
    }
    public function testSplDetect931()
    {
        $this->assertEquals('S-Чужинов', $this->object->splitFullName('Чужинов').'-Чужинов');
    }
    public function testSplDetect932()
    {
        $this->assertEquals('S-Чукчов', $this->object->splitFullName('Чукчов').'-Чукчов');
    }
    public function testSplDetect933()
    {
        $this->assertEquals('S-Чукреев', $this->object->splitFullName('Чукреев').'-Чукреев');
    }
    public function testSplDetect934()
    {
        $this->assertEquals('S-Чупов', $this->object->splitFullName('Чупов').'-Чупов');
    }
    public function testSplDetect935()
    {
        $this->assertEquals('S-Чуприн', $this->object->splitFullName('Чуприн').'-Чуприн');
    }
    public function testSplDetect936()
    {
        $this->assertEquals('S-Чупров', $this->object->splitFullName('Чупров').'-Чупров');
    }
    public function testSplDetect937()
    {
        $this->assertEquals('S-Чучанов', $this->object->splitFullName('Чучанов').'-Чучанов');
    }
    public function testSplDetect938()
    {
        $this->assertEquals('S-Чучумашев', $this->object->splitFullName('Чучумашев').'-Чучумашев');
    }
    public function testSplDetect939()
    {
        $this->assertEquals('S-Шабунин', $this->object->splitFullName('Шабунин').'-Шабунин');
    }
    public function testSplDetect940()
    {
        $this->assertEquals('S-Шакмаков', $this->object->splitFullName('Шакмаков').'-Шакмаков');
    }
    public function testSplDetect941()
    {
        $this->assertEquals('S-Шаляпин', $this->object->splitFullName('Шаляпин').'-Шаляпин');
    }
    public function testSplDetect942()
    {
        $this->assertEquals('S-Шаповалов', $this->object->splitFullName('Шаповалов').'-Шаповалов');
    }
    public function testSplDetect943()
    {
        $this->assertEquals('S-Шапошников', $this->object->splitFullName('Шапошников').'-Шапошников');
    }
    public function testSplDetect944()
    {
        $this->assertEquals('S-Шарапов', $this->object->splitFullName('Шарапов').'-Шарапов');
    }
    public function testSplDetect945()
    {
        $this->assertEquals('S-Шаров', $this->object->splitFullName('Шаров').'-Шаров');
    }
    public function testSplDetect946()
    {
        $this->assertEquals('S-Шаршин', $this->object->splitFullName('Шаршин').'-Шаршин');
    }
    public function testSplDetect947()
    {
        $this->assertEquals('S-Шашлов', $this->object->splitFullName('Шашлов').'-Шашлов');
    }
    public function testSplDetect948()
    {
        $this->assertEquals('S-Шведов', $this->object->splitFullName('Шведов').'-Шведов');
    }
    public function testSplDetect949()
    {
        $this->assertEquals('S-Шевелёк', $this->object->splitFullName('Шевелёк').'-Шевелёк');
    }
    public function testSplDetect950()
    {
        $this->assertEquals('S-Шеломов', $this->object->splitFullName('Шеломов').'-Шеломов');
    }
    public function testSplDetect951()
    {
        $this->assertEquals('S-Шепкин', $this->object->splitFullName('Шепкин').'-Шепкин');
    }
    public function testSplDetect952()
    {
        $this->assertEquals('S-Шеповалов', $this->object->splitFullName('Шеповалов').'-Шеповалов');
    }
    public function testSplDetect953()
    {
        $this->assertEquals('S-Шереметьев', $this->object->splitFullName('Шереметьев').'-Шереметьев');
    }
    public function testSplDetect954()
    {
        $this->assertEquals('S-Шерстов', $this->object->splitFullName('Шерстов').'-Шерстов');
    }
    public function testSplDetect955()
    {
        $this->assertEquals('S-Шикалов', $this->object->splitFullName('Шикалов').'-Шикалов');
    }
    public function testSplDetect956()
    {
        $this->assertEquals('S-Ширманов', $this->object->splitFullName('Ширманов').'-Ширманов');
    }
    public function testSplDetect957()
    {
        $this->assertEquals('S-Шихранов', $this->object->splitFullName('Шихранов').'-Шихранов');
    }
    public function testSplDetect958()
    {
        $this->assertEquals('S-Шишкин', $this->object->splitFullName('Шишкин').'-Шишкин');
    }
    public function testSplDetect959()
    {
        $this->assertEquals('S-Шишлов', $this->object->splitFullName('Шишлов').'-Шишлов');
    }
    public function testSplDetect960()
    {
        $this->assertEquals('S-Шишов', $this->object->splitFullName('Шишов').'-Шишов');
    }
    public function testSplDetect961()
    {
        $this->assertEquals('S-Шкуратов', $this->object->splitFullName('Шкуратов').'-Шкуратов');
    }
    public function testSplDetect962()
    {
        $this->assertEquals('S-Шлыков', $this->object->splitFullName('Шлыков').'-Шлыков');
    }
    public function testSplDetect963()
    {
        $this->assertEquals('S-Шмаков', $this->object->splitFullName('Шмаков').'-Шмаков');
    }
    public function testSplDetect964()
    {
        $this->assertEquals('S-Шмелев', $this->object->splitFullName('Шмелев').'-Шмелев');
    }
    public function testSplDetect965()
    {
        $this->assertEquals('S-Шубин', $this->object->splitFullName('Шубин').'-Шубин');
    }
    public function testSplDetect966()
    {
        $this->assertEquals('S-Шубкин', $this->object->splitFullName('Шубкин').'-Шубкин');
    }
    public function testSplDetect967()
    {
        $this->assertEquals('S-Шувалов', $this->object->splitFullName('Шувалов').'-Шувалов');
    }
    public function testSplDetect968()
    {
        $this->assertEquals('S-Шуйский', $this->object->splitFullName('Шуйский').'-Шуйский');
    }
    public function testSplDetect969()
    {
        $this->assertEquals('S-Шукшин', $this->object->splitFullName('Шукшин').'-Шукшин');
    }
    public function testSplDetect970()
    {
        $this->assertEquals('S-Шулёв', $this->object->splitFullName('Шулёв').'-Шулёв');
    }
    public function testSplDetect971()
    {
        $this->assertEquals('S-Шульдешов', $this->object->splitFullName('Шульдешов').'-Шульдешов');
    }
    public function testSplDetect972()
    {
        $this->assertEquals('S-Шульга', $this->object->splitFullName('Шульга').'-Шульга');
    }
    public function testSplDetect973()
    {
        $this->assertEquals('S-Шульгин', $this->object->splitFullName('Шульгин').'-Шульгин');
    }
    public function testSplDetect974()
    {
        $this->assertEquals('S-Шурупов', $this->object->splitFullName('Шурупов').'-Шурупов');
    }
    public function testSplDetect975()
    {
        $this->assertEquals('S-Шушалев', $this->object->splitFullName('Шушалев').'-Шушалев');
    }
    public function testSplDetect976()
    {
        $this->assertEquals('S-Шурша', $this->object->splitFullName('Шурша').'-Шурша');
    }
    public function testSplDetect977()
    {
        $this->assertEquals('S-Щавельский', $this->object->splitFullName('Щавельский').'-Щавельский');
    }
    public function testSplDetect978()
    {
        $this->assertEquals('S-Щегельский', $this->object->splitFullName('Щегельский').'-Щегельский');
    }
    public function testSplDetect979()
    {
        $this->assertEquals('S-Щеглов', $this->object->splitFullName('Щеглов').'-Щеглов');
    }
    public function testSplDetect980()
    {
        $this->assertEquals('S-Щеголев', $this->object->splitFullName('Щеголев').'-Щеголев');
    }
    public function testSplDetect981()
    {
        $this->assertEquals('S-Щеголихин', $this->object->splitFullName('Щеголихин').'-Щеголихин');
    }
    public function testSplDetect982()
    {
        $this->assertEquals('S-Щедрин', $this->object->splitFullName('Щедрин').'-Щедрин');
    }
    public function testSplDetect983()
    {
        $this->assertEquals('S-Щедров', $this->object->splitFullName('Щедров').'-Щедров');
    }
    public function testSplDetect984()
    {
        $this->assertEquals('S-Щекочихин', $this->object->splitFullName('Щекочихин').'-Щекочихин');
    }
    public function testSplDetect985()
    {
        $this->assertEquals('S-Щепкин', $this->object->splitFullName('Щепкин').'-Щепкин');
    }
    public function testSplDetect986()
    {
        $this->assertEquals('S-Щербаков', $this->object->splitFullName('Щербаков').'-Щербаков');
    }
    public function testSplDetect987()
    {
        $this->assertEquals('S-Щербатых', $this->object->splitFullName('Щербатых').'-Щербатых');
    }
    public function testSplDetect988()
    {
        $this->assertEquals('S-Щербина', $this->object->splitFullName('Щербина').'-Щербина');
    }
    public function testSplDetect989()
    {
        $this->assertEquals('S-Щетинин', $this->object->splitFullName('Щетинин').'-Щетинин');
    }
    public function testSplDetect990()
    {
        $this->assertEquals('S-Щеткин', $this->object->splitFullName('Щеткин').'-Щеткин');
    }
    public function testSplDetect991()
    {
        $this->assertEquals('S-Щукин', $this->object->splitFullName('Щукин').'-Щукин');
    }
    public function testSplDetect992()
    {
        $this->assertEquals('S-Энтин', $this->object->splitFullName('Энтин').'-Энтин');
    }
    public function testSplDetect993()
    {
        $this->assertEquals('S-Эсце', $this->object->splitFullName('Эсце').'-Эсце');
    }
    public function testSplDetect994()
    {
        $this->assertEquals('S-Ювелев', $this->object->splitFullName('Ювелев').'-Ювелев');
    }
    public function testSplDetect995()
    {
        $this->assertEquals('S-Юганцев', $this->object->splitFullName('Юганцев').'-Юганцев');
    }
    public function testSplDetect996()
    {
        $this->assertEquals('S-Югов', $this->object->splitFullName('Югов').'-Югов');
    }
    public function testSplDetect997()
    {
        $this->assertEquals('S-Юдашкин', $this->object->splitFullName('Юдашкин').'-Юдашкин');
    }
    public function testSplDetect998()
    {
        $this->assertEquals('S-Юдин', $this->object->splitFullName('Юдин').'-Юдин');
    }
    public function testSplDetect999()
    {
        $this->assertEquals('S-Юнкин', $this->object->splitFullName('Юнкин').'-Юнкин');
    }
    public function testSplDetect1000()
    {
        $this->assertEquals('S-Юрнаев', $this->object->splitFullName('Юрнаев').'-Юрнаев');
    }
    public function testSplDetect1001()
    {
        $this->assertEquals('S-Юрьев', $this->object->splitFullName('Юрьев').'-Юрьев');
    }
    public function testSplDetect1002()
    {
        $this->assertEquals('S-Юсупов', $this->object->splitFullName('Юсупов').'-Юсупов');
    }
    public function testSplDetect1003()
    {
        $this->assertEquals('S-Юферев', $this->object->splitFullName('Юферев').'-Юферев');
    }
    public function testSplDetect1004()
    {
        $this->assertEquals('S-Якимов', $this->object->splitFullName('Якимов').'-Якимов');
    }
    public function testSplDetect1005()
    {
        $this->assertEquals('S-Яковлев', $this->object->splitFullName('Яковлев').'-Яковлев');
    }
    public function testSplDetect1006()
    {
        $this->assertEquals('S-Якубов', $this->object->splitFullName('Якубов').'-Якубов');
    }
    public function testSplDetect1007()
    {
        $this->assertEquals('S-Якубович', $this->object->splitFullName('Якубович').'-Якубович');
    }
    public function testSplDetect1008()
    {
        $this->assertEquals('S-Якушев', $this->object->splitFullName('Якушев').'-Якушев');
    }
    public function testSplDetect1009()
    {
        $this->assertEquals('S-Янаев', $this->object->splitFullName('Янаев').'-Янаев');
    }
    public function testSplDetect1010()
    {
        $this->assertEquals('S-Янков', $this->object->splitFullName('Янков').'-Янков');
    }
    public function testSplDetect1011()
    {
        $this->assertEquals('S-Янковский', $this->object->splitFullName('Янковский').'-Янковский');
    }
    public function testSplDetect1012()
    {
        $this->assertEquals('S-Ярмольник', $this->object->splitFullName('Ярмольник').'-Ярмольник');
    }
    public function testSplDetect1013()
    {
        $this->assertEquals('S-Яромеев', $this->object->splitFullName('Яромеев').'-Яромеев');
    }
    public function testSplDetect1014()
    {
        $this->assertEquals('S-Ярцев', $this->object->splitFullName('Ярцев').'-Ярцев');
    }
    public function testSplDetect1015()
    {
        $this->assertEquals('S-Ясенев', $this->object->splitFullName('Ясенев').'-Ясенев');
    }
    public function testSplDetect1016()
    {
        $this->assertEquals('S-Яснеев', $this->object->splitFullName('Яснеев').'-Яснеев');
    }
    public function testSplDetect1017()
    {
        $this->assertEquals('S-Яшин', $this->object->splitFullName('Яшин').'-Яшин');
    }
    public function testSplDetect1018()
    {
        $this->assertEquals('S-Абакумова', $this->object->splitFullName('Абакумова').'-Абакумова');
    }
    public function testSplDetect1019()
    {
        $this->assertEquals('S-Абдулова', $this->object->splitFullName('Абдулова').'-Абдулова');
    }
    public function testSplDetect1020()
    {
        $this->assertEquals('S-Абрамова', $this->object->splitFullName('Абрамова').'-Абрамова');
    }
    public function testSplDetect1021()
    {
        $this->assertEquals('S-Авдеева', $this->object->splitFullName('Авдеева').'-Авдеева');
    }
    public function testSplDetect1022()
    {
        $this->assertEquals('S-Аверина', $this->object->splitFullName('Аверина').'-Аверина');
    }
    public function testSplDetect1023()
    {
        $this->assertEquals('S-Аверьянова', $this->object->splitFullName('Аверьянова').'-Аверьянова');
    }
    public function testSplDetect1024()
    {
        $this->assertEquals('S-Агапова', $this->object->splitFullName('Агапова').'-Агапова');
    }
    public function testSplDetect1025()
    {
        $this->assertEquals('S-Агафонова', $this->object->splitFullName('Агафонова').'-Агафонова');
    }
    public function testSplDetect1026()
    {
        $this->assertEquals('S-Агейкина', $this->object->splitFullName('Агейкина').'-Агейкина');
    }
    public function testSplDetect1027()
    {
        $this->assertEquals('S-Ажищенкова', $this->object->splitFullName('Ажищенкова').'-Ажищенкова');
    }
    public function testSplDetect1028()
    {
        $this->assertEquals('S-Аксакова', $this->object->splitFullName('Аксакова').'-Аксакова');
    }
    public function testSplDetect1029()
    {
        $this->assertEquals('S-Аксёнова', $this->object->splitFullName('Аксёнова').'-Аксёнова');
    }
    public function testSplDetect1030()
    {
        $this->assertEquals('S-Аксенчук', $this->object->splitFullName('Аксенчук').'-Аксенчук');
    }
    public function testSplDetect1031()
    {
        $this->assertEquals('S-Аленина', $this->object->splitFullName('Аленина').'-Аленина');
    }
    public function testSplDetect1032()
    {
        $this->assertEquals('S-Алиева', $this->object->splitFullName('Алиева').'-Алиева');
    }
    public function testSplDetect1033()
    {
        $this->assertEquals('S-Амалиева', $this->object->splitFullName('Амалиева').'-Амалиева');
    }
    public function testSplDetect1034()
    {
        $this->assertEquals('S-Амелина', $this->object->splitFullName('Амелина').'-Амелина');
    }
    public function testSplDetect1035()
    {
        $this->assertEquals('S-Аминаева', $this->object->splitFullName('Аминаева').'-Аминаева');
    }
    public function testSplDetect1036()
    {
        $this->assertEquals('S-Александрова', $this->object->splitFullName('Александрова').'-Александрова');
    }
    public function testSplDetect1037()
    {
        $this->assertEquals('S-Алексеева', $this->object->splitFullName('Алексеева').'-Алексеева');
    }
    public function testSplDetect1038()
    {
        $this->assertEquals('S-Алёхина', $this->object->splitFullName('Алёхина').'-Алёхина');
    }
    public function testSplDetect1039()
    {
        $this->assertEquals('S-Аллилуева', $this->object->splitFullName('Аллилуева').'-Аллилуева');
    }
    public function testSplDetect1040()
    {
        $this->assertEquals('S-Андреева', $this->object->splitFullName('Андреева').'-Андреева');
    }
    public function testSplDetect1041()
    {
        $this->assertEquals('S-Андреюшкина', $this->object->splitFullName('Андреюшкина').'-Андреюшкина');
    }
    public function testSplDetect1042()
    {
        $this->assertEquals('S-Андроникова', $this->object->splitFullName('Андроникова').'-Андроникова');
    }
    public function testSplDetect1043()
    {
        $this->assertEquals('S-Андропова', $this->object->splitFullName('Андропова').'-Андропова');
    }
    public function testSplDetect1044()
    {
        $this->assertEquals('S-Аниканова', $this->object->splitFullName('Аниканова').'-Аниканова');
    }
    public function testSplDetect1045()
    {
        $this->assertEquals('S-Анисимова', $this->object->splitFullName('Анисимова').'-Анисимова');
    }
    public function testSplDetect1046()
    {
        $this->assertEquals('S-Анишина', $this->object->splitFullName('Анишина').'-Анишина');
    }
    public function testSplDetect1047()
    {
        $this->assertEquals('S-Анникова', $this->object->splitFullName('Анникова').'-Анникова');
    }
    public function testSplDetect1048()
    {
        $this->assertEquals('S-Анохина', $this->object->splitFullName('Анохина').'-Анохина');
    }
    public function testSplDetect1049()
    {
        $this->assertEquals('S-Аношкина', $this->object->splitFullName('Аношкина').'-Аношкина');
    }
    public function testSplDetect1050()
    {
        $this->assertEquals('S-Антипова', $this->object->splitFullName('Антипова').'-Антипова');
    }
    public function testSplDetect1051()
    {
        $this->assertEquals('S-Антонова', $this->object->splitFullName('Антонова').'-Антонова');
    }
    public function testSplDetect1052()
    {
        $this->assertEquals('S-Артамонова', $this->object->splitFullName('Артамонова').'-Артамонова');
    }
    public function testSplDetect1053()
    {
        $this->assertEquals('S-Арефьева', $this->object->splitFullName('Арефьева').'-Арефьева');
    }
    public function testSplDetect1054()
    {
        $this->assertEquals('S-Аристархова', $this->object->splitFullName('Аристархова').'-Аристархова');
    }
    public function testSplDetect1055()
    {
        $this->assertEquals('S-Арсеньева', $this->object->splitFullName('Арсеньева').'-Арсеньева');
    }
    public function testSplDetect1056()
    {
        $this->assertEquals('S-Артёмова', $this->object->splitFullName('Артёмова').'-Артёмова');
    }
    public function testSplDetect1057()
    {
        $this->assertEquals('S-Асланова', $this->object->splitFullName('Асланова').'-Асланова');
    }
    public function testSplDetect1058()
    {
        $this->assertEquals('S-Аслаханова', $this->object->splitFullName('Аслаханова').'-Аслаханова');
    }
    public function testSplDetect1059()
    {
        $this->assertEquals('S-Астанкова', $this->object->splitFullName('Астанкова').'-Астанкова');
    }
    public function testSplDetect1060()
    {
        $this->assertEquals('S-Астафьева', $this->object->splitFullName('Астафьева').'-Астафьева');
    }
    public function testSplDetect1061()
    {
        $this->assertEquals('S-Астахова', $this->object->splitFullName('Астахова').'-Астахова');
    }
    public function testSplDetect1062()
    {
        $this->assertEquals('S-Афанасьева', $this->object->splitFullName('Афанасьева').'-Афанасьева');
    }
    public function testSplDetect1063()
    {
        $this->assertEquals('S-Афонина', $this->object->splitFullName('Афонина').'-Афонина');
    }
    public function testSplDetect1064()
    {
        $this->assertEquals('S-Аспидова', $this->object->splitFullName('Аспидова').'-Аспидова');
    }
    public function testSplDetect1065()
    {
        $this->assertEquals('S-Бабатьева', $this->object->splitFullName('Бабатьева').'-Бабатьева');
    }
    public function testSplDetect1066()
    {
        $this->assertEquals('S-Бабикова', $this->object->splitFullName('Бабикова').'-Бабикова');
    }
    public function testSplDetect1067()
    {
        $this->assertEquals('S-Бабичева', $this->object->splitFullName('Бабичева').'-Бабичева');
    }
    public function testSplDetect1068()
    {
        $this->assertEquals('S-Бабкина', $this->object->splitFullName('Бабкина').'-Бабкина');
    }
    public function testSplDetect1069()
    {
        $this->assertEquals('S-Бабурина', $this->object->splitFullName('Бабурина').'-Бабурина');
    }
    public function testSplDetect1070()
    {
        $this->assertEquals('S-Багрова', $this->object->splitFullName('Багрова').'-Багрова');
    }
    public function testSplDetect1071()
    {
        $this->assertEquals('S-Бажанова', $this->object->splitFullName('Бажанова').'-Бажанова');
    }
    public function testSplDetect1072()
    {
        $this->assertEquals('S-Баженова', $this->object->splitFullName('Баженова').'-Баженова');
    }
    public function testSplDetect1073()
    {
        $this->assertEquals('S-Базанова', $this->object->splitFullName('Базанова').'-Базанова');
    }
    public function testSplDetect1074()
    {
        $this->assertEquals('S-Базарова', $this->object->splitFullName('Базарова').'-Базарова');
    }
    public function testSplDetect1075()
    {
        $this->assertEquals('S-Балакина', $this->object->splitFullName('Балакина').'-Балакина');
    }
    public function testSplDetect1076()
    {
        $this->assertEquals('S-Балахнова', $this->object->splitFullName('Балахнова').'-Балахнова');
    }
    public function testSplDetect1077()
    {
        $this->assertEquals('S-Балашова', $this->object->splitFullName('Балашова').'-Балашова');
    }
    public function testSplDetect1078()
    {
        $this->assertEquals('S-Баранова', $this->object->splitFullName('Баранова').'-Баранова');
    }
    public function testSplDetect1079()
    {
        $this->assertEquals('S-Барболина', $this->object->splitFullName('Барболина').'-Барболина');
    }
    public function testSplDetect1080()
    {
        $this->assertEquals('S-Баренцева', $this->object->splitFullName('Баренцева').'-Баренцева');
    }
    public function testSplDetect1081()
    {
        $this->assertEquals('S-Баринова', $this->object->splitFullName('Баринова').'-Баринова');
    }
    public function testSplDetect1082()
    {
        $this->assertEquals('S-Баркова', $this->object->splitFullName('Баркова').'-Баркова');
    }
    public function testSplDetect1083()
    {
        $this->assertEquals('S-Барсукова', $this->object->splitFullName('Барсукова').'-Барсукова');
    }
    public function testSplDetect1084()
    {
        $this->assertEquals('S-Батрутдинова', $this->object->splitFullName('Батрутдинова').'-Батрутдинова');
    }
    public function testSplDetect1085()
    {
        $this->assertEquals('S-Безбородова', $this->object->splitFullName('Безбородова').'-Безбородова');
    }
    public function testSplDetect1086()
    {
        $this->assertEquals('S-Безродная', $this->object->splitFullName('Безродная').'-Безродная');
    }
    public function testSplDetect1087()
    {
        $this->assertEquals('S-Безрукова', $this->object->splitFullName('Безрукова').'-Безрукова');
    }
    public function testSplDetect1088()
    {
        $this->assertEquals('S-Безукладникова', $this->object->splitFullName('Безукладникова').'-Безукладникова');
    }
    public function testSplDetect1089()
    {
        $this->assertEquals('S-Беликова', $this->object->splitFullName('Беликова').'-Беликова');
    }
    public function testSplDetect1090()
    {
        $this->assertEquals('S-Белова', $this->object->splitFullName('Белова').'-Белова');
    }
    public function testSplDetect1091()
    {
        $this->assertEquals('S-Беломестнова', $this->object->splitFullName('Беломестнова').'-Беломестнова');
    }
    public function testSplDetect1092()
    {
        $this->assertEquals('S-Бендлина', $this->object->splitFullName('Бендлина').'-Бендлина');
    }
    public function testSplDetect1093()
    {
        $this->assertEquals('S-Бережной', $this->object->splitFullName('Бережной').'-Бережной');
    }
    public function testSplDetect1094()
    {
        $this->assertEquals('S-Белоусова', $this->object->splitFullName('Белоусова').'-Белоусова');
    }
    public function testSplDetect1095()
    {
        $this->assertEquals('S-Бершова', $this->object->splitFullName('Бершова').'-Бершова');
    }
    public function testSplDetect1096()
    {
        $this->assertEquals('S-Беспалова', $this->object->splitFullName('Беспалова').'-Беспалова');
    }
    public function testSplDetect1097()
    {
        $this->assertEquals('S-Бескрёстнова', $this->object->splitFullName('Бескрёстнова').'-Бескрёстнова');
    }
    public function testSplDetect1098()
    {
        $this->assertEquals('S-Бирюкова', $this->object->splitFullName('Бирюкова').'-Бирюкова');
    }
    public function testSplDetect1099()
    {
        $this->assertEquals('S-Блаженова', $this->object->splitFullName('Блаженова').'-Блаженова');
    }
    public function testSplDetect1100()
    {
        $this->assertEquals('S-Блатова', $this->object->splitFullName('Блатова').'-Блатова');
    }
    public function testSplDetect1101()
    {
        $this->assertEquals('S-Блинова', $this->object->splitFullName('Блинова').'-Блинова');
    }
    public function testSplDetect1102()
    {
        $this->assertEquals('S-Блохина', $this->object->splitFullName('Блохина').'-Блохина');
    }
    public function testSplDetect1103()
    {
        $this->assertEquals('S-Боброва', $this->object->splitFullName('Боброва').'-Боброва');
    }
    public function testSplDetect1104()
    {
        $this->assertEquals('S-Бобрикова', $this->object->splitFullName('Бобрикова').'-Бобрикова');
    }
    public function testSplDetect1105()
    {
        $this->assertEquals('S-Богатырёв', $this->object->splitFullName('Богатырёв').'-Богатырёв');
    }
    public function testSplDetect1106()
    {
        $this->assertEquals('S-Богданова', $this->object->splitFullName('Богданова').'-Богданова');
    }
    public function testSplDetect1107()
    {
        $this->assertEquals('S-Боголепова', $this->object->splitFullName('Боголепова').'-Боголепова');
    }
    public function testSplDetect1108()
    {
        $this->assertEquals('S-Боголюбова', $this->object->splitFullName('Боголюбова').'-Боголюбова');
    }
    public function testSplDetect1109()
    {
        $this->assertEquals('S-Богомазова', $this->object->splitFullName('Богомазова').'-Богомазова');
    }
    public function testSplDetect1110()
    {
        $this->assertEquals('S-Богомолова', $this->object->splitFullName('Богомолова').'-Богомолова');
    }
    public function testSplDetect1111()
    {
        $this->assertEquals('S-Богрова', $this->object->splitFullName('Богрова').'-Богрова');
    }
    public function testSplDetect1112()
    {
        $this->assertEquals('S-Бойкова', $this->object->splitFullName('Бойкова').'-Бойкова');
    }
    public function testSplDetect1113()
    {
        $this->assertEquals('S-Болотникова', $this->object->splitFullName('Болотникова').'-Болотникова');
    }
    public function testSplDetect1114()
    {
        $this->assertEquals('S-Болтоногова', $this->object->splitFullName('Болтоногова').'-Болтоногова');
    }
    public function testSplDetect1115()
    {
        $this->assertEquals('S-Большова', $this->object->splitFullName('Большова').'-Большова');
    }
    public function testSplDetect1116()
    {
        $this->assertEquals('S-Бореева', $this->object->splitFullName('Бореева').'-Бореева');
    }
    public function testSplDetect1117()
    {
        $this->assertEquals('S-Бортникова', $this->object->splitFullName('Бортникова').'-Бортникова');
    }
    public function testSplDetect1118()
    {
        $this->assertEquals('S-Борзилова', $this->object->splitFullName('Борзилова').'-Борзилова');
    }
    public function testSplDetect1119()
    {
        $this->assertEquals('S-Борцова', $this->object->splitFullName('Борцова').'-Борцова');
    }
    public function testSplDetect1120()
    {
        $this->assertEquals('S-Брагина', $this->object->splitFullName('Брагина').'-Брагина');
    }
    public function testSplDetect1121()
    {
        $this->assertEquals('S-Брежнева', $this->object->splitFullName('Брежнева').'-Брежнева');
    }
    public function testSplDetect1122()
    {
        $this->assertEquals('S-Бугакова', $this->object->splitFullName('Бугакова').'-Бугакова');
    }
    public function testSplDetect1123()
    {
        $this->assertEquals('S-Буданова', $this->object->splitFullName('Буданова').'-Буданова');
    }
    public function testSplDetect1124()
    {
        $this->assertEquals('S-Будникова', $this->object->splitFullName('Будникова').'-Будникова');
    }
    public function testSplDetect1125()
    {
        $this->assertEquals('S-Будылина', $this->object->splitFullName('Будылина').'-Будылина');
    }
    public function testSplDetect1126()
    {
        $this->assertEquals('S-Букина', $this->object->splitFullName('Букина').'-Букина');
    }
    public function testSplDetect1127()
    {
        $this->assertEquals('S-Букирь', $this->object->splitFullName('Букирь').'-Букирь');
    }
    public function testSplDetect1128()
    {
        $this->assertEquals('S-Буклина', $this->object->splitFullName('Буклина').'-Буклина');
    }
    public function testSplDetect1129()
    {
        $this->assertEquals('S-Булгакова', $this->object->splitFullName('Булгакова').'-Булгакова');
    }
    public function testSplDetect1130()
    {
        $this->assertEquals('S-Бунина', $this->object->splitFullName('Бунина').'-Бунина');
    }
    public function testSplDetect1131()
    {
        $this->assertEquals('S-Буркова', $this->object->splitFullName('Буркова').'-Буркова');
    }
    public function testSplDetect1132()
    {
        $this->assertEquals('S-Бурова', $this->object->splitFullName('Бурова').'-Бурова');
    }
    public function testSplDetect1133()
    {
        $this->assertEquals('S-Бурцова', $this->object->splitFullName('Бурцова').'-Бурцова');
    }
    public function testSplDetect1134()
    {
        $this->assertEquals('S-Бурякова', $this->object->splitFullName('Бурякова').'-Бурякова');
    }
    public function testSplDetect1135()
    {
        $this->assertEquals('S-Бутылина', $this->object->splitFullName('Бутылина').'-Бутылина');
    }
    public function testSplDetect1136()
    {
        $this->assertEquals('S-Былинкина', $this->object->splitFullName('Былинкина').'-Былинкина');
    }
    public function testSplDetect1137()
    {
        $this->assertEquals('S-Бычкова', $this->object->splitFullName('Бычкова').'-Бычкова');
    }
    public function testSplDetect1138()
    {
        $this->assertEquals('S-Вавилова', $this->object->splitFullName('Вавилова').'-Вавилова');
    }
    public function testSplDetect1139()
    {
        $this->assertEquals('S-Вагина', $this->object->splitFullName('Вагина').'-Вагина');
    }
    public function testSplDetect1140()
    {
        $this->assertEquals('S-Вазова', $this->object->splitFullName('Вазова').'-Вазова');
    }
    public function testSplDetect1141()
    {
        $this->assertEquals('S-Валевач', $this->object->splitFullName('Валевач').'-Валевач');
    }
    public function testSplDetect1142()
    {
        $this->assertEquals('S-Варенникова', $this->object->splitFullName('Варенникова').'-Варенникова');
    }
    public function testSplDetect1143()
    {
        $this->assertEquals('S-Васильева', $this->object->splitFullName('Васильева').'-Васильева');
    }
    public function testSplDetect1144()
    {
        $this->assertEquals('S-Васина', $this->object->splitFullName('Васина').'-Васина');
    }
    public function testSplDetect1145()
    {
        $this->assertEquals('S-Васнева', $this->object->splitFullName('Васнева').'-Васнева');
    }
    public function testSplDetect1146()
    {
        $this->assertEquals('S-Васнецова', $this->object->splitFullName('Васнецова').'-Васнецова');
    }
    public function testSplDetect1147()
    {
        $this->assertEquals('S-Вахрова', $this->object->splitFullName('Вахрова').'-Вахрова');
    }
    public function testSplDetect1148()
    {
        $this->assertEquals('S-Вахрушева', $this->object->splitFullName('Вахрушева').'-Вахрушева');
    }
    public function testSplDetect1149()
    {
        $this->assertEquals('S-Венедиктова', $this->object->splitFullName('Венедиктова').'-Венедиктова');
    }
    public function testSplDetect1150()
    {
        $this->assertEquals('S-Веденеева', $this->object->splitFullName('Веденеева').'-Веденеева');
    }
    public function testSplDetect1151()
    {
        $this->assertEquals('S-Веденина', $this->object->splitFullName('Веденина').'-Веденина');
    }
    public function testSplDetect1152()
    {
        $this->assertEquals('S-Ведерникова', $this->object->splitFullName('Ведерникова').'-Ведерникова');
    }
    public function testSplDetect1153()
    {
        $this->assertEquals('S-Вергунова', $this->object->splitFullName('Вергунова').'-Вергунова');
    }
    public function testSplDetect1154()
    {
        $this->assertEquals('S-Верещагина', $this->object->splitFullName('Верещагина').'-Верещагина');
    }
    public function testSplDetect1155()
    {
        $this->assertEquals('S-Вершинина', $this->object->splitFullName('Вершинина').'-Вершинина');
    }
    public function testSplDetect1156()
    {
        $this->assertEquals('S-Веселова', $this->object->splitFullName('Веселова').'-Веселова');
    }
    public function testSplDetect1157()
    {
        $this->assertEquals('S-Викашева', $this->object->splitFullName('Викашева').'-Викашева');
    }
    public function testSplDetect1158()
    {
        $this->assertEquals('S-Виноградова', $this->object->splitFullName('Виноградова').'-Виноградова');
    }
    public function testSplDetect1159()
    {
        $this->assertEquals('S-Винокурова', $this->object->splitFullName('Винокурова').'-Винокурова');
    }
    public function testSplDetect1160()
    {
        $this->assertEquals('S-Витаева', $this->object->splitFullName('Витаева').'-Витаева');
    }
    public function testSplDetect1161()
    {
        $this->assertEquals('S-Витвинина', $this->object->splitFullName('Витвинина').'-Витвинина');
    }
    public function testSplDetect1162()
    {
        $this->assertEquals('S-Вицина', $this->object->splitFullName('Вицина').'-Вицина');
    }
    public function testSplDetect1163()
    {
        $this->assertEquals('S-Водоватова', $this->object->splitFullName('Водоватова').'-Водоватова');
    }
    public function testSplDetect1164()
    {
        $this->assertEquals('S-Воликова', $this->object->splitFullName('Воликова').'-Воликова');
    }
    public function testSplDetect1165()
    {
        $this->assertEquals('S-Волкова', $this->object->splitFullName('Волкова').'-Волкова');
    }
    public function testSplDetect1166()
    {
        $this->assertEquals('S-Вольвакова', $this->object->splitFullName('Вольвакова').'-Вольвакова');
    }
    public function testSplDetect1167()
    {
        $this->assertEquals('S-Воробьева', $this->object->splitFullName('Воробьева').'-Воробьева');
    }
    public function testSplDetect1168()
    {
        $this->assertEquals('S-Воронина', $this->object->splitFullName('Воронина').'-Воронина');
    }
    public function testSplDetect1169()
    {
        $this->assertEquals('S-Воронова', $this->object->splitFullName('Воронова').'-Воронова');
    }
    public function testSplDetect1170()
    {
        $this->assertEquals('S-Воронкова', $this->object->splitFullName('Воронкова').'-Воронкова');
    }
    public function testSplDetect1171()
    {
        $this->assertEquals('S-Воронцова', $this->object->splitFullName('Воронцова').'-Воронцова');
    }
    public function testSplDetect1172()
    {
        $this->assertEquals('S-Воскобойникова', $this->object->splitFullName('Воскобойникова').'-Воскобойникова');
    }
    public function testSplDetect1173()
    {
        $this->assertEquals('S-Вотякова', $this->object->splitFullName('Вотякова').'-Вотякова');
    }
    public function testSplDetect1174()
    {
        $this->assertEquals('S-Вырыпаева', $this->object->splitFullName('Вырыпаева').'-Вырыпаева');
    }
    public function testSplDetect1175()
    {
        $this->assertEquals('S-Гаврикова', $this->object->splitFullName('Гаврикова').'-Гаврикова');
    }
    public function testSplDetect1176()
    {
        $this->assertEquals('S-Гаврилова', $this->object->splitFullName('Гаврилова').'-Гаврилова');
    }
    public function testSplDetect1177()
    {
        $this->assertEquals('S-Гагарина', $this->object->splitFullName('Гагарина').'-Гагарина');
    }
    public function testSplDetect1178()
    {
        $this->assertEquals('S-Гаголина', $this->object->splitFullName('Гаголина').'-Гаголина');
    }
    public function testSplDetect1179()
    {
        $this->assertEquals('S-Галдина', $this->object->splitFullName('Галдина').'-Галдина');
    }
    public function testSplDetect1180()
    {
        $this->assertEquals('S-Галкина', $this->object->splitFullName('Галкина').'-Галкина');
    }
    public function testSplDetect1181()
    {
        $this->assertEquals('S-Галыгина', $this->object->splitFullName('Галыгина').'-Галыгина');
    }
    public function testSplDetect1182()
    {
        $this->assertEquals('S-Гарина', $this->object->splitFullName('Гарина').'-Гарина');
    }
    public function testSplDetect1183()
    {
        $this->assertEquals('S-Гачева', $this->object->splitFullName('Гачева').'-Гачева');
    }
    public function testSplDetect1184()
    {
        $this->assertEquals('S-Генкина', $this->object->splitFullName('Генкина').'-Генкина');
    }
    public function testSplDetect1185()
    {
        $this->assertEquals('S-Герасимова', $this->object->splitFullName('Герасимова').'-Герасимова');
    }
    public function testSplDetect1186()
    {
        $this->assertEquals('S-Гибазова', $this->object->splitFullName('Гибазова').'-Гибазова');
    }
    public function testSplDetect1187()
    {
        $this->assertEquals('S-Гилёва', $this->object->splitFullName('Гилёва').'-Гилёва');
    }
    public function testSplDetect1188()
    {
        $this->assertEquals('S-Глазкова', $this->object->splitFullName('Глазкова').'-Глазкова');
    }
    public function testSplDetect1189()
    {
        $this->assertEquals('S-Голованова', $this->object->splitFullName('Голованова').'-Голованова');
    }
    public function testSplDetect1190()
    {
        $this->assertEquals('S-Головаина', $this->object->splitFullName('Головаина').'-Головаина');
    }
    public function testSplDetect1191()
    {
        $this->assertEquals('S-Голодяева', $this->object->splitFullName('Голодяева').'-Голодяева');
    }
    public function testSplDetect1192()
    {
        $this->assertEquals('S-Голубева', $this->object->splitFullName('Голубева').'-Голубева');
    }
    public function testSplDetect1193()
    {
        $this->assertEquals('S-Голубова', $this->object->splitFullName('Голубова').'-Голубова');
    }
    public function testSplDetect1194()
    {
        $this->assertEquals('S-Голубцова', $this->object->splitFullName('Голубцова').'-Голубцова');
    }
    public function testSplDetect1195()
    {
        $this->assertEquals('S-Гончарова', $this->object->splitFullName('Гончарова').'-Гончарова');
    }
    public function testSplDetect1196()
    {
        $this->assertEquals('S-Горбачёв', $this->object->splitFullName('Горбачёв').'-Горбачёв');
    }
    public function testSplDetect1197()
    {
        $this->assertEquals('S-Горбунова', $this->object->splitFullName('Горбунова').'-Горбунова');
    }
    public function testSplDetect1198()
    {
        $this->assertEquals('S-Горбункова', $this->object->splitFullName('Горбункова').'-Горбункова');
    }
    public function testSplDetect1199()
    {
        $this->assertEquals('S-Горева', $this->object->splitFullName('Горева').'-Горева');
    }
    public function testSplDetect1200()
    {
        $this->assertEquals('S-Горелова', $this->object->splitFullName('Горелова').'-Горелова');
    }
    public function testSplDetect1201()
    {
        $this->assertEquals('S-Горемыкина', $this->object->splitFullName('Горемыкина').'-Горемыкина');
    }
    public function testSplDetect1202()
    {
        $this->assertEquals('S-Горюнова', $this->object->splitFullName('Горюнова').'-Горюнова');
    }
    public function testSplDetect1203()
    {
        $this->assertEquals('S-Грачёва', $this->object->splitFullName('Грачёва').'-Грачёва');
    }
    public function testSplDetect1204()
    {
        $this->assertEquals('S-Графова', $this->object->splitFullName('Графова').'-Графова');
    }
    public function testSplDetect1205()
    {
        $this->assertEquals('S-Гретченко', $this->object->splitFullName('Гретченко').'-Гретченко');
    }
    public function testSplDetect1206()
    {
        $this->assertEquals('S-Гречко', $this->object->splitFullName('Гречко').'-Гречко');
    }
    public function testSplDetect1207()
    {
        $this->assertEquals('S-Грешнева', $this->object->splitFullName('Грешнева').'-Грешнева');
    }
    public function testSplDetect1208()
    {
        $this->assertEquals('S-Грибова', $this->object->splitFullName('Грибова').'-Грибова');
    }
    public function testSplDetect1209()
    {
        $this->assertEquals('S-Грибоедова', $this->object->splitFullName('Грибоедова').'-Грибоедова');
    }
    public function testSplDetect1210()
    {
        $this->assertEquals('S-Григорьева', $this->object->splitFullName('Григорьева').'-Григорьева');
    }
    public function testSplDetect1211()
    {
        $this->assertEquals('S-Гринаина', $this->object->splitFullName('Гринаина').'-Гринаина');
    }
    public function testSplDetect1212()
    {
        $this->assertEquals('S-Гришина', $this->object->splitFullName('Гришина').'-Гришина');
    }
    public function testSplDetect1213()
    {
        $this->assertEquals('S-Громова', $this->object->splitFullName('Громова').'-Громова');
    }
    public function testSplDetect1214()
    {
        $this->assertEquals('S-Громыко', $this->object->splitFullName('Громыко').'-Громыко');
    }
    public function testSplDetect1215()
    {
        $this->assertEquals('S-Гулина', $this->object->splitFullName('Гулина').'-Гулина');
    }
    public function testSplDetect1216()
    {
        $this->assertEquals('S-Гурьянова', $this->object->splitFullName('Гурьянова').'-Гурьянова');
    }
    public function testSplDetect1217()
    {
        $this->assertEquals('S-Гусарова', $this->object->splitFullName('Гусарова').'-Гусарова');
    }
    public function testSplDetect1218()
    {
        $this->assertEquals('S-Гусева', $this->object->splitFullName('Гусева').'-Гусева');
    }
    public function testSplDetect1219()
    {
        $this->assertEquals('S-Гунина', $this->object->splitFullName('Гунина').'-Гунина');
    }
    public function testSplDetect1220()
    {
        $this->assertEquals('S-Гущина', $this->object->splitFullName('Гущина').'-Гущина');
    }
    public function testSplDetect1221()
    {
        $this->assertEquals('S-Головаха', $this->object->splitFullName('Головаха').'-Головаха');
    }
    public function testSplDetect1222()
    {
        $this->assertEquals('S-Дорофеева', $this->object->splitFullName('Дорофеева').'-Дорофеева');
    }
    public function testSplDetect1223()
    {
        $this->assertEquals('S-Давыдкина', $this->object->splitFullName('Давыдкина').'-Давыдкина');
    }
    public function testSplDetect1224()
    {
        $this->assertEquals('S-Данильцина', $this->object->splitFullName('Данильцина').'-Данильцина');
    }
    public function testSplDetect1225()
    {
        $this->assertEquals('S-Дворникова', $this->object->splitFullName('Дворникова').'-Дворникова');
    }
    public function testSplDetect1226()
    {
        $this->assertEquals('S-Деменок', $this->object->splitFullName('Деменок').'-Деменок');
    }
    public function testSplDetect1227()
    {
        $this->assertEquals('S-Дементьева', $this->object->splitFullName('Дементьева').'-Дементьева');
    }
    public function testSplDetect1228()
    {
        $this->assertEquals('S-Демидова', $this->object->splitFullName('Демидова').'-Демидова');
    }
    public function testSplDetect1229()
    {
        $this->assertEquals('S-Деникина', $this->object->splitFullName('Деникина').'-Деникина');
    }
    public function testSplDetect1230()
    {
        $this->assertEquals('S-Дёгтина', $this->object->splitFullName('Дёгтина').'-Дёгтина');
    }
    public function testSplDetect1231()
    {
        $this->assertEquals('S-Дегтярева', $this->object->splitFullName('Дегтярева').'-Дегтярева');
    }
    public function testSplDetect1232()
    {
        $this->assertEquals('S-Дежнёв', $this->object->splitFullName('Дежнёв').'-Дежнёв');
    }
    public function testSplDetect1233()
    {
        $this->assertEquals('S-Делова', $this->object->splitFullName('Делова').'-Делова');
    }
    public function testSplDetect1234()
    {
        $this->assertEquals('S-Дементьева', $this->object->splitFullName('Дементьева').'-Дементьева');
    }
    public function testSplDetect1235()
    {
        $this->assertEquals('S-Дёмина', $this->object->splitFullName('Дёмина').'-Дёмина');
    }
    public function testSplDetect1236()
    {
        $this->assertEquals('S-Державина', $this->object->splitFullName('Державина').'-Державина');
    }
    public function testSplDetect1237()
    {
        $this->assertEquals('S-Дернова', $this->object->splitFullName('Дернова').'-Дернова');
    }
    public function testSplDetect1238()
    {
        $this->assertEquals('S-Десяткова', $this->object->splitFullName('Десяткова').'-Десяткова');
    }
    public function testSplDetect1239()
    {
        $this->assertEquals('S-Дмитриева', $this->object->splitFullName('Дмитриева').'-Дмитриева');
    }
    public function testSplDetect1240()
    {
        $this->assertEquals('S-Добронравова', $this->object->splitFullName('Добронравова').'-Добронравова');
    }
    public function testSplDetect1241()
    {
        $this->assertEquals('S-Добрынина', $this->object->splitFullName('Добрынина').'-Добрынина');
    }
    public function testSplDetect1242()
    {
        $this->assertEquals('S-Долгорукова', $this->object->splitFullName('Долгорукова').'-Долгорукова');
    }
    public function testSplDetect1243()
    {
        $this->assertEquals('S-Должикова', $this->object->splitFullName('Должикова').'-Должикова');
    }
    public function testSplDetect1244()
    {
        $this->assertEquals('S-Домашева', $this->object->splitFullName('Домашева').'-Домашева');
    }
    public function testSplDetect1245()
    {
        $this->assertEquals('S-Достовалова', $this->object->splitFullName('Достовалова').'-Достовалова');
    }
    public function testSplDetect1246()
    {
        $this->assertEquals('S-Драгомирова', $this->object->splitFullName('Драгомирова').'-Драгомирова');
    }
    public function testSplDetect1247()
    {
        $this->assertEquals('S-Дресвянина', $this->object->splitFullName('Дресвянина').'-Дресвянина');
    }
    public function testSplDetect1248()
    {
        $this->assertEquals('S-Дрёмова', $this->object->splitFullName('Дрёмова').'-Дрёмова');
    }
    public function testSplDetect1249()
    {
        $this->assertEquals('S-Друганина', $this->object->splitFullName('Друганина').'-Друганина');
    }
    public function testSplDetect1250()
    {
        $this->assertEquals('S-Другова', $this->object->splitFullName('Другова').'-Другова');
    }
    public function testSplDetect1251()
    {
        $this->assertEquals('S-Дубинина', $this->object->splitFullName('Дубинина').'-Дубинина');
    }
    public function testSplDetect1252()
    {
        $this->assertEquals('S-Дубова', $this->object->splitFullName('Дубова').'-Дубова');
    }
    public function testSplDetect1253()
    {
        $this->assertEquals('S-Дубровская', $this->object->splitFullName('Дубровская').'-Дубровская');
    }
    public function testSplDetect1254()
    {
        $this->assertEquals('S-Дульцева', $this->object->splitFullName('Дульцева').'-Дульцева');
    }
    public function testSplDetect1255()
    {
        $this->assertEquals('S-Думановская', $this->object->splitFullName('Думановская').'-Думановская');
    }
    public function testSplDetect1256()
    {
        $this->assertEquals('S-Дурова', $this->object->splitFullName('Дурова').'-Дурова');
    }
    public function testSplDetect1257()
    {
        $this->assertEquals('S-Дятлова', $this->object->splitFullName('Дятлова').'-Дятлова');
    }
    public function testSplDetect1258()
    {
        $this->assertEquals('S-Евстигнеева', $this->object->splitFullName('Евстигнеева').'-Евстигнеева');
    }
    public function testSplDetect1259()
    {
        $this->assertEquals('S-Егорова', $this->object->splitFullName('Егорова').'-Егорова');
    }
    public function testSplDetect1260()
    {
        $this->assertEquals('S-Едемская', $this->object->splitFullName('Едемская').'-Едемская');
    }
    public function testSplDetect1261()
    {
        $this->assertEquals('S-Ежова', $this->object->splitFullName('Ежова').'-Ежова');
    }
    public function testSplDetect1262()
    {
        $this->assertEquals('S-Елагина', $this->object->splitFullName('Елагина').'-Елагина');
    }
    public function testSplDetect1263()
    {
        $this->assertEquals('S-Елизарова', $this->object->splitFullName('Елизарова').'-Елизарова');
    }
    public function testSplDetect1264()
    {
        $this->assertEquals('S-Елисеева', $this->object->splitFullName('Елисеева').'-Елисеева');
    }
    public function testSplDetect1265()
    {
        $this->assertEquals('S-Ельцина', $this->object->splitFullName('Ельцина').'-Ельцина');
    }
    public function testSplDetect1266()
    {
        $this->assertEquals('S-Ельцова', $this->object->splitFullName('Ельцова').'-Ельцова');
    }
    public function testSplDetect1267()
    {
        $this->assertEquals('S-Емельяненко', $this->object->splitFullName('Емельяненко').'-Емельяненко');
    }
    public function testSplDetect1268()
    {
        $this->assertEquals('S-Емельянова', $this->object->splitFullName('Емельянова').'-Емельянова');
    }
    public function testSplDetect1269()
    {
        $this->assertEquals('S-Енина', $this->object->splitFullName('Енина').'-Енина');
    }
    public function testSplDetect1270()
    {
        $this->assertEquals('S-Ерзова', $this->object->splitFullName('Ерзова').'-Ерзова');
    }
    public function testSplDetect1271()
    {
        $this->assertEquals('S-Ермакова', $this->object->splitFullName('Ермакова').'-Ермакова');
    }
    public function testSplDetect1272()
    {
        $this->assertEquals('S-Ермилова', $this->object->splitFullName('Ермилова').'-Ермилова');
    }
    public function testSplDetect1273()
    {
        $this->assertEquals('S-Еромеева', $this->object->splitFullName('Еромеева').'-Еромеева');
    }
    public function testSplDetect1274()
    {
        $this->assertEquals('S-Ерофеева', $this->object->splitFullName('Ерофеева').'-Ерофеева');
    }
    public function testSplDetect1275()
    {
        $this->assertEquals('S-Ершова', $this->object->splitFullName('Ершова').'-Ершова');
    }
    public function testSplDetect1276()
    {
        $this->assertEquals('S-Есипова', $this->object->splitFullName('Есипова').'-Есипова');
    }
    public function testSplDetect1277()
    {
        $this->assertEquals('S-Ефимова', $this->object->splitFullName('Ефимова').'-Ефимова');
    }
    public function testSplDetect1278()
    {
        $this->assertEquals('S-Ефремова', $this->object->splitFullName('Ефремова').'-Ефремова');
    }
    public function testSplDetect1279()
    {
        $this->assertEquals('S-Емелина', $this->object->splitFullName('Емелина').'-Емелина');
    }
    public function testSplDetect1280()
    {
        $this->assertEquals('S-Ерохина', $this->object->splitFullName('Ерохина').'-Ерохина');
    }
    public function testSplDetect1281()
    {
        $this->assertEquals('S-Ерёмина', $this->object->splitFullName('Ерёмина').'-Ерёмина');
    }
    public function testSplDetect1282()
    {
        $this->assertEquals('S-Ешеваская', $this->object->splitFullName('Ешеваская').'-Ешеваская');
    }
    public function testSplDetect1283()
    {
        $this->assertEquals('S-Жабина', $this->object->splitFullName('Жабина').'-Жабина');
    }
    public function testSplDetect1284()
    {
        $this->assertEquals('S-Жаркова', $this->object->splitFullName('Жаркова').'-Жаркова');
    }
    public function testSplDetect1285()
    {
        $this->assertEquals('S-Жарыхина', $this->object->splitFullName('Жарыхина').'-Жарыхина');
    }
    public function testSplDetect1286()
    {
        $this->assertEquals('S-Жвикова', $this->object->splitFullName('Жвикова').'-Жвикова');
    }
    public function testSplDetect1287()
    {
        $this->assertEquals('S-Жданова', $this->object->splitFullName('Жданова').'-Жданова');
    }
    public function testSplDetect1288()
    {
        $this->assertEquals('S-Жеглова', $this->object->splitFullName('Жеглова').'-Жеглова');
    }
    public function testSplDetect1289()
    {
        $this->assertEquals('S-Железкина', $this->object->splitFullName('Железкина').'-Железкина');
    }
    public function testSplDetect1290()
    {
        $this->assertEquals('S-Жестакова', $this->object->splitFullName('Жестакова').'-Жестакова');
    }
    public function testSplDetect1291()
    {
        $this->assertEquals('S-Живенкова', $this->object->splitFullName('Живенкова').'-Живенкова');
    }
    public function testSplDetect1292()
    {
        $this->assertEquals('S-Жиглова', $this->object->splitFullName('Жиглова').'-Жиглова');
    }
    public function testSplDetect1293()
    {
        $this->assertEquals('S-Жигунова', $this->object->splitFullName('Жигунова').'-Жигунова');
    }
    public function testSplDetect1294()
    {
        $this->assertEquals('S-Жидкова', $this->object->splitFullName('Жидкова').'-Жидкова');
    }
    public function testSplDetect1295()
    {
        $this->assertEquals('S-Жикина', $this->object->splitFullName('Жикина').'-Жикина');
    }
    public function testSplDetect1296()
    {
        $this->assertEquals('S-Жилина', $this->object->splitFullName('Жилина').'-Жилина');
    }
    public function testSplDetect1297()
    {
        $this->assertEquals('S-Жилова', $this->object->splitFullName('Жилова').'-Жилова');
    }
    public function testSplDetect1298()
    {
        $this->assertEquals('S-Жолдина', $this->object->splitFullName('Жолдина').'-Жолдина');
    }
    public function testSplDetect1299()
    {
        $this->assertEquals('S-Жукова', $this->object->splitFullName('Жукова').'-Жукова');
    }
    public function testSplDetect1300()
    {
        $this->assertEquals('S-Жутова', $this->object->splitFullName('Жутова').'-Жутова');
    }
    public function testSplDetect1301()
    {
        $this->assertEquals('S-Журавлёв', $this->object->splitFullName('Журавлёв').'-Журавлёв');
    }
    public function testSplDetect1302()
    {
        $this->assertEquals('S-Журова', $this->object->splitFullName('Журова').'-Журова');
    }
    public function testSplDetect1303()
    {
        $this->assertEquals('S-Заврагина', $this->object->splitFullName('Заврагина').'-Заврагина');
    }
    public function testSplDetect1304()
    {
        $this->assertEquals('S-Завражина', $this->object->splitFullName('Завражина').'-Завражина');
    }
    public function testSplDetect1305()
    {
        $this->assertEquals('S-Завражнова', $this->object->splitFullName('Завражнова').'-Завражнова');
    }
    public function testSplDetect1306()
    {
        $this->assertEquals('S-Завразина', $this->object->splitFullName('Завразина').'-Завразина');
    }
    public function testSplDetect1307()
    {
        $this->assertEquals('S-Завьялова', $this->object->splitFullName('Завьялова').'-Завьялова');
    }
    public function testSplDetect1308()
    {
        $this->assertEquals('S-Задорнова', $this->object->splitFullName('Задорнова').'-Задорнова');
    }
    public function testSplDetect1309()
    {
        $this->assertEquals('S-Задорожный', $this->object->splitFullName('Задорожный').'-Задорожный');
    }
    public function testSplDetect1310()
    {
        $this->assertEquals('S-Зайцева', $this->object->splitFullName('Зайцева').'-Зайцева');
    }
    public function testSplDetect1311()
    {
        $this->assertEquals('S-Закревская', $this->object->splitFullName('Закревская').'-Закревская');
    }
    public function testSplDetect1312()
    {
        $this->assertEquals('S-Закрятина', $this->object->splitFullName('Закрятина').'-Закрятина');
    }
    public function testSplDetect1313()
    {
        $this->assertEquals('S-Захарова', $this->object->splitFullName('Захарова').'-Захарова');
    }
    public function testSplDetect1314()
    {
        $this->assertEquals('S-Захарьина', $this->object->splitFullName('Захарьина').'-Захарьина');
    }
    public function testSplDetect1315()
    {
        $this->assertEquals('S-Звягина', $this->object->splitFullName('Звягина').'-Звягина');
    }
    public function testSplDetect1316()
    {
        $this->assertEquals('S-Зёмина', $this->object->splitFullName('Зёмина').'-Зёмина');
    }
    public function testSplDetect1317()
    {
        $this->assertEquals('S-Зимина', $this->object->splitFullName('Зимина').'-Зимина');
    }
    public function testSplDetect1318()
    {
        $this->assertEquals('S-Золина', $this->object->splitFullName('Золина').'-Золина');
    }
    public function testSplDetect1319()
    {
        $this->assertEquals('S-Зонова', $this->object->splitFullName('Зонова').'-Зонова');
    }
    public function testSplDetect1320()
    {
        $this->assertEquals('S-Зубкова', $this->object->splitFullName('Зубкова').'-Зубкова');
    }
    public function testSplDetect1321()
    {
        $this->assertEquals('S-Зубова', $this->object->splitFullName('Зубова').'-Зубова');
    }
    public function testSplDetect1322()
    {
        $this->assertEquals('S-Зуева', $this->object->splitFullName('Зуева').'-Зуева');
    }
    public function testSplDetect1323()
    {
        $this->assertEquals('S-Зуйкова', $this->object->splitFullName('Зуйкова').'-Зуйкова');
    }
    public function testSplDetect1324()
    {
        $this->assertEquals('S-Зимнякова', $this->object->splitFullName('Зимнякова').'-Зимнякова');
    }
    public function testSplDetect1325()
    {
        $this->assertEquals('S-Зиначенко', $this->object->splitFullName('Зиначенко').'-Зиначенко');
    }
    public function testSplDetect1326()
    {
        $this->assertEquals('S-Зыкина', $this->object->splitFullName('Зыкина').'-Зыкина');
    }
    public function testSplDetect1327()
    {
        $this->assertEquals('S-Зырянова', $this->object->splitFullName('Зырянова').'-Зырянова');
    }
    public function testSplDetect1328()
    {
        $this->assertEquals('S-Зюганова', $this->object->splitFullName('Зюганова').'-Зюганова');
    }
    public function testSplDetect1329()
    {
        $this->assertEquals('S-Зверева', $this->object->splitFullName('Зверева').'-Зверева');
    }
    public function testSplDetect1330()
    {
        $this->assertEquals('S-Игнаткович', $this->object->splitFullName('Игнаткович').'-Игнаткович');
    }
    public function testSplDetect1331()
    {
        $this->assertEquals('S-Ивакина', $this->object->splitFullName('Ивакина').'-Ивакина');
    }
    public function testSplDetect1332()
    {
        $this->assertEquals('S-Ибрагимова', $this->object->splitFullName('Ибрагимова').'-Ибрагимова');
    }
    public function testSplDetect1333()
    {
        $this->assertEquals('S-Иванова', $this->object->splitFullName('Иванова').'-Иванова');
    }
    public function testSplDetect1334()
    {
        $this->assertEquals('S-Иванкова', $this->object->splitFullName('Иванкова').'-Иванкова');
    }
    public function testSplDetect1335()
    {
        $this->assertEquals('S-Ивашина', $this->object->splitFullName('Ивашина').'-Ивашина');
    }
    public function testSplDetect1336()
    {
        $this->assertEquals('S-Ивашова', $this->object->splitFullName('Ивашова').'-Ивашова');
    }
    public function testSplDetect1337()
    {
        $this->assertEquals('S-Ивкина', $this->object->splitFullName('Ивкина').'-Ивкина');
    }
    public function testSplDetect1338()
    {
        $this->assertEquals('S-Иволгина', $this->object->splitFullName('Иволгина').'-Иволгина');
    }
    public function testSplDetect1339()
    {
        $this->assertEquals('S-Игнатьева', $this->object->splitFullName('Игнатьева').'-Игнатьева');
    }
    public function testSplDetect1340()
    {
        $this->assertEquals('S-Игошина', $this->object->splitFullName('Игошина').'-Игошина');
    }
    public function testSplDetect1341()
    {
        $this->assertEquals('S-Измайлова', $this->object->splitFullName('Измайлова').'-Измайлова');
    }
    public function testSplDetect1342()
    {
        $this->assertEquals('S-Иканова', $this->object->splitFullName('Иканова').'-Иканова');
    }
    public function testSplDetect1343()
    {
        $this->assertEquals('S-Икашева', $this->object->splitFullName('Икашева').'-Икашева');
    }
    public function testSplDetect1344()
    {
        $this->assertEquals('S-Ильина', $this->object->splitFullName('Ильина').'-Ильина');
    }
    public function testSplDetect1345()
    {
        $this->assertEquals('S-Илюшина', $this->object->splitFullName('Илюшина').'-Илюшина');
    }
    public function testSplDetect1346()
    {
        $this->assertEquals('S-Ильюшина', $this->object->splitFullName('Ильюшина').'-Ильюшина');
    }
    public function testSplDetect1347()
    {
        $this->assertEquals('S-Иноземцева', $this->object->splitFullName('Иноземцева').'-Иноземцева');
    }
    public function testSplDetect1348()
    {
        $this->assertEquals('S-Ипатьева', $this->object->splitFullName('Ипатьева').'-Ипатьева');
    }
    public function testSplDetect1349()
    {
        $this->assertEquals('S-Исаева', $this->object->splitFullName('Исаева').'-Исаева');
    }
    public function testSplDetect1350()
    {
        $this->assertEquals('S-Истомина', $this->object->splitFullName('Истомина').'-Истомина');
    }
    public function testSplDetect1351()
    {
        $this->assertEquals('S-Кабинова', $this->object->splitFullName('Кабинова').'-Кабинова');
    }
    public function testSplDetect1352()
    {
        $this->assertEquals('S-Каблукова', $this->object->splitFullName('Каблукова').'-Каблукова');
    }
    public function testSplDetect1353()
    {
        $this->assertEquals('S-Каверина', $this->object->splitFullName('Каверина').'-Каверина');
    }
    public function testSplDetect1354()
    {
        $this->assertEquals('S-Кадникова', $this->object->splitFullName('Кадникова').'-Кадникова');
    }
    public function testSplDetect1355()
    {
        $this->assertEquals('S-Кадцына', $this->object->splitFullName('Кадцына').'-Кадцына');
    }
    public function testSplDetect1356()
    {
        $this->assertEquals('S-Казакова', $this->object->splitFullName('Казакова').'-Казакова');
    }
    public function testSplDetect1357()
    {
        $this->assertEquals('S-Казанцева', $this->object->splitFullName('Казанцева').'-Казанцева');
    }
    public function testSplDetect1358()
    {
        $this->assertEquals('S-Казарезова', $this->object->splitFullName('Казарезова').'-Казарезова');
    }
    public function testSplDetect1359()
    {
        $this->assertEquals('S-Калашник', $this->object->splitFullName('Калашник').'-Калашник');
    }
    public function testSplDetect1360()
    {
        $this->assertEquals('S-Калганова', $this->object->splitFullName('Калганова').'-Калганова');
    }
    public function testSplDetect1361()
    {
        $this->assertEquals('S-Каменских', $this->object->splitFullName('Каменских').'-Каменских');
    }
    public function testSplDetect1362()
    {
        $this->assertEquals('S-Камкина', $this->object->splitFullName('Камкина').'-Камкина');
    }
    public function testSplDetect1363()
    {
        $this->assertEquals('S-Каналина', $this->object->splitFullName('Каналина').'-Каналина');
    }
    public function testSplDetect1364()
    {
        $this->assertEquals('S-Кандинская', $this->object->splitFullName('Кандинская').'-Кандинская');
    }
    public function testSplDetect1365()
    {
        $this->assertEquals('S-Капица', $this->object->splitFullName('Капица').'-Капица');
    }
    public function testSplDetect1366()
    {
        $this->assertEquals('S-Капралова', $this->object->splitFullName('Капралова').'-Капралова');
    }
    public function testSplDetect1367()
    {
        $this->assertEquals('S-Караваева', $this->object->splitFullName('Караваева').'-Караваева');
    }
    public function testSplDetect1368()
    {
        $this->assertEquals('S-Караулова', $this->object->splitFullName('Караулова').'-Караулова');
    }
    public function testSplDetect1369()
    {
        $this->assertEquals('S-Карева', $this->object->splitFullName('Карева').'-Карева');
    }
    public function testSplDetect1370()
    {
        $this->assertEquals('S-Каретникова', $this->object->splitFullName('Каретникова').'-Каретникова');
    }
    public function testSplDetect1371()
    {
        $this->assertEquals('S-Каргина', $this->object->splitFullName('Каргина').'-Каргина');
    }
    public function testSplDetect1372()
    {
        $this->assertEquals('S-Карташова', $this->object->splitFullName('Карташова').'-Карташова');
    }
    public function testSplDetect1373()
    {
        $this->assertEquals('S-Карчагина', $this->object->splitFullName('Карчагина').'-Карчагина');
    }
    public function testSplDetect1374()
    {
        $this->assertEquals('S-Касатый', $this->object->splitFullName('Касатый').'-Касатый');
    }
    public function testSplDetect1375()
    {
        $this->assertEquals('S-Катина', $this->object->splitFullName('Катина').'-Катина');
    }
    public function testSplDetect1376()
    {
        $this->assertEquals('S-Качусова', $this->object->splitFullName('Качусова').'-Качусова');
    }
    public function testSplDetect1377()
    {
        $this->assertEquals('S-Кашарина', $this->object->splitFullName('Кашарина').'-Кашарина');
    }
    public function testSplDetect1378()
    {
        $this->assertEquals('S-Каширина', $this->object->splitFullName('Каширина').'-Каширина');
    }
    public function testSplDetect1379()
    {
        $this->assertEquals('S-Кашканова', $this->object->splitFullName('Кашканова').'-Кашканова');
    }
    public function testSplDetect1380()
    {
        $this->assertEquals('S-Кашникова', $this->object->splitFullName('Кашникова').'-Кашникова');
    }
    public function testSplDetect1381()
    {
        $this->assertEquals('S-Киреева', $this->object->splitFullName('Киреева').'-Киреева');
    }
    public function testSplDetect1382()
    {
        $this->assertEquals('S-Кирилишена', $this->object->splitFullName('Кирилишена').'-Кирилишена');
    }
    public function testSplDetect1383()
    {
        $this->assertEquals('S-Кирилова', $this->object->splitFullName('Кирилова').'-Кирилова');
    }
    public function testSplDetect1384()
    {
        $this->assertEquals('S-Кирсанова', $this->object->splitFullName('Кирсанова').'-Кирсанова');
    }
    public function testSplDetect1385()
    {
        $this->assertEquals('S-Кирьянова', $this->object->splitFullName('Кирьянова').'-Кирьянова');
    }
    public function testSplDetect1386()
    {
        $this->assertEquals('S-Клепахова', $this->object->splitFullName('Клепахова').'-Клепахова');
    }
    public function testSplDetect1387()
    {
        $this->assertEquals('S-Климова', $this->object->splitFullName('Климова').'-Климова');
    }
    public function testSplDetect1388()
    {
        $this->assertEquals('S-Климушина', $this->object->splitFullName('Климушина').'-Климушина');
    }
    public function testSplDetect1389()
    {
        $this->assertEquals('S-Клокова', $this->object->splitFullName('Клокова').'-Клокова');
    }
    public function testSplDetect1390()
    {
        $this->assertEquals('S-Князева', $this->object->splitFullName('Князева').'-Князева');
    }
    public function testSplDetect1391()
    {
        $this->assertEquals('S-Ковалёв', $this->object->splitFullName('Ковалёв').'-Ковалёв');
    }
    public function testSplDetect1392()
    {
        $this->assertEquals('S-Ковалевская', $this->object->splitFullName('Ковалевская').'-Ковалевская');
    }
    public function testSplDetect1393()
    {
        $this->assertEquals('S-Коварова', $this->object->splitFullName('Коварова').'-Коварова');
    }
    public function testSplDetect1394()
    {
        $this->assertEquals('S-Ковашутина', $this->object->splitFullName('Ковашутина').'-Ковашутина');
    }
    public function testSplDetect1395()
    {
        $this->assertEquals('S-Кожурова', $this->object->splitFullName('Кожурова').'-Кожурова');
    }
    public function testSplDetect1396()
    {
        $this->assertEquals('S-Кожухова', $this->object->splitFullName('Кожухова').'-Кожухова');
    }
    public function testSplDetect1397()
    {
        $this->assertEquals('S-Козакова', $this->object->splitFullName('Козакова').'-Козакова');
    }
    public function testSplDetect1398()
    {
        $this->assertEquals('S-Козарь', $this->object->splitFullName('Козарь').'-Козарь');
    }
    public function testSplDetect1399()
    {
        $this->assertEquals('S-Козлова', $this->object->splitFullName('Козлова').'-Козлова');
    }
    public function testSplDetect1400()
    {
        $this->assertEquals('S-Козловская', $this->object->splitFullName('Козловская').'-Козловская');
    }
    public function testSplDetect1401()
    {
        $this->assertEquals('S-Колесникова', $this->object->splitFullName('Колесникова').'-Колесникова');
    }
    public function testSplDetect1402()
    {
        $this->assertEquals('S-Колонтаева', $this->object->splitFullName('Колонтаева').'-Колонтаева');
    }
    public function testSplDetect1403()
    {
        $this->assertEquals('S-Колосова', $this->object->splitFullName('Колосова').'-Колосова');
    }
    public function testSplDetect1404()
    {
        $this->assertEquals('S-Кольцова', $this->object->splitFullName('Кольцова').'-Кольцова');
    }
    public function testSplDetect1405()
    {
        $this->assertEquals('S-Комарова', $this->object->splitFullName('Комарова').'-Комарова');
    }
    public function testSplDetect1406()
    {
        $this->assertEquals('S-Комзина', $this->object->splitFullName('Комзина').'-Комзина');
    }
    public function testSplDetect1407()
    {
        $this->assertEquals('S-Комолова', $this->object->splitFullName('Комолова').'-Комолова');
    }
    public function testSplDetect1408()
    {
        $this->assertEquals('S-Кондратьева', $this->object->splitFullName('Кондратьева').'-Кондратьева');
    }
    public function testSplDetect1409()
    {
        $this->assertEquals('S-Конева', $this->object->splitFullName('Конева').'-Конева');
    }
    public function testSplDetect1410()
    {
        $this->assertEquals('S-Конникова', $this->object->splitFullName('Конникова').'-Конникова');
    }
    public function testSplDetect1411()
    {
        $this->assertEquals('S-Коновалова', $this->object->splitFullName('Коновалова').'-Коновалова');
    }
    public function testSplDetect1412()
    {
        $this->assertEquals('S-Коньякова', $this->object->splitFullName('Коньякова').'-Коньякова');
    }
    public function testSplDetect1413()
    {
        $this->assertEquals('S-Коняшева', $this->object->splitFullName('Коняшева').'-Коняшева');
    }
    public function testSplDetect1414()
    {
        $this->assertEquals('S-Копейкина', $this->object->splitFullName('Копейкина').'-Копейкина');
    }
    public function testSplDetect1415()
    {
        $this->assertEquals('S-Коренева', $this->object->splitFullName('Коренева').'-Коренева');
    }
    public function testSplDetect1416()
    {
        $this->assertEquals('S-Коренёва', $this->object->splitFullName('Коренёва').'-Коренёва');
    }
    public function testSplDetect1417()
    {
        $this->assertEquals('S-Коржакова', $this->object->splitFullName('Коржакова').'-Коржакова');
    }
    public function testSplDetect1418()
    {
        $this->assertEquals('S-Коржева', $this->object->splitFullName('Коржева').'-Коржева');
    }
    public function testSplDetect1419()
    {
        $this->assertEquals('S-Корнева', $this->object->splitFullName('Корнева').'-Корнева');
    }
    public function testSplDetect1420()
    {
        $this->assertEquals('S-Корнилова', $this->object->splitFullName('Корнилова').'-Корнилова');
    }
    public function testSplDetect1421()
    {
        $this->assertEquals('S-Коровина', $this->object->splitFullName('Коровина').'-Коровина');
    }
    public function testSplDetect1422()
    {
        $this->assertEquals('S-Королёва', $this->object->splitFullName('Королёва').'-Королёва');
    }
    public function testSplDetect1423()
    {
        $this->assertEquals('S-Коротаева', $this->object->splitFullName('Коротаева').'-Коротаева');
    }
    public function testSplDetect1424()
    {
        $this->assertEquals('S-Корчагина', $this->object->splitFullName('Корчагина').'-Корчагина');
    }
    public function testSplDetect1425()
    {
        $this->assertEquals('S-Косарёва', $this->object->splitFullName('Косарёва').'-Косарёва');
    }
    public function testSplDetect1426()
    {
        $this->assertEquals('S-Коскова', $this->object->splitFullName('Коскова').'-Коскова');
    }
    public function testSplDetect1427()
    {
        $this->assertEquals('S-Косомова', $this->object->splitFullName('Косомова').'-Косомова');
    }
    public function testSplDetect1428()
    {
        $this->assertEquals('S-Косорукова', $this->object->splitFullName('Косорукова').'-Косорукова');
    }
    public function testSplDetect1429()
    {
        $this->assertEquals('S-Костина', $this->object->splitFullName('Костина').'-Костина');
    }
    public function testSplDetect1430()
    {
        $this->assertEquals('S-Косяк', $this->object->splitFullName('Косяк').'-Косяк');
    }
    public function testSplDetect1431()
    {
        $this->assertEquals('S-Котова', $this->object->splitFullName('Котова').'-Котова');
    }
    public function testSplDetect1432()
    {
        $this->assertEquals('S-Костомарова', $this->object->splitFullName('Костомарова').'-Костомарова');
    }
    public function testSplDetect1433()
    {
        $this->assertEquals('S-Коченкова', $this->object->splitFullName('Коченкова').'-Коченкова');
    }
    public function testSplDetect1434()
    {
        $this->assertEquals('S-Кошелева', $this->object->splitFullName('Кошелева').'-Кошелева');
    }
    public function testSplDetect1435()
    {
        $this->assertEquals('S-Кошечкина', $this->object->splitFullName('Кошечкина').'-Кошечкина');
    }
    public function testSplDetect1436()
    {
        $this->assertEquals('S-Кошкина', $this->object->splitFullName('Кошкина').'-Кошкина');
    }
    public function testSplDetect1437()
    {
        $this->assertEquals('S-Кравчук', $this->object->splitFullName('Кравчук').'-Кравчук');
    }
    public function testSplDetect1438()
    {
        $this->assertEquals('S-Краева', $this->object->splitFullName('Краева').'-Краева');
    }
    public function testSplDetect1439()
    {
        $this->assertEquals('S-Краснова', $this->object->splitFullName('Краснова').'-Краснова');
    }
    public function testSplDetect1440()
    {
        $this->assertEquals('S-Красноперова', $this->object->splitFullName('Красноперова').'-Красноперова');
    }
    public function testSplDetect1441()
    {
        $this->assertEquals('S-Кропанина', $this->object->splitFullName('Кропанина').'-Кропанина');
    }
    public function testSplDetect1442()
    {
        $this->assertEquals('S-Кругликова', $this->object->splitFullName('Кругликова').'-Кругликова');
    }
    public function testSplDetect1443()
    {
        $this->assertEquals('S-Круглова', $this->object->splitFullName('Круглова').'-Круглова');
    }
    public function testSplDetect1444()
    {
        $this->assertEquals('S-Крупина', $this->object->splitFullName('Крупина').'-Крупина');
    }
    public function testSplDetect1445()
    {
        $this->assertEquals('S-Крутина', $this->object->splitFullName('Крутина').'-Крутина');
    }
    public function testSplDetect1446()
    {
        $this->assertEquals('S-Кручинакина', $this->object->splitFullName('Кручинакина').'-Кручинакина');
    }
    public function testSplDetect1447()
    {
        $this->assertEquals('S-Крылова', $this->object->splitFullName('Крылова').'-Крылова');
    }
    public function testSplDetect1448()
    {
        $this->assertEquals('S-Крысова', $this->object->splitFullName('Крысова').'-Крысова');
    }
    public function testSplDetect1449()
    {
        $this->assertEquals('S-Крюкова', $this->object->splitFullName('Крюкова').'-Крюкова');
    }
    public function testSplDetect1450()
    {
        $this->assertEquals('S-Кубланова', $this->object->splitFullName('Кубланова').'-Кубланова');
    }
    public function testSplDetect1451()
    {
        $this->assertEquals('S-Кудашова', $this->object->splitFullName('Кудашова').'-Кудашова');
    }
    public function testSplDetect1452()
    {
        $this->assertEquals('S-Кудрина', $this->object->splitFullName('Кудрина').'-Кудрина');
    }
    public function testSplDetect1453()
    {
        $this->assertEquals('S-Кудрявцева', $this->object->splitFullName('Кудрявцева').'-Кудрявцева');
    }
    public function testSplDetect1454()
    {
        $this->assertEquals('S-Кудряшова', $this->object->splitFullName('Кудряшова').'-Кудряшова');
    }
    public function testSplDetect1455()
    {
        $this->assertEquals('S-Кузнецова', $this->object->splitFullName('Кузнецова').'-Кузнецова');
    }
    public function testSplDetect1456()
    {
        $this->assertEquals('S-Кузьмина', $this->object->splitFullName('Кузьмина').'-Кузьмина');
    }
    public function testSplDetect1457()
    {
        $this->assertEquals('S-Куимова', $this->object->splitFullName('Куимова').'-Куимова');
    }
    public function testSplDetect1458()
    {
        $this->assertEquals('S-Куклачёва', $this->object->splitFullName('Куклачёва').'-Куклачёва');
    }
    public function testSplDetect1459()
    {
        $this->assertEquals('S-Кулагина', $this->object->splitFullName('Кулагина').'-Кулагина');
    }
    public function testSplDetect1460()
    {
        $this->assertEquals('S-Кулибина', $this->object->splitFullName('Кулибина').'-Кулибина');
    }
    public function testSplDetect1461()
    {
        $this->assertEquals('S-Куликова', $this->object->splitFullName('Куликова').'-Куликова');
    }
    public function testSplDetect1462()
    {
        $this->assertEquals('S-Куракина', $this->object->splitFullName('Куракина').'-Куракина');
    }
    public function testSplDetect1463()
    {
        $this->assertEquals('S-Курбатова', $this->object->splitFullName('Курбатова').'-Курбатова');
    }
    public function testSplDetect1464()
    {
        $this->assertEquals('S-Курганова', $this->object->splitFullName('Курганова').'-Курганова');
    }
    public function testSplDetect1465()
    {
        $this->assertEquals('S-Курдина', $this->object->splitFullName('Курдина').'-Курдина');
    }
    public function testSplDetect1466()
    {
        $this->assertEquals('S-Курепина', $this->object->splitFullName('Курепина').'-Курепина');
    }
    public function testSplDetect1467()
    {
        $this->assertEquals('S-Курсалина', $this->object->splitFullName('Курсалина').'-Курсалина');
    }
    public function testSplDetect1468()
    {
        $this->assertEquals('S-Кутикова', $this->object->splitFullName('Кутикова').'-Кутикова');
    }
    public function testSplDetect1469()
    {
        $this->assertEquals('S-Кутузова', $this->object->splitFullName('Кутузова').'-Кутузова');
    }
    public function testSplDetect1470()
    {
        $this->assertEquals('S-Кутякова', $this->object->splitFullName('Кутякова').'-Кутякова');
    }
    public function testSplDetect1471()
    {
        $this->assertEquals('S-Лаврова', $this->object->splitFullName('Лаврова').'-Лаврова');
    }
    public function testSplDetect1472()
    {
        $this->assertEquals('S-Лагутова', $this->object->splitFullName('Лагутова').'-Лагутова');
    }
    public function testSplDetect1473()
    {
        $this->assertEquals('S-Лазарева', $this->object->splitFullName('Лазарева').'-Лазарева');
    }
    public function testSplDetect1474()
    {
        $this->assertEquals('S-Ланцова', $this->object->splitFullName('Ланцова').'-Ланцова');
    }
    public function testSplDetect1475()
    {
        $this->assertEquals('S-Лапидус', $this->object->splitFullName('Лапидус').'-Лапидус');
    }
    public function testSplDetect1476()
    {
        $this->assertEquals('S-Лапотникова', $this->object->splitFullName('Лапотникова').'-Лапотникова');
    }
    public function testSplDetect1477()
    {
        $this->assertEquals('S-Лаптева', $this->object->splitFullName('Лаптева').'-Лаптева');
    }
    public function testSplDetect1478()
    {
        $this->assertEquals('S-Лапунова', $this->object->splitFullName('Лапунова').'-Лапунова');
    }
    public function testSplDetect1479()
    {
        $this->assertEquals('S-Лапухова', $this->object->splitFullName('Лапухова').'-Лапухова');
    }
    public function testSplDetect1480()
    {
        $this->assertEquals('S-Ларина', $this->object->splitFullName('Ларина').'-Ларина');
    }
    public function testSplDetect1481()
    {
        $this->assertEquals('S-Ларионова', $this->object->splitFullName('Ларионова').'-Ларионова');
    }
    public function testSplDetect1482()
    {
        $this->assertEquals('S-Ласкутина', $this->object->splitFullName('Ласкутина').'-Ласкутина');
    }
    public function testSplDetect1483()
    {
        $this->assertEquals('S-Лачинова', $this->object->splitFullName('Лачинова').'-Лачинова');
    }
    public function testSplDetect1484()
    {
        $this->assertEquals('S-Лачкова', $this->object->splitFullName('Лачкова').'-Лачкова');
    }
    public function testSplDetect1485()
    {
        $this->assertEquals('S-Лебедева', $this->object->splitFullName('Лебедева').'-Лебедева');
    }
    public function testSplDetect1486()
    {
        $this->assertEquals('S-Лебединаская', $this->object->splitFullName('Лебединаская').'-Лебединаская');
    }
    public function testSplDetect1487()
    {
        $this->assertEquals('S-Лебединацева', $this->object->splitFullName('Лебединацева').'-Лебединацева');
    }
    public function testSplDetect1488()
    {
        $this->assertEquals('S-Легкодимова', $this->object->splitFullName('Легкодимова').'-Легкодимова');
    }
    public function testSplDetect1489()
    {
        $this->assertEquals('S-Леонова', $this->object->splitFullName('Леонова').'-Леонова');
    }
    public function testSplDetect1490()
    {
        $this->assertEquals('S-Лепёхина', $this->object->splitFullName('Лепёхина').'-Лепёхина');
    }
    public function testSplDetect1491()
    {
        $this->assertEquals('S-Лескова', $this->object->splitFullName('Лескова').'-Лескова');
    }
    public function testSplDetect1492()
    {
        $this->assertEquals('S-Лесничая', $this->object->splitFullName('Лесничая').'-Лесничая');
    }
    public function testSplDetect1493()
    {
        $this->assertEquals('S-Летова', $this->object->splitFullName('Летова').'-Летова');
    }
    public function testSplDetect1494()
    {
        $this->assertEquals('S-Лещёва', $this->object->splitFullName('Лещёва').'-Лещёва');
    }
    public function testSplDetect1495()
    {
        $this->assertEquals('S-Лилова', $this->object->splitFullName('Лилова').'-Лилова');
    }
    public function testSplDetect1496()
    {
        $this->assertEquals('S-Липина', $this->object->splitFullName('Липина').'-Липина');
    }
    public function testSplDetect1497()
    {
        $this->assertEquals('S-Лисицына', $this->object->splitFullName('Лисицына').'-Лисицына');
    }
    public function testSplDetect1498()
    {
        $this->assertEquals('S-Лихачёва', $this->object->splitFullName('Лихачёва').'-Лихачёва');
    }
    public function testSplDetect1499()
    {
        $this->assertEquals('S-Лобан', $this->object->splitFullName('Лобан').'-Лобан');
    }
    public function testSplDetect1500()
    {
        $this->assertEquals('S-Лобанова', $this->object->splitFullName('Лобанова').'-Лобанова');
    }
    public function testSplDetect1501()
    {
        $this->assertEquals('S-Лобова', $this->object->splitFullName('Лобова').'-Лобова');
    }
    public function testSplDetect1502()
    {
        $this->assertEquals('S-Логинова', $this->object->splitFullName('Логинова').'-Логинова');
    }
    public function testSplDetect1503()
    {
        $this->assertEquals('S-Логиновская', $this->object->splitFullName('Логиновская').'-Логиновская');
    }
    public function testSplDetect1504()
    {
        $this->assertEquals('S-Локтева', $this->object->splitFullName('Локтева').'-Локтева');
    }
    public function testSplDetect1505()
    {
        $this->assertEquals('S-Ломоносова', $this->object->splitFullName('Ломоносова').'-Ломоносова');
    }
    public function testSplDetect1506()
    {
        $this->assertEquals('S-Ломтева', $this->object->splitFullName('Ломтева').'-Ломтева');
    }
    public function testSplDetect1507()
    {
        $this->assertEquals('S-Лопатина', $this->object->splitFullName('Лопатина').'-Лопатина');
    }
    public function testSplDetect1508()
    {
        $this->assertEquals('S-Лосева', $this->object->splitFullName('Лосева').'-Лосева');
    }
    public function testSplDetect1509()
    {
        $this->assertEquals('S-Лосевская', $this->object->splitFullName('Лосевская').'-Лосевская');
    }
    public function testSplDetect1510()
    {
        $this->assertEquals('S-Лоскутникова', $this->object->splitFullName('Лоскутникова').'-Лоскутникова');
    }
    public function testSplDetect1511()
    {
        $this->assertEquals('S-Лоскутова', $this->object->splitFullName('Лоскутова').'-Лоскутова');
    }
    public function testSplDetect1512()
    {
        $this->assertEquals('S-Лужкова', $this->object->splitFullName('Лужкова').'-Лужкова');
    }
    public function testSplDetect1513()
    {
        $this->assertEquals('S-Лыткина', $this->object->splitFullName('Лыткина').'-Лыткина');
    }
    public function testSplDetect1514()
    {
        $this->assertEquals('S-Любимова', $this->object->splitFullName('Любимова').'-Любимова');
    }
    public function testSplDetect1515()
    {
        $this->assertEquals('S-Любова', $this->object->splitFullName('Любова').'-Любова');
    }
    public function testSplDetect1516()
    {
        $this->assertEquals('S-Лягушкина', $this->object->splitFullName('Лягушкина').'-Лягушкина');
    }
    public function testSplDetect1517()
    {
        $this->assertEquals('S-Лягушова', $this->object->splitFullName('Лягушова').'-Лягушова');
    }
    public function testSplDetect1518()
    {
        $this->assertEquals('S-Лялюшкина', $this->object->splitFullName('Лялюшкина').'-Лялюшкина');
    }
    public function testSplDetect1519()
    {
        $this->assertEquals('S-Лясина', $this->object->splitFullName('Лясина').'-Лясина');
    }
    public function testSplDetect1520()
    {
        $this->assertEquals('S-Ляпина', $this->object->splitFullName('Ляпина').'-Ляпина');
    }
    public function testSplDetect1521()
    {
        $this->assertEquals('S-Майсак', $this->object->splitFullName('Майсак').'-Майсак');
    }
    public function testSplDetect1522()
    {
        $this->assertEquals('S-Макарова', $this->object->splitFullName('Макарова').'-Макарова');
    }
    public function testSplDetect1523()
    {
        $this->assertEquals('S-Маклакова', $this->object->splitFullName('Маклакова').'-Маклакова');
    }
    public function testSplDetect1524()
    {
        $this->assertEquals('S-Максимова', $this->object->splitFullName('Максимова').'-Максимова');
    }
    public function testSplDetect1525()
    {
        $this->assertEquals('S-Максимушкина', $this->object->splitFullName('Максимушкина').'-Максимушкина');
    }
    public function testSplDetect1526()
    {
        $this->assertEquals('S-Максудова', $this->object->splitFullName('Максудова').'-Максудова');
    }
    public function testSplDetect1527()
    {
        $this->assertEquals('S-Малахова', $this->object->splitFullName('Малахова').'-Малахова');
    }
    public function testSplDetect1528()
    {
        $this->assertEquals('S-Маликова', $this->object->splitFullName('Маликова').'-Маликова');
    }
    public function testSplDetect1529()
    {
        $this->assertEquals('S-Малинина', $this->object->splitFullName('Малинина').'-Малинина');
    }
    public function testSplDetect1530()
    {
        $this->assertEquals('S-Малышева', $this->object->splitFullName('Малышева').'-Малышева');
    }
    public function testSplDetect1531()
    {
        $this->assertEquals('S-Малюгина', $this->object->splitFullName('Малюгина').'-Малюгина');
    }
    public function testSplDetect1532()
    {
        $this->assertEquals('S-Малыхина', $this->object->splitFullName('Малыхина').'-Малыхина');
    }
    public function testSplDetect1533()
    {
        $this->assertEquals('S-Мамонова', $this->object->splitFullName('Мамонова').'-Мамонова');
    }
    public function testSplDetect1534()
    {
        $this->assertEquals('S-Манина', $this->object->splitFullName('Манина').'-Манина');
    }
    public function testSplDetect1535()
    {
        $this->assertEquals('S-Маркина', $this->object->splitFullName('Маркина').'-Маркина');
    }
    public function testSplDetect1536()
    {
        $this->assertEquals('S-Маркова', $this->object->splitFullName('Маркова').'-Маркова');
    }
    public function testSplDetect1537()
    {
        $this->assertEquals('S-Маслак', $this->object->splitFullName('Маслак').'-Маслак');
    }
    public function testSplDetect1538()
    {
        $this->assertEquals('S-Маслова', $this->object->splitFullName('Маслова').'-Маслова');
    }
    public function testSplDetect1539()
    {
        $this->assertEquals('S-Матвеева', $this->object->splitFullName('Матвеева').'-Матвеева');
    }
    public function testSplDetect1540()
    {
        $this->assertEquals('S-Машарина', $this->object->splitFullName('Машарина').'-Машарина');
    }
    public function testSplDetect1541()
    {
        $this->assertEquals('S-Машир', $this->object->splitFullName('Машир').'-Машир');
    }
    public function testSplDetect1542()
    {
        $this->assertEquals('S-Медведева', $this->object->splitFullName('Медведева').'-Медведева');
    }
    public function testSplDetect1543()
    {
        $this->assertEquals('S-Медникова', $this->object->splitFullName('Медникова').'-Медникова');
    }
    public function testSplDetect1544()
    {
        $this->assertEquals('S-Меледина', $this->object->splitFullName('Меледина').'-Меледина');
    }
    public function testSplDetect1545()
    {
        $this->assertEquals('S-Мелехова', $this->object->splitFullName('Мелехова').'-Мелехова');
    }
    public function testSplDetect1546()
    {
        $this->assertEquals('S-Меликова', $this->object->splitFullName('Меликова').'-Меликова');
    }
    public function testSplDetect1547()
    {
        $this->assertEquals('S-Мельникова', $this->object->splitFullName('Мельникова').'-Мельникова');
    }
    public function testSplDetect1548()
    {
        $this->assertEquals('S-Меркушева', $this->object->splitFullName('Меркушева').'-Меркушева');
    }
    public function testSplDetect1549()
    {
        $this->assertEquals('S-Мещерякова', $this->object->splitFullName('Мещерякова').'-Мещерякова');
    }
    public function testSplDetect1550()
    {
        $this->assertEquals('S-Мигунова', $this->object->splitFullName('Мигунова').'-Мигунова');
    }
    public function testSplDetect1551()
    {
        $this->assertEquals('S-Мизенова', $this->object->splitFullName('Мизенова').'-Мизенова');
    }
    public function testSplDetect1552()
    {
        $this->assertEquals('S-Милехина', $this->object->splitFullName('Милехина').'-Милехина');
    }
    public function testSplDetect1553()
    {
        $this->assertEquals('S-Милорадова', $this->object->splitFullName('Милорадова').'-Милорадова');
    }
    public function testSplDetect1554()
    {
        $this->assertEquals('S-Милюкова', $this->object->splitFullName('Милюкова').'-Милюкова');
    }
    public function testSplDetect1555()
    {
        $this->assertEquals('S-Милютина', $this->object->splitFullName('Милютина').'-Милютина');
    }
    public function testSplDetect1556()
    {
        $this->assertEquals('S-Минаеева', $this->object->splitFullName('Минаеева').'-Минаеева');
    }
    public function testSplDetect1557()
    {
        $this->assertEquals('S-Минаина', $this->object->splitFullName('Минаина').'-Минаина');
    }
    public function testSplDetect1558()
    {
        $this->assertEquals('S-Минакина', $this->object->splitFullName('Минакина').'-Минакина');
    }
    public function testSplDetect1559()
    {
        $this->assertEquals('S-Миронова', $this->object->splitFullName('Миронова').'-Миронова');
    }
    public function testSplDetect1560()
    {
        $this->assertEquals('S-Митина', $this->object->splitFullName('Митина').'-Митина');
    }
    public function testSplDetect1561()
    {
        $this->assertEquals('S-Митрофанова', $this->object->splitFullName('Митрофанова').'-Митрофанова');
    }
    public function testSplDetect1562()
    {
        $this->assertEquals('S-Михайлова', $this->object->splitFullName('Михайлова').'-Михайлова');
    }
    public function testSplDetect1563()
    {
        $this->assertEquals('S-Михеева', $this->object->splitFullName('Михеева').'-Михеева');
    }
    public function testSplDetect1564()
    {
        $this->assertEquals('S-Мишутина', $this->object->splitFullName('Мишутина').'-Мишутина');
    }
    public function testSplDetect1565()
    {
        $this->assertEquals('S-Моисеева', $this->object->splitFullName('Моисеева').'-Моисеева');
    }
    public function testSplDetect1566()
    {
        $this->assertEquals('S-Молчанова', $this->object->splitFullName('Молчанова').'-Молчанова');
    }
    public function testSplDetect1567()
    {
        $this->assertEquals('S-Моренова', $this->object->splitFullName('Моренова').'-Моренова');
    }
    public function testSplDetect1568()
    {
        $this->assertEquals('S-Морозова', $this->object->splitFullName('Морозова').'-Морозова');
    }
    public function testSplDetect1569()
    {
        $this->assertEquals('S-Мосалева', $this->object->splitFullName('Мосалева').'-Мосалева');
    }
    public function testSplDetect1570()
    {
        $this->assertEquals('S-Москвина', $this->object->splitFullName('Москвина').'-Москвина');
    }
    public function testSplDetect1571()
    {
        $this->assertEquals('S-Муратова', $this->object->splitFullName('Муратова').'-Муратова');
    }
    public function testSplDetect1572()
    {
        $this->assertEquals('S-Мухортова', $this->object->splitFullName('Мухортова').'-Мухортова');
    }
    public function testSplDetect1573()
    {
        $this->assertEquals('S-Мягкова', $this->object->splitFullName('Мягкова').'-Мягкова');
    }
    public function testSplDetect1574()
    {
        $this->assertEquals('S-Мясникова', $this->object->splitFullName('Мясникова').'-Мясникова');
    }
    public function testSplDetect1575()
    {
        $this->assertEquals('S-Мятлева', $this->object->splitFullName('Мятлева').'-Мятлева');
    }
    public function testSplDetect1576()
    {
        $this->assertEquals('S-Набатова', $this->object->splitFullName('Набатова').'-Набатова');
    }
    public function testSplDetect1577()
    {
        $this->assertEquals('S-Нардина', $this->object->splitFullName('Нардина').'-Нардина');
    }
    public function testSplDetect1578()
    {
        $this->assertEquals('S-Наумова', $this->object->splitFullName('Наумова').'-Наумова');
    }
    public function testSplDetect1579()
    {
        $this->assertEquals('S-Невзорова', $this->object->splitFullName('Невзорова').'-Невзорова');
    }
    public function testSplDetect1580()
    {
        $this->assertEquals('S-Неделяева', $this->object->splitFullName('Неделяева').'-Неделяева');
    }
    public function testSplDetect1581()
    {
        $this->assertEquals('S-Нежданова', $this->object->splitFullName('Нежданова').'-Нежданова');
    }
    public function testSplDetect1582()
    {
        $this->assertEquals('S-Ненашева', $this->object->splitFullName('Ненашева').'-Ненашева');
    }
    public function testSplDetect1583()
    {
        $this->assertEquals('S-Нестерова', $this->object->splitFullName('Нестерова').'-Нестерова');
    }
    public function testSplDetect1584()
    {
        $this->assertEquals('S-Нечаева', $this->object->splitFullName('Нечаева').'-Нечаева');
    }
    public function testSplDetect1585()
    {
        $this->assertEquals('S-Никитина', $this->object->splitFullName('Никитина').'-Никитина');
    }
    public function testSplDetect1586()
    {
        $this->assertEquals('S-Никифорова', $this->object->splitFullName('Никифорова').'-Никифорова');
    }
    public function testSplDetect1587()
    {
        $this->assertEquals('S-Николаева', $this->object->splitFullName('Николаева').'-Николаева');
    }
    public function testSplDetect1588()
    {
        $this->assertEquals('S-Никонова', $this->object->splitFullName('Никонова').'-Никонова');
    }
    public function testSplDetect1589()
    {
        $this->assertEquals('S-Никулина', $this->object->splitFullName('Никулина').'-Никулина');
    }
    public function testSplDetect1590()
    {
        $this->assertEquals('S-Некрасова', $this->object->splitFullName('Некрасова').'-Некрасова');
    }
    public function testSplDetect1591()
    {
        $this->assertEquals('S-Новикова', $this->object->splitFullName('Новикова').'-Новикова');
    }
    public function testSplDetect1592()
    {
        $this->assertEquals('S-Новосельцева', $this->object->splitFullName('Новосельцева').'-Новосельцева');
    }
    public function testSplDetect1593()
    {
        $this->assertEquals('S-Носачёва', $this->object->splitFullName('Носачёва').'-Носачёва');
    }
    public function testSplDetect1594()
    {
        $this->assertEquals('S-Носкова', $this->object->splitFullName('Носкова').'-Носкова');
    }
    public function testSplDetect1595()
    {
        $this->assertEquals('S-Носова', $this->object->splitFullName('Носова').'-Носова');
    }
    public function testSplDetect1596()
    {
        $this->assertEquals('S-Оболенская', $this->object->splitFullName('Оболенская').'-Оболенская');
    }
    public function testSplDetect1597()
    {
        $this->assertEquals('S-Оборина', $this->object->splitFullName('Оборина').'-Оборина');
    }
    public function testSplDetect1598()
    {
        $this->assertEquals('S-Образцова', $this->object->splitFullName('Образцова').'-Образцова');
    }
    public function testSplDetect1599()
    {
        $this->assertEquals('S-Обухова', $this->object->splitFullName('Обухова').'-Обухова');
    }
    public function testSplDetect1600()
    {
        $this->assertEquals('S-Овечкина', $this->object->splitFullName('Овечкина').'-Овечкина');
    }
    public function testSplDetect1601()
    {
        $this->assertEquals('S-Огородникова', $this->object->splitFullName('Огородникова').'-Огородникова');
    }
    public function testSplDetect1602()
    {
        $this->assertEquals('S-Огурцова', $this->object->splitFullName('Огурцова').'-Огурцова');
    }
    public function testSplDetect1603()
    {
        $this->assertEquals('S-Озерова', $this->object->splitFullName('Озерова').'-Озерова');
    }
    public function testSplDetect1604()
    {
        $this->assertEquals('S-Ольховская', $this->object->splitFullName('Ольховская').'-Ольховская');
    }
    public function testSplDetect1605()
    {
        $this->assertEquals('S-Онегина', $this->object->splitFullName('Онегина').'-Онегина');
    }
    public function testSplDetect1606()
    {
        $this->assertEquals('S-Опокина', $this->object->splitFullName('Опокина').'-Опокина');
    }
    public function testSplDetect1607()
    {
        $this->assertEquals('S-Орлова', $this->object->splitFullName('Орлова').'-Орлова');
    }
    public function testSplDetect1608()
    {
        $this->assertEquals('S-Осинцева', $this->object->splitFullName('Осинцева').'-Осинцева');
    }
    public function testSplDetect1609()
    {
        $this->assertEquals('S-Остальцева', $this->object->splitFullName('Остальцева').'-Остальцева');
    }
    public function testSplDetect1610()
    {
        $this->assertEquals('S-Остапюк', $this->object->splitFullName('Остапюк').'-Остапюк');
    }
    public function testSplDetect1611()
    {
        $this->assertEquals('S-Островерхова', $this->object->splitFullName('Островерхова').'-Островерхова');
    }
    public function testSplDetect1612()
    {
        $this->assertEquals('S-Островская', $this->object->splitFullName('Островская').'-Островская');
    }
    public function testSplDetect1613()
    {
        $this->assertEquals('S-Павлова', $this->object->splitFullName('Павлова').'-Павлова');
    }
    public function testSplDetect1614()
    {
        $this->assertEquals('S-Панарина', $this->object->splitFullName('Панарина').'-Панарина');
    }
    public function testSplDetect1615()
    {
        $this->assertEquals('S-Панина', $this->object->splitFullName('Панина').'-Панина');
    }
    public function testSplDetect1616()
    {
        $this->assertEquals('S-Панкина', $this->object->splitFullName('Панкина').'-Панкина');
    }
    public function testSplDetect1617()
    {
        $this->assertEquals('S-Панкова', $this->object->splitFullName('Панкова').'-Панкова');
    }
    public function testSplDetect1618()
    {
        $this->assertEquals('S-Панфилова', $this->object->splitFullName('Панфилова').'-Панфилова');
    }
    public function testSplDetect1619()
    {
        $this->assertEquals('S-Панькив', $this->object->splitFullName('Панькив').'-Панькив');
    }
    public function testSplDetect1620()
    {
        $this->assertEquals('S-Папанова', $this->object->splitFullName('Папанова').'-Папанова');
    }
    public function testSplDetect1621()
    {
        $this->assertEquals('S-Пахомова', $this->object->splitFullName('Пахомова').'-Пахомова');
    }
    public function testSplDetect1622()
    {
        $this->assertEquals('S-Пенкина', $this->object->splitFullName('Пенкина').'-Пенкина');
    }
    public function testSplDetect1623()
    {
        $this->assertEquals('S-Первак', $this->object->splitFullName('Первак').'-Первак');
    }
    public function testSplDetect1624()
    {
        $this->assertEquals('S-Переверзева', $this->object->splitFullName('Переверзева').'-Переверзева');
    }
    public function testSplDetect1625()
    {
        $this->assertEquals('S-Перевёртова', $this->object->splitFullName('Перевёртова').'-Перевёртова');
    }
    public function testSplDetect1626()
    {
        $this->assertEquals('S-Пересторонина', $this->object->splitFullName('Пересторонина').'-Пересторонина');
    }
    public function testSplDetect1627()
    {
        $this->assertEquals('S-Перехваткина', $this->object->splitFullName('Перехваткина').'-Перехваткина');
    }
    public function testSplDetect1628()
    {
        $this->assertEquals('S-Перова', $this->object->splitFullName('Перова').'-Перова');
    }
    public function testSplDetect1629()
    {
        $this->assertEquals('S-Перьмякова', $this->object->splitFullName('Перьмякова').'-Перьмякова');
    }
    public function testSplDetect1630()
    {
        $this->assertEquals('S-Пестова', $this->object->splitFullName('Пестова').'-Пестова');
    }
    public function testSplDetect1631()
    {
        $this->assertEquals('S-Петрова', $this->object->splitFullName('Петрова').'-Петрова');
    }
    public function testSplDetect1632()
    {
        $this->assertEquals('S-Петухова', $this->object->splitFullName('Петухова').'-Петухова');
    }
    public function testSplDetect1633()
    {
        $this->assertEquals('S-Печеникова', $this->object->splitFullName('Печеникова').'-Печеникова');
    }
    public function testSplDetect1634()
    {
        $this->assertEquals('S-Пивоварова', $this->object->splitFullName('Пивоварова').'-Пивоварова');
    }
    public function testSplDetect1635()
    {
        $this->assertEquals('S-Пирогова', $this->object->splitFullName('Пирогова').'-Пирогова');
    }
    public function testSplDetect1636()
    {
        $this->assertEquals('S-Пирожкова', $this->object->splitFullName('Пирожкова').'-Пирожкова');
    }
    public function testSplDetect1637()
    {
        $this->assertEquals('S-Пичугина', $this->object->splitFullName('Пичугина').'-Пичугина');
    }
    public function testSplDetect1638()
    {
        $this->assertEquals('S-Погодина', $this->object->splitFullName('Погодина').'-Погодина');
    }
    public function testSplDetect1639()
    {
        $this->assertEquals('S-Погребнова', $this->object->splitFullName('Погребнова').'-Погребнова');
    }
    public function testSplDetect1640()
    {
        $this->assertEquals('S-Подшивалова', $this->object->splitFullName('Подшивалова').'-Подшивалова');
    }
    public function testSplDetect1641()
    {
        $this->assertEquals('S-Позднякова', $this->object->splitFullName('Позднякова').'-Позднякова');
    }
    public function testSplDetect1642()
    {
        $this->assertEquals('S-Покровская', $this->object->splitFullName('Покровская').'-Покровская');
    }
    public function testSplDetect1643()
    {
        $this->assertEquals('S-Поливанова', $this->object->splitFullName('Поливанова').'-Поливанова');
    }
    public function testSplDetect1644()
    {
        $this->assertEquals('S-Полушина', $this->object->splitFullName('Полушина').'-Полушина');
    }
    public function testSplDetect1645()
    {
        $this->assertEquals('S-Полищук', $this->object->splitFullName('Полищук').'-Полищук');
    }
    public function testSplDetect1646()
    {
        $this->assertEquals('S-Полторак', $this->object->splitFullName('Полторак').'-Полторак');
    }
    public function testSplDetect1647()
    {
        $this->assertEquals('S-Полякова', $this->object->splitFullName('Полякова').'-Полякова');
    }
    public function testSplDetect1648()
    {
        $this->assertEquals('S-Поникарова', $this->object->splitFullName('Поникарова').'-Поникарова');
    }
    public function testSplDetect1649()
    {
        $this->assertEquals('S-Пономарёва', $this->object->splitFullName('Пономарёва').'-Пономарёва');
    }
    public function testSplDetect1650()
    {
        $this->assertEquals('S-Пончикова', $this->object->splitFullName('Пончикова').'-Пончикова');
    }
    public function testSplDetect1651()
    {
        $this->assertEquals('S-Попова', $this->object->splitFullName('Попова').'-Попова');
    }
    public function testSplDetect1652()
    {
        $this->assertEquals('S-Попырина', $this->object->splitFullName('Попырина').'-Попырина');
    }
    public function testSplDetect1653()
    {
        $this->assertEquals('S-Посохова', $this->object->splitFullName('Посохова').'-Посохова');
    }
    public function testSplDetect1654()
    {
        $this->assertEquals('S-Потапова', $this->object->splitFullName('Потапова').'-Потапова');
    }
    public function testSplDetect1655()
    {
        $this->assertEquals('S-Потёмкина', $this->object->splitFullName('Потёмкина').'-Потёмкина');
    }
    public function testSplDetect1656()
    {
        $this->assertEquals('S-Праздникова', $this->object->splitFullName('Праздникова').'-Праздникова');
    }
    public function testSplDetect1657()
    {
        $this->assertEquals('S-Примакова', $this->object->splitFullName('Примакова').'-Примакова');
    }
    public function testSplDetect1658()
    {
        $this->assertEquals('S-Приходько', $this->object->splitFullName('Приходько').'-Приходько');
    }
    public function testSplDetect1659()
    {
        $this->assertEquals('S-Проничева', $this->object->splitFullName('Проничева').'-Проничева');
    }
    public function testSplDetect1660()
    {
        $this->assertEquals('S-Протасова', $this->object->splitFullName('Протасова').'-Протасова');
    }
    public function testSplDetect1661()
    {
        $this->assertEquals('S-Прохорова', $this->object->splitFullName('Прохорова').'-Прохорова');
    }
    public function testSplDetect1662()
    {
        $this->assertEquals('S-Пугачёв', $this->object->splitFullName('Пугачёв').'-Пугачёв');
    }
    public function testSplDetect1663()
    {
        $this->assertEquals('S-Пугина', $this->object->splitFullName('Пугина').'-Пугина');
    }
    public function testSplDetect1664()
    {
        $this->assertEquals('S-Пузанова', $this->object->splitFullName('Пузанова').'-Пузанова');
    }
    public function testSplDetect1665()
    {
        $this->assertEquals('S-Путилина', $this->object->splitFullName('Путилина').'-Путилина');
    }
    public function testSplDetect1666()
    {
        $this->assertEquals('S-Путина', $this->object->splitFullName('Путина').'-Путина');
    }
    public function testSplDetect1667()
    {
        $this->assertEquals('S-Путятина', $this->object->splitFullName('Путятина').'-Путятина');
    }
    public function testSplDetect1668()
    {
        $this->assertEquals('S-Пушкина', $this->object->splitFullName('Пушкина').'-Пушкина');
    }
    public function testSplDetect1669()
    {
        $this->assertEquals('S-Пыжалова', $this->object->splitFullName('Пыжалова').'-Пыжалова');
    }
    public function testSplDetect1670()
    {
        $this->assertEquals('S-Пырьева', $this->object->splitFullName('Пырьева').'-Пырьева');
    }
    public function testSplDetect1671()
    {
        $this->assertEquals('S-Рабинович', $this->object->splitFullName('Рабинович').'-Рабинович');
    }
    public function testSplDetect1672()
    {
        $this->assertEquals('S-Разина', $this->object->splitFullName('Разина').'-Разина');
    }
    public function testSplDetect1673()
    {
        $this->assertEquals('S-Разуваева', $this->object->splitFullName('Разуваева').'-Разуваева');
    }
    public function testSplDetect1674()
    {
        $this->assertEquals('S-Распопова', $this->object->splitFullName('Распопова').'-Распопова');
    }
    public function testSplDetect1675()
    {
        $this->assertEquals('S-Распутина', $this->object->splitFullName('Распутина').'-Распутина');
    }
    public function testSplDetect1676()
    {
        $this->assertEquals('S-Расторгуева', $this->object->splitFullName('Расторгуева').'-Расторгуева');
    }
    public function testSplDetect1677()
    {
        $this->assertEquals('S-Ремизова', $this->object->splitFullName('Ремизова').'-Ремизова');
    }
    public function testSplDetect1678()
    {
        $this->assertEquals('S-Репина', $this->object->splitFullName('Репина').'-Репина');
    }
    public function testSplDetect1679()
    {
        $this->assertEquals('S-Решетилова', $this->object->splitFullName('Решетилова').'-Решетилова');
    }
    public function testSplDetect1680()
    {
        $this->assertEquals('S-Решетникова', $this->object->splitFullName('Решетникова').'-Решетникова');
    }
    public function testSplDetect1681()
    {
        $this->assertEquals('S-Родзянко', $this->object->splitFullName('Родзянко').'-Родзянко');
    }
    public function testSplDetect1682()
    {
        $this->assertEquals('S-Рогачёва', $this->object->splitFullName('Рогачёва').'-Рогачёва');
    }
    public function testSplDetect1683()
    {
        $this->assertEquals('S-Рогова', $this->object->splitFullName('Рогова').'-Рогова');
    }
    public function testSplDetect1684()
    {
        $this->assertEquals('S-Рогозина', $this->object->splitFullName('Рогозина').'-Рогозина');
    }
    public function testSplDetect1685()
    {
        $this->assertEquals('S-Рожкова', $this->object->splitFullName('Рожкова').'-Рожкова');
    }
    public function testSplDetect1686()
    {
        $this->assertEquals('S-Рокоссовская', $this->object->splitFullName('Рокоссовская').'-Рокоссовская');
    }
    public function testSplDetect1687()
    {
        $this->assertEquals('S-Романова', $this->object->splitFullName('Романова').'-Романова');
    }
    public function testSplDetect1688()
    {
        $this->assertEquals('S-Ростова', $this->object->splitFullName('Ростова').'-Ростова');
    }
    public function testSplDetect1689()
    {
        $this->assertEquals('S-Ростовцева', $this->object->splitFullName('Ростовцева').'-Ростовцева');
    }
    public function testSplDetect1690()
    {
        $this->assertEquals('S-Рудавина', $this->object->splitFullName('Рудавина').'-Рудавина');
    }
    public function testSplDetect1691()
    {
        $this->assertEquals('S-Румянцева', $this->object->splitFullName('Румянцева').'-Румянцева');
    }
    public function testSplDetect1692()
    {
        $this->assertEquals('S-Рунова', $this->object->splitFullName('Рунова').'-Рунова');
    }
    public function testSplDetect1693()
    {
        $this->assertEquals('S-Русакова', $this->object->splitFullName('Русакова').'-Русакова');
    }
    public function testSplDetect1694()
    {
        $this->assertEquals('S-Русских', $this->object->splitFullName('Русских').'-Русских');
    }
    public function testSplDetect1695()
    {
        $this->assertEquals('S-Ручкина', $this->object->splitFullName('Ручкина').'-Ручкина');
    }
    public function testSplDetect1696()
    {
        $this->assertEquals('S-Рыбалкина', $this->object->splitFullName('Рыбалкина').'-Рыбалкина');
    }
    public function testSplDetect1697()
    {
        $this->assertEquals('S-Рыжанова', $this->object->splitFullName('Рыжанова').'-Рыжанова');
    }
    public function testSplDetect1698()
    {
        $this->assertEquals('S-Рыжкова', $this->object->splitFullName('Рыжкова').'-Рыжкова');
    }
    public function testSplDetect1699()
    {
        $this->assertEquals('S-Рыжова', $this->object->splitFullName('Рыжова').'-Рыжова');
    }
    public function testSplDetect1700()
    {
        $this->assertEquals('S-Рытина', $this->object->splitFullName('Рытина').'-Рытина');
    }
    public function testSplDetect1701()
    {
        $this->assertEquals('S-Рыченкова', $this->object->splitFullName('Рыченкова').'-Рыченкова');
    }
    public function testSplDetect1702()
    {
        $this->assertEquals('S-Рябкова', $this->object->splitFullName('Рябкова').'-Рябкова');
    }
    public function testSplDetect1703()
    {
        $this->assertEquals('S-Рябова', $this->object->splitFullName('Рябова').'-Рябова');
    }
    public function testSplDetect1704()
    {
        $this->assertEquals('S-Ряхина', $this->object->splitFullName('Ряхина').'-Ряхина');
    }
    public function testSplDetect1705()
    {
        $this->assertEquals('S-Сабитова', $this->object->splitFullName('Сабитова').'-Сабитова');
    }
    public function testSplDetect1706()
    {
        $this->assertEquals('S-Савасина', $this->object->splitFullName('Савасина').'-Савасина');
    }
    public function testSplDetect1707()
    {
        $this->assertEquals('S-Савинкова', $this->object->splitFullName('Савинкова').'-Савинкова');
    }
    public function testSplDetect1708()
    {
        $this->assertEquals('S-Савенкова', $this->object->splitFullName('Савенкова').'-Савенкова');
    }
    public function testSplDetect1709()
    {
        $this->assertEquals('S-Саврасова', $this->object->splitFullName('Саврасова').'-Саврасова');
    }
    public function testSplDetect1710()
    {
        $this->assertEquals('S-Садыкова', $this->object->splitFullName('Садыкова').'-Садыкова');
    }
    public function testSplDetect1711()
    {
        $this->assertEquals('S-Сазонова', $this->object->splitFullName('Сазонова').'-Сазонова');
    }
    public function testSplDetect1712()
    {
        $this->assertEquals('S-Салко', $this->object->splitFullName('Салко').'-Салко');
    }
    public function testSplDetect1713()
    {
        $this->assertEquals('S-Салькова', $this->object->splitFullName('Салькова').'-Салькова');
    }
    public function testSplDetect1714()
    {
        $this->assertEquals('S-Сальникова', $this->object->splitFullName('Сальникова').'-Сальникова');
    }
    public function testSplDetect1715()
    {
        $this->assertEquals('S-Самойлова', $this->object->splitFullName('Самойлова').'-Самойлова');
    }
    public function testSplDetect1716()
    {
        $this->assertEquals('S-Самохина', $this->object->splitFullName('Самохина').'-Самохина');
    }
    public function testSplDetect1717()
    {
        $this->assertEquals('S-Самсонова', $this->object->splitFullName('Самсонова').'-Самсонова');
    }
    public function testSplDetect1718()
    {
        $this->assertEquals('S-Санникова', $this->object->splitFullName('Санникова').'-Санникова');
    }
    public function testSplDetect1719()
    {
        $this->assertEquals('S-Сапогова', $this->object->splitFullName('Сапогова').'-Сапогова');
    }
    public function testSplDetect1720()
    {
        $this->assertEquals('S-Сапожникова', $this->object->splitFullName('Сапожникова').'-Сапожникова');
    }
    public function testSplDetect1721()
    {
        $this->assertEquals('S-Сафиюлина', $this->object->splitFullName('Сафиюлина').'-Сафиюлина');
    }
    public function testSplDetect1722()
    {
        $this->assertEquals('S-Сахарова', $this->object->splitFullName('Сахарова').'-Сахарова');
    }
    public function testSplDetect1723()
    {
        $this->assertEquals('S-Свалова', $this->object->splitFullName('Свалова').'-Свалова');
    }
    public function testSplDetect1724()
    {
        $this->assertEquals('S-Северинова', $this->object->splitFullName('Северинова').'-Северинова');
    }
    public function testSplDetect1725()
    {
        $this->assertEquals('S-Севастьянова', $this->object->splitFullName('Севастьянова').'-Севастьянова');
    }
    public function testSplDetect1726()
    {
        $this->assertEquals('S-Седельникова', $this->object->splitFullName('Седельникова').'-Седельникова');
    }
    public function testSplDetect1727()
    {
        $this->assertEquals('S-Седова', $this->object->splitFullName('Седова').'-Седова');
    }
    public function testSplDetect1728()
    {
        $this->assertEquals('S-Селезнёва', $this->object->splitFullName('Селезнёва').'-Селезнёва');
    }
    public function testSplDetect1729()
    {
        $this->assertEquals('S-Селиванова', $this->object->splitFullName('Селиванова').'-Селиванова');
    }
    public function testSplDetect1730()
    {
        $this->assertEquals('S-Семёнова', $this->object->splitFullName('Семёнова').'-Семёнова');
    }
    public function testSplDetect1731()
    {
        $this->assertEquals('S-Семичевская', $this->object->splitFullName('Семичевская').'-Семичевская');
    }
    public function testSplDetect1732()
    {
        $this->assertEquals('S-Сенькина', $this->object->splitFullName('Сенькина').'-Сенькина');
    }
    public function testSplDetect1733()
    {
        $this->assertEquals('S-Сереброва', $this->object->splitFullName('Сереброва').'-Сереброва');
    }
    public function testSplDetect1734()
    {
        $this->assertEquals('S-Серебрякова', $this->object->splitFullName('Серебрякова').'-Серебрякова');
    }
    public function testSplDetect1735()
    {
        $this->assertEquals('S-Серёгина', $this->object->splitFullName('Серёгина').'-Серёгина');
    }
    public function testSplDetect1736()
    {
        $this->assertEquals('S-Серова', $this->object->splitFullName('Серова').'-Серова');
    }
    public function testSplDetect1737()
    {
        $this->assertEquals('S-Серпинова', $this->object->splitFullName('Серпинова').'-Серпинова');
    }
    public function testSplDetect1738()
    {
        $this->assertEquals('S-Семянина', $this->object->splitFullName('Семянина').'-Семянина');
    }
    public function testSplDetect1739()
    {
        $this->assertEquals('S-Сёмина', $this->object->splitFullName('Сёмина').'-Сёмина');
    }
    public function testSplDetect1740()
    {
        $this->assertEquals('S-Серёгина', $this->object->splitFullName('Серёгина').'-Серёгина');
    }
    public function testSplDetect1741()
    {
        $this->assertEquals('S-Сеченова', $this->object->splitFullName('Сеченова').'-Сеченова');
    }
    public function testSplDetect1742()
    {
        $this->assertEquals('S-Сивакова', $this->object->splitFullName('Сивакова').'-Сивакова');
    }
    public function testSplDetect1743()
    {
        $this->assertEquals('S-Сигаева', $this->object->splitFullName('Сигаева').'-Сигаева');
    }
    public function testSplDetect1744()
    {
        $this->assertEquals('S-Сигачёва', $this->object->splitFullName('Сигачёва').'-Сигачёва');
    }
    public function testSplDetect1745()
    {
        $this->assertEquals('S-Сидорова', $this->object->splitFullName('Сидорова').'-Сидорова');
    }
    public function testSplDetect1746()
    {
        $this->assertEquals('S-Сизова', $this->object->splitFullName('Сизова').'-Сизова');
    }
    public function testSplDetect1747()
    {
        $this->assertEquals('S-Сизая', $this->object->splitFullName('Сизая').'-Сизая');
    }
    public function testSplDetect1748()
    {
        $this->assertEquals('S-Силиванова', $this->object->splitFullName('Силиванова').'-Силиванова');
    }
    public function testSplDetect1749()
    {
        $this->assertEquals('S-Силина', $this->object->splitFullName('Силина').'-Силина');
    }
    public function testSplDetect1750()
    {
        $this->assertEquals('S-Сильвестрова', $this->object->splitFullName('Сильвестрова').'-Сильвестрова');
    }
    public function testSplDetect1751()
    {
        $this->assertEquals('S-Силивёстрова', $this->object->splitFullName('Силивёстрова').'-Силивёстрова');
    }
    public function testSplDetect1752()
    {
        $this->assertEquals('S-Силаева', $this->object->splitFullName('Силаева').'-Силаева');
    }
    public function testSplDetect1753()
    {
        $this->assertEquals('S-Силиванова', $this->object->splitFullName('Силиванова').'-Силиванова');
    }
    public function testSplDetect1754()
    {
        $this->assertEquals('S-Скворцова', $this->object->splitFullName('Скворцова').'-Скворцова');
    }
    public function testSplDetect1755()
    {
        $this->assertEquals('S-Скрябина', $this->object->splitFullName('Скрябина').'-Скрябина');
    }
    public function testSplDetect1756()
    {
        $this->assertEquals('S-Скоробогатова', $this->object->splitFullName('Скоробогатова').'-Скоробогатова');
    }
    public function testSplDetect1757()
    {
        $this->assertEquals('S-Скороходова', $this->object->splitFullName('Скороходова').'-Скороходова');
    }
    public function testSplDetect1758()
    {
        $this->assertEquals('S-Скуратова', $this->object->splitFullName('Скуратова').'-Скуратова');
    }
    public function testSplDetect1759()
    {
        $this->assertEquals('S-Слобожанина', $this->object->splitFullName('Слобожанина').'-Слобожанина');
    }
    public function testSplDetect1760()
    {
        $this->assertEquals('S-Случевская', $this->object->splitFullName('Случевская').'-Случевская');
    }
    public function testSplDetect1761()
    {
        $this->assertEquals('S-Смирнитская', $this->object->splitFullName('Смирнитская').'-Смирнитская');
    }
    public function testSplDetect1762()
    {
        $this->assertEquals('S-Смирнова', $this->object->splitFullName('Смирнова').'-Смирнова');
    }
    public function testSplDetect1763()
    {
        $this->assertEquals('S-Сметанина', $this->object->splitFullName('Сметанина').'-Сметанина');
    }
    public function testSplDetect1764()
    {
        $this->assertEquals('S-Смолина', $this->object->splitFullName('Смолина').'-Смолина');
    }
    public function testSplDetect1765()
    {
        $this->assertEquals('S-Смолянова', $this->object->splitFullName('Смолянова').'-Смолянова');
    }
    public function testSplDetect1766()
    {
        $this->assertEquals('S-Снаткина', $this->object->splitFullName('Снаткина').'-Снаткина');
    }
    public function testSplDetect1767()
    {
        $this->assertEquals('S-Снегирёва', $this->object->splitFullName('Снегирёва').'-Снегирёва');
    }
    public function testSplDetect1768()
    {
        $this->assertEquals('S-Снеткова', $this->object->splitFullName('Снеткова').'-Снеткова');
    }
    public function testSplDetect1769()
    {
        $this->assertEquals('S-Соболева', $this->object->splitFullName('Соболева').'-Соболева');
    }
    public function testSplDetect1770()
    {
        $this->assertEquals('S-Соболевская', $this->object->splitFullName('Соболевская').'-Соболевская');
    }
    public function testSplDetect1771()
    {
        $this->assertEquals('S-Соколова', $this->object->splitFullName('Соколова').'-Соколова');
    }
    public function testSplDetect1772()
    {
        $this->assertEquals('S-Солдатова', $this->object->splitFullName('Солдатова').'-Солдатова');
    }
    public function testSplDetect1773()
    {
        $this->assertEquals('S-Соловьёва', $this->object->splitFullName('Соловьёва').'-Соловьёва');
    }
    public function testSplDetect1774()
    {
        $this->assertEquals('S-Солодникова', $this->object->splitFullName('Солодникова').'-Солодникова');
    }
    public function testSplDetect1775()
    {
        $this->assertEquals('S-Соломина', $this->object->splitFullName('Соломина').'-Соломина');
    }
    public function testSplDetect1776()
    {
        $this->assertEquals('S-Соломонова', $this->object->splitFullName('Соломонова').'-Соломонова');
    }
    public function testSplDetect1777()
    {
        $this->assertEquals('S-Сопова', $this->object->splitFullName('Сопова').'-Сопова');
    }
    public function testSplDetect1778()
    {
        $this->assertEquals('S-Сорокина', $this->object->splitFullName('Сорокина').'-Сорокина');
    }
    public function testSplDetect1779()
    {
        $this->assertEquals('S-Спанова', $this->object->splitFullName('Спанова').'-Спанова');
    }
    public function testSplDetect1780()
    {
        $this->assertEquals('S-Старикова', $this->object->splitFullName('Старикова').'-Старикова');
    }
    public function testSplDetect1781()
    {
        $this->assertEquals('S-Староверова', $this->object->splitFullName('Староверова').'-Староверова');
    }
    public function testSplDetect1782()
    {
        $this->assertEquals('S-Стеблева', $this->object->splitFullName('Стеблева').'-Стеблева');
    }
    public function testSplDetect1783()
    {
        $this->assertEquals('S-Стегнова', $this->object->splitFullName('Стегнова').'-Стегнова');
    }
    public function testSplDetect1784()
    {
        $this->assertEquals('S-Степанова', $this->object->splitFullName('Степанова').'-Степанова');
    }
    public function testSplDetect1785()
    {
        $this->assertEquals('S-Степанкова', $this->object->splitFullName('Степанкова').'-Степанкова');
    }
    public function testSplDetect1786()
    {
        $this->assertEquals('S-Степашина', $this->object->splitFullName('Степашина').'-Степашина');
    }
    public function testSplDetect1787()
    {
        $this->assertEquals('S-Стрелкова', $this->object->splitFullName('Стрелкова').'-Стрелкова');
    }
    public function testSplDetect1788()
    {
        $this->assertEquals('S-Стрекалова', $this->object->splitFullName('Стрекалова').'-Стрекалова');
    }
    public function testSplDetect1789()
    {
        $this->assertEquals('S-Строганова', $this->object->splitFullName('Строганова').'-Строганова');
    }
    public function testSplDetect1790()
    {
        $this->assertEquals('S-Субботина', $this->object->splitFullName('Субботина').'-Субботина');
    }
    public function testSplDetect1791()
    {
        $this->assertEquals('S-Суботина', $this->object->splitFullName('Суботина').'-Суботина');
    }
    public function testSplDetect1792()
    {
        $this->assertEquals('S-Суворина', $this->object->splitFullName('Суворина').'-Суворина');
    }
    public function testSplDetect1793()
    {
        $this->assertEquals('S-Суворкина', $this->object->splitFullName('Суворкина').'-Суворкина');
    }
    public function testSplDetect1794()
    {
        $this->assertEquals('S-Суворова', $this->object->splitFullName('Суворова').'-Суворова');
    }
    public function testSplDetect1795()
    {
        $this->assertEquals('S-Сунгатулина', $this->object->splitFullName('Сунгатулина').'-Сунгатулина');
    }
    public function testSplDetect1796()
    {
        $this->assertEquals('S-Сукачева', $this->object->splitFullName('Сукачева').'-Сукачева');
    }
    public function testSplDetect1797()
    {
        $this->assertEquals('S-Сурикова', $this->object->splitFullName('Сурикова').'-Сурикова');
    }
    public function testSplDetect1798()
    {
        $this->assertEquals('S-Сусоева', $this->object->splitFullName('Сусоева').'-Сусоева');
    }
    public function testSplDetect1799()
    {
        $this->assertEquals('S-Сутулина', $this->object->splitFullName('Сутулина').'-Сутулина');
    }
    public function testSplDetect1800()
    {
        $this->assertEquals('S-Сухорукова', $this->object->splitFullName('Сухорукова').'-Сухорукова');
    }
    public function testSplDetect1801()
    {
        $this->assertEquals('S-Сучкова', $this->object->splitFullName('Сучкова').'-Сучкова');
    }
    public function testSplDetect1802()
    {
        $this->assertEquals('S-Сысоева', $this->object->splitFullName('Сысоева').'-Сысоева');
    }
    public function testSplDetect1803()
    {
        $this->assertEquals('S-Сытникова', $this->object->splitFullName('Сытникова').'-Сытникова');
    }
    public function testSplDetect1804()
    {
        $this->assertEquals('S-Сычёвка', $this->object->splitFullName('Сычёвка').'-Сычёвка');
    }
    public function testSplDetect1805()
    {
        $this->assertEquals('S-Сычкина', $this->object->splitFullName('Сычкина').'-Сычкина');
    }
    public function testSplDetect1806()
    {
        $this->assertEquals('S-Сюсева', $this->object->splitFullName('Сюсева').'-Сюсева');
    }
    public function testSplDetect1807()
    {
        $this->assertEquals('S-Табакова', $this->object->splitFullName('Табакова').'-Табакова');
    }
    public function testSplDetect1808()
    {
        $this->assertEquals('S-Табернакулова', $this->object->splitFullName('Табернакулова').'-Табернакулова');
    }
    public function testSplDetect1809()
    {
        $this->assertEquals('S-Таланова', $this->object->splitFullName('Таланова').'-Таланова');
    }
    public function testSplDetect1810()
    {
        $this->assertEquals('S-Талалихина', $this->object->splitFullName('Талалихина').'-Талалихина');
    }
    public function testSplDetect1811()
    {
        $this->assertEquals('S-Танкова', $this->object->splitFullName('Танкова').'-Танкова');
    }
    public function testSplDetect1812()
    {
        $this->assertEquals('S-Тарасова', $this->object->splitFullName('Тарасова').'-Тарасова');
    }
    public function testSplDetect1813()
    {
        $this->assertEquals('S-Татарова', $this->object->splitFullName('Татарова').'-Татарова');
    }
    public function testSplDetect1814()
    {
        $this->assertEquals('S-Твардовская', $this->object->splitFullName('Твардовская').'-Твардовская');
    }
    public function testSplDetect1815()
    {
        $this->assertEquals('S-Тёмкина', $this->object->splitFullName('Тёмкина').'-Тёмкина');
    }
    public function testSplDetect1816()
    {
        $this->assertEquals('S-Теплова', $this->object->splitFullName('Теплова').'-Теплова');
    }
    public function testSplDetect1817()
    {
        $this->assertEquals('S-Теребова', $this->object->splitFullName('Теребова').'-Теребова');
    }
    public function testSplDetect1818()
    {
        $this->assertEquals('S-Тетерева', $this->object->splitFullName('Тетерева').'-Тетерева');
    }
    public function testSplDetect1819()
    {
        $this->assertEquals('S-Типалова', $this->object->splitFullName('Типалова').'-Типалова');
    }
    public function testSplDetect1820()
    {
        $this->assertEquals('S-Титова', $this->object->splitFullName('Титова').'-Титова');
    }
    public function testSplDetect1821()
    {
        $this->assertEquals('S-Тихвинская', $this->object->splitFullName('Тихвинская').'-Тихвинская');
    }
    public function testSplDetect1822()
    {
        $this->assertEquals('S-Тихомирова', $this->object->splitFullName('Тихомирова').'-Тихомирова');
    }
    public function testSplDetect1823()
    {
        $this->assertEquals('S-Тихонова', $this->object->splitFullName('Тихонова').'-Тихонова');
    }
    public function testSplDetect1824()
    {
        $this->assertEquals('S-Токарева', $this->object->splitFullName('Токарева').'-Токарева');
    }
    public function testSplDetect1825()
    {
        $this->assertEquals('S-Токмакова', $this->object->splitFullName('Токмакова').'-Токмакова');
    }
    public function testSplDetect1826()
    {
        $this->assertEquals('S-Толбанова', $this->object->splitFullName('Толбанова').'-Толбанова');
    }
    public function testSplDetect1827()
    {
        $this->assertEquals('S-Толстоброва', $this->object->splitFullName('Толстоброва').'-Толстоброва');
    }
    public function testSplDetect1828()
    {
        $this->assertEquals('S-Толстокожева', $this->object->splitFullName('Толстокожева').'-Толстокожева');
    }
    public function testSplDetect1829()
    {
        $this->assertEquals('S-Толстая', $this->object->splitFullName('Толстая').'-Толстая');
    }
    public function testSplDetect1830()
    {
        $this->assertEquals('S-Топорова', $this->object->splitFullName('Топорова').'-Топорова');
    }
    public function testSplDetect1831()
    {
        $this->assertEquals('S-Торопова', $this->object->splitFullName('Торопова').'-Торопова');
    }
    public function testSplDetect1832()
    {
        $this->assertEquals('S-Торчинова', $this->object->splitFullName('Торчинова').'-Торчинова');
    }
    public function testSplDetect1833()
    {
        $this->assertEquals('S-Травкина', $this->object->splitFullName('Травкина').'-Травкина');
    }
    public function testSplDetect1834()
    {
        $this->assertEquals('S-Тредиковская', $this->object->splitFullName('Тредиковская').'-Тредиковская');
    }
    public function testSplDetect1835()
    {
        $this->assertEquals('S-Третьякова', $this->object->splitFullName('Третьякова').'-Третьякова');
    }
    public function testSplDetect1836()
    {
        $this->assertEquals('S-Трифонова', $this->object->splitFullName('Трифонова').'-Трифонова');
    }
    public function testSplDetect1837()
    {
        $this->assertEquals('S-Трофимова', $this->object->splitFullName('Трофимова').'-Трофимова');
    }
    public function testSplDetect1838()
    {
        $this->assertEquals('S-Трусова', $this->object->splitFullName('Трусова').'-Трусова');
    }
    public function testSplDetect1839()
    {
        $this->assertEquals('S-Трутнева', $this->object->splitFullName('Трутнева').'-Трутнева');
    }
    public function testSplDetect1840()
    {
        $this->assertEquals('S-Труфанова', $this->object->splitFullName('Труфанова').'-Труфанова');
    }
    public function testSplDetect1841()
    {
        $this->assertEquals('S-Трухина', $this->object->splitFullName('Трухина').'-Трухина');
    }
    public function testSplDetect1842()
    {
        $this->assertEquals('S-Трындина', $this->object->splitFullName('Трындина').'-Трындина');
    }
    public function testSplDetect1843()
    {
        $this->assertEquals('S-Туполева', $this->object->splitFullName('Туполева').'-Туполева');
    }
    public function testSplDetect1844()
    {
        $this->assertEquals('S-Турбина', $this->object->splitFullName('Турбина').'-Турбина');
    }
    public function testSplDetect1845()
    {
        $this->assertEquals('S-Тургенева', $this->object->splitFullName('Тургенева').'-Тургенева');
    }
    public function testSplDetect1846()
    {
        $this->assertEquals('S-Турова', $this->object->splitFullName('Турова').'-Турова');
    }
    public function testSplDetect1847()
    {
        $this->assertEquals('S-Турфанова', $this->object->splitFullName('Турфанова').'-Турфанова');
    }
    public function testSplDetect1848()
    {
        $this->assertEquals('S-Тычкина', $this->object->splitFullName('Тычкина').'-Тычкина');
    }
    public function testSplDetect1849()
    {
        $this->assertEquals('S-Тюшнякова', $this->object->splitFullName('Тюшнякова').'-Тюшнякова');
    }
    public function testSplDetect1850()
    {
        $this->assertEquals('S-Телицына', $this->object->splitFullName('Телицына').'-Телицына');
    }
    public function testSplDetect1851()
    {
        $this->assertEquals('S-Тянникова', $this->object->splitFullName('Тянникова').'-Тянникова');
    }
    public function testSplDetect1852()
    {
        $this->assertEquals('S-Угольникова', $this->object->splitFullName('Угольникова').'-Угольникова');
    }
    public function testSplDetect1853()
    {
        $this->assertEquals('S-Ульянова', $this->object->splitFullName('Ульянова').'-Ульянова');
    }
    public function testSplDetect1854()
    {
        $this->assertEquals('S-Ульяшина', $this->object->splitFullName('Ульяшина').'-Ульяшина');
    }
    public function testSplDetect1855()
    {
        $this->assertEquals('S-Усатова', $this->object->splitFullName('Усатова').'-Усатова');
    }
    public function testSplDetect1856()
    {
        $this->assertEquals('S-Усова', $this->object->splitFullName('Усова').'-Усова');
    }
    public function testSplDetect1857()
    {
        $this->assertEquals('S-Устинова', $this->object->splitFullName('Устинова').'-Устинова');
    }
    public function testSplDetect1858()
    {
        $this->assertEquals('S-Устюжанина', $this->object->splitFullName('Устюжанина').'-Устюжанина');
    }
    public function testSplDetect1859()
    {
        $this->assertEquals('S-Утёсова', $this->object->splitFullName('Утёсова').'-Утёсова');
    }
    public function testSplDetect1860()
    {
        $this->assertEquals('S-Ухова', $this->object->splitFullName('Ухова').'-Ухова');
    }
    public function testSplDetect1861()
    {
        $this->assertEquals('S-Фанина', $this->object->splitFullName('Фанина').'-Фанина');
    }
    public function testSplDetect1862()
    {
        $this->assertEquals('S-Фамусова', $this->object->splitFullName('Фамусова').'-Фамусова');
    }
    public function testSplDetect1863()
    {
        $this->assertEquals('S-Федина', $this->object->splitFullName('Федина').'-Федина');
    }
    public function testSplDetect1864()
    {
        $this->assertEquals('S-Федосова', $this->object->splitFullName('Федосова').'-Федосова');
    }
    public function testSplDetect1865()
    {
        $this->assertEquals('S-Федотова', $this->object->splitFullName('Федотова').'-Федотова');
    }
    public function testSplDetect1866()
    {
        $this->assertEquals('S-Федосеева', $this->object->splitFullName('Федосеева').'-Федосеева');
    }
    public function testSplDetect1867()
    {
        $this->assertEquals('S-Федченкова', $this->object->splitFullName('Федченкова').'-Федченкова');
    }
    public function testSplDetect1868()
    {
        $this->assertEquals('S-Фёдорова', $this->object->splitFullName('Фёдорова').'-Фёдорова');
    }
    public function testSplDetect1869()
    {
        $this->assertEquals('S-Федулова', $this->object->splitFullName('Федулова').'-Федулова');
    }
    public function testSplDetect1870()
    {
        $this->assertEquals('S-Фетисова', $this->object->splitFullName('Фетисова').'-Фетисова');
    }
    public function testSplDetect1871()
    {
        $this->assertEquals('S-Филатова', $this->object->splitFullName('Филатова').'-Филатова');
    }
    public function testSplDetect1872()
    {
        $this->assertEquals('S-Филимонова', $this->object->splitFullName('Филимонова').'-Филимонова');
    }
    public function testSplDetect1873()
    {
        $this->assertEquals('S-Филиппова', $this->object->splitFullName('Филиппова').'-Филиппова');
    }
    public function testSplDetect1874()
    {
        $this->assertEquals('S-Флёрова', $this->object->splitFullName('Флёрова').'-Флёрова');
    }
    public function testSplDetect1875()
    {
        $this->assertEquals('S-Фокина', $this->object->splitFullName('Фокина').'-Фокина');
    }
    public function testSplDetect1876()
    {
        $this->assertEquals('S-Фомина', $this->object->splitFullName('Фомина').'-Фомина');
    }
    public function testSplDetect1877()
    {
        $this->assertEquals('S-Фомичева', $this->object->splitFullName('Фомичева').'-Фомичева');
    }
    public function testSplDetect1878()
    {
        $this->assertEquals('S-Фонвизина', $this->object->splitFullName('Фонвизина').'-Фонвизина');
    }
    public function testSplDetect1879()
    {
        $this->assertEquals('S-Форопонова', $this->object->splitFullName('Форопонова').'-Форопонова');
    }
    public function testSplDetect1880()
    {
        $this->assertEquals('S-Фирсова', $this->object->splitFullName('Фирсова').'-Фирсова');
    }
    public function testSplDetect1881()
    {
        $this->assertEquals('S-Фролова', $this->object->splitFullName('Фролова').'-Фролова');
    }
    public function testSplDetect1882()
    {
        $this->assertEquals('S-Францева', $this->object->splitFullName('Францева').'-Францева');
    }
    public function testSplDetect1883()
    {
        $this->assertEquals('S-Фукина', $this->object->splitFullName('Фукина').'-Фукина');
    }
    public function testSplDetect1884()
    {
        $this->assertEquals('S-Хабалова', $this->object->splitFullName('Хабалова').'-Хабалова');
    }
    public function testSplDetect1885()
    {
        $this->assertEquals('S-Халтурина', $this->object->splitFullName('Халтурина').'-Халтурина');
    }
    public function testSplDetect1886()
    {
        $this->assertEquals('S-Харитонова', $this->object->splitFullName('Харитонова').'-Харитонова');
    }
    public function testSplDetect1887()
    {
        $this->assertEquals('S-Харламова', $this->object->splitFullName('Харламова').'-Харламова');
    }
    public function testSplDetect1888()
    {
        $this->assertEquals('S-Хлебникова', $this->object->splitFullName('Хлебникова').'-Хлебникова');
    }
    public function testSplDetect1889()
    {
        $this->assertEquals('S-Хлопонина', $this->object->splitFullName('Хлопонина').'-Хлопонина');
    }
    public function testSplDetect1890()
    {
        $this->assertEquals('S-Холодова', $this->object->splitFullName('Холодова').'-Холодова');
    }
    public function testSplDetect1891()
    {
        $this->assertEquals('S-Хомколова', $this->object->splitFullName('Хомколова').'-Хомколова');
    }
    public function testSplDetect1892()
    {
        $this->assertEquals('S-Храмова', $this->object->splitFullName('Храмова').'-Храмова');
    }
    public function testSplDetect1893()
    {
        $this->assertEquals('S-Хромова', $this->object->splitFullName('Хромова').'-Хромова');
    }
    public function testSplDetect1894()
    {
        $this->assertEquals('S-Худовекова', $this->object->splitFullName('Худовекова').'-Худовекова');
    }
    public function testSplDetect1895()
    {
        $this->assertEquals('S-Хлебова', $this->object->splitFullName('Хлебова').'-Хлебова');
    }
    public function testSplDetect1896()
    {
        $this->assertEquals('S-Хуртина', $this->object->splitFullName('Хуртина').'-Хуртина');
    }
    public function testSplDetect1897()
    {
        $this->assertEquals('S-Хребтова', $this->object->splitFullName('Хребтова').'-Хребтова');
    }
    public function testSplDetect1898()
    {
        $this->assertEquals('S-Худякова', $this->object->splitFullName('Худякова').'-Худякова');
    }
    public function testSplDetect1899()
    {
        $this->assertEquals('S-Царицына', $this->object->splitFullName('Царицына').'-Царицына');
    }
    public function testSplDetect1900()
    {
        $this->assertEquals('S-Цветаева', $this->object->splitFullName('Цветаева').'-Цветаева');
    }
    public function testSplDetect1901()
    {
        $this->assertEquals('S-Цветкова', $this->object->splitFullName('Цветкова').'-Цветкова');
    }
    public function testSplDetect1902()
    {
        $this->assertEquals('S-Циолковская', $this->object->splitFullName('Циолковская').'-Циолковская');
    }
    public function testSplDetect1903()
    {
        $this->assertEquals('S-Цитникова', $this->object->splitFullName('Цитникова').'-Цитникова');
    }
    public function testSplDetect1904()
    {
        $this->assertEquals('S-Цуканова', $this->object->splitFullName('Цуканова').'-Цуканова');
    }
    public function testSplDetect1905()
    {
        $this->assertEquals('S-Чадаева', $this->object->splitFullName('Чадаева').'-Чадаева');
    }
    public function testSplDetect1906()
    {
        $this->assertEquals('S-Чадова', $this->object->splitFullName('Чадова').'-Чадова');
    }
    public function testSplDetect1907()
    {
        $this->assertEquals('S-Чазова', $this->object->splitFullName('Чазова').'-Чазова');
    }
    public function testSplDetect1908()
    {
        $this->assertEquals('S-Чалая', $this->object->splitFullName('Чалая').'-Чалая');
    }
    public function testSplDetect1909()
    {
        $this->assertEquals('S-Чапаева', $this->object->splitFullName('Чапаева').'-Чапаева');
    }
    public function testSplDetect1910()
    {
        $this->assertEquals('S-Чеботарёва', $this->object->splitFullName('Чеботарёва').'-Чеботарёва');
    }
    public function testSplDetect1911()
    {
        $this->assertEquals('S-Чебыкина', $this->object->splitFullName('Чебыкина').'-Чебыкина');
    }
    public function testSplDetect1912()
    {
        $this->assertEquals('S-Чежекова', $this->object->splitFullName('Чежекова').'-Чежекова');
    }
    public function testSplDetect1913()
    {
        $this->assertEquals('S-Чекмарёв', $this->object->splitFullName('Чекмарёв').'-Чекмарёв');
    }
    public function testSplDetect1914()
    {
        $this->assertEquals('S-Челомеева', $this->object->splitFullName('Челомеева').'-Челомеева');
    }
    public function testSplDetect1915()
    {
        $this->assertEquals('S-Челомей', $this->object->splitFullName('Челомей').'-Челомей');
    }
    public function testSplDetect1916()
    {
        $this->assertEquals('S-Челпанова', $this->object->splitFullName('Челпанова').'-Челпанова');
    }
    public function testSplDetect1917()
    {
        $this->assertEquals('S-Чендева', $this->object->splitFullName('Чендева').'-Чендева');
    }
    public function testSplDetect1918()
    {
        $this->assertEquals('S-Черенчикова', $this->object->splitFullName('Черенчикова').'-Черенчикова');
    }
    public function testSplDetect1919()
    {
        $this->assertEquals('S-Черепанова', $this->object->splitFullName('Черепанова').'-Черепанова');
    }
    public function testSplDetect1920()
    {
        $this->assertEquals('S-Черкашина', $this->object->splitFullName('Черкашина').'-Черкашина');
    }
    public function testSplDetect1921()
    {
        $this->assertEquals('S-Чернова', $this->object->splitFullName('Чернова').'-Чернова');
    }
    public function testSplDetect1922()
    {
        $this->assertEquals('S-Чернышёва', $this->object->splitFullName('Чернышёва').'-Чернышёва');
    }
    public function testSplDetect1923()
    {
        $this->assertEquals('S-Чернакова', $this->object->splitFullName('Чернакова').'-Чернакова');
    }
    public function testSplDetect1924()
    {
        $this->assertEquals('S-Черникова', $this->object->splitFullName('Черникова').'-Черникова');
    }
    public function testSplDetect1925()
    {
        $this->assertEquals('S-Чеснокова', $this->object->splitFullName('Чеснокова').'-Чеснокова');
    }
    public function testSplDetect1926()
    {
        $this->assertEquals('S-Чигракова', $this->object->splitFullName('Чигракова').'-Чигракова');
    }
    public function testSplDetect1927()
    {
        $this->assertEquals('S-Чижикова', $this->object->splitFullName('Чижикова').'-Чижикова');
    }
    public function testSplDetect1928()
    {
        $this->assertEquals('S-Чиркаш', $this->object->splitFullName('Чиркаш').'-Чиркаш');
    }
    public function testSplDetect1929()
    {
        $this->assertEquals('S-Чистякова', $this->object->splitFullName('Чистякова').'-Чистякова');
    }
    public function testSplDetect1930()
    {
        $this->assertEquals('S-Чичикова', $this->object->splitFullName('Чичикова').'-Чичикова');
    }
    public function testSplDetect1931()
    {
        $this->assertEquals('S-Чичканова', $this->object->splitFullName('Чичканова').'-Чичканова');
    }
    public function testSplDetect1932()
    {
        $this->assertEquals('S-Чкалова', $this->object->splitFullName('Чкалова').'-Чкалова');
    }
    public function testSplDetect1933()
    {
        $this->assertEquals('S-Чмыхова', $this->object->splitFullName('Чмыхова').'-Чмыхова');
    }
    public function testSplDetect1934()
    {
        $this->assertEquals('S-Чугунова', $this->object->splitFullName('Чугунова').'-Чугунова');
    }
    public function testSplDetect1935()
    {
        $this->assertEquals('S-Чужинова', $this->object->splitFullName('Чужинова').'-Чужинова');
    }
    public function testSplDetect1936()
    {
        $this->assertEquals('S-Чукчова', $this->object->splitFullName('Чукчова').'-Чукчова');
    }
    public function testSplDetect1937()
    {
        $this->assertEquals('S-Чукреева', $this->object->splitFullName('Чукреева').'-Чукреева');
    }
    public function testSplDetect1938()
    {
        $this->assertEquals('S-Чупова', $this->object->splitFullName('Чупова').'-Чупова');
    }
    public function testSplDetect1939()
    {
        $this->assertEquals('S-Чуприна', $this->object->splitFullName('Чуприна').'-Чуприна');
    }
    public function testSplDetect1940()
    {
        $this->assertEquals('S-Чупрова', $this->object->splitFullName('Чупрова').'-Чупрова');
    }
    public function testSplDetect1941()
    {
        $this->assertEquals('S-Чучанова', $this->object->splitFullName('Чучанова').'-Чучанова');
    }
    public function testSplDetect1942()
    {
        $this->assertEquals('S-Чучумашева', $this->object->splitFullName('Чучумашева').'-Чучумашева');
    }
    public function testSplDetect1943()
    {
        $this->assertEquals('S-Шабунина', $this->object->splitFullName('Шабунина').'-Шабунина');
    }
    public function testSplDetect1944()
    {
        $this->assertEquals('S-Шакмакова', $this->object->splitFullName('Шакмакова').'-Шакмакова');
    }
    public function testSplDetect1945()
    {
        $this->assertEquals('S-Шаляпина', $this->object->splitFullName('Шаляпина').'-Шаляпина');
    }
    public function testSplDetect1946()
    {
        $this->assertEquals('S-Шаповалова', $this->object->splitFullName('Шаповалова').'-Шаповалова');
    }
    public function testSplDetect1947()
    {
        $this->assertEquals('S-Шапошникова', $this->object->splitFullName('Шапошникова').'-Шапошникова');
    }
    public function testSplDetect1948()
    {
        $this->assertEquals('S-Шарапова', $this->object->splitFullName('Шарапова').'-Шарапова');
    }
    public function testSplDetect1949()
    {
        $this->assertEquals('S-Шарова', $this->object->splitFullName('Шарова').'-Шарова');
    }
    public function testSplDetect1950()
    {
        $this->assertEquals('S-Шаршина', $this->object->splitFullName('Шаршина').'-Шаршина');
    }
    public function testSplDetect1951()
    {
        $this->assertEquals('S-Шашлова', $this->object->splitFullName('Шашлова').'-Шашлова');
    }
    public function testSplDetect1952()
    {
        $this->assertEquals('S-Шведова', $this->object->splitFullName('Шведова').'-Шведова');
    }
    public function testSplDetect1953()
    {
        $this->assertEquals('S-Шеваелёк', $this->object->splitFullName('Шеваелёк').'-Шеваелёк');
    }
    public function testSplDetect1954()
    {
        $this->assertEquals('S-Шеломова', $this->object->splitFullName('Шеломова').'-Шеломова');
    }
    public function testSplDetect1955()
    {
        $this->assertEquals('S-Шепкина', $this->object->splitFullName('Шепкина').'-Шепкина');
    }
    public function testSplDetect1956()
    {
        $this->assertEquals('S-Шеповалова', $this->object->splitFullName('Шеповалова').'-Шеповалова');
    }
    public function testSplDetect1957()
    {
        $this->assertEquals('S-Шереметьева', $this->object->splitFullName('Шереметьева').'-Шереметьева');
    }
    public function testSplDetect1958()
    {
        $this->assertEquals('S-Шерстова', $this->object->splitFullName('Шерстова').'-Шерстова');
    }
    public function testSplDetect1959()
    {
        $this->assertEquals('S-Шикалова', $this->object->splitFullName('Шикалова').'-Шикалова');
    }
    public function testSplDetect1960()
    {
        $this->assertEquals('S-Ширманова', $this->object->splitFullName('Ширманова').'-Ширманова');
    }
    public function testSplDetect1961()
    {
        $this->assertEquals('S-Шихранова', $this->object->splitFullName('Шихранова').'-Шихранова');
    }
    public function testSplDetect1962()
    {
        $this->assertEquals('S-Шишкина', $this->object->splitFullName('Шишкина').'-Шишкина');
    }
    public function testSplDetect1963()
    {
        $this->assertEquals('S-Шишлова', $this->object->splitFullName('Шишлова').'-Шишлова');
    }
    public function testSplDetect1964()
    {
        $this->assertEquals('S-Шишова', $this->object->splitFullName('Шишова').'-Шишова');
    }
    public function testSplDetect1965()
    {
        $this->assertEquals('S-Шкуратова', $this->object->splitFullName('Шкуратова').'-Шкуратова');
    }
    public function testSplDetect1966()
    {
        $this->assertEquals('S-Шлыкова', $this->object->splitFullName('Шлыкова').'-Шлыкова');
    }
    public function testSplDetect1967()
    {
        $this->assertEquals('S-Шмакова', $this->object->splitFullName('Шмакова').'-Шмакова');
    }
    public function testSplDetect1968()
    {
        $this->assertEquals('S-Шмелева', $this->object->splitFullName('Шмелева').'-Шмелева');
    }
    public function testSplDetect1969()
    {
        $this->assertEquals('S-Шубина', $this->object->splitFullName('Шубина').'-Шубина');
    }
    public function testSplDetect1970()
    {
        $this->assertEquals('S-Шубкина', $this->object->splitFullName('Шубкина').'-Шубкина');
    }
    public function testSplDetect1971()
    {
        $this->assertEquals('S-Шувалова', $this->object->splitFullName('Шувалова').'-Шувалова');
    }
    public function testSplDetect1972()
    {
        $this->assertEquals('S-Шуйская', $this->object->splitFullName('Шуйская').'-Шуйская');
    }
    public function testSplDetect1973()
    {
        $this->assertEquals('S-Шукшина', $this->object->splitFullName('Шукшина').'-Шукшина');
    }
    public function testSplDetect1974()
    {
        $this->assertEquals('S-Шулёва', $this->object->splitFullName('Шулёва').'-Шулёва');
    }
    public function testSplDetect1975()
    {
        $this->assertEquals('S-Шульдешова', $this->object->splitFullName('Шульдешова').'-Шульдешова');
    }
    public function testSplDetect1976()
    {
        $this->assertEquals('S-Шульга', $this->object->splitFullName('Шульга').'-Шульга');
    }
    public function testSplDetect1977()
    {
        $this->assertEquals('S-Шульгина', $this->object->splitFullName('Шульгина').'-Шульгина');
    }
    public function testSplDetect1978()
    {
        $this->assertEquals('S-Шурупова', $this->object->splitFullName('Шурупова').'-Шурупова');
    }
    public function testSplDetect1979()
    {
        $this->assertEquals('S-Шушалева', $this->object->splitFullName('Шушалева').'-Шушалева');
    }
    public function testSplDetect1980()
    {
        $this->assertEquals('S-Шурша', $this->object->splitFullName('Шурша').'-Шурша');
    }
    public function testSplDetect1981()
    {
        $this->assertEquals('S-Щавельская', $this->object->splitFullName('Щавельская').'-Щавельская');
    }
    public function testSplDetect1982()
    {
        $this->assertEquals('S-Щегельская', $this->object->splitFullName('Щегельская').'-Щегельская');
    }
    public function testSplDetect1983()
    {
        $this->assertEquals('S-Щеглова', $this->object->splitFullName('Щеглова').'-Щеглова');
    }
    public function testSplDetect1984()
    {
        $this->assertEquals('S-Щеголева', $this->object->splitFullName('Щеголева').'-Щеголева');
    }
    public function testSplDetect1985()
    {
        $this->assertEquals('S-Щеголихина', $this->object->splitFullName('Щеголихина').'-Щеголихина');
    }
    public function testSplDetect1986()
    {
        $this->assertEquals('S-Щедрина', $this->object->splitFullName('Щедрина').'-Щедрина');
    }
    public function testSplDetect1987()
    {
        $this->assertEquals('S-Щедрова', $this->object->splitFullName('Щедрова').'-Щедрова');
    }
    public function testSplDetect1988()
    {
        $this->assertEquals('S-Щекочихина', $this->object->splitFullName('Щекочихина').'-Щекочихина');
    }
    public function testSplDetect1989()
    {
        $this->assertEquals('S-Щепкина', $this->object->splitFullName('Щепкина').'-Щепкина');
    }
    public function testSplDetect1990()
    {
        $this->assertEquals('S-Щербакова', $this->object->splitFullName('Щербакова').'-Щербакова');
    }
    public function testSplDetect1991()
    {
        $this->assertEquals('S-Щербатых', $this->object->splitFullName('Щербатых').'-Щербатых');
    }
    public function testSplDetect1992()
    {
        $this->assertEquals('S-Щербина', $this->object->splitFullName('Щербина').'-Щербина');
    }
    public function testSplDetect1993()
    {
        $this->assertEquals('S-Щетинаина', $this->object->splitFullName('Щетинаина').'-Щетинаина');
    }
    public function testSplDetect1994()
    {
        $this->assertEquals('S-Щеткина', $this->object->splitFullName('Щеткина').'-Щеткина');
    }
    public function testSplDetect1995()
    {
        $this->assertEquals('S-Щукина', $this->object->splitFullName('Щукина').'-Щукина');
    }
    public function testSplDetect1996()
    {
        $this->assertEquals('S-Энтина', $this->object->splitFullName('Энтина').'-Энтина');
    }
    public function testSplDetect1997()
    {
        $this->assertEquals('S-Эсце', $this->object->splitFullName('Эсце').'-Эсце');
    }
    public function testSplDetect1998()
    {
        $this->assertEquals('S-Ювелева', $this->object->splitFullName('Ювелева').'-Ювелева');
    }
    public function testSplDetect1999()
    {
        $this->assertEquals('S-Юганцева', $this->object->splitFullName('Юганцева').'-Юганцева');
    }
    public function testSplDetect2000()
    {
        $this->assertEquals('S-Югова', $this->object->splitFullName('Югова').'-Югова');
    }
    public function testSplDetect2001()
    {
        $this->assertEquals('S-Юдашкина', $this->object->splitFullName('Юдашкина').'-Юдашкина');
    }
    public function testSplDetect2002()
    {
        $this->assertEquals('S-Юдина', $this->object->splitFullName('Юдина').'-Юдина');
    }
    public function testSplDetect2003()
    {
        $this->assertEquals('S-Юнкина', $this->object->splitFullName('Юнкина').'-Юнкина');
    }
    public function testSplDetect2004()
    {
        $this->assertEquals('S-Юрнаева', $this->object->splitFullName('Юрнаева').'-Юрнаева');
    }
    public function testSplDetect2005()
    {
        $this->assertEquals('S-Юрьева', $this->object->splitFullName('Юрьева').'-Юрьева');
    }
    public function testSplDetect2006()
    {
        $this->assertEquals('S-Юсупова', $this->object->splitFullName('Юсупова').'-Юсупова');
    }
    public function testSplDetect2007()
    {
        $this->assertEquals('S-Юферева', $this->object->splitFullName('Юферева').'-Юферева');
    }
    public function testSplDetect2008()
    {
        $this->assertEquals('S-Якимова', $this->object->splitFullName('Якимова').'-Якимова');
    }
    public function testSplDetect2009()
    {
        $this->assertEquals('S-Яковалева', $this->object->splitFullName('Яковалева').'-Яковалева');
    }
    public function testSplDetect2010()
    {
        $this->assertEquals('S-Якубова', $this->object->splitFullName('Якубова').'-Якубова');
    }
    public function testSplDetect2011()
    {
        $this->assertEquals('S-Якубоваич', $this->object->splitFullName('Якубоваич').'-Якубоваич');
    }
    public function testSplDetect2012()
    {
        $this->assertEquals('S-Якушева', $this->object->splitFullName('Якушева').'-Якушева');
    }
    public function testSplDetect2013()
    {
        $this->assertEquals('S-Янаева', $this->object->splitFullName('Янаева').'-Янаева');
    }
    public function testSplDetect2014()
    {
        $this->assertEquals('S-Янкова', $this->object->splitFullName('Янкова').'-Янкова');
    }
    public function testSplDetect2015()
    {
        $this->assertEquals('S-Янковаская', $this->object->splitFullName('Янковаская').'-Янковаская');
    }
    public function testSplDetect2016()
    {
        $this->assertEquals('S-Ярмольник', $this->object->splitFullName('Ярмольник').'-Ярмольник');
    }
    public function testSplDetect2017()
    {
        $this->assertEquals('S-Яромеева', $this->object->splitFullName('Яромеева').'-Яромеева');
    }
    public function testSplDetect2018()
    {
        $this->assertEquals('S-Ярцева', $this->object->splitFullName('Ярцева').'-Ярцева');
    }
    public function testSplDetect2019()
    {
        $this->assertEquals('S-Ясенева', $this->object->splitFullName('Ясенева').'-Ясенева');
    }
    public function testSplDetect2020()
    {
        $this->assertEquals('S-Яснеева', $this->object->splitFullName('Яснеева').'-Яснеева');
    }
    public function testSplDetect2021()
    {
        $this->assertEquals('S-Яшина', $this->object->splitFullName('Яшина').'-Яшина');
    }

}