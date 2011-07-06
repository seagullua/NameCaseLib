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


    public function testCrazy0()
    { 
        $this->assertEquals(explode(',','Аарон,Аарона,Ааронові,Аарона,Аароном,Ааронові,Аароне'), $this->object->q('Аарон'));
    }
    public function testCrazy1()
    { 
        $this->assertEquals(explode(',','Абакум,Абакума,Абакумові,Абакума,Абакумом,Абакумові,Абакуме'), $this->object->q('Абакум'));
    }
    public function testCrazy2()
    { 
        $this->assertEquals(explode(',','Абрам,Абрама,Абрамові,Абрама,Абрамом,Абрамові,Абраме'), $this->object->q('Абрам'));
    }
    public function testCrazy3()
    { 
        $this->assertEquals(explode(',','Августин,Августина,Августинові,Августина,Августином,Августинові,Августине'), $this->object->q('Августин'));
    }
    public function testCrazy4()
    { 
        $this->assertEquals(explode(',','Авесалом,Авесалома,Авесаломові,Авесалома,Авесаломом,Авесаломові,Авесаломе'), $this->object->q('Авесалом'));
    }
    public function testCrazy5()
    { 
        $this->assertEquals(explode(',','Авксентій,Авксентія,Авксентієві,Авксентія,Авксентієм,Авксентієві,Авксентію'), $this->object->q('Авксентій'));
    }
    public function testCrazy6()
    { 
        $this->assertEquals(explode(',','Аврелій,Аврелія,Аврелієві,Аврелія,Аврелієм,Аврелієві,Аврелію'), $this->object->q('Аврелій'));
    }
    public function testCrazy7()
    { 
        $this->assertEquals(explode(',','Автоном,Автонома,Автономові,Автонома,Автономом,Автономові,Автономе'), $this->object->q('Автоном'));
    }
    public function testCrazy8()
    { 
        $this->assertEquals(explode(',','Адам,Адама,Адамові,Адама,Адамом,Адамові,Адаме'), $this->object->q('Адам'));
    }
    public function testCrazy9()
    { 
        $this->assertEquals(explode(',','Адріян,Адріяна,Адріянові,Адріяна,Адріяном,Адріянові,Адріяне'), $this->object->q('Адріян'));
    }
    public function testCrazy10()
    { 
        $this->assertEquals(explode(',','Адріан,Адріана,Адріанові,Адріана,Адріаном,Адріанові,Адріане'), $this->object->q('Адріан'));
    }
    public function testCrazy11()
    { 
        $this->assertEquals(explode(',','Азар,Азара,Азарові,Азара,Азаром,Азарові,Азаре'), $this->object->q('Азар'));
    }
    public function testCrazy12()
    { 
        $this->assertEquals(explode(',','Алевтин,Алевтина,Алевтинові,Алевтина,Алевтином,Алевтинові,Алевтине'), $this->object->q('Алевтин'));
    }
    public function testCrazy13()
    { 
        $this->assertEquals(explode(',','Альберт,Альберта,Альбертові,Альберта,Альбертом,Альбертові,Альберте'), $this->object->q('Альберт'));
    }
    public function testCrazy14()
    { 
        $this->assertEquals(explode(',','Амвросій,Амвросія,Амвросієві,Амвросія,Амвросієм,Амвросієві,Амвросію'), $this->object->q('Амвросій'));
    }
    public function testCrazy15()
    { 
        $this->assertEquals(explode(',','Амнон,Амнона,Амнонові,Амнона,Амноном,Амнонові,Амноне'), $this->object->q('Амнон'));
    }
    public function testCrazy16()
    { 
        $this->assertEquals(explode(',','Амос,Амоса,Амосові,Амоса,Амосом,Амосові,Амосе'), $this->object->q('Амос'));
    }
    public function testCrazy17()
    { 
        $this->assertEquals(explode(',','Анастас,Анастаса,Анастасові,Анастаса,Анастасом,Анастасові,Анастасе'), $this->object->q('Анастас'));
    }
    public function testCrazy18()
    { 
        $this->assertEquals(explode(',','Анастасій,Анастасія,Анастасієві,Анастасія,Анастасієм,Анастасієві,Анастасію'), $this->object->q('Анастасій'));
    }
    public function testCrazy19()
    { 
        $this->assertEquals(explode(',','Андрій,Андрія,Андрієві,Андрія,Андрієм,Андрієві,Андрію'), $this->object->q('Андрій'));
    }
    public function testCrazy20()
    { 
        $this->assertEquals(explode(',','Антоній,Антонія,Антонієві,Антонія,Антонієм,Антонієві,Антонію'), $this->object->q('Антоній'));
    }
    public function testCrazy21()
    { 
        $this->assertEquals(explode(',','Антон,Антона,Антонові,Антона,Антоном,Антонові,Антоне'), $this->object->q('Антон'));
    }
    public function testCrazy22()
    { 
        $this->assertEquals(explode(',','Анісій,Анісія,Анісієві,Анісія,Анісієм,Анісієві,Анісію'), $this->object->q('Анісій'));
    }
    public function testCrazy23()
    { 
        $this->assertEquals(explode(',','Аркадій,Аркадія,Аркадієві,Аркадія,Аркадієм,Аркадієві,Аркадію'), $this->object->q('Аркадій'));
    }
    public function testCrazy24()
    { 
        $this->assertEquals(explode(',','Арсен,Арсена,Арсенові,Арсена,Арсеном,Арсенові,Арсене'), $this->object->q('Арсен'));
    }
    public function testCrazy25()
    { 
        $this->assertEquals(explode(',','Арсеній,Арсенія,Арсенієві,Арсенія,Арсенієм,Арсенієві,Арсенію'), $this->object->q('Арсеній'));
    }
    public function testCrazy26()
    { 
        $this->assertEquals(explode(',','Артем,Артема,Артемові,Артема,Артемом,Артемові,Артеме'), $this->object->q('Артем'));
    }
    public function testCrazy27()
    { 
        $this->assertEquals(explode(',','Архип,Архипа,Архипові,Архипа,Архипом,Архипові,Архипе'), $this->object->q('Архип'));
    }
    public function testCrazy28()
    { 
        $this->assertEquals(explode(',','Атанас,Атанаса,Атанасові,Атанаса,Атанасом,Атанасові,Атанасе'), $this->object->q('Атанас'));
    }
    public function testCrazy29()
    { 
        $this->assertEquals(explode(',','Аскольд,Аскольда,Аскольдові,Аскольда,Аскольдом,Аскольдові,Аскольде'), $this->object->q('Аскольд'));
    }
    public function testCrazy30()
    { 
        $this->assertEquals(explode(',','Бажан,Бажана,Бажанові,Бажана,Бажаном,Бажанові,Бажане'), $this->object->q('Бажан'));
    }
    public function testCrazy31()
    { 
        $this->assertEquals(explode(',','Біловид,Біловида,Біловидові,Біловида,Біловидом,Біловидові,Біловиде'), $this->object->q('Біловид'));
    }
    public function testCrazy32()
    { 
        $this->assertEquals(explode(',','Білогост,Білогоста,Білогостові,Білогоста,Білогостом,Білогостові,Білогосте'), $this->object->q('Білогост'));
    }
    public function testCrazy33()
    { 
        $this->assertEquals(explode(',','Біломир,Біломира,Біломирові,Біломира,Біломиром,Біломирові,Біломире'), $this->object->q('Біломир'));
    }
    public function testCrazy34()
    { 
        $this->assertEquals(explode(',','Білослав,Білослава,Білославові,Білослава,Білославом,Білославові,Білославе'), $this->object->q('Білослав'));
    }
    public function testCrazy35()
    { 
        $this->assertEquals(explode(',','Білотур,Білотура,Білотурові,Білотура,Білотуром,Білотурові,Білотуре'), $this->object->q('Білотур'));
    }
    public function testCrazy36()
    { 
        $this->assertEquals(explode(',','Білян,Біляна,Білянові,Біляна,Біляном,Білянові,Біляне'), $this->object->q('Білян'));
    }
    public function testCrazy37()
    { 
        $this->assertEquals(explode(',','Благовид,Благовида,Благовидові,Благовида,Благовидом,Благовидові,Благовиде'), $this->object->q('Благовид'));
    }
    public function testCrazy38()
    { 
        $this->assertEquals(explode(',','Благовіст,Благовіста,Благовістові,Благовіста,Благовістом,Благовістові,Благовісте'), $this->object->q('Благовіст'));
    }
    public function testCrazy39()
    { 
        $this->assertEquals(explode(',','Благодар,Благодара,Благодарові,Благодара,Благодаром,Благодарові,Благодаре'), $this->object->q('Благодар'));
    }
    public function testCrazy40()
    { 
        $this->assertEquals(explode(',','Благодат,Благодата,Благодатові,Благодата,Благодатом,Благодатові,Благодате'), $this->object->q('Благодат'));
    }
    public function testCrazy41()
    { 
        $this->assertEquals(explode(',','Благомир,Благомира,Благомирові,Благомира,Благомиром,Благомирові,Благомире'), $this->object->q('Благомир'));
    }
    public function testCrazy42()
    { 
        $this->assertEquals(explode(',','Благослав,Благослава,Благославові,Благослава,Благославом,Благославові,Благославе'), $this->object->q('Благослав'));
    }
    public function testCrazy43()
    { 
        $this->assertEquals(explode(',','Богдан,Богдана,Богданові,Богдана,Богданом,Богданові,Богдане'), $this->object->q('Богдан'));
    }
    public function testCrazy44()
    { 
        $this->assertEquals(explode(',','Боговір,Боговора,Боговорові,Боговора,Боговором,Боговорові,Боговоре'), $this->object->q('Боговір'));
    }
    public function testCrazy45()
    { 
        $this->assertEquals(explode(',','Боговіст,Боговіста,Боговістові,Боговіста,Боговістом,Боговістові,Боговісте'), $this->object->q('Боговіст'));
    }
    public function testCrazy46()
    { 
        $this->assertEquals(explode(',','Богодар,Богодара,Богодарові,Богодара,Богодаром,Богодарові,Богодаре'), $this->object->q('Богодар'));
    }
    public function testCrazy47()
    { 
        $this->assertEquals(explode(',','Боголад,Боголада,Боголадові,Боголада,Боголадом,Боголадові,Боголаде'), $this->object->q('Боголад'));
    }
    public function testCrazy48()
    { 
        $this->assertEquals(explode(',','Боголіп,Боголопа,Боголопові,Боголопа,Боголопом,Боголопові,Боголопе'), $this->object->q('Боголіп'));
    }
    public function testCrazy49()
    { 
        $this->assertEquals(explode(',','Боголюб,Боголюба,Боголюбові,Боголюба,Боголюбом,Боголюбові,Боголюбе'), $this->object->q('Боголюб'));
    }
    public function testCrazy50()
    { 
        $this->assertEquals(explode(',','Богород,Богорода,Богородові,Богорода,Богородом,Богородові,Богороде'), $this->object->q('Богород'));
    }
    public function testCrazy51()
    { 
        $this->assertEquals(explode(',','Богосвят,Богосвята,Богосвятові,Богосвята,Богосвятом,Богосвятові,Богосвяте'), $this->object->q('Богосвят'));
    }
    public function testCrazy52()
    { 
        $this->assertEquals(explode(',','Богумил,Богумила,Богумилові,Богумила,Богумилом,Богумилові,Богумиле'), $this->object->q('Богумил'));
    }
    public function testCrazy53()
    { 
        $this->assertEquals(explode(',','Богумир,Богумира,Богумирові,Богумира,Богумиром,Богумирові,Богумире'), $this->object->q('Богумир'));
    }
    public function testCrazy54()
    { 
        $this->assertEquals(explode(',','Богуслав,Богуслава,Богуславові,Богуслава,Богуславом,Богуславові,Богуславе'), $this->object->q('Богуслав'));
    }
    public function testCrazy55()
    { 
        $this->assertEquals(explode(',','Бож,Божа,Божеві,Божа,Божем,Божеві,Боже'), $this->object->q('Бож'));
    }
    public function testCrazy56()
    { 
        $this->assertEquals(explode(',','Божан,Божана,Божанові,Божана,Божаном,Божанові,Божане'), $this->object->q('Божан'));
    }
    public function testCrazy57()
    { 
        $this->assertEquals(explode(',','Божедар,Божедара,Божедарові,Божедара,Божедаром,Божедарові,Божедаре'), $this->object->q('Божедар'));
    }
    public function testCrazy58()
    { 
        $this->assertEquals(explode(',','Божейко,Божейка,Божейкові,Божейка,Божейком,Божейкові,Божейче'), $this->object->q('Божейко'));
    }
    public function testCrazy59()
    { 
        $this->assertEquals(explode(',','Божемир,Божемира,Божемирові,Божемира,Божемиром,Божемирові,Божемире'), $this->object->q('Божемир'));
    }
    public function testCrazy60()
    { 
        $this->assertEquals(explode(',','Божен,Божена,Боженові,Божена,Боженом,Боженові,Божене'), $this->object->q('Божен'));
    }
    public function testCrazy61()
    { 
        $this->assertEquals(explode(',','Божко,Божка,Божкові,Божка,Божком,Божкові,Божче'), $this->object->q('Божко'));
    }
    public function testCrazy62()
    { 
        $this->assertEquals(explode(',','Болеслав,Болеслава,Болеславові,Болеслава,Болеславом,Болеславові,Болеславе'), $this->object->q('Болеслав'));
    }
    public function testCrazy63()
    { 
        $this->assertEquals(explode(',','Боримир,Боримира,Боримирові,Боримира,Боримиром,Боримирові,Боримире'), $this->object->q('Боримир'));
    }
    public function testCrazy64()
    { 
        $this->assertEquals(explode(',','Боримисл,Боримисла,Боримислові,Боримисла,Боримислом,Боримислові,Боримисле'), $this->object->q('Боримисл'));
    }
    public function testCrazy65()
    { 
        $this->assertEquals(explode(',','Борис,Бориса,Борисові,Бориса,Борисом,Борисові,Борисе'), $this->object->q('Борис'));
    }
    public function testCrazy66()
    { 
        $this->assertEquals(explode(',','Борислав,Борислава,Бориславові,Борислава,Бориславом,Бориславові,Бориславе'), $this->object->q('Борислав'));
    }
    public function testCrazy67()
    { 
        $this->assertEquals(explode(',','Боян,Бояна,Боянові,Бояна,Бояном,Боянові,Бояне'), $this->object->q('Боян'));
    }
    public function testCrazy68()
    { 
        $this->assertEquals(explode(',','Братан,Братана,Братанові,Братана,Братаном,Братанові,Братане'), $this->object->q('Братан'));
    }
    public function testCrazy69()
    { 
        $this->assertEquals(explode(',','Бративой,Бративоя,Бративоєві,Бративоя,Бративоєм,Бративоєві,Бративою'), $this->object->q('Бративой'));
    }
    public function testCrazy70()
    { 
        $this->assertEquals(explode(',','Братимир,Братимира,Братимирові,Братимира,Братимиром,Братимирові,Братимире'), $this->object->q('Братимир'));
    }
    public function testCrazy71()
    { 
        $this->assertEquals(explode(',','Братислав,Братислава,Братиславові,Братислава,Братиславом,Братиславові,Братиславе'), $this->object->q('Братислав'));
    }
    public function testCrazy72()
    { 
        $this->assertEquals(explode(',','Братко,Братка,Браткові,Братка,Братком,Браткові,Братче'), $this->object->q('Братко'));
    }
    public function testCrazy73()
    { 
        $this->assertEquals(explode(',','Братомил,Братомила,Братомилові,Братомила,Братомилом,Братомилові,Братомиле'), $this->object->q('Братомил'));
    }
    public function testCrazy74()
    { 
        $this->assertEquals(explode(',','Братослав,Братослава,Братославові,Братослава,Братославом,Братославові,Братославе'), $this->object->q('Братослав'));
    }
    public function testCrazy75()
    { 
        $this->assertEquals(explode(',','Брячислав,Брячислава,Брячиславові,Брячислава,Брячиславом,Брячиславові,Брячиславе'), $this->object->q('Брячислав'));
    }
    public function testCrazy76()
    { 
        $this->assertEquals(explode(',','Боронислав,Боронислава,Борониславові,Боронислава,Борониславом,Борониславові,Борониславе'), $this->object->q('Боронислав'));
    }
    public function testCrazy77()
    { 
        $this->assertEquals(explode(',','Будивид,Будивида,Будивидові,Будивида,Будивидом,Будивидові,Будивиде'), $this->object->q('Будивид'));
    }
    public function testCrazy78()
    { 
        $this->assertEquals(explode(',','Будивой,Будивоя,Будивоєві,Будивоя,Будивоєм,Будивоєві,Будивою'), $this->object->q('Будивой'));
    }
    public function testCrazy79()
    { 
        $this->assertEquals(explode(',','Будимил,Будимила,Будимилові,Будимила,Будимилом,Будимилові,Будимиле'), $this->object->q('Будимил'));
    }
    public function testCrazy80()
    { 
        $this->assertEquals(explode(',','Будимир,Будимира,Будимирові,Будимира,Будимиром,Будимирові,Будимире'), $this->object->q('Будимир'));
    }
    public function testCrazy81()
    { 
        $this->assertEquals(explode(',','Будислав,Будислава,Будиславові,Будислава,Будиславом,Будиславові,Будиславе'), $this->object->q('Будислав'));
    }
    public function testCrazy82()
    { 
        $this->assertEquals(explode(',','Буймир,Буймира,Буймирові,Буймира,Буймиром,Буймирові,Буймире'), $this->object->q('Буймир'));
    }
    public function testCrazy83()
    { 
        $this->assertEquals(explode(',','Буйтур,Буйтура,Буйтурові,Буйтура,Буйтуром,Буйтурові,Буйтуре'), $this->object->q('Буйтур'));
    }
    public function testCrazy84()
    { 
        $this->assertEquals(explode(',','Буревій,Буревія,Буревієві,Буревія,Буревієм,Буревієві,Буревію'), $this->object->q('Буревій'));
    }
    public function testCrazy85()
    { 
        $this->assertEquals(explode(',','Буревіст,Буревіста,Буревістові,Буревіста,Буревістом,Буревістові,Буревісте'), $this->object->q('Буревіст'));
    }
    public function testCrazy86()
    { 
        $this->assertEquals(explode(',','Василь,Василя,Василеві,Василя,Василем,Василеві,Василю'), $this->object->q('Василь'));
    }
    public function testCrazy87()
    { 
        $this->assertEquals(explode(',','Ведан,Ведана,Веданові,Ведана,Веданом,Веданові,Ведане'), $this->object->q('Ведан'));
    }
    public function testCrazy88()
    { 
        $this->assertEquals(explode(',','Велемир,Велемира,Велемирові,Велемира,Велемиром,Велемирові,Велемире'), $this->object->q('Велемир'));
    }
    public function testCrazy89()
    { 
        $this->assertEquals(explode(',','Велемудр,Велемудра,Велемудрові,Велемудра,Велемудром,Велемудрові,Велемудре'), $this->object->q('Велемудр'));
    }
    public function testCrazy90()
    { 
        $this->assertEquals(explode(',','Велет,Велета,Велетові,Велета,Велетом,Велетові,Велете'), $this->object->q('Велет'));
    }
    public function testCrazy91()
    { 
        $this->assertEquals(explode(',','Величар,Величара,Величарові,Величара,Величаром,Величарові,Величаре'), $this->object->q('Величар'));
    }
    public function testCrazy92()
    { 
        $this->assertEquals(explode(',','Величко,Величка,Величкові,Величка,Величком,Величкові,Величче'), $this->object->q('Величко'));
    }
    public function testCrazy93()
    { 
        $this->assertEquals(explode(',','Вербан,Вербана,Вербанові,Вербана,Вербаном,Вербанові,Вербане'), $this->object->q('Вербан'));
    }
    public function testCrazy94()
    { 
        $this->assertEquals(explode(',','Вернидуб,Вернидуба,Вернидубові,Вернидуба,Вернидубом,Вернидубові,Вернидубе'), $this->object->q('Вернидуб'));
    }
    public function testCrazy95()
    { 
        $this->assertEquals(explode(',','Вернислав,Вернислава,Верниславові,Вернислава,Верниславом,Верниславові,Верниславе'), $this->object->q('Вернислав'));
    }
    public function testCrazy96()
    { 
        $this->assertEquals(explode(',','Веселан,Веселана,Веселанові,Веселана,Веселаном,Веселанові,Веселане'), $this->object->q('Веселан'));
    }
    public function testCrazy97()
    { 
        $this->assertEquals(explode(',','Витомир,Витомира,Витомирові,Витомира,Витомиром,Витомирові,Витомире'), $this->object->q('Витомир'));
    }
    public function testCrazy98()
    { 
        $this->assertEquals(explode(',','Вишата,Вишати,Вишаті,Вишату,Вишатою,Вишаті,Вишато'), $this->object->q('Вишата'));
    }
    public function testCrazy99()
    { 
        $this->assertEquals(explode(',','Вишезор,Вишезора,Вишезорові,Вишезора,Вишезором,Вишезорові,Вишезоре'), $this->object->q('Вишезор'));
    }
    public function testCrazy100()
    { 
        $this->assertEquals(explode(',','Вишеслав,Вишеслава,Вишеславові,Вишеслава,Вишеславом,Вишеславові,Вишеславе'), $this->object->q('Вишеслав'));
    }
    public function testCrazy101()
    { 
        $this->assertEquals(explode(',','Вір,Вора,Ворові,Вора,Вором,Ворові,Воре'), $this->object->q('Вір'));
    }
    public function testCrazy102()
    { 
        $this->assertEquals(explode(',','Віродан,Віродана,Віроданові,Віродана,Віроданом,Віроданові,Віродане'), $this->object->q('Віродан'));
    }
    public function testCrazy103()
    { 
        $this->assertEquals(explode(',','Віродар,Віродара,Віродарові,Віродара,Віродаром,Віродарові,Віродаре'), $this->object->q('Віродар'));
    }
    public function testCrazy104()
    { 
        $this->assertEquals(explode(',','Вірослав,Вірослава,Вірославові,Вірослава,Вірославом,Вірославові,Вірославе'), $this->object->q('Вірослав'));
    }
    public function testCrazy105()
    { 
        $this->assertEquals(explode(',','Віст,Віста,Вістові,Віста,Вістом,Вістові,Вісте'), $this->object->q('Віст'));
    }
    public function testCrazy106()
    { 
        $this->assertEquals(explode(',','Вістан,Вістана,Вістанові,Вістана,Вістаном,Вістанові,Вістане'), $this->object->q('Вістан'));
    }
    public function testCrazy107()
    { 
        $this->assertEquals(explode(',','Вітан,Вітана,Вітанові,Вітана,Вітаном,Вітанові,Вітане'), $this->object->q('Вітан'));
    }
    public function testCrazy108()
    { 
        $this->assertEquals(explode(',','Вітомир,Вітомира,Вітомирові,Вітомира,Вітомиром,Вітомирові,Вітомире'), $this->object->q('Вітомир'));
    }
    public function testCrazy109()
    { 
        $this->assertEquals(explode(',','Вітрян,Вітряна,Вітрянові,Вітряна,Вітряном,Вітрянові,Вітряне'), $this->object->q('Вітрян'));
    }
    public function testCrazy110()
    { 
        $this->assertEquals(explode(',','Влад,Влада,Владові,Влада,Владом,Владові,Владе'), $this->object->q('Влад'));
    }
    public function testCrazy111()
    { 
        $this->assertEquals(explode(',','Владислав,Владислава,Владиславові,Владислава,Владиславом,Владиславові,Владиславе'), $this->object->q('Владислав'));
    }
    public function testCrazy112()
    { 
        $this->assertEquals(explode(',','Власт,Власта,Властові,Власта,Властом,Властові,Власте'), $this->object->q('Власт'));
    }
    public function testCrazy113()
    { 
        $this->assertEquals(explode(',','Вогнедар,Вогнедара,Вогнедарові,Вогнедара,Вогнедаром,Вогнедарові,Вогнедаре'), $this->object->q('Вогнедар'));
    }
    public function testCrazy114()
    { 
        $this->assertEquals(explode(',','Вогнян,Вогняна,Вогнянові,Вогняна,Вогняном,Вогнянові,Вогняне'), $this->object->q('Вогнян'));
    }
    public function testCrazy115()
    { 
        $this->assertEquals(explode(',','Водограй,Водограя,Водограєві,Водограя,Водограєм,Водограєві,Водограю'), $this->object->q('Водограй'));
    }
    public function testCrazy116()
    { 
        $this->assertEquals(explode(',','Водотрав,Водотрава,Водотравові,Водотрава,Водотравом,Водотравові,Водотраве'), $this->object->q('Водотрав'));
    }
    public function testCrazy117()
    { 
        $this->assertEquals(explode(',','Воїслав,Воїслава,Воїславові,Воїслава,Воїславом,Воїславові,Воїславе'), $this->object->q('Воїслав'));
    }
    public function testCrazy118()
    { 
        $this->assertEquals(explode(',','Волелюб,Волелюба,Волелюбові,Волелюба,Волелюбом,Волелюбові,Волелюбе'), $this->object->q('Волелюб'));
    }
    public function testCrazy119()
    { 
        $this->assertEquals(explode(',','Володар,Володара,Володарові,Володара,Володаром,Володарові,Володаре'), $this->object->q('Володар'));
    }
    public function testCrazy120()
    { 
        $this->assertEquals(explode(',','Володимир,Володимира,Володимирові,Володимира,Володимиром,Володимирові,Володимире'), $this->object->q('Володимир'));
    }
    public function testCrazy121()
    { 
        $this->assertEquals(explode(',','Володислав,Володислава,Володиславові,Володислава,Володиславом,Володиславові,Володиславе'), $this->object->q('Володислав'));
    }
    public function testCrazy122()
    { 
        $this->assertEquals(explode(',','Воля,Волі,Волі,Волю,Волею,Волі,Воле'), $this->object->q('Воля'));
    }
    public function testCrazy123()
    { 
        $this->assertEquals(explode(',','Воротислав,Воротислава,Воротиславові,Воротислава,Воротиславом,Воротиславові,Воротиславе'), $this->object->q('Воротислав'));
    }
    public function testCrazy124()
    { 
        $this->assertEquals(explode(',','Вратан,Вратана,Вратанові,Вратана,Вратаном,Вратанові,Вратане'), $this->object->q('Вратан'));
    }
    public function testCrazy125()
    { 
        $this->assertEquals(explode(',','Вратислав,Вратислава,Вратиславові,Вратислава,Вратиславом,Вратиславові,Вратиславе'), $this->object->q('Вратислав'));
    }
    public function testCrazy126()
    { 
        $this->assertEquals(explode(',','Всевлад,Всевлада,Всевладові,Всевлада,Всевладом,Всевладові,Всевладе'), $this->object->q('Всевлад'));
    }
    public function testCrazy127()
    { 
        $this->assertEquals(explode(',','Всеволод,Всеволода,Всеволодові,Всеволода,Всеволодом,Всеволодові,Всеволоде'), $this->object->q('Всеволод'));
    }
    public function testCrazy128()
    { 
        $this->assertEquals(explode(',','Вселюб,Вселюба,Вселюбові,Вселюба,Вселюбом,Вселюбові,Вселюбе'), $this->object->q('Вселюб'));
    }
    public function testCrazy129()
    { 
        $this->assertEquals(explode(',','Вселюд,Вселюда,Вселюдові,Вселюда,Вселюдом,Вселюдові,Вселюде'), $this->object->q('Вселюд'));
    }
    public function testCrazy130()
    { 
        $this->assertEquals(explode(',','Всеслав,Всеслава,Всеславові,Всеслава,Всеславом,Всеславові,Всеславе'), $this->object->q('Всеслав'));
    }
    public function testCrazy131()
    { 
        $this->assertEquals(explode(',','Гарнослав,Гарнослава,Гарнославові,Гарнослава,Гарнославом,Гарнославові,Гарнославе'), $this->object->q('Гарнослав'));
    }
    public function testCrazy132()
    { 
        $this->assertEquals(explode(',','Гатусил,Гатусила,Гатусилові,Гатусила,Гатусилом,Гатусилові,Гатусиле'), $this->object->q('Гатусил'));
    }
    public function testCrazy133()
    { 
        $this->assertEquals(explode(',','Гатуслав,Гатуслава,Гатуславові,Гатуслава,Гатуславом,Гатуславові,Гатуславе'), $this->object->q('Гатуслав'));
    }
    public function testCrazy134()
    { 
        $this->assertEquals(explode(',','Гервасій,Гервасія,Гервасієві,Гервасія,Гервасієм,Гервасієві,Гервасію'), $this->object->q('Гервасій'));
    }
    public function testCrazy135()
    { 
        $this->assertEquals(explode(',','Гладко,Гладка,Гладкові,Гладка,Гладком,Гладкові,Гладче'), $this->object->q('Гладко'));
    }
    public function testCrazy136()
    { 
        $this->assertEquals(explode(',','Гліб,Гліба,Глібові,Гліба,Глібом,Глібові,Глібе'), $this->object->q('Гліб'));
    }
    public function testCrazy137()
    { 
        $this->assertEquals(explode(',','Годомир,Годомира,Годомирові,Годомира,Годомиром,Годомирові,Годомире'), $this->object->q('Годомир'));
    }
    public function testCrazy138()
    { 
        $this->assertEquals(explode(',','Голубко,Голубка,Голубкові,Голубка,Голубком,Голубкові,Голубче'), $this->object->q('Голубко'));
    }
    public function testCrazy139()
    { 
        $this->assertEquals(explode(',','Горун,Горуна,Горунові,Горуна,Горуном,Горунові,Горуне'), $this->object->q('Горун'));
    }
    public function testCrazy140()
    { 
        $this->assertEquals(explode(',','Гордій,Гордія,Гордієві,Гордія,Гордієм,Гордієві,Гордію'), $this->object->q('Гордій'));
    }
    public function testCrazy141()
    { 
        $this->assertEquals(explode(',','Гордислав,Гордислава,Гордиславові,Гордислава,Гордиславом,Гордиславові,Гордиславе'), $this->object->q('Гордислав'));
    }
    public function testCrazy142()
    { 
        $this->assertEquals(explode(',','Гордогост,Гордогоста,Гордогостові,Гордогоста,Гордогостом,Гордогостові,Гордогосте'), $this->object->q('Гордогост'));
    }
    public function testCrazy143()
    { 
        $this->assertEquals(explode(',','Гордодум,Гордодума,Гордодумові,Гордодума,Гордодумом,Гордодумові,Гордодуме'), $this->object->q('Гордодум'));
    }
    public function testCrazy144()
    { 
        $this->assertEquals(explode(',','Гордомисл,Гордомисла,Гордомислові,Гордомисла,Гордомислом,Гордомислові,Гордомисле'), $this->object->q('Гордомисл'));
    }
    public function testCrazy145()
    { 
        $this->assertEquals(explode(',','Гордослав,Гордослава,Гордославові,Гордослава,Гордославом,Гордославові,Гордославе'), $this->object->q('Гордослав'));
    }
    public function testCrazy146()
    { 
        $this->assertEquals(explode(',','Гордята,Гордяти,Гордяті,Гордяту,Гордятою,Гордяті,Гордято'), $this->object->q('Гордята'));
    }
    public function testCrazy147()
    { 
        $this->assertEquals(explode(',','Горигляд,Горигляда,Гориглядові,Горигляда,Гориглядом,Гориглядові,Горигляде'), $this->object->q('Горигляд'));
    }
    public function testCrazy148()
    { 
        $this->assertEquals(explode(',','Горимир,Горимира,Горимирові,Горимира,Горимиром,Горимирові,Горимире'), $this->object->q('Горимир'));
    }
    public function testCrazy149()
    { 
        $this->assertEquals(explode(',','Горимисл,Горимисла,Горимислові,Горимисла,Горимислом,Горимислові,Горимисле'), $this->object->q('Горимисл'));
    }
    public function testCrazy150()
    { 
        $this->assertEquals(explode(',','Горисвіт,Горисвіта,Горисвітові,Горисвіта,Горисвітом,Горисвітові,Горисвіте'), $this->object->q('Горисвіт'));
    }
    public function testCrazy151()
    { 
        $this->assertEquals(explode(',','Горислав,Горислава,Гориславові,Горислава,Гориславом,Гориславові,Гориславе'), $this->object->q('Горислав'));
    }
    public function testCrazy152()
    { 
        $this->assertEquals(explode(',','Горицвіт,Горицвіта,Горицвітові,Горицвіта,Горицвітом,Горицвітові,Горицвіте'), $this->object->q('Горицвіт'));
    }
    public function testCrazy153()
    { 
        $this->assertEquals(explode(',','Гостомисл,Гостомисла,Гостомислові,Гостомисла,Гостомислом,Гостомислові,Гостомисле'), $this->object->q('Гостомисл'));
    }
    public function testCrazy154()
    { 
        $this->assertEquals(explode(',','Гострозір,Гострозора,Гострозорові,Гострозора,Гострозором,Гострозорові,Гострозоре'), $this->object->q('Гострозір'));
    }
    public function testCrazy155()
    { 
        $this->assertEquals(explode(',','Гостята,Гостяти,Гостяті,Гостяту,Гостятою,Гостяті,Гостято'), $this->object->q('Гостята'));
    }
    public function testCrazy156()
    { 
        $this->assertEquals(explode(',','Градимир,Градимира,Градимирові,Градимира,Градимиром,Градимирові,Градимире'), $this->object->q('Градимир'));
    }
    public function testCrazy157()
    { 
        $this->assertEquals(explode(',','Градислав,Градислава,Градиславові,Градислава,Градиславом,Градиславові,Градиславе'), $this->object->q('Градислав'));
    }
    public function testCrazy158()
    { 
        $this->assertEquals(explode(',','Гранислав,Гранислава,Граниславові,Гранислава,Граниславом,Граниславові,Граниславе'), $this->object->q('Гранислав'));
    }
    public function testCrazy159()
    { 
        $this->assertEquals(explode(',','Грива,Гриви,Гриві,Гриву,Гривою,Гриві,Гриво'), $this->object->q('Грива'));
    }
    public function testCrazy160()
    { 
        $this->assertEquals(explode(',','Григорій,Григорія,Григорієві,Григорія,Григорієм,Григорієві,Григорію'), $this->object->q('Григорій'));
    }
    public function testCrazy161()
    { 
        $this->assertEquals(explode(',','Гремислав,Гремислава,Гремиславові,Гремислава,Гремиславом,Гремиславові,Гремиславе'), $this->object->q('Гремислав'));
    }
    public function testCrazy162()
    { 
        $this->assertEquals(explode(',','Грозан,Грозана,Грозанові,Грозана,Грозаном,Грозанові,Грозане'), $this->object->q('Грозан'));
    }
    public function testCrazy163()
    { 
        $this->assertEquals(explode(',','Громовик,Громовика,Громовикові,Громовика,Громовиком,Громовикові,Громовиче'), $this->object->q('Громовик'));
    }
    public function testCrazy164()
    { 
        $this->assertEquals(explode(',','Гуляйвітер,Гуляйвітера,Гуляйвітерові,Гуляйвітера,Гуляйвітером,Гуляйвітерові,Гуляйвітере'), $this->object->q('Гуляйвітер'));
    }
    public function testCrazy165()
    { 
        $this->assertEquals(explode(',','Густомисл,Густомисла,Густомислові,Густомисла,Густомислом,Густомислові,Густомисле'), $this->object->q('Густомисл'));
    }
    public function testCrazy166()
    { 
        $this->assertEquals(explode(',','Далемил,Далемила,Далемилові,Далемила,Далемилом,Далемилові,Далемиле'), $this->object->q('Далемил'));
    }
    public function testCrazy167()
    { 
        $this->assertEquals(explode(',','Далемир,Далемира,Далемирові,Далемира,Далемиром,Далемирові,Далемире'), $this->object->q('Далемир'));
    }
    public function testCrazy168()
    { 
        $this->assertEquals(explode(',','Далібор,Далібора,Даліборові,Далібора,Далібором,Даліборові,Даліборе'), $this->object->q('Далібор'));
    }
    public function testCrazy169()
    { 
        $this->assertEquals(explode(',','Дан,Дана,Данові,Дана,Даном,Данові,Дане'), $this->object->q('Дан'));
    }
    public function testCrazy170()
    { 
        $this->assertEquals(explode(',','Данило,Данила,Данилові,Данила,Данилом,Данилові,Даниле'), $this->object->q('Данило'));
    }
    public function testCrazy171()
    { 
        $this->assertEquals(explode(',','Данко,Данка,Данкові,Данка,Данком,Данкові,Данче'), $this->object->q('Данко'));
    }
    public function testCrazy172()
    { 
        $this->assertEquals(explode(',','Дантур,Дантура,Дантурові,Дантура,Дантуром,Дантурові,Дантуре'), $this->object->q('Дантур'));
    }
    public function testCrazy173()
    { 
        $this->assertEquals(explode(',','Дар,Дара,Дарові,Дара,Даром,Дарові,Даре'), $this->object->q('Дар'));
    }
    public function testCrazy174()
    { 
        $this->assertEquals(explode(',','Дарій,Дарія,Дарієві,Дарія,Дарієм,Дарієві,Дарію'), $this->object->q('Дарій'));
    }
    public function testCrazy175()
    { 
        $this->assertEquals(explode(',','Дарибог,Дарибога,Дарибогові,Дарибога,Дарибогом,Дарибогові,Дарибоже'), $this->object->q('Дарибог'));
    }
    public function testCrazy176()
    { 
        $this->assertEquals(explode(',','Даромир,Даромира,Даромирові,Даромира,Даромиром,Даромирові,Даромире'), $this->object->q('Даромир'));
    }
    public function testCrazy177()
    { 
        $this->assertEquals(explode(',','Держикрай,Держикрая,Держикраєві,Держикрая,Держикраєм,Держикраєві,Держикраю'), $this->object->q('Держикрай'));
    }
    public function testCrazy178()
    { 
        $this->assertEquals(explode(',','Держислав,Держислава,Держиславові,Держислава,Держиславом,Держиславові,Держиславе'), $this->object->q('Держислав'));
    }
    public function testCrazy179()
    { 
        $this->assertEquals(explode(',','Дибач,Дибача,Дибачеві,Дибача,Дибачем,Дибачеві,Дибаче'), $this->object->q('Дибач'));
    }
    public function testCrazy180()
    { 
        $this->assertEquals(explode(',','Дивозір,Дивозора,Дивозорові,Дивозора,Дивозором,Дивозорові,Дивозоре'), $this->object->q('Дивозір'));
    }
    public function testCrazy181()
    { 
        $this->assertEquals(explode(',','Дій,Дія,Дієві,Дія,Дієм,Дієві,Дію'), $this->object->q('Дій'));
    }
    public function testCrazy182()
    { 
        $this->assertEquals(explode(',','Добрибій,Добрибія,Добрибієві,Добрибія,Добрибієм,Добрибієві,Добрибію'), $this->object->q('Добрибій'));
    }
    public function testCrazy183()
    { 
        $this->assertEquals(explode(',','Добривод,Добривода,Добриводові,Добривода,Добриводом,Добриводові,Добриводе'), $this->object->q('Добривод'));
    }
    public function testCrazy184()
    { 
        $this->assertEquals(explode(',','Добрик,Добрика,Добрикові,Добрика,Добриком,Добрикові,Добриче'), $this->object->q('Добрик'));
    }
    public function testCrazy185()
    { 
        $this->assertEquals(explode(',','Добрило,Добрила,Добрилові,Добрила,Добрилом,Добрилові,Добриле'), $this->object->q('Добрило'));
    }
    public function testCrazy186()
    { 
        $this->assertEquals(explode(',','Добриня,Добрині,Добрині,Добриню,Добринею,Добрині,Добрине'), $this->object->q('Добриня'));
    }
    public function testCrazy187()
    { 
        $this->assertEquals(explode(',','Добрисвіт,Добрисвіта,Добрисвітові,Добрисвіта,Добрисвітом,Добрисвітові,Добрисвіте'), $this->object->q('Добрисвіт'));
    }
    public function testCrazy188()
    { 
        $this->assertEquals(explode(',','Добровіст,Добровіста,Добровістові,Добровіста,Добровістом,Добровістові,Добровісте'), $this->object->q('Добровіст'));
    }
    public function testCrazy189()
    { 
        $this->assertEquals(explode(',','Доброгост,Доброгоста,Доброгостові,Доброгоста,Доброгостом,Доброгостові,Доброгосте'), $this->object->q('Доброгост'));
    }
    public function testCrazy190()
    { 
        $this->assertEquals(explode(',','Добродум,Добродума,Добродумові,Добродума,Добродумом,Добродумові,Добродуме'), $this->object->q('Добродум'));
    }
    public function testCrazy191()
    { 
        $this->assertEquals(explode(',','Добролик,Добролика,Доброликові,Добролика,Доброликом,Доброликові,Доброличе'), $this->object->q('Добролик'));
    }
    public function testCrazy192()
    { 
        $this->assertEquals(explode(',','Добролюб,Добролюба,Добролюбові,Добролюба,Добролюбом,Добролюбові,Добролюбе'), $this->object->q('Добролюб'));
    }
    public function testCrazy193()
    { 
        $this->assertEquals(explode(',','Добромил,Добромила,Добромилові,Добромила,Добромилом,Добромилові,Добромиле'), $this->object->q('Добромил'));
    }
    public function testCrazy194()
    { 
        $this->assertEquals(explode(',','Добромир,Добромира,Добромирові,Добромира,Добромиром,Добромирові,Добромире'), $this->object->q('Добромир'));
    }
    public function testCrazy195()
    { 
        $this->assertEquals(explode(',','Добромисл,Добромисла,Добромислові,Добромисла,Добромислом,Добромислові,Добромисле'), $this->object->q('Добромисл'));
    }
    public function testCrazy196()
    { 
        $this->assertEquals(explode(',','Доброслав,Доброслава,Доброславові,Доброслава,Доброславом,Доброславові,Доброславе'), $this->object->q('Доброслав'));
    }
    public function testCrazy197()
    { 
        $this->assertEquals(explode(',','Доморад,Доморада,Доморадові,Доморада,Доморадом,Доморадові,Домораде'), $this->object->q('Доморад'));
    }
    public function testCrazy198()
    { 
        $this->assertEquals(explode(',','Домослав,Домослава,Домославові,Домослава,Домославом,Домославові,Домославе'), $this->object->q('Домослав'));
    }
    public function testCrazy199()
    { 
        $this->assertEquals(explode(',','Дорогобуг,Дорогобуга,Дорогобугові,Дорогобуга,Дорогобугом,Дорогобугові,Дорогобуже'), $this->object->q('Дорогобуг'));
    }
    public function testCrazy200()
    { 
        $this->assertEquals(explode(',','Дорогомир,Дорогомира,Дорогомирові,Дорогомира,Дорогомиром,Дорогомирові,Дорогомире'), $this->object->q('Дорогомир'));
    }
    public function testCrazy201()
    { 
        $this->assertEquals(explode(',','Дорогомисл,Дорогомисла,Дорогомислові,Дорогомисла,Дорогомислом,Дорогомислові,Дорогомисле'), $this->object->q('Дорогомисл'));
    }
    public function testCrazy202()
    { 
        $this->assertEquals(explode(',','Дорогосил,Дорогосила,Дорогосилові,Дорогосила,Дорогосилом,Дорогосилові,Дорогосиле'), $this->object->q('Дорогосил'));
    }
    public function testCrazy203()
    { 
        $this->assertEquals(explode(',','Дорогочин,Дорогочина,Дорогочинові,Дорогочина,Дорогочином,Дорогочинові,Дорогочине'), $this->object->q('Дорогочин'));
    }
    public function testCrazy204()
    { 
        $this->assertEquals(explode(',','Драган,Драгана,Драганові,Драгана,Драганом,Драганові,Драгане'), $this->object->q('Драган'));
    }
    public function testCrazy205()
    { 
        $this->assertEquals(explode(',','Дружелюб,Дружелюба,Дружелюбові,Дружелюба,Дружелюбом,Дружелюбові,Дружелюбе'), $this->object->q('Дружелюб'));
    }
    public function testCrazy206()
    { 
        $this->assertEquals(explode(',','Жадан,Жадана,Жаданові,Жадана,Жаданом,Жаданові,Жадане'), $this->object->q('Жадан'));
    }
    public function testCrazy207()
    { 
        $this->assertEquals(explode(',','Ждан,Ждана,Жданові,Ждана,Жданом,Жданові,Ждане'), $this->object->q('Ждан'));
    }
    public function testCrazy208()
    { 
        $this->assertEquals(explode(',','Живорід,Живорода,Живородові,Живорода,Живородом,Живородові,Живороде'), $this->object->q('Живорід'));
    }
    public function testCrazy209()
    { 
        $this->assertEquals(explode(',','Живосил,Живосила,Живосилові,Живосила,Живосилом,Живосилові,Живосиле'), $this->object->q('Живосил'));
    }
    public function testCrazy210()
    { 
        $this->assertEquals(explode(',','Живослав,Живослава,Живославові,Живослава,Живославом,Живославові,Живославе'), $this->object->q('Живослав'));
    }
    public function testCrazy211()
    { 
        $this->assertEquals(explode(',','Житомир,Житомира,Житомирові,Житомира,Житомиром,Житомирові,Житомире'), $this->object->q('Житомир'));
    }
    public function testCrazy212()
    { 
        $this->assertEquals(explode(',','Життєлюб,Життєлюба,Життєлюбові,Життєлюба,Життєлюбом,Життєлюбові,Життєлюбе'), $this->object->q('Життєлюб'));
    }
    public function testCrazy213()
    { 
        $this->assertEquals(explode(',','Збоїслав,Збоїслава,Збоїславові,Збоїслава,Збоїславом,Збоїславові,Збоїславе'), $this->object->q('Збоїслав'));
    }
    public function testCrazy214()
    { 
        $this->assertEquals(explode(',','Зборислав,Зборислава,Збориславові,Зборислава,Збориславом,Збориславові,Збориславе'), $this->object->q('Зборислав'));
    }
    public function testCrazy215()
    { 
        $this->assertEquals(explode(',','Звенигор,Звенигора,Звенигорові,Звенигора,Звенигором,Звенигорові,Звенигоре'), $this->object->q('Звенигор'));
    }
    public function testCrazy216()
    { 
        $this->assertEquals(explode(',','Звенимир,Звенимира,Звенимирові,Звенимира,Звенимиром,Звенимирові,Звенимире'), $this->object->q('Звенимир'));
    }
    public function testCrazy217()
    { 
        $this->assertEquals(explode(',','Звенислав,Звенислава,Звениславові,Звенислава,Звениславом,Звениславові,Звениславе'), $this->object->q('Звенислав'));
    }
    public function testCrazy218()
    { 
        $this->assertEquals(explode(',','Здоровега,Здоровеги,Здоровезі,Здоровегу,Здоровегою,Здоровезі,Здоровего'), $this->object->q('Здоровега'));
    }
    public function testCrazy219()
    { 
        $this->assertEquals(explode(',','Земислав,Земислава,Земиславові,Земислава,Земиславом,Земиславові,Земиславе'), $this->object->q('Земислав'));
    }
    public function testCrazy220()
    { 
        $this->assertEquals(explode(',','Зеновій,Зеновія,Зеновієві,Зеновія,Зеновієм,Зеновієві,Зеновію'), $this->object->q('Зеновій'));
    }
    public function testCrazy221()
    { 
        $this->assertEquals(explode(',','Зіновій,Зіновія,Зіновієві,Зіновія,Зіновієм,Зіновієві,Зіновію'), $this->object->q('Зіновій'));
    }
    public function testCrazy222()
    { 
        $this->assertEquals(explode(',','Зиновій,Зиновія,Зиновієві,Зиновія,Зиновієм,Зиновієві,Зиновію'), $this->object->q('Зиновій'));
    }
    public function testCrazy223()
    { 
        $this->assertEquals(explode(',','Злат,Злата,Златові,Злата,Златом,Златові,Злате'), $this->object->q('Злат'));
    }
    public function testCrazy224()
    { 
        $this->assertEquals(explode(',','Златомир,Златомира,Златомирові,Златомира,Златомиром,Златомирові,Златомире'), $this->object->q('Златомир'));
    }
    public function testCrazy225()
    { 
        $this->assertEquals(explode(',','Златоус,Златоуса,Златоусові,Златоуса,Златоусом,Златоусові,Златоусе'), $this->object->q('Златоус'));
    }
    public function testCrazy226()
    { 
        $this->assertEquals(explode(',','Златодан,Златодана,Златоданові,Златодана,Златоданом,Златоданові,Златодане'), $this->object->q('Златодан'));
    }
    public function testCrazy227()
    { 
        $this->assertEquals(explode(',','Злотан,Злотана,Злотанові,Злотана,Злотаном,Злотанові,Злотане'), $this->object->q('Злотан'));
    }
    public function testCrazy228()
    { 
        $this->assertEquals(explode(',','Злотодан,Злотодана,Злотоданові,Злотодана,Злотоданом,Злотоданові,Злотодане'), $this->object->q('Злотодан'));
    }
    public function testCrazy229()
    { 
        $this->assertEquals(explode(',','Зорегляд,Зорегляда,Зореглядові,Зорегляда,Зореглядом,Зореглядові,Зорегляде'), $this->object->q('Зорегляд'));
    }
    public function testCrazy230()
    { 
        $this->assertEquals(explode(',','Зоремир,Зоремира,Зоремирові,Зоремира,Зоремиром,Зоремирові,Зоремире'), $this->object->q('Зоремир'));
    }
    public function testCrazy231()
    { 
        $this->assertEquals(explode(',','Зорепад,Зорепада,Зорепадові,Зорепада,Зорепадом,Зорепадові,Зорепаде'), $this->object->q('Зорепад'));
    }
    public function testCrazy232()
    { 
        $this->assertEquals(explode(',','Зореслав,Зореслава,Зореславові,Зореслава,Зореславом,Зореславові,Зореславе'), $this->object->q('Зореслав'));
    }
    public function testCrazy233()
    { 
        $this->assertEquals(explode(',','Зорян,Зоряна,Зорянові,Зоряна,Зоряном,Зорянові,Зоряне'), $this->object->q('Зорян'));
    }
    public function testCrazy234()
    { 
        $this->assertEquals(explode(',','Ізяслав,Ізяслава,Ізяславові,Ізяслава,Ізяславом,Ізяславові,Ізяславе'), $this->object->q('Ізяслав'));
    }
    public function testCrazy235()
    { 
        $this->assertEquals(explode(',','Ігор,Ігоря,Ігореві,Ігоря,Ігорем,Ігореві,Ігоре'), $this->object->q('Ігор'));
    }
    public function testCrazy236()
    { 
        $this->assertEquals(explode(',','Іван,Івана,Іванові,Івана,Іваном,Іванові,Іване'), $this->object->q('Іван'));
    }
    public function testCrazy237()
    { 
        $this->assertEquals(explode(',','Квітан,Квітана,Квітанові,Квітана,Квітаном,Квітанові,Квітане'), $this->object->q('Квітан'));
    }
    public function testCrazy238()
    { 
        $this->assertEquals(explode(',','Києслав,Києслава,Києславові,Києслава,Києславом,Києславові,Києславе'), $this->object->q('Києслав'));
    }
    public function testCrazy239()
    { 
        $this->assertEquals(explode(',','Кий,Кия,Києві,Кия,Києм,Києві,Кию'), $this->object->q('Кий'));
    }
    public function testCrazy240()
    { 
        $this->assertEquals(explode(',','Кирило,Кирила,Кирилові,Кирила,Кирилом,Кирилові,Кириле'), $this->object->q('Кирило'));
    }
    public function testCrazy241()
    { 
        $this->assertEquals(explode(',','Киян,Кияна,Киянові,Кияна,Кияном,Киянові,Кияне'), $this->object->q('Киян'));
    }
    public function testCrazy242()
    { 
        $this->assertEquals(explode(',','Княжослав,Княжослава,Княжославові,Княжослава,Княжославом,Княжославові,Княжославе'), $this->object->q('Княжослав'));
    }
    public function testCrazy243()
    { 
        $this->assertEquals(explode(',','Корній,Корнія,Корнієві,Корнія,Корнієм,Корнієві,Корнію'), $this->object->q('Корній'));
    }
    public function testCrazy244()
    { 
        $this->assertEquals(explode(',','Колодар,Колодара,Колодарові,Колодара,Колодаром,Колодарові,Колодаре'), $this->object->q('Колодар'));
    }
    public function testCrazy245()
    { 
        $this->assertEquals(explode(',','Колодій,Колодія,Колодієві,Колодія,Колодієм,Колодієві,Колодію'), $this->object->q('Колодій'));
    }
    public function testCrazy246()
    { 
        $this->assertEquals(explode(',','Косак,Косака,Косакові,Косака,Косаком,Косакові,Косаче'), $this->object->q('Косак'));
    }
    public function testCrazy247()
    { 
        $this->assertEquals(explode(',','Красун,Красуна,Красунові,Красуна,Красуном,Красунові,Красуне'), $this->object->q('Красун'));
    }
    public function testCrazy248()
    { 
        $this->assertEquals(explode(',','Крилач,Крилача,Крилачеві,Крилача,Крилачем,Крилачеві,Крилаче'), $this->object->q('Крилач'));
    }
    public function testCrazy249()
    { 
        $this->assertEquals(explode(',','Куйбіда,Куйбіди,Куйбіді,Куйбіду,Куйбідою,Куйбіді,Куйбідо'), $this->object->q('Куйбіда'));
    }
    public function testCrazy250()
    { 
        $this->assertEquals(explode(',','Курило,Курила,Курилові,Курила,Курилом,Курилові,Куриле'), $this->object->q('Курило'));
    }
    public function testCrazy251()
    { 
        $this->assertEquals(explode(',','Лад,Лада,Ладові,Лада,Ладом,Ладові,Ладе'), $this->object->q('Лад'));
    }
    public function testCrazy252()
    { 
        $this->assertEquals(explode(',','Ладимир,Ладимира,Ладимирові,Ладимира,Ладимиром,Ладимирові,Ладимире'), $this->object->q('Ладимир'));
    }
    public function testCrazy253()
    { 
        $this->assertEquals(explode(',','Ладислав,Ладислава,Ладиславові,Ладислава,Ладиславом,Ладиславові,Ладиславе'), $this->object->q('Ладислав'));
    }
    public function testCrazy254()
    { 
        $this->assertEquals(explode(',','Ладолюб,Ладолюба,Ладолюбові,Ладолюба,Ладолюбом,Ладолюбові,Ладолюбе'), $this->object->q('Ладолюб'));
    }
    public function testCrazy255()
    { 
        $this->assertEquals(explode(',','Ладомир,Ладомира,Ладомирові,Ладомира,Ладомиром,Ладомирові,Ладомире'), $this->object->q('Ладомир'));
    }
    public function testCrazy256()
    { 
        $this->assertEquals(explode(',','Лев,Лева,Левові,Лева,Левом,Левові,Леве'), $this->object->q('Лев'));
    }
    public function testCrazy257()
    { 
        $this->assertEquals(explode(',','Левко,Левка,Левкові,Левка,Левком,Левкові,Левче'), $this->object->q('Левко'));
    }
    public function testCrazy258()
    { 
        $this->assertEquals(explode(',','Листвич,Листвича,Листвичеві,Листвича,Листвичем,Листвичеві,Листвиче'), $this->object->q('Листвич'));
    }
    public function testCrazy259()
    { 
        $this->assertEquals(explode(',','Ліпослав,Ліпослава,Ліпославові,Ліпослава,Ліпославом,Ліпославові,Ліпославе'), $this->object->q('Ліпослав'));
    }
    public function testCrazy260()
    { 
        $this->assertEquals(explode(',','Лоліт,Лолота,Лолотові,Лолота,Лолотом,Лолотові,Лолоте'), $this->object->q('Лоліт'));
    }
    public function testCrazy261()
    { 
        $this->assertEquals(explode(',','Любим,Любима,Любимові,Любима,Любимом,Любимові,Любиме'), $this->object->q('Любим'));
    }
    public function testCrazy262()
    { 
        $this->assertEquals(explode(',','Любовир,Любовира,Любовирові,Любовира,Любовиром,Любовирові,Любовире'), $this->object->q('Любовир'));
    }
    public function testCrazy263()
    { 
        $this->assertEquals(explode(',','Любодар,Любодара,Любодарові,Любодара,Любодаром,Любодарові,Любодаре'), $this->object->q('Любодар'));
    }
    public function testCrazy264()
    { 
        $this->assertEquals(explode(',','Любозар,Любозара,Любозарові,Любозара,Любозаром,Любозарові,Любозаре'), $this->object->q('Любозар'));
    }
    public function testCrazy265()
    { 
        $this->assertEquals(explode(',','Любомил,Любомила,Любомилові,Любомила,Любомилом,Любомилові,Любомиле'), $this->object->q('Любомил'));
    }
    public function testCrazy266()
    { 
        $this->assertEquals(explode(',','Любомир,Любомира,Любомирові,Любомира,Любомиром,Любомирові,Любомире'), $this->object->q('Любомир'));
    }
    public function testCrazy267()
    { 
        $this->assertEquals(explode(',','Любомисл,Любомисла,Любомислові,Любомисла,Любомислом,Любомислові,Любомисле'), $this->object->q('Любомисл'));
    }
    public function testCrazy268()
    { 
        $this->assertEquals(explode(',','Любомудр,Любомудра,Любомудрові,Любомудра,Любомудром,Любомудрові,Любомудре'), $this->object->q('Любомудр'));
    }
    public function testCrazy269()
    { 
        $this->assertEquals(explode(',','Любослав,Любослава,Любославові,Любослава,Любославом,Любославові,Любославе'), $this->object->q('Любослав'));
    }
    public function testCrazy270()
    { 
        $this->assertEquals(explode(',','Людомил,Людомила,Людомилові,Людомила,Людомилом,Людомилові,Людомиле'), $this->object->q('Людомил'));
    }
    public function testCrazy271()
    { 
        $this->assertEquals(explode(',','Людомир,Людомира,Людомирові,Людомира,Людомиром,Людомирові,Людомире'), $this->object->q('Людомир'));
    }
    public function testCrazy272()
    { 
        $this->assertEquals(explode(',','Людислав,Людислава,Людиславові,Людислава,Людиславом,Людиславові,Людиславе'), $this->object->q('Людислав'));
    }
    public function testCrazy273()
    { 
        $this->assertEquals(explode(',','Лютобор,Лютобора,Лютоборові,Лютобора,Лютобором,Лютоборові,Лютоборе'), $this->object->q('Лютобор'));
    }
    public function testCrazy274()
    { 
        $this->assertEquals(explode(',','Лютомисл,Лютомисла,Лютомислові,Лютомисла,Лютомислом,Лютомислові,Лютомисле'), $this->object->q('Лютомисл'));
    }
    public function testCrazy275()
    { 
        $this->assertEquals(explode(',','Магадар,Магадара,Магадарові,Магадара,Магадаром,Магадарові,Магадаре'), $this->object->q('Магадар'));
    }
    public function testCrazy276()
    { 
        $this->assertEquals(explode(',','Магамир,Магамира,Магамирові,Магамира,Магамиром,Магамирові,Магамире'), $this->object->q('Магамир'));
    }
    public function testCrazy277()
    { 
        $this->assertEquals(explode(',','Магаслав,Магаслава,Магаславові,Магаслава,Магаславом,Магаславові,Магаславе'), $this->object->q('Магаслав'));
    }
    public function testCrazy278()
    { 
        $this->assertEquals(explode(',','Маркіян,Маркіяна,Маркіянові,Маркіяна,Маркіяном,Маркіянові,Маркіяне'), $this->object->q('Маркіян'));
    }
    public function testCrazy279()
    { 
        $this->assertEquals(explode(',','Май,Мая,Маєві,Мая,Маєм,Маєві,Маю'), $this->object->q('Май'));
    }
    public function testCrazy280()
    { 
        $this->assertEquals(explode(',','Мал,Мала,Малові,Мала,Малом,Малові,Мале'), $this->object->q('Мал'));
    }
    public function testCrazy281()
    { 
        $this->assertEquals(explode(',','Малик,Малика,Маликові,Малика,Маликом,Маликові,Маличе'), $this->object->q('Малик'));
    }
    public function testCrazy282()
    { 
        $this->assertEquals(explode(',','Маломир,Маломира,Маломирові,Маломира,Маломиром,Маломирові,Маломире'), $this->object->q('Маломир'));
    }
    public function testCrazy283()
    { 
        $this->assertEquals(explode(',','Марко,Марка,Маркові,Марка,Марком,Маркові,Марче'), $this->object->q('Марко'));
    }
    public function testCrazy284()
    { 
        $this->assertEquals(explode(',','Медомир,Медомира,Медомирові,Медомира,Медомиром,Медомирові,Медомире'), $this->object->q('Медомир'));
    }
    public function testCrazy285()
    { 
        $this->assertEquals(explode(',','Межамир,Межамира,Межамирові,Межамира,Межамиром,Межамирові,Межамире'), $this->object->q('Межамир'));
    }
    public function testCrazy286()
    { 
        $this->assertEquals(explode(',','Мечислав,Мечислава,Мечиславові,Мечислава,Мечиславом,Мечиславові,Мечиславе'), $this->object->q('Мечислав'));
    }
    public function testCrazy287()
    { 
        $this->assertEquals(explode(',','Мизамир,Мизамира,Мизамирові,Мизамира,Мизамиром,Мизамирові,Мизамире'), $this->object->q('Мизамир'));
    }
    public function testCrazy288()
    { 
        $this->assertEquals(explode(',','Милан,Милана,Миланові,Милана,Миланом,Миланові,Милане'), $this->object->q('Милан'));
    }
    public function testCrazy289()
    { 
        $this->assertEquals(explode(',','Милован,Милована,Милованові,Милована,Милованом,Милованові,Миловане'), $this->object->q('Милован'));
    }
    public function testCrazy290()
    { 
        $this->assertEquals(explode(',','Милодар,Милодара,Милодарові,Милодара,Милодаром,Милодарові,Милодаре'), $this->object->q('Милодар'));
    }
    public function testCrazy291()
    { 
        $this->assertEquals(explode(',','Милодух,Милодуха,Милодухові,Милодуха,Милодухом,Милодухові,Милодухе'), $this->object->q('Милодух'));
    }
    public function testCrazy292()
    { 
        $this->assertEquals(explode(',','Милослав,Милослава,Милославові,Милослава,Милославом,Милославові,Милославе'), $this->object->q('Милослав'));
    }
    public function testCrazy293()
    { 
        $this->assertEquals(explode(',','Мир,Мира,Мирові,Мира,Миром,Мирові,Мире'), $this->object->q('Мир'));
    }
    public function testCrazy294()
    { 
        $this->assertEquals(explode(',','Миробог,Миробога,Миробогові,Миробога,Миробогом,Миробогові,Миробоже'), $this->object->q('Миробог'));
    }
    public function testCrazy295()
    { 
        $this->assertEquals(explode(',','Мирогост,Мирогоста,Мирогостові,Мирогоста,Мирогостом,Мирогостові,Мирогосте'), $this->object->q('Мирогост'));
    }
    public function testCrazy296()
    { 
        $this->assertEquals(explode(',','Миролюб,Миролюба,Миролюбові,Миролюба,Миролюбом,Миролюбові,Миролюбе'), $this->object->q('Миролюб'));
    }
    public function testCrazy297()
    { 
        $this->assertEquals(explode(',','Мирослав,Мирослава,Мирославові,Мирослава,Мирославом,Мирославові,Мирославе'), $this->object->q('Мирослав'));
    }
    public function testCrazy298()
    { 
        $this->assertEquals(explode(',','Мовчан,Мовчана,Мовчанові,Мовчана,Мовчаном,Мовчанові,Мовчане'), $this->object->q('Мовчан'));
    }
    public function testCrazy299()
    { 
        $this->assertEquals(explode(',','Молибог,Молибога,Молибогові,Молибога,Молибогом,Молибогові,Молибоже'), $this->object->q('Молибог'));
    }
    public function testCrazy300()
    { 
        $this->assertEquals(explode(',','Мстибог,Мстибога,Мстибогові,Мстибога,Мстибогом,Мстибогові,Мстибоже'), $this->object->q('Мстибог'));
    }
    public function testCrazy301()
    { 
        $this->assertEquals(explode(',','Мстивой,Мстивоя,Мстивоєві,Мстивоя,Мстивоєм,Мстивоєві,Мстивою'), $this->object->q('Мстивой'));
    }
    public function testCrazy302()
    { 
        $this->assertEquals(explode(',','Мстислав,Мстислава,Мстиславові,Мстислава,Мстиславом,Мстиславові,Мстиславе'), $this->object->q('Мстислав'));
    }
    public function testCrazy303()
    { 
        $this->assertEquals(explode(',','Мудролюб,Мудролюба,Мудролюбові,Мудролюба,Мудролюбом,Мудролюбові,Мудролюбе'), $this->object->q('Мудролюб'));
    }
    public function testCrazy304()
    { 
        $this->assertEquals(explode(',','Нагнибіда,Нагнибіди,Нагнибіді,Нагнибіду,Нагнибідою,Нагнибіді,Нагнибідо'), $this->object->q('Нагнибіда'));
    }
    public function testCrazy305()
    { 
        $this->assertEquals(explode(',','Надій,Надія,Надієві,Надія,Надієм,Надієві,Надію'), $this->object->q('Надій'));
    }
    public function testCrazy306()
    { 
        $this->assertEquals(explode(',','Найден,Найдена,Найденові,Найдена,Найденом,Найденові,Найдене'), $this->object->q('Найден'));
    }
    public function testCrazy307()
    { 
        $this->assertEquals(explode(',','Наслав,Наслава,Наславові,Наслава,Наславом,Наславові,Наславе'), $this->object->q('Наслав'));
    }
    public function testCrazy308()
    { 
        $this->assertEquals(explode(',','Недан,Недана,Неданові,Недана,Неданом,Неданові,Недане'), $this->object->q('Недан'));
    }
    public function testCrazy309()
    { 
        $this->assertEquals(explode(',','Немир,Немира,Немирові,Немира,Немиром,Немирові,Немире'), $this->object->q('Немир'));
    }
    public function testCrazy310()
    { 
        $this->assertEquals(explode(',','Непобор,Непобора,Непоборові,Непобора,Непобором,Непоборові,Непоборе'), $this->object->q('Непобор'));
    }
    public function testCrazy311()
    { 
        $this->assertEquals(explode(',','Нігослав,Нігослава,Нігославові,Нігослава,Нігославом,Нігославові,Нігославе'), $this->object->q('Нігослав'));
    }
    public function testCrazy312()
    { 
        $this->assertEquals(explode(',','Назар,Назара,Назарові,Назара,Назаром,Назарові,Назаре'), $this->object->q('Назар'));
    }
    public function testCrazy313()
    { 
        $this->assertEquals(explode(',','Одинець,Одинця,Одинцеві,Одинця,Одинцем,Одинцеві,Одинцю'), $this->object->q('Одинець'));
    }
    public function testCrazy314()
    { 
        $this->assertEquals(explode(',','Олег,Олега,Олегові,Олега,Олегом,Олегові,Олеже'), $this->object->q('Олег'));
    }
    public function testCrazy315()
    { 
        $this->assertEquals(explode(',','Олександр,Олександра,Олександрові,Олександра,Олександром,Олександрові,Олександре'), $this->object->q('Олександр'));
    }
    public function testCrazy316()
    { 
        $this->assertEquals(explode(',','Олексій,Олексія,Олексієві,Олексія,Олексієм,Олексієві,Олексію'), $this->object->q('Олексій'));
    }
    public function testCrazy317()
    { 
        $this->assertEquals(explode(',','Олесь,Олеся,Олесеві,Олеся,Олесем,Олесеві,Олесю'), $this->object->q('Олесь'));
    }
    public function testCrazy318()
    { 
        $this->assertEquals(explode(',','Олелько,Олелька,Олелькові,Олелька,Олельком,Олелькові,Олельче'), $this->object->q('Олелько'));
    }
    public function testCrazy319()
    { 
        $this->assertEquals(explode(',','Орел,Орла,Орлові,Орла,Орлом,Орлові,Орле'), $this->object->q('Орел'));
    }
    public function testCrazy320()
    { 
        $this->assertEquals(explode(',','Орест,Орста,Орстові,Орста,Орстом,Орстові,Орсте'), $this->object->q('Орест'));
    }
    public function testCrazy321()
    { 
        $this->assertEquals(explode(',','Орь,Оря,Ореві,Оря,Орем,Ореві,Орю'), $this->object->q('Орь'));
    }
    public function testCrazy322()
    { 
        $this->assertEquals(explode(',','Оримир,Оримира,Оримирові,Оримира,Оримиром,Оримирові,Оримире'), $this->object->q('Оримир'));
    }
    public function testCrazy323()
    { 
        $this->assertEquals(explode(',','Осмомисл,Осмомисла,Осмомислові,Осмомисла,Осмомислом,Осмомислові,Осмомисле'), $this->object->q('Осмомисл'));
    }
    public function testCrazy324()
    { 
        $this->assertEquals(explode(',','Острозор,Острозора,Острозорові,Острозора,Острозором,Острозорові,Острозоре'), $this->object->q('Острозор'));
    }
    public function testCrazy325()
    { 
        $this->assertEquals(explode(',','Остромир,Остромира,Остромирові,Остромира,Остромиром,Остромирові,Остромире'), $this->object->q('Остромир'));
    }
    public function testCrazy326()
    { 
        $this->assertEquals(explode(',','Остромов,Остромова,Остромовові,Остромова,Остромовом,Остромовові,Остромове'), $this->object->q('Остромов'));
    }
    public function testCrazy327()
    { 
        $this->assertEquals(explode(',','Охрім,Охрома,Охромові,Охрома,Охромом,Охромові,Охроме'), $this->object->q('Охрім'));
    }
    public function testCrazy328()
    { 
        $this->assertEquals(explode(',','Павло,Павла,Павлові,Павла,Павлом,Павлові,Павле'), $this->object->q('Павло'));
    }
    public function testCrazy329()
    { 
        $this->assertEquals(explode(',','Первушко,Первушка,Первушкові,Первушка,Первушком,Первушкові,Первушче'), $this->object->q('Первушко'));
    }
    public function testCrazy330()
    { 
        $this->assertEquals(explode(',','Перелюб,Перелюба,Перелюбові,Перелюба,Перелюбом,Перелюбові,Перелюбе'), $this->object->q('Перелюб'));
    }
    public function testCrazy331()
    { 
        $this->assertEquals(explode(',','Перемил,Перемила,Перемилові,Перемила,Перемилом,Перемилові,Перемиле'), $this->object->q('Перемил'));
    }
    public function testCrazy332()
    { 
        $this->assertEquals(explode(',','Перемисл,Перемисла,Перемислові,Перемисла,Перемислом,Перемислові,Перемисле'), $this->object->q('Перемисл'));
    }
    public function testCrazy333()
    { 
        $this->assertEquals(explode(',','Пересвіт,Пересвіта,Пересвітові,Пересвіта,Пересвітом,Пересвітові,Пересвіте'), $this->object->q('Пересвіт'));
    }
    public function testCrazy334()
    { 
        $this->assertEquals(explode(',','Переяслав,Переяслава,Переяславові,Переяслава,Переяславом,Переяславові,Переяславе'), $this->object->q('Переяслав'));
    }
    public function testCrazy335()
    { 
        $this->assertEquals(explode(',','Першик,Першика,Першикові,Першика,Першиком,Першикові,Першиче'), $this->object->q('Першик'));
    }
    public function testCrazy336()
    { 
        $this->assertEquals(explode(',','Подолян,Подоляна,Подолянові,Подоляна,Подоляном,Подолянові,Подоляне'), $this->object->q('Подолян'));
    }
    public function testCrazy337()
    { 
        $this->assertEquals(explode(',','Позвізд,Позвізда,Позвіздові,Позвізда,Позвіздом,Позвіздові,Позвізде'), $this->object->q('Позвізд'));
    }
    public function testCrazy338()
    { 
        $this->assertEquals(explode(',','Полель,Полеля,Полелеві,Полеля,Полелем,Полелеві,Полелю'), $this->object->q('Полель'));
    }
    public function testCrazy339()
    { 
        $this->assertEquals(explode(',','Полян,Поляна,Полянові,Поляна,Поляном,Полянові,Поляне'), $this->object->q('Полян'));
    }
    public function testCrazy340()
    { 
        $this->assertEquals(explode(',','Пребислав,Пребислава,Пребиславові,Пребислава,Пребиславом,Пребиславові,Пребиславе'), $this->object->q('Пребислав'));
    }
    public function testCrazy341()
    { 
        $this->assertEquals(explode(',','Предислав,Предислава,Предиславові,Предислава,Предиславом,Предиславові,Предиславе'), $this->object->q('Предислав'));
    }
    public function testCrazy342()
    { 
        $this->assertEquals(explode(',','Пугач,Пугача,Пугачеві,Пугача,Пугачем,Пугачеві,Пугаче'), $this->object->q('Пугач'));
    }
    public function testCrazy343()
    { 
        $this->assertEquals(explode(',','Путило,Путила,Путилові,Путила,Путилом,Путилові,Путиле'), $this->object->q('Путило'));
    }
    public function testCrazy344()
    { 
        $this->assertEquals(explode(',','Путята,Путяти,Путяті,Путяту,Путятою,Путяті,Путято'), $this->object->q('Путята'));
    }
    public function testCrazy345()
    { 
        $this->assertEquals(explode(',','Рава,Рави,Раві,Раву,Равою,Раві,Раво'), $this->object->q('Рава'));
    }
    public function testCrazy346()
    { 
        $this->assertEquals(explode(',','Рад,Рада,Радові,Рада,Радом,Радові,Раде'), $this->object->q('Рад'));
    }
    public function testCrazy347()
    { 
        $this->assertEquals(explode(',','Радечко,Радечка,Радечкові,Радечка,Радечком,Радечкові,Радечче'), $this->object->q('Радечко'));
    }
    public function testCrazy348()
    { 
        $this->assertEquals(explode(',','Радивой,Радивоя,Радивоєві,Радивоя,Радивоєм,Радивоєві,Радивою'), $this->object->q('Радивой'));
    }
    public function testCrazy349()
    { 
        $this->assertEquals(explode(',','Радило,Радила,Радилові,Радила,Радилом,Радилові,Радиле'), $this->object->q('Радило'));
    }
    public function testCrazy350()
    { 
        $this->assertEquals(explode(',','Радим,Радима,Радимові,Радима,Радимом,Радимові,Радиме'), $this->object->q('Радим'));
    }
    public function testCrazy351()
    { 
        $this->assertEquals(explode(',','Радимир,Радимира,Радимирові,Радимира,Радимиром,Радимирові,Радимире'), $this->object->q('Радимир'));
    }
    public function testCrazy352()
    { 
        $this->assertEquals(explode(',','Радислав,Радислава,Радиславові,Радислава,Радиславом,Радиславові,Радиславе'), $this->object->q('Радислав'));
    }
    public function testCrazy353()
    { 
        $this->assertEquals(explode(',','Радко,Радка,Радкові,Радка,Радком,Радкові,Радче'), $this->object->q('Радко'));
    }
    public function testCrazy354()
    { 
        $this->assertEquals(explode(',','Радован,Радована,Радованові,Радована,Радованом,Радованові,Радоване'), $this->object->q('Радован'));
    }
    public function testCrazy355()
    { 
        $this->assertEquals(explode(',','Радогост,Радогоста,Радогостові,Радогоста,Радогостом,Радогостові,Радогосте'), $this->object->q('Радогост'));
    }
    public function testCrazy356()
    { 
        $this->assertEquals(explode(',','Радомир,Радомира,Радомирові,Радомира,Радомиром,Радомирові,Радомире'), $this->object->q('Радомир'));
    }
    public function testCrazy357()
    { 
        $this->assertEquals(explode(',','Радомисл,Радомисла,Радомислові,Радомисла,Радомислом,Радомислові,Радомисле'), $this->object->q('Радомисл'));
    }
    public function testCrazy358()
    { 
        $this->assertEquals(explode(',','Радослав,Радослава,Радославові,Радослава,Радославом,Радославові,Радославе'), $this->object->q('Радослав'));
    }
    public function testCrazy359()
    { 
        $this->assertEquals(explode(',','Ратибор,Ратибора,Ратиборові,Ратибора,Ратибором,Ратиборові,Ратиборе'), $this->object->q('Ратибор'));
    }
    public function testCrazy360()
    { 
        $this->assertEquals(explode(',','Ратимир,Ратимира,Ратимирові,Ратимира,Ратимиром,Ратимирові,Ратимире'), $this->object->q('Ратимир'));
    }
    public function testCrazy361()
    { 
        $this->assertEquals(explode(',','Ратислав,Ратислава,Ратиславові,Ратислава,Ратиславом,Ратиславові,Ратиславе'), $this->object->q('Ратислав'));
    }
    public function testCrazy362()
    { 
        $this->assertEquals(explode(',','Ревун,Ревуна,Ревунові,Ревуна,Ревуном,Ревунові,Ревуне'), $this->object->q('Ревун'));
    }
    public function testCrazy363()
    { 
        $this->assertEquals(explode(',','Рід,Рода,Родові,Рода,Родом,Родові,Роде'), $this->object->q('Рід'));
    }
    public function testCrazy364()
    { 
        $this->assertEquals(explode(',','Рогволод,Рогволода,Рогволодові,Рогволода,Рогволодом,Рогволодові,Рогволоде'), $this->object->q('Рогволод'));
    }
    public function testCrazy365()
    { 
        $this->assertEquals(explode(',','Родан,Родана,Роданові,Родана,Роданом,Роданові,Родане'), $this->object->q('Родан'));
    }
    public function testCrazy366()
    { 
        $this->assertEquals(explode(',','Родослав,Родослава,Родославові,Родослава,Родославом,Родославові,Родославе'), $this->object->q('Родослав'));
    }
    public function testCrazy367()
    { 
        $this->assertEquals(explode(',','Рожден,Рождена,Рожденові,Рождена,Рожденом,Рожденові,Рождене'), $this->object->q('Рожден'));
    }
    public function testCrazy368()
    { 
        $this->assertEquals(explode(',','Розум,Розума,Розумові,Розума,Розумом,Розумові,Розуме'), $this->object->q('Розум'));
    }
    public function testCrazy369()
    { 
        $this->assertEquals(explode(',','Роксолан,Роксолана,Роксоланові,Роксолана,Роксоланом,Роксоланові,Роксолане'), $this->object->q('Роксолан'));
    }
    public function testCrazy370()
    { 
        $this->assertEquals(explode(',','Роман,Романа,Романові,Романа,Романом,Романові,Романе'), $this->object->q('Роман'));
    }
    public function testCrazy371()
    { 
        $this->assertEquals(explode(',','Ростислав,Ростислава,Ростиславові,Ростислава,Ростиславом,Ростиславові,Ростиславе'), $this->object->q('Ростислав'));
    }
    public function testCrazy372()
    { 
        $this->assertEquals(explode(',','Ростичар,Ростичара,Ростичарові,Ростичара,Ростичаром,Ростичарові,Ростичаре'), $this->object->q('Ростичар'));
    }
    public function testCrazy373()
    { 
        $this->assertEquals(explode(',','Ростун,Ростуна,Ростунові,Ростуна,Ростуном,Ростунові,Ростуне'), $this->object->q('Ростун'));
    }
    public function testCrazy374()
    { 
        $this->assertEquals(explode(',','Рудан,Рудана,Руданові,Рудана,Руданом,Руданові,Рудане'), $this->object->q('Рудан'));
    }
    public function testCrazy375()
    { 
        $this->assertEquals(explode(',','Рус,Руса,Русові,Руса,Русом,Русові,Русе'), $this->object->q('Рус'));
    }
    public function testCrazy376()
    { 
        $this->assertEquals(explode(',','Руслан,Руслана,Русланові,Руслана,Русланом,Русланові,Руслане'), $this->object->q('Руслан'));
    }
    public function testCrazy377()
    { 
        $this->assertEquals(explode(',','Русудан,Русудана,Русуданові,Русудана,Русуданом,Русуданові,Русудане'), $this->object->q('Русудан'));
    }
    public function testCrazy378()
    { 
        $this->assertEquals(explode(',','Сармат,Сармата,Сарматові,Сармата,Сарматом,Сарматові,Сармате'), $this->object->q('Сармат'));
    }
    public function testCrazy379()
    { 
        $this->assertEquals(explode(',','Сварг,Сварга,Сваргові,Сварга,Сваргом,Сваргові,Сварже'), $this->object->q('Сварг'));
    }
    public function testCrazy380()
    { 
        $this->assertEquals(explode(',','Сват,Свата,Сватові,Свата,Сватом,Сватові,Свате'), $this->object->q('Сват'));
    }
    public function testCrazy381()
    { 
        $this->assertEquals(explode(',','Світ,Світа,Світові,Світа,Світом,Світові,Світе'), $this->object->q('Світ'));
    }
    public function testCrazy382()
    { 
        $this->assertEquals(explode(',','Світлан,Світлана,Світланові,Світлана,Світланом,Світланові,Світлане'), $this->object->q('Світлан'));
    }
    public function testCrazy383()
    { 
        $this->assertEquals(explode(',','Світлогор,Світлогора,Світлогорові,Світлогора,Світлогором,Світлогорові,Світлогоре'), $this->object->q('Світлогор'));
    }
    public function testCrazy384()
    { 
        $this->assertEquals(explode(',','Світогор,Світогора,Світогорові,Світогора,Світогором,Світогорові,Світогоре'), $this->object->q('Світогор'));
    }
    public function testCrazy385()
    { 
        $this->assertEquals(explode(',','Світовид,Світовида,Світовидові,Світовида,Світовидом,Світовидові,Світовиде'), $this->object->q('Світовид'));
    }
    public function testCrazy386()
    { 
        $this->assertEquals(explode(',','Світодар,Світодара,Світодарові,Світодара,Світодаром,Світодарові,Світодаре'), $this->object->q('Світодар'));
    }
    public function testCrazy387()
    { 
        $this->assertEquals(explode(',','Світозар,Світозара,Світозарові,Світозара,Світозаром,Світозарові,Світозаре'), $this->object->q('Світозар'));
    }
    public function testCrazy388()
    { 
        $this->assertEquals(explode(',','Світокол,Світокола,Світоколові,Світокола,Світоколом,Світоколові,Світоколе'), $this->object->q('Світокол'));
    }
    public function testCrazy389()
    { 
        $this->assertEquals(explode(',','Світолик,Світолика,Світоликові,Світолика,Світоликом,Світоликові,Світоличе'), $this->object->q('Світолик'));
    }
    public function testCrazy390()
    { 
        $this->assertEquals(explode(',','Світолюб,Світолюба,Світолюбові,Світолюба,Світолюбом,Світолюбові,Світолюбе'), $this->object->q('Світолюб'));
    }
    public function testCrazy391()
    { 
        $this->assertEquals(explode(',','Світомир,Світомира,Світомирові,Світомира,Світомиром,Світомирові,Світомире'), $this->object->q('Світомир'));
    }
    public function testCrazy392()
    { 
        $this->assertEquals(explode(',','Світослав,Світослава,Світославові,Світослава,Світославом,Світославові,Світославе'), $this->object->q('Світослав'));
    }
    public function testCrazy393()
    { 
        $this->assertEquals(explode(',','Світояр,Світояра,Світоярові,Світояра,Світояром,Світоярові,Світояре'), $this->object->q('Світояр'));
    }
    public function testCrazy394()
    { 
        $this->assertEquals(explode(',','Свободан,Свободана,Свободанові,Свободана,Свободаном,Свободанові,Свободане'), $this->object->q('Свободан'));
    }
    public function testCrazy395()
    { 
        $this->assertEquals(explode(',','Святовид,Святовида,Святовидові,Святовида,Святовидом,Святовидові,Святовиде'), $this->object->q('Святовид'));
    }
    public function testCrazy396()
    { 
        $this->assertEquals(explode(',','Святогор,Святогора,Святогорові,Святогора,Святогором,Святогорові,Святогоре'), $this->object->q('Святогор'));
    }
    public function testCrazy397()
    { 
        $this->assertEquals(explode(',','Святолюб,Святолюба,Святолюбові,Святолюба,Святолюбом,Святолюбові,Святолюбе'), $this->object->q('Святолюб'));
    }
    public function testCrazy398()
    { 
        $this->assertEquals(explode(',','Святополк,Святополка,Святополкові,Святополка,Святополком,Святополкові,Святополче'), $this->object->q('Святополк'));
    }
    public function testCrazy399()
    { 
        $this->assertEquals(explode(',','Святослав,Святослава,Святославові,Святослава,Святославом,Святославові,Святославе'), $this->object->q('Святослав'));
    }
    public function testCrazy400()
    { 
        $this->assertEquals(explode(',','Семибор,Семибора,Семиборові,Семибора,Семибором,Семиборові,Семиборе'), $this->object->q('Семибор'));
    }
    public function testCrazy401()
    { 
        $this->assertEquals(explode(',','Семирад,Семирада,Семирадові,Семирада,Семирадом,Семирадові,Семираде'), $this->object->q('Семирад'));
    }
    public function testCrazy402()
    { 
        $this->assertEquals(explode(',','Сердитко,Сердитка,Сердиткові,Сердитка,Сердитком,Сердиткові,Сердитче'), $this->object->q('Сердитко'));
    }
    public function testCrazy403()
    { 
        $this->assertEquals(explode(',','Сила,Сили,Силі,Силу,Силою,Силі,Сило'), $this->object->q('Сила'));
    }
    public function testCrazy404()
    { 
        $this->assertEquals(explode(',','Силолюб,Силолюба,Силолюбові,Силолюба,Силолюбом,Силолюбові,Силолюбе'), $this->object->q('Силолюб'));
    }
    public function testCrazy405()
    { 
        $this->assertEquals(explode(',','Силослав,Силослава,Силославові,Силослава,Силославом,Силославові,Силославе'), $this->object->q('Силослав'));
    }
    public function testCrazy406()
    { 
        $this->assertEquals(explode(',','Синьоок,Синьоока,Синьоокові,Синьоока,Синьооком,Синьоокові,Синьооче'), $this->object->q('Синьоок'));
    }
    public function testCrazy407()
    { 
        $this->assertEquals(explode(',','Скол,Скола,Сколові,Скола,Сколом,Сколові,Сколе'), $this->object->q('Скол'));
    }
    public function testCrazy408()
    { 
        $this->assertEquals(explode(',','Слава,Слави,Славі,Славу,Славою,Славі,Славо'), $this->object->q('Слава'));
    }
    public function testCrazy409()
    { 
        $this->assertEquals(explode(',','Славобор,Славобора,Славоборові,Славобора,Славобором,Славоборові,Славоборе'), $this->object->q('Славобор'));
    }
    public function testCrazy410()
    { 
        $this->assertEquals(explode(',','Славолюб,Славолюба,Славолюбові,Славолюба,Славолюбом,Славолюбові,Славолюбе'), $this->object->q('Славолюб'));
    }
    public function testCrazy411()
    { 
        $this->assertEquals(explode(',','Славомир,Славомира,Славомирові,Славомира,Славомиром,Славомирові,Славомире'), $this->object->q('Славомир'));
    }
    public function testCrazy412()
    { 
        $this->assertEquals(explode(',','Славута,Славути,Славуті,Славуту,Славутою,Славуті,Славуто'), $this->object->q('Славута'));
    }
    public function testCrazy413()
    { 
        $this->assertEquals(explode(',','Снага,Снаги,Сназі,Снагу,Снагою,Сназі,Снаго'), $this->object->q('Снага'));
    }
    public function testCrazy414()
    { 
        $this->assertEquals(explode(',','Сніжан,Сніжана,Сніжанові,Сніжана,Сніжаном,Сніжанові,Сніжане'), $this->object->q('Сніжан'));
    }
    public function testCrazy415()
    { 
        $this->assertEquals(explode(',','Сновид,Сновида,Сновидові,Сновида,Сновидом,Сновидові,Сновиде'), $this->object->q('Сновид'));
    }
    public function testCrazy416()
    { 
        $this->assertEquals(explode(',','Снозір,Снозора,Снозорові,Снозора,Снозором,Снозорові,Снозоре'), $this->object->q('Снозір'));
    }
    public function testCrazy417()
    { 
        $this->assertEquals(explode(',','Собібор,Собібора,Собіборові,Собібора,Собібором,Собіборові,Собіборе'), $this->object->q('Собібор'));
    }
    public function testCrazy418()
    { 
        $this->assertEquals(explode(',','Собімир,Собімира,Собімирові,Собімира,Собімиром,Собімирові,Собімире'), $this->object->q('Собімир'));
    }
    public function testCrazy419()
    { 
        $this->assertEquals(explode(',','Собіслав,Собіслава,Собіславові,Собіслава,Собіславом,Собіславові,Собіславе'), $this->object->q('Собіслав'));
    }
    public function testCrazy420()
    { 
        $this->assertEquals(explode(',','Сокіл,Сокола,Соколові,Сокола,Соколом,Соколові,Соколе'), $this->object->q('Сокіл'));
    }
    public function testCrazy421()
    { 
        $this->assertEquals(explode(',','Соловей,Солов’я,Солов’єві,Солов’я,Солов’єм,Солов’єві,Солов’ю'), $this->object->q('Соловей'));
    }
    public function testCrazy422()
    { 
        $this->assertEquals(explode(',','Сологуб,Сологуба,Сологубові,Сологуба,Сологубом,Сологубові,Сологубе'), $this->object->q('Сологуб'));
    }
    public function testCrazy423()
    { 
        $this->assertEquals(explode(',','Сонцевид,Сонцевида,Сонцевидові,Сонцевида,Сонцевидом,Сонцевидові,Сонцевиде'), $this->object->q('Сонцевид'));
    }
    public function testCrazy424()
    { 
        $this->assertEquals(explode(',','Сонцедар,Сонцедара,Сонцедарові,Сонцедара,Сонцедаром,Сонцедарові,Сонцедаре'), $this->object->q('Сонцедар'));
    }
    public function testCrazy425()
    { 
        $this->assertEquals(explode(',','Сонцелик,Сонцелика,Сонцеликові,Сонцелика,Сонцеликом,Сонцеликові,Сонцеличе'), $this->object->q('Сонцелик'));
    }
    public function testCrazy426()
    { 
        $this->assertEquals(explode(',','Спас,Спаса,Спасові,Спаса,Спасом,Спасові,Спасе'), $this->object->q('Спас'));
    }
    public function testCrazy427()
    { 
        $this->assertEquals(explode(',','Станимир,Станимира,Станимирові,Станимира,Станимиром,Станимирові,Станимире'), $this->object->q('Станимир'));
    }
    public function testCrazy428()
    { 
        $this->assertEquals(explode(',','Станіслав,Станіслава,Станіславові,Станіслава,Станіславом,Станіславові,Станіславе'), $this->object->q('Станіслав'));
    }
    public function testCrazy429()
    { 
        $this->assertEquals(explode(',','Стародум,Стародума,Стародумові,Стародума,Стародумом,Стародумові,Стародуме'), $this->object->q('Стародум'));
    }
    public function testCrazy430()
    { 
        $this->assertEquals(explode(',','Степан,Степана,Степанові,Степана,Степаном,Степанові,Степане'), $this->object->q('Степан'));
    }
    public function testCrazy431()
    { 
        $this->assertEquals(explode(',','Стефаній,Стефанія,Стефанієві,Стефанія,Стефанієм,Стефанієві,Стефанію'), $this->object->q('Стефаній'));
    }
    public function testCrazy432()
    { 
        $this->assertEquals(explode(',','Стожар,Стожара,Стожарові,Стожара,Стожаром,Стожарові,Стожаре'), $this->object->q('Стожар'));
    }
    public function testCrazy433()
    { 
        $this->assertEquals(explode(',','Стоймир,Стоймира,Стоймирові,Стоймира,Стоймиром,Стоймирові,Стоймире'), $this->object->q('Стоймир'));
    }
    public function testCrazy434()
    { 
        $this->assertEquals(explode(',','Стоян,Стояна,Стоянові,Стояна,Стояном,Стоянові,Стояне'), $this->object->q('Стоян'));
    }
    public function testCrazy435()
    { 
        $this->assertEquals(explode(',','Судивой,Судивоя,Судивоєві,Судивоя,Судивоєм,Судивоєві,Судивою'), $this->object->q('Судивой'));
    }
    public function testCrazy436()
    { 
        $this->assertEquals(explode(',','Судимир,Судимира,Судимирові,Судимира,Судимиром,Судимирові,Судимире'), $this->object->q('Судимир'));
    }
    public function testCrazy437()
    { 
        $this->assertEquals(explode(',','Судислав,Судислава,Судиславові,Судислава,Судиславом,Судиславові,Судиславе'), $this->object->q('Судислав'));
    }
    public function testCrazy438()
    { 
        $this->assertEquals(explode(',','Сурма,Сурми,Сурмі,Сурму,Сурмою,Сурмі,Сурмо'), $this->object->q('Сурма'));
    }
    public function testCrazy439()
    { 
        $this->assertEquals(explode(',','Тарас,Тараса,Тарасові,Тараса,Тарасом,Тарасові,Тарасе'), $this->object->q('Тарас'));
    }
    public function testCrazy440()
    { 
        $this->assertEquals(explode(',','Татолюб,Татолюба,Татолюбові,Татолюба,Татолюбом,Татолюбові,Татолюбе'), $this->object->q('Татолюб'));
    }
    public function testCrazy441()
    { 
        $this->assertEquals(explode(',','Татомир,Татомира,Татомирові,Татомира,Татомиром,Татомирові,Татомире'), $this->object->q('Татомир'));
    }
    public function testCrazy442()
    { 
        $this->assertEquals(explode(',','Твердигост,Твердигоста,Твердигостові,Твердигоста,Твердигостом,Твердигостові,Твердигосте'), $this->object->q('Твердигост'));
    }
    public function testCrazy443()
    { 
        $this->assertEquals(explode(',','Твердислав,Твердислава,Твердиславові,Твердислава,Твердиславом,Твердиславові,Твердиславе'), $this->object->q('Твердислав'));
    }
    public function testCrazy444()
    { 
        $this->assertEquals(explode(',','Творилад,Творилада,Твориладові,Творилада,Твориладом,Твориладові,Твориладе'), $this->object->q('Творилад'));
    }
    public function testCrazy445()
    { 
        $this->assertEquals(explode(',','Творимир,Творимира,Творимирові,Творимира,Творимиром,Творимирові,Творимире'), $this->object->q('Творимир'));
    }
    public function testCrazy446()
    { 
        $this->assertEquals(explode(',','Творислав,Творислава,Твориславові,Творислава,Твориславом,Твориславові,Твориславе'), $this->object->q('Творислав'));
    }
    public function testCrazy447()
    { 
        $this->assertEquals(explode(',','Тихомир,Тихомира,Тихомирові,Тихомира,Тихомиром,Тихомирові,Тихомире'), $this->object->q('Тихомир'));
    }
    public function testCrazy448()
    { 
        $this->assertEquals(explode(',','Тихон,Тихона,Тихонові,Тихона,Тихоном,Тихонові,Тихоне'), $this->object->q('Тихон'));
    }
    public function testCrazy449()
    { 
        $this->assertEquals(explode(',','Толигнів,Толигнова,Толигновові,Толигнова,Толигновом,Толигновові,Толигнове'), $this->object->q('Толигнів'));
    }
    public function testCrazy450()
    { 
        $this->assertEquals(explode(',','Толислав,Толислава,Толиславові,Толислава,Толиславом,Толиславові,Толиславе'), $this->object->q('Толислав'));
    }
    public function testCrazy451()
    { 
        $this->assertEquals(explode(',','Тригост,Тригоста,Тригостові,Тригоста,Тригостом,Тригостові,Тригосте'), $this->object->q('Тригост'));
    }
    public function testCrazy452()
    { 
        $this->assertEquals(explode(',','Троян,Трояна,Троянові,Трояна,Трояном,Троянові,Трояне'), $this->object->q('Троян'));
    }
    public function testCrazy453()
    { 
        $this->assertEquals(explode(',','Триріг,Трирога,Трирогові,Трирога,Трирогом,Трирогові,Трироже'), $this->object->q('Триріг'));
    }
    public function testCrazy454()
    { 
        $this->assertEquals(explode(',','Тур,Тура,Турові,Тура,Туром,Турові,Туре'), $this->object->q('Тур'));
    }
    public function testCrazy455()
    { 
        $this->assertEquals(explode(',','Турбог,Турбога,Турбогові,Турбога,Турбогом,Турбогові,Турбоже'), $this->object->q('Турбог'));
    }
    public function testCrazy456()
    { 
        $this->assertEquals(explode(',','Турбрід,Турброда,Турбродові,Турброда,Турбродом,Турбродові,Турброде'), $this->object->q('Турбрід'));
    }
    public function testCrazy457()
    { 
        $this->assertEquals(explode(',','Уличан,Уличана,Уличанові,Уличана,Уличаном,Уличанові,Уличане'), $this->object->q('Уличан'));
    }
    public function testCrazy458()
    { 
        $this->assertEquals(explode(',','Ус,Уса,Усові,Уса,Усом,Усові,Усе'), $this->object->q('Ус'));
    }
    public function testCrazy459()
    { 
        $this->assertEquals(explode(',','Хвала,Хвали,Хвалі,Хвалу,Хвалою,Хвалі,Хвало'), $this->object->q('Хвала'));
    }
    public function testCrazy460()
    { 
        $this->assertEquals(explode(',','Хвалибог,Хвалибога,Хвалибогові,Хвалибога,Хвалибогом,Хвалибогові,Хвалибоже'), $this->object->q('Хвалибог'));
    }
    public function testCrazy461()
    { 
        $this->assertEquals(explode(',','Хвалимир,Хвалимира,Хвалимирові,Хвалимира,Хвалимиром,Хвалимирові,Хвалимире'), $this->object->q('Хвалимир'));
    }
    public function testCrazy462()
    { 
        $this->assertEquals(explode(',','Ходота,Ходоти,Ходоті,Ходоту,Ходотою,Ходоті,Ходото'), $this->object->q('Ходота'));
    }
    public function testCrazy463()
    { 
        $this->assertEquals(explode(',','Хорив,Хорива,Хоривові,Хорива,Хоривом,Хоривові,Хориве'), $this->object->q('Хорив'));
    }
    public function testCrazy464()
    { 
        $this->assertEquals(explode(',','Хорошко,Хорошка,Хорошкові,Хорошка,Хорошком,Хорошкові,Хорошче'), $this->object->q('Хорошко'));
    }
    public function testCrazy465()
    { 
        $this->assertEquals(explode(',','Хорошун,Хорошуна,Хорошунові,Хорошуна,Хорошуном,Хорошунові,Хорошуне'), $this->object->q('Хорошун'));
    }
    public function testCrazy466()
    { 
        $this->assertEquals(explode(',','Хотибор,Хотибора,Хотиборові,Хотибора,Хотибором,Хотиборові,Хотиборе'), $this->object->q('Хотибор'));
    }
    public function testCrazy467()
    { 
        $this->assertEquals(explode(',','Хотимир,Хотимира,Хотимирові,Хотимира,Хотимиром,Хотимирові,Хотимире'), $this->object->q('Хотимир'));
    }
    public function testCrazy468()
    { 
        $this->assertEquals(explode(',','Хотян,Хотяна,Хотянові,Хотяна,Хотяном,Хотянові,Хотяне'), $this->object->q('Хотян'));
    }
    public function testCrazy469()
    { 
        $this->assertEquals(explode(',','Хранимир,Хранимира,Хранимирові,Хранимира,Хранимиром,Хранимирові,Хранимире'), $this->object->q('Хранимир'));
    }
    public function testCrazy470()
    { 
        $this->assertEquals(explode(',','Худан,Худана,Худанові,Худана,Худаном,Худанові,Худане'), $this->object->q('Худан'));
    }
    public function testCrazy471()
    { 
        $this->assertEquals(explode(',','Царко,Царка,Царкові,Царка,Царком,Царкові,Царче'), $this->object->q('Царко'));
    }
    public function testCrazy472()
    { 
        $this->assertEquals(explode(',','Цвітан,Цвітана,Цвітанові,Цвітана,Цвітаном,Цвітанові,Цвітане'), $this->object->q('Цвітан'));
    }
    public function testCrazy473()
    { 
        $this->assertEquals(explode(',','Чара,Чари,Чарі,Чару,Чарою,Чарі,Чаро'), $this->object->q('Чара'));
    }
    public function testCrazy474()
    { 
        $this->assertEquals(explode(',','Чернин,Чернина,Чернинові,Чернина,Чернином,Чернинові,Чернине'), $this->object->q('Чернин'));
    }
    public function testCrazy475()
    { 
        $this->assertEquals(explode(',','Чеслав,Чеслава,Чеславові,Чеслава,Чеславом,Чеславові,Чеславе'), $this->object->q('Чеслав'));
    }
    public function testCrazy476()
    { 
        $this->assertEquals(explode(',','Чесмил,Чесмила,Чесмилові,Чесмила,Чесмилом,Чесмилові,Чесмиле'), $this->object->q('Чесмил'));
    }
    public function testCrazy477()
    { 
        $this->assertEquals(explode(',','Честислав,Честислава,Честиславові,Честислава,Честиславом,Честиславові,Честиславе'), $this->object->q('Честислав'));
    }
    public function testCrazy478()
    { 
        $this->assertEquals(explode(',','Чорновіл,Чорновола,Чорноволові,Чорновола,Чорноволом,Чорноволові,Чорноволе'), $this->object->q('Чорновіл'));
    }
    public function testCrazy479()
    { 
        $this->assertEquals(explode(',','Чорнота,Чорноти,Чорноті,Чорноту,Чорнотою,Чорноті,Чорното'), $this->object->q('Чорнота'));
    }
    public function testCrazy480()
    { 
        $this->assertEquals(explode(',','Чорнотур,Чорнотура,Чорнотурові,Чорнотура,Чорнотуром,Чорнотурові,Чорнотуре'), $this->object->q('Чорнотур'));
    }
    public function testCrazy481()
    { 
        $this->assertEquals(explode(',','Щастибог,Щастибога,Щастибогові,Щастибога,Щастибогом,Щастибогові,Щастибоже'), $this->object->q('Щастибог'));
    }
    public function testCrazy482()
    { 
        $this->assertEquals(explode(',','Щастислав,Щастислава,Щастиславові,Щастислава,Щастиславом,Щастиславові,Щастиславе'), $this->object->q('Щастислав'));
    }
    public function testCrazy483()
    { 
        $this->assertEquals(explode(',','Щедрогост,Щедрогоста,Щедрогостові,Щедрогоста,Щедрогостом,Щедрогостові,Щедрогосте'), $this->object->q('Щедрогост'));
    }
    public function testCrazy484()
    { 
        $this->assertEquals(explode(',','Щек,Щека,Щекові,Щека,Щеком,Щекові,Щече'), $this->object->q('Щек'));
    }
    public function testCrazy485()
    { 
        $this->assertEquals(explode(',','Юрій,Юрія,Юрієві,Юрія,Юрієм,Юрієві,Юрію'), $this->object->q('Юрій'));
    }
    public function testCrazy486()
    { 
        $this->assertEquals(explode(',','Юлій,Юлія,Юлієві,Юлія,Юлієм,Юлієві,Юлію'), $this->object->q('Юлій'));
    }
    public function testCrazy487()
    { 
        $this->assertEquals(explode(',','Ява,Яви,Яві,Яву,Явою,Яві,Яво'), $this->object->q('Ява'));
    }
    public function testCrazy488()
    { 
        $this->assertEquals(explode(',','Явір,Явора,Яворові,Явора,Явором,Яворові,Яворе'), $this->object->q('Явір'));
    }
    public function testCrazy489()
    { 
        $this->assertEquals(explode(',','Яволод,Яволода,Яволодові,Яволода,Яволодом,Яволодові,Яволоде'), $this->object->q('Яволод'));
    }
    public function testCrazy490()
    { 
        $this->assertEquals(explode(',','Яр,Яра,Ярові,Яра,Яром,Ярові,Яре'), $this->object->q('Яр'));
    }
    public function testCrazy491()
    { 
        $this->assertEquals(explode(',','Ярема,Яреми,Яремі,Ярему,Яремою,Яремі,Яремо'), $this->object->q('Ярема'));
    }
    public function testCrazy492()
    { 
        $this->assertEquals(explode(',','Ярило,Ярила,Ярилові,Ярила,Ярилом,Ярилові,Яриле'), $this->object->q('Ярило'));
    }
    public function testCrazy493()
    { 
        $this->assertEquals(explode(',','Яровид,Яровида,Яровидові,Яровида,Яровидом,Яровидові,Яровиде'), $this->object->q('Яровид'));
    }
    public function testCrazy494()
    { 
        $this->assertEquals(explode(',','Яровит,Яровита,Яровитові,Яровита,Яровитом,Яровитові,Яровите'), $this->object->q('Яровит'));
    }
    public function testCrazy495()
    { 
        $this->assertEquals(explode(',','Яромил,Яромила,Яромилові,Яромила,Яромилом,Яромилові,Яромиле'), $this->object->q('Яромил'));
    }
    public function testCrazy496()
    { 
        $this->assertEquals(explode(',','Яромир,Яромира,Яромирові,Яромира,Яромиром,Яромирові,Яромире'), $this->object->q('Яромир'));
    }
    public function testCrazy497()
    { 
        $this->assertEquals(explode(',','Яромисл,Яромисла,Яромислові,Яромисла,Яромислом,Яромислові,Яромисле'), $this->object->q('Яромисл'));
    }
    public function testCrazy498()
    { 
        $this->assertEquals(explode(',','Ярополк,Ярополка,Ярополкові,Ярополка,Ярополком,Ярополкові,Ярополче'), $this->object->q('Ярополк'));
    }
    public function testCrazy499()
    { 
        $this->assertEquals(explode(',','Яросвіт,Яросвіта,Яросвітові,Яросвіта,Яросвітом,Яросвітові,Яросвіте'), $this->object->q('Яросвіт'));
    }
    public function testCrazy500()
    { 
        $this->assertEquals(explode(',','Ярослав,Ярослава,Ярославові,Ярослава,Ярославом,Ярославові,Ярославе'), $this->object->q('Ярослав'));
    }
    public function testCrazy501()
    { 
        $this->assertEquals(explode(',','Ярош,Яроша,Ярошеві,Яроша,Ярошем,Ярошеві,Яроше'), $this->object->q('Ярош'));
    }
    public function testCrazy502()
    { 
        $this->assertEquals(explode(',','Яртур,Яртура,Яртурові,Яртура,Яртуром,Яртурові,Яртуре'), $this->object->q('Яртур'));
    }
    public function testCrazy503()
    { 
        $this->assertEquals(explode(',','Ярчик,Ярчика,Ярчикові,Ярчика,Ярчиком,Ярчикові,Ярчиче'), $this->object->q('Ярчик'));
    }
    public function testCrazy504()
    { 
        $this->assertEquals(explode(',','Ясен,Ясена,Ясенові,Ясена,Ясеном,Ясенові,Ясене'), $this->object->q('Ясен'));
    }
    public function testCrazy505()
    { 
        $this->assertEquals(explode(',','Ясновид,Ясновида,Ясновидові,Ясновида,Ясновидом,Ясновидові,Ясновиде'), $this->object->q('Ясновид'));
    }
    public function testCrazy506()
    { 
        $this->assertEquals(explode(',','Ясногор,Ясногора,Ясногорові,Ясногора,Ясногором,Ясногорові,Ясногоре'), $this->object->q('Ясногор'));
    }
    public function testCrazy507()
    { 
        $this->assertEquals(explode(',','Яснозір,Яснозора,Яснозорові,Яснозора,Яснозором,Яснозорові,Яснозоре'), $this->object->q('Яснозір'));
    }
    public function testCrazy508()
    { 
        $this->assertEquals(explode(',','Яснолик,Яснолика,Ясноликові,Яснолика,Ясноликом,Ясноликові,Ясноличе'), $this->object->q('Яснолик'));
    }

}