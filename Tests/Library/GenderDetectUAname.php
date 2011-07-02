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


    public function testGenDetect0()
    {
        $this->object->setFirstName('Аарон');
        $this->assertEquals('1-Аарон', $this->object->genderAutoDetect().'-Аарон');
    }
    public function testGenDetect1()
    {
        $this->object->setFirstName('Абакум');
        $this->assertEquals('1-Абакум', $this->object->genderAutoDetect().'-Абакум');
    }
    public function testGenDetect2()
    {
        $this->object->setFirstName('Абрам');
        $this->assertEquals('1-Абрам', $this->object->genderAutoDetect().'-Абрам');
    }
    public function testGenDetect3()
    {
        $this->object->setFirstName('Августин');
        $this->assertEquals('1-Августин', $this->object->genderAutoDetect().'-Августин');
    }
    public function testGenDetect4()
    {
        $this->object->setFirstName('Авесалом');
        $this->assertEquals('1-Авесалом', $this->object->genderAutoDetect().'-Авесалом');
    }
    public function testGenDetect5()
    {
        $this->object->setFirstName('Авксентій');
        $this->assertEquals('1-Авксентій', $this->object->genderAutoDetect().'-Авксентій');
    }
    public function testGenDetect6()
    {
        $this->object->setFirstName('Аврелій');
        $this->assertEquals('1-Аврелій', $this->object->genderAutoDetect().'-Аврелій');
    }
    public function testGenDetect7()
    {
        $this->object->setFirstName('Автоном');
        $this->assertEquals('1-Автоном', $this->object->genderAutoDetect().'-Автоном');
    }
    public function testGenDetect8()
    {
        $this->object->setFirstName('Адам');
        $this->assertEquals('1-Адам', $this->object->genderAutoDetect().'-Адам');
    }
    public function testGenDetect9()
    {
        $this->object->setFirstName('Адріян');
        $this->assertEquals('1-Адріян', $this->object->genderAutoDetect().'-Адріян');
    }
    public function testGenDetect10()
    {
        $this->object->setFirstName('Адріан');
        $this->assertEquals('1-Адріан', $this->object->genderAutoDetect().'-Адріан');
    }
    public function testGenDetect11()
    {
        $this->object->setFirstName('Азар');
        $this->assertEquals('1-Азар', $this->object->genderAutoDetect().'-Азар');
    }
    public function testGenDetect12()
    {
        $this->object->setFirstName('Алевтин');
        $this->assertEquals('1-Алевтин', $this->object->genderAutoDetect().'-Алевтин');
    }
    public function testGenDetect13()
    {
        $this->object->setFirstName('Альберт');
        $this->assertEquals('1-Альберт', $this->object->genderAutoDetect().'-Альберт');
    }
    public function testGenDetect14()
    {
        $this->object->setFirstName('Амвросій');
        $this->assertEquals('1-Амвросій', $this->object->genderAutoDetect().'-Амвросій');
    }
    public function testGenDetect15()
    {
        $this->object->setFirstName('Амнон');
        $this->assertEquals('1-Амнон', $this->object->genderAutoDetect().'-Амнон');
    }
    public function testGenDetect16()
    {
        $this->object->setFirstName('Амос');
        $this->assertEquals('1-Амос', $this->object->genderAutoDetect().'-Амос');
    }
    public function testGenDetect17()
    {
        $this->object->setFirstName('Анастас');
        $this->assertEquals('1-Анастас', $this->object->genderAutoDetect().'-Анастас');
    }
    public function testGenDetect18()
    {
        $this->object->setFirstName('Анастасій');
        $this->assertEquals('1-Анастасій', $this->object->genderAutoDetect().'-Анастасій');
    }
    public function testGenDetect19()
    {
        $this->object->setFirstName('Андрій');
        $this->assertEquals('1-Андрій', $this->object->genderAutoDetect().'-Андрій');
    }
    public function testGenDetect20()
    {
        $this->object->setFirstName('Антоній');
        $this->assertEquals('1-Антоній', $this->object->genderAutoDetect().'-Антоній');
    }
    public function testGenDetect21()
    {
        $this->object->setFirstName('Антон');
        $this->assertEquals('1-Антон', $this->object->genderAutoDetect().'-Антон');
    }
    public function testGenDetect22()
    {
        $this->object->setFirstName('Анісій');
        $this->assertEquals('1-Анісій', $this->object->genderAutoDetect().'-Анісій');
    }
    public function testGenDetect23()
    {
        $this->object->setFirstName('Аркадій');
        $this->assertEquals('1-Аркадій', $this->object->genderAutoDetect().'-Аркадій');
    }
    public function testGenDetect24()
    {
        $this->object->setFirstName('Арсен');
        $this->assertEquals('1-Арсен', $this->object->genderAutoDetect().'-Арсен');
    }
    public function testGenDetect25()
    {
        $this->object->setFirstName('Арсеній');
        $this->assertEquals('1-Арсеній', $this->object->genderAutoDetect().'-Арсеній');
    }
    public function testGenDetect26()
    {
        $this->object->setFirstName('Артем');
        $this->assertEquals('1-Артем', $this->object->genderAutoDetect().'-Артем');
    }
    public function testGenDetect27()
    {
        $this->object->setFirstName('Архип');
        $this->assertEquals('1-Архип', $this->object->genderAutoDetect().'-Архип');
    }
    public function testGenDetect28()
    {
        $this->object->setFirstName('Атанас');
        $this->assertEquals('1-Атанас', $this->object->genderAutoDetect().'-Атанас');
    }
    public function testGenDetect29()
    {
        $this->object->setFirstName('Аскольд');
        $this->assertEquals('1-Аскольд', $this->object->genderAutoDetect().'-Аскольд');
    }
    public function testGenDetect30()
    {
        $this->object->setFirstName('Бажан');
        $this->assertEquals('1-Бажан', $this->object->genderAutoDetect().'-Бажан');
    }
    public function testGenDetect31()
    {
        $this->object->setFirstName('Біловид');
        $this->assertEquals('1-Біловид', $this->object->genderAutoDetect().'-Біловид');
    }
    public function testGenDetect32()
    {
        $this->object->setFirstName('Білогост');
        $this->assertEquals('1-Білогост', $this->object->genderAutoDetect().'-Білогост');
    }
    public function testGenDetect33()
    {
        $this->object->setFirstName('Біломир');
        $this->assertEquals('1-Біломир', $this->object->genderAutoDetect().'-Біломир');
    }
    public function testGenDetect34()
    {
        $this->object->setFirstName('Білослав');
        $this->assertEquals('1-Білослав', $this->object->genderAutoDetect().'-Білослав');
    }
    public function testGenDetect35()
    {
        $this->object->setFirstName('Білотур');
        $this->assertEquals('1-Білотур', $this->object->genderAutoDetect().'-Білотур');
    }
    public function testGenDetect36()
    {
        $this->object->setFirstName('Білян');
        $this->assertEquals('1-Білян', $this->object->genderAutoDetect().'-Білян');
    }
    public function testGenDetect37()
    {
        $this->object->setFirstName('Благовид');
        $this->assertEquals('1-Благовид', $this->object->genderAutoDetect().'-Благовид');
    }
    public function testGenDetect38()
    {
        $this->object->setFirstName('Благовіст');
        $this->assertEquals('1-Благовіст', $this->object->genderAutoDetect().'-Благовіст');
    }
    public function testGenDetect39()
    {
        $this->object->setFirstName('Благодар');
        $this->assertEquals('1-Благодар', $this->object->genderAutoDetect().'-Благодар');
    }
    public function testGenDetect40()
    {
        $this->object->setFirstName('Благодат');
        $this->assertEquals('1-Благодат', $this->object->genderAutoDetect().'-Благодат');
    }
    public function testGenDetect41()
    {
        $this->object->setFirstName('Благомир');
        $this->assertEquals('1-Благомир', $this->object->genderAutoDetect().'-Благомир');
    }
    public function testGenDetect42()
    {
        $this->object->setFirstName('Благослав');
        $this->assertEquals('1-Благослав', $this->object->genderAutoDetect().'-Благослав');
    }
    public function testGenDetect43()
    {
        $this->object->setFirstName('Богдан');
        $this->assertEquals('1-Богдан', $this->object->genderAutoDetect().'-Богдан');
    }
    public function testGenDetect44()
    {
        $this->object->setFirstName('Боговір');
        $this->assertEquals('1-Боговір', $this->object->genderAutoDetect().'-Боговір');
    }
    public function testGenDetect45()
    {
        $this->object->setFirstName('Боговіст');
        $this->assertEquals('1-Боговіст', $this->object->genderAutoDetect().'-Боговіст');
    }
    public function testGenDetect46()
    {
        $this->object->setFirstName('Богодар');
        $this->assertEquals('1-Богодар', $this->object->genderAutoDetect().'-Богодар');
    }
    public function testGenDetect47()
    {
        $this->object->setFirstName('Боголад');
        $this->assertEquals('1-Боголад', $this->object->genderAutoDetect().'-Боголад');
    }
    public function testGenDetect48()
    {
        $this->object->setFirstName('Боголіп');
        $this->assertEquals('1-Боголіп', $this->object->genderAutoDetect().'-Боголіп');
    }
    public function testGenDetect49()
    {
        $this->object->setFirstName('Боголюб');
        $this->assertEquals('1-Боголюб', $this->object->genderAutoDetect().'-Боголюб');
    }
    public function testGenDetect50()
    {
        $this->object->setFirstName('Богород');
        $this->assertEquals('1-Богород', $this->object->genderAutoDetect().'-Богород');
    }
    public function testGenDetect51()
    {
        $this->object->setFirstName('Богосвят');
        $this->assertEquals('1-Богосвят', $this->object->genderAutoDetect().'-Богосвят');
    }
    public function testGenDetect52()
    {
        $this->object->setFirstName('Богумил');
        $this->assertEquals('1-Богумил', $this->object->genderAutoDetect().'-Богумил');
    }
    public function testGenDetect53()
    {
        $this->object->setFirstName('Богумир');
        $this->assertEquals('1-Богумир', $this->object->genderAutoDetect().'-Богумир');
    }
    public function testGenDetect54()
    {
        $this->object->setFirstName('Богуслав');
        $this->assertEquals('1-Богуслав', $this->object->genderAutoDetect().'-Богуслав');
    }
    public function testGenDetect55()
    {
        $this->object->setFirstName('Бож');
        $this->assertEquals('1-Бож', $this->object->genderAutoDetect().'-Бож');
    }
    public function testGenDetect56()
    {
        $this->object->setFirstName('Божан');
        $this->assertEquals('1-Божан', $this->object->genderAutoDetect().'-Божан');
    }
    public function testGenDetect57()
    {
        $this->object->setFirstName('Божедар');
        $this->assertEquals('1-Божедар', $this->object->genderAutoDetect().'-Божедар');
    }
    public function testGenDetect58()
    {
        $this->object->setFirstName('Божейко');
        $this->assertEquals('1-Божейко', $this->object->genderAutoDetect().'-Божейко');
    }
    public function testGenDetect59()
    {
        $this->object->setFirstName('Божемир');
        $this->assertEquals('1-Божемир', $this->object->genderAutoDetect().'-Божемир');
    }
    public function testGenDetect60()
    {
        $this->object->setFirstName('Божен');
        $this->assertEquals('1-Божен', $this->object->genderAutoDetect().'-Божен');
    }
    public function testGenDetect61()
    {
        $this->object->setFirstName('Божко');
        $this->assertEquals('1-Божко', $this->object->genderAutoDetect().'-Божко');
    }
    public function testGenDetect62()
    {
        $this->object->setFirstName('Болеслав');
        $this->assertEquals('1-Болеслав', $this->object->genderAutoDetect().'-Болеслав');
    }
    public function testGenDetect63()
    {
        $this->object->setFirstName('Боримир');
        $this->assertEquals('1-Боримир', $this->object->genderAutoDetect().'-Боримир');
    }
    public function testGenDetect64()
    {
        $this->object->setFirstName('Боримисл');
        $this->assertEquals('1-Боримисл', $this->object->genderAutoDetect().'-Боримисл');
    }
    public function testGenDetect65()
    {
        $this->object->setFirstName('Борис');
        $this->assertEquals('1-Борис', $this->object->genderAutoDetect().'-Борис');
    }
    public function testGenDetect66()
    {
        $this->object->setFirstName('Борислав');
        $this->assertEquals('1-Борислав', $this->object->genderAutoDetect().'-Борислав');
    }
    public function testGenDetect67()
    {
        $this->object->setFirstName('Боян');
        $this->assertEquals('1-Боян', $this->object->genderAutoDetect().'-Боян');
    }
    public function testGenDetect68()
    {
        $this->object->setFirstName('Братан');
        $this->assertEquals('1-Братан', $this->object->genderAutoDetect().'-Братан');
    }
    public function testGenDetect69()
    {
        $this->object->setFirstName('Бративой');
        $this->assertEquals('1-Бративой', $this->object->genderAutoDetect().'-Бративой');
    }
    public function testGenDetect70()
    {
        $this->object->setFirstName('Братимир');
        $this->assertEquals('1-Братимир', $this->object->genderAutoDetect().'-Братимир');
    }
    public function testGenDetect71()
    {
        $this->object->setFirstName('Братислав');
        $this->assertEquals('1-Братислав', $this->object->genderAutoDetect().'-Братислав');
    }
    public function testGenDetect72()
    {
        $this->object->setFirstName('Братко');
        $this->assertEquals('1-Братко', $this->object->genderAutoDetect().'-Братко');
    }
    public function testGenDetect73()
    {
        $this->object->setFirstName('Братомил');
        $this->assertEquals('1-Братомил', $this->object->genderAutoDetect().'-Братомил');
    }
    public function testGenDetect74()
    {
        $this->object->setFirstName('Братослав');
        $this->assertEquals('1-Братослав', $this->object->genderAutoDetect().'-Братослав');
    }
    public function testGenDetect75()
    {
        $this->object->setFirstName('Брячислав');
        $this->assertEquals('1-Брячислав', $this->object->genderAutoDetect().'-Брячислав');
    }
    public function testGenDetect76()
    {
        $this->object->setFirstName('Боронислав');
        $this->assertEquals('1-Боронислав', $this->object->genderAutoDetect().'-Боронислав');
    }
    public function testGenDetect77()
    {
        $this->object->setFirstName('Будивид');
        $this->assertEquals('1-Будивид', $this->object->genderAutoDetect().'-Будивид');
    }
    public function testGenDetect78()
    {
        $this->object->setFirstName('Будивой');
        $this->assertEquals('1-Будивой', $this->object->genderAutoDetect().'-Будивой');
    }
    public function testGenDetect79()
    {
        $this->object->setFirstName('Будимил');
        $this->assertEquals('1-Будимил', $this->object->genderAutoDetect().'-Будимил');
    }
    public function testGenDetect80()
    {
        $this->object->setFirstName('Будимир');
        $this->assertEquals('1-Будимир', $this->object->genderAutoDetect().'-Будимир');
    }
    public function testGenDetect81()
    {
        $this->object->setFirstName('Будислав');
        $this->assertEquals('1-Будислав', $this->object->genderAutoDetect().'-Будислав');
    }
    public function testGenDetect82()
    {
        $this->object->setFirstName('Буймир');
        $this->assertEquals('1-Буймир', $this->object->genderAutoDetect().'-Буймир');
    }
    public function testGenDetect83()
    {
        $this->object->setFirstName('Буйтур');
        $this->assertEquals('1-Буйтур', $this->object->genderAutoDetect().'-Буйтур');
    }
    public function testGenDetect84()
    {
        $this->object->setFirstName('Буревій');
        $this->assertEquals('1-Буревій', $this->object->genderAutoDetect().'-Буревій');
    }
    public function testGenDetect85()
    {
        $this->object->setFirstName('Буревіст');
        $this->assertEquals('1-Буревіст', $this->object->genderAutoDetect().'-Буревіст');
    }
    public function testGenDetect86()
    {
        $this->object->setFirstName('Василь');
        $this->assertEquals('1-Василь', $this->object->genderAutoDetect().'-Василь');
    }
    public function testGenDetect87()
    {
        $this->object->setFirstName('Ведан');
        $this->assertEquals('1-Ведан', $this->object->genderAutoDetect().'-Ведан');
    }
    public function testGenDetect88()
    {
        $this->object->setFirstName('Велемир');
        $this->assertEquals('1-Велемир', $this->object->genderAutoDetect().'-Велемир');
    }
    public function testGenDetect89()
    {
        $this->object->setFirstName('Велемудр');
        $this->assertEquals('1-Велемудр', $this->object->genderAutoDetect().'-Велемудр');
    }
    public function testGenDetect90()
    {
        $this->object->setFirstName('Велет');
        $this->assertEquals('1-Велет', $this->object->genderAutoDetect().'-Велет');
    }
    public function testGenDetect91()
    {
        $this->object->setFirstName('Величар');
        $this->assertEquals('1-Величар', $this->object->genderAutoDetect().'-Величар');
    }
    public function testGenDetect92()
    {
        $this->object->setFirstName('Величко');
        $this->assertEquals('1-Величко', $this->object->genderAutoDetect().'-Величко');
    }
    public function testGenDetect93()
    {
        $this->object->setFirstName('Вербан');
        $this->assertEquals('1-Вербан', $this->object->genderAutoDetect().'-Вербан');
    }
    public function testGenDetect94()
    {
        $this->object->setFirstName('Вернидуб');
        $this->assertEquals('1-Вернидуб', $this->object->genderAutoDetect().'-Вернидуб');
    }
    public function testGenDetect95()
    {
        $this->object->setFirstName('Вернислав');
        $this->assertEquals('1-Вернислав', $this->object->genderAutoDetect().'-Вернислав');
    }
    public function testGenDetect96()
    {
        $this->object->setFirstName('Веселан');
        $this->assertEquals('1-Веселан', $this->object->genderAutoDetect().'-Веселан');
    }
    public function testGenDetect97()
    {
        $this->object->setFirstName('Витомир');
        $this->assertEquals('1-Витомир', $this->object->genderAutoDetect().'-Витомир');
    }
    public function testGenDetect98()
    {
        $this->object->setFirstName('Вишата');
        $this->assertEquals('1-Вишата', $this->object->genderAutoDetect().'-Вишата');
    }
    public function testGenDetect99()
    {
        $this->object->setFirstName('Вишезор');
        $this->assertEquals('1-Вишезор', $this->object->genderAutoDetect().'-Вишезор');
    }
    public function testGenDetect100()
    {
        $this->object->setFirstName('Вишеслав');
        $this->assertEquals('1-Вишеслав', $this->object->genderAutoDetect().'-Вишеслав');
    }
    public function testGenDetect101()
    {
        $this->object->setFirstName('Вір');
        $this->assertEquals('1-Вір', $this->object->genderAutoDetect().'-Вір');
    }
    public function testGenDetect102()
    {
        $this->object->setFirstName('Віродан');
        $this->assertEquals('1-Віродан', $this->object->genderAutoDetect().'-Віродан');
    }
    public function testGenDetect103()
    {
        $this->object->setFirstName('Віродар');
        $this->assertEquals('1-Віродар', $this->object->genderAutoDetect().'-Віродар');
    }
    public function testGenDetect104()
    {
        $this->object->setFirstName('Вірослав');
        $this->assertEquals('1-Вірослав', $this->object->genderAutoDetect().'-Вірослав');
    }
    public function testGenDetect105()
    {
        $this->object->setFirstName('Віст');
        $this->assertEquals('1-Віст', $this->object->genderAutoDetect().'-Віст');
    }
    public function testGenDetect106()
    {
        $this->object->setFirstName('Вістан');
        $this->assertEquals('1-Вістан', $this->object->genderAutoDetect().'-Вістан');
    }
    public function testGenDetect107()
    {
        $this->object->setFirstName('Вітан');
        $this->assertEquals('1-Вітан', $this->object->genderAutoDetect().'-Вітан');
    }
    public function testGenDetect108()
    {
        $this->object->setFirstName('Вітомир');
        $this->assertEquals('1-Вітомир', $this->object->genderAutoDetect().'-Вітомир');
    }
    public function testGenDetect109()
    {
        $this->object->setFirstName('Вітрян');
        $this->assertEquals('1-Вітрян', $this->object->genderAutoDetect().'-Вітрян');
    }
    public function testGenDetect110()
    {
        $this->object->setFirstName('Влад');
        $this->assertEquals('1-Влад', $this->object->genderAutoDetect().'-Влад');
    }
    public function testGenDetect111()
    {
        $this->object->setFirstName('Владислав');
        $this->assertEquals('1-Владислав', $this->object->genderAutoDetect().'-Владислав');
    }
    public function testGenDetect112()
    {
        $this->object->setFirstName('Власт');
        $this->assertEquals('1-Власт', $this->object->genderAutoDetect().'-Власт');
    }
    public function testGenDetect113()
    {
        $this->object->setFirstName('Вогнедар');
        $this->assertEquals('1-Вогнедар', $this->object->genderAutoDetect().'-Вогнедар');
    }
    public function testGenDetect114()
    {
        $this->object->setFirstName('Вогнян');
        $this->assertEquals('1-Вогнян', $this->object->genderAutoDetect().'-Вогнян');
    }
    public function testGenDetect115()
    {
        $this->object->setFirstName('Водограй');
        $this->assertEquals('1-Водограй', $this->object->genderAutoDetect().'-Водограй');
    }
    public function testGenDetect116()
    {
        $this->object->setFirstName('Водотрав');
        $this->assertEquals('1-Водотрав', $this->object->genderAutoDetect().'-Водотрав');
    }
    public function testGenDetect117()
    {
        $this->object->setFirstName('Воїслав');
        $this->assertEquals('1-Воїслав', $this->object->genderAutoDetect().'-Воїслав');
    }
    public function testGenDetect118()
    {
        $this->object->setFirstName('Волелюб');
        $this->assertEquals('1-Волелюб', $this->object->genderAutoDetect().'-Волелюб');
    }
    public function testGenDetect119()
    {
        $this->object->setFirstName('Володар');
        $this->assertEquals('1-Володар', $this->object->genderAutoDetect().'-Володар');
    }
    public function testGenDetect120()
    {
        $this->object->setFirstName('Володимир');
        $this->assertEquals('1-Володимир', $this->object->genderAutoDetect().'-Володимир');
    }
    public function testGenDetect121()
    {
        $this->object->setFirstName('Володислав');
        $this->assertEquals('1-Володислав', $this->object->genderAutoDetect().'-Володислав');
    }
    public function testGenDetect122()
    {
        $this->object->setFirstName('Воля');
        $this->assertEquals('1-Воля', $this->object->genderAutoDetect().'-Воля');
    }
    public function testGenDetect123()
    {
        $this->object->setFirstName('Воротислав');
        $this->assertEquals('1-Воротислав', $this->object->genderAutoDetect().'-Воротислав');
    }
    public function testGenDetect124()
    {
        $this->object->setFirstName('Вратан');
        $this->assertEquals('1-Вратан', $this->object->genderAutoDetect().'-Вратан');
    }
    public function testGenDetect125()
    {
        $this->object->setFirstName('Вратислав');
        $this->assertEquals('1-Вратислав', $this->object->genderAutoDetect().'-Вратислав');
    }
    public function testGenDetect126()
    {
        $this->object->setFirstName('Всевлад');
        $this->assertEquals('1-Всевлад', $this->object->genderAutoDetect().'-Всевлад');
    }
    public function testGenDetect127()
    {
        $this->object->setFirstName('Всеволод');
        $this->assertEquals('1-Всеволод', $this->object->genderAutoDetect().'-Всеволод');
    }
    public function testGenDetect128()
    {
        $this->object->setFirstName('Вселюб');
        $this->assertEquals('1-Вселюб', $this->object->genderAutoDetect().'-Вселюб');
    }
    public function testGenDetect129()
    {
        $this->object->setFirstName('Вселюд');
        $this->assertEquals('1-Вселюд', $this->object->genderAutoDetect().'-Вселюд');
    }
    public function testGenDetect130()
    {
        $this->object->setFirstName('Всеслав');
        $this->assertEquals('1-Всеслав', $this->object->genderAutoDetect().'-Всеслав');
    }
    public function testGenDetect131()
    {
        $this->object->setFirstName('Гарнослав');
        $this->assertEquals('1-Гарнослав', $this->object->genderAutoDetect().'-Гарнослав');
    }
    public function testGenDetect132()
    {
        $this->object->setFirstName('Гатусил');
        $this->assertEquals('1-Гатусил', $this->object->genderAutoDetect().'-Гатусил');
    }
    public function testGenDetect133()
    {
        $this->object->setFirstName('Гатуслав');
        $this->assertEquals('1-Гатуслав', $this->object->genderAutoDetect().'-Гатуслав');
    }
    public function testGenDetect134()
    {
        $this->object->setFirstName('Гервасій');
        $this->assertEquals('1-Гервасій', $this->object->genderAutoDetect().'-Гервасій');
    }
    public function testGenDetect135()
    {
        $this->object->setFirstName('Гладко');
        $this->assertEquals('1-Гладко', $this->object->genderAutoDetect().'-Гладко');
    }
    public function testGenDetect136()
    {
        $this->object->setFirstName('Гліб');
        $this->assertEquals('1-Гліб', $this->object->genderAutoDetect().'-Гліб');
    }
    public function testGenDetect137()
    {
        $this->object->setFirstName('Годомир');
        $this->assertEquals('1-Годомир', $this->object->genderAutoDetect().'-Годомир');
    }
    public function testGenDetect138()
    {
        $this->object->setFirstName('Голубко');
        $this->assertEquals('1-Голубко', $this->object->genderAutoDetect().'-Голубко');
    }
    public function testGenDetect139()
    {
        $this->object->setFirstName('Горун');
        $this->assertEquals('1-Горун', $this->object->genderAutoDetect().'-Горун');
    }
    public function testGenDetect140()
    {
        $this->object->setFirstName('Гордій');
        $this->assertEquals('1-Гордій', $this->object->genderAutoDetect().'-Гордій');
    }
    public function testGenDetect141()
    {
        $this->object->setFirstName('Гордислав');
        $this->assertEquals('1-Гордислав', $this->object->genderAutoDetect().'-Гордислав');
    }
    public function testGenDetect142()
    {
        $this->object->setFirstName('Гордогост');
        $this->assertEquals('1-Гордогост', $this->object->genderAutoDetect().'-Гордогост');
    }
    public function testGenDetect143()
    {
        $this->object->setFirstName('Гордодум');
        $this->assertEquals('1-Гордодум', $this->object->genderAutoDetect().'-Гордодум');
    }
    public function testGenDetect144()
    {
        $this->object->setFirstName('Гордомисл');
        $this->assertEquals('1-Гордомисл', $this->object->genderAutoDetect().'-Гордомисл');
    }
    public function testGenDetect145()
    {
        $this->object->setFirstName('Гордослав');
        $this->assertEquals('1-Гордослав', $this->object->genderAutoDetect().'-Гордослав');
    }
    public function testGenDetect146()
    {
        $this->object->setFirstName('Гордята');
        $this->assertEquals('1-Гордята', $this->object->genderAutoDetect().'-Гордята');
    }
    public function testGenDetect147()
    {
        $this->object->setFirstName('Горигляд');
        $this->assertEquals('1-Горигляд', $this->object->genderAutoDetect().'-Горигляд');
    }
    public function testGenDetect148()
    {
        $this->object->setFirstName('Горимир');
        $this->assertEquals('1-Горимир', $this->object->genderAutoDetect().'-Горимир');
    }
    public function testGenDetect149()
    {
        $this->object->setFirstName('Горимисл');
        $this->assertEquals('1-Горимисл', $this->object->genderAutoDetect().'-Горимисл');
    }
    public function testGenDetect150()
    {
        $this->object->setFirstName('Горисвіт');
        $this->assertEquals('1-Горисвіт', $this->object->genderAutoDetect().'-Горисвіт');
    }
    public function testGenDetect151()
    {
        $this->object->setFirstName('Горислав');
        $this->assertEquals('1-Горислав', $this->object->genderAutoDetect().'-Горислав');
    }
    public function testGenDetect152()
    {
        $this->object->setFirstName('Горицвіт');
        $this->assertEquals('1-Горицвіт', $this->object->genderAutoDetect().'-Горицвіт');
    }
    public function testGenDetect153()
    {
        $this->object->setFirstName('Гостомисл');
        $this->assertEquals('1-Гостомисл', $this->object->genderAutoDetect().'-Гостомисл');
    }
    public function testGenDetect154()
    {
        $this->object->setFirstName('Гострозір');
        $this->assertEquals('1-Гострозір', $this->object->genderAutoDetect().'-Гострозір');
    }
    public function testGenDetect155()
    {
        $this->object->setFirstName('Гостята');
        $this->assertEquals('1-Гостята', $this->object->genderAutoDetect().'-Гостята');
    }
    public function testGenDetect156()
    {
        $this->object->setFirstName('Градимир');
        $this->assertEquals('1-Градимир', $this->object->genderAutoDetect().'-Градимир');
    }
    public function testGenDetect157()
    {
        $this->object->setFirstName('Градислав');
        $this->assertEquals('1-Градислав', $this->object->genderAutoDetect().'-Градислав');
    }
    public function testGenDetect158()
    {
        $this->object->setFirstName('Гранислав');
        $this->assertEquals('1-Гранислав', $this->object->genderAutoDetect().'-Гранислав');
    }
    public function testGenDetect159()
    {
        $this->object->setFirstName('Грива');
        $this->assertEquals('1-Грива', $this->object->genderAutoDetect().'-Грива');
    }
    public function testGenDetect160()
    {
        $this->object->setFirstName('Григорій');
        $this->assertEquals('1-Григорій', $this->object->genderAutoDetect().'-Григорій');
    }
    public function testGenDetect161()
    {
        $this->object->setFirstName('Гремислав');
        $this->assertEquals('1-Гремислав', $this->object->genderAutoDetect().'-Гремислав');
    }
    public function testGenDetect162()
    {
        $this->object->setFirstName('Грозан');
        $this->assertEquals('1-Грозан', $this->object->genderAutoDetect().'-Грозан');
    }
    public function testGenDetect163()
    {
        $this->object->setFirstName('Громовик');
        $this->assertEquals('1-Громовик', $this->object->genderAutoDetect().'-Громовик');
    }
    public function testGenDetect164()
    {
        $this->object->setFirstName('Гуляйвітер');
        $this->assertEquals('1-Гуляйвітер', $this->object->genderAutoDetect().'-Гуляйвітер');
    }
    public function testGenDetect165()
    {
        $this->object->setFirstName('Густомисл');
        $this->assertEquals('1-Густомисл', $this->object->genderAutoDetect().'-Густомисл');
    }
    public function testGenDetect166()
    {
        $this->object->setFirstName('Далемил');
        $this->assertEquals('1-Далемил', $this->object->genderAutoDetect().'-Далемил');
    }
    public function testGenDetect167()
    {
        $this->object->setFirstName('Далемир');
        $this->assertEquals('1-Далемир', $this->object->genderAutoDetect().'-Далемир');
    }
    public function testGenDetect168()
    {
        $this->object->setFirstName('Далібор');
        $this->assertEquals('1-Далібор', $this->object->genderAutoDetect().'-Далібор');
    }
    public function testGenDetect169()
    {
        $this->object->setFirstName('Дан');
        $this->assertEquals('1-Дан', $this->object->genderAutoDetect().'-Дан');
    }
    public function testGenDetect170()
    {
        $this->object->setFirstName('Данило');
        $this->assertEquals('1-Данило', $this->object->genderAutoDetect().'-Данило');
    }
    public function testGenDetect171()
    {
        $this->object->setFirstName('Данко');
        $this->assertEquals('1-Данко', $this->object->genderAutoDetect().'-Данко');
    }
    public function testGenDetect172()
    {
        $this->object->setFirstName('Дантур');
        $this->assertEquals('1-Дантур', $this->object->genderAutoDetect().'-Дантур');
    }
    public function testGenDetect173()
    {
        $this->object->setFirstName('Дар');
        $this->assertEquals('1-Дар', $this->object->genderAutoDetect().'-Дар');
    }
    public function testGenDetect174()
    {
        $this->object->setFirstName('Дарій');
        $this->assertEquals('1-Дарій', $this->object->genderAutoDetect().'-Дарій');
    }
    public function testGenDetect175()
    {
        $this->object->setFirstName('Дарибог');
        $this->assertEquals('1-Дарибог', $this->object->genderAutoDetect().'-Дарибог');
    }
    public function testGenDetect176()
    {
        $this->object->setFirstName('Даромир');
        $this->assertEquals('1-Даромир', $this->object->genderAutoDetect().'-Даромир');
    }
    public function testGenDetect177()
    {
        $this->object->setFirstName('Держикрай');
        $this->assertEquals('1-Держикрай', $this->object->genderAutoDetect().'-Держикрай');
    }
    public function testGenDetect178()
    {
        $this->object->setFirstName('Держислав');
        $this->assertEquals('1-Держислав', $this->object->genderAutoDetect().'-Держислав');
    }
    public function testGenDetect179()
    {
        $this->object->setFirstName('Дибач');
        $this->assertEquals('1-Дибач', $this->object->genderAutoDetect().'-Дибач');
    }
    public function testGenDetect180()
    {
        $this->object->setFirstName('Дивозір');
        $this->assertEquals('1-Дивозір', $this->object->genderAutoDetect().'-Дивозір');
    }
    public function testGenDetect181()
    {
        $this->object->setFirstName('Дій');
        $this->assertEquals('1-Дій', $this->object->genderAutoDetect().'-Дій');
    }
    public function testGenDetect182()
    {
        $this->object->setFirstName('Добрибій');
        $this->assertEquals('1-Добрибій', $this->object->genderAutoDetect().'-Добрибій');
    }
    public function testGenDetect183()
    {
        $this->object->setFirstName('Добривод');
        $this->assertEquals('1-Добривод', $this->object->genderAutoDetect().'-Добривод');
    }
    public function testGenDetect184()
    {
        $this->object->setFirstName('Добрик');
        $this->assertEquals('1-Добрик', $this->object->genderAutoDetect().'-Добрик');
    }
    public function testGenDetect185()
    {
        $this->object->setFirstName('Добрило');
        $this->assertEquals('1-Добрило', $this->object->genderAutoDetect().'-Добрило');
    }
    public function testGenDetect186()
    {
        $this->object->setFirstName('Добриня');
        $this->assertEquals('1-Добриня', $this->object->genderAutoDetect().'-Добриня');
    }
    public function testGenDetect187()
    {
        $this->object->setFirstName('Добрисвіт');
        $this->assertEquals('1-Добрисвіт', $this->object->genderAutoDetect().'-Добрисвіт');
    }
    public function testGenDetect188()
    {
        $this->object->setFirstName('Добровіст');
        $this->assertEquals('1-Добровіст', $this->object->genderAutoDetect().'-Добровіст');
    }
    public function testGenDetect189()
    {
        $this->object->setFirstName('Доброгост');
        $this->assertEquals('1-Доброгост', $this->object->genderAutoDetect().'-Доброгост');
    }
    public function testGenDetect190()
    {
        $this->object->setFirstName('Добродум');
        $this->assertEquals('1-Добродум', $this->object->genderAutoDetect().'-Добродум');
    }
    public function testGenDetect191()
    {
        $this->object->setFirstName('Добролик');
        $this->assertEquals('1-Добролик', $this->object->genderAutoDetect().'-Добролик');
    }
    public function testGenDetect192()
    {
        $this->object->setFirstName('Добролюб');
        $this->assertEquals('1-Добролюб', $this->object->genderAutoDetect().'-Добролюб');
    }
    public function testGenDetect193()
    {
        $this->object->setFirstName('Добромил');
        $this->assertEquals('1-Добромил', $this->object->genderAutoDetect().'-Добромил');
    }
    public function testGenDetect194()
    {
        $this->object->setFirstName('Добромир');
        $this->assertEquals('1-Добромир', $this->object->genderAutoDetect().'-Добромир');
    }
    public function testGenDetect195()
    {
        $this->object->setFirstName('Добромисл');
        $this->assertEquals('1-Добромисл', $this->object->genderAutoDetect().'-Добромисл');
    }
    public function testGenDetect196()
    {
        $this->object->setFirstName('Доброслав');
        $this->assertEquals('1-Доброслав', $this->object->genderAutoDetect().'-Доброслав');
    }
    public function testGenDetect197()
    {
        $this->object->setFirstName('Доморад');
        $this->assertEquals('1-Доморад', $this->object->genderAutoDetect().'-Доморад');
    }
    public function testGenDetect198()
    {
        $this->object->setFirstName('Домослав');
        $this->assertEquals('1-Домослав', $this->object->genderAutoDetect().'-Домослав');
    }
    public function testGenDetect199()
    {
        $this->object->setFirstName('Дорогобуг');
        $this->assertEquals('1-Дорогобуг', $this->object->genderAutoDetect().'-Дорогобуг');
    }
    public function testGenDetect200()
    {
        $this->object->setFirstName('Дорогомир');
        $this->assertEquals('1-Дорогомир', $this->object->genderAutoDetect().'-Дорогомир');
    }
    public function testGenDetect201()
    {
        $this->object->setFirstName('Дорогомисл');
        $this->assertEquals('1-Дорогомисл', $this->object->genderAutoDetect().'-Дорогомисл');
    }
    public function testGenDetect202()
    {
        $this->object->setFirstName('Дорогосил');
        $this->assertEquals('1-Дорогосил', $this->object->genderAutoDetect().'-Дорогосил');
    }
    public function testGenDetect203()
    {
        $this->object->setFirstName('Дорогочин');
        $this->assertEquals('1-Дорогочин', $this->object->genderAutoDetect().'-Дорогочин');
    }
    public function testGenDetect204()
    {
        $this->object->setFirstName('Драган');
        $this->assertEquals('1-Драган', $this->object->genderAutoDetect().'-Драган');
    }
    public function testGenDetect205()
    {
        $this->object->setFirstName('Дружелюб');
        $this->assertEquals('1-Дружелюб', $this->object->genderAutoDetect().'-Дружелюб');
    }
    public function testGenDetect206()
    {
        $this->object->setFirstName('Жадан');
        $this->assertEquals('1-Жадан', $this->object->genderAutoDetect().'-Жадан');
    }
    public function testGenDetect207()
    {
        $this->object->setFirstName('Ждан');
        $this->assertEquals('1-Ждан', $this->object->genderAutoDetect().'-Ждан');
    }
    public function testGenDetect208()
    {
        $this->object->setFirstName('Живорід');
        $this->assertEquals('1-Живорід', $this->object->genderAutoDetect().'-Живорід');
    }
    public function testGenDetect209()
    {
        $this->object->setFirstName('Живосил');
        $this->assertEquals('1-Живосил', $this->object->genderAutoDetect().'-Живосил');
    }
    public function testGenDetect210()
    {
        $this->object->setFirstName('Живослав');
        $this->assertEquals('1-Живослав', $this->object->genderAutoDetect().'-Живослав');
    }
    public function testGenDetect211()
    {
        $this->object->setFirstName('Житомир');
        $this->assertEquals('1-Житомир', $this->object->genderAutoDetect().'-Житомир');
    }
    public function testGenDetect212()
    {
        $this->object->setFirstName('Життєлюб');
        $this->assertEquals('1-Життєлюб', $this->object->genderAutoDetect().'-Життєлюб');
    }
    public function testGenDetect213()
    {
        $this->object->setFirstName('Збоїслав');
        $this->assertEquals('1-Збоїслав', $this->object->genderAutoDetect().'-Збоїслав');
    }
    public function testGenDetect214()
    {
        $this->object->setFirstName('Зборислав');
        $this->assertEquals('1-Зборислав', $this->object->genderAutoDetect().'-Зборислав');
    }
    public function testGenDetect215()
    {
        $this->object->setFirstName('Звенигор');
        $this->assertEquals('1-Звенигор', $this->object->genderAutoDetect().'-Звенигор');
    }
    public function testGenDetect216()
    {
        $this->object->setFirstName('Звенимир');
        $this->assertEquals('1-Звенимир', $this->object->genderAutoDetect().'-Звенимир');
    }
    public function testGenDetect217()
    {
        $this->object->setFirstName('Звенислав');
        $this->assertEquals('1-Звенислав', $this->object->genderAutoDetect().'-Звенислав');
    }
    public function testGenDetect218()
    {
        $this->object->setFirstName('Здоровега');
        $this->assertEquals('1-Здоровега', $this->object->genderAutoDetect().'-Здоровега');
    }
    public function testGenDetect219()
    {
        $this->object->setFirstName('Земислав');
        $this->assertEquals('1-Земислав', $this->object->genderAutoDetect().'-Земислав');
    }
    public function testGenDetect220()
    {
        $this->object->setFirstName('Зеновій');
        $this->assertEquals('1-Зеновій', $this->object->genderAutoDetect().'-Зеновій');
    }
    public function testGenDetect221()
    {
        $this->object->setFirstName('Зіновій');
        $this->assertEquals('1-Зіновій', $this->object->genderAutoDetect().'-Зіновій');
    }
    public function testGenDetect222()
    {
        $this->object->setFirstName('Зиновій');
        $this->assertEquals('1-Зиновій', $this->object->genderAutoDetect().'-Зиновій');
    }
    public function testGenDetect223()
    {
        $this->object->setFirstName('Злат');
        $this->assertEquals('1-Злат', $this->object->genderAutoDetect().'-Злат');
    }
    public function testGenDetect224()
    {
        $this->object->setFirstName('Златомир');
        $this->assertEquals('1-Златомир', $this->object->genderAutoDetect().'-Златомир');
    }
    public function testGenDetect225()
    {
        $this->object->setFirstName('Златоус');
        $this->assertEquals('1-Златоус', $this->object->genderAutoDetect().'-Златоус');
    }
    public function testGenDetect226()
    {
        $this->object->setFirstName('Златодан');
        $this->assertEquals('1-Златодан', $this->object->genderAutoDetect().'-Златодан');
    }
    public function testGenDetect227()
    {
        $this->object->setFirstName('Злотан');
        $this->assertEquals('1-Злотан', $this->object->genderAutoDetect().'-Злотан');
    }
    public function testGenDetect228()
    {
        $this->object->setFirstName('Злотодан');
        $this->assertEquals('1-Злотодан', $this->object->genderAutoDetect().'-Злотодан');
    }
    public function testGenDetect229()
    {
        $this->object->setFirstName('Зорегляд');
        $this->assertEquals('1-Зорегляд', $this->object->genderAutoDetect().'-Зорегляд');
    }
    public function testGenDetect230()
    {
        $this->object->setFirstName('Зоремир');
        $this->assertEquals('1-Зоремир', $this->object->genderAutoDetect().'-Зоремир');
    }
    public function testGenDetect231()
    {
        $this->object->setFirstName('Зорепад');
        $this->assertEquals('1-Зорепад', $this->object->genderAutoDetect().'-Зорепад');
    }
    public function testGenDetect232()
    {
        $this->object->setFirstName('Зореслав');
        $this->assertEquals('1-Зореслав', $this->object->genderAutoDetect().'-Зореслав');
    }
    public function testGenDetect233()
    {
        $this->object->setFirstName('Зорян');
        $this->assertEquals('1-Зорян', $this->object->genderAutoDetect().'-Зорян');
    }
    public function testGenDetect234()
    {
        $this->object->setFirstName('Ізяслав');
        $this->assertEquals('1-Ізяслав', $this->object->genderAutoDetect().'-Ізяслав');
    }
    public function testGenDetect235()
    {
        $this->object->setFirstName('Ігор');
        $this->assertEquals('1-Ігор', $this->object->genderAutoDetect().'-Ігор');
    }
    public function testGenDetect236()
    {
        $this->object->setFirstName('Іван');
        $this->assertEquals('1-Іван', $this->object->genderAutoDetect().'-Іван');
    }
    public function testGenDetect237()
    {
        $this->object->setFirstName('Квітан');
        $this->assertEquals('1-Квітан', $this->object->genderAutoDetect().'-Квітан');
    }
    public function testGenDetect238()
    {
        $this->object->setFirstName('Києслав');
        $this->assertEquals('1-Києслав', $this->object->genderAutoDetect().'-Києслав');
    }
    public function testGenDetect239()
    {
        $this->object->setFirstName('Кий');
        $this->assertEquals('1-Кий', $this->object->genderAutoDetect().'-Кий');
    }
    public function testGenDetect240()
    {
        $this->object->setFirstName('Кирило');
        $this->assertEquals('1-Кирило', $this->object->genderAutoDetect().'-Кирило');
    }
    public function testGenDetect241()
    {
        $this->object->setFirstName('Киян');
        $this->assertEquals('1-Киян', $this->object->genderAutoDetect().'-Киян');
    }
    public function testGenDetect242()
    {
        $this->object->setFirstName('Княжослав');
        $this->assertEquals('1-Княжослав', $this->object->genderAutoDetect().'-Княжослав');
    }
    public function testGenDetect243()
    {
        $this->object->setFirstName('Корній');
        $this->assertEquals('1-Корній', $this->object->genderAutoDetect().'-Корній');
    }
    public function testGenDetect244()
    {
        $this->object->setFirstName('Колодар');
        $this->assertEquals('1-Колодар', $this->object->genderAutoDetect().'-Колодар');
    }
    public function testGenDetect245()
    {
        $this->object->setFirstName('Колодій');
        $this->assertEquals('1-Колодій', $this->object->genderAutoDetect().'-Колодій');
    }
    public function testGenDetect246()
    {
        $this->object->setFirstName('Косак');
        $this->assertEquals('1-Косак', $this->object->genderAutoDetect().'-Косак');
    }
    public function testGenDetect247()
    {
        $this->object->setFirstName('Красун');
        $this->assertEquals('1-Красун', $this->object->genderAutoDetect().'-Красун');
    }
    public function testGenDetect248()
    {
        $this->object->setFirstName('Крилач');
        $this->assertEquals('1-Крилач', $this->object->genderAutoDetect().'-Крилач');
    }
    public function testGenDetect249()
    {
        $this->object->setFirstName('Куйбіда');
        $this->assertEquals('1-Куйбіда', $this->object->genderAutoDetect().'-Куйбіда');
    }
    public function testGenDetect250()
    {
        $this->object->setFirstName('Курило');
        $this->assertEquals('1-Курило', $this->object->genderAutoDetect().'-Курило');
    }
    public function testGenDetect251()
    {
        $this->object->setFirstName('Лад');
        $this->assertEquals('1-Лад', $this->object->genderAutoDetect().'-Лад');
    }
    public function testGenDetect252()
    {
        $this->object->setFirstName('Ладимир');
        $this->assertEquals('1-Ладимир', $this->object->genderAutoDetect().'-Ладимир');
    }
    public function testGenDetect253()
    {
        $this->object->setFirstName('Ладислав');
        $this->assertEquals('1-Ладислав', $this->object->genderAutoDetect().'-Ладислав');
    }
    public function testGenDetect254()
    {
        $this->object->setFirstName('Ладолюб');
        $this->assertEquals('1-Ладолюб', $this->object->genderAutoDetect().'-Ладолюб');
    }
    public function testGenDetect255()
    {
        $this->object->setFirstName('Ладомир');
        $this->assertEquals('1-Ладомир', $this->object->genderAutoDetect().'-Ладомир');
    }
    public function testGenDetect256()
    {
        $this->object->setFirstName('Лев');
        $this->assertEquals('1-Лев', $this->object->genderAutoDetect().'-Лев');
    }
    public function testGenDetect257()
    {
        $this->object->setFirstName('Левко');
        $this->assertEquals('1-Левко', $this->object->genderAutoDetect().'-Левко');
    }
    public function testGenDetect258()
    {
        $this->object->setFirstName('Листвич');
        $this->assertEquals('1-Листвич', $this->object->genderAutoDetect().'-Листвич');
    }
    public function testGenDetect259()
    {
        $this->object->setFirstName('Ліпослав');
        $this->assertEquals('1-Ліпослав', $this->object->genderAutoDetect().'-Ліпослав');
    }
    public function testGenDetect260()
    {
        $this->object->setFirstName('Лоліт');
        $this->assertEquals('1-Лоліт', $this->object->genderAutoDetect().'-Лоліт');
    }
    public function testGenDetect261()
    {
        $this->object->setFirstName('Любим');
        $this->assertEquals('1-Любим', $this->object->genderAutoDetect().'-Любим');
    }
    public function testGenDetect262()
    {
        $this->object->setFirstName('Любовир');
        $this->assertEquals('1-Любовир', $this->object->genderAutoDetect().'-Любовир');
    }
    public function testGenDetect263()
    {
        $this->object->setFirstName('Любодар');
        $this->assertEquals('1-Любодар', $this->object->genderAutoDetect().'-Любодар');
    }
    public function testGenDetect264()
    {
        $this->object->setFirstName('Любозар');
        $this->assertEquals('1-Любозар', $this->object->genderAutoDetect().'-Любозар');
    }
    public function testGenDetect265()
    {
        $this->object->setFirstName('Любомил');
        $this->assertEquals('1-Любомил', $this->object->genderAutoDetect().'-Любомил');
    }
    public function testGenDetect266()
    {
        $this->object->setFirstName('Любомир');
        $this->assertEquals('1-Любомир', $this->object->genderAutoDetect().'-Любомир');
    }
    public function testGenDetect267()
    {
        $this->object->setFirstName('Любомисл');
        $this->assertEquals('1-Любомисл', $this->object->genderAutoDetect().'-Любомисл');
    }
    public function testGenDetect268()
    {
        $this->object->setFirstName('Любомудр');
        $this->assertEquals('1-Любомудр', $this->object->genderAutoDetect().'-Любомудр');
    }
    public function testGenDetect269()
    {
        $this->object->setFirstName('Любослав');
        $this->assertEquals('1-Любослав', $this->object->genderAutoDetect().'-Любослав');
    }
    public function testGenDetect270()
    {
        $this->object->setFirstName('Людомил');
        $this->assertEquals('1-Людомил', $this->object->genderAutoDetect().'-Людомил');
    }
    public function testGenDetect271()
    {
        $this->object->setFirstName('Людомир');
        $this->assertEquals('1-Людомир', $this->object->genderAutoDetect().'-Людомир');
    }
    public function testGenDetect272()
    {
        $this->object->setFirstName('Людислав');
        $this->assertEquals('1-Людислав', $this->object->genderAutoDetect().'-Людислав');
    }
    public function testGenDetect273()
    {
        $this->object->setFirstName('Лютобор');
        $this->assertEquals('1-Лютобор', $this->object->genderAutoDetect().'-Лютобор');
    }
    public function testGenDetect274()
    {
        $this->object->setFirstName('Лютомисл');
        $this->assertEquals('1-Лютомисл', $this->object->genderAutoDetect().'-Лютомисл');
    }
    public function testGenDetect275()
    {
        $this->object->setFirstName('Магадар');
        $this->assertEquals('1-Магадар', $this->object->genderAutoDetect().'-Магадар');
    }
    public function testGenDetect276()
    {
        $this->object->setFirstName('Магамир');
        $this->assertEquals('1-Магамир', $this->object->genderAutoDetect().'-Магамир');
    }
    public function testGenDetect277()
    {
        $this->object->setFirstName('Магаслав');
        $this->assertEquals('1-Магаслав', $this->object->genderAutoDetect().'-Магаслав');
    }
    public function testGenDetect278()
    {
        $this->object->setFirstName('Маркіян');
        $this->assertEquals('1-Маркіян', $this->object->genderAutoDetect().'-Маркіян');
    }
    public function testGenDetect279()
    {
        $this->object->setFirstName('Май');
        $this->assertEquals('1-Май', $this->object->genderAutoDetect().'-Май');
    }
    public function testGenDetect280()
    {
        $this->object->setFirstName('Мал');
        $this->assertEquals('1-Мал', $this->object->genderAutoDetect().'-Мал');
    }
    public function testGenDetect281()
    {
        $this->object->setFirstName('Малик');
        $this->assertEquals('1-Малик', $this->object->genderAutoDetect().'-Малик');
    }
    public function testGenDetect282()
    {
        $this->object->setFirstName('Маломир');
        $this->assertEquals('1-Маломир', $this->object->genderAutoDetect().'-Маломир');
    }
    public function testGenDetect283()
    {
        $this->object->setFirstName('Марко');
        $this->assertEquals('1-Марко', $this->object->genderAutoDetect().'-Марко');
    }
    public function testGenDetect284()
    {
        $this->object->setFirstName('Медомир');
        $this->assertEquals('1-Медомир', $this->object->genderAutoDetect().'-Медомир');
    }
    public function testGenDetect285()
    {
        $this->object->setFirstName('Межамир');
        $this->assertEquals('1-Межамир', $this->object->genderAutoDetect().'-Межамир');
    }
    public function testGenDetect286()
    {
        $this->object->setFirstName('Мечислав');
        $this->assertEquals('1-Мечислав', $this->object->genderAutoDetect().'-Мечислав');
    }
    public function testGenDetect287()
    {
        $this->object->setFirstName('Мизамир');
        $this->assertEquals('1-Мизамир', $this->object->genderAutoDetect().'-Мизамир');
    }
    public function testGenDetect288()
    {
        $this->object->setFirstName('Милан');
        $this->assertEquals('1-Милан', $this->object->genderAutoDetect().'-Милан');
    }
    public function testGenDetect289()
    {
        $this->object->setFirstName('Милован');
        $this->assertEquals('1-Милован', $this->object->genderAutoDetect().'-Милован');
    }
    public function testGenDetect290()
    {
        $this->object->setFirstName('Милодар');
        $this->assertEquals('1-Милодар', $this->object->genderAutoDetect().'-Милодар');
    }
    public function testGenDetect291()
    {
        $this->object->setFirstName('Милодух');
        $this->assertEquals('1-Милодух', $this->object->genderAutoDetect().'-Милодух');
    }
    public function testGenDetect292()
    {
        $this->object->setFirstName('Милослав');
        $this->assertEquals('1-Милослав', $this->object->genderAutoDetect().'-Милослав');
    }
    public function testGenDetect293()
    {
        $this->object->setFirstName('Мир');
        $this->assertEquals('1-Мир', $this->object->genderAutoDetect().'-Мир');
    }
    public function testGenDetect294()
    {
        $this->object->setFirstName('Миробог');
        $this->assertEquals('1-Миробог', $this->object->genderAutoDetect().'-Миробог');
    }
    public function testGenDetect295()
    {
        $this->object->setFirstName('Мирогост');
        $this->assertEquals('1-Мирогост', $this->object->genderAutoDetect().'-Мирогост');
    }
    public function testGenDetect296()
    {
        $this->object->setFirstName('Миролюб');
        $this->assertEquals('1-Миролюб', $this->object->genderAutoDetect().'-Миролюб');
    }
    public function testGenDetect297()
    {
        $this->object->setFirstName('Мирослав');
        $this->assertEquals('1-Мирослав', $this->object->genderAutoDetect().'-Мирослав');
    }
    public function testGenDetect298()
    {
        $this->object->setFirstName('Мовчан');
        $this->assertEquals('1-Мовчан', $this->object->genderAutoDetect().'-Мовчан');
    }
    public function testGenDetect299()
    {
        $this->object->setFirstName('Молибог');
        $this->assertEquals('1-Молибог', $this->object->genderAutoDetect().'-Молибог');
    }
    public function testGenDetect300()
    {
        $this->object->setFirstName('Мстибог');
        $this->assertEquals('1-Мстибог', $this->object->genderAutoDetect().'-Мстибог');
    }
    public function testGenDetect301()
    {
        $this->object->setFirstName('Мстивой');
        $this->assertEquals('1-Мстивой', $this->object->genderAutoDetect().'-Мстивой');
    }
    public function testGenDetect302()
    {
        $this->object->setFirstName('Мстислав');
        $this->assertEquals('1-Мстислав', $this->object->genderAutoDetect().'-Мстислав');
    }
    public function testGenDetect303()
    {
        $this->object->setFirstName('Мудролюб');
        $this->assertEquals('1-Мудролюб', $this->object->genderAutoDetect().'-Мудролюб');
    }
    public function testGenDetect304()
    {
        $this->object->setFirstName('Нагнибіда');
        $this->assertEquals('1-Нагнибіда', $this->object->genderAutoDetect().'-Нагнибіда');
    }
    public function testGenDetect305()
    {
        $this->object->setFirstName('Надій');
        $this->assertEquals('1-Надій', $this->object->genderAutoDetect().'-Надій');
    }
    public function testGenDetect306()
    {
        $this->object->setFirstName('Найден');
        $this->assertEquals('1-Найден', $this->object->genderAutoDetect().'-Найден');
    }
    public function testGenDetect307()
    {
        $this->object->setFirstName('Наслав');
        $this->assertEquals('1-Наслав', $this->object->genderAutoDetect().'-Наслав');
    }
    public function testGenDetect308()
    {
        $this->object->setFirstName('Недан');
        $this->assertEquals('1-Недан', $this->object->genderAutoDetect().'-Недан');
    }
    public function testGenDetect309()
    {
        $this->object->setFirstName('Немир');
        $this->assertEquals('1-Немир', $this->object->genderAutoDetect().'-Немир');
    }
    public function testGenDetect310()
    {
        $this->object->setFirstName('Непобор');
        $this->assertEquals('1-Непобор', $this->object->genderAutoDetect().'-Непобор');
    }
    public function testGenDetect311()
    {
        $this->object->setFirstName('Нігослав');
        $this->assertEquals('1-Нігослав', $this->object->genderAutoDetect().'-Нігослав');
    }
    public function testGenDetect312()
    {
        $this->object->setFirstName('Назар');
        $this->assertEquals('1-Назар', $this->object->genderAutoDetect().'-Назар');
    }
    public function testGenDetect313()
    {
        $this->object->setFirstName('Одинець');
        $this->assertEquals('1-Одинець', $this->object->genderAutoDetect().'-Одинець');
    }
    public function testGenDetect314()
    {
        $this->object->setFirstName('Олег');
        $this->assertEquals('1-Олег', $this->object->genderAutoDetect().'-Олег');
    }
    public function testGenDetect315()
    {
        $this->object->setFirstName('Олександр');
        $this->assertEquals('1-Олександр', $this->object->genderAutoDetect().'-Олександр');
    }
    public function testGenDetect316()
    {
        $this->object->setFirstName('Олексій');
        $this->assertEquals('1-Олексій', $this->object->genderAutoDetect().'-Олексій');
    }
    public function testGenDetect317()
    {
        $this->object->setFirstName('Олесь');
        $this->assertEquals('1-Олесь', $this->object->genderAutoDetect().'-Олесь');
    }
    public function testGenDetect318()
    {
        $this->object->setFirstName('Олелько');
        $this->assertEquals('1-Олелько', $this->object->genderAutoDetect().'-Олелько');
    }
    public function testGenDetect319()
    {
        $this->object->setFirstName('Орел');
        $this->assertEquals('1-Орел', $this->object->genderAutoDetect().'-Орел');
    }
    public function testGenDetect320()
    {
        $this->object->setFirstName('Орест');
        $this->assertEquals('1-Орест', $this->object->genderAutoDetect().'-Орест');
    }
    public function testGenDetect321()
    {
        $this->object->setFirstName('Орь');
        $this->assertEquals('1-Орь', $this->object->genderAutoDetect().'-Орь');
    }
    public function testGenDetect322()
    {
        $this->object->setFirstName('Оримир');
        $this->assertEquals('1-Оримир', $this->object->genderAutoDetect().'-Оримир');
    }
    public function testGenDetect323()
    {
        $this->object->setFirstName('Осмомисл');
        $this->assertEquals('1-Осмомисл', $this->object->genderAutoDetect().'-Осмомисл');
    }
    public function testGenDetect324()
    {
        $this->object->setFirstName('Острозор');
        $this->assertEquals('1-Острозор', $this->object->genderAutoDetect().'-Острозор');
    }
    public function testGenDetect325()
    {
        $this->object->setFirstName('Остромир');
        $this->assertEquals('1-Остромир', $this->object->genderAutoDetect().'-Остромир');
    }
    public function testGenDetect326()
    {
        $this->object->setFirstName('Остромов');
        $this->assertEquals('1-Остромов', $this->object->genderAutoDetect().'-Остромов');
    }
    public function testGenDetect327()
    {
        $this->object->setFirstName('Охрім');
        $this->assertEquals('1-Охрім', $this->object->genderAutoDetect().'-Охрім');
    }
    public function testGenDetect328()
    {
        $this->object->setFirstName('Павло');
        $this->assertEquals('1-Павло', $this->object->genderAutoDetect().'-Павло');
    }
    public function testGenDetect329()
    {
        $this->object->setFirstName('Первушко');
        $this->assertEquals('1-Первушко', $this->object->genderAutoDetect().'-Первушко');
    }
    public function testGenDetect330()
    {
        $this->object->setFirstName('Перелюб');
        $this->assertEquals('1-Перелюб', $this->object->genderAutoDetect().'-Перелюб');
    }
    public function testGenDetect331()
    {
        $this->object->setFirstName('Перемил');
        $this->assertEquals('1-Перемил', $this->object->genderAutoDetect().'-Перемил');
    }
    public function testGenDetect332()
    {
        $this->object->setFirstName('Перемисл');
        $this->assertEquals('1-Перемисл', $this->object->genderAutoDetect().'-Перемисл');
    }
    public function testGenDetect333()
    {
        $this->object->setFirstName('Пересвіт');
        $this->assertEquals('1-Пересвіт', $this->object->genderAutoDetect().'-Пересвіт');
    }
    public function testGenDetect334()
    {
        $this->object->setFirstName('Переяслав');
        $this->assertEquals('1-Переяслав', $this->object->genderAutoDetect().'-Переяслав');
    }
    public function testGenDetect335()
    {
        $this->object->setFirstName('Першик');
        $this->assertEquals('1-Першик', $this->object->genderAutoDetect().'-Першик');
    }
    public function testGenDetect336()
    {
        $this->object->setFirstName('Подолян');
        $this->assertEquals('1-Подолян', $this->object->genderAutoDetect().'-Подолян');
    }
    public function testGenDetect337()
    {
        $this->object->setFirstName('Позвізд');
        $this->assertEquals('1-Позвізд', $this->object->genderAutoDetect().'-Позвізд');
    }
    public function testGenDetect338()
    {
        $this->object->setFirstName('Полель');
        $this->assertEquals('1-Полель', $this->object->genderAutoDetect().'-Полель');
    }
    public function testGenDetect339()
    {
        $this->object->setFirstName('Полян');
        $this->assertEquals('1-Полян', $this->object->genderAutoDetect().'-Полян');
    }
    public function testGenDetect340()
    {
        $this->object->setFirstName('Пребислав');
        $this->assertEquals('1-Пребислав', $this->object->genderAutoDetect().'-Пребислав');
    }
    public function testGenDetect341()
    {
        $this->object->setFirstName('Предислав');
        $this->assertEquals('1-Предислав', $this->object->genderAutoDetect().'-Предислав');
    }
    public function testGenDetect342()
    {
        $this->object->setFirstName('Пугач');
        $this->assertEquals('1-Пугач', $this->object->genderAutoDetect().'-Пугач');
    }
    public function testGenDetect343()
    {
        $this->object->setFirstName('Путило');
        $this->assertEquals('1-Путило', $this->object->genderAutoDetect().'-Путило');
    }
    public function testGenDetect344()
    {
        $this->object->setFirstName('Путята');
        $this->assertEquals('1-Путята', $this->object->genderAutoDetect().'-Путята');
    }
    public function testGenDetect345()
    {
        $this->object->setFirstName('Рава');
        $this->assertEquals('1-Рава', $this->object->genderAutoDetect().'-Рава');
    }
    public function testGenDetect346()
    {
        $this->object->setFirstName('Рад');
        $this->assertEquals('1-Рад', $this->object->genderAutoDetect().'-Рад');
    }
    public function testGenDetect347()
    {
        $this->object->setFirstName('Радечко');
        $this->assertEquals('1-Радечко', $this->object->genderAutoDetect().'-Радечко');
    }
    public function testGenDetect348()
    {
        $this->object->setFirstName('Радивой');
        $this->assertEquals('1-Радивой', $this->object->genderAutoDetect().'-Радивой');
    }
    public function testGenDetect349()
    {
        $this->object->setFirstName('Радило');
        $this->assertEquals('1-Радило', $this->object->genderAutoDetect().'-Радило');
    }
    public function testGenDetect350()
    {
        $this->object->setFirstName('Радим');
        $this->assertEquals('1-Радим', $this->object->genderAutoDetect().'-Радим');
    }
    public function testGenDetect351()
    {
        $this->object->setFirstName('Радимир');
        $this->assertEquals('1-Радимир', $this->object->genderAutoDetect().'-Радимир');
    }
    public function testGenDetect352()
    {
        $this->object->setFirstName('Радислав');
        $this->assertEquals('1-Радислав', $this->object->genderAutoDetect().'-Радислав');
    }
    public function testGenDetect353()
    {
        $this->object->setFirstName('Радко');
        $this->assertEquals('1-Радко', $this->object->genderAutoDetect().'-Радко');
    }
    public function testGenDetect354()
    {
        $this->object->setFirstName('Радован');
        $this->assertEquals('1-Радован', $this->object->genderAutoDetect().'-Радован');
    }
    public function testGenDetect355()
    {
        $this->object->setFirstName('Радогост');
        $this->assertEquals('1-Радогост', $this->object->genderAutoDetect().'-Радогост');
    }
    public function testGenDetect356()
    {
        $this->object->setFirstName('Радомир');
        $this->assertEquals('1-Радомир', $this->object->genderAutoDetect().'-Радомир');
    }
    public function testGenDetect357()
    {
        $this->object->setFirstName('Радомисл');
        $this->assertEquals('1-Радомисл', $this->object->genderAutoDetect().'-Радомисл');
    }
    public function testGenDetect358()
    {
        $this->object->setFirstName('Радослав');
        $this->assertEquals('1-Радослав', $this->object->genderAutoDetect().'-Радослав');
    }
    public function testGenDetect359()
    {
        $this->object->setFirstName('Ратибор');
        $this->assertEquals('1-Ратибор', $this->object->genderAutoDetect().'-Ратибор');
    }
    public function testGenDetect360()
    {
        $this->object->setFirstName('Ратимир');
        $this->assertEquals('1-Ратимир', $this->object->genderAutoDetect().'-Ратимир');
    }
    public function testGenDetect361()
    {
        $this->object->setFirstName('Ратислав');
        $this->assertEquals('1-Ратислав', $this->object->genderAutoDetect().'-Ратислав');
    }
    public function testGenDetect362()
    {
        $this->object->setFirstName('Ревун');
        $this->assertEquals('1-Ревун', $this->object->genderAutoDetect().'-Ревун');
    }
    public function testGenDetect363()
    {
        $this->object->setFirstName('Рід');
        $this->assertEquals('1-Рід', $this->object->genderAutoDetect().'-Рід');
    }
    public function testGenDetect364()
    {
        $this->object->setFirstName('Рогволод');
        $this->assertEquals('1-Рогволод', $this->object->genderAutoDetect().'-Рогволод');
    }
    public function testGenDetect365()
    {
        $this->object->setFirstName('Родан');
        $this->assertEquals('1-Родан', $this->object->genderAutoDetect().'-Родан');
    }
    public function testGenDetect366()
    {
        $this->object->setFirstName('Родослав');
        $this->assertEquals('1-Родослав', $this->object->genderAutoDetect().'-Родослав');
    }
    public function testGenDetect367()
    {
        $this->object->setFirstName('Рожден');
        $this->assertEquals('1-Рожден', $this->object->genderAutoDetect().'-Рожден');
    }
    public function testGenDetect368()
    {
        $this->object->setFirstName('Розум');
        $this->assertEquals('1-Розум', $this->object->genderAutoDetect().'-Розум');
    }
    public function testGenDetect369()
    {
        $this->object->setFirstName('Роксолан');
        $this->assertEquals('1-Роксолан', $this->object->genderAutoDetect().'-Роксолан');
    }
    public function testGenDetect370()
    {
        $this->object->setFirstName('Роман');
        $this->assertEquals('1-Роман', $this->object->genderAutoDetect().'-Роман');
    }
    public function testGenDetect371()
    {
        $this->object->setFirstName('Ростислав');
        $this->assertEquals('1-Ростислав', $this->object->genderAutoDetect().'-Ростислав');
    }
    public function testGenDetect372()
    {
        $this->object->setFirstName('Ростичар');
        $this->assertEquals('1-Ростичар', $this->object->genderAutoDetect().'-Ростичар');
    }
    public function testGenDetect373()
    {
        $this->object->setFirstName('Ростун');
        $this->assertEquals('1-Ростун', $this->object->genderAutoDetect().'-Ростун');
    }
    public function testGenDetect374()
    {
        $this->object->setFirstName('Рудан');
        $this->assertEquals('1-Рудан', $this->object->genderAutoDetect().'-Рудан');
    }
    public function testGenDetect375()
    {
        $this->object->setFirstName('Рус');
        $this->assertEquals('1-Рус', $this->object->genderAutoDetect().'-Рус');
    }
    public function testGenDetect376()
    {
        $this->object->setFirstName('Руслан');
        $this->assertEquals('1-Руслан', $this->object->genderAutoDetect().'-Руслан');
    }
    public function testGenDetect377()
    {
        $this->object->setFirstName('Русудан');
        $this->assertEquals('1-Русудан', $this->object->genderAutoDetect().'-Русудан');
    }
    public function testGenDetect378()
    {
        $this->object->setFirstName('Сармат');
        $this->assertEquals('1-Сармат', $this->object->genderAutoDetect().'-Сармат');
    }
    public function testGenDetect379()
    {
        $this->object->setFirstName('Сварг');
        $this->assertEquals('1-Сварг', $this->object->genderAutoDetect().'-Сварг');
    }
    public function testGenDetect380()
    {
        $this->object->setFirstName('Сват');
        $this->assertEquals('1-Сват', $this->object->genderAutoDetect().'-Сват');
    }
    public function testGenDetect381()
    {
        $this->object->setFirstName('Світ');
        $this->assertEquals('1-Світ', $this->object->genderAutoDetect().'-Світ');
    }
    public function testGenDetect382()
    {
        $this->object->setFirstName('Світлан');
        $this->assertEquals('1-Світлан', $this->object->genderAutoDetect().'-Світлан');
    }
    public function testGenDetect383()
    {
        $this->object->setFirstName('Світлогор');
        $this->assertEquals('1-Світлогор', $this->object->genderAutoDetect().'-Світлогор');
    }
    public function testGenDetect384()
    {
        $this->object->setFirstName('Світогор');
        $this->assertEquals('1-Світогор', $this->object->genderAutoDetect().'-Світогор');
    }
    public function testGenDetect385()
    {
        $this->object->setFirstName('Світовид');
        $this->assertEquals('1-Світовид', $this->object->genderAutoDetect().'-Світовид');
    }
    public function testGenDetect386()
    {
        $this->object->setFirstName('Світодар');
        $this->assertEquals('1-Світодар', $this->object->genderAutoDetect().'-Світодар');
    }
    public function testGenDetect387()
    {
        $this->object->setFirstName('Світозар');
        $this->assertEquals('1-Світозар', $this->object->genderAutoDetect().'-Світозар');
    }
    public function testGenDetect388()
    {
        $this->object->setFirstName('Світокол');
        $this->assertEquals('1-Світокол', $this->object->genderAutoDetect().'-Світокол');
    }
    public function testGenDetect389()
    {
        $this->object->setFirstName('Світолик');
        $this->assertEquals('1-Світолик', $this->object->genderAutoDetect().'-Світолик');
    }
    public function testGenDetect390()
    {
        $this->object->setFirstName('Світолюб');
        $this->assertEquals('1-Світолюб', $this->object->genderAutoDetect().'-Світолюб');
    }
    public function testGenDetect391()
    {
        $this->object->setFirstName('Світомир');
        $this->assertEquals('1-Світомир', $this->object->genderAutoDetect().'-Світомир');
    }
    public function testGenDetect392()
    {
        $this->object->setFirstName('Світослав');
        $this->assertEquals('1-Світослав', $this->object->genderAutoDetect().'-Світослав');
    }
    public function testGenDetect393()
    {
        $this->object->setFirstName('Світояр');
        $this->assertEquals('1-Світояр', $this->object->genderAutoDetect().'-Світояр');
    }
    public function testGenDetect394()
    {
        $this->object->setFirstName('Свободан');
        $this->assertEquals('1-Свободан', $this->object->genderAutoDetect().'-Свободан');
    }
    public function testGenDetect395()
    {
        $this->object->setFirstName('Святовид');
        $this->assertEquals('1-Святовид', $this->object->genderAutoDetect().'-Святовид');
    }
    public function testGenDetect396()
    {
        $this->object->setFirstName('Святогор');
        $this->assertEquals('1-Святогор', $this->object->genderAutoDetect().'-Святогор');
    }
    public function testGenDetect397()
    {
        $this->object->setFirstName('Святолюб');
        $this->assertEquals('1-Святолюб', $this->object->genderAutoDetect().'-Святолюб');
    }
    public function testGenDetect398()
    {
        $this->object->setFirstName('Святополк');
        $this->assertEquals('1-Святополк', $this->object->genderAutoDetect().'-Святополк');
    }
    public function testGenDetect399()
    {
        $this->object->setFirstName('Святослав');
        $this->assertEquals('1-Святослав', $this->object->genderAutoDetect().'-Святослав');
    }
    public function testGenDetect400()
    {
        $this->object->setFirstName('Семибор');
        $this->assertEquals('1-Семибор', $this->object->genderAutoDetect().'-Семибор');
    }
    public function testGenDetect401()
    {
        $this->object->setFirstName('Семирад');
        $this->assertEquals('1-Семирад', $this->object->genderAutoDetect().'-Семирад');
    }
    public function testGenDetect402()
    {
        $this->object->setFirstName('Сердитко');
        $this->assertEquals('1-Сердитко', $this->object->genderAutoDetect().'-Сердитко');
    }
    public function testGenDetect403()
    {
        $this->object->setFirstName('Сила');
        $this->assertEquals('1-Сила', $this->object->genderAutoDetect().'-Сила');
    }
    public function testGenDetect404()
    {
        $this->object->setFirstName('Силолюб');
        $this->assertEquals('1-Силолюб', $this->object->genderAutoDetect().'-Силолюб');
    }
    public function testGenDetect405()
    {
        $this->object->setFirstName('Силослав');
        $this->assertEquals('1-Силослав', $this->object->genderAutoDetect().'-Силослав');
    }
    public function testGenDetect406()
    {
        $this->object->setFirstName('Синьоок');
        $this->assertEquals('1-Синьоок', $this->object->genderAutoDetect().'-Синьоок');
    }
    public function testGenDetect407()
    {
        $this->object->setFirstName('Скол');
        $this->assertEquals('1-Скол', $this->object->genderAutoDetect().'-Скол');
    }
    public function testGenDetect408()
    {
        $this->object->setFirstName('Слава');
        $this->assertEquals('1-Слава', $this->object->genderAutoDetect().'-Слава');
    }
    public function testGenDetect409()
    {
        $this->object->setFirstName('Славобор');
        $this->assertEquals('1-Славобор', $this->object->genderAutoDetect().'-Славобор');
    }
    public function testGenDetect410()
    {
        $this->object->setFirstName('Славолюб');
        $this->assertEquals('1-Славолюб', $this->object->genderAutoDetect().'-Славолюб');
    }
    public function testGenDetect411()
    {
        $this->object->setFirstName('Славомир');
        $this->assertEquals('1-Славомир', $this->object->genderAutoDetect().'-Славомир');
    }
    public function testGenDetect412()
    {
        $this->object->setFirstName('Славута');
        $this->assertEquals('1-Славута', $this->object->genderAutoDetect().'-Славута');
    }
    public function testGenDetect413()
    {
        $this->object->setFirstName('Снага');
        $this->assertEquals('1-Снага', $this->object->genderAutoDetect().'-Снага');
    }
    public function testGenDetect414()
    {
        $this->object->setFirstName('Сніжан');
        $this->assertEquals('1-Сніжан', $this->object->genderAutoDetect().'-Сніжан');
    }
    public function testGenDetect415()
    {
        $this->object->setFirstName('Сновид');
        $this->assertEquals('1-Сновид', $this->object->genderAutoDetect().'-Сновид');
    }
    public function testGenDetect416()
    {
        $this->object->setFirstName('Снозір');
        $this->assertEquals('1-Снозір', $this->object->genderAutoDetect().'-Снозір');
    }
    public function testGenDetect417()
    {
        $this->object->setFirstName('Собібор');
        $this->assertEquals('1-Собібор', $this->object->genderAutoDetect().'-Собібор');
    }
    public function testGenDetect418()
    {
        $this->object->setFirstName('Собімир');
        $this->assertEquals('1-Собімир', $this->object->genderAutoDetect().'-Собімир');
    }
    public function testGenDetect419()
    {
        $this->object->setFirstName('Собіслав');
        $this->assertEquals('1-Собіслав', $this->object->genderAutoDetect().'-Собіслав');
    }
    public function testGenDetect420()
    {
        $this->object->setFirstName('Сокіл');
        $this->assertEquals('1-Сокіл', $this->object->genderAutoDetect().'-Сокіл');
    }
    public function testGenDetect421()
    {
        $this->object->setFirstName('Соловей');
        $this->assertEquals('1-Соловей', $this->object->genderAutoDetect().'-Соловей');
    }
    public function testGenDetect422()
    {
        $this->object->setFirstName('Сологуб');
        $this->assertEquals('1-Сологуб', $this->object->genderAutoDetect().'-Сологуб');
    }
    public function testGenDetect423()
    {
        $this->object->setFirstName('Сонцевид');
        $this->assertEquals('1-Сонцевид', $this->object->genderAutoDetect().'-Сонцевид');
    }
    public function testGenDetect424()
    {
        $this->object->setFirstName('Сонцедар');
        $this->assertEquals('1-Сонцедар', $this->object->genderAutoDetect().'-Сонцедар');
    }
    public function testGenDetect425()
    {
        $this->object->setFirstName('Сонцелик');
        $this->assertEquals('1-Сонцелик', $this->object->genderAutoDetect().'-Сонцелик');
    }
    public function testGenDetect426()
    {
        $this->object->setFirstName('Спас');
        $this->assertEquals('1-Спас', $this->object->genderAutoDetect().'-Спас');
    }
    public function testGenDetect427()
    {
        $this->object->setFirstName('Станимир');
        $this->assertEquals('1-Станимир', $this->object->genderAutoDetect().'-Станимир');
    }
    public function testGenDetect428()
    {
        $this->object->setFirstName('Станіслав');
        $this->assertEquals('1-Станіслав', $this->object->genderAutoDetect().'-Станіслав');
    }
    public function testGenDetect429()
    {
        $this->object->setFirstName('Стародум');
        $this->assertEquals('1-Стародум', $this->object->genderAutoDetect().'-Стародум');
    }
    public function testGenDetect430()
    {
        $this->object->setFirstName('Степан');
        $this->assertEquals('1-Степан', $this->object->genderAutoDetect().'-Степан');
    }
    public function testGenDetect431()
    {
        $this->object->setFirstName('Стефаній');
        $this->assertEquals('1-Стефаній', $this->object->genderAutoDetect().'-Стефаній');
    }
    public function testGenDetect432()
    {
        $this->object->setFirstName('Стожар');
        $this->assertEquals('1-Стожар', $this->object->genderAutoDetect().'-Стожар');
    }
    public function testGenDetect433()
    {
        $this->object->setFirstName('Стоймир');
        $this->assertEquals('1-Стоймир', $this->object->genderAutoDetect().'-Стоймир');
    }
    public function testGenDetect434()
    {
        $this->object->setFirstName('Стоян');
        $this->assertEquals('1-Стоян', $this->object->genderAutoDetect().'-Стоян');
    }
    public function testGenDetect435()
    {
        $this->object->setFirstName('Судивой');
        $this->assertEquals('1-Судивой', $this->object->genderAutoDetect().'-Судивой');
    }
    public function testGenDetect436()
    {
        $this->object->setFirstName('Судимир');
        $this->assertEquals('1-Судимир', $this->object->genderAutoDetect().'-Судимир');
    }
    public function testGenDetect437()
    {
        $this->object->setFirstName('Судислав');
        $this->assertEquals('1-Судислав', $this->object->genderAutoDetect().'-Судислав');
    }
    public function testGenDetect438()
    {
        $this->object->setFirstName('Сурма');
        $this->assertEquals('1-Сурма', $this->object->genderAutoDetect().'-Сурма');
    }
    public function testGenDetect439()
    {
        $this->object->setFirstName('Тарас');
        $this->assertEquals('1-Тарас', $this->object->genderAutoDetect().'-Тарас');
    }
    public function testGenDetect440()
    {
        $this->object->setFirstName('Татолюб');
        $this->assertEquals('1-Татолюб', $this->object->genderAutoDetect().'-Татолюб');
    }
    public function testGenDetect441()
    {
        $this->object->setFirstName('Татомир');
        $this->assertEquals('1-Татомир', $this->object->genderAutoDetect().'-Татомир');
    }
    public function testGenDetect442()
    {
        $this->object->setFirstName('Твердигост');
        $this->assertEquals('1-Твердигост', $this->object->genderAutoDetect().'-Твердигост');
    }
    public function testGenDetect443()
    {
        $this->object->setFirstName('Твердислав');
        $this->assertEquals('1-Твердислав', $this->object->genderAutoDetect().'-Твердислав');
    }
    public function testGenDetect444()
    {
        $this->object->setFirstName('Творилад');
        $this->assertEquals('1-Творилад', $this->object->genderAutoDetect().'-Творилад');
    }
    public function testGenDetect445()
    {
        $this->object->setFirstName('Творимир');
        $this->assertEquals('1-Творимир', $this->object->genderAutoDetect().'-Творимир');
    }
    public function testGenDetect446()
    {
        $this->object->setFirstName('Творислав');
        $this->assertEquals('1-Творислав', $this->object->genderAutoDetect().'-Творислав');
    }
    public function testGenDetect447()
    {
        $this->object->setFirstName('Тихомир');
        $this->assertEquals('1-Тихомир', $this->object->genderAutoDetect().'-Тихомир');
    }
    public function testGenDetect448()
    {
        $this->object->setFirstName('Тихон');
        $this->assertEquals('1-Тихон', $this->object->genderAutoDetect().'-Тихон');
    }
    public function testGenDetect449()
    {
        $this->object->setFirstName('Толигнів');
        $this->assertEquals('1-Толигнів', $this->object->genderAutoDetect().'-Толигнів');
    }
    public function testGenDetect450()
    {
        $this->object->setFirstName('Толислав');
        $this->assertEquals('1-Толислав', $this->object->genderAutoDetect().'-Толислав');
    }
    public function testGenDetect451()
    {
        $this->object->setFirstName('Тригост');
        $this->assertEquals('1-Тригост', $this->object->genderAutoDetect().'-Тригост');
    }
    public function testGenDetect452()
    {
        $this->object->setFirstName('Троян');
        $this->assertEquals('1-Троян', $this->object->genderAutoDetect().'-Троян');
    }
    public function testGenDetect453()
    {
        $this->object->setFirstName('Триріг');
        $this->assertEquals('1-Триріг', $this->object->genderAutoDetect().'-Триріг');
    }
    public function testGenDetect454()
    {
        $this->object->setFirstName('Тур');
        $this->assertEquals('1-Тур', $this->object->genderAutoDetect().'-Тур');
    }
    public function testGenDetect455()
    {
        $this->object->setFirstName('Турбог');
        $this->assertEquals('1-Турбог', $this->object->genderAutoDetect().'-Турбог');
    }
    public function testGenDetect456()
    {
        $this->object->setFirstName('Турбрід');
        $this->assertEquals('1-Турбрід', $this->object->genderAutoDetect().'-Турбрід');
    }
    public function testGenDetect457()
    {
        $this->object->setFirstName('Уличан');
        $this->assertEquals('1-Уличан', $this->object->genderAutoDetect().'-Уличан');
    }
    public function testGenDetect458()
    {
        $this->object->setFirstName('Ус');
        $this->assertEquals('1-Ус', $this->object->genderAutoDetect().'-Ус');
    }
    public function testGenDetect459()
    {
        $this->object->setFirstName('Хвала');
        $this->assertEquals('1-Хвала', $this->object->genderAutoDetect().'-Хвала');
    }
    public function testGenDetect460()
    {
        $this->object->setFirstName('Хвалибог');
        $this->assertEquals('1-Хвалибог', $this->object->genderAutoDetect().'-Хвалибог');
    }
    public function testGenDetect461()
    {
        $this->object->setFirstName('Хвалимир');
        $this->assertEquals('1-Хвалимир', $this->object->genderAutoDetect().'-Хвалимир');
    }
    public function testGenDetect462()
    {
        $this->object->setFirstName('Ходота');
        $this->assertEquals('1-Ходота', $this->object->genderAutoDetect().'-Ходота');
    }
    public function testGenDetect463()
    {
        $this->object->setFirstName('Хорив');
        $this->assertEquals('1-Хорив', $this->object->genderAutoDetect().'-Хорив');
    }
    public function testGenDetect464()
    {
        $this->object->setFirstName('Хорошко');
        $this->assertEquals('1-Хорошко', $this->object->genderAutoDetect().'-Хорошко');
    }
    public function testGenDetect465()
    {
        $this->object->setFirstName('Хорошун');
        $this->assertEquals('1-Хорошун', $this->object->genderAutoDetect().'-Хорошун');
    }
    public function testGenDetect466()
    {
        $this->object->setFirstName('Хотибор');
        $this->assertEquals('1-Хотибор', $this->object->genderAutoDetect().'-Хотибор');
    }
    public function testGenDetect467()
    {
        $this->object->setFirstName('Хотимир');
        $this->assertEquals('1-Хотимир', $this->object->genderAutoDetect().'-Хотимир');
    }
    public function testGenDetect468()
    {
        $this->object->setFirstName('Хотян');
        $this->assertEquals('1-Хотян', $this->object->genderAutoDetect().'-Хотян');
    }
    public function testGenDetect469()
    {
        $this->object->setFirstName('Хранимир');
        $this->assertEquals('1-Хранимир', $this->object->genderAutoDetect().'-Хранимир');
    }
    public function testGenDetect470()
    {
        $this->object->setFirstName('Худан');
        $this->assertEquals('1-Худан', $this->object->genderAutoDetect().'-Худан');
    }
    public function testGenDetect471()
    {
        $this->object->setFirstName('Царко');
        $this->assertEquals('1-Царко', $this->object->genderAutoDetect().'-Царко');
    }
    public function testGenDetect472()
    {
        $this->object->setFirstName('Цвітан');
        $this->assertEquals('1-Цвітан', $this->object->genderAutoDetect().'-Цвітан');
    }
    public function testGenDetect473()
    {
        $this->object->setFirstName('Чара');
        $this->assertEquals('1-Чара', $this->object->genderAutoDetect().'-Чара');
    }
    public function testGenDetect474()
    {
        $this->object->setFirstName('Чернин');
        $this->assertEquals('1-Чернин', $this->object->genderAutoDetect().'-Чернин');
    }
    public function testGenDetect475()
    {
        $this->object->setFirstName('Чеслав');
        $this->assertEquals('1-Чеслав', $this->object->genderAutoDetect().'-Чеслав');
    }
    public function testGenDetect476()
    {
        $this->object->setFirstName('Чесмил');
        $this->assertEquals('1-Чесмил', $this->object->genderAutoDetect().'-Чесмил');
    }
    public function testGenDetect477()
    {
        $this->object->setFirstName('Честислав');
        $this->assertEquals('1-Честислав', $this->object->genderAutoDetect().'-Честислав');
    }
    public function testGenDetect478()
    {
        $this->object->setFirstName('Чорновіл');
        $this->assertEquals('1-Чорновіл', $this->object->genderAutoDetect().'-Чорновіл');
    }
    public function testGenDetect479()
    {
        $this->object->setFirstName('Чорнота');
        $this->assertEquals('1-Чорнота', $this->object->genderAutoDetect().'-Чорнота');
    }
    public function testGenDetect480()
    {
        $this->object->setFirstName('Чорнотур');
        $this->assertEquals('1-Чорнотур', $this->object->genderAutoDetect().'-Чорнотур');
    }
    public function testGenDetect481()
    {
        $this->object->setFirstName('Щастибог');
        $this->assertEquals('1-Щастибог', $this->object->genderAutoDetect().'-Щастибог');
    }
    public function testGenDetect482()
    {
        $this->object->setFirstName('Щастислав');
        $this->assertEquals('1-Щастислав', $this->object->genderAutoDetect().'-Щастислав');
    }
    public function testGenDetect483()
    {
        $this->object->setFirstName('Щедрогост');
        $this->assertEquals('1-Щедрогост', $this->object->genderAutoDetect().'-Щедрогост');
    }
    public function testGenDetect484()
    {
        $this->object->setFirstName('Щек');
        $this->assertEquals('1-Щек', $this->object->genderAutoDetect().'-Щек');
    }
    public function testGenDetect485()
    {
        $this->object->setFirstName('Юрій');
        $this->assertEquals('1-Юрій', $this->object->genderAutoDetect().'-Юрій');
    }
    public function testGenDetect486()
    {
        $this->object->setFirstName('Юлій');
        $this->assertEquals('1-Юлій', $this->object->genderAutoDetect().'-Юлій');
    }
    public function testGenDetect487()
    {
        $this->object->setFirstName('Ява');
        $this->assertEquals('1-Ява', $this->object->genderAutoDetect().'-Ява');
    }
    public function testGenDetect488()
    {
        $this->object->setFirstName('Явір');
        $this->assertEquals('1-Явір', $this->object->genderAutoDetect().'-Явір');
    }
    public function testGenDetect489()
    {
        $this->object->setFirstName('Яволод');
        $this->assertEquals('1-Яволод', $this->object->genderAutoDetect().'-Яволод');
    }
    public function testGenDetect490()
    {
        $this->object->setFirstName('Яр');
        $this->assertEquals('1-Яр', $this->object->genderAutoDetect().'-Яр');
    }
    public function testGenDetect491()
    {
        $this->object->setFirstName('Ярема');
        $this->assertEquals('1-Ярема', $this->object->genderAutoDetect().'-Ярема');
    }
    public function testGenDetect492()
    {
        $this->object->setFirstName('Ярило');
        $this->assertEquals('1-Ярило', $this->object->genderAutoDetect().'-Ярило');
    }
    public function testGenDetect493()
    {
        $this->object->setFirstName('Яровид');
        $this->assertEquals('1-Яровид', $this->object->genderAutoDetect().'-Яровид');
    }
    public function testGenDetect494()
    {
        $this->object->setFirstName('Яровит');
        $this->assertEquals('1-Яровит', $this->object->genderAutoDetect().'-Яровит');
    }
    public function testGenDetect495()
    {
        $this->object->setFirstName('Яромил');
        $this->assertEquals('1-Яромил', $this->object->genderAutoDetect().'-Яромил');
    }
    public function testGenDetect496()
    {
        $this->object->setFirstName('Яромир');
        $this->assertEquals('1-Яромир', $this->object->genderAutoDetect().'-Яромир');
    }
    public function testGenDetect497()
    {
        $this->object->setFirstName('Яромисл');
        $this->assertEquals('1-Яромисл', $this->object->genderAutoDetect().'-Яромисл');
    }
    public function testGenDetect498()
    {
        $this->object->setFirstName('Ярополк');
        $this->assertEquals('1-Ярополк', $this->object->genderAutoDetect().'-Ярополк');
    }
    public function testGenDetect499()
    {
        $this->object->setFirstName('Яросвіт');
        $this->assertEquals('1-Яросвіт', $this->object->genderAutoDetect().'-Яросвіт');
    }
    public function testGenDetect500()
    {
        $this->object->setFirstName('Ярослав');
        $this->assertEquals('1-Ярослав', $this->object->genderAutoDetect().'-Ярослав');
    }
    public function testGenDetect501()
    {
        $this->object->setFirstName('Ярош');
        $this->assertEquals('1-Ярош', $this->object->genderAutoDetect().'-Ярош');
    }
    public function testGenDetect502()
    {
        $this->object->setFirstName('Яртур');
        $this->assertEquals('1-Яртур', $this->object->genderAutoDetect().'-Яртур');
    }
    public function testGenDetect503()
    {
        $this->object->setFirstName('Ярчик');
        $this->assertEquals('1-Ярчик', $this->object->genderAutoDetect().'-Ярчик');
    }
    public function testGenDetect504()
    {
        $this->object->setFirstName('Ясен');
        $this->assertEquals('1-Ясен', $this->object->genderAutoDetect().'-Ясен');
    }
    public function testGenDetect505()
    {
        $this->object->setFirstName('Ясновид');
        $this->assertEquals('1-Ясновид', $this->object->genderAutoDetect().'-Ясновид');
    }
    public function testGenDetect506()
    {
        $this->object->setFirstName('Ясногор');
        $this->assertEquals('1-Ясногор', $this->object->genderAutoDetect().'-Ясногор');
    }
    public function testGenDetect507()
    {
        $this->object->setFirstName('Яснозір');
        $this->assertEquals('1-Яснозір', $this->object->genderAutoDetect().'-Яснозір');
    }
    public function testGenDetect508()
    {
        $this->object->setFirstName('Яснолик');
        $this->assertEquals('1-Яснолик', $this->object->genderAutoDetect().'-Яснолик');
    }
    public function testGenDetect509()
    {
        $this->object->setFirstName('Августа');
        $this->assertEquals('2-Августа', $this->object->genderAutoDetect().'-Августа');
    }
    public function testGenDetect510()
    {
        $this->object->setFirstName('Аврелія');
        $this->assertEquals('2-Аврелія', $this->object->genderAutoDetect().'-Аврелія');
    }
    public function testGenDetect511()
    {
        $this->object->setFirstName('Аврора');
        $this->assertEquals('2-Аврора', $this->object->genderAutoDetect().'-Аврора');
    }
    public function testGenDetect512()
    {
        $this->object->setFirstName('Агнія');
        $this->assertEquals('2-Агнія', $this->object->genderAutoDetect().'-Агнія');
    }
    public function testGenDetect513()
    {
        $this->object->setFirstName('Агрипина');
        $this->assertEquals('2-Агрипина', $this->object->genderAutoDetect().'-Агрипина');
    }
    public function testGenDetect514()
    {
        $this->object->setFirstName('Ада');
        $this->assertEquals('2-Ада', $this->object->genderAutoDetect().'-Ада');
    }
    public function testGenDetect515()
    {
        $this->object->setFirstName('Аделаїда');
        $this->assertEquals('2-Аделаїда', $this->object->genderAutoDetect().'-Аделаїда');
    }
    public function testGenDetect516()
    {
        $this->object->setFirstName('Адріана');
        $this->assertEquals('2-Адріана', $this->object->genderAutoDetect().'-Адріана');
    }
    public function testGenDetect517()
    {
        $this->object->setFirstName('Аза');
        $this->assertEquals('2-Аза', $this->object->genderAutoDetect().'-Аза');
    }
    public function testGenDetect518()
    {
        $this->object->setFirstName('Азалія');
        $this->assertEquals('2-Азалія', $this->object->genderAutoDetect().'-Азалія');
    }
    public function testGenDetect519()
    {
        $this->object->setFirstName('Аліна');
        $this->assertEquals('2-Аліна', $this->object->genderAutoDetect().'-Аліна');
    }
    public function testGenDetect520()
    {
        $this->object->setFirstName('Аліса');
        $this->assertEquals('2-Аліса', $this->object->genderAutoDetect().'-Аліса');
    }
    public function testGenDetect521()
    {
        $this->object->setFirstName('Алла');
        $this->assertEquals('2-Алла', $this->object->genderAutoDetect().'-Алла');
    }
    public function testGenDetect522()
    {
        $this->object->setFirstName('Альбертина');
        $this->assertEquals('2-Альбертина', $this->object->genderAutoDetect().'-Альбертина');
    }
    public function testGenDetect523()
    {
        $this->object->setFirstName('Альбіна');
        $this->assertEquals('2-Альбіна', $this->object->genderAutoDetect().'-Альбіна');
    }
    public function testGenDetect524()
    {
        $this->object->setFirstName('Альвіна');
        $this->assertEquals('2-Альвіна', $this->object->genderAutoDetect().'-Альвіна');
    }
    public function testGenDetect525()
    {
        $this->object->setFirstName('Анастасія');
        $this->assertEquals('2-Анастасія', $this->object->genderAutoDetect().'-Анастасія');
    }
    public function testGenDetect526()
    {
        $this->object->setFirstName('Ангеліна');
        $this->assertEquals('2-Ангеліна', $this->object->genderAutoDetect().'-Ангеліна');
    }
    public function testGenDetect527()
    {
        $this->object->setFirstName('Анжела');
        $this->assertEquals('2-Анжела', $this->object->genderAutoDetect().'-Анжела');
    }
    public function testGenDetect528()
    {
        $this->object->setFirstName('Антоніна');
        $this->assertEquals('2-Антоніна', $this->object->genderAutoDetect().'-Антоніна');
    }
    public function testGenDetect529()
    {
        $this->object->setFirstName('Анфіса');
        $this->assertEquals('2-Анфіса', $this->object->genderAutoDetect().'-Анфіса');
    }
    public function testGenDetect530()
    {
        $this->object->setFirstName('Аріадна');
        $this->assertEquals('2-Аріадна', $this->object->genderAutoDetect().'-Аріадна');
    }
    public function testGenDetect531()
    {
        $this->object->setFirstName('Арсена');
        $this->assertEquals('2-Арсена', $this->object->genderAutoDetect().'-Арсена');
    }
    public function testGenDetect532()
    {
        $this->object->setFirstName('Ася');
        $this->assertEquals('2-Ася', $this->object->genderAutoDetect().'-Ася');
    }
    public function testGenDetect533()
    {
        $this->object->setFirstName('Афіна');
        $this->assertEquals('2-Афіна', $this->object->genderAutoDetect().'-Афіна');
    }
    public function testGenDetect534()
    {
        $this->object->setFirstName('Афродіта');
        $this->assertEquals('2-Афродіта', $this->object->genderAutoDetect().'-Афродіта');
    }
    public function testGenDetect535()
    {
        $this->object->setFirstName('Бажана');
        $this->assertEquals('2-Бажана', $this->object->genderAutoDetect().'-Бажана');
    }
    public function testGenDetect536()
    {
        $this->object->setFirstName('Берегиня');
        $this->assertEquals('2-Берегиня', $this->object->genderAutoDetect().'-Берегиня');
    }
    public function testGenDetect537()
    {
        $this->object->setFirstName('Біловида');
        $this->assertEquals('2-Біловида', $this->object->genderAutoDetect().'-Біловида');
    }
    public function testGenDetect538()
    {
        $this->object->setFirstName('Біломира');
        $this->assertEquals('2-Біломира', $this->object->genderAutoDetect().'-Біломира');
    }
    public function testGenDetect539()
    {
        $this->object->setFirstName('Білослава');
        $this->assertEquals('2-Білослава', $this->object->genderAutoDetect().'-Білослава');
    }
    public function testGenDetect540()
    {
        $this->object->setFirstName('Біляна');
        $this->assertEquals('2-Біляна', $this->object->genderAutoDetect().'-Біляна');
    }
    public function testGenDetect541()
    {
        $this->object->setFirstName('Благиня');
        $this->assertEquals('2-Благиня', $this->object->genderAutoDetect().'-Благиня');
    }
    public function testGenDetect542()
    {
        $this->object->setFirstName('Благовида');
        $this->assertEquals('2-Благовида', $this->object->genderAutoDetect().'-Благовида');
    }
    public function testGenDetect543()
    {
        $this->object->setFirstName('Благовіра');
        $this->assertEquals('2-Благовіра', $this->object->genderAutoDetect().'-Благовіра');
    }
    public function testGenDetect544()
    {
        $this->object->setFirstName('Благовіста');
        $this->assertEquals('2-Благовіста', $this->object->genderAutoDetect().'-Благовіста');
    }
    public function testGenDetect545()
    {
        $this->object->setFirstName('Благослава');
        $this->assertEquals('2-Благослава', $this->object->genderAutoDetect().'-Благослава');
    }
    public function testGenDetect546()
    {
        $this->object->setFirstName('Богдана');
        $this->assertEquals('2-Богдана', $this->object->genderAutoDetect().'-Богдана');
    }
    public function testGenDetect547()
    {
        $this->object->setFirstName('Боговіра');
        $this->assertEquals('2-Боговіра', $this->object->genderAutoDetect().'-Боговіра');
    }
    public function testGenDetect548()
    {
        $this->object->setFirstName('Боговіста');
        $this->assertEquals('2-Боговіста', $this->object->genderAutoDetect().'-Боговіста');
    }
    public function testGenDetect549()
    {
        $this->object->setFirstName('Богодара');
        $this->assertEquals('2-Богодара', $this->object->genderAutoDetect().'-Богодара');
    }
    public function testGenDetect550()
    {
        $this->object->setFirstName('Боголіпа');
        $this->assertEquals('2-Боголіпа', $this->object->genderAutoDetect().'-Боголіпа');
    }
    public function testGenDetect551()
    {
        $this->object->setFirstName('Боголюба');
        $this->assertEquals('2-Боголюба', $this->object->genderAutoDetect().'-Боголюба');
    }
    public function testGenDetect552()
    {
        $this->object->setFirstName('Богосвята');
        $this->assertEquals('2-Богосвята', $this->object->genderAutoDetect().'-Богосвята');
    }
    public function testGenDetect553()
    {
        $this->object->setFirstName('Богумила');
        $this->assertEquals('2-Богумила', $this->object->genderAutoDetect().'-Богумила');
    }
    public function testGenDetect554()
    {
        $this->object->setFirstName('Богумира');
        $this->assertEquals('2-Богумира', $this->object->genderAutoDetect().'-Богумира');
    }
    public function testGenDetect555()
    {
        $this->object->setFirstName('Богуслава');
        $this->assertEquals('2-Богуслава', $this->object->genderAutoDetect().'-Богуслава');
    }
    public function testGenDetect556()
    {
        $this->object->setFirstName('Божедана');
        $this->assertEquals('2-Божедана', $this->object->genderAutoDetect().'-Божедана');
    }
    public function testGenDetect557()
    {
        $this->object->setFirstName('Божедара');
        $this->assertEquals('2-Божедара', $this->object->genderAutoDetect().'-Божедара');
    }
    public function testGenDetect558()
    {
        $this->object->setFirstName('Божемила');
        $this->assertEquals('2-Божемила', $this->object->genderAutoDetect().'-Божемила');
    }
    public function testGenDetect559()
    {
        $this->object->setFirstName('Божена');
        $this->assertEquals('2-Божена', $this->object->genderAutoDetect().'-Божена');
    }
    public function testGenDetect560()
    {
        $this->object->setFirstName('Божиця');
        $this->assertEquals('2-Божиця', $this->object->genderAutoDetect().'-Божиця');
    }
    public function testGenDetect561()
    {
        $this->object->setFirstName('Болеслава');
        $this->assertEquals('2-Болеслава', $this->object->genderAutoDetect().'-Болеслава');
    }
    public function testGenDetect562()
    {
        $this->object->setFirstName('Борислава');
        $this->assertEquals('2-Борислава', $this->object->genderAutoDetect().'-Борислава');
    }
    public function testGenDetect563()
    {
        $this->object->setFirstName('Боронислава');
        $this->assertEquals('2-Боронислава', $this->object->genderAutoDetect().'-Боронислава');
    }
    public function testGenDetect564()
    {
        $this->object->setFirstName('Братолюба');
        $this->assertEquals('2-Братолюба', $this->object->genderAutoDetect().'-Братолюба');
    }
    public function testGenDetect565()
    {
        $this->object->setFirstName('Братомила');
        $this->assertEquals('2-Братомила', $this->object->genderAutoDetect().'-Братомила');
    }
    public function testGenDetect566()
    {
        $this->object->setFirstName('Брячислава');
        $this->assertEquals('2-Брячислава', $this->object->genderAutoDetect().'-Брячислава');
    }
    public function testGenDetect567()
    {
        $this->object->setFirstName('Будана');
        $this->assertEquals('2-Будана', $this->object->genderAutoDetect().'-Будана');
    }
    public function testGenDetect568()
    {
        $this->object->setFirstName('Будимира');
        $this->assertEquals('2-Будимира', $this->object->genderAutoDetect().'-Будимира');
    }
    public function testGenDetect569()
    {
        $this->object->setFirstName('Будислава');
        $this->assertEquals('2-Будислава', $this->object->genderAutoDetect().'-Будислава');
    }
    public function testGenDetect570()
    {
        $this->object->setFirstName('Ведана');
        $this->assertEquals('2-Ведана', $this->object->genderAutoDetect().'-Ведана');
    }
    public function testGenDetect571()
    {
        $this->object->setFirstName('Велимира');
        $this->assertEquals('2-Велимира', $this->object->genderAutoDetect().'-Велимира');
    }
    public function testGenDetect572()
    {
        $this->object->setFirstName('Вербава');
        $this->assertEquals('2-Вербава', $this->object->genderAutoDetect().'-Вербава');
    }
    public function testGenDetect573()
    {
        $this->object->setFirstName('Верхуслава');
        $this->assertEquals('2-Верхуслава', $this->object->genderAutoDetect().'-Верхуслава');
    }
    public function testGenDetect574()
    {
        $this->object->setFirstName('Веселина');
        $this->assertEquals('2-Веселина', $this->object->genderAutoDetect().'-Веселина');
    }
    public function testGenDetect575()
    {
        $this->object->setFirstName('Веселка');
        $this->assertEquals('2-Веселка', $this->object->genderAutoDetect().'-Веселка');
    }
    public function testGenDetect576()
    {
        $this->object->setFirstName('Весна');
        $this->assertEquals('2-Весна', $this->object->genderAutoDetect().'-Весна');
    }
    public function testGenDetect577()
    {
        $this->object->setFirstName('Вишена');
        $this->assertEquals('2-Вишена', $this->object->genderAutoDetect().'-Вишена');
    }
    public function testGenDetect578()
    {
        $this->object->setFirstName('Вишеслава');
        $this->assertEquals('2-Вишеслава', $this->object->genderAutoDetect().'-Вишеслава');
    }
    public function testGenDetect579()
    {
        $this->object->setFirstName('Вишня');
        $this->assertEquals('2-Вишня', $this->object->genderAutoDetect().'-Вишня');
    }
    public function testGenDetect580()
    {
        $this->object->setFirstName('Віра');
        $this->assertEquals('2-Віра', $this->object->genderAutoDetect().'-Віра');
    }
    public function testGenDetect581()
    {
        $this->object->setFirstName('Віродана');
        $this->assertEquals('2-Віродана', $this->object->genderAutoDetect().'-Віродана');
    }
    public function testGenDetect582()
    {
        $this->object->setFirstName('Віродара');
        $this->assertEquals('2-Віродара', $this->object->genderAutoDetect().'-Віродара');
    }
    public function testGenDetect583()
    {
        $this->object->setFirstName('Вірослава');
        $this->assertEquals('2-Вірослава', $this->object->genderAutoDetect().'-Вірослава');
    }
    public function testGenDetect584()
    {
        $this->object->setFirstName('Віста');
        $this->assertEquals('2-Віста', $this->object->genderAutoDetect().'-Віста');
    }
    public function testGenDetect585()
    {
        $this->object->setFirstName('Вістуна');
        $this->assertEquals('2-Вістуна', $this->object->genderAutoDetect().'-Вістуна');
    }
    public function testGenDetect586()
    {
        $this->object->setFirstName('Вітана');
        $this->assertEquals('2-Вітана', $this->object->genderAutoDetect().'-Вітана');
    }
    public function testGenDetect587()
    {
        $this->object->setFirstName('Влада');
        $this->assertEquals('2-Влада', $this->object->genderAutoDetect().'-Влада');
    }
    public function testGenDetect588()
    {
        $this->object->setFirstName('Владислава');
        $this->assertEquals('2-Владислава', $this->object->genderAutoDetect().'-Владислава');
    }
    public function testGenDetect589()
    {
        $this->object->setFirstName('Власта');
        $this->assertEquals('2-Власта', $this->object->genderAutoDetect().'-Власта');
    }
    public function testGenDetect590()
    {
        $this->object->setFirstName('Вогнедара');
        $this->assertEquals('2-Вогнедара', $this->object->genderAutoDetect().'-Вогнедара');
    }
    public function testGenDetect591()
    {
        $this->object->setFirstName('Вогняна');
        $this->assertEquals('2-Вогняна', $this->object->genderAutoDetect().'-Вогняна');
    }
    public function testGenDetect592()
    {
        $this->object->setFirstName('Волелюба');
        $this->assertEquals('2-Волелюба', $this->object->genderAutoDetect().'-Волелюба');
    }
    public function testGenDetect593()
    {
        $this->object->setFirstName('Володимира');
        $this->assertEquals('2-Володимира', $this->object->genderAutoDetect().'-Володимира');
    }
    public function testGenDetect594()
    {
        $this->object->setFirstName('Волошка');
        $this->assertEquals('2-Волошка', $this->object->genderAutoDetect().'-Волошка');
    }
    public function testGenDetect595()
    {
        $this->object->setFirstName('Воля');
        $this->assertEquals('2-Воля', $this->object->genderAutoDetect().'-Воля');
    }
    public function testGenDetect596()
    {
        $this->object->setFirstName('Всеволода');
        $this->assertEquals('2-Всеволода', $this->object->genderAutoDetect().'-Всеволода');
    }
    public function testGenDetect597()
    {
        $this->object->setFirstName('Вселюба');
        $this->assertEquals('2-Вселюба', $this->object->genderAutoDetect().'-Вселюба');
    }
    public function testGenDetect598()
    {
        $this->object->setFirstName('Всемира');
        $this->assertEquals('2-Всемира', $this->object->genderAutoDetect().'-Всемира');
    }
    public function testGenDetect599()
    {
        $this->object->setFirstName('Всеслава');
        $this->assertEquals('2-Всеслава', $this->object->genderAutoDetect().'-Всеслава');
    }
    public function testGenDetect600()
    {
        $this->object->setFirstName('В’ячеслава');
        $this->assertEquals('2-В’ячеслава', $this->object->genderAutoDetect().'-В’ячеслава');
    }
    public function testGenDetect601()
    {
        $this->object->setFirstName('Гаїна');
        $this->assertEquals('2-Гаїна', $this->object->genderAutoDetect().'-Гаїна');
    }
    public function testGenDetect602()
    {
        $this->object->setFirstName('Гатусила');
        $this->assertEquals('2-Гатусила', $this->object->genderAutoDetect().'-Гатусила');
    }
    public function testGenDetect603()
    {
        $this->object->setFirstName('Гарнослава');
        $this->assertEquals('2-Гарнослава', $this->object->genderAutoDetect().'-Гарнослава');
    }
    public function testGenDetect604()
    {
        $this->object->setFirstName('Голубка');
        $this->assertEquals('2-Голубка', $this->object->genderAutoDetect().'-Голубка');
    }
    public function testGenDetect605()
    {
        $this->object->setFirstName('Горигляда');
        $this->assertEquals('2-Горигляда', $this->object->genderAutoDetect().'-Горигляда');
    }
    public function testGenDetect606()
    {
        $this->object->setFirstName('Горислава');
        $this->assertEquals('2-Горислава', $this->object->genderAutoDetect().'-Горислава');
    }
    public function testGenDetect607()
    {
        $this->object->setFirstName('Городислава');
        $this->assertEquals('2-Городислава', $this->object->genderAutoDetect().'-Городислава');
    }
    public function testGenDetect608()
    {
        $this->object->setFirstName('Гострозора');
        $this->assertEquals('2-Гострозора', $this->object->genderAutoDetect().'-Гострозора');
    }
    public function testGenDetect609()
    {
        $this->object->setFirstName('Градислава');
        $this->assertEquals('2-Градислава', $this->object->genderAutoDetect().'-Градислава');
    }
    public function testGenDetect610()
    {
        $this->object->setFirstName('Гранислава');
        $this->assertEquals('2-Гранислава', $this->object->genderAutoDetect().'-Гранислава');
    }
    public function testGenDetect611()
    {
        $this->object->setFirstName('Гремислава');
        $this->assertEquals('2-Гремислава', $this->object->genderAutoDetect().'-Гремислава');
    }
    public function testGenDetect612()
    {
        $this->object->setFirstName('Далібора');
        $this->assertEquals('2-Далібора', $this->object->genderAutoDetect().'-Далібора');
    }
    public function testGenDetect613()
    {
        $this->object->setFirstName('Дана');
        $this->assertEquals('2-Дана', $this->object->genderAutoDetect().'-Дана');
    }
    public function testGenDetect614()
    {
        $this->object->setFirstName('Дарина');
        $this->assertEquals('2-Дарина', $this->object->genderAutoDetect().'-Дарина');
    }
    public function testGenDetect615()
    {
        $this->object->setFirstName('Дзвенимира');
        $this->assertEquals('2-Дзвенимира', $this->object->genderAutoDetect().'-Дзвенимира');
    }
    public function testGenDetect616()
    {
        $this->object->setFirstName('Дзвенислава');
        $this->assertEquals('2-Дзвенислава', $this->object->genderAutoDetect().'-Дзвенислава');
    }
    public function testGenDetect617()
    {
        $this->object->setFirstName('Дзвінка');
        $this->assertEquals('2-Дзвінка', $this->object->genderAutoDetect().'-Дзвінка');
    }
    public function testGenDetect618()
    {
        $this->object->setFirstName('Діяна');
        $this->assertEquals('2-Діяна', $this->object->genderAutoDetect().'-Діяна');
    }
    public function testGenDetect619()
    {
        $this->object->setFirstName('Добринка');
        $this->assertEquals('2-Добринка', $this->object->genderAutoDetect().'-Добринка');
    }
    public function testGenDetect620()
    {
        $this->object->setFirstName('Добровіста');
        $this->assertEquals('2-Добровіста', $this->object->genderAutoDetect().'-Добровіста');
    }
    public function testGenDetect621()
    {
        $this->object->setFirstName('Доброгніва');
        $this->assertEquals('2-Доброгніва', $this->object->genderAutoDetect().'-Доброгніва');
    }
    public function testGenDetect622()
    {
        $this->object->setFirstName('Добролюба');
        $this->assertEquals('2-Добролюба', $this->object->genderAutoDetect().'-Добролюба');
    }
    public function testGenDetect623()
    {
        $this->object->setFirstName('Добромила');
        $this->assertEquals('2-Добромила', $this->object->genderAutoDetect().'-Добромила');
    }
    public function testGenDetect624()
    {
        $this->object->setFirstName('Добромира');
        $this->assertEquals('2-Добромира', $this->object->genderAutoDetect().'-Добромира');
    }
    public function testGenDetect625()
    {
        $this->object->setFirstName('Доброніга');
        $this->assertEquals('2-Доброніга', $this->object->genderAutoDetect().'-Доброніга');
    }
    public function testGenDetect626()
    {
        $this->object->setFirstName('Доброслава');
        $this->assertEquals('2-Доброслава', $this->object->genderAutoDetect().'-Доброслава');
    }
    public function testGenDetect627()
    {
        $this->object->setFirstName('Долина');
        $this->assertEquals('2-Долина', $this->object->genderAutoDetect().'-Долина');
    }
    public function testGenDetect628()
    {
        $this->object->setFirstName('Доля');
        $this->assertEquals('2-Доля', $this->object->genderAutoDetect().'-Доля');
    }
    public function testGenDetect629()
    {
        $this->object->setFirstName('Домаха');
        $this->assertEquals('2-Домаха', $this->object->genderAutoDetect().'-Домаха');
    }
    public function testGenDetect630()
    {
        $this->object->setFirstName('Доморада');
        $this->assertEquals('2-Доморада', $this->object->genderAutoDetect().'-Доморада');
    }
    public function testGenDetect631()
    {
        $this->object->setFirstName('Дружелюба');
        $this->assertEquals('2-Дружелюба', $this->object->genderAutoDetect().'-Дружелюба');
    }
    public function testGenDetect632()
    {
        $this->object->setFirstName('Жадана');
        $this->assertEquals('2-Жадана', $this->object->genderAutoDetect().'-Жадана');
    }
    public function testGenDetect633()
    {
        $this->object->setFirstName('Ждана');
        $this->assertEquals('2-Ждана', $this->object->genderAutoDetect().'-Ждана');
    }
    public function testGenDetect634()
    {
        $this->object->setFirstName('Живосила');
        $this->assertEquals('2-Живосила', $this->object->genderAutoDetect().'-Живосила');
    }
    public function testGenDetect635()
    {
        $this->object->setFirstName('Живослава');
        $this->assertEquals('2-Живослава', $this->object->genderAutoDetect().'-Живослава');
    }
    public function testGenDetect636()
    {
        $this->object->setFirstName('Житомира');
        $this->assertEquals('2-Житомира', $this->object->genderAutoDetect().'-Житомира');
    }
    public function testGenDetect637()
    {
        $this->object->setFirstName('Життєлюба');
        $this->assertEquals('2-Життєлюба', $this->object->genderAutoDetect().'-Життєлюба');
    }
    public function testGenDetect638()
    {
        $this->object->setFirstName('Забава');
        $this->assertEquals('2-Забава', $this->object->genderAutoDetect().'-Забава');
    }
    public function testGenDetect639()
    {
        $this->object->setFirstName('Звенигора');
        $this->assertEquals('2-Звенигора', $this->object->genderAutoDetect().'-Звенигора');
    }
    public function testGenDetect640()
    {
        $this->object->setFirstName('Звенислава');
        $this->assertEquals('2-Звенислава', $this->object->genderAutoDetect().'-Звенислава');
    }
    public function testGenDetect641()
    {
        $this->object->setFirstName('Звонимира');
        $this->assertEquals('2-Звонимира', $this->object->genderAutoDetect().'-Звонимира');
    }
    public function testGenDetect642()
    {
        $this->object->setFirstName('Зірка');
        $this->assertEquals('2-Зірка', $this->object->genderAutoDetect().'-Зірка');
    }
    public function testGenDetect643()
    {
        $this->object->setFirstName('Злата');
        $this->assertEquals('2-Злата', $this->object->genderAutoDetect().'-Злата');
    }
    public function testGenDetect644()
    {
        $this->object->setFirstName('Златомира');
        $this->assertEquals('2-Златомира', $this->object->genderAutoDetect().'-Златомира');
    }
    public function testGenDetect645()
    {
        $this->object->setFirstName('Златоуста');
        $this->assertEquals('2-Златоуста', $this->object->genderAutoDetect().'-Златоуста');
    }
    public function testGenDetect646()
    {
        $this->object->setFirstName('Золотодана');
        $this->assertEquals('2-Золотодана', $this->object->genderAutoDetect().'-Золотодана');
    }
    public function testGenDetect647()
    {
        $this->object->setFirstName('Зорегляда');
        $this->assertEquals('2-Зорегляда', $this->object->genderAutoDetect().'-Зорегляда');
    }
    public function testGenDetect648()
    {
        $this->object->setFirstName('Зореслава');
        $this->assertEquals('2-Зореслава', $this->object->genderAutoDetect().'-Зореслава');
    }
    public function testGenDetect649()
    {
        $this->object->setFirstName('Зорина');
        $this->assertEquals('2-Зорина', $this->object->genderAutoDetect().'-Зорина');
    }
    public function testGenDetect650()
    {
        $this->object->setFirstName('Зоря');
        $this->assertEquals('2-Зоря', $this->object->genderAutoDetect().'-Зоря');
    }
    public function testGenDetect651()
    {
        $this->object->setFirstName('Зоряна');
        $this->assertEquals('2-Зоряна', $this->object->genderAutoDetect().'-Зоряна');
    }
    public function testGenDetect652()
    {
        $this->object->setFirstName('Казка');
        $this->assertEquals('2-Казка', $this->object->genderAutoDetect().'-Казка');
    }
    public function testGenDetect653()
    {
        $this->object->setFirstName('Калина');
        $this->assertEquals('2-Калина', $this->object->genderAutoDetect().'-Калина');
    }
    public function testGenDetect654()
    {
        $this->object->setFirstName('Квітка');
        $this->assertEquals('2-Квітка', $this->object->genderAutoDetect().'-Квітка');
    }
    public function testGenDetect655()
    {
        $this->object->setFirstName('Колодара');
        $this->assertEquals('2-Колодара', $this->object->genderAutoDetect().'-Колодара');
    }
    public function testGenDetect656()
    {
        $this->object->setFirstName('Красава');
        $this->assertEquals('2-Красава', $this->object->genderAutoDetect().'-Красава');
    }
    public function testGenDetect657()
    {
        $this->object->setFirstName('Красимира');
        $this->assertEquals('2-Красимира', $this->object->genderAutoDetect().'-Красимира');
    }
    public function testGenDetect658()
    {
        $this->object->setFirstName('Красновида');
        $this->assertEquals('2-Красновида', $this->object->genderAutoDetect().'-Красновида');
    }
    public function testGenDetect659()
    {
        $this->object->setFirstName('Краснолика');
        $this->assertEquals('2-Краснолика', $this->object->genderAutoDetect().'-Краснолика');
    }
    public function testGenDetect660()
    {
        $this->object->setFirstName('Красуня');
        $this->assertEquals('2-Красуня', $this->object->genderAutoDetect().'-Красуня');
    }
    public function testGenDetect661()
    {
        $this->object->setFirstName('Купава');
        $this->assertEquals('2-Купава', $this->object->genderAutoDetect().'-Купава');
    }
    public function testGenDetect662()
    {
        $this->object->setFirstName('Лада');
        $this->assertEquals('2-Лада', $this->object->genderAutoDetect().'-Лада');
    }
    public function testGenDetect663()
    {
        $this->object->setFirstName('Ладислава');
        $this->assertEquals('2-Ладислава', $this->object->genderAutoDetect().'-Ладислава');
    }
    public function testGenDetect664()
    {
        $this->object->setFirstName('Ладомила');
        $this->assertEquals('2-Ладомила', $this->object->genderAutoDetect().'-Ладомила');
    }
    public function testGenDetect665()
    {
        $this->object->setFirstName('Ладомира');
        $this->assertEquals('2-Ладомира', $this->object->genderAutoDetect().'-Ладомира');
    }
    public function testGenDetect666()
    {
        $this->object->setFirstName('Левина');
        $this->assertEquals('2-Левина', $this->object->genderAutoDetect().'-Левина');
    }
    public function testGenDetect667()
    {
        $this->object->setFirstName('Лель');
        $this->assertEquals('2-Лель', $this->object->genderAutoDetect().'-Лель');
    }
    public function testGenDetect668()
    {
        $this->object->setFirstName('Леля');
        $this->assertEquals('2-Леля', $this->object->genderAutoDetect().'-Леля');
    }
    public function testGenDetect669()
    {
        $this->object->setFirstName('Леся');
        $this->assertEquals('2-Леся', $this->object->genderAutoDetect().'-Леся');
    }
    public function testGenDetect670()
    {
        $this->object->setFirstName('Либідь');
        $this->assertEquals('2-Либідь', $this->object->genderAutoDetect().'-Либідь');
    }
    public function testGenDetect671()
    {
        $this->object->setFirstName('Лілея');
        $this->assertEquals('2-Лілея', $this->object->genderAutoDetect().'-Лілея');
    }
    public function testGenDetect672()
    {
        $this->object->setFirstName('Лоліта');
        $this->assertEquals('2-Лоліта', $this->object->genderAutoDetect().'-Лоліта');
    }
    public function testGenDetect673()
    {
        $this->object->setFirstName('Любава');
        $this->assertEquals('2-Любава', $this->object->genderAutoDetect().'-Любава');
    }
    public function testGenDetect674()
    {
        $this->object->setFirstName('Любаня');
        $this->assertEquals('2-Любаня', $this->object->genderAutoDetect().'-Любаня');
    }
    public function testGenDetect675()
    {
        $this->object->setFirstName('Любислава');
        $this->assertEquals('2-Любислава', $this->object->genderAutoDetect().'-Любислава');
    }
    public function testGenDetect676()
    {
        $this->object->setFirstName('Любов');
        $this->assertEquals('2-Любов', $this->object->genderAutoDetect().'-Любов');
    }
    public function testGenDetect677()
    {
        $this->object->setFirstName('Любомила');
        $this->assertEquals('2-Любомила', $this->object->genderAutoDetect().'-Любомила');
    }
    public function testGenDetect678()
    {
        $this->object->setFirstName('Любомира');
        $this->assertEquals('2-Любомира', $this->object->genderAutoDetect().'-Любомира');
    }
    public function testGenDetect679()
    {
        $this->object->setFirstName('Люборада');
        $this->assertEquals('2-Люборада', $this->object->genderAutoDetect().'-Люборада');
    }
    public function testGenDetect680()
    {
        $this->object->setFirstName('Людмила');
        $this->assertEquals('2-Людмила', $this->object->genderAutoDetect().'-Людмила');
    }
    public function testGenDetect681()
    {
        $this->object->setFirstName('Людомила');
        $this->assertEquals('2-Людомила', $this->object->genderAutoDetect().'-Людомила');
    }
    public function testGenDetect682()
    {
        $this->object->setFirstName('Любослава');
        $this->assertEquals('2-Любослава', $this->object->genderAutoDetect().'-Любослава');
    }
    public function testGenDetect683()
    {
        $this->object->setFirstName('Льоля');
        $this->assertEquals('2-Льоля', $this->object->genderAutoDetect().'-Льоля');
    }
    public function testGenDetect684()
    {
        $this->object->setFirstName('Мавка');
        $this->assertEquals('2-Мавка', $this->object->genderAutoDetect().'-Мавка');
    }
    public function testGenDetect685()
    {
        $this->object->setFirstName('Магадара');
        $this->assertEquals('2-Магадара', $this->object->genderAutoDetect().'-Магадара');
    }
    public function testGenDetect686()
    {
        $this->object->setFirstName('Маїна');
        $this->assertEquals('2-Маїна', $this->object->genderAutoDetect().'-Маїна');
    }
    public function testGenDetect687()
    {
        $this->object->setFirstName('Маківка');
        $this->assertEquals('2-Маківка', $this->object->genderAutoDetect().'-Маківка');
    }
    public function testGenDetect688()
    {
        $this->object->setFirstName('Малуня');
        $this->assertEquals('2-Малуня', $this->object->genderAutoDetect().'-Малуня');
    }
    public function testGenDetect689()
    {
        $this->object->setFirstName('Малуша');
        $this->assertEquals('2-Малуша', $this->object->genderAutoDetect().'-Малуша');
    }
    public function testGenDetect690()
    {
        $this->object->setFirstName('Мальва');
        $this->assertEquals('2-Мальва', $this->object->genderAutoDetect().'-Мальва');
    }
    public function testGenDetect691()
    {
        $this->object->setFirstName('Марута');
        $this->assertEquals('2-Марута', $this->object->genderAutoDetect().'-Марута');
    }
    public function testGenDetect692()
    {
        $this->object->setFirstName('Мая');
        $this->assertEquals('2-Мая', $this->object->genderAutoDetect().'-Мая');
    }
    public function testGenDetect693()
    {
        $this->object->setFirstName('Медорада');
        $this->assertEquals('2-Медорада', $this->object->genderAutoDetect().'-Медорада');
    }
    public function testGenDetect694()
    {
        $this->object->setFirstName('Мечислава');
        $this->assertEquals('2-Мечислава', $this->object->genderAutoDetect().'-Мечислава');
    }
    public function testGenDetect695()
    {
        $this->object->setFirstName('Милана');
        $this->assertEquals('2-Милана', $this->object->genderAutoDetect().'-Милана');
    }
    public function testGenDetect696()
    {
        $this->object->setFirstName('Милована');
        $this->assertEquals('2-Милована', $this->object->genderAutoDetect().'-Милована');
    }
    public function testGenDetect697()
    {
        $this->object->setFirstName('Миловида');
        $this->assertEquals('2-Миловида', $this->object->genderAutoDetect().'-Миловида');
    }
    public function testGenDetect698()
    {
        $this->object->setFirstName('Милодара');
        $this->assertEquals('2-Милодара', $this->object->genderAutoDetect().'-Милодара');
    }
    public function testGenDetect699()
    {
        $this->object->setFirstName('Милослава');
        $this->assertEquals('2-Милослава', $this->object->genderAutoDetect().'-Милослава');
    }
    public function testGenDetect700()
    {
        $this->object->setFirstName('Мирана');
        $this->assertEquals('2-Мирана', $this->object->genderAutoDetect().'-Мирана');
    }
    public function testGenDetect701()
    {
        $this->object->setFirstName('Миробога');
        $this->assertEquals('2-Миробога', $this->object->genderAutoDetect().'-Миробога');
    }
    public function testGenDetect702()
    {
        $this->object->setFirstName('Миролюба');
        $this->assertEquals('2-Миролюба', $this->object->genderAutoDetect().'-Миролюба');
    }
    public function testGenDetect703()
    {
        $this->object->setFirstName('Мирослава');
        $this->assertEquals('2-Мирослава', $this->object->genderAutoDetect().'-Мирослава');
    }
    public function testGenDetect704()
    {
        $this->object->setFirstName('Млада');
        $this->assertEquals('2-Млада', $this->object->genderAutoDetect().'-Млада');
    }
    public function testGenDetect705()
    {
        $this->object->setFirstName('Мокрина');
        $this->assertEquals('2-Мокрина', $this->object->genderAutoDetect().'-Мокрина');
    }
    public function testGenDetect706()
    {
        $this->object->setFirstName('Мстислава');
        $this->assertEquals('2-Мстислава', $this->object->genderAutoDetect().'-Мстислава');
    }
    public function testGenDetect707()
    {
        $this->object->setFirstName('Мудролюба');
        $this->assertEquals('2-Мудролюба', $this->object->genderAutoDetect().'-Мудролюба');
    }
    public function testGenDetect708()
    {
        $this->object->setFirstName('Надія');
        $this->assertEquals('2-Надія', $this->object->genderAutoDetect().'-Надія');
    }
    public function testGenDetect709()
    {
        $this->object->setFirstName('Найда');
        $this->assertEquals('2-Найда', $this->object->genderAutoDetect().'-Найда');
    }
    public function testGenDetect710()
    {
        $this->object->setFirstName('Найдена');
        $this->assertEquals('2-Найдена', $this->object->genderAutoDetect().'-Найдена');
    }
    public function testGenDetect711()
    {
        $this->object->setFirstName('Наслава');
        $this->assertEquals('2-Наслава', $this->object->genderAutoDetect().'-Наслава');
    }
    public function testGenDetect712()
    {
        $this->object->setFirstName('Немира');
        $this->assertEquals('2-Немира', $this->object->genderAutoDetect().'-Немира');
    }
    public function testGenDetect713()
    {
        $this->object->setFirstName('Нігослава');
        $this->assertEquals('2-Нігослава', $this->object->genderAutoDetect().'-Нігослава');
    }
    public function testGenDetect714()
    {
        $this->object->setFirstName('Незабудка');
        $this->assertEquals('2-Незабудка', $this->object->genderAutoDetect().'-Незабудка');
    }
    public function testGenDetect715()
    {
        $this->object->setFirstName('Огняна');
        $this->assertEquals('2-Огняна', $this->object->genderAutoDetect().'-Огняна');
    }
    public function testGenDetect716()
    {
        $this->object->setFirstName('Оримира');
        $this->assertEquals('2-Оримира', $this->object->genderAutoDetect().'-Оримира');
    }
    public function testGenDetect717()
    {
        $this->object->setFirstName('Орина');
        $this->assertEquals('2-Орина', $this->object->genderAutoDetect().'-Орина');
    }
    public function testGenDetect718()
    {
        $this->object->setFirstName('Орислава');
        $this->assertEquals('2-Орислава', $this->object->genderAutoDetect().'-Орислава');
    }
    public function testGenDetect719()
    {
        $this->object->setFirstName('Орися');
        $this->assertEquals('2-Орися', $this->object->genderAutoDetect().'-Орися');
    }
    public function testGenDetect720()
    {
        $this->object->setFirstName('Оріяна');
        $this->assertEquals('2-Оріяна', $this->object->genderAutoDetect().'-Оріяна');
    }
    public function testGenDetect721()
    {
        $this->object->setFirstName('Орогоста');
        $this->assertEquals('2-Орогоста', $this->object->genderAutoDetect().'-Орогоста');
    }
    public function testGenDetect722()
    {
        $this->object->setFirstName('Острозора');
        $this->assertEquals('2-Острозора', $this->object->genderAutoDetect().'-Острозора');
    }
    public function testGenDetect723()
    {
        $this->object->setFirstName('Остромира');
        $this->assertEquals('2-Остромира', $this->object->genderAutoDetect().'-Остромира');
    }
    public function testGenDetect724()
    {
        $this->object->setFirstName('Осмомисла');
        $this->assertEquals('2-Осмомисла', $this->object->genderAutoDetect().'-Осмомисла');
    }
    public function testGenDetect725()
    {
        $this->object->setFirstName('Остромова');
        $this->assertEquals('2-Остромова', $this->object->genderAutoDetect().'-Остромова');
    }
    public function testGenDetect726()
    {
        $this->object->setFirstName('Пава');
        $this->assertEquals('2-Пава', $this->object->genderAutoDetect().'-Пава');
    }
    public function testGenDetect727()
    {
        $this->object->setFirstName('Палажка');
        $this->assertEquals('2-Палажка', $this->object->genderAutoDetect().'-Палажка');
    }
    public function testGenDetect728()
    {
        $this->object->setFirstName('Палазга');
        $this->assertEquals('2-Палазга', $this->object->genderAutoDetect().'-Палазга');
    }
    public function testGenDetect729()
    {
        $this->object->setFirstName('Перелюба');
        $this->assertEquals('2-Перелюба', $this->object->genderAutoDetect().'-Перелюба');
    }
    public function testGenDetect730()
    {
        $this->object->setFirstName('Перемила');
        $this->assertEquals('2-Перемила', $this->object->genderAutoDetect().'-Перемила');
    }
    public function testGenDetect731()
    {
        $this->object->setFirstName('Перемисла');
        $this->assertEquals('2-Перемисла', $this->object->genderAutoDetect().'-Перемисла');
    }
    public function testGenDetect732()
    {
        $this->object->setFirstName('Півонія');
        $this->assertEquals('2-Півонія', $this->object->genderAutoDetect().'-Півонія');
    }
    public function testGenDetect733()
    {
        $this->object->setFirstName('Позвізда');
        $this->assertEquals('2-Позвізда', $this->object->genderAutoDetect().'-Позвізда');
    }
    public function testGenDetect734()
    {
        $this->object->setFirstName('Полеза');
        $this->assertEquals('2-Полеза', $this->object->genderAutoDetect().'-Полеза');
    }
    public function testGenDetect735()
    {
        $this->object->setFirstName('Поляна');
        $this->assertEquals('2-Поляна', $this->object->genderAutoDetect().'-Поляна');
    }
    public function testGenDetect736()
    {
        $this->object->setFirstName('Потішана');
        $this->assertEquals('2-Потішана', $this->object->genderAutoDetect().'-Потішана');
    }
    public function testGenDetect737()
    {
        $this->object->setFirstName('Предслава');
        $this->assertEquals('2-Предслава', $this->object->genderAutoDetect().'-Предслава');
    }
    public function testGenDetect738()
    {
        $this->object->setFirstName('Рада');
        $this->assertEquals('2-Рада', $this->object->genderAutoDetect().'-Рада');
    }
    public function testGenDetect739()
    {
        $this->object->setFirstName('Радана');
        $this->assertEquals('2-Радана', $this->object->genderAutoDetect().'-Радана');
    }
    public function testGenDetect740()
    {
        $this->object->setFirstName('Радимира');
        $this->assertEquals('2-Радимира', $this->object->genderAutoDetect().'-Радимира');
    }
    public function testGenDetect741()
    {
        $this->object->setFirstName('Радогоста');
        $this->assertEquals('2-Радогоста', $this->object->genderAutoDetect().'-Радогоста');
    }
    public function testGenDetect742()
    {
        $this->object->setFirstName('Радомира');
        $this->assertEquals('2-Радомира', $this->object->genderAutoDetect().'-Радомира');
    }
    public function testGenDetect743()
    {
        $this->object->setFirstName('Радослава');
        $this->assertEquals('2-Радослава', $this->object->genderAutoDetect().'-Радослава');
    }
    public function testGenDetect744()
    {
        $this->object->setFirstName('Рідна');
        $this->assertEquals('2-Рідна', $this->object->genderAutoDetect().'-Рідна');
    }
    public function testGenDetect745()
    {
        $this->object->setFirstName('Рогволода');
        $this->assertEquals('2-Рогволода', $this->object->genderAutoDetect().'-Рогволода');
    }
    public function testGenDetect746()
    {
        $this->object->setFirstName('Рогніда');
        $this->assertEquals('2-Рогніда', $this->object->genderAutoDetect().'-Рогніда');
    }
    public function testGenDetect747()
    {
        $this->object->setFirstName('Родослава');
        $this->assertEquals('2-Родослава', $this->object->genderAutoDetect().'-Родослава');
    }
    public function testGenDetect748()
    {
        $this->object->setFirstName('Рожана');
        $this->assertEquals('2-Рожана', $this->object->genderAutoDetect().'-Рожана');
    }
    public function testGenDetect749()
    {
        $this->object->setFirstName('Роксолана');
        $this->assertEquals('2-Роксолана', $this->object->genderAutoDetect().'-Роксолана');
    }
    public function testGenDetect750()
    {
        $this->object->setFirstName('Ромашка');
        $this->assertEquals('2-Ромашка', $this->object->genderAutoDetect().'-Ромашка');
    }
    public function testGenDetect751()
    {
        $this->object->setFirstName('Росава');
        $this->assertEquals('2-Росава', $this->object->genderAutoDetect().'-Росава');
    }
    public function testGenDetect752()
    {
        $this->object->setFirstName('Росина');
        $this->assertEquals('2-Росина', $this->object->genderAutoDetect().'-Росина');
    }
    public function testGenDetect753()
    {
        $this->object->setFirstName('Ростислава');
        $this->assertEquals('2-Ростислава', $this->object->genderAutoDetect().'-Ростислава');
    }
    public function testGenDetect754()
    {
        $this->object->setFirstName('Ростичара');
        $this->assertEquals('2-Ростичара', $this->object->genderAutoDetect().'-Ростичара');
    }
    public function testGenDetect755()
    {
        $this->object->setFirstName('Ростуня');
        $this->assertEquals('2-Ростуня', $this->object->genderAutoDetect().'-Ростуня');
    }
    public function testGenDetect756()
    {
        $this->object->setFirstName('Рудана');
        $this->assertEquals('2-Рудана', $this->object->genderAutoDetect().'-Рудана');
    }
    public function testGenDetect757()
    {
        $this->object->setFirstName('Ружа');
        $this->assertEquals('2-Ружа', $this->object->genderAutoDetect().'-Ружа');
    }
    public function testGenDetect758()
    {
        $this->object->setFirstName('Русана');
        $this->assertEquals('2-Русана', $this->object->genderAutoDetect().'-Русана');
    }
    public function testGenDetect759()
    {
        $this->object->setFirstName('Русудана');
        $this->assertEquals('2-Русудана', $this->object->genderAutoDetect().'-Русудана');
    }
    public function testGenDetect760()
    {
        $this->object->setFirstName('Русява');
        $this->assertEquals('2-Русява', $this->object->genderAutoDetect().'-Русява');
    }
    public function testGenDetect761()
    {
        $this->object->setFirstName('Русявка');
        $this->assertEquals('2-Русявка', $this->object->genderAutoDetect().'-Русявка');
    }
    public function testGenDetect762()
    {
        $this->object->setFirstName('Рута');
        $this->assertEquals('2-Рута', $this->object->genderAutoDetect().'-Рута');
    }
    public function testGenDetect763()
    {
        $this->object->setFirstName('Світана');
        $this->assertEquals('2-Світана', $this->object->genderAutoDetect().'-Світана');
    }
    public function testGenDetect764()
    {
        $this->object->setFirstName('Світлана');
        $this->assertEquals('2-Світлана', $this->object->genderAutoDetect().'-Світлана');
    }
    public function testGenDetect765()
    {
        $this->object->setFirstName('Світовида');
        $this->assertEquals('2-Світовида', $this->object->genderAutoDetect().'-Світовида');
    }
    public function testGenDetect766()
    {
        $this->object->setFirstName('Світогора');
        $this->assertEquals('2-Світогора', $this->object->genderAutoDetect().'-Світогора');
    }
    public function testGenDetect767()
    {
        $this->object->setFirstName('Світодара');
        $this->assertEquals('2-Світодара', $this->object->genderAutoDetect().'-Світодара');
    }
    public function testGenDetect768()
    {
        $this->object->setFirstName('Світозара');
        $this->assertEquals('2-Світозара', $this->object->genderAutoDetect().'-Світозара');
    }
    public function testGenDetect769()
    {
        $this->object->setFirstName('Світолика');
        $this->assertEquals('2-Світолика', $this->object->genderAutoDetect().'-Світолика');
    }
    public function testGenDetect770()
    {
        $this->object->setFirstName('Світолюба');
        $this->assertEquals('2-Світолюба', $this->object->genderAutoDetect().'-Світолюба');
    }
    public function testGenDetect771()
    {
        $this->object->setFirstName('Світослава');
        $this->assertEquals('2-Світослава', $this->object->genderAutoDetect().'-Світослава');
    }
    public function testGenDetect772()
    {
        $this->object->setFirstName('Світояра');
        $this->assertEquals('2-Світояра', $this->object->genderAutoDetect().'-Світояра');
    }
    public function testGenDetect773()
    {
        $this->object->setFirstName('Свободана');
        $this->assertEquals('2-Свободана', $this->object->genderAutoDetect().'-Свободана');
    }
    public function testGenDetect774()
    {
        $this->object->setFirstName('Святогора');
        $this->assertEquals('2-Святогора', $this->object->genderAutoDetect().'-Святогора');
    }
    public function testGenDetect775()
    {
        $this->object->setFirstName('Святолюба');
        $this->assertEquals('2-Святолюба', $this->object->genderAutoDetect().'-Святолюба');
    }
    public function testGenDetect776()
    {
        $this->object->setFirstName('Святослава');
        $this->assertEquals('2-Святослава', $this->object->genderAutoDetect().'-Святослава');
    }
    public function testGenDetect777()
    {
        $this->object->setFirstName('Силата');
        $this->assertEquals('2-Силата', $this->object->genderAutoDetect().'-Силата');
    }
    public function testGenDetect778()
    {
        $this->object->setFirstName('Силолюба');
        $this->assertEquals('2-Силолюба', $this->object->genderAutoDetect().'-Силолюба');
    }
    public function testGenDetect779()
    {
        $this->object->setFirstName('Силослава');
        $this->assertEquals('2-Силослава', $this->object->genderAutoDetect().'-Силослава');
    }
    public function testGenDetect780()
    {
        $this->object->setFirstName('Синезора');
        $this->assertEquals('2-Синезора', $this->object->genderAutoDetect().'-Синезора');
    }
    public function testGenDetect781()
    {
        $this->object->setFirstName('Синьоока');
        $this->assertEquals('2-Синьоока', $this->object->genderAutoDetect().'-Синьоока');
    }
    public function testGenDetect782()
    {
        $this->object->setFirstName('Сіверина');
        $this->assertEquals('2-Сіверина', $this->object->genderAutoDetect().'-Сіверина');
    }
    public function testGenDetect783()
    {
        $this->object->setFirstName('Слава');
        $this->assertEquals('2-Слава', $this->object->genderAutoDetect().'-Слава');
    }
    public function testGenDetect784()
    {
        $this->object->setFirstName('Славина');
        $this->assertEquals('2-Славина', $this->object->genderAutoDetect().'-Славина');
    }
    public function testGenDetect785()
    {
        $this->object->setFirstName('Славолюба');
        $this->assertEquals('2-Славолюба', $this->object->genderAutoDetect().'-Славолюба');
    }
    public function testGenDetect786()
    {
        $this->object->setFirstName('Славомила');
        $this->assertEquals('2-Славомила', $this->object->genderAutoDetect().'-Славомила');
    }
    public function testGenDetect787()
    {
        $this->object->setFirstName('Сміяна');
        $this->assertEquals('2-Сміяна', $this->object->genderAutoDetect().'-Сміяна');
    }
    public function testGenDetect788()
    {
        $this->object->setFirstName('Сніжана');
        $this->assertEquals('2-Сніжана', $this->object->genderAutoDetect().'-Сніжана');
    }
    public function testGenDetect789()
    {
        $this->object->setFirstName('Сніжинка');
        $this->assertEquals('2-Сніжинка', $this->object->genderAutoDetect().'-Сніжинка');
    }
    public function testGenDetect790()
    {
        $this->object->setFirstName('Собіслава');
        $this->assertEquals('2-Собіслава', $this->object->genderAutoDetect().'-Собіслава');
    }
    public function testGenDetect791()
    {
        $this->object->setFirstName('Соловія');
        $this->assertEquals('2-Соловія', $this->object->genderAutoDetect().'-Соловія');
    }
    public function testGenDetect792()
    {
        $this->object->setFirstName('Сологуба');
        $this->assertEquals('2-Сологуба', $this->object->genderAutoDetect().'-Сологуба');
    }
    public function testGenDetect793()
    {
        $this->object->setFirstName('Сонцевида');
        $this->assertEquals('2-Сонцевида', $this->object->genderAutoDetect().'-Сонцевида');
    }
    public function testGenDetect794()
    {
        $this->object->setFirstName('Сонцедара');
        $this->assertEquals('2-Сонцедара', $this->object->genderAutoDetect().'-Сонцедара');
    }
    public function testGenDetect795()
    {
        $this->object->setFirstName('Сонцелика');
        $this->assertEquals('2-Сонцелика', $this->object->genderAutoDetect().'-Сонцелика');
    }
    public function testGenDetect796()
    {
        $this->object->setFirstName('Сонцеслава');
        $this->assertEquals('2-Сонцеслава', $this->object->genderAutoDetect().'-Сонцеслава');
    }
    public function testGenDetect797()
    {
        $this->object->setFirstName('Ссанимира');
        $this->assertEquals('2-Ссанимира', $this->object->genderAutoDetect().'-Ссанимира');
    }
    public function testGenDetect798()
    {
        $this->object->setFirstName('Станислава');
        $this->assertEquals('2-Станислава', $this->object->genderAutoDetect().'-Станислава');
    }
    public function testGenDetect799()
    {
        $this->object->setFirstName('Судимира');
        $this->assertEquals('2-Судимира', $this->object->genderAutoDetect().'-Судимира');
    }
    public function testGenDetect800()
    {
        $this->object->setFirstName('Судислава');
        $this->assertEquals('2-Судислава', $this->object->genderAutoDetect().'-Судислава');
    }
    public function testGenDetect801()
    {
        $this->object->setFirstName('Татолюба');
        $this->assertEquals('2-Татолюба', $this->object->genderAutoDetect().'-Татолюба');
    }
    public function testGenDetect802()
    {
        $this->object->setFirstName('Твердислава');
        $this->assertEquals('2-Твердислава', $this->object->genderAutoDetect().'-Твердислава');
    }
    public function testGenDetect803()
    {
        $this->object->setFirstName('Твердогоста');
        $this->assertEquals('2-Твердогоста', $this->object->genderAutoDetect().'-Твердогоста');
    }
    public function testGenDetect804()
    {
        $this->object->setFirstName('Творимира');
        $this->assertEquals('2-Творимира', $this->object->genderAutoDetect().'-Творимира');
    }
    public function testGenDetect805()
    {
        $this->object->setFirstName('Творислава');
        $this->assertEquals('2-Творислава', $this->object->genderAutoDetect().'-Творислава');
    }
    public function testGenDetect806()
    {
        $this->object->setFirstName('Толигніва');
        $this->assertEquals('2-Толигніва', $this->object->genderAutoDetect().'-Толигніва');
    }
    public function testGenDetect807()
    {
        $this->object->setFirstName('Тонкостана');
        $this->assertEquals('2-Тонкостана', $this->object->genderAutoDetect().'-Тонкостана');
    }
    public function testGenDetect808()
    {
        $this->object->setFirstName('Трояна');
        $this->assertEquals('2-Трояна', $this->object->genderAutoDetect().'-Трояна');
    }
    public function testGenDetect809()
    {
        $this->object->setFirstName('Хвала');
        $this->assertEquals('2-Хвала', $this->object->genderAutoDetect().'-Хвала');
    }
    public function testGenDetect810()
    {
        $this->object->setFirstName('Хвалибого');
        $this->assertEquals('2-Хвалибого', $this->object->genderAutoDetect().'-Хвалибого');
    }
    public function testGenDetect811()
    {
        $this->object->setFirstName('Хвалимира');
        $this->assertEquals('2-Хвалимира', $this->object->genderAutoDetect().'-Хвалимира');
    }
    public function testGenDetect812()
    {
        $this->object->setFirstName('Хвалина');
        $this->assertEquals('2-Хвалина', $this->object->genderAutoDetect().'-Хвалина');
    }
    public function testGenDetect813()
    {
        $this->object->setFirstName('Хорошка');
        $this->assertEquals('2-Хорошка', $this->object->genderAutoDetect().'-Хорошка');
    }
    public function testGenDetect814()
    {
        $this->object->setFirstName('Хорошуня');
        $this->assertEquals('2-Хорошуня', $this->object->genderAutoDetect().'-Хорошуня');
    }
    public function testGenDetect815()
    {
        $this->object->setFirstName('Хотимра');
        $this->assertEquals('2-Хотимра', $this->object->genderAutoDetect().'-Хотимра');
    }
    public function testGenDetect816()
    {
        $this->object->setFirstName('Хотяна');
        $this->assertEquals('2-Хотяна', $this->object->genderAutoDetect().'-Хотяна');
    }
    public function testGenDetect817()
    {
        $this->object->setFirstName('Хранимира');
        $this->assertEquals('2-Хранимира', $this->object->genderAutoDetect().'-Хранимира');
    }
    public function testGenDetect818()
    {
        $this->object->setFirstName('Худана');
        $this->assertEquals('2-Худана', $this->object->genderAutoDetect().'-Худана');
    }
    public function testGenDetect819()
    {
        $this->object->setFirstName('Цвітана');
        $this->assertEquals('2-Цвітана', $this->object->genderAutoDetect().'-Цвітана');
    }
    public function testGenDetect820()
    {
        $this->object->setFirstName('Чайка');
        $this->assertEquals('2-Чайка', $this->object->genderAutoDetect().'-Чайка');
    }
    public function testGenDetect821()
    {
        $this->object->setFirstName('Чарівна');
        $this->assertEquals('2-Чарівна', $this->object->genderAutoDetect().'-Чарівна');
    }
    public function testGenDetect822()
    {
        $this->object->setFirstName('Чарівниця');
        $this->assertEquals('2-Чарівниця', $this->object->genderAutoDetect().'-Чарівниця');
    }
    public function testGenDetect823()
    {
        $this->object->setFirstName('Чаруна');
        $this->assertEquals('2-Чаруна', $this->object->genderAutoDetect().'-Чаруна');
    }
    public function testGenDetect824()
    {
        $this->object->setFirstName('Чеслава');
        $this->assertEquals('2-Чеслава', $this->object->genderAutoDetect().'-Чеслава');
    }
    public function testGenDetect825()
    {
        $this->object->setFirstName('Ява');
        $this->assertEquals('2-Ява', $this->object->genderAutoDetect().'-Ява');
    }
    public function testGenDetect826()
    {
        $this->object->setFirstName('Яворина');
        $this->assertEquals('2-Яворина', $this->object->genderAutoDetect().'-Яворина');
    }
    public function testGenDetect827()
    {
        $this->object->setFirstName('Ялина');
        $this->assertEquals('2-Ялина', $this->object->genderAutoDetect().'-Ялина');
    }
    public function testGenDetect828()
    {
        $this->object->setFirstName('Ярина');
        $this->assertEquals('2-Ярина', $this->object->genderAutoDetect().'-Ярина');
    }
    public function testGenDetect829()
    {
        $this->object->setFirstName('Яромила');
        $this->assertEquals('2-Яромила', $this->object->genderAutoDetect().'-Яромила');
    }
    public function testGenDetect830()
    {
        $this->object->setFirstName('Яромира');
        $this->assertEquals('2-Яромира', $this->object->genderAutoDetect().'-Яромира');
    }
    public function testGenDetect831()
    {
        $this->object->setFirstName('Ярослава');
        $this->assertEquals('2-Ярослава', $this->object->genderAutoDetect().'-Ярослава');
    }
    public function testGenDetect832()
    {
        $this->object->setFirstName('Ясна');
        $this->assertEquals('2-Ясна', $this->object->genderAutoDetect().'-Ясна');
    }
    public function testGenDetect833()
    {
        $this->object->setFirstName('Ясновида');
        $this->assertEquals('2-Ясновида', $this->object->genderAutoDetect().'-Ясновида');
    }
    public function testGenDetect834()
    {
        $this->object->setFirstName('Ясногора');
        $this->assertEquals('2-Ясногора', $this->object->genderAutoDetect().'-Ясногора');
    }
    public function testGenDetect835()
    {
        $this->object->setFirstName('Яснолика');
        $this->assertEquals('2-Яснолика', $this->object->genderAutoDetect().'-Яснолика');
    }
    public function testGenDetect836()
    {
        $this->object->setFirstName('Яснослава');
        $this->assertEquals('2-Яснослава', $this->object->genderAutoDetect().'-Яснослава');
    }

}