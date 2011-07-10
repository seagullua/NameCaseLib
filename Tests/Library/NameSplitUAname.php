<?php

require_once dirname(__FILE__) . '/../../Library/NCL.NameCase.ua.php';


class NCLNameCaseUaTest extends PHPUnit_Framework_TestCase
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
        $this->object = new NCLNameCaseUa;
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
        $this->assertEquals('N-Аарон', trim($this->object->getFullNameFormat('Аарон')).'-Аарон');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('N-Абакум', trim($this->object->getFullNameFormat('Абакум')).'-Абакум');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('N-Абрам', trim($this->object->getFullNameFormat('Абрам')).'-Абрам');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('N-Августин', trim($this->object->getFullNameFormat('Августин')).'-Августин');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('N-Авесалом', trim($this->object->getFullNameFormat('Авесалом')).'-Авесалом');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('N-Авксентій', trim($this->object->getFullNameFormat('Авксентій')).'-Авксентій');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('N-Аврелій', trim($this->object->getFullNameFormat('Аврелій')).'-Аврелій');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('N-Автоном', trim($this->object->getFullNameFormat('Автоном')).'-Автоном');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('N-Адам', trim($this->object->getFullNameFormat('Адам')).'-Адам');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('N-Адріян', trim($this->object->getFullNameFormat('Адріян')).'-Адріян');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('N-Адріан', trim($this->object->getFullNameFormat('Адріан')).'-Адріан');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('N-Азар', trim($this->object->getFullNameFormat('Азар')).'-Азар');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('N-Алевтин', trim($this->object->getFullNameFormat('Алевтин')).'-Алевтин');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('N-Альберт', trim($this->object->getFullNameFormat('Альберт')).'-Альберт');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('N-Амвросій', trim($this->object->getFullNameFormat('Амвросій')).'-Амвросій');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('N-Амнон', trim($this->object->getFullNameFormat('Амнон')).'-Амнон');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('N-Амос', trim($this->object->getFullNameFormat('Амос')).'-Амос');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('N-Анастас', trim($this->object->getFullNameFormat('Анастас')).'-Анастас');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('N-Анастасій', trim($this->object->getFullNameFormat('Анастасій')).'-Анастасій');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('N-Андрій', trim($this->object->getFullNameFormat('Андрій')).'-Андрій');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('N-Антоній', trim($this->object->getFullNameFormat('Антоній')).'-Антоній');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('N-Антон', trim($this->object->getFullNameFormat('Антон')).'-Антон');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('N-Анісій', trim($this->object->getFullNameFormat('Анісій')).'-Анісій');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('N-Аркадій', trim($this->object->getFullNameFormat('Аркадій')).'-Аркадій');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('N-Арсен', trim($this->object->getFullNameFormat('Арсен')).'-Арсен');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('N-Арсеній', trim($this->object->getFullNameFormat('Арсеній')).'-Арсеній');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('N-Артем', trim($this->object->getFullNameFormat('Артем')).'-Артем');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('N-Архип', trim($this->object->getFullNameFormat('Архип')).'-Архип');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('N-Атанас', trim($this->object->getFullNameFormat('Атанас')).'-Атанас');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('N-Аскольд', trim($this->object->getFullNameFormat('Аскольд')).'-Аскольд');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('N-Бажан', trim($this->object->getFullNameFormat('Бажан')).'-Бажан');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('N-Біловид', trim($this->object->getFullNameFormat('Біловид')).'-Біловид');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('N-Білогост', trim($this->object->getFullNameFormat('Білогост')).'-Білогост');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('N-Біломир', trim($this->object->getFullNameFormat('Біломир')).'-Біломир');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('N-Білослав', trim($this->object->getFullNameFormat('Білослав')).'-Білослав');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('N-Білотур', trim($this->object->getFullNameFormat('Білотур')).'-Білотур');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('N-Білян', trim($this->object->getFullNameFormat('Білян')).'-Білян');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('N-Благовид', trim($this->object->getFullNameFormat('Благовид')).'-Благовид');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('N-Благовіст', trim($this->object->getFullNameFormat('Благовіст')).'-Благовіст');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('N-Благодар', trim($this->object->getFullNameFormat('Благодар')).'-Благодар');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('N-Благодат', trim($this->object->getFullNameFormat('Благодат')).'-Благодат');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('N-Благомир', trim($this->object->getFullNameFormat('Благомир')).'-Благомир');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('N-Благослав', trim($this->object->getFullNameFormat('Благослав')).'-Благослав');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('N-Богдан', trim($this->object->getFullNameFormat('Богдан')).'-Богдан');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('N-Боговір', trim($this->object->getFullNameFormat('Боговір')).'-Боговір');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('N-Боговіст', trim($this->object->getFullNameFormat('Боговіст')).'-Боговіст');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('N-Богодар', trim($this->object->getFullNameFormat('Богодар')).'-Богодар');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('N-Боголад', trim($this->object->getFullNameFormat('Боголад')).'-Боголад');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('N-Боголіп', trim($this->object->getFullNameFormat('Боголіп')).'-Боголіп');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('N-Боголюб', trim($this->object->getFullNameFormat('Боголюб')).'-Боголюб');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('N-Богород', trim($this->object->getFullNameFormat('Богород')).'-Богород');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('N-Богосвят', trim($this->object->getFullNameFormat('Богосвят')).'-Богосвят');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('N-Богумил', trim($this->object->getFullNameFormat('Богумил')).'-Богумил');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('N-Богумир', trim($this->object->getFullNameFormat('Богумир')).'-Богумир');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('N-Богуслав', trim($this->object->getFullNameFormat('Богуслав')).'-Богуслав');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('N-Бож', trim($this->object->getFullNameFormat('Бож')).'-Бож');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('N-Божан', trim($this->object->getFullNameFormat('Божан')).'-Божан');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('N-Божедар', trim($this->object->getFullNameFormat('Божедар')).'-Божедар');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('N-Божейко', trim($this->object->getFullNameFormat('Божейко')).'-Божейко');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('N-Божемир', trim($this->object->getFullNameFormat('Божемир')).'-Божемир');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('N-Божен', trim($this->object->getFullNameFormat('Божен')).'-Божен');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('N-Божко', trim($this->object->getFullNameFormat('Божко')).'-Божко');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('N-Болеслав', trim($this->object->getFullNameFormat('Болеслав')).'-Болеслав');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('N-Боримир', trim($this->object->getFullNameFormat('Боримир')).'-Боримир');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('N-Боримисл', trim($this->object->getFullNameFormat('Боримисл')).'-Боримисл');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('N-Борис', trim($this->object->getFullNameFormat('Борис')).'-Борис');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('N-Борислав', trim($this->object->getFullNameFormat('Борислав')).'-Борислав');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('N-Боян', trim($this->object->getFullNameFormat('Боян')).'-Боян');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('N-Братан', trim($this->object->getFullNameFormat('Братан')).'-Братан');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('N-Бративой', trim($this->object->getFullNameFormat('Бративой')).'-Бративой');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('N-Братимир', trim($this->object->getFullNameFormat('Братимир')).'-Братимир');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('N-Братислав', trim($this->object->getFullNameFormat('Братислав')).'-Братислав');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('N-Братко', trim($this->object->getFullNameFormat('Братко')).'-Братко');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('N-Братомил', trim($this->object->getFullNameFormat('Братомил')).'-Братомил');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('N-Братослав', trim($this->object->getFullNameFormat('Братослав')).'-Братослав');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('N-Брячислав', trim($this->object->getFullNameFormat('Брячислав')).'-Брячислав');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('N-Боронислав', trim($this->object->getFullNameFormat('Боронислав')).'-Боронислав');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('N-Будивид', trim($this->object->getFullNameFormat('Будивид')).'-Будивид');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('N-Будивой', trim($this->object->getFullNameFormat('Будивой')).'-Будивой');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('N-Будимил', trim($this->object->getFullNameFormat('Будимил')).'-Будимил');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('N-Будимир', trim($this->object->getFullNameFormat('Будимир')).'-Будимир');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('N-Будислав', trim($this->object->getFullNameFormat('Будислав')).'-Будислав');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('N-Буймир', trim($this->object->getFullNameFormat('Буймир')).'-Буймир');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('N-Буйтур', trim($this->object->getFullNameFormat('Буйтур')).'-Буйтур');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('N-Буревій', trim($this->object->getFullNameFormat('Буревій')).'-Буревій');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('N-Буревіст', trim($this->object->getFullNameFormat('Буревіст')).'-Буревіст');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('N-Василь', trim($this->object->getFullNameFormat('Василь')).'-Василь');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('N-Ведан', trim($this->object->getFullNameFormat('Ведан')).'-Ведан');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('N-Велемир', trim($this->object->getFullNameFormat('Велемир')).'-Велемир');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('N-Велемудр', trim($this->object->getFullNameFormat('Велемудр')).'-Велемудр');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('N-Велет', trim($this->object->getFullNameFormat('Велет')).'-Велет');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('N-Величар', trim($this->object->getFullNameFormat('Величар')).'-Величар');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('N-Величко', trim($this->object->getFullNameFormat('Величко')).'-Величко');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('N-Вербан', trim($this->object->getFullNameFormat('Вербан')).'-Вербан');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('N-Вернидуб', trim($this->object->getFullNameFormat('Вернидуб')).'-Вернидуб');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('N-Вернислав', trim($this->object->getFullNameFormat('Вернислав')).'-Вернислав');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('N-Веселан', trim($this->object->getFullNameFormat('Веселан')).'-Веселан');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('N-Витомир', trim($this->object->getFullNameFormat('Витомир')).'-Витомир');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('N-Вишата', trim($this->object->getFullNameFormat('Вишата')).'-Вишата');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('N-Вишезор', trim($this->object->getFullNameFormat('Вишезор')).'-Вишезор');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('N-Вишеслав', trim($this->object->getFullNameFormat('Вишеслав')).'-Вишеслав');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('N-Вір', trim($this->object->getFullNameFormat('Вір')).'-Вір');
    }
    public function testSplDetect102()
    {
        $this->assertEquals('N-Віродан', trim($this->object->getFullNameFormat('Віродан')).'-Віродан');
    }
    public function testSplDetect103()
    {
        $this->assertEquals('N-Віродар', trim($this->object->getFullNameFormat('Віродар')).'-Віродар');
    }
    public function testSplDetect104()
    {
        $this->assertEquals('N-Вірослав', trim($this->object->getFullNameFormat('Вірослав')).'-Вірослав');
    }
    public function testSplDetect105()
    {
        $this->assertEquals('N-Віст', trim($this->object->getFullNameFormat('Віст')).'-Віст');
    }
    public function testSplDetect106()
    {
        $this->assertEquals('N-Вістан', trim($this->object->getFullNameFormat('Вістан')).'-Вістан');
    }
    public function testSplDetect107()
    {
        $this->assertEquals('N-Вітан', trim($this->object->getFullNameFormat('Вітан')).'-Вітан');
    }
    public function testSplDetect108()
    {
        $this->assertEquals('N-Вітомир', trim($this->object->getFullNameFormat('Вітомир')).'-Вітомир');
    }
    public function testSplDetect109()
    {
        $this->assertEquals('N-Вітрян', trim($this->object->getFullNameFormat('Вітрян')).'-Вітрян');
    }
    public function testSplDetect110()
    {
        $this->assertEquals('N-Влад', trim($this->object->getFullNameFormat('Влад')).'-Влад');
    }
    public function testSplDetect111()
    {
        $this->assertEquals('N-Владислав', trim($this->object->getFullNameFormat('Владислав')).'-Владислав');
    }
    public function testSplDetect112()
    {
        $this->assertEquals('N-Власт', trim($this->object->getFullNameFormat('Власт')).'-Власт');
    }
    public function testSplDetect113()
    {
        $this->assertEquals('N-Вогнедар', trim($this->object->getFullNameFormat('Вогнедар')).'-Вогнедар');
    }
    public function testSplDetect114()
    {
        $this->assertEquals('N-Вогнян', trim($this->object->getFullNameFormat('Вогнян')).'-Вогнян');
    }
    public function testSplDetect115()
    {
        $this->assertEquals('N-Водограй', trim($this->object->getFullNameFormat('Водограй')).'-Водограй');
    }
    public function testSplDetect116()
    {
        $this->assertEquals('N-Водотрав', trim($this->object->getFullNameFormat('Водотрав')).'-Водотрав');
    }
    public function testSplDetect117()
    {
        $this->assertEquals('N-Воїслав', trim($this->object->getFullNameFormat('Воїслав')).'-Воїслав');
    }
    public function testSplDetect118()
    {
        $this->assertEquals('N-Волелюб', trim($this->object->getFullNameFormat('Волелюб')).'-Волелюб');
    }
    public function testSplDetect119()
    {
        $this->assertEquals('N-Володар', trim($this->object->getFullNameFormat('Володар')).'-Володар');
    }
    public function testSplDetect120()
    {
        $this->assertEquals('N-Володимир', trim($this->object->getFullNameFormat('Володимир')).'-Володимир');
    }
    public function testSplDetect121()
    {
        $this->assertEquals('N-Володислав', trim($this->object->getFullNameFormat('Володислав')).'-Володислав');
    }
    public function testSplDetect122()
    {
        $this->assertEquals('N-Воля', trim($this->object->getFullNameFormat('Воля')).'-Воля');
    }
    public function testSplDetect123()
    {
        $this->assertEquals('N-Воротислав', trim($this->object->getFullNameFormat('Воротислав')).'-Воротислав');
    }
    public function testSplDetect124()
    {
        $this->assertEquals('N-Вратан', trim($this->object->getFullNameFormat('Вратан')).'-Вратан');
    }
    public function testSplDetect125()
    {
        $this->assertEquals('N-Вратислав', trim($this->object->getFullNameFormat('Вратислав')).'-Вратислав');
    }
    public function testSplDetect126()
    {
        $this->assertEquals('N-Всевлад', trim($this->object->getFullNameFormat('Всевлад')).'-Всевлад');
    }
    public function testSplDetect127()
    {
        $this->assertEquals('N-Всеволод', trim($this->object->getFullNameFormat('Всеволод')).'-Всеволод');
    }
    public function testSplDetect128()
    {
        $this->assertEquals('N-Вселюб', trim($this->object->getFullNameFormat('Вселюб')).'-Вселюб');
    }
    public function testSplDetect129()
    {
        $this->assertEquals('N-Вселюд', trim($this->object->getFullNameFormat('Вселюд')).'-Вселюд');
    }
    public function testSplDetect130()
    {
        $this->assertEquals('N-Всеслав', trim($this->object->getFullNameFormat('Всеслав')).'-Всеслав');
    }
    public function testSplDetect131()
    {
        $this->assertEquals('N-Гарнослав', trim($this->object->getFullNameFormat('Гарнослав')).'-Гарнослав');
    }
    public function testSplDetect132()
    {
        $this->assertEquals('N-Гатусил', trim($this->object->getFullNameFormat('Гатусил')).'-Гатусил');
    }
    public function testSplDetect133()
    {
        $this->assertEquals('N-Гатуслав', trim($this->object->getFullNameFormat('Гатуслав')).'-Гатуслав');
    }
    public function testSplDetect134()
    {
        $this->assertEquals('N-Гервасій', trim($this->object->getFullNameFormat('Гервасій')).'-Гервасій');
    }
    public function testSplDetect135()
    {
        $this->assertEquals('N-Гладко', trim($this->object->getFullNameFormat('Гладко')).'-Гладко');
    }
    public function testSplDetect136()
    {
        $this->assertEquals('N-Гліб', trim($this->object->getFullNameFormat('Гліб')).'-Гліб');
    }
    public function testSplDetect137()
    {
        $this->assertEquals('N-Годомир', trim($this->object->getFullNameFormat('Годомир')).'-Годомир');
    }
    public function testSplDetect138()
    {
        $this->assertEquals('N-Голубко', trim($this->object->getFullNameFormat('Голубко')).'-Голубко');
    }
    public function testSplDetect139()
    {
        $this->assertEquals('N-Горун', trim($this->object->getFullNameFormat('Горун')).'-Горун');
    }
    public function testSplDetect140()
    {
        $this->assertEquals('N-Гордій', trim($this->object->getFullNameFormat('Гордій')).'-Гордій');
    }
    public function testSplDetect141()
    {
        $this->assertEquals('N-Гордислав', trim($this->object->getFullNameFormat('Гордислав')).'-Гордислав');
    }
    public function testSplDetect142()
    {
        $this->assertEquals('N-Гордогост', trim($this->object->getFullNameFormat('Гордогост')).'-Гордогост');
    }
    public function testSplDetect143()
    {
        $this->assertEquals('N-Гордодум', trim($this->object->getFullNameFormat('Гордодум')).'-Гордодум');
    }
    public function testSplDetect144()
    {
        $this->assertEquals('N-Гордомисл', trim($this->object->getFullNameFormat('Гордомисл')).'-Гордомисл');
    }
    public function testSplDetect145()
    {
        $this->assertEquals('N-Гордослав', trim($this->object->getFullNameFormat('Гордослав')).'-Гордослав');
    }
    public function testSplDetect146()
    {
        $this->assertEquals('N-Гордята', trim($this->object->getFullNameFormat('Гордята')).'-Гордята');
    }
    public function testSplDetect147()
    {
        $this->assertEquals('N-Горигляд', trim($this->object->getFullNameFormat('Горигляд')).'-Горигляд');
    }
    public function testSplDetect148()
    {
        $this->assertEquals('N-Горимир', trim($this->object->getFullNameFormat('Горимир')).'-Горимир');
    }
    public function testSplDetect149()
    {
        $this->assertEquals('N-Горимисл', trim($this->object->getFullNameFormat('Горимисл')).'-Горимисл');
    }
    public function testSplDetect150()
    {
        $this->assertEquals('N-Горисвіт', trim($this->object->getFullNameFormat('Горисвіт')).'-Горисвіт');
    }
    public function testSplDetect151()
    {
        $this->assertEquals('N-Горислав', trim($this->object->getFullNameFormat('Горислав')).'-Горислав');
    }
    public function testSplDetect152()
    {
        $this->assertEquals('N-Горицвіт', trim($this->object->getFullNameFormat('Горицвіт')).'-Горицвіт');
    }
    public function testSplDetect153()
    {
        $this->assertEquals('N-Гостомисл', trim($this->object->getFullNameFormat('Гостомисл')).'-Гостомисл');
    }
    public function testSplDetect154()
    {
        $this->assertEquals('N-Гострозір', trim($this->object->getFullNameFormat('Гострозір')).'-Гострозір');
    }
    public function testSplDetect155()
    {
        $this->assertEquals('N-Гостята', trim($this->object->getFullNameFormat('Гостята')).'-Гостята');
    }
    public function testSplDetect156()
    {
        $this->assertEquals('N-Градимир', trim($this->object->getFullNameFormat('Градимир')).'-Градимир');
    }
    public function testSplDetect157()
    {
        $this->assertEquals('N-Градислав', trim($this->object->getFullNameFormat('Градислав')).'-Градислав');
    }
    public function testSplDetect158()
    {
        $this->assertEquals('N-Гранислав', trim($this->object->getFullNameFormat('Гранислав')).'-Гранислав');
    }
    public function testSplDetect159()
    {
        $this->assertEquals('N-Грива', trim($this->object->getFullNameFormat('Грива')).'-Грива');
    }
    public function testSplDetect160()
    {
        $this->assertEquals('N-Григорій', trim($this->object->getFullNameFormat('Григорій')).'-Григорій');
    }
    public function testSplDetect161()
    {
        $this->assertEquals('N-Гремислав', trim($this->object->getFullNameFormat('Гремислав')).'-Гремислав');
    }
    public function testSplDetect162()
    {
        $this->assertEquals('N-Грозан', trim($this->object->getFullNameFormat('Грозан')).'-Грозан');
    }
    public function testSplDetect163()
    {
        $this->assertEquals('N-Громовик', trim($this->object->getFullNameFormat('Громовик')).'-Громовик');
    }
    public function testSplDetect164()
    {
        $this->assertEquals('N-Гуляйвітер', trim($this->object->getFullNameFormat('Гуляйвітер')).'-Гуляйвітер');
    }
    public function testSplDetect165()
    {
        $this->assertEquals('N-Густомисл', trim($this->object->getFullNameFormat('Густомисл')).'-Густомисл');
    }
    public function testSplDetect166()
    {
        $this->assertEquals('N-Далемил', trim($this->object->getFullNameFormat('Далемил')).'-Далемил');
    }
    public function testSplDetect167()
    {
        $this->assertEquals('N-Далемир', trim($this->object->getFullNameFormat('Далемир')).'-Далемир');
    }
    public function testSplDetect168()
    {
        $this->assertEquals('N-Далібор', trim($this->object->getFullNameFormat('Далібор')).'-Далібор');
    }
    public function testSplDetect169()
    {
        $this->assertEquals('N-Дан', trim($this->object->getFullNameFormat('Дан')).'-Дан');
    }
    public function testSplDetect170()
    {
        $this->assertEquals('N-Данило', trim($this->object->getFullNameFormat('Данило')).'-Данило');
    }
    public function testSplDetect171()
    {
        $this->assertEquals('N-Данко', trim($this->object->getFullNameFormat('Данко')).'-Данко');
    }
    public function testSplDetect172()
    {
        $this->assertEquals('N-Дантур', trim($this->object->getFullNameFormat('Дантур')).'-Дантур');
    }
    public function testSplDetect173()
    {
        $this->assertEquals('N-Дар', trim($this->object->getFullNameFormat('Дар')).'-Дар');
    }
    public function testSplDetect174()
    {
        $this->assertEquals('N-Дарій', trim($this->object->getFullNameFormat('Дарій')).'-Дарій');
    }
    public function testSplDetect175()
    {
        $this->assertEquals('N-Дарибог', trim($this->object->getFullNameFormat('Дарибог')).'-Дарибог');
    }
    public function testSplDetect176()
    {
        $this->assertEquals('N-Даромир', trim($this->object->getFullNameFormat('Даромир')).'-Даромир');
    }
    public function testSplDetect177()
    {
        $this->assertEquals('N-Держикрай', trim($this->object->getFullNameFormat('Держикрай')).'-Держикрай');
    }
    public function testSplDetect178()
    {
        $this->assertEquals('N-Держислав', trim($this->object->getFullNameFormat('Держислав')).'-Держислав');
    }
    public function testSplDetect179()
    {
        $this->assertEquals('N-Дибач', trim($this->object->getFullNameFormat('Дибач')).'-Дибач');
    }
    public function testSplDetect180()
    {
        $this->assertEquals('N-Дивозір', trim($this->object->getFullNameFormat('Дивозір')).'-Дивозір');
    }
    public function testSplDetect181()
    {
        $this->assertEquals('N-Дій', trim($this->object->getFullNameFormat('Дій')).'-Дій');
    }
    public function testSplDetect182()
    {
        $this->assertEquals('N-Добрибій', trim($this->object->getFullNameFormat('Добрибій')).'-Добрибій');
    }
    public function testSplDetect183()
    {
        $this->assertEquals('N-Добривод', trim($this->object->getFullNameFormat('Добривод')).'-Добривод');
    }
    public function testSplDetect184()
    {
        $this->assertEquals('N-Добрик', trim($this->object->getFullNameFormat('Добрик')).'-Добрик');
    }
    public function testSplDetect185()
    {
        $this->assertEquals('N-Добрило', trim($this->object->getFullNameFormat('Добрило')).'-Добрило');
    }
    public function testSplDetect186()
    {
        $this->assertEquals('N-Добриня', trim($this->object->getFullNameFormat('Добриня')).'-Добриня');
    }
    public function testSplDetect187()
    {
        $this->assertEquals('N-Добрисвіт', trim($this->object->getFullNameFormat('Добрисвіт')).'-Добрисвіт');
    }
    public function testSplDetect188()
    {
        $this->assertEquals('N-Добровіст', trim($this->object->getFullNameFormat('Добровіст')).'-Добровіст');
    }
    public function testSplDetect189()
    {
        $this->assertEquals('N-Доброгост', trim($this->object->getFullNameFormat('Доброгост')).'-Доброгост');
    }
    public function testSplDetect190()
    {
        $this->assertEquals('N-Добродум', trim($this->object->getFullNameFormat('Добродум')).'-Добродум');
    }
    public function testSplDetect191()
    {
        $this->assertEquals('N-Добролик', trim($this->object->getFullNameFormat('Добролик')).'-Добролик');
    }
    public function testSplDetect192()
    {
        $this->assertEquals('N-Добролюб', trim($this->object->getFullNameFormat('Добролюб')).'-Добролюб');
    }
    public function testSplDetect193()
    {
        $this->assertEquals('N-Добромил', trim($this->object->getFullNameFormat('Добромил')).'-Добромил');
    }
    public function testSplDetect194()
    {
        $this->assertEquals('N-Добромир', trim($this->object->getFullNameFormat('Добромир')).'-Добромир');
    }
    public function testSplDetect195()
    {
        $this->assertEquals('N-Добромисл', trim($this->object->getFullNameFormat('Добромисл')).'-Добромисл');
    }
    public function testSplDetect196()
    {
        $this->assertEquals('N-Доброслав', trim($this->object->getFullNameFormat('Доброслав')).'-Доброслав');
    }
    public function testSplDetect197()
    {
        $this->assertEquals('N-Доморад', trim($this->object->getFullNameFormat('Доморад')).'-Доморад');
    }
    public function testSplDetect198()
    {
        $this->assertEquals('N-Домослав', trim($this->object->getFullNameFormat('Домослав')).'-Домослав');
    }
    public function testSplDetect199()
    {
        $this->assertEquals('N-Дорогобуг', trim($this->object->getFullNameFormat('Дорогобуг')).'-Дорогобуг');
    }
    public function testSplDetect200()
    {
        $this->assertEquals('N-Дорогомир', trim($this->object->getFullNameFormat('Дорогомир')).'-Дорогомир');
    }
    public function testSplDetect201()
    {
        $this->assertEquals('N-Дорогомисл', trim($this->object->getFullNameFormat('Дорогомисл')).'-Дорогомисл');
    }
    public function testSplDetect202()
    {
        $this->assertEquals('N-Дорогосил', trim($this->object->getFullNameFormat('Дорогосил')).'-Дорогосил');
    }
    public function testSplDetect203()
    {
        $this->assertEquals('N-Дорогочин', trim($this->object->getFullNameFormat('Дорогочин')).'-Дорогочин');
    }
    public function testSplDetect204()
    {
        $this->assertEquals('N-Драган', trim($this->object->getFullNameFormat('Драган')).'-Драган');
    }
    public function testSplDetect205()
    {
        $this->assertEquals('N-Дружелюб', trim($this->object->getFullNameFormat('Дружелюб')).'-Дружелюб');
    }
    public function testSplDetect206()
    {
        $this->assertEquals('N-Жадан', trim($this->object->getFullNameFormat('Жадан')).'-Жадан');
    }
    public function testSplDetect207()
    {
        $this->assertEquals('N-Ждан', trim($this->object->getFullNameFormat('Ждан')).'-Ждан');
    }
    public function testSplDetect208()
    {
        $this->assertEquals('N-Живорід', trim($this->object->getFullNameFormat('Живорід')).'-Живорід');
    }
    public function testSplDetect209()
    {
        $this->assertEquals('N-Живосил', trim($this->object->getFullNameFormat('Живосил')).'-Живосил');
    }
    public function testSplDetect210()
    {
        $this->assertEquals('N-Живослав', trim($this->object->getFullNameFormat('Живослав')).'-Живослав');
    }
    public function testSplDetect211()
    {
        $this->assertEquals('N-Житомир', trim($this->object->getFullNameFormat('Житомир')).'-Житомир');
    }
    public function testSplDetect212()
    {
        $this->assertEquals('N-Життєлюб', trim($this->object->getFullNameFormat('Життєлюб')).'-Життєлюб');
    }
    public function testSplDetect213()
    {
        $this->assertEquals('N-Збоїслав', trim($this->object->getFullNameFormat('Збоїслав')).'-Збоїслав');
    }
    public function testSplDetect214()
    {
        $this->assertEquals('N-Зборислав', trim($this->object->getFullNameFormat('Зборислав')).'-Зборислав');
    }
    public function testSplDetect215()
    {
        $this->assertEquals('N-Звенигор', trim($this->object->getFullNameFormat('Звенигор')).'-Звенигор');
    }
    public function testSplDetect216()
    {
        $this->assertEquals('N-Звенимир', trim($this->object->getFullNameFormat('Звенимир')).'-Звенимир');
    }
    public function testSplDetect217()
    {
        $this->assertEquals('N-Звенислав', trim($this->object->getFullNameFormat('Звенислав')).'-Звенислав');
    }
    public function testSplDetect218()
    {
        $this->assertEquals('N-Здоровега', trim($this->object->getFullNameFormat('Здоровега')).'-Здоровега');
    }
    public function testSplDetect219()
    {
        $this->assertEquals('N-Земислав', trim($this->object->getFullNameFormat('Земислав')).'-Земислав');
    }
    public function testSplDetect220()
    {
        $this->assertEquals('N-Зеновій', trim($this->object->getFullNameFormat('Зеновій')).'-Зеновій');
    }
    public function testSplDetect221()
    {
        $this->assertEquals('N-Зіновій', trim($this->object->getFullNameFormat('Зіновій')).'-Зіновій');
    }
    public function testSplDetect222()
    {
        $this->assertEquals('N-Зиновій', trim($this->object->getFullNameFormat('Зиновій')).'-Зиновій');
    }
    public function testSplDetect223()
    {
        $this->assertEquals('N-Злат', trim($this->object->getFullNameFormat('Злат')).'-Злат');
    }
    public function testSplDetect224()
    {
        $this->assertEquals('N-Златомир', trim($this->object->getFullNameFormat('Златомир')).'-Златомир');
    }
    public function testSplDetect225()
    {
        $this->assertEquals('N-Златоус', trim($this->object->getFullNameFormat('Златоус')).'-Златоус');
    }
    public function testSplDetect226()
    {
        $this->assertEquals('N-Златодан', trim($this->object->getFullNameFormat('Златодан')).'-Златодан');
    }
    public function testSplDetect227()
    {
        $this->assertEquals('N-Злотан', trim($this->object->getFullNameFormat('Злотан')).'-Злотан');
    }
    public function testSplDetect228()
    {
        $this->assertEquals('N-Злотодан', trim($this->object->getFullNameFormat('Злотодан')).'-Злотодан');
    }
    public function testSplDetect229()
    {
        $this->assertEquals('N-Зорегляд', trim($this->object->getFullNameFormat('Зорегляд')).'-Зорегляд');
    }
    public function testSplDetect230()
    {
        $this->assertEquals('N-Зоремир', trim($this->object->getFullNameFormat('Зоремир')).'-Зоремир');
    }
    public function testSplDetect231()
    {
        $this->assertEquals('N-Зорепад', trim($this->object->getFullNameFormat('Зорепад')).'-Зорепад');
    }
    public function testSplDetect232()
    {
        $this->assertEquals('N-Зореслав', trim($this->object->getFullNameFormat('Зореслав')).'-Зореслав');
    }
    public function testSplDetect233()
    {
        $this->assertEquals('N-Зорян', trim($this->object->getFullNameFormat('Зорян')).'-Зорян');
    }
    public function testSplDetect234()
    {
        $this->assertEquals('N-Ізяслав', trim($this->object->getFullNameFormat('Ізяслав')).'-Ізяслав');
    }
    public function testSplDetect235()
    {
        $this->assertEquals('N-Ігор', trim($this->object->getFullNameFormat('Ігор')).'-Ігор');
    }
    public function testSplDetect236()
    {
        $this->assertEquals('N-Іван', trim($this->object->getFullNameFormat('Іван')).'-Іван');
    }
    public function testSplDetect237()
    {
        $this->assertEquals('N-Квітан', trim($this->object->getFullNameFormat('Квітан')).'-Квітан');
    }
    public function testSplDetect238()
    {
        $this->assertEquals('N-Києслав', trim($this->object->getFullNameFormat('Києслав')).'-Києслав');
    }
    public function testSplDetect239()
    {
        $this->assertEquals('N-Кий', trim($this->object->getFullNameFormat('Кий')).'-Кий');
    }
    public function testSplDetect240()
    {
        $this->assertEquals('N-Кирило', trim($this->object->getFullNameFormat('Кирило')).'-Кирило');
    }
    public function testSplDetect241()
    {
        $this->assertEquals('N-Киян', trim($this->object->getFullNameFormat('Киян')).'-Киян');
    }
    public function testSplDetect242()
    {
        $this->assertEquals('N-Княжослав', trim($this->object->getFullNameFormat('Княжослав')).'-Княжослав');
    }
    public function testSplDetect243()
    {
        $this->assertEquals('N-Корній', trim($this->object->getFullNameFormat('Корній')).'-Корній');
    }
    public function testSplDetect244()
    {
        $this->assertEquals('N-Колодар', trim($this->object->getFullNameFormat('Колодар')).'-Колодар');
    }
    public function testSplDetect245()
    {
        $this->assertEquals('N-Колодій', trim($this->object->getFullNameFormat('Колодій')).'-Колодій');
    }
    public function testSplDetect246()
    {
        $this->assertEquals('N-Косак', trim($this->object->getFullNameFormat('Косак')).'-Косак');
    }
    public function testSplDetect247()
    {
        $this->assertEquals('N-Красун', trim($this->object->getFullNameFormat('Красун')).'-Красун');
    }
    public function testSplDetect248()
    {
        $this->assertEquals('N-Крилач', trim($this->object->getFullNameFormat('Крилач')).'-Крилач');
    }
    public function testSplDetect249()
    {
        $this->assertEquals('N-Куйбіда', trim($this->object->getFullNameFormat('Куйбіда')).'-Куйбіда');
    }
    public function testSplDetect250()
    {
        $this->assertEquals('N-Курило', trim($this->object->getFullNameFormat('Курило')).'-Курило');
    }
    public function testSplDetect251()
    {
        $this->assertEquals('N-Лад', trim($this->object->getFullNameFormat('Лад')).'-Лад');
    }
    public function testSplDetect252()
    {
        $this->assertEquals('N-Ладимир', trim($this->object->getFullNameFormat('Ладимир')).'-Ладимир');
    }
    public function testSplDetect253()
    {
        $this->assertEquals('N-Ладислав', trim($this->object->getFullNameFormat('Ладислав')).'-Ладислав');
    }
    public function testSplDetect254()
    {
        $this->assertEquals('N-Ладолюб', trim($this->object->getFullNameFormat('Ладолюб')).'-Ладолюб');
    }
    public function testSplDetect255()
    {
        $this->assertEquals('N-Ладомир', trim($this->object->getFullNameFormat('Ладомир')).'-Ладомир');
    }
    public function testSplDetect256()
    {
        $this->assertEquals('N-Лев', trim($this->object->getFullNameFormat('Лев')).'-Лев');
    }
    public function testSplDetect257()
    {
        $this->assertEquals('N-Левко', trim($this->object->getFullNameFormat('Левко')).'-Левко');
    }
    public function testSplDetect258()
    {
        $this->assertEquals('N-Листвич', trim($this->object->getFullNameFormat('Листвич')).'-Листвич');
    }
    public function testSplDetect259()
    {
        $this->assertEquals('N-Ліпослав', trim($this->object->getFullNameFormat('Ліпослав')).'-Ліпослав');
    }
    public function testSplDetect260()
    {
        $this->assertEquals('N-Лоліт', trim($this->object->getFullNameFormat('Лоліт')).'-Лоліт');
    }
    public function testSplDetect261()
    {
        $this->assertEquals('N-Любим', trim($this->object->getFullNameFormat('Любим')).'-Любим');
    }
    public function testSplDetect262()
    {
        $this->assertEquals('N-Любовир', trim($this->object->getFullNameFormat('Любовир')).'-Любовир');
    }
    public function testSplDetect263()
    {
        $this->assertEquals('N-Любодар', trim($this->object->getFullNameFormat('Любодар')).'-Любодар');
    }
    public function testSplDetect264()
    {
        $this->assertEquals('N-Любозар', trim($this->object->getFullNameFormat('Любозар')).'-Любозар');
    }
    public function testSplDetect265()
    {
        $this->assertEquals('N-Любомил', trim($this->object->getFullNameFormat('Любомил')).'-Любомил');
    }
    public function testSplDetect266()
    {
        $this->assertEquals('N-Любомир', trim($this->object->getFullNameFormat('Любомир')).'-Любомир');
    }
    public function testSplDetect267()
    {
        $this->assertEquals('N-Любомисл', trim($this->object->getFullNameFormat('Любомисл')).'-Любомисл');
    }
    public function testSplDetect268()
    {
        $this->assertEquals('N-Любомудр', trim($this->object->getFullNameFormat('Любомудр')).'-Любомудр');
    }
    public function testSplDetect269()
    {
        $this->assertEquals('N-Любослав', trim($this->object->getFullNameFormat('Любослав')).'-Любослав');
    }
    public function testSplDetect270()
    {
        $this->assertEquals('N-Людомил', trim($this->object->getFullNameFormat('Людомил')).'-Людомил');
    }
    public function testSplDetect271()
    {
        $this->assertEquals('N-Людомир', trim($this->object->getFullNameFormat('Людомир')).'-Людомир');
    }
    public function testSplDetect272()
    {
        $this->assertEquals('N-Людислав', trim($this->object->getFullNameFormat('Людислав')).'-Людислав');
    }
    public function testSplDetect273()
    {
        $this->assertEquals('N-Лютобор', trim($this->object->getFullNameFormat('Лютобор')).'-Лютобор');
    }
    public function testSplDetect274()
    {
        $this->assertEquals('N-Лютомисл', trim($this->object->getFullNameFormat('Лютомисл')).'-Лютомисл');
    }
    public function testSplDetect275()
    {
        $this->assertEquals('N-Магадар', trim($this->object->getFullNameFormat('Магадар')).'-Магадар');
    }
    public function testSplDetect276()
    {
        $this->assertEquals('N-Магамир', trim($this->object->getFullNameFormat('Магамир')).'-Магамир');
    }
    public function testSplDetect277()
    {
        $this->assertEquals('N-Магаслав', trim($this->object->getFullNameFormat('Магаслав')).'-Магаслав');
    }
    public function testSplDetect278()
    {
        $this->assertEquals('N-Маркіян', trim($this->object->getFullNameFormat('Маркіян')).'-Маркіян');
    }
    public function testSplDetect279()
    {
        $this->assertEquals('N-Май', trim($this->object->getFullNameFormat('Май')).'-Май');
    }
    public function testSplDetect280()
    {
        $this->assertEquals('N-Мал', trim($this->object->getFullNameFormat('Мал')).'-Мал');
    }
    public function testSplDetect281()
    {
        $this->assertEquals('N-Малик', trim($this->object->getFullNameFormat('Малик')).'-Малик');
    }
    public function testSplDetect282()
    {
        $this->assertEquals('N-Маломир', trim($this->object->getFullNameFormat('Маломир')).'-Маломир');
    }
    public function testSplDetect283()
    {
        $this->assertEquals('N-Марко', trim($this->object->getFullNameFormat('Марко')).'-Марко');
    }
    public function testSplDetect284()
    {
        $this->assertEquals('N-Медомир', trim($this->object->getFullNameFormat('Медомир')).'-Медомир');
    }
    public function testSplDetect285()
    {
        $this->assertEquals('N-Межамир', trim($this->object->getFullNameFormat('Межамир')).'-Межамир');
    }
    public function testSplDetect286()
    {
        $this->assertEquals('N-Мечислав', trim($this->object->getFullNameFormat('Мечислав')).'-Мечислав');
    }
    public function testSplDetect287()
    {
        $this->assertEquals('N-Мизамир', trim($this->object->getFullNameFormat('Мизамир')).'-Мизамир');
    }
    public function testSplDetect288()
    {
        $this->assertEquals('N-Милан', trim($this->object->getFullNameFormat('Милан')).'-Милан');
    }
    public function testSplDetect289()
    {
        $this->assertEquals('N-Милован', trim($this->object->getFullNameFormat('Милован')).'-Милован');
    }
    public function testSplDetect290()
    {
        $this->assertEquals('N-Милодар', trim($this->object->getFullNameFormat('Милодар')).'-Милодар');
    }
    public function testSplDetect291()
    {
        $this->assertEquals('N-Милодух', trim($this->object->getFullNameFormat('Милодух')).'-Милодух');
    }
    public function testSplDetect292()
    {
        $this->assertEquals('N-Милослав', trim($this->object->getFullNameFormat('Милослав')).'-Милослав');
    }
    public function testSplDetect293()
    {
        $this->assertEquals('N-Мир', trim($this->object->getFullNameFormat('Мир')).'-Мир');
    }
    public function testSplDetect294()
    {
        $this->assertEquals('N-Миробог', trim($this->object->getFullNameFormat('Миробог')).'-Миробог');
    }
    public function testSplDetect295()
    {
        $this->assertEquals('N-Мирогост', trim($this->object->getFullNameFormat('Мирогост')).'-Мирогост');
    }
    public function testSplDetect296()
    {
        $this->assertEquals('N-Миролюб', trim($this->object->getFullNameFormat('Миролюб')).'-Миролюб');
    }
    public function testSplDetect297()
    {
        $this->assertEquals('N-Мирослав', trim($this->object->getFullNameFormat('Мирослав')).'-Мирослав');
    }
    public function testSplDetect298()
    {
        $this->assertEquals('N-Мовчан', trim($this->object->getFullNameFormat('Мовчан')).'-Мовчан');
    }
    public function testSplDetect299()
    {
        $this->assertEquals('N-Молибог', trim($this->object->getFullNameFormat('Молибог')).'-Молибог');
    }
    public function testSplDetect300()
    {
        $this->assertEquals('N-Мстибог', trim($this->object->getFullNameFormat('Мстибог')).'-Мстибог');
    }
    public function testSplDetect301()
    {
        $this->assertEquals('N-Мстивой', trim($this->object->getFullNameFormat('Мстивой')).'-Мстивой');
    }
    public function testSplDetect302()
    {
        $this->assertEquals('N-Мстислав', trim($this->object->getFullNameFormat('Мстислав')).'-Мстислав');
    }
    public function testSplDetect303()
    {
        $this->assertEquals('N-Мудролюб', trim($this->object->getFullNameFormat('Мудролюб')).'-Мудролюб');
    }
    public function testSplDetect304()
    {
        $this->assertEquals('N-Нагнибіда', trim($this->object->getFullNameFormat('Нагнибіда')).'-Нагнибіда');
    }
    public function testSplDetect305()
    {
        $this->assertEquals('N-Надій', trim($this->object->getFullNameFormat('Надій')).'-Надій');
    }
    public function testSplDetect306()
    {
        $this->assertEquals('N-Найден', trim($this->object->getFullNameFormat('Найден')).'-Найден');
    }
    public function testSplDetect307()
    {
        $this->assertEquals('N-Наслав', trim($this->object->getFullNameFormat('Наслав')).'-Наслав');
    }
    public function testSplDetect308()
    {
        $this->assertEquals('N-Недан', trim($this->object->getFullNameFormat('Недан')).'-Недан');
    }
    public function testSplDetect309()
    {
        $this->assertEquals('N-Немир', trim($this->object->getFullNameFormat('Немир')).'-Немир');
    }
    public function testSplDetect310()
    {
        $this->assertEquals('N-Непобор', trim($this->object->getFullNameFormat('Непобор')).'-Непобор');
    }
    public function testSplDetect311()
    {
        $this->assertEquals('N-Нігослав', trim($this->object->getFullNameFormat('Нігослав')).'-Нігослав');
    }
    public function testSplDetect312()
    {
        $this->assertEquals('N-Назар', trim($this->object->getFullNameFormat('Назар')).'-Назар');
    }
    public function testSplDetect313()
    {
        $this->assertEquals('N-Одинець', trim($this->object->getFullNameFormat('Одинець')).'-Одинець');
    }
    public function testSplDetect314()
    {
        $this->assertEquals('N-Олег', trim($this->object->getFullNameFormat('Олег')).'-Олег');
    }
    public function testSplDetect315()
    {
        $this->assertEquals('N-Олександр', trim($this->object->getFullNameFormat('Олександр')).'-Олександр');
    }
    public function testSplDetect316()
    {
        $this->assertEquals('N-Олексій', trim($this->object->getFullNameFormat('Олексій')).'-Олексій');
    }
    public function testSplDetect317()
    {
        $this->assertEquals('N-Олесь', trim($this->object->getFullNameFormat('Олесь')).'-Олесь');
    }
    public function testSplDetect318()
    {
        $this->assertEquals('N-Олелько', trim($this->object->getFullNameFormat('Олелько')).'-Олелько');
    }
    public function testSplDetect319()
    {
        $this->assertEquals('N-Орел', trim($this->object->getFullNameFormat('Орел')).'-Орел');
    }
    public function testSplDetect320()
    {
        $this->assertEquals('N-Орест', trim($this->object->getFullNameFormat('Орест')).'-Орест');
    }
    public function testSplDetect321()
    {
        $this->assertEquals('N-Орь', trim($this->object->getFullNameFormat('Орь')).'-Орь');
    }
    public function testSplDetect322()
    {
        $this->assertEquals('N-Оримир', trim($this->object->getFullNameFormat('Оримир')).'-Оримир');
    }
    public function testSplDetect323()
    {
        $this->assertEquals('N-Осмомисл', trim($this->object->getFullNameFormat('Осмомисл')).'-Осмомисл');
    }
    public function testSplDetect324()
    {
        $this->assertEquals('N-Острозор', trim($this->object->getFullNameFormat('Острозор')).'-Острозор');
    }
    public function testSplDetect325()
    {
        $this->assertEquals('N-Остромир', trim($this->object->getFullNameFormat('Остромир')).'-Остромир');
    }
    public function testSplDetect326()
    {
        $this->assertEquals('N-Остромов', trim($this->object->getFullNameFormat('Остромов')).'-Остромов');
    }
    public function testSplDetect327()
    {
        $this->assertEquals('N-Охрім', trim($this->object->getFullNameFormat('Охрім')).'-Охрім');
    }
    public function testSplDetect328()
    {
        $this->assertEquals('N-Павло', trim($this->object->getFullNameFormat('Павло')).'-Павло');
    }
    public function testSplDetect329()
    {
        $this->assertEquals('N-Первушко', trim($this->object->getFullNameFormat('Первушко')).'-Первушко');
    }
    public function testSplDetect330()
    {
        $this->assertEquals('N-Перелюб', trim($this->object->getFullNameFormat('Перелюб')).'-Перелюб');
    }
    public function testSplDetect331()
    {
        $this->assertEquals('N-Перемил', trim($this->object->getFullNameFormat('Перемил')).'-Перемил');
    }
    public function testSplDetect332()
    {
        $this->assertEquals('N-Перемисл', trim($this->object->getFullNameFormat('Перемисл')).'-Перемисл');
    }
    public function testSplDetect333()
    {
        $this->assertEquals('N-Пересвіт', trim($this->object->getFullNameFormat('Пересвіт')).'-Пересвіт');
    }
    public function testSplDetect334()
    {
        $this->assertEquals('N-Переяслав', trim($this->object->getFullNameFormat('Переяслав')).'-Переяслав');
    }
    public function testSplDetect335()
    {
        $this->assertEquals('N-Першик', trim($this->object->getFullNameFormat('Першик')).'-Першик');
    }
    public function testSplDetect336()
    {
        $this->assertEquals('N-Подолян', trim($this->object->getFullNameFormat('Подолян')).'-Подолян');
    }
    public function testSplDetect337()
    {
        $this->assertEquals('N-Позвізд', trim($this->object->getFullNameFormat('Позвізд')).'-Позвізд');
    }
    public function testSplDetect338()
    {
        $this->assertEquals('N-Полель', trim($this->object->getFullNameFormat('Полель')).'-Полель');
    }
    public function testSplDetect339()
    {
        $this->assertEquals('N-Полян', trim($this->object->getFullNameFormat('Полян')).'-Полян');
    }
    public function testSplDetect340()
    {
        $this->assertEquals('N-Пребислав', trim($this->object->getFullNameFormat('Пребислав')).'-Пребислав');
    }
    public function testSplDetect341()
    {
        $this->assertEquals('N-Предислав', trim($this->object->getFullNameFormat('Предислав')).'-Предислав');
    }
    public function testSplDetect342()
    {
        $this->assertEquals('N-Пугач', trim($this->object->getFullNameFormat('Пугач')).'-Пугач');
    }
    public function testSplDetect343()
    {
        $this->assertEquals('N-Путило', trim($this->object->getFullNameFormat('Путило')).'-Путило');
    }
    public function testSplDetect344()
    {
        $this->assertEquals('N-Путята', trim($this->object->getFullNameFormat('Путята')).'-Путята');
    }
    public function testSplDetect345()
    {
        $this->assertEquals('N-Рава', trim($this->object->getFullNameFormat('Рава')).'-Рава');
    }
    public function testSplDetect346()
    {
        $this->assertEquals('N-Рад', trim($this->object->getFullNameFormat('Рад')).'-Рад');
    }
    public function testSplDetect347()
    {
        $this->assertEquals('N-Радечко', trim($this->object->getFullNameFormat('Радечко')).'-Радечко');
    }
    public function testSplDetect348()
    {
        $this->assertEquals('N-Радивой', trim($this->object->getFullNameFormat('Радивой')).'-Радивой');
    }
    public function testSplDetect349()
    {
        $this->assertEquals('N-Радило', trim($this->object->getFullNameFormat('Радило')).'-Радило');
    }
    public function testSplDetect350()
    {
        $this->assertEquals('N-Радим', trim($this->object->getFullNameFormat('Радим')).'-Радим');
    }
    public function testSplDetect351()
    {
        $this->assertEquals('N-Радимир', trim($this->object->getFullNameFormat('Радимир')).'-Радимир');
    }
    public function testSplDetect352()
    {
        $this->assertEquals('N-Радислав', trim($this->object->getFullNameFormat('Радислав')).'-Радислав');
    }
    public function testSplDetect353()
    {
        $this->assertEquals('N-Радко', trim($this->object->getFullNameFormat('Радко')).'-Радко');
    }
    public function testSplDetect354()
    {
        $this->assertEquals('N-Радован', trim($this->object->getFullNameFormat('Радован')).'-Радован');
    }
    public function testSplDetect355()
    {
        $this->assertEquals('N-Радогост', trim($this->object->getFullNameFormat('Радогост')).'-Радогост');
    }
    public function testSplDetect356()
    {
        $this->assertEquals('N-Радомир', trim($this->object->getFullNameFormat('Радомир')).'-Радомир');
    }
    public function testSplDetect357()
    {
        $this->assertEquals('N-Радомисл', trim($this->object->getFullNameFormat('Радомисл')).'-Радомисл');
    }
    public function testSplDetect358()
    {
        $this->assertEquals('N-Радослав', trim($this->object->getFullNameFormat('Радослав')).'-Радослав');
    }
    public function testSplDetect359()
    {
        $this->assertEquals('N-Ратибор', trim($this->object->getFullNameFormat('Ратибор')).'-Ратибор');
    }
    public function testSplDetect360()
    {
        $this->assertEquals('N-Ратимир', trim($this->object->getFullNameFormat('Ратимир')).'-Ратимир');
    }
    public function testSplDetect361()
    {
        $this->assertEquals('N-Ратислав', trim($this->object->getFullNameFormat('Ратислав')).'-Ратислав');
    }
    public function testSplDetect362()
    {
        $this->assertEquals('N-Ревун', trim($this->object->getFullNameFormat('Ревун')).'-Ревун');
    }
    public function testSplDetect363()
    {
        $this->assertEquals('N-Рід', trim($this->object->getFullNameFormat('Рід')).'-Рід');
    }
    public function testSplDetect364()
    {
        $this->assertEquals('N-Рогволод', trim($this->object->getFullNameFormat('Рогволод')).'-Рогволод');
    }
    public function testSplDetect365()
    {
        $this->assertEquals('N-Родан', trim($this->object->getFullNameFormat('Родан')).'-Родан');
    }
    public function testSplDetect366()
    {
        $this->assertEquals('N-Родослав', trim($this->object->getFullNameFormat('Родослав')).'-Родослав');
    }
    public function testSplDetect367()
    {
        $this->assertEquals('N-Рожден', trim($this->object->getFullNameFormat('Рожден')).'-Рожден');
    }
    public function testSplDetect368()
    {
        $this->assertEquals('N-Розум', trim($this->object->getFullNameFormat('Розум')).'-Розум');
    }
    public function testSplDetect369()
    {
        $this->assertEquals('N-Роксолан', trim($this->object->getFullNameFormat('Роксолан')).'-Роксолан');
    }
    public function testSplDetect370()
    {
        $this->assertEquals('N-Роман', trim($this->object->getFullNameFormat('Роман')).'-Роман');
    }
    public function testSplDetect371()
    {
        $this->assertEquals('N-Ростислав', trim($this->object->getFullNameFormat('Ростислав')).'-Ростислав');
    }
    public function testSplDetect372()
    {
        $this->assertEquals('N-Ростичар', trim($this->object->getFullNameFormat('Ростичар')).'-Ростичар');
    }
    public function testSplDetect373()
    {
        $this->assertEquals('N-Ростун', trim($this->object->getFullNameFormat('Ростун')).'-Ростун');
    }
    public function testSplDetect374()
    {
        $this->assertEquals('N-Рудан', trim($this->object->getFullNameFormat('Рудан')).'-Рудан');
    }
    public function testSplDetect375()
    {
        $this->assertEquals('N-Рус', trim($this->object->getFullNameFormat('Рус')).'-Рус');
    }
    public function testSplDetect376()
    {
        $this->assertEquals('N-Руслан', trim($this->object->getFullNameFormat('Руслан')).'-Руслан');
    }
    public function testSplDetect377()
    {
        $this->assertEquals('N-Русудан', trim($this->object->getFullNameFormat('Русудан')).'-Русудан');
    }
    public function testSplDetect378()
    {
        $this->assertEquals('N-Сармат', trim($this->object->getFullNameFormat('Сармат')).'-Сармат');
    }
    public function testSplDetect379()
    {
        $this->assertEquals('N-Сварг', trim($this->object->getFullNameFormat('Сварг')).'-Сварг');
    }
    public function testSplDetect380()
    {
        $this->assertEquals('N-Сват', trim($this->object->getFullNameFormat('Сват')).'-Сват');
    }
    public function testSplDetect381()
    {
        $this->assertEquals('N-Світ', trim($this->object->getFullNameFormat('Світ')).'-Світ');
    }
    public function testSplDetect382()
    {
        $this->assertEquals('N-Світлан', trim($this->object->getFullNameFormat('Світлан')).'-Світлан');
    }
    public function testSplDetect383()
    {
        $this->assertEquals('N-Світлогор', trim($this->object->getFullNameFormat('Світлогор')).'-Світлогор');
    }
    public function testSplDetect384()
    {
        $this->assertEquals('N-Світогор', trim($this->object->getFullNameFormat('Світогор')).'-Світогор');
    }
    public function testSplDetect385()
    {
        $this->assertEquals('N-Світовид', trim($this->object->getFullNameFormat('Світовид')).'-Світовид');
    }
    public function testSplDetect386()
    {
        $this->assertEquals('N-Світодар', trim($this->object->getFullNameFormat('Світодар')).'-Світодар');
    }
    public function testSplDetect387()
    {
        $this->assertEquals('N-Світозар', trim($this->object->getFullNameFormat('Світозар')).'-Світозар');
    }
    public function testSplDetect388()
    {
        $this->assertEquals('N-Світокол', trim($this->object->getFullNameFormat('Світокол')).'-Світокол');
    }
    public function testSplDetect389()
    {
        $this->assertEquals('N-Світолик', trim($this->object->getFullNameFormat('Світолик')).'-Світолик');
    }
    public function testSplDetect390()
    {
        $this->assertEquals('N-Світолюб', trim($this->object->getFullNameFormat('Світолюб')).'-Світолюб');
    }
    public function testSplDetect391()
    {
        $this->assertEquals('N-Світомир', trim($this->object->getFullNameFormat('Світомир')).'-Світомир');
    }
    public function testSplDetect392()
    {
        $this->assertEquals('N-Світослав', trim($this->object->getFullNameFormat('Світослав')).'-Світослав');
    }
    public function testSplDetect393()
    {
        $this->assertEquals('N-Світояр', trim($this->object->getFullNameFormat('Світояр')).'-Світояр');
    }
    public function testSplDetect394()
    {
        $this->assertEquals('N-Свободан', trim($this->object->getFullNameFormat('Свободан')).'-Свободан');
    }
    public function testSplDetect395()
    {
        $this->assertEquals('N-Святовид', trim($this->object->getFullNameFormat('Святовид')).'-Святовид');
    }
    public function testSplDetect396()
    {
        $this->assertEquals('N-Святогор', trim($this->object->getFullNameFormat('Святогор')).'-Святогор');
    }
    public function testSplDetect397()
    {
        $this->assertEquals('N-Святолюб', trim($this->object->getFullNameFormat('Святолюб')).'-Святолюб');
    }
    public function testSplDetect398()
    {
        $this->assertEquals('N-Святополк', trim($this->object->getFullNameFormat('Святополк')).'-Святополк');
    }
    public function testSplDetect399()
    {
        $this->assertEquals('N-Святослав', trim($this->object->getFullNameFormat('Святослав')).'-Святослав');
    }
    public function testSplDetect400()
    {
        $this->assertEquals('N-Семибор', trim($this->object->getFullNameFormat('Семибор')).'-Семибор');
    }
    public function testSplDetect401()
    {
        $this->assertEquals('N-Семирад', trim($this->object->getFullNameFormat('Семирад')).'-Семирад');
    }
    public function testSplDetect402()
    {
        $this->assertEquals('N-Сердитко', trim($this->object->getFullNameFormat('Сердитко')).'-Сердитко');
    }
    public function testSplDetect403()
    {
        $this->assertEquals('N-Сила', trim($this->object->getFullNameFormat('Сила')).'-Сила');
    }
    public function testSplDetect404()
    {
        $this->assertEquals('N-Силолюб', trim($this->object->getFullNameFormat('Силолюб')).'-Силолюб');
    }
    public function testSplDetect405()
    {
        $this->assertEquals('N-Силослав', trim($this->object->getFullNameFormat('Силослав')).'-Силослав');
    }
    public function testSplDetect406()
    {
        $this->assertEquals('N-Синьоок', trim($this->object->getFullNameFormat('Синьоок')).'-Синьоок');
    }
    public function testSplDetect407()
    {
        $this->assertEquals('N-Скол', trim($this->object->getFullNameFormat('Скол')).'-Скол');
    }
    public function testSplDetect408()
    {
        $this->assertEquals('N-Слава', trim($this->object->getFullNameFormat('Слава')).'-Слава');
    }
    public function testSplDetect409()
    {
        $this->assertEquals('N-Славобор', trim($this->object->getFullNameFormat('Славобор')).'-Славобор');
    }
    public function testSplDetect410()
    {
        $this->assertEquals('N-Славолюб', trim($this->object->getFullNameFormat('Славолюб')).'-Славолюб');
    }
    public function testSplDetect411()
    {
        $this->assertEquals('N-Славомир', trim($this->object->getFullNameFormat('Славомир')).'-Славомир');
    }
    public function testSplDetect412()
    {
        $this->assertEquals('N-Славута', trim($this->object->getFullNameFormat('Славута')).'-Славута');
    }
    public function testSplDetect413()
    {
        $this->assertEquals('N-Снага', trim($this->object->getFullNameFormat('Снага')).'-Снага');
    }
    public function testSplDetect414()
    {
        $this->assertEquals('N-Сніжан', trim($this->object->getFullNameFormat('Сніжан')).'-Сніжан');
    }
    public function testSplDetect415()
    {
        $this->assertEquals('N-Сновид', trim($this->object->getFullNameFormat('Сновид')).'-Сновид');
    }
    public function testSplDetect416()
    {
        $this->assertEquals('N-Снозір', trim($this->object->getFullNameFormat('Снозір')).'-Снозір');
    }
    public function testSplDetect417()
    {
        $this->assertEquals('N-Собібор', trim($this->object->getFullNameFormat('Собібор')).'-Собібор');
    }
    public function testSplDetect418()
    {
        $this->assertEquals('N-Собімир', trim($this->object->getFullNameFormat('Собімир')).'-Собімир');
    }
    public function testSplDetect419()
    {
        $this->assertEquals('N-Собіслав', trim($this->object->getFullNameFormat('Собіслав')).'-Собіслав');
    }
    public function testSplDetect420()
    {
        $this->assertEquals('N-Сокіл', trim($this->object->getFullNameFormat('Сокіл')).'-Сокіл');
    }
    public function testSplDetect421()
    {
        $this->assertEquals('N-Соловей', trim($this->object->getFullNameFormat('Соловей')).'-Соловей');
    }
    public function testSplDetect422()
    {
        $this->assertEquals('N-Сологуб', trim($this->object->getFullNameFormat('Сологуб')).'-Сологуб');
    }
    public function testSplDetect423()
    {
        $this->assertEquals('N-Сонцевид', trim($this->object->getFullNameFormat('Сонцевид')).'-Сонцевид');
    }
    public function testSplDetect424()
    {
        $this->assertEquals('N-Сонцедар', trim($this->object->getFullNameFormat('Сонцедар')).'-Сонцедар');
    }
    public function testSplDetect425()
    {
        $this->assertEquals('N-Сонцелик', trim($this->object->getFullNameFormat('Сонцелик')).'-Сонцелик');
    }
    public function testSplDetect426()
    {
        $this->assertEquals('N-Спас', trim($this->object->getFullNameFormat('Спас')).'-Спас');
    }
    public function testSplDetect427()
    {
        $this->assertEquals('N-Станимир', trim($this->object->getFullNameFormat('Станимир')).'-Станимир');
    }
    public function testSplDetect428()
    {
        $this->assertEquals('N-Станіслав', trim($this->object->getFullNameFormat('Станіслав')).'-Станіслав');
    }
    public function testSplDetect429()
    {
        $this->assertEquals('N-Стародум', trim($this->object->getFullNameFormat('Стародум')).'-Стародум');
    }
    public function testSplDetect430()
    {
        $this->assertEquals('N-Степан', trim($this->object->getFullNameFormat('Степан')).'-Степан');
    }
    public function testSplDetect431()
    {
        $this->assertEquals('N-Стефаній', trim($this->object->getFullNameFormat('Стефаній')).'-Стефаній');
    }
    public function testSplDetect432()
    {
        $this->assertEquals('N-Стожар', trim($this->object->getFullNameFormat('Стожар')).'-Стожар');
    }
    public function testSplDetect433()
    {
        $this->assertEquals('N-Стоймир', trim($this->object->getFullNameFormat('Стоймир')).'-Стоймир');
    }
    public function testSplDetect434()
    {
        $this->assertEquals('N-Стоян', trim($this->object->getFullNameFormat('Стоян')).'-Стоян');
    }
    public function testSplDetect435()
    {
        $this->assertEquals('N-Судивой', trim($this->object->getFullNameFormat('Судивой')).'-Судивой');
    }
    public function testSplDetect436()
    {
        $this->assertEquals('N-Судимир', trim($this->object->getFullNameFormat('Судимир')).'-Судимир');
    }
    public function testSplDetect437()
    {
        $this->assertEquals('N-Судислав', trim($this->object->getFullNameFormat('Судислав')).'-Судислав');
    }
    public function testSplDetect438()
    {
        $this->assertEquals('N-Сурма', trim($this->object->getFullNameFormat('Сурма')).'-Сурма');
    }
    public function testSplDetect439()
    {
        $this->assertEquals('N-Тарас', trim($this->object->getFullNameFormat('Тарас')).'-Тарас');
    }
    public function testSplDetect440()
    {
        $this->assertEquals('N-Татолюб', trim($this->object->getFullNameFormat('Татолюб')).'-Татолюб');
    }
    public function testSplDetect441()
    {
        $this->assertEquals('N-Татомир', trim($this->object->getFullNameFormat('Татомир')).'-Татомир');
    }
    public function testSplDetect442()
    {
        $this->assertEquals('N-Твердигост', trim($this->object->getFullNameFormat('Твердигост')).'-Твердигост');
    }
    public function testSplDetect443()
    {
        $this->assertEquals('N-Твердислав', trim($this->object->getFullNameFormat('Твердислав')).'-Твердислав');
    }
    public function testSplDetect444()
    {
        $this->assertEquals('N-Творилад', trim($this->object->getFullNameFormat('Творилад')).'-Творилад');
    }
    public function testSplDetect445()
    {
        $this->assertEquals('N-Творимир', trim($this->object->getFullNameFormat('Творимир')).'-Творимир');
    }
    public function testSplDetect446()
    {
        $this->assertEquals('N-Творислав', trim($this->object->getFullNameFormat('Творислав')).'-Творислав');
    }
    public function testSplDetect447()
    {
        $this->assertEquals('N-Тихомир', trim($this->object->getFullNameFormat('Тихомир')).'-Тихомир');
    }
    public function testSplDetect448()
    {
        $this->assertEquals('N-Тихон', trim($this->object->getFullNameFormat('Тихон')).'-Тихон');
    }
    public function testSplDetect449()
    {
        $this->assertEquals('N-Толигнів', trim($this->object->getFullNameFormat('Толигнів')).'-Толигнів');
    }
    public function testSplDetect450()
    {
        $this->assertEquals('N-Толислав', trim($this->object->getFullNameFormat('Толислав')).'-Толислав');
    }
    public function testSplDetect451()
    {
        $this->assertEquals('N-Тригост', trim($this->object->getFullNameFormat('Тригост')).'-Тригост');
    }
    public function testSplDetect452()
    {
        $this->assertEquals('N-Троян', trim($this->object->getFullNameFormat('Троян')).'-Троян');
    }
    public function testSplDetect453()
    {
        $this->assertEquals('N-Триріг', trim($this->object->getFullNameFormat('Триріг')).'-Триріг');
    }
    public function testSplDetect454()
    {
        $this->assertEquals('N-Тур', trim($this->object->getFullNameFormat('Тур')).'-Тур');
    }
    public function testSplDetect455()
    {
        $this->assertEquals('N-Турбог', trim($this->object->getFullNameFormat('Турбог')).'-Турбог');
    }
    public function testSplDetect456()
    {
        $this->assertEquals('N-Турбрід', trim($this->object->getFullNameFormat('Турбрід')).'-Турбрід');
    }
    public function testSplDetect457()
    {
        $this->assertEquals('N-Уличан', trim($this->object->getFullNameFormat('Уличан')).'-Уличан');
    }
    public function testSplDetect458()
    {
        $this->assertEquals('N-Ус', trim($this->object->getFullNameFormat('Ус')).'-Ус');
    }
    public function testSplDetect459()
    {
        $this->assertEquals('N-Хвала', trim($this->object->getFullNameFormat('Хвала')).'-Хвала');
    }
    public function testSplDetect460()
    {
        $this->assertEquals('N-Хвалибог', trim($this->object->getFullNameFormat('Хвалибог')).'-Хвалибог');
    }
    public function testSplDetect461()
    {
        $this->assertEquals('N-Хвалимир', trim($this->object->getFullNameFormat('Хвалимир')).'-Хвалимир');
    }
    public function testSplDetect462()
    {
        $this->assertEquals('N-Ходота', trim($this->object->getFullNameFormat('Ходота')).'-Ходота');
    }
    public function testSplDetect463()
    {
        $this->assertEquals('N-Хорив', trim($this->object->getFullNameFormat('Хорив')).'-Хорив');
    }
    public function testSplDetect464()
    {
        $this->assertEquals('N-Хорошко', trim($this->object->getFullNameFormat('Хорошко')).'-Хорошко');
    }
    public function testSplDetect465()
    {
        $this->assertEquals('N-Хорошун', trim($this->object->getFullNameFormat('Хорошун')).'-Хорошун');
    }
    public function testSplDetect466()
    {
        $this->assertEquals('N-Хотибор', trim($this->object->getFullNameFormat('Хотибор')).'-Хотибор');
    }
    public function testSplDetect467()
    {
        $this->assertEquals('N-Хотимир', trim($this->object->getFullNameFormat('Хотимир')).'-Хотимир');
    }
    public function testSplDetect468()
    {
        $this->assertEquals('N-Хотян', trim($this->object->getFullNameFormat('Хотян')).'-Хотян');
    }
    public function testSplDetect469()
    {
        $this->assertEquals('N-Хранимир', trim($this->object->getFullNameFormat('Хранимир')).'-Хранимир');
    }
    public function testSplDetect470()
    {
        $this->assertEquals('N-Худан', trim($this->object->getFullNameFormat('Худан')).'-Худан');
    }
    public function testSplDetect471()
    {
        $this->assertEquals('N-Царко', trim($this->object->getFullNameFormat('Царко')).'-Царко');
    }
    public function testSplDetect472()
    {
        $this->assertEquals('N-Цвітан', trim($this->object->getFullNameFormat('Цвітан')).'-Цвітан');
    }
    public function testSplDetect473()
    {
        $this->assertEquals('N-Чара', trim($this->object->getFullNameFormat('Чара')).'-Чара');
    }
    public function testSplDetect474()
    {
        $this->assertEquals('N-Чернин', trim($this->object->getFullNameFormat('Чернин')).'-Чернин');
    }
    public function testSplDetect475()
    {
        $this->assertEquals('N-Чеслав', trim($this->object->getFullNameFormat('Чеслав')).'-Чеслав');
    }
    public function testSplDetect476()
    {
        $this->assertEquals('N-Чесмил', trim($this->object->getFullNameFormat('Чесмил')).'-Чесмил');
    }
    public function testSplDetect477()
    {
        $this->assertEquals('N-Честислав', trim($this->object->getFullNameFormat('Честислав')).'-Честислав');
    }
    public function testSplDetect478()
    {
        $this->assertEquals('N-Чорновіл', trim($this->object->getFullNameFormat('Чорновіл')).'-Чорновіл');
    }
    public function testSplDetect479()
    {
        $this->assertEquals('N-Чорнота', trim($this->object->getFullNameFormat('Чорнота')).'-Чорнота');
    }
    public function testSplDetect480()
    {
        $this->assertEquals('N-Чорнотур', trim($this->object->getFullNameFormat('Чорнотур')).'-Чорнотур');
    }
    public function testSplDetect481()
    {
        $this->assertEquals('N-Щастибог', trim($this->object->getFullNameFormat('Щастибог')).'-Щастибог');
    }
    public function testSplDetect482()
    {
        $this->assertEquals('N-Щастислав', trim($this->object->getFullNameFormat('Щастислав')).'-Щастислав');
    }
    public function testSplDetect483()
    {
        $this->assertEquals('N-Щедрогост', trim($this->object->getFullNameFormat('Щедрогост')).'-Щедрогост');
    }
    public function testSplDetect484()
    {
        $this->assertEquals('N-Щек', trim($this->object->getFullNameFormat('Щек')).'-Щек');
    }
    public function testSplDetect485()
    {
        $this->assertEquals('N-Юрій', trim($this->object->getFullNameFormat('Юрій')).'-Юрій');
    }
    public function testSplDetect486()
    {
        $this->assertEquals('N-Юлій', trim($this->object->getFullNameFormat('Юлій')).'-Юлій');
    }
    public function testSplDetect487()
    {
        $this->assertEquals('N-Ява', trim($this->object->getFullNameFormat('Ява')).'-Ява');
    }
    public function testSplDetect488()
    {
        $this->assertEquals('N-Явір', trim($this->object->getFullNameFormat('Явір')).'-Явір');
    }
    public function testSplDetect489()
    {
        $this->assertEquals('N-Яволод', trim($this->object->getFullNameFormat('Яволод')).'-Яволод');
    }
    public function testSplDetect490()
    {
        $this->assertEquals('N-Яр', trim($this->object->getFullNameFormat('Яр')).'-Яр');
    }
    public function testSplDetect491()
    {
        $this->assertEquals('N-Ярема', trim($this->object->getFullNameFormat('Ярема')).'-Ярема');
    }
    public function testSplDetect492()
    {
        $this->assertEquals('N-Ярило', trim($this->object->getFullNameFormat('Ярило')).'-Ярило');
    }
    public function testSplDetect493()
    {
        $this->assertEquals('N-Яровид', trim($this->object->getFullNameFormat('Яровид')).'-Яровид');
    }
    public function testSplDetect494()
    {
        $this->assertEquals('N-Яровит', trim($this->object->getFullNameFormat('Яровит')).'-Яровит');
    }
    public function testSplDetect495()
    {
        $this->assertEquals('N-Яромил', trim($this->object->getFullNameFormat('Яромил')).'-Яромил');
    }
    public function testSplDetect496()
    {
        $this->assertEquals('N-Яромир', trim($this->object->getFullNameFormat('Яромир')).'-Яромир');
    }
    public function testSplDetect497()
    {
        $this->assertEquals('N-Яромисл', trim($this->object->getFullNameFormat('Яромисл')).'-Яромисл');
    }
    public function testSplDetect498()
    {
        $this->assertEquals('N-Ярополк', trim($this->object->getFullNameFormat('Ярополк')).'-Ярополк');
    }
    public function testSplDetect499()
    {
        $this->assertEquals('N-Яросвіт', trim($this->object->getFullNameFormat('Яросвіт')).'-Яросвіт');
    }
    public function testSplDetect500()
    {
        $this->assertEquals('N-Ярослав', trim($this->object->getFullNameFormat('Ярослав')).'-Ярослав');
    }
    public function testSplDetect501()
    {
        $this->assertEquals('N-Ярош', trim($this->object->getFullNameFormat('Ярош')).'-Ярош');
    }
    public function testSplDetect502()
    {
        $this->assertEquals('N-Яртур', trim($this->object->getFullNameFormat('Яртур')).'-Яртур');
    }
    public function testSplDetect503()
    {
        $this->assertEquals('N-Ярчик', trim($this->object->getFullNameFormat('Ярчик')).'-Ярчик');
    }
    public function testSplDetect504()
    {
        $this->assertEquals('N-Ясен', trim($this->object->getFullNameFormat('Ясен')).'-Ясен');
    }
    public function testSplDetect505()
    {
        $this->assertEquals('N-Ясновид', trim($this->object->getFullNameFormat('Ясновид')).'-Ясновид');
    }
    public function testSplDetect506()
    {
        $this->assertEquals('N-Ясногор', trim($this->object->getFullNameFormat('Ясногор')).'-Ясногор');
    }
    public function testSplDetect507()
    {
        $this->assertEquals('N-Яснозір', trim($this->object->getFullNameFormat('Яснозір')).'-Яснозір');
    }
    public function testSplDetect508()
    {
        $this->assertEquals('N-Яснолик', trim($this->object->getFullNameFormat('Яснолик')).'-Яснолик');
    }
    public function testSplDetect509()
    {
        $this->assertEquals('N-Августа', trim($this->object->getFullNameFormat('Августа')).'-Августа');
    }
    public function testSplDetect510()
    {
        $this->assertEquals('N-Аврелія', trim($this->object->getFullNameFormat('Аврелія')).'-Аврелія');
    }
    public function testSplDetect511()
    {
        $this->assertEquals('N-Аврора', trim($this->object->getFullNameFormat('Аврора')).'-Аврора');
    }
    public function testSplDetect512()
    {
        $this->assertEquals('N-Агнія', trim($this->object->getFullNameFormat('Агнія')).'-Агнія');
    }
    public function testSplDetect513()
    {
        $this->assertEquals('N-Агрипина', trim($this->object->getFullNameFormat('Агрипина')).'-Агрипина');
    }
    public function testSplDetect514()
    {
        $this->assertEquals('N-Ада', trim($this->object->getFullNameFormat('Ада')).'-Ада');
    }
    public function testSplDetect515()
    {
        $this->assertEquals('N-Аделаїда', trim($this->object->getFullNameFormat('Аделаїда')).'-Аделаїда');
    }
    public function testSplDetect516()
    {
        $this->assertEquals('N-Адріана', trim($this->object->getFullNameFormat('Адріана')).'-Адріана');
    }
    public function testSplDetect517()
    {
        $this->assertEquals('N-Аза', trim($this->object->getFullNameFormat('Аза')).'-Аза');
    }
    public function testSplDetect518()
    {
        $this->assertEquals('N-Азалія', trim($this->object->getFullNameFormat('Азалія')).'-Азалія');
    }
    public function testSplDetect519()
    {
        $this->assertEquals('N-Аліна', trim($this->object->getFullNameFormat('Аліна')).'-Аліна');
    }
    public function testSplDetect520()
    {
        $this->assertEquals('N-Аліса', trim($this->object->getFullNameFormat('Аліса')).'-Аліса');
    }
    public function testSplDetect521()
    {
        $this->assertEquals('N-Алла', trim($this->object->getFullNameFormat('Алла')).'-Алла');
    }
    public function testSplDetect522()
    {
        $this->assertEquals('N-Альбертина', trim($this->object->getFullNameFormat('Альбертина')).'-Альбертина');
    }
    public function testSplDetect523()
    {
        $this->assertEquals('N-Альбіна', trim($this->object->getFullNameFormat('Альбіна')).'-Альбіна');
    }
    public function testSplDetect524()
    {
        $this->assertEquals('N-Альвіна', trim($this->object->getFullNameFormat('Альвіна')).'-Альвіна');
    }
    public function testSplDetect525()
    {
        $this->assertEquals('N-Анастасія', trim($this->object->getFullNameFormat('Анастасія')).'-Анастасія');
    }
    public function testSplDetect526()
    {
        $this->assertEquals('N-Ангеліна', trim($this->object->getFullNameFormat('Ангеліна')).'-Ангеліна');
    }
    public function testSplDetect527()
    {
        $this->assertEquals('N-Анжела', trim($this->object->getFullNameFormat('Анжела')).'-Анжела');
    }
    public function testSplDetect528()
    {
        $this->assertEquals('N-Антоніна', trim($this->object->getFullNameFormat('Антоніна')).'-Антоніна');
    }
    public function testSplDetect529()
    {
        $this->assertEquals('N-Анфіса', trim($this->object->getFullNameFormat('Анфіса')).'-Анфіса');
    }
    public function testSplDetect530()
    {
        $this->assertEquals('N-Аріадна', trim($this->object->getFullNameFormat('Аріадна')).'-Аріадна');
    }
    public function testSplDetect531()
    {
        $this->assertEquals('N-Арсена', trim($this->object->getFullNameFormat('Арсена')).'-Арсена');
    }
    public function testSplDetect532()
    {
        $this->assertEquals('N-Ася', trim($this->object->getFullNameFormat('Ася')).'-Ася');
    }
    public function testSplDetect533()
    {
        $this->assertEquals('N-Афіна', trim($this->object->getFullNameFormat('Афіна')).'-Афіна');
    }
    public function testSplDetect534()
    {
        $this->assertEquals('N-Афродіта', trim($this->object->getFullNameFormat('Афродіта')).'-Афродіта');
    }
    public function testSplDetect535()
    {
        $this->assertEquals('N-Бажана', trim($this->object->getFullNameFormat('Бажана')).'-Бажана');
    }
    public function testSplDetect536()
    {
        $this->assertEquals('N-Берегиня', trim($this->object->getFullNameFormat('Берегиня')).'-Берегиня');
    }
    public function testSplDetect537()
    {
        $this->assertEquals('N-Біловида', trim($this->object->getFullNameFormat('Біловида')).'-Біловида');
    }
    public function testSplDetect538()
    {
        $this->assertEquals('N-Біломира', trim($this->object->getFullNameFormat('Біломира')).'-Біломира');
    }
    public function testSplDetect539()
    {
        $this->assertEquals('N-Білослава', trim($this->object->getFullNameFormat('Білослава')).'-Білослава');
    }
    public function testSplDetect540()
    {
        $this->assertEquals('N-Біляна', trim($this->object->getFullNameFormat('Біляна')).'-Біляна');
    }
    public function testSplDetect541()
    {
        $this->assertEquals('N-Благиня', trim($this->object->getFullNameFormat('Благиня')).'-Благиня');
    }
    public function testSplDetect542()
    {
        $this->assertEquals('N-Благовида', trim($this->object->getFullNameFormat('Благовида')).'-Благовида');
    }
    public function testSplDetect543()
    {
        $this->assertEquals('N-Благовіра', trim($this->object->getFullNameFormat('Благовіра')).'-Благовіра');
    }
    public function testSplDetect544()
    {
        $this->assertEquals('N-Благовіста', trim($this->object->getFullNameFormat('Благовіста')).'-Благовіста');
    }
    public function testSplDetect545()
    {
        $this->assertEquals('N-Благослава', trim($this->object->getFullNameFormat('Благослава')).'-Благослава');
    }
    public function testSplDetect546()
    {
        $this->assertEquals('N-Богдана', trim($this->object->getFullNameFormat('Богдана')).'-Богдана');
    }
    public function testSplDetect547()
    {
        $this->assertEquals('N-Боговіра', trim($this->object->getFullNameFormat('Боговіра')).'-Боговіра');
    }
    public function testSplDetect548()
    {
        $this->assertEquals('N-Боговіста', trim($this->object->getFullNameFormat('Боговіста')).'-Боговіста');
    }
    public function testSplDetect549()
    {
        $this->assertEquals('N-Богодара', trim($this->object->getFullNameFormat('Богодара')).'-Богодара');
    }
    public function testSplDetect550()
    {
        $this->assertEquals('N-Боголіпа', trim($this->object->getFullNameFormat('Боголіпа')).'-Боголіпа');
    }
    public function testSplDetect551()
    {
        $this->assertEquals('N-Боголюба', trim($this->object->getFullNameFormat('Боголюба')).'-Боголюба');
    }
    public function testSplDetect552()
    {
        $this->assertEquals('N-Богосвята', trim($this->object->getFullNameFormat('Богосвята')).'-Богосвята');
    }
    public function testSplDetect553()
    {
        $this->assertEquals('N-Богумила', trim($this->object->getFullNameFormat('Богумила')).'-Богумила');
    }
    public function testSplDetect554()
    {
        $this->assertEquals('N-Богумира', trim($this->object->getFullNameFormat('Богумира')).'-Богумира');
    }
    public function testSplDetect555()
    {
        $this->assertEquals('N-Богуслава', trim($this->object->getFullNameFormat('Богуслава')).'-Богуслава');
    }
    public function testSplDetect556()
    {
        $this->assertEquals('N-Божедана', trim($this->object->getFullNameFormat('Божедана')).'-Божедана');
    }
    public function testSplDetect557()
    {
        $this->assertEquals('N-Божедара', trim($this->object->getFullNameFormat('Божедара')).'-Божедара');
    }
    public function testSplDetect558()
    {
        $this->assertEquals('N-Божемила', trim($this->object->getFullNameFormat('Божемила')).'-Божемила');
    }
    public function testSplDetect559()
    {
        $this->assertEquals('N-Божена', trim($this->object->getFullNameFormat('Божена')).'-Божена');
    }
    public function testSplDetect560()
    {
        $this->assertEquals('N-Божиця', trim($this->object->getFullNameFormat('Божиця')).'-Божиця');
    }
    public function testSplDetect561()
    {
        $this->assertEquals('N-Болеслава', trim($this->object->getFullNameFormat('Болеслава')).'-Болеслава');
    }
    public function testSplDetect562()
    {
        $this->assertEquals('N-Борислава', trim($this->object->getFullNameFormat('Борислава')).'-Борислава');
    }
    public function testSplDetect563()
    {
        $this->assertEquals('N-Боронислава', trim($this->object->getFullNameFormat('Боронислава')).'-Боронислава');
    }
    public function testSplDetect564()
    {
        $this->assertEquals('N-Братолюба', trim($this->object->getFullNameFormat('Братолюба')).'-Братолюба');
    }
    public function testSplDetect565()
    {
        $this->assertEquals('N-Братомила', trim($this->object->getFullNameFormat('Братомила')).'-Братомила');
    }
    public function testSplDetect566()
    {
        $this->assertEquals('N-Брячислава', trim($this->object->getFullNameFormat('Брячислава')).'-Брячислава');
    }
    public function testSplDetect567()
    {
        $this->assertEquals('N-Будана', trim($this->object->getFullNameFormat('Будана')).'-Будана');
    }
    public function testSplDetect568()
    {
        $this->assertEquals('N-Будимира', trim($this->object->getFullNameFormat('Будимира')).'-Будимира');
    }
    public function testSplDetect569()
    {
        $this->assertEquals('N-Будислава', trim($this->object->getFullNameFormat('Будислава')).'-Будислава');
    }
    public function testSplDetect570()
    {
        $this->assertEquals('N-Ведана', trim($this->object->getFullNameFormat('Ведана')).'-Ведана');
    }
    public function testSplDetect571()
    {
        $this->assertEquals('N-Велимира', trim($this->object->getFullNameFormat('Велимира')).'-Велимира');
    }
    public function testSplDetect572()
    {
        $this->assertEquals('N-Вербава', trim($this->object->getFullNameFormat('Вербава')).'-Вербава');
    }
    public function testSplDetect573()
    {
        $this->assertEquals('N-Верхуслава', trim($this->object->getFullNameFormat('Верхуслава')).'-Верхуслава');
    }
    public function testSplDetect574()
    {
        $this->assertEquals('N-Веселина', trim($this->object->getFullNameFormat('Веселина')).'-Веселина');
    }
    public function testSplDetect575()
    {
        $this->assertEquals('N-Веселка', trim($this->object->getFullNameFormat('Веселка')).'-Веселка');
    }
    public function testSplDetect576()
    {
        $this->assertEquals('N-Весна', trim($this->object->getFullNameFormat('Весна')).'-Весна');
    }
    public function testSplDetect577()
    {
        $this->assertEquals('N-Вишена', trim($this->object->getFullNameFormat('Вишена')).'-Вишена');
    }
    public function testSplDetect578()
    {
        $this->assertEquals('N-Вишеслава', trim($this->object->getFullNameFormat('Вишеслава')).'-Вишеслава');
    }
    public function testSplDetect579()
    {
        $this->assertEquals('N-Вишня', trim($this->object->getFullNameFormat('Вишня')).'-Вишня');
    }
    public function testSplDetect580()
    {
        $this->assertEquals('N-Віра', trim($this->object->getFullNameFormat('Віра')).'-Віра');
    }
    public function testSplDetect581()
    {
        $this->assertEquals('N-Віродана', trim($this->object->getFullNameFormat('Віродана')).'-Віродана');
    }
    public function testSplDetect582()
    {
        $this->assertEquals('N-Віродара', trim($this->object->getFullNameFormat('Віродара')).'-Віродара');
    }
    public function testSplDetect583()
    {
        $this->assertEquals('N-Вірослава', trim($this->object->getFullNameFormat('Вірослава')).'-Вірослава');
    }
    public function testSplDetect584()
    {
        $this->assertEquals('N-Віста', trim($this->object->getFullNameFormat('Віста')).'-Віста');
    }
    public function testSplDetect585()
    {
        $this->assertEquals('N-Вістуна', trim($this->object->getFullNameFormat('Вістуна')).'-Вістуна');
    }
    public function testSplDetect586()
    {
        $this->assertEquals('N-Вітана', trim($this->object->getFullNameFormat('Вітана')).'-Вітана');
    }
    public function testSplDetect587()
    {
        $this->assertEquals('N-Влада', trim($this->object->getFullNameFormat('Влада')).'-Влада');
    }
    public function testSplDetect588()
    {
        $this->assertEquals('N-Владислава', trim($this->object->getFullNameFormat('Владислава')).'-Владислава');
    }
    public function testSplDetect589()
    {
        $this->assertEquals('N-Власта', trim($this->object->getFullNameFormat('Власта')).'-Власта');
    }
    public function testSplDetect590()
    {
        $this->assertEquals('N-Вогнедара', trim($this->object->getFullNameFormat('Вогнедара')).'-Вогнедара');
    }
    public function testSplDetect591()
    {
        $this->assertEquals('N-Вогняна', trim($this->object->getFullNameFormat('Вогняна')).'-Вогняна');
    }
    public function testSplDetect592()
    {
        $this->assertEquals('N-Волелюба', trim($this->object->getFullNameFormat('Волелюба')).'-Волелюба');
    }
    public function testSplDetect593()
    {
        $this->assertEquals('N-Володимира', trim($this->object->getFullNameFormat('Володимира')).'-Володимира');
    }
    public function testSplDetect594()
    {
        $this->assertEquals('N-Волошка', trim($this->object->getFullNameFormat('Волошка')).'-Волошка');
    }
    public function testSplDetect595()
    {
        $this->assertEquals('N-Воля', trim($this->object->getFullNameFormat('Воля')).'-Воля');
    }
    public function testSplDetect596()
    {
        $this->assertEquals('N-Всеволода', trim($this->object->getFullNameFormat('Всеволода')).'-Всеволода');
    }
    public function testSplDetect597()
    {
        $this->assertEquals('N-Вселюба', trim($this->object->getFullNameFormat('Вселюба')).'-Вселюба');
    }
    public function testSplDetect598()
    {
        $this->assertEquals('N-Всемира', trim($this->object->getFullNameFormat('Всемира')).'-Всемира');
    }
    public function testSplDetect599()
    {
        $this->assertEquals('N-Всеслава', trim($this->object->getFullNameFormat('Всеслава')).'-Всеслава');
    }
    public function testSplDetect600()
    {
        $this->assertEquals('N-В’ячеслава', trim($this->object->getFullNameFormat('В’ячеслава')).'-В’ячеслава');
    }
    public function testSplDetect601()
    {
        $this->assertEquals('N-Гаїна', trim($this->object->getFullNameFormat('Гаїна')).'-Гаїна');
    }
    public function testSplDetect602()
    {
        $this->assertEquals('N-Гатусила', trim($this->object->getFullNameFormat('Гатусила')).'-Гатусила');
    }
    public function testSplDetect603()
    {
        $this->assertEquals('N-Гарнослава', trim($this->object->getFullNameFormat('Гарнослава')).'-Гарнослава');
    }
    public function testSplDetect604()
    {
        $this->assertEquals('N-Голубка', trim($this->object->getFullNameFormat('Голубка')).'-Голубка');
    }
    public function testSplDetect605()
    {
        $this->assertEquals('N-Горигляда', trim($this->object->getFullNameFormat('Горигляда')).'-Горигляда');
    }
    public function testSplDetect606()
    {
        $this->assertEquals('N-Горислава', trim($this->object->getFullNameFormat('Горислава')).'-Горислава');
    }
    public function testSplDetect607()
    {
        $this->assertEquals('N-Городислава', trim($this->object->getFullNameFormat('Городислава')).'-Городислава');
    }
    public function testSplDetect608()
    {
        $this->assertEquals('N-Гострозора', trim($this->object->getFullNameFormat('Гострозора')).'-Гострозора');
    }
    public function testSplDetect609()
    {
        $this->assertEquals('N-Градислава', trim($this->object->getFullNameFormat('Градислава')).'-Градислава');
    }
    public function testSplDetect610()
    {
        $this->assertEquals('N-Гранислава', trim($this->object->getFullNameFormat('Гранислава')).'-Гранислава');
    }
    public function testSplDetect611()
    {
        $this->assertEquals('N-Гремислава', trim($this->object->getFullNameFormat('Гремислава')).'-Гремислава');
    }
    public function testSplDetect612()
    {
        $this->assertEquals('N-Далібора', trim($this->object->getFullNameFormat('Далібора')).'-Далібора');
    }
    public function testSplDetect613()
    {
        $this->assertEquals('N-Дана', trim($this->object->getFullNameFormat('Дана')).'-Дана');
    }
    public function testSplDetect614()
    {
        $this->assertEquals('N-Дарина', trim($this->object->getFullNameFormat('Дарина')).'-Дарина');
    }
    public function testSplDetect615()
    {
        $this->assertEquals('N-Дзвенимира', trim($this->object->getFullNameFormat('Дзвенимира')).'-Дзвенимира');
    }
    public function testSplDetect616()
    {
        $this->assertEquals('N-Дзвенислава', trim($this->object->getFullNameFormat('Дзвенислава')).'-Дзвенислава');
    }
    public function testSplDetect617()
    {
        $this->assertEquals('N-Дзвінка', trim($this->object->getFullNameFormat('Дзвінка')).'-Дзвінка');
    }
    public function testSplDetect618()
    {
        $this->assertEquals('N-Діяна', trim($this->object->getFullNameFormat('Діяна')).'-Діяна');
    }
    public function testSplDetect619()
    {
        $this->assertEquals('N-Добринка', trim($this->object->getFullNameFormat('Добринка')).'-Добринка');
    }
    public function testSplDetect620()
    {
        $this->assertEquals('N-Добровіста', trim($this->object->getFullNameFormat('Добровіста')).'-Добровіста');
    }
    public function testSplDetect621()
    {
        $this->assertEquals('N-Доброгніва', trim($this->object->getFullNameFormat('Доброгніва')).'-Доброгніва');
    }
    public function testSplDetect622()
    {
        $this->assertEquals('N-Добролюба', trim($this->object->getFullNameFormat('Добролюба')).'-Добролюба');
    }
    public function testSplDetect623()
    {
        $this->assertEquals('N-Добромила', trim($this->object->getFullNameFormat('Добромила')).'-Добромила');
    }
    public function testSplDetect624()
    {
        $this->assertEquals('N-Добромира', trim($this->object->getFullNameFormat('Добромира')).'-Добромира');
    }
    public function testSplDetect625()
    {
        $this->assertEquals('N-Доброніга', trim($this->object->getFullNameFormat('Доброніга')).'-Доброніга');
    }
    public function testSplDetect626()
    {
        $this->assertEquals('N-Доброслава', trim($this->object->getFullNameFormat('Доброслава')).'-Доброслава');
    }
    public function testSplDetect627()
    {
        $this->assertEquals('N-Долина', trim($this->object->getFullNameFormat('Долина')).'-Долина');
    }
    public function testSplDetect628()
    {
        $this->assertEquals('N-Доля', trim($this->object->getFullNameFormat('Доля')).'-Доля');
    }
    public function testSplDetect629()
    {
        $this->assertEquals('N-Домаха', trim($this->object->getFullNameFormat('Домаха')).'-Домаха');
    }
    public function testSplDetect630()
    {
        $this->assertEquals('N-Доморада', trim($this->object->getFullNameFormat('Доморада')).'-Доморада');
    }
    public function testSplDetect631()
    {
        $this->assertEquals('N-Дружелюба', trim($this->object->getFullNameFormat('Дружелюба')).'-Дружелюба');
    }
    public function testSplDetect632()
    {
        $this->assertEquals('N-Жадана', trim($this->object->getFullNameFormat('Жадана')).'-Жадана');
    }
    public function testSplDetect633()
    {
        $this->assertEquals('N-Ждана', trim($this->object->getFullNameFormat('Ждана')).'-Ждана');
    }
    public function testSplDetect634()
    {
        $this->assertEquals('N-Живосила', trim($this->object->getFullNameFormat('Живосила')).'-Живосила');
    }
    public function testSplDetect635()
    {
        $this->assertEquals('N-Живослава', trim($this->object->getFullNameFormat('Живослава')).'-Живослава');
    }
    public function testSplDetect636()
    {
        $this->assertEquals('N-Житомира', trim($this->object->getFullNameFormat('Житомира')).'-Житомира');
    }
    public function testSplDetect637()
    {
        $this->assertEquals('N-Життєлюба', trim($this->object->getFullNameFormat('Життєлюба')).'-Життєлюба');
    }
    public function testSplDetect638()
    {
        $this->assertEquals('N-Забава', trim($this->object->getFullNameFormat('Забава')).'-Забава');
    }
    public function testSplDetect639()
    {
        $this->assertEquals('N-Звенигора', trim($this->object->getFullNameFormat('Звенигора')).'-Звенигора');
    }
    public function testSplDetect640()
    {
        $this->assertEquals('N-Звенислава', trim($this->object->getFullNameFormat('Звенислава')).'-Звенислава');
    }
    public function testSplDetect641()
    {
        $this->assertEquals('N-Звонимира', trim($this->object->getFullNameFormat('Звонимира')).'-Звонимира');
    }
    public function testSplDetect642()
    {
        $this->assertEquals('N-Зірка', trim($this->object->getFullNameFormat('Зірка')).'-Зірка');
    }
    public function testSplDetect643()
    {
        $this->assertEquals('N-Злата', trim($this->object->getFullNameFormat('Злата')).'-Злата');
    }
    public function testSplDetect644()
    {
        $this->assertEquals('N-Златомира', trim($this->object->getFullNameFormat('Златомира')).'-Златомира');
    }
    public function testSplDetect645()
    {
        $this->assertEquals('N-Златоуста', trim($this->object->getFullNameFormat('Златоуста')).'-Златоуста');
    }
    public function testSplDetect646()
    {
        $this->assertEquals('N-Золотодана', trim($this->object->getFullNameFormat('Золотодана')).'-Золотодана');
    }
    public function testSplDetect647()
    {
        $this->assertEquals('N-Зорегляда', trim($this->object->getFullNameFormat('Зорегляда')).'-Зорегляда');
    }
    public function testSplDetect648()
    {
        $this->assertEquals('N-Зореслава', trim($this->object->getFullNameFormat('Зореслава')).'-Зореслава');
    }
    public function testSplDetect649()
    {
        $this->assertEquals('N-Зорина', trim($this->object->getFullNameFormat('Зорина')).'-Зорина');
    }
    public function testSplDetect650()
    {
        $this->assertEquals('N-Зоря', trim($this->object->getFullNameFormat('Зоря')).'-Зоря');
    }
    public function testSplDetect651()
    {
        $this->assertEquals('N-Зоряна', trim($this->object->getFullNameFormat('Зоряна')).'-Зоряна');
    }
    public function testSplDetect652()
    {
        $this->assertEquals('N-Казка', trim($this->object->getFullNameFormat('Казка')).'-Казка');
    }
    public function testSplDetect653()
    {
        $this->assertEquals('N-Калина', trim($this->object->getFullNameFormat('Калина')).'-Калина');
    }
    public function testSplDetect654()
    {
        $this->assertEquals('N-Квітка', trim($this->object->getFullNameFormat('Квітка')).'-Квітка');
    }
    public function testSplDetect655()
    {
        $this->assertEquals('N-Колодара', trim($this->object->getFullNameFormat('Колодара')).'-Колодара');
    }
    public function testSplDetect656()
    {
        $this->assertEquals('N-Красава', trim($this->object->getFullNameFormat('Красава')).'-Красава');
    }
    public function testSplDetect657()
    {
        $this->assertEquals('N-Красимира', trim($this->object->getFullNameFormat('Красимира')).'-Красимира');
    }
    public function testSplDetect658()
    {
        $this->assertEquals('N-Красновида', trim($this->object->getFullNameFormat('Красновида')).'-Красновида');
    }
    public function testSplDetect659()
    {
        $this->assertEquals('N-Краснолика', trim($this->object->getFullNameFormat('Краснолика')).'-Краснолика');
    }
    public function testSplDetect660()
    {
        $this->assertEquals('N-Красуня', trim($this->object->getFullNameFormat('Красуня')).'-Красуня');
    }
    public function testSplDetect661()
    {
        $this->assertEquals('N-Купава', trim($this->object->getFullNameFormat('Купава')).'-Купава');
    }
    public function testSplDetect662()
    {
        $this->assertEquals('N-Лада', trim($this->object->getFullNameFormat('Лада')).'-Лада');
    }
    public function testSplDetect663()
    {
        $this->assertEquals('N-Ладислава', trim($this->object->getFullNameFormat('Ладислава')).'-Ладислава');
    }
    public function testSplDetect664()
    {
        $this->assertEquals('N-Ладомила', trim($this->object->getFullNameFormat('Ладомила')).'-Ладомила');
    }
    public function testSplDetect665()
    {
        $this->assertEquals('N-Ладомира', trim($this->object->getFullNameFormat('Ладомира')).'-Ладомира');
    }
    public function testSplDetect666()
    {
        $this->assertEquals('N-Левина', trim($this->object->getFullNameFormat('Левина')).'-Левина');
    }
    public function testSplDetect667()
    {
        $this->assertEquals('N-Лель', trim($this->object->getFullNameFormat('Лель')).'-Лель');
    }
    public function testSplDetect668()
    {
        $this->assertEquals('N-Леля', trim($this->object->getFullNameFormat('Леля')).'-Леля');
    }
    public function testSplDetect669()
    {
        $this->assertEquals('N-Леся', trim($this->object->getFullNameFormat('Леся')).'-Леся');
    }
    public function testSplDetect670()
    {
        $this->assertEquals('N-Либідь', trim($this->object->getFullNameFormat('Либідь')).'-Либідь');
    }
    public function testSplDetect671()
    {
        $this->assertEquals('N-Лілея', trim($this->object->getFullNameFormat('Лілея')).'-Лілея');
    }
    public function testSplDetect672()
    {
        $this->assertEquals('N-Лоліта', trim($this->object->getFullNameFormat('Лоліта')).'-Лоліта');
    }
    public function testSplDetect673()
    {
        $this->assertEquals('N-Любава', trim($this->object->getFullNameFormat('Любава')).'-Любава');
    }
    public function testSplDetect674()
    {
        $this->assertEquals('N-Любаня', trim($this->object->getFullNameFormat('Любаня')).'-Любаня');
    }
    public function testSplDetect675()
    {
        $this->assertEquals('N-Любислава', trim($this->object->getFullNameFormat('Любислава')).'-Любислава');
    }
    public function testSplDetect676()
    {
        $this->assertEquals('N-Любов', trim($this->object->getFullNameFormat('Любов')).'-Любов');
    }
    public function testSplDetect677()
    {
        $this->assertEquals('N-Любомила', trim($this->object->getFullNameFormat('Любомила')).'-Любомила');
    }
    public function testSplDetect678()
    {
        $this->assertEquals('N-Любомира', trim($this->object->getFullNameFormat('Любомира')).'-Любомира');
    }
    public function testSplDetect679()
    {
        $this->assertEquals('N-Люборада', trim($this->object->getFullNameFormat('Люборада')).'-Люборада');
    }
    public function testSplDetect680()
    {
        $this->assertEquals('N-Людмила', trim($this->object->getFullNameFormat('Людмила')).'-Людмила');
    }
    public function testSplDetect681()
    {
        $this->assertEquals('N-Людомила', trim($this->object->getFullNameFormat('Людомила')).'-Людомила');
    }
    public function testSplDetect682()
    {
        $this->assertEquals('N-Любослава', trim($this->object->getFullNameFormat('Любослава')).'-Любослава');
    }
    public function testSplDetect683()
    {
        $this->assertEquals('N-Льоля', trim($this->object->getFullNameFormat('Льоля')).'-Льоля');
    }
    public function testSplDetect684()
    {
        $this->assertEquals('N-Мавка', trim($this->object->getFullNameFormat('Мавка')).'-Мавка');
    }
    public function testSplDetect685()
    {
        $this->assertEquals('N-Магадара', trim($this->object->getFullNameFormat('Магадара')).'-Магадара');
    }
    public function testSplDetect686()
    {
        $this->assertEquals('N-Маїна', trim($this->object->getFullNameFormat('Маїна')).'-Маїна');
    }
    public function testSplDetect687()
    {
        $this->assertEquals('N-Маківка', trim($this->object->getFullNameFormat('Маківка')).'-Маківка');
    }
    public function testSplDetect688()
    {
        $this->assertEquals('N-Малуня', trim($this->object->getFullNameFormat('Малуня')).'-Малуня');
    }
    public function testSplDetect689()
    {
        $this->assertEquals('N-Малуша', trim($this->object->getFullNameFormat('Малуша')).'-Малуша');
    }
    public function testSplDetect690()
    {
        $this->assertEquals('N-Мальва', trim($this->object->getFullNameFormat('Мальва')).'-Мальва');
    }
    public function testSplDetect691()
    {
        $this->assertEquals('N-Марута', trim($this->object->getFullNameFormat('Марута')).'-Марута');
    }
    public function testSplDetect692()
    {
        $this->assertEquals('N-Мая', trim($this->object->getFullNameFormat('Мая')).'-Мая');
    }
    public function testSplDetect693()
    {
        $this->assertEquals('N-Медорада', trim($this->object->getFullNameFormat('Медорада')).'-Медорада');
    }
    public function testSplDetect694()
    {
        $this->assertEquals('N-Мечислава', trim($this->object->getFullNameFormat('Мечислава')).'-Мечислава');
    }
    public function testSplDetect695()
    {
        $this->assertEquals('N-Милана', trim($this->object->getFullNameFormat('Милана')).'-Милана');
    }
    public function testSplDetect696()
    {
        $this->assertEquals('N-Милована', trim($this->object->getFullNameFormat('Милована')).'-Милована');
    }
    public function testSplDetect697()
    {
        $this->assertEquals('N-Миловида', trim($this->object->getFullNameFormat('Миловида')).'-Миловида');
    }
    public function testSplDetect698()
    {
        $this->assertEquals('N-Милодара', trim($this->object->getFullNameFormat('Милодара')).'-Милодара');
    }
    public function testSplDetect699()
    {
        $this->assertEquals('N-Милослава', trim($this->object->getFullNameFormat('Милослава')).'-Милослава');
    }
    public function testSplDetect700()
    {
        $this->assertEquals('N-Мирана', trim($this->object->getFullNameFormat('Мирана')).'-Мирана');
    }
    public function testSplDetect701()
    {
        $this->assertEquals('N-Миробога', trim($this->object->getFullNameFormat('Миробога')).'-Миробога');
    }
    public function testSplDetect702()
    {
        $this->assertEquals('N-Миролюба', trim($this->object->getFullNameFormat('Миролюба')).'-Миролюба');
    }
    public function testSplDetect703()
    {
        $this->assertEquals('N-Мирослава', trim($this->object->getFullNameFormat('Мирослава')).'-Мирослава');
    }
    public function testSplDetect704()
    {
        $this->assertEquals('N-Млада', trim($this->object->getFullNameFormat('Млада')).'-Млада');
    }
    public function testSplDetect705()
    {
        $this->assertEquals('N-Мокрина', trim($this->object->getFullNameFormat('Мокрина')).'-Мокрина');
    }
    public function testSplDetect706()
    {
        $this->assertEquals('N-Мстислава', trim($this->object->getFullNameFormat('Мстислава')).'-Мстислава');
    }
    public function testSplDetect707()
    {
        $this->assertEquals('N-Мудролюба', trim($this->object->getFullNameFormat('Мудролюба')).'-Мудролюба');
    }
    public function testSplDetect708()
    {
        $this->assertEquals('N-Надія', trim($this->object->getFullNameFormat('Надія')).'-Надія');
    }
    public function testSplDetect709()
    {
        $this->assertEquals('N-Найда', trim($this->object->getFullNameFormat('Найда')).'-Найда');
    }
    public function testSplDetect710()
    {
        $this->assertEquals('N-Найдена', trim($this->object->getFullNameFormat('Найдена')).'-Найдена');
    }
    public function testSplDetect711()
    {
        $this->assertEquals('N-Наслава', trim($this->object->getFullNameFormat('Наслава')).'-Наслава');
    }
    public function testSplDetect712()
    {
        $this->assertEquals('N-Немира', trim($this->object->getFullNameFormat('Немира')).'-Немира');
    }
    public function testSplDetect713()
    {
        $this->assertEquals('N-Нігослава', trim($this->object->getFullNameFormat('Нігослава')).'-Нігослава');
    }
    public function testSplDetect714()
    {
        $this->assertEquals('N-Незабудка', trim($this->object->getFullNameFormat('Незабудка')).'-Незабудка');
    }
    public function testSplDetect715()
    {
        $this->assertEquals('N-Огняна', trim($this->object->getFullNameFormat('Огняна')).'-Огняна');
    }
    public function testSplDetect716()
    {
        $this->assertEquals('N-Оримира', trim($this->object->getFullNameFormat('Оримира')).'-Оримира');
    }
    public function testSplDetect717()
    {
        $this->assertEquals('N-Орина', trim($this->object->getFullNameFormat('Орина')).'-Орина');
    }
    public function testSplDetect718()
    {
        $this->assertEquals('N-Орислава', trim($this->object->getFullNameFormat('Орислава')).'-Орислава');
    }
    public function testSplDetect719()
    {
        $this->assertEquals('N-Орися', trim($this->object->getFullNameFormat('Орися')).'-Орися');
    }
    public function testSplDetect720()
    {
        $this->assertEquals('N-Оріяна', trim($this->object->getFullNameFormat('Оріяна')).'-Оріяна');
    }
    public function testSplDetect721()
    {
        $this->assertEquals('N-Орогоста', trim($this->object->getFullNameFormat('Орогоста')).'-Орогоста');
    }
    public function testSplDetect722()
    {
        $this->assertEquals('N-Острозора', trim($this->object->getFullNameFormat('Острозора')).'-Острозора');
    }
    public function testSplDetect723()
    {
        $this->assertEquals('N-Остромира', trim($this->object->getFullNameFormat('Остромира')).'-Остромира');
    }
    public function testSplDetect724()
    {
        $this->assertEquals('N-Осмомисла', trim($this->object->getFullNameFormat('Осмомисла')).'-Осмомисла');
    }
    public function testSplDetect725()
    {
        $this->assertEquals('N-Остромова', trim($this->object->getFullNameFormat('Остромова')).'-Остромова');
    }
    public function testSplDetect726()
    {
        $this->assertEquals('N-Пава', trim($this->object->getFullNameFormat('Пава')).'-Пава');
    }
    public function testSplDetect727()
    {
        $this->assertEquals('N-Палажка', trim($this->object->getFullNameFormat('Палажка')).'-Палажка');
    }
    public function testSplDetect728()
    {
        $this->assertEquals('N-Палазга', trim($this->object->getFullNameFormat('Палазга')).'-Палазга');
    }
    public function testSplDetect729()
    {
        $this->assertEquals('N-Перелюба', trim($this->object->getFullNameFormat('Перелюба')).'-Перелюба');
    }
    public function testSplDetect730()
    {
        $this->assertEquals('N-Перемила', trim($this->object->getFullNameFormat('Перемила')).'-Перемила');
    }
    public function testSplDetect731()
    {
        $this->assertEquals('N-Перемисла', trim($this->object->getFullNameFormat('Перемисла')).'-Перемисла');
    }
    public function testSplDetect732()
    {
        $this->assertEquals('N-Півонія', trim($this->object->getFullNameFormat('Півонія')).'-Півонія');
    }
    public function testSplDetect733()
    {
        $this->assertEquals('N-Позвізда', trim($this->object->getFullNameFormat('Позвізда')).'-Позвізда');
    }
    public function testSplDetect734()
    {
        $this->assertEquals('N-Полеза', trim($this->object->getFullNameFormat('Полеза')).'-Полеза');
    }
    public function testSplDetect735()
    {
        $this->assertEquals('N-Поляна', trim($this->object->getFullNameFormat('Поляна')).'-Поляна');
    }
    public function testSplDetect736()
    {
        $this->assertEquals('N-Потішана', trim($this->object->getFullNameFormat('Потішана')).'-Потішана');
    }
    public function testSplDetect737()
    {
        $this->assertEquals('N-Предслава', trim($this->object->getFullNameFormat('Предслава')).'-Предслава');
    }
    public function testSplDetect738()
    {
        $this->assertEquals('N-Рада', trim($this->object->getFullNameFormat('Рада')).'-Рада');
    }
    public function testSplDetect739()
    {
        $this->assertEquals('N-Радана', trim($this->object->getFullNameFormat('Радана')).'-Радана');
    }
    public function testSplDetect740()
    {
        $this->assertEquals('N-Радимира', trim($this->object->getFullNameFormat('Радимира')).'-Радимира');
    }
    public function testSplDetect741()
    {
        $this->assertEquals('N-Радогоста', trim($this->object->getFullNameFormat('Радогоста')).'-Радогоста');
    }
    public function testSplDetect742()
    {
        $this->assertEquals('N-Радомира', trim($this->object->getFullNameFormat('Радомира')).'-Радомира');
    }
    public function testSplDetect743()
    {
        $this->assertEquals('N-Радослава', trim($this->object->getFullNameFormat('Радослава')).'-Радослава');
    }
    public function testSplDetect744()
    {
        $this->assertEquals('N-Рідна', trim($this->object->getFullNameFormat('Рідна')).'-Рідна');
    }
    public function testSplDetect745()
    {
        $this->assertEquals('N-Рогволода', trim($this->object->getFullNameFormat('Рогволода')).'-Рогволода');
    }
    public function testSplDetect746()
    {
        $this->assertEquals('N-Рогніда', trim($this->object->getFullNameFormat('Рогніда')).'-Рогніда');
    }
    public function testSplDetect747()
    {
        $this->assertEquals('N-Родослава', trim($this->object->getFullNameFormat('Родослава')).'-Родослава');
    }
    public function testSplDetect748()
    {
        $this->assertEquals('N-Рожана', trim($this->object->getFullNameFormat('Рожана')).'-Рожана');
    }
    public function testSplDetect749()
    {
        $this->assertEquals('N-Роксолана', trim($this->object->getFullNameFormat('Роксолана')).'-Роксолана');
    }
    public function testSplDetect750()
    {
        $this->assertEquals('N-Ромашка', trim($this->object->getFullNameFormat('Ромашка')).'-Ромашка');
    }
    public function testSplDetect751()
    {
        $this->assertEquals('N-Росава', trim($this->object->getFullNameFormat('Росава')).'-Росава');
    }
    public function testSplDetect752()
    {
        $this->assertEquals('N-Росина', trim($this->object->getFullNameFormat('Росина')).'-Росина');
    }
    public function testSplDetect753()
    {
        $this->assertEquals('N-Ростислава', trim($this->object->getFullNameFormat('Ростислава')).'-Ростислава');
    }
    public function testSplDetect754()
    {
        $this->assertEquals('N-Ростичара', trim($this->object->getFullNameFormat('Ростичара')).'-Ростичара');
    }
    public function testSplDetect755()
    {
        $this->assertEquals('N-Ростуня', trim($this->object->getFullNameFormat('Ростуня')).'-Ростуня');
    }
    public function testSplDetect756()
    {
        $this->assertEquals('N-Рудана', trim($this->object->getFullNameFormat('Рудана')).'-Рудана');
    }
    public function testSplDetect757()
    {
        $this->assertEquals('N-Ружа', trim($this->object->getFullNameFormat('Ружа')).'-Ружа');
    }
    public function testSplDetect758()
    {
        $this->assertEquals('N-Русана', trim($this->object->getFullNameFormat('Русана')).'-Русана');
    }
    public function testSplDetect759()
    {
        $this->assertEquals('N-Русудана', trim($this->object->getFullNameFormat('Русудана')).'-Русудана');
    }
    public function testSplDetect760()
    {
        $this->assertEquals('N-Русява', trim($this->object->getFullNameFormat('Русява')).'-Русява');
    }
    public function testSplDetect761()
    {
        $this->assertEquals('N-Русявка', trim($this->object->getFullNameFormat('Русявка')).'-Русявка');
    }
    public function testSplDetect762()
    {
        $this->assertEquals('N-Рута', trim($this->object->getFullNameFormat('Рута')).'-Рута');
    }
    public function testSplDetect763()
    {
        $this->assertEquals('N-Світана', trim($this->object->getFullNameFormat('Світана')).'-Світана');
    }
    public function testSplDetect764()
    {
        $this->assertEquals('N-Світлана', trim($this->object->getFullNameFormat('Світлана')).'-Світлана');
    }
    public function testSplDetect765()
    {
        $this->assertEquals('N-Світовида', trim($this->object->getFullNameFormat('Світовида')).'-Світовида');
    }
    public function testSplDetect766()
    {
        $this->assertEquals('N-Світогора', trim($this->object->getFullNameFormat('Світогора')).'-Світогора');
    }
    public function testSplDetect767()
    {
        $this->assertEquals('N-Світодара', trim($this->object->getFullNameFormat('Світодара')).'-Світодара');
    }
    public function testSplDetect768()
    {
        $this->assertEquals('N-Світозара', trim($this->object->getFullNameFormat('Світозара')).'-Світозара');
    }
    public function testSplDetect769()
    {
        $this->assertEquals('N-Світолика', trim($this->object->getFullNameFormat('Світолика')).'-Світолика');
    }
    public function testSplDetect770()
    {
        $this->assertEquals('N-Світолюба', trim($this->object->getFullNameFormat('Світолюба')).'-Світолюба');
    }
    public function testSplDetect771()
    {
        $this->assertEquals('N-Світослава', trim($this->object->getFullNameFormat('Світослава')).'-Світослава');
    }
    public function testSplDetect772()
    {
        $this->assertEquals('N-Світояра', trim($this->object->getFullNameFormat('Світояра')).'-Світояра');
    }
    public function testSplDetect773()
    {
        $this->assertEquals('N-Свободана', trim($this->object->getFullNameFormat('Свободана')).'-Свободана');
    }
    public function testSplDetect774()
    {
        $this->assertEquals('N-Святогора', trim($this->object->getFullNameFormat('Святогора')).'-Святогора');
    }
    public function testSplDetect775()
    {
        $this->assertEquals('N-Святолюба', trim($this->object->getFullNameFormat('Святолюба')).'-Святолюба');
    }
    public function testSplDetect776()
    {
        $this->assertEquals('N-Святослава', trim($this->object->getFullNameFormat('Святослава')).'-Святослава');
    }
    public function testSplDetect777()
    {
        $this->assertEquals('N-Силата', trim($this->object->getFullNameFormat('Силата')).'-Силата');
    }
    public function testSplDetect778()
    {
        $this->assertEquals('N-Силолюба', trim($this->object->getFullNameFormat('Силолюба')).'-Силолюба');
    }
    public function testSplDetect779()
    {
        $this->assertEquals('N-Силослава', trim($this->object->getFullNameFormat('Силослава')).'-Силослава');
    }
    public function testSplDetect780()
    {
        $this->assertEquals('N-Синезора', trim($this->object->getFullNameFormat('Синезора')).'-Синезора');
    }
    public function testSplDetect781()
    {
        $this->assertEquals('N-Синьоока', trim($this->object->getFullNameFormat('Синьоока')).'-Синьоока');
    }
    public function testSplDetect782()
    {
        $this->assertEquals('N-Сіверина', trim($this->object->getFullNameFormat('Сіверина')).'-Сіверина');
    }
    public function testSplDetect783()
    {
        $this->assertEquals('N-Слава', trim($this->object->getFullNameFormat('Слава')).'-Слава');
    }
    public function testSplDetect784()
    {
        $this->assertEquals('N-Славина', trim($this->object->getFullNameFormat('Славина')).'-Славина');
    }
    public function testSplDetect785()
    {
        $this->assertEquals('N-Славолюба', trim($this->object->getFullNameFormat('Славолюба')).'-Славолюба');
    }
    public function testSplDetect786()
    {
        $this->assertEquals('N-Славомила', trim($this->object->getFullNameFormat('Славомила')).'-Славомила');
    }
    public function testSplDetect787()
    {
        $this->assertEquals('N-Сміяна', trim($this->object->getFullNameFormat('Сміяна')).'-Сміяна');
    }
    public function testSplDetect788()
    {
        $this->assertEquals('N-Сніжана', trim($this->object->getFullNameFormat('Сніжана')).'-Сніжана');
    }
    public function testSplDetect789()
    {
        $this->assertEquals('N-Сніжинка', trim($this->object->getFullNameFormat('Сніжинка')).'-Сніжинка');
    }
    public function testSplDetect790()
    {
        $this->assertEquals('N-Собіслава', trim($this->object->getFullNameFormat('Собіслава')).'-Собіслава');
    }
    public function testSplDetect791()
    {
        $this->assertEquals('N-Соловія', trim($this->object->getFullNameFormat('Соловія')).'-Соловія');
    }
    public function testSplDetect792()
    {
        $this->assertEquals('N-Сологуба', trim($this->object->getFullNameFormat('Сологуба')).'-Сологуба');
    }
    public function testSplDetect793()
    {
        $this->assertEquals('N-Сонцевида', trim($this->object->getFullNameFormat('Сонцевида')).'-Сонцевида');
    }
    public function testSplDetect794()
    {
        $this->assertEquals('N-Сонцедара', trim($this->object->getFullNameFormat('Сонцедара')).'-Сонцедара');
    }
    public function testSplDetect795()
    {
        $this->assertEquals('N-Сонцелика', trim($this->object->getFullNameFormat('Сонцелика')).'-Сонцелика');
    }
    public function testSplDetect796()
    {
        $this->assertEquals('N-Сонцеслава', trim($this->object->getFullNameFormat('Сонцеслава')).'-Сонцеслава');
    }
    public function testSplDetect797()
    {
        $this->assertEquals('N-Ссанимира', trim($this->object->getFullNameFormat('Ссанимира')).'-Ссанимира');
    }
    public function testSplDetect798()
    {
        $this->assertEquals('N-Станислава', trim($this->object->getFullNameFormat('Станислава')).'-Станислава');
    }
    public function testSplDetect799()
    {
        $this->assertEquals('N-Судимира', trim($this->object->getFullNameFormat('Судимира')).'-Судимира');
    }
    public function testSplDetect800()
    {
        $this->assertEquals('N-Судислава', trim($this->object->getFullNameFormat('Судислава')).'-Судислава');
    }
    public function testSplDetect801()
    {
        $this->assertEquals('N-Татолюба', trim($this->object->getFullNameFormat('Татолюба')).'-Татолюба');
    }
    public function testSplDetect802()
    {
        $this->assertEquals('N-Твердислава', trim($this->object->getFullNameFormat('Твердислава')).'-Твердислава');
    }
    public function testSplDetect803()
    {
        $this->assertEquals('N-Твердогоста', trim($this->object->getFullNameFormat('Твердогоста')).'-Твердогоста');
    }
    public function testSplDetect804()
    {
        $this->assertEquals('N-Творимира', trim($this->object->getFullNameFormat('Творимира')).'-Творимира');
    }
    public function testSplDetect805()
    {
        $this->assertEquals('N-Творислава', trim($this->object->getFullNameFormat('Творислава')).'-Творислава');
    }
    public function testSplDetect806()
    {
        $this->assertEquals('N-Толигніва', trim($this->object->getFullNameFormat('Толигніва')).'-Толигніва');
    }
    public function testSplDetect807()
    {
        $this->assertEquals('N-Тонкостана', trim($this->object->getFullNameFormat('Тонкостана')).'-Тонкостана');
    }
    public function testSplDetect808()
    {
        $this->assertEquals('N-Трояна', trim($this->object->getFullNameFormat('Трояна')).'-Трояна');
    }
    public function testSplDetect809()
    {
        $this->assertEquals('N-Хвала', trim($this->object->getFullNameFormat('Хвала')).'-Хвала');
    }
    public function testSplDetect810()
    {
        $this->assertEquals('N-Хвалибого', trim($this->object->getFullNameFormat('Хвалибого')).'-Хвалибого');
    }
    public function testSplDetect811()
    {
        $this->assertEquals('N-Хвалимира', trim($this->object->getFullNameFormat('Хвалимира')).'-Хвалимира');
    }
    public function testSplDetect812()
    {
        $this->assertEquals('N-Хвалина', trim($this->object->getFullNameFormat('Хвалина')).'-Хвалина');
    }
    public function testSplDetect813()
    {
        $this->assertEquals('N-Хорошка', trim($this->object->getFullNameFormat('Хорошка')).'-Хорошка');
    }
    public function testSplDetect814()
    {
        $this->assertEquals('N-Хорошуня', trim($this->object->getFullNameFormat('Хорошуня')).'-Хорошуня');
    }
    public function testSplDetect815()
    {
        $this->assertEquals('N-Хотимра', trim($this->object->getFullNameFormat('Хотимра')).'-Хотимра');
    }
    public function testSplDetect816()
    {
        $this->assertEquals('N-Хотяна', trim($this->object->getFullNameFormat('Хотяна')).'-Хотяна');
    }
    public function testSplDetect817()
    {
        $this->assertEquals('N-Хранимира', trim($this->object->getFullNameFormat('Хранимира')).'-Хранимира');
    }
    public function testSplDetect818()
    {
        $this->assertEquals('N-Худана', trim($this->object->getFullNameFormat('Худана')).'-Худана');
    }
    public function testSplDetect819()
    {
        $this->assertEquals('N-Цвітана', trim($this->object->getFullNameFormat('Цвітана')).'-Цвітана');
    }
    public function testSplDetect820()
    {
        $this->assertEquals('N-Чайка', trim($this->object->getFullNameFormat('Чайка')).'-Чайка');
    }
    public function testSplDetect821()
    {
        $this->assertEquals('N-Чарівна', trim($this->object->getFullNameFormat('Чарівна')).'-Чарівна');
    }
    public function testSplDetect822()
    {
        $this->assertEquals('N-Чарівниця', trim($this->object->getFullNameFormat('Чарівниця')).'-Чарівниця');
    }
    public function testSplDetect823()
    {
        $this->assertEquals('N-Чаруна', trim($this->object->getFullNameFormat('Чаруна')).'-Чаруна');
    }
    public function testSplDetect824()
    {
        $this->assertEquals('N-Чеслава', trim($this->object->getFullNameFormat('Чеслава')).'-Чеслава');
    }
    public function testSplDetect825()
    {
        $this->assertEquals('N-Ява', trim($this->object->getFullNameFormat('Ява')).'-Ява');
    }
    public function testSplDetect826()
    {
        $this->assertEquals('N-Яворина', trim($this->object->getFullNameFormat('Яворина')).'-Яворина');
    }
    public function testSplDetect827()
    {
        $this->assertEquals('N-Ялина', trim($this->object->getFullNameFormat('Ялина')).'-Ялина');
    }
    public function testSplDetect828()
    {
        $this->assertEquals('N-Ярина', trim($this->object->getFullNameFormat('Ярина')).'-Ярина');
    }
    public function testSplDetect829()
    {
        $this->assertEquals('N-Яромила', trim($this->object->getFullNameFormat('Яромила')).'-Яромила');
    }
    public function testSplDetect830()
    {
        $this->assertEquals('N-Яромира', trim($this->object->getFullNameFormat('Яромира')).'-Яромира');
    }
    public function testSplDetect831()
    {
        $this->assertEquals('N-Ярослава', trim($this->object->getFullNameFormat('Ярослава')).'-Ярослава');
    }
    public function testSplDetect832()
    {
        $this->assertEquals('N-Ясна', trim($this->object->getFullNameFormat('Ясна')).'-Ясна');
    }
    public function testSplDetect833()
    {
        $this->assertEquals('N-Ясновида', trim($this->object->getFullNameFormat('Ясновида')).'-Ясновида');
    }
    public function testSplDetect834()
    {
        $this->assertEquals('N-Ясногора', trim($this->object->getFullNameFormat('Ясногора')).'-Ясногора');
    }
    public function testSplDetect835()
    {
        $this->assertEquals('N-Яснолика', trim($this->object->getFullNameFormat('Яснолика')).'-Яснолика');
    }
    public function testSplDetect836()
    {
        $this->assertEquals('N-Яснослава', trim($this->object->getFullNameFormat('Яснослава')).'-Яснослава');
    }

}