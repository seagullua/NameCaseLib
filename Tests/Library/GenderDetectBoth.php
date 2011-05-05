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
        $this->object->setFirstName('Авдей');
        $this->object->setSecondName('Абакумов');
        $this->assertEquals('1-Авдей Абакумов', $this->object->genderAutoDetect().'-Авдей Абакумов');
    }
    public function testGenDetect1()
    {
        $this->object->setFirstName('Аверьян');
        $this->object->setSecondName('Абдулов');
        $this->assertEquals('1-Аверьян Абдулов', $this->object->genderAutoDetect().'-Аверьян Абдулов');
    }
    public function testGenDetect2()
    {
        $this->object->setFirstName('Адам');
        $this->object->setSecondName('Абрамов');
        $this->assertEquals('1-Адам Абрамов', $this->object->genderAutoDetect().'-Адам Абрамов');
    }
    public function testGenDetect3()
    {
        $this->object->setFirstName('Адриан');
        $this->object->setSecondName('Авдеев');
        $this->assertEquals('1-Адриан Авдеев', $this->object->genderAutoDetect().'-Адриан Авдеев');
    }
    public function testGenDetect4()
    {
        $this->object->setFirstName('Аксён');
        $this->object->setSecondName('Аверин');
        $this->assertEquals('1-Аксён Аверин', $this->object->genderAutoDetect().'-Аксён Аверин');
    }
    public function testGenDetect5()
    {
        $this->object->setFirstName('Александр');
        $this->object->setSecondName('Аверьянов');
        $this->assertEquals('1-Александр Аверьянов', $this->object->genderAutoDetect().'-Александр Аверьянов');
    }
    public function testGenDetect6()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setSecondName('Агапов');
        $this->assertEquals('1-Алексей Агапов', $this->object->genderAutoDetect().'-Алексей Агапов');
    }
    public function testGenDetect7()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setSecondName('Агафонов');
        $this->assertEquals('1-Анатолий Агафонов', $this->object->genderAutoDetect().'-Анатолий Агафонов');
    }
    public function testGenDetect8()
    {
        $this->object->setFirstName('Аркадий');
        $this->object->setSecondName('Агейкин');
        $this->assertEquals('1-Аркадий Агейкин', $this->object->genderAutoDetect().'-Аркадий Агейкин');
    }
    public function testGenDetect9()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setSecondName('Ажищенков');
        $this->assertEquals('1-Арсен Ажищенков', $this->object->genderAutoDetect().'-Арсен Ажищенков');
    }
    public function testGenDetect10()
    {
        $this->object->setFirstName('Арсений');
        $this->object->setSecondName('Аксаков');
        $this->assertEquals('1-Арсений Аксаков', $this->object->genderAutoDetect().'-Арсений Аксаков');
    }
    public function testGenDetect11()
    {
        $this->object->setFirstName('Артём');
        $this->object->setSecondName('Аксёнов');
        $this->assertEquals('1-Артём Аксёнов', $this->object->genderAutoDetect().'-Артём Аксёнов');
    }
    public function testGenDetect12()
    {
        $this->object->setFirstName('Артемий');
        $this->object->setSecondName('Аксенчук');
        $this->assertEquals('1-Артемий Аксенчук', $this->object->genderAutoDetect().'-Артемий Аксенчук');
    }
    public function testGenDetect13()
    {
        $this->object->setFirstName('Артур');
        $this->object->setSecondName('Аленин');
        $this->assertEquals('1-Артур Аленин', $this->object->genderAutoDetect().'-Артур Аленин');
    }
    public function testGenDetect14()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Алиев');
        $this->assertEquals('1-Архип Алиев', $this->object->genderAutoDetect().'-Архип Алиев');
    }
    public function testGenDetect15()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setSecondName('Амалиев');
        $this->assertEquals('1-Афанас Амалиев', $this->object->genderAutoDetect().'-Афанас Амалиев');
    }
    public function testGenDetect16()
    {
        $this->object->setFirstName('Афанасий');
        $this->object->setSecondName('Амелин');
        $this->assertEquals('1-Афанасий Амелин', $this->object->genderAutoDetect().'-Афанасий Амелин');
    }
    public function testGenDetect17()
    {
        $this->object->setFirstName('Андрей');
        $this->object->setSecondName('Аминев');
        $this->assertEquals('1-Андрей Аминев', $this->object->genderAutoDetect().'-Андрей Аминев');
    }
    public function testGenDetect18()
    {
        $this->object->setFirstName('Анисим');
        $this->object->setSecondName('Александров');
        $this->assertEquals('1-Анисим Александров', $this->object->genderAutoDetect().'-Анисим Александров');
    }
    public function testGenDetect19()
    {
        $this->object->setFirstName('Антип');
        $this->object->setSecondName('Алексеев');
        $this->assertEquals('1-Антип Алексеев', $this->object->genderAutoDetect().'-Антип Алексеев');
    }
    public function testGenDetect20()
    {
        $this->object->setFirstName('Антон');
        $this->object->setSecondName('Алёхин');
        $this->assertEquals('1-Антон Алёхин', $this->object->genderAutoDetect().'-Антон Алёхин');
    }
    public function testGenDetect21()
    {
        $this->object->setFirstName('Ануфрий');
        $this->object->setSecondName('Аллилуев');
        $this->assertEquals('1-Ануфрий Аллилуев', $this->object->genderAutoDetect().'-Ануфрий Аллилуев');
    }
    public function testGenDetect22()
    {
        $this->object->setFirstName('Бенедикт');
        $this->object->setSecondName('Андреев');
        $this->assertEquals('1-Бенедикт Андреев', $this->object->genderAutoDetect().'-Бенедикт Андреев');
    }
    public function testGenDetect23()
    {
        $this->object->setFirstName('Богдан');
        $this->object->setSecondName('Андреюшкин');
        $this->assertEquals('1-Богдан Андреюшкин', $this->object->genderAutoDetect().'-Богдан Андреюшкин');
    }
    public function testGenDetect24()
    {
        $this->object->setFirstName('Борис');
        $this->object->setSecondName('Андроников');
        $this->assertEquals('1-Борис Андроников', $this->object->genderAutoDetect().'-Борис Андроников');
    }
    public function testGenDetect25()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setSecondName('Андропов');
        $this->assertEquals('1-Борислав Андропов', $this->object->genderAutoDetect().'-Борислав Андропов');
    }
    public function testGenDetect26()
    {
        $this->object->setFirstName('Бронислав');
        $this->object->setSecondName('Аниканов');
        $this->assertEquals('1-Бронислав Аниканов', $this->object->genderAutoDetect().'-Бронислав Аниканов');
    }
    public function testGenDetect27()
    {
        $this->object->setFirstName('Вадим');
        $this->object->setSecondName('Анисимов');
        $this->assertEquals('1-Вадим Анисимов', $this->object->genderAutoDetect().'-Вадим Анисимов');
    }
    public function testGenDetect28()
    {
        $this->object->setFirstName('Валентин');
        $this->object->setSecondName('Анишин');
        $this->assertEquals('1-Валентин Анишин', $this->object->genderAutoDetect().'-Валентин Анишин');
    }
    public function testGenDetect29()
    {
        $this->object->setFirstName('Валерий');
        $this->object->setSecondName('Анников');
        $this->assertEquals('1-Валерий Анников', $this->object->genderAutoDetect().'-Валерий Анников');
    }
    public function testGenDetect30()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setSecondName('Анохин');
        $this->assertEquals('1-Валериан Анохин', $this->object->genderAutoDetect().'-Валериан Анохин');
    }
    public function testGenDetect31()
    {
        $this->object->setFirstName('Валерьян');
        $this->object->setSecondName('Аношкин');
        $this->assertEquals('1-Валерьян Аношкин', $this->object->genderAutoDetect().'-Валерьян Аношкин');
    }
    public function testGenDetect32()
    {
        $this->object->setFirstName('Василий');
        $this->object->setSecondName('Антипов');
        $this->assertEquals('1-Василий Антипов', $this->object->genderAutoDetect().'-Василий Антипов');
    }
    public function testGenDetect33()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setSecondName('Антонов');
        $this->assertEquals('1-Венедикт Антонов', $this->object->genderAutoDetect().'-Венедикт Антонов');
    }
    public function testGenDetect34()
    {
        $this->object->setFirstName('Викентий');
        $this->object->setSecondName('Антонович');
        $this->assertEquals('1-Викентий Антонович', $this->object->genderAutoDetect().'-Викентий Антонович');
    }
    public function testGenDetect35()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setSecondName('Артамонов');
        $this->assertEquals('1-Виктор Артамонов', $this->object->genderAutoDetect().'-Виктор Артамонов');
    }
    public function testGenDetect36()
    {
        $this->object->setFirstName('Вилен');
        $this->object->setSecondName('Арефьев');
        $this->assertEquals('1-Вилен Арефьев', $this->object->genderAutoDetect().'-Вилен Арефьев');
    }
    public function testGenDetect37()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setSecondName('Аристархов');
        $this->assertEquals('1-Вилор Аристархов', $this->object->genderAutoDetect().'-Вилор Аристархов');
    }
    public function testGenDetect38()
    {
        $this->object->setFirstName('Виталий');
        $this->object->setSecondName('Арсеньев');
        $this->assertEquals('1-Виталий Арсеньев', $this->object->genderAutoDetect().'-Виталий Арсеньев');
    }
    public function testGenDetect39()
    {
        $this->object->setFirstName('Владилен');
        $this->object->setSecondName('Артёмов');
        $this->assertEquals('1-Владилен Артёмов', $this->object->genderAutoDetect().'-Владилен Артёмов');
    }
    public function testGenDetect40()
    {
        $this->object->setFirstName('Владимир');
        $this->object->setSecondName('Асланов');
        $this->assertEquals('1-Владимир Асланов', $this->object->genderAutoDetect().'-Владимир Асланов');
    }
    public function testGenDetect41()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setSecondName('Аслаханов');
        $this->assertEquals('1-Владислав Аслаханов', $this->object->genderAutoDetect().'-Владислав Аслаханов');
    }
    public function testGenDetect42()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setSecondName('Астанков');
        $this->assertEquals('1-Владлен Астанков', $this->object->genderAutoDetect().'-Владлен Астанков');
    }
    public function testGenDetect43()
    {
        $this->object->setFirstName('Влас');
        $this->object->setSecondName('Астафьев');
        $this->assertEquals('1-Влас Астафьев', $this->object->genderAutoDetect().'-Влас Астафьев');
    }
    public function testGenDetect44()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setSecondName('Астахов');
        $this->assertEquals('1-Всеволод Астахов', $this->object->genderAutoDetect().'-Всеволод Астахов');
    }
    public function testGenDetect45()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setSecondName('Афанасьев');
        $this->assertEquals('1-Вячеслав Афанасьев', $this->object->genderAutoDetect().'-Вячеслав Афанасьев');
    }
    public function testGenDetect46()
    {
        $this->object->setFirstName('Гавриил');
        $this->object->setSecondName('Афонин');
        $this->assertEquals('1-Гавриил Афонин', $this->object->genderAutoDetect().'-Гавриил Афонин');
    }
    public function testGenDetect47()
    {
        $this->object->setFirstName('Гаврила');
        $this->object->setSecondName('Аспидов');
        $this->assertEquals('1-Гаврила Аспидов', $this->object->genderAutoDetect().'-Гаврила Аспидов');
    }
    public function testGenDetect48()
    {
        $this->object->setFirstName('Геннадий');
        $this->object->setSecondName('Бабатьев');
        $this->assertEquals('1-Геннадий Бабатьев', $this->object->genderAutoDetect().'-Геннадий Бабатьев');
    }
    public function testGenDetect49()
    {
        $this->object->setFirstName('Георгий');
        $this->object->setSecondName('Бабиков');
        $this->assertEquals('1-Георгий Бабиков', $this->object->genderAutoDetect().'-Георгий Бабиков');
    }
    public function testGenDetect50()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setSecondName('Бабичев');
        $this->assertEquals('1-Герасим Бабичев', $this->object->genderAutoDetect().'-Герасим Бабичев');
    }
    public function testGenDetect51()
    {
        $this->object->setFirstName('Герман');
        $this->object->setSecondName('Бабкин');
        $this->assertEquals('1-Герман Бабкин', $this->object->genderAutoDetect().'-Герман Бабкин');
    }
    public function testGenDetect52()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setSecondName('Бабурин');
        $this->assertEquals('1-Гертруд Бабурин', $this->object->genderAutoDetect().'-Гертруд Бабурин');
    }
    public function testGenDetect53()
    {
        $this->object->setFirstName('Глеб');
        $this->object->setSecondName('Багров');
        $this->assertEquals('1-Глеб Багров', $this->object->genderAutoDetect().'-Глеб Багров');
    }
    public function testGenDetect54()
    {
        $this->object->setFirstName('Гордей');
        $this->object->setSecondName('Бакрылов');
        $this->assertEquals('1-Гордей Бакрылов', $this->object->genderAutoDetect().'-Гордей Бакрылов');
    }
    public function testGenDetect55()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setSecondName('Бажанов');
        $this->assertEquals('1-Григорий Бажанов', $this->object->genderAutoDetect().'-Григорий Бажанов');
    }
    public function testGenDetect56()
    {
        $this->object->setFirstName('Гурий');
        $this->object->setSecondName('Баженов');
        $this->assertEquals('1-Гурий Баженов', $this->object->genderAutoDetect().'-Гурий Баженов');
    }
    public function testGenDetect57()
    {
        $this->object->setFirstName('Давид');
        $this->object->setSecondName('Базанов');
        $this->assertEquals('1-Давид Базанов', $this->object->genderAutoDetect().'-Давид Базанов');
    }
    public function testGenDetect58()
    {
        $this->object->setFirstName('Давыд');
        $this->object->setSecondName('Базаров');
        $this->assertEquals('1-Давыд Базаров', $this->object->genderAutoDetect().'-Давыд Базаров');
    }
    public function testGenDetect59()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setSecondName('Балакин');
        $this->assertEquals('1-Даниил Балакин', $this->object->genderAutoDetect().'-Даниил Балакин');
    }
    public function testGenDetect60()
    {
        $this->object->setFirstName('Данила');
        $this->object->setSecondName('Балахнов');
        $this->assertEquals('1-Данила Балахнов', $this->object->genderAutoDetect().'-Данила Балахнов');
    }
    public function testGenDetect61()
    {
        $this->object->setFirstName('Демид');
        $this->object->setSecondName('Балашов');
        $this->assertEquals('1-Демид Балашов', $this->object->genderAutoDetect().'-Демид Балашов');
    }
    public function testGenDetect62()
    {
        $this->object->setFirstName('Демьян');
        $this->object->setSecondName('Баранов');
        $this->assertEquals('1-Демьян Баранов', $this->object->genderAutoDetect().'-Демьян Баранов');
    }
    public function testGenDetect63()
    {
        $this->object->setFirstName('Денис');
        $this->object->setSecondName('Барболин');
        $this->assertEquals('1-Денис Барболин', $this->object->genderAutoDetect().'-Денис Барболин');
    }
    public function testGenDetect64()
    {
        $this->object->setFirstName('Димитрий');
        $this->object->setSecondName('Баренцев');
        $this->assertEquals('1-Димитрий Баренцев', $this->object->genderAutoDetect().'-Димитрий Баренцев');
    }
    public function testGenDetect65()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setSecondName('Баринов');
        $this->assertEquals('1-Дмитрий Баринов', $this->object->genderAutoDetect().'-Дмитрий Баринов');
    }
    public function testGenDetect66()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setSecondName('Барков');
        $this->assertEquals('1-Дорофей Барков', $this->object->genderAutoDetect().'-Дорофей Барков');
    }
    public function testGenDetect67()
    {
        $this->object->setFirstName('Евгений');
        $this->object->setSecondName('Барсуков');
        $this->assertEquals('1-Евгений Барсуков', $this->object->genderAutoDetect().'-Евгений Барсуков');
    }
    public function testGenDetect68()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setSecondName('Батрутдинов');
        $this->assertEquals('1-Евдоким Батрутдинов', $this->object->genderAutoDetect().'-Евдоким Батрутдинов');
    }
    public function testGenDetect69()
    {
        $this->object->setFirstName('Евсей');
        $this->object->setSecondName('Безбородов');
        $this->assertEquals('1-Евсей Безбородов', $this->object->genderAutoDetect().'-Евсей Безбородов');
    }
    public function testGenDetect70()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setSecondName('Безродный');
        $this->assertEquals('1-Евдоким Безродный', $this->object->genderAutoDetect().'-Евдоким Безродный');
    }
    public function testGenDetect71()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setSecondName('Безруков');
        $this->assertEquals('1-Евстафий Безруков', $this->object->genderAutoDetect().'-Евстафий Безруков');
    }
    public function testGenDetect72()
    {
        $this->object->setFirstName('Евстигней');
        $this->object->setSecondName('Безукладников');
        $this->assertEquals('1-Евстигней Безукладников', $this->object->genderAutoDetect().'-Евстигней Безукладников');
    }
    public function testGenDetect73()
    {
        $this->object->setFirstName('Егор');
        $this->object->setSecondName('Беликов');
        $this->assertEquals('1-Егор Беликов', $this->object->genderAutoDetect().'-Егор Беликов');
    }
    public function testGenDetect74()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setSecondName('Белов');
        $this->assertEquals('1-Елизар Белов', $this->object->genderAutoDetect().'-Елизар Белов');
    }
    public function testGenDetect75()
    {
        $this->object->setFirstName('Елисей');
        $this->object->setSecondName('Беломестнов');
        $this->assertEquals('1-Елисей Беломестнов', $this->object->genderAutoDetect().'-Елисей Беломестнов');
    }
    public function testGenDetect76()
    {
        $this->object->setFirstName('Емельян');
        $this->object->setSecondName('Бендлин');
        $this->assertEquals('1-Емельян Бендлин', $this->object->genderAutoDetect().'-Емельян Бендлин');
    }
    public function testGenDetect77()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setSecondName('Бережной');
        $this->assertEquals('1-Еремей Бережной', $this->object->genderAutoDetect().'-Еремей Бережной');
    }
    public function testGenDetect78()
    {
        $this->object->setFirstName('Ермил');
        $this->object->setSecondName('Белоусов');
        $this->assertEquals('1-Ермил Белоусов', $this->object->genderAutoDetect().'-Ермил Белоусов');
    }
    public function testGenDetect79()
    {
        $this->object->setFirstName('Ермолай');
        $this->object->setSecondName('Бершов');
        $this->assertEquals('1-Ермолай Бершов', $this->object->genderAutoDetect().'-Ермолай Бершов');
    }
    public function testGenDetect80()
    {
        $this->object->setFirstName('Ерофей');
        $this->object->setSecondName('Беспалов');
        $this->assertEquals('1-Ерофей Беспалов', $this->object->genderAutoDetect().'-Ерофей Беспалов');
    }
    public function testGenDetect81()
    {
        $this->object->setFirstName('Ефим');
        $this->object->setSecondName('Бескрёстнов');
        $this->assertEquals('1-Ефим Бескрёстнов', $this->object->genderAutoDetect().'-Ефим Бескрёстнов');
    }
    public function testGenDetect82()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setSecondName('Бирюков');
        $this->assertEquals('1-Ефимий Бирюков', $this->object->genderAutoDetect().'-Ефимий Бирюков');
    }
    public function testGenDetect83()
    {
        $this->object->setFirstName('Ефрем');
        $this->object->setSecondName('Блаженов');
        $this->assertEquals('1-Ефрем Блаженов', $this->object->genderAutoDetect().'-Ефрем Блаженов');
    }
    public function testGenDetect84()
    {
        $this->object->setFirstName('Жан');
        $this->object->setSecondName('Блатов');
        $this->assertEquals('1-Жан Блатов', $this->object->genderAutoDetect().'-Жан Блатов');
    }
    public function testGenDetect85()
    {
        $this->object->setFirstName('Захар');
        $this->object->setSecondName('Блинов');
        $this->assertEquals('1-Захар Блинов', $this->object->genderAutoDetect().'-Захар Блинов');
    }
    public function testGenDetect86()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setSecondName('Блохин');
        $this->assertEquals('1-Захарий Блохин', $this->object->genderAutoDetect().'-Захарий Блохин');
    }
    public function testGenDetect87()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setSecondName('Бобр');
        $this->assertEquals('1-Зиновий Бобр', $this->object->genderAutoDetect().'-Зиновий Бобр');
    }
    public function testGenDetect88()
    {
        $this->object->setFirstName('Иван');
        $this->object->setSecondName('Бобров');
        $this->assertEquals('1-Иван Бобров', $this->object->genderAutoDetect().'-Иван Бобров');
    }
    public function testGenDetect89()
    {
        $this->object->setFirstName('Игнат');
        $this->object->setSecondName('Бобрик');
        $this->assertEquals('1-Игнат Бобрик', $this->object->genderAutoDetect().'-Игнат Бобрик');
    }
    public function testGenDetect90()
    {
        $this->object->setFirstName('Игнатий');
        $this->object->setSecondName('Богатырёв');
        $this->assertEquals('1-Игнатий Богатырёв', $this->object->genderAutoDetect().'-Игнатий Богатырёв');
    }
    public function testGenDetect91()
    {
        $this->object->setFirstName('Игорь');
        $this->object->setSecondName('Богданов');
        $this->assertEquals('1-Игорь Богданов', $this->object->genderAutoDetect().'-Игорь Богданов');
    }
    public function testGenDetect92()
    {
        $this->object->setFirstName('Измаил');
        $this->object->setSecondName('Боголепов');
        $this->assertEquals('1-Измаил Боголепов', $this->object->genderAutoDetect().'-Измаил Боголепов');
    }
    public function testGenDetect93()
    {
        $this->object->setFirstName('Изот');
        $this->object->setSecondName('Боголюбов');
        $this->assertEquals('1-Изот Боголюбов', $this->object->genderAutoDetect().'-Изот Боголюбов');
    }
    public function testGenDetect94()
    {
        $this->object->setFirstName('Иларион');
        $this->object->setSecondName('Богомазов');
        $this->assertEquals('1-Иларион Богомазов', $this->object->genderAutoDetect().'-Иларион Богомазов');
    }
    public function testGenDetect95()
    {
        $this->object->setFirstName('Илья');
        $this->object->setSecondName('Богомолов');
        $this->assertEquals('1-Илья Богомолов', $this->object->genderAutoDetect().'-Илья Богомолов');
    }
    public function testGenDetect96()
    {
        $this->object->setFirstName('Ильяс');
        $this->object->setSecondName('Богров');
        $this->assertEquals('1-Ильяс Богров', $this->object->genderAutoDetect().'-Ильяс Богров');
    }
    public function testGenDetect97()
    {
        $this->object->setFirstName('Иосип');
        $this->object->setSecondName('Бойков');
        $this->assertEquals('1-Иосип Бойков', $this->object->genderAutoDetect().'-Иосип Бойков');
    }
    public function testGenDetect98()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setSecondName('Болотников');
        $this->assertEquals('1-Иосиф Болотников', $this->object->genderAutoDetect().'-Иосиф Болотников');
    }
    public function testGenDetect99()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setSecondName('Болтоногов');
        $this->assertEquals('1-Исаак Болтоногов', $this->object->genderAutoDetect().'-Исаак Болтоногов');
    }
    public function testGenDetect100()
    {
        $this->object->setFirstName('Исак');
        $this->object->setSecondName('Большов');
        $this->assertEquals('1-Исак Большов', $this->object->genderAutoDetect().'-Исак Большов');
    }
    public function testGenDetect101()
    {
        $this->object->setFirstName('Исидор');
        $this->object->setSecondName('Бореев');
        $this->assertEquals('1-Исидор Бореев', $this->object->genderAutoDetect().'-Исидор Бореев');
    }
    public function testGenDetect102()
    {
        $this->object->setFirstName('Искандер');
        $this->object->setSecondName('Бортник');
        $this->assertEquals('1-Искандер Бортник', $this->object->genderAutoDetect().'-Искандер Бортник');
    }
    public function testGenDetect103()
    {
        $this->object->setFirstName('Казимир');
        $this->object->setSecondName('Борзилов');
        $this->assertEquals('1-Казимир Борзилов', $this->object->genderAutoDetect().'-Казимир Борзилов');
    }
    public function testGenDetect104()
    {
        $this->object->setFirstName('Калина');
        $this->object->setSecondName('Борцов');
        $this->assertEquals('1-Калина Борцов', $this->object->genderAutoDetect().'-Калина Борцов');
    }
    public function testGenDetect105()
    {
        $this->object->setFirstName('Каллиник');
        $this->object->setSecondName('Брагин');
        $this->assertEquals('1-Каллиник Брагин', $this->object->genderAutoDetect().'-Каллиник Брагин');
    }
    public function testGenDetect106()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setSecondName('Брежнев');
        $this->assertEquals('1-Каллистрат Брежнев', $this->object->genderAutoDetect().'-Каллистрат Брежнев');
    }
    public function testGenDetect107()
    {
        $this->object->setFirstName('Капитон');
        $this->object->setSecondName('Бугаков');
        $this->assertEquals('1-Капитон Бугаков', $this->object->genderAutoDetect().'-Капитон Бугаков');
    }
    public function testGenDetect108()
    {
        $this->object->setFirstName('Карп');
        $this->object->setSecondName('Буданов');
        $this->assertEquals('1-Карп Буданов', $this->object->genderAutoDetect().'-Карп Буданов');
    }
    public function testGenDetect109()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setSecondName('Будников');
        $this->assertEquals('1-Касьян Будников', $this->object->genderAutoDetect().'-Касьян Будников');
    }
    public function testGenDetect110()
    {
        $this->object->setFirstName('Кирей');
        $this->object->setSecondName('Будылин');
        $this->assertEquals('1-Кирей Будылин', $this->object->genderAutoDetect().'-Кирей Будылин');
    }
    public function testGenDetect111()
    {
        $this->object->setFirstName('Кирила');
        $this->object->setSecondName('Букин');
        $this->assertEquals('1-Кирила Букин', $this->object->genderAutoDetect().'-Кирила Букин');
    }
    public function testGenDetect112()
    {
        $this->object->setFirstName('Кирилл');
        $this->object->setSecondName('Букирь');
        $this->assertEquals('1-Кирилл Букирь', $this->object->genderAutoDetect().'-Кирилл Букирь');
    }
    public function testGenDetect113()
    {
        $this->object->setFirstName('Клим');
        $this->object->setSecondName('Буклин');
        $this->assertEquals('1-Клим Буклин', $this->object->genderAutoDetect().'-Клим Буклин');
    }
    public function testGenDetect114()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Булгаков');
        $this->assertEquals('1-Климент Булгаков', $this->object->genderAutoDetect().'-Климент Булгаков');
    }
    public function testGenDetect115()
    {
        $this->object->setFirstName('Климентий');
        $this->object->setSecondName('Бунин');
        $this->assertEquals('1-Климентий Бунин', $this->object->genderAutoDetect().'-Климентий Бунин');
    }
    public function testGenDetect116()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setSecondName('Бурков');
        $this->assertEquals('1-Кондрат Бурков', $this->object->genderAutoDetect().'-Кондрат Бурков');
    }
    public function testGenDetect117()
    {
        $this->object->setFirstName('Кондратий');
        $this->object->setSecondName('Буров');
        $this->assertEquals('1-Кондратий Буров', $this->object->genderAutoDetect().'-Кондратий Буров');
    }
    public function testGenDetect118()
    {
        $this->object->setFirstName('Конон');
        $this->object->setSecondName('Бурцов');
        $this->assertEquals('1-Конон Бурцов', $this->object->genderAutoDetect().'-Конон Бурцов');
    }
    public function testGenDetect119()
    {
        $this->object->setFirstName('Константин');
        $this->object->setSecondName('Буряков');
        $this->assertEquals('1-Константин Буряков', $this->object->genderAutoDetect().'-Константин Буряков');
    }
    public function testGenDetect120()
    {
        $this->object->setFirstName('Корней');
        $this->object->setSecondName('Бутылин');
        $this->assertEquals('1-Корней Бутылин', $this->object->genderAutoDetect().'-Корней Бутылин');
    }
    public function testGenDetect121()
    {
        $this->object->setFirstName('Корнелий');
        $this->object->setSecondName('Былинкин');
        $this->assertEquals('1-Корнелий Былинкин', $this->object->genderAutoDetect().'-Корнелий Былинкин');
    }
    public function testGenDetect122()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setSecondName('Бычков');
        $this->assertEquals('1-Ксенофонт Бычков', $this->object->genderAutoDetect().'-Ксенофонт Бычков');
    }
    public function testGenDetect123()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setSecondName('Вавилов');
        $this->assertEquals('1-Кузьма Вавилов', $this->object->genderAutoDetect().'-Кузьма Вавилов');
    }
    public function testGenDetect124()
    {
        $this->object->setFirstName('Куприян');
        $this->object->setSecondName('Вагин');
        $this->assertEquals('1-Куприян Вагин', $this->object->genderAutoDetect().'-Куприян Вагин');
    }
    public function testGenDetect125()
    {
        $this->object->setFirstName('Лаврентий');
        $this->object->setSecondName('Вазов');
        $this->assertEquals('1-Лаврентий Вазов', $this->object->genderAutoDetect().'-Лаврентий Вазов');
    }
    public function testGenDetect126()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setSecondName('Валевач');
        $this->assertEquals('1-Лазарь Валевач', $this->object->genderAutoDetect().'-Лазарь Валевач');
    }
    public function testGenDetect127()
    {
        $this->object->setFirstName('Лев');
        $this->object->setSecondName('Варенников');
        $this->assertEquals('1-Лев Варенников', $this->object->genderAutoDetect().'-Лев Варенников');
    }
    public function testGenDetect128()
    {
        $this->object->setFirstName('Левон');
        $this->object->setSecondName('Васильев');
        $this->assertEquals('1-Левон Васильев', $this->object->genderAutoDetect().'-Левон Васильев');
    }
    public function testGenDetect129()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setSecondName('Васин');
        $this->assertEquals('1-Леонид Васин', $this->object->genderAutoDetect().'-Леонид Васин');
    }
    public function testGenDetect130()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Васнев');
        $this->assertEquals('1-Леон Васнев', $this->object->genderAutoDetect().'-Леон Васнев');
    }
    public function testGenDetect131()
    {
        $this->object->setFirstName('Леонтий');
        $this->object->setSecondName('Васнецов');
        $this->assertEquals('1-Леонтий Васнецов', $this->object->genderAutoDetect().'-Леонтий Васнецов');
    }
    public function testGenDetect132()
    {
        $this->object->setFirstName('Лука');
        $this->object->setSecondName('Вахров');
        $this->assertEquals('1-Лука Вахров', $this->object->genderAutoDetect().'-Лука Вахров');
    }
    public function testGenDetect133()
    {
        $this->object->setFirstName('Лукьян');
        $this->object->setSecondName('Вахрушев');
        $this->assertEquals('1-Лукьян Вахрушев', $this->object->genderAutoDetect().'-Лукьян Вахрушев');
    }
    public function testGenDetect134()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setSecondName('Венедиктов');
        $this->assertEquals('1-Людвиг Венедиктов', $this->object->genderAutoDetect().'-Людвиг Венедиктов');
    }
    public function testGenDetect135()
    {
        $this->object->setFirstName('Макар');
        $this->object->setSecondName('Веденеев');
        $this->assertEquals('1-Макар Веденеев', $this->object->genderAutoDetect().'-Макар Веденеев');
    }
    public function testGenDetect136()
    {
        $this->object->setFirstName('Максим');
        $this->object->setSecondName('Веденин');
        $this->assertEquals('1-Максим Веденин', $this->object->genderAutoDetect().'-Максим Веденин');
    }
    public function testGenDetect137()
    {
        $this->object->setFirstName('Марат');
        $this->object->setSecondName('Ведерников');
        $this->assertEquals('1-Марат Ведерников', $this->object->genderAutoDetect().'-Марат Ведерников');
    }
    public function testGenDetect138()
    {
        $this->object->setFirstName('Марк');
        $this->object->setSecondName('Вергунов');
        $this->assertEquals('1-Марк Вергунов', $this->object->genderAutoDetect().'-Марк Вергунов');
    }
    public function testGenDetect139()
    {
        $this->object->setFirstName('Маркел');
        $this->object->setSecondName('Верещагин');
        $this->assertEquals('1-Маркел Верещагин', $this->object->genderAutoDetect().'-Маркел Верещагин');
    }
    public function testGenDetect140()
    {
        $this->object->setFirstName('Мартин');
        $this->object->setSecondName('Вершинин');
        $this->assertEquals('1-Мартин Вершинин', $this->object->genderAutoDetect().'-Мартин Вершинин');
    }
    public function testGenDetect141()
    {
        $this->object->setFirstName('Мартын');
        $this->object->setSecondName('Веселов');
        $this->assertEquals('1-Мартын Веселов', $this->object->genderAutoDetect().'-Мартын Веселов');
    }
    public function testGenDetect142()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setSecondName('Викашев');
        $this->assertEquals('1-Мефодий Викашев', $this->object->genderAutoDetect().'-Мефодий Викашев');
    }
    public function testGenDetect143()
    {
        $this->object->setFirstName('Мина');
        $this->object->setSecondName('Виноградов');
        $this->assertEquals('1-Мина Виноградов', $this->object->genderAutoDetect().'-Мина Виноградов');
    }
    public function testGenDetect144()
    {
        $this->object->setFirstName('Минай');
        $this->object->setSecondName('Винокуров');
        $this->assertEquals('1-Минай Винокуров', $this->object->genderAutoDetect().'-Минай Винокуров');
    }
    public function testGenDetect145()
    {
        $this->object->setFirstName('Мирон');
        $this->object->setSecondName('Витаев');
        $this->assertEquals('1-Мирон Витаев', $this->object->genderAutoDetect().'-Мирон Витаев');
    }
    public function testGenDetect146()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setSecondName('Витвинин');
        $this->assertEquals('1-Митрофан Витвинин', $this->object->genderAutoDetect().'-Митрофан Витвинин');
    }
    public function testGenDetect147()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setSecondName('Вицин');
        $this->assertEquals('1-Михаил Вицин', $this->object->genderAutoDetect().'-Михаил Вицин');
    }
    public function testGenDetect148()
    {
        $this->object->setFirstName('Михей');
        $this->object->setSecondName('Водоватов');
        $this->assertEquals('1-Михей Водоватов', $this->object->genderAutoDetect().'-Михей Водоватов');
    }
    public function testGenDetect149()
    {
        $this->object->setFirstName('Модест');
        $this->object->setSecondName('Воликов');
        $this->assertEquals('1-Модест Воликов', $this->object->genderAutoDetect().'-Модест Воликов');
    }
    public function testGenDetect150()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setSecondName('Волков');
        $this->assertEquals('1-Моисей Волков', $this->object->genderAutoDetect().'-Моисей Волков');
    }
    public function testGenDetect151()
    {
        $this->object->setFirstName('Мокей');
        $this->object->setSecondName('Вольваков');
        $this->assertEquals('1-Мокей Вольваков', $this->object->genderAutoDetect().'-Мокей Вольваков');
    }
    public function testGenDetect152()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setSecondName('Воробьев');
        $this->assertEquals('1-Мстислав Воробьев', $this->object->genderAutoDetect().'-Мстислав Воробьев');
    }
    public function testGenDetect153()
    {
        $this->object->setFirstName('Назар');
        $this->object->setSecondName('Воронин');
        $this->assertEquals('1-Назар Воронин', $this->object->genderAutoDetect().'-Назар Воронин');
    }
    public function testGenDetect154()
    {
        $this->object->setFirstName('Наркис');
        $this->object->setSecondName('Воронов');
        $this->assertEquals('1-Наркис Воронов', $this->object->genderAutoDetect().'-Наркис Воронов');
    }
    public function testGenDetect155()
    {
        $this->object->setFirstName('Нарцис');
        $this->object->setSecondName('Воронков');
        $this->assertEquals('1-Нарцис Воронков', $this->object->genderAutoDetect().'-Нарцис Воронков');
    }
    public function testGenDetect156()
    {
        $this->object->setFirstName('Наум');
        $this->object->setSecondName('Воронцов');
        $this->assertEquals('1-Наум Воронцов', $this->object->genderAutoDetect().'-Наум Воронцов');
    }
    public function testGenDetect157()
    {
        $this->object->setFirstName('Нейл');
        $this->object->setSecondName('Воскобойников');
        $this->assertEquals('1-Нейл Воскобойников', $this->object->genderAutoDetect().'-Нейл Воскобойников');
    }
    public function testGenDetect158()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setSecondName('Вотяков');
        $this->assertEquals('1-Нестер Вотяков', $this->object->genderAutoDetect().'-Нестер Вотяков');
    }
    public function testGenDetect159()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setSecondName('Вырыпаев');
        $this->assertEquals('1-Нестор Вырыпаев', $this->object->genderAutoDetect().'-Нестор Вырыпаев');
    }
    public function testGenDetect160()
    {
        $this->object->setFirstName('Нефёд');
        $this->object->setSecondName('Гавриков');
        $this->assertEquals('1-Нефёд Гавриков', $this->object->genderAutoDetect().'-Нефёд Гавриков');
    }
    public function testGenDetect161()
    {
        $this->object->setFirstName('Никандр');
        $this->object->setSecondName('Гаврилов');
        $this->assertEquals('1-Никандр Гаврилов', $this->object->genderAutoDetect().'-Никандр Гаврилов');
    }
    public function testGenDetect162()
    {
        $this->object->setFirstName('Никанор');
        $this->object->setSecondName('Гагарин');
        $this->assertEquals('1-Никанор Гагарин', $this->object->genderAutoDetect().'-Никанор Гагарин');
    }
    public function testGenDetect163()
    {
        $this->object->setFirstName('Никита');
        $this->object->setSecondName('Гаголин');
        $this->assertEquals('1-Никита Гаголин', $this->object->genderAutoDetect().'-Никита Гаголин');
    }
    public function testGenDetect164()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setSecondName('Галдин');
        $this->assertEquals('1-Никифор Галдин', $this->object->genderAutoDetect().'-Никифор Галдин');
    }
    public function testGenDetect165()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setSecondName('Галкин');
        $this->assertEquals('1-Никодим Галкин', $this->object->genderAutoDetect().'-Никодим Галкин');
    }
    public function testGenDetect166()
    {
        $this->object->setFirstName('Николай');
        $this->object->setSecondName('Галыгин');
        $this->assertEquals('1-Николай Галыгин', $this->object->genderAutoDetect().'-Николай Галыгин');
    }
    public function testGenDetect167()
    {
        $this->object->setFirstName('Никон');
        $this->object->setSecondName('Гарин');
        $this->assertEquals('1-Никон Гарин', $this->object->genderAutoDetect().'-Никон Гарин');
    }
    public function testGenDetect168()
    {
        $this->object->setFirstName('Нил');
        $this->object->setSecondName('Гачев');
        $this->assertEquals('1-Нил Гачев', $this->object->genderAutoDetect().'-Нил Гачев');
    }
    public function testGenDetect169()
    {
        $this->object->setFirstName('Олег');
        $this->object->setSecondName('Генкин');
        $this->assertEquals('1-Олег Генкин', $this->object->genderAutoDetect().'-Олег Генкин');
    }
    public function testGenDetect170()
    {
        $this->object->setFirstName('Онисим');
        $this->object->setSecondName('Герасимов');
        $this->assertEquals('1-Онисим Герасимов', $this->object->genderAutoDetect().'-Онисим Герасимов');
    }
    public function testGenDetect171()
    {
        $this->object->setFirstName('Онуфрий');
        $this->object->setSecondName('Гибазов');
        $this->assertEquals('1-Онуфрий Гибазов', $this->object->genderAutoDetect().'-Онуфрий Гибазов');
    }
    public function testGenDetect172()
    {
        $this->object->setFirstName('Орест');
        $this->object->setSecondName('Гилёв');
        $this->assertEquals('1-Орест Гилёв', $this->object->genderAutoDetect().'-Орест Гилёв');
    }
    public function testGenDetect173()
    {
        $this->object->setFirstName('Осип');
        $this->object->setSecondName('Глазков');
        $this->assertEquals('1-Осип Глазков', $this->object->genderAutoDetect().'-Осип Глазков');
    }
    public function testGenDetect174()
    {
        $this->object->setFirstName('Остап');
        $this->object->setSecondName('Голованов');
        $this->assertEquals('1-Остап Голованов', $this->object->genderAutoDetect().'-Остап Голованов');
    }
    public function testGenDetect175()
    {
        $this->object->setFirstName('Отто');
        $this->object->setSecondName('Головин');
        $this->assertEquals('1-Отто Головин', $this->object->genderAutoDetect().'-Отто Головин');
    }
    public function testGenDetect176()
    {
        $this->object->setFirstName('Павел');
        $this->object->setSecondName('Голодяев');
        $this->assertEquals('1-Павел Голодяев', $this->object->genderAutoDetect().'-Павел Голодяев');
    }
    public function testGenDetect177()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setSecondName('Голубев');
        $this->assertEquals('1-Панкрат Голубев', $this->object->genderAutoDetect().'-Панкрат Голубев');
    }
    public function testGenDetect178()
    {
        $this->object->setFirstName('Панкратий');
        $this->object->setSecondName('Голубов');
        $this->assertEquals('1-Панкратий Голубов', $this->object->genderAutoDetect().'-Панкратий Голубов');
    }
    public function testGenDetect179()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Голубцов');
        $this->assertEquals('1-Пантелей Голубцов', $this->object->genderAutoDetect().'-Пантелей Голубцов');
    }
    public function testGenDetect180()
    {
        $this->object->setFirstName('Пантелеймон');
        $this->object->setSecondName('Гончаров');
        $this->assertEquals('1-Пантелеймон Гончаров', $this->object->genderAutoDetect().'-Пантелеймон Гончаров');
    }
    public function testGenDetect181()
    {
        $this->object->setFirstName('Парфён');
        $this->object->setSecondName('Горбачёв');
        $this->assertEquals('1-Парфён Горбачёв', $this->object->genderAutoDetect().'-Парфён Горбачёв');
    }
    public function testGenDetect182()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setSecondName('Горбунов');
        $this->assertEquals('1-Парфений Горбунов', $this->object->genderAutoDetect().'-Парфений Горбунов');
    }
    public function testGenDetect183()
    {
        $this->object->setFirstName('Пётр');
        $this->object->setSecondName('Горбунков');
        $this->assertEquals('1-Пётр Горбунков', $this->object->genderAutoDetect().'-Пётр Горбунков');
    }
    public function testGenDetect184()
    {
        $this->object->setFirstName('Пимен');
        $this->object->setSecondName('Горев');
        $this->assertEquals('1-Пимен Горев', $this->object->genderAutoDetect().'-Пимен Горев');
    }
    public function testGenDetect185()
    {
        $this->object->setFirstName('Платон');
        $this->object->setSecondName('Горелов');
        $this->assertEquals('1-Платон Горелов', $this->object->genderAutoDetect().'-Платон Горелов');
    }
    public function testGenDetect186()
    {
        $this->object->setFirstName('Полиграф');
        $this->object->setSecondName('Горемыкин');
        $this->assertEquals('1-Полиграф Горемыкин', $this->object->genderAutoDetect().'-Полиграф Горемыкин');
    }
    public function testGenDetect187()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setSecondName('Горюнов');
        $this->assertEquals('1-Поликарп Горюнов', $this->object->genderAutoDetect().'-Поликарп Горюнов');
    }
    public function testGenDetect188()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setSecondName('Грачёв');
        $this->assertEquals('1-Порфир Грачёв', $this->object->genderAutoDetect().'-Порфир Грачёв');
    }
    public function testGenDetect189()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setSecondName('Графов');
        $this->assertEquals('1-Порфирий Графов', $this->object->genderAutoDetect().'-Порфирий Графов');
    }
    public function testGenDetect190()
    {
        $this->object->setFirstName('Потап');
        $this->object->setSecondName('Гретченко');
        $this->assertEquals('1-Потап Гретченко', $this->object->genderAutoDetect().'-Потап Гретченко');
    }
    public function testGenDetect191()
    {
        $this->object->setFirstName('Прокоп');
        $this->object->setSecondName('Гречко');
        $this->assertEquals('1-Прокоп Гречко', $this->object->genderAutoDetect().'-Прокоп Гречко');
    }
    public function testGenDetect192()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setSecondName('Грешнев');
        $this->assertEquals('1-Прокопий Грешнев', $this->object->genderAutoDetect().'-Прокопий Грешнев');
    }
    public function testGenDetect193()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setSecondName('Грибов');
        $this->assertEquals('1-Прокофий Грибов', $this->object->genderAutoDetect().'-Прокофий Грибов');
    }
    public function testGenDetect194()
    {
        $this->object->setFirstName('Прохор');
        $this->object->setSecondName('Грибоедов');
        $this->assertEquals('1-Прохор Грибоедов', $this->object->genderAutoDetect().'-Прохор Грибоедов');
    }
    public function testGenDetect195()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setSecondName('Григорьев');
        $this->assertEquals('1-Роберт Григорьев', $this->object->genderAutoDetect().'-Роберт Григорьев');
    }
    public function testGenDetect196()
    {
        $this->object->setFirstName('Родион');
        $this->object->setSecondName('Гринин');
        $this->assertEquals('1-Родион Гринин', $this->object->genderAutoDetect().'-Родион Гринин');
    }
    public function testGenDetect197()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Гришин');
        $this->assertEquals('1-Роман Гришин', $this->object->genderAutoDetect().'-Роман Гришин');
    }
    public function testGenDetect198()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setSecondName('Громов');
        $this->assertEquals('1-Ростислав Громов', $this->object->genderAutoDetect().'-Ростислав Громов');
    }
    public function testGenDetect199()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setSecondName('Громыко');
        $this->assertEquals('1-Руслан Громыко', $this->object->genderAutoDetect().'-Руслан Громыко');
    }
    public function testGenDetect200()
    {
        $this->object->setFirstName('Савастей');
        $this->object->setSecondName('Гулин');
        $this->assertEquals('1-Савастей Гулин', $this->object->genderAutoDetect().'-Савастей Гулин');
    }
    public function testGenDetect201()
    {
        $this->object->setFirstName('Савва');
        $this->object->setSecondName('Гурьянов');
        $this->assertEquals('1-Савва Гурьянов', $this->object->genderAutoDetect().'-Савва Гурьянов');
    }
    public function testGenDetect202()
    {
        $this->object->setFirstName('Савватий');
        $this->object->setSecondName('Гусаров');
        $this->assertEquals('1-Савватий Гусаров', $this->object->genderAutoDetect().'-Савватий Гусаров');
    }
    public function testGenDetect203()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setSecondName('Гусев');
        $this->assertEquals('1-Савелий Гусев', $this->object->genderAutoDetect().'-Савелий Гусев');
    }
    public function testGenDetect204()
    {
        $this->object->setFirstName('Самсон');
        $this->object->setSecondName('Гунин');
        $this->assertEquals('1-Самсон Гунин', $this->object->genderAutoDetect().'-Самсон Гунин');
    }
    public function testGenDetect205()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setSecondName('Гущин');
        $this->assertEquals('1-Святослав Гущин', $this->object->genderAutoDetect().'-Святослав Гущин');
    }
    public function testGenDetect206()
    {
        $this->object->setFirstName('Семён');
        $this->object->setSecondName('Головаха');
        $this->assertEquals('1-Семён Головаха', $this->object->genderAutoDetect().'-Семён Головаха');
    }
    public function testGenDetect207()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setSecondName('Дорофеев');
        $this->assertEquals('1-Серафим Дорофеев', $this->object->genderAutoDetect().'-Серафим Дорофеев');
    }
    public function testGenDetect208()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setSecondName('Давыдкин');
        $this->assertEquals('1-Сергей Давыдкин', $this->object->genderAutoDetect().'-Сергей Давыдкин');
    }
    public function testGenDetect209()
    {
        $this->object->setFirstName('Сергий');
        $this->object->setSecondName('Данильцин');
        $this->assertEquals('1-Сергий Данильцин', $this->object->genderAutoDetect().'-Сергий Данильцин');
    }
    public function testGenDetect210()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setSecondName('Дворников');
        $this->assertEquals('1-Сидор Дворников', $this->object->genderAutoDetect().'-Сидор Дворников');
    }
    public function testGenDetect211()
    {
        $this->object->setFirstName('Созон');
        $this->object->setSecondName('Деменок');
        $this->assertEquals('1-Созон Деменок', $this->object->genderAutoDetect().'-Созон Деменок');
    }
    public function testGenDetect212()
    {
        $this->object->setFirstName('Созонт');
        $this->object->setSecondName('Дементьев');
        $this->assertEquals('1-Созонт Дементьев', $this->object->genderAutoDetect().'-Созонт Дементьев');
    }
    public function testGenDetect213()
    {
        $this->object->setFirstName('Спиридон');
        $this->object->setSecondName('Демидов');
        $this->assertEquals('1-Спиридон Демидов', $this->object->genderAutoDetect().'-Спиридон Демидов');
    }
    public function testGenDetect214()
    {
        $this->object->setFirstName('Станислав');
        $this->object->setSecondName('Деникин');
        $this->assertEquals('1-Станислав Деникин', $this->object->genderAutoDetect().'-Станислав Деникин');
    }
    public function testGenDetect215()
    {
        $this->object->setFirstName('Степан');
        $this->object->setSecondName('Дёгтин');
        $this->assertEquals('1-Степан Дёгтин', $this->object->genderAutoDetect().'-Степан Дёгтин');
    }
    public function testGenDetect216()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setSecondName('Дегтярев');
        $this->assertEquals('1-Тарас Дегтярев', $this->object->genderAutoDetect().'-Тарас Дегтярев');
    }
    public function testGenDetect217()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setSecondName('Дежнёв');
        $this->assertEquals('1-Теймураз Дежнёв', $this->object->genderAutoDetect().'-Теймураз Дежнёв');
    }
    public function testGenDetect218()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setSecondName('Делов');
        $this->assertEquals('1-Терентий Делов', $this->object->genderAutoDetect().'-Терентий Делов');
    }
    public function testGenDetect219()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setSecondName('Дементьев');
        $this->assertEquals('1-Тимофей Дементьев', $this->object->genderAutoDetect().'-Тимофей Дементьев');
    }
    public function testGenDetect220()
    {
        $this->object->setFirstName('Тимур');
        $this->object->setSecondName('Дёмин');
        $this->assertEquals('1-Тимур Дёмин', $this->object->genderAutoDetect().'-Тимур Дёмин');
    }
    public function testGenDetect221()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setSecondName('Державин');
        $this->assertEquals('1-Тихон Державин', $this->object->genderAutoDetect().'-Тихон Державин');
    }
    public function testGenDetect222()
    {
        $this->object->setFirstName('Трифон');
        $this->object->setSecondName('Дернов');
        $this->assertEquals('1-Трифон Дернов', $this->object->genderAutoDetect().'-Трифон Дернов');
    }
    public function testGenDetect223()
    {
        $this->object->setFirstName('Трофим');
        $this->object->setSecondName('Десятков');
        $this->assertEquals('1-Трофим Десятков', $this->object->genderAutoDetect().'-Трофим Десятков');
    }
    public function testGenDetect224()
    {
        $this->object->setFirstName('Устин');
        $this->object->setSecondName('Дмитриев');
        $this->assertEquals('1-Устин Дмитриев', $this->object->genderAutoDetect().'-Устин Дмитриев');
    }
    public function testGenDetect225()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setSecondName('Добронравов');
        $this->assertEquals('1-Фадей Добронравов', $this->object->genderAutoDetect().'-Фадей Добронравов');
    }
    public function testGenDetect226()
    {
        $this->object->setFirstName('Федот');
        $this->object->setSecondName('Добрынин');
        $this->assertEquals('1-Федот Добрынин', $this->object->genderAutoDetect().'-Федот Добрынин');
    }
    public function testGenDetect227()
    {
        $this->object->setFirstName('Феликс');
        $this->object->setSecondName('Долгоруков');
        $this->assertEquals('1-Феликс Долгоруков', $this->object->genderAutoDetect().'-Феликс Долгоруков');
    }
    public function testGenDetect228()
    {
        $this->object->setFirstName('Фёдор');
        $this->object->setSecondName('Должиков');
        $this->assertEquals('1-Фёдор Должиков', $this->object->genderAutoDetect().'-Фёдор Должиков');
    }
    public function testGenDetect229()
    {
        $this->object->setFirstName('Федосий');
        $this->object->setSecondName('Домашев');
        $this->assertEquals('1-Федосий Домашев', $this->object->genderAutoDetect().'-Федосий Домашев');
    }
    public function testGenDetect230()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setSecondName('Достовалов');
        $this->assertEquals('1-Феодосий Достовалов', $this->object->genderAutoDetect().'-Феодосий Достовалов');
    }
    public function testGenDetect231()
    {
        $this->object->setFirstName('Феоктист');
        $this->object->setSecondName('Драгомиров');
        $this->assertEquals('1-Феоктист Драгомиров', $this->object->genderAutoDetect().'-Феоктист Драгомиров');
    }
    public function testGenDetect232()
    {
        $this->object->setFirstName('Феофан');
        $this->object->setSecondName('Дресвянин');
        $this->assertEquals('1-Феофан Дресвянин', $this->object->genderAutoDetect().'-Феофан Дресвянин');
    }
    public function testGenDetect233()
    {
        $this->object->setFirstName('Филат');
        $this->object->setSecondName('Дрёмов');
        $this->assertEquals('1-Филат Дрёмов', $this->object->genderAutoDetect().'-Филат Дрёмов');
    }
    public function testGenDetect234()
    {
        $this->object->setFirstName('Филимон');
        $this->object->setSecondName('Друганин');
        $this->assertEquals('1-Филимон Друганин', $this->object->genderAutoDetect().'-Филимон Друганин');
    }
    public function testGenDetect235()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setSecondName('Другов');
        $this->assertEquals('1-Филипп Другов', $this->object->genderAutoDetect().'-Филипп Другов');
    }
    public function testGenDetect236()
    {
        $this->object->setFirstName('Фока');
        $this->object->setSecondName('Дубинин');
        $this->assertEquals('1-Фока Дубинин', $this->object->genderAutoDetect().'-Фока Дубинин');
    }
    public function testGenDetect237()
    {
        $this->object->setFirstName('Фома');
        $this->object->setSecondName('Дубов');
        $this->assertEquals('1-Фома Дубов', $this->object->genderAutoDetect().'-Фома Дубов');
    }
    public function testGenDetect238()
    {
        $this->object->setFirstName('Фрол');
        $this->object->setSecondName('Дубровский');
        $this->assertEquals('1-Фрол Дубровский', $this->object->genderAutoDetect().'-Фрол Дубровский');
    }
    public function testGenDetect239()
    {
        $this->object->setFirstName('Харитон');
        $this->object->setSecondName('Дульцев');
        $this->assertEquals('1-Харитон Дульцев', $this->object->genderAutoDetect().'-Харитон Дульцев');
    }
    public function testGenDetect240()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setSecondName('Думановский');
        $this->assertEquals('1-Харлам Думановский', $this->object->genderAutoDetect().'-Харлам Думановский');
    }
    public function testGenDetect241()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Дуров');
        $this->assertEquals('1-Харламп Дуров', $this->object->genderAutoDetect().'-Харламп Дуров');
    }
    public function testGenDetect242()
    {
        $this->object->setFirstName('Харлампий');
        $this->object->setSecondName('Дятлов');
        $this->assertEquals('1-Харлампий Дятлов', $this->object->genderAutoDetect().'-Харлампий Дятлов');
    }
    public function testGenDetect243()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setSecondName('Евдокимов');
        $this->assertEquals('1-Чеслав Евдокимов', $this->object->genderAutoDetect().'-Чеслав Евдокимов');
    }
    public function testGenDetect244()
    {
        $this->object->setFirstName('Эдгар');
        $this->object->setSecondName('Евстигнеев');
        $this->assertEquals('1-Эдгар Евстигнеев', $this->object->genderAutoDetect().'-Эдгар Евстигнеев');
    }
    public function testGenDetect245()
    {
        $this->object->setFirstName('Эдгард');
        $this->object->setSecondName('Егоров');
        $this->assertEquals('1-Эдгард Егоров', $this->object->genderAutoDetect().'-Эдгард Егоров');
    }
    public function testGenDetect246()
    {
        $this->object->setFirstName('Эдуард');
        $this->object->setSecondName('Едемский');
        $this->assertEquals('1-Эдуард Едемский', $this->object->genderAutoDetect().'-Эдуард Едемский');
    }
    public function testGenDetect247()
    {
        $this->object->setFirstName('Юлиан');
        $this->object->setSecondName('Ежов');
        $this->assertEquals('1-Юлиан Ежов', $this->object->genderAutoDetect().'-Юлиан Ежов');
    }
    public function testGenDetect248()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setSecondName('Елагин');
        $this->assertEquals('1-Юлий Елагин', $this->object->genderAutoDetect().'-Юлий Елагин');
    }
    public function testGenDetect249()
    {
        $this->object->setFirstName('Юрий');
        $this->object->setSecondName('Елизаров');
        $this->assertEquals('1-Юрий Елизаров', $this->object->genderAutoDetect().'-Юрий Елизаров');
    }
    public function testGenDetect250()
    {
        $this->object->setFirstName('Яков');
        $this->object->setSecondName('Елисеев');
        $this->assertEquals('1-Яков Елисеев', $this->object->genderAutoDetect().'-Яков Елисеев');
    }
    public function testGenDetect251()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setSecondName('Ельцин');
        $this->assertEquals('1-Ярослав Ельцин', $this->object->genderAutoDetect().'-Ярослав Ельцин');
    }
    public function testGenDetect252()
    {
        $this->object->setFirstName('Ян');
        $this->object->setSecondName('Ельцов');
        $this->assertEquals('1-Ян Ельцов', $this->object->genderAutoDetect().'-Ян Ельцов');
    }
    public function testGenDetect253()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setSecondName('Емельяненко');
        $this->assertEquals('1-Тихон Емельяненко', $this->object->genderAutoDetect().'-Тихон Емельяненко');
    }
    public function testGenDetect254()
    {
        $this->object->setFirstName('Савватий');
        $this->object->setSecondName('Емельянов');
        $this->assertEquals('1-Савватий Емельянов', $this->object->genderAutoDetect().'-Савватий Емельянов');
    }
    public function testGenDetect255()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setSecondName('Енин');
        $this->assertEquals('1-Захарий Енин', $this->object->genderAutoDetect().'-Захарий Енин');
    }
    public function testGenDetect256()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setSecondName('Ерзов');
        $this->assertEquals('1-Порфирий Ерзов', $this->object->genderAutoDetect().'-Порфирий Ерзов');
    }
    public function testGenDetect257()
    {
        $this->object->setFirstName('Адриан');
        $this->object->setSecondName('Ермаков');
        $this->assertEquals('1-Адриан Ермаков', $this->object->genderAutoDetect().'-Адриан Ермаков');
    }
    public function testGenDetect258()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setSecondName('Ермилов');
        $this->assertEquals('1-Ксенофонт Ермилов', $this->object->genderAutoDetect().'-Ксенофонт Ермилов');
    }
    public function testGenDetect259()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setSecondName('Еромеев');
        $this->assertEquals('1-Людвиг Еромеев', $this->object->genderAutoDetect().'-Людвиг Еромеев');
    }
    public function testGenDetect260()
    {
        $this->object->setFirstName('Кондратий');
        $this->object->setSecondName('Ерофеев');
        $this->assertEquals('1-Кондратий Ерофеев', $this->object->genderAutoDetect().'-Кондратий Ерофеев');
    }
    public function testGenDetect261()
    {
        $this->object->setFirstName('Полиграф');
        $this->object->setSecondName('Ершов');
        $this->assertEquals('1-Полиграф Ершов', $this->object->genderAutoDetect().'-Полиграф Ершов');
    }
    public function testGenDetect262()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setSecondName('Есипов');
        $this->assertEquals('1-Ростислав Есипов', $this->object->genderAutoDetect().'-Ростислав Есипов');
    }
    public function testGenDetect263()
    {
        $this->object->setFirstName('Николай');
        $this->object->setSecondName('Ефимов');
        $this->assertEquals('1-Николай Ефимов', $this->object->genderAutoDetect().'-Николай Ефимов');
    }
    public function testGenDetect264()
    {
        $this->object->setFirstName('Евсей');
        $this->object->setSecondName('Ефремов');
        $this->assertEquals('1-Евсей Ефремов', $this->object->genderAutoDetect().'-Евсей Ефремов');
    }
    public function testGenDetect265()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Емелин');
        $this->assertEquals('1-Архип Емелин', $this->object->genderAutoDetect().'-Архип Емелин');
    }
    public function testGenDetect266()
    {
        $this->object->setFirstName('Конон');
        $this->object->setSecondName('Ерохин');
        $this->assertEquals('1-Конон Ерохин', $this->object->genderAutoDetect().'-Конон Ерохин');
    }
    public function testGenDetect267()
    {
        $this->object->setFirstName('Харитон');
        $this->object->setSecondName('Ерёмин');
        $this->assertEquals('1-Харитон Ерёмин', $this->object->genderAutoDetect().'-Харитон Ерёмин');
    }
    public function testGenDetect268()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setSecondName('Ешевский');
        $this->assertEquals('1-Юлий Ешевский', $this->object->genderAutoDetect().'-Юлий Ешевский');
    }
    public function testGenDetect269()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setSecondName('Жабин');
        $this->assertEquals('1-Евстафий Жабин', $this->object->genderAutoDetect().'-Евстафий Жабин');
    }
    public function testGenDetect270()
    {
        $this->object->setFirstName('Кирила');
        $this->object->setSecondName('Жарков');
        $this->assertEquals('1-Кирила Жарков', $this->object->genderAutoDetect().'-Кирила Жарков');
    }
    public function testGenDetect271()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setSecondName('Жарыхин');
        $this->assertEquals('1-Ярослав Жарыхин', $this->object->genderAutoDetect().'-Ярослав Жарыхин');
    }
    public function testGenDetect272()
    {
        $this->object->setFirstName('Захар');
        $this->object->setSecondName('Жвиков');
        $this->assertEquals('1-Захар Жвиков', $this->object->genderAutoDetect().'-Захар Жвиков');
    }
    public function testGenDetect273()
    {
        $this->object->setFirstName('Аркадий');
        $this->object->setSecondName('Жданов');
        $this->assertEquals('1-Аркадий Жданов', $this->object->genderAutoDetect().'-Аркадий Жданов');
    }
    public function testGenDetect274()
    {
        $this->object->setFirstName('Трифон');
        $this->object->setSecondName('Жеглов');
        $this->assertEquals('1-Трифон Жеглов', $this->object->genderAutoDetect().'-Трифон Жеглов');
    }
    public function testGenDetect275()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setSecondName('Железкин');
        $this->assertEquals('1-Савелий Железкин', $this->object->genderAutoDetect().'-Савелий Железкин');
    }
    public function testGenDetect276()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setSecondName('Жестакова');
        $this->assertEquals('1-Евстафий Жестакова', $this->object->genderAutoDetect().'-Евстафий Жестакова');
    }
    public function testGenDetect277()
    {
        $this->object->setFirstName('Прохор');
        $this->object->setSecondName('Живенков');
        $this->assertEquals('1-Прохор Живенков', $this->object->genderAutoDetect().'-Прохор Живенков');
    }
    public function testGenDetect278()
    {
        $this->object->setFirstName('Орест');
        $this->object->setSecondName('Жиглов');
        $this->assertEquals('1-Орест Жиглов', $this->object->genderAutoDetect().'-Орест Жиглов');
    }
    public function testGenDetect279()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setSecondName('Жигунов');
        $this->assertEquals('1-Ефимий Жигунов', $this->object->genderAutoDetect().'-Ефимий Жигунов');
    }
    public function testGenDetect280()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Жидков');
        $this->assertEquals('1-Роман Жидков', $this->object->genderAutoDetect().'-Роман Жидков');
    }
    public function testGenDetect281()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setSecondName('Жикин');
        $this->assertEquals('1-Леонид Жикин', $this->object->genderAutoDetect().'-Леонид Жикин');
    }
    public function testGenDetect282()
    {
        $this->object->setFirstName('Данила');
        $this->object->setSecondName('Жилин');
        $this->assertEquals('1-Данила Жилин', $this->object->genderAutoDetect().'-Данила Жилин');
    }
    public function testGenDetect283()
    {
        $this->object->setFirstName('Ян');
        $this->object->setSecondName('Жилов');
        $this->assertEquals('1-Ян Жилов', $this->object->genderAutoDetect().'-Ян Жилов');
    }
    public function testGenDetect284()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setSecondName('Жолдин');
        $this->assertEquals('1-Иосиф Жолдин', $this->object->genderAutoDetect().'-Иосиф Жолдин');
    }
    public function testGenDetect285()
    {
        $this->object->setFirstName('Арсений');
        $this->object->setSecondName('Жуков');
        $this->assertEquals('1-Арсений Жуков', $this->object->genderAutoDetect().'-Арсений Жуков');
    }
    public function testGenDetect286()
    {
        $this->object->setFirstName('Захар');
        $this->object->setSecondName('Жутов');
        $this->assertEquals('1-Захар Жутов', $this->object->genderAutoDetect().'-Захар Жутов');
    }
    public function testGenDetect287()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setSecondName('Журавлёв');
        $this->assertEquals('1-Виктор Журавлёв', $this->object->genderAutoDetect().'-Виктор Журавлёв');
    }
    public function testGenDetect288()
    {
        $this->object->setFirstName('Артур');
        $this->object->setSecondName('Журов');
        $this->assertEquals('1-Артур Журов', $this->object->genderAutoDetect().'-Артур Журов');
    }
    public function testGenDetect289()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setSecondName('Заврагин');
        $this->assertEquals('1-Сергей Заврагин', $this->object->genderAutoDetect().'-Сергей Заврагин');
    }
    public function testGenDetect290()
    {
        $this->object->setFirstName('Олег');
        $this->object->setSecondName('Завражин');
        $this->assertEquals('1-Олег Завражин', $this->object->genderAutoDetect().'-Олег Завражин');
    }
    public function testGenDetect291()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Завражнов');
        $this->assertEquals('1-Леон Завражнов', $this->object->genderAutoDetect().'-Леон Завражнов');
    }
    public function testGenDetect292()
    {
        $this->object->setFirstName('Мартын');
        $this->object->setSecondName('Завражный');
        $this->assertEquals('1-Мартын Завражный', $this->object->genderAutoDetect().'-Мартын Завражный');
    }
    public function testGenDetect293()
    {
        $this->object->setFirstName('Климентий');
        $this->object->setSecondName('Завразин');
        $this->assertEquals('1-Климентий Завразин', $this->object->genderAutoDetect().'-Климентий Завразин');
    }
    public function testGenDetect294()
    {
        $this->object->setFirstName('Влас');
        $this->object->setSecondName('Завьялов');
        $this->assertEquals('1-Влас Завьялов', $this->object->genderAutoDetect().'-Влас Завьялов');
    }
    public function testGenDetect295()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setSecondName('Задорнов');
        $this->assertEquals('1-Сидор Задорнов', $this->object->genderAutoDetect().'-Сидор Задорнов');
    }
    public function testGenDetect296()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Задорожный');
        $this->assertEquals('1-Леон Задорожный', $this->object->genderAutoDetect().'-Леон Задорожный');
    }
    public function testGenDetect297()
    {
        $this->object->setFirstName('Никандр');
        $this->object->setSecondName('Зайцев');
        $this->assertEquals('1-Никандр Зайцев', $this->object->genderAutoDetect().'-Никандр Зайцев');
    }
    public function testGenDetect298()
    {
        $this->object->setFirstName('Родион');
        $this->object->setSecondName('Закревский');
        $this->assertEquals('1-Родион Закревский', $this->object->genderAutoDetect().'-Родион Закревский');
    }
    public function testGenDetect299()
    {
        $this->object->setFirstName('Лаврентий');
        $this->object->setSecondName('Закрятин');
        $this->assertEquals('1-Лаврентий Закрятин', $this->object->genderAutoDetect().'-Лаврентий Закрятин');
    }
    public function testGenDetect300()
    {
        $this->object->setFirstName('Филат');
        $this->object->setSecondName('Захаров');
        $this->assertEquals('1-Филат Захаров', $this->object->genderAutoDetect().'-Филат Захаров');
    }
    public function testGenDetect301()
    {
        $this->object->setFirstName('Гордей');
        $this->object->setSecondName('Захарьин');
        $this->assertEquals('1-Гордей Захарьин', $this->object->genderAutoDetect().'-Гордей Захарьин');
    }
    public function testGenDetect302()
    {
        $this->object->setFirstName('Куприян');
        $this->object->setSecondName('Звягин');
        $this->assertEquals('1-Куприян Звягин', $this->object->genderAutoDetect().'-Куприян Звягин');
    }
    public function testGenDetect303()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setSecondName('Зёмин');
        $this->assertEquals('1-Дорофей Зёмин', $this->object->genderAutoDetect().'-Дорофей Зёмин');
    }
    public function testGenDetect304()
    {
        $this->object->setFirstName('Денис');
        $this->object->setSecondName('Зимин');
        $this->assertEquals('1-Денис Зимин', $this->object->genderAutoDetect().'-Денис Зимин');
    }
    public function testGenDetect305()
    {
        $this->object->setFirstName('Иларион');
        $this->object->setSecondName('Золин');
        $this->assertEquals('1-Иларион Золин', $this->object->genderAutoDetect().'-Иларион Золин');
    }
    public function testGenDetect306()
    {
        $this->object->setFirstName('Афанасий');
        $this->object->setSecondName('Зонов');
        $this->assertEquals('1-Афанасий Зонов', $this->object->genderAutoDetect().'-Афанасий Зонов');
    }
    public function testGenDetect307()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setSecondName('Зубков');
        $this->assertEquals('1-Людвиг Зубков', $this->object->genderAutoDetect().'-Людвиг Зубков');
    }
    public function testGenDetect308()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setSecondName('Зубов');
        $this->assertEquals('1-Виктор Зубов', $this->object->genderAutoDetect().'-Виктор Зубов');
    }
    public function testGenDetect309()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setSecondName('Зуев');
        $this->assertEquals('1-Порфир Зуев', $this->object->genderAutoDetect().'-Порфир Зуев');
    }
    public function testGenDetect310()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setSecondName('Зуйков');
        $this->assertEquals('1-Теймураз Зуйков', $this->object->genderAutoDetect().'-Теймураз Зуйков');
    }
    public function testGenDetect311()
    {
        $this->object->setFirstName('Феофан');
        $this->object->setSecondName('Зимняков');
        $this->assertEquals('1-Феофан Зимняков', $this->object->genderAutoDetect().'-Феофан Зимняков');
    }
    public function testGenDetect312()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setSecondName('Зинченко');
        $this->assertEquals('1-Дмитрий Зинченко', $this->object->genderAutoDetect().'-Дмитрий Зинченко');
    }
    public function testGenDetect313()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setSecondName('Зыкин');
        $this->assertEquals('1-Борислав Зыкин', $this->object->genderAutoDetect().'-Борислав Зыкин');
    }
    public function testGenDetect314()
    {
        $this->object->setFirstName('Феофан');
        $this->object->setSecondName('Зырянов');
        $this->assertEquals('1-Феофан Зырянов', $this->object->genderAutoDetect().'-Феофан Зырянов');
    }
    public function testGenDetect315()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setSecondName('Зюганов');
        $this->assertEquals('1-Никифор Зюганов', $this->object->genderAutoDetect().'-Никифор Зюганов');
    }
    public function testGenDetect316()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setSecondName('Зверев');
        $this->assertEquals('1-Виктор Зверев', $this->object->genderAutoDetect().'-Виктор Зверев');
    }
    public function testGenDetect317()
    {
        $this->object->setFirstName('Димитрий');
        $this->object->setSecondName('Игнаткович');
        $this->assertEquals('1-Димитрий Игнаткович', $this->object->genderAutoDetect().'-Димитрий Игнаткович');
    }
    public function testGenDetect318()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setSecondName('Ивазов');
        $this->assertEquals('1-Руслан Ивазов', $this->object->genderAutoDetect().'-Руслан Ивазов');
    }
    public function testGenDetect319()
    {
        $this->object->setFirstName('Геннадий');
        $this->object->setSecondName('Ивакин');
        $this->assertEquals('1-Геннадий Ивакин', $this->object->genderAutoDetect().'-Геннадий Ивакин');
    }
    public function testGenDetect320()
    {
        $this->object->setFirstName('Антип');
        $this->object->setSecondName('Ибрагимов');
        $this->assertEquals('1-Антип Ибрагимов', $this->object->genderAutoDetect().'-Антип Ибрагимов');
    }
    public function testGenDetect321()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setSecondName('Иванов');
        $this->assertEquals('1-Кондрат Иванов', $this->object->genderAutoDetect().'-Кондрат Иванов');
    }
    public function testGenDetect322()
    {
        $this->object->setFirstName('Панкратий');
        $this->object->setSecondName('Иванков');
        $this->assertEquals('1-Панкратий Иванков', $this->object->genderAutoDetect().'-Панкратий Иванков');
    }
    public function testGenDetect323()
    {
        $this->object->setFirstName('Нефёд');
        $this->object->setSecondName('Ивашин');
        $this->assertEquals('1-Нефёд Ивашин', $this->object->genderAutoDetect().'-Нефёд Ивашин');
    }
    public function testGenDetect324()
    {
        $this->object->setFirstName('Феофан');
        $this->object->setSecondName('Ивашов');
        $this->assertEquals('1-Феофан Ивашов', $this->object->genderAutoDetect().'-Феофан Ивашов');
    }
    public function testGenDetect325()
    {
        $this->object->setFirstName('Трифон');
        $this->object->setSecondName('Ивкин');
        $this->assertEquals('1-Трифон Ивкин', $this->object->genderAutoDetect().'-Трифон Ивкин');
    }
    public function testGenDetect326()
    {
        $this->object->setFirstName('Конон');
        $this->object->setSecondName('Иволгин');
        $this->assertEquals('1-Конон Иволгин', $this->object->genderAutoDetect().'-Конон Иволгин');
    }
    public function testGenDetect327()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setSecondName('Игнатьев');
        $this->assertEquals('1-Касьян Игнатьев', $this->object->genderAutoDetect().'-Касьян Игнатьев');
    }
    public function testGenDetect328()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Игошин');
        $this->assertEquals('1-Леон Игошин', $this->object->genderAutoDetect().'-Леон Игошин');
    }
    public function testGenDetect329()
    {
        $this->object->setFirstName('Демид');
        $this->object->setSecondName('Исмайлов');
        $this->assertEquals('1-Демид Исмайлов', $this->object->genderAutoDetect().'-Демид Исмайлов');
    }
    public function testGenDetect330()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setSecondName('Измайлов');
        $this->assertEquals('1-Филипп Измайлов', $this->object->genderAutoDetect().'-Филипп Измайлов');
    }
    public function testGenDetect331()
    {
        $this->object->setFirstName('Кирила');
        $this->object->setSecondName('Иканов');
        $this->assertEquals('1-Кирила Иканов', $this->object->genderAutoDetect().'-Кирила Иканов');
    }
    public function testGenDetect332()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setSecondName('Икашев');
        $this->assertEquals('1-Кондрат Икашев', $this->object->genderAutoDetect().'-Кондрат Икашев');
    }
    public function testGenDetect333()
    {
        $this->object->setFirstName('Капитон');
        $this->object->setSecondName('Ильин');
        $this->assertEquals('1-Капитон Ильин', $this->object->genderAutoDetect().'-Капитон Ильин');
    }
    public function testGenDetect334()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setSecondName('Илькун');
        $this->assertEquals('1-Панкрат Илькун', $this->object->genderAutoDetect().'-Панкрат Илькун');
    }
    public function testGenDetect335()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Илюшин');
        $this->assertEquals('1-Пантелей Илюшин', $this->object->genderAutoDetect().'-Пантелей Илюшин');
    }
    public function testGenDetect336()
    {
        $this->object->setFirstName('Савва');
        $this->object->setSecondName('Ильюшин');
        $this->assertEquals('1-Савва Ильюшин', $this->object->genderAutoDetect().'-Савва Ильюшин');
    }
    public function testGenDetect337()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setSecondName('Иноземцев');
        $this->assertEquals('1-Прокофий Иноземцев', $this->object->genderAutoDetect().'-Прокофий Иноземцев');
    }
    public function testGenDetect338()
    {
        $this->object->setFirstName('Демид');
        $this->object->setSecondName('Ипатьев');
        $this->assertEquals('1-Демид Ипатьев', $this->object->genderAutoDetect().'-Демид Ипатьев');
    }
    public function testGenDetect339()
    {
        $this->object->setFirstName('Фока');
        $this->object->setSecondName('Исаев');
        $this->assertEquals('1-Фока Исаев', $this->object->genderAutoDetect().'-Фока Исаев');
    }
    public function testGenDetect340()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setSecondName('Истомин');
        $this->assertEquals('1-Леонид Истомин', $this->object->genderAutoDetect().'-Леонид Истомин');
    }
    public function testGenDetect341()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setSecondName('Кабинов');
        $this->assertEquals('1-Борислав Кабинов', $this->object->genderAutoDetect().'-Борислав Кабинов');
    }
    public function testGenDetect342()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setSecondName('Каблуков');
        $this->assertEquals('1-Тарас Каблуков', $this->object->genderAutoDetect().'-Тарас Каблуков');
    }
    public function testGenDetect343()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setSecondName('Каверин');
        $this->assertEquals('1-Роберт Каверин', $this->object->genderAutoDetect().'-Роберт Каверин');
    }
    public function testGenDetect344()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setSecondName('Кадников');
        $this->assertEquals('1-Герасим Кадников', $this->object->genderAutoDetect().'-Герасим Кадников');
    }
    public function testGenDetect345()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setSecondName('Кадцын');
        $this->assertEquals('1-Роберт Кадцын', $this->object->genderAutoDetect().'-Роберт Кадцын');
    }
    public function testGenDetect346()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setSecondName('Казаков');
        $this->assertEquals('1-Каллистрат Казаков', $this->object->genderAutoDetect().'-Каллистрат Казаков');
    }
    public function testGenDetect347()
    {
        $this->object->setFirstName('Захар');
        $this->object->setSecondName('Казанцев');
        $this->assertEquals('1-Захар Казанцев', $this->object->genderAutoDetect().'-Захар Казанцев');
    }
    public function testGenDetect348()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setSecondName('Казарезов');
        $this->assertEquals('1-Алексей Казарезов', $this->object->genderAutoDetect().'-Алексей Казарезов');
    }
    public function testGenDetect349()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setSecondName('Калашник');
        $this->assertEquals('1-Гертруд Калашник', $this->object->genderAutoDetect().'-Гертруд Калашник');
    }
    public function testGenDetect350()
    {
        $this->object->setFirstName('Лукьян');
        $this->object->setSecondName('Калганов');
        $this->assertEquals('1-Лукьян Калганов', $this->object->genderAutoDetect().'-Лукьян Калганов');
    }
    public function testGenDetect351()
    {
        $this->object->setFirstName('Бронислав');
        $this->object->setSecondName('Каменских');
        $this->assertEquals('1-Бронислав Каменских', $this->object->genderAutoDetect().'-Бронислав Каменских');
    }
    public function testGenDetect352()
    {
        $this->object->setFirstName('Олег');
        $this->object->setSecondName('Камкин');
        $this->assertEquals('1-Олег Камкин', $this->object->genderAutoDetect().'-Олег Камкин');
    }
    public function testGenDetect353()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setSecondName('Каналин');
        $this->assertEquals('1-Даниил Каналин', $this->object->genderAutoDetect().'-Даниил Каналин');
    }
    public function testGenDetect354()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setSecondName('Кандинский');
        $this->assertEquals('1-Поликарп Кандинский', $this->object->genderAutoDetect().'-Поликарп Кандинский');
    }
    public function testGenDetect355()
    {
        $this->object->setFirstName('Михей');
        $this->object->setSecondName('Капица');
        $this->assertEquals('1-Михей Капица', $this->object->genderAutoDetect().'-Михей Капица');
    }
    public function testGenDetect356()
    {
        $this->object->setFirstName('Валентин');
        $this->object->setSecondName('Капралов');
        $this->assertEquals('1-Валентин Капралов', $this->object->genderAutoDetect().'-Валентин Капралов');
    }
    public function testGenDetect357()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setSecondName('Караваев');
        $this->assertEquals('1-Гертруд Караваев', $this->object->genderAutoDetect().'-Гертруд Караваев');
    }
    public function testGenDetect358()
    {
        $this->object->setFirstName('Александр');
        $this->object->setSecondName('Караулов');
        $this->assertEquals('1-Александр Караулов', $this->object->genderAutoDetect().'-Александр Караулов');
    }
    public function testGenDetect359()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setSecondName('Карев');
        $this->assertEquals('1-Нестор Карев', $this->object->genderAutoDetect().'-Нестор Карев');
    }
    public function testGenDetect360()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Каретников');
        $this->assertEquals('1-Климент Каретников', $this->object->genderAutoDetect().'-Климент Каретников');
    }
    public function testGenDetect361()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Каргин');
        $this->assertEquals('1-Харламп Каргин', $this->object->genderAutoDetect().'-Харламп Каргин');
    }
    public function testGenDetect362()
    {
        $this->object->setFirstName('Анисим');
        $this->object->setSecondName('Карташов');
        $this->assertEquals('1-Анисим Карташов', $this->object->genderAutoDetect().'-Анисим Карташов');
    }
    public function testGenDetect363()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setSecondName('Карчагин');
        $this->assertEquals('1-Феодосий Карчагин', $this->object->genderAutoDetect().'-Феодосий Карчагин');
    }
    public function testGenDetect364()
    {
        $this->object->setFirstName('Илья');
        $this->object->setSecondName('Касатый');
        $this->assertEquals('1-Илья Касатый', $this->object->genderAutoDetect().'-Илья Касатый');
    }
    public function testGenDetect365()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setSecondName('Катин');
        $this->assertEquals('1-Роберт Катин', $this->object->genderAutoDetect().'-Роберт Катин');
    }
    public function testGenDetect366()
    {
        $this->object->setFirstName('Наум');
        $this->object->setSecondName('Качусов');
        $this->assertEquals('1-Наум Качусов', $this->object->genderAutoDetect().'-Наум Качусов');
    }
    public function testGenDetect367()
    {
        $this->object->setFirstName('Влас');
        $this->object->setSecondName('Кашарин');
        $this->assertEquals('1-Влас Кашарин', $this->object->genderAutoDetect().'-Влас Кашарин');
    }
    public function testGenDetect368()
    {
        $this->object->setFirstName('Максим');
        $this->object->setSecondName('Каширин');
        $this->assertEquals('1-Максим Каширин', $this->object->genderAutoDetect().'-Максим Каширин');
    }
    public function testGenDetect369()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setSecondName('Кашканов');
        $this->assertEquals('1-Терентий Кашканов', $this->object->genderAutoDetect().'-Терентий Кашканов');
    }
    public function testGenDetect370()
    {
        $this->object->setFirstName('Бронислав');
        $this->object->setSecondName('Кашников');
        $this->assertEquals('1-Бронислав Кашников', $this->object->genderAutoDetect().'-Бронислав Кашников');
    }
    public function testGenDetect371()
    {
        $this->object->setFirstName('Артур');
        $this->object->setSecondName('Киреев');
        $this->assertEquals('1-Артур Киреев', $this->object->genderAutoDetect().'-Артур Киреев');
    }
    public function testGenDetect372()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setSecondName('Кирилишен');
        $this->assertEquals('1-Чеслав Кирилишен', $this->object->genderAutoDetect().'-Чеслав Кирилишен');
    }
    public function testGenDetect373()
    {
        $this->object->setFirstName('Харлампий');
        $this->object->setSecondName('Кирилловский');
        $this->assertEquals('1-Харлампий Кирилловский', $this->object->genderAutoDetect().'-Харлампий Кирилловский');
    }
    public function testGenDetect374()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setSecondName('Кирилов');
        $this->assertEquals('1-Сергей Кирилов', $this->object->genderAutoDetect().'-Сергей Кирилов');
    }
    public function testGenDetect375()
    {
        $this->object->setFirstName('Владимир');
        $this->object->setSecondName('Кирсанов');
        $this->assertEquals('1-Владимир Кирсанов', $this->object->genderAutoDetect().'-Владимир Кирсанов');
    }
    public function testGenDetect376()
    {
        $this->object->setFirstName('Пимен');
        $this->object->setSecondName('Кирьянов');
        $this->assertEquals('1-Пимен Кирьянов', $this->object->genderAutoDetect().'-Пимен Кирьянов');
    }
    public function testGenDetect377()
    {
        $this->object->setFirstName('Демид');
        $this->object->setSecondName('Клепахов');
        $this->assertEquals('1-Демид Клепахов', $this->object->genderAutoDetect().'-Демид Клепахов');
    }
    public function testGenDetect378()
    {
        $this->object->setFirstName('Лаврентий');
        $this->object->setSecondName('Климов');
        $this->assertEquals('1-Лаврентий Климов', $this->object->genderAutoDetect().'-Лаврентий Климов');
    }
    public function testGenDetect379()
    {
        $this->object->setFirstName('Прокоп');
        $this->object->setSecondName('Климушин');
        $this->assertEquals('1-Прокоп Климушин', $this->object->genderAutoDetect().'-Прокоп Климушин');
    }
    public function testGenDetect380()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Клоков');
        $this->assertEquals('1-Климент Клоков', $this->object->genderAutoDetect().'-Климент Клоков');
    }
    public function testGenDetect381()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setSecondName('Князев');
        $this->assertEquals('1-Алексей Князев', $this->object->genderAutoDetect().'-Алексей Князев');
    }
    public function testGenDetect382()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setSecondName('Ковалёв');
        $this->assertEquals('1-Терентий Ковалёв', $this->object->genderAutoDetect().'-Терентий Ковалёв');
    }
    public function testGenDetect383()
    {
        $this->object->setFirstName('Валерьян');
        $this->object->setSecondName('Ковалевский');
        $this->assertEquals('1-Валерьян Ковалевский', $this->object->genderAutoDetect().'-Валерьян Ковалевский');
    }
    public function testGenDetect384()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setSecondName('Ковров');
        $this->assertEquals('1-Дорофей Ковров', $this->object->genderAutoDetect().'-Дорофей Ковров');
    }
    public function testGenDetect385()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setSecondName('Ковшутин');
        $this->assertEquals('1-Мстислав Ковшутин', $this->object->genderAutoDetect().'-Мстислав Ковшутин');
    }
    public function testGenDetect386()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Кожуров');
        $this->assertEquals('1-Пантелей Кожуров', $this->object->genderAutoDetect().'-Пантелей Кожуров');
    }
    public function testGenDetect387()
    {
        $this->object->setFirstName('Илья');
        $this->object->setSecondName('Кожухов');
        $this->assertEquals('1-Илья Кожухов', $this->object->genderAutoDetect().'-Илья Кожухов');
    }
    public function testGenDetect388()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setSecondName('Козаков');
        $this->assertEquals('1-Святослав Козаков', $this->object->genderAutoDetect().'-Святослав Козаков');
    }
    public function testGenDetect389()
    {
        $this->object->setFirstName('Платон');
        $this->object->setSecondName('Козарь');
        $this->assertEquals('1-Платон Козарь', $this->object->genderAutoDetect().'-Платон Козарь');
    }
    public function testGenDetect390()
    {
        $this->object->setFirstName('Адам');
        $this->object->setSecondName('Козлов');
        $this->assertEquals('1-Адам Козлов', $this->object->genderAutoDetect().'-Адам Козлов');
    }
    public function testGenDetect391()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setSecondName('Козловский');
        $this->assertEquals('1-Дорофей Козловский', $this->object->genderAutoDetect().'-Дорофей Козловский');
    }
    public function testGenDetect392()
    {
        $this->object->setFirstName('Осип');
        $this->object->setSecondName('Колесников');
        $this->assertEquals('1-Осип Колесников', $this->object->genderAutoDetect().'-Осип Колесников');
    }
    public function testGenDetect393()
    {
        $this->object->setFirstName('Антон');
        $this->object->setSecondName('Колонтаев');
        $this->assertEquals('1-Антон Колонтаев', $this->object->genderAutoDetect().'-Антон Колонтаев');
    }
    public function testGenDetect394()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setSecondName('Колосов');
        $this->assertEquals('1-Всеволод Колосов', $this->object->genderAutoDetect().'-Всеволод Колосов');
    }
    public function testGenDetect395()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setSecondName('Кольцов');
        $this->assertEquals('1-Афанас Кольцов', $this->object->genderAutoDetect().'-Афанас Кольцов');
    }
    public function testGenDetect396()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setSecondName('Комаров');
        $this->assertEquals('1-Тарас Комаров', $this->object->genderAutoDetect().'-Тарас Комаров');
    }
    public function testGenDetect397()
    {
        $this->object->setFirstName('Савастей');
        $this->object->setSecondName('Комзин');
        $this->assertEquals('1-Савастей Комзин', $this->object->genderAutoDetect().'-Савастей Комзин');
    }
    public function testGenDetect398()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setSecondName('Комолов');
        $this->assertEquals('1-Даниил Комолов', $this->object->genderAutoDetect().'-Даниил Комолов');
    }
    public function testGenDetect399()
    {
        $this->object->setFirstName('Исак');
        $this->object->setSecondName('Кондратьев');
        $this->assertEquals('1-Исак Кондратьев', $this->object->genderAutoDetect().'-Исак Кондратьев');
    }
    public function testGenDetect400()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setSecondName('Конев');
        $this->assertEquals('1-Никодим Конев', $this->object->genderAutoDetect().'-Никодим Конев');
    }
    public function testGenDetect401()
    {
        $this->object->setFirstName('Захар');
        $this->object->setSecondName('Конников');
        $this->assertEquals('1-Захар Конников', $this->object->genderAutoDetect().'-Захар Конников');
    }
    public function testGenDetect402()
    {
        $this->object->setFirstName('Клим');
        $this->object->setSecondName('Коновалов');
        $this->assertEquals('1-Клим Коновалов', $this->object->genderAutoDetect().'-Клим Коновалов');
    }
    public function testGenDetect403()
    {
        $this->object->setFirstName('Наум');
        $this->object->setSecondName('Коньяков');
        $this->assertEquals('1-Наум Коньяков', $this->object->genderAutoDetect().'-Наум Коньяков');
    }
    public function testGenDetect404()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setSecondName('Коняшев');
        $this->assertEquals('1-Елизар Коняшев', $this->object->genderAutoDetect().'-Елизар Коняшев');
    }
    public function testGenDetect405()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setSecondName('Копейкин');
        $this->assertEquals('1-Евдоким Копейкин', $this->object->genderAutoDetect().'-Евдоким Копейкин');
    }
    public function testGenDetect406()
    {
        $this->object->setFirstName('Родион');
        $this->object->setSecondName('Коренев');
        $this->assertEquals('1-Родион Коренев', $this->object->genderAutoDetect().'-Родион Коренев');
    }
    public function testGenDetect407()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setSecondName('Коренёв');
        $this->assertEquals('1-Алексей Коренёв', $this->object->genderAutoDetect().'-Алексей Коренёв');
    }
    public function testGenDetect408()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Коржаков');
        $this->assertEquals('1-Леон Коржаков', $this->object->genderAutoDetect().'-Леон Коржаков');
    }
    public function testGenDetect409()
    {
        $this->object->setFirstName('Евсей');
        $this->object->setSecondName('Коржев');
        $this->assertEquals('1-Евсей Коржев', $this->object->genderAutoDetect().'-Евсей Коржев');
    }
    public function testGenDetect410()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setSecondName('Корнев');
        $this->assertEquals('1-Ростислав Корнев', $this->object->genderAutoDetect().'-Ростислав Корнев');
    }
    public function testGenDetect411()
    {
        $this->object->setFirstName('Эдгард');
        $this->object->setSecondName('Корнилов');
        $this->assertEquals('1-Эдгард Корнилов', $this->object->genderAutoDetect().'-Эдгард Корнилов');
    }
    public function testGenDetect412()
    {
        $this->object->setFirstName('Емельян');
        $this->object->setSecondName('Коровин');
        $this->assertEquals('1-Емельян Коровин', $this->object->genderAutoDetect().'-Емельян Коровин');
    }
    public function testGenDetect413()
    {
        $this->object->setFirstName('Никита');
        $this->object->setSecondName('Королёв');
        $this->assertEquals('1-Никита Королёв', $this->object->genderAutoDetect().'-Никита Королёв');
    }
    public function testGenDetect414()
    {
        $this->object->setFirstName('Богдан');
        $this->object->setSecondName('Коротаев');
        $this->assertEquals('1-Богдан Коротаев', $this->object->genderAutoDetect().'-Богдан Коротаев');
    }
    public function testGenDetect415()
    {
        $this->object->setFirstName('Мина');
        $this->object->setSecondName('Корчагин');
        $this->assertEquals('1-Мина Корчагин', $this->object->genderAutoDetect().'-Мина Корчагин');
    }
    public function testGenDetect416()
    {
        $this->object->setFirstName('Денис');
        $this->object->setSecondName('Косарёв');
        $this->assertEquals('1-Денис Косарёв', $this->object->genderAutoDetect().'-Денис Косарёв');
    }
    public function testGenDetect417()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setSecondName('Косков');
        $this->assertEquals('1-Савелий Косков', $this->object->genderAutoDetect().'-Савелий Косков');
    }
    public function testGenDetect418()
    {
        $this->object->setFirstName('Фрол');
        $this->object->setSecondName('Косомов');
        $this->assertEquals('1-Фрол Косомов', $this->object->genderAutoDetect().'-Фрол Косомов');
    }
    public function testGenDetect419()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setSecondName('Косоруков');
        $this->assertEquals('1-Афанас Косоруков', $this->object->genderAutoDetect().'-Афанас Косоруков');
    }
    public function testGenDetect420()
    {
        $this->object->setFirstName('Макар');
        $this->object->setSecondName('Костин');
        $this->assertEquals('1-Макар Костин', $this->object->genderAutoDetect().'-Макар Костин');
    }
    public function testGenDetect421()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setSecondName('Косяк');
        $this->assertEquals('1-Харлам Косяк', $this->object->genderAutoDetect().'-Харлам Косяк');
    }
    public function testGenDetect422()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setSecondName('Котов');
        $this->assertEquals('1-Ефимий Котов', $this->object->genderAutoDetect().'-Ефимий Котов');
    }
    public function testGenDetect423()
    {
        $this->object->setFirstName('Гурий');
        $this->object->setSecondName('Костомаров');
        $this->assertEquals('1-Гурий Костомаров', $this->object->genderAutoDetect().'-Гурий Костомаров');
    }
    public function testGenDetect424()
    {
        $this->object->setFirstName('Аркадий');
        $this->object->setSecondName('Коченков');
        $this->assertEquals('1-Аркадий Коченков', $this->object->genderAutoDetect().'-Аркадий Коченков');
    }
    public function testGenDetect425()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setSecondName('Кошелев');
        $this->assertEquals('1-Лазарь Кошелев', $this->object->genderAutoDetect().'-Лазарь Кошелев');
    }
    public function testGenDetect426()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setSecondName('Кошечкин');
        $this->assertEquals('1-Евстафий Кошечкин', $this->object->genderAutoDetect().'-Евстафий Кошечкин');
    }
    public function testGenDetect427()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setSecondName('Кошкин');
        $this->assertEquals('1-Фадей Кошкин', $this->object->genderAutoDetect().'-Фадей Кошкин');
    }
    public function testGenDetect428()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setSecondName('Кравчук');
        $this->assertEquals('1-Елизар Кравчук', $this->object->genderAutoDetect().'-Елизар Кравчук');
    }
    public function testGenDetect429()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Краев');
        $this->assertEquals('1-Леон Краев', $this->object->genderAutoDetect().'-Леон Краев');
    }
    public function testGenDetect430()
    {
        $this->object->setFirstName('Евстигней');
        $this->object->setSecondName('Краснов');
        $this->assertEquals('1-Евстигней Краснов', $this->object->genderAutoDetect().'-Евстигней Краснов');
    }
    public function testGenDetect431()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setSecondName('Красноперов');
        $this->assertEquals('1-Харлам Красноперов', $this->object->genderAutoDetect().'-Харлам Красноперов');
    }
    public function testGenDetect432()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setSecondName('Кропанин');
        $this->assertEquals('1-Тарас Кропанин', $this->object->genderAutoDetect().'-Тарас Кропанин');
    }
    public function testGenDetect433()
    {
        $this->object->setFirstName('Платон');
        $this->object->setSecondName('Кругликов');
        $this->assertEquals('1-Платон Кругликов', $this->object->genderAutoDetect().'-Платон Кругликов');
    }
    public function testGenDetect434()
    {
        $this->object->setFirstName('Мина');
        $this->object->setSecondName('Круглов');
        $this->assertEquals('1-Мина Круглов', $this->object->genderAutoDetect().'-Мина Круглов');
    }
    public function testGenDetect435()
    {
        $this->object->setFirstName('Виталий');
        $this->object->setSecondName('Крупин');
        $this->assertEquals('1-Виталий Крупин', $this->object->genderAutoDetect().'-Виталий Крупин');
    }
    public function testGenDetect436()
    {
        $this->object->setFirstName('Аверьян');
        $this->object->setSecondName('Крутин');
        $this->assertEquals('1-Аверьян Крутин', $this->object->genderAutoDetect().'-Аверьян Крутин');
    }
    public function testGenDetect437()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setSecondName('Кручинкин');
        $this->assertEquals('1-Зиновий Кручинкин', $this->object->genderAutoDetect().'-Зиновий Кручинкин');
    }
    public function testGenDetect438()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setSecondName('Крылов');
        $this->assertEquals('1-Вячеслав Крылов', $this->object->genderAutoDetect().'-Вячеслав Крылов');
    }
    public function testGenDetect439()
    {
        $this->object->setFirstName('Лука');
        $this->object->setSecondName('Крысов');
        $this->assertEquals('1-Лука Крысов', $this->object->genderAutoDetect().'-Лука Крысов');
    }
    public function testGenDetect440()
    {
        $this->object->setFirstName('Наум');
        $this->object->setSecondName('Крюков');
        $this->assertEquals('1-Наум Крюков', $this->object->genderAutoDetect().'-Наум Крюков');
    }
    public function testGenDetect441()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setSecondName('Кубланов');
        $this->assertEquals('1-Чеслав Кубланов', $this->object->genderAutoDetect().'-Чеслав Кубланов');
    }
    public function testGenDetect442()
    {
        $this->object->setFirstName('Куприян');
        $this->object->setSecondName('Кудашов');
        $this->assertEquals('1-Куприян Кудашов', $this->object->genderAutoDetect().'-Куприян Кудашов');
    }
    public function testGenDetect443()
    {
        $this->object->setFirstName('Филат');
        $this->object->setSecondName('Кудрин');
        $this->assertEquals('1-Филат Кудрин', $this->object->genderAutoDetect().'-Филат Кудрин');
    }
    public function testGenDetect444()
    {
        $this->object->setFirstName('Наркис');
        $this->object->setSecondName('Кудрявцев');
        $this->assertEquals('1-Наркис Кудрявцев', $this->object->genderAutoDetect().'-Наркис Кудрявцев');
    }
    public function testGenDetect445()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setSecondName('Кудряшов');
        $this->assertEquals('1-Михаил Кудряшов', $this->object->genderAutoDetect().'-Михаил Кудряшов');
    }
    public function testGenDetect446()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setSecondName('Кузнецов');
        $this->assertEquals('1-Кузьма Кузнецов', $this->object->genderAutoDetect().'-Кузьма Кузнецов');
    }
    public function testGenDetect447()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setSecondName('Кузьмин');
        $this->assertEquals('1-Теймураз Кузьмин', $this->object->genderAutoDetect().'-Теймураз Кузьмин');
    }
    public function testGenDetect448()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setSecondName('Куимов');
        $this->assertEquals('1-Иосиф Куимов', $this->object->genderAutoDetect().'-Иосиф Куимов');
    }
    public function testGenDetect449()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setSecondName('Куклачёв');
        $this->assertEquals('1-Касьян Куклачёв', $this->object->genderAutoDetect().'-Касьян Куклачёв');
    }
    public function testGenDetect450()
    {
        $this->object->setFirstName('Филат');
        $this->object->setSecondName('Кулагин');
        $this->assertEquals('1-Филат Кулагин', $this->object->genderAutoDetect().'-Филат Кулагин');
    }
    public function testGenDetect451()
    {
        $this->object->setFirstName('Филат');
        $this->object->setSecondName('Кулибин');
        $this->assertEquals('1-Филат Кулибин', $this->object->genderAutoDetect().'-Филат Кулибин');
    }
    public function testGenDetect452()
    {
        $this->object->setFirstName('Иосип');
        $this->object->setSecondName('Куликов');
        $this->assertEquals('1-Иосип Куликов', $this->object->genderAutoDetect().'-Иосип Куликов');
    }
    public function testGenDetect453()
    {
        $this->object->setFirstName('Демьян');
        $this->object->setSecondName('Куракин');
        $this->assertEquals('1-Демьян Куракин', $this->object->genderAutoDetect().'-Демьян Куракин');
    }
    public function testGenDetect454()
    {
        $this->object->setFirstName('Вилен');
        $this->object->setSecondName('Курбатов');
        $this->assertEquals('1-Вилен Курбатов', $this->object->genderAutoDetect().'-Вилен Курбатов');
    }
    public function testGenDetect455()
    {
        $this->object->setFirstName('Каллиник');
        $this->object->setSecondName('Курганов');
        $this->assertEquals('1-Каллиник Курганов', $this->object->genderAutoDetect().'-Каллиник Курганов');
    }
    public function testGenDetect456()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setSecondName('Курдин');
        $this->assertEquals('1-Порфир Курдин', $this->object->genderAutoDetect().'-Порфир Курдин');
    }
    public function testGenDetect457()
    {
        $this->object->setFirstName('Карп');
        $this->object->setSecondName('Курепин');
        $this->assertEquals('1-Карп Курепин', $this->object->genderAutoDetect().'-Карп Курепин');
    }
    public function testGenDetect458()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setSecondName('Курсалин');
        $this->assertEquals('1-Еремей Курсалин', $this->object->genderAutoDetect().'-Еремей Курсалин');
    }
    public function testGenDetect459()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setSecondName('Кутиков');
        $this->assertEquals('1-Арсен Кутиков', $this->object->genderAutoDetect().'-Арсен Кутиков');
    }
    public function testGenDetect460()
    {
        $this->object->setFirstName('Харитон');
        $this->object->setSecondName('Кутузов');
        $this->assertEquals('1-Харитон Кутузов', $this->object->genderAutoDetect().'-Харитон Кутузов');
    }
    public function testGenDetect461()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setSecondName('Кутяков');
        $this->assertEquals('1-Моисей Кутяков', $this->object->genderAutoDetect().'-Моисей Кутяков');
    }
    public function testGenDetect462()
    {
        $this->object->setFirstName('Юрий');
        $this->object->setSecondName('Лавров');
        $this->assertEquals('1-Юрий Лавров', $this->object->genderAutoDetect().'-Юрий Лавров');
    }
    public function testGenDetect463()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setSecondName('Лагутов');
        $this->assertEquals('1-Савелий Лагутов', $this->object->genderAutoDetect().'-Савелий Лагутов');
    }
    public function testGenDetect464()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setSecondName('Лазарев');
        $this->assertEquals('1-Ефимий Лазарев', $this->object->genderAutoDetect().'-Ефимий Лазарев');
    }
    public function testGenDetect465()
    {
        $this->object->setFirstName('Мартин');
        $this->object->setSecondName('Ланцов');
        $this->assertEquals('1-Мартин Ланцов', $this->object->genderAutoDetect().'-Мартин Ланцов');
    }
    public function testGenDetect466()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Лапидус');
        $this->assertEquals('1-Харламп Лапидус', $this->object->genderAutoDetect().'-Харламп Лапидус');
    }
    public function testGenDetect467()
    {
        $this->object->setFirstName('Жан');
        $this->object->setSecondName('Лапотников');
        $this->assertEquals('1-Жан Лапотников', $this->object->genderAutoDetect().'-Жан Лапотников');
    }
    public function testGenDetect468()
    {
        $this->object->setFirstName('Феликс');
        $this->object->setSecondName('Лаптев');
        $this->assertEquals('1-Феликс Лаптев', $this->object->genderAutoDetect().'-Феликс Лаптев');
    }
    public function testGenDetect469()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setSecondName('Лапунов');
        $this->assertEquals('1-Венедикт Лапунов', $this->object->genderAutoDetect().'-Венедикт Лапунов');
    }
    public function testGenDetect470()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setSecondName('Лапухов');
        $this->assertEquals('1-Тарас Лапухов', $this->object->genderAutoDetect().'-Тарас Лапухов');
    }
    public function testGenDetect471()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Ларин');
        $this->assertEquals('1-Леон Ларин', $this->object->genderAutoDetect().'-Леон Ларин');
    }
    public function testGenDetect472()
    {
        $this->object->setFirstName('Богдан');
        $this->object->setSecondName('Ларионов');
        $this->assertEquals('1-Богдан Ларионов', $this->object->genderAutoDetect().'-Богдан Ларионов');
    }
    public function testGenDetect473()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setSecondName('Ласкутин');
        $this->assertEquals('1-Зиновий Ласкутин', $this->object->genderAutoDetect().'-Зиновий Ласкутин');
    }
    public function testGenDetect474()
    {
        $this->object->setFirstName('Кирила');
        $this->object->setSecondName('Лачинов');
        $this->assertEquals('1-Кирила Лачинов', $this->object->genderAutoDetect().'-Кирила Лачинов');
    }
    public function testGenDetect475()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setSecondName('Лачков');
        $this->assertEquals('1-Панкрат Лачков', $this->object->genderAutoDetect().'-Панкрат Лачков');
    }
    public function testGenDetect476()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setSecondName('Лебедев');
        $this->assertEquals('1-Филипп Лебедев', $this->object->genderAutoDetect().'-Филипп Лебедев');
    }
    public function testGenDetect477()
    {
        $this->object->setFirstName('Филимон');
        $this->object->setSecondName('Лебединский');
        $this->assertEquals('1-Филимон Лебединский', $this->object->genderAutoDetect().'-Филимон Лебединский');
    }
    public function testGenDetect478()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setSecondName('Лебединцев');
        $this->assertEquals('1-Мефодий Лебединцев', $this->object->genderAutoDetect().'-Мефодий Лебединцев');
    }
    public function testGenDetect479()
    {
        $this->object->setFirstName('Ерофей');
        $this->object->setSecondName('Легкодимов');
        $this->assertEquals('1-Ерофей Легкодимов', $this->object->genderAutoDetect().'-Ерофей Легкодимов');
    }
    public function testGenDetect480()
    {
        $this->object->setFirstName('Игорь');
        $this->object->setSecondName('Леонов');
        $this->assertEquals('1-Игорь Леонов', $this->object->genderAutoDetect().'-Игорь Леонов');
    }
    public function testGenDetect481()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setSecondName('Лепёхин');
        $this->assertEquals('1-Ксенофонт Лепёхин', $this->object->genderAutoDetect().'-Ксенофонт Лепёхин');
    }
    public function testGenDetect482()
    {
        $this->object->setFirstName('Демид');
        $this->object->setSecondName('Лесков');
        $this->assertEquals('1-Демид Лесков', $this->object->genderAutoDetect().'-Демид Лесков');
    }
    public function testGenDetect483()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setSecondName('Лесничий');
        $this->assertEquals('1-Порфир Лесничий', $this->object->genderAutoDetect().'-Порфир Лесничий');
    }
    public function testGenDetect484()
    {
        $this->object->setFirstName('Пимен');
        $this->object->setSecondName('Летов');
        $this->assertEquals('1-Пимен Летов', $this->object->genderAutoDetect().'-Пимен Летов');
    }
    public function testGenDetect485()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setSecondName('Лещёв');
        $this->assertEquals('1-Иосиф Лещёв', $this->object->genderAutoDetect().'-Иосиф Лещёв');
    }
    public function testGenDetect486()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setSecondName('Лилов');
        $this->assertEquals('1-Владислав Лилов', $this->object->genderAutoDetect().'-Владислав Лилов');
    }
    public function testGenDetect487()
    {
        $this->object->setFirstName('Корней');
        $this->object->setSecondName('Липин');
        $this->assertEquals('1-Корней Липин', $this->object->genderAutoDetect().'-Корней Липин');
    }
    public function testGenDetect488()
    {
        $this->object->setFirstName('Семён');
        $this->object->setSecondName('Лисицын');
        $this->assertEquals('1-Семён Лисицын', $this->object->genderAutoDetect().'-Семён Лисицын');
    }
    public function testGenDetect489()
    {
        $this->object->setFirstName('Константин');
        $this->object->setSecondName('Лихачёв');
        $this->assertEquals('1-Константин Лихачёв', $this->object->genderAutoDetect().'-Константин Лихачёв');
    }
    public function testGenDetect490()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Лобан');
        $this->assertEquals('1-Леон Лобан', $this->object->genderAutoDetect().'-Леон Лобан');
    }
    public function testGenDetect491()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setSecondName('Лобанов');
        $this->assertEquals('1-Прокофий Лобанов', $this->object->genderAutoDetect().'-Прокофий Лобанов');
    }
    public function testGenDetect492()
    {
        $this->object->setFirstName('Афанасий');
        $this->object->setSecondName('Лобов');
        $this->assertEquals('1-Афанасий Лобов', $this->object->genderAutoDetect().'-Афанасий Лобов');
    }
    public function testGenDetect493()
    {
        $this->object->setFirstName('Лев');
        $this->object->setSecondName('Логинов');
        $this->assertEquals('1-Лев Логинов', $this->object->genderAutoDetect().'-Лев Логинов');
    }
    public function testGenDetect494()
    {
        $this->object->setFirstName('Мина');
        $this->object->setSecondName('Логиновский');
        $this->assertEquals('1-Мина Логиновский', $this->object->genderAutoDetect().'-Мина Логиновский');
    }
    public function testGenDetect495()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setSecondName('Локтев');
        $this->assertEquals('1-Исаак Локтев', $this->object->genderAutoDetect().'-Исаак Локтев');
    }
    public function testGenDetect496()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Ломоносов');
        $this->assertEquals('1-Архип Ломоносов', $this->object->genderAutoDetect().'-Архип Ломоносов');
    }
    public function testGenDetect497()
    {
        $this->object->setFirstName('Лука');
        $this->object->setSecondName('Ломтев');
        $this->assertEquals('1-Лука Ломтев', $this->object->genderAutoDetect().'-Лука Ломтев');
    }
    public function testGenDetect498()
    {
        $this->object->setFirstName('Пётр');
        $this->object->setSecondName('Лопатин');
        $this->assertEquals('1-Пётр Лопатин', $this->object->genderAutoDetect().'-Пётр Лопатин');
    }
    public function testGenDetect499()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Лосев');
        $this->assertEquals('1-Харламп Лосев', $this->object->genderAutoDetect().'-Харламп Лосев');
    }
    public function testGenDetect500()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setSecondName('Лосевский');
        $this->assertEquals('1-Никодим Лосевский', $this->object->genderAutoDetect().'-Никодим Лосевский');
    }
    public function testGenDetect501()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setSecondName('Лоскутников');
        $this->assertEquals('1-Михаил Лоскутников', $this->object->genderAutoDetect().'-Михаил Лоскутников');
    }
    public function testGenDetect502()
    {
        $this->object->setFirstName('Константин');
        $this->object->setSecondName('Лоскутов');
        $this->assertEquals('1-Константин Лоскутов', $this->object->genderAutoDetect().'-Константин Лоскутов');
    }
    public function testGenDetect503()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setSecondName('Лужков');
        $this->assertEquals('1-Порфирий Лужков', $this->object->genderAutoDetect().'-Порфирий Лужков');
    }
    public function testGenDetect504()
    {
        $this->object->setFirstName('Филимон');
        $this->object->setSecondName('Лыткин');
        $this->assertEquals('1-Филимон Лыткин', $this->object->genderAutoDetect().'-Филимон Лыткин');
    }
    public function testGenDetect505()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setSecondName('Любимов');
        $this->assertEquals('1-Феодосий Любимов', $this->object->genderAutoDetect().'-Феодосий Любимов');
    }
    public function testGenDetect506()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Любов');
        $this->assertEquals('1-Климент Любов', $this->object->genderAutoDetect().'-Климент Любов');
    }
    public function testGenDetect507()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setSecondName('Лягушкин');
        $this->assertEquals('1-Теймураз Лягушкин', $this->object->genderAutoDetect().'-Теймураз Лягушкин');
    }
    public function testGenDetect508()
    {
        $this->object->setFirstName('Созонт');
        $this->object->setSecondName('Лягушов');
        $this->assertEquals('1-Созонт Лягушов', $this->object->genderAutoDetect().'-Созонт Лягушов');
    }
    public function testGenDetect509()
    {
        $this->object->setFirstName('Адриан');
        $this->object->setSecondName('Лялюшкин');
        $this->assertEquals('1-Адриан Лялюшкин', $this->object->genderAutoDetect().'-Адриан Лялюшкин');
    }
    public function testGenDetect510()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setSecondName('Лясин');
        $this->assertEquals('1-Вячеслав Лясин', $this->object->genderAutoDetect().'-Вячеслав Лясин');
    }
    public function testGenDetect511()
    {
        $this->object->setFirstName('Герман');
        $this->object->setSecondName('Ляпин');
        $this->assertEquals('1-Герман Ляпин', $this->object->genderAutoDetect().'-Герман Ляпин');
    }
    public function testGenDetect512()
    {
        $this->object->setFirstName('Лаврентий');
        $this->object->setSecondName('Майсак');
        $this->assertEquals('1-Лаврентий Майсак', $this->object->genderAutoDetect().'-Лаврентий Майсак');
    }
    public function testGenDetect513()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setSecondName('Макаров');
        $this->assertEquals('1-Каллистрат Макаров', $this->object->genderAutoDetect().'-Каллистрат Макаров');
    }
    public function testGenDetect514()
    {
        $this->object->setFirstName('Харитон');
        $this->object->setSecondName('Маклаков');
        $this->assertEquals('1-Харитон Маклаков', $this->object->genderAutoDetect().'-Харитон Маклаков');
    }
    public function testGenDetect515()
    {
        $this->object->setFirstName('Давид');
        $this->object->setSecondName('Максимов');
        $this->assertEquals('1-Давид Максимов', $this->object->genderAutoDetect().'-Давид Максимов');
    }
    public function testGenDetect516()
    {
        $this->object->setFirstName('Самсон');
        $this->object->setSecondName('Максимушкин');
        $this->assertEquals('1-Самсон Максимушкин', $this->object->genderAutoDetect().'-Самсон Максимушкин');
    }
    public function testGenDetect517()
    {
        $this->object->setFirstName('Вадим');
        $this->object->setSecondName('Максудов');
        $this->assertEquals('1-Вадим Максудов', $this->object->genderAutoDetect().'-Вадим Максудов');
    }
    public function testGenDetect518()
    {
        $this->object->setFirstName('Панкратий');
        $this->object->setSecondName('Малахов');
        $this->assertEquals('1-Панкратий Малахов', $this->object->genderAutoDetect().'-Панкратий Малахов');
    }
    public function testGenDetect519()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setSecondName('Маликов');
        $this->assertEquals('1-Нестер Маликов', $this->object->genderAutoDetect().'-Нестер Маликов');
    }
    public function testGenDetect520()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setSecondName('Малинин');
        $this->assertEquals('1-Митрофан Малинин', $this->object->genderAutoDetect().'-Митрофан Малинин');
    }
    public function testGenDetect521()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setSecondName('Малышев');
        $this->assertEquals('1-Григорий Малышев', $this->object->genderAutoDetect().'-Григорий Малышев');
    }
    public function testGenDetect522()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setSecondName('Малюгин');
        $this->assertEquals('1-Исаак Малюгин', $this->object->genderAutoDetect().'-Исаак Малюгин');
    }
    public function testGenDetect523()
    {
        $this->object->setFirstName('Никанор');
        $this->object->setSecondName('Малыхин');
        $this->assertEquals('1-Никанор Малыхин', $this->object->genderAutoDetect().'-Никанор Малыхин');
    }
    public function testGenDetect524()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setSecondName('Мамонов');
        $this->assertEquals('1-Парфений Мамонов', $this->object->genderAutoDetect().'-Парфений Мамонов');
    }
    public function testGenDetect525()
    {
        $this->object->setFirstName('Харлампий');
        $this->object->setSecondName('Манин');
        $this->assertEquals('1-Харлампий Манин', $this->object->genderAutoDetect().'-Харлампий Манин');
    }
    public function testGenDetect526()
    {
        $this->object->setFirstName('Аркадий');
        $this->object->setSecondName('Маркин');
        $this->assertEquals('1-Аркадий Маркин', $this->object->genderAutoDetect().'-Аркадий Маркин');
    }
    public function testGenDetect527()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Марков');
        $this->assertEquals('1-Роман Марков', $this->object->genderAutoDetect().'-Роман Марков');
    }
    public function testGenDetect528()
    {
        $this->object->setFirstName('Корнелий');
        $this->object->setSecondName('Маслак');
        $this->assertEquals('1-Корнелий Маслак', $this->object->genderAutoDetect().'-Корнелий Маслак');
    }
    public function testGenDetect529()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setSecondName('Маслов');
        $this->assertEquals('1-Прокопий Маслов', $this->object->genderAutoDetect().'-Прокопий Маслов');
    }
    public function testGenDetect530()
    {
        $this->object->setFirstName('Платон');
        $this->object->setSecondName('Матвеев');
        $this->assertEquals('1-Платон Матвеев', $this->object->genderAutoDetect().'-Платон Матвеев');
    }
    public function testGenDetect531()
    {
        $this->object->setFirstName('Викентий');
        $this->object->setSecondName('Матвеева');
        $this->assertEquals('1-Викентий Матвеева', $this->object->genderAutoDetect().'-Викентий Матвеева');
    }
    public function testGenDetect532()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setSecondName('Машарин');
        $this->assertEquals('1-Захарий Машарин', $this->object->genderAutoDetect().'-Захарий Машарин');
    }
    public function testGenDetect533()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setSecondName('Машир');
        $this->assertEquals('1-Гертруд Машир', $this->object->genderAutoDetect().'-Гертруд Машир');
    }
    public function testGenDetect534()
    {
        $this->object->setFirstName('Трофим');
        $this->object->setSecondName('Медведев');
        $this->assertEquals('1-Трофим Медведев', $this->object->genderAutoDetect().'-Трофим Медведев');
    }
    public function testGenDetect535()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setSecondName('Медников');
        $this->assertEquals('1-Евдоким Медников', $this->object->genderAutoDetect().'-Евдоким Медников');
    }
    public function testGenDetect536()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setSecondName('Меледин');
        $this->assertEquals('1-Валериан Меледин', $this->object->genderAutoDetect().'-Валериан Меледин');
    }
    public function testGenDetect537()
    {
        $this->object->setFirstName('Захар');
        $this->object->setSecondName('Мелехов');
        $this->assertEquals('1-Захар Мелехов', $this->object->genderAutoDetect().'-Захар Мелехов');
    }
    public function testGenDetect538()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setSecondName('Меликов');
        $this->assertEquals('1-Венедикт Меликов', $this->object->genderAutoDetect().'-Венедикт Меликов');
    }
    public function testGenDetect539()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setSecondName('Мельников');
        $this->assertEquals('1-Чеслав Мельников', $this->object->genderAutoDetect().'-Чеслав Мельников');
    }
    public function testGenDetect540()
    {
        $this->object->setFirstName('Иван');
        $this->object->setSecondName('Меркушев');
        $this->assertEquals('1-Иван Меркушев', $this->object->genderAutoDetect().'-Иван Меркушев');
    }
    public function testGenDetect541()
    {
        $this->object->setFirstName('Ермил');
        $this->object->setSecondName('Мещеряков');
        $this->assertEquals('1-Ермил Мещеряков', $this->object->genderAutoDetect().'-Ермил Мещеряков');
    }
    public function testGenDetect542()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setSecondName('Мигунов');
        $this->assertEquals('1-Владислав Мигунов', $this->object->genderAutoDetect().'-Владислав Мигунов');
    }
    public function testGenDetect543()
    {
        $this->object->setFirstName('Станислав');
        $this->object->setSecondName('Мизенов');
        $this->assertEquals('1-Станислав Мизенов', $this->object->genderAutoDetect().'-Станислав Мизенов');
    }
    public function testGenDetect544()
    {
        $this->object->setFirstName('Платон');
        $this->object->setSecondName('Милехин');
        $this->assertEquals('1-Платон Милехин', $this->object->genderAutoDetect().'-Платон Милехин');
    }
    public function testGenDetect545()
    {
        $this->object->setFirstName('Вадим');
        $this->object->setSecondName('Милорадов');
        $this->assertEquals('1-Вадим Милорадов', $this->object->genderAutoDetect().'-Вадим Милорадов');
    }
    public function testGenDetect546()
    {
        $this->object->setFirstName('Антип');
        $this->object->setSecondName('Милюков');
        $this->assertEquals('1-Антип Милюков', $this->object->genderAutoDetect().'-Антип Милюков');
    }
    public function testGenDetect547()
    {
        $this->object->setFirstName('Максим');
        $this->object->setSecondName('Милютин');
        $this->assertEquals('1-Максим Милютин', $this->object->genderAutoDetect().'-Максим Милютин');
    }
    public function testGenDetect548()
    {
        $this->object->setFirstName('Гордей');
        $this->object->setSecondName('Минеев');
        $this->assertEquals('1-Гордей Минеев', $this->object->genderAutoDetect().'-Гордей Минеев');
    }
    public function testGenDetect549()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Минин');
        $this->assertEquals('1-Роман Минин', $this->object->genderAutoDetect().'-Роман Минин');
    }
    public function testGenDetect550()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setSecondName('Минкин');
        $this->assertEquals('1-Владлен Минкин', $this->object->genderAutoDetect().'-Владлен Минкин');
    }
    public function testGenDetect551()
    {
        $this->object->setFirstName('Савва');
        $this->object->setSecondName('Миронов');
        $this->assertEquals('1-Савва Миронов', $this->object->genderAutoDetect().'-Савва Миронов');
    }
    public function testGenDetect552()
    {
        $this->object->setFirstName('Ян');
        $this->object->setSecondName('Митин');
        $this->assertEquals('1-Ян Митин', $this->object->genderAutoDetect().'-Ян Митин');
    }
    public function testGenDetect553()
    {
        $this->object->setFirstName('Мартын');
        $this->object->setSecondName('Митрофанов');
        $this->assertEquals('1-Мартын Митрофанов', $this->object->genderAutoDetect().'-Мартын Митрофанов');
    }
    public function testGenDetect554()
    {
        $this->object->setFirstName('Кирила');
        $this->object->setSecondName('Михайлов');
        $this->assertEquals('1-Кирила Михайлов', $this->object->genderAutoDetect().'-Кирила Михайлов');
    }
    public function testGenDetect555()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setSecondName('Михеев');
        $this->assertEquals('1-Парфений Михеев', $this->object->genderAutoDetect().'-Парфений Михеев');
    }
    public function testGenDetect556()
    {
        $this->object->setFirstName('Леонтий');
        $this->object->setSecondName('Мишутин');
        $this->assertEquals('1-Леонтий Мишутин', $this->object->genderAutoDetect().'-Леонтий Мишутин');
    }
    public function testGenDetect557()
    {
        $this->object->setFirstName('Корней');
        $this->object->setSecondName('Моисеев');
        $this->assertEquals('1-Корней Моисеев', $this->object->genderAutoDetect().'-Корней Моисеев');
    }
    public function testGenDetect558()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setSecondName('Молчанов');
        $this->assertEquals('1-Лазарь Молчанов', $this->object->genderAutoDetect().'-Лазарь Молчанов');
    }
    public function testGenDetect559()
    {
        $this->object->setFirstName('Авдей');
        $this->object->setSecondName('Моренов');
        $this->assertEquals('1-Авдей Моренов', $this->object->genderAutoDetect().'-Авдей Моренов');
    }
    public function testGenDetect560()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setSecondName('Морозов');
        $this->assertEquals('1-Даниил Морозов', $this->object->genderAutoDetect().'-Даниил Морозов');
    }
    public function testGenDetect561()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setSecondName('Мосалев');
        $this->assertEquals('1-Даниил Мосалев', $this->object->genderAutoDetect().'-Даниил Мосалев');
    }
    public function testGenDetect562()
    {
        $this->object->setFirstName('Викентий');
        $this->object->setSecondName('Москвин');
        $this->assertEquals('1-Викентий Москвин', $this->object->genderAutoDetect().'-Викентий Москвин');
    }
    public function testGenDetect563()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setSecondName('Муратов');
        $this->assertEquals('1-Митрофан Муратов', $this->object->genderAutoDetect().'-Митрофан Муратов');
    }
    public function testGenDetect564()
    {
        $this->object->setFirstName('Кирила');
        $this->object->setSecondName('Мухортов');
        $this->assertEquals('1-Кирила Мухортов', $this->object->genderAutoDetect().'-Кирила Мухортов');
    }
    public function testGenDetect565()
    {
        $this->object->setFirstName('Александр');
        $this->object->setSecondName('Мягков');
        $this->assertEquals('1-Александр Мягков', $this->object->genderAutoDetect().'-Александр Мягков');
    }
    public function testGenDetect566()
    {
        $this->object->setFirstName('Степан');
        $this->object->setSecondName('Мясников');
        $this->assertEquals('1-Степан Мясников', $this->object->genderAutoDetect().'-Степан Мясников');
    }
    public function testGenDetect567()
    {
        $this->object->setFirstName('Мартын');
        $this->object->setSecondName('Мятлев');
        $this->assertEquals('1-Мартын Мятлев', $this->object->genderAutoDetect().'-Мартын Мятлев');
    }
    public function testGenDetect568()
    {
        $this->object->setFirstName('Игнатий');
        $this->object->setSecondName('Набатов');
        $this->assertEquals('1-Игнатий Набатов', $this->object->genderAutoDetect().'-Игнатий Набатов');
    }
    public function testGenDetect569()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setSecondName('Нардин');
        $this->assertEquals('1-Юлий Нардин', $this->object->genderAutoDetect().'-Юлий Нардин');
    }
    public function testGenDetect570()
    {
        $this->object->setFirstName('Лука');
        $this->object->setSecondName('Наумов');
        $this->assertEquals('1-Лука Наумов', $this->object->genderAutoDetect().'-Лука Наумов');
    }
    public function testGenDetect571()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Невзоров');
        $this->assertEquals('1-Пантелей Невзоров', $this->object->genderAutoDetect().'-Пантелей Невзоров');
    }
    public function testGenDetect572()
    {
        $this->object->setFirstName('Егор');
        $this->object->setSecondName('Неделяев');
        $this->assertEquals('1-Егор Неделяев', $this->object->genderAutoDetect().'-Егор Неделяев');
    }
    public function testGenDetect573()
    {
        $this->object->setFirstName('Осип');
        $this->object->setSecondName('Нежданов');
        $this->assertEquals('1-Осип Нежданов', $this->object->genderAutoDetect().'-Осип Нежданов');
    }
    public function testGenDetect574()
    {
        $this->object->setFirstName('Мартин');
        $this->object->setSecondName('Ненашев');
        $this->assertEquals('1-Мартин Ненашев', $this->object->genderAutoDetect().'-Мартин Ненашев');
    }
    public function testGenDetect575()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setSecondName('Нестеров');
        $this->assertEquals('1-Алексей Нестеров', $this->object->genderAutoDetect().'-Алексей Нестеров');
    }
    public function testGenDetect576()
    {
        $this->object->setFirstName('Савастей');
        $this->object->setSecondName('Нечаев');
        $this->assertEquals('1-Савастей Нечаев', $this->object->genderAutoDetect().'-Савастей Нечаев');
    }
    public function testGenDetect577()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setSecondName('Никитин');
        $this->assertEquals('1-Нестор Никитин', $this->object->genderAutoDetect().'-Нестор Никитин');
    }
    public function testGenDetect578()
    {
        $this->object->setFirstName('Мина');
        $this->object->setSecondName('Никифоров');
        $this->assertEquals('1-Мина Никифоров', $this->object->genderAutoDetect().'-Мина Никифоров');
    }
    public function testGenDetect579()
    {
        $this->object->setFirstName('Адам');
        $this->object->setSecondName('Николаев');
        $this->assertEquals('1-Адам Николаев', $this->object->genderAutoDetect().'-Адам Николаев');
    }
    public function testGenDetect580()
    {
        $this->object->setFirstName('Калина');
        $this->object->setSecondName('Никонов');
        $this->assertEquals('1-Калина Никонов', $this->object->genderAutoDetect().'-Калина Никонов');
    }
    public function testGenDetect581()
    {
        $this->object->setFirstName('Платон');
        $this->object->setSecondName('Никулин');
        $this->assertEquals('1-Платон Никулин', $this->object->genderAutoDetect().'-Платон Никулин');
    }
    public function testGenDetect582()
    {
        $this->object->setFirstName('Самсон');
        $this->object->setSecondName('Некрасов');
        $this->assertEquals('1-Самсон Некрасов', $this->object->genderAutoDetect().'-Самсон Некрасов');
    }
    public function testGenDetect583()
    {
        $this->object->setFirstName('Калина');
        $this->object->setSecondName('Новиков');
        $this->assertEquals('1-Калина Новиков', $this->object->genderAutoDetect().'-Калина Новиков');
    }
    public function testGenDetect584()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setSecondName('Новосельцев');
        $this->assertEquals('1-Елизар Новосельцев', $this->object->genderAutoDetect().'-Елизар Новосельцев');
    }
    public function testGenDetect585()
    {
        $this->object->setFirstName('Демьян');
        $this->object->setSecondName('Носачёв');
        $this->assertEquals('1-Демьян Носачёв', $this->object->genderAutoDetect().'-Демьян Носачёв');
    }
    public function testGenDetect586()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setSecondName('Носков');
        $this->assertEquals('1-Венедикт Носков', $this->object->genderAutoDetect().'-Венедикт Носков');
    }
    public function testGenDetect587()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setSecondName('Носов');
        $this->assertEquals('1-Святослав Носов', $this->object->genderAutoDetect().'-Святослав Носов');
    }
    public function testGenDetect588()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setSecondName('Оболенский');
        $this->assertEquals('1-Парфений Оболенский', $this->object->genderAutoDetect().'-Парфений Оболенский');
    }
    public function testGenDetect589()
    {
        $this->object->setFirstName('Нефёд');
        $this->object->setSecondName('Оборин');
        $this->assertEquals('1-Нефёд Оборин', $this->object->genderAutoDetect().'-Нефёд Оборин');
    }
    public function testGenDetect590()
    {
        $this->object->setFirstName('Семён');
        $this->object->setSecondName('Образцов');
        $this->assertEquals('1-Семён Образцов', $this->object->genderAutoDetect().'-Семён Образцов');
    }
    public function testGenDetect591()
    {
        $this->object->setFirstName('Харлампий');
        $this->object->setSecondName('Обухов');
        $this->assertEquals('1-Харлампий Обухов', $this->object->genderAutoDetect().'-Харлампий Обухов');
    }
    public function testGenDetect592()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setSecondName('Овечкин');
        $this->assertEquals('1-Тимофей Овечкин', $this->object->genderAutoDetect().'-Тимофей Овечкин');
    }
    public function testGenDetect593()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Огородников');
        $this->assertEquals('1-Харламп Огородников', $this->object->genderAutoDetect().'-Харламп Огородников');
    }
    public function testGenDetect594()
    {
        $this->object->setFirstName('Макар');
        $this->object->setSecondName('Огурцов');
        $this->assertEquals('1-Макар Огурцов', $this->object->genderAutoDetect().'-Макар Огурцов');
    }
    public function testGenDetect595()
    {
        $this->object->setFirstName('Ермил');
        $this->object->setSecondName('Озеров');
        $this->assertEquals('1-Ермил Озеров', $this->object->genderAutoDetect().'-Ермил Озеров');
    }
    public function testGenDetect596()
    {
        $this->object->setFirstName('Юлиан');
        $this->object->setSecondName('Ольховский');
        $this->assertEquals('1-Юлиан Ольховский', $this->object->genderAutoDetect().'-Юлиан Ольховский');
    }
    public function testGenDetect597()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setSecondName('Онегин');
        $this->assertEquals('1-Иосиф Онегин', $this->object->genderAutoDetect().'-Иосиф Онегин');
    }
    public function testGenDetect598()
    {
        $this->object->setFirstName('Тимур');
        $this->object->setSecondName('Опокин');
        $this->assertEquals('1-Тимур Опокин', $this->object->genderAutoDetect().'-Тимур Опокин');
    }
    public function testGenDetect599()
    {
        $this->object->setFirstName('Захар');
        $this->object->setSecondName('Орлов');
        $this->assertEquals('1-Захар Орлов', $this->object->genderAutoDetect().'-Захар Орлов');
    }
    public function testGenDetect600()
    {
        $this->object->setFirstName('Изот');
        $this->object->setSecondName('Осинцев');
        $this->assertEquals('1-Изот Осинцев', $this->object->genderAutoDetect().'-Изот Осинцев');
    }
    public function testGenDetect601()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setSecondName('Остальцев');
        $this->assertEquals('1-Исаак Остальцев', $this->object->genderAutoDetect().'-Исаак Остальцев');
    }
    public function testGenDetect602()
    {
        $this->object->setFirstName('Артём');
        $this->object->setSecondName('Остапюк');
        $this->assertEquals('1-Артём Остапюк', $this->object->genderAutoDetect().'-Артём Остапюк');
    }
    public function testGenDetect603()
    {
        $this->object->setFirstName('Никон');
        $this->object->setSecondName('Островерхов');
        $this->assertEquals('1-Никон Островерхов', $this->object->genderAutoDetect().'-Никон Островерхов');
    }
    public function testGenDetect604()
    {
        $this->object->setFirstName('Антип');
        $this->object->setSecondName('Островский');
        $this->assertEquals('1-Антип Островский', $this->object->genderAutoDetect().'-Антип Островский');
    }
    public function testGenDetect605()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setSecondName('Павлов');
        $this->assertEquals('1-Мстислав Павлов', $this->object->genderAutoDetect().'-Мстислав Павлов');
    }
    public function testGenDetect606()
    {
        $this->object->setFirstName('Осип');
        $this->object->setSecondName('Панарин');
        $this->assertEquals('1-Осип Панарин', $this->object->genderAutoDetect().'-Осип Панарин');
    }
    public function testGenDetect607()
    {
        $this->object->setFirstName('Тимур');
        $this->object->setSecondName('Панин');
        $this->assertEquals('1-Тимур Панин', $this->object->genderAutoDetect().'-Тимур Панин');
    }
    public function testGenDetect608()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setSecondName('Панкин');
        $this->assertEquals('1-Даниил Панкин', $this->object->genderAutoDetect().'-Даниил Панкин');
    }
    public function testGenDetect609()
    {
        $this->object->setFirstName('Денис');
        $this->object->setSecondName('Панков');
        $this->assertEquals('1-Денис Панков', $this->object->genderAutoDetect().'-Денис Панков');
    }
    public function testGenDetect610()
    {
        $this->object->setFirstName('Трифон');
        $this->object->setSecondName('Панфилов');
        $this->assertEquals('1-Трифон Панфилов', $this->object->genderAutoDetect().'-Трифон Панфилов');
    }
    public function testGenDetect611()
    {
        $this->object->setFirstName('Никита');
        $this->object->setSecondName('Панькив');
        $this->assertEquals('1-Никита Панькив', $this->object->genderAutoDetect().'-Никита Панькив');
    }
    public function testGenDetect612()
    {
        $this->object->setFirstName('Юрий');
        $this->object->setSecondName('Папанов');
        $this->assertEquals('1-Юрий Папанов', $this->object->genderAutoDetect().'-Юрий Папанов');
    }
    public function testGenDetect613()
    {
        $this->object->setFirstName('Остап');
        $this->object->setSecondName('Пахомов');
        $this->assertEquals('1-Остап Пахомов', $this->object->genderAutoDetect().'-Остап Пахомов');
    }
    public function testGenDetect614()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Пенкин');
        $this->assertEquals('1-Архип Пенкин', $this->object->genderAutoDetect().'-Архип Пенкин');
    }
    public function testGenDetect615()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setSecondName('Первак');
        $this->assertEquals('1-Евдоким Первак', $this->object->genderAutoDetect().'-Евдоким Первак');
    }
    public function testGenDetect616()
    {
        $this->object->setFirstName('Фока');
        $this->object->setSecondName('Переверзев');
        $this->assertEquals('1-Фока Переверзев', $this->object->genderAutoDetect().'-Фока Переверзев');
    }
    public function testGenDetect617()
    {
        $this->object->setFirstName('Геннадий');
        $this->object->setSecondName('Перевёртов');
        $this->assertEquals('1-Геннадий Перевёртов', $this->object->genderAutoDetect().'-Геннадий Перевёртов');
    }
    public function testGenDetect618()
    {
        $this->object->setFirstName('Богдан');
        $this->object->setSecondName('Пересторонин');
        $this->assertEquals('1-Богдан Пересторонин', $this->object->genderAutoDetect().'-Богдан Пересторонин');
    }
    public function testGenDetect619()
    {
        $this->object->setFirstName('Николай');
        $this->object->setSecondName('Перехваткин');
        $this->assertEquals('1-Николай Перехваткин', $this->object->genderAutoDetect().'-Николай Перехваткин');
    }
    public function testGenDetect620()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setSecondName('Перов');
        $this->assertEquals('1-Сергей Перов', $this->object->genderAutoDetect().'-Сергей Перов');
    }
    public function testGenDetect621()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setSecondName('Перьмяков');
        $this->assertEquals('1-Феодосий Перьмяков', $this->object->genderAutoDetect().'-Феодосий Перьмяков');
    }
    public function testGenDetect622()
    {
        $this->object->setFirstName('Нарцис');
        $this->object->setSecondName('Пестов');
        $this->assertEquals('1-Нарцис Пестов', $this->object->genderAutoDetect().'-Нарцис Пестов');
    }
    public function testGenDetect623()
    {
        $this->object->setFirstName('Отто');
        $this->object->setSecondName('Петров');
        $this->assertEquals('1-Отто Петров', $this->object->genderAutoDetect().'-Отто Петров');
    }
    public function testGenDetect624()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setSecondName('Петухов');
        $this->assertEquals('1-Терентий Петухов', $this->object->genderAutoDetect().'-Терентий Петухов');
    }
    public function testGenDetect625()
    {
        $this->object->setFirstName('Виталий');
        $this->object->setSecondName('Печеников');
        $this->assertEquals('1-Виталий Печеников', $this->object->genderAutoDetect().'-Виталий Печеников');
    }
    public function testGenDetect626()
    {
        $this->object->setFirstName('Авдей');
        $this->object->setSecondName('Пивоваров');
        $this->assertEquals('1-Авдей Пивоваров', $this->object->genderAutoDetect().'-Авдей Пивоваров');
    }
    public function testGenDetect627()
    {
        $this->object->setFirstName('Созонт');
        $this->object->setSecondName('Пирогов');
        $this->assertEquals('1-Созонт Пирогов', $this->object->genderAutoDetect().'-Созонт Пирогов');
    }
    public function testGenDetect628()
    {
        $this->object->setFirstName('Максим');
        $this->object->setSecondName('Пирожков');
        $this->assertEquals('1-Максим Пирожков', $this->object->genderAutoDetect().'-Максим Пирожков');
    }
    public function testGenDetect629()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setSecondName('Пичугин');
        $this->assertEquals('1-Тихон Пичугин', $this->object->genderAutoDetect().'-Тихон Пичугин');
    }
    public function testGenDetect630()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setSecondName('Погодин');
        $this->assertEquals('1-Вячеслав Погодин', $this->object->genderAutoDetect().'-Вячеслав Погодин');
    }
    public function testGenDetect631()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setSecondName('Погребнов');
        $this->assertEquals('1-Феодосий Погребнов', $this->object->genderAutoDetect().'-Феодосий Погребнов');
    }
    public function testGenDetect632()
    {
        $this->object->setFirstName('Евгений');
        $this->object->setSecondName('Подшивалов');
        $this->assertEquals('1-Евгений Подшивалов', $this->object->genderAutoDetect().'-Евгений Подшивалов');
    }
    public function testGenDetect633()
    {
        $this->object->setFirstName('Гурий');
        $this->object->setSecondName('Поздняков');
        $this->assertEquals('1-Гурий Поздняков', $this->object->genderAutoDetect().'-Гурий Поздняков');
    }
    public function testGenDetect634()
    {
        $this->object->setFirstName('Минай');
        $this->object->setSecondName('Покровский');
        $this->assertEquals('1-Минай Покровский', $this->object->genderAutoDetect().'-Минай Покровский');
    }
    public function testGenDetect635()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setSecondName('Поливанов');
        $this->assertEquals('1-Зиновий Поливанов', $this->object->genderAutoDetect().'-Зиновий Поливанов');
    }
    public function testGenDetect636()
    {
        $this->object->setFirstName('Сергий');
        $this->object->setSecondName('Полушин');
        $this->assertEquals('1-Сергий Полушин', $this->object->genderAutoDetect().'-Сергий Полушин');
    }
    public function testGenDetect637()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setSecondName('Полищук');
        $this->assertEquals('1-Дмитрий Полищук', $this->object->genderAutoDetect().'-Дмитрий Полищук');
    }
    public function testGenDetect638()
    {
        $this->object->setFirstName('Гордей');
        $this->object->setSecondName('Полторак');
        $this->assertEquals('1-Гордей Полторак', $this->object->genderAutoDetect().'-Гордей Полторак');
    }
    public function testGenDetect639()
    {
        $this->object->setFirstName('Афанасий');
        $this->object->setSecondName('Поляков');
        $this->assertEquals('1-Афанасий Поляков', $this->object->genderAutoDetect().'-Афанасий Поляков');
    }
    public function testGenDetect640()
    {
        $this->object->setFirstName('Левон');
        $this->object->setSecondName('Поникаров');
        $this->assertEquals('1-Левон Поникаров', $this->object->genderAutoDetect().'-Левон Поникаров');
    }
    public function testGenDetect641()
    {
        $this->object->setFirstName('Борис');
        $this->object->setSecondName('Пономарёв');
        $this->assertEquals('1-Борис Пономарёв', $this->object->genderAutoDetect().'-Борис Пономарёв');
    }
    public function testGenDetect642()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Пончиков');
        $this->assertEquals('1-Пантелей Пончиков', $this->object->genderAutoDetect().'-Пантелей Пончиков');
    }
    public function testGenDetect643()
    {
        $this->object->setFirstName('Лаврентий');
        $this->object->setSecondName('Попов');
        $this->assertEquals('1-Лаврентий Попов', $this->object->genderAutoDetect().'-Лаврентий Попов');
    }
    public function testGenDetect644()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setSecondName('Попырин');
        $this->assertEquals('1-Ростислав Попырин', $this->object->genderAutoDetect().'-Ростислав Попырин');
    }
    public function testGenDetect645()
    {
        $this->object->setFirstName('Прохор');
        $this->object->setSecondName('Посохов');
        $this->assertEquals('1-Прохор Посохов', $this->object->genderAutoDetect().'-Прохор Посохов');
    }
    public function testGenDetect646()
    {
        $this->object->setFirstName('Родион');
        $this->object->setSecondName('Потапов');
        $this->assertEquals('1-Родион Потапов', $this->object->genderAutoDetect().'-Родион Потапов');
    }
    public function testGenDetect647()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setSecondName('Потёмкин');
        $this->assertEquals('1-Парфений Потёмкин', $this->object->genderAutoDetect().'-Парфений Потёмкин');
    }
    public function testGenDetect648()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setSecondName('Праздников');
        $this->assertEquals('1-Чеслав Праздников', $this->object->genderAutoDetect().'-Чеслав Праздников');
    }
    public function testGenDetect649()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setSecondName('Примаков');
        $this->assertEquals('1-Тимофей Примаков', $this->object->genderAutoDetect().'-Тимофей Примаков');
    }
    public function testGenDetect650()
    {
        $this->object->setFirstName('Илья');
        $this->object->setSecondName('Приходько');
        $this->assertEquals('1-Илья Приходько', $this->object->genderAutoDetect().'-Илья Приходько');
    }
    public function testGenDetect651()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setSecondName('Проничев');
        $this->assertEquals('1-Ростислав Проничев', $this->object->genderAutoDetect().'-Ростислав Проничев');
    }
    public function testGenDetect652()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Протасов');
        $this->assertEquals('1-Роман Протасов', $this->object->genderAutoDetect().'-Роман Протасов');
    }
    public function testGenDetect653()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setSecondName('Прохоров');
        $this->assertEquals('1-Ярослав Прохоров', $this->object->genderAutoDetect().'-Ярослав Прохоров');
    }
    public function testGenDetect654()
    {
        $this->object->setFirstName('Корнелий');
        $this->object->setSecondName('Пугачёв');
        $this->assertEquals('1-Корнелий Пугачёв', $this->object->genderAutoDetect().'-Корнелий Пугачёв');
    }
    public function testGenDetect655()
    {
        $this->object->setFirstName('Никанор');
        $this->object->setSecondName('Пугин');
        $this->assertEquals('1-Никанор Пугин', $this->object->genderAutoDetect().'-Никанор Пугин');
    }
    public function testGenDetect656()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setSecondName('Пузанов');
        $this->assertEquals('1-Вилор Пузанов', $this->object->genderAutoDetect().'-Вилор Пузанов');
    }
    public function testGenDetect657()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setSecondName('Путилин');
        $this->assertEquals('1-Ксенофонт Путилин', $this->object->genderAutoDetect().'-Ксенофонт Путилин');
    }
    public function testGenDetect658()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setSecondName('Путин');
        $this->assertEquals('1-Ксенофонт Путин', $this->object->genderAutoDetect().'-Ксенофонт Путин');
    }
    public function testGenDetect659()
    {
        $this->object->setFirstName('Остап');
        $this->object->setSecondName('Путятин');
        $this->assertEquals('1-Остап Путятин', $this->object->genderAutoDetect().'-Остап Путятин');
    }
    public function testGenDetect660()
    {
        $this->object->setFirstName('Игнатий');
        $this->object->setSecondName('Пушкин');
        $this->assertEquals('1-Игнатий Пушкин', $this->object->genderAutoDetect().'-Игнатий Пушкин');
    }
    public function testGenDetect661()
    {
        $this->object->setFirstName('Никон');
        $this->object->setSecondName('Пыжалов');
        $this->assertEquals('1-Никон Пыжалов', $this->object->genderAutoDetect().'-Никон Пыжалов');
    }
    public function testGenDetect662()
    {
        $this->object->setFirstName('Мокей');
        $this->object->setSecondName('Пырьев');
        $this->assertEquals('1-Мокей Пырьев', $this->object->genderAutoDetect().'-Мокей Пырьев');
    }
    public function testGenDetect663()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setSecondName('Рабинович');
        $this->assertEquals('1-Нестер Рабинович', $this->object->genderAutoDetect().'-Нестер Рабинович');
    }
    public function testGenDetect664()
    {
        $this->object->setFirstName('Устин');
        $this->object->setSecondName('Разин');
        $this->assertEquals('1-Устин Разин', $this->object->genderAutoDetect().'-Устин Разин');
    }
    public function testGenDetect665()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setSecondName('Разуваев');
        $this->assertEquals('1-Владлен Разуваев', $this->object->genderAutoDetect().'-Владлен Разуваев');
    }
    public function testGenDetect666()
    {
        $this->object->setFirstName('Эдгард');
        $this->object->setSecondName('Распопов');
        $this->assertEquals('1-Эдгард Распопов', $this->object->genderAutoDetect().'-Эдгард Распопов');
    }
    public function testGenDetect667()
    {
        $this->object->setFirstName('Парфён');
        $this->object->setSecondName('Распутин');
        $this->assertEquals('1-Парфён Распутин', $this->object->genderAutoDetect().'-Парфён Распутин');
    }
    public function testGenDetect668()
    {
        $this->object->setFirstName('Карп');
        $this->object->setSecondName('Расторгуев');
        $this->assertEquals('1-Карп Расторгуев', $this->object->genderAutoDetect().'-Карп Расторгуев');
    }
    public function testGenDetect669()
    {
        $this->object->setFirstName('Гаврила');
        $this->object->setSecondName('Ремизов');
        $this->assertEquals('1-Гаврила Ремизов', $this->object->genderAutoDetect().'-Гаврила Ремизов');
    }
    public function testGenDetect670()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Репин');
        $this->assertEquals('1-Роман Репин', $this->object->genderAutoDetect().'-Роман Репин');
    }
    public function testGenDetect671()
    {
        $this->object->setFirstName('Фока');
        $this->object->setSecondName('Решетилов');
        $this->assertEquals('1-Фока Решетилов', $this->object->genderAutoDetect().'-Фока Решетилов');
    }
    public function testGenDetect672()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setSecondName('Решетников');
        $this->assertEquals('1-Евстафий Решетников', $this->object->genderAutoDetect().'-Евстафий Решетников');
    }
    public function testGenDetect673()
    {
        $this->object->setFirstName('Куприян');
        $this->object->setSecondName('Родзянко');
        $this->assertEquals('1-Куприян Родзянко', $this->object->genderAutoDetect().'-Куприян Родзянко');
    }
    public function testGenDetect674()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setSecondName('Рогачёв');
        $this->assertEquals('1-Касьян Рогачёв', $this->object->genderAutoDetect().'-Касьян Рогачёв');
    }
    public function testGenDetect675()
    {
        $this->object->setFirstName('Андрей');
        $this->object->setSecondName('Рогов');
        $this->assertEquals('1-Андрей Рогов', $this->object->genderAutoDetect().'-Андрей Рогов');
    }
    public function testGenDetect676()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setSecondName('Рогозин');
        $this->assertEquals('1-Дмитрий Рогозин', $this->object->genderAutoDetect().'-Дмитрий Рогозин');
    }
    public function testGenDetect677()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setSecondName('Рожков');
        $this->assertEquals('1-Гертруд Рожков', $this->object->genderAutoDetect().'-Гертруд Рожков');
    }
    public function testGenDetect678()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setSecondName('Рокоссовский');
        $this->assertEquals('1-Руслан Рокоссовский', $this->object->genderAutoDetect().'-Руслан Рокоссовский');
    }
    public function testGenDetect679()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setSecondName('Романов');
        $this->assertEquals('1-Григорий Романов', $this->object->genderAutoDetect().'-Григорий Романов');
    }
    public function testGenDetect680()
    {
        $this->object->setFirstName('Антип');
        $this->object->setSecondName('Ростов');
        $this->assertEquals('1-Антип Ростов', $this->object->genderAutoDetect().'-Антип Ростов');
    }
    public function testGenDetect681()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setSecondName('Ростовцев');
        $this->assertEquals('1-Владлен Ростовцев', $this->object->genderAutoDetect().'-Владлен Ростовцев');
    }
    public function testGenDetect682()
    {
        $this->object->setFirstName('Аверьян');
        $this->object->setSecondName('Рудавинa');
        $this->assertEquals('1-Аверьян Рудавинa', $this->object->genderAutoDetect().'-Аверьян Рудавинa');
    }
    public function testGenDetect683()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setSecondName('Румянцев');
        $this->assertEquals('1-Тарас Румянцев', $this->object->genderAutoDetect().'-Тарас Румянцев');
    }
    public function testGenDetect684()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setSecondName('Рунов');
        $this->assertEquals('1-Владислав Рунов', $this->object->genderAutoDetect().'-Владислав Рунов');
    }
    public function testGenDetect685()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setSecondName('Русаков');
        $this->assertEquals('1-Ксенофонт Русаков', $this->object->genderAutoDetect().'-Ксенофонт Русаков');
    }
    public function testGenDetect686()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setSecondName('Руских');
        $this->assertEquals('1-Лазарь Руских', $this->object->genderAutoDetect().'-Лазарь Руских');
    }
    public function testGenDetect687()
    {
        $this->object->setFirstName('Ермил');
        $this->object->setSecondName('Русских');
        $this->assertEquals('1-Ермил Русских', $this->object->genderAutoDetect().'-Ермил Русских');
    }
    public function testGenDetect688()
    {
        $this->object->setFirstName('Эдгард');
        $this->object->setSecondName('Ручкин');
        $this->assertEquals('1-Эдгард Ручкин', $this->object->genderAutoDetect().'-Эдгард Ручкин');
    }
    public function testGenDetect689()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setSecondName('Рыбалкин');
        $this->assertEquals('1-Юлий Рыбалкин', $this->object->genderAutoDetect().'-Юлий Рыбалкин');
    }
    public function testGenDetect690()
    {
        $this->object->setFirstName('Ян');
        $this->object->setSecondName('Рыжанов');
        $this->assertEquals('1-Ян Рыжанов', $this->object->genderAutoDetect().'-Ян Рыжанов');
    }
    public function testGenDetect691()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setSecondName('Рыжков');
        $this->assertEquals('1-Ефимий Рыжков', $this->object->genderAutoDetect().'-Ефимий Рыжков');
    }
    public function testGenDetect692()
    {
        $this->object->setFirstName('Никита');
        $this->object->setSecondName('Рыжов');
        $this->assertEquals('1-Никита Рыжов', $this->object->genderAutoDetect().'-Никита Рыжов');
    }
    public function testGenDetect693()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setSecondName('Рытин');
        $this->assertEquals('1-Моисей Рытин', $this->object->genderAutoDetect().'-Моисей Рытин');
    }
    public function testGenDetect694()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Рыченков');
        $this->assertEquals('1-Харламп Рыченков', $this->object->genderAutoDetect().'-Харламп Рыченков');
    }
    public function testGenDetect695()
    {
        $this->object->setFirstName('Макар');
        $this->object->setSecondName('Рябков');
        $this->assertEquals('1-Макар Рябков', $this->object->genderAutoDetect().'-Макар Рябков');
    }
    public function testGenDetect696()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setSecondName('Рябов');
        $this->assertEquals('1-Прокофий Рябов', $this->object->genderAutoDetect().'-Прокофий Рябов');
    }
    public function testGenDetect697()
    {
        $this->object->setFirstName('Филат');
        $this->object->setSecondName('Ряхин');
        $this->assertEquals('1-Филат Ряхин', $this->object->genderAutoDetect().'-Филат Ряхин');
    }
    public function testGenDetect698()
    {
        $this->object->setFirstName('Денис');
        $this->object->setSecondName('Сабитов');
        $this->assertEquals('1-Денис Сабитов', $this->object->genderAutoDetect().'-Денис Сабитов');
    }
    public function testGenDetect699()
    {
        $this->object->setFirstName('Георгий');
        $this->object->setSecondName('Савасин');
        $this->assertEquals('1-Георгий Савасин', $this->object->genderAutoDetect().'-Георгий Савасин');
    }
    public function testGenDetect700()
    {
        $this->object->setFirstName('Вадим');
        $this->object->setSecondName('Савинков');
        $this->assertEquals('1-Вадим Савинков', $this->object->genderAutoDetect().'-Вадим Савинков');
    }
    public function testGenDetect701()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setSecondName('Савенков');
        $this->assertEquals('1-Анатолий Савенков', $this->object->genderAutoDetect().'-Анатолий Савенков');
    }
    public function testGenDetect702()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setSecondName('Саврасов');
        $this->assertEquals('1-Венедикт Саврасов', $this->object->genderAutoDetect().'-Венедикт Саврасов');
    }
    public function testGenDetect703()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setSecondName('Садыков');
        $this->assertEquals('1-Исаак Садыков', $this->object->genderAutoDetect().'-Исаак Садыков');
    }
    public function testGenDetect704()
    {
        $this->object->setFirstName('Леонтий');
        $this->object->setSecondName('Сазонов');
        $this->assertEquals('1-Леонтий Сазонов', $this->object->genderAutoDetect().'-Леонтий Сазонов');
    }
    public function testGenDetect705()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setSecondName('Салко');
        $this->assertEquals('1-Мефодий Салко', $this->object->genderAutoDetect().'-Мефодий Салко');
    }
    public function testGenDetect706()
    {
        $this->object->setFirstName('Кондратий');
        $this->object->setSecondName('Сальков');
        $this->assertEquals('1-Кондратий Сальков', $this->object->genderAutoDetect().'-Кондратий Сальков');
    }
    public function testGenDetect707()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Сальников');
        $this->assertEquals('1-Роман Сальников', $this->object->genderAutoDetect().'-Роман Сальников');
    }
    public function testGenDetect708()
    {
        $this->object->setFirstName('Прохор');
        $this->object->setSecondName('Самойлов');
        $this->assertEquals('1-Прохор Самойлов', $this->object->genderAutoDetect().'-Прохор Самойлов');
    }
    public function testGenDetect709()
    {
        $this->object->setFirstName('Денис');
        $this->object->setSecondName('Самохин');
        $this->assertEquals('1-Денис Самохин', $this->object->genderAutoDetect().'-Денис Самохин');
    }
    public function testGenDetect710()
    {
        $this->object->setFirstName('Авдей');
        $this->object->setSecondName('Самсонов');
        $this->assertEquals('1-Авдей Самсонов', $this->object->genderAutoDetect().'-Авдей Самсонов');
    }
    public function testGenDetect711()
    {
        $this->object->setFirstName('Станислав');
        $this->object->setSecondName('Санников');
        $this->assertEquals('1-Станислав Санников', $this->object->genderAutoDetect().'-Станислав Санников');
    }
    public function testGenDetect712()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setSecondName('Сапогов');
        $this->assertEquals('1-Каллистрат Сапогов', $this->object->genderAutoDetect().'-Каллистрат Сапогов');
    }
    public function testGenDetect713()
    {
        $this->object->setFirstName('Адам');
        $this->object->setSecondName('Сапожников');
        $this->assertEquals('1-Адам Сапожников', $this->object->genderAutoDetect().'-Адам Сапожников');
    }
    public function testGenDetect714()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setSecondName('Сафиюлин');
        $this->assertEquals('1-Панкрат Сафиюлин', $this->object->genderAutoDetect().'-Панкрат Сафиюлин');
    }
    public function testGenDetect715()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setSecondName('Сахаров');
        $this->assertEquals('1-Михаил Сахаров', $this->object->genderAutoDetect().'-Михаил Сахаров');
    }
    public function testGenDetect716()
    {
        $this->object->setFirstName('Куприян');
        $this->object->setSecondName('Свалов');
        $this->assertEquals('1-Куприян Свалов', $this->object->genderAutoDetect().'-Куприян Свалов');
    }
    public function testGenDetect717()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setSecondName('Северинов');
        $this->assertEquals('1-Герасим Северинов', $this->object->genderAutoDetect().'-Герасим Северинов');
    }
    public function testGenDetect718()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setSecondName('Севостьянов');
        $this->assertEquals('1-Фадей Севостьянов', $this->object->genderAutoDetect().'-Фадей Севостьянов');
    }
    public function testGenDetect719()
    {
        $this->object->setFirstName('Кондратий');
        $this->object->setSecondName('Седельников');
        $this->assertEquals('1-Кондратий Седельников', $this->object->genderAutoDetect().'-Кондратий Седельников');
    }
    public function testGenDetect720()
    {
        $this->object->setFirstName('Гавриил');
        $this->object->setSecondName('Седов');
        $this->assertEquals('1-Гавриил Седов', $this->object->genderAutoDetect().'-Гавриил Седов');
    }
    public function testGenDetect721()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setSecondName('Селезнёв');
        $this->assertEquals('1-Фадей Селезнёв', $this->object->genderAutoDetect().'-Фадей Селезнёв');
    }
    public function testGenDetect722()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setSecondName('Селиванов');
        $this->assertEquals('1-Руслан Селиванов', $this->object->genderAutoDetect().'-Руслан Селиванов');
    }
    public function testGenDetect723()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setSecondName('Семёнов');
        $this->assertEquals('1-Сидор Семёнов', $this->object->genderAutoDetect().'-Сидор Семёнов');
    }
    public function testGenDetect724()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setSecondName('Семичаевский');
        $this->assertEquals('1-Кузьма Семичаевский', $this->object->genderAutoDetect().'-Кузьма Семичаевский');
    }
    public function testGenDetect725()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setSecondName('Сенькин');
        $this->assertEquals('1-Порфир Сенькин', $this->object->genderAutoDetect().'-Порфир Сенькин');
    }
    public function testGenDetect726()
    {
        $this->object->setFirstName('Изот');
        $this->object->setSecondName('Серебров');
        $this->assertEquals('1-Изот Серебров', $this->object->genderAutoDetect().'-Изот Серебров');
    }
    public function testGenDetect727()
    {
        $this->object->setFirstName('Димитрий');
        $this->object->setSecondName('Серебряков');
        $this->assertEquals('1-Димитрий Серебряков', $this->object->genderAutoDetect().'-Димитрий Серебряков');
    }
    public function testGenDetect728()
    {
        $this->object->setFirstName('Нил');
        $this->object->setSecondName('Серёгин');
        $this->assertEquals('1-Нил Серёгин', $this->object->genderAutoDetect().'-Нил Серёгин');
    }
    public function testGenDetect729()
    {
        $this->object->setFirstName('Наум');
        $this->object->setSecondName('Серов');
        $this->assertEquals('1-Наум Серов', $this->object->genderAutoDetect().'-Наум Серов');
    }
    public function testGenDetect730()
    {
        $this->object->setFirstName('Клим');
        $this->object->setSecondName('Серпионов');
        $this->assertEquals('1-Клим Серпионов', $this->object->genderAutoDetect().'-Клим Серпионов');
    }
    public function testGenDetect731()
    {
        $this->object->setFirstName('Родион');
        $this->object->setSecondName('Семянин');
        $this->assertEquals('1-Родион Семянин', $this->object->genderAutoDetect().'-Родион Семянин');
    }
    public function testGenDetect732()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setSecondName('Сёмин');
        $this->assertEquals('1-Никифор Сёмин', $this->object->genderAutoDetect().'-Никифор Сёмин');
    }
    public function testGenDetect733()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setSecondName('Серёгин');
        $this->assertEquals('1-Митрофан Серёгин', $this->object->genderAutoDetect().'-Митрофан Серёгин');
    }
    public function testGenDetect734()
    {
        $this->object->setFirstName('Влас');
        $this->object->setSecondName('Сеченов');
        $this->assertEquals('1-Влас Сеченов', $this->object->genderAutoDetect().'-Влас Сеченов');
    }
    public function testGenDetect735()
    {
        $this->object->setFirstName('Влас');
        $this->object->setSecondName('Сиваков');
        $this->assertEquals('1-Влас Сиваков', $this->object->genderAutoDetect().'-Влас Сиваков');
    }
    public function testGenDetect736()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setSecondName('Сигаев');
        $this->assertEquals('1-Виктор Сигаев', $this->object->genderAutoDetect().'-Виктор Сигаев');
    }
    public function testGenDetect737()
    {
        $this->object->setFirstName('Нефёд');
        $this->object->setSecondName('Сигачёв');
        $this->assertEquals('1-Нефёд Сигачёв', $this->object->genderAutoDetect().'-Нефёд Сигачёв');
    }
    public function testGenDetect738()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Сидоров');
        $this->assertEquals('1-Харламп Сидоров', $this->object->genderAutoDetect().'-Харламп Сидоров');
    }
    public function testGenDetect739()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setSecondName('Сизов');
        $this->assertEquals('1-Феодосий Сизов', $this->object->genderAutoDetect().'-Феодосий Сизов');
    }
    public function testGenDetect740()
    {
        $this->object->setFirstName('Устин');
        $this->object->setSecondName('Сизый');
        $this->assertEquals('1-Устин Сизый', $this->object->genderAutoDetect().'-Устин Сизый');
    }
    public function testGenDetect741()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Силиванов');
        $this->assertEquals('1-Харламп Силиванов', $this->object->genderAutoDetect().'-Харламп Силиванов');
    }
    public function testGenDetect742()
    {
        $this->object->setFirstName('Прокоп');
        $this->object->setSecondName('Силин');
        $this->assertEquals('1-Прокоп Силин', $this->object->genderAutoDetect().'-Прокоп Силин');
    }
    public function testGenDetect743()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setSecondName('Сильвестров');
        $this->assertEquals('1-Еремей Сильвестров', $this->object->genderAutoDetect().'-Еремей Сильвестров');
    }
    public function testGenDetect744()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setSecondName('Силаев');
        $this->assertEquals('1-Чеслав Силаев', $this->object->genderAutoDetect().'-Чеслав Силаев');
    }
    public function testGenDetect745()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setSecondName('Силиванов');
        $this->assertEquals('1-Кондрат Силиванов', $this->object->genderAutoDetect().'-Кондрат Силиванов');
    }
    public function testGenDetect746()
    {
        $this->object->setFirstName('Устин');
        $this->object->setSecondName('Скворцов');
        $this->assertEquals('1-Устин Скворцов', $this->object->genderAutoDetect().'-Устин Скворцов');
    }
    public function testGenDetect747()
    {
        $this->object->setFirstName('Климентий');
        $this->object->setSecondName('Скрябин');
        $this->assertEquals('1-Климентий Скрябин', $this->object->genderAutoDetect().'-Климентий Скрябин');
    }
    public function testGenDetect748()
    {
        $this->object->setFirstName('Никон');
        $this->object->setSecondName('Скоробогатов');
        $this->assertEquals('1-Никон Скоробогатов', $this->object->genderAutoDetect().'-Никон Скоробогатов');
    }
    public function testGenDetect749()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Скороходов');
        $this->assertEquals('1-Роман Скороходов', $this->object->genderAutoDetect().'-Роман Скороходов');
    }
    public function testGenDetect750()
    {
        $this->object->setFirstName('Феофан');
        $this->object->setSecondName('Скуратов');
        $this->assertEquals('1-Феофан Скуратов', $this->object->genderAutoDetect().'-Феофан Скуратов');
    }
    public function testGenDetect751()
    {
        $this->object->setFirstName('Станислав');
        $this->object->setSecondName('Слобожанин');
        $this->assertEquals('1-Станислав Слобожанин', $this->object->genderAutoDetect().'-Станислав Слобожанин');
    }
    public function testGenDetect752()
    {
        $this->object->setFirstName('Онисим');
        $this->object->setSecondName('Случевский');
        $this->assertEquals('1-Онисим Случевский', $this->object->genderAutoDetect().'-Онисим Случевский');
    }
    public function testGenDetect753()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Смирнитский');
        $this->assertEquals('1-Пантелей Смирнитский', $this->object->genderAutoDetect().'-Пантелей Смирнитский');
    }
    public function testGenDetect754()
    {
        $this->object->setFirstName('Онуфрий');
        $this->object->setSecondName('Смирнов');
        $this->assertEquals('1-Онуфрий Смирнов', $this->object->genderAutoDetect().'-Онуфрий Смирнов');
    }
    public function testGenDetect755()
    {
        $this->object->setFirstName('Владимир');
        $this->object->setSecondName('Сметанин');
        $this->assertEquals('1-Владимир Сметанин', $this->object->genderAutoDetect().'-Владимир Сметанин');
    }
    public function testGenDetect756()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Смолин');
        $this->assertEquals('1-Климент Смолин', $this->object->genderAutoDetect().'-Климент Смолин');
    }
    public function testGenDetect757()
    {
        $this->object->setFirstName('Артём');
        $this->object->setSecondName('Смолянинов');
        $this->assertEquals('1-Артём Смолянинов', $this->object->genderAutoDetect().'-Артём Смолянинов');
    }
    public function testGenDetect758()
    {
        $this->object->setFirstName('Калина');
        $this->object->setSecondName('Снаткин');
        $this->assertEquals('1-Калина Снаткин', $this->object->genderAutoDetect().'-Калина Снаткин');
    }
    public function testGenDetect759()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setSecondName('Снегирёв');
        $this->assertEquals('1-Валериан Снегирёв', $this->object->genderAutoDetect().'-Валериан Снегирёв');
    }
    public function testGenDetect760()
    {
        $this->object->setFirstName('Нил');
        $this->object->setSecondName('Снетков');
        $this->assertEquals('1-Нил Снетков', $this->object->genderAutoDetect().'-Нил Снетков');
    }
    public function testGenDetect761()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setSecondName('Соболев');
        $this->assertEquals('1-Терентий Соболев', $this->object->genderAutoDetect().'-Терентий Соболев');
    }
    public function testGenDetect762()
    {
        $this->object->setFirstName('Феликс');
        $this->object->setSecondName('Соболевский');
        $this->assertEquals('1-Феликс Соболевский', $this->object->genderAutoDetect().'-Феликс Соболевский');
    }
    public function testGenDetect763()
    {
        $this->object->setFirstName('Ерофей');
        $this->object->setSecondName('Соколов');
        $this->assertEquals('1-Ерофей Соколов', $this->object->genderAutoDetect().'-Ерофей Соколов');
    }
    public function testGenDetect764()
    {
        $this->object->setFirstName('Кирила');
        $this->object->setSecondName('Солдатов');
        $this->assertEquals('1-Кирила Солдатов', $this->object->genderAutoDetect().'-Кирила Солдатов');
    }
    public function testGenDetect765()
    {
        $this->object->setFirstName('Андрей');
        $this->object->setSecondName('Соловьёв');
        $this->assertEquals('1-Андрей Соловьёв', $this->object->genderAutoDetect().'-Андрей Соловьёв');
    }
    public function testGenDetect766()
    {
        $this->object->setFirstName('Куприян');
        $this->object->setSecondName('Солодников');
        $this->assertEquals('1-Куприян Солодников', $this->object->genderAutoDetect().'-Куприян Солодников');
    }
    public function testGenDetect767()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setSecondName('Соломин');
        $this->assertEquals('1-Михаил Соломин', $this->object->genderAutoDetect().'-Михаил Соломин');
    }
    public function testGenDetect768()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setSecondName('Соломонов');
        $this->assertEquals('1-Панкрат Соломонов', $this->object->genderAutoDetect().'-Панкрат Соломонов');
    }
    public function testGenDetect769()
    {
        $this->object->setFirstName('Кирилл');
        $this->object->setSecondName('Сопов');
        $this->assertEquals('1-Кирилл Сопов', $this->object->genderAutoDetect().'-Кирилл Сопов');
    }
    public function testGenDetect770()
    {
        $this->object->setFirstName('Куприян');
        $this->object->setSecondName('Сорокин');
        $this->assertEquals('1-Куприян Сорокин', $this->object->genderAutoDetect().'-Куприян Сорокин');
    }
    public function testGenDetect771()
    {
        $this->object->setFirstName('Михей');
        $this->object->setSecondName('Спанов');
        $this->assertEquals('1-Михей Спанов', $this->object->genderAutoDetect().'-Михей Спанов');
    }
    public function testGenDetect772()
    {
        $this->object->setFirstName('Исидор');
        $this->object->setSecondName('Стариков');
        $this->assertEquals('1-Исидор Стариков', $this->object->genderAutoDetect().'-Исидор Стариков');
    }
    public function testGenDetect773()
    {
        $this->object->setFirstName('Денис');
        $this->object->setSecondName('Староверов');
        $this->assertEquals('1-Денис Староверов', $this->object->genderAutoDetect().'-Денис Староверов');
    }
    public function testGenDetect774()
    {
        $this->object->setFirstName('Федот');
        $this->object->setSecondName('Стеблев');
        $this->assertEquals('1-Федот Стеблев', $this->object->genderAutoDetect().'-Федот Стеблев');
    }
    public function testGenDetect775()
    {
        $this->object->setFirstName('Игорь');
        $this->object->setSecondName('Стегнов');
        $this->assertEquals('1-Игорь Стегнов', $this->object->genderAutoDetect().'-Игорь Стегнов');
    }
    public function testGenDetect776()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Степанов');
        $this->assertEquals('1-Пантелей Степанов', $this->object->genderAutoDetect().'-Пантелей Степанов');
    }
    public function testGenDetect777()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setSecondName('Степанков');
        $this->assertEquals('1-Ростислав Степанков', $this->object->genderAutoDetect().'-Ростислав Степанков');
    }
    public function testGenDetect778()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setSecondName('Степашин');
        $this->assertEquals('1-Серафим Степашин', $this->object->genderAutoDetect().'-Серафим Степашин');
    }
    public function testGenDetect779()
    {
        $this->object->setFirstName('Иларион');
        $this->object->setSecondName('Стрелков');
        $this->assertEquals('1-Иларион Стрелков', $this->object->genderAutoDetect().'-Иларион Стрелков');
    }
    public function testGenDetect780()
    {
        $this->object->setFirstName('Мина');
        $this->object->setSecondName('Стрекалов');
        $this->assertEquals('1-Мина Стрекалов', $this->object->genderAutoDetect().'-Мина Стрекалов');
    }
    public function testGenDetect781()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setSecondName('Строганов');
        $this->assertEquals('1-Поликарп Строганов', $this->object->genderAutoDetect().'-Поликарп Строганов');
    }
    public function testGenDetect782()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setSecondName('Субботин');
        $this->assertEquals('1-Григорий Субботин', $this->object->genderAutoDetect().'-Григорий Субботин');
    }
    public function testGenDetect783()
    {
        $this->object->setFirstName('Данила');
        $this->object->setSecondName('Суботин');
        $this->assertEquals('1-Данила Суботин', $this->object->genderAutoDetect().'-Данила Суботин');
    }
    public function testGenDetect784()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Суворин');
        $this->assertEquals('1-Климент Суворин', $this->object->genderAutoDetect().'-Климент Суворин');
    }
    public function testGenDetect785()
    {
        $this->object->setFirstName('Федот');
        $this->object->setSecondName('Суворкин');
        $this->assertEquals('1-Федот Суворкин', $this->object->genderAutoDetect().'-Федот Суворкин');
    }
    public function testGenDetect786()
    {
        $this->object->setFirstName('Исак');
        $this->object->setSecondName('Суворов');
        $this->assertEquals('1-Исак Суворов', $this->object->genderAutoDetect().'-Исак Суворов');
    }
    public function testGenDetect787()
    {
        $this->object->setFirstName('Фёдор');
        $this->object->setSecondName('Сунгатулин');
        $this->assertEquals('1-Фёдор Сунгатулин', $this->object->genderAutoDetect().'-Фёдор Сунгатулин');
    }
    public function testGenDetect788()
    {
        $this->object->setFirstName('Фрол');
        $this->object->setSecondName('Сукачев');
        $this->assertEquals('1-Фрол Сукачев', $this->object->genderAutoDetect().'-Фрол Сукачев');
    }
    public function testGenDetect789()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setSecondName('Суриков');
        $this->assertEquals('1-Святослав Суриков', $this->object->genderAutoDetect().'-Святослав Суриков');
    }
    public function testGenDetect790()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setSecondName('Сусоев');
        $this->assertEquals('1-Алексей Сусоев', $this->object->genderAutoDetect().'-Алексей Сусоев');
    }
    public function testGenDetect791()
    {
        $this->object->setFirstName('Наркис');
        $this->object->setSecondName('Сутулин');
        $this->assertEquals('1-Наркис Сутулин', $this->object->genderAutoDetect().'-Наркис Сутулин');
    }
    public function testGenDetect792()
    {
        $this->object->setFirstName('Онисим');
        $this->object->setSecondName('Сухоруков');
        $this->assertEquals('1-Онисим Сухоруков', $this->object->genderAutoDetect().'-Онисим Сухоруков');
    }
    public function testGenDetect793()
    {
        $this->object->setFirstName('Филат');
        $this->object->setSecondName('Сучков');
        $this->assertEquals('1-Филат Сучков', $this->object->genderAutoDetect().'-Филат Сучков');
    }
    public function testGenDetect794()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setSecondName('Сысоев');
        $this->assertEquals('1-Филипп Сысоев', $this->object->genderAutoDetect().'-Филипп Сысоев');
    }
    public function testGenDetect795()
    {
        $this->object->setFirstName('Валерий');
        $this->object->setSecondName('Сытников');
        $this->assertEquals('1-Валерий Сытников', $this->object->genderAutoDetect().'-Валерий Сытников');
    }
    public function testGenDetect796()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setSecondName('Сычёв');
        $this->assertEquals('1-Ярослав Сычёв', $this->object->genderAutoDetect().'-Ярослав Сычёв');
    }
    public function testGenDetect797()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setSecondName('Сычкин');
        $this->assertEquals('1-Каллистрат Сычкин', $this->object->genderAutoDetect().'-Каллистрат Сычкин');
    }
    public function testGenDetect798()
    {
        $this->object->setFirstName('Павел');
        $this->object->setSecondName('Сюкосев');
        $this->assertEquals('1-Павел Сюкосев', $this->object->genderAutoDetect().'-Павел Сюкосев');
    }
    public function testGenDetect799()
    {
        $this->object->setFirstName('Отто');
        $this->object->setSecondName('Табаков');
        $this->assertEquals('1-Отто Табаков', $this->object->genderAutoDetect().'-Отто Табаков');
    }
    public function testGenDetect800()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setSecondName('Табернакулов');
        $this->assertEquals('1-Тимофей Табернакулов', $this->object->genderAutoDetect().'-Тимофей Табернакулов');
    }
    public function testGenDetect801()
    {
        $this->object->setFirstName('Геннадий');
        $this->object->setSecondName('Таланов');
        $this->assertEquals('1-Геннадий Таланов', $this->object->genderAutoDetect().'-Геннадий Таланов');
    }
    public function testGenDetect802()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setSecondName('Талалихин');
        $this->assertEquals('1-Евстафий Талалихин', $this->object->genderAutoDetect().'-Евстафий Талалихин');
    }
    public function testGenDetect803()
    {
        $this->object->setFirstName('Евгений');
        $this->object->setSecondName('Танков');
        $this->assertEquals('1-Евгений Танков', $this->object->genderAutoDetect().'-Евгений Танков');
    }
    public function testGenDetect804()
    {
        $this->object->setFirstName('Кирилл');
        $this->object->setSecondName('Тарасов');
        $this->assertEquals('1-Кирилл Тарасов', $this->object->genderAutoDetect().'-Кирилл Тарасов');
    }
    public function testGenDetect805()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setSecondName('Татаров');
        $this->assertEquals('1-Вячеслав Татаров', $this->object->genderAutoDetect().'-Вячеслав Татаров');
    }
    public function testGenDetect806()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setSecondName('Твардовский');
        $this->assertEquals('1-Нестор Твардовский', $this->object->genderAutoDetect().'-Нестор Твардовский');
    }
    public function testGenDetect807()
    {
        $this->object->setFirstName('Виталий');
        $this->object->setSecondName('Тёмкин');
        $this->assertEquals('1-Виталий Тёмкин', $this->object->genderAutoDetect().'-Виталий Тёмкин');
    }
    public function testGenDetect808()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setSecondName('Теплов');
        $this->assertEquals('1-Чеслав Теплов', $this->object->genderAutoDetect().'-Чеслав Теплов');
    }
    public function testGenDetect809()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Теребов');
        $this->assertEquals('1-Климент Теребов', $this->object->genderAutoDetect().'-Климент Теребов');
    }
    public function testGenDetect810()
    {
        $this->object->setFirstName('Лука');
        $this->object->setSecondName('Тетерев');
        $this->assertEquals('1-Лука Тетерев', $this->object->genderAutoDetect().'-Лука Тетерев');
    }
    public function testGenDetect811()
    {
        $this->object->setFirstName('Лукьян');
        $this->object->setSecondName('Типалов');
        $this->assertEquals('1-Лукьян Типалов', $this->object->genderAutoDetect().'-Лукьян Типалов');
    }
    public function testGenDetect812()
    {
        $this->object->setFirstName('Геннадий');
        $this->object->setSecondName('Титов');
        $this->assertEquals('1-Геннадий Титов', $this->object->genderAutoDetect().'-Геннадий Титов');
    }
    public function testGenDetect813()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setSecondName('Тихвинский');
        $this->assertEquals('1-Порфир Тихвинский', $this->object->genderAutoDetect().'-Порфир Тихвинский');
    }
    public function testGenDetect814()
    {
        $this->object->setFirstName('Прохор');
        $this->object->setSecondName('Тихомиров');
        $this->assertEquals('1-Прохор Тихомиров', $this->object->genderAutoDetect().'-Прохор Тихомиров');
    }
    public function testGenDetect815()
    {
        $this->object->setFirstName('Никанор');
        $this->object->setSecondName('Тихонов');
        $this->assertEquals('1-Никанор Тихонов', $this->object->genderAutoDetect().'-Никанор Тихонов');
    }
    public function testGenDetect816()
    {
        $this->object->setFirstName('Никандр');
        $this->object->setSecondName('Токарев');
        $this->assertEquals('1-Никандр Токарев', $this->object->genderAutoDetect().'-Никандр Токарев');
    }
    public function testGenDetect817()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setSecondName('Токмаков');
        $this->assertEquals('1-Владлен Токмаков', $this->object->genderAutoDetect().'-Владлен Токмаков');
    }
    public function testGenDetect818()
    {
        $this->object->setFirstName('Марк');
        $this->object->setSecondName('Толбанов');
        $this->assertEquals('1-Марк Толбанов', $this->object->genderAutoDetect().'-Марк Толбанов');
    }
    public function testGenDetect819()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setSecondName('Толстобров');
        $this->assertEquals('1-Михаил Толстобров', $this->object->genderAutoDetect().'-Михаил Толстобров');
    }
    public function testGenDetect820()
    {
        $this->object->setFirstName('Юлиан');
        $this->object->setSecondName('Толстокожев');
        $this->assertEquals('1-Юлиан Толстокожев', $this->object->genderAutoDetect().'-Юлиан Толстокожев');
    }
    public function testGenDetect821()
    {
        $this->object->setFirstName('Мирон');
        $this->object->setSecondName('Толстой');
        $this->assertEquals('1-Мирон Толстой', $this->object->genderAutoDetect().'-Мирон Толстой');
    }
    public function testGenDetect822()
    {
        $this->object->setFirstName('Георгий');
        $this->object->setSecondName('Топоров');
        $this->assertEquals('1-Георгий Топоров', $this->object->genderAutoDetect().'-Георгий Топоров');
    }
    public function testGenDetect823()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setSecondName('Торопов');
        $this->assertEquals('1-Никодим Торопов', $this->object->genderAutoDetect().'-Никодим Торопов');
    }
    public function testGenDetect824()
    {
        $this->object->setFirstName('Лаврентий');
        $this->object->setSecondName('Торчинович');
        $this->assertEquals('1-Лаврентий Торчинович', $this->object->genderAutoDetect().'-Лаврентий Торчинович');
    }
    public function testGenDetect825()
    {
        $this->object->setFirstName('Валерьян');
        $this->object->setSecondName('Травкин');
        $this->assertEquals('1-Валерьян Травкин', $this->object->genderAutoDetect().'-Валерьян Травкин');
    }
    public function testGenDetect826()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setSecondName('Тредиаковский');
        $this->assertEquals('1-Роберт Тредиаковский', $this->object->genderAutoDetect().'-Роберт Тредиаковский');
    }
    public function testGenDetect827()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setSecondName('Третьяков');
        $this->assertEquals('1-Кузьма Третьяков', $this->object->genderAutoDetect().'-Кузьма Третьяков');
    }
    public function testGenDetect828()
    {
        $this->object->setFirstName('Марк');
        $this->object->setSecondName('Трифонов');
        $this->assertEquals('1-Марк Трифонов', $this->object->genderAutoDetect().'-Марк Трифонов');
    }
    public function testGenDetect829()
    {
        $this->object->setFirstName('Конон');
        $this->object->setSecondName('Трофимов');
        $this->assertEquals('1-Конон Трофимов', $this->object->genderAutoDetect().'-Конон Трофимов');
    }
    public function testGenDetect830()
    {
        $this->object->setFirstName('Гавриил');
        $this->object->setSecondName('Трусов');
        $this->assertEquals('1-Гавриил Трусов', $this->object->genderAutoDetect().'-Гавриил Трусов');
    }
    public function testGenDetect831()
    {
        $this->object->setFirstName('Калина');
        $this->object->setSecondName('Трутнев');
        $this->assertEquals('1-Калина Трутнев', $this->object->genderAutoDetect().'-Калина Трутнев');
    }
    public function testGenDetect832()
    {
        $this->object->setFirstName('Никон');
        $this->object->setSecondName('Труфанов');
        $this->assertEquals('1-Никон Труфанов', $this->object->genderAutoDetect().'-Никон Труфанов');
    }
    public function testGenDetect833()
    {
        $this->object->setFirstName('Конон');
        $this->object->setSecondName('Трухин');
        $this->assertEquals('1-Конон Трухин', $this->object->genderAutoDetect().'-Конон Трухин');
    }
    public function testGenDetect834()
    {
        $this->object->setFirstName('Орест');
        $this->object->setSecondName('Трындин');
        $this->assertEquals('1-Орест Трындин', $this->object->genderAutoDetect().'-Орест Трындин');
    }
    public function testGenDetect835()
    {
        $this->object->setFirstName('Бронислав');
        $this->object->setSecondName('Туполев');
        $this->assertEquals('1-Бронислав Туполев', $this->object->genderAutoDetect().'-Бронислав Туполев');
    }
    public function testGenDetect836()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setSecondName('Турбин');
        $this->assertEquals('1-Никифор Турбин', $this->object->genderAutoDetect().'-Никифор Турбин');
    }
    public function testGenDetect837()
    {
        $this->object->setFirstName('Ермолай');
        $this->object->setSecondName('Тургенев');
        $this->assertEquals('1-Ермолай Тургенев', $this->object->genderAutoDetect().'-Ермолай Тургенев');
    }
    public function testGenDetect838()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setSecondName('Туров');
        $this->assertEquals('1-Дмитрий Туров', $this->object->genderAutoDetect().'-Дмитрий Туров');
    }
    public function testGenDetect839()
    {
        $this->object->setFirstName('Наркис');
        $this->object->setSecondName('Турфанов');
        $this->assertEquals('1-Наркис Турфанов', $this->object->genderAutoDetect().'-Наркис Турфанов');
    }
    public function testGenDetect840()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setSecondName('Тычкин');
        $this->assertEquals('1-Прокофий Тычкин', $this->object->genderAutoDetect().'-Прокофий Тычкин');
    }
    public function testGenDetect841()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setSecondName('Тюшняков');
        $this->assertEquals('1-Ростислав Тюшняков', $this->object->genderAutoDetect().'-Ростислав Тюшняков');
    }
    public function testGenDetect842()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setSecondName('Телицын');
        $this->assertEquals('1-Виктор Телицын', $this->object->genderAutoDetect().'-Виктор Телицын');
    }
    public function testGenDetect843()
    {
        $this->object->setFirstName('Харлампий');
        $this->object->setSecondName('Тянников');
        $this->assertEquals('1-Харлампий Тянников', $this->object->genderAutoDetect().'-Харлампий Тянников');
    }
    public function testGenDetect844()
    {
        $this->object->setFirstName('Лукьян');
        $this->object->setSecondName('Убейсобакин');
        $this->assertEquals('1-Лукьян Убейсобакин', $this->object->genderAutoDetect().'-Лукьян Убейсобакин');
    }
    public function testGenDetect845()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setSecondName('Угольников');
        $this->assertEquals('1-Феодосий Угольников', $this->object->genderAutoDetect().'-Феодосий Угольников');
    }
    public function testGenDetect846()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setSecondName('Ульянов');
        $this->assertEquals('1-Мстислав Ульянов', $this->object->genderAutoDetect().'-Мстислав Ульянов');
    }
    public function testGenDetect847()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setSecondName('Ульяшин');
        $this->assertEquals('1-Владлен Ульяшин', $this->object->genderAutoDetect().'-Владлен Ульяшин');
    }
    public function testGenDetect848()
    {
        $this->object->setFirstName('Антип');
        $this->object->setSecondName('Усатов');
        $this->assertEquals('1-Антип Усатов', $this->object->genderAutoDetect().'-Антип Усатов');
    }
    public function testGenDetect849()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setSecondName('Усов');
        $this->assertEquals('1-Вилор Усов', $this->object->genderAutoDetect().'-Вилор Усов');
    }
    public function testGenDetect850()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setSecondName('Устинов');
        $this->assertEquals('1-Порфирий Устинов', $this->object->genderAutoDetect().'-Порфирий Устинов');
    }
    public function testGenDetect851()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Устюжанин');
        $this->assertEquals('1-Архип Устюжанин', $this->object->genderAutoDetect().'-Архип Устюжанин');
    }
    public function testGenDetect852()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setSecondName('Утёсов');
        $this->assertEquals('1-Парфений Утёсов', $this->object->genderAutoDetect().'-Парфений Утёсов');
    }
    public function testGenDetect853()
    {
        $this->object->setFirstName('Харитон');
        $this->object->setSecondName('Ухов');
        $this->assertEquals('1-Харитон Ухов', $this->object->genderAutoDetect().'-Харитон Ухов');
    }
    public function testGenDetect854()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Фанин');
        $this->assertEquals('1-Пантелей Фанин', $this->object->genderAutoDetect().'-Пантелей Фанин');
    }
    public function testGenDetect855()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setSecondName('Фамусов');
        $this->assertEquals('1-Григорий Фамусов', $this->object->genderAutoDetect().'-Григорий Фамусов');
    }
    public function testGenDetect856()
    {
        $this->object->setFirstName('Андрей');
        $this->object->setSecondName('Федин');
        $this->assertEquals('1-Андрей Федин', $this->object->genderAutoDetect().'-Андрей Федин');
    }
    public function testGenDetect857()
    {
        $this->object->setFirstName('Корнелий');
        $this->object->setSecondName('Федосов');
        $this->assertEquals('1-Корнелий Федосов', $this->object->genderAutoDetect().'-Корнелий Федосов');
    }
    public function testGenDetect858()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setSecondName('Федотов');
        $this->assertEquals('1-Пантелей Федотов', $this->object->genderAutoDetect().'-Пантелей Федотов');
    }
    public function testGenDetect859()
    {
        $this->object->setFirstName('Наум');
        $this->object->setSecondName('Федосеев');
        $this->assertEquals('1-Наум Федосеев', $this->object->genderAutoDetect().'-Наум Федосеев');
    }
    public function testGenDetect860()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setSecondName('Федченков');
        $this->assertEquals('1-Харлам Федченков', $this->object->genderAutoDetect().'-Харлам Федченков');
    }
    public function testGenDetect861()
    {
        $this->object->setFirstName('Федот');
        $this->object->setSecondName('Фёдоров');
        $this->assertEquals('1-Федот Фёдоров', $this->object->genderAutoDetect().'-Федот Фёдоров');
    }
    public function testGenDetect862()
    {
        $this->object->setFirstName('Аркадий');
        $this->object->setSecondName('Федулов');
        $this->assertEquals('1-Аркадий Федулов', $this->object->genderAutoDetect().'-Аркадий Федулов');
    }
    public function testGenDetect863()
    {
        $this->object->setFirstName('Нарцис');
        $this->object->setSecondName('Фетисов');
        $this->assertEquals('1-Нарцис Фетисов', $this->object->genderAutoDetect().'-Нарцис Фетисов');
    }
    public function testGenDetect864()
    {
        $this->object->setFirstName('Измаил');
        $this->object->setSecondName('Филатов');
        $this->assertEquals('1-Измаил Филатов', $this->object->genderAutoDetect().'-Измаил Филатов');
    }
    public function testGenDetect865()
    {
        $this->object->setFirstName('Парфён');
        $this->object->setSecondName('Филимонов');
        $this->assertEquals('1-Парфён Филимонов', $this->object->genderAutoDetect().'-Парфён Филимонов');
    }
    public function testGenDetect866()
    {
        $this->object->setFirstName('Парфён');
        $this->object->setSecondName('Филипов');
        $this->assertEquals('1-Парфён Филипов', $this->object->genderAutoDetect().'-Парфён Филипов');
    }
    public function testGenDetect867()
    {
        $this->object->setFirstName('Адриан');
        $this->object->setSecondName('Филиппов');
        $this->assertEquals('1-Адриан Филиппов', $this->object->genderAutoDetect().'-Адриан Филиппов');
    }
    public function testGenDetect868()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setSecondName('Флёров');
        $this->assertEquals('1-Анатолий Флёров', $this->object->genderAutoDetect().'-Анатолий Флёров');
    }
    public function testGenDetect869()
    {
        $this->object->setFirstName('Юлиан');
        $this->object->setSecondName('Фокин');
        $this->assertEquals('1-Юлиан Фокин', $this->object->genderAutoDetect().'-Юлиан Фокин');
    }
    public function testGenDetect870()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setSecondName('Фомин');
        $this->assertEquals('1-Нестер Фомин', $this->object->genderAutoDetect().'-Нестер Фомин');
    }
    public function testGenDetect871()
    {
        $this->object->setFirstName('Савва');
        $this->object->setSecondName('Фомичев');
        $this->assertEquals('1-Савва Фомичев', $this->object->genderAutoDetect().'-Савва Фомичев');
    }
    public function testGenDetect872()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setSecondName('Фонвизин');
        $this->assertEquals('1-Прокопий Фонвизин', $this->object->genderAutoDetect().'-Прокопий Фонвизин');
    }
    public function testGenDetect873()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setSecondName('Форопонов');
        $this->assertEquals('1-Прокофий Форопонов', $this->object->genderAutoDetect().'-Прокофий Форопонов');
    }
    public function testGenDetect874()
    {
        $this->object->setFirstName('Потап');
        $this->object->setSecondName('Фирсов');
        $this->assertEquals('1-Потап Фирсов', $this->object->genderAutoDetect().'-Потап Фирсов');
    }
    public function testGenDetect875()
    {
        $this->object->setFirstName('Евстигней');
        $this->object->setSecondName('Фролов');
        $this->assertEquals('1-Евстигней Фролов', $this->object->genderAutoDetect().'-Евстигней Фролов');
    }
    public function testGenDetect876()
    {
        $this->object->setFirstName('Онисим');
        $this->object->setSecondName('Францев');
        $this->assertEquals('1-Онисим Францев', $this->object->genderAutoDetect().'-Онисим Францев');
    }
    public function testGenDetect877()
    {
        $this->object->setFirstName('Игнатий');
        $this->object->setSecondName('Фукин');
        $this->assertEquals('1-Игнатий Фукин', $this->object->genderAutoDetect().'-Игнатий Фукин');
    }
    public function testGenDetect878()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Хабалов');
        $this->assertEquals('1-Климент Хабалов', $this->object->genderAutoDetect().'-Климент Хабалов');
    }
    public function testGenDetect879()
    {
        $this->object->setFirstName('Потап');
        $this->object->setSecondName('Халтурин');
        $this->assertEquals('1-Потап Халтурин', $this->object->genderAutoDetect().'-Потап Халтурин');
    }
    public function testGenDetect880()
    {
        $this->object->setFirstName('Лев');
        $this->object->setSecondName('Харитонов');
        $this->assertEquals('1-Лев Харитонов', $this->object->genderAutoDetect().'-Лев Харитонов');
    }
    public function testGenDetect881()
    {
        $this->object->setFirstName('Герман');
        $this->object->setSecondName('Харламов');
        $this->assertEquals('1-Герман Харламов', $this->object->genderAutoDetect().'-Герман Харламов');
    }
    public function testGenDetect882()
    {
        $this->object->setFirstName('Самсон');
        $this->object->setSecondName('Хлебников');
        $this->assertEquals('1-Самсон Хлебников', $this->object->genderAutoDetect().'-Самсон Хлебников');
    }
    public function testGenDetect883()
    {
        $this->object->setFirstName('Давид');
        $this->object->setSecondName('Хлопонин');
        $this->assertEquals('1-Давид Хлопонин', $this->object->genderAutoDetect().'-Давид Хлопонин');
    }
    public function testGenDetect884()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setSecondName('Холодов');
        $this->assertEquals('1-Вилор Холодов', $this->object->genderAutoDetect().'-Вилор Холодов');
    }
    public function testGenDetect885()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Хомколов');
        $this->assertEquals('1-Леон Хомколов', $this->object->genderAutoDetect().'-Леон Хомколов');
    }
    public function testGenDetect886()
    {
        $this->object->setFirstName('Клим');
        $this->object->setSecondName('Храмов');
        $this->assertEquals('1-Клим Храмов', $this->object->genderAutoDetect().'-Клим Храмов');
    }
    public function testGenDetect887()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setSecondName('Хромов');
        $this->assertEquals('1-Григорий Хромов', $this->object->genderAutoDetect().'-Григорий Хромов');
    }
    public function testGenDetect888()
    {
        $this->object->setFirstName('Ян');
        $this->object->setSecondName('Худовеков');
        $this->assertEquals('1-Ян Худовеков', $this->object->genderAutoDetect().'-Ян Худовеков');
    }
    public function testGenDetect889()
    {
        $this->object->setFirstName('Владимир');
        $this->object->setSecondName('Хлебов');
        $this->assertEquals('1-Владимир Хлебов', $this->object->genderAutoDetect().'-Владимир Хлебов');
    }
    public function testGenDetect890()
    {
        $this->object->setFirstName('Созон');
        $this->object->setSecondName('Хуртин');
        $this->assertEquals('1-Созон Хуртин', $this->object->genderAutoDetect().'-Созон Хуртин');
    }
    public function testGenDetect891()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setSecondName('Хребтов');
        $this->assertEquals('1-Харлам Хребтов', $this->object->genderAutoDetect().'-Харлам Хребтов');
    }
    public function testGenDetect892()
    {
        $this->object->setFirstName('Артур');
        $this->object->setSecondName('Худяков');
        $this->assertEquals('1-Артур Худяков', $this->object->genderAutoDetect().'-Артур Худяков');
    }
    public function testGenDetect893()
    {
        $this->object->setFirstName('Тимур');
        $this->object->setSecondName('Царицын');
        $this->assertEquals('1-Тимур Царицын', $this->object->genderAutoDetect().'-Тимур Царицын');
    }
    public function testGenDetect894()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setSecondName('Цветаев');
        $this->assertEquals('1-Мефодий Цветаев', $this->object->genderAutoDetect().'-Мефодий Цветаев');
    }
    public function testGenDetect895()
    {
        $this->object->setFirstName('Каллиник');
        $this->object->setSecondName('Цветков');
        $this->assertEquals('1-Каллиник Цветков', $this->object->genderAutoDetect().'-Каллиник Цветков');
    }
    public function testGenDetect896()
    {
        $this->object->setFirstName('Михей');
        $this->object->setSecondName('Циолковский');
        $this->assertEquals('1-Михей Циолковский', $this->object->genderAutoDetect().'-Михей Циолковский');
    }
    public function testGenDetect897()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setSecondName('Цитников');
        $this->assertEquals('1-Евстафий Цитников', $this->object->genderAutoDetect().'-Евстафий Цитников');
    }
    public function testGenDetect898()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setSecondName('Цуканов');
        $this->assertEquals('1-Касьян Цуканов', $this->object->genderAutoDetect().'-Касьян Цуканов');
    }
    public function testGenDetect899()
    {
        $this->object->setFirstName('Нарцис');
        $this->object->setSecondName('Чаадаев');
        $this->assertEquals('1-Нарцис Чаадаев', $this->object->genderAutoDetect().'-Нарцис Чаадаев');
    }
    public function testGenDetect900()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setSecondName('Чадов');
        $this->assertEquals('1-Дмитрий Чадов', $this->object->genderAutoDetect().'-Дмитрий Чадов');
    }
    public function testGenDetect901()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Чазов');
        $this->assertEquals('1-Архип Чазов', $this->object->genderAutoDetect().'-Архип Чазов');
    }
    public function testGenDetect902()
    {
        $this->object->setFirstName('Калина');
        $this->object->setSecondName('Чалый');
        $this->assertEquals('1-Калина Чалый', $this->object->genderAutoDetect().'-Калина Чалый');
    }
    public function testGenDetect903()
    {
        $this->object->setFirstName('Аксён');
        $this->object->setSecondName('Чапаев');
        $this->assertEquals('1-Аксён Чапаев', $this->object->genderAutoDetect().'-Аксён Чапаев');
    }
    public function testGenDetect904()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setSecondName('Чеботарёв');
        $this->assertEquals('1-Сергей Чеботарёв', $this->object->genderAutoDetect().'-Сергей Чеботарёв');
    }
    public function testGenDetect905()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setSecondName('Чебыкин');
        $this->assertEquals('1-Владислав Чебыкин', $this->object->genderAutoDetect().'-Владислав Чебыкин');
    }
    public function testGenDetect906()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setSecondName('Чежеков');
        $this->assertEquals('1-Еремей Чежеков', $this->object->genderAutoDetect().'-Еремей Чежеков');
    }
    public function testGenDetect907()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setSecondName('Чекмарёв');
        $this->assertEquals('1-Лазарь Чекмарёв', $this->object->genderAutoDetect().'-Лазарь Чекмарёв');
    }
    public function testGenDetect908()
    {
        $this->object->setFirstName('Лука');
        $this->object->setSecondName('Челомеев');
        $this->assertEquals('1-Лука Челомеев', $this->object->genderAutoDetect().'-Лука Челомеев');
    }
    public function testGenDetect909()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setSecondName('Челомей');
        $this->assertEquals('1-Прокопий Челомей', $this->object->genderAutoDetect().'-Прокопий Челомей');
    }
    public function testGenDetect910()
    {
        $this->object->setFirstName('Денис');
        $this->object->setSecondName('Челпанов');
        $this->assertEquals('1-Денис Челпанов', $this->object->genderAutoDetect().'-Денис Челпанов');
    }
    public function testGenDetect911()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setSecondName('Чендев');
        $this->assertEquals('1-Анатолий Чендев', $this->object->genderAutoDetect().'-Анатолий Чендев');
    }
    public function testGenDetect912()
    {
        $this->object->setFirstName('Эдгар');
        $this->object->setSecondName('Черенчиков');
        $this->assertEquals('1-Эдгар Черенчиков', $this->object->genderAutoDetect().'-Эдгар Черенчиков');
    }
    public function testGenDetect913()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Черепанов');
        $this->assertEquals('1-Архип Черепанов', $this->object->genderAutoDetect().'-Архип Черепанов');
    }
    public function testGenDetect914()
    {
        $this->object->setFirstName('Димитрий');
        $this->object->setSecondName('Черкашин');
        $this->assertEquals('1-Димитрий Черкашин', $this->object->genderAutoDetect().'-Димитрий Черкашин');
    }
    public function testGenDetect915()
    {
        $this->object->setFirstName('Валентин');
        $this->object->setSecondName('Чернов');
        $this->assertEquals('1-Валентин Чернов', $this->object->genderAutoDetect().'-Валентин Чернов');
    }
    public function testGenDetect916()
    {
        $this->object->setFirstName('Минай');
        $this->object->setSecondName('Чернышёв');
        $this->assertEquals('1-Минай Чернышёв', $this->object->genderAutoDetect().'-Минай Чернышёв');
    }
    public function testGenDetect917()
    {
        $this->object->setFirstName('Панкратий');
        $this->object->setSecondName('Чернаков');
        $this->assertEquals('1-Панкратий Чернаков', $this->object->genderAutoDetect().'-Панкратий Чернаков');
    }
    public function testGenDetect918()
    {
        $this->object->setFirstName('Жан');
        $this->object->setSecondName('Черников');
        $this->assertEquals('1-Жан Черников', $this->object->genderAutoDetect().'-Жан Черников');
    }
    public function testGenDetect919()
    {
        $this->object->setFirstName('Минай');
        $this->object->setSecondName('Чесноков');
        $this->assertEquals('1-Минай Чесноков', $this->object->genderAutoDetect().'-Минай Чесноков');
    }
    public function testGenDetect920()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setSecondName('Чиграков');
        $this->assertEquals('1-Терентий Чиграков', $this->object->genderAutoDetect().'-Терентий Чиграков');
    }
    public function testGenDetect921()
    {
        $this->object->setFirstName('Влас');
        $this->object->setSecondName('Чижиков');
        $this->assertEquals('1-Влас Чижиков', $this->object->genderAutoDetect().'-Влас Чижиков');
    }
    public function testGenDetect922()
    {
        $this->object->setFirstName('Лука');
        $this->object->setSecondName('Чиркаш');
        $this->assertEquals('1-Лука Чиркаш', $this->object->genderAutoDetect().'-Лука Чиркаш');
    }
    public function testGenDetect923()
    {
        $this->object->setFirstName('Феофан');
        $this->object->setSecondName('Чистяков');
        $this->assertEquals('1-Феофан Чистяков', $this->object->genderAutoDetect().'-Феофан Чистяков');
    }
    public function testGenDetect924()
    {
        $this->object->setFirstName('Арсений');
        $this->object->setSecondName('Чичиков');
        $this->assertEquals('1-Арсений Чичиков', $this->object->genderAutoDetect().'-Арсений Чичиков');
    }
    public function testGenDetect925()
    {
        $this->object->setFirstName('Ануфрий');
        $this->object->setSecondName('Чичканов');
        $this->assertEquals('1-Ануфрий Чичканов', $this->object->genderAutoDetect().'-Ануфрий Чичканов');
    }
    public function testGenDetect926()
    {
        $this->object->setFirstName('Захар');
        $this->object->setSecondName('Чкалов');
        $this->assertEquals('1-Захар Чкалов', $this->object->genderAutoDetect().'-Захар Чкалов');
    }
    public function testGenDetect927()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setSecondName('Чмыхов');
        $this->assertEquals('1-Нестер Чмыхов', $this->object->genderAutoDetect().'-Нестер Чмыхов');
    }
    public function testGenDetect928()
    {
        $this->object->setFirstName('Изот');
        $this->object->setSecondName('Чугунов');
        $this->assertEquals('1-Изот Чугунов', $this->object->genderAutoDetect().'-Изот Чугунов');
    }
    public function testGenDetect929()
    {
        $this->object->setFirstName('Прохор');
        $this->object->setSecondName('Чужинов');
        $this->assertEquals('1-Прохор Чужинов', $this->object->genderAutoDetect().'-Прохор Чужинов');
    }
    public function testGenDetect930()
    {
        $this->object->setFirstName('Демид');
        $this->object->setSecondName('Чукчов');
        $this->assertEquals('1-Демид Чукчов', $this->object->genderAutoDetect().'-Демид Чукчов');
    }
    public function testGenDetect931()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setSecondName('Чукреев');
        $this->assertEquals('1-Нестер Чукреев', $this->object->genderAutoDetect().'-Нестер Чукреев');
    }
    public function testGenDetect932()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setSecondName('Чупов');
        $this->assertEquals('1-Сергей Чупов', $this->object->genderAutoDetect().'-Сергей Чупов');
    }
    public function testGenDetect933()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setSecondName('Чуприн');
        $this->assertEquals('1-Никодим Чуприн', $this->object->genderAutoDetect().'-Никодим Чуприн');
    }
    public function testGenDetect934()
    {
        $this->object->setFirstName('Никита');
        $this->object->setSecondName('Чупров');
        $this->assertEquals('1-Никита Чупров', $this->object->genderAutoDetect().'-Никита Чупров');
    }
    public function testGenDetect935()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setSecondName('Чучанов');
        $this->assertEquals('1-Никифор Чучанов', $this->object->genderAutoDetect().'-Никифор Чучанов');
    }
    public function testGenDetect936()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setSecondName('Чучумашев');
        $this->assertEquals('1-Серафим Чучумашев', $this->object->genderAutoDetect().'-Серафим Чучумашев');
    }
    public function testGenDetect937()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setSecondName('Шабунин');
        $this->assertEquals('1-Харламп Шабунин', $this->object->genderAutoDetect().'-Харламп Шабунин');
    }
    public function testGenDetect938()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setSecondName('Шакмаков');
        $this->assertEquals('1-Вилор Шакмаков', $this->object->genderAutoDetect().'-Вилор Шакмаков');
    }
    public function testGenDetect939()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setSecondName('Шаляпин');
        $this->assertEquals('1-Захарий Шаляпин', $this->object->genderAutoDetect().'-Захарий Шаляпин');
    }
    public function testGenDetect940()
    {
        $this->object->setFirstName('Пантелеймон');
        $this->object->setSecondName('Шаповалов');
        $this->assertEquals('1-Пантелеймон Шаповалов', $this->object->genderAutoDetect().'-Пантелеймон Шаповалов');
    }
    public function testGenDetect941()
    {
        $this->object->setFirstName('Исак');
        $this->object->setSecondName('Шапошников');
        $this->assertEquals('1-Исак Шапошников', $this->object->genderAutoDetect().'-Исак Шапошников');
    }
    public function testGenDetect942()
    {
        $this->object->setFirstName('Изот');
        $this->object->setSecondName('Шарапов');
        $this->assertEquals('1-Изот Шарапов', $this->object->genderAutoDetect().'-Изот Шарапов');
    }
    public function testGenDetect943()
    {
        $this->object->setFirstName('Орест');
        $this->object->setSecondName('Шаров');
        $this->assertEquals('1-Орест Шаров', $this->object->genderAutoDetect().'-Орест Шаров');
    }
    public function testGenDetect944()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Шаршин');
        $this->assertEquals('1-Климент Шаршин', $this->object->genderAutoDetect().'-Климент Шаршин');
    }
    public function testGenDetect945()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setSecondName('Шашлов');
        $this->assertEquals('1-Нестер Шашлов', $this->object->genderAutoDetect().'-Нестер Шашлов');
    }
    public function testGenDetect946()
    {
        $this->object->setFirstName('Савва');
        $this->object->setSecondName('Шведов');
        $this->assertEquals('1-Савва Шведов', $this->object->genderAutoDetect().'-Савва Шведов');
    }
    public function testGenDetect947()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setSecondName('Шевелёк');
        $this->assertEquals('1-Алексей Шевелёк', $this->object->genderAutoDetect().'-Алексей Шевелёк');
    }
    public function testGenDetect948()
    {
        $this->object->setFirstName('Ефрем');
        $this->object->setSecondName('Шеломов');
        $this->assertEquals('1-Ефрем Шеломов', $this->object->genderAutoDetect().'-Ефрем Шеломов');
    }
    public function testGenDetect949()
    {
        $this->object->setFirstName('Василий');
        $this->object->setSecondName('Шепкин');
        $this->assertEquals('1-Василий Шепкин', $this->object->genderAutoDetect().'-Василий Шепкин');
    }
    public function testGenDetect950()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setSecondName('Шеповалов');
        $this->assertEquals('1-Моисей Шеповалов', $this->object->genderAutoDetect().'-Моисей Шеповалов');
    }
    public function testGenDetect951()
    {
        $this->object->setFirstName('Георгий');
        $this->object->setSecondName('Шереметьев');
        $this->assertEquals('1-Георгий Шереметьев', $this->object->genderAutoDetect().'-Георгий Шереметьев');
    }
    public function testGenDetect952()
    {
        $this->object->setFirstName('Емельян');
        $this->object->setSecondName('Шерстов');
        $this->assertEquals('1-Емельян Шерстов', $this->object->genderAutoDetect().'-Емельян Шерстов');
    }
    public function testGenDetect953()
    {
        $this->object->setFirstName('Валерий');
        $this->object->setSecondName('Шикалов');
        $this->assertEquals('1-Валерий Шикалов', $this->object->genderAutoDetect().'-Валерий Шикалов');
    }
    public function testGenDetect954()
    {
        $this->object->setFirstName('Валентин');
        $this->object->setSecondName('Ширманов');
        $this->assertEquals('1-Валентин Ширманов', $this->object->genderAutoDetect().'-Валентин Ширманов');
    }
    public function testGenDetect955()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setSecondName('Шихранов');
        $this->assertEquals('1-Захарий Шихранов', $this->object->genderAutoDetect().'-Захарий Шихранов');
    }
    public function testGenDetect956()
    {
        $this->object->setFirstName('Герман');
        $this->object->setSecondName('Шишкин');
        $this->assertEquals('1-Герман Шишкин', $this->object->genderAutoDetect().'-Герман Шишкин');
    }
    public function testGenDetect957()
    {
        $this->object->setFirstName('Климент');
        $this->object->setSecondName('Шишлов');
        $this->assertEquals('1-Климент Шишлов', $this->object->genderAutoDetect().'-Климент Шишлов');
    }
    public function testGenDetect958()
    {
        $this->object->setFirstName('Эдгар');
        $this->object->setSecondName('Шишов');
        $this->assertEquals('1-Эдгар Шишов', $this->object->genderAutoDetect().'-Эдгар Шишов');
    }
    public function testGenDetect959()
    {
        $this->object->setFirstName('Минай');
        $this->object->setSecondName('Шкуратов');
        $this->assertEquals('1-Минай Шкуратов', $this->object->genderAutoDetect().'-Минай Шкуратов');
    }
    public function testGenDetect960()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setSecondName('Шлыков');
        $this->assertEquals('1-Григорий Шлыков', $this->object->genderAutoDetect().'-Григорий Шлыков');
    }
    public function testGenDetect961()
    {
        $this->object->setFirstName('Глеб');
        $this->object->setSecondName('Шмаков');
        $this->assertEquals('1-Глеб Шмаков', $this->object->genderAutoDetect().'-Глеб Шмаков');
    }
    public function testGenDetect962()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setSecondName('Шмелев');
        $this->assertEquals('1-Герасим Шмелев', $this->object->genderAutoDetect().'-Герасим Шмелев');
    }
    public function testGenDetect963()
    {
        $this->object->setFirstName('Артём');
        $this->object->setSecondName('Шубин');
        $this->assertEquals('1-Артём Шубин', $this->object->genderAutoDetect().'-Артём Шубин');
    }
    public function testGenDetect964()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setSecondName('Шубкин');
        $this->assertEquals('1-Терентий Шубкин', $this->object->genderAutoDetect().'-Терентий Шубкин');
    }
    public function testGenDetect965()
    {
        $this->object->setFirstName('Станислав');
        $this->object->setSecondName('Шувалов');
        $this->assertEquals('1-Станислав Шувалов', $this->object->genderAutoDetect().'-Станислав Шувалов');
    }
    public function testGenDetect966()
    {
        $this->object->setFirstName('Отто');
        $this->object->setSecondName('Шуйский');
        $this->assertEquals('1-Отто Шуйский', $this->object->genderAutoDetect().'-Отто Шуйский');
    }
    public function testGenDetect967()
    {
        $this->object->setFirstName('Орест');
        $this->object->setSecondName('Шукшин');
        $this->assertEquals('1-Орест Шукшин', $this->object->genderAutoDetect().'-Орест Шукшин');
    }
    public function testGenDetect968()
    {
        $this->object->setFirstName('Савватий');
        $this->object->setSecondName('Шулёв');
        $this->assertEquals('1-Савватий Шулёв', $this->object->genderAutoDetect().'-Савватий Шулёв');
    }
    public function testGenDetect969()
    {
        $this->object->setFirstName('Спиридон');
        $this->object->setSecondName('Шульдешов');
        $this->assertEquals('1-Спиридон Шульдешов', $this->object->genderAutoDetect().'-Спиридон Шульдешов');
    }
    public function testGenDetect970()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setSecondName('Шульга');
        $this->assertEquals('1-Алексей Шульга', $this->object->genderAutoDetect().'-Алексей Шульга');
    }
    public function testGenDetect971()
    {
        $this->object->setFirstName('Леон');
        $this->object->setSecondName('Шульгин');
        $this->assertEquals('1-Леон Шульгин', $this->object->genderAutoDetect().'-Леон Шульгин');
    }
    public function testGenDetect972()
    {
        $this->object->setFirstName('Данила');
        $this->object->setSecondName('Шурупов');
        $this->assertEquals('1-Данила Шурупов', $this->object->genderAutoDetect().'-Данила Шурупов');
    }
    public function testGenDetect973()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setSecondName('Шушалев');
        $this->assertEquals('1-Исаак Шушалев', $this->object->genderAutoDetect().'-Исаак Шушалев');
    }
    public function testGenDetect974()
    {
        $this->object->setFirstName('Георгий');
        $this->object->setSecondName('Шурша');
        $this->assertEquals('1-Георгий Шурша', $this->object->genderAutoDetect().'-Георгий Шурша');
    }
    public function testGenDetect975()
    {
        $this->object->setFirstName('Остап');
        $this->object->setSecondName('Щавельский');
        $this->assertEquals('1-Остап Щавельский', $this->object->genderAutoDetect().'-Остап Щавельский');
    }
    public function testGenDetect976()
    {
        $this->object->setFirstName('Аксён');
        $this->object->setSecondName('Щегельский');
        $this->assertEquals('1-Аксён Щегельский', $this->object->genderAutoDetect().'-Аксён Щегельский');
    }
    public function testGenDetect977()
    {
        $this->object->setFirstName('Яков');
        $this->object->setSecondName('Щеглов');
        $this->assertEquals('1-Яков Щеглов', $this->object->genderAutoDetect().'-Яков Щеглов');
    }
    public function testGenDetect978()
    {
        $this->object->setFirstName('Пантелеймон');
        $this->object->setSecondName('Щеголев');
        $this->assertEquals('1-Пантелеймон Щеголев', $this->object->genderAutoDetect().'-Пантелеймон Щеголев');
    }
    public function testGenDetect979()
    {
        $this->object->setFirstName('Иван');
        $this->object->setSecondName('Щеголихин');
        $this->assertEquals('1-Иван Щеголихин', $this->object->genderAutoDetect().'-Иван Щеголихин');
    }
    public function testGenDetect980()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setSecondName('Щедрин');
        $this->assertEquals('1-Валериан Щедрин', $this->object->genderAutoDetect().'-Валериан Щедрин');
    }
    public function testGenDetect981()
    {
        $this->object->setFirstName('Ермил');
        $this->object->setSecondName('Щедров');
        $this->assertEquals('1-Ермил Щедров', $this->object->genderAutoDetect().'-Ермил Щедров');
    }
    public function testGenDetect982()
    {
        $this->object->setFirstName('Марат');
        $this->object->setSecondName('Щекочихин');
        $this->assertEquals('1-Марат Щекочихин', $this->object->genderAutoDetect().'-Марат Щекочихин');
    }
    public function testGenDetect983()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setSecondName('Щепкин');
        $this->assertEquals('1-Каллистрат Щепкин', $this->object->genderAutoDetect().'-Каллистрат Щепкин');
    }
    public function testGenDetect984()
    {
        $this->object->setFirstName('Капитон');
        $this->object->setSecondName('Щербаков');
        $this->assertEquals('1-Капитон Щербаков', $this->object->genderAutoDetect().'-Капитон Щербаков');
    }
    public function testGenDetect985()
    {
        $this->object->setFirstName('Николай');
        $this->object->setSecondName('Щербатых');
        $this->assertEquals('1-Николай Щербатых', $this->object->genderAutoDetect().'-Николай Щербатых');
    }
    public function testGenDetect986()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setSecondName('Щербина');
        $this->assertEquals('1-Прокопий Щербина', $this->object->genderAutoDetect().'-Прокопий Щербина');
    }
    public function testGenDetect987()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setSecondName('Щетинин');
        $this->assertEquals('1-Нестор Щетинин', $this->object->genderAutoDetect().'-Нестор Щетинин');
    }
    public function testGenDetect988()
    {
        $this->object->setFirstName('Валентин');
        $this->object->setSecondName('Щеткин');
        $this->assertEquals('1-Валентин Щеткин', $this->object->genderAutoDetect().'-Валентин Щеткин');
    }
    public function testGenDetect989()
    {
        $this->object->setFirstName('Пимен');
        $this->object->setSecondName('Щукин');
        $this->assertEquals('1-Пимен Щукин', $this->object->genderAutoDetect().'-Пимен Щукин');
    }
    public function testGenDetect990()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setSecondName('Энтин');
        $this->assertEquals('1-Герасим Энтин', $this->object->genderAutoDetect().'-Герасим Энтин');
    }
    public function testGenDetect991()
    {
        $this->object->setFirstName('Ефрем');
        $this->object->setSecondName('Эсце');
        $this->assertEquals('1-Ефрем Эсце', $this->object->genderAutoDetect().'-Ефрем Эсце');
    }
    public function testGenDetect992()
    {
        $this->object->setFirstName('Фома');
        $this->object->setSecondName('Ювелев');
        $this->assertEquals('1-Фома Ювелев', $this->object->genderAutoDetect().'-Фома Ювелев');
    }
    public function testGenDetect993()
    {
        $this->object->setFirstName('Исак');
        $this->object->setSecondName('Юганцев');
        $this->assertEquals('1-Исак Юганцев', $this->object->genderAutoDetect().'-Исак Юганцев');
    }
    public function testGenDetect994()
    {
        $this->object->setFirstName('Илья');
        $this->object->setSecondName('Югов');
        $this->assertEquals('1-Илья Югов', $this->object->genderAutoDetect().'-Илья Югов');
    }
    public function testGenDetect995()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setSecondName('Юдашкин');
        $this->assertEquals('1-Савелий Юдашкин', $this->object->genderAutoDetect().'-Савелий Юдашкин');
    }
    public function testGenDetect996()
    {
        $this->object->setFirstName('Демьян');
        $this->object->setSecondName('Юдин');
        $this->assertEquals('1-Демьян Юдин', $this->object->genderAutoDetect().'-Демьян Юдин');
    }
    public function testGenDetect997()
    {
        $this->object->setFirstName('Анисим');
        $this->object->setSecondName('Юнкин');
        $this->assertEquals('1-Анисим Юнкин', $this->object->genderAutoDetect().'-Анисим Юнкин');
    }
    public function testGenDetect998()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setSecondName('Юрнаев');
        $this->assertEquals('1-Кузьма Юрнаев', $this->object->genderAutoDetect().'-Кузьма Юрнаев');
    }
    public function testGenDetect999()
    {
        $this->object->setFirstName('Артём');
        $this->object->setSecondName('Юрьев');
        $this->assertEquals('1-Артём Юрьев', $this->object->genderAutoDetect().'-Артём Юрьев');
    }
    public function testGenDetect1000()
    {
        $this->object->setFirstName('Феоктист');
        $this->object->setSecondName('Юсупов');
        $this->assertEquals('1-Феоктист Юсупов', $this->object->genderAutoDetect().'-Феоктист Юсупов');
    }
    public function testGenDetect1001()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setSecondName('Юферев');
        $this->assertEquals('1-Леонид Юферев', $this->object->genderAutoDetect().'-Леонид Юферев');
    }
    public function testGenDetect1002()
    {
        $this->object->setFirstName('Мартын');
        $this->object->setSecondName('Якимов');
        $this->assertEquals('1-Мартын Якимов', $this->object->genderAutoDetect().'-Мартын Якимов');
    }
    public function testGenDetect1003()
    {
        $this->object->setFirstName('Виталий');
        $this->object->setSecondName('Яковлев');
        $this->assertEquals('1-Виталий Яковлев', $this->object->genderAutoDetect().'-Виталий Яковлев');
    }
    public function testGenDetect1004()
    {
        $this->object->setFirstName('Фёдор');
        $this->object->setSecondName('Якубов');
        $this->assertEquals('1-Фёдор Якубов', $this->object->genderAutoDetect().'-Фёдор Якубов');
    }
    public function testGenDetect1005()
    {
        $this->object->setFirstName('Прокоп');
        $this->object->setSecondName('Якубович');
        $this->assertEquals('1-Прокоп Якубович', $this->object->genderAutoDetect().'-Прокоп Якубович');
    }
    public function testGenDetect1006()
    {
        $this->object->setFirstName('Спиридон');
        $this->object->setSecondName('Якушев');
        $this->assertEquals('1-Спиридон Якушев', $this->object->genderAutoDetect().'-Спиридон Якушев');
    }
    public function testGenDetect1007()
    {
        $this->object->setFirstName('Филат');
        $this->object->setSecondName('Янаев');
        $this->assertEquals('1-Филат Янаев', $this->object->genderAutoDetect().'-Филат Янаев');
    }
    public function testGenDetect1008()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setSecondName('Янков');
        $this->assertEquals('1-Порфирий Янков', $this->object->genderAutoDetect().'-Порфирий Янков');
    }
    public function testGenDetect1009()
    {
        $this->object->setFirstName('Мартин');
        $this->object->setSecondName('Янковский');
        $this->assertEquals('1-Мартин Янковский', $this->object->genderAutoDetect().'-Мартин Янковский');
    }
    public function testGenDetect1010()
    {
        $this->object->setFirstName('Евсей');
        $this->object->setSecondName('Ярмольник');
        $this->assertEquals('1-Евсей Ярмольник', $this->object->genderAutoDetect().'-Евсей Ярмольник');
    }
    public function testGenDetect1011()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setSecondName('Яромеев');
        $this->assertEquals('1-Тимофей Яромеев', $this->object->genderAutoDetect().'-Тимофей Яромеев');
    }
    public function testGenDetect1012()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setSecondName('Ярцев');
        $this->assertEquals('1-Терентий Ярцев', $this->object->genderAutoDetect().'-Терентий Ярцев');
    }
    public function testGenDetect1013()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setSecondName('Ясенев');
        $this->assertEquals('1-Серафим Ясенев', $this->object->genderAutoDetect().'-Серафим Ясенев');
    }
    public function testGenDetect1014()
    {
        $this->object->setFirstName('Егор');
        $this->object->setSecondName('Яснеев');
        $this->assertEquals('1-Егор Яснеев', $this->object->genderAutoDetect().'-Егор Яснеев');
    }
    public function testGenDetect1015()
    {
        $this->object->setFirstName('Егор');
        $this->object->setSecondName('Яшин');
        $this->assertEquals('1-Егор Яшин', $this->object->genderAutoDetect().'-Егор Яшин');
    }
    public function testGenDetect1016()
    {
        $this->object->setFirstName('Августа');
        $this->object->setSecondName('Абакумова');
        $this->assertEquals('2-Августа Абакумова', $this->object->genderAutoDetect().'-Августа Абакумова');
    }
    public function testGenDetect1017()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setSecondName('Абдулова');
        $this->assertEquals('2-Авдотья Абдулова', $this->object->genderAutoDetect().'-Авдотья Абдулова');
    }
    public function testGenDetect1018()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setSecondName('Абрамова');
        $this->assertEquals('2-Аврелия Абрамова', $this->object->genderAutoDetect().'-Аврелия Абрамова');
    }
    public function testGenDetect1019()
    {
        $this->object->setFirstName('Агния');
        $this->object->setSecondName('Авдеева');
        $this->assertEquals('2-Агния Авдеева', $this->object->genderAutoDetect().'-Агния Авдеева');
    }
    public function testGenDetect1020()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setSecondName('Аверина');
        $this->assertEquals('2-Аграфена Аверина', $this->object->genderAutoDetect().'-Аграфена Аверина');
    }
    public function testGenDetect1021()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setSecondName('Аверьянова');
        $this->assertEquals('2-Агриппина Аверьянова', $this->object->genderAutoDetect().'-Агриппина Аверьянова');
    }
    public function testGenDetect1022()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Агапова');
        $this->assertEquals('2-Аделаида Агапова', $this->object->genderAutoDetect().'-Аделаида Агапова');
    }
    public function testGenDetect1023()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setSecondName('Агафонова');
        $this->assertEquals('2-Аделина Агафонова', $this->object->genderAutoDetect().'-Аделина Агафонова');
    }
    public function testGenDetect1024()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setSecondName('Агейкина');
        $this->assertEquals('2-Азиза Агейкина', $this->object->genderAutoDetect().'-Азиза Агейкина');
    }
    public function testGenDetect1025()
    {
        $this->object->setFirstName('Аида');
        $this->object->setSecondName('Ажищенкова');
        $this->assertEquals('2-Аида Ажищенкова', $this->object->genderAutoDetect().'-Аида Ажищенкова');
    }
    public function testGenDetect1026()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Аксакова');
        $this->assertEquals('2-Александра Аксакова', $this->object->genderAutoDetect().'-Александра Аксакова');
    }
    public function testGenDetect1027()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Аксёнова');
        $this->assertEquals('2-Алина Аксёнова', $this->object->genderAutoDetect().'-Алина Аксёнова');
    }
    public function testGenDetect1028()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Аксенчук');
        $this->assertEquals('2-Алиса Аксенчук', $this->object->genderAutoDetect().'-Алиса Аксенчук');
    }
    public function testGenDetect1029()
    {
        $this->object->setFirstName('Алла');
        $this->object->setSecondName('Аленина');
        $this->assertEquals('2-Алла Аленина', $this->object->genderAutoDetect().'-Алла Аленина');
    }
    public function testGenDetect1030()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setSecondName('Алиева');
        $this->assertEquals('2-Алсу Алиева', $this->object->genderAutoDetect().'-Алсу Алиева');
    }
    public function testGenDetect1031()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Амалиева');
        $this->assertEquals('2-Альбина Амалиева', $this->object->genderAutoDetect().'-Альбина Амалиева');
    }
    public function testGenDetect1032()
    {
        $this->object->setFirstName('Алёна');
        $this->object->setSecondName('Амелина');
        $this->assertEquals('2-Алёна Амелина', $this->object->genderAutoDetect().'-Алёна Амелина');
    }
    public function testGenDetect1033()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Аминаева');
        $this->assertEquals('2-Анастасия Аминаева', $this->object->genderAutoDetect().'-Анастасия Аминаева');
    }
    public function testGenDetect1034()
    {
        $this->object->setFirstName('Ангелина');
        $this->object->setSecondName('Александрова');
        $this->assertEquals('2-Ангелина Александрова', $this->object->genderAutoDetect().'-Ангелина Александрова');
    }
    public function testGenDetect1035()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setSecondName('Алексеева');
        $this->assertEquals('2-Анжелика Алексеева', $this->object->genderAutoDetect().'-Анжелика Алексеева');
    }
    public function testGenDetect1036()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Алёхина');
        $this->assertEquals('2-Анисия Алёхина', $this->object->genderAutoDetect().'-Анисия Алёхина');
    }
    public function testGenDetect1037()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setSecondName('Аллилуева');
        $this->assertEquals('2-Анисья Аллилуева', $this->object->genderAutoDetect().'-Анисья Аллилуева');
    }
    public function testGenDetect1038()
    {
        $this->object->setFirstName('Анна');
        $this->object->setSecondName('Андреева');
        $this->assertEquals('2-Анна Андреева', $this->object->genderAutoDetect().'-Анна Андреева');
    }
    public function testGenDetect1039()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setSecondName('Андреюшкина');
        $this->assertEquals('2-Антонина Андреюшкина', $this->object->genderAutoDetect().'-Антонина Андреюшкина');
    }
    public function testGenDetect1040()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Андроникова');
        $this->assertEquals('2-Анушка Андроникова', $this->object->genderAutoDetect().'-Анушка Андроникова');
    }
    public function testGenDetect1041()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setSecondName('Андропова');
        $this->assertEquals('2-Аполлинария Андропова', $this->object->genderAutoDetect().'-Аполлинария Андропова');
    }
    public function testGenDetect1042()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setSecondName('Аниканова');
        $this->assertEquals('2-Аполлония Аниканова', $this->object->genderAutoDetect().'-Аполлония Аниканова');
    }
    public function testGenDetect1043()
    {
        $this->object->setFirstName('Арна');
        $this->object->setSecondName('Анисимова');
        $this->assertEquals('2-Арна Анисимова', $this->object->genderAutoDetect().'-Арна Анисимова');
    }
    public function testGenDetect1044()
    {
        $this->object->setFirstName('Асель');
        $this->object->setSecondName('Анишина');
        $this->assertEquals('2-Асель Анишина', $this->object->genderAutoDetect().'-Асель Анишина');
    }
    public function testGenDetect1045()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Анникова');
        $this->assertEquals('2-Аурика Анникова', $this->object->genderAutoDetect().'-Аурика Анникова');
    }
    public function testGenDetect1046()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setSecondName('Анохина');
        $this->assertEquals('2-Аэлита Анохина', $this->object->genderAutoDetect().'-Аэлита Анохина');
    }
    public function testGenDetect1047()
    {
        $this->object->setFirstName('Беата');
        $this->object->setSecondName('Аношкина');
        $this->assertEquals('2-Беата Аношкина', $this->object->genderAutoDetect().'-Беата Аношкина');
    }
    public function testGenDetect1048()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Антипова');
        $this->assertEquals('2-Божена Антипова', $this->object->genderAutoDetect().'-Божена Антипова');
    }
    public function testGenDetect1049()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setSecondName('Антонова');
        $this->assertEquals('2-Валентина Антонова', $this->object->genderAutoDetect().'-Валентина Антонова');
    }
    public function testGenDetect1050()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Артамонова');
        $this->assertEquals('2-Варвара Артамонова', $this->object->genderAutoDetect().'-Варвара Артамонова');
    }
    public function testGenDetect1051()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setSecondName('Арефьева');
        $this->assertEquals('2-Василиса Арефьева', $this->object->genderAutoDetect().'-Василиса Арефьева');
    }
    public function testGenDetect1052()
    {
        $this->object->setFirstName('Вера');
        $this->object->setSecondName('Аристархова');
        $this->assertEquals('2-Вера Аристархова', $this->object->genderAutoDetect().'-Вера Аристархова');
    }
    public function testGenDetect1053()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setSecondName('Арсеньева');
        $this->assertEquals('2-Вероника Арсеньева', $this->object->genderAutoDetect().'-Вероника Арсеньева');
    }
    public function testGenDetect1054()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setSecondName('Артёмова');
        $this->assertEquals('2-Виктория Артёмова', $this->object->genderAutoDetect().'-Виктория Артёмова');
    }
    public function testGenDetect1055()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setSecondName('Асланова');
        $this->assertEquals('2-Виолетта Асланова', $this->object->genderAutoDetect().'-Виолетта Асланова');
    }
    public function testGenDetect1056()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Аслаханова');
        $this->assertEquals('2-Владислава Аслаханова', $this->object->genderAutoDetect().'-Владислава Аслаханова');
    }
    public function testGenDetect1057()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Астанкова');
        $this->assertEquals('2-Галина Астанкова', $this->object->genderAutoDetect().'-Галина Астанкова');
    }
    public function testGenDetect1058()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setSecondName('Астафьева');
        $this->assertEquals('2-Геннадия Астафьева', $this->object->genderAutoDetect().'-Геннадия Астафьева');
    }
    public function testGenDetect1059()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Астахова');
        $this->assertEquals('2-Глафира Астахова', $this->object->genderAutoDetect().'-Глафира Астахова');
    }
    public function testGenDetect1060()
    {
        $this->object->setFirstName('Дария');
        $this->object->setSecondName('Афанасьева');
        $this->assertEquals('2-Дария Афанасьева', $this->object->genderAutoDetect().'-Дария Афанасьева');
    }
    public function testGenDetect1061()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setSecondName('Афонина');
        $this->assertEquals('2-Дарья Афонина', $this->object->genderAutoDetect().'-Дарья Афонина');
    }
    public function testGenDetect1062()
    {
        $this->object->setFirstName('Диана');
        $this->object->setSecondName('Аспидова');
        $this->assertEquals('2-Диана Аспидова', $this->object->genderAutoDetect().'-Диана Аспидова');
    }
    public function testGenDetect1063()
    {
        $this->object->setFirstName('Ева');
        $this->object->setSecondName('Бабатьева');
        $this->assertEquals('2-Ева Бабатьева', $this->object->genderAutoDetect().'-Ева Бабатьева');
    }
    public function testGenDetect1064()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Бабикова');
        $this->assertEquals('2-Евгения Бабикова', $this->object->genderAutoDetect().'-Евгения Бабикова');
    }
    public function testGenDetect1065()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setSecondName('Бабичева');
        $this->assertEquals('2-Евдокия Бабичева', $this->object->genderAutoDetect().'-Евдокия Бабичева');
    }
    public function testGenDetect1066()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Бабкина');
        $this->assertEquals('2-Евфросиния Бабкина', $this->object->genderAutoDetect().'-Евфросиния Бабкина');
    }
    public function testGenDetect1067()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setSecondName('Бабурина');
        $this->assertEquals('2-Екатерина Бабурина', $this->object->genderAutoDetect().'-Екатерина Бабурина');
    }
    public function testGenDetect1068()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Багрова');
        $this->assertEquals('2-Елена Багрова', $this->object->genderAutoDetect().'-Елена Багрова');
    }
    public function testGenDetect1069()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setSecondName('Бажанова');
        $this->assertEquals('2-Елизавета Бажанова', $this->object->genderAutoDetect().'-Елизавета Бажанова');
    }
    public function testGenDetect1070()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setSecondName('Баженова');
        $this->assertEquals('2-Жанна Баженова', $this->object->genderAutoDetect().'-Жанна Баженова');
    }
    public function testGenDetect1071()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Базанова');
        $this->assertEquals('2-Зинаида Базанова', $this->object->genderAutoDetect().'-Зинаида Базанова');
    }
    public function testGenDetect1072()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setSecondName('Базарова');
        $this->assertEquals('2-Зоя Базарова', $this->object->genderAutoDetect().'-Зоя Базарова');
    }
    public function testGenDetect1073()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setSecondName('Балакина');
        $this->assertEquals('2-Зульфия Балакина', $this->object->genderAutoDetect().'-Зульфия Балакина');
    }
    public function testGenDetect1074()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setSecondName('Балахнова');
        $this->assertEquals('2-Изабелла Балахнова', $this->object->genderAutoDetect().'-Изабелла Балахнова');
    }
    public function testGenDetect1075()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setSecondName('Балашова');
        $this->assertEquals('2-Иляна Балашова', $this->object->genderAutoDetect().'-Иляна Балашова');
    }
    public function testGenDetect1076()
    {
        $this->object->setFirstName('Инна');
        $this->object->setSecondName('Баранова');
        $this->assertEquals('2-Инна Баранова', $this->object->genderAutoDetect().'-Инна Баранова');
    }
    public function testGenDetect1077()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setSecondName('Барболина');
        $this->assertEquals('2-Иоанна Барболина', $this->object->genderAutoDetect().'-Иоанна Барболина');
    }
    public function testGenDetect1078()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setSecondName('Баренцева');
        $this->assertEquals('2-Иулия Баренцева', $this->object->genderAutoDetect().'-Иулия Баренцева');
    }
    public function testGenDetect1079()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setSecondName('Баринова');
        $this->assertEquals('2-Иуния Баринова', $this->object->genderAutoDetect().'-Иуния Баринова');
    }
    public function testGenDetect1080()
    {
        $this->object->setFirstName('Камола');
        $this->object->setSecondName('Баркова');
        $this->assertEquals('2-Камола Баркова', $this->object->genderAutoDetect().'-Камола Баркова');
    }
    public function testGenDetect1081()
    {
        $this->object->setFirstName('Карина');
        $this->object->setSecondName('Барсукова');
        $this->assertEquals('2-Карина Барсукова', $this->object->genderAutoDetect().'-Карина Барсукова');
    }
    public function testGenDetect1082()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setSecondName('Батрутдинова');
        $this->assertEquals('2-Каролина Батрутдинова', $this->object->genderAutoDetect().'-Каролина Батрутдинова');
    }
    public function testGenDetect1083()
    {
        $this->object->setFirstName('Кира');
        $this->object->setSecondName('Безбородова');
        $this->assertEquals('2-Кира Безбородова', $this->object->genderAutoDetect().'-Кира Безбородова');
    }
    public function testGenDetect1084()
    {
        $this->object->setFirstName('Клара');
        $this->object->setSecondName('Безродная');
        $this->assertEquals('2-Клара Безродная', $this->object->genderAutoDetect().'-Клара Безродная');
    }
    public function testGenDetect1085()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setSecondName('Безрукова');
        $this->assertEquals('2-Клеопатра Безрукова', $this->object->genderAutoDetect().'-Клеопатра Безрукова');
    }
    public function testGenDetect1086()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setSecondName('Безукладникова');
        $this->assertEquals('2-Клотильда Безукладникова', $this->object->genderAutoDetect().'-Клотильда Безукладникова');
    }
    public function testGenDetect1087()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setSecondName('Беликова');
        $this->assertEquals('2-Констанция Беликова', $this->object->genderAutoDetect().'-Констанция Беликова');
    }
    public function testGenDetect1088()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setSecondName('Белова');
        $this->assertEquals('2-Консуэло Белова', $this->object->genderAutoDetect().'-Консуэло Белова');
    }
    public function testGenDetect1089()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Беломестнова');
        $this->assertEquals('2-Корнелия Беломестнова', $this->object->genderAutoDetect().'-Корнелия Беломестнова');
    }
    public function testGenDetect1090()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Бендлина');
        $this->assertEquals('2-Кристина Бендлина', $this->object->genderAutoDetect().'-Кристина Бендлина');
    }
    public function testGenDetect1091()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setSecondName('Бережной');
        $this->assertEquals('2-Ксения Бережной', $this->object->genderAutoDetect().'-Ксения Бережной');
    }
    public function testGenDetect1092()
    {
        $this->object->setFirstName('Лада');
        $this->object->setSecondName('Белоусова');
        $this->assertEquals('2-Лада Белоусова', $this->object->genderAutoDetect().'-Лада Белоусова');
    }
    public function testGenDetect1093()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setSecondName('Бершова');
        $this->assertEquals('2-Лариса Бершова', $this->object->genderAutoDetect().'-Лариса Бершова');
    }
    public function testGenDetect1094()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setSecondName('Беспалова');
        $this->assertEquals('2-Лейла Беспалова', $this->object->genderAutoDetect().'-Лейла Беспалова');
    }
    public function testGenDetect1095()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Бескрёстнова');
        $this->assertEquals('2-Леся Бескрёстнова', $this->object->genderAutoDetect().'-Леся Бескрёстнова');
    }
    public function testGenDetect1096()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setSecondName('Бирюкова');
        $this->assertEquals('2-Ливия Бирюкова', $this->object->genderAutoDetect().'-Ливия Бирюкова');
    }
    public function testGenDetect1097()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Блаженова');
        $this->assertEquals('2-Любовь Блаженова', $this->object->genderAutoDetect().'-Любовь Блаженова');
    }
    public function testGenDetect1098()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setSecondName('Блатова');
        $this->assertEquals('2-Людмила Блатова', $this->object->genderAutoDetect().'-Людмила Блатова');
    }
    public function testGenDetect1099()
    {
        $this->object->setFirstName('Майя');
        $this->object->setSecondName('Блинова');
        $this->assertEquals('2-Майя Блинова', $this->object->genderAutoDetect().'-Майя Блинова');
    }
    public function testGenDetect1100()
    {
        $this->object->setFirstName('Мальвина');
        $this->object->setSecondName('Блохина');
        $this->assertEquals('2-Мальвина Блохина', $this->object->genderAutoDetect().'-Мальвина Блохина');
    }
    public function testGenDetect1101()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setSecondName('Боброва');
        $this->assertEquals('2-Марианна Боброва', $this->object->genderAutoDetect().'-Марианна Боброва');
    }
    public function testGenDetect1102()
    {
        $this->object->setFirstName('Марина');
        $this->object->setSecondName('Бобрикова');
        $this->assertEquals('2-Марина Бобрикова', $this->object->genderAutoDetect().'-Марина Бобрикова');
    }
    public function testGenDetect1103()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setSecondName('Богатырёв');
        $this->assertEquals('2-Матильда Богатырёв', $this->object->genderAutoDetect().'-Матильда Богатырёв');
    }
    public function testGenDetect1104()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setSecondName('Богданова');
        $this->assertEquals('2-Мафтуха Богданова', $this->object->genderAutoDetect().'-Мафтуха Богданова');
    }
    public function testGenDetect1105()
    {
        $this->object->setFirstName('Маша');
        $this->object->setSecondName('Боголепова');
        $this->assertEquals('2-Маша Боголепова', $this->object->genderAutoDetect().'-Маша Боголепова');
    }
    public function testGenDetect1106()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setSecondName('Боголюбова');
        $this->assertEquals('2-Мелания Боголюбова', $this->object->genderAutoDetect().'-Мелания Боголюбова');
    }
    public function testGenDetect1107()
    {
        $this->object->setFirstName('Милена');
        $this->object->setSecondName('Богомазова');
        $this->assertEquals('2-Милена Богомазова', $this->object->genderAutoDetect().'-Милена Богомазова');
    }
    public function testGenDetect1108()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setSecondName('Богомолова');
        $this->assertEquals('2-Мэри Богомолова', $this->object->genderAutoDetect().'-Мэри Богомолова');
    }
    public function testGenDetect1109()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setSecondName('Богрова');
        $this->assertEquals('2-Надежда Богрова', $this->object->genderAutoDetect().'-Надежда Богрова');
    }
    public function testGenDetect1110()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setSecondName('Бойкова');
        $this->assertEquals('2-Наталия Бойкова', $this->object->genderAutoDetect().'-Наталия Бойкова');
    }
    public function testGenDetect1111()
    {
        $this->object->setFirstName('Нина');
        $this->object->setSecondName('Болотникова');
        $this->assertEquals('2-Нина Болотникова', $this->object->genderAutoDetect().'-Нина Болотникова');
    }
    public function testGenDetect1112()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setSecondName('Болтоногова');
        $this->assertEquals('2-Нинель Болтоногова', $this->object->genderAutoDetect().'-Нинель Болтоногова');
    }
    public function testGenDetect1113()
    {
        $this->object->setFirstName('Нона');
        $this->object->setSecondName('Большова');
        $this->assertEquals('2-Нона Большова', $this->object->genderAutoDetect().'-Нона Большова');
    }
    public function testGenDetect1114()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Бореева');
        $this->assertEquals('2-Нонна Бореева', $this->object->genderAutoDetect().'-Нонна Бореева');
    }
    public function testGenDetect1115()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setSecondName('Бортникова');
        $this->assertEquals('2-Оксана Бортникова', $this->object->genderAutoDetect().'-Оксана Бортникова');
    }
    public function testGenDetect1116()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setSecondName('Борзилова');
        $this->assertEquals('2-Октавия Борзилова', $this->object->genderAutoDetect().'-Октавия Борзилова');
    }
    public function testGenDetect1117()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Борцова');
        $this->assertEquals('2-Олеся Борцова', $this->object->genderAutoDetect().'-Олеся Борцова');
    }
    public function testGenDetect1118()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setSecondName('Брагина');
        $this->assertEquals('2-Ольга Брагина', $this->object->genderAutoDetect().'-Ольга Брагина');
    }
    public function testGenDetect1119()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setSecondName('Брежнева');
        $this->assertEquals('2-Павлина Брежнева', $this->object->genderAutoDetect().'-Павлина Брежнева');
    }
    public function testGenDetect1120()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Бугакова');
        $this->assertEquals('2-Пелагея Бугакова', $this->object->genderAutoDetect().'-Пелагея Бугакова');
    }
    public function testGenDetect1121()
    {
        $this->object->setFirstName('Полина');
        $this->object->setSecondName('Буданова');
        $this->assertEquals('2-Полина Буданова', $this->object->genderAutoDetect().'-Полина Буданова');
    }
    public function testGenDetect1122()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Будникова');
        $this->assertEquals('2-Прасковья Будникова', $this->object->genderAutoDetect().'-Прасковья Будникова');
    }
    public function testGenDetect1123()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Будылина');
        $this->assertEquals('2-Рада Будылина', $this->object->genderAutoDetect().'-Рада Будылина');
    }
    public function testGenDetect1124()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setSecondName('Букина');
        $this->assertEquals('2-Раиса Букина', $this->object->genderAutoDetect().'-Раиса Букина');
    }
    public function testGenDetect1125()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setSecondName('Букирь');
        $this->assertEquals('2-Ребекка Букирь', $this->object->genderAutoDetect().'-Ребекка Букирь');
    }
    public function testGenDetect1126()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setSecondName('Буклина');
        $this->assertEquals('2-Ревекка Буклина', $this->object->genderAutoDetect().'-Ревекка Буклина');
    }
    public function testGenDetect1127()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setSecondName('Булгакова');
        $this->assertEquals('2-Розалия Булгакова', $this->object->genderAutoDetect().'-Розалия Булгакова');
    }
    public function testGenDetect1128()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setSecondName('Бунина');
        $this->assertEquals('2-Розарио Бунина', $this->object->genderAutoDetect().'-Розарио Бунина');
    }
    public function testGenDetect1129()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Буркова');
        $this->assertEquals('2-Сара Буркова', $this->object->genderAutoDetect().'-Сара Буркова');
    }
    public function testGenDetect1130()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setSecondName('Бурова');
        $this->assertEquals('2-Светлана Бурова', $this->object->genderAutoDetect().'-Светлана Бурова');
    }
    public function testGenDetect1131()
    {
        $this->object->setFirstName('Снежана');
        $this->object->setSecondName('Бурцова');
        $this->assertEquals('2-Снежана Бурцова', $this->object->genderAutoDetect().'-Снежана Бурцова');
    }
    public function testGenDetect1132()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Бурякова');
        $this->assertEquals('2-Стелла Бурякова', $this->object->genderAutoDetect().'-Стелла Бурякова');
    }
    public function testGenDetect1133()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setSecondName('Бутылина');
        $this->assertEquals('2-Степанида Бутылина', $this->object->genderAutoDetect().'-Степанида Бутылина');
    }
    public function testGenDetect1134()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setSecondName('Былинкина');
        $this->assertEquals('2-Стефания Былинкина', $this->object->genderAutoDetect().'-Стефания Былинкина');
    }
    public function testGenDetect1135()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setSecondName('Бычкова');
        $this->assertEquals('2-Суламифь Бычкова', $this->object->genderAutoDetect().'-Суламифь Бычкова');
    }
    public function testGenDetect1136()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Вавилова');
        $this->assertEquals('2-Таисия Вавилова', $this->object->genderAutoDetect().'-Таисия Вавилова');
    }
    public function testGenDetect1137()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setSecondName('Вагина');
        $this->assertEquals('2-Тамара Вагина', $this->object->genderAutoDetect().'-Тамара Вагина');
    }
    public function testGenDetect1138()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Вазова');
        $this->assertEquals('2-Татьяна Вазова', $this->object->genderAutoDetect().'-Татьяна Вазова');
    }
    public function testGenDetect1139()
    {
        $this->object->setFirstName('Улла');
        $this->object->setSecondName('Валевач');
        $this->assertEquals('2-Улла Валевач', $this->object->genderAutoDetect().'-Улла Валевач');
    }
    public function testGenDetect1140()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Варенникова');
        $this->assertEquals('2-Ульрика Варенникова', $this->object->genderAutoDetect().'-Ульрика Варенникова');
    }
    public function testGenDetect1141()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setSecondName('Васильева');
        $this->assertEquals('2-Ульяна Васильева', $this->object->genderAutoDetect().'-Ульяна Васильева');
    }
    public function testGenDetect1142()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setSecondName('Васина');
        $this->assertEquals('2-Урсула Васина', $this->object->genderAutoDetect().'-Урсула Васина');
    }
    public function testGenDetect1143()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Васнева');
        $this->assertEquals('2-Фаина Васнева', $this->object->genderAutoDetect().'-Фаина Васнева');
    }
    public function testGenDetect1144()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setSecondName('Васнецова');
        $this->assertEquals('2-Фатима Васнецова', $this->object->genderAutoDetect().'-Фатима Васнецова');
    }
    public function testGenDetect1145()
    {
        $this->object->setFirstName('Феба');
        $this->object->setSecondName('Вахрова');
        $this->assertEquals('2-Феба Вахрова', $this->object->genderAutoDetect().'-Феба Вахрова');
    }
    public function testGenDetect1146()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setSecondName('Вахрушева');
        $this->assertEquals('2-Феодора Вахрушева', $this->object->genderAutoDetect().'-Феодора Вахрушева');
    }
    public function testGenDetect1147()
    {
        $this->object->setFirstName('Филлида');
        $this->object->setSecondName('Венедиктова');
        $this->assertEquals('2-Филлида Венедиктова', $this->object->genderAutoDetect().'-Филлида Венедиктова');
    }
    public function testGenDetect1148()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setSecondName('Веденеева');
        $this->assertEquals('2-Фрида Веденеева', $this->object->genderAutoDetect().'-Фрида Веденеева');
    }
    public function testGenDetect1149()
    {
        $this->object->setFirstName('Фёкла');
        $this->object->setSecondName('Веденина');
        $this->assertEquals('2-Фёкла Веденина', $this->object->genderAutoDetect().'-Фёкла Веденина');
    }
    public function testGenDetect1150()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Ведерникова');
        $this->assertEquals('2-Шарлотта Ведерникова', $this->object->genderAutoDetect().'-Шарлотта Ведерникова');
    }
    public function testGenDetect1151()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setSecondName('Вергунова');
        $this->assertEquals('2-Шейла Вергунова', $this->object->genderAutoDetect().'-Шейла Вергунова');
    }
    public function testGenDetect1152()
    {
        $this->object->setFirstName('Шона');
        $this->object->setSecondName('Верещагина');
        $this->assertEquals('2-Шона Верещагина', $this->object->genderAutoDetect().'-Шона Верещагина');
    }
    public function testGenDetect1153()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Вершинина');
        $this->assertEquals('2-Элеонора Вершинина', $this->object->genderAutoDetect().'-Элеонора Вершинина');
    }
    public function testGenDetect1154()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Веселова');
        $this->assertEquals('2-Элина Веселова', $this->object->genderAutoDetect().'-Элина Веселова');
    }
    public function testGenDetect1155()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setSecondName('Викашева');
        $this->assertEquals('2-Эльвира Викашева', $this->object->genderAutoDetect().'-Эльвира Викашева');
    }
    public function testGenDetect1156()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Виноградова');
        $this->assertEquals('2-Эми Виноградова', $this->object->genderAutoDetect().'-Эми Виноградова');
    }
    public function testGenDetect1157()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setSecondName('Винокурова');
        $this->assertEquals('2-Юлианна Винокурова', $this->object->genderAutoDetect().'-Юлианна Винокурова');
    }
    public function testGenDetect1158()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setSecondName('Витаева');
        $this->assertEquals('2-Юлия Витаева', $this->object->genderAutoDetect().'-Юлия Витаева');
    }
    public function testGenDetect1159()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Витвинина');
        $this->assertEquals('2-Юния Витвинина', $this->object->genderAutoDetect().'-Юния Витвинина');
    }
    public function testGenDetect1160()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Вицина');
        $this->assertEquals('2-Ярослава Вицина', $this->object->genderAutoDetect().'-Ярослава Вицина');
    }
    public function testGenDetect1161()
    {
        $this->object->setFirstName('Алла');
        $this->object->setSecondName('Водоватова');
        $this->assertEquals('2-Алла Водоватова', $this->object->genderAutoDetect().'-Алла Водоватова');
    }
    public function testGenDetect1162()
    {
        $this->object->setFirstName('Маша');
        $this->object->setSecondName('Воликова');
        $this->assertEquals('2-Маша Воликова', $this->object->genderAutoDetect().'-Маша Воликова');
    }
    public function testGenDetect1163()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Волкова');
        $this->assertEquals('2-Рада Волкова', $this->object->genderAutoDetect().'-Рада Волкова');
    }
    public function testGenDetect1164()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setSecondName('Вольвакова');
        $this->assertEquals('2-Елизавета Вольвакова', $this->object->genderAutoDetect().'-Елизавета Вольвакова');
    }
    public function testGenDetect1165()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setSecondName('Воробьева');
        $this->assertEquals('2-Стефания Воробьева', $this->object->genderAutoDetect().'-Стефания Воробьева');
    }
    public function testGenDetect1166()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Воронина');
        $this->assertEquals('2-Ярослава Воронина', $this->object->genderAutoDetect().'-Ярослава Воронина');
    }
    public function testGenDetect1167()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setSecondName('Воронова');
        $this->assertEquals('2-Ревекка Воронова', $this->object->genderAutoDetect().'-Ревекка Воронова');
    }
    public function testGenDetect1168()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Воронкова');
        $this->assertEquals('2-Варвара Воронкова', $this->object->genderAutoDetect().'-Варвара Воронкова');
    }
    public function testGenDetect1169()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setSecondName('Воронцова');
        $this->assertEquals('2-Октавия Воронцова', $this->object->genderAutoDetect().'-Октавия Воронцова');
    }
    public function testGenDetect1170()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Воскобойникова');
        $this->assertEquals('2-Елена Воскобойникова', $this->object->genderAutoDetect().'-Елена Воскобойникова');
    }
    public function testGenDetect1171()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Вотякова');
        $this->assertEquals('2-Анушка Вотякова', $this->object->genderAutoDetect().'-Анушка Вотякова');
    }
    public function testGenDetect1172()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Вырыпаева');
        $this->assertEquals('2-Анастасия Вырыпаева', $this->object->genderAutoDetect().'-Анастасия Вырыпаева');
    }
    public function testGenDetect1173()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setSecondName('Гаврикова');
        $this->assertEquals('2-Эльвира Гаврикова', $this->object->genderAutoDetect().'-Эльвира Гаврикова');
    }
    public function testGenDetect1174()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Гаврилова');
        $this->assertEquals('2-Татьяна Гаврилова', $this->object->genderAutoDetect().'-Татьяна Гаврилова');
    }
    public function testGenDetect1175()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Гагарина');
        $this->assertEquals('2-Анушка Гагарина', $this->object->genderAutoDetect().'-Анушка Гагарина');
    }
    public function testGenDetect1176()
    {
        $this->object->setFirstName('Шона');
        $this->object->setSecondName('Гаголина');
        $this->assertEquals('2-Шона Гаголина', $this->object->genderAutoDetect().'-Шона Гаголина');
    }
    public function testGenDetect1177()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Галдина');
        $this->assertEquals('2-Евфросиния Галдина', $this->object->genderAutoDetect().'-Евфросиния Галдина');
    }
    public function testGenDetect1178()
    {
        $this->object->setFirstName('Камола');
        $this->object->setSecondName('Галкина');
        $this->assertEquals('2-Камола Галкина', $this->object->genderAutoDetect().'-Камола Галкина');
    }
    public function testGenDetect1179()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Галыгина');
        $this->assertEquals('2-Глафира Галыгина', $this->object->genderAutoDetect().'-Глафира Галыгина');
    }
    public function testGenDetect1180()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setSecondName('Гарина');
        $this->assertEquals('2-Нинель Гарина', $this->object->genderAutoDetect().'-Нинель Гарина');
    }
    public function testGenDetect1181()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Гачева');
        $this->assertEquals('2-Татьяна Гачева', $this->object->genderAutoDetect().'-Татьяна Гачева');
    }
    public function testGenDetect1182()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setSecondName('Генкина');
        $this->assertEquals('2-Юлия Генкина', $this->object->genderAutoDetect().'-Юлия Генкина');
    }
    public function testGenDetect1183()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Герасимова');
        $this->assertEquals('2-Эми Герасимова', $this->object->genderAutoDetect().'-Эми Герасимова');
    }
    public function testGenDetect1184()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setSecondName('Гибазова');
        $this->assertEquals('2-Аграфена Гибазова', $this->object->genderAutoDetect().'-Аграфена Гибазова');
    }
    public function testGenDetect1185()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Гилёва');
        $this->assertEquals('2-Кристина Гилёва', $this->object->genderAutoDetect().'-Кристина Гилёва');
    }
    public function testGenDetect1186()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setSecondName('Глазкова');
        $this->assertEquals('2-Раиса Глазкова', $this->object->genderAutoDetect().'-Раиса Глазкова');
    }
    public function testGenDetect1187()
    {
        $this->object->setFirstName('Милена');
        $this->object->setSecondName('Голованова');
        $this->assertEquals('2-Милена Голованова', $this->object->genderAutoDetect().'-Милена Голованова');
    }
    public function testGenDetect1188()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Головаина');
        $this->assertEquals('2-Таисия Головаина', $this->object->genderAutoDetect().'-Таисия Головаина');
    }
    public function testGenDetect1189()
    {
        $this->object->setFirstName('Феба');
        $this->object->setSecondName('Голодяева');
        $this->assertEquals('2-Феба Голодяева', $this->object->genderAutoDetect().'-Феба Голодяева');
    }
    public function testGenDetect1190()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Голубева');
        $this->assertEquals('2-Альбина Голубева', $this->object->genderAutoDetect().'-Альбина Голубева');
    }
    public function testGenDetect1191()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Голубова');
        $this->assertEquals('2-Любовь Голубова', $this->object->genderAutoDetect().'-Любовь Голубова');
    }
    public function testGenDetect1192()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Голубцова');
        $this->assertEquals('2-Юния Голубцова', $this->object->genderAutoDetect().'-Юния Голубцова');
    }
    public function testGenDetect1193()
    {
        $this->object->setFirstName('Полина');
        $this->object->setSecondName('Гончарова');
        $this->assertEquals('2-Полина Гончарова', $this->object->genderAutoDetect().'-Полина Гончарова');
    }
    public function testGenDetect1194()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Горбачёв');
        $this->assertEquals('2-Глафира Горбачёв', $this->object->genderAutoDetect().'-Глафира Горбачёв');
    }
    public function testGenDetect1195()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setSecondName('Горбунова');
        $this->assertEquals('2-Екатерина Горбунова', $this->object->genderAutoDetect().'-Екатерина Горбунова');
    }
    public function testGenDetect1196()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Горбункова');
        $this->assertEquals('2-Леся Горбункова', $this->object->genderAutoDetect().'-Леся Горбункова');
    }
    public function testGenDetect1197()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Горева');
        $this->assertEquals('2-Глафира Горева', $this->object->genderAutoDetect().'-Глафира Горева');
    }
    public function testGenDetect1198()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Горелова');
        $this->assertEquals('2-Анастасия Горелова', $this->object->genderAutoDetect().'-Анастасия Горелова');
    }
    public function testGenDetect1199()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Горемыкина');
        $this->assertEquals('2-Сара Горемыкина', $this->object->genderAutoDetect().'-Сара Горемыкина');
    }
    public function testGenDetect1200()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Горюнова');
        $this->assertEquals('2-Юния Горюнова', $this->object->genderAutoDetect().'-Юния Горюнова');
    }
    public function testGenDetect1201()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setSecondName('Грачёва');
        $this->assertEquals('2-Клеопатра Грачёва', $this->object->genderAutoDetect().'-Клеопатра Грачёва');
    }
    public function testGenDetect1202()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Графова');
        $this->assertEquals('2-Элина Графова', $this->object->genderAutoDetect().'-Элина Графова');
    }
    public function testGenDetect1203()
    {
        $this->object->setFirstName('Алёна');
        $this->object->setSecondName('Гретченко');
        $this->assertEquals('2-Алёна Гретченко', $this->object->genderAutoDetect().'-Алёна Гретченко');
    }
    public function testGenDetect1204()
    {
        $this->object->setFirstName('Камола');
        $this->object->setSecondName('Гречко');
        $this->assertEquals('2-Камола Гречко', $this->object->genderAutoDetect().'-Камола Гречко');
    }
    public function testGenDetect1205()
    {
        $this->object->setFirstName('Снежана');
        $this->object->setSecondName('Грешнева');
        $this->assertEquals('2-Снежана Грешнева', $this->object->genderAutoDetect().'-Снежана Грешнева');
    }
    public function testGenDetect1206()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Грибова');
        $this->assertEquals('2-Владислава Грибова', $this->object->genderAutoDetect().'-Владислава Грибова');
    }
    public function testGenDetect1207()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Грибоедова');
        $this->assertEquals('2-Зинаида Грибоедова', $this->object->genderAutoDetect().'-Зинаида Грибоедова');
    }
    public function testGenDetect1208()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setSecondName('Григорьева');
        $this->assertEquals('2-Анисья Григорьева', $this->object->genderAutoDetect().'-Анисья Григорьева');
    }
    public function testGenDetect1209()
    {
        $this->object->setFirstName('Полина');
        $this->object->setSecondName('Гринаина');
        $this->assertEquals('2-Полина Гринаина', $this->object->genderAutoDetect().'-Полина Гринаина');
    }
    public function testGenDetect1210()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Гришина');
        $this->assertEquals('2-Нонна Гришина', $this->object->genderAutoDetect().'-Нонна Гришина');
    }
    public function testGenDetect1211()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setSecondName('Громова');
        $this->assertEquals('2-Стефания Громова', $this->object->genderAutoDetect().'-Стефания Громова');
    }
    public function testGenDetect1212()
    {
        $this->object->setFirstName('Майя');
        $this->object->setSecondName('Громыко');
        $this->assertEquals('2-Майя Громыко', $this->object->genderAutoDetect().'-Майя Громыко');
    }
    public function testGenDetect1213()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setSecondName('Гулина');
        $this->assertEquals('2-Нинель Гулина', $this->object->genderAutoDetect().'-Нинель Гулина');
    }
    public function testGenDetect1214()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Гурьянова');
        $this->assertEquals('2-Сара Гурьянова', $this->object->genderAutoDetect().'-Сара Гурьянова');
    }
    public function testGenDetect1215()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setSecondName('Гусарова');
        $this->assertEquals('2-Матильда Гусарова', $this->object->genderAutoDetect().'-Матильда Гусарова');
    }
    public function testGenDetect1216()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setSecondName('Гусева');
        $this->assertEquals('2-Аполлинария Гусева', $this->object->genderAutoDetect().'-Аполлинария Гусева');
    }
    public function testGenDetect1217()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setSecondName('Гунина');
        $this->assertEquals('2-Лариса Гунина', $this->object->genderAutoDetect().'-Лариса Гунина');
    }
    public function testGenDetect1218()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Гущина');
        $this->assertEquals('2-Варвара Гущина', $this->object->genderAutoDetect().'-Варвара Гущина');
    }
    public function testGenDetect1219()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setSecondName('Головаха');
        $this->assertEquals('2-Авдотья Головаха', $this->object->genderAutoDetect().'-Авдотья Головаха');
    }
    public function testGenDetect1220()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setSecondName('Дорофеева');
        $this->assertEquals('2-Иоанна Дорофеева', $this->object->genderAutoDetect().'-Иоанна Дорофеева');
    }
    public function testGenDetect1221()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Давыдкина');
        $this->assertEquals('2-Евфросиния Давыдкина', $this->object->genderAutoDetect().'-Евфросиния Давыдкина');
    }
    public function testGenDetect1222()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setSecondName('Данильцина');
        $this->assertEquals('2-Людмила Данильцина', $this->object->genderAutoDetect().'-Людмила Данильцина');
    }
    public function testGenDetect1223()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setSecondName('Дворникова');
        $this->assertEquals('2-Иляна Дворникова', $this->object->genderAutoDetect().'-Иляна Дворникова');
    }
    public function testGenDetect1224()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Деменок');
        $this->assertEquals('2-Александра Деменок', $this->object->genderAutoDetect().'-Александра Деменок');
    }
    public function testGenDetect1225()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setSecondName('Дементьева');
        $this->assertEquals('2-Урсула Дементьева', $this->object->genderAutoDetect().'-Урсула Дементьева');
    }
    public function testGenDetect1226()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setSecondName('Демидова');
        $this->assertEquals('2-Розалия Демидова', $this->object->genderAutoDetect().'-Розалия Демидова');
    }
    public function testGenDetect1227()
    {
        $this->object->setFirstName('Маша');
        $this->object->setSecondName('Деникина');
        $this->assertEquals('2-Маша Деникина', $this->object->genderAutoDetect().'-Маша Деникина');
    }
    public function testGenDetect1228()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setSecondName('Дёгтина');
        $this->assertEquals('2-Аполлинария Дёгтина', $this->object->genderAutoDetect().'-Аполлинария Дёгтина');
    }
    public function testGenDetect1229()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setSecondName('Дегтярева');
        $this->assertEquals('2-Фатима Дегтярева', $this->object->genderAutoDetect().'-Фатима Дегтярева');
    }
    public function testGenDetect1230()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setSecondName('Дежнёв');
        $this->assertEquals('2-Изабелла Дежнёв', $this->object->genderAutoDetect().'-Изабелла Дежнёв');
    }
    public function testGenDetect1231()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Делова');
        $this->assertEquals('2-Анушка Делова', $this->object->genderAutoDetect().'-Анушка Делова');
    }
    public function testGenDetect1232()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setSecondName('Дементьева');
        $this->assertEquals('2-Елизавета Дементьева', $this->object->genderAutoDetect().'-Елизавета Дементьева');
    }
    public function testGenDetect1233()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Дёмина');
        $this->assertEquals('2-Елена Дёмина', $this->object->genderAutoDetect().'-Елена Дёмина');
    }
    public function testGenDetect1234()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Державина');
        $this->assertEquals('2-Владислава Державина', $this->object->genderAutoDetect().'-Владислава Державина');
    }
    public function testGenDetect1235()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setSecondName('Дернова');
        $this->assertEquals('2-Стефания Дернова', $this->object->genderAutoDetect().'-Стефания Дернова');
    }
    public function testGenDetect1236()
    {
        $this->object->setFirstName('Анна');
        $this->object->setSecondName('Десяткова');
        $this->assertEquals('2-Анна Десяткова', $this->object->genderAutoDetect().'-Анна Десяткова');
    }
    public function testGenDetect1237()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Дмитриева');
        $this->assertEquals('2-Любовь Дмитриева', $this->object->genderAutoDetect().'-Любовь Дмитриева');
    }
    public function testGenDetect1238()
    {
        $this->object->setFirstName('Асель');
        $this->object->setSecondName('Добронравова');
        $this->assertEquals('2-Асель Добронравова', $this->object->genderAutoDetect().'-Асель Добронравова');
    }
    public function testGenDetect1239()
    {
        $this->object->setFirstName('Дария');
        $this->object->setSecondName('Добрынина');
        $this->assertEquals('2-Дария Добрынина', $this->object->genderAutoDetect().'-Дария Добрынина');
    }
    public function testGenDetect1240()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Долгорукова');
        $this->assertEquals('2-Галина Долгорукова', $this->object->genderAutoDetect().'-Галина Долгорукова');
    }
    public function testGenDetect1241()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Должикова');
        $this->assertEquals('2-Фаина Должикова', $this->object->genderAutoDetect().'-Фаина Должикова');
    }
    public function testGenDetect1242()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Домашева');
        $this->assertEquals('2-Анастасия Домашева', $this->object->genderAutoDetect().'-Анастасия Домашева');
    }
    public function testGenDetect1243()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Достовалова');
        $this->assertEquals('2-Ульрика Достовалова', $this->object->genderAutoDetect().'-Ульрика Достовалова');
    }
    public function testGenDetect1244()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setSecondName('Драгомирова');
        $this->assertEquals('2-Лейла Драгомирова', $this->object->genderAutoDetect().'-Лейла Драгомирова');
    }
    public function testGenDetect1245()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setSecondName('Дресвянина');
        $this->assertEquals('2-Феодора Дресвянина', $this->object->genderAutoDetect().'-Феодора Дресвянина');
    }
    public function testGenDetect1246()
    {
        $this->object->setFirstName('Кира');
        $this->object->setSecondName('Дрёмова');
        $this->assertEquals('2-Кира Дрёмова', $this->object->genderAutoDetect().'-Кира Дрёмова');
    }
    public function testGenDetect1247()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Друганина');
        $this->assertEquals('2-Пелагея Друганина', $this->object->genderAutoDetect().'-Пелагея Друганина');
    }
    public function testGenDetect1248()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setSecondName('Другова');
        $this->assertEquals('2-Иулия Другова', $this->object->genderAutoDetect().'-Иулия Другова');
    }
    public function testGenDetect1249()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Дубинина');
        $this->assertEquals('2-Олеся Дубинина', $this->object->genderAutoDetect().'-Олеся Дубинина');
    }
    public function testGenDetect1250()
    {
        $this->object->setFirstName('Полина');
        $this->object->setSecondName('Дубова');
        $this->assertEquals('2-Полина Дубова', $this->object->genderAutoDetect().'-Полина Дубова');
    }
    public function testGenDetect1251()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Дубровская');
        $this->assertEquals('2-Ульрика Дубровская', $this->object->genderAutoDetect().'-Ульрика Дубровская');
    }
    public function testGenDetect1252()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Дульцева');
        $this->assertEquals('2-Аделаида Дульцева', $this->object->genderAutoDetect().'-Аделаида Дульцева');
    }
    public function testGenDetect1253()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Думановская');
        $this->assertEquals('2-Глафира Думановская', $this->object->genderAutoDetect().'-Глафира Думановская');
    }
    public function testGenDetect1254()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setSecondName('Дурова');
        $this->assertEquals('2-Виктория Дурова', $this->object->genderAutoDetect().'-Виктория Дурова');
    }
    public function testGenDetect1255()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Дятлова');
        $this->assertEquals('2-Анастасия Дятлова', $this->object->genderAutoDetect().'-Анастасия Дятлова');
    }
    public function testGenDetect1256()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setSecondName('Евстигнеева');
        $this->assertEquals('2-Аполлинария Евстигнеева', $this->object->genderAutoDetect().'-Аполлинария Евстигнеева');
    }
    public function testGenDetect1257()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setSecondName('Егорова');
        $this->assertEquals('2-Агриппина Егорова', $this->object->genderAutoDetect().'-Агриппина Егорова');
    }
    public function testGenDetect1258()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Едемская');
        $this->assertEquals('2-Рада Едемская', $this->object->genderAutoDetect().'-Рада Едемская');
    }
    public function testGenDetect1259()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Ежова');
        $this->assertEquals('2-Евфросиния Ежова', $this->object->genderAutoDetect().'-Евфросиния Ежова');
    }
    public function testGenDetect1260()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Елагина');
        $this->assertEquals('2-Шарлотта Елагина', $this->object->genderAutoDetect().'-Шарлотта Елагина');
    }
    public function testGenDetect1261()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Елизарова');
        $this->assertEquals('2-Анисия Елизарова', $this->object->genderAutoDetect().'-Анисия Елизарова');
    }
    public function testGenDetect1262()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Елисеева');
        $this->assertEquals('2-Кристина Елисеева', $this->object->genderAutoDetect().'-Кристина Елисеева');
    }
    public function testGenDetect1263()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setSecondName('Ельцина');
        $this->assertEquals('2-Геннадия Ельцина', $this->object->genderAutoDetect().'-Геннадия Ельцина');
    }
    public function testGenDetect1264()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Ельцова');
        $this->assertEquals('2-Корнелия Ельцова', $this->object->genderAutoDetect().'-Корнелия Ельцова');
    }
    public function testGenDetect1265()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setSecondName('Емельяненко');
        $this->assertEquals('2-Светлана Емельяненко', $this->object->genderAutoDetect().'-Светлана Емельяненко');
    }
    public function testGenDetect1266()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Емельянова');
        $this->assertEquals('2-Альбина Емельянова', $this->object->genderAutoDetect().'-Альбина Емельянова');
    }
    public function testGenDetect1267()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setSecondName('Енина');
        $this->assertEquals('2-Нинель Енина', $this->object->genderAutoDetect().'-Нинель Енина');
    }
    public function testGenDetect1268()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Ерзова');
        $this->assertEquals('2-Евфросиния Ерзова', $this->object->genderAutoDetect().'-Евфросиния Ерзова');
    }
    public function testGenDetect1269()
    {
        $this->object->setFirstName('Дария');
        $this->object->setSecondName('Ермакова');
        $this->assertEquals('2-Дария Ермакова', $this->object->genderAutoDetect().'-Дария Ермакова');
    }
    public function testGenDetect1270()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Ермилова');
        $this->assertEquals('2-Эми Ермилова', $this->object->genderAutoDetect().'-Эми Ермилова');
    }
    public function testGenDetect1271()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setSecondName('Еромеева');
        $this->assertEquals('2-Мэри Еромеева', $this->object->genderAutoDetect().'-Мэри Еромеева');
    }
    public function testGenDetect1272()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setSecondName('Ерофеева');
        $this->assertEquals('2-Аполлония Ерофеева', $this->object->genderAutoDetect().'-Аполлония Ерофеева');
    }
    public function testGenDetect1273()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Ершова');
        $this->assertEquals('2-Алиса Ершова', $this->object->genderAutoDetect().'-Алиса Ершова');
    }
    public function testGenDetect1274()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setSecondName('Есипова');
        $this->assertEquals('2-Консуэло Есипова', $this->object->genderAutoDetect().'-Консуэло Есипова');
    }
    public function testGenDetect1275()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Ефимова');
        $this->assertEquals('2-Пелагея Ефимова', $this->object->genderAutoDetect().'-Пелагея Ефимова');
    }
    public function testGenDetect1276()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Ефремова');
        $this->assertEquals('2-Юния Ефремова', $this->object->genderAutoDetect().'-Юния Ефремова');
    }
    public function testGenDetect1277()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setSecondName('Емелина');
        $this->assertEquals('2-Эльвира Емелина', $this->object->genderAutoDetect().'-Эльвира Емелина');
    }
    public function testGenDetect1278()
    {
        $this->object->setFirstName('Камола');
        $this->object->setSecondName('Ерохина');
        $this->assertEquals('2-Камола Ерохина', $this->object->genderAutoDetect().'-Камола Ерохина');
    }
    public function testGenDetect1279()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setSecondName('Ерёмина');
        $this->assertEquals('2-Иоанна Ерёмина', $this->object->genderAutoDetect().'-Иоанна Ерёмина');
    }
    public function testGenDetect1280()
    {
        $this->object->setFirstName('Нина');
        $this->object->setSecondName('Ешеваская');
        $this->assertEquals('2-Нина Ешеваская', $this->object->genderAutoDetect().'-Нина Ешеваская');
    }
    public function testGenDetect1281()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Жабина');
        $this->assertEquals('2-Анушка Жабина', $this->object->genderAutoDetect().'-Анушка Жабина');
    }
    public function testGenDetect1282()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Жаркова');
        $this->assertEquals('2-Владислава Жаркова', $this->object->genderAutoDetect().'-Владислава Жаркова');
    }
    public function testGenDetect1283()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setSecondName('Жарыхина');
        $this->assertEquals('2-Ольга Жарыхина', $this->object->genderAutoDetect().'-Ольга Жарыхина');
    }
    public function testGenDetect1284()
    {
        $this->object->setFirstName('Клара');
        $this->object->setSecondName('Жвикова');
        $this->assertEquals('2-Клара Жвикова', $this->object->genderAutoDetect().'-Клара Жвикова');
    }
    public function testGenDetect1285()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setSecondName('Жданова');
        $this->assertEquals('2-Лейла Жданова', $this->object->genderAutoDetect().'-Лейла Жданова');
    }
    public function testGenDetect1286()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setSecondName('Жеглова');
        $this->assertEquals('2-Суламифь Жеглова', $this->object->genderAutoDetect().'-Суламифь Жеглова');
    }
    public function testGenDetect1287()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setSecondName('Железкина');
        $this->assertEquals('2-Надежда Железкина', $this->object->genderAutoDetect().'-Надежда Железкина');
    }
    public function testGenDetect1288()
    {
        $this->object->setFirstName('Мальвина');
        $this->object->setSecondName('Жестакова');
        $this->assertEquals('2-Мальвина Жестакова', $this->object->genderAutoDetect().'-Мальвина Жестакова');
    }
    public function testGenDetect1289()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Живенкова');
        $this->assertEquals('2-Любовь Живенкова', $this->object->genderAutoDetect().'-Любовь Живенкова');
    }
    public function testGenDetect1290()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Жиглова');
        $this->assertEquals('2-Юния Жиглова', $this->object->genderAutoDetect().'-Юния Жиглова');
    }
    public function testGenDetect1291()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Жигунова');
        $this->assertEquals('2-Корнелия Жигунова', $this->object->genderAutoDetect().'-Корнелия Жигунова');
    }
    public function testGenDetect1292()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setSecondName('Жидкова');
        $this->assertEquals('2-Ольга Жидкова', $this->object->genderAutoDetect().'-Ольга Жидкова');
    }
    public function testGenDetect1293()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Жикина');
        $this->assertEquals('2-Корнелия Жикина', $this->object->genderAutoDetect().'-Корнелия Жикина');
    }
    public function testGenDetect1294()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Жилина');
        $this->assertEquals('2-Стелла Жилина', $this->object->genderAutoDetect().'-Стелла Жилина');
    }
    public function testGenDetect1295()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setSecondName('Жилова');
        $this->assertEquals('2-Аэлита Жилова', $this->object->genderAutoDetect().'-Аэлита Жилова');
    }
    public function testGenDetect1296()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Жолдина');
        $this->assertEquals('2-Глафира Жолдина', $this->object->genderAutoDetect().'-Глафира Жолдина');
    }
    public function testGenDetect1297()
    {
        $this->object->setFirstName('Филлида');
        $this->object->setSecondName('Жукова');
        $this->assertEquals('2-Филлида Жукова', $this->object->genderAutoDetect().'-Филлида Жукова');
    }
    public function testGenDetect1298()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setSecondName('Жутова');
        $this->assertEquals('2-Урсула Жутова', $this->object->genderAutoDetect().'-Урсула Жутова');
    }
    public function testGenDetect1299()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setSecondName('Журавлёв');
        $this->assertEquals('2-Наталия Журавлёв', $this->object->genderAutoDetect().'-Наталия Журавлёв');
    }
    public function testGenDetect1300()
    {
        $this->object->setFirstName('Беата');
        $this->object->setSecondName('Журова');
        $this->assertEquals('2-Беата Журова', $this->object->genderAutoDetect().'-Беата Журова');
    }
    public function testGenDetect1301()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Заврагина');
        $this->assertEquals('2-Татьяна Заврагина', $this->object->genderAutoDetect().'-Татьяна Заврагина');
    }
    public function testGenDetect1302()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Завражина');
        $this->assertEquals('2-Галина Завражина', $this->object->genderAutoDetect().'-Галина Завражина');
    }
    public function testGenDetect1303()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setSecondName('Завражнова');
        $this->assertEquals('2-Зульфия Завражнова', $this->object->genderAutoDetect().'-Зульфия Завражнова');
    }
    public function testGenDetect1304()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setSecondName('Завразина');
        $this->assertEquals('2-Шейла Завразина', $this->object->genderAutoDetect().'-Шейла Завразина');
    }
    public function testGenDetect1305()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Завьялова');
        $this->assertEquals('2-Сара Завьялова', $this->object->genderAutoDetect().'-Сара Завьялова');
    }
    public function testGenDetect1306()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Задорнова');
        $this->assertEquals('2-Анастасия Задорнова', $this->object->genderAutoDetect().'-Анастасия Задорнова');
    }
    public function testGenDetect1307()
    {
        $this->object->setFirstName('Фёкла');
        $this->object->setSecondName('Задорожный');
        $this->assertEquals('2-Фёкла Задорожный', $this->object->genderAutoDetect().'-Фёкла Задорожный');
    }
    public function testGenDetect1308()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Зайцева');
        $this->assertEquals('2-Рада Зайцева', $this->object->genderAutoDetect().'-Рада Зайцева');
    }
    public function testGenDetect1309()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Закревская');
        $this->assertEquals('2-Любовь Закревская', $this->object->genderAutoDetect().'-Любовь Закревская');
    }
    public function testGenDetect1310()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setSecondName('Закрятина');
        $this->assertEquals('2-Евдокия Закрятина', $this->object->genderAutoDetect().'-Евдокия Закрятина');
    }
    public function testGenDetect1311()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setSecondName('Захарова');
        $this->assertEquals('2-Изабелла Захарова', $this->object->genderAutoDetect().'-Изабелла Захарова');
    }
    public function testGenDetect1312()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Захарьина');
        $this->assertEquals('2-Прасковья Захарьина', $this->object->genderAutoDetect().'-Прасковья Захарьина');
    }
    public function testGenDetect1313()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setSecondName('Звягина');
        $this->assertEquals('2-Мелания Звягина', $this->object->genderAutoDetect().'-Мелания Звягина');
    }
    public function testGenDetect1314()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Зёмина');
        $this->assertEquals('2-Альбина Зёмина', $this->object->genderAutoDetect().'-Альбина Зёмина');
    }
    public function testGenDetect1315()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Зимина');
        $this->assertEquals('2-Аурика Зимина', $this->object->genderAutoDetect().'-Аурика Зимина');
    }
    public function testGenDetect1316()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Золина');
        $this->assertEquals('2-Анушка Золина', $this->object->genderAutoDetect().'-Анушка Золина');
    }
    public function testGenDetect1317()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setSecondName('Зонова');
        $this->assertEquals('2-Шейла Зонова', $this->object->genderAutoDetect().'-Шейла Зонова');
    }
    public function testGenDetect1318()
    {
        $this->object->setFirstName('Улла');
        $this->object->setSecondName('Зубкова');
        $this->assertEquals('2-Улла Зубкова', $this->object->genderAutoDetect().'-Улла Зубкова');
    }
    public function testGenDetect1319()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setSecondName('Зубова');
        $this->assertEquals('2-Раиса Зубова', $this->object->genderAutoDetect().'-Раиса Зубова');
    }
    public function testGenDetect1320()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setSecondName('Зуева');
        $this->assertEquals('2-Консуэло Зуева', $this->object->genderAutoDetect().'-Консуэло Зуева');
    }
    public function testGenDetect1321()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Зуйкова');
        $this->assertEquals('2-Татьяна Зуйкова', $this->object->genderAutoDetect().'-Татьяна Зуйкова');
    }
    public function testGenDetect1322()
    {
        $this->object->setFirstName('Вера');
        $this->object->setSecondName('Зимнякова');
        $this->assertEquals('2-Вера Зимнякова', $this->object->genderAutoDetect().'-Вера Зимнякова');
    }
    public function testGenDetect1323()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Зиначенко');
        $this->assertEquals('2-Аурика Зиначенко', $this->object->genderAutoDetect().'-Аурика Зиначенко');
    }
    public function testGenDetect1324()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Зыкина');
        $this->assertEquals('2-Евфросиния Зыкина', $this->object->genderAutoDetect().'-Евфросиния Зыкина');
    }
    public function testGenDetect1325()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setSecondName('Зырянова');
        $this->assertEquals('2-Аделина Зырянова', $this->object->genderAutoDetect().'-Аделина Зырянова');
    }
    public function testGenDetect1326()
    {
        $this->object->setFirstName('Инна');
        $this->object->setSecondName('Зюганова');
        $this->assertEquals('2-Инна Зюганова', $this->object->genderAutoDetect().'-Инна Зюганова');
    }
    public function testGenDetect1327()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setSecondName('Зверева');
        $this->assertEquals('2-Надежда Зверева', $this->object->genderAutoDetect().'-Надежда Зверева');
    }
    public function testGenDetect1328()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setSecondName('Игнаткович');
        $this->assertEquals('2-Эльвира Игнаткович', $this->object->genderAutoDetect().'-Эльвира Игнаткович');
    }
    public function testGenDetect1329()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setSecondName('Ивакина');
        $this->assertEquals('2-Геннадия Ивакина', $this->object->genderAutoDetect().'-Геннадия Ивакина');
    }
    public function testGenDetect1330()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setSecondName('Ибрагимова');
        $this->assertEquals('2-Геннадия Ибрагимова', $this->object->genderAutoDetect().'-Геннадия Ибрагимова');
    }
    public function testGenDetect1331()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setSecondName('Иванова');
        $this->assertEquals('2-Аполлинария Иванова', $this->object->genderAutoDetect().'-Аполлинария Иванова');
    }
    public function testGenDetect1332()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Иванкова');
        $this->assertEquals('2-Анисия Иванкова', $this->object->genderAutoDetect().'-Анисия Иванкова');
    }
    public function testGenDetect1333()
    {
        $this->object->setFirstName('Майя');
        $this->object->setSecondName('Ивашина');
        $this->assertEquals('2-Майя Ивашина', $this->object->genderAutoDetect().'-Майя Ивашина');
    }
    public function testGenDetect1334()
    {
        $this->object->setFirstName('Майя');
        $this->object->setSecondName('Ивашова');
        $this->assertEquals('2-Майя Ивашова', $this->object->genderAutoDetect().'-Майя Ивашова');
    }
    public function testGenDetect1335()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Ивкина');
        $this->assertEquals('2-Александра Ивкина', $this->object->genderAutoDetect().'-Александра Ивкина');
    }
    public function testGenDetect1336()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Иволгина');
        $this->assertEquals('2-Елена Иволгина', $this->object->genderAutoDetect().'-Елена Иволгина');
    }
    public function testGenDetect1337()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setSecondName('Игнатьева');
        $this->assertEquals('2-Октавия Игнатьева', $this->object->genderAutoDetect().'-Октавия Игнатьева');
    }
    public function testGenDetect1338()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Игошина');
        $this->assertEquals('2-Юния Игошина', $this->object->genderAutoDetect().'-Юния Игошина');
    }
    public function testGenDetect1339()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Измайлова');
        $this->assertEquals('2-Альбина Измайлова', $this->object->genderAutoDetect().'-Альбина Измайлова');
    }
    public function testGenDetect1340()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setSecondName('Иканова');
        $this->assertEquals('2-Вероника Иканова', $this->object->genderAutoDetect().'-Вероника Иканова');
    }
    public function testGenDetect1341()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Икашева');
        $this->assertEquals('2-Евгения Икашева', $this->object->genderAutoDetect().'-Евгения Икашева');
    }
    public function testGenDetect1342()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Ильина');
        $this->assertEquals('2-Корнелия Ильина', $this->object->genderAutoDetect().'-Корнелия Ильина');
    }
    public function testGenDetect1343()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Илюшина');
        $this->assertEquals('2-Юния Илюшина', $this->object->genderAutoDetect().'-Юния Илюшина');
    }
    public function testGenDetect1344()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Ильюшина');
        $this->assertEquals('2-Элина Ильюшина', $this->object->genderAutoDetect().'-Элина Ильюшина');
    }
    public function testGenDetect1345()
    {
        $this->object->setFirstName('Маша');
        $this->object->setSecondName('Иноземцева');
        $this->assertEquals('2-Маша Иноземцева', $this->object->genderAutoDetect().'-Маша Иноземцева');
    }
    public function testGenDetect1346()
    {
        $this->object->setFirstName('Асель');
        $this->object->setSecondName('Ипатьева');
        $this->assertEquals('2-Асель Ипатьева', $this->object->genderAutoDetect().'-Асель Ипатьева');
    }
    public function testGenDetect1347()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Исаева');
        $this->assertEquals('2-Анастасия Исаева', $this->object->genderAutoDetect().'-Анастасия Исаева');
    }
    public function testGenDetect1348()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Истомина');
        $this->assertEquals('2-Леся Истомина', $this->object->genderAutoDetect().'-Леся Истомина');
    }
    public function testGenDetect1349()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Кабинова');
        $this->assertEquals('2-Аделаида Кабинова', $this->object->genderAutoDetect().'-Аделаида Кабинова');
    }
    public function testGenDetect1350()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setSecondName('Каблукова');
        $this->assertEquals('2-Урсула Каблукова', $this->object->genderAutoDetect().'-Урсула Каблукова');
    }
    public function testGenDetect1351()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Каверина');
        $this->assertEquals('2-Аделаида Каверина', $this->object->genderAutoDetect().'-Аделаида Каверина');
    }
    public function testGenDetect1352()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setSecondName('Кадникова');
        $this->assertEquals('2-Фатима Кадникова', $this->object->genderAutoDetect().'-Фатима Кадникова');
    }
    public function testGenDetect1353()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Кадцына');
        $this->assertEquals('2-Анастасия Кадцына', $this->object->genderAutoDetect().'-Анастасия Кадцына');
    }
    public function testGenDetect1354()
    {
        $this->object->setFirstName('Вера');
        $this->object->setSecondName('Казакова');
        $this->assertEquals('2-Вера Казакова', $this->object->genderAutoDetect().'-Вера Казакова');
    }
    public function testGenDetect1355()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setSecondName('Казанцева');
        $this->assertEquals('2-Валентина Казанцева', $this->object->genderAutoDetect().'-Валентина Казанцева');
    }
    public function testGenDetect1356()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setSecondName('Казарезова');
        $this->assertEquals('2-Аполлинария Казарезова', $this->object->genderAutoDetect().'-Аполлинария Казарезова');
    }
    public function testGenDetect1357()
    {
        $this->object->setFirstName('Нона');
        $this->object->setSecondName('Калашник');
        $this->assertEquals('2-Нона Калашник', $this->object->genderAutoDetect().'-Нона Калашник');
    }
    public function testGenDetect1358()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setSecondName('Калганова');
        $this->assertEquals('2-Урсула Калганова', $this->object->genderAutoDetect().'-Урсула Калганова');
    }
    public function testGenDetect1359()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setSecondName('Каменских');
        $this->assertEquals('2-Анжелика Каменских', $this->object->genderAutoDetect().'-Анжелика Каменских');
    }
    public function testGenDetect1360()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Камкина');
        $this->assertEquals('2-Эми Камкина', $this->object->genderAutoDetect().'-Эми Камкина');
    }
    public function testGenDetect1361()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Каналина');
        $this->assertEquals('2-Анушка Каналина', $this->object->genderAutoDetect().'-Анушка Каналина');
    }
    public function testGenDetect1362()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setSecondName('Кандинская');
        $this->assertEquals('2-Дарья Кандинская', $this->object->genderAutoDetect().'-Дарья Кандинская');
    }
    public function testGenDetect1363()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Капица');
        $this->assertEquals('2-Альбина Капица', $this->object->genderAutoDetect().'-Альбина Капица');
    }
    public function testGenDetect1364()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Капралова');
        $this->assertEquals('2-Рада Капралова', $this->object->genderAutoDetect().'-Рада Капралова');
    }
    public function testGenDetect1365()
    {
        $this->object->setFirstName('Феба');
        $this->object->setSecondName('Караваева');
        $this->assertEquals('2-Феба Караваева', $this->object->genderAutoDetect().'-Феба Караваева');
    }
    public function testGenDetect1366()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setSecondName('Караулова');
        $this->assertEquals('2-Аполлинария Караулова', $this->object->genderAutoDetect().'-Аполлинария Караулова');
    }
    public function testGenDetect1367()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setSecondName('Карева');
        $this->assertEquals('2-Алсу Карева', $this->object->genderAutoDetect().'-Алсу Карева');
    }
    public function testGenDetect1368()
    {
        $this->object->setFirstName('Мальвина');
        $this->object->setSecondName('Каретникова');
        $this->assertEquals('2-Мальвина Каретникова', $this->object->genderAutoDetect().'-Мальвина Каретникова');
    }
    public function testGenDetect1369()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Каргина');
        $this->assertEquals('2-Анушка Каргина', $this->object->genderAutoDetect().'-Анушка Каргина');
    }
    public function testGenDetect1370()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Карташова');
        $this->assertEquals('2-Аурика Карташова', $this->object->genderAutoDetect().'-Аурика Карташова');
    }
    public function testGenDetect1371()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Карчагина');
        $this->assertEquals('2-Татьяна Карчагина', $this->object->genderAutoDetect().'-Татьяна Карчагина');
    }
    public function testGenDetect1372()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Касатый');
        $this->assertEquals('2-Корнелия Касатый', $this->object->genderAutoDetect().'-Корнелия Касатый');
    }
    public function testGenDetect1373()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setSecondName('Катина');
        $this->assertEquals('2-Павлина Катина', $this->object->genderAutoDetect().'-Павлина Катина');
    }
    public function testGenDetect1374()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Качусова');
        $this->assertEquals('2-Таисия Качусова', $this->object->genderAutoDetect().'-Таисия Качусова');
    }
    public function testGenDetect1375()
    {
        $this->object->setFirstName('Кира');
        $this->object->setSecondName('Кашарина');
        $this->assertEquals('2-Кира Кашарина', $this->object->genderAutoDetect().'-Кира Кашарина');
    }
    public function testGenDetect1376()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Каширина');
        $this->assertEquals('2-Евгения Каширина', $this->object->genderAutoDetect().'-Евгения Каширина');
    }
    public function testGenDetect1377()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setSecondName('Кашканова');
        $this->assertEquals('2-Аграфена Кашканова', $this->object->genderAutoDetect().'-Аграфена Кашканова');
    }
    public function testGenDetect1378()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setSecondName('Кашникова');
        $this->assertEquals('2-Марианна Кашникова', $this->object->genderAutoDetect().'-Марианна Кашникова');
    }
    public function testGenDetect1379()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Киреева');
        $this->assertEquals('2-Фаина Киреева', $this->object->genderAutoDetect().'-Фаина Киреева');
    }
    public function testGenDetect1380()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Кирилишена');
        $this->assertEquals('2-Александра Кирилишена', $this->object->genderAutoDetect().'-Александра Кирилишена');
    }
    public function testGenDetect1381()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setSecondName('Кирилова');
        $this->assertEquals('2-Каролина Кирилова', $this->object->genderAutoDetect().'-Каролина Кирилова');
    }
    public function testGenDetect1382()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Кирсанова');
        $this->assertEquals('2-Шарлотта Кирсанова', $this->object->genderAutoDetect().'-Шарлотта Кирсанова');
    }
    public function testGenDetect1383()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setSecondName('Кирьянова');
        $this->assertEquals('2-Эльвира Кирьянова', $this->object->genderAutoDetect().'-Эльвира Кирьянова');
    }
    public function testGenDetect1384()
    {
        $this->object->setFirstName('Майя');
        $this->object->setSecondName('Клепахова');
        $this->assertEquals('2-Майя Клепахова', $this->object->genderAutoDetect().'-Майя Клепахова');
    }
    public function testGenDetect1385()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setSecondName('Климова');
        $this->assertEquals('2-Аполлония Климова', $this->object->genderAutoDetect().'-Аполлония Климова');
    }
    public function testGenDetect1386()
    {
        $this->object->setFirstName('Асель');
        $this->object->setSecondName('Климушина');
        $this->assertEquals('2-Асель Климушина', $this->object->genderAutoDetect().'-Асель Климушина');
    }
    public function testGenDetect1387()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setSecondName('Клокова');
        $this->assertEquals('2-Ребекка Клокова', $this->object->genderAutoDetect().'-Ребекка Клокова');
    }
    public function testGenDetect1388()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Князева');
        $this->assertEquals('2-Ульрика Князева', $this->object->genderAutoDetect().'-Ульрика Князева');
    }
    public function testGenDetect1389()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Ковалёв');
        $this->assertEquals('2-Александра Ковалёв', $this->object->genderAutoDetect().'-Александра Ковалёв');
    }
    public function testGenDetect1390()
    {
        $this->object->setFirstName('Феба');
        $this->object->setSecondName('Ковалевская');
        $this->assertEquals('2-Феба Ковалевская', $this->object->genderAutoDetect().'-Феба Ковалевская');
    }
    public function testGenDetect1391()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setSecondName('Коварова');
        $this->assertEquals('2-Суламифь Коварова', $this->object->genderAutoDetect().'-Суламифь Коварова');
    }
    public function testGenDetect1392()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Ковашутина');
        $this->assertEquals('2-Варвара Ковашутина', $this->object->genderAutoDetect().'-Варвара Ковашутина');
    }
    public function testGenDetect1393()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Кожурова');
        $this->assertEquals('2-Аурика Кожурова', $this->object->genderAutoDetect().'-Аурика Кожурова');
    }
    public function testGenDetect1394()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Кожухова');
        $this->assertEquals('2-Шарлотта Кожухова', $this->object->genderAutoDetect().'-Шарлотта Кожухова');
    }
    public function testGenDetect1395()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setSecondName('Козакова');
        $this->assertEquals('2-Юлианна Козакова', $this->object->genderAutoDetect().'-Юлианна Козакова');
    }
    public function testGenDetect1396()
    {
        $this->object->setFirstName('Алла');
        $this->object->setSecondName('Козарь');
        $this->assertEquals('2-Алла Козарь', $this->object->genderAutoDetect().'-Алла Козарь');
    }
    public function testGenDetect1397()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Козлова');
        $this->assertEquals('2-Альбина Козлова', $this->object->genderAutoDetect().'-Альбина Козлова');
    }
    public function testGenDetect1398()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Козловская');
        $this->assertEquals('2-Алина Козловская', $this->object->genderAutoDetect().'-Алина Козловская');
    }
    public function testGenDetect1399()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Колесникова');
        $this->assertEquals('2-Нонна Колесникова', $this->object->genderAutoDetect().'-Нонна Колесникова');
    }
    public function testGenDetect1400()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Колонтаева');
        $this->assertEquals('2-Владислава Колонтаева', $this->object->genderAutoDetect().'-Владислава Колонтаева');
    }
    public function testGenDetect1401()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Колосова');
        $this->assertEquals('2-Галина Колосова', $this->object->genderAutoDetect().'-Галина Колосова');
    }
    public function testGenDetect1402()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setSecondName('Кольцова');
        $this->assertEquals('2-Ксения Кольцова', $this->object->genderAutoDetect().'-Ксения Кольцова');
    }
    public function testGenDetect1403()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Комарова');
        $this->assertEquals('2-Сара Комарова', $this->object->genderAutoDetect().'-Сара Комарова');
    }
    public function testGenDetect1404()
    {
        $this->object->setFirstName('Августа');
        $this->object->setSecondName('Комзина');
        $this->assertEquals('2-Августа Комзина', $this->object->genderAutoDetect().'-Августа Комзина');
    }
    public function testGenDetect1405()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setSecondName('Комолова');
        $this->assertEquals('2-Екатерина Комолова', $this->object->genderAutoDetect().'-Екатерина Комолова');
    }
    public function testGenDetect1406()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setSecondName('Кондратьева');
        $this->assertEquals('2-Василиса Кондратьева', $this->object->genderAutoDetect().'-Василиса Кондратьева');
    }
    public function testGenDetect1407()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Конева');
        $this->assertEquals('2-Евгения Конева', $this->object->genderAutoDetect().'-Евгения Конева');
    }
    public function testGenDetect1408()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Конникова');
        $this->assertEquals('2-Зинаида Конникова', $this->object->genderAutoDetect().'-Зинаида Конникова');
    }
    public function testGenDetect1409()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Коновалова');
        $this->assertEquals('2-Таисия Коновалова', $this->object->genderAutoDetect().'-Таисия Коновалова');
    }
    public function testGenDetect1410()
    {
        $this->object->setFirstName('Беата');
        $this->object->setSecondName('Коньякова');
        $this->assertEquals('2-Беата Коньякова', $this->object->genderAutoDetect().'-Беата Коньякова');
    }
    public function testGenDetect1411()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setSecondName('Коняшева');
        $this->assertEquals('2-Каролина Коняшева', $this->object->genderAutoDetect().'-Каролина Коняшева');
    }
    public function testGenDetect1412()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Копейкина');
        $this->assertEquals('2-Галина Копейкина', $this->object->genderAutoDetect().'-Галина Копейкина');
    }
    public function testGenDetect1413()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setSecondName('Коренева');
        $this->assertEquals('2-Анисья Коренева', $this->object->genderAutoDetect().'-Анисья Коренева');
    }
    public function testGenDetect1414()
    {
        $this->object->setFirstName('Инна');
        $this->object->setSecondName('Коренёва');
        $this->assertEquals('2-Инна Коренёва', $this->object->genderAutoDetect().'-Инна Коренёва');
    }
    public function testGenDetect1415()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setSecondName('Коржакова');
        $this->assertEquals('2-Ульяна Коржакова', $this->object->genderAutoDetect().'-Ульяна Коржакова');
    }
    public function testGenDetect1416()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Коржева');
        $this->assertEquals('2-Евгения Коржева', $this->object->genderAutoDetect().'-Евгения Коржева');
    }
    public function testGenDetect1417()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setSecondName('Корнева');
        $this->assertEquals('2-Мафтуха Корнева', $this->object->genderAutoDetect().'-Мафтуха Корнева');
    }
    public function testGenDetect1418()
    {
        $this->object->setFirstName('Маша');
        $this->object->setSecondName('Корнилова');
        $this->assertEquals('2-Маша Корнилова', $this->object->genderAutoDetect().'-Маша Корнилова');
    }
    public function testGenDetect1419()
    {
        $this->object->setFirstName('Арна');
        $this->object->setSecondName('Коровина');
        $this->assertEquals('2-Арна Коровина', $this->object->genderAutoDetect().'-Арна Коровина');
    }
    public function testGenDetect1420()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Королёва');
        $this->assertEquals('2-Нонна Королёва', $this->object->genderAutoDetect().'-Нонна Королёва');
    }
    public function testGenDetect1421()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Коротаева');
        $this->assertEquals('2-Корнелия Коротаева', $this->object->genderAutoDetect().'-Корнелия Коротаева');
    }
    public function testGenDetect1422()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setSecondName('Корчагина');
        $this->assertEquals('2-Аврелия Корчагина', $this->object->genderAutoDetect().'-Аврелия Корчагина');
    }
    public function testGenDetect1423()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setSecondName('Косарёва');
        $this->assertEquals('2-Фрида Косарёва', $this->object->genderAutoDetect().'-Фрида Косарёва');
    }
    public function testGenDetect1424()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setSecondName('Коскова');
        $this->assertEquals('2-Павлина Коскова', $this->object->genderAutoDetect().'-Павлина Коскова');
    }
    public function testGenDetect1425()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Косомова');
        $this->assertEquals('2-Элеонора Косомова', $this->object->genderAutoDetect().'-Элеонора Косомова');
    }
    public function testGenDetect1426()
    {
        $this->object->setFirstName('Феба');
        $this->object->setSecondName('Косорукова');
        $this->assertEquals('2-Феба Косорукова', $this->object->genderAutoDetect().'-Феба Косорукова');
    }
    public function testGenDetect1427()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setSecondName('Костина');
        $this->assertEquals('2-Степанида Костина', $this->object->genderAutoDetect().'-Степанида Костина');
    }
    public function testGenDetect1428()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setSecondName('Косяк');
        $this->assertEquals('2-Аделина Косяк', $this->object->genderAutoDetect().'-Аделина Косяк');
    }
    public function testGenDetect1429()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setSecondName('Котова');
        $this->assertEquals('2-Юлианна Котова', $this->object->genderAutoDetect().'-Юлианна Котова');
    }
    public function testGenDetect1430()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setSecondName('Костомарова');
        $this->assertEquals('2-Констанция Костомарова', $this->object->genderAutoDetect().'-Констанция Костомарова');
    }
    public function testGenDetect1431()
    {
        $this->object->setFirstName('Ева');
        $this->object->setSecondName('Коченкова');
        $this->assertEquals('2-Ева Коченкова', $this->object->genderAutoDetect().'-Ева Коченкова');
    }
    public function testGenDetect1432()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setSecondName('Кошелева');
        $this->assertEquals('2-Виктория Кошелева', $this->object->genderAutoDetect().'-Виктория Кошелева');
    }
    public function testGenDetect1433()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setSecondName('Кошечкина');
        $this->assertEquals('2-Авдотья Кошечкина', $this->object->genderAutoDetect().'-Авдотья Кошечкина');
    }
    public function testGenDetect1434()
    {
        $this->object->setFirstName('Алёна');
        $this->object->setSecondName('Кошкина');
        $this->assertEquals('2-Алёна Кошкина', $this->object->genderAutoDetect().'-Алёна Кошкина');
    }
    public function testGenDetect1435()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setSecondName('Кравчук');
        $this->assertEquals('2-Виктория Кравчук', $this->object->genderAutoDetect().'-Виктория Кравчук');
    }
    public function testGenDetect1436()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setSecondName('Краева');
        $this->assertEquals('2-Елизавета Краева', $this->object->genderAutoDetect().'-Елизавета Краева');
    }
    public function testGenDetect1437()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setSecondName('Краснова');
        $this->assertEquals('2-Екатерина Краснова', $this->object->genderAutoDetect().'-Екатерина Краснова');
    }
    public function testGenDetect1438()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setSecondName('Красноперова');
        $this->assertEquals('2-Матильда Красноперова', $this->object->genderAutoDetect().'-Матильда Красноперова');
    }
    public function testGenDetect1439()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setSecondName('Кропанина');
        $this->assertEquals('2-Раиса Кропанина', $this->object->genderAutoDetect().'-Раиса Кропанина');
    }
    public function testGenDetect1440()
    {
        $this->object->setFirstName('Арна');
        $this->object->setSecondName('Кругликова');
        $this->assertEquals('2-Арна Кругликова', $this->object->genderAutoDetect().'-Арна Кругликова');
    }
    public function testGenDetect1441()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setSecondName('Круглова');
        $this->assertEquals('2-Суламифь Круглова', $this->object->genderAutoDetect().'-Суламифь Круглова');
    }
    public function testGenDetect1442()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Крупина');
        $this->assertEquals('2-Аурика Крупина', $this->object->genderAutoDetect().'-Аурика Крупина');
    }
    public function testGenDetect1443()
    {
        $this->object->setFirstName('Клара');
        $this->object->setSecondName('Крутина');
        $this->assertEquals('2-Клара Крутина', $this->object->genderAutoDetect().'-Клара Крутина');
    }
    public function testGenDetect1444()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Кручинакина');
        $this->assertEquals('2-Эми Кручинакина', $this->object->genderAutoDetect().'-Эми Кручинакина');
    }
    public function testGenDetect1445()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setSecondName('Крылова');
        $this->assertEquals('2-Мелания Крылова', $this->object->genderAutoDetect().'-Мелания Крылова');
    }
    public function testGenDetect1446()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setSecondName('Крысова');
        $this->assertEquals('2-Евдокия Крысова', $this->object->genderAutoDetect().'-Евдокия Крысова');
    }
    public function testGenDetect1447()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Крюкова');
        $this->assertEquals('2-Глафира Крюкова', $this->object->genderAutoDetect().'-Глафира Крюкова');
    }
    public function testGenDetect1448()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setSecondName('Кубланова');
        $this->assertEquals('2-Валентина Кубланова', $this->object->genderAutoDetect().'-Валентина Кубланова');
    }
    public function testGenDetect1449()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setSecondName('Кудашова');
        $this->assertEquals('2-Эльвира Кудашова', $this->object->genderAutoDetect().'-Эльвира Кудашова');
    }
    public function testGenDetect1450()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setSecondName('Кудрина');
        $this->assertEquals('2-Констанция Кудрина', $this->object->genderAutoDetect().'-Констанция Кудрина');
    }
    public function testGenDetect1451()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setSecondName('Кудрявцева');
        $this->assertEquals('2-Фрида Кудрявцева', $this->object->genderAutoDetect().'-Фрида Кудрявцева');
    }
    public function testGenDetect1452()
    {
        $this->object->setFirstName('Клара');
        $this->object->setSecondName('Кудряшова');
        $this->assertEquals('2-Клара Кудряшова', $this->object->genderAutoDetect().'-Клара Кудряшова');
    }
    public function testGenDetect1453()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Кузнецова');
        $this->assertEquals('2-Корнелия Кузнецова', $this->object->genderAutoDetect().'-Корнелия Кузнецова');
    }
    public function testGenDetect1454()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Кузьмина');
        $this->assertEquals('2-Таисия Кузьмина', $this->object->genderAutoDetect().'-Таисия Кузьмина');
    }
    public function testGenDetect1455()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setSecondName('Куимова');
        $this->assertEquals('2-Аполлония Куимова', $this->object->genderAutoDetect().'-Аполлония Куимова');
    }
    public function testGenDetect1456()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setSecondName('Куклачёва');
        $this->assertEquals('2-Каролина Куклачёва', $this->object->genderAutoDetect().'-Каролина Куклачёва');
    }
    public function testGenDetect1457()
    {
        $this->object->setFirstName('Полина');
        $this->object->setSecondName('Кулагина');
        $this->assertEquals('2-Полина Кулагина', $this->object->genderAutoDetect().'-Полина Кулагина');
    }
    public function testGenDetect1458()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Кулибина');
        $this->assertEquals('2-Ярослава Кулибина', $this->object->genderAutoDetect().'-Ярослава Кулибина');
    }
    public function testGenDetect1459()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Куликова');
        $this->assertEquals('2-Кристина Куликова', $this->object->genderAutoDetect().'-Кристина Куликова');
    }
    public function testGenDetect1460()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Куракина');
        $this->assertEquals('2-Олеся Куракина', $this->object->genderAutoDetect().'-Олеся Куракина');
    }
    public function testGenDetect1461()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setSecondName('Курбатова');
        $this->assertEquals('2-Клотильда Курбатова', $this->object->genderAutoDetect().'-Клотильда Курбатова');
    }
    public function testGenDetect1462()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Курганова');
        $this->assertEquals('2-Татьяна Курганова', $this->object->genderAutoDetect().'-Татьяна Курганова');
    }
    public function testGenDetect1463()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Курдина');
        $this->assertEquals('2-Эми Курдина', $this->object->genderAutoDetect().'-Эми Курдина');
    }
    public function testGenDetect1464()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setSecondName('Курепина');
        $this->assertEquals('2-Консуэло Курепина', $this->object->genderAutoDetect().'-Консуэло Курепина');
    }
    public function testGenDetect1465()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Курсалина');
        $this->assertEquals('2-Элина Курсалина', $this->object->genderAutoDetect().'-Элина Курсалина');
    }
    public function testGenDetect1466()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Кутикова');
        $this->assertEquals('2-Варвара Кутикова', $this->object->genderAutoDetect().'-Варвара Кутикова');
    }
    public function testGenDetect1467()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setSecondName('Кутузова');
        $this->assertEquals('2-Урсула Кутузова', $this->object->genderAutoDetect().'-Урсула Кутузова');
    }
    public function testGenDetect1468()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setSecondName('Кутякова');
        $this->assertEquals('2-Дарья Кутякова', $this->object->genderAutoDetect().'-Дарья Кутякова');
    }
    public function testGenDetect1469()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setSecondName('Лаврова');
        $this->assertEquals('2-Тамара Лаврова', $this->object->genderAutoDetect().'-Тамара Лаврова');
    }
    public function testGenDetect1470()
    {
        $this->object->setFirstName('Маша');
        $this->object->setSecondName('Лагутова');
        $this->assertEquals('2-Маша Лагутова', $this->object->genderAutoDetect().'-Маша Лагутова');
    }
    public function testGenDetect1471()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setSecondName('Лазарева');
        $this->assertEquals('2-Консуэло Лазарева', $this->object->genderAutoDetect().'-Консуэло Лазарева');
    }
    public function testGenDetect1472()
    {
        $this->object->setFirstName('Нина');
        $this->object->setSecondName('Ланцова');
        $this->assertEquals('2-Нина Ланцова', $this->object->genderAutoDetect().'-Нина Ланцова');
    }
    public function testGenDetect1473()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setSecondName('Лапидус');
        $this->assertEquals('2-Суламифь Лапидус', $this->object->genderAutoDetect().'-Суламифь Лапидус');
    }
    public function testGenDetect1474()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setSecondName('Лапотникова');
        $this->assertEquals('2-Юлианна Лапотникова', $this->object->genderAutoDetect().'-Юлианна Лапотникова');
    }
    public function testGenDetect1475()
    {
        $this->object->setFirstName('Милена');
        $this->object->setSecondName('Лаптева');
        $this->assertEquals('2-Милена Лаптева', $this->object->genderAutoDetect().'-Милена Лаптева');
    }
    public function testGenDetect1476()
    {
        $this->object->setFirstName('Камола');
        $this->object->setSecondName('Лапунова');
        $this->assertEquals('2-Камола Лапунова', $this->object->genderAutoDetect().'-Камола Лапунова');
    }
    public function testGenDetect1477()
    {
        $this->object->setFirstName('Диана');
        $this->object->setSecondName('Лапухова');
        $this->assertEquals('2-Диана Лапухова', $this->object->genderAutoDetect().'-Диана Лапухова');
    }
    public function testGenDetect1478()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setSecondName('Ларина');
        $this->assertEquals('2-Шейла Ларина', $this->object->genderAutoDetect().'-Шейла Ларина');
    }
    public function testGenDetect1479()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Ларионова');
        $this->assertEquals('2-Нонна Ларионова', $this->object->genderAutoDetect().'-Нонна Ларионова');
    }
    public function testGenDetect1480()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Ласкутина');
        $this->assertEquals('2-Владислава Ласкутина', $this->object->genderAutoDetect().'-Владислава Ласкутина');
    }
    public function testGenDetect1481()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setSecondName('Лачинова');
        $this->assertEquals('2-Иулия Лачинова', $this->object->genderAutoDetect().'-Иулия Лачинова');
    }
    public function testGenDetect1482()
    {
        $this->object->setFirstName('Марина');
        $this->object->setSecondName('Лачкова');
        $this->assertEquals('2-Марина Лачкова', $this->object->genderAutoDetect().'-Марина Лачкова');
    }
    public function testGenDetect1483()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setSecondName('Лебедева');
        $this->assertEquals('2-Раиса Лебедева', $this->object->genderAutoDetect().'-Раиса Лебедева');
    }
    public function testGenDetect1484()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setSecondName('Лебединаская');
        $this->assertEquals('2-Шейла Лебединаская', $this->object->genderAutoDetect().'-Шейла Лебединаская');
    }
    public function testGenDetect1485()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setSecondName('Лебединацева');
        $this->assertEquals('2-Иоанна Лебединацева', $this->object->genderAutoDetect().'-Иоанна Лебединацева');
    }
    public function testGenDetect1486()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setSecondName('Легкодимова');
        $this->assertEquals('2-Шейла Легкодимова', $this->object->genderAutoDetect().'-Шейла Легкодимова');
    }
    public function testGenDetect1487()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setSecondName('Леонова');
        $this->assertEquals('2-Зульфия Леонова', $this->object->genderAutoDetect().'-Зульфия Леонова');
    }
    public function testGenDetect1488()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setSecondName('Лепёхина');
        $this->assertEquals('2-Анисья Лепёхина', $this->object->genderAutoDetect().'-Анисья Лепёхина');
    }
    public function testGenDetect1489()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setSecondName('Лескова');
        $this->assertEquals('2-Шейла Лескова', $this->object->genderAutoDetect().'-Шейла Лескова');
    }
    public function testGenDetect1490()
    {
        $this->object->setFirstName('Филлида');
        $this->object->setSecondName('Лесничая');
        $this->assertEquals('2-Филлида Лесничая', $this->object->genderAutoDetect().'-Филлида Лесничая');
    }
    public function testGenDetect1491()
    {
        $this->object->setFirstName('Улла');
        $this->object->setSecondName('Летова');
        $this->assertEquals('2-Улла Летова', $this->object->genderAutoDetect().'-Улла Летова');
    }
    public function testGenDetect1492()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setSecondName('Лещёва');
        $this->assertEquals('2-Иоанна Лещёва', $this->object->genderAutoDetect().'-Иоанна Лещёва');
    }
    public function testGenDetect1493()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setSecondName('Лилова');
        $this->assertEquals('2-Раиса Лилова', $this->object->genderAutoDetect().'-Раиса Лилова');
    }
    public function testGenDetect1494()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setSecondName('Липина');
        $this->assertEquals('2-Стефания Липина', $this->object->genderAutoDetect().'-Стефания Липина');
    }
    public function testGenDetect1495()
    {
        $this->object->setFirstName('Фёкла');
        $this->object->setSecondName('Лисицына');
        $this->assertEquals('2-Фёкла Лисицына', $this->object->genderAutoDetect().'-Фёкла Лисицына');
    }
    public function testGenDetect1496()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Лихачёва');
        $this->assertEquals('2-Олеся Лихачёва', $this->object->genderAutoDetect().'-Олеся Лихачёва');
    }
    public function testGenDetect1497()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setSecondName('Лобан');
        $this->assertEquals('2-Аделина Лобан', $this->object->genderAutoDetect().'-Аделина Лобан');
    }
    public function testGenDetect1498()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setSecondName('Лобанова');
        $this->assertEquals('2-Светлана Лобанова', $this->object->genderAutoDetect().'-Светлана Лобанова');
    }
    public function testGenDetect1499()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setSecondName('Лобова');
        $this->assertEquals('2-Авдотья Лобова', $this->object->genderAutoDetect().'-Авдотья Лобова');
    }
    public function testGenDetect1500()
    {
        $this->object->setFirstName('Феба');
        $this->object->setSecondName('Логинова');
        $this->assertEquals('2-Феба Логинова', $this->object->genderAutoDetect().'-Феба Логинова');
    }
    public function testGenDetect1501()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setSecondName('Логиновская');
        $this->assertEquals('2-Иляна Логиновская', $this->object->genderAutoDetect().'-Иляна Логиновская');
    }
    public function testGenDetect1502()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Локтева');
        $this->assertEquals('2-Кристина Локтева', $this->object->genderAutoDetect().'-Кристина Локтева');
    }
    public function testGenDetect1503()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setSecondName('Ломоносова');
        $this->assertEquals('2-Ливия Ломоносова', $this->object->genderAutoDetect().'-Ливия Ломоносова');
    }
    public function testGenDetect1504()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Ломтева');
        $this->assertEquals('2-Варвара Ломтева', $this->object->genderAutoDetect().'-Варвара Ломтева');
    }
    public function testGenDetect1505()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setSecondName('Лопатина');
        $this->assertEquals('2-Клотильда Лопатина', $this->object->genderAutoDetect().'-Клотильда Лопатина');
    }
    public function testGenDetect1506()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setSecondName('Лосева');
        $this->assertEquals('2-Аполлония Лосева', $this->object->genderAutoDetect().'-Аполлония Лосева');
    }
    public function testGenDetect1507()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Лосевская');
        $this->assertEquals('2-Нонна Лосевская', $this->object->genderAutoDetect().'-Нонна Лосевская');
    }
    public function testGenDetect1508()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Лоскутникова');
        $this->assertEquals('2-Стелла Лоскутникова', $this->object->genderAutoDetect().'-Стелла Лоскутникова');
    }
    public function testGenDetect1509()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Лоскутова');
        $this->assertEquals('2-Анастасия Лоскутова', $this->object->genderAutoDetect().'-Анастасия Лоскутова');
    }
    public function testGenDetect1510()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Лужкова');
        $this->assertEquals('2-Елена Лужкова', $this->object->genderAutoDetect().'-Елена Лужкова');
    }
    public function testGenDetect1511()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Лыткина');
        $this->assertEquals('2-Алиса Лыткина', $this->object->genderAutoDetect().'-Алиса Лыткина');
    }
    public function testGenDetect1512()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Любимова');
        $this->assertEquals('2-Леся Любимова', $this->object->genderAutoDetect().'-Леся Любимова');
    }
    public function testGenDetect1513()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Любова');
        $this->assertEquals('2-Элина Любова', $this->object->genderAutoDetect().'-Элина Любова');
    }
    public function testGenDetect1514()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Лягушкина');
        $this->assertEquals('2-Таисия Лягушкина', $this->object->genderAutoDetect().'-Таисия Лягушкина');
    }
    public function testGenDetect1515()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setSecondName('Лягушова');
        $this->assertEquals('2-Клотильда Лягушова', $this->object->genderAutoDetect().'-Клотильда Лягушова');
    }
    public function testGenDetect1516()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setSecondName('Лялюшкина');
        $this->assertEquals('2-Жанна Лялюшкина', $this->object->genderAutoDetect().'-Жанна Лялюшкина');
    }
    public function testGenDetect1517()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setSecondName('Лясина');
        $this->assertEquals('2-Розалия Лясина', $this->object->genderAutoDetect().'-Розалия Лясина');
    }
    public function testGenDetect1518()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Ляпина');
        $this->assertEquals('2-Фаина Ляпина', $this->object->genderAutoDetect().'-Фаина Ляпина');
    }
    public function testGenDetect1519()
    {
        $this->object->setFirstName('Лада');
        $this->object->setSecondName('Майсак');
        $this->assertEquals('2-Лада Майсак', $this->object->genderAutoDetect().'-Лада Майсак');
    }
    public function testGenDetect1520()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Макарова');
        $this->assertEquals('2-Олеся Макарова', $this->object->genderAutoDetect().'-Олеся Макарова');
    }
    public function testGenDetect1521()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Маклакова');
        $this->assertEquals('2-Сара Маклакова', $this->object->genderAutoDetect().'-Сара Маклакова');
    }
    public function testGenDetect1522()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setSecondName('Максимова');
        $this->assertEquals('2-Жанна Максимова', $this->object->genderAutoDetect().'-Жанна Максимова');
    }
    public function testGenDetect1523()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Максимушкина');
        $this->assertEquals('2-Анастасия Максимушкина', $this->object->genderAutoDetect().'-Анастасия Максимушкина');
    }
    public function testGenDetect1524()
    {
        $this->object->setFirstName('Лада');
        $this->object->setSecondName('Максудова');
        $this->assertEquals('2-Лада Максудова', $this->object->genderAutoDetect().'-Лада Максудова');
    }
    public function testGenDetect1525()
    {
        $this->object->setFirstName('Асель');
        $this->object->setSecondName('Малахова');
        $this->assertEquals('2-Асель Малахова', $this->object->genderAutoDetect().'-Асель Малахова');
    }
    public function testGenDetect1526()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Маликова');
        $this->assertEquals('2-Аделаида Маликова', $this->object->genderAutoDetect().'-Аделаида Маликова');
    }
    public function testGenDetect1527()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setSecondName('Малинина');
        $this->assertEquals('2-Валентина Малинина', $this->object->genderAutoDetect().'-Валентина Малинина');
    }
    public function testGenDetect1528()
    {
        $this->object->setFirstName('Вера');
        $this->object->setSecondName('Малышева');
        $this->assertEquals('2-Вера Малышева', $this->object->genderAutoDetect().'-Вера Малышева');
    }
    public function testGenDetect1529()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setSecondName('Малюгина');
        $this->assertEquals('2-Тамара Малюгина', $this->object->genderAutoDetect().'-Тамара Малюгина');
    }
    public function testGenDetect1530()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setSecondName('Малыхина');
        $this->assertEquals('2-Василиса Малыхина', $this->object->genderAutoDetect().'-Василиса Малыхина');
    }
    public function testGenDetect1531()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Мамонова');
        $this->assertEquals('2-Анисия Мамонова', $this->object->genderAutoDetect().'-Анисия Мамонова');
    }
    public function testGenDetect1532()
    {
        $this->object->setFirstName('Вера');
        $this->object->setSecondName('Манина');
        $this->assertEquals('2-Вера Манина', $this->object->genderAutoDetect().'-Вера Манина');
    }
    public function testGenDetect1533()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setSecondName('Маркина');
        $this->assertEquals('2-Ребекка Маркина', $this->object->genderAutoDetect().'-Ребекка Маркина');
    }
    public function testGenDetect1534()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Маркова');
        $this->assertEquals('2-Олеся Маркова', $this->object->genderAutoDetect().'-Олеся Маркова');
    }
    public function testGenDetect1535()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setSecondName('Маслак');
        $this->assertEquals('2-Клотильда Маслак', $this->object->genderAutoDetect().'-Клотильда Маслак');
    }
    public function testGenDetect1536()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setSecondName('Маслова');
        $this->assertEquals('2-Василиса Маслова', $this->object->genderAutoDetect().'-Василиса Маслова');
    }
    public function testGenDetect1537()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setSecondName('Матвеева');
        $this->assertEquals('2-Фатима Матвеева', $this->object->genderAutoDetect().'-Фатима Матвеева');
    }
    public function testGenDetect1538()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setSecondName('Машарина');
        $this->assertEquals('2-Антонина Машарина', $this->object->genderAutoDetect().'-Антонина Машарина');
    }
    public function testGenDetect1539()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Машир');
        $this->assertEquals('2-Аделаида Машир', $this->object->genderAutoDetect().'-Аделаида Машир');
    }
    public function testGenDetect1540()
    {
        $this->object->setFirstName('Августа');
        $this->object->setSecondName('Медведева');
        $this->assertEquals('2-Августа Медведева', $this->object->genderAutoDetect().'-Августа Медведева');
    }
    public function testGenDetect1541()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setSecondName('Медникова');
        $this->assertEquals('2-Ксения Медникова', $this->object->genderAutoDetect().'-Ксения Медникова');
    }
    public function testGenDetect1542()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setSecondName('Меледина');
        $this->assertEquals('2-Анжелика Меледина', $this->object->genderAutoDetect().'-Анжелика Меледина');
    }
    public function testGenDetect1543()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Мелехова');
        $this->assertEquals('2-Леся Мелехова', $this->object->genderAutoDetect().'-Леся Мелехова');
    }
    public function testGenDetect1544()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setSecondName('Меликова');
        $this->assertEquals('2-Клеопатра Меликова', $this->object->genderAutoDetect().'-Клеопатра Меликова');
    }
    public function testGenDetect1545()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setSecondName('Мельникова');
        $this->assertEquals('2-Эльвира Мельникова', $this->object->genderAutoDetect().'-Эльвира Мельникова');
    }
    public function testGenDetect1546()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setSecondName('Меркушева');
        $this->assertEquals('2-Аграфена Меркушева', $this->object->genderAutoDetect().'-Аграфена Меркушева');
    }
    public function testGenDetect1547()
    {
        $this->object->setFirstName('Улла');
        $this->object->setSecondName('Мещерякова');
        $this->assertEquals('2-Улла Мещерякова', $this->object->genderAutoDetect().'-Улла Мещерякова');
    }
    public function testGenDetect1548()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Мигунова');
        $this->assertEquals('2-Прасковья Мигунова', $this->object->genderAutoDetect().'-Прасковья Мигунова');
    }
    public function testGenDetect1549()
    {
        $this->object->setFirstName('Филлида');
        $this->object->setSecondName('Мизенова');
        $this->assertEquals('2-Филлида Мизенова', $this->object->genderAutoDetect().'-Филлида Мизенова');
    }
    public function testGenDetect1550()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Милехина');
        $this->assertEquals('2-Зинаида Милехина', $this->object->genderAutoDetect().'-Зинаида Милехина');
    }
    public function testGenDetect1551()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setSecondName('Милорадова');
        $this->assertEquals('2-Иулия Милорадова', $this->object->genderAutoDetect().'-Иулия Милорадова');
    }
    public function testGenDetect1552()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setSecondName('Милюкова');
        $this->assertEquals('2-Октавия Милюкова', $this->object->genderAutoDetect().'-Октавия Милюкова');
    }
    public function testGenDetect1553()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setSecondName('Милютина');
        $this->assertEquals('2-Ребекка Милютина', $this->object->genderAutoDetect().'-Ребекка Милютина');
    }
    public function testGenDetect1554()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setSecondName('Минаеева');
        $this->assertEquals('2-Ливия Минаеева', $this->object->genderAutoDetect().'-Ливия Минаеева');
    }
    public function testGenDetect1555()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Минаина');
        $this->assertEquals('2-Божена Минаина', $this->object->genderAutoDetect().'-Божена Минаина');
    }
    public function testGenDetect1556()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Минакина');
        $this->assertEquals('2-Элина Минакина', $this->object->genderAutoDetect().'-Элина Минакина');
    }
    public function testGenDetect1557()
    {
        $this->object->setFirstName('Марина');
        $this->object->setSecondName('Миронова');
        $this->assertEquals('2-Марина Миронова', $this->object->genderAutoDetect().'-Марина Миронова');
    }
    public function testGenDetect1558()
    {
        $this->object->setFirstName('Карина');
        $this->object->setSecondName('Митина');
        $this->assertEquals('2-Карина Митина', $this->object->genderAutoDetect().'-Карина Митина');
    }
    public function testGenDetect1559()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Митрофанова');
        $this->assertEquals('2-Аурика Митрофанова', $this->object->genderAutoDetect().'-Аурика Митрофанова');
    }
    public function testGenDetect1560()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setSecondName('Михайлова');
        $this->assertEquals('2-Иуния Михайлова', $this->object->genderAutoDetect().'-Иуния Михайлова');
    }
    public function testGenDetect1561()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setSecondName('Михеева');
        $this->assertEquals('2-Октавия Михеева', $this->object->genderAutoDetect().'-Октавия Михеева');
    }
    public function testGenDetect1562()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Мишутина');
        $this->assertEquals('2-Евфросиния Мишутина', $this->object->genderAutoDetect().'-Евфросиния Мишутина');
    }
    public function testGenDetect1563()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setSecondName('Моисеева');
        $this->assertEquals('2-Оксана Моисеева', $this->object->genderAutoDetect().'-Оксана Моисеева');
    }
    public function testGenDetect1564()
    {
        $this->object->setFirstName('Карина');
        $this->object->setSecondName('Молчанова');
        $this->assertEquals('2-Карина Молчанова', $this->object->genderAutoDetect().'-Карина Молчанова');
    }
    public function testGenDetect1565()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Моренова');
        $this->assertEquals('2-Аделаида Моренова', $this->object->genderAutoDetect().'-Аделаида Моренова');
    }
    public function testGenDetect1566()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Морозова');
        $this->assertEquals('2-Анушка Морозова', $this->object->genderAutoDetect().'-Анушка Морозова');
    }
    public function testGenDetect1567()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setSecondName('Мосалева');
        $this->assertEquals('2-Октавия Мосалева', $this->object->genderAutoDetect().'-Октавия Мосалева');
    }
    public function testGenDetect1568()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Москвина');
        $this->assertEquals('2-Шарлотта Москвина', $this->object->genderAutoDetect().'-Шарлотта Москвина');
    }
    public function testGenDetect1569()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Муратова');
        $this->assertEquals('2-Евгения Муратова', $this->object->genderAutoDetect().'-Евгения Муратова');
    }
    public function testGenDetect1570()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Мухортова');
        $this->assertEquals('2-Рада Мухортова', $this->object->genderAutoDetect().'-Рада Мухортова');
    }
    public function testGenDetect1571()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Мягкова');
        $this->assertEquals('2-Шарлотта Мягкова', $this->object->genderAutoDetect().'-Шарлотта Мягкова');
    }
    public function testGenDetect1572()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Мясникова');
        $this->assertEquals('2-Ульрика Мясникова', $this->object->genderAutoDetect().'-Ульрика Мясникова');
    }
    public function testGenDetect1573()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setSecondName('Мятлева');
        $this->assertEquals('2-Урсула Мятлева', $this->object->genderAutoDetect().'-Урсула Мятлева');
    }
    public function testGenDetect1574()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setSecondName('Набатова');
        $this->assertEquals('2-Клеопатра Набатова', $this->object->genderAutoDetect().'-Клеопатра Набатова');
    }
    public function testGenDetect1575()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Нардина');
        $this->assertEquals('2-Евгения Нардина', $this->object->genderAutoDetect().'-Евгения Нардина');
    }
    public function testGenDetect1576()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setSecondName('Наумова');
        $this->assertEquals('2-Тамара Наумова', $this->object->genderAutoDetect().'-Тамара Наумова');
    }
    public function testGenDetect1577()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Невзорова');
        $this->assertEquals('2-Корнелия Невзорова', $this->object->genderAutoDetect().'-Корнелия Невзорова');
    }
    public function testGenDetect1578()
    {
        $this->object->setFirstName('Арна');
        $this->object->setSecondName('Неделяева');
        $this->assertEquals('2-Арна Неделяева', $this->object->genderAutoDetect().'-Арна Неделяева');
    }
    public function testGenDetect1579()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setSecondName('Нежданова');
        $this->assertEquals('2-Людмила Нежданова', $this->object->genderAutoDetect().'-Людмила Нежданова');
    }
    public function testGenDetect1580()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setSecondName('Ненашева');
        $this->assertEquals('2-Иляна Ненашева', $this->object->genderAutoDetect().'-Иляна Ненашева');
    }
    public function testGenDetect1581()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setSecondName('Нестерова');
        $this->assertEquals('2-Людмила Нестерова', $this->object->genderAutoDetect().'-Людмила Нестерова');
    }
    public function testGenDetect1582()
    {
        $this->object->setFirstName('Августа');
        $this->object->setSecondName('Нечаева');
        $this->assertEquals('2-Августа Нечаева', $this->object->genderAutoDetect().'-Августа Нечаева');
    }
    public function testGenDetect1583()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Никитина');
        $this->assertEquals('2-Альбина Никитина', $this->object->genderAutoDetect().'-Альбина Никитина');
    }
    public function testGenDetect1584()
    {
        $this->object->setFirstName('Ева');
        $this->object->setSecondName('Никифорова');
        $this->assertEquals('2-Ева Никифорова', $this->object->genderAutoDetect().'-Ева Никифорова');
    }
    public function testGenDetect1585()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setSecondName('Николаева');
        $this->assertEquals('2-Ливия Николаева', $this->object->genderAutoDetect().'-Ливия Николаева');
    }
    public function testGenDetect1586()
    {
        $this->object->setFirstName('Ева');
        $this->object->setSecondName('Никонова');
        $this->assertEquals('2-Ева Никонова', $this->object->genderAutoDetect().'-Ева Никонова');
    }
    public function testGenDetect1587()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Никулина');
        $this->assertEquals('2-Владислава Никулина', $this->object->genderAutoDetect().'-Владислава Никулина');
    }
    public function testGenDetect1588()
    {
        $this->object->setFirstName('Анна');
        $this->object->setSecondName('Некрасова');
        $this->assertEquals('2-Анна Некрасова', $this->object->genderAutoDetect().'-Анна Некрасова');
    }
    public function testGenDetect1589()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setSecondName('Новикова');
        $this->assertEquals('2-Розарио Новикова', $this->object->genderAutoDetect().'-Розарио Новикова');
    }
    public function testGenDetect1590()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setSecondName('Новосельцева');
        $this->assertEquals('2-Клеопатра Новосельцева', $this->object->genderAutoDetect().'-Клеопатра Новосельцева');
    }
    public function testGenDetect1591()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setSecondName('Носачёва');
        $this->assertEquals('2-Марианна Носачёва', $this->object->genderAutoDetect().'-Марианна Носачёва');
    }
    public function testGenDetect1592()
    {
        $this->object->setFirstName('Клара');
        $this->object->setSecondName('Носкова');
        $this->assertEquals('2-Клара Носкова', $this->object->genderAutoDetect().'-Клара Носкова');
    }
    public function testGenDetect1593()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Носова');
        $this->assertEquals('2-Таисия Носова', $this->object->genderAutoDetect().'-Таисия Носова');
    }
    public function testGenDetect1594()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Оболенская');
        $this->assertEquals('2-Владислава Оболенская', $this->object->genderAutoDetect().'-Владислава Оболенская');
    }
    public function testGenDetect1595()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Оборина');
        $this->assertEquals('2-Шарлотта Оборина', $this->object->genderAutoDetect().'-Шарлотта Оборина');
    }
    public function testGenDetect1596()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Образцова');
        $this->assertEquals('2-Фаина Образцова', $this->object->genderAutoDetect().'-Фаина Образцова');
    }
    public function testGenDetect1597()
    {
        $this->object->setFirstName('Карина');
        $this->object->setSecondName('Обухова');
        $this->assertEquals('2-Карина Обухова', $this->object->genderAutoDetect().'-Карина Обухова');
    }
    public function testGenDetect1598()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setSecondName('Овечкина');
        $this->assertEquals('2-Мелания Овечкина', $this->object->genderAutoDetect().'-Мелания Овечкина');
    }
    public function testGenDetect1599()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Огородникова');
        $this->assertEquals('2-Стелла Огородникова', $this->object->genderAutoDetect().'-Стелла Огородникова');
    }
    public function testGenDetect1600()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Огурцова');
        $this->assertEquals('2-Сара Огурцова', $this->object->genderAutoDetect().'-Сара Огурцова');
    }
    public function testGenDetect1601()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Озерова');
        $this->assertEquals('2-Елена Озерова', $this->object->genderAutoDetect().'-Елена Озерова');
    }
    public function testGenDetect1602()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Ольховская');
        $this->assertEquals('2-Прасковья Ольховская', $this->object->genderAutoDetect().'-Прасковья Ольховская');
    }
    public function testGenDetect1603()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setSecondName('Онегина');
        $this->assertEquals('2-Надежда Онегина', $this->object->genderAutoDetect().'-Надежда Онегина');
    }
    public function testGenDetect1604()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Опокина');
        $this->assertEquals('2-Варвара Опокина', $this->object->genderAutoDetect().'-Варвара Опокина');
    }
    public function testGenDetect1605()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setSecondName('Орлова');
        $this->assertEquals('2-Аэлита Орлова', $this->object->genderAutoDetect().'-Аэлита Орлова');
    }
    public function testGenDetect1606()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setSecondName('Осинцева');
        $this->assertEquals('2-Юлианна Осинцева', $this->object->genderAutoDetect().'-Юлианна Осинцева');
    }
    public function testGenDetect1607()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Остальцева');
        $this->assertEquals('2-Алина Остальцева', $this->object->genderAutoDetect().'-Алина Остальцева');
    }
    public function testGenDetect1608()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Остапюк');
        $this->assertEquals('2-Пелагея Остапюк', $this->object->genderAutoDetect().'-Пелагея Остапюк');
    }
    public function testGenDetect1609()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Островерхова');
        $this->assertEquals('2-Анушка Островерхова', $this->object->genderAutoDetect().'-Анушка Островерхова');
    }
    public function testGenDetect1610()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setSecondName('Островская');
        $this->assertEquals('2-Надежда Островская', $this->object->genderAutoDetect().'-Надежда Островская');
    }
    public function testGenDetect1611()
    {
        $this->object->setFirstName('Ангелина');
        $this->object->setSecondName('Павлова');
        $this->assertEquals('2-Ангелина Павлова', $this->object->genderAutoDetect().'-Ангелина Павлова');
    }
    public function testGenDetect1612()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Панарина');
        $this->assertEquals('2-Прасковья Панарина', $this->object->genderAutoDetect().'-Прасковья Панарина');
    }
    public function testGenDetect1613()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setSecondName('Панина');
        $this->assertEquals('2-Наталия Панина', $this->object->genderAutoDetect().'-Наталия Панина');
    }
    public function testGenDetect1614()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setSecondName('Панкина');
        $this->assertEquals('2-Валентина Панкина', $this->object->genderAutoDetect().'-Валентина Панкина');
    }
    public function testGenDetect1615()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setSecondName('Панкова');
        $this->assertEquals('2-Азиза Панкова', $this->object->genderAutoDetect().'-Азиза Панкова');
    }
    public function testGenDetect1616()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Панфилова');
        $this->assertEquals('2-Аурика Панфилова', $this->object->genderAutoDetect().'-Аурика Панфилова');
    }
    public function testGenDetect1617()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setSecondName('Панькив');
        $this->assertEquals('2-Ливия Панькив', $this->object->genderAutoDetect().'-Ливия Панькив');
    }
    public function testGenDetect1618()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setSecondName('Папанова');
        $this->assertEquals('2-Евдокия Папанова', $this->object->genderAutoDetect().'-Евдокия Папанова');
    }
    public function testGenDetect1619()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Пахомова');
        $this->assertEquals('2-Елена Пахомова', $this->object->genderAutoDetect().'-Елена Пахомова');
    }
    public function testGenDetect1620()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Пенкина');
        $this->assertEquals('2-Евгения Пенкина', $this->object->genderAutoDetect().'-Евгения Пенкина');
    }
    public function testGenDetect1621()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setSecondName('Первак');
        $this->assertEquals('2-Суламифь Первак', $this->object->genderAutoDetect().'-Суламифь Первак');
    }
    public function testGenDetect1622()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Переверзева');
        $this->assertEquals('2-Элина Переверзева', $this->object->genderAutoDetect().'-Элина Переверзева');
    }
    public function testGenDetect1623()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setSecondName('Перевёртова');
        $this->assertEquals('2-Степанида Перевёртова', $this->object->genderAutoDetect().'-Степанида Перевёртова');
    }
    public function testGenDetect1624()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setSecondName('Пересторонина');
        $this->assertEquals('2-Наталия Пересторонина', $this->object->genderAutoDetect().'-Наталия Пересторонина');
    }
    public function testGenDetect1625()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setSecondName('Перехваткина');
        $this->assertEquals('2-Валентина Перехваткина', $this->object->genderAutoDetect().'-Валентина Перехваткина');
    }
    public function testGenDetect1626()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Перова');
        $this->assertEquals('2-Прасковья Перова', $this->object->genderAutoDetect().'-Прасковья Перова');
    }
    public function testGenDetect1627()
    {
        $this->object->setFirstName('Лада');
        $this->object->setSecondName('Перьмякова');
        $this->assertEquals('2-Лада Перьмякова', $this->object->genderAutoDetect().'-Лада Перьмякова');
    }
    public function testGenDetect1628()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Пестова');
        $this->assertEquals('2-Нонна Пестова', $this->object->genderAutoDetect().'-Нонна Пестова');
    }
    public function testGenDetect1629()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setSecondName('Петрова');
        $this->assertEquals('2-Екатерина Петрова', $this->object->genderAutoDetect().'-Екатерина Петрова');
    }
    public function testGenDetect1630()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Петухова');
        $this->assertEquals('2-Евгения Петухова', $this->object->genderAutoDetect().'-Евгения Петухова');
    }
    public function testGenDetect1631()
    {
        $this->object->setFirstName('Кира');
        $this->object->setSecondName('Печеникова');
        $this->assertEquals('2-Кира Печеникова', $this->object->genderAutoDetect().'-Кира Печеникова');
    }
    public function testGenDetect1632()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Пивоварова');
        $this->assertEquals('2-Пелагея Пивоварова', $this->object->genderAutoDetect().'-Пелагея Пивоварова');
    }
    public function testGenDetect1633()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Пирогова');
        $this->assertEquals('2-Александра Пирогова', $this->object->genderAutoDetect().'-Александра Пирогова');
    }
    public function testGenDetect1634()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Пирожкова');
        $this->assertEquals('2-Альбина Пирожкова', $this->object->genderAutoDetect().'-Альбина Пирожкова');
    }
    public function testGenDetect1635()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setSecondName('Пичугина');
        $this->assertEquals('2-Эльвира Пичугина', $this->object->genderAutoDetect().'-Эльвира Пичугина');
    }
    public function testGenDetect1636()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Погодина');
        $this->assertEquals('2-Владислава Погодина', $this->object->genderAutoDetect().'-Владислава Погодина');
    }
    public function testGenDetect1637()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Погребнова');
        $this->assertEquals('2-Алина Погребнова', $this->object->genderAutoDetect().'-Алина Погребнова');
    }
    public function testGenDetect1638()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setSecondName('Подшивалова');
        $this->assertEquals('2-Агриппина Подшивалова', $this->object->genderAutoDetect().'-Агриппина Подшивалова');
    }
    public function testGenDetect1639()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Позднякова');
        $this->assertEquals('2-Ярослава Позднякова', $this->object->genderAutoDetect().'-Ярослава Позднякова');
    }
    public function testGenDetect1640()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setSecondName('Покровская');
        $this->assertEquals('2-Василиса Покровская', $this->object->genderAutoDetect().'-Василиса Покровская');
    }
    public function testGenDetect1641()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setSecondName('Поливанова');
        $this->assertEquals('2-Оксана Поливанова', $this->object->genderAutoDetect().'-Оксана Поливанова');
    }
    public function testGenDetect1642()
    {
        $this->object->setFirstName('Ангелина');
        $this->object->setSecondName('Полушина');
        $this->assertEquals('2-Ангелина Полушина', $this->object->genderAutoDetect().'-Ангелина Полушина');
    }
    public function testGenDetect1643()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setSecondName('Полищук');
        $this->assertEquals('2-Юлия Полищук', $this->object->genderAutoDetect().'-Юлия Полищук');
    }
    public function testGenDetect1644()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Полторак');
        $this->assertEquals('2-Евгения Полторак', $this->object->genderAutoDetect().'-Евгения Полторак');
    }
    public function testGenDetect1645()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Полякова');
        $this->assertEquals('2-Елена Полякова', $this->object->genderAutoDetect().'-Елена Полякова');
    }
    public function testGenDetect1646()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Поникарова');
        $this->assertEquals('2-Аделаида Поникарова', $this->object->genderAutoDetect().'-Аделаида Поникарова');
    }
    public function testGenDetect1647()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setSecondName('Пономарёва');
        $this->assertEquals('2-Лейла Пономарёва', $this->object->genderAutoDetect().'-Лейла Пономарёва');
    }
    public function testGenDetect1648()
    {
        $this->object->setFirstName('Фёкла');
        $this->object->setSecondName('Пончикова');
        $this->assertEquals('2-Фёкла Пончикова', $this->object->genderAutoDetect().'-Фёкла Пончикова');
    }
    public function testGenDetect1649()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Попова');
        $this->assertEquals('2-Зинаида Попова', $this->object->genderAutoDetect().'-Зинаида Попова');
    }
    public function testGenDetect1650()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setSecondName('Попырина');
        $this->assertEquals('2-Феодора Попырина', $this->object->genderAutoDetect().'-Феодора Попырина');
    }
    public function testGenDetect1651()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setSecondName('Посохова');
        $this->assertEquals('2-Вероника Посохова', $this->object->genderAutoDetect().'-Вероника Посохова');
    }
    public function testGenDetect1652()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Потапова');
        $this->assertEquals('2-Аурика Потапова', $this->object->genderAutoDetect().'-Аурика Потапова');
    }
    public function testGenDetect1653()
    {
        $this->object->setFirstName('Улла');
        $this->object->setSecondName('Потёмкина');
        $this->assertEquals('2-Улла Потёмкина', $this->object->genderAutoDetect().'-Улла Потёмкина');
    }
    public function testGenDetect1654()
    {
        $this->object->setFirstName('Аида');
        $this->object->setSecondName('Праздникова');
        $this->assertEquals('2-Аида Праздникова', $this->object->genderAutoDetect().'-Аида Праздникова');
    }
    public function testGenDetect1655()
    {
        $this->object->setFirstName('Улла');
        $this->object->setSecondName('Примакова');
        $this->assertEquals('2-Улла Примакова', $this->object->genderAutoDetect().'-Улла Примакова');
    }
    public function testGenDetect1656()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Приходько');
        $this->assertEquals('2-Алиса Приходько', $this->object->genderAutoDetect().'-Алиса Приходько');
    }
    public function testGenDetect1657()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Проничева');
        $this->assertEquals('2-Стелла Проничева', $this->object->genderAutoDetect().'-Стелла Проничева');
    }
    public function testGenDetect1658()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Протасова');
        $this->assertEquals('2-Зинаида Протасова', $this->object->genderAutoDetect().'-Зинаида Протасова');
    }
    public function testGenDetect1659()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setSecondName('Прохорова');
        $this->assertEquals('2-Ревекка Прохорова', $this->object->genderAutoDetect().'-Ревекка Прохорова');
    }
    public function testGenDetect1660()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setSecondName('Пугачёв');
        $this->assertEquals('2-Антонина Пугачёв', $this->object->genderAutoDetect().'-Антонина Пугачёв');
    }
    public function testGenDetect1661()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setSecondName('Пугина');
        $this->assertEquals('2-Павлина Пугина', $this->object->genderAutoDetect().'-Павлина Пугина');
    }
    public function testGenDetect1662()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Пузанова');
        $this->assertEquals('2-Божена Пузанова', $this->object->genderAutoDetect().'-Божена Пузанова');
    }
    public function testGenDetect1663()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Путилина');
        $this->assertEquals('2-Фаина Путилина', $this->object->genderAutoDetect().'-Фаина Путилина');
    }
    public function testGenDetect1664()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setSecondName('Путина');
        $this->assertEquals('2-Светлана Путина', $this->object->genderAutoDetect().'-Светлана Путина');
    }
    public function testGenDetect1665()
    {
        $this->object->setFirstName('Ева');
        $this->object->setSecondName('Путятина');
        $this->assertEquals('2-Ева Путятина', $this->object->genderAutoDetect().'-Ева Путятина');
    }
    public function testGenDetect1666()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Пушкина');
        $this->assertEquals('2-Татьяна Пушкина', $this->object->genderAutoDetect().'-Татьяна Пушкина');
    }
    public function testGenDetect1667()
    {
        $this->object->setFirstName('Аида');
        $this->object->setSecondName('Пыжалова');
        $this->assertEquals('2-Аида Пыжалова', $this->object->genderAutoDetect().'-Аида Пыжалова');
    }
    public function testGenDetect1668()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setSecondName('Пырьева');
        $this->assertEquals('2-Иляна Пырьева', $this->object->genderAutoDetect().'-Иляна Пырьева');
    }
    public function testGenDetect1669()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Рабинович');
        $this->assertEquals('2-Фаина Рабинович', $this->object->genderAutoDetect().'-Фаина Рабинович');
    }
    public function testGenDetect1670()
    {
        $this->object->setFirstName('Аида');
        $this->object->setSecondName('Разина');
        $this->assertEquals('2-Аида Разина', $this->object->genderAutoDetect().'-Аида Разина');
    }
    public function testGenDetect1671()
    {
        $this->object->setFirstName('Нина');
        $this->object->setSecondName('Разуваева');
        $this->assertEquals('2-Нина Разуваева', $this->object->genderAutoDetect().'-Нина Разуваева');
    }
    public function testGenDetect1672()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setSecondName('Распопова');
        $this->assertEquals('2-Людмила Распопова', $this->object->genderAutoDetect().'-Людмила Распопова');
    }
    public function testGenDetect1673()
    {
        $this->object->setFirstName('Асель');
        $this->object->setSecondName('Распутина');
        $this->assertEquals('2-Асель Распутина', $this->object->genderAutoDetect().'-Асель Распутина');
    }
    public function testGenDetect1674()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setSecondName('Расторгуева');
        $this->assertEquals('2-Мэри Расторгуева', $this->object->genderAutoDetect().'-Мэри Расторгуева');
    }
    public function testGenDetect1675()
    {
        $this->object->setFirstName('Филлида');
        $this->object->setSecondName('Ремизова');
        $this->assertEquals('2-Филлида Ремизова', $this->object->genderAutoDetect().'-Филлида Ремизова');
    }
    public function testGenDetect1676()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Репина');
        $this->assertEquals('2-Любовь Репина', $this->object->genderAutoDetect().'-Любовь Репина');
    }
    public function testGenDetect1677()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setSecondName('Решетилова');
        $this->assertEquals('2-Оксана Решетилова', $this->object->genderAutoDetect().'-Оксана Решетилова');
    }
    public function testGenDetect1678()
    {
        $this->object->setFirstName('Камола');
        $this->object->setSecondName('Решетникова');
        $this->assertEquals('2-Камола Решетникова', $this->object->genderAutoDetect().'-Камола Решетникова');
    }
    public function testGenDetect1679()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setSecondName('Родзянко');
        $this->assertEquals('2-Клотильда Родзянко', $this->object->genderAutoDetect().'-Клотильда Родзянко');
    }
    public function testGenDetect1680()
    {
        $this->object->setFirstName('Аида');
        $this->object->setSecondName('Рогачёва');
        $this->assertEquals('2-Аида Рогачёва', $this->object->genderAutoDetect().'-Аида Рогачёва');
    }
    public function testGenDetect1681()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Рогова');
        $this->assertEquals('2-Евфросиния Рогова', $this->object->genderAutoDetect().'-Евфросиния Рогова');
    }
    public function testGenDetect1682()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Рогозина');
        $this->assertEquals('2-Рада Рогозина', $this->object->genderAutoDetect().'-Рада Рогозина');
    }
    public function testGenDetect1683()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setSecondName('Рожкова');
        $this->assertEquals('2-Виолетта Рожкова', $this->object->genderAutoDetect().'-Виолетта Рожкова');
    }
    public function testGenDetect1684()
    {
        $this->object->setFirstName('Асель');
        $this->object->setSecondName('Рокоссовская');
        $this->assertEquals('2-Асель Рокоссовская', $this->object->genderAutoDetect().'-Асель Рокоссовская');
    }
    public function testGenDetect1685()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setSecondName('Романова');
        $this->assertEquals('2-Степанида Романова', $this->object->genderAutoDetect().'-Степанида Романова');
    }
    public function testGenDetect1686()
    {
        $this->object->setFirstName('Ангелина');
        $this->object->setSecondName('Ростова');
        $this->assertEquals('2-Ангелина Ростова', $this->object->genderAutoDetect().'-Ангелина Ростова');
    }
    public function testGenDetect1687()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Ростовцева');
        $this->assertEquals('2-Владислава Ростовцева', $this->object->genderAutoDetect().'-Владислава Ростовцева');
    }
    public function testGenDetect1688()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setSecondName('Рудавина');
        $this->assertEquals('2-Мафтуха Рудавина', $this->object->genderAutoDetect().'-Мафтуха Рудавина');
    }
    public function testGenDetect1689()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Румянцева');
        $this->assertEquals('2-Корнелия Румянцева', $this->object->genderAutoDetect().'-Корнелия Румянцева');
    }
    public function testGenDetect1690()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Рунова');
        $this->assertEquals('2-Аделаида Рунова', $this->object->genderAutoDetect().'-Аделаида Рунова');
    }
    public function testGenDetect1691()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setSecondName('Русакова');
        $this->assertEquals('2-Розалия Русакова', $this->object->genderAutoDetect().'-Розалия Русакова');
    }
    public function testGenDetect1692()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Русских');
        $this->assertEquals('2-Божена Русских', $this->object->genderAutoDetect().'-Божена Русских');
    }
    public function testGenDetect1693()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setSecondName('Ручкина');
        $this->assertEquals('2-Виолетта Ручкина', $this->object->genderAutoDetect().'-Виолетта Ручкина');
    }
    public function testGenDetect1694()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setSecondName('Рыбалкина');
        $this->assertEquals('2-Наталия Рыбалкина', $this->object->genderAutoDetect().'-Наталия Рыбалкина');
    }
    public function testGenDetect1695()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setSecondName('Рыжанова');
        $this->assertEquals('2-Авдотья Рыжанова', $this->object->genderAutoDetect().'-Авдотья Рыжанова');
    }
    public function testGenDetect1696()
    {
        $this->object->setFirstName('Марина');
        $this->object->setSecondName('Рыжкова');
        $this->assertEquals('2-Марина Рыжкова', $this->object->genderAutoDetect().'-Марина Рыжкова');
    }
    public function testGenDetect1697()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setSecondName('Рыжова');
        $this->assertEquals('2-Констанция Рыжова', $this->object->genderAutoDetect().'-Констанция Рыжова');
    }
    public function testGenDetect1698()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Рытина');
        $this->assertEquals('2-Алина Рытина', $this->object->genderAutoDetect().'-Алина Рытина');
    }
    public function testGenDetect1699()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setSecondName('Рыченкова');
        $this->assertEquals('2-Авдотья Рыченкова', $this->object->genderAutoDetect().'-Авдотья Рыченкова');
    }
    public function testGenDetect1700()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setSecondName('Рябкова');
        $this->assertEquals('2-Жанна Рябкова', $this->object->genderAutoDetect().'-Жанна Рябкова');
    }
    public function testGenDetect1701()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setSecondName('Рябова');
        $this->assertEquals('2-Анисья Рябова', $this->object->genderAutoDetect().'-Анисья Рябова');
    }
    public function testGenDetect1702()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setSecondName('Ряхина');
        $this->assertEquals('2-Нинель Ряхина', $this->object->genderAutoDetect().'-Нинель Ряхина');
    }
    public function testGenDetect1703()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Сабитова');
        $this->assertEquals('2-Элеонора Сабитова', $this->object->genderAutoDetect().'-Элеонора Сабитова');
    }
    public function testGenDetect1704()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Савасина');
        $this->assertEquals('2-Евфросиния Савасина', $this->object->genderAutoDetect().'-Евфросиния Савасина');
    }
    public function testGenDetect1705()
    {
        $this->object->setFirstName('Дария');
        $this->object->setSecondName('Савинкова');
        $this->assertEquals('2-Дария Савинкова', $this->object->genderAutoDetect().'-Дария Савинкова');
    }
    public function testGenDetect1706()
    {
        $this->object->setFirstName('Улла');
        $this->object->setSecondName('Савенкова');
        $this->assertEquals('2-Улла Савенкова', $this->object->genderAutoDetect().'-Улла Савенкова');
    }
    public function testGenDetect1707()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setSecondName('Саврасова');
        $this->assertEquals('2-Фрида Саврасова', $this->object->genderAutoDetect().'-Фрида Саврасова');
    }
    public function testGenDetect1708()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Садыкова');
        $this->assertEquals('2-Юния Садыкова', $this->object->genderAutoDetect().'-Юния Садыкова');
    }
    public function testGenDetect1709()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setSecondName('Сазонова');
        $this->assertEquals('2-Геннадия Сазонова', $this->object->genderAutoDetect().'-Геннадия Сазонова');
    }
    public function testGenDetect1710()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setSecondName('Салко');
        $this->assertEquals('2-Зульфия Салко', $this->object->genderAutoDetect().'-Зульфия Салко');
    }
    public function testGenDetect1711()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setSecondName('Салькова');
        $this->assertEquals('2-Азиза Салькова', $this->object->genderAutoDetect().'-Азиза Салькова');
    }
    public function testGenDetect1712()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setSecondName('Сальникова');
        $this->assertEquals('2-Надежда Сальникова', $this->object->genderAutoDetect().'-Надежда Сальникова');
    }
    public function testGenDetect1713()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Самойлова');
        $this->assertEquals('2-Анисия Самойлова', $this->object->genderAutoDetect().'-Анисия Самойлова');
    }
    public function testGenDetect1714()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Самохина');
        $this->assertEquals('2-Евгения Самохина', $this->object->genderAutoDetect().'-Евгения Самохина');
    }
    public function testGenDetect1715()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setSecondName('Самсонова');
        $this->assertEquals('2-Тамара Самсонова', $this->object->genderAutoDetect().'-Тамара Самсонова');
    }
    public function testGenDetect1716()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Санникова');
        $this->assertEquals('2-Элеонора Санникова', $this->object->genderAutoDetect().'-Элеонора Санникова');
    }
    public function testGenDetect1717()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setSecondName('Сапогова');
        $this->assertEquals('2-Каролина Сапогова', $this->object->genderAutoDetect().'-Каролина Сапогова');
    }
    public function testGenDetect1718()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Сапожникова');
        $this->assertEquals('2-Анастасия Сапожникова', $this->object->genderAutoDetect().'-Анастасия Сапожникова');
    }
    public function testGenDetect1719()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Сафиюлина');
        $this->assertEquals('2-Любовь Сафиюлина', $this->object->genderAutoDetect().'-Любовь Сафиюлина');
    }
    public function testGenDetect1720()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Сахарова');
        $this->assertEquals('2-Эми Сахарова', $this->object->genderAutoDetect().'-Эми Сахарова');
    }
    public function testGenDetect1721()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Свалова');
        $this->assertEquals('2-Анушка Свалова', $this->object->genderAutoDetect().'-Анушка Свалова');
    }
    public function testGenDetect1722()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Северинова');
        $this->assertEquals('2-Евгения Северинова', $this->object->genderAutoDetect().'-Евгения Северинова');
    }
    public function testGenDetect1723()
    {
        $this->object->setFirstName('Арна');
        $this->object->setSecondName('Севастьянова');
        $this->assertEquals('2-Арна Севастьянова', $this->object->genderAutoDetect().'-Арна Севастьянова');
    }
    public function testGenDetect1724()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setSecondName('Седельникова');
        $this->assertEquals('2-Иуния Седельникова', $this->object->genderAutoDetect().'-Иуния Седельникова');
    }
    public function testGenDetect1725()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Седова');
        $this->assertEquals('2-Юния Седова', $this->object->genderAutoDetect().'-Юния Седова');
    }
    public function testGenDetect1726()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Селезнёва');
        $this->assertEquals('2-Аурика Селезнёва', $this->object->genderAutoDetect().'-Аурика Селезнёва');
    }
    public function testGenDetect1727()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setSecondName('Селиванова');
        $this->assertEquals('2-Агриппина Селиванова', $this->object->genderAutoDetect().'-Агриппина Селиванова');
    }
    public function testGenDetect1728()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setSecondName('Семёнова');
        $this->assertEquals('2-Клотильда Семёнова', $this->object->genderAutoDetect().'-Клотильда Семёнова');
    }
    public function testGenDetect1729()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Семичевская');
        $this->assertEquals('2-Галина Семичевская', $this->object->genderAutoDetect().'-Галина Семичевская');
    }
    public function testGenDetect1730()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Сенькина');
        $this->assertEquals('2-Аделаида Сенькина', $this->object->genderAutoDetect().'-Аделаида Сенькина');
    }
    public function testGenDetect1731()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Сереброва');
        $this->assertEquals('2-Ульрика Сереброва', $this->object->genderAutoDetect().'-Ульрика Сереброва');
    }
    public function testGenDetect1732()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setSecondName('Серебрякова');
        $this->assertEquals('2-Иуния Серебрякова', $this->object->genderAutoDetect().'-Иуния Серебрякова');
    }
    public function testGenDetect1733()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setSecondName('Серёгина');
        $this->assertEquals('2-Ольга Серёгина', $this->object->genderAutoDetect().'-Ольга Серёгина');
    }
    public function testGenDetect1734()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Серова');
        $this->assertEquals('2-Стелла Серова', $this->object->genderAutoDetect().'-Стелла Серова');
    }
    public function testGenDetect1735()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Серпинова');
        $this->assertEquals('2-Сара Серпинова', $this->object->genderAutoDetect().'-Сара Серпинова');
    }
    public function testGenDetect1736()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setSecondName('Семянина');
        $this->assertEquals('2-Аврелия Семянина', $this->object->genderAutoDetect().'-Аврелия Семянина');
    }
    public function testGenDetect1737()
    {
        $this->object->setFirstName('Нина');
        $this->object->setSecondName('Сёмина');
        $this->assertEquals('2-Нина Сёмина', $this->object->genderAutoDetect().'-Нина Сёмина');
    }
    public function testGenDetect1738()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Серёгина');
        $this->assertEquals('2-Олеся Серёгина', $this->object->genderAutoDetect().'-Олеся Серёгина');
    }
    public function testGenDetect1739()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setSecondName('Сеченова');
        $this->assertEquals('2-Авдотья Сеченова', $this->object->genderAutoDetect().'-Авдотья Сеченова');
    }
    public function testGenDetect1740()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Сивакова');
        $this->assertEquals('2-Элеонора Сивакова', $this->object->genderAutoDetect().'-Элеонора Сивакова');
    }
    public function testGenDetect1741()
    {
        $this->object->setFirstName('Алла');
        $this->object->setSecondName('Сигаева');
        $this->assertEquals('2-Алла Сигаева', $this->object->genderAutoDetect().'-Алла Сигаева');
    }
    public function testGenDetect1742()
    {
        $this->object->setFirstName('Аида');
        $this->object->setSecondName('Сигачёва');
        $this->assertEquals('2-Аида Сигачёва', $this->object->genderAutoDetect().'-Аида Сигачёва');
    }
    public function testGenDetect1743()
    {
        $this->object->setFirstName('Марина');
        $this->object->setSecondName('Сидорова');
        $this->assertEquals('2-Марина Сидорова', $this->object->genderAutoDetect().'-Марина Сидорова');
    }
    public function testGenDetect1744()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Сизова');
        $this->assertEquals('2-Варвара Сизова', $this->object->genderAutoDetect().'-Варвара Сизова');
    }
    public function testGenDetect1745()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setSecondName('Сизая');
        $this->assertEquals('2-Изабелла Сизая', $this->object->genderAutoDetect().'-Изабелла Сизая');
    }
    public function testGenDetect1746()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setSecondName('Силиванова');
        $this->assertEquals('2-Иулия Силиванова', $this->object->genderAutoDetect().'-Иулия Силиванова');
    }
    public function testGenDetect1747()
    {
        $this->object->setFirstName('Арна');
        $this->object->setSecondName('Силина');
        $this->assertEquals('2-Арна Силина', $this->object->genderAutoDetect().'-Арна Силина');
    }
    public function testGenDetect1748()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Сильвестрова');
        $this->assertEquals('2-Ульрика Сильвестрова', $this->object->genderAutoDetect().'-Ульрика Сильвестрова');
    }
    public function testGenDetect1749()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setSecondName('Силивёстрова');
        $this->assertEquals('2-Ливия Силивёстрова', $this->object->genderAutoDetect().'-Ливия Силивёстрова');
    }
    public function testGenDetect1750()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setSecondName('Силаева');
        $this->assertEquals('2-Ребекка Силаева', $this->object->genderAutoDetect().'-Ребекка Силаева');
    }
    public function testGenDetect1751()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setSecondName('Силиванова');
        $this->assertEquals('2-Суламифь Силиванова', $this->object->genderAutoDetect().'-Суламифь Силиванова');
    }
    public function testGenDetect1752()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Скворцова');
        $this->assertEquals('2-Пелагея Скворцова', $this->object->genderAutoDetect().'-Пелагея Скворцова');
    }
    public function testGenDetect1753()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Скрябина');
        $this->assertEquals('2-Алиса Скрябина', $this->object->genderAutoDetect().'-Алиса Скрябина');
    }
    public function testGenDetect1754()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setSecondName('Скоробогатова');
        $this->assertEquals('2-Аврелия Скоробогатова', $this->object->genderAutoDetect().'-Аврелия Скоробогатова');
    }
    public function testGenDetect1755()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setSecondName('Скороходова');
        $this->assertEquals('2-Антонина Скороходова', $this->object->genderAutoDetect().'-Антонина Скороходова');
    }
    public function testGenDetect1756()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Скуратова');
        $this->assertEquals('2-Алина Скуратова', $this->object->genderAutoDetect().'-Алина Скуратова');
    }
    public function testGenDetect1757()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Слобожанина');
        $this->assertEquals('2-Божена Слобожанина', $this->object->genderAutoDetect().'-Божена Слобожанина');
    }
    public function testGenDetect1758()
    {
        $this->object->setFirstName('Асель');
        $this->object->setSecondName('Случевская');
        $this->assertEquals('2-Асель Случевская', $this->object->genderAutoDetect().'-Асель Случевская');
    }
    public function testGenDetect1759()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Смирнитская');
        $this->assertEquals('2-Любовь Смирнитская', $this->object->genderAutoDetect().'-Любовь Смирнитская');
    }
    public function testGenDetect1760()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setSecondName('Смирнова');
        $this->assertEquals('2-Корнелия Смирнова', $this->object->genderAutoDetect().'-Корнелия Смирнова');
    }
    public function testGenDetect1761()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Сметанина');
        $this->assertEquals('2-Варвара Сметанина', $this->object->genderAutoDetect().'-Варвара Сметанина');
    }
    public function testGenDetect1762()
    {
        $this->object->setFirstName('Инна');
        $this->object->setSecondName('Смолина');
        $this->assertEquals('2-Инна Смолина', $this->object->genderAutoDetect().'-Инна Смолина');
    }
    public function testGenDetect1763()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Смолянова');
        $this->assertEquals('2-Элеонора Смолянова', $this->object->genderAutoDetect().'-Элеонора Смолянова');
    }
    public function testGenDetect1764()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Снаткина');
        $this->assertEquals('2-Элеонора Снаткина', $this->object->genderAutoDetect().'-Элеонора Снаткина');
    }
    public function testGenDetect1765()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Снегирёва');
        $this->assertEquals('2-Божена Снегирёва', $this->object->genderAutoDetect().'-Божена Снегирёва');
    }
    public function testGenDetect1766()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Снеткова');
        $this->assertEquals('2-Прасковья Снеткова', $this->object->genderAutoDetect().'-Прасковья Снеткова');
    }
    public function testGenDetect1767()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Соболева');
        $this->assertEquals('2-Эми Соболева', $this->object->genderAutoDetect().'-Эми Соболева');
    }
    public function testGenDetect1768()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Соболевская');
        $this->assertEquals('2-Фаина Соболевская', $this->object->genderAutoDetect().'-Фаина Соболевская');
    }
    public function testGenDetect1769()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setSecondName('Соколова');
        $this->assertEquals('2-Иулия Соколова', $this->object->genderAutoDetect().'-Иулия Соколова');
    }
    public function testGenDetect1770()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setSecondName('Солдатова');
        $this->assertEquals('2-Юлианна Солдатова', $this->object->genderAutoDetect().'-Юлианна Солдатова');
    }
    public function testGenDetect1771()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Соловьёва');
        $this->assertEquals('2-Таисия Соловьёва', $this->object->genderAutoDetect().'-Таисия Соловьёва');
    }
    public function testGenDetect1772()
    {
        $this->object->setFirstName('Лада');
        $this->object->setSecondName('Солодникова');
        $this->assertEquals('2-Лада Солодникова', $this->object->genderAutoDetect().'-Лада Солодникова');
    }
    public function testGenDetect1773()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Соломина');
        $this->assertEquals('2-Аделаида Соломина', $this->object->genderAutoDetect().'-Аделаида Соломина');
    }
    public function testGenDetect1774()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setSecondName('Соломонова');
        $this->assertEquals('2-Иулия Соломонова', $this->object->genderAutoDetect().'-Иулия Соломонова');
    }
    public function testGenDetect1775()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setSecondName('Сопова');
        $this->assertEquals('2-Ревекка Сопова', $this->object->genderAutoDetect().'-Ревекка Сопова');
    }
    public function testGenDetect1776()
    {
        $this->object->setFirstName('Камола');
        $this->object->setSecondName('Сорокина');
        $this->assertEquals('2-Камола Сорокина', $this->object->genderAutoDetect().'-Камола Сорокина');
    }
    public function testGenDetect1777()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Спанова');
        $this->assertEquals('2-Ульрика Спанова', $this->object->genderAutoDetect().'-Ульрика Спанова');
    }
    public function testGenDetect1778()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Старикова');
        $this->assertEquals('2-Элеонора Старикова', $this->object->genderAutoDetect().'-Элеонора Старикова');
    }
    public function testGenDetect1779()
    {
        $this->object->setFirstName('Дария');
        $this->object->setSecondName('Староверова');
        $this->assertEquals('2-Дария Староверова', $this->object->genderAutoDetect().'-Дария Староверова');
    }
    public function testGenDetect1780()
    {
        $this->object->setFirstName('Инна');
        $this->object->setSecondName('Стеблева');
        $this->assertEquals('2-Инна Стеблева', $this->object->genderAutoDetect().'-Инна Стеблева');
    }
    public function testGenDetect1781()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Стегнова');
        $this->assertEquals('2-Олеся Стегнова', $this->object->genderAutoDetect().'-Олеся Стегнова');
    }
    public function testGenDetect1782()
    {
        $this->object->setFirstName('Ангелина');
        $this->object->setSecondName('Степанова');
        $this->assertEquals('2-Ангелина Степанова', $this->object->genderAutoDetect().'-Ангелина Степанова');
    }
    public function testGenDetect1783()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Степанкова');
        $this->assertEquals('2-Анисия Степанкова', $this->object->genderAutoDetect().'-Анисия Степанкова');
    }
    public function testGenDetect1784()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setSecondName('Степашина');
        $this->assertEquals('2-Светлана Степашина', $this->object->genderAutoDetect().'-Светлана Степашина');
    }
    public function testGenDetect1785()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setSecondName('Стрелкова');
        $this->assertEquals('2-Анисья Стрелкова', $this->object->genderAutoDetect().'-Анисья Стрелкова');
    }
    public function testGenDetect1786()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Стрекалова');
        $this->assertEquals('2-Глафира Стрекалова', $this->object->genderAutoDetect().'-Глафира Стрекалова');
    }
    public function testGenDetect1787()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setSecondName('Строганова');
        $this->assertEquals('2-Ульяна Строганова', $this->object->genderAutoDetect().'-Ульяна Строганова');
    }
    public function testGenDetect1788()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setSecondName('Субботина');
        $this->assertEquals('2-Елизавета Субботина', $this->object->genderAutoDetect().'-Елизавета Субботина');
    }
    public function testGenDetect1789()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setSecondName('Суботина');
        $this->assertEquals('2-Консуэло Суботина', $this->object->genderAutoDetect().'-Консуэло Суботина');
    }
    public function testGenDetect1790()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setSecondName('Суворина');
        $this->assertEquals('2-Иулия Суворина', $this->object->genderAutoDetect().'-Иулия Суворина');
    }
    public function testGenDetect1791()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Суворкина');
        $this->assertEquals('2-Фаина Суворкина', $this->object->genderAutoDetect().'-Фаина Суворкина');
    }
    public function testGenDetect1792()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Суворова');
        $this->assertEquals('2-Рада Суворова', $this->object->genderAutoDetect().'-Рада Суворова');
    }
    public function testGenDetect1793()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Сунгатулина');
        $this->assertEquals('2-Татьяна Сунгатулина', $this->object->genderAutoDetect().'-Татьяна Сунгатулина');
    }
    public function testGenDetect1794()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Сукачева');
        $this->assertEquals('2-Таисия Сукачева', $this->object->genderAutoDetect().'-Таисия Сукачева');
    }
    public function testGenDetect1795()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setSecondName('Сурикова');
        $this->assertEquals('2-Оксана Сурикова', $this->object->genderAutoDetect().'-Оксана Сурикова');
    }
    public function testGenDetect1796()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Сусоева');
        $this->assertEquals('2-Александра Сусоева', $this->object->genderAutoDetect().'-Александра Сусоева');
    }
    public function testGenDetect1797()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Сутулина');
        $this->assertEquals('2-Любовь Сутулина', $this->object->genderAutoDetect().'-Любовь Сутулина');
    }
    public function testGenDetect1798()
    {
        $this->object->setFirstName('Нина');
        $this->object->setSecondName('Сухорукова');
        $this->assertEquals('2-Нина Сухорукова', $this->object->genderAutoDetect().'-Нина Сухорукова');
    }
    public function testGenDetect1799()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Сучкова');
        $this->assertEquals('2-Элина Сучкова', $this->object->genderAutoDetect().'-Элина Сучкова');
    }
    public function testGenDetect1800()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Сысоева');
        $this->assertEquals('2-Юния Сысоева', $this->object->genderAutoDetect().'-Юния Сысоева');
    }
    public function testGenDetect1801()
    {
        $this->object->setFirstName('Милена');
        $this->object->setSecondName('Сытникова');
        $this->assertEquals('2-Милена Сытникова', $this->object->genderAutoDetect().'-Милена Сытникова');
    }
    public function testGenDetect1802()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setSecondName('Сычёвка');
        $this->assertEquals('2-Светлана Сычёвка', $this->object->genderAutoDetect().'-Светлана Сычёвка');
    }
    public function testGenDetect1803()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Сычкина');
        $this->assertEquals('2-Кристина Сычкина', $this->object->genderAutoDetect().'-Кристина Сычкина');
    }
    public function testGenDetect1804()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Сюсева');
        $this->assertEquals('2-Нонна Сюсева', $this->object->genderAutoDetect().'-Нонна Сюсева');
    }
    public function testGenDetect1805()
    {
        $this->object->setFirstName('Беата');
        $this->object->setSecondName('Табакова');
        $this->assertEquals('2-Беата Табакова', $this->object->genderAutoDetect().'-Беата Табакова');
    }
    public function testGenDetect1806()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Табернакулова');
        $this->assertEquals('2-Владислава Табернакулова', $this->object->genderAutoDetect().'-Владислава Табернакулова');
    }
    public function testGenDetect1807()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Таланова');
        $this->assertEquals('2-Анастасия Таланова', $this->object->genderAutoDetect().'-Анастасия Таланова');
    }
    public function testGenDetect1808()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Талалихина');
        $this->assertEquals('2-Алина Талалихина', $this->object->genderAutoDetect().'-Алина Талалихина');
    }
    public function testGenDetect1809()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Танкова');
        $this->assertEquals('2-Божена Танкова', $this->object->genderAutoDetect().'-Божена Танкова');
    }
    public function testGenDetect1810()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setSecondName('Тарасова');
        $this->assertEquals('2-Иоанна Тарасова', $this->object->genderAutoDetect().'-Иоанна Тарасова');
    }
    public function testGenDetect1811()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setSecondName('Татарова');
        $this->assertEquals('2-Консуэло Татарова', $this->object->genderAutoDetect().'-Консуэло Татарова');
    }
    public function testGenDetect1812()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Твардовская');
        $this->assertEquals('2-Шарлотта Твардовская', $this->object->genderAutoDetect().'-Шарлотта Твардовская');
    }
    public function testGenDetect1813()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setSecondName('Тёмкина');
        $this->assertEquals('2-Ливия Тёмкина', $this->object->genderAutoDetect().'-Ливия Тёмкина');
    }
    public function testGenDetect1814()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setSecondName('Теплова');
        $this->assertEquals('2-Мэри Теплова', $this->object->genderAutoDetect().'-Мэри Теплова');
    }
    public function testGenDetect1815()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Теребова');
        $this->assertEquals('2-Пелагея Теребова', $this->object->genderAutoDetect().'-Пелагея Теребова');
    }
    public function testGenDetect1816()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setSecondName('Тетерева');
        $this->assertEquals('2-Ольга Тетерева', $this->object->genderAutoDetect().'-Ольга Тетерева');
    }
    public function testGenDetect1817()
    {
        $this->object->setFirstName('Шона');
        $this->object->setSecondName('Типалова');
        $this->assertEquals('2-Шона Типалова', $this->object->genderAutoDetect().'-Шона Типалова');
    }
    public function testGenDetect1818()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setSecondName('Титова');
        $this->assertEquals('2-Марианна Титова', $this->object->genderAutoDetect().'-Марианна Титова');
    }
    public function testGenDetect1819()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Тихвинская');
        $this->assertEquals('2-Александра Тихвинская', $this->object->genderAutoDetect().'-Александра Тихвинская');
    }
    public function testGenDetect1820()
    {
        $this->object->setFirstName('Камола');
        $this->object->setSecondName('Тихомирова');
        $this->assertEquals('2-Камола Тихомирова', $this->object->genderAutoDetect().'-Камола Тихомирова');
    }
    public function testGenDetect1821()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setSecondName('Тихонова');
        $this->assertEquals('2-Аврелия Тихонова', $this->object->genderAutoDetect().'-Аврелия Тихонова');
    }
    public function testGenDetect1822()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Токарева');
        $this->assertEquals('2-Элина Токарева', $this->object->genderAutoDetect().'-Элина Токарева');
    }
    public function testGenDetect1823()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setSecondName('Токмакова');
        $this->assertEquals('2-Аполлония Токмакова', $this->object->genderAutoDetect().'-Аполлония Токмакова');
    }
    public function testGenDetect1824()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setSecondName('Толбанова');
        $this->assertEquals('2-Ульяна Толбанова', $this->object->genderAutoDetect().'-Ульяна Толбанова');
    }
    public function testGenDetect1825()
    {
        $this->object->setFirstName('Сара');
        $this->object->setSecondName('Толстоброва');
        $this->assertEquals('2-Сара Толстоброва', $this->object->genderAutoDetect().'-Сара Толстоброва');
    }
    public function testGenDetect1826()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setSecondName('Толстокожева');
        $this->assertEquals('2-Урсула Толстокожева', $this->object->genderAutoDetect().'-Урсула Толстокожева');
    }
    public function testGenDetect1827()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setSecondName('Толстая');
        $this->assertEquals('2-Шейла Толстая', $this->object->genderAutoDetect().'-Шейла Толстая');
    }
    public function testGenDetect1828()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setSecondName('Топорова');
        $this->assertEquals('2-Евдокия Топорова', $this->object->genderAutoDetect().'-Евдокия Топорова');
    }
    public function testGenDetect1829()
    {
        $this->object->setFirstName('Лада');
        $this->object->setSecondName('Торопова');
        $this->assertEquals('2-Лада Торопова', $this->object->genderAutoDetect().'-Лада Торопова');
    }
    public function testGenDetect1830()
    {
        $this->object->setFirstName('Феба');
        $this->object->setSecondName('Торчинова');
        $this->assertEquals('2-Феба Торчинова', $this->object->genderAutoDetect().'-Феба Торчинова');
    }
    public function testGenDetect1831()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Травкина');
        $this->assertEquals('2-Евгения Травкина', $this->object->genderAutoDetect().'-Евгения Травкина');
    }
    public function testGenDetect1832()
    {
        $this->object->setFirstName('Анна');
        $this->object->setSecondName('Тредиковская');
        $this->assertEquals('2-Анна Тредиковская', $this->object->genderAutoDetect().'-Анна Тредиковская');
    }
    public function testGenDetect1833()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setSecondName('Третьякова');
        $this->assertEquals('2-Оксана Третьякова', $this->object->genderAutoDetect().'-Оксана Третьякова');
    }
    public function testGenDetect1834()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Трифонова');
        $this->assertEquals('2-Татьяна Трифонова', $this->object->genderAutoDetect().'-Татьяна Трифонова');
    }
    public function testGenDetect1835()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setSecondName('Трофимова');
        $this->assertEquals('2-Таисия Трофимова', $this->object->genderAutoDetect().'-Таисия Трофимова');
    }
    public function testGenDetect1836()
    {
        $this->object->setFirstName('Филлида');
        $this->object->setSecondName('Трусова');
        $this->assertEquals('2-Филлида Трусова', $this->object->genderAutoDetect().'-Филлида Трусова');
    }
    public function testGenDetect1837()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Трутнева');
        $this->assertEquals('2-Анастасия Трутнева', $this->object->genderAutoDetect().'-Анастасия Трутнева');
    }
    public function testGenDetect1838()
    {
        $this->object->setFirstName('Элина');
        $this->object->setSecondName('Труфанова');
        $this->assertEquals('2-Элина Труфанова', $this->object->genderAutoDetect().'-Элина Труфанова');
    }
    public function testGenDetect1839()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setSecondName('Трухина');
        $this->assertEquals('2-Юлия Трухина', $this->object->genderAutoDetect().'-Юлия Трухина');
    }
    public function testGenDetect1840()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Трындина');
        $this->assertEquals('2-Евфросиния Трындина', $this->object->genderAutoDetect().'-Евфросиния Трындина');
    }
    public function testGenDetect1841()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Туполева');
        $this->assertEquals('2-Зинаида Туполева', $this->object->genderAutoDetect().'-Зинаида Туполева');
    }
    public function testGenDetect1842()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setSecondName('Турбина');
        $this->assertEquals('2-Клеопатра Турбина', $this->object->genderAutoDetect().'-Клеопатра Турбина');
    }
    public function testGenDetect1843()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Тургенева');
        $this->assertEquals('2-Владислава Тургенева', $this->object->genderAutoDetect().'-Владислава Тургенева');
    }
    public function testGenDetect1844()
    {
        $this->object->setFirstName('Шона');
        $this->object->setSecondName('Турова');
        $this->assertEquals('2-Шона Турова', $this->object->genderAutoDetect().'-Шона Турова');
    }
    public function testGenDetect1845()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Турфанова');
        $this->assertEquals('2-Анастасия Турфанова', $this->object->genderAutoDetect().'-Анастасия Турфанова');
    }
    public function testGenDetect1846()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Тычкина');
        $this->assertEquals('2-Ярослава Тычкина', $this->object->genderAutoDetect().'-Ярослава Тычкина');
    }
    public function testGenDetect1847()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setSecondName('Тюшнякова');
        $this->assertEquals('2-Надежда Тюшнякова', $this->object->genderAutoDetect().'-Надежда Тюшнякова');
    }
    public function testGenDetect1848()
    {
        $this->object->setFirstName('Аида');
        $this->object->setSecondName('Телицына');
        $this->assertEquals('2-Аида Телицына', $this->object->genderAutoDetect().'-Аида Телицына');
    }
    public function testGenDetect1849()
    {
        $this->object->setFirstName('Мальвина');
        $this->object->setSecondName('Тянникова');
        $this->assertEquals('2-Мальвина Тянникова', $this->object->genderAutoDetect().'-Мальвина Тянникова');
    }
    public function testGenDetect1850()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Угольникова');
        $this->assertEquals('2-Пелагея Угольникова', $this->object->genderAutoDetect().'-Пелагея Угольникова');
    }
    public function testGenDetect1851()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Ульянова');
        $this->assertEquals('2-Кристина Ульянова', $this->object->genderAutoDetect().'-Кристина Ульянова');
    }
    public function testGenDetect1852()
    {
        $this->object->setFirstName('Марина');
        $this->object->setSecondName('Ульяшина');
        $this->assertEquals('2-Марина Ульяшина', $this->object->genderAutoDetect().'-Марина Ульяшина');
    }
    public function testGenDetect1853()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setSecondName('Усатова');
        $this->assertEquals('2-Нонна Усатова', $this->object->genderAutoDetect().'-Нонна Усатова');
    }
    public function testGenDetect1854()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setSecondName('Усова');
        $this->assertEquals('2-Октавия Усова', $this->object->genderAutoDetect().'-Октавия Усова');
    }
    public function testGenDetect1855()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setSecondName('Устинова');
        $this->assertEquals('2-Каролина Устинова', $this->object->genderAutoDetect().'-Каролина Устинова');
    }
    public function testGenDetect1856()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setSecondName('Устюжанина');
        $this->assertEquals('2-Каролина Устюжанина', $this->object->genderAutoDetect().'-Каролина Устюжанина');
    }
    public function testGenDetect1857()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Утёсова');
        $this->assertEquals('2-Любовь Утёсова', $this->object->genderAutoDetect().'-Любовь Утёсова');
    }
    public function testGenDetect1858()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setSecondName('Ухова');
        $this->assertEquals('2-Зульфия Ухова', $this->object->genderAutoDetect().'-Зульфия Ухова');
    }
    public function testGenDetect1859()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Фанина');
        $this->assertEquals('2-Стелла Фанина', $this->object->genderAutoDetect().'-Стелла Фанина');
    }
    public function testGenDetect1860()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Фамусова');
        $this->assertEquals('2-Алиса Фамусова', $this->object->genderAutoDetect().'-Алиса Фамусова');
    }
    public function testGenDetect1861()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setSecondName('Федина');
        $this->assertEquals('2-Геннадия Федина', $this->object->genderAutoDetect().'-Геннадия Федина');
    }
    public function testGenDetect1862()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Федосова');
        $this->assertEquals('2-Анисия Федосова', $this->object->genderAutoDetect().'-Анисия Федосова');
    }
    public function testGenDetect1863()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setSecondName('Федотова');
        $this->assertEquals('2-Василиса Федотова', $this->object->genderAutoDetect().'-Василиса Федотова');
    }
    public function testGenDetect1864()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setSecondName('Федосеева');
        $this->assertEquals('2-Юлианна Федосеева', $this->object->genderAutoDetect().'-Юлианна Федосеева');
    }
    public function testGenDetect1865()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setSecondName('Федченкова');
        $this->assertEquals('2-Юлия Федченкова', $this->object->genderAutoDetect().'-Юлия Федченкова');
    }
    public function testGenDetect1866()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Фёдорова');
        $this->assertEquals('2-Алина Фёдорова', $this->object->genderAutoDetect().'-Алина Фёдорова');
    }
    public function testGenDetect1867()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setSecondName('Федулова');
        $this->assertEquals('2-Фаина Федулова', $this->object->genderAutoDetect().'-Фаина Федулова');
    }
    public function testGenDetect1868()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Фетисова');
        $this->assertEquals('2-Альбина Фетисова', $this->object->genderAutoDetect().'-Альбина Фетисова');
    }
    public function testGenDetect1869()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setSecondName('Филатова');
        $this->assertEquals('2-Аграфена Филатова', $this->object->genderAutoDetect().'-Аграфена Филатова');
    }
    public function testGenDetect1870()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setSecondName('Филимонова');
        $this->assertEquals('2-Ульяна Филимонова', $this->object->genderAutoDetect().'-Ульяна Филимонова');
    }
    public function testGenDetect1871()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setSecondName('Филиппова');
        $this->assertEquals('2-Каролина Филиппова', $this->object->genderAutoDetect().'-Каролина Филиппова');
    }
    public function testGenDetect1872()
    {
        $this->object->setFirstName('Инна');
        $this->object->setSecondName('Флёрова');
        $this->assertEquals('2-Инна Флёрова', $this->object->genderAutoDetect().'-Инна Флёрова');
    }
    public function testGenDetect1873()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Фокина');
        $this->assertEquals('2-Евфросиния Фокина', $this->object->genderAutoDetect().'-Евфросиния Фокина');
    }
    public function testGenDetect1874()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Фомина');
        $this->assertEquals('2-Прасковья Фомина', $this->object->genderAutoDetect().'-Прасковья Фомина');
    }
    public function testGenDetect1875()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setSecondName('Фомичева');
        $this->assertEquals('2-Екатерина Фомичева', $this->object->genderAutoDetect().'-Екатерина Фомичева');
    }
    public function testGenDetect1876()
    {
        $this->object->setFirstName('Клара');
        $this->object->setSecondName('Фонвизина');
        $this->assertEquals('2-Клара Фонвизина', $this->object->genderAutoDetect().'-Клара Фонвизина');
    }
    public function testGenDetect1877()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Форопонова');
        $this->assertEquals('2-Прасковья Форопонова', $this->object->genderAutoDetect().'-Прасковья Форопонова');
    }
    public function testGenDetect1878()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Фирсова');
        $this->assertEquals('2-Ярослава Фирсова', $this->object->genderAutoDetect().'-Ярослава Фирсова');
    }
    public function testGenDetect1879()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setSecondName('Фролова');
        $this->assertEquals('2-Лейла Фролова', $this->object->genderAutoDetect().'-Лейла Фролова');
    }
    public function testGenDetect1880()
    {
        $this->object->setFirstName('Диана');
        $this->object->setSecondName('Францева');
        $this->assertEquals('2-Диана Францева', $this->object->genderAutoDetect().'-Диана Францева');
    }
    public function testGenDetect1881()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setSecondName('Фукина');
        $this->assertEquals('2-Пелагея Фукина', $this->object->genderAutoDetect().'-Пелагея Фукина');
    }
    public function testGenDetect1882()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setSecondName('Хабалова');
        $this->assertEquals('2-Аделина Хабалова', $this->object->genderAutoDetect().'-Аделина Хабалова');
    }
    public function testGenDetect1883()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setSecondName('Халтурина');
        $this->assertEquals('2-Фрида Халтурина', $this->object->genderAutoDetect().'-Фрида Халтурина');
    }
    public function testGenDetect1884()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setSecondName('Харитонова');
        $this->assertEquals('2-Зульфия Харитонова', $this->object->genderAutoDetect().'-Зульфия Харитонова');
    }
    public function testGenDetect1885()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Харламова');
        $this->assertEquals('2-Рада Харламова', $this->object->genderAutoDetect().'-Рада Харламова');
    }
    public function testGenDetect1886()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setSecondName('Хлебникова');
        $this->assertEquals('2-Жанна Хлебникова', $this->object->genderAutoDetect().'-Жанна Хлебникова');
    }
    public function testGenDetect1887()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Хлопонина');
        $this->assertEquals('2-Ульрика Хлопонина', $this->object->genderAutoDetect().'-Ульрика Хлопонина');
    }
    public function testGenDetect1888()
    {
        $this->object->setFirstName('Дария');
        $this->object->setSecondName('Холодова');
        $this->assertEquals('2-Дария Холодова', $this->object->genderAutoDetect().'-Дария Холодова');
    }
    public function testGenDetect1889()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setSecondName('Хомколова');
        $this->assertEquals('2-Розарио Хомколова', $this->object->genderAutoDetect().'-Розарио Хомколова');
    }
    public function testGenDetect1890()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setSecondName('Храмова');
        $this->assertEquals('2-Нинель Храмова', $this->object->genderAutoDetect().'-Нинель Храмова');
    }
    public function testGenDetect1891()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setSecondName('Хромова');
        $this->assertEquals('2-Зоя Хромова', $this->object->genderAutoDetect().'-Зоя Хромова');
    }
    public function testGenDetect1892()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Худовекова');
        $this->assertEquals('2-Александра Худовекова', $this->object->genderAutoDetect().'-Александра Худовекова');
    }
    public function testGenDetect1893()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Хлебова');
        $this->assertEquals('2-Стелла Хлебова', $this->object->genderAutoDetect().'-Стелла Хлебова');
    }
    public function testGenDetect1894()
    {
        $this->object->setFirstName('Милена');
        $this->object->setSecondName('Хуртина');
        $this->assertEquals('2-Милена Хуртина', $this->object->genderAutoDetect().'-Милена Хуртина');
    }
    public function testGenDetect1895()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Хребтова');
        $this->assertEquals('2-Аделаида Хребтова', $this->object->genderAutoDetect().'-Аделаида Хребтова');
    }
    public function testGenDetect1896()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setSecondName('Худякова');
        $this->assertEquals('2-Светлана Худякова', $this->object->genderAutoDetect().'-Светлана Худякова');
    }
    public function testGenDetect1897()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setSecondName('Царицына');
        $this->assertEquals('2-Ольга Царицына', $this->object->genderAutoDetect().'-Ольга Царицына');
    }
    public function testGenDetect1898()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setSecondName('Цветаева');
        $this->assertEquals('2-Шарлотта Цветаева', $this->object->genderAutoDetect().'-Шарлотта Цветаева');
    }
    public function testGenDetect1899()
    {
        $this->object->setFirstName('Феба');
        $this->object->setSecondName('Цветкова');
        $this->assertEquals('2-Феба Цветкова', $this->object->genderAutoDetect().'-Феба Цветкова');
    }
    public function testGenDetect1900()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Циолковская');
        $this->assertEquals('2-Рада Циолковская', $this->object->genderAutoDetect().'-Рада Циолковская');
    }
    public function testGenDetect1901()
    {
        $this->object->setFirstName('Снежана');
        $this->object->setSecondName('Цитникова');
        $this->assertEquals('2-Снежана Цитникова', $this->object->genderAutoDetect().'-Снежана Цитникова');
    }
    public function testGenDetect1902()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setSecondName('Цуканова');
        $this->assertEquals('2-Екатерина Цуканова', $this->object->genderAutoDetect().'-Екатерина Цуканова');
    }
    public function testGenDetect1903()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setSecondName('Чадаева');
        $this->assertEquals('2-Антонина Чадаева', $this->object->genderAutoDetect().'-Антонина Чадаева');
    }
    public function testGenDetect1904()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Чадова');
        $this->assertEquals('2-Анисия Чадова', $this->object->genderAutoDetect().'-Анисия Чадова');
    }
    public function testGenDetect1905()
    {
        $this->object->setFirstName('Алла');
        $this->object->setSecondName('Чазова');
        $this->assertEquals('2-Алла Чазова', $this->object->genderAutoDetect().'-Алла Чазова');
    }
    public function testGenDetect1906()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Чалая');
        $this->assertEquals('2-Кристина Чалая', $this->object->genderAutoDetect().'-Кристина Чалая');
    }
    public function testGenDetect1907()
    {
        $this->object->setFirstName('Маша');
        $this->object->setSecondName('Чапаева');
        $this->assertEquals('2-Маша Чапаева', $this->object->genderAutoDetect().'-Маша Чапаева');
    }
    public function testGenDetect1908()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setSecondName('Чеботарёва');
        $this->assertEquals('2-Суламифь Чеботарёва', $this->object->genderAutoDetect().'-Суламифь Чеботарёва');
    }
    public function testGenDetect1909()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setSecondName('Чебыкина');
        $this->assertEquals('2-Кристина Чебыкина', $this->object->genderAutoDetect().'-Кристина Чебыкина');
    }
    public function testGenDetect1910()
    {
        $this->object->setFirstName('Анна');
        $this->object->setSecondName('Чежекова');
        $this->assertEquals('2-Анна Чежекова', $this->object->genderAutoDetect().'-Анна Чежекова');
    }
    public function testGenDetect1911()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setSecondName('Чекмарёв');
        $this->assertEquals('2-Анисия Чекмарёв', $this->object->genderAutoDetect().'-Анисия Чекмарёв');
    }
    public function testGenDetect1912()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setSecondName('Челомеева');
        $this->assertEquals('2-Варвара Челомеева', $this->object->genderAutoDetect().'-Варвара Челомеева');
    }
    public function testGenDetect1913()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Челомей');
        $this->assertEquals('2-Аурика Челомей', $this->object->genderAutoDetect().'-Аурика Челомей');
    }
    public function testGenDetect1914()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setSecondName('Челпанова');
        $this->assertEquals('2-Азиза Челпанова', $this->object->genderAutoDetect().'-Азиза Челпанова');
    }
    public function testGenDetect1915()
    {
        $this->object->setFirstName('Милена');
        $this->object->setSecondName('Чендева');
        $this->assertEquals('2-Милена Чендева', $this->object->genderAutoDetect().'-Милена Чендева');
    }
    public function testGenDetect1916()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Черенчикова');
        $this->assertEquals('2-Элеонора Черенчикова', $this->object->genderAutoDetect().'-Элеонора Черенчикова');
    }
    public function testGenDetect1917()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setSecondName('Черепанова');
        $this->assertEquals('2-Иуния Черепанова', $this->object->genderAutoDetect().'-Иуния Черепанова');
    }
    public function testGenDetect1918()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setSecondName('Черкашина');
        $this->assertEquals('2-Клотильда Черкашина', $this->object->genderAutoDetect().'-Клотильда Черкашина');
    }
    public function testGenDetect1919()
    {
        $this->object->setFirstName('Вера');
        $this->object->setSecondName('Чернова');
        $this->assertEquals('2-Вера Чернова', $this->object->genderAutoDetect().'-Вера Чернова');
    }
    public function testGenDetect1920()
    {
        $this->object->setFirstName('Беата');
        $this->object->setSecondName('Чернышёва');
        $this->assertEquals('2-Беата Чернышёва', $this->object->genderAutoDetect().'-Беата Чернышёва');
    }
    public function testGenDetect1921()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setSecondName('Чернакова');
        $this->assertEquals('2-Анисья Чернакова', $this->object->genderAutoDetect().'-Анисья Чернакова');
    }
    public function testGenDetect1922()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setSecondName('Черникова');
        $this->assertEquals('2-Мэри Черникова', $this->object->genderAutoDetect().'-Мэри Черникова');
    }
    public function testGenDetect1923()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Чеснокова');
        $this->assertEquals('2-Галина Чеснокова', $this->object->genderAutoDetect().'-Галина Чеснокова');
    }
    public function testGenDetect1924()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setSecondName('Чигракова');
        $this->assertEquals('2-Элеонора Чигракова', $this->object->genderAutoDetect().'-Элеонора Чигракова');
    }
    public function testGenDetect1925()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setSecondName('Чижикова');
        $this->assertEquals('2-Виолетта Чижикова', $this->object->genderAutoDetect().'-Виолетта Чижикова');
    }
    public function testGenDetect1926()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setSecondName('Чиркаш');
        $this->assertEquals('2-Евгения Чиркаш', $this->object->genderAutoDetect().'-Евгения Чиркаш');
    }
    public function testGenDetect1927()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Чистякова');
        $this->assertEquals('2-Прасковья Чистякова', $this->object->genderAutoDetect().'-Прасковья Чистякова');
    }
    public function testGenDetect1928()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setSecondName('Чичикова');
        $this->assertEquals('2-Юлия Чичикова', $this->object->genderAutoDetect().'-Юлия Чичикова');
    }
    public function testGenDetect1929()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setSecondName('Чичканова');
        $this->assertEquals('2-Виктория Чичканова', $this->object->genderAutoDetect().'-Виктория Чичканова');
    }
    public function testGenDetect1930()
    {
        $this->object->setFirstName('Милена');
        $this->object->setSecondName('Чкалова');
        $this->assertEquals('2-Милена Чкалова', $this->object->genderAutoDetect().'-Милена Чкалова');
    }
    public function testGenDetect1931()
    {
        $this->object->setFirstName('Полина');
        $this->object->setSecondName('Чмыхова');
        $this->assertEquals('2-Полина Чмыхова', $this->object->genderAutoDetect().'-Полина Чмыхова');
    }
    public function testGenDetect1932()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setSecondName('Чугунова');
        $this->assertEquals('2-Азиза Чугунова', $this->object->genderAutoDetect().'-Азиза Чугунова');
    }
    public function testGenDetect1933()
    {
        $this->object->setFirstName('Юния');
        $this->object->setSecondName('Чужинова');
        $this->assertEquals('2-Юния Чужинова', $this->object->genderAutoDetect().'-Юния Чужинова');
    }
    public function testGenDetect1934()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setSecondName('Чукчова');
        $this->assertEquals('2-Фатима Чукчова', $this->object->genderAutoDetect().'-Фатима Чукчова');
    }
    public function testGenDetect1935()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Чукреева');
        $this->assertEquals('2-Аурика Чукреева', $this->object->genderAutoDetect().'-Аурика Чукреева');
    }
    public function testGenDetect1936()
    {
        $this->object->setFirstName('Алина');
        $this->object->setSecondName('Чупова');
        $this->assertEquals('2-Алина Чупова', $this->object->genderAutoDetect().'-Алина Чупова');
    }
    public function testGenDetect1937()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setSecondName('Чуприна');
        $this->assertEquals('2-Изабелла Чуприна', $this->object->genderAutoDetect().'-Изабелла Чуприна');
    }
    public function testGenDetect1938()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setSecondName('Чупрова');
        $this->assertEquals('2-Стефания Чупрова', $this->object->genderAutoDetect().'-Стефания Чупрова');
    }
    public function testGenDetect1939()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setSecondName('Чучанова');
        $this->assertEquals('2-Феодора Чучанова', $this->object->genderAutoDetect().'-Феодора Чучанова');
    }
    public function testGenDetect1940()
    {
        $this->object->setFirstName('Фёкла');
        $this->object->setSecondName('Чучумашева');
        $this->assertEquals('2-Фёкла Чучумашева', $this->object->genderAutoDetect().'-Фёкла Чучумашева');
    }
    public function testGenDetect1941()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Шабунина');
        $this->assertEquals('2-Эми Шабунина', $this->object->genderAutoDetect().'-Эми Шабунина');
    }
    public function testGenDetect1942()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Шакмакова');
        $this->assertEquals('2-Аделаида Шакмакова', $this->object->genderAutoDetect().'-Аделаида Шакмакова');
    }
    public function testGenDetect1943()
    {
        $this->object->setFirstName('Анна');
        $this->object->setSecondName('Шаляпина');
        $this->assertEquals('2-Анна Шаляпина', $this->object->genderAutoDetect().'-Анна Шаляпина');
    }
    public function testGenDetect1944()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setSecondName('Шаповалова');
        $this->assertEquals('2-Аполлинария Шаповалова', $this->object->genderAutoDetect().'-Аполлинария Шаповалова');
    }
    public function testGenDetect1945()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Шапошникова');
        $this->assertEquals('2-Альбина Шапошникова', $this->object->genderAutoDetect().'-Альбина Шапошникова');
    }
    public function testGenDetect1946()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setSecondName('Шарапова');
        $this->assertEquals('2-Светлана Шарапова', $this->object->genderAutoDetect().'-Светлана Шарапова');
    }
    public function testGenDetect1947()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setSecondName('Шарова');
        $this->assertEquals('2-Анастасия Шарова', $this->object->genderAutoDetect().'-Анастасия Шарова');
    }
    public function testGenDetect1948()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Шаршина');
        $this->assertEquals('2-Леся Шаршина', $this->object->genderAutoDetect().'-Леся Шаршина');
    }
    public function testGenDetect1949()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setSecondName('Шашлова');
        $this->assertEquals('2-Виолетта Шашлова', $this->object->genderAutoDetect().'-Виолетта Шашлова');
    }
    public function testGenDetect1950()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setSecondName('Шведова');
        $this->assertEquals('2-Елизавета Шведова', $this->object->genderAutoDetect().'-Елизавета Шведова');
    }
    public function testGenDetect1951()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setSecondName('Шеваелёк');
        $this->assertEquals('2-Ревекка Шеваелёк', $this->object->genderAutoDetect().'-Ревекка Шеваелёк');
    }
    public function testGenDetect1952()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setSecondName('Шеломова');
        $this->assertEquals('2-Иоанна Шеломова', $this->object->genderAutoDetect().'-Иоанна Шеломова');
    }
    public function testGenDetect1953()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setSecondName('Шепкина');
        $this->assertEquals('2-Авдотья Шепкина', $this->object->genderAutoDetect().'-Авдотья Шепкина');
    }
    public function testGenDetect1954()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setSecondName('Шеповалова');
        $this->assertEquals('2-Аделаида Шеповалова', $this->object->genderAutoDetect().'-Аделаида Шеповалова');
    }
    public function testGenDetect1955()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setSecondName('Шереметьева');
        $this->assertEquals('2-Жанна Шереметьева', $this->object->genderAutoDetect().'-Жанна Шереметьева');
    }
    public function testGenDetect1956()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Шерстова');
        $this->assertEquals('2-Галина Шерстова', $this->object->genderAutoDetect().'-Галина Шерстова');
    }
    public function testGenDetect1957()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Шикалова');
        $this->assertEquals('2-Зинаида Шикалова', $this->object->genderAutoDetect().'-Зинаида Шикалова');
    }
    public function testGenDetect1958()
    {
        $this->object->setFirstName('Алёна');
        $this->object->setSecondName('Ширманова');
        $this->assertEquals('2-Алёна Ширманова', $this->object->genderAutoDetect().'-Алёна Ширманова');
    }
    public function testGenDetect1959()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setSecondName('Шихранова');
        $this->assertEquals('2-Виолетта Шихранова', $this->object->genderAutoDetect().'-Виолетта Шихранова');
    }
    public function testGenDetect1960()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setSecondName('Шишкина');
        $this->assertEquals('2-Надежда Шишкина', $this->object->genderAutoDetect().'-Надежда Шишкина');
    }
    public function testGenDetect1961()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setSecondName('Шишлова');
        $this->assertEquals('2-Раиса Шишлова', $this->object->genderAutoDetect().'-Раиса Шишлова');
    }
    public function testGenDetect1962()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Шишова');
        $this->assertEquals('2-Ярослава Шишова', $this->object->genderAutoDetect().'-Ярослава Шишова');
    }
    public function testGenDetect1963()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setSecondName('Шкуратова');
        $this->assertEquals('2-Олеся Шкуратова', $this->object->genderAutoDetect().'-Олеся Шкуратова');
    }
    public function testGenDetect1964()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setSecondName('Шлыкова');
        $this->assertEquals('2-Прасковья Шлыкова', $this->object->genderAutoDetect().'-Прасковья Шлыкова');
    }
    public function testGenDetect1965()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setSecondName('Шмакова');
        $this->assertEquals('2-Фатима Шмакова', $this->object->genderAutoDetect().'-Фатима Шмакова');
    }
    public function testGenDetect1966()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setSecondName('Шмелева');
        $this->assertEquals('2-Феодора Шмелева', $this->object->genderAutoDetect().'-Феодора Шмелева');
    }
    public function testGenDetect1967()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setSecondName('Шубина');
        $this->assertEquals('2-Степанида Шубина', $this->object->genderAutoDetect().'-Степанида Шубина');
    }
    public function testGenDetect1968()
    {
        $this->object->setFirstName('Галина');
        $this->object->setSecondName('Шубкина');
        $this->assertEquals('2-Галина Шубкина', $this->object->genderAutoDetect().'-Галина Шубкина');
    }
    public function testGenDetect1969()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setSecondName('Шувалова');
        $this->assertEquals('2-Павлина Шувалова', $this->object->genderAutoDetect().'-Павлина Шувалова');
    }
    public function testGenDetect1970()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setSecondName('Шуйская');
        $this->assertEquals('2-Павлина Шуйская', $this->object->genderAutoDetect().'-Павлина Шуйская');
    }
    public function testGenDetect1971()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setSecondName('Шукшина');
        $this->assertEquals('2-Аурика Шукшина', $this->object->genderAutoDetect().'-Аурика Шукшина');
    }
    public function testGenDetect1972()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setSecondName('Шулёва');
        $this->assertEquals('2-Оксана Шулёва', $this->object->genderAutoDetect().'-Оксана Шулёва');
    }
    public function testGenDetect1973()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setSecondName('Шульдешова');
        $this->assertEquals('2-Ревекка Шульдешова', $this->object->genderAutoDetect().'-Ревекка Шульдешова');
    }
    public function testGenDetect1974()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Шульга');
        $this->assertEquals('2-Елена Шульга', $this->object->genderAutoDetect().'-Елена Шульга');
    }
    public function testGenDetect1975()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setSecondName('Шульгина');
        $this->assertEquals('2-Ульрика Шульгина', $this->object->genderAutoDetect().'-Ульрика Шульгина');
    }
    public function testGenDetect1976()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setSecondName('Шурупова');
        $this->assertEquals('2-Ульяна Шурупова', $this->object->genderAutoDetect().'-Ульяна Шурупова');
    }
    public function testGenDetect1977()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setSecondName('Шушалева');
        $this->assertEquals('2-Анисья Шушалева', $this->object->genderAutoDetect().'-Анисья Шушалева');
    }
    public function testGenDetect1978()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setSecondName('Шурша');
        $this->assertEquals('2-Юлия Шурша', $this->object->genderAutoDetect().'-Юлия Шурша');
    }
    public function testGenDetect1979()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setSecondName('Щавельская');
        $this->assertEquals('2-Иляна Щавельская', $this->object->genderAutoDetect().'-Иляна Щавельская');
    }
    public function testGenDetect1980()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setSecondName('Щегельская');
        $this->assertEquals('2-Иоанна Щегельская', $this->object->genderAutoDetect().'-Иоанна Щегельская');
    }
    public function testGenDetect1981()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setSecondName('Щеглова');
        $this->assertEquals('2-Екатерина Щеглова', $this->object->genderAutoDetect().'-Екатерина Щеглова');
    }
    public function testGenDetect1982()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setSecondName('Щеголева');
        $this->assertEquals('2-Анушка Щеголева', $this->object->genderAutoDetect().'-Анушка Щеголева');
    }
    public function testGenDetect1983()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Щеголихина');
        $this->assertEquals('2-Татьяна Щеголихина', $this->object->genderAutoDetect().'-Татьяна Щеголихина');
    }
    public function testGenDetect1984()
    {
        $this->object->setFirstName('Елена');
        $this->object->setSecondName('Щедрина');
        $this->assertEquals('2-Елена Щедрина', $this->object->genderAutoDetect().'-Елена Щедрина');
    }
    public function testGenDetect1985()
    {
        $this->object->setFirstName('Беата');
        $this->object->setSecondName('Щедрова');
        $this->assertEquals('2-Беата Щедрова', $this->object->genderAutoDetect().'-Беата Щедрова');
    }
    public function testGenDetect1986()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Щекочихина');
        $this->assertEquals('2-Божена Щекочихина', $this->object->genderAutoDetect().'-Божена Щекочихина');
    }
    public function testGenDetect1987()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setSecondName('Щепкина');
        $this->assertEquals('2-Наталия Щепкина', $this->object->genderAutoDetect().'-Наталия Щепкина');
    }
    public function testGenDetect1988()
    {
        $this->object->setFirstName('Марина');
        $this->object->setSecondName('Щербакова');
        $this->assertEquals('2-Марина Щербакова', $this->object->genderAutoDetect().'-Марина Щербакова');
    }
    public function testGenDetect1989()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setSecondName('Щербатых');
        $this->assertEquals('2-Евдокия Щербатых', $this->object->genderAutoDetect().'-Евдокия Щербатых');
    }
    public function testGenDetect1990()
    {
        $this->object->setFirstName('Фёкла');
        $this->object->setSecondName('Щербина');
        $this->assertEquals('2-Фёкла Щербина', $this->object->genderAutoDetect().'-Фёкла Щербина');
    }
    public function testGenDetect1991()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setSecondName('Щетинаина');
        $this->assertEquals('2-Василиса Щетинаина', $this->object->genderAutoDetect().'-Василиса Щетинаина');
    }
    public function testGenDetect1992()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Щеткина');
        $this->assertEquals('2-Алиса Щеткина', $this->object->genderAutoDetect().'-Алиса Щеткина');
    }
    public function testGenDetect1993()
    {
        $this->object->setFirstName('Фёкла');
        $this->object->setSecondName('Щукина');
        $this->assertEquals('2-Фёкла Щукина', $this->object->genderAutoDetect().'-Фёкла Щукина');
    }
    public function testGenDetect1994()
    {
        $this->object->setFirstName('Шона');
        $this->object->setSecondName('Энтина');
        $this->assertEquals('2-Шона Энтина', $this->object->genderAutoDetect().'-Шона Энтина');
    }
    public function testGenDetect1995()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setSecondName('Эсце');
        $this->assertEquals('2-Стефания Эсце', $this->object->genderAutoDetect().'-Стефания Эсце');
    }
    public function testGenDetect1996()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Ювелева');
        $this->assertEquals('2-Стелла Ювелева', $this->object->genderAutoDetect().'-Стелла Ювелева');
    }
    public function testGenDetect1997()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setSecondName('Юганцева');
        $this->assertEquals('2-Татьяна Юганцева', $this->object->genderAutoDetect().'-Татьяна Юганцева');
    }
    public function testGenDetect1998()
    {
        $this->object->setFirstName('Милена');
        $this->object->setSecondName('Югова');
        $this->assertEquals('2-Милена Югова', $this->object->genderAutoDetect().'-Милена Югова');
    }
    public function testGenDetect1999()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Юдашкина');
        $this->assertEquals('2-Алиса Юдашкина', $this->object->genderAutoDetect().'-Алиса Юдашкина');
    }
    public function testGenDetect2000()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setSecondName('Юдина');
        $this->assertEquals('2-Любовь Юдина', $this->object->genderAutoDetect().'-Любовь Юдина');
    }
    public function testGenDetect2001()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setSecondName('Юнкина');
        $this->assertEquals('2-Евфросиния Юнкина', $this->object->genderAutoDetect().'-Евфросиния Юнкина');
    }
    public function testGenDetect2002()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setSecondName('Юрнаева');
        $this->assertEquals('2-Геннадия Юрнаева', $this->object->genderAutoDetect().'-Геннадия Юрнаева');
    }
    public function testGenDetect2003()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setSecondName('Юрьева');
        $this->assertEquals('2-Василиса Юрьева', $this->object->genderAutoDetect().'-Василиса Юрьева');
    }
    public function testGenDetect2004()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Юсупова');
        $this->assertEquals('2-Альбина Юсупова', $this->object->genderAutoDetect().'-Альбина Юсупова');
    }
    public function testGenDetect2005()
    {
        $this->object->setFirstName('Нина');
        $this->object->setSecondName('Юферева');
        $this->assertEquals('2-Нина Юферева', $this->object->genderAutoDetect().'-Нина Юферева');
    }
    public function testGenDetect2006()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setSecondName('Якимова');
        $this->assertEquals('2-Альбина Якимова', $this->object->genderAutoDetect().'-Альбина Якимова');
    }
    public function testGenDetect2007()
    {
        $this->object->setFirstName('Эми');
        $this->object->setSecondName('Яковалева');
        $this->assertEquals('2-Эми Яковалева', $this->object->genderAutoDetect().'-Эми Яковалева');
    }
    public function testGenDetect2008()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Якубова');
        $this->assertEquals('2-Стелла Якубова', $this->object->genderAutoDetect().'-Стелла Якубова');
    }
    public function testGenDetect2009()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setSecondName('Якубоваич');
        $this->assertEquals('2-Алиса Якубоваич', $this->object->genderAutoDetect().'-Алиса Якубоваич');
    }
    public function testGenDetect2010()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setSecondName('Якушева');
        $this->assertEquals('2-Зинаида Якушева', $this->object->genderAutoDetect().'-Зинаида Якушева');
    }
    public function testGenDetect2011()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Янаева');
        $this->assertEquals('2-Божена Янаева', $this->object->genderAutoDetect().'-Божена Янаева');
    }
    public function testGenDetect2012()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setSecondName('Янкова');
        $this->assertEquals('2-Иуния Янкова', $this->object->genderAutoDetect().'-Иуния Янкова');
    }
    public function testGenDetect2013()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Янковаская');
        $this->assertEquals('2-Леся Янковаская', $this->object->genderAutoDetect().'-Леся Янковаская');
    }
    public function testGenDetect2014()
    {
        $this->object->setFirstName('Александра');
        $this->object->setSecondName('Ярмольник');
        $this->assertEquals('2-Александра Ярмольник', $this->object->genderAutoDetect().'-Александра Ярмольник');
    }
    public function testGenDetect2015()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setSecondName('Яромеева');
        $this->assertEquals('2-Стелла Яромеева', $this->object->genderAutoDetect().'-Стелла Яромеева');
    }
    public function testGenDetect2016()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setSecondName('Ярцева');
        $this->assertEquals('2-Розалия Ярцева', $this->object->genderAutoDetect().'-Розалия Ярцева');
    }
    public function testGenDetect2017()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setSecondName('Ясенева');
        $this->assertEquals('2-Глафира Ясенева', $this->object->genderAutoDetect().'-Глафира Ясенева');
    }
    public function testGenDetect2018()
    {
        $this->object->setFirstName('Карина');
        $this->object->setSecondName('Яснеева');
        $this->assertEquals('2-Карина Яснеева', $this->object->genderAutoDetect().'-Карина Яснеева');
    }
    public function testGenDetect2019()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setSecondName('Яшина');
        $this->assertEquals('2-Елизавета Яшина', $this->object->genderAutoDetect().'-Елизавета Яшина');
    }

}