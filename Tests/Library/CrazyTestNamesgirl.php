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
        $this->assertEquals(explode(',','Августа,Августи,Августі,Августу,Августою,Августі,Августо'), $this->object->q('Августа'));
    }
    public function testCrazy1()
    { 
        $this->assertEquals(explode(',','Аврелія,Аврелії,Аврелії,Аврелію,Аврелією,Аврелії,Авреліє'), $this->object->q('Аврелія'));
    }
    public function testCrazy2()
    { 
        $this->assertEquals(explode(',','Аврора,Аврори,Аврорі,Аврору,Авророю,Аврорі,Авроро'), $this->object->q('Аврора'));
    }
    public function testCrazy3()
    { 
        $this->assertEquals(explode(',','Агнія,Агнії,Агнії,Агнію,Агнією,Агнії,Агніє'), $this->object->q('Агнія'));
    }
    public function testCrazy4()
    { 
        $this->assertEquals(explode(',','Агрипина,Агрипини,Агрипині,Агрипину,Агрипиною,Агрипині,Агрипино'), $this->object->q('Агрипина'));
    }
    public function testCrazy5()
    { 
        $this->assertEquals(explode(',','Ада,Ади,Аді,Аду,Адою,Аді,Адо'), $this->object->q('Ада'));
    }
    public function testCrazy6()
    { 
        $this->assertEquals(explode(',','Аделаїда,Аделаїди,Аделаїді,Аделаїду,Аделаїдою,Аделаїді,Аделаїдо'), $this->object->q('Аделаїда'));
    }
    public function testCrazy7()
    { 
        $this->assertEquals(explode(',','Адріана,Адріани,Адріані,Адріану,Адріаною,Адріані,Адріано'), $this->object->q('Адріана'));
    }
    public function testCrazy8()
    { 
        $this->assertEquals(explode(',','Аза,Ази,Азі,Азу,Азою,Азі,Азо'), $this->object->q('Аза'));
    }
    public function testCrazy9()
    { 
        $this->assertEquals(explode(',','Азалія,Азалії,Азалії,Азалію,Азалією,Азалії,Азаліє'), $this->object->q('Азалія'));
    }
    public function testCrazy10()
    { 
        $this->assertEquals(explode(',','Аліна,Аліни,Аліні,Аліну,Аліною,Аліні,Аліно'), $this->object->q('Аліна'));
    }
    public function testCrazy11()
    { 
        $this->assertEquals(explode(',','Аліса,Аліси,Алісі,Алісу,Алісою,Алісі,Алісо'), $this->object->q('Аліса'));
    }
    public function testCrazy12()
    { 
        $this->assertEquals(explode(',','Алла,Алли,Аллі,Аллу,Аллою,Аллі,Алло'), $this->object->q('Алла'));
    }
    public function testCrazy13()
    { 
        $this->assertEquals(explode(',','Альбертина,Альбертини,Альбертині,Альбертину,Альбертиною,Альбертині,Альбертино'), $this->object->q('Альбертина'));
    }
    public function testCrazy14()
    { 
        $this->assertEquals(explode(',','Альбіна,Альбіни,Альбіні,Альбіну,Альбіною,Альбіні,Альбіно'), $this->object->q('Альбіна'));
    }
    public function testCrazy15()
    { 
        $this->assertEquals(explode(',','Альвіна,Альвіни,Альвіні,Альвіну,Альвіною,Альвіні,Альвіно'), $this->object->q('Альвіна'));
    }
    public function testCrazy16()
    { 
        $this->assertEquals(explode(',','Анастасія,Анастасії,Анастасії,Анастасію,Анастасією,Анастасії,Анастасіє'), $this->object->q('Анастасія'));
    }
    public function testCrazy17()
    { 
        $this->assertEquals(explode(',','Ангеліна,Ангеліни,Ангеліні,Ангеліну,Ангеліною,Ангеліні,Ангеліно'), $this->object->q('Ангеліна'));
    }
    public function testCrazy18()
    { 
        $this->assertEquals(explode(',','Анжела,Анжели,Анжелі,Анжелу,Анжелою,Анжелі,Анжело'), $this->object->q('Анжела'));
    }
    public function testCrazy19()
    { 
        $this->assertEquals(explode(',','Антоніна,Антоніни,Антоніні,Антоніну,Антоніною,Антоніні,Антоніно'), $this->object->q('Антоніна'));
    }
    public function testCrazy20()
    { 
        $this->assertEquals(explode(',','Анфіса,Анфіси,Анфісі,Анфісу,Анфісою,Анфісі,Анфісо'), $this->object->q('Анфіса'));
    }
    public function testCrazy21()
    { 
        $this->assertEquals(explode(',','Аріадна,Аріадни,Аріадні,Аріадну,Аріадною,Аріадні,Аріадно'), $this->object->q('Аріадна'));
    }
    public function testCrazy22()
    { 
        $this->assertEquals(explode(',','Арсена,Арсени,Арсені,Арсену,Арсеною,Арсені,Арсено'), $this->object->q('Арсена'));
    }
    public function testCrazy23()
    { 
        $this->assertEquals(explode(',','Ася,Асі,Асі,Асю,Асею,Асі,Асе'), $this->object->q('Ася'));
    }
    public function testCrazy24()
    { 
        $this->assertEquals(explode(',','Афіна,Афіни,Афіні,Афіну,Афіною,Афіні,Афіно'), $this->object->q('Афіна'));
    }
    public function testCrazy25()
    { 
        $this->assertEquals(explode(',','Афродіта,Афродіти,Афродіті,Афродіту,Афродітою,Афродіті,Афродіто'), $this->object->q('Афродіта'));
    }
    public function testCrazy26()
    { 
        $this->assertEquals(explode(',','Бажана,Бажани,Бажані,Бажану,Бажаною,Бажані,Бажано'), $this->object->q('Бажана'));
    }
    public function testCrazy27()
    { 
        $this->assertEquals(explode(',','Берегиня,Берегині,Берегині,Берегиню,Берегинею,Берегині,Берегине'), $this->object->q('Берегиня'));
    }
    public function testCrazy28()
    { 
        $this->assertEquals(explode(',','Біловида,Біловиди,Біловиді,Біловиду,Біловидою,Біловиді,Біловидо'), $this->object->q('Біловида'));
    }
    public function testCrazy29()
    { 
        $this->assertEquals(explode(',','Біломира,Біломири,Біломирі,Біломиру,Біломирою,Біломирі,Біломиро'), $this->object->q('Біломира'));
    }
    public function testCrazy30()
    { 
        $this->assertEquals(explode(',','Білослава,Білослави,Білославі,Білославу,Білославою,Білославі,Білославо'), $this->object->q('Білослава'));
    }
    public function testCrazy31()
    { 
        $this->assertEquals(explode(',','Біляна,Біляни,Біляні,Біляну,Біляною,Біляні,Біляно'), $this->object->q('Біляна'));
    }
    public function testCrazy32()
    { 
        $this->assertEquals(explode(',','Благиня,Благині,Благині,Благиню,Благинею,Благині,Благине'), $this->object->q('Благиня'));
    }
    public function testCrazy33()
    { 
        $this->assertEquals(explode(',','Благовида,Благовиди,Благовиді,Благовиду,Благовидою,Благовиді,Благовидо'), $this->object->q('Благовида'));
    }
    public function testCrazy34()
    { 
        $this->assertEquals(explode(',','Благовіра,Благовіри,Благовірі,Благовіру,Благовірою,Благовірі,Благовіро'), $this->object->q('Благовіра'));
    }
    public function testCrazy35()
    { 
        $this->assertEquals(explode(',','Благовіста,Благовісти,Благовісті,Благовісту,Благовістою,Благовісті,Благовісто'), $this->object->q('Благовіста'));
    }
    public function testCrazy36()
    { 
        $this->assertEquals(explode(',','Благослава,Благослави,Благославі,Благославу,Благославою,Благославі,Благославо'), $this->object->q('Благослава'));
    }
    public function testCrazy37()
    { 
        $this->assertEquals(explode(',','Богдана,Богдани,Богдані,Богдану,Богданою,Богдані,Богдано'), $this->object->q('Богдана'));
    }
    public function testCrazy38()
    { 
        $this->assertEquals(explode(',','Боговіра,Боговіри,Боговірі,Боговіру,Боговірою,Боговірі,Боговіро'), $this->object->q('Боговіра'));
    }
    public function testCrazy39()
    { 
        $this->assertEquals(explode(',','Боговіста,Боговісти,Боговісті,Боговісту,Боговістою,Боговісті,Боговісто'), $this->object->q('Боговіста'));
    }
    public function testCrazy40()
    { 
        $this->assertEquals(explode(',','Богодара,Богодари,Богодарі,Богодару,Богодарою,Богодарі,Богодаро'), $this->object->q('Богодара'));
    }
    public function testCrazy41()
    { 
        $this->assertEquals(explode(',','Боголіпа,Боголіпи,Боголіпі,Боголіпу,Боголіпою,Боголіпі,Боголіпо'), $this->object->q('Боголіпа'));
    }
    public function testCrazy42()
    { 
        $this->assertEquals(explode(',','Боголюба,Боголюби,Боголюбі,Боголюбу,Боголюбою,Боголюбі,Боголюбо'), $this->object->q('Боголюба'));
    }
    public function testCrazy43()
    { 
        $this->assertEquals(explode(',','Богосвята,Богосвяти,Богосвяті,Богосвяту,Богосвятою,Богосвяті,Богосвято'), $this->object->q('Богосвята'));
    }
    public function testCrazy44()
    { 
        $this->assertEquals(explode(',','Богумила,Богумили,Богумилі,Богумилу,Богумилою,Богумилі,Богумило'), $this->object->q('Богумила'));
    }
    public function testCrazy45()
    { 
        $this->assertEquals(explode(',','Богумира,Богумири,Богумирі,Богумиру,Богумирою,Богумирі,Богумиро'), $this->object->q('Богумира'));
    }
    public function testCrazy46()
    { 
        $this->assertEquals(explode(',','Богуслава,Богуслави,Богуславі,Богуславу,Богуславою,Богуславі,Богуславо'), $this->object->q('Богуслава'));
    }
    public function testCrazy47()
    { 
        $this->assertEquals(explode(',','Божедана,Божедани,Божедані,Божедану,Божеданою,Божедані,Божедано'), $this->object->q('Божедана'));
    }
    public function testCrazy48()
    { 
        $this->assertEquals(explode(',','Божедара,Божедари,Божедарі,Божедару,Божедарою,Божедарі,Божедаро'), $this->object->q('Божедара'));
    }
    public function testCrazy49()
    { 
        $this->assertEquals(explode(',','Божемила,Божемили,Божемилі,Божемилу,Божемилою,Божемилі,Божемило'), $this->object->q('Божемила'));
    }
    public function testCrazy50()
    { 
        $this->assertEquals(explode(',','Божена,Божени,Божені,Божену,Боженою,Божені,Божено'), $this->object->q('Божена'));
    }
    public function testCrazy51()
    { 
        $this->assertEquals(explode(',','Божиця,Божиці,Божиці,Божицю,Божицею,Божиці,Божице'), $this->object->q('Божиця'));
    }
    public function testCrazy52()
    { 
        $this->assertEquals(explode(',','Болеслава,Болеслави,Болеславі,Болеславу,Болеславою,Болеславі,Болеславо'), $this->object->q('Болеслава'));
    }
    public function testCrazy53()
    { 
        $this->assertEquals(explode(',','Борислава,Борислави,Бориславі,Бориславу,Бориславою,Бориславі,Бориславо'), $this->object->q('Борислава'));
    }
    public function testCrazy54()
    { 
        $this->assertEquals(explode(',','Боронислава,Боронислави,Борониславі,Борониславу,Борониславою,Борониславі,Борониславо'), $this->object->q('Боронислава'));
    }
    public function testCrazy55()
    { 
        $this->assertEquals(explode(',','Братолюба,Братолюби,Братолюбі,Братолюбу,Братолюбою,Братолюбі,Братолюбо'), $this->object->q('Братолюба'));
    }
    public function testCrazy56()
    { 
        $this->assertEquals(explode(',','Братомила,Братомили,Братомилі,Братомилу,Братомилою,Братомилі,Братомило'), $this->object->q('Братомила'));
    }
    public function testCrazy57()
    { 
        $this->assertEquals(explode(',','Брячислава,Брячислави,Брячиславі,Брячиславу,Брячиславою,Брячиславі,Брячиславо'), $this->object->q('Брячислава'));
    }
    public function testCrazy58()
    { 
        $this->assertEquals(explode(',','Будана,Будани,Будані,Будану,Буданою,Будані,Будано'), $this->object->q('Будана'));
    }
    public function testCrazy59()
    { 
        $this->assertEquals(explode(',','Будимира,Будимири,Будимирі,Будимиру,Будимирою,Будимирі,Будимиро'), $this->object->q('Будимира'));
    }
    public function testCrazy60()
    { 
        $this->assertEquals(explode(',','Будислава,Будислави,Будиславі,Будиславу,Будиславою,Будиславі,Будиславо'), $this->object->q('Будислава'));
    }
    public function testCrazy61()
    { 
        $this->assertEquals(explode(',','Ведана,Ведани,Ведані,Ведану,Веданою,Ведані,Ведано'), $this->object->q('Ведана'));
    }
    public function testCrazy62()
    { 
        $this->assertEquals(explode(',','Велимира,Велимири,Велимирі,Велимиру,Велимирою,Велимирі,Велимиро'), $this->object->q('Велимира'));
    }
    public function testCrazy63()
    { 
        $this->assertEquals(explode(',','Вербава,Вербави,Вербаві,Вербаву,Вербавою,Вербаві,Вербаво'), $this->object->q('Вербава'));
    }
    public function testCrazy64()
    { 
        $this->assertEquals(explode(',','Верхуслава,Верхуслави,Верхуславі,Верхуславу,Верхуславою,Верхуславі,Верхуславо'), $this->object->q('Верхуслава'));
    }
    public function testCrazy65()
    { 
        $this->assertEquals(explode(',','Веселина,Веселини,Веселині,Веселину,Веселиною,Веселині,Веселино'), $this->object->q('Веселина'));
    }
    public function testCrazy66()
    { 
        $this->assertEquals(explode(',','Веселка,Веселки,Веселці,Веселку,Веселкою,Веселці,Веселко'), $this->object->q('Веселка'));
    }
    public function testCrazy67()
    { 
        $this->assertEquals(explode(',','Весна,Весни,Весні,Весну,Весною,Весні,Весно'), $this->object->q('Весна'));
    }
    public function testCrazy68()
    { 
        $this->assertEquals(explode(',','Вишена,Вишени,Вишені,Вишену,Вишеною,Вишені,Вишено'), $this->object->q('Вишена'));
    }
    public function testCrazy69()
    { 
        $this->assertEquals(explode(',','Вишеслава,Вишеслави,Вишеславі,Вишеславу,Вишеславою,Вишеславі,Вишеславо'), $this->object->q('Вишеслава'));
    }
    public function testCrazy70()
    { 
        $this->assertEquals(explode(',','Вишня,Вишні,Вишні,Вишню,Вишнею,Вишні,Вишне'), $this->object->q('Вишня'));
    }
    public function testCrazy71()
    { 
        $this->assertEquals(explode(',','Віра,Віри,Вірі,Віру,Вірою,Вірі,Віро'), $this->object->q('Віра'));
    }
    public function testCrazy72()
    { 
        $this->assertEquals(explode(',','Віродана,Віродани,Віродані,Віродану,Віроданою,Віродані,Віродано'), $this->object->q('Віродана'));
    }
    public function testCrazy73()
    { 
        $this->assertEquals(explode(',','Віродара,Віродари,Віродарі,Віродару,Віродарою,Віродарі,Віродаро'), $this->object->q('Віродара'));
    }
    public function testCrazy74()
    { 
        $this->assertEquals(explode(',','Вірослава,Вірослави,Вірославі,Вірославу,Вірославою,Вірославі,Вірославо'), $this->object->q('Вірослава'));
    }
    public function testCrazy75()
    { 
        $this->assertEquals(explode(',','Віста,Вісти,Вісті,Вісту,Вістою,Вісті,Вісто'), $this->object->q('Віста'));
    }
    public function testCrazy76()
    { 
        $this->assertEquals(explode(',','Вістуна,Вістуни,Вістуні,Вістуну,Вістуною,Вістуні,Вістуно'), $this->object->q('Вістуна'));
    }
    public function testCrazy77()
    { 
        $this->assertEquals(explode(',','Вітана,Вітани,Вітані,Вітану,Вітаною,Вітані,Вітано'), $this->object->q('Вітана'));
    }
    public function testCrazy78()
    { 
        $this->assertEquals(explode(',','Влада,Влади,Владі,Владу,Владою,Владі,Владо'), $this->object->q('Влада'));
    }
    public function testCrazy79()
    { 
        $this->assertEquals(explode(',','Владислава,Владислави,Владиславі,Владиславу,Владиславою,Владиславі,Владиславо'), $this->object->q('Владислава'));
    }
    public function testCrazy80()
    { 
        $this->assertEquals(explode(',','Власта,Власти,Власті,Власту,Властою,Власті,Власто'), $this->object->q('Власта'));
    }
    public function testCrazy81()
    { 
        $this->assertEquals(explode(',','Вогнедара,Вогнедари,Вогнедарі,Вогнедару,Вогнедарою,Вогнедарі,Вогнедаро'), $this->object->q('Вогнедара'));
    }
    public function testCrazy82()
    { 
        $this->assertEquals(explode(',','Вогняна,Вогняни,Вогняні,Вогняну,Вогняною,Вогняні,Вогняно'), $this->object->q('Вогняна'));
    }
    public function testCrazy83()
    { 
        $this->assertEquals(explode(',','Волелюба,Волелюби,Волелюбі,Волелюбу,Волелюбою,Волелюбі,Волелюбо'), $this->object->q('Волелюба'));
    }
    public function testCrazy84()
    { 
        $this->assertEquals(explode(',','Володимира,Володимири,Володимирі,Володимиру,Володимирою,Володимирі,Володимиро'), $this->object->q('Володимира'));
    }
    public function testCrazy85()
    { 
        $this->assertEquals(explode(',','Волошка,Волошки,Волошці,Волошку,Волошкою,Волошці,Волошко'), $this->object->q('Волошка'));
    }
    public function testCrazy86()
    { 
        $this->assertEquals(explode(',','Воля,Волі,Волі,Волю,Волею,Волі,Воле'), $this->object->q('Воля'));
    }
    public function testCrazy87()
    { 
        $this->assertEquals(explode(',','Всеволода,Всеволоди,Всеволоді,Всеволоду,Всеволодою,Всеволоді,Всеволодо'), $this->object->q('Всеволода'));
    }
    public function testCrazy88()
    { 
        $this->assertEquals(explode(',','Вселюба,Вселюби,Вселюбі,Вселюбу,Вселюбою,Вселюбі,Вселюбо'), $this->object->q('Вселюба'));
    }
    public function testCrazy89()
    { 
        $this->assertEquals(explode(',','Всемира,Всемири,Всемирі,Всемиру,Всемирою,Всемирі,Всемиро'), $this->object->q('Всемира'));
    }
    public function testCrazy90()
    { 
        $this->assertEquals(explode(',','Всеслава,Всеслави,Всеславі,Всеславу,Всеславою,Всеславі,Всеславо'), $this->object->q('Всеслава'));
    }
    public function testCrazy91()
    { 
        $this->assertEquals(explode(',','В’ячеслава,В’ячеслави,В’ячеславі,В’ячеславу,В’ячеславою,В’ячеславі,В’ячеславо'), $this->object->q('В’ячеслава'));
    }
    public function testCrazy92()
    { 
        $this->assertEquals(explode(',','Гаїна,Гаїни,Гаїні,Гаїну,Гаїною,Гаїні,Гаїно'), $this->object->q('Гаїна'));
    }
    public function testCrazy93()
    { 
        $this->assertEquals(explode(',','Гатусила,Гатусили,Гатусилі,Гатусилу,Гатусилою,Гатусилі,Гатусило'), $this->object->q('Гатусила'));
    }
    public function testCrazy94()
    { 
        $this->assertEquals(explode(',','Гарнослава,Гарнослави,Гарнославі,Гарнославу,Гарнославою,Гарнославі,Гарнославо'), $this->object->q('Гарнослава'));
    }
    public function testCrazy95()
    { 
        $this->assertEquals(explode(',','Голубка,Голубки,Голубці,Голубку,Голубкою,Голубці,Голубко'), $this->object->q('Голубка'));
    }
    public function testCrazy96()
    { 
        $this->assertEquals(explode(',','Горигляда,Горигляди,Горигляді,Горигляду,Гориглядою,Горигляді,Гориглядо'), $this->object->q('Горигляда'));
    }
    public function testCrazy97()
    { 
        $this->assertEquals(explode(',','Горислава,Горислави,Гориславі,Гориславу,Гориславою,Гориславі,Гориславо'), $this->object->q('Горислава'));
    }
    public function testCrazy98()
    { 
        $this->assertEquals(explode(',','Городислава,Городислави,Городиславі,Городиславу,Городиславою,Городиславі,Городиславо'), $this->object->q('Городислава'));
    }
    public function testCrazy99()
    { 
        $this->assertEquals(explode(',','Гострозора,Гострозори,Гострозорі,Гострозору,Гострозорою,Гострозорі,Гострозоро'), $this->object->q('Гострозора'));
    }
    public function testCrazy100()
    { 
        $this->assertEquals(explode(',','Градислава,Градислави,Градиславі,Градиславу,Градиславою,Градиславі,Градиславо'), $this->object->q('Градислава'));
    }
    public function testCrazy101()
    { 
        $this->assertEquals(explode(',','Гранислава,Гранислави,Граниславі,Граниславу,Граниславою,Граниславі,Граниславо'), $this->object->q('Гранислава'));
    }
    public function testCrazy102()
    { 
        $this->assertEquals(explode(',','Гремислава,Гремислави,Гремиславі,Гремиславу,Гремиславою,Гремиславі,Гремиславо'), $this->object->q('Гремислава'));
    }
    public function testCrazy103()
    { 
        $this->assertEquals(explode(',','Далібора,Далібори,Даліборі,Далібору,Даліборою,Даліборі,Даліборо'), $this->object->q('Далібора'));
    }
    public function testCrazy104()
    { 
        $this->assertEquals(explode(',','Дана,Дани,Дані,Дану,Даною,Дані,Дано'), $this->object->q('Дана'));
    }
    public function testCrazy105()
    { 
        $this->assertEquals(explode(',','Дарина,Дарини,Дарині,Дарину,Дариною,Дарині,Дарино'), $this->object->q('Дарина'));
    }
    public function testCrazy106()
    { 
        $this->assertEquals(explode(',','Дзвенимира,Дзвенимири,Дзвенимирі,Дзвенимиру,Дзвенимирою,Дзвенимирі,Дзвенимиро'), $this->object->q('Дзвенимира'));
    }
    public function testCrazy107()
    { 
        $this->assertEquals(explode(',','Дзвенислава,Дзвенислави,Дзвениславі,Дзвениславу,Дзвениславою,Дзвениславі,Дзвениславо'), $this->object->q('Дзвенислава'));
    }
    public function testCrazy108()
    { 
        $this->assertEquals(explode(',','Дзвінка,Дзвінки,Дзвінці,Дзвінку,Дзвінкою,Дзвінці,Дзвінко'), $this->object->q('Дзвінка'));
    }
    public function testCrazy109()
    { 
        $this->assertEquals(explode(',','Діяна,Діяни,Діяні,Діяну,Діяною,Діяні,Діяно'), $this->object->q('Діяна'));
    }
    public function testCrazy110()
    { 
        $this->assertEquals(explode(',','Добринка,Добринки,Добринці,Добринку,Добринкою,Добринці,Добринко'), $this->object->q('Добринка'));
    }
    public function testCrazy111()
    { 
        $this->assertEquals(explode(',','Добровіста,Добровісти,Добровісті,Добровісту,Добровістою,Добровісті,Добровісто'), $this->object->q('Добровіста'));
    }
    public function testCrazy112()
    { 
        $this->assertEquals(explode(',','Доброгніва,Доброгніви,Доброгніві,Доброгніву,Доброгнівою,Доброгніві,Доброгніво'), $this->object->q('Доброгніва'));
    }
    public function testCrazy113()
    { 
        $this->assertEquals(explode(',','Добролюба,Добролюби,Добролюбі,Добролюбу,Добролюбою,Добролюбі,Добролюбо'), $this->object->q('Добролюба'));
    }
    public function testCrazy114()
    { 
        $this->assertEquals(explode(',','Добромила,Добромили,Добромилі,Добромилу,Добромилою,Добромилі,Добромило'), $this->object->q('Добромила'));
    }
    public function testCrazy115()
    { 
        $this->assertEquals(explode(',','Добромира,Добромири,Добромирі,Добромиру,Добромирою,Добромирі,Добромиро'), $this->object->q('Добромира'));
    }
    public function testCrazy116()
    { 
        $this->assertEquals(explode(',','Доброніга,Доброноги,Добронозі,Доброногу,Доброногою,Добронозі,Доброного'), $this->object->q('Доброніга'));
    }
    public function testCrazy117()
    { 
        $this->assertEquals(explode(',','Доброслава,Доброслави,Доброславі,Доброславу,Доброславою,Доброславі,Доброславо'), $this->object->q('Доброслава'));
    }
    public function testCrazy118()
    { 
        $this->assertEquals(explode(',','Долина,Долини,Долині,Долину,Долиною,Долині,Долино'), $this->object->q('Долина'));
    }
    public function testCrazy119()
    { 
        $this->assertEquals(explode(',','Доля,Долі,Долі,Долю,Долею,Долі,Доле'), $this->object->q('Доля'));
    }
    public function testCrazy120()
    { 
        $this->assertEquals(explode(',','Домаха,Домахи,Домасі,Домаху,Домахою,Домасі,Домахо'), $this->object->q('Домаха'));
    }
    public function testCrazy121()
    { 
        $this->assertEquals(explode(',','Доморада,Доморади,Домораді,Домораду,Доморадою,Домораді,Доморадо'), $this->object->q('Доморада'));
    }
    public function testCrazy122()
    { 
        $this->assertEquals(explode(',','Дружелюба,Дружелюби,Дружелюбі,Дружелюбу,Дружелюбою,Дружелюбі,Дружелюбо'), $this->object->q('Дружелюба'));
    }
    public function testCrazy123()
    { 
        $this->assertEquals(explode(',','Жадана,Жадани,Жадані,Жадану,Жаданою,Жадані,Жадано'), $this->object->q('Жадана'));
    }
    public function testCrazy124()
    { 
        $this->assertEquals(explode(',','Ждана,Ждани,Ждані,Ждану,Жданою,Ждані,Ждано'), $this->object->q('Ждана'));
    }
    public function testCrazy125()
    { 
        $this->assertEquals(explode(',','Живосила,Живосили,Живосилі,Живосилу,Живосилою,Живосилі,Живосило'), $this->object->q('Живосила'));
    }
    public function testCrazy126()
    { 
        $this->assertEquals(explode(',','Живослава,Живослави,Живославі,Живославу,Живославою,Живославі,Живославо'), $this->object->q('Живослава'));
    }
    public function testCrazy127()
    { 
        $this->assertEquals(explode(',','Житомира,Житомири,Житомирі,Житомиру,Житомирою,Житомирі,Житомиро'), $this->object->q('Житомира'));
    }
    public function testCrazy128()
    { 
        $this->assertEquals(explode(',','Життєлюба,Життєлюби,Життєлюбі,Життєлюбу,Життєлюбою,Життєлюбі,Життєлюбо'), $this->object->q('Життєлюба'));
    }
    public function testCrazy129()
    { 
        $this->assertEquals(explode(',','Забава,Забави,Забаві,Забаву,Забавою,Забаві,Забаво'), $this->object->q('Забава'));
    }
    public function testCrazy130()
    { 
        $this->assertEquals(explode(',','Звенигора,Звенигори,Звенигорі,Звенигору,Звенигорою,Звенигорі,Звенигоро'), $this->object->q('Звенигора'));
    }
    public function testCrazy131()
    { 
        $this->assertEquals(explode(',','Звенислава,Звенислави,Звениславі,Звениславу,Звениславою,Звениславі,Звениславо'), $this->object->q('Звенислава'));
    }
    public function testCrazy132()
    { 
        $this->assertEquals(explode(',','Звонимира,Звонимири,Звонимирі,Звонимиру,Звонимирою,Звонимирі,Звонимиро'), $this->object->q('Звонимира'));
    }
    public function testCrazy133()
    { 
        $this->assertEquals(explode(',','Зірка,Зірки,Зірці,Зірку,Зіркою,Зірці,Зірко'), $this->object->q('Зірка'));
    }
    public function testCrazy134()
    { 
        $this->assertEquals(explode(',','Злата,Злати,Златі,Злату,Златою,Златі,Злато'), $this->object->q('Злата'));
    }
    public function testCrazy135()
    { 
        $this->assertEquals(explode(',','Златомира,Златомири,Златомирі,Златомиру,Златомирою,Златомирі,Златомиро'), $this->object->q('Златомира'));
    }
    public function testCrazy136()
    { 
        $this->assertEquals(explode(',','Златоуста,Златоусти,Златоусті,Златоусту,Златоустою,Златоусті,Златоусто'), $this->object->q('Златоуста'));
    }
    public function testCrazy137()
    { 
        $this->assertEquals(explode(',','Золотодана,Золотодани,Золотодані,Золотодану,Золотоданою,Золотодані,Золотодано'), $this->object->q('Золотодана'));
    }
    public function testCrazy138()
    { 
        $this->assertEquals(explode(',','Зорегляда,Зорегляди,Зорегляді,Зорегляду,Зореглядою,Зорегляді,Зореглядо'), $this->object->q('Зорегляда'));
    }
    public function testCrazy139()
    { 
        $this->assertEquals(explode(',','Зореслава,Зореслави,Зореславі,Зореславу,Зореславою,Зореславі,Зореславо'), $this->object->q('Зореслава'));
    }
    public function testCrazy140()
    { 
        $this->assertEquals(explode(',','Зорина,Зорини,Зорині,Зорину,Зориною,Зорині,Зорино'), $this->object->q('Зорина'));
    }
    public function testCrazy141()
    { 
        $this->assertEquals(explode(',','Зоря,Зорі,Зорі,Зорю,Зорею,Зорі,Зоре'), $this->object->q('Зоря'));
    }
    public function testCrazy142()
    { 
        $this->assertEquals(explode(',','Зоряна,Зоряни,Зоряні,Зоряну,Зоряною,Зоряні,Зоряно'), $this->object->q('Зоряна'));
    }
    public function testCrazy143()
    { 
        $this->assertEquals(explode(',','Казка,Казки,Казці,Казку,Казкою,Казці,Казко'), $this->object->q('Казка'));
    }
    public function testCrazy144()
    { 
        $this->assertEquals(explode(',','Калина,Калини,Калині,Калину,Калиною,Калині,Калино'), $this->object->q('Калина'));
    }
    public function testCrazy145()
    { 
        $this->assertEquals(explode(',','Квітка,Квітки,Квітці,Квітку,Квіткою,Квітці,Квітко'), $this->object->q('Квітка'));
    }
    public function testCrazy146()
    { 
        $this->assertEquals(explode(',','Колодара,Колодари,Колодарі,Колодару,Колодарою,Колодарі,Колодаро'), $this->object->q('Колодара'));
    }
    public function testCrazy147()
    { 
        $this->assertEquals(explode(',','Красава,Красави,Красаві,Красаву,Красавою,Красаві,Красаво'), $this->object->q('Красава'));
    }
    public function testCrazy148()
    { 
        $this->assertEquals(explode(',','Красимира,Красимири,Красимирі,Красимиру,Красимирою,Красимирі,Красимиро'), $this->object->q('Красимира'));
    }
    public function testCrazy149()
    { 
        $this->assertEquals(explode(',','Красновида,Красновиди,Красновиді,Красновиду,Красновидою,Красновиді,Красновидо'), $this->object->q('Красновида'));
    }
    public function testCrazy150()
    { 
        $this->assertEquals(explode(',','Краснолика,Краснолики,Краснолиці,Краснолику,Красноликою,Краснолиці,Краснолико'), $this->object->q('Краснолика'));
    }
    public function testCrazy151()
    { 
        $this->assertEquals(explode(',','Красуня,Красуні,Красуні,Красуню,Красунею,Красуні,Красуне'), $this->object->q('Красуня'));
    }
    public function testCrazy152()
    { 
        $this->assertEquals(explode(',','Купава,Купави,Купаві,Купаву,Купавою,Купаві,Купаво'), $this->object->q('Купава'));
    }
    public function testCrazy153()
    { 
        $this->assertEquals(explode(',','Лада,Лади,Ладі,Ладу,Ладою,Ладі,Ладо'), $this->object->q('Лада'));
    }
    public function testCrazy154()
    { 
        $this->assertEquals(explode(',','Ладислава,Ладислави,Ладиславі,Ладиславу,Ладиславою,Ладиславі,Ладиславо'), $this->object->q('Ладислава'));
    }
    public function testCrazy155()
    { 
        $this->assertEquals(explode(',','Ладомила,Ладомили,Ладомилі,Ладомилу,Ладомилою,Ладомилі,Ладомило'), $this->object->q('Ладомила'));
    }
    public function testCrazy156()
    { 
        $this->assertEquals(explode(',','Ладомира,Ладомири,Ладомирі,Ладомиру,Ладомирою,Ладомирі,Ладомиро'), $this->object->q('Ладомира'));
    }
    public function testCrazy157()
    { 
        $this->assertEquals(explode(',','Левина,Левини,Левині,Левину,Левиною,Левині,Левино'), $this->object->q('Левина'));
    }
    public function testCrazy158()
    { 
        $this->assertEquals(explode(',','Лель,Лелі,Лелі,Лель,Леллю,Лелі,Леле'), $this->object->q('Лель'));
    }
    public function testCrazy159()
    { 
        $this->assertEquals(explode(',','Леля,Лелі,Лелі,Лелю,Лелею,Лелі,Леле'), $this->object->q('Леля'));
    }
    public function testCrazy160()
    { 
        $this->assertEquals(explode(',','Леся,Лесі,Лесі,Лесю,Лесею,Лесі,Лесе'), $this->object->q('Леся'));
    }
    public function testCrazy161()
    { 
        $this->assertEquals(explode(',','Либідь,Либіді,Либіді,Либідь,Либіддю,Либіді,Либіде'), $this->object->q('Либідь'));
    }
    public function testCrazy162()
    { 
        $this->assertEquals(explode(',','Лілея,Лілеї,Лілеї,Лілею,Лілеєю,Лілеї,Лілеє'), $this->object->q('Лілея'));
    }
    public function testCrazy163()
    { 
        $this->assertEquals(explode(',','Лоліта,Лоліти,Лоліті,Лоліту,Лолітою,Лоліті,Лоліто'), $this->object->q('Лоліта'));
    }
    public function testCrazy164()
    { 
        $this->assertEquals(explode(',','Любава,Любави,Любаві,Любаву,Любавою,Любаві,Любаво'), $this->object->q('Любава'));
    }
    public function testCrazy165()
    { 
        $this->assertEquals(explode(',','Любаня,Любані,Любані,Любаню,Любанею,Любані,Любане'), $this->object->q('Любаня'));
    }
    public function testCrazy166()
    { 
        $this->assertEquals(explode(',','Любислава,Любислави,Любиславі,Любиславу,Любиславою,Любиславі,Любиславо'), $this->object->q('Любислава'));
    }
    public function testCrazy167()
    { 
        $this->assertEquals(explode(',','Любов,Любові,Любові,Любов,Любов’ю,Любові,Любове'), $this->object->q('Любов'));
    }
    public function testCrazy168()
    { 
        $this->assertEquals(explode(',','Любомила,Любомили,Любомилі,Любомилу,Любомилою,Любомилі,Любомило'), $this->object->q('Любомила'));
    }
    public function testCrazy169()
    { 
        $this->assertEquals(explode(',','Любомира,Любомири,Любомирі,Любомиру,Любомирою,Любомирі,Любомиро'), $this->object->q('Любомира'));
    }
    public function testCrazy170()
    { 
        $this->assertEquals(explode(',','Люборада,Люборади,Любораді,Любораду,Люборадою,Любораді,Люборадо'), $this->object->q('Люборада'));
    }
    public function testCrazy171()
    { 
        $this->assertEquals(explode(',','Людмила,Людмили,Людмилі,Людмилу,Людмилою,Людмилі,Людмило'), $this->object->q('Людмила'));
    }
    public function testCrazy172()
    { 
        $this->assertEquals(explode(',','Людомила,Людомили,Людомилі,Людомилу,Людомилою,Людомилі,Людомило'), $this->object->q('Людомила'));
    }
    public function testCrazy173()
    { 
        $this->assertEquals(explode(',','Любослава,Любослави,Любославі,Любославу,Любославою,Любославі,Любославо'), $this->object->q('Любослава'));
    }
    public function testCrazy174()
    { 
        $this->assertEquals(explode(',','Льоля,Льолі,Льолі,Льолю,Льолею,Льолі,Льоле'), $this->object->q('Льоля'));
    }
    public function testCrazy175()
    { 
        $this->assertEquals(explode(',','Мавка,Мавки,Мавці,Мавку,Мавкою,Мавці,Мавко'), $this->object->q('Мавка'));
    }
    public function testCrazy176()
    { 
        $this->assertEquals(explode(',','Магадара,Магадари,Магадарі,Магадару,Магадарою,Магадарі,Магадаро'), $this->object->q('Магадара'));
    }
    public function testCrazy177()
    { 
        $this->assertEquals(explode(',','Маїна,Маїни,Маїні,Маїну,Маїною,Маїні,Маїно'), $this->object->q('Маїна'));
    }
    public function testCrazy178()
    { 
        $this->assertEquals(explode(',','Маківка,Маківки,Маківці,Маківку,Маківкою,Маківці,Маківко'), $this->object->q('Маківка'));
    }
    public function testCrazy179()
    { 
        $this->assertEquals(explode(',','Малуня,Малуні,Малуні,Малуню,Малунею,Малуні,Малуне'), $this->object->q('Малуня'));
    }
    public function testCrazy180()
    { 
        $this->assertEquals(explode(',','Малуша,Малуши,Малуші,Малушу,Малушою,Малуші,Малушо'), $this->object->q('Малуша'));
    }
    public function testCrazy181()
    { 
        $this->assertEquals(explode(',','Мальва,Мальви,Мальві,Мальву,Мальвою,Мальві,Мальво'), $this->object->q('Мальва'));
    }
    public function testCrazy182()
    { 
        $this->assertEquals(explode(',','Марута,Марути,Маруті,Маруту,Марутою,Маруті,Маруто'), $this->object->q('Марута'));
    }
    public function testCrazy183()
    { 
        $this->assertEquals(explode(',','Мая,Маї,Маї,Маю,Маєю,Маї,Має'), $this->object->q('Мая'));
    }
    public function testCrazy184()
    { 
        $this->assertEquals(explode(',','Медорада,Медоради,Медораді,Медораду,Медорадою,Медораді,Медорадо'), $this->object->q('Медорада'));
    }
    public function testCrazy185()
    { 
        $this->assertEquals(explode(',','Мечислава,Мечислави,Мечиславі,Мечиславу,Мечиславою,Мечиславі,Мечиславо'), $this->object->q('Мечислава'));
    }
    public function testCrazy186()
    { 
        $this->assertEquals(explode(',','Милана,Милани,Милані,Милану,Миланою,Милані,Милано'), $this->object->q('Милана'));
    }
    public function testCrazy187()
    { 
        $this->assertEquals(explode(',','Милована,Миловани,Миловані,Миловану,Милованою,Миловані,Миловано'), $this->object->q('Милована'));
    }
    public function testCrazy188()
    { 
        $this->assertEquals(explode(',','Миловида,Миловиди,Миловиді,Миловиду,Миловидою,Миловиді,Миловидо'), $this->object->q('Миловида'));
    }
    public function testCrazy189()
    { 
        $this->assertEquals(explode(',','Милодара,Милодари,Милодарі,Милодару,Милодарою,Милодарі,Милодаро'), $this->object->q('Милодара'));
    }
    public function testCrazy190()
    { 
        $this->assertEquals(explode(',','Милослава,Милослави,Милославі,Милославу,Милославою,Милославі,Милославо'), $this->object->q('Милослава'));
    }
    public function testCrazy191()
    { 
        $this->assertEquals(explode(',','Мирана,Мирани,Мирані,Мирану,Мираною,Мирані,Мирано'), $this->object->q('Мирана'));
    }
    public function testCrazy192()
    { 
        $this->assertEquals(explode(',','Миробога,Миробоги,Миробозі,Миробогу,Миробогою,Миробозі,Миробого'), $this->object->q('Миробога'));
    }
    public function testCrazy193()
    { 
        $this->assertEquals(explode(',','Миролюба,Миролюби,Миролюбі,Миролюбу,Миролюбою,Миролюбі,Миролюбо'), $this->object->q('Миролюба'));
    }
    public function testCrazy194()
    { 
        $this->assertEquals(explode(',','Мирослава,Мирослави,Мирославі,Мирославу,Мирославою,Мирославі,Мирославо'), $this->object->q('Мирослава'));
    }
    public function testCrazy195()
    { 
        $this->assertEquals(explode(',','Млада,Млади,Младі,Младу,Младою,Младі,Младо'), $this->object->q('Млада'));
    }
    public function testCrazy196()
    { 
        $this->assertEquals(explode(',','Мокрина,Мокрини,Мокрині,Мокрину,Мокриною,Мокрині,Мокрино'), $this->object->q('Мокрина'));
    }
    public function testCrazy197()
    { 
        $this->assertEquals(explode(',','Мстислава,Мстислави,Мстиславі,Мстиславу,Мстиславою,Мстиславі,Мстиславо'), $this->object->q('Мстислава'));
    }
    public function testCrazy198()
    { 
        $this->assertEquals(explode(',','Мудролюба,Мудролюби,Мудролюбі,Мудролюбу,Мудролюбою,Мудролюбі,Мудролюбо'), $this->object->q('Мудролюба'));
    }
    public function testCrazy199()
    { 
        $this->assertEquals(explode(',','Надія,Надії,Надії,Надію,Надією,Надії,Надіє'), $this->object->q('Надія'));
    }
    public function testCrazy200()
    { 
        $this->assertEquals(explode(',','Найда,Найди,Найді,Найду,Найдою,Найді,Найдо'), $this->object->q('Найда'));
    }
    public function testCrazy201()
    { 
        $this->assertEquals(explode(',','Найдена,Найдени,Найдені,Найдену,Найденою,Найдені,Найдено'), $this->object->q('Найдена'));
    }
    public function testCrazy202()
    { 
        $this->assertEquals(explode(',','Наслава,Наслави,Наславі,Наславу,Наславою,Наславі,Наславо'), $this->object->q('Наслава'));
    }
    public function testCrazy203()
    { 
        $this->assertEquals(explode(',','Немира,Немири,Немирі,Немиру,Немирою,Немирі,Немиро'), $this->object->q('Немира'));
    }
    public function testCrazy204()
    { 
        $this->assertEquals(explode(',','Нігослава,Нігослави,Нігославі,Нігославу,Нігославою,Нігославі,Нігославо'), $this->object->q('Нігослава'));
    }
    public function testCrazy205()
    { 
        $this->assertEquals(explode(',','Незабудка,Незабудки,Незабудці,Незабудку,Незабудкою,Незабудці,Незабудко'), $this->object->q('Незабудка'));
    }
    public function testCrazy206()
    { 
        $this->assertEquals(explode(',','Огняна,Огняни,Огняні,Огняну,Огняною,Огняні,Огняно'), $this->object->q('Огняна'));
    }
    public function testCrazy207()
    { 
        $this->assertEquals(explode(',','Оримира,Оримири,Оримирі,Оримиру,Оримирою,Оримирі,Оримиро'), $this->object->q('Оримира'));
    }
    public function testCrazy208()
    { 
        $this->assertEquals(explode(',','Орина,Орини,Орині,Орину,Ориною,Орині,Орино'), $this->object->q('Орина'));
    }
    public function testCrazy209()
    { 
        $this->assertEquals(explode(',','Орислава,Орислави,Ориславі,Ориславу,Ориславою,Ориславі,Ориславо'), $this->object->q('Орислава'));
    }
    public function testCrazy210()
    { 
        $this->assertEquals(explode(',','Орися,Орисі,Орисі,Орисю,Орисею,Орисі,Орисе'), $this->object->q('Орися'));
    }
    public function testCrazy211()
    { 
        $this->assertEquals(explode(',','Оріяна,Оріяни,Оріяні,Оріяну,Оріяною,Оріяні,Оріяно'), $this->object->q('Оріяна'));
    }
    public function testCrazy212()
    { 
        $this->assertEquals(explode(',','Орогоста,Орогости,Орогості,Орогосту,Орогостою,Орогості,Орогосто'), $this->object->q('Орогоста'));
    }
    public function testCrazy213()
    { 
        $this->assertEquals(explode(',','Острозора,Острозори,Острозорі,Острозору,Острозорою,Острозорі,Острозоро'), $this->object->q('Острозора'));
    }
    public function testCrazy214()
    { 
        $this->assertEquals(explode(',','Остромира,Остромири,Остромирі,Остромиру,Остромирою,Остромирі,Остромиро'), $this->object->q('Остромира'));
    }
    public function testCrazy215()
    { 
        $this->assertEquals(explode(',','Осмомисла,Осмомисли,Осмомислі,Осмомислу,Осмомислою,Осмомислі,Осмомисло'), $this->object->q('Осмомисла'));
    }
    public function testCrazy216()
    { 
        $this->assertEquals(explode(',','Остромова,Остромови,Остромові,Остромову,Остромовою,Остромові,Остромово'), $this->object->q('Остромова'));
    }
    public function testCrazy217()
    { 
        $this->assertEquals(explode(',','Пава,Пави,Паві,Паву,Павою,Паві,Паво'), $this->object->q('Пава'));
    }
    public function testCrazy218()
    { 
        $this->assertEquals(explode(',','Палажка,Палажки,Палажці,Палажку,Палажкою,Палажці,Палажко'), $this->object->q('Палажка'));
    }
    public function testCrazy219()
    { 
        $this->assertEquals(explode(',','Палазга,Палазги,Палаззі,Палазгу,Палазгою,Палаззі,Палазго'), $this->object->q('Палазга'));
    }
    public function testCrazy220()
    { 
        $this->assertEquals(explode(',','Перелюба,Перелюби,Перелюбі,Перелюбу,Перелюбою,Перелюбі,Перелюбо'), $this->object->q('Перелюба'));
    }
    public function testCrazy221()
    { 
        $this->assertEquals(explode(',','Перемила,Перемили,Перемилі,Перемилу,Перемилою,Перемилі,Перемило'), $this->object->q('Перемила'));
    }
    public function testCrazy222()
    { 
        $this->assertEquals(explode(',','Перемисла,Перемисли,Перемислі,Перемислу,Перемислою,Перемислі,Перемисло'), $this->object->q('Перемисла'));
    }
    public function testCrazy223()
    { 
        $this->assertEquals(explode(',','Півонія,Півонії,Півонії,Півонію,Півонією,Півонії,Півоніє'), $this->object->q('Півонія'));
    }
    public function testCrazy224()
    { 
        $this->assertEquals(explode(',','Позвізда,Позвізди,Позвізді,Позвізду,Позвіздою,Позвізді,Позвіздо'), $this->object->q('Позвізда'));
    }
    public function testCrazy225()
    { 
        $this->assertEquals(explode(',','Полеза,Полези,Полезі,Полезу,Полезою,Полезі,Полезо'), $this->object->q('Полеза'));
    }
    public function testCrazy226()
    { 
        $this->assertEquals(explode(',','Поляна,Поляни,Поляні,Поляну,Поляною,Поляні,Поляно'), $this->object->q('Поляна'));
    }
    public function testCrazy227()
    { 
        $this->assertEquals(explode(',','Потішана,Потішани,Потішані,Потішану,Потішаною,Потішані,Потішано'), $this->object->q('Потішана'));
    }
    public function testCrazy228()
    { 
        $this->assertEquals(explode(',','Предслава,Предслави,Предславі,Предславу,Предславою,Предславі,Предславо'), $this->object->q('Предслава'));
    }
    public function testCrazy229()
    { 
        $this->assertEquals(explode(',','Рада,Ради,Раді,Раду,Радою,Раді,Радо'), $this->object->q('Рада'));
    }
    public function testCrazy230()
    { 
        $this->assertEquals(explode(',','Радана,Радани,Радані,Радану,Раданою,Радані,Радано'), $this->object->q('Радана'));
    }
    public function testCrazy231()
    { 
        $this->assertEquals(explode(',','Радимира,Радимири,Радимирі,Радимиру,Радимирою,Радимирі,Радимиро'), $this->object->q('Радимира'));
    }
    public function testCrazy232()
    { 
        $this->assertEquals(explode(',','Радогоста,Радогости,Радогості,Радогосту,Радогостою,Радогості,Радогосто'), $this->object->q('Радогоста'));
    }
    public function testCrazy233()
    { 
        $this->assertEquals(explode(',','Радомира,Радомири,Радомирі,Радомиру,Радомирою,Радомирі,Радомиро'), $this->object->q('Радомира'));
    }
    public function testCrazy234()
    { 
        $this->assertEquals(explode(',','Радослава,Радослави,Радославі,Радославу,Радославою,Радославі,Радославо'), $this->object->q('Радослава'));
    }
    public function testCrazy235()
    { 
        $this->assertEquals(explode(',','Рідна,Рідни,Рідні,Рідну,Рідною,Рідні,Рідно'), $this->object->q('Рідна'));
    }
    public function testCrazy236()
    { 
        $this->assertEquals(explode(',','Рогволода,Рогволоди,Рогволоді,Рогволоду,Рогволодою,Рогволоді,Рогволодо'), $this->object->q('Рогволода'));
    }
    public function testCrazy237()
    { 
        $this->assertEquals(explode(',','Рогніда,Рогніди,Рогніді,Рогніду,Рогнідою,Рогніді,Рогнідо'), $this->object->q('Рогніда'));
    }
    public function testCrazy238()
    { 
        $this->assertEquals(explode(',','Родослава,Родослави,Родославі,Родославу,Родославою,Родославі,Родославо'), $this->object->q('Родослава'));
    }
    public function testCrazy239()
    { 
        $this->assertEquals(explode(',','Рожана,Рожани,Рожані,Рожану,Рожаною,Рожані,Рожано'), $this->object->q('Рожана'));
    }
    public function testCrazy240()
    { 
        $this->assertEquals(explode(',','Роксолана,Роксолани,Роксолані,Роксолану,Роксоланою,Роксолані,Роксолано'), $this->object->q('Роксолана'));
    }
    public function testCrazy241()
    { 
        $this->assertEquals(explode(',','Ромашка,Ромашки,Ромашці,Ромашку,Ромашкою,Ромашці,Ромашко'), $this->object->q('Ромашка'));
    }
    public function testCrazy242()
    { 
        $this->assertEquals(explode(',','Росава,Росави,Росаві,Росаву,Росавою,Росаві,Росаво'), $this->object->q('Росава'));
    }
    public function testCrazy243()
    { 
        $this->assertEquals(explode(',','Росина,Росини,Росині,Росину,Росиною,Росині,Росино'), $this->object->q('Росина'));
    }
    public function testCrazy244()
    { 
        $this->assertEquals(explode(',','Ростислава,Ростислави,Ростиславі,Ростиславу,Ростиславою,Ростиславі,Ростиславо'), $this->object->q('Ростислава'));
    }
    public function testCrazy245()
    { 
        $this->assertEquals(explode(',','Ростичара,Ростичари,Ростичарі,Ростичару,Ростичарою,Ростичарі,Ростичаро'), $this->object->q('Ростичара'));
    }
    public function testCrazy246()
    { 
        $this->assertEquals(explode(',','Ростуня,Ростуні,Ростуні,Ростуню,Ростунею,Ростуні,Ростуне'), $this->object->q('Ростуня'));
    }
    public function testCrazy247()
    { 
        $this->assertEquals(explode(',','Рудана,Рудани,Рудані,Рудану,Руданою,Рудані,Рудано'), $this->object->q('Рудана'));
    }
    public function testCrazy248()
    { 
        $this->assertEquals(explode(',','Ружа,Ружи,Ружі,Ружу,Ружою,Ружі,Ружо'), $this->object->q('Ружа'));
    }
    public function testCrazy249()
    { 
        $this->assertEquals(explode(',','Русана,Русани,Русані,Русану,Русаною,Русані,Русано'), $this->object->q('Русана'));
    }
    public function testCrazy250()
    { 
        $this->assertEquals(explode(',','Русудана,Русудани,Русудані,Русудану,Русуданою,Русудані,Русудано'), $this->object->q('Русудана'));
    }
    public function testCrazy251()
    { 
        $this->assertEquals(explode(',','Русява,Русяви,Русяві,Русяву,Русявою,Русяві,Русяво'), $this->object->q('Русява'));
    }
    public function testCrazy252()
    { 
        $this->assertEquals(explode(',','Русявка,Русявки,Русявці,Русявку,Русявкою,Русявці,Русявко'), $this->object->q('Русявка'));
    }
    public function testCrazy253()
    { 
        $this->assertEquals(explode(',','Рута,Рути,Руті,Руту,Рутою,Руті,Руто'), $this->object->q('Рута'));
    }
    public function testCrazy254()
    { 
        $this->assertEquals(explode(',','Світана,Світани,Світані,Світану,Світаною,Світані,Світано'), $this->object->q('Світана'));
    }
    public function testCrazy255()
    { 
        $this->assertEquals(explode(',','Світлана,Світлани,Світлані,Світлану,Світланою,Світлані,Світлано'), $this->object->q('Світлана'));
    }
    public function testCrazy256()
    { 
        $this->assertEquals(explode(',','Світовида,Світовиди,Світовиді,Світовиду,Світовидою,Світовиді,Світовидо'), $this->object->q('Світовида'));
    }
    public function testCrazy257()
    { 
        $this->assertEquals(explode(',','Світогора,Світогори,Світогорі,Світогору,Світогорою,Світогорі,Світогоро'), $this->object->q('Світогора'));
    }
    public function testCrazy258()
    { 
        $this->assertEquals(explode(',','Світодара,Світодари,Світодарі,Світодару,Світодарою,Світодарі,Світодаро'), $this->object->q('Світодара'));
    }
    public function testCrazy259()
    { 
        $this->assertEquals(explode(',','Світозара,Світозари,Світозарі,Світозару,Світозарою,Світозарі,Світозаро'), $this->object->q('Світозара'));
    }
    public function testCrazy260()
    { 
        $this->assertEquals(explode(',','Світолика,Світолики,Світолиці,Світолику,Світоликою,Світолиці,Світолико'), $this->object->q('Світолика'));
    }
    public function testCrazy261()
    { 
        $this->assertEquals(explode(',','Світолюба,Світолюби,Світолюбі,Світолюбу,Світолюбою,Світолюбі,Світолюбо'), $this->object->q('Світолюба'));
    }
    public function testCrazy262()
    { 
        $this->assertEquals(explode(',','Світослава,Світослави,Світославі,Світославу,Світославою,Світославі,Світославо'), $this->object->q('Світослава'));
    }
    public function testCrazy263()
    { 
        $this->assertEquals(explode(',','Світояра,Світояри,Світоярі,Світояру,Світоярою,Світоярі,Світояро'), $this->object->q('Світояра'));
    }
    public function testCrazy264()
    { 
        $this->assertEquals(explode(',','Свободана,Свободани,Свободані,Свободану,Свободаною,Свободані,Свободано'), $this->object->q('Свободана'));
    }
    public function testCrazy265()
    { 
        $this->assertEquals(explode(',','Святогора,Святогори,Святогорі,Святогору,Святогорою,Святогорі,Святогоро'), $this->object->q('Святогора'));
    }
    public function testCrazy266()
    { 
        $this->assertEquals(explode(',','Святолюба,Святолюби,Святолюбі,Святолюбу,Святолюбою,Святолюбі,Святолюбо'), $this->object->q('Святолюба'));
    }
    public function testCrazy267()
    { 
        $this->assertEquals(explode(',','Святослава,Святослави,Святославі,Святославу,Святославою,Святославі,Святославо'), $this->object->q('Святослава'));
    }
    public function testCrazy268()
    { 
        $this->assertEquals(explode(',','Силата,Силати,Силаті,Силату,Силатою,Силаті,Силато'), $this->object->q('Силата'));
    }
    public function testCrazy269()
    { 
        $this->assertEquals(explode(',','Силолюба,Силолюби,Силолюбі,Силолюбу,Силолюбою,Силолюбі,Силолюбо'), $this->object->q('Силолюба'));
    }
    public function testCrazy270()
    { 
        $this->assertEquals(explode(',','Силослава,Силослави,Силославі,Силославу,Силославою,Силославі,Силославо'), $this->object->q('Силослава'));
    }
    public function testCrazy271()
    { 
        $this->assertEquals(explode(',','Синезора,Синезори,Синезорі,Синезору,Синезорою,Синезорі,Синезоро'), $this->object->q('Синезора'));
    }
    public function testCrazy272()
    { 
        $this->assertEquals(explode(',','Синьоока,Синьооки,Синьооці,Синьооку,Синьоокою,Синьооці,Синьооко'), $this->object->q('Синьоока'));
    }
    public function testCrazy273()
    { 
        $this->assertEquals(explode(',','Сіверина,Сіверини,Сіверині,Сіверину,Сівериною,Сіверині,Сіверино'), $this->object->q('Сіверина'));
    }
    public function testCrazy274()
    { 
        $this->assertEquals(explode(',','Слава,Слави,Славі,Славу,Славою,Славі,Славо'), $this->object->q('Слава'));
    }
    public function testCrazy275()
    { 
        $this->assertEquals(explode(',','Славина,Славини,Славині,Славину,Славиною,Славині,Славино'), $this->object->q('Славина'));
    }
    public function testCrazy276()
    { 
        $this->assertEquals(explode(',','Славолюба,Славолюби,Славолюбі,Славолюбу,Славолюбою,Славолюбі,Славолюбо'), $this->object->q('Славолюба'));
    }
    public function testCrazy277()
    { 
        $this->assertEquals(explode(',','Славомила,Славомили,Славомилі,Славомилу,Славомилою,Славомилі,Славомило'), $this->object->q('Славомила'));
    }
    public function testCrazy278()
    { 
        $this->assertEquals(explode(',','Сміяна,Сміяни,Сміяні,Сміяну,Сміяною,Сміяні,Сміяно'), $this->object->q('Сміяна'));
    }
    public function testCrazy279()
    { 
        $this->assertEquals(explode(',','Сніжана,Сніжани,Сніжані,Сніжану,Сніжаною,Сніжані,Сніжано'), $this->object->q('Сніжана'));
    }
    public function testCrazy280()
    { 
        $this->assertEquals(explode(',','Сніжинка,Сніжинки,Сніжинці,Сніжинку,Сніжинкою,Сніжинці,Сніжинко'), $this->object->q('Сніжинка'));
    }
    public function testCrazy281()
    { 
        $this->assertEquals(explode(',','Собіслава,Собіслави,Собіславі,Собіславу,Собіславою,Собіславі,Собіславо'), $this->object->q('Собіслава'));
    }
    public function testCrazy282()
    { 
        $this->assertEquals(explode(',','Соловія,Соловії,Соловії,Соловію,Соловією,Соловії,Соловіє'), $this->object->q('Соловія'));
    }
    public function testCrazy283()
    { 
        $this->assertEquals(explode(',','Сологуба,Сологуби,Сологубі,Сологубу,Сологубою,Сологубі,Сологубо'), $this->object->q('Сологуба'));
    }
    public function testCrazy284()
    { 
        $this->assertEquals(explode(',','Сонцевида,Сонцевиди,Сонцевиді,Сонцевиду,Сонцевидою,Сонцевиді,Сонцевидо'), $this->object->q('Сонцевида'));
    }
    public function testCrazy285()
    { 
        $this->assertEquals(explode(',','Сонцедара,Сонцедари,Сонцедарі,Сонцедару,Сонцедарою,Сонцедарі,Сонцедаро'), $this->object->q('Сонцедара'));
    }
    public function testCrazy286()
    { 
        $this->assertEquals(explode(',','Сонцелика,Сонцелики,Сонцелиці,Сонцелику,Сонцеликою,Сонцелиці,Сонцелико'), $this->object->q('Сонцелика'));
    }
    public function testCrazy287()
    { 
        $this->assertEquals(explode(',','Сонцеслава,Сонцеслави,Сонцеславі,Сонцеславу,Сонцеславою,Сонцеславі,Сонцеславо'), $this->object->q('Сонцеслава'));
    }
    public function testCrazy288()
    { 
        $this->assertEquals(explode(',','Ссанимира,Ссанимири,Ссанимирі,Ссанимиру,Ссанимирою,Ссанимирі,Ссанимиро'), $this->object->q('Ссанимира'));
    }
    public function testCrazy289()
    { 
        $this->assertEquals(explode(',','Станислава,Станислави,Станиславі,Станиславу,Станиславою,Станиславі,Станиславо'), $this->object->q('Станислава'));
    }
    public function testCrazy290()
    { 
        $this->assertEquals(explode(',','Судимира,Судимири,Судимирі,Судимиру,Судимирою,Судимирі,Судимиро'), $this->object->q('Судимира'));
    }
    public function testCrazy291()
    { 
        $this->assertEquals(explode(',','Судислава,Судислави,Судиславі,Судиславу,Судиславою,Судиславі,Судиславо'), $this->object->q('Судислава'));
    }
    public function testCrazy292()
    { 
        $this->assertEquals(explode(',','Татолюба,Татолюби,Татолюбі,Татолюбу,Татолюбою,Татолюбі,Татолюбо'), $this->object->q('Татолюба'));
    }
    public function testCrazy293()
    { 
        $this->assertEquals(explode(',','Твердислава,Твердислави,Твердиславі,Твердиславу,Твердиславою,Твердиславі,Твердиславо'), $this->object->q('Твердислава'));
    }
    public function testCrazy294()
    { 
        $this->assertEquals(explode(',','Твердогоста,Твердогости,Твердогості,Твердогосту,Твердогостою,Твердогості,Твердогосто'), $this->object->q('Твердогоста'));
    }
    public function testCrazy295()
    { 
        $this->assertEquals(explode(',','Творимира,Творимири,Творимирі,Творимиру,Творимирою,Творимирі,Творимиро'), $this->object->q('Творимира'));
    }
    public function testCrazy296()
    { 
        $this->assertEquals(explode(',','Творислава,Творислави,Твориславі,Твориславу,Твориславою,Твориславі,Твориславо'), $this->object->q('Творислава'));
    }
    public function testCrazy297()
    { 
        $this->assertEquals(explode(',','Толигніва,Толигніви,Толигніві,Толигніву,Толигнівою,Толигніві,Толигніво'), $this->object->q('Толигніва'));
    }
    public function testCrazy298()
    { 
        $this->assertEquals(explode(',','Тонкостана,Тонкостани,Тонкостані,Тонкостану,Тонкостаною,Тонкостані,Тонкостано'), $this->object->q('Тонкостана'));
    }
    public function testCrazy299()
    { 
        $this->assertEquals(explode(',','Трояна,Трояни,Трояні,Трояну,Трояною,Трояні,Трояно'), $this->object->q('Трояна'));
    }
    public function testCrazy300()
    { 
        $this->assertEquals(explode(',','Хвала,Хвали,Хвалі,Хвалу,Хвалою,Хвалі,Хвало'), $this->object->q('Хвала'));
    }
    public function testCrazy301()
    { 
        $this->assertEquals(explode(',','Хвалибого,Хвалибого,Хвалибого,Хвалибого,Хвалибого,Хвалибого,Хвалибого'), $this->object->q('Хвалибого'));
    }
    public function testCrazy302()
    { 
        $this->assertEquals(explode(',','Хвалимира,Хвалимири,Хвалимирі,Хвалимиру,Хвалимирою,Хвалимирі,Хвалимиро'), $this->object->q('Хвалимира'));
    }
    public function testCrazy303()
    { 
        $this->assertEquals(explode(',','Хвалина,Хвалини,Хвалині,Хвалину,Хвалиною,Хвалині,Хвалино'), $this->object->q('Хвалина'));
    }
    public function testCrazy304()
    { 
        $this->assertEquals(explode(',','Хорошка,Хорошки,Хорошці,Хорошку,Хорошкою,Хорошці,Хорошко'), $this->object->q('Хорошка'));
    }
    public function testCrazy305()
    { 
        $this->assertEquals(explode(',','Хорошуня,Хорошуні,Хорошуні,Хорошуню,Хорошунею,Хорошуні,Хорошуне'), $this->object->q('Хорошуня'));
    }
    public function testCrazy306()
    { 
        $this->assertEquals(explode(',','Хотимра,Хотимри,Хотимрі,Хотимру,Хотимрою,Хотимрі,Хотимро'), $this->object->q('Хотимра'));
    }
    public function testCrazy307()
    { 
        $this->assertEquals(explode(',','Хотяна,Хотяни,Хотяні,Хотяну,Хотяною,Хотяні,Хотяно'), $this->object->q('Хотяна'));
    }
    public function testCrazy308()
    { 
        $this->assertEquals(explode(',','Хранимира,Хранимири,Хранимирі,Хранимиру,Хранимирою,Хранимирі,Хранимиро'), $this->object->q('Хранимира'));
    }
    public function testCrazy309()
    { 
        $this->assertEquals(explode(',','Худана,Худани,Худані,Худану,Худаною,Худані,Худано'), $this->object->q('Худана'));
    }
    public function testCrazy310()
    { 
        $this->assertEquals(explode(',','Цвітана,Цвітани,Цвітані,Цвітану,Цвітаною,Цвітані,Цвітано'), $this->object->q('Цвітана'));
    }
    public function testCrazy311()
    { 
        $this->assertEquals(explode(',','Чайка,Чайки,Чайці,Чайку,Чайкою,Чайці,Чайко'), $this->object->q('Чайка'));
    }
    public function testCrazy312()
    { 
        $this->assertEquals(explode(',','Чарівна,Чарівни,Чарівні,Чарівну,Чарівною,Чарівні,Чарівно'), $this->object->q('Чарівна'));
    }
    public function testCrazy313()
    { 
        $this->assertEquals(explode(',','Чарівниця,Чарівниці,Чарівниці,Чарівницю,Чарівницею,Чарівниці,Чарівнице'), $this->object->q('Чарівниця'));
    }
    public function testCrazy314()
    { 
        $this->assertEquals(explode(',','Чаруна,Чаруни,Чаруні,Чаруну,Чаруною,Чаруні,Чаруно'), $this->object->q('Чаруна'));
    }
    public function testCrazy315()
    { 
        $this->assertEquals(explode(',','Чеслава,Чеслави,Чеславі,Чеславу,Чеславою,Чеславі,Чеславо'), $this->object->q('Чеслава'));
    }
    public function testCrazy316()
    { 
        $this->assertEquals(explode(',','Ява,Яви,Яві,Яву,Явою,Яві,Яво'), $this->object->q('Ява'));
    }
    public function testCrazy317()
    { 
        $this->assertEquals(explode(',','Яворина,Яворини,Яворині,Яворину,Явориною,Яворині,Яворино'), $this->object->q('Яворина'));
    }
    public function testCrazy318()
    { 
        $this->assertEquals(explode(',','Ялина,Ялини,Ялині,Ялину,Ялиною,Ялині,Ялино'), $this->object->q('Ялина'));
    }
    public function testCrazy319()
    { 
        $this->assertEquals(explode(',','Ярина,Ярини,Ярині,Ярину,Яриною,Ярині,Ярино'), $this->object->q('Ярина'));
    }
    public function testCrazy320()
    { 
        $this->assertEquals(explode(',','Яромила,Яромили,Яромилі,Яромилу,Яромилою,Яромилі,Яромило'), $this->object->q('Яромила'));
    }
    public function testCrazy321()
    { 
        $this->assertEquals(explode(',','Яромира,Яромири,Яромирі,Яромиру,Яромирою,Яромирі,Яромиро'), $this->object->q('Яромира'));
    }
    public function testCrazy322()
    { 
        $this->assertEquals(explode(',','Ярослава,Ярослави,Ярославі,Ярославу,Ярославою,Ярославі,Ярославо'), $this->object->q('Ярослава'));
    }
    public function testCrazy323()
    { 
        $this->assertEquals(explode(',','Ясна,Ясни,Ясні,Ясну,Ясною,Ясні,Ясно'), $this->object->q('Ясна'));
    }
    public function testCrazy324()
    { 
        $this->assertEquals(explode(',','Ясновида,Ясновиди,Ясновиді,Ясновиду,Ясновидою,Ясновиді,Ясновидо'), $this->object->q('Ясновида'));
    }
    public function testCrazy325()
    { 
        $this->assertEquals(explode(',','Ясногора,Ясногори,Ясногорі,Ясногору,Ясногорою,Ясногорі,Ясногоро'), $this->object->q('Ясногора'));
    }
    public function testCrazy326()
    { 
        $this->assertEquals(explode(',','Яснолика,Яснолики,Яснолиці,Яснолику,Ясноликою,Яснолиці,Яснолико'), $this->object->q('Яснолика'));
    }
    public function testCrazy327()
    { 
        $this->assertEquals(explode(',','Яснослава,Яснослави,Яснославі,Яснославу,Яснославою,Яснославі,Яснославо'), $this->object->q('Яснослава'));
    }

}