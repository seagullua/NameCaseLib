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


    public function testManSirname0()
    {
        $this->object->setSecondName('Єрмоленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єрмоленко,Єрмоленка,Єрмоленкові,Єрмоленка,Єрмоленком,Єрмоленкові,Єрмоленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname1()
    {
        $this->object->setSecondName('Єсипенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єсипенко,Єсипенка,Єсипенкові,Єсипенка,Єсипенком,Єсипенкові,Єсипенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname2()
    {
        $this->object->setSecondName('Іванів');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іванів,Іванова,Івановові,Іванова,Івановом,Івановові,Іванове'), $this->object->getSecondNameCase());
    }
    public function testManSirname3()
    {
        $this->object->setSecondName('Іваненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іваненко,Іваненка,Іваненкові,Іваненка,Іваненком,Іваненкові,Іваненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname4()
    {
        $this->object->setSecondName('Іванченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іванченко,Іванченка,Іванченкові,Іванченка,Іванченком,Іванченкові,Іванченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname5()
    {
        $this->object->setSecondName('Іванчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іванчук,Іванчука,Іванчукові,Іванчука,Іванчуком,Іванчукові,Іванчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname6()
    {
        $this->object->setSecondName('Іванюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іванюк,Іванюка,Іванюкові,Іванюка,Іванюком,Іванюкові,Іванюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname7()
    {
        $this->object->setSecondName('Івахненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Івахненко,Івахненка,Івахненкові,Івахненка,Івахненком,Івахненкові,Івахненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname8()
    {
        $this->object->setSecondName('Івашко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Івашко,Івашка,Івашкові,Івашка,Івашком,Івашкові,Івашче'), $this->object->getSecondNameCase());
    }
    public function testManSirname9()
    {
        $this->object->setSecondName('Іващенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іващенко,Іващенка,Іващенкові,Іващенка,Іващенком,Іващенкові,Іващенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname10()
    {
        $this->object->setSecondName('Івченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Івченко,Івченка,Івченкові,Івченка,Івченком,Івченкові,Івченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname11()
    {
        $this->object->setSecondName('Іллєнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іллєнко,Іллєнка,Іллєнкові,Іллєнка,Іллєнком,Іллєнкові,Іллєнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname12()
    {
        $this->object->setSecondName('Ільницький');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ільницький,Ільницького,Ільницькому,Ільницького,Ільницьким,Ільницькому,Ільницький'), $this->object->getSecondNameCase());
    }
    public function testManSirname13()
    {
        $this->object->setSecondName('Ільченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ільченко,Ільченка,Ільченкові,Ільченка,Ільченком,Ільченкові,Ільченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname14()
    {
        $this->object->setSecondName('Іщенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іщенко,Іщенка,Іщенкові,Іщенка,Іщенком,Іщенкові,Іщенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname15()
    {
        $this->object->setSecondName('Абраменко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абраменко,Абраменка,Абраменкові,Абраменка,Абраменком,Абраменкові,Абраменче'), $this->object->getSecondNameCase());
    }
    public function testManSirname16()
    {
        $this->object->setSecondName('Абрамчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абрамчук,Абрамчука,Абрамчукові,Абрамчука,Абрамчуком,Абрамчукові,Абрамчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname17()
    {
        $this->object->setSecondName('Адамчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Адамчук,Адамчука,Адамчукові,Адамчука,Адамчуком,Адамчукові,Адамчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname18()
    {
        $this->object->setSecondName('Акуленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Акуленко,Акуленка,Акуленкові,Акуленка,Акуленком,Акуленкові,Акуленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname19()
    {
        $this->object->setSecondName('Алексєєнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексєєнко,Алексєєнка,Алексєєнкові,Алексєєнка,Алексєєнком,Алексєєнкові,Алексєєнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname20()
    {
        $this->object->setSecondName('Алексійчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексійчук,Алексійчука,Алексійчукові,Алексійчука,Алексійчуком,Алексійчукові,Алексійчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname21()
    {
        $this->object->setSecondName('Андрієнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрієнко,Андрієнка,Андрієнкові,Андрієнка,Андрієнком,Андрієнкові,Андрієнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname22()
    {
        $this->object->setSecondName('Андрійчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрійчук,Андрійчука,Андрійчукові,Андрійчука,Андрійчуком,Андрійчукові,Андрійчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname23()
    {
        $this->object->setSecondName('Андрейко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрейко,Андрейка,Андрейкові,Андрейка,Андрейком,Андрейкові,Андрейче'), $this->object->getSecondNameCase());
    }
    public function testManSirname24()
    {
        $this->object->setSecondName('Андрусів');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрусів,Андрусова,Андрусовові,Андрусова,Андрусовом,Андрусовові,Андрусове'), $this->object->getSecondNameCase());
    }
    public function testManSirname25()
    {
        $this->object->setSecondName('Андрушків');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрушків,Андрушкова,Андрушковові,Андрушкова,Андрушковом,Андрушковові,Андрушкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname26()
    {
        $this->object->setSecondName('Андрущенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андрущенко,Андрущенка,Андрущенкові,Андрущенка,Андрущенком,Андрущенкові,Андрущенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname27()
    {
        $this->object->setSecondName('Анищенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анищенко,Анищенка,Анищенкові,Анищенка,Анищенком,Анищенкові,Анищенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname28()
    {
        $this->object->setSecondName('Антонюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонюк,Антонюка,Антонюкові,Антонюка,Антонюком,Антонюкові,Антонюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname29()
    {
        $this->object->setSecondName('Арсенич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арсенич,Арсенича,Арсеничеві,Арсенича,Арсеничем,Арсеничеві,Арсениче'), $this->object->getSecondNameCase());
    }
    public function testManSirname30()
    {
        $this->object->setSecondName('Артюх');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Артюх,Артюха,Артюхові,Артюха,Артюхом,Артюхові,Артюхе'), $this->object->getSecondNameCase());
    }
    public function testManSirname31()
    {
        $this->object->setSecondName('Атаманчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Атаманчук,Атаманчука,Атаманчукові,Атаманчука,Атаманчуком,Атаманчукові,Атаманчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname32()
    {
        $this->object->setSecondName('Біла');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Біла,Біли,Білі,Білу,Білою,Білі,Біло'), $this->object->getSecondNameCase());
    }
    public function testManSirname33()
    {
        $this->object->setSecondName('Білас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Білас,Біласа,Біласові,Біласа,Біласом,Біласові,Біласе'), $this->object->getSecondNameCase());
    }
    public function testManSirname34()
    {
        $this->object->setSecondName('Білий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Білий,Білого,Білому,Білого,Білим,Білому,Білий'), $this->object->getSecondNameCase());
    }
    public function testManSirname35()
    {
        $this->object->setSecondName('Білодід');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Білодід,Білодода,Білододові,Білодода,Білододом,Білододові,Білододе'), $this->object->getSecondNameCase());
    }
    public function testManSirname36()
    {
        $this->object->setSecondName('Білоус');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Білоус,Білоуса,Білоусові,Білоуса,Білоусом,Білоусові,Білоусе'), $this->object->getSecondNameCase());
    }
    public function testManSirname37()
    {
        $this->object->setSecondName('Бабійчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бабійчук,Бабійчука,Бабійчукові,Бабійчука,Бабійчуком,Бабійчукові,Бабійчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname38()
    {
        $this->object->setSecondName('Бабак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бабак,Бабака,Бабакові,Бабака,Бабаком,Бабакові,Бабаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname39()
    {
        $this->object->setSecondName('Бабчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бабчук,Бабчука,Бабчукові,Бабчука,Бабчуком,Бабчукові,Бабчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname40()
    {
        $this->object->setSecondName('Багмут');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Багмут,Багмута,Багмутові,Багмута,Багмутом,Багмутові,Багмуте'), $this->object->getSecondNameCase());
    }
    public function testManSirname41()
    {
        $this->object->setSecondName('Багрій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Багрій,Багрія,Багрієві,Багрія,Багрієм,Багрієві,Багрію'), $this->object->getSecondNameCase());
    }
    public function testManSirname42()
    {
        $this->object->setSecondName('Бадлак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бадлак,Бадлака,Бадлакові,Бадлака,Бадлаком,Бадлакові,Бадлаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname43()
    {
        $this->object->setSecondName('Бажан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бажан,Бажана,Бажанові,Бажана,Бажаном,Бажанові,Бажане'), $this->object->getSecondNameCase());
    }
    public function testManSirname44()
    {
        $this->object->setSecondName('Балтача');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Балтача,Балтачи,Балтачі,Балтачу,Балтачою,Балтачі,Балтачо'), $this->object->getSecondNameCase());
    }
    public function testManSirname45()
    {
        $this->object->setSecondName('Бандура');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бандура,Бандури,Бандурі,Бандуру,Бандурою,Бандурі,Бандуро'), $this->object->getSecondNameCase());
    }
    public function testManSirname46()
    {
        $this->object->setSecondName('Баран');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баран,Барана,Баранові,Барана,Бараном,Баранові,Баране'), $this->object->getSecondNameCase());
    }
    public function testManSirname47()
    {
        $this->object->setSecondName('Баранець');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баранець,Баранця,Баранцеві,Баранця,Баранцем,Баранцеві,Баранцю'), $this->object->getSecondNameCase());
    }
    public function testManSirname48()
    {
        $this->object->setSecondName('Барановський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Барановський,Барановського,Барановському,Барановського,Барановським,Барановському,Барановський'), $this->object->getSecondNameCase());
    }
    public function testManSirname49()
    {
        $this->object->setSecondName('Баранюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баранюк,Баранюка,Баранюкові,Баранюка,Баранюком,Баранюкові,Баранюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname50()
    {
        $this->object->setSecondName('Батюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Батюк,Батюка,Батюкові,Батюка,Батюком,Батюкові,Батюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname51()
    {
        $this->object->setSecondName('Бачинський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бачинський,Бачинського,Бачинському,Бачинського,Бачинським,Бачинському,Бачинський'), $this->object->getSecondNameCase());
    }
    public function testManSirname52()
    {
        $this->object->setSecondName('Бебешко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бебешко,Бебешка,Бебешкові,Бебешка,Бебешком,Бебешкові,Бебешче'), $this->object->getSecondNameCase());
    }
    public function testManSirname53()
    {
        $this->object->setSecondName('Бевзенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бевзенко,Бевзенка,Бевзенкові,Бевзенка,Бевзенком,Бевзенкові,Бевзенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname54()
    {
        $this->object->setSecondName('Березовчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Березовчук,Березовчука,Березовчукові,Березовчука,Березовчуком,Березовчукові,Березовчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname55()
    {
        $this->object->setSecondName('Божик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Божик,Божика,Божикові,Божика,Божиком,Божикові,Божиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname56()
    {
        $this->object->setSecondName('Божко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Божко,Божка,Божкові,Божка,Божком,Божкові,Божче'), $this->object->getSecondNameCase());
    }
    public function testManSirname57()
    {
        $this->object->setSecondName('Бойко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бойко,Бойка,Бойкові,Бойка,Бойком,Бойкові,Бойче'), $this->object->getSecondNameCase());
    }
    public function testManSirname58()
    {
        $this->object->setSecondName('Бойцун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бойцун,Бойцуна,Бойцунові,Бойцуна,Бойцуном,Бойцунові,Бойцуне'), $this->object->getSecondNameCase());
    }
    public function testManSirname59()
    {
        $this->object->setSecondName('Бойчак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бойчак,Бойчака,Бойчакові,Бойчака,Бойчаком,Бойчакові,Бойчаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname60()
    {
        $this->object->setSecondName('Бойчишин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бойчишин,Бойчишина,Бойчишинові,Бойчишина,Бойчишином,Бойчишинові,Бойчишине'), $this->object->getSecondNameCase());
    }
    public function testManSirname61()
    {
        $this->object->setSecondName('Бойчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бойчук,Бойчука,Бойчукові,Бойчука,Бойчуком,Бойчукові,Бойчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname62()
    {
        $this->object->setSecondName('Бондар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бондар,Бондара,Бондарові,Бондара,Бондаром,Бондарові,Бондаре'), $this->object->getSecondNameCase());
    }
    public function testManSirname63()
    {
        $this->object->setSecondName('Бондаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бондаренко,Бондаренка,Бондаренкові,Бондаренка,Бондаренком,Бондаренкові,Бондаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname64()
    {
        $this->object->setSecondName('Бондарчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бондарчук,Бондарчука,Бондарчукові,Бондарчука,Бондарчуком,Бондарчукові,Бондарчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname65()
    {
        $this->object->setSecondName('Борисенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисенко,Борисенка,Борисенкові,Борисенка,Борисенком,Борисенкові,Борисенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname66()
    {
        $this->object->setSecondName('Борисикевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисикевич,Борисикевича,Борисикевичеві,Борисикевича,Борисикевичем,Борисикевичеві,Борисикевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname67()
    {
        $this->object->setSecondName('Братусь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Братусь,Братуся,Братусеві,Братуся,Братусем,Братусеві,Братусю'), $this->object->getSecondNameCase());
    }
    public function testManSirname68()
    {
        $this->object->setSecondName('Букатевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Букатевич,Букатевича,Букатевичеві,Букатевича,Букатевичем,Букатевичеві,Букатевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname69()
    {
        $this->object->setSecondName('Бурбан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бурбан,Бурбана,Бурбанові,Бурбана,Бурбаном,Бурбанові,Бурбане'), $this->object->getSecondNameCase());
    }
    public function testManSirname70()
    {
        $this->object->setSecondName('Бурячок');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бурячок,Бурячка,Бурячкові,Бурячка,Бурячком,Бурячкові,Бурячче'), $this->object->getSecondNameCase());
    }
    public function testManSirname71()
    {
        $this->object->setSecondName('Бутейко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бутейко,Бутейка,Бутейкові,Бутейка,Бутейком,Бутейкові,Бутейче'), $this->object->getSecondNameCase());
    }
    public function testManSirname72()
    {
        $this->object->setSecondName('Бутенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бутенко,Бутенка,Бутенкові,Бутенка,Бутенком,Бутенкові,Бутенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname73()
    {
        $this->object->setSecondName('Бутник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бутник,Бутника,Бутникові,Бутника,Бутником,Бутникові,Бутниче'), $this->object->getSecondNameCase());
    }
    public function testManSirname74()
    {
        $this->object->setSecondName('Бухало');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бухало,Бухала,Бухалові,Бухала,Бухалом,Бухалові,Бухале'), $this->object->getSecondNameCase());
    }
    public function testManSirname75()
    {
        $this->object->setSecondName('Василашко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Василашко,Василашка,Василашкові,Василашка,Василашком,Василашкові,Василашче'), $this->object->getSecondNameCase());
    }
    public function testManSirname76()
    {
        $this->object->setSecondName('Василенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Василенко,Василенка,Василенкові,Василенка,Василенком,Василенкові,Василенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname77()
    {
        $this->object->setSecondName('Васильченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильченко,Васильченка,Васильченкові,Васильченка,Васильченком,Васильченкові,Васильченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname78()
    {
        $this->object->setSecondName('Васильчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильчук,Васильчука,Васильчукові,Васильчука,Васильчуком,Васильчукові,Васильчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname79()
    {
        $this->object->setSecondName('Васкул');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васкул,Васкула,Васкулові,Васкула,Васкулом,Васкулові,Васкуле'), $this->object->getSecondNameCase());
    }
    public function testManSirname80()
    {
        $this->object->setSecondName('Вахній');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вахній,Вахнія,Вахнієві,Вахнія,Вахнієм,Вахнієві,Вахнію'), $this->object->getSecondNameCase());
    }
    public function testManSirname81()
    {
        $this->object->setSecondName('Ващенко-Захарченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ващенко-Захарченко,Ващенко-Захарченка,Ващенко-Захарченкові,Ващенко-Захарченка,Ващенко-Захарченком,Ващенко-Захарченкові,Ващенко-Захарченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname82()
    {
        $this->object->setSecondName('Вдовиченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вдовиченко,Вдовиченка,Вдовиченкові,Вдовиченка,Вдовиченком,Вдовиченкові,Вдовиченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname83()
    {
        $this->object->setSecondName('Величко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Величко,Величка,Величкові,Величка,Величком,Величкові,Величче'), $this->object->getSecondNameCase());
    }
    public function testManSirname84()
    {
        $this->object->setSecondName('Вертипорох');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вертипорох,Вертипороха,Вертипорохові,Вертипороха,Вертипорохом,Вертипорохові,Вертипорохе'), $this->object->getSecondNameCase());
    }
    public function testManSirname85()
    {
        $this->object->setSecondName('Верхола');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Верхола,Верхоли,Верхолі,Верхолу,Верхолою,Верхолі,Верхоло'), $this->object->getSecondNameCase());
    }
    public function testManSirname86()
    {
        $this->object->setSecondName('Винокур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Винокур,Винокура,Винокурові,Винокура,Винокуром,Винокурові,Винокуре'), $this->object->getSecondNameCase());
    }
    public function testManSirname87()
    {
        $this->object->setSecondName('Влох');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Влох,Влоха,Влохові,Влоха,Влохом,Влохові,Влохе'), $this->object->getSecondNameCase());
    }
    public function testManSirname88()
    {
        $this->object->setSecondName('Воблий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воблий,Воблого,Воблому,Воблого,Воблим,Воблому,Воблий'), $this->object->getSecondNameCase());
    }
    public function testManSirname89()
    {
        $this->object->setSecondName('Вовк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вовк,Вовка,Вовкові,Вовка,Вовком,Вовкові,Вовче'), $this->object->getSecondNameCase());
    }
    public function testManSirname90()
    {
        $this->object->setSecondName('Возняк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Возняк,Возняка,Вознякові,Возняка,Возняком,Вознякові,Возняче'), $this->object->getSecondNameCase());
    }
    public function testManSirname91()
    {
        $this->object->setSecondName('Волох');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Волох,Волоха,Волохові,Волоха,Волохом,Волохові,Волохе'), $this->object->getSecondNameCase());
    }
    public function testManSirname92()
    {
        $this->object->setSecondName('Волошин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Волошин,Волошина,Волошинові,Волошина,Волошином,Волошинові,Волошине'), $this->object->getSecondNameCase());
    }
    public function testManSirname93()
    {
        $this->object->setSecondName('Волощук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Волощук,Волощука,Волощукові,Волощука,Волощуком,Волощукові,Волощуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname94()
    {
        $this->object->setSecondName('Вороновський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Вороновський,Вороновського,Вороновському,Вороновського,Вороновським,Вороновському,Вороновський'), $this->object->getSecondNameCase());
    }
    public function testManSirname95()
    {
        $this->object->setSecondName('Гаврилів');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гаврилів,Гаврилова,Гавриловові,Гаврилова,Гавриловом,Гавриловові,Гаврилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname96()
    {
        $this->object->setSecondName('Гавриленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гавриленко,Гавриленка,Гавриленкові,Гавриленка,Гавриленком,Гавриленкові,Гавриленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname97()
    {
        $this->object->setSecondName('Гаврилюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гаврилюк,Гаврилюка,Гаврилюкові,Гаврилюка,Гаврилюком,Гаврилюкові,Гаврилюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname98()
    {
        $this->object->setSecondName('Гальченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гальченко,Гальченка,Гальченкові,Гальченка,Гальченком,Гальченкові,Гальченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname99()
    {
        $this->object->setSecondName('Гамалія');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гамалія,Гамалії,Гамалії,Гамалію,Гамалією,Гамалії,Гамаліє'), $this->object->getSecondNameCase());
    }
    public function testManSirname100()
    {
        $this->object->setSecondName('Ганицький');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ганицький,Ганицького,Ганицькому,Ганицького,Ганицьким,Ганицькому,Ганицький'), $this->object->getSecondNameCase());
    }
    public function testManSirname101()
    {
        $this->object->setSecondName('Гарань');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гарань,Гараня,Гараневі,Гараня,Гаранем,Гараневі,Гараню'), $this->object->getSecondNameCase());
    }
    public function testManSirname102()
    {
        $this->object->setSecondName('Гармаш');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гармаш,Гармаша,Гармашеві,Гармаша,Гармашем,Гармашеві,Гармаше'), $this->object->getSecondNameCase());
    }
    public function testManSirname103()
    {
        $this->object->setSecondName('Гасай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гасай,Гасая,Гасаєві,Гасая,Гасаєм,Гасаєві,Гасаю'), $this->object->getSecondNameCase());
    }
    public function testManSirname104()
    {
        $this->object->setSecondName('Гасюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гасюк,Гасюка,Гасюкові,Гасюка,Гасюком,Гасюкові,Гасюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname105()
    {
        $this->object->setSecondName('Герасименко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герасименко,Герасименка,Герасименкові,Герасименка,Герасименком,Герасименкові,Герасименче'), $this->object->getSecondNameCase());
    }
    public function testManSirname106()
    {
        $this->object->setSecondName('Геращенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Геращенко,Геращенка,Геращенкові,Геращенка,Геращенком,Геращенкові,Геращенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname107()
    {
        $this->object->setSecondName('Герцик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герцик,Герцика,Герцикові,Герцика,Герциком,Герцикові,Герциче'), $this->object->getSecondNameCase());
    }
    public function testManSirname108()
    {
        $this->object->setSecondName('Гладченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гладченко,Гладченка,Гладченкові,Гладченка,Гладченком,Гладченкові,Гладченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname109()
    {
        $this->object->setSecondName('Глоба');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Глоба,Глоби,Глобі,Глобу,Глобою,Глобі,Глобо'), $this->object->getSecondNameCase());
    }
    public function testManSirname110()
    {
        $this->object->setSecondName('Гнатюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гнатюк,Гнатюка,Гнатюкові,Гнатюка,Гнатюком,Гнатюкові,Гнатюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname111()
    {
        $this->object->setSecondName('Гоголь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гоголь,Гоголя,Гоголеві,Гоголя,Гоголем,Гоголеві,Гоголю'), $this->object->getSecondNameCase());
    }
    public function testManSirname112()
    {
        $this->object->setSecondName('Годунок');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Годунок,Годунка,Годункові,Годунка,Годунком,Годункові,Годунче'), $this->object->getSecondNameCase());
    }
    public function testManSirname113()
    {
        $this->object->setSecondName('Головатий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Головатий,Головатого,Головатому,Головатого,Головатим,Головатому,Головатий'), $this->object->getSecondNameCase());
    }
    public function testManSirname114()
    {
        $this->object->setSecondName('Головко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Головко,Головка,Головкові,Головка,Головком,Головкові,Головче'), $this->object->getSecondNameCase());
    }
    public function testManSirname115()
    {
        $this->object->setSecondName('Голуб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Голуб,Голуба,Голубові,Голуба,Голубом,Голубові,Голубе'), $this->object->getSecondNameCase());
    }
    public function testManSirname116()
    {
        $this->object->setSecondName('Голубничий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Голубничий,Голубничого,Голубничому,Голубничого,Голубничим,Голубничому,Голубничий'), $this->object->getSecondNameCase());
    }
    public function testManSirname117()
    {
        $this->object->setSecondName('Гонта');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гонта,Гонти,Гонті,Гонту,Гонтою,Гонті,Гонто'), $this->object->getSecondNameCase());
    }
    public function testManSirname118()
    {
        $this->object->setSecondName('Гончар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гончар,Гончара,Гончарові,Гончара,Гончаром,Гончарові,Гончаре'), $this->object->getSecondNameCase());
    }
    public function testManSirname119()
    {
        $this->object->setSecondName('Гончаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гончаренко,Гончаренка,Гончаренкові,Гончаренка,Гончаренком,Гончаренкові,Гончаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname120()
    {
        $this->object->setSecondName('Гончаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гончаров,Гончарова,Гончарову,Гончарова,Гончаровим,Гончарову,Гончарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname121()
    {
        $this->object->setSecondName('Горбаль');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горбаль,Горбаля,Горбалеві,Горбаля,Горбалем,Горбалеві,Горбалю'), $this->object->getSecondNameCase());
    }
    public function testManSirname122()
    {
        $this->object->setSecondName('Гордієнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гордієнко,Гордієнка,Гордієнкові,Гордієнка,Гордієнком,Гордієнкові,Гордієнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname123()
    {
        $this->object->setSecondName('Гошовський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гошовський,Гошовського,Гошовському,Гошовського,Гошовським,Гошовському,Гошовський'), $this->object->getSecondNameCase());
    }
    public function testManSirname124()
    {
        $this->object->setSecondName('Грінченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грінченко,Грінченка,Грінченкові,Грінченка,Грінченком,Грінченкові,Грінченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname125()
    {
        $this->object->setSecondName('Грабович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грабович,Грабовича,Грабовичеві,Грабовича,Грабовичем,Грабовичеві,Грабовиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname126()
    {
        $this->object->setSecondName('Грабовський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грабовський,Грабовського,Грабовському,Грабовського,Грабовським,Грабовському,Грабовський'), $this->object->getSecondNameCase());
    }
    public function testManSirname127()
    {
        $this->object->setSecondName('Григоренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григоренко,Григоренка,Григоренкові,Григоренка,Григоренком,Григоренкові,Григоренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname128()
    {
        $this->object->setSecondName('Григорович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорович,Григоровича,Григоровичеві,Григоровича,Григоровичем,Григоровичеві,Григоровиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname129()
    {
        $this->object->setSecondName('Григорович-Барський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорович-Барський,Григорович-Барського,Григорович-Барському,Григорович-Барського,Григорович-Барським,Григорович-Барському,Григорович-Барський'), $this->object->getSecondNameCase());
    }
    public function testManSirname130()
    {
        $this->object->setSecondName('Григорчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Григорчук,Григорчука,Григорчукові,Григорчука,Григорчуком,Григорчукові,Григорчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname131()
    {
        $this->object->setSecondName('Грицак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Грицак,Грицака,Грицакові,Грицака,Грицаком,Грицакові,Грицаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname132()
    {
        $this->object->setSecondName('Гриценко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гриценко,Гриценка,Гриценкові,Гриценка,Гриценком,Гриценкові,Гриценче'), $this->object->getSecondNameCase());
    }
    public function testManSirname133()
    {
        $this->object->setSecondName('Гришко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гришко,Гришка,Гришкові,Гришка,Гришком,Гришкові,Гришче'), $this->object->getSecondNameCase());
    }
    public function testManSirname134()
    {
        $this->object->setSecondName('Гудзій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гудзій,Гудзія,Гудзієві,Гудзія,Гудзієм,Гудзієві,Гудзію'), $this->object->getSecondNameCase());
    }
    public function testManSirname135()
    {
        $this->object->setSecondName('Гудзь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гудзь,Гудзя,Гудзеві,Гудзя,Гудзем,Гудзеві,Гудзю'), $this->object->getSecondNameCase());
    }
    public function testManSirname136()
    {
        $this->object->setSecondName('Гуменюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гуменюк,Гуменюка,Гуменюкові,Гуменюка,Гуменюком,Гуменюкові,Гуменюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname137()
    {
        $this->object->setSecondName('Гунько');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гунько,Гунька,Гунькові,Гунька,Гуньком,Гунькові,Гуньче'), $this->object->getSecondNameCase());
    }
    public function testManSirname138()
    {
        $this->object->setSecondName('Діденко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Діденко,Діденка,Діденкові,Діденка,Діденком,Діденкові,Діденче'), $this->object->getSecondNameCase());
    }
    public function testManSirname139()
    {
        $this->object->setSecondName('Даниленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Даниленко,Даниленка,Даниленкові,Даниленка,Даниленком,Даниленкові,Даниленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname140()
    {
        $this->object->setSecondName('Даньків');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Даньків,Данькова,Даньковові,Данькова,Даньковом,Даньковові,Данькове'), $this->object->getSecondNameCase());
    }
    public function testManSirname141()
    {
        $this->object->setSecondName('Данькевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данькевич,Данькевича,Данькевичеві,Данькевича,Данькевичем,Данькевичеві,Данькевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname142()
    {
        $this->object->setSecondName('Дараган');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дараган,Дарагана,Дараганові,Дарагана,Дараганом,Дараганові,Дарагане'), $this->object->getSecondNameCase());
    }
    public function testManSirname143()
    {
        $this->object->setSecondName('Дашкевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дашкевич,Дашкевича,Дашкевичеві,Дашкевича,Дашкевичем,Дашкевичеві,Дашкевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname144()
    {
        $this->object->setSecondName('Денисенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Денисенко,Денисенка,Денисенкові,Денисенка,Денисенком,Денисенкові,Денисенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname145()
    {
        $this->object->setSecondName('Джус');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Джус,Джуса,Джусові,Джуса,Джусом,Джусові,Джусе'), $this->object->getSecondNameCase());
    }
    public function testManSirname146()
    {
        $this->object->setSecondName('Дзюба');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дзюба,Дзюби,Дзюбі,Дзюбу,Дзюбою,Дзюбі,Дзюбо'), $this->object->getSecondNameCase());
    }
    public function testManSirname147()
    {
        $this->object->setSecondName('Дикань');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дикань,Диканя,Диканеві,Диканя,Диканем,Диканеві,Диканю'), $this->object->getSecondNameCase());
    }
    public function testManSirname148()
    {
        $this->object->setSecondName('Дмитерко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитерко,Дмитерка,Дмитеркові,Дмитерка,Дмитерком,Дмитеркові,Дмитерче'), $this->object->getSecondNameCase());
    }
    public function testManSirname149()
    {
        $this->object->setSecondName('Довженко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Довженко,Довженка,Довженкові,Довженка,Довженком,Довженкові,Довженче'), $this->object->getSecondNameCase());
    }
    public function testManSirname150()
    {
        $this->object->setSecondName('Дорош');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорош,Дороша,Дорошеві,Дороша,Дорошем,Дорошеві,Дороше'), $this->object->getSecondNameCase());
    }
    public function testManSirname151()
    {
        $this->object->setSecondName('Дорошенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорошенко,Дорошенка,Дорошенкові,Дорошенка,Дорошенком,Дорошенкові,Дорошенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname152()
    {
        $this->object->setSecondName('Доценко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Доценко,Доценка,Доценкові,Доценка,Доценком,Доценкові,Доценче'), $this->object->getSecondNameCase());
    }
    public function testManSirname153()
    {
        $this->object->setSecondName('Дочинець');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дочинець,Дочинця,Дочинцеві,Дочинця,Дочинцем,Дочинцеві,Дочинцю'), $this->object->getSecondNameCase());
    }
    public function testManSirname154()
    {
        $this->object->setSecondName('Дудко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дудко,Дудка,Дудкові,Дудка,Дудком,Дудкові,Дудче'), $this->object->getSecondNameCase());
    }
    public function testManSirname155()
    {
        $this->object->setSecondName('Дяків');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дяків,Дякова,Дяковові,Дякова,Дяковом,Дяковові,Дякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname156()
    {
        $this->object->setSecondName('Дяченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дяченко,Дяченка,Дяченкові,Дяченка,Дяченком,Дяченкові,Дяченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname157()
    {
        $this->object->setSecondName('Ейбоженко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ейбоженко,Ейбоженка,Ейбоженкові,Ейбоженка,Ейбоженком,Ейбоженкові,Ейбоженче'), $this->object->getSecondNameCase());
    }
    public function testManSirname158()
    {
        $this->object->setSecondName('Жайворон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жайворон,Жайворона,Жайворонові,Жайворона,Жайвороном,Жайворонові,Жайвороне'), $this->object->getSecondNameCase());
    }
    public function testManSirname159()
    {
        $this->object->setSecondName('Жаліло');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жаліло,Жалола,Жалолові,Жалола,Жалолом,Жалолові,Жалоле'), $this->object->getSecondNameCase());
    }
    public function testManSirname160()
    {
        $this->object->setSecondName('Жежерін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жежерін,Жежеріна,Жежеріну,Жежеріна,Жежеріном,Жежеріну,Жежеріне'), $this->object->getSecondNameCase());
    }
    public function testManSirname161()
    {
        $this->object->setSecondName('Желєзняк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Желєзняк,Желєзняка,Желєзнякові,Желєзняка,Желєзняком,Желєзнякові,Желєзняче'), $this->object->getSecondNameCase());
    }
    public function testManSirname162()
    {
        $this->object->setSecondName('Железняк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Железняк,Железняка,Железнякові,Железняка,Железняком,Железнякові,Железняче'), $this->object->getSecondNameCase());
    }
    public function testManSirname163()
    {
        $this->object->setSecondName('Жилко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жилко,Жилка,Жилкові,Жилка,Жилком,Жилкові,Жилче'), $this->object->getSecondNameCase());
    }
    public function testManSirname164()
    {
        $this->object->setSecondName('Жирко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жирко,Жирка,Жиркові,Жирка,Жирком,Жиркові,Жирче'), $this->object->getSecondNameCase());
    }
    public function testManSirname165()
    {
        $this->object->setSecondName('Жук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жук,Жука,Жукові,Жука,Жуком,Жукові,Жуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname166()
    {
        $this->object->setSecondName('Жупанський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жупанський,Жупанського,Жупанському,Жупанського,Жупанським,Жупанському,Жупанський'), $this->object->getSecondNameCase());
    }
    public function testManSirname167()
    {
        $this->object->setSecondName('Заєць');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Заєць,Зайця,Зайцеві,Зайця,Зайцем,Зайцеві,Зайцю'), $this->object->getSecondNameCase());
    }
    public function testManSirname168()
    {
        $this->object->setSecondName('Забашта');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Забашта,Забашти,Забашті,Забашту,Забаштою,Забашті,Забашто'), $this->object->getSecondNameCase());
    }
    public function testManSirname169()
    {
        $this->object->setSecondName('Заболотний');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Заболотний,Заболотного,Заболотному,Заболотного,Заболотним,Заболотному,Заболотний'), $this->object->getSecondNameCase());
    }
    public function testManSirname170()
    {
        $this->object->setSecondName('Завальнюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Завальнюк,Завальнюка,Завальнюкові,Завальнюка,Завальнюком,Завальнюкові,Завальнюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname171()
    {
        $this->object->setSecondName('Закусило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Закусило,Закусила,Закусилові,Закусила,Закусилом,Закусилові,Закусиле'), $this->object->getSecondNameCase());
    }
    public function testManSirname172()
    {
        $this->object->setSecondName('Залізняк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Залізняк,Залізняка,Залізнякові,Залізняка,Залізняком,Залізнякові,Залізняче'), $this->object->getSecondNameCase());
    }
    public function testManSirname173()
    {
        $this->object->setSecondName('Заруба');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Заруба,Заруби,Зарубі,Зарубу,Зарубою,Зарубі,Зарубо'), $this->object->getSecondNameCase());
    }
    public function testManSirname174()
    {
        $this->object->setSecondName('Засядько');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Засядько,Засядька,Засядькові,Засядька,Засядьком,Засядькові,Засядьче'), $this->object->getSecondNameCase());
    }
    public function testManSirname175()
    {
        $this->object->setSecondName('Захаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захаренко,Захаренка,Захаренкові,Захаренка,Захаренком,Захаренкові,Захаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname176()
    {
        $this->object->setSecondName('Захарчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захарчук,Захарчука,Захарчукові,Захарчука,Захарчуком,Захарчукові,Захарчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname177()
    {
        $this->object->setSecondName('Заяць');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Заяць,Зайця,Зайцеві,Зайця,Зайцем,Зайцеві,Зайцю'), $this->object->getSecondNameCase());
    }
    public function testManSirname178()
    {
        $this->object->setSecondName('Заячківський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Заячківський,Заячківського,Заячківському,Заячківського,Заячківським,Заячківському,Заячківський'), $this->object->getSecondNameCase());
    }
    public function testManSirname179()
    {
        $this->object->setSecondName('Зленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зленко,Зленка,Зленкові,Зленка,Зленком,Зленкові,Зленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname180()
    {
        $this->object->setSecondName('Золотаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Золотаренко,Золотаренка,Золотаренкові,Золотаренка,Золотаренком,Золотаренкові,Золотаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname181()
    {
        $this->object->setSecondName('Кабачок');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кабачок,Кабачка,Кабачкові,Кабачка,Кабачком,Кабачкові,Кабачче'), $this->object->getSecondNameCase());
    }
    public function testManSirname182()
    {
        $this->object->setSecondName('Каганець');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каганець,Каганця,Каганцеві,Каганця,Каганцем,Каганцеві,Каганцю'), $this->object->getSecondNameCase());
    }
    public function testManSirname183()
    {
        $this->object->setSecondName('Калинович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калинович,Калиновича,Калиновичеві,Калиновича,Калиновичем,Калиновичеві,Калиновиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname184()
    {
        $this->object->setSecondName('Кармалюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кармалюк,Кармалюка,Кармалюкові,Кармалюка,Кармалюком,Кармалюкові,Кармалюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname185()
    {
        $this->object->setSecondName('Карпенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карпенко,Карпенка,Карпенкові,Карпенка,Карпенком,Карпенкові,Карпенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname186()
    {
        $this->object->setSecondName('Кириленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кириленко,Кириленка,Кириленкові,Кириленка,Кириленком,Кириленкові,Кириленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname187()
    {
        $this->object->setSecondName('Китастий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Китастий,Китастого,Китастому,Китастого,Китастим,Китастому,Китастий'), $this->object->getSecondNameCase());
    }
    public function testManSirname188()
    {
        $this->object->setSecondName('Кицай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кицай,Кицая,Кицаєві,Кицая,Кицаєм,Кицаєві,Кицаю'), $this->object->getSecondNameCase());
    }
    public function testManSirname189()
    {
        $this->object->setSecondName('Клименко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Клименко,Клименка,Клименкові,Клименка,Клименком,Клименкові,Клименче'), $this->object->getSecondNameCase());
    }
    public function testManSirname190()
    {
        $this->object->setSecondName('Климчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Климчук,Климчука,Климчукові,Климчука,Климчуком,Климчукові,Климчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname191()
    {
        $this->object->setSecondName('Кмета');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кмета,Кмети,Кметі,Кмету,Кметою,Кметі,Кмето'), $this->object->getSecondNameCase());
    }
    public function testManSirname192()
    {
        $this->object->setSecondName('Книш');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Книш,Книша,Книшеві,Книша,Книшем,Книшеві,Книше'), $this->object->getSecondNameCase());
    }
    public function testManSirname193()
    {
        $this->object->setSecondName('Ковалів');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковалів,Ковалова,Коваловові,Ковалова,Коваловом,Коваловові,Ковалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname194()
    {
        $this->object->setSecondName('Коваленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коваленко,Коваленка,Коваленкові,Коваленка,Коваленком,Коваленкові,Коваленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname195()
    {
        $this->object->setSecondName('Коваль');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коваль,Коваля,Ковалеві,Коваля,Ковалем,Ковалеві,Ковалю'), $this->object->getSecondNameCase());
    }
    public function testManSirname196()
    {
        $this->object->setSecondName('Ковальчик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковальчик,Ковальчика,Ковальчикові,Ковальчика,Ковальчиком,Ковальчикові,Ковальчиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname197()
    {
        $this->object->setSecondName('Ковальчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковальчук,Ковальчука,Ковальчукові,Ковальчука,Ковальчуком,Ковальчукові,Ковальчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname198()
    {
        $this->object->setSecondName('Кованько');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кованько,Кованька,Кованькові,Кованька,Кованьком,Кованькові,Кованьче'), $this->object->getSecondNameCase());
    }
    public function testManSirname199()
    {
        $this->object->setSecondName('Ковтун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковтун,Ковтуна,Ковтунові,Ковтуна,Ковтуном,Ковтунові,Ковтуне'), $this->object->getSecondNameCase());
    }
    public function testManSirname200()
    {
        $this->object->setSecondName('Козаченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козаченко,Козаченка,Козаченкові,Козаченка,Козаченком,Козаченкові,Козаченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname201()
    {
        $this->object->setSecondName('Козачинський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козачинський,Козачинського,Козачинському,Козачинського,Козачинським,Козачинському,Козачинський'), $this->object->getSecondNameCase());
    }
    public function testManSirname202()
    {
        $this->object->setSecondName('Козачок');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козачок,Козачка,Козачкові,Козачка,Козачком,Козачкові,Козачче'), $this->object->getSecondNameCase());
    }
    public function testManSirname203()
    {
        $this->object->setSecondName('Козубенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козубенко,Козубенка,Козубенкові,Козубенка,Козубенком,Козубенкові,Козубенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname204()
    {
        $this->object->setSecondName('Колесник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колесник,Колесника,Колесникові,Колесника,Колесником,Колесникові,Колесниче'), $this->object->getSecondNameCase());
    }
    public function testManSirname205()
    {
        $this->object->setSecondName('Колодій');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колодій,Колодія,Колодієві,Колодія,Колодієм,Колодієві,Колодію'), $this->object->getSecondNameCase());
    }
    public function testManSirname206()
    {
        $this->object->setSecondName('Колодний');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колодний,Колодного,Колодному,Колодного,Колодним,Колодному,Колодний'), $this->object->getSecondNameCase());
    }
    public function testManSirname207()
    {
        $this->object->setSecondName('Коломієць');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коломієць,Коломійця,Коломійцеві,Коломійця,Коломійцем,Коломійцеві,Коломійцю'), $this->object->getSecondNameCase());
    }
    public function testManSirname208()
    {
        $this->object->setSecondName('Комар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Комар,Комара,Комарові,Комара,Комаром,Комарові,Комаре'), $this->object->getSecondNameCase());
    }
    public function testManSirname209()
    {
        $this->object->setSecondName('Кондратюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кондратюк,Кондратюка,Кондратюкові,Кондратюка,Кондратюком,Кондратюкові,Кондратюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname210()
    {
        $this->object->setSecondName('Корецький');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корецький,Корецького,Корецькому,Корецького,Корецьким,Корецькому,Корецький'), $this->object->getSecondNameCase());
    }
    public function testManSirname211()
    {
        $this->object->setSecondName('Корж');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корж,Коржа,Коржеві,Коржа,Коржем,Коржеві,Корже'), $this->object->getSecondNameCase());
    }
    public function testManSirname212()
    {
        $this->object->setSecondName('Корнійчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корнійчук,Корнійчука,Корнійчукові,Корнійчука,Корнійчуком,Корнійчукові,Корнійчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname213()
    {
        $this->object->setSecondName('Коробка');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коробка,Коробки,Коробці,Коробку,Коробкою,Коробці,Коробко'), $this->object->getSecondNameCase());
    }
    public function testManSirname214()
    {
        $this->object->setSecondName('Королюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Королюк,Королюка,Королюкові,Королюка,Королюком,Королюкові,Королюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname215()
    {
        $this->object->setSecondName('Короткевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Короткевич,Короткевича,Короткевичеві,Короткевича,Короткевичем,Короткевичеві,Короткевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname216()
    {
        $this->object->setSecondName('Корпанюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корпанюк,Корпанюка,Корпанюкові,Корпанюка,Корпанюком,Корпанюкові,Корпанюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname217()
    {
        $this->object->setSecondName('Корчак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корчак,Корчака,Корчакові,Корчака,Корчаком,Корчакові,Корчаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname218()
    {
        $this->object->setSecondName('Корчинський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корчинський,Корчинського,Корчинському,Корчинського,Корчинським,Корчинському,Корчинський'), $this->object->getSecondNameCase());
    }
    public function testManSirname219()
    {
        $this->object->setSecondName('Косенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Косенко,Косенка,Косенкові,Косенка,Косенком,Косенкові,Косенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname220()
    {
        $this->object->setSecondName('Костенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Костенко,Костенка,Костенкові,Костенка,Костенком,Костенкові,Костенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname221()
    {
        $this->object->setSecondName('Коструба');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коструба,Коструби,Кострубі,Кострубу,Кострубою,Кострубі,Кострубо'), $this->object->getSecondNameCase());
    }
    public function testManSirname222()
    {
        $this->object->setSecondName('Костюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Костюк,Костюка,Костюкові,Костюка,Костюком,Костюкові,Костюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname223()
    {
        $this->object->setSecondName('Котляр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Котляр,Котляра,Котлярові,Котляра,Котляром,Котлярові,Котляре'), $this->object->getSecondNameCase());
    }
    public function testManSirname224()
    {
        $this->object->setSecondName('Котляревський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Котляревський,Котляревського,Котляревському,Котляревського,Котляревським,Котляревському,Котляревський'), $this->object->getSecondNameCase());
    }
    public function testManSirname225()
    {
        $this->object->setSecondName('Кравців');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кравців,Кравцова,Кравцовові,Кравцова,Кравцовом,Кравцовові,Кравцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname226()
    {
        $this->object->setSecondName('Кравченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кравченко,Кравченка,Кравченкові,Кравченка,Кравченком,Кравченкові,Кравченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname227()
    {
        $this->object->setSecondName('Кравчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кравчук,Кравчука,Кравчукові,Кравчука,Кравчуком,Кравчукові,Кравчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname228()
    {
        $this->object->setSecondName('Красовський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Красовський,Красовського,Красовському,Красовського,Красовським,Красовському,Красовський'), $this->object->getSecondNameCase());
    }
    public function testManSirname229()
    {
        $this->object->setSecondName('Криворучко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Криворучко,Криворучка,Криворучкові,Криворучка,Криворучком,Криворучкові,Криворучче'), $this->object->getSecondNameCase());
    }
    public function testManSirname230()
    {
        $this->object->setSecondName('Крикуненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крикуненко,Крикуненка,Крикуненкові,Крикуненка,Крикуненком,Крикуненкові,Крикуненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname231()
    {
        $this->object->setSecondName('Кузьмінський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьмінський,Кузьмінського,Кузьмінському,Кузьмінського,Кузьмінським,Кузьмінському,Кузьмінський'), $this->object->getSecondNameCase());
    }
    public function testManSirname232()
    {
        $this->object->setSecondName('Кулиняк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кулиняк,Кулиняка,Кулинякові,Кулиняка,Кулиняком,Кулинякові,Кулиняче'), $this->object->getSecondNameCase());
    }
    public function testManSirname233()
    {
        $this->object->setSecondName('Кульчицький');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кульчицький,Кульчицького,Кульчицькому,Кульчицького,Кульчицьким,Кульчицькому,Кульчицький'), $this->object->getSecondNameCase());
    }
    public function testManSirname234()
    {
        $this->object->setSecondName('Купчинський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Купчинський,Купчинського,Купчинському,Купчинського,Купчинським,Купчинському,Купчинський'), $this->object->getSecondNameCase());
    }
    public function testManSirname235()
    {
        $this->object->setSecondName('Кухаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кухаренко,Кухаренка,Кухаренкові,Кухаренка,Кухаренком,Кухаренкові,Кухаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname236()
    {
        $this->object->setSecondName('Куц');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куц,Куца,Куцові,Куца,Куцом,Куцові,Куце'), $this->object->getSecondNameCase());
    }
    public function testManSirname237()
    {
        $this->object->setSecondName('Куценко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куценко,Куценка,Куценкові,Куценка,Куценком,Куценкові,Куценче'), $this->object->getSecondNameCase());
    }
    public function testManSirname238()
    {
        $this->object->setSecondName('Кучер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кучер,Кучера,Кучерові,Кучера,Кучером,Кучерові,Кучере'), $this->object->getSecondNameCase());
    }
    public function testManSirname239()
    {
        $this->object->setSecondName('Кучеренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кучеренко,Кучеренка,Кучеренкові,Кучеренка,Кучеренком,Кучеренкові,Кучеренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname240()
    {
        $this->object->setSecondName('Кушнір');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кушнір,Кушнора,Кушнорові,Кушнора,Кушнором,Кушнорові,Кушноре'), $this->object->getSecondNameCase());
    }
    public function testManSirname241()
    {
        $this->object->setSecondName('Лаба');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лаба,Лаби,Лабі,Лабу,Лабою,Лабі,Лабо'), $this->object->getSecondNameCase());
    }
    public function testManSirname242()
    {
        $this->object->setSecondName('Лаврін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лаврін,Лавріна,Лавріну,Лавріна,Лавріном,Лавріну,Лавріне'), $this->object->getSecondNameCase());
    }
    public function testManSirname243()
    {
        $this->object->setSecondName('Лаврик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лаврик,Лаврика,Лаврикові,Лаврика,Лавриком,Лаврикові,Лавриче'), $this->object->getSecondNameCase());
    }
    public function testManSirname244()
    {
        $this->object->setSecondName('Лавриненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лавриненко,Лавриненка,Лавриненкові,Лавриненка,Лавриненком,Лавриненкові,Лавриненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname245()
    {
        $this->object->setSecondName('Лазарчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лазарчук,Лазарчука,Лазарчукові,Лазарчука,Лазарчуком,Лазарчукові,Лазарчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname246()
    {
        $this->object->setSecondName('Лазорко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лазорко,Лазорка,Лазоркові,Лазорка,Лазорком,Лазоркові,Лазорче'), $this->object->getSecondNameCase());
    }
    public function testManSirname247()
    {
        $this->object->setSecondName('Левицький');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Левицький,Левицького,Левицькому,Левицького,Левицьким,Левицькому,Левицький'), $this->object->getSecondNameCase());
    }
    public function testManSirname248()
    {
        $this->object->setSecondName('Левченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Левченко,Левченка,Левченкові,Левченка,Левченком,Левченкові,Левченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname249()
    {
        $this->object->setSecondName('Лесів');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лесів,Лесова,Лесовові,Лесова,Лесовом,Лесовові,Лесове'), $this->object->getSecondNameCase());
    }
    public function testManSirname250()
    {
        $this->object->setSecondName('Лисенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лисенко,Лисенка,Лисенкові,Лисенка,Лисенком,Лисенкові,Лисенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname251()
    {
        $this->object->setSecondName('Литвин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Литвин,Литвина,Литвинові,Литвина,Литвином,Литвинові,Литвине'), $this->object->getSecondNameCase());
    }
    public function testManSirname252()
    {
        $this->object->setSecondName('Литвиненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Литвиненко,Литвиненка,Литвиненкові,Литвиненка,Литвиненком,Литвиненкові,Литвиненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname253()
    {
        $this->object->setSecondName('Литвинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Литвинов,Литвинова,Литвинову,Литвинова,Литвиновим,Литвинову,Литвинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname254()
    {
        $this->object->setSecondName('Литовченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Литовченко,Литовченка,Литовченкові,Литовченка,Литовченком,Литовченкові,Литовченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname255()
    {
        $this->object->setSecondName('Лозина-Лозинський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лозина-Лозинський,Лозина-Лозинського,Лозина-Лозинському,Лозина-Лозинського,Лозина-Лозинським,Лозина-Лозинському,Лозина-Лозинський'), $this->object->getSecondNameCase());
    }
    public function testManSirname256()
    {
        $this->object->setSecondName('Лопатинський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лопатинський,Лопатинського,Лопатинському,Лопатинського,Лопатинським,Лопатинському,Лопатинський'), $this->object->getSecondNameCase());
    }
    public function testManSirname257()
    {
        $this->object->setSecondName('Лукомський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лукомський,Лукомського,Лукомському,Лукомського,Лукомським,Лукомському,Лукомський'), $this->object->getSecondNameCase());
    }
    public function testManSirname258()
    {
        $this->object->setSecondName('Луценко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Луценко,Луценка,Луценкові,Луценка,Луценком,Луценкові,Луценче'), $this->object->getSecondNameCase());
    }
    public function testManSirname259()
    {
        $this->object->setSecondName('Людкевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Людкевич,Людкевича,Людкевичеві,Людкевича,Людкевичем,Людкевичеві,Людкевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname260()
    {
        $this->object->setSecondName('Ляшенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ляшенко,Ляшенка,Ляшенкові,Ляшенка,Ляшенком,Ляшенкові,Ляшенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname261()
    {
        $this->object->setSecondName('Мірошниченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мірошниченко,Мірошниченка,Мірошниченкові,Мірошниченка,Мірошниченком,Мірошниченкові,Мірошниченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname262()
    {
        $this->object->setSecondName('Мірчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мірчук,Мірчука,Мірчукові,Мірчука,Мірчуком,Мірчукові,Мірчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname263()
    {
        $this->object->setSecondName('Міщенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Міщенко,Міщенка,Міщенкові,Міщенка,Міщенком,Міщенкові,Міщенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname264()
    {
        $this->object->setSecondName('Мазур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мазур,Мазура,Мазурові,Мазура,Мазуром,Мазурові,Мазуре'), $this->object->getSecondNameCase());
    }
    public function testManSirname265()
    {
        $this->object->setSecondName('Макаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макаренко,Макаренка,Макаренкові,Макаренка,Макаренком,Макаренкові,Макаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname266()
    {
        $this->object->setSecondName('Максименко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максименко,Максименка,Максименкові,Максименка,Максименком,Максименкові,Максименче'), $this->object->getSecondNameCase());
    }
    public function testManSirname267()
    {
        $this->object->setSecondName('Маланчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маланчук,Маланчука,Маланчукові,Маланчука,Маланчуком,Маланчукові,Маланчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname268()
    {
        $this->object->setSecondName('Малишко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малишко,Малишка,Малишкові,Малишка,Малишком,Малишкові,Малишче'), $this->object->getSecondNameCase());
    }
    public function testManSirname269()
    {
        $this->object->setSecondName('Малкович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малкович,Малковича,Малковичеві,Малковича,Малковичем,Малковичеві,Малковиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname270()
    {
        $this->object->setSecondName('Мамчур');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мамчур,Мамчура,Мамчурові,Мамчура,Мамчуром,Мамчурові,Мамчуре'), $this->object->getSecondNameCase());
    }
    public function testManSirname271()
    {
        $this->object->setSecondName('Маркевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маркевич,Маркевича,Маркевичеві,Маркевича,Маркевичем,Маркевичеві,Маркевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname272()
    {
        $this->object->setSecondName('Мартиненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мартиненко,Мартиненка,Мартиненкові,Мартиненка,Мартиненком,Мартиненкові,Мартиненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname273()
    {
        $this->object->setSecondName('Марунчак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марунчак,Марунчака,Марунчакові,Марунчака,Марунчаком,Марунчакові,Марунчаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname274()
    {
        $this->object->setSecondName('Марценюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марценюк,Марценюка,Марценюкові,Марценюка,Марценюком,Марценюкові,Марценюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname275()
    {
        $this->object->setSecondName('Марченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марченко,Марченка,Марченкові,Марченка,Марченком,Марченкові,Марченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname276()
    {
        $this->object->setSecondName('Марчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марчук,Марчука,Марчукові,Марчука,Марчуком,Марчукові,Марчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname277()
    {
        $this->object->setSecondName('Масоха');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Масоха,Масохи,Масосі,Масоху,Масохою,Масосі,Масохо'), $this->object->getSecondNameCase());
    }
    public function testManSirname278()
    {
        $this->object->setSecondName('Матвієнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвієнко,Матвієнка,Матвієнкові,Матвієнка,Матвієнком,Матвієнкові,Матвієнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname279()
    {
        $this->object->setSecondName('Матюшенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матюшенко,Матюшенка,Матюшенкові,Матюшенка,Матюшенком,Матюшенкові,Матюшенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname280()
    {
        $this->object->setSecondName('Маценко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маценко,Маценка,Маценкові,Маценка,Маценком,Маценкові,Маценче'), $this->object->getSecondNameCase());
    }
    public function testManSirname281()
    {
        $this->object->setSecondName('Мацюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мацюк,Мацюка,Мацюкові,Мацюка,Мацюком,Мацюкові,Мацюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname282()
    {
        $this->object->setSecondName('Мельник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мельник,Мельника,Мельникові,Мельника,Мельником,Мельникові,Мельниче'), $this->object->getSecondNameCase());
    }
    public function testManSirname283()
    {
        $this->object->setSecondName('Мельниченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мельниченко,Мельниченка,Мельниченкові,Мельниченка,Мельниченком,Мельниченкові,Мельниченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname284()
    {
        $this->object->setSecondName('Мельничук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мельничук,Мельничука,Мельничукові,Мельничука,Мельничуком,Мельничукові,Мельничуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname285()
    {
        $this->object->setSecondName('Микитенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Микитенко,Микитенка,Микитенкові,Микитенка,Микитенком,Микитенкові,Микитенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname286()
    {
        $this->object->setSecondName('Микитин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Микитин,Микитина,Микитинові,Микитина,Микитином,Микитинові,Микитине'), $this->object->getSecondNameCase());
    }
    public function testManSirname287()
    {
        $this->object->setSecondName('Мирон');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мирон,Мирона,Миронові,Мирона,Мироном,Миронові,Мироне'), $this->object->getSecondNameCase());
    }
    public function testManSirname288()
    {
        $this->object->setSecondName('Михайленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайленко,Михайленка,Михайленкові,Михайленка,Михайленком,Михайленкові,Михайленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname289()
    {
        $this->object->setSecondName('Михайличенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайличенко,Михайличенка,Михайличенкові,Михайличенка,Михайличенком,Михайличенкові,Михайличенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname290()
    {
        $this->object->setSecondName('Михайлюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлюк,Михайлюка,Михайлюкові,Михайлюка,Михайлюком,Михайлюкові,Михайлюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname291()
    {
        $this->object->setSecondName('Мицик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мицик,Мицика,Мицикові,Мицика,Мициком,Мицикові,Мициче'), $this->object->getSecondNameCase());
    }
    public function testManSirname292()
    {
        $this->object->setSecondName('Мовчан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мовчан,Мовчана,Мовчанові,Мовчана,Мовчаном,Мовчанові,Мовчане'), $this->object->getSecondNameCase());
    }
    public function testManSirname293()
    {
        $this->object->setSecondName('Моргун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моргун,Моргуна,Моргунові,Моргуна,Моргуном,Моргунові,Моргуне'), $this->object->getSecondNameCase());
    }
    public function testManSirname294()
    {
        $this->object->setSecondName('Мороз');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мороз,Мороза,Морозові,Мороза,Морозом,Морозові,Морозе'), $this->object->getSecondNameCase());
    }
    public function testManSirname295()
    {
        $this->object->setSecondName('Москаленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Москаленко,Москаленка,Москаленкові,Москаленка,Москаленком,Москаленкові,Москаленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname296()
    {
        $this->object->setSecondName('Москаль');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Москаль,Москаля,Москалеві,Москаля,Москалем,Москалеві,Москалю'), $this->object->getSecondNameCase());
    }
    public function testManSirname297()
    {
        $this->object->setSecondName('Мошак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мошак,Мошака,Мошакові,Мошака,Мошаком,Мошакові,Мошаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname298()
    {
        $this->object->setSecondName('Муратова');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Муратова,Муратови,Муратові,Муратову,Муратовою,Муратові,Муратово'), $this->object->getSecondNameCase());
    }
    public function testManSirname299()
    {
        $this->object->setSecondName('Мусієнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мусієнко,Мусієнка,Мусієнкові,Мусієнка,Мусієнком,Мусієнкові,Мусієнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname300()
    {
        $this->object->setSecondName('Назаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Назаренко,Назаренка,Назаренкові,Назаренка,Назаренком,Назаренкові,Назаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname301()
    {
        $this->object->setSecondName('Наливайко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Наливайко,Наливайка,Наливайкові,Наливайка,Наливайком,Наливайкові,Наливайче'), $this->object->getSecondNameCase());
    }
    public function testManSirname302()
    {
        $this->object->setSecondName('Негребецький');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Негребецький,Негребецького,Негребецькому,Негребецького,Негребецьким,Негребецькому,Негребецький'), $this->object->getSecondNameCase());
    }
    public function testManSirname303()
    {
        $this->object->setSecondName('Непорожній');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Непорожній,Непорожнія,Непорожнієві,Непорожнія,Непорожнієм,Непорожнієві,Непорожнію'), $this->object->getSecondNameCase());
    }
    public function testManSirname304()
    {
        $this->object->setSecondName('Нестеренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нестеренко,Нестеренка,Нестеренкові,Нестеренка,Нестеренком,Нестеренкові,Нестеренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname305()
    {
        $this->object->setSecondName('Нечай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нечай,Нечая,Нечаєві,Нечая,Нечаєм,Нечаєві,Нечаю'), $this->object->getSecondNameCase());
    }
    public function testManSirname306()
    {
        $this->object->setSecondName('Нечипоренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нечипоренко,Нечипоренка,Нечипоренкові,Нечипоренка,Нечипоренком,Нечипоренкові,Нечипоренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname307()
    {
        $this->object->setSecondName('Оберемченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Оберемченко,Оберемченка,Оберемченкові,Оберемченка,Оберемченком,Оберемченкові,Оберемченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname308()
    {
        $this->object->setSecondName('Овчаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Овчаренко,Овчаренка,Овчаренкові,Овчаренка,Овчаренком,Овчаренкові,Овчаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname309()
    {
        $this->object->setSecondName('Олійник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олійник,Олійника,Олійникові,Олійника,Олійником,Олійникові,Олійниче'), $this->object->getSecondNameCase());
    }
    public function testManSirname310()
    {
        $this->object->setSecondName('Олексієнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олексієнко,Олексієнка,Олексієнкові,Олексієнка,Олексієнком,Олексієнкові,Олексієнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname311()
    {
        $this->object->setSecondName('Омельченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Омельченко,Омельченка,Омельченкові,Омельченка,Омельченком,Омельченкові,Омельченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname312()
    {
        $this->object->setSecondName('Омельчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Омельчук,Омельчука,Омельчукові,Омельчука,Омельчуком,Омельчукові,Омельчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname313()
    {
        $this->object->setSecondName('Онищенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онищенко,Онищенка,Онищенкові,Онищенка,Онищенком,Онищенкові,Онищенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname314()
    {
        $this->object->setSecondName('Онопенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Онопенко,Онопенка,Онопенкові,Онопенка,Онопенком,Онопенкові,Онопенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname315()
    {
        $this->object->setSecondName('Опанасенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Опанасенко,Опанасенка,Опанасенкові,Опанасенка,Опанасенком,Опанасенкові,Опанасенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname316()
    {
        $this->object->setSecondName('Осадчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осадчук,Осадчука,Осадчукові,Осадчука,Осадчуком,Осадчукові,Осадчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname317()
    {
        $this->object->setSecondName('Осика');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осика,Осики,Осиці,Осику,Осикою,Осиці,Осико'), $this->object->getSecondNameCase());
    }
    public function testManSirname318()
    {
        $this->object->setSecondName('Остапенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остапенко,Остапенка,Остапенкові,Остапенка,Остапенком,Остапенкові,Остапенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname319()
    {
        $this->object->setSecondName('Остроградський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Остроградський,Остроградського,Остроградському,Остроградського,Остроградським,Остроградському,Остроградський'), $this->object->getSecondNameCase());
    }
    public function testManSirname320()
    {
        $this->object->setSecondName('Півторак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Півторак,Півторака,Півторакові,Півторака,Півтораком,Півторакові,Півтораче'), $this->object->getSecondNameCase());
    }
    public function testManSirname321()
    {
        $this->object->setSecondName('Підопригора');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Підопригора,Підопригори,Підопригорі,Підопригору,Підопригорою,Підопригорі,Підопригоро'), $this->object->getSecondNameCase());
    }
    public function testManSirname322()
    {
        $this->object->setSecondName('Павленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павленко,Павленка,Павленкові,Павленка,Павленком,Павленкові,Павленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname323()
    {
        $this->object->setSecondName('Павлюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлюк,Павлюка,Павлюкові,Павлюка,Павлюком,Павлюкові,Павлюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname324()
    {
        $this->object->setSecondName('Павлюченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлюченко,Павлюченка,Павлюченкові,Павлюченка,Павлюченком,Павлюченкові,Павлюченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname325()
    {
        $this->object->setSecondName('Пазенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пазенко,Пазенка,Пазенкові,Пазенка,Пазенком,Пазенкові,Пазенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname326()
    {
        $this->object->setSecondName('Паламарчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Паламарчук,Паламарчука,Паламарчукові,Паламарчука,Паламарчуком,Паламарчукові,Паламарчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname327()
    {
        $this->object->setSecondName('Панас');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панас,Панаса,Панасові,Панаса,Панасом,Панасові,Панасе'), $this->object->getSecondNameCase());
    }
    public function testManSirname328()
    {
        $this->object->setSecondName('Панасюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панасюк,Панасюка,Панасюкові,Панасюка,Панасюком,Панасюкові,Панасюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname329()
    {
        $this->object->setSecondName('Паньківський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Паньківський,Паньківського,Паньківському,Паньківського,Паньківським,Паньківському,Паньківський'), $this->object->getSecondNameCase());
    }
    public function testManSirname330()
    {
        $this->object->setSecondName('Пархоменко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пархоменко,Пархоменка,Пархоменкові,Пархоменка,Пархоменком,Пархоменкові,Пархоменче'), $this->object->getSecondNameCase());
    }
    public function testManSirname331()
    {
        $this->object->setSecondName('Пасічник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пасічник,Пасічника,Пасічникові,Пасічника,Пасічником,Пасічникові,Пасічниче'), $this->object->getSecondNameCase());
    }
    public function testManSirname332()
    {
        $this->object->setSecondName('Пасько');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пасько,Паська,Паськові,Паська,Паськом,Паськові,Пасьче'), $this->object->getSecondNameCase());
    }
    public function testManSirname333()
    {
        $this->object->setSecondName('Пашко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пашко,Пашка,Пашкові,Пашка,Пашком,Пашкові,Пашче'), $this->object->getSecondNameCase());
    }
    public function testManSirname334()
    {
        $this->object->setSecondName('Пащенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пащенко,Пащенка,Пащенкові,Пащенка,Пащенком,Пащенкові,Пащенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname335()
    {
        $this->object->setSecondName('Перебийніс');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Перебийніс,Перебийноса,Перебийносові,Перебийноса,Перебийносом,Перебийносові,Перебийносе'), $this->object->getSecondNameCase());
    }
    public function testManSirname336()
    {
        $this->object->setSecondName('Петренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петренко,Петренка,Петренкові,Петренка,Петренком,Петренкові,Петренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname337()
    {
        $this->object->setSecondName('Пилипенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пилипенко,Пилипенка,Пилипенкові,Пилипенка,Пилипенком,Пилипенкові,Пилипенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname338()
    {
        $this->object->setSecondName('Пилипишин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пилипишин,Пилипишина,Пилипишинові,Пилипишина,Пилипишином,Пилипишинові,Пилипишине'), $this->object->getSecondNameCase());
    }
    public function testManSirname339()
    {
        $this->object->setSecondName('Пилипчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пилипчук,Пилипчука,Пилипчукові,Пилипчука,Пилипчуком,Пилипчукові,Пилипчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname340()
    {
        $this->object->setSecondName('Писаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Писаренко,Писаренка,Писаренкові,Писаренка,Писаренком,Писаренкові,Писаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname341()
    {
        $this->object->setSecondName('Писарчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Писарчук,Писарчука,Писарчукові,Писарчука,Писарчуком,Писарчукові,Писарчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname342()
    {
        $this->object->setSecondName('Плющ');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Плющ,Плюща,Плющеві,Плюща,Плющем,Плющеві,Плюще'), $this->object->getSecondNameCase());
    }
    public function testManSirname343()
    {
        $this->object->setSecondName('Покотило');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Покотило,Покотила,Покотилові,Покотила,Покотилом,Покотилові,Покотиле'), $this->object->getSecondNameCase());
    }
    public function testManSirname344()
    {
        $this->object->setSecondName('Поліщук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поліщук,Поліщука,Поліщукові,Поліщука,Поліщуком,Поліщукові,Поліщуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname345()
    {
        $this->object->setSecondName('Польовий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Польовий,Польового,Польовому,Польового,Польовим,Польовому,Польовий'), $this->object->getSecondNameCase());
    }
    public function testManSirname346()
    {
        $this->object->setSecondName('Полянський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Полянський,Полянського,Полянському,Полянського,Полянським,Полянському,Полянський'), $this->object->getSecondNameCase());
    }
    public function testManSirname347()
    {
        $this->object->setSecondName('Пономаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пономаренко,Пономаренка,Пономаренкові,Пономаренка,Пономаренком,Пономаренкові,Пономаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname348()
    {
        $this->object->setSecondName('Пономарьов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пономарьов,Пономарьова,Пономарьову,Пономарьова,Пономарьовим,Пономарьову,Пономарьове'), $this->object->getSecondNameCase());
    }
    public function testManSirname349()
    {
        $this->object->setSecondName('Попадюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Попадюк,Попадюка,Попадюкові,Попадюка,Попадюком,Попадюкові,Попадюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname350()
    {
        $this->object->setSecondName('Попенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Попенко,Попенка,Попенкові,Попенка,Попенком,Попенкові,Попенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname351()
    {
        $this->object->setSecondName('Потапенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Потапенко,Потапенка,Потапенкові,Потапенка,Потапенком,Потапенкові,Потапенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname352()
    {
        $this->object->setSecondName('Потебенько');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Потебенько,Потебенька,Потебенькові,Потебенька,Потебеньком,Потебенькові,Потебеньче'), $this->object->getSecondNameCase());
    }
    public function testManSirname353()
    {
        $this->object->setSecondName('Прийма');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прийма,Прийми,Приймі,Прийму,Приймою,Приймі,Приймо'), $this->object->getSecondNameCase());
    }
    public function testManSirname354()
    {
        $this->object->setSecondName('Приймак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Приймак,Приймака,Приймакові,Приймака,Приймаком,Приймакові,Приймаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname355()
    {
        $this->object->setSecondName('Присяжнюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Присяжнюк,Присяжнюка,Присяжнюкові,Присяжнюка,Присяжнюком,Присяжнюкові,Присяжнюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname356()
    {
        $this->object->setSecondName('Приходько');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Приходько,Приходька,Приходькові,Приходька,Приходьком,Приходькові,Приходьче'), $this->object->getSecondNameCase());
    }
    public function testManSirname357()
    {
        $this->object->setSecondName('Продан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Продан,Продана,Проданові,Продана,Проданом,Проданові,Продане'), $this->object->getSecondNameCase());
    }
    public function testManSirname358()
    {
        $this->object->setSecondName('Проценко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Проценко,Проценка,Проценкові,Проценка,Проценком,Проценкові,Проценче'), $this->object->getSecondNameCase());
    }
    public function testManSirname359()
    {
        $this->object->setSecondName('Проць');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Проць,Проця,Процеві,Проця,Процем,Процеві,Процю'), $this->object->getSecondNameCase());
    }
    public function testManSirname360()
    {
        $this->object->setSecondName('Процюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Процюк,Процюка,Процюкові,Процюка,Процюком,Процюкові,Процюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname361()
    {
        $this->object->setSecondName('Пушкар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пушкар,Пушкара,Пушкарові,Пушкара,Пушкаром,Пушкарові,Пушкаре'), $this->object->getSecondNameCase());
    }
    public function testManSirname362()
    {
        $this->object->setSecondName('Різун');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Різун,Різуна,Різунові,Різуна,Різуном,Різунові,Різуне'), $this->object->getSecondNameCase());
    }
    public function testManSirname363()
    {
        $this->object->setSecondName('Радченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Радченко,Радченка,Радченкові,Радченка,Радченком,Радченкові,Радченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname364()
    {
        $this->object->setSecondName('Рибальченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рибальченко,Рибальченка,Рибальченкові,Рибальченка,Рибальченком,Рибальченкові,Рибальченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname365()
    {
        $this->object->setSecondName('Римар');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Римар,Римара,Римарові,Римара,Римаром,Римарові,Римаре'), $this->object->getSecondNameCase());
    }
    public function testManSirname366()
    {
        $this->object->setSecondName('Рожок');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рожок,Рожка,Рожкові,Рожка,Рожком,Рожкові,Рожче'), $this->object->getSecondNameCase());
    }
    public function testManSirname367()
    {
        $this->object->setSecondName('Романенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романенко,Романенка,Романенкові,Романенка,Романенком,Романенкові,Романенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname368()
    {
        $this->object->setSecondName('Романишин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романишин,Романишина,Романишинові,Романишина,Романишином,Романишинові,Романишине'), $this->object->getSecondNameCase());
    }
    public function testManSirname369()
    {
        $this->object->setSecondName('Романчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романчук,Романчука,Романчукові,Романчука,Романчуком,Романчукові,Романчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname370()
    {
        $this->object->setSecondName('Романюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романюк,Романюка,Романюкові,Романюка,Романюком,Романюкові,Романюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname371()
    {
        $this->object->setSecondName('Рошкевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рошкевич,Рошкевича,Рошкевичеві,Рошкевича,Рошкевичем,Рошкевичеві,Рошкевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname372()
    {
        $this->object->setSecondName('Рубан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рубан,Рубана,Рубанові,Рубана,Рубаном,Рубанові,Рубане'), $this->object->getSecondNameCase());
    }
    public function testManSirname373()
    {
        $this->object->setSecondName('Руденко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Руденко,Руденка,Руденкові,Руденка,Руденком,Руденкові,Руденче'), $this->object->getSecondNameCase());
    }
    public function testManSirname374()
    {
        $this->object->setSecondName('Рябовіл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рябовіл,Рябовола,Рябоволові,Рябовола,Рябоволом,Рябоволові,Рябоволе'), $this->object->getSecondNameCase());
    }
    public function testManSirname375()
    {
        $this->object->setSecondName('Сімашкевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сімашкевич,Сімашкевича,Сімашкевичеві,Сімашкевича,Сімашкевичем,Сімашкевичеві,Сімашкевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname376()
    {
        $this->object->setSecondName('Саєнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Саєнко,Саєнка,Саєнкові,Саєнка,Саєнком,Саєнкові,Саєнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname377()
    {
        $this->object->setSecondName('Савенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савенко,Савенка,Савенкові,Савенка,Савенком,Савенкові,Савенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname378()
    {
        $this->object->setSecondName('Савицька');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савицька,Савицьки,Савицьці,Савицьку,Савицькою,Савицьці,Савицько'), $this->object->getSecondNameCase());
    }
    public function testManSirname379()
    {
        $this->object->setSecondName('Савка');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савка,Савки,Савці,Савку,Савкою,Савці,Савко'), $this->object->getSecondNameCase());
    }
    public function testManSirname380()
    {
        $this->object->setSecondName('Савченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савченко,Савченка,Савченкові,Савченка,Савченком,Савченкові,Савченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname381()
    {
        $this->object->setSecondName('Савчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савчук,Савчука,Савчукові,Савчука,Савчуком,Савчукові,Савчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname382()
    {
        $this->object->setSecondName('Сак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сак,Сака,Сакові,Сака,Саком,Сакові,Саче'), $this->object->getSecondNameCase());
    }
    public function testManSirname383()
    {
        $this->object->setSecondName('Самборський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самборський,Самборського,Самборському,Самборського,Самборським,Самборському,Самборський'), $this->object->getSecondNameCase());
    }
    public function testManSirname384()
    {
        $this->object->setSecondName('Самойлович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самойлович,Самойловича,Самойловичеві,Самойловича,Самойловичем,Самойловичеві,Самойловиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname385()
    {
        $this->object->setSecondName('Самусь');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самусь,Самуся,Самусеві,Самуся,Самусем,Самусеві,Самусю'), $this->object->getSecondNameCase());
    }
    public function testManSirname386()
    {
        $this->object->setSecondName('Свида');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Свида,Свиди,Свиді,Свиду,Свидою,Свиді,Свидо'), $this->object->getSecondNameCase());
    }
    public function testManSirname387()
    {
        $this->object->setSecondName('Семашко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семашко,Семашка,Семашкові,Семашка,Семашком,Семашкові,Семашче'), $this->object->getSecondNameCase());
    }
    public function testManSirname388()
    {
        $this->object->setSecondName('Семененко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семененко,Семененка,Семененкові,Семененка,Семененком,Семененкові,Семененче'), $this->object->getSecondNameCase());
    }
    public function testManSirname389()
    {
        $this->object->setSecondName('Семенець');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенець,Семенця,Семенцеві,Семенця,Семенцем,Семенцеві,Семенцю'), $this->object->getSecondNameCase());
    }
    public function testManSirname390()
    {
        $this->object->setSecondName('Семенина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенина,Семенини,Семенині,Семенину,Семениною,Семенині,Семенино'), $this->object->getSecondNameCase());
    }
    public function testManSirname391()
    {
        $this->object->setSecondName('Семенченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенченко,Семенченка,Семенченкові,Семенченка,Семенченком,Семенченкові,Семенченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname392()
    {
        $this->object->setSecondName('Семенюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенюк,Семенюка,Семенюкові,Семенюка,Семенюком,Семенюкові,Семенюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname393()
    {
        $this->object->setSecondName('Семеренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семеренко,Семеренка,Семеренкові,Семеренка,Семеренком,Семеренкові,Семеренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname394()
    {
        $this->object->setSecondName('Сидоренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидоренко,Сидоренка,Сидоренкові,Сидоренка,Сидоренком,Сидоренкові,Сидоренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname395()
    {
        $this->object->setSecondName('Силенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Силенко,Силенка,Силенкові,Силенка,Силенком,Силенкові,Силенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname396()
    {
        $this->object->setSecondName('Симоненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Симоненко,Симоненка,Симоненкові,Симоненка,Симоненком,Симоненкові,Симоненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname397()
    {
        $this->object->setSecondName('Симчич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Симчич,Симчича,Симчичеві,Симчича,Симчичем,Симчичеві,Симчиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname398()
    {
        $this->object->setSecondName('Скрипник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скрипник,Скрипника,Скрипникові,Скрипника,Скрипником,Скрипникові,Скрипниче'), $this->object->getSecondNameCase());
    }
    public function testManSirname399()
    {
        $this->object->setSecondName('Скуратівський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скуратівський,Скуратівського,Скуратівському,Скуратівського,Скуратівським,Скуратівському,Скуратівський'), $this->object->getSecondNameCase());
    }
    public function testManSirname400()
    {
        $this->object->setSecondName('Слободян');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Слободян,Слободяна,Слободянові,Слободяна,Слободяном,Слободянові,Слободяне'), $this->object->getSecondNameCase());
    }
    public function testManSirname401()
    {
        $this->object->setSecondName('Слободянюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Слободянюк,Слободянюка,Слободянюкові,Слободянюка,Слободянюком,Слободянюкові,Слободянюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname402()
    {
        $this->object->setSecondName('Смик');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Смик,Смика,Смикові,Смика,Смиком,Смикові,Смиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname403()
    {
        $this->object->setSecondName('Смогоржевський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Смогоржевський,Смогоржевського,Смогоржевському,Смогоржевського,Смогоржевським,Смогоржевському,Смогоржевський'), $this->object->getSecondNameCase());
    }
    public function testManSirname404()
    {
        $this->object->setSecondName('Собчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Собчук,Собчука,Собчукові,Собчука,Собчуком,Собчукові,Собчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname405()
    {
        $this->object->setSecondName('Сопронюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сопронюк,Сопронюка,Сопронюкові,Сопронюка,Сопронюком,Сопронюкові,Сопронюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname406()
    {
        $this->object->setSecondName('Сорока');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сорока,Сороки,Сороці,Сороку,Сорокою,Сороці,Сороко'), $this->object->getSecondNameCase());
    }
    public function testManSirname407()
    {
        $this->object->setSecondName('Сохань');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сохань,Соханя,Соханеві,Соханя,Соханем,Соханеві,Соханю'), $this->object->getSecondNameCase());
    }
    public function testManSirname408()
    {
        $this->object->setSecondName('Стадник');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стадник,Стадника,Стадникові,Стадника,Стадником,Стадникові,Стадниче'), $this->object->getSecondNameCase());
    }
    public function testManSirname409()
    {
        $this->object->setSecondName('Стельмах');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стельмах,Стельмаха,Стельмахові,Стельмаха,Стельмахом,Стельмахові,Стельмахе'), $this->object->getSecondNameCase());
    }
    public function testManSirname410()
    {
        $this->object->setSecondName('Степаненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степаненко,Степаненка,Степаненкові,Степаненка,Степаненком,Степаненкові,Степаненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname411()
    {
        $this->object->setSecondName('Степура');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степура,Степури,Степурі,Степуру,Степурою,Степурі,Степуро'), $this->object->getSecondNameCase());
    }
    public function testManSirname412()
    {
        $this->object->setSecondName('Стеценко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стеценко,Стеценка,Стеценкові,Стеценка,Стеценком,Стеценкові,Стеценче'), $this->object->getSecondNameCase());
    }
    public function testManSirname413()
    {
        $this->object->setSecondName('Стецюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стецюк,Стецюка,Стецюкові,Стецюка,Стецюком,Стецюкові,Стецюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname414()
    {
        $this->object->setSecondName('Струтинський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Струтинський,Струтинського,Струтинському,Струтинського,Струтинським,Струтинському,Струтинський'), $this->object->getSecondNameCase());
    }
    public function testManSirname415()
    {
        $this->object->setSecondName('Сулима');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сулима,Сулими,Сулимі,Сулиму,Сулимою,Сулимі,Сулимо'), $this->object->getSecondNameCase());
    }
    public function testManSirname416()
    {
        $this->object->setSecondName('Супруненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Супруненко,Супруненка,Супруненкові,Супруненка,Супруненком,Супруненкові,Супруненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname417()
    {
        $this->object->setSecondName('Тараненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тараненко,Тараненка,Тараненкові,Тараненка,Тараненком,Тараненкові,Тараненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname418()
    {
        $this->object->setSecondName('Татаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Татаренко,Татаренка,Татаренкові,Татаренка,Татаренком,Татаренкові,Татаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname419()
    {
        $this->object->setSecondName('Теплицький');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Теплицький,Теплицького,Теплицькому,Теплицького,Теплицьким,Теплицькому,Теплицький'), $this->object->getSecondNameCase());
    }
    public function testManSirname420()
    {
        $this->object->setSecondName('Терещенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Терещенко,Терещенка,Терещенкові,Терещенка,Терещенком,Терещенкові,Терещенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname421()
    {
        $this->object->setSecondName('Терещук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Терещук,Терещука,Терещукові,Терещука,Терещуком,Терещукові,Терещуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname422()
    {
        $this->object->setSecondName('Тесленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тесленко,Тесленка,Тесленкові,Тесленка,Тесленком,Тесленкові,Тесленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname423()
    {
        $this->object->setSecondName('Тимошенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимошенко,Тимошенка,Тимошенкові,Тимошенка,Тимошенком,Тимошенкові,Тимошенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname424()
    {
        $this->object->setSecondName('Тимощук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимощук,Тимощука,Тимощукові,Тимощука,Тимощуком,Тимощукові,Тимощуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname425()
    {
        $this->object->setSecondName('Тимчак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимчак,Тимчака,Тимчакові,Тимчака,Тимчаком,Тимчакові,Тимчаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname426()
    {
        $this->object->setSecondName('Титаренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Титаренко,Титаренка,Титаренкові,Титаренка,Титаренком,Титаренкові,Титаренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname427()
    {
        $this->object->setSecondName('Тищенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тищенко,Тищенка,Тищенкові,Тищенка,Тищенком,Тищенкові,Тищенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname428()
    {
        $this->object->setSecondName('Ткач');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ткач,Ткача,Ткачеві,Ткача,Ткачем,Ткачеві,Ткаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname429()
    {
        $this->object->setSecondName('Ткаченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ткаченко,Ткаченка,Ткаченкові,Ткаченка,Ткаченком,Ткаченкові,Ткаченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname430()
    {
        $this->object->setSecondName('Ткачук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ткачук,Ткачука,Ткачукові,Ткачука,Ткачуком,Ткачукові,Ткачуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname431()
    {
        $this->object->setSecondName('Толочко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Толочко,Толочка,Толочкові,Толочка,Толочком,Толочкові,Толочче'), $this->object->getSecondNameCase());
    }
    public function testManSirname432()
    {
        $this->object->setSecondName('Томенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Томенко,Томенка,Томенкові,Томенка,Томенком,Томенкові,Томенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname433()
    {
        $this->object->setSecondName('Тулуб');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тулуб,Тулуба,Тулубові,Тулуба,Тулубом,Тулубові,Тулубе'), $this->object->getSecondNameCase());
    }
    public function testManSirname434()
    {
        $this->object->setSecondName('Удовенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Удовенко,Удовенка,Удовенкові,Удовенка,Удовенком,Удовенкові,Удовенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname435()
    {
        $this->object->setSecondName('Удовиченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Удовиченко,Удовиченка,Удовиченкові,Удовиченка,Удовиченком,Удовиченкові,Удовиченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname436()
    {
        $this->object->setSecondName('Усенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Усенко,Усенка,Усенкові,Усенка,Усенком,Усенкові,Усенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname437()
    {
        $this->object->setSecondName('Філоненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Філоненко,Філоненка,Філоненкові,Філоненка,Філоненком,Філоненкові,Філоненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname438()
    {
        $this->object->setSecondName('Феденко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Феденко,Феденка,Феденкові,Феденка,Феденком,Феденкові,Феденче'), $this->object->getSecondNameCase());
    }
    public function testManSirname439()
    {
        $this->object->setSecondName('Федоренко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федоренко,Федоренка,Федоренкові,Федоренка,Федоренком,Федоренкові,Федоренче'), $this->object->getSecondNameCase());
    }
    public function testManSirname440()
    {
        $this->object->setSecondName('Федорук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федорук,Федорука,Федорукові,Федорука,Федоруком,Федорукові,Федоруче'), $this->object->getSecondNameCase());
    }
    public function testManSirname441()
    {
        $this->object->setSecondName('Фещенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фещенко,Фещенка,Фещенкові,Фещенка,Фещенком,Фещенкові,Фещенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname442()
    {
        $this->object->setSecondName('Фоменко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фоменко,Фоменка,Фоменкові,Фоменка,Фоменком,Фоменкові,Фоменче'), $this->object->getSecondNameCase());
    }
    public function testManSirname443()
    {
        $this->object->setSecondName('Ханенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ханенко,Ханенка,Ханенкові,Ханенка,Ханенком,Ханенкові,Ханенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname444()
    {
        $this->object->setSecondName('Харчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Харчук,Харчука,Харчукові,Харчука,Харчуком,Харчукові,Харчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname445()
    {
        $this->object->setSecondName('Хміляр');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хміляр,Хміляра,Хмілярові,Хміляра,Хміляром,Хмілярові,Хміляре'), $this->object->getSecondNameCase());
    }
    public function testManSirname446()
    {
        $this->object->setSecondName('Хмара');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хмара,Хмари,Хмарі,Хмару,Хмарою,Хмарі,Хмаро'), $this->object->getSecondNameCase());
    }
    public function testManSirname447()
    {
        $this->object->setSecondName('Холодовський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Холодовський,Холодовського,Холодовському,Холодовського,Холодовським,Холодовському,Холодовський'), $this->object->getSecondNameCase());
    }
    public function testManSirname448()
    {
        $this->object->setSecondName('Хоменко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хоменко,Хоменка,Хоменкові,Хоменка,Хоменком,Хоменкові,Хоменче'), $this->object->getSecondNameCase());
    }
    public function testManSirname449()
    {
        $this->object->setSecondName('Царук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Царук,Царука,Царукові,Царука,Царуком,Царукові,Царуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname450()
    {
        $this->object->setSecondName('Цибуленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Цибуленко,Цибуленка,Цибуленкові,Цибуленка,Цибуленком,Цибуленкові,Цибуленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname451()
    {
        $this->object->setSecondName('Цюпа');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Цюпа,Цюпи,Цюпі,Цюпу,Цюпою,Цюпі,Цюпо'), $this->object->getSecondNameCase());
    }
    public function testManSirname452()
    {
        $this->object->setSecondName('Чабаненко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чабаненко,Чабаненка,Чабаненкові,Чабаненка,Чабаненком,Чабаненкові,Чабаненче'), $this->object->getSecondNameCase());
    }
    public function testManSirname453()
    {
        $this->object->setSecondName('Чанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чанов,Чанова,Чанову,Чанова,Чановим,Чанову,Чанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname454()
    {
        $this->object->setSecondName('Чередниченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чередниченко,Чередниченка,Чередниченкові,Чередниченка,Чередниченком,Чередниченкові,Чередниченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname455()
    {
        $this->object->setSecondName('Чернявський');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чернявський,Чернявського,Чернявському,Чернявського,Чернявським,Чернявському,Чернявський'), $this->object->getSecondNameCase());
    }
    public function testManSirname456()
    {
        $this->object->setSecondName('Чорний');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чорний,Чорного,Чорному,Чорного,Чорним,Чорному,Чорний'), $this->object->getSecondNameCase());
    }
    public function testManSirname457()
    {
        $this->object->setSecondName('Чорновіл');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чорновіл,Чорновола,Чорноволові,Чорновола,Чорноволом,Чорноволові,Чорноволе'), $this->object->getSecondNameCase());
    }
    public function testManSirname458()
    {
        $this->object->setSecondName('Чуйкевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чуйкевич,Чуйкевича,Чуйкевичеві,Чуйкевича,Чуйкевичем,Чуйкевичеві,Чуйкевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname459()
    {
        $this->object->setSecondName('Чумак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чумак,Чумака,Чумакові,Чумака,Чумаком,Чумакові,Чумаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname460()
    {
        $this->object->setSecondName('Чумаченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чумаченко,Чумаченка,Чумаченкові,Чумаченка,Чумаченком,Чумаченкові,Чумаченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname461()
    {
        $this->object->setSecondName('Шахрай');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шахрай,Шахрая,Шахраєві,Шахрая,Шахраєм,Шахраєві,Шахраю'), $this->object->getSecondNameCase());
    }
    public function testManSirname462()
    {
        $this->object->setSecondName('Шевченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шевченко,Шевченка,Шевченкові,Шевченка,Шевченком,Шевченкові,Шевченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname463()
    {
        $this->object->setSecondName('Шевчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шевчук,Шевчука,Шевчукові,Шевчука,Шевчуком,Шевчукові,Шевчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname464()
    {
        $this->object->setSecondName('Шелест');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шелест,Шелеста,Шелестові,Шелеста,Шелестом,Шелестові,Шелесте'), $this->object->getSecondNameCase());
    }
    public function testManSirname465()
    {
        $this->object->setSecondName('Шинкарук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шинкарук,Шинкарука,Шинкарукові,Шинкарука,Шинкаруком,Шинкарукові,Шинкаруче'), $this->object->getSecondNameCase());
    }
    public function testManSirname466()
    {
        $this->object->setSecondName('Шкрібляк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шкрібляк,Шкрібляка,Шкріблякові,Шкрібляка,Шкрібляком,Шкріблякові,Шкрібляче'), $this->object->getSecondNameCase());
    }
    public function testManSirname467()
    {
        $this->object->setSecondName('Шнайдер');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шнайдер,Шнайдера,Шнайдерові,Шнайдера,Шнайдером,Шнайдерові,Шнайдере'), $this->object->getSecondNameCase());
    }
    public function testManSirname468()
    {
        $this->object->setSecondName('Шовкопляс');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шовкопляс,Шовкопляса,Шовкоплясові,Шовкопляса,Шовкоплясом,Шовкоплясові,Шовкоплясе'), $this->object->getSecondNameCase());
    }
    public function testManSirname469()
    {
        $this->object->setSecondName('Шульга');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шульга,Шульги,Шульзі,Шульгу,Шульгою,Шульзі,Шульго'), $this->object->getSecondNameCase());
    }
    public function testManSirname470()
    {
        $this->object->setSecondName('Шухевич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шухевич,Шухевича,Шухевичеві,Шухевича,Шухевичем,Шухевичеві,Шухевиче'), $this->object->getSecondNameCase());
    }
    public function testManSirname471()
    {
        $this->object->setSecondName('Щерба');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щерба,Щерби,Щербі,Щербу,Щербою,Щербі,Щербо'), $this->object->getSecondNameCase());
    }
    public function testManSirname472()
    {
        $this->object->setSecondName('Щербак');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щербак,Щербака,Щербакові,Щербака,Щербаком,Щербакові,Щербаче'), $this->object->getSecondNameCase());
    }
    public function testManSirname473()
    {
        $this->object->setSecondName('Щербань');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щербань,Щербаня,Щербаневі,Щербаня,Щербанем,Щербаневі,Щербаню'), $this->object->getSecondNameCase());
    }
    public function testManSirname474()
    {
        $this->object->setSecondName('Юрженко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрженко,Юрженка,Юрженкові,Юрженка,Юрженком,Юрженкові,Юрженче'), $this->object->getSecondNameCase());
    }
    public function testManSirname475()
    {
        $this->object->setSecondName('Юрченко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрченко,Юрченка,Юрченкові,Юрченка,Юрченком,Юрченкові,Юрченче'), $this->object->getSecondNameCase());
    }
    public function testManSirname476()
    {
        $this->object->setSecondName('Юрчишин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юрчишин,Юрчишина,Юрчишинові,Юрчишина,Юрчишином,Юрчишинові,Юрчишине'), $this->object->getSecondNameCase());
    }
    public function testManSirname477()
    {
        $this->object->setSecondName('Юхименко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Юхименко,Юхименка,Юхименкові,Юхименка,Юхименком,Юхименкові,Юхименче'), $this->object->getSecondNameCase());
    }
    public function testManSirname478()
    {
        $this->object->setSecondName('Ющенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ющенко,Ющенка,Ющенкові,Ющенка,Ющенком,Ющенкові,Ющенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname479()
    {
        $this->object->setSecondName('Яковенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковенко,Яковенка,Яковенкові,Яковенка,Яковенком,Яковенкові,Яковенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname480()
    {
        $this->object->setSecondName('Яковина');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковина,Яковини,Яковині,Яковину,Яковиною,Яковині,Яковино'), $this->object->getSecondNameCase());
    }
    public function testManSirname481()
    {
        $this->object->setSecondName('Янко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Янко,Янка,Янкові,Янка,Янком,Янкові,Янче'), $this->object->getSecondNameCase());
    }
    public function testManSirname482()
    {
        $this->object->setSecondName('Ярема');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярема,Яреми,Яремі,Ярему,Яремою,Яремі,Яремо'), $this->object->getSecondNameCase());
    }
    public function testManSirname483()
    {
        $this->object->setSecondName('Яременко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яременко,Яременка,Яременкові,Яременка,Яременком,Яременкові,Яременче'), $this->object->getSecondNameCase());
    }
    public function testManSirname484()
    {
        $this->object->setSecondName('Яремко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яремко,Яремка,Яремкові,Яремка,Яремком,Яремкові,Яремче'), $this->object->getSecondNameCase());
    }
    public function testManSirname485()
    {
        $this->object->setSecondName('Яремчук');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яремчук,Яремчука,Яремчукові,Яремчука,Яремчуком,Яремчукові,Яремчуче'), $this->object->getSecondNameCase());
    }
    public function testManSirname486()
    {
        $this->object->setSecondName('Ярмоленко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярмоленко,Ярмоленка,Ярмоленкові,Ярмоленка,Ярмоленком,Ярмоленкові,Ярмоленче'), $this->object->getSecondNameCase());
    }
    public function testManSirname487()
    {
        $this->object->setSecondName('Ярмолюк');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярмолюк,Ярмолюка,Ярмолюкові,Ярмолюка,Ярмолюком,Ярмолюкові,Ярмолюче'), $this->object->getSecondNameCase());
    }
    public function testManSirname488()
    {
        $this->object->setSecondName('Ярошенко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ярошенко,Ярошенка,Ярошенкові,Ярошенка,Ярошенком,Ярошенкові,Ярошенче'), $this->object->getSecondNameCase());
    }
    public function testManSirname489()
    {
        $this->object->setSecondName('Яценко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яценко,Яценка,Яценкові,Яценка,Яценком,Яценкові,Яценче'), $this->object->getSecondNameCase());
    }
    public function testManSirname490()
    {
        $this->object->setSecondName('Ященко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ященко,Ященка,Ященкові,Ященка,Ященком,Ященкові,Ященче'), $this->object->getSecondNameCase());
    }
    public function testManSirname491()
    {
        $this->object->setSecondName('Ґалаґан');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ґалаґан,Ґалаґана,Ґалаґанові,Ґалаґана,Ґалаґаном,Ґалаґанові,Ґалаґане'), $this->object->getSecondNameCase());
    }
    public function testManSirname492()
    {
        $this->object->setSecondName('Євсєєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Євсєєв,Євсєєва,Євсєєву,Євсєєва,Євсєєвим,Євсєєву,Євсєєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname493()
    {
        $this->object->setSecondName('Єгоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єгоров,Єгорова,Єгорову,Єгорова,Єгоровим,Єгорову,Єгорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname494()
    {
        $this->object->setSecondName('Єлізаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єлізаров,Єлізарова,Єлізарову,Єлізарова,Єлізаровим,Єлізарову,Єлізарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname495()
    {
        $this->object->setSecondName('Єрмилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єрмилов,Єрмилова,Єрмилову,Єрмилова,Єрмиловим,Єрмилову,Єрмилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname496()
    {
        $this->object->setSecondName('Єрофєєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єрофєєв,Єрофєєва,Єрофєєву,Єрофєєва,Єрофєєвим,Єрофєєву,Єрофєєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname497()
    {
        $this->object->setSecondName('Єршов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єршов,Єршова,Єршову,Єршова,Єршовим,Єршову,Єршове'), $this->object->getSecondNameCase());
    }
    public function testManSirname498()
    {
        $this->object->setSecondName('Єфімов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єфімов,Єфімова,Єфімову,Єфімова,Єфімовим,Єфімову,Єфімове'), $this->object->getSecondNameCase());
    }
    public function testManSirname499()
    {
        $this->object->setSecondName('Єфремов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Єфремов,Єфремова,Єфремову,Єфремова,Єфремовим,Єфремову,Єфремове'), $this->object->getSecondNameCase());
    }
    public function testManSirname500()
    {
        $this->object->setSecondName('Іванов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іванов,Іванова,Іванову,Іванова,Івановим,Іванову,Іванове'), $this->object->getSecondNameCase());
    }
    public function testManSirname501()
    {
        $this->object->setSecondName('Ігнатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ігнатов,Ігнатова,Ігнатову,Ігнатова,Ігнатовим,Ігнатову,Ігнатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname502()
    {
        $this->object->setSecondName('Іллюшин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Іллюшин,Іллюшина,Іллюшинові,Іллюшина,Іллюшином,Іллюшинові,Іллюшине'), $this->object->getSecondNameCase());
    }
    public function testManSirname503()
    {
        $this->object->setSecondName('Ільїн');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ільїн,Ільїна,Ільїнові,Ільїна,Ільїном,Ільїнові,Ільїне'), $this->object->getSecondNameCase());
    }
    public function testManSirname504()
    {
        $this->object->setSecondName('Аєдоницький');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аєдоницький,Аєдоницького,Аєдоницькому,Аєдоницького,Аєдоницьким,Аєдоницькому,Аєдоницький'), $this->object->getSecondNameCase());
    }
    public function testManSirname505()
    {
        $this->object->setSecondName('Абатуров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абатуров,Абатурова,Абатурову,Абатурова,Абатуровим,Абатурову,Абатурове'), $this->object->getSecondNameCase());
    }
    public function testManSirname506()
    {
        $this->object->setSecondName('Абдулов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абдулов,Абдулова,Абдулову,Абдулова,Абдуловим,Абдулову,Абдулове'), $this->object->getSecondNameCase());
    }
    public function testManSirname507()
    {
        $this->object->setSecondName('Абрамов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Абрамов,Абрамова,Абрамову,Абрамова,Абрамовим,Абрамову,Абрамове'), $this->object->getSecondNameCase());
    }
    public function testManSirname508()
    {
        $this->object->setSecondName('Авілов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авілов,Авілова,Авілову,Авілова,Авіловим,Авілову,Авілове'), $this->object->getSecondNameCase());
    }
    public function testManSirname509()
    {
        $this->object->setSecondName('Авдєєнко');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Авдєєнко,Авдєєнка,Авдєєнкові,Авдєєнка,Авдєєнком,Авдєєнкові,Авдєєнче'), $this->object->getSecondNameCase());
    }
    public function testManSirname510()
    {
        $this->object->setSecondName('Аврамов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аврамов,Аврамова,Аврамову,Аврамова,Аврамовим,Аврамову,Аврамове'), $this->object->getSecondNameCase());
    }
    public function testManSirname511()
    {
        $this->object->setSecondName('Алексєєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Алексєєв,Алексєєва,Алексєєву,Алексєєва,Алексєєвим,Алексєєву,Алексєєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname512()
    {
        $this->object->setSecondName('Александров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Александров,Александрова,Александрову,Александрова,Александровим,Александрову,Александрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname513()
    {
        $this->object->setSecondName('Альошин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Альошин,Альошина,Альошинові,Альошина,Альошином,Альошинові,Альошине'), $this->object->getSecondNameCase());
    }
    public function testManSirname514()
    {
        $this->object->setSecondName('Анісімов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анісімов,Анісімова,Анісімову,Анісімова,Анісімовим,Анісімову,Анісімове'), $this->object->getSecondNameCase());
    }
    public function testManSirname515()
    {
        $this->object->setSecondName('Анісов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анісов,Анісова,Анісову,Анісова,Анісовим,Анісову,Анісове'), $this->object->getSecondNameCase());
    }
    public function testManSirname516()
    {
        $this->object->setSecondName('Ананьєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ананьєв,Ананьєва,Ананьєву,Ананьєва,Ананьєвим,Ананьєву,Ананьєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname517()
    {
        $this->object->setSecondName('Андріанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андріанов,Андріанова,Андріанову,Андріанова,Андріановим,Андріанову,Андріанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname518()
    {
        $this->object->setSecondName('Андріяшев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андріяшев,Андріяшева,Андріяшеву,Андріяшева,Андріяшевим,Андріяшеву,Андріяшеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname519()
    {
        $this->object->setSecondName('Андреєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Андреєв,Андреєва,Андреєву,Андреєва,Андреєвим,Андреєву,Андреєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname520()
    {
        $this->object->setSecondName('Антипов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антипов,Антипова,Антипову,Антипова,Антиповим,Антипову,Антипове'), $this->object->getSecondNameCase());
    }
    public function testManSirname521()
    {
        $this->object->setSecondName('Антонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Антонов,Антонова,Антонову,Антонова,Антоновим,Антонову,Антонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname522()
    {
        $this->object->setSecondName('Анциферов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Анциферов,Анциферова,Анциферову,Анциферова,Анциферовим,Анциферову,Анциферове'), $this->object->getSecondNameCase());
    }
    public function testManSirname523()
    {
        $this->object->setSecondName('Апухтін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Апухтін,Апухтіна,Апухтіну,Апухтіна,Апухтіном,Апухтіну,Апухтіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname524()
    {
        $this->object->setSecondName('Арбузов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арбузов,Арбузова,Арбузову,Арбузова,Арбузовим,Арбузову,Арбузове'), $this->object->getSecondNameCase());
    }
    public function testManSirname525()
    {
        $this->object->setSecondName('Аржанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Аржанов,Аржанова,Аржанову,Аржанова,Аржановим,Аржанову,Аржанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname526()
    {
        $this->object->setSecondName('Архипов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Архипов,Архипова,Архипову,Архипова,Архиповим,Архипову,Архипове'), $this->object->getSecondNameCase());
    }
    public function testManSirname527()
    {
        $this->object->setSecondName('Арцибушев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Арцибушев,Арцибушева,Арцибушеву,Арцибушева,Арцибушевим,Арцибушеву,Арцибушеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname528()
    {
        $this->object->setSecondName('Астраханцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Астраханцев,Астраханцева,Астраханцеву,Астраханцева,Астраханцевим,Астраханцеву,Астраханцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname529()
    {
        $this->object->setSecondName('Афіногенов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афіногенов,Афіногенова,Афіногенову,Афіногенова,Афіногеновим,Афіногенову,Афіногенове'), $this->object->getSecondNameCase());
    }
    public function testManSirname530()
    {
        $this->object->setSecondName('Афанасьєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Афанасьєв,Афанасьєва,Афанасьєву,Афанасьєва,Афанасьєвим,Афанасьєву,Афанасьєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname531()
    {
        $this->object->setSecondName('Бєлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бєлов,Бєлова,Бєлову,Бєлова,Бєловим,Бєлову,Бєлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname532()
    {
        $this->object->setSecondName('Бєлоглазов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бєлоглазов,Бєлоглазова,Бєлоглазову,Бєлоглазова,Бєлоглазовим,Бєлоглазову,Бєлоглазове'), $this->object->getSecondNameCase());
    }
    public function testManSirname533()
    {
        $this->object->setSecondName('Бєлоусов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бєлоусов,Бєлоусова,Бєлоусову,Бєлоусова,Бєлоусовим,Бєлоусову,Бєлоусове'), $this->object->getSecondNameCase());
    }
    public function testManSirname534()
    {
        $this->object->setSecondName('Бєляєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бєляєв,Бєляєва,Бєляєву,Бєляєва,Бєляєвим,Бєляєву,Бєляєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname535()
    {
        $this->object->setSecondName('Бібиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бібиков,Бібикова,Бібикову,Бібикова,Бібиковим,Бібикову,Бібикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname536()
    {
        $this->object->setSecondName('Бажанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бажанов,Бажанова,Бажанову,Бажанова,Бажановим,Бажанову,Бажанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname537()
    {
        $this->object->setSecondName('Баранов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баранов,Баранова,Баранову,Баранова,Барановим,Баранову,Баранове'), $this->object->getSecondNameCase());
    }
    public function testManSirname538()
    {
        $this->object->setSecondName('Баришніков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Баришніков,Баришнікова,Баришнікову,Баришнікова,Баришніковим,Баришнікову,Баришнікове'), $this->object->getSecondNameCase());
    }
    public function testManSirname539()
    {
        $this->object->setSecondName('Барсов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Барсов,Барсова,Барсову,Барсова,Барсовим,Барсову,Барсове'), $this->object->getSecondNameCase());
    }
    public function testManSirname540()
    {
        $this->object->setSecondName('Батюшков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Батюшков,Батюшкова,Батюшкову,Батюшкова,Батюшковим,Батюшкову,Батюшкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname541()
    {
        $this->object->setSecondName('Биков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Биков,Бикова,Бикову,Бикова,Биковим,Бикову,Бикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname542()
    {
        $this->object->setSecondName('Блохін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Блохін,Блохіна,Блохіну,Блохіна,Блохіном,Блохіну,Блохіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname543()
    {
        $this->object->setSecondName('Бобров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бобров,Боброва,Боброву,Боброва,Бобровим,Боброву,Боброве'), $this->object->getSecondNameCase());
    }
    public function testManSirname544()
    {
        $this->object->setSecondName('Богданов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богданов,Богданова,Богданову,Богданова,Богдановим,Богданову,Богданове'), $this->object->getSecondNameCase());
    }
    public function testManSirname545()
    {
        $this->object->setSecondName('Богомазов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Богомазов,Богомазова,Богомазову,Богомазова,Богомазовим,Богомазову,Богомазове'), $this->object->getSecondNameCase());
    }
    public function testManSirname546()
    {
        $this->object->setSecondName('Бойков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бойков,Бойкова,Бойкову,Бойкова,Бойковим,Бойкову,Бойкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname547()
    {
        $this->object->setSecondName('Большаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Большаков,Большакова,Большакову,Большакова,Большаковим,Большакову,Большакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname548()
    {
        $this->object->setSecondName('Борисов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Борисов,Борисова,Борисову,Борисова,Борисовим,Борисову,Борисове'), $this->object->getSecondNameCase());
    }
    public function testManSirname549()
    {
        $this->object->setSecondName('Бочков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бочков,Бочкова,Бочкову,Бочкова,Бочковим,Бочкову,Бочкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname550()
    {
        $this->object->setSecondName('Бризгалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бризгалов,Бризгалова,Бризгалову,Бризгалова,Бризгаловим,Бризгалову,Бризгалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname551()
    {
        $this->object->setSecondName('Брусилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Брусилов,Брусилова,Брусилову,Брусилова,Брусиловим,Брусилову,Брусилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname552()
    {
        $this->object->setSecondName('Бутурлін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бутурлін,Бутурліна,Бутурліну,Бутурліна,Бутурліном,Бутурліну,Бутурліне'), $this->object->getSecondNameCase());
    }
    public function testManSirname553()
    {
        $this->object->setSecondName('Бутусов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Бутусов,Бутусова,Бутусову,Бутусова,Бутусовим,Бутусову,Бутусове'), $this->object->getSecondNameCase());
    }
    public function testManSirname554()
    {
        $this->object->setSecondName('Варламов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Варламов,Варламова,Варламову,Варламова,Варламовим,Варламову,Варламове'), $this->object->getSecondNameCase());
    }
    public function testManSirname555()
    {
        $this->object->setSecondName('Васильєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Васильєв,Васильєва,Васильєву,Васильєва,Васильєвим,Васильєву,Васильєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname556()
    {
        $this->object->setSecondName('Виноградов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Виноградов,Виноградова,Виноградову,Виноградова,Виноградовим,Виноградову,Виноградове'), $this->object->getSecondNameCase());
    }
    public function testManSirname557()
    {
        $this->object->setSecondName('Власов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Власов,Власова,Власову,Власова,Власовим,Власову,Власове'), $this->object->getSecondNameCase());
    }
    public function testManSirname558()
    {
        $this->object->setSecondName('Внуков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Внуков,Внукова,Внукову,Внукова,Внуковим,Внукову,Внукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname559()
    {
        $this->object->setSecondName('Волков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Волков,Волкова,Волкову,Волкова,Волковим,Волкову,Волкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname560()
    {
        $this->object->setSecondName('Воробей');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воробей,Вороб’я,Вороб’єві,Вороб’я,Вороб’єм,Вороб’єві,Вороб’ю'), $this->object->getSecondNameCase());
    }
    public function testManSirname561()
    {
        $this->object->setSecondName('Воробйов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воробйов,Воробйова,Воробйову,Воробйова,Воробйовим,Воробйову,Воробйове'), $this->object->getSecondNameCase());
    }
    public function testManSirname562()
    {
        $this->object->setSecondName('Воронін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воронін,Вороніна,Вороніну,Вороніна,Вороніном,Вороніну,Вороніне'), $this->object->getSecondNameCase());
    }
    public function testManSirname563()
    {
        $this->object->setSecondName('Воронцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Воронцов,Воронцова,Воронцову,Воронцова,Воронцовим,Воронцову,Воронцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname564()
    {
        $this->object->setSecondName('Ворошилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ворошилов,Ворошилова,Ворошилову,Ворошилова,Ворошиловим,Ворошилову,Ворошилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname565()
    {
        $this->object->setSecondName('Гаврилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гаврилов,Гаврилова,Гаврилову,Гаврилова,Гавриловим,Гаврилову,Гаврилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname566()
    {
        $this->object->setSecondName('Герасимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Герасимов,Герасимова,Герасимову,Герасимова,Герасимовим,Герасимову,Герасимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname567()
    {
        $this->object->setSecondName('Горбунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горбунов,Горбунова,Горбунову,Горбунова,Горбуновим,Горбунову,Горбунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname568()
    {
        $this->object->setSecondName('Горчаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горчаков,Горчакова,Горчакову,Горчакова,Горчаковим,Горчакову,Горчакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname569()
    {
        $this->object->setSecondName('Горшков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Горшков,Горшкова,Горшкову,Горшкова,Горшковим,Горшкову,Горшкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname570()
    {
        $this->object->setSecondName('Громов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Громов,Громова,Громову,Громова,Громовим,Громову,Громове'), $this->object->getSecondNameCase());
    }
    public function testManSirname571()
    {
        $this->object->setSecondName('Гусєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Гусєв,Гусєва,Гусєву,Гусєва,Гусєвим,Гусєву,Гусєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname572()
    {
        $this->object->setSecondName('Давидов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Давидов,Давидова,Давидову,Давидова,Давидовим,Давидову,Давидове'), $this->object->getSecondNameCase());
    }
    public function testManSirname573()
    {
        $this->object->setSecondName('Данилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Данилов,Данилова,Данилову,Данилова,Даниловим,Данилову,Данилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname574()
    {
        $this->object->setSecondName('Дементьєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дементьєв,Дементьєва,Дементьєву,Дементьєва,Дементьєвим,Дементьєву,Дементьєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname575()
    {
        $this->object->setSecondName('Денисов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Денисов,Денисова,Денисову,Денисова,Денисовим,Денисову,Денисове'), $this->object->getSecondNameCase());
    }
    public function testManSirname576()
    {
        $this->object->setSecondName('Дмитрієв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дмитрієв,Дмитрієва,Дмитрієву,Дмитрієва,Дмитрієвим,Дмитрієву,Дмитрієве'), $this->object->getSecondNameCase());
    }
    public function testManSirname577()
    {
        $this->object->setSecondName('Добролюбов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Добролюбов,Добролюбова,Добролюбову,Добролюбова,Добролюбовим,Добролюбову,Добролюбове'), $this->object->getSecondNameCase());
    }
    public function testManSirname578()
    {
        $this->object->setSecondName('Донськой');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Донськой,Донського,Донському,Донського,Донським,Донському,Донський'), $this->object->getSecondNameCase());
    }
    public function testManSirname579()
    {
        $this->object->setSecondName('Дорофєєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дорофєєв,Дорофєєва,Дорофєєву,Дорофєєва,Дорофєєвим,Дорофєєву,Дорофєєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname580()
    {
        $this->object->setSecondName('Дубров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Дубров,Дуброва,Дуброву,Дуброва,Дубровим,Дуброву,Дуброве'), $this->object->getSecondNameCase());
    }
    public function testManSirname581()
    {
        $this->object->setSecondName('Железняков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Железняков,Железнякова,Железнякову,Железнякова,Железняковим,Железнякову,Железнякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname582()
    {
        $this->object->setSecondName('Жердєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жердєв,Жердєва,Жердєву,Жердєва,Жердєвим,Жердєву,Жердєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname583()
    {
        $this->object->setSecondName('Жуков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Жуков,Жукова,Жукову,Жукова,Жуковим,Жукову,Жукове'), $this->object->getSecondNameCase());
    }
    public function testManSirname584()
    {
        $this->object->setSecondName('Журавльов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Журавльов,Журавльова,Журавльову,Журавльова,Журавльовим,Журавльову,Журавльове'), $this->object->getSecondNameCase());
    }
    public function testManSirname585()
    {
        $this->object->setSecondName('Заваров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Заваров,Заварова,Заварову,Заварова,Заваровим,Заварову,Заварове'), $this->object->getSecondNameCase());
    }
    public function testManSirname586()
    {
        $this->object->setSecondName('Загаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Загаров,Загарова,Загарову,Загарова,Загаровим,Загарову,Загарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname587()
    {
        $this->object->setSecondName('Зайцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зайцев,Зайцева,Зайцеву,Зайцева,Зайцевим,Зайцеву,Зайцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname588()
    {
        $this->object->setSecondName('Захаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Захаров,Захарова,Захарову,Захарова,Захаровим,Захарову,Захарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname589()
    {
        $this->object->setSecondName('Звєрєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Звєрєв,Звєрєва,Звєрєву,Звєрєва,Звєрєвим,Звєрєву,Звєрєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname590()
    {
        $this->object->setSecondName('Зеров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зеров,Зерова,Зерову,Зерова,Зеровим,Зерову,Зерове'), $this->object->getSecondNameCase());
    }
    public function testManSirname591()
    {
        $this->object->setSecondName('Золотухін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Золотухін,Золотухіна,Золотухіну,Золотухіна,Золотухіном,Золотухіну,Золотухіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname592()
    {
        $this->object->setSecondName('Зубов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Зубов,Зубова,Зубову,Зубова,Зубовим,Зубову,Зубове'), $this->object->getSecondNameCase());
    }
    public function testManSirname593()
    {
        $this->object->setSecondName('Казаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Казаков,Казакова,Казакову,Казакова,Казаковим,Казакову,Казакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname594()
    {
        $this->object->setSecondName('Калінін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калінін,Калініна,Калініну,Калініна,Калініном,Калініну,Калініне'), $this->object->getSecondNameCase());
    }
    public function testManSirname595()
    {
        $this->object->setSecondName('Калашников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Калашников,Калашникова,Калашникову,Калашникова,Калашниковим,Калашникову,Калашникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname596()
    {
        $this->object->setSecondName('Карпов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Карпов,Карпова,Карпову,Карпова,Карповим,Карпову,Карпове'), $this->object->getSecondNameCase());
    }
    public function testManSirname597()
    {
        $this->object->setSecondName('Каштанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Каштанов,Каштанова,Каштанову,Каштанова,Каштановим,Каштанову,Каштанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname598()
    {
        $this->object->setSecondName('Кисельов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кисельов,Кисельова,Кисельову,Кисельова,Кисельовим,Кисельову,Кисельове'), $this->object->getSecondNameCase());
    }
    public function testManSirname599()
    {
        $this->object->setSecondName('Ковальов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ковальов,Ковальова,Ковальову,Ковальова,Ковальовим,Ковальову,Ковальове'), $this->object->getSecondNameCase());
    }
    public function testManSirname600()
    {
        $this->object->setSecondName('Кожевников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кожевников,Кожевникова,Кожевникову,Кожевникова,Кожевниковим,Кожевникову,Кожевникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname601()
    {
        $this->object->setSecondName('Козлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Козлов,Козлова,Козлову,Козлова,Козловим,Козлову,Козлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname602()
    {
        $this->object->setSecondName('Колесников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Колесников,Колесникова,Колесникову,Колесникова,Колесниковим,Колесникову,Колесникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname603()
    {
        $this->object->setSecondName('Кольцов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кольцов,Кольцова,Кольцову,Кольцова,Кольцовим,Кольцову,Кольцове'), $this->object->getSecondNameCase());
    }
    public function testManSirname604()
    {
        $this->object->setSecondName('Комаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Комаров,Комарова,Комарову,Комарова,Комаровим,Комарову,Комарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname605()
    {
        $this->object->setSecondName('Коновалов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коновалов,Коновалова,Коновалову,Коновалова,Коноваловим,Коновалову,Коновалове'), $this->object->getSecondNameCase());
    }
    public function testManSirname606()
    {
        $this->object->setSecondName('Конюхов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Конюхов,Конюхова,Конюхову,Конюхова,Конюховим,Конюхову,Конюхове'), $this->object->getSecondNameCase());
    }
    public function testManSirname607()
    {
        $this->object->setSecondName('Копилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Копилов,Копилова,Копилову,Копилова,Копиловим,Копилову,Копилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname608()
    {
        $this->object->setSecondName('Кормильцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кормильцев,Кормильцева,Кормильцеву,Кормильцева,Кормильцевим,Кормильцеву,Кормильцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname609()
    {
        $this->object->setSecondName('Коробов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коробов,Коробова,Коробову,Коробова,Коробовим,Коробову,Коробове'), $this->object->getSecondNameCase());
    }
    public function testManSirname610()
    {
        $this->object->setSecondName('Коровкін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Коровкін,Коровкіна,Коровкіну,Коровкіна,Коровкіном,Коровкіну,Коровкіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname611()
    {
        $this->object->setSecondName('Корольов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Корольов,Корольова,Корольову,Корольова,Корольовим,Корольову,Корольове'), $this->object->getSecondNameCase());
    }
    public function testManSirname612()
    {
        $this->object->setSecondName('Котов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Котов,Котова,Котову,Котова,Котовим,Котову,Котове'), $this->object->getSecondNameCase());
    }
    public function testManSirname613()
    {
        $this->object->setSecondName('Краснов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Краснов,Краснова,Краснову,Краснова,Красновим,Краснову,Краснове'), $this->object->getSecondNameCase());
    }
    public function testManSirname614()
    {
        $this->object->setSecondName('Крилов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крилов,Крилова,Крилову,Крилова,Криловим,Крилову,Крилове'), $this->object->getSecondNameCase());
    }
    public function testManSirname615()
    {
        $this->object->setSecondName('Кримов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кримов,Кримова,Кримову,Кримова,Кримовим,Кримову,Кримове'), $this->object->getSecondNameCase());
    }
    public function testManSirname616()
    {
        $this->object->setSecondName('Крюков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Крюков,Крюкова,Крюкову,Крюкова,Крюковим,Крюкову,Крюкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname617()
    {
        $this->object->setSecondName('Кудряшов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кудряшов,Кудряшова,Кудряшову,Кудряшова,Кудряшовим,Кудряшову,Кудряшове'), $this->object->getSecondNameCase());
    }
    public function testManSirname618()
    {
        $this->object->setSecondName('Кузнецов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузнецов,Кузнецова,Кузнецову,Кузнецова,Кузнецовим,Кузнецову,Кузнецове'), $this->object->getSecondNameCase());
    }
    public function testManSirname619()
    {
        $this->object->setSecondName('Кузьмін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьмін,Кузьміна,Кузьміну,Кузьміна,Кузьміном,Кузьміну,Кузьміне'), $this->object->getSecondNameCase());
    }
    public function testManSirname620()
    {
        $this->object->setSecondName('Кулаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кулаков,Кулакова,Кулакову,Кулакова,Кулаковим,Кулакову,Кулакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname621()
    {
        $this->object->setSecondName('Куликов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Куликов,Куликова,Куликову,Куликова,Куликовим,Куликову,Куликове'), $this->object->getSecondNameCase());
    }
    public function testManSirname622()
    {
        $this->object->setSecondName('Курков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Курков,Куркова,Куркову,Куркова,Курковим,Куркову,Куркове'), $this->object->getSecondNameCase());
    }
    public function testManSirname623()
    {
        $this->object->setSecondName('Курочкін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Курочкін,Курочкіна,Курочкіну,Курочкіна,Курочкіном,Курочкіну,Курочкіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname624()
    {
        $this->object->setSecondName('Лєсков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лєсков,Лєскова,Лєскову,Лєскова,Лєсковим,Лєскову,Лєскове'), $this->object->getSecondNameCase());
    }
    public function testManSirname625()
    {
        $this->object->setSecondName('Лідов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лідов,Лідова,Лідову,Лідова,Лідовим,Лідову,Лідове'), $this->object->getSecondNameCase());
    }
    public function testManSirname626()
    {
        $this->object->setSecondName('Ладигін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ладигін,Ладигіна,Ладигіну,Ладигіна,Ладигіном,Ладигіну,Ладигіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname627()
    {
        $this->object->setSecondName('Лазарєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лазарєв,Лазарєва,Лазарєву,Лазарєва,Лазарєвим,Лазарєву,Лазарєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname628()
    {
        $this->object->setSecondName('Лебедєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лебедєв,Лебедєва,Лебедєву,Лебедєва,Лебедєвим,Лебедєву,Лебедєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname629()
    {
        $this->object->setSecondName('Лихоносов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лихоносов,Лихоносова,Лихоносову,Лихоносова,Лихоносовим,Лихоносову,Лихоносове'), $this->object->getSecondNameCase());
    }
    public function testManSirname630()
    {
        $this->object->setSecondName('Лосєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Лосєв,Лосєва,Лосєву,Лосєва,Лосєвим,Лосєву,Лосєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname631()
    {
        $this->object->setSecondName('Львов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Львов,Львова,Львову,Львова,Львовим,Львову,Львове'), $this->object->getSecondNameCase());
    }
    public function testManSirname632()
    {
        $this->object->setSecondName('Любимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Любимов,Любимова,Любимову,Любимова,Любимовим,Любимову,Любимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname633()
    {
        $this->object->setSecondName('Мілютін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мілютін,Мілютіна,Мілютіну,Мілютіна,Мілютіном,Мілютіну,Мілютіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname634()
    {
        $this->object->setSecondName('Макаров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Макаров,Макарова,Макарову,Макарова,Макаровим,Макарову,Макарове'), $this->object->getSecondNameCase());
    }
    public function testManSirname635()
    {
        $this->object->setSecondName('Максимов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Максимов,Максимова,Максимову,Максимова,Максимовим,Максимову,Максимове'), $this->object->getSecondNameCase());
    }
    public function testManSirname636()
    {
        $this->object->setSecondName('Малаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Малаков,Малакова,Малакову,Малакова,Малаковим,Малакову,Малакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname637()
    {
        $this->object->setSecondName('Мамонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мамонов,Мамонова,Мамонову,Мамонова,Мамоновим,Мамонову,Мамонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname638()
    {
        $this->object->setSecondName('Манасеїн');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Манасеїн,Манасеїна,Манасеїнові,Манасеїна,Манасеїном,Манасеїнові,Манасеїне'), $this->object->getSecondNameCase());
    }
    public function testManSirname639()
    {
        $this->object->setSecondName('Марков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Марков,Маркова,Маркову,Маркова,Марковим,Маркову,Маркове'), $this->object->getSecondNameCase());
    }
    public function testManSirname640()
    {
        $this->object->setSecondName('Мартенс');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мартенс,Мартенса,Мартенсові,Мартенса,Мартенсом,Мартенсові,Мартенсе'), $this->object->getSecondNameCase());
    }
    public function testManSirname641()
    {
        $this->object->setSecondName('Мартинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мартинов,Мартинова,Мартинову,Мартинова,Мартиновим,Мартинову,Мартинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname642()
    {
        $this->object->setSecondName('Масленніков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Масленніков,Масленнікова,Масленнікову,Масленнікова,Масленніковим,Масленнікову,Масленнікове'), $this->object->getSecondNameCase());
    }
    public function testManSirname643()
    {
        $this->object->setSecondName('Маслов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Маслов,Маслова,Маслову,Маслова,Масловим,Маслову,Маслове'), $this->object->getSecondNameCase());
    }
    public function testManSirname644()
    {
        $this->object->setSecondName('Матвєєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Матвєєв,Матвєєва,Матвєєву,Матвєєва,Матвєєвим,Матвєєву,Матвєєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname645()
    {
        $this->object->setSecondName('Медведєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Медведєв,Медведєва,Медведєву,Медведєва,Медведєвим,Медведєву,Медведєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname646()
    {
        $this->object->setSecondName('Мельников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мельников,Мельникова,Мельникову,Мельникова,Мельниковим,Мельникову,Мельникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname647()
    {
        $this->object->setSecondName('Миронов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Миронов,Миронова,Миронову,Миронова,Мироновим,Миронову,Миронове'), $this->object->getSecondNameCase());
    }
    public function testManSirname648()
    {
        $this->object->setSecondName('Михайлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Михайлов,Михайлова,Михайлову,Михайлова,Михайловим,Михайлову,Михайлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname649()
    {
        $this->object->setSecondName('Моїсєєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моїсєєв,Моїсєєва,Моїсєєву,Моїсєєва,Моїсєєвим,Моїсєєву,Моїсєєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname650()
    {
        $this->object->setSecondName('Моргунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Моргунов,Моргунова,Моргунову,Моргунова,Моргуновим,Моргунову,Моргунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname651()
    {
        $this->object->setSecondName('Морков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Морков,Моркова,Моркову,Моркова,Морковим,Моркову,Моркове'), $this->object->getSecondNameCase());
    }
    public function testManSirname652()
    {
        $this->object->setSecondName('Морозов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Морозов,Морозова,Морозову,Морозова,Морозовим,Морозову,Морозове'), $this->object->getSecondNameCase());
    }
    public function testManSirname653()
    {
        $this->object->setSecondName('Мухін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Мухін,Мухіна,Мухіну,Мухіна,Мухіном,Мухіну,Мухіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname654()
    {
        $this->object->setSecondName('Нікітін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нікітін,Нікітіна,Нікітіну,Нікітіна,Нікітіном,Нікітіну,Нікітіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname655()
    {
        $this->object->setSecondName('Ніколаєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ніколаєв,Ніколаєва,Ніколаєву,Ніколаєва,Ніколаєвим,Ніколаєву,Ніколаєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname656()
    {
        $this->object->setSecondName('Нікулін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Нікулін,Нікуліна,Нікуліну,Нікуліна,Нікуліном,Нікуліну,Нікуліне'), $this->object->getSecondNameCase());
    }
    public function testManSirname657()
    {
        $this->object->setSecondName('Набоков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Набоков,Набокова,Набокову,Набокова,Набоковим,Набокову,Набокове'), $this->object->getSecondNameCase());
    }
    public function testManSirname658()
    {
        $this->object->setSecondName('Некрасов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Некрасов,Некрасова,Некрасову,Некрасова,Некрасовим,Некрасову,Некрасове'), $this->object->getSecondNameCase());
    }
    public function testManSirname659()
    {
        $this->object->setSecondName('Новиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Новиков,Новикова,Новикову,Новикова,Новиковим,Новикову,Новикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname660()
    {
        $this->object->setSecondName('Орлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Орлов,Орлова,Орлову,Орлова,Орловим,Орлову,Орлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname661()
    {
        $this->object->setSecondName('Осипов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Осипов,Осипова,Осипову,Осипова,Осиповим,Осипову,Осипове'), $this->object->getSecondNameCase());
    }
    public function testManSirname662()
    {
        $this->object->setSecondName('Павлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлов,Павлова,Павлову,Павлова,Павловим,Павлову,Павлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname663()
    {
        $this->object->setSecondName('Павлушков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Павлушков,Павлушкова,Павлушкову,Павлушкова,Павлушковим,Павлушкову,Павлушкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname664()
    {
        $this->object->setSecondName('Панов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Панов,Панова,Панову,Панова,Пановим,Панову,Панове'), $this->object->getSecondNameCase());
    }
    public function testManSirname665()
    {
        $this->object->setSecondName('Петров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петров,Петрова,Петрову,Петрова,Петровим,Петрову,Петрове'), $this->object->getSecondNameCase());
    }
    public function testManSirname666()
    {
        $this->object->setSecondName('Пильчиков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пильчиков,Пильчикова,Пильчикову,Пильчикова,Пильчиковим,Пильчикову,Пильчикове'), $this->object->getSecondNameCase());
    }
    public function testManSirname667()
    {
        $this->object->setSecondName('Платонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Платонов,Платонова,Платонову,Платонова,Платоновим,Платонову,Платонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname668()
    {
        $this->object->setSecondName('Плеханов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Плеханов,Плеханова,Плеханову,Плеханова,Плехановим,Плеханову,Плеханове'), $this->object->getSecondNameCase());
    }
    public function testManSirname669()
    {
        $this->object->setSecondName('Поляков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поляков,Полякова,Полякову,Полякова,Поляковим,Полякову,Полякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname670()
    {
        $this->object->setSecondName('Попов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Попов,Попова,Попову,Попова,Поповим,Попову,Попове'), $this->object->getSecondNameCase());
    }
    public function testManSirname671()
    {
        $this->object->setSecondName('Поярков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Поярков,Пояркова,Пояркову,Пояркова,Поярковим,Пояркову,Пояркове'), $this->object->getSecondNameCase());
    }
    public function testManSirname672()
    {
        $this->object->setSecondName('Пригунов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Пригунов,Пригунова,Пригунову,Пригунова,Пригуновим,Пригунову,Пригунове'), $this->object->getSecondNameCase());
    }
    public function testManSirname673()
    {
        $this->object->setSecondName('Прошкін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Прошкін,Прошкіна,Прошкіну,Прошкіна,Прошкіном,Прошкіну,Прошкіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname674()
    {
        $this->object->setSecondName('Решетников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Решетников,Решетникова,Решетникову,Решетникова,Решетниковим,Решетникову,Решетникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname675()
    {
        $this->object->setSecondName('Рожков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рожков,Рожкова,Рожкову,Рожкова,Рожковим,Рожкову,Рожкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname676()
    {
        $this->object->setSecondName('Романов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Романов,Романова,Романову,Романова,Романовим,Романову,Романове'), $this->object->getSecondNameCase());
    }
    public function testManSirname677()
    {
        $this->object->setSecondName('Рябов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Рябов,Рябова,Рябову,Рябова,Рябовим,Рябову,Рябове'), $this->object->getSecondNameCase());
    }
    public function testManSirname678()
    {
        $this->object->setSecondName('Саблін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Саблін,Сабліна,Сабліну,Сабліна,Сабліном,Сабліну,Сабліне'), $this->object->getSecondNameCase());
    }
    public function testManSirname679()
    {
        $this->object->setSecondName('Савін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Савін,Савіна,Савіну,Савіна,Савіном,Савіну,Савіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname680()
    {
        $this->object->setSecondName('Сазонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сазонов,Сазонова,Сазонову,Сазонова,Сазоновим,Сазонову,Сазонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname681()
    {
        $this->object->setSecondName('Сальников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сальников,Сальникова,Сальникову,Сальникова,Сальниковим,Сальникову,Сальникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname682()
    {
        $this->object->setSecondName('Самойлов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самойлов,Самойлова,Самойлову,Самойлова,Самойловим,Самойлову,Самойлове'), $this->object->getSecondNameCase());
    }
    public function testManSirname683()
    {
        $this->object->setSecondName('Самсонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Самсонов,Самсонова,Самсонову,Самсонова,Самсоновим,Самсонову,Самсонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname684()
    {
        $this->object->setSecondName('Сбітнєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сбітнєв,Сбітнєва,Сбітнєву,Сбітнєва,Сбітнєвим,Сбітнєву,Сбітнєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname685()
    {
        $this->object->setSecondName('Свиридов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Свиридов,Свиридова,Свиридову,Свиридова,Свиридовим,Свиридову,Свиридове'), $this->object->getSecondNameCase());
    }
    public function testManSirname686()
    {
        $this->object->setSecondName('Селезньов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Селезньов,Селезньова,Селезньову,Селезньова,Селезньовим,Селезньову,Селезньове'), $this->object->getSecondNameCase());
    }
    public function testManSirname687()
    {
        $this->object->setSecondName('Семенов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Семенов,Семенова,Семенову,Семенова,Семеновим,Семенову,Семенове'), $this->object->getSecondNameCase());
    }
    public function testManSirname688()
    {
        $this->object->setSecondName('Сербін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сербін,Сербіна,Сербіну,Сербіна,Сербіном,Сербіну,Сербіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname689()
    {
        $this->object->setSecondName('Сергєєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сергєєв,Сергєєва,Сергєєву,Сергєєва,Сергєєвим,Сергєєву,Сергєєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname690()
    {
        $this->object->setSecondName('Сибіряков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сибіряков,Сибірякова,Сибірякову,Сибірякова,Сибіряковим,Сибірякову,Сибірякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname691()
    {
        $this->object->setSecondName('Сидоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сидоров,Сидорова,Сидорову,Сидорова,Сидоровим,Сидорову,Сидорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname692()
    {
        $this->object->setSecondName('Симонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Симонов,Симонова,Симонову,Симонова,Симоновим,Симонову,Симонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname693()
    {
        $this->object->setSecondName('Синельников');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Синельников,Синельникова,Синельникову,Синельникова,Синельниковим,Синельникову,Синельникове'), $this->object->getSecondNameCase());
    }
    public function testManSirname694()
    {
        $this->object->setSecondName('Скобелев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скобелев,Скобелева,Скобелеву,Скобелева,Скобелевим,Скобелеву,Скобелеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname695()
    {
        $this->object->setSecondName('Скоблін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Скоблін,Скобліна,Скобліну,Скобліна,Скобліном,Скобліну,Скобліне'), $this->object->getSecondNameCase());
    }
    public function testManSirname696()
    {
        $this->object->setSecondName('Смирнов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Смирнов,Смирнова,Смирнову,Смирнова,Смирновим,Смирнову,Смирнове'), $this->object->getSecondNameCase());
    }
    public function testManSirname697()
    {
        $this->object->setSecondName('Снєгірьов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Снєгірьов,Снєгірьова,Снєгірьову,Снєгірьова,Снєгірьовим,Снєгірьову,Снєгірьове'), $this->object->getSecondNameCase());
    }
    public function testManSirname698()
    {
        $this->object->setSecondName('Соболєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соболєв,Соболєва,Соболєву,Соболєва,Соболєвим,Соболєву,Соболєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname699()
    {
        $this->object->setSecondName('Соколов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соколов,Соколова,Соколову,Соколова,Соколовим,Соколову,Соколове'), $this->object->getSecondNameCase());
    }
    public function testManSirname700()
    {
        $this->object->setSecondName('Солнцев');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Солнцев,Солнцева,Солнцеву,Солнцева,Солнцевим,Солнцеву,Солнцеве'), $this->object->getSecondNameCase());
    }
    public function testManSirname701()
    {
        $this->object->setSecondName('Соловйов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Соловйов,Соловйова,Соловйову,Соловйова,Соловйовим,Соловйову,Соловйове'), $this->object->getSecondNameCase());
    }
    public function testManSirname702()
    {
        $this->object->setSecondName('Сомов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сомов,Сомова,Сомову,Сомова,Сомовим,Сомову,Сомове'), $this->object->getSecondNameCase());
    }
    public function testManSirname703()
    {
        $this->object->setSecondName('Сорокін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Сорокін,Сорокіна,Сорокіну,Сорокіна,Сорокіном,Сорокіну,Сорокіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname704()
    {
        $this->object->setSecondName('Стєклов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Стєклов,Стєклова,Стєклову,Стєклова,Стєкловим,Стєклову,Стєклове'), $this->object->getSecondNameCase());
    }
    public function testManSirname705()
    {
        $this->object->setSecondName('Старков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Старков,Старкова,Старкову,Старкова,Старковим,Старкову,Старкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname706()
    {
        $this->object->setSecondName('Степанов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Степанов,Степанова,Степанову,Степанова,Степановим,Степанову,Степанове'), $this->object->getSecondNameCase());
    }
    public function testManSirname707()
    {
        $this->object->setSecondName('Табаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Табаков,Табакова,Табакову,Табакова,Табаковим,Табакову,Табакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname708()
    {
        $this->object->setSecondName('Тарасов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тарасов,Тарасова,Тарасову,Тарасова,Тарасовим,Тарасову,Тарасове'), $this->object->getSecondNameCase());
    }
    public function testManSirname709()
    {
        $this->object->setSecondName('Терентьєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Терентьєв,Терентьєва,Терентьєву,Терентьєва,Терентьєвим,Терентьєву,Терентьєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname710()
    {
        $this->object->setSecondName('Тимофєєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тимофєєв,Тимофєєва,Тимофєєву,Тимофєєва,Тимофєєвим,Тимофєєву,Тимофєєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname711()
    {
        $this->object->setSecondName('Титов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Титов,Титова,Титову,Титова,Титовим,Титову,Титове'), $this->object->getSecondNameCase());
    }
    public function testManSirname712()
    {
        $this->object->setSecondName('Тихомиров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихомиров,Тихомирова,Тихомирову,Тихомирова,Тихомировим,Тихомирову,Тихомирове'), $this->object->getSecondNameCase());
    }
    public function testManSirname713()
    {
        $this->object->setSecondName('Тихонов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тихонов,Тихонова,Тихонову,Тихонова,Тихоновим,Тихонову,Тихонове'), $this->object->getSecondNameCase());
    }
    public function testManSirname714()
    {
        $this->object->setSecondName('Тюленєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Тюленєв,Тюленєва,Тюленєву,Тюленєва,Тюленєвим,Тюленєву,Тюленєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname715()
    {
        $this->object->setSecondName('Уваров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Уваров,Уварова,Уварову,Уварова,Уваровим,Уварову,Уварове'), $this->object->getSecondNameCase());
    }
    public function testManSirname716()
    {
        $this->object->setSecondName('Усов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Усов,Усова,Усову,Усова,Усовим,Усову,Усове'), $this->object->getSecondNameCase());
    }
    public function testManSirname717()
    {
        $this->object->setSecondName('Устинов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Устинов,Устинова,Устинову,Устинова,Устиновим,Устинову,Устинове'), $this->object->getSecondNameCase());
    }
    public function testManSirname718()
    {
        $this->object->setSecondName('Філіппов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Філіппов,Філіппова,Філіппову,Філіппова,Філіпповим,Філіппову,Філіппове'), $this->object->getSecondNameCase());
    }
    public function testManSirname719()
    {
        $this->object->setSecondName('Філатов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Філатов,Філатова,Філатову,Філатова,Філатовим,Філатову,Філатове'), $this->object->getSecondNameCase());
    }
    public function testManSirname720()
    {
        $this->object->setSecondName('Федоров');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Федоров,Федорова,Федорову,Федорова,Федоровим,Федорову,Федорове'), $this->object->getSecondNameCase());
    }
    public function testManSirname721()
    {
        $this->object->setSecondName('Фомін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фомін,Фоміна,Фоміну,Фоміна,Фоміном,Фоміну,Фоміне'), $this->object->getSecondNameCase());
    }
    public function testManSirname722()
    {
        $this->object->setSecondName('Фролов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Фролов,Фролова,Фролову,Фролова,Фроловим,Фролову,Фролове'), $this->object->getSecondNameCase());
    }
    public function testManSirname723()
    {
        $this->object->setSecondName('Хілков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хілков,Хілкова,Хілкову,Хілкова,Хілковим,Хілкову,Хілкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname724()
    {
        $this->object->setSecondName('Хвостов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Хвостов,Хвостова,Хвостову,Хвостова,Хвостовим,Хвостову,Хвостове'), $this->object->getSecondNameCase());
    }
    public function testManSirname725()
    {
        $this->object->setSecondName('Худяков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Худяков,Худякова,Худякову,Худякова,Худяковим,Худякову,Худякове'), $this->object->getSecondNameCase());
    }
    public function testManSirname726()
    {
        $this->object->setSecondName('Цвєтков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Цвєтков,Цвєткова,Цвєткову,Цвєткова,Цвєтковим,Цвєткову,Цвєткове'), $this->object->getSecondNameCase());
    }
    public function testManSirname727()
    {
        $this->object->setSecondName('Чевкін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чевкін,Чевкіна,Чевкіну,Чевкіна,Чевкіном,Чевкіну,Чевкіне'), $this->object->getSecondNameCase());
    }
    public function testManSirname728()
    {
        $this->object->setSecondName('Черенков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Черенков,Черенкова,Черенкову,Черенкова,Черенковим,Черенкову,Черенкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname729()
    {
        $this->object->setSecondName('Черепков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Черепков,Черепкова,Черепкову,Черепкова,Черепковим,Черепкову,Черепкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname730()
    {
        $this->object->setSecondName('Чулков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Чулков,Чулкова,Чулкову,Чулкова,Чулковим,Чулкову,Чулкове'), $this->object->getSecondNameCase());
    }
    public function testManSirname731()
    {
        $this->object->setSecondName('Шевельов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шевельов,Шевельова,Шевельову,Шевельова,Шевельовим,Шевельову,Шевельове'), $this->object->getSecondNameCase());
    }
    public function testManSirname732()
    {
        $this->object->setSecondName('Шеліхов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шеліхов,Шеліхова,Шеліхову,Шеліхова,Шеліховим,Шеліхову,Шеліхове'), $this->object->getSecondNameCase());
    }
    public function testManSirname733()
    {
        $this->object->setSecondName('Шинін');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шинін,Шиніна,Шиніну,Шиніна,Шиніном,Шиніну,Шиніне'), $this->object->getSecondNameCase());
    }
    public function testManSirname734()
    {
        $this->object->setSecondName('Ширяєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ширяєв,Ширяєва,Ширяєву,Ширяєва,Ширяєвим,Ширяєву,Ширяєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname735()
    {
        $this->object->setSecondName('Шишов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шишов,Шишова,Шишову,Шишова,Шишовим,Шишову,Шишове'), $this->object->getSecondNameCase());
    }
    public function testManSirname736()
    {
        $this->object->setSecondName('Шулаков');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Шулаков,Шулакова,Шулакову,Шулакова,Шулаковим,Шулакову,Шулакове'), $this->object->getSecondNameCase());
    }
    public function testManSirname737()
    {
        $this->object->setSecondName('Щапов');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щапов,Щапова,Щапову,Щапова,Щаповим,Щапову,Щапове'), $this->object->getSecondNameCase());
    }
    public function testManSirname738()
    {
        $this->object->setSecondName('Щасливий');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Щасливий,Щасливого,Щасливому,Щасливого,Щасливим,Щасливому,Щасливий'), $this->object->getSecondNameCase());
    }
    public function testManSirname739()
    {
        $this->object->setSecondName('Яковлєв');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яковлєв,Яковлєва,Яковлєву,Яковлєва,Яковлєвим,Яковлєву,Яковлєве'), $this->object->getSecondNameCase());
    }
    public function testManSirname740()
    {
        $this->object->setSecondName('Яшин');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Яшин,Яшина,Яшинові,Яшина,Яшином,Яшинові,Яшине'), $this->object->getSecondNameCase());
    }

}