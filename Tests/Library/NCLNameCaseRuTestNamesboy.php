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


    public function testNameMan0()
    {
        $this->object->setFirstName('Авдей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авдей,Авдея,Авдею,Авдея,Авдеем,Авдее'), $this->object->getFirstNameCase());
    }
    public function testNameMan1()
    {
        $this->object->setFirstName('Аверьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аверьян,Аверьяна,Аверьяну,Аверьяна,Аверьяном,Аверьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan2()
    {
        $this->object->setFirstName('Адам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адам,Адама,Адаму,Адама,Адамом,Адаме'), $this->object->getFirstNameCase());
    }
    public function testNameMan3()
    {
        $this->object->setFirstName('Адриан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адриан,Адриана,Адриану,Адриана,Адрианом,Адриане'), $this->object->getFirstNameCase());
    }
    public function testNameMan4()
    {
        $this->object->setFirstName('Аксен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аксен,Аксена,Аксену,Аксена,Аксеном,Аксене'), $this->object->getFirstNameCase());
    }
    public function testNameMan5()
    {
        $this->object->setFirstName('Александр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александр,Александра,Александру,Александра,Александром,Александре'), $this->object->getFirstNameCase());
    }
    public function testNameMan6()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексей,Алексея,Алексею,Алексея,Алексеем,Алексее'), $this->object->getFirstNameCase());
    }
    public function testNameMan7()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатолий,Анатолия,Анатолию,Анатолия,Анатолием,Анатолии'), $this->object->getFirstNameCase());
    }
    public function testNameMan8()
    {
        $this->object->setFirstName('Аркадий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадий,Аркадия,Аркадию,Аркадия,Аркадием,Аркадии'), $this->object->getFirstNameCase());
    }
    public function testNameMan9()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсен,Арсена,Арсену,Арсена,Арсеном,Арсене'), $this->object->getFirstNameCase());
    }
    public function testNameMan10()
    {
        $this->object->setFirstName('Арсений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсений,Арсения,Арсению,Арсения,Арсением,Арсении'), $this->object->getFirstNameCase());
    }
    public function testNameMan11()
    {
        $this->object->setFirstName('Артем');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артем,Артема,Артему,Артема,Артемом,Артеме'), $this->object->getFirstNameCase());
    }
    public function testNameMan12()
    {
        $this->object->setFirstName('Артемий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артемий,Артемия,Артемию,Артемия,Артемием,Артемии'), $this->object->getFirstNameCase());
    }
    public function testNameMan13()
    {
        $this->object->setFirstName('Артур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артур,Артура,Артуру,Артура,Артуром,Артуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan14()
    {
        $this->object->setFirstName('Архип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Архип,Архипа,Архипу,Архипа,Архипом,Архипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan15()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанас,Афанаса,Афанасу,Афанаса,Афанасом,Афанасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan16()
    {
        $this->object->setFirstName('Афанасий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанасий,Афанасия,Афанасию,Афанасия,Афанасием,Афанасии'), $this->object->getFirstNameCase());
    }
    public function testNameMan17()
    {
        $this->object->setFirstName('Андрей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрей,Андрея,Андрею,Андрея,Андреем,Андрее'), $this->object->getFirstNameCase());
    }
    public function testNameMan18()
    {
        $this->object->setFirstName('Анисим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анисим,Анисима,Анисиму,Анисима,Анисимом,Анисиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan19()
    {
        $this->object->setFirstName('Антип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антип,Антипа,Антипу,Антипа,Антипом,Антипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan20()
    {
        $this->object->setFirstName('Антон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антон,Антона,Антону,Антона,Антоном,Антоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan21()
    {
        $this->object->setFirstName('Ануфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ануфрий,Ануфрия,Ануфрию,Ануфрия,Ануфрием,Ануфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan22()
    {
        $this->object->setFirstName('Бенедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бенедикт,Бенедикта,Бенедикту,Бенедикта,Бенедиктом,Бенедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan23()
    {
        $this->object->setFirstName('Богдан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богдан,Богдана,Богдану,Богдана,Богданом,Богдане'), $this->object->getFirstNameCase());
    }
    public function testNameMan24()
    {
        $this->object->setFirstName('Борис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борис,Бориса,Борису,Бориса,Борисом,Борисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan25()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславу,Борислава,Бориславом,Бориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan26()
    {
        $this->object->setFirstName('Бронислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бронислав,Бронислава,Брониславу,Бронислава,Брониславом,Брониславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan27()
    {
        $this->object->setFirstName('Вадим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вадим,Вадима,Вадиму,Вадима,Вадимом,Вадиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan28()
    {
        $this->object->setFirstName('Валентин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентин,Валентина,Валентину,Валентина,Валентином,Валентине'), $this->object->getFirstNameCase());
    }
    public function testNameMan29()
    {
        $this->object->setFirstName('Валерий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерий,Валерия,Валерию,Валерия,Валерием,Валерии'), $this->object->getFirstNameCase());
    }
    public function testNameMan30()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валериан,Валериана,Валериану,Валериана,Валерианом,Валериане'), $this->object->getFirstNameCase());
    }
    public function testNameMan31()
    {
        $this->object->setFirstName('Валерьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьян,Валерьяна,Валерьяну,Валерьяна,Валерьяном,Валерьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan32()
    {
        $this->object->setFirstName('Василий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Василий,Василия,Василию,Василия,Василием,Василии'), $this->object->getFirstNameCase());
    }
    public function testNameMan33()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Венедикт,Венедикта,Венедикту,Венедикта,Венедиктом,Венедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan34()
    {
        $this->object->setFirstName('Викентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викентий,Викентия,Викентию,Викентия,Викентием,Викентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan35()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Виктор,Виктора,Виктору,Виктора,Виктором,Викторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan36()
    {
        $this->object->setFirstName('Вилен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилен,Вилена,Вилену,Вилена,Виленом,Вилене'), $this->object->getFirstNameCase());
    }
    public function testNameMan37()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилор,Вилора,Вилору,Вилора,Вилором,Вилоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan38()
    {
        $this->object->setFirstName('Виталий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Виталий,Виталия,Виталию,Виталия,Виталием,Виталии'), $this->object->getFirstNameCase());
    }
    public function testNameMan39()
    {
        $this->object->setFirstName('Владилен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владилен,Владилена,Владилену,Владилена,Владиленом,Владилене'), $this->object->getFirstNameCase());
    }
    public function testNameMan40()
    {
        $this->object->setFirstName('Владимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимир,Владимира,Владимиру,Владимира,Владимиром,Владимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan41()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславу,Владислава,Владиславом,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan42()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владлен,Владлена,Владлену,Владлена,Владленом,Владлене'), $this->object->getFirstNameCase());
    }
    public function testNameMan43()
    {
        $this->object->setFirstName('Влас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Влас,Власа,Власу,Власа,Власом,Власе'), $this->object->getFirstNameCase());
    }
    public function testNameMan44()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Всеволод,Всеволода,Всеволоду,Всеволода,Всеволодом,Всеволоде'), $this->object->getFirstNameCase());
    }
    public function testNameMan45()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеслав,Вячеслава,Вячеславу,Вячеслава,Вячеславом,Вячеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan46()
    {
        $this->object->setFirstName('Гавриил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гавриил,Гавриила,Гавриилу,Гавриила,Гавриилом,Гаврииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan47()
    {
        $this->object->setFirstName('Гаврила');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гаврила,Гаврилы,Гавриле,Гаврилу,Гаврилой,Гавриле'), $this->object->getFirstNameCase());
    }
    public function testNameMan48()
    {
        $this->object->setFirstName('Геннадий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Геннадий,Геннадия,Геннадию,Геннадия,Геннадием,Геннадии'), $this->object->getFirstNameCase());
    }
    public function testNameMan49()
    {
        $this->object->setFirstName('Георгий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгий,Георгия,Георгию,Георгия,Георгием,Георгии'), $this->object->getFirstNameCase());
    }
    public function testNameMan50()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герасим,Герасима,Герасиму,Герасима,Герасимом,Герасиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan51()
    {
        $this->object->setFirstName('Герман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герман,Германа,Герману,Германа,Германом,Германе'), $this->object->getFirstNameCase());
    }
    public function testNameMan52()
    {
        $this->object->setFirstName('Глеб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Глеб,Глеба,Глебу,Глеба,Глебом,Глебе'), $this->object->getFirstNameCase());
    }
    public function testNameMan53()
    {
        $this->object->setFirstName('Гордей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордей,Гордея,Гордею,Гордея,Гордеем,Гордее'), $this->object->getFirstNameCase());
    }
    public function testNameMan54()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорий,Григория,Григорию,Григория,Григорием,Григории'), $this->object->getFirstNameCase());
    }
    public function testNameMan55()
    {
        $this->object->setFirstName('Гурий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гурий,Гурия,Гурию,Гурия,Гурием,Гурии'), $this->object->getFirstNameCase());
    }
    public function testNameMan56()
    {
        $this->object->setFirstName('Давид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давид,Давида,Давиду,Давида,Давидом,Давиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan57()
    {
        $this->object->setFirstName('Давыд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давыд,Давыда,Давыду,Давыда,Давыдом,Давыде'), $this->object->getFirstNameCase());
    }
    public function testNameMan58()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Даниил,Даниила,Даниилу,Даниила,Даниилом,Данииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan59()
    {
        $this->object->setFirstName('Данила');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данила,Данилы,Даниле,Данилу,Данилой,Даниле'), $this->object->getFirstNameCase());
    }
    public function testNameMan60()
    {
        $this->object->setFirstName('Демид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демид,Демида,Демиду,Демида,Демидом,Демиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan61()
    {
        $this->object->setFirstName('Демьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демьян,Демьяна,Демьяну,Демьяна,Демьяном,Демьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan62()
    {
        $this->object->setFirstName('Денис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Денис,Дениса,Денису,Дениса,Денисом,Денисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan63()
    {
        $this->object->setFirstName('Димитрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Димитрий,Димитрия,Димитрию,Димитрия,Димитрием,Димитрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan64()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитрий,Дмитрия,Дмитрию,Дмитрия,Дмитрием,Дмитрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan65()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорофей,Дорофея,Дорофею,Дорофея,Дорофеем,Дорофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan66()
    {
        $this->object->setFirstName('Евгений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгений,Евгения,Евгению,Евгения,Евгением,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameMan67()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евдоким,Евдокима,Евдокиму,Евдокима,Евдокимом,Евдокиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan68()
    {
        $this->object->setFirstName('Евсей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евсей,Евсея,Евсею,Евсея,Евсеем,Евсее'), $this->object->getFirstNameCase());
    }
    public function testNameMan69()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евдоким,Евдокима,Евдокиму,Евдокима,Евдокимом,Евдокиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan70()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евстафий,Евстафия,Евстафию,Евстафия,Евстафием,Евстафии'), $this->object->getFirstNameCase());
    }
    public function testNameMan71()
    {
        $this->object->setFirstName('Евстигней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евстигней,Евстигнея,Евстигнею,Евстигнея,Евстигнеем,Евстигнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan72()
    {
        $this->object->setFirstName('Егор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Егор,Егора,Егору,Егора,Егором,Егоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan73()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елизар,Елизара,Елизару,Елизара,Елизаром,Елизаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan74()
    {
        $this->object->setFirstName('Елисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елисей,Елисея,Елисею,Елисея,Елисеем,Елисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan75()
    {
        $this->object->setFirstName('Емельян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Емельян,Емельяна,Емельяну,Емельяна,Емельяном,Емельяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan76()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan77()
    {
        $this->object->setFirstName('Ермил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермил,Ермила,Ермилу,Ермила,Ермилом,Ермиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan78()
    {
        $this->object->setFirstName('Ермолай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермолай,Ермолая,Ермолаю,Ермолая,Ермолаем,Ермолае'), $this->object->getFirstNameCase());
    }
    public function testNameMan79()
    {
        $this->object->setFirstName('Ерофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ерофей,Ерофея,Ерофею,Ерофея,Ерофеем,Ерофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan80()
    {
        $this->object->setFirstName('Ефим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефим,Ефима,Ефиму,Ефима,Ефимом,Ефиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan81()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимий,Ефимия,Ефимию,Ефимия,Ефимием,Ефимии'), $this->object->getFirstNameCase());
    }
    public function testNameMan82()
    {
        $this->object->setFirstName('Ефрем');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефрем,Ефрема,Ефрему,Ефрема,Ефремом,Ефреме'), $this->object->getFirstNameCase());
    }
    public function testNameMan83()
    {
        $this->object->setFirstName('Жан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жан,Жана,Жану,Жана,Жаном,Жане'), $this->object->getFirstNameCase());
    }
    public function testNameMan84()
    {
        $this->object->setFirstName('Захар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захар,Захара,Захару,Захара,Захаром,Захаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan85()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захарий,Захария,Захарию,Захария,Захарием,Захарии'), $this->object->getFirstNameCase());
    }
    public function testNameMan86()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зиновий,Зиновия,Зиновию,Зиновия,Зиновием,Зиновии'), $this->object->getFirstNameCase());
    }
    public function testNameMan87()
    {
        $this->object->setFirstName('Иван');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иван,Ивана,Ивану,Ивана,Иваном,Иване'), $this->object->getFirstNameCase());
    }
    public function testNameMan88()
    {
        $this->object->setFirstName('Игнатий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнатий,Игнатия,Игнатию,Игнатия,Игнатием,Игнатии'), $this->object->getFirstNameCase());
    }
    public function testNameMan89()
    {
        $this->object->setFirstName('Игорь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игорь,Игоря,Игорю,Игоря,Игорем,Игоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan90()
    {
        $this->object->setFirstName('Измаил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Измаил,Измаила,Измаилу,Измаила,Измаилом,Измаиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan91()
    {
        $this->object->setFirstName('Изот');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Изот,Изота,Изоту,Изота,Изотом,Изоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan92()
    {
        $this->object->setFirstName('Иларион');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иларион,Илариона,Илариону,Илариона,Иларионом,Иларионе'), $this->object->getFirstNameCase());
    }
    public function testNameMan93()
    {
        $this->object->setFirstName('Илья');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Илья,Ильи,Илье,Илью,Ильей,Илье'), $this->object->getFirstNameCase());
    }
    public function testNameMan94()
    {
        $this->object->setFirstName('Ильяс');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильяс,Ильяса,Ильясу,Ильяса,Ильясом,Ильясе'), $this->object->getFirstNameCase());
    }
    public function testNameMan95()
    {
        $this->object->setFirstName('Иосип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосип,Иосипа,Иосипу,Иосипа,Иосипом,Иосипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan96()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосиф,Иосифа,Иосифу,Иосифа,Иосифом,Иосифе'), $this->object->getFirstNameCase());
    }
    public function testNameMan97()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исаак,Исаака,Исааку,Исаака,Исааком,Исааке'), $this->object->getFirstNameCase());
    }
    public function testNameMan98()
    {
        $this->object->setFirstName('Исак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исак,Исака,Исаку,Исака,Исаком,Исаке'), $this->object->getFirstNameCase());
    }
    public function testNameMan99()
    {
        $this->object->setFirstName('Исидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исидор,Исидора,Исидору,Исидора,Исидором,Исидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan100()
    {
        $this->object->setFirstName('Искандер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Искандер,Искандера,Искандеру,Искандера,Искандером,Искандере'), $this->object->getFirstNameCase());
    }
    public function testNameMan101()
    {
        $this->object->setFirstName('Казимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казимир,Казимира,Казимиру,Казимира,Казимиром,Казимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan102()
    {
        $this->object->setFirstName('Калина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калина,Калины,Калине,Калину,Калиной,Калине'), $this->object->getFirstNameCase());
    }
    public function testNameMan103()
    {
        $this->object->setFirstName('Каллиник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каллиник,Каллиника,Каллинику,Каллиника,Каллиником,Каллинике'), $this->object->getFirstNameCase());
    }
    public function testNameMan104()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каллистрат,Каллистрата,Каллистрату,Каллистрата,Каллистратом,Каллистрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan105()
    {
        $this->object->setFirstName('Капитон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Капитон,Капитона,Капитону,Капитона,Капитоном,Капитоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan106()
    {
        $this->object->setFirstName('Карп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карп,Карпа,Карпу,Карпа,Карпом,Карпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan107()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Касьян,Касьяна,Касьяну,Касьяна,Касьяном,Касьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan108()
    {
        $this->object->setFirstName('Кирей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирей,Кирея,Кирею,Кирея,Киреем,Кирее'), $this->object->getFirstNameCase());
    }
    public function testNameMan109()
    {
        $this->object->setFirstName('Кирила');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирила,Кирилы,Кириле,Кирилу,Кирилой,Кириле'), $this->object->getFirstNameCase());
    }
    public function testNameMan110()
    {
        $this->object->setFirstName('Кирилл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирилл,Кирилла,Кириллу,Кирилла,Кириллом,Кирилле'), $this->object->getFirstNameCase());
    }
    public function testNameMan111()
    {
        $this->object->setFirstName('Клим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Клим,Клима,Климу,Клима,Климом,Климе'), $this->object->getFirstNameCase());
    }
    public function testNameMan112()
    {
        $this->object->setFirstName('Климент');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климент,Климента,Клименту,Климента,Климентом,Клименте'), $this->object->getFirstNameCase());
    }
    public function testNameMan113()
    {
        $this->object->setFirstName('Климентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климентий,Климентия,Климентию,Климентия,Климентием,Климентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan114()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондрат,Кондрата,Кондрату,Кондрата,Кондратом,Кондрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan115()
    {
        $this->object->setFirstName('Кондратий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондратий,Кондратия,Кондратию,Кондратия,Кондратием,Кондратии'), $this->object->getFirstNameCase());
    }
    public function testNameMan116()
    {
        $this->object->setFirstName('Конон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Конон,Конона,Конону,Конона,Кононом,Кононе'), $this->object->getFirstNameCase());
    }
    public function testNameMan117()
    {
        $this->object->setFirstName('Константин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константин,Константина,Константину,Константина,Константином,Константине'), $this->object->getFirstNameCase());
    }
    public function testNameMan118()
    {
        $this->object->setFirstName('Корней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корней,Корнея,Корнею,Корнея,Корнеем,Корнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan119()
    {
        $this->object->setFirstName('Корнелий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корнелий,Корнелия,Корнелию,Корнелия,Корнелием,Корнелии'), $this->object->getFirstNameCase());
    }
    public function testNameMan120()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ксенофонт,Ксенофонта,Ксенофонту,Ксенофонта,Ксенофонтом,Ксенофонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan121()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьма,Кузьмы,Кузьме,Кузьму,Кузьмой,Кузьме'), $this->object->getFirstNameCase());
    }
    public function testNameMan122()
    {
        $this->object->setFirstName('Куприян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куприян,Куприяна,Куприяну,Куприяна,Куприяном,Куприяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan123()
    {
        $this->object->setFirstName('Лаврентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лаврентий,Лаврентия,Лаврентию,Лаврентия,Лаврентием,Лаврентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan124()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лазарь,Лазаря,Лазарю,Лазаря,Лазарем,Лазаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan125()
    {
        $this->object->setFirstName('Лев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лев,Льва,Льву,Льва,Львом,Льве'), $this->object->getFirstNameCase());
    }
    public function testNameMan126()
    {
        $this->object->setFirstName('Левон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Левон,Левона,Левону,Левона,Левоном,Левоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan127()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонид,Леонида,Леониду,Леонида,Леонидом,Леониде'), $this->object->getFirstNameCase());
    }
    public function testNameMan128()
    {
        $this->object->setFirstName('Леон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леон,Леона,Леону,Леона,Леоном,Леоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan129()
    {
        $this->object->setFirstName('Леонтий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонтий,Леонтия,Леонтию,Леонтия,Леонтием,Леонтии'), $this->object->getFirstNameCase());
    }
    public function testNameMan130()
    {
        $this->object->setFirstName('Лука');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лука,Луки,Луке,Луку,Лукой,Луке'), $this->object->getFirstNameCase());
    }
    public function testNameMan131()
    {
        $this->object->setFirstName('Лукьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лукьян,Лукьяна,Лукьяну,Лукьяна,Лукьяном,Лукьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan132()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людвиг,Людвига,Людвигу,Людвига,Людвигом,Людвиге'), $this->object->getFirstNameCase());
    }
    public function testNameMan133()
    {
        $this->object->setFirstName('Макар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макар,Макара,Макару,Макара,Макаром,Макаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan134()
    {
        $this->object->setFirstName('Максим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максим,Максима,Максиму,Максима,Максимом,Максиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan135()
    {
        $this->object->setFirstName('Марат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марат,Марата,Марату,Марата,Маратом,Марате'), $this->object->getFirstNameCase());
    }
    public function testNameMan136()
    {
        $this->object->setFirstName('Марк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марк,Марка,Марку,Марка,Марком,Марке'), $this->object->getFirstNameCase());
    }
    public function testNameMan137()
    {
        $this->object->setFirstName('Маркел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маркел,Маркела,Маркелу,Маркела,Маркелом,Маркеле'), $this->object->getFirstNameCase());
    }
    public function testNameMan138()
    {
        $this->object->setFirstName('Мартин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мартин,Мартина,Мартину,Мартина,Мартином,Мартине'), $this->object->getFirstNameCase());
    }
    public function testNameMan139()
    {
        $this->object->setFirstName('Мартын');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мартын,Мартына,Мартыну,Мартына,Мартыном,Мартыне'), $this->object->getFirstNameCase());
    }
    public function testNameMan140()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan141()
    {
        $this->object->setFirstName('Мина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мина,Мины,Мине,Мину,Миной,Мине'), $this->object->getFirstNameCase());
    }
    public function testNameMan142()
    {
        $this->object->setFirstName('Минай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Минай,Миная,Минаю,Миная,Минаем,Минае'), $this->object->getFirstNameCase());
    }
    public function testNameMan143()
    {
        $this->object->setFirstName('Мирон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мирон,Мирона,Мирону,Мирона,Мироном,Мироне'), $this->object->getFirstNameCase());
    }
    public function testNameMan144()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Митрофан,Митрофана,Митрофану,Митрофана,Митрофаном,Митрофане'), $this->object->getFirstNameCase());
    }
    public function testNameMan145()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михаил,Михаила,Михаилу,Михаила,Михаилом,Михаиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan146()
    {
        $this->object->setFirstName('Михей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михей,Михея,Михею,Михея,Михеем,Михее'), $this->object->getFirstNameCase());
    }
    public function testNameMan147()
    {
        $this->object->setFirstName('Модест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Модест,Модеста,Модесту,Модеста,Модестом,Модесте'), $this->object->getFirstNameCase());
    }
    public function testNameMan148()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моисей,Моисея,Моисею,Моисея,Моисеем,Моисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan149()
    {
        $this->object->setFirstName('Мокей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мокей,Мокея,Мокею,Мокея,Мокеем,Мокее'), $this->object->getFirstNameCase());
    }
    public function testNameMan150()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мстислав,Мстислава,Мстиславу,Мстислава,Мстиславом,Мстиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan151()
    {
        $this->object->setFirstName('Назар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Назар,Назара,Назару,Назара,Назаром,Назаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan152()
    {
        $this->object->setFirstName('Наркис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наркис,Наркиса,Наркису,Наркиса,Наркисом,Наркисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan153()
    {
        $this->object->setFirstName('Нарцис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нарцис,Нарциса,Нарцису,Нарциса,Нарцисом,Нарцисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan154()
    {
        $this->object->setFirstName('Наум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наум,Наума,Науму,Наума,Наумом,Науме'), $this->object->getFirstNameCase());
    }
    public function testNameMan155()
    {
        $this->object->setFirstName('Нейл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нейл,Нейла,Нейлу,Нейла,Нейлом,Нейле'), $this->object->getFirstNameCase());
    }
    public function testNameMan156()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестер,Нестера,Нестеру,Нестера,Нестером,Нестере'), $this->object->getFirstNameCase());
    }
    public function testNameMan157()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестор,Нестора,Нестору,Нестора,Нестором,Несторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan158()
    {
        $this->object->setFirstName('Нефед');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нефед,Нефеда,Нефеду,Нефеда,Нефедом,Нефеде'), $this->object->getFirstNameCase());
    }
    public function testNameMan159()
    {
        $this->object->setFirstName('Никандр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никандр,Никандра,Никандру,Никандра,Никандром,Никандре'), $this->object->getFirstNameCase());
    }
    public function testNameMan160()
    {
        $this->object->setFirstName('Никанор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никанор,Никанора,Никанору,Никанора,Никанором,Никаноре'), $this->object->getFirstNameCase());
    }
    public function testNameMan161()
    {
        $this->object->setFirstName('Никита');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никита,Никиты,Никите,Никиту,Никитой,Никите'), $this->object->getFirstNameCase());
    }
    public function testNameMan162()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никифор,Никифора,Никифору,Никифора,Никифором,Никифоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan163()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никодим,Никодима,Никодиму,Никодима,Никодимом,Никодиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan164()
    {
        $this->object->setFirstName('Николай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николай,Николая,Николаю,Николая,Николаем,Николае'), $this->object->getFirstNameCase());
    }
    public function testNameMan165()
    {
        $this->object->setFirstName('Никон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никон,Никона,Никону,Никона,Никоном,Никоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan166()
    {
        $this->object->setFirstName('Нил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нил,Нила,Нилу,Нила,Нилом,Ниле'), $this->object->getFirstNameCase());
    }
    public function testNameMan167()
    {
        $this->object->setFirstName('Олег');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олег,Олега,Олегу,Олега,Олегом,Олеге'), $this->object->getFirstNameCase());
    }
    public function testNameMan168()
    {
        $this->object->setFirstName('Онисим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онисим,Онисима,Онисиму,Онисима,Онисимом,Онисиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan169()
    {
        $this->object->setFirstName('Онуфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онуфрий,Онуфрия,Онуфрию,Онуфрия,Онуфрием,Онуфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan170()
    {
        $this->object->setFirstName('Орест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орест,Ореста,Оресту,Ореста,Орестом,Оресте'), $this->object->getFirstNameCase());
    }
    public function testNameMan171()
    {
        $this->object->setFirstName('Осип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осип,Осипа,Осипу,Осипа,Осипом,Осипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan172()
    {
        $this->object->setFirstName('Остап');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остап,Остапа,Остапу,Остапа,Остапом,Остапе'), $this->object->getFirstNameCase());
    }
    public function testNameMan173()
    {
        $this->object->setFirstName('Отто');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Отто,Отто,Отто,Отто,Отто,Отто'), $this->object->getFirstNameCase());
    }
    public function testNameMan174()
    {
        $this->object->setFirstName('Павел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павел,Павла,Павлу,Павла,Павлом,Павле'), $this->object->getFirstNameCase());
    }
    public function testNameMan175()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкрат,Панкрата,Панкрату,Панкрата,Панкратом,Панкрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan176()
    {
        $this->object->setFirstName('Панкратий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкратий,Панкратия,Панкратию,Панкратия,Панкратием,Панкратии'), $this->object->getFirstNameCase());
    }
    public function testNameMan177()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пантелей,Пантелея,Пантелею,Пантелея,Пантелеем,Пантелее'), $this->object->getFirstNameCase());
    }
    public function testNameMan178()
    {
        $this->object->setFirstName('Пантелеймон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пантелеймон,Пантелеймона,Пантелеймону,Пантелеймона,Пантелеймоном,Пантелеймоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan179()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan180()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфений,Парфения,Парфению,Парфения,Парфением,Парфении'), $this->object->getFirstNameCase());
    }
    public function testNameMan181()
    {
        $this->object->setFirstName('Петр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петр,Петра,Петру,Петра,Петром,Петре'), $this->object->getFirstNameCase());
    }
    public function testNameMan182()
    {
        $this->object->setFirstName('Пимен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пимен,Пимена,Пимену,Пимена,Пименом,Пимене'), $this->object->getFirstNameCase());
    }
    public function testNameMan183()
    {
        $this->object->setFirstName('Платон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платон,Платона,Платону,Платона,Платоном,Платоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan184()
    {
        $this->object->setFirstName('Полиграф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полиграф,Полиграфа,Полиграфу,Полиграфа,Полиграфом,Полиграфе'), $this->object->getFirstNameCase());
    }
    public function testNameMan185()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поликарп,Поликарпа,Поликарпу,Поликарпа,Поликарпом,Поликарпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan186()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфир,Порфира,Порфиру,Порфира,Порфиром,Порфире'), $this->object->getFirstNameCase());
    }
    public function testNameMan187()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфирий,Порфирия,Порфирию,Порфирия,Порфирием,Порфирии'), $this->object->getFirstNameCase());
    }
    public function testNameMan188()
    {
        $this->object->setFirstName('Потап');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Потап,Потапа,Потапу,Потапа,Потапом,Потапе'), $this->object->getFirstNameCase());
    }
    public function testNameMan189()
    {
        $this->object->setFirstName('Прокоп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокоп,Прокопа,Прокопу,Прокопа,Прокопом,Прокопе'), $this->object->getFirstNameCase());
    }
    public function testNameMan190()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокопий,Прокопия,Прокопию,Прокопия,Прокопием,Прокопии'), $this->object->getFirstNameCase());
    }
    public function testNameMan191()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокофий,Прокофия,Прокофию,Прокофия,Прокофием,Прокофии'), $this->object->getFirstNameCase());
    }
    public function testNameMan192()
    {
        $this->object->setFirstName('Прохор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прохор,Прохора,Прохору,Прохора,Прохором,Прохоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan193()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роберт,Роберта,Роберту,Роберта,Робертом,Роберте'), $this->object->getFirstNameCase());
    }
    public function testNameMan194()
    {
        $this->object->setFirstName('Родион');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родион,Родиона,Родиону,Родиона,Родионом,Родионе'), $this->object->getFirstNameCase());
    }
    public function testNameMan195()
    {
        $this->object->setFirstName('Роман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роман,Романа,Роману,Романа,Романом,Романе'), $this->object->getFirstNameCase());
    }
    public function testNameMan196()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ростислав,Ростислава,Ростиславу,Ростислава,Ростиславом,Ростиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan197()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Руслан,Руслана,Руслану,Руслана,Русланом,Руслане'), $this->object->getFirstNameCase());
    }
    public function testNameMan198()
    {
        $this->object->setFirstName('Савастей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савастей,Савастея,Савастею,Савастея,Савастеем,Савастее'), $this->object->getFirstNameCase());
    }
    public function testNameMan199()
    {
        $this->object->setFirstName('Савва');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савва,Саввы,Савве,Савву,Саввой,Савве'), $this->object->getFirstNameCase());
    }
    public function testNameMan200()
    {
        $this->object->setFirstName('Савватий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савватий,Савватия,Савватию,Савватия,Савватием,Савватии'), $this->object->getFirstNameCase());
    }
    public function testNameMan201()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савелий,Савелия,Савелию,Савелия,Савелием,Савелии'), $this->object->getFirstNameCase());
    }
    public function testNameMan202()
    {
        $this->object->setFirstName('Самсон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самсон,Самсона,Самсону,Самсона,Самсоном,Самсоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan203()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Святослав,Святослава,Святославу,Святослава,Святославом,Святославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan204()
    {
        $this->object->setFirstName('Семен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семен,Семена,Семену,Семена,Семеном,Семене'), $this->object->getFirstNameCase());
    }
    public function testNameMan205()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серафим,Серафима,Серафиму,Серафима,Серафимом,Серафиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan206()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергей,Сергея,Сергею,Сергея,Сергеем,Сергее'), $this->object->getFirstNameCase());
    }
    public function testNameMan207()
    {
        $this->object->setFirstName('Сергий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергий,Сергия,Сергию,Сергия,Сергием,Сергии'), $this->object->getFirstNameCase());
    }
    public function testNameMan208()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидор,Сидора,Сидору,Сидора,Сидором,Сидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan209()
    {
        $this->object->setFirstName('Созон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Созон,Созона,Созону,Созона,Созоном,Созоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan210()
    {
        $this->object->setFirstName('Созонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Созонт,Созонта,Созонту,Созонта,Созонтом,Созонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan211()
    {
        $this->object->setFirstName('Спиридон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Спиридон,Спиридона,Спиридону,Спиридона,Спиридоном,Спиридоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan212()
    {
        $this->object->setFirstName('Станислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станислав,Станислава,Станиславу,Станислава,Станиславом,Станиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan213()
    {
        $this->object->setFirstName('Степан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степан,Степана,Степану,Степана,Степаном,Степане'), $this->object->getFirstNameCase());
    }
    public function testNameMan214()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарас,Тараса,Тарасу,Тараса,Тарасом,Тарасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan215()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Теймураз,Теймураза,Теймуразу,Теймураза,Теймуразом,Теймуразе'), $this->object->getFirstNameCase());
    }
    public function testNameMan216()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Терентий,Терентия,Терентию,Терентия,Терентием,Терентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan217()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофей,Тимофея,Тимофею,Тимофея,Тимофеем,Тимофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan218()
    {
        $this->object->setFirstName('Тимур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимур,Тимура,Тимуру,Тимура,Тимуром,Тимуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan219()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихон,Тихона,Тихону,Тихона,Тихоном,Тихоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan220()
    {
        $this->object->setFirstName('Трифон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трифон,Трифона,Трифону,Трифона,Трифоном,Трифоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan221()
    {
        $this->object->setFirstName('Трофим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трофим,Трофима,Трофиму,Трофима,Трофимом,Трофиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan222()
    {
        $this->object->setFirstName('Устин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Устин,Устина,Устину,Устина,Устином,Устине'), $this->object->getFirstNameCase());
    }
    public function testNameMan223()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фадей,Фадея,Фадею,Фадея,Фадеем,Фадее'), $this->object->getFirstNameCase());
    }
    public function testNameMan224()
    {
        $this->object->setFirstName('Федот');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федот,Федота,Федоту,Федота,Федотом,Федоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan225()
    {
        $this->object->setFirstName('Феликс');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликс,Феликса,Феликсу,Феликса,Феликсом,Феликсе'), $this->object->getFirstNameCase());
    }
    public function testNameMan226()
    {
        $this->object->setFirstName('Федор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федор,Федора,Федору,Федора,Федором,Федоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan227()
    {
        $this->object->setFirstName('Федосий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федосий,Федосия,Федосию,Федосия,Федосием,Федосии'), $this->object->getFirstNameCase());
    }
    public function testNameMan228()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феодосий,Феодосия,Феодосию,Феодосия,Феодосием,Феодосии'), $this->object->getFirstNameCase());
    }
    public function testNameMan229()
    {
        $this->object->setFirstName('Феоктист');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феоктист,Феоктиста,Феоктисту,Феоктиста,Феоктистом,Феоктисте'), $this->object->getFirstNameCase());
    }
    public function testNameMan230()
    {
        $this->object->setFirstName('Феофан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феофан,Феофана,Феофану,Феофана,Феофаном,Феофане'), $this->object->getFirstNameCase());
    }
    public function testNameMan231()
    {
        $this->object->setFirstName('Филат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филат,Филата,Филату,Филата,Филатом,Филате'), $this->object->getFirstNameCase());
    }
    public function testNameMan232()
    {
        $this->object->setFirstName('Филимон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филимон,Филимона,Филимону,Филимона,Филимоном,Филимоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan233()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филипп,Филиппа,Филиппу,Филиппа,Филиппом,Филиппе'), $this->object->getFirstNameCase());
    }
    public function testNameMan234()
    {
        $this->object->setFirstName('Фока');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фока,Фоки,Фоке,Фоку,Фокой,Фоке'), $this->object->getFirstNameCase());
    }
    public function testNameMan235()
    {
        $this->object->setFirstName('Фома');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фома,Фомы,Фоме,Фому,Фомой,Фоме'), $this->object->getFirstNameCase());
    }
    public function testNameMan236()
    {
        $this->object->setFirstName('Фрол');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фрол,Фрола,Фролу,Фрола,Фролом,Фроле'), $this->object->getFirstNameCase());
    }
    public function testNameMan237()
    {
        $this->object->setFirstName('Харитон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харитон,Харитона,Харитону,Харитона,Харитоном,Харитоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan238()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харлам,Харлама,Харламу,Харлама,Харламом,Харламе'), $this->object->getFirstNameCase());
    }
    public function testNameMan239()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харламп,Харлампа,Харлампу,Харлампа,Харлампом,Харлампе'), $this->object->getFirstNameCase());
    }
    public function testNameMan240()
    {
        $this->object->setFirstName('Харлампий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харлампий,Харлампия,Харлампию,Харлампия,Харлампием,Харлампии'), $this->object->getFirstNameCase());
    }
    public function testNameMan241()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чеслав,Чеслава,Чеславу,Чеслава,Чеславом,Чеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan242()
    {
        $this->object->setFirstName('Эдгар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдгар,Эдгара,Эдгару,Эдгара,Эдгаром,Эдгаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan243()
    {
        $this->object->setFirstName('Эдгард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдгард,Эдгарда,Эдгарду,Эдгарда,Эдгардом,Эдгарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan244()
    {
        $this->object->setFirstName('Эдуард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуард,Эдуарда,Эдуарду,Эдуарда,Эдуардом,Эдуарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan245()
    {
        $this->object->setFirstName('Юлиан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлиан,Юлиана,Юлиану,Юлиана,Юлианом,Юлиане'), $this->object->getFirstNameCase());
    }
    public function testNameMan246()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan247()
    {
        $this->object->setFirstName('Юрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрий,Юрия,Юрию,Юрия,Юрием,Юрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan248()
    {
        $this->object->setFirstName('Яков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яков,Якова,Якову,Якова,Яковом,Якове'), $this->object->getFirstNameCase());
    }
    public function testNameMan249()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярослав,Ярослава,Ярославу,Ярослава,Ярославом,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan250()
    {
        $this->object->setFirstName('Ян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ян,Яна,Яну,Яна,Яном,Яне'), $this->object->getFirstNameCase());
    }
    public function testNameMan251()
    {
        $this->object->setFirstName('Онуфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онуфрий,Онуфрия,Онуфрию,Онуфрия,Онуфрием,Онуфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan252()
    {
        $this->object->setFirstName('Гордей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордей,Гордея,Гордею,Гордея,Гордеем,Гордее'), $this->object->getFirstNameCase());
    }
    public function testNameMan253()
    {
        $this->object->setFirstName('Никита');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никита,Никиты,Никите,Никиту,Никитой,Никите'), $this->object->getFirstNameCase());
    }
    public function testNameMan254()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владлен,Владлена,Владлену,Владлена,Владленом,Владлене'), $this->object->getFirstNameCase());
    }
    public function testNameMan255()
    {
        $this->object->setFirstName('Борис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борис,Бориса,Борису,Бориса,Борисом,Борисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan256()
    {
        $this->object->setFirstName('Полиграф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полиграф,Полиграфа,Полиграфу,Полиграфа,Полиграфом,Полиграфе'), $this->object->getFirstNameCase());
    }
    public function testNameMan257()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Венедикт,Венедикта,Венедикту,Венедикта,Венедиктом,Венедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan258()
    {
        $this->object->setFirstName('Елисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елисей,Елисея,Елисею,Елисея,Елисеем,Елисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan259()
    {
        $this->object->setFirstName('Феоктист');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феоктист,Феоктиста,Феоктисту,Феоктиста,Феоктистом,Феоктисте'), $this->object->getFirstNameCase());
    }
    public function testNameMan260()
    {
        $this->object->setFirstName('Никон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никон,Никона,Никону,Никона,Никоном,Никоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan261()
    {
        $this->object->setFirstName('Эдуард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуард,Эдуарда,Эдуарду,Эдуарда,Эдуардом,Эдуарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan262()
    {
        $this->object->setFirstName('Владилен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владилен,Владилена,Владилену,Владилена,Владиленом,Владилене'), $this->object->getFirstNameCase());
    }
    public function testNameMan263()
    {
        $this->object->setFirstName('Федор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федор,Федора,Федору,Федора,Федором,Федоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan264()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергей,Сергея,Сергею,Сергея,Сергеем,Сергее'), $this->object->getFirstNameCase());
    }
    public function testNameMan265()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Венедикт,Венедикта,Венедикту,Венедикта,Венедиктом,Венедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan266()
    {
        $this->object->setFirstName('Казимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казимир,Казимира,Казимиру,Казимира,Казимиром,Казимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan267()
    {
        $this->object->setFirstName('Лукьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лукьян,Лукьяна,Лукьяну,Лукьяна,Лукьяном,Лукьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan268()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонид,Леонида,Леониду,Леонида,Леонидом,Леониде'), $this->object->getFirstNameCase());
    }
    public function testNameMan269()
    {
        $this->object->setFirstName('Аксен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аксен,Аксена,Аксену,Аксена,Аксеном,Аксене'), $this->object->getFirstNameCase());
    }
    public function testNameMan270()
    {
        $this->object->setFirstName('Модест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Модест,Модеста,Модесту,Модеста,Модестом,Модесте'), $this->object->getFirstNameCase());
    }
    public function testNameMan271()
    {
        $this->object->setFirstName('Владимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимир,Владимира,Владимиру,Владимира,Владимиром,Владимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan272()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидор,Сидора,Сидору,Сидора,Сидором,Сидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan273()
    {
        $this->object->setFirstName('Прокоп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокоп,Прокопа,Прокопу,Прокопа,Прокопом,Прокопе'), $this->object->getFirstNameCase());
    }
    public function testNameMan274()
    {
        $this->object->setFirstName('Давыд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давыд,Давыда,Давыду,Давыда,Давыдом,Давыде'), $this->object->getFirstNameCase());
    }
    public function testNameMan275()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моисей,Моисея,Моисею,Моисея,Моисеем,Моисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan276()
    {
        $this->object->setFirstName('Емельян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Емельян,Емельяна,Емельяну,Емельяна,Емельяном,Емельяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan277()
    {
        $this->object->setFirstName('Измаил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Измаил,Измаила,Измаилу,Измаила,Измаилом,Измаиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan278()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan279()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моисей,Моисея,Моисею,Моисея,Моисеем,Моисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan280()
    {
        $this->object->setFirstName('Никита');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никита,Никиты,Никите,Никиту,Никитой,Никите'), $this->object->getFirstNameCase());
    }
    public function testNameMan281()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лазарь,Лазаря,Лазарю,Лазаря,Лазарем,Лазаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan282()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестор,Нестора,Нестору,Нестора,Нестором,Несторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan283()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зиновий,Зиновия,Зиновию,Зиновия,Зиновием,Зиновии'), $this->object->getFirstNameCase());
    }
    public function testNameMan284()
    {
        $this->object->setFirstName('Отто');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Отто,Отто,Отто,Отто,Отто,Отто'), $this->object->getFirstNameCase());
    }
    public function testNameMan285()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокофий,Прокофия,Прокофию,Прокофия,Прокофием,Прокофии'), $this->object->getFirstNameCase());
    }
    public function testNameMan286()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорофей,Дорофея,Дорофею,Дорофея,Дорофеем,Дорофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan287()
    {
        $this->object->setFirstName('Виталий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Виталий,Виталия,Виталию,Виталия,Виталием,Виталии'), $this->object->getFirstNameCase());
    }
    public function testNameMan288()
    {
        $this->object->setFirstName('Пимен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пимен,Пимена,Пимену,Пимена,Пименом,Пимене'), $this->object->getFirstNameCase());
    }
    public function testNameMan289()
    {
        $this->object->setFirstName('Остап');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остап,Остапа,Остапу,Остапа,Остапом,Остапе'), $this->object->getFirstNameCase());
    }
    public function testNameMan290()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславу,Борислава,Бориславом,Бориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan291()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславу,Владислава,Владиславом,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan292()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсен,Арсена,Арсену,Арсена,Арсеном,Арсене'), $this->object->getFirstNameCase());
    }
    public function testNameMan293()
    {
        $this->object->setFirstName('Назар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Назар,Назара,Назару,Назара,Назаром,Назаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan294()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan295()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елизар,Елизара,Елизару,Елизара,Елизаром,Елизаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan296()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гертруд,Гертруда,Гертруду,Гертруда,Гертрудом,Гертруде'), $this->object->getFirstNameCase());
    }
    public function testNameMan297()
    {
        $this->object->setFirstName('Максим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максим,Максима,Максиму,Максима,Максимом,Максиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan298()
    {
        $this->object->setFirstName('Самсон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самсон,Самсона,Самсону,Самсона,Самсоном,Самсоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan299()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьма,Кузьмы,Кузьме,Кузьму,Кузьмой,Кузьме'), $this->object->getFirstNameCase());
    }
    public function testNameMan300()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серафим,Серафима,Серафиму,Серафима,Серафимом,Серафиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan301()
    {
        $this->object->setFirstName('Игнатий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнатий,Игнатия,Игнатию,Игнатия,Игнатием,Игнатии'), $this->object->getFirstNameCase());
    }
    public function testNameMan302()
    {
        $this->object->setFirstName('Станислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станислав,Станислава,Станиславу,Станислава,Станиславом,Станиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan303()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславу,Борислава,Бориславом,Бориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan304()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan305()
    {
        $this->object->setFirstName('Макар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макар,Макара,Макару,Макара,Макаром,Макаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan306()
    {
        $this->object->setFirstName('Антип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антип,Антипа,Антипу,Антипа,Антипом,Антипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan307()
    {
        $this->object->setFirstName('Самсон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самсон,Самсона,Самсону,Самсона,Самсоном,Самсоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan308()
    {
        $this->object->setFirstName('Давид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давид,Давида,Давиду,Давида,Давидом,Давиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan309()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan310()
    {
        $this->object->setFirstName('Наум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наум,Наума,Науму,Наума,Наумом,Науме'), $this->object->getFirstNameCase());
    }
    public function testNameMan311()
    {
        $this->object->setFirstName('Ермолай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермолай,Ермолая,Ермолаю,Ермолая,Ермолаем,Ермолае'), $this->object->getFirstNameCase());
    }
    public function testNameMan312()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савелий,Савелия,Савелию,Савелия,Савелием,Савелии'), $this->object->getFirstNameCase());
    }
    public function testNameMan313()
    {
        $this->object->setFirstName('Никон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никон,Никона,Никону,Никона,Никоном,Никоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan314()
    {
        $this->object->setFirstName('Полиграф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полиграф,Полиграфа,Полиграфу,Полиграфа,Полиграфом,Полиграфе'), $this->object->getFirstNameCase());
    }
    public function testNameMan315()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валериан,Валериана,Валериану,Валериана,Валерианом,Валериане'), $this->object->getFirstNameCase());
    }
    public function testNameMan316()
    {
        $this->object->setFirstName('Исидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исидор,Исидора,Исидору,Исидора,Исидором,Исидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan317()
    {
        $this->object->setFirstName('Никандр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никандр,Никандра,Никандру,Никандра,Никандром,Никандре'), $this->object->getFirstNameCase());
    }
    public function testNameMan318()
    {
        $this->object->setFirstName('Яков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яков,Якова,Якову,Якова,Яковом,Якове'), $this->object->getFirstNameCase());
    }
    public function testNameMan319()
    {
        $this->object->setFirstName('Сергий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергий,Сергия,Сергию,Сергия,Сергием,Сергии'), $this->object->getFirstNameCase());
    }
    public function testNameMan320()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людвиг,Людвига,Людвигу,Людвига,Людвигом,Людвиге'), $this->object->getFirstNameCase());
    }
    public function testNameMan321()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкрат,Панкрата,Панкрату,Панкрата,Панкратом,Панкрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan322()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанас,Афанаса,Афанасу,Афанаса,Афанасом,Афанасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan323()
    {
        $this->object->setFirstName('Петр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петр,Петра,Петру,Петра,Петром,Петре'), $this->object->getFirstNameCase());
    }
    public function testNameMan324()
    {
        $this->object->setFirstName('Филат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филат,Филата,Филату,Филата,Филатом,Филате'), $this->object->getFirstNameCase());
    }
    public function testNameMan325()
    {
        $this->object->setFirstName('Данила');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данила,Данилы,Даниле,Данилу,Данилой,Даниле'), $this->object->getFirstNameCase());
    }
    public function testNameMan326()
    {
        $this->object->setFirstName('Климент');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климент,Климента,Клименту,Климента,Климентом,Клименте'), $this->object->getFirstNameCase());
    }
    public function testNameMan327()
    {
        $this->object->setFirstName('Игорь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игорь,Игоря,Игорю,Игоря,Игорем,Игоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan328()
    {
        $this->object->setFirstName('Искандер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Искандер,Искандера,Искандеру,Искандера,Искандером,Искандере'), $this->object->getFirstNameCase());
    }
    public function testNameMan329()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихон,Тихона,Тихону,Тихона,Тихоном,Тихоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan330()
    {
        $this->object->setFirstName('Влас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Влас,Власа,Власу,Власа,Власом,Власе'), $this->object->getFirstNameCase());
    }
    public function testNameMan331()
    {
        $this->object->setFirstName('Павел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павел,Павла,Павлу,Павла,Павлом,Павле'), $this->object->getFirstNameCase());
    }
    public function testNameMan332()
    {
        $this->object->setFirstName('Корней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корней,Корнея,Корнею,Корнея,Корнеем,Корнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan333()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серафим,Серафима,Серафиму,Серафима,Серафимом,Серафиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan334()
    {
        $this->object->setFirstName('Анисим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анисим,Анисима,Анисиму,Анисима,Анисимом,Анисиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan335()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокопий,Прокопия,Прокопию,Прокопия,Прокопием,Прокопии'), $this->object->getFirstNameCase());
    }
    public function testNameMan336()
    {
        $this->object->setFirstName('Адам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адам,Адама,Адаму,Адама,Адамом,Адаме'), $this->object->getFirstNameCase());
    }
    public function testNameMan337()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорий,Григория,Григорию,Григория,Григорием,Григории'), $this->object->getFirstNameCase());
    }
    public function testNameMan338()
    {
        $this->object->setFirstName('Эдгард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдгард,Эдгарда,Эдгарду,Эдгарда,Эдгардом,Эдгарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan339()
    {
        $this->object->setFirstName('Измаил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Измаил,Измаила,Измаилу,Измаила,Измаилом,Измаиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan340()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосиф,Иосифа,Иосифу,Иосифа,Иосифом,Иосифе'), $this->object->getFirstNameCase());
    }
    public function testNameMan341()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Касьян,Касьяна,Касьяну,Касьяна,Касьяном,Касьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan342()
    {
        $this->object->setFirstName('Владилен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владилен,Владилена,Владилену,Владилена,Владиленом,Владилене'), $this->object->getFirstNameCase());
    }
    public function testNameMan343()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславу,Борислава,Бориславом,Бориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan344()
    {
        $this->object->setFirstName('Семен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семен,Семена,Семену,Семена,Семеном,Семене'), $this->object->getFirstNameCase());
    }
    public function testNameMan345()
    {
        $this->object->setFirstName('Павел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павел,Павла,Павлу,Павла,Павлом,Павле'), $this->object->getFirstNameCase());
    }
    public function testNameMan346()
    {
        $this->object->setFirstName('Эдуард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуард,Эдуарда,Эдуарду,Эдуарда,Эдуардом,Эдуарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan347()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan348()
    {
        $this->object->setFirstName('Пимен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пимен,Пимена,Пимену,Пимена,Пименом,Пимене'), $this->object->getFirstNameCase());
    }
    public function testNameMan349()
    {
        $this->object->setFirstName('Феоктист');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феоктист,Феоктиста,Феоктисту,Феоктиста,Феоктистом,Феоктисте'), $this->object->getFirstNameCase());
    }
    public function testNameMan350()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатолий,Анатолия,Анатолию,Анатолия,Анатолием,Анатолии'), $this->object->getFirstNameCase());
    }
    public function testNameMan351()
    {
        $this->object->setFirstName('Калина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калина,Калины,Калине,Калину,Калиной,Калине'), $this->object->getFirstNameCase());
    }
    public function testNameMan352()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Виктор,Виктора,Виктору,Виктора,Виктором,Викторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan353()
    {
        $this->object->setFirstName('Валерий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерий,Валерия,Валерию,Валерия,Валерием,Валерии'), $this->object->getFirstNameCase());
    }
    public function testNameMan354()
    {
        $this->object->setFirstName('Мирон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мирон,Мирона,Мирону,Мирона,Мироном,Мироне'), $this->object->getFirstNameCase());
    }
    public function testNameMan355()
    {
        $this->object->setFirstName('Авдей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авдей,Авдея,Авдею,Авдея,Авдеем,Авдее'), $this->object->getFirstNameCase());
    }
    public function testNameMan356()
    {
        $this->object->setFirstName('Ануфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ануфрий,Ануфрия,Ануфрию,Ануфрия,Ануфрием,Ануфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan357()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савелий,Савелия,Савелию,Савелия,Савелием,Савелии'), $this->object->getFirstNameCase());
    }
    public function testNameMan358()
    {
        $this->object->setFirstName('Давид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давид,Давида,Давиду,Давида,Давидом,Давиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan359()
    {
        $this->object->setFirstName('Савва');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савва,Саввы,Савве,Савву,Саввой,Савве'), $this->object->getFirstNameCase());
    }
    public function testNameMan360()
    {
        $this->object->setFirstName('Трофим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трофим,Трофима,Трофиму,Трофима,Трофимом,Трофиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan361()
    {
        $this->object->setFirstName('Аркадий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадий,Аркадия,Аркадию,Аркадия,Аркадием,Аркадии'), $this->object->getFirstNameCase());
    }
    public function testNameMan362()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фадей,Фадея,Фадею,Фадея,Фадеем,Фадее'), $this->object->getFirstNameCase());
    }
    public function testNameMan363()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan364()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan365()
    {
        $this->object->setFirstName('Карп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карп,Карпа,Карпу,Карпа,Карпом,Карпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan366()
    {
        $this->object->setFirstName('Федот');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федот,Федота,Федоту,Федота,Федотом,Федоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan367()
    {
        $this->object->setFirstName('Архип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Архип,Архипа,Архипу,Архипа,Архипом,Архипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan368()
    {
        $this->object->setFirstName('Константин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константин,Константина,Константину,Константина,Константином,Константине'), $this->object->getFirstNameCase());
    }
    public function testNameMan369()
    {
        $this->object->setFirstName('Вилен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилен,Вилена,Вилену,Вилена,Виленом,Вилене'), $this->object->getFirstNameCase());
    }
    public function testNameMan370()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никодим,Никодима,Никодиму,Никодима,Никодимом,Никодиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan371()
    {
        $this->object->setFirstName('Адам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адам,Адама,Адаму,Адама,Адамом,Адаме'), $this->object->getFirstNameCase());
    }
    public function testNameMan372()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Митрофан,Митрофана,Митрофану,Митрофана,Митрофаном,Митрофане'), $this->object->getFirstNameCase());
    }
    public function testNameMan373()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan374()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan375()
    {
        $this->object->setFirstName('Степан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степан,Степана,Степану,Степана,Степаном,Степане'), $this->object->getFirstNameCase());
    }
    public function testNameMan376()
    {
        $this->object->setFirstName('Евсей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евсей,Евсея,Евсею,Евсея,Евсеем,Евсее'), $this->object->getFirstNameCase());
    }
    public function testNameMan377()
    {
        $this->object->setFirstName('Климент');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климент,Климента,Клименту,Климента,Климентом,Клименте'), $this->object->getFirstNameCase());
    }
    public function testNameMan378()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ксенофонт,Ксенофонта,Ксенофонту,Ксенофонта,Ксенофонтом,Ксенофонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan379()
    {
        $this->object->setFirstName('Савастей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савастей,Савастея,Савастею,Савастея,Савастеем,Савастее'), $this->object->getFirstNameCase());
    }
    public function testNameMan380()
    {
        $this->object->setFirstName('Юлиан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлиан,Юлиана,Юлиану,Юлиана,Юлианом,Юлиане'), $this->object->getFirstNameCase());
    }
    public function testNameMan381()
    {
        $this->object->setFirstName('Корней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корней,Корнея,Корнею,Корнея,Корнеем,Корнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan382()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанас,Афанаса,Афанасу,Афанаса,Афанасом,Афанасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan383()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феодосий,Феодосия,Феодосию,Феодосия,Феодосием,Феодосии'), $this->object->getFirstNameCase());
    }
    public function testNameMan384()
    {
        $this->object->setFirstName('Панкратий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкратий,Панкратия,Панкратию,Панкратия,Панкратием,Панкратии'), $this->object->getFirstNameCase());
    }
    public function testNameMan385()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Митрофан,Митрофана,Митрофану,Митрофана,Митрофаном,Митрофане'), $this->object->getFirstNameCase());
    }
    public function testNameMan386()
    {
        $this->object->setFirstName('Герман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герман,Германа,Герману,Германа,Германом,Германе'), $this->object->getFirstNameCase());
    }
    public function testNameMan387()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславу,Борислава,Бориславом,Бориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan388()
    {
        $this->object->setFirstName('Исак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исак,Исака,Исаку,Исака,Исаком,Исаке'), $this->object->getFirstNameCase());
    }
    public function testNameMan389()
    {
        $this->object->setFirstName('Модест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Модест,Модеста,Модесту,Модеста,Модестом,Модесте'), $this->object->getFirstNameCase());
    }
    public function testNameMan390()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Теймураз,Теймураза,Теймуразу,Теймураза,Теймуразом,Теймуразе'), $this->object->getFirstNameCase());
    }
    public function testNameMan391()
    {
        $this->object->setFirstName('Пантелеймон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пантелеймон,Пантелеймона,Пантелеймону,Пантелеймона,Пантелеймоном,Пантелеймоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan392()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимий,Ефимия,Ефимию,Ефимия,Ефимием,Ефимии'), $this->object->getFirstNameCase());
    }
    public function testNameMan393()
    {
        $this->object->setFirstName('Емельян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Емельян,Емельяна,Емельяну,Емельяна,Емельяном,Емельяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan394()
    {
        $this->object->setFirstName('Филат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филат,Филата,Филату,Филата,Филатом,Филате'), $this->object->getFirstNameCase());
    }
    public function testNameMan395()
    {
        $this->object->setFirstName('Евсей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евсей,Евсея,Евсею,Евсея,Евсеем,Евсее'), $this->object->getFirstNameCase());
    }
    public function testNameMan396()
    {
        $this->object->setFirstName('Ермолай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермолай,Ермолая,Ермолаю,Ермолая,Ермолаем,Ермолае'), $this->object->getFirstNameCase());
    }
    public function testNameMan397()
    {
        $this->object->setFirstName('Родион');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родион,Родиона,Родиону,Родиона,Родионом,Родионе'), $this->object->getFirstNameCase());
    }
    public function testNameMan398()
    {
        $this->object->setFirstName('Евстигней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евстигней,Евстигнея,Евстигнею,Евстигнея,Евстигнеем,Евстигнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan399()
    {
        $this->object->setFirstName('Федосий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федосий,Федосия,Федосию,Федосия,Федосием,Федосии'), $this->object->getFirstNameCase());
    }
    public function testNameMan400()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поликарп,Поликарпа,Поликарпу,Поликарпа,Поликарпом,Поликарпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan401()
    {
        $this->object->setFirstName('Игнат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнат,Игната,Игнату,Игната,Игнатом,Игнате'), $this->object->getFirstNameCase());
    }
    public function testNameMan402()
    {
        $this->object->setFirstName('Андрей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрей,Андрея,Андрею,Андрея,Андреем,Андрее'), $this->object->getFirstNameCase());
    }
    public function testNameMan403()
    {
        $this->object->setFirstName('Пимен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пимен,Пимена,Пимену,Пимена,Пименом,Пимене'), $this->object->getFirstNameCase());
    }
    public function testNameMan404()
    {
        $this->object->setFirstName('Макар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макар,Макара,Макару,Макара,Макаром,Макаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan405()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михаил,Михаила,Михаилу,Михаила,Михаилом,Михаиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan406()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокопий,Прокопия,Прокопию,Прокопия,Прокопием,Прокопии'), $this->object->getFirstNameCase());
    }
    public function testNameMan407()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людвиг,Людвига,Людвигу,Людвига,Людвигом,Людвиге'), $this->object->getFirstNameCase());
    }
    public function testNameMan408()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондрат,Кондрата,Кондрату,Кондрата,Кондратом,Кондрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan409()
    {
        $this->object->setFirstName('Федот');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федот,Федота,Федоту,Федота,Федотом,Федоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan410()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филипп,Филиппа,Филиппу,Филиппа,Филиппом,Филиппе'), $this->object->getFirstNameCase());
    }
    public function testNameMan411()
    {
        $this->object->setFirstName('Евстафий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евстафий,Евстафия,Евстафию,Евстафия,Евстафием,Евстафии'), $this->object->getFirstNameCase());
    }
    public function testNameMan412()
    {
        $this->object->setFirstName('Феофан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феофан,Феофана,Феофану,Феофана,Феофаном,Феофане'), $this->object->getFirstNameCase());
    }
    public function testNameMan413()
    {
        $this->object->setFirstName('Наум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наум,Наума,Науму,Наума,Наумом,Науме'), $this->object->getFirstNameCase());
    }
    public function testNameMan414()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфир,Порфира,Порфиру,Порфира,Порфиром,Порфире'), $this->object->getFirstNameCase());
    }
    public function testNameMan415()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герасим,Герасима,Герасиму,Герасима,Герасимом,Герасиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan416()
    {
        $this->object->setFirstName('Адам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адам,Адама,Адаму,Адама,Адамом,Адаме'), $this->object->getFirstNameCase());
    }
    public function testNameMan417()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Касьян,Касьяна,Касьяну,Касьяна,Касьяном,Касьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan418()
    {
        $this->object->setFirstName('Аверьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аверьян,Аверьяна,Аверьяну,Аверьяна,Аверьяном,Аверьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan419()
    {
        $this->object->setFirstName('Маркел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маркел,Маркела,Маркелу,Маркела,Маркелом,Маркеле'), $this->object->getFirstNameCase());
    }
    public function testNameMan420()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ксенофонт,Ксенофонта,Ксенофонту,Ксенофонта,Ксенофонтом,Ксенофонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan421()
    {
        $this->object->setFirstName('Фома');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фома,Фомы,Фоме,Фому,Фомой,Фоме'), $this->object->getFirstNameCase());
    }
    public function testNameMan422()
    {
        $this->object->setFirstName('Карп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карп,Карпа,Карпу,Карпа,Карпом,Карпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan423()
    {
        $this->object->setFirstName('Ефрем');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефрем,Ефрема,Ефрему,Ефрема,Ефремом,Ефреме'), $this->object->getFirstNameCase());
    }
    public function testNameMan424()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan425()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евдоким,Евдокима,Евдокиму,Евдокима,Евдокимом,Евдокиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan426()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исаак,Исаака,Исааку,Исаака,Исааком,Исааке'), $this->object->getFirstNameCase());
    }
    public function testNameMan427()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ксенофонт,Ксенофонта,Ксенофонту,Ксенофонта,Ксенофонтом,Ксенофонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan428()
    {
        $this->object->setFirstName('Наркис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наркис,Наркиса,Наркису,Наркиса,Наркисом,Наркисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan429()
    {
        $this->object->setFirstName('Леонтий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонтий,Леонтия,Леонтию,Леонтия,Леонтием,Леонтии'), $this->object->getFirstNameCase());
    }
    public function testNameMan430()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестор,Нестора,Нестору,Нестора,Нестором,Несторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan431()
    {
        $this->object->setFirstName('Спиридон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Спиридон,Спиридона,Спиридону,Спиридона,Спиридоном,Спиридоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan432()
    {
        $this->object->setFirstName('Евгений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгений,Евгения,Евгению,Евгения,Евгением,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameMan433()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфений,Парфения,Парфению,Парфения,Парфением,Парфении'), $this->object->getFirstNameCase());
    }
    public function testNameMan434()
    {
        $this->object->setFirstName('Кирей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирей,Кирея,Кирею,Кирея,Киреем,Кирее'), $this->object->getFirstNameCase());
    }
    public function testNameMan435()
    {
        $this->object->setFirstName('Семен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семен,Семена,Семену,Семена,Семеном,Семене'), $this->object->getFirstNameCase());
    }
    public function testNameMan436()
    {
        $this->object->setFirstName('Искандер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Искандер,Искандера,Искандеру,Искандера,Искандером,Искандере'), $this->object->getFirstNameCase());
    }
    public function testNameMan437()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславу,Владислава,Владиславом,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan438()
    {
        $this->object->setFirstName('Давид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давид,Давида,Давиду,Давида,Давидом,Давиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan439()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфений,Парфения,Парфению,Парфения,Парфением,Парфении'), $this->object->getFirstNameCase());
    }
    public function testNameMan440()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфений,Парфения,Парфению,Парфения,Парфением,Парфении'), $this->object->getFirstNameCase());
    }
    public function testNameMan441()
    {
        $this->object->setFirstName('Прохор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прохор,Прохора,Прохору,Прохора,Прохором,Прохоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan442()
    {
        $this->object->setFirstName('Марк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марк,Марка,Марку,Марка,Марком,Марке'), $this->object->getFirstNameCase());
    }
    public function testNameMan443()
    {
        $this->object->setFirstName('Карп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карп,Карпа,Карпу,Карпа,Карпом,Карпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan444()
    {
        $this->object->setFirstName('Игнат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнат,Игната,Игнату,Игната,Игнатом,Игнате'), $this->object->getFirstNameCase());
    }
    public function testNameMan445()
    {
        $this->object->setFirstName('Леон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леон,Леона,Леону,Леона,Леоном,Леоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan446()
    {
        $this->object->setFirstName('Никон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никон,Никона,Никону,Никона,Никоном,Никоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan447()
    {
        $this->object->setFirstName('Нейл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нейл,Нейла,Нейлу,Нейла,Нейлом,Нейле'), $this->object->getFirstNameCase());
    }
    public function testNameMan448()
    {
        $this->object->setFirstName('Нефед');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нефед,Нефеда,Нефеду,Нефеда,Нефедом,Нефеде'), $this->object->getFirstNameCase());
    }
    public function testNameMan449()
    {
        $this->object->setFirstName('Герман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герман,Германа,Герману,Германа,Германом,Германе'), $this->object->getFirstNameCase());
    }
    public function testNameMan450()
    {
        $this->object->setFirstName('Наум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наум,Наума,Науму,Наума,Наумом,Науме'), $this->object->getFirstNameCase());
    }
    public function testNameMan451()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярослав,Ярослава,Ярославу,Ярослава,Ярославом,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan452()
    {
        $this->object->setFirstName('Родион');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родион,Родиона,Родиону,Родиона,Родионом,Родионе'), $this->object->getFirstNameCase());
    }
    public function testNameMan453()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Теймураз,Теймураза,Теймуразу,Теймураза,Теймуразом,Теймуразе'), $this->object->getFirstNameCase());
    }
    public function testNameMan454()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никодим,Никодима,Никодиму,Никодима,Никодимом,Никодиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan455()
    {
        $this->object->setFirstName('Макар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макар,Макара,Макару,Макара,Макаром,Макаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan456()
    {
        $this->object->setFirstName('Мирон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мирон,Мирона,Мирону,Мирона,Мироном,Мироне'), $this->object->getFirstNameCase());
    }
    public function testNameMan457()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьма,Кузьмы,Кузьме,Кузьму,Кузьмой,Кузьме'), $this->object->getFirstNameCase());
    }
    public function testNameMan458()
    {
        $this->object->setFirstName('Мартын');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мартын,Мартына,Мартыну,Мартына,Мартыном,Мартыне'), $this->object->getFirstNameCase());
    }
    public function testNameMan459()
    {
        $this->object->setFirstName('Евстигней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евстигней,Евстигнея,Евстигнею,Евстигнея,Евстигнеем,Евстигнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan460()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Терентий,Терентия,Терентию,Терентия,Терентием,Терентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan461()
    {
        $this->object->setFirstName('Федот');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федот,Федота,Федоту,Федота,Федотом,Федоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan462()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславу,Владислава,Владиславом,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan463()
    {
        $this->object->setFirstName('Климентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климентий,Климентия,Климентию,Климентия,Климентием,Климентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan464()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Терентий,Терентия,Терентию,Терентия,Терентием,Терентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan465()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофей,Тимофея,Тимофею,Тимофея,Тимофеем,Тимофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan466()
    {
        $this->object->setFirstName('Осип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осип,Осипа,Осипу,Осипа,Осипом,Осипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan467()
    {
        $this->object->setFirstName('Левон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Левон,Левона,Левону,Левона,Левоном,Левоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan468()
    {
        $this->object->setFirstName('Александр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александр,Александра,Александру,Александра,Александром,Александре'), $this->object->getFirstNameCase());
    }
    public function testNameMan469()
    {
        $this->object->setFirstName('Кондратий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондратий,Кондратия,Кондратию,Кондратия,Кондратием,Кондратии'), $this->object->getFirstNameCase());
    }
    public function testNameMan470()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харлам,Харлама,Харламу,Харлама,Харламом,Харламе'), $this->object->getFirstNameCase());
    }
    public function testNameMan471()
    {
        $this->object->setFirstName('Артур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артур,Артура,Артуру,Артура,Артуром,Артуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan472()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan473()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никифор,Никифора,Никифору,Никифора,Никифором,Никифоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan474()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондрат,Кондрата,Кондрату,Кондрата,Кондратом,Кондрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan475()
    {
        $this->object->setFirstName('Родион');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родион,Родиона,Родиону,Родиона,Родионом,Родионе'), $this->object->getFirstNameCase());
    }
    public function testNameMan476()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поликарп,Поликарпа,Поликарпу,Поликарпа,Поликарпом,Поликарпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan477()
    {
        $this->object->setFirstName('Степан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степан,Степана,Степану,Степана,Степаном,Степане'), $this->object->getFirstNameCase());
    }
    public function testNameMan478()
    {
        $this->object->setFirstName('Геннадий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Геннадий,Геннадия,Геннадию,Геннадия,Геннадием,Геннадии'), $this->object->getFirstNameCase());
    }
    public function testNameMan479()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкрат,Панкрата,Панкрату,Панкрата,Панкратом,Панкрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan480()
    {
        $this->object->setFirstName('Эдгард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдгард,Эдгарда,Эдгарду,Эдгарда,Эдгардом,Эдгарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan481()
    {
        $this->object->setFirstName('Максим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максим,Максима,Максиму,Максима,Максимом,Максиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan482()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Касьян,Касьяна,Касьяну,Касьяна,Касьяном,Касьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan483()
    {
        $this->object->setFirstName('Валерий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерий,Валерия,Валерию,Валерия,Валерием,Валерии'), $this->object->getFirstNameCase());
    }
    public function testNameMan484()
    {
        $this->object->setFirstName('Калина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калина,Калины,Калине,Калину,Калиной,Калине'), $this->object->getFirstNameCase());
    }
    public function testNameMan485()
    {
        $this->object->setFirstName('Викентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Викентий,Викентия,Викентию,Викентия,Викентием,Викентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan486()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Митрофан,Митрофана,Митрофану,Митрофана,Митрофаном,Митрофане'), $this->object->getFirstNameCase());
    }
    public function testNameMan487()
    {
        $this->object->setFirstName('Устин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Устин,Устина,Устину,Устина,Устином,Устине'), $this->object->getFirstNameCase());
    }
    public function testNameMan488()
    {
        $this->object->setFirstName('Платон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платон,Платона,Платону,Платона,Платоном,Платоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan489()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфирий,Порфирия,Порфирию,Порфирия,Порфирием,Порфирии'), $this->object->getFirstNameCase());
    }
    public function testNameMan490()
    {
        $this->object->setFirstName('Корней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корней,Корнея,Корнею,Корнея,Корнеем,Корнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan491()
    {
        $this->object->setFirstName('Леонтий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонтий,Леонтия,Леонтию,Леонтия,Леонтием,Леонтии'), $this->object->getFirstNameCase());
    }
    public function testNameMan492()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герасим,Герасима,Герасиму,Герасима,Герасимом,Герасиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan493()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валериан,Валериана,Валериану,Валериана,Валерианом,Валериане'), $this->object->getFirstNameCase());
    }
    public function testNameMan494()
    {
        $this->object->setFirstName('Онуфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онуфрий,Онуфрия,Онуфрию,Онуфрия,Онуфрием,Онуфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan495()
    {
        $this->object->setFirstName('Клим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Клим,Клима,Климу,Клима,Климом,Климе'), $this->object->getFirstNameCase());
    }
    public function testNameMan496()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосиф,Иосифа,Иосифу,Иосифа,Иосифом,Иосифе'), $this->object->getFirstNameCase());
    }
    public function testNameMan497()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan498()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсен,Арсена,Арсену,Арсена,Арсеном,Арсене'), $this->object->getFirstNameCase());
    }
    public function testNameMan499()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евдоким,Евдокима,Евдокиму,Евдокима,Евдокимом,Евдокиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan500()
    {
        $this->object->setFirstName('Авдей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авдей,Авдея,Авдею,Авдея,Авдеем,Авдее'), $this->object->getFirstNameCase());
    }
    public function testNameMan501()
    {
        $this->object->setFirstName('Семен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семен,Семена,Семену,Семена,Семеном,Семене'), $this->object->getFirstNameCase());
    }
    public function testNameMan502()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мстислав,Мстислава,Мстиславу,Мстислава,Мстиславом,Мстиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan503()
    {
        $this->object->setFirstName('Конон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Конон,Конона,Конону,Конона,Кононом,Кононе'), $this->object->getFirstNameCase());
    }
    public function testNameMan504()
    {
        $this->object->setFirstName('Демьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демьян,Демьяна,Демьяну,Демьяна,Демьяном,Демьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan505()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людвиг,Людвига,Людвигу,Людвига,Людвигом,Людвиге'), $this->object->getFirstNameCase());
    }
    public function testNameMan506()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поликарп,Поликарпа,Поликарпу,Поликарпа,Поликарпом,Поликарпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan507()
    {
        $this->object->setFirstName('Фрол');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фрол,Фрола,Фролу,Фрола,Фролом,Фроле'), $this->object->getFirstNameCase());
    }
    public function testNameMan508()
    {
        $this->object->setFirstName('Капитон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Капитон,Капитона,Капитону,Капитона,Капитоном,Капитоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan509()
    {
        $this->object->setFirstName('Ефрем');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефрем,Ефрема,Ефрему,Ефрема,Ефремом,Ефреме'), $this->object->getFirstNameCase());
    }
    public function testNameMan510()
    {
        $this->object->setFirstName('Трофим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трофим,Трофима,Трофиму,Трофима,Трофимом,Трофиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan511()
    {
        $this->object->setFirstName('Потап');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Потап,Потапа,Потапу,Потапа,Потапом,Потапе'), $this->object->getFirstNameCase());
    }
    public function testNameMan512()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роберт,Роберта,Роберту,Роберта,Робертом,Роберте'), $this->object->getFirstNameCase());
    }
    public function testNameMan513()
    {
        $this->object->setFirstName('Борис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борис,Бориса,Борису,Бориса,Борисом,Борисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan514()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ксенофонт,Ксенофонта,Ксенофонту,Ксенофонта,Ксенофонтом,Ксенофонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan515()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорофей,Дорофея,Дорофею,Дорофея,Дорофеем,Дорофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan516()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ростислав,Ростислава,Ростиславу,Ростислава,Ростиславом,Ростиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan517()
    {
        $this->object->setFirstName('Андрей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрей,Андрея,Андрею,Андрея,Андреем,Андрее'), $this->object->getFirstNameCase());
    }
    public function testNameMan518()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Руслан,Руслана,Руслану,Руслана,Русланом,Руслане'), $this->object->getFirstNameCase());
    }
    public function testNameMan519()
    {
        $this->object->setFirstName('Петр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петр,Петра,Петру,Петра,Петром,Петре'), $this->object->getFirstNameCase());
    }
    public function testNameMan520()
    {
        $this->object->setFirstName('Прокоп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокоп,Прокопа,Прокопу,Прокопа,Прокопом,Прокопе'), $this->object->getFirstNameCase());
    }
    public function testNameMan521()
    {
        $this->object->setFirstName('Прокопий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокопий,Прокопия,Прокопию,Прокопия,Прокопием,Прокопии'), $this->object->getFirstNameCase());
    }
    public function testNameMan522()
    {
        $this->object->setFirstName('Ермолай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермолай,Ермолая,Ермолаю,Ермолая,Ермолаем,Ермолае'), $this->object->getFirstNameCase());
    }
    public function testNameMan523()
    {
        $this->object->setFirstName('Кирей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирей,Кирея,Кирею,Кирея,Киреем,Кирее'), $this->object->getFirstNameCase());
    }
    public function testNameMan524()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокофий,Прокофия,Прокофию,Прокофия,Прокофием,Прокофии'), $this->object->getFirstNameCase());
    }
    public function testNameMan525()
    {
        $this->object->setFirstName('Созонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Созонт,Созонта,Созонту,Созонта,Созонтом,Созонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan526()
    {
        $this->object->setFirstName('Маркел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маркел,Маркела,Маркелу,Маркела,Маркелом,Маркеле'), $this->object->getFirstNameCase());
    }
    public function testNameMan527()
    {
        $this->object->setFirstName('Филат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филат,Филата,Филату,Филата,Филатом,Филате'), $this->object->getFirstNameCase());
    }
    public function testNameMan528()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Венедикт,Венедикта,Венедикту,Венедикта,Венедиктом,Венедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan529()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосиф,Иосифа,Иосифу,Иосифа,Иосифом,Иосифе'), $this->object->getFirstNameCase());
    }
    public function testNameMan530()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестер,Нестера,Нестеру,Нестера,Нестером,Нестере'), $this->object->getFirstNameCase());
    }
    public function testNameMan531()
    {
        $this->object->setFirstName('Корнелий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корнелий,Корнелия,Корнелию,Корнелия,Корнелием,Корнелии'), $this->object->getFirstNameCase());
    }
    public function testNameMan532()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan533()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Даниил,Даниила,Даниилу,Даниила,Даниилом,Данииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan534()
    {
        $this->object->setFirstName('Емельян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Емельян,Емельяна,Емельяну,Емельяна,Емельяном,Емельяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan535()
    {
        $this->object->setFirstName('Марк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марк,Марка,Марку,Марка,Марком,Марке'), $this->object->getFirstNameCase());
    }
    public function testNameMan536()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьма,Кузьмы,Кузьме,Кузьму,Кузьмой,Кузьме'), $this->object->getFirstNameCase());
    }
    public function testNameMan537()
    {
        $this->object->setFirstName('Прокофий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прокофий,Прокофия,Прокофию,Прокофия,Прокофием,Прокофии'), $this->object->getFirstNameCase());
    }
    public function testNameMan538()
    {
        $this->object->setFirstName('Мокей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мокей,Мокея,Мокею,Мокея,Мокеем,Мокее'), $this->object->getFirstNameCase());
    }
    public function testNameMan539()
    {
        $this->object->setFirstName('Отто');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Отто,Отто,Отто,Отто,Отто,Отто'), $this->object->getFirstNameCase());
    }
    public function testNameMan540()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеслав,Вячеслава,Вячеславу,Вячеслава,Вячеславом,Вячеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan541()
    {
        $this->object->setFirstName('Аркадий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадий,Аркадия,Аркадию,Аркадия,Аркадием,Аркадии'), $this->object->getFirstNameCase());
    }
    public function testNameMan542()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan543()
    {
        $this->object->setFirstName('Валерий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерий,Валерия,Валерию,Валерия,Валерием,Валерии'), $this->object->getFirstNameCase());
    }
    public function testNameMan544()
    {
        $this->object->setFirstName('Сергий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергий,Сергия,Сергию,Сергия,Сергием,Сергии'), $this->object->getFirstNameCase());
    }
    public function testNameMan545()
    {
        $this->object->setFirstName('Борис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борис,Бориса,Борису,Бориса,Борисом,Борисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan546()
    {
        $this->object->setFirstName('Орест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орест,Ореста,Оресту,Ореста,Орестом,Оресте'), $this->object->getFirstNameCase());
    }
    public function testNameMan547()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилор,Вилора,Вилору,Вилора,Вилором,Вилоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan548()
    {
        $this->object->setFirstName('Созонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Созонт,Созонта,Созонту,Созонта,Созонтом,Созонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan549()
    {
        $this->object->setFirstName('Макар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макар,Макара,Макару,Макара,Макаром,Макаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan550()
    {
        $this->object->setFirstName('Изот');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Изот,Изота,Изоту,Изота,Изотом,Изоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan551()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гертруд,Гертруда,Гертруду,Гертруда,Гертрудом,Гертруде'), $this->object->getFirstNameCase());
    }
    public function testNameMan552()
    {
        $this->object->setFirstName('Фрол');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фрол,Фрола,Фролу,Фрола,Фролом,Фроле'), $this->object->getFirstNameCase());
    }
    public function testNameMan553()
    {
        $this->object->setFirstName('Роман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роман,Романа,Роману,Романа,Романом,Романе'), $this->object->getFirstNameCase());
    }
    public function testNameMan554()
    {
        $this->object->setFirstName('Лев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лев,Льва,Льву,Льва,Львом,Льве'), $this->object->getFirstNameCase());
    }
    public function testNameMan555()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan556()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan557()
    {
        $this->object->setFirstName('Роман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роман,Романа,Роману,Романа,Романом,Романе'), $this->object->getFirstNameCase());
    }
    public function testNameMan558()
    {
        $this->object->setFirstName('Панкратий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкратий,Панкратия,Панкратию,Панкратия,Панкратием,Панкратии'), $this->object->getFirstNameCase());
    }
    public function testNameMan559()
    {
        $this->object->setFirstName('Юлиан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлиан,Юлиана,Юлиану,Юлиана,Юлианом,Юлиане'), $this->object->getFirstNameCase());
    }
    public function testNameMan560()
    {
        $this->object->setFirstName('Искандер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Искандер,Искандера,Искандеру,Искандера,Искандером,Искандере'), $this->object->getFirstNameCase());
    }
    public function testNameMan561()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan562()
    {
        $this->object->setFirstName('Никита');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никита,Никиты,Никите,Никиту,Никитой,Никите'), $this->object->getFirstNameCase());
    }
    public function testNameMan563()
    {
        $this->object->setFirstName('Жан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жан,Жана,Жану,Жана,Жаном,Жане'), $this->object->getFirstNameCase());
    }
    public function testNameMan564()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонид,Леонида,Леониду,Леонида,Леонидом,Леониде'), $this->object->getFirstNameCase());
    }
    public function testNameMan565()
    {
        $this->object->setFirstName('Нефед');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нефед,Нефеда,Нефеду,Нефеда,Нефедом,Нефеде'), $this->object->getFirstNameCase());
    }
    public function testNameMan566()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харлам,Харлама,Харламу,Харлама,Харламом,Харламе'), $this->object->getFirstNameCase());
    }
    public function testNameMan567()
    {
        $this->object->setFirstName('Полиграф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полиграф,Полиграфа,Полиграфу,Полиграфа,Полиграфом,Полиграфе'), $this->object->getFirstNameCase());
    }
    public function testNameMan568()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Святослав,Святослава,Святославу,Святослава,Святославом,Святославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan569()
    {
        $this->object->setFirstName('Кирей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирей,Кирея,Кирею,Кирея,Киреем,Кирее'), $this->object->getFirstNameCase());
    }
    public function testNameMan570()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярослав,Ярослава,Ярославу,Ярослава,Ярославом,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan571()
    {
        $this->object->setFirstName('Ян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ян,Яна,Яну,Яна,Яном,Яне'), $this->object->getFirstNameCase());
    }
    public function testNameMan572()
    {
        $this->object->setFirstName('Касьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Касьян,Касьяна,Касьяну,Касьяна,Касьяном,Касьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan573()
    {
        $this->object->setFirstName('Яков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яков,Якова,Якову,Якова,Яковом,Якове'), $this->object->getFirstNameCase());
    }
    public function testNameMan574()
    {
        $this->object->setFirstName('Онуфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онуфрий,Онуфрия,Онуфрию,Онуфрия,Онуфрием,Онуфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan575()
    {
        $this->object->setFirstName('Олег');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олег,Олега,Олегу,Олега,Олегом,Олеге'), $this->object->getFirstNameCase());
    }
    public function testNameMan576()
    {
        $this->object->setFirstName('Артем');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артем,Артема,Артему,Артема,Артемом,Артеме'), $this->object->getFirstNameCase());
    }
    public function testNameMan577()
    {
        $this->object->setFirstName('Влас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Влас,Власа,Власу,Власа,Власом,Власе'), $this->object->getFirstNameCase());
    }
    public function testNameMan578()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ростислав,Ростислава,Ростиславу,Ростислава,Ростиславом,Ростиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan579()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеслав,Вячеслава,Вячеславу,Вячеслава,Вячеславом,Вячеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan580()
    {
        $this->object->setFirstName('Илья');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Илья,Ильи,Илье,Илью,Ильей,Илье'), $this->object->getFirstNameCase());
    }
    public function testNameMan581()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеслав,Вячеслава,Вячеславу,Вячеслава,Вячеславом,Вячеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan582()
    {
        $this->object->setFirstName('Николай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николай,Николая,Николаю,Николая,Николаем,Николае'), $this->object->getFirstNameCase());
    }
    public function testNameMan583()
    {
        $this->object->setFirstName('Давид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давид,Давида,Давиду,Давида,Давидом,Давиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan584()
    {
        $this->object->setFirstName('Кирей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирей,Кирея,Кирею,Кирея,Киреем,Кирее'), $this->object->getFirstNameCase());
    }
    public function testNameMan585()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Руслан,Руслана,Руслану,Руслана,Русланом,Руслане'), $this->object->getFirstNameCase());
    }
    public function testNameMan586()
    {
        $this->object->setFirstName('Ануфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ануфрий,Ануфрия,Ануфрию,Ануфрия,Ануфрием,Ануфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan587()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Виктор,Виктора,Виктору,Виктора,Виктором,Викторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan588()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan589()
    {
        $this->object->setFirstName('Николай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николай,Николая,Николаю,Николая,Николаем,Николае'), $this->object->getFirstNameCase());
    }
    public function testNameMan590()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславу,Борислава,Бориславом,Бориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan591()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимий,Ефимия,Ефимию,Ефимия,Ефимием,Ефимии'), $this->object->getFirstNameCase());
    }
    public function testNameMan592()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan593()
    {
        $this->object->setFirstName('Созон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Созон,Созона,Созону,Созона,Созоном,Созоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan594()
    {
        $this->object->setFirstName('Адам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адам,Адама,Адаму,Адама,Адамом,Адаме'), $this->object->getFirstNameCase());
    }
    public function testNameMan595()
    {
        $this->object->setFirstName('Андрей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрей,Андрея,Андрею,Андрея,Андреем,Андрее'), $this->object->getFirstNameCase());
    }
    public function testNameMan596()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидор,Сидора,Сидору,Сидора,Сидором,Сидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan597()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan598()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславу,Владислава,Владиславом,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan599()
    {
        $this->object->setFirstName('Харлампий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харлампий,Харлампия,Харлампию,Харлампия,Харлампием,Харлампии'), $this->object->getFirstNameCase());
    }
    public function testNameMan600()
    {
        $this->object->setFirstName('Назар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Назар,Назара,Назару,Назара,Назаром,Назаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan601()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатолий,Анатолия,Анатолию,Анатолия,Анатолием,Анатолии'), $this->object->getFirstNameCase());
    }
    public function testNameMan602()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людвиг,Людвига,Людвигу,Людвига,Людвигом,Людвиге'), $this->object->getFirstNameCase());
    }
    public function testNameMan603()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гертруд,Гертруда,Гертруду,Гертруда,Гертрудом,Гертруде'), $this->object->getFirstNameCase());
    }
    public function testNameMan604()
    {
        $this->object->setFirstName('Елисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елисей,Елисея,Елисею,Елисея,Елисеем,Елисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan605()
    {
        $this->object->setFirstName('Захар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захар,Захара,Захару,Захара,Захаром,Захаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan606()
    {
        $this->object->setFirstName('Геннадий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Геннадий,Геннадия,Геннадию,Геннадия,Геннадием,Геннадии'), $this->object->getFirstNameCase());
    }
    public function testNameMan607()
    {
        $this->object->setFirstName('Максим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максим,Максима,Максиму,Максима,Максимом,Максиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan608()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владлен,Владлена,Владлену,Владлена,Владленом,Владлене'), $this->object->getFirstNameCase());
    }
    public function testNameMan609()
    {
        $this->object->setFirstName('Харитон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харитон,Харитона,Харитону,Харитона,Харитоном,Харитоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan610()
    {
        $this->object->setFirstName('Иосиф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иосиф,Иосифа,Иосифу,Иосифа,Иосифом,Иосифе'), $this->object->getFirstNameCase());
    }
    public function testNameMan611()
    {
        $this->object->setFirstName('Мина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мина,Мины,Мине,Мину,Миной,Мине'), $this->object->getFirstNameCase());
    }
    public function testNameMan612()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитрий,Дмитрия,Дмитрию,Дмитрия,Дмитрием,Дмитрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan613()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пантелей,Пантелея,Пантелею,Пантелея,Пантелеем,Пантелее'), $this->object->getFirstNameCase());
    }
    public function testNameMan614()
    {
        $this->object->setFirstName('Давид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давид,Давида,Давиду,Давида,Давидом,Давиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan615()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексей,Алексея,Алексею,Алексея,Алексеем,Алексее'), $this->object->getFirstNameCase());
    }
    public function testNameMan616()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каллистрат,Каллистрата,Каллистрату,Каллистрата,Каллистратом,Каллистрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan617()
    {
        $this->object->setFirstName('Лукьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лукьян,Лукьяна,Лукьяну,Лукьяна,Лукьяном,Лукьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan618()
    {
        $this->object->setFirstName('Гурий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гурий,Гурия,Гурию,Гурия,Гурием,Гурии'), $this->object->getFirstNameCase());
    }
    public function testNameMan619()
    {
        $this->object->setFirstName('Артемий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артемий,Артемия,Артемию,Артемия,Артемием,Артемии'), $this->object->getFirstNameCase());
    }
    public function testNameMan620()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мстислав,Мстислава,Мстиславу,Мстислава,Мстиславом,Мстиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan621()
    {
        $this->object->setFirstName('Филат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филат,Филата,Филату,Филата,Филатом,Филате'), $this->object->getFirstNameCase());
    }
    public function testNameMan622()
    {
        $this->object->setFirstName('Артур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артур,Артура,Артуру,Артура,Артуром,Артуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan623()
    {
        $this->object->setFirstName('Эдуард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуард,Эдуарда,Эдуарду,Эдуарда,Эдуардом,Эдуарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan624()
    {
        $this->object->setFirstName('Созон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Созон,Созона,Созону,Созона,Созоном,Созоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan625()
    {
        $this->object->setFirstName('Исак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исак,Исака,Исаку,Исака,Исаком,Исаке'), $this->object->getFirstNameCase());
    }
    public function testNameMan626()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филипп,Филиппа,Филиппу,Филиппа,Филиппом,Филиппе'), $this->object->getFirstNameCase());
    }
    public function testNameMan627()
    {
        $this->object->setFirstName('Клим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Клим,Клима,Климу,Клима,Климом,Климе'), $this->object->getFirstNameCase());
    }
    public function testNameMan628()
    {
        $this->object->setFirstName('Демьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демьян,Демьяна,Демьяну,Демьяна,Демьяном,Демьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan629()
    {
        $this->object->setFirstName('Нарцис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нарцис,Нарциса,Нарцису,Нарциса,Нарцисом,Нарцисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan630()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидор,Сидора,Сидору,Сидора,Сидором,Сидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan631()
    {
        $this->object->setFirstName('Ермил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермил,Ермила,Ермилу,Ермила,Ермилом,Ермиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan632()
    {
        $this->object->setFirstName('Павел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павел,Павла,Павлу,Павла,Павлом,Павле'), $this->object->getFirstNameCase());
    }
    public function testNameMan633()
    {
        $this->object->setFirstName('Герман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герман,Германа,Герману,Германа,Германом,Германе'), $this->object->getFirstNameCase());
    }
    public function testNameMan634()
    {
        $this->object->setFirstName('Мирон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мирон,Мирона,Мирону,Мирона,Мироном,Мироне'), $this->object->getFirstNameCase());
    }
    public function testNameMan635()
    {
        $this->object->setFirstName('Кирилл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирилл,Кирилла,Кириллу,Кирилла,Кириллом,Кирилле'), $this->object->getFirstNameCase());
    }
    public function testNameMan636()
    {
        $this->object->setFirstName('Никандр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никандр,Никандра,Никандру,Никандра,Никандром,Никандре'), $this->object->getFirstNameCase());
    }
    public function testNameMan637()
    {
        $this->object->setFirstName('Эдуард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуард,Эдуарда,Эдуарду,Эдуарда,Эдуардом,Эдуарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan638()
    {
        $this->object->setFirstName('Сергий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергий,Сергия,Сергию,Сергия,Сергием,Сергии'), $this->object->getFirstNameCase());
    }
    public function testNameMan639()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феодосий,Феодосия,Феодосию,Феодосия,Феодосием,Феодосии'), $this->object->getFirstNameCase());
    }
    public function testNameMan640()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фадей,Фадея,Фадею,Фадея,Фадеем,Фадее'), $this->object->getFirstNameCase());
    }
    public function testNameMan641()
    {
        $this->object->setFirstName('Евсей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евсей,Евсея,Евсею,Евсея,Евсеем,Евсее'), $this->object->getFirstNameCase());
    }
    public function testNameMan642()
    {
        $this->object->setFirstName('Юрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрий,Юрия,Юрию,Юрия,Юрием,Юрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan643()
    {
        $this->object->setFirstName('Лев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лев,Льва,Льву,Льва,Львом,Льве'), $this->object->getFirstNameCase());
    }
    public function testNameMan644()
    {
        $this->object->setFirstName('Ян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ян,Яна,Яну,Яна,Яном,Яне'), $this->object->getFirstNameCase());
    }
    public function testNameMan645()
    {
        $this->object->setFirstName('Демид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демид,Демида,Демиду,Демида,Демидом,Демиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan646()
    {
        $this->object->setFirstName('Михей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михей,Михея,Михею,Михея,Михеем,Михее'), $this->object->getFirstNameCase());
    }
    public function testNameMan647()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилор,Вилора,Вилору,Вилора,Вилором,Вилоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan648()
    {
        $this->object->setFirstName('Терентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Терентий,Терентия,Терентию,Терентия,Терентием,Терентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan649()
    {
        $this->object->setFirstName('Арсений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсений,Арсения,Арсению,Арсения,Арсением,Арсении'), $this->object->getFirstNameCase());
    }
    public function testNameMan650()
    {
        $this->object->setFirstName('Федор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федор,Федора,Федору,Федора,Федором,Федоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan651()
    {
        $this->object->setFirstName('Онисим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онисим,Онисима,Онисиму,Онисима,Онисимом,Онисиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan652()
    {
        $this->object->setFirstName('Иларион');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иларион,Илариона,Илариону,Илариона,Иларионом,Иларионе'), $this->object->getFirstNameCase());
    }
    public function testNameMan653()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергей,Сергея,Сергею,Сергея,Сергеем,Сергее'), $this->object->getFirstNameCase());
    }
    public function testNameMan654()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владлен,Владлена,Владлену,Владлена,Владленом,Владлене'), $this->object->getFirstNameCase());
    }
    public function testNameMan655()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моисей,Моисея,Моисею,Моисея,Моисеем,Моисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan656()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ксенофонт,Ксенофонта,Ксенофонту,Ксенофонта,Ксенофонтом,Ксенофонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan657()
    {
        $this->object->setFirstName('Исидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исидор,Исидора,Исидору,Исидора,Исидором,Исидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan658()
    {
        $this->object->setFirstName('Исак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исак,Исака,Исаку,Исака,Исаком,Исаке'), $this->object->getFirstNameCase());
    }
    public function testNameMan659()
    {
        $this->object->setFirstName('Анисим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анисим,Анисима,Анисиму,Анисима,Анисимом,Анисиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan660()
    {
        $this->object->setFirstName('Демид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демид,Демида,Демиду,Демида,Демидом,Демиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan661()
    {
        $this->object->setFirstName('Панкратий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкратий,Панкратия,Панкратию,Панкратия,Панкратием,Панкратии'), $this->object->getFirstNameCase());
    }
    public function testNameMan662()
    {
        $this->object->setFirstName('Димитрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Димитрий,Димитрия,Димитрию,Димитрия,Димитрием,Димитрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan663()
    {
        $this->object->setFirstName('Нейл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нейл,Нейла,Нейлу,Нейла,Нейлом,Нейле'), $this->object->getFirstNameCase());
    }
    public function testNameMan664()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Митрофан,Митрофана,Митрофану,Митрофана,Митрофаном,Митрофане'), $this->object->getFirstNameCase());
    }
    public function testNameMan665()
    {
        $this->object->setFirstName('Карп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карп,Карпа,Карпу,Карпа,Карпом,Карпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan666()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зиновий,Зиновия,Зиновию,Зиновия,Зиновием,Зиновии'), $this->object->getFirstNameCase());
    }
    public function testNameMan667()
    {
        $this->object->setFirstName('Игнатий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнатий,Игнатия,Игнатию,Игнатия,Игнатием,Игнатии'), $this->object->getFirstNameCase());
    }
    public function testNameMan668()
    {
        $this->object->setFirstName('Назар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Назар,Назара,Назару,Назара,Назаром,Назаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan669()
    {
        $this->object->setFirstName('Аверьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аверьян,Аверьяна,Аверьяну,Аверьяна,Аверьяном,Аверьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan670()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофей,Тимофея,Тимофею,Тимофея,Тимофеем,Тимофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan671()
    {
        $this->object->setFirstName('Созон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Созон,Созона,Созону,Созона,Созоном,Созоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan672()
    {
        $this->object->setFirstName('Константин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константин,Константина,Константину,Константина,Константином,Константине'), $this->object->getFirstNameCase());
    }
    public function testNameMan673()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серафим,Серафима,Серафиму,Серафима,Серафимом,Серафиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan674()
    {
        $this->object->setFirstName('Вилен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилен,Вилена,Вилену,Вилена,Виленом,Вилене'), $this->object->getFirstNameCase());
    }
    public function testNameMan675()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорофей,Дорофея,Дорофею,Дорофея,Дорофеем,Дорофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan676()
    {
        $this->object->setFirstName('Гертруд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гертруд,Гертруда,Гертруду,Гертруда,Гертрудом,Гертруде'), $this->object->getFirstNameCase());
    }
    public function testNameMan677()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серафим,Серафима,Серафиму,Серафима,Серафимом,Серафиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan678()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михаил,Михаила,Михаилу,Михаила,Михаилом,Михаиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan679()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лазарь,Лазаря,Лазарю,Лазаря,Лазарем,Лазаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan680()
    {
        $this->object->setFirstName('Трифон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трифон,Трифона,Трифону,Трифона,Трифоном,Трифоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan681()
    {
        $this->object->setFirstName('Валерий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерий,Валерия,Валерию,Валерия,Валерием,Валерии'), $this->object->getFirstNameCase());
    }
    public function testNameMan682()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan683()
    {
        $this->object->setFirstName('Каллиник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каллиник,Каллиника,Каллинику,Каллиника,Каллиником,Каллинике'), $this->object->getFirstNameCase());
    }
    public function testNameMan684()
    {
        $this->object->setFirstName('Лев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лев,Льва,Льву,Льва,Львом,Льве'), $this->object->getFirstNameCase());
    }
    public function testNameMan685()
    {
        $this->object->setFirstName('Влас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Влас,Власа,Власу,Власа,Власом,Власе'), $this->object->getFirstNameCase());
    }
    public function testNameMan686()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестор,Нестора,Нестору,Нестора,Нестором,Несторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan687()
    {
        $this->object->setFirstName('Митрофан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Митрофан,Митрофана,Митрофану,Митрофана,Митрофаном,Митрофане'), $this->object->getFirstNameCase());
    }
    public function testNameMan688()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонид,Леонида,Леониду,Леонида,Леонидом,Леониде'), $this->object->getFirstNameCase());
    }
    public function testNameMan689()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захарий,Захария,Захарию,Захария,Захарием,Захарии'), $this->object->getFirstNameCase());
    }
    public function testNameMan690()
    {
        $this->object->setFirstName('Валентин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентин,Валентина,Валентину,Валентина,Валентином,Валентине'), $this->object->getFirstNameCase());
    }
    public function testNameMan691()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поликарп,Поликарпа,Поликарпу,Поликарпа,Поликарпом,Поликарпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan692()
    {
        $this->object->setFirstName('Адриан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адриан,Адриана,Адриану,Адриана,Адрианом,Адриане'), $this->object->getFirstNameCase());
    }
    public function testNameMan693()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславу,Владислава,Владиславом,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan694()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чеслав,Чеслава,Чеславу,Чеслава,Чеславом,Чеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan695()
    {
        $this->object->setFirstName('Назар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Назар,Назара,Назару,Назара,Назаром,Назаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan696()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонид,Леонида,Леониду,Леонида,Леонидом,Леониде'), $this->object->getFirstNameCase());
    }
    public function testNameMan697()
    {
        $this->object->setFirstName('Антип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антип,Антипа,Антипу,Антипа,Антипом,Антипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan698()
    {
        $this->object->setFirstName('Климент');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климент,Климента,Клименту,Климента,Климентом,Клименте'), $this->object->getFirstNameCase());
    }
    public function testNameMan699()
    {
        $this->object->setFirstName('Никанор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никанор,Никанора,Никанору,Никанора,Никанором,Никаноре'), $this->object->getFirstNameCase());
    }
    public function testNameMan700()
    {
        $this->object->setFirstName('Родион');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родион,Родиона,Родиону,Родиона,Родионом,Родионе'), $this->object->getFirstNameCase());
    }
    public function testNameMan701()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елизар,Елизара,Елизару,Елизара,Елизаром,Елизаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan702()
    {
        $this->object->setFirstName('Климентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климентий,Климентия,Климентию,Климентия,Климентием,Климентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan703()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Теймураз,Теймураза,Теймуразу,Теймураза,Теймуразом,Теймуразе'), $this->object->getFirstNameCase());
    }
    public function testNameMan704()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мстислав,Мстислава,Мстиславу,Мстислава,Мстиславом,Мстиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan705()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфир,Порфира,Порфиру,Порфира,Порфиром,Порфире'), $this->object->getFirstNameCase());
    }
    public function testNameMan706()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфирий,Порфирия,Порфирию,Порфирия,Порфирием,Порфирии'), $this->object->getFirstNameCase());
    }
    public function testNameMan707()
    {
        $this->object->setFirstName('Арсений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсений,Арсения,Арсению,Арсения,Арсением,Арсении'), $this->object->getFirstNameCase());
    }
    public function testNameMan708()
    {
        $this->object->setFirstName('Артур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артур,Артура,Артуру,Артура,Артуром,Артуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan709()
    {
        $this->object->setFirstName('Игнатий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнатий,Игнатия,Игнатию,Игнатия,Игнатием,Игнатии'), $this->object->getFirstNameCase());
    }
    public function testNameMan710()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофей,Тимофея,Тимофею,Тимофея,Тимофеем,Тимофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan711()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарас,Тараса,Тарасу,Тараса,Тарасом,Тарасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan712()
    {
        $this->object->setFirstName('Остап');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остап,Остапа,Остапу,Остапа,Остапом,Остапе'), $this->object->getFirstNameCase());
    }
    public function testNameMan713()
    {
        $this->object->setFirstName('Климент');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климент,Климента,Клименту,Климента,Климентом,Клименте'), $this->object->getFirstNameCase());
    }
    public function testNameMan714()
    {
        $this->object->setFirstName('Карп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карп,Карпа,Карпу,Карпа,Карпом,Карпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan715()
    {
        $this->object->setFirstName('Борис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борис,Бориса,Борису,Бориса,Борисом,Борисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan716()
    {
        $this->object->setFirstName('Феодосий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феодосий,Феодосия,Феодосию,Феодосия,Феодосием,Феодосии'), $this->object->getFirstNameCase());
    }
    public function testNameMan717()
    {
        $this->object->setFirstName('Нарцис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нарцис,Нарциса,Нарцису,Нарциса,Нарцисом,Нарцисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan718()
    {
        $this->object->setFirstName('Евгений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгений,Евгения,Евгению,Евгения,Евгением,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameMan719()
    {
        $this->object->setFirstName('Захар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захар,Захара,Захару,Захара,Захаром,Захаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan720()
    {
        $this->object->setFirstName('Онисим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онисим,Онисима,Онисиму,Онисима,Онисимом,Онисиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan721()
    {
        $this->object->setFirstName('Михаил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михаил,Михаила,Михаилу,Михаила,Михаилом,Михаиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan722()
    {
        $this->object->setFirstName('Минай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Минай,Миная,Минаю,Миная,Минаем,Минае'), $this->object->getFirstNameCase());
    }
    public function testNameMan723()
    {
        $this->object->setFirstName('Гаврила');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гаврила,Гаврилы,Гавриле,Гаврилу,Гаврилой,Гавриле'), $this->object->getFirstNameCase());
    }
    public function testNameMan724()
    {
        $this->object->setFirstName('Сергий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергий,Сергия,Сергию,Сергия,Сергием,Сергии'), $this->object->getFirstNameCase());
    }
    public function testNameMan725()
    {
        $this->object->setFirstName('Нефед');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нефед,Нефеда,Нефеду,Нефеда,Нефедом,Нефеде'), $this->object->getFirstNameCase());
    }
    public function testNameMan726()
    {
        $this->object->setFirstName('Леонид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонид,Леонида,Леониду,Леонида,Леонидом,Леониде'), $this->object->getFirstNameCase());
    }
    public function testNameMan727()
    {
        $this->object->setFirstName('Антип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антип,Антипа,Антипу,Антипа,Антипом,Антипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan728()
    {
        $this->object->setFirstName('Капитон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Капитон,Капитона,Капитону,Капитона,Капитоном,Капитоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan729()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зиновий,Зиновия,Зиновию,Зиновия,Зиновием,Зиновии'), $this->object->getFirstNameCase());
    }
    public function testNameMan730()
    {
        $this->object->setFirstName('Нестор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестор,Нестора,Нестору,Нестора,Нестором,Несторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan731()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанас,Афанаса,Афанасу,Афанаса,Афанасом,Афанасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan732()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидор,Сидора,Сидору,Сидора,Сидором,Сидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan733()
    {
        $this->object->setFirstName('Федосий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федосий,Федосия,Федосию,Федосия,Федосием,Федосии'), $this->object->getFirstNameCase());
    }
    public function testNameMan734()
    {
        $this->object->setFirstName('Вилен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилен,Вилена,Вилену,Вилена,Виленом,Вилене'), $this->object->getFirstNameCase());
    }
    public function testNameMan735()
    {
        $this->object->setFirstName('Эдгар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдгар,Эдгара,Эдгару,Эдгара,Эдгаром,Эдгаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan736()
    {
        $this->object->setFirstName('Ефрем');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефрем,Ефрема,Ефрему,Ефрема,Ефремом,Ефреме'), $this->object->getFirstNameCase());
    }
    public function testNameMan737()
    {
        $this->object->setFirstName('Демид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демид,Демида,Демиду,Демида,Демидом,Демиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan738()
    {
        $this->object->setFirstName('Влас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Влас,Власа,Власу,Власа,Власом,Власе'), $this->object->getFirstNameCase());
    }
    public function testNameMan739()
    {
        $this->object->setFirstName('Леонтий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонтий,Леонтия,Леонтию,Леонтия,Леонтием,Леонтии'), $this->object->getFirstNameCase());
    }
    public function testNameMan740()
    {
        $this->object->setFirstName('Эдуард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуард,Эдуарда,Эдуарду,Эдуарда,Эдуардом,Эдуарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan741()
    {
        $this->object->setFirstName('Павел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павел,Павла,Павлу,Павла,Павлом,Павле'), $this->object->getFirstNameCase());
    }
    public function testNameMan742()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никифор,Никифора,Никифору,Никифора,Никифором,Никифоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan743()
    {
        $this->object->setFirstName('Осип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осип,Осипа,Осипу,Осипа,Осипом,Осипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan744()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan745()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филипп,Филиппа,Филиппу,Филиппа,Филиппом,Филиппе'), $this->object->getFirstNameCase());
    }
    public function testNameMan746()
    {
        $this->object->setFirstName('Конон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Конон,Конона,Конону,Конона,Кононом,Кононе'), $this->object->getFirstNameCase());
    }
    public function testNameMan747()
    {
        $this->object->setFirstName('Константин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константин,Константина,Константину,Константина,Константином,Константине'), $this->object->getFirstNameCase());
    }
    public function testNameMan748()
    {
        $this->object->setFirstName('Никон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никон,Никона,Никону,Никона,Никоном,Никоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan749()
    {
        $this->object->setFirstName('Исидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исидор,Исидора,Исидору,Исидора,Исидором,Исидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan750()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестер,Нестера,Нестеру,Нестера,Нестером,Нестере'), $this->object->getFirstNameCase());
    }
    public function testNameMan751()
    {
        $this->object->setFirstName('Нестер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестер,Нестера,Нестеру,Нестера,Нестером,Нестере'), $this->object->getFirstNameCase());
    }
    public function testNameMan752()
    {
        $this->object->setFirstName('Феоктист');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феоктист,Феоктиста,Феоктисту,Феоктиста,Феоктистом,Феоктисте'), $this->object->getFirstNameCase());
    }
    public function testNameMan753()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарас,Тараса,Тарасу,Тараса,Тарасом,Тарасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan754()
    {
        $this->object->setFirstName('Елисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елисей,Елисея,Елисею,Елисея,Елисеем,Елисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan755()
    {
        $this->object->setFirstName('Ануфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ануфрий,Ануфрия,Ануфрию,Ануфрия,Ануфрием,Ануфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan756()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людвиг,Людвига,Людвигу,Людвига,Людвигом,Людвиге'), $this->object->getFirstNameCase());
    }
    public function testNameMan757()
    {
        $this->object->setFirstName('Потап');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Потап,Потапа,Потапу,Потапа,Потапом,Потапе'), $this->object->getFirstNameCase());
    }
    public function testNameMan758()
    {
        $this->object->setFirstName('Мартин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мартин,Мартина,Мартину,Мартина,Мартином,Мартине'), $this->object->getFirstNameCase());
    }
    public function testNameMan759()
    {
        $this->object->setFirstName('Димитрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Димитрий,Димитрия,Димитрию,Димитрия,Димитрием,Димитрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan760()
    {
        $this->object->setFirstName('Кондратий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондратий,Кондратия,Кондратию,Кондратия,Кондратием,Кондратии'), $this->object->getFirstNameCase());
    }
    public function testNameMan761()
    {
        $this->object->setFirstName('Савва');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савва,Саввы,Савве,Савву,Саввой,Савве'), $this->object->getFirstNameCase());
    }
    public function testNameMan762()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Всеволод,Всеволода,Всеволоду,Всеволода,Всеволодом,Всеволоде'), $this->object->getFirstNameCase());
    }
    public function testNameMan763()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Даниил,Даниила,Даниилу,Даниила,Даниилом,Данииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan764()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никифор,Никифора,Никифору,Никифора,Никифором,Никифоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan765()
    {
        $this->object->setFirstName('Никифор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никифор,Никифора,Никифору,Никифора,Никифором,Никифоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan766()
    {
        $this->object->setFirstName('Ян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ян,Яна,Яну,Яна,Яном,Яне'), $this->object->getFirstNameCase());
    }
    public function testNameMan767()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Даниил,Даниила,Даниилу,Даниила,Даниилом,Данииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan768()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилор,Вилора,Вилору,Вилора,Вилором,Вилоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan769()
    {
        $this->object->setFirstName('Ян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ян,Яна,Яну,Яна,Яном,Яне'), $this->object->getFirstNameCase());
    }
    public function testNameMan770()
    {
        $this->object->setFirstName('Конон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Конон,Конона,Конону,Конона,Кононом,Кононе'), $this->object->getFirstNameCase());
    }
    public function testNameMan771()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan772()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофей,Тимофея,Тимофею,Тимофея,Тимофеем,Тимофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan773()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеслав,Вячеслава,Вячеславу,Вячеслава,Вячеславом,Вячеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan774()
    {
        $this->object->setFirstName('Федосий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федосий,Федосия,Федосию,Федосия,Федосием,Федосии'), $this->object->getFirstNameCase());
    }
    public function testNameMan775()
    {
        $this->object->setFirstName('Евстигней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евстигней,Евстигнея,Евстигнею,Евстигнея,Евстигнеем,Евстигнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan776()
    {
        $this->object->setFirstName('Нейл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нейл,Нейла,Нейлу,Нейла,Нейлом,Нейле'), $this->object->getFirstNameCase());
    }
    public function testNameMan777()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan778()
    {
        $this->object->setFirstName('Иван');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иван,Ивана,Ивану,Ивана,Иваном,Иване'), $this->object->getFirstNameCase());
    }
    public function testNameMan779()
    {
        $this->object->setFirstName('Никандр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никандр,Никандра,Никандру,Никандра,Никандром,Никандре'), $this->object->getFirstNameCase());
    }
    public function testNameMan780()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Всеволод,Всеволода,Всеволоду,Всеволода,Всеволодом,Всеволоде'), $this->object->getFirstNameCase());
    }
    public function testNameMan781()
    {
        $this->object->setFirstName('Евдоким');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евдоким,Евдокима,Евдокиму,Евдокима,Евдокимом,Евдокиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan782()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan783()
    {
        $this->object->setFirstName('Бенедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бенедикт,Бенедикта,Бенедикту,Бенедикта,Бенедиктом,Бенедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan784()
    {
        $this->object->setFirstName('Назар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Назар,Назара,Назару,Назара,Назаром,Назаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan785()
    {
        $this->object->setFirstName('Владилен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владилен,Владилена,Владилену,Владилена,Владиленом,Владилене'), $this->object->getFirstNameCase());
    }
    public function testNameMan786()
    {
        $this->object->setFirstName('Влас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Влас,Власа,Власу,Власа,Власом,Власе'), $this->object->getFirstNameCase());
    }
    public function testNameMan787()
    {
        $this->object->setFirstName('Антип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антип,Антипа,Антипу,Антипа,Антипом,Антипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan788()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захарий,Захария,Захарию,Захария,Захарием,Захарии'), $this->object->getFirstNameCase());
    }
    public function testNameMan789()
    {
        $this->object->setFirstName('Кондратий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондратий,Кондратия,Кондратию,Кондратия,Кондратием,Кондратии'), $this->object->getFirstNameCase());
    }
    public function testNameMan790()
    {
        $this->object->setFirstName('Отто');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Отто,Отто,Отто,Отто,Отто,Отто'), $this->object->getFirstNameCase());
    }
    public function testNameMan791()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидор,Сидора,Сидору,Сидора,Сидором,Сидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan792()
    {
        $this->object->setFirstName('Валентин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валентин,Валентина,Валентину,Валентина,Валентином,Валентине'), $this->object->getFirstNameCase());
    }
    public function testNameMan793()
    {
        $this->object->setFirstName('Константин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Константин,Константина,Константину,Константина,Константином,Константине'), $this->object->getFirstNameCase());
    }
    public function testNameMan794()
    {
        $this->object->setFirstName('Гавриил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гавриил,Гавриила,Гавриилу,Гавриила,Гавриилом,Гаврииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan795()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсен,Арсена,Арсену,Арсена,Арсеном,Арсене'), $this->object->getFirstNameCase());
    }
    public function testNameMan796()
    {
        $this->object->setFirstName('Сергей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергей,Сергея,Сергею,Сергея,Сергеем,Сергее'), $this->object->getFirstNameCase());
    }
    public function testNameMan797()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan798()
    {
        $this->object->setFirstName('Ермолай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермолай,Ермолая,Ермолаю,Ермолая,Ермолаем,Ермолае'), $this->object->getFirstNameCase());
    }
    public function testNameMan799()
    {
        $this->object->setFirstName('Авдей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авдей,Авдея,Авдею,Авдея,Авдеем,Авдее'), $this->object->getFirstNameCase());
    }
    public function testNameMan800()
    {
        $this->object->setFirstName('Нил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нил,Нила,Нилу,Нила,Нилом,Ниле'), $this->object->getFirstNameCase());
    }
    public function testNameMan801()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зиновий,Зиновия,Зиновию,Зиновия,Зиновием,Зиновии'), $this->object->getFirstNameCase());
    }
    public function testNameMan802()
    {
        $this->object->setFirstName('Гордей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордей,Гордея,Гордею,Гордея,Гордеем,Гордее'), $this->object->getFirstNameCase());
    }
    public function testNameMan803()
    {
        $this->object->setFirstName('Ян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ян,Яна,Яну,Яна,Яном,Яне'), $this->object->getFirstNameCase());
    }
    public function testNameMan804()
    {
        $this->object->setFirstName('Фома');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фома,Фомы,Фоме,Фому,Фомой,Фоме'), $this->object->getFirstNameCase());
    }
    public function testNameMan805()
    {
        $this->object->setFirstName('Кирей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирей,Кирея,Кирею,Кирея,Киреем,Кирее'), $this->object->getFirstNameCase());
    }
    public function testNameMan806()
    {
        $this->object->setFirstName('Авдей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авдей,Авдея,Авдею,Авдея,Авдеем,Авдее'), $this->object->getFirstNameCase());
    }
    public function testNameMan807()
    {
        $this->object->setFirstName('Лаврентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лаврентий,Лаврентия,Лаврентию,Лаврентия,Лаврентием,Лаврентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan808()
    {
        $this->object->setFirstName('Климент');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климент,Климента,Клименту,Климента,Климентом,Клименте'), $this->object->getFirstNameCase());
    }
    public function testNameMan809()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофей,Тимофея,Тимофею,Тимофея,Тимофеем,Тимофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan810()
    {
        $this->object->setFirstName('Наум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наум,Наума,Науму,Наума,Наумом,Науме'), $this->object->getFirstNameCase());
    }
    public function testNameMan811()
    {
        $this->object->setFirstName('Бронислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бронислав,Бронислава,Брониславу,Бронислава,Брониславом,Брониславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan812()
    {
        $this->object->setFirstName('Левон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Левон,Левона,Левону,Левона,Левоном,Левоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan813()
    {
        $this->object->setFirstName('Игнат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Игнат,Игната,Игнату,Игната,Игнатом,Игнате'), $this->object->getFirstNameCase());
    }
    public function testNameMan814()
    {
        $this->object->setFirstName('Онуфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онуфрий,Онуфрия,Онуфрию,Онуфрия,Онуфрием,Онуфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan815()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елизар,Елизара,Елизару,Елизара,Елизаром,Елизаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan816()
    {
        $this->object->setFirstName('Лукьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лукьян,Лукьяна,Лукьяну,Лукьяна,Лукьяном,Лукьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan817()
    {
        $this->object->setFirstName('Ануфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ануфрий,Ануфрия,Ануфрию,Ануфрия,Ануфрием,Ануфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan818()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимий,Ефимия,Ефимию,Ефимия,Ефимием,Ефимии'), $this->object->getFirstNameCase());
    }
    public function testNameMan819()
    {
        $this->object->setFirstName('Карп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карп,Карпа,Карпу,Карпа,Карпом,Карпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan820()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роберт,Роберта,Роберту,Роберта,Робертом,Роберте'), $this->object->getFirstNameCase());
    }
    public function testNameMan821()
    {
        $this->object->setFirstName('Сидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидор,Сидора,Сидору,Сидора,Сидором,Сидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan822()
    {
        $this->object->setFirstName('Венедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Венедикт,Венедикта,Венедикту,Венедикта,Венедиктом,Венедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan823()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фадей,Фадея,Фадею,Фадея,Фадеем,Фадее'), $this->object->getFirstNameCase());
    }
    public function testNameMan824()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елизар,Елизара,Елизару,Елизара,Елизаром,Елизаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan825()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорий,Григория,Григорию,Григория,Григорием,Григории'), $this->object->getFirstNameCase());
    }
    public function testNameMan826()
    {
        $this->object->setFirstName('Нил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нил,Нила,Нилу,Нила,Нилом,Ниле'), $this->object->getFirstNameCase());
    }
    public function testNameMan827()
    {
        $this->object->setFirstName('Иван');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Иван,Ивана,Ивану,Ивана,Иваном,Иване'), $this->object->getFirstNameCase());
    }
    public function testNameMan828()
    {
        $this->object->setFirstName('Казимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казимир,Казимира,Казимиру,Казимира,Казимиром,Казимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan829()
    {
        $this->object->setFirstName('Ян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ян,Яна,Яну,Яна,Яном,Яне'), $this->object->getFirstNameCase());
    }
    public function testNameMan830()
    {
        $this->object->setFirstName('Архип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Архип,Архипа,Архипу,Архипа,Архипом,Архипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan831()
    {
        $this->object->setFirstName('Карп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карп,Карпа,Карпу,Карпа,Карпом,Карпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan832()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филипп,Филиппа,Филиппу,Филиппа,Филиппом,Филиппе'), $this->object->getFirstNameCase());
    }
    public function testNameMan833()
    {
        $this->object->setFirstName('Ефрем');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефрем,Ефрема,Ефрему,Ефрема,Ефремом,Ефреме'), $this->object->getFirstNameCase());
    }
    public function testNameMan834()
    {
        $this->object->setFirstName('Мокей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мокей,Мокея,Мокею,Мокея,Мокеем,Мокее'), $this->object->getFirstNameCase());
    }
    public function testNameMan835()
    {
        $this->object->setFirstName('Лука');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лука,Луки,Луке,Луку,Лукой,Луке'), $this->object->getFirstNameCase());
    }
    public function testNameMan836()
    {
        $this->object->setFirstName('Нейл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нейл,Нейла,Нейлу,Нейла,Нейлом,Нейле'), $this->object->getFirstNameCase());
    }
    public function testNameMan837()
    {
        $this->object->setFirstName('Вилор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вилор,Вилора,Вилору,Вилора,Вилором,Вилоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan838()
    {
        $this->object->setFirstName('Орест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орест,Ореста,Оресту,Ореста,Орестом,Оресте'), $this->object->getFirstNameCase());
    }
    public function testNameMan839()
    {
        $this->object->setFirstName('Захар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захар,Захара,Захару,Захара,Захаром,Захаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan840()
    {
        $this->object->setFirstName('Савватий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савватий,Савватия,Савватию,Савватия,Савватием,Савватии'), $this->object->getFirstNameCase());
    }
    public function testNameMan841()
    {
        $this->object->setFirstName('Устин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Устин,Устина,Устину,Устина,Устином,Устине'), $this->object->getFirstNameCase());
    }
    public function testNameMan842()
    {
        $this->object->setFirstName('Трофим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Трофим,Трофима,Трофиму,Трофима,Трофимом,Трофиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan843()
    {
        $this->object->setFirstName('Никандр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никандр,Никандра,Никандру,Никандра,Никандром,Никандре'), $this->object->getFirstNameCase());
    }
    public function testNameMan844()
    {
        $this->object->setFirstName('Фрол');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фрол,Фрола,Фролу,Фрола,Фролом,Фроле'), $this->object->getFirstNameCase());
    }
    public function testNameMan845()
    {
        $this->object->setFirstName('Ильяс');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ильяс,Ильяса,Ильясу,Ильяса,Ильясом,Ильясе'), $this->object->getFirstNameCase());
    }
    public function testNameMan846()
    {
        $this->object->setFirstName('Филипп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Филипп,Филиппа,Филиппу,Филиппа,Филиппом,Филиппе'), $this->object->getFirstNameCase());
    }
    public function testNameMan847()
    {
        $this->object->setFirstName('Михей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михей,Михея,Михею,Михея,Михеем,Михее'), $this->object->getFirstNameCase());
    }
    public function testNameMan848()
    {
        $this->object->setFirstName('Ефимий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефимий,Ефимия,Ефимию,Ефимия,Ефимием,Ефимии'), $this->object->getFirstNameCase());
    }
    public function testNameMan849()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валериан,Валериана,Валериану,Валериана,Валерианом,Валериане'), $this->object->getFirstNameCase());
    }
    public function testNameMan850()
    {
        $this->object->setFirstName('Онуфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онуфрий,Онуфрия,Онуфрию,Онуфрия,Онуфрием,Онуфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan851()
    {
        $this->object->setFirstName('Елисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елисей,Елисея,Елисею,Елисея,Елисеем,Елисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan852()
    {
        $this->object->setFirstName('Ян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ян,Яна,Яну,Яна,Яном,Яне'), $this->object->getFirstNameCase());
    }
    public function testNameMan853()
    {
        $this->object->setFirstName('Артур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артур,Артура,Артуру,Артура,Артуром,Артуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan854()
    {
        $this->object->setFirstName('Ксенофонт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ксенофонт,Ксенофонта,Ксенофонту,Ксенофонта,Ксенофонтом,Ксенофонте'), $this->object->getFirstNameCase());
    }
    public function testNameMan855()
    {
        $this->object->setFirstName('Никодим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никодим,Никодима,Никодиму,Никодима,Никодимом,Никодиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan856()
    {
        $this->object->setFirstName('Харитон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харитон,Харитона,Харитону,Харитона,Харитоном,Харитоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan857()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфирий,Порфирия,Порфирию,Порфирия,Порфирием,Порфирии'), $this->object->getFirstNameCase());
    }
    public function testNameMan858()
    {
        $this->object->setFirstName('Родион');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родион,Родиона,Родиону,Родиона,Родионом,Родионе'), $this->object->getFirstNameCase());
    }
    public function testNameMan859()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валериан,Валериана,Валериану,Валериана,Валерианом,Валериане'), $this->object->getFirstNameCase());
    }
    public function testNameMan860()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатолий,Анатолия,Анатолию,Анатолия,Анатолием,Анатолии'), $this->object->getFirstNameCase());
    }
    public function testNameMan861()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan862()
    {
        $this->object->setFirstName('Ермолай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ермолай,Ермолая,Ермолаю,Ермолая,Ермолаем,Ермолае'), $this->object->getFirstNameCase());
    }
    public function testNameMan863()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серафим,Серафима,Серафиму,Серафима,Серафимом,Серафиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan864()
    {
        $this->object->setFirstName('Григорий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорий,Григория,Григорию,Григория,Григорием,Григории'), $this->object->getFirstNameCase());
    }
    public function testNameMan865()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan866()
    {
        $this->object->setFirstName('Михей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михей,Михея,Михею,Михея,Михеем,Михее'), $this->object->getFirstNameCase());
    }
    public function testNameMan867()
    {
        $this->object->setFirstName('Георгий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Георгий,Георгия,Георгию,Георгия,Георгием,Георгии'), $this->object->getFirstNameCase());
    }
    public function testNameMan868()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan869()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорофей,Дорофея,Дорофею,Дорофея,Дорофеем,Дорофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan870()
    {
        $this->object->setFirstName('Нефед');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нефед,Нефеда,Нефеду,Нефеда,Нефедом,Нефеде'), $this->object->getFirstNameCase());
    }
    public function testNameMan871()
    {
        $this->object->setFirstName('Антип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антип,Антипа,Антипу,Антипа,Антипом,Антипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan872()
    {
        $this->object->setFirstName('Климентий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климентий,Климентия,Климентию,Климентия,Климентием,Климентии'), $this->object->getFirstNameCase());
    }
    public function testNameMan873()
    {
        $this->object->setFirstName('Казимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казимир,Казимира,Казимиру,Казимира,Казимиром,Казимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan874()
    {
        $this->object->setFirstName('Гордей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордей,Гордея,Гордею,Гордея,Гордеем,Гордее'), $this->object->getFirstNameCase());
    }
    public function testNameMan875()
    {
        $this->object->setFirstName('Харлам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харлам,Харлама,Харламу,Харлама,Харламом,Харламе'), $this->object->getFirstNameCase());
    }
    public function testNameMan876()
    {
        $this->object->setFirstName('Анатолий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анатолий,Анатолия,Анатолию,Анатолия,Анатолием,Анатолии'), $this->object->getFirstNameCase());
    }
    public function testNameMan877()
    {
        $this->object->setFirstName('Герман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герман,Германа,Герману,Германа,Германом,Германе'), $this->object->getFirstNameCase());
    }
    public function testNameMan878()
    {
        $this->object->setFirstName('Эдуард');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдуард,Эдуарда,Эдуарду,Эдуарда,Эдуардом,Эдуарде'), $this->object->getFirstNameCase());
    }
    public function testNameMan879()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan880()
    {
        $this->object->setFirstName('Эдгар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Эдгар,Эдгара,Эдгару,Эдгара,Эдгаром,Эдгаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan881()
    {
        $this->object->setFirstName('Бенедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бенедикт,Бенедикта,Бенедикту,Бенедикта,Бенедиктом,Бенедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan882()
    {
        $this->object->setFirstName('Казимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казимир,Казимира,Казимиру,Казимира,Казимиром,Казимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan883()
    {
        $this->object->setFirstName('Виктор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Виктор,Виктора,Виктору,Виктора,Виктором,Викторе'), $this->object->getFirstNameCase());
    }
    public function testNameMan884()
    {
        $this->object->setFirstName('Людвиг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людвиг,Людвига,Людвигу,Людвига,Людвигом,Людвиге'), $this->object->getFirstNameCase());
    }
    public function testNameMan885()
    {
        $this->object->setFirstName('Левон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Левон,Левона,Левону,Левона,Левоном,Левоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan886()
    {
        $this->object->setFirstName('Ефим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефим,Ефима,Ефиму,Ефима,Ефимом,Ефиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan887()
    {
        $this->object->setFirstName('Порфирий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфирий,Порфирия,Порфирию,Порфирия,Порфирием,Порфирии'), $this->object->getFirstNameCase());
    }
    public function testNameMan888()
    {
        $this->object->setFirstName('Калина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калина,Калины,Калине,Калину,Калиной,Калине'), $this->object->getFirstNameCase());
    }
    public function testNameMan889()
    {
        $this->object->setFirstName('Адриан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адриан,Адриана,Адриану,Адриана,Адрианом,Адриане'), $this->object->getFirstNameCase());
    }
    public function testNameMan890()
    {
        $this->object->setFirstName('Осип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осип,Осипа,Осипу,Осипа,Осипом,Осипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan891()
    {
        $this->object->setFirstName('Тимур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимур,Тимура,Тимуру,Тимура,Тимуром,Тимуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan892()
    {
        $this->object->setFirstName('Нефед');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нефед,Нефеда,Нефеду,Нефеда,Нефедом,Нефеде'), $this->object->getFirstNameCase());
    }
    public function testNameMan893()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанас,Афанаса,Афанасу,Афанаса,Афанасом,Афанасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan894()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславу,Борислава,Бориславом,Бориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan895()
    {
        $this->object->setFirstName('Савватий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савватий,Савватия,Савватию,Савватия,Савватием,Савватии'), $this->object->getFirstNameCase());
    }
    public function testNameMan896()
    {
        $this->object->setFirstName('Модест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Модест,Модеста,Модесту,Модеста,Модестом,Модесте'), $this->object->getFirstNameCase());
    }
    public function testNameMan897()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Всеволод,Всеволода,Всеволоду,Всеволода,Всеволодом,Всеволоде'), $this->object->getFirstNameCase());
    }
    public function testNameMan898()
    {
        $this->object->setFirstName('Парфен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфен,Парфена,Парфену,Парфена,Парфеном,Парфене'), $this->object->getFirstNameCase());
    }
    public function testNameMan899()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславу,Владислава,Владиславом,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan900()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихон,Тихона,Тихону,Тихона,Тихоном,Тихоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan901()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Святослав,Святослава,Святославу,Святослава,Святославом,Святославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan902()
    {
        $this->object->setFirstName('Евгений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгений,Евгения,Евгению,Евгения,Евгением,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameMan903()
    {
        $this->object->setFirstName('Роман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роман,Романа,Роману,Романа,Романом,Романе'), $this->object->getFirstNameCase());
    }
    public function testNameMan904()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарас,Тараса,Тарасу,Тараса,Тарасом,Тарасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan905()
    {
        $this->object->setFirstName('Демид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Демид,Демида,Демиду,Демида,Демидом,Демиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan906()
    {
        $this->object->setFirstName('Гавриил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гавриил,Гавриила,Гавриилу,Гавриила,Гавриилом,Гаврииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan907()
    {
        $this->object->setFirstName('Савелий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савелий,Савелия,Савелию,Савелия,Савелием,Савелии'), $this->object->getFirstNameCase());
    }
    public function testNameMan908()
    {
        $this->object->setFirstName('Кузьма');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьма,Кузьмы,Кузьме,Кузьму,Кузьмой,Кузьме'), $this->object->getFirstNameCase());
    }
    public function testNameMan909()
    {
        $this->object->setFirstName('Евстигней');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евстигней,Евстигнея,Евстигнею,Евстигнея,Евстигнеем,Евстигнее'), $this->object->getFirstNameCase());
    }
    public function testNameMan910()
    {
        $this->object->setFirstName('Юлиан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлиан,Юлиана,Юлиану,Юлиана,Юлианом,Юлиане'), $this->object->getFirstNameCase());
    }
    public function testNameMan911()
    {
        $this->object->setFirstName('Вячеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вячеслав,Вячеслава,Вячеславу,Вячеслава,Вячеславом,Вячеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan912()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихон,Тихона,Тихону,Тихона,Тихоном,Тихоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan913()
    {
        $this->object->setFirstName('Измаил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Измаил,Измаила,Измаилу,Измаила,Измаилом,Измаиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan914()
    {
        $this->object->setFirstName('Афанас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанас,Афанаса,Афанасу,Афанаса,Афанасом,Афанасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan915()
    {
        $this->object->setFirstName('Серафим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Серафим,Серафима,Серафиму,Серафима,Серафимом,Серафиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan916()
    {
        $this->object->setFirstName('Аксен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аксен,Аксена,Аксену,Аксена,Аксеном,Аксене'), $this->object->getFirstNameCase());
    }
    public function testNameMan917()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan918()
    {
        $this->object->setFirstName('Теймураз');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Теймураз,Теймураза,Теймуразу,Теймураза,Теймуразом,Теймуразе'), $this->object->getFirstNameCase());
    }
    public function testNameMan919()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan920()
    {
        $this->object->setFirstName('Самсон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самсон,Самсона,Самсону,Самсона,Самсоном,Самсоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan921()
    {
        $this->object->setFirstName('Кирилл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирилл,Кирилла,Кириллу,Кирилла,Кириллом,Кирилле'), $this->object->getFirstNameCase());
    }
    public function testNameMan922()
    {
        $this->object->setFirstName('Осип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осип,Осипа,Осипу,Осипа,Осипом,Осипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan923()
    {
        $this->object->setFirstName('Даниил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Даниил,Даниила,Даниилу,Даниила,Даниилом,Данииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan924()
    {
        $this->object->setFirstName('Владимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владимир,Владимира,Владимиру,Владимира,Владимиром,Владимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan925()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондрат,Кондрата,Кондрату,Кондрата,Кондратом,Кондрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan926()
    {
        $this->object->setFirstName('Исак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исак,Исака,Исаку,Исака,Исаком,Исаке'), $this->object->getFirstNameCase());
    }
    public function testNameMan927()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поликарп,Поликарпа,Поликарпу,Поликарпа,Поликарпом,Поликарпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan928()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярослав,Ярослава,Ярославу,Ярослава,Ярославом,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan929()
    {
        $this->object->setFirstName('Тимофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофей,Тимофея,Тимофею,Тимофея,Тимофеем,Тимофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan930()
    {
        $this->object->setFirstName('Нефед');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нефед,Нефеда,Нефеду,Нефеда,Нефедом,Нефеде'), $this->object->getFirstNameCase());
    }
    public function testNameMan931()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярослав,Ярослава,Ярославу,Ярослава,Ярославом,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan932()
    {
        $this->object->setFirstName('Ефим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ефим,Ефима,Ефиму,Ефима,Ефимом,Ефиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan933()
    {
        $this->object->setFirstName('Фока');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фока,Фоки,Фоке,Фоку,Фокой,Фоке'), $this->object->getFirstNameCase());
    }
    public function testNameMan934()
    {
        $this->object->setFirstName('Феликс');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феликс,Феликса,Феликсу,Феликса,Феликсом,Феликсе'), $this->object->getFirstNameCase());
    }
    public function testNameMan935()
    {
        $this->object->setFirstName('Федот');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федот,Федота,Федоту,Федота,Федотом,Федоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan936()
    {
        $this->object->setFirstName('Еремей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Еремей,Еремея,Еремею,Еремея,Еремеем,Еремее'), $this->object->getFirstNameCase());
    }
    public function testNameMan937()
    {
        $this->object->setFirstName('Панкрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панкрат,Панкрата,Панкрату,Панкрата,Панкратом,Панкрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan938()
    {
        $this->object->setFirstName('Моисей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моисей,Моисея,Моисею,Моисея,Моисеем,Моисее'), $this->object->getFirstNameCase());
    }
    public function testNameMan939()
    {
        $this->object->setFirstName('Владлен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владлен,Владлена,Владлену,Владлена,Владленом,Владлене'), $this->object->getFirstNameCase());
    }
    public function testNameMan940()
    {
        $this->object->setFirstName('Кондрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондрат,Кондрата,Кондрату,Кондрата,Кондратом,Кондрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan941()
    {
        $this->object->setFirstName('Фадей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фадей,Фадея,Фадею,Фадея,Фадеем,Фадее'), $this->object->getFirstNameCase());
    }
    public function testNameMan942()
    {
        $this->object->setFirstName('Евгений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Евгений,Евгения,Евгению,Евгения,Евгением,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameMan943()
    {
        $this->object->setFirstName('Василий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Василий,Василия,Василию,Василия,Василием,Василии'), $this->object->getFirstNameCase());
    }
    public function testNameMan944()
    {
        $this->object->setFirstName('Полиграф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полиграф,Полиграфа,Полиграфу,Полиграфа,Полиграфом,Полиграфе'), $this->object->getFirstNameCase());
    }
    public function testNameMan945()
    {
        $this->object->setFirstName('Ерофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ерофей,Ерофея,Ерофею,Ерофея,Ерофеем,Ерофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan946()
    {
        $this->object->setFirstName('Орест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орест,Ореста,Оресту,Ореста,Орестом,Оресте'), $this->object->getFirstNameCase());
    }
    public function testNameMan947()
    {
        $this->object->setFirstName('Александр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александр,Александра,Александру,Александра,Александром,Александре'), $this->object->getFirstNameCase());
    }
    public function testNameMan948()
    {
        $this->object->setFirstName('Тимур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимур,Тимура,Тимуру,Тимура,Тимуром,Тимуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan949()
    {
        $this->object->setFirstName('Гавриил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гавриил,Гавриила,Гавриилу,Гавриила,Гавриилом,Гаврииле'), $this->object->getFirstNameCase());
    }
    public function testNameMan950()
    {
        $this->object->setFirstName('Климент');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климент,Климента,Клименту,Климента,Климентом,Клименте'), $this->object->getFirstNameCase());
    }
    public function testNameMan951()
    {
        $this->object->setFirstName('Корнелий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корнелий,Корнелия,Корнелию,Корнелия,Корнелием,Корнелии'), $this->object->getFirstNameCase());
    }
    public function testNameMan952()
    {
        $this->object->setFirstName('Капитон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Капитон,Капитона,Капитону,Капитона,Капитоном,Капитоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan953()
    {
        $this->object->setFirstName('Потап');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Потап,Потапа,Потапу,Потапа,Потапом,Потапе'), $this->object->getFirstNameCase());
    }
    public function testNameMan954()
    {
        $this->object->setFirstName('Валериан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валериан,Валериана,Валериану,Валериана,Валерианом,Валериане'), $this->object->getFirstNameCase());
    }
    public function testNameMan955()
    {
        $this->object->setFirstName('Роберт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роберт,Роберта,Роберту,Роберта,Робертом,Роберте'), $this->object->getFirstNameCase());
    }
    public function testNameMan956()
    {
        $this->object->setFirstName('Марк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марк,Марка,Марку,Марка,Марком,Марке'), $this->object->getFirstNameCase());
    }
    public function testNameMan957()
    {
        $this->object->setFirstName('Кирей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирей,Кирея,Кирею,Кирея,Киреем,Кирее'), $this->object->getFirstNameCase());
    }
    public function testNameMan958()
    {
        $this->object->setFirstName('Елизар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Елизар,Елизара,Елизару,Елизара,Елизаром,Елизаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan959()
    {
        $this->object->setFirstName('Антип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антип,Антипа,Антипу,Антипа,Антипом,Антипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan960()
    {
        $this->object->setFirstName('Мефодий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мефодий,Мефодия,Мефодию,Мефодия,Мефодием,Мефодии'), $this->object->getFirstNameCase());
    }
    public function testNameMan961()
    {
        $this->object->setFirstName('Исидор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исидор,Исидора,Исидору,Исидора,Исидором,Исидоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan962()
    {
        $this->object->setFirstName('Денис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Денис,Дениса,Денису,Дениса,Денисом,Денисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan963()
    {
        $this->object->setFirstName('Илья');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Илья,Ильи,Илье,Илью,Ильей,Илье'), $this->object->getFirstNameCase());
    }
    public function testNameMan964()
    {
        $this->object->setFirstName('Зиновий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зиновий,Зиновия,Зиновию,Зиновия,Зиновием,Зиновии'), $this->object->getFirstNameCase());
    }
    public function testNameMan965()
    {
        $this->object->setFirstName('Леон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леон,Леона,Леону,Леона,Леоном,Леоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan966()
    {
        $this->object->setFirstName('Михей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михей,Михея,Михею,Михея,Михеем,Михее'), $this->object->getFirstNameCase());
    }
    public function testNameMan967()
    {
        $this->object->setFirstName('Адам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адам,Адама,Адаму,Адама,Адамом,Адаме'), $this->object->getFirstNameCase());
    }
    public function testNameMan968()
    {
        $this->object->setFirstName('Харламп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харламп,Харлампа,Харлампу,Харлампа,Харлампом,Харлампе'), $this->object->getFirstNameCase());
    }
    public function testNameMan969()
    {
        $this->object->setFirstName('Дмитрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитрий,Дмитрия,Дмитрию,Дмитрия,Дмитрием,Дмитрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan970()
    {
        $this->object->setFirstName('Пантелей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пантелей,Пантелея,Пантелею,Пантелея,Пантелеем,Пантелее'), $this->object->getFirstNameCase());
    }
    public function testNameMan971()
    {
        $this->object->setFirstName('Исаак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Исаак,Исаака,Исааку,Исаака,Исааком,Исааке'), $this->object->getFirstNameCase());
    }
    public function testNameMan972()
    {
        $this->object->setFirstName('Наум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наум,Наума,Науму,Наума,Наумом,Науме'), $this->object->getFirstNameCase());
    }
    public function testNameMan973()
    {
        $this->object->setFirstName('Пантелеймон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пантелеймон,Пантелеймона,Пантелеймону,Пантелеймона,Пантелеймоном,Пантелеймоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan974()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфений,Парфения,Парфению,Парфения,Парфением,Парфении'), $this->object->getFirstNameCase());
    }
    public function testNameMan975()
    {
        $this->object->setFirstName('Бенедикт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бенедикт,Бенедикта,Бенедикту,Бенедикта,Бенедиктом,Бенедикте'), $this->object->getFirstNameCase());
    }
    public function testNameMan976()
    {
        $this->object->setFirstName('Леонтий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Леонтий,Леонтия,Леонтию,Леонтия,Леонтием,Леонтии'), $this->object->getFirstNameCase());
    }
    public function testNameMan977()
    {
        $this->object->setFirstName('Максим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максим,Максима,Максиму,Максима,Максимом,Максиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan978()
    {
        $this->object->setFirstName('Изот');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Изот,Изота,Изоту,Изота,Изотом,Изоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan979()
    {
        $this->object->setFirstName('Герман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герман,Германа,Герману,Германа,Германом,Германе'), $this->object->getFirstNameCase());
    }
    public function testNameMan980()
    {
        $this->object->setFirstName('Порфир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Порфир,Порфира,Порфиру,Порфира,Порфиром,Порфире'), $this->object->getFirstNameCase());
    }
    public function testNameMan981()
    {
        $this->object->setFirstName('Марат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марат,Марата,Марату,Марата,Маратом,Марате'), $this->object->getFirstNameCase());
    }
    public function testNameMan982()
    {
        $this->object->setFirstName('Николай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Николай,Николая,Николаю,Николая,Николаем,Николае'), $this->object->getFirstNameCase());
    }
    public function testNameMan983()
    {
        $this->object->setFirstName('Онисим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онисим,Онисима,Онисиму,Онисима,Онисимом,Онисиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan984()
    {
        $this->object->setFirstName('Орест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орест,Ореста,Оресту,Ореста,Орестом,Оресте'), $this->object->getFirstNameCase());
    }
    public function testNameMan985()
    {
        $this->object->setFirstName('Захарий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захарий,Захария,Захарию,Захария,Захарием,Захарии'), $this->object->getFirstNameCase());
    }
    public function testNameMan986()
    {
        $this->object->setFirstName('Полиграф');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полиграф,Полиграфа,Полиграфу,Полиграфа,Полиграфом,Полиграфе'), $this->object->getFirstNameCase());
    }
    public function testNameMan987()
    {
        $this->object->setFirstName('Макар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макар,Макара,Макару,Макара,Макаром,Макаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan988()
    {
        $this->object->setFirstName('Каллистрат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каллистрат,Каллистрата,Каллистрату,Каллистрата,Каллистратом,Каллистрате'), $this->object->getFirstNameCase());
    }
    public function testNameMan989()
    {
        $this->object->setFirstName('Артур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артур,Артура,Артуру,Артура,Артуром,Артуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan990()
    {
        $this->object->setFirstName('Лука');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лука,Луки,Луке,Луку,Лукой,Луке'), $this->object->getFirstNameCase());
    }
    public function testNameMan991()
    {
        $this->object->setFirstName('Дорофей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорофей,Дорофея,Дорофею,Дорофея,Дорофеем,Дорофее'), $this->object->getFirstNameCase());
    }
    public function testNameMan992()
    {
        $this->object->setFirstName('Фока');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фока,Фоки,Фоке,Фоку,Фокой,Фоке'), $this->object->getFirstNameCase());
    }
    public function testNameMan993()
    {
        $this->object->setFirstName('Семен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семен,Семена,Семену,Семена,Семеном,Семене'), $this->object->getFirstNameCase());
    }
    public function testNameMan994()
    {
        $this->object->setFirstName('Парфений');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Парфений,Парфения,Парфению,Парфения,Парфением,Парфении'), $this->object->getFirstNameCase());
    }
    public function testNameMan995()
    {
        $this->object->setFirstName('Алексей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексей,Алексея,Алексею,Алексея,Алексеем,Алексее'), $this->object->getFirstNameCase());
    }
    public function testNameMan996()
    {
        $this->object->setFirstName('Поликарп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поликарп,Поликарпа,Поликарпу,Поликарпа,Поликарпом,Поликарпе'), $this->object->getFirstNameCase());
    }
    public function testNameMan997()
    {
        $this->object->setFirstName('Савватий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савватий,Савватия,Савватию,Савватия,Савватием,Савватии'), $this->object->getFirstNameCase());
    }
    public function testNameMan998()
    {
        $this->object->setFirstName('Валерьян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Валерьян,Валерьяна,Валерьяну,Валерьяна,Валерьяном,Валерьяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan999()
    {
        $this->object->setFirstName('Адам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адам,Адама,Адаму,Адама,Адамом,Адаме'), $this->object->getFirstNameCase());
    }
    public function testNameMan1000()
    {
        $this->object->setFirstName('Искандер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Искандер,Искандера,Искандеру,Искандера,Искандером,Искандере'), $this->object->getFirstNameCase());
    }
    public function testNameMan1001()
    {
        $this->object->setFirstName('Герасим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герасим,Герасима,Герасиму,Герасима,Герасимом,Герасиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan1002()
    {
        $this->object->setFirstName('Ануфрий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ануфрий,Ануфрия,Ануфрию,Ануфрия,Ануфрием,Ануфрии'), $this->object->getFirstNameCase());
    }
    public function testNameMan1003()
    {
        $this->object->setFirstName('Лазарь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лазарь,Лазаря,Лазарю,Лазаря,Лазарем,Лазаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan1004()
    {
        $this->object->setFirstName('Юлий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлий,Юлия,Юлию,Юлия,Юлием,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameMan1005()
    {
        $this->object->setFirstName('Никита');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Никита,Никиты,Никите,Никиту,Никитой,Никите'), $this->object->getFirstNameCase());
    }
    public function testNameMan1006()
    {
        $this->object->setFirstName('Остап');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остап,Остапа,Остапу,Остапа,Остапом,Остапе'), $this->object->getFirstNameCase());
    }

}