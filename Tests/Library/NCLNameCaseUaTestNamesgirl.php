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


    public function testNameWoman0()
    {
        $this->object->setFirstName('Августа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Августа,Августи,Августі,Августу,Августою,Августі,Августо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman1()
    {
        $this->object->setFirstName('Аврелія');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аврелія,Аврелії,Аврелії,Аврелію,Аврелією,Аврелії,Авреліє'), $this->object->getFirstNameCase());
    }
    public function testNameWoman2()
    {
        $this->object->setFirstName('Аврора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аврора,Аврори,Аврорі,Аврору,Авророю,Аврорі,Авроро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman3()
    {
        $this->object->setFirstName('Агнія');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агнія,Агнії,Агнії,Агнію,Агнією,Агнії,Агніє'), $this->object->getFirstNameCase());
    }
    public function testNameWoman4()
    {
        $this->object->setFirstName('Агрипина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агрипина,Агрипини,Агрипині,Агрипину,Агрипиною,Агрипині,Агрипино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman5()
    {
        $this->object->setFirstName('Ада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ада,Ади,Аді,Аду,Адою,Аді,Адо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman6()
    {
        $this->object->setFirstName('Аделаїда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаїда,Аделаїди,Аделаїді,Аделаїду,Аделаїдою,Аделаїді,Аделаїдо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman7()
    {
        $this->object->setFirstName('Адріана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Адріана,Адріани,Адріані,Адріану,Адріаною,Адріані,Адріано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman8()
    {
        $this->object->setFirstName('Аза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аза,Ази,Азі,Азу,Азою,Азі,Азо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman9()
    {
        $this->object->setFirstName('Азалія');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азалія,Азалії,Азалії,Азалію,Азалією,Азалії,Азаліє'), $this->object->getFirstNameCase());
    }
    public function testNameWoman10()
    {
        $this->object->setFirstName('Аліна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аліна,Аліни,Аліні,Аліну,Аліною,Аліні,Аліно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman11()
    {
        $this->object->setFirstName('Аліса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аліса,Аліси,Алісі,Алісу,Алісою,Алісі,Алісо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman12()
    {
        $this->object->setFirstName('Алла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алла,Алли,Аллі,Аллу,Аллою,Аллі,Алло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman13()
    {
        $this->object->setFirstName('Альбертина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбертина,Альбертини,Альбертині,Альбертину,Альбертиною,Альбертині,Альбертино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman14()
    {
        $this->object->setFirstName('Альбіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбіна,Альбіни,Альбіні,Альбіну,Альбіною,Альбіні,Альбіно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman15()
    {
        $this->object->setFirstName('Альвіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альвіна,Альвіни,Альвіні,Альвіну,Альвіною,Альвіні,Альвіно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman16()
    {
        $this->object->setFirstName('Анастасія');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасія,Анастасії,Анастасії,Анастасію,Анастасією,Анастасії,Анастасіє'), $this->object->getFirstNameCase());
    }
    public function testNameWoman17()
    {
        $this->object->setFirstName('Ангеліна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ангеліна,Ангеліни,Ангеліні,Ангеліну,Ангеліною,Ангеліні,Ангеліно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman18()
    {
        $this->object->setFirstName('Анжела');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжела,Анжели,Анжелі,Анжелу,Анжелою,Анжелі,Анжело'), $this->object->getFirstNameCase());
    }
    public function testNameWoman19()
    {
        $this->object->setFirstName('Антоніна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антоніна,Антоніни,Антоніні,Антоніну,Антоніною,Антоніні,Антоніно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman20()
    {
        $this->object->setFirstName('Анфіса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анфіса,Анфіси,Анфісі,Анфісу,Анфісою,Анфісі,Анфісо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman21()
    {
        $this->object->setFirstName('Аріадна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аріадна,Аріадни,Аріадні,Аріадну,Аріадною,Аріадні,Аріадно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman22()
    {
        $this->object->setFirstName('Арсена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Арсена,Арсени,Арсені,Арсену,Арсеною,Арсені,Арсено'), $this->object->getFirstNameCase());
    }
    public function testNameWoman23()
    {
        $this->object->setFirstName('Ася');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ася,Асі,Асі,Асю,Асею,Асі,Асе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman24()
    {
        $this->object->setFirstName('Афіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Афіна,Афіни,Афіні,Афіну,Афіною,Афіні,Афіно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman25()
    {
        $this->object->setFirstName('Афродіта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Афродіта,Афродіти,Афродіті,Афродіту,Афродітою,Афродіті,Афродіто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman26()
    {
        $this->object->setFirstName('Бажана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бажана,Бажани,Бажані,Бажану,Бажаною,Бажані,Бажано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman27()
    {
        $this->object->setFirstName('Берегиня');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Берегиня,Берегині,Берегині,Берегиню,Берегинею,Берегині,Берегине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman28()
    {
        $this->object->setFirstName('Біловида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Біловида,Біловиди,Біловиді,Біловиду,Біловидою,Біловиді,Біловидо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman29()
    {
        $this->object->setFirstName('Біломира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Біломира,Біломири,Біломирі,Біломиру,Біломирою,Біломирі,Біломиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman30()
    {
        $this->object->setFirstName('Білослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Білослава,Білослави,Білославі,Білославу,Білославою,Білославі,Білославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman31()
    {
        $this->object->setFirstName('Біляна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Біляна,Біляни,Біляні,Біляну,Біляною,Біляні,Біляно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman32()
    {
        $this->object->setFirstName('Благиня');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Благиня,Благині,Благині,Благиню,Благинею,Благині,Благине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman33()
    {
        $this->object->setFirstName('Благовида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Благовида,Благовиди,Благовиді,Благовиду,Благовидою,Благовиді,Благовидо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman34()
    {
        $this->object->setFirstName('Благовіра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Благовіра,Благовіри,Благовірі,Благовіру,Благовірою,Благовірі,Благовіро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman35()
    {
        $this->object->setFirstName('Благовіста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Благовіста,Благовісти,Благовісті,Благовісту,Благовістою,Благовісті,Благовісто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman36()
    {
        $this->object->setFirstName('Благослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Благослава,Благослави,Благославі,Благославу,Благославою,Благославі,Благославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman37()
    {
        $this->object->setFirstName('Богдана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богдана,Богдани,Богдані,Богдану,Богданою,Богдані,Богдано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman38()
    {
        $this->object->setFirstName('Боговіра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боговіра,Боговіри,Боговірі,Боговіру,Боговірою,Боговірі,Боговіро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman39()
    {
        $this->object->setFirstName('Боговіста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боговіста,Боговісти,Боговісті,Боговісту,Боговістою,Боговісті,Боговісто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman40()
    {
        $this->object->setFirstName('Богодара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богодара,Богодари,Богодарі,Богодару,Богодарою,Богодарі,Богодаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman41()
    {
        $this->object->setFirstName('Боголіпа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боголіпа,Боголіпи,Боголіпі,Боголіпу,Боголіпою,Боголіпі,Боголіпо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman42()
    {
        $this->object->setFirstName('Боголюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боголюба,Боголюби,Боголюбі,Боголюбу,Боголюбою,Боголюбі,Боголюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman43()
    {
        $this->object->setFirstName('Богосвята');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богосвята,Богосвяти,Богосвяті,Богосвяту,Богосвятою,Богосвяті,Богосвято'), $this->object->getFirstNameCase());
    }
    public function testNameWoman44()
    {
        $this->object->setFirstName('Богумила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богумила,Богумили,Богумилі,Богумилу,Богумилою,Богумилі,Богумило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman45()
    {
        $this->object->setFirstName('Богумира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богумира,Богумири,Богумирі,Богумиру,Богумирою,Богумирі,Богумиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman46()
    {
        $this->object->setFirstName('Богуслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богуслава,Богуслави,Богуславі,Богуславу,Богуславою,Богуславі,Богуславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman47()
    {
        $this->object->setFirstName('Божедана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божедана,Божедани,Божедані,Божедану,Божеданою,Божедані,Божедано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman48()
    {
        $this->object->setFirstName('Божедара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божедара,Божедари,Божедарі,Божедару,Божедарою,Божедарі,Божедаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman49()
    {
        $this->object->setFirstName('Божемила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божемила,Божемили,Божемилі,Божемилу,Божемилою,Божемилі,Божемило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman50()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божени,Божені,Божену,Боженою,Божені,Божено'), $this->object->getFirstNameCase());
    }
    public function testNameWoman51()
    {
        $this->object->setFirstName('Божиця');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божиця,Божиці,Божиці,Божицю,Божицею,Божиці,Божице'), $this->object->getFirstNameCase());
    }
    public function testNameWoman52()
    {
        $this->object->setFirstName('Болеслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Болеслава,Болеслави,Болеславі,Болеславу,Болеславою,Болеславі,Болеславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman53()
    {
        $this->object->setFirstName('Борислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борислава,Борислави,Бориславі,Бориславу,Бориславою,Бориславі,Бориславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman54()
    {
        $this->object->setFirstName('Боронислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боронислава,Боронислави,Борониславі,Борониславу,Борониславою,Борониславі,Борониславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman55()
    {
        $this->object->setFirstName('Братолюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Братолюба,Братолюби,Братолюбі,Братолюбу,Братолюбою,Братолюбі,Братолюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman56()
    {
        $this->object->setFirstName('Братомила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Братомила,Братомили,Братомилі,Братомилу,Братомилою,Братомилі,Братомило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman57()
    {
        $this->object->setFirstName('Брячислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Брячислава,Брячислави,Брячиславі,Брячиславу,Брячиславою,Брячиславі,Брячиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman58()
    {
        $this->object->setFirstName('Будана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Будана,Будани,Будані,Будану,Буданою,Будані,Будано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman59()
    {
        $this->object->setFirstName('Будимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Будимира,Будимири,Будимирі,Будимиру,Будимирою,Будимирі,Будимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman60()
    {
        $this->object->setFirstName('Будислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Будислава,Будислави,Будиславі,Будиславу,Будиславою,Будиславі,Будиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman61()
    {
        $this->object->setFirstName('Ведана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ведана,Ведани,Ведані,Ведану,Веданою,Ведані,Ведано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman62()
    {
        $this->object->setFirstName('Велимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Велимира,Велимири,Велимирі,Велимиру,Велимирою,Велимирі,Велимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman63()
    {
        $this->object->setFirstName('Вербава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вербава,Вербави,Вербаві,Вербаву,Вербавою,Вербаві,Вербаво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman64()
    {
        $this->object->setFirstName('Верхуслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Верхуслава,Верхуслави,Верхуславі,Верхуславу,Верхуславою,Верхуславі,Верхуславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman65()
    {
        $this->object->setFirstName('Веселина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Веселина,Веселини,Веселині,Веселину,Веселиною,Веселині,Веселино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman66()
    {
        $this->object->setFirstName('Веселка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Веселка,Веселки,Веселці,Веселку,Веселкою,Веселці,Веселко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman67()
    {
        $this->object->setFirstName('Весна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Весна,Весни,Весні,Весну,Весною,Весні,Весно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman68()
    {
        $this->object->setFirstName('Вишена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вишена,Вишени,Вишені,Вишену,Вишеною,Вишені,Вишено'), $this->object->getFirstNameCase());
    }
    public function testNameWoman69()
    {
        $this->object->setFirstName('Вишеслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вишеслава,Вишеслави,Вишеславі,Вишеславу,Вишеславою,Вишеславі,Вишеславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman70()
    {
        $this->object->setFirstName('Вишня');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вишня,Вишні,Вишні,Вишню,Вишнею,Вишні,Вишне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman71()
    {
        $this->object->setFirstName('Віра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Віра,Віри,Вірі,Віру,Вірою,Вірі,Віро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman72()
    {
        $this->object->setFirstName('Віродана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Віродана,Віродани,Віродані,Віродану,Віроданою,Віродані,Віродано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman73()
    {
        $this->object->setFirstName('Віродара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Віродара,Віродари,Віродарі,Віродару,Віродарою,Віродарі,Віродаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman74()
    {
        $this->object->setFirstName('Вірослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вірослава,Вірослави,Вірославі,Вірославу,Вірославою,Вірославі,Вірославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman75()
    {
        $this->object->setFirstName('Віста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Віста,Вісти,Вісті,Вісту,Вістою,Вісті,Вісто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman76()
    {
        $this->object->setFirstName('Вістуна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вістуна,Вістуни,Вістуні,Вістуну,Вістуною,Вістуні,Вістуно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman77()
    {
        $this->object->setFirstName('Вітана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вітана,Вітани,Вітані,Вітану,Вітаною,Вітані,Вітано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman78()
    {
        $this->object->setFirstName('Влада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Влада,Влади,Владі,Владу,Владою,Владі,Владо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman79()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владислави,Владиславі,Владиславу,Владиславою,Владиславі,Владиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman80()
    {
        $this->object->setFirstName('Власта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Власта,Власти,Власті,Власту,Властою,Власті,Власто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman81()
    {
        $this->object->setFirstName('Вогнедара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вогнедара,Вогнедари,Вогнедарі,Вогнедару,Вогнедарою,Вогнедарі,Вогнедаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman82()
    {
        $this->object->setFirstName('Вогняна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вогняна,Вогняни,Вогняні,Вогняну,Вогняною,Вогняні,Вогняно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman83()
    {
        $this->object->setFirstName('Волелюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Волелюба,Волелюби,Волелюбі,Волелюбу,Волелюбою,Волелюбі,Волелюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman84()
    {
        $this->object->setFirstName('Володимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Володимира,Володимири,Володимирі,Володимиру,Володимирою,Володимирі,Володимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman85()
    {
        $this->object->setFirstName('Волошка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Волошка,Волошки,Волошці,Волошку,Волошкою,Волошці,Волошко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman86()
    {
        $this->object->setFirstName('Воля');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воля,Волі,Волі,Волю,Волею,Волі,Воле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman87()
    {
        $this->object->setFirstName('Всеволода');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Всеволода,Всеволоди,Всеволоді,Всеволоду,Всеволодою,Всеволоді,Всеволодо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman88()
    {
        $this->object->setFirstName('Вселюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вселюба,Вселюби,Вселюбі,Вселюбу,Вселюбою,Вселюбі,Вселюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman89()
    {
        $this->object->setFirstName('Всемира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Всемира,Всемири,Всемирі,Всемиру,Всемирою,Всемирі,Всемиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman90()
    {
        $this->object->setFirstName('Всеслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Всеслава,Всеслави,Всеславі,Всеславу,Всеславою,Всеславі,Всеславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman91()
    {
        $this->object->setFirstName('В’ячеслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','В’ячеслава,В’ячеслави,В’ячеславі,В’ячеславу,В’ячеславою,В’ячеславі,В’ячеславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman92()
    {
        $this->object->setFirstName('Гаїна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гаїна,Гаїни,Гаїні,Гаїну,Гаїною,Гаїні,Гаїно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman93()
    {
        $this->object->setFirstName('Гатусила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гатусила,Гатусили,Гатусилі,Гатусилу,Гатусилою,Гатусилі,Гатусило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman94()
    {
        $this->object->setFirstName('Гарнослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гарнослава,Гарнослави,Гарнославі,Гарнославу,Гарнославою,Гарнославі,Гарнославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman95()
    {
        $this->object->setFirstName('Голубка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Голубка,Голубки,Голубці,Голубку,Голубкою,Голубці,Голубко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman96()
    {
        $this->object->setFirstName('Горигляда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горигляда,Горигляди,Горигляді,Горигляду,Гориглядою,Горигляді,Гориглядо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman97()
    {
        $this->object->setFirstName('Горислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горислава,Горислави,Гориславі,Гориславу,Гориславою,Гориславі,Гориславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman98()
    {
        $this->object->setFirstName('Городислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Городислава,Городислави,Городиславі,Городиславу,Городиславою,Городиславі,Городиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman99()
    {
        $this->object->setFirstName('Гострозора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гострозора,Гострозори,Гострозорі,Гострозору,Гострозорою,Гострозорі,Гострозоро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman100()
    {
        $this->object->setFirstName('Градислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Градислава,Градислави,Градиславі,Градиславу,Градиславою,Градиславі,Градиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman101()
    {
        $this->object->setFirstName('Гранислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гранислава,Гранислави,Граниславі,Граниславу,Граниславою,Граниславі,Граниславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman102()
    {
        $this->object->setFirstName('Гремислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гремислава,Гремислави,Гремиславі,Гремиславу,Гремиславою,Гремиславі,Гремиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman103()
    {
        $this->object->setFirstName('Далібора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Далібора,Далібори,Даліборі,Далібору,Даліборою,Даліборі,Даліборо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman104()
    {
        $this->object->setFirstName('Дана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дана,Дани,Дані,Дану,Даною,Дані,Дано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman105()
    {
        $this->object->setFirstName('Дарина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарина,Дарини,Дарині,Дарину,Дариною,Дарині,Дарино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman106()
    {
        $this->object->setFirstName('Дзвенимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дзвенимира,Дзвенимири,Дзвенимирі,Дзвенимиру,Дзвенимирою,Дзвенимирі,Дзвенимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman107()
    {
        $this->object->setFirstName('Дзвенислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дзвенислава,Дзвенислави,Дзвениславі,Дзвениславу,Дзвениславою,Дзвениславі,Дзвениславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman108()
    {
        $this->object->setFirstName('Дзвінка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дзвінка,Дзвінки,Дзвінці,Дзвінку,Дзвінкою,Дзвінці,Дзвінко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman109()
    {
        $this->object->setFirstName('Діяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Діяна,Діяни,Діяні,Діяну,Діяною,Діяні,Діяно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman110()
    {
        $this->object->setFirstName('Добринка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Добринка,Добринки,Добринці,Добринку,Добринкою,Добринці,Добринко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman111()
    {
        $this->object->setFirstName('Добровіста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Добровіста,Добровісти,Добровісті,Добровісту,Добровістою,Добровісті,Добровісто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman112()
    {
        $this->object->setFirstName('Доброгніва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Доброгніва,Доброгніви,Доброгніві,Доброгніву,Доброгнівою,Доброгніві,Доброгніво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman113()
    {
        $this->object->setFirstName('Добролюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Добролюба,Добролюби,Добролюбі,Добролюбу,Добролюбою,Добролюбі,Добролюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman114()
    {
        $this->object->setFirstName('Добромила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Добромила,Добромили,Добромилі,Добромилу,Добромилою,Добромилі,Добромило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman115()
    {
        $this->object->setFirstName('Добромира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Добромира,Добромири,Добромирі,Добромиру,Добромирою,Добромирі,Добромиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman116()
    {
        $this->object->setFirstName('Доброніга');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Доброніга,Доброноги,Добронозі,Доброногу,Доброногою,Добронозі,Доброного'), $this->object->getFirstNameCase());
    }
    public function testNameWoman117()
    {
        $this->object->setFirstName('Доброслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Доброслава,Доброслави,Доброславі,Доброславу,Доброславою,Доброславі,Доброславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman118()
    {
        $this->object->setFirstName('Долина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Долина,Долини,Долині,Долину,Долиною,Долині,Долино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman119()
    {
        $this->object->setFirstName('Доля');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Доля,Долі,Долі,Долю,Долею,Долі,Доле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman120()
    {
        $this->object->setFirstName('Домаха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Домаха,Домахи,Домасі,Домаху,Домахою,Домасі,Домахо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman121()
    {
        $this->object->setFirstName('Доморада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Доморада,Доморади,Домораді,Домораду,Доморадою,Домораді,Доморадо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman122()
    {
        $this->object->setFirstName('Дружелюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дружелюба,Дружелюби,Дружелюбі,Дружелюбу,Дружелюбою,Дружелюбі,Дружелюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman123()
    {
        $this->object->setFirstName('Жадана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жадана,Жадани,Жадані,Жадану,Жаданою,Жадані,Жадано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman124()
    {
        $this->object->setFirstName('Ждана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ждана,Ждани,Ждані,Ждану,Жданою,Ждані,Ждано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman125()
    {
        $this->object->setFirstName('Живосила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Живосила,Живосили,Живосилі,Живосилу,Живосилою,Живосилі,Живосило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman126()
    {
        $this->object->setFirstName('Живослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Живослава,Живослави,Живославі,Живославу,Живославою,Живославі,Живославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman127()
    {
        $this->object->setFirstName('Житомира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Житомира,Житомири,Житомирі,Житомиру,Житомирою,Житомирі,Житомиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman128()
    {
        $this->object->setFirstName('Життєлюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Життєлюба,Життєлюби,Життєлюбі,Життєлюбу,Життєлюбою,Життєлюбі,Життєлюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman129()
    {
        $this->object->setFirstName('Забава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Забава,Забави,Забаві,Забаву,Забавою,Забаві,Забаво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman130()
    {
        $this->object->setFirstName('Звенигора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Звенигора,Звенигори,Звенигорі,Звенигору,Звенигорою,Звенигорі,Звенигоро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman131()
    {
        $this->object->setFirstName('Звенислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Звенислава,Звенислави,Звениславі,Звениславу,Звениславою,Звениславі,Звениславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman132()
    {
        $this->object->setFirstName('Звонимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Звонимира,Звонимири,Звонимирі,Звонимиру,Звонимирою,Звонимирі,Звонимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman133()
    {
        $this->object->setFirstName('Зірка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зірка,Зірки,Зірці,Зірку,Зіркою,Зірці,Зірко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman134()
    {
        $this->object->setFirstName('Злата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Злата,Злати,Златі,Злату,Златою,Златі,Злато'), $this->object->getFirstNameCase());
    }
    public function testNameWoman135()
    {
        $this->object->setFirstName('Златомира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Златомира,Златомири,Златомирі,Златомиру,Златомирою,Златомирі,Златомиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman136()
    {
        $this->object->setFirstName('Златоуста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Златоуста,Златоусти,Златоусті,Златоусту,Златоустою,Златоусті,Златоусто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman137()
    {
        $this->object->setFirstName('Золотодана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Золотодана,Золотодани,Золотодані,Золотодану,Золотоданою,Золотодані,Золотодано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman138()
    {
        $this->object->setFirstName('Зорегляда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зорегляда,Зорегляди,Зорегляді,Зорегляду,Зореглядою,Зорегляді,Зореглядо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman139()
    {
        $this->object->setFirstName('Зореслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зореслава,Зореслави,Зореславі,Зореславу,Зореславою,Зореславі,Зореславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman140()
    {
        $this->object->setFirstName('Зорина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зорина,Зорини,Зорині,Зорину,Зориною,Зорині,Зорино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman141()
    {
        $this->object->setFirstName('Зоря');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоря,Зорі,Зорі,Зорю,Зорею,Зорі,Зоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman142()
    {
        $this->object->setFirstName('Зоряна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоряна,Зоряни,Зоряні,Зоряну,Зоряною,Зоряні,Зоряно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman143()
    {
        $this->object->setFirstName('Казка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Казка,Казки,Казці,Казку,Казкою,Казці,Казко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman144()
    {
        $this->object->setFirstName('Калина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Калина,Калини,Калині,Калину,Калиною,Калині,Калино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman145()
    {
        $this->object->setFirstName('Квітка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Квітка,Квітки,Квітці,Квітку,Квіткою,Квітці,Квітко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman146()
    {
        $this->object->setFirstName('Колодара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Колодара,Колодари,Колодарі,Колодару,Колодарою,Колодарі,Колодаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman147()
    {
        $this->object->setFirstName('Красава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Красава,Красави,Красаві,Красаву,Красавою,Красаві,Красаво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman148()
    {
        $this->object->setFirstName('Красимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Красимира,Красимири,Красимирі,Красимиру,Красимирою,Красимирі,Красимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman149()
    {
        $this->object->setFirstName('Красновида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Красновида,Красновиди,Красновиді,Красновиду,Красновидою,Красновиді,Красновидо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman150()
    {
        $this->object->setFirstName('Краснолика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Краснолика,Краснолики,Краснолиці,Краснолику,Красноликою,Краснолиці,Краснолико'), $this->object->getFirstNameCase());
    }
    public function testNameWoman151()
    {
        $this->object->setFirstName('Красуня');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Красуня,Красуні,Красуні,Красуню,Красунею,Красуні,Красуне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman152()
    {
        $this->object->setFirstName('Купава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Купава,Купави,Купаві,Купаву,Купавою,Купаві,Купаво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman153()
    {
        $this->object->setFirstName('Лада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лада,Лади,Ладі,Ладу,Ладою,Ладі,Ладо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman154()
    {
        $this->object->setFirstName('Ладислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ладислава,Ладислави,Ладиславі,Ладиславу,Ладиславою,Ладиславі,Ладиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman155()
    {
        $this->object->setFirstName('Ладомила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ладомила,Ладомили,Ладомилі,Ладомилу,Ладомилою,Ладомилі,Ладомило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman156()
    {
        $this->object->setFirstName('Ладомира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ладомира,Ладомири,Ладомирі,Ладомиру,Ладомирою,Ладомирі,Ладомиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman157()
    {
        $this->object->setFirstName('Левина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Левина,Левини,Левині,Левину,Левиною,Левині,Левино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman158()
    {
        $this->object->setFirstName('Лель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лель,Лелі,Лелі,Лель,Леллю,Лелі,Леле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman159()
    {
        $this->object->setFirstName('Леля');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леля,Лелі,Лелі,Лелю,Лелею,Лелі,Леле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman160()
    {
        $this->object->setFirstName('Леся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леся,Лесі,Лесі,Лесю,Лесею,Лесі,Лесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman161()
    {
        $this->object->setFirstName('Либідь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Либідь,Либіді,Либіді,Либідь,Либіддю,Либіді,Либіде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman162()
    {
        $this->object->setFirstName('Лілея');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лілея,Лілеї,Лілеї,Лілею,Лілеєю,Лілеї,Лілеє'), $this->object->getFirstNameCase());
    }
    public function testNameWoman163()
    {
        $this->object->setFirstName('Лоліта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лоліта,Лоліти,Лоліті,Лоліту,Лолітою,Лоліті,Лоліто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman164()
    {
        $this->object->setFirstName('Любава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любава,Любави,Любаві,Любаву,Любавою,Любаві,Любаво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman165()
    {
        $this->object->setFirstName('Любаня');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любаня,Любані,Любані,Любаню,Любанею,Любані,Любане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman166()
    {
        $this->object->setFirstName('Любислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любислава,Любислави,Любиславі,Любиславу,Любиславою,Любиславі,Любиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman167()
    {
        $this->object->setFirstName('Любов');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любов,Любові,Любові,Любов,Любов’ю,Любові,Любове'), $this->object->getFirstNameCase());
    }
    public function testNameWoman168()
    {
        $this->object->setFirstName('Любомила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любомила,Любомили,Любомилі,Любомилу,Любомилою,Любомилі,Любомило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman169()
    {
        $this->object->setFirstName('Любомира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любомира,Любомири,Любомирі,Любомиру,Любомирою,Любомирі,Любомиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman170()
    {
        $this->object->setFirstName('Люборада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Люборада,Люборади,Любораді,Любораду,Люборадою,Любораді,Люборадо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman171()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людмила,Людмили,Людмилі,Людмилу,Людмилою,Людмилі,Людмило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman172()
    {
        $this->object->setFirstName('Людомила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людомила,Людомили,Людомилі,Людомилу,Людомилою,Людомилі,Людомило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman173()
    {
        $this->object->setFirstName('Любослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любослава,Любослави,Любославі,Любославу,Любославою,Любославі,Любославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman174()
    {
        $this->object->setFirstName('Льоля');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Льоля,Льолі,Льолі,Льолю,Льолею,Льолі,Льоле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman175()
    {
        $this->object->setFirstName('Мавка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мавка,Мавки,Мавці,Мавку,Мавкою,Мавці,Мавко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman176()
    {
        $this->object->setFirstName('Магадара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Магадара,Магадари,Магадарі,Магадару,Магадарою,Магадарі,Магадаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman177()
    {
        $this->object->setFirstName('Маїна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маїна,Маїни,Маїні,Маїну,Маїною,Маїні,Маїно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman178()
    {
        $this->object->setFirstName('Маківка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маківка,Маківки,Маківці,Маківку,Маківкою,Маківці,Маківко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman179()
    {
        $this->object->setFirstName('Малуня');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малуня,Малуні,Малуні,Малуню,Малунею,Малуні,Малуне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman180()
    {
        $this->object->setFirstName('Малуша');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малуша,Малуши,Малуші,Малушу,Малушою,Малуші,Малушо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman181()
    {
        $this->object->setFirstName('Мальва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мальва,Мальви,Мальві,Мальву,Мальвою,Мальві,Мальво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman182()
    {
        $this->object->setFirstName('Марута');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марута,Марути,Маруті,Маруту,Марутою,Маруті,Маруто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman183()
    {
        $this->object->setFirstName('Мая');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мая,Маї,Маї,Маю,Маєю,Маї,Має'), $this->object->getFirstNameCase());
    }
    public function testNameWoman184()
    {
        $this->object->setFirstName('Медорада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Медорада,Медоради,Медораді,Медораду,Медорадою,Медораді,Медорадо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman185()
    {
        $this->object->setFirstName('Мечислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мечислава,Мечислави,Мечиславі,Мечиславу,Мечиславою,Мечиславі,Мечиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman186()
    {
        $this->object->setFirstName('Милана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милана,Милани,Милані,Милану,Миланою,Милані,Милано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman187()
    {
        $this->object->setFirstName('Милована');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милована,Миловани,Миловані,Миловану,Милованою,Миловані,Миловано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman188()
    {
        $this->object->setFirstName('Миловида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Миловида,Миловиди,Миловиді,Миловиду,Миловидою,Миловиді,Миловидо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman189()
    {
        $this->object->setFirstName('Милодара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милодара,Милодари,Милодарі,Милодару,Милодарою,Милодарі,Милодаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman190()
    {
        $this->object->setFirstName('Милослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милослава,Милослави,Милославі,Милославу,Милославою,Милославі,Милославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman191()
    {
        $this->object->setFirstName('Мирана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мирана,Мирани,Мирані,Мирану,Мираною,Мирані,Мирано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman192()
    {
        $this->object->setFirstName('Миробога');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Миробога,Миробоги,Миробозі,Миробогу,Миробогою,Миробозі,Миробого'), $this->object->getFirstNameCase());
    }
    public function testNameWoman193()
    {
        $this->object->setFirstName('Миролюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Миролюба,Миролюби,Миролюбі,Миролюбу,Миролюбою,Миролюбі,Миролюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman194()
    {
        $this->object->setFirstName('Мирослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мирослава,Мирослави,Мирославі,Мирославу,Мирославою,Мирославі,Мирославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman195()
    {
        $this->object->setFirstName('Млада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Млада,Млади,Младі,Младу,Младою,Младі,Младо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman196()
    {
        $this->object->setFirstName('Мокрина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мокрина,Мокрини,Мокрині,Мокрину,Мокриною,Мокрині,Мокрино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman197()
    {
        $this->object->setFirstName('Мстислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мстислава,Мстислави,Мстиславі,Мстиславу,Мстиславою,Мстиславі,Мстиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman198()
    {
        $this->object->setFirstName('Мудролюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мудролюба,Мудролюби,Мудролюбі,Мудролюбу,Мудролюбою,Мудролюбі,Мудролюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman199()
    {
        $this->object->setFirstName('Надія');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надія,Надії,Надії,Надію,Надією,Надії,Надіє'), $this->object->getFirstNameCase());
    }
    public function testNameWoman200()
    {
        $this->object->setFirstName('Найда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Найда,Найди,Найді,Найду,Найдою,Найді,Найдо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman201()
    {
        $this->object->setFirstName('Найдена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Найдена,Найдени,Найдені,Найдену,Найденою,Найдені,Найдено'), $this->object->getFirstNameCase());
    }
    public function testNameWoman202()
    {
        $this->object->setFirstName('Наслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наслава,Наслави,Наславі,Наславу,Наславою,Наславі,Наславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman203()
    {
        $this->object->setFirstName('Немира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Немира,Немири,Немирі,Немиру,Немирою,Немирі,Немиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman204()
    {
        $this->object->setFirstName('Нігослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нігослава,Нігослави,Нігославі,Нігославу,Нігославою,Нігославі,Нігославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman205()
    {
        $this->object->setFirstName('Незабудка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Незабудка,Незабудки,Незабудці,Незабудку,Незабудкою,Незабудці,Незабудко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman206()
    {
        $this->object->setFirstName('Огняна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Огняна,Огняни,Огняні,Огняну,Огняною,Огняні,Огняно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman207()
    {
        $this->object->setFirstName('Оримира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оримира,Оримири,Оримирі,Оримиру,Оримирою,Оримирі,Оримиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman208()
    {
        $this->object->setFirstName('Орина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Орина,Орини,Орині,Орину,Ориною,Орині,Орино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman209()
    {
        $this->object->setFirstName('Орислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Орислава,Орислави,Ориславі,Ориславу,Ориславою,Ориславі,Ориславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman210()
    {
        $this->object->setFirstName('Орися');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Орися,Орисі,Орисі,Орисю,Орисею,Орисі,Орисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman211()
    {
        $this->object->setFirstName('Оріяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оріяна,Оріяни,Оріяні,Оріяну,Оріяною,Оріяні,Оріяно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman212()
    {
        $this->object->setFirstName('Орогоста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Орогоста,Орогости,Орогості,Орогосту,Орогостою,Орогості,Орогосто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman213()
    {
        $this->object->setFirstName('Острозора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Острозора,Острозори,Острозорі,Острозору,Острозорою,Острозорі,Острозоро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman214()
    {
        $this->object->setFirstName('Остромира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Остромира,Остромири,Остромирі,Остромиру,Остромирою,Остромирі,Остромиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman215()
    {
        $this->object->setFirstName('Осмомисла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Осмомисла,Осмомисли,Осмомислі,Осмомислу,Осмомислою,Осмомислі,Осмомисло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman216()
    {
        $this->object->setFirstName('Остромова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Остромова,Остромови,Остромові,Остромову,Остромовою,Остромові,Остромово'), $this->object->getFirstNameCase());
    }
    public function testNameWoman217()
    {
        $this->object->setFirstName('Пава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пава,Пави,Паві,Паву,Павою,Паві,Паво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman218()
    {
        $this->object->setFirstName('Палажка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Палажка,Палажки,Палажці,Палажку,Палажкою,Палажці,Палажко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman219()
    {
        $this->object->setFirstName('Палазга');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Палазга,Палазги,Палаззі,Палазгу,Палазгою,Палаззі,Палазго'), $this->object->getFirstNameCase());
    }
    public function testNameWoman220()
    {
        $this->object->setFirstName('Перелюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Перелюба,Перелюби,Перелюбі,Перелюбу,Перелюбою,Перелюбі,Перелюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman221()
    {
        $this->object->setFirstName('Перемила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Перемила,Перемили,Перемилі,Перемилу,Перемилою,Перемилі,Перемило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman222()
    {
        $this->object->setFirstName('Перемисла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Перемисла,Перемисли,Перемислі,Перемислу,Перемислою,Перемислі,Перемисло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman223()
    {
        $this->object->setFirstName('Півонія');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Півонія,Півонії,Півонії,Півонію,Півонією,Півонії,Півоніє'), $this->object->getFirstNameCase());
    }
    public function testNameWoman224()
    {
        $this->object->setFirstName('Позвізда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Позвізда,Позвізди,Позвізді,Позвізду,Позвіздою,Позвізді,Позвіздо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman225()
    {
        $this->object->setFirstName('Полеза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полеза,Полези,Полезі,Полезу,Полезою,Полезі,Полезо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman226()
    {
        $this->object->setFirstName('Поляна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Поляна,Поляни,Поляні,Поляну,Поляною,Поляні,Поляно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman227()
    {
        $this->object->setFirstName('Потішана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Потішана,Потішани,Потішані,Потішану,Потішаною,Потішані,Потішано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman228()
    {
        $this->object->setFirstName('Предслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Предслава,Предслави,Предславі,Предславу,Предславою,Предславі,Предславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman229()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Ради,Раді,Раду,Радою,Раді,Радо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman230()
    {
        $this->object->setFirstName('Радана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Радана,Радани,Радані,Радану,Раданою,Радані,Радано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman231()
    {
        $this->object->setFirstName('Радимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Радимира,Радимири,Радимирі,Радимиру,Радимирою,Радимирі,Радимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman232()
    {
        $this->object->setFirstName('Радогоста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Радогоста,Радогости,Радогості,Радогосту,Радогостою,Радогості,Радогосто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman233()
    {
        $this->object->setFirstName('Радомира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Радомира,Радомири,Радомирі,Радомиру,Радомирою,Радомирі,Радомиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman234()
    {
        $this->object->setFirstName('Радослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Радослава,Радослави,Радославі,Радославу,Радославою,Радославі,Радославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman235()
    {
        $this->object->setFirstName('Рідна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рідна,Рідни,Рідні,Рідну,Рідною,Рідні,Рідно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman236()
    {
        $this->object->setFirstName('Рогволода');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рогволода,Рогволоди,Рогволоді,Рогволоду,Рогволодою,Рогволоді,Рогволодо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman237()
    {
        $this->object->setFirstName('Рогніда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рогніда,Рогніди,Рогніді,Рогніду,Рогнідою,Рогніді,Рогнідо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman238()
    {
        $this->object->setFirstName('Родослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Родослава,Родослави,Родославі,Родославу,Родославою,Родославі,Родославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman239()
    {
        $this->object->setFirstName('Рожана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рожана,Рожани,Рожані,Рожану,Рожаною,Рожані,Рожано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman240()
    {
        $this->object->setFirstName('Роксолана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Роксолана,Роксолани,Роксолані,Роксолану,Роксоланою,Роксолані,Роксолано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman241()
    {
        $this->object->setFirstName('Ромашка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ромашка,Ромашки,Ромашці,Ромашку,Ромашкою,Ромашці,Ромашко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman242()
    {
        $this->object->setFirstName('Росава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Росава,Росави,Росаві,Росаву,Росавою,Росаві,Росаво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman243()
    {
        $this->object->setFirstName('Росина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Росина,Росини,Росині,Росину,Росиною,Росині,Росино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman244()
    {
        $this->object->setFirstName('Ростислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ростислава,Ростислави,Ростиславі,Ростиславу,Ростиславою,Ростиславі,Ростиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman245()
    {
        $this->object->setFirstName('Ростичара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ростичара,Ростичари,Ростичарі,Ростичару,Ростичарою,Ростичарі,Ростичаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman246()
    {
        $this->object->setFirstName('Ростуня');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ростуня,Ростуні,Ростуні,Ростуню,Ростунею,Ростуні,Ростуне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman247()
    {
        $this->object->setFirstName('Рудана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рудана,Рудани,Рудані,Рудану,Руданою,Рудані,Рудано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman248()
    {
        $this->object->setFirstName('Ружа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ружа,Ружи,Ружі,Ружу,Ружою,Ружі,Ружо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman249()
    {
        $this->object->setFirstName('Русана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Русана,Русани,Русані,Русану,Русаною,Русані,Русано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman250()
    {
        $this->object->setFirstName('Русудана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Русудана,Русудани,Русудані,Русудану,Русуданою,Русудані,Русудано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman251()
    {
        $this->object->setFirstName('Русява');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Русява,Русяви,Русяві,Русяву,Русявою,Русяві,Русяво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman252()
    {
        $this->object->setFirstName('Русявка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Русявка,Русявки,Русявці,Русявку,Русявкою,Русявці,Русявко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman253()
    {
        $this->object->setFirstName('Рута');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рута,Рути,Руті,Руту,Рутою,Руті,Руто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman254()
    {
        $this->object->setFirstName('Світана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світана,Світани,Світані,Світану,Світаною,Світані,Світано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman255()
    {
        $this->object->setFirstName('Світлана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світлана,Світлани,Світлані,Світлану,Світланою,Світлані,Світлано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman256()
    {
        $this->object->setFirstName('Світовида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світовида,Світовиди,Світовиді,Світовиду,Світовидою,Світовиді,Світовидо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman257()
    {
        $this->object->setFirstName('Світогора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світогора,Світогори,Світогорі,Світогору,Світогорою,Світогорі,Світогоро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman258()
    {
        $this->object->setFirstName('Світодара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світодара,Світодари,Світодарі,Світодару,Світодарою,Світодарі,Світодаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman259()
    {
        $this->object->setFirstName('Світозара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світозара,Світозари,Світозарі,Світозару,Світозарою,Світозарі,Світозаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman260()
    {
        $this->object->setFirstName('Світолика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світолика,Світолики,Світолиці,Світолику,Світоликою,Світолиці,Світолико'), $this->object->getFirstNameCase());
    }
    public function testNameWoman261()
    {
        $this->object->setFirstName('Світолюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світолюба,Світолюби,Світолюбі,Світолюбу,Світолюбою,Світолюбі,Світолюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman262()
    {
        $this->object->setFirstName('Світослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світослава,Світослави,Світославі,Світославу,Світославою,Світославі,Світославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman263()
    {
        $this->object->setFirstName('Світояра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Світояра,Світояри,Світоярі,Світояру,Світоярою,Світоярі,Світояро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman264()
    {
        $this->object->setFirstName('Свободана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Свободана,Свободани,Свободані,Свободану,Свободаною,Свободані,Свободано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman265()
    {
        $this->object->setFirstName('Святогора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Святогора,Святогори,Святогорі,Святогору,Святогорою,Святогорі,Святогоро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman266()
    {
        $this->object->setFirstName('Святолюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Святолюба,Святолюби,Святолюбі,Святолюбу,Святолюбою,Святолюбі,Святолюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman267()
    {
        $this->object->setFirstName('Святослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Святослава,Святослави,Святославі,Святославу,Святославою,Святославі,Святославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman268()
    {
        $this->object->setFirstName('Силата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силата,Силати,Силаті,Силату,Силатою,Силаті,Силато'), $this->object->getFirstNameCase());
    }
    public function testNameWoman269()
    {
        $this->object->setFirstName('Силолюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силолюба,Силолюби,Силолюбі,Силолюбу,Силолюбою,Силолюбі,Силолюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman270()
    {
        $this->object->setFirstName('Силослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силослава,Силослави,Силославі,Силославу,Силославою,Силославі,Силославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman271()
    {
        $this->object->setFirstName('Синезора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Синезора,Синезори,Синезорі,Синезору,Синезорою,Синезорі,Синезоро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman272()
    {
        $this->object->setFirstName('Синьоока');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Синьоока,Синьооки,Синьооці,Синьооку,Синьоокою,Синьооці,Синьооко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman273()
    {
        $this->object->setFirstName('Сіверина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сіверина,Сіверини,Сіверині,Сіверину,Сівериною,Сіверині,Сіверино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman274()
    {
        $this->object->setFirstName('Слава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Слава,Слави,Славі,Славу,Славою,Славі,Славо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman275()
    {
        $this->object->setFirstName('Славина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Славина,Славини,Славині,Славину,Славиною,Славині,Славино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman276()
    {
        $this->object->setFirstName('Славолюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Славолюба,Славолюби,Славолюбі,Славолюбу,Славолюбою,Славолюбі,Славолюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman277()
    {
        $this->object->setFirstName('Славомила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Славомила,Славомили,Славомилі,Славомилу,Славомилою,Славомилі,Славомило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman278()
    {
        $this->object->setFirstName('Сміяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сміяна,Сміяни,Сміяні,Сміяну,Сміяною,Сміяні,Сміяно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman279()
    {
        $this->object->setFirstName('Сніжана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сніжана,Сніжани,Сніжані,Сніжану,Сніжаною,Сніжані,Сніжано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman280()
    {
        $this->object->setFirstName('Сніжинка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сніжинка,Сніжинки,Сніжинці,Сніжинку,Сніжинкою,Сніжинці,Сніжинко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman281()
    {
        $this->object->setFirstName('Собіслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Собіслава,Собіслави,Собіславі,Собіславу,Собіславою,Собіславі,Собіславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman282()
    {
        $this->object->setFirstName('Соловія');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соловія,Соловії,Соловії,Соловію,Соловією,Соловії,Соловіє'), $this->object->getFirstNameCase());
    }
    public function testNameWoman283()
    {
        $this->object->setFirstName('Сологуба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сологуба,Сологуби,Сологубі,Сологубу,Сологубою,Сологубі,Сологубо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman284()
    {
        $this->object->setFirstName('Сонцевида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сонцевида,Сонцевиди,Сонцевиді,Сонцевиду,Сонцевидою,Сонцевиді,Сонцевидо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman285()
    {
        $this->object->setFirstName('Сонцедара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сонцедара,Сонцедари,Сонцедарі,Сонцедару,Сонцедарою,Сонцедарі,Сонцедаро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman286()
    {
        $this->object->setFirstName('Сонцелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сонцелика,Сонцелики,Сонцелиці,Сонцелику,Сонцеликою,Сонцелиці,Сонцелико'), $this->object->getFirstNameCase());
    }
    public function testNameWoman287()
    {
        $this->object->setFirstName('Сонцеслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сонцеслава,Сонцеслави,Сонцеславі,Сонцеславу,Сонцеславою,Сонцеславі,Сонцеславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman288()
    {
        $this->object->setFirstName('Ссанимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ссанимира,Ссанимири,Ссанимирі,Ссанимиру,Ссанимирою,Ссанимирі,Ссанимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman289()
    {
        $this->object->setFirstName('Станислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Станислава,Станислави,Станиславі,Станиславу,Станиславою,Станиславі,Станиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman290()
    {
        $this->object->setFirstName('Судимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Судимира,Судимири,Судимирі,Судимиру,Судимирою,Судимирі,Судимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman291()
    {
        $this->object->setFirstName('Судислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Судислава,Судислави,Судиславі,Судиславу,Судиславою,Судиславі,Судиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman292()
    {
        $this->object->setFirstName('Татолюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татолюба,Татолюби,Татолюбі,Татолюбу,Татолюбою,Татолюбі,Татолюбо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman293()
    {
        $this->object->setFirstName('Твердислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Твердислава,Твердислави,Твердиславі,Твердиславу,Твердиславою,Твердиславі,Твердиславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman294()
    {
        $this->object->setFirstName('Твердогоста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Твердогоста,Твердогости,Твердогості,Твердогосту,Твердогостою,Твердогості,Твердогосто'), $this->object->getFirstNameCase());
    }
    public function testNameWoman295()
    {
        $this->object->setFirstName('Творимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Творимира,Творимири,Творимирі,Творимиру,Творимирою,Творимирі,Творимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman296()
    {
        $this->object->setFirstName('Творислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Творислава,Творислави,Твориславі,Твориславу,Твориславою,Твориславі,Твориславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman297()
    {
        $this->object->setFirstName('Толигніва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Толигніва,Толигніви,Толигніві,Толигніву,Толигнівою,Толигніві,Толигніво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman298()
    {
        $this->object->setFirstName('Тонкостана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тонкостана,Тонкостани,Тонкостані,Тонкостану,Тонкостаною,Тонкостані,Тонкостано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman299()
    {
        $this->object->setFirstName('Трояна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Трояна,Трояни,Трояні,Трояну,Трояною,Трояні,Трояно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman300()
    {
        $this->object->setFirstName('Хвала');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хвала,Хвали,Хвалі,Хвалу,Хвалою,Хвалі,Хвало'), $this->object->getFirstNameCase());
    }
    public function testNameWoman301()
    {
        $this->object->setFirstName('Хвалибого');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хвалибого,Хвалибого,Хвалибого,Хвалибого,Хвалибого,Хвалибого,Хвалибого'), $this->object->getFirstNameCase());
    }
    public function testNameWoman302()
    {
        $this->object->setFirstName('Хвалимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хвалимира,Хвалимири,Хвалимирі,Хвалимиру,Хвалимирою,Хвалимирі,Хвалимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman303()
    {
        $this->object->setFirstName('Хвалина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хвалина,Хвалини,Хвалині,Хвалину,Хвалиною,Хвалині,Хвалино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman304()
    {
        $this->object->setFirstName('Хорошка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хорошка,Хорошки,Хорошці,Хорошку,Хорошкою,Хорошці,Хорошко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman305()
    {
        $this->object->setFirstName('Хорошуня');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хорошуня,Хорошуні,Хорошуні,Хорошуню,Хорошунею,Хорошуні,Хорошуне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman306()
    {
        $this->object->setFirstName('Хотимра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хотимра,Хотимри,Хотимрі,Хотимру,Хотимрою,Хотимрі,Хотимро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman307()
    {
        $this->object->setFirstName('Хотяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хотяна,Хотяни,Хотяні,Хотяну,Хотяною,Хотяні,Хотяно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman308()
    {
        $this->object->setFirstName('Хранимира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хранимира,Хранимири,Хранимирі,Хранимиру,Хранимирою,Хранимирі,Хранимиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman309()
    {
        $this->object->setFirstName('Худана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Худана,Худани,Худані,Худану,Худаною,Худані,Худано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman310()
    {
        $this->object->setFirstName('Цвітана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Цвітана,Цвітани,Цвітані,Цвітану,Цвітаною,Цвітані,Цвітано'), $this->object->getFirstNameCase());
    }
    public function testNameWoman311()
    {
        $this->object->setFirstName('Чайка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чайка,Чайки,Чайці,Чайку,Чайкою,Чайці,Чайко'), $this->object->getFirstNameCase());
    }
    public function testNameWoman312()
    {
        $this->object->setFirstName('Чарівна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чарівна,Чарівни,Чарівні,Чарівну,Чарівною,Чарівні,Чарівно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman313()
    {
        $this->object->setFirstName('Чарівниця');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чарівниця,Чарівниці,Чарівниці,Чарівницю,Чарівницею,Чарівниці,Чарівнице'), $this->object->getFirstNameCase());
    }
    public function testNameWoman314()
    {
        $this->object->setFirstName('Чаруна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чаруна,Чаруни,Чаруні,Чаруну,Чаруною,Чаруні,Чаруно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman315()
    {
        $this->object->setFirstName('Чеслава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чеслава,Чеслави,Чеславі,Чеславу,Чеславою,Чеславі,Чеславо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman316()
    {
        $this->object->setFirstName('Ява');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ява,Яви,Яві,Яву,Явою,Яві,Яво'), $this->object->getFirstNameCase());
    }
    public function testNameWoman317()
    {
        $this->object->setFirstName('Яворина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яворина,Яворини,Яворині,Яворину,Явориною,Яворині,Яворино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman318()
    {
        $this->object->setFirstName('Ялина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ялина,Ялини,Ялині,Ялину,Ялиною,Ялині,Ялино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman319()
    {
        $this->object->setFirstName('Ярина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярина,Ярини,Ярині,Ярину,Яриною,Ярині,Ярино'), $this->object->getFirstNameCase());
    }
    public function testNameWoman320()
    {
        $this->object->setFirstName('Яромила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яромила,Яромили,Яромилі,Яромилу,Яромилою,Яромилі,Яромило'), $this->object->getFirstNameCase());
    }
    public function testNameWoman321()
    {
        $this->object->setFirstName('Яромира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яромира,Яромири,Яромирі,Яромиру,Яромирою,Яромирі,Яромиро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman322()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярослава,Ярослави,Ярославі,Ярославу,Ярославою,Ярославі,Ярославо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman323()
    {
        $this->object->setFirstName('Ясна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ясна,Ясни,Ясні,Ясну,Ясною,Ясні,Ясно'), $this->object->getFirstNameCase());
    }
    public function testNameWoman324()
    {
        $this->object->setFirstName('Ясновида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ясновида,Ясновиди,Ясновиді,Ясновиду,Ясновидою,Ясновиді,Ясновидо'), $this->object->getFirstNameCase());
    }
    public function testNameWoman325()
    {
        $this->object->setFirstName('Ясногора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ясногора,Ясногори,Ясногорі,Ясногору,Ясногорою,Ясногорі,Ясногоро'), $this->object->getFirstNameCase());
    }
    public function testNameWoman326()
    {
        $this->object->setFirstName('Яснолика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яснолика,Яснолики,Яснолиці,Яснолику,Ясноликою,Яснолиці,Яснолико'), $this->object->getFirstNameCase());
    }
    public function testNameWoman327()
    {
        $this->object->setFirstName('Яснослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яснослава,Яснослави,Яснославі,Яснославу,Яснославою,Яснославі,Яснославо'), $this->object->getFirstNameCase());
    }

}