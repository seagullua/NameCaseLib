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


    public function testWomanSirname0()
    {
        $this->object->setSecondName('Єрмоленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єрмоленко,Єрмоленко,Єрмоленко,Єрмоленко,Єрмоленко,Єрмоленко,Єрмоленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname1()
    {
        $this->object->setSecondName('Єсипенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єсипенко,Єсипенко,Єсипенко,Єсипенко,Єсипенко,Єсипенко,Єсипенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname2()
    {
        $this->object->setSecondName('Іваненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іваненко,Іваненко,Іваненко,Іваненко,Іваненко,Іваненко,Іваненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname3()
    {
        $this->object->setSecondName('Іванченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іванченко,Іванченко,Іванченко,Іванченко,Іванченко,Іванченко,Іванченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname4()
    {
        $this->object->setSecondName('Іванчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іванчук,Іванчук,Іванчук,Іванчук,Іванчук,Іванчук,Іванчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname5()
    {
        $this->object->setSecondName('Іванюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іванюк,Іванюк,Іванюк,Іванюк,Іванюк,Іванюк,Іванюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname6()
    {
        $this->object->setSecondName('Івахненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Івахненко,Івахненко,Івахненко,Івахненко,Івахненко,Івахненко,Івахненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname7()
    {
        $this->object->setSecondName('Івашко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Івашко,Івашко,Івашко,Івашко,Івашко,Івашко,Івашко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname8()
    {
        $this->object->setSecondName('Іващенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іващенко,Іващенко,Іващенко,Іващенко,Іващенко,Іващенко,Іващенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname9()
    {
        $this->object->setSecondName('Івченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Івченко,Івченко,Івченко,Івченко,Івченко,Івченко,Івченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname10()
    {
        $this->object->setSecondName('Іллєнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іллєнко,Іллєнко,Іллєнко,Іллєнко,Іллєнко,Іллєнко,Іллєнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname11()
    {
        $this->object->setSecondName('Ільницька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ільницька,Ільницької,Ільницькій,Ільницьку,Ільницькою,Ільницькій,Ільницько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname12()
    {
        $this->object->setSecondName('Ільченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ільченко,Ільченко,Ільченко,Ільченко,Ільченко,Ільченко,Ільченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname13()
    {
        $this->object->setSecondName('Іщенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іщенко,Іщенко,Іщенко,Іщенко,Іщенко,Іщенко,Іщенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname14()
    {
        $this->object->setSecondName('Абраменко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Абраменко,Абраменко,Абраменко,Абраменко,Абраменко,Абраменко,Абраменко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname15()
    {
        $this->object->setSecondName('Абрамчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Абрамчук,Абрамчук,Абрамчук,Абрамчук,Абрамчук,Абрамчук,Абрамчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname16()
    {
        $this->object->setSecondName('Адамчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Адамчук,Адамчук,Адамчук,Адамчук,Адамчук,Адамчук,Адамчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname17()
    {
        $this->object->setSecondName('Акуленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Акуленко,Акуленко,Акуленко,Акуленко,Акуленко,Акуленко,Акуленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname18()
    {
        $this->object->setSecondName('Алексєєнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексєєнко,Алексєєнко,Алексєєнко,Алексєєнко,Алексєєнко,Алексєєнко,Алексєєнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname19()
    {
        $this->object->setSecondName('Алексійчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексійчук,Алексійчук,Алексійчук,Алексійчук,Алексійчук,Алексійчук,Алексійчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname20()
    {
        $this->object->setSecondName('Андрієнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андрієнко,Андрієнко,Андрієнко,Андрієнко,Андрієнко,Андрієнко,Андрієнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname21()
    {
        $this->object->setSecondName('Андрійчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андрійчук,Андрійчук,Андрійчук,Андрійчук,Андрійчук,Андрійчук,Андрійчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname22()
    {
        $this->object->setSecondName('Андрейко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андрейко,Андрейко,Андрейко,Андрейко,Андрейко,Андрейко,Андрейко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname23()
    {
        $this->object->setSecondName('Андрущенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андрущенко,Андрущенко,Андрущенко,Андрущенко,Андрущенко,Андрущенко,Андрущенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname24()
    {
        $this->object->setSecondName('Анищенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анищенко,Анищенко,Анищенко,Анищенко,Анищенко,Анищенко,Анищенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname25()
    {
        $this->object->setSecondName('Антонюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антонюк,Антонюк,Антонюк,Антонюк,Антонюк,Антонюк,Антонюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname26()
    {
        $this->object->setSecondName('Арсенич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Арсенич,Арсенич,Арсенич,Арсенич,Арсенич,Арсенич,Арсенич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname27()
    {
        $this->object->setSecondName('Артюх');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Артюх,Артюх,Артюх,Артюх,Артюх,Артюх,Артюх'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname28()
    {
        $this->object->setSecondName('Атаманчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Атаманчук,Атаманчук,Атаманчук,Атаманчук,Атаманчук,Атаманчук,Атаманчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname29()
    {
        $this->object->setSecondName('Біла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Біла,Біли,Білі,Білу,Білою,Білі,Біло'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname30()
    {
        $this->object->setSecondName('Білас');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Білас,Білас,Білас,Білас,Білас,Білас,Білас'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname31()
    {
        $this->object->setSecondName('Білодід');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Білодід,Білодід,Білодід,Білодід,Білодід,Білодід,Білодід'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname32()
    {
        $this->object->setSecondName('Білоус');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Білоус,Білоус,Білоус,Білоус,Білоус,Білоус,Білоус'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname33()
    {
        $this->object->setSecondName('Бабійчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бабійчук,Бабійчук,Бабійчук,Бабійчук,Бабійчук,Бабійчук,Бабійчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname34()
    {
        $this->object->setSecondName('Бабак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бабак,Бабак,Бабак,Бабак,Бабак,Бабак,Бабак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname35()
    {
        $this->object->setSecondName('Бабчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бабчук,Бабчук,Бабчук,Бабчук,Бабчук,Бабчук,Бабчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname36()
    {
        $this->object->setSecondName('Багмут');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Багмут,Багмут,Багмут,Багмут,Багмут,Багмут,Багмут'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname37()
    {
        $this->object->setSecondName('Багрій');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Багрій,Багрій,Багрій,Багрій,Багрій,Багрій,Багрій'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname38()
    {
        $this->object->setSecondName('Бадлак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бадлак,Бадлак,Бадлак,Бадлак,Бадлак,Бадлак,Бадлак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname39()
    {
        $this->object->setSecondName('Бажан');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бажан,Бажан,Бажан,Бажан,Бажан,Бажан,Бажан'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname40()
    {
        $this->object->setSecondName('Балтача');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Балтача,Балтачи,Балтачі,Балтачу,Балтачою,Балтачі,Балтачо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname41()
    {
        $this->object->setSecondName('Бандура');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бандура,Бандури,Бандурі,Бандуру,Бандурою,Бандурі,Бандуро'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname42()
    {
        $this->object->setSecondName('Баран');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баран,Баран,Баран,Баран,Баран,Баран,Баран'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname43()
    {
        $this->object->setSecondName('Баранець');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баранець,Баранець,Баранець,Баранець,Баранець,Баранець,Баранець'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname44()
    {
        $this->object->setSecondName('Барановська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Барановська,Барановської,Барановській,Барановську,Барановською,Барановській,Барановсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname45()
    {
        $this->object->setSecondName('Баранюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баранюк,Баранюк,Баранюк,Баранюк,Баранюк,Баранюк,Баранюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname46()
    {
        $this->object->setSecondName('Батюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Батюк,Батюк,Батюк,Батюк,Батюк,Батюк,Батюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname47()
    {
        $this->object->setSecondName('Бачинська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бачинська,Бачинської,Бачинській,Бачинську,Бачинською,Бачинській,Бачинсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname48()
    {
        $this->object->setSecondName('Бебешко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бебешко,Бебешко,Бебешко,Бебешко,Бебешко,Бебешко,Бебешко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname49()
    {
        $this->object->setSecondName('Бевзенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бевзенко,Бевзенко,Бевзенко,Бевзенко,Бевзенко,Бевзенко,Бевзенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname50()
    {
        $this->object->setSecondName('Березовчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Березовчук,Березовчук,Березовчук,Березовчук,Березовчук,Березовчук,Березовчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname51()
    {
        $this->object->setSecondName('Божик');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божик,Божик,Божик,Божик,Божик,Божик,Божик'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname52()
    {
        $this->object->setSecondName('Божко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божко,Божко,Божко,Божко,Божко,Божко,Божко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname53()
    {
        $this->object->setSecondName('Бойко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бойко,Бойко,Бойко,Бойко,Бойко,Бойко,Бойко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname54()
    {
        $this->object->setSecondName('Бойцун');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бойцун,Бойцун,Бойцун,Бойцун,Бойцун,Бойцун,Бойцун'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname55()
    {
        $this->object->setSecondName('Бойчак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бойчак,Бойчак,Бойчак,Бойчак,Бойчак,Бойчак,Бойчак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname56()
    {
        $this->object->setSecondName('Бойчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бойчук,Бойчук,Бойчук,Бойчук,Бойчук,Бойчук,Бойчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname57()
    {
        $this->object->setSecondName('Бондар');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бондар,Бондар,Бондар,Бондар,Бондар,Бондар,Бондар'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname58()
    {
        $this->object->setSecondName('Бондаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бондаренко,Бондаренко,Бондаренко,Бондаренко,Бондаренко,Бондаренко,Бондаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname59()
    {
        $this->object->setSecondName('Бондарчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бондарчук,Бондарчук,Бондарчук,Бондарчук,Бондарчук,Бондарчук,Бондарчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname60()
    {
        $this->object->setSecondName('Борисенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисенко,Борисенко,Борисенко,Борисенко,Борисенко,Борисенко,Борисенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname61()
    {
        $this->object->setSecondName('Борисикевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисикевич,Борисикевич,Борисикевич,Борисикевич,Борисикевич,Борисикевич,Борисикевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname62()
    {
        $this->object->setSecondName('Братусь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Братусь,Братусь,Братусь,Братусь,Братусь,Братусь,Братусь'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname63()
    {
        $this->object->setSecondName('Букатевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Букатевич,Букатевич,Букатевич,Букатевич,Букатевич,Букатевич,Букатевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname64()
    {
        $this->object->setSecondName('Бурбан');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бурбан,Бурбан,Бурбан,Бурбан,Бурбан,Бурбан,Бурбан'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname65()
    {
        $this->object->setSecondName('Бурячок');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бурячок,Бурячок,Бурячок,Бурячок,Бурячок,Бурячок,Бурячок'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname66()
    {
        $this->object->setSecondName('Бутейко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бутейко,Бутейко,Бутейко,Бутейко,Бутейко,Бутейко,Бутейко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname67()
    {
        $this->object->setSecondName('Бутенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бутенко,Бутенко,Бутенко,Бутенко,Бутенко,Бутенко,Бутенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname68()
    {
        $this->object->setSecondName('Бутник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бутник,Бутник,Бутник,Бутник,Бутник,Бутник,Бутник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname69()
    {
        $this->object->setSecondName('Бухало');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бухало,Бухало,Бухало,Бухало,Бухало,Бухало,Бухало'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname70()
    {
        $this->object->setSecondName('Василашко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Василашко,Василашко,Василашко,Василашко,Василашко,Василашко,Василашко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname71()
    {
        $this->object->setSecondName('Василенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Василенко,Василенко,Василенко,Василенко,Василенко,Василенко,Василенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname72()
    {
        $this->object->setSecondName('Васильченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильченко,Васильченко,Васильченко,Васильченко,Васильченко,Васильченко,Васильченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname73()
    {
        $this->object->setSecondName('Васильчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильчук,Васильчук,Васильчук,Васильчук,Васильчук,Васильчук,Васильчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname74()
    {
        $this->object->setSecondName('Васкул');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васкул,Васкул,Васкул,Васкул,Васкул,Васкул,Васкул'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname75()
    {
        $this->object->setSecondName('Вахній');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вахній,Вахній,Вахній,Вахній,Вахній,Вахній,Вахній'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname76()
    {
        $this->object->setSecondName('Ващенко-Захарченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname77()
    {
        $this->object->setSecondName('Вдовиченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вдовиченко,Вдовиченко,Вдовиченко,Вдовиченко,Вдовиченко,Вдовиченко,Вдовиченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname78()
    {
        $this->object->setSecondName('Величко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Величко,Величко,Величко,Величко,Величко,Величко,Величко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname79()
    {
        $this->object->setSecondName('Вертипорох');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вертипорох,Вертипорох,Вертипорох,Вертипорох,Вертипорох,Вертипорох,Вертипорох'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname80()
    {
        $this->object->setSecondName('Верхола');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Верхола,Верхоли,Верхолі,Верхолу,Верхолою,Верхолі,Верхоло'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname81()
    {
        $this->object->setSecondName('Винокур');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Винокур,Винокур,Винокур,Винокур,Винокур,Винокур,Винокур'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname82()
    {
        $this->object->setSecondName('Влох');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Влох,Влох,Влох,Влох,Влох,Влох,Влох'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname83()
    {
        $this->object->setSecondName('Вобла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вобла,Вобли,Воблі,Воблу,Воблою,Воблі,Вобло'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname84()
    {
        $this->object->setSecondName('Вовк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вовк,Вовк,Вовк,Вовк,Вовк,Вовк,Вовк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname85()
    {
        $this->object->setSecondName('Возняк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Возняк,Возняк,Возняк,Возняк,Возняк,Возняк,Возняк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname86()
    {
        $this->object->setSecondName('Волох');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Волох,Волох,Волох,Волох,Волох,Волох,Волох'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname87()
    {
        $this->object->setSecondName('Волощук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Волощук,Волощук,Волощук,Волощук,Волощук,Волощук,Волощук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname88()
    {
        $this->object->setSecondName('Вороновська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вороновська,Вороновської,Вороновській,Вороновську,Вороновською,Вороновській,Вороновсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname89()
    {
        $this->object->setSecondName('Гавриленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гавриленко,Гавриленко,Гавриленко,Гавриленко,Гавриленко,Гавриленко,Гавриленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname90()
    {
        $this->object->setSecondName('Гаврилюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гаврилюк,Гаврилюк,Гаврилюк,Гаврилюк,Гаврилюк,Гаврилюк,Гаврилюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname91()
    {
        $this->object->setSecondName('Гальченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гальченко,Гальченко,Гальченко,Гальченко,Гальченко,Гальченко,Гальченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname92()
    {
        $this->object->setSecondName('Гамалія');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гамалія,Гамалії,Гамалії,Гамалію,Гамалією,Гамалії,Гамаліє'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname93()
    {
        $this->object->setSecondName('Ганицька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ганицька,Ганицької,Ганицькій,Ганицьку,Ганицькою,Ганицькій,Ганицько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname94()
    {
        $this->object->setSecondName('Гарань');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гарань,Гарань,Гарань,Гарань,Гарань,Гарань,Гарань'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname95()
    {
        $this->object->setSecondName('Гармаш');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гармаш,Гармаш,Гармаш,Гармаш,Гармаш,Гармаш,Гармаш'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname96()
    {
        $this->object->setSecondName('Гасай');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гасай,Гасай,Гасай,Гасай,Гасай,Гасай,Гасай'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname97()
    {
        $this->object->setSecondName('Гасюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гасюк,Гасюк,Гасюк,Гасюк,Гасюк,Гасюк,Гасюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname98()
    {
        $this->object->setSecondName('Герасименко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Герасименко,Герасименко,Герасименко,Герасименко,Герасименко,Герасименко,Герасименко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname99()
    {
        $this->object->setSecondName('Геращенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Геращенко,Геращенко,Геращенко,Геращенко,Геращенко,Геращенко,Геращенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname100()
    {
        $this->object->setSecondName('Герцик');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Герцик,Герцик,Герцик,Герцик,Герцик,Герцик,Герцик'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname101()
    {
        $this->object->setSecondName('Гладченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гладченко,Гладченко,Гладченко,Гладченко,Гладченко,Гладченко,Гладченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname102()
    {
        $this->object->setSecondName('Глоба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глоба,Глоби,Глобі,Глобу,Глобою,Глобі,Глобо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname103()
    {
        $this->object->setSecondName('Гнатюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гнатюк,Гнатюк,Гнатюк,Гнатюк,Гнатюк,Гнатюк,Гнатюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname104()
    {
        $this->object->setSecondName('Гоголь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гоголь,Гоголь,Гоголь,Гоголь,Гоголь,Гоголь,Гоголь'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname105()
    {
        $this->object->setSecondName('Годунок');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Годунок,Годунок,Годунок,Годунок,Годунок,Годунок,Годунок'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname106()
    {
        $this->object->setSecondName('Головата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Головата,Головати,Головаті,Головату,Головатою,Головаті,Головато'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname107()
    {
        $this->object->setSecondName('Головко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Головко,Головко,Головко,Головко,Головко,Головко,Головко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname108()
    {
        $this->object->setSecondName('Голуб');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Голуб,Голуб,Голуб,Голуб,Голуб,Голуб,Голуб'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname109()
    {
        $this->object->setSecondName('Голубнича');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Голубнича,Голубничи,Голубничі,Голубничу,Голубничою,Голубничі,Голубничо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname110()
    {
        $this->object->setSecondName('Гонта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гонта,Гонти,Гонті,Гонту,Гонтою,Гонті,Гонто'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname111()
    {
        $this->object->setSecondName('Гончар');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гончар,Гончар,Гончар,Гончар,Гончар,Гончар,Гончар'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname112()
    {
        $this->object->setSecondName('Гончаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гончаренко,Гончаренко,Гончаренко,Гончаренко,Гончаренко,Гончаренко,Гончаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname113()
    {
        $this->object->setSecondName('Горбаль');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горбаль,Горбаль,Горбаль,Горбаль,Горбаль,Горбаль,Горбаль'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname114()
    {
        $this->object->setSecondName('Гордієнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гордієнко,Гордієнко,Гордієнко,Гордієнко,Гордієнко,Гордієнко,Гордієнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname115()
    {
        $this->object->setSecondName('Гошовська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гошовська,Гошовської,Гошовській,Гошовську,Гошовською,Гошовській,Гошовсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname116()
    {
        $this->object->setSecondName('Грінченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Грінченко,Грінченко,Грінченко,Грінченко,Грінченко,Грінченко,Грінченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname117()
    {
        $this->object->setSecondName('Грабович');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Грабович,Грабович,Грабович,Грабович,Грабович,Грабович,Грабович'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname118()
    {
        $this->object->setSecondName('Грабовська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Грабовська,Грабовської,Грабовській,Грабовську,Грабовською,Грабовській,Грабовсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname119()
    {
        $this->object->setSecondName('Григоренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григоренко,Григоренко,Григоренко,Григоренко,Григоренко,Григоренко,Григоренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname120()
    {
        $this->object->setSecondName('Григорович');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорович,Григорович,Григорович,Григорович,Григорович,Григорович,Григорович'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname121()
    {
        $this->object->setSecondName('Григорович-Барська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорович-Барська,Григорович-Барської,Григорович-Барській,Григорович-Барську,Григорович-Барською,Григорович-Барській,Григорович-Барсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname122()
    {
        $this->object->setSecondName('Григорчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Григорчук,Григорчук,Григорчук,Григорчук,Григорчук,Григорчук,Григорчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname123()
    {
        $this->object->setSecondName('Грицак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Грицак,Грицак,Грицак,Грицак,Грицак,Грицак,Грицак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname124()
    {
        $this->object->setSecondName('Гриценко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гриценко,Гриценко,Гриценко,Гриценко,Гриценко,Гриценко,Гриценко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname125()
    {
        $this->object->setSecondName('Гришко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гришко,Гришко,Гришко,Гришко,Гришко,Гришко,Гришко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname126()
    {
        $this->object->setSecondName('Гудзій');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гудзій,Гудзій,Гудзій,Гудзій,Гудзій,Гудзій,Гудзій'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname127()
    {
        $this->object->setSecondName('Гудзь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гудзь,Гудзь,Гудзь,Гудзь,Гудзь,Гудзь,Гудзь'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname128()
    {
        $this->object->setSecondName('Гуменюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гуменюк,Гуменюк,Гуменюк,Гуменюк,Гуменюк,Гуменюк,Гуменюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname129()
    {
        $this->object->setSecondName('Гунько');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гунько,Гунько,Гунько,Гунько,Гунько,Гунько,Гунько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname130()
    {
        $this->object->setSecondName('Діденко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Діденко,Діденко,Діденко,Діденко,Діденко,Діденко,Діденко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname131()
    {
        $this->object->setSecondName('Даниленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Даниленко,Даниленко,Даниленко,Даниленко,Даниленко,Даниленко,Даниленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname132()
    {
        $this->object->setSecondName('Данькевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Данькевич,Данькевич,Данькевич,Данькевич,Данькевич,Данькевич,Данькевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname133()
    {
        $this->object->setSecondName('Дараган');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дараган,Дараган,Дараган,Дараган,Дараган,Дараган,Дараган'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname134()
    {
        $this->object->setSecondName('Дашкевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дашкевич,Дашкевич,Дашкевич,Дашкевич,Дашкевич,Дашкевич,Дашкевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname135()
    {
        $this->object->setSecondName('Денисенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Денисенко,Денисенко,Денисенко,Денисенко,Денисенко,Денисенко,Денисенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname136()
    {
        $this->object->setSecondName('Джус');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Джус,Джус,Джус,Джус,Джус,Джус,Джус'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname137()
    {
        $this->object->setSecondName('Дзюба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дзюба,Дзюби,Дзюбі,Дзюбу,Дзюбою,Дзюбі,Дзюбо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname138()
    {
        $this->object->setSecondName('Дикань');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дикань,Дикань,Дикань,Дикань,Дикань,Дикань,Дикань'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname139()
    {
        $this->object->setSecondName('Дмитерко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитерко,Дмитерко,Дмитерко,Дмитерко,Дмитерко,Дмитерко,Дмитерко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname140()
    {
        $this->object->setSecondName('Довженко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Довженко,Довженко,Довженко,Довженко,Довженко,Довженко,Довженко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname141()
    {
        $this->object->setSecondName('Дорош');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дорош,Дорош,Дорош,Дорош,Дорош,Дорош,Дорош'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname142()
    {
        $this->object->setSecondName('Дорошенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дорошенко,Дорошенко,Дорошенко,Дорошенко,Дорошенко,Дорошенко,Дорошенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname143()
    {
        $this->object->setSecondName('Доценко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Доценко,Доценко,Доценко,Доценко,Доценко,Доценко,Доценко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname144()
    {
        $this->object->setSecondName('Дочинець');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дочинець,Дочинець,Дочинець,Дочинець,Дочинець,Дочинець,Дочинець'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname145()
    {
        $this->object->setSecondName('Дудко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дудко,Дудко,Дудко,Дудко,Дудко,Дудко,Дудко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname146()
    {
        $this->object->setSecondName('Дяченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дяченко,Дяченко,Дяченко,Дяченко,Дяченко,Дяченко,Дяченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname147()
    {
        $this->object->setSecondName('Ейбоженко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ейбоженко,Ейбоженко,Ейбоженко,Ейбоженко,Ейбоженко,Ейбоженко,Ейбоженко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname148()
    {
        $this->object->setSecondName('Жайворон');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жайворон,Жайворон,Жайворон,Жайворон,Жайворон,Жайворон,Жайворон'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname149()
    {
        $this->object->setSecondName('Жаліло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жаліло,Жаліло,Жаліло,Жаліло,Жаліло,Жаліло,Жаліло'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname150()
    {
        $this->object->setSecondName('Жежерін');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жежерін,Жежерін,Жежерін,Жежерін,Жежерін,Жежерін,Жежерін'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname151()
    {
        $this->object->setSecondName('Желєзняк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Желєзняк,Желєзняк,Желєзняк,Желєзняк,Желєзняк,Желєзняк,Желєзняк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname152()
    {
        $this->object->setSecondName('Железняк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Железняк,Железняк,Железняк,Железняк,Железняк,Железняк,Железняк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname153()
    {
        $this->object->setSecondName('Жилко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жилко,Жилко,Жилко,Жилко,Жилко,Жилко,Жилко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname154()
    {
        $this->object->setSecondName('Жирко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жирко,Жирко,Жирко,Жирко,Жирко,Жирко,Жирко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname155()
    {
        $this->object->setSecondName('Жук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жук,Жук,Жук,Жук,Жук,Жук,Жук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname156()
    {
        $this->object->setSecondName('Жупанська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жупанська,Жупанської,Жупанській,Жупанську,Жупанською,Жупанській,Жупансько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname157()
    {
        $this->object->setSecondName('Заєць');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Заєць,Заєць,Заєць,Заєць,Заєць,Заєць,Заєць'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname158()
    {
        $this->object->setSecondName('Забашта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Забашта,Забашти,Забашті,Забашту,Забаштою,Забашті,Забашто'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname159()
    {
        $this->object->setSecondName('Заболотна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Заболотна,Заболотної,Заболотній,Заболотну,Заболотною,Заболотній,Заболотно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname160()
    {
        $this->object->setSecondName('Завальнюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Завальнюк,Завальнюк,Завальнюк,Завальнюк,Завальнюк,Завальнюк,Завальнюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname161()
    {
        $this->object->setSecondName('Закусило');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Закусило,Закусило,Закусило,Закусило,Закусило,Закусило,Закусило'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname162()
    {
        $this->object->setSecondName('Залізняк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Залізняк,Залізняк,Залізняк,Залізняк,Залізняк,Залізняк,Залізняк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname163()
    {
        $this->object->setSecondName('Заруба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Заруба,Заруби,Зарубі,Зарубу,Зарубою,Зарубі,Зарубо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname164()
    {
        $this->object->setSecondName('Засядько');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Засядько,Засядько,Засядько,Засядько,Засядько,Засядько,Засядько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname165()
    {
        $this->object->setSecondName('Захаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Захаренко,Захаренко,Захаренко,Захаренко,Захаренко,Захаренко,Захаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname166()
    {
        $this->object->setSecondName('Захарчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Захарчук,Захарчук,Захарчук,Захарчук,Захарчук,Захарчук,Захарчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname167()
    {
        $this->object->setSecondName('Заяць');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Заяць,Заяць,Заяць,Заяць,Заяць,Заяць,Заяць'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname168()
    {
        $this->object->setSecondName('Заячківська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Заячківська,Заячківської,Заячківській,Заячківську,Заячківською,Заячківській,Заячківсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname169()
    {
        $this->object->setSecondName('Зленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зленко,Зленко,Зленко,Зленко,Зленко,Зленко,Зленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname170()
    {
        $this->object->setSecondName('Золотаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Золотаренко,Золотаренко,Золотаренко,Золотаренко,Золотаренко,Золотаренко,Золотаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname171()
    {
        $this->object->setSecondName('Кабачок');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кабачок,Кабачок,Кабачок,Кабачок,Кабачок,Кабачок,Кабачок'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname172()
    {
        $this->object->setSecondName('Каганець');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каганець,Каганець,Каганець,Каганець,Каганець,Каганець,Каганець'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname173()
    {
        $this->object->setSecondName('Калинович');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Калинович,Калинович,Калинович,Калинович,Калинович,Калинович,Калинович'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname174()
    {
        $this->object->setSecondName('Кармалюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кармалюк,Кармалюк,Кармалюк,Кармалюк,Кармалюк,Кармалюк,Кармалюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname175()
    {
        $this->object->setSecondName('Карпенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карпенко,Карпенко,Карпенко,Карпенко,Карпенко,Карпенко,Карпенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname176()
    {
        $this->object->setSecondName('Кириленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кириленко,Кириленко,Кириленко,Кириленко,Кириленко,Кириленко,Кириленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname177()
    {
        $this->object->setSecondName('Китаста');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Китаста,Китасти,Китасті,Китасту,Китастою,Китасті,Китасто'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname178()
    {
        $this->object->setSecondName('Кицай');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кицай,Кицай,Кицай,Кицай,Кицай,Кицай,Кицай'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname179()
    {
        $this->object->setSecondName('Клименко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клименко,Клименко,Клименко,Клименко,Клименко,Клименко,Клименко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname180()
    {
        $this->object->setSecondName('Климчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Климчук,Климчук,Климчук,Климчук,Климчук,Климчук,Климчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname181()
    {
        $this->object->setSecondName('Кмета');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кмета,Кмети,Кметі,Кмету,Кметою,Кметі,Кмето'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname182()
    {
        $this->object->setSecondName('Книш');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Книш,Книш,Книш,Книш,Книш,Книш,Книш'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname183()
    {
        $this->object->setSecondName('Коваленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коваленко,Коваленко,Коваленко,Коваленко,Коваленко,Коваленко,Коваленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname184()
    {
        $this->object->setSecondName('Коваль');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коваль,Коваль,Коваль,Коваль,Коваль,Коваль,Коваль'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname185()
    {
        $this->object->setSecondName('Ковальчик');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ковальчик,Ковальчик,Ковальчик,Ковальчик,Ковальчик,Ковальчик,Ковальчик'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname186()
    {
        $this->object->setSecondName('Ковальчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ковальчук,Ковальчук,Ковальчук,Ковальчук,Ковальчук,Ковальчук,Ковальчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname187()
    {
        $this->object->setSecondName('Кованько');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кованько,Кованько,Кованько,Кованько,Кованько,Кованько,Кованько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname188()
    {
        $this->object->setSecondName('Ковтун');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ковтун,Ковтун,Ковтун,Ковтун,Ковтун,Ковтун,Ковтун'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname189()
    {
        $this->object->setSecondName('Козаченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козаченко,Козаченко,Козаченко,Козаченко,Козаченко,Козаченко,Козаченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname190()
    {
        $this->object->setSecondName('Козачинська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козачинська,Козачинської,Козачинській,Козачинську,Козачинською,Козачинській,Козачинсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname191()
    {
        $this->object->setSecondName('Козачок');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козачок,Козачок,Козачок,Козачок,Козачок,Козачок,Козачок'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname192()
    {
        $this->object->setSecondName('Козубенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козубенко,Козубенко,Козубенко,Козубенко,Козубенко,Козубенко,Козубенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname193()
    {
        $this->object->setSecondName('Колесник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Колесник,Колесник,Колесник,Колесник,Колесник,Колесник,Колесник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname194()
    {
        $this->object->setSecondName('Колодій');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Колодій,Колодій,Колодій,Колодій,Колодій,Колодій,Колодій'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname195()
    {
        $this->object->setSecondName('Колодна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Колодна,Колодни,Колодні,Колодну,Колодною,Колодні,Колодно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname196()
    {
        $this->object->setSecondName('Коломієць');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коломієць,Коломієць,Коломієць,Коломієць,Коломієць,Коломієць,Коломієць'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname197()
    {
        $this->object->setSecondName('Комар');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Комар,Комар,Комар,Комар,Комар,Комар,Комар'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname198()
    {
        $this->object->setSecondName('Кондратюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кондратюк,Кондратюк,Кондратюк,Кондратюк,Кондратюк,Кондратюк,Кондратюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname199()
    {
        $this->object->setSecondName('Корецька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корецька,Корецької,Корецькій,Корецьку,Корецькою,Корецькій,Корецько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname200()
    {
        $this->object->setSecondName('Корж');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корж,Корж,Корж,Корж,Корж,Корж,Корж'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname201()
    {
        $this->object->setSecondName('Корнійчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корнійчук,Корнійчук,Корнійчук,Корнійчук,Корнійчук,Корнійчук,Корнійчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname202()
    {
        $this->object->setSecondName('Коробка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коробка,Коробки,Коробці,Коробку,Коробкою,Коробці,Коробко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname203()
    {
        $this->object->setSecondName('Королюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Королюк,Королюк,Королюк,Королюк,Королюк,Королюк,Королюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname204()
    {
        $this->object->setSecondName('Короткевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Короткевич,Короткевич,Короткевич,Короткевич,Короткевич,Короткевич,Короткевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname205()
    {
        $this->object->setSecondName('Корпанюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корпанюк,Корпанюк,Корпанюк,Корпанюк,Корпанюк,Корпанюк,Корпанюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname206()
    {
        $this->object->setSecondName('Корчак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корчак,Корчак,Корчак,Корчак,Корчак,Корчак,Корчак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname207()
    {
        $this->object->setSecondName('Корчинська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корчинська,Корчинської,Корчинській,Корчинську,Корчинською,Корчинській,Корчинсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname208()
    {
        $this->object->setSecondName('Косенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Косенко,Косенко,Косенко,Косенко,Косенко,Косенко,Косенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname209()
    {
        $this->object->setSecondName('Костенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Костенко,Костенко,Костенко,Костенко,Костенко,Костенко,Костенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname210()
    {
        $this->object->setSecondName('Коструба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коструба,Коструби,Кострубі,Кострубу,Кострубою,Кострубі,Кострубо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname211()
    {
        $this->object->setSecondName('Костюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Костюк,Костюк,Костюк,Костюк,Костюк,Костюк,Костюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname212()
    {
        $this->object->setSecondName('Котляр');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Котляр,Котляр,Котляр,Котляр,Котляр,Котляр,Котляр'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname213()
    {
        $this->object->setSecondName('Котляревська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Котляревська,Котляревської,Котляревській,Котляревську,Котляревською,Котляревській,Котляревсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname214()
    {
        $this->object->setSecondName('Кравченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кравченко,Кравченко,Кравченко,Кравченко,Кравченко,Кравченко,Кравченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname215()
    {
        $this->object->setSecondName('Кравчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кравчук,Кравчук,Кравчук,Кравчук,Кравчук,Кравчук,Кравчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname216()
    {
        $this->object->setSecondName('Красовська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Красовська,Красовської,Красовській,Красовську,Красовською,Красовській,Красовсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname217()
    {
        $this->object->setSecondName('Криворучко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Криворучко,Криворучко,Криворучко,Криворучко,Криворучко,Криворучко,Криворучко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname218()
    {
        $this->object->setSecondName('Крикуненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Крикуненко,Крикуненко,Крикуненко,Крикуненко,Крикуненко,Крикуненко,Крикуненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname219()
    {
        $this->object->setSecondName('Кузьмінська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кузьмінська,Кузьмінської,Кузьмінській,Кузьмінську,Кузьмінською,Кузьмінській,Кузьмінсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname220()
    {
        $this->object->setSecondName('Кулиняк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кулиняк,Кулиняк,Кулиняк,Кулиняк,Кулиняк,Кулиняк,Кулиняк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname221()
    {
        $this->object->setSecondName('Кульчицька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кульчицька,Кульчицької,Кульчицькій,Кульчицьку,Кульчицькою,Кульчицькій,Кульчицько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname222()
    {
        $this->object->setSecondName('Купчинська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Купчинська,Купчинської,Купчинській,Купчинську,Купчинською,Купчинській,Купчинсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname223()
    {
        $this->object->setSecondName('Кухаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кухаренко,Кухаренко,Кухаренко,Кухаренко,Кухаренко,Кухаренко,Кухаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname224()
    {
        $this->object->setSecondName('Куц');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Куц,Куц,Куц,Куц,Куц,Куц,Куц'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname225()
    {
        $this->object->setSecondName('Куценко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Куценко,Куценко,Куценко,Куценко,Куценко,Куценко,Куценко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname226()
    {
        $this->object->setSecondName('Кучер');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кучер,Кучер,Кучер,Кучер,Кучер,Кучер,Кучер'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname227()
    {
        $this->object->setSecondName('Кучеренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кучеренко,Кучеренко,Кучеренко,Кучеренко,Кучеренко,Кучеренко,Кучеренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname228()
    {
        $this->object->setSecondName('Кушнір');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кушнір,Кушнір,Кушнір,Кушнір,Кушнір,Кушнір,Кушнір'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname229()
    {
        $this->object->setSecondName('Лаба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лаба,Лаби,Лабі,Лабу,Лабою,Лабі,Лабо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname230()
    {
        $this->object->setSecondName('Лаврін');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лаврін,Лаврін,Лаврін,Лаврін,Лаврін,Лаврін,Лаврін'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname231()
    {
        $this->object->setSecondName('Лаврик');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лаврик,Лаврик,Лаврик,Лаврик,Лаврик,Лаврик,Лаврик'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname232()
    {
        $this->object->setSecondName('Лавриненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лавриненко,Лавриненко,Лавриненко,Лавриненко,Лавриненко,Лавриненко,Лавриненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname233()
    {
        $this->object->setSecondName('Лазарчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лазарчук,Лазарчук,Лазарчук,Лазарчук,Лазарчук,Лазарчук,Лазарчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname234()
    {
        $this->object->setSecondName('Лазорко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лазорко,Лазорко,Лазорко,Лазорко,Лазорко,Лазорко,Лазорко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname235()
    {
        $this->object->setSecondName('Левицька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Левицька,Левицької,Левицькій,Левицьку,Левицькою,Левицькій,Левицько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname236()
    {
        $this->object->setSecondName('Левченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Левченко,Левченко,Левченко,Левченко,Левченко,Левченко,Левченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname237()
    {
        $this->object->setSecondName('Лисенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лисенко,Лисенко,Лисенко,Лисенко,Лисенко,Лисенко,Лисенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname238()
    {
        $this->object->setSecondName('Литвиненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Литвиненко,Литвиненко,Литвиненко,Литвиненко,Литвиненко,Литвиненко,Литвиненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname239()
    {
        $this->object->setSecondName('Литовченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Литовченко,Литовченко,Литовченко,Литовченко,Литовченко,Литовченко,Литовченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname240()
    {
        $this->object->setSecondName('Лозина-Лозинська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лозина-Лозинська,Лозина-Лозинської,Лозина-Лозинській,Лозина-Лозинську,Лозина-Лозинською,Лозина-Лозинській,Лозина-Лозинсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname241()
    {
        $this->object->setSecondName('Лопатинська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лопатинська,Лопатинської,Лопатинській,Лопатинську,Лопатинською,Лопатинській,Лопатинсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname242()
    {
        $this->object->setSecondName('Лукомська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лукомська,Лукомської,Лукомській,Лукомську,Лукомською,Лукомській,Лукомсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname243()
    {
        $this->object->setSecondName('Луценко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Луценко,Луценко,Луценко,Луценко,Луценко,Луценко,Луценко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname244()
    {
        $this->object->setSecondName('Людкевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людкевич,Людкевич,Людкевич,Людкевич,Людкевич,Людкевич,Людкевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname245()
    {
        $this->object->setSecondName('Ляшенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ляшенко,Ляшенко,Ляшенко,Ляшенко,Ляшенко,Ляшенко,Ляшенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname246()
    {
        $this->object->setSecondName('Мірошниченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мірошниченко,Мірошниченко,Мірошниченко,Мірошниченко,Мірошниченко,Мірошниченко,Мірошниченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname247()
    {
        $this->object->setSecondName('Мірчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мірчук,Мірчук,Мірчук,Мірчук,Мірчук,Мірчук,Мірчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname248()
    {
        $this->object->setSecondName('Міщенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Міщенко,Міщенко,Міщенко,Міщенко,Міщенко,Міщенко,Міщенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname249()
    {
        $this->object->setSecondName('Мазур');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мазур,Мазур,Мазур,Мазур,Мазур,Мазур,Мазур'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname250()
    {
        $this->object->setSecondName('Макаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Макаренко,Макаренко,Макаренко,Макаренко,Макаренко,Макаренко,Макаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname251()
    {
        $this->object->setSecondName('Максименко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максименко,Максименко,Максименко,Максименко,Максименко,Максименко,Максименко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname252()
    {
        $this->object->setSecondName('Маланчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маланчук,Маланчук,Маланчук,Маланчук,Маланчук,Маланчук,Маланчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname253()
    {
        $this->object->setSecondName('Малишко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малишко,Малишко,Малишко,Малишко,Малишко,Малишко,Малишко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname254()
    {
        $this->object->setSecondName('Малкович');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малкович,Малкович,Малкович,Малкович,Малкович,Малкович,Малкович'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname255()
    {
        $this->object->setSecondName('Мамчур');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мамчур,Мамчур,Мамчур,Мамчур,Мамчур,Мамчур,Мамчур'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname256()
    {
        $this->object->setSecondName('Маркевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маркевич,Маркевич,Маркевич,Маркевич,Маркевич,Маркевич,Маркевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname257()
    {
        $this->object->setSecondName('Мартиненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мартиненко,Мартиненко,Мартиненко,Мартиненко,Мартиненко,Мартиненко,Мартиненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname258()
    {
        $this->object->setSecondName('Марунчак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марунчак,Марунчак,Марунчак,Марунчак,Марунчак,Марунчак,Марунчак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname259()
    {
        $this->object->setSecondName('Марценюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марценюк,Марценюк,Марценюк,Марценюк,Марценюк,Марценюк,Марценюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname260()
    {
        $this->object->setSecondName('Марченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марченко,Марченко,Марченко,Марченко,Марченко,Марченко,Марченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname261()
    {
        $this->object->setSecondName('Марчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марчук,Марчук,Марчук,Марчук,Марчук,Марчук,Марчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname262()
    {
        $this->object->setSecondName('Масоха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Масоха,Масохи,Масосі,Масоху,Масохою,Масосі,Масохо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname263()
    {
        $this->object->setSecondName('Матвієнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матвієнко,Матвієнко,Матвієнко,Матвієнко,Матвієнко,Матвієнко,Матвієнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname264()
    {
        $this->object->setSecondName('Матюшенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матюшенко,Матюшенко,Матюшенко,Матюшенко,Матюшенко,Матюшенко,Матюшенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname265()
    {
        $this->object->setSecondName('Маценко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маценко,Маценко,Маценко,Маценко,Маценко,Маценко,Маценко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname266()
    {
        $this->object->setSecondName('Мацюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мацюк,Мацюк,Мацюк,Мацюк,Мацюк,Мацюк,Мацюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname267()
    {
        $this->object->setSecondName('Мельник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мельник,Мельник,Мельник,Мельник,Мельник,Мельник,Мельник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname268()
    {
        $this->object->setSecondName('Мельниченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мельниченко,Мельниченко,Мельниченко,Мельниченко,Мельниченко,Мельниченко,Мельниченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname269()
    {
        $this->object->setSecondName('Мельничук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мельничук,Мельничук,Мельничук,Мельничук,Мельничук,Мельничук,Мельничук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname270()
    {
        $this->object->setSecondName('Микитенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Микитенко,Микитенко,Микитенко,Микитенко,Микитенко,Микитенко,Микитенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname271()
    {
        $this->object->setSecondName('Мирон');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мирон,Мирон,Мирон,Мирон,Мирон,Мирон,Мирон'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname272()
    {
        $this->object->setSecondName('Михайленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайленко,Михайленко,Михайленко,Михайленко,Михайленко,Михайленко,Михайленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname273()
    {
        $this->object->setSecondName('Михайличенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайличенко,Михайличенко,Михайличенко,Михайличенко,Михайличенко,Михайличенко,Михайличенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname274()
    {
        $this->object->setSecondName('Михайлюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайлюк,Михайлюк,Михайлюк,Михайлюк,Михайлюк,Михайлюк,Михайлюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname275()
    {
        $this->object->setSecondName('Мицик');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мицик,Мицик,Мицик,Мицик,Мицик,Мицик,Мицик'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname276()
    {
        $this->object->setSecondName('Мовчан');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мовчан,Мовчан,Мовчан,Мовчан,Мовчан,Мовчан,Мовчан'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname277()
    {
        $this->object->setSecondName('Моргун');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Моргун,Моргун,Моргун,Моргун,Моргун,Моргун,Моргун'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname278()
    {
        $this->object->setSecondName('Мороз');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мороз,Мороз,Мороз,Мороз,Мороз,Мороз,Мороз'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname279()
    {
        $this->object->setSecondName('Москаленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Москаленко,Москаленко,Москаленко,Москаленко,Москаленко,Москаленко,Москаленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname280()
    {
        $this->object->setSecondName('Москаль');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Москаль,Москаль,Москаль,Москаль,Москаль,Москаль,Москаль'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname281()
    {
        $this->object->setSecondName('Мошак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мошак,Мошак,Мошак,Мошак,Мошак,Мошак,Мошак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname282()
    {
        $this->object->setSecondName('Муратова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Муратова,Муратової,Муратовій,Муратову,Муратовою,Муратовій,Муратово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname283()
    {
        $this->object->setSecondName('Мусієнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мусієнко,Мусієнко,Мусієнко,Мусієнко,Мусієнко,Мусієнко,Мусієнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname284()
    {
        $this->object->setSecondName('Назаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Назаренко,Назаренко,Назаренко,Назаренко,Назаренко,Назаренко,Назаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname285()
    {
        $this->object->setSecondName('Наливайко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наливайко,Наливайко,Наливайко,Наливайко,Наливайко,Наливайко,Наливайко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname286()
    {
        $this->object->setSecondName('Негребецька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Негребецька,Негребецької,Негребецькій,Негребецьку,Негребецькою,Негребецькій,Негребецько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname287()
    {
        $this->object->setSecondName('Непорожній');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Непорожній,Непорожній,Непорожній,Непорожній,Непорожній,Непорожній,Непорожній'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname288()
    {
        $this->object->setSecondName('Нестеренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нестеренко,Нестеренко,Нестеренко,Нестеренко,Нестеренко,Нестеренко,Нестеренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname289()
    {
        $this->object->setSecondName('Нечай');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нечай,Нечай,Нечай,Нечай,Нечай,Нечай,Нечай'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname290()
    {
        $this->object->setSecondName('Нечипоренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нечипоренко,Нечипоренко,Нечипоренко,Нечипоренко,Нечипоренко,Нечипоренко,Нечипоренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname291()
    {
        $this->object->setSecondName('Оберемченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оберемченко,Оберемченко,Оберемченко,Оберемченко,Оберемченко,Оберемченко,Оберемченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname292()
    {
        $this->object->setSecondName('Овчаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Овчаренко,Овчаренко,Овчаренко,Овчаренко,Овчаренко,Овчаренко,Овчаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname293()
    {
        $this->object->setSecondName('Олійник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олійник,Олійник,Олійник,Олійник,Олійник,Олійник,Олійник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname294()
    {
        $this->object->setSecondName('Олексієнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олексієнко,Олексієнко,Олексієнко,Олексієнко,Олексієнко,Олексієнко,Олексієнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname295()
    {
        $this->object->setSecondName('Омельченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Омельченко,Омельченко,Омельченко,Омельченко,Омельченко,Омельченко,Омельченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname296()
    {
        $this->object->setSecondName('Омельчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Омельчук,Омельчук,Омельчук,Омельчук,Омельчук,Омельчук,Омельчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname297()
    {
        $this->object->setSecondName('Онищенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Онищенко,Онищенко,Онищенко,Онищенко,Онищенко,Онищенко,Онищенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname298()
    {
        $this->object->setSecondName('Онопенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Онопенко,Онопенко,Онопенко,Онопенко,Онопенко,Онопенко,Онопенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname299()
    {
        $this->object->setSecondName('Опанасенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Опанасенко,Опанасенко,Опанасенко,Опанасенко,Опанасенко,Опанасенко,Опанасенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname300()
    {
        $this->object->setSecondName('Осадчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Осадчук,Осадчук,Осадчук,Осадчук,Осадчук,Осадчук,Осадчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname301()
    {
        $this->object->setSecondName('Осика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Осика,Осики,Осиці,Осику,Осикою,Осиці,Осико'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname302()
    {
        $this->object->setSecondName('Остапенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Остапенко,Остапенко,Остапенко,Остапенко,Остапенко,Остапенко,Остапенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname303()
    {
        $this->object->setSecondName('Остроградська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Остроградська,Остроградської,Остроградській,Остроградську,Остроградською,Остроградській,Остроградсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname304()
    {
        $this->object->setSecondName('Півторак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Півторак,Півторак,Півторак,Півторак,Півторак,Півторак,Півторак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname305()
    {
        $this->object->setSecondName('Підопригора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Підопригора,Підопригори,Підопригорі,Підопригору,Підопригорою,Підопригорі,Підопригоро'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname306()
    {
        $this->object->setSecondName('Павленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павленко,Павленко,Павленко,Павленко,Павленко,Павленко,Павленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname307()
    {
        $this->object->setSecondName('Павлюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлюк,Павлюк,Павлюк,Павлюк,Павлюк,Павлюк,Павлюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname308()
    {
        $this->object->setSecondName('Павлюченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлюченко,Павлюченко,Павлюченко,Павлюченко,Павлюченко,Павлюченко,Павлюченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname309()
    {
        $this->object->setSecondName('Пазенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пазенко,Пазенко,Пазенко,Пазенко,Пазенко,Пазенко,Пазенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname310()
    {
        $this->object->setSecondName('Паламарчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Паламарчук,Паламарчук,Паламарчук,Паламарчук,Паламарчук,Паламарчук,Паламарчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname311()
    {
        $this->object->setSecondName('Панас');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панас,Панас,Панас,Панас,Панас,Панас,Панас'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname312()
    {
        $this->object->setSecondName('Панасюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панасюк,Панасюк,Панасюк,Панасюк,Панасюк,Панасюк,Панасюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname313()
    {
        $this->object->setSecondName('Паньківська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Паньківська,Паньківської,Паньківській,Паньківську,Паньківською,Паньківській,Паньківсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname314()
    {
        $this->object->setSecondName('Пархоменко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пархоменко,Пархоменко,Пархоменко,Пархоменко,Пархоменко,Пархоменко,Пархоменко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname315()
    {
        $this->object->setSecondName('Пасічник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пасічник,Пасічник,Пасічник,Пасічник,Пасічник,Пасічник,Пасічник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname316()
    {
        $this->object->setSecondName('Пасько');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пасько,Пасько,Пасько,Пасько,Пасько,Пасько,Пасько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname317()
    {
        $this->object->setSecondName('Пашко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пашко,Пашко,Пашко,Пашко,Пашко,Пашко,Пашко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname318()
    {
        $this->object->setSecondName('Пащенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пащенко,Пащенко,Пащенко,Пащенко,Пащенко,Пащенко,Пащенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname319()
    {
        $this->object->setSecondName('Перебийніс');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Перебийніс,Перебийніс,Перебийніс,Перебийніс,Перебийніс,Перебийніс,Перебийніс'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname320()
    {
        $this->object->setSecondName('Петренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петренко,Петренко,Петренко,Петренко,Петренко,Петренко,Петренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname321()
    {
        $this->object->setSecondName('Пилипенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пилипенко,Пилипенко,Пилипенко,Пилипенко,Пилипенко,Пилипенко,Пилипенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname322()
    {
        $this->object->setSecondName('Пилипчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пилипчук,Пилипчук,Пилипчук,Пилипчук,Пилипчук,Пилипчук,Пилипчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname323()
    {
        $this->object->setSecondName('Писаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Писаренко,Писаренко,Писаренко,Писаренко,Писаренко,Писаренко,Писаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname324()
    {
        $this->object->setSecondName('Писарчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Писарчук,Писарчук,Писарчук,Писарчук,Писарчук,Писарчук,Писарчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname325()
    {
        $this->object->setSecondName('Плющ');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Плющ,Плющ,Плющ,Плющ,Плющ,Плющ,Плющ'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname326()
    {
        $this->object->setSecondName('Покотило');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Покотило,Покотило,Покотило,Покотило,Покотило,Покотило,Покотило'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname327()
    {
        $this->object->setSecondName('Поліщук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Поліщук,Поліщук,Поліщук,Поліщук,Поліщук,Поліщук,Поліщук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname328()
    {
        $this->object->setSecondName('Польова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Польова,Польової,Польовій,Польову,Польовою,Польовій,Польово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname329()
    {
        $this->object->setSecondName('Полянська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полянська,Полянської,Полянській,Полянську,Полянською,Полянській,Полянсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname330()
    {
        $this->object->setSecondName('Пономаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пономаренко,Пономаренко,Пономаренко,Пономаренко,Пономаренко,Пономаренко,Пономаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname331()
    {
        $this->object->setSecondName('Попадюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Попадюк,Попадюк,Попадюк,Попадюк,Попадюк,Попадюк,Попадюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname332()
    {
        $this->object->setSecondName('Попенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Попенко,Попенко,Попенко,Попенко,Попенко,Попенко,Попенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname333()
    {
        $this->object->setSecondName('Потапенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Потапенко,Потапенко,Потапенко,Потапенко,Потапенко,Потапенко,Потапенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname334()
    {
        $this->object->setSecondName('Потебенько');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Потебенько,Потебенько,Потебенько,Потебенько,Потебенько,Потебенько,Потебенько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname335()
    {
        $this->object->setSecondName('Прийма');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прийма,Прийми,Приймі,Прийму,Приймою,Приймі,Приймо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname336()
    {
        $this->object->setSecondName('Приймак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Приймак,Приймак,Приймак,Приймак,Приймак,Приймак,Приймак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname337()
    {
        $this->object->setSecondName('Присяжнюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Присяжнюк,Присяжнюк,Присяжнюк,Присяжнюк,Присяжнюк,Присяжнюк,Присяжнюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname338()
    {
        $this->object->setSecondName('Приходько');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Приходько,Приходько,Приходько,Приходько,Приходько,Приходько,Приходько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname339()
    {
        $this->object->setSecondName('Продан');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Продан,Продан,Продан,Продан,Продан,Продан,Продан'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname340()
    {
        $this->object->setSecondName('Проценко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Проценко,Проценко,Проценко,Проценко,Проценко,Проценко,Проценко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname341()
    {
        $this->object->setSecondName('Проць');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Проць,Проць,Проць,Проць,Проць,Проць,Проць'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname342()
    {
        $this->object->setSecondName('Процюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Процюк,Процюк,Процюк,Процюк,Процюк,Процюк,Процюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname343()
    {
        $this->object->setSecondName('Пушкар');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пушкар,Пушкар,Пушкар,Пушкар,Пушкар,Пушкар,Пушкар'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname344()
    {
        $this->object->setSecondName('Різун');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Різун,Різун,Різун,Різун,Різун,Різун,Різун'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname345()
    {
        $this->object->setSecondName('Радченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Радченко,Радченко,Радченко,Радченко,Радченко,Радченко,Радченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname346()
    {
        $this->object->setSecondName('Рибальченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рибальченко,Рибальченко,Рибальченко,Рибальченко,Рибальченко,Рибальченко,Рибальченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname347()
    {
        $this->object->setSecondName('Римар');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Римар,Римар,Римар,Римар,Римар,Римар,Римар'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname348()
    {
        $this->object->setSecondName('Рожок');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рожок,Рожок,Рожок,Рожок,Рожок,Рожок,Рожок'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname349()
    {
        $this->object->setSecondName('Романенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романенко,Романенко,Романенко,Романенко,Романенко,Романенко,Романенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname350()
    {
        $this->object->setSecondName('Романчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романчук,Романчук,Романчук,Романчук,Романчук,Романчук,Романчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname351()
    {
        $this->object->setSecondName('Романюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романюк,Романюк,Романюк,Романюк,Романюк,Романюк,Романюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname352()
    {
        $this->object->setSecondName('Рошкевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рошкевич,Рошкевич,Рошкевич,Рошкевич,Рошкевич,Рошкевич,Рошкевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname353()
    {
        $this->object->setSecondName('Рубан');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рубан,Рубан,Рубан,Рубан,Рубан,Рубан,Рубан'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname354()
    {
        $this->object->setSecondName('Руденко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Руденко,Руденко,Руденко,Руденко,Руденко,Руденко,Руденко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname355()
    {
        $this->object->setSecondName('Рябовіл');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рябовіл,Рябовіл,Рябовіл,Рябовіл,Рябовіл,Рябовіл,Рябовіл'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname356()
    {
        $this->object->setSecondName('Сімашкевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сімашкевич,Сімашкевич,Сімашкевич,Сімашкевич,Сімашкевич,Сімашкевич,Сімашкевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname357()
    {
        $this->object->setSecondName('Саєнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Саєнко,Саєнко,Саєнко,Саєнко,Саєнко,Саєнко,Саєнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname358()
    {
        $this->object->setSecondName('Савенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савенко,Савенко,Савенко,Савенко,Савенко,Савенко,Савенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname359()
    {
        $this->object->setSecondName('Савицька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савицька,Савицької,Савицькій,Савицьку,Савицькою,Савицькій,Савицько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname360()
    {
        $this->object->setSecondName('Савка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савка,Савки,Савці,Савку,Савкою,Савці,Савко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname361()
    {
        $this->object->setSecondName('Савченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савченко,Савченко,Савченко,Савченко,Савченко,Савченко,Савченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname362()
    {
        $this->object->setSecondName('Савчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савчук,Савчук,Савчук,Савчук,Савчук,Савчук,Савчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname363()
    {
        $this->object->setSecondName('Сак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сак,Сак,Сак,Сак,Сак,Сак,Сак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname364()
    {
        $this->object->setSecondName('Самборська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Самборська,Самборської,Самборській,Самборську,Самборською,Самборській,Самборсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname365()
    {
        $this->object->setSecondName('Самойлович');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Самойлович,Самойлович,Самойлович,Самойлович,Самойлович,Самойлович,Самойлович'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname366()
    {
        $this->object->setSecondName('Самусь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Самусь,Самусь,Самусь,Самусь,Самусь,Самусь,Самусь'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname367()
    {
        $this->object->setSecondName('Свида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Свида,Свиди,Свиді,Свиду,Свидою,Свиді,Свидо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname368()
    {
        $this->object->setSecondName('Семашко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семашко,Семашко,Семашко,Семашко,Семашко,Семашко,Семашко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname369()
    {
        $this->object->setSecondName('Семененко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семененко,Семененко,Семененко,Семененко,Семененко,Семененко,Семененко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname370()
    {
        $this->object->setSecondName('Семенець');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семенець,Семенець,Семенець,Семенець,Семенець,Семенець,Семенець'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname371()
    {
        $this->object->setSecondName('Семенина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семенина,Семениної,Семениній,Семенину,Семениною,Семениній,Семенино'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname372()
    {
        $this->object->setSecondName('Семенченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семенченко,Семенченко,Семенченко,Семенченко,Семенченко,Семенченко,Семенченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname373()
    {
        $this->object->setSecondName('Семенюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семенюк,Семенюк,Семенюк,Семенюк,Семенюк,Семенюк,Семенюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname374()
    {
        $this->object->setSecondName('Семеренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семеренко,Семеренко,Семеренко,Семеренко,Семеренко,Семеренко,Семеренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname375()
    {
        $this->object->setSecondName('Сидоренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сидоренко,Сидоренко,Сидоренко,Сидоренко,Сидоренко,Сидоренко,Сидоренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname376()
    {
        $this->object->setSecondName('Силенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Силенко,Силенко,Силенко,Силенко,Силенко,Силенко,Силенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname377()
    {
        $this->object->setSecondName('Симоненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Симоненко,Симоненко,Симоненко,Симоненко,Симоненко,Симоненко,Симоненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname378()
    {
        $this->object->setSecondName('Симчич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Симчич,Симчич,Симчич,Симчич,Симчич,Симчич,Симчич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname379()
    {
        $this->object->setSecondName('Скрипник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скрипник,Скрипник,Скрипник,Скрипник,Скрипник,Скрипник,Скрипник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname380()
    {
        $this->object->setSecondName('Скуратівська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скуратівська,Скуратівської,Скуратівській,Скуратівську,Скуратівською,Скуратівській,Скуратівсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname381()
    {
        $this->object->setSecondName('Слободян');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Слободян,Слободян,Слободян,Слободян,Слободян,Слободян,Слободян'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname382()
    {
        $this->object->setSecondName('Слободянюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Слободянюк,Слободянюк,Слободянюк,Слободянюк,Слободянюк,Слободянюк,Слободянюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname383()
    {
        $this->object->setSecondName('Смик');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Смик,Смик,Смик,Смик,Смик,Смик,Смик'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname384()
    {
        $this->object->setSecondName('Смогоржевська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Смогоржевська,Смогоржевської,Смогоржевській,Смогоржевську,Смогоржевською,Смогоржевській,Смогоржевсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname385()
    {
        $this->object->setSecondName('Собчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Собчук,Собчук,Собчук,Собчук,Собчук,Собчук,Собчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname386()
    {
        $this->object->setSecondName('Сопронюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сопронюк,Сопронюк,Сопронюк,Сопронюк,Сопронюк,Сопронюк,Сопронюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname387()
    {
        $this->object->setSecondName('Сорока');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сорока,Сороки,Сороці,Сороку,Сорокою,Сороці,Сороко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname388()
    {
        $this->object->setSecondName('Сохань');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сохань,Сохань,Сохань,Сохань,Сохань,Сохань,Сохань'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname389()
    {
        $this->object->setSecondName('Стадник');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стадник,Стадник,Стадник,Стадник,Стадник,Стадник,Стадник'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname390()
    {
        $this->object->setSecondName('Стельмах');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стельмах,Стельмах,Стельмах,Стельмах,Стельмах,Стельмах,Стельмах'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname391()
    {
        $this->object->setSecondName('Степаненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степаненко,Степаненко,Степаненко,Степаненко,Степаненко,Степаненко,Степаненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname392()
    {
        $this->object->setSecondName('Степура');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степура,Степури,Степурі,Степуру,Степурою,Степурі,Степуро'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname393()
    {
        $this->object->setSecondName('Стеценко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стеценко,Стеценко,Стеценко,Стеценко,Стеценко,Стеценко,Стеценко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname394()
    {
        $this->object->setSecondName('Стецюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стецюк,Стецюк,Стецюк,Стецюк,Стецюк,Стецюк,Стецюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname395()
    {
        $this->object->setSecondName('Струтинська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Струтинська,Струтинської,Струтинській,Струтинську,Струтинською,Струтинській,Струтинсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname396()
    {
        $this->object->setSecondName('Сулима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сулима,Сулими,Сулимі,Сулиму,Сулимою,Сулимі,Сулимо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname397()
    {
        $this->object->setSecondName('Супруненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Супруненко,Супруненко,Супруненко,Супруненко,Супруненко,Супруненко,Супруненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname398()
    {
        $this->object->setSecondName('Тараненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тараненко,Тараненко,Тараненко,Тараненко,Тараненко,Тараненко,Тараненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname399()
    {
        $this->object->setSecondName('Татаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татаренко,Татаренко,Татаренко,Татаренко,Татаренко,Татаренко,Татаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname400()
    {
        $this->object->setSecondName('Теплицька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Теплицька,Теплицької,Теплицькій,Теплицьку,Теплицькою,Теплицькій,Теплицько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname401()
    {
        $this->object->setSecondName('Терещенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Терещенко,Терещенко,Терещенко,Терещенко,Терещенко,Терещенко,Терещенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname402()
    {
        $this->object->setSecondName('Терещук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Терещук,Терещук,Терещук,Терещук,Терещук,Терещук,Терещук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname403()
    {
        $this->object->setSecondName('Тесленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тесленко,Тесленко,Тесленко,Тесленко,Тесленко,Тесленко,Тесленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname404()
    {
        $this->object->setSecondName('Тимошенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тимошенко,Тимошенко,Тимошенко,Тимошенко,Тимошенко,Тимошенко,Тимошенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname405()
    {
        $this->object->setSecondName('Тимощук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тимощук,Тимощук,Тимощук,Тимощук,Тимощук,Тимощук,Тимощук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname406()
    {
        $this->object->setSecondName('Тимчак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тимчак,Тимчак,Тимчак,Тимчак,Тимчак,Тимчак,Тимчак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname407()
    {
        $this->object->setSecondName('Титаренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Титаренко,Титаренко,Титаренко,Титаренко,Титаренко,Титаренко,Титаренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname408()
    {
        $this->object->setSecondName('Тищенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тищенко,Тищенко,Тищенко,Тищенко,Тищенко,Тищенко,Тищенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname409()
    {
        $this->object->setSecondName('Ткач');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ткач,Ткач,Ткач,Ткач,Ткач,Ткач,Ткач'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname410()
    {
        $this->object->setSecondName('Ткаченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ткаченко,Ткаченко,Ткаченко,Ткаченко,Ткаченко,Ткаченко,Ткаченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname411()
    {
        $this->object->setSecondName('Ткачук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ткачук,Ткачук,Ткачук,Ткачук,Ткачук,Ткачук,Ткачук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname412()
    {
        $this->object->setSecondName('Толочко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Толочко,Толочко,Толочко,Толочко,Толочко,Толочко,Толочко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname413()
    {
        $this->object->setSecondName('Томенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Томенко,Томенко,Томенко,Томенко,Томенко,Томенко,Томенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname414()
    {
        $this->object->setSecondName('Тулуб');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тулуб,Тулуб,Тулуб,Тулуб,Тулуб,Тулуб,Тулуб'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname415()
    {
        $this->object->setSecondName('Удовенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Удовенко,Удовенко,Удовенко,Удовенко,Удовенко,Удовенко,Удовенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname416()
    {
        $this->object->setSecondName('Удовиченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Удовиченко,Удовиченко,Удовиченко,Удовиченко,Удовиченко,Удовиченко,Удовиченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname417()
    {
        $this->object->setSecondName('Усенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Усенко,Усенко,Усенко,Усенко,Усенко,Усенко,Усенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname418()
    {
        $this->object->setSecondName('Філоненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Філоненко,Філоненко,Філоненко,Філоненко,Філоненко,Філоненко,Філоненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname419()
    {
        $this->object->setSecondName('Феденко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феденко,Феденко,Феденко,Феденко,Феденко,Феденко,Феденко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname420()
    {
        $this->object->setSecondName('Федоренко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федоренко,Федоренко,Федоренко,Федоренко,Федоренко,Федоренко,Федоренко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname421()
    {
        $this->object->setSecondName('Федорук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федорук,Федорук,Федорук,Федорук,Федорук,Федорук,Федорук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname422()
    {
        $this->object->setSecondName('Фещенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фещенко,Фещенко,Фещенко,Фещенко,Фещенко,Фещенко,Фещенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname423()
    {
        $this->object->setSecondName('Фоменко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фоменко,Фоменко,Фоменко,Фоменко,Фоменко,Фоменко,Фоменко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname424()
    {
        $this->object->setSecondName('Ханенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ханенко,Ханенко,Ханенко,Ханенко,Ханенко,Ханенко,Ханенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname425()
    {
        $this->object->setSecondName('Харчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Харчук,Харчук,Харчук,Харчук,Харчук,Харчук,Харчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname426()
    {
        $this->object->setSecondName('Хміляр');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хміляр,Хміляр,Хміляр,Хміляр,Хміляр,Хміляр,Хміляр'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname427()
    {
        $this->object->setSecondName('Хмара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хмара,Хмари,Хмарі,Хмару,Хмарою,Хмарі,Хмаро'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname428()
    {
        $this->object->setSecondName('Холодовська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Холодовська,Холодовської,Холодовській,Холодовську,Холодовською,Холодовській,Холодовсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname429()
    {
        $this->object->setSecondName('Хоменко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хоменко,Хоменко,Хоменко,Хоменко,Хоменко,Хоменко,Хоменко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname430()
    {
        $this->object->setSecondName('Царук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Царук,Царук,Царук,Царук,Царук,Царук,Царук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname431()
    {
        $this->object->setSecondName('Цибуленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Цибуленко,Цибуленко,Цибуленко,Цибуленко,Цибуленко,Цибуленко,Цибуленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname432()
    {
        $this->object->setSecondName('Цюпа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Цюпа,Цюпи,Цюпі,Цюпу,Цюпою,Цюпі,Цюпо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname433()
    {
        $this->object->setSecondName('Чабаненко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чабаненко,Чабаненко,Чабаненко,Чабаненко,Чабаненко,Чабаненко,Чабаненко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname434()
    {
        $this->object->setSecondName('Чередниченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чередниченко,Чередниченко,Чередниченко,Чередниченко,Чередниченко,Чередниченко,Чередниченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname435()
    {
        $this->object->setSecondName('Чернявська');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чернявська,Чернявської,Чернявській,Чернявську,Чернявською,Чернявській,Чернявсько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname436()
    {
        $this->object->setSecondName('Чорна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чорна,Чорної,Чорній,Чорну,Чорною,Чорній,Чорно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname437()
    {
        $this->object->setSecondName('Чорновіл');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чорновіл,Чорновіл,Чорновіл,Чорновіл,Чорновіл,Чорновіл,Чорновіл'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname438()
    {
        $this->object->setSecondName('Чуйкевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чуйкевич,Чуйкевич,Чуйкевич,Чуйкевич,Чуйкевич,Чуйкевич,Чуйкевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname439()
    {
        $this->object->setSecondName('Чумак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чумак,Чумак,Чумак,Чумак,Чумак,Чумак,Чумак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname440()
    {
        $this->object->setSecondName('Чумаченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чумаченко,Чумаченко,Чумаченко,Чумаченко,Чумаченко,Чумаченко,Чумаченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname441()
    {
        $this->object->setSecondName('Шахрай');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шахрай,Шахрай,Шахрай,Шахрай,Шахрай,Шахрай,Шахрай'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname442()
    {
        $this->object->setSecondName('Шевченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шевченко,Шевченко,Шевченко,Шевченко,Шевченко,Шевченко,Шевченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname443()
    {
        $this->object->setSecondName('Шевчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шевчук,Шевчук,Шевчук,Шевчук,Шевчук,Шевчук,Шевчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname444()
    {
        $this->object->setSecondName('Шелест');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шелест,Шелест,Шелест,Шелест,Шелест,Шелест,Шелест'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname445()
    {
        $this->object->setSecondName('Шинкарук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шинкарук,Шинкарук,Шинкарук,Шинкарук,Шинкарук,Шинкарук,Шинкарук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname446()
    {
        $this->object->setSecondName('Шкрібляк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шкрібляк,Шкрібляк,Шкрібляк,Шкрібляк,Шкрібляк,Шкрібляк,Шкрібляк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname447()
    {
        $this->object->setSecondName('Шнайдер');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шнайдер,Шнайдер,Шнайдер,Шнайдер,Шнайдер,Шнайдер,Шнайдер'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname448()
    {
        $this->object->setSecondName('Шовкопляс');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шовкопляс,Шовкопляс,Шовкопляс,Шовкопляс,Шовкопляс,Шовкопляс,Шовкопляс'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname449()
    {
        $this->object->setSecondName('Шульга');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шульга,Шульги,Шульзі,Шульгу,Шульгою,Шульзі,Шульго'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname450()
    {
        $this->object->setSecondName('Шухевич');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шухевич,Шухевич,Шухевич,Шухевич,Шухевич,Шухевич,Шухевич'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname451()
    {
        $this->object->setSecondName('Щерба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щерба,Щерби,Щербі,Щербу,Щербою,Щербі,Щербо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname452()
    {
        $this->object->setSecondName('Щербак');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щербак,Щербак,Щербак,Щербак,Щербак,Щербак,Щербак'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname453()
    {
        $this->object->setSecondName('Щербань');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щербань,Щербань,Щербань,Щербань,Щербань,Щербань,Щербань'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname454()
    {
        $this->object->setSecondName('Юрженко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрженко,Юрженко,Юрженко,Юрженко,Юрженко,Юрженко,Юрженко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname455()
    {
        $this->object->setSecondName('Юрченко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юрченко,Юрченко,Юрченко,Юрченко,Юрченко,Юрченко,Юрченко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname456()
    {
        $this->object->setSecondName('Юхименко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юхименко,Юхименко,Юхименко,Юхименко,Юхименко,Юхименко,Юхименко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname457()
    {
        $this->object->setSecondName('Ющенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ющенко,Ющенко,Ющенко,Ющенко,Ющенко,Ющенко,Ющенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname458()
    {
        $this->object->setSecondName('Яковенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковенко,Яковенко,Яковенко,Яковенко,Яковенко,Яковенко,Яковенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname459()
    {
        $this->object->setSecondName('Яковина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковина,Яковиної,Яковиній,Яковину,Яковиною,Яковиній,Яковино'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname460()
    {
        $this->object->setSecondName('Янко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Янко,Янко,Янко,Янко,Янко,Янко,Янко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname461()
    {
        $this->object->setSecondName('Ярема');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярема,Яреми,Яремі,Ярему,Яремою,Яремі,Яремо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname462()
    {
        $this->object->setSecondName('Яременко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яременко,Яременко,Яременко,Яременко,Яременко,Яременко,Яременко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname463()
    {
        $this->object->setSecondName('Яремко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яремко,Яремко,Яремко,Яремко,Яремко,Яремко,Яремко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname464()
    {
        $this->object->setSecondName('Яремчук');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яремчук,Яремчук,Яремчук,Яремчук,Яремчук,Яремчук,Яремчук'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname465()
    {
        $this->object->setSecondName('Ярмоленко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярмоленко,Ярмоленко,Ярмоленко,Ярмоленко,Ярмоленко,Ярмоленко,Ярмоленко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname466()
    {
        $this->object->setSecondName('Ярмолюк');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярмолюк,Ярмолюк,Ярмолюк,Ярмолюк,Ярмолюк,Ярмолюк,Ярмолюк'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname467()
    {
        $this->object->setSecondName('Ярошенко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярошенко,Ярошенко,Ярошенко,Ярошенко,Ярошенко,Ярошенко,Ярошенко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname468()
    {
        $this->object->setSecondName('Яценко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яценко,Яценко,Яценко,Яценко,Яценко,Яценко,Яценко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname469()
    {
        $this->object->setSecondName('Ященко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ященко,Ященко,Ященко,Ященко,Ященко,Ященко,Ященко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname470()
    {
        $this->object->setSecondName('Ґалаґан');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ґалаґан,Ґалаґан,Ґалаґан,Ґалаґан,Ґалаґан,Ґалаґан,Ґалаґан'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname471()
    {
        $this->object->setSecondName('Євсєєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Євсєєва,Євсєєвої,Євсєєвій,Євсєєву,Євсєєвою,Євсєєвій,Євсєєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname472()
    {
        $this->object->setSecondName('Єгорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єгорова,Єгорової,Єгоровій,Єгорову,Єгоровою,Єгоровій,Єгорово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname473()
    {
        $this->object->setSecondName('Єлізарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єлізарова,Єлізарової,Єлізаровій,Єлізарову,Єлізаровою,Єлізаровій,Єлізарово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname474()
    {
        $this->object->setSecondName('Єрмилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єрмилова,Єрмилової,Єрмиловій,Єрмилову,Єрмиловою,Єрмиловій,Єрмилово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname475()
    {
        $this->object->setSecondName('Єрофєєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єрофєєва,Єрофєєвої,Єрофєєвій,Єрофєєву,Єрофєєвою,Єрофєєвій,Єрофєєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname476()
    {
        $this->object->setSecondName('Єршова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єршова,Єршової,Єршовій,Єршову,Єршовою,Єршовій,Єршово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname477()
    {
        $this->object->setSecondName('Єфімова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єфімова,Єфімової,Єфімовій,Єфімову,Єфімовою,Єфімовій,Єфімово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname478()
    {
        $this->object->setSecondName('Єфремова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Єфремова,Єфремової,Єфремовій,Єфремову,Єфремовою,Єфремовій,Єфремово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname479()
    {
        $this->object->setSecondName('Іванова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іванова,Іванової,Івановій,Іванову,Івановою,Івановій,Іваново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname480()
    {
        $this->object->setSecondName('Ігнатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ігнатова,Ігнатової,Ігнатовій,Ігнатову,Ігнатовою,Ігнатовій,Ігнатово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname481()
    {
        $this->object->setSecondName('Іллюшина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Іллюшина,Іллюшиної,Іллюшиній,Іллюшину,Іллюшиною,Іллюшиній,Іллюшино'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname482()
    {
        $this->object->setSecondName('Ільїна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ільїна,Ільїни,Ільїні,Ільїну,Ільїною,Ільїні,Ільїно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname483()
    {
        $this->object->setSecondName('Аєдоницька');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аєдоницька,Аєдоницької,Аєдоницькій,Аєдоницьку,Аєдоницькою,Аєдоницькій,Аєдоницько'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname484()
    {
        $this->object->setSecondName('Абатурова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Абатурова,Абатурової,Абатуровій,Абатурову,Абатуровою,Абатуровій,Абатурово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname485()
    {
        $this->object->setSecondName('Абдулова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Абдулова,Абдулової,Абдуловій,Абдулову,Абдуловою,Абдуловій,Абдулово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname486()
    {
        $this->object->setSecondName('Абрамова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Абрамова,Абрамової,Абрамовій,Абрамову,Абрамовою,Абрамовій,Абрамово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname487()
    {
        $this->object->setSecondName('Авілова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авілова,Авілової,Авіловій,Авілову,Авіловою,Авіловій,Авілово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname488()
    {
        $this->object->setSecondName('Авдєєнко');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдєєнко,Авдєєнко,Авдєєнко,Авдєєнко,Авдєєнко,Авдєєнко,Авдєєнко'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname489()
    {
        $this->object->setSecondName('Аврамова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аврамова,Аврамової,Аврамовій,Аврамову,Аврамовою,Аврамовій,Аврамово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname490()
    {
        $this->object->setSecondName('Алексєєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алексєєва,Алексєєвої,Алексєєвій,Алексєєву,Алексєєвою,Алексєєвій,Алексєєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname491()
    {
        $this->object->setSecondName('Александрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александрова,Александрової,Александровій,Александрову,Александровою,Александровій,Александрово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname492()
    {
        $this->object->setSecondName('Альошина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альошина,Альошиної,Альошиній,Альошину,Альошиною,Альошиній,Альошино'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname493()
    {
        $this->object->setSecondName('Анісімова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анісімова,Анісімової,Анісімовій,Анісімову,Анісімовою,Анісімовій,Анісімово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname494()
    {
        $this->object->setSecondName('Анісова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анісова,Анісової,Анісовій,Анісову,Анісовою,Анісовій,Анісово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname495()
    {
        $this->object->setSecondName('Ананьєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ананьєва,Ананьєвої,Ананьєвій,Ананьєву,Ананьєвою,Ананьєвій,Ананьєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname496()
    {
        $this->object->setSecondName('Андріанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андріанова,Андріанової,Андріановій,Андріанову,Андріановою,Андріановій,Андріаново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname497()
    {
        $this->object->setSecondName('Андріяшева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андріяшева,Андріяшевої,Андріяшевій,Андріяшеву,Андріяшевою,Андріяшевій,Андріяшево'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname498()
    {
        $this->object->setSecondName('Андреєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Андреєва,Андреєвої,Андреєвій,Андреєву,Андреєвою,Андреєвій,Андреєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname499()
    {
        $this->object->setSecondName('Антипова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антипова,Антипової,Антиповій,Антипову,Антиповою,Антиповій,Антипово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname500()
    {
        $this->object->setSecondName('Антонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антонова,Антонової,Антоновій,Антонову,Антоновою,Антоновій,Антоново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname501()
    {
        $this->object->setSecondName('Анциферова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анциферова,Анциферової,Анциферовій,Анциферову,Анциферовою,Анциферовій,Анциферово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname502()
    {
        $this->object->setSecondName('Апухтіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Апухтіна,Апухтіни,Апухтіні,Апухтіну,Апухтіною,Апухтіні,Апухтіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname503()
    {
        $this->object->setSecondName('Арбузова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Арбузова,Арбузової,Арбузовій,Арбузову,Арбузовою,Арбузовій,Арбузово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname504()
    {
        $this->object->setSecondName('Аржанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аржанова,Аржанової,Аржановій,Аржанову,Аржановою,Аржановій,Аржаново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname505()
    {
        $this->object->setSecondName('Архипова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Архипова,Архипової,Архиповій,Архипову,Архиповою,Архиповій,Архипово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname506()
    {
        $this->object->setSecondName('Арцибушева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Арцибушева,Арцибушевої,Арцибушевій,Арцибушеву,Арцибушевою,Арцибушевій,Арцибушево'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname507()
    {
        $this->object->setSecondName('Астраханцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Астраханцева,Астраханцевої,Астраханцевій,Астраханцеву,Астраханцевою,Астраханцевій,Астраханцево'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname508()
    {
        $this->object->setSecondName('Афіногенова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Афіногенова,Афіногенової,Афіногеновій,Афіногенову,Афіногеновою,Афіногеновій,Афіногеново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname509()
    {
        $this->object->setSecondName('Афанасьєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Афанасьєва,Афанасьєвої,Афанасьєвій,Афанасьєву,Афанасьєвою,Афанасьєвій,Афанасьєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname510()
    {
        $this->object->setSecondName('Бєлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бєлова,Бєлової,Бєловій,Бєлову,Бєловою,Бєловій,Бєлово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname511()
    {
        $this->object->setSecondName('Бєлоглазова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бєлоглазова,Бєлоглазової,Бєлоглазовій,Бєлоглазову,Бєлоглазовою,Бєлоглазовій,Бєлоглазово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname512()
    {
        $this->object->setSecondName('Бєлоусова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бєлоусова,Бєлоусової,Бєлоусовій,Бєлоусову,Бєлоусовою,Бєлоусовій,Бєлоусово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname513()
    {
        $this->object->setSecondName('Бєляєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бєляєва,Бєляєвої,Бєляєвій,Бєляєву,Бєляєвою,Бєляєвій,Бєляєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname514()
    {
        $this->object->setSecondName('Бібикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бібикова,Бібикової,Бібиковій,Бібикову,Бібиковою,Бібиковій,Бібиково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname515()
    {
        $this->object->setSecondName('Бажанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бажанова,Бажанової,Бажановій,Бажанову,Бажановою,Бажановій,Бажаново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname516()
    {
        $this->object->setSecondName('Баранова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баранова,Баранової,Барановій,Баранову,Барановою,Барановій,Бараново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname517()
    {
        $this->object->setSecondName('Баришнікова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Баришнікова,Баришнікової,Баришніковій,Баришнікову,Баришніковою,Баришніковій,Баришніково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname518()
    {
        $this->object->setSecondName('Барсова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Барсова,Барсової,Барсовій,Барсову,Барсовою,Барсовій,Барсово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname519()
    {
        $this->object->setSecondName('Батюшкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Батюшкова,Батюшкової,Батюшковій,Батюшкову,Батюшковою,Батюшковій,Батюшково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname520()
    {
        $this->object->setSecondName('Бикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бикова,Бикової,Биковій,Бикову,Биковою,Биковій,Биково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname521()
    {
        $this->object->setSecondName('Блохіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Блохіна,Блохіни,Блохіні,Блохіну,Блохіною,Блохіні,Блохіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname522()
    {
        $this->object->setSecondName('Боброва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Боброва,Бобрової,Бобровій,Боброву,Бобровою,Бобровій,Боброво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname523()
    {
        $this->object->setSecondName('Богданова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богданова,Богданової,Богдановій,Богданову,Богдановою,Богдановій,Богданово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname524()
    {
        $this->object->setSecondName('Богомазова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Богомазова,Богомазової,Богомазовій,Богомазову,Богомазовою,Богомазовій,Богомазово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname525()
    {
        $this->object->setSecondName('Бойкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бойкова,Бойкової,Бойковій,Бойкову,Бойковою,Бойковій,Бойково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname526()
    {
        $this->object->setSecondName('Большакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Большакова,Большакової,Большаковій,Большакову,Большаковою,Большаковій,Большаково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname527()
    {
        $this->object->setSecondName('Борисова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Борисова,Борисової,Борисовій,Борисову,Борисовою,Борисовій,Борисово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname528()
    {
        $this->object->setSecondName('Бочкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бочкова,Бочкової,Бочковій,Бочкову,Бочковою,Бочковій,Бочково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname529()
    {
        $this->object->setSecondName('Бризгалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бризгалова,Бризгалової,Бризгаловій,Бризгалову,Бризгаловою,Бризгаловій,Бризгалово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname530()
    {
        $this->object->setSecondName('Брусилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Брусилова,Брусилової,Брусиловій,Брусилову,Брусиловою,Брусиловій,Брусилово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname531()
    {
        $this->object->setSecondName('Бутурліна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бутурліна,Бутурліни,Бутурліні,Бутурліну,Бутурліною,Бутурліні,Бутурліно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname532()
    {
        $this->object->setSecondName('Бутусова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Бутусова,Бутусової,Бутусовій,Бутусову,Бутусовою,Бутусовій,Бутусово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname533()
    {
        $this->object->setSecondName('Варламова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Варламова,Варламової,Варламовій,Варламову,Варламовою,Варламовій,Варламово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname534()
    {
        $this->object->setSecondName('Васильєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Васильєва,Васильєвої,Васильєвій,Васильєву,Васильєвою,Васильєвій,Васильєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname535()
    {
        $this->object->setSecondName('Виноградова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виноградова,Виноградової,Виноградовій,Виноградову,Виноградовою,Виноградовій,Виноградово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname536()
    {
        $this->object->setSecondName('Власова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Власова,Власової,Власовій,Власову,Власовою,Власовій,Власово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname537()
    {
        $this->object->setSecondName('Внукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Внукова,Внукової,Внуковій,Внукову,Внуковою,Внуковій,Внуково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname538()
    {
        $this->object->setSecondName('Волкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Волкова,Волкової,Волковій,Волкову,Волковою,Волковій,Волково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname539()
    {
        $this->object->setSecondName('Воробей');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воробей,Воробей,Воробей,Воробей,Воробей,Воробей,Воробей'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname540()
    {
        $this->object->setSecondName('Воробйова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воробйова,Воробйової,Воробйовій,Воробйову,Воробйовою,Воробйовій,Воробйово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname541()
    {
        $this->object->setSecondName('Вороніна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вороніна,Вороніни,Вороніні,Вороніну,Вороніною,Вороніні,Вороніно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname542()
    {
        $this->object->setSecondName('Воронцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Воронцова,Воронцової,Воронцовій,Воронцову,Воронцовою,Воронцовій,Воронцово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname543()
    {
        $this->object->setSecondName('Ворошилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ворошилова,Ворошилової,Ворошиловій,Ворошилову,Ворошиловою,Ворошиловій,Ворошилово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname544()
    {
        $this->object->setSecondName('Гаврилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гаврилова,Гаврилової,Гавриловій,Гаврилову,Гавриловою,Гавриловій,Гаврилово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname545()
    {
        $this->object->setSecondName('Герасимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Герасимова,Герасимової,Герасимовій,Герасимову,Герасимовою,Герасимовій,Герасимово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname546()
    {
        $this->object->setSecondName('Гончарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гончарова,Гончарової,Гончаровій,Гончарову,Гончаровою,Гончаровій,Гончарово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname547()
    {
        $this->object->setSecondName('Горбунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горбунова,Горбунової,Горбуновій,Горбунову,Горбуновою,Горбуновій,Горбуново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname548()
    {
        $this->object->setSecondName('Горчакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горчакова,Горчакової,Горчаковій,Горчакову,Горчаковою,Горчаковій,Горчаково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname549()
    {
        $this->object->setSecondName('Горшкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Горшкова,Горшкової,Горшковій,Горшкову,Горшковою,Горшковій,Горшково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname550()
    {
        $this->object->setSecondName('Громова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Громова,Громової,Громовій,Громову,Громовою,Громовій,Громово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname551()
    {
        $this->object->setSecondName('Гусєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Гусєва,Гусєвої,Гусєвій,Гусєву,Гусєвою,Гусєвій,Гусєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname552()
    {
        $this->object->setSecondName('Давидова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Давидова,Давидової,Давидовій,Давидову,Давидовою,Давидовій,Давидово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname553()
    {
        $this->object->setSecondName('Данилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Данилова,Данилової,Даниловій,Данилову,Даниловою,Даниловій,Данилово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname554()
    {
        $this->object->setSecondName('Дарагана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарагана,Дарагани,Дарагані,Дарагану,Дараганою,Дарагані,Дарагано'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname555()
    {
        $this->object->setSecondName('Дементьєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дементьєва,Дементьєвої,Дементьєвій,Дементьєву,Дементьєвою,Дементьєвій,Дементьєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname556()
    {
        $this->object->setSecondName('Денисова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Денисова,Денисової,Денисовій,Денисову,Денисовою,Денисовій,Денисово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname557()
    {
        $this->object->setSecondName('Дмитрієва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дмитрієва,Дмитрієвої,Дмитрієвій,Дмитрієву,Дмитрієвою,Дмитрієвій,Дмитрієво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname558()
    {
        $this->object->setSecondName('Добролюбова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Добролюбова,Добролюбової,Добролюбовій,Добролюбову,Добролюбовою,Добролюбовій,Добролюбово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname559()
    {
        $this->object->setSecondName('Донськая');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Донськая,Донської,Донській,Донськую,Донською,Донській,Донськая'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname560()
    {
        $this->object->setSecondName('Дорофєєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дорофєєва,Дорофєєвої,Дорофєєвій,Дорофєєву,Дорофєєвою,Дорофєєвій,Дорофєєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname561()
    {
        $this->object->setSecondName('Дуброва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дуброва,Дубрової,Дубровій,Дуброву,Дубровою,Дубровій,Дуброво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname562()
    {
        $this->object->setSecondName('Железнякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Железнякова,Железнякової,Железняковій,Железнякову,Железняковою,Железняковій,Железняково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname563()
    {
        $this->object->setSecondName('Жердєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жердєва,Жердєвої,Жердєвій,Жердєву,Жердєвою,Жердєвій,Жердєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname564()
    {
        $this->object->setSecondName('Жукова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жукова,Жукової,Жуковій,Жукову,Жуковою,Жуковій,Жуково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname565()
    {
        $this->object->setSecondName('Журавльова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Журавльова,Журавльової,Журавльовій,Журавльову,Журавльовою,Журавльовій,Журавльово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname566()
    {
        $this->object->setSecondName('Заварова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Заварова,Заварової,Заваровій,Заварову,Заваровою,Заваровій,Заварово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname567()
    {
        $this->object->setSecondName('Загарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Загарова,Загарової,Загаровій,Загарову,Загаровою,Загаровій,Загарово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname568()
    {
        $this->object->setSecondName('Зайцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зайцева,Зайцевої,Зайцевій,Зайцеву,Зайцевою,Зайцевій,Зайцево'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname569()
    {
        $this->object->setSecondName('Захарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Захарова,Захарової,Захаровій,Захарову,Захаровою,Захаровій,Захарово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname570()
    {
        $this->object->setSecondName('Звєрєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Звєрєва,Звєрєвої,Звєрєвій,Звєрєву,Звєрєвою,Звєрєвій,Звєрєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname571()
    {
        $this->object->setSecondName('Зерова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зерова,Зерової,Зеровій,Зерову,Зеровою,Зеровій,Зерово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname572()
    {
        $this->object->setSecondName('Золотухіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Золотухіна,Золотухіни,Золотухіні,Золотухіну,Золотухіною,Золотухіні,Золотухіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname573()
    {
        $this->object->setSecondName('Зубова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зубова,Зубової,Зубовій,Зубову,Зубовою,Зубовій,Зубово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname574()
    {
        $this->object->setSecondName('Казакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Казакова,Казакової,Казаковій,Казакову,Казаковою,Казаковій,Казаково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname575()
    {
        $this->object->setSecondName('Калініна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Калініна,Калініни,Калініні,Калініну,Калініною,Калініні,Калініно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname576()
    {
        $this->object->setSecondName('Калашникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Калашникова,Калашникової,Калашниковій,Калашникову,Калашниковою,Калашниковій,Калашниково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname577()
    {
        $this->object->setSecondName('Карпова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карпова,Карпової,Карповій,Карпову,Карповою,Карповій,Карпово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname578()
    {
        $this->object->setSecondName('Каштанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каштанова,Каштанової,Каштановій,Каштанову,Каштановою,Каштановій,Каштаново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname579()
    {
        $this->object->setSecondName('Кисельова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кисельова,Кисельової,Кисельовій,Кисельову,Кисельовою,Кисельовій,Кисельово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname580()
    {
        $this->object->setSecondName('Ковальова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ковальова,Ковальової,Ковальовій,Ковальову,Ковальовою,Ковальовій,Ковальово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname581()
    {
        $this->object->setSecondName('Кожевникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кожевникова,Кожевникової,Кожевниковій,Кожевникову,Кожевниковою,Кожевниковій,Кожевниково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname582()
    {
        $this->object->setSecondName('Козлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Козлова,Козлової,Козловій,Козлову,Козловою,Козловій,Козлово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname583()
    {
        $this->object->setSecondName('Колесникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Колесникова,Колесникової,Колесниковій,Колесникову,Колесниковою,Колесниковій,Колесниково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname584()
    {
        $this->object->setSecondName('Кольцова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кольцова,Кольцової,Кольцовій,Кольцову,Кольцовою,Кольцовій,Кольцово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname585()
    {
        $this->object->setSecondName('Комарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Комарова,Комарової,Комаровій,Комарову,Комаровою,Комаровій,Комарово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname586()
    {
        $this->object->setSecondName('Коновалова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коновалова,Коновалової,Коноваловій,Коновалову,Коноваловою,Коноваловій,Коновалово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname587()
    {
        $this->object->setSecondName('Конюхова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Конюхова,Конюхової,Конюховій,Конюхову,Конюховою,Конюховій,Конюхово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname588()
    {
        $this->object->setSecondName('Копилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Копилова,Копилової,Копиловій,Копилову,Копиловою,Копиловій,Копилово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname589()
    {
        $this->object->setSecondName('Кормильцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кормильцева,Кормильцевої,Кормильцевій,Кормильцеву,Кормильцевою,Кормильцевій,Кормильцево'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname590()
    {
        $this->object->setSecondName('Коробова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коробова,Коробової,Коробовій,Коробову,Коробовою,Коробовій,Коробово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname591()
    {
        $this->object->setSecondName('Коровкіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Коровкіна,Коровкіни,Коровкіні,Коровкіну,Коровкіною,Коровкіні,Коровкіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname592()
    {
        $this->object->setSecondName('Корольова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корольова,Корольової,Корольовій,Корольову,Корольовою,Корольовій,Корольово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname593()
    {
        $this->object->setSecondName('Котова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Котова,Котової,Котовій,Котову,Котовою,Котовій,Котово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname594()
    {
        $this->object->setSecondName('Краснова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Краснова,Краснової,Красновій,Краснову,Красновою,Красновій,Красново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname595()
    {
        $this->object->setSecondName('Крилова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Крилова,Крилової,Криловій,Крилову,Криловою,Криловій,Крилово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname596()
    {
        $this->object->setSecondName('Кримова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кримова,Кримової,Кримовій,Кримову,Кримовою,Кримовій,Кримово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname597()
    {
        $this->object->setSecondName('Крюкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Крюкова,Крюкової,Крюковій,Крюкову,Крюковою,Крюковій,Крюково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname598()
    {
        $this->object->setSecondName('Кудряшова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кудряшова,Кудряшової,Кудряшовій,Кудряшову,Кудряшовою,Кудряшовій,Кудряшово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname599()
    {
        $this->object->setSecondName('Кузнецова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кузнецова,Кузнецової,Кузнецовій,Кузнецову,Кузнецовою,Кузнецовій,Кузнецово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname600()
    {
        $this->object->setSecondName('Кузьміна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кузьміна,Кузьміни,Кузьміні,Кузьміну,Кузьміною,Кузьміні,Кузьміно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname601()
    {
        $this->object->setSecondName('Кулакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кулакова,Кулакової,Кулаковій,Кулакову,Кулаковою,Кулаковій,Кулаково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname602()
    {
        $this->object->setSecondName('Куликова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Куликова,Куликової,Куликовій,Куликову,Куликовою,Куликовій,Куликово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname603()
    {
        $this->object->setSecondName('Куркова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Куркова,Куркової,Курковій,Куркову,Курковою,Курковій,Курково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname604()
    {
        $this->object->setSecondName('Курочкіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Курочкіна,Курочкіни,Курочкіні,Курочкіну,Курочкіною,Курочкіні,Курочкіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname605()
    {
        $this->object->setSecondName('Лєскова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лєскова,Лєскової,Лєсковій,Лєскову,Лєсковою,Лєсковій,Лєсково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname606()
    {
        $this->object->setSecondName('Лідова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лідова,Лідової,Лідовій,Лідову,Лідовою,Лідовій,Лідово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname607()
    {
        $this->object->setSecondName('Ладигіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ладигіна,Ладигіни,Ладигіні,Ладигіну,Ладигіною,Ладигіні,Ладигіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname608()
    {
        $this->object->setSecondName('Лазарєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лазарєва,Лазарєвої,Лазарєвій,Лазарєву,Лазарєвою,Лазарєвій,Лазарєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname609()
    {
        $this->object->setSecondName('Лебедєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лебедєва,Лебедєвої,Лебедєвій,Лебедєву,Лебедєвою,Лебедєвій,Лебедєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname610()
    {
        $this->object->setSecondName('Лихоносова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лихоносова,Лихоносової,Лихоносовій,Лихоносову,Лихоносовою,Лихоносовій,Лихоносово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname611()
    {
        $this->object->setSecondName('Лосєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лосєва,Лосєвої,Лосєвій,Лосєву,Лосєвою,Лосєвій,Лосєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname612()
    {
        $this->object->setSecondName('Львова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Львова,Львової,Львовій,Львову,Львовою,Львовій,Львово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname613()
    {
        $this->object->setSecondName('Любимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любимова,Любимової,Любимовій,Любимову,Любимовою,Любимовій,Любимово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname614()
    {
        $this->object->setSecondName('Мілютіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мілютіна,Мілютіни,Мілютіні,Мілютіну,Мілютіною,Мілютіні,Мілютіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname615()
    {
        $this->object->setSecondName('Макарова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Макарова,Макарової,Макаровій,Макарову,Макаровою,Макаровій,Макарово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname616()
    {
        $this->object->setSecondName('Максимова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Максимова,Максимової,Максимовій,Максимову,Максимовою,Максимовій,Максимово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname617()
    {
        $this->object->setSecondName('Малакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Малакова,Малакової,Малаковій,Малакову,Малаковою,Малаковій,Малаково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname618()
    {
        $this->object->setSecondName('Мамонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мамонова,Мамонової,Мамоновій,Мамонову,Мамоновою,Мамоновій,Мамоново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname619()
    {
        $this->object->setSecondName('Манасеїна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Манасеїна,Манасеїни,Манасеїні,Манасеїну,Манасеїною,Манасеїні,Манасеїно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname620()
    {
        $this->object->setSecondName('Маркова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маркова,Маркової,Марковій,Маркову,Марковою,Марковій,Марково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname621()
    {
        $this->object->setSecondName('Мартенс');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мартенс,Мартенс,Мартенс,Мартенс,Мартенс,Мартенс,Мартенс'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname622()
    {
        $this->object->setSecondName('Мартинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мартинова,Мартинової,Мартиновій,Мартинову,Мартиновою,Мартиновій,Мартиново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname623()
    {
        $this->object->setSecondName('Масленнікова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Масленнікова,Масленнікової,Масленніковій,Масленнікову,Масленніковою,Масленніковій,Масленніково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname624()
    {
        $this->object->setSecondName('Маслова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маслова,Маслової,Масловій,Маслову,Масловою,Масловій,Маслово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname625()
    {
        $this->object->setSecondName('Матвєєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матвєєва,Матвєєвої,Матвєєвій,Матвєєву,Матвєєвою,Матвєєвій,Матвєєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname626()
    {
        $this->object->setSecondName('Медведєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Медведєва,Медведєвої,Медведєвій,Медведєву,Медведєвою,Медведєвій,Медведєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname627()
    {
        $this->object->setSecondName('Мельникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мельникова,Мельникової,Мельниковій,Мельникову,Мельниковою,Мельниковій,Мельниково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname628()
    {
        $this->object->setSecondName('Миронова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Миронова,Миронової,Мироновій,Миронову,Мироновою,Мироновій,Мироново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname629()
    {
        $this->object->setSecondName('Михайлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Михайлова,Михайлової,Михайловій,Михайлову,Михайловою,Михайловій,Михайлово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname630()
    {
        $this->object->setSecondName('Моїсєєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Моїсєєва,Моїсєєвої,Моїсєєвій,Моїсєєву,Моїсєєвою,Моїсєєвій,Моїсєєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname631()
    {
        $this->object->setSecondName('Моргунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Моргунова,Моргунової,Моргуновій,Моргунову,Моргуновою,Моргуновій,Моргуново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname632()
    {
        $this->object->setSecondName('Моркова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Моркова,Моркової,Морковій,Моркову,Морковою,Морковій,Морково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname633()
    {
        $this->object->setSecondName('Морозова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Морозова,Морозової,Морозовій,Морозову,Морозовою,Морозовій,Морозово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname634()
    {
        $this->object->setSecondName('Мухіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мухіна,Мухіни,Мухіні,Мухіну,Мухіною,Мухіні,Мухіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname635()
    {
        $this->object->setSecondName('Нікітіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нікітіна,Нікітіни,Нікітіні,Нікітіну,Нікітіною,Нікітіні,Нікітіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname636()
    {
        $this->object->setSecondName('Ніколаєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ніколаєва,Ніколаєвої,Ніколаєвій,Ніколаєву,Ніколаєвою,Ніколаєвій,Ніколаєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname637()
    {
        $this->object->setSecondName('Нікуліна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нікуліна,Нікуліни,Нікуліні,Нікуліну,Нікуліною,Нікуліні,Нікуліно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname638()
    {
        $this->object->setSecondName('Набокова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Набокова,Набокової,Набоковій,Набокову,Набоковою,Набоковій,Набоково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname639()
    {
        $this->object->setSecondName('Некрасова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Некрасова,Некрасової,Некрасовій,Некрасову,Некрасовою,Некрасовій,Некрасово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname640()
    {
        $this->object->setSecondName('Новикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Новикова,Новикової,Новиковій,Новикову,Новиковою,Новиковій,Новиково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname641()
    {
        $this->object->setSecondName('Орлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Орлова,Орлової,Орловій,Орлову,Орловою,Орловій,Орлово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname642()
    {
        $this->object->setSecondName('Осипова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Осипова,Осипової,Осиповій,Осипову,Осиповою,Осиповій,Осипово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname643()
    {
        $this->object->setSecondName('Павлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлова,Павлової,Павловій,Павлову,Павловою,Павловій,Павлово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname644()
    {
        $this->object->setSecondName('Павлушкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлушкова,Павлушкової,Павлушковій,Павлушкову,Павлушковою,Павлушковій,Павлушково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname645()
    {
        $this->object->setSecondName('Панова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Панова,Панової,Пановій,Панову,Пановою,Пановій,Паново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname646()
    {
        $this->object->setSecondName('Петрова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Петрова,Петрової,Петровій,Петрову,Петровою,Петровій,Петрово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname647()
    {
        $this->object->setSecondName('Пильчикова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пильчикова,Пильчикової,Пильчиковій,Пильчикову,Пильчиковою,Пильчиковій,Пильчиково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname648()
    {
        $this->object->setSecondName('Платонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Платонова,Платонової,Платоновій,Платонову,Платоновою,Платоновій,Платоново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname649()
    {
        $this->object->setSecondName('Плеханова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Плеханова,Плеханової,Плехановій,Плеханову,Плехановою,Плехановій,Плеханово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname650()
    {
        $this->object->setSecondName('Полякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полякова,Полякової,Поляковій,Полякову,Поляковою,Поляковій,Поляково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname651()
    {
        $this->object->setSecondName('Пономарьова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пономарьова,Пономарьової,Пономарьовій,Пономарьову,Пономарьовою,Пономарьовій,Пономарьово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname652()
    {
        $this->object->setSecondName('Попова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Попова,Попової,Поповій,Попову,Поповою,Поповій,Попово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname653()
    {
        $this->object->setSecondName('Пояркова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пояркова,Пояркової,Поярковій,Пояркову,Поярковою,Поярковій,Поярково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname654()
    {
        $this->object->setSecondName('Пригунова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пригунова,Пригунової,Пригуновій,Пригунову,Пригуновою,Пригуновій,Пригуново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname655()
    {
        $this->object->setSecondName('Прошкіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прошкіна,Прошкіни,Прошкіні,Прошкіну,Прошкіною,Прошкіні,Прошкіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname656()
    {
        $this->object->setSecondName('Решетникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Решетникова,Решетникової,Решетниковій,Решетникову,Решетниковою,Решетниковій,Решетниково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname657()
    {
        $this->object->setSecondName('Рожкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рожкова,Рожкової,Рожковій,Рожкову,Рожковою,Рожковій,Рожково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname658()
    {
        $this->object->setSecondName('Романова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Романова,Романової,Романовій,Романову,Романовою,Романовій,Романово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname659()
    {
        $this->object->setSecondName('Рябова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рябова,Рябової,Рябовій,Рябову,Рябовою,Рябовій,Рябово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname660()
    {
        $this->object->setSecondName('Сабліна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сабліна,Сабліни,Сабліні,Сабліну,Сабліною,Сабліні,Сабліно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname661()
    {
        $this->object->setSecondName('Савіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Савіна,Савіни,Савіні,Савіну,Савіною,Савіні,Савіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname662()
    {
        $this->object->setSecondName('Сазонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сазонова,Сазонової,Сазоновій,Сазонову,Сазоновою,Сазоновій,Сазоново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname663()
    {
        $this->object->setSecondName('Сальникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сальникова,Сальникової,Сальниковій,Сальникову,Сальниковою,Сальниковій,Сальниково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname664()
    {
        $this->object->setSecondName('Самойлова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Самойлова,Самойлової,Самойловій,Самойлову,Самойловою,Самойловій,Самойлово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname665()
    {
        $this->object->setSecondName('Самсонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Самсонова,Самсонової,Самсоновій,Самсонову,Самсоновою,Самсоновій,Самсоново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname666()
    {
        $this->object->setSecondName('Сбітнєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сбітнєва,Сбітнєвої,Сбітнєвій,Сбітнєву,Сбітнєвою,Сбітнєвій,Сбітнєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname667()
    {
        $this->object->setSecondName('Свиридова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Свиридова,Свиридової,Свиридовій,Свиридову,Свиридовою,Свиридовій,Свиридово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname668()
    {
        $this->object->setSecondName('Селезньова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Селезньова,Селезньової,Селезньовій,Селезньову,Селезньовою,Селезньовій,Селезньово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname669()
    {
        $this->object->setSecondName('Семенова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Семенова,Семенової,Семеновій,Семенову,Семеновою,Семеновій,Семеново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname670()
    {
        $this->object->setSecondName('Сербіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сербіна,Сербіни,Сербіні,Сербіну,Сербіною,Сербіні,Сербіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname671()
    {
        $this->object->setSecondName('Сергєєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сергєєва,Сергєєвої,Сергєєвій,Сергєєву,Сергєєвою,Сергєєвій,Сергєєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname672()
    {
        $this->object->setSecondName('Сибірякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сибірякова,Сибірякової,Сибіряковій,Сибірякову,Сибіряковою,Сибіряковій,Сибіряково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname673()
    {
        $this->object->setSecondName('Сидорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сидорова,Сидорової,Сидоровій,Сидорову,Сидоровою,Сидоровій,Сидорово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname674()
    {
        $this->object->setSecondName('Симонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Симонова,Симонової,Симоновій,Симонову,Симоновою,Симоновій,Симоново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname675()
    {
        $this->object->setSecondName('Синельникова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Синельникова,Синельникової,Синельниковій,Синельникову,Синельниковою,Синельниковій,Синельниково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname676()
    {
        $this->object->setSecondName('Скобелева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скобелева,Скобелевої,Скобелевій,Скобелеву,Скобелевою,Скобелевій,Скобелево'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname677()
    {
        $this->object->setSecondName('Скобліна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Скобліна,Скобліни,Скобліні,Скобліну,Скобліною,Скобліні,Скобліно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname678()
    {
        $this->object->setSecondName('Смирнова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Смирнова,Смирнової,Смирновій,Смирнову,Смирновою,Смирновій,Смирново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname679()
    {
        $this->object->setSecondName('Снєгірьова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Снєгірьова,Снєгірьової,Снєгірьовій,Снєгірьову,Снєгірьовою,Снєгірьовій,Снєгірьово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname680()
    {
        $this->object->setSecondName('Соболєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соболєва,Соболєвої,Соболєвій,Соболєву,Соболєвою,Соболєвій,Соболєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname681()
    {
        $this->object->setSecondName('Соколова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соколова,Соколової,Соколовій,Соколову,Соколовою,Соколовій,Соколово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname682()
    {
        $this->object->setSecondName('Солнцева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Солнцева,Солнцевої,Солнцевій,Солнцеву,Солнцевою,Солнцевій,Солнцево'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname683()
    {
        $this->object->setSecondName('Соловйова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Соловйова,Соловйової,Соловйовій,Соловйову,Соловйовою,Соловйовій,Соловйово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname684()
    {
        $this->object->setSecondName('Сомова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сомова,Сомової,Сомовій,Сомову,Сомовою,Сомовій,Сомово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname685()
    {
        $this->object->setSecondName('Сорокіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сорокіна,Сорокіни,Сорокіні,Сорокіну,Сорокіною,Сорокіні,Сорокіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname686()
    {
        $this->object->setSecondName('Стєклова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стєклова,Стєклової,Стєкловій,Стєклову,Стєкловою,Стєкловій,Стєклово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname687()
    {
        $this->object->setSecondName('Старкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Старкова,Старкової,Старковій,Старкову,Старковою,Старковій,Старково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname688()
    {
        $this->object->setSecondName('Степанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанова,Степанової,Степановій,Степанову,Степановою,Степановій,Степаново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname689()
    {
        $this->object->setSecondName('Табакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Табакова,Табакової,Табаковій,Табакову,Табаковою,Табаковій,Табаково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname690()
    {
        $this->object->setSecondName('Тарасова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тарасова,Тарасової,Тарасовій,Тарасову,Тарасовою,Тарасовій,Тарасово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname691()
    {
        $this->object->setSecondName('Терентьєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Терентьєва,Терентьєвої,Терентьєвій,Терентьєву,Терентьєвою,Терентьєвій,Терентьєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname692()
    {
        $this->object->setSecondName('Тимофєєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тимофєєва,Тимофєєвої,Тимофєєвій,Тимофєєву,Тимофєєвою,Тимофєєвій,Тимофєєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname693()
    {
        $this->object->setSecondName('Титова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Титова,Титової,Титовій,Титову,Титовою,Титовій,Титово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname694()
    {
        $this->object->setSecondName('Тихомирова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тихомирова,Тихомирової,Тихомировій,Тихомирову,Тихомировою,Тихомировій,Тихомирово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname695()
    {
        $this->object->setSecondName('Тихонова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тихонова,Тихонової,Тихоновій,Тихонову,Тихоновою,Тихоновій,Тихоново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname696()
    {
        $this->object->setSecondName('Тюленєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тюленєва,Тюленєвої,Тюленєвій,Тюленєву,Тюленєвою,Тюленєвій,Тюленєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname697()
    {
        $this->object->setSecondName('Уварова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Уварова,Уварової,Уваровій,Уварову,Уваровою,Уваровій,Уварово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname698()
    {
        $this->object->setSecondName('Усова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Усова,Усової,Усовій,Усову,Усовою,Усовій,Усово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname699()
    {
        $this->object->setSecondName('Устинова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Устинова,Устинової,Устиновій,Устинову,Устиновою,Устиновій,Устиново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname700()
    {
        $this->object->setSecondName('Філіппова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Філіппова,Філіппової,Філіпповій,Філіппову,Філіпповою,Філіпповій,Філіппово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname701()
    {
        $this->object->setSecondName('Філатова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Філатова,Філатової,Філатовій,Філатову,Філатовою,Філатовій,Філатово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname702()
    {
        $this->object->setSecondName('Федорова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Федорова,Федорової,Федоровій,Федорову,Федоровою,Федоровій,Федорово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname703()
    {
        $this->object->setSecondName('Фоміна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фоміна,Фоміни,Фоміні,Фоміну,Фоміною,Фоміні,Фоміно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname704()
    {
        $this->object->setSecondName('Фролова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фролова,Фролової,Фроловій,Фролову,Фроловою,Фроловій,Фролово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname705()
    {
        $this->object->setSecondName('Хілкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хілкова,Хілкової,Хілковій,Хілкову,Хілковою,Хілковій,Хілково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname706()
    {
        $this->object->setSecondName('Хвостова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Хвостова,Хвостової,Хвостовій,Хвостову,Хвостовою,Хвостовій,Хвостово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname707()
    {
        $this->object->setSecondName('Худякова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Худякова,Худякової,Худяковій,Худякову,Худяковою,Худяковій,Худяково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname708()
    {
        $this->object->setSecondName('Цвєткова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Цвєткова,Цвєткової,Цвєтковій,Цвєткову,Цвєтковою,Цвєтковій,Цвєтково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname709()
    {
        $this->object->setSecondName('Чанова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чанова,Чанової,Чановій,Чанову,Чановою,Чановій,Чаново'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname710()
    {
        $this->object->setSecondName('Чевкіна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чевкіна,Чевкіни,Чевкіні,Чевкіну,Чевкіною,Чевкіні,Чевкіно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname711()
    {
        $this->object->setSecondName('Черенкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Черенкова,Черенкової,Черенковій,Черенкову,Черенковою,Черенковій,Черенково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname712()
    {
        $this->object->setSecondName('Черепкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Черепкова,Черепкової,Черепковій,Черепкову,Черепковою,Черепковій,Черепково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname713()
    {
        $this->object->setSecondName('Чулкова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Чулкова,Чулкової,Чулковій,Чулкову,Чулковою,Чулковій,Чулково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname714()
    {
        $this->object->setSecondName('Шевельова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шевельова,Шевельової,Шевельовій,Шевельову,Шевельовою,Шевельовій,Шевельово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname715()
    {
        $this->object->setSecondName('Шеліхова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шеліхова,Шеліхової,Шеліховій,Шеліхову,Шеліховою,Шеліховій,Шеліхово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname716()
    {
        $this->object->setSecondName('Шиніна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шиніна,Шиніни,Шиніні,Шиніну,Шиніною,Шиніні,Шиніно'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname717()
    {
        $this->object->setSecondName('Ширяєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ширяєва,Ширяєвої,Ширяєвій,Ширяєву,Ширяєвою,Ширяєвій,Ширяєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname718()
    {
        $this->object->setSecondName('Шишова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шишова,Шишової,Шишовій,Шишову,Шишовою,Шишовій,Шишово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname719()
    {
        $this->object->setSecondName('Шулакова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шулакова,Шулакової,Шулаковій,Шулакову,Шулаковою,Шулаковій,Шулаково'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname720()
    {
        $this->object->setSecondName('Щапова');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щапова,Щапової,Щаповій,Щапову,Щаповою,Щаповій,Щапово'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname721()
    {
        $this->object->setSecondName('Щаслива');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Щаслива,Щасливої,Щасливій,Щасливу,Щасливою,Щасливій,Щасливо'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname722()
    {
        $this->object->setSecondName('Яковлєва');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яковлєва,Яковлєвої,Яковлєвій,Яковлєву,Яковлєвою,Яковлєвій,Яковлєво'), $this->object->getSecondNameCase());
    }
    public function testWomanSirname723()
    {
        $this->object->setSecondName('Яшина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Яшина,Яшиної,Яшиній,Яшину,Яшиною,Яшиній,Яшино'), $this->object->getSecondNameCase());
    }

}