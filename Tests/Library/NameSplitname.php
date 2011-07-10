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
        $this->assertEquals('N-Авдей', trim($this->object->getFullNameFormat('Авдей')).'-Авдей');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('N-Аверьян', trim($this->object->getFullNameFormat('Аверьян')).'-Аверьян');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('N-Адам', trim($this->object->getFullNameFormat('Адам')).'-Адам');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('N-Адриан', trim($this->object->getFullNameFormat('Адриан')).'-Адриан');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('N-Аксён', trim($this->object->getFullNameFormat('Аксён')).'-Аксён');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('N-Александр', trim($this->object->getFullNameFormat('Александр')).'-Александр');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('N-Алексей', trim($this->object->getFullNameFormat('Алексей')).'-Алексей');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('N-Анатолий', trim($this->object->getFullNameFormat('Анатолий')).'-Анатолий');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('N-Аркадий', trim($this->object->getFullNameFormat('Аркадий')).'-Аркадий');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('N-Арсен', trim($this->object->getFullNameFormat('Арсен')).'-Арсен');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('N-Арсений', trim($this->object->getFullNameFormat('Арсений')).'-Арсений');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('N-Артём', trim($this->object->getFullNameFormat('Артём')).'-Артём');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('N-Артемий', trim($this->object->getFullNameFormat('Артемий')).'-Артемий');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('N-Артур', trim($this->object->getFullNameFormat('Артур')).'-Артур');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('N-Архип', trim($this->object->getFullNameFormat('Архип')).'-Архип');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('N-Афанас', trim($this->object->getFullNameFormat('Афанас')).'-Афанас');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('N-Афанасий', trim($this->object->getFullNameFormat('Афанасий')).'-Афанасий');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('N-Андрей', trim($this->object->getFullNameFormat('Андрей')).'-Андрей');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('N-Анисим', trim($this->object->getFullNameFormat('Анисим')).'-Анисим');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('N-Антип', trim($this->object->getFullNameFormat('Антип')).'-Антип');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('N-Антон', trim($this->object->getFullNameFormat('Антон')).'-Антон');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('N-Ануфрий', trim($this->object->getFullNameFormat('Ануфрий')).'-Ануфрий');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('N-Бенедикт', trim($this->object->getFullNameFormat('Бенедикт')).'-Бенедикт');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('N-Богдан', trim($this->object->getFullNameFormat('Богдан')).'-Богдан');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('N-Борис', trim($this->object->getFullNameFormat('Борис')).'-Борис');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('N-Борислав', trim($this->object->getFullNameFormat('Борислав')).'-Борислав');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('N-Бронислав', trim($this->object->getFullNameFormat('Бронислав')).'-Бронислав');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('N-Вадим', trim($this->object->getFullNameFormat('Вадим')).'-Вадим');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('N-Валентин', trim($this->object->getFullNameFormat('Валентин')).'-Валентин');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('N-Валерий', trim($this->object->getFullNameFormat('Валерий')).'-Валерий');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('N-Валериан', trim($this->object->getFullNameFormat('Валериан')).'-Валериан');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('N-Валерьян', trim($this->object->getFullNameFormat('Валерьян')).'-Валерьян');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('N-Василий', trim($this->object->getFullNameFormat('Василий')).'-Василий');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('N-Венедикт', trim($this->object->getFullNameFormat('Венедикт')).'-Венедикт');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('N-Викентий', trim($this->object->getFullNameFormat('Викентий')).'-Викентий');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('N-Виктор', trim($this->object->getFullNameFormat('Виктор')).'-Виктор');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('N-Вилен', trim($this->object->getFullNameFormat('Вилен')).'-Вилен');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('N-Вилор', trim($this->object->getFullNameFormat('Вилор')).'-Вилор');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('N-Виталий', trim($this->object->getFullNameFormat('Виталий')).'-Виталий');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('N-Владилен', trim($this->object->getFullNameFormat('Владилен')).'-Владилен');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('N-Владимир', trim($this->object->getFullNameFormat('Владимир')).'-Владимир');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('N-Владислав', trim($this->object->getFullNameFormat('Владислав')).'-Владислав');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('N-Владлен', trim($this->object->getFullNameFormat('Владлен')).'-Владлен');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('N-Влас', trim($this->object->getFullNameFormat('Влас')).'-Влас');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('N-Всеволод', trim($this->object->getFullNameFormat('Всеволод')).'-Всеволод');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('N-Вячеслав', trim($this->object->getFullNameFormat('Вячеслав')).'-Вячеслав');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('N-Гавриил', trim($this->object->getFullNameFormat('Гавриил')).'-Гавриил');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('N-Гаврила', trim($this->object->getFullNameFormat('Гаврила')).'-Гаврила');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('N-Геннадий', trim($this->object->getFullNameFormat('Геннадий')).'-Геннадий');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('N-Георгий', trim($this->object->getFullNameFormat('Георгий')).'-Георгий');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('N-Герасим', trim($this->object->getFullNameFormat('Герасим')).'-Герасим');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('N-Герман', trim($this->object->getFullNameFormat('Герман')).'-Герман');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('N-Гертруд', trim($this->object->getFullNameFormat('Гертруд')).'-Гертруд');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('N-Глеб', trim($this->object->getFullNameFormat('Глеб')).'-Глеб');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('N-Гордей', trim($this->object->getFullNameFormat('Гордей')).'-Гордей');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('N-Григорий', trim($this->object->getFullNameFormat('Григорий')).'-Григорий');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('N-Гурий', trim($this->object->getFullNameFormat('Гурий')).'-Гурий');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('N-Давид', trim($this->object->getFullNameFormat('Давид')).'-Давид');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('N-Давыд', trim($this->object->getFullNameFormat('Давыд')).'-Давыд');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('N-Даниил', trim($this->object->getFullNameFormat('Даниил')).'-Даниил');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('N-Данила', trim($this->object->getFullNameFormat('Данила')).'-Данила');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('N-Демид', trim($this->object->getFullNameFormat('Демид')).'-Демид');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('N-Демьян', trim($this->object->getFullNameFormat('Демьян')).'-Демьян');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('N-Денис', trim($this->object->getFullNameFormat('Денис')).'-Денис');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('N-Димитрий', trim($this->object->getFullNameFormat('Димитрий')).'-Димитрий');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('N-Дмитрий', trim($this->object->getFullNameFormat('Дмитрий')).'-Дмитрий');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('N-Дорофей', trim($this->object->getFullNameFormat('Дорофей')).'-Дорофей');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('N-Евгений', trim($this->object->getFullNameFormat('Евгений')).'-Евгений');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('N-Евдоким', trim($this->object->getFullNameFormat('Евдоким')).'-Евдоким');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('N-Евсей', trim($this->object->getFullNameFormat('Евсей')).'-Евсей');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('N-Евдоким', trim($this->object->getFullNameFormat('Евдоким')).'-Евдоким');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('N-Евстафий', trim($this->object->getFullNameFormat('Евстафий')).'-Евстафий');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('N-Евстигней', trim($this->object->getFullNameFormat('Евстигней')).'-Евстигней');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('N-Егор', trim($this->object->getFullNameFormat('Егор')).'-Егор');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('N-Елизар', trim($this->object->getFullNameFormat('Елизар')).'-Елизар');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('N-Елисей', trim($this->object->getFullNameFormat('Елисей')).'-Елисей');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('N-Емельян', trim($this->object->getFullNameFormat('Емельян')).'-Емельян');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('N-Еремей', trim($this->object->getFullNameFormat('Еремей')).'-Еремей');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('N-Ермил', trim($this->object->getFullNameFormat('Ермил')).'-Ермил');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('N-Ермолай', trim($this->object->getFullNameFormat('Ермолай')).'-Ермолай');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('N-Ерофей', trim($this->object->getFullNameFormat('Ерофей')).'-Ерофей');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('N-Ефим', trim($this->object->getFullNameFormat('Ефим')).'-Ефим');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('N-Ефимий', trim($this->object->getFullNameFormat('Ефимий')).'-Ефимий');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('N-Ефрем', trim($this->object->getFullNameFormat('Ефрем')).'-Ефрем');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('N-Жан', trim($this->object->getFullNameFormat('Жан')).'-Жан');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('N-Захар', trim($this->object->getFullNameFormat('Захар')).'-Захар');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('N-Захарий', trim($this->object->getFullNameFormat('Захарий')).'-Захарий');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('N-Зиновий', trim($this->object->getFullNameFormat('Зиновий')).'-Зиновий');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('N-Иван', trim($this->object->getFullNameFormat('Иван')).'-Иван');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('N-Игнат', trim($this->object->getFullNameFormat('Игнат')).'-Игнат');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('N-Игнатий', trim($this->object->getFullNameFormat('Игнатий')).'-Игнатий');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('N-Игорь', trim($this->object->getFullNameFormat('Игорь')).'-Игорь');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('N-Измаил', trim($this->object->getFullNameFormat('Измаил')).'-Измаил');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('N-Изот', trim($this->object->getFullNameFormat('Изот')).'-Изот');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('N-Иларион', trim($this->object->getFullNameFormat('Иларион')).'-Иларион');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('N-Илья', trim($this->object->getFullNameFormat('Илья')).'-Илья');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('N-Ильяс', trim($this->object->getFullNameFormat('Ильяс')).'-Ильяс');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('N-Иосип', trim($this->object->getFullNameFormat('Иосип')).'-Иосип');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('N-Иосиф', trim($this->object->getFullNameFormat('Иосиф')).'-Иосиф');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('N-Исаак', trim($this->object->getFullNameFormat('Исаак')).'-Исаак');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('N-Исак', trim($this->object->getFullNameFormat('Исак')).'-Исак');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('N-Исидор', trim($this->object->getFullNameFormat('Исидор')).'-Исидор');
    }
    public function testSplDetect102()
    {
        $this->assertEquals('N-Искандер', trim($this->object->getFullNameFormat('Искандер')).'-Искандер');
    }
    public function testSplDetect103()
    {
        $this->assertEquals('N-Казимир', trim($this->object->getFullNameFormat('Казимир')).'-Казимир');
    }
    public function testSplDetect104()
    {
        $this->assertEquals('N-Калина', trim($this->object->getFullNameFormat('Калина')).'-Калина');
    }
    public function testSplDetect105()
    {
        $this->assertEquals('N-Каллиник', trim($this->object->getFullNameFormat('Каллиник')).'-Каллиник');
    }
    public function testSplDetect106()
    {
        $this->assertEquals('N-Каллистрат', trim($this->object->getFullNameFormat('Каллистрат')).'-Каллистрат');
    }
    public function testSplDetect107()
    {
        $this->assertEquals('N-Капитон', trim($this->object->getFullNameFormat('Капитон')).'-Капитон');
    }
    public function testSplDetect108()
    {
        $this->assertEquals('N-Карп', trim($this->object->getFullNameFormat('Карп')).'-Карп');
    }
    public function testSplDetect109()
    {
        $this->assertEquals('N-Касьян', trim($this->object->getFullNameFormat('Касьян')).'-Касьян');
    }
    public function testSplDetect110()
    {
        $this->assertEquals('N-Кирей', trim($this->object->getFullNameFormat('Кирей')).'-Кирей');
    }
    public function testSplDetect111()
    {
        $this->assertEquals('N-Кирила', trim($this->object->getFullNameFormat('Кирила')).'-Кирила');
    }
    public function testSplDetect112()
    {
        $this->assertEquals('N-Кирилл', trim($this->object->getFullNameFormat('Кирилл')).'-Кирилл');
    }
    public function testSplDetect113()
    {
        $this->assertEquals('N-Клим', trim($this->object->getFullNameFormat('Клим')).'-Клим');
    }
    public function testSplDetect114()
    {
        $this->assertEquals('N-Климент', trim($this->object->getFullNameFormat('Климент')).'-Климент');
    }
    public function testSplDetect115()
    {
        $this->assertEquals('N-Климентий', trim($this->object->getFullNameFormat('Климентий')).'-Климентий');
    }
    public function testSplDetect116()
    {
        $this->assertEquals('N-Кондрат', trim($this->object->getFullNameFormat('Кондрат')).'-Кондрат');
    }
    public function testSplDetect117()
    {
        $this->assertEquals('N-Кондратий', trim($this->object->getFullNameFormat('Кондратий')).'-Кондратий');
    }
    public function testSplDetect118()
    {
        $this->assertEquals('N-Конон', trim($this->object->getFullNameFormat('Конон')).'-Конон');
    }
    public function testSplDetect119()
    {
        $this->assertEquals('N-Константин', trim($this->object->getFullNameFormat('Константин')).'-Константин');
    }
    public function testSplDetect120()
    {
        $this->assertEquals('N-Корней', trim($this->object->getFullNameFormat('Корней')).'-Корней');
    }
    public function testSplDetect121()
    {
        $this->assertEquals('N-Корнелий', trim($this->object->getFullNameFormat('Корнелий')).'-Корнелий');
    }
    public function testSplDetect122()
    {
        $this->assertEquals('N-Ксенофонт', trim($this->object->getFullNameFormat('Ксенофонт')).'-Ксенофонт');
    }
    public function testSplDetect123()
    {
        $this->assertEquals('N-Кузьма', trim($this->object->getFullNameFormat('Кузьма')).'-Кузьма');
    }
    public function testSplDetect124()
    {
        $this->assertEquals('N-Куприян', trim($this->object->getFullNameFormat('Куприян')).'-Куприян');
    }
    public function testSplDetect125()
    {
        $this->assertEquals('N-Лаврентий', trim($this->object->getFullNameFormat('Лаврентий')).'-Лаврентий');
    }
    public function testSplDetect126()
    {
        $this->assertEquals('N-Лазарь', trim($this->object->getFullNameFormat('Лазарь')).'-Лазарь');
    }
    public function testSplDetect127()
    {
        $this->assertEquals('N-Лев', trim($this->object->getFullNameFormat('Лев')).'-Лев');
    }
    public function testSplDetect128()
    {
        $this->assertEquals('N-Левон', trim($this->object->getFullNameFormat('Левон')).'-Левон');
    }
    public function testSplDetect129()
    {
        $this->assertEquals('N-Леонид', trim($this->object->getFullNameFormat('Леонид')).'-Леонид');
    }
    public function testSplDetect130()
    {
        $this->assertEquals('N-Леон', trim($this->object->getFullNameFormat('Леон')).'-Леон');
    }
    public function testSplDetect131()
    {
        $this->assertEquals('N-Леонтий', trim($this->object->getFullNameFormat('Леонтий')).'-Леонтий');
    }
    public function testSplDetect132()
    {
        $this->assertEquals('N-Лука', trim($this->object->getFullNameFormat('Лука')).'-Лука');
    }
    public function testSplDetect133()
    {
        $this->assertEquals('N-Лукьян', trim($this->object->getFullNameFormat('Лукьян')).'-Лукьян');
    }
    public function testSplDetect134()
    {
        $this->assertEquals('N-Людвиг', trim($this->object->getFullNameFormat('Людвиг')).'-Людвиг');
    }
    public function testSplDetect135()
    {
        $this->assertEquals('N-Макар', trim($this->object->getFullNameFormat('Макар')).'-Макар');
    }
    public function testSplDetect136()
    {
        $this->assertEquals('N-Максим', trim($this->object->getFullNameFormat('Максим')).'-Максим');
    }
    public function testSplDetect137()
    {
        $this->assertEquals('N-Марат', trim($this->object->getFullNameFormat('Марат')).'-Марат');
    }
    public function testSplDetect138()
    {
        $this->assertEquals('N-Марк', trim($this->object->getFullNameFormat('Марк')).'-Марк');
    }
    public function testSplDetect139()
    {
        $this->assertEquals('N-Маркел', trim($this->object->getFullNameFormat('Маркел')).'-Маркел');
    }
    public function testSplDetect140()
    {
        $this->assertEquals('N-Мартин', trim($this->object->getFullNameFormat('Мартин')).'-Мартин');
    }
    public function testSplDetect141()
    {
        $this->assertEquals('N-Мартын', trim($this->object->getFullNameFormat('Мартын')).'-Мартын');
    }
    public function testSplDetect142()
    {
        $this->assertEquals('N-Мефодий', trim($this->object->getFullNameFormat('Мефодий')).'-Мефодий');
    }
    public function testSplDetect143()
    {
        $this->assertEquals('N-Мина', trim($this->object->getFullNameFormat('Мина')).'-Мина');
    }
    public function testSplDetect144()
    {
        $this->assertEquals('N-Минай', trim($this->object->getFullNameFormat('Минай')).'-Минай');
    }
    public function testSplDetect145()
    {
        $this->assertEquals('N-Мирон', trim($this->object->getFullNameFormat('Мирон')).'-Мирон');
    }
    public function testSplDetect146()
    {
        $this->assertEquals('N-Митрофан', trim($this->object->getFullNameFormat('Митрофан')).'-Митрофан');
    }
    public function testSplDetect147()
    {
        $this->assertEquals('N-Михаил', trim($this->object->getFullNameFormat('Михаил')).'-Михаил');
    }
    public function testSplDetect148()
    {
        $this->assertEquals('N-Михей', trim($this->object->getFullNameFormat('Михей')).'-Михей');
    }
    public function testSplDetect149()
    {
        $this->assertEquals('N-Модест', trim($this->object->getFullNameFormat('Модест')).'-Модест');
    }
    public function testSplDetect150()
    {
        $this->assertEquals('N-Моисей', trim($this->object->getFullNameFormat('Моисей')).'-Моисей');
    }
    public function testSplDetect151()
    {
        $this->assertEquals('N-Мокей', trim($this->object->getFullNameFormat('Мокей')).'-Мокей');
    }
    public function testSplDetect152()
    {
        $this->assertEquals('N-Мстислав', trim($this->object->getFullNameFormat('Мстислав')).'-Мстислав');
    }
    public function testSplDetect153()
    {
        $this->assertEquals('N-Назар', trim($this->object->getFullNameFormat('Назар')).'-Назар');
    }
    public function testSplDetect154()
    {
        $this->assertEquals('N-Наркис', trim($this->object->getFullNameFormat('Наркис')).'-Наркис');
    }
    public function testSplDetect155()
    {
        $this->assertEquals('N-Нарцис', trim($this->object->getFullNameFormat('Нарцис')).'-Нарцис');
    }
    public function testSplDetect156()
    {
        $this->assertEquals('N-Наум', trim($this->object->getFullNameFormat('Наум')).'-Наум');
    }
    public function testSplDetect157()
    {
        $this->assertEquals('N-Нейл', trim($this->object->getFullNameFormat('Нейл')).'-Нейл');
    }
    public function testSplDetect158()
    {
        $this->assertEquals('N-Нестер', trim($this->object->getFullNameFormat('Нестер')).'-Нестер');
    }
    public function testSplDetect159()
    {
        $this->assertEquals('N-Нестор', trim($this->object->getFullNameFormat('Нестор')).'-Нестор');
    }
    public function testSplDetect160()
    {
        $this->assertEquals('N-Нефёд', trim($this->object->getFullNameFormat('Нефёд')).'-Нефёд');
    }
    public function testSplDetect161()
    {
        $this->assertEquals('N-Никандр', trim($this->object->getFullNameFormat('Никандр')).'-Никандр');
    }
    public function testSplDetect162()
    {
        $this->assertEquals('N-Никанор', trim($this->object->getFullNameFormat('Никанор')).'-Никанор');
    }
    public function testSplDetect163()
    {
        $this->assertEquals('N-Никита', trim($this->object->getFullNameFormat('Никита')).'-Никита');
    }
    public function testSplDetect164()
    {
        $this->assertEquals('N-Никифор', trim($this->object->getFullNameFormat('Никифор')).'-Никифор');
    }
    public function testSplDetect165()
    {
        $this->assertEquals('N-Никодим', trim($this->object->getFullNameFormat('Никодим')).'-Никодим');
    }
    public function testSplDetect166()
    {
        $this->assertEquals('N-Николай', trim($this->object->getFullNameFormat('Николай')).'-Николай');
    }
    public function testSplDetect167()
    {
        $this->assertEquals('N-Никон', trim($this->object->getFullNameFormat('Никон')).'-Никон');
    }
    public function testSplDetect168()
    {
        $this->assertEquals('N-Нил', trim($this->object->getFullNameFormat('Нил')).'-Нил');
    }
    public function testSplDetect169()
    {
        $this->assertEquals('N-Олег', trim($this->object->getFullNameFormat('Олег')).'-Олег');
    }
    public function testSplDetect170()
    {
        $this->assertEquals('N-Онисим', trim($this->object->getFullNameFormat('Онисим')).'-Онисим');
    }
    public function testSplDetect171()
    {
        $this->assertEquals('N-Онуфрий', trim($this->object->getFullNameFormat('Онуфрий')).'-Онуфрий');
    }
    public function testSplDetect172()
    {
        $this->assertEquals('N-Орест', trim($this->object->getFullNameFormat('Орест')).'-Орест');
    }
    public function testSplDetect173()
    {
        $this->assertEquals('N-Осип', trim($this->object->getFullNameFormat('Осип')).'-Осип');
    }
    public function testSplDetect174()
    {
        $this->assertEquals('N-Остап', trim($this->object->getFullNameFormat('Остап')).'-Остап');
    }
    public function testSplDetect175()
    {
        $this->assertEquals('N-Отто', trim($this->object->getFullNameFormat('Отто')).'-Отто');
    }
    public function testSplDetect176()
    {
        $this->assertEquals('N-Павел', trim($this->object->getFullNameFormat('Павел')).'-Павел');
    }
    public function testSplDetect177()
    {
        $this->assertEquals('N-Панкрат', trim($this->object->getFullNameFormat('Панкрат')).'-Панкрат');
    }
    public function testSplDetect178()
    {
        $this->assertEquals('N-Панкратий', trim($this->object->getFullNameFormat('Панкратий')).'-Панкратий');
    }
    public function testSplDetect179()
    {
        $this->assertEquals('N-Пантелей', trim($this->object->getFullNameFormat('Пантелей')).'-Пантелей');
    }
    public function testSplDetect180()
    {
        $this->assertEquals('N-Пантелеймон', trim($this->object->getFullNameFormat('Пантелеймон')).'-Пантелеймон');
    }
    public function testSplDetect181()
    {
        $this->assertEquals('N-Парфён', trim($this->object->getFullNameFormat('Парфён')).'-Парфён');
    }
    public function testSplDetect182()
    {
        $this->assertEquals('N-Парфений', trim($this->object->getFullNameFormat('Парфений')).'-Парфений');
    }
    public function testSplDetect183()
    {
        $this->assertEquals('N-Пётр', trim($this->object->getFullNameFormat('Пётр')).'-Пётр');
    }
    public function testSplDetect184()
    {
        $this->assertEquals('N-Пимен', trim($this->object->getFullNameFormat('Пимен')).'-Пимен');
    }
    public function testSplDetect185()
    {
        $this->assertEquals('N-Платон', trim($this->object->getFullNameFormat('Платон')).'-Платон');
    }
    public function testSplDetect186()
    {
        $this->assertEquals('N-Полиграф', trim($this->object->getFullNameFormat('Полиграф')).'-Полиграф');
    }
    public function testSplDetect187()
    {
        $this->assertEquals('N-Поликарп', trim($this->object->getFullNameFormat('Поликарп')).'-Поликарп');
    }
    public function testSplDetect188()
    {
        $this->assertEquals('N-Порфир', trim($this->object->getFullNameFormat('Порфир')).'-Порфир');
    }
    public function testSplDetect189()
    {
        $this->assertEquals('N-Порфирий', trim($this->object->getFullNameFormat('Порфирий')).'-Порфирий');
    }
    public function testSplDetect190()
    {
        $this->assertEquals('N-Потап', trim($this->object->getFullNameFormat('Потап')).'-Потап');
    }
    public function testSplDetect191()
    {
        $this->assertEquals('N-Прокоп', trim($this->object->getFullNameFormat('Прокоп')).'-Прокоп');
    }
    public function testSplDetect192()
    {
        $this->assertEquals('N-Прокопий', trim($this->object->getFullNameFormat('Прокопий')).'-Прокопий');
    }
    public function testSplDetect193()
    {
        $this->assertEquals('N-Прокофий', trim($this->object->getFullNameFormat('Прокофий')).'-Прокофий');
    }
    public function testSplDetect194()
    {
        $this->assertEquals('N-Прохор', trim($this->object->getFullNameFormat('Прохор')).'-Прохор');
    }
    public function testSplDetect195()
    {
        $this->assertEquals('N-Роберт', trim($this->object->getFullNameFormat('Роберт')).'-Роберт');
    }
    public function testSplDetect196()
    {
        $this->assertEquals('N-Родион', trim($this->object->getFullNameFormat('Родион')).'-Родион');
    }
    public function testSplDetect197()
    {
        $this->assertEquals('N-Роман', trim($this->object->getFullNameFormat('Роман')).'-Роман');
    }
    public function testSplDetect198()
    {
        $this->assertEquals('N-Ростислав', trim($this->object->getFullNameFormat('Ростислав')).'-Ростислав');
    }
    public function testSplDetect199()
    {
        $this->assertEquals('N-Руслан', trim($this->object->getFullNameFormat('Руслан')).'-Руслан');
    }
    public function testSplDetect200()
    {
        $this->assertEquals('N-Савастей', trim($this->object->getFullNameFormat('Савастей')).'-Савастей');
    }
    public function testSplDetect201()
    {
        $this->assertEquals('N-Савва', trim($this->object->getFullNameFormat('Савва')).'-Савва');
    }
    public function testSplDetect202()
    {
        $this->assertEquals('N-Савватий', trim($this->object->getFullNameFormat('Савватий')).'-Савватий');
    }
    public function testSplDetect203()
    {
        $this->assertEquals('N-Савелий', trim($this->object->getFullNameFormat('Савелий')).'-Савелий');
    }
    public function testSplDetect204()
    {
        $this->assertEquals('N-Самсон', trim($this->object->getFullNameFormat('Самсон')).'-Самсон');
    }
    public function testSplDetect205()
    {
        $this->assertEquals('N-Святослав', trim($this->object->getFullNameFormat('Святослав')).'-Святослав');
    }
    public function testSplDetect206()
    {
        $this->assertEquals('N-Семён', trim($this->object->getFullNameFormat('Семён')).'-Семён');
    }
    public function testSplDetect207()
    {
        $this->assertEquals('N-Серафим', trim($this->object->getFullNameFormat('Серафим')).'-Серафим');
    }
    public function testSplDetect208()
    {
        $this->assertEquals('N-Сергей', trim($this->object->getFullNameFormat('Сергей')).'-Сергей');
    }
    public function testSplDetect209()
    {
        $this->assertEquals('N-Сергий', trim($this->object->getFullNameFormat('Сергий')).'-Сергий');
    }
    public function testSplDetect210()
    {
        $this->assertEquals('N-Сидор', trim($this->object->getFullNameFormat('Сидор')).'-Сидор');
    }
    public function testSplDetect211()
    {
        $this->assertEquals('N-Созон', trim($this->object->getFullNameFormat('Созон')).'-Созон');
    }
    public function testSplDetect212()
    {
        $this->assertEquals('N-Созонт', trim($this->object->getFullNameFormat('Созонт')).'-Созонт');
    }
    public function testSplDetect213()
    {
        $this->assertEquals('N-Спиридон', trim($this->object->getFullNameFormat('Спиридон')).'-Спиридон');
    }
    public function testSplDetect214()
    {
        $this->assertEquals('N-Станислав', trim($this->object->getFullNameFormat('Станислав')).'-Станислав');
    }
    public function testSplDetect215()
    {
        $this->assertEquals('N-Степан', trim($this->object->getFullNameFormat('Степан')).'-Степан');
    }
    public function testSplDetect216()
    {
        $this->assertEquals('N-Тарас', trim($this->object->getFullNameFormat('Тарас')).'-Тарас');
    }
    public function testSplDetect217()
    {
        $this->assertEquals('N-Теймураз', trim($this->object->getFullNameFormat('Теймураз')).'-Теймураз');
    }
    public function testSplDetect218()
    {
        $this->assertEquals('N-Терентий', trim($this->object->getFullNameFormat('Терентий')).'-Терентий');
    }
    public function testSplDetect219()
    {
        $this->assertEquals('N-Тимофей', trim($this->object->getFullNameFormat('Тимофей')).'-Тимофей');
    }
    public function testSplDetect220()
    {
        $this->assertEquals('N-Тимур', trim($this->object->getFullNameFormat('Тимур')).'-Тимур');
    }
    public function testSplDetect221()
    {
        $this->assertEquals('N-Тихон', trim($this->object->getFullNameFormat('Тихон')).'-Тихон');
    }
    public function testSplDetect222()
    {
        $this->assertEquals('N-Трифон', trim($this->object->getFullNameFormat('Трифон')).'-Трифон');
    }
    public function testSplDetect223()
    {
        $this->assertEquals('N-Трофим', trim($this->object->getFullNameFormat('Трофим')).'-Трофим');
    }
    public function testSplDetect224()
    {
        $this->assertEquals('N-Устин', trim($this->object->getFullNameFormat('Устин')).'-Устин');
    }
    public function testSplDetect225()
    {
        $this->assertEquals('N-Фадей', trim($this->object->getFullNameFormat('Фадей')).'-Фадей');
    }
    public function testSplDetect226()
    {
        $this->assertEquals('N-Федот', trim($this->object->getFullNameFormat('Федот')).'-Федот');
    }
    public function testSplDetect227()
    {
        $this->assertEquals('N-Феликс', trim($this->object->getFullNameFormat('Феликс')).'-Феликс');
    }
    public function testSplDetect228()
    {
        $this->assertEquals('N-Фёдор', trim($this->object->getFullNameFormat('Фёдор')).'-Фёдор');
    }
    public function testSplDetect229()
    {
        $this->assertEquals('N-Федосий', trim($this->object->getFullNameFormat('Федосий')).'-Федосий');
    }
    public function testSplDetect230()
    {
        $this->assertEquals('N-Феодосий', trim($this->object->getFullNameFormat('Феодосий')).'-Феодосий');
    }
    public function testSplDetect231()
    {
        $this->assertEquals('N-Феоктист', trim($this->object->getFullNameFormat('Феоктист')).'-Феоктист');
    }
    public function testSplDetect232()
    {
        $this->assertEquals('N-Феофан', trim($this->object->getFullNameFormat('Феофан')).'-Феофан');
    }
    public function testSplDetect233()
    {
        $this->assertEquals('N-Филат', trim($this->object->getFullNameFormat('Филат')).'-Филат');
    }
    public function testSplDetect234()
    {
        $this->assertEquals('N-Филимон', trim($this->object->getFullNameFormat('Филимон')).'-Филимон');
    }
    public function testSplDetect235()
    {
        $this->assertEquals('N-Филипп', trim($this->object->getFullNameFormat('Филипп')).'-Филипп');
    }
    public function testSplDetect236()
    {
        $this->assertEquals('N-Фока', trim($this->object->getFullNameFormat('Фока')).'-Фока');
    }
    public function testSplDetect237()
    {
        $this->assertEquals('N-Фома', trim($this->object->getFullNameFormat('Фома')).'-Фома');
    }
    public function testSplDetect238()
    {
        $this->assertEquals('N-Фрол', trim($this->object->getFullNameFormat('Фрол')).'-Фрол');
    }
    public function testSplDetect239()
    {
        $this->assertEquals('N-Харитон', trim($this->object->getFullNameFormat('Харитон')).'-Харитон');
    }
    public function testSplDetect240()
    {
        $this->assertEquals('N-Харлам', trim($this->object->getFullNameFormat('Харлам')).'-Харлам');
    }
    public function testSplDetect241()
    {
        $this->assertEquals('N-Харламп', trim($this->object->getFullNameFormat('Харламп')).'-Харламп');
    }
    public function testSplDetect242()
    {
        $this->assertEquals('N-Харлампий', trim($this->object->getFullNameFormat('Харлампий')).'-Харлампий');
    }
    public function testSplDetect243()
    {
        $this->assertEquals('N-Чеслав', trim($this->object->getFullNameFormat('Чеслав')).'-Чеслав');
    }
    public function testSplDetect244()
    {
        $this->assertEquals('N-Эдгар', trim($this->object->getFullNameFormat('Эдгар')).'-Эдгар');
    }
    public function testSplDetect245()
    {
        $this->assertEquals('N-Эдгард', trim($this->object->getFullNameFormat('Эдгард')).'-Эдгард');
    }
    public function testSplDetect246()
    {
        $this->assertEquals('N-Эдуард', trim($this->object->getFullNameFormat('Эдуард')).'-Эдуард');
    }
    public function testSplDetect247()
    {
        $this->assertEquals('N-Юлиан', trim($this->object->getFullNameFormat('Юлиан')).'-Юлиан');
    }
    public function testSplDetect248()
    {
        $this->assertEquals('N-Юлий', trim($this->object->getFullNameFormat('Юлий')).'-Юлий');
    }
    public function testSplDetect249()
    {
        $this->assertEquals('N-Юрий', trim($this->object->getFullNameFormat('Юрий')).'-Юрий');
    }
    public function testSplDetect250()
    {
        $this->assertEquals('N-Яков', trim($this->object->getFullNameFormat('Яков')).'-Яков');
    }
    public function testSplDetect251()
    {
        $this->assertEquals('N-Ярослав', trim($this->object->getFullNameFormat('Ярослав')).'-Ярослав');
    }
    public function testSplDetect252()
    {
        $this->assertEquals('N-Ян', trim($this->object->getFullNameFormat('Ян')).'-Ян');
    }
    public function testSplDetect253()
    {
        $this->assertEquals('N-Августа', trim($this->object->getFullNameFormat('Августа')).'-Августа');
    }
    public function testSplDetect254()
    {
        $this->assertEquals('N-Авдотья', trim($this->object->getFullNameFormat('Авдотья')).'-Авдотья');
    }
    public function testSplDetect255()
    {
        $this->assertEquals('N-Аврелия', trim($this->object->getFullNameFormat('Аврелия')).'-Аврелия');
    }
    public function testSplDetect256()
    {
        $this->assertEquals('N-Агния', trim($this->object->getFullNameFormat('Агния')).'-Агния');
    }
    public function testSplDetect257()
    {
        $this->assertEquals('N-Аграфена', trim($this->object->getFullNameFormat('Аграфена')).'-Аграфена');
    }
    public function testSplDetect258()
    {
        $this->assertEquals('N-Агриппина', trim($this->object->getFullNameFormat('Агриппина')).'-Агриппина');
    }
    public function testSplDetect259()
    {
        $this->assertEquals('N-Аделаида', trim($this->object->getFullNameFormat('Аделаида')).'-Аделаида');
    }
    public function testSplDetect260()
    {
        $this->assertEquals('N-Аделина', trim($this->object->getFullNameFormat('Аделина')).'-Аделина');
    }
    public function testSplDetect261()
    {
        $this->assertEquals('N-Азиза', trim($this->object->getFullNameFormat('Азиза')).'-Азиза');
    }
    public function testSplDetect262()
    {
        $this->assertEquals('N-Аида', trim($this->object->getFullNameFormat('Аида')).'-Аида');
    }
    public function testSplDetect263()
    {
        $this->assertEquals('N-Александра', trim($this->object->getFullNameFormat('Александра')).'-Александра');
    }
    public function testSplDetect264()
    {
        $this->assertEquals('N-Алина', trim($this->object->getFullNameFormat('Алина')).'-Алина');
    }
    public function testSplDetect265()
    {
        $this->assertEquals('N-Алиса', trim($this->object->getFullNameFormat('Алиса')).'-Алиса');
    }
    public function testSplDetect266()
    {
        $this->assertEquals('N-Алла', trim($this->object->getFullNameFormat('Алла')).'-Алла');
    }
    public function testSplDetect267()
    {
        $this->assertEquals('N-Алсу', trim($this->object->getFullNameFormat('Алсу')).'-Алсу');
    }
    public function testSplDetect268()
    {
        $this->assertEquals('N-Альбина', trim($this->object->getFullNameFormat('Альбина')).'-Альбина');
    }
    public function testSplDetect269()
    {
        $this->assertEquals('N-Алёна', trim($this->object->getFullNameFormat('Алёна')).'-Алёна');
    }
    public function testSplDetect270()
    {
        $this->assertEquals('N-Анастасия', trim($this->object->getFullNameFormat('Анастасия')).'-Анастасия');
    }
    public function testSplDetect271()
    {
        $this->assertEquals('N-Ангелина', trim($this->object->getFullNameFormat('Ангелина')).'-Ангелина');
    }
    public function testSplDetect272()
    {
        $this->assertEquals('N-Анжелика', trim($this->object->getFullNameFormat('Анжелика')).'-Анжелика');
    }
    public function testSplDetect273()
    {
        $this->assertEquals('N-Анисия', trim($this->object->getFullNameFormat('Анисия')).'-Анисия');
    }
    public function testSplDetect274()
    {
        $this->assertEquals('N-Анисья', trim($this->object->getFullNameFormat('Анисья')).'-Анисья');
    }
    public function testSplDetect275()
    {
        $this->assertEquals('N-Анна', trim($this->object->getFullNameFormat('Анна')).'-Анна');
    }
    public function testSplDetect276()
    {
        $this->assertEquals('N-Антонина', trim($this->object->getFullNameFormat('Антонина')).'-Антонина');
    }
    public function testSplDetect277()
    {
        $this->assertEquals('N-Анушка', trim($this->object->getFullNameFormat('Анушка')).'-Анушка');
    }
    public function testSplDetect278()
    {
        $this->assertEquals('N-Аполлинария', trim($this->object->getFullNameFormat('Аполлинария')).'-Аполлинария');
    }
    public function testSplDetect279()
    {
        $this->assertEquals('N-Аполлония', trim($this->object->getFullNameFormat('Аполлония')).'-Аполлония');
    }
    public function testSplDetect280()
    {
        $this->assertEquals('N-Арна', trim($this->object->getFullNameFormat('Арна')).'-Арна');
    }
    public function testSplDetect281()
    {
        $this->assertEquals('N-Асель', trim($this->object->getFullNameFormat('Асель')).'-Асель');
    }
    public function testSplDetect282()
    {
        $this->assertEquals('N-Аурика', trim($this->object->getFullNameFormat('Аурика')).'-Аурика');
    }
    public function testSplDetect283()
    {
        $this->assertEquals('N-Аэлита', trim($this->object->getFullNameFormat('Аэлита')).'-Аэлита');
    }
    public function testSplDetect284()
    {
        $this->assertEquals('N-Беата', trim($this->object->getFullNameFormat('Беата')).'-Беата');
    }
    public function testSplDetect285()
    {
        $this->assertEquals('N-Божена', trim($this->object->getFullNameFormat('Божена')).'-Божена');
    }
    public function testSplDetect286()
    {
        $this->assertEquals('N-Валентина', trim($this->object->getFullNameFormat('Валентина')).'-Валентина');
    }
    public function testSplDetect287()
    {
        $this->assertEquals('N-Варвара', trim($this->object->getFullNameFormat('Варвара')).'-Варвара');
    }
    public function testSplDetect288()
    {
        $this->assertEquals('N-Василиса', trim($this->object->getFullNameFormat('Василиса')).'-Василиса');
    }
    public function testSplDetect289()
    {
        $this->assertEquals('N-Вера', trim($this->object->getFullNameFormat('Вера')).'-Вера');
    }
    public function testSplDetect290()
    {
        $this->assertEquals('N-Вероника', trim($this->object->getFullNameFormat('Вероника')).'-Вероника');
    }
    public function testSplDetect291()
    {
        $this->assertEquals('N-Виктория', trim($this->object->getFullNameFormat('Виктория')).'-Виктория');
    }
    public function testSplDetect292()
    {
        $this->assertEquals('N-Виолетта', trim($this->object->getFullNameFormat('Виолетта')).'-Виолетта');
    }
    public function testSplDetect293()
    {
        $this->assertEquals('N-Владислава', trim($this->object->getFullNameFormat('Владислава')).'-Владислава');
    }
    public function testSplDetect294()
    {
        $this->assertEquals('N-Галина', trim($this->object->getFullNameFormat('Галина')).'-Галина');
    }
    public function testSplDetect295()
    {
        $this->assertEquals('N-Геннадия', trim($this->object->getFullNameFormat('Геннадия')).'-Геннадия');
    }
    public function testSplDetect296()
    {
        $this->assertEquals('N-Глафира', trim($this->object->getFullNameFormat('Глафира')).'-Глафира');
    }
    public function testSplDetect297()
    {
        $this->assertEquals('N-Дария', trim($this->object->getFullNameFormat('Дария')).'-Дария');
    }
    public function testSplDetect298()
    {
        $this->assertEquals('N-Дарья', trim($this->object->getFullNameFormat('Дарья')).'-Дарья');
    }
    public function testSplDetect299()
    {
        $this->assertEquals('N-Диана', trim($this->object->getFullNameFormat('Диана')).'-Диана');
    }
    public function testSplDetect300()
    {
        $this->assertEquals('N-Ева', trim($this->object->getFullNameFormat('Ева')).'-Ева');
    }
    public function testSplDetect301()
    {
        $this->assertEquals('N-Евгения', trim($this->object->getFullNameFormat('Евгения')).'-Евгения');
    }
    public function testSplDetect302()
    {
        $this->assertEquals('N-Евдокия', trim($this->object->getFullNameFormat('Евдокия')).'-Евдокия');
    }
    public function testSplDetect303()
    {
        $this->assertEquals('N-Евфросиния', trim($this->object->getFullNameFormat('Евфросиния')).'-Евфросиния');
    }
    public function testSplDetect304()
    {
        $this->assertEquals('N-Екатерина', trim($this->object->getFullNameFormat('Екатерина')).'-Екатерина');
    }
    public function testSplDetect305()
    {
        $this->assertEquals('N-Елена', trim($this->object->getFullNameFormat('Елена')).'-Елена');
    }
    public function testSplDetect306()
    {
        $this->assertEquals('N-Елизавета', trim($this->object->getFullNameFormat('Елизавета')).'-Елизавета');
    }
    public function testSplDetect307()
    {
        $this->assertEquals('N-Жанна', trim($this->object->getFullNameFormat('Жанна')).'-Жанна');
    }
    public function testSplDetect308()
    {
        $this->assertEquals('N-Зинаида', trim($this->object->getFullNameFormat('Зинаида')).'-Зинаида');
    }
    public function testSplDetect309()
    {
        $this->assertEquals('N-Зоя', trim($this->object->getFullNameFormat('Зоя')).'-Зоя');
    }
    public function testSplDetect310()
    {
        $this->assertEquals('N-Зульфия', trim($this->object->getFullNameFormat('Зульфия')).'-Зульфия');
    }
    public function testSplDetect311()
    {
        $this->assertEquals('N-Изабелла', trim($this->object->getFullNameFormat('Изабелла')).'-Изабелла');
    }
    public function testSplDetect312()
    {
        $this->assertEquals('N-Иляна', trim($this->object->getFullNameFormat('Иляна')).'-Иляна');
    }
    public function testSplDetect313()
    {
        $this->assertEquals('N-Инна', trim($this->object->getFullNameFormat('Инна')).'-Инна');
    }
    public function testSplDetect314()
    {
        $this->assertEquals('N-Иоанна', trim($this->object->getFullNameFormat('Иоанна')).'-Иоанна');
    }
    public function testSplDetect315()
    {
        $this->assertEquals('N-Иулия', trim($this->object->getFullNameFormat('Иулия')).'-Иулия');
    }
    public function testSplDetect316()
    {
        $this->assertEquals('N-Иуния', trim($this->object->getFullNameFormat('Иуния')).'-Иуния');
    }
    public function testSplDetect317()
    {
        $this->assertEquals('N-Камола', trim($this->object->getFullNameFormat('Камола')).'-Камола');
    }
    public function testSplDetect318()
    {
        $this->assertEquals('N-Карина', trim($this->object->getFullNameFormat('Карина')).'-Карина');
    }
    public function testSplDetect319()
    {
        $this->assertEquals('N-Каролина', trim($this->object->getFullNameFormat('Каролина')).'-Каролина');
    }
    public function testSplDetect320()
    {
        $this->assertEquals('N-Кира', trim($this->object->getFullNameFormat('Кира')).'-Кира');
    }
    public function testSplDetect321()
    {
        $this->assertEquals('N-Клара', trim($this->object->getFullNameFormat('Клара')).'-Клара');
    }
    public function testSplDetect322()
    {
        $this->assertEquals('N-Клеопатра', trim($this->object->getFullNameFormat('Клеопатра')).'-Клеопатра');
    }
    public function testSplDetect323()
    {
        $this->assertEquals('N-Клотильда', trim($this->object->getFullNameFormat('Клотильда')).'-Клотильда');
    }
    public function testSplDetect324()
    {
        $this->assertEquals('N-Констанция', trim($this->object->getFullNameFormat('Констанция')).'-Констанция');
    }
    public function testSplDetect325()
    {
        $this->assertEquals('N-Консуэло', trim($this->object->getFullNameFormat('Консуэло')).'-Консуэло');
    }
    public function testSplDetect326()
    {
        $this->assertEquals('N-Корнелия', trim($this->object->getFullNameFormat('Корнелия')).'-Корнелия');
    }
    public function testSplDetect327()
    {
        $this->assertEquals('N-Кристина', trim($this->object->getFullNameFormat('Кристина')).'-Кристина');
    }
    public function testSplDetect328()
    {
        $this->assertEquals('N-Ксения', trim($this->object->getFullNameFormat('Ксения')).'-Ксения');
    }
    public function testSplDetect329()
    {
        $this->assertEquals('N-Лада', trim($this->object->getFullNameFormat('Лада')).'-Лада');
    }
    public function testSplDetect330()
    {
        $this->assertEquals('N-Лариса', trim($this->object->getFullNameFormat('Лариса')).'-Лариса');
    }
    public function testSplDetect331()
    {
        $this->assertEquals('N-Лейла', trim($this->object->getFullNameFormat('Лейла')).'-Лейла');
    }
    public function testSplDetect332()
    {
        $this->assertEquals('N-Леся', trim($this->object->getFullNameFormat('Леся')).'-Леся');
    }
    public function testSplDetect333()
    {
        $this->assertEquals('N-Ливия', trim($this->object->getFullNameFormat('Ливия')).'-Ливия');
    }
    public function testSplDetect334()
    {
        $this->assertEquals('N-Любовь', trim($this->object->getFullNameFormat('Любовь')).'-Любовь');
    }
    public function testSplDetect335()
    {
        $this->assertEquals('N-Людмила', trim($this->object->getFullNameFormat('Людмила')).'-Людмила');
    }
    public function testSplDetect336()
    {
        $this->assertEquals('N-Майя', trim($this->object->getFullNameFormat('Майя')).'-Майя');
    }
    public function testSplDetect337()
    {
        $this->assertEquals('N-Мальвина', trim($this->object->getFullNameFormat('Мальвина')).'-Мальвина');
    }
    public function testSplDetect338()
    {
        $this->assertEquals('N-Марианна', trim($this->object->getFullNameFormat('Марианна')).'-Марианна');
    }
    public function testSplDetect339()
    {
        $this->assertEquals('N-Марина', trim($this->object->getFullNameFormat('Марина')).'-Марина');
    }
    public function testSplDetect340()
    {
        $this->assertEquals('N-Матильда', trim($this->object->getFullNameFormat('Матильда')).'-Матильда');
    }
    public function testSplDetect341()
    {
        $this->assertEquals('N-Мафтуха', trim($this->object->getFullNameFormat('Мафтуха')).'-Мафтуха');
    }
    public function testSplDetect342()
    {
        $this->assertEquals('N-Маша', trim($this->object->getFullNameFormat('Маша')).'-Маша');
    }
    public function testSplDetect343()
    {
        $this->assertEquals('N-Мелания', trim($this->object->getFullNameFormat('Мелания')).'-Мелания');
    }
    public function testSplDetect344()
    {
        $this->assertEquals('N-Милена', trim($this->object->getFullNameFormat('Милена')).'-Милена');
    }
    public function testSplDetect345()
    {
        $this->assertEquals('N-Мэри', trim($this->object->getFullNameFormat('Мэри')).'-Мэри');
    }
    public function testSplDetect346()
    {
        $this->assertEquals('N-Надежда', trim($this->object->getFullNameFormat('Надежда')).'-Надежда');
    }
    public function testSplDetect347()
    {
        $this->assertEquals('N-Наталия', trim($this->object->getFullNameFormat('Наталия')).'-Наталия');
    }
    public function testSplDetect348()
    {
        $this->assertEquals('N-Нина', trim($this->object->getFullNameFormat('Нина')).'-Нина');
    }
    public function testSplDetect349()
    {
        $this->assertEquals('N-Нинель', trim($this->object->getFullNameFormat('Нинель')).'-Нинель');
    }
    public function testSplDetect350()
    {
        $this->assertEquals('N-Нона', trim($this->object->getFullNameFormat('Нона')).'-Нона');
    }
    public function testSplDetect351()
    {
        $this->assertEquals('N-Нонна', trim($this->object->getFullNameFormat('Нонна')).'-Нонна');
    }
    public function testSplDetect352()
    {
        $this->assertEquals('N-Оксана', trim($this->object->getFullNameFormat('Оксана')).'-Оксана');
    }
    public function testSplDetect353()
    {
        $this->assertEquals('N-Октавия', trim($this->object->getFullNameFormat('Октавия')).'-Октавия');
    }
    public function testSplDetect354()
    {
        $this->assertEquals('N-Олеся', trim($this->object->getFullNameFormat('Олеся')).'-Олеся');
    }
    public function testSplDetect355()
    {
        $this->assertEquals('N-Ольга', trim($this->object->getFullNameFormat('Ольга')).'-Ольга');
    }
    public function testSplDetect356()
    {
        $this->assertEquals('N-Павлина', trim($this->object->getFullNameFormat('Павлина')).'-Павлина');
    }
    public function testSplDetect357()
    {
        $this->assertEquals('N-Пелагея', trim($this->object->getFullNameFormat('Пелагея')).'-Пелагея');
    }
    public function testSplDetect358()
    {
        $this->assertEquals('N-Полина', trim($this->object->getFullNameFormat('Полина')).'-Полина');
    }
    public function testSplDetect359()
    {
        $this->assertEquals('N-Прасковья', trim($this->object->getFullNameFormat('Прасковья')).'-Прасковья');
    }
    public function testSplDetect360()
    {
        $this->assertEquals('N-Рада', trim($this->object->getFullNameFormat('Рада')).'-Рада');
    }
    public function testSplDetect361()
    {
        $this->assertEquals('N-Раиса', trim($this->object->getFullNameFormat('Раиса')).'-Раиса');
    }
    public function testSplDetect362()
    {
        $this->assertEquals('N-Ребекка', trim($this->object->getFullNameFormat('Ребекка')).'-Ребекка');
    }
    public function testSplDetect363()
    {
        $this->assertEquals('N-Ревекка', trim($this->object->getFullNameFormat('Ревекка')).'-Ревекка');
    }
    public function testSplDetect364()
    {
        $this->assertEquals('N-Розалия', trim($this->object->getFullNameFormat('Розалия')).'-Розалия');
    }
    public function testSplDetect365()
    {
        $this->assertEquals('N-Розарио', trim($this->object->getFullNameFormat('Розарио')).'-Розарио');
    }
    public function testSplDetect366()
    {
        $this->assertEquals('N-Сара', trim($this->object->getFullNameFormat('Сара')).'-Сара');
    }
    public function testSplDetect367()
    {
        $this->assertEquals('N-Светлана', trim($this->object->getFullNameFormat('Светлана')).'-Светлана');
    }
    public function testSplDetect368()
    {
        $this->assertEquals('N-Снежана', trim($this->object->getFullNameFormat('Снежана')).'-Снежана');
    }
    public function testSplDetect369()
    {
        $this->assertEquals('N-Стелла', trim($this->object->getFullNameFormat('Стелла')).'-Стелла');
    }
    public function testSplDetect370()
    {
        $this->assertEquals('N-Степанида', trim($this->object->getFullNameFormat('Степанида')).'-Степанида');
    }
    public function testSplDetect371()
    {
        $this->assertEquals('N-Стефания', trim($this->object->getFullNameFormat('Стефания')).'-Стефания');
    }
    public function testSplDetect372()
    {
        $this->assertEquals('N-Суламифь', trim($this->object->getFullNameFormat('Суламифь')).'-Суламифь');
    }
    public function testSplDetect373()
    {
        $this->assertEquals('N-Таисия', trim($this->object->getFullNameFormat('Таисия')).'-Таисия');
    }
    public function testSplDetect374()
    {
        $this->assertEquals('N-Тамара', trim($this->object->getFullNameFormat('Тамара')).'-Тамара');
    }
    public function testSplDetect375()
    {
        $this->assertEquals('N-Татьяна', trim($this->object->getFullNameFormat('Татьяна')).'-Татьяна');
    }
    public function testSplDetect376()
    {
        $this->assertEquals('N-Улла', trim($this->object->getFullNameFormat('Улла')).'-Улла');
    }
    public function testSplDetect377()
    {
        $this->assertEquals('N-Ульрика', trim($this->object->getFullNameFormat('Ульрика')).'-Ульрика');
    }
    public function testSplDetect378()
    {
        $this->assertEquals('N-Ульяна', trim($this->object->getFullNameFormat('Ульяна')).'-Ульяна');
    }
    public function testSplDetect379()
    {
        $this->assertEquals('N-Урсула', trim($this->object->getFullNameFormat('Урсула')).'-Урсула');
    }
    public function testSplDetect380()
    {
        $this->assertEquals('N-Фаина', trim($this->object->getFullNameFormat('Фаина')).'-Фаина');
    }
    public function testSplDetect381()
    {
        $this->assertEquals('N-Фатима', trim($this->object->getFullNameFormat('Фатима')).'-Фатима');
    }
    public function testSplDetect382()
    {
        $this->assertEquals('N-Феба', trim($this->object->getFullNameFormat('Феба')).'-Феба');
    }
    public function testSplDetect383()
    {
        $this->assertEquals('N-Феодора', trim($this->object->getFullNameFormat('Феодора')).'-Феодора');
    }
    public function testSplDetect384()
    {
        $this->assertEquals('N-Филлида', trim($this->object->getFullNameFormat('Филлида')).'-Филлида');
    }
    public function testSplDetect385()
    {
        $this->assertEquals('N-Фрида', trim($this->object->getFullNameFormat('Фрида')).'-Фрида');
    }
    public function testSplDetect386()
    {
        $this->assertEquals('N-Фёкла', trim($this->object->getFullNameFormat('Фёкла')).'-Фёкла');
    }
    public function testSplDetect387()
    {
        $this->assertEquals('N-Шарлотта', trim($this->object->getFullNameFormat('Шарлотта')).'-Шарлотта');
    }
    public function testSplDetect388()
    {
        $this->assertEquals('N-Шейла', trim($this->object->getFullNameFormat('Шейла')).'-Шейла');
    }
    public function testSplDetect389()
    {
        $this->assertEquals('N-Шона', trim($this->object->getFullNameFormat('Шона')).'-Шона');
    }
    public function testSplDetect390()
    {
        $this->assertEquals('N-Элеонора', trim($this->object->getFullNameFormat('Элеонора')).'-Элеонора');
    }
    public function testSplDetect391()
    {
        $this->assertEquals('N-Элина', trim($this->object->getFullNameFormat('Элина')).'-Элина');
    }
    public function testSplDetect392()
    {
        $this->assertEquals('N-Эльвира', trim($this->object->getFullNameFormat('Эльвира')).'-Эльвира');
    }
    public function testSplDetect393()
    {
        $this->assertEquals('N-Эми', trim($this->object->getFullNameFormat('Эми')).'-Эми');
    }
    public function testSplDetect394()
    {
        $this->assertEquals('N-Юлианна', trim($this->object->getFullNameFormat('Юлианна')).'-Юлианна');
    }
    public function testSplDetect395()
    {
        $this->assertEquals('N-Юлия', trim($this->object->getFullNameFormat('Юлия')).'-Юлия');
    }
    public function testSplDetect396()
    {
        $this->assertEquals('N-Юния', trim($this->object->getFullNameFormat('Юния')).'-Юния');
    }
    public function testSplDetect397()
    {
        $this->assertEquals('N-Ярослава', trim($this->object->getFullNameFormat('Ярослава')).'-Ярослава');
    }

}