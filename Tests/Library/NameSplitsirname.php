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
        $this->assertEquals('S-Абакумов', trim($this->object->getFullNameFormat('Абакумов')).'-Абакумов');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('S-Абдулов', trim($this->object->getFullNameFormat('Абдулов')).'-Абдулов');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('S-Абрамов', trim($this->object->getFullNameFormat('Абрамов')).'-Абрамов');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('S-Авдеев', trim($this->object->getFullNameFormat('Авдеев')).'-Авдеев');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('S-Аверин', trim($this->object->getFullNameFormat('Аверин')).'-Аверин');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('S-Котляр', trim($this->object->getFullNameFormat('Котляр')).'-Котляр');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('S-Кобзарь', trim($this->object->getFullNameFormat('Кобзарь')).'-Кобзарь');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('S-Аверьянов', trim($this->object->getFullNameFormat('Аверьянов')).'-Аверьянов');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('S-Агапов', trim($this->object->getFullNameFormat('Агапов')).'-Агапов');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('S-Агафонов', trim($this->object->getFullNameFormat('Агафонов')).'-Агафонов');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('S-Агейкин', trim($this->object->getFullNameFormat('Агейкин')).'-Агейкин');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('S-Ажищенков', trim($this->object->getFullNameFormat('Ажищенков')).'-Ажищенков');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('S-Аксаков', trim($this->object->getFullNameFormat('Аксаков')).'-Аксаков');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('S-Аксёнов', trim($this->object->getFullNameFormat('Аксёнов')).'-Аксёнов');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('S-Аксенчук', trim($this->object->getFullNameFormat('Аксенчук')).'-Аксенчук');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('S-Аленин', trim($this->object->getFullNameFormat('Аленин')).'-Аленин');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('S-Алиев', trim($this->object->getFullNameFormat('Алиев')).'-Алиев');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('S-Амалиев', trim($this->object->getFullNameFormat('Амалиев')).'-Амалиев');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('S-Амелин', trim($this->object->getFullNameFormat('Амелин')).'-Амелин');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('S-Аминев', trim($this->object->getFullNameFormat('Аминев')).'-Аминев');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('S-Александров', trim($this->object->getFullNameFormat('Александров')).'-Александров');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('S-Алексеев', trim($this->object->getFullNameFormat('Алексеев')).'-Алексеев');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('S-Алёхин', trim($this->object->getFullNameFormat('Алёхин')).'-Алёхин');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('S-Аллилуев', trim($this->object->getFullNameFormat('Аллилуев')).'-Аллилуев');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('S-Андреев', trim($this->object->getFullNameFormat('Андреев')).'-Андреев');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('S-Андреюшкин', trim($this->object->getFullNameFormat('Андреюшкин')).'-Андреюшкин');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('S-Андроников', trim($this->object->getFullNameFormat('Андроников')).'-Андроников');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('S-Андропов', trim($this->object->getFullNameFormat('Андропов')).'-Андропов');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('S-Аниканов', trim($this->object->getFullNameFormat('Аниканов')).'-Аниканов');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('S-Анисимов', trim($this->object->getFullNameFormat('Анисимов')).'-Анисимов');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('S-Анишин', trim($this->object->getFullNameFormat('Анишин')).'-Анишин');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('S-Анников', trim($this->object->getFullNameFormat('Анников')).'-Анников');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('S-Анохин', trim($this->object->getFullNameFormat('Анохин')).'-Анохин');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('S-Аношкин', trim($this->object->getFullNameFormat('Аношкин')).'-Аношкин');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('S-Антипов', trim($this->object->getFullNameFormat('Антипов')).'-Антипов');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('S-Антонов', trim($this->object->getFullNameFormat('Антонов')).'-Антонов');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('S-Антонович', trim($this->object->getFullNameFormat('Антонович')).'-Антонович');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('S-Артамонов', trim($this->object->getFullNameFormat('Артамонов')).'-Артамонов');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('S-Арефьев', trim($this->object->getFullNameFormat('Арефьев')).'-Арефьев');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('S-Аристархов', trim($this->object->getFullNameFormat('Аристархов')).'-Аристархов');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('S-Арсеньев', trim($this->object->getFullNameFormat('Арсеньев')).'-Арсеньев');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('S-Артёмов', trim($this->object->getFullNameFormat('Артёмов')).'-Артёмов');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('S-Асланов', trim($this->object->getFullNameFormat('Асланов')).'-Асланов');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('S-Аслаханов', trim($this->object->getFullNameFormat('Аслаханов')).'-Аслаханов');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('S-Астанков', trim($this->object->getFullNameFormat('Астанков')).'-Астанков');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('S-Астафьев', trim($this->object->getFullNameFormat('Астафьев')).'-Астафьев');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('S-Астахов', trim($this->object->getFullNameFormat('Астахов')).'-Астахов');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('S-Афанасьев', trim($this->object->getFullNameFormat('Афанасьев')).'-Афанасьев');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('S-Афонин', trim($this->object->getFullNameFormat('Афонин')).'-Афонин');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('S-Аспидов', trim($this->object->getFullNameFormat('Аспидов')).'-Аспидов');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('S-Бабатьев', trim($this->object->getFullNameFormat('Бабатьев')).'-Бабатьев');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('S-Бабиков', trim($this->object->getFullNameFormat('Бабиков')).'-Бабиков');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('S-Бабичев', trim($this->object->getFullNameFormat('Бабичев')).'-Бабичев');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('S-Бабкин', trim($this->object->getFullNameFormat('Бабкин')).'-Бабкин');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('S-Бабурин', trim($this->object->getFullNameFormat('Бабурин')).'-Бабурин');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('S-Багров', trim($this->object->getFullNameFormat('Багров')).'-Багров');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('S-Бакрылов', trim($this->object->getFullNameFormat('Бакрылов')).'-Бакрылов');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('S-Бажанов', trim($this->object->getFullNameFormat('Бажанов')).'-Бажанов');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('S-Баженов', trim($this->object->getFullNameFormat('Баженов')).'-Баженов');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('S-Базанов', trim($this->object->getFullNameFormat('Базанов')).'-Базанов');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('S-Базаров', trim($this->object->getFullNameFormat('Базаров')).'-Базаров');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('S-Балакин', trim($this->object->getFullNameFormat('Балакин')).'-Балакин');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('S-Балахнов', trim($this->object->getFullNameFormat('Балахнов')).'-Балахнов');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('S-Балашов', trim($this->object->getFullNameFormat('Балашов')).'-Балашов');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('S-Баранов', trim($this->object->getFullNameFormat('Баранов')).'-Баранов');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('S-Барболин', trim($this->object->getFullNameFormat('Барболин')).'-Барболин');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('S-Баренцев', trim($this->object->getFullNameFormat('Баренцев')).'-Баренцев');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('S-Баринов', trim($this->object->getFullNameFormat('Баринов')).'-Баринов');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('S-Барков', trim($this->object->getFullNameFormat('Барков')).'-Барков');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('S-Барсуков', trim($this->object->getFullNameFormat('Барсуков')).'-Барсуков');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('S-Батрутдинов', trim($this->object->getFullNameFormat('Батрутдинов')).'-Батрутдинов');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('S-Безбородов', trim($this->object->getFullNameFormat('Безбородов')).'-Безбородов');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('S-Безродный', trim($this->object->getFullNameFormat('Безродный')).'-Безродный');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('S-Безруков', trim($this->object->getFullNameFormat('Безруков')).'-Безруков');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('S-Безукладников', trim($this->object->getFullNameFormat('Безукладников')).'-Безукладников');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('S-Беликов', trim($this->object->getFullNameFormat('Беликов')).'-Беликов');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('S-Белов', trim($this->object->getFullNameFormat('Белов')).'-Белов');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('S-Беломестнов', trim($this->object->getFullNameFormat('Беломестнов')).'-Беломестнов');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('S-Бендлин', trim($this->object->getFullNameFormat('Бендлин')).'-Бендлин');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('S-Бережной', trim($this->object->getFullNameFormat('Бережной')).'-Бережной');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('S-Белоусов', trim($this->object->getFullNameFormat('Белоусов')).'-Белоусов');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('S-Бершов', trim($this->object->getFullNameFormat('Бершов')).'-Бершов');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('S-Беспалов', trim($this->object->getFullNameFormat('Беспалов')).'-Беспалов');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('S-Бескрёстнов', trim($this->object->getFullNameFormat('Бескрёстнов')).'-Бескрёстнов');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('S-Бирюков', trim($this->object->getFullNameFormat('Бирюков')).'-Бирюков');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('S-Блаженов', trim($this->object->getFullNameFormat('Блаженов')).'-Блаженов');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('S-Блатов', trim($this->object->getFullNameFormat('Блатов')).'-Блатов');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('S-Блинов', trim($this->object->getFullNameFormat('Блинов')).'-Блинов');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('S-Блохин', trim($this->object->getFullNameFormat('Блохин')).'-Блохин');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('S-Бобр', trim($this->object->getFullNameFormat('Бобр')).'-Бобр');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('S-Бобров', trim($this->object->getFullNameFormat('Бобров')).'-Бобров');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('S-Бобрик', trim($this->object->getFullNameFormat('Бобрик')).'-Бобрик');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('S-Богатырёв', trim($this->object->getFullNameFormat('Богатырёв')).'-Богатырёв');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('S-Богданов', trim($this->object->getFullNameFormat('Богданов')).'-Богданов');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('S-Боголепов', trim($this->object->getFullNameFormat('Боголепов')).'-Боголепов');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('S-Боголюбов', trim($this->object->getFullNameFormat('Боголюбов')).'-Боголюбов');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('S-Богомазов', trim($this->object->getFullNameFormat('Богомазов')).'-Богомазов');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('S-Богомолов', trim($this->object->getFullNameFormat('Богомолов')).'-Богомолов');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('S-Богров', trim($this->object->getFullNameFormat('Богров')).'-Богров');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('S-Бойков', trim($this->object->getFullNameFormat('Бойков')).'-Бойков');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('S-Болотников', trim($this->object->getFullNameFormat('Болотников')).'-Болотников');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('S-Болтоногов', trim($this->object->getFullNameFormat('Болтоногов')).'-Болтоногов');
    }
    public function testSplDetect102()
    {
        $this->assertEquals('S-Большов', trim($this->object->getFullNameFormat('Большов')).'-Большов');
    }
    public function testSplDetect103()
    {
        $this->assertEquals('S-Бореев', trim($this->object->getFullNameFormat('Бореев')).'-Бореев');
    }
    public function testSplDetect104()
    {
        $this->assertEquals('S-Бортник', trim($this->object->getFullNameFormat('Бортник')).'-Бортник');
    }
    public function testSplDetect105()
    {
        $this->assertEquals('S-Борзилов', trim($this->object->getFullNameFormat('Борзилов')).'-Борзилов');
    }
    public function testSplDetect106()
    {
        $this->assertEquals('S-Борцов', trim($this->object->getFullNameFormat('Борцов')).'-Борцов');
    }
    public function testSplDetect107()
    {
        $this->assertEquals('S-Брагин', trim($this->object->getFullNameFormat('Брагин')).'-Брагин');
    }
    public function testSplDetect108()
    {
        $this->assertEquals('S-Брежнев', trim($this->object->getFullNameFormat('Брежнев')).'-Брежнев');
    }
    public function testSplDetect109()
    {
        $this->assertEquals('S-Бугаков', trim($this->object->getFullNameFormat('Бугаков')).'-Бугаков');
    }
    public function testSplDetect110()
    {
        $this->assertEquals('S-Буданов', trim($this->object->getFullNameFormat('Буданов')).'-Буданов');
    }
    public function testSplDetect111()
    {
        $this->assertEquals('S-Будников', trim($this->object->getFullNameFormat('Будников')).'-Будников');
    }
    public function testSplDetect112()
    {
        $this->assertEquals('S-Будылин', trim($this->object->getFullNameFormat('Будылин')).'-Будылин');
    }
    public function testSplDetect113()
    {
        $this->assertEquals('S-Букин', trim($this->object->getFullNameFormat('Букин')).'-Букин');
    }
    public function testSplDetect114()
    {
        $this->assertEquals('S-Букирь', trim($this->object->getFullNameFormat('Букирь')).'-Букирь');
    }
    public function testSplDetect115()
    {
        $this->assertEquals('S-Буклин', trim($this->object->getFullNameFormat('Буклин')).'-Буклин');
    }
    public function testSplDetect116()
    {
        $this->assertEquals('S-Булгаков', trim($this->object->getFullNameFormat('Булгаков')).'-Булгаков');
    }
    public function testSplDetect117()
    {
        $this->assertEquals('S-Бунин', trim($this->object->getFullNameFormat('Бунин')).'-Бунин');
    }
    public function testSplDetect118()
    {
        $this->assertEquals('S-Бурков', trim($this->object->getFullNameFormat('Бурков')).'-Бурков');
    }
    public function testSplDetect119()
    {
        $this->assertEquals('S-Буров', trim($this->object->getFullNameFormat('Буров')).'-Буров');
    }
    public function testSplDetect120()
    {
        $this->assertEquals('S-Бурцов', trim($this->object->getFullNameFormat('Бурцов')).'-Бурцов');
    }
    public function testSplDetect121()
    {
        $this->assertEquals('S-Буряков', trim($this->object->getFullNameFormat('Буряков')).'-Буряков');
    }
    public function testSplDetect122()
    {
        $this->assertEquals('S-Бутылин', trim($this->object->getFullNameFormat('Бутылин')).'-Бутылин');
    }
    public function testSplDetect123()
    {
        $this->assertEquals('S-Былинкин', trim($this->object->getFullNameFormat('Былинкин')).'-Былинкин');
    }
    public function testSplDetect124()
    {
        $this->assertEquals('S-Бычков', trim($this->object->getFullNameFormat('Бычков')).'-Бычков');
    }
    public function testSplDetect125()
    {
        $this->assertEquals('S-Вавилов', trim($this->object->getFullNameFormat('Вавилов')).'-Вавилов');
    }
    public function testSplDetect126()
    {
        $this->assertEquals('S-Вагин', trim($this->object->getFullNameFormat('Вагин')).'-Вагин');
    }
    public function testSplDetect127()
    {
        $this->assertEquals('S-Вазов', trim($this->object->getFullNameFormat('Вазов')).'-Вазов');
    }
    public function testSplDetect128()
    {
        $this->assertEquals('S-Валевач', trim($this->object->getFullNameFormat('Валевач')).'-Валевач');
    }
    public function testSplDetect129()
    {
        $this->assertEquals('S-Варенников', trim($this->object->getFullNameFormat('Варенников')).'-Варенников');
    }
    public function testSplDetect130()
    {
        $this->assertEquals('S-Васильев', trim($this->object->getFullNameFormat('Васильев')).'-Васильев');
    }
    public function testSplDetect131()
    {
        $this->assertEquals('S-Васин', trim($this->object->getFullNameFormat('Васин')).'-Васин');
    }
    public function testSplDetect132()
    {
        $this->assertEquals('S-Васнев', trim($this->object->getFullNameFormat('Васнев')).'-Васнев');
    }
    public function testSplDetect133()
    {
        $this->assertEquals('S-Васнецов', trim($this->object->getFullNameFormat('Васнецов')).'-Васнецов');
    }
    public function testSplDetect134()
    {
        $this->assertEquals('S-Вахров', trim($this->object->getFullNameFormat('Вахров')).'-Вахров');
    }
    public function testSplDetect135()
    {
        $this->assertEquals('S-Вахрушев', trim($this->object->getFullNameFormat('Вахрушев')).'-Вахрушев');
    }
    public function testSplDetect136()
    {
        $this->assertEquals('S-Венедиктов', trim($this->object->getFullNameFormat('Венедиктов')).'-Венедиктов');
    }
    public function testSplDetect137()
    {
        $this->assertEquals('S-Веденеев', trim($this->object->getFullNameFormat('Веденеев')).'-Веденеев');
    }
    public function testSplDetect138()
    {
        $this->assertEquals('S-Веденин', trim($this->object->getFullNameFormat('Веденин')).'-Веденин');
    }
    public function testSplDetect139()
    {
        $this->assertEquals('S-Ведерников', trim($this->object->getFullNameFormat('Ведерников')).'-Ведерников');
    }
    public function testSplDetect140()
    {
        $this->assertEquals('S-Вергунов', trim($this->object->getFullNameFormat('Вергунов')).'-Вергунов');
    }
    public function testSplDetect141()
    {
        $this->assertEquals('S-Верещагин', trim($this->object->getFullNameFormat('Верещагин')).'-Верещагин');
    }
    public function testSplDetect142()
    {
        $this->assertEquals('S-Вершинин', trim($this->object->getFullNameFormat('Вершинин')).'-Вершинин');
    }
    public function testSplDetect143()
    {
        $this->assertEquals('S-Веселов', trim($this->object->getFullNameFormat('Веселов')).'-Веселов');
    }
    public function testSplDetect144()
    {
        $this->assertEquals('S-Викашев', trim($this->object->getFullNameFormat('Викашев')).'-Викашев');
    }
    public function testSplDetect145()
    {
        $this->assertEquals('S-Виноградов', trim($this->object->getFullNameFormat('Виноградов')).'-Виноградов');
    }
    public function testSplDetect146()
    {
        $this->assertEquals('S-Винокуров', trim($this->object->getFullNameFormat('Винокуров')).'-Винокуров');
    }
    public function testSplDetect147()
    {
        $this->assertEquals('S-Витаев', trim($this->object->getFullNameFormat('Витаев')).'-Витаев');
    }
    public function testSplDetect148()
    {
        $this->assertEquals('S-Витвинин', trim($this->object->getFullNameFormat('Витвинин')).'-Витвинин');
    }
    public function testSplDetect149()
    {
        $this->assertEquals('S-Вицин', trim($this->object->getFullNameFormat('Вицин')).'-Вицин');
    }
    public function testSplDetect150()
    {
        $this->assertEquals('S-Водоватов', trim($this->object->getFullNameFormat('Водоватов')).'-Водоватов');
    }
    public function testSplDetect151()
    {
        $this->assertEquals('S-Воликов', trim($this->object->getFullNameFormat('Воликов')).'-Воликов');
    }
    public function testSplDetect152()
    {
        $this->assertEquals('S-Волков', trim($this->object->getFullNameFormat('Волков')).'-Волков');
    }
    public function testSplDetect153()
    {
        $this->assertEquals('S-Вольваков', trim($this->object->getFullNameFormat('Вольваков')).'-Вольваков');
    }
    public function testSplDetect154()
    {
        $this->assertEquals('S-Воробьев', trim($this->object->getFullNameFormat('Воробьев')).'-Воробьев');
    }
    public function testSplDetect155()
    {
        $this->assertEquals('S-Воронин', trim($this->object->getFullNameFormat('Воронин')).'-Воронин');
    }
    public function testSplDetect156()
    {
        $this->assertEquals('S-Воронов', trim($this->object->getFullNameFormat('Воронов')).'-Воронов');
    }
    public function testSplDetect157()
    {
        $this->assertEquals('S-Воронков', trim($this->object->getFullNameFormat('Воронков')).'-Воронков');
    }
    public function testSplDetect158()
    {
        $this->assertEquals('S-Воронцов', trim($this->object->getFullNameFormat('Воронцов')).'-Воронцов');
    }
    public function testSplDetect159()
    {
        $this->assertEquals('S-Воскобойников', trim($this->object->getFullNameFormat('Воскобойников')).'-Воскобойников');
    }
    public function testSplDetect160()
    {
        $this->assertEquals('S-Вотяков', trim($this->object->getFullNameFormat('Вотяков')).'-Вотяков');
    }
    public function testSplDetect161()
    {
        $this->assertEquals('S-Вырыпаев', trim($this->object->getFullNameFormat('Вырыпаев')).'-Вырыпаев');
    }
    public function testSplDetect162()
    {
        $this->assertEquals('S-Гавриков', trim($this->object->getFullNameFormat('Гавриков')).'-Гавриков');
    }
    public function testSplDetect163()
    {
        $this->assertEquals('S-Гаврилов', trim($this->object->getFullNameFormat('Гаврилов')).'-Гаврилов');
    }
    public function testSplDetect164()
    {
        $this->assertEquals('S-Гагарин', trim($this->object->getFullNameFormat('Гагарин')).'-Гагарин');
    }
    public function testSplDetect165()
    {
        $this->assertEquals('S-Гаголин', trim($this->object->getFullNameFormat('Гаголин')).'-Гаголин');
    }
    public function testSplDetect166()
    {
        $this->assertEquals('S-Галдин', trim($this->object->getFullNameFormat('Галдин')).'-Галдин');
    }
    public function testSplDetect167()
    {
        $this->assertEquals('S-Галкин', trim($this->object->getFullNameFormat('Галкин')).'-Галкин');
    }
    public function testSplDetect168()
    {
        $this->assertEquals('S-Галыгин', trim($this->object->getFullNameFormat('Галыгин')).'-Галыгин');
    }
    public function testSplDetect169()
    {
        $this->assertEquals('S-Гарин', trim($this->object->getFullNameFormat('Гарин')).'-Гарин');
    }
    public function testSplDetect170()
    {
        $this->assertEquals('S-Гачев', trim($this->object->getFullNameFormat('Гачев')).'-Гачев');
    }
    public function testSplDetect171()
    {
        $this->assertEquals('S-Генкин', trim($this->object->getFullNameFormat('Генкин')).'-Генкин');
    }
    public function testSplDetect172()
    {
        $this->assertEquals('S-Герасимов', trim($this->object->getFullNameFormat('Герасимов')).'-Герасимов');
    }
    public function testSplDetect173()
    {
        $this->assertEquals('S-Гибазов', trim($this->object->getFullNameFormat('Гибазов')).'-Гибазов');
    }
    public function testSplDetect174()
    {
        $this->assertEquals('S-Гилёв', trim($this->object->getFullNameFormat('Гилёв')).'-Гилёв');
    }
    public function testSplDetect175()
    {
        $this->assertEquals('S-Глазков', trim($this->object->getFullNameFormat('Глазков')).'-Глазков');
    }
    public function testSplDetect176()
    {
        $this->assertEquals('S-Голованов', trim($this->object->getFullNameFormat('Голованов')).'-Голованов');
    }
    public function testSplDetect177()
    {
        $this->assertEquals('S-Головин', trim($this->object->getFullNameFormat('Головин')).'-Головин');
    }
    public function testSplDetect178()
    {
        $this->assertEquals('S-Голодяев', trim($this->object->getFullNameFormat('Голодяев')).'-Голодяев');
    }
    public function testSplDetect179()
    {
        $this->assertEquals('S-Голубев', trim($this->object->getFullNameFormat('Голубев')).'-Голубев');
    }
    public function testSplDetect180()
    {
        $this->assertEquals('S-Голубов', trim($this->object->getFullNameFormat('Голубов')).'-Голубов');
    }
    public function testSplDetect181()
    {
        $this->assertEquals('S-Голубцов', trim($this->object->getFullNameFormat('Голубцов')).'-Голубцов');
    }
    public function testSplDetect182()
    {
        $this->assertEquals('S-Гончаров', trim($this->object->getFullNameFormat('Гончаров')).'-Гончаров');
    }
    public function testSplDetect183()
    {
        $this->assertEquals('S-Горбачёв', trim($this->object->getFullNameFormat('Горбачёв')).'-Горбачёв');
    }
    public function testSplDetect184()
    {
        $this->assertEquals('S-Горбунов', trim($this->object->getFullNameFormat('Горбунов')).'-Горбунов');
    }
    public function testSplDetect185()
    {
        $this->assertEquals('S-Горбунков', trim($this->object->getFullNameFormat('Горбунков')).'-Горбунков');
    }
    public function testSplDetect186()
    {
        $this->assertEquals('S-Горев', trim($this->object->getFullNameFormat('Горев')).'-Горев');
    }
    public function testSplDetect187()
    {
        $this->assertEquals('S-Горелов', trim($this->object->getFullNameFormat('Горелов')).'-Горелов');
    }
    public function testSplDetect188()
    {
        $this->assertEquals('S-Горемыкин', trim($this->object->getFullNameFormat('Горемыкин')).'-Горемыкин');
    }
    public function testSplDetect189()
    {
        $this->assertEquals('S-Горюнов', trim($this->object->getFullNameFormat('Горюнов')).'-Горюнов');
    }
    public function testSplDetect190()
    {
        $this->assertEquals('S-Грачёв', trim($this->object->getFullNameFormat('Грачёв')).'-Грачёв');
    }
    public function testSplDetect191()
    {
        $this->assertEquals('S-Графов', trim($this->object->getFullNameFormat('Графов')).'-Графов');
    }
    public function testSplDetect192()
    {
        $this->assertEquals('S-Гретченко', trim($this->object->getFullNameFormat('Гретченко')).'-Гретченко');
    }
    public function testSplDetect193()
    {
        $this->assertEquals('S-Гречко', trim($this->object->getFullNameFormat('Гречко')).'-Гречко');
    }
    public function testSplDetect194()
    {
        $this->assertEquals('S-Грешнев', trim($this->object->getFullNameFormat('Грешнев')).'-Грешнев');
    }
    public function testSplDetect195()
    {
        $this->assertEquals('S-Грибов', trim($this->object->getFullNameFormat('Грибов')).'-Грибов');
    }
    public function testSplDetect196()
    {
        $this->assertEquals('S-Грибоедов', trim($this->object->getFullNameFormat('Грибоедов')).'-Грибоедов');
    }
    public function testSplDetect197()
    {
        $this->assertEquals('S-Григорьев', trim($this->object->getFullNameFormat('Григорьев')).'-Григорьев');
    }
    public function testSplDetect198()
    {
        $this->assertEquals('S-Гринин', trim($this->object->getFullNameFormat('Гринин')).'-Гринин');
    }
    public function testSplDetect199()
    {
        $this->assertEquals('S-Гришин', trim($this->object->getFullNameFormat('Гришин')).'-Гришин');
    }
    public function testSplDetect200()
    {
        $this->assertEquals('S-Громов', trim($this->object->getFullNameFormat('Громов')).'-Громов');
    }
    public function testSplDetect201()
    {
        $this->assertEquals('S-Громыко', trim($this->object->getFullNameFormat('Громыко')).'-Громыко');
    }
    public function testSplDetect202()
    {
        $this->assertEquals('S-Гулин', trim($this->object->getFullNameFormat('Гулин')).'-Гулин');
    }
    public function testSplDetect203()
    {
        $this->assertEquals('S-Гурьянов', trim($this->object->getFullNameFormat('Гурьянов')).'-Гурьянов');
    }
    public function testSplDetect204()
    {
        $this->assertEquals('S-Гусаров', trim($this->object->getFullNameFormat('Гусаров')).'-Гусаров');
    }
    public function testSplDetect205()
    {
        $this->assertEquals('S-Гусев', trim($this->object->getFullNameFormat('Гусев')).'-Гусев');
    }
    public function testSplDetect206()
    {
        $this->assertEquals('S-Гунин', trim($this->object->getFullNameFormat('Гунин')).'-Гунин');
    }
    public function testSplDetect207()
    {
        $this->assertEquals('S-Гущин', trim($this->object->getFullNameFormat('Гущин')).'-Гущин');
    }
    public function testSplDetect208()
    {
        $this->assertEquals('S-Головаха', trim($this->object->getFullNameFormat('Головаха')).'-Головаха');
    }
    public function testSplDetect209()
    {
        $this->assertEquals('S-Дорофеев', trim($this->object->getFullNameFormat('Дорофеев')).'-Дорофеев');
    }
    public function testSplDetect210()
    {
        $this->assertEquals('S-Давыдкин', trim($this->object->getFullNameFormat('Давыдкин')).'-Давыдкин');
    }
    public function testSplDetect211()
    {
        $this->assertEquals('S-Данильцин', trim($this->object->getFullNameFormat('Данильцин')).'-Данильцин');
    }
    public function testSplDetect212()
    {
        $this->assertEquals('S-Дворников', trim($this->object->getFullNameFormat('Дворников')).'-Дворников');
    }
    public function testSplDetect213()
    {
        $this->assertEquals('S-Деменок', trim($this->object->getFullNameFormat('Деменок')).'-Деменок');
    }
    public function testSplDetect214()
    {
        $this->assertEquals('S-Дементьев', trim($this->object->getFullNameFormat('Дементьев')).'-Дементьев');
    }
    public function testSplDetect215()
    {
        $this->assertEquals('S-Демидов', trim($this->object->getFullNameFormat('Демидов')).'-Демидов');
    }
    public function testSplDetect216()
    {
        $this->assertEquals('S-Деникин', trim($this->object->getFullNameFormat('Деникин')).'-Деникин');
    }
    public function testSplDetect217()
    {
        $this->assertEquals('S-Дёгтин', trim($this->object->getFullNameFormat('Дёгтин')).'-Дёгтин');
    }
    public function testSplDetect218()
    {
        $this->assertEquals('S-Дегтярев', trim($this->object->getFullNameFormat('Дегтярев')).'-Дегтярев');
    }
    public function testSplDetect219()
    {
        $this->assertEquals('S-Дежнёв', trim($this->object->getFullNameFormat('Дежнёв')).'-Дежнёв');
    }
    public function testSplDetect220()
    {
        $this->assertEquals('S-Делов', trim($this->object->getFullNameFormat('Делов')).'-Делов');
    }
    public function testSplDetect221()
    {
        $this->assertEquals('S-Дементьев', trim($this->object->getFullNameFormat('Дементьев')).'-Дементьев');
    }
    public function testSplDetect222()
    {
        $this->assertEquals('S-Дёмин', trim($this->object->getFullNameFormat('Дёмин')).'-Дёмин');
    }
    public function testSplDetect223()
    {
        $this->assertEquals('S-Державин', trim($this->object->getFullNameFormat('Державин')).'-Державин');
    }
    public function testSplDetect224()
    {
        $this->assertEquals('S-Дернов', trim($this->object->getFullNameFormat('Дернов')).'-Дернов');
    }
    public function testSplDetect225()
    {
        $this->assertEquals('S-Десятков', trim($this->object->getFullNameFormat('Десятков')).'-Десятков');
    }
    public function testSplDetect226()
    {
        $this->assertEquals('S-Дмитриев', trim($this->object->getFullNameFormat('Дмитриев')).'-Дмитриев');
    }
    public function testSplDetect227()
    {
        $this->assertEquals('S-Добронравов', trim($this->object->getFullNameFormat('Добронравов')).'-Добронравов');
    }
    public function testSplDetect228()
    {
        $this->assertEquals('S-Добрынин', trim($this->object->getFullNameFormat('Добрынин')).'-Добрынин');
    }
    public function testSplDetect229()
    {
        $this->assertEquals('S-Долгоруков', trim($this->object->getFullNameFormat('Долгоруков')).'-Долгоруков');
    }
    public function testSplDetect230()
    {
        $this->assertEquals('S-Должиков', trim($this->object->getFullNameFormat('Должиков')).'-Должиков');
    }
    public function testSplDetect231()
    {
        $this->assertEquals('S-Домашев', trim($this->object->getFullNameFormat('Домашев')).'-Домашев');
    }
    public function testSplDetect232()
    {
        $this->assertEquals('S-Достовалов', trim($this->object->getFullNameFormat('Достовалов')).'-Достовалов');
    }
    public function testSplDetect233()
    {
        $this->assertEquals('S-Драгомиров', trim($this->object->getFullNameFormat('Драгомиров')).'-Драгомиров');
    }
    public function testSplDetect234()
    {
        $this->assertEquals('S-Дресвянин', trim($this->object->getFullNameFormat('Дресвянин')).'-Дресвянин');
    }
    public function testSplDetect235()
    {
        $this->assertEquals('S-Дрёмов', trim($this->object->getFullNameFormat('Дрёмов')).'-Дрёмов');
    }
    public function testSplDetect236()
    {
        $this->assertEquals('S-Друганин', trim($this->object->getFullNameFormat('Друганин')).'-Друганин');
    }
    public function testSplDetect237()
    {
        $this->assertEquals('S-Другов', trim($this->object->getFullNameFormat('Другов')).'-Другов');
    }
    public function testSplDetect238()
    {
        $this->assertEquals('S-Дубинин', trim($this->object->getFullNameFormat('Дубинин')).'-Дубинин');
    }
    public function testSplDetect239()
    {
        $this->assertEquals('S-Дубов', trim($this->object->getFullNameFormat('Дубов')).'-Дубов');
    }
    public function testSplDetect240()
    {
        $this->assertEquals('S-Дубровский', trim($this->object->getFullNameFormat('Дубровский')).'-Дубровский');
    }
    public function testSplDetect241()
    {
        $this->assertEquals('S-Дульцев', trim($this->object->getFullNameFormat('Дульцев')).'-Дульцев');
    }
    public function testSplDetect242()
    {
        $this->assertEquals('S-Думановский', trim($this->object->getFullNameFormat('Думановский')).'-Думановский');
    }
    public function testSplDetect243()
    {
        $this->assertEquals('S-Дуров', trim($this->object->getFullNameFormat('Дуров')).'-Дуров');
    }
    public function testSplDetect244()
    {
        $this->assertEquals('S-Дятлов', trim($this->object->getFullNameFormat('Дятлов')).'-Дятлов');
    }
    public function testSplDetect245()
    {
        $this->assertEquals('S-Евдокимов', trim($this->object->getFullNameFormat('Евдокимов')).'-Евдокимов');
    }
    public function testSplDetect246()
    {
        $this->assertEquals('S-Евстигнеев', trim($this->object->getFullNameFormat('Евстигнеев')).'-Евстигнеев');
    }
    public function testSplDetect247()
    {
        $this->assertEquals('S-Егоров', trim($this->object->getFullNameFormat('Егоров')).'-Егоров');
    }
    public function testSplDetect248()
    {
        $this->assertEquals('S-Едемский', trim($this->object->getFullNameFormat('Едемский')).'-Едемский');
    }
    public function testSplDetect249()
    {
        $this->assertEquals('S-Ежов', trim($this->object->getFullNameFormat('Ежов')).'-Ежов');
    }
    public function testSplDetect250()
    {
        $this->assertEquals('S-Елагин', trim($this->object->getFullNameFormat('Елагин')).'-Елагин');
    }
    public function testSplDetect251()
    {
        $this->assertEquals('S-Елизаров', trim($this->object->getFullNameFormat('Елизаров')).'-Елизаров');
    }
    public function testSplDetect252()
    {
        $this->assertEquals('S-Елисеев', trim($this->object->getFullNameFormat('Елисеев')).'-Елисеев');
    }
    public function testSplDetect253()
    {
        $this->assertEquals('S-Ельцин', trim($this->object->getFullNameFormat('Ельцин')).'-Ельцин');
    }
    public function testSplDetect254()
    {
        $this->assertEquals('S-Ельцов', trim($this->object->getFullNameFormat('Ельцов')).'-Ельцов');
    }
    public function testSplDetect255()
    {
        $this->assertEquals('S-Емельяненко', trim($this->object->getFullNameFormat('Емельяненко')).'-Емельяненко');
    }
    public function testSplDetect256()
    {
        $this->assertEquals('S-Емельянов', trim($this->object->getFullNameFormat('Емельянов')).'-Емельянов');
    }
    public function testSplDetect257()
    {
        $this->assertEquals('S-Енин', trim($this->object->getFullNameFormat('Енин')).'-Енин');
    }
    public function testSplDetect258()
    {
        $this->assertEquals('S-Ерзов', trim($this->object->getFullNameFormat('Ерзов')).'-Ерзов');
    }
    public function testSplDetect259()
    {
        $this->assertEquals('S-Ермаков', trim($this->object->getFullNameFormat('Ермаков')).'-Ермаков');
    }
    public function testSplDetect260()
    {
        $this->assertEquals('S-Ермилов', trim($this->object->getFullNameFormat('Ермилов')).'-Ермилов');
    }
    public function testSplDetect261()
    {
        $this->assertEquals('S-Еромеев', trim($this->object->getFullNameFormat('Еромеев')).'-Еромеев');
    }
    public function testSplDetect262()
    {
        $this->assertEquals('S-Ерофеев', trim($this->object->getFullNameFormat('Ерофеев')).'-Ерофеев');
    }
    public function testSplDetect263()
    {
        $this->assertEquals('S-Ершов', trim($this->object->getFullNameFormat('Ершов')).'-Ершов');
    }
    public function testSplDetect264()
    {
        $this->assertEquals('S-Есипов', trim($this->object->getFullNameFormat('Есипов')).'-Есипов');
    }
    public function testSplDetect265()
    {
        $this->assertEquals('S-Ефимов', trim($this->object->getFullNameFormat('Ефимов')).'-Ефимов');
    }
    public function testSplDetect266()
    {
        $this->assertEquals('S-Ефремов', trim($this->object->getFullNameFormat('Ефремов')).'-Ефремов');
    }
    public function testSplDetect267()
    {
        $this->assertEquals('S-Емелин', trim($this->object->getFullNameFormat('Емелин')).'-Емелин');
    }
    public function testSplDetect268()
    {
        $this->assertEquals('S-Ерохин', trim($this->object->getFullNameFormat('Ерохин')).'-Ерохин');
    }
    public function testSplDetect269()
    {
        $this->assertEquals('S-Ерёмин', trim($this->object->getFullNameFormat('Ерёмин')).'-Ерёмин');
    }
    public function testSplDetect270()
    {
        $this->assertEquals('S-Ешевский', trim($this->object->getFullNameFormat('Ешевский')).'-Ешевский');
    }
    public function testSplDetect271()
    {
        $this->assertEquals('S-Жабин', trim($this->object->getFullNameFormat('Жабин')).'-Жабин');
    }
    public function testSplDetect272()
    {
        $this->assertEquals('S-Жарков', trim($this->object->getFullNameFormat('Жарков')).'-Жарков');
    }
    public function testSplDetect273()
    {
        $this->assertEquals('S-Жарыхин', trim($this->object->getFullNameFormat('Жарыхин')).'-Жарыхин');
    }
    public function testSplDetect274()
    {
        $this->assertEquals('S-Жвиков', trim($this->object->getFullNameFormat('Жвиков')).'-Жвиков');
    }
    public function testSplDetect275()
    {
        $this->assertEquals('S-Жданов', trim($this->object->getFullNameFormat('Жданов')).'-Жданов');
    }
    public function testSplDetect276()
    {
        $this->assertEquals('S-Жеглов', trim($this->object->getFullNameFormat('Жеглов')).'-Жеглов');
    }
    public function testSplDetect277()
    {
        $this->assertEquals('S-Железкин', trim($this->object->getFullNameFormat('Железкин')).'-Железкин');
    }
    public function testSplDetect278()
    {
        $this->assertEquals('S-Жестакова', trim($this->object->getFullNameFormat('Жестакова')).'-Жестакова');
    }
    public function testSplDetect279()
    {
        $this->assertEquals('S-Живенков', trim($this->object->getFullNameFormat('Живенков')).'-Живенков');
    }
    public function testSplDetect280()
    {
        $this->assertEquals('S-Жиглов', trim($this->object->getFullNameFormat('Жиглов')).'-Жиглов');
    }
    public function testSplDetect281()
    {
        $this->assertEquals('S-Жигунов', trim($this->object->getFullNameFormat('Жигунов')).'-Жигунов');
    }
    public function testSplDetect282()
    {
        $this->assertEquals('S-Жидков', trim($this->object->getFullNameFormat('Жидков')).'-Жидков');
    }
    public function testSplDetect283()
    {
        $this->assertEquals('S-Жикин', trim($this->object->getFullNameFormat('Жикин')).'-Жикин');
    }
    public function testSplDetect284()
    {
        $this->assertEquals('S-Жилин', trim($this->object->getFullNameFormat('Жилин')).'-Жилин');
    }
    public function testSplDetect285()
    {
        $this->assertEquals('S-Жилов', trim($this->object->getFullNameFormat('Жилов')).'-Жилов');
    }
    public function testSplDetect286()
    {
        $this->assertEquals('S-Жолдин', trim($this->object->getFullNameFormat('Жолдин')).'-Жолдин');
    }
    public function testSplDetect287()
    {
        $this->assertEquals('S-Жуков', trim($this->object->getFullNameFormat('Жуков')).'-Жуков');
    }
    public function testSplDetect288()
    {
        $this->assertEquals('S-Жутов', trim($this->object->getFullNameFormat('Жутов')).'-Жутов');
    }
    public function testSplDetect289()
    {
        $this->assertEquals('S-Журавлёв', trim($this->object->getFullNameFormat('Журавлёв')).'-Журавлёв');
    }
    public function testSplDetect290()
    {
        $this->assertEquals('S-Журов', trim($this->object->getFullNameFormat('Журов')).'-Журов');
    }
    public function testSplDetect291()
    {
        $this->assertEquals('S-Заврагин', trim($this->object->getFullNameFormat('Заврагин')).'-Заврагин');
    }
    public function testSplDetect292()
    {
        $this->assertEquals('S-Завражин', trim($this->object->getFullNameFormat('Завражин')).'-Завражин');
    }
    public function testSplDetect293()
    {
        $this->assertEquals('S-Завражнов', trim($this->object->getFullNameFormat('Завражнов')).'-Завражнов');
    }
    public function testSplDetect294()
    {
        $this->assertEquals('S-Завражный', trim($this->object->getFullNameFormat('Завражный')).'-Завражный');
    }
    public function testSplDetect295()
    {
        $this->assertEquals('S-Завразин', trim($this->object->getFullNameFormat('Завразин')).'-Завразин');
    }
    public function testSplDetect296()
    {
        $this->assertEquals('S-Завьялов', trim($this->object->getFullNameFormat('Завьялов')).'-Завьялов');
    }
    public function testSplDetect297()
    {
        $this->assertEquals('S-Задорнов', trim($this->object->getFullNameFormat('Задорнов')).'-Задорнов');
    }
    public function testSplDetect298()
    {
        $this->assertEquals('S-Задорожный', trim($this->object->getFullNameFormat('Задорожный')).'-Задорожный');
    }
    public function testSplDetect299()
    {
        $this->assertEquals('S-Зайцев', trim($this->object->getFullNameFormat('Зайцев')).'-Зайцев');
    }
    public function testSplDetect300()
    {
        $this->assertEquals('S-Закревский', trim($this->object->getFullNameFormat('Закревский')).'-Закревский');
    }
    public function testSplDetect301()
    {
        $this->assertEquals('S-Закрятин', trim($this->object->getFullNameFormat('Закрятин')).'-Закрятин');
    }
    public function testSplDetect302()
    {
        $this->assertEquals('S-Захаров', trim($this->object->getFullNameFormat('Захаров')).'-Захаров');
    }
    public function testSplDetect303()
    {
        $this->assertEquals('S-Захарьин', trim($this->object->getFullNameFormat('Захарьин')).'-Захарьин');
    }
    public function testSplDetect304()
    {
        $this->assertEquals('S-Звягин', trim($this->object->getFullNameFormat('Звягин')).'-Звягин');
    }
    public function testSplDetect305()
    {
        $this->assertEquals('S-Зёмин', trim($this->object->getFullNameFormat('Зёмин')).'-Зёмин');
    }
    public function testSplDetect306()
    {
        $this->assertEquals('S-Зимин', trim($this->object->getFullNameFormat('Зимин')).'-Зимин');
    }
    public function testSplDetect307()
    {
        $this->assertEquals('S-Золин', trim($this->object->getFullNameFormat('Золин')).'-Золин');
    }
    public function testSplDetect308()
    {
        $this->assertEquals('S-Зонов', trim($this->object->getFullNameFormat('Зонов')).'-Зонов');
    }
    public function testSplDetect309()
    {
        $this->assertEquals('S-Зубков', trim($this->object->getFullNameFormat('Зубков')).'-Зубков');
    }
    public function testSplDetect310()
    {
        $this->assertEquals('S-Зубов', trim($this->object->getFullNameFormat('Зубов')).'-Зубов');
    }
    public function testSplDetect311()
    {
        $this->assertEquals('S-Зуев', trim($this->object->getFullNameFormat('Зуев')).'-Зуев');
    }
    public function testSplDetect312()
    {
        $this->assertEquals('S-Зуйков', trim($this->object->getFullNameFormat('Зуйков')).'-Зуйков');
    }
    public function testSplDetect313()
    {
        $this->assertEquals('S-Зимняков', trim($this->object->getFullNameFormat('Зимняков')).'-Зимняков');
    }
    public function testSplDetect314()
    {
        $this->assertEquals('S-Зинченко', trim($this->object->getFullNameFormat('Зинченко')).'-Зинченко');
    }
    public function testSplDetect315()
    {
        $this->assertEquals('S-Зыкин', trim($this->object->getFullNameFormat('Зыкин')).'-Зыкин');
    }
    public function testSplDetect316()
    {
        $this->assertEquals('S-Зырянов', trim($this->object->getFullNameFormat('Зырянов')).'-Зырянов');
    }
    public function testSplDetect317()
    {
        $this->assertEquals('S-Зюганов', trim($this->object->getFullNameFormat('Зюганов')).'-Зюганов');
    }
    public function testSplDetect318()
    {
        $this->assertEquals('S-Зверев', trim($this->object->getFullNameFormat('Зверев')).'-Зверев');
    }
    public function testSplDetect319()
    {
        $this->assertEquals('S-Игнаткович', trim($this->object->getFullNameFormat('Игнаткович')).'-Игнаткович');
    }
    public function testSplDetect320()
    {
        $this->assertEquals('S-Ивазов', trim($this->object->getFullNameFormat('Ивазов')).'-Ивазов');
    }
    public function testSplDetect321()
    {
        $this->assertEquals('S-Ивакин', trim($this->object->getFullNameFormat('Ивакин')).'-Ивакин');
    }
    public function testSplDetect322()
    {
        $this->assertEquals('S-Ибрагимов', trim($this->object->getFullNameFormat('Ибрагимов')).'-Ибрагимов');
    }
    public function testSplDetect323()
    {
        $this->assertEquals('S-Иванов', trim($this->object->getFullNameFormat('Иванов')).'-Иванов');
    }
    public function testSplDetect324()
    {
        $this->assertEquals('S-Иванков', trim($this->object->getFullNameFormat('Иванков')).'-Иванков');
    }
    public function testSplDetect325()
    {
        $this->assertEquals('S-Ивашин', trim($this->object->getFullNameFormat('Ивашин')).'-Ивашин');
    }
    public function testSplDetect326()
    {
        $this->assertEquals('S-Ивашов', trim($this->object->getFullNameFormat('Ивашов')).'-Ивашов');
    }
    public function testSplDetect327()
    {
        $this->assertEquals('S-Ивкин', trim($this->object->getFullNameFormat('Ивкин')).'-Ивкин');
    }
    public function testSplDetect328()
    {
        $this->assertEquals('S-Иволгин', trim($this->object->getFullNameFormat('Иволгин')).'-Иволгин');
    }
    public function testSplDetect329()
    {
        $this->assertEquals('S-Игнатьев', trim($this->object->getFullNameFormat('Игнатьев')).'-Игнатьев');
    }
    public function testSplDetect330()
    {
        $this->assertEquals('S-Игошин', trim($this->object->getFullNameFormat('Игошин')).'-Игошин');
    }
    public function testSplDetect331()
    {
        $this->assertEquals('S-Исмайлов', trim($this->object->getFullNameFormat('Исмайлов')).'-Исмайлов');
    }
    public function testSplDetect332()
    {
        $this->assertEquals('S-Измайлов', trim($this->object->getFullNameFormat('Измайлов')).'-Измайлов');
    }
    public function testSplDetect333()
    {
        $this->assertEquals('S-Иканов', trim($this->object->getFullNameFormat('Иканов')).'-Иканов');
    }
    public function testSplDetect334()
    {
        $this->assertEquals('S-Икашев', trim($this->object->getFullNameFormat('Икашев')).'-Икашев');
    }
    public function testSplDetect335()
    {
        $this->assertEquals('S-Ильин', trim($this->object->getFullNameFormat('Ильин')).'-Ильин');
    }
    public function testSplDetect336()
    {
        $this->assertEquals('S-Илькун', trim($this->object->getFullNameFormat('Илькун')).'-Илькун');
    }
    public function testSplDetect337()
    {
        $this->assertEquals('S-Илюшин', trim($this->object->getFullNameFormat('Илюшин')).'-Илюшин');
    }
    public function testSplDetect338()
    {
        $this->assertEquals('S-Ильюшин', trim($this->object->getFullNameFormat('Ильюшин')).'-Ильюшин');
    }
    public function testSplDetect339()
    {
        $this->assertEquals('S-Иноземцев', trim($this->object->getFullNameFormat('Иноземцев')).'-Иноземцев');
    }
    public function testSplDetect340()
    {
        $this->assertEquals('S-Ипатьев', trim($this->object->getFullNameFormat('Ипатьев')).'-Ипатьев');
    }
    public function testSplDetect341()
    {
        $this->assertEquals('S-Исаев', trim($this->object->getFullNameFormat('Исаев')).'-Исаев');
    }
    public function testSplDetect342()
    {
        $this->assertEquals('S-Истомин', trim($this->object->getFullNameFormat('Истомин')).'-Истомин');
    }
    public function testSplDetect343()
    {
        $this->assertEquals('S-Кабинов', trim($this->object->getFullNameFormat('Кабинов')).'-Кабинов');
    }
    public function testSplDetect344()
    {
        $this->assertEquals('S-Каблуков', trim($this->object->getFullNameFormat('Каблуков')).'-Каблуков');
    }
    public function testSplDetect345()
    {
        $this->assertEquals('S-Каверин', trim($this->object->getFullNameFormat('Каверин')).'-Каверин');
    }
    public function testSplDetect346()
    {
        $this->assertEquals('S-Кадников', trim($this->object->getFullNameFormat('Кадников')).'-Кадников');
    }
    public function testSplDetect347()
    {
        $this->assertEquals('S-Кадцын', trim($this->object->getFullNameFormat('Кадцын')).'-Кадцын');
    }
    public function testSplDetect348()
    {
        $this->assertEquals('S-Казаков', trim($this->object->getFullNameFormat('Казаков')).'-Казаков');
    }
    public function testSplDetect349()
    {
        $this->assertEquals('S-Казанцев', trim($this->object->getFullNameFormat('Казанцев')).'-Казанцев');
    }
    public function testSplDetect350()
    {
        $this->assertEquals('S-Казарезов', trim($this->object->getFullNameFormat('Казарезов')).'-Казарезов');
    }
    public function testSplDetect351()
    {
        $this->assertEquals('S-Калашник', trim($this->object->getFullNameFormat('Калашник')).'-Калашник');
    }
    public function testSplDetect352()
    {
        $this->assertEquals('S-Калганов', trim($this->object->getFullNameFormat('Калганов')).'-Калганов');
    }
    public function testSplDetect353()
    {
        $this->assertEquals('S-Каменских', trim($this->object->getFullNameFormat('Каменских')).'-Каменских');
    }
    public function testSplDetect354()
    {
        $this->assertEquals('S-Камкин', trim($this->object->getFullNameFormat('Камкин')).'-Камкин');
    }
    public function testSplDetect355()
    {
        $this->assertEquals('S-Каналин', trim($this->object->getFullNameFormat('Каналин')).'-Каналин');
    }
    public function testSplDetect356()
    {
        $this->assertEquals('S-Кандинский', trim($this->object->getFullNameFormat('Кандинский')).'-Кандинский');
    }
    public function testSplDetect357()
    {
        $this->assertEquals('S-Капица', trim($this->object->getFullNameFormat('Капица')).'-Капица');
    }
    public function testSplDetect358()
    {
        $this->assertEquals('S-Капралов', trim($this->object->getFullNameFormat('Капралов')).'-Капралов');
    }
    public function testSplDetect359()
    {
        $this->assertEquals('S-Караваев', trim($this->object->getFullNameFormat('Караваев')).'-Караваев');
    }
    public function testSplDetect360()
    {
        $this->assertEquals('S-Караулов', trim($this->object->getFullNameFormat('Караулов')).'-Караулов');
    }
    public function testSplDetect361()
    {
        $this->assertEquals('S-Карев', trim($this->object->getFullNameFormat('Карев')).'-Карев');
    }
    public function testSplDetect362()
    {
        $this->assertEquals('S-Каретников', trim($this->object->getFullNameFormat('Каретников')).'-Каретников');
    }
    public function testSplDetect363()
    {
        $this->assertEquals('S-Каргин', trim($this->object->getFullNameFormat('Каргин')).'-Каргин');
    }
    public function testSplDetect364()
    {
        $this->assertEquals('S-Карташов', trim($this->object->getFullNameFormat('Карташов')).'-Карташов');
    }
    public function testSplDetect365()
    {
        $this->assertEquals('S-Карчагин', trim($this->object->getFullNameFormat('Карчагин')).'-Карчагин');
    }
    public function testSplDetect366()
    {
        $this->assertEquals('S-Касатый', trim($this->object->getFullNameFormat('Касатый')).'-Касатый');
    }
    public function testSplDetect367()
    {
        $this->assertEquals('S-Катин', trim($this->object->getFullNameFormat('Катин')).'-Катин');
    }
    public function testSplDetect368()
    {
        $this->assertEquals('S-Качусов', trim($this->object->getFullNameFormat('Качусов')).'-Качусов');
    }
    public function testSplDetect369()
    {
        $this->assertEquals('S-Кашарин', trim($this->object->getFullNameFormat('Кашарин')).'-Кашарин');
    }
    public function testSplDetect370()
    {
        $this->assertEquals('S-Каширин', trim($this->object->getFullNameFormat('Каширин')).'-Каширин');
    }
    public function testSplDetect371()
    {
        $this->assertEquals('S-Кашканов', trim($this->object->getFullNameFormat('Кашканов')).'-Кашканов');
    }
    public function testSplDetect372()
    {
        $this->assertEquals('S-Кашников', trim($this->object->getFullNameFormat('Кашников')).'-Кашников');
    }
    public function testSplDetect373()
    {
        $this->assertEquals('S-Киреев', trim($this->object->getFullNameFormat('Киреев')).'-Киреев');
    }
    public function testSplDetect374()
    {
        $this->assertEquals('S-Кирилишен', trim($this->object->getFullNameFormat('Кирилишен')).'-Кирилишен');
    }
    public function testSplDetect375()
    {
        $this->assertEquals('S-Кирилловский', trim($this->object->getFullNameFormat('Кирилловский')).'-Кирилловский');
    }
    public function testSplDetect376()
    {
        $this->assertEquals('S-Кирилов', trim($this->object->getFullNameFormat('Кирилов')).'-Кирилов');
    }
    public function testSplDetect377()
    {
        $this->assertEquals('S-Кирсанов', trim($this->object->getFullNameFormat('Кирсанов')).'-Кирсанов');
    }
    public function testSplDetect378()
    {
        $this->assertEquals('S-Кирьянов', trim($this->object->getFullNameFormat('Кирьянов')).'-Кирьянов');
    }
    public function testSplDetect379()
    {
        $this->assertEquals('S-Клепахов', trim($this->object->getFullNameFormat('Клепахов')).'-Клепахов');
    }
    public function testSplDetect380()
    {
        $this->assertEquals('S-Климов', trim($this->object->getFullNameFormat('Климов')).'-Климов');
    }
    public function testSplDetect381()
    {
        $this->assertEquals('S-Климушин', trim($this->object->getFullNameFormat('Климушин')).'-Климушин');
    }
    public function testSplDetect382()
    {
        $this->assertEquals('S-Клоков', trim($this->object->getFullNameFormat('Клоков')).'-Клоков');
    }
    public function testSplDetect383()
    {
        $this->assertEquals('S-Князев', trim($this->object->getFullNameFormat('Князев')).'-Князев');
    }
    public function testSplDetect384()
    {
        $this->assertEquals('S-Ковалёв', trim($this->object->getFullNameFormat('Ковалёв')).'-Ковалёв');
    }
    public function testSplDetect385()
    {
        $this->assertEquals('S-Ковалевский', trim($this->object->getFullNameFormat('Ковалевский')).'-Ковалевский');
    }
    public function testSplDetect386()
    {
        $this->assertEquals('S-Ковров', trim($this->object->getFullNameFormat('Ковров')).'-Ковров');
    }
    public function testSplDetect387()
    {
        $this->assertEquals('S-Ковшутин', trim($this->object->getFullNameFormat('Ковшутин')).'-Ковшутин');
    }
    public function testSplDetect388()
    {
        $this->assertEquals('S-Кожуров', trim($this->object->getFullNameFormat('Кожуров')).'-Кожуров');
    }
    public function testSplDetect389()
    {
        $this->assertEquals('S-Кожухов', trim($this->object->getFullNameFormat('Кожухов')).'-Кожухов');
    }
    public function testSplDetect390()
    {
        $this->assertEquals('S-Козаков', trim($this->object->getFullNameFormat('Козаков')).'-Козаков');
    }
    public function testSplDetect391()
    {
        $this->assertEquals('S-Козарь', trim($this->object->getFullNameFormat('Козарь')).'-Козарь');
    }
    public function testSplDetect392()
    {
        $this->assertEquals('S-Козлов', trim($this->object->getFullNameFormat('Козлов')).'-Козлов');
    }
    public function testSplDetect393()
    {
        $this->assertEquals('S-Козловский', trim($this->object->getFullNameFormat('Козловский')).'-Козловский');
    }
    public function testSplDetect394()
    {
        $this->assertEquals('S-Колесников', trim($this->object->getFullNameFormat('Колесников')).'-Колесников');
    }
    public function testSplDetect395()
    {
        $this->assertEquals('S-Колонтаев', trim($this->object->getFullNameFormat('Колонтаев')).'-Колонтаев');
    }
    public function testSplDetect396()
    {
        $this->assertEquals('S-Колосов', trim($this->object->getFullNameFormat('Колосов')).'-Колосов');
    }
    public function testSplDetect397()
    {
        $this->assertEquals('S-Кольцов', trim($this->object->getFullNameFormat('Кольцов')).'-Кольцов');
    }
    public function testSplDetect398()
    {
        $this->assertEquals('S-Комаров', trim($this->object->getFullNameFormat('Комаров')).'-Комаров');
    }
    public function testSplDetect399()
    {
        $this->assertEquals('S-Комзин', trim($this->object->getFullNameFormat('Комзин')).'-Комзин');
    }
    public function testSplDetect400()
    {
        $this->assertEquals('S-Комолов', trim($this->object->getFullNameFormat('Комолов')).'-Комолов');
    }
    public function testSplDetect401()
    {
        $this->assertEquals('S-Кондратьев', trim($this->object->getFullNameFormat('Кондратьев')).'-Кондратьев');
    }
    public function testSplDetect402()
    {
        $this->assertEquals('S-Конев', trim($this->object->getFullNameFormat('Конев')).'-Конев');
    }
    public function testSplDetect403()
    {
        $this->assertEquals('S-Конников', trim($this->object->getFullNameFormat('Конников')).'-Конников');
    }
    public function testSplDetect404()
    {
        $this->assertEquals('S-Коновалов', trim($this->object->getFullNameFormat('Коновалов')).'-Коновалов');
    }
    public function testSplDetect405()
    {
        $this->assertEquals('S-Коньяков', trim($this->object->getFullNameFormat('Коньяков')).'-Коньяков');
    }
    public function testSplDetect406()
    {
        $this->assertEquals('S-Коняшев', trim($this->object->getFullNameFormat('Коняшев')).'-Коняшев');
    }
    public function testSplDetect407()
    {
        $this->assertEquals('S-Копейкин', trim($this->object->getFullNameFormat('Копейкин')).'-Копейкин');
    }
    public function testSplDetect408()
    {
        $this->assertEquals('S-Коренев', trim($this->object->getFullNameFormat('Коренев')).'-Коренев');
    }
    public function testSplDetect409()
    {
        $this->assertEquals('S-Коренёв', trim($this->object->getFullNameFormat('Коренёв')).'-Коренёв');
    }
    public function testSplDetect410()
    {
        $this->assertEquals('S-Коржаков', trim($this->object->getFullNameFormat('Коржаков')).'-Коржаков');
    }
    public function testSplDetect411()
    {
        $this->assertEquals('S-Коржев', trim($this->object->getFullNameFormat('Коржев')).'-Коржев');
    }
    public function testSplDetect412()
    {
        $this->assertEquals('S-Корнев', trim($this->object->getFullNameFormat('Корнев')).'-Корнев');
    }
    public function testSplDetect413()
    {
        $this->assertEquals('S-Корнилов', trim($this->object->getFullNameFormat('Корнилов')).'-Корнилов');
    }
    public function testSplDetect414()
    {
        $this->assertEquals('S-Коровин', trim($this->object->getFullNameFormat('Коровин')).'-Коровин');
    }
    public function testSplDetect415()
    {
        $this->assertEquals('S-Королёв', trim($this->object->getFullNameFormat('Королёв')).'-Королёв');
    }
    public function testSplDetect416()
    {
        $this->assertEquals('S-Коротаев', trim($this->object->getFullNameFormat('Коротаев')).'-Коротаев');
    }
    public function testSplDetect417()
    {
        $this->assertEquals('S-Корчагин', trim($this->object->getFullNameFormat('Корчагин')).'-Корчагин');
    }
    public function testSplDetect418()
    {
        $this->assertEquals('S-Косарёв', trim($this->object->getFullNameFormat('Косарёв')).'-Косарёв');
    }
    public function testSplDetect419()
    {
        $this->assertEquals('S-Косков', trim($this->object->getFullNameFormat('Косков')).'-Косков');
    }
    public function testSplDetect420()
    {
        $this->assertEquals('S-Косомов', trim($this->object->getFullNameFormat('Косомов')).'-Косомов');
    }
    public function testSplDetect421()
    {
        $this->assertEquals('S-Косоруков', trim($this->object->getFullNameFormat('Косоруков')).'-Косоруков');
    }
    public function testSplDetect422()
    {
        $this->assertEquals('S-Костин', trim($this->object->getFullNameFormat('Костин')).'-Костин');
    }
    public function testSplDetect423()
    {
        $this->assertEquals('S-Косяк', trim($this->object->getFullNameFormat('Косяк')).'-Косяк');
    }
    public function testSplDetect424()
    {
        $this->assertEquals('S-Котов', trim($this->object->getFullNameFormat('Котов')).'-Котов');
    }
    public function testSplDetect425()
    {
        $this->assertEquals('S-Костомаров', trim($this->object->getFullNameFormat('Костомаров')).'-Костомаров');
    }
    public function testSplDetect426()
    {
        $this->assertEquals('S-Коченков', trim($this->object->getFullNameFormat('Коченков')).'-Коченков');
    }
    public function testSplDetect427()
    {
        $this->assertEquals('S-Кошелев', trim($this->object->getFullNameFormat('Кошелев')).'-Кошелев');
    }
    public function testSplDetect428()
    {
        $this->assertEquals('S-Кошечкин', trim($this->object->getFullNameFormat('Кошечкин')).'-Кошечкин');
    }
    public function testSplDetect429()
    {
        $this->assertEquals('S-Кошкин', trim($this->object->getFullNameFormat('Кошкин')).'-Кошкин');
    }
    public function testSplDetect430()
    {
        $this->assertEquals('S-Кравчук', trim($this->object->getFullNameFormat('Кравчук')).'-Кравчук');
    }
    public function testSplDetect431()
    {
        $this->assertEquals('S-Краев', trim($this->object->getFullNameFormat('Краев')).'-Краев');
    }
    public function testSplDetect432()
    {
        $this->assertEquals('S-Краснов', trim($this->object->getFullNameFormat('Краснов')).'-Краснов');
    }
    public function testSplDetect433()
    {
        $this->assertEquals('S-Красноперов', trim($this->object->getFullNameFormat('Красноперов')).'-Красноперов');
    }
    public function testSplDetect434()
    {
        $this->assertEquals('S-Кропанин', trim($this->object->getFullNameFormat('Кропанин')).'-Кропанин');
    }
    public function testSplDetect435()
    {
        $this->assertEquals('S-Кругликов', trim($this->object->getFullNameFormat('Кругликов')).'-Кругликов');
    }
    public function testSplDetect436()
    {
        $this->assertEquals('S-Круглов', trim($this->object->getFullNameFormat('Круглов')).'-Круглов');
    }
    public function testSplDetect437()
    {
        $this->assertEquals('S-Крупин', trim($this->object->getFullNameFormat('Крупин')).'-Крупин');
    }
    public function testSplDetect438()
    {
        $this->assertEquals('S-Крутин', trim($this->object->getFullNameFormat('Крутин')).'-Крутин');
    }
    public function testSplDetect439()
    {
        $this->assertEquals('S-Кручинкин', trim($this->object->getFullNameFormat('Кручинкин')).'-Кручинкин');
    }
    public function testSplDetect440()
    {
        $this->assertEquals('S-Крылов', trim($this->object->getFullNameFormat('Крылов')).'-Крылов');
    }
    public function testSplDetect441()
    {
        $this->assertEquals('S-Крысов', trim($this->object->getFullNameFormat('Крысов')).'-Крысов');
    }
    public function testSplDetect442()
    {
        $this->assertEquals('S-Крюков', trim($this->object->getFullNameFormat('Крюков')).'-Крюков');
    }
    public function testSplDetect443()
    {
        $this->assertEquals('S-Кубланов', trim($this->object->getFullNameFormat('Кубланов')).'-Кубланов');
    }
    public function testSplDetect444()
    {
        $this->assertEquals('S-Кудашов', trim($this->object->getFullNameFormat('Кудашов')).'-Кудашов');
    }
    public function testSplDetect445()
    {
        $this->assertEquals('S-Кудрин', trim($this->object->getFullNameFormat('Кудрин')).'-Кудрин');
    }
    public function testSplDetect446()
    {
        $this->assertEquals('S-Кудрявцев', trim($this->object->getFullNameFormat('Кудрявцев')).'-Кудрявцев');
    }
    public function testSplDetect447()
    {
        $this->assertEquals('S-Кудряшов', trim($this->object->getFullNameFormat('Кудряшов')).'-Кудряшов');
    }
    public function testSplDetect448()
    {
        $this->assertEquals('S-Кузнецов', trim($this->object->getFullNameFormat('Кузнецов')).'-Кузнецов');
    }
    public function testSplDetect449()
    {
        $this->assertEquals('S-Кузьмин', trim($this->object->getFullNameFormat('Кузьмин')).'-Кузьмин');
    }
    public function testSplDetect450()
    {
        $this->assertEquals('S-Куимов', trim($this->object->getFullNameFormat('Куимов')).'-Куимов');
    }
    public function testSplDetect451()
    {
        $this->assertEquals('S-Куклачёв', trim($this->object->getFullNameFormat('Куклачёв')).'-Куклачёв');
    }
    public function testSplDetect452()
    {
        $this->assertEquals('S-Кулагин', trim($this->object->getFullNameFormat('Кулагин')).'-Кулагин');
    }
    public function testSplDetect453()
    {
        $this->assertEquals('S-Кулибин', trim($this->object->getFullNameFormat('Кулибин')).'-Кулибин');
    }
    public function testSplDetect454()
    {
        $this->assertEquals('S-Куликов', trim($this->object->getFullNameFormat('Куликов')).'-Куликов');
    }
    public function testSplDetect455()
    {
        $this->assertEquals('S-Куракин', trim($this->object->getFullNameFormat('Куракин')).'-Куракин');
    }
    public function testSplDetect456()
    {
        $this->assertEquals('S-Курбатов', trim($this->object->getFullNameFormat('Курбатов')).'-Курбатов');
    }
    public function testSplDetect457()
    {
        $this->assertEquals('S-Курганов', trim($this->object->getFullNameFormat('Курганов')).'-Курганов');
    }
    public function testSplDetect458()
    {
        $this->assertEquals('S-Курдин', trim($this->object->getFullNameFormat('Курдин')).'-Курдин');
    }
    public function testSplDetect459()
    {
        $this->assertEquals('S-Курепин', trim($this->object->getFullNameFormat('Курепин')).'-Курепин');
    }
    public function testSplDetect460()
    {
        $this->assertEquals('S-Курсалин', trim($this->object->getFullNameFormat('Курсалин')).'-Курсалин');
    }
    public function testSplDetect461()
    {
        $this->assertEquals('S-Кутиков', trim($this->object->getFullNameFormat('Кутиков')).'-Кутиков');
    }
    public function testSplDetect462()
    {
        $this->assertEquals('S-Кутузов', trim($this->object->getFullNameFormat('Кутузов')).'-Кутузов');
    }
    public function testSplDetect463()
    {
        $this->assertEquals('S-Кутяков', trim($this->object->getFullNameFormat('Кутяков')).'-Кутяков');
    }
    public function testSplDetect464()
    {
        $this->assertEquals('S-Лавров', trim($this->object->getFullNameFormat('Лавров')).'-Лавров');
    }
    public function testSplDetect465()
    {
        $this->assertEquals('S-Лагутов', trim($this->object->getFullNameFormat('Лагутов')).'-Лагутов');
    }
    public function testSplDetect466()
    {
        $this->assertEquals('S-Лазарев', trim($this->object->getFullNameFormat('Лазарев')).'-Лазарев');
    }
    public function testSplDetect467()
    {
        $this->assertEquals('S-Ланцов', trim($this->object->getFullNameFormat('Ланцов')).'-Ланцов');
    }
    public function testSplDetect468()
    {
        $this->assertEquals('S-Лапидус', trim($this->object->getFullNameFormat('Лапидус')).'-Лапидус');
    }
    public function testSplDetect469()
    {
        $this->assertEquals('S-Лапотников', trim($this->object->getFullNameFormat('Лапотников')).'-Лапотников');
    }
    public function testSplDetect470()
    {
        $this->assertEquals('S-Лаптев', trim($this->object->getFullNameFormat('Лаптев')).'-Лаптев');
    }
    public function testSplDetect471()
    {
        $this->assertEquals('S-Лапунов', trim($this->object->getFullNameFormat('Лапунов')).'-Лапунов');
    }
    public function testSplDetect472()
    {
        $this->assertEquals('S-Лапухов', trim($this->object->getFullNameFormat('Лапухов')).'-Лапухов');
    }
    public function testSplDetect473()
    {
        $this->assertEquals('S-Ларин', trim($this->object->getFullNameFormat('Ларин')).'-Ларин');
    }
    public function testSplDetect474()
    {
        $this->assertEquals('S-Ларионов', trim($this->object->getFullNameFormat('Ларионов')).'-Ларионов');
    }
    public function testSplDetect475()
    {
        $this->assertEquals('S-Ласкутин', trim($this->object->getFullNameFormat('Ласкутин')).'-Ласкутин');
    }
    public function testSplDetect476()
    {
        $this->assertEquals('S-Лачинов', trim($this->object->getFullNameFormat('Лачинов')).'-Лачинов');
    }
    public function testSplDetect477()
    {
        $this->assertEquals('S-Лачков', trim($this->object->getFullNameFormat('Лачков')).'-Лачков');
    }
    public function testSplDetect478()
    {
        $this->assertEquals('S-Лебедев', trim($this->object->getFullNameFormat('Лебедев')).'-Лебедев');
    }
    public function testSplDetect479()
    {
        $this->assertEquals('S-Лебединский', trim($this->object->getFullNameFormat('Лебединский')).'-Лебединский');
    }
    public function testSplDetect480()
    {
        $this->assertEquals('S-Лебединцев', trim($this->object->getFullNameFormat('Лебединцев')).'-Лебединцев');
    }
    public function testSplDetect481()
    {
        $this->assertEquals('S-Легкодимов', trim($this->object->getFullNameFormat('Легкодимов')).'-Легкодимов');
    }
    public function testSplDetect482()
    {
        $this->assertEquals('S-Леонов', trim($this->object->getFullNameFormat('Леонов')).'-Леонов');
    }
    public function testSplDetect483()
    {
        $this->assertEquals('S-Лепёхин', trim($this->object->getFullNameFormat('Лепёхин')).'-Лепёхин');
    }
    public function testSplDetect484()
    {
        $this->assertEquals('S-Лесков', trim($this->object->getFullNameFormat('Лесков')).'-Лесков');
    }
    public function testSplDetect485()
    {
        $this->assertEquals('S-Лесничий', trim($this->object->getFullNameFormat('Лесничий')).'-Лесничий');
    }
    public function testSplDetect486()
    {
        $this->assertEquals('S-Летов', trim($this->object->getFullNameFormat('Летов')).'-Летов');
    }
    public function testSplDetect487()
    {
        $this->assertEquals('S-Лещёв', trim($this->object->getFullNameFormat('Лещёв')).'-Лещёв');
    }
    public function testSplDetect488()
    {
        $this->assertEquals('S-Лилов', trim($this->object->getFullNameFormat('Лилов')).'-Лилов');
    }
    public function testSplDetect489()
    {
        $this->assertEquals('S-Липин', trim($this->object->getFullNameFormat('Липин')).'-Липин');
    }
    public function testSplDetect490()
    {
        $this->assertEquals('S-Лисицын', trim($this->object->getFullNameFormat('Лисицын')).'-Лисицын');
    }
    public function testSplDetect491()
    {
        $this->assertEquals('S-Лихачёв', trim($this->object->getFullNameFormat('Лихачёв')).'-Лихачёв');
    }
    public function testSplDetect492()
    {
        $this->assertEquals('S-Лобан', trim($this->object->getFullNameFormat('Лобан')).'-Лобан');
    }
    public function testSplDetect493()
    {
        $this->assertEquals('S-Лобанов', trim($this->object->getFullNameFormat('Лобанов')).'-Лобанов');
    }
    public function testSplDetect494()
    {
        $this->assertEquals('S-Лобов', trim($this->object->getFullNameFormat('Лобов')).'-Лобов');
    }
    public function testSplDetect495()
    {
        $this->assertEquals('S-Логинов', trim($this->object->getFullNameFormat('Логинов')).'-Логинов');
    }
    public function testSplDetect496()
    {
        $this->assertEquals('S-Логиновский', trim($this->object->getFullNameFormat('Логиновский')).'-Логиновский');
    }
    public function testSplDetect497()
    {
        $this->assertEquals('S-Локтев', trim($this->object->getFullNameFormat('Локтев')).'-Локтев');
    }
    public function testSplDetect498()
    {
        $this->assertEquals('S-Ломоносов', trim($this->object->getFullNameFormat('Ломоносов')).'-Ломоносов');
    }
    public function testSplDetect499()
    {
        $this->assertEquals('S-Ломтев', trim($this->object->getFullNameFormat('Ломтев')).'-Ломтев');
    }
    public function testSplDetect500()
    {
        $this->assertEquals('S-Лопатин', trim($this->object->getFullNameFormat('Лопатин')).'-Лопатин');
    }
    public function testSplDetect501()
    {
        $this->assertEquals('S-Лосев', trim($this->object->getFullNameFormat('Лосев')).'-Лосев');
    }
    public function testSplDetect502()
    {
        $this->assertEquals('S-Лосевский', trim($this->object->getFullNameFormat('Лосевский')).'-Лосевский');
    }
    public function testSplDetect503()
    {
        $this->assertEquals('S-Лоскутников', trim($this->object->getFullNameFormat('Лоскутников')).'-Лоскутников');
    }
    public function testSplDetect504()
    {
        $this->assertEquals('S-Лоскутов', trim($this->object->getFullNameFormat('Лоскутов')).'-Лоскутов');
    }
    public function testSplDetect505()
    {
        $this->assertEquals('S-Лужков', trim($this->object->getFullNameFormat('Лужков')).'-Лужков');
    }
    public function testSplDetect506()
    {
        $this->assertEquals('S-Лыткин', trim($this->object->getFullNameFormat('Лыткин')).'-Лыткин');
    }
    public function testSplDetect507()
    {
        $this->assertEquals('S-Любимов', trim($this->object->getFullNameFormat('Любимов')).'-Любимов');
    }
    public function testSplDetect508()
    {
        $this->assertEquals('S-Любов', trim($this->object->getFullNameFormat('Любов')).'-Любов');
    }
    public function testSplDetect509()
    {
        $this->assertEquals('S-Лягушкин', trim($this->object->getFullNameFormat('Лягушкин')).'-Лягушкин');
    }
    public function testSplDetect510()
    {
        $this->assertEquals('S-Лягушов', trim($this->object->getFullNameFormat('Лягушов')).'-Лягушов');
    }
    public function testSplDetect511()
    {
        $this->assertEquals('S-Лялюшкин', trim($this->object->getFullNameFormat('Лялюшкин')).'-Лялюшкин');
    }
    public function testSplDetect512()
    {
        $this->assertEquals('S-Лясин', trim($this->object->getFullNameFormat('Лясин')).'-Лясин');
    }
    public function testSplDetect513()
    {
        $this->assertEquals('S-Ляпин', trim($this->object->getFullNameFormat('Ляпин')).'-Ляпин');
    }
    public function testSplDetect514()
    {
        $this->assertEquals('S-Майсак', trim($this->object->getFullNameFormat('Майсак')).'-Майсак');
    }
    public function testSplDetect515()
    {
        $this->assertEquals('S-Макаров', trim($this->object->getFullNameFormat('Макаров')).'-Макаров');
    }
    public function testSplDetect516()
    {
        $this->assertEquals('S-Маклаков', trim($this->object->getFullNameFormat('Маклаков')).'-Маклаков');
    }
    public function testSplDetect517()
    {
        $this->assertEquals('S-Максимов', trim($this->object->getFullNameFormat('Максимов')).'-Максимов');
    }
    public function testSplDetect518()
    {
        $this->assertEquals('S-Максимушкин', trim($this->object->getFullNameFormat('Максимушкин')).'-Максимушкин');
    }
    public function testSplDetect519()
    {
        $this->assertEquals('S-Максудов', trim($this->object->getFullNameFormat('Максудов')).'-Максудов');
    }
    public function testSplDetect520()
    {
        $this->assertEquals('S-Малахов', trim($this->object->getFullNameFormat('Малахов')).'-Малахов');
    }
    public function testSplDetect521()
    {
        $this->assertEquals('S-Маликов', trim($this->object->getFullNameFormat('Маликов')).'-Маликов');
    }
    public function testSplDetect522()
    {
        $this->assertEquals('S-Малинин', trim($this->object->getFullNameFormat('Малинин')).'-Малинин');
    }
    public function testSplDetect523()
    {
        $this->assertEquals('S-Малышев', trim($this->object->getFullNameFormat('Малышев')).'-Малышев');
    }
    public function testSplDetect524()
    {
        $this->assertEquals('S-Малюгин', trim($this->object->getFullNameFormat('Малюгин')).'-Малюгин');
    }
    public function testSplDetect525()
    {
        $this->assertEquals('S-Малыхин', trim($this->object->getFullNameFormat('Малыхин')).'-Малыхин');
    }
    public function testSplDetect526()
    {
        $this->assertEquals('S-Мамонов', trim($this->object->getFullNameFormat('Мамонов')).'-Мамонов');
    }
    public function testSplDetect527()
    {
        $this->assertEquals('S-Манин', trim($this->object->getFullNameFormat('Манин')).'-Манин');
    }
    public function testSplDetect528()
    {
        $this->assertEquals('S-Маркин', trim($this->object->getFullNameFormat('Маркин')).'-Маркин');
    }
    public function testSplDetect529()
    {
        $this->assertEquals('S-Марков', trim($this->object->getFullNameFormat('Марков')).'-Марков');
    }
    public function testSplDetect530()
    {
        $this->assertEquals('S-Маслак', trim($this->object->getFullNameFormat('Маслак')).'-Маслак');
    }
    public function testSplDetect531()
    {
        $this->assertEquals('S-Маслов', trim($this->object->getFullNameFormat('Маслов')).'-Маслов');
    }
    public function testSplDetect532()
    {
        $this->assertEquals('S-Матвеев', trim($this->object->getFullNameFormat('Матвеев')).'-Матвеев');
    }
    public function testSplDetect533()
    {
        $this->assertEquals('S-Матвеева', trim($this->object->getFullNameFormat('Матвеева')).'-Матвеева');
    }
    public function testSplDetect534()
    {
        $this->assertEquals('S-Машарин', trim($this->object->getFullNameFormat('Машарин')).'-Машарин');
    }
    public function testSplDetect535()
    {
        $this->assertEquals('S-Машир', trim($this->object->getFullNameFormat('Машир')).'-Машир');
    }
    public function testSplDetect536()
    {
        $this->assertEquals('S-Медведев', trim($this->object->getFullNameFormat('Медведев')).'-Медведев');
    }
    public function testSplDetect537()
    {
        $this->assertEquals('S-Медников', trim($this->object->getFullNameFormat('Медников')).'-Медников');
    }
    public function testSplDetect538()
    {
        $this->assertEquals('S-Меледин', trim($this->object->getFullNameFormat('Меледин')).'-Меледин');
    }
    public function testSplDetect539()
    {
        $this->assertEquals('S-Мелехов', trim($this->object->getFullNameFormat('Мелехов')).'-Мелехов');
    }
    public function testSplDetect540()
    {
        $this->assertEquals('S-Меликов', trim($this->object->getFullNameFormat('Меликов')).'-Меликов');
    }
    public function testSplDetect541()
    {
        $this->assertEquals('S-Мельников', trim($this->object->getFullNameFormat('Мельников')).'-Мельников');
    }
    public function testSplDetect542()
    {
        $this->assertEquals('S-Меркушев', trim($this->object->getFullNameFormat('Меркушев')).'-Меркушев');
    }
    public function testSplDetect543()
    {
        $this->assertEquals('S-Мещеряков', trim($this->object->getFullNameFormat('Мещеряков')).'-Мещеряков');
    }
    public function testSplDetect544()
    {
        $this->assertEquals('S-Мигунов', trim($this->object->getFullNameFormat('Мигунов')).'-Мигунов');
    }
    public function testSplDetect545()
    {
        $this->assertEquals('S-Мизенов', trim($this->object->getFullNameFormat('Мизенов')).'-Мизенов');
    }
    public function testSplDetect546()
    {
        $this->assertEquals('S-Милехин', trim($this->object->getFullNameFormat('Милехин')).'-Милехин');
    }
    public function testSplDetect547()
    {
        $this->assertEquals('S-Милорадов', trim($this->object->getFullNameFormat('Милорадов')).'-Милорадов');
    }
    public function testSplDetect548()
    {
        $this->assertEquals('S-Милюков', trim($this->object->getFullNameFormat('Милюков')).'-Милюков');
    }
    public function testSplDetect549()
    {
        $this->assertEquals('S-Милютин', trim($this->object->getFullNameFormat('Милютин')).'-Милютин');
    }
    public function testSplDetect550()
    {
        $this->assertEquals('S-Минеев', trim($this->object->getFullNameFormat('Минеев')).'-Минеев');
    }
    public function testSplDetect551()
    {
        $this->assertEquals('S-Минин', trim($this->object->getFullNameFormat('Минин')).'-Минин');
    }
    public function testSplDetect552()
    {
        $this->assertEquals('S-Минкин', trim($this->object->getFullNameFormat('Минкин')).'-Минкин');
    }
    public function testSplDetect553()
    {
        $this->assertEquals('S-Миронов', trim($this->object->getFullNameFormat('Миронов')).'-Миронов');
    }
    public function testSplDetect554()
    {
        $this->assertEquals('S-Митин', trim($this->object->getFullNameFormat('Митин')).'-Митин');
    }
    public function testSplDetect555()
    {
        $this->assertEquals('S-Митрофанов', trim($this->object->getFullNameFormat('Митрофанов')).'-Митрофанов');
    }
    public function testSplDetect556()
    {
        $this->assertEquals('S-Михайлов', trim($this->object->getFullNameFormat('Михайлов')).'-Михайлов');
    }
    public function testSplDetect557()
    {
        $this->assertEquals('S-Михеев', trim($this->object->getFullNameFormat('Михеев')).'-Михеев');
    }
    public function testSplDetect558()
    {
        $this->assertEquals('S-Мишутин', trim($this->object->getFullNameFormat('Мишутин')).'-Мишутин');
    }
    public function testSplDetect559()
    {
        $this->assertEquals('S-Моисеев', trim($this->object->getFullNameFormat('Моисеев')).'-Моисеев');
    }
    public function testSplDetect560()
    {
        $this->assertEquals('S-Молчанов', trim($this->object->getFullNameFormat('Молчанов')).'-Молчанов');
    }
    public function testSplDetect561()
    {
        $this->assertEquals('S-Моренов', trim($this->object->getFullNameFormat('Моренов')).'-Моренов');
    }
    public function testSplDetect562()
    {
        $this->assertEquals('S-Морозов', trim($this->object->getFullNameFormat('Морозов')).'-Морозов');
    }
    public function testSplDetect563()
    {
        $this->assertEquals('S-Мосалев', trim($this->object->getFullNameFormat('Мосалев')).'-Мосалев');
    }
    public function testSplDetect564()
    {
        $this->assertEquals('S-Москвин', trim($this->object->getFullNameFormat('Москвин')).'-Москвин');
    }
    public function testSplDetect565()
    {
        $this->assertEquals('S-Муратов', trim($this->object->getFullNameFormat('Муратов')).'-Муратов');
    }
    public function testSplDetect566()
    {
        $this->assertEquals('S-Мухортов', trim($this->object->getFullNameFormat('Мухортов')).'-Мухортов');
    }
    public function testSplDetect567()
    {
        $this->assertEquals('S-Мягков', trim($this->object->getFullNameFormat('Мягков')).'-Мягков');
    }
    public function testSplDetect568()
    {
        $this->assertEquals('S-Мясников', trim($this->object->getFullNameFormat('Мясников')).'-Мясников');
    }
    public function testSplDetect569()
    {
        $this->assertEquals('S-Мятлев', trim($this->object->getFullNameFormat('Мятлев')).'-Мятлев');
    }
    public function testSplDetect570()
    {
        $this->assertEquals('S-Набатов', trim($this->object->getFullNameFormat('Набатов')).'-Набатов');
    }
    public function testSplDetect571()
    {
        $this->assertEquals('S-Нардин', trim($this->object->getFullNameFormat('Нардин')).'-Нардин');
    }
    public function testSplDetect572()
    {
        $this->assertEquals('S-Наумов', trim($this->object->getFullNameFormat('Наумов')).'-Наумов');
    }
    public function testSplDetect573()
    {
        $this->assertEquals('S-Невзоров', trim($this->object->getFullNameFormat('Невзоров')).'-Невзоров');
    }
    public function testSplDetect574()
    {
        $this->assertEquals('S-Неделяев', trim($this->object->getFullNameFormat('Неделяев')).'-Неделяев');
    }
    public function testSplDetect575()
    {
        $this->assertEquals('S-Нежданов', trim($this->object->getFullNameFormat('Нежданов')).'-Нежданов');
    }
    public function testSplDetect576()
    {
        $this->assertEquals('S-Ненашев', trim($this->object->getFullNameFormat('Ненашев')).'-Ненашев');
    }
    public function testSplDetect577()
    {
        $this->assertEquals('S-Нестеров', trim($this->object->getFullNameFormat('Нестеров')).'-Нестеров');
    }
    public function testSplDetect578()
    {
        $this->assertEquals('S-Нечаев', trim($this->object->getFullNameFormat('Нечаев')).'-Нечаев');
    }
    public function testSplDetect579()
    {
        $this->assertEquals('S-Никитин', trim($this->object->getFullNameFormat('Никитин')).'-Никитин');
    }
    public function testSplDetect580()
    {
        $this->assertEquals('S-Никифоров', trim($this->object->getFullNameFormat('Никифоров')).'-Никифоров');
    }
    public function testSplDetect581()
    {
        $this->assertEquals('S-Николаев', trim($this->object->getFullNameFormat('Николаев')).'-Николаев');
    }
    public function testSplDetect582()
    {
        $this->assertEquals('S-Никонов', trim($this->object->getFullNameFormat('Никонов')).'-Никонов');
    }
    public function testSplDetect583()
    {
        $this->assertEquals('S-Никулин', trim($this->object->getFullNameFormat('Никулин')).'-Никулин');
    }
    public function testSplDetect584()
    {
        $this->assertEquals('S-Некрасов', trim($this->object->getFullNameFormat('Некрасов')).'-Некрасов');
    }
    public function testSplDetect585()
    {
        $this->assertEquals('S-Новиков', trim($this->object->getFullNameFormat('Новиков')).'-Новиков');
    }
    public function testSplDetect586()
    {
        $this->assertEquals('S-Новосельцев', trim($this->object->getFullNameFormat('Новосельцев')).'-Новосельцев');
    }
    public function testSplDetect587()
    {
        $this->assertEquals('S-Носачёв', trim($this->object->getFullNameFormat('Носачёв')).'-Носачёв');
    }
    public function testSplDetect588()
    {
        $this->assertEquals('S-Носков', trim($this->object->getFullNameFormat('Носков')).'-Носков');
    }
    public function testSplDetect589()
    {
        $this->assertEquals('S-Носов', trim($this->object->getFullNameFormat('Носов')).'-Носов');
    }
    public function testSplDetect590()
    {
        $this->assertEquals('S-Оболенский', trim($this->object->getFullNameFormat('Оболенский')).'-Оболенский');
    }
    public function testSplDetect591()
    {
        $this->assertEquals('S-Оборин', trim($this->object->getFullNameFormat('Оборин')).'-Оборин');
    }
    public function testSplDetect592()
    {
        $this->assertEquals('S-Образцов', trim($this->object->getFullNameFormat('Образцов')).'-Образцов');
    }
    public function testSplDetect593()
    {
        $this->assertEquals('S-Обухов', trim($this->object->getFullNameFormat('Обухов')).'-Обухов');
    }
    public function testSplDetect594()
    {
        $this->assertEquals('S-Овечкин', trim($this->object->getFullNameFormat('Овечкин')).'-Овечкин');
    }
    public function testSplDetect595()
    {
        $this->assertEquals('S-Огородников', trim($this->object->getFullNameFormat('Огородников')).'-Огородников');
    }
    public function testSplDetect596()
    {
        $this->assertEquals('S-Огурцов', trim($this->object->getFullNameFormat('Огурцов')).'-Огурцов');
    }
    public function testSplDetect597()
    {
        $this->assertEquals('S-Озеров', trim($this->object->getFullNameFormat('Озеров')).'-Озеров');
    }
    public function testSplDetect598()
    {
        $this->assertEquals('S-Ольховский', trim($this->object->getFullNameFormat('Ольховский')).'-Ольховский');
    }
    public function testSplDetect599()
    {
        $this->assertEquals('S-Онегин', trim($this->object->getFullNameFormat('Онегин')).'-Онегин');
    }
    public function testSplDetect600()
    {
        $this->assertEquals('S-Опокин', trim($this->object->getFullNameFormat('Опокин')).'-Опокин');
    }
    public function testSplDetect601()
    {
        $this->assertEquals('S-Орлов', trim($this->object->getFullNameFormat('Орлов')).'-Орлов');
    }
    public function testSplDetect602()
    {
        $this->assertEquals('S-Осинцев', trim($this->object->getFullNameFormat('Осинцев')).'-Осинцев');
    }
    public function testSplDetect603()
    {
        $this->assertEquals('S-Остальцев', trim($this->object->getFullNameFormat('Остальцев')).'-Остальцев');
    }
    public function testSplDetect604()
    {
        $this->assertEquals('S-Остапюк', trim($this->object->getFullNameFormat('Остапюк')).'-Остапюк');
    }
    public function testSplDetect605()
    {
        $this->assertEquals('S-Островерхов', trim($this->object->getFullNameFormat('Островерхов')).'-Островерхов');
    }
    public function testSplDetect606()
    {
        $this->assertEquals('S-Островский', trim($this->object->getFullNameFormat('Островский')).'-Островский');
    }
    public function testSplDetect607()
    {
        $this->assertEquals('S-Павлов', trim($this->object->getFullNameFormat('Павлов')).'-Павлов');
    }
    public function testSplDetect608()
    {
        $this->assertEquals('S-Панарин', trim($this->object->getFullNameFormat('Панарин')).'-Панарин');
    }
    public function testSplDetect609()
    {
        $this->assertEquals('S-Панин', trim($this->object->getFullNameFormat('Панин')).'-Панин');
    }
    public function testSplDetect610()
    {
        $this->assertEquals('S-Панкин', trim($this->object->getFullNameFormat('Панкин')).'-Панкин');
    }
    public function testSplDetect611()
    {
        $this->assertEquals('S-Панков', trim($this->object->getFullNameFormat('Панков')).'-Панков');
    }
    public function testSplDetect612()
    {
        $this->assertEquals('S-Панфилов', trim($this->object->getFullNameFormat('Панфилов')).'-Панфилов');
    }
    public function testSplDetect613()
    {
        $this->assertEquals('S-Панькив', trim($this->object->getFullNameFormat('Панькив')).'-Панькив');
    }
    public function testSplDetect614()
    {
        $this->assertEquals('S-Папанов', trim($this->object->getFullNameFormat('Папанов')).'-Папанов');
    }
    public function testSplDetect615()
    {
        $this->assertEquals('S-Пахомов', trim($this->object->getFullNameFormat('Пахомов')).'-Пахомов');
    }
    public function testSplDetect616()
    {
        $this->assertEquals('S-Пенкин', trim($this->object->getFullNameFormat('Пенкин')).'-Пенкин');
    }
    public function testSplDetect617()
    {
        $this->assertEquals('S-Первак', trim($this->object->getFullNameFormat('Первак')).'-Первак');
    }
    public function testSplDetect618()
    {
        $this->assertEquals('S-Переверзев', trim($this->object->getFullNameFormat('Переверзев')).'-Переверзев');
    }
    public function testSplDetect619()
    {
        $this->assertEquals('S-Перевёртов', trim($this->object->getFullNameFormat('Перевёртов')).'-Перевёртов');
    }
    public function testSplDetect620()
    {
        $this->assertEquals('S-Пересторонин', trim($this->object->getFullNameFormat('Пересторонин')).'-Пересторонин');
    }
    public function testSplDetect621()
    {
        $this->assertEquals('S-Перехваткин', trim($this->object->getFullNameFormat('Перехваткин')).'-Перехваткин');
    }
    public function testSplDetect622()
    {
        $this->assertEquals('S-Перов', trim($this->object->getFullNameFormat('Перов')).'-Перов');
    }
    public function testSplDetect623()
    {
        $this->assertEquals('S-Перьмяков', trim($this->object->getFullNameFormat('Перьмяков')).'-Перьмяков');
    }
    public function testSplDetect624()
    {
        $this->assertEquals('S-Пестов', trim($this->object->getFullNameFormat('Пестов')).'-Пестов');
    }
    public function testSplDetect625()
    {
        $this->assertEquals('S-Петров', trim($this->object->getFullNameFormat('Петров')).'-Петров');
    }
    public function testSplDetect626()
    {
        $this->assertEquals('S-Петухов', trim($this->object->getFullNameFormat('Петухов')).'-Петухов');
    }
    public function testSplDetect627()
    {
        $this->assertEquals('S-Печеников', trim($this->object->getFullNameFormat('Печеников')).'-Печеников');
    }
    public function testSplDetect628()
    {
        $this->assertEquals('S-Пивоваров', trim($this->object->getFullNameFormat('Пивоваров')).'-Пивоваров');
    }
    public function testSplDetect629()
    {
        $this->assertEquals('S-Пирогов', trim($this->object->getFullNameFormat('Пирогов')).'-Пирогов');
    }
    public function testSplDetect630()
    {
        $this->assertEquals('S-Пирожков', trim($this->object->getFullNameFormat('Пирожков')).'-Пирожков');
    }
    public function testSplDetect631()
    {
        $this->assertEquals('S-Пичугин', trim($this->object->getFullNameFormat('Пичугин')).'-Пичугин');
    }
    public function testSplDetect632()
    {
        $this->assertEquals('S-Погодин', trim($this->object->getFullNameFormat('Погодин')).'-Погодин');
    }
    public function testSplDetect633()
    {
        $this->assertEquals('S-Погребнов', trim($this->object->getFullNameFormat('Погребнов')).'-Погребнов');
    }
    public function testSplDetect634()
    {
        $this->assertEquals('S-Подшивалов', trim($this->object->getFullNameFormat('Подшивалов')).'-Подшивалов');
    }
    public function testSplDetect635()
    {
        $this->assertEquals('S-Поздняков', trim($this->object->getFullNameFormat('Поздняков')).'-Поздняков');
    }
    public function testSplDetect636()
    {
        $this->assertEquals('S-Покровский', trim($this->object->getFullNameFormat('Покровский')).'-Покровский');
    }
    public function testSplDetect637()
    {
        $this->assertEquals('S-Поливанов', trim($this->object->getFullNameFormat('Поливанов')).'-Поливанов');
    }
    public function testSplDetect638()
    {
        $this->assertEquals('S-Полушин', trim($this->object->getFullNameFormat('Полушин')).'-Полушин');
    }
    public function testSplDetect639()
    {
        $this->assertEquals('S-Полищук', trim($this->object->getFullNameFormat('Полищук')).'-Полищук');
    }
    public function testSplDetect640()
    {
        $this->assertEquals('S-Полторак', trim($this->object->getFullNameFormat('Полторак')).'-Полторак');
    }
    public function testSplDetect641()
    {
        $this->assertEquals('S-Поляков', trim($this->object->getFullNameFormat('Поляков')).'-Поляков');
    }
    public function testSplDetect642()
    {
        $this->assertEquals('S-Поникаров', trim($this->object->getFullNameFormat('Поникаров')).'-Поникаров');
    }
    public function testSplDetect643()
    {
        $this->assertEquals('S-Пономарёв', trim($this->object->getFullNameFormat('Пономарёв')).'-Пономарёв');
    }
    public function testSplDetect644()
    {
        $this->assertEquals('S-Пончиков', trim($this->object->getFullNameFormat('Пончиков')).'-Пончиков');
    }
    public function testSplDetect645()
    {
        $this->assertEquals('S-Попов', trim($this->object->getFullNameFormat('Попов')).'-Попов');
    }
    public function testSplDetect646()
    {
        $this->assertEquals('S-Попырин', trim($this->object->getFullNameFormat('Попырин')).'-Попырин');
    }
    public function testSplDetect647()
    {
        $this->assertEquals('S-Посохов', trim($this->object->getFullNameFormat('Посохов')).'-Посохов');
    }
    public function testSplDetect648()
    {
        $this->assertEquals('S-Потапов', trim($this->object->getFullNameFormat('Потапов')).'-Потапов');
    }
    public function testSplDetect649()
    {
        $this->assertEquals('S-Потёмкин', trim($this->object->getFullNameFormat('Потёмкин')).'-Потёмкин');
    }
    public function testSplDetect650()
    {
        $this->assertEquals('S-Праздников', trim($this->object->getFullNameFormat('Праздников')).'-Праздников');
    }
    public function testSplDetect651()
    {
        $this->assertEquals('S-Примаков', trim($this->object->getFullNameFormat('Примаков')).'-Примаков');
    }
    public function testSplDetect652()
    {
        $this->assertEquals('S-Приходько', trim($this->object->getFullNameFormat('Приходько')).'-Приходько');
    }
    public function testSplDetect653()
    {
        $this->assertEquals('S-Проничев', trim($this->object->getFullNameFormat('Проничев')).'-Проничев');
    }
    public function testSplDetect654()
    {
        $this->assertEquals('S-Протасов', trim($this->object->getFullNameFormat('Протасов')).'-Протасов');
    }
    public function testSplDetect655()
    {
        $this->assertEquals('S-Прохоров', trim($this->object->getFullNameFormat('Прохоров')).'-Прохоров');
    }
    public function testSplDetect656()
    {
        $this->assertEquals('S-Пугачёв', trim($this->object->getFullNameFormat('Пугачёв')).'-Пугачёв');
    }
    public function testSplDetect657()
    {
        $this->assertEquals('S-Пугин', trim($this->object->getFullNameFormat('Пугин')).'-Пугин');
    }
    public function testSplDetect658()
    {
        $this->assertEquals('S-Пузанов', trim($this->object->getFullNameFormat('Пузанов')).'-Пузанов');
    }
    public function testSplDetect659()
    {
        $this->assertEquals('S-Путилин', trim($this->object->getFullNameFormat('Путилин')).'-Путилин');
    }
    public function testSplDetect660()
    {
        $this->assertEquals('S-Путин', trim($this->object->getFullNameFormat('Путин')).'-Путин');
    }
    public function testSplDetect661()
    {
        $this->assertEquals('S-Путятин', trim($this->object->getFullNameFormat('Путятин')).'-Путятин');
    }
    public function testSplDetect662()
    {
        $this->assertEquals('S-Пушкин', trim($this->object->getFullNameFormat('Пушкин')).'-Пушкин');
    }
    public function testSplDetect663()
    {
        $this->assertEquals('S-Пыжалов', trim($this->object->getFullNameFormat('Пыжалов')).'-Пыжалов');
    }
    public function testSplDetect664()
    {
        $this->assertEquals('S-Пырьев', trim($this->object->getFullNameFormat('Пырьев')).'-Пырьев');
    }
    public function testSplDetect665()
    {
        $this->assertEquals('S-Рабинович', trim($this->object->getFullNameFormat('Рабинович')).'-Рабинович');
    }
    public function testSplDetect666()
    {
        $this->assertEquals('S-Разин', trim($this->object->getFullNameFormat('Разин')).'-Разин');
    }
    public function testSplDetect667()
    {
        $this->assertEquals('S-Разуваев', trim($this->object->getFullNameFormat('Разуваев')).'-Разуваев');
    }
    public function testSplDetect668()
    {
        $this->assertEquals('S-Распопов', trim($this->object->getFullNameFormat('Распопов')).'-Распопов');
    }
    public function testSplDetect669()
    {
        $this->assertEquals('S-Распутин', trim($this->object->getFullNameFormat('Распутин')).'-Распутин');
    }
    public function testSplDetect670()
    {
        $this->assertEquals('S-Расторгуев', trim($this->object->getFullNameFormat('Расторгуев')).'-Расторгуев');
    }
    public function testSplDetect671()
    {
        $this->assertEquals('S-Ремизов', trim($this->object->getFullNameFormat('Ремизов')).'-Ремизов');
    }
    public function testSplDetect672()
    {
        $this->assertEquals('S-Репин', trim($this->object->getFullNameFormat('Репин')).'-Репин');
    }
    public function testSplDetect673()
    {
        $this->assertEquals('S-Решетилов', trim($this->object->getFullNameFormat('Решетилов')).'-Решетилов');
    }
    public function testSplDetect674()
    {
        $this->assertEquals('S-Решетников', trim($this->object->getFullNameFormat('Решетников')).'-Решетников');
    }
    public function testSplDetect675()
    {
        $this->assertEquals('S-Родзянко', trim($this->object->getFullNameFormat('Родзянко')).'-Родзянко');
    }
    public function testSplDetect676()
    {
        $this->assertEquals('S-Рогачёв', trim($this->object->getFullNameFormat('Рогачёв')).'-Рогачёв');
    }
    public function testSplDetect677()
    {
        $this->assertEquals('S-Рогов', trim($this->object->getFullNameFormat('Рогов')).'-Рогов');
    }
    public function testSplDetect678()
    {
        $this->assertEquals('S-Рогозин', trim($this->object->getFullNameFormat('Рогозин')).'-Рогозин');
    }
    public function testSplDetect679()
    {
        $this->assertEquals('S-Рожков', trim($this->object->getFullNameFormat('Рожков')).'-Рожков');
    }
    public function testSplDetect680()
    {
        $this->assertEquals('S-Рокоссовский', trim($this->object->getFullNameFormat('Рокоссовский')).'-Рокоссовский');
    }
    public function testSplDetect681()
    {
        $this->assertEquals('S-Романов', trim($this->object->getFullNameFormat('Романов')).'-Романов');
    }
    public function testSplDetect682()
    {
        $this->assertEquals('S-Ростов', trim($this->object->getFullNameFormat('Ростов')).'-Ростов');
    }
    public function testSplDetect683()
    {
        $this->assertEquals('S-Ростовцев', trim($this->object->getFullNameFormat('Ростовцев')).'-Ростовцев');
    }
    public function testSplDetect684()
    {
        $this->assertEquals('S-Рудавинa', trim($this->object->getFullNameFormat('Рудавинa')).'-Рудавинa');
    }
    public function testSplDetect685()
    {
        $this->assertEquals('S-Румянцев', trim($this->object->getFullNameFormat('Румянцев')).'-Румянцев');
    }
    public function testSplDetect686()
    {
        $this->assertEquals('S-Рунов', trim($this->object->getFullNameFormat('Рунов')).'-Рунов');
    }
    public function testSplDetect687()
    {
        $this->assertEquals('S-Русаков', trim($this->object->getFullNameFormat('Русаков')).'-Русаков');
    }
    public function testSplDetect688()
    {
        $this->assertEquals('S-Руских', trim($this->object->getFullNameFormat('Руских')).'-Руских');
    }
    public function testSplDetect689()
    {
        $this->assertEquals('S-Русских', trim($this->object->getFullNameFormat('Русских')).'-Русских');
    }
    public function testSplDetect690()
    {
        $this->assertEquals('S-Ручкин', trim($this->object->getFullNameFormat('Ручкин')).'-Ручкин');
    }
    public function testSplDetect691()
    {
        $this->assertEquals('S-Рыбалкин', trim($this->object->getFullNameFormat('Рыбалкин')).'-Рыбалкин');
    }
    public function testSplDetect692()
    {
        $this->assertEquals('S-Рыжанов', trim($this->object->getFullNameFormat('Рыжанов')).'-Рыжанов');
    }
    public function testSplDetect693()
    {
        $this->assertEquals('S-Рыжков', trim($this->object->getFullNameFormat('Рыжков')).'-Рыжков');
    }
    public function testSplDetect694()
    {
        $this->assertEquals('S-Рыжов', trim($this->object->getFullNameFormat('Рыжов')).'-Рыжов');
    }
    public function testSplDetect695()
    {
        $this->assertEquals('S-Рытин', trim($this->object->getFullNameFormat('Рытин')).'-Рытин');
    }
    public function testSplDetect696()
    {
        $this->assertEquals('S-Рыченков', trim($this->object->getFullNameFormat('Рыченков')).'-Рыченков');
    }
    public function testSplDetect697()
    {
        $this->assertEquals('S-Рябков', trim($this->object->getFullNameFormat('Рябков')).'-Рябков');
    }
    public function testSplDetect698()
    {
        $this->assertEquals('S-Рябов', trim($this->object->getFullNameFormat('Рябов')).'-Рябов');
    }
    public function testSplDetect699()
    {
        $this->assertEquals('S-Ряхин', trim($this->object->getFullNameFormat('Ряхин')).'-Ряхин');
    }
    public function testSplDetect700()
    {
        $this->assertEquals('S-Сабитов', trim($this->object->getFullNameFormat('Сабитов')).'-Сабитов');
    }
    public function testSplDetect701()
    {
        $this->assertEquals('S-Савасин', trim($this->object->getFullNameFormat('Савасин')).'-Савасин');
    }
    public function testSplDetect702()
    {
        $this->assertEquals('S-Савинков', trim($this->object->getFullNameFormat('Савинков')).'-Савинков');
    }
    public function testSplDetect703()
    {
        $this->assertEquals('S-Савенков', trim($this->object->getFullNameFormat('Савенков')).'-Савенков');
    }
    public function testSplDetect704()
    {
        $this->assertEquals('S-Саврасов', trim($this->object->getFullNameFormat('Саврасов')).'-Саврасов');
    }
    public function testSplDetect705()
    {
        $this->assertEquals('S-Садыков', trim($this->object->getFullNameFormat('Садыков')).'-Садыков');
    }
    public function testSplDetect706()
    {
        $this->assertEquals('S-Сазонов', trim($this->object->getFullNameFormat('Сазонов')).'-Сазонов');
    }
    public function testSplDetect707()
    {
        $this->assertEquals('S-Салко', trim($this->object->getFullNameFormat('Салко')).'-Салко');
    }
    public function testSplDetect708()
    {
        $this->assertEquals('S-Сальков', trim($this->object->getFullNameFormat('Сальков')).'-Сальков');
    }
    public function testSplDetect709()
    {
        $this->assertEquals('S-Сальников', trim($this->object->getFullNameFormat('Сальников')).'-Сальников');
    }
    public function testSplDetect710()
    {
        $this->assertEquals('S-Самойлов', trim($this->object->getFullNameFormat('Самойлов')).'-Самойлов');
    }
    public function testSplDetect711()
    {
        $this->assertEquals('S-Самохин', trim($this->object->getFullNameFormat('Самохин')).'-Самохин');
    }
    public function testSplDetect712()
    {
        $this->assertEquals('S-Самсонов', trim($this->object->getFullNameFormat('Самсонов')).'-Самсонов');
    }
    public function testSplDetect713()
    {
        $this->assertEquals('S-Санников', trim($this->object->getFullNameFormat('Санников')).'-Санников');
    }
    public function testSplDetect714()
    {
        $this->assertEquals('S-Сапогов', trim($this->object->getFullNameFormat('Сапогов')).'-Сапогов');
    }
    public function testSplDetect715()
    {
        $this->assertEquals('S-Сапожников', trim($this->object->getFullNameFormat('Сапожников')).'-Сапожников');
    }
    public function testSplDetect716()
    {
        $this->assertEquals('S-Сафиюлин', trim($this->object->getFullNameFormat('Сафиюлин')).'-Сафиюлин');
    }
    public function testSplDetect717()
    {
        $this->assertEquals('S-Сахаров', trim($this->object->getFullNameFormat('Сахаров')).'-Сахаров');
    }
    public function testSplDetect718()
    {
        $this->assertEquals('S-Свалов', trim($this->object->getFullNameFormat('Свалов')).'-Свалов');
    }
    public function testSplDetect719()
    {
        $this->assertEquals('S-Северинов', trim($this->object->getFullNameFormat('Северинов')).'-Северинов');
    }
    public function testSplDetect720()
    {
        $this->assertEquals('S-Севостьянов', trim($this->object->getFullNameFormat('Севостьянов')).'-Севостьянов');
    }
    public function testSplDetect721()
    {
        $this->assertEquals('S-Седельников', trim($this->object->getFullNameFormat('Седельников')).'-Седельников');
    }
    public function testSplDetect722()
    {
        $this->assertEquals('S-Седов', trim($this->object->getFullNameFormat('Седов')).'-Седов');
    }
    public function testSplDetect723()
    {
        $this->assertEquals('S-Селезнёв', trim($this->object->getFullNameFormat('Селезнёв')).'-Селезнёв');
    }
    public function testSplDetect724()
    {
        $this->assertEquals('S-Селиванов', trim($this->object->getFullNameFormat('Селиванов')).'-Селиванов');
    }
    public function testSplDetect725()
    {
        $this->assertEquals('S-Семёнов', trim($this->object->getFullNameFormat('Семёнов')).'-Семёнов');
    }
    public function testSplDetect726()
    {
        $this->assertEquals('S-Семичаевский', trim($this->object->getFullNameFormat('Семичаевский')).'-Семичаевский');
    }
    public function testSplDetect727()
    {
        $this->assertEquals('S-Сенькин', trim($this->object->getFullNameFormat('Сенькин')).'-Сенькин');
    }
    public function testSplDetect728()
    {
        $this->assertEquals('S-Серебров', trim($this->object->getFullNameFormat('Серебров')).'-Серебров');
    }
    public function testSplDetect729()
    {
        $this->assertEquals('S-Серебряков', trim($this->object->getFullNameFormat('Серебряков')).'-Серебряков');
    }
    public function testSplDetect730()
    {
        $this->assertEquals('S-Серёгин', trim($this->object->getFullNameFormat('Серёгин')).'-Серёгин');
    }
    public function testSplDetect731()
    {
        $this->assertEquals('S-Серов', trim($this->object->getFullNameFormat('Серов')).'-Серов');
    }
    public function testSplDetect732()
    {
        $this->assertEquals('S-Серпионов', trim($this->object->getFullNameFormat('Серпионов')).'-Серпионов');
    }
    public function testSplDetect733()
    {
        $this->assertEquals('S-Семянин', trim($this->object->getFullNameFormat('Семянин')).'-Семянин');
    }
    public function testSplDetect734()
    {
        $this->assertEquals('S-Сёмин', trim($this->object->getFullNameFormat('Сёмин')).'-Сёмин');
    }
    public function testSplDetect735()
    {
        $this->assertEquals('S-Серёгин', trim($this->object->getFullNameFormat('Серёгин')).'-Серёгин');
    }
    public function testSplDetect736()
    {
        $this->assertEquals('S-Сеченов', trim($this->object->getFullNameFormat('Сеченов')).'-Сеченов');
    }
    public function testSplDetect737()
    {
        $this->assertEquals('S-Сиваков', trim($this->object->getFullNameFormat('Сиваков')).'-Сиваков');
    }
    public function testSplDetect738()
    {
        $this->assertEquals('S-Сигаев', trim($this->object->getFullNameFormat('Сигаев')).'-Сигаев');
    }
    public function testSplDetect739()
    {
        $this->assertEquals('S-Сигачёв', trim($this->object->getFullNameFormat('Сигачёв')).'-Сигачёв');
    }
    public function testSplDetect740()
    {
        $this->assertEquals('S-Сидоров', trim($this->object->getFullNameFormat('Сидоров')).'-Сидоров');
    }
    public function testSplDetect741()
    {
        $this->assertEquals('S-Сизов', trim($this->object->getFullNameFormat('Сизов')).'-Сизов');
    }
    public function testSplDetect742()
    {
        $this->assertEquals('S-Сизый', trim($this->object->getFullNameFormat('Сизый')).'-Сизый');
    }
    public function testSplDetect743()
    {
        $this->assertEquals('S-Силиванов', trim($this->object->getFullNameFormat('Силиванов')).'-Силиванов');
    }
    public function testSplDetect744()
    {
        $this->assertEquals('S-Силин', trim($this->object->getFullNameFormat('Силин')).'-Силин');
    }
    public function testSplDetect745()
    {
        $this->assertEquals('S-Сильвестров', trim($this->object->getFullNameFormat('Сильвестров')).'-Сильвестров');
    }
    public function testSplDetect746()
    {
        $this->assertEquals('S-Силаев', trim($this->object->getFullNameFormat('Силаев')).'-Силаев');
    }
    public function testSplDetect747()
    {
        $this->assertEquals('S-Силиванов', trim($this->object->getFullNameFormat('Силиванов')).'-Силиванов');
    }
    public function testSplDetect748()
    {
        $this->assertEquals('S-Скворцов', trim($this->object->getFullNameFormat('Скворцов')).'-Скворцов');
    }
    public function testSplDetect749()
    {
        $this->assertEquals('S-Скрябин', trim($this->object->getFullNameFormat('Скрябин')).'-Скрябин');
    }
    public function testSplDetect750()
    {
        $this->assertEquals('S-Скоробогатов', trim($this->object->getFullNameFormat('Скоробогатов')).'-Скоробогатов');
    }
    public function testSplDetect751()
    {
        $this->assertEquals('S-Скороходов', trim($this->object->getFullNameFormat('Скороходов')).'-Скороходов');
    }
    public function testSplDetect752()
    {
        $this->assertEquals('S-Скуратов', trim($this->object->getFullNameFormat('Скуратов')).'-Скуратов');
    }
    public function testSplDetect753()
    {
        $this->assertEquals('S-Слобожанин', trim($this->object->getFullNameFormat('Слобожанин')).'-Слобожанин');
    }
    public function testSplDetect754()
    {
        $this->assertEquals('S-Случевский', trim($this->object->getFullNameFormat('Случевский')).'-Случевский');
    }
    public function testSplDetect755()
    {
        $this->assertEquals('S-Смирнитский', trim($this->object->getFullNameFormat('Смирнитский')).'-Смирнитский');
    }
    public function testSplDetect756()
    {
        $this->assertEquals('S-Смирнов', trim($this->object->getFullNameFormat('Смирнов')).'-Смирнов');
    }
    public function testSplDetect757()
    {
        $this->assertEquals('S-Сметанин', trim($this->object->getFullNameFormat('Сметанин')).'-Сметанин');
    }
    public function testSplDetect758()
    {
        $this->assertEquals('S-Смолин', trim($this->object->getFullNameFormat('Смолин')).'-Смолин');
    }
    public function testSplDetect759()
    {
        $this->assertEquals('S-Смолянинов', trim($this->object->getFullNameFormat('Смолянинов')).'-Смолянинов');
    }
    public function testSplDetect760()
    {
        $this->assertEquals('S-Снаткин', trim($this->object->getFullNameFormat('Снаткин')).'-Снаткин');
    }
    public function testSplDetect761()
    {
        $this->assertEquals('S-Снегирёв', trim($this->object->getFullNameFormat('Снегирёв')).'-Снегирёв');
    }
    public function testSplDetect762()
    {
        $this->assertEquals('S-Снетков', trim($this->object->getFullNameFormat('Снетков')).'-Снетков');
    }
    public function testSplDetect763()
    {
        $this->assertEquals('S-Соболев', trim($this->object->getFullNameFormat('Соболев')).'-Соболев');
    }
    public function testSplDetect764()
    {
        $this->assertEquals('S-Соболевский', trim($this->object->getFullNameFormat('Соболевский')).'-Соболевский');
    }
    public function testSplDetect765()
    {
        $this->assertEquals('S-Соколов', trim($this->object->getFullNameFormat('Соколов')).'-Соколов');
    }
    public function testSplDetect766()
    {
        $this->assertEquals('S-Солдатов', trim($this->object->getFullNameFormat('Солдатов')).'-Солдатов');
    }
    public function testSplDetect767()
    {
        $this->assertEquals('S-Соловьёв', trim($this->object->getFullNameFormat('Соловьёв')).'-Соловьёв');
    }
    public function testSplDetect768()
    {
        $this->assertEquals('S-Солодников', trim($this->object->getFullNameFormat('Солодников')).'-Солодников');
    }
    public function testSplDetect769()
    {
        $this->assertEquals('S-Соломин', trim($this->object->getFullNameFormat('Соломин')).'-Соломин');
    }
    public function testSplDetect770()
    {
        $this->assertEquals('S-Соломонов', trim($this->object->getFullNameFormat('Соломонов')).'-Соломонов');
    }
    public function testSplDetect771()
    {
        $this->assertEquals('S-Сопов', trim($this->object->getFullNameFormat('Сопов')).'-Сопов');
    }
    public function testSplDetect772()
    {
        $this->assertEquals('S-Сорокин', trim($this->object->getFullNameFormat('Сорокин')).'-Сорокин');
    }
    public function testSplDetect773()
    {
        $this->assertEquals('S-Спанов', trim($this->object->getFullNameFormat('Спанов')).'-Спанов');
    }
    public function testSplDetect774()
    {
        $this->assertEquals('S-Стариков', trim($this->object->getFullNameFormat('Стариков')).'-Стариков');
    }
    public function testSplDetect775()
    {
        $this->assertEquals('S-Староверов', trim($this->object->getFullNameFormat('Староверов')).'-Староверов');
    }
    public function testSplDetect776()
    {
        $this->assertEquals('S-Стеблев', trim($this->object->getFullNameFormat('Стеблев')).'-Стеблев');
    }
    public function testSplDetect777()
    {
        $this->assertEquals('S-Стегнов', trim($this->object->getFullNameFormat('Стегнов')).'-Стегнов');
    }
    public function testSplDetect778()
    {
        $this->assertEquals('S-Степанов', trim($this->object->getFullNameFormat('Степанов')).'-Степанов');
    }
    public function testSplDetect779()
    {
        $this->assertEquals('S-Степанков', trim($this->object->getFullNameFormat('Степанков')).'-Степанков');
    }
    public function testSplDetect780()
    {
        $this->assertEquals('S-Степашин', trim($this->object->getFullNameFormat('Степашин')).'-Степашин');
    }
    public function testSplDetect781()
    {
        $this->assertEquals('S-Стрелков', trim($this->object->getFullNameFormat('Стрелков')).'-Стрелков');
    }
    public function testSplDetect782()
    {
        $this->assertEquals('S-Стрекалов', trim($this->object->getFullNameFormat('Стрекалов')).'-Стрекалов');
    }
    public function testSplDetect783()
    {
        $this->assertEquals('S-Строганов', trim($this->object->getFullNameFormat('Строганов')).'-Строганов');
    }
    public function testSplDetect784()
    {
        $this->assertEquals('S-Субботин', trim($this->object->getFullNameFormat('Субботин')).'-Субботин');
    }
    public function testSplDetect785()
    {
        $this->assertEquals('S-Суботин', trim($this->object->getFullNameFormat('Суботин')).'-Суботин');
    }
    public function testSplDetect786()
    {
        $this->assertEquals('S-Суворин', trim($this->object->getFullNameFormat('Суворин')).'-Суворин');
    }
    public function testSplDetect787()
    {
        $this->assertEquals('S-Суворкин', trim($this->object->getFullNameFormat('Суворкин')).'-Суворкин');
    }
    public function testSplDetect788()
    {
        $this->assertEquals('S-Суворов', trim($this->object->getFullNameFormat('Суворов')).'-Суворов');
    }
    public function testSplDetect789()
    {
        $this->assertEquals('S-Сунгатулин', trim($this->object->getFullNameFormat('Сунгатулин')).'-Сунгатулин');
    }
    public function testSplDetect790()
    {
        $this->assertEquals('S-Сукачев', trim($this->object->getFullNameFormat('Сукачев')).'-Сукачев');
    }
    public function testSplDetect791()
    {
        $this->assertEquals('S-Суриков', trim($this->object->getFullNameFormat('Суриков')).'-Суриков');
    }
    public function testSplDetect792()
    {
        $this->assertEquals('S-Сусоев', trim($this->object->getFullNameFormat('Сусоев')).'-Сусоев');
    }
    public function testSplDetect793()
    {
        $this->assertEquals('S-Сутулин', trim($this->object->getFullNameFormat('Сутулин')).'-Сутулин');
    }
    public function testSplDetect794()
    {
        $this->assertEquals('S-Сухоруков', trim($this->object->getFullNameFormat('Сухоруков')).'-Сухоруков');
    }
    public function testSplDetect795()
    {
        $this->assertEquals('S-Сучков', trim($this->object->getFullNameFormat('Сучков')).'-Сучков');
    }
    public function testSplDetect796()
    {
        $this->assertEquals('S-Сысоев', trim($this->object->getFullNameFormat('Сысоев')).'-Сысоев');
    }
    public function testSplDetect797()
    {
        $this->assertEquals('S-Сытников', trim($this->object->getFullNameFormat('Сытников')).'-Сытников');
    }
    public function testSplDetect798()
    {
        $this->assertEquals('S-Сычёв', trim($this->object->getFullNameFormat('Сычёв')).'-Сычёв');
    }
    public function testSplDetect799()
    {
        $this->assertEquals('S-Сычкин', trim($this->object->getFullNameFormat('Сычкин')).'-Сычкин');
    }
    public function testSplDetect800()
    {
        $this->assertEquals('S-Сюкосев', trim($this->object->getFullNameFormat('Сюкосев')).'-Сюкосев');
    }
    public function testSplDetect801()
    {
        $this->assertEquals('S-Табаков', trim($this->object->getFullNameFormat('Табаков')).'-Табаков');
    }
    public function testSplDetect802()
    {
        $this->assertEquals('S-Табернакулов', trim($this->object->getFullNameFormat('Табернакулов')).'-Табернакулов');
    }
    public function testSplDetect803()
    {
        $this->assertEquals('S-Таланов', trim($this->object->getFullNameFormat('Таланов')).'-Таланов');
    }
    public function testSplDetect804()
    {
        $this->assertEquals('S-Талалихин', trim($this->object->getFullNameFormat('Талалихин')).'-Талалихин');
    }
    public function testSplDetect805()
    {
        $this->assertEquals('S-Танков', trim($this->object->getFullNameFormat('Танков')).'-Танков');
    }
    public function testSplDetect806()
    {
        $this->assertEquals('S-Тарасов', trim($this->object->getFullNameFormat('Тарасов')).'-Тарасов');
    }
    public function testSplDetect807()
    {
        $this->assertEquals('S-Татаров', trim($this->object->getFullNameFormat('Татаров')).'-Татаров');
    }
    public function testSplDetect808()
    {
        $this->assertEquals('S-Твардовский', trim($this->object->getFullNameFormat('Твардовский')).'-Твардовский');
    }
    public function testSplDetect809()
    {
        $this->assertEquals('S-Тёмкин', trim($this->object->getFullNameFormat('Тёмкин')).'-Тёмкин');
    }
    public function testSplDetect810()
    {
        $this->assertEquals('S-Теплов', trim($this->object->getFullNameFormat('Теплов')).'-Теплов');
    }
    public function testSplDetect811()
    {
        $this->assertEquals('S-Теребов', trim($this->object->getFullNameFormat('Теребов')).'-Теребов');
    }
    public function testSplDetect812()
    {
        $this->assertEquals('S-Тетерев', trim($this->object->getFullNameFormat('Тетерев')).'-Тетерев');
    }
    public function testSplDetect813()
    {
        $this->assertEquals('S-Типалов', trim($this->object->getFullNameFormat('Типалов')).'-Типалов');
    }
    public function testSplDetect814()
    {
        $this->assertEquals('S-Титов', trim($this->object->getFullNameFormat('Титов')).'-Титов');
    }
    public function testSplDetect815()
    {
        $this->assertEquals('S-Тихвинский', trim($this->object->getFullNameFormat('Тихвинский')).'-Тихвинский');
    }
    public function testSplDetect816()
    {
        $this->assertEquals('S-Тихомиров', trim($this->object->getFullNameFormat('Тихомиров')).'-Тихомиров');
    }
    public function testSplDetect817()
    {
        $this->assertEquals('S-Тихонов', trim($this->object->getFullNameFormat('Тихонов')).'-Тихонов');
    }
    public function testSplDetect818()
    {
        $this->assertEquals('S-Токарев', trim($this->object->getFullNameFormat('Токарев')).'-Токарев');
    }
    public function testSplDetect819()
    {
        $this->assertEquals('S-Токмаков', trim($this->object->getFullNameFormat('Токмаков')).'-Токмаков');
    }
    public function testSplDetect820()
    {
        $this->assertEquals('S-Толбанов', trim($this->object->getFullNameFormat('Толбанов')).'-Толбанов');
    }
    public function testSplDetect821()
    {
        $this->assertEquals('S-Толстобров', trim($this->object->getFullNameFormat('Толстобров')).'-Толстобров');
    }
    public function testSplDetect822()
    {
        $this->assertEquals('S-Толстокожев', trim($this->object->getFullNameFormat('Толстокожев')).'-Толстокожев');
    }
    public function testSplDetect823()
    {
        $this->assertEquals('S-Толстой', trim($this->object->getFullNameFormat('Толстой')).'-Толстой');
    }
    public function testSplDetect824()
    {
        $this->assertEquals('S-Топоров', trim($this->object->getFullNameFormat('Топоров')).'-Топоров');
    }
    public function testSplDetect825()
    {
        $this->assertEquals('S-Торопов', trim($this->object->getFullNameFormat('Торопов')).'-Торопов');
    }
    public function testSplDetect826()
    {
        $this->assertEquals('S-Торчинович', trim($this->object->getFullNameFormat('Торчинович')).'-Торчинович');
    }
    public function testSplDetect827()
    {
        $this->assertEquals('S-Травкин', trim($this->object->getFullNameFormat('Травкин')).'-Травкин');
    }
    public function testSplDetect828()
    {
        $this->assertEquals('S-Тредиаковский', trim($this->object->getFullNameFormat('Тредиаковский')).'-Тредиаковский');
    }
    public function testSplDetect829()
    {
        $this->assertEquals('S-Третьяков', trim($this->object->getFullNameFormat('Третьяков')).'-Третьяков');
    }
    public function testSplDetect830()
    {
        $this->assertEquals('S-Трифонов', trim($this->object->getFullNameFormat('Трифонов')).'-Трифонов');
    }
    public function testSplDetect831()
    {
        $this->assertEquals('S-Трофимов', trim($this->object->getFullNameFormat('Трофимов')).'-Трофимов');
    }
    public function testSplDetect832()
    {
        $this->assertEquals('S-Трусов', trim($this->object->getFullNameFormat('Трусов')).'-Трусов');
    }
    public function testSplDetect833()
    {
        $this->assertEquals('S-Трутнев', trim($this->object->getFullNameFormat('Трутнев')).'-Трутнев');
    }
    public function testSplDetect834()
    {
        $this->assertEquals('S-Труфанов', trim($this->object->getFullNameFormat('Труфанов')).'-Труфанов');
    }
    public function testSplDetect835()
    {
        $this->assertEquals('S-Трухин', trim($this->object->getFullNameFormat('Трухин')).'-Трухин');
    }
    public function testSplDetect836()
    {
        $this->assertEquals('S-Трындин', trim($this->object->getFullNameFormat('Трындин')).'-Трындин');
    }
    public function testSplDetect837()
    {
        $this->assertEquals('S-Туполев', trim($this->object->getFullNameFormat('Туполев')).'-Туполев');
    }
    public function testSplDetect838()
    {
        $this->assertEquals('S-Турбин', trim($this->object->getFullNameFormat('Турбин')).'-Турбин');
    }
    public function testSplDetect839()
    {
        $this->assertEquals('S-Тургенев', trim($this->object->getFullNameFormat('Тургенев')).'-Тургенев');
    }
    public function testSplDetect840()
    {
        $this->assertEquals('S-Туров', trim($this->object->getFullNameFormat('Туров')).'-Туров');
    }
    public function testSplDetect841()
    {
        $this->assertEquals('S-Турфанов', trim($this->object->getFullNameFormat('Турфанов')).'-Турфанов');
    }
    public function testSplDetect842()
    {
        $this->assertEquals('S-Тычкин', trim($this->object->getFullNameFormat('Тычкин')).'-Тычкин');
    }
    public function testSplDetect843()
    {
        $this->assertEquals('S-Тюшняков', trim($this->object->getFullNameFormat('Тюшняков')).'-Тюшняков');
    }
    public function testSplDetect844()
    {
        $this->assertEquals('S-Телицын', trim($this->object->getFullNameFormat('Телицын')).'-Телицын');
    }
    public function testSplDetect845()
    {
        $this->assertEquals('S-Тянников', trim($this->object->getFullNameFormat('Тянников')).'-Тянников');
    }
    public function testSplDetect846()
    {
        $this->assertEquals('S-Убейсобакин', trim($this->object->getFullNameFormat('Убейсобакин')).'-Убейсобакин');
    }
    public function testSplDetect847()
    {
        $this->assertEquals('S-Угольников', trim($this->object->getFullNameFormat('Угольников')).'-Угольников');
    }
    public function testSplDetect848()
    {
        $this->assertEquals('S-Ульянов', trim($this->object->getFullNameFormat('Ульянов')).'-Ульянов');
    }
    public function testSplDetect849()
    {
        $this->assertEquals('S-Ульяшин', trim($this->object->getFullNameFormat('Ульяшин')).'-Ульяшин');
    }
    public function testSplDetect850()
    {
        $this->assertEquals('S-Усатов', trim($this->object->getFullNameFormat('Усатов')).'-Усатов');
    }
    public function testSplDetect851()
    {
        $this->assertEquals('S-Усов', trim($this->object->getFullNameFormat('Усов')).'-Усов');
    }
    public function testSplDetect852()
    {
        $this->assertEquals('S-Устинов', trim($this->object->getFullNameFormat('Устинов')).'-Устинов');
    }
    public function testSplDetect853()
    {
        $this->assertEquals('S-Устюжанин', trim($this->object->getFullNameFormat('Устюжанин')).'-Устюжанин');
    }
    public function testSplDetect854()
    {
        $this->assertEquals('S-Утёсов', trim($this->object->getFullNameFormat('Утёсов')).'-Утёсов');
    }
    public function testSplDetect855()
    {
        $this->assertEquals('S-Ухов', trim($this->object->getFullNameFormat('Ухов')).'-Ухов');
    }
    public function testSplDetect856()
    {
        $this->assertEquals('S-Фанин', trim($this->object->getFullNameFormat('Фанин')).'-Фанин');
    }
    public function testSplDetect857()
    {
        $this->assertEquals('S-Фамусов', trim($this->object->getFullNameFormat('Фамусов')).'-Фамусов');
    }
    public function testSplDetect858()
    {
        $this->assertEquals('S-Федин', trim($this->object->getFullNameFormat('Федин')).'-Федин');
    }
    public function testSplDetect859()
    {
        $this->assertEquals('S-Федосов', trim($this->object->getFullNameFormat('Федосов')).'-Федосов');
    }
    public function testSplDetect860()
    {
        $this->assertEquals('S-Федотов', trim($this->object->getFullNameFormat('Федотов')).'-Федотов');
    }
    public function testSplDetect861()
    {
        $this->assertEquals('S-Федосеев', trim($this->object->getFullNameFormat('Федосеев')).'-Федосеев');
    }
    public function testSplDetect862()
    {
        $this->assertEquals('S-Федченков', trim($this->object->getFullNameFormat('Федченков')).'-Федченков');
    }
    public function testSplDetect863()
    {
        $this->assertEquals('S-Фёдоров', trim($this->object->getFullNameFormat('Фёдоров')).'-Фёдоров');
    }
    public function testSplDetect864()
    {
        $this->assertEquals('S-Федулов', trim($this->object->getFullNameFormat('Федулов')).'-Федулов');
    }
    public function testSplDetect865()
    {
        $this->assertEquals('S-Фетисов', trim($this->object->getFullNameFormat('Фетисов')).'-Фетисов');
    }
    public function testSplDetect866()
    {
        $this->assertEquals('S-Филатов', trim($this->object->getFullNameFormat('Филатов')).'-Филатов');
    }
    public function testSplDetect867()
    {
        $this->assertEquals('S-Филимонов', trim($this->object->getFullNameFormat('Филимонов')).'-Филимонов');
    }
    public function testSplDetect868()
    {
        $this->assertEquals('S-Филипов', trim($this->object->getFullNameFormat('Филипов')).'-Филипов');
    }
    public function testSplDetect869()
    {
        $this->assertEquals('S-Филиппов', trim($this->object->getFullNameFormat('Филиппов')).'-Филиппов');
    }
    public function testSplDetect870()
    {
        $this->assertEquals('S-Флёров', trim($this->object->getFullNameFormat('Флёров')).'-Флёров');
    }
    public function testSplDetect871()
    {
        $this->assertEquals('S-Фокин', trim($this->object->getFullNameFormat('Фокин')).'-Фокин');
    }
    public function testSplDetect872()
    {
        $this->assertEquals('S-Фомин', trim($this->object->getFullNameFormat('Фомин')).'-Фомин');
    }
    public function testSplDetect873()
    {
        $this->assertEquals('S-Фомичев', trim($this->object->getFullNameFormat('Фомичев')).'-Фомичев');
    }
    public function testSplDetect874()
    {
        $this->assertEquals('S-Фонвизин', trim($this->object->getFullNameFormat('Фонвизин')).'-Фонвизин');
    }
    public function testSplDetect875()
    {
        $this->assertEquals('S-Форопонов', trim($this->object->getFullNameFormat('Форопонов')).'-Форопонов');
    }
    public function testSplDetect876()
    {
        $this->assertEquals('S-Фирсов', trim($this->object->getFullNameFormat('Фирсов')).'-Фирсов');
    }
    public function testSplDetect877()
    {
        $this->assertEquals('S-Фролов', trim($this->object->getFullNameFormat('Фролов')).'-Фролов');
    }
    public function testSplDetect878()
    {
        $this->assertEquals('S-Францев', trim($this->object->getFullNameFormat('Францев')).'-Францев');
    }
    public function testSplDetect879()
    {
        $this->assertEquals('S-Фукин', trim($this->object->getFullNameFormat('Фукин')).'-Фукин');
    }
    public function testSplDetect880()
    {
        $this->assertEquals('S-Хабалов', trim($this->object->getFullNameFormat('Хабалов')).'-Хабалов');
    }
    public function testSplDetect881()
    {
        $this->assertEquals('S-Халтурин', trim($this->object->getFullNameFormat('Халтурин')).'-Халтурин');
    }
    public function testSplDetect882()
    {
        $this->assertEquals('S-Харитонов', trim($this->object->getFullNameFormat('Харитонов')).'-Харитонов');
    }
    public function testSplDetect883()
    {
        $this->assertEquals('S-Харламов', trim($this->object->getFullNameFormat('Харламов')).'-Харламов');
    }
    public function testSplDetect884()
    {
        $this->assertEquals('S-Хлебников', trim($this->object->getFullNameFormat('Хлебников')).'-Хлебников');
    }
    public function testSplDetect885()
    {
        $this->assertEquals('S-Хлопонин', trim($this->object->getFullNameFormat('Хлопонин')).'-Хлопонин');
    }
    public function testSplDetect886()
    {
        $this->assertEquals('S-Холодов', trim($this->object->getFullNameFormat('Холодов')).'-Холодов');
    }
    public function testSplDetect887()
    {
        $this->assertEquals('S-Хомколов', trim($this->object->getFullNameFormat('Хомколов')).'-Хомколов');
    }
    public function testSplDetect888()
    {
        $this->assertEquals('S-Храмов', trim($this->object->getFullNameFormat('Храмов')).'-Храмов');
    }
    public function testSplDetect889()
    {
        $this->assertEquals('S-Хромов', trim($this->object->getFullNameFormat('Хромов')).'-Хромов');
    }
    public function testSplDetect890()
    {
        $this->assertEquals('S-Худовеков', trim($this->object->getFullNameFormat('Худовеков')).'-Худовеков');
    }
    public function testSplDetect891()
    {
        $this->assertEquals('S-Хлебов', trim($this->object->getFullNameFormat('Хлебов')).'-Хлебов');
    }
    public function testSplDetect892()
    {
        $this->assertEquals('S-Хуртин', trim($this->object->getFullNameFormat('Хуртин')).'-Хуртин');
    }
    public function testSplDetect893()
    {
        $this->assertEquals('S-Хребтов', trim($this->object->getFullNameFormat('Хребтов')).'-Хребтов');
    }
    public function testSplDetect894()
    {
        $this->assertEquals('S-Худяков', trim($this->object->getFullNameFormat('Худяков')).'-Худяков');
    }
    public function testSplDetect895()
    {
        $this->assertEquals('S-Царицын', trim($this->object->getFullNameFormat('Царицын')).'-Царицын');
    }
    public function testSplDetect896()
    {
        $this->assertEquals('S-Цветаев', trim($this->object->getFullNameFormat('Цветаев')).'-Цветаев');
    }
    public function testSplDetect897()
    {
        $this->assertEquals('S-Цветков', trim($this->object->getFullNameFormat('Цветков')).'-Цветков');
    }
    public function testSplDetect898()
    {
        $this->assertEquals('S-Циолковский', trim($this->object->getFullNameFormat('Циолковский')).'-Циолковский');
    }
    public function testSplDetect899()
    {
        $this->assertEquals('S-Цитников', trim($this->object->getFullNameFormat('Цитников')).'-Цитников');
    }
    public function testSplDetect900()
    {
        $this->assertEquals('S-Цуканов', trim($this->object->getFullNameFormat('Цуканов')).'-Цуканов');
    }
    public function testSplDetect901()
    {
        $this->assertEquals('S-Чаадаев', trim($this->object->getFullNameFormat('Чаадаев')).'-Чаадаев');
    }
    public function testSplDetect902()
    {
        $this->assertEquals('S-Чадов', trim($this->object->getFullNameFormat('Чадов')).'-Чадов');
    }
    public function testSplDetect903()
    {
        $this->assertEquals('S-Чазов', trim($this->object->getFullNameFormat('Чазов')).'-Чазов');
    }
    public function testSplDetect904()
    {
        $this->assertEquals('S-Чалый', trim($this->object->getFullNameFormat('Чалый')).'-Чалый');
    }
    public function testSplDetect905()
    {
        $this->assertEquals('S-Чапаев', trim($this->object->getFullNameFormat('Чапаев')).'-Чапаев');
    }
    public function testSplDetect906()
    {
        $this->assertEquals('S-Чеботарёв', trim($this->object->getFullNameFormat('Чеботарёв')).'-Чеботарёв');
    }
    public function testSplDetect907()
    {
        $this->assertEquals('S-Чебыкин', trim($this->object->getFullNameFormat('Чебыкин')).'-Чебыкин');
    }
    public function testSplDetect908()
    {
        $this->assertEquals('S-Чежеков', trim($this->object->getFullNameFormat('Чежеков')).'-Чежеков');
    }
    public function testSplDetect909()
    {
        $this->assertEquals('S-Чекмарёв', trim($this->object->getFullNameFormat('Чекмарёв')).'-Чекмарёв');
    }
    public function testSplDetect910()
    {
        $this->assertEquals('S-Челомеев', trim($this->object->getFullNameFormat('Челомеев')).'-Челомеев');
    }
    public function testSplDetect911()
    {
        $this->assertEquals('S-Челомей', trim($this->object->getFullNameFormat('Челомей')).'-Челомей');
    }
    public function testSplDetect912()
    {
        $this->assertEquals('S-Челпанов', trim($this->object->getFullNameFormat('Челпанов')).'-Челпанов');
    }
    public function testSplDetect913()
    {
        $this->assertEquals('S-Чендев', trim($this->object->getFullNameFormat('Чендев')).'-Чендев');
    }
    public function testSplDetect914()
    {
        $this->assertEquals('S-Черенчиков', trim($this->object->getFullNameFormat('Черенчиков')).'-Черенчиков');
    }
    public function testSplDetect915()
    {
        $this->assertEquals('S-Черепанов', trim($this->object->getFullNameFormat('Черепанов')).'-Черепанов');
    }
    public function testSplDetect916()
    {
        $this->assertEquals('S-Черкашин', trim($this->object->getFullNameFormat('Черкашин')).'-Черкашин');
    }
    public function testSplDetect917()
    {
        $this->assertEquals('S-Чернов', trim($this->object->getFullNameFormat('Чернов')).'-Чернов');
    }
    public function testSplDetect918()
    {
        $this->assertEquals('S-Чернышёв', trim($this->object->getFullNameFormat('Чернышёв')).'-Чернышёв');
    }
    public function testSplDetect919()
    {
        $this->assertEquals('S-Чернаков', trim($this->object->getFullNameFormat('Чернаков')).'-Чернаков');
    }
    public function testSplDetect920()
    {
        $this->assertEquals('S-Черников', trim($this->object->getFullNameFormat('Черников')).'-Черников');
    }
    public function testSplDetect921()
    {
        $this->assertEquals('S-Чесноков', trim($this->object->getFullNameFormat('Чесноков')).'-Чесноков');
    }
    public function testSplDetect922()
    {
        $this->assertEquals('S-Чиграков', trim($this->object->getFullNameFormat('Чиграков')).'-Чиграков');
    }
    public function testSplDetect923()
    {
        $this->assertEquals('S-Чижиков', trim($this->object->getFullNameFormat('Чижиков')).'-Чижиков');
    }
    public function testSplDetect924()
    {
        $this->assertEquals('S-Чиркаш', trim($this->object->getFullNameFormat('Чиркаш')).'-Чиркаш');
    }
    public function testSplDetect925()
    {
        $this->assertEquals('S-Чистяков', trim($this->object->getFullNameFormat('Чистяков')).'-Чистяков');
    }
    public function testSplDetect926()
    {
        $this->assertEquals('S-Чичиков', trim($this->object->getFullNameFormat('Чичиков')).'-Чичиков');
    }
    public function testSplDetect927()
    {
        $this->assertEquals('S-Чичканов', trim($this->object->getFullNameFormat('Чичканов')).'-Чичканов');
    }
    public function testSplDetect928()
    {
        $this->assertEquals('S-Чкалов', trim($this->object->getFullNameFormat('Чкалов')).'-Чкалов');
    }
    public function testSplDetect929()
    {
        $this->assertEquals('S-Чмыхов', trim($this->object->getFullNameFormat('Чмыхов')).'-Чмыхов');
    }
    public function testSplDetect930()
    {
        $this->assertEquals('S-Чугунов', trim($this->object->getFullNameFormat('Чугунов')).'-Чугунов');
    }
    public function testSplDetect931()
    {
        $this->assertEquals('S-Чужинов', trim($this->object->getFullNameFormat('Чужинов')).'-Чужинов');
    }
    public function testSplDetect932()
    {
        $this->assertEquals('S-Чукчов', trim($this->object->getFullNameFormat('Чукчов')).'-Чукчов');
    }
    public function testSplDetect933()
    {
        $this->assertEquals('S-Чукреев', trim($this->object->getFullNameFormat('Чукреев')).'-Чукреев');
    }
    public function testSplDetect934()
    {
        $this->assertEquals('S-Чупов', trim($this->object->getFullNameFormat('Чупов')).'-Чупов');
    }
    public function testSplDetect935()
    {
        $this->assertEquals('S-Чуприн', trim($this->object->getFullNameFormat('Чуприн')).'-Чуприн');
    }
    public function testSplDetect936()
    {
        $this->assertEquals('S-Чупров', trim($this->object->getFullNameFormat('Чупров')).'-Чупров');
    }
    public function testSplDetect937()
    {
        $this->assertEquals('S-Чучанов', trim($this->object->getFullNameFormat('Чучанов')).'-Чучанов');
    }
    public function testSplDetect938()
    {
        $this->assertEquals('S-Чучумашев', trim($this->object->getFullNameFormat('Чучумашев')).'-Чучумашев');
    }
    public function testSplDetect939()
    {
        $this->assertEquals('S-Шабунин', trim($this->object->getFullNameFormat('Шабунин')).'-Шабунин');
    }
    public function testSplDetect940()
    {
        $this->assertEquals('S-Шакмаков', trim($this->object->getFullNameFormat('Шакмаков')).'-Шакмаков');
    }
    public function testSplDetect941()
    {
        $this->assertEquals('S-Шаляпин', trim($this->object->getFullNameFormat('Шаляпин')).'-Шаляпин');
    }
    public function testSplDetect942()
    {
        $this->assertEquals('S-Шаповалов', trim($this->object->getFullNameFormat('Шаповалов')).'-Шаповалов');
    }
    public function testSplDetect943()
    {
        $this->assertEquals('S-Шапошников', trim($this->object->getFullNameFormat('Шапошников')).'-Шапошников');
    }
    public function testSplDetect944()
    {
        $this->assertEquals('S-Шарапов', trim($this->object->getFullNameFormat('Шарапов')).'-Шарапов');
    }
    public function testSplDetect945()
    {
        $this->assertEquals('S-Шаров', trim($this->object->getFullNameFormat('Шаров')).'-Шаров');
    }
    public function testSplDetect946()
    {
        $this->assertEquals('S-Шаршин', trim($this->object->getFullNameFormat('Шаршин')).'-Шаршин');
    }
    public function testSplDetect947()
    {
        $this->assertEquals('S-Шашлов', trim($this->object->getFullNameFormat('Шашлов')).'-Шашлов');
    }
    public function testSplDetect948()
    {
        $this->assertEquals('S-Шведов', trim($this->object->getFullNameFormat('Шведов')).'-Шведов');
    }
    public function testSplDetect949()
    {
        $this->assertEquals('S-Шевелёк', trim($this->object->getFullNameFormat('Шевелёк')).'-Шевелёк');
    }
    public function testSplDetect950()
    {
        $this->assertEquals('S-Шеломов', trim($this->object->getFullNameFormat('Шеломов')).'-Шеломов');
    }
    public function testSplDetect951()
    {
        $this->assertEquals('S-Шепкин', trim($this->object->getFullNameFormat('Шепкин')).'-Шепкин');
    }
    public function testSplDetect952()
    {
        $this->assertEquals('S-Шеповалов', trim($this->object->getFullNameFormat('Шеповалов')).'-Шеповалов');
    }
    public function testSplDetect953()
    {
        $this->assertEquals('S-Шереметьев', trim($this->object->getFullNameFormat('Шереметьев')).'-Шереметьев');
    }
    public function testSplDetect954()
    {
        $this->assertEquals('S-Шерстов', trim($this->object->getFullNameFormat('Шерстов')).'-Шерстов');
    }
    public function testSplDetect955()
    {
        $this->assertEquals('S-Шикалов', trim($this->object->getFullNameFormat('Шикалов')).'-Шикалов');
    }
    public function testSplDetect956()
    {
        $this->assertEquals('S-Ширманов', trim($this->object->getFullNameFormat('Ширманов')).'-Ширманов');
    }
    public function testSplDetect957()
    {
        $this->assertEquals('S-Шихранов', trim($this->object->getFullNameFormat('Шихранов')).'-Шихранов');
    }
    public function testSplDetect958()
    {
        $this->assertEquals('S-Шишкин', trim($this->object->getFullNameFormat('Шишкин')).'-Шишкин');
    }
    public function testSplDetect959()
    {
        $this->assertEquals('S-Шишлов', trim($this->object->getFullNameFormat('Шишлов')).'-Шишлов');
    }
    public function testSplDetect960()
    {
        $this->assertEquals('S-Шишов', trim($this->object->getFullNameFormat('Шишов')).'-Шишов');
    }
    public function testSplDetect961()
    {
        $this->assertEquals('S-Шкуратов', trim($this->object->getFullNameFormat('Шкуратов')).'-Шкуратов');
    }
    public function testSplDetect962()
    {
        $this->assertEquals('S-Шлыков', trim($this->object->getFullNameFormat('Шлыков')).'-Шлыков');
    }
    public function testSplDetect963()
    {
        $this->assertEquals('S-Шмаков', trim($this->object->getFullNameFormat('Шмаков')).'-Шмаков');
    }
    public function testSplDetect964()
    {
        $this->assertEquals('S-Шмелев', trim($this->object->getFullNameFormat('Шмелев')).'-Шмелев');
    }
    public function testSplDetect965()
    {
        $this->assertEquals('S-Шубин', trim($this->object->getFullNameFormat('Шубин')).'-Шубин');
    }
    public function testSplDetect966()
    {
        $this->assertEquals('S-Шубкин', trim($this->object->getFullNameFormat('Шубкин')).'-Шубкин');
    }
    public function testSplDetect967()
    {
        $this->assertEquals('S-Шувалов', trim($this->object->getFullNameFormat('Шувалов')).'-Шувалов');
    }
    public function testSplDetect968()
    {
        $this->assertEquals('S-Шуйский', trim($this->object->getFullNameFormat('Шуйский')).'-Шуйский');
    }
    public function testSplDetect969()
    {
        $this->assertEquals('S-Шукшин', trim($this->object->getFullNameFormat('Шукшин')).'-Шукшин');
    }
    public function testSplDetect970()
    {
        $this->assertEquals('S-Шулёв', trim($this->object->getFullNameFormat('Шулёв')).'-Шулёв');
    }
    public function testSplDetect971()
    {
        $this->assertEquals('S-Шульдешов', trim($this->object->getFullNameFormat('Шульдешов')).'-Шульдешов');
    }
    public function testSplDetect972()
    {
        $this->assertEquals('S-Шульга', trim($this->object->getFullNameFormat('Шульга')).'-Шульга');
    }
    public function testSplDetect973()
    {
        $this->assertEquals('S-Шульгин', trim($this->object->getFullNameFormat('Шульгин')).'-Шульгин');
    }
    public function testSplDetect974()
    {
        $this->assertEquals('S-Шурупов', trim($this->object->getFullNameFormat('Шурупов')).'-Шурупов');
    }
    public function testSplDetect975()
    {
        $this->assertEquals('S-Шушалев', trim($this->object->getFullNameFormat('Шушалев')).'-Шушалев');
    }
    public function testSplDetect976()
    {
        $this->assertEquals('S-Шурша', trim($this->object->getFullNameFormat('Шурша')).'-Шурша');
    }
    public function testSplDetect977()
    {
        $this->assertEquals('S-Щавельский', trim($this->object->getFullNameFormat('Щавельский')).'-Щавельский');
    }
    public function testSplDetect978()
    {
        $this->assertEquals('S-Щегельский', trim($this->object->getFullNameFormat('Щегельский')).'-Щегельский');
    }
    public function testSplDetect979()
    {
        $this->assertEquals('S-Щеглов', trim($this->object->getFullNameFormat('Щеглов')).'-Щеглов');
    }
    public function testSplDetect980()
    {
        $this->assertEquals('S-Щеголев', trim($this->object->getFullNameFormat('Щеголев')).'-Щеголев');
    }
    public function testSplDetect981()
    {
        $this->assertEquals('S-Щеголихин', trim($this->object->getFullNameFormat('Щеголихин')).'-Щеголихин');
    }
    public function testSplDetect982()
    {
        $this->assertEquals('S-Щедрин', trim($this->object->getFullNameFormat('Щедрин')).'-Щедрин');
    }
    public function testSplDetect983()
    {
        $this->assertEquals('S-Щедров', trim($this->object->getFullNameFormat('Щедров')).'-Щедров');
    }
    public function testSplDetect984()
    {
        $this->assertEquals('S-Щекочихин', trim($this->object->getFullNameFormat('Щекочихин')).'-Щекочихин');
    }
    public function testSplDetect985()
    {
        $this->assertEquals('S-Щепкин', trim($this->object->getFullNameFormat('Щепкин')).'-Щепкин');
    }
    public function testSplDetect986()
    {
        $this->assertEquals('S-Щербаков', trim($this->object->getFullNameFormat('Щербаков')).'-Щербаков');
    }
    public function testSplDetect987()
    {
        $this->assertEquals('S-Щербатых', trim($this->object->getFullNameFormat('Щербатых')).'-Щербатых');
    }
    public function testSplDetect988()
    {
        $this->assertEquals('S-Щербина', trim($this->object->getFullNameFormat('Щербина')).'-Щербина');
    }
    public function testSplDetect989()
    {
        $this->assertEquals('S-Щетинин', trim($this->object->getFullNameFormat('Щетинин')).'-Щетинин');
    }
    public function testSplDetect990()
    {
        $this->assertEquals('S-Щеткин', trim($this->object->getFullNameFormat('Щеткин')).'-Щеткин');
    }
    public function testSplDetect991()
    {
        $this->assertEquals('S-Щукин', trim($this->object->getFullNameFormat('Щукин')).'-Щукин');
    }
    public function testSplDetect992()
    {
        $this->assertEquals('S-Энтин', trim($this->object->getFullNameFormat('Энтин')).'-Энтин');
    }
    public function testSplDetect993()
    {
        $this->assertEquals('S-Эсце', trim($this->object->getFullNameFormat('Эсце')).'-Эсце');
    }
    public function testSplDetect994()
    {
        $this->assertEquals('S-Ювелев', trim($this->object->getFullNameFormat('Ювелев')).'-Ювелев');
    }
    public function testSplDetect995()
    {
        $this->assertEquals('S-Юганцев', trim($this->object->getFullNameFormat('Юганцев')).'-Юганцев');
    }
    public function testSplDetect996()
    {
        $this->assertEquals('S-Югов', trim($this->object->getFullNameFormat('Югов')).'-Югов');
    }
    public function testSplDetect997()
    {
        $this->assertEquals('S-Юдашкин', trim($this->object->getFullNameFormat('Юдашкин')).'-Юдашкин');
    }
    public function testSplDetect998()
    {
        $this->assertEquals('S-Юдин', trim($this->object->getFullNameFormat('Юдин')).'-Юдин');
    }
    public function testSplDetect999()
    {
        $this->assertEquals('S-Юнкин', trim($this->object->getFullNameFormat('Юнкин')).'-Юнкин');
    }
    public function testSplDetect1000()
    {
        $this->assertEquals('S-Юрнаев', trim($this->object->getFullNameFormat('Юрнаев')).'-Юрнаев');
    }
    public function testSplDetect1001()
    {
        $this->assertEquals('S-Юрьев', trim($this->object->getFullNameFormat('Юрьев')).'-Юрьев');
    }
    public function testSplDetect1002()
    {
        $this->assertEquals('S-Юсупов', trim($this->object->getFullNameFormat('Юсупов')).'-Юсупов');
    }
    public function testSplDetect1003()
    {
        $this->assertEquals('S-Юферев', trim($this->object->getFullNameFormat('Юферев')).'-Юферев');
    }
    public function testSplDetect1004()
    {
        $this->assertEquals('S-Якимов', trim($this->object->getFullNameFormat('Якимов')).'-Якимов');
    }
    public function testSplDetect1005()
    {
        $this->assertEquals('S-Яковлев', trim($this->object->getFullNameFormat('Яковлев')).'-Яковлев');
    }
    public function testSplDetect1006()
    {
        $this->assertEquals('S-Якубов', trim($this->object->getFullNameFormat('Якубов')).'-Якубов');
    }
    public function testSplDetect1007()
    {
        $this->assertEquals('S-Якубович', trim($this->object->getFullNameFormat('Якубович')).'-Якубович');
    }
    public function testSplDetect1008()
    {
        $this->assertEquals('S-Якушев', trim($this->object->getFullNameFormat('Якушев')).'-Якушев');
    }
    public function testSplDetect1009()
    {
        $this->assertEquals('S-Янаев', trim($this->object->getFullNameFormat('Янаев')).'-Янаев');
    }
    public function testSplDetect1010()
    {
        $this->assertEquals('S-Янков', trim($this->object->getFullNameFormat('Янков')).'-Янков');
    }
    public function testSplDetect1011()
    {
        $this->assertEquals('S-Янковский', trim($this->object->getFullNameFormat('Янковский')).'-Янковский');
    }
    public function testSplDetect1012()
    {
        $this->assertEquals('S-Ярмольник', trim($this->object->getFullNameFormat('Ярмольник')).'-Ярмольник');
    }
    public function testSplDetect1013()
    {
        $this->assertEquals('S-Яромеев', trim($this->object->getFullNameFormat('Яромеев')).'-Яромеев');
    }
    public function testSplDetect1014()
    {
        $this->assertEquals('S-Ярцев', trim($this->object->getFullNameFormat('Ярцев')).'-Ярцев');
    }
    public function testSplDetect1015()
    {
        $this->assertEquals('S-Ясенев', trim($this->object->getFullNameFormat('Ясенев')).'-Ясенев');
    }
    public function testSplDetect1016()
    {
        $this->assertEquals('S-Яснеев', trim($this->object->getFullNameFormat('Яснеев')).'-Яснеев');
    }
    public function testSplDetect1017()
    {
        $this->assertEquals('S-Яшин', trim($this->object->getFullNameFormat('Яшин')).'-Яшин');
    }
    public function testSplDetect1018()
    {
        $this->assertEquals('S-Абакумова', trim($this->object->getFullNameFormat('Абакумова')).'-Абакумова');
    }
    public function testSplDetect1019()
    {
        $this->assertEquals('S-Абдулова', trim($this->object->getFullNameFormat('Абдулова')).'-Абдулова');
    }
    public function testSplDetect1020()
    {
        $this->assertEquals('S-Абрамова', trim($this->object->getFullNameFormat('Абрамова')).'-Абрамова');
    }
    public function testSplDetect1021()
    {
        $this->assertEquals('S-Авдеева', trim($this->object->getFullNameFormat('Авдеева')).'-Авдеева');
    }
    public function testSplDetect1022()
    {
        $this->assertEquals('S-Аверина', trim($this->object->getFullNameFormat('Аверина')).'-Аверина');
    }
    public function testSplDetect1023()
    {
        $this->assertEquals('S-Аверьянова', trim($this->object->getFullNameFormat('Аверьянова')).'-Аверьянова');
    }
    public function testSplDetect1024()
    {
        $this->assertEquals('S-Агапова', trim($this->object->getFullNameFormat('Агапова')).'-Агапова');
    }
    public function testSplDetect1025()
    {
        $this->assertEquals('S-Агафонова', trim($this->object->getFullNameFormat('Агафонова')).'-Агафонова');
    }
    public function testSplDetect1026()
    {
        $this->assertEquals('S-Агейкина', trim($this->object->getFullNameFormat('Агейкина')).'-Агейкина');
    }
    public function testSplDetect1027()
    {
        $this->assertEquals('S-Ажищенкова', trim($this->object->getFullNameFormat('Ажищенкова')).'-Ажищенкова');
    }
    public function testSplDetect1028()
    {
        $this->assertEquals('S-Аксакова', trim($this->object->getFullNameFormat('Аксакова')).'-Аксакова');
    }
    public function testSplDetect1029()
    {
        $this->assertEquals('S-Аксёнова', trim($this->object->getFullNameFormat('Аксёнова')).'-Аксёнова');
    }
    public function testSplDetect1030()
    {
        $this->assertEquals('S-Аксенчук', trim($this->object->getFullNameFormat('Аксенчук')).'-Аксенчук');
    }
    public function testSplDetect1031()
    {
        $this->assertEquals('S-Аленина', trim($this->object->getFullNameFormat('Аленина')).'-Аленина');
    }
    public function testSplDetect1032()
    {
        $this->assertEquals('S-Алиева', trim($this->object->getFullNameFormat('Алиева')).'-Алиева');
    }
    public function testSplDetect1033()
    {
        $this->assertEquals('S-Амалиева', trim($this->object->getFullNameFormat('Амалиева')).'-Амалиева');
    }
    public function testSplDetect1034()
    {
        $this->assertEquals('S-Амелина', trim($this->object->getFullNameFormat('Амелина')).'-Амелина');
    }
    public function testSplDetect1035()
    {
        $this->assertEquals('S-Аминаева', trim($this->object->getFullNameFormat('Аминаева')).'-Аминаева');
    }
    public function testSplDetect1036()
    {
        $this->assertEquals('S-Александрова', trim($this->object->getFullNameFormat('Александрова')).'-Александрова');
    }
    public function testSplDetect1037()
    {
        $this->assertEquals('S-Алексеева', trim($this->object->getFullNameFormat('Алексеева')).'-Алексеева');
    }
    public function testSplDetect1038()
    {
        $this->assertEquals('S-Алёхина', trim($this->object->getFullNameFormat('Алёхина')).'-Алёхина');
    }
    public function testSplDetect1039()
    {
        $this->assertEquals('S-Аллилуева', trim($this->object->getFullNameFormat('Аллилуева')).'-Аллилуева');
    }
    public function testSplDetect1040()
    {
        $this->assertEquals('S-Андреева', trim($this->object->getFullNameFormat('Андреева')).'-Андреева');
    }
    public function testSplDetect1041()
    {
        $this->assertEquals('S-Андреюшкина', trim($this->object->getFullNameFormat('Андреюшкина')).'-Андреюшкина');
    }
    public function testSplDetect1042()
    {
        $this->assertEquals('S-Андроникова', trim($this->object->getFullNameFormat('Андроникова')).'-Андроникова');
    }
    public function testSplDetect1043()
    {
        $this->assertEquals('S-Андропова', trim($this->object->getFullNameFormat('Андропова')).'-Андропова');
    }
    public function testSplDetect1044()
    {
        $this->assertEquals('S-Аниканова', trim($this->object->getFullNameFormat('Аниканова')).'-Аниканова');
    }
    public function testSplDetect1045()
    {
        $this->assertEquals('S-Анисимова', trim($this->object->getFullNameFormat('Анисимова')).'-Анисимова');
    }
    public function testSplDetect1046()
    {
        $this->assertEquals('S-Анишина', trim($this->object->getFullNameFormat('Анишина')).'-Анишина');
    }
    public function testSplDetect1047()
    {
        $this->assertEquals('S-Анникова', trim($this->object->getFullNameFormat('Анникова')).'-Анникова');
    }
    public function testSplDetect1048()
    {
        $this->assertEquals('S-Анохина', trim($this->object->getFullNameFormat('Анохина')).'-Анохина');
    }
    public function testSplDetect1049()
    {
        $this->assertEquals('S-Аношкина', trim($this->object->getFullNameFormat('Аношкина')).'-Аношкина');
    }
    public function testSplDetect1050()
    {
        $this->assertEquals('S-Антипова', trim($this->object->getFullNameFormat('Антипова')).'-Антипова');
    }
    public function testSplDetect1051()
    {
        $this->assertEquals('S-Антонова', trim($this->object->getFullNameFormat('Антонова')).'-Антонова');
    }
    public function testSplDetect1052()
    {
        $this->assertEquals('S-Артамонова', trim($this->object->getFullNameFormat('Артамонова')).'-Артамонова');
    }
    public function testSplDetect1053()
    {
        $this->assertEquals('S-Арефьева', trim($this->object->getFullNameFormat('Арефьева')).'-Арефьева');
    }
    public function testSplDetect1054()
    {
        $this->assertEquals('S-Аристархова', trim($this->object->getFullNameFormat('Аристархова')).'-Аристархова');
    }
    public function testSplDetect1055()
    {
        $this->assertEquals('S-Арсеньева', trim($this->object->getFullNameFormat('Арсеньева')).'-Арсеньева');
    }
    public function testSplDetect1056()
    {
        $this->assertEquals('S-Артёмова', trim($this->object->getFullNameFormat('Артёмова')).'-Артёмова');
    }
    public function testSplDetect1057()
    {
        $this->assertEquals('S-Асланова', trim($this->object->getFullNameFormat('Асланова')).'-Асланова');
    }
    public function testSplDetect1058()
    {
        $this->assertEquals('S-Аслаханова', trim($this->object->getFullNameFormat('Аслаханова')).'-Аслаханова');
    }
    public function testSplDetect1059()
    {
        $this->assertEquals('S-Астанкова', trim($this->object->getFullNameFormat('Астанкова')).'-Астанкова');
    }
    public function testSplDetect1060()
    {
        $this->assertEquals('S-Астафьева', trim($this->object->getFullNameFormat('Астафьева')).'-Астафьева');
    }
    public function testSplDetect1061()
    {
        $this->assertEquals('S-Астахова', trim($this->object->getFullNameFormat('Астахова')).'-Астахова');
    }
    public function testSplDetect1062()
    {
        $this->assertEquals('S-Афанасьева', trim($this->object->getFullNameFormat('Афанасьева')).'-Афанасьева');
    }
    public function testSplDetect1063()
    {
        $this->assertEquals('S-Афонина', trim($this->object->getFullNameFormat('Афонина')).'-Афонина');
    }
    public function testSplDetect1064()
    {
        $this->assertEquals('S-Аспидова', trim($this->object->getFullNameFormat('Аспидова')).'-Аспидова');
    }
    public function testSplDetect1065()
    {
        $this->assertEquals('S-Бабатьева', trim($this->object->getFullNameFormat('Бабатьева')).'-Бабатьева');
    }
    public function testSplDetect1066()
    {
        $this->assertEquals('S-Бабикова', trim($this->object->getFullNameFormat('Бабикова')).'-Бабикова');
    }
    public function testSplDetect1067()
    {
        $this->assertEquals('S-Бабичева', trim($this->object->getFullNameFormat('Бабичева')).'-Бабичева');
    }
    public function testSplDetect1068()
    {
        $this->assertEquals('S-Бабкина', trim($this->object->getFullNameFormat('Бабкина')).'-Бабкина');
    }
    public function testSplDetect1069()
    {
        $this->assertEquals('S-Бабурина', trim($this->object->getFullNameFormat('Бабурина')).'-Бабурина');
    }
    public function testSplDetect1070()
    {
        $this->assertEquals('S-Багрова', trim($this->object->getFullNameFormat('Багрова')).'-Багрова');
    }
    public function testSplDetect1071()
    {
        $this->assertEquals('S-Бажанова', trim($this->object->getFullNameFormat('Бажанова')).'-Бажанова');
    }
    public function testSplDetect1072()
    {
        $this->assertEquals('S-Баженова', trim($this->object->getFullNameFormat('Баженова')).'-Баженова');
    }
    public function testSplDetect1073()
    {
        $this->assertEquals('S-Базанова', trim($this->object->getFullNameFormat('Базанова')).'-Базанова');
    }
    public function testSplDetect1074()
    {
        $this->assertEquals('S-Базарова', trim($this->object->getFullNameFormat('Базарова')).'-Базарова');
    }
    public function testSplDetect1075()
    {
        $this->assertEquals('S-Балакина', trim($this->object->getFullNameFormat('Балакина')).'-Балакина');
    }
    public function testSplDetect1076()
    {
        $this->assertEquals('S-Балахнова', trim($this->object->getFullNameFormat('Балахнова')).'-Балахнова');
    }
    public function testSplDetect1077()
    {
        $this->assertEquals('S-Балашова', trim($this->object->getFullNameFormat('Балашова')).'-Балашова');
    }
    public function testSplDetect1078()
    {
        $this->assertEquals('S-Баранова', trim($this->object->getFullNameFormat('Баранова')).'-Баранова');
    }
    public function testSplDetect1079()
    {
        $this->assertEquals('S-Барболина', trim($this->object->getFullNameFormat('Барболина')).'-Барболина');
    }
    public function testSplDetect1080()
    {
        $this->assertEquals('S-Баренцева', trim($this->object->getFullNameFormat('Баренцева')).'-Баренцева');
    }
    public function testSplDetect1081()
    {
        $this->assertEquals('S-Баринова', trim($this->object->getFullNameFormat('Баринова')).'-Баринова');
    }
    public function testSplDetect1082()
    {
        $this->assertEquals('S-Баркова', trim($this->object->getFullNameFormat('Баркова')).'-Баркова');
    }
    public function testSplDetect1083()
    {
        $this->assertEquals('S-Барсукова', trim($this->object->getFullNameFormat('Барсукова')).'-Барсукова');
    }
    public function testSplDetect1084()
    {
        $this->assertEquals('S-Батрутдинова', trim($this->object->getFullNameFormat('Батрутдинова')).'-Батрутдинова');
    }
    public function testSplDetect1085()
    {
        $this->assertEquals('S-Безбородова', trim($this->object->getFullNameFormat('Безбородова')).'-Безбородова');
    }
    public function testSplDetect1086()
    {
        $this->assertEquals('S-Безродная', trim($this->object->getFullNameFormat('Безродная')).'-Безродная');
    }
    public function testSplDetect1087()
    {
        $this->assertEquals('S-Безрукова', trim($this->object->getFullNameFormat('Безрукова')).'-Безрукова');
    }
    public function testSplDetect1088()
    {
        $this->assertEquals('S-Безукладникова', trim($this->object->getFullNameFormat('Безукладникова')).'-Безукладникова');
    }
    public function testSplDetect1089()
    {
        $this->assertEquals('S-Беликова', trim($this->object->getFullNameFormat('Беликова')).'-Беликова');
    }
    public function testSplDetect1090()
    {
        $this->assertEquals('S-Белова', trim($this->object->getFullNameFormat('Белова')).'-Белова');
    }
    public function testSplDetect1091()
    {
        $this->assertEquals('S-Беломестнова', trim($this->object->getFullNameFormat('Беломестнова')).'-Беломестнова');
    }
    public function testSplDetect1092()
    {
        $this->assertEquals('S-Бендлина', trim($this->object->getFullNameFormat('Бендлина')).'-Бендлина');
    }
    public function testSplDetect1093()
    {
        $this->assertEquals('S-Бережной', trim($this->object->getFullNameFormat('Бережной')).'-Бережной');
    }
    public function testSplDetect1094()
    {
        $this->assertEquals('S-Белоусова', trim($this->object->getFullNameFormat('Белоусова')).'-Белоусова');
    }
    public function testSplDetect1095()
    {
        $this->assertEquals('S-Бершова', trim($this->object->getFullNameFormat('Бершова')).'-Бершова');
    }
    public function testSplDetect1096()
    {
        $this->assertEquals('S-Беспалова', trim($this->object->getFullNameFormat('Беспалова')).'-Беспалова');
    }
    public function testSplDetect1097()
    {
        $this->assertEquals('S-Бескрёстнова', trim($this->object->getFullNameFormat('Бескрёстнова')).'-Бескрёстнова');
    }
    public function testSplDetect1098()
    {
        $this->assertEquals('S-Бирюкова', trim($this->object->getFullNameFormat('Бирюкова')).'-Бирюкова');
    }
    public function testSplDetect1099()
    {
        $this->assertEquals('S-Блаженова', trim($this->object->getFullNameFormat('Блаженова')).'-Блаженова');
    }
    public function testSplDetect1100()
    {
        $this->assertEquals('S-Блатова', trim($this->object->getFullNameFormat('Блатова')).'-Блатова');
    }
    public function testSplDetect1101()
    {
        $this->assertEquals('S-Блинова', trim($this->object->getFullNameFormat('Блинова')).'-Блинова');
    }
    public function testSplDetect1102()
    {
        $this->assertEquals('S-Блохина', trim($this->object->getFullNameFormat('Блохина')).'-Блохина');
    }
    public function testSplDetect1103()
    {
        $this->assertEquals('S-Боброва', trim($this->object->getFullNameFormat('Боброва')).'-Боброва');
    }
    public function testSplDetect1104()
    {
        $this->assertEquals('S-Бобрикова', trim($this->object->getFullNameFormat('Бобрикова')).'-Бобрикова');
    }
    public function testSplDetect1105()
    {
        $this->assertEquals('S-Богатырёв', trim($this->object->getFullNameFormat('Богатырёв')).'-Богатырёв');
    }
    public function testSplDetect1106()
    {
        $this->assertEquals('S-Богданова', trim($this->object->getFullNameFormat('Богданова')).'-Богданова');
    }
    public function testSplDetect1107()
    {
        $this->assertEquals('S-Боголепова', trim($this->object->getFullNameFormat('Боголепова')).'-Боголепова');
    }
    public function testSplDetect1108()
    {
        $this->assertEquals('S-Боголюбова', trim($this->object->getFullNameFormat('Боголюбова')).'-Боголюбова');
    }
    public function testSplDetect1109()
    {
        $this->assertEquals('S-Богомазова', trim($this->object->getFullNameFormat('Богомазова')).'-Богомазова');
    }
    public function testSplDetect1110()
    {
        $this->assertEquals('S-Богомолова', trim($this->object->getFullNameFormat('Богомолова')).'-Богомолова');
    }
    public function testSplDetect1111()
    {
        $this->assertEquals('S-Богрова', trim($this->object->getFullNameFormat('Богрова')).'-Богрова');
    }
    public function testSplDetect1112()
    {
        $this->assertEquals('S-Бойкова', trim($this->object->getFullNameFormat('Бойкова')).'-Бойкова');
    }
    public function testSplDetect1113()
    {
        $this->assertEquals('S-Болотникова', trim($this->object->getFullNameFormat('Болотникова')).'-Болотникова');
    }
    public function testSplDetect1114()
    {
        $this->assertEquals('S-Болтоногова', trim($this->object->getFullNameFormat('Болтоногова')).'-Болтоногова');
    }
    public function testSplDetect1115()
    {
        $this->assertEquals('S-Большова', trim($this->object->getFullNameFormat('Большова')).'-Большова');
    }
    public function testSplDetect1116()
    {
        $this->assertEquals('S-Бореева', trim($this->object->getFullNameFormat('Бореева')).'-Бореева');
    }
    public function testSplDetect1117()
    {
        $this->assertEquals('S-Бортникова', trim($this->object->getFullNameFormat('Бортникова')).'-Бортникова');
    }
    public function testSplDetect1118()
    {
        $this->assertEquals('S-Борзилова', trim($this->object->getFullNameFormat('Борзилова')).'-Борзилова');
    }
    public function testSplDetect1119()
    {
        $this->assertEquals('S-Борцова', trim($this->object->getFullNameFormat('Борцова')).'-Борцова');
    }
    public function testSplDetect1120()
    {
        $this->assertEquals('S-Брагина', trim($this->object->getFullNameFormat('Брагина')).'-Брагина');
    }
    public function testSplDetect1121()
    {
        $this->assertEquals('S-Брежнева', trim($this->object->getFullNameFormat('Брежнева')).'-Брежнева');
    }
    public function testSplDetect1122()
    {
        $this->assertEquals('S-Бугакова', trim($this->object->getFullNameFormat('Бугакова')).'-Бугакова');
    }
    public function testSplDetect1123()
    {
        $this->assertEquals('S-Буданова', trim($this->object->getFullNameFormat('Буданова')).'-Буданова');
    }
    public function testSplDetect1124()
    {
        $this->assertEquals('S-Будникова', trim($this->object->getFullNameFormat('Будникова')).'-Будникова');
    }
    public function testSplDetect1125()
    {
        $this->assertEquals('S-Будылина', trim($this->object->getFullNameFormat('Будылина')).'-Будылина');
    }
    public function testSplDetect1126()
    {
        $this->assertEquals('S-Букина', trim($this->object->getFullNameFormat('Букина')).'-Букина');
    }
    public function testSplDetect1127()
    {
        $this->assertEquals('S-Букирь', trim($this->object->getFullNameFormat('Букирь')).'-Букирь');
    }
    public function testSplDetect1128()
    {
        $this->assertEquals('S-Буклина', trim($this->object->getFullNameFormat('Буклина')).'-Буклина');
    }
    public function testSplDetect1129()
    {
        $this->assertEquals('S-Булгакова', trim($this->object->getFullNameFormat('Булгакова')).'-Булгакова');
    }
    public function testSplDetect1130()
    {
        $this->assertEquals('S-Бунина', trim($this->object->getFullNameFormat('Бунина')).'-Бунина');
    }
    public function testSplDetect1131()
    {
        $this->assertEquals('S-Буркова', trim($this->object->getFullNameFormat('Буркова')).'-Буркова');
    }
    public function testSplDetect1132()
    {
        $this->assertEquals('S-Бурова', trim($this->object->getFullNameFormat('Бурова')).'-Бурова');
    }
    public function testSplDetect1133()
    {
        $this->assertEquals('S-Бурцова', trim($this->object->getFullNameFormat('Бурцова')).'-Бурцова');
    }
    public function testSplDetect1134()
    {
        $this->assertEquals('S-Бурякова', trim($this->object->getFullNameFormat('Бурякова')).'-Бурякова');
    }
    public function testSplDetect1135()
    {
        $this->assertEquals('S-Бутылина', trim($this->object->getFullNameFormat('Бутылина')).'-Бутылина');
    }
    public function testSplDetect1136()
    {
        $this->assertEquals('S-Былинкина', trim($this->object->getFullNameFormat('Былинкина')).'-Былинкина');
    }
    public function testSplDetect1137()
    {
        $this->assertEquals('S-Бычкова', trim($this->object->getFullNameFormat('Бычкова')).'-Бычкова');
    }
    public function testSplDetect1138()
    {
        $this->assertEquals('S-Вавилова', trim($this->object->getFullNameFormat('Вавилова')).'-Вавилова');
    }
    public function testSplDetect1139()
    {
        $this->assertEquals('S-Вагина', trim($this->object->getFullNameFormat('Вагина')).'-Вагина');
    }
    public function testSplDetect1140()
    {
        $this->assertEquals('S-Вазова', trim($this->object->getFullNameFormat('Вазова')).'-Вазова');
    }
    public function testSplDetect1141()
    {
        $this->assertEquals('S-Валевач', trim($this->object->getFullNameFormat('Валевач')).'-Валевач');
    }
    public function testSplDetect1142()
    {
        $this->assertEquals('S-Варенникова', trim($this->object->getFullNameFormat('Варенникова')).'-Варенникова');
    }
    public function testSplDetect1143()
    {
        $this->assertEquals('S-Васильева', trim($this->object->getFullNameFormat('Васильева')).'-Васильева');
    }
    public function testSplDetect1144()
    {
        $this->assertEquals('S-Васина', trim($this->object->getFullNameFormat('Васина')).'-Васина');
    }
    public function testSplDetect1145()
    {
        $this->assertEquals('S-Васнева', trim($this->object->getFullNameFormat('Васнева')).'-Васнева');
    }
    public function testSplDetect1146()
    {
        $this->assertEquals('S-Васнецова', trim($this->object->getFullNameFormat('Васнецова')).'-Васнецова');
    }
    public function testSplDetect1147()
    {
        $this->assertEquals('S-Вахрова', trim($this->object->getFullNameFormat('Вахрова')).'-Вахрова');
    }
    public function testSplDetect1148()
    {
        $this->assertEquals('S-Вахрушева', trim($this->object->getFullNameFormat('Вахрушева')).'-Вахрушева');
    }
    public function testSplDetect1149()
    {
        $this->assertEquals('S-Венедиктова', trim($this->object->getFullNameFormat('Венедиктова')).'-Венедиктова');
    }
    public function testSplDetect1150()
    {
        $this->assertEquals('S-Веденеева', trim($this->object->getFullNameFormat('Веденеева')).'-Веденеева');
    }
    public function testSplDetect1151()
    {
        $this->assertEquals('S-Веденина', trim($this->object->getFullNameFormat('Веденина')).'-Веденина');
    }
    public function testSplDetect1152()
    {
        $this->assertEquals('S-Ведерникова', trim($this->object->getFullNameFormat('Ведерникова')).'-Ведерникова');
    }
    public function testSplDetect1153()
    {
        $this->assertEquals('S-Вергунова', trim($this->object->getFullNameFormat('Вергунова')).'-Вергунова');
    }
    public function testSplDetect1154()
    {
        $this->assertEquals('S-Верещагина', trim($this->object->getFullNameFormat('Верещагина')).'-Верещагина');
    }
    public function testSplDetect1155()
    {
        $this->assertEquals('S-Вершинина', trim($this->object->getFullNameFormat('Вершинина')).'-Вершинина');
    }
    public function testSplDetect1156()
    {
        $this->assertEquals('S-Веселова', trim($this->object->getFullNameFormat('Веселова')).'-Веселова');
    }
    public function testSplDetect1157()
    {
        $this->assertEquals('S-Викашева', trim($this->object->getFullNameFormat('Викашева')).'-Викашева');
    }
    public function testSplDetect1158()
    {
        $this->assertEquals('S-Виноградова', trim($this->object->getFullNameFormat('Виноградова')).'-Виноградова');
    }
    public function testSplDetect1159()
    {
        $this->assertEquals('S-Винокурова', trim($this->object->getFullNameFormat('Винокурова')).'-Винокурова');
    }
    public function testSplDetect1160()
    {
        $this->assertEquals('S-Витаева', trim($this->object->getFullNameFormat('Витаева')).'-Витаева');
    }
    public function testSplDetect1161()
    {
        $this->assertEquals('S-Витвинина', trim($this->object->getFullNameFormat('Витвинина')).'-Витвинина');
    }
    public function testSplDetect1162()
    {
        $this->assertEquals('S-Вицина', trim($this->object->getFullNameFormat('Вицина')).'-Вицина');
    }
    public function testSplDetect1163()
    {
        $this->assertEquals('S-Водоватова', trim($this->object->getFullNameFormat('Водоватова')).'-Водоватова');
    }
    public function testSplDetect1164()
    {
        $this->assertEquals('S-Воликова', trim($this->object->getFullNameFormat('Воликова')).'-Воликова');
    }
    public function testSplDetect1165()
    {
        $this->assertEquals('S-Волкова', trim($this->object->getFullNameFormat('Волкова')).'-Волкова');
    }
    public function testSplDetect1166()
    {
        $this->assertEquals('S-Вольвакова', trim($this->object->getFullNameFormat('Вольвакова')).'-Вольвакова');
    }
    public function testSplDetect1167()
    {
        $this->assertEquals('S-Воробьева', trim($this->object->getFullNameFormat('Воробьева')).'-Воробьева');
    }
    public function testSplDetect1168()
    {
        $this->assertEquals('S-Воронина', trim($this->object->getFullNameFormat('Воронина')).'-Воронина');
    }
    public function testSplDetect1169()
    {
        $this->assertEquals('S-Воронова', trim($this->object->getFullNameFormat('Воронова')).'-Воронова');
    }
    public function testSplDetect1170()
    {
        $this->assertEquals('S-Воронкова', trim($this->object->getFullNameFormat('Воронкова')).'-Воронкова');
    }
    public function testSplDetect1171()
    {
        $this->assertEquals('S-Воронцова', trim($this->object->getFullNameFormat('Воронцова')).'-Воронцова');
    }
    public function testSplDetect1172()
    {
        $this->assertEquals('S-Воскобойникова', trim($this->object->getFullNameFormat('Воскобойникова')).'-Воскобойникова');
    }
    public function testSplDetect1173()
    {
        $this->assertEquals('S-Вотякова', trim($this->object->getFullNameFormat('Вотякова')).'-Вотякова');
    }
    public function testSplDetect1174()
    {
        $this->assertEquals('S-Вырыпаева', trim($this->object->getFullNameFormat('Вырыпаева')).'-Вырыпаева');
    }
    public function testSplDetect1175()
    {
        $this->assertEquals('S-Гаврикова', trim($this->object->getFullNameFormat('Гаврикова')).'-Гаврикова');
    }
    public function testSplDetect1176()
    {
        $this->assertEquals('S-Гаврилова', trim($this->object->getFullNameFormat('Гаврилова')).'-Гаврилова');
    }
    public function testSplDetect1177()
    {
        $this->assertEquals('S-Гагарина', trim($this->object->getFullNameFormat('Гагарина')).'-Гагарина');
    }
    public function testSplDetect1178()
    {
        $this->assertEquals('S-Гаголина', trim($this->object->getFullNameFormat('Гаголина')).'-Гаголина');
    }
    public function testSplDetect1179()
    {
        $this->assertEquals('S-Галдина', trim($this->object->getFullNameFormat('Галдина')).'-Галдина');
    }
    public function testSplDetect1180()
    {
        $this->assertEquals('S-Галкина', trim($this->object->getFullNameFormat('Галкина')).'-Галкина');
    }
    public function testSplDetect1181()
    {
        $this->assertEquals('S-Галыгина', trim($this->object->getFullNameFormat('Галыгина')).'-Галыгина');
    }
    public function testSplDetect1182()
    {
        $this->assertEquals('S-Гарина', trim($this->object->getFullNameFormat('Гарина')).'-Гарина');
    }
    public function testSplDetect1183()
    {
        $this->assertEquals('S-Гачева', trim($this->object->getFullNameFormat('Гачева')).'-Гачева');
    }
    public function testSplDetect1184()
    {
        $this->assertEquals('S-Генкина', trim($this->object->getFullNameFormat('Генкина')).'-Генкина');
    }
    public function testSplDetect1185()
    {
        $this->assertEquals('S-Герасимова', trim($this->object->getFullNameFormat('Герасимова')).'-Герасимова');
    }
    public function testSplDetect1186()
    {
        $this->assertEquals('S-Гибазова', trim($this->object->getFullNameFormat('Гибазова')).'-Гибазова');
    }
    public function testSplDetect1187()
    {
        $this->assertEquals('S-Гилёва', trim($this->object->getFullNameFormat('Гилёва')).'-Гилёва');
    }
    public function testSplDetect1188()
    {
        $this->assertEquals('S-Глазкова', trim($this->object->getFullNameFormat('Глазкова')).'-Глазкова');
    }
    public function testSplDetect1189()
    {
        $this->assertEquals('S-Голованова', trim($this->object->getFullNameFormat('Голованова')).'-Голованова');
    }
    public function testSplDetect1190()
    {
        $this->assertEquals('S-Головаина', trim($this->object->getFullNameFormat('Головаина')).'-Головаина');
    }
    public function testSplDetect1191()
    {
        $this->assertEquals('S-Голодяева', trim($this->object->getFullNameFormat('Голодяева')).'-Голодяева');
    }
    public function testSplDetect1192()
    {
        $this->assertEquals('S-Голубева', trim($this->object->getFullNameFormat('Голубева')).'-Голубева');
    }
    public function testSplDetect1193()
    {
        $this->assertEquals('S-Голубова', trim($this->object->getFullNameFormat('Голубова')).'-Голубова');
    }
    public function testSplDetect1194()
    {
        $this->assertEquals('S-Голубцова', trim($this->object->getFullNameFormat('Голубцова')).'-Голубцова');
    }
    public function testSplDetect1195()
    {
        $this->assertEquals('S-Гончарова', trim($this->object->getFullNameFormat('Гончарова')).'-Гончарова');
    }
    public function testSplDetect1196()
    {
        $this->assertEquals('S-Горбачёв', trim($this->object->getFullNameFormat('Горбачёв')).'-Горбачёв');
    }
    public function testSplDetect1197()
    {
        $this->assertEquals('S-Горбунова', trim($this->object->getFullNameFormat('Горбунова')).'-Горбунова');
    }
    public function testSplDetect1198()
    {
        $this->assertEquals('S-Горбункова', trim($this->object->getFullNameFormat('Горбункова')).'-Горбункова');
    }
    public function testSplDetect1199()
    {
        $this->assertEquals('S-Горева', trim($this->object->getFullNameFormat('Горева')).'-Горева');
    }
    public function testSplDetect1200()
    {
        $this->assertEquals('S-Горелова', trim($this->object->getFullNameFormat('Горелова')).'-Горелова');
    }
    public function testSplDetect1201()
    {
        $this->assertEquals('S-Горемыкина', trim($this->object->getFullNameFormat('Горемыкина')).'-Горемыкина');
    }
    public function testSplDetect1202()
    {
        $this->assertEquals('S-Горюнова', trim($this->object->getFullNameFormat('Горюнова')).'-Горюнова');
    }
    public function testSplDetect1203()
    {
        $this->assertEquals('S-Грачёва', trim($this->object->getFullNameFormat('Грачёва')).'-Грачёва');
    }
    public function testSplDetect1204()
    {
        $this->assertEquals('S-Графова', trim($this->object->getFullNameFormat('Графова')).'-Графова');
    }
    public function testSplDetect1205()
    {
        $this->assertEquals('S-Гретченко', trim($this->object->getFullNameFormat('Гретченко')).'-Гретченко');
    }
    public function testSplDetect1206()
    {
        $this->assertEquals('S-Гречко', trim($this->object->getFullNameFormat('Гречко')).'-Гречко');
    }
    public function testSplDetect1207()
    {
        $this->assertEquals('S-Грешнева', trim($this->object->getFullNameFormat('Грешнева')).'-Грешнева');
    }
    public function testSplDetect1208()
    {
        $this->assertEquals('S-Грибова', trim($this->object->getFullNameFormat('Грибова')).'-Грибова');
    }
    public function testSplDetect1209()
    {
        $this->assertEquals('S-Грибоедова', trim($this->object->getFullNameFormat('Грибоедова')).'-Грибоедова');
    }
    public function testSplDetect1210()
    {
        $this->assertEquals('S-Григорьева', trim($this->object->getFullNameFormat('Григорьева')).'-Григорьева');
    }
    public function testSplDetect1211()
    {
        $this->assertEquals('S-Гринаина', trim($this->object->getFullNameFormat('Гринаина')).'-Гринаина');
    }
    public function testSplDetect1212()
    {
        $this->assertEquals('S-Гришина', trim($this->object->getFullNameFormat('Гришина')).'-Гришина');
    }
    public function testSplDetect1213()
    {
        $this->assertEquals('S-Громова', trim($this->object->getFullNameFormat('Громова')).'-Громова');
    }
    public function testSplDetect1214()
    {
        $this->assertEquals('S-Громыко', trim($this->object->getFullNameFormat('Громыко')).'-Громыко');
    }
    public function testSplDetect1215()
    {
        $this->assertEquals('S-Гулина', trim($this->object->getFullNameFormat('Гулина')).'-Гулина');
    }
    public function testSplDetect1216()
    {
        $this->assertEquals('S-Гурьянова', trim($this->object->getFullNameFormat('Гурьянова')).'-Гурьянова');
    }
    public function testSplDetect1217()
    {
        $this->assertEquals('S-Гусарова', trim($this->object->getFullNameFormat('Гусарова')).'-Гусарова');
    }
    public function testSplDetect1218()
    {
        $this->assertEquals('S-Гусева', trim($this->object->getFullNameFormat('Гусева')).'-Гусева');
    }
    public function testSplDetect1219()
    {
        $this->assertEquals('S-Гунина', trim($this->object->getFullNameFormat('Гунина')).'-Гунина');
    }
    public function testSplDetect1220()
    {
        $this->assertEquals('S-Гущина', trim($this->object->getFullNameFormat('Гущина')).'-Гущина');
    }
    public function testSplDetect1221()
    {
        $this->assertEquals('S-Головаха', trim($this->object->getFullNameFormat('Головаха')).'-Головаха');
    }
    public function testSplDetect1222()
    {
        $this->assertEquals('S-Дорофеева', trim($this->object->getFullNameFormat('Дорофеева')).'-Дорофеева');
    }
    public function testSplDetect1223()
    {
        $this->assertEquals('S-Давыдкина', trim($this->object->getFullNameFormat('Давыдкина')).'-Давыдкина');
    }
    public function testSplDetect1224()
    {
        $this->assertEquals('S-Данильцина', trim($this->object->getFullNameFormat('Данильцина')).'-Данильцина');
    }
    public function testSplDetect1225()
    {
        $this->assertEquals('S-Дворникова', trim($this->object->getFullNameFormat('Дворникова')).'-Дворникова');
    }
    public function testSplDetect1226()
    {
        $this->assertEquals('S-Деменок', trim($this->object->getFullNameFormat('Деменок')).'-Деменок');
    }
    public function testSplDetect1227()
    {
        $this->assertEquals('S-Дементьева', trim($this->object->getFullNameFormat('Дементьева')).'-Дементьева');
    }
    public function testSplDetect1228()
    {
        $this->assertEquals('S-Демидова', trim($this->object->getFullNameFormat('Демидова')).'-Демидова');
    }
    public function testSplDetect1229()
    {
        $this->assertEquals('S-Деникина', trim($this->object->getFullNameFormat('Деникина')).'-Деникина');
    }
    public function testSplDetect1230()
    {
        $this->assertEquals('S-Дёгтина', trim($this->object->getFullNameFormat('Дёгтина')).'-Дёгтина');
    }
    public function testSplDetect1231()
    {
        $this->assertEquals('S-Дегтярева', trim($this->object->getFullNameFormat('Дегтярева')).'-Дегтярева');
    }
    public function testSplDetect1232()
    {
        $this->assertEquals('S-Дежнёв', trim($this->object->getFullNameFormat('Дежнёв')).'-Дежнёв');
    }
    public function testSplDetect1233()
    {
        $this->assertEquals('S-Делова', trim($this->object->getFullNameFormat('Делова')).'-Делова');
    }
    public function testSplDetect1234()
    {
        $this->assertEquals('S-Дементьева', trim($this->object->getFullNameFormat('Дементьева')).'-Дементьева');
    }
    public function testSplDetect1235()
    {
        $this->assertEquals('S-Дёмина', trim($this->object->getFullNameFormat('Дёмина')).'-Дёмина');
    }
    public function testSplDetect1236()
    {
        $this->assertEquals('S-Державина', trim($this->object->getFullNameFormat('Державина')).'-Державина');
    }
    public function testSplDetect1237()
    {
        $this->assertEquals('S-Дернова', trim($this->object->getFullNameFormat('Дернова')).'-Дернова');
    }
    public function testSplDetect1238()
    {
        $this->assertEquals('S-Десяткова', trim($this->object->getFullNameFormat('Десяткова')).'-Десяткова');
    }
    public function testSplDetect1239()
    {
        $this->assertEquals('S-Дмитриева', trim($this->object->getFullNameFormat('Дмитриева')).'-Дмитриева');
    }
    public function testSplDetect1240()
    {
        $this->assertEquals('S-Добронравова', trim($this->object->getFullNameFormat('Добронравова')).'-Добронравова');
    }
    public function testSplDetect1241()
    {
        $this->assertEquals('S-Добрынина', trim($this->object->getFullNameFormat('Добрынина')).'-Добрынина');
    }
    public function testSplDetect1242()
    {
        $this->assertEquals('S-Долгорукова', trim($this->object->getFullNameFormat('Долгорукова')).'-Долгорукова');
    }
    public function testSplDetect1243()
    {
        $this->assertEquals('S-Должикова', trim($this->object->getFullNameFormat('Должикова')).'-Должикова');
    }
    public function testSplDetect1244()
    {
        $this->assertEquals('S-Домашева', trim($this->object->getFullNameFormat('Домашева')).'-Домашева');
    }
    public function testSplDetect1245()
    {
        $this->assertEquals('S-Достовалова', trim($this->object->getFullNameFormat('Достовалова')).'-Достовалова');
    }
    public function testSplDetect1246()
    {
        $this->assertEquals('S-Драгомирова', trim($this->object->getFullNameFormat('Драгомирова')).'-Драгомирова');
    }
    public function testSplDetect1247()
    {
        $this->assertEquals('S-Дресвянина', trim($this->object->getFullNameFormat('Дресвянина')).'-Дресвянина');
    }
    public function testSplDetect1248()
    {
        $this->assertEquals('S-Дрёмова', trim($this->object->getFullNameFormat('Дрёмова')).'-Дрёмова');
    }
    public function testSplDetect1249()
    {
        $this->assertEquals('S-Друганина', trim($this->object->getFullNameFormat('Друганина')).'-Друганина');
    }
    public function testSplDetect1250()
    {
        $this->assertEquals('S-Другова', trim($this->object->getFullNameFormat('Другова')).'-Другова');
    }
    public function testSplDetect1251()
    {
        $this->assertEquals('S-Дубинина', trim($this->object->getFullNameFormat('Дубинина')).'-Дубинина');
    }
    public function testSplDetect1252()
    {
        $this->assertEquals('S-Дубова', trim($this->object->getFullNameFormat('Дубова')).'-Дубова');
    }
    public function testSplDetect1253()
    {
        $this->assertEquals('S-Дубровская', trim($this->object->getFullNameFormat('Дубровская')).'-Дубровская');
    }
    public function testSplDetect1254()
    {
        $this->assertEquals('S-Дульцева', trim($this->object->getFullNameFormat('Дульцева')).'-Дульцева');
    }
    public function testSplDetect1255()
    {
        $this->assertEquals('S-Думановская', trim($this->object->getFullNameFormat('Думановская')).'-Думановская');
    }
    public function testSplDetect1256()
    {
        $this->assertEquals('S-Дурова', trim($this->object->getFullNameFormat('Дурова')).'-Дурова');
    }
    public function testSplDetect1257()
    {
        $this->assertEquals('S-Дятлова', trim($this->object->getFullNameFormat('Дятлова')).'-Дятлова');
    }
    public function testSplDetect1258()
    {
        $this->assertEquals('S-Евстигнеева', trim($this->object->getFullNameFormat('Евстигнеева')).'-Евстигнеева');
    }
    public function testSplDetect1259()
    {
        $this->assertEquals('S-Егорова', trim($this->object->getFullNameFormat('Егорова')).'-Егорова');
    }
    public function testSplDetect1260()
    {
        $this->assertEquals('S-Едемская', trim($this->object->getFullNameFormat('Едемская')).'-Едемская');
    }
    public function testSplDetect1261()
    {
        $this->assertEquals('S-Ежова', trim($this->object->getFullNameFormat('Ежова')).'-Ежова');
    }
    public function testSplDetect1262()
    {
        $this->assertEquals('S-Елагина', trim($this->object->getFullNameFormat('Елагина')).'-Елагина');
    }
    public function testSplDetect1263()
    {
        $this->assertEquals('S-Елизарова', trim($this->object->getFullNameFormat('Елизарова')).'-Елизарова');
    }
    public function testSplDetect1264()
    {
        $this->assertEquals('S-Елисеева', trim($this->object->getFullNameFormat('Елисеева')).'-Елисеева');
    }
    public function testSplDetect1265()
    {
        $this->assertEquals('S-Ельцина', trim($this->object->getFullNameFormat('Ельцина')).'-Ельцина');
    }
    public function testSplDetect1266()
    {
        $this->assertEquals('S-Ельцова', trim($this->object->getFullNameFormat('Ельцова')).'-Ельцова');
    }
    public function testSplDetect1267()
    {
        $this->assertEquals('S-Емельяненко', trim($this->object->getFullNameFormat('Емельяненко')).'-Емельяненко');
    }
    public function testSplDetect1268()
    {
        $this->assertEquals('S-Емельянова', trim($this->object->getFullNameFormat('Емельянова')).'-Емельянова');
    }
    public function testSplDetect1269()
    {
        $this->assertEquals('S-Енина', trim($this->object->getFullNameFormat('Енина')).'-Енина');
    }
    public function testSplDetect1270()
    {
        $this->assertEquals('S-Ерзова', trim($this->object->getFullNameFormat('Ерзова')).'-Ерзова');
    }
    public function testSplDetect1271()
    {
        $this->assertEquals('S-Ермакова', trim($this->object->getFullNameFormat('Ермакова')).'-Ермакова');
    }
    public function testSplDetect1272()
    {
        $this->assertEquals('S-Ермилова', trim($this->object->getFullNameFormat('Ермилова')).'-Ермилова');
    }
    public function testSplDetect1273()
    {
        $this->assertEquals('S-Еромеева', trim($this->object->getFullNameFormat('Еромеева')).'-Еромеева');
    }
    public function testSplDetect1274()
    {
        $this->assertEquals('S-Ерофеева', trim($this->object->getFullNameFormat('Ерофеева')).'-Ерофеева');
    }
    public function testSplDetect1275()
    {
        $this->assertEquals('S-Ершова', trim($this->object->getFullNameFormat('Ершова')).'-Ершова');
    }
    public function testSplDetect1276()
    {
        $this->assertEquals('S-Есипова', trim($this->object->getFullNameFormat('Есипова')).'-Есипова');
    }
    public function testSplDetect1277()
    {
        $this->assertEquals('S-Ефимова', trim($this->object->getFullNameFormat('Ефимова')).'-Ефимова');
    }
    public function testSplDetect1278()
    {
        $this->assertEquals('S-Ефремова', trim($this->object->getFullNameFormat('Ефремова')).'-Ефремова');
    }
    public function testSplDetect1279()
    {
        $this->assertEquals('S-Емелина', trim($this->object->getFullNameFormat('Емелина')).'-Емелина');
    }
    public function testSplDetect1280()
    {
        $this->assertEquals('S-Ерохина', trim($this->object->getFullNameFormat('Ерохина')).'-Ерохина');
    }
    public function testSplDetect1281()
    {
        $this->assertEquals('S-Ерёмина', trim($this->object->getFullNameFormat('Ерёмина')).'-Ерёмина');
    }
    public function testSplDetect1282()
    {
        $this->assertEquals('S-Ешеваская', trim($this->object->getFullNameFormat('Ешеваская')).'-Ешеваская');
    }
    public function testSplDetect1283()
    {
        $this->assertEquals('S-Жабина', trim($this->object->getFullNameFormat('Жабина')).'-Жабина');
    }
    public function testSplDetect1284()
    {
        $this->assertEquals('S-Жаркова', trim($this->object->getFullNameFormat('Жаркова')).'-Жаркова');
    }
    public function testSplDetect1285()
    {
        $this->assertEquals('S-Жарыхина', trim($this->object->getFullNameFormat('Жарыхина')).'-Жарыхина');
    }
    public function testSplDetect1286()
    {
        $this->assertEquals('S-Жвикова', trim($this->object->getFullNameFormat('Жвикова')).'-Жвикова');
    }
    public function testSplDetect1287()
    {
        $this->assertEquals('S-Жданова', trim($this->object->getFullNameFormat('Жданова')).'-Жданова');
    }
    public function testSplDetect1288()
    {
        $this->assertEquals('S-Жеглова', trim($this->object->getFullNameFormat('Жеглова')).'-Жеглова');
    }
    public function testSplDetect1289()
    {
        $this->assertEquals('S-Железкина', trim($this->object->getFullNameFormat('Железкина')).'-Железкина');
    }
    public function testSplDetect1290()
    {
        $this->assertEquals('S-Жестакова', trim($this->object->getFullNameFormat('Жестакова')).'-Жестакова');
    }
    public function testSplDetect1291()
    {
        $this->assertEquals('S-Живенкова', trim($this->object->getFullNameFormat('Живенкова')).'-Живенкова');
    }
    public function testSplDetect1292()
    {
        $this->assertEquals('S-Жиглова', trim($this->object->getFullNameFormat('Жиглова')).'-Жиглова');
    }
    public function testSplDetect1293()
    {
        $this->assertEquals('S-Жигунова', trim($this->object->getFullNameFormat('Жигунова')).'-Жигунова');
    }
    public function testSplDetect1294()
    {
        $this->assertEquals('S-Жидкова', trim($this->object->getFullNameFormat('Жидкова')).'-Жидкова');
    }
    public function testSplDetect1295()
    {
        $this->assertEquals('S-Жикина', trim($this->object->getFullNameFormat('Жикина')).'-Жикина');
    }
    public function testSplDetect1296()
    {
        $this->assertEquals('S-Жилина', trim($this->object->getFullNameFormat('Жилина')).'-Жилина');
    }
    public function testSplDetect1297()
    {
        $this->assertEquals('S-Жилова', trim($this->object->getFullNameFormat('Жилова')).'-Жилова');
    }
    public function testSplDetect1298()
    {
        $this->assertEquals('S-Жолдина', trim($this->object->getFullNameFormat('Жолдина')).'-Жолдина');
    }
    public function testSplDetect1299()
    {
        $this->assertEquals('S-Жукова', trim($this->object->getFullNameFormat('Жукова')).'-Жукова');
    }
    public function testSplDetect1300()
    {
        $this->assertEquals('S-Жутова', trim($this->object->getFullNameFormat('Жутова')).'-Жутова');
    }
    public function testSplDetect1301()
    {
        $this->assertEquals('S-Журавлёв', trim($this->object->getFullNameFormat('Журавлёв')).'-Журавлёв');
    }
    public function testSplDetect1302()
    {
        $this->assertEquals('S-Журова', trim($this->object->getFullNameFormat('Журова')).'-Журова');
    }
    public function testSplDetect1303()
    {
        $this->assertEquals('S-Заврагина', trim($this->object->getFullNameFormat('Заврагина')).'-Заврагина');
    }
    public function testSplDetect1304()
    {
        $this->assertEquals('S-Завражина', trim($this->object->getFullNameFormat('Завражина')).'-Завражина');
    }
    public function testSplDetect1305()
    {
        $this->assertEquals('S-Завражнова', trim($this->object->getFullNameFormat('Завражнова')).'-Завражнова');
    }
    public function testSplDetect1306()
    {
        $this->assertEquals('S-Завразина', trim($this->object->getFullNameFormat('Завразина')).'-Завразина');
    }
    public function testSplDetect1307()
    {
        $this->assertEquals('S-Завьялова', trim($this->object->getFullNameFormat('Завьялова')).'-Завьялова');
    }
    public function testSplDetect1308()
    {
        $this->assertEquals('S-Задорнова', trim($this->object->getFullNameFormat('Задорнова')).'-Задорнова');
    }
    public function testSplDetect1309()
    {
        $this->assertEquals('S-Задорожный', trim($this->object->getFullNameFormat('Задорожный')).'-Задорожный');
    }
    public function testSplDetect1310()
    {
        $this->assertEquals('S-Зайцева', trim($this->object->getFullNameFormat('Зайцева')).'-Зайцева');
    }
    public function testSplDetect1311()
    {
        $this->assertEquals('S-Закревская', trim($this->object->getFullNameFormat('Закревская')).'-Закревская');
    }
    public function testSplDetect1312()
    {
        $this->assertEquals('S-Закрятина', trim($this->object->getFullNameFormat('Закрятина')).'-Закрятина');
    }
    public function testSplDetect1313()
    {
        $this->assertEquals('S-Захарова', trim($this->object->getFullNameFormat('Захарова')).'-Захарова');
    }
    public function testSplDetect1314()
    {
        $this->assertEquals('S-Захарьина', trim($this->object->getFullNameFormat('Захарьина')).'-Захарьина');
    }
    public function testSplDetect1315()
    {
        $this->assertEquals('S-Звягина', trim($this->object->getFullNameFormat('Звягина')).'-Звягина');
    }
    public function testSplDetect1316()
    {
        $this->assertEquals('S-Зёмина', trim($this->object->getFullNameFormat('Зёмина')).'-Зёмина');
    }
    public function testSplDetect1317()
    {
        $this->assertEquals('S-Зимина', trim($this->object->getFullNameFormat('Зимина')).'-Зимина');
    }
    public function testSplDetect1318()
    {
        $this->assertEquals('S-Золина', trim($this->object->getFullNameFormat('Золина')).'-Золина');
    }
    public function testSplDetect1319()
    {
        $this->assertEquals('S-Зонова', trim($this->object->getFullNameFormat('Зонова')).'-Зонова');
    }
    public function testSplDetect1320()
    {
        $this->assertEquals('S-Зубкова', trim($this->object->getFullNameFormat('Зубкова')).'-Зубкова');
    }
    public function testSplDetect1321()
    {
        $this->assertEquals('S-Зубова', trim($this->object->getFullNameFormat('Зубова')).'-Зубова');
    }
    public function testSplDetect1322()
    {
        $this->assertEquals('S-Зуева', trim($this->object->getFullNameFormat('Зуева')).'-Зуева');
    }
    public function testSplDetect1323()
    {
        $this->assertEquals('S-Зуйкова', trim($this->object->getFullNameFormat('Зуйкова')).'-Зуйкова');
    }
    public function testSplDetect1324()
    {
        $this->assertEquals('S-Зимнякова', trim($this->object->getFullNameFormat('Зимнякова')).'-Зимнякова');
    }
    public function testSplDetect1325()
    {
        $this->assertEquals('S-Зиначенко', trim($this->object->getFullNameFormat('Зиначенко')).'-Зиначенко');
    }
    public function testSplDetect1326()
    {
        $this->assertEquals('S-Зыкина', trim($this->object->getFullNameFormat('Зыкина')).'-Зыкина');
    }
    public function testSplDetect1327()
    {
        $this->assertEquals('S-Зырянова', trim($this->object->getFullNameFormat('Зырянова')).'-Зырянова');
    }
    public function testSplDetect1328()
    {
        $this->assertEquals('S-Зюганова', trim($this->object->getFullNameFormat('Зюганова')).'-Зюганова');
    }
    public function testSplDetect1329()
    {
        $this->assertEquals('S-Зверева', trim($this->object->getFullNameFormat('Зверева')).'-Зверева');
    }
    public function testSplDetect1330()
    {
        $this->assertEquals('S-Игнаткович', trim($this->object->getFullNameFormat('Игнаткович')).'-Игнаткович');
    }
    public function testSplDetect1331()
    {
        $this->assertEquals('S-Ивакина', trim($this->object->getFullNameFormat('Ивакина')).'-Ивакина');
    }
    public function testSplDetect1332()
    {
        $this->assertEquals('S-Ибрагимова', trim($this->object->getFullNameFormat('Ибрагимова')).'-Ибрагимова');
    }
    public function testSplDetect1333()
    {
        $this->assertEquals('S-Иванова', trim($this->object->getFullNameFormat('Иванова')).'-Иванова');
    }
    public function testSplDetect1334()
    {
        $this->assertEquals('S-Иванкова', trim($this->object->getFullNameFormat('Иванкова')).'-Иванкова');
    }
    public function testSplDetect1335()
    {
        $this->assertEquals('S-Ивашина', trim($this->object->getFullNameFormat('Ивашина')).'-Ивашина');
    }
    public function testSplDetect1336()
    {
        $this->assertEquals('S-Ивашова', trim($this->object->getFullNameFormat('Ивашова')).'-Ивашова');
    }
    public function testSplDetect1337()
    {
        $this->assertEquals('S-Ивкина', trim($this->object->getFullNameFormat('Ивкина')).'-Ивкина');
    }
    public function testSplDetect1338()
    {
        $this->assertEquals('S-Иволгина', trim($this->object->getFullNameFormat('Иволгина')).'-Иволгина');
    }
    public function testSplDetect1339()
    {
        $this->assertEquals('S-Игнатьева', trim($this->object->getFullNameFormat('Игнатьева')).'-Игнатьева');
    }
    public function testSplDetect1340()
    {
        $this->assertEquals('S-Игошина', trim($this->object->getFullNameFormat('Игошина')).'-Игошина');
    }
    public function testSplDetect1341()
    {
        $this->assertEquals('S-Измайлова', trim($this->object->getFullNameFormat('Измайлова')).'-Измайлова');
    }
    public function testSplDetect1342()
    {
        $this->assertEquals('S-Иканова', trim($this->object->getFullNameFormat('Иканова')).'-Иканова');
    }
    public function testSplDetect1343()
    {
        $this->assertEquals('S-Икашева', trim($this->object->getFullNameFormat('Икашева')).'-Икашева');
    }
    public function testSplDetect1344()
    {
        $this->assertEquals('S-Ильина', trim($this->object->getFullNameFormat('Ильина')).'-Ильина');
    }
    public function testSplDetect1345()
    {
        $this->assertEquals('S-Илюшина', trim($this->object->getFullNameFormat('Илюшина')).'-Илюшина');
    }
    public function testSplDetect1346()
    {
        $this->assertEquals('S-Ильюшина', trim($this->object->getFullNameFormat('Ильюшина')).'-Ильюшина');
    }
    public function testSplDetect1347()
    {
        $this->assertEquals('S-Иноземцева', trim($this->object->getFullNameFormat('Иноземцева')).'-Иноземцева');
    }
    public function testSplDetect1348()
    {
        $this->assertEquals('S-Ипатьева', trim($this->object->getFullNameFormat('Ипатьева')).'-Ипатьева');
    }
    public function testSplDetect1349()
    {
        $this->assertEquals('S-Исаева', trim($this->object->getFullNameFormat('Исаева')).'-Исаева');
    }
    public function testSplDetect1350()
    {
        $this->assertEquals('S-Истомина', trim($this->object->getFullNameFormat('Истомина')).'-Истомина');
    }
    public function testSplDetect1351()
    {
        $this->assertEquals('S-Кабинова', trim($this->object->getFullNameFormat('Кабинова')).'-Кабинова');
    }
    public function testSplDetect1352()
    {
        $this->assertEquals('S-Каблукова', trim($this->object->getFullNameFormat('Каблукова')).'-Каблукова');
    }
    public function testSplDetect1353()
    {
        $this->assertEquals('S-Каверина', trim($this->object->getFullNameFormat('Каверина')).'-Каверина');
    }
    public function testSplDetect1354()
    {
        $this->assertEquals('S-Кадникова', trim($this->object->getFullNameFormat('Кадникова')).'-Кадникова');
    }
    public function testSplDetect1355()
    {
        $this->assertEquals('S-Кадцына', trim($this->object->getFullNameFormat('Кадцына')).'-Кадцына');
    }
    public function testSplDetect1356()
    {
        $this->assertEquals('S-Казакова', trim($this->object->getFullNameFormat('Казакова')).'-Казакова');
    }
    public function testSplDetect1357()
    {
        $this->assertEquals('S-Казанцева', trim($this->object->getFullNameFormat('Казанцева')).'-Казанцева');
    }
    public function testSplDetect1358()
    {
        $this->assertEquals('S-Казарезова', trim($this->object->getFullNameFormat('Казарезова')).'-Казарезова');
    }
    public function testSplDetect1359()
    {
        $this->assertEquals('S-Калашник', trim($this->object->getFullNameFormat('Калашник')).'-Калашник');
    }
    public function testSplDetect1360()
    {
        $this->assertEquals('S-Калганова', trim($this->object->getFullNameFormat('Калганова')).'-Калганова');
    }
    public function testSplDetect1361()
    {
        $this->assertEquals('S-Каменских', trim($this->object->getFullNameFormat('Каменских')).'-Каменских');
    }
    public function testSplDetect1362()
    {
        $this->assertEquals('S-Камкина', trim($this->object->getFullNameFormat('Камкина')).'-Камкина');
    }
    public function testSplDetect1363()
    {
        $this->assertEquals('S-Каналина', trim($this->object->getFullNameFormat('Каналина')).'-Каналина');
    }
    public function testSplDetect1364()
    {
        $this->assertEquals('S-Кандинская', trim($this->object->getFullNameFormat('Кандинская')).'-Кандинская');
    }
    public function testSplDetect1365()
    {
        $this->assertEquals('S-Капица', trim($this->object->getFullNameFormat('Капица')).'-Капица');
    }
    public function testSplDetect1366()
    {
        $this->assertEquals('S-Капралова', trim($this->object->getFullNameFormat('Капралова')).'-Капралова');
    }
    public function testSplDetect1367()
    {
        $this->assertEquals('S-Караваева', trim($this->object->getFullNameFormat('Караваева')).'-Караваева');
    }
    public function testSplDetect1368()
    {
        $this->assertEquals('S-Караулова', trim($this->object->getFullNameFormat('Караулова')).'-Караулова');
    }
    public function testSplDetect1369()
    {
        $this->assertEquals('S-Карева', trim($this->object->getFullNameFormat('Карева')).'-Карева');
    }
    public function testSplDetect1370()
    {
        $this->assertEquals('S-Каретникова', trim($this->object->getFullNameFormat('Каретникова')).'-Каретникова');
    }
    public function testSplDetect1371()
    {
        $this->assertEquals('S-Каргина', trim($this->object->getFullNameFormat('Каргина')).'-Каргина');
    }
    public function testSplDetect1372()
    {
        $this->assertEquals('S-Карташова', trim($this->object->getFullNameFormat('Карташова')).'-Карташова');
    }
    public function testSplDetect1373()
    {
        $this->assertEquals('S-Карчагина', trim($this->object->getFullNameFormat('Карчагина')).'-Карчагина');
    }
    public function testSplDetect1374()
    {
        $this->assertEquals('S-Касатый', trim($this->object->getFullNameFormat('Касатый')).'-Касатый');
    }
    public function testSplDetect1375()
    {
        $this->assertEquals('S-Катина', trim($this->object->getFullNameFormat('Катина')).'-Катина');
    }
    public function testSplDetect1376()
    {
        $this->assertEquals('S-Качусова', trim($this->object->getFullNameFormat('Качусова')).'-Качусова');
    }
    public function testSplDetect1377()
    {
        $this->assertEquals('S-Кашарина', trim($this->object->getFullNameFormat('Кашарина')).'-Кашарина');
    }
    public function testSplDetect1378()
    {
        $this->assertEquals('S-Каширина', trim($this->object->getFullNameFormat('Каширина')).'-Каширина');
    }
    public function testSplDetect1379()
    {
        $this->assertEquals('S-Кашканова', trim($this->object->getFullNameFormat('Кашканова')).'-Кашканова');
    }
    public function testSplDetect1380()
    {
        $this->assertEquals('S-Кашникова', trim($this->object->getFullNameFormat('Кашникова')).'-Кашникова');
    }
    public function testSplDetect1381()
    {
        $this->assertEquals('S-Киреева', trim($this->object->getFullNameFormat('Киреева')).'-Киреева');
    }
    public function testSplDetect1382()
    {
        $this->assertEquals('S-Кирилишена', trim($this->object->getFullNameFormat('Кирилишена')).'-Кирилишена');
    }
    public function testSplDetect1383()
    {
        $this->assertEquals('S-Кирилова', trim($this->object->getFullNameFormat('Кирилова')).'-Кирилова');
    }
    public function testSplDetect1384()
    {
        $this->assertEquals('S-Кирсанова', trim($this->object->getFullNameFormat('Кирсанова')).'-Кирсанова');
    }
    public function testSplDetect1385()
    {
        $this->assertEquals('S-Кирьянова', trim($this->object->getFullNameFormat('Кирьянова')).'-Кирьянова');
    }
    public function testSplDetect1386()
    {
        $this->assertEquals('S-Клепахова', trim($this->object->getFullNameFormat('Клепахова')).'-Клепахова');
    }
    public function testSplDetect1387()
    {
        $this->assertEquals('S-Климова', trim($this->object->getFullNameFormat('Климова')).'-Климова');
    }
    public function testSplDetect1388()
    {
        $this->assertEquals('S-Климушина', trim($this->object->getFullNameFormat('Климушина')).'-Климушина');
    }
    public function testSplDetect1389()
    {
        $this->assertEquals('S-Клокова', trim($this->object->getFullNameFormat('Клокова')).'-Клокова');
    }
    public function testSplDetect1390()
    {
        $this->assertEquals('S-Князева', trim($this->object->getFullNameFormat('Князева')).'-Князева');
    }
    public function testSplDetect1391()
    {
        $this->assertEquals('S-Ковалёв', trim($this->object->getFullNameFormat('Ковалёв')).'-Ковалёв');
    }
    public function testSplDetect1392()
    {
        $this->assertEquals('S-Ковалевская', trim($this->object->getFullNameFormat('Ковалевская')).'-Ковалевская');
    }
    public function testSplDetect1393()
    {
        $this->assertEquals('S-Коварова', trim($this->object->getFullNameFormat('Коварова')).'-Коварова');
    }
    public function testSplDetect1394()
    {
        $this->assertEquals('S-Ковашутина', trim($this->object->getFullNameFormat('Ковашутина')).'-Ковашутина');
    }
    public function testSplDetect1395()
    {
        $this->assertEquals('S-Кожурова', trim($this->object->getFullNameFormat('Кожурова')).'-Кожурова');
    }
    public function testSplDetect1396()
    {
        $this->assertEquals('S-Кожухова', trim($this->object->getFullNameFormat('Кожухова')).'-Кожухова');
    }
    public function testSplDetect1397()
    {
        $this->assertEquals('S-Козакова', trim($this->object->getFullNameFormat('Козакова')).'-Козакова');
    }
    public function testSplDetect1398()
    {
        $this->assertEquals('S-Козарь', trim($this->object->getFullNameFormat('Козарь')).'-Козарь');
    }
    public function testSplDetect1399()
    {
        $this->assertEquals('S-Козлова', trim($this->object->getFullNameFormat('Козлова')).'-Козлова');
    }
    public function testSplDetect1400()
    {
        $this->assertEquals('S-Козловская', trim($this->object->getFullNameFormat('Козловская')).'-Козловская');
    }
    public function testSplDetect1401()
    {
        $this->assertEquals('S-Колесникова', trim($this->object->getFullNameFormat('Колесникова')).'-Колесникова');
    }
    public function testSplDetect1402()
    {
        $this->assertEquals('S-Колонтаева', trim($this->object->getFullNameFormat('Колонтаева')).'-Колонтаева');
    }
    public function testSplDetect1403()
    {
        $this->assertEquals('S-Колосова', trim($this->object->getFullNameFormat('Колосова')).'-Колосова');
    }
    public function testSplDetect1404()
    {
        $this->assertEquals('S-Кольцова', trim($this->object->getFullNameFormat('Кольцова')).'-Кольцова');
    }
    public function testSplDetect1405()
    {
        $this->assertEquals('S-Комарова', trim($this->object->getFullNameFormat('Комарова')).'-Комарова');
    }
    public function testSplDetect1406()
    {
        $this->assertEquals('S-Комзина', trim($this->object->getFullNameFormat('Комзина')).'-Комзина');
    }
    public function testSplDetect1407()
    {
        $this->assertEquals('S-Комолова', trim($this->object->getFullNameFormat('Комолова')).'-Комолова');
    }
    public function testSplDetect1408()
    {
        $this->assertEquals('S-Кондратьева', trim($this->object->getFullNameFormat('Кондратьева')).'-Кондратьева');
    }
    public function testSplDetect1409()
    {
        $this->assertEquals('S-Конева', trim($this->object->getFullNameFormat('Конева')).'-Конева');
    }
    public function testSplDetect1410()
    {
        $this->assertEquals('S-Конникова', trim($this->object->getFullNameFormat('Конникова')).'-Конникова');
    }
    public function testSplDetect1411()
    {
        $this->assertEquals('S-Коновалова', trim($this->object->getFullNameFormat('Коновалова')).'-Коновалова');
    }
    public function testSplDetect1412()
    {
        $this->assertEquals('S-Коньякова', trim($this->object->getFullNameFormat('Коньякова')).'-Коньякова');
    }
    public function testSplDetect1413()
    {
        $this->assertEquals('S-Коняшева', trim($this->object->getFullNameFormat('Коняшева')).'-Коняшева');
    }
    public function testSplDetect1414()
    {
        $this->assertEquals('S-Копейкина', trim($this->object->getFullNameFormat('Копейкина')).'-Копейкина');
    }
    public function testSplDetect1415()
    {
        $this->assertEquals('S-Коренева', trim($this->object->getFullNameFormat('Коренева')).'-Коренева');
    }
    public function testSplDetect1416()
    {
        $this->assertEquals('S-Коренёва', trim($this->object->getFullNameFormat('Коренёва')).'-Коренёва');
    }
    public function testSplDetect1417()
    {
        $this->assertEquals('S-Коржакова', trim($this->object->getFullNameFormat('Коржакова')).'-Коржакова');
    }
    public function testSplDetect1418()
    {
        $this->assertEquals('S-Коржева', trim($this->object->getFullNameFormat('Коржева')).'-Коржева');
    }
    public function testSplDetect1419()
    {
        $this->assertEquals('S-Корнева', trim($this->object->getFullNameFormat('Корнева')).'-Корнева');
    }
    public function testSplDetect1420()
    {
        $this->assertEquals('S-Корнилова', trim($this->object->getFullNameFormat('Корнилова')).'-Корнилова');
    }
    public function testSplDetect1421()
    {
        $this->assertEquals('S-Коровина', trim($this->object->getFullNameFormat('Коровина')).'-Коровина');
    }
    public function testSplDetect1422()
    {
        $this->assertEquals('S-Королёва', trim($this->object->getFullNameFormat('Королёва')).'-Королёва');
    }
    public function testSplDetect1423()
    {
        $this->assertEquals('S-Коротаева', trim($this->object->getFullNameFormat('Коротаева')).'-Коротаева');
    }
    public function testSplDetect1424()
    {
        $this->assertEquals('S-Корчагина', trim($this->object->getFullNameFormat('Корчагина')).'-Корчагина');
    }
    public function testSplDetect1425()
    {
        $this->assertEquals('S-Косарёва', trim($this->object->getFullNameFormat('Косарёва')).'-Косарёва');
    }
    public function testSplDetect1426()
    {
        $this->assertEquals('S-Коскова', trim($this->object->getFullNameFormat('Коскова')).'-Коскова');
    }
    public function testSplDetect1427()
    {
        $this->assertEquals('S-Косомова', trim($this->object->getFullNameFormat('Косомова')).'-Косомова');
    }
    public function testSplDetect1428()
    {
        $this->assertEquals('S-Косорукова', trim($this->object->getFullNameFormat('Косорукова')).'-Косорукова');
    }
    public function testSplDetect1429()
    {
        $this->assertEquals('S-Костина', trim($this->object->getFullNameFormat('Костина')).'-Костина');
    }
    public function testSplDetect1430()
    {
        $this->assertEquals('S-Косяк', trim($this->object->getFullNameFormat('Косяк')).'-Косяк');
    }
    public function testSplDetect1431()
    {
        $this->assertEquals('S-Котова', trim($this->object->getFullNameFormat('Котова')).'-Котова');
    }
    public function testSplDetect1432()
    {
        $this->assertEquals('S-Костомарова', trim($this->object->getFullNameFormat('Костомарова')).'-Костомарова');
    }
    public function testSplDetect1433()
    {
        $this->assertEquals('S-Коченкова', trim($this->object->getFullNameFormat('Коченкова')).'-Коченкова');
    }
    public function testSplDetect1434()
    {
        $this->assertEquals('S-Кошелева', trim($this->object->getFullNameFormat('Кошелева')).'-Кошелева');
    }
    public function testSplDetect1435()
    {
        $this->assertEquals('S-Кошечкина', trim($this->object->getFullNameFormat('Кошечкина')).'-Кошечкина');
    }
    public function testSplDetect1436()
    {
        $this->assertEquals('S-Кошкина', trim($this->object->getFullNameFormat('Кошкина')).'-Кошкина');
    }
    public function testSplDetect1437()
    {
        $this->assertEquals('S-Кравчук', trim($this->object->getFullNameFormat('Кравчук')).'-Кравчук');
    }
    public function testSplDetect1438()
    {
        $this->assertEquals('S-Краева', trim($this->object->getFullNameFormat('Краева')).'-Краева');
    }
    public function testSplDetect1439()
    {
        $this->assertEquals('S-Краснова', trim($this->object->getFullNameFormat('Краснова')).'-Краснова');
    }
    public function testSplDetect1440()
    {
        $this->assertEquals('S-Красноперова', trim($this->object->getFullNameFormat('Красноперова')).'-Красноперова');
    }
    public function testSplDetect1441()
    {
        $this->assertEquals('S-Кропанина', trim($this->object->getFullNameFormat('Кропанина')).'-Кропанина');
    }
    public function testSplDetect1442()
    {
        $this->assertEquals('S-Кругликова', trim($this->object->getFullNameFormat('Кругликова')).'-Кругликова');
    }
    public function testSplDetect1443()
    {
        $this->assertEquals('S-Круглова', trim($this->object->getFullNameFormat('Круглова')).'-Круглова');
    }
    public function testSplDetect1444()
    {
        $this->assertEquals('S-Крупина', trim($this->object->getFullNameFormat('Крупина')).'-Крупина');
    }
    public function testSplDetect1445()
    {
        $this->assertEquals('S-Крутина', trim($this->object->getFullNameFormat('Крутина')).'-Крутина');
    }
    public function testSplDetect1446()
    {
        $this->assertEquals('S-Кручинакина', trim($this->object->getFullNameFormat('Кручинакина')).'-Кручинакина');
    }
    public function testSplDetect1447()
    {
        $this->assertEquals('S-Крылова', trim($this->object->getFullNameFormat('Крылова')).'-Крылова');
    }
    public function testSplDetect1448()
    {
        $this->assertEquals('S-Крысова', trim($this->object->getFullNameFormat('Крысова')).'-Крысова');
    }
    public function testSplDetect1449()
    {
        $this->assertEquals('S-Крюкова', trim($this->object->getFullNameFormat('Крюкова')).'-Крюкова');
    }
    public function testSplDetect1450()
    {
        $this->assertEquals('S-Кубланова', trim($this->object->getFullNameFormat('Кубланова')).'-Кубланова');
    }
    public function testSplDetect1451()
    {
        $this->assertEquals('S-Кудашова', trim($this->object->getFullNameFormat('Кудашова')).'-Кудашова');
    }
    public function testSplDetect1452()
    {
        $this->assertEquals('S-Кудрина', trim($this->object->getFullNameFormat('Кудрина')).'-Кудрина');
    }
    public function testSplDetect1453()
    {
        $this->assertEquals('S-Кудрявцева', trim($this->object->getFullNameFormat('Кудрявцева')).'-Кудрявцева');
    }
    public function testSplDetect1454()
    {
        $this->assertEquals('S-Кудряшова', trim($this->object->getFullNameFormat('Кудряшова')).'-Кудряшова');
    }
    public function testSplDetect1455()
    {
        $this->assertEquals('S-Кузнецова', trim($this->object->getFullNameFormat('Кузнецова')).'-Кузнецова');
    }
    public function testSplDetect1456()
    {
        $this->assertEquals('S-Кузьмина', trim($this->object->getFullNameFormat('Кузьмина')).'-Кузьмина');
    }
    public function testSplDetect1457()
    {
        $this->assertEquals('S-Куимова', trim($this->object->getFullNameFormat('Куимова')).'-Куимова');
    }
    public function testSplDetect1458()
    {
        $this->assertEquals('S-Куклачёва', trim($this->object->getFullNameFormat('Куклачёва')).'-Куклачёва');
    }
    public function testSplDetect1459()
    {
        $this->assertEquals('S-Кулагина', trim($this->object->getFullNameFormat('Кулагина')).'-Кулагина');
    }
    public function testSplDetect1460()
    {
        $this->assertEquals('S-Кулибина', trim($this->object->getFullNameFormat('Кулибина')).'-Кулибина');
    }
    public function testSplDetect1461()
    {
        $this->assertEquals('S-Куликова', trim($this->object->getFullNameFormat('Куликова')).'-Куликова');
    }
    public function testSplDetect1462()
    {
        $this->assertEquals('S-Куракина', trim($this->object->getFullNameFormat('Куракина')).'-Куракина');
    }
    public function testSplDetect1463()
    {
        $this->assertEquals('S-Курбатова', trim($this->object->getFullNameFormat('Курбатова')).'-Курбатова');
    }
    public function testSplDetect1464()
    {
        $this->assertEquals('S-Курганова', trim($this->object->getFullNameFormat('Курганова')).'-Курганова');
    }
    public function testSplDetect1465()
    {
        $this->assertEquals('S-Курдина', trim($this->object->getFullNameFormat('Курдина')).'-Курдина');
    }
    public function testSplDetect1466()
    {
        $this->assertEquals('S-Курепина', trim($this->object->getFullNameFormat('Курепина')).'-Курепина');
    }
    public function testSplDetect1467()
    {
        $this->assertEquals('S-Курсалина', trim($this->object->getFullNameFormat('Курсалина')).'-Курсалина');
    }
    public function testSplDetect1468()
    {
        $this->assertEquals('S-Кутикова', trim($this->object->getFullNameFormat('Кутикова')).'-Кутикова');
    }
    public function testSplDetect1469()
    {
        $this->assertEquals('S-Кутузова', trim($this->object->getFullNameFormat('Кутузова')).'-Кутузова');
    }
    public function testSplDetect1470()
    {
        $this->assertEquals('S-Кутякова', trim($this->object->getFullNameFormat('Кутякова')).'-Кутякова');
    }
    public function testSplDetect1471()
    {
        $this->assertEquals('S-Лаврова', trim($this->object->getFullNameFormat('Лаврова')).'-Лаврова');
    }
    public function testSplDetect1472()
    {
        $this->assertEquals('S-Лагутова', trim($this->object->getFullNameFormat('Лагутова')).'-Лагутова');
    }
    public function testSplDetect1473()
    {
        $this->assertEquals('S-Лазарева', trim($this->object->getFullNameFormat('Лазарева')).'-Лазарева');
    }
    public function testSplDetect1474()
    {
        $this->assertEquals('S-Ланцова', trim($this->object->getFullNameFormat('Ланцова')).'-Ланцова');
    }
    public function testSplDetect1475()
    {
        $this->assertEquals('S-Лапидус', trim($this->object->getFullNameFormat('Лапидус')).'-Лапидус');
    }
    public function testSplDetect1476()
    {
        $this->assertEquals('S-Лапотникова', trim($this->object->getFullNameFormat('Лапотникова')).'-Лапотникова');
    }
    public function testSplDetect1477()
    {
        $this->assertEquals('S-Лаптева', trim($this->object->getFullNameFormat('Лаптева')).'-Лаптева');
    }
    public function testSplDetect1478()
    {
        $this->assertEquals('S-Лапунова', trim($this->object->getFullNameFormat('Лапунова')).'-Лапунова');
    }
    public function testSplDetect1479()
    {
        $this->assertEquals('S-Лапухова', trim($this->object->getFullNameFormat('Лапухова')).'-Лапухова');
    }
    public function testSplDetect1480()
    {
        $this->assertEquals('S-Ларина', trim($this->object->getFullNameFormat('Ларина')).'-Ларина');
    }
    public function testSplDetect1481()
    {
        $this->assertEquals('S-Ларионова', trim($this->object->getFullNameFormat('Ларионова')).'-Ларионова');
    }
    public function testSplDetect1482()
    {
        $this->assertEquals('S-Ласкутина', trim($this->object->getFullNameFormat('Ласкутина')).'-Ласкутина');
    }
    public function testSplDetect1483()
    {
        $this->assertEquals('S-Лачинова', trim($this->object->getFullNameFormat('Лачинова')).'-Лачинова');
    }
    public function testSplDetect1484()
    {
        $this->assertEquals('S-Лачкова', trim($this->object->getFullNameFormat('Лачкова')).'-Лачкова');
    }
    public function testSplDetect1485()
    {
        $this->assertEquals('S-Лебедева', trim($this->object->getFullNameFormat('Лебедева')).'-Лебедева');
    }
    public function testSplDetect1486()
    {
        $this->assertEquals('S-Лебединаская', trim($this->object->getFullNameFormat('Лебединаская')).'-Лебединаская');
    }
    public function testSplDetect1487()
    {
        $this->assertEquals('S-Лебединацева', trim($this->object->getFullNameFormat('Лебединацева')).'-Лебединацева');
    }
    public function testSplDetect1488()
    {
        $this->assertEquals('S-Легкодимова', trim($this->object->getFullNameFormat('Легкодимова')).'-Легкодимова');
    }
    public function testSplDetect1489()
    {
        $this->assertEquals('S-Леонова', trim($this->object->getFullNameFormat('Леонова')).'-Леонова');
    }
    public function testSplDetect1490()
    {
        $this->assertEquals('S-Лепёхина', trim($this->object->getFullNameFormat('Лепёхина')).'-Лепёхина');
    }
    public function testSplDetect1491()
    {
        $this->assertEquals('S-Лескова', trim($this->object->getFullNameFormat('Лескова')).'-Лескова');
    }
    public function testSplDetect1492()
    {
        $this->assertEquals('S-Лесничая', trim($this->object->getFullNameFormat('Лесничая')).'-Лесничая');
    }
    public function testSplDetect1493()
    {
        $this->assertEquals('S-Летова', trim($this->object->getFullNameFormat('Летова')).'-Летова');
    }
    public function testSplDetect1494()
    {
        $this->assertEquals('S-Лещёва', trim($this->object->getFullNameFormat('Лещёва')).'-Лещёва');
    }
    public function testSplDetect1495()
    {
        $this->assertEquals('S-Лилова', trim($this->object->getFullNameFormat('Лилова')).'-Лилова');
    }
    public function testSplDetect1496()
    {
        $this->assertEquals('S-Липина', trim($this->object->getFullNameFormat('Липина')).'-Липина');
    }
    public function testSplDetect1497()
    {
        $this->assertEquals('S-Лисицына', trim($this->object->getFullNameFormat('Лисицына')).'-Лисицына');
    }
    public function testSplDetect1498()
    {
        $this->assertEquals('S-Лихачёва', trim($this->object->getFullNameFormat('Лихачёва')).'-Лихачёва');
    }
    public function testSplDetect1499()
    {
        $this->assertEquals('S-Лобан', trim($this->object->getFullNameFormat('Лобан')).'-Лобан');
    }
    public function testSplDetect1500()
    {
        $this->assertEquals('S-Лобанова', trim($this->object->getFullNameFormat('Лобанова')).'-Лобанова');
    }
    public function testSplDetect1501()
    {
        $this->assertEquals('S-Лобова', trim($this->object->getFullNameFormat('Лобова')).'-Лобова');
    }
    public function testSplDetect1502()
    {
        $this->assertEquals('S-Логинова', trim($this->object->getFullNameFormat('Логинова')).'-Логинова');
    }
    public function testSplDetect1503()
    {
        $this->assertEquals('S-Логиновская', trim($this->object->getFullNameFormat('Логиновская')).'-Логиновская');
    }
    public function testSplDetect1504()
    {
        $this->assertEquals('S-Локтева', trim($this->object->getFullNameFormat('Локтева')).'-Локтева');
    }
    public function testSplDetect1505()
    {
        $this->assertEquals('S-Ломоносова', trim($this->object->getFullNameFormat('Ломоносова')).'-Ломоносова');
    }
    public function testSplDetect1506()
    {
        $this->assertEquals('S-Ломтева', trim($this->object->getFullNameFormat('Ломтева')).'-Ломтева');
    }
    public function testSplDetect1507()
    {
        $this->assertEquals('S-Лопатина', trim($this->object->getFullNameFormat('Лопатина')).'-Лопатина');
    }
    public function testSplDetect1508()
    {
        $this->assertEquals('S-Лосева', trim($this->object->getFullNameFormat('Лосева')).'-Лосева');
    }
    public function testSplDetect1509()
    {
        $this->assertEquals('S-Лосевская', trim($this->object->getFullNameFormat('Лосевская')).'-Лосевская');
    }
    public function testSplDetect1510()
    {
        $this->assertEquals('S-Лоскутникова', trim($this->object->getFullNameFormat('Лоскутникова')).'-Лоскутникова');
    }
    public function testSplDetect1511()
    {
        $this->assertEquals('S-Лоскутова', trim($this->object->getFullNameFormat('Лоскутова')).'-Лоскутова');
    }
    public function testSplDetect1512()
    {
        $this->assertEquals('S-Лужкова', trim($this->object->getFullNameFormat('Лужкова')).'-Лужкова');
    }
    public function testSplDetect1513()
    {
        $this->assertEquals('S-Лыткина', trim($this->object->getFullNameFormat('Лыткина')).'-Лыткина');
    }
    public function testSplDetect1514()
    {
        $this->assertEquals('S-Любимова', trim($this->object->getFullNameFormat('Любимова')).'-Любимова');
    }
    public function testSplDetect1515()
    {
        $this->assertEquals('S-Любова', trim($this->object->getFullNameFormat('Любова')).'-Любова');
    }
    public function testSplDetect1516()
    {
        $this->assertEquals('S-Лягушкина', trim($this->object->getFullNameFormat('Лягушкина')).'-Лягушкина');
    }
    public function testSplDetect1517()
    {
        $this->assertEquals('S-Лягушова', trim($this->object->getFullNameFormat('Лягушова')).'-Лягушова');
    }
    public function testSplDetect1518()
    {
        $this->assertEquals('S-Лялюшкина', trim($this->object->getFullNameFormat('Лялюшкина')).'-Лялюшкина');
    }
    public function testSplDetect1519()
    {
        $this->assertEquals('S-Лясина', trim($this->object->getFullNameFormat('Лясина')).'-Лясина');
    }
    public function testSplDetect1520()
    {
        $this->assertEquals('S-Ляпина', trim($this->object->getFullNameFormat('Ляпина')).'-Ляпина');
    }
    public function testSplDetect1521()
    {
        $this->assertEquals('S-Майсак', trim($this->object->getFullNameFormat('Майсак')).'-Майсак');
    }
    public function testSplDetect1522()
    {
        $this->assertEquals('S-Макарова', trim($this->object->getFullNameFormat('Макарова')).'-Макарова');
    }
    public function testSplDetect1523()
    {
        $this->assertEquals('S-Маклакова', trim($this->object->getFullNameFormat('Маклакова')).'-Маклакова');
    }
    public function testSplDetect1524()
    {
        $this->assertEquals('S-Максимова', trim($this->object->getFullNameFormat('Максимова')).'-Максимова');
    }
    public function testSplDetect1525()
    {
        $this->assertEquals('S-Максимушкина', trim($this->object->getFullNameFormat('Максимушкина')).'-Максимушкина');
    }
    public function testSplDetect1526()
    {
        $this->assertEquals('S-Максудова', trim($this->object->getFullNameFormat('Максудова')).'-Максудова');
    }
    public function testSplDetect1527()
    {
        $this->assertEquals('S-Малахова', trim($this->object->getFullNameFormat('Малахова')).'-Малахова');
    }
    public function testSplDetect1528()
    {
        $this->assertEquals('S-Маликова', trim($this->object->getFullNameFormat('Маликова')).'-Маликова');
    }
    public function testSplDetect1529()
    {
        $this->assertEquals('S-Малинина', trim($this->object->getFullNameFormat('Малинина')).'-Малинина');
    }
    public function testSplDetect1530()
    {
        $this->assertEquals('S-Малышева', trim($this->object->getFullNameFormat('Малышева')).'-Малышева');
    }
    public function testSplDetect1531()
    {
        $this->assertEquals('S-Малюгина', trim($this->object->getFullNameFormat('Малюгина')).'-Малюгина');
    }
    public function testSplDetect1532()
    {
        $this->assertEquals('S-Малыхина', trim($this->object->getFullNameFormat('Малыхина')).'-Малыхина');
    }
    public function testSplDetect1533()
    {
        $this->assertEquals('S-Мамонова', trim($this->object->getFullNameFormat('Мамонова')).'-Мамонова');
    }
    public function testSplDetect1534()
    {
        $this->assertEquals('S-Манина', trim($this->object->getFullNameFormat('Манина')).'-Манина');
    }
    public function testSplDetect1535()
    {
        $this->assertEquals('S-Маркина', trim($this->object->getFullNameFormat('Маркина')).'-Маркина');
    }
    public function testSplDetect1536()
    {
        $this->assertEquals('S-Маркова', trim($this->object->getFullNameFormat('Маркова')).'-Маркова');
    }
    public function testSplDetect1537()
    {
        $this->assertEquals('S-Маслак', trim($this->object->getFullNameFormat('Маслак')).'-Маслак');
    }
    public function testSplDetect1538()
    {
        $this->assertEquals('S-Маслова', trim($this->object->getFullNameFormat('Маслова')).'-Маслова');
    }
    public function testSplDetect1539()
    {
        $this->assertEquals('S-Матвеева', trim($this->object->getFullNameFormat('Матвеева')).'-Матвеева');
    }
    public function testSplDetect1540()
    {
        $this->assertEquals('S-Машарина', trim($this->object->getFullNameFormat('Машарина')).'-Машарина');
    }
    public function testSplDetect1541()
    {
        $this->assertEquals('S-Машир', trim($this->object->getFullNameFormat('Машир')).'-Машир');
    }
    public function testSplDetect1542()
    {
        $this->assertEquals('S-Медведева', trim($this->object->getFullNameFormat('Медведева')).'-Медведева');
    }
    public function testSplDetect1543()
    {
        $this->assertEquals('S-Медникова', trim($this->object->getFullNameFormat('Медникова')).'-Медникова');
    }
    public function testSplDetect1544()
    {
        $this->assertEquals('S-Меледина', trim($this->object->getFullNameFormat('Меледина')).'-Меледина');
    }
    public function testSplDetect1545()
    {
        $this->assertEquals('S-Мелехова', trim($this->object->getFullNameFormat('Мелехова')).'-Мелехова');
    }
    public function testSplDetect1546()
    {
        $this->assertEquals('S-Меликова', trim($this->object->getFullNameFormat('Меликова')).'-Меликова');
    }
    public function testSplDetect1547()
    {
        $this->assertEquals('S-Мельникова', trim($this->object->getFullNameFormat('Мельникова')).'-Мельникова');
    }
    public function testSplDetect1548()
    {
        $this->assertEquals('S-Меркушева', trim($this->object->getFullNameFormat('Меркушева')).'-Меркушева');
    }
    public function testSplDetect1549()
    {
        $this->assertEquals('S-Мещерякова', trim($this->object->getFullNameFormat('Мещерякова')).'-Мещерякова');
    }
    public function testSplDetect1550()
    {
        $this->assertEquals('S-Мигунова', trim($this->object->getFullNameFormat('Мигунова')).'-Мигунова');
    }
    public function testSplDetect1551()
    {
        $this->assertEquals('S-Мизенова', trim($this->object->getFullNameFormat('Мизенова')).'-Мизенова');
    }
    public function testSplDetect1552()
    {
        $this->assertEquals('S-Милехина', trim($this->object->getFullNameFormat('Милехина')).'-Милехина');
    }
    public function testSplDetect1553()
    {
        $this->assertEquals('S-Милорадова', trim($this->object->getFullNameFormat('Милорадова')).'-Милорадова');
    }
    public function testSplDetect1554()
    {
        $this->assertEquals('S-Милюкова', trim($this->object->getFullNameFormat('Милюкова')).'-Милюкова');
    }
    public function testSplDetect1555()
    {
        $this->assertEquals('S-Милютина', trim($this->object->getFullNameFormat('Милютина')).'-Милютина');
    }
    public function testSplDetect1556()
    {
        $this->assertEquals('S-Минаеева', trim($this->object->getFullNameFormat('Минаеева')).'-Минаеева');
    }
    public function testSplDetect1557()
    {
        $this->assertEquals('S-Минаина', trim($this->object->getFullNameFormat('Минаина')).'-Минаина');
    }
    public function testSplDetect1558()
    {
        $this->assertEquals('S-Минакина', trim($this->object->getFullNameFormat('Минакина')).'-Минакина');
    }
    public function testSplDetect1559()
    {
        $this->assertEquals('S-Миронова', trim($this->object->getFullNameFormat('Миронова')).'-Миронова');
    }
    public function testSplDetect1560()
    {
        $this->assertEquals('S-Митина', trim($this->object->getFullNameFormat('Митина')).'-Митина');
    }
    public function testSplDetect1561()
    {
        $this->assertEquals('S-Митрофанова', trim($this->object->getFullNameFormat('Митрофанова')).'-Митрофанова');
    }
    public function testSplDetect1562()
    {
        $this->assertEquals('S-Михайлова', trim($this->object->getFullNameFormat('Михайлова')).'-Михайлова');
    }
    public function testSplDetect1563()
    {
        $this->assertEquals('S-Михеева', trim($this->object->getFullNameFormat('Михеева')).'-Михеева');
    }
    public function testSplDetect1564()
    {
        $this->assertEquals('S-Мишутина', trim($this->object->getFullNameFormat('Мишутина')).'-Мишутина');
    }
    public function testSplDetect1565()
    {
        $this->assertEquals('S-Моисеева', trim($this->object->getFullNameFormat('Моисеева')).'-Моисеева');
    }
    public function testSplDetect1566()
    {
        $this->assertEquals('S-Молчанова', trim($this->object->getFullNameFormat('Молчанова')).'-Молчанова');
    }
    public function testSplDetect1567()
    {
        $this->assertEquals('S-Моренова', trim($this->object->getFullNameFormat('Моренова')).'-Моренова');
    }
    public function testSplDetect1568()
    {
        $this->assertEquals('S-Морозова', trim($this->object->getFullNameFormat('Морозова')).'-Морозова');
    }
    public function testSplDetect1569()
    {
        $this->assertEquals('S-Мосалева', trim($this->object->getFullNameFormat('Мосалева')).'-Мосалева');
    }
    public function testSplDetect1570()
    {
        $this->assertEquals('S-Москвина', trim($this->object->getFullNameFormat('Москвина')).'-Москвина');
    }
    public function testSplDetect1571()
    {
        $this->assertEquals('S-Муратова', trim($this->object->getFullNameFormat('Муратова')).'-Муратова');
    }
    public function testSplDetect1572()
    {
        $this->assertEquals('S-Мухортова', trim($this->object->getFullNameFormat('Мухортова')).'-Мухортова');
    }
    public function testSplDetect1573()
    {
        $this->assertEquals('S-Мягкова', trim($this->object->getFullNameFormat('Мягкова')).'-Мягкова');
    }
    public function testSplDetect1574()
    {
        $this->assertEquals('S-Мясникова', trim($this->object->getFullNameFormat('Мясникова')).'-Мясникова');
    }
    public function testSplDetect1575()
    {
        $this->assertEquals('S-Мятлева', trim($this->object->getFullNameFormat('Мятлева')).'-Мятлева');
    }
    public function testSplDetect1576()
    {
        $this->assertEquals('S-Набатова', trim($this->object->getFullNameFormat('Набатова')).'-Набатова');
    }
    public function testSplDetect1577()
    {
        $this->assertEquals('S-Нардина', trim($this->object->getFullNameFormat('Нардина')).'-Нардина');
    }
    public function testSplDetect1578()
    {
        $this->assertEquals('S-Наумова', trim($this->object->getFullNameFormat('Наумова')).'-Наумова');
    }
    public function testSplDetect1579()
    {
        $this->assertEquals('S-Невзорова', trim($this->object->getFullNameFormat('Невзорова')).'-Невзорова');
    }
    public function testSplDetect1580()
    {
        $this->assertEquals('S-Неделяева', trim($this->object->getFullNameFormat('Неделяева')).'-Неделяева');
    }
    public function testSplDetect1581()
    {
        $this->assertEquals('S-Нежданова', trim($this->object->getFullNameFormat('Нежданова')).'-Нежданова');
    }
    public function testSplDetect1582()
    {
        $this->assertEquals('S-Ненашева', trim($this->object->getFullNameFormat('Ненашева')).'-Ненашева');
    }
    public function testSplDetect1583()
    {
        $this->assertEquals('S-Нестерова', trim($this->object->getFullNameFormat('Нестерова')).'-Нестерова');
    }
    public function testSplDetect1584()
    {
        $this->assertEquals('S-Нечаева', trim($this->object->getFullNameFormat('Нечаева')).'-Нечаева');
    }
    public function testSplDetect1585()
    {
        $this->assertEquals('S-Никитина', trim($this->object->getFullNameFormat('Никитина')).'-Никитина');
    }
    public function testSplDetect1586()
    {
        $this->assertEquals('S-Никифорова', trim($this->object->getFullNameFormat('Никифорова')).'-Никифорова');
    }
    public function testSplDetect1587()
    {
        $this->assertEquals('S-Николаева', trim($this->object->getFullNameFormat('Николаева')).'-Николаева');
    }
    public function testSplDetect1588()
    {
        $this->assertEquals('S-Никонова', trim($this->object->getFullNameFormat('Никонова')).'-Никонова');
    }
    public function testSplDetect1589()
    {
        $this->assertEquals('S-Никулина', trim($this->object->getFullNameFormat('Никулина')).'-Никулина');
    }
    public function testSplDetect1590()
    {
        $this->assertEquals('S-Некрасова', trim($this->object->getFullNameFormat('Некрасова')).'-Некрасова');
    }
    public function testSplDetect1591()
    {
        $this->assertEquals('S-Новикова', trim($this->object->getFullNameFormat('Новикова')).'-Новикова');
    }
    public function testSplDetect1592()
    {
        $this->assertEquals('S-Новосельцева', trim($this->object->getFullNameFormat('Новосельцева')).'-Новосельцева');
    }
    public function testSplDetect1593()
    {
        $this->assertEquals('S-Носачёва', trim($this->object->getFullNameFormat('Носачёва')).'-Носачёва');
    }
    public function testSplDetect1594()
    {
        $this->assertEquals('S-Носкова', trim($this->object->getFullNameFormat('Носкова')).'-Носкова');
    }
    public function testSplDetect1595()
    {
        $this->assertEquals('S-Носова', trim($this->object->getFullNameFormat('Носова')).'-Носова');
    }
    public function testSplDetect1596()
    {
        $this->assertEquals('S-Оболенская', trim($this->object->getFullNameFormat('Оболенская')).'-Оболенская');
    }
    public function testSplDetect1597()
    {
        $this->assertEquals('S-Оборина', trim($this->object->getFullNameFormat('Оборина')).'-Оборина');
    }
    public function testSplDetect1598()
    {
        $this->assertEquals('S-Образцова', trim($this->object->getFullNameFormat('Образцова')).'-Образцова');
    }
    public function testSplDetect1599()
    {
        $this->assertEquals('S-Обухова', trim($this->object->getFullNameFormat('Обухова')).'-Обухова');
    }
    public function testSplDetect1600()
    {
        $this->assertEquals('S-Овечкина', trim($this->object->getFullNameFormat('Овечкина')).'-Овечкина');
    }
    public function testSplDetect1601()
    {
        $this->assertEquals('S-Огородникова', trim($this->object->getFullNameFormat('Огородникова')).'-Огородникова');
    }
    public function testSplDetect1602()
    {
        $this->assertEquals('S-Огурцова', trim($this->object->getFullNameFormat('Огурцова')).'-Огурцова');
    }
    public function testSplDetect1603()
    {
        $this->assertEquals('S-Озерова', trim($this->object->getFullNameFormat('Озерова')).'-Озерова');
    }
    public function testSplDetect1604()
    {
        $this->assertEquals('S-Ольховская', trim($this->object->getFullNameFormat('Ольховская')).'-Ольховская');
    }
    public function testSplDetect1605()
    {
        $this->assertEquals('S-Онегина', trim($this->object->getFullNameFormat('Онегина')).'-Онегина');
    }
    public function testSplDetect1606()
    {
        $this->assertEquals('S-Опокина', trim($this->object->getFullNameFormat('Опокина')).'-Опокина');
    }
    public function testSplDetect1607()
    {
        $this->assertEquals('S-Орлова', trim($this->object->getFullNameFormat('Орлова')).'-Орлова');
    }
    public function testSplDetect1608()
    {
        $this->assertEquals('S-Осинцева', trim($this->object->getFullNameFormat('Осинцева')).'-Осинцева');
    }
    public function testSplDetect1609()
    {
        $this->assertEquals('S-Остальцева', trim($this->object->getFullNameFormat('Остальцева')).'-Остальцева');
    }
    public function testSplDetect1610()
    {
        $this->assertEquals('S-Остапюк', trim($this->object->getFullNameFormat('Остапюк')).'-Остапюк');
    }
    public function testSplDetect1611()
    {
        $this->assertEquals('S-Островерхова', trim($this->object->getFullNameFormat('Островерхова')).'-Островерхова');
    }
    public function testSplDetect1612()
    {
        $this->assertEquals('S-Островская', trim($this->object->getFullNameFormat('Островская')).'-Островская');
    }
    public function testSplDetect1613()
    {
        $this->assertEquals('S-Павлова', trim($this->object->getFullNameFormat('Павлова')).'-Павлова');
    }
    public function testSplDetect1614()
    {
        $this->assertEquals('S-Панарина', trim($this->object->getFullNameFormat('Панарина')).'-Панарина');
    }
    public function testSplDetect1615()
    {
        $this->assertEquals('S-Панина', trim($this->object->getFullNameFormat('Панина')).'-Панина');
    }
    public function testSplDetect1616()
    {
        $this->assertEquals('S-Панкина', trim($this->object->getFullNameFormat('Панкина')).'-Панкина');
    }
    public function testSplDetect1617()
    {
        $this->assertEquals('S-Панкова', trim($this->object->getFullNameFormat('Панкова')).'-Панкова');
    }
    public function testSplDetect1618()
    {
        $this->assertEquals('S-Панфилова', trim($this->object->getFullNameFormat('Панфилова')).'-Панфилова');
    }
    public function testSplDetect1619()
    {
        $this->assertEquals('S-Панькив', trim($this->object->getFullNameFormat('Панькив')).'-Панькив');
    }
    public function testSplDetect1620()
    {
        $this->assertEquals('S-Папанова', trim($this->object->getFullNameFormat('Папанова')).'-Папанова');
    }
    public function testSplDetect1621()
    {
        $this->assertEquals('S-Пахомова', trim($this->object->getFullNameFormat('Пахомова')).'-Пахомова');
    }
    public function testSplDetect1622()
    {
        $this->assertEquals('S-Пенкина', trim($this->object->getFullNameFormat('Пенкина')).'-Пенкина');
    }
    public function testSplDetect1623()
    {
        $this->assertEquals('S-Первак', trim($this->object->getFullNameFormat('Первак')).'-Первак');
    }
    public function testSplDetect1624()
    {
        $this->assertEquals('S-Переверзева', trim($this->object->getFullNameFormat('Переверзева')).'-Переверзева');
    }
    public function testSplDetect1625()
    {
        $this->assertEquals('S-Перевёртова', trim($this->object->getFullNameFormat('Перевёртова')).'-Перевёртова');
    }
    public function testSplDetect1626()
    {
        $this->assertEquals('S-Пересторонина', trim($this->object->getFullNameFormat('Пересторонина')).'-Пересторонина');
    }
    public function testSplDetect1627()
    {
        $this->assertEquals('S-Перехваткина', trim($this->object->getFullNameFormat('Перехваткина')).'-Перехваткина');
    }
    public function testSplDetect1628()
    {
        $this->assertEquals('S-Перова', trim($this->object->getFullNameFormat('Перова')).'-Перова');
    }
    public function testSplDetect1629()
    {
        $this->assertEquals('S-Перьмякова', trim($this->object->getFullNameFormat('Перьмякова')).'-Перьмякова');
    }
    public function testSplDetect1630()
    {
        $this->assertEquals('S-Пестова', trim($this->object->getFullNameFormat('Пестова')).'-Пестова');
    }
    public function testSplDetect1631()
    {
        $this->assertEquals('S-Петрова', trim($this->object->getFullNameFormat('Петрова')).'-Петрова');
    }
    public function testSplDetect1632()
    {
        $this->assertEquals('S-Петухова', trim($this->object->getFullNameFormat('Петухова')).'-Петухова');
    }
    public function testSplDetect1633()
    {
        $this->assertEquals('S-Печеникова', trim($this->object->getFullNameFormat('Печеникова')).'-Печеникова');
    }
    public function testSplDetect1634()
    {
        $this->assertEquals('S-Пивоварова', trim($this->object->getFullNameFormat('Пивоварова')).'-Пивоварова');
    }
    public function testSplDetect1635()
    {
        $this->assertEquals('S-Пирогова', trim($this->object->getFullNameFormat('Пирогова')).'-Пирогова');
    }
    public function testSplDetect1636()
    {
        $this->assertEquals('S-Пирожкова', trim($this->object->getFullNameFormat('Пирожкова')).'-Пирожкова');
    }
    public function testSplDetect1637()
    {
        $this->assertEquals('S-Пичугина', trim($this->object->getFullNameFormat('Пичугина')).'-Пичугина');
    }
    public function testSplDetect1638()
    {
        $this->assertEquals('S-Погодина', trim($this->object->getFullNameFormat('Погодина')).'-Погодина');
    }
    public function testSplDetect1639()
    {
        $this->assertEquals('S-Погребнова', trim($this->object->getFullNameFormat('Погребнова')).'-Погребнова');
    }
    public function testSplDetect1640()
    {
        $this->assertEquals('S-Подшивалова', trim($this->object->getFullNameFormat('Подшивалова')).'-Подшивалова');
    }
    public function testSplDetect1641()
    {
        $this->assertEquals('S-Позднякова', trim($this->object->getFullNameFormat('Позднякова')).'-Позднякова');
    }
    public function testSplDetect1642()
    {
        $this->assertEquals('S-Покровская', trim($this->object->getFullNameFormat('Покровская')).'-Покровская');
    }
    public function testSplDetect1643()
    {
        $this->assertEquals('S-Поливанова', trim($this->object->getFullNameFormat('Поливанова')).'-Поливанова');
    }
    public function testSplDetect1644()
    {
        $this->assertEquals('S-Полушина', trim($this->object->getFullNameFormat('Полушина')).'-Полушина');
    }
    public function testSplDetect1645()
    {
        $this->assertEquals('S-Полищук', trim($this->object->getFullNameFormat('Полищук')).'-Полищук');
    }
    public function testSplDetect1646()
    {
        $this->assertEquals('S-Полторак', trim($this->object->getFullNameFormat('Полторак')).'-Полторак');
    }
    public function testSplDetect1647()
    {
        $this->assertEquals('S-Полякова', trim($this->object->getFullNameFormat('Полякова')).'-Полякова');
    }
    public function testSplDetect1648()
    {
        $this->assertEquals('S-Поникарова', trim($this->object->getFullNameFormat('Поникарова')).'-Поникарова');
    }
    public function testSplDetect1649()
    {
        $this->assertEquals('S-Пономарёва', trim($this->object->getFullNameFormat('Пономарёва')).'-Пономарёва');
    }
    public function testSplDetect1650()
    {
        $this->assertEquals('S-Пончикова', trim($this->object->getFullNameFormat('Пончикова')).'-Пончикова');
    }
    public function testSplDetect1651()
    {
        $this->assertEquals('S-Попова', trim($this->object->getFullNameFormat('Попова')).'-Попова');
    }
    public function testSplDetect1652()
    {
        $this->assertEquals('S-Попырина', trim($this->object->getFullNameFormat('Попырина')).'-Попырина');
    }
    public function testSplDetect1653()
    {
        $this->assertEquals('S-Посохова', trim($this->object->getFullNameFormat('Посохова')).'-Посохова');
    }
    public function testSplDetect1654()
    {
        $this->assertEquals('S-Потапова', trim($this->object->getFullNameFormat('Потапова')).'-Потапова');
    }
    public function testSplDetect1655()
    {
        $this->assertEquals('S-Потёмкина', trim($this->object->getFullNameFormat('Потёмкина')).'-Потёмкина');
    }
    public function testSplDetect1656()
    {
        $this->assertEquals('S-Праздникова', trim($this->object->getFullNameFormat('Праздникова')).'-Праздникова');
    }
    public function testSplDetect1657()
    {
        $this->assertEquals('S-Примакова', trim($this->object->getFullNameFormat('Примакова')).'-Примакова');
    }
    public function testSplDetect1658()
    {
        $this->assertEquals('S-Приходько', trim($this->object->getFullNameFormat('Приходько')).'-Приходько');
    }
    public function testSplDetect1659()
    {
        $this->assertEquals('S-Проничева', trim($this->object->getFullNameFormat('Проничева')).'-Проничева');
    }
    public function testSplDetect1660()
    {
        $this->assertEquals('S-Протасова', trim($this->object->getFullNameFormat('Протасова')).'-Протасова');
    }
    public function testSplDetect1661()
    {
        $this->assertEquals('S-Прохорова', trim($this->object->getFullNameFormat('Прохорова')).'-Прохорова');
    }
    public function testSplDetect1662()
    {
        $this->assertEquals('S-Пугачёв', trim($this->object->getFullNameFormat('Пугачёв')).'-Пугачёв');
    }
    public function testSplDetect1663()
    {
        $this->assertEquals('S-Пугина', trim($this->object->getFullNameFormat('Пугина')).'-Пугина');
    }
    public function testSplDetect1664()
    {
        $this->assertEquals('S-Пузанова', trim($this->object->getFullNameFormat('Пузанова')).'-Пузанова');
    }
    public function testSplDetect1665()
    {
        $this->assertEquals('S-Путилина', trim($this->object->getFullNameFormat('Путилина')).'-Путилина');
    }
    public function testSplDetect1666()
    {
        $this->assertEquals('S-Путина', trim($this->object->getFullNameFormat('Путина')).'-Путина');
    }
    public function testSplDetect1667()
    {
        $this->assertEquals('S-Путятина', trim($this->object->getFullNameFormat('Путятина')).'-Путятина');
    }
    public function testSplDetect1668()
    {
        $this->assertEquals('S-Пушкина', trim($this->object->getFullNameFormat('Пушкина')).'-Пушкина');
    }
    public function testSplDetect1669()
    {
        $this->assertEquals('S-Пыжалова', trim($this->object->getFullNameFormat('Пыжалова')).'-Пыжалова');
    }
    public function testSplDetect1670()
    {
        $this->assertEquals('S-Пырьева', trim($this->object->getFullNameFormat('Пырьева')).'-Пырьева');
    }
    public function testSplDetect1671()
    {
        $this->assertEquals('S-Рабинович', trim($this->object->getFullNameFormat('Рабинович')).'-Рабинович');
    }
    public function testSplDetect1672()
    {
        $this->assertEquals('S-Разина', trim($this->object->getFullNameFormat('Разина')).'-Разина');
    }
    public function testSplDetect1673()
    {
        $this->assertEquals('S-Разуваева', trim($this->object->getFullNameFormat('Разуваева')).'-Разуваева');
    }
    public function testSplDetect1674()
    {
        $this->assertEquals('S-Распопова', trim($this->object->getFullNameFormat('Распопова')).'-Распопова');
    }
    public function testSplDetect1675()
    {
        $this->assertEquals('S-Распутина', trim($this->object->getFullNameFormat('Распутина')).'-Распутина');
    }
    public function testSplDetect1676()
    {
        $this->assertEquals('S-Расторгуева', trim($this->object->getFullNameFormat('Расторгуева')).'-Расторгуева');
    }
    public function testSplDetect1677()
    {
        $this->assertEquals('S-Ремизова', trim($this->object->getFullNameFormat('Ремизова')).'-Ремизова');
    }
    public function testSplDetect1678()
    {
        $this->assertEquals('S-Репина', trim($this->object->getFullNameFormat('Репина')).'-Репина');
    }
    public function testSplDetect1679()
    {
        $this->assertEquals('S-Решетилова', trim($this->object->getFullNameFormat('Решетилова')).'-Решетилова');
    }
    public function testSplDetect1680()
    {
        $this->assertEquals('S-Решетникова', trim($this->object->getFullNameFormat('Решетникова')).'-Решетникова');
    }
    public function testSplDetect1681()
    {
        $this->assertEquals('S-Родзянко', trim($this->object->getFullNameFormat('Родзянко')).'-Родзянко');
    }
    public function testSplDetect1682()
    {
        $this->assertEquals('S-Рогачёва', trim($this->object->getFullNameFormat('Рогачёва')).'-Рогачёва');
    }
    public function testSplDetect1683()
    {
        $this->assertEquals('S-Рогова', trim($this->object->getFullNameFormat('Рогова')).'-Рогова');
    }
    public function testSplDetect1684()
    {
        $this->assertEquals('S-Рогозина', trim($this->object->getFullNameFormat('Рогозина')).'-Рогозина');
    }
    public function testSplDetect1685()
    {
        $this->assertEquals('S-Рожкова', trim($this->object->getFullNameFormat('Рожкова')).'-Рожкова');
    }
    public function testSplDetect1686()
    {
        $this->assertEquals('S-Рокоссовская', trim($this->object->getFullNameFormat('Рокоссовская')).'-Рокоссовская');
    }
    public function testSplDetect1687()
    {
        $this->assertEquals('S-Романова', trim($this->object->getFullNameFormat('Романова')).'-Романова');
    }
    public function testSplDetect1688()
    {
        $this->assertEquals('S-Ростова', trim($this->object->getFullNameFormat('Ростова')).'-Ростова');
    }
    public function testSplDetect1689()
    {
        $this->assertEquals('S-Ростовцева', trim($this->object->getFullNameFormat('Ростовцева')).'-Ростовцева');
    }
    public function testSplDetect1690()
    {
        $this->assertEquals('S-Рудавина', trim($this->object->getFullNameFormat('Рудавина')).'-Рудавина');
    }
    public function testSplDetect1691()
    {
        $this->assertEquals('S-Румянцева', trim($this->object->getFullNameFormat('Румянцева')).'-Румянцева');
    }
    public function testSplDetect1692()
    {
        $this->assertEquals('S-Рунова', trim($this->object->getFullNameFormat('Рунова')).'-Рунова');
    }
    public function testSplDetect1693()
    {
        $this->assertEquals('S-Русакова', trim($this->object->getFullNameFormat('Русакова')).'-Русакова');
    }
    public function testSplDetect1694()
    {
        $this->assertEquals('S-Русских', trim($this->object->getFullNameFormat('Русских')).'-Русских');
    }
    public function testSplDetect1695()
    {
        $this->assertEquals('S-Ручкина', trim($this->object->getFullNameFormat('Ручкина')).'-Ручкина');
    }
    public function testSplDetect1696()
    {
        $this->assertEquals('S-Рыбалкина', trim($this->object->getFullNameFormat('Рыбалкина')).'-Рыбалкина');
    }
    public function testSplDetect1697()
    {
        $this->assertEquals('S-Рыжанова', trim($this->object->getFullNameFormat('Рыжанова')).'-Рыжанова');
    }
    public function testSplDetect1698()
    {
        $this->assertEquals('S-Рыжкова', trim($this->object->getFullNameFormat('Рыжкова')).'-Рыжкова');
    }
    public function testSplDetect1699()
    {
        $this->assertEquals('S-Рыжова', trim($this->object->getFullNameFormat('Рыжова')).'-Рыжова');
    }
    public function testSplDetect1700()
    {
        $this->assertEquals('S-Рытина', trim($this->object->getFullNameFormat('Рытина')).'-Рытина');
    }
    public function testSplDetect1701()
    {
        $this->assertEquals('S-Рыченкова', trim($this->object->getFullNameFormat('Рыченкова')).'-Рыченкова');
    }
    public function testSplDetect1702()
    {
        $this->assertEquals('S-Рябкова', trim($this->object->getFullNameFormat('Рябкова')).'-Рябкова');
    }
    public function testSplDetect1703()
    {
        $this->assertEquals('S-Рябова', trim($this->object->getFullNameFormat('Рябова')).'-Рябова');
    }
    public function testSplDetect1704()
    {
        $this->assertEquals('S-Ряхина', trim($this->object->getFullNameFormat('Ряхина')).'-Ряхина');
    }
    public function testSplDetect1705()
    {
        $this->assertEquals('S-Сабитова', trim($this->object->getFullNameFormat('Сабитова')).'-Сабитова');
    }
    public function testSplDetect1706()
    {
        $this->assertEquals('S-Савасина', trim($this->object->getFullNameFormat('Савасина')).'-Савасина');
    }
    public function testSplDetect1707()
    {
        $this->assertEquals('S-Савинкова', trim($this->object->getFullNameFormat('Савинкова')).'-Савинкова');
    }
    public function testSplDetect1708()
    {
        $this->assertEquals('S-Савенкова', trim($this->object->getFullNameFormat('Савенкова')).'-Савенкова');
    }
    public function testSplDetect1709()
    {
        $this->assertEquals('S-Саврасова', trim($this->object->getFullNameFormat('Саврасова')).'-Саврасова');
    }
    public function testSplDetect1710()
    {
        $this->assertEquals('S-Садыкова', trim($this->object->getFullNameFormat('Садыкова')).'-Садыкова');
    }
    public function testSplDetect1711()
    {
        $this->assertEquals('S-Сазонова', trim($this->object->getFullNameFormat('Сазонова')).'-Сазонова');
    }
    public function testSplDetect1712()
    {
        $this->assertEquals('S-Салко', trim($this->object->getFullNameFormat('Салко')).'-Салко');
    }
    public function testSplDetect1713()
    {
        $this->assertEquals('S-Салькова', trim($this->object->getFullNameFormat('Салькова')).'-Салькова');
    }
    public function testSplDetect1714()
    {
        $this->assertEquals('S-Сальникова', trim($this->object->getFullNameFormat('Сальникова')).'-Сальникова');
    }
    public function testSplDetect1715()
    {
        $this->assertEquals('S-Самойлова', trim($this->object->getFullNameFormat('Самойлова')).'-Самойлова');
    }
    public function testSplDetect1716()
    {
        $this->assertEquals('S-Самохина', trim($this->object->getFullNameFormat('Самохина')).'-Самохина');
    }
    public function testSplDetect1717()
    {
        $this->assertEquals('S-Самсонова', trim($this->object->getFullNameFormat('Самсонова')).'-Самсонова');
    }
    public function testSplDetect1718()
    {
        $this->assertEquals('S-Санникова', trim($this->object->getFullNameFormat('Санникова')).'-Санникова');
    }
    public function testSplDetect1719()
    {
        $this->assertEquals('S-Сапогова', trim($this->object->getFullNameFormat('Сапогова')).'-Сапогова');
    }
    public function testSplDetect1720()
    {
        $this->assertEquals('S-Сапожникова', trim($this->object->getFullNameFormat('Сапожникова')).'-Сапожникова');
    }
    public function testSplDetect1721()
    {
        $this->assertEquals('S-Сафиюлина', trim($this->object->getFullNameFormat('Сафиюлина')).'-Сафиюлина');
    }
    public function testSplDetect1722()
    {
        $this->assertEquals('S-Сахарова', trim($this->object->getFullNameFormat('Сахарова')).'-Сахарова');
    }
    public function testSplDetect1723()
    {
        $this->assertEquals('S-Свалова', trim($this->object->getFullNameFormat('Свалова')).'-Свалова');
    }
    public function testSplDetect1724()
    {
        $this->assertEquals('S-Северинова', trim($this->object->getFullNameFormat('Северинова')).'-Северинова');
    }
    public function testSplDetect1725()
    {
        $this->assertEquals('S-Севастьянова', trim($this->object->getFullNameFormat('Севастьянова')).'-Севастьянова');
    }
    public function testSplDetect1726()
    {
        $this->assertEquals('S-Седельникова', trim($this->object->getFullNameFormat('Седельникова')).'-Седельникова');
    }
    public function testSplDetect1727()
    {
        $this->assertEquals('S-Седова', trim($this->object->getFullNameFormat('Седова')).'-Седова');
    }
    public function testSplDetect1728()
    {
        $this->assertEquals('S-Селезнёва', trim($this->object->getFullNameFormat('Селезнёва')).'-Селезнёва');
    }
    public function testSplDetect1729()
    {
        $this->assertEquals('S-Селиванова', trim($this->object->getFullNameFormat('Селиванова')).'-Селиванова');
    }
    public function testSplDetect1730()
    {
        $this->assertEquals('S-Семёнова', trim($this->object->getFullNameFormat('Семёнова')).'-Семёнова');
    }
    public function testSplDetect1731()
    {
        $this->assertEquals('S-Семичевская', trim($this->object->getFullNameFormat('Семичевская')).'-Семичевская');
    }
    public function testSplDetect1732()
    {
        $this->assertEquals('S-Сенькина', trim($this->object->getFullNameFormat('Сенькина')).'-Сенькина');
    }
    public function testSplDetect1733()
    {
        $this->assertEquals('S-Сереброва', trim($this->object->getFullNameFormat('Сереброва')).'-Сереброва');
    }
    public function testSplDetect1734()
    {
        $this->assertEquals('S-Серебрякова', trim($this->object->getFullNameFormat('Серебрякова')).'-Серебрякова');
    }
    public function testSplDetect1735()
    {
        $this->assertEquals('S-Серёгина', trim($this->object->getFullNameFormat('Серёгина')).'-Серёгина');
    }
    public function testSplDetect1736()
    {
        $this->assertEquals('S-Серова', trim($this->object->getFullNameFormat('Серова')).'-Серова');
    }
    public function testSplDetect1737()
    {
        $this->assertEquals('S-Серпинова', trim($this->object->getFullNameFormat('Серпинова')).'-Серпинова');
    }
    public function testSplDetect1738()
    {
        $this->assertEquals('S-Семянина', trim($this->object->getFullNameFormat('Семянина')).'-Семянина');
    }
    public function testSplDetect1739()
    {
        $this->assertEquals('S-Сёмина', trim($this->object->getFullNameFormat('Сёмина')).'-Сёмина');
    }
    public function testSplDetect1740()
    {
        $this->assertEquals('S-Серёгина', trim($this->object->getFullNameFormat('Серёгина')).'-Серёгина');
    }
    public function testSplDetect1741()
    {
        $this->assertEquals('S-Сеченова', trim($this->object->getFullNameFormat('Сеченова')).'-Сеченова');
    }
    public function testSplDetect1742()
    {
        $this->assertEquals('S-Сивакова', trim($this->object->getFullNameFormat('Сивакова')).'-Сивакова');
    }
    public function testSplDetect1743()
    {
        $this->assertEquals('S-Сигаева', trim($this->object->getFullNameFormat('Сигаева')).'-Сигаева');
    }
    public function testSplDetect1744()
    {
        $this->assertEquals('S-Сигачёва', trim($this->object->getFullNameFormat('Сигачёва')).'-Сигачёва');
    }
    public function testSplDetect1745()
    {
        $this->assertEquals('S-Сидорова', trim($this->object->getFullNameFormat('Сидорова')).'-Сидорова');
    }
    public function testSplDetect1746()
    {
        $this->assertEquals('S-Сизова', trim($this->object->getFullNameFormat('Сизова')).'-Сизова');
    }
    public function testSplDetect1747()
    {
        $this->assertEquals('S-Сизая', trim($this->object->getFullNameFormat('Сизая')).'-Сизая');
    }
    public function testSplDetect1748()
    {
        $this->assertEquals('S-Силиванова', trim($this->object->getFullNameFormat('Силиванова')).'-Силиванова');
    }
    public function testSplDetect1749()
    {
        $this->assertEquals('S-Силина', trim($this->object->getFullNameFormat('Силина')).'-Силина');
    }
    public function testSplDetect1750()
    {
        $this->assertEquals('S-Сильвестрова', trim($this->object->getFullNameFormat('Сильвестрова')).'-Сильвестрова');
    }
    public function testSplDetect1751()
    {
        $this->assertEquals('S-Силивёстрова', trim($this->object->getFullNameFormat('Силивёстрова')).'-Силивёстрова');
    }
    public function testSplDetect1752()
    {
        $this->assertEquals('S-Силаева', trim($this->object->getFullNameFormat('Силаева')).'-Силаева');
    }
    public function testSplDetect1753()
    {
        $this->assertEquals('S-Силиванова', trim($this->object->getFullNameFormat('Силиванова')).'-Силиванова');
    }
    public function testSplDetect1754()
    {
        $this->assertEquals('S-Скворцова', trim($this->object->getFullNameFormat('Скворцова')).'-Скворцова');
    }
    public function testSplDetect1755()
    {
        $this->assertEquals('S-Скрябина', trim($this->object->getFullNameFormat('Скрябина')).'-Скрябина');
    }
    public function testSplDetect1756()
    {
        $this->assertEquals('S-Скоробогатова', trim($this->object->getFullNameFormat('Скоробогатова')).'-Скоробогатова');
    }
    public function testSplDetect1757()
    {
        $this->assertEquals('S-Скороходова', trim($this->object->getFullNameFormat('Скороходова')).'-Скороходова');
    }
    public function testSplDetect1758()
    {
        $this->assertEquals('S-Скуратова', trim($this->object->getFullNameFormat('Скуратова')).'-Скуратова');
    }
    public function testSplDetect1759()
    {
        $this->assertEquals('S-Слобожанина', trim($this->object->getFullNameFormat('Слобожанина')).'-Слобожанина');
    }
    public function testSplDetect1760()
    {
        $this->assertEquals('S-Случевская', trim($this->object->getFullNameFormat('Случевская')).'-Случевская');
    }
    public function testSplDetect1761()
    {
        $this->assertEquals('S-Смирнитская', trim($this->object->getFullNameFormat('Смирнитская')).'-Смирнитская');
    }
    public function testSplDetect1762()
    {
        $this->assertEquals('S-Смирнова', trim($this->object->getFullNameFormat('Смирнова')).'-Смирнова');
    }
    public function testSplDetect1763()
    {
        $this->assertEquals('S-Сметанина', trim($this->object->getFullNameFormat('Сметанина')).'-Сметанина');
    }
    public function testSplDetect1764()
    {
        $this->assertEquals('S-Смолина', trim($this->object->getFullNameFormat('Смолина')).'-Смолина');
    }
    public function testSplDetect1765()
    {
        $this->assertEquals('S-Смолянова', trim($this->object->getFullNameFormat('Смолянова')).'-Смолянова');
    }
    public function testSplDetect1766()
    {
        $this->assertEquals('S-Снаткина', trim($this->object->getFullNameFormat('Снаткина')).'-Снаткина');
    }
    public function testSplDetect1767()
    {
        $this->assertEquals('S-Снегирёва', trim($this->object->getFullNameFormat('Снегирёва')).'-Снегирёва');
    }
    public function testSplDetect1768()
    {
        $this->assertEquals('S-Снеткова', trim($this->object->getFullNameFormat('Снеткова')).'-Снеткова');
    }
    public function testSplDetect1769()
    {
        $this->assertEquals('S-Соболева', trim($this->object->getFullNameFormat('Соболева')).'-Соболева');
    }
    public function testSplDetect1770()
    {
        $this->assertEquals('S-Соболевская', trim($this->object->getFullNameFormat('Соболевская')).'-Соболевская');
    }
    public function testSplDetect1771()
    {
        $this->assertEquals('S-Соколова', trim($this->object->getFullNameFormat('Соколова')).'-Соколова');
    }
    public function testSplDetect1772()
    {
        $this->assertEquals('S-Солдатова', trim($this->object->getFullNameFormat('Солдатова')).'-Солдатова');
    }
    public function testSplDetect1773()
    {
        $this->assertEquals('S-Соловьёва', trim($this->object->getFullNameFormat('Соловьёва')).'-Соловьёва');
    }
    public function testSplDetect1774()
    {
        $this->assertEquals('S-Солодникова', trim($this->object->getFullNameFormat('Солодникова')).'-Солодникова');
    }
    public function testSplDetect1775()
    {
        $this->assertEquals('S-Соломина', trim($this->object->getFullNameFormat('Соломина')).'-Соломина');
    }
    public function testSplDetect1776()
    {
        $this->assertEquals('S-Соломонова', trim($this->object->getFullNameFormat('Соломонова')).'-Соломонова');
    }
    public function testSplDetect1777()
    {
        $this->assertEquals('S-Сопова', trim($this->object->getFullNameFormat('Сопова')).'-Сопова');
    }
    public function testSplDetect1778()
    {
        $this->assertEquals('S-Сорокина', trim($this->object->getFullNameFormat('Сорокина')).'-Сорокина');
    }
    public function testSplDetect1779()
    {
        $this->assertEquals('S-Спанова', trim($this->object->getFullNameFormat('Спанова')).'-Спанова');
    }
    public function testSplDetect1780()
    {
        $this->assertEquals('S-Старикова', trim($this->object->getFullNameFormat('Старикова')).'-Старикова');
    }
    public function testSplDetect1781()
    {
        $this->assertEquals('S-Староверова', trim($this->object->getFullNameFormat('Староверова')).'-Староверова');
    }
    public function testSplDetect1782()
    {
        $this->assertEquals('S-Стеблева', trim($this->object->getFullNameFormat('Стеблева')).'-Стеблева');
    }
    public function testSplDetect1783()
    {
        $this->assertEquals('S-Стегнова', trim($this->object->getFullNameFormat('Стегнова')).'-Стегнова');
    }
    public function testSplDetect1784()
    {
        $this->assertEquals('S-Степанова', trim($this->object->getFullNameFormat('Степанова')).'-Степанова');
    }
    public function testSplDetect1785()
    {
        $this->assertEquals('S-Степанкова', trim($this->object->getFullNameFormat('Степанкова')).'-Степанкова');
    }
    public function testSplDetect1786()
    {
        $this->assertEquals('S-Степашина', trim($this->object->getFullNameFormat('Степашина')).'-Степашина');
    }
    public function testSplDetect1787()
    {
        $this->assertEquals('S-Стрелкова', trim($this->object->getFullNameFormat('Стрелкова')).'-Стрелкова');
    }
    public function testSplDetect1788()
    {
        $this->assertEquals('S-Стрекалова', trim($this->object->getFullNameFormat('Стрекалова')).'-Стрекалова');
    }
    public function testSplDetect1789()
    {
        $this->assertEquals('S-Строганова', trim($this->object->getFullNameFormat('Строганова')).'-Строганова');
    }
    public function testSplDetect1790()
    {
        $this->assertEquals('S-Субботина', trim($this->object->getFullNameFormat('Субботина')).'-Субботина');
    }
    public function testSplDetect1791()
    {
        $this->assertEquals('S-Суботина', trim($this->object->getFullNameFormat('Суботина')).'-Суботина');
    }
    public function testSplDetect1792()
    {
        $this->assertEquals('S-Суворина', trim($this->object->getFullNameFormat('Суворина')).'-Суворина');
    }
    public function testSplDetect1793()
    {
        $this->assertEquals('S-Суворкина', trim($this->object->getFullNameFormat('Суворкина')).'-Суворкина');
    }
    public function testSplDetect1794()
    {
        $this->assertEquals('S-Суворова', trim($this->object->getFullNameFormat('Суворова')).'-Суворова');
    }
    public function testSplDetect1795()
    {
        $this->assertEquals('S-Сунгатулина', trim($this->object->getFullNameFormat('Сунгатулина')).'-Сунгатулина');
    }
    public function testSplDetect1796()
    {
        $this->assertEquals('S-Сукачева', trim($this->object->getFullNameFormat('Сукачева')).'-Сукачева');
    }
    public function testSplDetect1797()
    {
        $this->assertEquals('S-Сурикова', trim($this->object->getFullNameFormat('Сурикова')).'-Сурикова');
    }
    public function testSplDetect1798()
    {
        $this->assertEquals('S-Сусоева', trim($this->object->getFullNameFormat('Сусоева')).'-Сусоева');
    }
    public function testSplDetect1799()
    {
        $this->assertEquals('S-Сутулина', trim($this->object->getFullNameFormat('Сутулина')).'-Сутулина');
    }
    public function testSplDetect1800()
    {
        $this->assertEquals('S-Сухорукова', trim($this->object->getFullNameFormat('Сухорукова')).'-Сухорукова');
    }
    public function testSplDetect1801()
    {
        $this->assertEquals('S-Сучкова', trim($this->object->getFullNameFormat('Сучкова')).'-Сучкова');
    }
    public function testSplDetect1802()
    {
        $this->assertEquals('S-Сысоева', trim($this->object->getFullNameFormat('Сысоева')).'-Сысоева');
    }
    public function testSplDetect1803()
    {
        $this->assertEquals('S-Сытникова', trim($this->object->getFullNameFormat('Сытникова')).'-Сытникова');
    }
    public function testSplDetect1804()
    {
        $this->assertEquals('S-Сычёвка', trim($this->object->getFullNameFormat('Сычёвка')).'-Сычёвка');
    }
    public function testSplDetect1805()
    {
        $this->assertEquals('S-Сычкина', trim($this->object->getFullNameFormat('Сычкина')).'-Сычкина');
    }
    public function testSplDetect1806()
    {
        $this->assertEquals('S-Сюсева', trim($this->object->getFullNameFormat('Сюсева')).'-Сюсева');
    }
    public function testSplDetect1807()
    {
        $this->assertEquals('S-Табакова', trim($this->object->getFullNameFormat('Табакова')).'-Табакова');
    }
    public function testSplDetect1808()
    {
        $this->assertEquals('S-Табернакулова', trim($this->object->getFullNameFormat('Табернакулова')).'-Табернакулова');
    }
    public function testSplDetect1809()
    {
        $this->assertEquals('S-Таланова', trim($this->object->getFullNameFormat('Таланова')).'-Таланова');
    }
    public function testSplDetect1810()
    {
        $this->assertEquals('S-Талалихина', trim($this->object->getFullNameFormat('Талалихина')).'-Талалихина');
    }
    public function testSplDetect1811()
    {
        $this->assertEquals('S-Танкова', trim($this->object->getFullNameFormat('Танкова')).'-Танкова');
    }
    public function testSplDetect1812()
    {
        $this->assertEquals('S-Тарасова', trim($this->object->getFullNameFormat('Тарасова')).'-Тарасова');
    }
    public function testSplDetect1813()
    {
        $this->assertEquals('S-Татарова', trim($this->object->getFullNameFormat('Татарова')).'-Татарова');
    }
    public function testSplDetect1814()
    {
        $this->assertEquals('S-Твардовская', trim($this->object->getFullNameFormat('Твардовская')).'-Твардовская');
    }
    public function testSplDetect1815()
    {
        $this->assertEquals('S-Тёмкина', trim($this->object->getFullNameFormat('Тёмкина')).'-Тёмкина');
    }
    public function testSplDetect1816()
    {
        $this->assertEquals('S-Теплова', trim($this->object->getFullNameFormat('Теплова')).'-Теплова');
    }
    public function testSplDetect1817()
    {
        $this->assertEquals('S-Теребова', trim($this->object->getFullNameFormat('Теребова')).'-Теребова');
    }
    public function testSplDetect1818()
    {
        $this->assertEquals('S-Тетерева', trim($this->object->getFullNameFormat('Тетерева')).'-Тетерева');
    }
    public function testSplDetect1819()
    {
        $this->assertEquals('S-Типалова', trim($this->object->getFullNameFormat('Типалова')).'-Типалова');
    }
    public function testSplDetect1820()
    {
        $this->assertEquals('S-Титова', trim($this->object->getFullNameFormat('Титова')).'-Титова');
    }
    public function testSplDetect1821()
    {
        $this->assertEquals('S-Тихвинская', trim($this->object->getFullNameFormat('Тихвинская')).'-Тихвинская');
    }
    public function testSplDetect1822()
    {
        $this->assertEquals('S-Тихомирова', trim($this->object->getFullNameFormat('Тихомирова')).'-Тихомирова');
    }
    public function testSplDetect1823()
    {
        $this->assertEquals('S-Тихонова', trim($this->object->getFullNameFormat('Тихонова')).'-Тихонова');
    }
    public function testSplDetect1824()
    {
        $this->assertEquals('S-Токарева', trim($this->object->getFullNameFormat('Токарева')).'-Токарева');
    }
    public function testSplDetect1825()
    {
        $this->assertEquals('S-Токмакова', trim($this->object->getFullNameFormat('Токмакова')).'-Токмакова');
    }
    public function testSplDetect1826()
    {
        $this->assertEquals('S-Толбанова', trim($this->object->getFullNameFormat('Толбанова')).'-Толбанова');
    }
    public function testSplDetect1827()
    {
        $this->assertEquals('S-Толстоброва', trim($this->object->getFullNameFormat('Толстоброва')).'-Толстоброва');
    }
    public function testSplDetect1828()
    {
        $this->assertEquals('S-Толстокожева', trim($this->object->getFullNameFormat('Толстокожева')).'-Толстокожева');
    }
    public function testSplDetect1829()
    {
        $this->assertEquals('S-Толстая', trim($this->object->getFullNameFormat('Толстая')).'-Толстая');
    }
    public function testSplDetect1830()
    {
        $this->assertEquals('S-Топорова', trim($this->object->getFullNameFormat('Топорова')).'-Топорова');
    }
    public function testSplDetect1831()
    {
        $this->assertEquals('S-Торопова', trim($this->object->getFullNameFormat('Торопова')).'-Торопова');
    }
    public function testSplDetect1832()
    {
        $this->assertEquals('S-Торчинова', trim($this->object->getFullNameFormat('Торчинова')).'-Торчинова');
    }
    public function testSplDetect1833()
    {
        $this->assertEquals('S-Травкина', trim($this->object->getFullNameFormat('Травкина')).'-Травкина');
    }
    public function testSplDetect1834()
    {
        $this->assertEquals('S-Тредиковская', trim($this->object->getFullNameFormat('Тредиковская')).'-Тредиковская');
    }
    public function testSplDetect1835()
    {
        $this->assertEquals('S-Третьякова', trim($this->object->getFullNameFormat('Третьякова')).'-Третьякова');
    }
    public function testSplDetect1836()
    {
        $this->assertEquals('S-Трифонова', trim($this->object->getFullNameFormat('Трифонова')).'-Трифонова');
    }
    public function testSplDetect1837()
    {
        $this->assertEquals('S-Трофимова', trim($this->object->getFullNameFormat('Трофимова')).'-Трофимова');
    }
    public function testSplDetect1838()
    {
        $this->assertEquals('S-Трусова', trim($this->object->getFullNameFormat('Трусова')).'-Трусова');
    }
    public function testSplDetect1839()
    {
        $this->assertEquals('S-Трутнева', trim($this->object->getFullNameFormat('Трутнева')).'-Трутнева');
    }
    public function testSplDetect1840()
    {
        $this->assertEquals('S-Труфанова', trim($this->object->getFullNameFormat('Труфанова')).'-Труфанова');
    }
    public function testSplDetect1841()
    {
        $this->assertEquals('S-Трухина', trim($this->object->getFullNameFormat('Трухина')).'-Трухина');
    }
    public function testSplDetect1842()
    {
        $this->assertEquals('S-Трындина', trim($this->object->getFullNameFormat('Трындина')).'-Трындина');
    }
    public function testSplDetect1843()
    {
        $this->assertEquals('S-Туполева', trim($this->object->getFullNameFormat('Туполева')).'-Туполева');
    }
    public function testSplDetect1844()
    {
        $this->assertEquals('S-Турбина', trim($this->object->getFullNameFormat('Турбина')).'-Турбина');
    }
    public function testSplDetect1845()
    {
        $this->assertEquals('S-Тургенева', trim($this->object->getFullNameFormat('Тургенева')).'-Тургенева');
    }
    public function testSplDetect1846()
    {
        $this->assertEquals('S-Турова', trim($this->object->getFullNameFormat('Турова')).'-Турова');
    }
    public function testSplDetect1847()
    {
        $this->assertEquals('S-Турфанова', trim($this->object->getFullNameFormat('Турфанова')).'-Турфанова');
    }
    public function testSplDetect1848()
    {
        $this->assertEquals('S-Тычкина', trim($this->object->getFullNameFormat('Тычкина')).'-Тычкина');
    }
    public function testSplDetect1849()
    {
        $this->assertEquals('S-Тюшнякова', trim($this->object->getFullNameFormat('Тюшнякова')).'-Тюшнякова');
    }
    public function testSplDetect1850()
    {
        $this->assertEquals('S-Телицына', trim($this->object->getFullNameFormat('Телицына')).'-Телицына');
    }
    public function testSplDetect1851()
    {
        $this->assertEquals('S-Тянникова', trim($this->object->getFullNameFormat('Тянникова')).'-Тянникова');
    }
    public function testSplDetect1852()
    {
        $this->assertEquals('S-Угольникова', trim($this->object->getFullNameFormat('Угольникова')).'-Угольникова');
    }
    public function testSplDetect1853()
    {
        $this->assertEquals('S-Ульянова', trim($this->object->getFullNameFormat('Ульянова')).'-Ульянова');
    }
    public function testSplDetect1854()
    {
        $this->assertEquals('S-Ульяшина', trim($this->object->getFullNameFormat('Ульяшина')).'-Ульяшина');
    }
    public function testSplDetect1855()
    {
        $this->assertEquals('S-Усатова', trim($this->object->getFullNameFormat('Усатова')).'-Усатова');
    }
    public function testSplDetect1856()
    {
        $this->assertEquals('S-Усова', trim($this->object->getFullNameFormat('Усова')).'-Усова');
    }
    public function testSplDetect1857()
    {
        $this->assertEquals('S-Устинова', trim($this->object->getFullNameFormat('Устинова')).'-Устинова');
    }
    public function testSplDetect1858()
    {
        $this->assertEquals('S-Устюжанина', trim($this->object->getFullNameFormat('Устюжанина')).'-Устюжанина');
    }
    public function testSplDetect1859()
    {
        $this->assertEquals('S-Утёсова', trim($this->object->getFullNameFormat('Утёсова')).'-Утёсова');
    }
    public function testSplDetect1860()
    {
        $this->assertEquals('S-Ухова', trim($this->object->getFullNameFormat('Ухова')).'-Ухова');
    }
    public function testSplDetect1861()
    {
        $this->assertEquals('S-Фанина', trim($this->object->getFullNameFormat('Фанина')).'-Фанина');
    }
    public function testSplDetect1862()
    {
        $this->assertEquals('S-Фамусова', trim($this->object->getFullNameFormat('Фамусова')).'-Фамусова');
    }
    public function testSplDetect1863()
    {
        $this->assertEquals('S-Федина', trim($this->object->getFullNameFormat('Федина')).'-Федина');
    }
    public function testSplDetect1864()
    {
        $this->assertEquals('S-Федосова', trim($this->object->getFullNameFormat('Федосова')).'-Федосова');
    }
    public function testSplDetect1865()
    {
        $this->assertEquals('S-Федотова', trim($this->object->getFullNameFormat('Федотова')).'-Федотова');
    }
    public function testSplDetect1866()
    {
        $this->assertEquals('S-Федосеева', trim($this->object->getFullNameFormat('Федосеева')).'-Федосеева');
    }
    public function testSplDetect1867()
    {
        $this->assertEquals('S-Федченкова', trim($this->object->getFullNameFormat('Федченкова')).'-Федченкова');
    }
    public function testSplDetect1868()
    {
        $this->assertEquals('S-Фёдорова', trim($this->object->getFullNameFormat('Фёдорова')).'-Фёдорова');
    }
    public function testSplDetect1869()
    {
        $this->assertEquals('S-Федулова', trim($this->object->getFullNameFormat('Федулова')).'-Федулова');
    }
    public function testSplDetect1870()
    {
        $this->assertEquals('S-Фетисова', trim($this->object->getFullNameFormat('Фетисова')).'-Фетисова');
    }
    public function testSplDetect1871()
    {
        $this->assertEquals('S-Филатова', trim($this->object->getFullNameFormat('Филатова')).'-Филатова');
    }
    public function testSplDetect1872()
    {
        $this->assertEquals('S-Филимонова', trim($this->object->getFullNameFormat('Филимонова')).'-Филимонова');
    }
    public function testSplDetect1873()
    {
        $this->assertEquals('S-Филиппова', trim($this->object->getFullNameFormat('Филиппова')).'-Филиппова');
    }
    public function testSplDetect1874()
    {
        $this->assertEquals('S-Флёрова', trim($this->object->getFullNameFormat('Флёрова')).'-Флёрова');
    }
    public function testSplDetect1875()
    {
        $this->assertEquals('S-Фокина', trim($this->object->getFullNameFormat('Фокина')).'-Фокина');
    }
    public function testSplDetect1876()
    {
        $this->assertEquals('S-Фомина', trim($this->object->getFullNameFormat('Фомина')).'-Фомина');
    }
    public function testSplDetect1877()
    {
        $this->assertEquals('S-Фомичева', trim($this->object->getFullNameFormat('Фомичева')).'-Фомичева');
    }
    public function testSplDetect1878()
    {
        $this->assertEquals('S-Фонвизина', trim($this->object->getFullNameFormat('Фонвизина')).'-Фонвизина');
    }
    public function testSplDetect1879()
    {
        $this->assertEquals('S-Форопонова', trim($this->object->getFullNameFormat('Форопонова')).'-Форопонова');
    }
    public function testSplDetect1880()
    {
        $this->assertEquals('S-Фирсова', trim($this->object->getFullNameFormat('Фирсова')).'-Фирсова');
    }
    public function testSplDetect1881()
    {
        $this->assertEquals('S-Фролова', trim($this->object->getFullNameFormat('Фролова')).'-Фролова');
    }
    public function testSplDetect1882()
    {
        $this->assertEquals('S-Францева', trim($this->object->getFullNameFormat('Францева')).'-Францева');
    }
    public function testSplDetect1883()
    {
        $this->assertEquals('S-Фукина', trim($this->object->getFullNameFormat('Фукина')).'-Фукина');
    }
    public function testSplDetect1884()
    {
        $this->assertEquals('S-Хабалова', trim($this->object->getFullNameFormat('Хабалова')).'-Хабалова');
    }
    public function testSplDetect1885()
    {
        $this->assertEquals('S-Халтурина', trim($this->object->getFullNameFormat('Халтурина')).'-Халтурина');
    }
    public function testSplDetect1886()
    {
        $this->assertEquals('S-Харитонова', trim($this->object->getFullNameFormat('Харитонова')).'-Харитонова');
    }
    public function testSplDetect1887()
    {
        $this->assertEquals('S-Харламова', trim($this->object->getFullNameFormat('Харламова')).'-Харламова');
    }
    public function testSplDetect1888()
    {
        $this->assertEquals('S-Хлебникова', trim($this->object->getFullNameFormat('Хлебникова')).'-Хлебникова');
    }
    public function testSplDetect1889()
    {
        $this->assertEquals('S-Хлопонина', trim($this->object->getFullNameFormat('Хлопонина')).'-Хлопонина');
    }
    public function testSplDetect1890()
    {
        $this->assertEquals('S-Холодова', trim($this->object->getFullNameFormat('Холодова')).'-Холодова');
    }
    public function testSplDetect1891()
    {
        $this->assertEquals('S-Хомколова', trim($this->object->getFullNameFormat('Хомколова')).'-Хомколова');
    }
    public function testSplDetect1892()
    {
        $this->assertEquals('S-Храмова', trim($this->object->getFullNameFormat('Храмова')).'-Храмова');
    }
    public function testSplDetect1893()
    {
        $this->assertEquals('S-Хромова', trim($this->object->getFullNameFormat('Хромова')).'-Хромова');
    }
    public function testSplDetect1894()
    {
        $this->assertEquals('S-Худовекова', trim($this->object->getFullNameFormat('Худовекова')).'-Худовекова');
    }
    public function testSplDetect1895()
    {
        $this->assertEquals('S-Хлебова', trim($this->object->getFullNameFormat('Хлебова')).'-Хлебова');
    }
    public function testSplDetect1896()
    {
        $this->assertEquals('S-Хуртина', trim($this->object->getFullNameFormat('Хуртина')).'-Хуртина');
    }
    public function testSplDetect1897()
    {
        $this->assertEquals('S-Хребтова', trim($this->object->getFullNameFormat('Хребтова')).'-Хребтова');
    }
    public function testSplDetect1898()
    {
        $this->assertEquals('S-Худякова', trim($this->object->getFullNameFormat('Худякова')).'-Худякова');
    }
    public function testSplDetect1899()
    {
        $this->assertEquals('S-Царицына', trim($this->object->getFullNameFormat('Царицына')).'-Царицына');
    }
    public function testSplDetect1900()
    {
        $this->assertEquals('S-Цветаева', trim($this->object->getFullNameFormat('Цветаева')).'-Цветаева');
    }
    public function testSplDetect1901()
    {
        $this->assertEquals('S-Цветкова', trim($this->object->getFullNameFormat('Цветкова')).'-Цветкова');
    }
    public function testSplDetect1902()
    {
        $this->assertEquals('S-Циолковская', trim($this->object->getFullNameFormat('Циолковская')).'-Циолковская');
    }
    public function testSplDetect1903()
    {
        $this->assertEquals('S-Цитникова', trim($this->object->getFullNameFormat('Цитникова')).'-Цитникова');
    }
    public function testSplDetect1904()
    {
        $this->assertEquals('S-Цуканова', trim($this->object->getFullNameFormat('Цуканова')).'-Цуканова');
    }
    public function testSplDetect1905()
    {
        $this->assertEquals('S-Чадаева', trim($this->object->getFullNameFormat('Чадаева')).'-Чадаева');
    }
    public function testSplDetect1906()
    {
        $this->assertEquals('S-Чадова', trim($this->object->getFullNameFormat('Чадова')).'-Чадова');
    }
    public function testSplDetect1907()
    {
        $this->assertEquals('S-Чазова', trim($this->object->getFullNameFormat('Чазова')).'-Чазова');
    }
    public function testSplDetect1908()
    {
        $this->assertEquals('S-Чалая', trim($this->object->getFullNameFormat('Чалая')).'-Чалая');
    }
    public function testSplDetect1909()
    {
        $this->assertEquals('S-Чапаева', trim($this->object->getFullNameFormat('Чапаева')).'-Чапаева');
    }
    public function testSplDetect1910()
    {
        $this->assertEquals('S-Чеботарёва', trim($this->object->getFullNameFormat('Чеботарёва')).'-Чеботарёва');
    }
    public function testSplDetect1911()
    {
        $this->assertEquals('S-Чебыкина', trim($this->object->getFullNameFormat('Чебыкина')).'-Чебыкина');
    }
    public function testSplDetect1912()
    {
        $this->assertEquals('S-Чежекова', trim($this->object->getFullNameFormat('Чежекова')).'-Чежекова');
    }
    public function testSplDetect1913()
    {
        $this->assertEquals('S-Чекмарёв', trim($this->object->getFullNameFormat('Чекмарёв')).'-Чекмарёв');
    }
    public function testSplDetect1914()
    {
        $this->assertEquals('S-Челомеева', trim($this->object->getFullNameFormat('Челомеева')).'-Челомеева');
    }
    public function testSplDetect1915()
    {
        $this->assertEquals('S-Челомей', trim($this->object->getFullNameFormat('Челомей')).'-Челомей');
    }
    public function testSplDetect1916()
    {
        $this->assertEquals('S-Челпанова', trim($this->object->getFullNameFormat('Челпанова')).'-Челпанова');
    }
    public function testSplDetect1917()
    {
        $this->assertEquals('S-Чендева', trim($this->object->getFullNameFormat('Чендева')).'-Чендева');
    }
    public function testSplDetect1918()
    {
        $this->assertEquals('S-Черенчикова', trim($this->object->getFullNameFormat('Черенчикова')).'-Черенчикова');
    }
    public function testSplDetect1919()
    {
        $this->assertEquals('S-Черепанова', trim($this->object->getFullNameFormat('Черепанова')).'-Черепанова');
    }
    public function testSplDetect1920()
    {
        $this->assertEquals('S-Черкашина', trim($this->object->getFullNameFormat('Черкашина')).'-Черкашина');
    }
    public function testSplDetect1921()
    {
        $this->assertEquals('S-Чернова', trim($this->object->getFullNameFormat('Чернова')).'-Чернова');
    }
    public function testSplDetect1922()
    {
        $this->assertEquals('S-Чернышёва', trim($this->object->getFullNameFormat('Чернышёва')).'-Чернышёва');
    }
    public function testSplDetect1923()
    {
        $this->assertEquals('S-Чернакова', trim($this->object->getFullNameFormat('Чернакова')).'-Чернакова');
    }
    public function testSplDetect1924()
    {
        $this->assertEquals('S-Черникова', trim($this->object->getFullNameFormat('Черникова')).'-Черникова');
    }
    public function testSplDetect1925()
    {
        $this->assertEquals('S-Чеснокова', trim($this->object->getFullNameFormat('Чеснокова')).'-Чеснокова');
    }
    public function testSplDetect1926()
    {
        $this->assertEquals('S-Чигракова', trim($this->object->getFullNameFormat('Чигракова')).'-Чигракова');
    }
    public function testSplDetect1927()
    {
        $this->assertEquals('S-Чижикова', trim($this->object->getFullNameFormat('Чижикова')).'-Чижикова');
    }
    public function testSplDetect1928()
    {
        $this->assertEquals('S-Чиркаш', trim($this->object->getFullNameFormat('Чиркаш')).'-Чиркаш');
    }
    public function testSplDetect1929()
    {
        $this->assertEquals('S-Чистякова', trim($this->object->getFullNameFormat('Чистякова')).'-Чистякова');
    }
    public function testSplDetect1930()
    {
        $this->assertEquals('S-Чичикова', trim($this->object->getFullNameFormat('Чичикова')).'-Чичикова');
    }
    public function testSplDetect1931()
    {
        $this->assertEquals('S-Чичканова', trim($this->object->getFullNameFormat('Чичканова')).'-Чичканова');
    }
    public function testSplDetect1932()
    {
        $this->assertEquals('S-Чкалова', trim($this->object->getFullNameFormat('Чкалова')).'-Чкалова');
    }
    public function testSplDetect1933()
    {
        $this->assertEquals('S-Чмыхова', trim($this->object->getFullNameFormat('Чмыхова')).'-Чмыхова');
    }
    public function testSplDetect1934()
    {
        $this->assertEquals('S-Чугунова', trim($this->object->getFullNameFormat('Чугунова')).'-Чугунова');
    }
    public function testSplDetect1935()
    {
        $this->assertEquals('S-Чужинова', trim($this->object->getFullNameFormat('Чужинова')).'-Чужинова');
    }
    public function testSplDetect1936()
    {
        $this->assertEquals('S-Чукчова', trim($this->object->getFullNameFormat('Чукчова')).'-Чукчова');
    }
    public function testSplDetect1937()
    {
        $this->assertEquals('S-Чукреева', trim($this->object->getFullNameFormat('Чукреева')).'-Чукреева');
    }
    public function testSplDetect1938()
    {
        $this->assertEquals('S-Чупова', trim($this->object->getFullNameFormat('Чупова')).'-Чупова');
    }
    public function testSplDetect1939()
    {
        $this->assertEquals('S-Чуприна', trim($this->object->getFullNameFormat('Чуприна')).'-Чуприна');
    }
    public function testSplDetect1940()
    {
        $this->assertEquals('S-Чупрова', trim($this->object->getFullNameFormat('Чупрова')).'-Чупрова');
    }
    public function testSplDetect1941()
    {
        $this->assertEquals('S-Чучанова', trim($this->object->getFullNameFormat('Чучанова')).'-Чучанова');
    }
    public function testSplDetect1942()
    {
        $this->assertEquals('S-Чучумашева', trim($this->object->getFullNameFormat('Чучумашева')).'-Чучумашева');
    }
    public function testSplDetect1943()
    {
        $this->assertEquals('S-Шабунина', trim($this->object->getFullNameFormat('Шабунина')).'-Шабунина');
    }
    public function testSplDetect1944()
    {
        $this->assertEquals('S-Шакмакова', trim($this->object->getFullNameFormat('Шакмакова')).'-Шакмакова');
    }
    public function testSplDetect1945()
    {
        $this->assertEquals('S-Шаляпина', trim($this->object->getFullNameFormat('Шаляпина')).'-Шаляпина');
    }
    public function testSplDetect1946()
    {
        $this->assertEquals('S-Шаповалова', trim($this->object->getFullNameFormat('Шаповалова')).'-Шаповалова');
    }
    public function testSplDetect1947()
    {
        $this->assertEquals('S-Шапошникова', trim($this->object->getFullNameFormat('Шапошникова')).'-Шапошникова');
    }
    public function testSplDetect1948()
    {
        $this->assertEquals('S-Шарапова', trim($this->object->getFullNameFormat('Шарапова')).'-Шарапова');
    }
    public function testSplDetect1949()
    {
        $this->assertEquals('S-Шарова', trim($this->object->getFullNameFormat('Шарова')).'-Шарова');
    }
    public function testSplDetect1950()
    {
        $this->assertEquals('S-Шаршина', trim($this->object->getFullNameFormat('Шаршина')).'-Шаршина');
    }
    public function testSplDetect1951()
    {
        $this->assertEquals('S-Шашлова', trim($this->object->getFullNameFormat('Шашлова')).'-Шашлова');
    }
    public function testSplDetect1952()
    {
        $this->assertEquals('S-Шведова', trim($this->object->getFullNameFormat('Шведова')).'-Шведова');
    }
    public function testSplDetect1953()
    {
        $this->assertEquals('S-Шеваелёк', trim($this->object->getFullNameFormat('Шеваелёк')).'-Шеваелёк');
    }
    public function testSplDetect1954()
    {
        $this->assertEquals('S-Шеломова', trim($this->object->getFullNameFormat('Шеломова')).'-Шеломова');
    }
    public function testSplDetect1955()
    {
        $this->assertEquals('S-Шепкина', trim($this->object->getFullNameFormat('Шепкина')).'-Шепкина');
    }
    public function testSplDetect1956()
    {
        $this->assertEquals('S-Шеповалова', trim($this->object->getFullNameFormat('Шеповалова')).'-Шеповалова');
    }
    public function testSplDetect1957()
    {
        $this->assertEquals('S-Шереметьева', trim($this->object->getFullNameFormat('Шереметьева')).'-Шереметьева');
    }
    public function testSplDetect1958()
    {
        $this->assertEquals('S-Шерстова', trim($this->object->getFullNameFormat('Шерстова')).'-Шерстова');
    }
    public function testSplDetect1959()
    {
        $this->assertEquals('S-Шикалова', trim($this->object->getFullNameFormat('Шикалова')).'-Шикалова');
    }
    public function testSplDetect1960()
    {
        $this->assertEquals('S-Ширманова', trim($this->object->getFullNameFormat('Ширманова')).'-Ширманова');
    }
    public function testSplDetect1961()
    {
        $this->assertEquals('S-Шихранова', trim($this->object->getFullNameFormat('Шихранова')).'-Шихранова');
    }
    public function testSplDetect1962()
    {
        $this->assertEquals('S-Шишкина', trim($this->object->getFullNameFormat('Шишкина')).'-Шишкина');
    }
    public function testSplDetect1963()
    {
        $this->assertEquals('S-Шишлова', trim($this->object->getFullNameFormat('Шишлова')).'-Шишлова');
    }
    public function testSplDetect1964()
    {
        $this->assertEquals('S-Шишова', trim($this->object->getFullNameFormat('Шишова')).'-Шишова');
    }
    public function testSplDetect1965()
    {
        $this->assertEquals('S-Шкуратова', trim($this->object->getFullNameFormat('Шкуратова')).'-Шкуратова');
    }
    public function testSplDetect1966()
    {
        $this->assertEquals('S-Шлыкова', trim($this->object->getFullNameFormat('Шлыкова')).'-Шлыкова');
    }
    public function testSplDetect1967()
    {
        $this->assertEquals('S-Шмакова', trim($this->object->getFullNameFormat('Шмакова')).'-Шмакова');
    }
    public function testSplDetect1968()
    {
        $this->assertEquals('S-Шмелева', trim($this->object->getFullNameFormat('Шмелева')).'-Шмелева');
    }
    public function testSplDetect1969()
    {
        $this->assertEquals('S-Шубина', trim($this->object->getFullNameFormat('Шубина')).'-Шубина');
    }
    public function testSplDetect1970()
    {
        $this->assertEquals('S-Шубкина', trim($this->object->getFullNameFormat('Шубкина')).'-Шубкина');
    }
    public function testSplDetect1971()
    {
        $this->assertEquals('S-Шувалова', trim($this->object->getFullNameFormat('Шувалова')).'-Шувалова');
    }
    public function testSplDetect1972()
    {
        $this->assertEquals('S-Шуйская', trim($this->object->getFullNameFormat('Шуйская')).'-Шуйская');
    }
    public function testSplDetect1973()
    {
        $this->assertEquals('S-Шукшина', trim($this->object->getFullNameFormat('Шукшина')).'-Шукшина');
    }
    public function testSplDetect1974()
    {
        $this->assertEquals('S-Шулёва', trim($this->object->getFullNameFormat('Шулёва')).'-Шулёва');
    }
    public function testSplDetect1975()
    {
        $this->assertEquals('S-Шульдешова', trim($this->object->getFullNameFormat('Шульдешова')).'-Шульдешова');
    }
    public function testSplDetect1976()
    {
        $this->assertEquals('S-Шульга', trim($this->object->getFullNameFormat('Шульга')).'-Шульга');
    }
    public function testSplDetect1977()
    {
        $this->assertEquals('S-Шульгина', trim($this->object->getFullNameFormat('Шульгина')).'-Шульгина');
    }
    public function testSplDetect1978()
    {
        $this->assertEquals('S-Шурупова', trim($this->object->getFullNameFormat('Шурупова')).'-Шурупова');
    }
    public function testSplDetect1979()
    {
        $this->assertEquals('S-Шушалева', trim($this->object->getFullNameFormat('Шушалева')).'-Шушалева');
    }
    public function testSplDetect1980()
    {
        $this->assertEquals('S-Шурша', trim($this->object->getFullNameFormat('Шурша')).'-Шурша');
    }
    public function testSplDetect1981()
    {
        $this->assertEquals('S-Щавельская', trim($this->object->getFullNameFormat('Щавельская')).'-Щавельская');
    }
    public function testSplDetect1982()
    {
        $this->assertEquals('S-Щегельская', trim($this->object->getFullNameFormat('Щегельская')).'-Щегельская');
    }
    public function testSplDetect1983()
    {
        $this->assertEquals('S-Щеглова', trim($this->object->getFullNameFormat('Щеглова')).'-Щеглова');
    }
    public function testSplDetect1984()
    {
        $this->assertEquals('S-Щеголева', trim($this->object->getFullNameFormat('Щеголева')).'-Щеголева');
    }
    public function testSplDetect1985()
    {
        $this->assertEquals('S-Щеголихина', trim($this->object->getFullNameFormat('Щеголихина')).'-Щеголихина');
    }
    public function testSplDetect1986()
    {
        $this->assertEquals('S-Щедрина', trim($this->object->getFullNameFormat('Щедрина')).'-Щедрина');
    }
    public function testSplDetect1987()
    {
        $this->assertEquals('S-Щедрова', trim($this->object->getFullNameFormat('Щедрова')).'-Щедрова');
    }
    public function testSplDetect1988()
    {
        $this->assertEquals('S-Щекочихина', trim($this->object->getFullNameFormat('Щекочихина')).'-Щекочихина');
    }
    public function testSplDetect1989()
    {
        $this->assertEquals('S-Щепкина', trim($this->object->getFullNameFormat('Щепкина')).'-Щепкина');
    }
    public function testSplDetect1990()
    {
        $this->assertEquals('S-Щербакова', trim($this->object->getFullNameFormat('Щербакова')).'-Щербакова');
    }
    public function testSplDetect1991()
    {
        $this->assertEquals('S-Щербатых', trim($this->object->getFullNameFormat('Щербатых')).'-Щербатых');
    }
    public function testSplDetect1992()
    {
        $this->assertEquals('S-Щербина', trim($this->object->getFullNameFormat('Щербина')).'-Щербина');
    }
    public function testSplDetect1993()
    {
        $this->assertEquals('S-Щетинаина', trim($this->object->getFullNameFormat('Щетинаина')).'-Щетинаина');
    }
    public function testSplDetect1994()
    {
        $this->assertEquals('S-Щеткина', trim($this->object->getFullNameFormat('Щеткина')).'-Щеткина');
    }
    public function testSplDetect1995()
    {
        $this->assertEquals('S-Щукина', trim($this->object->getFullNameFormat('Щукина')).'-Щукина');
    }
    public function testSplDetect1996()
    {
        $this->assertEquals('S-Энтина', trim($this->object->getFullNameFormat('Энтина')).'-Энтина');
    }
    public function testSplDetect1997()
    {
        $this->assertEquals('S-Эсце', trim($this->object->getFullNameFormat('Эсце')).'-Эсце');
    }
    public function testSplDetect1998()
    {
        $this->assertEquals('S-Ювелева', trim($this->object->getFullNameFormat('Ювелева')).'-Ювелева');
    }
    public function testSplDetect1999()
    {
        $this->assertEquals('S-Юганцева', trim($this->object->getFullNameFormat('Юганцева')).'-Юганцева');
    }
    public function testSplDetect2000()
    {
        $this->assertEquals('S-Югова', trim($this->object->getFullNameFormat('Югова')).'-Югова');
    }
    public function testSplDetect2001()
    {
        $this->assertEquals('S-Юдашкина', trim($this->object->getFullNameFormat('Юдашкина')).'-Юдашкина');
    }
    public function testSplDetect2002()
    {
        $this->assertEquals('S-Юдина', trim($this->object->getFullNameFormat('Юдина')).'-Юдина');
    }
    public function testSplDetect2003()
    {
        $this->assertEquals('S-Юнкина', trim($this->object->getFullNameFormat('Юнкина')).'-Юнкина');
    }
    public function testSplDetect2004()
    {
        $this->assertEquals('S-Юрнаева', trim($this->object->getFullNameFormat('Юрнаева')).'-Юрнаева');
    }
    public function testSplDetect2005()
    {
        $this->assertEquals('S-Юрьева', trim($this->object->getFullNameFormat('Юрьева')).'-Юрьева');
    }
    public function testSplDetect2006()
    {
        $this->assertEquals('S-Юсупова', trim($this->object->getFullNameFormat('Юсупова')).'-Юсупова');
    }
    public function testSplDetect2007()
    {
        $this->assertEquals('S-Юферева', trim($this->object->getFullNameFormat('Юферева')).'-Юферева');
    }
    public function testSplDetect2008()
    {
        $this->assertEquals('S-Якимова', trim($this->object->getFullNameFormat('Якимова')).'-Якимова');
    }
    public function testSplDetect2009()
    {
        $this->assertEquals('S-Яковалева', trim($this->object->getFullNameFormat('Яковалева')).'-Яковалева');
    }
    public function testSplDetect2010()
    {
        $this->assertEquals('S-Якубова', trim($this->object->getFullNameFormat('Якубова')).'-Якубова');
    }
    public function testSplDetect2011()
    {
        $this->assertEquals('S-Якубоваич', trim($this->object->getFullNameFormat('Якубоваич')).'-Якубоваич');
    }
    public function testSplDetect2012()
    {
        $this->assertEquals('S-Якушева', trim($this->object->getFullNameFormat('Якушева')).'-Якушева');
    }
    public function testSplDetect2013()
    {
        $this->assertEquals('S-Янаева', trim($this->object->getFullNameFormat('Янаева')).'-Янаева');
    }
    public function testSplDetect2014()
    {
        $this->assertEquals('S-Янкова', trim($this->object->getFullNameFormat('Янкова')).'-Янкова');
    }
    public function testSplDetect2015()
    {
        $this->assertEquals('S-Янковаская', trim($this->object->getFullNameFormat('Янковаская')).'-Янковаская');
    }
    public function testSplDetect2016()
    {
        $this->assertEquals('S-Ярмольник', trim($this->object->getFullNameFormat('Ярмольник')).'-Ярмольник');
    }
    public function testSplDetect2017()
    {
        $this->assertEquals('S-Яромеева', trim($this->object->getFullNameFormat('Яромеева')).'-Яромеева');
    }
    public function testSplDetect2018()
    {
        $this->assertEquals('S-Ярцева', trim($this->object->getFullNameFormat('Ярцева')).'-Ярцева');
    }
    public function testSplDetect2019()
    {
        $this->assertEquals('S-Ясенева', trim($this->object->getFullNameFormat('Ясенева')).'-Ясенева');
    }
    public function testSplDetect2020()
    {
        $this->assertEquals('S-Яснеева', trim($this->object->getFullNameFormat('Яснеева')).'-Яснеева');
    }
    public function testSplDetect2021()
    {
        $this->assertEquals('S-Яшина', trim($this->object->getFullNameFormat('Яшина')).'-Яшина');
    }

}