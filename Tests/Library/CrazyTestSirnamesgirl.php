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
        $this->assertEquals(explode(',','Єрмоленко,Єрмоленко,Єрмоленко,Єрмоленко,Єрмоленко,Єрмоленко,Єрмоленко'), $this->object->q('Єрмоленко'));
    }
    public function testCrazy1()
    { 
        $this->assertEquals(explode(',','Єсипенко,Єсипенко,Єсипенко,Єсипенко,Єсипенко,Єсипенко,Єсипенко'), $this->object->q('Єсипенко'));
    }
    public function testCrazy2()
    { 
        $this->assertEquals(explode(',','Іваненко,Іваненко,Іваненко,Іваненко,Іваненко,Іваненко,Іваненко'), $this->object->q('Іваненко'));
    }
    public function testCrazy3()
    { 
        $this->assertEquals(explode(',','Іванченко,Іванченко,Іванченко,Іванченко,Іванченко,Іванченко,Іванченко'), $this->object->q('Іванченко'));
    }
    public function testCrazy4()
    { 
        $this->assertEquals(explode(',','Іванчук,Іванчук,Іванчук,Іванчук,Іванчук,Іванчук,Іванчук'), $this->object->q('Іванчук'));
    }
    public function testCrazy5()
    { 
        $this->assertEquals(explode(',','Іванюк,Іванюк,Іванюк,Іванюк,Іванюк,Іванюк,Іванюк'), $this->object->q('Іванюк'));
    }
    public function testCrazy6()
    { 
        $this->assertEquals(explode(',','Івахненко,Івахненко,Івахненко,Івахненко,Івахненко,Івахненко,Івахненко'), $this->object->q('Івахненко'));
    }
    public function testCrazy7()
    { 
        $this->assertEquals(explode(',','Івашко,Івашко,Івашко,Івашко,Івашко,Івашко,Івашко'), $this->object->q('Івашко'));
    }
    public function testCrazy8()
    { 
        $this->assertEquals(explode(',','Іващенко,Іващенко,Іващенко,Іващенко,Іващенко,Іващенко,Іващенко'), $this->object->q('Іващенко'));
    }
    public function testCrazy9()
    { 
        $this->assertEquals(explode(',','Івченко,Івченко,Івченко,Івченко,Івченко,Івченко,Івченко'), $this->object->q('Івченко'));
    }
    public function testCrazy10()
    { 
        $this->assertEquals(explode(',','Іллєнко,Іллєнко,Іллєнко,Іллєнко,Іллєнко,Іллєнко,Іллєнко'), $this->object->q('Іллєнко'));
    }
    public function testCrazy11()
    { 
        $this->assertEquals(explode(',','Ільницька,Ільницької,Ільницькій,Ільницьку,Ільницькою,Ільницькій,Ільницько'), $this->object->q('Ільницька'));
    }
    public function testCrazy12()
    { 
        $this->assertEquals(explode(',','Ільченко,Ільченко,Ільченко,Ільченко,Ільченко,Ільченко,Ільченко'), $this->object->q('Ільченко'));
    }
    public function testCrazy13()
    { 
        $this->assertEquals(explode(',','Іщенко,Іщенко,Іщенко,Іщенко,Іщенко,Іщенко,Іщенко'), $this->object->q('Іщенко'));
    }
    public function testCrazy14()
    { 
        $this->assertEquals(explode(',','Абраменко,Абраменко,Абраменко,Абраменко,Абраменко,Абраменко,Абраменко'), $this->object->q('Абраменко'));
    }
    public function testCrazy15()
    { 
        $this->assertEquals(explode(',','Абрамчук,Абрамчук,Абрамчук,Абрамчук,Абрамчук,Абрамчук,Абрамчук'), $this->object->q('Абрамчук'));
    }
    public function testCrazy16()
    { 
        $this->assertEquals(explode(',','Адамчук,Адамчук,Адамчук,Адамчук,Адамчук,Адамчук,Адамчук'), $this->object->q('Адамчук'));
    }
    public function testCrazy17()
    { 
        $this->assertEquals(explode(',','Акуленко,Акуленко,Акуленко,Акуленко,Акуленко,Акуленко,Акуленко'), $this->object->q('Акуленко'));
    }
    public function testCrazy18()
    { 
        $this->assertEquals(explode(',','Алексєєнко,Алексєєнко,Алексєєнко,Алексєєнко,Алексєєнко,Алексєєнко,Алексєєнко'), $this->object->q('Алексєєнко'));
    }
    public function testCrazy19()
    { 
        $this->assertEquals(explode(',','Алексійчук,Алексійчук,Алексійчук,Алексійчук,Алексійчук,Алексійчук,Алексійчук'), $this->object->q('Алексійчук'));
    }
    public function testCrazy20()
    { 
        $this->assertEquals(explode(',','Андрієнко,Андрієнко,Андрієнко,Андрієнко,Андрієнко,Андрієнко,Андрієнко'), $this->object->q('Андрієнко'));
    }
    public function testCrazy21()
    { 
        $this->assertEquals(explode(',','Андрійчук,Андрійчук,Андрійчук,Андрійчук,Андрійчук,Андрійчук,Андрійчук'), $this->object->q('Андрійчук'));
    }
    public function testCrazy22()
    { 
        $this->assertEquals(explode(',','Андрейко,Андрейко,Андрейко,Андрейко,Андрейко,Андрейко,Андрейко'), $this->object->q('Андрейко'));
    }
    public function testCrazy23()
    { 
        $this->assertEquals(explode(',','Андрущенко,Андрущенко,Андрущенко,Андрущенко,Андрущенко,Андрущенко,Андрущенко'), $this->object->q('Андрущенко'));
    }
    public function testCrazy24()
    { 
        $this->assertEquals(explode(',','Анищенко,Анищенко,Анищенко,Анищенко,Анищенко,Анищенко,Анищенко'), $this->object->q('Анищенко'));
    }
    public function testCrazy25()
    { 
        $this->assertEquals(explode(',','Антонюк,Антонюк,Антонюк,Антонюк,Антонюк,Антонюк,Антонюк'), $this->object->q('Антонюк'));
    }
    public function testCrazy26()
    { 
        $this->assertEquals(explode(',','Арсенич,Арсенич,Арсенич,Арсенич,Арсенич,Арсенич,Арсенич'), $this->object->q('Арсенич'));
    }
    public function testCrazy27()
    { 
        $this->assertEquals(explode(',','Артюх,Артюх,Артюх,Артюх,Артюх,Артюх,Артюх'), $this->object->q('Артюх'));
    }
    public function testCrazy28()
    { 
        $this->assertEquals(explode(',','Атаманчук,Атаманчук,Атаманчук,Атаманчук,Атаманчук,Атаманчук,Атаманчук'), $this->object->q('Атаманчук'));
    }
    public function testCrazy29()
    { 
        $this->assertEquals(explode(',','Біла,Біли,Білі,Білу,Білою,Білі,Біло'), $this->object->q('Біла'));
    }
    public function testCrazy30()
    { 
        $this->assertEquals(explode(',','Білас,Білас,Білас,Білас,Білас,Білас,Білас'), $this->object->q('Білас'));
    }
    public function testCrazy31()
    { 
        $this->assertEquals(explode(',','Білодід,Білодід,Білодід,Білодід,Білодід,Білодід,Білодід'), $this->object->q('Білодід'));
    }
    public function testCrazy32()
    { 
        $this->assertEquals(explode(',','Білоус,Білоус,Білоус,Білоус,Білоус,Білоус,Білоус'), $this->object->q('Білоус'));
    }
    public function testCrazy33()
    { 
        $this->assertEquals(explode(',','Бабійчук,Бабійчук,Бабійчук,Бабійчук,Бабійчук,Бабійчук,Бабійчук'), $this->object->q('Бабійчук'));
    }
    public function testCrazy34()
    { 
        $this->assertEquals(explode(',','Бабак,Бабак,Бабак,Бабак,Бабак,Бабак,Бабак'), $this->object->q('Бабак'));
    }
    public function testCrazy35()
    { 
        $this->assertEquals(explode(',','Бабчук,Бабчук,Бабчук,Бабчук,Бабчук,Бабчук,Бабчук'), $this->object->q('Бабчук'));
    }
    public function testCrazy36()
    { 
        $this->assertEquals(explode(',','Багмут,Багмут,Багмут,Багмут,Багмут,Багмут,Багмут'), $this->object->q('Багмут'));
    }
    public function testCrazy37()
    { 
        $this->assertEquals(explode(',','Багрій,Багрій,Багрій,Багрій,Багрій,Багрій,Багрій'), $this->object->q('Багрій'));
    }
    public function testCrazy38()
    { 
        $this->assertEquals(explode(',','Бадлак,Бадлак,Бадлак,Бадлак,Бадлак,Бадлак,Бадлак'), $this->object->q('Бадлак'));
    }
    public function testCrazy39()
    { 
        $this->assertEquals(explode(',','Бажан,Бажан,Бажан,Бажан,Бажан,Бажан,Бажан'), $this->object->q('Бажан'));
    }
    public function testCrazy40()
    { 
        $this->assertEquals(explode(',','Балтача,Балтачи,Балтачі,Балтачу,Балтачою,Балтачі,Балтачо'), $this->object->q('Балтача'));
    }
    public function testCrazy41()
    { 
        $this->assertEquals(explode(',','Бандура,Бандури,Бандурі,Бандуру,Бандурою,Бандурі,Бандуро'), $this->object->q('Бандура'));
    }
    public function testCrazy42()
    { 
        $this->assertEquals(explode(',','Баран,Баран,Баран,Баран,Баран,Баран,Баран'), $this->object->q('Баран'));
    }
    public function testCrazy43()
    { 
        $this->assertEquals(explode(',','Баранець,Баранець,Баранець,Баранець,Баранець,Баранець,Баранець'), $this->object->q('Баранець'));
    }
    public function testCrazy44()
    { 
        $this->assertEquals(explode(',','Барановська,Барановської,Барановській,Барановську,Барановською,Барановській,Барановсько'), $this->object->q('Барановська'));
    }
    public function testCrazy45()
    { 
        $this->assertEquals(explode(',','Баранюк,Баранюк,Баранюк,Баранюк,Баранюк,Баранюк,Баранюк'), $this->object->q('Баранюк'));
    }
    public function testCrazy46()
    { 
        $this->assertEquals(explode(',','Батюк,Батюк,Батюк,Батюк,Батюк,Батюк,Батюк'), $this->object->q('Батюк'));
    }
    public function testCrazy47()
    { 
        $this->assertEquals(explode(',','Бачинська,Бачинської,Бачинській,Бачинську,Бачинською,Бачинській,Бачинсько'), $this->object->q('Бачинська'));
    }
    public function testCrazy48()
    { 
        $this->assertEquals(explode(',','Бебешко,Бебешко,Бебешко,Бебешко,Бебешко,Бебешко,Бебешко'), $this->object->q('Бебешко'));
    }
    public function testCrazy49()
    { 
        $this->assertEquals(explode(',','Бевзенко,Бевзенко,Бевзенко,Бевзенко,Бевзенко,Бевзенко,Бевзенко'), $this->object->q('Бевзенко'));
    }
    public function testCrazy50()
    { 
        $this->assertEquals(explode(',','Березовчук,Березовчук,Березовчук,Березовчук,Березовчук,Березовчук,Березовчук'), $this->object->q('Березовчук'));
    }
    public function testCrazy51()
    { 
        $this->assertEquals(explode(',','Божик,Божик,Божик,Божик,Божик,Божик,Божик'), $this->object->q('Божик'));
    }
    public function testCrazy52()
    { 
        $this->assertEquals(explode(',','Божко,Божко,Божко,Божко,Божко,Божко,Божко'), $this->object->q('Божко'));
    }
    public function testCrazy53()
    { 
        $this->assertEquals(explode(',','Бойко,Бойко,Бойко,Бойко,Бойко,Бойко,Бойко'), $this->object->q('Бойко'));
    }
    public function testCrazy54()
    { 
        $this->assertEquals(explode(',','Бойцун,Бойцун,Бойцун,Бойцун,Бойцун,Бойцун,Бойцун'), $this->object->q('Бойцун'));
    }
    public function testCrazy55()
    { 
        $this->assertEquals(explode(',','Бойчак,Бойчак,Бойчак,Бойчак,Бойчак,Бойчак,Бойчак'), $this->object->q('Бойчак'));
    }
    public function testCrazy56()
    { 
        $this->assertEquals(explode(',','Бойчук,Бойчук,Бойчук,Бойчук,Бойчук,Бойчук,Бойчук'), $this->object->q('Бойчук'));
    }
    public function testCrazy57()
    { 
        $this->assertEquals(explode(',','Бондар,Бондар,Бондар,Бондар,Бондар,Бондар,Бондар'), $this->object->q('Бондар'));
    }
    public function testCrazy58()
    { 
        $this->assertEquals(explode(',','Бондаренко,Бондаренко,Бондаренко,Бондаренко,Бондаренко,Бондаренко,Бондаренко'), $this->object->q('Бондаренко'));
    }
    public function testCrazy59()
    { 
        $this->assertEquals(explode(',','Бондарчук,Бондарчук,Бондарчук,Бондарчук,Бондарчук,Бондарчук,Бондарчук'), $this->object->q('Бондарчук'));
    }
    public function testCrazy60()
    { 
        $this->assertEquals(explode(',','Борисенко,Борисенко,Борисенко,Борисенко,Борисенко,Борисенко,Борисенко'), $this->object->q('Борисенко'));
    }
    public function testCrazy61()
    { 
        $this->assertEquals(explode(',','Борисикевич,Борисикевич,Борисикевич,Борисикевич,Борисикевич,Борисикевич,Борисикевич'), $this->object->q('Борисикевич'));
    }
    public function testCrazy62()
    { 
        $this->assertEquals(explode(',','Братусь,Братусь,Братусь,Братусь,Братусь,Братусь,Братусь'), $this->object->q('Братусь'));
    }
    public function testCrazy63()
    { 
        $this->assertEquals(explode(',','Букатевич,Букатевич,Букатевич,Букатевич,Букатевич,Букатевич,Букатевич'), $this->object->q('Букатевич'));
    }
    public function testCrazy64()
    { 
        $this->assertEquals(explode(',','Бурбан,Бурбан,Бурбан,Бурбан,Бурбан,Бурбан,Бурбан'), $this->object->q('Бурбан'));
    }
    public function testCrazy65()
    { 
        $this->assertEquals(explode(',','Бурячок,Бурячок,Бурячок,Бурячок,Бурячок,Бурячок,Бурячок'), $this->object->q('Бурячок'));
    }
    public function testCrazy66()
    { 
        $this->assertEquals(explode(',','Бутейко,Бутейко,Бутейко,Бутейко,Бутейко,Бутейко,Бутейко'), $this->object->q('Бутейко'));
    }
    public function testCrazy67()
    { 
        $this->assertEquals(explode(',','Бутенко,Бутенко,Бутенко,Бутенко,Бутенко,Бутенко,Бутенко'), $this->object->q('Бутенко'));
    }
    public function testCrazy68()
    { 
        $this->assertEquals(explode(',','Бутник,Бутник,Бутник,Бутник,Бутник,Бутник,Бутник'), $this->object->q('Бутник'));
    }
    public function testCrazy69()
    { 
        $this->assertEquals(explode(',','Бухало,Бухало,Бухало,Бухало,Бухало,Бухало,Бухало'), $this->object->q('Бухало'));
    }
    public function testCrazy70()
    { 
        $this->assertEquals(explode(',','Василашко,Василашко,Василашко,Василашко,Василашко,Василашко,Василашко'), $this->object->q('Василашко'));
    }
    public function testCrazy71()
    { 
        $this->assertEquals(explode(',','Василенко,Василенко,Василенко,Василенко,Василенко,Василенко,Василенко'), $this->object->q('Василенко'));
    }
    public function testCrazy72()
    { 
        $this->assertEquals(explode(',','Васильченко,Васильченко,Васильченко,Васильченко,Васильченко,Васильченко,Васильченко'), $this->object->q('Васильченко'));
    }
    public function testCrazy73()
    { 
        $this->assertEquals(explode(',','Васильчук,Васильчук,Васильчук,Васильчук,Васильчук,Васильчук,Васильчук'), $this->object->q('Васильчук'));
    }
    public function testCrazy74()
    { 
        $this->assertEquals(explode(',','Васкул,Васкул,Васкул,Васкул,Васкул,Васкул,Васкул'), $this->object->q('Васкул'));
    }
    public function testCrazy75()
    { 
        $this->assertEquals(explode(',','Вахній,Вахній,Вахній,Вахній,Вахній,Вахній,Вахній'), $this->object->q('Вахній'));
    }
    public function testCrazy76()
    { 
        $this->assertEquals(explode(',','Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко,Ващенко-Захарченко'), $this->object->q('Ващенко-Захарченко'));
    }
    public function testCrazy77()
    { 
        $this->assertEquals(explode(',','Вдовиченко,Вдовиченко,Вдовиченко,Вдовиченко,Вдовиченко,Вдовиченко,Вдовиченко'), $this->object->q('Вдовиченко'));
    }
    public function testCrazy78()
    { 
        $this->assertEquals(explode(',','Величко,Величко,Величко,Величко,Величко,Величко,Величко'), $this->object->q('Величко'));
    }
    public function testCrazy79()
    { 
        $this->assertEquals(explode(',','Вертипорох,Вертипорох,Вертипорох,Вертипорох,Вертипорох,Вертипорох,Вертипорох'), $this->object->q('Вертипорох'));
    }
    public function testCrazy80()
    { 
        $this->assertEquals(explode(',','Верхола,Верхоли,Верхолі,Верхолу,Верхолою,Верхолі,Верхоло'), $this->object->q('Верхола'));
    }
    public function testCrazy81()
    { 
        $this->assertEquals(explode(',','Винокур,Винокур,Винокур,Винокур,Винокур,Винокур,Винокур'), $this->object->q('Винокур'));
    }
    public function testCrazy82()
    { 
        $this->assertEquals(explode(',','Влох,Влох,Влох,Влох,Влох,Влох,Влох'), $this->object->q('Влох'));
    }
    public function testCrazy83()
    { 
        $this->assertEquals(explode(',','Вобла,Вобли,Воблі,Воблу,Воблою,Воблі,Вобло'), $this->object->q('Вобла'));
    }
    public function testCrazy84()
    { 
        $this->assertEquals(explode(',','Вовк,Вовк,Вовк,Вовк,Вовк,Вовк,Вовк'), $this->object->q('Вовк'));
    }
    public function testCrazy85()
    { 
        $this->assertEquals(explode(',','Возняк,Возняк,Возняк,Возняк,Возняк,Возняк,Возняк'), $this->object->q('Возняк'));
    }
    public function testCrazy86()
    { 
        $this->assertEquals(explode(',','Волох,Волох,Волох,Волох,Волох,Волох,Волох'), $this->object->q('Волох'));
    }
    public function testCrazy87()
    { 
        $this->assertEquals(explode(',','Волощук,Волощук,Волощук,Волощук,Волощук,Волощук,Волощук'), $this->object->q('Волощук'));
    }
    public function testCrazy88()
    { 
        $this->assertEquals(explode(',','Вороновська,Вороновської,Вороновській,Вороновську,Вороновською,Вороновській,Вороновсько'), $this->object->q('Вороновська'));
    }
    public function testCrazy89()
    { 
        $this->assertEquals(explode(',','Гавриленко,Гавриленко,Гавриленко,Гавриленко,Гавриленко,Гавриленко,Гавриленко'), $this->object->q('Гавриленко'));
    }
    public function testCrazy90()
    { 
        $this->assertEquals(explode(',','Гаврилюк,Гаврилюк,Гаврилюк,Гаврилюк,Гаврилюк,Гаврилюк,Гаврилюк'), $this->object->q('Гаврилюк'));
    }
    public function testCrazy91()
    { 
        $this->assertEquals(explode(',','Гальченко,Гальченко,Гальченко,Гальченко,Гальченко,Гальченко,Гальченко'), $this->object->q('Гальченко'));
    }
    public function testCrazy92()
    { 
        $this->assertEquals(explode(',','Гамалія,Гамалії,Гамалії,Гамалію,Гамалією,Гамалії,Гамаліє'), $this->object->q('Гамалія'));
    }
    public function testCrazy93()
    { 
        $this->assertEquals(explode(',','Ганицька,Ганицької,Ганицькій,Ганицьку,Ганицькою,Ганицькій,Ганицько'), $this->object->q('Ганицька'));
    }
    public function testCrazy94()
    { 
        $this->assertEquals(explode(',','Гарань,Гарань,Гарань,Гарань,Гарань,Гарань,Гарань'), $this->object->q('Гарань'));
    }
    public function testCrazy95()
    { 
        $this->assertEquals(explode(',','Гармаш,Гармаш,Гармаш,Гармаш,Гармаш,Гармаш,Гармаш'), $this->object->q('Гармаш'));
    }
    public function testCrazy96()
    { 
        $this->assertEquals(explode(',','Гасай,Гасай,Гасай,Гасай,Гасай,Гасай,Гасай'), $this->object->q('Гасай'));
    }
    public function testCrazy97()
    { 
        $this->assertEquals(explode(',','Гасюк,Гасюк,Гасюк,Гасюк,Гасюк,Гасюк,Гасюк'), $this->object->q('Гасюк'));
    }
    public function testCrazy98()
    { 
        $this->assertEquals(explode(',','Герасименко,Герасименко,Герасименко,Герасименко,Герасименко,Герасименко,Герасименко'), $this->object->q('Герасименко'));
    }
    public function testCrazy99()
    { 
        $this->assertEquals(explode(',','Геращенко,Геращенко,Геращенко,Геращенко,Геращенко,Геращенко,Геращенко'), $this->object->q('Геращенко'));
    }
    public function testCrazy100()
    { 
        $this->assertEquals(explode(',','Герцик,Герцик,Герцик,Герцик,Герцик,Герцик,Герцик'), $this->object->q('Герцик'));
    }
    public function testCrazy101()
    { 
        $this->assertEquals(explode(',','Гладченко,Гладченко,Гладченко,Гладченко,Гладченко,Гладченко,Гладченко'), $this->object->q('Гладченко'));
    }
    public function testCrazy102()
    { 
        $this->assertEquals(explode(',','Глоба,Глоби,Глобі,Глобу,Глобою,Глобі,Глобо'), $this->object->q('Глоба'));
    }
    public function testCrazy103()
    { 
        $this->assertEquals(explode(',','Гнатюк,Гнатюк,Гнатюк,Гнатюк,Гнатюк,Гнатюк,Гнатюк'), $this->object->q('Гнатюк'));
    }
    public function testCrazy104()
    { 
        $this->assertEquals(explode(',','Гоголь,Гоголь,Гоголь,Гоголь,Гоголь,Гоголь,Гоголь'), $this->object->q('Гоголь'));
    }
    public function testCrazy105()
    { 
        $this->assertEquals(explode(',','Годунок,Годунок,Годунок,Годунок,Годунок,Годунок,Годунок'), $this->object->q('Годунок'));
    }
    public function testCrazy106()
    { 
        $this->assertEquals(explode(',','Головата,Головати,Головаті,Головату,Головатою,Головаті,Головато'), $this->object->q('Головата'));
    }
    public function testCrazy107()
    { 
        $this->assertEquals(explode(',','Головко,Головко,Головко,Головко,Головко,Головко,Головко'), $this->object->q('Головко'));
    }
    public function testCrazy108()
    { 
        $this->assertEquals(explode(',','Голуб,Голуб,Голуб,Голуб,Голуб,Голуб,Голуб'), $this->object->q('Голуб'));
    }
    public function testCrazy109()
    { 
        $this->assertEquals(explode(',','Голубнича,Голубничи,Голубничі,Голубничу,Голубничою,Голубничі,Голубничо'), $this->object->q('Голубнича'));
    }
    public function testCrazy110()
    { 
        $this->assertEquals(explode(',','Гонта,Гонти,Гонті,Гонту,Гонтою,Гонті,Гонто'), $this->object->q('Гонта'));
    }
    public function testCrazy111()
    { 
        $this->assertEquals(explode(',','Гончар,Гончар,Гончар,Гончар,Гончар,Гончар,Гончар'), $this->object->q('Гончар'));
    }
    public function testCrazy112()
    { 
        $this->assertEquals(explode(',','Гончаренко,Гончаренко,Гончаренко,Гончаренко,Гончаренко,Гончаренко,Гончаренко'), $this->object->q('Гончаренко'));
    }
    public function testCrazy113()
    { 
        $this->assertEquals(explode(',','Горбаль,Горбаль,Горбаль,Горбаль,Горбаль,Горбаль,Горбаль'), $this->object->q('Горбаль'));
    }
    public function testCrazy114()
    { 
        $this->assertEquals(explode(',','Гордієнко,Гордієнко,Гордієнко,Гордієнко,Гордієнко,Гордієнко,Гордієнко'), $this->object->q('Гордієнко'));
    }
    public function testCrazy115()
    { 
        $this->assertEquals(explode(',','Гошовська,Гошовської,Гошовській,Гошовську,Гошовською,Гошовській,Гошовсько'), $this->object->q('Гошовська'));
    }
    public function testCrazy116()
    { 
        $this->assertEquals(explode(',','Грінченко,Грінченко,Грінченко,Грінченко,Грінченко,Грінченко,Грінченко'), $this->object->q('Грінченко'));
    }
    public function testCrazy117()
    { 
        $this->assertEquals(explode(',','Грабович,Грабович,Грабович,Грабович,Грабович,Грабович,Грабович'), $this->object->q('Грабович'));
    }
    public function testCrazy118()
    { 
        $this->assertEquals(explode(',','Грабовська,Грабовської,Грабовській,Грабовську,Грабовською,Грабовській,Грабовсько'), $this->object->q('Грабовська'));
    }
    public function testCrazy119()
    { 
        $this->assertEquals(explode(',','Григоренко,Григоренко,Григоренко,Григоренко,Григоренко,Григоренко,Григоренко'), $this->object->q('Григоренко'));
    }
    public function testCrazy120()
    { 
        $this->assertEquals(explode(',','Григорович,Григорович,Григорович,Григорович,Григорович,Григорович,Григорович'), $this->object->q('Григорович'));
    }
    public function testCrazy121()
    { 
        $this->assertEquals(explode(',','Григорович-Барська,Григорович-Барської,Григорович-Барській,Григорович-Барську,Григорович-Барською,Григорович-Барській,Григорович-Барсько'), $this->object->q('Григорович-Барська'));
    }
    public function testCrazy122()
    { 
        $this->assertEquals(explode(',','Григорчук,Григорчук,Григорчук,Григорчук,Григорчук,Григорчук,Григорчук'), $this->object->q('Григорчук'));
    }
    public function testCrazy123()
    { 
        $this->assertEquals(explode(',','Грицак,Грицак,Грицак,Грицак,Грицак,Грицак,Грицак'), $this->object->q('Грицак'));
    }
    public function testCrazy124()
    { 
        $this->assertEquals(explode(',','Гриценко,Гриценко,Гриценко,Гриценко,Гриценко,Гриценко,Гриценко'), $this->object->q('Гриценко'));
    }
    public function testCrazy125()
    { 
        $this->assertEquals(explode(',','Гришко,Гришко,Гришко,Гришко,Гришко,Гришко,Гришко'), $this->object->q('Гришко'));
    }
    public function testCrazy126()
    { 
        $this->assertEquals(explode(',','Гудзій,Гудзій,Гудзій,Гудзій,Гудзій,Гудзій,Гудзій'), $this->object->q('Гудзій'));
    }
    public function testCrazy127()
    { 
        $this->assertEquals(explode(',','Гудзь,Гудзь,Гудзь,Гудзь,Гудзь,Гудзь,Гудзь'), $this->object->q('Гудзь'));
    }
    public function testCrazy128()
    { 
        $this->assertEquals(explode(',','Гуменюк,Гуменюк,Гуменюк,Гуменюк,Гуменюк,Гуменюк,Гуменюк'), $this->object->q('Гуменюк'));
    }
    public function testCrazy129()
    { 
        $this->assertEquals(explode(',','Гунько,Гунько,Гунько,Гунько,Гунько,Гунько,Гунько'), $this->object->q('Гунько'));
    }
    public function testCrazy130()
    { 
        $this->assertEquals(explode(',','Діденко,Діденко,Діденко,Діденко,Діденко,Діденко,Діденко'), $this->object->q('Діденко'));
    }
    public function testCrazy131()
    { 
        $this->assertEquals(explode(',','Даниленко,Даниленко,Даниленко,Даниленко,Даниленко,Даниленко,Даниленко'), $this->object->q('Даниленко'));
    }
    public function testCrazy132()
    { 
        $this->assertEquals(explode(',','Данькевич,Данькевич,Данькевич,Данькевич,Данькевич,Данькевич,Данькевич'), $this->object->q('Данькевич'));
    }
    public function testCrazy133()
    { 
        $this->assertEquals(explode(',','Дараган,Дараган,Дараган,Дараган,Дараган,Дараган,Дараган'), $this->object->q('Дараган'));
    }
    public function testCrazy134()
    { 
        $this->assertEquals(explode(',','Дашкевич,Дашкевич,Дашкевич,Дашкевич,Дашкевич,Дашкевич,Дашкевич'), $this->object->q('Дашкевич'));
    }
    public function testCrazy135()
    { 
        $this->assertEquals(explode(',','Денисенко,Денисенко,Денисенко,Денисенко,Денисенко,Денисенко,Денисенко'), $this->object->q('Денисенко'));
    }
    public function testCrazy136()
    { 
        $this->assertEquals(explode(',','Джус,Джус,Джус,Джус,Джус,Джус,Джус'), $this->object->q('Джус'));
    }
    public function testCrazy137()
    { 
        $this->assertEquals(explode(',','Дзюба,Дзюби,Дзюбі,Дзюбу,Дзюбою,Дзюбі,Дзюбо'), $this->object->q('Дзюба'));
    }
    public function testCrazy138()
    { 
        $this->assertEquals(explode(',','Дикань,Дикань,Дикань,Дикань,Дикань,Дикань,Дикань'), $this->object->q('Дикань'));
    }
    public function testCrazy139()
    { 
        $this->assertEquals(explode(',','Дмитерко,Дмитерко,Дмитерко,Дмитерко,Дмитерко,Дмитерко,Дмитерко'), $this->object->q('Дмитерко'));
    }
    public function testCrazy140()
    { 
        $this->assertEquals(explode(',','Довженко,Довженко,Довженко,Довженко,Довженко,Довженко,Довженко'), $this->object->q('Довженко'));
    }
    public function testCrazy141()
    { 
        $this->assertEquals(explode(',','Дорош,Дорош,Дорош,Дорош,Дорош,Дорош,Дорош'), $this->object->q('Дорош'));
    }
    public function testCrazy142()
    { 
        $this->assertEquals(explode(',','Дорошенко,Дорошенко,Дорошенко,Дорошенко,Дорошенко,Дорошенко,Дорошенко'), $this->object->q('Дорошенко'));
    }
    public function testCrazy143()
    { 
        $this->assertEquals(explode(',','Доценко,Доценко,Доценко,Доценко,Доценко,Доценко,Доценко'), $this->object->q('Доценко'));
    }
    public function testCrazy144()
    { 
        $this->assertEquals(explode(',','Дочинець,Дочинець,Дочинець,Дочинець,Дочинець,Дочинець,Дочинець'), $this->object->q('Дочинець'));
    }
    public function testCrazy145()
    { 
        $this->assertEquals(explode(',','Дудко,Дудко,Дудко,Дудко,Дудко,Дудко,Дудко'), $this->object->q('Дудко'));
    }
    public function testCrazy146()
    { 
        $this->assertEquals(explode(',','Дяченко,Дяченко,Дяченко,Дяченко,Дяченко,Дяченко,Дяченко'), $this->object->q('Дяченко'));
    }
    public function testCrazy147()
    { 
        $this->assertEquals(explode(',','Ейбоженко,Ейбоженко,Ейбоженко,Ейбоженко,Ейбоженко,Ейбоженко,Ейбоженко'), $this->object->q('Ейбоженко'));
    }
    public function testCrazy148()
    { 
        $this->assertEquals(explode(',','Жайворон,Жайворон,Жайворон,Жайворон,Жайворон,Жайворон,Жайворон'), $this->object->q('Жайворон'));
    }
    public function testCrazy149()
    { 
        $this->assertEquals(explode(',','Жаліло,Жаліло,Жаліло,Жаліло,Жаліло,Жаліло,Жаліло'), $this->object->q('Жаліло'));
    }
    public function testCrazy150()
    { 
        $this->assertEquals(explode(',','Жежерін,Жежерін,Жежерін,Жежерін,Жежерін,Жежерін,Жежерін'), $this->object->q('Жежерін'));
    }
    public function testCrazy151()
    { 
        $this->assertEquals(explode(',','Желєзняк,Желєзняк,Желєзняк,Желєзняк,Желєзняк,Желєзняк,Желєзняк'), $this->object->q('Желєзняк'));
    }
    public function testCrazy152()
    { 
        $this->assertEquals(explode(',','Железняк,Железняк,Железняк,Железняк,Железняк,Железняк,Железняк'), $this->object->q('Железняк'));
    }
    public function testCrazy153()
    { 
        $this->assertEquals(explode(',','Жилко,Жилко,Жилко,Жилко,Жилко,Жилко,Жилко'), $this->object->q('Жилко'));
    }
    public function testCrazy154()
    { 
        $this->assertEquals(explode(',','Жирко,Жирко,Жирко,Жирко,Жирко,Жирко,Жирко'), $this->object->q('Жирко'));
    }
    public function testCrazy155()
    { 
        $this->assertEquals(explode(',','Жук,Жук,Жук,Жук,Жук,Жук,Жук'), $this->object->q('Жук'));
    }
    public function testCrazy156()
    { 
        $this->assertEquals(explode(',','Жупанська,Жупанської,Жупанській,Жупанську,Жупанською,Жупанській,Жупансько'), $this->object->q('Жупанська'));
    }
    public function testCrazy157()
    { 
        $this->assertEquals(explode(',','Заєць,Заєць,Заєць,Заєць,Заєць,Заєць,Заєць'), $this->object->q('Заєць'));
    }
    public function testCrazy158()
    { 
        $this->assertEquals(explode(',','Забашта,Забашти,Забашті,Забашту,Забаштою,Забашті,Забашто'), $this->object->q('Забашта'));
    }
    public function testCrazy159()
    { 
        $this->assertEquals(explode(',','Заболотна,Заболотної,Заболотній,Заболотну,Заболотною,Заболотній,Заболотно'), $this->object->q('Заболотна'));
    }
    public function testCrazy160()
    { 
        $this->assertEquals(explode(',','Завальнюк,Завальнюк,Завальнюк,Завальнюк,Завальнюк,Завальнюк,Завальнюк'), $this->object->q('Завальнюк'));
    }
    public function testCrazy161()
    { 
        $this->assertEquals(explode(',','Закусило,Закусило,Закусило,Закусило,Закусило,Закусило,Закусило'), $this->object->q('Закусило'));
    }
    public function testCrazy162()
    { 
        $this->assertEquals(explode(',','Залізняк,Залізняк,Залізняк,Залізняк,Залізняк,Залізняк,Залізняк'), $this->object->q('Залізняк'));
    }
    public function testCrazy163()
    { 
        $this->assertEquals(explode(',','Заруба,Заруби,Зарубі,Зарубу,Зарубою,Зарубі,Зарубо'), $this->object->q('Заруба'));
    }
    public function testCrazy164()
    { 
        $this->assertEquals(explode(',','Засядько,Засядько,Засядько,Засядько,Засядько,Засядько,Засядько'), $this->object->q('Засядько'));
    }
    public function testCrazy165()
    { 
        $this->assertEquals(explode(',','Захаренко,Захаренко,Захаренко,Захаренко,Захаренко,Захаренко,Захаренко'), $this->object->q('Захаренко'));
    }
    public function testCrazy166()
    { 
        $this->assertEquals(explode(',','Захарчук,Захарчук,Захарчук,Захарчук,Захарчук,Захарчук,Захарчук'), $this->object->q('Захарчук'));
    }
    public function testCrazy167()
    { 
        $this->assertEquals(explode(',','Заяць,Заяць,Заяць,Заяць,Заяць,Заяць,Заяць'), $this->object->q('Заяць'));
    }
    public function testCrazy168()
    { 
        $this->assertEquals(explode(',','Заячківська,Заячківської,Заячківській,Заячківську,Заячківською,Заячківській,Заячківсько'), $this->object->q('Заячківська'));
    }
    public function testCrazy169()
    { 
        $this->assertEquals(explode(',','Зленко,Зленко,Зленко,Зленко,Зленко,Зленко,Зленко'), $this->object->q('Зленко'));
    }
    public function testCrazy170()
    { 
        $this->assertEquals(explode(',','Золотаренко,Золотаренко,Золотаренко,Золотаренко,Золотаренко,Золотаренко,Золотаренко'), $this->object->q('Золотаренко'));
    }
    public function testCrazy171()
    { 
        $this->assertEquals(explode(',','Кабачок,Кабачок,Кабачок,Кабачок,Кабачок,Кабачок,Кабачок'), $this->object->q('Кабачок'));
    }
    public function testCrazy172()
    { 
        $this->assertEquals(explode(',','Каганець,Каганець,Каганець,Каганець,Каганець,Каганець,Каганець'), $this->object->q('Каганець'));
    }
    public function testCrazy173()
    { 
        $this->assertEquals(explode(',','Калинович,Калинович,Калинович,Калинович,Калинович,Калинович,Калинович'), $this->object->q('Калинович'));
    }
    public function testCrazy174()
    { 
        $this->assertEquals(explode(',','Кармалюк,Кармалюк,Кармалюк,Кармалюк,Кармалюк,Кармалюк,Кармалюк'), $this->object->q('Кармалюк'));
    }
    public function testCrazy175()
    { 
        $this->assertEquals(explode(',','Карпенко,Карпенко,Карпенко,Карпенко,Карпенко,Карпенко,Карпенко'), $this->object->q('Карпенко'));
    }
    public function testCrazy176()
    { 
        $this->assertEquals(explode(',','Кириленко,Кириленко,Кириленко,Кириленко,Кириленко,Кириленко,Кириленко'), $this->object->q('Кириленко'));
    }
    public function testCrazy177()
    { 
        $this->assertEquals(explode(',','Китаста,Китасти,Китасті,Китасту,Китастою,Китасті,Китасто'), $this->object->q('Китаста'));
    }
    public function testCrazy178()
    { 
        $this->assertEquals(explode(',','Кицай,Кицай,Кицай,Кицай,Кицай,Кицай,Кицай'), $this->object->q('Кицай'));
    }
    public function testCrazy179()
    { 
        $this->assertEquals(explode(',','Клименко,Клименко,Клименко,Клименко,Клименко,Клименко,Клименко'), $this->object->q('Клименко'));
    }
    public function testCrazy180()
    { 
        $this->assertEquals(explode(',','Климчук,Климчук,Климчук,Климчук,Климчук,Климчук,Климчук'), $this->object->q('Климчук'));
    }
    public function testCrazy181()
    { 
        $this->assertEquals(explode(',','Кмета,Кмети,Кметі,Кмету,Кметою,Кметі,Кмето'), $this->object->q('Кмета'));
    }
    public function testCrazy182()
    { 
        $this->assertEquals(explode(',','Книш,Книш,Книш,Книш,Книш,Книш,Книш'), $this->object->q('Книш'));
    }
    public function testCrazy183()
    { 
        $this->assertEquals(explode(',','Коваленко,Коваленко,Коваленко,Коваленко,Коваленко,Коваленко,Коваленко'), $this->object->q('Коваленко'));
    }
    public function testCrazy184()
    { 
        $this->assertEquals(explode(',','Коваль,Коваль,Коваль,Коваль,Коваль,Коваль,Коваль'), $this->object->q('Коваль'));
    }
    public function testCrazy185()
    { 
        $this->assertEquals(explode(',','Ковальчик,Ковальчик,Ковальчик,Ковальчик,Ковальчик,Ковальчик,Ковальчик'), $this->object->q('Ковальчик'));
    }
    public function testCrazy186()
    { 
        $this->assertEquals(explode(',','Ковальчук,Ковальчук,Ковальчук,Ковальчук,Ковальчук,Ковальчук,Ковальчук'), $this->object->q('Ковальчук'));
    }
    public function testCrazy187()
    { 
        $this->assertEquals(explode(',','Кованько,Кованько,Кованько,Кованько,Кованько,Кованько,Кованько'), $this->object->q('Кованько'));
    }
    public function testCrazy188()
    { 
        $this->assertEquals(explode(',','Ковтун,Ковтун,Ковтун,Ковтун,Ковтун,Ковтун,Ковтун'), $this->object->q('Ковтун'));
    }
    public function testCrazy189()
    { 
        $this->assertEquals(explode(',','Козаченко,Козаченко,Козаченко,Козаченко,Козаченко,Козаченко,Козаченко'), $this->object->q('Козаченко'));
    }
    public function testCrazy190()
    { 
        $this->assertEquals(explode(',','Козачинська,Козачинської,Козачинській,Козачинську,Козачинською,Козачинській,Козачинсько'), $this->object->q('Козачинська'));
    }
    public function testCrazy191()
    { 
        $this->assertEquals(explode(',','Козачок,Козачок,Козачок,Козачок,Козачок,Козачок,Козачок'), $this->object->q('Козачок'));
    }
    public function testCrazy192()
    { 
        $this->assertEquals(explode(',','Козубенко,Козубенко,Козубенко,Козубенко,Козубенко,Козубенко,Козубенко'), $this->object->q('Козубенко'));
    }
    public function testCrazy193()
    { 
        $this->assertEquals(explode(',','Колесник,Колесник,Колесник,Колесник,Колесник,Колесник,Колесник'), $this->object->q('Колесник'));
    }
    public function testCrazy194()
    { 
        $this->assertEquals(explode(',','Колодій,Колодій,Колодій,Колодій,Колодій,Колодій,Колодій'), $this->object->q('Колодій'));
    }
    public function testCrazy195()
    { 
        $this->assertEquals(explode(',','Колодна,Колодни,Колодні,Колодну,Колодною,Колодні,Колодно'), $this->object->q('Колодна'));
    }
    public function testCrazy196()
    { 
        $this->assertEquals(explode(',','Коломієць,Коломієць,Коломієць,Коломієць,Коломієць,Коломієць,Коломієць'), $this->object->q('Коломієць'));
    }
    public function testCrazy197()
    { 
        $this->assertEquals(explode(',','Комар,Комар,Комар,Комар,Комар,Комар,Комар'), $this->object->q('Комар'));
    }
    public function testCrazy198()
    { 
        $this->assertEquals(explode(',','Кондратюк,Кондратюк,Кондратюк,Кондратюк,Кондратюк,Кондратюк,Кондратюк'), $this->object->q('Кондратюк'));
    }
    public function testCrazy199()
    { 
        $this->assertEquals(explode(',','Корецька,Корецької,Корецькій,Корецьку,Корецькою,Корецькій,Корецько'), $this->object->q('Корецька'));
    }
    public function testCrazy200()
    { 
        $this->assertEquals(explode(',','Корж,Корж,Корж,Корж,Корж,Корж,Корж'), $this->object->q('Корж'));
    }
    public function testCrazy201()
    { 
        $this->assertEquals(explode(',','Корнійчук,Корнійчук,Корнійчук,Корнійчук,Корнійчук,Корнійчук,Корнійчук'), $this->object->q('Корнійчук'));
    }
    public function testCrazy202()
    { 
        $this->assertEquals(explode(',','Коробка,Коробки,Коробці,Коробку,Коробкою,Коробці,Коробко'), $this->object->q('Коробка'));
    }
    public function testCrazy203()
    { 
        $this->assertEquals(explode(',','Королюк,Королюк,Королюк,Королюк,Королюк,Королюк,Королюк'), $this->object->q('Королюк'));
    }
    public function testCrazy204()
    { 
        $this->assertEquals(explode(',','Короткевич,Короткевич,Короткевич,Короткевич,Короткевич,Короткевич,Короткевич'), $this->object->q('Короткевич'));
    }
    public function testCrazy205()
    { 
        $this->assertEquals(explode(',','Корпанюк,Корпанюк,Корпанюк,Корпанюк,Корпанюк,Корпанюк,Корпанюк'), $this->object->q('Корпанюк'));
    }
    public function testCrazy206()
    { 
        $this->assertEquals(explode(',','Корчак,Корчак,Корчак,Корчак,Корчак,Корчак,Корчак'), $this->object->q('Корчак'));
    }
    public function testCrazy207()
    { 
        $this->assertEquals(explode(',','Корчинська,Корчинської,Корчинській,Корчинську,Корчинською,Корчинській,Корчинсько'), $this->object->q('Корчинська'));
    }
    public function testCrazy208()
    { 
        $this->assertEquals(explode(',','Косенко,Косенко,Косенко,Косенко,Косенко,Косенко,Косенко'), $this->object->q('Косенко'));
    }
    public function testCrazy209()
    { 
        $this->assertEquals(explode(',','Костенко,Костенко,Костенко,Костенко,Костенко,Костенко,Костенко'), $this->object->q('Костенко'));
    }
    public function testCrazy210()
    { 
        $this->assertEquals(explode(',','Коструба,Коструби,Кострубі,Кострубу,Кострубою,Кострубі,Кострубо'), $this->object->q('Коструба'));
    }
    public function testCrazy211()
    { 
        $this->assertEquals(explode(',','Костюк,Костюк,Костюк,Костюк,Костюк,Костюк,Костюк'), $this->object->q('Костюк'));
    }
    public function testCrazy212()
    { 
        $this->assertEquals(explode(',','Котляр,Котляр,Котляр,Котляр,Котляр,Котляр,Котляр'), $this->object->q('Котляр'));
    }
    public function testCrazy213()
    { 
        $this->assertEquals(explode(',','Котляревська,Котляревської,Котляревській,Котляревську,Котляревською,Котляревській,Котляревсько'), $this->object->q('Котляревська'));
    }
    public function testCrazy214()
    { 
        $this->assertEquals(explode(',','Кравченко,Кравченко,Кравченко,Кравченко,Кравченко,Кравченко,Кравченко'), $this->object->q('Кравченко'));
    }
    public function testCrazy215()
    { 
        $this->assertEquals(explode(',','Кравчук,Кравчук,Кравчук,Кравчук,Кравчук,Кравчук,Кравчук'), $this->object->q('Кравчук'));
    }
    public function testCrazy216()
    { 
        $this->assertEquals(explode(',','Красовська,Красовської,Красовській,Красовську,Красовською,Красовській,Красовсько'), $this->object->q('Красовська'));
    }
    public function testCrazy217()
    { 
        $this->assertEquals(explode(',','Криворучко,Криворучко,Криворучко,Криворучко,Криворучко,Криворучко,Криворучко'), $this->object->q('Криворучко'));
    }
    public function testCrazy218()
    { 
        $this->assertEquals(explode(',','Крикуненко,Крикуненко,Крикуненко,Крикуненко,Крикуненко,Крикуненко,Крикуненко'), $this->object->q('Крикуненко'));
    }
    public function testCrazy219()
    { 
        $this->assertEquals(explode(',','Кузьмінська,Кузьмінської,Кузьмінській,Кузьмінську,Кузьмінською,Кузьмінській,Кузьмінсько'), $this->object->q('Кузьмінська'));
    }
    public function testCrazy220()
    { 
        $this->assertEquals(explode(',','Кулиняк,Кулиняк,Кулиняк,Кулиняк,Кулиняк,Кулиняк,Кулиняк'), $this->object->q('Кулиняк'));
    }
    public function testCrazy221()
    { 
        $this->assertEquals(explode(',','Кульчицька,Кульчицької,Кульчицькій,Кульчицьку,Кульчицькою,Кульчицькій,Кульчицько'), $this->object->q('Кульчицька'));
    }
    public function testCrazy222()
    { 
        $this->assertEquals(explode(',','Купчинська,Купчинської,Купчинській,Купчинську,Купчинською,Купчинській,Купчинсько'), $this->object->q('Купчинська'));
    }
    public function testCrazy223()
    { 
        $this->assertEquals(explode(',','Кухаренко,Кухаренко,Кухаренко,Кухаренко,Кухаренко,Кухаренко,Кухаренко'), $this->object->q('Кухаренко'));
    }
    public function testCrazy224()
    { 
        $this->assertEquals(explode(',','Куц,Куц,Куц,Куц,Куц,Куц,Куц'), $this->object->q('Куц'));
    }
    public function testCrazy225()
    { 
        $this->assertEquals(explode(',','Куценко,Куценко,Куценко,Куценко,Куценко,Куценко,Куценко'), $this->object->q('Куценко'));
    }
    public function testCrazy226()
    { 
        $this->assertEquals(explode(',','Кучер,Кучер,Кучер,Кучер,Кучер,Кучер,Кучер'), $this->object->q('Кучер'));
    }
    public function testCrazy227()
    { 
        $this->assertEquals(explode(',','Кучеренко,Кучеренко,Кучеренко,Кучеренко,Кучеренко,Кучеренко,Кучеренко'), $this->object->q('Кучеренко'));
    }
    public function testCrazy228()
    { 
        $this->assertEquals(explode(',','Кушнір,Кушнір,Кушнір,Кушнір,Кушнір,Кушнір,Кушнір'), $this->object->q('Кушнір'));
    }
    public function testCrazy229()
    { 
        $this->assertEquals(explode(',','Лаба,Лаби,Лабі,Лабу,Лабою,Лабі,Лабо'), $this->object->q('Лаба'));
    }
    public function testCrazy230()
    { 
        $this->assertEquals(explode(',','Лаврін,Лаврін,Лаврін,Лаврін,Лаврін,Лаврін,Лаврін'), $this->object->q('Лаврін'));
    }
    public function testCrazy231()
    { 
        $this->assertEquals(explode(',','Лаврик,Лаврик,Лаврик,Лаврик,Лаврик,Лаврик,Лаврик'), $this->object->q('Лаврик'));
    }
    public function testCrazy232()
    { 
        $this->assertEquals(explode(',','Лавриненко,Лавриненко,Лавриненко,Лавриненко,Лавриненко,Лавриненко,Лавриненко'), $this->object->q('Лавриненко'));
    }
    public function testCrazy233()
    { 
        $this->assertEquals(explode(',','Лазарчук,Лазарчук,Лазарчук,Лазарчук,Лазарчук,Лазарчук,Лазарчук'), $this->object->q('Лазарчук'));
    }
    public function testCrazy234()
    { 
        $this->assertEquals(explode(',','Лазорко,Лазорко,Лазорко,Лазорко,Лазорко,Лазорко,Лазорко'), $this->object->q('Лазорко'));
    }
    public function testCrazy235()
    { 
        $this->assertEquals(explode(',','Левицька,Левицької,Левицькій,Левицьку,Левицькою,Левицькій,Левицько'), $this->object->q('Левицька'));
    }
    public function testCrazy236()
    { 
        $this->assertEquals(explode(',','Левченко,Левченко,Левченко,Левченко,Левченко,Левченко,Левченко'), $this->object->q('Левченко'));
    }
    public function testCrazy237()
    { 
        $this->assertEquals(explode(',','Лисенко,Лисенко,Лисенко,Лисенко,Лисенко,Лисенко,Лисенко'), $this->object->q('Лисенко'));
    }
    public function testCrazy238()
    { 
        $this->assertEquals(explode(',','Литвиненко,Литвиненко,Литвиненко,Литвиненко,Литвиненко,Литвиненко,Литвиненко'), $this->object->q('Литвиненко'));
    }
    public function testCrazy239()
    { 
        $this->assertEquals(explode(',','Литовченко,Литовченко,Литовченко,Литовченко,Литовченко,Литовченко,Литовченко'), $this->object->q('Литовченко'));
    }
    public function testCrazy240()
    { 
        $this->assertEquals(explode(',','Лозина-Лозинська,Лозина-Лозинської,Лозина-Лозинській,Лозина-Лозинську,Лозина-Лозинською,Лозина-Лозинській,Лозина-Лозинсько'), $this->object->q('Лозина-Лозинська'));
    }
    public function testCrazy241()
    { 
        $this->assertEquals(explode(',','Лопатинська,Лопатинської,Лопатинській,Лопатинську,Лопатинською,Лопатинській,Лопатинсько'), $this->object->q('Лопатинська'));
    }
    public function testCrazy242()
    { 
        $this->assertEquals(explode(',','Лукомська,Лукомської,Лукомській,Лукомську,Лукомською,Лукомській,Лукомсько'), $this->object->q('Лукомська'));
    }
    public function testCrazy243()
    { 
        $this->assertEquals(explode(',','Луценко,Луценко,Луценко,Луценко,Луценко,Луценко,Луценко'), $this->object->q('Луценко'));
    }
    public function testCrazy244()
    { 
        $this->assertEquals(explode(',','Людкевич,Людкевич,Людкевич,Людкевич,Людкевич,Людкевич,Людкевич'), $this->object->q('Людкевич'));
    }
    public function testCrazy245()
    { 
        $this->assertEquals(explode(',','Ляшенко,Ляшенко,Ляшенко,Ляшенко,Ляшенко,Ляшенко,Ляшенко'), $this->object->q('Ляшенко'));
    }
    public function testCrazy246()
    { 
        $this->assertEquals(explode(',','Мірошниченко,Мірошниченко,Мірошниченко,Мірошниченко,Мірошниченко,Мірошниченко,Мірошниченко'), $this->object->q('Мірошниченко'));
    }
    public function testCrazy247()
    { 
        $this->assertEquals(explode(',','Мірчук,Мірчук,Мірчук,Мірчук,Мірчук,Мірчук,Мірчук'), $this->object->q('Мірчук'));
    }
    public function testCrazy248()
    { 
        $this->assertEquals(explode(',','Міщенко,Міщенко,Міщенко,Міщенко,Міщенко,Міщенко,Міщенко'), $this->object->q('Міщенко'));
    }
    public function testCrazy249()
    { 
        $this->assertEquals(explode(',','Мазур,Мазур,Мазур,Мазур,Мазур,Мазур,Мазур'), $this->object->q('Мазур'));
    }
    public function testCrazy250()
    { 
        $this->assertEquals(explode(',','Макаренко,Макаренко,Макаренко,Макаренко,Макаренко,Макаренко,Макаренко'), $this->object->q('Макаренко'));
    }
    public function testCrazy251()
    { 
        $this->assertEquals(explode(',','Максименко,Максименко,Максименко,Максименко,Максименко,Максименко,Максименко'), $this->object->q('Максименко'));
    }
    public function testCrazy252()
    { 
        $this->assertEquals(explode(',','Маланчук,Маланчук,Маланчук,Маланчук,Маланчук,Маланчук,Маланчук'), $this->object->q('Маланчук'));
    }
    public function testCrazy253()
    { 
        $this->assertEquals(explode(',','Малишко,Малишко,Малишко,Малишко,Малишко,Малишко,Малишко'), $this->object->q('Малишко'));
    }
    public function testCrazy254()
    { 
        $this->assertEquals(explode(',','Малкович,Малкович,Малкович,Малкович,Малкович,Малкович,Малкович'), $this->object->q('Малкович'));
    }
    public function testCrazy255()
    { 
        $this->assertEquals(explode(',','Мамчур,Мамчур,Мамчур,Мамчур,Мамчур,Мамчур,Мамчур'), $this->object->q('Мамчур'));
    }
    public function testCrazy256()
    { 
        $this->assertEquals(explode(',','Маркевич,Маркевич,Маркевич,Маркевич,Маркевич,Маркевич,Маркевич'), $this->object->q('Маркевич'));
    }
    public function testCrazy257()
    { 
        $this->assertEquals(explode(',','Мартиненко,Мартиненко,Мартиненко,Мартиненко,Мартиненко,Мартиненко,Мартиненко'), $this->object->q('Мартиненко'));
    }
    public function testCrazy258()
    { 
        $this->assertEquals(explode(',','Марунчак,Марунчак,Марунчак,Марунчак,Марунчак,Марунчак,Марунчак'), $this->object->q('Марунчак'));
    }
    public function testCrazy259()
    { 
        $this->assertEquals(explode(',','Марценюк,Марценюк,Марценюк,Марценюк,Марценюк,Марценюк,Марценюк'), $this->object->q('Марценюк'));
    }
    public function testCrazy260()
    { 
        $this->assertEquals(explode(',','Марченко,Марченко,Марченко,Марченко,Марченко,Марченко,Марченко'), $this->object->q('Марченко'));
    }
    public function testCrazy261()
    { 
        $this->assertEquals(explode(',','Марчук,Марчук,Марчук,Марчук,Марчук,Марчук,Марчук'), $this->object->q('Марчук'));
    }
    public function testCrazy262()
    { 
        $this->assertEquals(explode(',','Масоха,Масохи,Масосі,Масоху,Масохою,Масосі,Масохо'), $this->object->q('Масоха'));
    }
    public function testCrazy263()
    { 
        $this->assertEquals(explode(',','Матвієнко,Матвієнко,Матвієнко,Матвієнко,Матвієнко,Матвієнко,Матвієнко'), $this->object->q('Матвієнко'));
    }
    public function testCrazy264()
    { 
        $this->assertEquals(explode(',','Матюшенко,Матюшенко,Матюшенко,Матюшенко,Матюшенко,Матюшенко,Матюшенко'), $this->object->q('Матюшенко'));
    }
    public function testCrazy265()
    { 
        $this->assertEquals(explode(',','Маценко,Маценко,Маценко,Маценко,Маценко,Маценко,Маценко'), $this->object->q('Маценко'));
    }
    public function testCrazy266()
    { 
        $this->assertEquals(explode(',','Мацюк,Мацюк,Мацюк,Мацюк,Мацюк,Мацюк,Мацюк'), $this->object->q('Мацюк'));
    }
    public function testCrazy267()
    { 
        $this->assertEquals(explode(',','Мельник,Мельник,Мельник,Мельник,Мельник,Мельник,Мельник'), $this->object->q('Мельник'));
    }
    public function testCrazy268()
    { 
        $this->assertEquals(explode(',','Мельниченко,Мельниченко,Мельниченко,Мельниченко,Мельниченко,Мельниченко,Мельниченко'), $this->object->q('Мельниченко'));
    }
    public function testCrazy269()
    { 
        $this->assertEquals(explode(',','Мельничук,Мельничук,Мельничук,Мельничук,Мельничук,Мельничук,Мельничук'), $this->object->q('Мельничук'));
    }
    public function testCrazy270()
    { 
        $this->assertEquals(explode(',','Микитенко,Микитенко,Микитенко,Микитенко,Микитенко,Микитенко,Микитенко'), $this->object->q('Микитенко'));
    }
    public function testCrazy271()
    { 
        $this->assertEquals(explode(',','Мирон,Мирон,Мирон,Мирон,Мирон,Мирон,Мирон'), $this->object->q('Мирон'));
    }
    public function testCrazy272()
    { 
        $this->assertEquals(explode(',','Михайленко,Михайленко,Михайленко,Михайленко,Михайленко,Михайленко,Михайленко'), $this->object->q('Михайленко'));
    }
    public function testCrazy273()
    { 
        $this->assertEquals(explode(',','Михайличенко,Михайличенко,Михайличенко,Михайличенко,Михайличенко,Михайличенко,Михайличенко'), $this->object->q('Михайличенко'));
    }
    public function testCrazy274()
    { 
        $this->assertEquals(explode(',','Михайлюк,Михайлюк,Михайлюк,Михайлюк,Михайлюк,Михайлюк,Михайлюк'), $this->object->q('Михайлюк'));
    }
    public function testCrazy275()
    { 
        $this->assertEquals(explode(',','Мицик,Мицик,Мицик,Мицик,Мицик,Мицик,Мицик'), $this->object->q('Мицик'));
    }
    public function testCrazy276()
    { 
        $this->assertEquals(explode(',','Мовчан,Мовчан,Мовчан,Мовчан,Мовчан,Мовчан,Мовчан'), $this->object->q('Мовчан'));
    }
    public function testCrazy277()
    { 
        $this->assertEquals(explode(',','Моргун,Моргун,Моргун,Моргун,Моргун,Моргун,Моргун'), $this->object->q('Моргун'));
    }
    public function testCrazy278()
    { 
        $this->assertEquals(explode(',','Мороз,Мороз,Мороз,Мороз,Мороз,Мороз,Мороз'), $this->object->q('Мороз'));
    }
    public function testCrazy279()
    { 
        $this->assertEquals(explode(',','Москаленко,Москаленко,Москаленко,Москаленко,Москаленко,Москаленко,Москаленко'), $this->object->q('Москаленко'));
    }
    public function testCrazy280()
    { 
        $this->assertEquals(explode(',','Москаль,Москаль,Москаль,Москаль,Москаль,Москаль,Москаль'), $this->object->q('Москаль'));
    }
    public function testCrazy281()
    { 
        $this->assertEquals(explode(',','Мошак,Мошак,Мошак,Мошак,Мошак,Мошак,Мошак'), $this->object->q('Мошак'));
    }
    public function testCrazy282()
    { 
        $this->assertEquals(explode(',','Муратова,Муратової,Муратовій,Муратову,Муратовою,Муратовій,Муратово'), $this->object->q('Муратова'));
    }
    public function testCrazy283()
    { 
        $this->assertEquals(explode(',','Мусієнко,Мусієнко,Мусієнко,Мусієнко,Мусієнко,Мусієнко,Мусієнко'), $this->object->q('Мусієнко'));
    }
    public function testCrazy284()
    { 
        $this->assertEquals(explode(',','Назаренко,Назаренко,Назаренко,Назаренко,Назаренко,Назаренко,Назаренко'), $this->object->q('Назаренко'));
    }
    public function testCrazy285()
    { 
        $this->assertEquals(explode(',','Наливайко,Наливайко,Наливайко,Наливайко,Наливайко,Наливайко,Наливайко'), $this->object->q('Наливайко'));
    }
    public function testCrazy286()
    { 
        $this->assertEquals(explode(',','Негребецька,Негребецької,Негребецькій,Негребецьку,Негребецькою,Негребецькій,Негребецько'), $this->object->q('Негребецька'));
    }
    public function testCrazy287()
    { 
        $this->assertEquals(explode(',','Непорожній,Непорожній,Непорожній,Непорожній,Непорожній,Непорожній,Непорожній'), $this->object->q('Непорожній'));
    }
    public function testCrazy288()
    { 
        $this->assertEquals(explode(',','Нестеренко,Нестеренко,Нестеренко,Нестеренко,Нестеренко,Нестеренко,Нестеренко'), $this->object->q('Нестеренко'));
    }
    public function testCrazy289()
    { 
        $this->assertEquals(explode(',','Нечай,Нечай,Нечай,Нечай,Нечай,Нечай,Нечай'), $this->object->q('Нечай'));
    }
    public function testCrazy290()
    { 
        $this->assertEquals(explode(',','Нечипоренко,Нечипоренко,Нечипоренко,Нечипоренко,Нечипоренко,Нечипоренко,Нечипоренко'), $this->object->q('Нечипоренко'));
    }
    public function testCrazy291()
    { 
        $this->assertEquals(explode(',','Оберемченко,Оберемченко,Оберемченко,Оберемченко,Оберемченко,Оберемченко,Оберемченко'), $this->object->q('Оберемченко'));
    }
    public function testCrazy292()
    { 
        $this->assertEquals(explode(',','Овчаренко,Овчаренко,Овчаренко,Овчаренко,Овчаренко,Овчаренко,Овчаренко'), $this->object->q('Овчаренко'));
    }
    public function testCrazy293()
    { 
        $this->assertEquals(explode(',','Олійник,Олійник,Олійник,Олійник,Олійник,Олійник,Олійник'), $this->object->q('Олійник'));
    }
    public function testCrazy294()
    { 
        $this->assertEquals(explode(',','Олексієнко,Олексієнко,Олексієнко,Олексієнко,Олексієнко,Олексієнко,Олексієнко'), $this->object->q('Олексієнко'));
    }
    public function testCrazy295()
    { 
        $this->assertEquals(explode(',','Омельченко,Омельченко,Омельченко,Омельченко,Омельченко,Омельченко,Омельченко'), $this->object->q('Омельченко'));
    }
    public function testCrazy296()
    { 
        $this->assertEquals(explode(',','Омельчук,Омельчук,Омельчук,Омельчук,Омельчук,Омельчук,Омельчук'), $this->object->q('Омельчук'));
    }
    public function testCrazy297()
    { 
        $this->assertEquals(explode(',','Онищенко,Онищенко,Онищенко,Онищенко,Онищенко,Онищенко,Онищенко'), $this->object->q('Онищенко'));
    }
    public function testCrazy298()
    { 
        $this->assertEquals(explode(',','Онопенко,Онопенко,Онопенко,Онопенко,Онопенко,Онопенко,Онопенко'), $this->object->q('Онопенко'));
    }
    public function testCrazy299()
    { 
        $this->assertEquals(explode(',','Опанасенко,Опанасенко,Опанасенко,Опанасенко,Опанасенко,Опанасенко,Опанасенко'), $this->object->q('Опанасенко'));
    }
    public function testCrazy300()
    { 
        $this->assertEquals(explode(',','Осадчук,Осадчук,Осадчук,Осадчук,Осадчук,Осадчук,Осадчук'), $this->object->q('Осадчук'));
    }
    public function testCrazy301()
    { 
        $this->assertEquals(explode(',','Осика,Осики,Осиці,Осику,Осикою,Осиці,Осико'), $this->object->q('Осика'));
    }
    public function testCrazy302()
    { 
        $this->assertEquals(explode(',','Остапенко,Остапенко,Остапенко,Остапенко,Остапенко,Остапенко,Остапенко'), $this->object->q('Остапенко'));
    }
    public function testCrazy303()
    { 
        $this->assertEquals(explode(',','Остроградська,Остроградської,Остроградській,Остроградську,Остроградською,Остроградській,Остроградсько'), $this->object->q('Остроградська'));
    }
    public function testCrazy304()
    { 
        $this->assertEquals(explode(',','Півторак,Півторак,Півторак,Півторак,Півторак,Півторак,Півторак'), $this->object->q('Півторак'));
    }
    public function testCrazy305()
    { 
        $this->assertEquals(explode(',','Підопригора,Підопригори,Підопригорі,Підопригору,Підопригорою,Підопригорі,Підопригоро'), $this->object->q('Підопригора'));
    }
    public function testCrazy306()
    { 
        $this->assertEquals(explode(',','Павленко,Павленко,Павленко,Павленко,Павленко,Павленко,Павленко'), $this->object->q('Павленко'));
    }
    public function testCrazy307()
    { 
        $this->assertEquals(explode(',','Павлюк,Павлюк,Павлюк,Павлюк,Павлюк,Павлюк,Павлюк'), $this->object->q('Павлюк'));
    }
    public function testCrazy308()
    { 
        $this->assertEquals(explode(',','Павлюченко,Павлюченко,Павлюченко,Павлюченко,Павлюченко,Павлюченко,Павлюченко'), $this->object->q('Павлюченко'));
    }
    public function testCrazy309()
    { 
        $this->assertEquals(explode(',','Пазенко,Пазенко,Пазенко,Пазенко,Пазенко,Пазенко,Пазенко'), $this->object->q('Пазенко'));
    }
    public function testCrazy310()
    { 
        $this->assertEquals(explode(',','Паламарчук,Паламарчук,Паламарчук,Паламарчук,Паламарчук,Паламарчук,Паламарчук'), $this->object->q('Паламарчук'));
    }
    public function testCrazy311()
    { 
        $this->assertEquals(explode(',','Панас,Панас,Панас,Панас,Панас,Панас,Панас'), $this->object->q('Панас'));
    }
    public function testCrazy312()
    { 
        $this->assertEquals(explode(',','Панасюк,Панасюк,Панасюк,Панасюк,Панасюк,Панасюк,Панасюк'), $this->object->q('Панасюк'));
    }
    public function testCrazy313()
    { 
        $this->assertEquals(explode(',','Паньківська,Паньківської,Паньківській,Паньківську,Паньківською,Паньківській,Паньківсько'), $this->object->q('Паньківська'));
    }
    public function testCrazy314()
    { 
        $this->assertEquals(explode(',','Пархоменко,Пархоменко,Пархоменко,Пархоменко,Пархоменко,Пархоменко,Пархоменко'), $this->object->q('Пархоменко'));
    }
    public function testCrazy315()
    { 
        $this->assertEquals(explode(',','Пасічник,Пасічник,Пасічник,Пасічник,Пасічник,Пасічник,Пасічник'), $this->object->q('Пасічник'));
    }
    public function testCrazy316()
    { 
        $this->assertEquals(explode(',','Пасько,Пасько,Пасько,Пасько,Пасько,Пасько,Пасько'), $this->object->q('Пасько'));
    }
    public function testCrazy317()
    { 
        $this->assertEquals(explode(',','Пашко,Пашко,Пашко,Пашко,Пашко,Пашко,Пашко'), $this->object->q('Пашко'));
    }
    public function testCrazy318()
    { 
        $this->assertEquals(explode(',','Пащенко,Пащенко,Пащенко,Пащенко,Пащенко,Пащенко,Пащенко'), $this->object->q('Пащенко'));
    }
    public function testCrazy319()
    { 
        $this->assertEquals(explode(',','Перебийніс,Перебийніс,Перебийніс,Перебийніс,Перебийніс,Перебийніс,Перебийніс'), $this->object->q('Перебийніс'));
    }
    public function testCrazy320()
    { 
        $this->assertEquals(explode(',','Петренко,Петренко,Петренко,Петренко,Петренко,Петренко,Петренко'), $this->object->q('Петренко'));
    }
    public function testCrazy321()
    { 
        $this->assertEquals(explode(',','Пилипенко,Пилипенко,Пилипенко,Пилипенко,Пилипенко,Пилипенко,Пилипенко'), $this->object->q('Пилипенко'));
    }
    public function testCrazy322()
    { 
        $this->assertEquals(explode(',','Пилипчук,Пилипчук,Пилипчук,Пилипчук,Пилипчук,Пилипчук,Пилипчук'), $this->object->q('Пилипчук'));
    }
    public function testCrazy323()
    { 
        $this->assertEquals(explode(',','Писаренко,Писаренко,Писаренко,Писаренко,Писаренко,Писаренко,Писаренко'), $this->object->q('Писаренко'));
    }
    public function testCrazy324()
    { 
        $this->assertEquals(explode(',','Писарчук,Писарчук,Писарчук,Писарчук,Писарчук,Писарчук,Писарчук'), $this->object->q('Писарчук'));
    }
    public function testCrazy325()
    { 
        $this->assertEquals(explode(',','Плющ,Плющ,Плющ,Плющ,Плющ,Плющ,Плющ'), $this->object->q('Плющ'));
    }
    public function testCrazy326()
    { 
        $this->assertEquals(explode(',','Покотило,Покотило,Покотило,Покотило,Покотило,Покотило,Покотило'), $this->object->q('Покотило'));
    }
    public function testCrazy327()
    { 
        $this->assertEquals(explode(',','Поліщук,Поліщук,Поліщук,Поліщук,Поліщук,Поліщук,Поліщук'), $this->object->q('Поліщук'));
    }
    public function testCrazy328()
    { 
        $this->assertEquals(explode(',','Польова,Польової,Польовій,Польову,Польовою,Польовій,Польово'), $this->object->q('Польова'));
    }
    public function testCrazy329()
    { 
        $this->assertEquals(explode(',','Полянська,Полянської,Полянській,Полянську,Полянською,Полянській,Полянсько'), $this->object->q('Полянська'));
    }
    public function testCrazy330()
    { 
        $this->assertEquals(explode(',','Пономаренко,Пономаренко,Пономаренко,Пономаренко,Пономаренко,Пономаренко,Пономаренко'), $this->object->q('Пономаренко'));
    }
    public function testCrazy331()
    { 
        $this->assertEquals(explode(',','Попадюк,Попадюк,Попадюк,Попадюк,Попадюк,Попадюк,Попадюк'), $this->object->q('Попадюк'));
    }
    public function testCrazy332()
    { 
        $this->assertEquals(explode(',','Попенко,Попенко,Попенко,Попенко,Попенко,Попенко,Попенко'), $this->object->q('Попенко'));
    }
    public function testCrazy333()
    { 
        $this->assertEquals(explode(',','Потапенко,Потапенко,Потапенко,Потапенко,Потапенко,Потапенко,Потапенко'), $this->object->q('Потапенко'));
    }
    public function testCrazy334()
    { 
        $this->assertEquals(explode(',','Потебенько,Потебенько,Потебенько,Потебенько,Потебенько,Потебенько,Потебенько'), $this->object->q('Потебенько'));
    }
    public function testCrazy335()
    { 
        $this->assertEquals(explode(',','Прийма,Прийми,Приймі,Прийму,Приймою,Приймі,Приймо'), $this->object->q('Прийма'));
    }
    public function testCrazy336()
    { 
        $this->assertEquals(explode(',','Приймак,Приймак,Приймак,Приймак,Приймак,Приймак,Приймак'), $this->object->q('Приймак'));
    }
    public function testCrazy337()
    { 
        $this->assertEquals(explode(',','Присяжнюк,Присяжнюк,Присяжнюк,Присяжнюк,Присяжнюк,Присяжнюк,Присяжнюк'), $this->object->q('Присяжнюк'));
    }
    public function testCrazy338()
    { 
        $this->assertEquals(explode(',','Приходько,Приходько,Приходько,Приходько,Приходько,Приходько,Приходько'), $this->object->q('Приходько'));
    }
    public function testCrazy339()
    { 
        $this->assertEquals(explode(',','Продан,Продан,Продан,Продан,Продан,Продан,Продан'), $this->object->q('Продан'));
    }
    public function testCrazy340()
    { 
        $this->assertEquals(explode(',','Проценко,Проценко,Проценко,Проценко,Проценко,Проценко,Проценко'), $this->object->q('Проценко'));
    }
    public function testCrazy341()
    { 
        $this->assertEquals(explode(',','Проць,Проць,Проць,Проць,Проць,Проць,Проць'), $this->object->q('Проць'));
    }
    public function testCrazy342()
    { 
        $this->assertEquals(explode(',','Процюк,Процюк,Процюк,Процюк,Процюк,Процюк,Процюк'), $this->object->q('Процюк'));
    }
    public function testCrazy343()
    { 
        $this->assertEquals(explode(',','Пушкар,Пушкар,Пушкар,Пушкар,Пушкар,Пушкар,Пушкар'), $this->object->q('Пушкар'));
    }
    public function testCrazy344()
    { 
        $this->assertEquals(explode(',','Різун,Різун,Різун,Різун,Різун,Різун,Різун'), $this->object->q('Різун'));
    }
    public function testCrazy345()
    { 
        $this->assertEquals(explode(',','Радченко,Радченко,Радченко,Радченко,Радченко,Радченко,Радченко'), $this->object->q('Радченко'));
    }
    public function testCrazy346()
    { 
        $this->assertEquals(explode(',','Рибальченко,Рибальченко,Рибальченко,Рибальченко,Рибальченко,Рибальченко,Рибальченко'), $this->object->q('Рибальченко'));
    }
    public function testCrazy347()
    { 
        $this->assertEquals(explode(',','Римар,Римар,Римар,Римар,Римар,Римар,Римар'), $this->object->q('Римар'));
    }
    public function testCrazy348()
    { 
        $this->assertEquals(explode(',','Рожок,Рожок,Рожок,Рожок,Рожок,Рожок,Рожок'), $this->object->q('Рожок'));
    }
    public function testCrazy349()
    { 
        $this->assertEquals(explode(',','Романенко,Романенко,Романенко,Романенко,Романенко,Романенко,Романенко'), $this->object->q('Романенко'));
    }
    public function testCrazy350()
    { 
        $this->assertEquals(explode(',','Романчук,Романчук,Романчук,Романчук,Романчук,Романчук,Романчук'), $this->object->q('Романчук'));
    }
    public function testCrazy351()
    { 
        $this->assertEquals(explode(',','Романюк,Романюк,Романюк,Романюк,Романюк,Романюк,Романюк'), $this->object->q('Романюк'));
    }
    public function testCrazy352()
    { 
        $this->assertEquals(explode(',','Рошкевич,Рошкевич,Рошкевич,Рошкевич,Рошкевич,Рошкевич,Рошкевич'), $this->object->q('Рошкевич'));
    }
    public function testCrazy353()
    { 
        $this->assertEquals(explode(',','Рубан,Рубан,Рубан,Рубан,Рубан,Рубан,Рубан'), $this->object->q('Рубан'));
    }
    public function testCrazy354()
    { 
        $this->assertEquals(explode(',','Руденко,Руденко,Руденко,Руденко,Руденко,Руденко,Руденко'), $this->object->q('Руденко'));
    }
    public function testCrazy355()
    { 
        $this->assertEquals(explode(',','Рябовіл,Рябовіл,Рябовіл,Рябовіл,Рябовіл,Рябовіл,Рябовіл'), $this->object->q('Рябовіл'));
    }
    public function testCrazy356()
    { 
        $this->assertEquals(explode(',','Сімашкевич,Сімашкевич,Сімашкевич,Сімашкевич,Сімашкевич,Сімашкевич,Сімашкевич'), $this->object->q('Сімашкевич'));
    }
    public function testCrazy357()
    { 
        $this->assertEquals(explode(',','Саєнко,Саєнко,Саєнко,Саєнко,Саєнко,Саєнко,Саєнко'), $this->object->q('Саєнко'));
    }
    public function testCrazy358()
    { 
        $this->assertEquals(explode(',','Савенко,Савенко,Савенко,Савенко,Савенко,Савенко,Савенко'), $this->object->q('Савенко'));
    }
    public function testCrazy359()
    { 
        $this->assertEquals(explode(',','Савицька,Савицької,Савицькій,Савицьку,Савицькою,Савицькій,Савицько'), $this->object->q('Савицька'));
    }
    public function testCrazy360()
    { 
        $this->assertEquals(explode(',','Савка,Савки,Савці,Савку,Савкою,Савці,Савко'), $this->object->q('Савка'));
    }
    public function testCrazy361()
    { 
        $this->assertEquals(explode(',','Савченко,Савченко,Савченко,Савченко,Савченко,Савченко,Савченко'), $this->object->q('Савченко'));
    }
    public function testCrazy362()
    { 
        $this->assertEquals(explode(',','Савчук,Савчук,Савчук,Савчук,Савчук,Савчук,Савчук'), $this->object->q('Савчук'));
    }
    public function testCrazy363()
    { 
        $this->assertEquals(explode(',','Сак,Сак,Сак,Сак,Сак,Сак,Сак'), $this->object->q('Сак'));
    }
    public function testCrazy364()
    { 
        $this->assertEquals(explode(',','Самборська,Самборської,Самборській,Самборську,Самборською,Самборській,Самборсько'), $this->object->q('Самборська'));
    }
    public function testCrazy365()
    { 
        $this->assertEquals(explode(',','Самойлович,Самойлович,Самойлович,Самойлович,Самойлович,Самойлович,Самойлович'), $this->object->q('Самойлович'));
    }
    public function testCrazy366()
    { 
        $this->assertEquals(explode(',','Самусь,Самусь,Самусь,Самусь,Самусь,Самусь,Самусь'), $this->object->q('Самусь'));
    }
    public function testCrazy367()
    { 
        $this->assertEquals(explode(',','Свида,Свиди,Свиді,Свиду,Свидою,Свиді,Свидо'), $this->object->q('Свида'));
    }
    public function testCrazy368()
    { 
        $this->assertEquals(explode(',','Семашко,Семашко,Семашко,Семашко,Семашко,Семашко,Семашко'), $this->object->q('Семашко'));
    }
    public function testCrazy369()
    { 
        $this->assertEquals(explode(',','Семененко,Семененко,Семененко,Семененко,Семененко,Семененко,Семененко'), $this->object->q('Семененко'));
    }
    public function testCrazy370()
    { 
        $this->assertEquals(explode(',','Семенець,Семенець,Семенець,Семенець,Семенець,Семенець,Семенець'), $this->object->q('Семенець'));
    }
    public function testCrazy371()
    { 
        $this->assertEquals(explode(',','Семенина,Семениної,Семениній,Семенину,Семениною,Семениній,Семенино'), $this->object->q('Семенина'));
    }
    public function testCrazy372()
    { 
        $this->assertEquals(explode(',','Семенченко,Семенченко,Семенченко,Семенченко,Семенченко,Семенченко,Семенченко'), $this->object->q('Семенченко'));
    }
    public function testCrazy373()
    { 
        $this->assertEquals(explode(',','Семенюк,Семенюк,Семенюк,Семенюк,Семенюк,Семенюк,Семенюк'), $this->object->q('Семенюк'));
    }
    public function testCrazy374()
    { 
        $this->assertEquals(explode(',','Семеренко,Семеренко,Семеренко,Семеренко,Семеренко,Семеренко,Семеренко'), $this->object->q('Семеренко'));
    }
    public function testCrazy375()
    { 
        $this->assertEquals(explode(',','Сидоренко,Сидоренко,Сидоренко,Сидоренко,Сидоренко,Сидоренко,Сидоренко'), $this->object->q('Сидоренко'));
    }
    public function testCrazy376()
    { 
        $this->assertEquals(explode(',','Силенко,Силенко,Силенко,Силенко,Силенко,Силенко,Силенко'), $this->object->q('Силенко'));
    }
    public function testCrazy377()
    { 
        $this->assertEquals(explode(',','Симоненко,Симоненко,Симоненко,Симоненко,Симоненко,Симоненко,Симоненко'), $this->object->q('Симоненко'));
    }
    public function testCrazy378()
    { 
        $this->assertEquals(explode(',','Симчич,Симчич,Симчич,Симчич,Симчич,Симчич,Симчич'), $this->object->q('Симчич'));
    }
    public function testCrazy379()
    { 
        $this->assertEquals(explode(',','Скрипник,Скрипник,Скрипник,Скрипник,Скрипник,Скрипник,Скрипник'), $this->object->q('Скрипник'));
    }
    public function testCrazy380()
    { 
        $this->assertEquals(explode(',','Скуратівська,Скуратівської,Скуратівській,Скуратівську,Скуратівською,Скуратівській,Скуратівсько'), $this->object->q('Скуратівська'));
    }
    public function testCrazy381()
    { 
        $this->assertEquals(explode(',','Слободян,Слободян,Слободян,Слободян,Слободян,Слободян,Слободян'), $this->object->q('Слободян'));
    }
    public function testCrazy382()
    { 
        $this->assertEquals(explode(',','Слободянюк,Слободянюк,Слободянюк,Слободянюк,Слободянюк,Слободянюк,Слободянюк'), $this->object->q('Слободянюк'));
    }
    public function testCrazy383()
    { 
        $this->assertEquals(explode(',','Смик,Смик,Смик,Смик,Смик,Смик,Смик'), $this->object->q('Смик'));
    }
    public function testCrazy384()
    { 
        $this->assertEquals(explode(',','Смогоржевська,Смогоржевської,Смогоржевській,Смогоржевську,Смогоржевською,Смогоржевській,Смогоржевсько'), $this->object->q('Смогоржевська'));
    }
    public function testCrazy385()
    { 
        $this->assertEquals(explode(',','Собчук,Собчук,Собчук,Собчук,Собчук,Собчук,Собчук'), $this->object->q('Собчук'));
    }
    public function testCrazy386()
    { 
        $this->assertEquals(explode(',','Сопронюк,Сопронюк,Сопронюк,Сопронюк,Сопронюк,Сопронюк,Сопронюк'), $this->object->q('Сопронюк'));
    }
    public function testCrazy387()
    { 
        $this->assertEquals(explode(',','Сорока,Сороки,Сороці,Сороку,Сорокою,Сороці,Сороко'), $this->object->q('Сорока'));
    }
    public function testCrazy388()
    { 
        $this->assertEquals(explode(',','Сохань,Сохань,Сохань,Сохань,Сохань,Сохань,Сохань'), $this->object->q('Сохань'));
    }
    public function testCrazy389()
    { 
        $this->assertEquals(explode(',','Стадник,Стадник,Стадник,Стадник,Стадник,Стадник,Стадник'), $this->object->q('Стадник'));
    }
    public function testCrazy390()
    { 
        $this->assertEquals(explode(',','Стельмах,Стельмах,Стельмах,Стельмах,Стельмах,Стельмах,Стельмах'), $this->object->q('Стельмах'));
    }
    public function testCrazy391()
    { 
        $this->assertEquals(explode(',','Степаненко,Степаненко,Степаненко,Степаненко,Степаненко,Степаненко,Степаненко'), $this->object->q('Степаненко'));
    }
    public function testCrazy392()
    { 
        $this->assertEquals(explode(',','Степура,Степури,Степурі,Степуру,Степурою,Степурі,Степуро'), $this->object->q('Степура'));
    }
    public function testCrazy393()
    { 
        $this->assertEquals(explode(',','Стеценко,Стеценко,Стеценко,Стеценко,Стеценко,Стеценко,Стеценко'), $this->object->q('Стеценко'));
    }
    public function testCrazy394()
    { 
        $this->assertEquals(explode(',','Стецюк,Стецюк,Стецюк,Стецюк,Стецюк,Стецюк,Стецюк'), $this->object->q('Стецюк'));
    }
    public function testCrazy395()
    { 
        $this->assertEquals(explode(',','Струтинська,Струтинської,Струтинській,Струтинську,Струтинською,Струтинській,Струтинсько'), $this->object->q('Струтинська'));
    }
    public function testCrazy396()
    { 
        $this->assertEquals(explode(',','Сулима,Сулими,Сулимі,Сулиму,Сулимою,Сулимі,Сулимо'), $this->object->q('Сулима'));
    }
    public function testCrazy397()
    { 
        $this->assertEquals(explode(',','Супруненко,Супруненко,Супруненко,Супруненко,Супруненко,Супруненко,Супруненко'), $this->object->q('Супруненко'));
    }
    public function testCrazy398()
    { 
        $this->assertEquals(explode(',','Тараненко,Тараненко,Тараненко,Тараненко,Тараненко,Тараненко,Тараненко'), $this->object->q('Тараненко'));
    }
    public function testCrazy399()
    { 
        $this->assertEquals(explode(',','Татаренко,Татаренко,Татаренко,Татаренко,Татаренко,Татаренко,Татаренко'), $this->object->q('Татаренко'));
    }
    public function testCrazy400()
    { 
        $this->assertEquals(explode(',','Теплицька,Теплицької,Теплицькій,Теплицьку,Теплицькою,Теплицькій,Теплицько'), $this->object->q('Теплицька'));
    }
    public function testCrazy401()
    { 
        $this->assertEquals(explode(',','Терещенко,Терещенко,Терещенко,Терещенко,Терещенко,Терещенко,Терещенко'), $this->object->q('Терещенко'));
    }
    public function testCrazy402()
    { 
        $this->assertEquals(explode(',','Терещук,Терещук,Терещук,Терещук,Терещук,Терещук,Терещук'), $this->object->q('Терещук'));
    }
    public function testCrazy403()
    { 
        $this->assertEquals(explode(',','Тесленко,Тесленко,Тесленко,Тесленко,Тесленко,Тесленко,Тесленко'), $this->object->q('Тесленко'));
    }
    public function testCrazy404()
    { 
        $this->assertEquals(explode(',','Тимошенко,Тимошенко,Тимошенко,Тимошенко,Тимошенко,Тимошенко,Тимошенко'), $this->object->q('Тимошенко'));
    }
    public function testCrazy405()
    { 
        $this->assertEquals(explode(',','Тимощук,Тимощук,Тимощук,Тимощук,Тимощук,Тимощук,Тимощук'), $this->object->q('Тимощук'));
    }
    public function testCrazy406()
    { 
        $this->assertEquals(explode(',','Тимчак,Тимчак,Тимчак,Тимчак,Тимчак,Тимчак,Тимчак'), $this->object->q('Тимчак'));
    }
    public function testCrazy407()
    { 
        $this->assertEquals(explode(',','Титаренко,Титаренко,Титаренко,Титаренко,Титаренко,Титаренко,Титаренко'), $this->object->q('Титаренко'));
    }
    public function testCrazy408()
    { 
        $this->assertEquals(explode(',','Тищенко,Тищенко,Тищенко,Тищенко,Тищенко,Тищенко,Тищенко'), $this->object->q('Тищенко'));
    }
    public function testCrazy409()
    { 
        $this->assertEquals(explode(',','Ткач,Ткач,Ткач,Ткач,Ткач,Ткач,Ткач'), $this->object->q('Ткач'));
    }
    public function testCrazy410()
    { 
        $this->assertEquals(explode(',','Ткаченко,Ткаченко,Ткаченко,Ткаченко,Ткаченко,Ткаченко,Ткаченко'), $this->object->q('Ткаченко'));
    }
    public function testCrazy411()
    { 
        $this->assertEquals(explode(',','Ткачук,Ткачук,Ткачук,Ткачук,Ткачук,Ткачук,Ткачук'), $this->object->q('Ткачук'));
    }
    public function testCrazy412()
    { 
        $this->assertEquals(explode(',','Толочко,Толочко,Толочко,Толочко,Толочко,Толочко,Толочко'), $this->object->q('Толочко'));
    }
    public function testCrazy413()
    { 
        $this->assertEquals(explode(',','Томенко,Томенко,Томенко,Томенко,Томенко,Томенко,Томенко'), $this->object->q('Томенко'));
    }
    public function testCrazy414()
    { 
        $this->assertEquals(explode(',','Тулуб,Тулуб,Тулуб,Тулуб,Тулуб,Тулуб,Тулуб'), $this->object->q('Тулуб'));
    }
    public function testCrazy415()
    { 
        $this->assertEquals(explode(',','Удовенко,Удовенко,Удовенко,Удовенко,Удовенко,Удовенко,Удовенко'), $this->object->q('Удовенко'));
    }
    public function testCrazy416()
    { 
        $this->assertEquals(explode(',','Удовиченко,Удовиченко,Удовиченко,Удовиченко,Удовиченко,Удовиченко,Удовиченко'), $this->object->q('Удовиченко'));
    }
    public function testCrazy417()
    { 
        $this->assertEquals(explode(',','Усенко,Усенко,Усенко,Усенко,Усенко,Усенко,Усенко'), $this->object->q('Усенко'));
    }
    public function testCrazy418()
    { 
        $this->assertEquals(explode(',','Філоненко,Філоненко,Філоненко,Філоненко,Філоненко,Філоненко,Філоненко'), $this->object->q('Філоненко'));
    }
    public function testCrazy419()
    { 
        $this->assertEquals(explode(',','Феденко,Феденко,Феденко,Феденко,Феденко,Феденко,Феденко'), $this->object->q('Феденко'));
    }
    public function testCrazy420()
    { 
        $this->assertEquals(explode(',','Федоренко,Федоренко,Федоренко,Федоренко,Федоренко,Федоренко,Федоренко'), $this->object->q('Федоренко'));
    }
    public function testCrazy421()
    { 
        $this->assertEquals(explode(',','Федорук,Федорук,Федорук,Федорук,Федорук,Федорук,Федорук'), $this->object->q('Федорук'));
    }
    public function testCrazy422()
    { 
        $this->assertEquals(explode(',','Фещенко,Фещенко,Фещенко,Фещенко,Фещенко,Фещенко,Фещенко'), $this->object->q('Фещенко'));
    }
    public function testCrazy423()
    { 
        $this->assertEquals(explode(',','Фоменко,Фоменко,Фоменко,Фоменко,Фоменко,Фоменко,Фоменко'), $this->object->q('Фоменко'));
    }
    public function testCrazy424()
    { 
        $this->assertEquals(explode(',','Ханенко,Ханенко,Ханенко,Ханенко,Ханенко,Ханенко,Ханенко'), $this->object->q('Ханенко'));
    }
    public function testCrazy425()
    { 
        $this->assertEquals(explode(',','Харчук,Харчук,Харчук,Харчук,Харчук,Харчук,Харчук'), $this->object->q('Харчук'));
    }
    public function testCrazy426()
    { 
        $this->assertEquals(explode(',','Хміляр,Хміляр,Хміляр,Хміляр,Хміляр,Хміляр,Хміляр'), $this->object->q('Хміляр'));
    }
    public function testCrazy427()
    { 
        $this->assertEquals(explode(',','Хмара,Хмари,Хмарі,Хмару,Хмарою,Хмарі,Хмаро'), $this->object->q('Хмара'));
    }
    public function testCrazy428()
    { 
        $this->assertEquals(explode(',','Холодовська,Холодовської,Холодовській,Холодовську,Холодовською,Холодовській,Холодовсько'), $this->object->q('Холодовська'));
    }
    public function testCrazy429()
    { 
        $this->assertEquals(explode(',','Хоменко,Хоменко,Хоменко,Хоменко,Хоменко,Хоменко,Хоменко'), $this->object->q('Хоменко'));
    }
    public function testCrazy430()
    { 
        $this->assertEquals(explode(',','Царук,Царук,Царук,Царук,Царук,Царук,Царук'), $this->object->q('Царук'));
    }
    public function testCrazy431()
    { 
        $this->assertEquals(explode(',','Цибуленко,Цибуленко,Цибуленко,Цибуленко,Цибуленко,Цибуленко,Цибуленко'), $this->object->q('Цибуленко'));
    }
    public function testCrazy432()
    { 
        $this->assertEquals(explode(',','Цюпа,Цюпи,Цюпі,Цюпу,Цюпою,Цюпі,Цюпо'), $this->object->q('Цюпа'));
    }
    public function testCrazy433()
    { 
        $this->assertEquals(explode(',','Чабаненко,Чабаненко,Чабаненко,Чабаненко,Чабаненко,Чабаненко,Чабаненко'), $this->object->q('Чабаненко'));
    }
    public function testCrazy434()
    { 
        $this->assertEquals(explode(',','Чередниченко,Чередниченко,Чередниченко,Чередниченко,Чередниченко,Чередниченко,Чередниченко'), $this->object->q('Чередниченко'));
    }
    public function testCrazy435()
    { 
        $this->assertEquals(explode(',','Чернявська,Чернявської,Чернявській,Чернявську,Чернявською,Чернявській,Чернявсько'), $this->object->q('Чернявська'));
    }
    public function testCrazy436()
    { 
        $this->assertEquals(explode(',','Чорна,Чорної,Чорній,Чорну,Чорною,Чорній,Чорно'), $this->object->q('Чорна'));
    }
    public function testCrazy437()
    { 
        $this->assertEquals(explode(',','Чорновіл,Чорновіл,Чорновіл,Чорновіл,Чорновіл,Чорновіл,Чорновіл'), $this->object->q('Чорновіл'));
    }
    public function testCrazy438()
    { 
        $this->assertEquals(explode(',','Чуйкевич,Чуйкевич,Чуйкевич,Чуйкевич,Чуйкевич,Чуйкевич,Чуйкевич'), $this->object->q('Чуйкевич'));
    }
    public function testCrazy439()
    { 
        $this->assertEquals(explode(',','Чумак,Чумак,Чумак,Чумак,Чумак,Чумак,Чумак'), $this->object->q('Чумак'));
    }
    public function testCrazy440()
    { 
        $this->assertEquals(explode(',','Чумаченко,Чумаченко,Чумаченко,Чумаченко,Чумаченко,Чумаченко,Чумаченко'), $this->object->q('Чумаченко'));
    }
    public function testCrazy441()
    { 
        $this->assertEquals(explode(',','Шахрай,Шахрай,Шахрай,Шахрай,Шахрай,Шахрай,Шахрай'), $this->object->q('Шахрай'));
    }
    public function testCrazy442()
    { 
        $this->assertEquals(explode(',','Шевченко,Шевченко,Шевченко,Шевченко,Шевченко,Шевченко,Шевченко'), $this->object->q('Шевченко'));
    }
    public function testCrazy443()
    { 
        $this->assertEquals(explode(',','Шевчук,Шевчук,Шевчук,Шевчук,Шевчук,Шевчук,Шевчук'), $this->object->q('Шевчук'));
    }
    public function testCrazy444()
    { 
        $this->assertEquals(explode(',','Шелест,Шелест,Шелест,Шелест,Шелест,Шелест,Шелест'), $this->object->q('Шелест'));
    }
    public function testCrazy445()
    { 
        $this->assertEquals(explode(',','Шинкарук,Шинкарук,Шинкарук,Шинкарук,Шинкарук,Шинкарук,Шинкарук'), $this->object->q('Шинкарук'));
    }
    public function testCrazy446()
    { 
        $this->assertEquals(explode(',','Шкрібляк,Шкрібляк,Шкрібляк,Шкрібляк,Шкрібляк,Шкрібляк,Шкрібляк'), $this->object->q('Шкрібляк'));
    }
    public function testCrazy447()
    { 
        $this->assertEquals(explode(',','Шнайдер,Шнайдер,Шнайдер,Шнайдер,Шнайдер,Шнайдер,Шнайдер'), $this->object->q('Шнайдер'));
    }
    public function testCrazy448()
    { 
        $this->assertEquals(explode(',','Шовкопляс,Шовкопляс,Шовкопляс,Шовкопляс,Шовкопляс,Шовкопляс,Шовкопляс'), $this->object->q('Шовкопляс'));
    }
    public function testCrazy449()
    { 
        $this->assertEquals(explode(',','Шульга,Шульги,Шульзі,Шульгу,Шульгою,Шульзі,Шульго'), $this->object->q('Шульга'));
    }
    public function testCrazy450()
    { 
        $this->assertEquals(explode(',','Шухевич,Шухевич,Шухевич,Шухевич,Шухевич,Шухевич,Шухевич'), $this->object->q('Шухевич'));
    }
    public function testCrazy451()
    { 
        $this->assertEquals(explode(',','Щерба,Щерби,Щербі,Щербу,Щербою,Щербі,Щербо'), $this->object->q('Щерба'));
    }
    public function testCrazy452()
    { 
        $this->assertEquals(explode(',','Щербак,Щербак,Щербак,Щербак,Щербак,Щербак,Щербак'), $this->object->q('Щербак'));
    }
    public function testCrazy453()
    { 
        $this->assertEquals(explode(',','Щербань,Щербань,Щербань,Щербань,Щербань,Щербань,Щербань'), $this->object->q('Щербань'));
    }
    public function testCrazy454()
    { 
        $this->assertEquals(explode(',','Юрженко,Юрженко,Юрженко,Юрженко,Юрженко,Юрженко,Юрженко'), $this->object->q('Юрженко'));
    }
    public function testCrazy455()
    { 
        $this->assertEquals(explode(',','Юрченко,Юрченко,Юрченко,Юрченко,Юрченко,Юрченко,Юрченко'), $this->object->q('Юрченко'));
    }
    public function testCrazy456()
    { 
        $this->assertEquals(explode(',','Юхименко,Юхименко,Юхименко,Юхименко,Юхименко,Юхименко,Юхименко'), $this->object->q('Юхименко'));
    }
    public function testCrazy457()
    { 
        $this->assertEquals(explode(',','Ющенко,Ющенко,Ющенко,Ющенко,Ющенко,Ющенко,Ющенко'), $this->object->q('Ющенко'));
    }
    public function testCrazy458()
    { 
        $this->assertEquals(explode(',','Яковенко,Яковенко,Яковенко,Яковенко,Яковенко,Яковенко,Яковенко'), $this->object->q('Яковенко'));
    }
    public function testCrazy459()
    { 
        $this->assertEquals(explode(',','Яковина,Яковиної,Яковиній,Яковину,Яковиною,Яковиній,Яковино'), $this->object->q('Яковина'));
    }
    public function testCrazy460()
    { 
        $this->assertEquals(explode(',','Янко,Янко,Янко,Янко,Янко,Янко,Янко'), $this->object->q('Янко'));
    }
    public function testCrazy461()
    { 
        $this->assertEquals(explode(',','Ярема,Яреми,Яремі,Ярему,Яремою,Яремі,Яремо'), $this->object->q('Ярема'));
    }
    public function testCrazy462()
    { 
        $this->assertEquals(explode(',','Яременко,Яременко,Яременко,Яременко,Яременко,Яременко,Яременко'), $this->object->q('Яременко'));
    }
    public function testCrazy463()
    { 
        $this->assertEquals(explode(',','Яремко,Яремко,Яремко,Яремко,Яремко,Яремко,Яремко'), $this->object->q('Яремко'));
    }
    public function testCrazy464()
    { 
        $this->assertEquals(explode(',','Яремчук,Яремчук,Яремчук,Яремчук,Яремчук,Яремчук,Яремчук'), $this->object->q('Яремчук'));
    }
    public function testCrazy465()
    { 
        $this->assertEquals(explode(',','Ярмоленко,Ярмоленко,Ярмоленко,Ярмоленко,Ярмоленко,Ярмоленко,Ярмоленко'), $this->object->q('Ярмоленко'));
    }
    public function testCrazy466()
    { 
        $this->assertEquals(explode(',','Ярмолюк,Ярмолюк,Ярмолюк,Ярмолюк,Ярмолюк,Ярмолюк,Ярмолюк'), $this->object->q('Ярмолюк'));
    }
    public function testCrazy467()
    { 
        $this->assertEquals(explode(',','Ярошенко,Ярошенко,Ярошенко,Ярошенко,Ярошенко,Ярошенко,Ярошенко'), $this->object->q('Ярошенко'));
    }
    public function testCrazy468()
    { 
        $this->assertEquals(explode(',','Яценко,Яценко,Яценко,Яценко,Яценко,Яценко,Яценко'), $this->object->q('Яценко'));
    }
    public function testCrazy469()
    { 
        $this->assertEquals(explode(',','Ященко,Ященко,Ященко,Ященко,Ященко,Ященко,Ященко'), $this->object->q('Ященко'));
    }
    public function testCrazy470()
    { 
        $this->assertEquals(explode(',','Ґалаґан,Ґалаґан,Ґалаґан,Ґалаґан,Ґалаґан,Ґалаґан,Ґалаґан'), $this->object->q('Ґалаґан'));
    }
    public function testCrazy471()
    { 
        $this->assertEquals(explode(',','Євсєєва,Євсєєвої,Євсєєвій,Євсєєву,Євсєєвою,Євсєєвій,Євсєєво'), $this->object->q('Євсєєва'));
    }
    public function testCrazy472()
    { 
        $this->assertEquals(explode(',','Єгорова,Єгорової,Єгоровій,Єгорову,Єгоровою,Єгоровій,Єгорово'), $this->object->q('Єгорова'));
    }
    public function testCrazy473()
    { 
        $this->assertEquals(explode(',','Єлізарова,Єлізарової,Єлізаровій,Єлізарову,Єлізаровою,Єлізаровій,Єлізарово'), $this->object->q('Єлізарова'));
    }
    public function testCrazy474()
    { 
        $this->assertEquals(explode(',','Єрмилова,Єрмилової,Єрмиловій,Єрмилову,Єрмиловою,Єрмиловій,Єрмилово'), $this->object->q('Єрмилова'));
    }
    public function testCrazy475()
    { 
        $this->assertEquals(explode(',','Єрофєєва,Єрофєєвої,Єрофєєвій,Єрофєєву,Єрофєєвою,Єрофєєвій,Єрофєєво'), $this->object->q('Єрофєєва'));
    }
    public function testCrazy476()
    { 
        $this->assertEquals(explode(',','Єршова,Єршової,Єршовій,Єршову,Єршовою,Єршовій,Єршово'), $this->object->q('Єршова'));
    }
    public function testCrazy477()
    { 
        $this->assertEquals(explode(',','Єфімова,Єфімової,Єфімовій,Єфімову,Єфімовою,Єфімовій,Єфімово'), $this->object->q('Єфімова'));
    }
    public function testCrazy478()
    { 
        $this->assertEquals(explode(',','Єфремова,Єфремової,Єфремовій,Єфремову,Єфремовою,Єфремовій,Єфремово'), $this->object->q('Єфремова'));
    }
    public function testCrazy479()
    { 
        $this->assertEquals(explode(',','Іванова,Іванової,Івановій,Іванову,Івановою,Івановій,Іваново'), $this->object->q('Іванова'));
    }
    public function testCrazy480()
    { 
        $this->assertEquals(explode(',','Ігнатова,Ігнатової,Ігнатовій,Ігнатову,Ігнатовою,Ігнатовій,Ігнатово'), $this->object->q('Ігнатова'));
    }
    public function testCrazy481()
    { 
        $this->assertEquals(explode(',','Іллюшина,Іллюшиної,Іллюшиній,Іллюшину,Іллюшиною,Іллюшиній,Іллюшино'), $this->object->q('Іллюшина'));
    }
    public function testCrazy482()
    { 
        $this->assertEquals(explode(',','Ільїна,Ільїни,Ільїні,Ільїну,Ільїною,Ільїні,Ільїно'), $this->object->q('Ільїна'));
    }
    public function testCrazy483()
    { 
        $this->assertEquals(explode(',','Аєдоницька,Аєдоницької,Аєдоницькій,Аєдоницьку,Аєдоницькою,Аєдоницькій,Аєдоницько'), $this->object->q('Аєдоницька'));
    }
    public function testCrazy484()
    { 
        $this->assertEquals(explode(',','Абатурова,Абатурової,Абатуровій,Абатурову,Абатуровою,Абатуровій,Абатурово'), $this->object->q('Абатурова'));
    }
    public function testCrazy485()
    { 
        $this->assertEquals(explode(',','Абдулова,Абдулової,Абдуловій,Абдулову,Абдуловою,Абдуловій,Абдулово'), $this->object->q('Абдулова'));
    }
    public function testCrazy486()
    { 
        $this->assertEquals(explode(',','Абрамова,Абрамової,Абрамовій,Абрамову,Абрамовою,Абрамовій,Абрамово'), $this->object->q('Абрамова'));
    }
    public function testCrazy487()
    { 
        $this->assertEquals(explode(',','Авілова,Авілової,Авіловій,Авілову,Авіловою,Авіловій,Авілово'), $this->object->q('Авілова'));
    }
    public function testCrazy488()
    { 
        $this->assertEquals(explode(',','Авдєєнко,Авдєєнко,Авдєєнко,Авдєєнко,Авдєєнко,Авдєєнко,Авдєєнко'), $this->object->q('Авдєєнко'));
    }
    public function testCrazy489()
    { 
        $this->assertEquals(explode(',','Аврамова,Аврамової,Аврамовій,Аврамову,Аврамовою,Аврамовій,Аврамово'), $this->object->q('Аврамова'));
    }
    public function testCrazy490()
    { 
        $this->assertEquals(explode(',','Алексєєва,Алексєєвої,Алексєєвій,Алексєєву,Алексєєвою,Алексєєвій,Алексєєво'), $this->object->q('Алексєєва'));
    }
    public function testCrazy491()
    { 
        $this->assertEquals(explode(',','Александрова,Александрової,Александровій,Александрову,Александровою,Александровій,Александрово'), $this->object->q('Александрова'));
    }
    public function testCrazy492()
    { 
        $this->assertEquals(explode(',','Альошина,Альошиної,Альошиній,Альошину,Альошиною,Альошиній,Альошино'), $this->object->q('Альошина'));
    }
    public function testCrazy493()
    { 
        $this->assertEquals(explode(',','Анісімова,Анісімової,Анісімовій,Анісімову,Анісімовою,Анісімовій,Анісімово'), $this->object->q('Анісімова'));
    }
    public function testCrazy494()
    { 
        $this->assertEquals(explode(',','Анісова,Анісової,Анісовій,Анісову,Анісовою,Анісовій,Анісово'), $this->object->q('Анісова'));
    }
    public function testCrazy495()
    { 
        $this->assertEquals(explode(',','Ананьєва,Ананьєвої,Ананьєвій,Ананьєву,Ананьєвою,Ананьєвій,Ананьєво'), $this->object->q('Ананьєва'));
    }
    public function testCrazy496()
    { 
        $this->assertEquals(explode(',','Андріанова,Андріанової,Андріановій,Андріанову,Андріановою,Андріановій,Андріаново'), $this->object->q('Андріанова'));
    }
    public function testCrazy497()
    { 
        $this->assertEquals(explode(',','Андріяшева,Андріяшевої,Андріяшевій,Андріяшеву,Андріяшевою,Андріяшевій,Андріяшево'), $this->object->q('Андріяшева'));
    }
    public function testCrazy498()
    { 
        $this->assertEquals(explode(',','Андреєва,Андреєвої,Андреєвій,Андреєву,Андреєвою,Андреєвій,Андреєво'), $this->object->q('Андреєва'));
    }
    public function testCrazy499()
    { 
        $this->assertEquals(explode(',','Антипова,Антипової,Антиповій,Антипову,Антиповою,Антиповій,Антипово'), $this->object->q('Антипова'));
    }
    public function testCrazy500()
    { 
        $this->assertEquals(explode(',','Антонова,Антонової,Антоновій,Антонову,Антоновою,Антоновій,Антоново'), $this->object->q('Антонова'));
    }
    public function testCrazy501()
    { 
        $this->assertEquals(explode(',','Анциферова,Анциферової,Анциферовій,Анциферову,Анциферовою,Анциферовій,Анциферово'), $this->object->q('Анциферова'));
    }
    public function testCrazy502()
    { 
        $this->assertEquals(explode(',','Апухтіна,Апухтіни,Апухтіні,Апухтіну,Апухтіною,Апухтіні,Апухтіно'), $this->object->q('Апухтіна'));
    }
    public function testCrazy503()
    { 
        $this->assertEquals(explode(',','Арбузова,Арбузової,Арбузовій,Арбузову,Арбузовою,Арбузовій,Арбузово'), $this->object->q('Арбузова'));
    }
    public function testCrazy504()
    { 
        $this->assertEquals(explode(',','Аржанова,Аржанової,Аржановій,Аржанову,Аржановою,Аржановій,Аржаново'), $this->object->q('Аржанова'));
    }
    public function testCrazy505()
    { 
        $this->assertEquals(explode(',','Архипова,Архипової,Архиповій,Архипову,Архиповою,Архиповій,Архипово'), $this->object->q('Архипова'));
    }
    public function testCrazy506()
    { 
        $this->assertEquals(explode(',','Арцибушева,Арцибушевої,Арцибушевій,Арцибушеву,Арцибушевою,Арцибушевій,Арцибушево'), $this->object->q('Арцибушева'));
    }
    public function testCrazy507()
    { 
        $this->assertEquals(explode(',','Астраханцева,Астраханцевої,Астраханцевій,Астраханцеву,Астраханцевою,Астраханцевій,Астраханцево'), $this->object->q('Астраханцева'));
    }
    public function testCrazy508()
    { 
        $this->assertEquals(explode(',','Афіногенова,Афіногенової,Афіногеновій,Афіногенову,Афіногеновою,Афіногеновій,Афіногеново'), $this->object->q('Афіногенова'));
    }
    public function testCrazy509()
    { 
        $this->assertEquals(explode(',','Афанасьєва,Афанасьєвої,Афанасьєвій,Афанасьєву,Афанасьєвою,Афанасьєвій,Афанасьєво'), $this->object->q('Афанасьєва'));
    }
    public function testCrazy510()
    { 
        $this->assertEquals(explode(',','Бєлова,Бєлової,Бєловій,Бєлову,Бєловою,Бєловій,Бєлово'), $this->object->q('Бєлова'));
    }
    public function testCrazy511()
    { 
        $this->assertEquals(explode(',','Бєлоглазова,Бєлоглазової,Бєлоглазовій,Бєлоглазову,Бєлоглазовою,Бєлоглазовій,Бєлоглазово'), $this->object->q('Бєлоглазова'));
    }
    public function testCrazy512()
    { 
        $this->assertEquals(explode(',','Бєлоусова,Бєлоусової,Бєлоусовій,Бєлоусову,Бєлоусовою,Бєлоусовій,Бєлоусово'), $this->object->q('Бєлоусова'));
    }
    public function testCrazy513()
    { 
        $this->assertEquals(explode(',','Бєляєва,Бєляєвої,Бєляєвій,Бєляєву,Бєляєвою,Бєляєвій,Бєляєво'), $this->object->q('Бєляєва'));
    }
    public function testCrazy514()
    { 
        $this->assertEquals(explode(',','Бібикова,Бібикової,Бібиковій,Бібикову,Бібиковою,Бібиковій,Бібиково'), $this->object->q('Бібикова'));
    }
    public function testCrazy515()
    { 
        $this->assertEquals(explode(',','Бажанова,Бажанової,Бажановій,Бажанову,Бажановою,Бажановій,Бажаново'), $this->object->q('Бажанова'));
    }
    public function testCrazy516()
    { 
        $this->assertEquals(explode(',','Баранова,Баранової,Барановій,Баранову,Барановою,Барановій,Бараново'), $this->object->q('Баранова'));
    }
    public function testCrazy517()
    { 
        $this->assertEquals(explode(',','Баришнікова,Баришнікової,Баришніковій,Баришнікову,Баришніковою,Баришніковій,Баришніково'), $this->object->q('Баришнікова'));
    }
    public function testCrazy518()
    { 
        $this->assertEquals(explode(',','Барсова,Барсової,Барсовій,Барсову,Барсовою,Барсовій,Барсово'), $this->object->q('Барсова'));
    }
    public function testCrazy519()
    { 
        $this->assertEquals(explode(',','Батюшкова,Батюшкової,Батюшковій,Батюшкову,Батюшковою,Батюшковій,Батюшково'), $this->object->q('Батюшкова'));
    }
    public function testCrazy520()
    { 
        $this->assertEquals(explode(',','Бикова,Бикової,Биковій,Бикову,Биковою,Биковій,Биково'), $this->object->q('Бикова'));
    }
    public function testCrazy521()
    { 
        $this->assertEquals(explode(',','Блохіна,Блохіни,Блохіні,Блохіну,Блохіною,Блохіні,Блохіно'), $this->object->q('Блохіна'));
    }
    public function testCrazy522()
    { 
        $this->assertEquals(explode(',','Боброва,Бобрової,Бобровій,Боброву,Бобровою,Бобровій,Боброво'), $this->object->q('Боброва'));
    }
    public function testCrazy523()
    { 
        $this->assertEquals(explode(',','Богданова,Богданової,Богдановій,Богданову,Богдановою,Богдановій,Богданово'), $this->object->q('Богданова'));
    }
    public function testCrazy524()
    { 
        $this->assertEquals(explode(',','Богомазова,Богомазової,Богомазовій,Богомазову,Богомазовою,Богомазовій,Богомазово'), $this->object->q('Богомазова'));
    }
    public function testCrazy525()
    { 
        $this->assertEquals(explode(',','Бойкова,Бойкової,Бойковій,Бойкову,Бойковою,Бойковій,Бойково'), $this->object->q('Бойкова'));
    }
    public function testCrazy526()
    { 
        $this->assertEquals(explode(',','Большакова,Большакової,Большаковій,Большакову,Большаковою,Большаковій,Большаково'), $this->object->q('Большакова'));
    }
    public function testCrazy527()
    { 
        $this->assertEquals(explode(',','Борисова,Борисової,Борисовій,Борисову,Борисовою,Борисовій,Борисово'), $this->object->q('Борисова'));
    }
    public function testCrazy528()
    { 
        $this->assertEquals(explode(',','Бочкова,Бочкової,Бочковій,Бочкову,Бочковою,Бочковій,Бочково'), $this->object->q('Бочкова'));
    }
    public function testCrazy529()
    { 
        $this->assertEquals(explode(',','Бризгалова,Бризгалової,Бризгаловій,Бризгалову,Бризгаловою,Бризгаловій,Бризгалово'), $this->object->q('Бризгалова'));
    }
    public function testCrazy530()
    { 
        $this->assertEquals(explode(',','Брусилова,Брусилової,Брусиловій,Брусилову,Брусиловою,Брусиловій,Брусилово'), $this->object->q('Брусилова'));
    }
    public function testCrazy531()
    { 
        $this->assertEquals(explode(',','Бутурліна,Бутурліни,Бутурліні,Бутурліну,Бутурліною,Бутурліні,Бутурліно'), $this->object->q('Бутурліна'));
    }
    public function testCrazy532()
    { 
        $this->assertEquals(explode(',','Бутусова,Бутусової,Бутусовій,Бутусову,Бутусовою,Бутусовій,Бутусово'), $this->object->q('Бутусова'));
    }
    public function testCrazy533()
    { 
        $this->assertEquals(explode(',','Варламова,Варламової,Варламовій,Варламову,Варламовою,Варламовій,Варламово'), $this->object->q('Варламова'));
    }
    public function testCrazy534()
    { 
        $this->assertEquals(explode(',','Васильєва,Васильєвої,Васильєвій,Васильєву,Васильєвою,Васильєвій,Васильєво'), $this->object->q('Васильєва'));
    }
    public function testCrazy535()
    { 
        $this->assertEquals(explode(',','Виноградова,Виноградової,Виноградовій,Виноградову,Виноградовою,Виноградовій,Виноградово'), $this->object->q('Виноградова'));
    }
    public function testCrazy536()
    { 
        $this->assertEquals(explode(',','Власова,Власової,Власовій,Власову,Власовою,Власовій,Власово'), $this->object->q('Власова'));
    }
    public function testCrazy537()
    { 
        $this->assertEquals(explode(',','Внукова,Внукової,Внуковій,Внукову,Внуковою,Внуковій,Внуково'), $this->object->q('Внукова'));
    }
    public function testCrazy538()
    { 
        $this->assertEquals(explode(',','Волкова,Волкової,Волковій,Волкову,Волковою,Волковій,Волково'), $this->object->q('Волкова'));
    }
    public function testCrazy539()
    { 
        $this->assertEquals(explode(',','Воробей,Воробей,Воробей,Воробей,Воробей,Воробей,Воробей'), $this->object->q('Воробей'));
    }
    public function testCrazy540()
    { 
        $this->assertEquals(explode(',','Воробйова,Воробйової,Воробйовій,Воробйову,Воробйовою,Воробйовій,Воробйово'), $this->object->q('Воробйова'));
    }
    public function testCrazy541()
    { 
        $this->assertEquals(explode(',','Вороніна,Вороніни,Вороніні,Вороніну,Вороніною,Вороніні,Вороніно'), $this->object->q('Вороніна'));
    }
    public function testCrazy542()
    { 
        $this->assertEquals(explode(',','Воронцова,Воронцової,Воронцовій,Воронцову,Воронцовою,Воронцовій,Воронцово'), $this->object->q('Воронцова'));
    }
    public function testCrazy543()
    { 
        $this->assertEquals(explode(',','Ворошилова,Ворошилової,Ворошиловій,Ворошилову,Ворошиловою,Ворошиловій,Ворошилово'), $this->object->q('Ворошилова'));
    }
    public function testCrazy544()
    { 
        $this->assertEquals(explode(',','Гаврилова,Гаврилової,Гавриловій,Гаврилову,Гавриловою,Гавриловій,Гаврилово'), $this->object->q('Гаврилова'));
    }
    public function testCrazy545()
    { 
        $this->assertEquals(explode(',','Герасимова,Герасимової,Герасимовій,Герасимову,Герасимовою,Герасимовій,Герасимово'), $this->object->q('Герасимова'));
    }
    public function testCrazy546()
    { 
        $this->assertEquals(explode(',','Гончарова,Гончарової,Гончаровій,Гончарову,Гончаровою,Гончаровій,Гончарово'), $this->object->q('Гончарова'));
    }
    public function testCrazy547()
    { 
        $this->assertEquals(explode(',','Горбунова,Горбунової,Горбуновій,Горбунову,Горбуновою,Горбуновій,Горбуново'), $this->object->q('Горбунова'));
    }
    public function testCrazy548()
    { 
        $this->assertEquals(explode(',','Горчакова,Горчакової,Горчаковій,Горчакову,Горчаковою,Горчаковій,Горчаково'), $this->object->q('Горчакова'));
    }
    public function testCrazy549()
    { 
        $this->assertEquals(explode(',','Горшкова,Горшкової,Горшковій,Горшкову,Горшковою,Горшковій,Горшково'), $this->object->q('Горшкова'));
    }
    public function testCrazy550()
    { 
        $this->assertEquals(explode(',','Громова,Громової,Громовій,Громову,Громовою,Громовій,Громово'), $this->object->q('Громова'));
    }
    public function testCrazy551()
    { 
        $this->assertEquals(explode(',','Гусєва,Гусєвої,Гусєвій,Гусєву,Гусєвою,Гусєвій,Гусєво'), $this->object->q('Гусєва'));
    }
    public function testCrazy552()
    { 
        $this->assertEquals(explode(',','Давидова,Давидової,Давидовій,Давидову,Давидовою,Давидовій,Давидово'), $this->object->q('Давидова'));
    }
    public function testCrazy553()
    { 
        $this->assertEquals(explode(',','Данилова,Данилової,Даниловій,Данилову,Даниловою,Даниловій,Данилово'), $this->object->q('Данилова'));
    }
    public function testCrazy554()
    { 
        $this->assertEquals(explode(',','Дарагана,Дарагани,Дарагані,Дарагану,Дараганою,Дарагані,Дарагано'), $this->object->q('Дарагана'));
    }
    public function testCrazy555()
    { 
        $this->assertEquals(explode(',','Дементьєва,Дементьєвої,Дементьєвій,Дементьєву,Дементьєвою,Дементьєвій,Дементьєво'), $this->object->q('Дементьєва'));
    }
    public function testCrazy556()
    { 
        $this->assertEquals(explode(',','Денисова,Денисової,Денисовій,Денисову,Денисовою,Денисовій,Денисово'), $this->object->q('Денисова'));
    }
    public function testCrazy557()
    { 
        $this->assertEquals(explode(',','Дмитрієва,Дмитрієвої,Дмитрієвій,Дмитрієву,Дмитрієвою,Дмитрієвій,Дмитрієво'), $this->object->q('Дмитрієва'));
    }
    public function testCrazy558()
    { 
        $this->assertEquals(explode(',','Добролюбова,Добролюбової,Добролюбовій,Добролюбову,Добролюбовою,Добролюбовій,Добролюбово'), $this->object->q('Добролюбова'));
    }
    public function testCrazy559()
    { 
        $this->assertEquals(explode(',','Донськая,Донської,Донській,Донськую,Донською,Донській,Донськая'), $this->object->q('Донськая'));
    }
    public function testCrazy560()
    { 
        $this->assertEquals(explode(',','Дорофєєва,Дорофєєвої,Дорофєєвій,Дорофєєву,Дорофєєвою,Дорофєєвій,Дорофєєво'), $this->object->q('Дорофєєва'));
    }
    public function testCrazy561()
    { 
        $this->assertEquals(explode(',','Дуброва,Дубрової,Дубровій,Дуброву,Дубровою,Дубровій,Дуброво'), $this->object->q('Дуброва'));
    }
    public function testCrazy562()
    { 
        $this->assertEquals(explode(',','Железнякова,Железнякової,Железняковій,Железнякову,Железняковою,Железняковій,Железняково'), $this->object->q('Железнякова'));
    }
    public function testCrazy563()
    { 
        $this->assertEquals(explode(',','Жердєва,Жердєвої,Жердєвій,Жердєву,Жердєвою,Жердєвій,Жердєво'), $this->object->q('Жердєва'));
    }
    public function testCrazy564()
    { 
        $this->assertEquals(explode(',','Жукова,Жукової,Жуковій,Жукову,Жуковою,Жуковій,Жуково'), $this->object->q('Жукова'));
    }
    public function testCrazy565()
    { 
        $this->assertEquals(explode(',','Журавльова,Журавльової,Журавльовій,Журавльову,Журавльовою,Журавльовій,Журавльово'), $this->object->q('Журавльова'));
    }
    public function testCrazy566()
    { 
        $this->assertEquals(explode(',','Заварова,Заварової,Заваровій,Заварову,Заваровою,Заваровій,Заварово'), $this->object->q('Заварова'));
    }
    public function testCrazy567()
    { 
        $this->assertEquals(explode(',','Загарова,Загарової,Загаровій,Загарову,Загаровою,Загаровій,Загарово'), $this->object->q('Загарова'));
    }
    public function testCrazy568()
    { 
        $this->assertEquals(explode(',','Зайцева,Зайцевої,Зайцевій,Зайцеву,Зайцевою,Зайцевій,Зайцево'), $this->object->q('Зайцева'));
    }
    public function testCrazy569()
    { 
        $this->assertEquals(explode(',','Захарова,Захарової,Захаровій,Захарову,Захаровою,Захаровій,Захарово'), $this->object->q('Захарова'));
    }
    public function testCrazy570()
    { 
        $this->assertEquals(explode(',','Звєрєва,Звєрєвої,Звєрєвій,Звєрєву,Звєрєвою,Звєрєвій,Звєрєво'), $this->object->q('Звєрєва'));
    }
    public function testCrazy571()
    { 
        $this->assertEquals(explode(',','Зерова,Зерової,Зеровій,Зерову,Зеровою,Зеровій,Зерово'), $this->object->q('Зерова'));
    }
    public function testCrazy572()
    { 
        $this->assertEquals(explode(',','Золотухіна,Золотухіни,Золотухіні,Золотухіну,Золотухіною,Золотухіні,Золотухіно'), $this->object->q('Золотухіна'));
    }
    public function testCrazy573()
    { 
        $this->assertEquals(explode(',','Зубова,Зубової,Зубовій,Зубову,Зубовою,Зубовій,Зубово'), $this->object->q('Зубова'));
    }
    public function testCrazy574()
    { 
        $this->assertEquals(explode(',','Казакова,Казакової,Казаковій,Казакову,Казаковою,Казаковій,Казаково'), $this->object->q('Казакова'));
    }
    public function testCrazy575()
    { 
        $this->assertEquals(explode(',','Калініна,Калініни,Калініні,Калініну,Калініною,Калініні,Калініно'), $this->object->q('Калініна'));
    }
    public function testCrazy576()
    { 
        $this->assertEquals(explode(',','Калашникова,Калашникової,Калашниковій,Калашникову,Калашниковою,Калашниковій,Калашниково'), $this->object->q('Калашникова'));
    }
    public function testCrazy577()
    { 
        $this->assertEquals(explode(',','Карпова,Карпової,Карповій,Карпову,Карповою,Карповій,Карпово'), $this->object->q('Карпова'));
    }
    public function testCrazy578()
    { 
        $this->assertEquals(explode(',','Каштанова,Каштанової,Каштановій,Каштанову,Каштановою,Каштановій,Каштаново'), $this->object->q('Каштанова'));
    }
    public function testCrazy579()
    { 
        $this->assertEquals(explode(',','Кисельова,Кисельової,Кисельовій,Кисельову,Кисельовою,Кисельовій,Кисельово'), $this->object->q('Кисельова'));
    }
    public function testCrazy580()
    { 
        $this->assertEquals(explode(',','Ковальова,Ковальової,Ковальовій,Ковальову,Ковальовою,Ковальовій,Ковальово'), $this->object->q('Ковальова'));
    }
    public function testCrazy581()
    { 
        $this->assertEquals(explode(',','Кожевникова,Кожевникової,Кожевниковій,Кожевникову,Кожевниковою,Кожевниковій,Кожевниково'), $this->object->q('Кожевникова'));
    }
    public function testCrazy582()
    { 
        $this->assertEquals(explode(',','Козлова,Козлової,Козловій,Козлову,Козловою,Козловій,Козлово'), $this->object->q('Козлова'));
    }
    public function testCrazy583()
    { 
        $this->assertEquals(explode(',','Колесникова,Колесникової,Колесниковій,Колесникову,Колесниковою,Колесниковій,Колесниково'), $this->object->q('Колесникова'));
    }
    public function testCrazy584()
    { 
        $this->assertEquals(explode(',','Кольцова,Кольцової,Кольцовій,Кольцову,Кольцовою,Кольцовій,Кольцово'), $this->object->q('Кольцова'));
    }
    public function testCrazy585()
    { 
        $this->assertEquals(explode(',','Комарова,Комарової,Комаровій,Комарову,Комаровою,Комаровій,Комарово'), $this->object->q('Комарова'));
    }
    public function testCrazy586()
    { 
        $this->assertEquals(explode(',','Коновалова,Коновалової,Коноваловій,Коновалову,Коноваловою,Коноваловій,Коновалово'), $this->object->q('Коновалова'));
    }
    public function testCrazy587()
    { 
        $this->assertEquals(explode(',','Конюхова,Конюхової,Конюховій,Конюхову,Конюховою,Конюховій,Конюхово'), $this->object->q('Конюхова'));
    }
    public function testCrazy588()
    { 
        $this->assertEquals(explode(',','Копилова,Копилової,Копиловій,Копилову,Копиловою,Копиловій,Копилово'), $this->object->q('Копилова'));
    }
    public function testCrazy589()
    { 
        $this->assertEquals(explode(',','Кормильцева,Кормильцевої,Кормильцевій,Кормильцеву,Кормильцевою,Кормильцевій,Кормильцево'), $this->object->q('Кормильцева'));
    }
    public function testCrazy590()
    { 
        $this->assertEquals(explode(',','Коробова,Коробової,Коробовій,Коробову,Коробовою,Коробовій,Коробово'), $this->object->q('Коробова'));
    }
    public function testCrazy591()
    { 
        $this->assertEquals(explode(',','Коровкіна,Коровкіни,Коровкіні,Коровкіну,Коровкіною,Коровкіні,Коровкіно'), $this->object->q('Коровкіна'));
    }
    public function testCrazy592()
    { 
        $this->assertEquals(explode(',','Корольова,Корольової,Корольовій,Корольову,Корольовою,Корольовій,Корольово'), $this->object->q('Корольова'));
    }
    public function testCrazy593()
    { 
        $this->assertEquals(explode(',','Котова,Котової,Котовій,Котову,Котовою,Котовій,Котово'), $this->object->q('Котова'));
    }
    public function testCrazy594()
    { 
        $this->assertEquals(explode(',','Краснова,Краснової,Красновій,Краснову,Красновою,Красновій,Красново'), $this->object->q('Краснова'));
    }
    public function testCrazy595()
    { 
        $this->assertEquals(explode(',','Крилова,Крилової,Криловій,Крилову,Криловою,Криловій,Крилово'), $this->object->q('Крилова'));
    }
    public function testCrazy596()
    { 
        $this->assertEquals(explode(',','Кримова,Кримової,Кримовій,Кримову,Кримовою,Кримовій,Кримово'), $this->object->q('Кримова'));
    }
    public function testCrazy597()
    { 
        $this->assertEquals(explode(',','Крюкова,Крюкової,Крюковій,Крюкову,Крюковою,Крюковій,Крюково'), $this->object->q('Крюкова'));
    }
    public function testCrazy598()
    { 
        $this->assertEquals(explode(',','Кудряшова,Кудряшової,Кудряшовій,Кудряшову,Кудряшовою,Кудряшовій,Кудряшово'), $this->object->q('Кудряшова'));
    }
    public function testCrazy599()
    { 
        $this->assertEquals(explode(',','Кузнецова,Кузнецової,Кузнецовій,Кузнецову,Кузнецовою,Кузнецовій,Кузнецово'), $this->object->q('Кузнецова'));
    }
    public function testCrazy600()
    { 
        $this->assertEquals(explode(',','Кузьміна,Кузьміни,Кузьміні,Кузьміну,Кузьміною,Кузьміні,Кузьміно'), $this->object->q('Кузьміна'));
    }
    public function testCrazy601()
    { 
        $this->assertEquals(explode(',','Кулакова,Кулакової,Кулаковій,Кулакову,Кулаковою,Кулаковій,Кулаково'), $this->object->q('Кулакова'));
    }
    public function testCrazy602()
    { 
        $this->assertEquals(explode(',','Куликова,Куликової,Куликовій,Куликову,Куликовою,Куликовій,Куликово'), $this->object->q('Куликова'));
    }
    public function testCrazy603()
    { 
        $this->assertEquals(explode(',','Куркова,Куркової,Курковій,Куркову,Курковою,Курковій,Курково'), $this->object->q('Куркова'));
    }
    public function testCrazy604()
    { 
        $this->assertEquals(explode(',','Курочкіна,Курочкіни,Курочкіні,Курочкіну,Курочкіною,Курочкіні,Курочкіно'), $this->object->q('Курочкіна'));
    }
    public function testCrazy605()
    { 
        $this->assertEquals(explode(',','Лєскова,Лєскової,Лєсковій,Лєскову,Лєсковою,Лєсковій,Лєсково'), $this->object->q('Лєскова'));
    }
    public function testCrazy606()
    { 
        $this->assertEquals(explode(',','Лідова,Лідової,Лідовій,Лідову,Лідовою,Лідовій,Лідово'), $this->object->q('Лідова'));
    }
    public function testCrazy607()
    { 
        $this->assertEquals(explode(',','Ладигіна,Ладигіни,Ладигіні,Ладигіну,Ладигіною,Ладигіні,Ладигіно'), $this->object->q('Ладигіна'));
    }
    public function testCrazy608()
    { 
        $this->assertEquals(explode(',','Лазарєва,Лазарєвої,Лазарєвій,Лазарєву,Лазарєвою,Лазарєвій,Лазарєво'), $this->object->q('Лазарєва'));
    }
    public function testCrazy609()
    { 
        $this->assertEquals(explode(',','Лебедєва,Лебедєвої,Лебедєвій,Лебедєву,Лебедєвою,Лебедєвій,Лебедєво'), $this->object->q('Лебедєва'));
    }
    public function testCrazy610()
    { 
        $this->assertEquals(explode(',','Лихоносова,Лихоносової,Лихоносовій,Лихоносову,Лихоносовою,Лихоносовій,Лихоносово'), $this->object->q('Лихоносова'));
    }
    public function testCrazy611()
    { 
        $this->assertEquals(explode(',','Лосєва,Лосєвої,Лосєвій,Лосєву,Лосєвою,Лосєвій,Лосєво'), $this->object->q('Лосєва'));
    }
    public function testCrazy612()
    { 
        $this->assertEquals(explode(',','Львова,Львової,Львовій,Львову,Львовою,Львовій,Львово'), $this->object->q('Львова'));
    }
    public function testCrazy613()
    { 
        $this->assertEquals(explode(',','Любимова,Любимової,Любимовій,Любимову,Любимовою,Любимовій,Любимово'), $this->object->q('Любимова'));
    }
    public function testCrazy614()
    { 
        $this->assertEquals(explode(',','Мілютіна,Мілютіни,Мілютіні,Мілютіну,Мілютіною,Мілютіні,Мілютіно'), $this->object->q('Мілютіна'));
    }
    public function testCrazy615()
    { 
        $this->assertEquals(explode(',','Макарова,Макарової,Макаровій,Макарову,Макаровою,Макаровій,Макарово'), $this->object->q('Макарова'));
    }
    public function testCrazy616()
    { 
        $this->assertEquals(explode(',','Максимова,Максимової,Максимовій,Максимову,Максимовою,Максимовій,Максимово'), $this->object->q('Максимова'));
    }
    public function testCrazy617()
    { 
        $this->assertEquals(explode(',','Малакова,Малакової,Малаковій,Малакову,Малаковою,Малаковій,Малаково'), $this->object->q('Малакова'));
    }
    public function testCrazy618()
    { 
        $this->assertEquals(explode(',','Мамонова,Мамонової,Мамоновій,Мамонову,Мамоновою,Мамоновій,Мамоново'), $this->object->q('Мамонова'));
    }
    public function testCrazy619()
    { 
        $this->assertEquals(explode(',','Манасеїна,Манасеїни,Манасеїні,Манасеїну,Манасеїною,Манасеїні,Манасеїно'), $this->object->q('Манасеїна'));
    }
    public function testCrazy620()
    { 
        $this->assertEquals(explode(',','Маркова,Маркової,Марковій,Маркову,Марковою,Марковій,Марково'), $this->object->q('Маркова'));
    }
    public function testCrazy621()
    { 
        $this->assertEquals(explode(',','Мартенс,Мартенс,Мартенс,Мартенс,Мартенс,Мартенс,Мартенс'), $this->object->q('Мартенс'));
    }
    public function testCrazy622()
    { 
        $this->assertEquals(explode(',','Мартинова,Мартинової,Мартиновій,Мартинову,Мартиновою,Мартиновій,Мартиново'), $this->object->q('Мартинова'));
    }
    public function testCrazy623()
    { 
        $this->assertEquals(explode(',','Масленнікова,Масленнікової,Масленніковій,Масленнікову,Масленніковою,Масленніковій,Масленніково'), $this->object->q('Масленнікова'));
    }
    public function testCrazy624()
    { 
        $this->assertEquals(explode(',','Маслова,Маслової,Масловій,Маслову,Масловою,Масловій,Маслово'), $this->object->q('Маслова'));
    }
    public function testCrazy625()
    { 
        $this->assertEquals(explode(',','Матвєєва,Матвєєвої,Матвєєвій,Матвєєву,Матвєєвою,Матвєєвій,Матвєєво'), $this->object->q('Матвєєва'));
    }
    public function testCrazy626()
    { 
        $this->assertEquals(explode(',','Медведєва,Медведєвої,Медведєвій,Медведєву,Медведєвою,Медведєвій,Медведєво'), $this->object->q('Медведєва'));
    }
    public function testCrazy627()
    { 
        $this->assertEquals(explode(',','Мельникова,Мельникової,Мельниковій,Мельникову,Мельниковою,Мельниковій,Мельниково'), $this->object->q('Мельникова'));
    }
    public function testCrazy628()
    { 
        $this->assertEquals(explode(',','Миронова,Миронової,Мироновій,Миронову,Мироновою,Мироновій,Мироново'), $this->object->q('Миронова'));
    }
    public function testCrazy629()
    { 
        $this->assertEquals(explode(',','Михайлова,Михайлової,Михайловій,Михайлову,Михайловою,Михайловій,Михайлово'), $this->object->q('Михайлова'));
    }
    public function testCrazy630()
    { 
        $this->assertEquals(explode(',','Моїсєєва,Моїсєєвої,Моїсєєвій,Моїсєєву,Моїсєєвою,Моїсєєвій,Моїсєєво'), $this->object->q('Моїсєєва'));
    }
    public function testCrazy631()
    { 
        $this->assertEquals(explode(',','Моргунова,Моргунової,Моргуновій,Моргунову,Моргуновою,Моргуновій,Моргуново'), $this->object->q('Моргунова'));
    }
    public function testCrazy632()
    { 
        $this->assertEquals(explode(',','Моркова,Моркової,Морковій,Моркову,Морковою,Морковій,Морково'), $this->object->q('Моркова'));
    }
    public function testCrazy633()
    { 
        $this->assertEquals(explode(',','Морозова,Морозової,Морозовій,Морозову,Морозовою,Морозовій,Морозово'), $this->object->q('Морозова'));
    }
    public function testCrazy634()
    { 
        $this->assertEquals(explode(',','Мухіна,Мухіни,Мухіні,Мухіну,Мухіною,Мухіні,Мухіно'), $this->object->q('Мухіна'));
    }
    public function testCrazy635()
    { 
        $this->assertEquals(explode(',','Нікітіна,Нікітіни,Нікітіні,Нікітіну,Нікітіною,Нікітіні,Нікітіно'), $this->object->q('Нікітіна'));
    }
    public function testCrazy636()
    { 
        $this->assertEquals(explode(',','Ніколаєва,Ніколаєвої,Ніколаєвій,Ніколаєву,Ніколаєвою,Ніколаєвій,Ніколаєво'), $this->object->q('Ніколаєва'));
    }
    public function testCrazy637()
    { 
        $this->assertEquals(explode(',','Нікуліна,Нікуліни,Нікуліні,Нікуліну,Нікуліною,Нікуліні,Нікуліно'), $this->object->q('Нікуліна'));
    }
    public function testCrazy638()
    { 
        $this->assertEquals(explode(',','Набокова,Набокової,Набоковій,Набокову,Набоковою,Набоковій,Набоково'), $this->object->q('Набокова'));
    }
    public function testCrazy639()
    { 
        $this->assertEquals(explode(',','Некрасова,Некрасової,Некрасовій,Некрасову,Некрасовою,Некрасовій,Некрасово'), $this->object->q('Некрасова'));
    }
    public function testCrazy640()
    { 
        $this->assertEquals(explode(',','Новикова,Новикової,Новиковій,Новикову,Новиковою,Новиковій,Новиково'), $this->object->q('Новикова'));
    }
    public function testCrazy641()
    { 
        $this->assertEquals(explode(',','Орлова,Орлової,Орловій,Орлову,Орловою,Орловій,Орлово'), $this->object->q('Орлова'));
    }
    public function testCrazy642()
    { 
        $this->assertEquals(explode(',','Осипова,Осипової,Осиповій,Осипову,Осиповою,Осиповій,Осипово'), $this->object->q('Осипова'));
    }
    public function testCrazy643()
    { 
        $this->assertEquals(explode(',','Павлова,Павлової,Павловій,Павлову,Павловою,Павловій,Павлово'), $this->object->q('Павлова'));
    }
    public function testCrazy644()
    { 
        $this->assertEquals(explode(',','Павлушкова,Павлушкової,Павлушковій,Павлушкову,Павлушковою,Павлушковій,Павлушково'), $this->object->q('Павлушкова'));
    }
    public function testCrazy645()
    { 
        $this->assertEquals(explode(',','Панова,Панової,Пановій,Панову,Пановою,Пановій,Паново'), $this->object->q('Панова'));
    }
    public function testCrazy646()
    { 
        $this->assertEquals(explode(',','Петрова,Петрової,Петровій,Петрову,Петровою,Петровій,Петрово'), $this->object->q('Петрова'));
    }
    public function testCrazy647()
    { 
        $this->assertEquals(explode(',','Пильчикова,Пильчикової,Пильчиковій,Пильчикову,Пильчиковою,Пильчиковій,Пильчиково'), $this->object->q('Пильчикова'));
    }
    public function testCrazy648()
    { 
        $this->assertEquals(explode(',','Платонова,Платонової,Платоновій,Платонову,Платоновою,Платоновій,Платоново'), $this->object->q('Платонова'));
    }
    public function testCrazy649()
    { 
        $this->assertEquals(explode(',','Плеханова,Плеханової,Плехановій,Плеханову,Плехановою,Плехановій,Плеханово'), $this->object->q('Плеханова'));
    }
    public function testCrazy650()
    { 
        $this->assertEquals(explode(',','Полякова,Полякової,Поляковій,Полякову,Поляковою,Поляковій,Поляково'), $this->object->q('Полякова'));
    }
    public function testCrazy651()
    { 
        $this->assertEquals(explode(',','Пономарьова,Пономарьової,Пономарьовій,Пономарьову,Пономарьовою,Пономарьовій,Пономарьово'), $this->object->q('Пономарьова'));
    }
    public function testCrazy652()
    { 
        $this->assertEquals(explode(',','Попова,Попової,Поповій,Попову,Поповою,Поповій,Попово'), $this->object->q('Попова'));
    }
    public function testCrazy653()
    { 
        $this->assertEquals(explode(',','Пояркова,Пояркової,Поярковій,Пояркову,Поярковою,Поярковій,Поярково'), $this->object->q('Пояркова'));
    }
    public function testCrazy654()
    { 
        $this->assertEquals(explode(',','Пригунова,Пригунової,Пригуновій,Пригунову,Пригуновою,Пригуновій,Пригуново'), $this->object->q('Пригунова'));
    }
    public function testCrazy655()
    { 
        $this->assertEquals(explode(',','Прошкіна,Прошкіни,Прошкіні,Прошкіну,Прошкіною,Прошкіні,Прошкіно'), $this->object->q('Прошкіна'));
    }
    public function testCrazy656()
    { 
        $this->assertEquals(explode(',','Решетникова,Решетникової,Решетниковій,Решетникову,Решетниковою,Решетниковій,Решетниково'), $this->object->q('Решетникова'));
    }
    public function testCrazy657()
    { 
        $this->assertEquals(explode(',','Рожкова,Рожкової,Рожковій,Рожкову,Рожковою,Рожковій,Рожково'), $this->object->q('Рожкова'));
    }
    public function testCrazy658()
    { 
        $this->assertEquals(explode(',','Романова,Романової,Романовій,Романову,Романовою,Романовій,Романово'), $this->object->q('Романова'));
    }
    public function testCrazy659()
    { 
        $this->assertEquals(explode(',','Рябова,Рябової,Рябовій,Рябову,Рябовою,Рябовій,Рябово'), $this->object->q('Рябова'));
    }
    public function testCrazy660()
    { 
        $this->assertEquals(explode(',','Сабліна,Сабліни,Сабліні,Сабліну,Сабліною,Сабліні,Сабліно'), $this->object->q('Сабліна'));
    }
    public function testCrazy661()
    { 
        $this->assertEquals(explode(',','Савіна,Савіни,Савіні,Савіну,Савіною,Савіні,Савіно'), $this->object->q('Савіна'));
    }
    public function testCrazy662()
    { 
        $this->assertEquals(explode(',','Сазонова,Сазонової,Сазоновій,Сазонову,Сазоновою,Сазоновій,Сазоново'), $this->object->q('Сазонова'));
    }
    public function testCrazy663()
    { 
        $this->assertEquals(explode(',','Сальникова,Сальникової,Сальниковій,Сальникову,Сальниковою,Сальниковій,Сальниково'), $this->object->q('Сальникова'));
    }
    public function testCrazy664()
    { 
        $this->assertEquals(explode(',','Самойлова,Самойлової,Самойловій,Самойлову,Самойловою,Самойловій,Самойлово'), $this->object->q('Самойлова'));
    }
    public function testCrazy665()
    { 
        $this->assertEquals(explode(',','Самсонова,Самсонової,Самсоновій,Самсонову,Самсоновою,Самсоновій,Самсоново'), $this->object->q('Самсонова'));
    }
    public function testCrazy666()
    { 
        $this->assertEquals(explode(',','Сбітнєва,Сбітнєвої,Сбітнєвій,Сбітнєву,Сбітнєвою,Сбітнєвій,Сбітнєво'), $this->object->q('Сбітнєва'));
    }
    public function testCrazy667()
    { 
        $this->assertEquals(explode(',','Свиридова,Свиридової,Свиридовій,Свиридову,Свиридовою,Свиридовій,Свиридово'), $this->object->q('Свиридова'));
    }
    public function testCrazy668()
    { 
        $this->assertEquals(explode(',','Селезньова,Селезньової,Селезньовій,Селезньову,Селезньовою,Селезньовій,Селезньово'), $this->object->q('Селезньова'));
    }
    public function testCrazy669()
    { 
        $this->assertEquals(explode(',','Семенова,Семенової,Семеновій,Семенову,Семеновою,Семеновій,Семеново'), $this->object->q('Семенова'));
    }
    public function testCrazy670()
    { 
        $this->assertEquals(explode(',','Сербіна,Сербіни,Сербіні,Сербіну,Сербіною,Сербіні,Сербіно'), $this->object->q('Сербіна'));
    }
    public function testCrazy671()
    { 
        $this->assertEquals(explode(',','Сергєєва,Сергєєвої,Сергєєвій,Сергєєву,Сергєєвою,Сергєєвій,Сергєєво'), $this->object->q('Сергєєва'));
    }
    public function testCrazy672()
    { 
        $this->assertEquals(explode(',','Сибірякова,Сибірякової,Сибіряковій,Сибірякову,Сибіряковою,Сибіряковій,Сибіряково'), $this->object->q('Сибірякова'));
    }
    public function testCrazy673()
    { 
        $this->assertEquals(explode(',','Сидорова,Сидорової,Сидоровій,Сидорову,Сидоровою,Сидоровій,Сидорово'), $this->object->q('Сидорова'));
    }
    public function testCrazy674()
    { 
        $this->assertEquals(explode(',','Симонова,Симонової,Симоновій,Симонову,Симоновою,Симоновій,Симоново'), $this->object->q('Симонова'));
    }
    public function testCrazy675()
    { 
        $this->assertEquals(explode(',','Синельникова,Синельникової,Синельниковій,Синельникову,Синельниковою,Синельниковій,Синельниково'), $this->object->q('Синельникова'));
    }
    public function testCrazy676()
    { 
        $this->assertEquals(explode(',','Скобелева,Скобелевої,Скобелевій,Скобелеву,Скобелевою,Скобелевій,Скобелево'), $this->object->q('Скобелева'));
    }
    public function testCrazy677()
    { 
        $this->assertEquals(explode(',','Скобліна,Скобліни,Скобліні,Скобліну,Скобліною,Скобліні,Скобліно'), $this->object->q('Скобліна'));
    }
    public function testCrazy678()
    { 
        $this->assertEquals(explode(',','Смирнова,Смирнової,Смирновій,Смирнову,Смирновою,Смирновій,Смирново'), $this->object->q('Смирнова'));
    }
    public function testCrazy679()
    { 
        $this->assertEquals(explode(',','Снєгірьова,Снєгірьової,Снєгірьовій,Снєгірьову,Снєгірьовою,Снєгірьовій,Снєгірьово'), $this->object->q('Снєгірьова'));
    }
    public function testCrazy680()
    { 
        $this->assertEquals(explode(',','Соболєва,Соболєвої,Соболєвій,Соболєву,Соболєвою,Соболєвій,Соболєво'), $this->object->q('Соболєва'));
    }
    public function testCrazy681()
    { 
        $this->assertEquals(explode(',','Соколова,Соколової,Соколовій,Соколову,Соколовою,Соколовій,Соколово'), $this->object->q('Соколова'));
    }
    public function testCrazy682()
    { 
        $this->assertEquals(explode(',','Солнцева,Солнцевої,Солнцевій,Солнцеву,Солнцевою,Солнцевій,Солнцево'), $this->object->q('Солнцева'));
    }
    public function testCrazy683()
    { 
        $this->assertEquals(explode(',','Соловйова,Соловйової,Соловйовій,Соловйову,Соловйовою,Соловйовій,Соловйово'), $this->object->q('Соловйова'));
    }
    public function testCrazy684()
    { 
        $this->assertEquals(explode(',','Сомова,Сомової,Сомовій,Сомову,Сомовою,Сомовій,Сомово'), $this->object->q('Сомова'));
    }
    public function testCrazy685()
    { 
        $this->assertEquals(explode(',','Сорокіна,Сорокіни,Сорокіні,Сорокіну,Сорокіною,Сорокіні,Сорокіно'), $this->object->q('Сорокіна'));
    }
    public function testCrazy686()
    { 
        $this->assertEquals(explode(',','Стєклова,Стєклової,Стєкловій,Стєклову,Стєкловою,Стєкловій,Стєклово'), $this->object->q('Стєклова'));
    }
    public function testCrazy687()
    { 
        $this->assertEquals(explode(',','Старкова,Старкової,Старковій,Старкову,Старковою,Старковій,Старково'), $this->object->q('Старкова'));
    }
    public function testCrazy688()
    { 
        $this->assertEquals(explode(',','Степанова,Степанової,Степановій,Степанову,Степановою,Степановій,Степаново'), $this->object->q('Степанова'));
    }
    public function testCrazy689()
    { 
        $this->assertEquals(explode(',','Табакова,Табакової,Табаковій,Табакову,Табаковою,Табаковій,Табаково'), $this->object->q('Табакова'));
    }
    public function testCrazy690()
    { 
        $this->assertEquals(explode(',','Тарасова,Тарасової,Тарасовій,Тарасову,Тарасовою,Тарасовій,Тарасово'), $this->object->q('Тарасова'));
    }
    public function testCrazy691()
    { 
        $this->assertEquals(explode(',','Терентьєва,Терентьєвої,Терентьєвій,Терентьєву,Терентьєвою,Терентьєвій,Терентьєво'), $this->object->q('Терентьєва'));
    }
    public function testCrazy692()
    { 
        $this->assertEquals(explode(',','Тимофєєва,Тимофєєвої,Тимофєєвій,Тимофєєву,Тимофєєвою,Тимофєєвій,Тимофєєво'), $this->object->q('Тимофєєва'));
    }
    public function testCrazy693()
    { 
        $this->assertEquals(explode(',','Титова,Титової,Титовій,Титову,Титовою,Титовій,Титово'), $this->object->q('Титова'));
    }
    public function testCrazy694()
    { 
        $this->assertEquals(explode(',','Тихомирова,Тихомирової,Тихомировій,Тихомирову,Тихомировою,Тихомировій,Тихомирово'), $this->object->q('Тихомирова'));
    }
    public function testCrazy695()
    { 
        $this->assertEquals(explode(',','Тихонова,Тихонової,Тихоновій,Тихонову,Тихоновою,Тихоновій,Тихоново'), $this->object->q('Тихонова'));
    }
    public function testCrazy696()
    { 
        $this->assertEquals(explode(',','Тюленєва,Тюленєвої,Тюленєвій,Тюленєву,Тюленєвою,Тюленєвій,Тюленєво'), $this->object->q('Тюленєва'));
    }
    public function testCrazy697()
    { 
        $this->assertEquals(explode(',','Уварова,Уварової,Уваровій,Уварову,Уваровою,Уваровій,Уварово'), $this->object->q('Уварова'));
    }
    public function testCrazy698()
    { 
        $this->assertEquals(explode(',','Усова,Усової,Усовій,Усову,Усовою,Усовій,Усово'), $this->object->q('Усова'));
    }
    public function testCrazy699()
    { 
        $this->assertEquals(explode(',','Устинова,Устинової,Устиновій,Устинову,Устиновою,Устиновій,Устиново'), $this->object->q('Устинова'));
    }
    public function testCrazy700()
    { 
        $this->assertEquals(explode(',','Філіппова,Філіппової,Філіпповій,Філіппову,Філіпповою,Філіпповій,Філіппово'), $this->object->q('Філіппова'));
    }
    public function testCrazy701()
    { 
        $this->assertEquals(explode(',','Філатова,Філатової,Філатовій,Філатову,Філатовою,Філатовій,Філатово'), $this->object->q('Філатова'));
    }
    public function testCrazy702()
    { 
        $this->assertEquals(explode(',','Федорова,Федорової,Федоровій,Федорову,Федоровою,Федоровій,Федорово'), $this->object->q('Федорова'));
    }
    public function testCrazy703()
    { 
        $this->assertEquals(explode(',','Фоміна,Фоміни,Фоміні,Фоміну,Фоміною,Фоміні,Фоміно'), $this->object->q('Фоміна'));
    }
    public function testCrazy704()
    { 
        $this->assertEquals(explode(',','Фролова,Фролової,Фроловій,Фролову,Фроловою,Фроловій,Фролово'), $this->object->q('Фролова'));
    }
    public function testCrazy705()
    { 
        $this->assertEquals(explode(',','Хілкова,Хілкової,Хілковій,Хілкову,Хілковою,Хілковій,Хілково'), $this->object->q('Хілкова'));
    }
    public function testCrazy706()
    { 
        $this->assertEquals(explode(',','Хвостова,Хвостової,Хвостовій,Хвостову,Хвостовою,Хвостовій,Хвостово'), $this->object->q('Хвостова'));
    }
    public function testCrazy707()
    { 
        $this->assertEquals(explode(',','Худякова,Худякової,Худяковій,Худякову,Худяковою,Худяковій,Худяково'), $this->object->q('Худякова'));
    }
    public function testCrazy708()
    { 
        $this->assertEquals(explode(',','Цвєткова,Цвєткової,Цвєтковій,Цвєткову,Цвєтковою,Цвєтковій,Цвєтково'), $this->object->q('Цвєткова'));
    }
    public function testCrazy709()
    { 
        $this->assertEquals(explode(',','Чанова,Чанової,Чановій,Чанову,Чановою,Чановій,Чаново'), $this->object->q('Чанова'));
    }
    public function testCrazy710()
    { 
        $this->assertEquals(explode(',','Чевкіна,Чевкіни,Чевкіні,Чевкіну,Чевкіною,Чевкіні,Чевкіно'), $this->object->q('Чевкіна'));
    }
    public function testCrazy711()
    { 
        $this->assertEquals(explode(',','Черенкова,Черенкової,Черенковій,Черенкову,Черенковою,Черенковій,Черенково'), $this->object->q('Черенкова'));
    }
    public function testCrazy712()
    { 
        $this->assertEquals(explode(',','Черепкова,Черепкової,Черепковій,Черепкову,Черепковою,Черепковій,Черепково'), $this->object->q('Черепкова'));
    }
    public function testCrazy713()
    { 
        $this->assertEquals(explode(',','Чулкова,Чулкової,Чулковій,Чулкову,Чулковою,Чулковій,Чулково'), $this->object->q('Чулкова'));
    }
    public function testCrazy714()
    { 
        $this->assertEquals(explode(',','Шевельова,Шевельової,Шевельовій,Шевельову,Шевельовою,Шевельовій,Шевельово'), $this->object->q('Шевельова'));
    }
    public function testCrazy715()
    { 
        $this->assertEquals(explode(',','Шеліхова,Шеліхової,Шеліховій,Шеліхову,Шеліховою,Шеліховій,Шеліхово'), $this->object->q('Шеліхова'));
    }
    public function testCrazy716()
    { 
        $this->assertEquals(explode(',','Шиніна,Шиніни,Шиніні,Шиніну,Шиніною,Шиніні,Шиніно'), $this->object->q('Шиніна'));
    }
    public function testCrazy717()
    { 
        $this->assertEquals(explode(',','Ширяєва,Ширяєвої,Ширяєвій,Ширяєву,Ширяєвою,Ширяєвій,Ширяєво'), $this->object->q('Ширяєва'));
    }
    public function testCrazy718()
    { 
        $this->assertEquals(explode(',','Шишова,Шишової,Шишовій,Шишову,Шишовою,Шишовій,Шишово'), $this->object->q('Шишова'));
    }
    public function testCrazy719()
    { 
        $this->assertEquals(explode(',','Шулакова,Шулакової,Шулаковій,Шулакову,Шулаковою,Шулаковій,Шулаково'), $this->object->q('Шулакова'));
    }
    public function testCrazy720()
    { 
        $this->assertEquals(explode(',','Щапова,Щапової,Щаповій,Щапову,Щаповою,Щаповій,Щапово'), $this->object->q('Щапова'));
    }
    public function testCrazy721()
    { 
        $this->assertEquals(explode(',','Щаслива,Щасливої,Щасливій,Щасливу,Щасливою,Щасливій,Щасливо'), $this->object->q('Щаслива'));
    }
    public function testCrazy722()
    { 
        $this->assertEquals(explode(',','Яковлєва,Яковлєвої,Яковлєвій,Яковлєву,Яковлєвою,Яковлєвій,Яковлєво'), $this->object->q('Яковлєва'));
    }
    public function testCrazy723()
    { 
        $this->assertEquals(explode(',','Яшина,Яшиної,Яшиній,Яшину,Яшиною,Яшиній,Яшино'), $this->object->q('Яшина'));
    }

}