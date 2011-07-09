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
        $this->assertEquals(explode(',','Єрмоленко,Єрмоленка,Єрмоленкові,Єрмоленка,Єрмоленком,Єрмоленкові,Єрмоленче'), $this->object->q('Єрмоленко'));
    }
    public function testCrazy1()
    { 
        $this->assertEquals(explode(',','Єсипенко,Єсипенка,Єсипенкові,Єсипенка,Єсипенком,Єсипенкові,Єсипенче'), $this->object->q('Єсипенко'));
    }
    public function testCrazy2()
    { 
        $this->assertEquals(explode(',','Іванів,Іванова,Івановові,Іванова,Івановом,Івановові,Іванове'), $this->object->q('Іванів'));
    }
    public function testCrazy3()
    { 
        $this->assertEquals(explode(',','Іваненко,Іваненка,Іваненкові,Іваненка,Іваненком,Іваненкові,Іваненче'), $this->object->q('Іваненко'));
    }
    public function testCrazy4()
    { 
        $this->assertEquals(explode(',','Іванченко,Іванченка,Іванченкові,Іванченка,Іванченком,Іванченкові,Іванченче'), $this->object->q('Іванченко'));
    }
    public function testCrazy5()
    { 
        $this->assertEquals(explode(',','Іванчук,Іванчука,Іванчукові,Іванчука,Іванчуком,Іванчукові,Іванчуче'), $this->object->q('Іванчук'));
    }
    public function testCrazy6()
    { 
        $this->assertEquals(explode(',','Іванюк,Іванюка,Іванюкові,Іванюка,Іванюком,Іванюкові,Іванюче'), $this->object->q('Іванюк'));
    }
    public function testCrazy7()
    { 
        $this->assertEquals(explode(',','Івахненко,Івахненка,Івахненкові,Івахненка,Івахненком,Івахненкові,Івахненче'), $this->object->q('Івахненко'));
    }
    public function testCrazy8()
    { 
        $this->assertEquals(explode(',','Івашко,Івашка,Івашкові,Івашка,Івашком,Івашкові,Івашче'), $this->object->q('Івашко'));
    }
    public function testCrazy9()
    { 
        $this->assertEquals(explode(',','Іващенко,Іващенка,Іващенкові,Іващенка,Іващенком,Іващенкові,Іващенче'), $this->object->q('Іващенко'));
    }
    public function testCrazy10()
    { 
        $this->assertEquals(explode(',','Івченко,Івченка,Івченкові,Івченка,Івченком,Івченкові,Івченче'), $this->object->q('Івченко'));
    }
    public function testCrazy11()
    { 
        $this->assertEquals(explode(',','Іллєнко,Іллєнка,Іллєнкові,Іллєнка,Іллєнком,Іллєнкові,Іллєнче'), $this->object->q('Іллєнко'));
    }
    public function testCrazy12()
    { 
        $this->assertEquals(explode(',','Ільницький,Ільницького,Ільницькому,Ільницького,Ільницьким,Ільницькому,Ільницький'), $this->object->q('Ільницький'));
    }
    public function testCrazy13()
    { 
        $this->assertEquals(explode(',','Ільченко,Ільченка,Ільченкові,Ільченка,Ільченком,Ільченкові,Ільченче'), $this->object->q('Ільченко'));
    }
    public function testCrazy14()
    { 
        $this->assertEquals(explode(',','Іщенко,Іщенка,Іщенкові,Іщенка,Іщенком,Іщенкові,Іщенче'), $this->object->q('Іщенко'));
    }
    public function testCrazy15()
    { 
        $this->assertEquals(explode(',','Абраменко,Абраменка,Абраменкові,Абраменка,Абраменком,Абраменкові,Абраменче'), $this->object->q('Абраменко'));
    }
    public function testCrazy16()
    { 
        $this->assertEquals(explode(',','Абрамчук,Абрамчука,Абрамчукові,Абрамчука,Абрамчуком,Абрамчукові,Абрамчуче'), $this->object->q('Абрамчук'));
    }
    public function testCrazy17()
    { 
        $this->assertEquals(explode(',','Адамчук,Адамчука,Адамчукові,Адамчука,Адамчуком,Адамчукові,Адамчуче'), $this->object->q('Адамчук'));
    }
    public function testCrazy18()
    { 
        $this->assertEquals(explode(',','Акуленко,Акуленка,Акуленкові,Акуленка,Акуленком,Акуленкові,Акуленче'), $this->object->q('Акуленко'));
    }
    public function testCrazy19()
    { 
        $this->assertEquals(explode(',','Алексєєнко,Алексєєнка,Алексєєнкові,Алексєєнка,Алексєєнком,Алексєєнкові,Алексєєнче'), $this->object->q('Алексєєнко'));
    }
    public function testCrazy20()
    { 
        $this->assertEquals(explode(',','Алексійчук,Алексійчука,Алексійчукові,Алексійчука,Алексійчуком,Алексійчукові,Алексійчуче'), $this->object->q('Алексійчук'));
    }
    public function testCrazy21()
    { 
        $this->assertEquals(explode(',','Андрієнко,Андрієнка,Андрієнкові,Андрієнка,Андрієнком,Андрієнкові,Андрієнче'), $this->object->q('Андрієнко'));
    }
    public function testCrazy22()
    { 
        $this->assertEquals(explode(',','Андрійчук,Андрійчука,Андрійчукові,Андрійчука,Андрійчуком,Андрійчукові,Андрійчуче'), $this->object->q('Андрійчук'));
    }
    public function testCrazy23()
    { 
        $this->assertEquals(explode(',','Андрейко,Андрейка,Андрейкові,Андрейка,Андрейком,Андрейкові,Андрейче'), $this->object->q('Андрейко'));
    }
    public function testCrazy24()
    { 
        $this->assertEquals(explode(',','Андрусів,Андрусова,Андрусовові,Андрусова,Андрусовом,Андрусовові,Андрусове'), $this->object->q('Андрусів'));
    }
    public function testCrazy25()
    { 
        $this->assertEquals(explode(',','Андрушків,Андрушкова,Андрушковові,Андрушкова,Андрушковом,Андрушковові,Андрушкове'), $this->object->q('Андрушків'));
    }
    public function testCrazy26()
    { 
        $this->assertEquals(explode(',','Андрущенко,Андрущенка,Андрущенкові,Андрущенка,Андрущенком,Андрущенкові,Андрущенче'), $this->object->q('Андрущенко'));
    }
    public function testCrazy27()
    { 
        $this->assertEquals(explode(',','Анищенко,Анищенка,Анищенкові,Анищенка,Анищенком,Анищенкові,Анищенче'), $this->object->q('Анищенко'));
    }
    public function testCrazy28()
    { 
        $this->assertEquals(explode(',','Антонюк,Антонюка,Антонюкові,Антонюка,Антонюком,Антонюкові,Антонюче'), $this->object->q('Антонюк'));
    }
    public function testCrazy29()
    { 
        $this->assertEquals(explode(',','Арсенич,Арсенича,Арсеничеві,Арсенича,Арсеничем,Арсеничеві,Арсениче'), $this->object->q('Арсенич'));
    }
    public function testCrazy30()
    { 
        $this->assertEquals(explode(',','Артюх,Артюха,Артюхові,Артюха,Артюхом,Артюхові,Артюхе'), $this->object->q('Артюх'));
    }
    public function testCrazy31()
    { 
        $this->assertEquals(explode(',','Атаманчук,Атаманчука,Атаманчукові,Атаманчука,Атаманчуком,Атаманчукові,Атаманчуче'), $this->object->q('Атаманчук'));
    }
    public function testCrazy32()
    { 
        $this->assertEquals(explode(',','Біла,Біли,Білі,Білу,Білою,Білі,Біло'), $this->object->q('Біла'));
    }
    public function testCrazy33()
    { 
        $this->assertEquals(explode(',','Білас,Біласа,Біласові,Біласа,Біласом,Біласові,Біласе'), $this->object->q('Білас'));
    }
    public function testCrazy34()
    { 
        $this->assertEquals(explode(',','Білий,Білого,Білому,Білого,Білим,Білому,Білий'), $this->object->q('Білий'));
    }
    public function testCrazy35()
    { 
        $this->assertEquals(explode(',','Білодід,Білодода,Білододові,Білодода,Білододом,Білододові,Білододе'), $this->object->q('Білодід'));
    }
    public function testCrazy36()
    { 
        $this->assertEquals(explode(',','Білоус,Білоуса,Білоусові,Білоуса,Білоусом,Білоусові,Білоусе'), $this->object->q('Білоус'));
    }
    public function testCrazy37()
    { 
        $this->assertEquals(explode(',','Бабійчук,Бабійчука,Бабійчукові,Бабійчука,Бабійчуком,Бабійчукові,Бабійчуче'), $this->object->q('Бабійчук'));
    }
    public function testCrazy38()
    { 
        $this->assertEquals(explode(',','Бабак,Бабака,Бабакові,Бабака,Бабаком,Бабакові,Бабаче'), $this->object->q('Бабак'));
    }
    public function testCrazy39()
    { 
        $this->assertEquals(explode(',','Бабчук,Бабчука,Бабчукові,Бабчука,Бабчуком,Бабчукові,Бабчуче'), $this->object->q('Бабчук'));
    }
    public function testCrazy40()
    { 
        $this->assertEquals(explode(',','Багмут,Багмута,Багмутові,Багмута,Багмутом,Багмутові,Багмуте'), $this->object->q('Багмут'));
    }
    public function testCrazy41()
    { 
        $this->assertEquals(explode(',','Багрій,Багрія,Багрієві,Багрія,Багрієм,Багрієві,Багрію'), $this->object->q('Багрій'));
    }
    public function testCrazy42()
    { 
        $this->assertEquals(explode(',','Бадлак,Бадлака,Бадлакові,Бадлака,Бадлаком,Бадлакові,Бадлаче'), $this->object->q('Бадлак'));
    }
    public function testCrazy43()
    { 
        $this->assertEquals(explode(',','Бажан,Бажана,Бажанові,Бажана,Бажаном,Бажанові,Бажане'), $this->object->q('Бажан'));
    }
    public function testCrazy44()
    { 
        $this->assertEquals(explode(',','Балтача,Балтачи,Балтачі,Балтачу,Балтачою,Балтачі,Балтачо'), $this->object->q('Балтача'));
    }
    public function testCrazy45()
    { 
        $this->assertEquals(explode(',','Бандура,Бандури,Бандурі,Бандуру,Бандурою,Бандурі,Бандуро'), $this->object->q('Бандура'));
    }
    public function testCrazy46()
    { 
        $this->assertEquals(explode(',','Баран,Барана,Баранові,Барана,Бараном,Баранові,Баране'), $this->object->q('Баран'));
    }
    public function testCrazy47()
    { 
        $this->assertEquals(explode(',','Баранець,Баранця,Баранцеві,Баранця,Баранцем,Баранцеві,Баранцю'), $this->object->q('Баранець'));
    }
    public function testCrazy48()
    { 
        $this->assertEquals(explode(',','Барановський,Барановського,Барановському,Барановського,Барановським,Барановському,Барановський'), $this->object->q('Барановський'));
    }
    public function testCrazy49()
    { 
        $this->assertEquals(explode(',','Баранюк,Баранюка,Баранюкові,Баранюка,Баранюком,Баранюкові,Баранюче'), $this->object->q('Баранюк'));
    }
    public function testCrazy50()
    { 
        $this->assertEquals(explode(',','Батюк,Батюка,Батюкові,Батюка,Батюком,Батюкові,Батюче'), $this->object->q('Батюк'));
    }
    public function testCrazy51()
    { 
        $this->assertEquals(explode(',','Бачинський,Бачинського,Бачинському,Бачинського,Бачинським,Бачинському,Бачинський'), $this->object->q('Бачинський'));
    }
    public function testCrazy52()
    { 
        $this->assertEquals(explode(',','Бебешко,Бебешка,Бебешкові,Бебешка,Бебешком,Бебешкові,Бебешче'), $this->object->q('Бебешко'));
    }
    public function testCrazy53()
    { 
        $this->assertEquals(explode(',','Бевзенко,Бевзенка,Бевзенкові,Бевзенка,Бевзенком,Бевзенкові,Бевзенче'), $this->object->q('Бевзенко'));
    }
    public function testCrazy54()
    { 
        $this->assertEquals(explode(',','Березовчук,Березовчука,Березовчукові,Березовчука,Березовчуком,Березовчукові,Березовчуче'), $this->object->q('Березовчук'));
    }
    public function testCrazy55()
    { 
        $this->assertEquals(explode(',','Божик,Божика,Божикові,Божика,Божиком,Божикові,Божиче'), $this->object->q('Божик'));
    }
    public function testCrazy56()
    { 
        $this->assertEquals(explode(',','Божко,Божка,Божкові,Божка,Божком,Божкові,Божче'), $this->object->q('Божко'));
    }
    public function testCrazy57()
    { 
        $this->assertEquals(explode(',','Бойко,Бойка,Бойкові,Бойка,Бойком,Бойкові,Бойче'), $this->object->q('Бойко'));
    }
    public function testCrazy58()
    { 
        $this->assertEquals(explode(',','Бойцун,Бойцуна,Бойцунові,Бойцуна,Бойцуном,Бойцунові,Бойцуне'), $this->object->q('Бойцун'));
    }
    public function testCrazy59()
    { 
        $this->assertEquals(explode(',','Бойчак,Бойчака,Бойчакові,Бойчака,Бойчаком,Бойчакові,Бойчаче'), $this->object->q('Бойчак'));
    }
    public function testCrazy60()
    { 
        $this->assertEquals(explode(',','Бойчишин,Бойчишина,Бойчишинові,Бойчишина,Бойчишином,Бойчишинові,Бойчишине'), $this->object->q('Бойчишин'));
    }
    public function testCrazy61()
    { 
        $this->assertEquals(explode(',','Бойчук,Бойчука,Бойчукові,Бойчука,Бойчуком,Бойчукові,Бойчуче'), $this->object->q('Бойчук'));
    }
    public function testCrazy62()
    { 
        $this->assertEquals(explode(',','Бондар,Бондара,Бондарові,Бондара,Бондаром,Бондарові,Бондаре'), $this->object->q('Бондар'));
    }
    public function testCrazy63()
    { 
        $this->assertEquals(explode(',','Бондаренко,Бондаренка,Бондаренкові,Бондаренка,Бондаренком,Бондаренкові,Бондаренче'), $this->object->q('Бондаренко'));
    }
    public function testCrazy64()
    { 
        $this->assertEquals(explode(',','Бондарчук,Бондарчука,Бондарчукові,Бондарчука,Бондарчуком,Бондарчукові,Бондарчуче'), $this->object->q('Бондарчук'));
    }
    public function testCrazy65()
    { 
        $this->assertEquals(explode(',','Борисенко,Борисенка,Борисенкові,Борисенка,Борисенком,Борисенкові,Борисенче'), $this->object->q('Борисенко'));
    }
    public function testCrazy66()
    { 
        $this->assertEquals(explode(',','Борисикевич,Борисикевича,Борисикевичеві,Борисикевича,Борисикевичем,Борисикевичеві,Борисикевиче'), $this->object->q('Борисикевич'));
    }
    public function testCrazy67()
    { 
        $this->assertEquals(explode(',','Братусь,Братуся,Братусеві,Братуся,Братусем,Братусеві,Братусю'), $this->object->q('Братусь'));
    }
    public function testCrazy68()
    { 
        $this->assertEquals(explode(',','Букатевич,Букатевича,Букатевичеві,Букатевича,Букатевичем,Букатевичеві,Букатевиче'), $this->object->q('Букатевич'));
    }
    public function testCrazy69()
    { 
        $this->assertEquals(explode(',','Бурбан,Бурбана,Бурбанові,Бурбана,Бурбаном,Бурбанові,Бурбане'), $this->object->q('Бурбан'));
    }
    public function testCrazy70()
    { 
        $this->assertEquals(explode(',','Бурячок,Бурячка,Бурячкові,Бурячка,Бурячком,Бурячкові,Бурячче'), $this->object->q('Бурячок'));
    }
    public function testCrazy71()
    { 
        $this->assertEquals(explode(',','Бутейко,Бутейка,Бутейкові,Бутейка,Бутейком,Бутейкові,Бутейче'), $this->object->q('Бутейко'));
    }
    public function testCrazy72()
    { 
        $this->assertEquals(explode(',','Бутенко,Бутенка,Бутенкові,Бутенка,Бутенком,Бутенкові,Бутенче'), $this->object->q('Бутенко'));
    }
    public function testCrazy73()
    { 
        $this->assertEquals(explode(',','Бутник,Бутника,Бутникові,Бутника,Бутником,Бутникові,Бутниче'), $this->object->q('Бутник'));
    }
    public function testCrazy74()
    { 
        $this->assertEquals(explode(',','Бухало,Бухала,Бухалові,Бухала,Бухалом,Бухалові,Бухале'), $this->object->q('Бухало'));
    }
    public function testCrazy75()
    { 
        $this->assertEquals(explode(',','Василашко,Василашка,Василашкові,Василашка,Василашком,Василашкові,Василашче'), $this->object->q('Василашко'));
    }
    public function testCrazy76()
    { 
        $this->assertEquals(explode(',','Василенко,Василенка,Василенкові,Василенка,Василенком,Василенкові,Василенче'), $this->object->q('Василенко'));
    }
    public function testCrazy77()
    { 
        $this->assertEquals(explode(',','Васильченко,Васильченка,Васильченкові,Васильченка,Васильченком,Васильченкові,Васильченче'), $this->object->q('Васильченко'));
    }
    public function testCrazy78()
    { 
        $this->assertEquals(explode(',','Васильчук,Васильчука,Васильчукові,Васильчука,Васильчуком,Васильчукові,Васильчуче'), $this->object->q('Васильчук'));
    }
    public function testCrazy79()
    { 
        $this->assertEquals(explode(',','Васкул,Васкула,Васкулові,Васкула,Васкулом,Васкулові,Васкуле'), $this->object->q('Васкул'));
    }
    public function testCrazy80()
    { 
        $this->assertEquals(explode(',','Вахній,Вахнія,Вахнієві,Вахнія,Вахнієм,Вахнієві,Вахнію'), $this->object->q('Вахній'));
    }
    public function testCrazy81()
    { 
        $this->assertEquals(explode(',','Ващенко-Захарченко,Ващенко-Захарченка,Ващенко-Захарченкові,Ващенко-Захарченка,Ващенко-Захарченком,Ващенко-Захарченкові,Ващенко-Захарченче'), $this->object->q('Ващенко-Захарченко'));
    }
    public function testCrazy82()
    { 
        $this->assertEquals(explode(',','Вдовиченко,Вдовиченка,Вдовиченкові,Вдовиченка,Вдовиченком,Вдовиченкові,Вдовиченче'), $this->object->q('Вдовиченко'));
    }
    public function testCrazy83()
    { 
        $this->assertEquals(explode(',','Величко,Величка,Величкові,Величка,Величком,Величкові,Величче'), $this->object->q('Величко'));
    }
    public function testCrazy84()
    { 
        $this->assertEquals(explode(',','Вертипорох,Вертипороха,Вертипорохові,Вертипороха,Вертипорохом,Вертипорохові,Вертипорохе'), $this->object->q('Вертипорох'));
    }
    public function testCrazy85()
    { 
        $this->assertEquals(explode(',','Верхола,Верхоли,Верхолі,Верхолу,Верхолою,Верхолі,Верхоло'), $this->object->q('Верхола'));
    }
    public function testCrazy86()
    { 
        $this->assertEquals(explode(',','Винокур,Винокура,Винокурові,Винокура,Винокуром,Винокурові,Винокуре'), $this->object->q('Винокур'));
    }
    public function testCrazy87()
    { 
        $this->assertEquals(explode(',','Влох,Влоха,Влохові,Влоха,Влохом,Влохові,Влохе'), $this->object->q('Влох'));
    }
    public function testCrazy88()
    { 
        $this->assertEquals(explode(',','Воблий,Воблого,Воблому,Воблого,Воблим,Воблому,Воблий'), $this->object->q('Воблий'));
    }
    public function testCrazy89()
    { 
        $this->assertEquals(explode(',','Вовк,Вовка,Вовкові,Вовка,Вовком,Вовкові,Вовче'), $this->object->q('Вовк'));
    }
    public function testCrazy90()
    { 
        $this->assertEquals(explode(',','Возняк,Возняка,Вознякові,Возняка,Возняком,Вознякові,Возняче'), $this->object->q('Возняк'));
    }
    public function testCrazy91()
    { 
        $this->assertEquals(explode(',','Волох,Волоха,Волохові,Волоха,Волохом,Волохові,Волохе'), $this->object->q('Волох'));
    }
    public function testCrazy92()
    { 
        $this->assertEquals(explode(',','Волошин,Волошина,Волошинові,Волошина,Волошином,Волошинові,Волошине'), $this->object->q('Волошин'));
    }
    public function testCrazy93()
    { 
        $this->assertEquals(explode(',','Волощук,Волощука,Волощукові,Волощука,Волощуком,Волощукові,Волощуче'), $this->object->q('Волощук'));
    }
    public function testCrazy94()
    { 
        $this->assertEquals(explode(',','Вороновський,Вороновського,Вороновському,Вороновського,Вороновським,Вороновському,Вороновський'), $this->object->q('Вороновський'));
    }
    public function testCrazy95()
    { 
        $this->assertEquals(explode(',','Гаврилів,Гаврилова,Гавриловові,Гаврилова,Гавриловом,Гавриловові,Гаврилове'), $this->object->q('Гаврилів'));
    }
    public function testCrazy96()
    { 
        $this->assertEquals(explode(',','Гавриленко,Гавриленка,Гавриленкові,Гавриленка,Гавриленком,Гавриленкові,Гавриленче'), $this->object->q('Гавриленко'));
    }
    public function testCrazy97()
    { 
        $this->assertEquals(explode(',','Гаврилюк,Гаврилюка,Гаврилюкові,Гаврилюка,Гаврилюком,Гаврилюкові,Гаврилюче'), $this->object->q('Гаврилюк'));
    }
    public function testCrazy98()
    { 
        $this->assertEquals(explode(',','Гальченко,Гальченка,Гальченкові,Гальченка,Гальченком,Гальченкові,Гальченче'), $this->object->q('Гальченко'));
    }
    public function testCrazy99()
    { 
        $this->assertEquals(explode(',','Гамалія,Гамалії,Гамалії,Гамалію,Гамалією,Гамалії,Гамаліє'), $this->object->q('Гамалія'));
    }
    public function testCrazy100()
    { 
        $this->assertEquals(explode(',','Ганицький,Ганицького,Ганицькому,Ганицького,Ганицьким,Ганицькому,Ганицький'), $this->object->q('Ганицький'));
    }
    public function testCrazy101()
    { 
        $this->assertEquals(explode(',','Гарань,Гараня,Гараневі,Гараня,Гаранем,Гараневі,Гараню'), $this->object->q('Гарань'));
    }
    public function testCrazy102()
    { 
        $this->assertEquals(explode(',','Гармаш,Гармаша,Гармашеві,Гармаша,Гармашем,Гармашеві,Гармаше'), $this->object->q('Гармаш'));
    }
    public function testCrazy103()
    { 
        $this->assertEquals(explode(',','Гасай,Гасая,Гасаєві,Гасая,Гасаєм,Гасаєві,Гасаю'), $this->object->q('Гасай'));
    }
    public function testCrazy104()
    { 
        $this->assertEquals(explode(',','Гасюк,Гасюка,Гасюкові,Гасюка,Гасюком,Гасюкові,Гасюче'), $this->object->q('Гасюк'));
    }
    public function testCrazy105()
    { 
        $this->assertEquals(explode(',','Герасименко,Герасименка,Герасименкові,Герасименка,Герасименком,Герасименкові,Герасименче'), $this->object->q('Герасименко'));
    }
    public function testCrazy106()
    { 
        $this->assertEquals(explode(',','Геращенко,Геращенка,Геращенкові,Геращенка,Геращенком,Геращенкові,Геращенче'), $this->object->q('Геращенко'));
    }
    public function testCrazy107()
    { 
        $this->assertEquals(explode(',','Герцик,Герцика,Герцикові,Герцика,Герциком,Герцикові,Герциче'), $this->object->q('Герцик'));
    }
    public function testCrazy108()
    { 
        $this->assertEquals(explode(',','Гладченко,Гладченка,Гладченкові,Гладченка,Гладченком,Гладченкові,Гладченче'), $this->object->q('Гладченко'));
    }
    public function testCrazy109()
    { 
        $this->assertEquals(explode(',','Глоба,Глоби,Глобі,Глобу,Глобою,Глобі,Глобо'), $this->object->q('Глоба'));
    }
    public function testCrazy110()
    { 
        $this->assertEquals(explode(',','Гнатюк,Гнатюка,Гнатюкові,Гнатюка,Гнатюком,Гнатюкові,Гнатюче'), $this->object->q('Гнатюк'));
    }
    public function testCrazy111()
    { 
        $this->assertEquals(explode(',','Гоголь,Гоголя,Гоголеві,Гоголя,Гоголем,Гоголеві,Гоголю'), $this->object->q('Гоголь'));
    }
    public function testCrazy112()
    { 
        $this->assertEquals(explode(',','Годунок,Годунка,Годункові,Годунка,Годунком,Годункові,Годунче'), $this->object->q('Годунок'));
    }
    public function testCrazy113()
    { 
        $this->assertEquals(explode(',','Головатий,Головатого,Головатому,Головатого,Головатим,Головатому,Головатий'), $this->object->q('Головатий'));
    }
    public function testCrazy114()
    { 
        $this->assertEquals(explode(',','Головко,Головка,Головкові,Головка,Головком,Головкові,Головче'), $this->object->q('Головко'));
    }
    public function testCrazy115()
    { 
        $this->assertEquals(explode(',','Голуб,Голуба,Голубові,Голуба,Голубом,Голубові,Голубе'), $this->object->q('Голуб'));
    }
    public function testCrazy116()
    { 
        $this->assertEquals(explode(',','Голубничий,Голубничого,Голубничому,Голубничого,Голубничим,Голубничому,Голубничий'), $this->object->q('Голубничий'));
    }
    public function testCrazy117()
    { 
        $this->assertEquals(explode(',','Гонта,Гонти,Гонті,Гонту,Гонтою,Гонті,Гонто'), $this->object->q('Гонта'));
    }
    public function testCrazy118()
    { 
        $this->assertEquals(explode(',','Гончар,Гончара,Гончарові,Гончара,Гончаром,Гончарові,Гончаре'), $this->object->q('Гончар'));
    }
    public function testCrazy119()
    { 
        $this->assertEquals(explode(',','Гончаренко,Гончаренка,Гончаренкові,Гончаренка,Гончаренком,Гончаренкові,Гончаренче'), $this->object->q('Гончаренко'));
    }
    public function testCrazy120()
    { 
        $this->assertEquals(explode(',','Гончаров,Гончарова,Гончарову,Гончарова,Гончаровим,Гончарову,Гончарове'), $this->object->q('Гончаров'));
    }
    public function testCrazy121()
    { 
        $this->assertEquals(explode(',','Горбаль,Горбаля,Горбалеві,Горбаля,Горбалем,Горбалеві,Горбалю'), $this->object->q('Горбаль'));
    }
    public function testCrazy122()
    { 
        $this->assertEquals(explode(',','Гордієнко,Гордієнка,Гордієнкові,Гордієнка,Гордієнком,Гордієнкові,Гордієнче'), $this->object->q('Гордієнко'));
    }
    public function testCrazy123()
    { 
        $this->assertEquals(explode(',','Гошовський,Гошовського,Гошовському,Гошовського,Гошовським,Гошовському,Гошовський'), $this->object->q('Гошовський'));
    }
    public function testCrazy124()
    { 
        $this->assertEquals(explode(',','Грінченко,Грінченка,Грінченкові,Грінченка,Грінченком,Грінченкові,Грінченче'), $this->object->q('Грінченко'));
    }
    public function testCrazy125()
    { 
        $this->assertEquals(explode(',','Грабович,Грабовича,Грабовичеві,Грабовича,Грабовичем,Грабовичеві,Грабовиче'), $this->object->q('Грабович'));
    }
    public function testCrazy126()
    { 
        $this->assertEquals(explode(',','Грабовський,Грабовського,Грабовському,Грабовського,Грабовським,Грабовському,Грабовський'), $this->object->q('Грабовський'));
    }
    public function testCrazy127()
    { 
        $this->assertEquals(explode(',','Григоренко,Григоренка,Григоренкові,Григоренка,Григоренком,Григоренкові,Григоренче'), $this->object->q('Григоренко'));
    }
    public function testCrazy128()
    { 
        $this->assertEquals(explode(',','Григорович,Григоровича,Григоровичеві,Григоровича,Григоровичем,Григоровичеві,Григоровиче'), $this->object->q('Григорович'));
    }
    public function testCrazy129()
    { 
        $this->assertEquals(explode(',','Григорович-Барський,Григорович-Барського,Григорович-Барському,Григорович-Барського,Григорович-Барським,Григорович-Барському,Григорович-Барський'), $this->object->q('Григорович-Барський'));
    }
    public function testCrazy130()
    { 
        $this->assertEquals(explode(',','Григорчук,Григорчука,Григорчукові,Григорчука,Григорчуком,Григорчукові,Григорчуче'), $this->object->q('Григорчук'));
    }
    public function testCrazy131()
    { 
        $this->assertEquals(explode(',','Грицак,Грицака,Грицакові,Грицака,Грицаком,Грицакові,Грицаче'), $this->object->q('Грицак'));
    }
    public function testCrazy132()
    { 
        $this->assertEquals(explode(',','Гриценко,Гриценка,Гриценкові,Гриценка,Гриценком,Гриценкові,Гриценче'), $this->object->q('Гриценко'));
    }
    public function testCrazy133()
    { 
        $this->assertEquals(explode(',','Гришко,Гришка,Гришкові,Гришка,Гришком,Гришкові,Гришче'), $this->object->q('Гришко'));
    }
    public function testCrazy134()
    { 
        $this->assertEquals(explode(',','Гудзій,Гудзія,Гудзієві,Гудзія,Гудзієм,Гудзієві,Гудзію'), $this->object->q('Гудзій'));
    }
    public function testCrazy135()
    { 
        $this->assertEquals(explode(',','Гудзь,Гудзя,Гудзеві,Гудзя,Гудзем,Гудзеві,Гудзю'), $this->object->q('Гудзь'));
    }
    public function testCrazy136()
    { 
        $this->assertEquals(explode(',','Гуменюк,Гуменюка,Гуменюкові,Гуменюка,Гуменюком,Гуменюкові,Гуменюче'), $this->object->q('Гуменюк'));
    }
    public function testCrazy137()
    { 
        $this->assertEquals(explode(',','Гунько,Гунька,Гунькові,Гунька,Гуньком,Гунькові,Гуньче'), $this->object->q('Гунько'));
    }
    public function testCrazy138()
    { 
        $this->assertEquals(explode(',','Діденко,Діденка,Діденкові,Діденка,Діденком,Діденкові,Діденче'), $this->object->q('Діденко'));
    }
    public function testCrazy139()
    { 
        $this->assertEquals(explode(',','Даниленко,Даниленка,Даниленкові,Даниленка,Даниленком,Даниленкові,Даниленче'), $this->object->q('Даниленко'));
    }
    public function testCrazy140()
    { 
        $this->assertEquals(explode(',','Даньків,Данькова,Даньковові,Данькова,Даньковом,Даньковові,Данькове'), $this->object->q('Даньків'));
    }
    public function testCrazy141()
    { 
        $this->assertEquals(explode(',','Данькевич,Данькевича,Данькевичеві,Данькевича,Данькевичем,Данькевичеві,Данькевиче'), $this->object->q('Данькевич'));
    }
    public function testCrazy142()
    { 
        $this->assertEquals(explode(',','Дараган,Дарагана,Дараганові,Дарагана,Дараганом,Дараганові,Дарагане'), $this->object->q('Дараган'));
    }
    public function testCrazy143()
    { 
        $this->assertEquals(explode(',','Дашкевич,Дашкевича,Дашкевичеві,Дашкевича,Дашкевичем,Дашкевичеві,Дашкевиче'), $this->object->q('Дашкевич'));
    }
    public function testCrazy144()
    { 
        $this->assertEquals(explode(',','Денисенко,Денисенка,Денисенкові,Денисенка,Денисенком,Денисенкові,Денисенче'), $this->object->q('Денисенко'));
    }
    public function testCrazy145()
    { 
        $this->assertEquals(explode(',','Джус,Джуса,Джусові,Джуса,Джусом,Джусові,Джусе'), $this->object->q('Джус'));
    }
    public function testCrazy146()
    { 
        $this->assertEquals(explode(',','Дзюба,Дзюби,Дзюбі,Дзюбу,Дзюбою,Дзюбі,Дзюбо'), $this->object->q('Дзюба'));
    }
    public function testCrazy147()
    { 
        $this->assertEquals(explode(',','Дикань,Диканя,Диканеві,Диканя,Диканем,Диканеві,Диканю'), $this->object->q('Дикань'));
    }
    public function testCrazy148()
    { 
        $this->assertEquals(explode(',','Дмитерко,Дмитерка,Дмитеркові,Дмитерка,Дмитерком,Дмитеркові,Дмитерче'), $this->object->q('Дмитерко'));
    }
    public function testCrazy149()
    { 
        $this->assertEquals(explode(',','Довженко,Довженка,Довженкові,Довженка,Довженком,Довженкові,Довженче'), $this->object->q('Довженко'));
    }
    public function testCrazy150()
    { 
        $this->assertEquals(explode(',','Дорош,Дороша,Дорошеві,Дороша,Дорошем,Дорошеві,Дороше'), $this->object->q('Дорош'));
    }
    public function testCrazy151()
    { 
        $this->assertEquals(explode(',','Дорошенко,Дорошенка,Дорошенкові,Дорошенка,Дорошенком,Дорошенкові,Дорошенче'), $this->object->q('Дорошенко'));
    }
    public function testCrazy152()
    { 
        $this->assertEquals(explode(',','Доценко,Доценка,Доценкові,Доценка,Доценком,Доценкові,Доценче'), $this->object->q('Доценко'));
    }
    public function testCrazy153()
    { 
        $this->assertEquals(explode(',','Дочинець,Дочинця,Дочинцеві,Дочинця,Дочинцем,Дочинцеві,Дочинцю'), $this->object->q('Дочинець'));
    }
    public function testCrazy154()
    { 
        $this->assertEquals(explode(',','Дудко,Дудка,Дудкові,Дудка,Дудком,Дудкові,Дудче'), $this->object->q('Дудко'));
    }
    public function testCrazy155()
    { 
        $this->assertEquals(explode(',','Дяків,Дякова,Дяковові,Дякова,Дяковом,Дяковові,Дякове'), $this->object->q('Дяків'));
    }
    public function testCrazy156()
    { 
        $this->assertEquals(explode(',','Дяченко,Дяченка,Дяченкові,Дяченка,Дяченком,Дяченкові,Дяченче'), $this->object->q('Дяченко'));
    }
    public function testCrazy157()
    { 
        $this->assertEquals(explode(',','Ейбоженко,Ейбоженка,Ейбоженкові,Ейбоженка,Ейбоженком,Ейбоженкові,Ейбоженче'), $this->object->q('Ейбоженко'));
    }
    public function testCrazy158()
    { 
        $this->assertEquals(explode(',','Жайворон,Жайворона,Жайворонові,Жайворона,Жайвороном,Жайворонові,Жайвороне'), $this->object->q('Жайворон'));
    }
    public function testCrazy159()
    { 
        $this->assertEquals(explode(',','Жаліло,Жалола,Жалолові,Жалола,Жалолом,Жалолові,Жалоле'), $this->object->q('Жаліло'));
    }
    public function testCrazy160()
    { 
        $this->assertEquals(explode(',','Жежерін,Жежеріна,Жежеріну,Жежеріна,Жежеріном,Жежеріну,Жежеріне'), $this->object->q('Жежерін'));
    }
    public function testCrazy161()
    { 
        $this->assertEquals(explode(',','Желєзняк,Желєзняка,Желєзнякові,Желєзняка,Желєзняком,Желєзнякові,Желєзняче'), $this->object->q('Желєзняк'));
    }
    public function testCrazy162()
    { 
        $this->assertEquals(explode(',','Железняк,Железняка,Железнякові,Железняка,Железняком,Железнякові,Железняче'), $this->object->q('Железняк'));
    }
    public function testCrazy163()
    { 
        $this->assertEquals(explode(',','Жилко,Жилка,Жилкові,Жилка,Жилком,Жилкові,Жилче'), $this->object->q('Жилко'));
    }
    public function testCrazy164()
    { 
        $this->assertEquals(explode(',','Жирко,Жирка,Жиркові,Жирка,Жирком,Жиркові,Жирче'), $this->object->q('Жирко'));
    }
    public function testCrazy165()
    { 
        $this->assertEquals(explode(',','Жук,Жука,Жукові,Жука,Жуком,Жукові,Жуче'), $this->object->q('Жук'));
    }
    public function testCrazy166()
    { 
        $this->assertEquals(explode(',','Жупанський,Жупанського,Жупанському,Жупанського,Жупанським,Жупанському,Жупанський'), $this->object->q('Жупанський'));
    }
    public function testCrazy167()
    { 
        $this->assertEquals(explode(',','Заєць,Зайця,Зайцеві,Зайця,Зайцем,Зайцеві,Зайцю'), $this->object->q('Заєць'));
    }
    public function testCrazy168()
    { 
        $this->assertEquals(explode(',','Забашта,Забашти,Забашті,Забашту,Забаштою,Забашті,Забашто'), $this->object->q('Забашта'));
    }
    public function testCrazy169()
    { 
        $this->assertEquals(explode(',','Заболотний,Заболотного,Заболотному,Заболотного,Заболотним,Заболотному,Заболотний'), $this->object->q('Заболотний'));
    }
    public function testCrazy170()
    { 
        $this->assertEquals(explode(',','Завальнюк,Завальнюка,Завальнюкові,Завальнюка,Завальнюком,Завальнюкові,Завальнюче'), $this->object->q('Завальнюк'));
    }
    public function testCrazy171()
    { 
        $this->assertEquals(explode(',','Закусило,Закусила,Закусилові,Закусила,Закусилом,Закусилові,Закусиле'), $this->object->q('Закусило'));
    }
    public function testCrazy172()
    { 
        $this->assertEquals(explode(',','Залізняк,Залізняка,Залізнякові,Залізняка,Залізняком,Залізнякові,Залізняче'), $this->object->q('Залізняк'));
    }
    public function testCrazy173()
    { 
        $this->assertEquals(explode(',','Заруба,Заруби,Зарубі,Зарубу,Зарубою,Зарубі,Зарубо'), $this->object->q('Заруба'));
    }
    public function testCrazy174()
    { 
        $this->assertEquals(explode(',','Засядько,Засядька,Засядькові,Засядька,Засядьком,Засядькові,Засядьче'), $this->object->q('Засядько'));
    }
    public function testCrazy175()
    { 
        $this->assertEquals(explode(',','Захаренко,Захаренка,Захаренкові,Захаренка,Захаренком,Захаренкові,Захаренче'), $this->object->q('Захаренко'));
    }
    public function testCrazy176()
    { 
        $this->assertEquals(explode(',','Захарчук,Захарчука,Захарчукові,Захарчука,Захарчуком,Захарчукові,Захарчуче'), $this->object->q('Захарчук'));
    }
    public function testCrazy177()
    { 
        $this->assertEquals(explode(',','Заяць,Зайця,Зайцеві,Зайця,Зайцем,Зайцеві,Зайцю'), $this->object->q('Заяць'));
    }
    public function testCrazy178()
    { 
        $this->assertEquals(explode(',','Заячківський,Заячківського,Заячківському,Заячківського,Заячківським,Заячківському,Заячківський'), $this->object->q('Заячківський'));
    }
    public function testCrazy179()
    { 
        $this->assertEquals(explode(',','Зленко,Зленка,Зленкові,Зленка,Зленком,Зленкові,Зленче'), $this->object->q('Зленко'));
    }
    public function testCrazy180()
    { 
        $this->assertEquals(explode(',','Золотаренко,Золотаренка,Золотаренкові,Золотаренка,Золотаренком,Золотаренкові,Золотаренче'), $this->object->q('Золотаренко'));
    }
    public function testCrazy181()
    { 
        $this->assertEquals(explode(',','Кабачок,Кабачка,Кабачкові,Кабачка,Кабачком,Кабачкові,Кабачче'), $this->object->q('Кабачок'));
    }
    public function testCrazy182()
    { 
        $this->assertEquals(explode(',','Каганець,Каганця,Каганцеві,Каганця,Каганцем,Каганцеві,Каганцю'), $this->object->q('Каганець'));
    }
    public function testCrazy183()
    { 
        $this->assertEquals(explode(',','Калинович,Калиновича,Калиновичеві,Калиновича,Калиновичем,Калиновичеві,Калиновиче'), $this->object->q('Калинович'));
    }
    public function testCrazy184()
    { 
        $this->assertEquals(explode(',','Кармалюк,Кармалюка,Кармалюкові,Кармалюка,Кармалюком,Кармалюкові,Кармалюче'), $this->object->q('Кармалюк'));
    }
    public function testCrazy185()
    { 
        $this->assertEquals(explode(',','Карпенко,Карпенка,Карпенкові,Карпенка,Карпенком,Карпенкові,Карпенче'), $this->object->q('Карпенко'));
    }
    public function testCrazy186()
    { 
        $this->assertEquals(explode(',','Кириленко,Кириленка,Кириленкові,Кириленка,Кириленком,Кириленкові,Кириленче'), $this->object->q('Кириленко'));
    }
    public function testCrazy187()
    { 
        $this->assertEquals(explode(',','Китастий,Китастого,Китастому,Китастого,Китастим,Китастому,Китастий'), $this->object->q('Китастий'));
    }
    public function testCrazy188()
    { 
        $this->assertEquals(explode(',','Кицай,Кицая,Кицаєві,Кицая,Кицаєм,Кицаєві,Кицаю'), $this->object->q('Кицай'));
    }
    public function testCrazy189()
    { 
        $this->assertEquals(explode(',','Клименко,Клименка,Клименкові,Клименка,Клименком,Клименкові,Клименче'), $this->object->q('Клименко'));
    }
    public function testCrazy190()
    { 
        $this->assertEquals(explode(',','Климчук,Климчука,Климчукові,Климчука,Климчуком,Климчукові,Климчуче'), $this->object->q('Климчук'));
    }
    public function testCrazy191()
    { 
        $this->assertEquals(explode(',','Кмета,Кмети,Кметі,Кмету,Кметою,Кметі,Кмето'), $this->object->q('Кмета'));
    }
    public function testCrazy192()
    { 
        $this->assertEquals(explode(',','Книш,Книша,Книшеві,Книша,Книшем,Книшеві,Книше'), $this->object->q('Книш'));
    }
    public function testCrazy193()
    { 
        $this->assertEquals(explode(',','Ковалів,Ковалова,Коваловові,Ковалова,Коваловом,Коваловові,Ковалове'), $this->object->q('Ковалів'));
    }
    public function testCrazy194()
    { 
        $this->assertEquals(explode(',','Коваленко,Коваленка,Коваленкові,Коваленка,Коваленком,Коваленкові,Коваленче'), $this->object->q('Коваленко'));
    }
    public function testCrazy195()
    { 
        $this->assertEquals(explode(',','Коваль,Коваля,Ковалеві,Коваля,Ковалем,Ковалеві,Ковалю'), $this->object->q('Коваль'));
    }
    public function testCrazy196()
    { 
        $this->assertEquals(explode(',','Ковальчик,Ковальчика,Ковальчикові,Ковальчика,Ковальчиком,Ковальчикові,Ковальчиче'), $this->object->q('Ковальчик'));
    }
    public function testCrazy197()
    { 
        $this->assertEquals(explode(',','Ковальчук,Ковальчука,Ковальчукові,Ковальчука,Ковальчуком,Ковальчукові,Ковальчуче'), $this->object->q('Ковальчук'));
    }
    public function testCrazy198()
    { 
        $this->assertEquals(explode(',','Кованько,Кованька,Кованькові,Кованька,Кованьком,Кованькові,Кованьче'), $this->object->q('Кованько'));
    }
    public function testCrazy199()
    { 
        $this->assertEquals(explode(',','Ковтун,Ковтуна,Ковтунові,Ковтуна,Ковтуном,Ковтунові,Ковтуне'), $this->object->q('Ковтун'));
    }
    public function testCrazy200()
    { 
        $this->assertEquals(explode(',','Козаченко,Козаченка,Козаченкові,Козаченка,Козаченком,Козаченкові,Козаченче'), $this->object->q('Козаченко'));
    }
    public function testCrazy201()
    { 
        $this->assertEquals(explode(',','Козачинський,Козачинського,Козачинському,Козачинського,Козачинським,Козачинському,Козачинський'), $this->object->q('Козачинський'));
    }
    public function testCrazy202()
    { 
        $this->assertEquals(explode(',','Козачок,Козачка,Козачкові,Козачка,Козачком,Козачкові,Козачче'), $this->object->q('Козачок'));
    }
    public function testCrazy203()
    { 
        $this->assertEquals(explode(',','Козубенко,Козубенка,Козубенкові,Козубенка,Козубенком,Козубенкові,Козубенче'), $this->object->q('Козубенко'));
    }
    public function testCrazy204()
    { 
        $this->assertEquals(explode(',','Колесник,Колесника,Колесникові,Колесника,Колесником,Колесникові,Колесниче'), $this->object->q('Колесник'));
    }
    public function testCrazy205()
    { 
        $this->assertEquals(explode(',','Колодій,Колодія,Колодієві,Колодія,Колодієм,Колодієві,Колодію'), $this->object->q('Колодій'));
    }
    public function testCrazy206()
    { 
        $this->assertEquals(explode(',','Колодний,Колодного,Колодному,Колодного,Колодним,Колодному,Колодний'), $this->object->q('Колодний'));
    }
    public function testCrazy207()
    { 
        $this->assertEquals(explode(',','Коломієць,Коломійця,Коломійцеві,Коломійця,Коломійцем,Коломійцеві,Коломійцю'), $this->object->q('Коломієць'));
    }
    public function testCrazy208()
    { 
        $this->assertEquals(explode(',','Комар,Комара,Комарові,Комара,Комаром,Комарові,Комаре'), $this->object->q('Комар'));
    }
    public function testCrazy209()
    { 
        $this->assertEquals(explode(',','Кондратюк,Кондратюка,Кондратюкові,Кондратюка,Кондратюком,Кондратюкові,Кондратюче'), $this->object->q('Кондратюк'));
    }
    public function testCrazy210()
    { 
        $this->assertEquals(explode(',','Корецький,Корецького,Корецькому,Корецького,Корецьким,Корецькому,Корецький'), $this->object->q('Корецький'));
    }
    public function testCrazy211()
    { 
        $this->assertEquals(explode(',','Корж,Коржа,Коржеві,Коржа,Коржем,Коржеві,Корже'), $this->object->q('Корж'));
    }
    public function testCrazy212()
    { 
        $this->assertEquals(explode(',','Корнійчук,Корнійчука,Корнійчукові,Корнійчука,Корнійчуком,Корнійчукові,Корнійчуче'), $this->object->q('Корнійчук'));
    }
    public function testCrazy213()
    { 
        $this->assertEquals(explode(',','Коробка,Коробки,Коробці,Коробку,Коробкою,Коробці,Коробко'), $this->object->q('Коробка'));
    }
    public function testCrazy214()
    { 
        $this->assertEquals(explode(',','Королюк,Королюка,Королюкові,Королюка,Королюком,Королюкові,Королюче'), $this->object->q('Королюк'));
    }
    public function testCrazy215()
    { 
        $this->assertEquals(explode(',','Короткевич,Короткевича,Короткевичеві,Короткевича,Короткевичем,Короткевичеві,Короткевиче'), $this->object->q('Короткевич'));
    }
    public function testCrazy216()
    { 
        $this->assertEquals(explode(',','Корпанюк,Корпанюка,Корпанюкові,Корпанюка,Корпанюком,Корпанюкові,Корпанюче'), $this->object->q('Корпанюк'));
    }
    public function testCrazy217()
    { 
        $this->assertEquals(explode(',','Корчак,Корчака,Корчакові,Корчака,Корчаком,Корчакові,Корчаче'), $this->object->q('Корчак'));
    }
    public function testCrazy218()
    { 
        $this->assertEquals(explode(',','Корчинський,Корчинського,Корчинському,Корчинського,Корчинським,Корчинському,Корчинський'), $this->object->q('Корчинський'));
    }
    public function testCrazy219()
    { 
        $this->assertEquals(explode(',','Косенко,Косенка,Косенкові,Косенка,Косенком,Косенкові,Косенче'), $this->object->q('Косенко'));
    }
    public function testCrazy220()
    { 
        $this->assertEquals(explode(',','Костенко,Костенка,Костенкові,Костенка,Костенком,Костенкові,Костенче'), $this->object->q('Костенко'));
    }
    public function testCrazy221()
    { 
        $this->assertEquals(explode(',','Коструба,Коструби,Кострубі,Кострубу,Кострубою,Кострубі,Кострубо'), $this->object->q('Коструба'));
    }
    public function testCrazy222()
    { 
        $this->assertEquals(explode(',','Костюк,Костюка,Костюкові,Костюка,Костюком,Костюкові,Костюче'), $this->object->q('Костюк'));
    }
    public function testCrazy223()
    { 
        $this->assertEquals(explode(',','Котляр,Котляра,Котлярові,Котляра,Котляром,Котлярові,Котляре'), $this->object->q('Котляр'));
    }
    public function testCrazy224()
    { 
        $this->assertEquals(explode(',','Котляревський,Котляревського,Котляревському,Котляревського,Котляревським,Котляревському,Котляревський'), $this->object->q('Котляревський'));
    }
    public function testCrazy225()
    { 
        $this->assertEquals(explode(',','Кравців,Кравцова,Кравцовові,Кравцова,Кравцовом,Кравцовові,Кравцове'), $this->object->q('Кравців'));
    }
    public function testCrazy226()
    { 
        $this->assertEquals(explode(',','Кравченко,Кравченка,Кравченкові,Кравченка,Кравченком,Кравченкові,Кравченче'), $this->object->q('Кравченко'));
    }
    public function testCrazy227()
    { 
        $this->assertEquals(explode(',','Кравчук,Кравчука,Кравчукові,Кравчука,Кравчуком,Кравчукові,Кравчуче'), $this->object->q('Кравчук'));
    }
    public function testCrazy228()
    { 
        $this->assertEquals(explode(',','Красовський,Красовського,Красовському,Красовського,Красовським,Красовському,Красовський'), $this->object->q('Красовський'));
    }
    public function testCrazy229()
    { 
        $this->assertEquals(explode(',','Криворучко,Криворучка,Криворучкові,Криворучка,Криворучком,Криворучкові,Криворучче'), $this->object->q('Криворучко'));
    }
    public function testCrazy230()
    { 
        $this->assertEquals(explode(',','Крикуненко,Крикуненка,Крикуненкові,Крикуненка,Крикуненком,Крикуненкові,Крикуненче'), $this->object->q('Крикуненко'));
    }
    public function testCrazy231()
    { 
        $this->assertEquals(explode(',','Кузьмінський,Кузьмінського,Кузьмінському,Кузьмінського,Кузьмінським,Кузьмінському,Кузьмінський'), $this->object->q('Кузьмінський'));
    }
    public function testCrazy232()
    { 
        $this->assertEquals(explode(',','Кулиняк,Кулиняка,Кулинякові,Кулиняка,Кулиняком,Кулинякові,Кулиняче'), $this->object->q('Кулиняк'));
    }
    public function testCrazy233()
    { 
        $this->assertEquals(explode(',','Кульчицький,Кульчицького,Кульчицькому,Кульчицького,Кульчицьким,Кульчицькому,Кульчицький'), $this->object->q('Кульчицький'));
    }
    public function testCrazy234()
    { 
        $this->assertEquals(explode(',','Купчинський,Купчинського,Купчинському,Купчинського,Купчинським,Купчинському,Купчинський'), $this->object->q('Купчинський'));
    }
    public function testCrazy235()
    { 
        $this->assertEquals(explode(',','Кухаренко,Кухаренка,Кухаренкові,Кухаренка,Кухаренком,Кухаренкові,Кухаренче'), $this->object->q('Кухаренко'));
    }
    public function testCrazy236()
    { 
        $this->assertEquals(explode(',','Куц,Куца,Куцові,Куца,Куцом,Куцові,Куце'), $this->object->q('Куц'));
    }
    public function testCrazy237()
    { 
        $this->assertEquals(explode(',','Куценко,Куценка,Куценкові,Куценка,Куценком,Куценкові,Куценче'), $this->object->q('Куценко'));
    }
    public function testCrazy238()
    { 
        $this->assertEquals(explode(',','Кучер,Кучера,Кучерові,Кучера,Кучером,Кучерові,Кучере'), $this->object->q('Кучер'));
    }
    public function testCrazy239()
    { 
        $this->assertEquals(explode(',','Кучеренко,Кучеренка,Кучеренкові,Кучеренка,Кучеренком,Кучеренкові,Кучеренче'), $this->object->q('Кучеренко'));
    }
    public function testCrazy240()
    { 
        $this->assertEquals(explode(',','Кушнір,Кушнора,Кушнорові,Кушнора,Кушнором,Кушнорові,Кушноре'), $this->object->q('Кушнір'));
    }
    public function testCrazy241()
    { 
        $this->assertEquals(explode(',','Лаба,Лаби,Лабі,Лабу,Лабою,Лабі,Лабо'), $this->object->q('Лаба'));
    }
    public function testCrazy242()
    { 
        $this->assertEquals(explode(',','Лаврін,Лавріна,Лавріну,Лавріна,Лавріном,Лавріну,Лавріне'), $this->object->q('Лаврін'));
    }
    public function testCrazy243()
    { 
        $this->assertEquals(explode(',','Лаврик,Лаврика,Лаврикові,Лаврика,Лавриком,Лаврикові,Лавриче'), $this->object->q('Лаврик'));
    }
    public function testCrazy244()
    { 
        $this->assertEquals(explode(',','Лавриненко,Лавриненка,Лавриненкові,Лавриненка,Лавриненком,Лавриненкові,Лавриненче'), $this->object->q('Лавриненко'));
    }
    public function testCrazy245()
    { 
        $this->assertEquals(explode(',','Лазарчук,Лазарчука,Лазарчукові,Лазарчука,Лазарчуком,Лазарчукові,Лазарчуче'), $this->object->q('Лазарчук'));
    }
    public function testCrazy246()
    { 
        $this->assertEquals(explode(',','Лазорко,Лазорка,Лазоркові,Лазорка,Лазорком,Лазоркові,Лазорче'), $this->object->q('Лазорко'));
    }
    public function testCrazy247()
    { 
        $this->assertEquals(explode(',','Левицький,Левицького,Левицькому,Левицького,Левицьким,Левицькому,Левицький'), $this->object->q('Левицький'));
    }
    public function testCrazy248()
    { 
        $this->assertEquals(explode(',','Левченко,Левченка,Левченкові,Левченка,Левченком,Левченкові,Левченче'), $this->object->q('Левченко'));
    }
    public function testCrazy249()
    { 
        $this->assertEquals(explode(',','Лесів,Лесова,Лесовові,Лесова,Лесовом,Лесовові,Лесове'), $this->object->q('Лесів'));
    }
    public function testCrazy250()
    { 
        $this->assertEquals(explode(',','Лисенко,Лисенка,Лисенкові,Лисенка,Лисенком,Лисенкові,Лисенче'), $this->object->q('Лисенко'));
    }
    public function testCrazy251()
    { 
        $this->assertEquals(explode(',','Литвин,Литвина,Литвинові,Литвина,Литвином,Литвинові,Литвине'), $this->object->q('Литвин'));
    }
    public function testCrazy252()
    { 
        $this->assertEquals(explode(',','Литвиненко,Литвиненка,Литвиненкові,Литвиненка,Литвиненком,Литвиненкові,Литвиненче'), $this->object->q('Литвиненко'));
    }
    public function testCrazy253()
    { 
        $this->assertEquals(explode(',','Литвинов,Литвинова,Литвинову,Литвинова,Литвиновим,Литвинову,Литвинове'), $this->object->q('Литвинов'));
    }
    public function testCrazy254()
    { 
        $this->assertEquals(explode(',','Литовченко,Литовченка,Литовченкові,Литовченка,Литовченком,Литовченкові,Литовченче'), $this->object->q('Литовченко'));
    }
    public function testCrazy255()
    { 
        $this->assertEquals(explode(',','Лозина-Лозинський,Лозина-Лозинського,Лозина-Лозинському,Лозина-Лозинського,Лозина-Лозинським,Лозина-Лозинському,Лозина-Лозинський'), $this->object->q('Лозина-Лозинський'));
    }
    public function testCrazy256()
    { 
        $this->assertEquals(explode(',','Лопатинський,Лопатинського,Лопатинському,Лопатинського,Лопатинським,Лопатинському,Лопатинський'), $this->object->q('Лопатинський'));
    }
    public function testCrazy257()
    { 
        $this->assertEquals(explode(',','Лукомський,Лукомського,Лукомському,Лукомського,Лукомським,Лукомському,Лукомський'), $this->object->q('Лукомський'));
    }
    public function testCrazy258()
    { 
        $this->assertEquals(explode(',','Луценко,Луценка,Луценкові,Луценка,Луценком,Луценкові,Луценче'), $this->object->q('Луценко'));
    }
    public function testCrazy259()
    { 
        $this->assertEquals(explode(',','Людкевич,Людкевича,Людкевичеві,Людкевича,Людкевичем,Людкевичеві,Людкевиче'), $this->object->q('Людкевич'));
    }
    public function testCrazy260()
    { 
        $this->assertEquals(explode(',','Ляшенко,Ляшенка,Ляшенкові,Ляшенка,Ляшенком,Ляшенкові,Ляшенче'), $this->object->q('Ляшенко'));
    }
    public function testCrazy261()
    { 
        $this->assertEquals(explode(',','Мірошниченко,Мірошниченка,Мірошниченкові,Мірошниченка,Мірошниченком,Мірошниченкові,Мірошниченче'), $this->object->q('Мірошниченко'));
    }
    public function testCrazy262()
    { 
        $this->assertEquals(explode(',','Мірчук,Мірчука,Мірчукові,Мірчука,Мірчуком,Мірчукові,Мірчуче'), $this->object->q('Мірчук'));
    }
    public function testCrazy263()
    { 
        $this->assertEquals(explode(',','Міщенко,Міщенка,Міщенкові,Міщенка,Міщенком,Міщенкові,Міщенче'), $this->object->q('Міщенко'));
    }
    public function testCrazy264()
    { 
        $this->assertEquals(explode(',','Мазур,Мазура,Мазурові,Мазура,Мазуром,Мазурові,Мазуре'), $this->object->q('Мазур'));
    }
    public function testCrazy265()
    { 
        $this->assertEquals(explode(',','Макаренко,Макаренка,Макаренкові,Макаренка,Макаренком,Макаренкові,Макаренче'), $this->object->q('Макаренко'));
    }
    public function testCrazy266()
    { 
        $this->assertEquals(explode(',','Максименко,Максименка,Максименкові,Максименка,Максименком,Максименкові,Максименче'), $this->object->q('Максименко'));
    }
    public function testCrazy267()
    { 
        $this->assertEquals(explode(',','Маланчук,Маланчука,Маланчукові,Маланчука,Маланчуком,Маланчукові,Маланчуче'), $this->object->q('Маланчук'));
    }
    public function testCrazy268()
    { 
        $this->assertEquals(explode(',','Малишко,Малишка,Малишкові,Малишка,Малишком,Малишкові,Малишче'), $this->object->q('Малишко'));
    }
    public function testCrazy269()
    { 
        $this->assertEquals(explode(',','Малкович,Малковича,Малковичеві,Малковича,Малковичем,Малковичеві,Малковиче'), $this->object->q('Малкович'));
    }
    public function testCrazy270()
    { 
        $this->assertEquals(explode(',','Мамчур,Мамчура,Мамчурові,Мамчура,Мамчуром,Мамчурові,Мамчуре'), $this->object->q('Мамчур'));
    }
    public function testCrazy271()
    { 
        $this->assertEquals(explode(',','Маркевич,Маркевича,Маркевичеві,Маркевича,Маркевичем,Маркевичеві,Маркевиче'), $this->object->q('Маркевич'));
    }
    public function testCrazy272()
    { 
        $this->assertEquals(explode(',','Мартиненко,Мартиненка,Мартиненкові,Мартиненка,Мартиненком,Мартиненкові,Мартиненче'), $this->object->q('Мартиненко'));
    }
    public function testCrazy273()
    { 
        $this->assertEquals(explode(',','Марунчак,Марунчака,Марунчакові,Марунчака,Марунчаком,Марунчакові,Марунчаче'), $this->object->q('Марунчак'));
    }
    public function testCrazy274()
    { 
        $this->assertEquals(explode(',','Марценюк,Марценюка,Марценюкові,Марценюка,Марценюком,Марценюкові,Марценюче'), $this->object->q('Марценюк'));
    }
    public function testCrazy275()
    { 
        $this->assertEquals(explode(',','Марченко,Марченка,Марченкові,Марченка,Марченком,Марченкові,Марченче'), $this->object->q('Марченко'));
    }
    public function testCrazy276()
    { 
        $this->assertEquals(explode(',','Марчук,Марчука,Марчукові,Марчука,Марчуком,Марчукові,Марчуче'), $this->object->q('Марчук'));
    }
    public function testCrazy277()
    { 
        $this->assertEquals(explode(',','Масоха,Масохи,Масосі,Масоху,Масохою,Масосі,Масохо'), $this->object->q('Масоха'));
    }
    public function testCrazy278()
    { 
        $this->assertEquals(explode(',','Матвієнко,Матвієнка,Матвієнкові,Матвієнка,Матвієнком,Матвієнкові,Матвієнче'), $this->object->q('Матвієнко'));
    }
    public function testCrazy279()
    { 
        $this->assertEquals(explode(',','Матюшенко,Матюшенка,Матюшенкові,Матюшенка,Матюшенком,Матюшенкові,Матюшенче'), $this->object->q('Матюшенко'));
    }
    public function testCrazy280()
    { 
        $this->assertEquals(explode(',','Маценко,Маценка,Маценкові,Маценка,Маценком,Маценкові,Маценче'), $this->object->q('Маценко'));
    }
    public function testCrazy281()
    { 
        $this->assertEquals(explode(',','Мацюк,Мацюка,Мацюкові,Мацюка,Мацюком,Мацюкові,Мацюче'), $this->object->q('Мацюк'));
    }
    public function testCrazy282()
    { 
        $this->assertEquals(explode(',','Мельник,Мельника,Мельникові,Мельника,Мельником,Мельникові,Мельниче'), $this->object->q('Мельник'));
    }
    public function testCrazy283()
    { 
        $this->assertEquals(explode(',','Мельниченко,Мельниченка,Мельниченкові,Мельниченка,Мельниченком,Мельниченкові,Мельниченче'), $this->object->q('Мельниченко'));
    }
    public function testCrazy284()
    { 
        $this->assertEquals(explode(',','Мельничук,Мельничука,Мельничукові,Мельничука,Мельничуком,Мельничукові,Мельничуче'), $this->object->q('Мельничук'));
    }
    public function testCrazy285()
    { 
        $this->assertEquals(explode(',','Микитенко,Микитенка,Микитенкові,Микитенка,Микитенком,Микитенкові,Микитенче'), $this->object->q('Микитенко'));
    }
    public function testCrazy286()
    { 
        $this->assertEquals(explode(',','Микитин,Микитина,Микитинові,Микитина,Микитином,Микитинові,Микитине'), $this->object->q('Микитин'));
    }
    public function testCrazy287()
    { 
        $this->assertEquals(explode(',','Мирон,Мирона,Миронові,Мирона,Мироном,Миронові,Мироне'), $this->object->q('Мирон'));
    }
    public function testCrazy288()
    { 
        $this->assertEquals(explode(',','Михайленко,Михайленка,Михайленкові,Михайленка,Михайленком,Михайленкові,Михайленче'), $this->object->q('Михайленко'));
    }
    public function testCrazy289()
    { 
        $this->assertEquals(explode(',','Михайличенко,Михайличенка,Михайличенкові,Михайличенка,Михайличенком,Михайличенкові,Михайличенче'), $this->object->q('Михайличенко'));
    }
    public function testCrazy290()
    { 
        $this->assertEquals(explode(',','Михайлюк,Михайлюка,Михайлюкові,Михайлюка,Михайлюком,Михайлюкові,Михайлюче'), $this->object->q('Михайлюк'));
    }
    public function testCrazy291()
    { 
        $this->assertEquals(explode(',','Мицик,Мицика,Мицикові,Мицика,Мициком,Мицикові,Мициче'), $this->object->q('Мицик'));
    }
    public function testCrazy292()
    { 
        $this->assertEquals(explode(',','Мовчан,Мовчана,Мовчанові,Мовчана,Мовчаном,Мовчанові,Мовчане'), $this->object->q('Мовчан'));
    }
    public function testCrazy293()
    { 
        $this->assertEquals(explode(',','Моргун,Моргуна,Моргунові,Моргуна,Моргуном,Моргунові,Моргуне'), $this->object->q('Моргун'));
    }
    public function testCrazy294()
    { 
        $this->assertEquals(explode(',','Мороз,Мороза,Морозові,Мороза,Морозом,Морозові,Морозе'), $this->object->q('Мороз'));
    }
    public function testCrazy295()
    { 
        $this->assertEquals(explode(',','Москаленко,Москаленка,Москаленкові,Москаленка,Москаленком,Москаленкові,Москаленче'), $this->object->q('Москаленко'));
    }
    public function testCrazy296()
    { 
        $this->assertEquals(explode(',','Москаль,Москаля,Москалеві,Москаля,Москалем,Москалеві,Москалю'), $this->object->q('Москаль'));
    }
    public function testCrazy297()
    { 
        $this->assertEquals(explode(',','Мошак,Мошака,Мошакові,Мошака,Мошаком,Мошакові,Мошаче'), $this->object->q('Мошак'));
    }
    public function testCrazy298()
    { 
        $this->assertEquals(explode(',','Муратова,Муратови,Муратові,Муратову,Муратовою,Муратові,Муратово'), $this->object->q('Муратова'));
    }
    public function testCrazy299()
    { 
        $this->assertEquals(explode(',','Мусієнко,Мусієнка,Мусієнкові,Мусієнка,Мусієнком,Мусієнкові,Мусієнче'), $this->object->q('Мусієнко'));
    }
    public function testCrazy300()
    { 
        $this->assertEquals(explode(',','Назаренко,Назаренка,Назаренкові,Назаренка,Назаренком,Назаренкові,Назаренче'), $this->object->q('Назаренко'));
    }
    public function testCrazy301()
    { 
        $this->assertEquals(explode(',','Наливайко,Наливайка,Наливайкові,Наливайка,Наливайком,Наливайкові,Наливайче'), $this->object->q('Наливайко'));
    }
    public function testCrazy302()
    { 
        $this->assertEquals(explode(',','Негребецький,Негребецького,Негребецькому,Негребецького,Негребецьким,Негребецькому,Негребецький'), $this->object->q('Негребецький'));
    }
    public function testCrazy303()
    { 
        $this->assertEquals(explode(',','Непорожній,Непорожнія,Непорожнієві,Непорожнія,Непорожнієм,Непорожнієві,Непорожнію'), $this->object->q('Непорожній'));
    }
    public function testCrazy304()
    { 
        $this->assertEquals(explode(',','Нестеренко,Нестеренка,Нестеренкові,Нестеренка,Нестеренком,Нестеренкові,Нестеренче'), $this->object->q('Нестеренко'));
    }
    public function testCrazy305()
    { 
        $this->assertEquals(explode(',','Нечай,Нечая,Нечаєві,Нечая,Нечаєм,Нечаєві,Нечаю'), $this->object->q('Нечай'));
    }
    public function testCrazy306()
    { 
        $this->assertEquals(explode(',','Нечипоренко,Нечипоренка,Нечипоренкові,Нечипоренка,Нечипоренком,Нечипоренкові,Нечипоренче'), $this->object->q('Нечипоренко'));
    }
    public function testCrazy307()
    { 
        $this->assertEquals(explode(',','Оберемченко,Оберемченка,Оберемченкові,Оберемченка,Оберемченком,Оберемченкові,Оберемченче'), $this->object->q('Оберемченко'));
    }
    public function testCrazy308()
    { 
        $this->assertEquals(explode(',','Овчаренко,Овчаренка,Овчаренкові,Овчаренка,Овчаренком,Овчаренкові,Овчаренче'), $this->object->q('Овчаренко'));
    }
    public function testCrazy309()
    { 
        $this->assertEquals(explode(',','Олійник,Олійника,Олійникові,Олійника,Олійником,Олійникові,Олійниче'), $this->object->q('Олійник'));
    }
    public function testCrazy310()
    { 
        $this->assertEquals(explode(',','Олексієнко,Олексієнка,Олексієнкові,Олексієнка,Олексієнком,Олексієнкові,Олексієнче'), $this->object->q('Олексієнко'));
    }
    public function testCrazy311()
    { 
        $this->assertEquals(explode(',','Омельченко,Омельченка,Омельченкові,Омельченка,Омельченком,Омельченкові,Омельченче'), $this->object->q('Омельченко'));
    }
    public function testCrazy312()
    { 
        $this->assertEquals(explode(',','Омельчук,Омельчука,Омельчукові,Омельчука,Омельчуком,Омельчукові,Омельчуче'), $this->object->q('Омельчук'));
    }
    public function testCrazy313()
    { 
        $this->assertEquals(explode(',','Онищенко,Онищенка,Онищенкові,Онищенка,Онищенком,Онищенкові,Онищенче'), $this->object->q('Онищенко'));
    }
    public function testCrazy314()
    { 
        $this->assertEquals(explode(',','Онопенко,Онопенка,Онопенкові,Онопенка,Онопенком,Онопенкові,Онопенче'), $this->object->q('Онопенко'));
    }
    public function testCrazy315()
    { 
        $this->assertEquals(explode(',','Опанасенко,Опанасенка,Опанасенкові,Опанасенка,Опанасенком,Опанасенкові,Опанасенче'), $this->object->q('Опанасенко'));
    }
    public function testCrazy316()
    { 
        $this->assertEquals(explode(',','Осадчук,Осадчука,Осадчукові,Осадчука,Осадчуком,Осадчукові,Осадчуче'), $this->object->q('Осадчук'));
    }
    public function testCrazy317()
    { 
        $this->assertEquals(explode(',','Осика,Осики,Осиці,Осику,Осикою,Осиці,Осико'), $this->object->q('Осика'));
    }
    public function testCrazy318()
    { 
        $this->assertEquals(explode(',','Остапенко,Остапенка,Остапенкові,Остапенка,Остапенком,Остапенкові,Остапенче'), $this->object->q('Остапенко'));
    }
    public function testCrazy319()
    { 
        $this->assertEquals(explode(',','Остроградський,Остроградського,Остроградському,Остроградського,Остроградським,Остроградському,Остроградський'), $this->object->q('Остроградський'));
    }
    public function testCrazy320()
    { 
        $this->assertEquals(explode(',','Півторак,Півторака,Півторакові,Півторака,Півтораком,Півторакові,Півтораче'), $this->object->q('Півторак'));
    }
    public function testCrazy321()
    { 
        $this->assertEquals(explode(',','Підопригора,Підопригори,Підопригорі,Підопригору,Підопригорою,Підопригорі,Підопригоро'), $this->object->q('Підопригора'));
    }
    public function testCrazy322()
    { 
        $this->assertEquals(explode(',','Павленко,Павленка,Павленкові,Павленка,Павленком,Павленкові,Павленче'), $this->object->q('Павленко'));
    }
    public function testCrazy323()
    { 
        $this->assertEquals(explode(',','Павлюк,Павлюка,Павлюкові,Павлюка,Павлюком,Павлюкові,Павлюче'), $this->object->q('Павлюк'));
    }
    public function testCrazy324()
    { 
        $this->assertEquals(explode(',','Павлюченко,Павлюченка,Павлюченкові,Павлюченка,Павлюченком,Павлюченкові,Павлюченче'), $this->object->q('Павлюченко'));
    }
    public function testCrazy325()
    { 
        $this->assertEquals(explode(',','Пазенко,Пазенка,Пазенкові,Пазенка,Пазенком,Пазенкові,Пазенче'), $this->object->q('Пазенко'));
    }
    public function testCrazy326()
    { 
        $this->assertEquals(explode(',','Паламарчук,Паламарчука,Паламарчукові,Паламарчука,Паламарчуком,Паламарчукові,Паламарчуче'), $this->object->q('Паламарчук'));
    }
    public function testCrazy327()
    { 
        $this->assertEquals(explode(',','Панас,Панаса,Панасові,Панаса,Панасом,Панасові,Панасе'), $this->object->q('Панас'));
    }
    public function testCrazy328()
    { 
        $this->assertEquals(explode(',','Панасюк,Панасюка,Панасюкові,Панасюка,Панасюком,Панасюкові,Панасюче'), $this->object->q('Панасюк'));
    }
    public function testCrazy329()
    { 
        $this->assertEquals(explode(',','Паньківський,Паньківського,Паньківському,Паньківського,Паньківським,Паньківському,Паньківський'), $this->object->q('Паньківський'));
    }
    public function testCrazy330()
    { 
        $this->assertEquals(explode(',','Пархоменко,Пархоменка,Пархоменкові,Пархоменка,Пархоменком,Пархоменкові,Пархоменче'), $this->object->q('Пархоменко'));
    }
    public function testCrazy331()
    { 
        $this->assertEquals(explode(',','Пасічник,Пасічника,Пасічникові,Пасічника,Пасічником,Пасічникові,Пасічниче'), $this->object->q('Пасічник'));
    }
    public function testCrazy332()
    { 
        $this->assertEquals(explode(',','Пасько,Паська,Паськові,Паська,Паськом,Паськові,Пасьче'), $this->object->q('Пасько'));
    }
    public function testCrazy333()
    { 
        $this->assertEquals(explode(',','Пашко,Пашка,Пашкові,Пашка,Пашком,Пашкові,Пашче'), $this->object->q('Пашко'));
    }
    public function testCrazy334()
    { 
        $this->assertEquals(explode(',','Пащенко,Пащенка,Пащенкові,Пащенка,Пащенком,Пащенкові,Пащенче'), $this->object->q('Пащенко'));
    }
    public function testCrazy335()
    { 
        $this->assertEquals(explode(',','Перебийніс,Перебийноса,Перебийносові,Перебийноса,Перебийносом,Перебийносові,Перебийносе'), $this->object->q('Перебийніс'));
    }
    public function testCrazy336()
    { 
        $this->assertEquals(explode(',','Петренко,Петренка,Петренкові,Петренка,Петренком,Петренкові,Петренче'), $this->object->q('Петренко'));
    }
    public function testCrazy337()
    { 
        $this->assertEquals(explode(',','Пилипенко,Пилипенка,Пилипенкові,Пилипенка,Пилипенком,Пилипенкові,Пилипенче'), $this->object->q('Пилипенко'));
    }
    public function testCrazy338()
    { 
        $this->assertEquals(explode(',','Пилипишин,Пилипишина,Пилипишинові,Пилипишина,Пилипишином,Пилипишинові,Пилипишине'), $this->object->q('Пилипишин'));
    }
    public function testCrazy339()
    { 
        $this->assertEquals(explode(',','Пилипчук,Пилипчука,Пилипчукові,Пилипчука,Пилипчуком,Пилипчукові,Пилипчуче'), $this->object->q('Пилипчук'));
    }
    public function testCrazy340()
    { 
        $this->assertEquals(explode(',','Писаренко,Писаренка,Писаренкові,Писаренка,Писаренком,Писаренкові,Писаренче'), $this->object->q('Писаренко'));
    }
    public function testCrazy341()
    { 
        $this->assertEquals(explode(',','Писарчук,Писарчука,Писарчукові,Писарчука,Писарчуком,Писарчукові,Писарчуче'), $this->object->q('Писарчук'));
    }
    public function testCrazy342()
    { 
        $this->assertEquals(explode(',','Плющ,Плюща,Плющеві,Плюща,Плющем,Плющеві,Плюще'), $this->object->q('Плющ'));
    }
    public function testCrazy343()
    { 
        $this->assertEquals(explode(',','Покотило,Покотила,Покотилові,Покотила,Покотилом,Покотилові,Покотиле'), $this->object->q('Покотило'));
    }
    public function testCrazy344()
    { 
        $this->assertEquals(explode(',','Поліщук,Поліщука,Поліщукові,Поліщука,Поліщуком,Поліщукові,Поліщуче'), $this->object->q('Поліщук'));
    }
    public function testCrazy345()
    { 
        $this->assertEquals(explode(',','Польовий,Польового,Польовому,Польового,Польовим,Польовому,Польовий'), $this->object->q('Польовий'));
    }
    public function testCrazy346()
    { 
        $this->assertEquals(explode(',','Полянський,Полянського,Полянському,Полянського,Полянським,Полянському,Полянський'), $this->object->q('Полянський'));
    }
    public function testCrazy347()
    { 
        $this->assertEquals(explode(',','Пономаренко,Пономаренка,Пономаренкові,Пономаренка,Пономаренком,Пономаренкові,Пономаренче'), $this->object->q('Пономаренко'));
    }
    public function testCrazy348()
    { 
        $this->assertEquals(explode(',','Пономарьов,Пономарьова,Пономарьову,Пономарьова,Пономарьовим,Пономарьову,Пономарьове'), $this->object->q('Пономарьов'));
    }
    public function testCrazy349()
    { 
        $this->assertEquals(explode(',','Попадюк,Попадюка,Попадюкові,Попадюка,Попадюком,Попадюкові,Попадюче'), $this->object->q('Попадюк'));
    }
    public function testCrazy350()
    { 
        $this->assertEquals(explode(',','Попенко,Попенка,Попенкові,Попенка,Попенком,Попенкові,Попенче'), $this->object->q('Попенко'));
    }
    public function testCrazy351()
    { 
        $this->assertEquals(explode(',','Потапенко,Потапенка,Потапенкові,Потапенка,Потапенком,Потапенкові,Потапенче'), $this->object->q('Потапенко'));
    }
    public function testCrazy352()
    { 
        $this->assertEquals(explode(',','Потебенько,Потебенька,Потебенькові,Потебенька,Потебеньком,Потебенькові,Потебеньче'), $this->object->q('Потебенько'));
    }
    public function testCrazy353()
    { 
        $this->assertEquals(explode(',','Прийма,Прийми,Приймі,Прийму,Приймою,Приймі,Приймо'), $this->object->q('Прийма'));
    }
    public function testCrazy354()
    { 
        $this->assertEquals(explode(',','Приймак,Приймака,Приймакові,Приймака,Приймаком,Приймакові,Приймаче'), $this->object->q('Приймак'));
    }
    public function testCrazy355()
    { 
        $this->assertEquals(explode(',','Присяжнюк,Присяжнюка,Присяжнюкові,Присяжнюка,Присяжнюком,Присяжнюкові,Присяжнюче'), $this->object->q('Присяжнюк'));
    }
    public function testCrazy356()
    { 
        $this->assertEquals(explode(',','Приходько,Приходька,Приходькові,Приходька,Приходьком,Приходькові,Приходьче'), $this->object->q('Приходько'));
    }
    public function testCrazy357()
    { 
        $this->assertEquals(explode(',','Продан,Продана,Проданові,Продана,Проданом,Проданові,Продане'), $this->object->q('Продан'));
    }
    public function testCrazy358()
    { 
        $this->assertEquals(explode(',','Проценко,Проценка,Проценкові,Проценка,Проценком,Проценкові,Проценче'), $this->object->q('Проценко'));
    }
    public function testCrazy359()
    { 
        $this->assertEquals(explode(',','Проць,Проця,Процеві,Проця,Процем,Процеві,Процю'), $this->object->q('Проць'));
    }
    public function testCrazy360()
    { 
        $this->assertEquals(explode(',','Процюк,Процюка,Процюкові,Процюка,Процюком,Процюкові,Процюче'), $this->object->q('Процюк'));
    }
    public function testCrazy361()
    { 
        $this->assertEquals(explode(',','Пушкар,Пушкара,Пушкарові,Пушкара,Пушкаром,Пушкарові,Пушкаре'), $this->object->q('Пушкар'));
    }
    public function testCrazy362()
    { 
        $this->assertEquals(explode(',','Різун,Різуна,Різунові,Різуна,Різуном,Різунові,Різуне'), $this->object->q('Різун'));
    }
    public function testCrazy363()
    { 
        $this->assertEquals(explode(',','Радченко,Радченка,Радченкові,Радченка,Радченком,Радченкові,Радченче'), $this->object->q('Радченко'));
    }
    public function testCrazy364()
    { 
        $this->assertEquals(explode(',','Рибальченко,Рибальченка,Рибальченкові,Рибальченка,Рибальченком,Рибальченкові,Рибальченче'), $this->object->q('Рибальченко'));
    }
    public function testCrazy365()
    { 
        $this->assertEquals(explode(',','Римар,Римара,Римарові,Римара,Римаром,Римарові,Римаре'), $this->object->q('Римар'));
    }
    public function testCrazy366()
    { 
        $this->assertEquals(explode(',','Рожок,Рожка,Рожкові,Рожка,Рожком,Рожкові,Рожче'), $this->object->q('Рожок'));
    }
    public function testCrazy367()
    { 
        $this->assertEquals(explode(',','Романенко,Романенка,Романенкові,Романенка,Романенком,Романенкові,Романенче'), $this->object->q('Романенко'));
    }
    public function testCrazy368()
    { 
        $this->assertEquals(explode(',','Романишин,Романишина,Романишинові,Романишина,Романишином,Романишинові,Романишине'), $this->object->q('Романишин'));
    }
    public function testCrazy369()
    { 
        $this->assertEquals(explode(',','Романчук,Романчука,Романчукові,Романчука,Романчуком,Романчукові,Романчуче'), $this->object->q('Романчук'));
    }
    public function testCrazy370()
    { 
        $this->assertEquals(explode(',','Романюк,Романюка,Романюкові,Романюка,Романюком,Романюкові,Романюче'), $this->object->q('Романюк'));
    }
    public function testCrazy371()
    { 
        $this->assertEquals(explode(',','Рошкевич,Рошкевича,Рошкевичеві,Рошкевича,Рошкевичем,Рошкевичеві,Рошкевиче'), $this->object->q('Рошкевич'));
    }
    public function testCrazy372()
    { 
        $this->assertEquals(explode(',','Рубан,Рубана,Рубанові,Рубана,Рубаном,Рубанові,Рубане'), $this->object->q('Рубан'));
    }
    public function testCrazy373()
    { 
        $this->assertEquals(explode(',','Руденко,Руденка,Руденкові,Руденка,Руденком,Руденкові,Руденче'), $this->object->q('Руденко'));
    }
    public function testCrazy374()
    { 
        $this->assertEquals(explode(',','Рябовіл,Рябовола,Рябоволові,Рябовола,Рябоволом,Рябоволові,Рябоволе'), $this->object->q('Рябовіл'));
    }
    public function testCrazy375()
    { 
        $this->assertEquals(explode(',','Сімашкевич,Сімашкевича,Сімашкевичеві,Сімашкевича,Сімашкевичем,Сімашкевичеві,Сімашкевиче'), $this->object->q('Сімашкевич'));
    }
    public function testCrazy376()
    { 
        $this->assertEquals(explode(',','Саєнко,Саєнка,Саєнкові,Саєнка,Саєнком,Саєнкові,Саєнче'), $this->object->q('Саєнко'));
    }
    public function testCrazy377()
    { 
        $this->assertEquals(explode(',','Савенко,Савенка,Савенкові,Савенка,Савенком,Савенкові,Савенче'), $this->object->q('Савенко'));
    }
    public function testCrazy378()
    { 
        $this->assertEquals(explode(',','Савицька,Савицьки,Савицьці,Савицьку,Савицькою,Савицьці,Савицько'), $this->object->q('Савицька'));
    }
    public function testCrazy379()
    { 
        $this->assertEquals(explode(',','Савка,Савки,Савці,Савку,Савкою,Савці,Савко'), $this->object->q('Савка'));
    }
    public function testCrazy380()
    { 
        $this->assertEquals(explode(',','Савченко,Савченка,Савченкові,Савченка,Савченком,Савченкові,Савченче'), $this->object->q('Савченко'));
    }
    public function testCrazy381()
    { 
        $this->assertEquals(explode(',','Савчук,Савчука,Савчукові,Савчука,Савчуком,Савчукові,Савчуче'), $this->object->q('Савчук'));
    }
    public function testCrazy382()
    { 
        $this->assertEquals(explode(',','Сак,Сака,Сакові,Сака,Саком,Сакові,Саче'), $this->object->q('Сак'));
    }
    public function testCrazy383()
    { 
        $this->assertEquals(explode(',','Самборський,Самборського,Самборському,Самборського,Самборським,Самборському,Самборський'), $this->object->q('Самборський'));
    }
    public function testCrazy384()
    { 
        $this->assertEquals(explode(',','Самойлович,Самойловича,Самойловичеві,Самойловича,Самойловичем,Самойловичеві,Самойловиче'), $this->object->q('Самойлович'));
    }
    public function testCrazy385()
    { 
        $this->assertEquals(explode(',','Самусь,Самуся,Самусеві,Самуся,Самусем,Самусеві,Самусю'), $this->object->q('Самусь'));
    }
    public function testCrazy386()
    { 
        $this->assertEquals(explode(',','Свида,Свиди,Свиді,Свиду,Свидою,Свиді,Свидо'), $this->object->q('Свида'));
    }
    public function testCrazy387()
    { 
        $this->assertEquals(explode(',','Семашко,Семашка,Семашкові,Семашка,Семашком,Семашкові,Семашче'), $this->object->q('Семашко'));
    }
    public function testCrazy388()
    { 
        $this->assertEquals(explode(',','Семененко,Семененка,Семененкові,Семененка,Семененком,Семененкові,Семененче'), $this->object->q('Семененко'));
    }
    public function testCrazy389()
    { 
        $this->assertEquals(explode(',','Семенець,Семенця,Семенцеві,Семенця,Семенцем,Семенцеві,Семенцю'), $this->object->q('Семенець'));
    }
    public function testCrazy390()
    { 
        $this->assertEquals(explode(',','Семенина,Семенини,Семенині,Семенину,Семениною,Семенині,Семенино'), $this->object->q('Семенина'));
    }
    public function testCrazy391()
    { 
        $this->assertEquals(explode(',','Семенченко,Семенченка,Семенченкові,Семенченка,Семенченком,Семенченкові,Семенченче'), $this->object->q('Семенченко'));
    }
    public function testCrazy392()
    { 
        $this->assertEquals(explode(',','Семенюк,Семенюка,Семенюкові,Семенюка,Семенюком,Семенюкові,Семенюче'), $this->object->q('Семенюк'));
    }
    public function testCrazy393()
    { 
        $this->assertEquals(explode(',','Семеренко,Семеренка,Семеренкові,Семеренка,Семеренком,Семеренкові,Семеренче'), $this->object->q('Семеренко'));
    }
    public function testCrazy394()
    { 
        $this->assertEquals(explode(',','Сидоренко,Сидоренка,Сидоренкові,Сидоренка,Сидоренком,Сидоренкові,Сидоренче'), $this->object->q('Сидоренко'));
    }
    public function testCrazy395()
    { 
        $this->assertEquals(explode(',','Силенко,Силенка,Силенкові,Силенка,Силенком,Силенкові,Силенче'), $this->object->q('Силенко'));
    }
    public function testCrazy396()
    { 
        $this->assertEquals(explode(',','Симоненко,Симоненка,Симоненкові,Симоненка,Симоненком,Симоненкові,Симоненче'), $this->object->q('Симоненко'));
    }
    public function testCrazy397()
    { 
        $this->assertEquals(explode(',','Симчич,Симчича,Симчичеві,Симчича,Симчичем,Симчичеві,Симчиче'), $this->object->q('Симчич'));
    }
    public function testCrazy398()
    { 
        $this->assertEquals(explode(',','Скрипник,Скрипника,Скрипникові,Скрипника,Скрипником,Скрипникові,Скрипниче'), $this->object->q('Скрипник'));
    }
    public function testCrazy399()
    { 
        $this->assertEquals(explode(',','Скуратівський,Скуратівського,Скуратівському,Скуратівського,Скуратівським,Скуратівському,Скуратівський'), $this->object->q('Скуратівський'));
    }
    public function testCrazy400()
    { 
        $this->assertEquals(explode(',','Слободян,Слободяна,Слободянові,Слободяна,Слободяном,Слободянові,Слободяне'), $this->object->q('Слободян'));
    }
    public function testCrazy401()
    { 
        $this->assertEquals(explode(',','Слободянюк,Слободянюка,Слободянюкові,Слободянюка,Слободянюком,Слободянюкові,Слободянюче'), $this->object->q('Слободянюк'));
    }
    public function testCrazy402()
    { 
        $this->assertEquals(explode(',','Смик,Смика,Смикові,Смика,Смиком,Смикові,Смиче'), $this->object->q('Смик'));
    }
    public function testCrazy403()
    { 
        $this->assertEquals(explode(',','Смогоржевський,Смогоржевського,Смогоржевському,Смогоржевського,Смогоржевським,Смогоржевському,Смогоржевський'), $this->object->q('Смогоржевський'));
    }
    public function testCrazy404()
    { 
        $this->assertEquals(explode(',','Собчук,Собчука,Собчукові,Собчука,Собчуком,Собчукові,Собчуче'), $this->object->q('Собчук'));
    }
    public function testCrazy405()
    { 
        $this->assertEquals(explode(',','Сопронюк,Сопронюка,Сопронюкові,Сопронюка,Сопронюком,Сопронюкові,Сопронюче'), $this->object->q('Сопронюк'));
    }
    public function testCrazy406()
    { 
        $this->assertEquals(explode(',','Сорока,Сороки,Сороці,Сороку,Сорокою,Сороці,Сороко'), $this->object->q('Сорока'));
    }
    public function testCrazy407()
    { 
        $this->assertEquals(explode(',','Сохань,Соханя,Соханеві,Соханя,Соханем,Соханеві,Соханю'), $this->object->q('Сохань'));
    }
    public function testCrazy408()
    { 
        $this->assertEquals(explode(',','Стадник,Стадника,Стадникові,Стадника,Стадником,Стадникові,Стадниче'), $this->object->q('Стадник'));
    }
    public function testCrazy409()
    { 
        $this->assertEquals(explode(',','Стельмах,Стельмаха,Стельмахові,Стельмаха,Стельмахом,Стельмахові,Стельмахе'), $this->object->q('Стельмах'));
    }
    public function testCrazy410()
    { 
        $this->assertEquals(explode(',','Степаненко,Степаненка,Степаненкові,Степаненка,Степаненком,Степаненкові,Степаненче'), $this->object->q('Степаненко'));
    }
    public function testCrazy411()
    { 
        $this->assertEquals(explode(',','Степура,Степури,Степурі,Степуру,Степурою,Степурі,Степуро'), $this->object->q('Степура'));
    }
    public function testCrazy412()
    { 
        $this->assertEquals(explode(',','Стеценко,Стеценка,Стеценкові,Стеценка,Стеценком,Стеценкові,Стеценче'), $this->object->q('Стеценко'));
    }
    public function testCrazy413()
    { 
        $this->assertEquals(explode(',','Стецюк,Стецюка,Стецюкові,Стецюка,Стецюком,Стецюкові,Стецюче'), $this->object->q('Стецюк'));
    }
    public function testCrazy414()
    { 
        $this->assertEquals(explode(',','Струтинський,Струтинського,Струтинському,Струтинського,Струтинським,Струтинському,Струтинський'), $this->object->q('Струтинський'));
    }
    public function testCrazy415()
    { 
        $this->assertEquals(explode(',','Сулима,Сулими,Сулимі,Сулиму,Сулимою,Сулимі,Сулимо'), $this->object->q('Сулима'));
    }
    public function testCrazy416()
    { 
        $this->assertEquals(explode(',','Супруненко,Супруненка,Супруненкові,Супруненка,Супруненком,Супруненкові,Супруненче'), $this->object->q('Супруненко'));
    }
    public function testCrazy417()
    { 
        $this->assertEquals(explode(',','Тараненко,Тараненка,Тараненкові,Тараненка,Тараненком,Тараненкові,Тараненче'), $this->object->q('Тараненко'));
    }
    public function testCrazy418()
    { 
        $this->assertEquals(explode(',','Татаренко,Татаренка,Татаренкові,Татаренка,Татаренком,Татаренкові,Татаренче'), $this->object->q('Татаренко'));
    }
    public function testCrazy419()
    { 
        $this->assertEquals(explode(',','Теплицький,Теплицького,Теплицькому,Теплицького,Теплицьким,Теплицькому,Теплицький'), $this->object->q('Теплицький'));
    }
    public function testCrazy420()
    { 
        $this->assertEquals(explode(',','Терещенко,Терещенка,Терещенкові,Терещенка,Терещенком,Терещенкові,Терещенче'), $this->object->q('Терещенко'));
    }
    public function testCrazy421()
    { 
        $this->assertEquals(explode(',','Терещук,Терещука,Терещукові,Терещука,Терещуком,Терещукові,Терещуче'), $this->object->q('Терещук'));
    }
    public function testCrazy422()
    { 
        $this->assertEquals(explode(',','Тесленко,Тесленка,Тесленкові,Тесленка,Тесленком,Тесленкові,Тесленче'), $this->object->q('Тесленко'));
    }
    public function testCrazy423()
    { 
        $this->assertEquals(explode(',','Тимошенко,Тимошенка,Тимошенкові,Тимошенка,Тимошенком,Тимошенкові,Тимошенче'), $this->object->q('Тимошенко'));
    }
    public function testCrazy424()
    { 
        $this->assertEquals(explode(',','Тимощук,Тимощука,Тимощукові,Тимощука,Тимощуком,Тимощукові,Тимощуче'), $this->object->q('Тимощук'));
    }
    public function testCrazy425()
    { 
        $this->assertEquals(explode(',','Тимчак,Тимчака,Тимчакові,Тимчака,Тимчаком,Тимчакові,Тимчаче'), $this->object->q('Тимчак'));
    }
    public function testCrazy426()
    { 
        $this->assertEquals(explode(',','Титаренко,Титаренка,Титаренкові,Титаренка,Титаренком,Титаренкові,Титаренче'), $this->object->q('Титаренко'));
    }
    public function testCrazy427()
    { 
        $this->assertEquals(explode(',','Тищенко,Тищенка,Тищенкові,Тищенка,Тищенком,Тищенкові,Тищенче'), $this->object->q('Тищенко'));
    }
    public function testCrazy428()
    { 
        $this->assertEquals(explode(',','Ткач,Ткача,Ткачеві,Ткача,Ткачем,Ткачеві,Ткаче'), $this->object->q('Ткач'));
    }
    public function testCrazy429()
    { 
        $this->assertEquals(explode(',','Ткаченко,Ткаченка,Ткаченкові,Ткаченка,Ткаченком,Ткаченкові,Ткаченче'), $this->object->q('Ткаченко'));
    }
    public function testCrazy430()
    { 
        $this->assertEquals(explode(',','Ткачук,Ткачука,Ткачукові,Ткачука,Ткачуком,Ткачукові,Ткачуче'), $this->object->q('Ткачук'));
    }
    public function testCrazy431()
    { 
        $this->assertEquals(explode(',','Толочко,Толочка,Толочкові,Толочка,Толочком,Толочкові,Толочче'), $this->object->q('Толочко'));
    }
    public function testCrazy432()
    { 
        $this->assertEquals(explode(',','Томенко,Томенка,Томенкові,Томенка,Томенком,Томенкові,Томенче'), $this->object->q('Томенко'));
    }
    public function testCrazy433()
    { 
        $this->assertEquals(explode(',','Тулуб,Тулуба,Тулубові,Тулуба,Тулубом,Тулубові,Тулубе'), $this->object->q('Тулуб'));
    }
    public function testCrazy434()
    { 
        $this->assertEquals(explode(',','Удовенко,Удовенка,Удовенкові,Удовенка,Удовенком,Удовенкові,Удовенче'), $this->object->q('Удовенко'));
    }
    public function testCrazy435()
    { 
        $this->assertEquals(explode(',','Удовиченко,Удовиченка,Удовиченкові,Удовиченка,Удовиченком,Удовиченкові,Удовиченче'), $this->object->q('Удовиченко'));
    }
    public function testCrazy436()
    { 
        $this->assertEquals(explode(',','Усенко,Усенка,Усенкові,Усенка,Усенком,Усенкові,Усенче'), $this->object->q('Усенко'));
    }
    public function testCrazy437()
    { 
        $this->assertEquals(explode(',','Філоненко,Філоненка,Філоненкові,Філоненка,Філоненком,Філоненкові,Філоненче'), $this->object->q('Філоненко'));
    }
    public function testCrazy438()
    { 
        $this->assertEquals(explode(',','Феденко,Феденка,Феденкові,Феденка,Феденком,Феденкові,Феденче'), $this->object->q('Феденко'));
    }
    public function testCrazy439()
    { 
        $this->assertEquals(explode(',','Федоренко,Федоренка,Федоренкові,Федоренка,Федоренком,Федоренкові,Федоренче'), $this->object->q('Федоренко'));
    }
    public function testCrazy440()
    { 
        $this->assertEquals(explode(',','Федорук,Федорука,Федорукові,Федорука,Федоруком,Федорукові,Федоруче'), $this->object->q('Федорук'));
    }
    public function testCrazy441()
    { 
        $this->assertEquals(explode(',','Фещенко,Фещенка,Фещенкові,Фещенка,Фещенком,Фещенкові,Фещенче'), $this->object->q('Фещенко'));
    }
    public function testCrazy442()
    { 
        $this->assertEquals(explode(',','Фоменко,Фоменка,Фоменкові,Фоменка,Фоменком,Фоменкові,Фоменче'), $this->object->q('Фоменко'));
    }
    public function testCrazy443()
    { 
        $this->assertEquals(explode(',','Ханенко,Ханенка,Ханенкові,Ханенка,Ханенком,Ханенкові,Ханенче'), $this->object->q('Ханенко'));
    }
    public function testCrazy444()
    { 
        $this->assertEquals(explode(',','Харчук,Харчука,Харчукові,Харчука,Харчуком,Харчукові,Харчуче'), $this->object->q('Харчук'));
    }
    public function testCrazy445()
    { 
        $this->assertEquals(explode(',','Хміляр,Хміляра,Хмілярові,Хміляра,Хміляром,Хмілярові,Хміляре'), $this->object->q('Хміляр'));
    }
    public function testCrazy446()
    { 
        $this->assertEquals(explode(',','Хмара,Хмари,Хмарі,Хмару,Хмарою,Хмарі,Хмаро'), $this->object->q('Хмара'));
    }
    public function testCrazy447()
    { 
        $this->assertEquals(explode(',','Холодовський,Холодовського,Холодовському,Холодовського,Холодовським,Холодовському,Холодовський'), $this->object->q('Холодовський'));
    }
    public function testCrazy448()
    { 
        $this->assertEquals(explode(',','Хоменко,Хоменка,Хоменкові,Хоменка,Хоменком,Хоменкові,Хоменче'), $this->object->q('Хоменко'));
    }
    public function testCrazy449()
    { 
        $this->assertEquals(explode(',','Царук,Царука,Царукові,Царука,Царуком,Царукові,Царуче'), $this->object->q('Царук'));
    }
    public function testCrazy450()
    { 
        $this->assertEquals(explode(',','Цибуленко,Цибуленка,Цибуленкові,Цибуленка,Цибуленком,Цибуленкові,Цибуленче'), $this->object->q('Цибуленко'));
    }
    public function testCrazy451()
    { 
        $this->assertEquals(explode(',','Цюпа,Цюпи,Цюпі,Цюпу,Цюпою,Цюпі,Цюпо'), $this->object->q('Цюпа'));
    }
    public function testCrazy452()
    { 
        $this->assertEquals(explode(',','Чабаненко,Чабаненка,Чабаненкові,Чабаненка,Чабаненком,Чабаненкові,Чабаненче'), $this->object->q('Чабаненко'));
    }
    public function testCrazy453()
    { 
        $this->assertEquals(explode(',','Чанов,Чанова,Чанову,Чанова,Чановим,Чанову,Чанове'), $this->object->q('Чанов'));
    }
    public function testCrazy454()
    { 
        $this->assertEquals(explode(',','Чередниченко,Чередниченка,Чередниченкові,Чередниченка,Чередниченком,Чередниченкові,Чередниченче'), $this->object->q('Чередниченко'));
    }
    public function testCrazy455()
    { 
        $this->assertEquals(explode(',','Чернявський,Чернявського,Чернявському,Чернявського,Чернявським,Чернявському,Чернявський'), $this->object->q('Чернявський'));
    }
    public function testCrazy456()
    { 
        $this->assertEquals(explode(',','Чорний,Чорного,Чорному,Чорного,Чорним,Чорному,Чорний'), $this->object->q('Чорний'));
    }
    public function testCrazy457()
    { 
        $this->assertEquals(explode(',','Чорновіл,Чорновола,Чорноволові,Чорновола,Чорноволом,Чорноволові,Чорноволе'), $this->object->q('Чорновіл'));
    }
    public function testCrazy458()
    { 
        $this->assertEquals(explode(',','Чуйкевич,Чуйкевича,Чуйкевичеві,Чуйкевича,Чуйкевичем,Чуйкевичеві,Чуйкевиче'), $this->object->q('Чуйкевич'));
    }
    public function testCrazy459()
    { 
        $this->assertEquals(explode(',','Чумак,Чумака,Чумакові,Чумака,Чумаком,Чумакові,Чумаче'), $this->object->q('Чумак'));
    }
    public function testCrazy460()
    { 
        $this->assertEquals(explode(',','Чумаченко,Чумаченка,Чумаченкові,Чумаченка,Чумаченком,Чумаченкові,Чумаченче'), $this->object->q('Чумаченко'));
    }
    public function testCrazy461()
    { 
        $this->assertEquals(explode(',','Шахрай,Шахрая,Шахраєві,Шахрая,Шахраєм,Шахраєві,Шахраю'), $this->object->q('Шахрай'));
    }
    public function testCrazy462()
    { 
        $this->assertEquals(explode(',','Шевченко,Шевченка,Шевченкові,Шевченка,Шевченком,Шевченкові,Шевченче'), $this->object->q('Шевченко'));
    }
    public function testCrazy463()
    { 
        $this->assertEquals(explode(',','Шевчук,Шевчука,Шевчукові,Шевчука,Шевчуком,Шевчукові,Шевчуче'), $this->object->q('Шевчук'));
    }
    public function testCrazy464()
    { 
        $this->assertEquals(explode(',','Шелест,Шелеста,Шелестові,Шелеста,Шелестом,Шелестові,Шелесте'), $this->object->q('Шелест'));
    }
    public function testCrazy465()
    { 
        $this->assertEquals(explode(',','Шинкарук,Шинкарука,Шинкарукові,Шинкарука,Шинкаруком,Шинкарукові,Шинкаруче'), $this->object->q('Шинкарук'));
    }
    public function testCrazy466()
    { 
        $this->assertEquals(explode(',','Шкрібляк,Шкрібляка,Шкріблякові,Шкрібляка,Шкрібляком,Шкріблякові,Шкрібляче'), $this->object->q('Шкрібляк'));
    }
    public function testCrazy467()
    { 
        $this->assertEquals(explode(',','Шнайдер,Шнайдера,Шнайдерові,Шнайдера,Шнайдером,Шнайдерові,Шнайдере'), $this->object->q('Шнайдер'));
    }
    public function testCrazy468()
    { 
        $this->assertEquals(explode(',','Шовкопляс,Шовкопляса,Шовкоплясові,Шовкопляса,Шовкоплясом,Шовкоплясові,Шовкоплясе'), $this->object->q('Шовкопляс'));
    }
    public function testCrazy469()
    { 
        $this->assertEquals(explode(',','Шульга,Шульги,Шульзі,Шульгу,Шульгою,Шульзі,Шульго'), $this->object->q('Шульга'));
    }
    public function testCrazy470()
    { 
        $this->assertEquals(explode(',','Шухевич,Шухевича,Шухевичеві,Шухевича,Шухевичем,Шухевичеві,Шухевиче'), $this->object->q('Шухевич'));
    }
    public function testCrazy471()
    { 
        $this->assertEquals(explode(',','Щерба,Щерби,Щербі,Щербу,Щербою,Щербі,Щербо'), $this->object->q('Щерба'));
    }
    public function testCrazy472()
    { 
        $this->assertEquals(explode(',','Щербак,Щербака,Щербакові,Щербака,Щербаком,Щербакові,Щербаче'), $this->object->q('Щербак'));
    }
    public function testCrazy473()
    { 
        $this->assertEquals(explode(',','Щербань,Щербаня,Щербаневі,Щербаня,Щербанем,Щербаневі,Щербаню'), $this->object->q('Щербань'));
    }
    public function testCrazy474()
    { 
        $this->assertEquals(explode(',','Юрженко,Юрженка,Юрженкові,Юрженка,Юрженком,Юрженкові,Юрженче'), $this->object->q('Юрженко'));
    }
    public function testCrazy475()
    { 
        $this->assertEquals(explode(',','Юрченко,Юрченка,Юрченкові,Юрченка,Юрченком,Юрченкові,Юрченче'), $this->object->q('Юрченко'));
    }
    public function testCrazy476()
    { 
        $this->assertEquals(explode(',','Юрчишин,Юрчишина,Юрчишинові,Юрчишина,Юрчишином,Юрчишинові,Юрчишине'), $this->object->q('Юрчишин'));
    }
    public function testCrazy477()
    { 
        $this->assertEquals(explode(',','Юхименко,Юхименка,Юхименкові,Юхименка,Юхименком,Юхименкові,Юхименче'), $this->object->q('Юхименко'));
    }
    public function testCrazy478()
    { 
        $this->assertEquals(explode(',','Ющенко,Ющенка,Ющенкові,Ющенка,Ющенком,Ющенкові,Ющенче'), $this->object->q('Ющенко'));
    }
    public function testCrazy479()
    { 
        $this->assertEquals(explode(',','Яковенко,Яковенка,Яковенкові,Яковенка,Яковенком,Яковенкові,Яковенче'), $this->object->q('Яковенко'));
    }
    public function testCrazy480()
    { 
        $this->assertEquals(explode(',','Яковина,Яковини,Яковині,Яковину,Яковиною,Яковині,Яковино'), $this->object->q('Яковина'));
    }
    public function testCrazy481()
    { 
        $this->assertEquals(explode(',','Янко,Янка,Янкові,Янка,Янком,Янкові,Янче'), $this->object->q('Янко'));
    }
    public function testCrazy482()
    { 
        $this->assertEquals(explode(',','Ярема,Яреми,Яремі,Ярему,Яремою,Яремі,Яремо'), $this->object->q('Ярема'));
    }
    public function testCrazy483()
    { 
        $this->assertEquals(explode(',','Яременко,Яременка,Яременкові,Яременка,Яременком,Яременкові,Яременче'), $this->object->q('Яременко'));
    }
    public function testCrazy484()
    { 
        $this->assertEquals(explode(',','Яремко,Яремка,Яремкові,Яремка,Яремком,Яремкові,Яремче'), $this->object->q('Яремко'));
    }
    public function testCrazy485()
    { 
        $this->assertEquals(explode(',','Яремчук,Яремчука,Яремчукові,Яремчука,Яремчуком,Яремчукові,Яремчуче'), $this->object->q('Яремчук'));
    }
    public function testCrazy486()
    { 
        $this->assertEquals(explode(',','Ярмоленко,Ярмоленка,Ярмоленкові,Ярмоленка,Ярмоленком,Ярмоленкові,Ярмоленче'), $this->object->q('Ярмоленко'));
    }
    public function testCrazy487()
    { 
        $this->assertEquals(explode(',','Ярмолюк,Ярмолюка,Ярмолюкові,Ярмолюка,Ярмолюком,Ярмолюкові,Ярмолюче'), $this->object->q('Ярмолюк'));
    }
    public function testCrazy488()
    { 
        $this->assertEquals(explode(',','Ярошенко,Ярошенка,Ярошенкові,Ярошенка,Ярошенком,Ярошенкові,Ярошенче'), $this->object->q('Ярошенко'));
    }
    public function testCrazy489()
    { 
        $this->assertEquals(explode(',','Яценко,Яценка,Яценкові,Яценка,Яценком,Яценкові,Яценче'), $this->object->q('Яценко'));
    }
    public function testCrazy490()
    { 
        $this->assertEquals(explode(',','Ященко,Ященка,Ященкові,Ященка,Ященком,Ященкові,Ященче'), $this->object->q('Ященко'));
    }
    public function testCrazy491()
    { 
        $this->assertEquals(explode(',','Ґалаґан,Ґалаґана,Ґалаґанові,Ґалаґана,Ґалаґаном,Ґалаґанові,Ґалаґане'), $this->object->q('Ґалаґан'));
    }
    public function testCrazy492()
    { 
        $this->assertEquals(explode(',','Євсєєв,Євсєєва,Євсєєву,Євсєєва,Євсєєвим,Євсєєву,Євсєєве'), $this->object->q('Євсєєв'));
    }
    public function testCrazy493()
    { 
        $this->assertEquals(explode(',','Єгоров,Єгорова,Єгорову,Єгорова,Єгоровим,Єгорову,Єгорове'), $this->object->q('Єгоров'));
    }
    public function testCrazy494()
    { 
        $this->assertEquals(explode(',','Єлізаров,Єлізарова,Єлізарову,Єлізарова,Єлізаровим,Єлізарову,Єлізарове'), $this->object->q('Єлізаров'));
    }
    public function testCrazy495()
    { 
        $this->assertEquals(explode(',','Єрмилов,Єрмилова,Єрмилову,Єрмилова,Єрмиловим,Єрмилову,Єрмилове'), $this->object->q('Єрмилов'));
    }
    public function testCrazy496()
    { 
        $this->assertEquals(explode(',','Єрофєєв,Єрофєєва,Єрофєєву,Єрофєєва,Єрофєєвим,Єрофєєву,Єрофєєве'), $this->object->q('Єрофєєв'));
    }
    public function testCrazy497()
    { 
        $this->assertEquals(explode(',','Єршов,Єршова,Єршову,Єршова,Єршовим,Єршову,Єршове'), $this->object->q('Єршов'));
    }
    public function testCrazy498()
    { 
        $this->assertEquals(explode(',','Єфімов,Єфімова,Єфімову,Єфімова,Єфімовим,Єфімову,Єфімове'), $this->object->q('Єфімов'));
    }
    public function testCrazy499()
    { 
        $this->assertEquals(explode(',','Єфремов,Єфремова,Єфремову,Єфремова,Єфремовим,Єфремову,Єфремове'), $this->object->q('Єфремов'));
    }
    public function testCrazy500()
    { 
        $this->assertEquals(explode(',','Іванов,Іванова,Іванову,Іванова,Івановим,Іванову,Іванове'), $this->object->q('Іванов'));
    }
    public function testCrazy501()
    { 
        $this->assertEquals(explode(',','Ігнатов,Ігнатова,Ігнатову,Ігнатова,Ігнатовим,Ігнатову,Ігнатове'), $this->object->q('Ігнатов'));
    }
    public function testCrazy502()
    { 
        $this->assertEquals(explode(',','Іллюшин,Іллюшина,Іллюшинові,Іллюшина,Іллюшином,Іллюшинові,Іллюшине'), $this->object->q('Іллюшин'));
    }
    public function testCrazy503()
    { 
        $this->assertEquals(explode(',','Ільїн,Ільїна,Ільїнові,Ільїна,Ільїном,Ільїнові,Ільїне'), $this->object->q('Ільїн'));
    }
    public function testCrazy504()
    { 
        $this->assertEquals(explode(',','Аєдоницький,Аєдоницького,Аєдоницькому,Аєдоницького,Аєдоницьким,Аєдоницькому,Аєдоницький'), $this->object->q('Аєдоницький'));
    }
    public function testCrazy505()
    { 
        $this->assertEquals(explode(',','Абатуров,Абатурова,Абатурову,Абатурова,Абатуровим,Абатурову,Абатурове'), $this->object->q('Абатуров'));
    }
    public function testCrazy506()
    { 
        $this->assertEquals(explode(',','Абдулов,Абдулова,Абдулову,Абдулова,Абдуловим,Абдулову,Абдулове'), $this->object->q('Абдулов'));
    }
    public function testCrazy507()
    { 
        $this->assertEquals(explode(',','Абрамов,Абрамова,Абрамову,Абрамова,Абрамовим,Абрамову,Абрамове'), $this->object->q('Абрамов'));
    }
    public function testCrazy508()
    { 
        $this->assertEquals(explode(',','Авілов,Авілова,Авілову,Авілова,Авіловим,Авілову,Авілове'), $this->object->q('Авілов'));
    }
    public function testCrazy509()
    { 
        $this->assertEquals(explode(',','Авдєєнко,Авдєєнка,Авдєєнкові,Авдєєнка,Авдєєнком,Авдєєнкові,Авдєєнче'), $this->object->q('Авдєєнко'));
    }
    public function testCrazy510()
    { 
        $this->assertEquals(explode(',','Аврамов,Аврамова,Аврамову,Аврамова,Аврамовим,Аврамову,Аврамове'), $this->object->q('Аврамов'));
    }
    public function testCrazy511()
    { 
        $this->assertEquals(explode(',','Алексєєв,Алексєєва,Алексєєву,Алексєєва,Алексєєвим,Алексєєву,Алексєєве'), $this->object->q('Алексєєв'));
    }
    public function testCrazy512()
    { 
        $this->assertEquals(explode(',','Александров,Александрова,Александрову,Александрова,Александровим,Александрову,Александрове'), $this->object->q('Александров'));
    }
    public function testCrazy513()
    { 
        $this->assertEquals(explode(',','Альошин,Альошина,Альошинові,Альошина,Альошином,Альошинові,Альошине'), $this->object->q('Альошин'));
    }
    public function testCrazy514()
    { 
        $this->assertEquals(explode(',','Анісімов,Анісімова,Анісімову,Анісімова,Анісімовим,Анісімову,Анісімове'), $this->object->q('Анісімов'));
    }
    public function testCrazy515()
    { 
        $this->assertEquals(explode(',','Анісов,Анісова,Анісову,Анісова,Анісовим,Анісову,Анісове'), $this->object->q('Анісов'));
    }
    public function testCrazy516()
    { 
        $this->assertEquals(explode(',','Ананьєв,Ананьєва,Ананьєву,Ананьєва,Ананьєвим,Ананьєву,Ананьєве'), $this->object->q('Ананьєв'));
    }
    public function testCrazy517()
    { 
        $this->assertEquals(explode(',','Андріанов,Андріанова,Андріанову,Андріанова,Андріановим,Андріанову,Андріанове'), $this->object->q('Андріанов'));
    }
    public function testCrazy518()
    { 
        $this->assertEquals(explode(',','Андріяшев,Андріяшева,Андріяшеву,Андріяшева,Андріяшевим,Андріяшеву,Андріяшеве'), $this->object->q('Андріяшев'));
    }
    public function testCrazy519()
    { 
        $this->assertEquals(explode(',','Андреєв,Андреєва,Андреєву,Андреєва,Андреєвим,Андреєву,Андреєве'), $this->object->q('Андреєв'));
    }
    public function testCrazy520()
    { 
        $this->assertEquals(explode(',','Антипов,Антипова,Антипову,Антипова,Антиповим,Антипову,Антипове'), $this->object->q('Антипов'));
    }
    public function testCrazy521()
    { 
        $this->assertEquals(explode(',','Антонов,Антонова,Антонову,Антонова,Антоновим,Антонову,Антонове'), $this->object->q('Антонов'));
    }
    public function testCrazy522()
    { 
        $this->assertEquals(explode(',','Анциферов,Анциферова,Анциферову,Анциферова,Анциферовим,Анциферову,Анциферове'), $this->object->q('Анциферов'));
    }
    public function testCrazy523()
    { 
        $this->assertEquals(explode(',','Апухтін,Апухтіна,Апухтіну,Апухтіна,Апухтіном,Апухтіну,Апухтіне'), $this->object->q('Апухтін'));
    }
    public function testCrazy524()
    { 
        $this->assertEquals(explode(',','Арбузов,Арбузова,Арбузову,Арбузова,Арбузовим,Арбузову,Арбузове'), $this->object->q('Арбузов'));
    }
    public function testCrazy525()
    { 
        $this->assertEquals(explode(',','Аржанов,Аржанова,Аржанову,Аржанова,Аржановим,Аржанову,Аржанове'), $this->object->q('Аржанов'));
    }
    public function testCrazy526()
    { 
        $this->assertEquals(explode(',','Архипов,Архипова,Архипову,Архипова,Архиповим,Архипову,Архипове'), $this->object->q('Архипов'));
    }
    public function testCrazy527()
    { 
        $this->assertEquals(explode(',','Арцибушев,Арцибушева,Арцибушеву,Арцибушева,Арцибушевим,Арцибушеву,Арцибушеве'), $this->object->q('Арцибушев'));
    }
    public function testCrazy528()
    { 
        $this->assertEquals(explode(',','Астраханцев,Астраханцева,Астраханцеву,Астраханцева,Астраханцевим,Астраханцеву,Астраханцеве'), $this->object->q('Астраханцев'));
    }
    public function testCrazy529()
    { 
        $this->assertEquals(explode(',','Афіногенов,Афіногенова,Афіногенову,Афіногенова,Афіногеновим,Афіногенову,Афіногенове'), $this->object->q('Афіногенов'));
    }
    public function testCrazy530()
    { 
        $this->assertEquals(explode(',','Афанасьєв,Афанасьєва,Афанасьєву,Афанасьєва,Афанасьєвим,Афанасьєву,Афанасьєве'), $this->object->q('Афанасьєв'));
    }
    public function testCrazy531()
    { 
        $this->assertEquals(explode(',','Бєлов,Бєлова,Бєлову,Бєлова,Бєловим,Бєлову,Бєлове'), $this->object->q('Бєлов'));
    }
    public function testCrazy532()
    { 
        $this->assertEquals(explode(',','Бєлоглазов,Бєлоглазова,Бєлоглазову,Бєлоглазова,Бєлоглазовим,Бєлоглазову,Бєлоглазове'), $this->object->q('Бєлоглазов'));
    }
    public function testCrazy533()
    { 
        $this->assertEquals(explode(',','Бєлоусов,Бєлоусова,Бєлоусову,Бєлоусова,Бєлоусовим,Бєлоусову,Бєлоусове'), $this->object->q('Бєлоусов'));
    }
    public function testCrazy534()
    { 
        $this->assertEquals(explode(',','Бєляєв,Бєляєва,Бєляєву,Бєляєва,Бєляєвим,Бєляєву,Бєляєве'), $this->object->q('Бєляєв'));
    }
    public function testCrazy535()
    { 
        $this->assertEquals(explode(',','Бібиков,Бібикова,Бібикову,Бібикова,Бібиковим,Бібикову,Бібикове'), $this->object->q('Бібиков'));
    }
    public function testCrazy536()
    { 
        $this->assertEquals(explode(',','Бажанов,Бажанова,Бажанову,Бажанова,Бажановим,Бажанову,Бажанове'), $this->object->q('Бажанов'));
    }
    public function testCrazy537()
    { 
        $this->assertEquals(explode(',','Баранов,Баранова,Баранову,Баранова,Барановим,Баранову,Баранове'), $this->object->q('Баранов'));
    }
    public function testCrazy538()
    { 
        $this->assertEquals(explode(',','Баришніков,Баришнікова,Баришнікову,Баришнікова,Баришніковим,Баришнікову,Баришнікове'), $this->object->q('Баришніков'));
    }
    public function testCrazy539()
    { 
        $this->assertEquals(explode(',','Барсов,Барсова,Барсову,Барсова,Барсовим,Барсову,Барсове'), $this->object->q('Барсов'));
    }
    public function testCrazy540()
    { 
        $this->assertEquals(explode(',','Батюшков,Батюшкова,Батюшкову,Батюшкова,Батюшковим,Батюшкову,Батюшкове'), $this->object->q('Батюшков'));
    }
    public function testCrazy541()
    { 
        $this->assertEquals(explode(',','Биков,Бикова,Бикову,Бикова,Биковим,Бикову,Бикове'), $this->object->q('Биков'));
    }
    public function testCrazy542()
    { 
        $this->assertEquals(explode(',','Блохін,Блохіна,Блохіну,Блохіна,Блохіном,Блохіну,Блохіне'), $this->object->q('Блохін'));
    }
    public function testCrazy543()
    { 
        $this->assertEquals(explode(',','Бобров,Боброва,Боброву,Боброва,Бобровим,Боброву,Боброве'), $this->object->q('Бобров'));
    }
    public function testCrazy544()
    { 
        $this->assertEquals(explode(',','Богданов,Богданова,Богданову,Богданова,Богдановим,Богданову,Богданове'), $this->object->q('Богданов'));
    }
    public function testCrazy545()
    { 
        $this->assertEquals(explode(',','Богомазов,Богомазова,Богомазову,Богомазова,Богомазовим,Богомазову,Богомазове'), $this->object->q('Богомазов'));
    }
    public function testCrazy546()
    { 
        $this->assertEquals(explode(',','Бойков,Бойкова,Бойкову,Бойкова,Бойковим,Бойкову,Бойкове'), $this->object->q('Бойков'));
    }
    public function testCrazy547()
    { 
        $this->assertEquals(explode(',','Большаков,Большакова,Большакову,Большакова,Большаковим,Большакову,Большакове'), $this->object->q('Большаков'));
    }
    public function testCrazy548()
    { 
        $this->assertEquals(explode(',','Борисов,Борисова,Борисову,Борисова,Борисовим,Борисову,Борисове'), $this->object->q('Борисов'));
    }
    public function testCrazy549()
    { 
        $this->assertEquals(explode(',','Бочков,Бочкова,Бочкову,Бочкова,Бочковим,Бочкову,Бочкове'), $this->object->q('Бочков'));
    }
    public function testCrazy550()
    { 
        $this->assertEquals(explode(',','Бризгалов,Бризгалова,Бризгалову,Бризгалова,Бризгаловим,Бризгалову,Бризгалове'), $this->object->q('Бризгалов'));
    }
    public function testCrazy551()
    { 
        $this->assertEquals(explode(',','Брусилов,Брусилова,Брусилову,Брусилова,Брусиловим,Брусилову,Брусилове'), $this->object->q('Брусилов'));
    }
    public function testCrazy552()
    { 
        $this->assertEquals(explode(',','Бутурлін,Бутурліна,Бутурліну,Бутурліна,Бутурліном,Бутурліну,Бутурліне'), $this->object->q('Бутурлін'));
    }
    public function testCrazy553()
    { 
        $this->assertEquals(explode(',','Бутусов,Бутусова,Бутусову,Бутусова,Бутусовим,Бутусову,Бутусове'), $this->object->q('Бутусов'));
    }
    public function testCrazy554()
    { 
        $this->assertEquals(explode(',','Варламов,Варламова,Варламову,Варламова,Варламовим,Варламову,Варламове'), $this->object->q('Варламов'));
    }
    public function testCrazy555()
    { 
        $this->assertEquals(explode(',','Васильєв,Васильєва,Васильєву,Васильєва,Васильєвим,Васильєву,Васильєве'), $this->object->q('Васильєв'));
    }
    public function testCrazy556()
    { 
        $this->assertEquals(explode(',','Виноградов,Виноградова,Виноградову,Виноградова,Виноградовим,Виноградову,Виноградове'), $this->object->q('Виноградов'));
    }
    public function testCrazy557()
    { 
        $this->assertEquals(explode(',','Власов,Власова,Власову,Власова,Власовим,Власову,Власове'), $this->object->q('Власов'));
    }
    public function testCrazy558()
    { 
        $this->assertEquals(explode(',','Внуков,Внукова,Внукову,Внукова,Внуковим,Внукову,Внукове'), $this->object->q('Внуков'));
    }
    public function testCrazy559()
    { 
        $this->assertEquals(explode(',','Волков,Волкова,Волкову,Волкова,Волковим,Волкову,Волкове'), $this->object->q('Волков'));
    }
    public function testCrazy560()
    { 
        $this->assertEquals(explode(',','Воробей,Вороб’я,Вороб’єві,Вороб’я,Вороб’єм,Вороб’єві,Вороб’ю'), $this->object->q('Воробей'));
    }
    public function testCrazy561()
    { 
        $this->assertEquals(explode(',','Воробйов,Воробйова,Воробйову,Воробйова,Воробйовим,Воробйову,Воробйове'), $this->object->q('Воробйов'));
    }
    public function testCrazy562()
    { 
        $this->assertEquals(explode(',','Воронін,Вороніна,Вороніну,Вороніна,Вороніном,Вороніну,Вороніне'), $this->object->q('Воронін'));
    }
    public function testCrazy563()
    { 
        $this->assertEquals(explode(',','Воронцов,Воронцова,Воронцову,Воронцова,Воронцовим,Воронцову,Воронцове'), $this->object->q('Воронцов'));
    }
    public function testCrazy564()
    { 
        $this->assertEquals(explode(',','Ворошилов,Ворошилова,Ворошилову,Ворошилова,Ворошиловим,Ворошилову,Ворошилове'), $this->object->q('Ворошилов'));
    }
    public function testCrazy565()
    { 
        $this->assertEquals(explode(',','Гаврилов,Гаврилова,Гаврилову,Гаврилова,Гавриловим,Гаврилову,Гаврилове'), $this->object->q('Гаврилов'));
    }
    public function testCrazy566()
    { 
        $this->assertEquals(explode(',','Герасимов,Герасимова,Герасимову,Герасимова,Герасимовим,Герасимову,Герасимове'), $this->object->q('Герасимов'));
    }
    public function testCrazy567()
    { 
        $this->assertEquals(explode(',','Горбунов,Горбунова,Горбунову,Горбунова,Горбуновим,Горбунову,Горбунове'), $this->object->q('Горбунов'));
    }
    public function testCrazy568()
    { 
        $this->assertEquals(explode(',','Горчаков,Горчакова,Горчакову,Горчакова,Горчаковим,Горчакову,Горчакове'), $this->object->q('Горчаков'));
    }
    public function testCrazy569()
    { 
        $this->assertEquals(explode(',','Горшков,Горшкова,Горшкову,Горшкова,Горшковим,Горшкову,Горшкове'), $this->object->q('Горшков'));
    }
    public function testCrazy570()
    { 
        $this->assertEquals(explode(',','Громов,Громова,Громову,Громова,Громовим,Громову,Громове'), $this->object->q('Громов'));
    }
    public function testCrazy571()
    { 
        $this->assertEquals(explode(',','Гусєв,Гусєва,Гусєву,Гусєва,Гусєвим,Гусєву,Гусєве'), $this->object->q('Гусєв'));
    }
    public function testCrazy572()
    { 
        $this->assertEquals(explode(',','Давидов,Давидова,Давидову,Давидова,Давидовим,Давидову,Давидове'), $this->object->q('Давидов'));
    }
    public function testCrazy573()
    { 
        $this->assertEquals(explode(',','Данилов,Данилова,Данилову,Данилова,Даниловим,Данилову,Данилове'), $this->object->q('Данилов'));
    }
    public function testCrazy574()
    { 
        $this->assertEquals(explode(',','Дементьєв,Дементьєва,Дементьєву,Дементьєва,Дементьєвим,Дементьєву,Дементьєве'), $this->object->q('Дементьєв'));
    }
    public function testCrazy575()
    { 
        $this->assertEquals(explode(',','Денисов,Денисова,Денисову,Денисова,Денисовим,Денисову,Денисове'), $this->object->q('Денисов'));
    }
    public function testCrazy576()
    { 
        $this->assertEquals(explode(',','Дмитрієв,Дмитрієва,Дмитрієву,Дмитрієва,Дмитрієвим,Дмитрієву,Дмитрієве'), $this->object->q('Дмитрієв'));
    }
    public function testCrazy577()
    { 
        $this->assertEquals(explode(',','Добролюбов,Добролюбова,Добролюбову,Добролюбова,Добролюбовим,Добролюбову,Добролюбове'), $this->object->q('Добролюбов'));
    }
    public function testCrazy578()
    { 
        $this->assertEquals(explode(',','Донськой,Донського,Донському,Донського,Донським,Донському,Донський'), $this->object->q('Донськой'));
    }
    public function testCrazy579()
    { 
        $this->assertEquals(explode(',','Дорофєєв,Дорофєєва,Дорофєєву,Дорофєєва,Дорофєєвим,Дорофєєву,Дорофєєве'), $this->object->q('Дорофєєв'));
    }
    public function testCrazy580()
    { 
        $this->assertEquals(explode(',','Дубров,Дуброва,Дуброву,Дуброва,Дубровим,Дуброву,Дуброве'), $this->object->q('Дубров'));
    }
    public function testCrazy581()
    { 
        $this->assertEquals(explode(',','Железняков,Железнякова,Железнякову,Железнякова,Железняковим,Железнякову,Железнякове'), $this->object->q('Железняков'));
    }
    public function testCrazy582()
    { 
        $this->assertEquals(explode(',','Жердєв,Жердєва,Жердєву,Жердєва,Жердєвим,Жердєву,Жердєве'), $this->object->q('Жердєв'));
    }
    public function testCrazy583()
    { 
        $this->assertEquals(explode(',','Жуков,Жукова,Жукову,Жукова,Жуковим,Жукову,Жукове'), $this->object->q('Жуков'));
    }
    public function testCrazy584()
    { 
        $this->assertEquals(explode(',','Журавльов,Журавльова,Журавльову,Журавльова,Журавльовим,Журавльову,Журавльове'), $this->object->q('Журавльов'));
    }
    public function testCrazy585()
    { 
        $this->assertEquals(explode(',','Заваров,Заварова,Заварову,Заварова,Заваровим,Заварову,Заварове'), $this->object->q('Заваров'));
    }
    public function testCrazy586()
    { 
        $this->assertEquals(explode(',','Загаров,Загарова,Загарову,Загарова,Загаровим,Загарову,Загарове'), $this->object->q('Загаров'));
    }
    public function testCrazy587()
    { 
        $this->assertEquals(explode(',','Зайцев,Зайцева,Зайцеву,Зайцева,Зайцевим,Зайцеву,Зайцеве'), $this->object->q('Зайцев'));
    }
    public function testCrazy588()
    { 
        $this->assertEquals(explode(',','Захаров,Захарова,Захарову,Захарова,Захаровим,Захарову,Захарове'), $this->object->q('Захаров'));
    }
    public function testCrazy589()
    { 
        $this->assertEquals(explode(',','Звєрєв,Звєрєва,Звєрєву,Звєрєва,Звєрєвим,Звєрєву,Звєрєве'), $this->object->q('Звєрєв'));
    }
    public function testCrazy590()
    { 
        $this->assertEquals(explode(',','Зеров,Зерова,Зерову,Зерова,Зеровим,Зерову,Зерове'), $this->object->q('Зеров'));
    }
    public function testCrazy591()
    { 
        $this->assertEquals(explode(',','Золотухін,Золотухіна,Золотухіну,Золотухіна,Золотухіном,Золотухіну,Золотухіне'), $this->object->q('Золотухін'));
    }
    public function testCrazy592()
    { 
        $this->assertEquals(explode(',','Зубов,Зубова,Зубову,Зубова,Зубовим,Зубову,Зубове'), $this->object->q('Зубов'));
    }
    public function testCrazy593()
    { 
        $this->assertEquals(explode(',','Казаков,Казакова,Казакову,Казакова,Казаковим,Казакову,Казакове'), $this->object->q('Казаков'));
    }
    public function testCrazy594()
    { 
        $this->assertEquals(explode(',','Калінін,Калініна,Калініну,Калініна,Калініном,Калініну,Калініне'), $this->object->q('Калінін'));
    }
    public function testCrazy595()
    { 
        $this->assertEquals(explode(',','Калашников,Калашникова,Калашникову,Калашникова,Калашниковим,Калашникову,Калашникове'), $this->object->q('Калашников'));
    }
    public function testCrazy596()
    { 
        $this->assertEquals(explode(',','Карпов,Карпова,Карпову,Карпова,Карповим,Карпову,Карпове'), $this->object->q('Карпов'));
    }
    public function testCrazy597()
    { 
        $this->assertEquals(explode(',','Каштанов,Каштанова,Каштанову,Каштанова,Каштановим,Каштанову,Каштанове'), $this->object->q('Каштанов'));
    }
    public function testCrazy598()
    { 
        $this->assertEquals(explode(',','Кисельов,Кисельова,Кисельову,Кисельова,Кисельовим,Кисельову,Кисельове'), $this->object->q('Кисельов'));
    }
    public function testCrazy599()
    { 
        $this->assertEquals(explode(',','Ковальов,Ковальова,Ковальову,Ковальова,Ковальовим,Ковальову,Ковальове'), $this->object->q('Ковальов'));
    }
    public function testCrazy600()
    { 
        $this->assertEquals(explode(',','Кожевников,Кожевникова,Кожевникову,Кожевникова,Кожевниковим,Кожевникову,Кожевникове'), $this->object->q('Кожевников'));
    }
    public function testCrazy601()
    { 
        $this->assertEquals(explode(',','Козлов,Козлова,Козлову,Козлова,Козловим,Козлову,Козлове'), $this->object->q('Козлов'));
    }
    public function testCrazy602()
    { 
        $this->assertEquals(explode(',','Колесников,Колесникова,Колесникову,Колесникова,Колесниковим,Колесникову,Колесникове'), $this->object->q('Колесников'));
    }
    public function testCrazy603()
    { 
        $this->assertEquals(explode(',','Кольцов,Кольцова,Кольцову,Кольцова,Кольцовим,Кольцову,Кольцове'), $this->object->q('Кольцов'));
    }
    public function testCrazy604()
    { 
        $this->assertEquals(explode(',','Комаров,Комарова,Комарову,Комарова,Комаровим,Комарову,Комарове'), $this->object->q('Комаров'));
    }
    public function testCrazy605()
    { 
        $this->assertEquals(explode(',','Коновалов,Коновалова,Коновалову,Коновалова,Коноваловим,Коновалову,Коновалове'), $this->object->q('Коновалов'));
    }
    public function testCrazy606()
    { 
        $this->assertEquals(explode(',','Конюхов,Конюхова,Конюхову,Конюхова,Конюховим,Конюхову,Конюхове'), $this->object->q('Конюхов'));
    }
    public function testCrazy607()
    { 
        $this->assertEquals(explode(',','Копилов,Копилова,Копилову,Копилова,Копиловим,Копилову,Копилове'), $this->object->q('Копилов'));
    }
    public function testCrazy608()
    { 
        $this->assertEquals(explode(',','Кормильцев,Кормильцева,Кормильцеву,Кормильцева,Кормильцевим,Кормильцеву,Кормильцеве'), $this->object->q('Кормильцев'));
    }
    public function testCrazy609()
    { 
        $this->assertEquals(explode(',','Коробов,Коробова,Коробову,Коробова,Коробовим,Коробову,Коробове'), $this->object->q('Коробов'));
    }
    public function testCrazy610()
    { 
        $this->assertEquals(explode(',','Коровкін,Коровкіна,Коровкіну,Коровкіна,Коровкіном,Коровкіну,Коровкіне'), $this->object->q('Коровкін'));
    }
    public function testCrazy611()
    { 
        $this->assertEquals(explode(',','Корольов,Корольова,Корольову,Корольова,Корольовим,Корольову,Корольове'), $this->object->q('Корольов'));
    }
    public function testCrazy612()
    { 
        $this->assertEquals(explode(',','Котов,Котова,Котову,Котова,Котовим,Котову,Котове'), $this->object->q('Котов'));
    }
    public function testCrazy613()
    { 
        $this->assertEquals(explode(',','Краснов,Краснова,Краснову,Краснова,Красновим,Краснову,Краснове'), $this->object->q('Краснов'));
    }
    public function testCrazy614()
    { 
        $this->assertEquals(explode(',','Крилов,Крилова,Крилову,Крилова,Криловим,Крилову,Крилове'), $this->object->q('Крилов'));
    }
    public function testCrazy615()
    { 
        $this->assertEquals(explode(',','Кримов,Кримова,Кримову,Кримова,Кримовим,Кримову,Кримове'), $this->object->q('Кримов'));
    }
    public function testCrazy616()
    { 
        $this->assertEquals(explode(',','Крюков,Крюкова,Крюкову,Крюкова,Крюковим,Крюкову,Крюкове'), $this->object->q('Крюков'));
    }
    public function testCrazy617()
    { 
        $this->assertEquals(explode(',','Кудряшов,Кудряшова,Кудряшову,Кудряшова,Кудряшовим,Кудряшову,Кудряшове'), $this->object->q('Кудряшов'));
    }
    public function testCrazy618()
    { 
        $this->assertEquals(explode(',','Кузнецов,Кузнецова,Кузнецову,Кузнецова,Кузнецовим,Кузнецову,Кузнецове'), $this->object->q('Кузнецов'));
    }
    public function testCrazy619()
    { 
        $this->assertEquals(explode(',','Кузьмін,Кузьміна,Кузьміну,Кузьміна,Кузьміном,Кузьміну,Кузьміне'), $this->object->q('Кузьмін'));
    }
    public function testCrazy620()
    { 
        $this->assertEquals(explode(',','Кулаков,Кулакова,Кулакову,Кулакова,Кулаковим,Кулакову,Кулакове'), $this->object->q('Кулаков'));
    }
    public function testCrazy621()
    { 
        $this->assertEquals(explode(',','Куликов,Куликова,Куликову,Куликова,Куликовим,Куликову,Куликове'), $this->object->q('Куликов'));
    }
    public function testCrazy622()
    { 
        $this->assertEquals(explode(',','Курков,Куркова,Куркову,Куркова,Курковим,Куркову,Куркове'), $this->object->q('Курков'));
    }
    public function testCrazy623()
    { 
        $this->assertEquals(explode(',','Курочкін,Курочкіна,Курочкіну,Курочкіна,Курочкіном,Курочкіну,Курочкіне'), $this->object->q('Курочкін'));
    }
    public function testCrazy624()
    { 
        $this->assertEquals(explode(',','Лєсков,Лєскова,Лєскову,Лєскова,Лєсковим,Лєскову,Лєскове'), $this->object->q('Лєсков'));
    }
    public function testCrazy625()
    { 
        $this->assertEquals(explode(',','Лідов,Лідова,Лідову,Лідова,Лідовим,Лідову,Лідове'), $this->object->q('Лідов'));
    }
    public function testCrazy626()
    { 
        $this->assertEquals(explode(',','Ладигін,Ладигіна,Ладигіну,Ладигіна,Ладигіном,Ладигіну,Ладигіне'), $this->object->q('Ладигін'));
    }
    public function testCrazy627()
    { 
        $this->assertEquals(explode(',','Лазарєв,Лазарєва,Лазарєву,Лазарєва,Лазарєвим,Лазарєву,Лазарєве'), $this->object->q('Лазарєв'));
    }
    public function testCrazy628()
    { 
        $this->assertEquals(explode(',','Лебедєв,Лебедєва,Лебедєву,Лебедєва,Лебедєвим,Лебедєву,Лебедєве'), $this->object->q('Лебедєв'));
    }
    public function testCrazy629()
    { 
        $this->assertEquals(explode(',','Лихоносов,Лихоносова,Лихоносову,Лихоносова,Лихоносовим,Лихоносову,Лихоносове'), $this->object->q('Лихоносов'));
    }
    public function testCrazy630()
    { 
        $this->assertEquals(explode(',','Лосєв,Лосєва,Лосєву,Лосєва,Лосєвим,Лосєву,Лосєве'), $this->object->q('Лосєв'));
    }
    public function testCrazy631()
    { 
        $this->assertEquals(explode(',','Львов,Львова,Львову,Львова,Львовим,Львову,Львове'), $this->object->q('Львов'));
    }
    public function testCrazy632()
    { 
        $this->assertEquals(explode(',','Любимов,Любимова,Любимову,Любимова,Любимовим,Любимову,Любимове'), $this->object->q('Любимов'));
    }
    public function testCrazy633()
    { 
        $this->assertEquals(explode(',','Мілютін,Мілютіна,Мілютіну,Мілютіна,Мілютіном,Мілютіну,Мілютіне'), $this->object->q('Мілютін'));
    }
    public function testCrazy634()
    { 
        $this->assertEquals(explode(',','Макаров,Макарова,Макарову,Макарова,Макаровим,Макарову,Макарове'), $this->object->q('Макаров'));
    }
    public function testCrazy635()
    { 
        $this->assertEquals(explode(',','Максимов,Максимова,Максимову,Максимова,Максимовим,Максимову,Максимове'), $this->object->q('Максимов'));
    }
    public function testCrazy636()
    { 
        $this->assertEquals(explode(',','Малаков,Малакова,Малакову,Малакова,Малаковим,Малакову,Малакове'), $this->object->q('Малаков'));
    }
    public function testCrazy637()
    { 
        $this->assertEquals(explode(',','Мамонов,Мамонова,Мамонову,Мамонова,Мамоновим,Мамонову,Мамонове'), $this->object->q('Мамонов'));
    }
    public function testCrazy638()
    { 
        $this->assertEquals(explode(',','Манасеїн,Манасеїна,Манасеїнові,Манасеїна,Манасеїном,Манасеїнові,Манасеїне'), $this->object->q('Манасеїн'));
    }
    public function testCrazy639()
    { 
        $this->assertEquals(explode(',','Марков,Маркова,Маркову,Маркова,Марковим,Маркову,Маркове'), $this->object->q('Марков'));
    }
    public function testCrazy640()
    { 
        $this->assertEquals(explode(',','Мартенс,Мартенса,Мартенсові,Мартенса,Мартенсом,Мартенсові,Мартенсе'), $this->object->q('Мартенс'));
    }
    public function testCrazy641()
    { 
        $this->assertEquals(explode(',','Мартинов,Мартинова,Мартинову,Мартинова,Мартиновим,Мартинову,Мартинове'), $this->object->q('Мартинов'));
    }
    public function testCrazy642()
    { 
        $this->assertEquals(explode(',','Масленніков,Масленнікова,Масленнікову,Масленнікова,Масленніковим,Масленнікову,Масленнікове'), $this->object->q('Масленніков'));
    }
    public function testCrazy643()
    { 
        $this->assertEquals(explode(',','Маслов,Маслова,Маслову,Маслова,Масловим,Маслову,Маслове'), $this->object->q('Маслов'));
    }
    public function testCrazy644()
    { 
        $this->assertEquals(explode(',','Матвєєв,Матвєєва,Матвєєву,Матвєєва,Матвєєвим,Матвєєву,Матвєєве'), $this->object->q('Матвєєв'));
    }
    public function testCrazy645()
    { 
        $this->assertEquals(explode(',','Медведєв,Медведєва,Медведєву,Медведєва,Медведєвим,Медведєву,Медведєве'), $this->object->q('Медведєв'));
    }
    public function testCrazy646()
    { 
        $this->assertEquals(explode(',','Мельников,Мельникова,Мельникову,Мельникова,Мельниковим,Мельникову,Мельникове'), $this->object->q('Мельников'));
    }
    public function testCrazy647()
    { 
        $this->assertEquals(explode(',','Миронов,Миронова,Миронову,Миронова,Мироновим,Миронову,Миронове'), $this->object->q('Миронов'));
    }
    public function testCrazy648()
    { 
        $this->assertEquals(explode(',','Михайлов,Михайлова,Михайлову,Михайлова,Михайловим,Михайлову,Михайлове'), $this->object->q('Михайлов'));
    }
    public function testCrazy649()
    { 
        $this->assertEquals(explode(',','Моїсєєв,Моїсєєва,Моїсєєву,Моїсєєва,Моїсєєвим,Моїсєєву,Моїсєєве'), $this->object->q('Моїсєєв'));
    }
    public function testCrazy650()
    { 
        $this->assertEquals(explode(',','Моргунов,Моргунова,Моргунову,Моргунова,Моргуновим,Моргунову,Моргунове'), $this->object->q('Моргунов'));
    }
    public function testCrazy651()
    { 
        $this->assertEquals(explode(',','Морков,Моркова,Моркову,Моркова,Морковим,Моркову,Моркове'), $this->object->q('Морков'));
    }
    public function testCrazy652()
    { 
        $this->assertEquals(explode(',','Морозов,Морозова,Морозову,Морозова,Морозовим,Морозову,Морозове'), $this->object->q('Морозов'));
    }
    public function testCrazy653()
    { 
        $this->assertEquals(explode(',','Мухін,Мухіна,Мухіну,Мухіна,Мухіном,Мухіну,Мухіне'), $this->object->q('Мухін'));
    }
    public function testCrazy654()
    { 
        $this->assertEquals(explode(',','Нікітін,Нікітіна,Нікітіну,Нікітіна,Нікітіном,Нікітіну,Нікітіне'), $this->object->q('Нікітін'));
    }
    public function testCrazy655()
    { 
        $this->assertEquals(explode(',','Ніколаєв,Ніколаєва,Ніколаєву,Ніколаєва,Ніколаєвим,Ніколаєву,Ніколаєве'), $this->object->q('Ніколаєв'));
    }
    public function testCrazy656()
    { 
        $this->assertEquals(explode(',','Нікулін,Нікуліна,Нікуліну,Нікуліна,Нікуліном,Нікуліну,Нікуліне'), $this->object->q('Нікулін'));
    }
    public function testCrazy657()
    { 
        $this->assertEquals(explode(',','Набоков,Набокова,Набокову,Набокова,Набоковим,Набокову,Набокове'), $this->object->q('Набоков'));
    }
    public function testCrazy658()
    { 
        $this->assertEquals(explode(',','Некрасов,Некрасова,Некрасову,Некрасова,Некрасовим,Некрасову,Некрасове'), $this->object->q('Некрасов'));
    }
    public function testCrazy659()
    { 
        $this->assertEquals(explode(',','Новиков,Новикова,Новикову,Новикова,Новиковим,Новикову,Новикове'), $this->object->q('Новиков'));
    }
    public function testCrazy660()
    { 
        $this->assertEquals(explode(',','Орлов,Орлова,Орлову,Орлова,Орловим,Орлову,Орлове'), $this->object->q('Орлов'));
    }
    public function testCrazy661()
    { 
        $this->assertEquals(explode(',','Осипов,Осипова,Осипову,Осипова,Осиповим,Осипову,Осипове'), $this->object->q('Осипов'));
    }
    public function testCrazy662()
    { 
        $this->assertEquals(explode(',','Павлов,Павлова,Павлову,Павлова,Павловим,Павлову,Павлове'), $this->object->q('Павлов'));
    }
    public function testCrazy663()
    { 
        $this->assertEquals(explode(',','Павлушков,Павлушкова,Павлушкову,Павлушкова,Павлушковим,Павлушкову,Павлушкове'), $this->object->q('Павлушков'));
    }
    public function testCrazy664()
    { 
        $this->assertEquals(explode(',','Панов,Панова,Панову,Панова,Пановим,Панову,Панове'), $this->object->q('Панов'));
    }
    public function testCrazy665()
    { 
        $this->assertEquals(explode(',','Петров,Петрова,Петрову,Петрова,Петровим,Петрову,Петрове'), $this->object->q('Петров'));
    }
    public function testCrazy666()
    { 
        $this->assertEquals(explode(',','Пильчиков,Пильчикова,Пильчикову,Пильчикова,Пильчиковим,Пильчикову,Пильчикове'), $this->object->q('Пильчиков'));
    }
    public function testCrazy667()
    { 
        $this->assertEquals(explode(',','Платонов,Платонова,Платонову,Платонова,Платоновим,Платонову,Платонове'), $this->object->q('Платонов'));
    }
    public function testCrazy668()
    { 
        $this->assertEquals(explode(',','Плеханов,Плеханова,Плеханову,Плеханова,Плехановим,Плеханову,Плеханове'), $this->object->q('Плеханов'));
    }
    public function testCrazy669()
    { 
        $this->assertEquals(explode(',','Поляков,Полякова,Полякову,Полякова,Поляковим,Полякову,Полякове'), $this->object->q('Поляков'));
    }
    public function testCrazy670()
    { 
        $this->assertEquals(explode(',','Попов,Попова,Попову,Попова,Поповим,Попову,Попове'), $this->object->q('Попов'));
    }
    public function testCrazy671()
    { 
        $this->assertEquals(explode(',','Поярков,Пояркова,Пояркову,Пояркова,Поярковим,Пояркову,Пояркове'), $this->object->q('Поярков'));
    }
    public function testCrazy672()
    { 
        $this->assertEquals(explode(',','Пригунов,Пригунова,Пригунову,Пригунова,Пригуновим,Пригунову,Пригунове'), $this->object->q('Пригунов'));
    }
    public function testCrazy673()
    { 
        $this->assertEquals(explode(',','Прошкін,Прошкіна,Прошкіну,Прошкіна,Прошкіном,Прошкіну,Прошкіне'), $this->object->q('Прошкін'));
    }
    public function testCrazy674()
    { 
        $this->assertEquals(explode(',','Решетников,Решетникова,Решетникову,Решетникова,Решетниковим,Решетникову,Решетникове'), $this->object->q('Решетников'));
    }
    public function testCrazy675()
    { 
        $this->assertEquals(explode(',','Рожков,Рожкова,Рожкову,Рожкова,Рожковим,Рожкову,Рожкове'), $this->object->q('Рожков'));
    }
    public function testCrazy676()
    { 
        $this->assertEquals(explode(',','Романов,Романова,Романову,Романова,Романовим,Романову,Романове'), $this->object->q('Романов'));
    }
    public function testCrazy677()
    { 
        $this->assertEquals(explode(',','Рябов,Рябова,Рябову,Рябова,Рябовим,Рябову,Рябове'), $this->object->q('Рябов'));
    }
    public function testCrazy678()
    { 
        $this->assertEquals(explode(',','Саблін,Сабліна,Сабліну,Сабліна,Сабліном,Сабліну,Сабліне'), $this->object->q('Саблін'));
    }
    public function testCrazy679()
    { 
        $this->assertEquals(explode(',','Савін,Савіна,Савіну,Савіна,Савіном,Савіну,Савіне'), $this->object->q('Савін'));
    }
    public function testCrazy680()
    { 
        $this->assertEquals(explode(',','Сазонов,Сазонова,Сазонову,Сазонова,Сазоновим,Сазонову,Сазонове'), $this->object->q('Сазонов'));
    }
    public function testCrazy681()
    { 
        $this->assertEquals(explode(',','Сальников,Сальникова,Сальникову,Сальникова,Сальниковим,Сальникову,Сальникове'), $this->object->q('Сальников'));
    }
    public function testCrazy682()
    { 
        $this->assertEquals(explode(',','Самойлов,Самойлова,Самойлову,Самойлова,Самойловим,Самойлову,Самойлове'), $this->object->q('Самойлов'));
    }
    public function testCrazy683()
    { 
        $this->assertEquals(explode(',','Самсонов,Самсонова,Самсонову,Самсонова,Самсоновим,Самсонову,Самсонове'), $this->object->q('Самсонов'));
    }
    public function testCrazy684()
    { 
        $this->assertEquals(explode(',','Сбітнєв,Сбітнєва,Сбітнєву,Сбітнєва,Сбітнєвим,Сбітнєву,Сбітнєве'), $this->object->q('Сбітнєв'));
    }
    public function testCrazy685()
    { 
        $this->assertEquals(explode(',','Свиридов,Свиридова,Свиридову,Свиридова,Свиридовим,Свиридову,Свиридове'), $this->object->q('Свиридов'));
    }
    public function testCrazy686()
    { 
        $this->assertEquals(explode(',','Селезньов,Селезньова,Селезньову,Селезньова,Селезньовим,Селезньову,Селезньове'), $this->object->q('Селезньов'));
    }
    public function testCrazy687()
    { 
        $this->assertEquals(explode(',','Семенов,Семенова,Семенову,Семенова,Семеновим,Семенову,Семенове'), $this->object->q('Семенов'));
    }
    public function testCrazy688()
    { 
        $this->assertEquals(explode(',','Сербін,Сербіна,Сербіну,Сербіна,Сербіном,Сербіну,Сербіне'), $this->object->q('Сербін'));
    }
    public function testCrazy689()
    { 
        $this->assertEquals(explode(',','Сергєєв,Сергєєва,Сергєєву,Сергєєва,Сергєєвим,Сергєєву,Сергєєве'), $this->object->q('Сергєєв'));
    }
    public function testCrazy690()
    { 
        $this->assertEquals(explode(',','Сибіряков,Сибірякова,Сибірякову,Сибірякова,Сибіряковим,Сибірякову,Сибірякове'), $this->object->q('Сибіряков'));
    }
    public function testCrazy691()
    { 
        $this->assertEquals(explode(',','Сидоров,Сидорова,Сидорову,Сидорова,Сидоровим,Сидорову,Сидорове'), $this->object->q('Сидоров'));
    }
    public function testCrazy692()
    { 
        $this->assertEquals(explode(',','Симонов,Симонова,Симонову,Симонова,Симоновим,Симонову,Симонове'), $this->object->q('Симонов'));
    }
    public function testCrazy693()
    { 
        $this->assertEquals(explode(',','Синельников,Синельникова,Синельникову,Синельникова,Синельниковим,Синельникову,Синельникове'), $this->object->q('Синельников'));
    }
    public function testCrazy694()
    { 
        $this->assertEquals(explode(',','Скобелев,Скобелева,Скобелеву,Скобелева,Скобелевим,Скобелеву,Скобелеве'), $this->object->q('Скобелев'));
    }
    public function testCrazy695()
    { 
        $this->assertEquals(explode(',','Скоблін,Скобліна,Скобліну,Скобліна,Скобліном,Скобліну,Скобліне'), $this->object->q('Скоблін'));
    }
    public function testCrazy696()
    { 
        $this->assertEquals(explode(',','Смирнов,Смирнова,Смирнову,Смирнова,Смирновим,Смирнову,Смирнове'), $this->object->q('Смирнов'));
    }
    public function testCrazy697()
    { 
        $this->assertEquals(explode(',','Снєгірьов,Снєгірьова,Снєгірьову,Снєгірьова,Снєгірьовим,Снєгірьову,Снєгірьове'), $this->object->q('Снєгірьов'));
    }
    public function testCrazy698()
    { 
        $this->assertEquals(explode(',','Соболєв,Соболєва,Соболєву,Соболєва,Соболєвим,Соболєву,Соболєве'), $this->object->q('Соболєв'));
    }
    public function testCrazy699()
    { 
        $this->assertEquals(explode(',','Соколов,Соколова,Соколову,Соколова,Соколовим,Соколову,Соколове'), $this->object->q('Соколов'));
    }
    public function testCrazy700()
    { 
        $this->assertEquals(explode(',','Солнцев,Солнцева,Солнцеву,Солнцева,Солнцевим,Солнцеву,Солнцеве'), $this->object->q('Солнцев'));
    }
    public function testCrazy701()
    { 
        $this->assertEquals(explode(',','Соловйов,Соловйова,Соловйову,Соловйова,Соловйовим,Соловйову,Соловйове'), $this->object->q('Соловйов'));
    }
    public function testCrazy702()
    { 
        $this->assertEquals(explode(',','Сомов,Сомова,Сомову,Сомова,Сомовим,Сомову,Сомове'), $this->object->q('Сомов'));
    }
    public function testCrazy703()
    { 
        $this->assertEquals(explode(',','Сорокін,Сорокіна,Сорокіну,Сорокіна,Сорокіном,Сорокіну,Сорокіне'), $this->object->q('Сорокін'));
    }
    public function testCrazy704()
    { 
        $this->assertEquals(explode(',','Стєклов,Стєклова,Стєклову,Стєклова,Стєкловим,Стєклову,Стєклове'), $this->object->q('Стєклов'));
    }
    public function testCrazy705()
    { 
        $this->assertEquals(explode(',','Старков,Старкова,Старкову,Старкова,Старковим,Старкову,Старкове'), $this->object->q('Старков'));
    }
    public function testCrazy706()
    { 
        $this->assertEquals(explode(',','Степанов,Степанова,Степанову,Степанова,Степановим,Степанову,Степанове'), $this->object->q('Степанов'));
    }
    public function testCrazy707()
    { 
        $this->assertEquals(explode(',','Табаков,Табакова,Табакову,Табакова,Табаковим,Табакову,Табакове'), $this->object->q('Табаков'));
    }
    public function testCrazy708()
    { 
        $this->assertEquals(explode(',','Тарасов,Тарасова,Тарасову,Тарасова,Тарасовим,Тарасову,Тарасове'), $this->object->q('Тарасов'));
    }
    public function testCrazy709()
    { 
        $this->assertEquals(explode(',','Терентьєв,Терентьєва,Терентьєву,Терентьєва,Терентьєвим,Терентьєву,Терентьєве'), $this->object->q('Терентьєв'));
    }
    public function testCrazy710()
    { 
        $this->assertEquals(explode(',','Тимофєєв,Тимофєєва,Тимофєєву,Тимофєєва,Тимофєєвим,Тимофєєву,Тимофєєве'), $this->object->q('Тимофєєв'));
    }
    public function testCrazy711()
    { 
        $this->assertEquals(explode(',','Титов,Титова,Титову,Титова,Титовим,Титову,Титове'), $this->object->q('Титов'));
    }
    public function testCrazy712()
    { 
        $this->assertEquals(explode(',','Тихомиров,Тихомирова,Тихомирову,Тихомирова,Тихомировим,Тихомирову,Тихомирове'), $this->object->q('Тихомиров'));
    }
    public function testCrazy713()
    { 
        $this->assertEquals(explode(',','Тихонов,Тихонова,Тихонову,Тихонова,Тихоновим,Тихонову,Тихонове'), $this->object->q('Тихонов'));
    }
    public function testCrazy714()
    { 
        $this->assertEquals(explode(',','Тюленєв,Тюленєва,Тюленєву,Тюленєва,Тюленєвим,Тюленєву,Тюленєве'), $this->object->q('Тюленєв'));
    }
    public function testCrazy715()
    { 
        $this->assertEquals(explode(',','Уваров,Уварова,Уварову,Уварова,Уваровим,Уварову,Уварове'), $this->object->q('Уваров'));
    }
    public function testCrazy716()
    { 
        $this->assertEquals(explode(',','Усов,Усова,Усову,Усова,Усовим,Усову,Усове'), $this->object->q('Усов'));
    }
    public function testCrazy717()
    { 
        $this->assertEquals(explode(',','Устинов,Устинова,Устинову,Устинова,Устиновим,Устинову,Устинове'), $this->object->q('Устинов'));
    }
    public function testCrazy718()
    { 
        $this->assertEquals(explode(',','Філіппов,Філіппова,Філіппову,Філіппова,Філіпповим,Філіппову,Філіппове'), $this->object->q('Філіппов'));
    }
    public function testCrazy719()
    { 
        $this->assertEquals(explode(',','Філатов,Філатова,Філатову,Філатова,Філатовим,Філатову,Філатове'), $this->object->q('Філатов'));
    }
    public function testCrazy720()
    { 
        $this->assertEquals(explode(',','Федоров,Федорова,Федорову,Федорова,Федоровим,Федорову,Федорове'), $this->object->q('Федоров'));
    }
    public function testCrazy721()
    { 
        $this->assertEquals(explode(',','Фомін,Фоміна,Фоміну,Фоміна,Фоміном,Фоміну,Фоміне'), $this->object->q('Фомін'));
    }
    public function testCrazy722()
    { 
        $this->assertEquals(explode(',','Фролов,Фролова,Фролову,Фролова,Фроловим,Фролову,Фролове'), $this->object->q('Фролов'));
    }
    public function testCrazy723()
    { 
        $this->assertEquals(explode(',','Хілков,Хілкова,Хілкову,Хілкова,Хілковим,Хілкову,Хілкове'), $this->object->q('Хілков'));
    }
    public function testCrazy724()
    { 
        $this->assertEquals(explode(',','Хвостов,Хвостова,Хвостову,Хвостова,Хвостовим,Хвостову,Хвостове'), $this->object->q('Хвостов'));
    }
    public function testCrazy725()
    { 
        $this->assertEquals(explode(',','Худяков,Худякова,Худякову,Худякова,Худяковим,Худякову,Худякове'), $this->object->q('Худяков'));
    }
    public function testCrazy726()
    { 
        $this->assertEquals(explode(',','Цвєтков,Цвєткова,Цвєткову,Цвєткова,Цвєтковим,Цвєткову,Цвєткове'), $this->object->q('Цвєтков'));
    }
    public function testCrazy727()
    { 
        $this->assertEquals(explode(',','Чевкін,Чевкіна,Чевкіну,Чевкіна,Чевкіном,Чевкіну,Чевкіне'), $this->object->q('Чевкін'));
    }
    public function testCrazy728()
    { 
        $this->assertEquals(explode(',','Черенков,Черенкова,Черенкову,Черенкова,Черенковим,Черенкову,Черенкове'), $this->object->q('Черенков'));
    }
    public function testCrazy729()
    { 
        $this->assertEquals(explode(',','Черепков,Черепкова,Черепкову,Черепкова,Черепковим,Черепкову,Черепкове'), $this->object->q('Черепков'));
    }
    public function testCrazy730()
    { 
        $this->assertEquals(explode(',','Чулков,Чулкова,Чулкову,Чулкова,Чулковим,Чулкову,Чулкове'), $this->object->q('Чулков'));
    }
    public function testCrazy731()
    { 
        $this->assertEquals(explode(',','Шевельов,Шевельова,Шевельову,Шевельова,Шевельовим,Шевельову,Шевельове'), $this->object->q('Шевельов'));
    }
    public function testCrazy732()
    { 
        $this->assertEquals(explode(',','Шеліхов,Шеліхова,Шеліхову,Шеліхова,Шеліховим,Шеліхову,Шеліхове'), $this->object->q('Шеліхов'));
    }
    public function testCrazy733()
    { 
        $this->assertEquals(explode(',','Шинін,Шиніна,Шиніну,Шиніна,Шиніном,Шиніну,Шиніне'), $this->object->q('Шинін'));
    }
    public function testCrazy734()
    { 
        $this->assertEquals(explode(',','Ширяєв,Ширяєва,Ширяєву,Ширяєва,Ширяєвим,Ширяєву,Ширяєве'), $this->object->q('Ширяєв'));
    }
    public function testCrazy735()
    { 
        $this->assertEquals(explode(',','Шишов,Шишова,Шишову,Шишова,Шишовим,Шишову,Шишове'), $this->object->q('Шишов'));
    }
    public function testCrazy736()
    { 
        $this->assertEquals(explode(',','Шулаков,Шулакова,Шулакову,Шулакова,Шулаковим,Шулакову,Шулакове'), $this->object->q('Шулаков'));
    }
    public function testCrazy737()
    { 
        $this->assertEquals(explode(',','Щапов,Щапова,Щапову,Щапова,Щаповим,Щапову,Щапове'), $this->object->q('Щапов'));
    }
    public function testCrazy738()
    { 
        $this->assertEquals(explode(',','Щасливий,Щасливого,Щасливому,Щасливого,Щасливим,Щасливому,Щасливий'), $this->object->q('Щасливий'));
    }
    public function testCrazy739()
    { 
        $this->assertEquals(explode(',','Яковлєв,Яковлєва,Яковлєву,Яковлєва,Яковлєвим,Яковлєву,Яковлєве'), $this->object->q('Яковлєв'));
    }
    public function testCrazy740()
    { 
        $this->assertEquals(explode(',','Яшин,Яшина,Яшинові,Яшина,Яшином,Яшинові,Яшине'), $this->object->q('Яшин'));
    }

}