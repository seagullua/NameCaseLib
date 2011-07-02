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
        $this->assertEquals('S-Єрмоленко', $this->object->splitFullName('Єрмоленко').'-Єрмоленко');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('S-Єсипенко', $this->object->splitFullName('Єсипенко').'-Єсипенко');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('S-Іванів', $this->object->splitFullName('Іванів').'-Іванів');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('S-Іваненко', $this->object->splitFullName('Іваненко').'-Іваненко');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('S-Іванченко', $this->object->splitFullName('Іванченко').'-Іванченко');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('S-Іванчук', $this->object->splitFullName('Іванчук').'-Іванчук');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('S-Іванюк', $this->object->splitFullName('Іванюк').'-Іванюк');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('S-Івахненко', $this->object->splitFullName('Івахненко').'-Івахненко');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('S-Івашко', $this->object->splitFullName('Івашко').'-Івашко');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('S-Іващенко', $this->object->splitFullName('Іващенко').'-Іващенко');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('S-Івченко', $this->object->splitFullName('Івченко').'-Івченко');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('S-Іллєнко', $this->object->splitFullName('Іллєнко').'-Іллєнко');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('S-Ільницький', $this->object->splitFullName('Ільницький').'-Ільницький');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('S-Ільченко', $this->object->splitFullName('Ільченко').'-Ільченко');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('S-Іщенко', $this->object->splitFullName('Іщенко').'-Іщенко');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('S-Абраменко', $this->object->splitFullName('Абраменко').'-Абраменко');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('S-Абрамчук', $this->object->splitFullName('Абрамчук').'-Абрамчук');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('S-Адамчук', $this->object->splitFullName('Адамчук').'-Адамчук');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('S-Акуленко', $this->object->splitFullName('Акуленко').'-Акуленко');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('S-Алексєєнко', $this->object->splitFullName('Алексєєнко').'-Алексєєнко');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('S-Алексійчук', $this->object->splitFullName('Алексійчук').'-Алексійчук');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('S-Андрієнко', $this->object->splitFullName('Андрієнко').'-Андрієнко');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('S-Андрійчук', $this->object->splitFullName('Андрійчук').'-Андрійчук');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('S-Андрейко', $this->object->splitFullName('Андрейко').'-Андрейко');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('S-Андрусів', $this->object->splitFullName('Андрусів').'-Андрусів');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('S-Андрушків', $this->object->splitFullName('Андрушків').'-Андрушків');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('S-Андрущенко', $this->object->splitFullName('Андрущенко').'-Андрущенко');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('S-Анищенко', $this->object->splitFullName('Анищенко').'-Анищенко');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('S-Антонюк', $this->object->splitFullName('Антонюк').'-Антонюк');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('S-Арсенич', $this->object->splitFullName('Арсенич').'-Арсенич');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('S-Артюх', $this->object->splitFullName('Артюх').'-Артюх');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('S-Атаманчук', $this->object->splitFullName('Атаманчук').'-Атаманчук');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('S-Біла', $this->object->splitFullName('Біла').'-Біла');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('S-Білас', $this->object->splitFullName('Білас').'-Білас');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('S-Білий', $this->object->splitFullName('Білий').'-Білий');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('S-Білодід', $this->object->splitFullName('Білодід').'-Білодід');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('S-Білоус', $this->object->splitFullName('Білоус').'-Білоус');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('S-Бабійчук', $this->object->splitFullName('Бабійчук').'-Бабійчук');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('S-Бабак', $this->object->splitFullName('Бабак').'-Бабак');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('S-Бабчук', $this->object->splitFullName('Бабчук').'-Бабчук');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('S-Багмут', $this->object->splitFullName('Багмут').'-Багмут');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('S-Багрій', $this->object->splitFullName('Багрій').'-Багрій');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('S-Бадлак', $this->object->splitFullName('Бадлак').'-Бадлак');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('S-Бажан', $this->object->splitFullName('Бажан').'-Бажан');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('S-Балтача', $this->object->splitFullName('Балтача').'-Балтача');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('S-Бандура', $this->object->splitFullName('Бандура').'-Бандура');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('S-Баран', $this->object->splitFullName('Баран').'-Баран');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('S-Баранець', $this->object->splitFullName('Баранець').'-Баранець');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('S-Барановський', $this->object->splitFullName('Барановський').'-Барановський');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('S-Баранюк', $this->object->splitFullName('Баранюк').'-Баранюк');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('S-Батюк', $this->object->splitFullName('Батюк').'-Батюк');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('S-Бачинський', $this->object->splitFullName('Бачинський').'-Бачинський');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('S-Бебешко', $this->object->splitFullName('Бебешко').'-Бебешко');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('S-Бевзенко', $this->object->splitFullName('Бевзенко').'-Бевзенко');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('S-Березовчук', $this->object->splitFullName('Березовчук').'-Березовчук');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('S-Божик', $this->object->splitFullName('Божик').'-Божик');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('S-Божко', $this->object->splitFullName('Божко').'-Божко');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('S-Бойко', $this->object->splitFullName('Бойко').'-Бойко');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('S-Бойцун', $this->object->splitFullName('Бойцун').'-Бойцун');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('S-Бойчак', $this->object->splitFullName('Бойчак').'-Бойчак');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('S-Бойчишин', $this->object->splitFullName('Бойчишин').'-Бойчишин');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('S-Бойчук', $this->object->splitFullName('Бойчук').'-Бойчук');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('S-Бондар', $this->object->splitFullName('Бондар').'-Бондар');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('S-Бондаренко', $this->object->splitFullName('Бондаренко').'-Бондаренко');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('S-Бондарчук', $this->object->splitFullName('Бондарчук').'-Бондарчук');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('S-Борисенко', $this->object->splitFullName('Борисенко').'-Борисенко');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('S-Борисикевич', $this->object->splitFullName('Борисикевич').'-Борисикевич');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('S-Братусь', $this->object->splitFullName('Братусь').'-Братусь');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('S-Букатевич', $this->object->splitFullName('Букатевич').'-Букатевич');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('S-Бурбан', $this->object->splitFullName('Бурбан').'-Бурбан');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('S-Бурячок', $this->object->splitFullName('Бурячок').'-Бурячок');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('S-Бутейко', $this->object->splitFullName('Бутейко').'-Бутейко');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('S-Бутенко', $this->object->splitFullName('Бутенко').'-Бутенко');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('S-Бутник', $this->object->splitFullName('Бутник').'-Бутник');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('S-Бухало', $this->object->splitFullName('Бухало').'-Бухало');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('S-Василашко', $this->object->splitFullName('Василашко').'-Василашко');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('S-Василенко', $this->object->splitFullName('Василенко').'-Василенко');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('S-Васильченко', $this->object->splitFullName('Васильченко').'-Васильченко');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('S-Васильчук', $this->object->splitFullName('Васильчук').'-Васильчук');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('S-Васкул', $this->object->splitFullName('Васкул').'-Васкул');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('S-Вахній', $this->object->splitFullName('Вахній').'-Вахній');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('S-Ващенко-Захарченко', $this->object->splitFullName('Ващенко-Захарченко').'-Ващенко-Захарченко');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('S-Вдовиченко', $this->object->splitFullName('Вдовиченко').'-Вдовиченко');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('S-Величко', $this->object->splitFullName('Величко').'-Величко');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('S-Вертипорох', $this->object->splitFullName('Вертипорох').'-Вертипорох');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('S-Верхола', $this->object->splitFullName('Верхола').'-Верхола');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('S-Винокур', $this->object->splitFullName('Винокур').'-Винокур');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('S-Влох', $this->object->splitFullName('Влох').'-Влох');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('S-Воблий', $this->object->splitFullName('Воблий').'-Воблий');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('S-Вовк', $this->object->splitFullName('Вовк').'-Вовк');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('S-Возняк', $this->object->splitFullName('Возняк').'-Возняк');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('S-Волох', $this->object->splitFullName('Волох').'-Волох');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('S-Волошин', $this->object->splitFullName('Волошин').'-Волошин');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('S-Волощук', $this->object->splitFullName('Волощук').'-Волощук');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('S-Вороновський', $this->object->splitFullName('Вороновський').'-Вороновський');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('S-Гаврилів', $this->object->splitFullName('Гаврилів').'-Гаврилів');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('S-Гавриленко', $this->object->splitFullName('Гавриленко').'-Гавриленко');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('S-Гаврилюк', $this->object->splitFullName('Гаврилюк').'-Гаврилюк');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('S-Гальченко', $this->object->splitFullName('Гальченко').'-Гальченко');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('S-Гамалія', $this->object->splitFullName('Гамалія').'-Гамалія');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('S-Ганицький', $this->object->splitFullName('Ганицький').'-Ганицький');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('S-Гарань', $this->object->splitFullName('Гарань').'-Гарань');
    }
    public function testSplDetect102()
    {
        $this->assertEquals('S-Гармаш', $this->object->splitFullName('Гармаш').'-Гармаш');
    }
    public function testSplDetect103()
    {
        $this->assertEquals('S-Гасай', $this->object->splitFullName('Гасай').'-Гасай');
    }
    public function testSplDetect104()
    {
        $this->assertEquals('S-Гасюк', $this->object->splitFullName('Гасюк').'-Гасюк');
    }
    public function testSplDetect105()
    {
        $this->assertEquals('S-Герасименко', $this->object->splitFullName('Герасименко').'-Герасименко');
    }
    public function testSplDetect106()
    {
        $this->assertEquals('S-Геращенко', $this->object->splitFullName('Геращенко').'-Геращенко');
    }
    public function testSplDetect107()
    {
        $this->assertEquals('S-Герцик', $this->object->splitFullName('Герцик').'-Герцик');
    }
    public function testSplDetect108()
    {
        $this->assertEquals('S-Гладченко', $this->object->splitFullName('Гладченко').'-Гладченко');
    }
    public function testSplDetect109()
    {
        $this->assertEquals('S-Глоба', $this->object->splitFullName('Глоба').'-Глоба');
    }
    public function testSplDetect110()
    {
        $this->assertEquals('S-Гнатюк', $this->object->splitFullName('Гнатюк').'-Гнатюк');
    }
    public function testSplDetect111()
    {
        $this->assertEquals('S-Гоголь', $this->object->splitFullName('Гоголь').'-Гоголь');
    }
    public function testSplDetect112()
    {
        $this->assertEquals('S-Годунок', $this->object->splitFullName('Годунок').'-Годунок');
    }
    public function testSplDetect113()
    {
        $this->assertEquals('S-Головатий', $this->object->splitFullName('Головатий').'-Головатий');
    }
    public function testSplDetect114()
    {
        $this->assertEquals('S-Головко', $this->object->splitFullName('Головко').'-Головко');
    }
    public function testSplDetect115()
    {
        $this->assertEquals('S-Голуб', $this->object->splitFullName('Голуб').'-Голуб');
    }
    public function testSplDetect116()
    {
        $this->assertEquals('S-Голубничий', $this->object->splitFullName('Голубничий').'-Голубничий');
    }
    public function testSplDetect117()
    {
        $this->assertEquals('S-Гонта', $this->object->splitFullName('Гонта').'-Гонта');
    }
    public function testSplDetect118()
    {
        $this->assertEquals('S-Гончар', $this->object->splitFullName('Гончар').'-Гончар');
    }
    public function testSplDetect119()
    {
        $this->assertEquals('S-Гончаренко', $this->object->splitFullName('Гончаренко').'-Гончаренко');
    }
    public function testSplDetect120()
    {
        $this->assertEquals('S-Гончаров', $this->object->splitFullName('Гончаров').'-Гончаров');
    }
    public function testSplDetect121()
    {
        $this->assertEquals('S-Горбаль', $this->object->splitFullName('Горбаль').'-Горбаль');
    }
    public function testSplDetect122()
    {
        $this->assertEquals('S-Гордієнко', $this->object->splitFullName('Гордієнко').'-Гордієнко');
    }
    public function testSplDetect123()
    {
        $this->assertEquals('S-Гошовський', $this->object->splitFullName('Гошовський').'-Гошовський');
    }
    public function testSplDetect124()
    {
        $this->assertEquals('S-Грінченко', $this->object->splitFullName('Грінченко').'-Грінченко');
    }
    public function testSplDetect125()
    {
        $this->assertEquals('S-Грабович', $this->object->splitFullName('Грабович').'-Грабович');
    }
    public function testSplDetect126()
    {
        $this->assertEquals('S-Грабовський', $this->object->splitFullName('Грабовський').'-Грабовський');
    }
    public function testSplDetect127()
    {
        $this->assertEquals('S-Григоренко', $this->object->splitFullName('Григоренко').'-Григоренко');
    }
    public function testSplDetect128()
    {
        $this->assertEquals('S-Григорович', $this->object->splitFullName('Григорович').'-Григорович');
    }
    public function testSplDetect129()
    {
        $this->assertEquals('S-Григорович-Барський', $this->object->splitFullName('Григорович-Барський').'-Григорович-Барський');
    }
    public function testSplDetect130()
    {
        $this->assertEquals('S-Григорчук', $this->object->splitFullName('Григорчук').'-Григорчук');
    }
    public function testSplDetect131()
    {
        $this->assertEquals('S-Грицак', $this->object->splitFullName('Грицак').'-Грицак');
    }
    public function testSplDetect132()
    {
        $this->assertEquals('S-Гриценко', $this->object->splitFullName('Гриценко').'-Гриценко');
    }
    public function testSplDetect133()
    {
        $this->assertEquals('S-Гришко', $this->object->splitFullName('Гришко').'-Гришко');
    }
    public function testSplDetect134()
    {
        $this->assertEquals('S-Гудзій', $this->object->splitFullName('Гудзій').'-Гудзій');
    }
    public function testSplDetect135()
    {
        $this->assertEquals('S-Гудзь', $this->object->splitFullName('Гудзь').'-Гудзь');
    }
    public function testSplDetect136()
    {
        $this->assertEquals('S-Гуменюк', $this->object->splitFullName('Гуменюк').'-Гуменюк');
    }
    public function testSplDetect137()
    {
        $this->assertEquals('S-Гунько', $this->object->splitFullName('Гунько').'-Гунько');
    }
    public function testSplDetect138()
    {
        $this->assertEquals('S-Діденко', $this->object->splitFullName('Діденко').'-Діденко');
    }
    public function testSplDetect139()
    {
        $this->assertEquals('S-Даниленко', $this->object->splitFullName('Даниленко').'-Даниленко');
    }
    public function testSplDetect140()
    {
        $this->assertEquals('S-Даньків', $this->object->splitFullName('Даньків').'-Даньків');
    }
    public function testSplDetect141()
    {
        $this->assertEquals('S-Данькевич', $this->object->splitFullName('Данькевич').'-Данькевич');
    }
    public function testSplDetect142()
    {
        $this->assertEquals('S-Дараган', $this->object->splitFullName('Дараган').'-Дараган');
    }
    public function testSplDetect143()
    {
        $this->assertEquals('S-Дашкевич', $this->object->splitFullName('Дашкевич').'-Дашкевич');
    }
    public function testSplDetect144()
    {
        $this->assertEquals('S-Денисенко', $this->object->splitFullName('Денисенко').'-Денисенко');
    }
    public function testSplDetect145()
    {
        $this->assertEquals('S-Джус', $this->object->splitFullName('Джус').'-Джус');
    }
    public function testSplDetect146()
    {
        $this->assertEquals('S-Дзюба', $this->object->splitFullName('Дзюба').'-Дзюба');
    }
    public function testSplDetect147()
    {
        $this->assertEquals('S-Дикань', $this->object->splitFullName('Дикань').'-Дикань');
    }
    public function testSplDetect148()
    {
        $this->assertEquals('S-Дмитерко', $this->object->splitFullName('Дмитерко').'-Дмитерко');
    }
    public function testSplDetect149()
    {
        $this->assertEquals('S-Довженко', $this->object->splitFullName('Довженко').'-Довженко');
    }
    public function testSplDetect150()
    {
        $this->assertEquals('S-Дорош', $this->object->splitFullName('Дорош').'-Дорош');
    }
    public function testSplDetect151()
    {
        $this->assertEquals('S-Дорошенко', $this->object->splitFullName('Дорошенко').'-Дорошенко');
    }
    public function testSplDetect152()
    {
        $this->assertEquals('S-Доценко', $this->object->splitFullName('Доценко').'-Доценко');
    }
    public function testSplDetect153()
    {
        $this->assertEquals('S-Дочинець', $this->object->splitFullName('Дочинець').'-Дочинець');
    }
    public function testSplDetect154()
    {
        $this->assertEquals('S-Дудко', $this->object->splitFullName('Дудко').'-Дудко');
    }
    public function testSplDetect155()
    {
        $this->assertEquals('S-Дяків', $this->object->splitFullName('Дяків').'-Дяків');
    }
    public function testSplDetect156()
    {
        $this->assertEquals('S-Дяченко', $this->object->splitFullName('Дяченко').'-Дяченко');
    }
    public function testSplDetect157()
    {
        $this->assertEquals('S-Ейбоженко', $this->object->splitFullName('Ейбоженко').'-Ейбоженко');
    }
    public function testSplDetect158()
    {
        $this->assertEquals('S-Жайворон', $this->object->splitFullName('Жайворон').'-Жайворон');
    }
    public function testSplDetect159()
    {
        $this->assertEquals('S-Жаліло', $this->object->splitFullName('Жаліло').'-Жаліло');
    }
    public function testSplDetect160()
    {
        $this->assertEquals('S-Жежерін', $this->object->splitFullName('Жежерін').'-Жежерін');
    }
    public function testSplDetect161()
    {
        $this->assertEquals('S-Желєзняк', $this->object->splitFullName('Желєзняк').'-Желєзняк');
    }
    public function testSplDetect162()
    {
        $this->assertEquals('S-Железняк', $this->object->splitFullName('Железняк').'-Железняк');
    }
    public function testSplDetect163()
    {
        $this->assertEquals('S-Жилко', $this->object->splitFullName('Жилко').'-Жилко');
    }
    public function testSplDetect164()
    {
        $this->assertEquals('S-Жирко', $this->object->splitFullName('Жирко').'-Жирко');
    }
    public function testSplDetect165()
    {
        $this->assertEquals('S-Жук', $this->object->splitFullName('Жук').'-Жук');
    }
    public function testSplDetect166()
    {
        $this->assertEquals('S-Жупанський', $this->object->splitFullName('Жупанський').'-Жупанський');
    }
    public function testSplDetect167()
    {
        $this->assertEquals('S-Заєць', $this->object->splitFullName('Заєць').'-Заєць');
    }
    public function testSplDetect168()
    {
        $this->assertEquals('S-Забашта', $this->object->splitFullName('Забашта').'-Забашта');
    }
    public function testSplDetect169()
    {
        $this->assertEquals('S-Заболотний', $this->object->splitFullName('Заболотний').'-Заболотний');
    }
    public function testSplDetect170()
    {
        $this->assertEquals('S-Завальнюк', $this->object->splitFullName('Завальнюк').'-Завальнюк');
    }
    public function testSplDetect171()
    {
        $this->assertEquals('S-Закусило', $this->object->splitFullName('Закусило').'-Закусило');
    }
    public function testSplDetect172()
    {
        $this->assertEquals('S-Залізняк', $this->object->splitFullName('Залізняк').'-Залізняк');
    }
    public function testSplDetect173()
    {
        $this->assertEquals('S-Заруба', $this->object->splitFullName('Заруба').'-Заруба');
    }
    public function testSplDetect174()
    {
        $this->assertEquals('S-Засядько', $this->object->splitFullName('Засядько').'-Засядько');
    }
    public function testSplDetect175()
    {
        $this->assertEquals('S-Захаренко', $this->object->splitFullName('Захаренко').'-Захаренко');
    }
    public function testSplDetect176()
    {
        $this->assertEquals('S-Захарчук', $this->object->splitFullName('Захарчук').'-Захарчук');
    }
    public function testSplDetect177()
    {
        $this->assertEquals('S-Заяць', $this->object->splitFullName('Заяць').'-Заяць');
    }
    public function testSplDetect178()
    {
        $this->assertEquals('S-Заячківський', $this->object->splitFullName('Заячківський').'-Заячківський');
    }
    public function testSplDetect179()
    {
        $this->assertEquals('S-Зленко', $this->object->splitFullName('Зленко').'-Зленко');
    }
    public function testSplDetect180()
    {
        $this->assertEquals('S-Золотаренко', $this->object->splitFullName('Золотаренко').'-Золотаренко');
    }
    public function testSplDetect181()
    {
        $this->assertEquals('S-Кабачок', $this->object->splitFullName('Кабачок').'-Кабачок');
    }
    public function testSplDetect182()
    {
        $this->assertEquals('S-Каганець', $this->object->splitFullName('Каганець').'-Каганець');
    }
    public function testSplDetect183()
    {
        $this->assertEquals('S-Калинович', $this->object->splitFullName('Калинович').'-Калинович');
    }
    public function testSplDetect184()
    {
        $this->assertEquals('S-Кармалюк', $this->object->splitFullName('Кармалюк').'-Кармалюк');
    }
    public function testSplDetect185()
    {
        $this->assertEquals('S-Карпенко', $this->object->splitFullName('Карпенко').'-Карпенко');
    }
    public function testSplDetect186()
    {
        $this->assertEquals('S-Кириленко', $this->object->splitFullName('Кириленко').'-Кириленко');
    }
    public function testSplDetect187()
    {
        $this->assertEquals('S-Китастий', $this->object->splitFullName('Китастий').'-Китастий');
    }
    public function testSplDetect188()
    {
        $this->assertEquals('S-Кицай', $this->object->splitFullName('Кицай').'-Кицай');
    }
    public function testSplDetect189()
    {
        $this->assertEquals('S-Клименко', $this->object->splitFullName('Клименко').'-Клименко');
    }
    public function testSplDetect190()
    {
        $this->assertEquals('S-Климчук', $this->object->splitFullName('Климчук').'-Климчук');
    }
    public function testSplDetect191()
    {
        $this->assertEquals('S-Кмета', $this->object->splitFullName('Кмета').'-Кмета');
    }
    public function testSplDetect192()
    {
        $this->assertEquals('S-Книш', $this->object->splitFullName('Книш').'-Книш');
    }
    public function testSplDetect193()
    {
        $this->assertEquals('S-Ковалів', $this->object->splitFullName('Ковалів').'-Ковалів');
    }
    public function testSplDetect194()
    {
        $this->assertEquals('S-Коваленко', $this->object->splitFullName('Коваленко').'-Коваленко');
    }
    public function testSplDetect195()
    {
        $this->assertEquals('S-Коваль', $this->object->splitFullName('Коваль').'-Коваль');
    }
    public function testSplDetect196()
    {
        $this->assertEquals('S-Ковальчик', $this->object->splitFullName('Ковальчик').'-Ковальчик');
    }
    public function testSplDetect197()
    {
        $this->assertEquals('S-Ковальчук', $this->object->splitFullName('Ковальчук').'-Ковальчук');
    }
    public function testSplDetect198()
    {
        $this->assertEquals('S-Кованько', $this->object->splitFullName('Кованько').'-Кованько');
    }
    public function testSplDetect199()
    {
        $this->assertEquals('S-Ковтун', $this->object->splitFullName('Ковтун').'-Ковтун');
    }
    public function testSplDetect200()
    {
        $this->assertEquals('S-Козаченко', $this->object->splitFullName('Козаченко').'-Козаченко');
    }
    public function testSplDetect201()
    {
        $this->assertEquals('S-Козачинський', $this->object->splitFullName('Козачинський').'-Козачинський');
    }
    public function testSplDetect202()
    {
        $this->assertEquals('S-Козачок', $this->object->splitFullName('Козачок').'-Козачок');
    }
    public function testSplDetect203()
    {
        $this->assertEquals('S-Козубенко', $this->object->splitFullName('Козубенко').'-Козубенко');
    }
    public function testSplDetect204()
    {
        $this->assertEquals('S-Колесник', $this->object->splitFullName('Колесник').'-Колесник');
    }
    public function testSplDetect205()
    {
        $this->assertEquals('S-Колодій', $this->object->splitFullName('Колодій').'-Колодій');
    }
    public function testSplDetect206()
    {
        $this->assertEquals('S-Колодний', $this->object->splitFullName('Колодний').'-Колодний');
    }
    public function testSplDetect207()
    {
        $this->assertEquals('S-Коломієць', $this->object->splitFullName('Коломієць').'-Коломієць');
    }
    public function testSplDetect208()
    {
        $this->assertEquals('S-Комар', $this->object->splitFullName('Комар').'-Комар');
    }
    public function testSplDetect209()
    {
        $this->assertEquals('S-Кондратюк', $this->object->splitFullName('Кондратюк').'-Кондратюк');
    }
    public function testSplDetect210()
    {
        $this->assertEquals('S-Корецький', $this->object->splitFullName('Корецький').'-Корецький');
    }
    public function testSplDetect211()
    {
        $this->assertEquals('S-Корж', $this->object->splitFullName('Корж').'-Корж');
    }
    public function testSplDetect212()
    {
        $this->assertEquals('S-Корнійчук', $this->object->splitFullName('Корнійчук').'-Корнійчук');
    }
    public function testSplDetect213()
    {
        $this->assertEquals('S-Коробка', $this->object->splitFullName('Коробка').'-Коробка');
    }
    public function testSplDetect214()
    {
        $this->assertEquals('S-Королюк', $this->object->splitFullName('Королюк').'-Королюк');
    }
    public function testSplDetect215()
    {
        $this->assertEquals('S-Короткевич', $this->object->splitFullName('Короткевич').'-Короткевич');
    }
    public function testSplDetect216()
    {
        $this->assertEquals('S-Корпанюк', $this->object->splitFullName('Корпанюк').'-Корпанюк');
    }
    public function testSplDetect217()
    {
        $this->assertEquals('S-Корчак', $this->object->splitFullName('Корчак').'-Корчак');
    }
    public function testSplDetect218()
    {
        $this->assertEquals('S-Корчинський', $this->object->splitFullName('Корчинський').'-Корчинський');
    }
    public function testSplDetect219()
    {
        $this->assertEquals('S-Косенко', $this->object->splitFullName('Косенко').'-Косенко');
    }
    public function testSplDetect220()
    {
        $this->assertEquals('S-Костенко', $this->object->splitFullName('Костенко').'-Костенко');
    }
    public function testSplDetect221()
    {
        $this->assertEquals('S-Коструба', $this->object->splitFullName('Коструба').'-Коструба');
    }
    public function testSplDetect222()
    {
        $this->assertEquals('S-Костюк', $this->object->splitFullName('Костюк').'-Костюк');
    }
    public function testSplDetect223()
    {
        $this->assertEquals('S-Котляр', $this->object->splitFullName('Котляр').'-Котляр');
    }
    public function testSplDetect224()
    {
        $this->assertEquals('S-Котляревський', $this->object->splitFullName('Котляревський').'-Котляревський');
    }
    public function testSplDetect225()
    {
        $this->assertEquals('S-Кравців', $this->object->splitFullName('Кравців').'-Кравців');
    }
    public function testSplDetect226()
    {
        $this->assertEquals('S-Кравченко', $this->object->splitFullName('Кравченко').'-Кравченко');
    }
    public function testSplDetect227()
    {
        $this->assertEquals('S-Кравчук', $this->object->splitFullName('Кравчук').'-Кравчук');
    }
    public function testSplDetect228()
    {
        $this->assertEquals('S-Красовський', $this->object->splitFullName('Красовський').'-Красовський');
    }
    public function testSplDetect229()
    {
        $this->assertEquals('S-Криворучко', $this->object->splitFullName('Криворучко').'-Криворучко');
    }
    public function testSplDetect230()
    {
        $this->assertEquals('S-Крикуненко', $this->object->splitFullName('Крикуненко').'-Крикуненко');
    }
    public function testSplDetect231()
    {
        $this->assertEquals('S-Кузьмінський', $this->object->splitFullName('Кузьмінський').'-Кузьмінський');
    }
    public function testSplDetect232()
    {
        $this->assertEquals('S-Кулиняк', $this->object->splitFullName('Кулиняк').'-Кулиняк');
    }
    public function testSplDetect233()
    {
        $this->assertEquals('S-Кульчицький', $this->object->splitFullName('Кульчицький').'-Кульчицький');
    }
    public function testSplDetect234()
    {
        $this->assertEquals('S-Купчинський', $this->object->splitFullName('Купчинський').'-Купчинський');
    }
    public function testSplDetect235()
    {
        $this->assertEquals('S-Кухаренко', $this->object->splitFullName('Кухаренко').'-Кухаренко');
    }
    public function testSplDetect236()
    {
        $this->assertEquals('S-Куц', $this->object->splitFullName('Куц').'-Куц');
    }
    public function testSplDetect237()
    {
        $this->assertEquals('S-Куценко', $this->object->splitFullName('Куценко').'-Куценко');
    }
    public function testSplDetect238()
    {
        $this->assertEquals('S-Кучер', $this->object->splitFullName('Кучер').'-Кучер');
    }
    public function testSplDetect239()
    {
        $this->assertEquals('S-Кучеренко', $this->object->splitFullName('Кучеренко').'-Кучеренко');
    }
    public function testSplDetect240()
    {
        $this->assertEquals('S-Кушнір', $this->object->splitFullName('Кушнір').'-Кушнір');
    }
    public function testSplDetect241()
    {
        $this->assertEquals('S-Лаба', $this->object->splitFullName('Лаба').'-Лаба');
    }
    public function testSplDetect242()
    {
        $this->assertEquals('S-Лаврін', $this->object->splitFullName('Лаврін').'-Лаврін');
    }
    public function testSplDetect243()
    {
        $this->assertEquals('S-Лаврик', $this->object->splitFullName('Лаврик').'-Лаврик');
    }
    public function testSplDetect244()
    {
        $this->assertEquals('S-Лавриненко', $this->object->splitFullName('Лавриненко').'-Лавриненко');
    }
    public function testSplDetect245()
    {
        $this->assertEquals('S-Лазарчук', $this->object->splitFullName('Лазарчук').'-Лазарчук');
    }
    public function testSplDetect246()
    {
        $this->assertEquals('S-Лазорко', $this->object->splitFullName('Лазорко').'-Лазорко');
    }
    public function testSplDetect247()
    {
        $this->assertEquals('S-Левицький', $this->object->splitFullName('Левицький').'-Левицький');
    }
    public function testSplDetect248()
    {
        $this->assertEquals('S-Левченко', $this->object->splitFullName('Левченко').'-Левченко');
    }
    public function testSplDetect249()
    {
        $this->assertEquals('S-Лесів', $this->object->splitFullName('Лесів').'-Лесів');
    }
    public function testSplDetect250()
    {
        $this->assertEquals('S-Лисенко', $this->object->splitFullName('Лисенко').'-Лисенко');
    }
    public function testSplDetect251()
    {
        $this->assertEquals('S-Литвин', $this->object->splitFullName('Литвин').'-Литвин');
    }
    public function testSplDetect252()
    {
        $this->assertEquals('S-Литвиненко', $this->object->splitFullName('Литвиненко').'-Литвиненко');
    }
    public function testSplDetect253()
    {
        $this->assertEquals('S-Литвинов', $this->object->splitFullName('Литвинов').'-Литвинов');
    }
    public function testSplDetect254()
    {
        $this->assertEquals('S-Литовченко', $this->object->splitFullName('Литовченко').'-Литовченко');
    }
    public function testSplDetect255()
    {
        $this->assertEquals('S-Лозина-Лозинський', $this->object->splitFullName('Лозина-Лозинський').'-Лозина-Лозинський');
    }
    public function testSplDetect256()
    {
        $this->assertEquals('S-Лопатинський', $this->object->splitFullName('Лопатинський').'-Лопатинський');
    }
    public function testSplDetect257()
    {
        $this->assertEquals('S-Лукомський', $this->object->splitFullName('Лукомський').'-Лукомський');
    }
    public function testSplDetect258()
    {
        $this->assertEquals('S-Луценко', $this->object->splitFullName('Луценко').'-Луценко');
    }
    public function testSplDetect259()
    {
        $this->assertEquals('S-Людкевич', $this->object->splitFullName('Людкевич').'-Людкевич');
    }
    public function testSplDetect260()
    {
        $this->assertEquals('S-Ляшенко', $this->object->splitFullName('Ляшенко').'-Ляшенко');
    }
    public function testSplDetect261()
    {
        $this->assertEquals('S-Мірошниченко', $this->object->splitFullName('Мірошниченко').'-Мірошниченко');
    }
    public function testSplDetect262()
    {
        $this->assertEquals('S-Мірчук', $this->object->splitFullName('Мірчук').'-Мірчук');
    }
    public function testSplDetect263()
    {
        $this->assertEquals('S-Міщенко', $this->object->splitFullName('Міщенко').'-Міщенко');
    }
    public function testSplDetect264()
    {
        $this->assertEquals('S-Мазур', $this->object->splitFullName('Мазур').'-Мазур');
    }
    public function testSplDetect265()
    {
        $this->assertEquals('S-Макаренко', $this->object->splitFullName('Макаренко').'-Макаренко');
    }
    public function testSplDetect266()
    {
        $this->assertEquals('S-Максименко', $this->object->splitFullName('Максименко').'-Максименко');
    }
    public function testSplDetect267()
    {
        $this->assertEquals('S-Маланчук', $this->object->splitFullName('Маланчук').'-Маланчук');
    }
    public function testSplDetect268()
    {
        $this->assertEquals('S-Малишко', $this->object->splitFullName('Малишко').'-Малишко');
    }
    public function testSplDetect269()
    {
        $this->assertEquals('S-Малкович', $this->object->splitFullName('Малкович').'-Малкович');
    }
    public function testSplDetect270()
    {
        $this->assertEquals('S-Мамчур', $this->object->splitFullName('Мамчур').'-Мамчур');
    }
    public function testSplDetect271()
    {
        $this->assertEquals('S-Маркевич', $this->object->splitFullName('Маркевич').'-Маркевич');
    }
    public function testSplDetect272()
    {
        $this->assertEquals('S-Мартиненко', $this->object->splitFullName('Мартиненко').'-Мартиненко');
    }
    public function testSplDetect273()
    {
        $this->assertEquals('S-Марунчак', $this->object->splitFullName('Марунчак').'-Марунчак');
    }
    public function testSplDetect274()
    {
        $this->assertEquals('S-Марценюк', $this->object->splitFullName('Марценюк').'-Марценюк');
    }
    public function testSplDetect275()
    {
        $this->assertEquals('S-Марченко', $this->object->splitFullName('Марченко').'-Марченко');
    }
    public function testSplDetect276()
    {
        $this->assertEquals('S-Марчук', $this->object->splitFullName('Марчук').'-Марчук');
    }
    public function testSplDetect277()
    {
        $this->assertEquals('S-Масоха', $this->object->splitFullName('Масоха').'-Масоха');
    }
    public function testSplDetect278()
    {
        $this->assertEquals('S-Матвієнко', $this->object->splitFullName('Матвієнко').'-Матвієнко');
    }
    public function testSplDetect279()
    {
        $this->assertEquals('S-Матюшенко', $this->object->splitFullName('Матюшенко').'-Матюшенко');
    }
    public function testSplDetect280()
    {
        $this->assertEquals('S-Маценко', $this->object->splitFullName('Маценко').'-Маценко');
    }
    public function testSplDetect281()
    {
        $this->assertEquals('S-Мацюк', $this->object->splitFullName('Мацюк').'-Мацюк');
    }
    public function testSplDetect282()
    {
        $this->assertEquals('S-Мельник', $this->object->splitFullName('Мельник').'-Мельник');
    }
    public function testSplDetect283()
    {
        $this->assertEquals('S-Мельниченко', $this->object->splitFullName('Мельниченко').'-Мельниченко');
    }
    public function testSplDetect284()
    {
        $this->assertEquals('S-Мельничук', $this->object->splitFullName('Мельничук').'-Мельничук');
    }
    public function testSplDetect285()
    {
        $this->assertEquals('S-Микитенко', $this->object->splitFullName('Микитенко').'-Микитенко');
    }
    public function testSplDetect286()
    {
        $this->assertEquals('S-Микитин', $this->object->splitFullName('Микитин').'-Микитин');
    }
    public function testSplDetect287()
    {
        $this->assertEquals('S-Мирон', $this->object->splitFullName('Мирон').'-Мирон');
    }
    public function testSplDetect288()
    {
        $this->assertEquals('S-Михайленко', $this->object->splitFullName('Михайленко').'-Михайленко');
    }
    public function testSplDetect289()
    {
        $this->assertEquals('S-Михайличенко', $this->object->splitFullName('Михайличенко').'-Михайличенко');
    }
    public function testSplDetect290()
    {
        $this->assertEquals('S-Михайлюк', $this->object->splitFullName('Михайлюк').'-Михайлюк');
    }
    public function testSplDetect291()
    {
        $this->assertEquals('S-Мицик', $this->object->splitFullName('Мицик').'-Мицик');
    }
    public function testSplDetect292()
    {
        $this->assertEquals('S-Мовчан', $this->object->splitFullName('Мовчан').'-Мовчан');
    }
    public function testSplDetect293()
    {
        $this->assertEquals('S-Моргун', $this->object->splitFullName('Моргун').'-Моргун');
    }
    public function testSplDetect294()
    {
        $this->assertEquals('S-Мороз', $this->object->splitFullName('Мороз').'-Мороз');
    }
    public function testSplDetect295()
    {
        $this->assertEquals('S-Москаленко', $this->object->splitFullName('Москаленко').'-Москаленко');
    }
    public function testSplDetect296()
    {
        $this->assertEquals('S-Москаль', $this->object->splitFullName('Москаль').'-Москаль');
    }
    public function testSplDetect297()
    {
        $this->assertEquals('S-Мошак', $this->object->splitFullName('Мошак').'-Мошак');
    }
    public function testSplDetect298()
    {
        $this->assertEquals('S-Муратова', $this->object->splitFullName('Муратова').'-Муратова');
    }
    public function testSplDetect299()
    {
        $this->assertEquals('S-Мусієнко', $this->object->splitFullName('Мусієнко').'-Мусієнко');
    }
    public function testSplDetect300()
    {
        $this->assertEquals('S-Назаренко', $this->object->splitFullName('Назаренко').'-Назаренко');
    }
    public function testSplDetect301()
    {
        $this->assertEquals('S-Наливайко', $this->object->splitFullName('Наливайко').'-Наливайко');
    }
    public function testSplDetect302()
    {
        $this->assertEquals('S-Негребецький', $this->object->splitFullName('Негребецький').'-Негребецький');
    }
    public function testSplDetect303()
    {
        $this->assertEquals('S-Непорожній', $this->object->splitFullName('Непорожній').'-Непорожній');
    }
    public function testSplDetect304()
    {
        $this->assertEquals('S-Нестеренко', $this->object->splitFullName('Нестеренко').'-Нестеренко');
    }
    public function testSplDetect305()
    {
        $this->assertEquals('S-Нечай', $this->object->splitFullName('Нечай').'-Нечай');
    }
    public function testSplDetect306()
    {
        $this->assertEquals('S-Нечипоренко', $this->object->splitFullName('Нечипоренко').'-Нечипоренко');
    }
    public function testSplDetect307()
    {
        $this->assertEquals('S-Оберемченко', $this->object->splitFullName('Оберемченко').'-Оберемченко');
    }
    public function testSplDetect308()
    {
        $this->assertEquals('S-Овчаренко', $this->object->splitFullName('Овчаренко').'-Овчаренко');
    }
    public function testSplDetect309()
    {
        $this->assertEquals('S-Олійник', $this->object->splitFullName('Олійник').'-Олійник');
    }
    public function testSplDetect310()
    {
        $this->assertEquals('S-Олексієнко', $this->object->splitFullName('Олексієнко').'-Олексієнко');
    }
    public function testSplDetect311()
    {
        $this->assertEquals('S-Омельченко', $this->object->splitFullName('Омельченко').'-Омельченко');
    }
    public function testSplDetect312()
    {
        $this->assertEquals('S-Омельчук', $this->object->splitFullName('Омельчук').'-Омельчук');
    }
    public function testSplDetect313()
    {
        $this->assertEquals('S-Онищенко', $this->object->splitFullName('Онищенко').'-Онищенко');
    }
    public function testSplDetect314()
    {
        $this->assertEquals('S-Онопенко', $this->object->splitFullName('Онопенко').'-Онопенко');
    }
    public function testSplDetect315()
    {
        $this->assertEquals('S-Опанасенко', $this->object->splitFullName('Опанасенко').'-Опанасенко');
    }
    public function testSplDetect316()
    {
        $this->assertEquals('S-Осадчук', $this->object->splitFullName('Осадчук').'-Осадчук');
    }
    public function testSplDetect317()
    {
        $this->assertEquals('S-Осика', $this->object->splitFullName('Осика').'-Осика');
    }
    public function testSplDetect318()
    {
        $this->assertEquals('S-Остапенко', $this->object->splitFullName('Остапенко').'-Остапенко');
    }
    public function testSplDetect319()
    {
        $this->assertEquals('S-Остроградський', $this->object->splitFullName('Остроградський').'-Остроградський');
    }
    public function testSplDetect320()
    {
        $this->assertEquals('S-Півторак', $this->object->splitFullName('Півторак').'-Півторак');
    }
    public function testSplDetect321()
    {
        $this->assertEquals('S-Підопригора', $this->object->splitFullName('Підопригора').'-Підопригора');
    }
    public function testSplDetect322()
    {
        $this->assertEquals('S-Павленко', $this->object->splitFullName('Павленко').'-Павленко');
    }
    public function testSplDetect323()
    {
        $this->assertEquals('S-Павлюк', $this->object->splitFullName('Павлюк').'-Павлюк');
    }
    public function testSplDetect324()
    {
        $this->assertEquals('S-Павлюченко', $this->object->splitFullName('Павлюченко').'-Павлюченко');
    }
    public function testSplDetect325()
    {
        $this->assertEquals('S-Пазенко', $this->object->splitFullName('Пазенко').'-Пазенко');
    }
    public function testSplDetect326()
    {
        $this->assertEquals('S-Паламарчук', $this->object->splitFullName('Паламарчук').'-Паламарчук');
    }
    public function testSplDetect327()
    {
        $this->assertEquals('S-Панас', $this->object->splitFullName('Панас').'-Панас');
    }
    public function testSplDetect328()
    {
        $this->assertEquals('S-Панасюк', $this->object->splitFullName('Панасюк').'-Панасюк');
    }
    public function testSplDetect329()
    {
        $this->assertEquals('S-Паньківський', $this->object->splitFullName('Паньківський').'-Паньківський');
    }
    public function testSplDetect330()
    {
        $this->assertEquals('S-Пархоменко', $this->object->splitFullName('Пархоменко').'-Пархоменко');
    }
    public function testSplDetect331()
    {
        $this->assertEquals('S-Пасічник', $this->object->splitFullName('Пасічник').'-Пасічник');
    }
    public function testSplDetect332()
    {
        $this->assertEquals('S-Пасько', $this->object->splitFullName('Пасько').'-Пасько');
    }
    public function testSplDetect333()
    {
        $this->assertEquals('S-Пашко', $this->object->splitFullName('Пашко').'-Пашко');
    }
    public function testSplDetect334()
    {
        $this->assertEquals('S-Пащенко', $this->object->splitFullName('Пащенко').'-Пащенко');
    }
    public function testSplDetect335()
    {
        $this->assertEquals('S-Перебийніс', $this->object->splitFullName('Перебийніс').'-Перебийніс');
    }
    public function testSplDetect336()
    {
        $this->assertEquals('S-Петренко', $this->object->splitFullName('Петренко').'-Петренко');
    }
    public function testSplDetect337()
    {
        $this->assertEquals('S-Пилипенко', $this->object->splitFullName('Пилипенко').'-Пилипенко');
    }
    public function testSplDetect338()
    {
        $this->assertEquals('S-Пилипишин', $this->object->splitFullName('Пилипишин').'-Пилипишин');
    }
    public function testSplDetect339()
    {
        $this->assertEquals('S-Пилипчук', $this->object->splitFullName('Пилипчук').'-Пилипчук');
    }
    public function testSplDetect340()
    {
        $this->assertEquals('S-Писаренко', $this->object->splitFullName('Писаренко').'-Писаренко');
    }
    public function testSplDetect341()
    {
        $this->assertEquals('S-Писарчук', $this->object->splitFullName('Писарчук').'-Писарчук');
    }
    public function testSplDetect342()
    {
        $this->assertEquals('S-Плющ', $this->object->splitFullName('Плющ').'-Плющ');
    }
    public function testSplDetect343()
    {
        $this->assertEquals('S-Покотило', $this->object->splitFullName('Покотило').'-Покотило');
    }
    public function testSplDetect344()
    {
        $this->assertEquals('S-Поліщук', $this->object->splitFullName('Поліщук').'-Поліщук');
    }
    public function testSplDetect345()
    {
        $this->assertEquals('S-Польовий', $this->object->splitFullName('Польовий').'-Польовий');
    }
    public function testSplDetect346()
    {
        $this->assertEquals('S-Полянський', $this->object->splitFullName('Полянський').'-Полянський');
    }
    public function testSplDetect347()
    {
        $this->assertEquals('S-Пономаренко', $this->object->splitFullName('Пономаренко').'-Пономаренко');
    }
    public function testSplDetect348()
    {
        $this->assertEquals('S-Пономарьов', $this->object->splitFullName('Пономарьов').'-Пономарьов');
    }
    public function testSplDetect349()
    {
        $this->assertEquals('S-Попадюк', $this->object->splitFullName('Попадюк').'-Попадюк');
    }
    public function testSplDetect350()
    {
        $this->assertEquals('S-Попенко', $this->object->splitFullName('Попенко').'-Попенко');
    }
    public function testSplDetect351()
    {
        $this->assertEquals('S-Потапенко', $this->object->splitFullName('Потапенко').'-Потапенко');
    }
    public function testSplDetect352()
    {
        $this->assertEquals('S-Потебенько', $this->object->splitFullName('Потебенько').'-Потебенько');
    }
    public function testSplDetect353()
    {
        $this->assertEquals('S-Прийма', $this->object->splitFullName('Прийма').'-Прийма');
    }
    public function testSplDetect354()
    {
        $this->assertEquals('S-Приймак', $this->object->splitFullName('Приймак').'-Приймак');
    }
    public function testSplDetect355()
    {
        $this->assertEquals('S-Присяжнюк', $this->object->splitFullName('Присяжнюк').'-Присяжнюк');
    }
    public function testSplDetect356()
    {
        $this->assertEquals('S-Приходько', $this->object->splitFullName('Приходько').'-Приходько');
    }
    public function testSplDetect357()
    {
        $this->assertEquals('S-Продан', $this->object->splitFullName('Продан').'-Продан');
    }
    public function testSplDetect358()
    {
        $this->assertEquals('S-Проценко', $this->object->splitFullName('Проценко').'-Проценко');
    }
    public function testSplDetect359()
    {
        $this->assertEquals('S-Проць', $this->object->splitFullName('Проць').'-Проць');
    }
    public function testSplDetect360()
    {
        $this->assertEquals('S-Процюк', $this->object->splitFullName('Процюк').'-Процюк');
    }
    public function testSplDetect361()
    {
        $this->assertEquals('S-Пушкар', $this->object->splitFullName('Пушкар').'-Пушкар');
    }
    public function testSplDetect362()
    {
        $this->assertEquals('S-Різун', $this->object->splitFullName('Різун').'-Різун');
    }
    public function testSplDetect363()
    {
        $this->assertEquals('S-Радченко', $this->object->splitFullName('Радченко').'-Радченко');
    }
    public function testSplDetect364()
    {
        $this->assertEquals('S-Рибальченко', $this->object->splitFullName('Рибальченко').'-Рибальченко');
    }
    public function testSplDetect365()
    {
        $this->assertEquals('S-Римар', $this->object->splitFullName('Римар').'-Римар');
    }
    public function testSplDetect366()
    {
        $this->assertEquals('S-Рожок', $this->object->splitFullName('Рожок').'-Рожок');
    }
    public function testSplDetect367()
    {
        $this->assertEquals('S-Романенко', $this->object->splitFullName('Романенко').'-Романенко');
    }
    public function testSplDetect368()
    {
        $this->assertEquals('S-Романишин', $this->object->splitFullName('Романишин').'-Романишин');
    }
    public function testSplDetect369()
    {
        $this->assertEquals('S-Романчук', $this->object->splitFullName('Романчук').'-Романчук');
    }
    public function testSplDetect370()
    {
        $this->assertEquals('S-Романюк', $this->object->splitFullName('Романюк').'-Романюк');
    }
    public function testSplDetect371()
    {
        $this->assertEquals('S-Рошкевич', $this->object->splitFullName('Рошкевич').'-Рошкевич');
    }
    public function testSplDetect372()
    {
        $this->assertEquals('S-Рубан', $this->object->splitFullName('Рубан').'-Рубан');
    }
    public function testSplDetect373()
    {
        $this->assertEquals('S-Руденко', $this->object->splitFullName('Руденко').'-Руденко');
    }
    public function testSplDetect374()
    {
        $this->assertEquals('S-Рябовіл', $this->object->splitFullName('Рябовіл').'-Рябовіл');
    }
    public function testSplDetect375()
    {
        $this->assertEquals('S-Сімашкевич', $this->object->splitFullName('Сімашкевич').'-Сімашкевич');
    }
    public function testSplDetect376()
    {
        $this->assertEquals('S-Саєнко', $this->object->splitFullName('Саєнко').'-Саєнко');
    }
    public function testSplDetect377()
    {
        $this->assertEquals('S-Савенко', $this->object->splitFullName('Савенко').'-Савенко');
    }
    public function testSplDetect378()
    {
        $this->assertEquals('S-Савицька', $this->object->splitFullName('Савицька').'-Савицька');
    }
    public function testSplDetect379()
    {
        $this->assertEquals('S-Савка', $this->object->splitFullName('Савка').'-Савка');
    }
    public function testSplDetect380()
    {
        $this->assertEquals('S-Савченко', $this->object->splitFullName('Савченко').'-Савченко');
    }
    public function testSplDetect381()
    {
        $this->assertEquals('S-Савчук', $this->object->splitFullName('Савчук').'-Савчук');
    }
    public function testSplDetect382()
    {
        $this->assertEquals('S-Сак', $this->object->splitFullName('Сак').'-Сак');
    }
    public function testSplDetect383()
    {
        $this->assertEquals('S-Самборський', $this->object->splitFullName('Самборський').'-Самборський');
    }
    public function testSplDetect384()
    {
        $this->assertEquals('S-Самойлович', $this->object->splitFullName('Самойлович').'-Самойлович');
    }
    public function testSplDetect385()
    {
        $this->assertEquals('S-Самусь', $this->object->splitFullName('Самусь').'-Самусь');
    }
    public function testSplDetect386()
    {
        $this->assertEquals('S-Свида', $this->object->splitFullName('Свида').'-Свида');
    }
    public function testSplDetect387()
    {
        $this->assertEquals('S-Семашко', $this->object->splitFullName('Семашко').'-Семашко');
    }
    public function testSplDetect388()
    {
        $this->assertEquals('S-Семененко', $this->object->splitFullName('Семененко').'-Семененко');
    }
    public function testSplDetect389()
    {
        $this->assertEquals('S-Семенець', $this->object->splitFullName('Семенець').'-Семенець');
    }
    public function testSplDetect390()
    {
        $this->assertEquals('S-Семенина', $this->object->splitFullName('Семенина').'-Семенина');
    }
    public function testSplDetect391()
    {
        $this->assertEquals('S-Семенченко', $this->object->splitFullName('Семенченко').'-Семенченко');
    }
    public function testSplDetect392()
    {
        $this->assertEquals('S-Семенюк', $this->object->splitFullName('Семенюк').'-Семенюк');
    }
    public function testSplDetect393()
    {
        $this->assertEquals('S-Семеренко', $this->object->splitFullName('Семеренко').'-Семеренко');
    }
    public function testSplDetect394()
    {
        $this->assertEquals('S-Сидоренко', $this->object->splitFullName('Сидоренко').'-Сидоренко');
    }
    public function testSplDetect395()
    {
        $this->assertEquals('S-Силенко', $this->object->splitFullName('Силенко').'-Силенко');
    }
    public function testSplDetect396()
    {
        $this->assertEquals('S-Симоненко', $this->object->splitFullName('Симоненко').'-Симоненко');
    }
    public function testSplDetect397()
    {
        $this->assertEquals('S-Симчич', $this->object->splitFullName('Симчич').'-Симчич');
    }
    public function testSplDetect398()
    {
        $this->assertEquals('S-Скрипник', $this->object->splitFullName('Скрипник').'-Скрипник');
    }
    public function testSplDetect399()
    {
        $this->assertEquals('S-Скуратівський', $this->object->splitFullName('Скуратівський').'-Скуратівський');
    }
    public function testSplDetect400()
    {
        $this->assertEquals('S-Слободян', $this->object->splitFullName('Слободян').'-Слободян');
    }
    public function testSplDetect401()
    {
        $this->assertEquals('S-Слободянюк', $this->object->splitFullName('Слободянюк').'-Слободянюк');
    }
    public function testSplDetect402()
    {
        $this->assertEquals('S-Смик', $this->object->splitFullName('Смик').'-Смик');
    }
    public function testSplDetect403()
    {
        $this->assertEquals('S-Смогоржевський', $this->object->splitFullName('Смогоржевський').'-Смогоржевський');
    }
    public function testSplDetect404()
    {
        $this->assertEquals('S-Собчук', $this->object->splitFullName('Собчук').'-Собчук');
    }
    public function testSplDetect405()
    {
        $this->assertEquals('S-Сопронюк', $this->object->splitFullName('Сопронюк').'-Сопронюк');
    }
    public function testSplDetect406()
    {
        $this->assertEquals('S-Сорока', $this->object->splitFullName('Сорока').'-Сорока');
    }
    public function testSplDetect407()
    {
        $this->assertEquals('S-Сохань', $this->object->splitFullName('Сохань').'-Сохань');
    }
    public function testSplDetect408()
    {
        $this->assertEquals('S-Стадник', $this->object->splitFullName('Стадник').'-Стадник');
    }
    public function testSplDetect409()
    {
        $this->assertEquals('S-Стельмах', $this->object->splitFullName('Стельмах').'-Стельмах');
    }
    public function testSplDetect410()
    {
        $this->assertEquals('S-Степаненко', $this->object->splitFullName('Степаненко').'-Степаненко');
    }
    public function testSplDetect411()
    {
        $this->assertEquals('S-Степура', $this->object->splitFullName('Степура').'-Степура');
    }
    public function testSplDetect412()
    {
        $this->assertEquals('S-Стеценко', $this->object->splitFullName('Стеценко').'-Стеценко');
    }
    public function testSplDetect413()
    {
        $this->assertEquals('S-Стецюк', $this->object->splitFullName('Стецюк').'-Стецюк');
    }
    public function testSplDetect414()
    {
        $this->assertEquals('S-Струтинський', $this->object->splitFullName('Струтинський').'-Струтинський');
    }
    public function testSplDetect415()
    {
        $this->assertEquals('S-Сулима', $this->object->splitFullName('Сулима').'-Сулима');
    }
    public function testSplDetect416()
    {
        $this->assertEquals('S-Супруненко', $this->object->splitFullName('Супруненко').'-Супруненко');
    }
    public function testSplDetect417()
    {
        $this->assertEquals('S-Тараненко', $this->object->splitFullName('Тараненко').'-Тараненко');
    }
    public function testSplDetect418()
    {
        $this->assertEquals('S-Татаренко', $this->object->splitFullName('Татаренко').'-Татаренко');
    }
    public function testSplDetect419()
    {
        $this->assertEquals('S-Теплицький', $this->object->splitFullName('Теплицький').'-Теплицький');
    }
    public function testSplDetect420()
    {
        $this->assertEquals('S-Терещенко', $this->object->splitFullName('Терещенко').'-Терещенко');
    }
    public function testSplDetect421()
    {
        $this->assertEquals('S-Терещук', $this->object->splitFullName('Терещук').'-Терещук');
    }
    public function testSplDetect422()
    {
        $this->assertEquals('S-Тесленко', $this->object->splitFullName('Тесленко').'-Тесленко');
    }
    public function testSplDetect423()
    {
        $this->assertEquals('S-Тимошенко', $this->object->splitFullName('Тимошенко').'-Тимошенко');
    }
    public function testSplDetect424()
    {
        $this->assertEquals('S-Тимощук', $this->object->splitFullName('Тимощук').'-Тимощук');
    }
    public function testSplDetect425()
    {
        $this->assertEquals('S-Тимчак', $this->object->splitFullName('Тимчак').'-Тимчак');
    }
    public function testSplDetect426()
    {
        $this->assertEquals('S-Титаренко', $this->object->splitFullName('Титаренко').'-Титаренко');
    }
    public function testSplDetect427()
    {
        $this->assertEquals('S-Тищенко', $this->object->splitFullName('Тищенко').'-Тищенко');
    }
    public function testSplDetect428()
    {
        $this->assertEquals('S-Ткач', $this->object->splitFullName('Ткач').'-Ткач');
    }
    public function testSplDetect429()
    {
        $this->assertEquals('S-Ткаченко', $this->object->splitFullName('Ткаченко').'-Ткаченко');
    }
    public function testSplDetect430()
    {
        $this->assertEquals('S-Ткачук', $this->object->splitFullName('Ткачук').'-Ткачук');
    }
    public function testSplDetect431()
    {
        $this->assertEquals('S-Толочко', $this->object->splitFullName('Толочко').'-Толочко');
    }
    public function testSplDetect432()
    {
        $this->assertEquals('S-Томенко', $this->object->splitFullName('Томенко').'-Томенко');
    }
    public function testSplDetect433()
    {
        $this->assertEquals('S-Тулуб', $this->object->splitFullName('Тулуб').'-Тулуб');
    }
    public function testSplDetect434()
    {
        $this->assertEquals('S-Удовенко', $this->object->splitFullName('Удовенко').'-Удовенко');
    }
    public function testSplDetect435()
    {
        $this->assertEquals('S-Удовиченко', $this->object->splitFullName('Удовиченко').'-Удовиченко');
    }
    public function testSplDetect436()
    {
        $this->assertEquals('S-Усенко', $this->object->splitFullName('Усенко').'-Усенко');
    }
    public function testSplDetect437()
    {
        $this->assertEquals('S-Філоненко', $this->object->splitFullName('Філоненко').'-Філоненко');
    }
    public function testSplDetect438()
    {
        $this->assertEquals('S-Феденко', $this->object->splitFullName('Феденко').'-Феденко');
    }
    public function testSplDetect439()
    {
        $this->assertEquals('S-Федоренко', $this->object->splitFullName('Федоренко').'-Федоренко');
    }
    public function testSplDetect440()
    {
        $this->assertEquals('S-Федорук', $this->object->splitFullName('Федорук').'-Федорук');
    }
    public function testSplDetect441()
    {
        $this->assertEquals('S-Фещенко', $this->object->splitFullName('Фещенко').'-Фещенко');
    }
    public function testSplDetect442()
    {
        $this->assertEquals('S-Фоменко', $this->object->splitFullName('Фоменко').'-Фоменко');
    }
    public function testSplDetect443()
    {
        $this->assertEquals('S-Ханенко', $this->object->splitFullName('Ханенко').'-Ханенко');
    }
    public function testSplDetect444()
    {
        $this->assertEquals('S-Харчук', $this->object->splitFullName('Харчук').'-Харчук');
    }
    public function testSplDetect445()
    {
        $this->assertEquals('S-Хміляр', $this->object->splitFullName('Хміляр').'-Хміляр');
    }
    public function testSplDetect446()
    {
        $this->assertEquals('S-Хмара', $this->object->splitFullName('Хмара').'-Хмара');
    }
    public function testSplDetect447()
    {
        $this->assertEquals('S-Холодовський', $this->object->splitFullName('Холодовський').'-Холодовський');
    }
    public function testSplDetect448()
    {
        $this->assertEquals('S-Хоменко', $this->object->splitFullName('Хоменко').'-Хоменко');
    }
    public function testSplDetect449()
    {
        $this->assertEquals('S-Царук', $this->object->splitFullName('Царук').'-Царук');
    }
    public function testSplDetect450()
    {
        $this->assertEquals('S-Цибуленко', $this->object->splitFullName('Цибуленко').'-Цибуленко');
    }
    public function testSplDetect451()
    {
        $this->assertEquals('S-Цюпа', $this->object->splitFullName('Цюпа').'-Цюпа');
    }
    public function testSplDetect452()
    {
        $this->assertEquals('S-Чабаненко', $this->object->splitFullName('Чабаненко').'-Чабаненко');
    }
    public function testSplDetect453()
    {
        $this->assertEquals('S-Чанов', $this->object->splitFullName('Чанов').'-Чанов');
    }
    public function testSplDetect454()
    {
        $this->assertEquals('S-Чередниченко', $this->object->splitFullName('Чередниченко').'-Чередниченко');
    }
    public function testSplDetect455()
    {
        $this->assertEquals('S-Чернявський', $this->object->splitFullName('Чернявський').'-Чернявський');
    }
    public function testSplDetect456()
    {
        $this->assertEquals('S-Чорний', $this->object->splitFullName('Чорний').'-Чорний');
    }
    public function testSplDetect457()
    {
        $this->assertEquals('S-Чорновіл', $this->object->splitFullName('Чорновіл').'-Чорновіл');
    }
    public function testSplDetect458()
    {
        $this->assertEquals('S-Чуйкевич', $this->object->splitFullName('Чуйкевич').'-Чуйкевич');
    }
    public function testSplDetect459()
    {
        $this->assertEquals('S-Чумак', $this->object->splitFullName('Чумак').'-Чумак');
    }
    public function testSplDetect460()
    {
        $this->assertEquals('S-Чумаченко', $this->object->splitFullName('Чумаченко').'-Чумаченко');
    }
    public function testSplDetect461()
    {
        $this->assertEquals('S-Шахрай', $this->object->splitFullName('Шахрай').'-Шахрай');
    }
    public function testSplDetect462()
    {
        $this->assertEquals('S-Шевченко', $this->object->splitFullName('Шевченко').'-Шевченко');
    }
    public function testSplDetect463()
    {
        $this->assertEquals('S-Шевчук', $this->object->splitFullName('Шевчук').'-Шевчук');
    }
    public function testSplDetect464()
    {
        $this->assertEquals('S-Шелест', $this->object->splitFullName('Шелест').'-Шелест');
    }
    public function testSplDetect465()
    {
        $this->assertEquals('S-Шинкарук', $this->object->splitFullName('Шинкарук').'-Шинкарук');
    }
    public function testSplDetect466()
    {
        $this->assertEquals('S-Шкрібляк', $this->object->splitFullName('Шкрібляк').'-Шкрібляк');
    }
    public function testSplDetect467()
    {
        $this->assertEquals('S-Шнайдер', $this->object->splitFullName('Шнайдер').'-Шнайдер');
    }
    public function testSplDetect468()
    {
        $this->assertEquals('S-Шовкопляс', $this->object->splitFullName('Шовкопляс').'-Шовкопляс');
    }
    public function testSplDetect469()
    {
        $this->assertEquals('S-Шульга', $this->object->splitFullName('Шульга').'-Шульга');
    }
    public function testSplDetect470()
    {
        $this->assertEquals('S-Шухевич', $this->object->splitFullName('Шухевич').'-Шухевич');
    }
    public function testSplDetect471()
    {
        $this->assertEquals('S-Щерба', $this->object->splitFullName('Щерба').'-Щерба');
    }
    public function testSplDetect472()
    {
        $this->assertEquals('S-Щербак', $this->object->splitFullName('Щербак').'-Щербак');
    }
    public function testSplDetect473()
    {
        $this->assertEquals('S-Щербань', $this->object->splitFullName('Щербань').'-Щербань');
    }
    public function testSplDetect474()
    {
        $this->assertEquals('S-Юрженко', $this->object->splitFullName('Юрженко').'-Юрженко');
    }
    public function testSplDetect475()
    {
        $this->assertEquals('S-Юрченко', $this->object->splitFullName('Юрченко').'-Юрченко');
    }
    public function testSplDetect476()
    {
        $this->assertEquals('S-Юрчишин', $this->object->splitFullName('Юрчишин').'-Юрчишин');
    }
    public function testSplDetect477()
    {
        $this->assertEquals('S-Юхименко', $this->object->splitFullName('Юхименко').'-Юхименко');
    }
    public function testSplDetect478()
    {
        $this->assertEquals('S-Ющенко', $this->object->splitFullName('Ющенко').'-Ющенко');
    }
    public function testSplDetect479()
    {
        $this->assertEquals('S-Яковенко', $this->object->splitFullName('Яковенко').'-Яковенко');
    }
    public function testSplDetect480()
    {
        $this->assertEquals('S-Яковина', $this->object->splitFullName('Яковина').'-Яковина');
    }
    public function testSplDetect481()
    {
        $this->assertEquals('S-Янко', $this->object->splitFullName('Янко').'-Янко');
    }
    public function testSplDetect482()
    {
        $this->assertEquals('S-Ярема', $this->object->splitFullName('Ярема').'-Ярема');
    }
    public function testSplDetect483()
    {
        $this->assertEquals('S-Яременко', $this->object->splitFullName('Яременко').'-Яременко');
    }
    public function testSplDetect484()
    {
        $this->assertEquals('S-Яремко', $this->object->splitFullName('Яремко').'-Яремко');
    }
    public function testSplDetect485()
    {
        $this->assertEquals('S-Яремчук', $this->object->splitFullName('Яремчук').'-Яремчук');
    }
    public function testSplDetect486()
    {
        $this->assertEquals('S-Ярмоленко', $this->object->splitFullName('Ярмоленко').'-Ярмоленко');
    }
    public function testSplDetect487()
    {
        $this->assertEquals('S-Ярмолюк', $this->object->splitFullName('Ярмолюк').'-Ярмолюк');
    }
    public function testSplDetect488()
    {
        $this->assertEquals('S-Ярошенко', $this->object->splitFullName('Ярошенко').'-Ярошенко');
    }
    public function testSplDetect489()
    {
        $this->assertEquals('S-Яценко', $this->object->splitFullName('Яценко').'-Яценко');
    }
    public function testSplDetect490()
    {
        $this->assertEquals('S-Ященко', $this->object->splitFullName('Ященко').'-Ященко');
    }
    public function testSplDetect491()
    {
        $this->assertEquals('S-Ґалаґан', $this->object->splitFullName('Ґалаґан').'-Ґалаґан');
    }
    public function testSplDetect492()
    {
        $this->assertEquals('S-Євсєєв', $this->object->splitFullName('Євсєєв').'-Євсєєв');
    }
    public function testSplDetect493()
    {
        $this->assertEquals('S-Єгоров', $this->object->splitFullName('Єгоров').'-Єгоров');
    }
    public function testSplDetect494()
    {
        $this->assertEquals('S-Єлізаров', $this->object->splitFullName('Єлізаров').'-Єлізаров');
    }
    public function testSplDetect495()
    {
        $this->assertEquals('S-Єрмилов', $this->object->splitFullName('Єрмилов').'-Єрмилов');
    }
    public function testSplDetect496()
    {
        $this->assertEquals('S-Єрофєєв', $this->object->splitFullName('Єрофєєв').'-Єрофєєв');
    }
    public function testSplDetect497()
    {
        $this->assertEquals('S-Єршов', $this->object->splitFullName('Єршов').'-Єршов');
    }
    public function testSplDetect498()
    {
        $this->assertEquals('S-Єфімов', $this->object->splitFullName('Єфімов').'-Єфімов');
    }
    public function testSplDetect499()
    {
        $this->assertEquals('S-Єфремов', $this->object->splitFullName('Єфремов').'-Єфремов');
    }
    public function testSplDetect500()
    {
        $this->assertEquals('S-Іванов', $this->object->splitFullName('Іванов').'-Іванов');
    }
    public function testSplDetect501()
    {
        $this->assertEquals('S-Ігнатов', $this->object->splitFullName('Ігнатов').'-Ігнатов');
    }
    public function testSplDetect502()
    {
        $this->assertEquals('S-Іллюшин', $this->object->splitFullName('Іллюшин').'-Іллюшин');
    }
    public function testSplDetect503()
    {
        $this->assertEquals('S-Ільїн', $this->object->splitFullName('Ільїн').'-Ільїн');
    }
    public function testSplDetect504()
    {
        $this->assertEquals('S-Аєдоницький', $this->object->splitFullName('Аєдоницький').'-Аєдоницький');
    }
    public function testSplDetect505()
    {
        $this->assertEquals('S-Абатуров', $this->object->splitFullName('Абатуров').'-Абатуров');
    }
    public function testSplDetect506()
    {
        $this->assertEquals('S-Абдулов', $this->object->splitFullName('Абдулов').'-Абдулов');
    }
    public function testSplDetect507()
    {
        $this->assertEquals('S-Абрамов', $this->object->splitFullName('Абрамов').'-Абрамов');
    }
    public function testSplDetect508()
    {
        $this->assertEquals('S-Авілов', $this->object->splitFullName('Авілов').'-Авілов');
    }
    public function testSplDetect509()
    {
        $this->assertEquals('S-Авдєєнко', $this->object->splitFullName('Авдєєнко').'-Авдєєнко');
    }
    public function testSplDetect510()
    {
        $this->assertEquals('S-Аврамов', $this->object->splitFullName('Аврамов').'-Аврамов');
    }
    public function testSplDetect511()
    {
        $this->assertEquals('S-Алексєєв', $this->object->splitFullName('Алексєєв').'-Алексєєв');
    }
    public function testSplDetect512()
    {
        $this->assertEquals('S-Александров', $this->object->splitFullName('Александров').'-Александров');
    }
    public function testSplDetect513()
    {
        $this->assertEquals('S-Альошин', $this->object->splitFullName('Альошин').'-Альошин');
    }
    public function testSplDetect514()
    {
        $this->assertEquals('S-Анісімов', $this->object->splitFullName('Анісімов').'-Анісімов');
    }
    public function testSplDetect515()
    {
        $this->assertEquals('S-Анісов', $this->object->splitFullName('Анісов').'-Анісов');
    }
    public function testSplDetect516()
    {
        $this->assertEquals('S-Ананьєв', $this->object->splitFullName('Ананьєв').'-Ананьєв');
    }
    public function testSplDetect517()
    {
        $this->assertEquals('S-Андріанов', $this->object->splitFullName('Андріанов').'-Андріанов');
    }
    public function testSplDetect518()
    {
        $this->assertEquals('S-Андріяшев', $this->object->splitFullName('Андріяшев').'-Андріяшев');
    }
    public function testSplDetect519()
    {
        $this->assertEquals('S-Андреєв', $this->object->splitFullName('Андреєв').'-Андреєв');
    }
    public function testSplDetect520()
    {
        $this->assertEquals('S-Антипов', $this->object->splitFullName('Антипов').'-Антипов');
    }
    public function testSplDetect521()
    {
        $this->assertEquals('S-Антонов', $this->object->splitFullName('Антонов').'-Антонов');
    }
    public function testSplDetect522()
    {
        $this->assertEquals('S-Анциферов', $this->object->splitFullName('Анциферов').'-Анциферов');
    }
    public function testSplDetect523()
    {
        $this->assertEquals('S-Апухтін', $this->object->splitFullName('Апухтін').'-Апухтін');
    }
    public function testSplDetect524()
    {
        $this->assertEquals('S-Арбузов', $this->object->splitFullName('Арбузов').'-Арбузов');
    }
    public function testSplDetect525()
    {
        $this->assertEquals('S-Аржанов', $this->object->splitFullName('Аржанов').'-Аржанов');
    }
    public function testSplDetect526()
    {
        $this->assertEquals('S-Архипов', $this->object->splitFullName('Архипов').'-Архипов');
    }
    public function testSplDetect527()
    {
        $this->assertEquals('S-Арцибушев', $this->object->splitFullName('Арцибушев').'-Арцибушев');
    }
    public function testSplDetect528()
    {
        $this->assertEquals('S-Астраханцев', $this->object->splitFullName('Астраханцев').'-Астраханцев');
    }
    public function testSplDetect529()
    {
        $this->assertEquals('S-Афіногенов', $this->object->splitFullName('Афіногенов').'-Афіногенов');
    }
    public function testSplDetect530()
    {
        $this->assertEquals('S-Афанасьєв', $this->object->splitFullName('Афанасьєв').'-Афанасьєв');
    }
    public function testSplDetect531()
    {
        $this->assertEquals('S-Бєлов', $this->object->splitFullName('Бєлов').'-Бєлов');
    }
    public function testSplDetect532()
    {
        $this->assertEquals('S-Бєлоглазов', $this->object->splitFullName('Бєлоглазов').'-Бєлоглазов');
    }
    public function testSplDetect533()
    {
        $this->assertEquals('S-Бєлоусов', $this->object->splitFullName('Бєлоусов').'-Бєлоусов');
    }
    public function testSplDetect534()
    {
        $this->assertEquals('S-Бєляєв', $this->object->splitFullName('Бєляєв').'-Бєляєв');
    }
    public function testSplDetect535()
    {
        $this->assertEquals('S-Бібиков', $this->object->splitFullName('Бібиков').'-Бібиков');
    }
    public function testSplDetect536()
    {
        $this->assertEquals('S-Бажанов', $this->object->splitFullName('Бажанов').'-Бажанов');
    }
    public function testSplDetect537()
    {
        $this->assertEquals('S-Баранов', $this->object->splitFullName('Баранов').'-Баранов');
    }
    public function testSplDetect538()
    {
        $this->assertEquals('S-Баришніков', $this->object->splitFullName('Баришніков').'-Баришніков');
    }
    public function testSplDetect539()
    {
        $this->assertEquals('S-Барсов', $this->object->splitFullName('Барсов').'-Барсов');
    }
    public function testSplDetect540()
    {
        $this->assertEquals('S-Батюшков', $this->object->splitFullName('Батюшков').'-Батюшков');
    }
    public function testSplDetect541()
    {
        $this->assertEquals('S-Биков', $this->object->splitFullName('Биков').'-Биков');
    }
    public function testSplDetect542()
    {
        $this->assertEquals('S-Блохін', $this->object->splitFullName('Блохін').'-Блохін');
    }
    public function testSplDetect543()
    {
        $this->assertEquals('S-Бобров', $this->object->splitFullName('Бобров').'-Бобров');
    }
    public function testSplDetect544()
    {
        $this->assertEquals('S-Богданов', $this->object->splitFullName('Богданов').'-Богданов');
    }
    public function testSplDetect545()
    {
        $this->assertEquals('S-Богомазов', $this->object->splitFullName('Богомазов').'-Богомазов');
    }
    public function testSplDetect546()
    {
        $this->assertEquals('S-Бойков', $this->object->splitFullName('Бойков').'-Бойков');
    }
    public function testSplDetect547()
    {
        $this->assertEquals('S-Большаков', $this->object->splitFullName('Большаков').'-Большаков');
    }
    public function testSplDetect548()
    {
        $this->assertEquals('S-Борисов', $this->object->splitFullName('Борисов').'-Борисов');
    }
    public function testSplDetect549()
    {
        $this->assertEquals('S-Бочков', $this->object->splitFullName('Бочков').'-Бочков');
    }
    public function testSplDetect550()
    {
        $this->assertEquals('S-Бризгалов', $this->object->splitFullName('Бризгалов').'-Бризгалов');
    }
    public function testSplDetect551()
    {
        $this->assertEquals('S-Брусилов', $this->object->splitFullName('Брусилов').'-Брусилов');
    }
    public function testSplDetect552()
    {
        $this->assertEquals('S-Бутурлін', $this->object->splitFullName('Бутурлін').'-Бутурлін');
    }
    public function testSplDetect553()
    {
        $this->assertEquals('S-Бутусов', $this->object->splitFullName('Бутусов').'-Бутусов');
    }
    public function testSplDetect554()
    {
        $this->assertEquals('S-Варламов', $this->object->splitFullName('Варламов').'-Варламов');
    }
    public function testSplDetect555()
    {
        $this->assertEquals('S-Васильєв', $this->object->splitFullName('Васильєв').'-Васильєв');
    }
    public function testSplDetect556()
    {
        $this->assertEquals('S-Виноградов', $this->object->splitFullName('Виноградов').'-Виноградов');
    }
    public function testSplDetect557()
    {
        $this->assertEquals('S-Власов', $this->object->splitFullName('Власов').'-Власов');
    }
    public function testSplDetect558()
    {
        $this->assertEquals('S-Внуков', $this->object->splitFullName('Внуков').'-Внуков');
    }
    public function testSplDetect559()
    {
        $this->assertEquals('S-Волков', $this->object->splitFullName('Волков').'-Волков');
    }
    public function testSplDetect560()
    {
        $this->assertEquals('S-Воробей', $this->object->splitFullName('Воробей').'-Воробей');
    }
    public function testSplDetect561()
    {
        $this->assertEquals('S-Воробйов', $this->object->splitFullName('Воробйов').'-Воробйов');
    }
    public function testSplDetect562()
    {
        $this->assertEquals('S-Воронін', $this->object->splitFullName('Воронін').'-Воронін');
    }
    public function testSplDetect563()
    {
        $this->assertEquals('S-Воронцов', $this->object->splitFullName('Воронцов').'-Воронцов');
    }
    public function testSplDetect564()
    {
        $this->assertEquals('S-Ворошилов', $this->object->splitFullName('Ворошилов').'-Ворошилов');
    }
    public function testSplDetect565()
    {
        $this->assertEquals('S-Гаврилов', $this->object->splitFullName('Гаврилов').'-Гаврилов');
    }
    public function testSplDetect566()
    {
        $this->assertEquals('S-Герасимов', $this->object->splitFullName('Герасимов').'-Герасимов');
    }
    public function testSplDetect567()
    {
        $this->assertEquals('S-Горбунов', $this->object->splitFullName('Горбунов').'-Горбунов');
    }
    public function testSplDetect568()
    {
        $this->assertEquals('S-Горчаков', $this->object->splitFullName('Горчаков').'-Горчаков');
    }
    public function testSplDetect569()
    {
        $this->assertEquals('S-Горшков', $this->object->splitFullName('Горшков').'-Горшков');
    }
    public function testSplDetect570()
    {
        $this->assertEquals('S-Громов', $this->object->splitFullName('Громов').'-Громов');
    }
    public function testSplDetect571()
    {
        $this->assertEquals('S-Гусєв', $this->object->splitFullName('Гусєв').'-Гусєв');
    }
    public function testSplDetect572()
    {
        $this->assertEquals('S-Давидов', $this->object->splitFullName('Давидов').'-Давидов');
    }
    public function testSplDetect573()
    {
        $this->assertEquals('S-Данилов', $this->object->splitFullName('Данилов').'-Данилов');
    }
    public function testSplDetect574()
    {
        $this->assertEquals('S-Дементьєв', $this->object->splitFullName('Дементьєв').'-Дементьєв');
    }
    public function testSplDetect575()
    {
        $this->assertEquals('S-Денисов', $this->object->splitFullName('Денисов').'-Денисов');
    }
    public function testSplDetect576()
    {
        $this->assertEquals('S-Дмитрієв', $this->object->splitFullName('Дмитрієв').'-Дмитрієв');
    }
    public function testSplDetect577()
    {
        $this->assertEquals('S-Добролюбов', $this->object->splitFullName('Добролюбов').'-Добролюбов');
    }
    public function testSplDetect578()
    {
        $this->assertEquals('S-Донськой', $this->object->splitFullName('Донськой').'-Донськой');
    }
    public function testSplDetect579()
    {
        $this->assertEquals('S-Дорофєєв', $this->object->splitFullName('Дорофєєв').'-Дорофєєв');
    }
    public function testSplDetect580()
    {
        $this->assertEquals('S-Дубров', $this->object->splitFullName('Дубров').'-Дубров');
    }
    public function testSplDetect581()
    {
        $this->assertEquals('S-Железняков', $this->object->splitFullName('Железняков').'-Железняков');
    }
    public function testSplDetect582()
    {
        $this->assertEquals('S-Жердєв', $this->object->splitFullName('Жердєв').'-Жердєв');
    }
    public function testSplDetect583()
    {
        $this->assertEquals('S-Жуков', $this->object->splitFullName('Жуков').'-Жуков');
    }
    public function testSplDetect584()
    {
        $this->assertEquals('S-Журавльов', $this->object->splitFullName('Журавльов').'-Журавльов');
    }
    public function testSplDetect585()
    {
        $this->assertEquals('S-Заваров', $this->object->splitFullName('Заваров').'-Заваров');
    }
    public function testSplDetect586()
    {
        $this->assertEquals('S-Загаров', $this->object->splitFullName('Загаров').'-Загаров');
    }
    public function testSplDetect587()
    {
        $this->assertEquals('S-Зайцев', $this->object->splitFullName('Зайцев').'-Зайцев');
    }
    public function testSplDetect588()
    {
        $this->assertEquals('S-Захаров', $this->object->splitFullName('Захаров').'-Захаров');
    }
    public function testSplDetect589()
    {
        $this->assertEquals('S-Звєрєв', $this->object->splitFullName('Звєрєв').'-Звєрєв');
    }
    public function testSplDetect590()
    {
        $this->assertEquals('S-Зеров', $this->object->splitFullName('Зеров').'-Зеров');
    }
    public function testSplDetect591()
    {
        $this->assertEquals('S-Золотухін', $this->object->splitFullName('Золотухін').'-Золотухін');
    }
    public function testSplDetect592()
    {
        $this->assertEquals('S-Зубов', $this->object->splitFullName('Зубов').'-Зубов');
    }
    public function testSplDetect593()
    {
        $this->assertEquals('S-Казаков', $this->object->splitFullName('Казаков').'-Казаков');
    }
    public function testSplDetect594()
    {
        $this->assertEquals('S-Калінін', $this->object->splitFullName('Калінін').'-Калінін');
    }
    public function testSplDetect595()
    {
        $this->assertEquals('S-Калашников', $this->object->splitFullName('Калашников').'-Калашников');
    }
    public function testSplDetect596()
    {
        $this->assertEquals('S-Карпов', $this->object->splitFullName('Карпов').'-Карпов');
    }
    public function testSplDetect597()
    {
        $this->assertEquals('S-Каштанов', $this->object->splitFullName('Каштанов').'-Каштанов');
    }
    public function testSplDetect598()
    {
        $this->assertEquals('S-Кисельов', $this->object->splitFullName('Кисельов').'-Кисельов');
    }
    public function testSplDetect599()
    {
        $this->assertEquals('S-Ковальов', $this->object->splitFullName('Ковальов').'-Ковальов');
    }
    public function testSplDetect600()
    {
        $this->assertEquals('S-Кожевников', $this->object->splitFullName('Кожевников').'-Кожевников');
    }
    public function testSplDetect601()
    {
        $this->assertEquals('S-Козлов', $this->object->splitFullName('Козлов').'-Козлов');
    }
    public function testSplDetect602()
    {
        $this->assertEquals('S-Колесников', $this->object->splitFullName('Колесников').'-Колесников');
    }
    public function testSplDetect603()
    {
        $this->assertEquals('S-Кольцов', $this->object->splitFullName('Кольцов').'-Кольцов');
    }
    public function testSplDetect604()
    {
        $this->assertEquals('S-Комаров', $this->object->splitFullName('Комаров').'-Комаров');
    }
    public function testSplDetect605()
    {
        $this->assertEquals('S-Коновалов', $this->object->splitFullName('Коновалов').'-Коновалов');
    }
    public function testSplDetect606()
    {
        $this->assertEquals('S-Конюхов', $this->object->splitFullName('Конюхов').'-Конюхов');
    }
    public function testSplDetect607()
    {
        $this->assertEquals('S-Копилов', $this->object->splitFullName('Копилов').'-Копилов');
    }
    public function testSplDetect608()
    {
        $this->assertEquals('S-Кормильцев', $this->object->splitFullName('Кормильцев').'-Кормильцев');
    }
    public function testSplDetect609()
    {
        $this->assertEquals('S-Коробов', $this->object->splitFullName('Коробов').'-Коробов');
    }
    public function testSplDetect610()
    {
        $this->assertEquals('S-Коровкін', $this->object->splitFullName('Коровкін').'-Коровкін');
    }
    public function testSplDetect611()
    {
        $this->assertEquals('S-Корольов', $this->object->splitFullName('Корольов').'-Корольов');
    }
    public function testSplDetect612()
    {
        $this->assertEquals('S-Котов', $this->object->splitFullName('Котов').'-Котов');
    }
    public function testSplDetect613()
    {
        $this->assertEquals('S-Краснов', $this->object->splitFullName('Краснов').'-Краснов');
    }
    public function testSplDetect614()
    {
        $this->assertEquals('S-Крилов', $this->object->splitFullName('Крилов').'-Крилов');
    }
    public function testSplDetect615()
    {
        $this->assertEquals('S-Кримов', $this->object->splitFullName('Кримов').'-Кримов');
    }
    public function testSplDetect616()
    {
        $this->assertEquals('S-Крюков', $this->object->splitFullName('Крюков').'-Крюков');
    }
    public function testSplDetect617()
    {
        $this->assertEquals('S-Кудряшов', $this->object->splitFullName('Кудряшов').'-Кудряшов');
    }
    public function testSplDetect618()
    {
        $this->assertEquals('S-Кузнецов', $this->object->splitFullName('Кузнецов').'-Кузнецов');
    }
    public function testSplDetect619()
    {
        $this->assertEquals('S-Кузьмін', $this->object->splitFullName('Кузьмін').'-Кузьмін');
    }
    public function testSplDetect620()
    {
        $this->assertEquals('S-Кулаков', $this->object->splitFullName('Кулаков').'-Кулаков');
    }
    public function testSplDetect621()
    {
        $this->assertEquals('S-Куликов', $this->object->splitFullName('Куликов').'-Куликов');
    }
    public function testSplDetect622()
    {
        $this->assertEquals('S-Курков', $this->object->splitFullName('Курков').'-Курков');
    }
    public function testSplDetect623()
    {
        $this->assertEquals('S-Курочкін', $this->object->splitFullName('Курочкін').'-Курочкін');
    }
    public function testSplDetect624()
    {
        $this->assertEquals('S-Лєсков', $this->object->splitFullName('Лєсков').'-Лєсков');
    }
    public function testSplDetect625()
    {
        $this->assertEquals('S-Лідов', $this->object->splitFullName('Лідов').'-Лідов');
    }
    public function testSplDetect626()
    {
        $this->assertEquals('S-Ладигін', $this->object->splitFullName('Ладигін').'-Ладигін');
    }
    public function testSplDetect627()
    {
        $this->assertEquals('S-Лазарєв', $this->object->splitFullName('Лазарєв').'-Лазарєв');
    }
    public function testSplDetect628()
    {
        $this->assertEquals('S-Лебедєв', $this->object->splitFullName('Лебедєв').'-Лебедєв');
    }
    public function testSplDetect629()
    {
        $this->assertEquals('S-Лихоносов', $this->object->splitFullName('Лихоносов').'-Лихоносов');
    }
    public function testSplDetect630()
    {
        $this->assertEquals('S-Лосєв', $this->object->splitFullName('Лосєв').'-Лосєв');
    }
    public function testSplDetect631()
    {
        $this->assertEquals('S-Львов', $this->object->splitFullName('Львов').'-Львов');
    }
    public function testSplDetect632()
    {
        $this->assertEquals('S-Любимов', $this->object->splitFullName('Любимов').'-Любимов');
    }
    public function testSplDetect633()
    {
        $this->assertEquals('S-Мілютін', $this->object->splitFullName('Мілютін').'-Мілютін');
    }
    public function testSplDetect634()
    {
        $this->assertEquals('S-Макаров', $this->object->splitFullName('Макаров').'-Макаров');
    }
    public function testSplDetect635()
    {
        $this->assertEquals('S-Максимов', $this->object->splitFullName('Максимов').'-Максимов');
    }
    public function testSplDetect636()
    {
        $this->assertEquals('S-Малаков', $this->object->splitFullName('Малаков').'-Малаков');
    }
    public function testSplDetect637()
    {
        $this->assertEquals('S-Мамонов', $this->object->splitFullName('Мамонов').'-Мамонов');
    }
    public function testSplDetect638()
    {
        $this->assertEquals('S-Манасеїн', $this->object->splitFullName('Манасеїн').'-Манасеїн');
    }
    public function testSplDetect639()
    {
        $this->assertEquals('S-Марков', $this->object->splitFullName('Марков').'-Марков');
    }
    public function testSplDetect640()
    {
        $this->assertEquals('S-Мартенс', $this->object->splitFullName('Мартенс').'-Мартенс');
    }
    public function testSplDetect641()
    {
        $this->assertEquals('S-Мартинов', $this->object->splitFullName('Мартинов').'-Мартинов');
    }
    public function testSplDetect642()
    {
        $this->assertEquals('S-Масленніков', $this->object->splitFullName('Масленніков').'-Масленніков');
    }
    public function testSplDetect643()
    {
        $this->assertEquals('S-Маслов', $this->object->splitFullName('Маслов').'-Маслов');
    }
    public function testSplDetect644()
    {
        $this->assertEquals('S-Матвєєв', $this->object->splitFullName('Матвєєв').'-Матвєєв');
    }
    public function testSplDetect645()
    {
        $this->assertEquals('S-Медведєв', $this->object->splitFullName('Медведєв').'-Медведєв');
    }
    public function testSplDetect646()
    {
        $this->assertEquals('S-Мельников', $this->object->splitFullName('Мельников').'-Мельников');
    }
    public function testSplDetect647()
    {
        $this->assertEquals('S-Миронов', $this->object->splitFullName('Миронов').'-Миронов');
    }
    public function testSplDetect648()
    {
        $this->assertEquals('S-Михайлов', $this->object->splitFullName('Михайлов').'-Михайлов');
    }
    public function testSplDetect649()
    {
        $this->assertEquals('S-Моїсєєв', $this->object->splitFullName('Моїсєєв').'-Моїсєєв');
    }
    public function testSplDetect650()
    {
        $this->assertEquals('S-Моргунов', $this->object->splitFullName('Моргунов').'-Моргунов');
    }
    public function testSplDetect651()
    {
        $this->assertEquals('S-Морков', $this->object->splitFullName('Морков').'-Морков');
    }
    public function testSplDetect652()
    {
        $this->assertEquals('S-Морозов', $this->object->splitFullName('Морозов').'-Морозов');
    }
    public function testSplDetect653()
    {
        $this->assertEquals('S-Мухін', $this->object->splitFullName('Мухін').'-Мухін');
    }
    public function testSplDetect654()
    {
        $this->assertEquals('S-Нікітін', $this->object->splitFullName('Нікітін').'-Нікітін');
    }
    public function testSplDetect655()
    {
        $this->assertEquals('S-Ніколаєв', $this->object->splitFullName('Ніколаєв').'-Ніколаєв');
    }
    public function testSplDetect656()
    {
        $this->assertEquals('S-Нікулін', $this->object->splitFullName('Нікулін').'-Нікулін');
    }
    public function testSplDetect657()
    {
        $this->assertEquals('S-Набоков', $this->object->splitFullName('Набоков').'-Набоков');
    }
    public function testSplDetect658()
    {
        $this->assertEquals('S-Некрасов', $this->object->splitFullName('Некрасов').'-Некрасов');
    }
    public function testSplDetect659()
    {
        $this->assertEquals('S-Новиков', $this->object->splitFullName('Новиков').'-Новиков');
    }
    public function testSplDetect660()
    {
        $this->assertEquals('S-Орлов', $this->object->splitFullName('Орлов').'-Орлов');
    }
    public function testSplDetect661()
    {
        $this->assertEquals('S-Осипов', $this->object->splitFullName('Осипов').'-Осипов');
    }
    public function testSplDetect662()
    {
        $this->assertEquals('S-Павлов', $this->object->splitFullName('Павлов').'-Павлов');
    }
    public function testSplDetect663()
    {
        $this->assertEquals('S-Павлушков', $this->object->splitFullName('Павлушков').'-Павлушков');
    }
    public function testSplDetect664()
    {
        $this->assertEquals('S-Панов', $this->object->splitFullName('Панов').'-Панов');
    }
    public function testSplDetect665()
    {
        $this->assertEquals('S-Петров', $this->object->splitFullName('Петров').'-Петров');
    }
    public function testSplDetect666()
    {
        $this->assertEquals('S-Пильчиков', $this->object->splitFullName('Пильчиков').'-Пильчиков');
    }
    public function testSplDetect667()
    {
        $this->assertEquals('S-Платонов', $this->object->splitFullName('Платонов').'-Платонов');
    }
    public function testSplDetect668()
    {
        $this->assertEquals('S-Плеханов', $this->object->splitFullName('Плеханов').'-Плеханов');
    }
    public function testSplDetect669()
    {
        $this->assertEquals('S-Поляков', $this->object->splitFullName('Поляков').'-Поляков');
    }
    public function testSplDetect670()
    {
        $this->assertEquals('S-Попов', $this->object->splitFullName('Попов').'-Попов');
    }
    public function testSplDetect671()
    {
        $this->assertEquals('S-Поярков', $this->object->splitFullName('Поярков').'-Поярков');
    }
    public function testSplDetect672()
    {
        $this->assertEquals('S-Пригунов', $this->object->splitFullName('Пригунов').'-Пригунов');
    }
    public function testSplDetect673()
    {
        $this->assertEquals('S-Прошкін', $this->object->splitFullName('Прошкін').'-Прошкін');
    }
    public function testSplDetect674()
    {
        $this->assertEquals('S-Решетников', $this->object->splitFullName('Решетников').'-Решетников');
    }
    public function testSplDetect675()
    {
        $this->assertEquals('S-Рожков', $this->object->splitFullName('Рожков').'-Рожков');
    }
    public function testSplDetect676()
    {
        $this->assertEquals('S-Романов', $this->object->splitFullName('Романов').'-Романов');
    }
    public function testSplDetect677()
    {
        $this->assertEquals('S-Рябов', $this->object->splitFullName('Рябов').'-Рябов');
    }
    public function testSplDetect678()
    {
        $this->assertEquals('S-Саблін', $this->object->splitFullName('Саблін').'-Саблін');
    }
    public function testSplDetect679()
    {
        $this->assertEquals('S-Савін', $this->object->splitFullName('Савін').'-Савін');
    }
    public function testSplDetect680()
    {
        $this->assertEquals('S-Сазонов', $this->object->splitFullName('Сазонов').'-Сазонов');
    }
    public function testSplDetect681()
    {
        $this->assertEquals('S-Сальников', $this->object->splitFullName('Сальников').'-Сальников');
    }
    public function testSplDetect682()
    {
        $this->assertEquals('S-Самойлов', $this->object->splitFullName('Самойлов').'-Самойлов');
    }
    public function testSplDetect683()
    {
        $this->assertEquals('S-Самсонов', $this->object->splitFullName('Самсонов').'-Самсонов');
    }
    public function testSplDetect684()
    {
        $this->assertEquals('S-Сбітнєв', $this->object->splitFullName('Сбітнєв').'-Сбітнєв');
    }
    public function testSplDetect685()
    {
        $this->assertEquals('S-Свиридов', $this->object->splitFullName('Свиридов').'-Свиридов');
    }
    public function testSplDetect686()
    {
        $this->assertEquals('S-Селезньов', $this->object->splitFullName('Селезньов').'-Селезньов');
    }
    public function testSplDetect687()
    {
        $this->assertEquals('S-Семенов', $this->object->splitFullName('Семенов').'-Семенов');
    }
    public function testSplDetect688()
    {
        $this->assertEquals('S-Сербін', $this->object->splitFullName('Сербін').'-Сербін');
    }
    public function testSplDetect689()
    {
        $this->assertEquals('S-Сергєєв', $this->object->splitFullName('Сергєєв').'-Сергєєв');
    }
    public function testSplDetect690()
    {
        $this->assertEquals('S-Сибіряков', $this->object->splitFullName('Сибіряков').'-Сибіряков');
    }
    public function testSplDetect691()
    {
        $this->assertEquals('S-Сидоров', $this->object->splitFullName('Сидоров').'-Сидоров');
    }
    public function testSplDetect692()
    {
        $this->assertEquals('S-Симонов', $this->object->splitFullName('Симонов').'-Симонов');
    }
    public function testSplDetect693()
    {
        $this->assertEquals('S-Синельников', $this->object->splitFullName('Синельников').'-Синельников');
    }
    public function testSplDetect694()
    {
        $this->assertEquals('S-Скобелев', $this->object->splitFullName('Скобелев').'-Скобелев');
    }
    public function testSplDetect695()
    {
        $this->assertEquals('S-Скоблін', $this->object->splitFullName('Скоблін').'-Скоблін');
    }
    public function testSplDetect696()
    {
        $this->assertEquals('S-Смирнов', $this->object->splitFullName('Смирнов').'-Смирнов');
    }
    public function testSplDetect697()
    {
        $this->assertEquals('S-Снєгірьов', $this->object->splitFullName('Снєгірьов').'-Снєгірьов');
    }
    public function testSplDetect698()
    {
        $this->assertEquals('S-Соболєв', $this->object->splitFullName('Соболєв').'-Соболєв');
    }
    public function testSplDetect699()
    {
        $this->assertEquals('S-Соколов', $this->object->splitFullName('Соколов').'-Соколов');
    }
    public function testSplDetect700()
    {
        $this->assertEquals('S-Солнцев', $this->object->splitFullName('Солнцев').'-Солнцев');
    }
    public function testSplDetect701()
    {
        $this->assertEquals('S-Соловйов', $this->object->splitFullName('Соловйов').'-Соловйов');
    }
    public function testSplDetect702()
    {
        $this->assertEquals('S-Сомов', $this->object->splitFullName('Сомов').'-Сомов');
    }
    public function testSplDetect703()
    {
        $this->assertEquals('S-Сорокін', $this->object->splitFullName('Сорокін').'-Сорокін');
    }
    public function testSplDetect704()
    {
        $this->assertEquals('S-Стєклов', $this->object->splitFullName('Стєклов').'-Стєклов');
    }
    public function testSplDetect705()
    {
        $this->assertEquals('S-Старков', $this->object->splitFullName('Старков').'-Старков');
    }
    public function testSplDetect706()
    {
        $this->assertEquals('S-Степанов', $this->object->splitFullName('Степанов').'-Степанов');
    }
    public function testSplDetect707()
    {
        $this->assertEquals('S-Табаков', $this->object->splitFullName('Табаков').'-Табаков');
    }
    public function testSplDetect708()
    {
        $this->assertEquals('S-Тарасов', $this->object->splitFullName('Тарасов').'-Тарасов');
    }
    public function testSplDetect709()
    {
        $this->assertEquals('S-Терентьєв', $this->object->splitFullName('Терентьєв').'-Терентьєв');
    }
    public function testSplDetect710()
    {
        $this->assertEquals('S-Тимофєєв', $this->object->splitFullName('Тимофєєв').'-Тимофєєв');
    }
    public function testSplDetect711()
    {
        $this->assertEquals('S-Титов', $this->object->splitFullName('Титов').'-Титов');
    }
    public function testSplDetect712()
    {
        $this->assertEquals('S-Тихомиров', $this->object->splitFullName('Тихомиров').'-Тихомиров');
    }
    public function testSplDetect713()
    {
        $this->assertEquals('S-Тихонов', $this->object->splitFullName('Тихонов').'-Тихонов');
    }
    public function testSplDetect714()
    {
        $this->assertEquals('S-Тюленєв', $this->object->splitFullName('Тюленєв').'-Тюленєв');
    }
    public function testSplDetect715()
    {
        $this->assertEquals('S-Уваров', $this->object->splitFullName('Уваров').'-Уваров');
    }
    public function testSplDetect716()
    {
        $this->assertEquals('S-Усов', $this->object->splitFullName('Усов').'-Усов');
    }
    public function testSplDetect717()
    {
        $this->assertEquals('S-Устинов', $this->object->splitFullName('Устинов').'-Устинов');
    }
    public function testSplDetect718()
    {
        $this->assertEquals('S-Філіппов', $this->object->splitFullName('Філіппов').'-Філіппов');
    }
    public function testSplDetect719()
    {
        $this->assertEquals('S-Філатов', $this->object->splitFullName('Філатов').'-Філатов');
    }
    public function testSplDetect720()
    {
        $this->assertEquals('S-Федоров', $this->object->splitFullName('Федоров').'-Федоров');
    }
    public function testSplDetect721()
    {
        $this->assertEquals('S-Фомін', $this->object->splitFullName('Фомін').'-Фомін');
    }
    public function testSplDetect722()
    {
        $this->assertEquals('S-Фролов', $this->object->splitFullName('Фролов').'-Фролов');
    }
    public function testSplDetect723()
    {
        $this->assertEquals('S-Хілков', $this->object->splitFullName('Хілков').'-Хілков');
    }
    public function testSplDetect724()
    {
        $this->assertEquals('S-Хвостов', $this->object->splitFullName('Хвостов').'-Хвостов');
    }
    public function testSplDetect725()
    {
        $this->assertEquals('S-Худяков', $this->object->splitFullName('Худяков').'-Худяков');
    }
    public function testSplDetect726()
    {
        $this->assertEquals('S-Цвєтков', $this->object->splitFullName('Цвєтков').'-Цвєтков');
    }
    public function testSplDetect727()
    {
        $this->assertEquals('S-Чевкін', $this->object->splitFullName('Чевкін').'-Чевкін');
    }
    public function testSplDetect728()
    {
        $this->assertEquals('S-Черенков', $this->object->splitFullName('Черенков').'-Черенков');
    }
    public function testSplDetect729()
    {
        $this->assertEquals('S-Черепков', $this->object->splitFullName('Черепков').'-Черепков');
    }
    public function testSplDetect730()
    {
        $this->assertEquals('S-Чулков', $this->object->splitFullName('Чулков').'-Чулков');
    }
    public function testSplDetect731()
    {
        $this->assertEquals('S-Шевельов', $this->object->splitFullName('Шевельов').'-Шевельов');
    }
    public function testSplDetect732()
    {
        $this->assertEquals('S-Шеліхов', $this->object->splitFullName('Шеліхов').'-Шеліхов');
    }
    public function testSplDetect733()
    {
        $this->assertEquals('S-Шинін', $this->object->splitFullName('Шинін').'-Шинін');
    }
    public function testSplDetect734()
    {
        $this->assertEquals('S-Ширяєв', $this->object->splitFullName('Ширяєв').'-Ширяєв');
    }
    public function testSplDetect735()
    {
        $this->assertEquals('S-Шишов', $this->object->splitFullName('Шишов').'-Шишов');
    }
    public function testSplDetect736()
    {
        $this->assertEquals('S-Шулаков', $this->object->splitFullName('Шулаков').'-Шулаков');
    }
    public function testSplDetect737()
    {
        $this->assertEquals('S-Щапов', $this->object->splitFullName('Щапов').'-Щапов');
    }
    public function testSplDetect738()
    {
        $this->assertEquals('S-Щасливий', $this->object->splitFullName('Щасливий').'-Щасливий');
    }
    public function testSplDetect739()
    {
        $this->assertEquals('S-Яковлєв', $this->object->splitFullName('Яковлєв').'-Яковлєв');
    }
    public function testSplDetect740()
    {
        $this->assertEquals('S-Яшин', $this->object->splitFullName('Яшин').'-Яшин');
    }
    public function testSplDetect741()
    {
        $this->assertEquals('S-Єрмоленко', $this->object->splitFullName('Єрмоленко').'-Єрмоленко');
    }
    public function testSplDetect742()
    {
        $this->assertEquals('S-Єсипенко', $this->object->splitFullName('Єсипенко').'-Єсипенко');
    }
    public function testSplDetect743()
    {
        $this->assertEquals('S-Іваненко', $this->object->splitFullName('Іваненко').'-Іваненко');
    }
    public function testSplDetect744()
    {
        $this->assertEquals('S-Іванченко', $this->object->splitFullName('Іванченко').'-Іванченко');
    }
    public function testSplDetect745()
    {
        $this->assertEquals('S-Іванчук', $this->object->splitFullName('Іванчук').'-Іванчук');
    }
    public function testSplDetect746()
    {
        $this->assertEquals('S-Іванюк', $this->object->splitFullName('Іванюк').'-Іванюк');
    }
    public function testSplDetect747()
    {
        $this->assertEquals('S-Івахненко', $this->object->splitFullName('Івахненко').'-Івахненко');
    }
    public function testSplDetect748()
    {
        $this->assertEquals('S-Івашко', $this->object->splitFullName('Івашко').'-Івашко');
    }
    public function testSplDetect749()
    {
        $this->assertEquals('S-Іващенко', $this->object->splitFullName('Іващенко').'-Іващенко');
    }
    public function testSplDetect750()
    {
        $this->assertEquals('S-Івченко', $this->object->splitFullName('Івченко').'-Івченко');
    }
    public function testSplDetect751()
    {
        $this->assertEquals('S-Іллєнко', $this->object->splitFullName('Іллєнко').'-Іллєнко');
    }
    public function testSplDetect752()
    {
        $this->assertEquals('S-Ільницька', $this->object->splitFullName('Ільницька').'-Ільницька');
    }
    public function testSplDetect753()
    {
        $this->assertEquals('S-Ільченко', $this->object->splitFullName('Ільченко').'-Ільченко');
    }
    public function testSplDetect754()
    {
        $this->assertEquals('S-Іщенко', $this->object->splitFullName('Іщенко').'-Іщенко');
    }
    public function testSplDetect755()
    {
        $this->assertEquals('S-Абраменко', $this->object->splitFullName('Абраменко').'-Абраменко');
    }
    public function testSplDetect756()
    {
        $this->assertEquals('S-Абрамчук', $this->object->splitFullName('Абрамчук').'-Абрамчук');
    }
    public function testSplDetect757()
    {
        $this->assertEquals('S-Адамчук', $this->object->splitFullName('Адамчук').'-Адамчук');
    }
    public function testSplDetect758()
    {
        $this->assertEquals('S-Акуленко', $this->object->splitFullName('Акуленко').'-Акуленко');
    }
    public function testSplDetect759()
    {
        $this->assertEquals('S-Алексєєнко', $this->object->splitFullName('Алексєєнко').'-Алексєєнко');
    }
    public function testSplDetect760()
    {
        $this->assertEquals('S-Алексійчук', $this->object->splitFullName('Алексійчук').'-Алексійчук');
    }
    public function testSplDetect761()
    {
        $this->assertEquals('S-Андрієнко', $this->object->splitFullName('Андрієнко').'-Андрієнко');
    }
    public function testSplDetect762()
    {
        $this->assertEquals('S-Андрійчук', $this->object->splitFullName('Андрійчук').'-Андрійчук');
    }
    public function testSplDetect763()
    {
        $this->assertEquals('S-Андрейко', $this->object->splitFullName('Андрейко').'-Андрейко');
    }
    public function testSplDetect764()
    {
        $this->assertEquals('S-Андрущенко', $this->object->splitFullName('Андрущенко').'-Андрущенко');
    }
    public function testSplDetect765()
    {
        $this->assertEquals('S-Анищенко', $this->object->splitFullName('Анищенко').'-Анищенко');
    }
    public function testSplDetect766()
    {
        $this->assertEquals('S-Антонюк', $this->object->splitFullName('Антонюк').'-Антонюк');
    }
    public function testSplDetect767()
    {
        $this->assertEquals('S-Арсенич', $this->object->splitFullName('Арсенич').'-Арсенич');
    }
    public function testSplDetect768()
    {
        $this->assertEquals('S-Артюх', $this->object->splitFullName('Артюх').'-Артюх');
    }
    public function testSplDetect769()
    {
        $this->assertEquals('S-Атаманчук', $this->object->splitFullName('Атаманчук').'-Атаманчук');
    }
    public function testSplDetect770()
    {
        $this->assertEquals('S-Біла', $this->object->splitFullName('Біла').'-Біла');
    }
    public function testSplDetect771()
    {
        $this->assertEquals('S-Білас', $this->object->splitFullName('Білас').'-Білас');
    }
    public function testSplDetect772()
    {
        $this->assertEquals('S-Білодід', $this->object->splitFullName('Білодід').'-Білодід');
    }
    public function testSplDetect773()
    {
        $this->assertEquals('S-Білоус', $this->object->splitFullName('Білоус').'-Білоус');
    }
    public function testSplDetect774()
    {
        $this->assertEquals('S-Бабійчук', $this->object->splitFullName('Бабійчук').'-Бабійчук');
    }
    public function testSplDetect775()
    {
        $this->assertEquals('S-Бабак', $this->object->splitFullName('Бабак').'-Бабак');
    }
    public function testSplDetect776()
    {
        $this->assertEquals('S-Бабчук', $this->object->splitFullName('Бабчук').'-Бабчук');
    }
    public function testSplDetect777()
    {
        $this->assertEquals('S-Багмут', $this->object->splitFullName('Багмут').'-Багмут');
    }
    public function testSplDetect778()
    {
        $this->assertEquals('S-Багрій', $this->object->splitFullName('Багрій').'-Багрій');
    }
    public function testSplDetect779()
    {
        $this->assertEquals('S-Бадлак', $this->object->splitFullName('Бадлак').'-Бадлак');
    }
    public function testSplDetect780()
    {
        $this->assertEquals('S-Бажан', $this->object->splitFullName('Бажан').'-Бажан');
    }
    public function testSplDetect781()
    {
        $this->assertEquals('S-Балтача', $this->object->splitFullName('Балтача').'-Балтача');
    }
    public function testSplDetect782()
    {
        $this->assertEquals('S-Бандура', $this->object->splitFullName('Бандура').'-Бандура');
    }
    public function testSplDetect783()
    {
        $this->assertEquals('S-Баран', $this->object->splitFullName('Баран').'-Баран');
    }
    public function testSplDetect784()
    {
        $this->assertEquals('S-Баранець', $this->object->splitFullName('Баранець').'-Баранець');
    }
    public function testSplDetect785()
    {
        $this->assertEquals('S-Барановська', $this->object->splitFullName('Барановська').'-Барановська');
    }
    public function testSplDetect786()
    {
        $this->assertEquals('S-Баранюк', $this->object->splitFullName('Баранюк').'-Баранюк');
    }
    public function testSplDetect787()
    {
        $this->assertEquals('S-Батюк', $this->object->splitFullName('Батюк').'-Батюк');
    }
    public function testSplDetect788()
    {
        $this->assertEquals('S-Бачинська', $this->object->splitFullName('Бачинська').'-Бачинська');
    }
    public function testSplDetect789()
    {
        $this->assertEquals('S-Бебешко', $this->object->splitFullName('Бебешко').'-Бебешко');
    }
    public function testSplDetect790()
    {
        $this->assertEquals('S-Бевзенко', $this->object->splitFullName('Бевзенко').'-Бевзенко');
    }
    public function testSplDetect791()
    {
        $this->assertEquals('S-Березовчук', $this->object->splitFullName('Березовчук').'-Березовчук');
    }
    public function testSplDetect792()
    {
        $this->assertEquals('S-Божик', $this->object->splitFullName('Божик').'-Божик');
    }
    public function testSplDetect793()
    {
        $this->assertEquals('S-Божко', $this->object->splitFullName('Божко').'-Божко');
    }
    public function testSplDetect794()
    {
        $this->assertEquals('S-Бойко', $this->object->splitFullName('Бойко').'-Бойко');
    }
    public function testSplDetect795()
    {
        $this->assertEquals('S-Бойцун', $this->object->splitFullName('Бойцун').'-Бойцун');
    }
    public function testSplDetect796()
    {
        $this->assertEquals('S-Бойчак', $this->object->splitFullName('Бойчак').'-Бойчак');
    }
    public function testSplDetect797()
    {
        $this->assertEquals('S-Бойчук', $this->object->splitFullName('Бойчук').'-Бойчук');
    }
    public function testSplDetect798()
    {
        $this->assertEquals('S-Бондар', $this->object->splitFullName('Бондар').'-Бондар');
    }
    public function testSplDetect799()
    {
        $this->assertEquals('S-Бондаренко', $this->object->splitFullName('Бондаренко').'-Бондаренко');
    }
    public function testSplDetect800()
    {
        $this->assertEquals('S-Бондарчук', $this->object->splitFullName('Бондарчук').'-Бондарчук');
    }
    public function testSplDetect801()
    {
        $this->assertEquals('S-Борисенко', $this->object->splitFullName('Борисенко').'-Борисенко');
    }
    public function testSplDetect802()
    {
        $this->assertEquals('S-Борисикевич', $this->object->splitFullName('Борисикевич').'-Борисикевич');
    }
    public function testSplDetect803()
    {
        $this->assertEquals('S-Братусь', $this->object->splitFullName('Братусь').'-Братусь');
    }
    public function testSplDetect804()
    {
        $this->assertEquals('S-Букатевич', $this->object->splitFullName('Букатевич').'-Букатевич');
    }
    public function testSplDetect805()
    {
        $this->assertEquals('S-Бурбан', $this->object->splitFullName('Бурбан').'-Бурбан');
    }
    public function testSplDetect806()
    {
        $this->assertEquals('S-Бурячок', $this->object->splitFullName('Бурячок').'-Бурячок');
    }
    public function testSplDetect807()
    {
        $this->assertEquals('S-Бутейко', $this->object->splitFullName('Бутейко').'-Бутейко');
    }
    public function testSplDetect808()
    {
        $this->assertEquals('S-Бутенко', $this->object->splitFullName('Бутенко').'-Бутенко');
    }
    public function testSplDetect809()
    {
        $this->assertEquals('S-Бутник', $this->object->splitFullName('Бутник').'-Бутник');
    }
    public function testSplDetect810()
    {
        $this->assertEquals('S-Бухало', $this->object->splitFullName('Бухало').'-Бухало');
    }
    public function testSplDetect811()
    {
        $this->assertEquals('S-Василашко', $this->object->splitFullName('Василашко').'-Василашко');
    }
    public function testSplDetect812()
    {
        $this->assertEquals('S-Василенко', $this->object->splitFullName('Василенко').'-Василенко');
    }
    public function testSplDetect813()
    {
        $this->assertEquals('S-Васильченко', $this->object->splitFullName('Васильченко').'-Васильченко');
    }
    public function testSplDetect814()
    {
        $this->assertEquals('S-Васильчук', $this->object->splitFullName('Васильчук').'-Васильчук');
    }
    public function testSplDetect815()
    {
        $this->assertEquals('S-Васкул', $this->object->splitFullName('Васкул').'-Васкул');
    }
    public function testSplDetect816()
    {
        $this->assertEquals('S-Вахній', $this->object->splitFullName('Вахній').'-Вахній');
    }
    public function testSplDetect817()
    {
        $this->assertEquals('S-Ващенко-Захарченко', $this->object->splitFullName('Ващенко-Захарченко').'-Ващенко-Захарченко');
    }
    public function testSplDetect818()
    {
        $this->assertEquals('S-Вдовиченко', $this->object->splitFullName('Вдовиченко').'-Вдовиченко');
    }
    public function testSplDetect819()
    {
        $this->assertEquals('S-Величко', $this->object->splitFullName('Величко').'-Величко');
    }
    public function testSplDetect820()
    {
        $this->assertEquals('S-Вертипорох', $this->object->splitFullName('Вертипорох').'-Вертипорох');
    }
    public function testSplDetect821()
    {
        $this->assertEquals('S-Верхола', $this->object->splitFullName('Верхола').'-Верхола');
    }
    public function testSplDetect822()
    {
        $this->assertEquals('S-Винокур', $this->object->splitFullName('Винокур').'-Винокур');
    }
    public function testSplDetect823()
    {
        $this->assertEquals('S-Влох', $this->object->splitFullName('Влох').'-Влох');
    }
    public function testSplDetect824()
    {
        $this->assertEquals('S-Вобла', $this->object->splitFullName('Вобла').'-Вобла');
    }
    public function testSplDetect825()
    {
        $this->assertEquals('S-Вовк', $this->object->splitFullName('Вовк').'-Вовк');
    }
    public function testSplDetect826()
    {
        $this->assertEquals('S-Возняк', $this->object->splitFullName('Возняк').'-Возняк');
    }
    public function testSplDetect827()
    {
        $this->assertEquals('S-Волох', $this->object->splitFullName('Волох').'-Волох');
    }
    public function testSplDetect828()
    {
        $this->assertEquals('S-Волощук', $this->object->splitFullName('Волощук').'-Волощук');
    }
    public function testSplDetect829()
    {
        $this->assertEquals('S-Вороновська', $this->object->splitFullName('Вороновська').'-Вороновська');
    }
    public function testSplDetect830()
    {
        $this->assertEquals('S-Гавриленко', $this->object->splitFullName('Гавриленко').'-Гавриленко');
    }
    public function testSplDetect831()
    {
        $this->assertEquals('S-Гаврилюк', $this->object->splitFullName('Гаврилюк').'-Гаврилюк');
    }
    public function testSplDetect832()
    {
        $this->assertEquals('S-Гальченко', $this->object->splitFullName('Гальченко').'-Гальченко');
    }
    public function testSplDetect833()
    {
        $this->assertEquals('S-Гамалія', $this->object->splitFullName('Гамалія').'-Гамалія');
    }
    public function testSplDetect834()
    {
        $this->assertEquals('S-Ганицька', $this->object->splitFullName('Ганицька').'-Ганицька');
    }
    public function testSplDetect835()
    {
        $this->assertEquals('S-Гарань', $this->object->splitFullName('Гарань').'-Гарань');
    }
    public function testSplDetect836()
    {
        $this->assertEquals('S-Гармаш', $this->object->splitFullName('Гармаш').'-Гармаш');
    }
    public function testSplDetect837()
    {
        $this->assertEquals('S-Гасай', $this->object->splitFullName('Гасай').'-Гасай');
    }
    public function testSplDetect838()
    {
        $this->assertEquals('S-Гасюк', $this->object->splitFullName('Гасюк').'-Гасюк');
    }
    public function testSplDetect839()
    {
        $this->assertEquals('S-Герасименко', $this->object->splitFullName('Герасименко').'-Герасименко');
    }
    public function testSplDetect840()
    {
        $this->assertEquals('S-Геращенко', $this->object->splitFullName('Геращенко').'-Геращенко');
    }
    public function testSplDetect841()
    {
        $this->assertEquals('S-Герцик', $this->object->splitFullName('Герцик').'-Герцик');
    }
    public function testSplDetect842()
    {
        $this->assertEquals('S-Гладченко', $this->object->splitFullName('Гладченко').'-Гладченко');
    }
    public function testSplDetect843()
    {
        $this->assertEquals('S-Глоба', $this->object->splitFullName('Глоба').'-Глоба');
    }
    public function testSplDetect844()
    {
        $this->assertEquals('S-Гнатюк', $this->object->splitFullName('Гнатюк').'-Гнатюк');
    }
    public function testSplDetect845()
    {
        $this->assertEquals('S-Гоголь', $this->object->splitFullName('Гоголь').'-Гоголь');
    }
    public function testSplDetect846()
    {
        $this->assertEquals('S-Годунок', $this->object->splitFullName('Годунок').'-Годунок');
    }
    public function testSplDetect847()
    {
        $this->assertEquals('S-Головата', $this->object->splitFullName('Головата').'-Головата');
    }
    public function testSplDetect848()
    {
        $this->assertEquals('S-Головко', $this->object->splitFullName('Головко').'-Головко');
    }
    public function testSplDetect849()
    {
        $this->assertEquals('S-Голуб', $this->object->splitFullName('Голуб').'-Голуб');
    }
    public function testSplDetect850()
    {
        $this->assertEquals('S-Голубнича', $this->object->splitFullName('Голубнича').'-Голубнича');
    }
    public function testSplDetect851()
    {
        $this->assertEquals('S-Гонта', $this->object->splitFullName('Гонта').'-Гонта');
    }
    public function testSplDetect852()
    {
        $this->assertEquals('S-Гончар', $this->object->splitFullName('Гончар').'-Гончар');
    }
    public function testSplDetect853()
    {
        $this->assertEquals('S-Гончаренко', $this->object->splitFullName('Гончаренко').'-Гончаренко');
    }
    public function testSplDetect854()
    {
        $this->assertEquals('S-Горбаль', $this->object->splitFullName('Горбаль').'-Горбаль');
    }
    public function testSplDetect855()
    {
        $this->assertEquals('S-Гордієнко', $this->object->splitFullName('Гордієнко').'-Гордієнко');
    }
    public function testSplDetect856()
    {
        $this->assertEquals('S-Гошовська', $this->object->splitFullName('Гошовська').'-Гошовська');
    }
    public function testSplDetect857()
    {
        $this->assertEquals('S-Грінченко', $this->object->splitFullName('Грінченко').'-Грінченко');
    }
    public function testSplDetect858()
    {
        $this->assertEquals('S-Грабович', $this->object->splitFullName('Грабович').'-Грабович');
    }
    public function testSplDetect859()
    {
        $this->assertEquals('S-Грабовська', $this->object->splitFullName('Грабовська').'-Грабовська');
    }
    public function testSplDetect860()
    {
        $this->assertEquals('S-Григоренко', $this->object->splitFullName('Григоренко').'-Григоренко');
    }
    public function testSplDetect861()
    {
        $this->assertEquals('S-Григорович', $this->object->splitFullName('Григорович').'-Григорович');
    }
    public function testSplDetect862()
    {
        $this->assertEquals('S-Григорович-Барська', $this->object->splitFullName('Григорович-Барська').'-Григорович-Барська');
    }
    public function testSplDetect863()
    {
        $this->assertEquals('S-Григорчук', $this->object->splitFullName('Григорчук').'-Григорчук');
    }
    public function testSplDetect864()
    {
        $this->assertEquals('S-Грицак', $this->object->splitFullName('Грицак').'-Грицак');
    }
    public function testSplDetect865()
    {
        $this->assertEquals('S-Гриценко', $this->object->splitFullName('Гриценко').'-Гриценко');
    }
    public function testSplDetect866()
    {
        $this->assertEquals('S-Гришко', $this->object->splitFullName('Гришко').'-Гришко');
    }
    public function testSplDetect867()
    {
        $this->assertEquals('S-Гудзій', $this->object->splitFullName('Гудзій').'-Гудзій');
    }
    public function testSplDetect868()
    {
        $this->assertEquals('S-Гудзь', $this->object->splitFullName('Гудзь').'-Гудзь');
    }
    public function testSplDetect869()
    {
        $this->assertEquals('S-Гуменюк', $this->object->splitFullName('Гуменюк').'-Гуменюк');
    }
    public function testSplDetect870()
    {
        $this->assertEquals('S-Гунько', $this->object->splitFullName('Гунько').'-Гунько');
    }
    public function testSplDetect871()
    {
        $this->assertEquals('S-Діденко', $this->object->splitFullName('Діденко').'-Діденко');
    }
    public function testSplDetect872()
    {
        $this->assertEquals('S-Даниленко', $this->object->splitFullName('Даниленко').'-Даниленко');
    }
    public function testSplDetect873()
    {
        $this->assertEquals('S-Данькевич', $this->object->splitFullName('Данькевич').'-Данькевич');
    }
    public function testSplDetect874()
    {
        $this->assertEquals('S-Дараган', $this->object->splitFullName('Дараган').'-Дараган');
    }
    public function testSplDetect875()
    {
        $this->assertEquals('S-Дашкевич', $this->object->splitFullName('Дашкевич').'-Дашкевич');
    }
    public function testSplDetect876()
    {
        $this->assertEquals('S-Денисенко', $this->object->splitFullName('Денисенко').'-Денисенко');
    }
    public function testSplDetect877()
    {
        $this->assertEquals('S-Джус', $this->object->splitFullName('Джус').'-Джус');
    }
    public function testSplDetect878()
    {
        $this->assertEquals('S-Дзюба', $this->object->splitFullName('Дзюба').'-Дзюба');
    }
    public function testSplDetect879()
    {
        $this->assertEquals('S-Дикань', $this->object->splitFullName('Дикань').'-Дикань');
    }
    public function testSplDetect880()
    {
        $this->assertEquals('S-Дмитерко', $this->object->splitFullName('Дмитерко').'-Дмитерко');
    }
    public function testSplDetect881()
    {
        $this->assertEquals('S-Довженко', $this->object->splitFullName('Довженко').'-Довженко');
    }
    public function testSplDetect882()
    {
        $this->assertEquals('S-Дорош', $this->object->splitFullName('Дорош').'-Дорош');
    }
    public function testSplDetect883()
    {
        $this->assertEquals('S-Дорошенко', $this->object->splitFullName('Дорошенко').'-Дорошенко');
    }
    public function testSplDetect884()
    {
        $this->assertEquals('S-Доценко', $this->object->splitFullName('Доценко').'-Доценко');
    }
    public function testSplDetect885()
    {
        $this->assertEquals('S-Дочинець', $this->object->splitFullName('Дочинець').'-Дочинець');
    }
    public function testSplDetect886()
    {
        $this->assertEquals('S-Дудко', $this->object->splitFullName('Дудко').'-Дудко');
    }
    public function testSplDetect887()
    {
        $this->assertEquals('S-Дяченко', $this->object->splitFullName('Дяченко').'-Дяченко');
    }
    public function testSplDetect888()
    {
        $this->assertEquals('S-Ейбоженко', $this->object->splitFullName('Ейбоженко').'-Ейбоженко');
    }
    public function testSplDetect889()
    {
        $this->assertEquals('S-Жайворон', $this->object->splitFullName('Жайворон').'-Жайворон');
    }
    public function testSplDetect890()
    {
        $this->assertEquals('S-Жаліло', $this->object->splitFullName('Жаліло').'-Жаліло');
    }
    public function testSplDetect891()
    {
        $this->assertEquals('S-Жежерін', $this->object->splitFullName('Жежерін').'-Жежерін');
    }
    public function testSplDetect892()
    {
        $this->assertEquals('S-Желєзняк', $this->object->splitFullName('Желєзняк').'-Желєзняк');
    }
    public function testSplDetect893()
    {
        $this->assertEquals('S-Железняк', $this->object->splitFullName('Железняк').'-Железняк');
    }
    public function testSplDetect894()
    {
        $this->assertEquals('S-Жилко', $this->object->splitFullName('Жилко').'-Жилко');
    }
    public function testSplDetect895()
    {
        $this->assertEquals('S-Жирко', $this->object->splitFullName('Жирко').'-Жирко');
    }
    public function testSplDetect896()
    {
        $this->assertEquals('S-Жук', $this->object->splitFullName('Жук').'-Жук');
    }
    public function testSplDetect897()
    {
        $this->assertEquals('S-Жупанська', $this->object->splitFullName('Жупанська').'-Жупанська');
    }
    public function testSplDetect898()
    {
        $this->assertEquals('S-Заєць', $this->object->splitFullName('Заєць').'-Заєць');
    }
    public function testSplDetect899()
    {
        $this->assertEquals('S-Забашта', $this->object->splitFullName('Забашта').'-Забашта');
    }
    public function testSplDetect900()
    {
        $this->assertEquals('S-Заболотна', $this->object->splitFullName('Заболотна').'-Заболотна');
    }
    public function testSplDetect901()
    {
        $this->assertEquals('S-Завальнюк', $this->object->splitFullName('Завальнюк').'-Завальнюк');
    }
    public function testSplDetect902()
    {
        $this->assertEquals('S-Закусило', $this->object->splitFullName('Закусило').'-Закусило');
    }
    public function testSplDetect903()
    {
        $this->assertEquals('S-Залізняк', $this->object->splitFullName('Залізняк').'-Залізняк');
    }
    public function testSplDetect904()
    {
        $this->assertEquals('S-Заруба', $this->object->splitFullName('Заруба').'-Заруба');
    }
    public function testSplDetect905()
    {
        $this->assertEquals('S-Засядько', $this->object->splitFullName('Засядько').'-Засядько');
    }
    public function testSplDetect906()
    {
        $this->assertEquals('S-Захаренко', $this->object->splitFullName('Захаренко').'-Захаренко');
    }
    public function testSplDetect907()
    {
        $this->assertEquals('S-Захарчук', $this->object->splitFullName('Захарчук').'-Захарчук');
    }
    public function testSplDetect908()
    {
        $this->assertEquals('S-Заяць', $this->object->splitFullName('Заяць').'-Заяць');
    }
    public function testSplDetect909()
    {
        $this->assertEquals('S-Заячківська', $this->object->splitFullName('Заячківська').'-Заячківська');
    }
    public function testSplDetect910()
    {
        $this->assertEquals('S-Зленко', $this->object->splitFullName('Зленко').'-Зленко');
    }
    public function testSplDetect911()
    {
        $this->assertEquals('S-Золотаренко', $this->object->splitFullName('Золотаренко').'-Золотаренко');
    }
    public function testSplDetect912()
    {
        $this->assertEquals('S-Кабачок', $this->object->splitFullName('Кабачок').'-Кабачок');
    }
    public function testSplDetect913()
    {
        $this->assertEquals('S-Каганець', $this->object->splitFullName('Каганець').'-Каганець');
    }
    public function testSplDetect914()
    {
        $this->assertEquals('S-Калинович', $this->object->splitFullName('Калинович').'-Калинович');
    }
    public function testSplDetect915()
    {
        $this->assertEquals('S-Кармалюк', $this->object->splitFullName('Кармалюк').'-Кармалюк');
    }
    public function testSplDetect916()
    {
        $this->assertEquals('S-Карпенко', $this->object->splitFullName('Карпенко').'-Карпенко');
    }
    public function testSplDetect917()
    {
        $this->assertEquals('S-Кириленко', $this->object->splitFullName('Кириленко').'-Кириленко');
    }
    public function testSplDetect918()
    {
        $this->assertEquals('S-Китаста', $this->object->splitFullName('Китаста').'-Китаста');
    }
    public function testSplDetect919()
    {
        $this->assertEquals('S-Кицай', $this->object->splitFullName('Кицай').'-Кицай');
    }
    public function testSplDetect920()
    {
        $this->assertEquals('S-Клименко', $this->object->splitFullName('Клименко').'-Клименко');
    }
    public function testSplDetect921()
    {
        $this->assertEquals('S-Климчук', $this->object->splitFullName('Климчук').'-Климчук');
    }
    public function testSplDetect922()
    {
        $this->assertEquals('S-Кмета', $this->object->splitFullName('Кмета').'-Кмета');
    }
    public function testSplDetect923()
    {
        $this->assertEquals('S-Книш', $this->object->splitFullName('Книш').'-Книш');
    }
    public function testSplDetect924()
    {
        $this->assertEquals('S-Коваленко', $this->object->splitFullName('Коваленко').'-Коваленко');
    }
    public function testSplDetect925()
    {
        $this->assertEquals('S-Коваль', $this->object->splitFullName('Коваль').'-Коваль');
    }
    public function testSplDetect926()
    {
        $this->assertEquals('S-Ковальчик', $this->object->splitFullName('Ковальчик').'-Ковальчик');
    }
    public function testSplDetect927()
    {
        $this->assertEquals('S-Ковальчук', $this->object->splitFullName('Ковальчук').'-Ковальчук');
    }
    public function testSplDetect928()
    {
        $this->assertEquals('S-Кованько', $this->object->splitFullName('Кованько').'-Кованько');
    }
    public function testSplDetect929()
    {
        $this->assertEquals('S-Ковтун', $this->object->splitFullName('Ковтун').'-Ковтун');
    }
    public function testSplDetect930()
    {
        $this->assertEquals('S-Козаченко', $this->object->splitFullName('Козаченко').'-Козаченко');
    }
    public function testSplDetect931()
    {
        $this->assertEquals('S-Козачинська', $this->object->splitFullName('Козачинська').'-Козачинська');
    }
    public function testSplDetect932()
    {
        $this->assertEquals('S-Козачок', $this->object->splitFullName('Козачок').'-Козачок');
    }
    public function testSplDetect933()
    {
        $this->assertEquals('S-Козубенко', $this->object->splitFullName('Козубенко').'-Козубенко');
    }
    public function testSplDetect934()
    {
        $this->assertEquals('S-Колесник', $this->object->splitFullName('Колесник').'-Колесник');
    }
    public function testSplDetect935()
    {
        $this->assertEquals('S-Колодій', $this->object->splitFullName('Колодій').'-Колодій');
    }
    public function testSplDetect936()
    {
        $this->assertEquals('S-Колодна', $this->object->splitFullName('Колодна').'-Колодна');
    }
    public function testSplDetect937()
    {
        $this->assertEquals('S-Коломієць', $this->object->splitFullName('Коломієць').'-Коломієць');
    }
    public function testSplDetect938()
    {
        $this->assertEquals('S-Комар', $this->object->splitFullName('Комар').'-Комар');
    }
    public function testSplDetect939()
    {
        $this->assertEquals('S-Кондратюк', $this->object->splitFullName('Кондратюк').'-Кондратюк');
    }
    public function testSplDetect940()
    {
        $this->assertEquals('S-Корецька', $this->object->splitFullName('Корецька').'-Корецька');
    }
    public function testSplDetect941()
    {
        $this->assertEquals('S-Корж', $this->object->splitFullName('Корж').'-Корж');
    }
    public function testSplDetect942()
    {
        $this->assertEquals('S-Корнійчук', $this->object->splitFullName('Корнійчук').'-Корнійчук');
    }
    public function testSplDetect943()
    {
        $this->assertEquals('S-Коробка', $this->object->splitFullName('Коробка').'-Коробка');
    }
    public function testSplDetect944()
    {
        $this->assertEquals('S-Королюк', $this->object->splitFullName('Королюк').'-Королюк');
    }
    public function testSplDetect945()
    {
        $this->assertEquals('S-Короткевич', $this->object->splitFullName('Короткевич').'-Короткевич');
    }
    public function testSplDetect946()
    {
        $this->assertEquals('S-Корпанюк', $this->object->splitFullName('Корпанюк').'-Корпанюк');
    }
    public function testSplDetect947()
    {
        $this->assertEquals('S-Корчак', $this->object->splitFullName('Корчак').'-Корчак');
    }
    public function testSplDetect948()
    {
        $this->assertEquals('S-Корчинська', $this->object->splitFullName('Корчинська').'-Корчинська');
    }
    public function testSplDetect949()
    {
        $this->assertEquals('S-Косенко', $this->object->splitFullName('Косенко').'-Косенко');
    }
    public function testSplDetect950()
    {
        $this->assertEquals('S-Костенко', $this->object->splitFullName('Костенко').'-Костенко');
    }
    public function testSplDetect951()
    {
        $this->assertEquals('S-Коструба', $this->object->splitFullName('Коструба').'-Коструба');
    }
    public function testSplDetect952()
    {
        $this->assertEquals('S-Костюк', $this->object->splitFullName('Костюк').'-Костюк');
    }
    public function testSplDetect953()
    {
        $this->assertEquals('S-Котляр', $this->object->splitFullName('Котляр').'-Котляр');
    }
    public function testSplDetect954()
    {
        $this->assertEquals('S-Котляревська', $this->object->splitFullName('Котляревська').'-Котляревська');
    }
    public function testSplDetect955()
    {
        $this->assertEquals('S-Кравченко', $this->object->splitFullName('Кравченко').'-Кравченко');
    }
    public function testSplDetect956()
    {
        $this->assertEquals('S-Кравчук', $this->object->splitFullName('Кравчук').'-Кравчук');
    }
    public function testSplDetect957()
    {
        $this->assertEquals('S-Красовська', $this->object->splitFullName('Красовська').'-Красовська');
    }
    public function testSplDetect958()
    {
        $this->assertEquals('S-Криворучко', $this->object->splitFullName('Криворучко').'-Криворучко');
    }
    public function testSplDetect959()
    {
        $this->assertEquals('S-Крикуненко', $this->object->splitFullName('Крикуненко').'-Крикуненко');
    }
    public function testSplDetect960()
    {
        $this->assertEquals('S-Кузьмінська', $this->object->splitFullName('Кузьмінська').'-Кузьмінська');
    }
    public function testSplDetect961()
    {
        $this->assertEquals('S-Кулиняк', $this->object->splitFullName('Кулиняк').'-Кулиняк');
    }
    public function testSplDetect962()
    {
        $this->assertEquals('S-Кульчицька', $this->object->splitFullName('Кульчицька').'-Кульчицька');
    }
    public function testSplDetect963()
    {
        $this->assertEquals('S-Купчинська', $this->object->splitFullName('Купчинська').'-Купчинська');
    }
    public function testSplDetect964()
    {
        $this->assertEquals('S-Кухаренко', $this->object->splitFullName('Кухаренко').'-Кухаренко');
    }
    public function testSplDetect965()
    {
        $this->assertEquals('S-Куц', $this->object->splitFullName('Куц').'-Куц');
    }
    public function testSplDetect966()
    {
        $this->assertEquals('S-Куценко', $this->object->splitFullName('Куценко').'-Куценко');
    }
    public function testSplDetect967()
    {
        $this->assertEquals('S-Кучер', $this->object->splitFullName('Кучер').'-Кучер');
    }
    public function testSplDetect968()
    {
        $this->assertEquals('S-Кучеренко', $this->object->splitFullName('Кучеренко').'-Кучеренко');
    }
    public function testSplDetect969()
    {
        $this->assertEquals('S-Кушнір', $this->object->splitFullName('Кушнір').'-Кушнір');
    }
    public function testSplDetect970()
    {
        $this->assertEquals('S-Лаба', $this->object->splitFullName('Лаба').'-Лаба');
    }
    public function testSplDetect971()
    {
        $this->assertEquals('S-Лаврін', $this->object->splitFullName('Лаврін').'-Лаврін');
    }
    public function testSplDetect972()
    {
        $this->assertEquals('S-Лаврик', $this->object->splitFullName('Лаврик').'-Лаврик');
    }
    public function testSplDetect973()
    {
        $this->assertEquals('S-Лавриненко', $this->object->splitFullName('Лавриненко').'-Лавриненко');
    }
    public function testSplDetect974()
    {
        $this->assertEquals('S-Лазарчук', $this->object->splitFullName('Лазарчук').'-Лазарчук');
    }
    public function testSplDetect975()
    {
        $this->assertEquals('S-Лазорко', $this->object->splitFullName('Лазорко').'-Лазорко');
    }
    public function testSplDetect976()
    {
        $this->assertEquals('S-Левицька', $this->object->splitFullName('Левицька').'-Левицька');
    }
    public function testSplDetect977()
    {
        $this->assertEquals('S-Левченко', $this->object->splitFullName('Левченко').'-Левченко');
    }
    public function testSplDetect978()
    {
        $this->assertEquals('S-Лисенко', $this->object->splitFullName('Лисенко').'-Лисенко');
    }
    public function testSplDetect979()
    {
        $this->assertEquals('S-Литвиненко', $this->object->splitFullName('Литвиненко').'-Литвиненко');
    }
    public function testSplDetect980()
    {
        $this->assertEquals('S-Литовченко', $this->object->splitFullName('Литовченко').'-Литовченко');
    }
    public function testSplDetect981()
    {
        $this->assertEquals('S-Лозина-Лозинська', $this->object->splitFullName('Лозина-Лозинська').'-Лозина-Лозинська');
    }
    public function testSplDetect982()
    {
        $this->assertEquals('S-Лопатинська', $this->object->splitFullName('Лопатинська').'-Лопатинська');
    }
    public function testSplDetect983()
    {
        $this->assertEquals('S-Лукомська', $this->object->splitFullName('Лукомська').'-Лукомська');
    }
    public function testSplDetect984()
    {
        $this->assertEquals('S-Луценко', $this->object->splitFullName('Луценко').'-Луценко');
    }
    public function testSplDetect985()
    {
        $this->assertEquals('S-Людкевич', $this->object->splitFullName('Людкевич').'-Людкевич');
    }
    public function testSplDetect986()
    {
        $this->assertEquals('S-Ляшенко', $this->object->splitFullName('Ляшенко').'-Ляшенко');
    }
    public function testSplDetect987()
    {
        $this->assertEquals('S-Мірошниченко', $this->object->splitFullName('Мірошниченко').'-Мірошниченко');
    }
    public function testSplDetect988()
    {
        $this->assertEquals('S-Мірчук', $this->object->splitFullName('Мірчук').'-Мірчук');
    }
    public function testSplDetect989()
    {
        $this->assertEquals('S-Міщенко', $this->object->splitFullName('Міщенко').'-Міщенко');
    }
    public function testSplDetect990()
    {
        $this->assertEquals('S-Мазур', $this->object->splitFullName('Мазур').'-Мазур');
    }
    public function testSplDetect991()
    {
        $this->assertEquals('S-Макаренко', $this->object->splitFullName('Макаренко').'-Макаренко');
    }
    public function testSplDetect992()
    {
        $this->assertEquals('S-Максименко', $this->object->splitFullName('Максименко').'-Максименко');
    }
    public function testSplDetect993()
    {
        $this->assertEquals('S-Маланчук', $this->object->splitFullName('Маланчук').'-Маланчук');
    }
    public function testSplDetect994()
    {
        $this->assertEquals('S-Малишко', $this->object->splitFullName('Малишко').'-Малишко');
    }
    public function testSplDetect995()
    {
        $this->assertEquals('S-Малкович', $this->object->splitFullName('Малкович').'-Малкович');
    }
    public function testSplDetect996()
    {
        $this->assertEquals('S-Мамчур', $this->object->splitFullName('Мамчур').'-Мамчур');
    }
    public function testSplDetect997()
    {
        $this->assertEquals('S-Маркевич', $this->object->splitFullName('Маркевич').'-Маркевич');
    }
    public function testSplDetect998()
    {
        $this->assertEquals('S-Мартиненко', $this->object->splitFullName('Мартиненко').'-Мартиненко');
    }
    public function testSplDetect999()
    {
        $this->assertEquals('S-Марунчак', $this->object->splitFullName('Марунчак').'-Марунчак');
    }
    public function testSplDetect1000()
    {
        $this->assertEquals('S-Марценюк', $this->object->splitFullName('Марценюк').'-Марценюк');
    }
    public function testSplDetect1001()
    {
        $this->assertEquals('S-Марченко', $this->object->splitFullName('Марченко').'-Марченко');
    }
    public function testSplDetect1002()
    {
        $this->assertEquals('S-Марчук', $this->object->splitFullName('Марчук').'-Марчук');
    }
    public function testSplDetect1003()
    {
        $this->assertEquals('S-Масоха', $this->object->splitFullName('Масоха').'-Масоха');
    }
    public function testSplDetect1004()
    {
        $this->assertEquals('S-Матвієнко', $this->object->splitFullName('Матвієнко').'-Матвієнко');
    }
    public function testSplDetect1005()
    {
        $this->assertEquals('S-Матюшенко', $this->object->splitFullName('Матюшенко').'-Матюшенко');
    }
    public function testSplDetect1006()
    {
        $this->assertEquals('S-Маценко', $this->object->splitFullName('Маценко').'-Маценко');
    }
    public function testSplDetect1007()
    {
        $this->assertEquals('S-Мацюк', $this->object->splitFullName('Мацюк').'-Мацюк');
    }
    public function testSplDetect1008()
    {
        $this->assertEquals('S-Мельник', $this->object->splitFullName('Мельник').'-Мельник');
    }
    public function testSplDetect1009()
    {
        $this->assertEquals('S-Мельниченко', $this->object->splitFullName('Мельниченко').'-Мельниченко');
    }
    public function testSplDetect1010()
    {
        $this->assertEquals('S-Мельничук', $this->object->splitFullName('Мельничук').'-Мельничук');
    }
    public function testSplDetect1011()
    {
        $this->assertEquals('S-Микитенко', $this->object->splitFullName('Микитенко').'-Микитенко');
    }
    public function testSplDetect1012()
    {
        $this->assertEquals('S-Мирон', $this->object->splitFullName('Мирон').'-Мирон');
    }
    public function testSplDetect1013()
    {
        $this->assertEquals('S-Михайленко', $this->object->splitFullName('Михайленко').'-Михайленко');
    }
    public function testSplDetect1014()
    {
        $this->assertEquals('S-Михайличенко', $this->object->splitFullName('Михайличенко').'-Михайличенко');
    }
    public function testSplDetect1015()
    {
        $this->assertEquals('S-Михайлюк', $this->object->splitFullName('Михайлюк').'-Михайлюк');
    }
    public function testSplDetect1016()
    {
        $this->assertEquals('S-Мицик', $this->object->splitFullName('Мицик').'-Мицик');
    }
    public function testSplDetect1017()
    {
        $this->assertEquals('S-Мовчан', $this->object->splitFullName('Мовчан').'-Мовчан');
    }
    public function testSplDetect1018()
    {
        $this->assertEquals('S-Моргун', $this->object->splitFullName('Моргун').'-Моргун');
    }
    public function testSplDetect1019()
    {
        $this->assertEquals('S-Мороз', $this->object->splitFullName('Мороз').'-Мороз');
    }
    public function testSplDetect1020()
    {
        $this->assertEquals('S-Москаленко', $this->object->splitFullName('Москаленко').'-Москаленко');
    }
    public function testSplDetect1021()
    {
        $this->assertEquals('S-Москаль', $this->object->splitFullName('Москаль').'-Москаль');
    }
    public function testSplDetect1022()
    {
        $this->assertEquals('S-Мошак', $this->object->splitFullName('Мошак').'-Мошак');
    }
    public function testSplDetect1023()
    {
        $this->assertEquals('S-Муратова', $this->object->splitFullName('Муратова').'-Муратова');
    }
    public function testSplDetect1024()
    {
        $this->assertEquals('S-Мусієнко', $this->object->splitFullName('Мусієнко').'-Мусієнко');
    }
    public function testSplDetect1025()
    {
        $this->assertEquals('S-Назаренко', $this->object->splitFullName('Назаренко').'-Назаренко');
    }
    public function testSplDetect1026()
    {
        $this->assertEquals('S-Наливайко', $this->object->splitFullName('Наливайко').'-Наливайко');
    }
    public function testSplDetect1027()
    {
        $this->assertEquals('S-Негребецька', $this->object->splitFullName('Негребецька').'-Негребецька');
    }
    public function testSplDetect1028()
    {
        $this->assertEquals('S-Непорожній', $this->object->splitFullName('Непорожній').'-Непорожній');
    }
    public function testSplDetect1029()
    {
        $this->assertEquals('S-Нестеренко', $this->object->splitFullName('Нестеренко').'-Нестеренко');
    }
    public function testSplDetect1030()
    {
        $this->assertEquals('S-Нечай', $this->object->splitFullName('Нечай').'-Нечай');
    }
    public function testSplDetect1031()
    {
        $this->assertEquals('S-Нечипоренко', $this->object->splitFullName('Нечипоренко').'-Нечипоренко');
    }
    public function testSplDetect1032()
    {
        $this->assertEquals('S-Оберемченко', $this->object->splitFullName('Оберемченко').'-Оберемченко');
    }
    public function testSplDetect1033()
    {
        $this->assertEquals('S-Овчаренко', $this->object->splitFullName('Овчаренко').'-Овчаренко');
    }
    public function testSplDetect1034()
    {
        $this->assertEquals('S-Олійник', $this->object->splitFullName('Олійник').'-Олійник');
    }
    public function testSplDetect1035()
    {
        $this->assertEquals('S-Олексієнко', $this->object->splitFullName('Олексієнко').'-Олексієнко');
    }
    public function testSplDetect1036()
    {
        $this->assertEquals('S-Омельченко', $this->object->splitFullName('Омельченко').'-Омельченко');
    }
    public function testSplDetect1037()
    {
        $this->assertEquals('S-Омельчук', $this->object->splitFullName('Омельчук').'-Омельчук');
    }
    public function testSplDetect1038()
    {
        $this->assertEquals('S-Онищенко', $this->object->splitFullName('Онищенко').'-Онищенко');
    }
    public function testSplDetect1039()
    {
        $this->assertEquals('S-Онопенко', $this->object->splitFullName('Онопенко').'-Онопенко');
    }
    public function testSplDetect1040()
    {
        $this->assertEquals('S-Опанасенко', $this->object->splitFullName('Опанасенко').'-Опанасенко');
    }
    public function testSplDetect1041()
    {
        $this->assertEquals('S-Осадчук', $this->object->splitFullName('Осадчук').'-Осадчук');
    }
    public function testSplDetect1042()
    {
        $this->assertEquals('S-Осика', $this->object->splitFullName('Осика').'-Осика');
    }
    public function testSplDetect1043()
    {
        $this->assertEquals('S-Остапенко', $this->object->splitFullName('Остапенко').'-Остапенко');
    }
    public function testSplDetect1044()
    {
        $this->assertEquals('S-Остроградська', $this->object->splitFullName('Остроградська').'-Остроградська');
    }
    public function testSplDetect1045()
    {
        $this->assertEquals('S-Півторак', $this->object->splitFullName('Півторак').'-Півторак');
    }
    public function testSplDetect1046()
    {
        $this->assertEquals('S-Підопригора', $this->object->splitFullName('Підопригора').'-Підопригора');
    }
    public function testSplDetect1047()
    {
        $this->assertEquals('S-Павленко', $this->object->splitFullName('Павленко').'-Павленко');
    }
    public function testSplDetect1048()
    {
        $this->assertEquals('S-Павлюк', $this->object->splitFullName('Павлюк').'-Павлюк');
    }
    public function testSplDetect1049()
    {
        $this->assertEquals('S-Павлюченко', $this->object->splitFullName('Павлюченко').'-Павлюченко');
    }
    public function testSplDetect1050()
    {
        $this->assertEquals('S-Пазенко', $this->object->splitFullName('Пазенко').'-Пазенко');
    }
    public function testSplDetect1051()
    {
        $this->assertEquals('S-Паламарчук', $this->object->splitFullName('Паламарчук').'-Паламарчук');
    }
    public function testSplDetect1052()
    {
        $this->assertEquals('S-Панас', $this->object->splitFullName('Панас').'-Панас');
    }
    public function testSplDetect1053()
    {
        $this->assertEquals('S-Панасюк', $this->object->splitFullName('Панасюк').'-Панасюк');
    }
    public function testSplDetect1054()
    {
        $this->assertEquals('S-Паньківська', $this->object->splitFullName('Паньківська').'-Паньківська');
    }
    public function testSplDetect1055()
    {
        $this->assertEquals('S-Пархоменко', $this->object->splitFullName('Пархоменко').'-Пархоменко');
    }
    public function testSplDetect1056()
    {
        $this->assertEquals('S-Пасічник', $this->object->splitFullName('Пасічник').'-Пасічник');
    }
    public function testSplDetect1057()
    {
        $this->assertEquals('S-Пасько', $this->object->splitFullName('Пасько').'-Пасько');
    }
    public function testSplDetect1058()
    {
        $this->assertEquals('S-Пашко', $this->object->splitFullName('Пашко').'-Пашко');
    }
    public function testSplDetect1059()
    {
        $this->assertEquals('S-Пащенко', $this->object->splitFullName('Пащенко').'-Пащенко');
    }
    public function testSplDetect1060()
    {
        $this->assertEquals('S-Перебийніс', $this->object->splitFullName('Перебийніс').'-Перебийніс');
    }
    public function testSplDetect1061()
    {
        $this->assertEquals('S-Петренко', $this->object->splitFullName('Петренко').'-Петренко');
    }
    public function testSplDetect1062()
    {
        $this->assertEquals('S-Пилипенко', $this->object->splitFullName('Пилипенко').'-Пилипенко');
    }
    public function testSplDetect1063()
    {
        $this->assertEquals('S-Пилипчук', $this->object->splitFullName('Пилипчук').'-Пилипчук');
    }
    public function testSplDetect1064()
    {
        $this->assertEquals('S-Писаренко', $this->object->splitFullName('Писаренко').'-Писаренко');
    }
    public function testSplDetect1065()
    {
        $this->assertEquals('S-Писарчук', $this->object->splitFullName('Писарчук').'-Писарчук');
    }
    public function testSplDetect1066()
    {
        $this->assertEquals('S-Плющ', $this->object->splitFullName('Плющ').'-Плющ');
    }
    public function testSplDetect1067()
    {
        $this->assertEquals('S-Покотило', $this->object->splitFullName('Покотило').'-Покотило');
    }
    public function testSplDetect1068()
    {
        $this->assertEquals('S-Поліщук', $this->object->splitFullName('Поліщук').'-Поліщук');
    }
    public function testSplDetect1069()
    {
        $this->assertEquals('S-Польова', $this->object->splitFullName('Польова').'-Польова');
    }
    public function testSplDetect1070()
    {
        $this->assertEquals('S-Полянська', $this->object->splitFullName('Полянська').'-Полянська');
    }
    public function testSplDetect1071()
    {
        $this->assertEquals('S-Пономаренко', $this->object->splitFullName('Пономаренко').'-Пономаренко');
    }
    public function testSplDetect1072()
    {
        $this->assertEquals('S-Попадюк', $this->object->splitFullName('Попадюк').'-Попадюк');
    }
    public function testSplDetect1073()
    {
        $this->assertEquals('S-Попенко', $this->object->splitFullName('Попенко').'-Попенко');
    }
    public function testSplDetect1074()
    {
        $this->assertEquals('S-Потапенко', $this->object->splitFullName('Потапенко').'-Потапенко');
    }
    public function testSplDetect1075()
    {
        $this->assertEquals('S-Потебенько', $this->object->splitFullName('Потебенько').'-Потебенько');
    }
    public function testSplDetect1076()
    {
        $this->assertEquals('S-Прийма', $this->object->splitFullName('Прийма').'-Прийма');
    }
    public function testSplDetect1077()
    {
        $this->assertEquals('S-Приймак', $this->object->splitFullName('Приймак').'-Приймак');
    }
    public function testSplDetect1078()
    {
        $this->assertEquals('S-Присяжнюк', $this->object->splitFullName('Присяжнюк').'-Присяжнюк');
    }
    public function testSplDetect1079()
    {
        $this->assertEquals('S-Приходько', $this->object->splitFullName('Приходько').'-Приходько');
    }
    public function testSplDetect1080()
    {
        $this->assertEquals('S-Продан', $this->object->splitFullName('Продан').'-Продан');
    }
    public function testSplDetect1081()
    {
        $this->assertEquals('S-Проценко', $this->object->splitFullName('Проценко').'-Проценко');
    }
    public function testSplDetect1082()
    {
        $this->assertEquals('S-Проць', $this->object->splitFullName('Проць').'-Проць');
    }
    public function testSplDetect1083()
    {
        $this->assertEquals('S-Процюк', $this->object->splitFullName('Процюк').'-Процюк');
    }
    public function testSplDetect1084()
    {
        $this->assertEquals('S-Пушкар', $this->object->splitFullName('Пушкар').'-Пушкар');
    }
    public function testSplDetect1085()
    {
        $this->assertEquals('S-Різун', $this->object->splitFullName('Різун').'-Різун');
    }
    public function testSplDetect1086()
    {
        $this->assertEquals('S-Радченко', $this->object->splitFullName('Радченко').'-Радченко');
    }
    public function testSplDetect1087()
    {
        $this->assertEquals('S-Рибальченко', $this->object->splitFullName('Рибальченко').'-Рибальченко');
    }
    public function testSplDetect1088()
    {
        $this->assertEquals('S-Римар', $this->object->splitFullName('Римар').'-Римар');
    }
    public function testSplDetect1089()
    {
        $this->assertEquals('S-Рожок', $this->object->splitFullName('Рожок').'-Рожок');
    }
    public function testSplDetect1090()
    {
        $this->assertEquals('S-Романенко', $this->object->splitFullName('Романенко').'-Романенко');
    }
    public function testSplDetect1091()
    {
        $this->assertEquals('S-Романчук', $this->object->splitFullName('Романчук').'-Романчук');
    }
    public function testSplDetect1092()
    {
        $this->assertEquals('S-Романюк', $this->object->splitFullName('Романюк').'-Романюк');
    }
    public function testSplDetect1093()
    {
        $this->assertEquals('S-Рошкевич', $this->object->splitFullName('Рошкевич').'-Рошкевич');
    }
    public function testSplDetect1094()
    {
        $this->assertEquals('S-Рубан', $this->object->splitFullName('Рубан').'-Рубан');
    }
    public function testSplDetect1095()
    {
        $this->assertEquals('S-Руденко', $this->object->splitFullName('Руденко').'-Руденко');
    }
    public function testSplDetect1096()
    {
        $this->assertEquals('S-Рябовіл', $this->object->splitFullName('Рябовіл').'-Рябовіл');
    }
    public function testSplDetect1097()
    {
        $this->assertEquals('S-Сімашкевич', $this->object->splitFullName('Сімашкевич').'-Сімашкевич');
    }
    public function testSplDetect1098()
    {
        $this->assertEquals('S-Саєнко', $this->object->splitFullName('Саєнко').'-Саєнко');
    }
    public function testSplDetect1099()
    {
        $this->assertEquals('S-Савенко', $this->object->splitFullName('Савенко').'-Савенко');
    }
    public function testSplDetect1100()
    {
        $this->assertEquals('S-Савицька', $this->object->splitFullName('Савицька').'-Савицька');
    }
    public function testSplDetect1101()
    {
        $this->assertEquals('S-Савка', $this->object->splitFullName('Савка').'-Савка');
    }
    public function testSplDetect1102()
    {
        $this->assertEquals('S-Савченко', $this->object->splitFullName('Савченко').'-Савченко');
    }
    public function testSplDetect1103()
    {
        $this->assertEquals('S-Савчук', $this->object->splitFullName('Савчук').'-Савчук');
    }
    public function testSplDetect1104()
    {
        $this->assertEquals('S-Сак', $this->object->splitFullName('Сак').'-Сак');
    }
    public function testSplDetect1105()
    {
        $this->assertEquals('S-Самборська', $this->object->splitFullName('Самборська').'-Самборська');
    }
    public function testSplDetect1106()
    {
        $this->assertEquals('S-Самойлович', $this->object->splitFullName('Самойлович').'-Самойлович');
    }
    public function testSplDetect1107()
    {
        $this->assertEquals('S-Самусь', $this->object->splitFullName('Самусь').'-Самусь');
    }
    public function testSplDetect1108()
    {
        $this->assertEquals('S-Свида', $this->object->splitFullName('Свида').'-Свида');
    }
    public function testSplDetect1109()
    {
        $this->assertEquals('S-Семашко', $this->object->splitFullName('Семашко').'-Семашко');
    }
    public function testSplDetect1110()
    {
        $this->assertEquals('S-Семененко', $this->object->splitFullName('Семененко').'-Семененко');
    }
    public function testSplDetect1111()
    {
        $this->assertEquals('S-Семенець', $this->object->splitFullName('Семенець').'-Семенець');
    }
    public function testSplDetect1112()
    {
        $this->assertEquals('S-Семенина', $this->object->splitFullName('Семенина').'-Семенина');
    }
    public function testSplDetect1113()
    {
        $this->assertEquals('S-Семенченко', $this->object->splitFullName('Семенченко').'-Семенченко');
    }
    public function testSplDetect1114()
    {
        $this->assertEquals('S-Семенюк', $this->object->splitFullName('Семенюк').'-Семенюк');
    }
    public function testSplDetect1115()
    {
        $this->assertEquals('S-Семеренко', $this->object->splitFullName('Семеренко').'-Семеренко');
    }
    public function testSplDetect1116()
    {
        $this->assertEquals('S-Сидоренко', $this->object->splitFullName('Сидоренко').'-Сидоренко');
    }
    public function testSplDetect1117()
    {
        $this->assertEquals('S-Силенко', $this->object->splitFullName('Силенко').'-Силенко');
    }
    public function testSplDetect1118()
    {
        $this->assertEquals('S-Симоненко', $this->object->splitFullName('Симоненко').'-Симоненко');
    }
    public function testSplDetect1119()
    {
        $this->assertEquals('S-Симчич', $this->object->splitFullName('Симчич').'-Симчич');
    }
    public function testSplDetect1120()
    {
        $this->assertEquals('S-Скрипник', $this->object->splitFullName('Скрипник').'-Скрипник');
    }
    public function testSplDetect1121()
    {
        $this->assertEquals('S-Скуратівська', $this->object->splitFullName('Скуратівська').'-Скуратівська');
    }
    public function testSplDetect1122()
    {
        $this->assertEquals('S-Слободян', $this->object->splitFullName('Слободян').'-Слободян');
    }
    public function testSplDetect1123()
    {
        $this->assertEquals('S-Слободянюк', $this->object->splitFullName('Слободянюк').'-Слободянюк');
    }
    public function testSplDetect1124()
    {
        $this->assertEquals('S-Смик', $this->object->splitFullName('Смик').'-Смик');
    }
    public function testSplDetect1125()
    {
        $this->assertEquals('S-Смогоржевська', $this->object->splitFullName('Смогоржевська').'-Смогоржевська');
    }
    public function testSplDetect1126()
    {
        $this->assertEquals('S-Собчук', $this->object->splitFullName('Собчук').'-Собчук');
    }
    public function testSplDetect1127()
    {
        $this->assertEquals('S-Сопронюк', $this->object->splitFullName('Сопронюк').'-Сопронюк');
    }
    public function testSplDetect1128()
    {
        $this->assertEquals('S-Сорока', $this->object->splitFullName('Сорока').'-Сорока');
    }
    public function testSplDetect1129()
    {
        $this->assertEquals('S-Сохань', $this->object->splitFullName('Сохань').'-Сохань');
    }
    public function testSplDetect1130()
    {
        $this->assertEquals('S-Стадник', $this->object->splitFullName('Стадник').'-Стадник');
    }
    public function testSplDetect1131()
    {
        $this->assertEquals('S-Стельмах', $this->object->splitFullName('Стельмах').'-Стельмах');
    }
    public function testSplDetect1132()
    {
        $this->assertEquals('S-Степаненко', $this->object->splitFullName('Степаненко').'-Степаненко');
    }
    public function testSplDetect1133()
    {
        $this->assertEquals('S-Степура', $this->object->splitFullName('Степура').'-Степура');
    }
    public function testSplDetect1134()
    {
        $this->assertEquals('S-Стеценко', $this->object->splitFullName('Стеценко').'-Стеценко');
    }
    public function testSplDetect1135()
    {
        $this->assertEquals('S-Стецюк', $this->object->splitFullName('Стецюк').'-Стецюк');
    }
    public function testSplDetect1136()
    {
        $this->assertEquals('S-Струтинська', $this->object->splitFullName('Струтинська').'-Струтинська');
    }
    public function testSplDetect1137()
    {
        $this->assertEquals('S-Сулима', $this->object->splitFullName('Сулима').'-Сулима');
    }
    public function testSplDetect1138()
    {
        $this->assertEquals('S-Супруненко', $this->object->splitFullName('Супруненко').'-Супруненко');
    }
    public function testSplDetect1139()
    {
        $this->assertEquals('S-Тараненко', $this->object->splitFullName('Тараненко').'-Тараненко');
    }
    public function testSplDetect1140()
    {
        $this->assertEquals('S-Татаренко', $this->object->splitFullName('Татаренко').'-Татаренко');
    }
    public function testSplDetect1141()
    {
        $this->assertEquals('S-Теплицька', $this->object->splitFullName('Теплицька').'-Теплицька');
    }
    public function testSplDetect1142()
    {
        $this->assertEquals('S-Терещенко', $this->object->splitFullName('Терещенко').'-Терещенко');
    }
    public function testSplDetect1143()
    {
        $this->assertEquals('S-Терещук', $this->object->splitFullName('Терещук').'-Терещук');
    }
    public function testSplDetect1144()
    {
        $this->assertEquals('S-Тесленко', $this->object->splitFullName('Тесленко').'-Тесленко');
    }
    public function testSplDetect1145()
    {
        $this->assertEquals('S-Тимошенко', $this->object->splitFullName('Тимошенко').'-Тимошенко');
    }
    public function testSplDetect1146()
    {
        $this->assertEquals('S-Тимощук', $this->object->splitFullName('Тимощук').'-Тимощук');
    }
    public function testSplDetect1147()
    {
        $this->assertEquals('S-Тимчак', $this->object->splitFullName('Тимчак').'-Тимчак');
    }
    public function testSplDetect1148()
    {
        $this->assertEquals('S-Титаренко', $this->object->splitFullName('Титаренко').'-Титаренко');
    }
    public function testSplDetect1149()
    {
        $this->assertEquals('S-Тищенко', $this->object->splitFullName('Тищенко').'-Тищенко');
    }
    public function testSplDetect1150()
    {
        $this->assertEquals('S-Ткач', $this->object->splitFullName('Ткач').'-Ткач');
    }
    public function testSplDetect1151()
    {
        $this->assertEquals('S-Ткаченко', $this->object->splitFullName('Ткаченко').'-Ткаченко');
    }
    public function testSplDetect1152()
    {
        $this->assertEquals('S-Ткачук', $this->object->splitFullName('Ткачук').'-Ткачук');
    }
    public function testSplDetect1153()
    {
        $this->assertEquals('S-Толочко', $this->object->splitFullName('Толочко').'-Толочко');
    }
    public function testSplDetect1154()
    {
        $this->assertEquals('S-Томенко', $this->object->splitFullName('Томенко').'-Томенко');
    }
    public function testSplDetect1155()
    {
        $this->assertEquals('S-Тулуб', $this->object->splitFullName('Тулуб').'-Тулуб');
    }
    public function testSplDetect1156()
    {
        $this->assertEquals('S-Удовенко', $this->object->splitFullName('Удовенко').'-Удовенко');
    }
    public function testSplDetect1157()
    {
        $this->assertEquals('S-Удовиченко', $this->object->splitFullName('Удовиченко').'-Удовиченко');
    }
    public function testSplDetect1158()
    {
        $this->assertEquals('S-Усенко', $this->object->splitFullName('Усенко').'-Усенко');
    }
    public function testSplDetect1159()
    {
        $this->assertEquals('S-Філоненко', $this->object->splitFullName('Філоненко').'-Філоненко');
    }
    public function testSplDetect1160()
    {
        $this->assertEquals('S-Феденко', $this->object->splitFullName('Феденко').'-Феденко');
    }
    public function testSplDetect1161()
    {
        $this->assertEquals('S-Федоренко', $this->object->splitFullName('Федоренко').'-Федоренко');
    }
    public function testSplDetect1162()
    {
        $this->assertEquals('S-Федорук', $this->object->splitFullName('Федорук').'-Федорук');
    }
    public function testSplDetect1163()
    {
        $this->assertEquals('S-Фещенко', $this->object->splitFullName('Фещенко').'-Фещенко');
    }
    public function testSplDetect1164()
    {
        $this->assertEquals('S-Фоменко', $this->object->splitFullName('Фоменко').'-Фоменко');
    }
    public function testSplDetect1165()
    {
        $this->assertEquals('S-Ханенко', $this->object->splitFullName('Ханенко').'-Ханенко');
    }
    public function testSplDetect1166()
    {
        $this->assertEquals('S-Харчук', $this->object->splitFullName('Харчук').'-Харчук');
    }
    public function testSplDetect1167()
    {
        $this->assertEquals('S-Хміляр', $this->object->splitFullName('Хміляр').'-Хміляр');
    }
    public function testSplDetect1168()
    {
        $this->assertEquals('S-Хмара', $this->object->splitFullName('Хмара').'-Хмара');
    }
    public function testSplDetect1169()
    {
        $this->assertEquals('S-Холодовська', $this->object->splitFullName('Холодовська').'-Холодовська');
    }
    public function testSplDetect1170()
    {
        $this->assertEquals('S-Хоменко', $this->object->splitFullName('Хоменко').'-Хоменко');
    }
    public function testSplDetect1171()
    {
        $this->assertEquals('S-Царук', $this->object->splitFullName('Царук').'-Царук');
    }
    public function testSplDetect1172()
    {
        $this->assertEquals('S-Цибуленко', $this->object->splitFullName('Цибуленко').'-Цибуленко');
    }
    public function testSplDetect1173()
    {
        $this->assertEquals('S-Цюпа', $this->object->splitFullName('Цюпа').'-Цюпа');
    }
    public function testSplDetect1174()
    {
        $this->assertEquals('S-Чабаненко', $this->object->splitFullName('Чабаненко').'-Чабаненко');
    }
    public function testSplDetect1175()
    {
        $this->assertEquals('S-Чередниченко', $this->object->splitFullName('Чередниченко').'-Чередниченко');
    }
    public function testSplDetect1176()
    {
        $this->assertEquals('S-Чернявська', $this->object->splitFullName('Чернявська').'-Чернявська');
    }
    public function testSplDetect1177()
    {
        $this->assertEquals('S-Чорна', $this->object->splitFullName('Чорна').'-Чорна');
    }
    public function testSplDetect1178()
    {
        $this->assertEquals('S-Чорновіл', $this->object->splitFullName('Чорновіл').'-Чорновіл');
    }
    public function testSplDetect1179()
    {
        $this->assertEquals('S-Чуйкевич', $this->object->splitFullName('Чуйкевич').'-Чуйкевич');
    }
    public function testSplDetect1180()
    {
        $this->assertEquals('S-Чумак', $this->object->splitFullName('Чумак').'-Чумак');
    }
    public function testSplDetect1181()
    {
        $this->assertEquals('S-Чумаченко', $this->object->splitFullName('Чумаченко').'-Чумаченко');
    }
    public function testSplDetect1182()
    {
        $this->assertEquals('S-Шахрай', $this->object->splitFullName('Шахрай').'-Шахрай');
    }
    public function testSplDetect1183()
    {
        $this->assertEquals('S-Шевченко', $this->object->splitFullName('Шевченко').'-Шевченко');
    }
    public function testSplDetect1184()
    {
        $this->assertEquals('S-Шевчук', $this->object->splitFullName('Шевчук').'-Шевчук');
    }
    public function testSplDetect1185()
    {
        $this->assertEquals('S-Шелест', $this->object->splitFullName('Шелест').'-Шелест');
    }
    public function testSplDetect1186()
    {
        $this->assertEquals('S-Шинкарук', $this->object->splitFullName('Шинкарук').'-Шинкарук');
    }
    public function testSplDetect1187()
    {
        $this->assertEquals('S-Шкрібляк', $this->object->splitFullName('Шкрібляк').'-Шкрібляк');
    }
    public function testSplDetect1188()
    {
        $this->assertEquals('S-Шнайдер', $this->object->splitFullName('Шнайдер').'-Шнайдер');
    }
    public function testSplDetect1189()
    {
        $this->assertEquals('S-Шовкопляс', $this->object->splitFullName('Шовкопляс').'-Шовкопляс');
    }
    public function testSplDetect1190()
    {
        $this->assertEquals('S-Шульга', $this->object->splitFullName('Шульга').'-Шульга');
    }
    public function testSplDetect1191()
    {
        $this->assertEquals('S-Шухевич', $this->object->splitFullName('Шухевич').'-Шухевич');
    }
    public function testSplDetect1192()
    {
        $this->assertEquals('S-Щерба', $this->object->splitFullName('Щерба').'-Щерба');
    }
    public function testSplDetect1193()
    {
        $this->assertEquals('S-Щербак', $this->object->splitFullName('Щербак').'-Щербак');
    }
    public function testSplDetect1194()
    {
        $this->assertEquals('S-Щербань', $this->object->splitFullName('Щербань').'-Щербань');
    }
    public function testSplDetect1195()
    {
        $this->assertEquals('S-Юрженко', $this->object->splitFullName('Юрженко').'-Юрженко');
    }
    public function testSplDetect1196()
    {
        $this->assertEquals('S-Юрченко', $this->object->splitFullName('Юрченко').'-Юрченко');
    }
    public function testSplDetect1197()
    {
        $this->assertEquals('S-Юхименко', $this->object->splitFullName('Юхименко').'-Юхименко');
    }
    public function testSplDetect1198()
    {
        $this->assertEquals('S-Ющенко', $this->object->splitFullName('Ющенко').'-Ющенко');
    }
    public function testSplDetect1199()
    {
        $this->assertEquals('S-Яковенко', $this->object->splitFullName('Яковенко').'-Яковенко');
    }
    public function testSplDetect1200()
    {
        $this->assertEquals('S-Яковина', $this->object->splitFullName('Яковина').'-Яковина');
    }
    public function testSplDetect1201()
    {
        $this->assertEquals('S-Янко', $this->object->splitFullName('Янко').'-Янко');
    }
    public function testSplDetect1202()
    {
        $this->assertEquals('S-Ярема', $this->object->splitFullName('Ярема').'-Ярема');
    }
    public function testSplDetect1203()
    {
        $this->assertEquals('S-Яременко', $this->object->splitFullName('Яременко').'-Яременко');
    }
    public function testSplDetect1204()
    {
        $this->assertEquals('S-Яремко', $this->object->splitFullName('Яремко').'-Яремко');
    }
    public function testSplDetect1205()
    {
        $this->assertEquals('S-Яремчук', $this->object->splitFullName('Яремчук').'-Яремчук');
    }
    public function testSplDetect1206()
    {
        $this->assertEquals('S-Ярмоленко', $this->object->splitFullName('Ярмоленко').'-Ярмоленко');
    }
    public function testSplDetect1207()
    {
        $this->assertEquals('S-Ярмолюк', $this->object->splitFullName('Ярмолюк').'-Ярмолюк');
    }
    public function testSplDetect1208()
    {
        $this->assertEquals('S-Ярошенко', $this->object->splitFullName('Ярошенко').'-Ярошенко');
    }
    public function testSplDetect1209()
    {
        $this->assertEquals('S-Яценко', $this->object->splitFullName('Яценко').'-Яценко');
    }
    public function testSplDetect1210()
    {
        $this->assertEquals('S-Ященко', $this->object->splitFullName('Ященко').'-Ященко');
    }
    public function testSplDetect1211()
    {
        $this->assertEquals('S-Ґалаґан', $this->object->splitFullName('Ґалаґан').'-Ґалаґан');
    }
    public function testSplDetect1212()
    {
        $this->assertEquals('S-Євсєєва', $this->object->splitFullName('Євсєєва').'-Євсєєва');
    }
    public function testSplDetect1213()
    {
        $this->assertEquals('S-Єгорова', $this->object->splitFullName('Єгорова').'-Єгорова');
    }
    public function testSplDetect1214()
    {
        $this->assertEquals('S-Єлізарова', $this->object->splitFullName('Єлізарова').'-Єлізарова');
    }
    public function testSplDetect1215()
    {
        $this->assertEquals('S-Єрмилова', $this->object->splitFullName('Єрмилова').'-Єрмилова');
    }
    public function testSplDetect1216()
    {
        $this->assertEquals('S-Єрофєєва', $this->object->splitFullName('Єрофєєва').'-Єрофєєва');
    }
    public function testSplDetect1217()
    {
        $this->assertEquals('S-Єршова', $this->object->splitFullName('Єршова').'-Єршова');
    }
    public function testSplDetect1218()
    {
        $this->assertEquals('S-Єфімова', $this->object->splitFullName('Єфімова').'-Єфімова');
    }
    public function testSplDetect1219()
    {
        $this->assertEquals('S-Єфремова', $this->object->splitFullName('Єфремова').'-Єфремова');
    }
    public function testSplDetect1220()
    {
        $this->assertEquals('S-Іванова', $this->object->splitFullName('Іванова').'-Іванова');
    }
    public function testSplDetect1221()
    {
        $this->assertEquals('S-Ігнатова', $this->object->splitFullName('Ігнатова').'-Ігнатова');
    }
    public function testSplDetect1222()
    {
        $this->assertEquals('S-Іллюшина', $this->object->splitFullName('Іллюшина').'-Іллюшина');
    }
    public function testSplDetect1223()
    {
        $this->assertEquals('S-Ільїна', $this->object->splitFullName('Ільїна').'-Ільїна');
    }
    public function testSplDetect1224()
    {
        $this->assertEquals('S-Аєдоницька', $this->object->splitFullName('Аєдоницька').'-Аєдоницька');
    }
    public function testSplDetect1225()
    {
        $this->assertEquals('S-Абатурова', $this->object->splitFullName('Абатурова').'-Абатурова');
    }
    public function testSplDetect1226()
    {
        $this->assertEquals('S-Абдулова', $this->object->splitFullName('Абдулова').'-Абдулова');
    }
    public function testSplDetect1227()
    {
        $this->assertEquals('S-Абрамова', $this->object->splitFullName('Абрамова').'-Абрамова');
    }
    public function testSplDetect1228()
    {
        $this->assertEquals('S-Авілова', $this->object->splitFullName('Авілова').'-Авілова');
    }
    public function testSplDetect1229()
    {
        $this->assertEquals('S-Авдєєнко', $this->object->splitFullName('Авдєєнко').'-Авдєєнко');
    }
    public function testSplDetect1230()
    {
        $this->assertEquals('S-Аврамова', $this->object->splitFullName('Аврамова').'-Аврамова');
    }
    public function testSplDetect1231()
    {
        $this->assertEquals('S-Алексєєва', $this->object->splitFullName('Алексєєва').'-Алексєєва');
    }
    public function testSplDetect1232()
    {
        $this->assertEquals('S-Александрова', $this->object->splitFullName('Александрова').'-Александрова');
    }
    public function testSplDetect1233()
    {
        $this->assertEquals('S-Альошина', $this->object->splitFullName('Альошина').'-Альошина');
    }
    public function testSplDetect1234()
    {
        $this->assertEquals('S-Анісімова', $this->object->splitFullName('Анісімова').'-Анісімова');
    }
    public function testSplDetect1235()
    {
        $this->assertEquals('S-Анісова', $this->object->splitFullName('Анісова').'-Анісова');
    }
    public function testSplDetect1236()
    {
        $this->assertEquals('S-Ананьєва', $this->object->splitFullName('Ананьєва').'-Ананьєва');
    }
    public function testSplDetect1237()
    {
        $this->assertEquals('S-Андріанова', $this->object->splitFullName('Андріанова').'-Андріанова');
    }
    public function testSplDetect1238()
    {
        $this->assertEquals('S-Андріяшева', $this->object->splitFullName('Андріяшева').'-Андріяшева');
    }
    public function testSplDetect1239()
    {
        $this->assertEquals('S-Андреєва', $this->object->splitFullName('Андреєва').'-Андреєва');
    }
    public function testSplDetect1240()
    {
        $this->assertEquals('S-Антипова', $this->object->splitFullName('Антипова').'-Антипова');
    }
    public function testSplDetect1241()
    {
        $this->assertEquals('S-Антонова', $this->object->splitFullName('Антонова').'-Антонова');
    }
    public function testSplDetect1242()
    {
        $this->assertEquals('S-Анциферова', $this->object->splitFullName('Анциферова').'-Анциферова');
    }
    public function testSplDetect1243()
    {
        $this->assertEquals('S-Апухтіна', $this->object->splitFullName('Апухтіна').'-Апухтіна');
    }
    public function testSplDetect1244()
    {
        $this->assertEquals('S-Арбузова', $this->object->splitFullName('Арбузова').'-Арбузова');
    }
    public function testSplDetect1245()
    {
        $this->assertEquals('S-Аржанова', $this->object->splitFullName('Аржанова').'-Аржанова');
    }
    public function testSplDetect1246()
    {
        $this->assertEquals('S-Архипова', $this->object->splitFullName('Архипова').'-Архипова');
    }
    public function testSplDetect1247()
    {
        $this->assertEquals('S-Арцибушева', $this->object->splitFullName('Арцибушева').'-Арцибушева');
    }
    public function testSplDetect1248()
    {
        $this->assertEquals('S-Астраханцева', $this->object->splitFullName('Астраханцева').'-Астраханцева');
    }
    public function testSplDetect1249()
    {
        $this->assertEquals('S-Афіногенова', $this->object->splitFullName('Афіногенова').'-Афіногенова');
    }
    public function testSplDetect1250()
    {
        $this->assertEquals('S-Афанасьєва', $this->object->splitFullName('Афанасьєва').'-Афанасьєва');
    }
    public function testSplDetect1251()
    {
        $this->assertEquals('S-Бєлова', $this->object->splitFullName('Бєлова').'-Бєлова');
    }
    public function testSplDetect1252()
    {
        $this->assertEquals('S-Бєлоглазова', $this->object->splitFullName('Бєлоглазова').'-Бєлоглазова');
    }
    public function testSplDetect1253()
    {
        $this->assertEquals('S-Бєлоусова', $this->object->splitFullName('Бєлоусова').'-Бєлоусова');
    }
    public function testSplDetect1254()
    {
        $this->assertEquals('S-Бєляєва', $this->object->splitFullName('Бєляєва').'-Бєляєва');
    }
    public function testSplDetect1255()
    {
        $this->assertEquals('S-Бібикова', $this->object->splitFullName('Бібикова').'-Бібикова');
    }
    public function testSplDetect1256()
    {
        $this->assertEquals('S-Бажанова', $this->object->splitFullName('Бажанова').'-Бажанова');
    }
    public function testSplDetect1257()
    {
        $this->assertEquals('S-Баранова', $this->object->splitFullName('Баранова').'-Баранова');
    }
    public function testSplDetect1258()
    {
        $this->assertEquals('S-Баришнікова', $this->object->splitFullName('Баришнікова').'-Баришнікова');
    }
    public function testSplDetect1259()
    {
        $this->assertEquals('S-Барсова', $this->object->splitFullName('Барсова').'-Барсова');
    }
    public function testSplDetect1260()
    {
        $this->assertEquals('S-Батюшкова', $this->object->splitFullName('Батюшкова').'-Батюшкова');
    }
    public function testSplDetect1261()
    {
        $this->assertEquals('S-Бикова', $this->object->splitFullName('Бикова').'-Бикова');
    }
    public function testSplDetect1262()
    {
        $this->assertEquals('S-Блохіна', $this->object->splitFullName('Блохіна').'-Блохіна');
    }
    public function testSplDetect1263()
    {
        $this->assertEquals('S-Боброва', $this->object->splitFullName('Боброва').'-Боброва');
    }
    public function testSplDetect1264()
    {
        $this->assertEquals('S-Богданова', $this->object->splitFullName('Богданова').'-Богданова');
    }
    public function testSplDetect1265()
    {
        $this->assertEquals('S-Богомазова', $this->object->splitFullName('Богомазова').'-Богомазова');
    }
    public function testSplDetect1266()
    {
        $this->assertEquals('S-Бойкова', $this->object->splitFullName('Бойкова').'-Бойкова');
    }
    public function testSplDetect1267()
    {
        $this->assertEquals('S-Большакова', $this->object->splitFullName('Большакова').'-Большакова');
    }
    public function testSplDetect1268()
    {
        $this->assertEquals('S-Борисова', $this->object->splitFullName('Борисова').'-Борисова');
    }
    public function testSplDetect1269()
    {
        $this->assertEquals('S-Бочкова', $this->object->splitFullName('Бочкова').'-Бочкова');
    }
    public function testSplDetect1270()
    {
        $this->assertEquals('S-Бризгалова', $this->object->splitFullName('Бризгалова').'-Бризгалова');
    }
    public function testSplDetect1271()
    {
        $this->assertEquals('S-Брусилова', $this->object->splitFullName('Брусилова').'-Брусилова');
    }
    public function testSplDetect1272()
    {
        $this->assertEquals('S-Бутурліна', $this->object->splitFullName('Бутурліна').'-Бутурліна');
    }
    public function testSplDetect1273()
    {
        $this->assertEquals('S-Бутусова', $this->object->splitFullName('Бутусова').'-Бутусова');
    }
    public function testSplDetect1274()
    {
        $this->assertEquals('S-Варламова', $this->object->splitFullName('Варламова').'-Варламова');
    }
    public function testSplDetect1275()
    {
        $this->assertEquals('S-Васильєва', $this->object->splitFullName('Васильєва').'-Васильєва');
    }
    public function testSplDetect1276()
    {
        $this->assertEquals('S-Виноградова', $this->object->splitFullName('Виноградова').'-Виноградова');
    }
    public function testSplDetect1277()
    {
        $this->assertEquals('S-Власова', $this->object->splitFullName('Власова').'-Власова');
    }
    public function testSplDetect1278()
    {
        $this->assertEquals('S-Внукова', $this->object->splitFullName('Внукова').'-Внукова');
    }
    public function testSplDetect1279()
    {
        $this->assertEquals('S-Волкова', $this->object->splitFullName('Волкова').'-Волкова');
    }
    public function testSplDetect1280()
    {
        $this->assertEquals('S-Воробей', $this->object->splitFullName('Воробей').'-Воробей');
    }
    public function testSplDetect1281()
    {
        $this->assertEquals('S-Воробйова', $this->object->splitFullName('Воробйова').'-Воробйова');
    }
    public function testSplDetect1282()
    {
        $this->assertEquals('S-Вороніна', $this->object->splitFullName('Вороніна').'-Вороніна');
    }
    public function testSplDetect1283()
    {
        $this->assertEquals('S-Воронцова', $this->object->splitFullName('Воронцова').'-Воронцова');
    }
    public function testSplDetect1284()
    {
        $this->assertEquals('S-Ворошилова', $this->object->splitFullName('Ворошилова').'-Ворошилова');
    }
    public function testSplDetect1285()
    {
        $this->assertEquals('S-Гаврилова', $this->object->splitFullName('Гаврилова').'-Гаврилова');
    }
    public function testSplDetect1286()
    {
        $this->assertEquals('S-Герасимова', $this->object->splitFullName('Герасимова').'-Герасимова');
    }
    public function testSplDetect1287()
    {
        $this->assertEquals('S-Гончарова', $this->object->splitFullName('Гончарова').'-Гончарова');
    }
    public function testSplDetect1288()
    {
        $this->assertEquals('S-Горбунова', $this->object->splitFullName('Горбунова').'-Горбунова');
    }
    public function testSplDetect1289()
    {
        $this->assertEquals('S-Горчакова', $this->object->splitFullName('Горчакова').'-Горчакова');
    }
    public function testSplDetect1290()
    {
        $this->assertEquals('S-Горшкова', $this->object->splitFullName('Горшкова').'-Горшкова');
    }
    public function testSplDetect1291()
    {
        $this->assertEquals('S-Громова', $this->object->splitFullName('Громова').'-Громова');
    }
    public function testSplDetect1292()
    {
        $this->assertEquals('S-Гусєва', $this->object->splitFullName('Гусєва').'-Гусєва');
    }
    public function testSplDetect1293()
    {
        $this->assertEquals('S-Давидова', $this->object->splitFullName('Давидова').'-Давидова');
    }
    public function testSplDetect1294()
    {
        $this->assertEquals('S-Данилова', $this->object->splitFullName('Данилова').'-Данилова');
    }
    public function testSplDetect1295()
    {
        $this->assertEquals('S-Дарагана', $this->object->splitFullName('Дарагана').'-Дарагана');
    }
    public function testSplDetect1296()
    {
        $this->assertEquals('S-Дементьєва', $this->object->splitFullName('Дементьєва').'-Дементьєва');
    }
    public function testSplDetect1297()
    {
        $this->assertEquals('S-Денисова', $this->object->splitFullName('Денисова').'-Денисова');
    }
    public function testSplDetect1298()
    {
        $this->assertEquals('S-Дмитрієва', $this->object->splitFullName('Дмитрієва').'-Дмитрієва');
    }
    public function testSplDetect1299()
    {
        $this->assertEquals('S-Добролюбова', $this->object->splitFullName('Добролюбова').'-Добролюбова');
    }
    public function testSplDetect1300()
    {
        $this->assertEquals('S-Донськая', $this->object->splitFullName('Донськая').'-Донськая');
    }
    public function testSplDetect1301()
    {
        $this->assertEquals('S-Дорофєєва', $this->object->splitFullName('Дорофєєва').'-Дорофєєва');
    }
    public function testSplDetect1302()
    {
        $this->assertEquals('S-Дуброва', $this->object->splitFullName('Дуброва').'-Дуброва');
    }
    public function testSplDetect1303()
    {
        $this->assertEquals('S-Железнякова', $this->object->splitFullName('Железнякова').'-Железнякова');
    }
    public function testSplDetect1304()
    {
        $this->assertEquals('S-Жердєва', $this->object->splitFullName('Жердєва').'-Жердєва');
    }
    public function testSplDetect1305()
    {
        $this->assertEquals('S-Жукова', $this->object->splitFullName('Жукова').'-Жукова');
    }
    public function testSplDetect1306()
    {
        $this->assertEquals('S-Журавльова', $this->object->splitFullName('Журавльова').'-Журавльова');
    }
    public function testSplDetect1307()
    {
        $this->assertEquals('S-Заварова', $this->object->splitFullName('Заварова').'-Заварова');
    }
    public function testSplDetect1308()
    {
        $this->assertEquals('S-Загарова', $this->object->splitFullName('Загарова').'-Загарова');
    }
    public function testSplDetect1309()
    {
        $this->assertEquals('S-Зайцева', $this->object->splitFullName('Зайцева').'-Зайцева');
    }
    public function testSplDetect1310()
    {
        $this->assertEquals('S-Захарова', $this->object->splitFullName('Захарова').'-Захарова');
    }
    public function testSplDetect1311()
    {
        $this->assertEquals('S-Звєрєва', $this->object->splitFullName('Звєрєва').'-Звєрєва');
    }
    public function testSplDetect1312()
    {
        $this->assertEquals('S-Зерова', $this->object->splitFullName('Зерова').'-Зерова');
    }
    public function testSplDetect1313()
    {
        $this->assertEquals('S-Золотухіна', $this->object->splitFullName('Золотухіна').'-Золотухіна');
    }
    public function testSplDetect1314()
    {
        $this->assertEquals('S-Зубова', $this->object->splitFullName('Зубова').'-Зубова');
    }
    public function testSplDetect1315()
    {
        $this->assertEquals('S-Казакова', $this->object->splitFullName('Казакова').'-Казакова');
    }
    public function testSplDetect1316()
    {
        $this->assertEquals('S-Калініна', $this->object->splitFullName('Калініна').'-Калініна');
    }
    public function testSplDetect1317()
    {
        $this->assertEquals('S-Калашникова', $this->object->splitFullName('Калашникова').'-Калашникова');
    }
    public function testSplDetect1318()
    {
        $this->assertEquals('S-Карпова', $this->object->splitFullName('Карпова').'-Карпова');
    }
    public function testSplDetect1319()
    {
        $this->assertEquals('S-Каштанова', $this->object->splitFullName('Каштанова').'-Каштанова');
    }
    public function testSplDetect1320()
    {
        $this->assertEquals('S-Кисельова', $this->object->splitFullName('Кисельова').'-Кисельова');
    }
    public function testSplDetect1321()
    {
        $this->assertEquals('S-Ковальова', $this->object->splitFullName('Ковальова').'-Ковальова');
    }
    public function testSplDetect1322()
    {
        $this->assertEquals('S-Кожевникова', $this->object->splitFullName('Кожевникова').'-Кожевникова');
    }
    public function testSplDetect1323()
    {
        $this->assertEquals('S-Козлова', $this->object->splitFullName('Козлова').'-Козлова');
    }
    public function testSplDetect1324()
    {
        $this->assertEquals('S-Колесникова', $this->object->splitFullName('Колесникова').'-Колесникова');
    }
    public function testSplDetect1325()
    {
        $this->assertEquals('S-Кольцова', $this->object->splitFullName('Кольцова').'-Кольцова');
    }
    public function testSplDetect1326()
    {
        $this->assertEquals('S-Комарова', $this->object->splitFullName('Комарова').'-Комарова');
    }
    public function testSplDetect1327()
    {
        $this->assertEquals('S-Коновалова', $this->object->splitFullName('Коновалова').'-Коновалова');
    }
    public function testSplDetect1328()
    {
        $this->assertEquals('S-Конюхова', $this->object->splitFullName('Конюхова').'-Конюхова');
    }
    public function testSplDetect1329()
    {
        $this->assertEquals('S-Копилова', $this->object->splitFullName('Копилова').'-Копилова');
    }
    public function testSplDetect1330()
    {
        $this->assertEquals('S-Кормильцева', $this->object->splitFullName('Кормильцева').'-Кормильцева');
    }
    public function testSplDetect1331()
    {
        $this->assertEquals('S-Коробова', $this->object->splitFullName('Коробова').'-Коробова');
    }
    public function testSplDetect1332()
    {
        $this->assertEquals('S-Коровкіна', $this->object->splitFullName('Коровкіна').'-Коровкіна');
    }
    public function testSplDetect1333()
    {
        $this->assertEquals('S-Корольова', $this->object->splitFullName('Корольова').'-Корольова');
    }
    public function testSplDetect1334()
    {
        $this->assertEquals('S-Котова', $this->object->splitFullName('Котова').'-Котова');
    }
    public function testSplDetect1335()
    {
        $this->assertEquals('S-Краснова', $this->object->splitFullName('Краснова').'-Краснова');
    }
    public function testSplDetect1336()
    {
        $this->assertEquals('S-Крилова', $this->object->splitFullName('Крилова').'-Крилова');
    }
    public function testSplDetect1337()
    {
        $this->assertEquals('S-Кримова', $this->object->splitFullName('Кримова').'-Кримова');
    }
    public function testSplDetect1338()
    {
        $this->assertEquals('S-Крюкова', $this->object->splitFullName('Крюкова').'-Крюкова');
    }
    public function testSplDetect1339()
    {
        $this->assertEquals('S-Кудряшова', $this->object->splitFullName('Кудряшова').'-Кудряшова');
    }
    public function testSplDetect1340()
    {
        $this->assertEquals('S-Кузнецова', $this->object->splitFullName('Кузнецова').'-Кузнецова');
    }
    public function testSplDetect1341()
    {
        $this->assertEquals('S-Кузьміна', $this->object->splitFullName('Кузьміна').'-Кузьміна');
    }
    public function testSplDetect1342()
    {
        $this->assertEquals('S-Кулакова', $this->object->splitFullName('Кулакова').'-Кулакова');
    }
    public function testSplDetect1343()
    {
        $this->assertEquals('S-Куликова', $this->object->splitFullName('Куликова').'-Куликова');
    }
    public function testSplDetect1344()
    {
        $this->assertEquals('S-Куркова', $this->object->splitFullName('Куркова').'-Куркова');
    }
    public function testSplDetect1345()
    {
        $this->assertEquals('S-Курочкіна', $this->object->splitFullName('Курочкіна').'-Курочкіна');
    }
    public function testSplDetect1346()
    {
        $this->assertEquals('S-Лєскова', $this->object->splitFullName('Лєскова').'-Лєскова');
    }
    public function testSplDetect1347()
    {
        $this->assertEquals('S-Лідова', $this->object->splitFullName('Лідова').'-Лідова');
    }
    public function testSplDetect1348()
    {
        $this->assertEquals('S-Ладигіна', $this->object->splitFullName('Ладигіна').'-Ладигіна');
    }
    public function testSplDetect1349()
    {
        $this->assertEquals('S-Лазарєва', $this->object->splitFullName('Лазарєва').'-Лазарєва');
    }
    public function testSplDetect1350()
    {
        $this->assertEquals('S-Лебедєва', $this->object->splitFullName('Лебедєва').'-Лебедєва');
    }
    public function testSplDetect1351()
    {
        $this->assertEquals('S-Лихоносова', $this->object->splitFullName('Лихоносова').'-Лихоносова');
    }
    public function testSplDetect1352()
    {
        $this->assertEquals('S-Лосєва', $this->object->splitFullName('Лосєва').'-Лосєва');
    }
    public function testSplDetect1353()
    {
        $this->assertEquals('S-Львова', $this->object->splitFullName('Львова').'-Львова');
    }
    public function testSplDetect1354()
    {
        $this->assertEquals('S-Любимова', $this->object->splitFullName('Любимова').'-Любимова');
    }
    public function testSplDetect1355()
    {
        $this->assertEquals('S-Мілютіна', $this->object->splitFullName('Мілютіна').'-Мілютіна');
    }
    public function testSplDetect1356()
    {
        $this->assertEquals('S-Макарова', $this->object->splitFullName('Макарова').'-Макарова');
    }
    public function testSplDetect1357()
    {
        $this->assertEquals('S-Максимова', $this->object->splitFullName('Максимова').'-Максимова');
    }
    public function testSplDetect1358()
    {
        $this->assertEquals('S-Малакова', $this->object->splitFullName('Малакова').'-Малакова');
    }
    public function testSplDetect1359()
    {
        $this->assertEquals('S-Мамонова', $this->object->splitFullName('Мамонова').'-Мамонова');
    }
    public function testSplDetect1360()
    {
        $this->assertEquals('S-Манасеїна', $this->object->splitFullName('Манасеїна').'-Манасеїна');
    }
    public function testSplDetect1361()
    {
        $this->assertEquals('S-Маркова', $this->object->splitFullName('Маркова').'-Маркова');
    }
    public function testSplDetect1362()
    {
        $this->assertEquals('S-Мартенс', $this->object->splitFullName('Мартенс').'-Мартенс');
    }
    public function testSplDetect1363()
    {
        $this->assertEquals('S-Мартинова', $this->object->splitFullName('Мартинова').'-Мартинова');
    }
    public function testSplDetect1364()
    {
        $this->assertEquals('S-Масленнікова', $this->object->splitFullName('Масленнікова').'-Масленнікова');
    }
    public function testSplDetect1365()
    {
        $this->assertEquals('S-Маслова', $this->object->splitFullName('Маслова').'-Маслова');
    }
    public function testSplDetect1366()
    {
        $this->assertEquals('S-Матвєєва', $this->object->splitFullName('Матвєєва').'-Матвєєва');
    }
    public function testSplDetect1367()
    {
        $this->assertEquals('S-Медведєва', $this->object->splitFullName('Медведєва').'-Медведєва');
    }
    public function testSplDetect1368()
    {
        $this->assertEquals('S-Мельникова', $this->object->splitFullName('Мельникова').'-Мельникова');
    }
    public function testSplDetect1369()
    {
        $this->assertEquals('S-Миронова', $this->object->splitFullName('Миронова').'-Миронова');
    }
    public function testSplDetect1370()
    {
        $this->assertEquals('S-Михайлова', $this->object->splitFullName('Михайлова').'-Михайлова');
    }
    public function testSplDetect1371()
    {
        $this->assertEquals('S-Моїсєєва', $this->object->splitFullName('Моїсєєва').'-Моїсєєва');
    }
    public function testSplDetect1372()
    {
        $this->assertEquals('S-Моргунова', $this->object->splitFullName('Моргунова').'-Моргунова');
    }
    public function testSplDetect1373()
    {
        $this->assertEquals('S-Моркова', $this->object->splitFullName('Моркова').'-Моркова');
    }
    public function testSplDetect1374()
    {
        $this->assertEquals('S-Морозова', $this->object->splitFullName('Морозова').'-Морозова');
    }
    public function testSplDetect1375()
    {
        $this->assertEquals('S-Мухіна', $this->object->splitFullName('Мухіна').'-Мухіна');
    }
    public function testSplDetect1376()
    {
        $this->assertEquals('S-Нікітіна', $this->object->splitFullName('Нікітіна').'-Нікітіна');
    }
    public function testSplDetect1377()
    {
        $this->assertEquals('S-Ніколаєва', $this->object->splitFullName('Ніколаєва').'-Ніколаєва');
    }
    public function testSplDetect1378()
    {
        $this->assertEquals('S-Нікуліна', $this->object->splitFullName('Нікуліна').'-Нікуліна');
    }
    public function testSplDetect1379()
    {
        $this->assertEquals('S-Набокова', $this->object->splitFullName('Набокова').'-Набокова');
    }
    public function testSplDetect1380()
    {
        $this->assertEquals('S-Некрасова', $this->object->splitFullName('Некрасова').'-Некрасова');
    }
    public function testSplDetect1381()
    {
        $this->assertEquals('S-Новикова', $this->object->splitFullName('Новикова').'-Новикова');
    }
    public function testSplDetect1382()
    {
        $this->assertEquals('S-Орлова', $this->object->splitFullName('Орлова').'-Орлова');
    }
    public function testSplDetect1383()
    {
        $this->assertEquals('S-Осипова', $this->object->splitFullName('Осипова').'-Осипова');
    }
    public function testSplDetect1384()
    {
        $this->assertEquals('S-Павлова', $this->object->splitFullName('Павлова').'-Павлова');
    }
    public function testSplDetect1385()
    {
        $this->assertEquals('S-Павлушкова', $this->object->splitFullName('Павлушкова').'-Павлушкова');
    }
    public function testSplDetect1386()
    {
        $this->assertEquals('S-Панова', $this->object->splitFullName('Панова').'-Панова');
    }
    public function testSplDetect1387()
    {
        $this->assertEquals('S-Петрова', $this->object->splitFullName('Петрова').'-Петрова');
    }
    public function testSplDetect1388()
    {
        $this->assertEquals('S-Пильчикова', $this->object->splitFullName('Пильчикова').'-Пильчикова');
    }
    public function testSplDetect1389()
    {
        $this->assertEquals('S-Платонова', $this->object->splitFullName('Платонова').'-Платонова');
    }
    public function testSplDetect1390()
    {
        $this->assertEquals('S-Плеханова', $this->object->splitFullName('Плеханова').'-Плеханова');
    }
    public function testSplDetect1391()
    {
        $this->assertEquals('S-Полякова', $this->object->splitFullName('Полякова').'-Полякова');
    }
    public function testSplDetect1392()
    {
        $this->assertEquals('S-Пономарьова', $this->object->splitFullName('Пономарьова').'-Пономарьова');
    }
    public function testSplDetect1393()
    {
        $this->assertEquals('S-Попова', $this->object->splitFullName('Попова').'-Попова');
    }
    public function testSplDetect1394()
    {
        $this->assertEquals('S-Пояркова', $this->object->splitFullName('Пояркова').'-Пояркова');
    }
    public function testSplDetect1395()
    {
        $this->assertEquals('S-Пригунова', $this->object->splitFullName('Пригунова').'-Пригунова');
    }
    public function testSplDetect1396()
    {
        $this->assertEquals('S-Прошкіна', $this->object->splitFullName('Прошкіна').'-Прошкіна');
    }
    public function testSplDetect1397()
    {
        $this->assertEquals('S-Решетникова', $this->object->splitFullName('Решетникова').'-Решетникова');
    }
    public function testSplDetect1398()
    {
        $this->assertEquals('S-Рожкова', $this->object->splitFullName('Рожкова').'-Рожкова');
    }
    public function testSplDetect1399()
    {
        $this->assertEquals('S-Романова', $this->object->splitFullName('Романова').'-Романова');
    }
    public function testSplDetect1400()
    {
        $this->assertEquals('S-Рябова', $this->object->splitFullName('Рябова').'-Рябова');
    }
    public function testSplDetect1401()
    {
        $this->assertEquals('S-Сабліна', $this->object->splitFullName('Сабліна').'-Сабліна');
    }
    public function testSplDetect1402()
    {
        $this->assertEquals('S-Савіна', $this->object->splitFullName('Савіна').'-Савіна');
    }
    public function testSplDetect1403()
    {
        $this->assertEquals('S-Сазонова', $this->object->splitFullName('Сазонова').'-Сазонова');
    }
    public function testSplDetect1404()
    {
        $this->assertEquals('S-Сальникова', $this->object->splitFullName('Сальникова').'-Сальникова');
    }
    public function testSplDetect1405()
    {
        $this->assertEquals('S-Самойлова', $this->object->splitFullName('Самойлова').'-Самойлова');
    }
    public function testSplDetect1406()
    {
        $this->assertEquals('S-Самсонова', $this->object->splitFullName('Самсонова').'-Самсонова');
    }
    public function testSplDetect1407()
    {
        $this->assertEquals('S-Сбітнєва', $this->object->splitFullName('Сбітнєва').'-Сбітнєва');
    }
    public function testSplDetect1408()
    {
        $this->assertEquals('S-Свиридова', $this->object->splitFullName('Свиридова').'-Свиридова');
    }
    public function testSplDetect1409()
    {
        $this->assertEquals('S-Селезньова', $this->object->splitFullName('Селезньова').'-Селезньова');
    }
    public function testSplDetect1410()
    {
        $this->assertEquals('S-Семенова', $this->object->splitFullName('Семенова').'-Семенова');
    }
    public function testSplDetect1411()
    {
        $this->assertEquals('S-Сербіна', $this->object->splitFullName('Сербіна').'-Сербіна');
    }
    public function testSplDetect1412()
    {
        $this->assertEquals('S-Сергєєва', $this->object->splitFullName('Сергєєва').'-Сергєєва');
    }
    public function testSplDetect1413()
    {
        $this->assertEquals('S-Сибірякова', $this->object->splitFullName('Сибірякова').'-Сибірякова');
    }
    public function testSplDetect1414()
    {
        $this->assertEquals('S-Сидорова', $this->object->splitFullName('Сидорова').'-Сидорова');
    }
    public function testSplDetect1415()
    {
        $this->assertEquals('S-Симонова', $this->object->splitFullName('Симонова').'-Симонова');
    }
    public function testSplDetect1416()
    {
        $this->assertEquals('S-Синельникова', $this->object->splitFullName('Синельникова').'-Синельникова');
    }
    public function testSplDetect1417()
    {
        $this->assertEquals('S-Скобелева', $this->object->splitFullName('Скобелева').'-Скобелева');
    }
    public function testSplDetect1418()
    {
        $this->assertEquals('S-Скобліна', $this->object->splitFullName('Скобліна').'-Скобліна');
    }
    public function testSplDetect1419()
    {
        $this->assertEquals('S-Смирнова', $this->object->splitFullName('Смирнова').'-Смирнова');
    }
    public function testSplDetect1420()
    {
        $this->assertEquals('S-Снєгірьова', $this->object->splitFullName('Снєгірьова').'-Снєгірьова');
    }
    public function testSplDetect1421()
    {
        $this->assertEquals('S-Соболєва', $this->object->splitFullName('Соболєва').'-Соболєва');
    }
    public function testSplDetect1422()
    {
        $this->assertEquals('S-Соколова', $this->object->splitFullName('Соколова').'-Соколова');
    }
    public function testSplDetect1423()
    {
        $this->assertEquals('S-Солнцева', $this->object->splitFullName('Солнцева').'-Солнцева');
    }
    public function testSplDetect1424()
    {
        $this->assertEquals('S-Соловйова', $this->object->splitFullName('Соловйова').'-Соловйова');
    }
    public function testSplDetect1425()
    {
        $this->assertEquals('S-Сомова', $this->object->splitFullName('Сомова').'-Сомова');
    }
    public function testSplDetect1426()
    {
        $this->assertEquals('S-Сорокіна', $this->object->splitFullName('Сорокіна').'-Сорокіна');
    }
    public function testSplDetect1427()
    {
        $this->assertEquals('S-Стєклова', $this->object->splitFullName('Стєклова').'-Стєклова');
    }
    public function testSplDetect1428()
    {
        $this->assertEquals('S-Старкова', $this->object->splitFullName('Старкова').'-Старкова');
    }
    public function testSplDetect1429()
    {
        $this->assertEquals('S-Степанова', $this->object->splitFullName('Степанова').'-Степанова');
    }
    public function testSplDetect1430()
    {
        $this->assertEquals('S-Табакова', $this->object->splitFullName('Табакова').'-Табакова');
    }
    public function testSplDetect1431()
    {
        $this->assertEquals('S-Тарасова', $this->object->splitFullName('Тарасова').'-Тарасова');
    }
    public function testSplDetect1432()
    {
        $this->assertEquals('S-Терентьєва', $this->object->splitFullName('Терентьєва').'-Терентьєва');
    }
    public function testSplDetect1433()
    {
        $this->assertEquals('S-Тимофєєва', $this->object->splitFullName('Тимофєєва').'-Тимофєєва');
    }
    public function testSplDetect1434()
    {
        $this->assertEquals('S-Титова', $this->object->splitFullName('Титова').'-Титова');
    }
    public function testSplDetect1435()
    {
        $this->assertEquals('S-Тихомирова', $this->object->splitFullName('Тихомирова').'-Тихомирова');
    }
    public function testSplDetect1436()
    {
        $this->assertEquals('S-Тихонова', $this->object->splitFullName('Тихонова').'-Тихонова');
    }
    public function testSplDetect1437()
    {
        $this->assertEquals('S-Тюленєва', $this->object->splitFullName('Тюленєва').'-Тюленєва');
    }
    public function testSplDetect1438()
    {
        $this->assertEquals('S-Уварова', $this->object->splitFullName('Уварова').'-Уварова');
    }
    public function testSplDetect1439()
    {
        $this->assertEquals('S-Усова', $this->object->splitFullName('Усова').'-Усова');
    }
    public function testSplDetect1440()
    {
        $this->assertEquals('S-Устинова', $this->object->splitFullName('Устинова').'-Устинова');
    }
    public function testSplDetect1441()
    {
        $this->assertEquals('S-Філіппова', $this->object->splitFullName('Філіппова').'-Філіппова');
    }
    public function testSplDetect1442()
    {
        $this->assertEquals('S-Філатова', $this->object->splitFullName('Філатова').'-Філатова');
    }
    public function testSplDetect1443()
    {
        $this->assertEquals('S-Федорова', $this->object->splitFullName('Федорова').'-Федорова');
    }
    public function testSplDetect1444()
    {
        $this->assertEquals('S-Фоміна', $this->object->splitFullName('Фоміна').'-Фоміна');
    }
    public function testSplDetect1445()
    {
        $this->assertEquals('S-Фролова', $this->object->splitFullName('Фролова').'-Фролова');
    }
    public function testSplDetect1446()
    {
        $this->assertEquals('S-Хілкова', $this->object->splitFullName('Хілкова').'-Хілкова');
    }
    public function testSplDetect1447()
    {
        $this->assertEquals('S-Хвостова', $this->object->splitFullName('Хвостова').'-Хвостова');
    }
    public function testSplDetect1448()
    {
        $this->assertEquals('S-Худякова', $this->object->splitFullName('Худякова').'-Худякова');
    }
    public function testSplDetect1449()
    {
        $this->assertEquals('S-Цвєткова', $this->object->splitFullName('Цвєткова').'-Цвєткова');
    }
    public function testSplDetect1450()
    {
        $this->assertEquals('S-Чанова', $this->object->splitFullName('Чанова').'-Чанова');
    }
    public function testSplDetect1451()
    {
        $this->assertEquals('S-Чевкіна', $this->object->splitFullName('Чевкіна').'-Чевкіна');
    }
    public function testSplDetect1452()
    {
        $this->assertEquals('S-Черенкова', $this->object->splitFullName('Черенкова').'-Черенкова');
    }
    public function testSplDetect1453()
    {
        $this->assertEquals('S-Черепкова', $this->object->splitFullName('Черепкова').'-Черепкова');
    }
    public function testSplDetect1454()
    {
        $this->assertEquals('S-Чулкова', $this->object->splitFullName('Чулкова').'-Чулкова');
    }
    public function testSplDetect1455()
    {
        $this->assertEquals('S-Шевельова', $this->object->splitFullName('Шевельова').'-Шевельова');
    }
    public function testSplDetect1456()
    {
        $this->assertEquals('S-Шеліхова', $this->object->splitFullName('Шеліхова').'-Шеліхова');
    }
    public function testSplDetect1457()
    {
        $this->assertEquals('S-Шиніна', $this->object->splitFullName('Шиніна').'-Шиніна');
    }
    public function testSplDetect1458()
    {
        $this->assertEquals('S-Ширяєва', $this->object->splitFullName('Ширяєва').'-Ширяєва');
    }
    public function testSplDetect1459()
    {
        $this->assertEquals('S-Шишова', $this->object->splitFullName('Шишова').'-Шишова');
    }
    public function testSplDetect1460()
    {
        $this->assertEquals('S-Шулакова', $this->object->splitFullName('Шулакова').'-Шулакова');
    }
    public function testSplDetect1461()
    {
        $this->assertEquals('S-Щапова', $this->object->splitFullName('Щапова').'-Щапова');
    }
    public function testSplDetect1462()
    {
        $this->assertEquals('S-Щаслива', $this->object->splitFullName('Щаслива').'-Щаслива');
    }
    public function testSplDetect1463()
    {
        $this->assertEquals('S-Яковлєва', $this->object->splitFullName('Яковлєва').'-Яковлєва');
    }
    public function testSplDetect1464()
    {
        $this->assertEquals('S-Яшина', $this->object->splitFullName('Яшина').'-Яшина');
    }

}