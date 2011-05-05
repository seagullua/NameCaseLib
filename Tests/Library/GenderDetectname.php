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
        $this->assertEquals('1-Авдей', $this->object->genderAutoDetect().'-Авдей');
    }
    public function testGenDetect1()
    {
        $this->object->setFirstName('Аверьян');
        $this->assertEquals('1-Аверьян', $this->object->genderAutoDetect().'-Аверьян');
    }
    public function testGenDetect2()
    {
        $this->object->setFirstName('Адам');
        $this->assertEquals('1-Адам', $this->object->genderAutoDetect().'-Адам');
    }
    public function testGenDetect3()
    {
        $this->object->setFirstName('Адриан');
        $this->assertEquals('1-Адриан', $this->object->genderAutoDetect().'-Адриан');
    }
    public function testGenDetect4()
    {
        $this->object->setFirstName('Аксён');
        $this->assertEquals('1-Аксён', $this->object->genderAutoDetect().'-Аксён');
    }
    public function testGenDetect5()
    {
        $this->object->setFirstName('Александр');
        $this->assertEquals('1-Александр', $this->object->genderAutoDetect().'-Александр');
    }
    public function testGenDetect6()
    {
        $this->object->setFirstName('Алексей');
        $this->assertEquals('1-Алексей', $this->object->genderAutoDetect().'-Алексей');
    }
    public function testGenDetect7()
    {
        $this->object->setFirstName('Анатолий');
        $this->assertEquals('1-Анатолий', $this->object->genderAutoDetect().'-Анатолий');
    }
    public function testGenDetect8()
    {
        $this->object->setFirstName('Аркадий');
        $this->assertEquals('1-Аркадий', $this->object->genderAutoDetect().'-Аркадий');
    }
    public function testGenDetect9()
    {
        $this->object->setFirstName('Арсен');
        $this->assertEquals('1-Арсен', $this->object->genderAutoDetect().'-Арсен');
    }
    public function testGenDetect10()
    {
        $this->object->setFirstName('Арсений');
        $this->assertEquals('1-Арсений', $this->object->genderAutoDetect().'-Арсений');
    }
    public function testGenDetect11()
    {
        $this->object->setFirstName('Артём');
        $this->assertEquals('1-Артём', $this->object->genderAutoDetect().'-Артём');
    }
    public function testGenDetect12()
    {
        $this->object->setFirstName('Артемий');
        $this->assertEquals('1-Артемий', $this->object->genderAutoDetect().'-Артемий');
    }
    public function testGenDetect13()
    {
        $this->object->setFirstName('Артур');
        $this->assertEquals('1-Артур', $this->object->genderAutoDetect().'-Артур');
    }
    public function testGenDetect14()
    {
        $this->object->setFirstName('Архип');
        $this->assertEquals('1-Архип', $this->object->genderAutoDetect().'-Архип');
    }
    public function testGenDetect15()
    {
        $this->object->setFirstName('Афанас');
        $this->assertEquals('1-Афанас', $this->object->genderAutoDetect().'-Афанас');
    }
    public function testGenDetect16()
    {
        $this->object->setFirstName('Афанасий');
        $this->assertEquals('1-Афанасий', $this->object->genderAutoDetect().'-Афанасий');
    }
    public function testGenDetect17()
    {
        $this->object->setFirstName('Андрей');
        $this->assertEquals('1-Андрей', $this->object->genderAutoDetect().'-Андрей');
    }
    public function testGenDetect18()
    {
        $this->object->setFirstName('Анисим');
        $this->assertEquals('1-Анисим', $this->object->genderAutoDetect().'-Анисим');
    }
    public function testGenDetect19()
    {
        $this->object->setFirstName('Антип');
        $this->assertEquals('1-Антип', $this->object->genderAutoDetect().'-Антип');
    }
    public function testGenDetect20()
    {
        $this->object->setFirstName('Антон');
        $this->assertEquals('1-Антон', $this->object->genderAutoDetect().'-Антон');
    }
    public function testGenDetect21()
    {
        $this->object->setFirstName('Ануфрий');
        $this->assertEquals('1-Ануфрий', $this->object->genderAutoDetect().'-Ануфрий');
    }
    public function testGenDetect22()
    {
        $this->object->setFirstName('Бенедикт');
        $this->assertEquals('1-Бенедикт', $this->object->genderAutoDetect().'-Бенедикт');
    }
    public function testGenDetect23()
    {
        $this->object->setFirstName('Богдан');
        $this->assertEquals('1-Богдан', $this->object->genderAutoDetect().'-Богдан');
    }
    public function testGenDetect24()
    {
        $this->object->setFirstName('Борис');
        $this->assertEquals('1-Борис', $this->object->genderAutoDetect().'-Борис');
    }
    public function testGenDetect25()
    {
        $this->object->setFirstName('Борислав');
        $this->assertEquals('1-Борислав', $this->object->genderAutoDetect().'-Борислав');
    }
    public function testGenDetect26()
    {
        $this->object->setFirstName('Бронислав');
        $this->assertEquals('1-Бронислав', $this->object->genderAutoDetect().'-Бронислав');
    }
    public function testGenDetect27()
    {
        $this->object->setFirstName('Вадим');
        $this->assertEquals('1-Вадим', $this->object->genderAutoDetect().'-Вадим');
    }
    public function testGenDetect28()
    {
        $this->object->setFirstName('Валентин');
        $this->assertEquals('1-Валентин', $this->object->genderAutoDetect().'-Валентин');
    }
    public function testGenDetect29()
    {
        $this->object->setFirstName('Валерий');
        $this->assertEquals('1-Валерий', $this->object->genderAutoDetect().'-Валерий');
    }
    public function testGenDetect30()
    {
        $this->object->setFirstName('Валериан');
        $this->assertEquals('1-Валериан', $this->object->genderAutoDetect().'-Валериан');
    }
    public function testGenDetect31()
    {
        $this->object->setFirstName('Валерьян');
        $this->assertEquals('1-Валерьян', $this->object->genderAutoDetect().'-Валерьян');
    }
    public function testGenDetect32()
    {
        $this->object->setFirstName('Василий');
        $this->assertEquals('1-Василий', $this->object->genderAutoDetect().'-Василий');
    }
    public function testGenDetect33()
    {
        $this->object->setFirstName('Венедикт');
        $this->assertEquals('1-Венедикт', $this->object->genderAutoDetect().'-Венедикт');
    }
    public function testGenDetect34()
    {
        $this->object->setFirstName('Викентий');
        $this->assertEquals('1-Викентий', $this->object->genderAutoDetect().'-Викентий');
    }
    public function testGenDetect35()
    {
        $this->object->setFirstName('Виктор');
        $this->assertEquals('1-Виктор', $this->object->genderAutoDetect().'-Виктор');
    }
    public function testGenDetect36()
    {
        $this->object->setFirstName('Вилен');
        $this->assertEquals('1-Вилен', $this->object->genderAutoDetect().'-Вилен');
    }
    public function testGenDetect37()
    {
        $this->object->setFirstName('Вилор');
        $this->assertEquals('1-Вилор', $this->object->genderAutoDetect().'-Вилор');
    }
    public function testGenDetect38()
    {
        $this->object->setFirstName('Виталий');
        $this->assertEquals('1-Виталий', $this->object->genderAutoDetect().'-Виталий');
    }
    public function testGenDetect39()
    {
        $this->object->setFirstName('Владилен');
        $this->assertEquals('1-Владилен', $this->object->genderAutoDetect().'-Владилен');
    }
    public function testGenDetect40()
    {
        $this->object->setFirstName('Владимир');
        $this->assertEquals('1-Владимир', $this->object->genderAutoDetect().'-Владимир');
    }
    public function testGenDetect41()
    {
        $this->object->setFirstName('Владислав');
        $this->assertEquals('1-Владислав', $this->object->genderAutoDetect().'-Владислав');
    }
    public function testGenDetect42()
    {
        $this->object->setFirstName('Владлен');
        $this->assertEquals('1-Владлен', $this->object->genderAutoDetect().'-Владлен');
    }
    public function testGenDetect43()
    {
        $this->object->setFirstName('Влас');
        $this->assertEquals('1-Влас', $this->object->genderAutoDetect().'-Влас');
    }
    public function testGenDetect44()
    {
        $this->object->setFirstName('Всеволод');
        $this->assertEquals('1-Всеволод', $this->object->genderAutoDetect().'-Всеволод');
    }
    public function testGenDetect45()
    {
        $this->object->setFirstName('Вячеслав');
        $this->assertEquals('1-Вячеслав', $this->object->genderAutoDetect().'-Вячеслав');
    }
    public function testGenDetect46()
    {
        $this->object->setFirstName('Гавриил');
        $this->assertEquals('1-Гавриил', $this->object->genderAutoDetect().'-Гавриил');
    }
    public function testGenDetect47()
    {
        $this->object->setFirstName('Гаврила');
        $this->assertEquals('1-Гаврила', $this->object->genderAutoDetect().'-Гаврила');
    }
    public function testGenDetect48()
    {
        $this->object->setFirstName('Геннадий');
        $this->assertEquals('1-Геннадий', $this->object->genderAutoDetect().'-Геннадий');
    }
    public function testGenDetect49()
    {
        $this->object->setFirstName('Георгий');
        $this->assertEquals('1-Георгий', $this->object->genderAutoDetect().'-Георгий');
    }
    public function testGenDetect50()
    {
        $this->object->setFirstName('Герасим');
        $this->assertEquals('1-Герасим', $this->object->genderAutoDetect().'-Герасим');
    }
    public function testGenDetect51()
    {
        $this->object->setFirstName('Герман');
        $this->assertEquals('1-Герман', $this->object->genderAutoDetect().'-Герман');
    }
    public function testGenDetect52()
    {
        $this->object->setFirstName('Гертруд');
        $this->assertEquals('1-Гертруд', $this->object->genderAutoDetect().'-Гертруд');
    }
    public function testGenDetect53()
    {
        $this->object->setFirstName('Глеб');
        $this->assertEquals('1-Глеб', $this->object->genderAutoDetect().'-Глеб');
    }
    public function testGenDetect54()
    {
        $this->object->setFirstName('Гордей');
        $this->assertEquals('1-Гордей', $this->object->genderAutoDetect().'-Гордей');
    }
    public function testGenDetect55()
    {
        $this->object->setFirstName('Григорий');
        $this->assertEquals('1-Григорий', $this->object->genderAutoDetect().'-Григорий');
    }
    public function testGenDetect56()
    {
        $this->object->setFirstName('Гурий');
        $this->assertEquals('1-Гурий', $this->object->genderAutoDetect().'-Гурий');
    }
    public function testGenDetect57()
    {
        $this->object->setFirstName('Давид');
        $this->assertEquals('1-Давид', $this->object->genderAutoDetect().'-Давид');
    }
    public function testGenDetect58()
    {
        $this->object->setFirstName('Давыд');
        $this->assertEquals('1-Давыд', $this->object->genderAutoDetect().'-Давыд');
    }
    public function testGenDetect59()
    {
        $this->object->setFirstName('Даниил');
        $this->assertEquals('1-Даниил', $this->object->genderAutoDetect().'-Даниил');
    }
    public function testGenDetect60()
    {
        $this->object->setFirstName('Данила');
        $this->assertEquals('1-Данила', $this->object->genderAutoDetect().'-Данила');
    }
    public function testGenDetect61()
    {
        $this->object->setFirstName('Демид');
        $this->assertEquals('1-Демид', $this->object->genderAutoDetect().'-Демид');
    }
    public function testGenDetect62()
    {
        $this->object->setFirstName('Демьян');
        $this->assertEquals('1-Демьян', $this->object->genderAutoDetect().'-Демьян');
    }
    public function testGenDetect63()
    {
        $this->object->setFirstName('Денис');
        $this->assertEquals('1-Денис', $this->object->genderAutoDetect().'-Денис');
    }
    public function testGenDetect64()
    {
        $this->object->setFirstName('Димитрий');
        $this->assertEquals('1-Димитрий', $this->object->genderAutoDetect().'-Димитрий');
    }
    public function testGenDetect65()
    {
        $this->object->setFirstName('Дмитрий');
        $this->assertEquals('1-Дмитрий', $this->object->genderAutoDetect().'-Дмитрий');
    }
    public function testGenDetect66()
    {
        $this->object->setFirstName('Дорофей');
        $this->assertEquals('1-Дорофей', $this->object->genderAutoDetect().'-Дорофей');
    }
    public function testGenDetect67()
    {
        $this->object->setFirstName('Евгений');
        $this->assertEquals('1-Евгений', $this->object->genderAutoDetect().'-Евгений');
    }
    public function testGenDetect68()
    {
        $this->object->setFirstName('Евдоким');
        $this->assertEquals('1-Евдоким', $this->object->genderAutoDetect().'-Евдоким');
    }
    public function testGenDetect69()
    {
        $this->object->setFirstName('Евсей');
        $this->assertEquals('1-Евсей', $this->object->genderAutoDetect().'-Евсей');
    }
    public function testGenDetect70()
    {
        $this->object->setFirstName('Евдоким');
        $this->assertEquals('1-Евдоким', $this->object->genderAutoDetect().'-Евдоким');
    }
    public function testGenDetect71()
    {
        $this->object->setFirstName('Евстафий');
        $this->assertEquals('1-Евстафий', $this->object->genderAutoDetect().'-Евстафий');
    }
    public function testGenDetect72()
    {
        $this->object->setFirstName('Евстигней');
        $this->assertEquals('1-Евстигней', $this->object->genderAutoDetect().'-Евстигней');
    }
    public function testGenDetect73()
    {
        $this->object->setFirstName('Егор');
        $this->assertEquals('1-Егор', $this->object->genderAutoDetect().'-Егор');
    }
    public function testGenDetect74()
    {
        $this->object->setFirstName('Елизар');
        $this->assertEquals('1-Елизар', $this->object->genderAutoDetect().'-Елизар');
    }
    public function testGenDetect75()
    {
        $this->object->setFirstName('Елисей');
        $this->assertEquals('1-Елисей', $this->object->genderAutoDetect().'-Елисей');
    }
    public function testGenDetect76()
    {
        $this->object->setFirstName('Емельян');
        $this->assertEquals('1-Емельян', $this->object->genderAutoDetect().'-Емельян');
    }
    public function testGenDetect77()
    {
        $this->object->setFirstName('Еремей');
        $this->assertEquals('1-Еремей', $this->object->genderAutoDetect().'-Еремей');
    }
    public function testGenDetect78()
    {
        $this->object->setFirstName('Ермил');
        $this->assertEquals('1-Ермил', $this->object->genderAutoDetect().'-Ермил');
    }
    public function testGenDetect79()
    {
        $this->object->setFirstName('Ермолай');
        $this->assertEquals('1-Ермолай', $this->object->genderAutoDetect().'-Ермолай');
    }
    public function testGenDetect80()
    {
        $this->object->setFirstName('Ерофей');
        $this->assertEquals('1-Ерофей', $this->object->genderAutoDetect().'-Ерофей');
    }
    public function testGenDetect81()
    {
        $this->object->setFirstName('Ефим');
        $this->assertEquals('1-Ефим', $this->object->genderAutoDetect().'-Ефим');
    }
    public function testGenDetect82()
    {
        $this->object->setFirstName('Ефимий');
        $this->assertEquals('1-Ефимий', $this->object->genderAutoDetect().'-Ефимий');
    }
    public function testGenDetect83()
    {
        $this->object->setFirstName('Ефрем');
        $this->assertEquals('1-Ефрем', $this->object->genderAutoDetect().'-Ефрем');
    }
    public function testGenDetect84()
    {
        $this->object->setFirstName('Жан');
        $this->assertEquals('1-Жан', $this->object->genderAutoDetect().'-Жан');
    }
    public function testGenDetect85()
    {
        $this->object->setFirstName('Захар');
        $this->assertEquals('1-Захар', $this->object->genderAutoDetect().'-Захар');
    }
    public function testGenDetect86()
    {
        $this->object->setFirstName('Захарий');
        $this->assertEquals('1-Захарий', $this->object->genderAutoDetect().'-Захарий');
    }
    public function testGenDetect87()
    {
        $this->object->setFirstName('Зиновий');
        $this->assertEquals('1-Зиновий', $this->object->genderAutoDetect().'-Зиновий');
    }
    public function testGenDetect88()
    {
        $this->object->setFirstName('Иван');
        $this->assertEquals('1-Иван', $this->object->genderAutoDetect().'-Иван');
    }
    public function testGenDetect89()
    {
        $this->object->setFirstName('Игнат');
        $this->assertEquals('1-Игнат', $this->object->genderAutoDetect().'-Игнат');
    }
    public function testGenDetect90()
    {
        $this->object->setFirstName('Игнатий');
        $this->assertEquals('1-Игнатий', $this->object->genderAutoDetect().'-Игнатий');
    }
    public function testGenDetect91()
    {
        $this->object->setFirstName('Игорь');
        $this->assertEquals('1-Игорь', $this->object->genderAutoDetect().'-Игорь');
    }
    public function testGenDetect92()
    {
        $this->object->setFirstName('Измаил');
        $this->assertEquals('1-Измаил', $this->object->genderAutoDetect().'-Измаил');
    }
    public function testGenDetect93()
    {
        $this->object->setFirstName('Изот');
        $this->assertEquals('1-Изот', $this->object->genderAutoDetect().'-Изот');
    }
    public function testGenDetect94()
    {
        $this->object->setFirstName('Иларион');
        $this->assertEquals('1-Иларион', $this->object->genderAutoDetect().'-Иларион');
    }
    public function testGenDetect95()
    {
        $this->object->setFirstName('Илья');
        $this->assertEquals('1-Илья', $this->object->genderAutoDetect().'-Илья');
    }
    public function testGenDetect96()
    {
        $this->object->setFirstName('Ильяс');
        $this->assertEquals('1-Ильяс', $this->object->genderAutoDetect().'-Ильяс');
    }
    public function testGenDetect97()
    {
        $this->object->setFirstName('Иосип');
        $this->assertEquals('1-Иосип', $this->object->genderAutoDetect().'-Иосип');
    }
    public function testGenDetect98()
    {
        $this->object->setFirstName('Иосиф');
        $this->assertEquals('1-Иосиф', $this->object->genderAutoDetect().'-Иосиф');
    }
    public function testGenDetect99()
    {
        $this->object->setFirstName('Исаак');
        $this->assertEquals('1-Исаак', $this->object->genderAutoDetect().'-Исаак');
    }
    public function testGenDetect100()
    {
        $this->object->setFirstName('Исак');
        $this->assertEquals('1-Исак', $this->object->genderAutoDetect().'-Исак');
    }
    public function testGenDetect101()
    {
        $this->object->setFirstName('Исидор');
        $this->assertEquals('1-Исидор', $this->object->genderAutoDetect().'-Исидор');
    }
    public function testGenDetect102()
    {
        $this->object->setFirstName('Искандер');
        $this->assertEquals('1-Искандер', $this->object->genderAutoDetect().'-Искандер');
    }
    public function testGenDetect103()
    {
        $this->object->setFirstName('Казимир');
        $this->assertEquals('1-Казимир', $this->object->genderAutoDetect().'-Казимир');
    }
    public function testGenDetect104()
    {
        $this->object->setFirstName('Калина');
        $this->assertEquals('1-Калина', $this->object->genderAutoDetect().'-Калина');
    }
    public function testGenDetect105()
    {
        $this->object->setFirstName('Каллиник');
        $this->assertEquals('1-Каллиник', $this->object->genderAutoDetect().'-Каллиник');
    }
    public function testGenDetect106()
    {
        $this->object->setFirstName('Каллистрат');
        $this->assertEquals('1-Каллистрат', $this->object->genderAutoDetect().'-Каллистрат');
    }
    public function testGenDetect107()
    {
        $this->object->setFirstName('Капитон');
        $this->assertEquals('1-Капитон', $this->object->genderAutoDetect().'-Капитон');
    }
    public function testGenDetect108()
    {
        $this->object->setFirstName('Карп');
        $this->assertEquals('1-Карп', $this->object->genderAutoDetect().'-Карп');
    }
    public function testGenDetect109()
    {
        $this->object->setFirstName('Касьян');
        $this->assertEquals('1-Касьян', $this->object->genderAutoDetect().'-Касьян');
    }
    public function testGenDetect110()
    {
        $this->object->setFirstName('Кирей');
        $this->assertEquals('1-Кирей', $this->object->genderAutoDetect().'-Кирей');
    }
    public function testGenDetect111()
    {
        $this->object->setFirstName('Кирила');
        $this->assertEquals('1-Кирила', $this->object->genderAutoDetect().'-Кирила');
    }
    public function testGenDetect112()
    {
        $this->object->setFirstName('Кирилл');
        $this->assertEquals('1-Кирилл', $this->object->genderAutoDetect().'-Кирилл');
    }
    public function testGenDetect113()
    {
        $this->object->setFirstName('Клим');
        $this->assertEquals('1-Клим', $this->object->genderAutoDetect().'-Клим');
    }
    public function testGenDetect114()
    {
        $this->object->setFirstName('Климент');
        $this->assertEquals('1-Климент', $this->object->genderAutoDetect().'-Климент');
    }
    public function testGenDetect115()
    {
        $this->object->setFirstName('Климентий');
        $this->assertEquals('1-Климентий', $this->object->genderAutoDetect().'-Климентий');
    }
    public function testGenDetect116()
    {
        $this->object->setFirstName('Кондрат');
        $this->assertEquals('1-Кондрат', $this->object->genderAutoDetect().'-Кондрат');
    }
    public function testGenDetect117()
    {
        $this->object->setFirstName('Кондратий');
        $this->assertEquals('1-Кондратий', $this->object->genderAutoDetect().'-Кондратий');
    }
    public function testGenDetect118()
    {
        $this->object->setFirstName('Конон');
        $this->assertEquals('1-Конон', $this->object->genderAutoDetect().'-Конон');
    }
    public function testGenDetect119()
    {
        $this->object->setFirstName('Константин');
        $this->assertEquals('1-Константин', $this->object->genderAutoDetect().'-Константин');
    }
    public function testGenDetect120()
    {
        $this->object->setFirstName('Корней');
        $this->assertEquals('1-Корней', $this->object->genderAutoDetect().'-Корней');
    }
    public function testGenDetect121()
    {
        $this->object->setFirstName('Корнелий');
        $this->assertEquals('1-Корнелий', $this->object->genderAutoDetect().'-Корнелий');
    }
    public function testGenDetect122()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->assertEquals('1-Ксенофонт', $this->object->genderAutoDetect().'-Ксенофонт');
    }
    public function testGenDetect123()
    {
        $this->object->setFirstName('Кузьма');
        $this->assertEquals('1-Кузьма', $this->object->genderAutoDetect().'-Кузьма');
    }
    public function testGenDetect124()
    {
        $this->object->setFirstName('Куприян');
        $this->assertEquals('1-Куприян', $this->object->genderAutoDetect().'-Куприян');
    }
    public function testGenDetect125()
    {
        $this->object->setFirstName('Лаврентий');
        $this->assertEquals('1-Лаврентий', $this->object->genderAutoDetect().'-Лаврентий');
    }
    public function testGenDetect126()
    {
        $this->object->setFirstName('Лазарь');
        $this->assertEquals('1-Лазарь', $this->object->genderAutoDetect().'-Лазарь');
    }
    public function testGenDetect127()
    {
        $this->object->setFirstName('Лев');
        $this->assertEquals('1-Лев', $this->object->genderAutoDetect().'-Лев');
    }
    public function testGenDetect128()
    {
        $this->object->setFirstName('Левон');
        $this->assertEquals('1-Левон', $this->object->genderAutoDetect().'-Левон');
    }
    public function testGenDetect129()
    {
        $this->object->setFirstName('Леонид');
        $this->assertEquals('1-Леонид', $this->object->genderAutoDetect().'-Леонид');
    }
    public function testGenDetect130()
    {
        $this->object->setFirstName('Леон');
        $this->assertEquals('1-Леон', $this->object->genderAutoDetect().'-Леон');
    }
    public function testGenDetect131()
    {
        $this->object->setFirstName('Леонтий');
        $this->assertEquals('1-Леонтий', $this->object->genderAutoDetect().'-Леонтий');
    }
    public function testGenDetect132()
    {
        $this->object->setFirstName('Лука');
        $this->assertEquals('1-Лука', $this->object->genderAutoDetect().'-Лука');
    }
    public function testGenDetect133()
    {
        $this->object->setFirstName('Лукьян');
        $this->assertEquals('1-Лукьян', $this->object->genderAutoDetect().'-Лукьян');
    }
    public function testGenDetect134()
    {
        $this->object->setFirstName('Людвиг');
        $this->assertEquals('1-Людвиг', $this->object->genderAutoDetect().'-Людвиг');
    }
    public function testGenDetect135()
    {
        $this->object->setFirstName('Макар');
        $this->assertEquals('1-Макар', $this->object->genderAutoDetect().'-Макар');
    }
    public function testGenDetect136()
    {
        $this->object->setFirstName('Максим');
        $this->assertEquals('1-Максим', $this->object->genderAutoDetect().'-Максим');
    }
    public function testGenDetect137()
    {
        $this->object->setFirstName('Марат');
        $this->assertEquals('1-Марат', $this->object->genderAutoDetect().'-Марат');
    }
    public function testGenDetect138()
    {
        $this->object->setFirstName('Марк');
        $this->assertEquals('1-Марк', $this->object->genderAutoDetect().'-Марк');
    }
    public function testGenDetect139()
    {
        $this->object->setFirstName('Маркел');
        $this->assertEquals('1-Маркел', $this->object->genderAutoDetect().'-Маркел');
    }
    public function testGenDetect140()
    {
        $this->object->setFirstName('Мартин');
        $this->assertEquals('1-Мартин', $this->object->genderAutoDetect().'-Мартин');
    }
    public function testGenDetect141()
    {
        $this->object->setFirstName('Мартын');
        $this->assertEquals('1-Мартын', $this->object->genderAutoDetect().'-Мартын');
    }
    public function testGenDetect142()
    {
        $this->object->setFirstName('Мефодий');
        $this->assertEquals('1-Мефодий', $this->object->genderAutoDetect().'-Мефодий');
    }
    public function testGenDetect143()
    {
        $this->object->setFirstName('Мина');
        $this->assertEquals('1-Мина', $this->object->genderAutoDetect().'-Мина');
    }
    public function testGenDetect144()
    {
        $this->object->setFirstName('Минай');
        $this->assertEquals('1-Минай', $this->object->genderAutoDetect().'-Минай');
    }
    public function testGenDetect145()
    {
        $this->object->setFirstName('Мирон');
        $this->assertEquals('1-Мирон', $this->object->genderAutoDetect().'-Мирон');
    }
    public function testGenDetect146()
    {
        $this->object->setFirstName('Митрофан');
        $this->assertEquals('1-Митрофан', $this->object->genderAutoDetect().'-Митрофан');
    }
    public function testGenDetect147()
    {
        $this->object->setFirstName('Михаил');
        $this->assertEquals('1-Михаил', $this->object->genderAutoDetect().'-Михаил');
    }
    public function testGenDetect148()
    {
        $this->object->setFirstName('Михей');
        $this->assertEquals('1-Михей', $this->object->genderAutoDetect().'-Михей');
    }
    public function testGenDetect149()
    {
        $this->object->setFirstName('Модест');
        $this->assertEquals('1-Модест', $this->object->genderAutoDetect().'-Модест');
    }
    public function testGenDetect150()
    {
        $this->object->setFirstName('Моисей');
        $this->assertEquals('1-Моисей', $this->object->genderAutoDetect().'-Моисей');
    }
    public function testGenDetect151()
    {
        $this->object->setFirstName('Мокей');
        $this->assertEquals('1-Мокей', $this->object->genderAutoDetect().'-Мокей');
    }
    public function testGenDetect152()
    {
        $this->object->setFirstName('Мстислав');
        $this->assertEquals('1-Мстислав', $this->object->genderAutoDetect().'-Мстислав');
    }
    public function testGenDetect153()
    {
        $this->object->setFirstName('Назар');
        $this->assertEquals('1-Назар', $this->object->genderAutoDetect().'-Назар');
    }
    public function testGenDetect154()
    {
        $this->object->setFirstName('Наркис');
        $this->assertEquals('1-Наркис', $this->object->genderAutoDetect().'-Наркис');
    }
    public function testGenDetect155()
    {
        $this->object->setFirstName('Нарцис');
        $this->assertEquals('1-Нарцис', $this->object->genderAutoDetect().'-Нарцис');
    }
    public function testGenDetect156()
    {
        $this->object->setFirstName('Наум');
        $this->assertEquals('1-Наум', $this->object->genderAutoDetect().'-Наум');
    }
    public function testGenDetect157()
    {
        $this->object->setFirstName('Нейл');
        $this->assertEquals('1-Нейл', $this->object->genderAutoDetect().'-Нейл');
    }
    public function testGenDetect158()
    {
        $this->object->setFirstName('Нестер');
        $this->assertEquals('1-Нестер', $this->object->genderAutoDetect().'-Нестер');
    }
    public function testGenDetect159()
    {
        $this->object->setFirstName('Нестор');
        $this->assertEquals('1-Нестор', $this->object->genderAutoDetect().'-Нестор');
    }
    public function testGenDetect160()
    {
        $this->object->setFirstName('Нефёд');
        $this->assertEquals('1-Нефёд', $this->object->genderAutoDetect().'-Нефёд');
    }
    public function testGenDetect161()
    {
        $this->object->setFirstName('Никандр');
        $this->assertEquals('1-Никандр', $this->object->genderAutoDetect().'-Никандр');
    }
    public function testGenDetect162()
    {
        $this->object->setFirstName('Никанор');
        $this->assertEquals('1-Никанор', $this->object->genderAutoDetect().'-Никанор');
    }
    public function testGenDetect163()
    {
        $this->object->setFirstName('Никита');
        $this->assertEquals('1-Никита', $this->object->genderAutoDetect().'-Никита');
    }
    public function testGenDetect164()
    {
        $this->object->setFirstName('Никифор');
        $this->assertEquals('1-Никифор', $this->object->genderAutoDetect().'-Никифор');
    }
    public function testGenDetect165()
    {
        $this->object->setFirstName('Никодим');
        $this->assertEquals('1-Никодим', $this->object->genderAutoDetect().'-Никодим');
    }
    public function testGenDetect166()
    {
        $this->object->setFirstName('Николай');
        $this->assertEquals('1-Николай', $this->object->genderAutoDetect().'-Николай');
    }
    public function testGenDetect167()
    {
        $this->object->setFirstName('Никон');
        $this->assertEquals('1-Никон', $this->object->genderAutoDetect().'-Никон');
    }
    public function testGenDetect168()
    {
        $this->object->setFirstName('Нил');
        $this->assertEquals('1-Нил', $this->object->genderAutoDetect().'-Нил');
    }
    public function testGenDetect169()
    {
        $this->object->setFirstName('Олег');
        $this->assertEquals('1-Олег', $this->object->genderAutoDetect().'-Олег');
    }
    public function testGenDetect170()
    {
        $this->object->setFirstName('Онисим');
        $this->assertEquals('1-Онисим', $this->object->genderAutoDetect().'-Онисим');
    }
    public function testGenDetect171()
    {
        $this->object->setFirstName('Онуфрий');
        $this->assertEquals('1-Онуфрий', $this->object->genderAutoDetect().'-Онуфрий');
    }
    public function testGenDetect172()
    {
        $this->object->setFirstName('Орест');
        $this->assertEquals('1-Орест', $this->object->genderAutoDetect().'-Орест');
    }
    public function testGenDetect173()
    {
        $this->object->setFirstName('Осип');
        $this->assertEquals('1-Осип', $this->object->genderAutoDetect().'-Осип');
    }
    public function testGenDetect174()
    {
        $this->object->setFirstName('Остап');
        $this->assertEquals('1-Остап', $this->object->genderAutoDetect().'-Остап');
    }
    public function testGenDetect175()
    {
        $this->object->setFirstName('Отто');
        $this->assertEquals('1-Отто', $this->object->genderAutoDetect().'-Отто');
    }
    public function testGenDetect176()
    {
        $this->object->setFirstName('Павел');
        $this->assertEquals('1-Павел', $this->object->genderAutoDetect().'-Павел');
    }
    public function testGenDetect177()
    {
        $this->object->setFirstName('Панкрат');
        $this->assertEquals('1-Панкрат', $this->object->genderAutoDetect().'-Панкрат');
    }
    public function testGenDetect178()
    {
        $this->object->setFirstName('Панкратий');
        $this->assertEquals('1-Панкратий', $this->object->genderAutoDetect().'-Панкратий');
    }
    public function testGenDetect179()
    {
        $this->object->setFirstName('Пантелей');
        $this->assertEquals('1-Пантелей', $this->object->genderAutoDetect().'-Пантелей');
    }
    public function testGenDetect180()
    {
        $this->object->setFirstName('Пантелеймон');
        $this->assertEquals('1-Пантелеймон', $this->object->genderAutoDetect().'-Пантелеймон');
    }
    public function testGenDetect181()
    {
        $this->object->setFirstName('Парфён');
        $this->assertEquals('1-Парфён', $this->object->genderAutoDetect().'-Парфён');
    }
    public function testGenDetect182()
    {
        $this->object->setFirstName('Парфений');
        $this->assertEquals('1-Парфений', $this->object->genderAutoDetect().'-Парфений');
    }
    public function testGenDetect183()
    {
        $this->object->setFirstName('Пётр');
        $this->assertEquals('1-Пётр', $this->object->genderAutoDetect().'-Пётр');
    }
    public function testGenDetect184()
    {
        $this->object->setFirstName('Пимен');
        $this->assertEquals('1-Пимен', $this->object->genderAutoDetect().'-Пимен');
    }
    public function testGenDetect185()
    {
        $this->object->setFirstName('Платон');
        $this->assertEquals('1-Платон', $this->object->genderAutoDetect().'-Платон');
    }
    public function testGenDetect186()
    {
        $this->object->setFirstName('Полиграф');
        $this->assertEquals('1-Полиграф', $this->object->genderAutoDetect().'-Полиграф');
    }
    public function testGenDetect187()
    {
        $this->object->setFirstName('Поликарп');
        $this->assertEquals('1-Поликарп', $this->object->genderAutoDetect().'-Поликарп');
    }
    public function testGenDetect188()
    {
        $this->object->setFirstName('Порфир');
        $this->assertEquals('1-Порфир', $this->object->genderAutoDetect().'-Порфир');
    }
    public function testGenDetect189()
    {
        $this->object->setFirstName('Порфирий');
        $this->assertEquals('1-Порфирий', $this->object->genderAutoDetect().'-Порфирий');
    }
    public function testGenDetect190()
    {
        $this->object->setFirstName('Потап');
        $this->assertEquals('1-Потап', $this->object->genderAutoDetect().'-Потап');
    }
    public function testGenDetect191()
    {
        $this->object->setFirstName('Прокоп');
        $this->assertEquals('1-Прокоп', $this->object->genderAutoDetect().'-Прокоп');
    }
    public function testGenDetect192()
    {
        $this->object->setFirstName('Прокопий');
        $this->assertEquals('1-Прокопий', $this->object->genderAutoDetect().'-Прокопий');
    }
    public function testGenDetect193()
    {
        $this->object->setFirstName('Прокофий');
        $this->assertEquals('1-Прокофий', $this->object->genderAutoDetect().'-Прокофий');
    }
    public function testGenDetect194()
    {
        $this->object->setFirstName('Прохор');
        $this->assertEquals('1-Прохор', $this->object->genderAutoDetect().'-Прохор');
    }
    public function testGenDetect195()
    {
        $this->object->setFirstName('Роберт');
        $this->assertEquals('1-Роберт', $this->object->genderAutoDetect().'-Роберт');
    }
    public function testGenDetect196()
    {
        $this->object->setFirstName('Родион');
        $this->assertEquals('1-Родион', $this->object->genderAutoDetect().'-Родион');
    }
    public function testGenDetect197()
    {
        $this->object->setFirstName('Роман');
        $this->assertEquals('1-Роман', $this->object->genderAutoDetect().'-Роман');
    }
    public function testGenDetect198()
    {
        $this->object->setFirstName('Ростислав');
        $this->assertEquals('1-Ростислав', $this->object->genderAutoDetect().'-Ростислав');
    }
    public function testGenDetect199()
    {
        $this->object->setFirstName('Руслан');
        $this->assertEquals('1-Руслан', $this->object->genderAutoDetect().'-Руслан');
    }
    public function testGenDetect200()
    {
        $this->object->setFirstName('Савастей');
        $this->assertEquals('1-Савастей', $this->object->genderAutoDetect().'-Савастей');
    }
    public function testGenDetect201()
    {
        $this->object->setFirstName('Савва');
        $this->assertEquals('1-Савва', $this->object->genderAutoDetect().'-Савва');
    }
    public function testGenDetect202()
    {
        $this->object->setFirstName('Савватий');
        $this->assertEquals('1-Савватий', $this->object->genderAutoDetect().'-Савватий');
    }
    public function testGenDetect203()
    {
        $this->object->setFirstName('Савелий');
        $this->assertEquals('1-Савелий', $this->object->genderAutoDetect().'-Савелий');
    }
    public function testGenDetect204()
    {
        $this->object->setFirstName('Самсон');
        $this->assertEquals('1-Самсон', $this->object->genderAutoDetect().'-Самсон');
    }
    public function testGenDetect205()
    {
        $this->object->setFirstName('Святослав');
        $this->assertEquals('1-Святослав', $this->object->genderAutoDetect().'-Святослав');
    }
    public function testGenDetect206()
    {
        $this->object->setFirstName('Семён');
        $this->assertEquals('1-Семён', $this->object->genderAutoDetect().'-Семён');
    }
    public function testGenDetect207()
    {
        $this->object->setFirstName('Серафим');
        $this->assertEquals('1-Серафим', $this->object->genderAutoDetect().'-Серафим');
    }
    public function testGenDetect208()
    {
        $this->object->setFirstName('Сергей');
        $this->assertEquals('1-Сергей', $this->object->genderAutoDetect().'-Сергей');
    }
    public function testGenDetect209()
    {
        $this->object->setFirstName('Сергий');
        $this->assertEquals('1-Сергий', $this->object->genderAutoDetect().'-Сергий');
    }
    public function testGenDetect210()
    {
        $this->object->setFirstName('Сидор');
        $this->assertEquals('1-Сидор', $this->object->genderAutoDetect().'-Сидор');
    }
    public function testGenDetect211()
    {
        $this->object->setFirstName('Созон');
        $this->assertEquals('1-Созон', $this->object->genderAutoDetect().'-Созон');
    }
    public function testGenDetect212()
    {
        $this->object->setFirstName('Созонт');
        $this->assertEquals('1-Созонт', $this->object->genderAutoDetect().'-Созонт');
    }
    public function testGenDetect213()
    {
        $this->object->setFirstName('Спиридон');
        $this->assertEquals('1-Спиридон', $this->object->genderAutoDetect().'-Спиридон');
    }
    public function testGenDetect214()
    {
        $this->object->setFirstName('Станислав');
        $this->assertEquals('1-Станислав', $this->object->genderAutoDetect().'-Станислав');
    }
    public function testGenDetect215()
    {
        $this->object->setFirstName('Степан');
        $this->assertEquals('1-Степан', $this->object->genderAutoDetect().'-Степан');
    }
    public function testGenDetect216()
    {
        $this->object->setFirstName('Тарас');
        $this->assertEquals('1-Тарас', $this->object->genderAutoDetect().'-Тарас');
    }
    public function testGenDetect217()
    {
        $this->object->setFirstName('Теймураз');
        $this->assertEquals('1-Теймураз', $this->object->genderAutoDetect().'-Теймураз');
    }
    public function testGenDetect218()
    {
        $this->object->setFirstName('Терентий');
        $this->assertEquals('1-Терентий', $this->object->genderAutoDetect().'-Терентий');
    }
    public function testGenDetect219()
    {
        $this->object->setFirstName('Тимофей');
        $this->assertEquals('1-Тимофей', $this->object->genderAutoDetect().'-Тимофей');
    }
    public function testGenDetect220()
    {
        $this->object->setFirstName('Тимур');
        $this->assertEquals('1-Тимур', $this->object->genderAutoDetect().'-Тимур');
    }
    public function testGenDetect221()
    {
        $this->object->setFirstName('Тихон');
        $this->assertEquals('1-Тихон', $this->object->genderAutoDetect().'-Тихон');
    }
    public function testGenDetect222()
    {
        $this->object->setFirstName('Трифон');
        $this->assertEquals('1-Трифон', $this->object->genderAutoDetect().'-Трифон');
    }
    public function testGenDetect223()
    {
        $this->object->setFirstName('Трофим');
        $this->assertEquals('1-Трофим', $this->object->genderAutoDetect().'-Трофим');
    }
    public function testGenDetect224()
    {
        $this->object->setFirstName('Устин');
        $this->assertEquals('1-Устин', $this->object->genderAutoDetect().'-Устин');
    }
    public function testGenDetect225()
    {
        $this->object->setFirstName('Фадей');
        $this->assertEquals('1-Фадей', $this->object->genderAutoDetect().'-Фадей');
    }
    public function testGenDetect226()
    {
        $this->object->setFirstName('Федот');
        $this->assertEquals('1-Федот', $this->object->genderAutoDetect().'-Федот');
    }
    public function testGenDetect227()
    {
        $this->object->setFirstName('Феликс');
        $this->assertEquals('1-Феликс', $this->object->genderAutoDetect().'-Феликс');
    }
    public function testGenDetect228()
    {
        $this->object->setFirstName('Фёдор');
        $this->assertEquals('1-Фёдор', $this->object->genderAutoDetect().'-Фёдор');
    }
    public function testGenDetect229()
    {
        $this->object->setFirstName('Федосий');
        $this->assertEquals('1-Федосий', $this->object->genderAutoDetect().'-Федосий');
    }
    public function testGenDetect230()
    {
        $this->object->setFirstName('Феодосий');
        $this->assertEquals('1-Феодосий', $this->object->genderAutoDetect().'-Феодосий');
    }
    public function testGenDetect231()
    {
        $this->object->setFirstName('Феоктист');
        $this->assertEquals('1-Феоктист', $this->object->genderAutoDetect().'-Феоктист');
    }
    public function testGenDetect232()
    {
        $this->object->setFirstName('Феофан');
        $this->assertEquals('1-Феофан', $this->object->genderAutoDetect().'-Феофан');
    }
    public function testGenDetect233()
    {
        $this->object->setFirstName('Филат');
        $this->assertEquals('1-Филат', $this->object->genderAutoDetect().'-Филат');
    }
    public function testGenDetect234()
    {
        $this->object->setFirstName('Филимон');
        $this->assertEquals('1-Филимон', $this->object->genderAutoDetect().'-Филимон');
    }
    public function testGenDetect235()
    {
        $this->object->setFirstName('Филипп');
        $this->assertEquals('1-Филипп', $this->object->genderAutoDetect().'-Филипп');
    }
    public function testGenDetect236()
    {
        $this->object->setFirstName('Фока');
        $this->assertEquals('1-Фока', $this->object->genderAutoDetect().'-Фока');
    }
    public function testGenDetect237()
    {
        $this->object->setFirstName('Фома');
        $this->assertEquals('1-Фома', $this->object->genderAutoDetect().'-Фома');
    }
    public function testGenDetect238()
    {
        $this->object->setFirstName('Фрол');
        $this->assertEquals('1-Фрол', $this->object->genderAutoDetect().'-Фрол');
    }
    public function testGenDetect239()
    {
        $this->object->setFirstName('Харитон');
        $this->assertEquals('1-Харитон', $this->object->genderAutoDetect().'-Харитон');
    }
    public function testGenDetect240()
    {
        $this->object->setFirstName('Харлам');
        $this->assertEquals('1-Харлам', $this->object->genderAutoDetect().'-Харлам');
    }
    public function testGenDetect241()
    {
        $this->object->setFirstName('Харламп');
        $this->assertEquals('1-Харламп', $this->object->genderAutoDetect().'-Харламп');
    }
    public function testGenDetect242()
    {
        $this->object->setFirstName('Харлампий');
        $this->assertEquals('1-Харлампий', $this->object->genderAutoDetect().'-Харлампий');
    }
    public function testGenDetect243()
    {
        $this->object->setFirstName('Чеслав');
        $this->assertEquals('1-Чеслав', $this->object->genderAutoDetect().'-Чеслав');
    }
    public function testGenDetect244()
    {
        $this->object->setFirstName('Эдгар');
        $this->assertEquals('1-Эдгар', $this->object->genderAutoDetect().'-Эдгар');
    }
    public function testGenDetect245()
    {
        $this->object->setFirstName('Эдгард');
        $this->assertEquals('1-Эдгард', $this->object->genderAutoDetect().'-Эдгард');
    }
    public function testGenDetect246()
    {
        $this->object->setFirstName('Эдуард');
        $this->assertEquals('1-Эдуард', $this->object->genderAutoDetect().'-Эдуард');
    }
    public function testGenDetect247()
    {
        $this->object->setFirstName('Юлиан');
        $this->assertEquals('1-Юлиан', $this->object->genderAutoDetect().'-Юлиан');
    }
    public function testGenDetect248()
    {
        $this->object->setFirstName('Юлий');
        $this->assertEquals('1-Юлий', $this->object->genderAutoDetect().'-Юлий');
    }
    public function testGenDetect249()
    {
        $this->object->setFirstName('Юрий');
        $this->assertEquals('1-Юрий', $this->object->genderAutoDetect().'-Юрий');
    }
    public function testGenDetect250()
    {
        $this->object->setFirstName('Яков');
        $this->assertEquals('1-Яков', $this->object->genderAutoDetect().'-Яков');
    }
    public function testGenDetect251()
    {
        $this->object->setFirstName('Ярослав');
        $this->assertEquals('1-Ярослав', $this->object->genderAutoDetect().'-Ярослав');
    }
    public function testGenDetect252()
    {
        $this->object->setFirstName('Ян');
        $this->assertEquals('1-Ян', $this->object->genderAutoDetect().'-Ян');
    }
    public function testGenDetect253()
    {
        $this->object->setFirstName('Августа');
        $this->assertEquals('2-Августа', $this->object->genderAutoDetect().'-Августа');
    }
    public function testGenDetect254()
    {
        $this->object->setFirstName('Авдотья');
        $this->assertEquals('2-Авдотья', $this->object->genderAutoDetect().'-Авдотья');
    }
    public function testGenDetect255()
    {
        $this->object->setFirstName('Аврелия');
        $this->assertEquals('2-Аврелия', $this->object->genderAutoDetect().'-Аврелия');
    }
    public function testGenDetect256()
    {
        $this->object->setFirstName('Агния');
        $this->assertEquals('2-Агния', $this->object->genderAutoDetect().'-Агния');
    }
    public function testGenDetect257()
    {
        $this->object->setFirstName('Аграфена');
        $this->assertEquals('2-Аграфена', $this->object->genderAutoDetect().'-Аграфена');
    }
    public function testGenDetect258()
    {
        $this->object->setFirstName('Агриппина');
        $this->assertEquals('2-Агриппина', $this->object->genderAutoDetect().'-Агриппина');
    }
    public function testGenDetect259()
    {
        $this->object->setFirstName('Аделаида');
        $this->assertEquals('2-Аделаида', $this->object->genderAutoDetect().'-Аделаида');
    }
    public function testGenDetect260()
    {
        $this->object->setFirstName('Аделина');
        $this->assertEquals('2-Аделина', $this->object->genderAutoDetect().'-Аделина');
    }
    public function testGenDetect261()
    {
        $this->object->setFirstName('Азиза');
        $this->assertEquals('2-Азиза', $this->object->genderAutoDetect().'-Азиза');
    }
    public function testGenDetect262()
    {
        $this->object->setFirstName('Аида');
        $this->assertEquals('2-Аида', $this->object->genderAutoDetect().'-Аида');
    }
    public function testGenDetect263()
    {
        $this->object->setFirstName('Александра');
        $this->assertEquals('2-Александра', $this->object->genderAutoDetect().'-Александра');
    }
    public function testGenDetect264()
    {
        $this->object->setFirstName('Алина');
        $this->assertEquals('2-Алина', $this->object->genderAutoDetect().'-Алина');
    }
    public function testGenDetect265()
    {
        $this->object->setFirstName('Алиса');
        $this->assertEquals('2-Алиса', $this->object->genderAutoDetect().'-Алиса');
    }
    public function testGenDetect266()
    {
        $this->object->setFirstName('Алла');
        $this->assertEquals('2-Алла', $this->object->genderAutoDetect().'-Алла');
    }
    public function testGenDetect267()
    {
        $this->object->setFirstName('Алсу');
        $this->assertEquals('2-Алсу', $this->object->genderAutoDetect().'-Алсу');
    }
    public function testGenDetect268()
    {
        $this->object->setFirstName('Альбина');
        $this->assertEquals('2-Альбина', $this->object->genderAutoDetect().'-Альбина');
    }
    public function testGenDetect269()
    {
        $this->object->setFirstName('Алёна');
        $this->assertEquals('2-Алёна', $this->object->genderAutoDetect().'-Алёна');
    }
    public function testGenDetect270()
    {
        $this->object->setFirstName('Анастасия');
        $this->assertEquals('2-Анастасия', $this->object->genderAutoDetect().'-Анастасия');
    }
    public function testGenDetect271()
    {
        $this->object->setFirstName('Ангелина');
        $this->assertEquals('2-Ангелина', $this->object->genderAutoDetect().'-Ангелина');
    }
    public function testGenDetect272()
    {
        $this->object->setFirstName('Анжелика');
        $this->assertEquals('2-Анжелика', $this->object->genderAutoDetect().'-Анжелика');
    }
    public function testGenDetect273()
    {
        $this->object->setFirstName('Анисия');
        $this->assertEquals('2-Анисия', $this->object->genderAutoDetect().'-Анисия');
    }
    public function testGenDetect274()
    {
        $this->object->setFirstName('Анисья');
        $this->assertEquals('2-Анисья', $this->object->genderAutoDetect().'-Анисья');
    }
    public function testGenDetect275()
    {
        $this->object->setFirstName('Анна');
        $this->assertEquals('2-Анна', $this->object->genderAutoDetect().'-Анна');
    }
    public function testGenDetect276()
    {
        $this->object->setFirstName('Антонина');
        $this->assertEquals('2-Антонина', $this->object->genderAutoDetect().'-Антонина');
    }
    public function testGenDetect277()
    {
        $this->object->setFirstName('Анушка');
        $this->assertEquals('2-Анушка', $this->object->genderAutoDetect().'-Анушка');
    }
    public function testGenDetect278()
    {
        $this->object->setFirstName('Аполлинария');
        $this->assertEquals('2-Аполлинария', $this->object->genderAutoDetect().'-Аполлинария');
    }
    public function testGenDetect279()
    {
        $this->object->setFirstName('Аполлония');
        $this->assertEquals('2-Аполлония', $this->object->genderAutoDetect().'-Аполлония');
    }
    public function testGenDetect280()
    {
        $this->object->setFirstName('Арна');
        $this->assertEquals('2-Арна', $this->object->genderAutoDetect().'-Арна');
    }
    public function testGenDetect281()
    {
        $this->object->setFirstName('Асель');
        $this->assertEquals('2-Асель', $this->object->genderAutoDetect().'-Асель');
    }
    public function testGenDetect282()
    {
        $this->object->setFirstName('Аурика');
        $this->assertEquals('2-Аурика', $this->object->genderAutoDetect().'-Аурика');
    }
    public function testGenDetect283()
    {
        $this->object->setFirstName('Аэлита');
        $this->assertEquals('2-Аэлита', $this->object->genderAutoDetect().'-Аэлита');
    }
    public function testGenDetect284()
    {
        $this->object->setFirstName('Беата');
        $this->assertEquals('2-Беата', $this->object->genderAutoDetect().'-Беата');
    }
    public function testGenDetect285()
    {
        $this->object->setFirstName('Божена');
        $this->assertEquals('2-Божена', $this->object->genderAutoDetect().'-Божена');
    }
    public function testGenDetect286()
    {
        $this->object->setFirstName('Валентина');
        $this->assertEquals('2-Валентина', $this->object->genderAutoDetect().'-Валентина');
    }
    public function testGenDetect287()
    {
        $this->object->setFirstName('Варвара');
        $this->assertEquals('2-Варвара', $this->object->genderAutoDetect().'-Варвара');
    }
    public function testGenDetect288()
    {
        $this->object->setFirstName('Василиса');
        $this->assertEquals('2-Василиса', $this->object->genderAutoDetect().'-Василиса');
    }
    public function testGenDetect289()
    {
        $this->object->setFirstName('Вера');
        $this->assertEquals('2-Вера', $this->object->genderAutoDetect().'-Вера');
    }
    public function testGenDetect290()
    {
        $this->object->setFirstName('Вероника');
        $this->assertEquals('2-Вероника', $this->object->genderAutoDetect().'-Вероника');
    }
    public function testGenDetect291()
    {
        $this->object->setFirstName('Виктория');
        $this->assertEquals('2-Виктория', $this->object->genderAutoDetect().'-Виктория');
    }
    public function testGenDetect292()
    {
        $this->object->setFirstName('Виолетта');
        $this->assertEquals('2-Виолетта', $this->object->genderAutoDetect().'-Виолетта');
    }
    public function testGenDetect293()
    {
        $this->object->setFirstName('Владислава');
        $this->assertEquals('2-Владислава', $this->object->genderAutoDetect().'-Владислава');
    }
    public function testGenDetect294()
    {
        $this->object->setFirstName('Галина');
        $this->assertEquals('2-Галина', $this->object->genderAutoDetect().'-Галина');
    }
    public function testGenDetect295()
    {
        $this->object->setFirstName('Геннадия');
        $this->assertEquals('2-Геннадия', $this->object->genderAutoDetect().'-Геннадия');
    }
    public function testGenDetect296()
    {
        $this->object->setFirstName('Глафира');
        $this->assertEquals('2-Глафира', $this->object->genderAutoDetect().'-Глафира');
    }
    public function testGenDetect297()
    {
        $this->object->setFirstName('Дария');
        $this->assertEquals('2-Дария', $this->object->genderAutoDetect().'-Дария');
    }
    public function testGenDetect298()
    {
        $this->object->setFirstName('Дарья');
        $this->assertEquals('2-Дарья', $this->object->genderAutoDetect().'-Дарья');
    }
    public function testGenDetect299()
    {
        $this->object->setFirstName('Диана');
        $this->assertEquals('2-Диана', $this->object->genderAutoDetect().'-Диана');
    }
    public function testGenDetect300()
    {
        $this->object->setFirstName('Ева');
        $this->assertEquals('2-Ева', $this->object->genderAutoDetect().'-Ева');
    }
    public function testGenDetect301()
    {
        $this->object->setFirstName('Евгения');
        $this->assertEquals('2-Евгения', $this->object->genderAutoDetect().'-Евгения');
    }
    public function testGenDetect302()
    {
        $this->object->setFirstName('Евдокия');
        $this->assertEquals('2-Евдокия', $this->object->genderAutoDetect().'-Евдокия');
    }
    public function testGenDetect303()
    {
        $this->object->setFirstName('Евфросиния');
        $this->assertEquals('2-Евфросиния', $this->object->genderAutoDetect().'-Евфросиния');
    }
    public function testGenDetect304()
    {
        $this->object->setFirstName('Екатерина');
        $this->assertEquals('2-Екатерина', $this->object->genderAutoDetect().'-Екатерина');
    }
    public function testGenDetect305()
    {
        $this->object->setFirstName('Елена');
        $this->assertEquals('2-Елена', $this->object->genderAutoDetect().'-Елена');
    }
    public function testGenDetect306()
    {
        $this->object->setFirstName('Елизавета');
        $this->assertEquals('2-Елизавета', $this->object->genderAutoDetect().'-Елизавета');
    }
    public function testGenDetect307()
    {
        $this->object->setFirstName('Жанна');
        $this->assertEquals('2-Жанна', $this->object->genderAutoDetect().'-Жанна');
    }
    public function testGenDetect308()
    {
        $this->object->setFirstName('Зинаида');
        $this->assertEquals('2-Зинаида', $this->object->genderAutoDetect().'-Зинаида');
    }
    public function testGenDetect309()
    {
        $this->object->setFirstName('Зоя');
        $this->assertEquals('2-Зоя', $this->object->genderAutoDetect().'-Зоя');
    }
    public function testGenDetect310()
    {
        $this->object->setFirstName('Зульфия');
        $this->assertEquals('2-Зульфия', $this->object->genderAutoDetect().'-Зульфия');
    }
    public function testGenDetect311()
    {
        $this->object->setFirstName('Изабелла');
        $this->assertEquals('2-Изабелла', $this->object->genderAutoDetect().'-Изабелла');
    }
    public function testGenDetect312()
    {
        $this->object->setFirstName('Иляна');
        $this->assertEquals('2-Иляна', $this->object->genderAutoDetect().'-Иляна');
    }
    public function testGenDetect313()
    {
        $this->object->setFirstName('Инна');
        $this->assertEquals('2-Инна', $this->object->genderAutoDetect().'-Инна');
    }
    public function testGenDetect314()
    {
        $this->object->setFirstName('Иоанна');
        $this->assertEquals('2-Иоанна', $this->object->genderAutoDetect().'-Иоанна');
    }
    public function testGenDetect315()
    {
        $this->object->setFirstName('Иулия');
        $this->assertEquals('2-Иулия', $this->object->genderAutoDetect().'-Иулия');
    }
    public function testGenDetect316()
    {
        $this->object->setFirstName('Иуния');
        $this->assertEquals('2-Иуния', $this->object->genderAutoDetect().'-Иуния');
    }
    public function testGenDetect317()
    {
        $this->object->setFirstName('Камола');
        $this->assertEquals('2-Камола', $this->object->genderAutoDetect().'-Камола');
    }
    public function testGenDetect318()
    {
        $this->object->setFirstName('Карина');
        $this->assertEquals('2-Карина', $this->object->genderAutoDetect().'-Карина');
    }
    public function testGenDetect319()
    {
        $this->object->setFirstName('Каролина');
        $this->assertEquals('2-Каролина', $this->object->genderAutoDetect().'-Каролина');
    }
    public function testGenDetect320()
    {
        $this->object->setFirstName('Кира');
        $this->assertEquals('2-Кира', $this->object->genderAutoDetect().'-Кира');
    }
    public function testGenDetect321()
    {
        $this->object->setFirstName('Клара');
        $this->assertEquals('2-Клара', $this->object->genderAutoDetect().'-Клара');
    }
    public function testGenDetect322()
    {
        $this->object->setFirstName('Клеопатра');
        $this->assertEquals('2-Клеопатра', $this->object->genderAutoDetect().'-Клеопатра');
    }
    public function testGenDetect323()
    {
        $this->object->setFirstName('Клотильда');
        $this->assertEquals('2-Клотильда', $this->object->genderAutoDetect().'-Клотильда');
    }
    public function testGenDetect324()
    {
        $this->object->setFirstName('Констанция');
        $this->assertEquals('2-Констанция', $this->object->genderAutoDetect().'-Констанция');
    }
    public function testGenDetect325()
    {
        $this->object->setFirstName('Консуэло');
        $this->assertEquals('2-Консуэло', $this->object->genderAutoDetect().'-Консуэло');
    }
    public function testGenDetect326()
    {
        $this->object->setFirstName('Корнелия');
        $this->assertEquals('2-Корнелия', $this->object->genderAutoDetect().'-Корнелия');
    }
    public function testGenDetect327()
    {
        $this->object->setFirstName('Кристина');
        $this->assertEquals('2-Кристина', $this->object->genderAutoDetect().'-Кристина');
    }
    public function testGenDetect328()
    {
        $this->object->setFirstName('Ксения');
        $this->assertEquals('2-Ксения', $this->object->genderAutoDetect().'-Ксения');
    }
    public function testGenDetect329()
    {
        $this->object->setFirstName('Лада');
        $this->assertEquals('2-Лада', $this->object->genderAutoDetect().'-Лада');
    }
    public function testGenDetect330()
    {
        $this->object->setFirstName('Лариса');
        $this->assertEquals('2-Лариса', $this->object->genderAutoDetect().'-Лариса');
    }
    public function testGenDetect331()
    {
        $this->object->setFirstName('Лейла');
        $this->assertEquals('2-Лейла', $this->object->genderAutoDetect().'-Лейла');
    }
    public function testGenDetect332()
    {
        $this->object->setFirstName('Леся');
        $this->assertEquals('2-Леся', $this->object->genderAutoDetect().'-Леся');
    }
    public function testGenDetect333()
    {
        $this->object->setFirstName('Ливия');
        $this->assertEquals('2-Ливия', $this->object->genderAutoDetect().'-Ливия');
    }
    public function testGenDetect334()
    {
        $this->object->setFirstName('Любовь');
        $this->assertEquals('2-Любовь', $this->object->genderAutoDetect().'-Любовь');
    }
    public function testGenDetect335()
    {
        $this->object->setFirstName('Людмила');
        $this->assertEquals('2-Людмила', $this->object->genderAutoDetect().'-Людмила');
    }
    public function testGenDetect336()
    {
        $this->object->setFirstName('Майя');
        $this->assertEquals('2-Майя', $this->object->genderAutoDetect().'-Майя');
    }
    public function testGenDetect337()
    {
        $this->object->setFirstName('Мальвина');
        $this->assertEquals('2-Мальвина', $this->object->genderAutoDetect().'-Мальвина');
    }
    public function testGenDetect338()
    {
        $this->object->setFirstName('Марианна');
        $this->assertEquals('2-Марианна', $this->object->genderAutoDetect().'-Марианна');
    }
    public function testGenDetect339()
    {
        $this->object->setFirstName('Марина');
        $this->assertEquals('2-Марина', $this->object->genderAutoDetect().'-Марина');
    }
    public function testGenDetect340()
    {
        $this->object->setFirstName('Матильда');
        $this->assertEquals('2-Матильда', $this->object->genderAutoDetect().'-Матильда');
    }
    public function testGenDetect341()
    {
        $this->object->setFirstName('Мафтуха');
        $this->assertEquals('2-Мафтуха', $this->object->genderAutoDetect().'-Мафтуха');
    }
    public function testGenDetect342()
    {
        $this->object->setFirstName('Маша');
        $this->assertEquals('2-Маша', $this->object->genderAutoDetect().'-Маша');
    }
    public function testGenDetect343()
    {
        $this->object->setFirstName('Мелания');
        $this->assertEquals('2-Мелания', $this->object->genderAutoDetect().'-Мелания');
    }
    public function testGenDetect344()
    {
        $this->object->setFirstName('Милена');
        $this->assertEquals('2-Милена', $this->object->genderAutoDetect().'-Милена');
    }
    public function testGenDetect345()
    {
        $this->object->setFirstName('Мэри');
        $this->assertEquals('2-Мэри', $this->object->genderAutoDetect().'-Мэри');
    }
    public function testGenDetect346()
    {
        $this->object->setFirstName('Надежда');
        $this->assertEquals('2-Надежда', $this->object->genderAutoDetect().'-Надежда');
    }
    public function testGenDetect347()
    {
        $this->object->setFirstName('Наталия');
        $this->assertEquals('2-Наталия', $this->object->genderAutoDetect().'-Наталия');
    }
    public function testGenDetect348()
    {
        $this->object->setFirstName('Нина');
        $this->assertEquals('2-Нина', $this->object->genderAutoDetect().'-Нина');
    }
    public function testGenDetect349()
    {
        $this->object->setFirstName('Нинель');
        $this->assertEquals('2-Нинель', $this->object->genderAutoDetect().'-Нинель');
    }
    public function testGenDetect350()
    {
        $this->object->setFirstName('Нона');
        $this->assertEquals('2-Нона', $this->object->genderAutoDetect().'-Нона');
    }
    public function testGenDetect351()
    {
        $this->object->setFirstName('Нонна');
        $this->assertEquals('2-Нонна', $this->object->genderAutoDetect().'-Нонна');
    }
    public function testGenDetect352()
    {
        $this->object->setFirstName('Оксана');
        $this->assertEquals('2-Оксана', $this->object->genderAutoDetect().'-Оксана');
    }
    public function testGenDetect353()
    {
        $this->object->setFirstName('Октавия');
        $this->assertEquals('2-Октавия', $this->object->genderAutoDetect().'-Октавия');
    }
    public function testGenDetect354()
    {
        $this->object->setFirstName('Олеся');
        $this->assertEquals('2-Олеся', $this->object->genderAutoDetect().'-Олеся');
    }
    public function testGenDetect355()
    {
        $this->object->setFirstName('Ольга');
        $this->assertEquals('2-Ольга', $this->object->genderAutoDetect().'-Ольга');
    }
    public function testGenDetect356()
    {
        $this->object->setFirstName('Павлина');
        $this->assertEquals('2-Павлина', $this->object->genderAutoDetect().'-Павлина');
    }
    public function testGenDetect357()
    {
        $this->object->setFirstName('Пелагея');
        $this->assertEquals('2-Пелагея', $this->object->genderAutoDetect().'-Пелагея');
    }
    public function testGenDetect358()
    {
        $this->object->setFirstName('Полина');
        $this->assertEquals('2-Полина', $this->object->genderAutoDetect().'-Полина');
    }
    public function testGenDetect359()
    {
        $this->object->setFirstName('Прасковья');
        $this->assertEquals('2-Прасковья', $this->object->genderAutoDetect().'-Прасковья');
    }
    public function testGenDetect360()
    {
        $this->object->setFirstName('Рада');
        $this->assertEquals('2-Рада', $this->object->genderAutoDetect().'-Рада');
    }
    public function testGenDetect361()
    {
        $this->object->setFirstName('Раиса');
        $this->assertEquals('2-Раиса', $this->object->genderAutoDetect().'-Раиса');
    }
    public function testGenDetect362()
    {
        $this->object->setFirstName('Ребекка');
        $this->assertEquals('2-Ребекка', $this->object->genderAutoDetect().'-Ребекка');
    }
    public function testGenDetect363()
    {
        $this->object->setFirstName('Ревекка');
        $this->assertEquals('2-Ревекка', $this->object->genderAutoDetect().'-Ревекка');
    }
    public function testGenDetect364()
    {
        $this->object->setFirstName('Розалия');
        $this->assertEquals('2-Розалия', $this->object->genderAutoDetect().'-Розалия');
    }
    public function testGenDetect365()
    {
        $this->object->setFirstName('Розарио');
        $this->assertEquals('2-Розарио', $this->object->genderAutoDetect().'-Розарио');
    }
    public function testGenDetect366()
    {
        $this->object->setFirstName('Сара');
        $this->assertEquals('2-Сара', $this->object->genderAutoDetect().'-Сара');
    }
    public function testGenDetect367()
    {
        $this->object->setFirstName('Светлана');
        $this->assertEquals('2-Светлана', $this->object->genderAutoDetect().'-Светлана');
    }
    public function testGenDetect368()
    {
        $this->object->setFirstName('Снежана');
        $this->assertEquals('2-Снежана', $this->object->genderAutoDetect().'-Снежана');
    }
    public function testGenDetect369()
    {
        $this->object->setFirstName('Стелла');
        $this->assertEquals('2-Стелла', $this->object->genderAutoDetect().'-Стелла');
    }
    public function testGenDetect370()
    {
        $this->object->setFirstName('Степанида');
        $this->assertEquals('2-Степанида', $this->object->genderAutoDetect().'-Степанида');
    }
    public function testGenDetect371()
    {
        $this->object->setFirstName('Стефания');
        $this->assertEquals('2-Стефания', $this->object->genderAutoDetect().'-Стефания');
    }
    public function testGenDetect372()
    {
        $this->object->setFirstName('Суламифь');
        $this->assertEquals('2-Суламифь', $this->object->genderAutoDetect().'-Суламифь');
    }
    public function testGenDetect373()
    {
        $this->object->setFirstName('Таисия');
        $this->assertEquals('2-Таисия', $this->object->genderAutoDetect().'-Таисия');
    }
    public function testGenDetect374()
    {
        $this->object->setFirstName('Тамара');
        $this->assertEquals('2-Тамара', $this->object->genderAutoDetect().'-Тамара');
    }
    public function testGenDetect375()
    {
        $this->object->setFirstName('Татьяна');
        $this->assertEquals('2-Татьяна', $this->object->genderAutoDetect().'-Татьяна');
    }
    public function testGenDetect376()
    {
        $this->object->setFirstName('Улла');
        $this->assertEquals('2-Улла', $this->object->genderAutoDetect().'-Улла');
    }
    public function testGenDetect377()
    {
        $this->object->setFirstName('Ульрика');
        $this->assertEquals('2-Ульрика', $this->object->genderAutoDetect().'-Ульрика');
    }
    public function testGenDetect378()
    {
        $this->object->setFirstName('Ульяна');
        $this->assertEquals('2-Ульяна', $this->object->genderAutoDetect().'-Ульяна');
    }
    public function testGenDetect379()
    {
        $this->object->setFirstName('Урсула');
        $this->assertEquals('2-Урсула', $this->object->genderAutoDetect().'-Урсула');
    }
    public function testGenDetect380()
    {
        $this->object->setFirstName('Фаина');
        $this->assertEquals('2-Фаина', $this->object->genderAutoDetect().'-Фаина');
    }
    public function testGenDetect381()
    {
        $this->object->setFirstName('Фатима');
        $this->assertEquals('2-Фатима', $this->object->genderAutoDetect().'-Фатима');
    }
    public function testGenDetect382()
    {
        $this->object->setFirstName('Феба');
        $this->assertEquals('2-Феба', $this->object->genderAutoDetect().'-Феба');
    }
    public function testGenDetect383()
    {
        $this->object->setFirstName('Феодора');
        $this->assertEquals('2-Феодора', $this->object->genderAutoDetect().'-Феодора');
    }
    public function testGenDetect384()
    {
        $this->object->setFirstName('Филлида');
        $this->assertEquals('2-Филлида', $this->object->genderAutoDetect().'-Филлида');
    }
    public function testGenDetect385()
    {
        $this->object->setFirstName('Фрида');
        $this->assertEquals('2-Фрида', $this->object->genderAutoDetect().'-Фрида');
    }
    public function testGenDetect386()
    {
        $this->object->setFirstName('Фёкла');
        $this->assertEquals('2-Фёкла', $this->object->genderAutoDetect().'-Фёкла');
    }
    public function testGenDetect387()
    {
        $this->object->setFirstName('Шарлотта');
        $this->assertEquals('2-Шарлотта', $this->object->genderAutoDetect().'-Шарлотта');
    }
    public function testGenDetect388()
    {
        $this->object->setFirstName('Шейла');
        $this->assertEquals('2-Шейла', $this->object->genderAutoDetect().'-Шейла');
    }
    public function testGenDetect389()
    {
        $this->object->setFirstName('Шона');
        $this->assertEquals('2-Шона', $this->object->genderAutoDetect().'-Шона');
    }
    public function testGenDetect390()
    {
        $this->object->setFirstName('Элеонора');
        $this->assertEquals('2-Элеонора', $this->object->genderAutoDetect().'-Элеонора');
    }
    public function testGenDetect391()
    {
        $this->object->setFirstName('Элина');
        $this->assertEquals('2-Элина', $this->object->genderAutoDetect().'-Элина');
    }
    public function testGenDetect392()
    {
        $this->object->setFirstName('Эльвира');
        $this->assertEquals('2-Эльвира', $this->object->genderAutoDetect().'-Эльвира');
    }
    public function testGenDetect393()
    {
        $this->object->setFirstName('Эми');
        $this->assertEquals('2-Эми', $this->object->genderAutoDetect().'-Эми');
    }
    public function testGenDetect394()
    {
        $this->object->setFirstName('Юлианна');
        $this->assertEquals('2-Юлианна', $this->object->genderAutoDetect().'-Юлианна');
    }
    public function testGenDetect395()
    {
        $this->object->setFirstName('Юлия');
        $this->assertEquals('2-Юлия', $this->object->genderAutoDetect().'-Юлия');
    }
    public function testGenDetect396()
    {
        $this->object->setFirstName('Юния');
        $this->assertEquals('2-Юния', $this->object->genderAutoDetect().'-Юния');
    }
    public function testGenDetect397()
    {
        $this->object->setFirstName('Ярослава');
        $this->assertEquals('2-Ярослава', $this->object->genderAutoDetect().'-Ярослава');
    }

}