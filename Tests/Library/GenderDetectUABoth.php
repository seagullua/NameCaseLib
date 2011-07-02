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
        $this->object->setSecondName('Єрмоленко');
        $this->assertEquals('1-Аарон Єрмоленко', $this->object->genderAutoDetect().'-Аарон Єрмоленко');
    }
    public function testGenDetect1()
    {
        $this->object->setFirstName('Абакум');
        $this->object->setSecondName('Єсипенко');
        $this->assertEquals('1-Абакум Єсипенко', $this->object->genderAutoDetect().'-Абакум Єсипенко');
    }
    public function testGenDetect2()
    {
        $this->object->setFirstName('Абрам');
        $this->object->setSecondName('Іванів');
        $this->assertEquals('1-Абрам Іванів', $this->object->genderAutoDetect().'-Абрам Іванів');
    }
    public function testGenDetect3()
    {
        $this->object->setFirstName('Августин');
        $this->object->setSecondName('Іваненко');
        $this->assertEquals('1-Августин Іваненко', $this->object->genderAutoDetect().'-Августин Іваненко');
    }
    public function testGenDetect4()
    {
        $this->object->setFirstName('Авесалом');
        $this->object->setSecondName('Іванченко');
        $this->assertEquals('1-Авесалом Іванченко', $this->object->genderAutoDetect().'-Авесалом Іванченко');
    }
    public function testGenDetect5()
    {
        $this->object->setFirstName('Авксентій');
        $this->object->setSecondName('Іванчук');
        $this->assertEquals('1-Авксентій Іванчук', $this->object->genderAutoDetect().'-Авксентій Іванчук');
    }
    public function testGenDetect6()
    {
        $this->object->setFirstName('Аврелій');
        $this->object->setSecondName('Іванюк');
        $this->assertEquals('1-Аврелій Іванюк', $this->object->genderAutoDetect().'-Аврелій Іванюк');
    }
    public function testGenDetect7()
    {
        $this->object->setFirstName('Автоном');
        $this->object->setSecondName('Івахненко');
        $this->assertEquals('1-Автоном Івахненко', $this->object->genderAutoDetect().'-Автоном Івахненко');
    }
    public function testGenDetect8()
    {
        $this->object->setFirstName('Адам');
        $this->object->setSecondName('Івашко');
        $this->assertEquals('1-Адам Івашко', $this->object->genderAutoDetect().'-Адам Івашко');
    }
    public function testGenDetect9()
    {
        $this->object->setFirstName('Адріян');
        $this->object->setSecondName('Іващенко');
        $this->assertEquals('1-Адріян Іващенко', $this->object->genderAutoDetect().'-Адріян Іващенко');
    }
    public function testGenDetect10()
    {
        $this->object->setFirstName('Адріан');
        $this->object->setSecondName('Івченко');
        $this->assertEquals('1-Адріан Івченко', $this->object->genderAutoDetect().'-Адріан Івченко');
    }
    public function testGenDetect11()
    {
        $this->object->setFirstName('Азар');
        $this->object->setSecondName('Іллєнко');
        $this->assertEquals('1-Азар Іллєнко', $this->object->genderAutoDetect().'-Азар Іллєнко');
    }
    public function testGenDetect12()
    {
        $this->object->setFirstName('Алевтин');
        $this->object->setSecondName('Іловайські');
        $this->assertEquals('1-Алевтин Іловайські', $this->object->genderAutoDetect().'-Алевтин Іловайські');
    }
    public function testGenDetect13()
    {
        $this->object->setFirstName('Альберт');
        $this->object->setSecondName('Ільницький');
        $this->assertEquals('1-Альберт Ільницький', $this->object->genderAutoDetect().'-Альберт Ільницький');
    }
    public function testGenDetect14()
    {
        $this->object->setFirstName('Амвросій');
        $this->object->setSecondName('Ільченко');
        $this->assertEquals('1-Амвросій Ільченко', $this->object->genderAutoDetect().'-Амвросій Ільченко');
    }
    public function testGenDetect15()
    {
        $this->object->setFirstName('Амнон');
        $this->object->setSecondName('Іщенко');
        $this->assertEquals('1-Амнон Іщенко', $this->object->genderAutoDetect().'-Амнон Іщенко');
    }
    public function testGenDetect16()
    {
        $this->object->setFirstName('Амос');
        $this->object->setSecondName('Абраменко');
        $this->assertEquals('1-Амос Абраменко', $this->object->genderAutoDetect().'-Амос Абраменко');
    }
    public function testGenDetect17()
    {
        $this->object->setFirstName('Анастас');
        $this->object->setSecondName('Абрамчук');
        $this->assertEquals('1-Анастас Абрамчук', $this->object->genderAutoDetect().'-Анастас Абрамчук');
    }
    public function testGenDetect18()
    {
        $this->object->setFirstName('Анастасій');
        $this->object->setSecondName('Адамчук');
        $this->assertEquals('1-Анастасій Адамчук', $this->object->genderAutoDetect().'-Анастасій Адамчук');
    }
    public function testGenDetect19()
    {
        $this->object->setFirstName('Андрій');
        $this->object->setSecondName('Акуленко');
        $this->assertEquals('1-Андрій Акуленко', $this->object->genderAutoDetect().'-Андрій Акуленко');
    }
    public function testGenDetect20()
    {
        $this->object->setFirstName('Антоній');
        $this->object->setSecondName('Алексєєнко');
        $this->assertEquals('1-Антоній Алексєєнко', $this->object->genderAutoDetect().'-Антоній Алексєєнко');
    }
    public function testGenDetect21()
    {
        $this->object->setFirstName('Антон');
        $this->object->setSecondName('Алексійчук');
        $this->assertEquals('1-Антон Алексійчук', $this->object->genderAutoDetect().'-Антон Алексійчук');
    }
    public function testGenDetect22()
    {
        $this->object->setFirstName('Анісій');
        $this->object->setSecondName('Андрієнко');
        $this->assertEquals('1-Анісій Андрієнко', $this->object->genderAutoDetect().'-Анісій Андрієнко');
    }
    public function testGenDetect23()
    {
        $this->object->setFirstName('Аркадій');
        $this->object->setSecondName('Андрійчук');
        $this->assertEquals('1-Аркадій Андрійчук', $this->object->genderAutoDetect().'-Аркадій Андрійчук');
    }
    public function testGenDetect24()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setSecondName('Андрейко');
        $this->assertEquals('1-Арсен Андрейко', $this->object->genderAutoDetect().'-Арсен Андрейко');
    }
    public function testGenDetect25()
    {
        $this->object->setFirstName('Арсеній');
        $this->object->setSecondName('Андрусів');
        $this->assertEquals('1-Арсеній Андрусів', $this->object->genderAutoDetect().'-Арсеній Андрусів');
    }
    public function testGenDetect26()
    {
        $this->object->setFirstName('Артем');
        $this->object->setSecondName('Андрушків');
        $this->assertEquals('1-Артем Андрушків', $this->object->genderAutoDetect().'-Артем Андрушків');
    }
    public function testGenDetect27()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Андрущенко');
        $this->assertEquals('1-Архип Андрущенко', $this->object->genderAutoDetect().'-Архип Андрущенко');
    }
    public function testGenDetect28()
    {
        $this->object->setFirstName('Атанас');
        $this->object->setSecondName('Анищенко');
        $this->assertEquals('1-Атанас Анищенко', $this->object->genderAutoDetect().'-Атанас Анищенко');
    }
    public function testGenDetect29()
    {
        $this->object->setFirstName('Аскольд');
        $this->object->setSecondName('Антонюк');
        $this->assertEquals('1-Аскольд Антонюк', $this->object->genderAutoDetect().'-Аскольд Антонюк');
    }
    public function testGenDetect30()
    {
        $this->object->setFirstName('Бажан');
        $this->object->setSecondName('Арсенич');
        $this->assertEquals('1-Бажан Арсенич', $this->object->genderAutoDetect().'-Бажан Арсенич');
    }
    public function testGenDetect31()
    {
        $this->object->setFirstName('Біловид');
        $this->object->setSecondName('Артюх');
        $this->assertEquals('1-Біловид Артюх', $this->object->genderAutoDetect().'-Біловид Артюх');
    }
    public function testGenDetect32()
    {
        $this->object->setFirstName('Білогост');
        $this->object->setSecondName('Атаманчук');
        $this->assertEquals('1-Білогост Атаманчук', $this->object->genderAutoDetect().'-Білогост Атаманчук');
    }
    public function testGenDetect33()
    {
        $this->object->setFirstName('Біломир');
        $this->object->setSecondName('Біла');
        $this->assertEquals('1-Біломир Біла', $this->object->genderAutoDetect().'-Біломир Біла');
    }
    public function testGenDetect34()
    {
        $this->object->setFirstName('Білослав');
        $this->object->setSecondName('Білас');
        $this->assertEquals('1-Білослав Білас', $this->object->genderAutoDetect().'-Білослав Білас');
    }
    public function testGenDetect35()
    {
        $this->object->setFirstName('Білотур');
        $this->object->setSecondName('Білий');
        $this->assertEquals('1-Білотур Білий', $this->object->genderAutoDetect().'-Білотур Білий');
    }
    public function testGenDetect36()
    {
        $this->object->setFirstName('Білян');
        $this->object->setSecondName('Білодід');
        $this->assertEquals('1-Білян Білодід', $this->object->genderAutoDetect().'-Білян Білодід');
    }
    public function testGenDetect37()
    {
        $this->object->setFirstName('Благовид');
        $this->object->setSecondName('Білоус');
        $this->assertEquals('1-Благовид Білоус', $this->object->genderAutoDetect().'-Благовид Білоус');
    }
    public function testGenDetect38()
    {
        $this->object->setFirstName('Благовіст');
        $this->object->setSecondName('Бабійчук');
        $this->assertEquals('1-Благовіст Бабійчук', $this->object->genderAutoDetect().'-Благовіст Бабійчук');
    }
    public function testGenDetect39()
    {
        $this->object->setFirstName('Благодар');
        $this->object->setSecondName('Бабак');
        $this->assertEquals('1-Благодар Бабак', $this->object->genderAutoDetect().'-Благодар Бабак');
    }
    public function testGenDetect40()
    {
        $this->object->setFirstName('Благодат');
        $this->object->setSecondName('Бабчук');
        $this->assertEquals('1-Благодат Бабчук', $this->object->genderAutoDetect().'-Благодат Бабчук');
    }
    public function testGenDetect41()
    {
        $this->object->setFirstName('Благомир');
        $this->object->setSecondName('Багмут');
        $this->assertEquals('1-Благомир Багмут', $this->object->genderAutoDetect().'-Благомир Багмут');
    }
    public function testGenDetect42()
    {
        $this->object->setFirstName('Благослав');
        $this->object->setSecondName('Багрій');
        $this->assertEquals('1-Благослав Багрій', $this->object->genderAutoDetect().'-Благослав Багрій');
    }
    public function testGenDetect43()
    {
        $this->object->setFirstName('Богдан');
        $this->object->setSecondName('Бадлак');
        $this->assertEquals('1-Богдан Бадлак', $this->object->genderAutoDetect().'-Богдан Бадлак');
    }
    public function testGenDetect44()
    {
        $this->object->setFirstName('Боговір');
        $this->object->setSecondName('Бажан');
        $this->assertEquals('1-Боговір Бажан', $this->object->genderAutoDetect().'-Боговір Бажан');
    }
    public function testGenDetect45()
    {
        $this->object->setFirstName('Боговіст');
        $this->object->setSecondName('Балтача');
        $this->assertEquals('1-Боговіст Балтача', $this->object->genderAutoDetect().'-Боговіст Балтача');
    }
    public function testGenDetect46()
    {
        $this->object->setFirstName('Богодар');
        $this->object->setSecondName('Бандура');
        $this->assertEquals('1-Богодар Бандура', $this->object->genderAutoDetect().'-Богодар Бандура');
    }
    public function testGenDetect47()
    {
        $this->object->setFirstName('Боголад');
        $this->object->setSecondName('Баран');
        $this->assertEquals('1-Боголад Баран', $this->object->genderAutoDetect().'-Боголад Баран');
    }
    public function testGenDetect48()
    {
        $this->object->setFirstName('Боголіп');
        $this->object->setSecondName('Баранець');
        $this->assertEquals('1-Боголіп Баранець', $this->object->genderAutoDetect().'-Боголіп Баранець');
    }
    public function testGenDetect49()
    {
        $this->object->setFirstName('Боголюб');
        $this->object->setSecondName('Барановський');
        $this->assertEquals('1-Боголюб Барановський', $this->object->genderAutoDetect().'-Боголюб Барановський');
    }
    public function testGenDetect50()
    {
        $this->object->setFirstName('Богород');
        $this->object->setSecondName('Баранюк');
        $this->assertEquals('1-Богород Баранюк', $this->object->genderAutoDetect().'-Богород Баранюк');
    }
    public function testGenDetect51()
    {
        $this->object->setFirstName('Богосвят');
        $this->object->setSecondName('Батюк');
        $this->assertEquals('1-Богосвят Батюк', $this->object->genderAutoDetect().'-Богосвят Батюк');
    }
    public function testGenDetect52()
    {
        $this->object->setFirstName('Богумил');
        $this->object->setSecondName('Бачинський');
        $this->assertEquals('1-Богумил Бачинський', $this->object->genderAutoDetect().'-Богумил Бачинський');
    }
    public function testGenDetect53()
    {
        $this->object->setFirstName('Богумир');
        $this->object->setSecondName('Бебешко');
        $this->assertEquals('1-Богумир Бебешко', $this->object->genderAutoDetect().'-Богумир Бебешко');
    }
    public function testGenDetect54()
    {
        $this->object->setFirstName('Богуслав');
        $this->object->setSecondName('Бевзенко');
        $this->assertEquals('1-Богуслав Бевзенко', $this->object->genderAutoDetect().'-Богуслав Бевзенко');
    }
    public function testGenDetect55()
    {
        $this->object->setFirstName('Бож');
        $this->object->setSecondName('Безбородьки');
        $this->assertEquals('1-Бож Безбородьки', $this->object->genderAutoDetect().'-Бож Безбородьки');
    }
    public function testGenDetect56()
    {
        $this->object->setFirstName('Божан');
        $this->object->setSecondName('Березовчук');
        $this->assertEquals('1-Божан Березовчук', $this->object->genderAutoDetect().'-Божан Березовчук');
    }
    public function testGenDetect57()
    {
        $this->object->setFirstName('Божедар');
        $this->object->setSecondName('Блонські');
        $this->assertEquals('1-Божедар Блонські', $this->object->genderAutoDetect().'-Божедар Блонські');
    }
    public function testGenDetect58()
    {
        $this->object->setFirstName('Божейко');
        $this->object->setSecondName('Божик');
        $this->assertEquals('1-Божейко Божик', $this->object->genderAutoDetect().'-Божейко Божик');
    }
    public function testGenDetect59()
    {
        $this->object->setFirstName('Божемир');
        $this->object->setSecondName('Божко');
        $this->assertEquals('1-Божемир Божко', $this->object->genderAutoDetect().'-Божемир Божко');
    }
    public function testGenDetect60()
    {
        $this->object->setFirstName('Божен');
        $this->object->setSecondName('Бойко');
        $this->assertEquals('1-Божен Бойко', $this->object->genderAutoDetect().'-Божен Бойко');
    }
    public function testGenDetect61()
    {
        $this->object->setFirstName('Божко');
        $this->object->setSecondName('Бойцун');
        $this->assertEquals('1-Божко Бойцун', $this->object->genderAutoDetect().'-Божко Бойцун');
    }
    public function testGenDetect62()
    {
        $this->object->setFirstName('Болеслав');
        $this->object->setSecondName('Бойчак');
        $this->assertEquals('1-Болеслав Бойчак', $this->object->genderAutoDetect().'-Болеслав Бойчак');
    }
    public function testGenDetect63()
    {
        $this->object->setFirstName('Боримир');
        $this->object->setSecondName('Бойчишин');
        $this->assertEquals('1-Боримир Бойчишин', $this->object->genderAutoDetect().'-Боримир Бойчишин');
    }
    public function testGenDetect64()
    {
        $this->object->setFirstName('Боримисл');
        $this->object->setSecondName('Бойчук');
        $this->assertEquals('1-Боримисл Бойчук', $this->object->genderAutoDetect().'-Боримисл Бойчук');
    }
    public function testGenDetect65()
    {
        $this->object->setFirstName('Борис');
        $this->object->setSecondName('Бондар');
        $this->assertEquals('1-Борис Бондар', $this->object->genderAutoDetect().'-Борис Бондар');
    }
    public function testGenDetect66()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setSecondName('Бондаренко');
        $this->assertEquals('1-Борислав Бондаренко', $this->object->genderAutoDetect().'-Борислав Бондаренко');
    }
    public function testGenDetect67()
    {
        $this->object->setFirstName('Боян');
        $this->object->setSecondName('Бондарчук');
        $this->assertEquals('1-Боян Бондарчук', $this->object->genderAutoDetect().'-Боян Бондарчук');
    }
    public function testGenDetect68()
    {
        $this->object->setFirstName('Братан');
        $this->object->setSecondName('Борисенко');
        $this->assertEquals('1-Братан Борисенко', $this->object->genderAutoDetect().'-Братан Борисенко');
    }
    public function testGenDetect69()
    {
        $this->object->setFirstName('Бративой');
        $this->object->setSecondName('Борисикевич');
        $this->assertEquals('1-Бративой Борисикевич', $this->object->genderAutoDetect().'-Бративой Борисикевич');
    }
    public function testGenDetect70()
    {
        $this->object->setFirstName('Братимир');
        $this->object->setSecondName('Братусь');
        $this->assertEquals('1-Братимир Братусь', $this->object->genderAutoDetect().'-Братимир Братусь');
    }
    public function testGenDetect71()
    {
        $this->object->setFirstName('Братислав');
        $this->object->setSecondName('Букатевич');
        $this->assertEquals('1-Братислав Букатевич', $this->object->genderAutoDetect().'-Братислав Букатевич');
    }
    public function testGenDetect72()
    {
        $this->object->setFirstName('Братко');
        $this->object->setSecondName('Бурбан');
        $this->assertEquals('1-Братко Бурбан', $this->object->genderAutoDetect().'-Братко Бурбан');
    }
    public function testGenDetect73()
    {
        $this->object->setFirstName('Братомил');
        $this->object->setSecondName('Бурячок');
        $this->assertEquals('1-Братомил Бурячок', $this->object->genderAutoDetect().'-Братомил Бурячок');
    }
    public function testGenDetect74()
    {
        $this->object->setFirstName('Братослав');
        $this->object->setSecondName('Бутейко');
        $this->assertEquals('1-Братослав Бутейко', $this->object->genderAutoDetect().'-Братослав Бутейко');
    }
    public function testGenDetect75()
    {
        $this->object->setFirstName('Брячислав');
        $this->object->setSecondName('Бутенко');
        $this->assertEquals('1-Брячислав Бутенко', $this->object->genderAutoDetect().'-Брячислав Бутенко');
    }
    public function testGenDetect76()
    {
        $this->object->setFirstName('Боронислав');
        $this->object->setSecondName('Бутник');
        $this->assertEquals('1-Боронислав Бутник', $this->object->genderAutoDetect().'-Боронислав Бутник');
    }
    public function testGenDetect77()
    {
        $this->object->setFirstName('Будивид');
        $this->object->setSecondName('Бутовичі');
        $this->assertEquals('1-Будивид Бутовичі', $this->object->genderAutoDetect().'-Будивид Бутовичі');
    }
    public function testGenDetect78()
    {
        $this->object->setFirstName('Будивой');
        $this->object->setSecondName('Бухало');
        $this->assertEquals('1-Будивой Бухало', $this->object->genderAutoDetect().'-Будивой Бухало');
    }
    public function testGenDetect79()
    {
        $this->object->setFirstName('Будимил');
        $this->object->setSecondName('Візерські');
        $this->assertEquals('1-Будимил Візерські', $this->object->genderAutoDetect().'-Будимил Візерські');
    }
    public function testGenDetect80()
    {
        $this->object->setFirstName('Будимир');
        $this->object->setSecondName('Василашко');
        $this->assertEquals('1-Будимир Василашко', $this->object->genderAutoDetect().'-Будимир Василашко');
    }
    public function testGenDetect81()
    {
        $this->object->setFirstName('Будислав');
        $this->object->setSecondName('Василенко');
        $this->assertEquals('1-Будислав Василенко', $this->object->genderAutoDetect().'-Будислав Василенко');
    }
    public function testGenDetect82()
    {
        $this->object->setFirstName('Буймир');
        $this->object->setSecondName('Васильченко');
        $this->assertEquals('1-Буймир Васильченко', $this->object->genderAutoDetect().'-Буймир Васильченко');
    }
    public function testGenDetect83()
    {
        $this->object->setFirstName('Буйтур');
        $this->object->setSecondName('Васильчук');
        $this->assertEquals('1-Буйтур Васильчук', $this->object->genderAutoDetect().'-Буйтур Васильчук');
    }
    public function testGenDetect84()
    {
        $this->object->setFirstName('Буревій');
        $this->object->setSecondName('Васкул');
        $this->assertEquals('1-Буревій Васкул', $this->object->genderAutoDetect().'-Буревій Васкул');
    }
    public function testGenDetect85()
    {
        $this->object->setFirstName('Буревіст');
        $this->object->setSecondName('Васьковичі');
        $this->assertEquals('1-Буревіст Васьковичі', $this->object->genderAutoDetect().'-Буревіст Васьковичі');
    }
    public function testGenDetect86()
    {
        $this->object->setFirstName('Василь');
        $this->object->setSecondName('Вахній');
        $this->assertEquals('1-Василь Вахній', $this->object->genderAutoDetect().'-Василь Вахній');
    }
    public function testGenDetect87()
    {
        $this->object->setFirstName('Ведан');
        $this->object->setSecondName('Ващенко-Захарченко');
        $this->assertEquals('1-Ведан Ващенко-Захарченко', $this->object->genderAutoDetect().'-Ведан Ващенко-Захарченко');
    }
    public function testGenDetect88()
    {
        $this->object->setFirstName('Велемир');
        $this->object->setSecondName('Вдовиченко');
        $this->assertEquals('1-Велемир Вдовиченко', $this->object->genderAutoDetect().'-Велемир Вдовиченко');
    }
    public function testGenDetect89()
    {
        $this->object->setFirstName('Велемудр');
        $this->object->setSecondName('Величко');
        $this->assertEquals('1-Велемудр Величко', $this->object->genderAutoDetect().'-Велемудр Величко');
    }
    public function testGenDetect90()
    {
        $this->object->setFirstName('Велет');
        $this->object->setSecondName('Величковські');
        $this->assertEquals('1-Велет Величковські', $this->object->genderAutoDetect().'-Велет Величковські');
    }
    public function testGenDetect91()
    {
        $this->object->setFirstName('Величар');
        $this->object->setSecondName('Вертипорох');
        $this->assertEquals('1-Величар Вертипорох', $this->object->genderAutoDetect().'-Величар Вертипорох');
    }
    public function testGenDetect92()
    {
        $this->object->setFirstName('Величко');
        $this->object->setSecondName('Верхола');
        $this->assertEquals('1-Величко Верхола', $this->object->genderAutoDetect().'-Величко Верхола');
    }
    public function testGenDetect93()
    {
        $this->object->setFirstName('Вербан');
        $this->object->setSecondName('Винокур');
        $this->assertEquals('1-Вербан Винокур', $this->object->genderAutoDetect().'-Вербан Винокур');
    }
    public function testGenDetect94()
    {
        $this->object->setFirstName('Вернидуб');
        $this->object->setSecondName('Висоцькі');
        $this->assertEquals('1-Вернидуб Висоцькі', $this->object->genderAutoDetect().'-Вернидуб Висоцькі');
    }
    public function testGenDetect95()
    {
        $this->object->setFirstName('Вернислав');
        $this->object->setSecondName('Вишневецькі');
        $this->assertEquals('1-Вернислав Вишневецькі', $this->object->genderAutoDetect().'-Вернислав Вишневецькі');
    }
    public function testGenDetect96()
    {
        $this->object->setFirstName('Веселан');
        $this->object->setSecondName('Влох');
        $this->assertEquals('1-Веселан Влох', $this->object->genderAutoDetect().'-Веселан Влох');
    }
    public function testGenDetect97()
    {
        $this->object->setFirstName('Витомир');
        $this->object->setSecondName('Воблий');
        $this->assertEquals('1-Витомир Воблий', $this->object->genderAutoDetect().'-Витомир Воблий');
    }
    public function testGenDetect98()
    {
        $this->object->setFirstName('Вишата');
        $this->object->setSecondName('Вовк');
        $this->assertEquals('1-Вишата Вовк', $this->object->genderAutoDetect().'-Вишата Вовк');
    }
    public function testGenDetect99()
    {
        $this->object->setFirstName('Вишезор');
        $this->object->setSecondName('Возняк');
        $this->assertEquals('1-Вишезор Возняк', $this->object->genderAutoDetect().'-Вишезор Возняк');
    }
    public function testGenDetect100()
    {
        $this->object->setFirstName('Вишеслав');
        $this->object->setSecondName('Войнаровські');
        $this->assertEquals('1-Вишеслав Войнаровські', $this->object->genderAutoDetect().'-Вишеслав Войнаровські');
    }
    public function testGenDetect101()
    {
        $this->object->setFirstName('Вір');
        $this->object->setSecondName('Волох');
        $this->assertEquals('1-Вір Волох', $this->object->genderAutoDetect().'-Вір Волох');
    }
    public function testGenDetect102()
    {
        $this->object->setFirstName('Віродан');
        $this->object->setSecondName('Волошин');
        $this->assertEquals('1-Віродан Волошин', $this->object->genderAutoDetect().'-Віродан Волошин');
    }
    public function testGenDetect103()
    {
        $this->object->setFirstName('Віродар');
        $this->object->setSecondName('Волощук');
        $this->assertEquals('1-Віродар Волощук', $this->object->genderAutoDetect().'-Віродар Волощук');
    }
    public function testGenDetect104()
    {
        $this->object->setFirstName('Вірослав');
        $this->object->setSecondName('Вороновський');
        $this->assertEquals('1-Вірослав Вороновський', $this->object->genderAutoDetect().'-Вірослав Вороновський');
    }
    public function testGenDetect105()
    {
        $this->object->setFirstName('Віст');
        $this->object->setSecondName('Гаврилів');
        $this->assertEquals('1-Віст Гаврилів', $this->object->genderAutoDetect().'-Віст Гаврилів');
    }
    public function testGenDetect106()
    {
        $this->object->setFirstName('Вістан');
        $this->object->setSecondName('Гавриленко');
        $this->assertEquals('1-Вістан Гавриленко', $this->object->genderAutoDetect().'-Вістан Гавриленко');
    }
    public function testGenDetect107()
    {
        $this->object->setFirstName('Вітан');
        $this->object->setSecondName('Гаврилюк');
        $this->assertEquals('1-Вітан Гаврилюк', $this->object->genderAutoDetect().'-Вітан Гаврилюк');
    }
    public function testGenDetect108()
    {
        $this->object->setFirstName('Вітомир');
        $this->object->setSecondName('Галенковські');
        $this->assertEquals('1-Вітомир Галенковські', $this->object->genderAutoDetect().'-Вітомир Галенковські');
    }
    public function testGenDetect109()
    {
        $this->object->setFirstName('Вітрян');
        $this->object->setSecondName('Гальченко');
        $this->assertEquals('1-Вітрян Гальченко', $this->object->genderAutoDetect().'-Вітрян Гальченко');
    }
    public function testGenDetect110()
    {
        $this->object->setFirstName('Влад');
        $this->object->setSecondName('Гамалія');
        $this->assertEquals('1-Влад Гамалія', $this->object->genderAutoDetect().'-Влад Гамалія');
    }
    public function testGenDetect111()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setSecondName('Ганицький');
        $this->assertEquals('1-Владислав Ганицький', $this->object->genderAutoDetect().'-Владислав Ганицький');
    }
    public function testGenDetect112()
    {
        $this->object->setFirstName('Власт');
        $this->object->setSecondName('Гарань');
        $this->assertEquals('1-Власт Гарань', $this->object->genderAutoDetect().'-Власт Гарань');
    }
    public function testGenDetect113()
    {
        $this->object->setFirstName('Вогнедар');
        $this->object->setSecondName('Гармаш');
        $this->assertEquals('1-Вогнедар Гармаш', $this->object->genderAutoDetect().'-Вогнедар Гармаш');
    }
    public function testGenDetect114()
    {
        $this->object->setFirstName('Вогнян');
        $this->object->setSecondName('Гасай');
        $this->assertEquals('1-Вогнян Гасай', $this->object->genderAutoDetect().'-Вогнян Гасай');
    }
    public function testGenDetect115()
    {
        $this->object->setFirstName('Водограй');
        $this->object->setSecondName('Гасюк');
        $this->assertEquals('1-Водограй Гасюк', $this->object->genderAutoDetect().'-Водограй Гасюк');
    }
    public function testGenDetect116()
    {
        $this->object->setFirstName('Водотрав');
        $this->object->setSecondName('Герасименко');
        $this->assertEquals('1-Водотрав Герасименко', $this->object->genderAutoDetect().'-Водотрав Герасименко');
    }
    public function testGenDetect117()
    {
        $this->object->setFirstName('Воїслав');
        $this->object->setSecondName('Геращенко');
        $this->assertEquals('1-Воїслав Геращенко', $this->object->genderAutoDetect().'-Воїслав Геращенко');
    }
    public function testGenDetect118()
    {
        $this->object->setFirstName('Волелюб');
        $this->object->setSecondName('Герцик');
        $this->assertEquals('1-Волелюб Герцик', $this->object->genderAutoDetect().'-Волелюб Герцик');
    }
    public function testGenDetect119()
    {
        $this->object->setFirstName('Володар');
        $this->object->setSecondName('Герцики');
        $this->assertEquals('1-Володар Герцики', $this->object->genderAutoDetect().'-Володар Герцики');
    }
    public function testGenDetect120()
    {
        $this->object->setFirstName('Володимир');
        $this->object->setSecondName('Гладченко');
        $this->assertEquals('1-Володимир Гладченко', $this->object->genderAutoDetect().'-Володимир Гладченко');
    }
    public function testGenDetect121()
    {
        $this->object->setFirstName('Володислав');
        $this->object->setSecondName('Глоба');
        $this->assertEquals('1-Володислав Глоба', $this->object->genderAutoDetect().'-Володислав Глоба');
    }
    public function testGenDetect122()
    {
        $this->object->setFirstName('Воля');
        $this->object->setSecondName('Гнідичі');
        $this->assertEquals('1-Воля Гнідичі', $this->object->genderAutoDetect().'-Воля Гнідичі');
    }
    public function testGenDetect123()
    {
        $this->object->setFirstName('Воротислав');
        $this->object->setSecondName('Гнатюк');
        $this->assertEquals('1-Воротислав Гнатюк', $this->object->genderAutoDetect().'-Воротислав Гнатюк');
    }
    public function testGenDetect124()
    {
        $this->object->setFirstName('Вратан');
        $this->object->setSecondName('Гоголі');
        $this->assertEquals('1-Вратан Гоголі', $this->object->genderAutoDetect().'-Вратан Гоголі');
    }
    public function testGenDetect125()
    {
        $this->object->setFirstName('Вратислав');
        $this->object->setSecondName('Гоголь');
        $this->assertEquals('1-Вратислав Гоголь', $this->object->genderAutoDetect().'-Вратислав Гоголь');
    }
    public function testGenDetect126()
    {
        $this->object->setFirstName('Всевлад');
        $this->object->setSecondName('Годунок');
        $this->assertEquals('1-Всевлад Годунок', $this->object->genderAutoDetect().'-Всевлад Годунок');
    }
    public function testGenDetect127()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setSecondName('Головатий');
        $this->assertEquals('1-Всеволод Головатий', $this->object->genderAutoDetect().'-Всеволод Головатий');
    }
    public function testGenDetect128()
    {
        $this->object->setFirstName('Вселюб');
        $this->object->setSecondName('Головко');
        $this->assertEquals('1-Вселюб Головко', $this->object->genderAutoDetect().'-Вселюб Головко');
    }
    public function testGenDetect129()
    {
        $this->object->setFirstName('Вселюд');
        $this->object->setSecondName('Голуб');
        $this->assertEquals('1-Вселюд Голуб', $this->object->genderAutoDetect().'-Вселюд Голуб');
    }
    public function testGenDetect130()
    {
        $this->object->setFirstName('Всеслав');
        $this->object->setSecondName('Голубничий');
        $this->assertEquals('1-Всеслав Голубничий', $this->object->genderAutoDetect().'-Всеслав Голубничий');
    }
    public function testGenDetect131()
    {
        $this->object->setFirstName('Гарнослав');
        $this->object->setSecondName('Гольшанські');
        $this->assertEquals('1-Гарнослав Гольшанські', $this->object->genderAutoDetect().'-Гарнослав Гольшанські');
    }
    public function testGenDetect132()
    {
        $this->object->setFirstName('Гатусил');
        $this->object->setSecondName('Гонта');
        $this->assertEquals('1-Гатусил Гонта', $this->object->genderAutoDetect().'-Гатусил Гонта');
    }
    public function testGenDetect133()
    {
        $this->object->setFirstName('Гатуслав');
        $this->object->setSecondName('Гончар');
        $this->assertEquals('1-Гатуслав Гончар', $this->object->genderAutoDetect().'-Гатуслав Гончар');
    }
    public function testGenDetect134()
    {
        $this->object->setFirstName('Гервасій');
        $this->object->setSecondName('Гончаренко');
        $this->assertEquals('1-Гервасій Гончаренко', $this->object->genderAutoDetect().'-Гервасій Гончаренко');
    }
    public function testGenDetect135()
    {
        $this->object->setFirstName('Гладко');
        $this->object->setSecondName('Гончаров');
        $this->assertEquals('1-Гладко Гончаров', $this->object->genderAutoDetect().'-Гладко Гончаров');
    }
    public function testGenDetect136()
    {
        $this->object->setFirstName('Гліб');
        $this->object->setSecondName('Горбаль');
        $this->assertEquals('1-Гліб Горбаль', $this->object->genderAutoDetect().'-Гліб Горбаль');
    }
    public function testGenDetect137()
    {
        $this->object->setFirstName('Годомир');
        $this->object->setSecondName('Гордієнко');
        $this->assertEquals('1-Годомир Гордієнко', $this->object->genderAutoDetect().'-Годомир Гордієнко');
    }
    public function testGenDetect138()
    {
        $this->object->setFirstName('Голубко');
        $this->object->setSecondName('Гординські');
        $this->assertEquals('1-Голубко Гординські', $this->object->genderAutoDetect().'-Голубко Гординські');
    }
    public function testGenDetect139()
    {
        $this->object->setFirstName('Горун');
        $this->object->setSecondName('Гошовські');
        $this->assertEquals('1-Горун Гошовські', $this->object->genderAutoDetect().'-Горун Гошовські');
    }
    public function testGenDetect140()
    {
        $this->object->setFirstName('Гордій');
        $this->object->setSecondName('Гошовський');
        $this->assertEquals('1-Гордій Гошовський', $this->object->genderAutoDetect().'-Гордій Гошовський');
    }
    public function testGenDetect141()
    {
        $this->object->setFirstName('Гордислав');
        $this->object->setSecondName('Грінченко');
        $this->assertEquals('1-Гордислав Грінченко', $this->object->genderAutoDetect().'-Гордислав Грінченко');
    }
    public function testGenDetect142()
    {
        $this->object->setFirstName('Гордогост');
        $this->object->setSecondName('Грабович');
        $this->assertEquals('1-Гордогост Грабович', $this->object->genderAutoDetect().'-Гордогост Грабович');
    }
    public function testGenDetect143()
    {
        $this->object->setFirstName('Гордодум');
        $this->object->setSecondName('Грабовський');
        $this->assertEquals('1-Гордодум Грабовський', $this->object->genderAutoDetect().'-Гордодум Грабовський');
    }
    public function testGenDetect144()
    {
        $this->object->setFirstName('Гордомисл');
        $this->object->setSecondName('Григоренко');
        $this->assertEquals('1-Гордомисл Григоренко', $this->object->genderAutoDetect().'-Гордомисл Григоренко');
    }
    public function testGenDetect145()
    {
        $this->object->setFirstName('Гордослав');
        $this->object->setSecondName('Григорович');
        $this->assertEquals('1-Гордослав Григорович', $this->object->genderAutoDetect().'-Гордослав Григорович');
    }
    public function testGenDetect146()
    {
        $this->object->setFirstName('Гордята');
        $this->object->setSecondName('Григорович-Барський');
        $this->assertEquals('1-Гордята Григорович-Барський', $this->object->genderAutoDetect().'-Гордята Григорович-Барський');
    }
    public function testGenDetect147()
    {
        $this->object->setFirstName('Горигляд');
        $this->object->setSecondName('Григорчук');
        $this->assertEquals('1-Горигляд Григорчук', $this->object->genderAutoDetect().'-Горигляд Григорчук');
    }
    public function testGenDetect148()
    {
        $this->object->setFirstName('Горимир');
        $this->object->setSecondName('Грицак');
        $this->assertEquals('1-Горимир Грицак', $this->object->genderAutoDetect().'-Горимир Грицак');
    }
    public function testGenDetect149()
    {
        $this->object->setFirstName('Горимисл');
        $this->object->setSecondName('Гриценко');
        $this->assertEquals('1-Горимисл Гриценко', $this->object->genderAutoDetect().'-Горимисл Гриценко');
    }
    public function testGenDetect150()
    {
        $this->object->setFirstName('Горисвіт');
        $this->object->setSecondName('Гришко');
        $this->assertEquals('1-Горисвіт Гришко', $this->object->genderAutoDetect().'-Горисвіт Гришко');
    }
    public function testGenDetect151()
    {
        $this->object->setFirstName('Горислав');
        $this->object->setSecondName('Громики');
        $this->assertEquals('1-Горислав Громики', $this->object->genderAutoDetect().'-Горислав Громики');
    }
    public function testGenDetect152()
    {
        $this->object->setFirstName('Горицвіт');
        $this->object->setSecondName('Гудзій');
        $this->assertEquals('1-Горицвіт Гудзій', $this->object->genderAutoDetect().'-Горицвіт Гудзій');
    }
    public function testGenDetect153()
    {
        $this->object->setFirstName('Гостомисл');
        $this->object->setSecondName('Гудзь');
        $this->assertEquals('1-Гостомисл Гудзь', $this->object->genderAutoDetect().'-Гостомисл Гудзь');
    }
    public function testGenDetect154()
    {
        $this->object->setFirstName('Гострозір');
        $this->object->setSecondName('Гуменюк');
        $this->assertEquals('1-Гострозір Гуменюк', $this->object->genderAutoDetect().'-Гострозір Гуменюк');
    }
    public function testGenDetect155()
    {
        $this->object->setFirstName('Гостята');
        $this->object->setSecondName('Гунько');
        $this->assertEquals('1-Гостята Гунько', $this->object->genderAutoDetect().'-Гостята Гунько');
    }
    public function testGenDetect156()
    {
        $this->object->setFirstName('Градимир');
        $this->object->setSecondName('Діденко');
        $this->assertEquals('1-Градимир Діденко', $this->object->genderAutoDetect().'-Градимир Діденко');
    }
    public function testGenDetect157()
    {
        $this->object->setFirstName('Градислав');
        $this->object->setSecondName('Даниленко');
        $this->assertEquals('1-Градислав Даниленко', $this->object->genderAutoDetect().'-Градислав Даниленко');
    }
    public function testGenDetect158()
    {
        $this->object->setFirstName('Гранислав');
        $this->object->setSecondName('Даньків');
        $this->assertEquals('1-Гранислав Даньків', $this->object->genderAutoDetect().'-Гранислав Даньків');
    }
    public function testGenDetect159()
    {
        $this->object->setFirstName('Грива');
        $this->object->setSecondName('Данькевич');
        $this->assertEquals('1-Грива Данькевич', $this->object->genderAutoDetect().'-Грива Данькевич');
    }
    public function testGenDetect160()
    {
        $this->object->setFirstName('Григорій');
        $this->object->setSecondName('Дараган');
        $this->assertEquals('1-Григорій Дараган', $this->object->genderAutoDetect().'-Григорій Дараган');
    }
    public function testGenDetect161()
    {
        $this->object->setFirstName('Гремислав');
        $this->object->setSecondName('Дашкевич');
        $this->assertEquals('1-Гремислав Дашкевич', $this->object->genderAutoDetect().'-Гремислав Дашкевич');
    }
    public function testGenDetect162()
    {
        $this->object->setFirstName('Грозан');
        $this->object->setSecondName('Денисенко');
        $this->assertEquals('1-Грозан Денисенко', $this->object->genderAutoDetect().'-Грозан Денисенко');
    }
    public function testGenDetect163()
    {
        $this->object->setFirstName('Громовик');
        $this->object->setSecondName('Джус');
        $this->assertEquals('1-Громовик Джус', $this->object->genderAutoDetect().'-Громовик Джус');
    }
    public function testGenDetect164()
    {
        $this->object->setFirstName('Гуляйвітер');
        $this->object->setSecondName('Дзюба');
        $this->assertEquals('1-Гуляйвітер Дзюба', $this->object->genderAutoDetect().'-Гуляйвітер Дзюба');
    }
    public function testGenDetect165()
    {
        $this->object->setFirstName('Густомисл');
        $this->object->setSecondName('Дикань');
        $this->assertEquals('1-Густомисл Дикань', $this->object->genderAutoDetect().'-Густомисл Дикань');
    }
    public function testGenDetect166()
    {
        $this->object->setFirstName('Далемил');
        $this->object->setSecondName('Дмитерко');
        $this->assertEquals('1-Далемил Дмитерко', $this->object->genderAutoDetect().'-Далемил Дмитерко');
    }
    public function testGenDetect167()
    {
        $this->object->setFirstName('Далемир');
        $this->object->setSecondName('Довженко');
        $this->assertEquals('1-Далемир Довженко', $this->object->genderAutoDetect().'-Далемир Довженко');
    }
    public function testGenDetect168()
    {
        $this->object->setFirstName('Далібор');
        $this->object->setSecondName('Домонтовичі');
        $this->assertEquals('1-Далібор Домонтовичі', $this->object->genderAutoDetect().'-Далібор Домонтовичі');
    }
    public function testGenDetect169()
    {
        $this->object->setFirstName('Дан');
        $this->object->setSecondName('Дорош');
        $this->assertEquals('1-Дан Дорош', $this->object->genderAutoDetect().'-Дан Дорош');
    }
    public function testGenDetect170()
    {
        $this->object->setFirstName('Данило');
        $this->object->setSecondName('Дорошенко');
        $this->assertEquals('1-Данило Дорошенко', $this->object->genderAutoDetect().'-Данило Дорошенко');
    }
    public function testGenDetect171()
    {
        $this->object->setFirstName('Данко');
        $this->object->setSecondName('Доценко');
        $this->assertEquals('1-Данко Доценко', $this->object->genderAutoDetect().'-Данко Доценко');
    }
    public function testGenDetect172()
    {
        $this->object->setFirstName('Дантур');
        $this->object->setSecondName('Дочинець');
        $this->assertEquals('1-Дантур Дочинець', $this->object->genderAutoDetect().'-Дантур Дочинець');
    }
    public function testGenDetect173()
    {
        $this->object->setFirstName('Дар');
        $this->object->setSecondName('Драгоманови');
        $this->assertEquals('1-Дар Драгоманови', $this->object->genderAutoDetect().'-Дар Драгоманови');
    }
    public function testGenDetect174()
    {
        $this->object->setFirstName('Дарій');
        $this->object->setSecondName('Дудко');
        $this->assertEquals('1-Дарій Дудко', $this->object->genderAutoDetect().'-Дарій Дудко');
    }
    public function testGenDetect175()
    {
        $this->object->setFirstName('Дарибог');
        $this->object->setSecondName('Дунін-Борковські');
        $this->assertEquals('1-Дарибог Дунін-Борковські', $this->object->genderAutoDetect().'-Дарибог Дунін-Борковські');
    }
    public function testGenDetect176()
    {
        $this->object->setFirstName('Даромир');
        $this->object->setSecondName('Дяків');
        $this->assertEquals('1-Даромир Дяків', $this->object->genderAutoDetect().'-Даромир Дяків');
    }
    public function testGenDetect177()
    {
        $this->object->setFirstName('Держикрай');
        $this->object->setSecondName('Дяченко');
        $this->assertEquals('1-Держикрай Дяченко', $this->object->genderAutoDetect().'-Держикрай Дяченко');
    }
    public function testGenDetect178()
    {
        $this->object->setFirstName('Держислав');
        $this->object->setSecondName('Ейбоженко');
        $this->assertEquals('1-Держислав Ейбоженко', $this->object->genderAutoDetect().'-Держислав Ейбоженко');
    }
    public function testGenDetect179()
    {
        $this->object->setFirstName('Дибач');
        $this->object->setSecondName('Жайворон');
        $this->assertEquals('1-Дибач Жайворон', $this->object->genderAutoDetect().'-Дибач Жайворон');
    }
    public function testGenDetect180()
    {
        $this->object->setFirstName('Дивозір');
        $this->object->setSecondName('Жаліло');
        $this->assertEquals('1-Дивозір Жаліло', $this->object->genderAutoDetect().'-Дивозір Жаліло');
    }
    public function testGenDetect181()
    {
        $this->object->setFirstName('Дій');
        $this->object->setSecondName('Ждановичі');
        $this->assertEquals('1-Дій Ждановичі', $this->object->genderAutoDetect().'-Дій Ждановичі');
    }
    public function testGenDetect182()
    {
        $this->object->setFirstName('Добрибій');
        $this->object->setSecondName('Жежерін');
        $this->assertEquals('1-Добрибій Жежерін', $this->object->genderAutoDetect().'-Добрибій Жежерін');
    }
    public function testGenDetect183()
    {
        $this->object->setFirstName('Добривод');
        $this->object->setSecondName('Желєзняк');
        $this->assertEquals('1-Добривод Желєзняк', $this->object->genderAutoDetect().'-Добривод Желєзняк');
    }
    public function testGenDetect184()
    {
        $this->object->setFirstName('Добрик');
        $this->object->setSecondName('Железняк');
        $this->assertEquals('1-Добрик Железняк', $this->object->genderAutoDetect().'-Добрик Железняк');
    }
    public function testGenDetect185()
    {
        $this->object->setFirstName('Добрило');
        $this->object->setSecondName('Жилко');
        $this->assertEquals('1-Добрило Жилко', $this->object->genderAutoDetect().'-Добрило Жилко');
    }
    public function testGenDetect186()
    {
        $this->object->setFirstName('Добриня');
        $this->object->setSecondName('Жирко');
        $this->assertEquals('1-Добриня Жирко', $this->object->genderAutoDetect().'-Добриня Жирко');
    }
    public function testGenDetect187()
    {
        $this->object->setFirstName('Добрисвіт');
        $this->object->setSecondName('Жук');
        $this->assertEquals('1-Добрисвіт Жук', $this->object->genderAutoDetect().'-Добрисвіт Жук');
    }
    public function testGenDetect188()
    {
        $this->object->setFirstName('Добровіст');
        $this->object->setSecondName('Жупанський');
        $this->assertEquals('1-Добровіст Жупанський', $this->object->genderAutoDetect().'-Добровіст Жупанський');
    }
    public function testGenDetect189()
    {
        $this->object->setFirstName('Доброгост');
        $this->object->setSecondName('Жураківські');
        $this->assertEquals('1-Доброгост Жураківські', $this->object->genderAutoDetect().'-Доброгост Жураківські');
    }
    public function testGenDetect190()
    {
        $this->object->setFirstName('Добродум');
        $this->object->setSecondName('Заєць');
        $this->assertEquals('1-Добродум Заєць', $this->object->genderAutoDetect().'-Добродум Заєць');
    }
    public function testGenDetect191()
    {
        $this->object->setFirstName('Добролик');
        $this->object->setSecondName('Забашта');
        $this->assertEquals('1-Добролик Забашта', $this->object->genderAutoDetect().'-Добролик Забашта');
    }
    public function testGenDetect192()
    {
        $this->object->setFirstName('Добролюб');
        $this->object->setSecondName('Заболотний');
        $this->assertEquals('1-Добролюб Заболотний', $this->object->genderAutoDetect().'-Добролюб Заболотний');
    }
    public function testGenDetect193()
    {
        $this->object->setFirstName('Добромил');
        $this->object->setSecondName('Завальнюк');
        $this->assertEquals('1-Добромил Завальнюк', $this->object->genderAutoDetect().'-Добромил Завальнюк');
    }
    public function testGenDetect194()
    {
        $this->object->setFirstName('Добромир');
        $this->object->setSecondName('Закревські');
        $this->assertEquals('1-Добромир Закревські', $this->object->genderAutoDetect().'-Добромир Закревські');
    }
    public function testGenDetect195()
    {
        $this->object->setFirstName('Добромисл');
        $this->object->setSecondName('Закусило');
        $this->assertEquals('1-Добромисл Закусило', $this->object->genderAutoDetect().'-Добромисл Закусило');
    }
    public function testGenDetect196()
    {
        $this->object->setFirstName('Доброслав');
        $this->object->setSecondName('Залізняк');
        $this->assertEquals('1-Доброслав Залізняк', $this->object->genderAutoDetect().'-Доброслав Залізняк');
    }
    public function testGenDetect197()
    {
        $this->object->setFirstName('Доморад');
        $this->object->setSecondName('Заруба');
        $this->assertEquals('1-Доморад Заруба', $this->object->genderAutoDetect().'-Доморад Заруба');
    }
    public function testGenDetect198()
    {
        $this->object->setFirstName('Домослав');
        $this->object->setSecondName('Засядько');
        $this->assertEquals('1-Домослав Засядько', $this->object->genderAutoDetect().'-Домослав Засядько');
    }
    public function testGenDetect199()
    {
        $this->object->setFirstName('Дорогобуг');
        $this->object->setSecondName('Захаренко');
        $this->assertEquals('1-Дорогобуг Захаренко', $this->object->genderAutoDetect().'-Дорогобуг Захаренко');
    }
    public function testGenDetect200()
    {
        $this->object->setFirstName('Дорогомир');
        $this->object->setSecondName('Захарчук');
        $this->assertEquals('1-Дорогомир Захарчук', $this->object->genderAutoDetect().'-Дорогомир Захарчук');
    }
    public function testGenDetect201()
    {
        $this->object->setFirstName('Дорогомисл');
        $this->object->setSecondName('Заяць');
        $this->assertEquals('1-Дорогомисл Заяць', $this->object->genderAutoDetect().'-Дорогомисл Заяць');
    }
    public function testGenDetect202()
    {
        $this->object->setFirstName('Дорогосил');
        $this->object->setSecondName('Заячківський');
        $this->assertEquals('1-Дорогосил Заячківський', $this->object->genderAutoDetect().'-Дорогосил Заячківський');
    }
    public function testGenDetect203()
    {
        $this->object->setFirstName('Дорогочин');
        $this->object->setSecondName('Збаразькі');
        $this->assertEquals('1-Дорогочин Збаразькі', $this->object->genderAutoDetect().'-Дорогочин Збаразькі');
    }
    public function testGenDetect204()
    {
        $this->object->setFirstName('Драган');
        $this->object->setSecondName('Зленко');
        $this->assertEquals('1-Драган Зленко', $this->object->genderAutoDetect().'-Драган Зленко');
    }
    public function testGenDetect205()
    {
        $this->object->setFirstName('Дружелюб');
        $this->object->setSecondName('Значко-Яворські');
        $this->assertEquals('1-Дружелюб Значко-Яворські', $this->object->genderAutoDetect().'-Дружелюб Значко-Яворські');
    }
    public function testGenDetect206()
    {
        $this->object->setFirstName('Жадан');
        $this->object->setSecondName('Золотаренко');
        $this->assertEquals('1-Жадан Золотаренко', $this->object->genderAutoDetect().'-Жадан Золотаренко');
    }
    public function testGenDetect207()
    {
        $this->object->setFirstName('Ждан');
        $this->object->setSecondName('Кабачок');
        $this->assertEquals('1-Ждан Кабачок', $this->object->genderAutoDetect().'-Ждан Кабачок');
    }
    public function testGenDetect208()
    {
        $this->object->setFirstName('Живорід');
        $this->object->setSecondName('Каганець');
        $this->assertEquals('1-Живорід Каганець', $this->object->genderAutoDetect().'-Живорід Каганець');
    }
    public function testGenDetect209()
    {
        $this->object->setFirstName('Живосил');
        $this->object->setSecondName('Калашники');
        $this->assertEquals('1-Живосил Калашники', $this->object->genderAutoDetect().'-Живосил Калашники');
    }
    public function testGenDetect210()
    {
        $this->object->setFirstName('Живослав');
        $this->object->setSecondName('Калинович');
        $this->assertEquals('1-Живослав Калинович', $this->object->genderAutoDetect().'-Живослав Калинович');
    }
    public function testGenDetect211()
    {
        $this->object->setFirstName('Житомир');
        $this->object->setSecondName('Кандиби');
        $this->assertEquals('1-Житомир Кандиби', $this->object->genderAutoDetect().'-Житомир Кандиби');
    }
    public function testGenDetect212()
    {
        $this->object->setFirstName('Життєлюб');
        $this->object->setSecondName('Карашевичі');
        $this->assertEquals('1-Життєлюб Карашевичі', $this->object->genderAutoDetect().'-Життєлюб Карашевичі');
    }
    public function testGenDetect213()
    {
        $this->object->setFirstName('Збоїслав');
        $this->object->setSecondName('Кармалюк');
        $this->assertEquals('1-Збоїслав Кармалюк', $this->object->genderAutoDetect().'-Збоїслав Кармалюк');
    }
    public function testGenDetect214()
    {
        $this->object->setFirstName('Зборислав');
        $this->object->setSecondName('Карпенко');
        $this->assertEquals('1-Зборислав Карпенко', $this->object->genderAutoDetect().'-Зборислав Карпенко');
    }
    public function testGenDetect215()
    {
        $this->object->setFirstName('Звенигор');
        $this->object->setSecondName('Кириленко');
        $this->assertEquals('1-Звенигор Кириленко', $this->object->genderAutoDetect().'-Звенигор Кириленко');
    }
    public function testGenDetect216()
    {
        $this->object->setFirstName('Звенимир');
        $this->object->setSecondName('Кисилі');
        $this->assertEquals('1-Звенимир Кисилі', $this->object->genderAutoDetect().'-Звенимир Кисилі');
    }
    public function testGenDetect217()
    {
        $this->object->setFirstName('Звенислав');
        $this->object->setSecondName('Китастий');
        $this->assertEquals('1-Звенислав Китастий', $this->object->genderAutoDetect().'-Звенислав Китастий');
    }
    public function testGenDetect218()
    {
        $this->object->setFirstName('Здоровега');
        $this->object->setSecondName('Кицай');
        $this->assertEquals('1-Здоровега Кицай', $this->object->genderAutoDetect().'-Здоровега Кицай');
    }
    public function testGenDetect219()
    {
        $this->object->setFirstName('Земислав');
        $this->object->setSecondName('Клименко');
        $this->assertEquals('1-Земислав Клименко', $this->object->genderAutoDetect().'-Земислав Клименко');
    }
    public function testGenDetect220()
    {
        $this->object->setFirstName('Зеновій');
        $this->object->setSecondName('Климчук');
        $this->assertEquals('1-Зеновій Климчук', $this->object->genderAutoDetect().'-Зеновій Климчук');
    }
    public function testGenDetect221()
    {
        $this->object->setFirstName('Зіновій');
        $this->object->setSecondName('Кмета');
        $this->assertEquals('1-Зіновій Кмета', $this->object->genderAutoDetect().'-Зіновій Кмета');
    }
    public function testGenDetect222()
    {
        $this->object->setFirstName('Зиновій');
        $this->object->setSecondName('Книш');
        $this->assertEquals('1-Зиновій Книш', $this->object->genderAutoDetect().'-Зиновій Книш');
    }
    public function testGenDetect223()
    {
        $this->object->setFirstName('Злат');
        $this->object->setSecondName('Ковалів');
        $this->assertEquals('1-Злат Ковалів', $this->object->genderAutoDetect().'-Злат Ковалів');
    }
    public function testGenDetect224()
    {
        $this->object->setFirstName('Златомир');
        $this->object->setSecondName('Коваленко');
        $this->assertEquals('1-Златомир Коваленко', $this->object->genderAutoDetect().'-Златомир Коваленко');
    }
    public function testGenDetect225()
    {
        $this->object->setFirstName('Златоус');
        $this->object->setSecondName('Коваль');
        $this->assertEquals('1-Златоус Коваль', $this->object->genderAutoDetect().'-Златоус Коваль');
    }
    public function testGenDetect226()
    {
        $this->object->setFirstName('Златодан');
        $this->object->setSecondName('Ковальчик');
        $this->assertEquals('1-Златодан Ковальчик', $this->object->genderAutoDetect().'-Златодан Ковальчик');
    }
    public function testGenDetect227()
    {
        $this->object->setFirstName('Злотан');
        $this->object->setSecondName('Ковальчук');
        $this->assertEquals('1-Злотан Ковальчук', $this->object->genderAutoDetect().'-Злотан Ковальчук');
    }
    public function testGenDetect228()
    {
        $this->object->setFirstName('Злотодан');
        $this->object->setSecondName('Кованько');
        $this->assertEquals('1-Злотодан Кованько', $this->object->genderAutoDetect().'-Злотодан Кованько');
    }
    public function testGenDetect229()
    {
        $this->object->setFirstName('Зорегляд');
        $this->object->setSecondName('Ковтун');
        $this->assertEquals('1-Зорегляд Ковтун', $this->object->genderAutoDetect().'-Зорегляд Ковтун');
    }
    public function testGenDetect230()
    {
        $this->object->setFirstName('Зоремир');
        $this->object->setSecondName('Козаченко');
        $this->assertEquals('1-Зоремир Козаченко', $this->object->genderAutoDetect().'-Зоремир Козаченко');
    }
    public function testGenDetect231()
    {
        $this->object->setFirstName('Зорепад');
        $this->object->setSecondName('Козачинський');
        $this->assertEquals('1-Зорепад Козачинський', $this->object->genderAutoDetect().'-Зорепад Козачинський');
    }
    public function testGenDetect232()
    {
        $this->object->setFirstName('Зореслав');
        $this->object->setSecondName('Козачок');
        $this->assertEquals('1-Зореслав Козачок', $this->object->genderAutoDetect().'-Зореслав Козачок');
    }
    public function testGenDetect233()
    {
        $this->object->setFirstName('Зорян');
        $this->object->setSecondName('Козубенко');
        $this->assertEquals('1-Зорян Козубенко', $this->object->genderAutoDetect().'-Зорян Козубенко');
    }
    public function testGenDetect234()
    {
        $this->object->setFirstName('Ізяслав');
        $this->object->setSecondName('Колесник');
        $this->assertEquals('1-Ізяслав Колесник', $this->object->genderAutoDetect().'-Ізяслав Колесник');
    }
    public function testGenDetect235()
    {
        $this->object->setFirstName('Ігор');
        $this->object->setSecondName('Колодій');
        $this->assertEquals('1-Ігор Колодій', $this->object->genderAutoDetect().'-Ігор Колодій');
    }
    public function testGenDetect236()
    {
        $this->object->setFirstName('Іван');
        $this->object->setSecondName('Колодний');
        $this->assertEquals('1-Іван Колодний', $this->object->genderAutoDetect().'-Іван Колодний');
    }
    public function testGenDetect237()
    {
        $this->object->setFirstName('Квітан');
        $this->object->setSecondName('Коломієць');
        $this->assertEquals('1-Квітан Коломієць', $this->object->genderAutoDetect().'-Квітан Коломієць');
    }
    public function testGenDetect238()
    {
        $this->object->setFirstName('Києслав');
        $this->object->setSecondName('Комар');
        $this->assertEquals('1-Києслав Комар', $this->object->genderAutoDetect().'-Києслав Комар');
    }
    public function testGenDetect239()
    {
        $this->object->setFirstName('Кий');
        $this->object->setSecondName('Кондратюк');
        $this->assertEquals('1-Кий Кондратюк', $this->object->genderAutoDetect().'-Кий Кондратюк');
    }
    public function testGenDetect240()
    {
        $this->object->setFirstName('Кирило');
        $this->object->setSecondName('Кониські');
        $this->assertEquals('1-Кирило Кониські', $this->object->genderAutoDetect().'-Кирило Кониські');
    }
    public function testGenDetect241()
    {
        $this->object->setFirstName('Киян');
        $this->object->setSecondName('Корецький');
        $this->assertEquals('1-Киян Корецький', $this->object->genderAutoDetect().'-Киян Корецький');
    }
    public function testGenDetect242()
    {
        $this->object->setFirstName('Княжослав');
        $this->object->setSecondName('Корж');
        $this->assertEquals('1-Княжослав Корж', $this->object->genderAutoDetect().'-Княжослав Корж');
    }
    public function testGenDetect243()
    {
        $this->object->setFirstName('Корній');
        $this->object->setSecondName('Корнійчук');
        $this->assertEquals('1-Корній Корнійчук', $this->object->genderAutoDetect().'-Корній Корнійчук');
    }
    public function testGenDetect244()
    {
        $this->object->setFirstName('Колодар');
        $this->object->setSecondName('Коробка');
        $this->assertEquals('1-Колодар Коробка', $this->object->genderAutoDetect().'-Колодар Коробка');
    }
    public function testGenDetect245()
    {
        $this->object->setFirstName('Колодій');
        $this->object->setSecondName('Королюк');
        $this->assertEquals('1-Колодій Королюк', $this->object->genderAutoDetect().'-Колодій Королюк');
    }
    public function testGenDetect246()
    {
        $this->object->setFirstName('Косак');
        $this->object->setSecondName('Короткевич');
        $this->assertEquals('1-Косак Короткевич', $this->object->genderAutoDetect().'-Косак Короткевич');
    }
    public function testGenDetect247()
    {
        $this->object->setFirstName('Красун');
        $this->object->setSecondName('Корпанюк');
        $this->assertEquals('1-Красун Корпанюк', $this->object->genderAutoDetect().'-Красун Корпанюк');
    }
    public function testGenDetect248()
    {
        $this->object->setFirstName('Крилач');
        $this->object->setSecondName('Корчак');
        $this->assertEquals('1-Крилач Корчак', $this->object->genderAutoDetect().'-Крилач Корчак');
    }
    public function testGenDetect249()
    {
        $this->object->setFirstName('Куйбіда');
        $this->object->setSecondName('Корчинський');
        $this->assertEquals('1-Куйбіда Корчинський', $this->object->genderAutoDetect().'-Куйбіда Корчинський');
    }
    public function testGenDetect250()
    {
        $this->object->setFirstName('Курило');
        $this->object->setSecondName('Косенко');
        $this->assertEquals('1-Курило Косенко', $this->object->genderAutoDetect().'-Курило Косенко');
    }
    public function testGenDetect251()
    {
        $this->object->setFirstName('Лад');
        $this->object->setSecondName('Костенко');
        $this->assertEquals('1-Лад Костенко', $this->object->genderAutoDetect().'-Лад Костенко');
    }
    public function testGenDetect252()
    {
        $this->object->setFirstName('Ладимир');
        $this->object->setSecondName('Коструба');
        $this->assertEquals('1-Ладимир Коструба', $this->object->genderAutoDetect().'-Ладимир Коструба');
    }
    public function testGenDetect253()
    {
        $this->object->setFirstName('Ладислав');
        $this->object->setSecondName('Костюк');
        $this->assertEquals('1-Ладислав Костюк', $this->object->genderAutoDetect().'-Ладислав Костюк');
    }
    public function testGenDetect254()
    {
        $this->object->setFirstName('Ладолюб');
        $this->object->setSecondName('Котляр');
        $this->assertEquals('1-Ладолюб Котляр', $this->object->genderAutoDetect().'-Ладолюб Котляр');
    }
    public function testGenDetect255()
    {
        $this->object->setFirstName('Ладомир');
        $this->object->setSecondName('Котляревський');
        $this->assertEquals('1-Ладомир Котляревський', $this->object->genderAutoDetect().'-Ладомир Котляревський');
    }
    public function testGenDetect256()
    {
        $this->object->setFirstName('Лев');
        $this->object->setSecondName('Кравців');
        $this->assertEquals('1-Лев Кравців', $this->object->genderAutoDetect().'-Лев Кравців');
    }
    public function testGenDetect257()
    {
        $this->object->setFirstName('Левко');
        $this->object->setSecondName('Кравченко');
        $this->assertEquals('1-Левко Кравченко', $this->object->genderAutoDetect().'-Левко Кравченко');
    }
    public function testGenDetect258()
    {
        $this->object->setFirstName('Листвич');
        $this->object->setSecondName('Кравчук');
        $this->assertEquals('1-Листвич Кравчук', $this->object->genderAutoDetect().'-Листвич Кравчук');
    }
    public function testGenDetect259()
    {
        $this->object->setFirstName('Ліпослав');
        $this->object->setSecondName('Красовський');
        $this->assertEquals('1-Ліпослав Красовський', $this->object->genderAutoDetect().'-Ліпослав Красовський');
    }
    public function testGenDetect260()
    {
        $this->object->setFirstName('Лоліт');
        $this->object->setSecondName('Криворучко');
        $this->assertEquals('1-Лоліт Криворучко', $this->object->genderAutoDetect().'-Лоліт Криворучко');
    }
    public function testGenDetect261()
    {
        $this->object->setFirstName('Любим');
        $this->object->setSecondName('Крикуненко');
        $this->assertEquals('1-Любим Крикуненко', $this->object->genderAutoDetect().'-Любим Крикуненко');
    }
    public function testGenDetect262()
    {
        $this->object->setFirstName('Любовир');
        $this->object->setSecondName('Крупські');
        $this->assertEquals('1-Любовир Крупські', $this->object->genderAutoDetect().'-Любовир Крупські');
    }
    public function testGenDetect263()
    {
        $this->object->setFirstName('Любодар');
        $this->object->setSecondName('Кузьмінський');
        $this->assertEquals('1-Любодар Кузьмінський', $this->object->genderAutoDetect().'-Любодар Кузьмінський');
    }
    public function testGenDetect264()
    {
        $this->object->setFirstName('Любозар');
        $this->object->setSecondName('Кулиняк');
        $this->assertEquals('1-Любозар Кулиняк', $this->object->genderAutoDetect().'-Любозар Кулиняк');
    }
    public function testGenDetect265()
    {
        $this->object->setFirstName('Любомил');
        $this->object->setSecondName('Кульчицький');
        $this->assertEquals('1-Любомил Кульчицький', $this->object->genderAutoDetect().'-Любомил Кульчицький');
    }
    public function testGenDetect266()
    {
        $this->object->setFirstName('Любомир');
        $this->object->setSecondName('Купчинський');
        $this->assertEquals('1-Любомир Купчинський', $this->object->genderAutoDetect().'-Любомир Купчинський');
    }
    public function testGenDetect267()
    {
        $this->object->setFirstName('Любомисл');
        $this->object->setSecondName('Курцевичі');
        $this->assertEquals('1-Любомисл Курцевичі', $this->object->genderAutoDetect().'-Любомисл Курцевичі');
    }
    public function testGenDetect268()
    {
        $this->object->setFirstName('Любомудр');
        $this->object->setSecondName('Кухаренко');
        $this->assertEquals('1-Любомудр Кухаренко', $this->object->genderAutoDetect().'-Любомудр Кухаренко');
    }
    public function testGenDetect269()
    {
        $this->object->setFirstName('Любослав');
        $this->object->setSecondName('Куц');
        $this->assertEquals('1-Любослав Куц', $this->object->genderAutoDetect().'-Любослав Куц');
    }
    public function testGenDetect270()
    {
        $this->object->setFirstName('Людомил');
        $this->object->setSecondName('Куценко');
        $this->assertEquals('1-Людомил Куценко', $this->object->genderAutoDetect().'-Людомил Куценко');
    }
    public function testGenDetect271()
    {
        $this->object->setFirstName('Людомир');
        $this->object->setSecondName('Кучер');
        $this->assertEquals('1-Людомир Кучер', $this->object->genderAutoDetect().'-Людомир Кучер');
    }
    public function testGenDetect272()
    {
        $this->object->setFirstName('Людислав');
        $this->object->setSecondName('Кучеренко');
        $this->assertEquals('1-Людислав Кучеренко', $this->object->genderAutoDetect().'-Людислав Кучеренко');
    }
    public function testGenDetect273()
    {
        $this->object->setFirstName('Лютобор');
        $this->object->setSecondName('Кушнір');
        $this->assertEquals('1-Лютобор Кушнір', $this->object->genderAutoDetect().'-Лютобор Кушнір');
    }
    public function testGenDetect274()
    {
        $this->object->setFirstName('Лютомисл');
        $this->object->setSecondName('Лаба');
        $this->assertEquals('1-Лютомисл Лаба', $this->object->genderAutoDetect().'-Лютомисл Лаба');
    }
    public function testGenDetect275()
    {
        $this->object->setFirstName('Магадар');
        $this->object->setSecondName('Лаврін');
        $this->assertEquals('1-Магадар Лаврін', $this->object->genderAutoDetect().'-Магадар Лаврін');
    }
    public function testGenDetect276()
    {
        $this->object->setFirstName('Магамир');
        $this->object->setSecondName('Лаврик');
        $this->assertEquals('1-Магамир Лаврик', $this->object->genderAutoDetect().'-Магамир Лаврик');
    }
    public function testGenDetect277()
    {
        $this->object->setFirstName('Магаслав');
        $this->object->setSecondName('Лавриненко');
        $this->assertEquals('1-Магаслав Лавриненко', $this->object->genderAutoDetect().'-Магаслав Лавриненко');
    }
    public function testGenDetect278()
    {
        $this->object->setFirstName('Маркіян');
        $this->object->setSecondName('Лазаревські');
        $this->assertEquals('1-Маркіян Лазаревські', $this->object->genderAutoDetect().'-Маркіян Лазаревські');
    }
    public function testGenDetect279()
    {
        $this->object->setFirstName('Май');
        $this->object->setSecondName('Лазарчук');
        $this->assertEquals('1-Май Лазарчук', $this->object->genderAutoDetect().'-Май Лазарчук');
    }
    public function testGenDetect280()
    {
        $this->object->setFirstName('Мал');
        $this->object->setSecondName('Лазорко');
        $this->assertEquals('1-Мал Лазорко', $this->object->genderAutoDetect().'-Мал Лазорко');
    }
    public function testGenDetect281()
    {
        $this->object->setFirstName('Малик');
        $this->object->setSecondName('Лашкевичі');
        $this->assertEquals('1-Малик Лашкевичі', $this->object->genderAutoDetect().'-Малик Лашкевичі');
    }
    public function testGenDetect282()
    {
        $this->object->setFirstName('Маломир');
        $this->object->setSecondName('Левицький');
        $this->assertEquals('1-Маломир Левицький', $this->object->genderAutoDetect().'-Маломир Левицький');
    }
    public function testGenDetect283()
    {
        $this->object->setFirstName('Марко');
        $this->object->setSecondName('Левковські');
        $this->assertEquals('1-Марко Левковські', $this->object->genderAutoDetect().'-Марко Левковські');
    }
    public function testGenDetect284()
    {
        $this->object->setFirstName('Медомир');
        $this->object->setSecondName('Левченко');
        $this->assertEquals('1-Медомир Левченко', $this->object->genderAutoDetect().'-Медомир Левченко');
    }
    public function testGenDetect285()
    {
        $this->object->setFirstName('Межамир');
        $this->object->setSecondName('Леонтовичі');
        $this->assertEquals('1-Межамир Леонтовичі', $this->object->genderAutoDetect().'-Межамир Леонтовичі');
    }
    public function testGenDetect286()
    {
        $this->object->setFirstName('Мечислав');
        $this->object->setSecondName('Лесів');
        $this->assertEquals('1-Мечислав Лесів', $this->object->genderAutoDetect().'-Мечислав Лесів');
    }
    public function testGenDetect287()
    {
        $this->object->setFirstName('Мизамир');
        $this->object->setSecondName('Лесевичі');
        $this->assertEquals('1-Мизамир Лесевичі', $this->object->genderAutoDetect().'-Мизамир Лесевичі');
    }
    public function testGenDetect288()
    {
        $this->object->setFirstName('Милан');
        $this->object->setSecondName('Лисенко');
        $this->assertEquals('1-Милан Лисенко', $this->object->genderAutoDetect().'-Милан Лисенко');
    }
    public function testGenDetect289()
    {
        $this->object->setFirstName('Милован');
        $this->object->setSecondName('Литвин');
        $this->assertEquals('1-Милован Литвин', $this->object->genderAutoDetect().'-Милован Литвин');
    }
    public function testGenDetect290()
    {
        $this->object->setFirstName('Милодар');
        $this->object->setSecondName('Литвиненко');
        $this->assertEquals('1-Милодар Литвиненко', $this->object->genderAutoDetect().'-Милодар Литвиненко');
    }
    public function testGenDetect291()
    {
        $this->object->setFirstName('Милодух');
        $this->object->setSecondName('Литвинов');
        $this->assertEquals('1-Милодух Литвинов', $this->object->genderAutoDetect().'-Милодух Литвинов');
    }
    public function testGenDetect292()
    {
        $this->object->setFirstName('Милослав');
        $this->object->setSecondName('Литовченко');
        $this->assertEquals('1-Милослав Литовченко', $this->object->genderAutoDetect().'-Милослав Литовченко');
    }
    public function testGenDetect293()
    {
        $this->object->setFirstName('Мир');
        $this->object->setSecondName('Лозина-Лозинський');
        $this->assertEquals('1-Мир Лозина-Лозинський', $this->object->genderAutoDetect().'-Мир Лозина-Лозинський');
    }
    public function testGenDetect294()
    {
        $this->object->setFirstName('Миробог');
        $this->object->setSecondName('Лопатинський');
        $this->assertEquals('1-Миробог Лопатинський', $this->object->genderAutoDetect().'-Миробог Лопатинський');
    }
    public function testGenDetect295()
    {
        $this->object->setFirstName('Мирогост');
        $this->object->setSecondName('Лукашевичі');
        $this->assertEquals('1-Мирогост Лукашевичі', $this->object->genderAutoDetect().'-Мирогост Лукашевичі');
    }
    public function testGenDetect296()
    {
        $this->object->setFirstName('Миролюб');
        $this->object->setSecondName('Лукомський');
        $this->assertEquals('1-Миролюб Лукомський', $this->object->genderAutoDetect().'-Миролюб Лукомський');
    }
    public function testGenDetect297()
    {
        $this->object->setFirstName('Мирослав');
        $this->object->setSecondName('Луценко');
        $this->assertEquals('1-Мирослав Луценко', $this->object->genderAutoDetect().'-Мирослав Луценко');
    }
    public function testGenDetect298()
    {
        $this->object->setFirstName('Мовчан');
        $this->object->setSecondName('Людкевич');
        $this->assertEquals('1-Мовчан Людкевич', $this->object->genderAutoDetect().'-Мовчан Людкевич');
    }
    public function testGenDetect299()
    {
        $this->object->setFirstName('Молибог');
        $this->object->setSecondName('Ляшенко');
        $this->assertEquals('1-Молибог Ляшенко', $this->object->genderAutoDetect().'-Молибог Ляшенко');
    }
    public function testGenDetect300()
    {
        $this->object->setFirstName('Мстибог');
        $this->object->setSecondName('Мірошниченко');
        $this->assertEquals('1-Мстибог Мірошниченко', $this->object->genderAutoDetect().'-Мстибог Мірошниченко');
    }
    public function testGenDetect301()
    {
        $this->object->setFirstName('Мстивой');
        $this->object->setSecondName('Мірчук');
        $this->assertEquals('1-Мстивой Мірчук', $this->object->genderAutoDetect().'-Мстивой Мірчук');
    }
    public function testGenDetect302()
    {
        $this->object->setFirstName('Мстислав');
        $this->object->setSecondName('Міщенко');
        $this->assertEquals('1-Мстислав Міщенко', $this->object->genderAutoDetect().'-Мстислав Міщенко');
    }
    public function testGenDetect303()
    {
        $this->object->setFirstName('Мудролюб');
        $this->object->setSecondName('Мазаракі');
        $this->assertEquals('1-Мудролюб Мазаракі', $this->object->genderAutoDetect().'-Мудролюб Мазаракі');
    }
    public function testGenDetect304()
    {
        $this->object->setFirstName('Нагнибіда');
        $this->object->setSecondName('Мазепи');
        $this->assertEquals('1-Нагнибіда Мазепи', $this->object->genderAutoDetect().'-Нагнибіда Мазепи');
    }
    public function testGenDetect305()
    {
        $this->object->setFirstName('Надій');
        $this->object->setSecondName('Мазур');
        $this->assertEquals('1-Надій Мазур', $this->object->genderAutoDetect().'-Надій Мазур');
    }
    public function testGenDetect306()
    {
        $this->object->setFirstName('Найден');
        $this->object->setSecondName('Макаренко');
        $this->assertEquals('1-Найден Макаренко', $this->object->genderAutoDetect().'-Найден Макаренко');
    }
    public function testGenDetect307()
    {
        $this->object->setFirstName('Наслав');
        $this->object->setSecondName('Максименко');
        $this->assertEquals('1-Наслав Максименко', $this->object->genderAutoDetect().'-Наслав Максименко');
    }
    public function testGenDetect308()
    {
        $this->object->setFirstName('Недан');
        $this->object->setSecondName('Маланчук');
        $this->assertEquals('1-Недан Маланчук', $this->object->genderAutoDetect().'-Недан Маланчук');
    }
    public function testGenDetect309()
    {
        $this->object->setFirstName('Немир');
        $this->object->setSecondName('Малаховські');
        $this->assertEquals('1-Немир Малаховські', $this->object->genderAutoDetect().'-Немир Малаховські');
    }
    public function testGenDetect310()
    {
        $this->object->setFirstName('Непобор');
        $this->object->setSecondName('Малишко');
        $this->assertEquals('1-Непобор Малишко', $this->object->genderAutoDetect().'-Непобор Малишко');
    }
    public function testGenDetect311()
    {
        $this->object->setFirstName('Нігослав');
        $this->object->setSecondName('Малкович');
        $this->assertEquals('1-Нігослав Малкович', $this->object->genderAutoDetect().'-Нігослав Малкович');
    }
    public function testGenDetect312()
    {
        $this->object->setFirstName('Назар');
        $this->object->setSecondName('Мамчур');
        $this->assertEquals('1-Назар Мамчур', $this->object->genderAutoDetect().'-Назар Мамчур');
    }
    public function testGenDetect313()
    {
        $this->object->setFirstName('Одинець');
        $this->object->setSecondName('Маркевич');
        $this->assertEquals('1-Одинець Маркевич', $this->object->genderAutoDetect().'-Одинець Маркевич');
    }
    public function testGenDetect314()
    {
        $this->object->setFirstName('Олег');
        $this->object->setSecondName('Маркевичі');
        $this->assertEquals('1-Олег Маркевичі', $this->object->genderAutoDetect().'-Олег Маркевичі');
    }
    public function testGenDetect315()
    {
        $this->object->setFirstName('Олександр');
        $this->object->setSecondName('Мартиненко');
        $this->assertEquals('1-Олександр Мартиненко', $this->object->genderAutoDetect().'-Олександр Мартиненко');
    }
    public function testGenDetect316()
    {
        $this->object->setFirstName('Олексій');
        $this->object->setSecondName('Мартоси');
        $this->assertEquals('1-Олексій Мартоси', $this->object->genderAutoDetect().'-Олексій Мартоси');
    }
    public function testGenDetect317()
    {
        $this->object->setFirstName('Олесь');
        $this->object->setSecondName('Марунчак');
        $this->assertEquals('1-Олесь Марунчак', $this->object->genderAutoDetect().'-Олесь Марунчак');
    }
    public function testGenDetect318()
    {
        $this->object->setFirstName('Олелько');
        $this->object->setSecondName('Марценюк');
        $this->assertEquals('1-Олелько Марценюк', $this->object->genderAutoDetect().'-Олелько Марценюк');
    }
    public function testGenDetect319()
    {
        $this->object->setFirstName('Орел');
        $this->object->setSecondName('Марченко');
        $this->assertEquals('1-Орел Марченко', $this->object->genderAutoDetect().'-Орел Марченко');
    }
    public function testGenDetect320()
    {
        $this->object->setFirstName('Орест');
        $this->object->setSecondName('Марчук');
        $this->assertEquals('1-Орест Марчук', $this->object->genderAutoDetect().'-Орест Марчук');
    }
    public function testGenDetect321()
    {
        $this->object->setFirstName('Орь');
        $this->object->setSecondName('Масоха');
        $this->assertEquals('1-Орь Масоха', $this->object->genderAutoDetect().'-Орь Масоха');
    }
    public function testGenDetect322()
    {
        $this->object->setFirstName('Оримир');
        $this->object->setSecondName('Матвієнко');
        $this->assertEquals('1-Оримир Матвієнко', $this->object->genderAutoDetect().'-Оримир Матвієнко');
    }
    public function testGenDetect323()
    {
        $this->object->setFirstName('Осмомисл');
        $this->object->setSecondName('Матюшенко');
        $this->assertEquals('1-Осмомисл Матюшенко', $this->object->genderAutoDetect().'-Осмомисл Матюшенко');
    }
    public function testGenDetect324()
    {
        $this->object->setFirstName('Острозор');
        $this->object->setSecondName('Маценко');
        $this->assertEquals('1-Острозор Маценко', $this->object->genderAutoDetect().'-Острозор Маценко');
    }
    public function testGenDetect325()
    {
        $this->object->setFirstName('Остромир');
        $this->object->setSecondName('Мацюк');
        $this->assertEquals('1-Остромир Мацюк', $this->object->genderAutoDetect().'-Остромир Мацюк');
    }
    public function testGenDetect326()
    {
        $this->object->setFirstName('Остромов');
        $this->object->setSecondName('Мельник');
        $this->assertEquals('1-Остромов Мельник', $this->object->genderAutoDetect().'-Остромов Мельник');
    }
    public function testGenDetect327()
    {
        $this->object->setFirstName('Охрім');
        $this->object->setSecondName('Мельниченко');
        $this->assertEquals('1-Охрім Мельниченко', $this->object->genderAutoDetect().'-Охрім Мельниченко');
    }
    public function testGenDetect328()
    {
        $this->object->setFirstName('Павло');
        $this->object->setSecondName('Мельничук');
        $this->assertEquals('1-Павло Мельничук', $this->object->genderAutoDetect().'-Павло Мельничук');
    }
    public function testGenDetect329()
    {
        $this->object->setFirstName('Первушко');
        $this->object->setSecondName('Микитенко');
        $this->assertEquals('1-Первушко Микитенко', $this->object->genderAutoDetect().'-Первушко Микитенко');
    }
    public function testGenDetect330()
    {
        $this->object->setFirstName('Перелюб');
        $this->object->setSecondName('Микитин');
        $this->assertEquals('1-Перелюб Микитин', $this->object->genderAutoDetect().'-Перелюб Микитин');
    }
    public function testGenDetect331()
    {
        $this->object->setFirstName('Перемил');
        $this->object->setSecondName('Милорадовичі');
        $this->assertEquals('1-Перемил Милорадовичі', $this->object->genderAutoDetect().'-Перемил Милорадовичі');
    }
    public function testGenDetect332()
    {
        $this->object->setFirstName('Перемисл');
        $this->object->setSecondName('Мирон');
        $this->assertEquals('1-Перемисл Мирон', $this->object->genderAutoDetect().'-Перемисл Мирон');
    }
    public function testGenDetect333()
    {
        $this->object->setFirstName('Пересвіт');
        $this->object->setSecondName('Михайленко');
        $this->assertEquals('1-Пересвіт Михайленко', $this->object->genderAutoDetect().'-Пересвіт Михайленко');
    }
    public function testGenDetect334()
    {
        $this->object->setFirstName('Переяслав');
        $this->object->setSecondName('Михайличенко');
        $this->assertEquals('1-Переяслав Михайличенко', $this->object->genderAutoDetect().'-Переяслав Михайличенко');
    }
    public function testGenDetect335()
    {
        $this->object->setFirstName('Першик');
        $this->object->setSecondName('Михайлюк');
        $this->assertEquals('1-Першик Михайлюк', $this->object->genderAutoDetect().'-Першик Михайлюк');
    }
    public function testGenDetect336()
    {
        $this->object->setFirstName('Подолян');
        $this->object->setSecondName('Мицик');
        $this->assertEquals('1-Подолян Мицик', $this->object->genderAutoDetect().'-Подолян Мицик');
    }
    public function testGenDetect337()
    {
        $this->object->setFirstName('Позвізд');
        $this->object->setSecondName('Мовчан');
        $this->assertEquals('1-Позвізд Мовчан', $this->object->genderAutoDetect().'-Позвізд Мовчан');
    }
    public function testGenDetect338()
    {
        $this->object->setFirstName('Полель');
        $this->object->setSecondName('Могили');
        $this->assertEquals('1-Полель Могили', $this->object->genderAutoDetect().'-Полель Могили');
    }
    public function testGenDetect339()
    {
        $this->object->setFirstName('Полян');
        $this->object->setSecondName('Модзалевські');
        $this->assertEquals('1-Полян Модзалевські', $this->object->genderAutoDetect().'-Полян Модзалевські');
    }
    public function testGenDetect340()
    {
        $this->object->setFirstName('Пребислав');
        $this->object->setSecondName('Моргун');
        $this->assertEquals('1-Пребислав Моргун', $this->object->genderAutoDetect().'-Пребислав Моргун');
    }
    public function testGenDetect341()
    {
        $this->object->setFirstName('Предислав');
        $this->object->setSecondName('Мороз');
        $this->assertEquals('1-Предислав Мороз', $this->object->genderAutoDetect().'-Предислав Мороз');
    }
    public function testGenDetect342()
    {
        $this->object->setFirstName('Пугач');
        $this->object->setSecondName('Мосендзи');
        $this->assertEquals('1-Пугач Мосендзи', $this->object->genderAutoDetect().'-Пугач Мосендзи');
    }
    public function testGenDetect343()
    {
        $this->object->setFirstName('Путило');
        $this->object->setSecondName('Москаленко');
        $this->assertEquals('1-Путило Москаленко', $this->object->genderAutoDetect().'-Путило Москаленко');
    }
    public function testGenDetect344()
    {
        $this->object->setFirstName('Путята');
        $this->object->setSecondName('Москаль');
        $this->assertEquals('1-Путята Москаль', $this->object->genderAutoDetect().'-Путята Москаль');
    }
    public function testGenDetect345()
    {
        $this->object->setFirstName('Рава');
        $this->object->setSecondName('Мошак');
        $this->assertEquals('1-Рава Мошак', $this->object->genderAutoDetect().'-Рава Мошак');
    }
    public function testGenDetect346()
    {
        $this->object->setFirstName('Рад');
        $this->object->setSecondName('Муратова');
        $this->assertEquals('1-Рад Муратова', $this->object->genderAutoDetect().'-Рад Муратова');
    }
    public function testGenDetect347()
    {
        $this->object->setFirstName('Радечко');
        $this->object->setSecondName('Мусієнко');
        $this->assertEquals('1-Радечко Мусієнко', $this->object->genderAutoDetect().'-Радечко Мусієнко');
    }
    public function testGenDetect348()
    {
        $this->object->setFirstName('Радивой');
        $this->object->setSecondName('Назаренко');
        $this->assertEquals('1-Радивой Назаренко', $this->object->genderAutoDetect().'-Радивой Назаренко');
    }
    public function testGenDetect349()
    {
        $this->object->setFirstName('Радило');
        $this->object->setSecondName('Наливайко');
        $this->assertEquals('1-Радило Наливайко', $this->object->genderAutoDetect().'-Радило Наливайко');
    }
    public function testGenDetect350()
    {
        $this->object->setFirstName('Радим');
        $this->object->setSecondName('Нащинські');
        $this->assertEquals('1-Радим Нащинські', $this->object->genderAutoDetect().'-Радим Нащинські');
    }
    public function testGenDetect351()
    {
        $this->object->setFirstName('Радимир');
        $this->object->setSecondName('Негребецький');
        $this->assertEquals('1-Радимир Негребецький', $this->object->genderAutoDetect().'-Радимир Негребецький');
    }
    public function testGenDetect352()
    {
        $this->object->setFirstName('Радислав');
        $this->object->setSecondName('Непорожній');
        $this->assertEquals('1-Радислав Непорожній', $this->object->genderAutoDetect().'-Радислав Непорожній');
    }
    public function testGenDetect353()
    {
        $this->object->setFirstName('Радко');
        $this->object->setSecondName('Нестеренко');
        $this->assertEquals('1-Радко Нестеренко', $this->object->genderAutoDetect().'-Радко Нестеренко');
    }
    public function testGenDetect354()
    {
        $this->object->setFirstName('Радован');
        $this->object->setSecondName('Нечай');
        $this->assertEquals('1-Радован Нечай', $this->object->genderAutoDetect().'-Радован Нечай');
    }
    public function testGenDetect355()
    {
        $this->object->setFirstName('Радогост');
        $this->object->setSecondName('Нечипоренко');
        $this->assertEquals('1-Радогост Нечипоренко', $this->object->genderAutoDetect().'-Радогост Нечипоренко');
    }
    public function testGenDetect356()
    {
        $this->object->setFirstName('Радомир');
        $this->object->setSecondName('Оберемченко');
        $this->assertEquals('1-Радомир Оберемченко', $this->object->genderAutoDetect().'-Радомир Оберемченко');
    }
    public function testGenDetect357()
    {
        $this->object->setFirstName('Радомисл');
        $this->object->setSecondName('Овчаренко');
        $this->assertEquals('1-Радомисл Овчаренко', $this->object->genderAutoDetect().'-Радомисл Овчаренко');
    }
    public function testGenDetect358()
    {
        $this->object->setFirstName('Радослав');
        $this->object->setSecondName('Ограновичі');
        $this->assertEquals('1-Радослав Ограновичі', $this->object->genderAutoDetect().'-Радослав Ограновичі');
    }
    public function testGenDetect359()
    {
        $this->object->setFirstName('Ратибор');
        $this->object->setSecondName('Олійник');
        $this->assertEquals('1-Ратибор Олійник', $this->object->genderAutoDetect().'-Ратибор Олійник');
    }
    public function testGenDetect360()
    {
        $this->object->setFirstName('Ратимир');
        $this->object->setSecondName('Олексієнко');
        $this->assertEquals('1-Ратимир Олексієнко', $this->object->genderAutoDetect().'-Ратимир Олексієнко');
    }
    public function testGenDetect361()
    {
        $this->object->setFirstName('Ратислав');
        $this->object->setSecondName('Омельченко');
        $this->assertEquals('1-Ратислав Омельченко', $this->object->genderAutoDetect().'-Ратислав Омельченко');
    }
    public function testGenDetect362()
    {
        $this->object->setFirstName('Ревун');
        $this->object->setSecondName('Омельчук');
        $this->assertEquals('1-Ревун Омельчук', $this->object->genderAutoDetect().'-Ревун Омельчук');
    }
    public function testGenDetect363()
    {
        $this->object->setFirstName('Рід');
        $this->object->setSecondName('Онищенко');
        $this->assertEquals('1-Рід Онищенко', $this->object->genderAutoDetect().'-Рід Онищенко');
    }
    public function testGenDetect364()
    {
        $this->object->setFirstName('Рогволод');
        $this->object->setSecondName('Онопенко');
        $this->assertEquals('1-Рогволод Онопенко', $this->object->genderAutoDetect().'-Рогволод Онопенко');
    }
    public function testGenDetect365()
    {
        $this->object->setFirstName('Родан');
        $this->object->setSecondName('Опанасенко');
        $this->assertEquals('1-Родан Опанасенко', $this->object->genderAutoDetect().'-Родан Опанасенко');
    }
    public function testGenDetect366()
    {
        $this->object->setFirstName('Родослав');
        $this->object->setSecondName('Орлики');
        $this->assertEquals('1-Родослав Орлики', $this->object->genderAutoDetect().'-Родослав Орлики');
    }
    public function testGenDetect367()
    {
        $this->object->setFirstName('Рожден');
        $this->object->setSecondName('Осадчук');
        $this->assertEquals('1-Рожден Осадчук', $this->object->genderAutoDetect().'-Рожден Осадчук');
    }
    public function testGenDetect368()
    {
        $this->object->setFirstName('Розум');
        $this->object->setSecondName('Осика');
        $this->assertEquals('1-Розум Осика', $this->object->genderAutoDetect().'-Розум Осика');
    }
    public function testGenDetect369()
    {
        $this->object->setFirstName('Роксолан');
        $this->object->setSecondName('Остапенко');
        $this->assertEquals('1-Роксолан Остапенко', $this->object->genderAutoDetect().'-Роксолан Остапенко');
    }
    public function testGenDetect370()
    {
        $this->object->setFirstName('Роман');
        $this->object->setSecondName('Остроградський');
        $this->assertEquals('1-Роман Остроградський', $this->object->genderAutoDetect().'-Роман Остроградський');
    }
    public function testGenDetect371()
    {
        $this->object->setFirstName('Ростислав');
        $this->object->setSecondName('Острозькі');
        $this->assertEquals('1-Ростислав Острозькі', $this->object->genderAutoDetect().'-Ростислав Острозькі');
    }
    public function testGenDetect372()
    {
        $this->object->setFirstName('Ростичар');
        $this->object->setSecondName('Півторак');
        $this->assertEquals('1-Ростичар Півторак', $this->object->genderAutoDetect().'-Ростичар Півторак');
    }
    public function testGenDetect373()
    {
        $this->object->setFirstName('Ростун');
        $this->object->setSecondName('Підопригора');
        $this->assertEquals('1-Ростун Підопригора', $this->object->genderAutoDetect().'-Ростун Підопригора');
    }
    public function testGenDetect374()
    {
        $this->object->setFirstName('Рудан');
        $this->object->setSecondName('Павленко');
        $this->assertEquals('1-Рудан Павленко', $this->object->genderAutoDetect().'-Рудан Павленко');
    }
    public function testGenDetect375()
    {
        $this->object->setFirstName('Рус');
        $this->object->setSecondName('Павлюк');
        $this->assertEquals('1-Рус Павлюк', $this->object->genderAutoDetect().'-Рус Павлюк');
    }
    public function testGenDetect376()
    {
        $this->object->setFirstName('Руслан');
        $this->object->setSecondName('Павлюченко');
        $this->assertEquals('1-Руслан Павлюченко', $this->object->genderAutoDetect().'-Руслан Павлюченко');
    }
    public function testGenDetect377()
    {
        $this->object->setFirstName('Русудан');
        $this->object->setSecondName('Пазенко');
        $this->assertEquals('1-Русудан Пазенко', $this->object->genderAutoDetect().'-Русудан Пазенко');
    }
    public function testGenDetect378()
    {
        $this->object->setFirstName('Сармат');
        $this->object->setSecondName('Паламарчук');
        $this->assertEquals('1-Сармат Паламарчук', $this->object->genderAutoDetect().'-Сармат Паламарчук');
    }
    public function testGenDetect379()
    {
        $this->object->setFirstName('Сварг');
        $this->object->setSecondName('Панас');
        $this->assertEquals('1-Сварг Панас', $this->object->genderAutoDetect().'-Сварг Панас');
    }
    public function testGenDetect380()
    {
        $this->object->setFirstName('Сват');
        $this->object->setSecondName('Панасюк');
        $this->assertEquals('1-Сват Панасюк', $this->object->genderAutoDetect().'-Сват Панасюк');
    }
    public function testGenDetect381()
    {
        $this->object->setFirstName('Світ');
        $this->object->setSecondName('Паньківський');
        $this->assertEquals('1-Світ Паньківський', $this->object->genderAutoDetect().'-Світ Паньківський');
    }
    public function testGenDetect382()
    {
        $this->object->setFirstName('Світлан');
        $this->object->setSecondName('Пархоменко');
        $this->assertEquals('1-Світлан Пархоменко', $this->object->genderAutoDetect().'-Світлан Пархоменко');
    }
    public function testGenDetect383()
    {
        $this->object->setFirstName('Світлогор');
        $this->object->setSecondName('Пасічник');
        $this->assertEquals('1-Світлогор Пасічник', $this->object->genderAutoDetect().'-Світлогор Пасічник');
    }
    public function testGenDetect384()
    {
        $this->object->setFirstName('Світогор');
        $this->object->setSecondName('Пасько');
        $this->assertEquals('1-Світогор Пасько', $this->object->genderAutoDetect().'-Світогор Пасько');
    }
    public function testGenDetect385()
    {
        $this->object->setFirstName('Світовид');
        $this->object->setSecondName('Пашко');
        $this->assertEquals('1-Світовид Пашко', $this->object->genderAutoDetect().'-Світовид Пашко');
    }
    public function testGenDetect386()
    {
        $this->object->setFirstName('Світодар');
        $this->object->setSecondName('Пащенко');
        $this->assertEquals('1-Світодар Пащенко', $this->object->genderAutoDetect().'-Світодар Пащенко');
    }
    public function testGenDetect387()
    {
        $this->object->setFirstName('Світозар');
        $this->object->setSecondName('Перебийніс');
        $this->assertEquals('1-Світозар Перебийніс', $this->object->genderAutoDetect().'-Світозар Перебийніс');
    }
    public function testGenDetect388()
    {
        $this->object->setFirstName('Світокол');
        $this->object->setSecondName('Петренко');
        $this->assertEquals('1-Світокол Петренко', $this->object->genderAutoDetect().'-Світокол Петренко');
    }
    public function testGenDetect389()
    {
        $this->object->setFirstName('Світолик');
        $this->object->setSecondName('Пилипенко');
        $this->assertEquals('1-Світолик Пилипенко', $this->object->genderAutoDetect().'-Світолик Пилипенко');
    }
    public function testGenDetect390()
    {
        $this->object->setFirstName('Світолюб');
        $this->object->setSecondName('Пилипишин');
        $this->assertEquals('1-Світолюб Пилипишин', $this->object->genderAutoDetect().'-Світолюб Пилипишин');
    }
    public function testGenDetect391()
    {
        $this->object->setFirstName('Світомир');
        $this->object->setSecondName('Пилипчук');
        $this->assertEquals('1-Світомир Пилипчук', $this->object->genderAutoDetect().'-Світомир Пилипчук');
    }
    public function testGenDetect392()
    {
        $this->object->setFirstName('Світослав');
        $this->object->setSecondName('Писаренко');
        $this->assertEquals('1-Світослав Писаренко', $this->object->genderAutoDetect().'-Світослав Писаренко');
    }
    public function testGenDetect393()
    {
        $this->object->setFirstName('Світояр');
        $this->object->setSecondName('Писарчук');
        $this->assertEquals('1-Світояр Писарчук', $this->object->genderAutoDetect().'-Світояр Писарчук');
    }
    public function testGenDetect394()
    {
        $this->object->setFirstName('Свободан');
        $this->object->setSecondName('Плющ');
        $this->assertEquals('1-Свободан Плющ', $this->object->genderAutoDetect().'-Свободан Плющ');
    }
    public function testGenDetect395()
    {
        $this->object->setFirstName('Святовид');
        $this->object->setSecondName('Покотило');
        $this->assertEquals('1-Святовид Покотило', $this->object->genderAutoDetect().'-Святовид Покотило');
    }
    public function testGenDetect396()
    {
        $this->object->setFirstName('Святогор');
        $this->object->setSecondName('Поліщук');
        $this->assertEquals('1-Святогор Поліщук', $this->object->genderAutoDetect().'-Святогор Поліщук');
    }
    public function testGenDetect397()
    {
        $this->object->setFirstName('Святолюб');
        $this->object->setSecondName('Польовий');
        $this->assertEquals('1-Святолюб Польовий', $this->object->genderAutoDetect().'-Святолюб Польовий');
    }
    public function testGenDetect398()
    {
        $this->object->setFirstName('Святополк');
        $this->object->setSecondName('Полянський');
        $this->assertEquals('1-Святополк Полянський', $this->object->genderAutoDetect().'-Святополк Полянський');
    }
    public function testGenDetect399()
    {
        $this->object->setFirstName('Святослав');
        $this->object->setSecondName('Пономаренко');
        $this->assertEquals('1-Святослав Пономаренко', $this->object->genderAutoDetect().'-Святослав Пономаренко');
    }
    public function testGenDetect400()
    {
        $this->object->setFirstName('Семибор');
        $this->object->setSecondName('Пономарьов');
        $this->assertEquals('1-Семибор Пономарьов', $this->object->genderAutoDetect().'-Семибор Пономарьов');
    }
    public function testGenDetect401()
    {
        $this->object->setFirstName('Семирад');
        $this->object->setSecondName('Попадюк');
        $this->assertEquals('1-Семирад Попадюк', $this->object->genderAutoDetect().'-Семирад Попадюк');
    }
    public function testGenDetect402()
    {
        $this->object->setFirstName('Сердитко');
        $this->object->setSecondName('Попенко');
        $this->assertEquals('1-Сердитко Попенко', $this->object->genderAutoDetect().'-Сердитко Попенко');
    }
    public function testGenDetect403()
    {
        $this->object->setFirstName('Сила');
        $this->object->setSecondName('Потапенко');
        $this->assertEquals('1-Сила Потапенко', $this->object->genderAutoDetect().'-Сила Потапенко');
    }
    public function testGenDetect404()
    {
        $this->object->setFirstName('Силолюб');
        $this->object->setSecondName('Потебенько');
        $this->assertEquals('1-Силолюб Потебенько', $this->object->genderAutoDetect().'-Силолюб Потебенько');
    }
    public function testGenDetect405()
    {
        $this->object->setFirstName('Силослав');
        $this->object->setSecondName('Прийма');
        $this->assertEquals('1-Силослав Прийма', $this->object->genderAutoDetect().'-Силослав Прийма');
    }
    public function testGenDetect406()
    {
        $this->object->setFirstName('Синьоок');
        $this->object->setSecondName('Приймак');
        $this->assertEquals('1-Синьоок Приймак', $this->object->genderAutoDetect().'-Синьоок Приймак');
    }
    public function testGenDetect407()
    {
        $this->object->setFirstName('Скол');
        $this->object->setSecondName('Присяжнюк');
        $this->assertEquals('1-Скол Присяжнюк', $this->object->genderAutoDetect().'-Скол Присяжнюк');
    }
    public function testGenDetect408()
    {
        $this->object->setFirstName('Слава');
        $this->object->setSecondName('Приходько');
        $this->assertEquals('1-Слава Приходько', $this->object->genderAutoDetect().'-Слава Приходько');
    }
    public function testGenDetect409()
    {
        $this->object->setFirstName('Славобор');
        $this->object->setSecondName('Продан');
        $this->assertEquals('1-Славобор Продан', $this->object->genderAutoDetect().'-Славобор Продан');
    }
    public function testGenDetect410()
    {
        $this->object->setFirstName('Славолюб');
        $this->object->setSecondName('Проценко');
        $this->assertEquals('1-Славолюб Проценко', $this->object->genderAutoDetect().'-Славолюб Проценко');
    }
    public function testGenDetect411()
    {
        $this->object->setFirstName('Славомир');
        $this->object->setSecondName('Проць');
        $this->assertEquals('1-Славомир Проць', $this->object->genderAutoDetect().'-Славомир Проць');
    }
    public function testGenDetect412()
    {
        $this->object->setFirstName('Славута');
        $this->object->setSecondName('Процюк');
        $this->assertEquals('1-Славута Процюк', $this->object->genderAutoDetect().'-Славута Процюк');
    }
    public function testGenDetect413()
    {
        $this->object->setFirstName('Снага');
        $this->object->setSecondName('Пушкар');
        $this->assertEquals('1-Снага Пушкар', $this->object->genderAutoDetect().'-Снага Пушкар');
    }
    public function testGenDetect414()
    {
        $this->object->setFirstName('Сніжан');
        $this->object->setSecondName('Різенки');
        $this->assertEquals('1-Сніжан Різенки', $this->object->genderAutoDetect().'-Сніжан Різенки');
    }
    public function testGenDetect415()
    {
        $this->object->setFirstName('Сновид');
        $this->object->setSecondName('Різун');
        $this->assertEquals('1-Сновид Різун', $this->object->genderAutoDetect().'-Сновид Різун');
    }
    public function testGenDetect416()
    {
        $this->object->setFirstName('Снозір');
        $this->object->setSecondName('Радченко');
        $this->assertEquals('1-Снозір Радченко', $this->object->genderAutoDetect().'-Снозір Радченко');
    }
    public function testGenDetect417()
    {
        $this->object->setFirstName('Собібор');
        $this->object->setSecondName('Рибальченко');
        $this->assertEquals('1-Собібор Рибальченко', $this->object->genderAutoDetect().'-Собібор Рибальченко');
    }
    public function testGenDetect418()
    {
        $this->object->setFirstName('Собімир');
        $this->object->setSecondName('Римар');
        $this->assertEquals('1-Собімир Римар', $this->object->genderAutoDetect().'-Собімир Римар');
    }
    public function testGenDetect419()
    {
        $this->object->setFirstName('Собіслав');
        $this->object->setSecondName('Родзянки');
        $this->assertEquals('1-Собіслав Родзянки', $this->object->genderAutoDetect().'-Собіслав Родзянки');
    }
    public function testGenDetect420()
    {
        $this->object->setFirstName('Сокіл');
        $this->object->setSecondName('Рожок');
        $this->assertEquals('1-Сокіл Рожок', $this->object->genderAutoDetect().'-Сокіл Рожок');
    }
    public function testGenDetect421()
    {
        $this->object->setFirstName('Соловей');
        $this->object->setSecondName('Розумовські');
        $this->assertEquals('1-Соловей Розумовські', $this->object->genderAutoDetect().'-Соловей Розумовські');
    }
    public function testGenDetect422()
    {
        $this->object->setFirstName('Сологуб');
        $this->object->setSecondName('Романенко');
        $this->assertEquals('1-Сологуб Романенко', $this->object->genderAutoDetect().'-Сологуб Романенко');
    }
    public function testGenDetect423()
    {
        $this->object->setFirstName('Сонцевид');
        $this->object->setSecondName('Романишин');
        $this->assertEquals('1-Сонцевид Романишин', $this->object->genderAutoDetect().'-Сонцевид Романишин');
    }
    public function testGenDetect424()
    {
        $this->object->setFirstName('Сонцедар');
        $this->object->setSecondName('Романчук');
        $this->assertEquals('1-Сонцедар Романчук', $this->object->genderAutoDetect().'-Сонцедар Романчук');
    }
    public function testGenDetect425()
    {
        $this->object->setFirstName('Сонцелик');
        $this->object->setSecondName('Романюк');
        $this->assertEquals('1-Сонцелик Романюк', $this->object->genderAutoDetect().'-Сонцелик Романюк');
    }
    public function testGenDetect426()
    {
        $this->object->setFirstName('Спас');
        $this->object->setSecondName('Рошкевич');
        $this->assertEquals('1-Спас Рошкевич', $this->object->genderAutoDetect().'-Спас Рошкевич');
    }
    public function testGenDetect427()
    {
        $this->object->setFirstName('Станимир');
        $this->object->setSecondName('Рубан');
        $this->assertEquals('1-Станимир Рубан', $this->object->genderAutoDetect().'-Станимир Рубан');
    }
    public function testGenDetect428()
    {
        $this->object->setFirstName('Станіслав');
        $this->object->setSecondName('Рубани');
        $this->assertEquals('1-Станіслав Рубани', $this->object->genderAutoDetect().'-Станіслав Рубани');
    }
    public function testGenDetect429()
    {
        $this->object->setFirstName('Стародум');
        $this->object->setSecondName('Руденко');
        $this->assertEquals('1-Стародум Руденко', $this->object->genderAutoDetect().'-Стародум Руденко');
    }
    public function testGenDetect430()
    {
        $this->object->setFirstName('Степан');
        $this->object->setSecondName('Рябовіл');
        $this->assertEquals('1-Степан Рябовіл', $this->object->genderAutoDetect().'-Степан Рябовіл');
    }
    public function testGenDetect431()
    {
        $this->object->setFirstName('Стефаній');
        $this->object->setSecondName('Сімашкевич');
        $this->assertEquals('1-Стефаній Сімашкевич', $this->object->genderAutoDetect().'-Стефаній Сімашкевич');
    }
    public function testGenDetect432()
    {
        $this->object->setFirstName('Стожар');
        $this->object->setSecondName('Саєнко');
        $this->assertEquals('1-Стожар Саєнко', $this->object->genderAutoDetect().'-Стожар Саєнко');
    }
    public function testGenDetect433()
    {
        $this->object->setFirstName('Стоймир');
        $this->object->setSecondName('Савенко');
        $this->assertEquals('1-Стоймир Савенко', $this->object->genderAutoDetect().'-Стоймир Савенко');
    }
    public function testGenDetect434()
    {
        $this->object->setFirstName('Стоян');
        $this->object->setSecondName('Савицька');
        $this->assertEquals('1-Стоян Савицька', $this->object->genderAutoDetect().'-Стоян Савицька');
    }
    public function testGenDetect435()
    {
        $this->object->setFirstName('Судивой');
        $this->object->setSecondName('Савка');
        $this->assertEquals('1-Судивой Савка', $this->object->genderAutoDetect().'-Судивой Савка');
    }
    public function testGenDetect436()
    {
        $this->object->setFirstName('Судимир');
        $this->object->setSecondName('Савченко');
        $this->assertEquals('1-Судимир Савченко', $this->object->genderAutoDetect().'-Судимир Савченко');
    }
    public function testGenDetect437()
    {
        $this->object->setFirstName('Судислав');
        $this->object->setSecondName('Савчук');
        $this->assertEquals('1-Судислав Савчук', $this->object->genderAutoDetect().'-Судислав Савчук');
    }
    public function testGenDetect438()
    {
        $this->object->setFirstName('Сурма');
        $this->object->setSecondName('Сак');
        $this->assertEquals('1-Сурма Сак', $this->object->genderAutoDetect().'-Сурма Сак');
    }
    public function testGenDetect439()
    {
        $this->object->setFirstName('Тарас');
        $this->object->setSecondName('Самборський');
        $this->assertEquals('1-Тарас Самборський', $this->object->genderAutoDetect().'-Тарас Самборський');
    }
    public function testGenDetect440()
    {
        $this->object->setFirstName('Татолюб');
        $this->object->setSecondName('Самойлович');
        $this->assertEquals('1-Татолюб Самойлович', $this->object->genderAutoDetect().'-Татолюб Самойлович');
    }
    public function testGenDetect441()
    {
        $this->object->setFirstName('Татомир');
        $this->object->setSecondName('Самусь');
        $this->assertEquals('1-Татомир Самусь', $this->object->genderAutoDetect().'-Татомир Самусь');
    }
    public function testGenDetect442()
    {
        $this->object->setFirstName('Твердигост');
        $this->object->setSecondName('Свида');
        $this->assertEquals('1-Твердигост Свида', $this->object->genderAutoDetect().'-Твердигост Свида');
    }
    public function testGenDetect443()
    {
        $this->object->setFirstName('Твердислав');
        $this->object->setSecondName('Семашко');
        $this->assertEquals('1-Твердислав Семашко', $this->object->genderAutoDetect().'-Твердислав Семашко');
    }
    public function testGenDetect444()
    {
        $this->object->setFirstName('Творилад');
        $this->object->setSecondName('Семененко');
        $this->assertEquals('1-Творилад Семененко', $this->object->genderAutoDetect().'-Творилад Семененко');
    }
    public function testGenDetect445()
    {
        $this->object->setFirstName('Творимир');
        $this->object->setSecondName('Семенець');
        $this->assertEquals('1-Творимир Семенець', $this->object->genderAutoDetect().'-Творимир Семенець');
    }
    public function testGenDetect446()
    {
        $this->object->setFirstName('Творислав');
        $this->object->setSecondName('Семенина');
        $this->assertEquals('1-Творислав Семенина', $this->object->genderAutoDetect().'-Творислав Семенина');
    }
    public function testGenDetect447()
    {
        $this->object->setFirstName('Тихомир');
        $this->object->setSecondName('Семенченко');
        $this->assertEquals('1-Тихомир Семенченко', $this->object->genderAutoDetect().'-Тихомир Семенченко');
    }
    public function testGenDetect448()
    {
        $this->object->setFirstName('Тихон');
        $this->object->setSecondName('Семенюк');
        $this->assertEquals('1-Тихон Семенюк', $this->object->genderAutoDetect().'-Тихон Семенюк');
    }
    public function testGenDetect449()
    {
        $this->object->setFirstName('Толигнів');
        $this->object->setSecondName('Семеренко');
        $this->assertEquals('1-Толигнів Семеренко', $this->object->genderAutoDetect().'-Толигнів Семеренко');
    }
    public function testGenDetect450()
    {
        $this->object->setFirstName('Толислав');
        $this->object->setSecondName('Сидоренко');
        $this->assertEquals('1-Толислав Сидоренко', $this->object->genderAutoDetect().'-Толислав Сидоренко');
    }
    public function testGenDetect451()
    {
        $this->object->setFirstName('Тригост');
        $this->object->setSecondName('Силенко');
        $this->assertEquals('1-Тригост Силенко', $this->object->genderAutoDetect().'-Тригост Силенко');
    }
    public function testGenDetect452()
    {
        $this->object->setFirstName('Троян');
        $this->object->setSecondName('Симоненко');
        $this->assertEquals('1-Троян Симоненко', $this->object->genderAutoDetect().'-Троян Симоненко');
    }
    public function testGenDetect453()
    {
        $this->object->setFirstName('Триріг');
        $this->object->setSecondName('Симчич');
        $this->assertEquals('1-Триріг Симчич', $this->object->genderAutoDetect().'-Триріг Симчич');
    }
    public function testGenDetect454()
    {
        $this->object->setFirstName('Тур');
        $this->object->setSecondName('Скаржинські');
        $this->assertEquals('1-Тур Скаржинські', $this->object->genderAutoDetect().'-Тур Скаржинські');
    }
    public function testGenDetect455()
    {
        $this->object->setFirstName('Турбог');
        $this->object->setSecondName('Скоропадські');
        $this->assertEquals('1-Турбог Скоропадські', $this->object->genderAutoDetect().'-Турбог Скоропадські');
    }
    public function testGenDetect456()
    {
        $this->object->setFirstName('Турбрід');
        $this->object->setSecondName('Скрипник');
        $this->assertEquals('1-Турбрід Скрипник', $this->object->genderAutoDetect().'-Турбрід Скрипник');
    }
    public function testGenDetect457()
    {
        $this->object->setFirstName('Уличан');
        $this->object->setSecondName('Скуратівський');
        $this->assertEquals('1-Уличан Скуратівський', $this->object->genderAutoDetect().'-Уличан Скуратівський');
    }
    public function testGenDetect458()
    {
        $this->object->setFirstName('Ус');
        $this->object->setSecondName('Слободян');
        $this->assertEquals('1-Ус Слободян', $this->object->genderAutoDetect().'-Ус Слободян');
    }
    public function testGenDetect459()
    {
        $this->object->setFirstName('Хвала');
        $this->object->setSecondName('Слободянюк');
        $this->assertEquals('1-Хвала Слободянюк', $this->object->genderAutoDetect().'-Хвала Слободянюк');
    }
    public function testGenDetect460()
    {
        $this->object->setFirstName('Хвалибог');
        $this->object->setSecondName('Смик');
        $this->assertEquals('1-Хвалибог Смик', $this->object->genderAutoDetect().'-Хвалибог Смик');
    }
    public function testGenDetect461()
    {
        $this->object->setFirstName('Хвалимир');
        $this->object->setSecondName('Смогоржевський');
        $this->assertEquals('1-Хвалимир Смогоржевський', $this->object->genderAutoDetect().'-Хвалимир Смогоржевський');
    }
    public function testGenDetect462()
    {
        $this->object->setFirstName('Ходота');
        $this->object->setSecondName('Собчук');
        $this->assertEquals('1-Ходота Собчук', $this->object->genderAutoDetect().'-Ходота Собчук');
    }
    public function testGenDetect463()
    {
        $this->object->setFirstName('Хорив');
        $this->object->setSecondName('Сопронюк');
        $this->assertEquals('1-Хорив Сопронюк', $this->object->genderAutoDetect().'-Хорив Сопронюк');
    }
    public function testGenDetect464()
    {
        $this->object->setFirstName('Хорошко');
        $this->object->setSecondName('Сорока');
        $this->assertEquals('1-Хорошко Сорока', $this->object->genderAutoDetect().'-Хорошко Сорока');
    }
    public function testGenDetect465()
    {
        $this->object->setFirstName('Хорошун');
        $this->object->setSecondName('Сохань');
        $this->assertEquals('1-Хорошун Сохань', $this->object->genderAutoDetect().'-Хорошун Сохань');
    }
    public function testGenDetect466()
    {
        $this->object->setFirstName('Хотибор');
        $this->object->setSecondName('Стадник');
        $this->assertEquals('1-Хотибор Стадник', $this->object->genderAutoDetect().'-Хотибор Стадник');
    }
    public function testGenDetect467()
    {
        $this->object->setFirstName('Хотимир');
        $this->object->setSecondName('Стельмах');
        $this->assertEquals('1-Хотимир Стельмах', $this->object->genderAutoDetect().'-Хотимир Стельмах');
    }
    public function testGenDetect468()
    {
        $this->object->setFirstName('Хотян');
        $this->object->setSecondName('Степаненко');
        $this->assertEquals('1-Хотян Степаненко', $this->object->genderAutoDetect().'-Хотян Степаненко');
    }
    public function testGenDetect469()
    {
        $this->object->setFirstName('Хранимир');
        $this->object->setSecondName('Степура');
        $this->assertEquals('1-Хранимир Степура', $this->object->genderAutoDetect().'-Хранимир Степура');
    }
    public function testGenDetect470()
    {
        $this->object->setFirstName('Худан');
        $this->object->setSecondName('Стеценко');
        $this->assertEquals('1-Худан Стеценко', $this->object->genderAutoDetect().'-Худан Стеценко');
    }
    public function testGenDetect471()
    {
        $this->object->setFirstName('Царко');
        $this->object->setSecondName('Стецюк');
        $this->assertEquals('1-Царко Стецюк', $this->object->genderAutoDetect().'-Царко Стецюк');
    }
    public function testGenDetect472()
    {
        $this->object->setFirstName('Цвітан');
        $this->object->setSecondName('Стороженки');
        $this->assertEquals('1-Цвітан Стороженки', $this->object->genderAutoDetect().'-Цвітан Стороженки');
    }
    public function testGenDetect473()
    {
        $this->object->setFirstName('Чара');
        $this->object->setSecondName('Струтинський');
        $this->assertEquals('1-Чара Струтинський', $this->object->genderAutoDetect().'-Чара Струтинський');
    }
    public function testGenDetect474()
    {
        $this->object->setFirstName('Чернин');
        $this->object->setSecondName('Сулима');
        $this->assertEquals('1-Чернин Сулима', $this->object->genderAutoDetect().'-Чернин Сулима');
    }
    public function testGenDetect475()
    {
        $this->object->setFirstName('Чеслав');
        $this->object->setSecondName('Сулими');
        $this->assertEquals('1-Чеслав Сулими', $this->object->genderAutoDetect().'-Чеслав Сулими');
    }
    public function testGenDetect476()
    {
        $this->object->setFirstName('Чесмил');
        $this->object->setSecondName('Супруненко');
        $this->assertEquals('1-Чесмил Супруненко', $this->object->genderAutoDetect().'-Чесмил Супруненко');
    }
    public function testGenDetect477()
    {
        $this->object->setFirstName('Честислав');
        $this->object->setSecondName('Танські');
        $this->assertEquals('1-Честислав Танські', $this->object->genderAutoDetect().'-Честислав Танські');
    }
    public function testGenDetect478()
    {
        $this->object->setFirstName('Чорновіл');
        $this->object->setSecondName('Тараненко');
        $this->assertEquals('1-Чорновіл Тараненко', $this->object->genderAutoDetect().'-Чорновіл Тараненко');
    }
    public function testGenDetect479()
    {
        $this->object->setFirstName('Чорнота');
        $this->object->setSecondName('Тарновські');
        $this->assertEquals('1-Чорнота Тарновські', $this->object->genderAutoDetect().'-Чорнота Тарновські');
    }
    public function testGenDetect480()
    {
        $this->object->setFirstName('Чорнотур');
        $this->object->setSecondName('Татаренко');
        $this->assertEquals('1-Чорнотур Татаренко', $this->object->genderAutoDetect().'-Чорнотур Татаренко');
    }
    public function testGenDetect481()
    {
        $this->object->setFirstName('Щастибог');
        $this->object->setSecondName('Теплицький');
        $this->assertEquals('1-Щастибог Теплицький', $this->object->genderAutoDetect().'-Щастибог Теплицький');
    }
    public function testGenDetect482()
    {
        $this->object->setFirstName('Щастислав');
        $this->object->setSecondName('Терещенко');
        $this->assertEquals('1-Щастислав Терещенко', $this->object->genderAutoDetect().'-Щастислав Терещенко');
    }
    public function testGenDetect483()
    {
        $this->object->setFirstName('Щедрогост');
        $this->object->setSecondName('Терещук');
        $this->assertEquals('1-Щедрогост Терещук', $this->object->genderAutoDetect().'-Щедрогост Терещук');
    }
    public function testGenDetect484()
    {
        $this->object->setFirstName('Щек');
        $this->object->setSecondName('Тесленко');
        $this->assertEquals('1-Щек Тесленко', $this->object->genderAutoDetect().'-Щек Тесленко');
    }
    public function testGenDetect485()
    {
        $this->object->setFirstName('Юрій');
        $this->object->setSecondName('Тимошенко');
        $this->assertEquals('1-Юрій Тимошенко', $this->object->genderAutoDetect().'-Юрій Тимошенко');
    }
    public function testGenDetect486()
    {
        $this->object->setFirstName('Юлій');
        $this->object->setSecondName('Тимощук');
        $this->assertEquals('1-Юлій Тимощук', $this->object->genderAutoDetect().'-Юлій Тимощук');
    }
    public function testGenDetect487()
    {
        $this->object->setFirstName('Ява');
        $this->object->setSecondName('Тимчак');
        $this->assertEquals('1-Ява Тимчак', $this->object->genderAutoDetect().'-Ява Тимчак');
    }
    public function testGenDetect488()
    {
        $this->object->setFirstName('Явір');
        $this->object->setSecondName('Титаренко');
        $this->assertEquals('1-Явір Титаренко', $this->object->genderAutoDetect().'-Явір Титаренко');
    }
    public function testGenDetect489()
    {
        $this->object->setFirstName('Яволод');
        $this->object->setSecondName('Тишкевичі');
        $this->assertEquals('1-Яволод Тишкевичі', $this->object->genderAutoDetect().'-Яволод Тишкевичі');
    }
    public function testGenDetect490()
    {
        $this->object->setFirstName('Яр');
        $this->object->setSecondName('Тищенко');
        $this->assertEquals('1-Яр Тищенко', $this->object->genderAutoDetect().'-Яр Тищенко');
    }
    public function testGenDetect491()
    {
        $this->object->setFirstName('Ярема');
        $this->object->setSecondName('Ткач');
        $this->assertEquals('1-Ярема Ткач', $this->object->genderAutoDetect().'-Ярема Ткач');
    }
    public function testGenDetect492()
    {
        $this->object->setFirstName('Ярило');
        $this->object->setSecondName('Ткаченко');
        $this->assertEquals('1-Ярило Ткаченко', $this->object->genderAutoDetect().'-Ярило Ткаченко');
    }
    public function testGenDetect493()
    {
        $this->object->setFirstName('Яровид');
        $this->object->setSecondName('Ткачук');
        $this->assertEquals('1-Яровид Ткачук', $this->object->genderAutoDetect().'-Яровид Ткачук');
    }
    public function testGenDetect494()
    {
        $this->object->setFirstName('Яровит');
        $this->object->setSecondName('Тобілевичі');
        $this->assertEquals('1-Яровит Тобілевичі', $this->object->genderAutoDetect().'-Яровит Тобілевичі');
    }
    public function testGenDetect495()
    {
        $this->object->setFirstName('Яромил');
        $this->object->setSecondName('Толочко');
        $this->assertEquals('1-Яромил Толочко', $this->object->genderAutoDetect().'-Яромил Толочко');
    }
    public function testGenDetect496()
    {
        $this->object->setFirstName('Яромир');
        $this->object->setSecondName('Томенко');
        $this->assertEquals('1-Яромир Томенко', $this->object->genderAutoDetect().'-Яромир Томенко');
    }
    public function testGenDetect497()
    {
        $this->object->setFirstName('Яромисл');
        $this->object->setSecondName('Трощинські');
        $this->assertEquals('1-Яромисл Трощинські', $this->object->genderAutoDetect().'-Яромисл Трощинські');
    }
    public function testGenDetect498()
    {
        $this->object->setFirstName('Ярополк');
        $this->object->setSecondName('Тулуб');
        $this->assertEquals('1-Ярополк Тулуб', $this->object->genderAutoDetect().'-Ярополк Тулуб');
    }
    public function testGenDetect499()
    {
        $this->object->setFirstName('Яросвіт');
        $this->object->setSecondName('Удовенко');
        $this->assertEquals('1-Яросвіт Удовенко', $this->object->genderAutoDetect().'-Яросвіт Удовенко');
    }
    public function testGenDetect500()
    {
        $this->object->setFirstName('Ярослав');
        $this->object->setSecondName('Удовиченко');
        $this->assertEquals('1-Ярослав Удовиченко', $this->object->genderAutoDetect().'-Ярослав Удовиченко');
    }
    public function testGenDetect501()
    {
        $this->object->setFirstName('Ярош');
        $this->object->setSecondName('Усенко');
        $this->assertEquals('1-Ярош Усенко', $this->object->genderAutoDetect().'-Ярош Усенко');
    }
    public function testGenDetect502()
    {
        $this->object->setFirstName('Яртур');
        $this->object->setSecondName('Філоненко');
        $this->assertEquals('1-Яртур Філоненко', $this->object->genderAutoDetect().'-Яртур Філоненко');
    }
    public function testGenDetect503()
    {
        $this->object->setFirstName('Ярчик');
        $this->object->setSecondName('Феденко');
        $this->assertEquals('1-Ярчик Феденко', $this->object->genderAutoDetect().'-Ярчик Феденко');
    }
    public function testGenDetect504()
    {
        $this->object->setFirstName('Ясен');
        $this->object->setSecondName('Федоренко');
        $this->assertEquals('1-Ясен Федоренко', $this->object->genderAutoDetect().'-Ясен Федоренко');
    }
    public function testGenDetect505()
    {
        $this->object->setFirstName('Ясновид');
        $this->object->setSecondName('Федорук');
        $this->assertEquals('1-Ясновид Федорук', $this->object->genderAutoDetect().'-Ясновид Федорук');
    }
    public function testGenDetect506()
    {
        $this->object->setFirstName('Ясногор');
        $this->object->setSecondName('Фещенко');
        $this->assertEquals('1-Ясногор Фещенко', $this->object->genderAutoDetect().'-Ясногор Фещенко');
    }
    public function testGenDetect507()
    {
        $this->object->setFirstName('Яснозір');
        $this->object->setSecondName('Фоменко');
        $this->assertEquals('1-Яснозір Фоменко', $this->object->genderAutoDetect().'-Яснозір Фоменко');
    }
    public function testGenDetect508()
    {
        $this->object->setFirstName('Яснолик');
        $this->object->setSecondName('Ханенки');
        $this->assertEquals('1-Яснолик Ханенки', $this->object->genderAutoDetect().'-Яснолик Ханенки');
    }
    public function testGenDetect509()
    {
        $this->object->setFirstName('Аарон');
        $this->object->setSecondName('Ханенко');
        $this->assertEquals('1-Аарон Ханенко', $this->object->genderAutoDetect().'-Аарон Ханенко');
    }
    public function testGenDetect510()
    {
        $this->object->setFirstName('Абакум');
        $this->object->setSecondName('Харитоненки');
        $this->assertEquals('1-Абакум Харитоненки', $this->object->genderAutoDetect().'-Абакум Харитоненки');
    }
    public function testGenDetect511()
    {
        $this->object->setFirstName('Абрам');
        $this->object->setSecondName('Харчук');
        $this->assertEquals('1-Абрам Харчук', $this->object->genderAutoDetect().'-Абрам Харчук');
    }
    public function testGenDetect512()
    {
        $this->object->setFirstName('Августин');
        $this->object->setSecondName('Хміляр');
        $this->assertEquals('1-Августин Хміляр', $this->object->genderAutoDetect().'-Августин Хміляр');
    }
    public function testGenDetect513()
    {
        $this->object->setFirstName('Авесалом');
        $this->object->setSecondName('Хмара');
        $this->assertEquals('1-Авесалом Хмара', $this->object->genderAutoDetect().'-Авесалом Хмара');
    }
    public function testGenDetect514()
    {
        $this->object->setFirstName('Авксентій');
        $this->object->setSecondName('Хмельницькі');
        $this->assertEquals('1-Авксентій Хмельницькі', $this->object->genderAutoDetect().'-Авксентій Хмельницькі');
    }
    public function testGenDetect515()
    {
        $this->object->setFirstName('Аврелій');
        $this->object->setSecondName('Холодовський');
        $this->assertEquals('1-Аврелій Холодовський', $this->object->genderAutoDetect().'-Аврелій Холодовський');
    }
    public function testGenDetect516()
    {
        $this->object->setFirstName('Автоном');
        $this->object->setSecondName('Хоменко');
        $this->assertEquals('1-Автоном Хоменко', $this->object->genderAutoDetect().'-Автоном Хоменко');
    }
    public function testGenDetect517()
    {
        $this->object->setFirstName('Адам');
        $this->object->setSecondName('Царук');
        $this->assertEquals('1-Адам Царук', $this->object->genderAutoDetect().'-Адам Царук');
    }
    public function testGenDetect518()
    {
        $this->object->setFirstName('Адріян');
        $this->object->setSecondName('Цибуленко');
        $this->assertEquals('1-Адріян Цибуленко', $this->object->genderAutoDetect().'-Адріян Цибуленко');
    }
    public function testGenDetect519()
    {
        $this->object->setFirstName('Адріан');
        $this->object->setSecondName('Цюпа');
        $this->assertEquals('1-Адріан Цюпа', $this->object->genderAutoDetect().'-Адріан Цюпа');
    }
    public function testGenDetect520()
    {
        $this->object->setFirstName('Азар');
        $this->object->setSecondName('Чабаненко');
        $this->assertEquals('1-Азар Чабаненко', $this->object->genderAutoDetect().'-Азар Чабаненко');
    }
    public function testGenDetect521()
    {
        $this->object->setFirstName('Алевтин');
        $this->object->setSecondName('Чанов');
        $this->assertEquals('1-Алевтин Чанов', $this->object->genderAutoDetect().'-Алевтин Чанов');
    }
    public function testGenDetect522()
    {
        $this->object->setFirstName('Альберт');
        $this->object->setSecondName('Чередниченко');
        $this->assertEquals('1-Альберт Чередниченко', $this->object->genderAutoDetect().'-Альберт Чередниченко');
    }
    public function testGenDetect523()
    {
        $this->object->setFirstName('Амвросій');
        $this->object->setSecondName('Чернявський');
        $this->assertEquals('1-Амвросій Чернявський', $this->object->genderAutoDetect().'-Амвросій Чернявський');
    }
    public function testGenDetect524()
    {
        $this->object->setFirstName('Амнон');
        $this->object->setSecondName('Чорний');
        $this->assertEquals('1-Амнон Чорний', $this->object->genderAutoDetect().'-Амнон Чорний');
    }
    public function testGenDetect525()
    {
        $this->object->setFirstName('Амос');
        $this->object->setSecondName('Чорновіл');
        $this->assertEquals('1-Амос Чорновіл', $this->object->genderAutoDetect().'-Амос Чорновіл');
    }
    public function testGenDetect526()
    {
        $this->object->setFirstName('Анастас');
        $this->object->setSecondName('Чуйкевич');
        $this->assertEquals('1-Анастас Чуйкевич', $this->object->genderAutoDetect().'-Анастас Чуйкевич');
    }
    public function testGenDetect527()
    {
        $this->object->setFirstName('Анастасій');
        $this->object->setSecondName('Чумак');
        $this->assertEquals('1-Анастасій Чумак', $this->object->genderAutoDetect().'-Анастасій Чумак');
    }
    public function testGenDetect528()
    {
        $this->object->setFirstName('Андрій');
        $this->object->setSecondName('Чумаченко');
        $this->assertEquals('1-Андрій Чумаченко', $this->object->genderAutoDetect().'-Андрій Чумаченко');
    }
    public function testGenDetect529()
    {
        $this->object->setFirstName('Антоній');
        $this->object->setSecondName('Шахрай');
        $this->assertEquals('1-Антоній Шахрай', $this->object->genderAutoDetect().'-Антоній Шахрай');
    }
    public function testGenDetect530()
    {
        $this->object->setFirstName('Антон');
        $this->object->setSecondName('Шевченко');
        $this->assertEquals('1-Антон Шевченко', $this->object->genderAutoDetect().'-Антон Шевченко');
    }
    public function testGenDetect531()
    {
        $this->object->setFirstName('Анісій');
        $this->object->setSecondName('Шевчук');
        $this->assertEquals('1-Анісій Шевчук', $this->object->genderAutoDetect().'-Анісій Шевчук');
    }
    public function testGenDetect532()
    {
        $this->object->setFirstName('Аркадій');
        $this->object->setSecondName('Шелест');
        $this->assertEquals('1-Аркадій Шелест', $this->object->genderAutoDetect().'-Аркадій Шелест');
    }
    public function testGenDetect533()
    {
        $this->object->setFirstName('Арсен');
        $this->object->setSecondName('Шептицькі');
        $this->assertEquals('1-Арсен Шептицькі', $this->object->genderAutoDetect().'-Арсен Шептицькі');
    }
    public function testGenDetect534()
    {
        $this->object->setFirstName('Арсеній');
        $this->object->setSecondName('Шинкарук');
        $this->assertEquals('1-Арсеній Шинкарук', $this->object->genderAutoDetect().'-Арсеній Шинкарук');
    }
    public function testGenDetect535()
    {
        $this->object->setFirstName('Артем');
        $this->object->setSecondName('Шкрібляк');
        $this->assertEquals('1-Артем Шкрібляк', $this->object->genderAutoDetect().'-Артем Шкрібляк');
    }
    public function testGenDetect536()
    {
        $this->object->setFirstName('Архип');
        $this->object->setSecondName('Шнайдер');
        $this->assertEquals('1-Архип Шнайдер', $this->object->genderAutoDetect().'-Архип Шнайдер');
    }
    public function testGenDetect537()
    {
        $this->object->setFirstName('Атанас');
        $this->object->setSecondName('Шовкопляс');
        $this->assertEquals('1-Атанас Шовкопляс', $this->object->genderAutoDetect().'-Атанас Шовкопляс');
    }
    public function testGenDetect538()
    {
        $this->object->setFirstName('Аскольд');
        $this->object->setSecondName('Шульга');
        $this->assertEquals('1-Аскольд Шульга', $this->object->genderAutoDetect().'-Аскольд Шульга');
    }
    public function testGenDetect539()
    {
        $this->object->setFirstName('Бажан');
        $this->object->setSecondName('Шухевич');
        $this->assertEquals('1-Бажан Шухевич', $this->object->genderAutoDetect().'-Бажан Шухевич');
    }
    public function testGenDetect540()
    {
        $this->object->setFirstName('Біловид');
        $this->object->setSecondName('Щерба');
        $this->assertEquals('1-Біловид Щерба', $this->object->genderAutoDetect().'-Біловид Щерба');
    }
    public function testGenDetect541()
    {
        $this->object->setFirstName('Білогост');
        $this->object->setSecondName('Щербак');
        $this->assertEquals('1-Білогост Щербак', $this->object->genderAutoDetect().'-Білогост Щербак');
    }
    public function testGenDetect542()
    {
        $this->object->setFirstName('Біломир');
        $this->object->setSecondName('Щербань');
        $this->assertEquals('1-Біломир Щербань', $this->object->genderAutoDetect().'-Біломир Щербань');
    }
    public function testGenDetect543()
    {
        $this->object->setFirstName('Білослав');
        $this->object->setSecondName('Юрженко');
        $this->assertEquals('1-Білослав Юрженко', $this->object->genderAutoDetect().'-Білослав Юрженко');
    }
    public function testGenDetect544()
    {
        $this->object->setFirstName('Білотур');
        $this->object->setSecondName('Юрченко');
        $this->assertEquals('1-Білотур Юрченко', $this->object->genderAutoDetect().'-Білотур Юрченко');
    }
    public function testGenDetect545()
    {
        $this->object->setFirstName('Білян');
        $this->object->setSecondName('Юрчишин');
        $this->assertEquals('1-Білян Юрчишин', $this->object->genderAutoDetect().'-Білян Юрчишин');
    }
    public function testGenDetect546()
    {
        $this->object->setFirstName('Благовид');
        $this->object->setSecondName('Юхименко');
        $this->assertEquals('1-Благовид Юхименко', $this->object->genderAutoDetect().'-Благовид Юхименко');
    }
    public function testGenDetect547()
    {
        $this->object->setFirstName('Благовіст');
        $this->object->setSecondName('Ющенко');
        $this->assertEquals('1-Благовіст Ющенко', $this->object->genderAutoDetect().'-Благовіст Ющенко');
    }
    public function testGenDetect548()
    {
        $this->object->setFirstName('Благодар');
        $this->object->setSecondName('Яковенко');
        $this->assertEquals('1-Благодар Яковенко', $this->object->genderAutoDetect().'-Благодар Яковенко');
    }
    public function testGenDetect549()
    {
        $this->object->setFirstName('Благодат');
        $this->object->setSecondName('Яковина');
        $this->assertEquals('1-Благодат Яковина', $this->object->genderAutoDetect().'-Благодат Яковина');
    }
    public function testGenDetect550()
    {
        $this->object->setFirstName('Благомир');
        $this->object->setSecondName('Янко');
        $this->assertEquals('1-Благомир Янко', $this->object->genderAutoDetect().'-Благомир Янко');
    }
    public function testGenDetect551()
    {
        $this->object->setFirstName('Благослав');
        $this->object->setSecondName('Ярема');
        $this->assertEquals('1-Благослав Ярема', $this->object->genderAutoDetect().'-Благослав Ярема');
    }
    public function testGenDetect552()
    {
        $this->object->setFirstName('Богдан');
        $this->object->setSecondName('Яременко');
        $this->assertEquals('1-Богдан Яременко', $this->object->genderAutoDetect().'-Богдан Яременко');
    }
    public function testGenDetect553()
    {
        $this->object->setFirstName('Боговір');
        $this->object->setSecondName('Яремко');
        $this->assertEquals('1-Боговір Яремко', $this->object->genderAutoDetect().'-Боговір Яремко');
    }
    public function testGenDetect554()
    {
        $this->object->setFirstName('Боговіст');
        $this->object->setSecondName('Яремчук');
        $this->assertEquals('1-Боговіст Яремчук', $this->object->genderAutoDetect().'-Боговіст Яремчук');
    }
    public function testGenDetect555()
    {
        $this->object->setFirstName('Богодар');
        $this->object->setSecondName('Ярмоленко');
        $this->assertEquals('1-Богодар Ярмоленко', $this->object->genderAutoDetect().'-Богодар Ярмоленко');
    }
    public function testGenDetect556()
    {
        $this->object->setFirstName('Боголад');
        $this->object->setSecondName('Ярмолюк');
        $this->assertEquals('1-Боголад Ярмолюк', $this->object->genderAutoDetect().'-Боголад Ярмолюк');
    }
    public function testGenDetect557()
    {
        $this->object->setFirstName('Боголіп');
        $this->object->setSecondName('Ярошенко');
        $this->assertEquals('1-Боголіп Ярошенко', $this->object->genderAutoDetect().'-Боголіп Ярошенко');
    }
    public function testGenDetect558()
    {
        $this->object->setFirstName('Боголюб');
        $this->object->setSecondName('Яценко');
        $this->assertEquals('1-Боголюб Яценко', $this->object->genderAutoDetect().'-Боголюб Яценко');
    }
    public function testGenDetect559()
    {
        $this->object->setFirstName('Богород');
        $this->object->setSecondName('Ященко');
        $this->assertEquals('1-Богород Ященко', $this->object->genderAutoDetect().'-Богород Ященко');
    }
    public function testGenDetect560()
    {
        $this->object->setFirstName('Богосвят');
        $this->object->setSecondName('Ґалаґан');
        $this->assertEquals('1-Богосвят Ґалаґан', $this->object->genderAutoDetect().'-Богосвят Ґалаґан');
    }
    public function testGenDetect561()
    {
        $this->object->setFirstName('Богумил');
        $this->object->setSecondName('Євсєєв');
        $this->assertEquals('1-Богумил Євсєєв', $this->object->genderAutoDetect().'-Богумил Євсєєв');
    }
    public function testGenDetect562()
    {
        $this->object->setFirstName('Богумир');
        $this->object->setSecondName('Єгоров');
        $this->assertEquals('1-Богумир Єгоров', $this->object->genderAutoDetect().'-Богумир Єгоров');
    }
    public function testGenDetect563()
    {
        $this->object->setFirstName('Богуслав');
        $this->object->setSecondName('Єлізаров');
        $this->assertEquals('1-Богуслав Єлізаров', $this->object->genderAutoDetect().'-Богуслав Єлізаров');
    }
    public function testGenDetect564()
    {
        $this->object->setFirstName('Бож');
        $this->object->setSecondName('Єрмилов');
        $this->assertEquals('1-Бож Єрмилов', $this->object->genderAutoDetect().'-Бож Єрмилов');
    }
    public function testGenDetect565()
    {
        $this->object->setFirstName('Божан');
        $this->object->setSecondName('Єрофєєв');
        $this->assertEquals('1-Божан Єрофєєв', $this->object->genderAutoDetect().'-Божан Єрофєєв');
    }
    public function testGenDetect566()
    {
        $this->object->setFirstName('Божедар');
        $this->object->setSecondName('Єршов');
        $this->assertEquals('1-Божедар Єршов', $this->object->genderAutoDetect().'-Божедар Єршов');
    }
    public function testGenDetect567()
    {
        $this->object->setFirstName('Божейко');
        $this->object->setSecondName('Єфімов');
        $this->assertEquals('1-Божейко Єфімов', $this->object->genderAutoDetect().'-Божейко Єфімов');
    }
    public function testGenDetect568()
    {
        $this->object->setFirstName('Божемир');
        $this->object->setSecondName('Єфремов');
        $this->assertEquals('1-Божемир Єфремов', $this->object->genderAutoDetect().'-Божемир Єфремов');
    }
    public function testGenDetect569()
    {
        $this->object->setFirstName('Божен');
        $this->object->setSecondName('Іванов');
        $this->assertEquals('1-Божен Іванов', $this->object->genderAutoDetect().'-Божен Іванов');
    }
    public function testGenDetect570()
    {
        $this->object->setFirstName('Божко');
        $this->object->setSecondName('Ігнатов');
        $this->assertEquals('1-Божко Ігнатов', $this->object->genderAutoDetect().'-Божко Ігнатов');
    }
    public function testGenDetect571()
    {
        $this->object->setFirstName('Болеслав');
        $this->object->setSecondName('Іллюшин');
        $this->assertEquals('1-Болеслав Іллюшин', $this->object->genderAutoDetect().'-Болеслав Іллюшин');
    }
    public function testGenDetect572()
    {
        $this->object->setFirstName('Боримир');
        $this->object->setSecondName('Ільїн');
        $this->assertEquals('1-Боримир Ільїн', $this->object->genderAutoDetect().'-Боримир Ільїн');
    }
    public function testGenDetect573()
    {
        $this->object->setFirstName('Боримисл');
        $this->object->setSecondName('Аєдоницький');
        $this->assertEquals('1-Боримисл Аєдоницький', $this->object->genderAutoDetect().'-Боримисл Аєдоницький');
    }
    public function testGenDetect574()
    {
        $this->object->setFirstName('Борис');
        $this->object->setSecondName('Абатуров');
        $this->assertEquals('1-Борис Абатуров', $this->object->genderAutoDetect().'-Борис Абатуров');
    }
    public function testGenDetect575()
    {
        $this->object->setFirstName('Борислав');
        $this->object->setSecondName('Абдулов');
        $this->assertEquals('1-Борислав Абдулов', $this->object->genderAutoDetect().'-Борислав Абдулов');
    }
    public function testGenDetect576()
    {
        $this->object->setFirstName('Боян');
        $this->object->setSecondName('Абрамов');
        $this->assertEquals('1-Боян Абрамов', $this->object->genderAutoDetect().'-Боян Абрамов');
    }
    public function testGenDetect577()
    {
        $this->object->setFirstName('Братан');
        $this->object->setSecondName('Авілов');
        $this->assertEquals('1-Братан Авілов', $this->object->genderAutoDetect().'-Братан Авілов');
    }
    public function testGenDetect578()
    {
        $this->object->setFirstName('Бративой');
        $this->object->setSecondName('Авдєєнко');
        $this->assertEquals('1-Бративой Авдєєнко', $this->object->genderAutoDetect().'-Бративой Авдєєнко');
    }
    public function testGenDetect579()
    {
        $this->object->setFirstName('Братимир');
        $this->object->setSecondName('Аврамов');
        $this->assertEquals('1-Братимир Аврамов', $this->object->genderAutoDetect().'-Братимир Аврамов');
    }
    public function testGenDetect580()
    {
        $this->object->setFirstName('Братислав');
        $this->object->setSecondName('Алексєєв');
        $this->assertEquals('1-Братислав Алексєєв', $this->object->genderAutoDetect().'-Братислав Алексєєв');
    }
    public function testGenDetect581()
    {
        $this->object->setFirstName('Братко');
        $this->object->setSecondName('Александров');
        $this->assertEquals('1-Братко Александров', $this->object->genderAutoDetect().'-Братко Александров');
    }
    public function testGenDetect582()
    {
        $this->object->setFirstName('Братомил');
        $this->object->setSecondName('Альошин');
        $this->assertEquals('1-Братомил Альошин', $this->object->genderAutoDetect().'-Братомил Альошин');
    }
    public function testGenDetect583()
    {
        $this->object->setFirstName('Братослав');
        $this->object->setSecondName('Анісімов');
        $this->assertEquals('1-Братослав Анісімов', $this->object->genderAutoDetect().'-Братослав Анісімов');
    }
    public function testGenDetect584()
    {
        $this->object->setFirstName('Брячислав');
        $this->object->setSecondName('Анісов');
        $this->assertEquals('1-Брячислав Анісов', $this->object->genderAutoDetect().'-Брячислав Анісов');
    }
    public function testGenDetect585()
    {
        $this->object->setFirstName('Боронислав');
        $this->object->setSecondName('Ананьєв');
        $this->assertEquals('1-Боронислав Ананьєв', $this->object->genderAutoDetect().'-Боронислав Ананьєв');
    }
    public function testGenDetect586()
    {
        $this->object->setFirstName('Будивид');
        $this->object->setSecondName('Андріанов');
        $this->assertEquals('1-Будивид Андріанов', $this->object->genderAutoDetect().'-Будивид Андріанов');
    }
    public function testGenDetect587()
    {
        $this->object->setFirstName('Будивой');
        $this->object->setSecondName('Андріяшев');
        $this->assertEquals('1-Будивой Андріяшев', $this->object->genderAutoDetect().'-Будивой Андріяшев');
    }
    public function testGenDetect588()
    {
        $this->object->setFirstName('Будимил');
        $this->object->setSecondName('Андреєв');
        $this->assertEquals('1-Будимил Андреєв', $this->object->genderAutoDetect().'-Будимил Андреєв');
    }
    public function testGenDetect589()
    {
        $this->object->setFirstName('Будимир');
        $this->object->setSecondName('Антипов');
        $this->assertEquals('1-Будимир Антипов', $this->object->genderAutoDetect().'-Будимир Антипов');
    }
    public function testGenDetect590()
    {
        $this->object->setFirstName('Будислав');
        $this->object->setSecondName('Антонов');
        $this->assertEquals('1-Будислав Антонов', $this->object->genderAutoDetect().'-Будислав Антонов');
    }
    public function testGenDetect591()
    {
        $this->object->setFirstName('Буймир');
        $this->object->setSecondName('Анциферов');
        $this->assertEquals('1-Буймир Анциферов', $this->object->genderAutoDetect().'-Буймир Анциферов');
    }
    public function testGenDetect592()
    {
        $this->object->setFirstName('Буйтур');
        $this->object->setSecondName('Апухтін');
        $this->assertEquals('1-Буйтур Апухтін', $this->object->genderAutoDetect().'-Буйтур Апухтін');
    }
    public function testGenDetect593()
    {
        $this->object->setFirstName('Буревій');
        $this->object->setSecondName('Арбузов');
        $this->assertEquals('1-Буревій Арбузов', $this->object->genderAutoDetect().'-Буревій Арбузов');
    }
    public function testGenDetect594()
    {
        $this->object->setFirstName('Буревіст');
        $this->object->setSecondName('Аржанов');
        $this->assertEquals('1-Буревіст Аржанов', $this->object->genderAutoDetect().'-Буревіст Аржанов');
    }
    public function testGenDetect595()
    {
        $this->object->setFirstName('Василь');
        $this->object->setSecondName('Архипов');
        $this->assertEquals('1-Василь Архипов', $this->object->genderAutoDetect().'-Василь Архипов');
    }
    public function testGenDetect596()
    {
        $this->object->setFirstName('Ведан');
        $this->object->setSecondName('Арцибушев');
        $this->assertEquals('1-Ведан Арцибушев', $this->object->genderAutoDetect().'-Ведан Арцибушев');
    }
    public function testGenDetect597()
    {
        $this->object->setFirstName('Велемир');
        $this->object->setSecondName('Астраханцев');
        $this->assertEquals('1-Велемир Астраханцев', $this->object->genderAutoDetect().'-Велемир Астраханцев');
    }
    public function testGenDetect598()
    {
        $this->object->setFirstName('Велемудр');
        $this->object->setSecondName('Афіногенов');
        $this->assertEquals('1-Велемудр Афіногенов', $this->object->genderAutoDetect().'-Велемудр Афіногенов');
    }
    public function testGenDetect599()
    {
        $this->object->setFirstName('Велет');
        $this->object->setSecondName('Афанасьєв');
        $this->assertEquals('1-Велет Афанасьєв', $this->object->genderAutoDetect().'-Велет Афанасьєв');
    }
    public function testGenDetect600()
    {
        $this->object->setFirstName('Величар');
        $this->object->setSecondName('Бєлов');
        $this->assertEquals('1-Величар Бєлов', $this->object->genderAutoDetect().'-Величар Бєлов');
    }
    public function testGenDetect601()
    {
        $this->object->setFirstName('Величко');
        $this->object->setSecondName('Бєлоглазов');
        $this->assertEquals('1-Величко Бєлоглазов', $this->object->genderAutoDetect().'-Величко Бєлоглазов');
    }
    public function testGenDetect602()
    {
        $this->object->setFirstName('Вербан');
        $this->object->setSecondName('Бєлоусов');
        $this->assertEquals('1-Вербан Бєлоусов', $this->object->genderAutoDetect().'-Вербан Бєлоусов');
    }
    public function testGenDetect603()
    {
        $this->object->setFirstName('Вернидуб');
        $this->object->setSecondName('Бєляєв');
        $this->assertEquals('1-Вернидуб Бєляєв', $this->object->genderAutoDetect().'-Вернидуб Бєляєв');
    }
    public function testGenDetect604()
    {
        $this->object->setFirstName('Вернислав');
        $this->object->setSecondName('Бібиков');
        $this->assertEquals('1-Вернислав Бібиков', $this->object->genderAutoDetect().'-Вернислав Бібиков');
    }
    public function testGenDetect605()
    {
        $this->object->setFirstName('Веселан');
        $this->object->setSecondName('Бажанов');
        $this->assertEquals('1-Веселан Бажанов', $this->object->genderAutoDetect().'-Веселан Бажанов');
    }
    public function testGenDetect606()
    {
        $this->object->setFirstName('Витомир');
        $this->object->setSecondName('Баранов');
        $this->assertEquals('1-Витомир Баранов', $this->object->genderAutoDetect().'-Витомир Баранов');
    }
    public function testGenDetect607()
    {
        $this->object->setFirstName('Вишата');
        $this->object->setSecondName('Баришніков');
        $this->assertEquals('1-Вишата Баришніков', $this->object->genderAutoDetect().'-Вишата Баришніков');
    }
    public function testGenDetect608()
    {
        $this->object->setFirstName('Вишезор');
        $this->object->setSecondName('Барсов');
        $this->assertEquals('1-Вишезор Барсов', $this->object->genderAutoDetect().'-Вишезор Барсов');
    }
    public function testGenDetect609()
    {
        $this->object->setFirstName('Вишеслав');
        $this->object->setSecondName('Батюшков');
        $this->assertEquals('1-Вишеслав Батюшков', $this->object->genderAutoDetect().'-Вишеслав Батюшков');
    }
    public function testGenDetect610()
    {
        $this->object->setFirstName('Вір');
        $this->object->setSecondName('Биков');
        $this->assertEquals('1-Вір Биков', $this->object->genderAutoDetect().'-Вір Биков');
    }
    public function testGenDetect611()
    {
        $this->object->setFirstName('Віродан');
        $this->object->setSecondName('Блохін');
        $this->assertEquals('1-Віродан Блохін', $this->object->genderAutoDetect().'-Віродан Блохін');
    }
    public function testGenDetect612()
    {
        $this->object->setFirstName('Віродар');
        $this->object->setSecondName('Бобров');
        $this->assertEquals('1-Віродар Бобров', $this->object->genderAutoDetect().'-Віродар Бобров');
    }
    public function testGenDetect613()
    {
        $this->object->setFirstName('Вірослав');
        $this->object->setSecondName('Богданов');
        $this->assertEquals('1-Вірослав Богданов', $this->object->genderAutoDetect().'-Вірослав Богданов');
    }
    public function testGenDetect614()
    {
        $this->object->setFirstName('Віст');
        $this->object->setSecondName('Богомазов');
        $this->assertEquals('1-Віст Богомазов', $this->object->genderAutoDetect().'-Віст Богомазов');
    }
    public function testGenDetect615()
    {
        $this->object->setFirstName('Вістан');
        $this->object->setSecondName('Бойков');
        $this->assertEquals('1-Вістан Бойков', $this->object->genderAutoDetect().'-Вістан Бойков');
    }
    public function testGenDetect616()
    {
        $this->object->setFirstName('Вітан');
        $this->object->setSecondName('Большаков');
        $this->assertEquals('1-Вітан Большаков', $this->object->genderAutoDetect().'-Вітан Большаков');
    }
    public function testGenDetect617()
    {
        $this->object->setFirstName('Вітомир');
        $this->object->setSecondName('Борисов');
        $this->assertEquals('1-Вітомир Борисов', $this->object->genderAutoDetect().'-Вітомир Борисов');
    }
    public function testGenDetect618()
    {
        $this->object->setFirstName('Вітрян');
        $this->object->setSecondName('Бочков');
        $this->assertEquals('1-Вітрян Бочков', $this->object->genderAutoDetect().'-Вітрян Бочков');
    }
    public function testGenDetect619()
    {
        $this->object->setFirstName('Влад');
        $this->object->setSecondName('Бризгалов');
        $this->assertEquals('1-Влад Бризгалов', $this->object->genderAutoDetect().'-Влад Бризгалов');
    }
    public function testGenDetect620()
    {
        $this->object->setFirstName('Владислав');
        $this->object->setSecondName('Брусилов');
        $this->assertEquals('1-Владислав Брусилов', $this->object->genderAutoDetect().'-Владислав Брусилов');
    }
    public function testGenDetect621()
    {
        $this->object->setFirstName('Власт');
        $this->object->setSecondName('Бутурлін');
        $this->assertEquals('1-Власт Бутурлін', $this->object->genderAutoDetect().'-Власт Бутурлін');
    }
    public function testGenDetect622()
    {
        $this->object->setFirstName('Вогнедар');
        $this->object->setSecondName('Бутусов');
        $this->assertEquals('1-Вогнедар Бутусов', $this->object->genderAutoDetect().'-Вогнедар Бутусов');
    }
    public function testGenDetect623()
    {
        $this->object->setFirstName('Вогнян');
        $this->object->setSecondName('Варламов');
        $this->assertEquals('1-Вогнян Варламов', $this->object->genderAutoDetect().'-Вогнян Варламов');
    }
    public function testGenDetect624()
    {
        $this->object->setFirstName('Водограй');
        $this->object->setSecondName('Васильєв');
        $this->assertEquals('1-Водограй Васильєв', $this->object->genderAutoDetect().'-Водограй Васильєв');
    }
    public function testGenDetect625()
    {
        $this->object->setFirstName('Водотрав');
        $this->object->setSecondName('Виноградов');
        $this->assertEquals('1-Водотрав Виноградов', $this->object->genderAutoDetect().'-Водотрав Виноградов');
    }
    public function testGenDetect626()
    {
        $this->object->setFirstName('Воїслав');
        $this->object->setSecondName('Власов');
        $this->assertEquals('1-Воїслав Власов', $this->object->genderAutoDetect().'-Воїслав Власов');
    }
    public function testGenDetect627()
    {
        $this->object->setFirstName('Волелюб');
        $this->object->setSecondName('Внуков');
        $this->assertEquals('1-Волелюб Внуков', $this->object->genderAutoDetect().'-Волелюб Внуков');
    }
    public function testGenDetect628()
    {
        $this->object->setFirstName('Володар');
        $this->object->setSecondName('Волков');
        $this->assertEquals('1-Володар Волков', $this->object->genderAutoDetect().'-Володар Волков');
    }
    public function testGenDetect629()
    {
        $this->object->setFirstName('Володимир');
        $this->object->setSecondName('Воробей');
        $this->assertEquals('1-Володимир Воробей', $this->object->genderAutoDetect().'-Володимир Воробей');
    }
    public function testGenDetect630()
    {
        $this->object->setFirstName('Володислав');
        $this->object->setSecondName('Воробйов');
        $this->assertEquals('1-Володислав Воробйов', $this->object->genderAutoDetect().'-Володислав Воробйов');
    }
    public function testGenDetect631()
    {
        $this->object->setFirstName('Воля');
        $this->object->setSecondName('Воронін');
        $this->assertEquals('1-Воля Воронін', $this->object->genderAutoDetect().'-Воля Воронін');
    }
    public function testGenDetect632()
    {
        $this->object->setFirstName('Воротислав');
        $this->object->setSecondName('Воронцов');
        $this->assertEquals('1-Воротислав Воронцов', $this->object->genderAutoDetect().'-Воротислав Воронцов');
    }
    public function testGenDetect633()
    {
        $this->object->setFirstName('Вратан');
        $this->object->setSecondName('Ворошилов');
        $this->assertEquals('1-Вратан Ворошилов', $this->object->genderAutoDetect().'-Вратан Ворошилов');
    }
    public function testGenDetect634()
    {
        $this->object->setFirstName('Вратислав');
        $this->object->setSecondName('Гаврилов');
        $this->assertEquals('1-Вратислав Гаврилов', $this->object->genderAutoDetect().'-Вратислав Гаврилов');
    }
    public function testGenDetect635()
    {
        $this->object->setFirstName('Всевлад');
        $this->object->setSecondName('Герасимов');
        $this->assertEquals('1-Всевлад Герасимов', $this->object->genderAutoDetect().'-Всевлад Герасимов');
    }
    public function testGenDetect636()
    {
        $this->object->setFirstName('Всеволод');
        $this->object->setSecondName('Горбунов');
        $this->assertEquals('1-Всеволод Горбунов', $this->object->genderAutoDetect().'-Всеволод Горбунов');
    }
    public function testGenDetect637()
    {
        $this->object->setFirstName('Вселюб');
        $this->object->setSecondName('Горчаков');
        $this->assertEquals('1-Вселюб Горчаков', $this->object->genderAutoDetect().'-Вселюб Горчаков');
    }
    public function testGenDetect638()
    {
        $this->object->setFirstName('Вселюд');
        $this->object->setSecondName('Горшков');
        $this->assertEquals('1-Вселюд Горшков', $this->object->genderAutoDetect().'-Вселюд Горшков');
    }
    public function testGenDetect639()
    {
        $this->object->setFirstName('Всеслав');
        $this->object->setSecondName('Громов');
        $this->assertEquals('1-Всеслав Громов', $this->object->genderAutoDetect().'-Всеслав Громов');
    }
    public function testGenDetect640()
    {
        $this->object->setFirstName('Гарнослав');
        $this->object->setSecondName('Гусєв');
        $this->assertEquals('1-Гарнослав Гусєв', $this->object->genderAutoDetect().'-Гарнослав Гусєв');
    }
    public function testGenDetect641()
    {
        $this->object->setFirstName('Гатусил');
        $this->object->setSecondName('Давидов');
        $this->assertEquals('1-Гатусил Давидов', $this->object->genderAutoDetect().'-Гатусил Давидов');
    }
    public function testGenDetect642()
    {
        $this->object->setFirstName('Гатуслав');
        $this->object->setSecondName('Данилов');
        $this->assertEquals('1-Гатуслав Данилов', $this->object->genderAutoDetect().'-Гатуслав Данилов');
    }
    public function testGenDetect643()
    {
        $this->object->setFirstName('Гервасій');
        $this->object->setSecondName('Дементьєв');
        $this->assertEquals('1-Гервасій Дементьєв', $this->object->genderAutoDetect().'-Гервасій Дементьєв');
    }
    public function testGenDetect644()
    {
        $this->object->setFirstName('Гладко');
        $this->object->setSecondName('Денисов');
        $this->assertEquals('1-Гладко Денисов', $this->object->genderAutoDetect().'-Гладко Денисов');
    }
    public function testGenDetect645()
    {
        $this->object->setFirstName('Гліб');
        $this->object->setSecondName('Дмитрієв');
        $this->assertEquals('1-Гліб Дмитрієв', $this->object->genderAutoDetect().'-Гліб Дмитрієв');
    }
    public function testGenDetect646()
    {
        $this->object->setFirstName('Годомир');
        $this->object->setSecondName('Добролюбов');
        $this->assertEquals('1-Годомир Добролюбов', $this->object->genderAutoDetect().'-Годомир Добролюбов');
    }
    public function testGenDetect647()
    {
        $this->object->setFirstName('Голубко');
        $this->object->setSecondName('Донськой');
        $this->assertEquals('1-Голубко Донськой', $this->object->genderAutoDetect().'-Голубко Донськой');
    }
    public function testGenDetect648()
    {
        $this->object->setFirstName('Горун');
        $this->object->setSecondName('Дорофєєв');
        $this->assertEquals('1-Горун Дорофєєв', $this->object->genderAutoDetect().'-Горун Дорофєєв');
    }
    public function testGenDetect649()
    {
        $this->object->setFirstName('Гордій');
        $this->object->setSecondName('Дубров');
        $this->assertEquals('1-Гордій Дубров', $this->object->genderAutoDetect().'-Гордій Дубров');
    }
    public function testGenDetect650()
    {
        $this->object->setFirstName('Гордислав');
        $this->object->setSecondName('Железняков');
        $this->assertEquals('1-Гордислав Железняков', $this->object->genderAutoDetect().'-Гордислав Железняков');
    }
    public function testGenDetect651()
    {
        $this->object->setFirstName('Гордогост');
        $this->object->setSecondName('Жердєв');
        $this->assertEquals('1-Гордогост Жердєв', $this->object->genderAutoDetect().'-Гордогост Жердєв');
    }
    public function testGenDetect652()
    {
        $this->object->setFirstName('Гордодум');
        $this->object->setSecondName('Жуков');
        $this->assertEquals('1-Гордодум Жуков', $this->object->genderAutoDetect().'-Гордодум Жуков');
    }
    public function testGenDetect653()
    {
        $this->object->setFirstName('Гордомисл');
        $this->object->setSecondName('Журавльов');
        $this->assertEquals('1-Гордомисл Журавльов', $this->object->genderAutoDetect().'-Гордомисл Журавльов');
    }
    public function testGenDetect654()
    {
        $this->object->setFirstName('Гордослав');
        $this->object->setSecondName('Заваров');
        $this->assertEquals('1-Гордослав Заваров', $this->object->genderAutoDetect().'-Гордослав Заваров');
    }
    public function testGenDetect655()
    {
        $this->object->setFirstName('Гордята');
        $this->object->setSecondName('Загаров');
        $this->assertEquals('1-Гордята Загаров', $this->object->genderAutoDetect().'-Гордята Загаров');
    }
    public function testGenDetect656()
    {
        $this->object->setFirstName('Горигляд');
        $this->object->setSecondName('Зайцев');
        $this->assertEquals('1-Горигляд Зайцев', $this->object->genderAutoDetect().'-Горигляд Зайцев');
    }
    public function testGenDetect657()
    {
        $this->object->setFirstName('Горимир');
        $this->object->setSecondName('Захаров');
        $this->assertEquals('1-Горимир Захаров', $this->object->genderAutoDetect().'-Горимир Захаров');
    }
    public function testGenDetect658()
    {
        $this->object->setFirstName('Горимисл');
        $this->object->setSecondName('Звєрєв');
        $this->assertEquals('1-Горимисл Звєрєв', $this->object->genderAutoDetect().'-Горимисл Звєрєв');
    }
    public function testGenDetect659()
    {
        $this->object->setFirstName('Горисвіт');
        $this->object->setSecondName('Зеров');
        $this->assertEquals('1-Горисвіт Зеров', $this->object->genderAutoDetect().'-Горисвіт Зеров');
    }
    public function testGenDetect660()
    {
        $this->object->setFirstName('Горислав');
        $this->object->setSecondName('Золотухін');
        $this->assertEquals('1-Горислав Золотухін', $this->object->genderAutoDetect().'-Горислав Золотухін');
    }
    public function testGenDetect661()
    {
        $this->object->setFirstName('Горицвіт');
        $this->object->setSecondName('Зубов');
        $this->assertEquals('1-Горицвіт Зубов', $this->object->genderAutoDetect().'-Горицвіт Зубов');
    }
    public function testGenDetect662()
    {
        $this->object->setFirstName('Гостомисл');
        $this->object->setSecondName('Казаков');
        $this->assertEquals('1-Гостомисл Казаков', $this->object->genderAutoDetect().'-Гостомисл Казаков');
    }
    public function testGenDetect663()
    {
        $this->object->setFirstName('Гострозір');
        $this->object->setSecondName('Калінін');
        $this->assertEquals('1-Гострозір Калінін', $this->object->genderAutoDetect().'-Гострозір Калінін');
    }
    public function testGenDetect664()
    {
        $this->object->setFirstName('Гостята');
        $this->object->setSecondName('Калашников');
        $this->assertEquals('1-Гостята Калашников', $this->object->genderAutoDetect().'-Гостята Калашников');
    }
    public function testGenDetect665()
    {
        $this->object->setFirstName('Градимир');
        $this->object->setSecondName('Карпов');
        $this->assertEquals('1-Градимир Карпов', $this->object->genderAutoDetect().'-Градимир Карпов');
    }
    public function testGenDetect666()
    {
        $this->object->setFirstName('Градислав');
        $this->object->setSecondName('Каштанов');
        $this->assertEquals('1-Градислав Каштанов', $this->object->genderAutoDetect().'-Градислав Каштанов');
    }
    public function testGenDetect667()
    {
        $this->object->setFirstName('Гранислав');
        $this->object->setSecondName('Кисельов');
        $this->assertEquals('1-Гранислав Кисельов', $this->object->genderAutoDetect().'-Гранислав Кисельов');
    }
    public function testGenDetect668()
    {
        $this->object->setFirstName('Грива');
        $this->object->setSecondName('Ковальов');
        $this->assertEquals('1-Грива Ковальов', $this->object->genderAutoDetect().'-Грива Ковальов');
    }
    public function testGenDetect669()
    {
        $this->object->setFirstName('Григорій');
        $this->object->setSecondName('Кожевников');
        $this->assertEquals('1-Григорій Кожевников', $this->object->genderAutoDetect().'-Григорій Кожевников');
    }
    public function testGenDetect670()
    {
        $this->object->setFirstName('Гремислав');
        $this->object->setSecondName('Козлов');
        $this->assertEquals('1-Гремислав Козлов', $this->object->genderAutoDetect().'-Гремислав Козлов');
    }
    public function testGenDetect671()
    {
        $this->object->setFirstName('Грозан');
        $this->object->setSecondName('Колесников');
        $this->assertEquals('1-Грозан Колесников', $this->object->genderAutoDetect().'-Грозан Колесников');
    }
    public function testGenDetect672()
    {
        $this->object->setFirstName('Громовик');
        $this->object->setSecondName('Кольцов');
        $this->assertEquals('1-Громовик Кольцов', $this->object->genderAutoDetect().'-Громовик Кольцов');
    }
    public function testGenDetect673()
    {
        $this->object->setFirstName('Гуляйвітер');
        $this->object->setSecondName('Комаров');
        $this->assertEquals('1-Гуляйвітер Комаров', $this->object->genderAutoDetect().'-Гуляйвітер Комаров');
    }
    public function testGenDetect674()
    {
        $this->object->setFirstName('Густомисл');
        $this->object->setSecondName('Коновалов');
        $this->assertEquals('1-Густомисл Коновалов', $this->object->genderAutoDetect().'-Густомисл Коновалов');
    }
    public function testGenDetect675()
    {
        $this->object->setFirstName('Далемил');
        $this->object->setSecondName('Конюхов');
        $this->assertEquals('1-Далемил Конюхов', $this->object->genderAutoDetect().'-Далемил Конюхов');
    }
    public function testGenDetect676()
    {
        $this->object->setFirstName('Далемир');
        $this->object->setSecondName('Копилов');
        $this->assertEquals('1-Далемир Копилов', $this->object->genderAutoDetect().'-Далемир Копилов');
    }
    public function testGenDetect677()
    {
        $this->object->setFirstName('Далібор');
        $this->object->setSecondName('Кормильцев');
        $this->assertEquals('1-Далібор Кормильцев', $this->object->genderAutoDetect().'-Далібор Кормильцев');
    }
    public function testGenDetect678()
    {
        $this->object->setFirstName('Дан');
        $this->object->setSecondName('Коробов');
        $this->assertEquals('1-Дан Коробов', $this->object->genderAutoDetect().'-Дан Коробов');
    }
    public function testGenDetect679()
    {
        $this->object->setFirstName('Данило');
        $this->object->setSecondName('Коровкін');
        $this->assertEquals('1-Данило Коровкін', $this->object->genderAutoDetect().'-Данило Коровкін');
    }
    public function testGenDetect680()
    {
        $this->object->setFirstName('Данко');
        $this->object->setSecondName('Корольов');
        $this->assertEquals('1-Данко Корольов', $this->object->genderAutoDetect().'-Данко Корольов');
    }
    public function testGenDetect681()
    {
        $this->object->setFirstName('Дантур');
        $this->object->setSecondName('Котов');
        $this->assertEquals('1-Дантур Котов', $this->object->genderAutoDetect().'-Дантур Котов');
    }
    public function testGenDetect682()
    {
        $this->object->setFirstName('Дар');
        $this->object->setSecondName('Краснов');
        $this->assertEquals('1-Дар Краснов', $this->object->genderAutoDetect().'-Дар Краснов');
    }
    public function testGenDetect683()
    {
        $this->object->setFirstName('Дарій');
        $this->object->setSecondName('Крилов');
        $this->assertEquals('1-Дарій Крилов', $this->object->genderAutoDetect().'-Дарій Крилов');
    }
    public function testGenDetect684()
    {
        $this->object->setFirstName('Дарибог');
        $this->object->setSecondName('Кримов');
        $this->assertEquals('1-Дарибог Кримов', $this->object->genderAutoDetect().'-Дарибог Кримов');
    }
    public function testGenDetect685()
    {
        $this->object->setFirstName('Даромир');
        $this->object->setSecondName('Крюков');
        $this->assertEquals('1-Даромир Крюков', $this->object->genderAutoDetect().'-Даромир Крюков');
    }
    public function testGenDetect686()
    {
        $this->object->setFirstName('Держикрай');
        $this->object->setSecondName('Кудряшов');
        $this->assertEquals('1-Держикрай Кудряшов', $this->object->genderAutoDetect().'-Держикрай Кудряшов');
    }
    public function testGenDetect687()
    {
        $this->object->setFirstName('Держислав');
        $this->object->setSecondName('Кузнецов');
        $this->assertEquals('1-Держислав Кузнецов', $this->object->genderAutoDetect().'-Держислав Кузнецов');
    }
    public function testGenDetect688()
    {
        $this->object->setFirstName('Дибач');
        $this->object->setSecondName('Кузьмін');
        $this->assertEquals('1-Дибач Кузьмін', $this->object->genderAutoDetect().'-Дибач Кузьмін');
    }
    public function testGenDetect689()
    {
        $this->object->setFirstName('Дивозір');
        $this->object->setSecondName('Кулаков');
        $this->assertEquals('1-Дивозір Кулаков', $this->object->genderAutoDetect().'-Дивозір Кулаков');
    }
    public function testGenDetect690()
    {
        $this->object->setFirstName('Дій');
        $this->object->setSecondName('Куликов');
        $this->assertEquals('1-Дій Куликов', $this->object->genderAutoDetect().'-Дій Куликов');
    }
    public function testGenDetect691()
    {
        $this->object->setFirstName('Добрибій');
        $this->object->setSecondName('Курков');
        $this->assertEquals('1-Добрибій Курков', $this->object->genderAutoDetect().'-Добрибій Курков');
    }
    public function testGenDetect692()
    {
        $this->object->setFirstName('Добривод');
        $this->object->setSecondName('Курочкін');
        $this->assertEquals('1-Добривод Курочкін', $this->object->genderAutoDetect().'-Добривод Курочкін');
    }
    public function testGenDetect693()
    {
        $this->object->setFirstName('Добрик');
        $this->object->setSecondName('Лєсков');
        $this->assertEquals('1-Добрик Лєсков', $this->object->genderAutoDetect().'-Добрик Лєсков');
    }
    public function testGenDetect694()
    {
        $this->object->setFirstName('Добрило');
        $this->object->setSecondName('Лідов');
        $this->assertEquals('1-Добрило Лідов', $this->object->genderAutoDetect().'-Добрило Лідов');
    }
    public function testGenDetect695()
    {
        $this->object->setFirstName('Добриня');
        $this->object->setSecondName('Ладигін');
        $this->assertEquals('1-Добриня Ладигін', $this->object->genderAutoDetect().'-Добриня Ладигін');
    }
    public function testGenDetect696()
    {
        $this->object->setFirstName('Добрисвіт');
        $this->object->setSecondName('Лазарєв');
        $this->assertEquals('1-Добрисвіт Лазарєв', $this->object->genderAutoDetect().'-Добрисвіт Лазарєв');
    }
    public function testGenDetect697()
    {
        $this->object->setFirstName('Добровіст');
        $this->object->setSecondName('Лебедєв');
        $this->assertEquals('1-Добровіст Лебедєв', $this->object->genderAutoDetect().'-Добровіст Лебедєв');
    }
    public function testGenDetect698()
    {
        $this->object->setFirstName('Доброгост');
        $this->object->setSecondName('Лихоносов');
        $this->assertEquals('1-Доброгост Лихоносов', $this->object->genderAutoDetect().'-Доброгост Лихоносов');
    }
    public function testGenDetect699()
    {
        $this->object->setFirstName('Добродум');
        $this->object->setSecondName('Лосєв');
        $this->assertEquals('1-Добродум Лосєв', $this->object->genderAutoDetect().'-Добродум Лосєв');
    }
    public function testGenDetect700()
    {
        $this->object->setFirstName('Добролик');
        $this->object->setSecondName('Львов');
        $this->assertEquals('1-Добролик Львов', $this->object->genderAutoDetect().'-Добролик Львов');
    }
    public function testGenDetect701()
    {
        $this->object->setFirstName('Добролюб');
        $this->object->setSecondName('Любимов');
        $this->assertEquals('1-Добролюб Любимов', $this->object->genderAutoDetect().'-Добролюб Любимов');
    }
    public function testGenDetect702()
    {
        $this->object->setFirstName('Добромил');
        $this->object->setSecondName('Мілютін');
        $this->assertEquals('1-Добромил Мілютін', $this->object->genderAutoDetect().'-Добромил Мілютін');
    }
    public function testGenDetect703()
    {
        $this->object->setFirstName('Добромир');
        $this->object->setSecondName('Макаров');
        $this->assertEquals('1-Добромир Макаров', $this->object->genderAutoDetect().'-Добромир Макаров');
    }
    public function testGenDetect704()
    {
        $this->object->setFirstName('Добромисл');
        $this->object->setSecondName('Максимов');
        $this->assertEquals('1-Добромисл Максимов', $this->object->genderAutoDetect().'-Добромисл Максимов');
    }
    public function testGenDetect705()
    {
        $this->object->setFirstName('Доброслав');
        $this->object->setSecondName('Малаков');
        $this->assertEquals('1-Доброслав Малаков', $this->object->genderAutoDetect().'-Доброслав Малаков');
    }
    public function testGenDetect706()
    {
        $this->object->setFirstName('Доморад');
        $this->object->setSecondName('Мамонов');
        $this->assertEquals('1-Доморад Мамонов', $this->object->genderAutoDetect().'-Доморад Мамонов');
    }
    public function testGenDetect707()
    {
        $this->object->setFirstName('Домослав');
        $this->object->setSecondName('Манасеїн');
        $this->assertEquals('1-Домослав Манасеїн', $this->object->genderAutoDetect().'-Домослав Манасеїн');
    }
    public function testGenDetect708()
    {
        $this->object->setFirstName('Дорогобуг');
        $this->object->setSecondName('Марков');
        $this->assertEquals('1-Дорогобуг Марков', $this->object->genderAutoDetect().'-Дорогобуг Марков');
    }
    public function testGenDetect709()
    {
        $this->object->setFirstName('Дорогомир');
        $this->object->setSecondName('Мартенс');
        $this->assertEquals('1-Дорогомир Мартенс', $this->object->genderAutoDetect().'-Дорогомир Мартенс');
    }
    public function testGenDetect710()
    {
        $this->object->setFirstName('Дорогомисл');
        $this->object->setSecondName('Мартинов');
        $this->assertEquals('1-Дорогомисл Мартинов', $this->object->genderAutoDetect().'-Дорогомисл Мартинов');
    }
    public function testGenDetect711()
    {
        $this->object->setFirstName('Дорогосил');
        $this->object->setSecondName('Масленніков');
        $this->assertEquals('1-Дорогосил Масленніков', $this->object->genderAutoDetect().'-Дорогосил Масленніков');
    }
    public function testGenDetect712()
    {
        $this->object->setFirstName('Дорогочин');
        $this->object->setSecondName('Маслов');
        $this->assertEquals('1-Дорогочин Маслов', $this->object->genderAutoDetect().'-Дорогочин Маслов');
    }
    public function testGenDetect713()
    {
        $this->object->setFirstName('Драган');
        $this->object->setSecondName('Матвєєв');
        $this->assertEquals('1-Драган Матвєєв', $this->object->genderAutoDetect().'-Драган Матвєєв');
    }
    public function testGenDetect714()
    {
        $this->object->setFirstName('Дружелюб');
        $this->object->setSecondName('Медведєв');
        $this->assertEquals('1-Дружелюб Медведєв', $this->object->genderAutoDetect().'-Дружелюб Медведєв');
    }
    public function testGenDetect715()
    {
        $this->object->setFirstName('Жадан');
        $this->object->setSecondName('Мельников');
        $this->assertEquals('1-Жадан Мельников', $this->object->genderAutoDetect().'-Жадан Мельников');
    }
    public function testGenDetect716()
    {
        $this->object->setFirstName('Ждан');
        $this->object->setSecondName('Миронов');
        $this->assertEquals('1-Ждан Миронов', $this->object->genderAutoDetect().'-Ждан Миронов');
    }
    public function testGenDetect717()
    {
        $this->object->setFirstName('Живорід');
        $this->object->setSecondName('Михайлов');
        $this->assertEquals('1-Живорід Михайлов', $this->object->genderAutoDetect().'-Живорід Михайлов');
    }
    public function testGenDetect718()
    {
        $this->object->setFirstName('Живосил');
        $this->object->setSecondName('Моїсєєв');
        $this->assertEquals('1-Живосил Моїсєєв', $this->object->genderAutoDetect().'-Живосил Моїсєєв');
    }
    public function testGenDetect719()
    {
        $this->object->setFirstName('Живослав');
        $this->object->setSecondName('Моргунов');
        $this->assertEquals('1-Живослав Моргунов', $this->object->genderAutoDetect().'-Живослав Моргунов');
    }
    public function testGenDetect720()
    {
        $this->object->setFirstName('Житомир');
        $this->object->setSecondName('Морков');
        $this->assertEquals('1-Житомир Морков', $this->object->genderAutoDetect().'-Житомир Морков');
    }
    public function testGenDetect721()
    {
        $this->object->setFirstName('Життєлюб');
        $this->object->setSecondName('Морозов');
        $this->assertEquals('1-Життєлюб Морозов', $this->object->genderAutoDetect().'-Життєлюб Морозов');
    }
    public function testGenDetect722()
    {
        $this->object->setFirstName('Збоїслав');
        $this->object->setSecondName('Мухін');
        $this->assertEquals('1-Збоїслав Мухін', $this->object->genderAutoDetect().'-Збоїслав Мухін');
    }
    public function testGenDetect723()
    {
        $this->object->setFirstName('Зборислав');
        $this->object->setSecondName('Нікітін');
        $this->assertEquals('1-Зборислав Нікітін', $this->object->genderAutoDetect().'-Зборислав Нікітін');
    }
    public function testGenDetect724()
    {
        $this->object->setFirstName('Звенигор');
        $this->object->setSecondName('Ніколаєв');
        $this->assertEquals('1-Звенигор Ніколаєв', $this->object->genderAutoDetect().'-Звенигор Ніколаєв');
    }
    public function testGenDetect725()
    {
        $this->object->setFirstName('Звенимир');
        $this->object->setSecondName('Нікулін');
        $this->assertEquals('1-Звенимир Нікулін', $this->object->genderAutoDetect().'-Звенимир Нікулін');
    }
    public function testGenDetect726()
    {
        $this->object->setFirstName('Звенислав');
        $this->object->setSecondName('Набоков');
        $this->assertEquals('1-Звенислав Набоков', $this->object->genderAutoDetect().'-Звенислав Набоков');
    }
    public function testGenDetect727()
    {
        $this->object->setFirstName('Здоровега');
        $this->object->setSecondName('Некрасов');
        $this->assertEquals('1-Здоровега Некрасов', $this->object->genderAutoDetect().'-Здоровега Некрасов');
    }
    public function testGenDetect728()
    {
        $this->object->setFirstName('Земислав');
        $this->object->setSecondName('Новиков');
        $this->assertEquals('1-Земислав Новиков', $this->object->genderAutoDetect().'-Земислав Новиков');
    }
    public function testGenDetect729()
    {
        $this->object->setFirstName('Зеновій');
        $this->object->setSecondName('Орлов');
        $this->assertEquals('1-Зеновій Орлов', $this->object->genderAutoDetect().'-Зеновій Орлов');
    }
    public function testGenDetect730()
    {
        $this->object->setFirstName('Зіновій');
        $this->object->setSecondName('Осипов');
        $this->assertEquals('1-Зіновій Осипов', $this->object->genderAutoDetect().'-Зіновій Осипов');
    }
    public function testGenDetect731()
    {
        $this->object->setFirstName('Зиновій');
        $this->object->setSecondName('Павлов');
        $this->assertEquals('1-Зиновій Павлов', $this->object->genderAutoDetect().'-Зиновій Павлов');
    }
    public function testGenDetect732()
    {
        $this->object->setFirstName('Злат');
        $this->object->setSecondName('Павлушков');
        $this->assertEquals('1-Злат Павлушков', $this->object->genderAutoDetect().'-Злат Павлушков');
    }
    public function testGenDetect733()
    {
        $this->object->setFirstName('Златомир');
        $this->object->setSecondName('Панов');
        $this->assertEquals('1-Златомир Панов', $this->object->genderAutoDetect().'-Златомир Панов');
    }
    public function testGenDetect734()
    {
        $this->object->setFirstName('Златоус');
        $this->object->setSecondName('Петров');
        $this->assertEquals('1-Златоус Петров', $this->object->genderAutoDetect().'-Златоус Петров');
    }
    public function testGenDetect735()
    {
        $this->object->setFirstName('Златодан');
        $this->object->setSecondName('Пильчиков');
        $this->assertEquals('1-Златодан Пильчиков', $this->object->genderAutoDetect().'-Златодан Пильчиков');
    }
    public function testGenDetect736()
    {
        $this->object->setFirstName('Злотан');
        $this->object->setSecondName('Платонов');
        $this->assertEquals('1-Злотан Платонов', $this->object->genderAutoDetect().'-Злотан Платонов');
    }
    public function testGenDetect737()
    {
        $this->object->setFirstName('Злотодан');
        $this->object->setSecondName('Плеханов');
        $this->assertEquals('1-Злотодан Плеханов', $this->object->genderAutoDetect().'-Злотодан Плеханов');
    }
    public function testGenDetect738()
    {
        $this->object->setFirstName('Зорегляд');
        $this->object->setSecondName('Поляков');
        $this->assertEquals('1-Зорегляд Поляков', $this->object->genderAutoDetect().'-Зорегляд Поляков');
    }
    public function testGenDetect739()
    {
        $this->object->setFirstName('Зоремир');
        $this->object->setSecondName('Попов');
        $this->assertEquals('1-Зоремир Попов', $this->object->genderAutoDetect().'-Зоремир Попов');
    }
    public function testGenDetect740()
    {
        $this->object->setFirstName('Зорепад');
        $this->object->setSecondName('Поярков');
        $this->assertEquals('1-Зорепад Поярков', $this->object->genderAutoDetect().'-Зорепад Поярков');
    }
    public function testGenDetect741()
    {
        $this->object->setFirstName('Зореслав');
        $this->object->setSecondName('Пригунов');
        $this->assertEquals('1-Зореслав Пригунов', $this->object->genderAutoDetect().'-Зореслав Пригунов');
    }
    public function testGenDetect742()
    {
        $this->object->setFirstName('Зорян');
        $this->object->setSecondName('Прошкін');
        $this->assertEquals('1-Зорян Прошкін', $this->object->genderAutoDetect().'-Зорян Прошкін');
    }
    public function testGenDetect743()
    {
        $this->object->setFirstName('Ізяслав');
        $this->object->setSecondName('Решетников');
        $this->assertEquals('1-Ізяслав Решетников', $this->object->genderAutoDetect().'-Ізяслав Решетников');
    }
    public function testGenDetect744()
    {
        $this->object->setFirstName('Ігор');
        $this->object->setSecondName('Рожков');
        $this->assertEquals('1-Ігор Рожков', $this->object->genderAutoDetect().'-Ігор Рожков');
    }
    public function testGenDetect745()
    {
        $this->object->setFirstName('Іван');
        $this->object->setSecondName('Романов');
        $this->assertEquals('1-Іван Романов', $this->object->genderAutoDetect().'-Іван Романов');
    }
    public function testGenDetect746()
    {
        $this->object->setFirstName('Квітан');
        $this->object->setSecondName('Рябов');
        $this->assertEquals('1-Квітан Рябов', $this->object->genderAutoDetect().'-Квітан Рябов');
    }
    public function testGenDetect747()
    {
        $this->object->setFirstName('Києслав');
        $this->object->setSecondName('Саблін');
        $this->assertEquals('1-Києслав Саблін', $this->object->genderAutoDetect().'-Києслав Саблін');
    }
    public function testGenDetect748()
    {
        $this->object->setFirstName('Кий');
        $this->object->setSecondName('Савін');
        $this->assertEquals('1-Кий Савін', $this->object->genderAutoDetect().'-Кий Савін');
    }
    public function testGenDetect749()
    {
        $this->object->setFirstName('Кирило');
        $this->object->setSecondName('Сазонов');
        $this->assertEquals('1-Кирило Сазонов', $this->object->genderAutoDetect().'-Кирило Сазонов');
    }
    public function testGenDetect750()
    {
        $this->object->setFirstName('Киян');
        $this->object->setSecondName('Сальников');
        $this->assertEquals('1-Киян Сальников', $this->object->genderAutoDetect().'-Киян Сальников');
    }
    public function testGenDetect751()
    {
        $this->object->setFirstName('Княжослав');
        $this->object->setSecondName('Самойлов');
        $this->assertEquals('1-Княжослав Самойлов', $this->object->genderAutoDetect().'-Княжослав Самойлов');
    }
    public function testGenDetect752()
    {
        $this->object->setFirstName('Корній');
        $this->object->setSecondName('Самсонов');
        $this->assertEquals('1-Корній Самсонов', $this->object->genderAutoDetect().'-Корній Самсонов');
    }
    public function testGenDetect753()
    {
        $this->object->setFirstName('Колодар');
        $this->object->setSecondName('Сбітнєв');
        $this->assertEquals('1-Колодар Сбітнєв', $this->object->genderAutoDetect().'-Колодар Сбітнєв');
    }
    public function testGenDetect754()
    {
        $this->object->setFirstName('Колодій');
        $this->object->setSecondName('Свиридов');
        $this->assertEquals('1-Колодій Свиридов', $this->object->genderAutoDetect().'-Колодій Свиридов');
    }
    public function testGenDetect755()
    {
        $this->object->setFirstName('Косак');
        $this->object->setSecondName('Селезньов');
        $this->assertEquals('1-Косак Селезньов', $this->object->genderAutoDetect().'-Косак Селезньов');
    }
    public function testGenDetect756()
    {
        $this->object->setFirstName('Красун');
        $this->object->setSecondName('Семенов');
        $this->assertEquals('1-Красун Семенов', $this->object->genderAutoDetect().'-Красун Семенов');
    }
    public function testGenDetect757()
    {
        $this->object->setFirstName('Крилач');
        $this->object->setSecondName('Сербін');
        $this->assertEquals('1-Крилач Сербін', $this->object->genderAutoDetect().'-Крилач Сербін');
    }
    public function testGenDetect758()
    {
        $this->object->setFirstName('Куйбіда');
        $this->object->setSecondName('Сергєєв');
        $this->assertEquals('1-Куйбіда Сергєєв', $this->object->genderAutoDetect().'-Куйбіда Сергєєв');
    }
    public function testGenDetect759()
    {
        $this->object->setFirstName('Курило');
        $this->object->setSecondName('Сибіряков');
        $this->assertEquals('1-Курило Сибіряков', $this->object->genderAutoDetect().'-Курило Сибіряков');
    }
    public function testGenDetect760()
    {
        $this->object->setFirstName('Лад');
        $this->object->setSecondName('Сидоров');
        $this->assertEquals('1-Лад Сидоров', $this->object->genderAutoDetect().'-Лад Сидоров');
    }
    public function testGenDetect761()
    {
        $this->object->setFirstName('Ладимир');
        $this->object->setSecondName('Симонов');
        $this->assertEquals('1-Ладимир Симонов', $this->object->genderAutoDetect().'-Ладимир Симонов');
    }
    public function testGenDetect762()
    {
        $this->object->setFirstName('Ладислав');
        $this->object->setSecondName('Синельников');
        $this->assertEquals('1-Ладислав Синельников', $this->object->genderAutoDetect().'-Ладислав Синельников');
    }
    public function testGenDetect763()
    {
        $this->object->setFirstName('Ладолюб');
        $this->object->setSecondName('Скобелев');
        $this->assertEquals('1-Ладолюб Скобелев', $this->object->genderAutoDetect().'-Ладолюб Скобелев');
    }
    public function testGenDetect764()
    {
        $this->object->setFirstName('Ладомир');
        $this->object->setSecondName('Скоблін');
        $this->assertEquals('1-Ладомир Скоблін', $this->object->genderAutoDetect().'-Ладомир Скоблін');
    }
    public function testGenDetect765()
    {
        $this->object->setFirstName('Лев');
        $this->object->setSecondName('Смирнов');
        $this->assertEquals('1-Лев Смирнов', $this->object->genderAutoDetect().'-Лев Смирнов');
    }
    public function testGenDetect766()
    {
        $this->object->setFirstName('Левко');
        $this->object->setSecondName('Снєгірьов');
        $this->assertEquals('1-Левко Снєгірьов', $this->object->genderAutoDetect().'-Левко Снєгірьов');
    }
    public function testGenDetect767()
    {
        $this->object->setFirstName('Листвич');
        $this->object->setSecondName('Соболєв');
        $this->assertEquals('1-Листвич Соболєв', $this->object->genderAutoDetect().'-Листвич Соболєв');
    }
    public function testGenDetect768()
    {
        $this->object->setFirstName('Ліпослав');
        $this->object->setSecondName('Соколов');
        $this->assertEquals('1-Ліпослав Соколов', $this->object->genderAutoDetect().'-Ліпослав Соколов');
    }
    public function testGenDetect769()
    {
        $this->object->setFirstName('Лоліт');
        $this->object->setSecondName('Солнцев');
        $this->assertEquals('1-Лоліт Солнцев', $this->object->genderAutoDetect().'-Лоліт Солнцев');
    }
    public function testGenDetect770()
    {
        $this->object->setFirstName('Любим');
        $this->object->setSecondName('Соловйов');
        $this->assertEquals('1-Любим Соловйов', $this->object->genderAutoDetect().'-Любим Соловйов');
    }
    public function testGenDetect771()
    {
        $this->object->setFirstName('Любовир');
        $this->object->setSecondName('Сомов');
        $this->assertEquals('1-Любовир Сомов', $this->object->genderAutoDetect().'-Любовир Сомов');
    }
    public function testGenDetect772()
    {
        $this->object->setFirstName('Любодар');
        $this->object->setSecondName('Сорокін');
        $this->assertEquals('1-Любодар Сорокін', $this->object->genderAutoDetect().'-Любодар Сорокін');
    }
    public function testGenDetect773()
    {
        $this->object->setFirstName('Любозар');
        $this->object->setSecondName('Стєклов');
        $this->assertEquals('1-Любозар Стєклов', $this->object->genderAutoDetect().'-Любозар Стєклов');
    }
    public function testGenDetect774()
    {
        $this->object->setFirstName('Любомил');
        $this->object->setSecondName('Старков');
        $this->assertEquals('1-Любомил Старков', $this->object->genderAutoDetect().'-Любомил Старков');
    }
    public function testGenDetect775()
    {
        $this->object->setFirstName('Любомир');
        $this->object->setSecondName('Степанов');
        $this->assertEquals('1-Любомир Степанов', $this->object->genderAutoDetect().'-Любомир Степанов');
    }
    public function testGenDetect776()
    {
        $this->object->setFirstName('Любомисл');
        $this->object->setSecondName('Табаков');
        $this->assertEquals('1-Любомисл Табаков', $this->object->genderAutoDetect().'-Любомисл Табаков');
    }
    public function testGenDetect777()
    {
        $this->object->setFirstName('Любомудр');
        $this->object->setSecondName('Тарасов');
        $this->assertEquals('1-Любомудр Тарасов', $this->object->genderAutoDetect().'-Любомудр Тарасов');
    }
    public function testGenDetect778()
    {
        $this->object->setFirstName('Любослав');
        $this->object->setSecondName('Терентьєв');
        $this->assertEquals('1-Любослав Терентьєв', $this->object->genderAutoDetect().'-Любослав Терентьєв');
    }
    public function testGenDetect779()
    {
        $this->object->setFirstName('Людомил');
        $this->object->setSecondName('Тимофєєв');
        $this->assertEquals('1-Людомил Тимофєєв', $this->object->genderAutoDetect().'-Людомил Тимофєєв');
    }
    public function testGenDetect780()
    {
        $this->object->setFirstName('Людомир');
        $this->object->setSecondName('Титов');
        $this->assertEquals('1-Людомир Титов', $this->object->genderAutoDetect().'-Людомир Титов');
    }
    public function testGenDetect781()
    {
        $this->object->setFirstName('Людислав');
        $this->object->setSecondName('Тихомиров');
        $this->assertEquals('1-Людислав Тихомиров', $this->object->genderAutoDetect().'-Людислав Тихомиров');
    }
    public function testGenDetect782()
    {
        $this->object->setFirstName('Лютобор');
        $this->object->setSecondName('Тихонов');
        $this->assertEquals('1-Лютобор Тихонов', $this->object->genderAutoDetect().'-Лютобор Тихонов');
    }
    public function testGenDetect783()
    {
        $this->object->setFirstName('Лютомисл');
        $this->object->setSecondName('Тюленєв');
        $this->assertEquals('1-Лютомисл Тюленєв', $this->object->genderAutoDetect().'-Лютомисл Тюленєв');
    }
    public function testGenDetect784()
    {
        $this->object->setFirstName('Магадар');
        $this->object->setSecondName('Уваров');
        $this->assertEquals('1-Магадар Уваров', $this->object->genderAutoDetect().'-Магадар Уваров');
    }
    public function testGenDetect785()
    {
        $this->object->setFirstName('Магамир');
        $this->object->setSecondName('Усов');
        $this->assertEquals('1-Магамир Усов', $this->object->genderAutoDetect().'-Магамир Усов');
    }
    public function testGenDetect786()
    {
        $this->object->setFirstName('Магаслав');
        $this->object->setSecondName('Устинов');
        $this->assertEquals('1-Магаслав Устинов', $this->object->genderAutoDetect().'-Магаслав Устинов');
    }
    public function testGenDetect787()
    {
        $this->object->setFirstName('Маркіян');
        $this->object->setSecondName('Філіппов');
        $this->assertEquals('1-Маркіян Філіппов', $this->object->genderAutoDetect().'-Маркіян Філіппов');
    }
    public function testGenDetect788()
    {
        $this->object->setFirstName('Май');
        $this->object->setSecondName('Філатов');
        $this->assertEquals('1-Май Філатов', $this->object->genderAutoDetect().'-Май Філатов');
    }
    public function testGenDetect789()
    {
        $this->object->setFirstName('Мал');
        $this->object->setSecondName('Федоров');
        $this->assertEquals('1-Мал Федоров', $this->object->genderAutoDetect().'-Мал Федоров');
    }
    public function testGenDetect790()
    {
        $this->object->setFirstName('Малик');
        $this->object->setSecondName('Фомін');
        $this->assertEquals('1-Малик Фомін', $this->object->genderAutoDetect().'-Малик Фомін');
    }
    public function testGenDetect791()
    {
        $this->object->setFirstName('Маломир');
        $this->object->setSecondName('Фролов');
        $this->assertEquals('1-Маломир Фролов', $this->object->genderAutoDetect().'-Маломир Фролов');
    }
    public function testGenDetect792()
    {
        $this->object->setFirstName('Марко');
        $this->object->setSecondName('Хілков');
        $this->assertEquals('1-Марко Хілков', $this->object->genderAutoDetect().'-Марко Хілков');
    }
    public function testGenDetect793()
    {
        $this->object->setFirstName('Медомир');
        $this->object->setSecondName('Хвостов');
        $this->assertEquals('1-Медомир Хвостов', $this->object->genderAutoDetect().'-Медомир Хвостов');
    }
    public function testGenDetect794()
    {
        $this->object->setFirstName('Межамир');
        $this->object->setSecondName('Худяков');
        $this->assertEquals('1-Межамир Худяков', $this->object->genderAutoDetect().'-Межамир Худяков');
    }
    public function testGenDetect795()
    {
        $this->object->setFirstName('Мечислав');
        $this->object->setSecondName('Цвєтков');
        $this->assertEquals('1-Мечислав Цвєтков', $this->object->genderAutoDetect().'-Мечислав Цвєтков');
    }
    public function testGenDetect796()
    {
        $this->object->setFirstName('Мизамир');
        $this->object->setSecondName('Чевкін');
        $this->assertEquals('1-Мизамир Чевкін', $this->object->genderAutoDetect().'-Мизамир Чевкін');
    }
    public function testGenDetect797()
    {
        $this->object->setFirstName('Милан');
        $this->object->setSecondName('Черенков');
        $this->assertEquals('1-Милан Черенков', $this->object->genderAutoDetect().'-Милан Черенков');
    }
    public function testGenDetect798()
    {
        $this->object->setFirstName('Милован');
        $this->object->setSecondName('Черепков');
        $this->assertEquals('1-Милован Черепков', $this->object->genderAutoDetect().'-Милован Черепков');
    }
    public function testGenDetect799()
    {
        $this->object->setFirstName('Милодар');
        $this->object->setSecondName('Чулков');
        $this->assertEquals('1-Милодар Чулков', $this->object->genderAutoDetect().'-Милодар Чулков');
    }
    public function testGenDetect800()
    {
        $this->object->setFirstName('Милодух');
        $this->object->setSecondName('Шевельов');
        $this->assertEquals('1-Милодух Шевельов', $this->object->genderAutoDetect().'-Милодух Шевельов');
    }
    public function testGenDetect801()
    {
        $this->object->setFirstName('Милослав');
        $this->object->setSecondName('Шеліхов');
        $this->assertEquals('1-Милослав Шеліхов', $this->object->genderAutoDetect().'-Милослав Шеліхов');
    }
    public function testGenDetect802()
    {
        $this->object->setFirstName('Мир');
        $this->object->setSecondName('Шинін');
        $this->assertEquals('1-Мир Шинін', $this->object->genderAutoDetect().'-Мир Шинін');
    }
    public function testGenDetect803()
    {
        $this->object->setFirstName('Миробог');
        $this->object->setSecondName('Ширяєв');
        $this->assertEquals('1-Миробог Ширяєв', $this->object->genderAutoDetect().'-Миробог Ширяєв');
    }
    public function testGenDetect804()
    {
        $this->object->setFirstName('Мирогост');
        $this->object->setSecondName('Шишов');
        $this->assertEquals('1-Мирогост Шишов', $this->object->genderAutoDetect().'-Мирогост Шишов');
    }
    public function testGenDetect805()
    {
        $this->object->setFirstName('Миролюб');
        $this->object->setSecondName('Шулаков');
        $this->assertEquals('1-Миролюб Шулаков', $this->object->genderAutoDetect().'-Миролюб Шулаков');
    }
    public function testGenDetect806()
    {
        $this->object->setFirstName('Мирослав');
        $this->object->setSecondName('Щапов');
        $this->assertEquals('1-Мирослав Щапов', $this->object->genderAutoDetect().'-Мирослав Щапов');
    }
    public function testGenDetect807()
    {
        $this->object->setFirstName('Мовчан');
        $this->object->setSecondName('Щасливий');
        $this->assertEquals('1-Мовчан Щасливий', $this->object->genderAutoDetect().'-Мовчан Щасливий');
    }
    public function testGenDetect808()
    {
        $this->object->setFirstName('Молибог');
        $this->object->setSecondName('Яковлєв');
        $this->assertEquals('1-Молибог Яковлєв', $this->object->genderAutoDetect().'-Молибог Яковлєв');
    }
    public function testGenDetect809()
    {
        $this->object->setFirstName('Мстибог');
        $this->object->setSecondName('Яшин');
        $this->assertEquals('1-Мстибог Яшин', $this->object->genderAutoDetect().'-Мстибог Яшин');
    }
    public function testGenDetect810()
    {
        $this->object->setFirstName('Августа');
        $this->object->setSecondName('Єрмоленко');
        $this->assertEquals('2-Августа Єрмоленко', $this->object->genderAutoDetect().'-Августа Єрмоленко');
    }
    public function testGenDetect811()
    {
        $this->object->setFirstName('Аврелія');
        $this->object->setSecondName('Єсипенко');
        $this->assertEquals('2-Аврелія Єсипенко', $this->object->genderAutoDetect().'-Аврелія Єсипенко');
    }
    public function testGenDetect812()
    {
        $this->object->setFirstName('Аврора');
        $this->object->setSecondName('Іваненко');
        $this->assertEquals('2-Аврора Іваненко', $this->object->genderAutoDetect().'-Аврора Іваненко');
    }
    public function testGenDetect813()
    {
        $this->object->setFirstName('Агнія');
        $this->object->setSecondName('Іванченко');
        $this->assertEquals('2-Агнія Іванченко', $this->object->genderAutoDetect().'-Агнія Іванченко');
    }
    public function testGenDetect814()
    {
        $this->object->setFirstName('Агрипина');
        $this->object->setSecondName('Іванчук');
        $this->assertEquals('2-Агрипина Іванчук', $this->object->genderAutoDetect().'-Агрипина Іванчук');
    }
    public function testGenDetect815()
    {
        $this->object->setFirstName('Ада');
        $this->object->setSecondName('Іванюк');
        $this->assertEquals('2-Ада Іванюк', $this->object->genderAutoDetect().'-Ада Іванюк');
    }
    public function testGenDetect816()
    {
        $this->object->setFirstName('Аделаїда');
        $this->object->setSecondName('Івахненко');
        $this->assertEquals('2-Аделаїда Івахненко', $this->object->genderAutoDetect().'-Аделаїда Івахненко');
    }
    public function testGenDetect817()
    {
        $this->object->setFirstName('Адріана');
        $this->object->setSecondName('Івашко');
        $this->assertEquals('2-Адріана Івашко', $this->object->genderAutoDetect().'-Адріана Івашко');
    }
    public function testGenDetect818()
    {
        $this->object->setFirstName('Аза');
        $this->object->setSecondName('Іващенко');
        $this->assertEquals('2-Аза Іващенко', $this->object->genderAutoDetect().'-Аза Іващенко');
    }
    public function testGenDetect819()
    {
        $this->object->setFirstName('Азалія');
        $this->object->setSecondName('Івченко');
        $this->assertEquals('2-Азалія Івченко', $this->object->genderAutoDetect().'-Азалія Івченко');
    }
    public function testGenDetect820()
    {
        $this->object->setFirstName('Аліна');
        $this->object->setSecondName('Іллєнко');
        $this->assertEquals('2-Аліна Іллєнко', $this->object->genderAutoDetect().'-Аліна Іллєнко');
    }
    public function testGenDetect821()
    {
        $this->object->setFirstName('Аліса');
        $this->object->setSecondName('Іловайські');
        $this->assertEquals('2-Аліса Іловайські', $this->object->genderAutoDetect().'-Аліса Іловайські');
    }
    public function testGenDetect822()
    {
        $this->object->setFirstName('Алла');
        $this->object->setSecondName('Ільницька');
        $this->assertEquals('2-Алла Ільницька', $this->object->genderAutoDetect().'-Алла Ільницька');
    }
    public function testGenDetect823()
    {
        $this->object->setFirstName('Альбертина');
        $this->object->setSecondName('Ільченко');
        $this->assertEquals('2-Альбертина Ільченко', $this->object->genderAutoDetect().'-Альбертина Ільченко');
    }
    public function testGenDetect824()
    {
        $this->object->setFirstName('Альбіна');
        $this->object->setSecondName('Іщенко');
        $this->assertEquals('2-Альбіна Іщенко', $this->object->genderAutoDetect().'-Альбіна Іщенко');
    }
    public function testGenDetect825()
    {
        $this->object->setFirstName('Альвіна');
        $this->object->setSecondName('Абраменко');
        $this->assertEquals('2-Альвіна Абраменко', $this->object->genderAutoDetect().'-Альвіна Абраменко');
    }
    public function testGenDetect826()
    {
        $this->object->setFirstName('Анастасія');
        $this->object->setSecondName('Абрамчук');
        $this->assertEquals('2-Анастасія Абрамчук', $this->object->genderAutoDetect().'-Анастасія Абрамчук');
    }
    public function testGenDetect827()
    {
        $this->object->setFirstName('Ангеліна');
        $this->object->setSecondName('Адамчук');
        $this->assertEquals('2-Ангеліна Адамчук', $this->object->genderAutoDetect().'-Ангеліна Адамчук');
    }
    public function testGenDetect828()
    {
        $this->object->setFirstName('Анжела');
        $this->object->setSecondName('Акуленко');
        $this->assertEquals('2-Анжела Акуленко', $this->object->genderAutoDetect().'-Анжела Акуленко');
    }
    public function testGenDetect829()
    {
        $this->object->setFirstName('Антоніна');
        $this->object->setSecondName('Алексєєнко');
        $this->assertEquals('2-Антоніна Алексєєнко', $this->object->genderAutoDetect().'-Антоніна Алексєєнко');
    }
    public function testGenDetect830()
    {
        $this->object->setFirstName('Анфіса');
        $this->object->setSecondName('Алексійчук');
        $this->assertEquals('2-Анфіса Алексійчук', $this->object->genderAutoDetect().'-Анфіса Алексійчук');
    }
    public function testGenDetect831()
    {
        $this->object->setFirstName('Аріадна');
        $this->object->setSecondName('Андрієнко');
        $this->assertEquals('2-Аріадна Андрієнко', $this->object->genderAutoDetect().'-Аріадна Андрієнко');
    }
    public function testGenDetect832()
    {
        $this->object->setFirstName('Арсена');
        $this->object->setSecondName('Андрійчук');
        $this->assertEquals('2-Арсена Андрійчук', $this->object->genderAutoDetect().'-Арсена Андрійчук');
    }
    public function testGenDetect833()
    {
        $this->object->setFirstName('Ася');
        $this->object->setSecondName('Андрейко');
        $this->assertEquals('2-Ася Андрейко', $this->object->genderAutoDetect().'-Ася Андрейко');
    }
    public function testGenDetect834()
    {
        $this->object->setFirstName('Афіна');
        $this->object->setSecondName('Андрущенко');
        $this->assertEquals('2-Афіна Андрущенко', $this->object->genderAutoDetect().'-Афіна Андрущенко');
    }
    public function testGenDetect835()
    {
        $this->object->setFirstName('Афродіта');
        $this->object->setSecondName('Анищенко');
        $this->assertEquals('2-Афродіта Анищенко', $this->object->genderAutoDetect().'-Афродіта Анищенко');
    }
    public function testGenDetect836()
    {
        $this->object->setFirstName('Бажана');
        $this->object->setSecondName('Антонюк');
        $this->assertEquals('2-Бажана Антонюк', $this->object->genderAutoDetect().'-Бажана Антонюк');
    }
    public function testGenDetect837()
    {
        $this->object->setFirstName('Берегиня');
        $this->object->setSecondName('Арсенич');
        $this->assertEquals('2-Берегиня Арсенич', $this->object->genderAutoDetect().'-Берегиня Арсенич');
    }
    public function testGenDetect838()
    {
        $this->object->setFirstName('Біловида');
        $this->object->setSecondName('Артюх');
        $this->assertEquals('2-Біловида Артюх', $this->object->genderAutoDetect().'-Біловида Артюх');
    }
    public function testGenDetect839()
    {
        $this->object->setFirstName('Біломира');
        $this->object->setSecondName('Атаманчук');
        $this->assertEquals('2-Біломира Атаманчук', $this->object->genderAutoDetect().'-Біломира Атаманчук');
    }
    public function testGenDetect840()
    {
        $this->object->setFirstName('Білослава');
        $this->object->setSecondName('Біла');
        $this->assertEquals('2-Білослава Біла', $this->object->genderAutoDetect().'-Білослава Біла');
    }
    public function testGenDetect841()
    {
        $this->object->setFirstName('Біляна');
        $this->object->setSecondName('Білас');
        $this->assertEquals('2-Біляна Білас', $this->object->genderAutoDetect().'-Біляна Білас');
    }
    public function testGenDetect842()
    {
        $this->object->setFirstName('Благиня');
        $this->object->setSecondName('Білодід');
        $this->assertEquals('2-Благиня Білодід', $this->object->genderAutoDetect().'-Благиня Білодід');
    }
    public function testGenDetect843()
    {
        $this->object->setFirstName('Благовида');
        $this->object->setSecondName('Білоус');
        $this->assertEquals('2-Благовида Білоус', $this->object->genderAutoDetect().'-Благовида Білоус');
    }
    public function testGenDetect844()
    {
        $this->object->setFirstName('Благовіра');
        $this->object->setSecondName('Бабійчук');
        $this->assertEquals('2-Благовіра Бабійчук', $this->object->genderAutoDetect().'-Благовіра Бабійчук');
    }
    public function testGenDetect845()
    {
        $this->object->setFirstName('Благовіста');
        $this->object->setSecondName('Бабак');
        $this->assertEquals('2-Благовіста Бабак', $this->object->genderAutoDetect().'-Благовіста Бабак');
    }
    public function testGenDetect846()
    {
        $this->object->setFirstName('Благослава');
        $this->object->setSecondName('Бабчук');
        $this->assertEquals('2-Благослава Бабчук', $this->object->genderAutoDetect().'-Благослава Бабчук');
    }
    public function testGenDetect847()
    {
        $this->object->setFirstName('Богдана');
        $this->object->setSecondName('Багмут');
        $this->assertEquals('2-Богдана Багмут', $this->object->genderAutoDetect().'-Богдана Багмут');
    }
    public function testGenDetect848()
    {
        $this->object->setFirstName('Боговіра');
        $this->object->setSecondName('Багрій');
        $this->assertEquals('2-Боговіра Багрій', $this->object->genderAutoDetect().'-Боговіра Багрій');
    }
    public function testGenDetect849()
    {
        $this->object->setFirstName('Боговіста');
        $this->object->setSecondName('Бадлак');
        $this->assertEquals('2-Боговіста Бадлак', $this->object->genderAutoDetect().'-Боговіста Бадлак');
    }
    public function testGenDetect850()
    {
        $this->object->setFirstName('Богодара');
        $this->object->setSecondName('Бажан');
        $this->assertEquals('2-Богодара Бажан', $this->object->genderAutoDetect().'-Богодара Бажан');
    }
    public function testGenDetect851()
    {
        $this->object->setFirstName('Боголіпа');
        $this->object->setSecondName('Балтача');
        $this->assertEquals('2-Боголіпа Балтача', $this->object->genderAutoDetect().'-Боголіпа Балтача');
    }
    public function testGenDetect852()
    {
        $this->object->setFirstName('Боголюба');
        $this->object->setSecondName('Бандура');
        $this->assertEquals('2-Боголюба Бандура', $this->object->genderAutoDetect().'-Боголюба Бандура');
    }
    public function testGenDetect853()
    {
        $this->object->setFirstName('Богосвята');
        $this->object->setSecondName('Баран');
        $this->assertEquals('2-Богосвята Баран', $this->object->genderAutoDetect().'-Богосвята Баран');
    }
    public function testGenDetect854()
    {
        $this->object->setFirstName('Богумила');
        $this->object->setSecondName('Баранець');
        $this->assertEquals('2-Богумила Баранець', $this->object->genderAutoDetect().'-Богумила Баранець');
    }
    public function testGenDetect855()
    {
        $this->object->setFirstName('Богумира');
        $this->object->setSecondName('Барановська');
        $this->assertEquals('2-Богумира Барановська', $this->object->genderAutoDetect().'-Богумира Барановська');
    }
    public function testGenDetect856()
    {
        $this->object->setFirstName('Богуслава');
        $this->object->setSecondName('Баранюк');
        $this->assertEquals('2-Богуслава Баранюк', $this->object->genderAutoDetect().'-Богуслава Баранюк');
    }
    public function testGenDetect857()
    {
        $this->object->setFirstName('Божедана');
        $this->object->setSecondName('Батюк');
        $this->assertEquals('2-Божедана Батюк', $this->object->genderAutoDetect().'-Божедана Батюк');
    }
    public function testGenDetect858()
    {
        $this->object->setFirstName('Божедара');
        $this->object->setSecondName('Бачинська');
        $this->assertEquals('2-Божедара Бачинська', $this->object->genderAutoDetect().'-Божедара Бачинська');
    }
    public function testGenDetect859()
    {
        $this->object->setFirstName('Божемила');
        $this->object->setSecondName('Бебешко');
        $this->assertEquals('2-Божемила Бебешко', $this->object->genderAutoDetect().'-Божемила Бебешко');
    }
    public function testGenDetect860()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Бевзенко');
        $this->assertEquals('2-Божена Бевзенко', $this->object->genderAutoDetect().'-Божена Бевзенко');
    }
    public function testGenDetect861()
    {
        $this->object->setFirstName('Божиця');
        $this->object->setSecondName('Безбородьки');
        $this->assertEquals('2-Божиця Безбородьки', $this->object->genderAutoDetect().'-Божиця Безбородьки');
    }
    public function testGenDetect862()
    {
        $this->object->setFirstName('Болеслава');
        $this->object->setSecondName('Березовчук');
        $this->assertEquals('2-Болеслава Березовчук', $this->object->genderAutoDetect().'-Болеслава Березовчук');
    }
    public function testGenDetect863()
    {
        $this->object->setFirstName('Борислава');
        $this->object->setSecondName('Блонські');
        $this->assertEquals('2-Борислава Блонські', $this->object->genderAutoDetect().'-Борислава Блонські');
    }
    public function testGenDetect864()
    {
        $this->object->setFirstName('Боронислава');
        $this->object->setSecondName('Божик');
        $this->assertEquals('2-Боронислава Божик', $this->object->genderAutoDetect().'-Боронислава Божик');
    }
    public function testGenDetect865()
    {
        $this->object->setFirstName('Братолюба');
        $this->object->setSecondName('Божко');
        $this->assertEquals('2-Братолюба Божко', $this->object->genderAutoDetect().'-Братолюба Божко');
    }
    public function testGenDetect866()
    {
        $this->object->setFirstName('Братомила');
        $this->object->setSecondName('Бойко');
        $this->assertEquals('2-Братомила Бойко', $this->object->genderAutoDetect().'-Братомила Бойко');
    }
    public function testGenDetect867()
    {
        $this->object->setFirstName('Брячислава');
        $this->object->setSecondName('Бойцун');
        $this->assertEquals('2-Брячислава Бойцун', $this->object->genderAutoDetect().'-Брячислава Бойцун');
    }
    public function testGenDetect868()
    {
        $this->object->setFirstName('Будана');
        $this->object->setSecondName('Бойчак');
        $this->assertEquals('2-Будана Бойчак', $this->object->genderAutoDetect().'-Будана Бойчак');
    }
    public function testGenDetect869()
    {
        $this->object->setFirstName('Будимира');
        $this->object->setSecondName('Бойчук');
        $this->assertEquals('2-Будимира Бойчук', $this->object->genderAutoDetect().'-Будимира Бойчук');
    }
    public function testGenDetect870()
    {
        $this->object->setFirstName('Будислава');
        $this->object->setSecondName('Бондар');
        $this->assertEquals('2-Будислава Бондар', $this->object->genderAutoDetect().'-Будислава Бондар');
    }
    public function testGenDetect871()
    {
        $this->object->setFirstName('Ведана');
        $this->object->setSecondName('Бондаренко');
        $this->assertEquals('2-Ведана Бондаренко', $this->object->genderAutoDetect().'-Ведана Бондаренко');
    }
    public function testGenDetect872()
    {
        $this->object->setFirstName('Велимира');
        $this->object->setSecondName('Бондарчук');
        $this->assertEquals('2-Велимира Бондарчук', $this->object->genderAutoDetect().'-Велимира Бондарчук');
    }
    public function testGenDetect873()
    {
        $this->object->setFirstName('Вербава');
        $this->object->setSecondName('Борисенко');
        $this->assertEquals('2-Вербава Борисенко', $this->object->genderAutoDetect().'-Вербава Борисенко');
    }
    public function testGenDetect874()
    {
        $this->object->setFirstName('Верхуслава');
        $this->object->setSecondName('Борисикевич');
        $this->assertEquals('2-Верхуслава Борисикевич', $this->object->genderAutoDetect().'-Верхуслава Борисикевич');
    }
    public function testGenDetect875()
    {
        $this->object->setFirstName('Веселина');
        $this->object->setSecondName('Братусь');
        $this->assertEquals('2-Веселина Братусь', $this->object->genderAutoDetect().'-Веселина Братусь');
    }
    public function testGenDetect876()
    {
        $this->object->setFirstName('Веселка');
        $this->object->setSecondName('Букатевич');
        $this->assertEquals('2-Веселка Букатевич', $this->object->genderAutoDetect().'-Веселка Букатевич');
    }
    public function testGenDetect877()
    {
        $this->object->setFirstName('Весна');
        $this->object->setSecondName('Бурбан');
        $this->assertEquals('2-Весна Бурбан', $this->object->genderAutoDetect().'-Весна Бурбан');
    }
    public function testGenDetect878()
    {
        $this->object->setFirstName('Вишена');
        $this->object->setSecondName('Бурячок');
        $this->assertEquals('2-Вишена Бурячок', $this->object->genderAutoDetect().'-Вишена Бурячок');
    }
    public function testGenDetect879()
    {
        $this->object->setFirstName('Вишеслава');
        $this->object->setSecondName('Бутейко');
        $this->assertEquals('2-Вишеслава Бутейко', $this->object->genderAutoDetect().'-Вишеслава Бутейко');
    }
    public function testGenDetect880()
    {
        $this->object->setFirstName('Вишня');
        $this->object->setSecondName('Бутенко');
        $this->assertEquals('2-Вишня Бутенко', $this->object->genderAutoDetect().'-Вишня Бутенко');
    }
    public function testGenDetect881()
    {
        $this->object->setFirstName('Віра');
        $this->object->setSecondName('Бутник');
        $this->assertEquals('2-Віра Бутник', $this->object->genderAutoDetect().'-Віра Бутник');
    }
    public function testGenDetect882()
    {
        $this->object->setFirstName('Віродана');
        $this->object->setSecondName('Бутовичі');
        $this->assertEquals('2-Віродана Бутовичі', $this->object->genderAutoDetect().'-Віродана Бутовичі');
    }
    public function testGenDetect883()
    {
        $this->object->setFirstName('Віродара');
        $this->object->setSecondName('Бухало');
        $this->assertEquals('2-Віродара Бухало', $this->object->genderAutoDetect().'-Віродара Бухало');
    }
    public function testGenDetect884()
    {
        $this->object->setFirstName('Вірослава');
        $this->object->setSecondName('Візерські');
        $this->assertEquals('2-Вірослава Візерські', $this->object->genderAutoDetect().'-Вірослава Візерські');
    }
    public function testGenDetect885()
    {
        $this->object->setFirstName('Віста');
        $this->object->setSecondName('Василашко');
        $this->assertEquals('2-Віста Василашко', $this->object->genderAutoDetect().'-Віста Василашко');
    }
    public function testGenDetect886()
    {
        $this->object->setFirstName('Вістуна');
        $this->object->setSecondName('Василенко');
        $this->assertEquals('2-Вістуна Василенко', $this->object->genderAutoDetect().'-Вістуна Василенко');
    }
    public function testGenDetect887()
    {
        $this->object->setFirstName('Вітана');
        $this->object->setSecondName('Васильченко');
        $this->assertEquals('2-Вітана Васильченко', $this->object->genderAutoDetect().'-Вітана Васильченко');
    }
    public function testGenDetect888()
    {
        $this->object->setFirstName('Влада');
        $this->object->setSecondName('Васильчук');
        $this->assertEquals('2-Влада Васильчук', $this->object->genderAutoDetect().'-Влада Васильчук');
    }
    public function testGenDetect889()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Васкул');
        $this->assertEquals('2-Владислава Васкул', $this->object->genderAutoDetect().'-Владислава Васкул');
    }
    public function testGenDetect890()
    {
        $this->object->setFirstName('Власта');
        $this->object->setSecondName('Васьковичі');
        $this->assertEquals('2-Власта Васьковичі', $this->object->genderAutoDetect().'-Власта Васьковичі');
    }
    public function testGenDetect891()
    {
        $this->object->setFirstName('Вогнедара');
        $this->object->setSecondName('Вахній');
        $this->assertEquals('2-Вогнедара Вахній', $this->object->genderAutoDetect().'-Вогнедара Вахній');
    }
    public function testGenDetect892()
    {
        $this->object->setFirstName('Вогняна');
        $this->object->setSecondName('Ващенко-Захарченко');
        $this->assertEquals('2-Вогняна Ващенко-Захарченко', $this->object->genderAutoDetect().'-Вогняна Ващенко-Захарченко');
    }
    public function testGenDetect893()
    {
        $this->object->setFirstName('Волелюба');
        $this->object->setSecondName('Вдовиченко');
        $this->assertEquals('2-Волелюба Вдовиченко', $this->object->genderAutoDetect().'-Волелюба Вдовиченко');
    }
    public function testGenDetect894()
    {
        $this->object->setFirstName('Володимира');
        $this->object->setSecondName('Величко');
        $this->assertEquals('2-Володимира Величко', $this->object->genderAutoDetect().'-Володимира Величко');
    }
    public function testGenDetect895()
    {
        $this->object->setFirstName('Волошка');
        $this->object->setSecondName('Величковські');
        $this->assertEquals('2-Волошка Величковські', $this->object->genderAutoDetect().'-Волошка Величковські');
    }
    public function testGenDetect896()
    {
        $this->object->setFirstName('Воля');
        $this->object->setSecondName('Вертипорох');
        $this->assertEquals('2-Воля Вертипорох', $this->object->genderAutoDetect().'-Воля Вертипорох');
    }
    public function testGenDetect897()
    {
        $this->object->setFirstName('Всеволода');
        $this->object->setSecondName('Верхола');
        $this->assertEquals('2-Всеволода Верхола', $this->object->genderAutoDetect().'-Всеволода Верхола');
    }
    public function testGenDetect898()
    {
        $this->object->setFirstName('Вселюба');
        $this->object->setSecondName('Винокур');
        $this->assertEquals('2-Вселюба Винокур', $this->object->genderAutoDetect().'-Вселюба Винокур');
    }
    public function testGenDetect899()
    {
        $this->object->setFirstName('Всемира');
        $this->object->setSecondName('Висоцькі');
        $this->assertEquals('2-Всемира Висоцькі', $this->object->genderAutoDetect().'-Всемира Висоцькі');
    }
    public function testGenDetect900()
    {
        $this->object->setFirstName('Всеслава');
        $this->object->setSecondName('Вишневецькі');
        $this->assertEquals('2-Всеслава Вишневецькі', $this->object->genderAutoDetect().'-Всеслава Вишневецькі');
    }
    public function testGenDetect901()
    {
        $this->object->setFirstName('В’ячеслава');
        $this->object->setSecondName('Влох');
        $this->assertEquals('2-В’ячеслава Влох', $this->object->genderAutoDetect().'-В’ячеслава Влох');
    }
    public function testGenDetect902()
    {
        $this->object->setFirstName('Гаїна');
        $this->object->setSecondName('Вобла');
        $this->assertEquals('2-Гаїна Вобла', $this->object->genderAutoDetect().'-Гаїна Вобла');
    }
    public function testGenDetect903()
    {
        $this->object->setFirstName('Гатусила');
        $this->object->setSecondName('Вовк');
        $this->assertEquals('2-Гатусила Вовк', $this->object->genderAutoDetect().'-Гатусила Вовк');
    }
    public function testGenDetect904()
    {
        $this->object->setFirstName('Гарнослава');
        $this->object->setSecondName('Возняк');
        $this->assertEquals('2-Гарнослава Возняк', $this->object->genderAutoDetect().'-Гарнослава Возняк');
    }
    public function testGenDetect905()
    {
        $this->object->setFirstName('Голубка');
        $this->object->setSecondName('Войнаровські');
        $this->assertEquals('2-Голубка Войнаровські', $this->object->genderAutoDetect().'-Голубка Войнаровські');
    }
    public function testGenDetect906()
    {
        $this->object->setFirstName('Горигляда');
        $this->object->setSecondName('Волох');
        $this->assertEquals('2-Горигляда Волох', $this->object->genderAutoDetect().'-Горигляда Волох');
    }
    public function testGenDetect907()
    {
        $this->object->setFirstName('Горислава');
        $this->object->setSecondName('Волощук');
        $this->assertEquals('2-Горислава Волощук', $this->object->genderAutoDetect().'-Горислава Волощук');
    }
    public function testGenDetect908()
    {
        $this->object->setFirstName('Городислава');
        $this->object->setSecondName('Вороновська');
        $this->assertEquals('2-Городислава Вороновська', $this->object->genderAutoDetect().'-Городислава Вороновська');
    }
    public function testGenDetect909()
    {
        $this->object->setFirstName('Гострозора');
        $this->object->setSecondName('Гавриленко');
        $this->assertEquals('2-Гострозора Гавриленко', $this->object->genderAutoDetect().'-Гострозора Гавриленко');
    }
    public function testGenDetect910()
    {
        $this->object->setFirstName('Градислава');
        $this->object->setSecondName('Гаврилюк');
        $this->assertEquals('2-Градислава Гаврилюк', $this->object->genderAutoDetect().'-Градислава Гаврилюк');
    }
    public function testGenDetect911()
    {
        $this->object->setFirstName('Гранислава');
        $this->object->setSecondName('Галенковські');
        $this->assertEquals('2-Гранислава Галенковські', $this->object->genderAutoDetect().'-Гранислава Галенковські');
    }
    public function testGenDetect912()
    {
        $this->object->setFirstName('Гремислава');
        $this->object->setSecondName('Гальченко');
        $this->assertEquals('2-Гремислава Гальченко', $this->object->genderAutoDetect().'-Гремислава Гальченко');
    }
    public function testGenDetect913()
    {
        $this->object->setFirstName('Далібора');
        $this->object->setSecondName('Гамалія');
        $this->assertEquals('2-Далібора Гамалія', $this->object->genderAutoDetect().'-Далібора Гамалія');
    }
    public function testGenDetect914()
    {
        $this->object->setFirstName('Дана');
        $this->object->setSecondName('Ганицька');
        $this->assertEquals('2-Дана Ганицька', $this->object->genderAutoDetect().'-Дана Ганицька');
    }
    public function testGenDetect915()
    {
        $this->object->setFirstName('Дарина');
        $this->object->setSecondName('Гарань');
        $this->assertEquals('2-Дарина Гарань', $this->object->genderAutoDetect().'-Дарина Гарань');
    }
    public function testGenDetect916()
    {
        $this->object->setFirstName('Дзвенимира');
        $this->object->setSecondName('Гармаш');
        $this->assertEquals('2-Дзвенимира Гармаш', $this->object->genderAutoDetect().'-Дзвенимира Гармаш');
    }
    public function testGenDetect917()
    {
        $this->object->setFirstName('Дзвенислава');
        $this->object->setSecondName('Гасай');
        $this->assertEquals('2-Дзвенислава Гасай', $this->object->genderAutoDetect().'-Дзвенислава Гасай');
    }
    public function testGenDetect918()
    {
        $this->object->setFirstName('Дзвінка');
        $this->object->setSecondName('Гасюк');
        $this->assertEquals('2-Дзвінка Гасюк', $this->object->genderAutoDetect().'-Дзвінка Гасюк');
    }
    public function testGenDetect919()
    {
        $this->object->setFirstName('Діяна');
        $this->object->setSecondName('Герасименко');
        $this->assertEquals('2-Діяна Герасименко', $this->object->genderAutoDetect().'-Діяна Герасименко');
    }
    public function testGenDetect920()
    {
        $this->object->setFirstName('Добринка');
        $this->object->setSecondName('Геращенко');
        $this->assertEquals('2-Добринка Геращенко', $this->object->genderAutoDetect().'-Добринка Геращенко');
    }
    public function testGenDetect921()
    {
        $this->object->setFirstName('Добровіста');
        $this->object->setSecondName('Герцик');
        $this->assertEquals('2-Добровіста Герцик', $this->object->genderAutoDetect().'-Добровіста Герцик');
    }
    public function testGenDetect922()
    {
        $this->object->setFirstName('Доброгніва');
        $this->object->setSecondName('Герцики');
        $this->assertEquals('2-Доброгніва Герцики', $this->object->genderAutoDetect().'-Доброгніва Герцики');
    }
    public function testGenDetect923()
    {
        $this->object->setFirstName('Добролюба');
        $this->object->setSecondName('Гладченко');
        $this->assertEquals('2-Добролюба Гладченко', $this->object->genderAutoDetect().'-Добролюба Гладченко');
    }
    public function testGenDetect924()
    {
        $this->object->setFirstName('Добромила');
        $this->object->setSecondName('Глоба');
        $this->assertEquals('2-Добромила Глоба', $this->object->genderAutoDetect().'-Добромила Глоба');
    }
    public function testGenDetect925()
    {
        $this->object->setFirstName('Добромира');
        $this->object->setSecondName('Гнідичі');
        $this->assertEquals('2-Добромира Гнідичі', $this->object->genderAutoDetect().'-Добромира Гнідичі');
    }
    public function testGenDetect926()
    {
        $this->object->setFirstName('Доброніга');
        $this->object->setSecondName('Гнатюк');
        $this->assertEquals('2-Доброніга Гнатюк', $this->object->genderAutoDetect().'-Доброніга Гнатюк');
    }
    public function testGenDetect927()
    {
        $this->object->setFirstName('Доброслава');
        $this->object->setSecondName('Гоголі');
        $this->assertEquals('2-Доброслава Гоголі', $this->object->genderAutoDetect().'-Доброслава Гоголі');
    }
    public function testGenDetect928()
    {
        $this->object->setFirstName('Долина');
        $this->object->setSecondName('Гоголь');
        $this->assertEquals('2-Долина Гоголь', $this->object->genderAutoDetect().'-Долина Гоголь');
    }
    public function testGenDetect929()
    {
        $this->object->setFirstName('Доля');
        $this->object->setSecondName('Годунок');
        $this->assertEquals('2-Доля Годунок', $this->object->genderAutoDetect().'-Доля Годунок');
    }
    public function testGenDetect930()
    {
        $this->object->setFirstName('Домаха');
        $this->object->setSecondName('Головата');
        $this->assertEquals('2-Домаха Головата', $this->object->genderAutoDetect().'-Домаха Головата');
    }
    public function testGenDetect931()
    {
        $this->object->setFirstName('Доморада');
        $this->object->setSecondName('Головко');
        $this->assertEquals('2-Доморада Головко', $this->object->genderAutoDetect().'-Доморада Головко');
    }
    public function testGenDetect932()
    {
        $this->object->setFirstName('Дружелюба');
        $this->object->setSecondName('Голуб');
        $this->assertEquals('2-Дружелюба Голуб', $this->object->genderAutoDetect().'-Дружелюба Голуб');
    }
    public function testGenDetect933()
    {
        $this->object->setFirstName('Жадана');
        $this->object->setSecondName('Голубнича');
        $this->assertEquals('2-Жадана Голубнича', $this->object->genderAutoDetect().'-Жадана Голубнича');
    }
    public function testGenDetect934()
    {
        $this->object->setFirstName('Ждана');
        $this->object->setSecondName('Гольшанські');
        $this->assertEquals('2-Ждана Гольшанські', $this->object->genderAutoDetect().'-Ждана Гольшанські');
    }
    public function testGenDetect935()
    {
        $this->object->setFirstName('Живосила');
        $this->object->setSecondName('Гонта');
        $this->assertEquals('2-Живосила Гонта', $this->object->genderAutoDetect().'-Живосила Гонта');
    }
    public function testGenDetect936()
    {
        $this->object->setFirstName('Живослава');
        $this->object->setSecondName('Гончар');
        $this->assertEquals('2-Живослава Гончар', $this->object->genderAutoDetect().'-Живослава Гончар');
    }
    public function testGenDetect937()
    {
        $this->object->setFirstName('Житомира');
        $this->object->setSecondName('Гончаренко');
        $this->assertEquals('2-Житомира Гончаренко', $this->object->genderAutoDetect().'-Житомира Гончаренко');
    }
    public function testGenDetect938()
    {
        $this->object->setFirstName('Життєлюба');
        $this->object->setSecondName('Горбаль');
        $this->assertEquals('2-Життєлюба Горбаль', $this->object->genderAutoDetect().'-Життєлюба Горбаль');
    }
    public function testGenDetect939()
    {
        $this->object->setFirstName('Забава');
        $this->object->setSecondName('Гордієнко');
        $this->assertEquals('2-Забава Гордієнко', $this->object->genderAutoDetect().'-Забава Гордієнко');
    }
    public function testGenDetect940()
    {
        $this->object->setFirstName('Звенигора');
        $this->object->setSecondName('Гординські');
        $this->assertEquals('2-Звенигора Гординські', $this->object->genderAutoDetect().'-Звенигора Гординські');
    }
    public function testGenDetect941()
    {
        $this->object->setFirstName('Звенислава');
        $this->object->setSecondName('Гошовські');
        $this->assertEquals('2-Звенислава Гошовські', $this->object->genderAutoDetect().'-Звенислава Гошовські');
    }
    public function testGenDetect942()
    {
        $this->object->setFirstName('Звонимира');
        $this->object->setSecondName('Гошовська');
        $this->assertEquals('2-Звонимира Гошовська', $this->object->genderAutoDetect().'-Звонимира Гошовська');
    }
    public function testGenDetect943()
    {
        $this->object->setFirstName('Зірка');
        $this->object->setSecondName('Грінченко');
        $this->assertEquals('2-Зірка Грінченко', $this->object->genderAutoDetect().'-Зірка Грінченко');
    }
    public function testGenDetect944()
    {
        $this->object->setFirstName('Злата');
        $this->object->setSecondName('Грабович');
        $this->assertEquals('2-Злата Грабович', $this->object->genderAutoDetect().'-Злата Грабович');
    }
    public function testGenDetect945()
    {
        $this->object->setFirstName('Златомира');
        $this->object->setSecondName('Грабовська');
        $this->assertEquals('2-Златомира Грабовська', $this->object->genderAutoDetect().'-Златомира Грабовська');
    }
    public function testGenDetect946()
    {
        $this->object->setFirstName('Златоуста');
        $this->object->setSecondName('Григоренко');
        $this->assertEquals('2-Златоуста Григоренко', $this->object->genderAutoDetect().'-Златоуста Григоренко');
    }
    public function testGenDetect947()
    {
        $this->object->setFirstName('Золотодана');
        $this->object->setSecondName('Григорович');
        $this->assertEquals('2-Золотодана Григорович', $this->object->genderAutoDetect().'-Золотодана Григорович');
    }
    public function testGenDetect948()
    {
        $this->object->setFirstName('Зорегляда');
        $this->object->setSecondName('Григорович-Барська');
        $this->assertEquals('2-Зорегляда Григорович-Барська', $this->object->genderAutoDetect().'-Зорегляда Григорович-Барська');
    }
    public function testGenDetect949()
    {
        $this->object->setFirstName('Зореслава');
        $this->object->setSecondName('Григорчук');
        $this->assertEquals('2-Зореслава Григорчук', $this->object->genderAutoDetect().'-Зореслава Григорчук');
    }
    public function testGenDetect950()
    {
        $this->object->setFirstName('Зорина');
        $this->object->setSecondName('Грицак');
        $this->assertEquals('2-Зорина Грицак', $this->object->genderAutoDetect().'-Зорина Грицак');
    }
    public function testGenDetect951()
    {
        $this->object->setFirstName('Зоря');
        $this->object->setSecondName('Гриценко');
        $this->assertEquals('2-Зоря Гриценко', $this->object->genderAutoDetect().'-Зоря Гриценко');
    }
    public function testGenDetect952()
    {
        $this->object->setFirstName('Зоряна');
        $this->object->setSecondName('Гришко');
        $this->assertEquals('2-Зоряна Гришко', $this->object->genderAutoDetect().'-Зоряна Гришко');
    }
    public function testGenDetect953()
    {
        $this->object->setFirstName('Казка');
        $this->object->setSecondName('Громики');
        $this->assertEquals('2-Казка Громики', $this->object->genderAutoDetect().'-Казка Громики');
    }
    public function testGenDetect954()
    {
        $this->object->setFirstName('Калина');
        $this->object->setSecondName('Гудзій');
        $this->assertEquals('2-Калина Гудзій', $this->object->genderAutoDetect().'-Калина Гудзій');
    }
    public function testGenDetect955()
    {
        $this->object->setFirstName('Квітка');
        $this->object->setSecondName('Гудзь');
        $this->assertEquals('2-Квітка Гудзь', $this->object->genderAutoDetect().'-Квітка Гудзь');
    }
    public function testGenDetect956()
    {
        $this->object->setFirstName('Колодара');
        $this->object->setSecondName('Гуменюк');
        $this->assertEquals('2-Колодара Гуменюк', $this->object->genderAutoDetect().'-Колодара Гуменюк');
    }
    public function testGenDetect957()
    {
        $this->object->setFirstName('Красава');
        $this->object->setSecondName('Гунько');
        $this->assertEquals('2-Красава Гунько', $this->object->genderAutoDetect().'-Красава Гунько');
    }
    public function testGenDetect958()
    {
        $this->object->setFirstName('Красимира');
        $this->object->setSecondName('Діденко');
        $this->assertEquals('2-Красимира Діденко', $this->object->genderAutoDetect().'-Красимира Діденко');
    }
    public function testGenDetect959()
    {
        $this->object->setFirstName('Красновида');
        $this->object->setSecondName('Даниленко');
        $this->assertEquals('2-Красновида Даниленко', $this->object->genderAutoDetect().'-Красновида Даниленко');
    }
    public function testGenDetect960()
    {
        $this->object->setFirstName('Краснолика');
        $this->object->setSecondName('Данькевич');
        $this->assertEquals('2-Краснолика Данькевич', $this->object->genderAutoDetect().'-Краснолика Данькевич');
    }
    public function testGenDetect961()
    {
        $this->object->setFirstName('Красуня');
        $this->object->setSecondName('Дараган');
        $this->assertEquals('2-Красуня Дараган', $this->object->genderAutoDetect().'-Красуня Дараган');
    }
    public function testGenDetect962()
    {
        $this->object->setFirstName('Купава');
        $this->object->setSecondName('Дашкевич');
        $this->assertEquals('2-Купава Дашкевич', $this->object->genderAutoDetect().'-Купава Дашкевич');
    }
    public function testGenDetect963()
    {
        $this->object->setFirstName('Лада');
        $this->object->setSecondName('Денисенко');
        $this->assertEquals('2-Лада Денисенко', $this->object->genderAutoDetect().'-Лада Денисенко');
    }
    public function testGenDetect964()
    {
        $this->object->setFirstName('Ладислава');
        $this->object->setSecondName('Джус');
        $this->assertEquals('2-Ладислава Джус', $this->object->genderAutoDetect().'-Ладислава Джус');
    }
    public function testGenDetect965()
    {
        $this->object->setFirstName('Ладомила');
        $this->object->setSecondName('Дзюба');
        $this->assertEquals('2-Ладомила Дзюба', $this->object->genderAutoDetect().'-Ладомила Дзюба');
    }
    public function testGenDetect966()
    {
        $this->object->setFirstName('Ладомира');
        $this->object->setSecondName('Дикань');
        $this->assertEquals('2-Ладомира Дикань', $this->object->genderAutoDetect().'-Ладомира Дикань');
    }
    public function testGenDetect967()
    {
        $this->object->setFirstName('Левина');
        $this->object->setSecondName('Дмитерко');
        $this->assertEquals('2-Левина Дмитерко', $this->object->genderAutoDetect().'-Левина Дмитерко');
    }
    public function testGenDetect968()
    {
        $this->object->setFirstName('Лель');
        $this->object->setSecondName('Довженко');
        $this->assertEquals('2-Лель Довженко', $this->object->genderAutoDetect().'-Лель Довженко');
    }
    public function testGenDetect969()
    {
        $this->object->setFirstName('Леля');
        $this->object->setSecondName('Домонтовичі');
        $this->assertEquals('2-Леля Домонтовичі', $this->object->genderAutoDetect().'-Леля Домонтовичі');
    }
    public function testGenDetect970()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Дорош');
        $this->assertEquals('2-Леся Дорош', $this->object->genderAutoDetect().'-Леся Дорош');
    }
    public function testGenDetect971()
    {
        $this->object->setFirstName('Либідь');
        $this->object->setSecondName('Дорошенко');
        $this->assertEquals('2-Либідь Дорошенко', $this->object->genderAutoDetect().'-Либідь Дорошенко');
    }
    public function testGenDetect972()
    {
        $this->object->setFirstName('Лілея');
        $this->object->setSecondName('Доценко');
        $this->assertEquals('2-Лілея Доценко', $this->object->genderAutoDetect().'-Лілея Доценко');
    }
    public function testGenDetect973()
    {
        $this->object->setFirstName('Лоліта');
        $this->object->setSecondName('Дочинець');
        $this->assertEquals('2-Лоліта Дочинець', $this->object->genderAutoDetect().'-Лоліта Дочинець');
    }
    public function testGenDetect974()
    {
        $this->object->setFirstName('Любава');
        $this->object->setSecondName('Драгоманови');
        $this->assertEquals('2-Любава Драгоманови', $this->object->genderAutoDetect().'-Любава Драгоманови');
    }
    public function testGenDetect975()
    {
        $this->object->setFirstName('Любаня');
        $this->object->setSecondName('Дудко');
        $this->assertEquals('2-Любаня Дудко', $this->object->genderAutoDetect().'-Любаня Дудко');
    }
    public function testGenDetect976()
    {
        $this->object->setFirstName('Любислава');
        $this->object->setSecondName('Дунін-Борковські');
        $this->assertEquals('2-Любислава Дунін-Борковські', $this->object->genderAutoDetect().'-Любислава Дунін-Борковські');
    }
    public function testGenDetect977()
    {
        $this->object->setFirstName('Любов');
        $this->object->setSecondName('Дяченко');
        $this->assertEquals('2-Любов Дяченко', $this->object->genderAutoDetect().'-Любов Дяченко');
    }
    public function testGenDetect978()
    {
        $this->object->setFirstName('Любомила');
        $this->object->setSecondName('Ейбоженко');
        $this->assertEquals('2-Любомила Ейбоженко', $this->object->genderAutoDetect().'-Любомила Ейбоженко');
    }
    public function testGenDetect979()
    {
        $this->object->setFirstName('Любомира');
        $this->object->setSecondName('Жайворон');
        $this->assertEquals('2-Любомира Жайворон', $this->object->genderAutoDetect().'-Любомира Жайворон');
    }
    public function testGenDetect980()
    {
        $this->object->setFirstName('Люборада');
        $this->object->setSecondName('Жаліло');
        $this->assertEquals('2-Люборада Жаліло', $this->object->genderAutoDetect().'-Люборада Жаліло');
    }
    public function testGenDetect981()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setSecondName('Ждановичі');
        $this->assertEquals('2-Людмила Ждановичі', $this->object->genderAutoDetect().'-Людмила Ждановичі');
    }
    public function testGenDetect982()
    {
        $this->object->setFirstName('Людомила');
        $this->object->setSecondName('Жежерін');
        $this->assertEquals('2-Людомила Жежерін', $this->object->genderAutoDetect().'-Людомила Жежерін');
    }
    public function testGenDetect983()
    {
        $this->object->setFirstName('Любослава');
        $this->object->setSecondName('Желєзняк');
        $this->assertEquals('2-Любослава Желєзняк', $this->object->genderAutoDetect().'-Любослава Желєзняк');
    }
    public function testGenDetect984()
    {
        $this->object->setFirstName('Льоля');
        $this->object->setSecondName('Железняк');
        $this->assertEquals('2-Льоля Железняк', $this->object->genderAutoDetect().'-Льоля Железняк');
    }
    public function testGenDetect985()
    {
        $this->object->setFirstName('Мавка');
        $this->object->setSecondName('Жилко');
        $this->assertEquals('2-Мавка Жилко', $this->object->genderAutoDetect().'-Мавка Жилко');
    }
    public function testGenDetect986()
    {
        $this->object->setFirstName('Магадара');
        $this->object->setSecondName('Жирко');
        $this->assertEquals('2-Магадара Жирко', $this->object->genderAutoDetect().'-Магадара Жирко');
    }
    public function testGenDetect987()
    {
        $this->object->setFirstName('Маїна');
        $this->object->setSecondName('Жук');
        $this->assertEquals('2-Маїна Жук', $this->object->genderAutoDetect().'-Маїна Жук');
    }
    public function testGenDetect988()
    {
        $this->object->setFirstName('Маківка');
        $this->object->setSecondName('Жупанська');
        $this->assertEquals('2-Маківка Жупанська', $this->object->genderAutoDetect().'-Маківка Жупанська');
    }
    public function testGenDetect989()
    {
        $this->object->setFirstName('Малуня');
        $this->object->setSecondName('Жураківські');
        $this->assertEquals('2-Малуня Жураківські', $this->object->genderAutoDetect().'-Малуня Жураківські');
    }
    public function testGenDetect990()
    {
        $this->object->setFirstName('Малуша');
        $this->object->setSecondName('Заєць');
        $this->assertEquals('2-Малуша Заєць', $this->object->genderAutoDetect().'-Малуша Заєць');
    }
    public function testGenDetect991()
    {
        $this->object->setFirstName('Мальва');
        $this->object->setSecondName('Забашта');
        $this->assertEquals('2-Мальва Забашта', $this->object->genderAutoDetect().'-Мальва Забашта');
    }
    public function testGenDetect992()
    {
        $this->object->setFirstName('Марута');
        $this->object->setSecondName('Заболотна');
        $this->assertEquals('2-Марута Заболотна', $this->object->genderAutoDetect().'-Марута Заболотна');
    }
    public function testGenDetect993()
    {
        $this->object->setFirstName('Мая');
        $this->object->setSecondName('Завальнюк');
        $this->assertEquals('2-Мая Завальнюк', $this->object->genderAutoDetect().'-Мая Завальнюк');
    }
    public function testGenDetect994()
    {
        $this->object->setFirstName('Медорада');
        $this->object->setSecondName('Закревські');
        $this->assertEquals('2-Медорада Закревські', $this->object->genderAutoDetect().'-Медорада Закревські');
    }
    public function testGenDetect995()
    {
        $this->object->setFirstName('Мечислава');
        $this->object->setSecondName('Закусило');
        $this->assertEquals('2-Мечислава Закусило', $this->object->genderAutoDetect().'-Мечислава Закусило');
    }
    public function testGenDetect996()
    {
        $this->object->setFirstName('Милана');
        $this->object->setSecondName('Залізняк');
        $this->assertEquals('2-Милана Залізняк', $this->object->genderAutoDetect().'-Милана Залізняк');
    }
    public function testGenDetect997()
    {
        $this->object->setFirstName('Милована');
        $this->object->setSecondName('Заруба');
        $this->assertEquals('2-Милована Заруба', $this->object->genderAutoDetect().'-Милована Заруба');
    }
    public function testGenDetect998()
    {
        $this->object->setFirstName('Миловида');
        $this->object->setSecondName('Засядько');
        $this->assertEquals('2-Миловида Засядько', $this->object->genderAutoDetect().'-Миловида Засядько');
    }
    public function testGenDetect999()
    {
        $this->object->setFirstName('Милодара');
        $this->object->setSecondName('Захаренко');
        $this->assertEquals('2-Милодара Захаренко', $this->object->genderAutoDetect().'-Милодара Захаренко');
    }
    public function testGenDetect1000()
    {
        $this->object->setFirstName('Милослава');
        $this->object->setSecondName('Захарчук');
        $this->assertEquals('2-Милослава Захарчук', $this->object->genderAutoDetect().'-Милослава Захарчук');
    }
    public function testGenDetect1001()
    {
        $this->object->setFirstName('Мирана');
        $this->object->setSecondName('Заяць');
        $this->assertEquals('2-Мирана Заяць', $this->object->genderAutoDetect().'-Мирана Заяць');
    }
    public function testGenDetect1002()
    {
        $this->object->setFirstName('Миробога');
        $this->object->setSecondName('Заячківська');
        $this->assertEquals('2-Миробога Заячківська', $this->object->genderAutoDetect().'-Миробога Заячківська');
    }
    public function testGenDetect1003()
    {
        $this->object->setFirstName('Миролюба');
        $this->object->setSecondName('Збаразькі');
        $this->assertEquals('2-Миролюба Збаразькі', $this->object->genderAutoDetect().'-Миролюба Збаразькі');
    }
    public function testGenDetect1004()
    {
        $this->object->setFirstName('Мирослава');
        $this->object->setSecondName('Зленко');
        $this->assertEquals('2-Мирослава Зленко', $this->object->genderAutoDetect().'-Мирослава Зленко');
    }
    public function testGenDetect1005()
    {
        $this->object->setFirstName('Млада');
        $this->object->setSecondName('Значко-Яворські');
        $this->assertEquals('2-Млада Значко-Яворські', $this->object->genderAutoDetect().'-Млада Значко-Яворські');
    }
    public function testGenDetect1006()
    {
        $this->object->setFirstName('Мокрина');
        $this->object->setSecondName('Золотаренко');
        $this->assertEquals('2-Мокрина Золотаренко', $this->object->genderAutoDetect().'-Мокрина Золотаренко');
    }
    public function testGenDetect1007()
    {
        $this->object->setFirstName('Мстислава');
        $this->object->setSecondName('Кабачок');
        $this->assertEquals('2-Мстислава Кабачок', $this->object->genderAutoDetect().'-Мстислава Кабачок');
    }
    public function testGenDetect1008()
    {
        $this->object->setFirstName('Мудролюба');
        $this->object->setSecondName('Каганець');
        $this->assertEquals('2-Мудролюба Каганець', $this->object->genderAutoDetect().'-Мудролюба Каганець');
    }
    public function testGenDetect1009()
    {
        $this->object->setFirstName('Надія');
        $this->object->setSecondName('Калашники');
        $this->assertEquals('2-Надія Калашники', $this->object->genderAutoDetect().'-Надія Калашники');
    }
    public function testGenDetect1010()
    {
        $this->object->setFirstName('Найда');
        $this->object->setSecondName('Калинович');
        $this->assertEquals('2-Найда Калинович', $this->object->genderAutoDetect().'-Найда Калинович');
    }
    public function testGenDetect1011()
    {
        $this->object->setFirstName('Найдена');
        $this->object->setSecondName('Кандиби');
        $this->assertEquals('2-Найдена Кандиби', $this->object->genderAutoDetect().'-Найдена Кандиби');
    }
    public function testGenDetect1012()
    {
        $this->object->setFirstName('Наслава');
        $this->object->setSecondName('Карашевичі');
        $this->assertEquals('2-Наслава Карашевичі', $this->object->genderAutoDetect().'-Наслава Карашевичі');
    }
    public function testGenDetect1013()
    {
        $this->object->setFirstName('Немира');
        $this->object->setSecondName('Кармалюк');
        $this->assertEquals('2-Немира Кармалюк', $this->object->genderAutoDetect().'-Немира Кармалюк');
    }
    public function testGenDetect1014()
    {
        $this->object->setFirstName('Нігослава');
        $this->object->setSecondName('Карпенко');
        $this->assertEquals('2-Нігослава Карпенко', $this->object->genderAutoDetect().'-Нігослава Карпенко');
    }
    public function testGenDetect1015()
    {
        $this->object->setFirstName('Незабудка');
        $this->object->setSecondName('Кириленко');
        $this->assertEquals('2-Незабудка Кириленко', $this->object->genderAutoDetect().'-Незабудка Кириленко');
    }
    public function testGenDetect1016()
    {
        $this->object->setFirstName('Огняна');
        $this->object->setSecondName('Кисилі');
        $this->assertEquals('2-Огняна Кисилі', $this->object->genderAutoDetect().'-Огняна Кисилі');
    }
    public function testGenDetect1017()
    {
        $this->object->setFirstName('Оримира');
        $this->object->setSecondName('Китаста');
        $this->assertEquals('2-Оримира Китаста', $this->object->genderAutoDetect().'-Оримира Китаста');
    }
    public function testGenDetect1018()
    {
        $this->object->setFirstName('Орина');
        $this->object->setSecondName('Кицай');
        $this->assertEquals('2-Орина Кицай', $this->object->genderAutoDetect().'-Орина Кицай');
    }
    public function testGenDetect1019()
    {
        $this->object->setFirstName('Орислава');
        $this->object->setSecondName('Клименко');
        $this->assertEquals('2-Орислава Клименко', $this->object->genderAutoDetect().'-Орислава Клименко');
    }
    public function testGenDetect1020()
    {
        $this->object->setFirstName('Орися');
        $this->object->setSecondName('Климчук');
        $this->assertEquals('2-Орися Климчук', $this->object->genderAutoDetect().'-Орися Климчук');
    }
    public function testGenDetect1021()
    {
        $this->object->setFirstName('Оріяна');
        $this->object->setSecondName('Кмета');
        $this->assertEquals('2-Оріяна Кмета', $this->object->genderAutoDetect().'-Оріяна Кмета');
    }
    public function testGenDetect1022()
    {
        $this->object->setFirstName('Орогоста');
        $this->object->setSecondName('Книш');
        $this->assertEquals('2-Орогоста Книш', $this->object->genderAutoDetect().'-Орогоста Книш');
    }
    public function testGenDetect1023()
    {
        $this->object->setFirstName('Острозора');
        $this->object->setSecondName('Коваленко');
        $this->assertEquals('2-Острозора Коваленко', $this->object->genderAutoDetect().'-Острозора Коваленко');
    }
    public function testGenDetect1024()
    {
        $this->object->setFirstName('Остромира');
        $this->object->setSecondName('Коваль');
        $this->assertEquals('2-Остромира Коваль', $this->object->genderAutoDetect().'-Остромира Коваль');
    }
    public function testGenDetect1025()
    {
        $this->object->setFirstName('Осмомисла');
        $this->object->setSecondName('Ковальчик');
        $this->assertEquals('2-Осмомисла Ковальчик', $this->object->genderAutoDetect().'-Осмомисла Ковальчик');
    }
    public function testGenDetect1026()
    {
        $this->object->setFirstName('Остромова');
        $this->object->setSecondName('Ковальчук');
        $this->assertEquals('2-Остромова Ковальчук', $this->object->genderAutoDetect().'-Остромова Ковальчук');
    }
    public function testGenDetect1027()
    {
        $this->object->setFirstName('Пава');
        $this->object->setSecondName('Кованько');
        $this->assertEquals('2-Пава Кованько', $this->object->genderAutoDetect().'-Пава Кованько');
    }
    public function testGenDetect1028()
    {
        $this->object->setFirstName('Палажка');
        $this->object->setSecondName('Ковтун');
        $this->assertEquals('2-Палажка Ковтун', $this->object->genderAutoDetect().'-Палажка Ковтун');
    }
    public function testGenDetect1029()
    {
        $this->object->setFirstName('Палазга');
        $this->object->setSecondName('Козаченко');
        $this->assertEquals('2-Палазга Козаченко', $this->object->genderAutoDetect().'-Палазга Козаченко');
    }
    public function testGenDetect1030()
    {
        $this->object->setFirstName('Перелюба');
        $this->object->setSecondName('Козачинська');
        $this->assertEquals('2-Перелюба Козачинська', $this->object->genderAutoDetect().'-Перелюба Козачинська');
    }
    public function testGenDetect1031()
    {
        $this->object->setFirstName('Перемила');
        $this->object->setSecondName('Козачок');
        $this->assertEquals('2-Перемила Козачок', $this->object->genderAutoDetect().'-Перемила Козачок');
    }
    public function testGenDetect1032()
    {
        $this->object->setFirstName('Перемисла');
        $this->object->setSecondName('Козубенко');
        $this->assertEquals('2-Перемисла Козубенко', $this->object->genderAutoDetect().'-Перемисла Козубенко');
    }
    public function testGenDetect1033()
    {
        $this->object->setFirstName('Півонія');
        $this->object->setSecondName('Колесник');
        $this->assertEquals('2-Півонія Колесник', $this->object->genderAutoDetect().'-Півонія Колесник');
    }
    public function testGenDetect1034()
    {
        $this->object->setFirstName('Позвізда');
        $this->object->setSecondName('Колодій');
        $this->assertEquals('2-Позвізда Колодій', $this->object->genderAutoDetect().'-Позвізда Колодій');
    }
    public function testGenDetect1035()
    {
        $this->object->setFirstName('Полеза');
        $this->object->setSecondName('Колодна');
        $this->assertEquals('2-Полеза Колодна', $this->object->genderAutoDetect().'-Полеза Колодна');
    }
    public function testGenDetect1036()
    {
        $this->object->setFirstName('Поляна');
        $this->object->setSecondName('Коломієць');
        $this->assertEquals('2-Поляна Коломієць', $this->object->genderAutoDetect().'-Поляна Коломієць');
    }
    public function testGenDetect1037()
    {
        $this->object->setFirstName('Потішана');
        $this->object->setSecondName('Комар');
        $this->assertEquals('2-Потішана Комар', $this->object->genderAutoDetect().'-Потішана Комар');
    }
    public function testGenDetect1038()
    {
        $this->object->setFirstName('Предслава');
        $this->object->setSecondName('Кондратюк');
        $this->assertEquals('2-Предслава Кондратюк', $this->object->genderAutoDetect().'-Предслава Кондратюк');
    }
    public function testGenDetect1039()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Кониські');
        $this->assertEquals('2-Рада Кониські', $this->object->genderAutoDetect().'-Рада Кониські');
    }
    public function testGenDetect1040()
    {
        $this->object->setFirstName('Радана');
        $this->object->setSecondName('Корецька');
        $this->assertEquals('2-Радана Корецька', $this->object->genderAutoDetect().'-Радана Корецька');
    }
    public function testGenDetect1041()
    {
        $this->object->setFirstName('Радимира');
        $this->object->setSecondName('Корж');
        $this->assertEquals('2-Радимира Корж', $this->object->genderAutoDetect().'-Радимира Корж');
    }
    public function testGenDetect1042()
    {
        $this->object->setFirstName('Радогоста');
        $this->object->setSecondName('Корнійчук');
        $this->assertEquals('2-Радогоста Корнійчук', $this->object->genderAutoDetect().'-Радогоста Корнійчук');
    }
    public function testGenDetect1043()
    {
        $this->object->setFirstName('Радомира');
        $this->object->setSecondName('Коробка');
        $this->assertEquals('2-Радомира Коробка', $this->object->genderAutoDetect().'-Радомира Коробка');
    }
    public function testGenDetect1044()
    {
        $this->object->setFirstName('Радослава');
        $this->object->setSecondName('Королюк');
        $this->assertEquals('2-Радослава Королюк', $this->object->genderAutoDetect().'-Радослава Королюк');
    }
    public function testGenDetect1045()
    {
        $this->object->setFirstName('Рідна');
        $this->object->setSecondName('Короткевич');
        $this->assertEquals('2-Рідна Короткевич', $this->object->genderAutoDetect().'-Рідна Короткевич');
    }
    public function testGenDetect1046()
    {
        $this->object->setFirstName('Рогволода');
        $this->object->setSecondName('Корпанюк');
        $this->assertEquals('2-Рогволода Корпанюк', $this->object->genderAutoDetect().'-Рогволода Корпанюк');
    }
    public function testGenDetect1047()
    {
        $this->object->setFirstName('Рогніда');
        $this->object->setSecondName('Корчак');
        $this->assertEquals('2-Рогніда Корчак', $this->object->genderAutoDetect().'-Рогніда Корчак');
    }
    public function testGenDetect1048()
    {
        $this->object->setFirstName('Родослава');
        $this->object->setSecondName('Корчинська');
        $this->assertEquals('2-Родослава Корчинська', $this->object->genderAutoDetect().'-Родослава Корчинська');
    }
    public function testGenDetect1049()
    {
        $this->object->setFirstName('Рожана');
        $this->object->setSecondName('Косенко');
        $this->assertEquals('2-Рожана Косенко', $this->object->genderAutoDetect().'-Рожана Косенко');
    }
    public function testGenDetect1050()
    {
        $this->object->setFirstName('Роксолана');
        $this->object->setSecondName('Костенко');
        $this->assertEquals('2-Роксолана Костенко', $this->object->genderAutoDetect().'-Роксолана Костенко');
    }
    public function testGenDetect1051()
    {
        $this->object->setFirstName('Ромашка');
        $this->object->setSecondName('Коструба');
        $this->assertEquals('2-Ромашка Коструба', $this->object->genderAutoDetect().'-Ромашка Коструба');
    }
    public function testGenDetect1052()
    {
        $this->object->setFirstName('Росава');
        $this->object->setSecondName('Костюк');
        $this->assertEquals('2-Росава Костюк', $this->object->genderAutoDetect().'-Росава Костюк');
    }
    public function testGenDetect1053()
    {
        $this->object->setFirstName('Росина');
        $this->object->setSecondName('Котляр');
        $this->assertEquals('2-Росина Котляр', $this->object->genderAutoDetect().'-Росина Котляр');
    }
    public function testGenDetect1054()
    {
        $this->object->setFirstName('Ростислава');
        $this->object->setSecondName('Котляревська');
        $this->assertEquals('2-Ростислава Котляревська', $this->object->genderAutoDetect().'-Ростислава Котляревська');
    }
    public function testGenDetect1055()
    {
        $this->object->setFirstName('Ростичара');
        $this->object->setSecondName('Кравченко');
        $this->assertEquals('2-Ростичара Кравченко', $this->object->genderAutoDetect().'-Ростичара Кравченко');
    }
    public function testGenDetect1056()
    {
        $this->object->setFirstName('Ростуня');
        $this->object->setSecondName('Кравчук');
        $this->assertEquals('2-Ростуня Кравчук', $this->object->genderAutoDetect().'-Ростуня Кравчук');
    }
    public function testGenDetect1057()
    {
        $this->object->setFirstName('Рудана');
        $this->object->setSecondName('Красовська');
        $this->assertEquals('2-Рудана Красовська', $this->object->genderAutoDetect().'-Рудана Красовська');
    }
    public function testGenDetect1058()
    {
        $this->object->setFirstName('Ружа');
        $this->object->setSecondName('Криворучко');
        $this->assertEquals('2-Ружа Криворучко', $this->object->genderAutoDetect().'-Ружа Криворучко');
    }
    public function testGenDetect1059()
    {
        $this->object->setFirstName('Русана');
        $this->object->setSecondName('Крикуненко');
        $this->assertEquals('2-Русана Крикуненко', $this->object->genderAutoDetect().'-Русана Крикуненко');
    }
    public function testGenDetect1060()
    {
        $this->object->setFirstName('Русудана');
        $this->object->setSecondName('Крупські');
        $this->assertEquals('2-Русудана Крупські', $this->object->genderAutoDetect().'-Русудана Крупські');
    }
    public function testGenDetect1061()
    {
        $this->object->setFirstName('Русява');
        $this->object->setSecondName('Кузьмінська');
        $this->assertEquals('2-Русява Кузьмінська', $this->object->genderAutoDetect().'-Русява Кузьмінська');
    }
    public function testGenDetect1062()
    {
        $this->object->setFirstName('Русявка');
        $this->object->setSecondName('Кулиняк');
        $this->assertEquals('2-Русявка Кулиняк', $this->object->genderAutoDetect().'-Русявка Кулиняк');
    }
    public function testGenDetect1063()
    {
        $this->object->setFirstName('Рута');
        $this->object->setSecondName('Кульчицька');
        $this->assertEquals('2-Рута Кульчицька', $this->object->genderAutoDetect().'-Рута Кульчицька');
    }
    public function testGenDetect1064()
    {
        $this->object->setFirstName('Світана');
        $this->object->setSecondName('Купчинська');
        $this->assertEquals('2-Світана Купчинська', $this->object->genderAutoDetect().'-Світана Купчинська');
    }
    public function testGenDetect1065()
    {
        $this->object->setFirstName('Світлана');
        $this->object->setSecondName('Курцевичі');
        $this->assertEquals('2-Світлана Курцевичі', $this->object->genderAutoDetect().'-Світлана Курцевичі');
    }
    public function testGenDetect1066()
    {
        $this->object->setFirstName('Світовида');
        $this->object->setSecondName('Кухаренко');
        $this->assertEquals('2-Світовида Кухаренко', $this->object->genderAutoDetect().'-Світовида Кухаренко');
    }
    public function testGenDetect1067()
    {
        $this->object->setFirstName('Світогора');
        $this->object->setSecondName('Куц');
        $this->assertEquals('2-Світогора Куц', $this->object->genderAutoDetect().'-Світогора Куц');
    }
    public function testGenDetect1068()
    {
        $this->object->setFirstName('Світодара');
        $this->object->setSecondName('Куценко');
        $this->assertEquals('2-Світодара Куценко', $this->object->genderAutoDetect().'-Світодара Куценко');
    }
    public function testGenDetect1069()
    {
        $this->object->setFirstName('Світозара');
        $this->object->setSecondName('Кучер');
        $this->assertEquals('2-Світозара Кучер', $this->object->genderAutoDetect().'-Світозара Кучер');
    }
    public function testGenDetect1070()
    {
        $this->object->setFirstName('Світолика');
        $this->object->setSecondName('Кучеренко');
        $this->assertEquals('2-Світолика Кучеренко', $this->object->genderAutoDetect().'-Світолика Кучеренко');
    }
    public function testGenDetect1071()
    {
        $this->object->setFirstName('Світолюба');
        $this->object->setSecondName('Кушнір');
        $this->assertEquals('2-Світолюба Кушнір', $this->object->genderAutoDetect().'-Світолюба Кушнір');
    }
    public function testGenDetect1072()
    {
        $this->object->setFirstName('Світослава');
        $this->object->setSecondName('Лаба');
        $this->assertEquals('2-Світослава Лаба', $this->object->genderAutoDetect().'-Світослава Лаба');
    }
    public function testGenDetect1073()
    {
        $this->object->setFirstName('Світояра');
        $this->object->setSecondName('Лаврін');
        $this->assertEquals('2-Світояра Лаврін', $this->object->genderAutoDetect().'-Світояра Лаврін');
    }
    public function testGenDetect1074()
    {
        $this->object->setFirstName('Свободана');
        $this->object->setSecondName('Лаврик');
        $this->assertEquals('2-Свободана Лаврик', $this->object->genderAutoDetect().'-Свободана Лаврик');
    }
    public function testGenDetect1075()
    {
        $this->object->setFirstName('Святогора');
        $this->object->setSecondName('Лавриненко');
        $this->assertEquals('2-Святогора Лавриненко', $this->object->genderAutoDetect().'-Святогора Лавриненко');
    }
    public function testGenDetect1076()
    {
        $this->object->setFirstName('Святолюба');
        $this->object->setSecondName('Лазаревські');
        $this->assertEquals('2-Святолюба Лазаревські', $this->object->genderAutoDetect().'-Святолюба Лазаревські');
    }
    public function testGenDetect1077()
    {
        $this->object->setFirstName('Святослава');
        $this->object->setSecondName('Лазарчук');
        $this->assertEquals('2-Святослава Лазарчук', $this->object->genderAutoDetect().'-Святослава Лазарчук');
    }
    public function testGenDetect1078()
    {
        $this->object->setFirstName('Силата');
        $this->object->setSecondName('Лазорко');
        $this->assertEquals('2-Силата Лазорко', $this->object->genderAutoDetect().'-Силата Лазорко');
    }
    public function testGenDetect1079()
    {
        $this->object->setFirstName('Силолюба');
        $this->object->setSecondName('Лашкевичі');
        $this->assertEquals('2-Силолюба Лашкевичі', $this->object->genderAutoDetect().'-Силолюба Лашкевичі');
    }
    public function testGenDetect1080()
    {
        $this->object->setFirstName('Силослава');
        $this->object->setSecondName('Левицька');
        $this->assertEquals('2-Силослава Левицька', $this->object->genderAutoDetect().'-Силослава Левицька');
    }
    public function testGenDetect1081()
    {
        $this->object->setFirstName('Синезора');
        $this->object->setSecondName('Левковські');
        $this->assertEquals('2-Синезора Левковські', $this->object->genderAutoDetect().'-Синезора Левковські');
    }
    public function testGenDetect1082()
    {
        $this->object->setFirstName('Синьоока');
        $this->object->setSecondName('Левченко');
        $this->assertEquals('2-Синьоока Левченко', $this->object->genderAutoDetect().'-Синьоока Левченко');
    }
    public function testGenDetect1083()
    {
        $this->object->setFirstName('Сіверина');
        $this->object->setSecondName('Леонтовичі');
        $this->assertEquals('2-Сіверина Леонтовичі', $this->object->genderAutoDetect().'-Сіверина Леонтовичі');
    }
    public function testGenDetect1084()
    {
        $this->object->setFirstName('Слава');
        $this->object->setSecondName('Лесевичі');
        $this->assertEquals('2-Слава Лесевичі', $this->object->genderAutoDetect().'-Слава Лесевичі');
    }
    public function testGenDetect1085()
    {
        $this->object->setFirstName('Славина');
        $this->object->setSecondName('Лисенко');
        $this->assertEquals('2-Славина Лисенко', $this->object->genderAutoDetect().'-Славина Лисенко');
    }
    public function testGenDetect1086()
    {
        $this->object->setFirstName('Славолюба');
        $this->object->setSecondName('Литвиненко');
        $this->assertEquals('2-Славолюба Литвиненко', $this->object->genderAutoDetect().'-Славолюба Литвиненко');
    }
    public function testGenDetect1087()
    {
        $this->object->setFirstName('Славомила');
        $this->object->setSecondName('Литовченко');
        $this->assertEquals('2-Славомила Литовченко', $this->object->genderAutoDetect().'-Славомила Литовченко');
    }
    public function testGenDetect1088()
    {
        $this->object->setFirstName('Сміяна');
        $this->object->setSecondName('Лозина-Лозинська');
        $this->assertEquals('2-Сміяна Лозина-Лозинська', $this->object->genderAutoDetect().'-Сміяна Лозина-Лозинська');
    }
    public function testGenDetect1089()
    {
        $this->object->setFirstName('Сніжана');
        $this->object->setSecondName('Лопатинська');
        $this->assertEquals('2-Сніжана Лопатинська', $this->object->genderAutoDetect().'-Сніжана Лопатинська');
    }
    public function testGenDetect1090()
    {
        $this->object->setFirstName('Сніжинка');
        $this->object->setSecondName('Лукашевичі');
        $this->assertEquals('2-Сніжинка Лукашевичі', $this->object->genderAutoDetect().'-Сніжинка Лукашевичі');
    }
    public function testGenDetect1091()
    {
        $this->object->setFirstName('Собіслава');
        $this->object->setSecondName('Лукомська');
        $this->assertEquals('2-Собіслава Лукомська', $this->object->genderAutoDetect().'-Собіслава Лукомська');
    }
    public function testGenDetect1092()
    {
        $this->object->setFirstName('Соловія');
        $this->object->setSecondName('Луценко');
        $this->assertEquals('2-Соловія Луценко', $this->object->genderAutoDetect().'-Соловія Луценко');
    }
    public function testGenDetect1093()
    {
        $this->object->setFirstName('Сологуба');
        $this->object->setSecondName('Людкевич');
        $this->assertEquals('2-Сологуба Людкевич', $this->object->genderAutoDetect().'-Сологуба Людкевич');
    }
    public function testGenDetect1094()
    {
        $this->object->setFirstName('Сонцевида');
        $this->object->setSecondName('Ляшенко');
        $this->assertEquals('2-Сонцевида Ляшенко', $this->object->genderAutoDetect().'-Сонцевида Ляшенко');
    }
    public function testGenDetect1095()
    {
        $this->object->setFirstName('Сонцедара');
        $this->object->setSecondName('Мірошниченко');
        $this->assertEquals('2-Сонцедара Мірошниченко', $this->object->genderAutoDetect().'-Сонцедара Мірошниченко');
    }
    public function testGenDetect1096()
    {
        $this->object->setFirstName('Сонцелика');
        $this->object->setSecondName('Мірчук');
        $this->assertEquals('2-Сонцелика Мірчук', $this->object->genderAutoDetect().'-Сонцелика Мірчук');
    }
    public function testGenDetect1097()
    {
        $this->object->setFirstName('Сонцеслава');
        $this->object->setSecondName('Міщенко');
        $this->assertEquals('2-Сонцеслава Міщенко', $this->object->genderAutoDetect().'-Сонцеслава Міщенко');
    }
    public function testGenDetect1098()
    {
        $this->object->setFirstName('Ссанимира');
        $this->object->setSecondName('Мазаракі');
        $this->assertEquals('2-Ссанимира Мазаракі', $this->object->genderAutoDetect().'-Ссанимира Мазаракі');
    }
    public function testGenDetect1099()
    {
        $this->object->setFirstName('Станислава');
        $this->object->setSecondName('Мазепи');
        $this->assertEquals('2-Станислава Мазепи', $this->object->genderAutoDetect().'-Станислава Мазепи');
    }
    public function testGenDetect1100()
    {
        $this->object->setFirstName('Судимира');
        $this->object->setSecondName('Мазур');
        $this->assertEquals('2-Судимира Мазур', $this->object->genderAutoDetect().'-Судимира Мазур');
    }
    public function testGenDetect1101()
    {
        $this->object->setFirstName('Судислава');
        $this->object->setSecondName('Макаренко');
        $this->assertEquals('2-Судислава Макаренко', $this->object->genderAutoDetect().'-Судислава Макаренко');
    }
    public function testGenDetect1102()
    {
        $this->object->setFirstName('Татолюба');
        $this->object->setSecondName('Максименко');
        $this->assertEquals('2-Татолюба Максименко', $this->object->genderAutoDetect().'-Татолюба Максименко');
    }
    public function testGenDetect1103()
    {
        $this->object->setFirstName('Твердислава');
        $this->object->setSecondName('Маланчук');
        $this->assertEquals('2-Твердислава Маланчук', $this->object->genderAutoDetect().'-Твердислава Маланчук');
    }
    public function testGenDetect1104()
    {
        $this->object->setFirstName('Твердогоста');
        $this->object->setSecondName('Малаховські');
        $this->assertEquals('2-Твердогоста Малаховські', $this->object->genderAutoDetect().'-Твердогоста Малаховські');
    }
    public function testGenDetect1105()
    {
        $this->object->setFirstName('Творимира');
        $this->object->setSecondName('Малишко');
        $this->assertEquals('2-Творимира Малишко', $this->object->genderAutoDetect().'-Творимира Малишко');
    }
    public function testGenDetect1106()
    {
        $this->object->setFirstName('Творислава');
        $this->object->setSecondName('Малкович');
        $this->assertEquals('2-Творислава Малкович', $this->object->genderAutoDetect().'-Творислава Малкович');
    }
    public function testGenDetect1107()
    {
        $this->object->setFirstName('Толигніва');
        $this->object->setSecondName('Мамчур');
        $this->assertEquals('2-Толигніва Мамчур', $this->object->genderAutoDetect().'-Толигніва Мамчур');
    }
    public function testGenDetect1108()
    {
        $this->object->setFirstName('Тонкостана');
        $this->object->setSecondName('Маркевич');
        $this->assertEquals('2-Тонкостана Маркевич', $this->object->genderAutoDetect().'-Тонкостана Маркевич');
    }
    public function testGenDetect1109()
    {
        $this->object->setFirstName('Трояна');
        $this->object->setSecondName('Маркевичі');
        $this->assertEquals('2-Трояна Маркевичі', $this->object->genderAutoDetect().'-Трояна Маркевичі');
    }
    public function testGenDetect1110()
    {
        $this->object->setFirstName('Хвала');
        $this->object->setSecondName('Мартиненко');
        $this->assertEquals('2-Хвала Мартиненко', $this->object->genderAutoDetect().'-Хвала Мартиненко');
    }
    public function testGenDetect1111()
    {
        $this->object->setFirstName('Хвалибого');
        $this->object->setSecondName('Мартоси');
        $this->assertEquals('2-Хвалибого Мартоси', $this->object->genderAutoDetect().'-Хвалибого Мартоси');
    }
    public function testGenDetect1112()
    {
        $this->object->setFirstName('Хвалимира');
        $this->object->setSecondName('Марунчак');
        $this->assertEquals('2-Хвалимира Марунчак', $this->object->genderAutoDetect().'-Хвалимира Марунчак');
    }
    public function testGenDetect1113()
    {
        $this->object->setFirstName('Хвалина');
        $this->object->setSecondName('Марценюк');
        $this->assertEquals('2-Хвалина Марценюк', $this->object->genderAutoDetect().'-Хвалина Марценюк');
    }
    public function testGenDetect1114()
    {
        $this->object->setFirstName('Хорошка');
        $this->object->setSecondName('Марченко');
        $this->assertEquals('2-Хорошка Марченко', $this->object->genderAutoDetect().'-Хорошка Марченко');
    }
    public function testGenDetect1115()
    {
        $this->object->setFirstName('Хорошуня');
        $this->object->setSecondName('Марчук');
        $this->assertEquals('2-Хорошуня Марчук', $this->object->genderAutoDetect().'-Хорошуня Марчук');
    }
    public function testGenDetect1116()
    {
        $this->object->setFirstName('Хотимра');
        $this->object->setSecondName('Масоха');
        $this->assertEquals('2-Хотимра Масоха', $this->object->genderAutoDetect().'-Хотимра Масоха');
    }
    public function testGenDetect1117()
    {
        $this->object->setFirstName('Хотяна');
        $this->object->setSecondName('Матвієнко');
        $this->assertEquals('2-Хотяна Матвієнко', $this->object->genderAutoDetect().'-Хотяна Матвієнко');
    }
    public function testGenDetect1118()
    {
        $this->object->setFirstName('Хранимира');
        $this->object->setSecondName('Матюшенко');
        $this->assertEquals('2-Хранимира Матюшенко', $this->object->genderAutoDetect().'-Хранимира Матюшенко');
    }
    public function testGenDetect1119()
    {
        $this->object->setFirstName('Худана');
        $this->object->setSecondName('Маценко');
        $this->assertEquals('2-Худана Маценко', $this->object->genderAutoDetect().'-Худана Маценко');
    }
    public function testGenDetect1120()
    {
        $this->object->setFirstName('Цвітана');
        $this->object->setSecondName('Мацюк');
        $this->assertEquals('2-Цвітана Мацюк', $this->object->genderAutoDetect().'-Цвітана Мацюк');
    }
    public function testGenDetect1121()
    {
        $this->object->setFirstName('Чайка');
        $this->object->setSecondName('Мельник');
        $this->assertEquals('2-Чайка Мельник', $this->object->genderAutoDetect().'-Чайка Мельник');
    }
    public function testGenDetect1122()
    {
        $this->object->setFirstName('Чарівна');
        $this->object->setSecondName('Мельниченко');
        $this->assertEquals('2-Чарівна Мельниченко', $this->object->genderAutoDetect().'-Чарівна Мельниченко');
    }
    public function testGenDetect1123()
    {
        $this->object->setFirstName('Чарівниця');
        $this->object->setSecondName('Мельничук');
        $this->assertEquals('2-Чарівниця Мельничук', $this->object->genderAutoDetect().'-Чарівниця Мельничук');
    }
    public function testGenDetect1124()
    {
        $this->object->setFirstName('Чаруна');
        $this->object->setSecondName('Микитенко');
        $this->assertEquals('2-Чаруна Микитенко', $this->object->genderAutoDetect().'-Чаруна Микитенко');
    }
    public function testGenDetect1125()
    {
        $this->object->setFirstName('Чеслава');
        $this->object->setSecondName('Милорадовичі');
        $this->assertEquals('2-Чеслава Милорадовичі', $this->object->genderAutoDetect().'-Чеслава Милорадовичі');
    }
    public function testGenDetect1126()
    {
        $this->object->setFirstName('Ява');
        $this->object->setSecondName('Мирон');
        $this->assertEquals('2-Ява Мирон', $this->object->genderAutoDetect().'-Ява Мирон');
    }
    public function testGenDetect1127()
    {
        $this->object->setFirstName('Яворина');
        $this->object->setSecondName('Михайленко');
        $this->assertEquals('2-Яворина Михайленко', $this->object->genderAutoDetect().'-Яворина Михайленко');
    }
    public function testGenDetect1128()
    {
        $this->object->setFirstName('Ялина');
        $this->object->setSecondName('Михайличенко');
        $this->assertEquals('2-Ялина Михайличенко', $this->object->genderAutoDetect().'-Ялина Михайличенко');
    }
    public function testGenDetect1129()
    {
        $this->object->setFirstName('Ярина');
        $this->object->setSecondName('Михайлюк');
        $this->assertEquals('2-Ярина Михайлюк', $this->object->genderAutoDetect().'-Ярина Михайлюк');
    }
    public function testGenDetect1130()
    {
        $this->object->setFirstName('Яромила');
        $this->object->setSecondName('Мицик');
        $this->assertEquals('2-Яромила Мицик', $this->object->genderAutoDetect().'-Яромила Мицик');
    }
    public function testGenDetect1131()
    {
        $this->object->setFirstName('Яромира');
        $this->object->setSecondName('Мовчан');
        $this->assertEquals('2-Яромира Мовчан', $this->object->genderAutoDetect().'-Яромира Мовчан');
    }
    public function testGenDetect1132()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Могили');
        $this->assertEquals('2-Ярослава Могили', $this->object->genderAutoDetect().'-Ярослава Могили');
    }
    public function testGenDetect1133()
    {
        $this->object->setFirstName('Ясна');
        $this->object->setSecondName('Модзалевські');
        $this->assertEquals('2-Ясна Модзалевські', $this->object->genderAutoDetect().'-Ясна Модзалевські');
    }
    public function testGenDetect1134()
    {
        $this->object->setFirstName('Ясновида');
        $this->object->setSecondName('Моргун');
        $this->assertEquals('2-Ясновида Моргун', $this->object->genderAutoDetect().'-Ясновида Моргун');
    }
    public function testGenDetect1135()
    {
        $this->object->setFirstName('Ясногора');
        $this->object->setSecondName('Мороз');
        $this->assertEquals('2-Ясногора Мороз', $this->object->genderAutoDetect().'-Ясногора Мороз');
    }
    public function testGenDetect1136()
    {
        $this->object->setFirstName('Яснолика');
        $this->object->setSecondName('Мосендзи');
        $this->assertEquals('2-Яснолика Мосендзи', $this->object->genderAutoDetect().'-Яснолика Мосендзи');
    }
    public function testGenDetect1137()
    {
        $this->object->setFirstName('Яснослава');
        $this->object->setSecondName('Москаленко');
        $this->assertEquals('2-Яснослава Москаленко', $this->object->genderAutoDetect().'-Яснослава Москаленко');
    }
    public function testGenDetect1138()
    {
        $this->object->setFirstName('Августа');
        $this->object->setSecondName('Москаль');
        $this->assertEquals('2-Августа Москаль', $this->object->genderAutoDetect().'-Августа Москаль');
    }
    public function testGenDetect1139()
    {
        $this->object->setFirstName('Аврелія');
        $this->object->setSecondName('Мошак');
        $this->assertEquals('2-Аврелія Мошак', $this->object->genderAutoDetect().'-Аврелія Мошак');
    }
    public function testGenDetect1140()
    {
        $this->object->setFirstName('Аврора');
        $this->object->setSecondName('Муратова');
        $this->assertEquals('2-Аврора Муратова', $this->object->genderAutoDetect().'-Аврора Муратова');
    }
    public function testGenDetect1141()
    {
        $this->object->setFirstName('Агнія');
        $this->object->setSecondName('Мусієнко');
        $this->assertEquals('2-Агнія Мусієнко', $this->object->genderAutoDetect().'-Агнія Мусієнко');
    }
    public function testGenDetect1142()
    {
        $this->object->setFirstName('Агрипина');
        $this->object->setSecondName('Назаренко');
        $this->assertEquals('2-Агрипина Назаренко', $this->object->genderAutoDetect().'-Агрипина Назаренко');
    }
    public function testGenDetect1143()
    {
        $this->object->setFirstName('Ада');
        $this->object->setSecondName('Наливайко');
        $this->assertEquals('2-Ада Наливайко', $this->object->genderAutoDetect().'-Ада Наливайко');
    }
    public function testGenDetect1144()
    {
        $this->object->setFirstName('Аделаїда');
        $this->object->setSecondName('Нащинські');
        $this->assertEquals('2-Аделаїда Нащинські', $this->object->genderAutoDetect().'-Аделаїда Нащинські');
    }
    public function testGenDetect1145()
    {
        $this->object->setFirstName('Адріана');
        $this->object->setSecondName('Негребецька');
        $this->assertEquals('2-Адріана Негребецька', $this->object->genderAutoDetect().'-Адріана Негребецька');
    }
    public function testGenDetect1146()
    {
        $this->object->setFirstName('Аза');
        $this->object->setSecondName('Непорожній');
        $this->assertEquals('2-Аза Непорожній', $this->object->genderAutoDetect().'-Аза Непорожній');
    }
    public function testGenDetect1147()
    {
        $this->object->setFirstName('Азалія');
        $this->object->setSecondName('Нестеренко');
        $this->assertEquals('2-Азалія Нестеренко', $this->object->genderAutoDetect().'-Азалія Нестеренко');
    }
    public function testGenDetect1148()
    {
        $this->object->setFirstName('Аліна');
        $this->object->setSecondName('Нечай');
        $this->assertEquals('2-Аліна Нечай', $this->object->genderAutoDetect().'-Аліна Нечай');
    }
    public function testGenDetect1149()
    {
        $this->object->setFirstName('Аліса');
        $this->object->setSecondName('Нечипоренко');
        $this->assertEquals('2-Аліса Нечипоренко', $this->object->genderAutoDetect().'-Аліса Нечипоренко');
    }
    public function testGenDetect1150()
    {
        $this->object->setFirstName('Алла');
        $this->object->setSecondName('Оберемченко');
        $this->assertEquals('2-Алла Оберемченко', $this->object->genderAutoDetect().'-Алла Оберемченко');
    }
    public function testGenDetect1151()
    {
        $this->object->setFirstName('Альбертина');
        $this->object->setSecondName('Овчаренко');
        $this->assertEquals('2-Альбертина Овчаренко', $this->object->genderAutoDetect().'-Альбертина Овчаренко');
    }
    public function testGenDetect1152()
    {
        $this->object->setFirstName('Альбіна');
        $this->object->setSecondName('Ограновичі');
        $this->assertEquals('2-Альбіна Ограновичі', $this->object->genderAutoDetect().'-Альбіна Ограновичі');
    }
    public function testGenDetect1153()
    {
        $this->object->setFirstName('Альвіна');
        $this->object->setSecondName('Олійник');
        $this->assertEquals('2-Альвіна Олійник', $this->object->genderAutoDetect().'-Альвіна Олійник');
    }
    public function testGenDetect1154()
    {
        $this->object->setFirstName('Анастасія');
        $this->object->setSecondName('Олексієнко');
        $this->assertEquals('2-Анастасія Олексієнко', $this->object->genderAutoDetect().'-Анастасія Олексієнко');
    }
    public function testGenDetect1155()
    {
        $this->object->setFirstName('Ангеліна');
        $this->object->setSecondName('Омельченко');
        $this->assertEquals('2-Ангеліна Омельченко', $this->object->genderAutoDetect().'-Ангеліна Омельченко');
    }
    public function testGenDetect1156()
    {
        $this->object->setFirstName('Анжела');
        $this->object->setSecondName('Омельчук');
        $this->assertEquals('2-Анжела Омельчук', $this->object->genderAutoDetect().'-Анжела Омельчук');
    }
    public function testGenDetect1157()
    {
        $this->object->setFirstName('Антоніна');
        $this->object->setSecondName('Онищенко');
        $this->assertEquals('2-Антоніна Онищенко', $this->object->genderAutoDetect().'-Антоніна Онищенко');
    }
    public function testGenDetect1158()
    {
        $this->object->setFirstName('Анфіса');
        $this->object->setSecondName('Онопенко');
        $this->assertEquals('2-Анфіса Онопенко', $this->object->genderAutoDetect().'-Анфіса Онопенко');
    }
    public function testGenDetect1159()
    {
        $this->object->setFirstName('Аріадна');
        $this->object->setSecondName('Опанасенко');
        $this->assertEquals('2-Аріадна Опанасенко', $this->object->genderAutoDetect().'-Аріадна Опанасенко');
    }
    public function testGenDetect1160()
    {
        $this->object->setFirstName('Арсена');
        $this->object->setSecondName('Орлики');
        $this->assertEquals('2-Арсена Орлики', $this->object->genderAutoDetect().'-Арсена Орлики');
    }
    public function testGenDetect1161()
    {
        $this->object->setFirstName('Ася');
        $this->object->setSecondName('Осадчук');
        $this->assertEquals('2-Ася Осадчук', $this->object->genderAutoDetect().'-Ася Осадчук');
    }
    public function testGenDetect1162()
    {
        $this->object->setFirstName('Афіна');
        $this->object->setSecondName('Осика');
        $this->assertEquals('2-Афіна Осика', $this->object->genderAutoDetect().'-Афіна Осика');
    }
    public function testGenDetect1163()
    {
        $this->object->setFirstName('Афродіта');
        $this->object->setSecondName('Остапенко');
        $this->assertEquals('2-Афродіта Остапенко', $this->object->genderAutoDetect().'-Афродіта Остапенко');
    }
    public function testGenDetect1164()
    {
        $this->object->setFirstName('Бажана');
        $this->object->setSecondName('Остроградська');
        $this->assertEquals('2-Бажана Остроградська', $this->object->genderAutoDetect().'-Бажана Остроградська');
    }
    public function testGenDetect1165()
    {
        $this->object->setFirstName('Берегиня');
        $this->object->setSecondName('Острозькі');
        $this->assertEquals('2-Берегиня Острозькі', $this->object->genderAutoDetect().'-Берегиня Острозькі');
    }
    public function testGenDetect1166()
    {
        $this->object->setFirstName('Біловида');
        $this->object->setSecondName('Півторак');
        $this->assertEquals('2-Біловида Півторак', $this->object->genderAutoDetect().'-Біловида Півторак');
    }
    public function testGenDetect1167()
    {
        $this->object->setFirstName('Біломира');
        $this->object->setSecondName('Підопригора');
        $this->assertEquals('2-Біломира Підопригора', $this->object->genderAutoDetect().'-Біломира Підопригора');
    }
    public function testGenDetect1168()
    {
        $this->object->setFirstName('Білослава');
        $this->object->setSecondName('Павленко');
        $this->assertEquals('2-Білослава Павленко', $this->object->genderAutoDetect().'-Білослава Павленко');
    }
    public function testGenDetect1169()
    {
        $this->object->setFirstName('Біляна');
        $this->object->setSecondName('Павлюк');
        $this->assertEquals('2-Біляна Павлюк', $this->object->genderAutoDetect().'-Біляна Павлюк');
    }
    public function testGenDetect1170()
    {
        $this->object->setFirstName('Благиня');
        $this->object->setSecondName('Павлюченко');
        $this->assertEquals('2-Благиня Павлюченко', $this->object->genderAutoDetect().'-Благиня Павлюченко');
    }
    public function testGenDetect1171()
    {
        $this->object->setFirstName('Благовида');
        $this->object->setSecondName('Пазенко');
        $this->assertEquals('2-Благовида Пазенко', $this->object->genderAutoDetect().'-Благовида Пазенко');
    }
    public function testGenDetect1172()
    {
        $this->object->setFirstName('Благовіра');
        $this->object->setSecondName('Паламарчук');
        $this->assertEquals('2-Благовіра Паламарчук', $this->object->genderAutoDetect().'-Благовіра Паламарчук');
    }
    public function testGenDetect1173()
    {
        $this->object->setFirstName('Благовіста');
        $this->object->setSecondName('Панас');
        $this->assertEquals('2-Благовіста Панас', $this->object->genderAutoDetect().'-Благовіста Панас');
    }
    public function testGenDetect1174()
    {
        $this->object->setFirstName('Благослава');
        $this->object->setSecondName('Панасюк');
        $this->assertEquals('2-Благослава Панасюк', $this->object->genderAutoDetect().'-Благослава Панасюк');
    }
    public function testGenDetect1175()
    {
        $this->object->setFirstName('Богдана');
        $this->object->setSecondName('Паньківська');
        $this->assertEquals('2-Богдана Паньківська', $this->object->genderAutoDetect().'-Богдана Паньківська');
    }
    public function testGenDetect1176()
    {
        $this->object->setFirstName('Боговіра');
        $this->object->setSecondName('Пархоменко');
        $this->assertEquals('2-Боговіра Пархоменко', $this->object->genderAutoDetect().'-Боговіра Пархоменко');
    }
    public function testGenDetect1177()
    {
        $this->object->setFirstName('Боговіста');
        $this->object->setSecondName('Пасічник');
        $this->assertEquals('2-Боговіста Пасічник', $this->object->genderAutoDetect().'-Боговіста Пасічник');
    }
    public function testGenDetect1178()
    {
        $this->object->setFirstName('Богодара');
        $this->object->setSecondName('Пасько');
        $this->assertEquals('2-Богодара Пасько', $this->object->genderAutoDetect().'-Богодара Пасько');
    }
    public function testGenDetect1179()
    {
        $this->object->setFirstName('Боголіпа');
        $this->object->setSecondName('Пашко');
        $this->assertEquals('2-Боголіпа Пашко', $this->object->genderAutoDetect().'-Боголіпа Пашко');
    }
    public function testGenDetect1180()
    {
        $this->object->setFirstName('Боголюба');
        $this->object->setSecondName('Пащенко');
        $this->assertEquals('2-Боголюба Пащенко', $this->object->genderAutoDetect().'-Боголюба Пащенко');
    }
    public function testGenDetect1181()
    {
        $this->object->setFirstName('Богосвята');
        $this->object->setSecondName('Перебийніс');
        $this->assertEquals('2-Богосвята Перебийніс', $this->object->genderAutoDetect().'-Богосвята Перебийніс');
    }
    public function testGenDetect1182()
    {
        $this->object->setFirstName('Богумила');
        $this->object->setSecondName('Петренко');
        $this->assertEquals('2-Богумила Петренко', $this->object->genderAutoDetect().'-Богумила Петренко');
    }
    public function testGenDetect1183()
    {
        $this->object->setFirstName('Богумира');
        $this->object->setSecondName('Пилипенко');
        $this->assertEquals('2-Богумира Пилипенко', $this->object->genderAutoDetect().'-Богумира Пилипенко');
    }
    public function testGenDetect1184()
    {
        $this->object->setFirstName('Богуслава');
        $this->object->setSecondName('Пилипчук');
        $this->assertEquals('2-Богуслава Пилипчук', $this->object->genderAutoDetect().'-Богуслава Пилипчук');
    }
    public function testGenDetect1185()
    {
        $this->object->setFirstName('Божедана');
        $this->object->setSecondName('Писаренко');
        $this->assertEquals('2-Божедана Писаренко', $this->object->genderAutoDetect().'-Божедана Писаренко');
    }
    public function testGenDetect1186()
    {
        $this->object->setFirstName('Божедара');
        $this->object->setSecondName('Писарчук');
        $this->assertEquals('2-Божедара Писарчук', $this->object->genderAutoDetect().'-Божедара Писарчук');
    }
    public function testGenDetect1187()
    {
        $this->object->setFirstName('Божемила');
        $this->object->setSecondName('Плющ');
        $this->assertEquals('2-Божемила Плющ', $this->object->genderAutoDetect().'-Божемила Плющ');
    }
    public function testGenDetect1188()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Покотило');
        $this->assertEquals('2-Божена Покотило', $this->object->genderAutoDetect().'-Божена Покотило');
    }
    public function testGenDetect1189()
    {
        $this->object->setFirstName('Божиця');
        $this->object->setSecondName('Поліщук');
        $this->assertEquals('2-Божиця Поліщук', $this->object->genderAutoDetect().'-Божиця Поліщук');
    }
    public function testGenDetect1190()
    {
        $this->object->setFirstName('Болеслава');
        $this->object->setSecondName('Польова');
        $this->assertEquals('2-Болеслава Польова', $this->object->genderAutoDetect().'-Болеслава Польова');
    }
    public function testGenDetect1191()
    {
        $this->object->setFirstName('Борислава');
        $this->object->setSecondName('Полянська');
        $this->assertEquals('2-Борислава Полянська', $this->object->genderAutoDetect().'-Борислава Полянська');
    }
    public function testGenDetect1192()
    {
        $this->object->setFirstName('Боронислава');
        $this->object->setSecondName('Пономаренко');
        $this->assertEquals('2-Боронислава Пономаренко', $this->object->genderAutoDetect().'-Боронислава Пономаренко');
    }
    public function testGenDetect1193()
    {
        $this->object->setFirstName('Братолюба');
        $this->object->setSecondName('Попадюк');
        $this->assertEquals('2-Братолюба Попадюк', $this->object->genderAutoDetect().'-Братолюба Попадюк');
    }
    public function testGenDetect1194()
    {
        $this->object->setFirstName('Братомила');
        $this->object->setSecondName('Попенко');
        $this->assertEquals('2-Братомила Попенко', $this->object->genderAutoDetect().'-Братомила Попенко');
    }
    public function testGenDetect1195()
    {
        $this->object->setFirstName('Брячислава');
        $this->object->setSecondName('Потапенко');
        $this->assertEquals('2-Брячислава Потапенко', $this->object->genderAutoDetect().'-Брячислава Потапенко');
    }
    public function testGenDetect1196()
    {
        $this->object->setFirstName('Будана');
        $this->object->setSecondName('Потебенько');
        $this->assertEquals('2-Будана Потебенько', $this->object->genderAutoDetect().'-Будана Потебенько');
    }
    public function testGenDetect1197()
    {
        $this->object->setFirstName('Будимира');
        $this->object->setSecondName('Прийма');
        $this->assertEquals('2-Будимира Прийма', $this->object->genderAutoDetect().'-Будимира Прийма');
    }
    public function testGenDetect1198()
    {
        $this->object->setFirstName('Будислава');
        $this->object->setSecondName('Приймак');
        $this->assertEquals('2-Будислава Приймак', $this->object->genderAutoDetect().'-Будислава Приймак');
    }
    public function testGenDetect1199()
    {
        $this->object->setFirstName('Ведана');
        $this->object->setSecondName('Присяжнюк');
        $this->assertEquals('2-Ведана Присяжнюк', $this->object->genderAutoDetect().'-Ведана Присяжнюк');
    }
    public function testGenDetect1200()
    {
        $this->object->setFirstName('Велимира');
        $this->object->setSecondName('Приходько');
        $this->assertEquals('2-Велимира Приходько', $this->object->genderAutoDetect().'-Велимира Приходько');
    }
    public function testGenDetect1201()
    {
        $this->object->setFirstName('Вербава');
        $this->object->setSecondName('Продан');
        $this->assertEquals('2-Вербава Продан', $this->object->genderAutoDetect().'-Вербава Продан');
    }
    public function testGenDetect1202()
    {
        $this->object->setFirstName('Верхуслава');
        $this->object->setSecondName('Проценко');
        $this->assertEquals('2-Верхуслава Проценко', $this->object->genderAutoDetect().'-Верхуслава Проценко');
    }
    public function testGenDetect1203()
    {
        $this->object->setFirstName('Веселина');
        $this->object->setSecondName('Проць');
        $this->assertEquals('2-Веселина Проць', $this->object->genderAutoDetect().'-Веселина Проць');
    }
    public function testGenDetect1204()
    {
        $this->object->setFirstName('Веселка');
        $this->object->setSecondName('Процюк');
        $this->assertEquals('2-Веселка Процюк', $this->object->genderAutoDetect().'-Веселка Процюк');
    }
    public function testGenDetect1205()
    {
        $this->object->setFirstName('Весна');
        $this->object->setSecondName('Пушкар');
        $this->assertEquals('2-Весна Пушкар', $this->object->genderAutoDetect().'-Весна Пушкар');
    }
    public function testGenDetect1206()
    {
        $this->object->setFirstName('Вишена');
        $this->object->setSecondName('Різенки');
        $this->assertEquals('2-Вишена Різенки', $this->object->genderAutoDetect().'-Вишена Різенки');
    }
    public function testGenDetect1207()
    {
        $this->object->setFirstName('Вишеслава');
        $this->object->setSecondName('Різун');
        $this->assertEquals('2-Вишеслава Різун', $this->object->genderAutoDetect().'-Вишеслава Різун');
    }
    public function testGenDetect1208()
    {
        $this->object->setFirstName('Вишня');
        $this->object->setSecondName('Радченко');
        $this->assertEquals('2-Вишня Радченко', $this->object->genderAutoDetect().'-Вишня Радченко');
    }
    public function testGenDetect1209()
    {
        $this->object->setFirstName('Віра');
        $this->object->setSecondName('Рибальченко');
        $this->assertEquals('2-Віра Рибальченко', $this->object->genderAutoDetect().'-Віра Рибальченко');
    }
    public function testGenDetect1210()
    {
        $this->object->setFirstName('Віродана');
        $this->object->setSecondName('Римар');
        $this->assertEquals('2-Віродана Римар', $this->object->genderAutoDetect().'-Віродана Римар');
    }
    public function testGenDetect1211()
    {
        $this->object->setFirstName('Віродара');
        $this->object->setSecondName('Родзянки');
        $this->assertEquals('2-Віродара Родзянки', $this->object->genderAutoDetect().'-Віродара Родзянки');
    }
    public function testGenDetect1212()
    {
        $this->object->setFirstName('Вірослава');
        $this->object->setSecondName('Рожок');
        $this->assertEquals('2-Вірослава Рожок', $this->object->genderAutoDetect().'-Вірослава Рожок');
    }
    public function testGenDetect1213()
    {
        $this->object->setFirstName('Віста');
        $this->object->setSecondName('Розумовські');
        $this->assertEquals('2-Віста Розумовські', $this->object->genderAutoDetect().'-Віста Розумовські');
    }
    public function testGenDetect1214()
    {
        $this->object->setFirstName('Вістуна');
        $this->object->setSecondName('Романенко');
        $this->assertEquals('2-Вістуна Романенко', $this->object->genderAutoDetect().'-Вістуна Романенко');
    }
    public function testGenDetect1215()
    {
        $this->object->setFirstName('Вітана');
        $this->object->setSecondName('Романчук');
        $this->assertEquals('2-Вітана Романчук', $this->object->genderAutoDetect().'-Вітана Романчук');
    }
    public function testGenDetect1216()
    {
        $this->object->setFirstName('Влада');
        $this->object->setSecondName('Романюк');
        $this->assertEquals('2-Влада Романюк', $this->object->genderAutoDetect().'-Влада Романюк');
    }
    public function testGenDetect1217()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Рошкевич');
        $this->assertEquals('2-Владислава Рошкевич', $this->object->genderAutoDetect().'-Владислава Рошкевич');
    }
    public function testGenDetect1218()
    {
        $this->object->setFirstName('Власта');
        $this->object->setSecondName('Рубан');
        $this->assertEquals('2-Власта Рубан', $this->object->genderAutoDetect().'-Власта Рубан');
    }
    public function testGenDetect1219()
    {
        $this->object->setFirstName('Вогнедара');
        $this->object->setSecondName('Рубани');
        $this->assertEquals('2-Вогнедара Рубани', $this->object->genderAutoDetect().'-Вогнедара Рубани');
    }
    public function testGenDetect1220()
    {
        $this->object->setFirstName('Вогняна');
        $this->object->setSecondName('Руденко');
        $this->assertEquals('2-Вогняна Руденко', $this->object->genderAutoDetect().'-Вогняна Руденко');
    }
    public function testGenDetect1221()
    {
        $this->object->setFirstName('Волелюба');
        $this->object->setSecondName('Рябовіл');
        $this->assertEquals('2-Волелюба Рябовіл', $this->object->genderAutoDetect().'-Волелюба Рябовіл');
    }
    public function testGenDetect1222()
    {
        $this->object->setFirstName('Володимира');
        $this->object->setSecondName('Сімашкевич');
        $this->assertEquals('2-Володимира Сімашкевич', $this->object->genderAutoDetect().'-Володимира Сімашкевич');
    }
    public function testGenDetect1223()
    {
        $this->object->setFirstName('Волошка');
        $this->object->setSecondName('Саєнко');
        $this->assertEquals('2-Волошка Саєнко', $this->object->genderAutoDetect().'-Волошка Саєнко');
    }
    public function testGenDetect1224()
    {
        $this->object->setFirstName('Воля');
        $this->object->setSecondName('Савенко');
        $this->assertEquals('2-Воля Савенко', $this->object->genderAutoDetect().'-Воля Савенко');
    }
    public function testGenDetect1225()
    {
        $this->object->setFirstName('Всеволода');
        $this->object->setSecondName('Савицька');
        $this->assertEquals('2-Всеволода Савицька', $this->object->genderAutoDetect().'-Всеволода Савицька');
    }
    public function testGenDetect1226()
    {
        $this->object->setFirstName('Вселюба');
        $this->object->setSecondName('Савка');
        $this->assertEquals('2-Вселюба Савка', $this->object->genderAutoDetect().'-Вселюба Савка');
    }
    public function testGenDetect1227()
    {
        $this->object->setFirstName('Всемира');
        $this->object->setSecondName('Савченко');
        $this->assertEquals('2-Всемира Савченко', $this->object->genderAutoDetect().'-Всемира Савченко');
    }
    public function testGenDetect1228()
    {
        $this->object->setFirstName('Всеслава');
        $this->object->setSecondName('Савчук');
        $this->assertEquals('2-Всеслава Савчук', $this->object->genderAutoDetect().'-Всеслава Савчук');
    }
    public function testGenDetect1229()
    {
        $this->object->setFirstName('В’ячеслава');
        $this->object->setSecondName('Сак');
        $this->assertEquals('2-В’ячеслава Сак', $this->object->genderAutoDetect().'-В’ячеслава Сак');
    }
    public function testGenDetect1230()
    {
        $this->object->setFirstName('Гаїна');
        $this->object->setSecondName('Самборська');
        $this->assertEquals('2-Гаїна Самборська', $this->object->genderAutoDetect().'-Гаїна Самборська');
    }
    public function testGenDetect1231()
    {
        $this->object->setFirstName('Гатусила');
        $this->object->setSecondName('Самойлович');
        $this->assertEquals('2-Гатусила Самойлович', $this->object->genderAutoDetect().'-Гатусила Самойлович');
    }
    public function testGenDetect1232()
    {
        $this->object->setFirstName('Гарнослава');
        $this->object->setSecondName('Самусь');
        $this->assertEquals('2-Гарнослава Самусь', $this->object->genderAutoDetect().'-Гарнослава Самусь');
    }
    public function testGenDetect1233()
    {
        $this->object->setFirstName('Голубка');
        $this->object->setSecondName('Свида');
        $this->assertEquals('2-Голубка Свида', $this->object->genderAutoDetect().'-Голубка Свида');
    }
    public function testGenDetect1234()
    {
        $this->object->setFirstName('Горигляда');
        $this->object->setSecondName('Семашко');
        $this->assertEquals('2-Горигляда Семашко', $this->object->genderAutoDetect().'-Горигляда Семашко');
    }
    public function testGenDetect1235()
    {
        $this->object->setFirstName('Горислава');
        $this->object->setSecondName('Семененко');
        $this->assertEquals('2-Горислава Семененко', $this->object->genderAutoDetect().'-Горислава Семененко');
    }
    public function testGenDetect1236()
    {
        $this->object->setFirstName('Городислава');
        $this->object->setSecondName('Семенець');
        $this->assertEquals('2-Городислава Семенець', $this->object->genderAutoDetect().'-Городислава Семенець');
    }
    public function testGenDetect1237()
    {
        $this->object->setFirstName('Гострозора');
        $this->object->setSecondName('Семенина');
        $this->assertEquals('2-Гострозора Семенина', $this->object->genderAutoDetect().'-Гострозора Семенина');
    }
    public function testGenDetect1238()
    {
        $this->object->setFirstName('Градислава');
        $this->object->setSecondName('Семенченко');
        $this->assertEquals('2-Градислава Семенченко', $this->object->genderAutoDetect().'-Градислава Семенченко');
    }
    public function testGenDetect1239()
    {
        $this->object->setFirstName('Гранислава');
        $this->object->setSecondName('Семенюк');
        $this->assertEquals('2-Гранислава Семенюк', $this->object->genderAutoDetect().'-Гранислава Семенюк');
    }
    public function testGenDetect1240()
    {
        $this->object->setFirstName('Гремислава');
        $this->object->setSecondName('Семеренко');
        $this->assertEquals('2-Гремислава Семеренко', $this->object->genderAutoDetect().'-Гремислава Семеренко');
    }
    public function testGenDetect1241()
    {
        $this->object->setFirstName('Далібора');
        $this->object->setSecondName('Сидоренко');
        $this->assertEquals('2-Далібора Сидоренко', $this->object->genderAutoDetect().'-Далібора Сидоренко');
    }
    public function testGenDetect1242()
    {
        $this->object->setFirstName('Дана');
        $this->object->setSecondName('Силенко');
        $this->assertEquals('2-Дана Силенко', $this->object->genderAutoDetect().'-Дана Силенко');
    }
    public function testGenDetect1243()
    {
        $this->object->setFirstName('Дарина');
        $this->object->setSecondName('Симоненко');
        $this->assertEquals('2-Дарина Симоненко', $this->object->genderAutoDetect().'-Дарина Симоненко');
    }
    public function testGenDetect1244()
    {
        $this->object->setFirstName('Дзвенимира');
        $this->object->setSecondName('Симчич');
        $this->assertEquals('2-Дзвенимира Симчич', $this->object->genderAutoDetect().'-Дзвенимира Симчич');
    }
    public function testGenDetect1245()
    {
        $this->object->setFirstName('Дзвенислава');
        $this->object->setSecondName('Скаржинські');
        $this->assertEquals('2-Дзвенислава Скаржинські', $this->object->genderAutoDetect().'-Дзвенислава Скаржинські');
    }
    public function testGenDetect1246()
    {
        $this->object->setFirstName('Дзвінка');
        $this->object->setSecondName('Скоропадські');
        $this->assertEquals('2-Дзвінка Скоропадські', $this->object->genderAutoDetect().'-Дзвінка Скоропадські');
    }
    public function testGenDetect1247()
    {
        $this->object->setFirstName('Діяна');
        $this->object->setSecondName('Скрипник');
        $this->assertEquals('2-Діяна Скрипник', $this->object->genderAutoDetect().'-Діяна Скрипник');
    }
    public function testGenDetect1248()
    {
        $this->object->setFirstName('Добринка');
        $this->object->setSecondName('Скуратівська');
        $this->assertEquals('2-Добринка Скуратівська', $this->object->genderAutoDetect().'-Добринка Скуратівська');
    }
    public function testGenDetect1249()
    {
        $this->object->setFirstName('Добровіста');
        $this->object->setSecondName('Слободян');
        $this->assertEquals('2-Добровіста Слободян', $this->object->genderAutoDetect().'-Добровіста Слободян');
    }
    public function testGenDetect1250()
    {
        $this->object->setFirstName('Доброгніва');
        $this->object->setSecondName('Слободянюк');
        $this->assertEquals('2-Доброгніва Слободянюк', $this->object->genderAutoDetect().'-Доброгніва Слободянюк');
    }
    public function testGenDetect1251()
    {
        $this->object->setFirstName('Добролюба');
        $this->object->setSecondName('Смик');
        $this->assertEquals('2-Добролюба Смик', $this->object->genderAutoDetect().'-Добролюба Смик');
    }
    public function testGenDetect1252()
    {
        $this->object->setFirstName('Добромила');
        $this->object->setSecondName('Смогоржевська');
        $this->assertEquals('2-Добромила Смогоржевська', $this->object->genderAutoDetect().'-Добромила Смогоржевська');
    }
    public function testGenDetect1253()
    {
        $this->object->setFirstName('Добромира');
        $this->object->setSecondName('Собчук');
        $this->assertEquals('2-Добромира Собчук', $this->object->genderAutoDetect().'-Добромира Собчук');
    }
    public function testGenDetect1254()
    {
        $this->object->setFirstName('Доброніга');
        $this->object->setSecondName('Сопронюк');
        $this->assertEquals('2-Доброніга Сопронюк', $this->object->genderAutoDetect().'-Доброніга Сопронюк');
    }
    public function testGenDetect1255()
    {
        $this->object->setFirstName('Доброслава');
        $this->object->setSecondName('Сорока');
        $this->assertEquals('2-Доброслава Сорока', $this->object->genderAutoDetect().'-Доброслава Сорока');
    }
    public function testGenDetect1256()
    {
        $this->object->setFirstName('Долина');
        $this->object->setSecondName('Сохань');
        $this->assertEquals('2-Долина Сохань', $this->object->genderAutoDetect().'-Долина Сохань');
    }
    public function testGenDetect1257()
    {
        $this->object->setFirstName('Доля');
        $this->object->setSecondName('Стадник');
        $this->assertEquals('2-Доля Стадник', $this->object->genderAutoDetect().'-Доля Стадник');
    }
    public function testGenDetect1258()
    {
        $this->object->setFirstName('Домаха');
        $this->object->setSecondName('Стельмах');
        $this->assertEquals('2-Домаха Стельмах', $this->object->genderAutoDetect().'-Домаха Стельмах');
    }
    public function testGenDetect1259()
    {
        $this->object->setFirstName('Доморада');
        $this->object->setSecondName('Степаненко');
        $this->assertEquals('2-Доморада Степаненко', $this->object->genderAutoDetect().'-Доморада Степаненко');
    }
    public function testGenDetect1260()
    {
        $this->object->setFirstName('Дружелюба');
        $this->object->setSecondName('Степура');
        $this->assertEquals('2-Дружелюба Степура', $this->object->genderAutoDetect().'-Дружелюба Степура');
    }
    public function testGenDetect1261()
    {
        $this->object->setFirstName('Жадана');
        $this->object->setSecondName('Стеценко');
        $this->assertEquals('2-Жадана Стеценко', $this->object->genderAutoDetect().'-Жадана Стеценко');
    }
    public function testGenDetect1262()
    {
        $this->object->setFirstName('Ждана');
        $this->object->setSecondName('Стецюк');
        $this->assertEquals('2-Ждана Стецюк', $this->object->genderAutoDetect().'-Ждана Стецюк');
    }
    public function testGenDetect1263()
    {
        $this->object->setFirstName('Живосила');
        $this->object->setSecondName('Стороженки');
        $this->assertEquals('2-Живосила Стороженки', $this->object->genderAutoDetect().'-Живосила Стороженки');
    }
    public function testGenDetect1264()
    {
        $this->object->setFirstName('Живослава');
        $this->object->setSecondName('Струтинська');
        $this->assertEquals('2-Живослава Струтинська', $this->object->genderAutoDetect().'-Живослава Струтинська');
    }
    public function testGenDetect1265()
    {
        $this->object->setFirstName('Житомира');
        $this->object->setSecondName('Сулима');
        $this->assertEquals('2-Житомира Сулима', $this->object->genderAutoDetect().'-Житомира Сулима');
    }
    public function testGenDetect1266()
    {
        $this->object->setFirstName('Життєлюба');
        $this->object->setSecondName('Сулими');
        $this->assertEquals('2-Життєлюба Сулими', $this->object->genderAutoDetect().'-Життєлюба Сулими');
    }
    public function testGenDetect1267()
    {
        $this->object->setFirstName('Забава');
        $this->object->setSecondName('Супруненко');
        $this->assertEquals('2-Забава Супруненко', $this->object->genderAutoDetect().'-Забава Супруненко');
    }
    public function testGenDetect1268()
    {
        $this->object->setFirstName('Звенигора');
        $this->object->setSecondName('Танські');
        $this->assertEquals('2-Звенигора Танські', $this->object->genderAutoDetect().'-Звенигора Танські');
    }
    public function testGenDetect1269()
    {
        $this->object->setFirstName('Звенислава');
        $this->object->setSecondName('Тараненко');
        $this->assertEquals('2-Звенислава Тараненко', $this->object->genderAutoDetect().'-Звенислава Тараненко');
    }
    public function testGenDetect1270()
    {
        $this->object->setFirstName('Звонимира');
        $this->object->setSecondName('Тарновські');
        $this->assertEquals('2-Звонимира Тарновські', $this->object->genderAutoDetect().'-Звонимира Тарновські');
    }
    public function testGenDetect1271()
    {
        $this->object->setFirstName('Зірка');
        $this->object->setSecondName('Татаренко');
        $this->assertEquals('2-Зірка Татаренко', $this->object->genderAutoDetect().'-Зірка Татаренко');
    }
    public function testGenDetect1272()
    {
        $this->object->setFirstName('Злата');
        $this->object->setSecondName('Теплицька');
        $this->assertEquals('2-Злата Теплицька', $this->object->genderAutoDetect().'-Злата Теплицька');
    }
    public function testGenDetect1273()
    {
        $this->object->setFirstName('Златомира');
        $this->object->setSecondName('Терещенко');
        $this->assertEquals('2-Златомира Терещенко', $this->object->genderAutoDetect().'-Златомира Терещенко');
    }
    public function testGenDetect1274()
    {
        $this->object->setFirstName('Златоуста');
        $this->object->setSecondName('Терещук');
        $this->assertEquals('2-Златоуста Терещук', $this->object->genderAutoDetect().'-Златоуста Терещук');
    }
    public function testGenDetect1275()
    {
        $this->object->setFirstName('Золотодана');
        $this->object->setSecondName('Тесленко');
        $this->assertEquals('2-Золотодана Тесленко', $this->object->genderAutoDetect().'-Золотодана Тесленко');
    }
    public function testGenDetect1276()
    {
        $this->object->setFirstName('Зорегляда');
        $this->object->setSecondName('Тимошенко');
        $this->assertEquals('2-Зорегляда Тимошенко', $this->object->genderAutoDetect().'-Зорегляда Тимошенко');
    }
    public function testGenDetect1277()
    {
        $this->object->setFirstName('Зореслава');
        $this->object->setSecondName('Тимощук');
        $this->assertEquals('2-Зореслава Тимощук', $this->object->genderAutoDetect().'-Зореслава Тимощук');
    }
    public function testGenDetect1278()
    {
        $this->object->setFirstName('Зорина');
        $this->object->setSecondName('Тимчак');
        $this->assertEquals('2-Зорина Тимчак', $this->object->genderAutoDetect().'-Зорина Тимчак');
    }
    public function testGenDetect1279()
    {
        $this->object->setFirstName('Зоря');
        $this->object->setSecondName('Титаренко');
        $this->assertEquals('2-Зоря Титаренко', $this->object->genderAutoDetect().'-Зоря Титаренко');
    }
    public function testGenDetect1280()
    {
        $this->object->setFirstName('Зоряна');
        $this->object->setSecondName('Тишкевичі');
        $this->assertEquals('2-Зоряна Тишкевичі', $this->object->genderAutoDetect().'-Зоряна Тишкевичі');
    }
    public function testGenDetect1281()
    {
        $this->object->setFirstName('Казка');
        $this->object->setSecondName('Тищенко');
        $this->assertEquals('2-Казка Тищенко', $this->object->genderAutoDetect().'-Казка Тищенко');
    }
    public function testGenDetect1282()
    {
        $this->object->setFirstName('Калина');
        $this->object->setSecondName('Ткач');
        $this->assertEquals('2-Калина Ткач', $this->object->genderAutoDetect().'-Калина Ткач');
    }
    public function testGenDetect1283()
    {
        $this->object->setFirstName('Квітка');
        $this->object->setSecondName('Ткаченко');
        $this->assertEquals('2-Квітка Ткаченко', $this->object->genderAutoDetect().'-Квітка Ткаченко');
    }
    public function testGenDetect1284()
    {
        $this->object->setFirstName('Колодара');
        $this->object->setSecondName('Ткачук');
        $this->assertEquals('2-Колодара Ткачук', $this->object->genderAutoDetect().'-Колодара Ткачук');
    }
    public function testGenDetect1285()
    {
        $this->object->setFirstName('Красава');
        $this->object->setSecondName('Тобілевичі');
        $this->assertEquals('2-Красава Тобілевичі', $this->object->genderAutoDetect().'-Красава Тобілевичі');
    }
    public function testGenDetect1286()
    {
        $this->object->setFirstName('Красимира');
        $this->object->setSecondName('Толочко');
        $this->assertEquals('2-Красимира Толочко', $this->object->genderAutoDetect().'-Красимира Толочко');
    }
    public function testGenDetect1287()
    {
        $this->object->setFirstName('Красновида');
        $this->object->setSecondName('Томенко');
        $this->assertEquals('2-Красновида Томенко', $this->object->genderAutoDetect().'-Красновида Томенко');
    }
    public function testGenDetect1288()
    {
        $this->object->setFirstName('Краснолика');
        $this->object->setSecondName('Трощинські');
        $this->assertEquals('2-Краснолика Трощинські', $this->object->genderAutoDetect().'-Краснолика Трощинські');
    }
    public function testGenDetect1289()
    {
        $this->object->setFirstName('Красуня');
        $this->object->setSecondName('Тулуб');
        $this->assertEquals('2-Красуня Тулуб', $this->object->genderAutoDetect().'-Красуня Тулуб');
    }
    public function testGenDetect1290()
    {
        $this->object->setFirstName('Купава');
        $this->object->setSecondName('Удовенко');
        $this->assertEquals('2-Купава Удовенко', $this->object->genderAutoDetect().'-Купава Удовенко');
    }
    public function testGenDetect1291()
    {
        $this->object->setFirstName('Лада');
        $this->object->setSecondName('Удовиченко');
        $this->assertEquals('2-Лада Удовиченко', $this->object->genderAutoDetect().'-Лада Удовиченко');
    }
    public function testGenDetect1292()
    {
        $this->object->setFirstName('Ладислава');
        $this->object->setSecondName('Усенко');
        $this->assertEquals('2-Ладислава Усенко', $this->object->genderAutoDetect().'-Ладислава Усенко');
    }
    public function testGenDetect1293()
    {
        $this->object->setFirstName('Ладомила');
        $this->object->setSecondName('Філоненко');
        $this->assertEquals('2-Ладомила Філоненко', $this->object->genderAutoDetect().'-Ладомила Філоненко');
    }
    public function testGenDetect1294()
    {
        $this->object->setFirstName('Ладомира');
        $this->object->setSecondName('Феденко');
        $this->assertEquals('2-Ладомира Феденко', $this->object->genderAutoDetect().'-Ладомира Феденко');
    }
    public function testGenDetect1295()
    {
        $this->object->setFirstName('Левина');
        $this->object->setSecondName('Федоренко');
        $this->assertEquals('2-Левина Федоренко', $this->object->genderAutoDetect().'-Левина Федоренко');
    }
    public function testGenDetect1296()
    {
        $this->object->setFirstName('Лель');
        $this->object->setSecondName('Федорук');
        $this->assertEquals('2-Лель Федорук', $this->object->genderAutoDetect().'-Лель Федорук');
    }
    public function testGenDetect1297()
    {
        $this->object->setFirstName('Леля');
        $this->object->setSecondName('Фещенко');
        $this->assertEquals('2-Леля Фещенко', $this->object->genderAutoDetect().'-Леля Фещенко');
    }
    public function testGenDetect1298()
    {
        $this->object->setFirstName('Леся');
        $this->object->setSecondName('Фоменко');
        $this->assertEquals('2-Леся Фоменко', $this->object->genderAutoDetect().'-Леся Фоменко');
    }
    public function testGenDetect1299()
    {
        $this->object->setFirstName('Либідь');
        $this->object->setSecondName('Ханенки');
        $this->assertEquals('2-Либідь Ханенки', $this->object->genderAutoDetect().'-Либідь Ханенки');
    }
    public function testGenDetect1300()
    {
        $this->object->setFirstName('Лілея');
        $this->object->setSecondName('Ханенко');
        $this->assertEquals('2-Лілея Ханенко', $this->object->genderAutoDetect().'-Лілея Ханенко');
    }
    public function testGenDetect1301()
    {
        $this->object->setFirstName('Лоліта');
        $this->object->setSecondName('Харитоненки');
        $this->assertEquals('2-Лоліта Харитоненки', $this->object->genderAutoDetect().'-Лоліта Харитоненки');
    }
    public function testGenDetect1302()
    {
        $this->object->setFirstName('Любава');
        $this->object->setSecondName('Харчук');
        $this->assertEquals('2-Любава Харчук', $this->object->genderAutoDetect().'-Любава Харчук');
    }
    public function testGenDetect1303()
    {
        $this->object->setFirstName('Любаня');
        $this->object->setSecondName('Хміляр');
        $this->assertEquals('2-Любаня Хміляр', $this->object->genderAutoDetect().'-Любаня Хміляр');
    }
    public function testGenDetect1304()
    {
        $this->object->setFirstName('Любислава');
        $this->object->setSecondName('Хмара');
        $this->assertEquals('2-Любислава Хмара', $this->object->genderAutoDetect().'-Любислава Хмара');
    }
    public function testGenDetect1305()
    {
        $this->object->setFirstName('Любов');
        $this->object->setSecondName('Хмельницькі');
        $this->assertEquals('2-Любов Хмельницькі', $this->object->genderAutoDetect().'-Любов Хмельницькі');
    }
    public function testGenDetect1306()
    {
        $this->object->setFirstName('Любомила');
        $this->object->setSecondName('Холодовська');
        $this->assertEquals('2-Любомила Холодовська', $this->object->genderAutoDetect().'-Любомила Холодовська');
    }
    public function testGenDetect1307()
    {
        $this->object->setFirstName('Любомира');
        $this->object->setSecondName('Хоменко');
        $this->assertEquals('2-Любомира Хоменко', $this->object->genderAutoDetect().'-Любомира Хоменко');
    }
    public function testGenDetect1308()
    {
        $this->object->setFirstName('Люборада');
        $this->object->setSecondName('Царук');
        $this->assertEquals('2-Люборада Царук', $this->object->genderAutoDetect().'-Люборада Царук');
    }
    public function testGenDetect1309()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setSecondName('Цибуленко');
        $this->assertEquals('2-Людмила Цибуленко', $this->object->genderAutoDetect().'-Людмила Цибуленко');
    }
    public function testGenDetect1310()
    {
        $this->object->setFirstName('Людомила');
        $this->object->setSecondName('Цюпа');
        $this->assertEquals('2-Людомила Цюпа', $this->object->genderAutoDetect().'-Людомила Цюпа');
    }
    public function testGenDetect1311()
    {
        $this->object->setFirstName('Любослава');
        $this->object->setSecondName('Чабаненко');
        $this->assertEquals('2-Любослава Чабаненко', $this->object->genderAutoDetect().'-Любослава Чабаненко');
    }
    public function testGenDetect1312()
    {
        $this->object->setFirstName('Льоля');
        $this->object->setSecondName('Чередниченко');
        $this->assertEquals('2-Льоля Чередниченко', $this->object->genderAutoDetect().'-Льоля Чередниченко');
    }
    public function testGenDetect1313()
    {
        $this->object->setFirstName('Мавка');
        $this->object->setSecondName('Чернявська');
        $this->assertEquals('2-Мавка Чернявська', $this->object->genderAutoDetect().'-Мавка Чернявська');
    }
    public function testGenDetect1314()
    {
        $this->object->setFirstName('Магадара');
        $this->object->setSecondName('Чорна');
        $this->assertEquals('2-Магадара Чорна', $this->object->genderAutoDetect().'-Магадара Чорна');
    }
    public function testGenDetect1315()
    {
        $this->object->setFirstName('Маїна');
        $this->object->setSecondName('Чорновіл');
        $this->assertEquals('2-Маїна Чорновіл', $this->object->genderAutoDetect().'-Маїна Чорновіл');
    }
    public function testGenDetect1316()
    {
        $this->object->setFirstName('Маківка');
        $this->object->setSecondName('Чуйкевич');
        $this->assertEquals('2-Маківка Чуйкевич', $this->object->genderAutoDetect().'-Маківка Чуйкевич');
    }
    public function testGenDetect1317()
    {
        $this->object->setFirstName('Малуня');
        $this->object->setSecondName('Чумак');
        $this->assertEquals('2-Малуня Чумак', $this->object->genderAutoDetect().'-Малуня Чумак');
    }
    public function testGenDetect1318()
    {
        $this->object->setFirstName('Малуша');
        $this->object->setSecondName('Чумаченко');
        $this->assertEquals('2-Малуша Чумаченко', $this->object->genderAutoDetect().'-Малуша Чумаченко');
    }
    public function testGenDetect1319()
    {
        $this->object->setFirstName('Мальва');
        $this->object->setSecondName('Шахрай');
        $this->assertEquals('2-Мальва Шахрай', $this->object->genderAutoDetect().'-Мальва Шахрай');
    }
    public function testGenDetect1320()
    {
        $this->object->setFirstName('Марута');
        $this->object->setSecondName('Шевченко');
        $this->assertEquals('2-Марута Шевченко', $this->object->genderAutoDetect().'-Марута Шевченко');
    }
    public function testGenDetect1321()
    {
        $this->object->setFirstName('Мая');
        $this->object->setSecondName('Шевчук');
        $this->assertEquals('2-Мая Шевчук', $this->object->genderAutoDetect().'-Мая Шевчук');
    }
    public function testGenDetect1322()
    {
        $this->object->setFirstName('Медорада');
        $this->object->setSecondName('Шелест');
        $this->assertEquals('2-Медорада Шелест', $this->object->genderAutoDetect().'-Медорада Шелест');
    }
    public function testGenDetect1323()
    {
        $this->object->setFirstName('Мечислава');
        $this->object->setSecondName('Шептицькі');
        $this->assertEquals('2-Мечислава Шептицькі', $this->object->genderAutoDetect().'-Мечислава Шептицькі');
    }
    public function testGenDetect1324()
    {
        $this->object->setFirstName('Милана');
        $this->object->setSecondName('Шинкарук');
        $this->assertEquals('2-Милана Шинкарук', $this->object->genderAutoDetect().'-Милана Шинкарук');
    }
    public function testGenDetect1325()
    {
        $this->object->setFirstName('Милована');
        $this->object->setSecondName('Шкрібляк');
        $this->assertEquals('2-Милована Шкрібляк', $this->object->genderAutoDetect().'-Милована Шкрібляк');
    }
    public function testGenDetect1326()
    {
        $this->object->setFirstName('Миловида');
        $this->object->setSecondName('Шнайдер');
        $this->assertEquals('2-Миловида Шнайдер', $this->object->genderAutoDetect().'-Миловида Шнайдер');
    }
    public function testGenDetect1327()
    {
        $this->object->setFirstName('Милодара');
        $this->object->setSecondName('Шовкопляс');
        $this->assertEquals('2-Милодара Шовкопляс', $this->object->genderAutoDetect().'-Милодара Шовкопляс');
    }
    public function testGenDetect1328()
    {
        $this->object->setFirstName('Милослава');
        $this->object->setSecondName('Шульга');
        $this->assertEquals('2-Милослава Шульга', $this->object->genderAutoDetect().'-Милослава Шульга');
    }
    public function testGenDetect1329()
    {
        $this->object->setFirstName('Мирана');
        $this->object->setSecondName('Шухевич');
        $this->assertEquals('2-Мирана Шухевич', $this->object->genderAutoDetect().'-Мирана Шухевич');
    }
    public function testGenDetect1330()
    {
        $this->object->setFirstName('Миробога');
        $this->object->setSecondName('Щерба');
        $this->assertEquals('2-Миробога Щерба', $this->object->genderAutoDetect().'-Миробога Щерба');
    }
    public function testGenDetect1331()
    {
        $this->object->setFirstName('Миролюба');
        $this->object->setSecondName('Щербак');
        $this->assertEquals('2-Миролюба Щербак', $this->object->genderAutoDetect().'-Миролюба Щербак');
    }
    public function testGenDetect1332()
    {
        $this->object->setFirstName('Мирослава');
        $this->object->setSecondName('Щербань');
        $this->assertEquals('2-Мирослава Щербань', $this->object->genderAutoDetect().'-Мирослава Щербань');
    }
    public function testGenDetect1333()
    {
        $this->object->setFirstName('Млада');
        $this->object->setSecondName('Юрженко');
        $this->assertEquals('2-Млада Юрженко', $this->object->genderAutoDetect().'-Млада Юрженко');
    }
    public function testGenDetect1334()
    {
        $this->object->setFirstName('Мокрина');
        $this->object->setSecondName('Юрченко');
        $this->assertEquals('2-Мокрина Юрченко', $this->object->genderAutoDetect().'-Мокрина Юрченко');
    }
    public function testGenDetect1335()
    {
        $this->object->setFirstName('Мстислава');
        $this->object->setSecondName('Юхименко');
        $this->assertEquals('2-Мстислава Юхименко', $this->object->genderAutoDetect().'-Мстислава Юхименко');
    }
    public function testGenDetect1336()
    {
        $this->object->setFirstName('Мудролюба');
        $this->object->setSecondName('Ющенко');
        $this->assertEquals('2-Мудролюба Ющенко', $this->object->genderAutoDetect().'-Мудролюба Ющенко');
    }
    public function testGenDetect1337()
    {
        $this->object->setFirstName('Надія');
        $this->object->setSecondName('Яковенко');
        $this->assertEquals('2-Надія Яковенко', $this->object->genderAutoDetect().'-Надія Яковенко');
    }
    public function testGenDetect1338()
    {
        $this->object->setFirstName('Найда');
        $this->object->setSecondName('Яковина');
        $this->assertEquals('2-Найда Яковина', $this->object->genderAutoDetect().'-Найда Яковина');
    }
    public function testGenDetect1339()
    {
        $this->object->setFirstName('Найдена');
        $this->object->setSecondName('Янко');
        $this->assertEquals('2-Найдена Янко', $this->object->genderAutoDetect().'-Найдена Янко');
    }
    public function testGenDetect1340()
    {
        $this->object->setFirstName('Наслава');
        $this->object->setSecondName('Ярема');
        $this->assertEquals('2-Наслава Ярема', $this->object->genderAutoDetect().'-Наслава Ярема');
    }
    public function testGenDetect1341()
    {
        $this->object->setFirstName('Немира');
        $this->object->setSecondName('Яременко');
        $this->assertEquals('2-Немира Яременко', $this->object->genderAutoDetect().'-Немира Яременко');
    }
    public function testGenDetect1342()
    {
        $this->object->setFirstName('Нігослава');
        $this->object->setSecondName('Яремко');
        $this->assertEquals('2-Нігослава Яремко', $this->object->genderAutoDetect().'-Нігослава Яремко');
    }
    public function testGenDetect1343()
    {
        $this->object->setFirstName('Незабудка');
        $this->object->setSecondName('Яремчук');
        $this->assertEquals('2-Незабудка Яремчук', $this->object->genderAutoDetect().'-Незабудка Яремчук');
    }
    public function testGenDetect1344()
    {
        $this->object->setFirstName('Огняна');
        $this->object->setSecondName('Ярмоленко');
        $this->assertEquals('2-Огняна Ярмоленко', $this->object->genderAutoDetect().'-Огняна Ярмоленко');
    }
    public function testGenDetect1345()
    {
        $this->object->setFirstName('Оримира');
        $this->object->setSecondName('Ярмолюк');
        $this->assertEquals('2-Оримира Ярмолюк', $this->object->genderAutoDetect().'-Оримира Ярмолюк');
    }
    public function testGenDetect1346()
    {
        $this->object->setFirstName('Орина');
        $this->object->setSecondName('Ярошенко');
        $this->assertEquals('2-Орина Ярошенко', $this->object->genderAutoDetect().'-Орина Ярошенко');
    }
    public function testGenDetect1347()
    {
        $this->object->setFirstName('Орислава');
        $this->object->setSecondName('Яценко');
        $this->assertEquals('2-Орислава Яценко', $this->object->genderAutoDetect().'-Орислава Яценко');
    }
    public function testGenDetect1348()
    {
        $this->object->setFirstName('Орися');
        $this->object->setSecondName('Ященко');
        $this->assertEquals('2-Орися Ященко', $this->object->genderAutoDetect().'-Орися Ященко');
    }
    public function testGenDetect1349()
    {
        $this->object->setFirstName('Оріяна');
        $this->object->setSecondName('Ґалаґан');
        $this->assertEquals('2-Оріяна Ґалаґан', $this->object->genderAutoDetect().'-Оріяна Ґалаґан');
    }
    public function testGenDetect1350()
    {
        $this->object->setFirstName('Орогоста');
        $this->object->setSecondName('Євсєєва');
        $this->assertEquals('2-Орогоста Євсєєва', $this->object->genderAutoDetect().'-Орогоста Євсєєва');
    }
    public function testGenDetect1351()
    {
        $this->object->setFirstName('Острозора');
        $this->object->setSecondName('Єгорова');
        $this->assertEquals('2-Острозора Єгорова', $this->object->genderAutoDetect().'-Острозора Єгорова');
    }
    public function testGenDetect1352()
    {
        $this->object->setFirstName('Остромира');
        $this->object->setSecondName('Єлізарова');
        $this->assertEquals('2-Остромира Єлізарова', $this->object->genderAutoDetect().'-Остромира Єлізарова');
    }
    public function testGenDetect1353()
    {
        $this->object->setFirstName('Осмомисла');
        $this->object->setSecondName('Єрмилова');
        $this->assertEquals('2-Осмомисла Єрмилова', $this->object->genderAutoDetect().'-Осмомисла Єрмилова');
    }
    public function testGenDetect1354()
    {
        $this->object->setFirstName('Остромова');
        $this->object->setSecondName('Єрофєєва');
        $this->assertEquals('2-Остромова Єрофєєва', $this->object->genderAutoDetect().'-Остромова Єрофєєва');
    }
    public function testGenDetect1355()
    {
        $this->object->setFirstName('Пава');
        $this->object->setSecondName('Єршова');
        $this->assertEquals('2-Пава Єршова', $this->object->genderAutoDetect().'-Пава Єршова');
    }
    public function testGenDetect1356()
    {
        $this->object->setFirstName('Палажка');
        $this->object->setSecondName('Єфімова');
        $this->assertEquals('2-Палажка Єфімова', $this->object->genderAutoDetect().'-Палажка Єфімова');
    }
    public function testGenDetect1357()
    {
        $this->object->setFirstName('Палазга');
        $this->object->setSecondName('Єфремова');
        $this->assertEquals('2-Палазга Єфремова', $this->object->genderAutoDetect().'-Палазга Єфремова');
    }
    public function testGenDetect1358()
    {
        $this->object->setFirstName('Перелюба');
        $this->object->setSecondName('Іванова');
        $this->assertEquals('2-Перелюба Іванова', $this->object->genderAutoDetect().'-Перелюба Іванова');
    }
    public function testGenDetect1359()
    {
        $this->object->setFirstName('Перемила');
        $this->object->setSecondName('Ігнатова');
        $this->assertEquals('2-Перемила Ігнатова', $this->object->genderAutoDetect().'-Перемила Ігнатова');
    }
    public function testGenDetect1360()
    {
        $this->object->setFirstName('Перемисла');
        $this->object->setSecondName('Іллюшина');
        $this->assertEquals('2-Перемисла Іллюшина', $this->object->genderAutoDetect().'-Перемисла Іллюшина');
    }
    public function testGenDetect1361()
    {
        $this->object->setFirstName('Півонія');
        $this->object->setSecondName('Ільїна');
        $this->assertEquals('2-Півонія Ільїна', $this->object->genderAutoDetect().'-Півонія Ільїна');
    }
    public function testGenDetect1362()
    {
        $this->object->setFirstName('Позвізда');
        $this->object->setSecondName('Аєдоницька');
        $this->assertEquals('2-Позвізда Аєдоницька', $this->object->genderAutoDetect().'-Позвізда Аєдоницька');
    }
    public function testGenDetect1363()
    {
        $this->object->setFirstName('Полеза');
        $this->object->setSecondName('Абатурова');
        $this->assertEquals('2-Полеза Абатурова', $this->object->genderAutoDetect().'-Полеза Абатурова');
    }
    public function testGenDetect1364()
    {
        $this->object->setFirstName('Поляна');
        $this->object->setSecondName('Абдулова');
        $this->assertEquals('2-Поляна Абдулова', $this->object->genderAutoDetect().'-Поляна Абдулова');
    }
    public function testGenDetect1365()
    {
        $this->object->setFirstName('Потішана');
        $this->object->setSecondName('Абрамова');
        $this->assertEquals('2-Потішана Абрамова', $this->object->genderAutoDetect().'-Потішана Абрамова');
    }
    public function testGenDetect1366()
    {
        $this->object->setFirstName('Предслава');
        $this->object->setSecondName('Авілова');
        $this->assertEquals('2-Предслава Авілова', $this->object->genderAutoDetect().'-Предслава Авілова');
    }
    public function testGenDetect1367()
    {
        $this->object->setFirstName('Рада');
        $this->object->setSecondName('Авдєєнко');
        $this->assertEquals('2-Рада Авдєєнко', $this->object->genderAutoDetect().'-Рада Авдєєнко');
    }
    public function testGenDetect1368()
    {
        $this->object->setFirstName('Радана');
        $this->object->setSecondName('Аврамова');
        $this->assertEquals('2-Радана Аврамова', $this->object->genderAutoDetect().'-Радана Аврамова');
    }
    public function testGenDetect1369()
    {
        $this->object->setFirstName('Радимира');
        $this->object->setSecondName('Алексєєва');
        $this->assertEquals('2-Радимира Алексєєва', $this->object->genderAutoDetect().'-Радимира Алексєєва');
    }
    public function testGenDetect1370()
    {
        $this->object->setFirstName('Радогоста');
        $this->object->setSecondName('Александрова');
        $this->assertEquals('2-Радогоста Александрова', $this->object->genderAutoDetect().'-Радогоста Александрова');
    }
    public function testGenDetect1371()
    {
        $this->object->setFirstName('Радомира');
        $this->object->setSecondName('Альошина');
        $this->assertEquals('2-Радомира Альошина', $this->object->genderAutoDetect().'-Радомира Альошина');
    }
    public function testGenDetect1372()
    {
        $this->object->setFirstName('Радослава');
        $this->object->setSecondName('Анісімова');
        $this->assertEquals('2-Радослава Анісімова', $this->object->genderAutoDetect().'-Радослава Анісімова');
    }
    public function testGenDetect1373()
    {
        $this->object->setFirstName('Рідна');
        $this->object->setSecondName('Анісова');
        $this->assertEquals('2-Рідна Анісова', $this->object->genderAutoDetect().'-Рідна Анісова');
    }
    public function testGenDetect1374()
    {
        $this->object->setFirstName('Рогволода');
        $this->object->setSecondName('Ананьєва');
        $this->assertEquals('2-Рогволода Ананьєва', $this->object->genderAutoDetect().'-Рогволода Ананьєва');
    }
    public function testGenDetect1375()
    {
        $this->object->setFirstName('Рогніда');
        $this->object->setSecondName('Андріанова');
        $this->assertEquals('2-Рогніда Андріанова', $this->object->genderAutoDetect().'-Рогніда Андріанова');
    }
    public function testGenDetect1376()
    {
        $this->object->setFirstName('Родослава');
        $this->object->setSecondName('Андріяшева');
        $this->assertEquals('2-Родослава Андріяшева', $this->object->genderAutoDetect().'-Родослава Андріяшева');
    }
    public function testGenDetect1377()
    {
        $this->object->setFirstName('Рожана');
        $this->object->setSecondName('Андреєва');
        $this->assertEquals('2-Рожана Андреєва', $this->object->genderAutoDetect().'-Рожана Андреєва');
    }
    public function testGenDetect1378()
    {
        $this->object->setFirstName('Роксолана');
        $this->object->setSecondName('Антипова');
        $this->assertEquals('2-Роксолана Антипова', $this->object->genderAutoDetect().'-Роксолана Антипова');
    }
    public function testGenDetect1379()
    {
        $this->object->setFirstName('Ромашка');
        $this->object->setSecondName('Антонова');
        $this->assertEquals('2-Ромашка Антонова', $this->object->genderAutoDetect().'-Ромашка Антонова');
    }
    public function testGenDetect1380()
    {
        $this->object->setFirstName('Росава');
        $this->object->setSecondName('Анциферова');
        $this->assertEquals('2-Росава Анциферова', $this->object->genderAutoDetect().'-Росава Анциферова');
    }
    public function testGenDetect1381()
    {
        $this->object->setFirstName('Росина');
        $this->object->setSecondName('Апухтіна');
        $this->assertEquals('2-Росина Апухтіна', $this->object->genderAutoDetect().'-Росина Апухтіна');
    }
    public function testGenDetect1382()
    {
        $this->object->setFirstName('Ростислава');
        $this->object->setSecondName('Арбузова');
        $this->assertEquals('2-Ростислава Арбузова', $this->object->genderAutoDetect().'-Ростислава Арбузова');
    }
    public function testGenDetect1383()
    {
        $this->object->setFirstName('Ростичара');
        $this->object->setSecondName('Аржанова');
        $this->assertEquals('2-Ростичара Аржанова', $this->object->genderAutoDetect().'-Ростичара Аржанова');
    }
    public function testGenDetect1384()
    {
        $this->object->setFirstName('Ростуня');
        $this->object->setSecondName('Архипова');
        $this->assertEquals('2-Ростуня Архипова', $this->object->genderAutoDetect().'-Ростуня Архипова');
    }
    public function testGenDetect1385()
    {
        $this->object->setFirstName('Рудана');
        $this->object->setSecondName('Арцибушева');
        $this->assertEquals('2-Рудана Арцибушева', $this->object->genderAutoDetect().'-Рудана Арцибушева');
    }
    public function testGenDetect1386()
    {
        $this->object->setFirstName('Ружа');
        $this->object->setSecondName('Астраханцева');
        $this->assertEquals('2-Ружа Астраханцева', $this->object->genderAutoDetect().'-Ружа Астраханцева');
    }
    public function testGenDetect1387()
    {
        $this->object->setFirstName('Русана');
        $this->object->setSecondName('Афіногенова');
        $this->assertEquals('2-Русана Афіногенова', $this->object->genderAutoDetect().'-Русана Афіногенова');
    }
    public function testGenDetect1388()
    {
        $this->object->setFirstName('Русудана');
        $this->object->setSecondName('Афанасьєва');
        $this->assertEquals('2-Русудана Афанасьєва', $this->object->genderAutoDetect().'-Русудана Афанасьєва');
    }
    public function testGenDetect1389()
    {
        $this->object->setFirstName('Русява');
        $this->object->setSecondName('Бєлова');
        $this->assertEquals('2-Русява Бєлова', $this->object->genderAutoDetect().'-Русява Бєлова');
    }
    public function testGenDetect1390()
    {
        $this->object->setFirstName('Русявка');
        $this->object->setSecondName('Бєлоглазова');
        $this->assertEquals('2-Русявка Бєлоглазова', $this->object->genderAutoDetect().'-Русявка Бєлоглазова');
    }
    public function testGenDetect1391()
    {
        $this->object->setFirstName('Рута');
        $this->object->setSecondName('Бєлоусова');
        $this->assertEquals('2-Рута Бєлоусова', $this->object->genderAutoDetect().'-Рута Бєлоусова');
    }
    public function testGenDetect1392()
    {
        $this->object->setFirstName('Світана');
        $this->object->setSecondName('Бєляєва');
        $this->assertEquals('2-Світана Бєляєва', $this->object->genderAutoDetect().'-Світана Бєляєва');
    }
    public function testGenDetect1393()
    {
        $this->object->setFirstName('Світлана');
        $this->object->setSecondName('Бібикова');
        $this->assertEquals('2-Світлана Бібикова', $this->object->genderAutoDetect().'-Світлана Бібикова');
    }
    public function testGenDetect1394()
    {
        $this->object->setFirstName('Світовида');
        $this->object->setSecondName('Бажанова');
        $this->assertEquals('2-Світовида Бажанова', $this->object->genderAutoDetect().'-Світовида Бажанова');
    }
    public function testGenDetect1395()
    {
        $this->object->setFirstName('Світогора');
        $this->object->setSecondName('Баранова');
        $this->assertEquals('2-Світогора Баранова', $this->object->genderAutoDetect().'-Світогора Баранова');
    }
    public function testGenDetect1396()
    {
        $this->object->setFirstName('Світодара');
        $this->object->setSecondName('Баришнікова');
        $this->assertEquals('2-Світодара Баришнікова', $this->object->genderAutoDetect().'-Світодара Баришнікова');
    }
    public function testGenDetect1397()
    {
        $this->object->setFirstName('Світозара');
        $this->object->setSecondName('Барсова');
        $this->assertEquals('2-Світозара Барсова', $this->object->genderAutoDetect().'-Світозара Барсова');
    }
    public function testGenDetect1398()
    {
        $this->object->setFirstName('Світолика');
        $this->object->setSecondName('Батюшкова');
        $this->assertEquals('2-Світолика Батюшкова', $this->object->genderAutoDetect().'-Світолика Батюшкова');
    }
    public function testGenDetect1399()
    {
        $this->object->setFirstName('Світолюба');
        $this->object->setSecondName('Бикова');
        $this->assertEquals('2-Світолюба Бикова', $this->object->genderAutoDetect().'-Світолюба Бикова');
    }
    public function testGenDetect1400()
    {
        $this->object->setFirstName('Світослава');
        $this->object->setSecondName('Блохіна');
        $this->assertEquals('2-Світослава Блохіна', $this->object->genderAutoDetect().'-Світослава Блохіна');
    }
    public function testGenDetect1401()
    {
        $this->object->setFirstName('Світояра');
        $this->object->setSecondName('Боброва');
        $this->assertEquals('2-Світояра Боброва', $this->object->genderAutoDetect().'-Світояра Боброва');
    }
    public function testGenDetect1402()
    {
        $this->object->setFirstName('Свободана');
        $this->object->setSecondName('Богданова');
        $this->assertEquals('2-Свободана Богданова', $this->object->genderAutoDetect().'-Свободана Богданова');
    }
    public function testGenDetect1403()
    {
        $this->object->setFirstName('Святогора');
        $this->object->setSecondName('Богомазова');
        $this->assertEquals('2-Святогора Богомазова', $this->object->genderAutoDetect().'-Святогора Богомазова');
    }
    public function testGenDetect1404()
    {
        $this->object->setFirstName('Святолюба');
        $this->object->setSecondName('Бойкова');
        $this->assertEquals('2-Святолюба Бойкова', $this->object->genderAutoDetect().'-Святолюба Бойкова');
    }
    public function testGenDetect1405()
    {
        $this->object->setFirstName('Святослава');
        $this->object->setSecondName('Большакова');
        $this->assertEquals('2-Святослава Большакова', $this->object->genderAutoDetect().'-Святослава Большакова');
    }
    public function testGenDetect1406()
    {
        $this->object->setFirstName('Силата');
        $this->object->setSecondName('Борисова');
        $this->assertEquals('2-Силата Борисова', $this->object->genderAutoDetect().'-Силата Борисова');
    }
    public function testGenDetect1407()
    {
        $this->object->setFirstName('Силолюба');
        $this->object->setSecondName('Бочкова');
        $this->assertEquals('2-Силолюба Бочкова', $this->object->genderAutoDetect().'-Силолюба Бочкова');
    }
    public function testGenDetect1408()
    {
        $this->object->setFirstName('Силослава');
        $this->object->setSecondName('Бризгалова');
        $this->assertEquals('2-Силослава Бризгалова', $this->object->genderAutoDetect().'-Силослава Бризгалова');
    }
    public function testGenDetect1409()
    {
        $this->object->setFirstName('Синезора');
        $this->object->setSecondName('Брусилова');
        $this->assertEquals('2-Синезора Брусилова', $this->object->genderAutoDetect().'-Синезора Брусилова');
    }
    public function testGenDetect1410()
    {
        $this->object->setFirstName('Синьоока');
        $this->object->setSecondName('Бутурліна');
        $this->assertEquals('2-Синьоока Бутурліна', $this->object->genderAutoDetect().'-Синьоока Бутурліна');
    }
    public function testGenDetect1411()
    {
        $this->object->setFirstName('Сіверина');
        $this->object->setSecondName('Бутусова');
        $this->assertEquals('2-Сіверина Бутусова', $this->object->genderAutoDetect().'-Сіверина Бутусова');
    }
    public function testGenDetect1412()
    {
        $this->object->setFirstName('Слава');
        $this->object->setSecondName('Варламова');
        $this->assertEquals('2-Слава Варламова', $this->object->genderAutoDetect().'-Слава Варламова');
    }
    public function testGenDetect1413()
    {
        $this->object->setFirstName('Славина');
        $this->object->setSecondName('Васильєва');
        $this->assertEquals('2-Славина Васильєва', $this->object->genderAutoDetect().'-Славина Васильєва');
    }
    public function testGenDetect1414()
    {
        $this->object->setFirstName('Славолюба');
        $this->object->setSecondName('Виноградова');
        $this->assertEquals('2-Славолюба Виноградова', $this->object->genderAutoDetect().'-Славолюба Виноградова');
    }
    public function testGenDetect1415()
    {
        $this->object->setFirstName('Славомила');
        $this->object->setSecondName('Власова');
        $this->assertEquals('2-Славомила Власова', $this->object->genderAutoDetect().'-Славомила Власова');
    }
    public function testGenDetect1416()
    {
        $this->object->setFirstName('Сміяна');
        $this->object->setSecondName('Внукова');
        $this->assertEquals('2-Сміяна Внукова', $this->object->genderAutoDetect().'-Сміяна Внукова');
    }
    public function testGenDetect1417()
    {
        $this->object->setFirstName('Сніжана');
        $this->object->setSecondName('Волкова');
        $this->assertEquals('2-Сніжана Волкова', $this->object->genderAutoDetect().'-Сніжана Волкова');
    }
    public function testGenDetect1418()
    {
        $this->object->setFirstName('Сніжинка');
        $this->object->setSecondName('Воробей');
        $this->assertEquals('2-Сніжинка Воробей', $this->object->genderAutoDetect().'-Сніжинка Воробей');
    }
    public function testGenDetect1419()
    {
        $this->object->setFirstName('Собіслава');
        $this->object->setSecondName('Воробйова');
        $this->assertEquals('2-Собіслава Воробйова', $this->object->genderAutoDetect().'-Собіслава Воробйова');
    }
    public function testGenDetect1420()
    {
        $this->object->setFirstName('Соловія');
        $this->object->setSecondName('Вороніна');
        $this->assertEquals('2-Соловія Вороніна', $this->object->genderAutoDetect().'-Соловія Вороніна');
    }
    public function testGenDetect1421()
    {
        $this->object->setFirstName('Сологуба');
        $this->object->setSecondName('Воронцова');
        $this->assertEquals('2-Сологуба Воронцова', $this->object->genderAutoDetect().'-Сологуба Воронцова');
    }
    public function testGenDetect1422()
    {
        $this->object->setFirstName('Сонцевида');
        $this->object->setSecondName('Ворошилова');
        $this->assertEquals('2-Сонцевида Ворошилова', $this->object->genderAutoDetect().'-Сонцевида Ворошилова');
    }
    public function testGenDetect1423()
    {
        $this->object->setFirstName('Сонцедара');
        $this->object->setSecondName('Гаврилова');
        $this->assertEquals('2-Сонцедара Гаврилова', $this->object->genderAutoDetect().'-Сонцедара Гаврилова');
    }
    public function testGenDetect1424()
    {
        $this->object->setFirstName('Сонцелика');
        $this->object->setSecondName('Герасимова');
        $this->assertEquals('2-Сонцелика Герасимова', $this->object->genderAutoDetect().'-Сонцелика Герасимова');
    }
    public function testGenDetect1425()
    {
        $this->object->setFirstName('Сонцеслава');
        $this->object->setSecondName('Гончарова');
        $this->assertEquals('2-Сонцеслава Гончарова', $this->object->genderAutoDetect().'-Сонцеслава Гончарова');
    }
    public function testGenDetect1426()
    {
        $this->object->setFirstName('Ссанимира');
        $this->object->setSecondName('Горбунова');
        $this->assertEquals('2-Ссанимира Горбунова', $this->object->genderAutoDetect().'-Ссанимира Горбунова');
    }
    public function testGenDetect1427()
    {
        $this->object->setFirstName('Станислава');
        $this->object->setSecondName('Горчакова');
        $this->assertEquals('2-Станислава Горчакова', $this->object->genderAutoDetect().'-Станислава Горчакова');
    }
    public function testGenDetect1428()
    {
        $this->object->setFirstName('Судимира');
        $this->object->setSecondName('Горшкова');
        $this->assertEquals('2-Судимира Горшкова', $this->object->genderAutoDetect().'-Судимира Горшкова');
    }
    public function testGenDetect1429()
    {
        $this->object->setFirstName('Судислава');
        $this->object->setSecondName('Громова');
        $this->assertEquals('2-Судислава Громова', $this->object->genderAutoDetect().'-Судислава Громова');
    }
    public function testGenDetect1430()
    {
        $this->object->setFirstName('Татолюба');
        $this->object->setSecondName('Гусєва');
        $this->assertEquals('2-Татолюба Гусєва', $this->object->genderAutoDetect().'-Татолюба Гусєва');
    }
    public function testGenDetect1431()
    {
        $this->object->setFirstName('Твердислава');
        $this->object->setSecondName('Давидова');
        $this->assertEquals('2-Твердислава Давидова', $this->object->genderAutoDetect().'-Твердислава Давидова');
    }
    public function testGenDetect1432()
    {
        $this->object->setFirstName('Твердогоста');
        $this->object->setSecondName('Данилова');
        $this->assertEquals('2-Твердогоста Данилова', $this->object->genderAutoDetect().'-Твердогоста Данилова');
    }
    public function testGenDetect1433()
    {
        $this->object->setFirstName('Творимира');
        $this->object->setSecondName('Дарагана');
        $this->assertEquals('2-Творимира Дарагана', $this->object->genderAutoDetect().'-Творимира Дарагана');
    }
    public function testGenDetect1434()
    {
        $this->object->setFirstName('Творислава');
        $this->object->setSecondName('Дементьєва');
        $this->assertEquals('2-Творислава Дементьєва', $this->object->genderAutoDetect().'-Творислава Дементьєва');
    }
    public function testGenDetect1435()
    {
        $this->object->setFirstName('Толигніва');
        $this->object->setSecondName('Денисова');
        $this->assertEquals('2-Толигніва Денисова', $this->object->genderAutoDetect().'-Толигніва Денисова');
    }
    public function testGenDetect1436()
    {
        $this->object->setFirstName('Тонкостана');
        $this->object->setSecondName('Дмитрієва');
        $this->assertEquals('2-Тонкостана Дмитрієва', $this->object->genderAutoDetect().'-Тонкостана Дмитрієва');
    }
    public function testGenDetect1437()
    {
        $this->object->setFirstName('Трояна');
        $this->object->setSecondName('Добролюбова');
        $this->assertEquals('2-Трояна Добролюбова', $this->object->genderAutoDetect().'-Трояна Добролюбова');
    }
    public function testGenDetect1438()
    {
        $this->object->setFirstName('Хвала');
        $this->object->setSecondName('Донськая');
        $this->assertEquals('2-Хвала Донськая', $this->object->genderAutoDetect().'-Хвала Донськая');
    }
    public function testGenDetect1439()
    {
        $this->object->setFirstName('Хвалибого');
        $this->object->setSecondName('Дорофєєва');
        $this->assertEquals('2-Хвалибого Дорофєєва', $this->object->genderAutoDetect().'-Хвалибого Дорофєєва');
    }
    public function testGenDetect1440()
    {
        $this->object->setFirstName('Хвалимира');
        $this->object->setSecondName('Дуброва');
        $this->assertEquals('2-Хвалимира Дуброва', $this->object->genderAutoDetect().'-Хвалимира Дуброва');
    }
    public function testGenDetect1441()
    {
        $this->object->setFirstName('Хвалина');
        $this->object->setSecondName('Железнякова');
        $this->assertEquals('2-Хвалина Железнякова', $this->object->genderAutoDetect().'-Хвалина Железнякова');
    }
    public function testGenDetect1442()
    {
        $this->object->setFirstName('Хорошка');
        $this->object->setSecondName('Жердєва');
        $this->assertEquals('2-Хорошка Жердєва', $this->object->genderAutoDetect().'-Хорошка Жердєва');
    }
    public function testGenDetect1443()
    {
        $this->object->setFirstName('Хорошуня');
        $this->object->setSecondName('Жукова');
        $this->assertEquals('2-Хорошуня Жукова', $this->object->genderAutoDetect().'-Хорошуня Жукова');
    }
    public function testGenDetect1444()
    {
        $this->object->setFirstName('Хотимра');
        $this->object->setSecondName('Журавльова');
        $this->assertEquals('2-Хотимра Журавльова', $this->object->genderAutoDetect().'-Хотимра Журавльова');
    }
    public function testGenDetect1445()
    {
        $this->object->setFirstName('Хотяна');
        $this->object->setSecondName('Заварова');
        $this->assertEquals('2-Хотяна Заварова', $this->object->genderAutoDetect().'-Хотяна Заварова');
    }
    public function testGenDetect1446()
    {
        $this->object->setFirstName('Хранимира');
        $this->object->setSecondName('Загарова');
        $this->assertEquals('2-Хранимира Загарова', $this->object->genderAutoDetect().'-Хранимира Загарова');
    }
    public function testGenDetect1447()
    {
        $this->object->setFirstName('Худана');
        $this->object->setSecondName('Зайцева');
        $this->assertEquals('2-Худана Зайцева', $this->object->genderAutoDetect().'-Худана Зайцева');
    }
    public function testGenDetect1448()
    {
        $this->object->setFirstName('Цвітана');
        $this->object->setSecondName('Захарова');
        $this->assertEquals('2-Цвітана Захарова', $this->object->genderAutoDetect().'-Цвітана Захарова');
    }
    public function testGenDetect1449()
    {
        $this->object->setFirstName('Чайка');
        $this->object->setSecondName('Звєрєва');
        $this->assertEquals('2-Чайка Звєрєва', $this->object->genderAutoDetect().'-Чайка Звєрєва');
    }
    public function testGenDetect1450()
    {
        $this->object->setFirstName('Чарівна');
        $this->object->setSecondName('Зерова');
        $this->assertEquals('2-Чарівна Зерова', $this->object->genderAutoDetect().'-Чарівна Зерова');
    }
    public function testGenDetect1451()
    {
        $this->object->setFirstName('Чарівниця');
        $this->object->setSecondName('Золотухіна');
        $this->assertEquals('2-Чарівниця Золотухіна', $this->object->genderAutoDetect().'-Чарівниця Золотухіна');
    }
    public function testGenDetect1452()
    {
        $this->object->setFirstName('Чаруна');
        $this->object->setSecondName('Зубова');
        $this->assertEquals('2-Чаруна Зубова', $this->object->genderAutoDetect().'-Чаруна Зубова');
    }
    public function testGenDetect1453()
    {
        $this->object->setFirstName('Чеслава');
        $this->object->setSecondName('Казакова');
        $this->assertEquals('2-Чеслава Казакова', $this->object->genderAutoDetect().'-Чеслава Казакова');
    }
    public function testGenDetect1454()
    {
        $this->object->setFirstName('Ява');
        $this->object->setSecondName('Калініна');
        $this->assertEquals('2-Ява Калініна', $this->object->genderAutoDetect().'-Ява Калініна');
    }
    public function testGenDetect1455()
    {
        $this->object->setFirstName('Яворина');
        $this->object->setSecondName('Калашникова');
        $this->assertEquals('2-Яворина Калашникова', $this->object->genderAutoDetect().'-Яворина Калашникова');
    }
    public function testGenDetect1456()
    {
        $this->object->setFirstName('Ялина');
        $this->object->setSecondName('Карпова');
        $this->assertEquals('2-Ялина Карпова', $this->object->genderAutoDetect().'-Ялина Карпова');
    }
    public function testGenDetect1457()
    {
        $this->object->setFirstName('Ярина');
        $this->object->setSecondName('Каштанова');
        $this->assertEquals('2-Ярина Каштанова', $this->object->genderAutoDetect().'-Ярина Каштанова');
    }
    public function testGenDetect1458()
    {
        $this->object->setFirstName('Яромила');
        $this->object->setSecondName('Кисельова');
        $this->assertEquals('2-Яромила Кисельова', $this->object->genderAutoDetect().'-Яромила Кисельова');
    }
    public function testGenDetect1459()
    {
        $this->object->setFirstName('Яромира');
        $this->object->setSecondName('Ковальова');
        $this->assertEquals('2-Яромира Ковальова', $this->object->genderAutoDetect().'-Яромира Ковальова');
    }
    public function testGenDetect1460()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setSecondName('Кожевникова');
        $this->assertEquals('2-Ярослава Кожевникова', $this->object->genderAutoDetect().'-Ярослава Кожевникова');
    }
    public function testGenDetect1461()
    {
        $this->object->setFirstName('Ясна');
        $this->object->setSecondName('Козлова');
        $this->assertEquals('2-Ясна Козлова', $this->object->genderAutoDetect().'-Ясна Козлова');
    }
    public function testGenDetect1462()
    {
        $this->object->setFirstName('Ясновида');
        $this->object->setSecondName('Колесникова');
        $this->assertEquals('2-Ясновида Колесникова', $this->object->genderAutoDetect().'-Ясновида Колесникова');
    }
    public function testGenDetect1463()
    {
        $this->object->setFirstName('Ясногора');
        $this->object->setSecondName('Кольцова');
        $this->assertEquals('2-Ясногора Кольцова', $this->object->genderAutoDetect().'-Ясногора Кольцова');
    }
    public function testGenDetect1464()
    {
        $this->object->setFirstName('Яснолика');
        $this->object->setSecondName('Комарова');
        $this->assertEquals('2-Яснолика Комарова', $this->object->genderAutoDetect().'-Яснолика Комарова');
    }
    public function testGenDetect1465()
    {
        $this->object->setFirstName('Яснослава');
        $this->object->setSecondName('Коновалова');
        $this->assertEquals('2-Яснослава Коновалова', $this->object->genderAutoDetect().'-Яснослава Коновалова');
    }
    public function testGenDetect1466()
    {
        $this->object->setFirstName('Августа');
        $this->object->setSecondName('Конюхова');
        $this->assertEquals('2-Августа Конюхова', $this->object->genderAutoDetect().'-Августа Конюхова');
    }
    public function testGenDetect1467()
    {
        $this->object->setFirstName('Аврелія');
        $this->object->setSecondName('Копилова');
        $this->assertEquals('2-Аврелія Копилова', $this->object->genderAutoDetect().'-Аврелія Копилова');
    }
    public function testGenDetect1468()
    {
        $this->object->setFirstName('Аврора');
        $this->object->setSecondName('Кормильцева');
        $this->assertEquals('2-Аврора Кормильцева', $this->object->genderAutoDetect().'-Аврора Кормильцева');
    }
    public function testGenDetect1469()
    {
        $this->object->setFirstName('Агнія');
        $this->object->setSecondName('Коробова');
        $this->assertEquals('2-Агнія Коробова', $this->object->genderAutoDetect().'-Агнія Коробова');
    }
    public function testGenDetect1470()
    {
        $this->object->setFirstName('Агрипина');
        $this->object->setSecondName('Коровкіна');
        $this->assertEquals('2-Агрипина Коровкіна', $this->object->genderAutoDetect().'-Агрипина Коровкіна');
    }
    public function testGenDetect1471()
    {
        $this->object->setFirstName('Ада');
        $this->object->setSecondName('Корольова');
        $this->assertEquals('2-Ада Корольова', $this->object->genderAutoDetect().'-Ада Корольова');
    }
    public function testGenDetect1472()
    {
        $this->object->setFirstName('Аделаїда');
        $this->object->setSecondName('Котова');
        $this->assertEquals('2-Аделаїда Котова', $this->object->genderAutoDetect().'-Аделаїда Котова');
    }
    public function testGenDetect1473()
    {
        $this->object->setFirstName('Адріана');
        $this->object->setSecondName('Краснова');
        $this->assertEquals('2-Адріана Краснова', $this->object->genderAutoDetect().'-Адріана Краснова');
    }
    public function testGenDetect1474()
    {
        $this->object->setFirstName('Аза');
        $this->object->setSecondName('Крилова');
        $this->assertEquals('2-Аза Крилова', $this->object->genderAutoDetect().'-Аза Крилова');
    }
    public function testGenDetect1475()
    {
        $this->object->setFirstName('Азалія');
        $this->object->setSecondName('Кримова');
        $this->assertEquals('2-Азалія Кримова', $this->object->genderAutoDetect().'-Азалія Кримова');
    }
    public function testGenDetect1476()
    {
        $this->object->setFirstName('Аліна');
        $this->object->setSecondName('Крюкова');
        $this->assertEquals('2-Аліна Крюкова', $this->object->genderAutoDetect().'-Аліна Крюкова');
    }
    public function testGenDetect1477()
    {
        $this->object->setFirstName('Аліса');
        $this->object->setSecondName('Кудряшова');
        $this->assertEquals('2-Аліса Кудряшова', $this->object->genderAutoDetect().'-Аліса Кудряшова');
    }
    public function testGenDetect1478()
    {
        $this->object->setFirstName('Алла');
        $this->object->setSecondName('Кузнецова');
        $this->assertEquals('2-Алла Кузнецова', $this->object->genderAutoDetect().'-Алла Кузнецова');
    }
    public function testGenDetect1479()
    {
        $this->object->setFirstName('Альбертина');
        $this->object->setSecondName('Кузьміна');
        $this->assertEquals('2-Альбертина Кузьміна', $this->object->genderAutoDetect().'-Альбертина Кузьміна');
    }
    public function testGenDetect1480()
    {
        $this->object->setFirstName('Альбіна');
        $this->object->setSecondName('Кулакова');
        $this->assertEquals('2-Альбіна Кулакова', $this->object->genderAutoDetect().'-Альбіна Кулакова');
    }
    public function testGenDetect1481()
    {
        $this->object->setFirstName('Альвіна');
        $this->object->setSecondName('Куликова');
        $this->assertEquals('2-Альвіна Куликова', $this->object->genderAutoDetect().'-Альвіна Куликова');
    }
    public function testGenDetect1482()
    {
        $this->object->setFirstName('Анастасія');
        $this->object->setSecondName('Куркова');
        $this->assertEquals('2-Анастасія Куркова', $this->object->genderAutoDetect().'-Анастасія Куркова');
    }
    public function testGenDetect1483()
    {
        $this->object->setFirstName('Ангеліна');
        $this->object->setSecondName('Курочкіна');
        $this->assertEquals('2-Ангеліна Курочкіна', $this->object->genderAutoDetect().'-Ангеліна Курочкіна');
    }
    public function testGenDetect1484()
    {
        $this->object->setFirstName('Анжела');
        $this->object->setSecondName('Лєскова');
        $this->assertEquals('2-Анжела Лєскова', $this->object->genderAutoDetect().'-Анжела Лєскова');
    }
    public function testGenDetect1485()
    {
        $this->object->setFirstName('Антоніна');
        $this->object->setSecondName('Лідова');
        $this->assertEquals('2-Антоніна Лідова', $this->object->genderAutoDetect().'-Антоніна Лідова');
    }
    public function testGenDetect1486()
    {
        $this->object->setFirstName('Анфіса');
        $this->object->setSecondName('Ладигіна');
        $this->assertEquals('2-Анфіса Ладигіна', $this->object->genderAutoDetect().'-Анфіса Ладигіна');
    }
    public function testGenDetect1487()
    {
        $this->object->setFirstName('Аріадна');
        $this->object->setSecondName('Лазарєва');
        $this->assertEquals('2-Аріадна Лазарєва', $this->object->genderAutoDetect().'-Аріадна Лазарєва');
    }
    public function testGenDetect1488()
    {
        $this->object->setFirstName('Арсена');
        $this->object->setSecondName('Лебедєва');
        $this->assertEquals('2-Арсена Лебедєва', $this->object->genderAutoDetect().'-Арсена Лебедєва');
    }
    public function testGenDetect1489()
    {
        $this->object->setFirstName('Ася');
        $this->object->setSecondName('Лихоносова');
        $this->assertEquals('2-Ася Лихоносова', $this->object->genderAutoDetect().'-Ася Лихоносова');
    }
    public function testGenDetect1490()
    {
        $this->object->setFirstName('Афіна');
        $this->object->setSecondName('Лосєва');
        $this->assertEquals('2-Афіна Лосєва', $this->object->genderAutoDetect().'-Афіна Лосєва');
    }
    public function testGenDetect1491()
    {
        $this->object->setFirstName('Афродіта');
        $this->object->setSecondName('Львова');
        $this->assertEquals('2-Афродіта Львова', $this->object->genderAutoDetect().'-Афродіта Львова');
    }
    public function testGenDetect1492()
    {
        $this->object->setFirstName('Бажана');
        $this->object->setSecondName('Любимова');
        $this->assertEquals('2-Бажана Любимова', $this->object->genderAutoDetect().'-Бажана Любимова');
    }
    public function testGenDetect1493()
    {
        $this->object->setFirstName('Берегиня');
        $this->object->setSecondName('Мілютіна');
        $this->assertEquals('2-Берегиня Мілютіна', $this->object->genderAutoDetect().'-Берегиня Мілютіна');
    }
    public function testGenDetect1494()
    {
        $this->object->setFirstName('Біловида');
        $this->object->setSecondName('Макарова');
        $this->assertEquals('2-Біловида Макарова', $this->object->genderAutoDetect().'-Біловида Макарова');
    }
    public function testGenDetect1495()
    {
        $this->object->setFirstName('Біломира');
        $this->object->setSecondName('Максимова');
        $this->assertEquals('2-Біломира Максимова', $this->object->genderAutoDetect().'-Біломира Максимова');
    }
    public function testGenDetect1496()
    {
        $this->object->setFirstName('Білослава');
        $this->object->setSecondName('Малакова');
        $this->assertEquals('2-Білослава Малакова', $this->object->genderAutoDetect().'-Білослава Малакова');
    }
    public function testGenDetect1497()
    {
        $this->object->setFirstName('Біляна');
        $this->object->setSecondName('Мамонова');
        $this->assertEquals('2-Біляна Мамонова', $this->object->genderAutoDetect().'-Біляна Мамонова');
    }
    public function testGenDetect1498()
    {
        $this->object->setFirstName('Благиня');
        $this->object->setSecondName('Манасеїна');
        $this->assertEquals('2-Благиня Манасеїна', $this->object->genderAutoDetect().'-Благиня Манасеїна');
    }
    public function testGenDetect1499()
    {
        $this->object->setFirstName('Благовида');
        $this->object->setSecondName('Маркова');
        $this->assertEquals('2-Благовида Маркова', $this->object->genderAutoDetect().'-Благовида Маркова');
    }
    public function testGenDetect1500()
    {
        $this->object->setFirstName('Благовіра');
        $this->object->setSecondName('Мартенс');
        $this->assertEquals('2-Благовіра Мартенс', $this->object->genderAutoDetect().'-Благовіра Мартенс');
    }
    public function testGenDetect1501()
    {
        $this->object->setFirstName('Благовіста');
        $this->object->setSecondName('Мартинова');
        $this->assertEquals('2-Благовіста Мартинова', $this->object->genderAutoDetect().'-Благовіста Мартинова');
    }
    public function testGenDetect1502()
    {
        $this->object->setFirstName('Благослава');
        $this->object->setSecondName('Масленнікова');
        $this->assertEquals('2-Благослава Масленнікова', $this->object->genderAutoDetect().'-Благослава Масленнікова');
    }
    public function testGenDetect1503()
    {
        $this->object->setFirstName('Богдана');
        $this->object->setSecondName('Маслова');
        $this->assertEquals('2-Богдана Маслова', $this->object->genderAutoDetect().'-Богдана Маслова');
    }
    public function testGenDetect1504()
    {
        $this->object->setFirstName('Боговіра');
        $this->object->setSecondName('Матвєєва');
        $this->assertEquals('2-Боговіра Матвєєва', $this->object->genderAutoDetect().'-Боговіра Матвєєва');
    }
    public function testGenDetect1505()
    {
        $this->object->setFirstName('Боговіста');
        $this->object->setSecondName('Медведєва');
        $this->assertEquals('2-Боговіста Медведєва', $this->object->genderAutoDetect().'-Боговіста Медведєва');
    }
    public function testGenDetect1506()
    {
        $this->object->setFirstName('Богодара');
        $this->object->setSecondName('Мельникова');
        $this->assertEquals('2-Богодара Мельникова', $this->object->genderAutoDetect().'-Богодара Мельникова');
    }
    public function testGenDetect1507()
    {
        $this->object->setFirstName('Боголіпа');
        $this->object->setSecondName('Миронова');
        $this->assertEquals('2-Боголіпа Миронова', $this->object->genderAutoDetect().'-Боголіпа Миронова');
    }
    public function testGenDetect1508()
    {
        $this->object->setFirstName('Боголюба');
        $this->object->setSecondName('Михайлова');
        $this->assertEquals('2-Боголюба Михайлова', $this->object->genderAutoDetect().'-Боголюба Михайлова');
    }
    public function testGenDetect1509()
    {
        $this->object->setFirstName('Богосвята');
        $this->object->setSecondName('Моїсєєва');
        $this->assertEquals('2-Богосвята Моїсєєва', $this->object->genderAutoDetect().'-Богосвята Моїсєєва');
    }
    public function testGenDetect1510()
    {
        $this->object->setFirstName('Богумила');
        $this->object->setSecondName('Моргунова');
        $this->assertEquals('2-Богумила Моргунова', $this->object->genderAutoDetect().'-Богумила Моргунова');
    }
    public function testGenDetect1511()
    {
        $this->object->setFirstName('Богумира');
        $this->object->setSecondName('Моркова');
        $this->assertEquals('2-Богумира Моркова', $this->object->genderAutoDetect().'-Богумира Моркова');
    }
    public function testGenDetect1512()
    {
        $this->object->setFirstName('Богуслава');
        $this->object->setSecondName('Морозова');
        $this->assertEquals('2-Богуслава Морозова', $this->object->genderAutoDetect().'-Богуслава Морозова');
    }
    public function testGenDetect1513()
    {
        $this->object->setFirstName('Божедана');
        $this->object->setSecondName('Мухіна');
        $this->assertEquals('2-Божедана Мухіна', $this->object->genderAutoDetect().'-Божедана Мухіна');
    }
    public function testGenDetect1514()
    {
        $this->object->setFirstName('Божедара');
        $this->object->setSecondName('Нікітіна');
        $this->assertEquals('2-Божедара Нікітіна', $this->object->genderAutoDetect().'-Божедара Нікітіна');
    }
    public function testGenDetect1515()
    {
        $this->object->setFirstName('Божемила');
        $this->object->setSecondName('Ніколаєва');
        $this->assertEquals('2-Божемила Ніколаєва', $this->object->genderAutoDetect().'-Божемила Ніколаєва');
    }
    public function testGenDetect1516()
    {
        $this->object->setFirstName('Божена');
        $this->object->setSecondName('Нікуліна');
        $this->assertEquals('2-Божена Нікуліна', $this->object->genderAutoDetect().'-Божена Нікуліна');
    }
    public function testGenDetect1517()
    {
        $this->object->setFirstName('Божиця');
        $this->object->setSecondName('Набокова');
        $this->assertEquals('2-Божиця Набокова', $this->object->genderAutoDetect().'-Божиця Набокова');
    }
    public function testGenDetect1518()
    {
        $this->object->setFirstName('Болеслава');
        $this->object->setSecondName('Некрасова');
        $this->assertEquals('2-Болеслава Некрасова', $this->object->genderAutoDetect().'-Болеслава Некрасова');
    }
    public function testGenDetect1519()
    {
        $this->object->setFirstName('Борислава');
        $this->object->setSecondName('Новикова');
        $this->assertEquals('2-Борислава Новикова', $this->object->genderAutoDetect().'-Борислава Новикова');
    }
    public function testGenDetect1520()
    {
        $this->object->setFirstName('Боронислава');
        $this->object->setSecondName('Орлова');
        $this->assertEquals('2-Боронислава Орлова', $this->object->genderAutoDetect().'-Боронислава Орлова');
    }
    public function testGenDetect1521()
    {
        $this->object->setFirstName('Братолюба');
        $this->object->setSecondName('Осипова');
        $this->assertEquals('2-Братолюба Осипова', $this->object->genderAutoDetect().'-Братолюба Осипова');
    }
    public function testGenDetect1522()
    {
        $this->object->setFirstName('Братомила');
        $this->object->setSecondName('Павлова');
        $this->assertEquals('2-Братомила Павлова', $this->object->genderAutoDetect().'-Братомила Павлова');
    }
    public function testGenDetect1523()
    {
        $this->object->setFirstName('Брячислава');
        $this->object->setSecondName('Павлушкова');
        $this->assertEquals('2-Брячислава Павлушкова', $this->object->genderAutoDetect().'-Брячислава Павлушкова');
    }
    public function testGenDetect1524()
    {
        $this->object->setFirstName('Будана');
        $this->object->setSecondName('Панова');
        $this->assertEquals('2-Будана Панова', $this->object->genderAutoDetect().'-Будана Панова');
    }
    public function testGenDetect1525()
    {
        $this->object->setFirstName('Будимира');
        $this->object->setSecondName('Петрова');
        $this->assertEquals('2-Будимира Петрова', $this->object->genderAutoDetect().'-Будимира Петрова');
    }
    public function testGenDetect1526()
    {
        $this->object->setFirstName('Будислава');
        $this->object->setSecondName('Пильчикова');
        $this->assertEquals('2-Будислава Пильчикова', $this->object->genderAutoDetect().'-Будислава Пильчикова');
    }
    public function testGenDetect1527()
    {
        $this->object->setFirstName('Ведана');
        $this->object->setSecondName('Платонова');
        $this->assertEquals('2-Ведана Платонова', $this->object->genderAutoDetect().'-Ведана Платонова');
    }
    public function testGenDetect1528()
    {
        $this->object->setFirstName('Велимира');
        $this->object->setSecondName('Плеханова');
        $this->assertEquals('2-Велимира Плеханова', $this->object->genderAutoDetect().'-Велимира Плеханова');
    }
    public function testGenDetect1529()
    {
        $this->object->setFirstName('Вербава');
        $this->object->setSecondName('Полякова');
        $this->assertEquals('2-Вербава Полякова', $this->object->genderAutoDetect().'-Вербава Полякова');
    }
    public function testGenDetect1530()
    {
        $this->object->setFirstName('Верхуслава');
        $this->object->setSecondName('Пономарьова');
        $this->assertEquals('2-Верхуслава Пономарьова', $this->object->genderAutoDetect().'-Верхуслава Пономарьова');
    }
    public function testGenDetect1531()
    {
        $this->object->setFirstName('Веселина');
        $this->object->setSecondName('Попова');
        $this->assertEquals('2-Веселина Попова', $this->object->genderAutoDetect().'-Веселина Попова');
    }
    public function testGenDetect1532()
    {
        $this->object->setFirstName('Веселка');
        $this->object->setSecondName('Пояркова');
        $this->assertEquals('2-Веселка Пояркова', $this->object->genderAutoDetect().'-Веселка Пояркова');
    }
    public function testGenDetect1533()
    {
        $this->object->setFirstName('Весна');
        $this->object->setSecondName('Пригунова');
        $this->assertEquals('2-Весна Пригунова', $this->object->genderAutoDetect().'-Весна Пригунова');
    }
    public function testGenDetect1534()
    {
        $this->object->setFirstName('Вишена');
        $this->object->setSecondName('Прошкіна');
        $this->assertEquals('2-Вишена Прошкіна', $this->object->genderAutoDetect().'-Вишена Прошкіна');
    }
    public function testGenDetect1535()
    {
        $this->object->setFirstName('Вишеслава');
        $this->object->setSecondName('Решетникова');
        $this->assertEquals('2-Вишеслава Решетникова', $this->object->genderAutoDetect().'-Вишеслава Решетникова');
    }
    public function testGenDetect1536()
    {
        $this->object->setFirstName('Вишня');
        $this->object->setSecondName('Рожкова');
        $this->assertEquals('2-Вишня Рожкова', $this->object->genderAutoDetect().'-Вишня Рожкова');
    }
    public function testGenDetect1537()
    {
        $this->object->setFirstName('Віра');
        $this->object->setSecondName('Романова');
        $this->assertEquals('2-Віра Романова', $this->object->genderAutoDetect().'-Віра Романова');
    }
    public function testGenDetect1538()
    {
        $this->object->setFirstName('Віродана');
        $this->object->setSecondName('Рябова');
        $this->assertEquals('2-Віродана Рябова', $this->object->genderAutoDetect().'-Віродана Рябова');
    }
    public function testGenDetect1539()
    {
        $this->object->setFirstName('Віродара');
        $this->object->setSecondName('Сабліна');
        $this->assertEquals('2-Віродара Сабліна', $this->object->genderAutoDetect().'-Віродара Сабліна');
    }
    public function testGenDetect1540()
    {
        $this->object->setFirstName('Вірослава');
        $this->object->setSecondName('Савіна');
        $this->assertEquals('2-Вірослава Савіна', $this->object->genderAutoDetect().'-Вірослава Савіна');
    }
    public function testGenDetect1541()
    {
        $this->object->setFirstName('Віста');
        $this->object->setSecondName('Сазонова');
        $this->assertEquals('2-Віста Сазонова', $this->object->genderAutoDetect().'-Віста Сазонова');
    }
    public function testGenDetect1542()
    {
        $this->object->setFirstName('Вістуна');
        $this->object->setSecondName('Сальникова');
        $this->assertEquals('2-Вістуна Сальникова', $this->object->genderAutoDetect().'-Вістуна Сальникова');
    }
    public function testGenDetect1543()
    {
        $this->object->setFirstName('Вітана');
        $this->object->setSecondName('Самойлова');
        $this->assertEquals('2-Вітана Самойлова', $this->object->genderAutoDetect().'-Вітана Самойлова');
    }
    public function testGenDetect1544()
    {
        $this->object->setFirstName('Влада');
        $this->object->setSecondName('Самсонова');
        $this->assertEquals('2-Влада Самсонова', $this->object->genderAutoDetect().'-Влада Самсонова');
    }
    public function testGenDetect1545()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setSecondName('Сбітнєва');
        $this->assertEquals('2-Владислава Сбітнєва', $this->object->genderAutoDetect().'-Владислава Сбітнєва');
    }
    public function testGenDetect1546()
    {
        $this->object->setFirstName('Власта');
        $this->object->setSecondName('Свиридова');
        $this->assertEquals('2-Власта Свиридова', $this->object->genderAutoDetect().'-Власта Свиридова');
    }
    public function testGenDetect1547()
    {
        $this->object->setFirstName('Вогнедара');
        $this->object->setSecondName('Селезньова');
        $this->assertEquals('2-Вогнедара Селезньова', $this->object->genderAutoDetect().'-Вогнедара Селезньова');
    }
    public function testGenDetect1548()
    {
        $this->object->setFirstName('Вогняна');
        $this->object->setSecondName('Семенова');
        $this->assertEquals('2-Вогняна Семенова', $this->object->genderAutoDetect().'-Вогняна Семенова');
    }
    public function testGenDetect1549()
    {
        $this->object->setFirstName('Волелюба');
        $this->object->setSecondName('Сербіна');
        $this->assertEquals('2-Волелюба Сербіна', $this->object->genderAutoDetect().'-Волелюба Сербіна');
    }
    public function testGenDetect1550()
    {
        $this->object->setFirstName('Володимира');
        $this->object->setSecondName('Сергєєва');
        $this->assertEquals('2-Володимира Сергєєва', $this->object->genderAutoDetect().'-Володимира Сергєєва');
    }
    public function testGenDetect1551()
    {
        $this->object->setFirstName('Волошка');
        $this->object->setSecondName('Сибірякова');
        $this->assertEquals('2-Волошка Сибірякова', $this->object->genderAutoDetect().'-Волошка Сибірякова');
    }
    public function testGenDetect1552()
    {
        $this->object->setFirstName('Воля');
        $this->object->setSecondName('Сидорова');
        $this->assertEquals('2-Воля Сидорова', $this->object->genderAutoDetect().'-Воля Сидорова');
    }
    public function testGenDetect1553()
    {
        $this->object->setFirstName('Всеволода');
        $this->object->setSecondName('Симонова');
        $this->assertEquals('2-Всеволода Симонова', $this->object->genderAutoDetect().'-Всеволода Симонова');
    }
    public function testGenDetect1554()
    {
        $this->object->setFirstName('Вселюба');
        $this->object->setSecondName('Синельникова');
        $this->assertEquals('2-Вселюба Синельникова', $this->object->genderAutoDetect().'-Вселюба Синельникова');
    }
    public function testGenDetect1555()
    {
        $this->object->setFirstName('Всемира');
        $this->object->setSecondName('Скобелева');
        $this->assertEquals('2-Всемира Скобелева', $this->object->genderAutoDetect().'-Всемира Скобелева');
    }
    public function testGenDetect1556()
    {
        $this->object->setFirstName('Всеслава');
        $this->object->setSecondName('Скобліна');
        $this->assertEquals('2-Всеслава Скобліна', $this->object->genderAutoDetect().'-Всеслава Скобліна');
    }
    public function testGenDetect1557()
    {
        $this->object->setFirstName('В’ячеслава');
        $this->object->setSecondName('Смирнова');
        $this->assertEquals('2-В’ячеслава Смирнова', $this->object->genderAutoDetect().'-В’ячеслава Смирнова');
    }
    public function testGenDetect1558()
    {
        $this->object->setFirstName('Гаїна');
        $this->object->setSecondName('Снєгірьова');
        $this->assertEquals('2-Гаїна Снєгірьова', $this->object->genderAutoDetect().'-Гаїна Снєгірьова');
    }
    public function testGenDetect1559()
    {
        $this->object->setFirstName('Гатусила');
        $this->object->setSecondName('Соболєва');
        $this->assertEquals('2-Гатусила Соболєва', $this->object->genderAutoDetect().'-Гатусила Соболєва');
    }
    public function testGenDetect1560()
    {
        $this->object->setFirstName('Гарнослава');
        $this->object->setSecondName('Соколова');
        $this->assertEquals('2-Гарнослава Соколова', $this->object->genderAutoDetect().'-Гарнослава Соколова');
    }
    public function testGenDetect1561()
    {
        $this->object->setFirstName('Голубка');
        $this->object->setSecondName('Солнцева');
        $this->assertEquals('2-Голубка Солнцева', $this->object->genderAutoDetect().'-Голубка Солнцева');
    }
    public function testGenDetect1562()
    {
        $this->object->setFirstName('Горигляда');
        $this->object->setSecondName('Соловйова');
        $this->assertEquals('2-Горигляда Соловйова', $this->object->genderAutoDetect().'-Горигляда Соловйова');
    }
    public function testGenDetect1563()
    {
        $this->object->setFirstName('Горислава');
        $this->object->setSecondName('Сомова');
        $this->assertEquals('2-Горислава Сомова', $this->object->genderAutoDetect().'-Горислава Сомова');
    }
    public function testGenDetect1564()
    {
        $this->object->setFirstName('Городислава');
        $this->object->setSecondName('Сорокіна');
        $this->assertEquals('2-Городислава Сорокіна', $this->object->genderAutoDetect().'-Городислава Сорокіна');
    }
    public function testGenDetect1565()
    {
        $this->object->setFirstName('Гострозора');
        $this->object->setSecondName('Стєклова');
        $this->assertEquals('2-Гострозора Стєклова', $this->object->genderAutoDetect().'-Гострозора Стєклова');
    }
    public function testGenDetect1566()
    {
        $this->object->setFirstName('Градислава');
        $this->object->setSecondName('Старкова');
        $this->assertEquals('2-Градислава Старкова', $this->object->genderAutoDetect().'-Градислава Старкова');
    }
    public function testGenDetect1567()
    {
        $this->object->setFirstName('Гранислава');
        $this->object->setSecondName('Степанова');
        $this->assertEquals('2-Гранислава Степанова', $this->object->genderAutoDetect().'-Гранислава Степанова');
    }
    public function testGenDetect1568()
    {
        $this->object->setFirstName('Гремислава');
        $this->object->setSecondName('Табакова');
        $this->assertEquals('2-Гремислава Табакова', $this->object->genderAutoDetect().'-Гремислава Табакова');
    }
    public function testGenDetect1569()
    {
        $this->object->setFirstName('Далібора');
        $this->object->setSecondName('Тарасова');
        $this->assertEquals('2-Далібора Тарасова', $this->object->genderAutoDetect().'-Далібора Тарасова');
    }
    public function testGenDetect1570()
    {
        $this->object->setFirstName('Дана');
        $this->object->setSecondName('Терентьєва');
        $this->assertEquals('2-Дана Терентьєва', $this->object->genderAutoDetect().'-Дана Терентьєва');
    }
    public function testGenDetect1571()
    {
        $this->object->setFirstName('Дарина');
        $this->object->setSecondName('Тимофєєва');
        $this->assertEquals('2-Дарина Тимофєєва', $this->object->genderAutoDetect().'-Дарина Тимофєєва');
    }
    public function testGenDetect1572()
    {
        $this->object->setFirstName('Дзвенимира');
        $this->object->setSecondName('Титова');
        $this->assertEquals('2-Дзвенимира Титова', $this->object->genderAutoDetect().'-Дзвенимира Титова');
    }
    public function testGenDetect1573()
    {
        $this->object->setFirstName('Дзвенислава');
        $this->object->setSecondName('Тихомирова');
        $this->assertEquals('2-Дзвенислава Тихомирова', $this->object->genderAutoDetect().'-Дзвенислава Тихомирова');
    }
    public function testGenDetect1574()
    {
        $this->object->setFirstName('Дзвінка');
        $this->object->setSecondName('Тихонова');
        $this->assertEquals('2-Дзвінка Тихонова', $this->object->genderAutoDetect().'-Дзвінка Тихонова');
    }
    public function testGenDetect1575()
    {
        $this->object->setFirstName('Діяна');
        $this->object->setSecondName('Тюленєва');
        $this->assertEquals('2-Діяна Тюленєва', $this->object->genderAutoDetect().'-Діяна Тюленєва');
    }
    public function testGenDetect1576()
    {
        $this->object->setFirstName('Добринка');
        $this->object->setSecondName('Уварова');
        $this->assertEquals('2-Добринка Уварова', $this->object->genderAutoDetect().'-Добринка Уварова');
    }
    public function testGenDetect1577()
    {
        $this->object->setFirstName('Добровіста');
        $this->object->setSecondName('Усова');
        $this->assertEquals('2-Добровіста Усова', $this->object->genderAutoDetect().'-Добровіста Усова');
    }
    public function testGenDetect1578()
    {
        $this->object->setFirstName('Доброгніва');
        $this->object->setSecondName('Устинова');
        $this->assertEquals('2-Доброгніва Устинова', $this->object->genderAutoDetect().'-Доброгніва Устинова');
    }
    public function testGenDetect1579()
    {
        $this->object->setFirstName('Добролюба');
        $this->object->setSecondName('Філіппова');
        $this->assertEquals('2-Добролюба Філіппова', $this->object->genderAutoDetect().'-Добролюба Філіппова');
    }
    public function testGenDetect1580()
    {
        $this->object->setFirstName('Добромила');
        $this->object->setSecondName('Філатова');
        $this->assertEquals('2-Добромила Філатова', $this->object->genderAutoDetect().'-Добромила Філатова');
    }
    public function testGenDetect1581()
    {
        $this->object->setFirstName('Добромира');
        $this->object->setSecondName('Федорова');
        $this->assertEquals('2-Добромира Федорова', $this->object->genderAutoDetect().'-Добромира Федорова');
    }
    public function testGenDetect1582()
    {
        $this->object->setFirstName('Доброніга');
        $this->object->setSecondName('Фоміна');
        $this->assertEquals('2-Доброніга Фоміна', $this->object->genderAutoDetect().'-Доброніга Фоміна');
    }
    public function testGenDetect1583()
    {
        $this->object->setFirstName('Доброслава');
        $this->object->setSecondName('Фролова');
        $this->assertEquals('2-Доброслава Фролова', $this->object->genderAutoDetect().'-Доброслава Фролова');
    }
    public function testGenDetect1584()
    {
        $this->object->setFirstName('Долина');
        $this->object->setSecondName('Хілкова');
        $this->assertEquals('2-Долина Хілкова', $this->object->genderAutoDetect().'-Долина Хілкова');
    }
    public function testGenDetect1585()
    {
        $this->object->setFirstName('Доля');
        $this->object->setSecondName('Хвостова');
        $this->assertEquals('2-Доля Хвостова', $this->object->genderAutoDetect().'-Доля Хвостова');
    }
    public function testGenDetect1586()
    {
        $this->object->setFirstName('Домаха');
        $this->object->setSecondName('Худякова');
        $this->assertEquals('2-Домаха Худякова', $this->object->genderAutoDetect().'-Домаха Худякова');
    }
    public function testGenDetect1587()
    {
        $this->object->setFirstName('Доморада');
        $this->object->setSecondName('Цвєткова');
        $this->assertEquals('2-Доморада Цвєткова', $this->object->genderAutoDetect().'-Доморада Цвєткова');
    }
    public function testGenDetect1588()
    {
        $this->object->setFirstName('Дружелюба');
        $this->object->setSecondName('Чанова');
        $this->assertEquals('2-Дружелюба Чанова', $this->object->genderAutoDetect().'-Дружелюба Чанова');
    }
    public function testGenDetect1589()
    {
        $this->object->setFirstName('Жадана');
        $this->object->setSecondName('Чевкіна');
        $this->assertEquals('2-Жадана Чевкіна', $this->object->genderAutoDetect().'-Жадана Чевкіна');
    }
    public function testGenDetect1590()
    {
        $this->object->setFirstName('Ждана');
        $this->object->setSecondName('Черенкова');
        $this->assertEquals('2-Ждана Черенкова', $this->object->genderAutoDetect().'-Ждана Черенкова');
    }
    public function testGenDetect1591()
    {
        $this->object->setFirstName('Живосила');
        $this->object->setSecondName('Черепкова');
        $this->assertEquals('2-Живосила Черепкова', $this->object->genderAutoDetect().'-Живосила Черепкова');
    }
    public function testGenDetect1592()
    {
        $this->object->setFirstName('Живослава');
        $this->object->setSecondName('Чулкова');
        $this->assertEquals('2-Живослава Чулкова', $this->object->genderAutoDetect().'-Живослава Чулкова');
    }
    public function testGenDetect1593()
    {
        $this->object->setFirstName('Житомира');
        $this->object->setSecondName('Шевельова');
        $this->assertEquals('2-Житомира Шевельова', $this->object->genderAutoDetect().'-Житомира Шевельова');
    }
    public function testGenDetect1594()
    {
        $this->object->setFirstName('Життєлюба');
        $this->object->setSecondName('Шеліхова');
        $this->assertEquals('2-Життєлюба Шеліхова', $this->object->genderAutoDetect().'-Життєлюба Шеліхова');
    }
    public function testGenDetect1595()
    {
        $this->object->setFirstName('Забава');
        $this->object->setSecondName('Шиніна');
        $this->assertEquals('2-Забава Шиніна', $this->object->genderAutoDetect().'-Забава Шиніна');
    }
    public function testGenDetect1596()
    {
        $this->object->setFirstName('Звенигора');
        $this->object->setSecondName('Ширяєва');
        $this->assertEquals('2-Звенигора Ширяєва', $this->object->genderAutoDetect().'-Звенигора Ширяєва');
    }
    public function testGenDetect1597()
    {
        $this->object->setFirstName('Звенислава');
        $this->object->setSecondName('Шишова');
        $this->assertEquals('2-Звенислава Шишова', $this->object->genderAutoDetect().'-Звенислава Шишова');
    }
    public function testGenDetect1598()
    {
        $this->object->setFirstName('Звонимира');
        $this->object->setSecondName('Шулакова');
        $this->assertEquals('2-Звонимира Шулакова', $this->object->genderAutoDetect().'-Звонимира Шулакова');
    }
    public function testGenDetect1599()
    {
        $this->object->setFirstName('Зірка');
        $this->object->setSecondName('Щапова');
        $this->assertEquals('2-Зірка Щапова', $this->object->genderAutoDetect().'-Зірка Щапова');
    }
    public function testGenDetect1600()
    {
        $this->object->setFirstName('Злата');
        $this->object->setSecondName('Щаслива');
        $this->assertEquals('2-Злата Щаслива', $this->object->genderAutoDetect().'-Злата Щаслива');
    }
    public function testGenDetect1601()
    {
        $this->object->setFirstName('Златомира');
        $this->object->setSecondName('Яковлєва');
        $this->assertEquals('2-Златомира Яковлєва', $this->object->genderAutoDetect().'-Златомира Яковлєва');
    }
    public function testGenDetect1602()
    {
        $this->object->setFirstName('Златоуста');
        $this->object->setSecondName('Яшина');
        $this->assertEquals('2-Златоуста Яшина', $this->object->genderAutoDetect().'-Златоуста Яшина');
    }

}