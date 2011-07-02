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
        $this->assertEquals('N-Авдей', $this->object->splitFullName('Авдей').'-Авдей');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('N-Аверьян', $this->object->splitFullName('Аверьян').'-Аверьян');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('N-Адам', $this->object->splitFullName('Адам').'-Адам');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('N-Адриан', $this->object->splitFullName('Адриан').'-Адриан');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('N-Аксён', $this->object->splitFullName('Аксён').'-Аксён');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('N-Александр', $this->object->splitFullName('Александр').'-Александр');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('N-Алексей', $this->object->splitFullName('Алексей').'-Алексей');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('N-Анатолий', $this->object->splitFullName('Анатолий').'-Анатолий');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('N-Аркадий', $this->object->splitFullName('Аркадий').'-Аркадий');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('N-Арсен', $this->object->splitFullName('Арсен').'-Арсен');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('N-Арсений', $this->object->splitFullName('Арсений').'-Арсений');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('N-Артём', $this->object->splitFullName('Артём').'-Артём');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('N-Артемий', $this->object->splitFullName('Артемий').'-Артемий');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('N-Артур', $this->object->splitFullName('Артур').'-Артур');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('N-Архип', $this->object->splitFullName('Архип').'-Архип');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('N-Афанас', $this->object->splitFullName('Афанас').'-Афанас');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('N-Афанасий', $this->object->splitFullName('Афанасий').'-Афанасий');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('N-Андрей', $this->object->splitFullName('Андрей').'-Андрей');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('N-Анисим', $this->object->splitFullName('Анисим').'-Анисим');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('N-Антип', $this->object->splitFullName('Антип').'-Антип');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('N-Антон', $this->object->splitFullName('Антон').'-Антон');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('N-Ануфрий', $this->object->splitFullName('Ануфрий').'-Ануфрий');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('N-Бенедикт', $this->object->splitFullName('Бенедикт').'-Бенедикт');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('N-Богдан', $this->object->splitFullName('Богдан').'-Богдан');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('N-Борис', $this->object->splitFullName('Борис').'-Борис');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('N-Борислав', $this->object->splitFullName('Борислав').'-Борислав');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('N-Бронислав', $this->object->splitFullName('Бронислав').'-Бронислав');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('N-Вадим', $this->object->splitFullName('Вадим').'-Вадим');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('N-Валентин', $this->object->splitFullName('Валентин').'-Валентин');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('N-Валерий', $this->object->splitFullName('Валерий').'-Валерий');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('N-Валериан', $this->object->splitFullName('Валериан').'-Валериан');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('N-Валерьян', $this->object->splitFullName('Валерьян').'-Валерьян');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('N-Василий', $this->object->splitFullName('Василий').'-Василий');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('N-Венедикт', $this->object->splitFullName('Венедикт').'-Венедикт');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('N-Викентий', $this->object->splitFullName('Викентий').'-Викентий');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('N-Виктор', $this->object->splitFullName('Виктор').'-Виктор');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('N-Вилен', $this->object->splitFullName('Вилен').'-Вилен');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('N-Вилор', $this->object->splitFullName('Вилор').'-Вилор');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('N-Виталий', $this->object->splitFullName('Виталий').'-Виталий');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('N-Владилен', $this->object->splitFullName('Владилен').'-Владилен');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('N-Владимир', $this->object->splitFullName('Владимир').'-Владимир');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('N-Владислав', $this->object->splitFullName('Владислав').'-Владислав');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('N-Владлен', $this->object->splitFullName('Владлен').'-Владлен');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('N-Влас', $this->object->splitFullName('Влас').'-Влас');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('N-Всеволод', $this->object->splitFullName('Всеволод').'-Всеволод');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('N-Вячеслав', $this->object->splitFullName('Вячеслав').'-Вячеслав');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('N-Гавриил', $this->object->splitFullName('Гавриил').'-Гавриил');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('N-Гаврила', $this->object->splitFullName('Гаврила').'-Гаврила');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('N-Геннадий', $this->object->splitFullName('Геннадий').'-Геннадий');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('N-Георгий', $this->object->splitFullName('Георгий').'-Георгий');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('N-Герасим', $this->object->splitFullName('Герасим').'-Герасим');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('N-Герман', $this->object->splitFullName('Герман').'-Герман');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('N-Гертруд', $this->object->splitFullName('Гертруд').'-Гертруд');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('N-Глеб', $this->object->splitFullName('Глеб').'-Глеб');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('N-Гордей', $this->object->splitFullName('Гордей').'-Гордей');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('N-Григорий', $this->object->splitFullName('Григорий').'-Григорий');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('N-Гурий', $this->object->splitFullName('Гурий').'-Гурий');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('N-Давид', $this->object->splitFullName('Давид').'-Давид');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('N-Давыд', $this->object->splitFullName('Давыд').'-Давыд');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('N-Даниил', $this->object->splitFullName('Даниил').'-Даниил');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('N-Данила', $this->object->splitFullName('Данила').'-Данила');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('N-Демид', $this->object->splitFullName('Демид').'-Демид');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('N-Демьян', $this->object->splitFullName('Демьян').'-Демьян');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('N-Денис', $this->object->splitFullName('Денис').'-Денис');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('N-Димитрий', $this->object->splitFullName('Димитрий').'-Димитрий');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('N-Дмитрий', $this->object->splitFullName('Дмитрий').'-Дмитрий');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('N-Дорофей', $this->object->splitFullName('Дорофей').'-Дорофей');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('N-Евгений', $this->object->splitFullName('Евгений').'-Евгений');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('N-Евдоким', $this->object->splitFullName('Евдоким').'-Евдоким');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('N-Евсей', $this->object->splitFullName('Евсей').'-Евсей');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('N-Евдоким', $this->object->splitFullName('Евдоким').'-Евдоким');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('N-Евстафий', $this->object->splitFullName('Евстафий').'-Евстафий');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('N-Евстигней', $this->object->splitFullName('Евстигней').'-Евстигней');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('N-Егор', $this->object->splitFullName('Егор').'-Егор');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('N-Елизар', $this->object->splitFullName('Елизар').'-Елизар');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('N-Елисей', $this->object->splitFullName('Елисей').'-Елисей');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('N-Емельян', $this->object->splitFullName('Емельян').'-Емельян');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('N-Еремей', $this->object->splitFullName('Еремей').'-Еремей');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('N-Ермил', $this->object->splitFullName('Ермил').'-Ермил');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('N-Ермолай', $this->object->splitFullName('Ермолай').'-Ермолай');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('N-Ерофей', $this->object->splitFullName('Ерофей').'-Ерофей');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('N-Ефим', $this->object->splitFullName('Ефим').'-Ефим');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('N-Ефимий', $this->object->splitFullName('Ефимий').'-Ефимий');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('N-Ефрем', $this->object->splitFullName('Ефрем').'-Ефрем');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('N-Жан', $this->object->splitFullName('Жан').'-Жан');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('N-Захар', $this->object->splitFullName('Захар').'-Захар');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('N-Захарий', $this->object->splitFullName('Захарий').'-Захарий');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('N-Зиновий', $this->object->splitFullName('Зиновий').'-Зиновий');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('N-Иван', $this->object->splitFullName('Иван').'-Иван');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('N-Игнат', $this->object->splitFullName('Игнат').'-Игнат');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('N-Игнатий', $this->object->splitFullName('Игнатий').'-Игнатий');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('N-Игорь', $this->object->splitFullName('Игорь').'-Игорь');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('N-Измаил', $this->object->splitFullName('Измаил').'-Измаил');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('N-Изот', $this->object->splitFullName('Изот').'-Изот');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('N-Иларион', $this->object->splitFullName('Иларион').'-Иларион');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('N-Илья', $this->object->splitFullName('Илья').'-Илья');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('N-Ильяс', $this->object->splitFullName('Ильяс').'-Ильяс');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('N-Иосип', $this->object->splitFullName('Иосип').'-Иосип');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('N-Иосиф', $this->object->splitFullName('Иосиф').'-Иосиф');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('N-Исаак', $this->object->splitFullName('Исаак').'-Исаак');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('N-Исак', $this->object->splitFullName('Исак').'-Исак');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('N-Исидор', $this->object->splitFullName('Исидор').'-Исидор');
    }
    public function testSplDetect102()
    {
        $this->assertEquals('N-Искандер', $this->object->splitFullName('Искандер').'-Искандер');
    }
    public function testSplDetect103()
    {
        $this->assertEquals('N-Казимир', $this->object->splitFullName('Казимир').'-Казимир');
    }
    public function testSplDetect104()
    {
        $this->assertEquals('N-Калина', $this->object->splitFullName('Калина').'-Калина');
    }
    public function testSplDetect105()
    {
        $this->assertEquals('N-Каллиник', $this->object->splitFullName('Каллиник').'-Каллиник');
    }
    public function testSplDetect106()
    {
        $this->assertEquals('N-Каллистрат', $this->object->splitFullName('Каллистрат').'-Каллистрат');
    }
    public function testSplDetect107()
    {
        $this->assertEquals('N-Капитон', $this->object->splitFullName('Капитон').'-Капитон');
    }
    public function testSplDetect108()
    {
        $this->assertEquals('N-Карп', $this->object->splitFullName('Карп').'-Карп');
    }
    public function testSplDetect109()
    {
        $this->assertEquals('N-Касьян', $this->object->splitFullName('Касьян').'-Касьян');
    }
    public function testSplDetect110()
    {
        $this->assertEquals('N-Кирей', $this->object->splitFullName('Кирей').'-Кирей');
    }
    public function testSplDetect111()
    {
        $this->assertEquals('N-Кирила', $this->object->splitFullName('Кирила').'-Кирила');
    }
    public function testSplDetect112()
    {
        $this->assertEquals('N-Кирилл', $this->object->splitFullName('Кирилл').'-Кирилл');
    }
    public function testSplDetect113()
    {
        $this->assertEquals('N-Клим', $this->object->splitFullName('Клим').'-Клим');
    }
    public function testSplDetect114()
    {
        $this->assertEquals('N-Климент', $this->object->splitFullName('Климент').'-Климент');
    }
    public function testSplDetect115()
    {
        $this->assertEquals('N-Климентий', $this->object->splitFullName('Климентий').'-Климентий');
    }
    public function testSplDetect116()
    {
        $this->assertEquals('N-Кондрат', $this->object->splitFullName('Кондрат').'-Кондрат');
    }
    public function testSplDetect117()
    {
        $this->assertEquals('N-Кондратий', $this->object->splitFullName('Кондратий').'-Кондратий');
    }
    public function testSplDetect118()
    {
        $this->assertEquals('N-Конон', $this->object->splitFullName('Конон').'-Конон');
    }
    public function testSplDetect119()
    {
        $this->assertEquals('N-Константин', $this->object->splitFullName('Константин').'-Константин');
    }
    public function testSplDetect120()
    {
        $this->assertEquals('N-Корней', $this->object->splitFullName('Корней').'-Корней');
    }
    public function testSplDetect121()
    {
        $this->assertEquals('N-Корнелий', $this->object->splitFullName('Корнелий').'-Корнелий');
    }
    public function testSplDetect122()
    {
        $this->assertEquals('N-Ксенофонт', $this->object->splitFullName('Ксенофонт').'-Ксенофонт');
    }
    public function testSplDetect123()
    {
        $this->assertEquals('N-Кузьма', $this->object->splitFullName('Кузьма').'-Кузьма');
    }
    public function testSplDetect124()
    {
        $this->assertEquals('N-Куприян', $this->object->splitFullName('Куприян').'-Куприян');
    }
    public function testSplDetect125()
    {
        $this->assertEquals('N-Лаврентий', $this->object->splitFullName('Лаврентий').'-Лаврентий');
    }
    public function testSplDetect126()
    {
        $this->assertEquals('N-Лазарь', $this->object->splitFullName('Лазарь').'-Лазарь');
    }
    public function testSplDetect127()
    {
        $this->assertEquals('N-Лев', $this->object->splitFullName('Лев').'-Лев');
    }
    public function testSplDetect128()
    {
        $this->assertEquals('N-Левон', $this->object->splitFullName('Левон').'-Левон');
    }
    public function testSplDetect129()
    {
        $this->assertEquals('N-Леонид', $this->object->splitFullName('Леонид').'-Леонид');
    }
    public function testSplDetect130()
    {
        $this->assertEquals('N-Леон', $this->object->splitFullName('Леон').'-Леон');
    }
    public function testSplDetect131()
    {
        $this->assertEquals('N-Леонтий', $this->object->splitFullName('Леонтий').'-Леонтий');
    }
    public function testSplDetect132()
    {
        $this->assertEquals('N-Лука', $this->object->splitFullName('Лука').'-Лука');
    }
    public function testSplDetect133()
    {
        $this->assertEquals('N-Лукьян', $this->object->splitFullName('Лукьян').'-Лукьян');
    }
    public function testSplDetect134()
    {
        $this->assertEquals('N-Людвиг', $this->object->splitFullName('Людвиг').'-Людвиг');
    }
    public function testSplDetect135()
    {
        $this->assertEquals('N-Макар', $this->object->splitFullName('Макар').'-Макар');
    }
    public function testSplDetect136()
    {
        $this->assertEquals('N-Максим', $this->object->splitFullName('Максим').'-Максим');
    }
    public function testSplDetect137()
    {
        $this->assertEquals('N-Марат', $this->object->splitFullName('Марат').'-Марат');
    }
    public function testSplDetect138()
    {
        $this->assertEquals('N-Марк', $this->object->splitFullName('Марк').'-Марк');
    }
    public function testSplDetect139()
    {
        $this->assertEquals('N-Маркел', $this->object->splitFullName('Маркел').'-Маркел');
    }
    public function testSplDetect140()
    {
        $this->assertEquals('N-Мартин', $this->object->splitFullName('Мартин').'-Мартин');
    }
    public function testSplDetect141()
    {
        $this->assertEquals('N-Мартын', $this->object->splitFullName('Мартын').'-Мартын');
    }
    public function testSplDetect142()
    {
        $this->assertEquals('N-Мефодий', $this->object->splitFullName('Мефодий').'-Мефодий');
    }
    public function testSplDetect143()
    {
        $this->assertEquals('N-Мина', $this->object->splitFullName('Мина').'-Мина');
    }
    public function testSplDetect144()
    {
        $this->assertEquals('N-Минай', $this->object->splitFullName('Минай').'-Минай');
    }
    public function testSplDetect145()
    {
        $this->assertEquals('N-Мирон', $this->object->splitFullName('Мирон').'-Мирон');
    }
    public function testSplDetect146()
    {
        $this->assertEquals('N-Митрофан', $this->object->splitFullName('Митрофан').'-Митрофан');
    }
    public function testSplDetect147()
    {
        $this->assertEquals('N-Михаил', $this->object->splitFullName('Михаил').'-Михаил');
    }
    public function testSplDetect148()
    {
        $this->assertEquals('N-Михей', $this->object->splitFullName('Михей').'-Михей');
    }
    public function testSplDetect149()
    {
        $this->assertEquals('N-Модест', $this->object->splitFullName('Модест').'-Модест');
    }
    public function testSplDetect150()
    {
        $this->assertEquals('N-Моисей', $this->object->splitFullName('Моисей').'-Моисей');
    }
    public function testSplDetect151()
    {
        $this->assertEquals('N-Мокей', $this->object->splitFullName('Мокей').'-Мокей');
    }
    public function testSplDetect152()
    {
        $this->assertEquals('N-Мстислав', $this->object->splitFullName('Мстислав').'-Мстислав');
    }
    public function testSplDetect153()
    {
        $this->assertEquals('N-Назар', $this->object->splitFullName('Назар').'-Назар');
    }
    public function testSplDetect154()
    {
        $this->assertEquals('N-Наркис', $this->object->splitFullName('Наркис').'-Наркис');
    }
    public function testSplDetect155()
    {
        $this->assertEquals('N-Нарцис', $this->object->splitFullName('Нарцис').'-Нарцис');
    }
    public function testSplDetect156()
    {
        $this->assertEquals('N-Наум', $this->object->splitFullName('Наум').'-Наум');
    }
    public function testSplDetect157()
    {
        $this->assertEquals('N-Нейл', $this->object->splitFullName('Нейл').'-Нейл');
    }
    public function testSplDetect158()
    {
        $this->assertEquals('N-Нестер', $this->object->splitFullName('Нестер').'-Нестер');
    }
    public function testSplDetect159()
    {
        $this->assertEquals('N-Нестор', $this->object->splitFullName('Нестор').'-Нестор');
    }
    public function testSplDetect160()
    {
        $this->assertEquals('N-Нефёд', $this->object->splitFullName('Нефёд').'-Нефёд');
    }
    public function testSplDetect161()
    {
        $this->assertEquals('N-Никандр', $this->object->splitFullName('Никандр').'-Никандр');
    }
    public function testSplDetect162()
    {
        $this->assertEquals('N-Никанор', $this->object->splitFullName('Никанор').'-Никанор');
    }
    public function testSplDetect163()
    {
        $this->assertEquals('N-Никита', $this->object->splitFullName('Никита').'-Никита');
    }
    public function testSplDetect164()
    {
        $this->assertEquals('N-Никифор', $this->object->splitFullName('Никифор').'-Никифор');
    }
    public function testSplDetect165()
    {
        $this->assertEquals('N-Никодим', $this->object->splitFullName('Никодим').'-Никодим');
    }
    public function testSplDetect166()
    {
        $this->assertEquals('N-Николай', $this->object->splitFullName('Николай').'-Николай');
    }
    public function testSplDetect167()
    {
        $this->assertEquals('N-Никон', $this->object->splitFullName('Никон').'-Никон');
    }
    public function testSplDetect168()
    {
        $this->assertEquals('N-Нил', $this->object->splitFullName('Нил').'-Нил');
    }
    public function testSplDetect169()
    {
        $this->assertEquals('N-Олег', $this->object->splitFullName('Олег').'-Олег');
    }
    public function testSplDetect170()
    {
        $this->assertEquals('N-Онисим', $this->object->splitFullName('Онисим').'-Онисим');
    }
    public function testSplDetect171()
    {
        $this->assertEquals('N-Онуфрий', $this->object->splitFullName('Онуфрий').'-Онуфрий');
    }
    public function testSplDetect172()
    {
        $this->assertEquals('N-Орест', $this->object->splitFullName('Орест').'-Орест');
    }
    public function testSplDetect173()
    {
        $this->assertEquals('N-Осип', $this->object->splitFullName('Осип').'-Осип');
    }
    public function testSplDetect174()
    {
        $this->assertEquals('N-Остап', $this->object->splitFullName('Остап').'-Остап');
    }
    public function testSplDetect175()
    {
        $this->assertEquals('N-Отто', $this->object->splitFullName('Отто').'-Отто');
    }
    public function testSplDetect176()
    {
        $this->assertEquals('N-Павел', $this->object->splitFullName('Павел').'-Павел');
    }
    public function testSplDetect177()
    {
        $this->assertEquals('N-Панкрат', $this->object->splitFullName('Панкрат').'-Панкрат');
    }
    public function testSplDetect178()
    {
        $this->assertEquals('N-Панкратий', $this->object->splitFullName('Панкратий').'-Панкратий');
    }
    public function testSplDetect179()
    {
        $this->assertEquals('N-Пантелей', $this->object->splitFullName('Пантелей').'-Пантелей');
    }
    public function testSplDetect180()
    {
        $this->assertEquals('N-Пантелеймон', $this->object->splitFullName('Пантелеймон').'-Пантелеймон');
    }
    public function testSplDetect181()
    {
        $this->assertEquals('N-Парфён', $this->object->splitFullName('Парфён').'-Парфён');
    }
    public function testSplDetect182()
    {
        $this->assertEquals('N-Парфений', $this->object->splitFullName('Парфений').'-Парфений');
    }
    public function testSplDetect183()
    {
        $this->assertEquals('N-Пётр', $this->object->splitFullName('Пётр').'-Пётр');
    }
    public function testSplDetect184()
    {
        $this->assertEquals('N-Пимен', $this->object->splitFullName('Пимен').'-Пимен');
    }
    public function testSplDetect185()
    {
        $this->assertEquals('N-Платон', $this->object->splitFullName('Платон').'-Платон');
    }
    public function testSplDetect186()
    {
        $this->assertEquals('N-Полиграф', $this->object->splitFullName('Полиграф').'-Полиграф');
    }
    public function testSplDetect187()
    {
        $this->assertEquals('N-Поликарп', $this->object->splitFullName('Поликарп').'-Поликарп');
    }
    public function testSplDetect188()
    {
        $this->assertEquals('N-Порфир', $this->object->splitFullName('Порфир').'-Порфир');
    }
    public function testSplDetect189()
    {
        $this->assertEquals('N-Порфирий', $this->object->splitFullName('Порфирий').'-Порфирий');
    }
    public function testSplDetect190()
    {
        $this->assertEquals('N-Потап', $this->object->splitFullName('Потап').'-Потап');
    }
    public function testSplDetect191()
    {
        $this->assertEquals('N-Прокоп', $this->object->splitFullName('Прокоп').'-Прокоп');
    }
    public function testSplDetect192()
    {
        $this->assertEquals('N-Прокопий', $this->object->splitFullName('Прокопий').'-Прокопий');
    }
    public function testSplDetect193()
    {
        $this->assertEquals('N-Прокофий', $this->object->splitFullName('Прокофий').'-Прокофий');
    }
    public function testSplDetect194()
    {
        $this->assertEquals('N-Прохор', $this->object->splitFullName('Прохор').'-Прохор');
    }
    public function testSplDetect195()
    {
        $this->assertEquals('N-Роберт', $this->object->splitFullName('Роберт').'-Роберт');
    }
    public function testSplDetect196()
    {
        $this->assertEquals('N-Родион', $this->object->splitFullName('Родион').'-Родион');
    }
    public function testSplDetect197()
    {
        $this->assertEquals('N-Роман', $this->object->splitFullName('Роман').'-Роман');
    }
    public function testSplDetect198()
    {
        $this->assertEquals('N-Ростислав', $this->object->splitFullName('Ростислав').'-Ростислав');
    }
    public function testSplDetect199()
    {
        $this->assertEquals('N-Руслан', $this->object->splitFullName('Руслан').'-Руслан');
    }
    public function testSplDetect200()
    {
        $this->assertEquals('N-Савастей', $this->object->splitFullName('Савастей').'-Савастей');
    }
    public function testSplDetect201()
    {
        $this->assertEquals('N-Савва', $this->object->splitFullName('Савва').'-Савва');
    }
    public function testSplDetect202()
    {
        $this->assertEquals('N-Савватий', $this->object->splitFullName('Савватий').'-Савватий');
    }
    public function testSplDetect203()
    {
        $this->assertEquals('N-Савелий', $this->object->splitFullName('Савелий').'-Савелий');
    }
    public function testSplDetect204()
    {
        $this->assertEquals('N-Самсон', $this->object->splitFullName('Самсон').'-Самсон');
    }
    public function testSplDetect205()
    {
        $this->assertEquals('N-Святослав', $this->object->splitFullName('Святослав').'-Святослав');
    }
    public function testSplDetect206()
    {
        $this->assertEquals('N-Семён', $this->object->splitFullName('Семён').'-Семён');
    }
    public function testSplDetect207()
    {
        $this->assertEquals('N-Серафим', $this->object->splitFullName('Серафим').'-Серафим');
    }
    public function testSplDetect208()
    {
        $this->assertEquals('N-Сергей', $this->object->splitFullName('Сергей').'-Сергей');
    }
    public function testSplDetect209()
    {
        $this->assertEquals('N-Сергий', $this->object->splitFullName('Сергий').'-Сергий');
    }
    public function testSplDetect210()
    {
        $this->assertEquals('N-Сидор', $this->object->splitFullName('Сидор').'-Сидор');
    }
    public function testSplDetect211()
    {
        $this->assertEquals('N-Созон', $this->object->splitFullName('Созон').'-Созон');
    }
    public function testSplDetect212()
    {
        $this->assertEquals('N-Созонт', $this->object->splitFullName('Созонт').'-Созонт');
    }
    public function testSplDetect213()
    {
        $this->assertEquals('N-Спиридон', $this->object->splitFullName('Спиридон').'-Спиридон');
    }
    public function testSplDetect214()
    {
        $this->assertEquals('N-Станислав', $this->object->splitFullName('Станислав').'-Станислав');
    }
    public function testSplDetect215()
    {
        $this->assertEquals('N-Степан', $this->object->splitFullName('Степан').'-Степан');
    }
    public function testSplDetect216()
    {
        $this->assertEquals('N-Тарас', $this->object->splitFullName('Тарас').'-Тарас');
    }
    public function testSplDetect217()
    {
        $this->assertEquals('N-Теймураз', $this->object->splitFullName('Теймураз').'-Теймураз');
    }
    public function testSplDetect218()
    {
        $this->assertEquals('N-Терентий', $this->object->splitFullName('Терентий').'-Терентий');
    }
    public function testSplDetect219()
    {
        $this->assertEquals('N-Тимофей', $this->object->splitFullName('Тимофей').'-Тимофей');
    }
    public function testSplDetect220()
    {
        $this->assertEquals('N-Тимур', $this->object->splitFullName('Тимур').'-Тимур');
    }
    public function testSplDetect221()
    {
        $this->assertEquals('N-Тихон', $this->object->splitFullName('Тихон').'-Тихон');
    }
    public function testSplDetect222()
    {
        $this->assertEquals('N-Трифон', $this->object->splitFullName('Трифон').'-Трифон');
    }
    public function testSplDetect223()
    {
        $this->assertEquals('N-Трофим', $this->object->splitFullName('Трофим').'-Трофим');
    }
    public function testSplDetect224()
    {
        $this->assertEquals('N-Устин', $this->object->splitFullName('Устин').'-Устин');
    }
    public function testSplDetect225()
    {
        $this->assertEquals('N-Фадей', $this->object->splitFullName('Фадей').'-Фадей');
    }
    public function testSplDetect226()
    {
        $this->assertEquals('N-Федот', $this->object->splitFullName('Федот').'-Федот');
    }
    public function testSplDetect227()
    {
        $this->assertEquals('N-Феликс', $this->object->splitFullName('Феликс').'-Феликс');
    }
    public function testSplDetect228()
    {
        $this->assertEquals('N-Фёдор', $this->object->splitFullName('Фёдор').'-Фёдор');
    }
    public function testSplDetect229()
    {
        $this->assertEquals('N-Федосий', $this->object->splitFullName('Федосий').'-Федосий');
    }
    public function testSplDetect230()
    {
        $this->assertEquals('N-Феодосий', $this->object->splitFullName('Феодосий').'-Феодосий');
    }
    public function testSplDetect231()
    {
        $this->assertEquals('N-Феоктист', $this->object->splitFullName('Феоктист').'-Феоктист');
    }
    public function testSplDetect232()
    {
        $this->assertEquals('N-Феофан', $this->object->splitFullName('Феофан').'-Феофан');
    }
    public function testSplDetect233()
    {
        $this->assertEquals('N-Филат', $this->object->splitFullName('Филат').'-Филат');
    }
    public function testSplDetect234()
    {
        $this->assertEquals('N-Филимон', $this->object->splitFullName('Филимон').'-Филимон');
    }
    public function testSplDetect235()
    {
        $this->assertEquals('N-Филипп', $this->object->splitFullName('Филипп').'-Филипп');
    }
    public function testSplDetect236()
    {
        $this->assertEquals('N-Фока', $this->object->splitFullName('Фока').'-Фока');
    }
    public function testSplDetect237()
    {
        $this->assertEquals('N-Фома', $this->object->splitFullName('Фома').'-Фома');
    }
    public function testSplDetect238()
    {
        $this->assertEquals('N-Фрол', $this->object->splitFullName('Фрол').'-Фрол');
    }
    public function testSplDetect239()
    {
        $this->assertEquals('N-Харитон', $this->object->splitFullName('Харитон').'-Харитон');
    }
    public function testSplDetect240()
    {
        $this->assertEquals('N-Харлам', $this->object->splitFullName('Харлам').'-Харлам');
    }
    public function testSplDetect241()
    {
        $this->assertEquals('N-Харламп', $this->object->splitFullName('Харламп').'-Харламп');
    }
    public function testSplDetect242()
    {
        $this->assertEquals('N-Харлампий', $this->object->splitFullName('Харлампий').'-Харлампий');
    }
    public function testSplDetect243()
    {
        $this->assertEquals('N-Чеслав', $this->object->splitFullName('Чеслав').'-Чеслав');
    }
    public function testSplDetect244()
    {
        $this->assertEquals('N-Эдгар', $this->object->splitFullName('Эдгар').'-Эдгар');
    }
    public function testSplDetect245()
    {
        $this->assertEquals('N-Эдгард', $this->object->splitFullName('Эдгард').'-Эдгард');
    }
    public function testSplDetect246()
    {
        $this->assertEquals('N-Эдуард', $this->object->splitFullName('Эдуард').'-Эдуард');
    }
    public function testSplDetect247()
    {
        $this->assertEquals('N-Юлиан', $this->object->splitFullName('Юлиан').'-Юлиан');
    }
    public function testSplDetect248()
    {
        $this->assertEquals('N-Юлий', $this->object->splitFullName('Юлий').'-Юлий');
    }
    public function testSplDetect249()
    {
        $this->assertEquals('N-Юрий', $this->object->splitFullName('Юрий').'-Юрий');
    }
    public function testSplDetect250()
    {
        $this->assertEquals('N-Яков', $this->object->splitFullName('Яков').'-Яков');
    }
    public function testSplDetect251()
    {
        $this->assertEquals('N-Ярослав', $this->object->splitFullName('Ярослав').'-Ярослав');
    }
    public function testSplDetect252()
    {
        $this->assertEquals('N-Ян', $this->object->splitFullName('Ян').'-Ян');
    }
    public function testSplDetect253()
    {
        $this->assertEquals('N-Августа', $this->object->splitFullName('Августа').'-Августа');
    }
    public function testSplDetect254()
    {
        $this->assertEquals('N-Авдотья', $this->object->splitFullName('Авдотья').'-Авдотья');
    }
    public function testSplDetect255()
    {
        $this->assertEquals('N-Аврелия', $this->object->splitFullName('Аврелия').'-Аврелия');
    }
    public function testSplDetect256()
    {
        $this->assertEquals('N-Агния', $this->object->splitFullName('Агния').'-Агния');
    }
    public function testSplDetect257()
    {
        $this->assertEquals('N-Аграфена', $this->object->splitFullName('Аграфена').'-Аграфена');
    }
    public function testSplDetect258()
    {
        $this->assertEquals('N-Агриппина', $this->object->splitFullName('Агриппина').'-Агриппина');
    }
    public function testSplDetect259()
    {
        $this->assertEquals('N-Аделаида', $this->object->splitFullName('Аделаида').'-Аделаида');
    }
    public function testSplDetect260()
    {
        $this->assertEquals('N-Аделина', $this->object->splitFullName('Аделина').'-Аделина');
    }
    public function testSplDetect261()
    {
        $this->assertEquals('N-Азиза', $this->object->splitFullName('Азиза').'-Азиза');
    }
    public function testSplDetect262()
    {
        $this->assertEquals('N-Аида', $this->object->splitFullName('Аида').'-Аида');
    }
    public function testSplDetect263()
    {
        $this->assertEquals('N-Александра', $this->object->splitFullName('Александра').'-Александра');
    }
    public function testSplDetect264()
    {
        $this->assertEquals('N-Алина', $this->object->splitFullName('Алина').'-Алина');
    }
    public function testSplDetect265()
    {
        $this->assertEquals('N-Алиса', $this->object->splitFullName('Алиса').'-Алиса');
    }
    public function testSplDetect266()
    {
        $this->assertEquals('N-Алла', $this->object->splitFullName('Алла').'-Алла');
    }
    public function testSplDetect267()
    {
        $this->assertEquals('N-Алсу', $this->object->splitFullName('Алсу').'-Алсу');
    }
    public function testSplDetect268()
    {
        $this->assertEquals('N-Альбина', $this->object->splitFullName('Альбина').'-Альбина');
    }
    public function testSplDetect269()
    {
        $this->assertEquals('N-Алёна', $this->object->splitFullName('Алёна').'-Алёна');
    }
    public function testSplDetect270()
    {
        $this->assertEquals('N-Анастасия', $this->object->splitFullName('Анастасия').'-Анастасия');
    }
    public function testSplDetect271()
    {
        $this->assertEquals('N-Ангелина', $this->object->splitFullName('Ангелина').'-Ангелина');
    }
    public function testSplDetect272()
    {
        $this->assertEquals('N-Анжелика', $this->object->splitFullName('Анжелика').'-Анжелика');
    }
    public function testSplDetect273()
    {
        $this->assertEquals('N-Анисия', $this->object->splitFullName('Анисия').'-Анисия');
    }
    public function testSplDetect274()
    {
        $this->assertEquals('N-Анисья', $this->object->splitFullName('Анисья').'-Анисья');
    }
    public function testSplDetect275()
    {
        $this->assertEquals('N-Анна', $this->object->splitFullName('Анна').'-Анна');
    }
    public function testSplDetect276()
    {
        $this->assertEquals('N-Антонина', $this->object->splitFullName('Антонина').'-Антонина');
    }
    public function testSplDetect277()
    {
        $this->assertEquals('N-Анушка', $this->object->splitFullName('Анушка').'-Анушка');
    }
    public function testSplDetect278()
    {
        $this->assertEquals('N-Аполлинария', $this->object->splitFullName('Аполлинария').'-Аполлинария');
    }
    public function testSplDetect279()
    {
        $this->assertEquals('N-Аполлония', $this->object->splitFullName('Аполлония').'-Аполлония');
    }
    public function testSplDetect280()
    {
        $this->assertEquals('N-Арна', $this->object->splitFullName('Арна').'-Арна');
    }
    public function testSplDetect281()
    {
        $this->assertEquals('N-Асель', $this->object->splitFullName('Асель').'-Асель');
    }
    public function testSplDetect282()
    {
        $this->assertEquals('N-Аурика', $this->object->splitFullName('Аурика').'-Аурика');
    }
    public function testSplDetect283()
    {
        $this->assertEquals('N-Аэлита', $this->object->splitFullName('Аэлита').'-Аэлита');
    }
    public function testSplDetect284()
    {
        $this->assertEquals('N-Беата', $this->object->splitFullName('Беата').'-Беата');
    }
    public function testSplDetect285()
    {
        $this->assertEquals('N-Божена', $this->object->splitFullName('Божена').'-Божена');
    }
    public function testSplDetect286()
    {
        $this->assertEquals('N-Валентина', $this->object->splitFullName('Валентина').'-Валентина');
    }
    public function testSplDetect287()
    {
        $this->assertEquals('N-Варвара', $this->object->splitFullName('Варвара').'-Варвара');
    }
    public function testSplDetect288()
    {
        $this->assertEquals('N-Василиса', $this->object->splitFullName('Василиса').'-Василиса');
    }
    public function testSplDetect289()
    {
        $this->assertEquals('N-Вера', $this->object->splitFullName('Вера').'-Вера');
    }
    public function testSplDetect290()
    {
        $this->assertEquals('N-Вероника', $this->object->splitFullName('Вероника').'-Вероника');
    }
    public function testSplDetect291()
    {
        $this->assertEquals('N-Виктория', $this->object->splitFullName('Виктория').'-Виктория');
    }
    public function testSplDetect292()
    {
        $this->assertEquals('N-Виолетта', $this->object->splitFullName('Виолетта').'-Виолетта');
    }
    public function testSplDetect293()
    {
        $this->assertEquals('N-Владислава', $this->object->splitFullName('Владислава').'-Владислава');
    }
    public function testSplDetect294()
    {
        $this->assertEquals('N-Галина', $this->object->splitFullName('Галина').'-Галина');
    }
    public function testSplDetect295()
    {
        $this->assertEquals('N-Геннадия', $this->object->splitFullName('Геннадия').'-Геннадия');
    }
    public function testSplDetect296()
    {
        $this->assertEquals('N-Глафира', $this->object->splitFullName('Глафира').'-Глафира');
    }
    public function testSplDetect297()
    {
        $this->assertEquals('N-Дария', $this->object->splitFullName('Дария').'-Дария');
    }
    public function testSplDetect298()
    {
        $this->assertEquals('N-Дарья', $this->object->splitFullName('Дарья').'-Дарья');
    }
    public function testSplDetect299()
    {
        $this->assertEquals('N-Диана', $this->object->splitFullName('Диана').'-Диана');
    }
    public function testSplDetect300()
    {
        $this->assertEquals('N-Ева', $this->object->splitFullName('Ева').'-Ева');
    }
    public function testSplDetect301()
    {
        $this->assertEquals('N-Евгения', $this->object->splitFullName('Евгения').'-Евгения');
    }
    public function testSplDetect302()
    {
        $this->assertEquals('N-Евдокия', $this->object->splitFullName('Евдокия').'-Евдокия');
    }
    public function testSplDetect303()
    {
        $this->assertEquals('N-Евфросиния', $this->object->splitFullName('Евфросиния').'-Евфросиния');
    }
    public function testSplDetect304()
    {
        $this->assertEquals('N-Екатерина', $this->object->splitFullName('Екатерина').'-Екатерина');
    }
    public function testSplDetect305()
    {
        $this->assertEquals('N-Елена', $this->object->splitFullName('Елена').'-Елена');
    }
    public function testSplDetect306()
    {
        $this->assertEquals('N-Елизавета', $this->object->splitFullName('Елизавета').'-Елизавета');
    }
    public function testSplDetect307()
    {
        $this->assertEquals('N-Жанна', $this->object->splitFullName('Жанна').'-Жанна');
    }
    public function testSplDetect308()
    {
        $this->assertEquals('N-Зинаида', $this->object->splitFullName('Зинаида').'-Зинаида');
    }
    public function testSplDetect309()
    {
        $this->assertEquals('N-Зоя', $this->object->splitFullName('Зоя').'-Зоя');
    }
    public function testSplDetect310()
    {
        $this->assertEquals('N-Зульфия', $this->object->splitFullName('Зульфия').'-Зульфия');
    }
    public function testSplDetect311()
    {
        $this->assertEquals('N-Изабелла', $this->object->splitFullName('Изабелла').'-Изабелла');
    }
    public function testSplDetect312()
    {
        $this->assertEquals('N-Иляна', $this->object->splitFullName('Иляна').'-Иляна');
    }
    public function testSplDetect313()
    {
        $this->assertEquals('N-Инна', $this->object->splitFullName('Инна').'-Инна');
    }
    public function testSplDetect314()
    {
        $this->assertEquals('N-Иоанна', $this->object->splitFullName('Иоанна').'-Иоанна');
    }
    public function testSplDetect315()
    {
        $this->assertEquals('N-Иулия', $this->object->splitFullName('Иулия').'-Иулия');
    }
    public function testSplDetect316()
    {
        $this->assertEquals('N-Иуния', $this->object->splitFullName('Иуния').'-Иуния');
    }
    public function testSplDetect317()
    {
        $this->assertEquals('N-Камола', $this->object->splitFullName('Камола').'-Камола');
    }
    public function testSplDetect318()
    {
        $this->assertEquals('N-Карина', $this->object->splitFullName('Карина').'-Карина');
    }
    public function testSplDetect319()
    {
        $this->assertEquals('N-Каролина', $this->object->splitFullName('Каролина').'-Каролина');
    }
    public function testSplDetect320()
    {
        $this->assertEquals('N-Кира', $this->object->splitFullName('Кира').'-Кира');
    }
    public function testSplDetect321()
    {
        $this->assertEquals('N-Клара', $this->object->splitFullName('Клара').'-Клара');
    }
    public function testSplDetect322()
    {
        $this->assertEquals('N-Клеопатра', $this->object->splitFullName('Клеопатра').'-Клеопатра');
    }
    public function testSplDetect323()
    {
        $this->assertEquals('N-Клотильда', $this->object->splitFullName('Клотильда').'-Клотильда');
    }
    public function testSplDetect324()
    {
        $this->assertEquals('N-Констанция', $this->object->splitFullName('Констанция').'-Констанция');
    }
    public function testSplDetect325()
    {
        $this->assertEquals('N-Консуэло', $this->object->splitFullName('Консуэло').'-Консуэло');
    }
    public function testSplDetect326()
    {
        $this->assertEquals('N-Корнелия', $this->object->splitFullName('Корнелия').'-Корнелия');
    }
    public function testSplDetect327()
    {
        $this->assertEquals('N-Кристина', $this->object->splitFullName('Кристина').'-Кристина');
    }
    public function testSplDetect328()
    {
        $this->assertEquals('N-Ксения', $this->object->splitFullName('Ксения').'-Ксения');
    }
    public function testSplDetect329()
    {
        $this->assertEquals('N-Лада', $this->object->splitFullName('Лада').'-Лада');
    }
    public function testSplDetect330()
    {
        $this->assertEquals('N-Лариса', $this->object->splitFullName('Лариса').'-Лариса');
    }
    public function testSplDetect331()
    {
        $this->assertEquals('N-Лейла', $this->object->splitFullName('Лейла').'-Лейла');
    }
    public function testSplDetect332()
    {
        $this->assertEquals('N-Леся', $this->object->splitFullName('Леся').'-Леся');
    }
    public function testSplDetect333()
    {
        $this->assertEquals('N-Ливия', $this->object->splitFullName('Ливия').'-Ливия');
    }
    public function testSplDetect334()
    {
        $this->assertEquals('N-Любовь', $this->object->splitFullName('Любовь').'-Любовь');
    }
    public function testSplDetect335()
    {
        $this->assertEquals('N-Людмила', $this->object->splitFullName('Людмила').'-Людмила');
    }
    public function testSplDetect336()
    {
        $this->assertEquals('N-Майя', $this->object->splitFullName('Майя').'-Майя');
    }
    public function testSplDetect337()
    {
        $this->assertEquals('N-Мальвина', $this->object->splitFullName('Мальвина').'-Мальвина');
    }
    public function testSplDetect338()
    {
        $this->assertEquals('N-Марианна', $this->object->splitFullName('Марианна').'-Марианна');
    }
    public function testSplDetect339()
    {
        $this->assertEquals('N-Марина', $this->object->splitFullName('Марина').'-Марина');
    }
    public function testSplDetect340()
    {
        $this->assertEquals('N-Матильда', $this->object->splitFullName('Матильда').'-Матильда');
    }
    public function testSplDetect341()
    {
        $this->assertEquals('N-Мафтуха', $this->object->splitFullName('Мафтуха').'-Мафтуха');
    }
    public function testSplDetect342()
    {
        $this->assertEquals('N-Маша', $this->object->splitFullName('Маша').'-Маша');
    }
    public function testSplDetect343()
    {
        $this->assertEquals('N-Мелания', $this->object->splitFullName('Мелания').'-Мелания');
    }
    public function testSplDetect344()
    {
        $this->assertEquals('N-Милена', $this->object->splitFullName('Милена').'-Милена');
    }
    public function testSplDetect345()
    {
        $this->assertEquals('N-Мэри', $this->object->splitFullName('Мэри').'-Мэри');
    }
    public function testSplDetect346()
    {
        $this->assertEquals('N-Надежда', $this->object->splitFullName('Надежда').'-Надежда');
    }
    public function testSplDetect347()
    {
        $this->assertEquals('N-Наталия', $this->object->splitFullName('Наталия').'-Наталия');
    }
    public function testSplDetect348()
    {
        $this->assertEquals('N-Нина', $this->object->splitFullName('Нина').'-Нина');
    }
    public function testSplDetect349()
    {
        $this->assertEquals('N-Нинель', $this->object->splitFullName('Нинель').'-Нинель');
    }
    public function testSplDetect350()
    {
        $this->assertEquals('N-Нона', $this->object->splitFullName('Нона').'-Нона');
    }
    public function testSplDetect351()
    {
        $this->assertEquals('N-Нонна', $this->object->splitFullName('Нонна').'-Нонна');
    }
    public function testSplDetect352()
    {
        $this->assertEquals('N-Оксана', $this->object->splitFullName('Оксана').'-Оксана');
    }
    public function testSplDetect353()
    {
        $this->assertEquals('N-Октавия', $this->object->splitFullName('Октавия').'-Октавия');
    }
    public function testSplDetect354()
    {
        $this->assertEquals('N-Олеся', $this->object->splitFullName('Олеся').'-Олеся');
    }
    public function testSplDetect355()
    {
        $this->assertEquals('N-Ольга', $this->object->splitFullName('Ольга').'-Ольга');
    }
    public function testSplDetect356()
    {
        $this->assertEquals('N-Павлина', $this->object->splitFullName('Павлина').'-Павлина');
    }
    public function testSplDetect357()
    {
        $this->assertEquals('N-Пелагея', $this->object->splitFullName('Пелагея').'-Пелагея');
    }
    public function testSplDetect358()
    {
        $this->assertEquals('N-Полина', $this->object->splitFullName('Полина').'-Полина');
    }
    public function testSplDetect359()
    {
        $this->assertEquals('N-Прасковья', $this->object->splitFullName('Прасковья').'-Прасковья');
    }
    public function testSplDetect360()
    {
        $this->assertEquals('N-Рада', $this->object->splitFullName('Рада').'-Рада');
    }
    public function testSplDetect361()
    {
        $this->assertEquals('N-Раиса', $this->object->splitFullName('Раиса').'-Раиса');
    }
    public function testSplDetect362()
    {
        $this->assertEquals('N-Ребекка', $this->object->splitFullName('Ребекка').'-Ребекка');
    }
    public function testSplDetect363()
    {
        $this->assertEquals('N-Ревекка', $this->object->splitFullName('Ревекка').'-Ревекка');
    }
    public function testSplDetect364()
    {
        $this->assertEquals('N-Розалия', $this->object->splitFullName('Розалия').'-Розалия');
    }
    public function testSplDetect365()
    {
        $this->assertEquals('N-Розарио', $this->object->splitFullName('Розарио').'-Розарио');
    }
    public function testSplDetect366()
    {
        $this->assertEquals('N-Сара', $this->object->splitFullName('Сара').'-Сара');
    }
    public function testSplDetect367()
    {
        $this->assertEquals('N-Светлана', $this->object->splitFullName('Светлана').'-Светлана');
    }
    public function testSplDetect368()
    {
        $this->assertEquals('N-Снежана', $this->object->splitFullName('Снежана').'-Снежана');
    }
    public function testSplDetect369()
    {
        $this->assertEquals('N-Стелла', $this->object->splitFullName('Стелла').'-Стелла');
    }
    public function testSplDetect370()
    {
        $this->assertEquals('N-Степанида', $this->object->splitFullName('Степанида').'-Степанида');
    }
    public function testSplDetect371()
    {
        $this->assertEquals('N-Стефания', $this->object->splitFullName('Стефания').'-Стефания');
    }
    public function testSplDetect372()
    {
        $this->assertEquals('N-Суламифь', $this->object->splitFullName('Суламифь').'-Суламифь');
    }
    public function testSplDetect373()
    {
        $this->assertEquals('N-Таисия', $this->object->splitFullName('Таисия').'-Таисия');
    }
    public function testSplDetect374()
    {
        $this->assertEquals('N-Тамара', $this->object->splitFullName('Тамара').'-Тамара');
    }
    public function testSplDetect375()
    {
        $this->assertEquals('N-Татьяна', $this->object->splitFullName('Татьяна').'-Татьяна');
    }
    public function testSplDetect376()
    {
        $this->assertEquals('N-Улла', $this->object->splitFullName('Улла').'-Улла');
    }
    public function testSplDetect377()
    {
        $this->assertEquals('N-Ульрика', $this->object->splitFullName('Ульрика').'-Ульрика');
    }
    public function testSplDetect378()
    {
        $this->assertEquals('N-Ульяна', $this->object->splitFullName('Ульяна').'-Ульяна');
    }
    public function testSplDetect379()
    {
        $this->assertEquals('N-Урсула', $this->object->splitFullName('Урсула').'-Урсула');
    }
    public function testSplDetect380()
    {
        $this->assertEquals('N-Фаина', $this->object->splitFullName('Фаина').'-Фаина');
    }
    public function testSplDetect381()
    {
        $this->assertEquals('N-Фатима', $this->object->splitFullName('Фатима').'-Фатима');
    }
    public function testSplDetect382()
    {
        $this->assertEquals('N-Феба', $this->object->splitFullName('Феба').'-Феба');
    }
    public function testSplDetect383()
    {
        $this->assertEquals('N-Феодора', $this->object->splitFullName('Феодора').'-Феодора');
    }
    public function testSplDetect384()
    {
        $this->assertEquals('N-Филлида', $this->object->splitFullName('Филлида').'-Филлида');
    }
    public function testSplDetect385()
    {
        $this->assertEquals('N-Фрида', $this->object->splitFullName('Фрида').'-Фрида');
    }
    public function testSplDetect386()
    {
        $this->assertEquals('N-Фёкла', $this->object->splitFullName('Фёкла').'-Фёкла');
    }
    public function testSplDetect387()
    {
        $this->assertEquals('N-Шарлотта', $this->object->splitFullName('Шарлотта').'-Шарлотта');
    }
    public function testSplDetect388()
    {
        $this->assertEquals('N-Шейла', $this->object->splitFullName('Шейла').'-Шейла');
    }
    public function testSplDetect389()
    {
        $this->assertEquals('N-Шона', $this->object->splitFullName('Шона').'-Шона');
    }
    public function testSplDetect390()
    {
        $this->assertEquals('N-Элеонора', $this->object->splitFullName('Элеонора').'-Элеонора');
    }
    public function testSplDetect391()
    {
        $this->assertEquals('N-Элина', $this->object->splitFullName('Элина').'-Элина');
    }
    public function testSplDetect392()
    {
        $this->assertEquals('N-Эльвира', $this->object->splitFullName('Эльвира').'-Эльвира');
    }
    public function testSplDetect393()
    {
        $this->assertEquals('N-Эми', $this->object->splitFullName('Эми').'-Эми');
    }
    public function testSplDetect394()
    {
        $this->assertEquals('N-Юлианна', $this->object->splitFullName('Юлианна').'-Юлианна');
    }
    public function testSplDetect395()
    {
        $this->assertEquals('N-Юлия', $this->object->splitFullName('Юлия').'-Юлия');
    }
    public function testSplDetect396()
    {
        $this->assertEquals('N-Юния', $this->object->splitFullName('Юния').'-Юния');
    }
    public function testSplDetect397()
    {
        $this->assertEquals('N-Ярослава', $this->object->splitFullName('Ярослава').'-Ярослава');
    }

}