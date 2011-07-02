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
        $this->assertEquals('N-Аарон', $this->object->splitFullName('Аарон').'-Аарон');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('N-Абакум', $this->object->splitFullName('Абакум').'-Абакум');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('N-Абрам', $this->object->splitFullName('Абрам').'-Абрам');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('N-Августин', $this->object->splitFullName('Августин').'-Августин');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('N-Авесалом', $this->object->splitFullName('Авесалом').'-Авесалом');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('N-Авксентій', $this->object->splitFullName('Авксентій').'-Авксентій');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('N-Аврелій', $this->object->splitFullName('Аврелій').'-Аврелій');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('N-Автоном', $this->object->splitFullName('Автоном').'-Автоном');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('N-Адам', $this->object->splitFullName('Адам').'-Адам');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('N-Адріян', $this->object->splitFullName('Адріян').'-Адріян');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('N-Адріан', $this->object->splitFullName('Адріан').'-Адріан');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('N-Азар', $this->object->splitFullName('Азар').'-Азар');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('N-Алевтин', $this->object->splitFullName('Алевтин').'-Алевтин');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('N-Альберт', $this->object->splitFullName('Альберт').'-Альберт');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('N-Амвросій', $this->object->splitFullName('Амвросій').'-Амвросій');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('N-Амнон', $this->object->splitFullName('Амнон').'-Амнон');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('N-Амос', $this->object->splitFullName('Амос').'-Амос');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('N-Анастас', $this->object->splitFullName('Анастас').'-Анастас');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('N-Анастасій', $this->object->splitFullName('Анастасій').'-Анастасій');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('N-Андрій', $this->object->splitFullName('Андрій').'-Андрій');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('N-Антоній', $this->object->splitFullName('Антоній').'-Антоній');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('N-Антон', $this->object->splitFullName('Антон').'-Антон');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('N-Анісій', $this->object->splitFullName('Анісій').'-Анісій');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('N-Аркадій', $this->object->splitFullName('Аркадій').'-Аркадій');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('N-Арсен', $this->object->splitFullName('Арсен').'-Арсен');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('N-Арсеній', $this->object->splitFullName('Арсеній').'-Арсеній');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('N-Артем', $this->object->splitFullName('Артем').'-Артем');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('N-Архип', $this->object->splitFullName('Архип').'-Архип');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('N-Атанас', $this->object->splitFullName('Атанас').'-Атанас');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('N-Аскольд', $this->object->splitFullName('Аскольд').'-Аскольд');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('N-Бажан', $this->object->splitFullName('Бажан').'-Бажан');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('N-Біловид', $this->object->splitFullName('Біловид').'-Біловид');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('N-Білогост', $this->object->splitFullName('Білогост').'-Білогост');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('N-Біломир', $this->object->splitFullName('Біломир').'-Біломир');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('N-Білослав', $this->object->splitFullName('Білослав').'-Білослав');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('N-Білотур', $this->object->splitFullName('Білотур').'-Білотур');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('N-Білян', $this->object->splitFullName('Білян').'-Білян');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('N-Благовид', $this->object->splitFullName('Благовид').'-Благовид');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('N-Благовіст', $this->object->splitFullName('Благовіст').'-Благовіст');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('N-Благодар', $this->object->splitFullName('Благодар').'-Благодар');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('N-Благодат', $this->object->splitFullName('Благодат').'-Благодат');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('N-Благомир', $this->object->splitFullName('Благомир').'-Благомир');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('N-Благослав', $this->object->splitFullName('Благослав').'-Благослав');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('N-Богдан', $this->object->splitFullName('Богдан').'-Богдан');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('N-Боговір', $this->object->splitFullName('Боговір').'-Боговір');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('N-Боговіст', $this->object->splitFullName('Боговіст').'-Боговіст');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('N-Богодар', $this->object->splitFullName('Богодар').'-Богодар');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('N-Боголад', $this->object->splitFullName('Боголад').'-Боголад');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('N-Боголіп', $this->object->splitFullName('Боголіп').'-Боголіп');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('N-Боголюб', $this->object->splitFullName('Боголюб').'-Боголюб');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('N-Богород', $this->object->splitFullName('Богород').'-Богород');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('N-Богосвят', $this->object->splitFullName('Богосвят').'-Богосвят');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('N-Богумил', $this->object->splitFullName('Богумил').'-Богумил');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('N-Богумир', $this->object->splitFullName('Богумир').'-Богумир');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('N-Богуслав', $this->object->splitFullName('Богуслав').'-Богуслав');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('N-Бож', $this->object->splitFullName('Бож').'-Бож');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('N-Божан', $this->object->splitFullName('Божан').'-Божан');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('N-Божедар', $this->object->splitFullName('Божедар').'-Божедар');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('N-Божейко', $this->object->splitFullName('Божейко').'-Божейко');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('N-Божемир', $this->object->splitFullName('Божемир').'-Божемир');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('N-Божен', $this->object->splitFullName('Божен').'-Божен');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('N-Божко', $this->object->splitFullName('Божко').'-Божко');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('N-Болеслав', $this->object->splitFullName('Болеслав').'-Болеслав');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('N-Боримир', $this->object->splitFullName('Боримир').'-Боримир');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('N-Боримисл', $this->object->splitFullName('Боримисл').'-Боримисл');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('N-Борис', $this->object->splitFullName('Борис').'-Борис');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('N-Борислав', $this->object->splitFullName('Борислав').'-Борислав');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('N-Боян', $this->object->splitFullName('Боян').'-Боян');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('N-Братан', $this->object->splitFullName('Братан').'-Братан');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('N-Бративой', $this->object->splitFullName('Бративой').'-Бративой');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('N-Братимир', $this->object->splitFullName('Братимир').'-Братимир');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('N-Братислав', $this->object->splitFullName('Братислав').'-Братислав');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('N-Братко', $this->object->splitFullName('Братко').'-Братко');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('N-Братомил', $this->object->splitFullName('Братомил').'-Братомил');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('N-Братослав', $this->object->splitFullName('Братослав').'-Братослав');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('N-Брячислав', $this->object->splitFullName('Брячислав').'-Брячислав');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('N-Боронислав', $this->object->splitFullName('Боронислав').'-Боронислав');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('N-Будивид', $this->object->splitFullName('Будивид').'-Будивид');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('N-Будивой', $this->object->splitFullName('Будивой').'-Будивой');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('N-Будимил', $this->object->splitFullName('Будимил').'-Будимил');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('N-Будимир', $this->object->splitFullName('Будимир').'-Будимир');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('N-Будислав', $this->object->splitFullName('Будислав').'-Будислав');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('N-Буймир', $this->object->splitFullName('Буймир').'-Буймир');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('N-Буйтур', $this->object->splitFullName('Буйтур').'-Буйтур');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('N-Буревій', $this->object->splitFullName('Буревій').'-Буревій');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('N-Буревіст', $this->object->splitFullName('Буревіст').'-Буревіст');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('N-Василь', $this->object->splitFullName('Василь').'-Василь');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('N-Ведан', $this->object->splitFullName('Ведан').'-Ведан');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('N-Велемир', $this->object->splitFullName('Велемир').'-Велемир');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('N-Велемудр', $this->object->splitFullName('Велемудр').'-Велемудр');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('N-Велет', $this->object->splitFullName('Велет').'-Велет');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('N-Величар', $this->object->splitFullName('Величар').'-Величар');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('N-Величко', $this->object->splitFullName('Величко').'-Величко');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('N-Вербан', $this->object->splitFullName('Вербан').'-Вербан');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('N-Вернидуб', $this->object->splitFullName('Вернидуб').'-Вернидуб');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('N-Вернислав', $this->object->splitFullName('Вернислав').'-Вернислав');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('N-Веселан', $this->object->splitFullName('Веселан').'-Веселан');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('N-Витомир', $this->object->splitFullName('Витомир').'-Витомир');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('N-Вишата', $this->object->splitFullName('Вишата').'-Вишата');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('N-Вишезор', $this->object->splitFullName('Вишезор').'-Вишезор');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('N-Вишеслав', $this->object->splitFullName('Вишеслав').'-Вишеслав');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('N-Вір', $this->object->splitFullName('Вір').'-Вір');
    }
    public function testSplDetect102()
    {
        $this->assertEquals('N-Віродан', $this->object->splitFullName('Віродан').'-Віродан');
    }
    public function testSplDetect103()
    {
        $this->assertEquals('N-Віродар', $this->object->splitFullName('Віродар').'-Віродар');
    }
    public function testSplDetect104()
    {
        $this->assertEquals('N-Вірослав', $this->object->splitFullName('Вірослав').'-Вірослав');
    }
    public function testSplDetect105()
    {
        $this->assertEquals('N-Віст', $this->object->splitFullName('Віст').'-Віст');
    }
    public function testSplDetect106()
    {
        $this->assertEquals('N-Вістан', $this->object->splitFullName('Вістан').'-Вістан');
    }
    public function testSplDetect107()
    {
        $this->assertEquals('N-Вітан', $this->object->splitFullName('Вітан').'-Вітан');
    }
    public function testSplDetect108()
    {
        $this->assertEquals('N-Вітомир', $this->object->splitFullName('Вітомир').'-Вітомир');
    }
    public function testSplDetect109()
    {
        $this->assertEquals('N-Вітрян', $this->object->splitFullName('Вітрян').'-Вітрян');
    }
    public function testSplDetect110()
    {
        $this->assertEquals('N-Влад', $this->object->splitFullName('Влад').'-Влад');
    }
    public function testSplDetect111()
    {
        $this->assertEquals('N-Владислав', $this->object->splitFullName('Владислав').'-Владислав');
    }
    public function testSplDetect112()
    {
        $this->assertEquals('N-Власт', $this->object->splitFullName('Власт').'-Власт');
    }
    public function testSplDetect113()
    {
        $this->assertEquals('N-Вогнедар', $this->object->splitFullName('Вогнедар').'-Вогнедар');
    }
    public function testSplDetect114()
    {
        $this->assertEquals('N-Вогнян', $this->object->splitFullName('Вогнян').'-Вогнян');
    }
    public function testSplDetect115()
    {
        $this->assertEquals('N-Водограй', $this->object->splitFullName('Водограй').'-Водограй');
    }
    public function testSplDetect116()
    {
        $this->assertEquals('N-Водотрав', $this->object->splitFullName('Водотрав').'-Водотрав');
    }
    public function testSplDetect117()
    {
        $this->assertEquals('N-Воїслав', $this->object->splitFullName('Воїслав').'-Воїслав');
    }
    public function testSplDetect118()
    {
        $this->assertEquals('N-Волелюб', $this->object->splitFullName('Волелюб').'-Волелюб');
    }
    public function testSplDetect119()
    {
        $this->assertEquals('N-Володар', $this->object->splitFullName('Володар').'-Володар');
    }
    public function testSplDetect120()
    {
        $this->assertEquals('N-Володимир', $this->object->splitFullName('Володимир').'-Володимир');
    }
    public function testSplDetect121()
    {
        $this->assertEquals('N-Володислав', $this->object->splitFullName('Володислав').'-Володислав');
    }
    public function testSplDetect122()
    {
        $this->assertEquals('N-Воля', $this->object->splitFullName('Воля').'-Воля');
    }
    public function testSplDetect123()
    {
        $this->assertEquals('N-Воротислав', $this->object->splitFullName('Воротислав').'-Воротислав');
    }
    public function testSplDetect124()
    {
        $this->assertEquals('N-Вратан', $this->object->splitFullName('Вратан').'-Вратан');
    }
    public function testSplDetect125()
    {
        $this->assertEquals('N-Вратислав', $this->object->splitFullName('Вратислав').'-Вратислав');
    }
    public function testSplDetect126()
    {
        $this->assertEquals('N-Всевлад', $this->object->splitFullName('Всевлад').'-Всевлад');
    }
    public function testSplDetect127()
    {
        $this->assertEquals('N-Всеволод', $this->object->splitFullName('Всеволод').'-Всеволод');
    }
    public function testSplDetect128()
    {
        $this->assertEquals('N-Вселюб', $this->object->splitFullName('Вселюб').'-Вселюб');
    }
    public function testSplDetect129()
    {
        $this->assertEquals('N-Вселюд', $this->object->splitFullName('Вселюд').'-Вселюд');
    }
    public function testSplDetect130()
    {
        $this->assertEquals('N-Всеслав', $this->object->splitFullName('Всеслав').'-Всеслав');
    }
    public function testSplDetect131()
    {
        $this->assertEquals('N-Гарнослав', $this->object->splitFullName('Гарнослав').'-Гарнослав');
    }
    public function testSplDetect132()
    {
        $this->assertEquals('N-Гатусил', $this->object->splitFullName('Гатусил').'-Гатусил');
    }
    public function testSplDetect133()
    {
        $this->assertEquals('N-Гатуслав', $this->object->splitFullName('Гатуслав').'-Гатуслав');
    }
    public function testSplDetect134()
    {
        $this->assertEquals('N-Гервасій', $this->object->splitFullName('Гервасій').'-Гервасій');
    }
    public function testSplDetect135()
    {
        $this->assertEquals('N-Гладко', $this->object->splitFullName('Гладко').'-Гладко');
    }
    public function testSplDetect136()
    {
        $this->assertEquals('N-Гліб', $this->object->splitFullName('Гліб').'-Гліб');
    }
    public function testSplDetect137()
    {
        $this->assertEquals('N-Годомир', $this->object->splitFullName('Годомир').'-Годомир');
    }
    public function testSplDetect138()
    {
        $this->assertEquals('N-Голубко', $this->object->splitFullName('Голубко').'-Голубко');
    }
    public function testSplDetect139()
    {
        $this->assertEquals('N-Горун', $this->object->splitFullName('Горун').'-Горун');
    }
    public function testSplDetect140()
    {
        $this->assertEquals('N-Гордій', $this->object->splitFullName('Гордій').'-Гордій');
    }
    public function testSplDetect141()
    {
        $this->assertEquals('N-Гордислав', $this->object->splitFullName('Гордислав').'-Гордислав');
    }
    public function testSplDetect142()
    {
        $this->assertEquals('N-Гордогост', $this->object->splitFullName('Гордогост').'-Гордогост');
    }
    public function testSplDetect143()
    {
        $this->assertEquals('N-Гордодум', $this->object->splitFullName('Гордодум').'-Гордодум');
    }
    public function testSplDetect144()
    {
        $this->assertEquals('N-Гордомисл', $this->object->splitFullName('Гордомисл').'-Гордомисл');
    }
    public function testSplDetect145()
    {
        $this->assertEquals('N-Гордослав', $this->object->splitFullName('Гордослав').'-Гордослав');
    }
    public function testSplDetect146()
    {
        $this->assertEquals('N-Гордята', $this->object->splitFullName('Гордята').'-Гордята');
    }
    public function testSplDetect147()
    {
        $this->assertEquals('N-Горигляд', $this->object->splitFullName('Горигляд').'-Горигляд');
    }
    public function testSplDetect148()
    {
        $this->assertEquals('N-Горимир', $this->object->splitFullName('Горимир').'-Горимир');
    }
    public function testSplDetect149()
    {
        $this->assertEquals('N-Горимисл', $this->object->splitFullName('Горимисл').'-Горимисл');
    }
    public function testSplDetect150()
    {
        $this->assertEquals('N-Горисвіт', $this->object->splitFullName('Горисвіт').'-Горисвіт');
    }
    public function testSplDetect151()
    {
        $this->assertEquals('N-Горислав', $this->object->splitFullName('Горислав').'-Горислав');
    }
    public function testSplDetect152()
    {
        $this->assertEquals('N-Горицвіт', $this->object->splitFullName('Горицвіт').'-Горицвіт');
    }
    public function testSplDetect153()
    {
        $this->assertEquals('N-Гостомисл', $this->object->splitFullName('Гостомисл').'-Гостомисл');
    }
    public function testSplDetect154()
    {
        $this->assertEquals('N-Гострозір', $this->object->splitFullName('Гострозір').'-Гострозір');
    }
    public function testSplDetect155()
    {
        $this->assertEquals('N-Гостята', $this->object->splitFullName('Гостята').'-Гостята');
    }
    public function testSplDetect156()
    {
        $this->assertEquals('N-Градимир', $this->object->splitFullName('Градимир').'-Градимир');
    }
    public function testSplDetect157()
    {
        $this->assertEquals('N-Градислав', $this->object->splitFullName('Градислав').'-Градислав');
    }
    public function testSplDetect158()
    {
        $this->assertEquals('N-Гранислав', $this->object->splitFullName('Гранислав').'-Гранислав');
    }
    public function testSplDetect159()
    {
        $this->assertEquals('N-Грива', $this->object->splitFullName('Грива').'-Грива');
    }
    public function testSplDetect160()
    {
        $this->assertEquals('N-Григорій', $this->object->splitFullName('Григорій').'-Григорій');
    }
    public function testSplDetect161()
    {
        $this->assertEquals('N-Гремислав', $this->object->splitFullName('Гремислав').'-Гремислав');
    }
    public function testSplDetect162()
    {
        $this->assertEquals('N-Грозан', $this->object->splitFullName('Грозан').'-Грозан');
    }
    public function testSplDetect163()
    {
        $this->assertEquals('N-Громовик', $this->object->splitFullName('Громовик').'-Громовик');
    }
    public function testSplDetect164()
    {
        $this->assertEquals('N-Гуляйвітер', $this->object->splitFullName('Гуляйвітер').'-Гуляйвітер');
    }
    public function testSplDetect165()
    {
        $this->assertEquals('N-Густомисл', $this->object->splitFullName('Густомисл').'-Густомисл');
    }
    public function testSplDetect166()
    {
        $this->assertEquals('N-Далемил', $this->object->splitFullName('Далемил').'-Далемил');
    }
    public function testSplDetect167()
    {
        $this->assertEquals('N-Далемир', $this->object->splitFullName('Далемир').'-Далемир');
    }
    public function testSplDetect168()
    {
        $this->assertEquals('N-Далібор', $this->object->splitFullName('Далібор').'-Далібор');
    }
    public function testSplDetect169()
    {
        $this->assertEquals('N-Дан', $this->object->splitFullName('Дан').'-Дан');
    }
    public function testSplDetect170()
    {
        $this->assertEquals('N-Данило', $this->object->splitFullName('Данило').'-Данило');
    }
    public function testSplDetect171()
    {
        $this->assertEquals('N-Данко', $this->object->splitFullName('Данко').'-Данко');
    }
    public function testSplDetect172()
    {
        $this->assertEquals('N-Дантур', $this->object->splitFullName('Дантур').'-Дантур');
    }
    public function testSplDetect173()
    {
        $this->assertEquals('N-Дар', $this->object->splitFullName('Дар').'-Дар');
    }
    public function testSplDetect174()
    {
        $this->assertEquals('N-Дарій', $this->object->splitFullName('Дарій').'-Дарій');
    }
    public function testSplDetect175()
    {
        $this->assertEquals('N-Дарибог', $this->object->splitFullName('Дарибог').'-Дарибог');
    }
    public function testSplDetect176()
    {
        $this->assertEquals('N-Даромир', $this->object->splitFullName('Даромир').'-Даромир');
    }
    public function testSplDetect177()
    {
        $this->assertEquals('N-Держикрай', $this->object->splitFullName('Держикрай').'-Держикрай');
    }
    public function testSplDetect178()
    {
        $this->assertEquals('N-Держислав', $this->object->splitFullName('Держислав').'-Держислав');
    }
    public function testSplDetect179()
    {
        $this->assertEquals('N-Дибач', $this->object->splitFullName('Дибач').'-Дибач');
    }
    public function testSplDetect180()
    {
        $this->assertEquals('N-Дивозір', $this->object->splitFullName('Дивозір').'-Дивозір');
    }
    public function testSplDetect181()
    {
        $this->assertEquals('N-Дій', $this->object->splitFullName('Дій').'-Дій');
    }
    public function testSplDetect182()
    {
        $this->assertEquals('N-Добрибій', $this->object->splitFullName('Добрибій').'-Добрибій');
    }
    public function testSplDetect183()
    {
        $this->assertEquals('N-Добривод', $this->object->splitFullName('Добривод').'-Добривод');
    }
    public function testSplDetect184()
    {
        $this->assertEquals('N-Добрик', $this->object->splitFullName('Добрик').'-Добрик');
    }
    public function testSplDetect185()
    {
        $this->assertEquals('N-Добрило', $this->object->splitFullName('Добрило').'-Добрило');
    }
    public function testSplDetect186()
    {
        $this->assertEquals('N-Добриня', $this->object->splitFullName('Добриня').'-Добриня');
    }
    public function testSplDetect187()
    {
        $this->assertEquals('N-Добрисвіт', $this->object->splitFullName('Добрисвіт').'-Добрисвіт');
    }
    public function testSplDetect188()
    {
        $this->assertEquals('N-Добровіст', $this->object->splitFullName('Добровіст').'-Добровіст');
    }
    public function testSplDetect189()
    {
        $this->assertEquals('N-Доброгост', $this->object->splitFullName('Доброгост').'-Доброгост');
    }
    public function testSplDetect190()
    {
        $this->assertEquals('N-Добродум', $this->object->splitFullName('Добродум').'-Добродум');
    }
    public function testSplDetect191()
    {
        $this->assertEquals('N-Добролик', $this->object->splitFullName('Добролик').'-Добролик');
    }
    public function testSplDetect192()
    {
        $this->assertEquals('N-Добролюб', $this->object->splitFullName('Добролюб').'-Добролюб');
    }
    public function testSplDetect193()
    {
        $this->assertEquals('N-Добромил', $this->object->splitFullName('Добромил').'-Добромил');
    }
    public function testSplDetect194()
    {
        $this->assertEquals('N-Добромир', $this->object->splitFullName('Добромир').'-Добромир');
    }
    public function testSplDetect195()
    {
        $this->assertEquals('N-Добромисл', $this->object->splitFullName('Добромисл').'-Добромисл');
    }
    public function testSplDetect196()
    {
        $this->assertEquals('N-Доброслав', $this->object->splitFullName('Доброслав').'-Доброслав');
    }
    public function testSplDetect197()
    {
        $this->assertEquals('N-Доморад', $this->object->splitFullName('Доморад').'-Доморад');
    }
    public function testSplDetect198()
    {
        $this->assertEquals('N-Домослав', $this->object->splitFullName('Домослав').'-Домослав');
    }
    public function testSplDetect199()
    {
        $this->assertEquals('N-Дорогобуг', $this->object->splitFullName('Дорогобуг').'-Дорогобуг');
    }
    public function testSplDetect200()
    {
        $this->assertEquals('N-Дорогомир', $this->object->splitFullName('Дорогомир').'-Дорогомир');
    }
    public function testSplDetect201()
    {
        $this->assertEquals('N-Дорогомисл', $this->object->splitFullName('Дорогомисл').'-Дорогомисл');
    }
    public function testSplDetect202()
    {
        $this->assertEquals('N-Дорогосил', $this->object->splitFullName('Дорогосил').'-Дорогосил');
    }
    public function testSplDetect203()
    {
        $this->assertEquals('N-Дорогочин', $this->object->splitFullName('Дорогочин').'-Дорогочин');
    }
    public function testSplDetect204()
    {
        $this->assertEquals('N-Драган', $this->object->splitFullName('Драган').'-Драган');
    }
    public function testSplDetect205()
    {
        $this->assertEquals('N-Дружелюб', $this->object->splitFullName('Дружелюб').'-Дружелюб');
    }
    public function testSplDetect206()
    {
        $this->assertEquals('N-Жадан', $this->object->splitFullName('Жадан').'-Жадан');
    }
    public function testSplDetect207()
    {
        $this->assertEquals('N-Ждан', $this->object->splitFullName('Ждан').'-Ждан');
    }
    public function testSplDetect208()
    {
        $this->assertEquals('N-Живорід', $this->object->splitFullName('Живорід').'-Живорід');
    }
    public function testSplDetect209()
    {
        $this->assertEquals('N-Живосил', $this->object->splitFullName('Живосил').'-Живосил');
    }
    public function testSplDetect210()
    {
        $this->assertEquals('N-Живослав', $this->object->splitFullName('Живослав').'-Живослав');
    }
    public function testSplDetect211()
    {
        $this->assertEquals('N-Житомир', $this->object->splitFullName('Житомир').'-Житомир');
    }
    public function testSplDetect212()
    {
        $this->assertEquals('N-Життєлюб', $this->object->splitFullName('Життєлюб').'-Життєлюб');
    }
    public function testSplDetect213()
    {
        $this->assertEquals('N-Збоїслав', $this->object->splitFullName('Збоїслав').'-Збоїслав');
    }
    public function testSplDetect214()
    {
        $this->assertEquals('N-Зборислав', $this->object->splitFullName('Зборислав').'-Зборислав');
    }
    public function testSplDetect215()
    {
        $this->assertEquals('N-Звенигор', $this->object->splitFullName('Звенигор').'-Звенигор');
    }
    public function testSplDetect216()
    {
        $this->assertEquals('N-Звенимир', $this->object->splitFullName('Звенимир').'-Звенимир');
    }
    public function testSplDetect217()
    {
        $this->assertEquals('N-Звенислав', $this->object->splitFullName('Звенислав').'-Звенислав');
    }
    public function testSplDetect218()
    {
        $this->assertEquals('N-Здоровега', $this->object->splitFullName('Здоровега').'-Здоровега');
    }
    public function testSplDetect219()
    {
        $this->assertEquals('N-Земислав', $this->object->splitFullName('Земислав').'-Земислав');
    }
    public function testSplDetect220()
    {
        $this->assertEquals('N-Зеновій', $this->object->splitFullName('Зеновій').'-Зеновій');
    }
    public function testSplDetect221()
    {
        $this->assertEquals('N-Зіновій', $this->object->splitFullName('Зіновій').'-Зіновій');
    }
    public function testSplDetect222()
    {
        $this->assertEquals('N-Зиновій', $this->object->splitFullName('Зиновій').'-Зиновій');
    }
    public function testSplDetect223()
    {
        $this->assertEquals('N-Злат', $this->object->splitFullName('Злат').'-Злат');
    }
    public function testSplDetect224()
    {
        $this->assertEquals('N-Златомир', $this->object->splitFullName('Златомир').'-Златомир');
    }
    public function testSplDetect225()
    {
        $this->assertEquals('N-Златоус', $this->object->splitFullName('Златоус').'-Златоус');
    }
    public function testSplDetect226()
    {
        $this->assertEquals('N-Златодан', $this->object->splitFullName('Златодан').'-Златодан');
    }
    public function testSplDetect227()
    {
        $this->assertEquals('N-Злотан', $this->object->splitFullName('Злотан').'-Злотан');
    }
    public function testSplDetect228()
    {
        $this->assertEquals('N-Злотодан', $this->object->splitFullName('Злотодан').'-Злотодан');
    }
    public function testSplDetect229()
    {
        $this->assertEquals('N-Зорегляд', $this->object->splitFullName('Зорегляд').'-Зорегляд');
    }
    public function testSplDetect230()
    {
        $this->assertEquals('N-Зоремир', $this->object->splitFullName('Зоремир').'-Зоремир');
    }
    public function testSplDetect231()
    {
        $this->assertEquals('N-Зорепад', $this->object->splitFullName('Зорепад').'-Зорепад');
    }
    public function testSplDetect232()
    {
        $this->assertEquals('N-Зореслав', $this->object->splitFullName('Зореслав').'-Зореслав');
    }
    public function testSplDetect233()
    {
        $this->assertEquals('N-Зорян', $this->object->splitFullName('Зорян').'-Зорян');
    }
    public function testSplDetect234()
    {
        $this->assertEquals('N-Ізяслав', $this->object->splitFullName('Ізяслав').'-Ізяслав');
    }
    public function testSplDetect235()
    {
        $this->assertEquals('N-Ігор', $this->object->splitFullName('Ігор').'-Ігор');
    }
    public function testSplDetect236()
    {
        $this->assertEquals('N-Іван', $this->object->splitFullName('Іван').'-Іван');
    }
    public function testSplDetect237()
    {
        $this->assertEquals('N-Квітан', $this->object->splitFullName('Квітан').'-Квітан');
    }
    public function testSplDetect238()
    {
        $this->assertEquals('N-Києслав', $this->object->splitFullName('Києслав').'-Києслав');
    }
    public function testSplDetect239()
    {
        $this->assertEquals('N-Кий', $this->object->splitFullName('Кий').'-Кий');
    }
    public function testSplDetect240()
    {
        $this->assertEquals('N-Кирило', $this->object->splitFullName('Кирило').'-Кирило');
    }
    public function testSplDetect241()
    {
        $this->assertEquals('N-Киян', $this->object->splitFullName('Киян').'-Киян');
    }
    public function testSplDetect242()
    {
        $this->assertEquals('N-Княжослав', $this->object->splitFullName('Княжослав').'-Княжослав');
    }
    public function testSplDetect243()
    {
        $this->assertEquals('N-Корній', $this->object->splitFullName('Корній').'-Корній');
    }
    public function testSplDetect244()
    {
        $this->assertEquals('N-Колодар', $this->object->splitFullName('Колодар').'-Колодар');
    }
    public function testSplDetect245()
    {
        $this->assertEquals('N-Колодій', $this->object->splitFullName('Колодій').'-Колодій');
    }
    public function testSplDetect246()
    {
        $this->assertEquals('N-Косак', $this->object->splitFullName('Косак').'-Косак');
    }
    public function testSplDetect247()
    {
        $this->assertEquals('N-Красун', $this->object->splitFullName('Красун').'-Красун');
    }
    public function testSplDetect248()
    {
        $this->assertEquals('N-Крилач', $this->object->splitFullName('Крилач').'-Крилач');
    }
    public function testSplDetect249()
    {
        $this->assertEquals('N-Куйбіда', $this->object->splitFullName('Куйбіда').'-Куйбіда');
    }
    public function testSplDetect250()
    {
        $this->assertEquals('N-Курило', $this->object->splitFullName('Курило').'-Курило');
    }
    public function testSplDetect251()
    {
        $this->assertEquals('N-Лад', $this->object->splitFullName('Лад').'-Лад');
    }
    public function testSplDetect252()
    {
        $this->assertEquals('N-Ладимир', $this->object->splitFullName('Ладимир').'-Ладимир');
    }
    public function testSplDetect253()
    {
        $this->assertEquals('N-Ладислав', $this->object->splitFullName('Ладислав').'-Ладислав');
    }
    public function testSplDetect254()
    {
        $this->assertEquals('N-Ладолюб', $this->object->splitFullName('Ладолюб').'-Ладолюб');
    }
    public function testSplDetect255()
    {
        $this->assertEquals('N-Ладомир', $this->object->splitFullName('Ладомир').'-Ладомир');
    }
    public function testSplDetect256()
    {
        $this->assertEquals('N-Лев', $this->object->splitFullName('Лев').'-Лев');
    }
    public function testSplDetect257()
    {
        $this->assertEquals('N-Левко', $this->object->splitFullName('Левко').'-Левко');
    }
    public function testSplDetect258()
    {
        $this->assertEquals('N-Листвич', $this->object->splitFullName('Листвич').'-Листвич');
    }
    public function testSplDetect259()
    {
        $this->assertEquals('N-Ліпослав', $this->object->splitFullName('Ліпослав').'-Ліпослав');
    }
    public function testSplDetect260()
    {
        $this->assertEquals('N-Лоліт', $this->object->splitFullName('Лоліт').'-Лоліт');
    }
    public function testSplDetect261()
    {
        $this->assertEquals('N-Любим', $this->object->splitFullName('Любим').'-Любим');
    }
    public function testSplDetect262()
    {
        $this->assertEquals('N-Любовир', $this->object->splitFullName('Любовир').'-Любовир');
    }
    public function testSplDetect263()
    {
        $this->assertEquals('N-Любодар', $this->object->splitFullName('Любодар').'-Любодар');
    }
    public function testSplDetect264()
    {
        $this->assertEquals('N-Любозар', $this->object->splitFullName('Любозар').'-Любозар');
    }
    public function testSplDetect265()
    {
        $this->assertEquals('N-Любомил', $this->object->splitFullName('Любомил').'-Любомил');
    }
    public function testSplDetect266()
    {
        $this->assertEquals('N-Любомир', $this->object->splitFullName('Любомир').'-Любомир');
    }
    public function testSplDetect267()
    {
        $this->assertEquals('N-Любомисл', $this->object->splitFullName('Любомисл').'-Любомисл');
    }
    public function testSplDetect268()
    {
        $this->assertEquals('N-Любомудр', $this->object->splitFullName('Любомудр').'-Любомудр');
    }
    public function testSplDetect269()
    {
        $this->assertEquals('N-Любослав', $this->object->splitFullName('Любослав').'-Любослав');
    }
    public function testSplDetect270()
    {
        $this->assertEquals('N-Людомил', $this->object->splitFullName('Людомил').'-Людомил');
    }
    public function testSplDetect271()
    {
        $this->assertEquals('N-Людомир', $this->object->splitFullName('Людомир').'-Людомир');
    }
    public function testSplDetect272()
    {
        $this->assertEquals('N-Людислав', $this->object->splitFullName('Людислав').'-Людислав');
    }
    public function testSplDetect273()
    {
        $this->assertEquals('N-Лютобор', $this->object->splitFullName('Лютобор').'-Лютобор');
    }
    public function testSplDetect274()
    {
        $this->assertEquals('N-Лютомисл', $this->object->splitFullName('Лютомисл').'-Лютомисл');
    }
    public function testSplDetect275()
    {
        $this->assertEquals('N-Магадар', $this->object->splitFullName('Магадар').'-Магадар');
    }
    public function testSplDetect276()
    {
        $this->assertEquals('N-Магамир', $this->object->splitFullName('Магамир').'-Магамир');
    }
    public function testSplDetect277()
    {
        $this->assertEquals('N-Магаслав', $this->object->splitFullName('Магаслав').'-Магаслав');
    }
    public function testSplDetect278()
    {
        $this->assertEquals('N-Маркіян', $this->object->splitFullName('Маркіян').'-Маркіян');
    }
    public function testSplDetect279()
    {
        $this->assertEquals('N-Май', $this->object->splitFullName('Май').'-Май');
    }
    public function testSplDetect280()
    {
        $this->assertEquals('N-Мал', $this->object->splitFullName('Мал').'-Мал');
    }
    public function testSplDetect281()
    {
        $this->assertEquals('N-Малик', $this->object->splitFullName('Малик').'-Малик');
    }
    public function testSplDetect282()
    {
        $this->assertEquals('N-Маломир', $this->object->splitFullName('Маломир').'-Маломир');
    }
    public function testSplDetect283()
    {
        $this->assertEquals('N-Марко', $this->object->splitFullName('Марко').'-Марко');
    }
    public function testSplDetect284()
    {
        $this->assertEquals('N-Медомир', $this->object->splitFullName('Медомир').'-Медомир');
    }
    public function testSplDetect285()
    {
        $this->assertEquals('N-Межамир', $this->object->splitFullName('Межамир').'-Межамир');
    }
    public function testSplDetect286()
    {
        $this->assertEquals('N-Мечислав', $this->object->splitFullName('Мечислав').'-Мечислав');
    }
    public function testSplDetect287()
    {
        $this->assertEquals('N-Мизамир', $this->object->splitFullName('Мизамир').'-Мизамир');
    }
    public function testSplDetect288()
    {
        $this->assertEquals('N-Милан', $this->object->splitFullName('Милан').'-Милан');
    }
    public function testSplDetect289()
    {
        $this->assertEquals('N-Милован', $this->object->splitFullName('Милован').'-Милован');
    }
    public function testSplDetect290()
    {
        $this->assertEquals('N-Милодар', $this->object->splitFullName('Милодар').'-Милодар');
    }
    public function testSplDetect291()
    {
        $this->assertEquals('N-Милодух', $this->object->splitFullName('Милодух').'-Милодух');
    }
    public function testSplDetect292()
    {
        $this->assertEquals('N-Милослав', $this->object->splitFullName('Милослав').'-Милослав');
    }
    public function testSplDetect293()
    {
        $this->assertEquals('N-Мир', $this->object->splitFullName('Мир').'-Мир');
    }
    public function testSplDetect294()
    {
        $this->assertEquals('N-Миробог', $this->object->splitFullName('Миробог').'-Миробог');
    }
    public function testSplDetect295()
    {
        $this->assertEquals('N-Мирогост', $this->object->splitFullName('Мирогост').'-Мирогост');
    }
    public function testSplDetect296()
    {
        $this->assertEquals('N-Миролюб', $this->object->splitFullName('Миролюб').'-Миролюб');
    }
    public function testSplDetect297()
    {
        $this->assertEquals('N-Мирослав', $this->object->splitFullName('Мирослав').'-Мирослав');
    }
    public function testSplDetect298()
    {
        $this->assertEquals('N-Мовчан', $this->object->splitFullName('Мовчан').'-Мовчан');
    }
    public function testSplDetect299()
    {
        $this->assertEquals('N-Молибог', $this->object->splitFullName('Молибог').'-Молибог');
    }
    public function testSplDetect300()
    {
        $this->assertEquals('N-Мстибог', $this->object->splitFullName('Мстибог').'-Мстибог');
    }
    public function testSplDetect301()
    {
        $this->assertEquals('N-Мстивой', $this->object->splitFullName('Мстивой').'-Мстивой');
    }
    public function testSplDetect302()
    {
        $this->assertEquals('N-Мстислав', $this->object->splitFullName('Мстислав').'-Мстислав');
    }
    public function testSplDetect303()
    {
        $this->assertEquals('N-Мудролюб', $this->object->splitFullName('Мудролюб').'-Мудролюб');
    }
    public function testSplDetect304()
    {
        $this->assertEquals('N-Нагнибіда', $this->object->splitFullName('Нагнибіда').'-Нагнибіда');
    }
    public function testSplDetect305()
    {
        $this->assertEquals('N-Надій', $this->object->splitFullName('Надій').'-Надій');
    }
    public function testSplDetect306()
    {
        $this->assertEquals('N-Найден', $this->object->splitFullName('Найден').'-Найден');
    }
    public function testSplDetect307()
    {
        $this->assertEquals('N-Наслав', $this->object->splitFullName('Наслав').'-Наслав');
    }
    public function testSplDetect308()
    {
        $this->assertEquals('N-Недан', $this->object->splitFullName('Недан').'-Недан');
    }
    public function testSplDetect309()
    {
        $this->assertEquals('N-Немир', $this->object->splitFullName('Немир').'-Немир');
    }
    public function testSplDetect310()
    {
        $this->assertEquals('N-Непобор', $this->object->splitFullName('Непобор').'-Непобор');
    }
    public function testSplDetect311()
    {
        $this->assertEquals('N-Нігослав', $this->object->splitFullName('Нігослав').'-Нігослав');
    }
    public function testSplDetect312()
    {
        $this->assertEquals('N-Назар', $this->object->splitFullName('Назар').'-Назар');
    }
    public function testSplDetect313()
    {
        $this->assertEquals('N-Одинець', $this->object->splitFullName('Одинець').'-Одинець');
    }
    public function testSplDetect314()
    {
        $this->assertEquals('N-Олег', $this->object->splitFullName('Олег').'-Олег');
    }
    public function testSplDetect315()
    {
        $this->assertEquals('N-Олександр', $this->object->splitFullName('Олександр').'-Олександр');
    }
    public function testSplDetect316()
    {
        $this->assertEquals('N-Олексій', $this->object->splitFullName('Олексій').'-Олексій');
    }
    public function testSplDetect317()
    {
        $this->assertEquals('N-Олесь', $this->object->splitFullName('Олесь').'-Олесь');
    }
    public function testSplDetect318()
    {
        $this->assertEquals('N-Олелько', $this->object->splitFullName('Олелько').'-Олелько');
    }
    public function testSplDetect319()
    {
        $this->assertEquals('N-Орел', $this->object->splitFullName('Орел').'-Орел');
    }
    public function testSplDetect320()
    {
        $this->assertEquals('N-Орест', $this->object->splitFullName('Орест').'-Орест');
    }
    public function testSplDetect321()
    {
        $this->assertEquals('N-Орь', $this->object->splitFullName('Орь').'-Орь');
    }
    public function testSplDetect322()
    {
        $this->assertEquals('N-Оримир', $this->object->splitFullName('Оримир').'-Оримир');
    }
    public function testSplDetect323()
    {
        $this->assertEquals('N-Осмомисл', $this->object->splitFullName('Осмомисл').'-Осмомисл');
    }
    public function testSplDetect324()
    {
        $this->assertEquals('N-Острозор', $this->object->splitFullName('Острозор').'-Острозор');
    }
    public function testSplDetect325()
    {
        $this->assertEquals('N-Остромир', $this->object->splitFullName('Остромир').'-Остромир');
    }
    public function testSplDetect326()
    {
        $this->assertEquals('N-Остромов', $this->object->splitFullName('Остромов').'-Остромов');
    }
    public function testSplDetect327()
    {
        $this->assertEquals('N-Охрім', $this->object->splitFullName('Охрім').'-Охрім');
    }
    public function testSplDetect328()
    {
        $this->assertEquals('N-Павло', $this->object->splitFullName('Павло').'-Павло');
    }
    public function testSplDetect329()
    {
        $this->assertEquals('N-Первушко', $this->object->splitFullName('Первушко').'-Первушко');
    }
    public function testSplDetect330()
    {
        $this->assertEquals('N-Перелюб', $this->object->splitFullName('Перелюб').'-Перелюб');
    }
    public function testSplDetect331()
    {
        $this->assertEquals('N-Перемил', $this->object->splitFullName('Перемил').'-Перемил');
    }
    public function testSplDetect332()
    {
        $this->assertEquals('N-Перемисл', $this->object->splitFullName('Перемисл').'-Перемисл');
    }
    public function testSplDetect333()
    {
        $this->assertEquals('N-Пересвіт', $this->object->splitFullName('Пересвіт').'-Пересвіт');
    }
    public function testSplDetect334()
    {
        $this->assertEquals('N-Переяслав', $this->object->splitFullName('Переяслав').'-Переяслав');
    }
    public function testSplDetect335()
    {
        $this->assertEquals('N-Першик', $this->object->splitFullName('Першик').'-Першик');
    }
    public function testSplDetect336()
    {
        $this->assertEquals('N-Подолян', $this->object->splitFullName('Подолян').'-Подолян');
    }
    public function testSplDetect337()
    {
        $this->assertEquals('N-Позвізд', $this->object->splitFullName('Позвізд').'-Позвізд');
    }
    public function testSplDetect338()
    {
        $this->assertEquals('N-Полель', $this->object->splitFullName('Полель').'-Полель');
    }
    public function testSplDetect339()
    {
        $this->assertEquals('N-Полян', $this->object->splitFullName('Полян').'-Полян');
    }
    public function testSplDetect340()
    {
        $this->assertEquals('N-Пребислав', $this->object->splitFullName('Пребислав').'-Пребислав');
    }
    public function testSplDetect341()
    {
        $this->assertEquals('N-Предислав', $this->object->splitFullName('Предислав').'-Предислав');
    }
    public function testSplDetect342()
    {
        $this->assertEquals('N-Пугач', $this->object->splitFullName('Пугач').'-Пугач');
    }
    public function testSplDetect343()
    {
        $this->assertEquals('N-Путило', $this->object->splitFullName('Путило').'-Путило');
    }
    public function testSplDetect344()
    {
        $this->assertEquals('N-Путята', $this->object->splitFullName('Путята').'-Путята');
    }
    public function testSplDetect345()
    {
        $this->assertEquals('N-Рава', $this->object->splitFullName('Рава').'-Рава');
    }
    public function testSplDetect346()
    {
        $this->assertEquals('N-Рад', $this->object->splitFullName('Рад').'-Рад');
    }
    public function testSplDetect347()
    {
        $this->assertEquals('N-Радечко', $this->object->splitFullName('Радечко').'-Радечко');
    }
    public function testSplDetect348()
    {
        $this->assertEquals('N-Радивой', $this->object->splitFullName('Радивой').'-Радивой');
    }
    public function testSplDetect349()
    {
        $this->assertEquals('N-Радило', $this->object->splitFullName('Радило').'-Радило');
    }
    public function testSplDetect350()
    {
        $this->assertEquals('N-Радим', $this->object->splitFullName('Радим').'-Радим');
    }
    public function testSplDetect351()
    {
        $this->assertEquals('N-Радимир', $this->object->splitFullName('Радимир').'-Радимир');
    }
    public function testSplDetect352()
    {
        $this->assertEquals('N-Радислав', $this->object->splitFullName('Радислав').'-Радислав');
    }
    public function testSplDetect353()
    {
        $this->assertEquals('N-Радко', $this->object->splitFullName('Радко').'-Радко');
    }
    public function testSplDetect354()
    {
        $this->assertEquals('N-Радован', $this->object->splitFullName('Радован').'-Радован');
    }
    public function testSplDetect355()
    {
        $this->assertEquals('N-Радогост', $this->object->splitFullName('Радогост').'-Радогост');
    }
    public function testSplDetect356()
    {
        $this->assertEquals('N-Радомир', $this->object->splitFullName('Радомир').'-Радомир');
    }
    public function testSplDetect357()
    {
        $this->assertEquals('N-Радомисл', $this->object->splitFullName('Радомисл').'-Радомисл');
    }
    public function testSplDetect358()
    {
        $this->assertEquals('N-Радослав', $this->object->splitFullName('Радослав').'-Радослав');
    }
    public function testSplDetect359()
    {
        $this->assertEquals('N-Ратибор', $this->object->splitFullName('Ратибор').'-Ратибор');
    }
    public function testSplDetect360()
    {
        $this->assertEquals('N-Ратимир', $this->object->splitFullName('Ратимир').'-Ратимир');
    }
    public function testSplDetect361()
    {
        $this->assertEquals('N-Ратислав', $this->object->splitFullName('Ратислав').'-Ратислав');
    }
    public function testSplDetect362()
    {
        $this->assertEquals('N-Ревун', $this->object->splitFullName('Ревун').'-Ревун');
    }
    public function testSplDetect363()
    {
        $this->assertEquals('N-Рід', $this->object->splitFullName('Рід').'-Рід');
    }
    public function testSplDetect364()
    {
        $this->assertEquals('N-Рогволод', $this->object->splitFullName('Рогволод').'-Рогволод');
    }
    public function testSplDetect365()
    {
        $this->assertEquals('N-Родан', $this->object->splitFullName('Родан').'-Родан');
    }
    public function testSplDetect366()
    {
        $this->assertEquals('N-Родослав', $this->object->splitFullName('Родослав').'-Родослав');
    }
    public function testSplDetect367()
    {
        $this->assertEquals('N-Рожден', $this->object->splitFullName('Рожден').'-Рожден');
    }
    public function testSplDetect368()
    {
        $this->assertEquals('N-Розум', $this->object->splitFullName('Розум').'-Розум');
    }
    public function testSplDetect369()
    {
        $this->assertEquals('N-Роксолан', $this->object->splitFullName('Роксолан').'-Роксолан');
    }
    public function testSplDetect370()
    {
        $this->assertEquals('N-Роман', $this->object->splitFullName('Роман').'-Роман');
    }
    public function testSplDetect371()
    {
        $this->assertEquals('N-Ростислав', $this->object->splitFullName('Ростислав').'-Ростислав');
    }
    public function testSplDetect372()
    {
        $this->assertEquals('N-Ростичар', $this->object->splitFullName('Ростичар').'-Ростичар');
    }
    public function testSplDetect373()
    {
        $this->assertEquals('N-Ростун', $this->object->splitFullName('Ростун').'-Ростун');
    }
    public function testSplDetect374()
    {
        $this->assertEquals('N-Рудан', $this->object->splitFullName('Рудан').'-Рудан');
    }
    public function testSplDetect375()
    {
        $this->assertEquals('N-Рус', $this->object->splitFullName('Рус').'-Рус');
    }
    public function testSplDetect376()
    {
        $this->assertEquals('N-Руслан', $this->object->splitFullName('Руслан').'-Руслан');
    }
    public function testSplDetect377()
    {
        $this->assertEquals('N-Русудан', $this->object->splitFullName('Русудан').'-Русудан');
    }
    public function testSplDetect378()
    {
        $this->assertEquals('N-Сармат', $this->object->splitFullName('Сармат').'-Сармат');
    }
    public function testSplDetect379()
    {
        $this->assertEquals('N-Сварг', $this->object->splitFullName('Сварг').'-Сварг');
    }
    public function testSplDetect380()
    {
        $this->assertEquals('N-Сват', $this->object->splitFullName('Сват').'-Сват');
    }
    public function testSplDetect381()
    {
        $this->assertEquals('N-Світ', $this->object->splitFullName('Світ').'-Світ');
    }
    public function testSplDetect382()
    {
        $this->assertEquals('N-Світлан', $this->object->splitFullName('Світлан').'-Світлан');
    }
    public function testSplDetect383()
    {
        $this->assertEquals('N-Світлогор', $this->object->splitFullName('Світлогор').'-Світлогор');
    }
    public function testSplDetect384()
    {
        $this->assertEquals('N-Світогор', $this->object->splitFullName('Світогор').'-Світогор');
    }
    public function testSplDetect385()
    {
        $this->assertEquals('N-Світовид', $this->object->splitFullName('Світовид').'-Світовид');
    }
    public function testSplDetect386()
    {
        $this->assertEquals('N-Світодар', $this->object->splitFullName('Світодар').'-Світодар');
    }
    public function testSplDetect387()
    {
        $this->assertEquals('N-Світозар', $this->object->splitFullName('Світозар').'-Світозар');
    }
    public function testSplDetect388()
    {
        $this->assertEquals('N-Світокол', $this->object->splitFullName('Світокол').'-Світокол');
    }
    public function testSplDetect389()
    {
        $this->assertEquals('N-Світолик', $this->object->splitFullName('Світолик').'-Світолик');
    }
    public function testSplDetect390()
    {
        $this->assertEquals('N-Світолюб', $this->object->splitFullName('Світолюб').'-Світолюб');
    }
    public function testSplDetect391()
    {
        $this->assertEquals('N-Світомир', $this->object->splitFullName('Світомир').'-Світомир');
    }
    public function testSplDetect392()
    {
        $this->assertEquals('N-Світослав', $this->object->splitFullName('Світослав').'-Світослав');
    }
    public function testSplDetect393()
    {
        $this->assertEquals('N-Світояр', $this->object->splitFullName('Світояр').'-Світояр');
    }
    public function testSplDetect394()
    {
        $this->assertEquals('N-Свободан', $this->object->splitFullName('Свободан').'-Свободан');
    }
    public function testSplDetect395()
    {
        $this->assertEquals('N-Святовид', $this->object->splitFullName('Святовид').'-Святовид');
    }
    public function testSplDetect396()
    {
        $this->assertEquals('N-Святогор', $this->object->splitFullName('Святогор').'-Святогор');
    }
    public function testSplDetect397()
    {
        $this->assertEquals('N-Святолюб', $this->object->splitFullName('Святолюб').'-Святолюб');
    }
    public function testSplDetect398()
    {
        $this->assertEquals('N-Святополк', $this->object->splitFullName('Святополк').'-Святополк');
    }
    public function testSplDetect399()
    {
        $this->assertEquals('N-Святослав', $this->object->splitFullName('Святослав').'-Святослав');
    }
    public function testSplDetect400()
    {
        $this->assertEquals('N-Семибор', $this->object->splitFullName('Семибор').'-Семибор');
    }
    public function testSplDetect401()
    {
        $this->assertEquals('N-Семирад', $this->object->splitFullName('Семирад').'-Семирад');
    }
    public function testSplDetect402()
    {
        $this->assertEquals('N-Сердитко', $this->object->splitFullName('Сердитко').'-Сердитко');
    }
    public function testSplDetect403()
    {
        $this->assertEquals('N-Сила', $this->object->splitFullName('Сила').'-Сила');
    }
    public function testSplDetect404()
    {
        $this->assertEquals('N-Силолюб', $this->object->splitFullName('Силолюб').'-Силолюб');
    }
    public function testSplDetect405()
    {
        $this->assertEquals('N-Силослав', $this->object->splitFullName('Силослав').'-Силослав');
    }
    public function testSplDetect406()
    {
        $this->assertEquals('N-Синьоок', $this->object->splitFullName('Синьоок').'-Синьоок');
    }
    public function testSplDetect407()
    {
        $this->assertEquals('N-Скол', $this->object->splitFullName('Скол').'-Скол');
    }
    public function testSplDetect408()
    {
        $this->assertEquals('N-Слава', $this->object->splitFullName('Слава').'-Слава');
    }
    public function testSplDetect409()
    {
        $this->assertEquals('N-Славобор', $this->object->splitFullName('Славобор').'-Славобор');
    }
    public function testSplDetect410()
    {
        $this->assertEquals('N-Славолюб', $this->object->splitFullName('Славолюб').'-Славолюб');
    }
    public function testSplDetect411()
    {
        $this->assertEquals('N-Славомир', $this->object->splitFullName('Славомир').'-Славомир');
    }
    public function testSplDetect412()
    {
        $this->assertEquals('N-Славута', $this->object->splitFullName('Славута').'-Славута');
    }
    public function testSplDetect413()
    {
        $this->assertEquals('N-Снага', $this->object->splitFullName('Снага').'-Снага');
    }
    public function testSplDetect414()
    {
        $this->assertEquals('N-Сніжан', $this->object->splitFullName('Сніжан').'-Сніжан');
    }
    public function testSplDetect415()
    {
        $this->assertEquals('N-Сновид', $this->object->splitFullName('Сновид').'-Сновид');
    }
    public function testSplDetect416()
    {
        $this->assertEquals('N-Снозір', $this->object->splitFullName('Снозір').'-Снозір');
    }
    public function testSplDetect417()
    {
        $this->assertEquals('N-Собібор', $this->object->splitFullName('Собібор').'-Собібор');
    }
    public function testSplDetect418()
    {
        $this->assertEquals('N-Собімир', $this->object->splitFullName('Собімир').'-Собімир');
    }
    public function testSplDetect419()
    {
        $this->assertEquals('N-Собіслав', $this->object->splitFullName('Собіслав').'-Собіслав');
    }
    public function testSplDetect420()
    {
        $this->assertEquals('N-Сокіл', $this->object->splitFullName('Сокіл').'-Сокіл');
    }
    public function testSplDetect421()
    {
        $this->assertEquals('N-Соловей', $this->object->splitFullName('Соловей').'-Соловей');
    }
    public function testSplDetect422()
    {
        $this->assertEquals('N-Сологуб', $this->object->splitFullName('Сологуб').'-Сологуб');
    }
    public function testSplDetect423()
    {
        $this->assertEquals('N-Сонцевид', $this->object->splitFullName('Сонцевид').'-Сонцевид');
    }
    public function testSplDetect424()
    {
        $this->assertEquals('N-Сонцедар', $this->object->splitFullName('Сонцедар').'-Сонцедар');
    }
    public function testSplDetect425()
    {
        $this->assertEquals('N-Сонцелик', $this->object->splitFullName('Сонцелик').'-Сонцелик');
    }
    public function testSplDetect426()
    {
        $this->assertEquals('N-Спас', $this->object->splitFullName('Спас').'-Спас');
    }
    public function testSplDetect427()
    {
        $this->assertEquals('N-Станимир', $this->object->splitFullName('Станимир').'-Станимир');
    }
    public function testSplDetect428()
    {
        $this->assertEquals('N-Станіслав', $this->object->splitFullName('Станіслав').'-Станіслав');
    }
    public function testSplDetect429()
    {
        $this->assertEquals('N-Стародум', $this->object->splitFullName('Стародум').'-Стародум');
    }
    public function testSplDetect430()
    {
        $this->assertEquals('N-Степан', $this->object->splitFullName('Степан').'-Степан');
    }
    public function testSplDetect431()
    {
        $this->assertEquals('N-Стефаній', $this->object->splitFullName('Стефаній').'-Стефаній');
    }
    public function testSplDetect432()
    {
        $this->assertEquals('N-Стожар', $this->object->splitFullName('Стожар').'-Стожар');
    }
    public function testSplDetect433()
    {
        $this->assertEquals('N-Стоймир', $this->object->splitFullName('Стоймир').'-Стоймир');
    }
    public function testSplDetect434()
    {
        $this->assertEquals('N-Стоян', $this->object->splitFullName('Стоян').'-Стоян');
    }
    public function testSplDetect435()
    {
        $this->assertEquals('N-Судивой', $this->object->splitFullName('Судивой').'-Судивой');
    }
    public function testSplDetect436()
    {
        $this->assertEquals('N-Судимир', $this->object->splitFullName('Судимир').'-Судимир');
    }
    public function testSplDetect437()
    {
        $this->assertEquals('N-Судислав', $this->object->splitFullName('Судислав').'-Судислав');
    }
    public function testSplDetect438()
    {
        $this->assertEquals('N-Сурма', $this->object->splitFullName('Сурма').'-Сурма');
    }
    public function testSplDetect439()
    {
        $this->assertEquals('N-Тарас', $this->object->splitFullName('Тарас').'-Тарас');
    }
    public function testSplDetect440()
    {
        $this->assertEquals('N-Татолюб', $this->object->splitFullName('Татолюб').'-Татолюб');
    }
    public function testSplDetect441()
    {
        $this->assertEquals('N-Татомир', $this->object->splitFullName('Татомир').'-Татомир');
    }
    public function testSplDetect442()
    {
        $this->assertEquals('N-Твердигост', $this->object->splitFullName('Твердигост').'-Твердигост');
    }
    public function testSplDetect443()
    {
        $this->assertEquals('N-Твердислав', $this->object->splitFullName('Твердислав').'-Твердислав');
    }
    public function testSplDetect444()
    {
        $this->assertEquals('N-Творилад', $this->object->splitFullName('Творилад').'-Творилад');
    }
    public function testSplDetect445()
    {
        $this->assertEquals('N-Творимир', $this->object->splitFullName('Творимир').'-Творимир');
    }
    public function testSplDetect446()
    {
        $this->assertEquals('N-Творислав', $this->object->splitFullName('Творислав').'-Творислав');
    }
    public function testSplDetect447()
    {
        $this->assertEquals('N-Тихомир', $this->object->splitFullName('Тихомир').'-Тихомир');
    }
    public function testSplDetect448()
    {
        $this->assertEquals('N-Тихон', $this->object->splitFullName('Тихон').'-Тихон');
    }
    public function testSplDetect449()
    {
        $this->assertEquals('N-Толигнів', $this->object->splitFullName('Толигнів').'-Толигнів');
    }
    public function testSplDetect450()
    {
        $this->assertEquals('N-Толислав', $this->object->splitFullName('Толислав').'-Толислав');
    }
    public function testSplDetect451()
    {
        $this->assertEquals('N-Тригост', $this->object->splitFullName('Тригост').'-Тригост');
    }
    public function testSplDetect452()
    {
        $this->assertEquals('N-Троян', $this->object->splitFullName('Троян').'-Троян');
    }
    public function testSplDetect453()
    {
        $this->assertEquals('N-Триріг', $this->object->splitFullName('Триріг').'-Триріг');
    }
    public function testSplDetect454()
    {
        $this->assertEquals('N-Тур', $this->object->splitFullName('Тур').'-Тур');
    }
    public function testSplDetect455()
    {
        $this->assertEquals('N-Турбог', $this->object->splitFullName('Турбог').'-Турбог');
    }
    public function testSplDetect456()
    {
        $this->assertEquals('N-Турбрід', $this->object->splitFullName('Турбрід').'-Турбрід');
    }
    public function testSplDetect457()
    {
        $this->assertEquals('N-Уличан', $this->object->splitFullName('Уличан').'-Уличан');
    }
    public function testSplDetect458()
    {
        $this->assertEquals('N-Ус', $this->object->splitFullName('Ус').'-Ус');
    }
    public function testSplDetect459()
    {
        $this->assertEquals('N-Хвала', $this->object->splitFullName('Хвала').'-Хвала');
    }
    public function testSplDetect460()
    {
        $this->assertEquals('N-Хвалибог', $this->object->splitFullName('Хвалибог').'-Хвалибог');
    }
    public function testSplDetect461()
    {
        $this->assertEquals('N-Хвалимир', $this->object->splitFullName('Хвалимир').'-Хвалимир');
    }
    public function testSplDetect462()
    {
        $this->assertEquals('N-Ходота', $this->object->splitFullName('Ходота').'-Ходота');
    }
    public function testSplDetect463()
    {
        $this->assertEquals('N-Хорив', $this->object->splitFullName('Хорив').'-Хорив');
    }
    public function testSplDetect464()
    {
        $this->assertEquals('N-Хорошко', $this->object->splitFullName('Хорошко').'-Хорошко');
    }
    public function testSplDetect465()
    {
        $this->assertEquals('N-Хорошун', $this->object->splitFullName('Хорошун').'-Хорошун');
    }
    public function testSplDetect466()
    {
        $this->assertEquals('N-Хотибор', $this->object->splitFullName('Хотибор').'-Хотибор');
    }
    public function testSplDetect467()
    {
        $this->assertEquals('N-Хотимир', $this->object->splitFullName('Хотимир').'-Хотимир');
    }
    public function testSplDetect468()
    {
        $this->assertEquals('N-Хотян', $this->object->splitFullName('Хотян').'-Хотян');
    }
    public function testSplDetect469()
    {
        $this->assertEquals('N-Хранимир', $this->object->splitFullName('Хранимир').'-Хранимир');
    }
    public function testSplDetect470()
    {
        $this->assertEquals('N-Худан', $this->object->splitFullName('Худан').'-Худан');
    }
    public function testSplDetect471()
    {
        $this->assertEquals('N-Царко', $this->object->splitFullName('Царко').'-Царко');
    }
    public function testSplDetect472()
    {
        $this->assertEquals('N-Цвітан', $this->object->splitFullName('Цвітан').'-Цвітан');
    }
    public function testSplDetect473()
    {
        $this->assertEquals('N-Чара', $this->object->splitFullName('Чара').'-Чара');
    }
    public function testSplDetect474()
    {
        $this->assertEquals('N-Чернин', $this->object->splitFullName('Чернин').'-Чернин');
    }
    public function testSplDetect475()
    {
        $this->assertEquals('N-Чеслав', $this->object->splitFullName('Чеслав').'-Чеслав');
    }
    public function testSplDetect476()
    {
        $this->assertEquals('N-Чесмил', $this->object->splitFullName('Чесмил').'-Чесмил');
    }
    public function testSplDetect477()
    {
        $this->assertEquals('N-Честислав', $this->object->splitFullName('Честислав').'-Честислав');
    }
    public function testSplDetect478()
    {
        $this->assertEquals('N-Чорновіл', $this->object->splitFullName('Чорновіл').'-Чорновіл');
    }
    public function testSplDetect479()
    {
        $this->assertEquals('N-Чорнота', $this->object->splitFullName('Чорнота').'-Чорнота');
    }
    public function testSplDetect480()
    {
        $this->assertEquals('N-Чорнотур', $this->object->splitFullName('Чорнотур').'-Чорнотур');
    }
    public function testSplDetect481()
    {
        $this->assertEquals('N-Щастибог', $this->object->splitFullName('Щастибог').'-Щастибог');
    }
    public function testSplDetect482()
    {
        $this->assertEquals('N-Щастислав', $this->object->splitFullName('Щастислав').'-Щастислав');
    }
    public function testSplDetect483()
    {
        $this->assertEquals('N-Щедрогост', $this->object->splitFullName('Щедрогост').'-Щедрогост');
    }
    public function testSplDetect484()
    {
        $this->assertEquals('N-Щек', $this->object->splitFullName('Щек').'-Щек');
    }
    public function testSplDetect485()
    {
        $this->assertEquals('N-Юрій', $this->object->splitFullName('Юрій').'-Юрій');
    }
    public function testSplDetect486()
    {
        $this->assertEquals('N-Юлій', $this->object->splitFullName('Юлій').'-Юлій');
    }
    public function testSplDetect487()
    {
        $this->assertEquals('N-Ява', $this->object->splitFullName('Ява').'-Ява');
    }
    public function testSplDetect488()
    {
        $this->assertEquals('N-Явір', $this->object->splitFullName('Явір').'-Явір');
    }
    public function testSplDetect489()
    {
        $this->assertEquals('N-Яволод', $this->object->splitFullName('Яволод').'-Яволод');
    }
    public function testSplDetect490()
    {
        $this->assertEquals('N-Яр', $this->object->splitFullName('Яр').'-Яр');
    }
    public function testSplDetect491()
    {
        $this->assertEquals('N-Ярема', $this->object->splitFullName('Ярема').'-Ярема');
    }
    public function testSplDetect492()
    {
        $this->assertEquals('N-Ярило', $this->object->splitFullName('Ярило').'-Ярило');
    }
    public function testSplDetect493()
    {
        $this->assertEquals('N-Яровид', $this->object->splitFullName('Яровид').'-Яровид');
    }
    public function testSplDetect494()
    {
        $this->assertEquals('N-Яровит', $this->object->splitFullName('Яровит').'-Яровит');
    }
    public function testSplDetect495()
    {
        $this->assertEquals('N-Яромил', $this->object->splitFullName('Яромил').'-Яромил');
    }
    public function testSplDetect496()
    {
        $this->assertEquals('N-Яромир', $this->object->splitFullName('Яромир').'-Яромир');
    }
    public function testSplDetect497()
    {
        $this->assertEquals('N-Яромисл', $this->object->splitFullName('Яромисл').'-Яромисл');
    }
    public function testSplDetect498()
    {
        $this->assertEquals('N-Ярополк', $this->object->splitFullName('Ярополк').'-Ярополк');
    }
    public function testSplDetect499()
    {
        $this->assertEquals('N-Яросвіт', $this->object->splitFullName('Яросвіт').'-Яросвіт');
    }
    public function testSplDetect500()
    {
        $this->assertEquals('N-Ярослав', $this->object->splitFullName('Ярослав').'-Ярослав');
    }
    public function testSplDetect501()
    {
        $this->assertEquals('N-Ярош', $this->object->splitFullName('Ярош').'-Ярош');
    }
    public function testSplDetect502()
    {
        $this->assertEquals('N-Яртур', $this->object->splitFullName('Яртур').'-Яртур');
    }
    public function testSplDetect503()
    {
        $this->assertEquals('N-Ярчик', $this->object->splitFullName('Ярчик').'-Ярчик');
    }
    public function testSplDetect504()
    {
        $this->assertEquals('N-Ясен', $this->object->splitFullName('Ясен').'-Ясен');
    }
    public function testSplDetect505()
    {
        $this->assertEquals('N-Ясновид', $this->object->splitFullName('Ясновид').'-Ясновид');
    }
    public function testSplDetect506()
    {
        $this->assertEquals('N-Ясногор', $this->object->splitFullName('Ясногор').'-Ясногор');
    }
    public function testSplDetect507()
    {
        $this->assertEquals('N-Яснозір', $this->object->splitFullName('Яснозір').'-Яснозір');
    }
    public function testSplDetect508()
    {
        $this->assertEquals('N-Яснолик', $this->object->splitFullName('Яснолик').'-Яснолик');
    }
    public function testSplDetect509()
    {
        $this->assertEquals('N-Августа', $this->object->splitFullName('Августа').'-Августа');
    }
    public function testSplDetect510()
    {
        $this->assertEquals('N-Аврелія', $this->object->splitFullName('Аврелія').'-Аврелія');
    }
    public function testSplDetect511()
    {
        $this->assertEquals('N-Аврора', $this->object->splitFullName('Аврора').'-Аврора');
    }
    public function testSplDetect512()
    {
        $this->assertEquals('N-Агнія', $this->object->splitFullName('Агнія').'-Агнія');
    }
    public function testSplDetect513()
    {
        $this->assertEquals('N-Агрипина', $this->object->splitFullName('Агрипина').'-Агрипина');
    }
    public function testSplDetect514()
    {
        $this->assertEquals('N-Ада', $this->object->splitFullName('Ада').'-Ада');
    }
    public function testSplDetect515()
    {
        $this->assertEquals('N-Аделаїда', $this->object->splitFullName('Аделаїда').'-Аделаїда');
    }
    public function testSplDetect516()
    {
        $this->assertEquals('N-Адріана', $this->object->splitFullName('Адріана').'-Адріана');
    }
    public function testSplDetect517()
    {
        $this->assertEquals('N-Аза', $this->object->splitFullName('Аза').'-Аза');
    }
    public function testSplDetect518()
    {
        $this->assertEquals('N-Азалія', $this->object->splitFullName('Азалія').'-Азалія');
    }
    public function testSplDetect519()
    {
        $this->assertEquals('N-Аліна', $this->object->splitFullName('Аліна').'-Аліна');
    }
    public function testSplDetect520()
    {
        $this->assertEquals('N-Аліса', $this->object->splitFullName('Аліса').'-Аліса');
    }
    public function testSplDetect521()
    {
        $this->assertEquals('N-Алла', $this->object->splitFullName('Алла').'-Алла');
    }
    public function testSplDetect522()
    {
        $this->assertEquals('N-Альбертина', $this->object->splitFullName('Альбертина').'-Альбертина');
    }
    public function testSplDetect523()
    {
        $this->assertEquals('N-Альбіна', $this->object->splitFullName('Альбіна').'-Альбіна');
    }
    public function testSplDetect524()
    {
        $this->assertEquals('N-Альвіна', $this->object->splitFullName('Альвіна').'-Альвіна');
    }
    public function testSplDetect525()
    {
        $this->assertEquals('N-Анастасія', $this->object->splitFullName('Анастасія').'-Анастасія');
    }
    public function testSplDetect526()
    {
        $this->assertEquals('N-Ангеліна', $this->object->splitFullName('Ангеліна').'-Ангеліна');
    }
    public function testSplDetect527()
    {
        $this->assertEquals('N-Анжела', $this->object->splitFullName('Анжела').'-Анжела');
    }
    public function testSplDetect528()
    {
        $this->assertEquals('N-Антоніна', $this->object->splitFullName('Антоніна').'-Антоніна');
    }
    public function testSplDetect529()
    {
        $this->assertEquals('N-Анфіса', $this->object->splitFullName('Анфіса').'-Анфіса');
    }
    public function testSplDetect530()
    {
        $this->assertEquals('N-Аріадна', $this->object->splitFullName('Аріадна').'-Аріадна');
    }
    public function testSplDetect531()
    {
        $this->assertEquals('N-Арсена', $this->object->splitFullName('Арсена').'-Арсена');
    }
    public function testSplDetect532()
    {
        $this->assertEquals('N-Ася', $this->object->splitFullName('Ася').'-Ася');
    }
    public function testSplDetect533()
    {
        $this->assertEquals('N-Афіна', $this->object->splitFullName('Афіна').'-Афіна');
    }
    public function testSplDetect534()
    {
        $this->assertEquals('N-Афродіта', $this->object->splitFullName('Афродіта').'-Афродіта');
    }
    public function testSplDetect535()
    {
        $this->assertEquals('N-Бажана', $this->object->splitFullName('Бажана').'-Бажана');
    }
    public function testSplDetect536()
    {
        $this->assertEquals('N-Берегиня', $this->object->splitFullName('Берегиня').'-Берегиня');
    }
    public function testSplDetect537()
    {
        $this->assertEquals('N-Біловида', $this->object->splitFullName('Біловида').'-Біловида');
    }
    public function testSplDetect538()
    {
        $this->assertEquals('N-Біломира', $this->object->splitFullName('Біломира').'-Біломира');
    }
    public function testSplDetect539()
    {
        $this->assertEquals('N-Білослава', $this->object->splitFullName('Білослава').'-Білослава');
    }
    public function testSplDetect540()
    {
        $this->assertEquals('N-Біляна', $this->object->splitFullName('Біляна').'-Біляна');
    }
    public function testSplDetect541()
    {
        $this->assertEquals('N-Благиня', $this->object->splitFullName('Благиня').'-Благиня');
    }
    public function testSplDetect542()
    {
        $this->assertEquals('N-Благовида', $this->object->splitFullName('Благовида').'-Благовида');
    }
    public function testSplDetect543()
    {
        $this->assertEquals('N-Благовіра', $this->object->splitFullName('Благовіра').'-Благовіра');
    }
    public function testSplDetect544()
    {
        $this->assertEquals('N-Благовіста', $this->object->splitFullName('Благовіста').'-Благовіста');
    }
    public function testSplDetect545()
    {
        $this->assertEquals('N-Благослава', $this->object->splitFullName('Благослава').'-Благослава');
    }
    public function testSplDetect546()
    {
        $this->assertEquals('N-Богдана', $this->object->splitFullName('Богдана').'-Богдана');
    }
    public function testSplDetect547()
    {
        $this->assertEquals('N-Боговіра', $this->object->splitFullName('Боговіра').'-Боговіра');
    }
    public function testSplDetect548()
    {
        $this->assertEquals('N-Боговіста', $this->object->splitFullName('Боговіста').'-Боговіста');
    }
    public function testSplDetect549()
    {
        $this->assertEquals('N-Богодара', $this->object->splitFullName('Богодара').'-Богодара');
    }
    public function testSplDetect550()
    {
        $this->assertEquals('N-Боголіпа', $this->object->splitFullName('Боголіпа').'-Боголіпа');
    }
    public function testSplDetect551()
    {
        $this->assertEquals('N-Боголюба', $this->object->splitFullName('Боголюба').'-Боголюба');
    }
    public function testSplDetect552()
    {
        $this->assertEquals('N-Богосвята', $this->object->splitFullName('Богосвята').'-Богосвята');
    }
    public function testSplDetect553()
    {
        $this->assertEquals('N-Богумила', $this->object->splitFullName('Богумила').'-Богумила');
    }
    public function testSplDetect554()
    {
        $this->assertEquals('N-Богумира', $this->object->splitFullName('Богумира').'-Богумира');
    }
    public function testSplDetect555()
    {
        $this->assertEquals('N-Богуслава', $this->object->splitFullName('Богуслава').'-Богуслава');
    }
    public function testSplDetect556()
    {
        $this->assertEquals('N-Божедана', $this->object->splitFullName('Божедана').'-Божедана');
    }
    public function testSplDetect557()
    {
        $this->assertEquals('N-Божедара', $this->object->splitFullName('Божедара').'-Божедара');
    }
    public function testSplDetect558()
    {
        $this->assertEquals('N-Божемила', $this->object->splitFullName('Божемила').'-Божемила');
    }
    public function testSplDetect559()
    {
        $this->assertEquals('N-Божена', $this->object->splitFullName('Божена').'-Божена');
    }
    public function testSplDetect560()
    {
        $this->assertEquals('N-Божиця', $this->object->splitFullName('Божиця').'-Божиця');
    }
    public function testSplDetect561()
    {
        $this->assertEquals('N-Болеслава', $this->object->splitFullName('Болеслава').'-Болеслава');
    }
    public function testSplDetect562()
    {
        $this->assertEquals('N-Борислава', $this->object->splitFullName('Борислава').'-Борислава');
    }
    public function testSplDetect563()
    {
        $this->assertEquals('N-Боронислава', $this->object->splitFullName('Боронислава').'-Боронислава');
    }
    public function testSplDetect564()
    {
        $this->assertEquals('N-Братолюба', $this->object->splitFullName('Братолюба').'-Братолюба');
    }
    public function testSplDetect565()
    {
        $this->assertEquals('N-Братомила', $this->object->splitFullName('Братомила').'-Братомила');
    }
    public function testSplDetect566()
    {
        $this->assertEquals('N-Брячислава', $this->object->splitFullName('Брячислава').'-Брячислава');
    }
    public function testSplDetect567()
    {
        $this->assertEquals('N-Будана', $this->object->splitFullName('Будана').'-Будана');
    }
    public function testSplDetect568()
    {
        $this->assertEquals('N-Будимира', $this->object->splitFullName('Будимира').'-Будимира');
    }
    public function testSplDetect569()
    {
        $this->assertEquals('N-Будислава', $this->object->splitFullName('Будислава').'-Будислава');
    }
    public function testSplDetect570()
    {
        $this->assertEquals('N-Ведана', $this->object->splitFullName('Ведана').'-Ведана');
    }
    public function testSplDetect571()
    {
        $this->assertEquals('N-Велимира', $this->object->splitFullName('Велимира').'-Велимира');
    }
    public function testSplDetect572()
    {
        $this->assertEquals('N-Вербава', $this->object->splitFullName('Вербава').'-Вербава');
    }
    public function testSplDetect573()
    {
        $this->assertEquals('N-Верхуслава', $this->object->splitFullName('Верхуслава').'-Верхуслава');
    }
    public function testSplDetect574()
    {
        $this->assertEquals('N-Веселина', $this->object->splitFullName('Веселина').'-Веселина');
    }
    public function testSplDetect575()
    {
        $this->assertEquals('N-Веселка', $this->object->splitFullName('Веселка').'-Веселка');
    }
    public function testSplDetect576()
    {
        $this->assertEquals('N-Весна', $this->object->splitFullName('Весна').'-Весна');
    }
    public function testSplDetect577()
    {
        $this->assertEquals('N-Вишена', $this->object->splitFullName('Вишена').'-Вишена');
    }
    public function testSplDetect578()
    {
        $this->assertEquals('N-Вишеслава', $this->object->splitFullName('Вишеслава').'-Вишеслава');
    }
    public function testSplDetect579()
    {
        $this->assertEquals('N-Вишня', $this->object->splitFullName('Вишня').'-Вишня');
    }
    public function testSplDetect580()
    {
        $this->assertEquals('N-Віра', $this->object->splitFullName('Віра').'-Віра');
    }
    public function testSplDetect581()
    {
        $this->assertEquals('N-Віродана', $this->object->splitFullName('Віродана').'-Віродана');
    }
    public function testSplDetect582()
    {
        $this->assertEquals('N-Віродара', $this->object->splitFullName('Віродара').'-Віродара');
    }
    public function testSplDetect583()
    {
        $this->assertEquals('N-Вірослава', $this->object->splitFullName('Вірослава').'-Вірослава');
    }
    public function testSplDetect584()
    {
        $this->assertEquals('N-Віста', $this->object->splitFullName('Віста').'-Віста');
    }
    public function testSplDetect585()
    {
        $this->assertEquals('N-Вістуна', $this->object->splitFullName('Вістуна').'-Вістуна');
    }
    public function testSplDetect586()
    {
        $this->assertEquals('N-Вітана', $this->object->splitFullName('Вітана').'-Вітана');
    }
    public function testSplDetect587()
    {
        $this->assertEquals('N-Влада', $this->object->splitFullName('Влада').'-Влада');
    }
    public function testSplDetect588()
    {
        $this->assertEquals('N-Владислава', $this->object->splitFullName('Владислава').'-Владислава');
    }
    public function testSplDetect589()
    {
        $this->assertEquals('N-Власта', $this->object->splitFullName('Власта').'-Власта');
    }
    public function testSplDetect590()
    {
        $this->assertEquals('N-Вогнедара', $this->object->splitFullName('Вогнедара').'-Вогнедара');
    }
    public function testSplDetect591()
    {
        $this->assertEquals('N-Вогняна', $this->object->splitFullName('Вогняна').'-Вогняна');
    }
    public function testSplDetect592()
    {
        $this->assertEquals('N-Волелюба', $this->object->splitFullName('Волелюба').'-Волелюба');
    }
    public function testSplDetect593()
    {
        $this->assertEquals('N-Володимира', $this->object->splitFullName('Володимира').'-Володимира');
    }
    public function testSplDetect594()
    {
        $this->assertEquals('N-Волошка', $this->object->splitFullName('Волошка').'-Волошка');
    }
    public function testSplDetect595()
    {
        $this->assertEquals('N-Воля', $this->object->splitFullName('Воля').'-Воля');
    }
    public function testSplDetect596()
    {
        $this->assertEquals('N-Всеволода', $this->object->splitFullName('Всеволода').'-Всеволода');
    }
    public function testSplDetect597()
    {
        $this->assertEquals('N-Вселюба', $this->object->splitFullName('Вселюба').'-Вселюба');
    }
    public function testSplDetect598()
    {
        $this->assertEquals('N-Всемира', $this->object->splitFullName('Всемира').'-Всемира');
    }
    public function testSplDetect599()
    {
        $this->assertEquals('N-Всеслава', $this->object->splitFullName('Всеслава').'-Всеслава');
    }
    public function testSplDetect600()
    {
        $this->assertEquals('N-В’ячеслава', $this->object->splitFullName('В’ячеслава').'-В’ячеслава');
    }
    public function testSplDetect601()
    {
        $this->assertEquals('N-Гаїна', $this->object->splitFullName('Гаїна').'-Гаїна');
    }
    public function testSplDetect602()
    {
        $this->assertEquals('N-Гатусила', $this->object->splitFullName('Гатусила').'-Гатусила');
    }
    public function testSplDetect603()
    {
        $this->assertEquals('N-Гарнослава', $this->object->splitFullName('Гарнослава').'-Гарнослава');
    }
    public function testSplDetect604()
    {
        $this->assertEquals('N-Голубка', $this->object->splitFullName('Голубка').'-Голубка');
    }
    public function testSplDetect605()
    {
        $this->assertEquals('N-Горигляда', $this->object->splitFullName('Горигляда').'-Горигляда');
    }
    public function testSplDetect606()
    {
        $this->assertEquals('N-Горислава', $this->object->splitFullName('Горислава').'-Горислава');
    }
    public function testSplDetect607()
    {
        $this->assertEquals('N-Городислава', $this->object->splitFullName('Городислава').'-Городислава');
    }
    public function testSplDetect608()
    {
        $this->assertEquals('N-Гострозора', $this->object->splitFullName('Гострозора').'-Гострозора');
    }
    public function testSplDetect609()
    {
        $this->assertEquals('N-Градислава', $this->object->splitFullName('Градислава').'-Градислава');
    }
    public function testSplDetect610()
    {
        $this->assertEquals('N-Гранислава', $this->object->splitFullName('Гранислава').'-Гранислава');
    }
    public function testSplDetect611()
    {
        $this->assertEquals('N-Гремислава', $this->object->splitFullName('Гремислава').'-Гремислава');
    }
    public function testSplDetect612()
    {
        $this->assertEquals('N-Далібора', $this->object->splitFullName('Далібора').'-Далібора');
    }
    public function testSplDetect613()
    {
        $this->assertEquals('N-Дана', $this->object->splitFullName('Дана').'-Дана');
    }
    public function testSplDetect614()
    {
        $this->assertEquals('N-Дарина', $this->object->splitFullName('Дарина').'-Дарина');
    }
    public function testSplDetect615()
    {
        $this->assertEquals('N-Дзвенимира', $this->object->splitFullName('Дзвенимира').'-Дзвенимира');
    }
    public function testSplDetect616()
    {
        $this->assertEquals('N-Дзвенислава', $this->object->splitFullName('Дзвенислава').'-Дзвенислава');
    }
    public function testSplDetect617()
    {
        $this->assertEquals('N-Дзвінка', $this->object->splitFullName('Дзвінка').'-Дзвінка');
    }
    public function testSplDetect618()
    {
        $this->assertEquals('N-Діяна', $this->object->splitFullName('Діяна').'-Діяна');
    }
    public function testSplDetect619()
    {
        $this->assertEquals('N-Добринка', $this->object->splitFullName('Добринка').'-Добринка');
    }
    public function testSplDetect620()
    {
        $this->assertEquals('N-Добровіста', $this->object->splitFullName('Добровіста').'-Добровіста');
    }
    public function testSplDetect621()
    {
        $this->assertEquals('N-Доброгніва', $this->object->splitFullName('Доброгніва').'-Доброгніва');
    }
    public function testSplDetect622()
    {
        $this->assertEquals('N-Добролюба', $this->object->splitFullName('Добролюба').'-Добролюба');
    }
    public function testSplDetect623()
    {
        $this->assertEquals('N-Добромила', $this->object->splitFullName('Добромила').'-Добромила');
    }
    public function testSplDetect624()
    {
        $this->assertEquals('N-Добромира', $this->object->splitFullName('Добромира').'-Добромира');
    }
    public function testSplDetect625()
    {
        $this->assertEquals('N-Доброніга', $this->object->splitFullName('Доброніга').'-Доброніга');
    }
    public function testSplDetect626()
    {
        $this->assertEquals('N-Доброслава', $this->object->splitFullName('Доброслава').'-Доброслава');
    }
    public function testSplDetect627()
    {
        $this->assertEquals('N-Долина', $this->object->splitFullName('Долина').'-Долина');
    }
    public function testSplDetect628()
    {
        $this->assertEquals('N-Доля', $this->object->splitFullName('Доля').'-Доля');
    }
    public function testSplDetect629()
    {
        $this->assertEquals('N-Домаха', $this->object->splitFullName('Домаха').'-Домаха');
    }
    public function testSplDetect630()
    {
        $this->assertEquals('N-Доморада', $this->object->splitFullName('Доморада').'-Доморада');
    }
    public function testSplDetect631()
    {
        $this->assertEquals('N-Дружелюба', $this->object->splitFullName('Дружелюба').'-Дружелюба');
    }
    public function testSplDetect632()
    {
        $this->assertEquals('N-Жадана', $this->object->splitFullName('Жадана').'-Жадана');
    }
    public function testSplDetect633()
    {
        $this->assertEquals('N-Ждана', $this->object->splitFullName('Ждана').'-Ждана');
    }
    public function testSplDetect634()
    {
        $this->assertEquals('N-Живосила', $this->object->splitFullName('Живосила').'-Живосила');
    }
    public function testSplDetect635()
    {
        $this->assertEquals('N-Живослава', $this->object->splitFullName('Живослава').'-Живослава');
    }
    public function testSplDetect636()
    {
        $this->assertEquals('N-Житомира', $this->object->splitFullName('Житомира').'-Житомира');
    }
    public function testSplDetect637()
    {
        $this->assertEquals('N-Життєлюба', $this->object->splitFullName('Життєлюба').'-Життєлюба');
    }
    public function testSplDetect638()
    {
        $this->assertEquals('N-Забава', $this->object->splitFullName('Забава').'-Забава');
    }
    public function testSplDetect639()
    {
        $this->assertEquals('N-Звенигора', $this->object->splitFullName('Звенигора').'-Звенигора');
    }
    public function testSplDetect640()
    {
        $this->assertEquals('N-Звенислава', $this->object->splitFullName('Звенислава').'-Звенислава');
    }
    public function testSplDetect641()
    {
        $this->assertEquals('N-Звонимира', $this->object->splitFullName('Звонимира').'-Звонимира');
    }
    public function testSplDetect642()
    {
        $this->assertEquals('N-Зірка', $this->object->splitFullName('Зірка').'-Зірка');
    }
    public function testSplDetect643()
    {
        $this->assertEquals('N-Злата', $this->object->splitFullName('Злата').'-Злата');
    }
    public function testSplDetect644()
    {
        $this->assertEquals('N-Златомира', $this->object->splitFullName('Златомира').'-Златомира');
    }
    public function testSplDetect645()
    {
        $this->assertEquals('N-Златоуста', $this->object->splitFullName('Златоуста').'-Златоуста');
    }
    public function testSplDetect646()
    {
        $this->assertEquals('N-Золотодана', $this->object->splitFullName('Золотодана').'-Золотодана');
    }
    public function testSplDetect647()
    {
        $this->assertEquals('N-Зорегляда', $this->object->splitFullName('Зорегляда').'-Зорегляда');
    }
    public function testSplDetect648()
    {
        $this->assertEquals('N-Зореслава', $this->object->splitFullName('Зореслава').'-Зореслава');
    }
    public function testSplDetect649()
    {
        $this->assertEquals('N-Зорина', $this->object->splitFullName('Зорина').'-Зорина');
    }
    public function testSplDetect650()
    {
        $this->assertEquals('N-Зоря', $this->object->splitFullName('Зоря').'-Зоря');
    }
    public function testSplDetect651()
    {
        $this->assertEquals('N-Зоряна', $this->object->splitFullName('Зоряна').'-Зоряна');
    }
    public function testSplDetect652()
    {
        $this->assertEquals('N-Казка', $this->object->splitFullName('Казка').'-Казка');
    }
    public function testSplDetect653()
    {
        $this->assertEquals('N-Калина', $this->object->splitFullName('Калина').'-Калина');
    }
    public function testSplDetect654()
    {
        $this->assertEquals('N-Квітка', $this->object->splitFullName('Квітка').'-Квітка');
    }
    public function testSplDetect655()
    {
        $this->assertEquals('N-Колодара', $this->object->splitFullName('Колодара').'-Колодара');
    }
    public function testSplDetect656()
    {
        $this->assertEquals('N-Красава', $this->object->splitFullName('Красава').'-Красава');
    }
    public function testSplDetect657()
    {
        $this->assertEquals('N-Красимира', $this->object->splitFullName('Красимира').'-Красимира');
    }
    public function testSplDetect658()
    {
        $this->assertEquals('N-Красновида', $this->object->splitFullName('Красновида').'-Красновида');
    }
    public function testSplDetect659()
    {
        $this->assertEquals('N-Краснолика', $this->object->splitFullName('Краснолика').'-Краснолика');
    }
    public function testSplDetect660()
    {
        $this->assertEquals('N-Красуня', $this->object->splitFullName('Красуня').'-Красуня');
    }
    public function testSplDetect661()
    {
        $this->assertEquals('N-Купава', $this->object->splitFullName('Купава').'-Купава');
    }
    public function testSplDetect662()
    {
        $this->assertEquals('N-Лада', $this->object->splitFullName('Лада').'-Лада');
    }
    public function testSplDetect663()
    {
        $this->assertEquals('N-Ладислава', $this->object->splitFullName('Ладислава').'-Ладислава');
    }
    public function testSplDetect664()
    {
        $this->assertEquals('N-Ладомила', $this->object->splitFullName('Ладомила').'-Ладомила');
    }
    public function testSplDetect665()
    {
        $this->assertEquals('N-Ладомира', $this->object->splitFullName('Ладомира').'-Ладомира');
    }
    public function testSplDetect666()
    {
        $this->assertEquals('N-Левина', $this->object->splitFullName('Левина').'-Левина');
    }
    public function testSplDetect667()
    {
        $this->assertEquals('N-Лель', $this->object->splitFullName('Лель').'-Лель');
    }
    public function testSplDetect668()
    {
        $this->assertEquals('N-Леля', $this->object->splitFullName('Леля').'-Леля');
    }
    public function testSplDetect669()
    {
        $this->assertEquals('N-Леся', $this->object->splitFullName('Леся').'-Леся');
    }
    public function testSplDetect670()
    {
        $this->assertEquals('N-Либідь', $this->object->splitFullName('Либідь').'-Либідь');
    }
    public function testSplDetect671()
    {
        $this->assertEquals('N-Лілея', $this->object->splitFullName('Лілея').'-Лілея');
    }
    public function testSplDetect672()
    {
        $this->assertEquals('N-Лоліта', $this->object->splitFullName('Лоліта').'-Лоліта');
    }
    public function testSplDetect673()
    {
        $this->assertEquals('N-Любава', $this->object->splitFullName('Любава').'-Любава');
    }
    public function testSplDetect674()
    {
        $this->assertEquals('N-Любаня', $this->object->splitFullName('Любаня').'-Любаня');
    }
    public function testSplDetect675()
    {
        $this->assertEquals('N-Любислава', $this->object->splitFullName('Любислава').'-Любислава');
    }
    public function testSplDetect676()
    {
        $this->assertEquals('N-Любов', $this->object->splitFullName('Любов').'-Любов');
    }
    public function testSplDetect677()
    {
        $this->assertEquals('N-Любомила', $this->object->splitFullName('Любомила').'-Любомила');
    }
    public function testSplDetect678()
    {
        $this->assertEquals('N-Любомира', $this->object->splitFullName('Любомира').'-Любомира');
    }
    public function testSplDetect679()
    {
        $this->assertEquals('N-Люборада', $this->object->splitFullName('Люборада').'-Люборада');
    }
    public function testSplDetect680()
    {
        $this->assertEquals('N-Людмила', $this->object->splitFullName('Людмила').'-Людмила');
    }
    public function testSplDetect681()
    {
        $this->assertEquals('N-Людомила', $this->object->splitFullName('Людомила').'-Людомила');
    }
    public function testSplDetect682()
    {
        $this->assertEquals('N-Любослава', $this->object->splitFullName('Любослава').'-Любослава');
    }
    public function testSplDetect683()
    {
        $this->assertEquals('N-Льоля', $this->object->splitFullName('Льоля').'-Льоля');
    }
    public function testSplDetect684()
    {
        $this->assertEquals('N-Мавка', $this->object->splitFullName('Мавка').'-Мавка');
    }
    public function testSplDetect685()
    {
        $this->assertEquals('N-Магадара', $this->object->splitFullName('Магадара').'-Магадара');
    }
    public function testSplDetect686()
    {
        $this->assertEquals('N-Маїна', $this->object->splitFullName('Маїна').'-Маїна');
    }
    public function testSplDetect687()
    {
        $this->assertEquals('N-Маківка', $this->object->splitFullName('Маківка').'-Маківка');
    }
    public function testSplDetect688()
    {
        $this->assertEquals('N-Малуня', $this->object->splitFullName('Малуня').'-Малуня');
    }
    public function testSplDetect689()
    {
        $this->assertEquals('N-Малуша', $this->object->splitFullName('Малуша').'-Малуша');
    }
    public function testSplDetect690()
    {
        $this->assertEquals('N-Мальва', $this->object->splitFullName('Мальва').'-Мальва');
    }
    public function testSplDetect691()
    {
        $this->assertEquals('N-Марута', $this->object->splitFullName('Марута').'-Марута');
    }
    public function testSplDetect692()
    {
        $this->assertEquals('N-Мая', $this->object->splitFullName('Мая').'-Мая');
    }
    public function testSplDetect693()
    {
        $this->assertEquals('N-Медорада', $this->object->splitFullName('Медорада').'-Медорада');
    }
    public function testSplDetect694()
    {
        $this->assertEquals('N-Мечислава', $this->object->splitFullName('Мечислава').'-Мечислава');
    }
    public function testSplDetect695()
    {
        $this->assertEquals('N-Милана', $this->object->splitFullName('Милана').'-Милана');
    }
    public function testSplDetect696()
    {
        $this->assertEquals('N-Милована', $this->object->splitFullName('Милована').'-Милована');
    }
    public function testSplDetect697()
    {
        $this->assertEquals('N-Миловида', $this->object->splitFullName('Миловида').'-Миловида');
    }
    public function testSplDetect698()
    {
        $this->assertEquals('N-Милодара', $this->object->splitFullName('Милодара').'-Милодара');
    }
    public function testSplDetect699()
    {
        $this->assertEquals('N-Милослава', $this->object->splitFullName('Милослава').'-Милослава');
    }
    public function testSplDetect700()
    {
        $this->assertEquals('N-Мирана', $this->object->splitFullName('Мирана').'-Мирана');
    }
    public function testSplDetect701()
    {
        $this->assertEquals('N-Миробога', $this->object->splitFullName('Миробога').'-Миробога');
    }
    public function testSplDetect702()
    {
        $this->assertEquals('N-Миролюба', $this->object->splitFullName('Миролюба').'-Миролюба');
    }
    public function testSplDetect703()
    {
        $this->assertEquals('N-Мирослава', $this->object->splitFullName('Мирослава').'-Мирослава');
    }
    public function testSplDetect704()
    {
        $this->assertEquals('N-Млада', $this->object->splitFullName('Млада').'-Млада');
    }
    public function testSplDetect705()
    {
        $this->assertEquals('N-Мокрина', $this->object->splitFullName('Мокрина').'-Мокрина');
    }
    public function testSplDetect706()
    {
        $this->assertEquals('N-Мстислава', $this->object->splitFullName('Мстислава').'-Мстислава');
    }
    public function testSplDetect707()
    {
        $this->assertEquals('N-Мудролюба', $this->object->splitFullName('Мудролюба').'-Мудролюба');
    }
    public function testSplDetect708()
    {
        $this->assertEquals('N-Надія', $this->object->splitFullName('Надія').'-Надія');
    }
    public function testSplDetect709()
    {
        $this->assertEquals('N-Найда', $this->object->splitFullName('Найда').'-Найда');
    }
    public function testSplDetect710()
    {
        $this->assertEquals('N-Найдена', $this->object->splitFullName('Найдена').'-Найдена');
    }
    public function testSplDetect711()
    {
        $this->assertEquals('N-Наслава', $this->object->splitFullName('Наслава').'-Наслава');
    }
    public function testSplDetect712()
    {
        $this->assertEquals('N-Немира', $this->object->splitFullName('Немира').'-Немира');
    }
    public function testSplDetect713()
    {
        $this->assertEquals('N-Нігослава', $this->object->splitFullName('Нігослава').'-Нігослава');
    }
    public function testSplDetect714()
    {
        $this->assertEquals('N-Незабудка', $this->object->splitFullName('Незабудка').'-Незабудка');
    }
    public function testSplDetect715()
    {
        $this->assertEquals('N-Огняна', $this->object->splitFullName('Огняна').'-Огняна');
    }
    public function testSplDetect716()
    {
        $this->assertEquals('N-Оримира', $this->object->splitFullName('Оримира').'-Оримира');
    }
    public function testSplDetect717()
    {
        $this->assertEquals('N-Орина', $this->object->splitFullName('Орина').'-Орина');
    }
    public function testSplDetect718()
    {
        $this->assertEquals('N-Орислава', $this->object->splitFullName('Орислава').'-Орислава');
    }
    public function testSplDetect719()
    {
        $this->assertEquals('N-Орися', $this->object->splitFullName('Орися').'-Орися');
    }
    public function testSplDetect720()
    {
        $this->assertEquals('N-Оріяна', $this->object->splitFullName('Оріяна').'-Оріяна');
    }
    public function testSplDetect721()
    {
        $this->assertEquals('N-Орогоста', $this->object->splitFullName('Орогоста').'-Орогоста');
    }
    public function testSplDetect722()
    {
        $this->assertEquals('N-Острозора', $this->object->splitFullName('Острозора').'-Острозора');
    }
    public function testSplDetect723()
    {
        $this->assertEquals('N-Остромира', $this->object->splitFullName('Остромира').'-Остромира');
    }
    public function testSplDetect724()
    {
        $this->assertEquals('N-Осмомисла', $this->object->splitFullName('Осмомисла').'-Осмомисла');
    }
    public function testSplDetect725()
    {
        $this->assertEquals('N-Остромова', $this->object->splitFullName('Остромова').'-Остромова');
    }
    public function testSplDetect726()
    {
        $this->assertEquals('N-Пава', $this->object->splitFullName('Пава').'-Пава');
    }
    public function testSplDetect727()
    {
        $this->assertEquals('N-Палажка', $this->object->splitFullName('Палажка').'-Палажка');
    }
    public function testSplDetect728()
    {
        $this->assertEquals('N-Палазга', $this->object->splitFullName('Палазга').'-Палазга');
    }
    public function testSplDetect729()
    {
        $this->assertEquals('N-Перелюба', $this->object->splitFullName('Перелюба').'-Перелюба');
    }
    public function testSplDetect730()
    {
        $this->assertEquals('N-Перемила', $this->object->splitFullName('Перемила').'-Перемила');
    }
    public function testSplDetect731()
    {
        $this->assertEquals('N-Перемисла', $this->object->splitFullName('Перемисла').'-Перемисла');
    }
    public function testSplDetect732()
    {
        $this->assertEquals('N-Півонія', $this->object->splitFullName('Півонія').'-Півонія');
    }
    public function testSplDetect733()
    {
        $this->assertEquals('N-Позвізда', $this->object->splitFullName('Позвізда').'-Позвізда');
    }
    public function testSplDetect734()
    {
        $this->assertEquals('N-Полеза', $this->object->splitFullName('Полеза').'-Полеза');
    }
    public function testSplDetect735()
    {
        $this->assertEquals('N-Поляна', $this->object->splitFullName('Поляна').'-Поляна');
    }
    public function testSplDetect736()
    {
        $this->assertEquals('N-Потішана', $this->object->splitFullName('Потішана').'-Потішана');
    }
    public function testSplDetect737()
    {
        $this->assertEquals('N-Предслава', $this->object->splitFullName('Предслава').'-Предслава');
    }
    public function testSplDetect738()
    {
        $this->assertEquals('N-Рада', $this->object->splitFullName('Рада').'-Рада');
    }
    public function testSplDetect739()
    {
        $this->assertEquals('N-Радана', $this->object->splitFullName('Радана').'-Радана');
    }
    public function testSplDetect740()
    {
        $this->assertEquals('N-Радимира', $this->object->splitFullName('Радимира').'-Радимира');
    }
    public function testSplDetect741()
    {
        $this->assertEquals('N-Радогоста', $this->object->splitFullName('Радогоста').'-Радогоста');
    }
    public function testSplDetect742()
    {
        $this->assertEquals('N-Радомира', $this->object->splitFullName('Радомира').'-Радомира');
    }
    public function testSplDetect743()
    {
        $this->assertEquals('N-Радослава', $this->object->splitFullName('Радослава').'-Радослава');
    }
    public function testSplDetect744()
    {
        $this->assertEquals('N-Рідна', $this->object->splitFullName('Рідна').'-Рідна');
    }
    public function testSplDetect745()
    {
        $this->assertEquals('N-Рогволода', $this->object->splitFullName('Рогволода').'-Рогволода');
    }
    public function testSplDetect746()
    {
        $this->assertEquals('N-Рогніда', $this->object->splitFullName('Рогніда').'-Рогніда');
    }
    public function testSplDetect747()
    {
        $this->assertEquals('N-Родослава', $this->object->splitFullName('Родослава').'-Родослава');
    }
    public function testSplDetect748()
    {
        $this->assertEquals('N-Рожана', $this->object->splitFullName('Рожана').'-Рожана');
    }
    public function testSplDetect749()
    {
        $this->assertEquals('N-Роксолана', $this->object->splitFullName('Роксолана').'-Роксолана');
    }
    public function testSplDetect750()
    {
        $this->assertEquals('N-Ромашка', $this->object->splitFullName('Ромашка').'-Ромашка');
    }
    public function testSplDetect751()
    {
        $this->assertEquals('N-Росава', $this->object->splitFullName('Росава').'-Росава');
    }
    public function testSplDetect752()
    {
        $this->assertEquals('N-Росина', $this->object->splitFullName('Росина').'-Росина');
    }
    public function testSplDetect753()
    {
        $this->assertEquals('N-Ростислава', $this->object->splitFullName('Ростислава').'-Ростислава');
    }
    public function testSplDetect754()
    {
        $this->assertEquals('N-Ростичара', $this->object->splitFullName('Ростичара').'-Ростичара');
    }
    public function testSplDetect755()
    {
        $this->assertEquals('N-Ростуня', $this->object->splitFullName('Ростуня').'-Ростуня');
    }
    public function testSplDetect756()
    {
        $this->assertEquals('N-Рудана', $this->object->splitFullName('Рудана').'-Рудана');
    }
    public function testSplDetect757()
    {
        $this->assertEquals('N-Ружа', $this->object->splitFullName('Ружа').'-Ружа');
    }
    public function testSplDetect758()
    {
        $this->assertEquals('N-Русана', $this->object->splitFullName('Русана').'-Русана');
    }
    public function testSplDetect759()
    {
        $this->assertEquals('N-Русудана', $this->object->splitFullName('Русудана').'-Русудана');
    }
    public function testSplDetect760()
    {
        $this->assertEquals('N-Русява', $this->object->splitFullName('Русява').'-Русява');
    }
    public function testSplDetect761()
    {
        $this->assertEquals('N-Русявка', $this->object->splitFullName('Русявка').'-Русявка');
    }
    public function testSplDetect762()
    {
        $this->assertEquals('N-Рута', $this->object->splitFullName('Рута').'-Рута');
    }
    public function testSplDetect763()
    {
        $this->assertEquals('N-Світана', $this->object->splitFullName('Світана').'-Світана');
    }
    public function testSplDetect764()
    {
        $this->assertEquals('N-Світлана', $this->object->splitFullName('Світлана').'-Світлана');
    }
    public function testSplDetect765()
    {
        $this->assertEquals('N-Світовида', $this->object->splitFullName('Світовида').'-Світовида');
    }
    public function testSplDetect766()
    {
        $this->assertEquals('N-Світогора', $this->object->splitFullName('Світогора').'-Світогора');
    }
    public function testSplDetect767()
    {
        $this->assertEquals('N-Світодара', $this->object->splitFullName('Світодара').'-Світодара');
    }
    public function testSplDetect768()
    {
        $this->assertEquals('N-Світозара', $this->object->splitFullName('Світозара').'-Світозара');
    }
    public function testSplDetect769()
    {
        $this->assertEquals('N-Світолика', $this->object->splitFullName('Світолика').'-Світолика');
    }
    public function testSplDetect770()
    {
        $this->assertEquals('N-Світолюба', $this->object->splitFullName('Світолюба').'-Світолюба');
    }
    public function testSplDetect771()
    {
        $this->assertEquals('N-Світослава', $this->object->splitFullName('Світослава').'-Світослава');
    }
    public function testSplDetect772()
    {
        $this->assertEquals('N-Світояра', $this->object->splitFullName('Світояра').'-Світояра');
    }
    public function testSplDetect773()
    {
        $this->assertEquals('N-Свободана', $this->object->splitFullName('Свободана').'-Свободана');
    }
    public function testSplDetect774()
    {
        $this->assertEquals('N-Святогора', $this->object->splitFullName('Святогора').'-Святогора');
    }
    public function testSplDetect775()
    {
        $this->assertEquals('N-Святолюба', $this->object->splitFullName('Святолюба').'-Святолюба');
    }
    public function testSplDetect776()
    {
        $this->assertEquals('N-Святослава', $this->object->splitFullName('Святослава').'-Святослава');
    }
    public function testSplDetect777()
    {
        $this->assertEquals('N-Силата', $this->object->splitFullName('Силата').'-Силата');
    }
    public function testSplDetect778()
    {
        $this->assertEquals('N-Силолюба', $this->object->splitFullName('Силолюба').'-Силолюба');
    }
    public function testSplDetect779()
    {
        $this->assertEquals('N-Силослава', $this->object->splitFullName('Силослава').'-Силослава');
    }
    public function testSplDetect780()
    {
        $this->assertEquals('N-Синезора', $this->object->splitFullName('Синезора').'-Синезора');
    }
    public function testSplDetect781()
    {
        $this->assertEquals('N-Синьоока', $this->object->splitFullName('Синьоока').'-Синьоока');
    }
    public function testSplDetect782()
    {
        $this->assertEquals('N-Сіверина', $this->object->splitFullName('Сіверина').'-Сіверина');
    }
    public function testSplDetect783()
    {
        $this->assertEquals('N-Слава', $this->object->splitFullName('Слава').'-Слава');
    }
    public function testSplDetect784()
    {
        $this->assertEquals('N-Славина', $this->object->splitFullName('Славина').'-Славина');
    }
    public function testSplDetect785()
    {
        $this->assertEquals('N-Славолюба', $this->object->splitFullName('Славолюба').'-Славолюба');
    }
    public function testSplDetect786()
    {
        $this->assertEquals('N-Славомила', $this->object->splitFullName('Славомила').'-Славомила');
    }
    public function testSplDetect787()
    {
        $this->assertEquals('N-Сміяна', $this->object->splitFullName('Сміяна').'-Сміяна');
    }
    public function testSplDetect788()
    {
        $this->assertEquals('N-Сніжана', $this->object->splitFullName('Сніжана').'-Сніжана');
    }
    public function testSplDetect789()
    {
        $this->assertEquals('N-Сніжинка', $this->object->splitFullName('Сніжинка').'-Сніжинка');
    }
    public function testSplDetect790()
    {
        $this->assertEquals('N-Собіслава', $this->object->splitFullName('Собіслава').'-Собіслава');
    }
    public function testSplDetect791()
    {
        $this->assertEquals('N-Соловія', $this->object->splitFullName('Соловія').'-Соловія');
    }
    public function testSplDetect792()
    {
        $this->assertEquals('N-Сологуба', $this->object->splitFullName('Сологуба').'-Сологуба');
    }
    public function testSplDetect793()
    {
        $this->assertEquals('N-Сонцевида', $this->object->splitFullName('Сонцевида').'-Сонцевида');
    }
    public function testSplDetect794()
    {
        $this->assertEquals('N-Сонцедара', $this->object->splitFullName('Сонцедара').'-Сонцедара');
    }
    public function testSplDetect795()
    {
        $this->assertEquals('N-Сонцелика', $this->object->splitFullName('Сонцелика').'-Сонцелика');
    }
    public function testSplDetect796()
    {
        $this->assertEquals('N-Сонцеслава', $this->object->splitFullName('Сонцеслава').'-Сонцеслава');
    }
    public function testSplDetect797()
    {
        $this->assertEquals('N-Ссанимира', $this->object->splitFullName('Ссанимира').'-Ссанимира');
    }
    public function testSplDetect798()
    {
        $this->assertEquals('N-Станислава', $this->object->splitFullName('Станислава').'-Станислава');
    }
    public function testSplDetect799()
    {
        $this->assertEquals('N-Судимира', $this->object->splitFullName('Судимира').'-Судимира');
    }
    public function testSplDetect800()
    {
        $this->assertEquals('N-Судислава', $this->object->splitFullName('Судислава').'-Судислава');
    }
    public function testSplDetect801()
    {
        $this->assertEquals('N-Татолюба', $this->object->splitFullName('Татолюба').'-Татолюба');
    }
    public function testSplDetect802()
    {
        $this->assertEquals('N-Твердислава', $this->object->splitFullName('Твердислава').'-Твердислава');
    }
    public function testSplDetect803()
    {
        $this->assertEquals('N-Твердогоста', $this->object->splitFullName('Твердогоста').'-Твердогоста');
    }
    public function testSplDetect804()
    {
        $this->assertEquals('N-Творимира', $this->object->splitFullName('Творимира').'-Творимира');
    }
    public function testSplDetect805()
    {
        $this->assertEquals('N-Творислава', $this->object->splitFullName('Творислава').'-Творислава');
    }
    public function testSplDetect806()
    {
        $this->assertEquals('N-Толигніва', $this->object->splitFullName('Толигніва').'-Толигніва');
    }
    public function testSplDetect807()
    {
        $this->assertEquals('N-Тонкостана', $this->object->splitFullName('Тонкостана').'-Тонкостана');
    }
    public function testSplDetect808()
    {
        $this->assertEquals('N-Трояна', $this->object->splitFullName('Трояна').'-Трояна');
    }
    public function testSplDetect809()
    {
        $this->assertEquals('N-Хвала', $this->object->splitFullName('Хвала').'-Хвала');
    }
    public function testSplDetect810()
    {
        $this->assertEquals('N-Хвалибого', $this->object->splitFullName('Хвалибого').'-Хвалибого');
    }
    public function testSplDetect811()
    {
        $this->assertEquals('N-Хвалимира', $this->object->splitFullName('Хвалимира').'-Хвалимира');
    }
    public function testSplDetect812()
    {
        $this->assertEquals('N-Хвалина', $this->object->splitFullName('Хвалина').'-Хвалина');
    }
    public function testSplDetect813()
    {
        $this->assertEquals('N-Хорошка', $this->object->splitFullName('Хорошка').'-Хорошка');
    }
    public function testSplDetect814()
    {
        $this->assertEquals('N-Хорошуня', $this->object->splitFullName('Хорошуня').'-Хорошуня');
    }
    public function testSplDetect815()
    {
        $this->assertEquals('N-Хотимра', $this->object->splitFullName('Хотимра').'-Хотимра');
    }
    public function testSplDetect816()
    {
        $this->assertEquals('N-Хотяна', $this->object->splitFullName('Хотяна').'-Хотяна');
    }
    public function testSplDetect817()
    {
        $this->assertEquals('N-Хранимира', $this->object->splitFullName('Хранимира').'-Хранимира');
    }
    public function testSplDetect818()
    {
        $this->assertEquals('N-Худана', $this->object->splitFullName('Худана').'-Худана');
    }
    public function testSplDetect819()
    {
        $this->assertEquals('N-Цвітана', $this->object->splitFullName('Цвітана').'-Цвітана');
    }
    public function testSplDetect820()
    {
        $this->assertEquals('N-Чайка', $this->object->splitFullName('Чайка').'-Чайка');
    }
    public function testSplDetect821()
    {
        $this->assertEquals('N-Чарівна', $this->object->splitFullName('Чарівна').'-Чарівна');
    }
    public function testSplDetect822()
    {
        $this->assertEquals('N-Чарівниця', $this->object->splitFullName('Чарівниця').'-Чарівниця');
    }
    public function testSplDetect823()
    {
        $this->assertEquals('N-Чаруна', $this->object->splitFullName('Чаруна').'-Чаруна');
    }
    public function testSplDetect824()
    {
        $this->assertEquals('N-Чеслава', $this->object->splitFullName('Чеслава').'-Чеслава');
    }
    public function testSplDetect825()
    {
        $this->assertEquals('N-Ява', $this->object->splitFullName('Ява').'-Ява');
    }
    public function testSplDetect826()
    {
        $this->assertEquals('N-Яворина', $this->object->splitFullName('Яворина').'-Яворина');
    }
    public function testSplDetect827()
    {
        $this->assertEquals('N-Ялина', $this->object->splitFullName('Ялина').'-Ялина');
    }
    public function testSplDetect828()
    {
        $this->assertEquals('N-Ярина', $this->object->splitFullName('Ярина').'-Ярина');
    }
    public function testSplDetect829()
    {
        $this->assertEquals('N-Яромила', $this->object->splitFullName('Яромила').'-Яромила');
    }
    public function testSplDetect830()
    {
        $this->assertEquals('N-Яромира', $this->object->splitFullName('Яромира').'-Яромира');
    }
    public function testSplDetect831()
    {
        $this->assertEquals('N-Ярослава', $this->object->splitFullName('Ярослава').'-Ярослава');
    }
    public function testSplDetect832()
    {
        $this->assertEquals('N-Ясна', $this->object->splitFullName('Ясна').'-Ясна');
    }
    public function testSplDetect833()
    {
        $this->assertEquals('N-Ясновида', $this->object->splitFullName('Ясновида').'-Ясновида');
    }
    public function testSplDetect834()
    {
        $this->assertEquals('N-Ясногора', $this->object->splitFullName('Ясногора').'-Ясногора');
    }
    public function testSplDetect835()
    {
        $this->assertEquals('N-Яснолика', $this->object->splitFullName('Яснолика').'-Яснолика');
    }
    public function testSplDetect836()
    {
        $this->assertEquals('N-Яснослава', $this->object->splitFullName('Яснослава').'-Яснослава');
    }

}