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


    public function testNameMan0()
    {
        $this->object->setFirstName('Аарон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аарон,Аарона,Ааронові,Аарона,Аароном,Ааронові,Аароне'), $this->object->getFirstNameCase());
    }
    public function testNameMan1()
    {
        $this->object->setFirstName('Абакум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абакум,Абакума,Абакумові,Абакума,Абакумом,Абакумові,Абакуме'), $this->object->getFirstNameCase());
    }
    public function testNameMan2()
    {
        $this->object->setFirstName('Абрам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абрам,Абрама,Абрамові,Абрама,Абрамом,Абрамові,Абраме'), $this->object->getFirstNameCase());
    }
    public function testNameMan3()
    {
        $this->object->setFirstName('Августин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Августин,Августина,Августинові,Августина,Августином,Августинові,Августине'), $this->object->getFirstNameCase());
    }
    public function testNameMan4()
    {
        $this->object->setFirstName('Авесалом');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авесалом,Авесалома,Авесаломові,Авесалома,Авесаломом,Авесаломові,Авесаломе'), $this->object->getFirstNameCase());
    }
    public function testNameMan5()
    {
        $this->object->setFirstName('Авксентій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авксентій,Авксентія,Авксентієві,Авксентія,Авксентієм,Авксентієві,Авксентію'), $this->object->getFirstNameCase());
    }
    public function testNameMan6()
    {
        $this->object->setFirstName('Аврелій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аврелій,Аврелія,Аврелієві,Аврелія,Аврелієм,Аврелієві,Аврелію'), $this->object->getFirstNameCase());
    }
    public function testNameMan7()
    {
        $this->object->setFirstName('Автоном');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Автоном,Автонома,Автономові,Автонома,Автономом,Автономові,Автономе'), $this->object->getFirstNameCase());
    }
    public function testNameMan8()
    {
        $this->object->setFirstName('Адам');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адам,Адама,Адамові,Адама,Адамом,Адамові,Адаме'), $this->object->getFirstNameCase());
    }
    public function testNameMan9()
    {
        $this->object->setFirstName('Адріян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адріян,Адріяна,Адріянові,Адріяна,Адріяном,Адріянові,Адріяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan10()
    {
        $this->object->setFirstName('Адріан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адріан,Адріана,Адріанові,Адріана,Адріаном,Адріанові,Адріане'), $this->object->getFirstNameCase());
    }
    public function testNameMan11()
    {
        $this->object->setFirstName('Азар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Азар,Азара,Азарові,Азара,Азаром,Азарові,Азаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan12()
    {
        $this->object->setFirstName('Алевтин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алевтин,Алевтина,Алевтинові,Алевтина,Алевтином,Алевтинові,Алевтине'), $this->object->getFirstNameCase());
    }
    public function testNameMan13()
    {
        $this->object->setFirstName('Альберт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Альберт,Альберта,Альбертові,Альберта,Альбертом,Альбертові,Альберте'), $this->object->getFirstNameCase());
    }
    public function testNameMan14()
    {
        $this->object->setFirstName('Амвросій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Амвросій,Амвросія,Амвросієві,Амвросія,Амвросієм,Амвросієві,Амвросію'), $this->object->getFirstNameCase());
    }
    public function testNameMan15()
    {
        $this->object->setFirstName('Амнон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Амнон,Амнона,Амнонові,Амнона,Амноном,Амнонові,Амноне'), $this->object->getFirstNameCase());
    }
    public function testNameMan16()
    {
        $this->object->setFirstName('Амос');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Амос,Амоса,Амосові,Амоса,Амосом,Амосові,Амосе'), $this->object->getFirstNameCase());
    }
    public function testNameMan17()
    {
        $this->object->setFirstName('Анастас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анастас,Анастаса,Анастасові,Анастаса,Анастасом,Анастасові,Анастасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan18()
    {
        $this->object->setFirstName('Анастасій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анастасій,Анастасія,Анастасієві,Анастасія,Анастасієм,Анастасієві,Анастасію'), $this->object->getFirstNameCase());
    }
    public function testNameMan19()
    {
        $this->object->setFirstName('Андрій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрій,Андрія,Андрієві,Андрія,Андрієм,Андрієві,Андрію'), $this->object->getFirstNameCase());
    }
    public function testNameMan20()
    {
        $this->object->setFirstName('Антоній');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антоній,Антонія,Антонієві,Антонія,Антонієм,Антонієві,Антонію'), $this->object->getFirstNameCase());
    }
    public function testNameMan21()
    {
        $this->object->setFirstName('Антон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антон,Антона,Антонові,Антона,Антоном,Антонові,Антоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan22()
    {
        $this->object->setFirstName('Анісій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анісій,Анісія,Анісієві,Анісія,Анісієм,Анісієві,Анісію'), $this->object->getFirstNameCase());
    }
    public function testNameMan23()
    {
        $this->object->setFirstName('Аркадій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аркадій,Аркадія,Аркадієві,Аркадія,Аркадієм,Аркадієві,Аркадію'), $this->object->getFirstNameCase());
    }
    public function testNameMan24()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсен,Арсена,Арсенові,Арсена,Арсеном,Арсенові,Арсене'), $this->object->getFirstNameCase());
    }
    public function testNameMan25()
    {
        $this->object->setFirstName('Арсеній');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсеній,Арсенія,Арсенієві,Арсенія,Арсенієм,Арсенієві,Арсенію'), $this->object->getFirstNameCase());
    }
    public function testNameMan26()
    {
        $this->object->setFirstName('Артем');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артем,Артема,Артемові,Артема,Артемом,Артемові,Артеме'), $this->object->getFirstNameCase());
    }
    public function testNameMan27()
    {
        $this->object->setFirstName('Архип');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Архип,Архипа,Архипові,Архипа,Архипом,Архипові,Архипе'), $this->object->getFirstNameCase());
    }
    public function testNameMan28()
    {
        $this->object->setFirstName('Атанас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Атанас,Атанаса,Атанасові,Атанаса,Атанасом,Атанасові,Атанасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan29()
    {
        $this->object->setFirstName('Аскольд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аскольд,Аскольда,Аскольдові,Аскольда,Аскольдом,Аскольдові,Аскольде'), $this->object->getFirstNameCase());
    }
    public function testNameMan30()
    {
        $this->object->setFirstName('Бажан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бажан,Бажана,Бажанові,Бажана,Бажаном,Бажанові,Бажане'), $this->object->getFirstNameCase());
    }
    public function testNameMan31()
    {
        $this->object->setFirstName('Біловид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Біловид,Біловида,Біловидові,Біловида,Біловидом,Біловидові,Біловиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan32()
    {
        $this->object->setFirstName('Білогост');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Білогост,Білогоста,Білогостові,Білогоста,Білогостом,Білогостові,Білогосте'), $this->object->getFirstNameCase());
    }
    public function testNameMan33()
    {
        $this->object->setFirstName('Біломир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Біломир,Біломира,Біломирові,Біломира,Біломиром,Біломирові,Біломире'), $this->object->getFirstNameCase());
    }
    public function testNameMan34()
    {
        $this->object->setFirstName('Білослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Білослав,Білослава,Білославові,Білослава,Білославом,Білославові,Білославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan35()
    {
        $this->object->setFirstName('Білотур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Білотур,Білотура,Білотурові,Білотура,Білотуром,Білотурові,Білотуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan36()
    {
        $this->object->setFirstName('Білян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Білян,Біляна,Білянові,Біляна,Біляном,Білянові,Біляне'), $this->object->getFirstNameCase());
    }
    public function testNameMan37()
    {
        $this->object->setFirstName('Благовид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Благовид,Благовида,Благовидові,Благовида,Благовидом,Благовидові,Благовиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan38()
    {
        $this->object->setFirstName('Благовіст');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Благовіст,Благовіста,Благовістові,Благовіста,Благовістом,Благовістові,Благовісте'), $this->object->getFirstNameCase());
    }
    public function testNameMan39()
    {
        $this->object->setFirstName('Благодар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Благодар,Благодара,Благодарові,Благодара,Благодаром,Благодарові,Благодаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan40()
    {
        $this->object->setFirstName('Благодат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Благодат,Благодата,Благодатові,Благодата,Благодатом,Благодатові,Благодате'), $this->object->getFirstNameCase());
    }
    public function testNameMan41()
    {
        $this->object->setFirstName('Благомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Благомир,Благомира,Благомирові,Благомира,Благомиром,Благомирові,Благомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan42()
    {
        $this->object->setFirstName('Благослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Благослав,Благослава,Благославові,Благослава,Благославом,Благославові,Благославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan43()
    {
        $this->object->setFirstName('Богдан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богдан,Богдана,Богданові,Богдана,Богданом,Богданові,Богдане'), $this->object->getFirstNameCase());
    }
    public function testNameMan44()
    {
        $this->object->setFirstName('Боговір');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боговір,Боговора,Боговорові,Боговора,Боговором,Боговорові,Боговоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan45()
    {
        $this->object->setFirstName('Боговіст');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боговіст,Боговіста,Боговістові,Боговіста,Боговістом,Боговістові,Боговісте'), $this->object->getFirstNameCase());
    }
    public function testNameMan46()
    {
        $this->object->setFirstName('Богодар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богодар,Богодара,Богодарові,Богодара,Богодаром,Богодарові,Богодаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan47()
    {
        $this->object->setFirstName('Боголад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боголад,Боголада,Боголадові,Боголада,Боголадом,Боголадові,Боголаде'), $this->object->getFirstNameCase());
    }
    public function testNameMan48()
    {
        $this->object->setFirstName('Боголіп');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боголіп,Боголопа,Боголопові,Боголопа,Боголопом,Боголопові,Боголопе'), $this->object->getFirstNameCase());
    }
    public function testNameMan49()
    {
        $this->object->setFirstName('Боголюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боголюб,Боголюба,Боголюбові,Боголюба,Боголюбом,Боголюбові,Боголюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan50()
    {
        $this->object->setFirstName('Богород');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богород,Богорода,Богородові,Богорода,Богородом,Богородові,Богороде'), $this->object->getFirstNameCase());
    }
    public function testNameMan51()
    {
        $this->object->setFirstName('Богосвят');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богосвят,Богосвята,Богосвятові,Богосвята,Богосвятом,Богосвятові,Богосвяте'), $this->object->getFirstNameCase());
    }
    public function testNameMan52()
    {
        $this->object->setFirstName('Богумил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богумил,Богумила,Богумилові,Богумила,Богумилом,Богумилові,Богумиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan53()
    {
        $this->object->setFirstName('Богумир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богумир,Богумира,Богумирові,Богумира,Богумиром,Богумирові,Богумире'), $this->object->getFirstNameCase());
    }
    public function testNameMan54()
    {
        $this->object->setFirstName('Богуслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богуслав,Богуслава,Богуславові,Богуслава,Богуславом,Богуславові,Богуславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan55()
    {
        $this->object->setFirstName('Бож');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бож,Божа,Божеві,Божа,Божем,Божеві,Боже'), $this->object->getFirstNameCase());
    }
    public function testNameMan56()
    {
        $this->object->setFirstName('Божан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Божан,Божана,Божанові,Божана,Божаном,Божанові,Божане'), $this->object->getFirstNameCase());
    }
    public function testNameMan57()
    {
        $this->object->setFirstName('Божедар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Божедар,Божедара,Божедарові,Божедара,Божедаром,Божедарові,Божедаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan58()
    {
        $this->object->setFirstName('Божейко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Божейко,Божейка,Божейкові,Божейка,Божейком,Божейкові,Божейче'), $this->object->getFirstNameCase());
    }
    public function testNameMan59()
    {
        $this->object->setFirstName('Божемир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Божемир,Божемира,Божемирові,Божемира,Божемиром,Божемирові,Божемире'), $this->object->getFirstNameCase());
    }
    public function testNameMan60()
    {
        $this->object->setFirstName('Божен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Божен,Божена,Боженові,Божена,Боженом,Боженові,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameMan61()
    {
        $this->object->setFirstName('Божко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Божко,Божка,Божкові,Божка,Божком,Божкові,Божче'), $this->object->getFirstNameCase());
    }
    public function testNameMan62()
    {
        $this->object->setFirstName('Болеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Болеслав,Болеслава,Болеславові,Болеслава,Болеславом,Болеславові,Болеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan63()
    {
        $this->object->setFirstName('Боримир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боримир,Боримира,Боримирові,Боримира,Боримиром,Боримирові,Боримире'), $this->object->getFirstNameCase());
    }
    public function testNameMan64()
    {
        $this->object->setFirstName('Боримисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боримисл,Боримисла,Боримислові,Боримисла,Боримислом,Боримислові,Боримисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan65()
    {
        $this->object->setFirstName('Борис');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борис,Бориса,Борисові,Бориса,Борисом,Борисові,Борисе'), $this->object->getFirstNameCase());
    }
    public function testNameMan66()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславові,Борислава,Бориславом,Бориславові,Бориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan67()
    {
        $this->object->setFirstName('Боян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боян,Бояна,Боянові,Бояна,Бояном,Боянові,Бояне'), $this->object->getFirstNameCase());
    }
    public function testNameMan68()
    {
        $this->object->setFirstName('Братан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Братан,Братана,Братанові,Братана,Братаном,Братанові,Братане'), $this->object->getFirstNameCase());
    }
    public function testNameMan69()
    {
        $this->object->setFirstName('Бративой');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бративой,Бративоя,Бративоєві,Бративоя,Бративоєм,Бративоєві,Бративою'), $this->object->getFirstNameCase());
    }
    public function testNameMan70()
    {
        $this->object->setFirstName('Братимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Братимир,Братимира,Братимирові,Братимира,Братимиром,Братимирові,Братимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan71()
    {
        $this->object->setFirstName('Братислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Братислав,Братислава,Братиславові,Братислава,Братиславом,Братиславові,Братиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan72()
    {
        $this->object->setFirstName('Братко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Братко,Братка,Браткові,Братка,Братком,Браткові,Братче'), $this->object->getFirstNameCase());
    }
    public function testNameMan73()
    {
        $this->object->setFirstName('Братомил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Братомил,Братомила,Братомилові,Братомила,Братомилом,Братомилові,Братомиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan74()
    {
        $this->object->setFirstName('Братослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Братослав,Братослава,Братославові,Братослава,Братославом,Братославові,Братославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan75()
    {
        $this->object->setFirstName('Брячислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Брячислав,Брячислава,Брячиславові,Брячислава,Брячиславом,Брячиславові,Брячиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan76()
    {
        $this->object->setFirstName('Боронислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Боронислав,Боронислава,Борониславові,Боронислава,Борониславом,Борониславові,Борониславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan77()
    {
        $this->object->setFirstName('Будивид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Будивид,Будивида,Будивидові,Будивида,Будивидом,Будивидові,Будивиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan78()
    {
        $this->object->setFirstName('Будивой');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Будивой,Будивоя,Будивоєві,Будивоя,Будивоєм,Будивоєві,Будивою'), $this->object->getFirstNameCase());
    }
    public function testNameMan79()
    {
        $this->object->setFirstName('Будимил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Будимил,Будимила,Будимилові,Будимила,Будимилом,Будимилові,Будимиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan80()
    {
        $this->object->setFirstName('Будимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Будимир,Будимира,Будимирові,Будимира,Будимиром,Будимирові,Будимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan81()
    {
        $this->object->setFirstName('Будислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Будислав,Будислава,Будиславові,Будислава,Будиславом,Будиславові,Будиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan82()
    {
        $this->object->setFirstName('Буймир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Буймир,Буймира,Буймирові,Буймира,Буймиром,Буймирові,Буймире'), $this->object->getFirstNameCase());
    }
    public function testNameMan83()
    {
        $this->object->setFirstName('Буйтур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Буйтур,Буйтура,Буйтурові,Буйтура,Буйтуром,Буйтурові,Буйтуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan84()
    {
        $this->object->setFirstName('Буревій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Буревій,Буревія,Буревієві,Буревія,Буревієм,Буревієві,Буревію'), $this->object->getFirstNameCase());
    }
    public function testNameMan85()
    {
        $this->object->setFirstName('Буревіст');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Буревіст,Буревіста,Буревістові,Буревіста,Буревістом,Буревістові,Буревісте'), $this->object->getFirstNameCase());
    }
    public function testNameMan86()
    {
        $this->object->setFirstName('Василь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Василь,Василя,Василеві,Василя,Василем,Василеві,Василю'), $this->object->getFirstNameCase());
    }
    public function testNameMan87()
    {
        $this->object->setFirstName('Ведан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ведан,Ведана,Веданові,Ведана,Веданом,Веданові,Ведане'), $this->object->getFirstNameCase());
    }
    public function testNameMan88()
    {
        $this->object->setFirstName('Велемир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Велемир,Велемира,Велемирові,Велемира,Велемиром,Велемирові,Велемире'), $this->object->getFirstNameCase());
    }
    public function testNameMan89()
    {
        $this->object->setFirstName('Велемудр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Велемудр,Велемудра,Велемудрові,Велемудра,Велемудром,Велемудрові,Велемудре'), $this->object->getFirstNameCase());
    }
    public function testNameMan90()
    {
        $this->object->setFirstName('Велет');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Велет,Велета,Велетові,Велета,Велетом,Велетові,Велете'), $this->object->getFirstNameCase());
    }
    public function testNameMan91()
    {
        $this->object->setFirstName('Величар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Величар,Величара,Величарові,Величара,Величаром,Величарові,Величаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan92()
    {
        $this->object->setFirstName('Величко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Величко,Величка,Величкові,Величка,Величком,Величкові,Величче'), $this->object->getFirstNameCase());
    }
    public function testNameMan93()
    {
        $this->object->setFirstName('Вербан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вербан,Вербана,Вербанові,Вербана,Вербаном,Вербанові,Вербане'), $this->object->getFirstNameCase());
    }
    public function testNameMan94()
    {
        $this->object->setFirstName('Вернидуб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вернидуб,Вернидуба,Вернидубові,Вернидуба,Вернидубом,Вернидубові,Вернидубе'), $this->object->getFirstNameCase());
    }
    public function testNameMan95()
    {
        $this->object->setFirstName('Вернислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вернислав,Вернислава,Верниславові,Вернислава,Верниславом,Верниславові,Верниславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan96()
    {
        $this->object->setFirstName('Веселан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Веселан,Веселана,Веселанові,Веселана,Веселаном,Веселанові,Веселане'), $this->object->getFirstNameCase());
    }
    public function testNameMan97()
    {
        $this->object->setFirstName('Витомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Витомир,Витомира,Витомирові,Витомира,Витомиром,Витомирові,Витомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan98()
    {
        $this->object->setFirstName('Вишата');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вишата,Вишати,Вишаті,Вишату,Вишатою,Вишаті,Вишато'), $this->object->getFirstNameCase());
    }
    public function testNameMan99()
    {
        $this->object->setFirstName('Вишезор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вишезор,Вишезора,Вишезорові,Вишезора,Вишезором,Вишезорові,Вишезоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan100()
    {
        $this->object->setFirstName('Вишеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вишеслав,Вишеслава,Вишеславові,Вишеслава,Вишеславом,Вишеславові,Вишеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan101()
    {
        $this->object->setFirstName('Вір');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вір,Вора,Ворові,Вора,Вором,Ворові,Воре'), $this->object->getFirstNameCase());
    }
    public function testNameMan102()
    {
        $this->object->setFirstName('Віродан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Віродан,Віродана,Віроданові,Віродана,Віроданом,Віроданові,Віродане'), $this->object->getFirstNameCase());
    }
    public function testNameMan103()
    {
        $this->object->setFirstName('Віродар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Віродар,Віродара,Віродарові,Віродара,Віродаром,Віродарові,Віродаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan104()
    {
        $this->object->setFirstName('Вірослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вірослав,Вірослава,Вірославові,Вірослава,Вірославом,Вірославові,Вірославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan105()
    {
        $this->object->setFirstName('Віст');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Віст,Віста,Вістові,Віста,Вістом,Вістові,Вісте'), $this->object->getFirstNameCase());
    }
    public function testNameMan106()
    {
        $this->object->setFirstName('Вістан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вістан,Вістана,Вістанові,Вістана,Вістаном,Вістанові,Вістане'), $this->object->getFirstNameCase());
    }
    public function testNameMan107()
    {
        $this->object->setFirstName('Вітан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вітан,Вітана,Вітанові,Вітана,Вітаном,Вітанові,Вітане'), $this->object->getFirstNameCase());
    }
    public function testNameMan108()
    {
        $this->object->setFirstName('Вітомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вітомир,Вітомира,Вітомирові,Вітомира,Вітомиром,Вітомирові,Вітомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan109()
    {
        $this->object->setFirstName('Вітрян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вітрян,Вітряна,Вітрянові,Вітряна,Вітряном,Вітрянові,Вітряне'), $this->object->getFirstNameCase());
    }
    public function testNameMan110()
    {
        $this->object->setFirstName('Влад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Влад,Влада,Владові,Влада,Владом,Владові,Владе'), $this->object->getFirstNameCase());
    }
    public function testNameMan111()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславові,Владислава,Владиславом,Владиславові,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan112()
    {
        $this->object->setFirstName('Власт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Власт,Власта,Властові,Власта,Властом,Властові,Власте'), $this->object->getFirstNameCase());
    }
    public function testNameMan113()
    {
        $this->object->setFirstName('Вогнедар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вогнедар,Вогнедара,Вогнедарові,Вогнедара,Вогнедаром,Вогнедарові,Вогнедаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan114()
    {
        $this->object->setFirstName('Вогнян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вогнян,Вогняна,Вогнянові,Вогняна,Вогняном,Вогнянові,Вогняне'), $this->object->getFirstNameCase());
    }
    public function testNameMan115()
    {
        $this->object->setFirstName('Водограй');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Водограй,Водограя,Водограєві,Водограя,Водограєм,Водограєві,Водограю'), $this->object->getFirstNameCase());
    }
    public function testNameMan116()
    {
        $this->object->setFirstName('Водотрав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Водотрав,Водотрава,Водотравові,Водотрава,Водотравом,Водотравові,Водотраве'), $this->object->getFirstNameCase());
    }
    public function testNameMan117()
    {
        $this->object->setFirstName('Воїслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воїслав,Воїслава,Воїславові,Воїслава,Воїславом,Воїславові,Воїславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan118()
    {
        $this->object->setFirstName('Волелюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Волелюб,Волелюба,Волелюбові,Волелюба,Волелюбом,Волелюбові,Волелюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan119()
    {
        $this->object->setFirstName('Володар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Володар,Володара,Володарові,Володара,Володаром,Володарові,Володаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan120()
    {
        $this->object->setFirstName('Володимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Володимир,Володимира,Володимирові,Володимира,Володимиром,Володимирові,Володимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan121()
    {
        $this->object->setFirstName('Володислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Володислав,Володислава,Володиславові,Володислава,Володиславом,Володиславові,Володиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan122()
    {
        $this->object->setFirstName('Воля');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воля,Волі,Волі,Волю,Волею,Волі,Воле'), $this->object->getFirstNameCase());
    }
    public function testNameMan123()
    {
        $this->object->setFirstName('Воротислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воротислав,Воротислава,Воротиславові,Воротислава,Воротиславом,Воротиславові,Воротиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan124()
    {
        $this->object->setFirstName('Вратан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вратан,Вратана,Вратанові,Вратана,Вратаном,Вратанові,Вратане'), $this->object->getFirstNameCase());
    }
    public function testNameMan125()
    {
        $this->object->setFirstName('Вратислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вратислав,Вратислава,Вратиславові,Вратислава,Вратиславом,Вратиславові,Вратиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan126()
    {
        $this->object->setFirstName('Всевлад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Всевлад,Всевлада,Всевладові,Всевлада,Всевладом,Всевладові,Всевладе'), $this->object->getFirstNameCase());
    }
    public function testNameMan127()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Всеволод,Всеволода,Всеволодові,Всеволода,Всеволодом,Всеволодові,Всеволоде'), $this->object->getFirstNameCase());
    }
    public function testNameMan128()
    {
        $this->object->setFirstName('Вселюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вселюб,Вселюба,Вселюбові,Вселюба,Вселюбом,Вселюбові,Вселюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan129()
    {
        $this->object->setFirstName('Вселюд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вселюд,Вселюда,Вселюдові,Вселюда,Вселюдом,Вселюдові,Вселюде'), $this->object->getFirstNameCase());
    }
    public function testNameMan130()
    {
        $this->object->setFirstName('Всеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Всеслав,Всеслава,Всеславові,Всеслава,Всеславом,Всеславові,Всеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan131()
    {
        $this->object->setFirstName('Гарнослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гарнослав,Гарнослава,Гарнославові,Гарнослава,Гарнославом,Гарнославові,Гарнославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan132()
    {
        $this->object->setFirstName('Гатусил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гатусил,Гатусила,Гатусилові,Гатусила,Гатусилом,Гатусилові,Гатусиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan133()
    {
        $this->object->setFirstName('Гатуслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гатуслав,Гатуслава,Гатуславові,Гатуслава,Гатуславом,Гатуславові,Гатуславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan134()
    {
        $this->object->setFirstName('Гервасій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гервасій,Гервасія,Гервасієві,Гервасія,Гервасієм,Гервасієві,Гервасію'), $this->object->getFirstNameCase());
    }
    public function testNameMan135()
    {
        $this->object->setFirstName('Гладко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гладко,Гладка,Гладкові,Гладка,Гладком,Гладкові,Гладче'), $this->object->getFirstNameCase());
    }
    public function testNameMan136()
    {
        $this->object->setFirstName('Гліб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гліб,Гліба,Глібові,Гліба,Глібом,Глібові,Глібе'), $this->object->getFirstNameCase());
    }
    public function testNameMan137()
    {
        $this->object->setFirstName('Годомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Годомир,Годомира,Годомирові,Годомира,Годомиром,Годомирові,Годомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan138()
    {
        $this->object->setFirstName('Голубко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Голубко,Голубка,Голубкові,Голубка,Голубком,Голубкові,Голубче'), $this->object->getFirstNameCase());
    }
    public function testNameMan139()
    {
        $this->object->setFirstName('Горун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горун,Горуна,Горунові,Горуна,Горуном,Горунові,Горуне'), $this->object->getFirstNameCase());
    }
    public function testNameMan140()
    {
        $this->object->setFirstName('Гордій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордій,Гордія,Гордієві,Гордія,Гордієм,Гордієві,Гордію'), $this->object->getFirstNameCase());
    }
    public function testNameMan141()
    {
        $this->object->setFirstName('Гордислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордислав,Гордислава,Гордиславові,Гордислава,Гордиславом,Гордиславові,Гордиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan142()
    {
        $this->object->setFirstName('Гордогост');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордогост,Гордогоста,Гордогостові,Гордогоста,Гордогостом,Гордогостові,Гордогосте'), $this->object->getFirstNameCase());
    }
    public function testNameMan143()
    {
        $this->object->setFirstName('Гордодум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордодум,Гордодума,Гордодумові,Гордодума,Гордодумом,Гордодумові,Гордодуме'), $this->object->getFirstNameCase());
    }
    public function testNameMan144()
    {
        $this->object->setFirstName('Гордомисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордомисл,Гордомисла,Гордомислові,Гордомисла,Гордомислом,Гордомислові,Гордомисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan145()
    {
        $this->object->setFirstName('Гордослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордослав,Гордослава,Гордославові,Гордослава,Гордославом,Гордославові,Гордославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan146()
    {
        $this->object->setFirstName('Гордята');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордята,Гордяти,Гордяті,Гордяту,Гордятою,Гордяті,Гордято'), $this->object->getFirstNameCase());
    }
    public function testNameMan147()
    {
        $this->object->setFirstName('Горигляд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горигляд,Горигляда,Гориглядові,Горигляда,Гориглядом,Гориглядові,Горигляде'), $this->object->getFirstNameCase());
    }
    public function testNameMan148()
    {
        $this->object->setFirstName('Горимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горимир,Горимира,Горимирові,Горимира,Горимиром,Горимирові,Горимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan149()
    {
        $this->object->setFirstName('Горимисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горимисл,Горимисла,Горимислові,Горимисла,Горимислом,Горимислові,Горимисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan150()
    {
        $this->object->setFirstName('Горисвіт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горисвіт,Горисвіта,Горисвітові,Горисвіта,Горисвітом,Горисвітові,Горисвіте'), $this->object->getFirstNameCase());
    }
    public function testNameMan151()
    {
        $this->object->setFirstName('Горислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горислав,Горислава,Гориславові,Горислава,Гориславом,Гориславові,Гориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan152()
    {
        $this->object->setFirstName('Горицвіт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горицвіт,Горицвіта,Горицвітові,Горицвіта,Горицвітом,Горицвітові,Горицвіте'), $this->object->getFirstNameCase());
    }
    public function testNameMan153()
    {
        $this->object->setFirstName('Гостомисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гостомисл,Гостомисла,Гостомислові,Гостомисла,Гостомислом,Гостомислові,Гостомисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan154()
    {
        $this->object->setFirstName('Гострозір');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гострозір,Гострозора,Гострозорові,Гострозора,Гострозором,Гострозорові,Гострозоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan155()
    {
        $this->object->setFirstName('Гостята');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гостята,Гостяти,Гостяті,Гостяту,Гостятою,Гостяті,Гостято'), $this->object->getFirstNameCase());
    }
    public function testNameMan156()
    {
        $this->object->setFirstName('Градимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Градимир,Градимира,Градимирові,Градимира,Градимиром,Градимирові,Градимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan157()
    {
        $this->object->setFirstName('Градислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Градислав,Градислава,Градиславові,Градислава,Градиславом,Градиславові,Градиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan158()
    {
        $this->object->setFirstName('Гранислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гранислав,Гранислава,Граниславові,Гранислава,Граниславом,Граниславові,Граниславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan159()
    {
        $this->object->setFirstName('Грива');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грива,Гриви,Гриві,Гриву,Гривою,Гриві,Гриво'), $this->object->getFirstNameCase());
    }
    public function testNameMan160()
    {
        $this->object->setFirstName('Григорій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорій,Григорія,Григорієві,Григорія,Григорієм,Григорієві,Григорію'), $this->object->getFirstNameCase());
    }
    public function testNameMan161()
    {
        $this->object->setFirstName('Гремислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гремислав,Гремислава,Гремиславові,Гремислава,Гремиславом,Гремиславові,Гремиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan162()
    {
        $this->object->setFirstName('Грозан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грозан,Грозана,Грозанові,Грозана,Грозаном,Грозанові,Грозане'), $this->object->getFirstNameCase());
    }
    public function testNameMan163()
    {
        $this->object->setFirstName('Громовик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Громовик,Громовика,Громовикові,Громовика,Громовиком,Громовикові,Громовиче'), $this->object->getFirstNameCase());
    }
    public function testNameMan164()
    {
        $this->object->setFirstName('Гуляйвітер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гуляйвітер,Гуляйвітера,Гуляйвітерові,Гуляйвітера,Гуляйвітером,Гуляйвітерові,Гуляйвітере'), $this->object->getFirstNameCase());
    }
    public function testNameMan165()
    {
        $this->object->setFirstName('Густомисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Густомисл,Густомисла,Густомислові,Густомисла,Густомислом,Густомислові,Густомисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan166()
    {
        $this->object->setFirstName('Далемил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Далемил,Далемила,Далемилові,Далемила,Далемилом,Далемилові,Далемиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan167()
    {
        $this->object->setFirstName('Далемир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Далемир,Далемира,Далемирові,Далемира,Далемиром,Далемирові,Далемире'), $this->object->getFirstNameCase());
    }
    public function testNameMan168()
    {
        $this->object->setFirstName('Далібор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Далібор,Далібора,Даліборові,Далібора,Далібором,Даліборові,Даліборе'), $this->object->getFirstNameCase());
    }
    public function testNameMan169()
    {
        $this->object->setFirstName('Дан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дан,Дана,Данові,Дана,Даном,Данові,Дане'), $this->object->getFirstNameCase());
    }
    public function testNameMan170()
    {
        $this->object->setFirstName('Данило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данило,Данила,Данилові,Данила,Данилом,Данилові,Даниле'), $this->object->getFirstNameCase());
    }
    public function testNameMan171()
    {
        $this->object->setFirstName('Данко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данко,Данка,Данкові,Данка,Данком,Данкові,Данче'), $this->object->getFirstNameCase());
    }
    public function testNameMan172()
    {
        $this->object->setFirstName('Дантур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дантур,Дантура,Дантурові,Дантура,Дантуром,Дантурові,Дантуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan173()
    {
        $this->object->setFirstName('Дар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дар,Дара,Дарові,Дара,Даром,Дарові,Даре'), $this->object->getFirstNameCase());
    }
    public function testNameMan174()
    {
        $this->object->setFirstName('Дарій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дарій,Дарія,Дарієві,Дарія,Дарієм,Дарієві,Дарію'), $this->object->getFirstNameCase());
    }
    public function testNameMan175()
    {
        $this->object->setFirstName('Дарибог');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дарибог,Дарибога,Дарибогові,Дарибога,Дарибогом,Дарибогові,Дарибоже'), $this->object->getFirstNameCase());
    }
    public function testNameMan176()
    {
        $this->object->setFirstName('Даромир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Даромир,Даромира,Даромирові,Даромира,Даромиром,Даромирові,Даромире'), $this->object->getFirstNameCase());
    }
    public function testNameMan177()
    {
        $this->object->setFirstName('Держикрай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Держикрай,Держикрая,Держикраєві,Держикрая,Держикраєм,Держикраєві,Держикраю'), $this->object->getFirstNameCase());
    }
    public function testNameMan178()
    {
        $this->object->setFirstName('Держислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Держислав,Держислава,Держиславові,Держислава,Держиславом,Держиславові,Держиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan179()
    {
        $this->object->setFirstName('Дибач');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дибач,Дибача,Дибачеві,Дибача,Дибачем,Дибачеві,Дибаче'), $this->object->getFirstNameCase());
    }
    public function testNameMan180()
    {
        $this->object->setFirstName('Дивозір');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дивозір,Дивозора,Дивозорові,Дивозора,Дивозором,Дивозорові,Дивозоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan181()
    {
        $this->object->setFirstName('Дій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дій,Дія,Дієві,Дія,Дієм,Дієві,Дію'), $this->object->getFirstNameCase());
    }
    public function testNameMan182()
    {
        $this->object->setFirstName('Добрибій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добрибій,Добрибія,Добрибієві,Добрибія,Добрибієм,Добрибієві,Добрибію'), $this->object->getFirstNameCase());
    }
    public function testNameMan183()
    {
        $this->object->setFirstName('Добривод');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добривод,Добривода,Добриводові,Добривода,Добриводом,Добриводові,Добриводе'), $this->object->getFirstNameCase());
    }
    public function testNameMan184()
    {
        $this->object->setFirstName('Добрик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добрик,Добрика,Добрикові,Добрика,Добриком,Добрикові,Добриче'), $this->object->getFirstNameCase());
    }
    public function testNameMan185()
    {
        $this->object->setFirstName('Добрило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добрило,Добрила,Добрилові,Добрила,Добрилом,Добрилові,Добриле'), $this->object->getFirstNameCase());
    }
    public function testNameMan186()
    {
        $this->object->setFirstName('Добриня');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добриня,Добрині,Добрині,Добриню,Добринею,Добрині,Добрине'), $this->object->getFirstNameCase());
    }
    public function testNameMan187()
    {
        $this->object->setFirstName('Добрисвіт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добрисвіт,Добрисвіта,Добрисвітові,Добрисвіта,Добрисвітом,Добрисвітові,Добрисвіте'), $this->object->getFirstNameCase());
    }
    public function testNameMan188()
    {
        $this->object->setFirstName('Добровіст');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добровіст,Добровіста,Добровістові,Добровіста,Добровістом,Добровістові,Добровісте'), $this->object->getFirstNameCase());
    }
    public function testNameMan189()
    {
        $this->object->setFirstName('Доброгост');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Доброгост,Доброгоста,Доброгостові,Доброгоста,Доброгостом,Доброгостові,Доброгосте'), $this->object->getFirstNameCase());
    }
    public function testNameMan190()
    {
        $this->object->setFirstName('Добродум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добродум,Добродума,Добродумові,Добродума,Добродумом,Добродумові,Добродуме'), $this->object->getFirstNameCase());
    }
    public function testNameMan191()
    {
        $this->object->setFirstName('Добролик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добролик,Добролика,Доброликові,Добролика,Доброликом,Доброликові,Доброличе'), $this->object->getFirstNameCase());
    }
    public function testNameMan192()
    {
        $this->object->setFirstName('Добролюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добролюб,Добролюба,Добролюбові,Добролюба,Добролюбом,Добролюбові,Добролюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan193()
    {
        $this->object->setFirstName('Добромил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добромил,Добромила,Добромилові,Добромила,Добромилом,Добромилові,Добромиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan194()
    {
        $this->object->setFirstName('Добромир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добромир,Добромира,Добромирові,Добромира,Добромиром,Добромирові,Добромире'), $this->object->getFirstNameCase());
    }
    public function testNameMan195()
    {
        $this->object->setFirstName('Добромисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добромисл,Добромисла,Добромислові,Добромисла,Добромислом,Добромислові,Добромисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan196()
    {
        $this->object->setFirstName('Доброслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Доброслав,Доброслава,Доброславові,Доброслава,Доброславом,Доброславові,Доброславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan197()
    {
        $this->object->setFirstName('Доморад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Доморад,Доморада,Доморадові,Доморада,Доморадом,Доморадові,Домораде'), $this->object->getFirstNameCase());
    }
    public function testNameMan198()
    {
        $this->object->setFirstName('Домослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Домослав,Домослава,Домославові,Домослава,Домославом,Домославові,Домославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan199()
    {
        $this->object->setFirstName('Дорогобуг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорогобуг,Дорогобуга,Дорогобугові,Дорогобуга,Дорогобугом,Дорогобугові,Дорогобуже'), $this->object->getFirstNameCase());
    }
    public function testNameMan200()
    {
        $this->object->setFirstName('Дорогомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорогомир,Дорогомира,Дорогомирові,Дорогомира,Дорогомиром,Дорогомирові,Дорогомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan201()
    {
        $this->object->setFirstName('Дорогомисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорогомисл,Дорогомисла,Дорогомислові,Дорогомисла,Дорогомислом,Дорогомислові,Дорогомисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan202()
    {
        $this->object->setFirstName('Дорогосил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорогосил,Дорогосила,Дорогосилові,Дорогосила,Дорогосилом,Дорогосилові,Дорогосиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan203()
    {
        $this->object->setFirstName('Дорогочин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорогочин,Дорогочина,Дорогочинові,Дорогочина,Дорогочином,Дорогочинові,Дорогочине'), $this->object->getFirstNameCase());
    }
    public function testNameMan204()
    {
        $this->object->setFirstName('Драган');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Драган,Драгана,Драганові,Драгана,Драганом,Драганові,Драгане'), $this->object->getFirstNameCase());
    }
    public function testNameMan205()
    {
        $this->object->setFirstName('Дружелюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дружелюб,Дружелюба,Дружелюбові,Дружелюба,Дружелюбом,Дружелюбові,Дружелюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan206()
    {
        $this->object->setFirstName('Жадан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жадан,Жадана,Жаданові,Жадана,Жаданом,Жаданові,Жадане'), $this->object->getFirstNameCase());
    }
    public function testNameMan207()
    {
        $this->object->setFirstName('Ждан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ждан,Ждана,Жданові,Ждана,Жданом,Жданові,Ждане'), $this->object->getFirstNameCase());
    }
    public function testNameMan208()
    {
        $this->object->setFirstName('Живорід');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Живорід,Живорода,Живородові,Живорода,Живородом,Живородові,Живороде'), $this->object->getFirstNameCase());
    }
    public function testNameMan209()
    {
        $this->object->setFirstName('Живосил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Живосил,Живосила,Живосилові,Живосила,Живосилом,Живосилові,Живосиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan210()
    {
        $this->object->setFirstName('Живослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Живослав,Живослава,Живославові,Живослава,Живославом,Живославові,Живославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan211()
    {
        $this->object->setFirstName('Житомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Житомир,Житомира,Житомирові,Житомира,Житомиром,Житомирові,Житомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan212()
    {
        $this->object->setFirstName('Життєлюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Життєлюб,Життєлюба,Життєлюбові,Життєлюба,Життєлюбом,Життєлюбові,Життєлюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan213()
    {
        $this->object->setFirstName('Збоїслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Збоїслав,Збоїслава,Збоїславові,Збоїслава,Збоїславом,Збоїславові,Збоїславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan214()
    {
        $this->object->setFirstName('Зборислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зборислав,Зборислава,Збориславові,Зборислава,Збориславом,Збориславові,Збориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan215()
    {
        $this->object->setFirstName('Звенигор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Звенигор,Звенигора,Звенигорові,Звенигора,Звенигором,Звенигорові,Звенигоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan216()
    {
        $this->object->setFirstName('Звенимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Звенимир,Звенимира,Звенимирові,Звенимира,Звенимиром,Звенимирові,Звенимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan217()
    {
        $this->object->setFirstName('Звенислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Звенислав,Звенислава,Звениславові,Звенислава,Звениславом,Звениславові,Звениславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan218()
    {
        $this->object->setFirstName('Здоровега');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Здоровега,Здоровеги,Здоровезі,Здоровегу,Здоровегою,Здоровезі,Здоровего'), $this->object->getFirstNameCase());
    }
    public function testNameMan219()
    {
        $this->object->setFirstName('Земислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Земислав,Земислава,Земиславові,Земислава,Земиславом,Земиславові,Земиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan220()
    {
        $this->object->setFirstName('Зеновій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зеновій,Зеновія,Зеновієві,Зеновія,Зеновієм,Зеновієві,Зеновію'), $this->object->getFirstNameCase());
    }
    public function testNameMan221()
    {
        $this->object->setFirstName('Зіновій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зіновій,Зіновія,Зіновієві,Зіновія,Зіновієм,Зіновієві,Зіновію'), $this->object->getFirstNameCase());
    }
    public function testNameMan222()
    {
        $this->object->setFirstName('Зиновій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зиновій,Зиновія,Зиновієві,Зиновія,Зиновієм,Зиновієві,Зиновію'), $this->object->getFirstNameCase());
    }
    public function testNameMan223()
    {
        $this->object->setFirstName('Злат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Злат,Злата,Златові,Злата,Златом,Златові,Злате'), $this->object->getFirstNameCase());
    }
    public function testNameMan224()
    {
        $this->object->setFirstName('Златомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Златомир,Златомира,Златомирові,Златомира,Златомиром,Златомирові,Златомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan225()
    {
        $this->object->setFirstName('Златоус');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Златоус,Златоуса,Златоусові,Златоуса,Златоусом,Златоусові,Златоусе'), $this->object->getFirstNameCase());
    }
    public function testNameMan226()
    {
        $this->object->setFirstName('Златодан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Златодан,Златодана,Златоданові,Златодана,Златоданом,Златоданові,Златодане'), $this->object->getFirstNameCase());
    }
    public function testNameMan227()
    {
        $this->object->setFirstName('Злотан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Злотан,Злотана,Злотанові,Злотана,Злотаном,Злотанові,Злотане'), $this->object->getFirstNameCase());
    }
    public function testNameMan228()
    {
        $this->object->setFirstName('Злотодан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Злотодан,Злотодана,Злотоданові,Злотодана,Злотоданом,Злотоданові,Злотодане'), $this->object->getFirstNameCase());
    }
    public function testNameMan229()
    {
        $this->object->setFirstName('Зорегляд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зорегляд,Зорегляда,Зореглядові,Зорегляда,Зореглядом,Зореглядові,Зорегляде'), $this->object->getFirstNameCase());
    }
    public function testNameMan230()
    {
        $this->object->setFirstName('Зоремир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зоремир,Зоремира,Зоремирові,Зоремира,Зоремиром,Зоремирові,Зоремире'), $this->object->getFirstNameCase());
    }
    public function testNameMan231()
    {
        $this->object->setFirstName('Зорепад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зорепад,Зорепада,Зорепадові,Зорепада,Зорепадом,Зорепадові,Зорепаде'), $this->object->getFirstNameCase());
    }
    public function testNameMan232()
    {
        $this->object->setFirstName('Зореслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зореслав,Зореслава,Зореславові,Зореслава,Зореславом,Зореславові,Зореславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan233()
    {
        $this->object->setFirstName('Зорян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зорян,Зоряна,Зорянові,Зоряна,Зоряном,Зорянові,Зоряне'), $this->object->getFirstNameCase());
    }
    public function testNameMan234()
    {
        $this->object->setFirstName('Ізяслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ізяслав,Ізяслава,Ізяславові,Ізяслава,Ізяславом,Ізяславові,Ізяславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan235()
    {
        $this->object->setFirstName('Ігор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ігор,Ігоря,Ігореві,Ігоря,Ігорем,Ігореві,Ігоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan236()
    {
        $this->object->setFirstName('Іван');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іван,Івана,Іванові,Івана,Іваном,Іванові,Іване'), $this->object->getFirstNameCase());
    }
    public function testNameMan237()
    {
        $this->object->setFirstName('Квітан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Квітан,Квітана,Квітанові,Квітана,Квітаном,Квітанові,Квітане'), $this->object->getFirstNameCase());
    }
    public function testNameMan238()
    {
        $this->object->setFirstName('Києслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Києслав,Києслава,Києславові,Києслава,Києславом,Києславові,Києславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan239()
    {
        $this->object->setFirstName('Кий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кий,Кия,Києві,Кия,Києм,Києві,Кию'), $this->object->getFirstNameCase());
    }
    public function testNameMan240()
    {
        $this->object->setFirstName('Кирило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кирило,Кирила,Кирилові,Кирила,Кирилом,Кирилові,Кириле'), $this->object->getFirstNameCase());
    }
    public function testNameMan241()
    {
        $this->object->setFirstName('Киян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Киян,Кияна,Киянові,Кияна,Кияном,Киянові,Кияне'), $this->object->getFirstNameCase());
    }
    public function testNameMan242()
    {
        $this->object->setFirstName('Княжослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Княжослав,Княжослава,Княжославові,Княжослава,Княжославом,Княжославові,Княжославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan243()
    {
        $this->object->setFirstName('Корній');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корній,Корнія,Корнієві,Корнія,Корнієм,Корнієві,Корнію'), $this->object->getFirstNameCase());
    }
    public function testNameMan244()
    {
        $this->object->setFirstName('Колодар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колодар,Колодара,Колодарові,Колодара,Колодаром,Колодарові,Колодаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan245()
    {
        $this->object->setFirstName('Колодій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колодій,Колодія,Колодієві,Колодія,Колодієм,Колодієві,Колодію'), $this->object->getFirstNameCase());
    }
    public function testNameMan246()
    {
        $this->object->setFirstName('Косак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Косак,Косака,Косакові,Косака,Косаком,Косакові,Косаче'), $this->object->getFirstNameCase());
    }
    public function testNameMan247()
    {
        $this->object->setFirstName('Красун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Красун,Красуна,Красунові,Красуна,Красуном,Красунові,Красуне'), $this->object->getFirstNameCase());
    }
    public function testNameMan248()
    {
        $this->object->setFirstName('Крилач');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крилач,Крилача,Крилачеві,Крилача,Крилачем,Крилачеві,Крилаче'), $this->object->getFirstNameCase());
    }
    public function testNameMan249()
    {
        $this->object->setFirstName('Куйбіда');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куйбіда,Куйбіди,Куйбіді,Куйбіду,Куйбідою,Куйбіді,Куйбідо'), $this->object->getFirstNameCase());
    }
    public function testNameMan250()
    {
        $this->object->setFirstName('Курило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Курило,Курила,Курилові,Курила,Курилом,Курилові,Куриле'), $this->object->getFirstNameCase());
    }
    public function testNameMan251()
    {
        $this->object->setFirstName('Лад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лад,Лада,Ладові,Лада,Ладом,Ладові,Ладе'), $this->object->getFirstNameCase());
    }
    public function testNameMan252()
    {
        $this->object->setFirstName('Ладимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ладимир,Ладимира,Ладимирові,Ладимира,Ладимиром,Ладимирові,Ладимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan253()
    {
        $this->object->setFirstName('Ладислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ладислав,Ладислава,Ладиславові,Ладислава,Ладиславом,Ладиславові,Ладиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan254()
    {
        $this->object->setFirstName('Ладолюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ладолюб,Ладолюба,Ладолюбові,Ладолюба,Ладолюбом,Ладолюбові,Ладолюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan255()
    {
        $this->object->setFirstName('Ладомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ладомир,Ладомира,Ладомирові,Ладомира,Ладомиром,Ладомирові,Ладомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan256()
    {
        $this->object->setFirstName('Лев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лев,Лева,Левові,Лева,Левом,Левові,Леве'), $this->object->getFirstNameCase());
    }
    public function testNameMan257()
    {
        $this->object->setFirstName('Левко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Левко,Левка,Левкові,Левка,Левком,Левкові,Левче'), $this->object->getFirstNameCase());
    }
    public function testNameMan258()
    {
        $this->object->setFirstName('Листвич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Листвич,Листвича,Листвичеві,Листвича,Листвичем,Листвичеві,Листвиче'), $this->object->getFirstNameCase());
    }
    public function testNameMan259()
    {
        $this->object->setFirstName('Ліпослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ліпослав,Ліпослава,Ліпославові,Ліпослава,Ліпославом,Ліпославові,Ліпославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan260()
    {
        $this->object->setFirstName('Лоліт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лоліт,Лолота,Лолотові,Лолота,Лолотом,Лолотові,Лолоте'), $this->object->getFirstNameCase());
    }
    public function testNameMan261()
    {
        $this->object->setFirstName('Любим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любим,Любима,Любимові,Любима,Любимом,Любимові,Любиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan262()
    {
        $this->object->setFirstName('Любовир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любовир,Любовира,Любовирові,Любовира,Любовиром,Любовирові,Любовире'), $this->object->getFirstNameCase());
    }
    public function testNameMan263()
    {
        $this->object->setFirstName('Любодар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любодар,Любодара,Любодарові,Любодара,Любодаром,Любодарові,Любодаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan264()
    {
        $this->object->setFirstName('Любозар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любозар,Любозара,Любозарові,Любозара,Любозаром,Любозарові,Любозаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan265()
    {
        $this->object->setFirstName('Любомил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любомил,Любомила,Любомилові,Любомила,Любомилом,Любомилові,Любомиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan266()
    {
        $this->object->setFirstName('Любомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любомир,Любомира,Любомирові,Любомира,Любомиром,Любомирові,Любомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan267()
    {
        $this->object->setFirstName('Любомисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любомисл,Любомисла,Любомислові,Любомисла,Любомислом,Любомислові,Любомисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan268()
    {
        $this->object->setFirstName('Любомудр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любомудр,Любомудра,Любомудрові,Любомудра,Любомудром,Любомудрові,Любомудре'), $this->object->getFirstNameCase());
    }
    public function testNameMan269()
    {
        $this->object->setFirstName('Любослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любослав,Любослава,Любославові,Любослава,Любославом,Любославові,Любославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan270()
    {
        $this->object->setFirstName('Людомил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людомил,Людомила,Людомилові,Людомила,Людомилом,Людомилові,Людомиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan271()
    {
        $this->object->setFirstName('Людомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людомир,Людомира,Людомирові,Людомира,Людомиром,Людомирові,Людомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan272()
    {
        $this->object->setFirstName('Людислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людислав,Людислава,Людиславові,Людислава,Людиславом,Людиславові,Людиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan273()
    {
        $this->object->setFirstName('Лютобор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лютобор,Лютобора,Лютоборові,Лютобора,Лютобором,Лютоборові,Лютоборе'), $this->object->getFirstNameCase());
    }
    public function testNameMan274()
    {
        $this->object->setFirstName('Лютомисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лютомисл,Лютомисла,Лютомислові,Лютомисла,Лютомислом,Лютомислові,Лютомисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan275()
    {
        $this->object->setFirstName('Магадар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Магадар,Магадара,Магадарові,Магадара,Магадаром,Магадарові,Магадаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan276()
    {
        $this->object->setFirstName('Магамир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Магамир,Магамира,Магамирові,Магамира,Магамиром,Магамирові,Магамире'), $this->object->getFirstNameCase());
    }
    public function testNameMan277()
    {
        $this->object->setFirstName('Магаслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Магаслав,Магаслава,Магаславові,Магаслава,Магаславом,Магаславові,Магаславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan278()
    {
        $this->object->setFirstName('Маркіян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маркіян,Маркіяна,Маркіянові,Маркіяна,Маркіяном,Маркіянові,Маркіяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan279()
    {
        $this->object->setFirstName('Май');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Май,Мая,Маєві,Мая,Маєм,Маєві,Маю'), $this->object->getFirstNameCase());
    }
    public function testNameMan280()
    {
        $this->object->setFirstName('Мал');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мал,Мала,Малові,Мала,Малом,Малові,Мале'), $this->object->getFirstNameCase());
    }
    public function testNameMan281()
    {
        $this->object->setFirstName('Малик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малик,Малика,Маликові,Малика,Маликом,Маликові,Маличе'), $this->object->getFirstNameCase());
    }
    public function testNameMan282()
    {
        $this->object->setFirstName('Маломир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маломир,Маломира,Маломирові,Маломира,Маломиром,Маломирові,Маломире'), $this->object->getFirstNameCase());
    }
    public function testNameMan283()
    {
        $this->object->setFirstName('Марко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марко,Марка,Маркові,Марка,Марком,Маркові,Марче'), $this->object->getFirstNameCase());
    }
    public function testNameMan284()
    {
        $this->object->setFirstName('Медомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Медомир,Медомира,Медомирові,Медомира,Медомиром,Медомирові,Медомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan285()
    {
        $this->object->setFirstName('Межамир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Межамир,Межамира,Межамирові,Межамира,Межамиром,Межамирові,Межамире'), $this->object->getFirstNameCase());
    }
    public function testNameMan286()
    {
        $this->object->setFirstName('Мечислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мечислав,Мечислава,Мечиславові,Мечислава,Мечиславом,Мечиславові,Мечиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan287()
    {
        $this->object->setFirstName('Мизамир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мизамир,Мизамира,Мизамирові,Мизамира,Мизамиром,Мизамирові,Мизамире'), $this->object->getFirstNameCase());
    }
    public function testNameMan288()
    {
        $this->object->setFirstName('Милан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милан,Милана,Миланові,Милана,Миланом,Миланові,Милане'), $this->object->getFirstNameCase());
    }
    public function testNameMan289()
    {
        $this->object->setFirstName('Милован');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милован,Милована,Милованові,Милована,Милованом,Милованові,Миловане'), $this->object->getFirstNameCase());
    }
    public function testNameMan290()
    {
        $this->object->setFirstName('Милодар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милодар,Милодара,Милодарові,Милодара,Милодаром,Милодарові,Милодаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan291()
    {
        $this->object->setFirstName('Милодух');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милодух,Милодуха,Милодухові,Милодуха,Милодухом,Милодухові,Милодухе'), $this->object->getFirstNameCase());
    }
    public function testNameMan292()
    {
        $this->object->setFirstName('Милослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Милослав,Милослава,Милославові,Милослава,Милославом,Милославові,Милославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan293()
    {
        $this->object->setFirstName('Мир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мир,Мира,Мирові,Мира,Миром,Мирові,Мире'), $this->object->getFirstNameCase());
    }
    public function testNameMan294()
    {
        $this->object->setFirstName('Миробог');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Миробог,Миробога,Миробогові,Миробога,Миробогом,Миробогові,Миробоже'), $this->object->getFirstNameCase());
    }
    public function testNameMan295()
    {
        $this->object->setFirstName('Мирогост');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мирогост,Мирогоста,Мирогостові,Мирогоста,Мирогостом,Мирогостові,Мирогосте'), $this->object->getFirstNameCase());
    }
    public function testNameMan296()
    {
        $this->object->setFirstName('Миролюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Миролюб,Миролюба,Миролюбові,Миролюба,Миролюбом,Миролюбові,Миролюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan297()
    {
        $this->object->setFirstName('Мирослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мирослав,Мирослава,Мирославові,Мирослава,Мирославом,Мирославові,Мирославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan298()
    {
        $this->object->setFirstName('Мовчан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мовчан,Мовчана,Мовчанові,Мовчана,Мовчаном,Мовчанові,Мовчане'), $this->object->getFirstNameCase());
    }
    public function testNameMan299()
    {
        $this->object->setFirstName('Молибог');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Молибог,Молибога,Молибогові,Молибога,Молибогом,Молибогові,Молибоже'), $this->object->getFirstNameCase());
    }
    public function testNameMan300()
    {
        $this->object->setFirstName('Мстибог');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мстибог,Мстибога,Мстибогові,Мстибога,Мстибогом,Мстибогові,Мстибоже'), $this->object->getFirstNameCase());
    }
    public function testNameMan301()
    {
        $this->object->setFirstName('Мстивой');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мстивой,Мстивоя,Мстивоєві,Мстивоя,Мстивоєм,Мстивоєві,Мстивою'), $this->object->getFirstNameCase());
    }
    public function testNameMan302()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мстислав,Мстислава,Мстиславові,Мстислава,Мстиславом,Мстиславові,Мстиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan303()
    {
        $this->object->setFirstName('Мудролюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мудролюб,Мудролюба,Мудролюбові,Мудролюба,Мудролюбом,Мудролюбові,Мудролюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan304()
    {
        $this->object->setFirstName('Нагнибіда');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нагнибіда,Нагнибіди,Нагнибіді,Нагнибіду,Нагнибідою,Нагнибіді,Нагнибідо'), $this->object->getFirstNameCase());
    }
    public function testNameMan305()
    {
        $this->object->setFirstName('Надій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Надій,Надія,Надієві,Надія,Надієм,Надієві,Надію'), $this->object->getFirstNameCase());
    }
    public function testNameMan306()
    {
        $this->object->setFirstName('Найден');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Найден,Найдена,Найденові,Найдена,Найденом,Найденові,Найдене'), $this->object->getFirstNameCase());
    }
    public function testNameMan307()
    {
        $this->object->setFirstName('Наслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наслав,Наслава,Наславові,Наслава,Наславом,Наславові,Наславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan308()
    {
        $this->object->setFirstName('Недан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Недан,Недана,Неданові,Недана,Неданом,Неданові,Недане'), $this->object->getFirstNameCase());
    }
    public function testNameMan309()
    {
        $this->object->setFirstName('Немир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Немир,Немира,Немирові,Немира,Немиром,Немирові,Немире'), $this->object->getFirstNameCase());
    }
    public function testNameMan310()
    {
        $this->object->setFirstName('Непобор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Непобор,Непобора,Непоборові,Непобора,Непобором,Непоборові,Непоборе'), $this->object->getFirstNameCase());
    }
    public function testNameMan311()
    {
        $this->object->setFirstName('Нігослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нігослав,Нігослава,Нігославові,Нігослава,Нігославом,Нігославові,Нігославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan312()
    {
        $this->object->setFirstName('Назар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Назар,Назара,Назарові,Назара,Назаром,Назарові,Назаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan313()
    {
        $this->object->setFirstName('Одинець');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Одинець,Одинця,Одинцеві,Одинця,Одинцем,Одинцеві,Одинцю'), $this->object->getFirstNameCase());
    }
    public function testNameMan314()
    {
        $this->object->setFirstName('Олег');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олег,Олега,Олегові,Олега,Олегом,Олегові,Олеже'), $this->object->getFirstNameCase());
    }
    public function testNameMan315()
    {
        $this->object->setFirstName('Олександр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олександр,Олександра,Олександрові,Олександра,Олександром,Олександрові,Олександре'), $this->object->getFirstNameCase());
    }
    public function testNameMan316()
    {
        $this->object->setFirstName('Олексій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олексій,Олексія,Олексієві,Олексія,Олексієм,Олексієві,Олексію'), $this->object->getFirstNameCase());
    }
    public function testNameMan317()
    {
        $this->object->setFirstName('Олесь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олесь,Олеся,Олесеві,Олеся,Олесем,Олесеві,Олесю'), $this->object->getFirstNameCase());
    }
    public function testNameMan318()
    {
        $this->object->setFirstName('Олелько');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олелько,Олелька,Олелькові,Олелька,Олельком,Олелькові,Олельче'), $this->object->getFirstNameCase());
    }
    public function testNameMan319()
    {
        $this->object->setFirstName('Орел');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орел,Орла,Орлові,Орла,Орлом,Орлові,Орле'), $this->object->getFirstNameCase());
    }
    public function testNameMan320()
    {
        $this->object->setFirstName('Орест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орест,Орста,Орстові,Орста,Орстом,Орстові,Орсте'), $this->object->getFirstNameCase());
    }
    public function testNameMan321()
    {
        $this->object->setFirstName('Орь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орь,Оря,Ореві,Оря,Орем,Ореві,Орю'), $this->object->getFirstNameCase());
    }
    public function testNameMan322()
    {
        $this->object->setFirstName('Оримир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Оримир,Оримира,Оримирові,Оримира,Оримиром,Оримирові,Оримире'), $this->object->getFirstNameCase());
    }
    public function testNameMan323()
    {
        $this->object->setFirstName('Осмомисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осмомисл,Осмомисла,Осмомислові,Осмомисла,Осмомислом,Осмомислові,Осмомисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan324()
    {
        $this->object->setFirstName('Острозор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Острозор,Острозора,Острозорові,Острозора,Острозором,Острозорові,Острозоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan325()
    {
        $this->object->setFirstName('Остромир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остромир,Остромира,Остромирові,Остромира,Остромиром,Остромирові,Остромире'), $this->object->getFirstNameCase());
    }
    public function testNameMan326()
    {
        $this->object->setFirstName('Остромов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остромов,Остромова,Остромовові,Остромова,Остромовом,Остромовові,Остромове'), $this->object->getFirstNameCase());
    }
    public function testNameMan327()
    {
        $this->object->setFirstName('Охрім');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Охрім,Охрома,Охромові,Охрома,Охромом,Охромові,Охроме'), $this->object->getFirstNameCase());
    }
    public function testNameMan328()
    {
        $this->object->setFirstName('Павло');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павло,Павла,Павлові,Павла,Павлом,Павлові,Павле'), $this->object->getFirstNameCase());
    }
    public function testNameMan329()
    {
        $this->object->setFirstName('Первушко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Первушко,Первушка,Первушкові,Первушка,Первушком,Первушкові,Первушче'), $this->object->getFirstNameCase());
    }
    public function testNameMan330()
    {
        $this->object->setFirstName('Перелюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Перелюб,Перелюба,Перелюбові,Перелюба,Перелюбом,Перелюбові,Перелюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan331()
    {
        $this->object->setFirstName('Перемил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Перемил,Перемила,Перемилові,Перемила,Перемилом,Перемилові,Перемиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan332()
    {
        $this->object->setFirstName('Перемисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Перемисл,Перемисла,Перемислові,Перемисла,Перемислом,Перемислові,Перемисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan333()
    {
        $this->object->setFirstName('Пересвіт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пересвіт,Пересвіта,Пересвітові,Пересвіта,Пересвітом,Пересвітові,Пересвіте'), $this->object->getFirstNameCase());
    }
    public function testNameMan334()
    {
        $this->object->setFirstName('Переяслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Переяслав,Переяслава,Переяславові,Переяслава,Переяславом,Переяславові,Переяславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan335()
    {
        $this->object->setFirstName('Першик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Першик,Першика,Першикові,Першика,Першиком,Першикові,Першиче'), $this->object->getFirstNameCase());
    }
    public function testNameMan336()
    {
        $this->object->setFirstName('Подолян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Подолян,Подоляна,Подолянові,Подоляна,Подоляном,Подолянові,Подоляне'), $this->object->getFirstNameCase());
    }
    public function testNameMan337()
    {
        $this->object->setFirstName('Позвізд');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Позвізд,Позвізда,Позвіздові,Позвізда,Позвіздом,Позвіздові,Позвізде'), $this->object->getFirstNameCase());
    }
    public function testNameMan338()
    {
        $this->object->setFirstName('Полель');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полель,Полеля,Полелеві,Полеля,Полелем,Полелеві,Полелю'), $this->object->getFirstNameCase());
    }
    public function testNameMan339()
    {
        $this->object->setFirstName('Полян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полян,Поляна,Полянові,Поляна,Поляном,Полянові,Поляне'), $this->object->getFirstNameCase());
    }
    public function testNameMan340()
    {
        $this->object->setFirstName('Пребислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пребислав,Пребислава,Пребиславові,Пребислава,Пребиславом,Пребиславові,Пребиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan341()
    {
        $this->object->setFirstName('Предислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Предислав,Предислава,Предиславові,Предислава,Предиславом,Предиславові,Предиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan342()
    {
        $this->object->setFirstName('Пугач');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пугач,Пугача,Пугачеві,Пугача,Пугачем,Пугачеві,Пугаче'), $this->object->getFirstNameCase());
    }
    public function testNameMan343()
    {
        $this->object->setFirstName('Путило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Путило,Путила,Путилові,Путила,Путилом,Путилові,Путиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan344()
    {
        $this->object->setFirstName('Путята');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Путята,Путяти,Путяті,Путяту,Путятою,Путяті,Путято'), $this->object->getFirstNameCase());
    }
    public function testNameMan345()
    {
        $this->object->setFirstName('Рава');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рава,Рави,Раві,Раву,Равою,Раві,Раво'), $this->object->getFirstNameCase());
    }
    public function testNameMan346()
    {
        $this->object->setFirstName('Рад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рад,Рада,Радові,Рада,Радом,Радові,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameMan347()
    {
        $this->object->setFirstName('Радечко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радечко,Радечка,Радечкові,Радечка,Радечком,Радечкові,Радечче'), $this->object->getFirstNameCase());
    }
    public function testNameMan348()
    {
        $this->object->setFirstName('Радивой');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радивой,Радивоя,Радивоєві,Радивоя,Радивоєм,Радивоєві,Радивою'), $this->object->getFirstNameCase());
    }
    public function testNameMan349()
    {
        $this->object->setFirstName('Радило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радило,Радила,Радилові,Радила,Радилом,Радилові,Радиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan350()
    {
        $this->object->setFirstName('Радим');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радим,Радима,Радимові,Радима,Радимом,Радимові,Радиме'), $this->object->getFirstNameCase());
    }
    public function testNameMan351()
    {
        $this->object->setFirstName('Радимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радимир,Радимира,Радимирові,Радимира,Радимиром,Радимирові,Радимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan352()
    {
        $this->object->setFirstName('Радислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радислав,Радислава,Радиславові,Радислава,Радиславом,Радиславові,Радиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan353()
    {
        $this->object->setFirstName('Радко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радко,Радка,Радкові,Радка,Радком,Радкові,Радче'), $this->object->getFirstNameCase());
    }
    public function testNameMan354()
    {
        $this->object->setFirstName('Радован');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радован,Радована,Радованові,Радована,Радованом,Радованові,Радоване'), $this->object->getFirstNameCase());
    }
    public function testNameMan355()
    {
        $this->object->setFirstName('Радогост');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радогост,Радогоста,Радогостові,Радогоста,Радогостом,Радогостові,Радогосте'), $this->object->getFirstNameCase());
    }
    public function testNameMan356()
    {
        $this->object->setFirstName('Радомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радомир,Радомира,Радомирові,Радомира,Радомиром,Радомирові,Радомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan357()
    {
        $this->object->setFirstName('Радомисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радомисл,Радомисла,Радомислові,Радомисла,Радомислом,Радомислові,Радомисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan358()
    {
        $this->object->setFirstName('Радослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радослав,Радослава,Радославові,Радослава,Радославом,Радославові,Радославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan359()
    {
        $this->object->setFirstName('Ратибор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ратибор,Ратибора,Ратиборові,Ратибора,Ратибором,Ратиборові,Ратиборе'), $this->object->getFirstNameCase());
    }
    public function testNameMan360()
    {
        $this->object->setFirstName('Ратимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ратимир,Ратимира,Ратимирові,Ратимира,Ратимиром,Ратимирові,Ратимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan361()
    {
        $this->object->setFirstName('Ратислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ратислав,Ратислава,Ратиславові,Ратислава,Ратиславом,Ратиславові,Ратиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan362()
    {
        $this->object->setFirstName('Ревун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ревун,Ревуна,Ревунові,Ревуна,Ревуном,Ревунові,Ревуне'), $this->object->getFirstNameCase());
    }
    public function testNameMan363()
    {
        $this->object->setFirstName('Рід');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рід,Рода,Родові,Рода,Родом,Родові,Роде'), $this->object->getFirstNameCase());
    }
    public function testNameMan364()
    {
        $this->object->setFirstName('Рогволод');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рогволод,Рогволода,Рогволодові,Рогволода,Рогволодом,Рогволодові,Рогволоде'), $this->object->getFirstNameCase());
    }
    public function testNameMan365()
    {
        $this->object->setFirstName('Родан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родан,Родана,Роданові,Родана,Роданом,Роданові,Родане'), $this->object->getFirstNameCase());
    }
    public function testNameMan366()
    {
        $this->object->setFirstName('Родослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Родослав,Родослава,Родославові,Родослава,Родославом,Родославові,Родославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan367()
    {
        $this->object->setFirstName('Рожден');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рожден,Рождена,Рожденові,Рождена,Рожденом,Рожденові,Рождене'), $this->object->getFirstNameCase());
    }
    public function testNameMan368()
    {
        $this->object->setFirstName('Розум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Розум,Розума,Розумові,Розума,Розумом,Розумові,Розуме'), $this->object->getFirstNameCase());
    }
    public function testNameMan369()
    {
        $this->object->setFirstName('Роксолан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роксолан,Роксолана,Роксоланові,Роксолана,Роксоланом,Роксоланові,Роксолане'), $this->object->getFirstNameCase());
    }
    public function testNameMan370()
    {
        $this->object->setFirstName('Роман');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Роман,Романа,Романові,Романа,Романом,Романові,Романе'), $this->object->getFirstNameCase());
    }
    public function testNameMan371()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ростислав,Ростислава,Ростиславові,Ростислава,Ростиславом,Ростиславові,Ростиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan372()
    {
        $this->object->setFirstName('Ростичар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ростичар,Ростичара,Ростичарові,Ростичара,Ростичаром,Ростичарові,Ростичаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan373()
    {
        $this->object->setFirstName('Ростун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ростун,Ростуна,Ростунові,Ростуна,Ростуном,Ростунові,Ростуне'), $this->object->getFirstNameCase());
    }
    public function testNameMan374()
    {
        $this->object->setFirstName('Рудан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рудан,Рудана,Руданові,Рудана,Руданом,Руданові,Рудане'), $this->object->getFirstNameCase());
    }
    public function testNameMan375()
    {
        $this->object->setFirstName('Рус');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рус,Руса,Русові,Руса,Русом,Русові,Русе'), $this->object->getFirstNameCase());
    }
    public function testNameMan376()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Руслан,Руслана,Русланові,Руслана,Русланом,Русланові,Руслане'), $this->object->getFirstNameCase());
    }
    public function testNameMan377()
    {
        $this->object->setFirstName('Русудан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Русудан,Русудана,Русуданові,Русудана,Русуданом,Русуданові,Русудане'), $this->object->getFirstNameCase());
    }
    public function testNameMan378()
    {
        $this->object->setFirstName('Сармат');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сармат,Сармата,Сарматові,Сармата,Сарматом,Сарматові,Сармате'), $this->object->getFirstNameCase());
    }
    public function testNameMan379()
    {
        $this->object->setFirstName('Сварг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сварг,Сварга,Сваргові,Сварга,Сваргом,Сваргові,Сварже'), $this->object->getFirstNameCase());
    }
    public function testNameMan380()
    {
        $this->object->setFirstName('Сват');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сват,Свата,Сватові,Свата,Сватом,Сватові,Свате'), $this->object->getFirstNameCase());
    }
    public function testNameMan381()
    {
        $this->object->setFirstName('Світ');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світ,Світа,Світові,Світа,Світом,Світові,Світе'), $this->object->getFirstNameCase());
    }
    public function testNameMan382()
    {
        $this->object->setFirstName('Світлан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світлан,Світлана,Світланові,Світлана,Світланом,Світланові,Світлане'), $this->object->getFirstNameCase());
    }
    public function testNameMan383()
    {
        $this->object->setFirstName('Світлогор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світлогор,Світлогора,Світлогорові,Світлогора,Світлогором,Світлогорові,Світлогоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan384()
    {
        $this->object->setFirstName('Світогор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світогор,Світогора,Світогорові,Світогора,Світогором,Світогорові,Світогоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan385()
    {
        $this->object->setFirstName('Світовид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світовид,Світовида,Світовидові,Світовида,Світовидом,Світовидові,Світовиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan386()
    {
        $this->object->setFirstName('Світодар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світодар,Світодара,Світодарові,Світодара,Світодаром,Світодарові,Світодаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan387()
    {
        $this->object->setFirstName('Світозар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світозар,Світозара,Світозарові,Світозара,Світозаром,Світозарові,Світозаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan388()
    {
        $this->object->setFirstName('Світокол');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світокол,Світокола,Світоколові,Світокола,Світоколом,Світоколові,Світоколе'), $this->object->getFirstNameCase());
    }
    public function testNameMan389()
    {
        $this->object->setFirstName('Світолик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світолик,Світолика,Світоликові,Світолика,Світоликом,Світоликові,Світоличе'), $this->object->getFirstNameCase());
    }
    public function testNameMan390()
    {
        $this->object->setFirstName('Світолюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світолюб,Світолюба,Світолюбові,Світолюба,Світолюбом,Світолюбові,Світолюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan391()
    {
        $this->object->setFirstName('Світомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світомир,Світомира,Світомирові,Світомира,Світомиром,Світомирові,Світомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan392()
    {
        $this->object->setFirstName('Світослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світослав,Світослава,Світославові,Світослава,Світославом,Світославові,Світославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan393()
    {
        $this->object->setFirstName('Світояр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Світояр,Світояра,Світоярові,Світояра,Світояром,Світоярові,Світояре'), $this->object->getFirstNameCase());
    }
    public function testNameMan394()
    {
        $this->object->setFirstName('Свободан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Свободан,Свободана,Свободанові,Свободана,Свободаном,Свободанові,Свободане'), $this->object->getFirstNameCase());
    }
    public function testNameMan395()
    {
        $this->object->setFirstName('Святовид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Святовид,Святовида,Святовидові,Святовида,Святовидом,Святовидові,Святовиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan396()
    {
        $this->object->setFirstName('Святогор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Святогор,Святогора,Святогорові,Святогора,Святогором,Святогорові,Святогоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan397()
    {
        $this->object->setFirstName('Святолюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Святолюб,Святолюба,Святолюбові,Святолюба,Святолюбом,Святолюбові,Святолюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan398()
    {
        $this->object->setFirstName('Святополк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Святополк,Святополка,Святополкові,Святополка,Святополком,Святополкові,Святополче'), $this->object->getFirstNameCase());
    }
    public function testNameMan399()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Святослав,Святослава,Святославові,Святослава,Святославом,Святославові,Святославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan400()
    {
        $this->object->setFirstName('Семибор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семибор,Семибора,Семиборові,Семибора,Семибором,Семиборові,Семиборе'), $this->object->getFirstNameCase());
    }
    public function testNameMan401()
    {
        $this->object->setFirstName('Семирад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семирад,Семирада,Семирадові,Семирада,Семирадом,Семирадові,Семираде'), $this->object->getFirstNameCase());
    }
    public function testNameMan402()
    {
        $this->object->setFirstName('Сердитко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сердитко,Сердитка,Сердиткові,Сердитка,Сердитком,Сердиткові,Сердитче'), $this->object->getFirstNameCase());
    }
    public function testNameMan403()
    {
        $this->object->setFirstName('Сила');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сила,Сили,Силі,Силу,Силою,Силі,Сило'), $this->object->getFirstNameCase());
    }
    public function testNameMan404()
    {
        $this->object->setFirstName('Силолюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Силолюб,Силолюба,Силолюбові,Силолюба,Силолюбом,Силолюбові,Силолюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan405()
    {
        $this->object->setFirstName('Силослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Силослав,Силослава,Силославові,Силослава,Силославом,Силославові,Силославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan406()
    {
        $this->object->setFirstName('Синьоок');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Синьоок,Синьоока,Синьоокові,Синьоока,Синьооком,Синьоокові,Синьооче'), $this->object->getFirstNameCase());
    }
    public function testNameMan407()
    {
        $this->object->setFirstName('Скол');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скол,Скола,Сколові,Скола,Сколом,Сколові,Сколе'), $this->object->getFirstNameCase());
    }
    public function testNameMan408()
    {
        $this->object->setFirstName('Слава');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Слава,Слави,Славі,Славу,Славою,Славі,Славо'), $this->object->getFirstNameCase());
    }
    public function testNameMan409()
    {
        $this->object->setFirstName('Славобор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Славобор,Славобора,Славоборові,Славобора,Славобором,Славоборові,Славоборе'), $this->object->getFirstNameCase());
    }
    public function testNameMan410()
    {
        $this->object->setFirstName('Славолюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Славолюб,Славолюба,Славолюбові,Славолюба,Славолюбом,Славолюбові,Славолюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan411()
    {
        $this->object->setFirstName('Славомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Славомир,Славомира,Славомирові,Славомира,Славомиром,Славомирові,Славомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan412()
    {
        $this->object->setFirstName('Славута');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Славута,Славути,Славуті,Славуту,Славутою,Славуті,Славуто'), $this->object->getFirstNameCase());
    }
    public function testNameMan413()
    {
        $this->object->setFirstName('Снага');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Снага,Снаги,Сназі,Снагу,Снагою,Сназі,Снаго'), $this->object->getFirstNameCase());
    }
    public function testNameMan414()
    {
        $this->object->setFirstName('Сніжан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сніжан,Сніжана,Сніжанові,Сніжана,Сніжаном,Сніжанові,Сніжане'), $this->object->getFirstNameCase());
    }
    public function testNameMan415()
    {
        $this->object->setFirstName('Сновид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сновид,Сновида,Сновидові,Сновида,Сновидом,Сновидові,Сновиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan416()
    {
        $this->object->setFirstName('Снозір');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Снозір,Снозора,Снозорові,Снозора,Снозором,Снозорові,Снозоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan417()
    {
        $this->object->setFirstName('Собібор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Собібор,Собібора,Собіборові,Собібора,Собібором,Собіборові,Собіборе'), $this->object->getFirstNameCase());
    }
    public function testNameMan418()
    {
        $this->object->setFirstName('Собімир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Собімир,Собімира,Собімирові,Собімира,Собімиром,Собімирові,Собімире'), $this->object->getFirstNameCase());
    }
    public function testNameMan419()
    {
        $this->object->setFirstName('Собіслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Собіслав,Собіслава,Собіславові,Собіслава,Собіславом,Собіславові,Собіславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan420()
    {
        $this->object->setFirstName('Сокіл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сокіл,Сокола,Соколові,Сокола,Соколом,Соколові,Соколе'), $this->object->getFirstNameCase());
    }
    public function testNameMan421()
    {
        $this->object->setFirstName('Соловей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соловей,Солов’я,Солов’єві,Солов’я,Солов’єм,Солов’єві,Солов’ю'), $this->object->getFirstNameCase());
    }
    public function testNameMan422()
    {
        $this->object->setFirstName('Сологуб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сологуб,Сологуба,Сологубові,Сологуба,Сологубом,Сологубові,Сологубе'), $this->object->getFirstNameCase());
    }
    public function testNameMan423()
    {
        $this->object->setFirstName('Сонцевид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сонцевид,Сонцевида,Сонцевидові,Сонцевида,Сонцевидом,Сонцевидові,Сонцевиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan424()
    {
        $this->object->setFirstName('Сонцедар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сонцедар,Сонцедара,Сонцедарові,Сонцедара,Сонцедаром,Сонцедарові,Сонцедаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan425()
    {
        $this->object->setFirstName('Сонцелик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сонцелик,Сонцелика,Сонцеликові,Сонцелика,Сонцеликом,Сонцеликові,Сонцеличе'), $this->object->getFirstNameCase());
    }
    public function testNameMan426()
    {
        $this->object->setFirstName('Спас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Спас,Спаса,Спасові,Спаса,Спасом,Спасові,Спасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan427()
    {
        $this->object->setFirstName('Станимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станимир,Станимира,Станимирові,Станимира,Станимиром,Станимирові,Станимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan428()
    {
        $this->object->setFirstName('Станіслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Станіслав,Станіслава,Станіславові,Станіслава,Станіславом,Станіславові,Станіславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan429()
    {
        $this->object->setFirstName('Стародум');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стародум,Стародума,Стародумові,Стародума,Стародумом,Стародумові,Стародуме'), $this->object->getFirstNameCase());
    }
    public function testNameMan430()
    {
        $this->object->setFirstName('Степан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степан,Степана,Степанові,Степана,Степаном,Степанові,Степане'), $this->object->getFirstNameCase());
    }
    public function testNameMan431()
    {
        $this->object->setFirstName('Стефаній');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стефаній,Стефанія,Стефанієві,Стефанія,Стефанієм,Стефанієві,Стефанію'), $this->object->getFirstNameCase());
    }
    public function testNameMan432()
    {
        $this->object->setFirstName('Стожар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стожар,Стожара,Стожарові,Стожара,Стожаром,Стожарові,Стожаре'), $this->object->getFirstNameCase());
    }
    public function testNameMan433()
    {
        $this->object->setFirstName('Стоймир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стоймир,Стоймира,Стоймирові,Стоймира,Стоймиром,Стоймирові,Стоймире'), $this->object->getFirstNameCase());
    }
    public function testNameMan434()
    {
        $this->object->setFirstName('Стоян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стоян,Стояна,Стоянові,Стояна,Стояном,Стоянові,Стояне'), $this->object->getFirstNameCase());
    }
    public function testNameMan435()
    {
        $this->object->setFirstName('Судивой');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Судивой,Судивоя,Судивоєві,Судивоя,Судивоєм,Судивоєві,Судивою'), $this->object->getFirstNameCase());
    }
    public function testNameMan436()
    {
        $this->object->setFirstName('Судимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Судимир,Судимира,Судимирові,Судимира,Судимиром,Судимирові,Судимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan437()
    {
        $this->object->setFirstName('Судислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Судислав,Судислава,Судиславові,Судислава,Судиславом,Судиславові,Судиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan438()
    {
        $this->object->setFirstName('Сурма');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сурма,Сурми,Сурмі,Сурму,Сурмою,Сурмі,Сурмо'), $this->object->getFirstNameCase());
    }
    public function testNameMan439()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарас,Тараса,Тарасові,Тараса,Тарасом,Тарасові,Тарасе'), $this->object->getFirstNameCase());
    }
    public function testNameMan440()
    {
        $this->object->setFirstName('Татолюб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Татолюб,Татолюба,Татолюбові,Татолюба,Татолюбом,Татолюбові,Татолюбе'), $this->object->getFirstNameCase());
    }
    public function testNameMan441()
    {
        $this->object->setFirstName('Татомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Татомир,Татомира,Татомирові,Татомира,Татомиром,Татомирові,Татомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan442()
    {
        $this->object->setFirstName('Твердигост');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Твердигост,Твердигоста,Твердигостові,Твердигоста,Твердигостом,Твердигостові,Твердигосте'), $this->object->getFirstNameCase());
    }
    public function testNameMan443()
    {
        $this->object->setFirstName('Твердислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Твердислав,Твердислава,Твердиславові,Твердислава,Твердиславом,Твердиславові,Твердиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan444()
    {
        $this->object->setFirstName('Творилад');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Творилад,Творилада,Твориладові,Творилада,Твориладом,Твориладові,Твориладе'), $this->object->getFirstNameCase());
    }
    public function testNameMan445()
    {
        $this->object->setFirstName('Творимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Творимир,Творимира,Творимирові,Творимира,Творимиром,Творимирові,Творимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan446()
    {
        $this->object->setFirstName('Творислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Творислав,Творислава,Твориславові,Творислава,Твориславом,Твориславові,Твориславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan447()
    {
        $this->object->setFirstName('Тихомир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихомир,Тихомира,Тихомирові,Тихомира,Тихомиром,Тихомирові,Тихомире'), $this->object->getFirstNameCase());
    }
    public function testNameMan448()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихон,Тихона,Тихонові,Тихона,Тихоном,Тихонові,Тихоне'), $this->object->getFirstNameCase());
    }
    public function testNameMan449()
    {
        $this->object->setFirstName('Толигнів');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Толигнів,Толигнова,Толигновові,Толигнова,Толигновом,Толигновові,Толигнове'), $this->object->getFirstNameCase());
    }
    public function testNameMan450()
    {
        $this->object->setFirstName('Толислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Толислав,Толислава,Толиславові,Толислава,Толиславом,Толиславові,Толиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan451()
    {
        $this->object->setFirstName('Тригост');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тригост,Тригоста,Тригостові,Тригоста,Тригостом,Тригостові,Тригосте'), $this->object->getFirstNameCase());
    }
    public function testNameMan452()
    {
        $this->object->setFirstName('Троян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Троян,Трояна,Троянові,Трояна,Трояном,Троянові,Трояне'), $this->object->getFirstNameCase());
    }
    public function testNameMan453()
    {
        $this->object->setFirstName('Триріг');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Триріг,Трирога,Трирогові,Трирога,Трирогом,Трирогові,Трироже'), $this->object->getFirstNameCase());
    }
    public function testNameMan454()
    {
        $this->object->setFirstName('Тур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тур,Тура,Турові,Тура,Туром,Турові,Туре'), $this->object->getFirstNameCase());
    }
    public function testNameMan455()
    {
        $this->object->setFirstName('Турбог');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Турбог,Турбога,Турбогові,Турбога,Турбогом,Турбогові,Турбоже'), $this->object->getFirstNameCase());
    }
    public function testNameMan456()
    {
        $this->object->setFirstName('Турбрід');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Турбрід,Турброда,Турбродові,Турброда,Турбродом,Турбродові,Турброде'), $this->object->getFirstNameCase());
    }
    public function testNameMan457()
    {
        $this->object->setFirstName('Уличан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Уличан,Уличана,Уличанові,Уличана,Уличаном,Уличанові,Уличане'), $this->object->getFirstNameCase());
    }
    public function testNameMan458()
    {
        $this->object->setFirstName('Ус');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ус,Уса,Усові,Уса,Усом,Усові,Усе'), $this->object->getFirstNameCase());
    }
    public function testNameMan459()
    {
        $this->object->setFirstName('Хвала');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хвала,Хвали,Хвалі,Хвалу,Хвалою,Хвалі,Хвало'), $this->object->getFirstNameCase());
    }
    public function testNameMan460()
    {
        $this->object->setFirstName('Хвалибог');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хвалибог,Хвалибога,Хвалибогові,Хвалибога,Хвалибогом,Хвалибогові,Хвалибоже'), $this->object->getFirstNameCase());
    }
    public function testNameMan461()
    {
        $this->object->setFirstName('Хвалимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хвалимир,Хвалимира,Хвалимирові,Хвалимира,Хвалимиром,Хвалимирові,Хвалимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan462()
    {
        $this->object->setFirstName('Ходота');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ходота,Ходоти,Ходоті,Ходоту,Ходотою,Ходоті,Ходото'), $this->object->getFirstNameCase());
    }
    public function testNameMan463()
    {
        $this->object->setFirstName('Хорив');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хорив,Хорива,Хоривові,Хорива,Хоривом,Хоривові,Хориве'), $this->object->getFirstNameCase());
    }
    public function testNameMan464()
    {
        $this->object->setFirstName('Хорошко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хорошко,Хорошка,Хорошкові,Хорошка,Хорошком,Хорошкові,Хорошче'), $this->object->getFirstNameCase());
    }
    public function testNameMan465()
    {
        $this->object->setFirstName('Хорошун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хорошун,Хорошуна,Хорошунові,Хорошуна,Хорошуном,Хорошунові,Хорошуне'), $this->object->getFirstNameCase());
    }
    public function testNameMan466()
    {
        $this->object->setFirstName('Хотибор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хотибор,Хотибора,Хотиборові,Хотибора,Хотибором,Хотиборові,Хотиборе'), $this->object->getFirstNameCase());
    }
    public function testNameMan467()
    {
        $this->object->setFirstName('Хотимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хотимир,Хотимира,Хотимирові,Хотимира,Хотимиром,Хотимирові,Хотимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan468()
    {
        $this->object->setFirstName('Хотян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хотян,Хотяна,Хотянові,Хотяна,Хотяном,Хотянові,Хотяне'), $this->object->getFirstNameCase());
    }
    public function testNameMan469()
    {
        $this->object->setFirstName('Хранимир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хранимир,Хранимира,Хранимирові,Хранимира,Хранимиром,Хранимирові,Хранимире'), $this->object->getFirstNameCase());
    }
    public function testNameMan470()
    {
        $this->object->setFirstName('Худан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Худан,Худана,Худанові,Худана,Худаном,Худанові,Худане'), $this->object->getFirstNameCase());
    }
    public function testNameMan471()
    {
        $this->object->setFirstName('Царко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Царко,Царка,Царкові,Царка,Царком,Царкові,Царче'), $this->object->getFirstNameCase());
    }
    public function testNameMan472()
    {
        $this->object->setFirstName('Цвітан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Цвітан,Цвітана,Цвітанові,Цвітана,Цвітаном,Цвітанові,Цвітане'), $this->object->getFirstNameCase());
    }
    public function testNameMan473()
    {
        $this->object->setFirstName('Чара');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чара,Чари,Чарі,Чару,Чарою,Чарі,Чаро'), $this->object->getFirstNameCase());
    }
    public function testNameMan474()
    {
        $this->object->setFirstName('Чернин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чернин,Чернина,Чернинові,Чернина,Чернином,Чернинові,Чернине'), $this->object->getFirstNameCase());
    }
    public function testNameMan475()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чеслав,Чеслава,Чеславові,Чеслава,Чеславом,Чеславові,Чеславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan476()
    {
        $this->object->setFirstName('Чесмил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чесмил,Чесмила,Чесмилові,Чесмила,Чесмилом,Чесмилові,Чесмиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan477()
    {
        $this->object->setFirstName('Честислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Честислав,Честислава,Честиславові,Честислава,Честиславом,Честиславові,Честиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan478()
    {
        $this->object->setFirstName('Чорновіл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чорновіл,Чорновола,Чорноволові,Чорновола,Чорноволом,Чорноволові,Чорноволе'), $this->object->getFirstNameCase());
    }
    public function testNameMan479()
    {
        $this->object->setFirstName('Чорнота');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чорнота,Чорноти,Чорноті,Чорноту,Чорнотою,Чорноті,Чорното'), $this->object->getFirstNameCase());
    }
    public function testNameMan480()
    {
        $this->object->setFirstName('Чорнотур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чорнотур,Чорнотура,Чорнотурові,Чорнотура,Чорнотуром,Чорнотурові,Чорнотуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan481()
    {
        $this->object->setFirstName('Щастибог');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щастибог,Щастибога,Щастибогові,Щастибога,Щастибогом,Щастибогові,Щастибоже'), $this->object->getFirstNameCase());
    }
    public function testNameMan482()
    {
        $this->object->setFirstName('Щастислав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щастислав,Щастислава,Щастиславові,Щастислава,Щастиславом,Щастиславові,Щастиславе'), $this->object->getFirstNameCase());
    }
    public function testNameMan483()
    {
        $this->object->setFirstName('Щедрогост');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щедрогост,Щедрогоста,Щедрогостові,Щедрогоста,Щедрогостом,Щедрогостові,Щедрогосте'), $this->object->getFirstNameCase());
    }
    public function testNameMan484()
    {
        $this->object->setFirstName('Щек');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щек,Щека,Щекові,Щека,Щеком,Щекові,Щече'), $this->object->getFirstNameCase());
    }
    public function testNameMan485()
    {
        $this->object->setFirstName('Юрій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрій,Юрія,Юрієві,Юрія,Юрієм,Юрієві,Юрію'), $this->object->getFirstNameCase());
    }
    public function testNameMan486()
    {
        $this->object->setFirstName('Юлій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юлій,Юлія,Юлієві,Юлія,Юлієм,Юлієві,Юлію'), $this->object->getFirstNameCase());
    }
    public function testNameMan487()
    {
        $this->object->setFirstName('Ява');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ява,Яви,Яві,Яву,Явою,Яві,Яво'), $this->object->getFirstNameCase());
    }
    public function testNameMan488()
    {
        $this->object->setFirstName('Явір');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Явір,Явора,Яворові,Явора,Явором,Яворові,Яворе'), $this->object->getFirstNameCase());
    }
    public function testNameMan489()
    {
        $this->object->setFirstName('Яволод');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яволод,Яволода,Яволодові,Яволода,Яволодом,Яволодові,Яволоде'), $this->object->getFirstNameCase());
    }
    public function testNameMan490()
    {
        $this->object->setFirstName('Яр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яр,Яра,Ярові,Яра,Яром,Ярові,Яре'), $this->object->getFirstNameCase());
    }
    public function testNameMan491()
    {
        $this->object->setFirstName('Ярема');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярема,Яреми,Яремі,Ярему,Яремою,Яремі,Яремо'), $this->object->getFirstNameCase());
    }
    public function testNameMan492()
    {
        $this->object->setFirstName('Ярило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярило,Ярила,Ярилові,Ярила,Ярилом,Ярилові,Яриле'), $this->object->getFirstNameCase());
    }
    public function testNameMan493()
    {
        $this->object->setFirstName('Яровид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яровид,Яровида,Яровидові,Яровида,Яровидом,Яровидові,Яровиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan494()
    {
        $this->object->setFirstName('Яровит');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яровит,Яровита,Яровитові,Яровита,Яровитом,Яровитові,Яровите'), $this->object->getFirstNameCase());
    }
    public function testNameMan495()
    {
        $this->object->setFirstName('Яромил');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яромил,Яромила,Яромилові,Яромила,Яромилом,Яромилові,Яромиле'), $this->object->getFirstNameCase());
    }
    public function testNameMan496()
    {
        $this->object->setFirstName('Яромир');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яромир,Яромира,Яромирові,Яромира,Яромиром,Яромирові,Яромире'), $this->object->getFirstNameCase());
    }
    public function testNameMan497()
    {
        $this->object->setFirstName('Яромисл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яромисл,Яромисла,Яромислові,Яромисла,Яромислом,Яромислові,Яромисле'), $this->object->getFirstNameCase());
    }
    public function testNameMan498()
    {
        $this->object->setFirstName('Ярополк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярополк,Ярополка,Ярополкові,Ярополка,Ярополком,Ярополкові,Ярополче'), $this->object->getFirstNameCase());
    }
    public function testNameMan499()
    {
        $this->object->setFirstName('Яросвіт');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яросвіт,Яросвіта,Яросвітові,Яросвіта,Яросвітом,Яросвітові,Яросвіте'), $this->object->getFirstNameCase());
    }
    public function testNameMan500()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярослав,Ярослава,Ярославові,Ярослава,Ярославом,Ярославові,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameMan501()
    {
        $this->object->setFirstName('Ярош');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярош,Яроша,Ярошеві,Яроша,Ярошем,Ярошеві,Яроше'), $this->object->getFirstNameCase());
    }
    public function testNameMan502()
    {
        $this->object->setFirstName('Яртур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яртур,Яртура,Яртурові,Яртура,Яртуром,Яртурові,Яртуре'), $this->object->getFirstNameCase());
    }
    public function testNameMan503()
    {
        $this->object->setFirstName('Ярчик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярчик,Ярчика,Ярчикові,Ярчика,Ярчиком,Ярчикові,Ярчиче'), $this->object->getFirstNameCase());
    }
    public function testNameMan504()
    {
        $this->object->setFirstName('Ясен');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ясен,Ясена,Ясенові,Ясена,Ясеном,Ясенові,Ясене'), $this->object->getFirstNameCase());
    }
    public function testNameMan505()
    {
        $this->object->setFirstName('Ясновид');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ясновид,Ясновида,Ясновидові,Ясновида,Ясновидом,Ясновидові,Ясновиде'), $this->object->getFirstNameCase());
    }
    public function testNameMan506()
    {
        $this->object->setFirstName('Ясногор');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ясногор,Ясногора,Ясногорові,Ясногора,Ясногором,Ясногорові,Ясногоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan507()
    {
        $this->object->setFirstName('Яснозір');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яснозір,Яснозора,Яснозорові,Яснозора,Яснозором,Яснозорові,Яснозоре'), $this->object->getFirstNameCase());
    }
    public function testNameMan508()
    {
        $this->object->setFirstName('Яснолик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яснолик,Яснолика,Ясноликові,Яснолика,Ясноликом,Ясноликові,Ясноличе'), $this->object->getFirstNameCase());
    }

}