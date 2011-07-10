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
        $this->assertEquals('S-Єрмоленко', trim($this->object->getFullNameFormat('Єрмоленко')).'-Єрмоленко');
    }
    public function testSplDetect1()
    {
        $this->assertEquals('S-Єсипенко', trim($this->object->getFullNameFormat('Єсипенко')).'-Єсипенко');
    }
    public function testSplDetect2()
    {
        $this->assertEquals('S-Іванів', trim($this->object->getFullNameFormat('Іванів')).'-Іванів');
    }
    public function testSplDetect3()
    {
        $this->assertEquals('S-Іваненко', trim($this->object->getFullNameFormat('Іваненко')).'-Іваненко');
    }
    public function testSplDetect4()
    {
        $this->assertEquals('S-Іванченко', trim($this->object->getFullNameFormat('Іванченко')).'-Іванченко');
    }
    public function testSplDetect5()
    {
        $this->assertEquals('S-Іванчук', trim($this->object->getFullNameFormat('Іванчук')).'-Іванчук');
    }
    public function testSplDetect6()
    {
        $this->assertEquals('S-Іванюк', trim($this->object->getFullNameFormat('Іванюк')).'-Іванюк');
    }
    public function testSplDetect7()
    {
        $this->assertEquals('S-Івахненко', trim($this->object->getFullNameFormat('Івахненко')).'-Івахненко');
    }
    public function testSplDetect8()
    {
        $this->assertEquals('S-Івашко', trim($this->object->getFullNameFormat('Івашко')).'-Івашко');
    }
    public function testSplDetect9()
    {
        $this->assertEquals('S-Іващенко', trim($this->object->getFullNameFormat('Іващенко')).'-Іващенко');
    }
    public function testSplDetect10()
    {
        $this->assertEquals('S-Івченко', trim($this->object->getFullNameFormat('Івченко')).'-Івченко');
    }
    public function testSplDetect11()
    {
        $this->assertEquals('S-Іллєнко', trim($this->object->getFullNameFormat('Іллєнко')).'-Іллєнко');
    }
    public function testSplDetect12()
    {
        $this->assertEquals('S-Ільницький', trim($this->object->getFullNameFormat('Ільницький')).'-Ільницький');
    }
    public function testSplDetect13()
    {
        $this->assertEquals('S-Ільченко', trim($this->object->getFullNameFormat('Ільченко')).'-Ільченко');
    }
    public function testSplDetect14()
    {
        $this->assertEquals('S-Іщенко', trim($this->object->getFullNameFormat('Іщенко')).'-Іщенко');
    }
    public function testSplDetect15()
    {
        $this->assertEquals('S-Абраменко', trim($this->object->getFullNameFormat('Абраменко')).'-Абраменко');
    }
    public function testSplDetect16()
    {
        $this->assertEquals('S-Абрамчук', trim($this->object->getFullNameFormat('Абрамчук')).'-Абрамчук');
    }
    public function testSplDetect17()
    {
        $this->assertEquals('S-Адамчук', trim($this->object->getFullNameFormat('Адамчук')).'-Адамчук');
    }
    public function testSplDetect18()
    {
        $this->assertEquals('S-Акуленко', trim($this->object->getFullNameFormat('Акуленко')).'-Акуленко');
    }
    public function testSplDetect19()
    {
        $this->assertEquals('S-Алексєєнко', trim($this->object->getFullNameFormat('Алексєєнко')).'-Алексєєнко');
    }
    public function testSplDetect20()
    {
        $this->assertEquals('S-Алексійчук', trim($this->object->getFullNameFormat('Алексійчук')).'-Алексійчук');
    }
    public function testSplDetect21()
    {
        $this->assertEquals('S-Андрієнко', trim($this->object->getFullNameFormat('Андрієнко')).'-Андрієнко');
    }
    public function testSplDetect22()
    {
        $this->assertEquals('S-Андрійчук', trim($this->object->getFullNameFormat('Андрійчук')).'-Андрійчук');
    }
    public function testSplDetect23()
    {
        $this->assertEquals('S-Андрейко', trim($this->object->getFullNameFormat('Андрейко')).'-Андрейко');
    }
    public function testSplDetect24()
    {
        $this->assertEquals('S-Андрусів', trim($this->object->getFullNameFormat('Андрусів')).'-Андрусів');
    }
    public function testSplDetect25()
    {
        $this->assertEquals('S-Андрушків', trim($this->object->getFullNameFormat('Андрушків')).'-Андрушків');
    }
    public function testSplDetect26()
    {
        $this->assertEquals('S-Андрущенко', trim($this->object->getFullNameFormat('Андрущенко')).'-Андрущенко');
    }
    public function testSplDetect27()
    {
        $this->assertEquals('S-Анищенко', trim($this->object->getFullNameFormat('Анищенко')).'-Анищенко');
    }
    public function testSplDetect28()
    {
        $this->assertEquals('S-Антонюк', trim($this->object->getFullNameFormat('Антонюк')).'-Антонюк');
    }
    public function testSplDetect29()
    {
        $this->assertEquals('S-Арсенич', trim($this->object->getFullNameFormat('Арсенич')).'-Арсенич');
    }
    public function testSplDetect30()
    {
        $this->assertEquals('S-Артюх', trim($this->object->getFullNameFormat('Артюх')).'-Артюх');
    }
    public function testSplDetect31()
    {
        $this->assertEquals('S-Атаманчук', trim($this->object->getFullNameFormat('Атаманчук')).'-Атаманчук');
    }
    public function testSplDetect32()
    {
        $this->assertEquals('S-Біла', trim($this->object->getFullNameFormat('Біла')).'-Біла');
    }
    public function testSplDetect33()
    {
        $this->assertEquals('S-Білас', trim($this->object->getFullNameFormat('Білас')).'-Білас');
    }
    public function testSplDetect34()
    {
        $this->assertEquals('S-Білий', trim($this->object->getFullNameFormat('Білий')).'-Білий');
    }
    public function testSplDetect35()
    {
        $this->assertEquals('S-Білодід', trim($this->object->getFullNameFormat('Білодід')).'-Білодід');
    }
    public function testSplDetect36()
    {
        $this->assertEquals('S-Білоус', trim($this->object->getFullNameFormat('Білоус')).'-Білоус');
    }
    public function testSplDetect37()
    {
        $this->assertEquals('S-Бабійчук', trim($this->object->getFullNameFormat('Бабійчук')).'-Бабійчук');
    }
    public function testSplDetect38()
    {
        $this->assertEquals('S-Бабак', trim($this->object->getFullNameFormat('Бабак')).'-Бабак');
    }
    public function testSplDetect39()
    {
        $this->assertEquals('S-Бабчук', trim($this->object->getFullNameFormat('Бабчук')).'-Бабчук');
    }
    public function testSplDetect40()
    {
        $this->assertEquals('S-Багмут', trim($this->object->getFullNameFormat('Багмут')).'-Багмут');
    }
    public function testSplDetect41()
    {
        $this->assertEquals('S-Багрій', trim($this->object->getFullNameFormat('Багрій')).'-Багрій');
    }
    public function testSplDetect42()
    {
        $this->assertEquals('S-Бадлак', trim($this->object->getFullNameFormat('Бадлак')).'-Бадлак');
    }
    public function testSplDetect43()
    {
        $this->assertEquals('S-Бажан', trim($this->object->getFullNameFormat('Бажан')).'-Бажан');
    }
    public function testSplDetect44()
    {
        $this->assertEquals('S-Балтача', trim($this->object->getFullNameFormat('Балтача')).'-Балтача');
    }
    public function testSplDetect45()
    {
        $this->assertEquals('S-Бандура', trim($this->object->getFullNameFormat('Бандура')).'-Бандура');
    }
    public function testSplDetect46()
    {
        $this->assertEquals('S-Баран', trim($this->object->getFullNameFormat('Баран')).'-Баран');
    }
    public function testSplDetect47()
    {
        $this->assertEquals('S-Баранець', trim($this->object->getFullNameFormat('Баранець')).'-Баранець');
    }
    public function testSplDetect48()
    {
        $this->assertEquals('S-Барановський', trim($this->object->getFullNameFormat('Барановський')).'-Барановський');
    }
    public function testSplDetect49()
    {
        $this->assertEquals('S-Баранюк', trim($this->object->getFullNameFormat('Баранюк')).'-Баранюк');
    }
    public function testSplDetect50()
    {
        $this->assertEquals('S-Батюк', trim($this->object->getFullNameFormat('Батюк')).'-Батюк');
    }
    public function testSplDetect51()
    {
        $this->assertEquals('S-Бачинський', trim($this->object->getFullNameFormat('Бачинський')).'-Бачинський');
    }
    public function testSplDetect52()
    {
        $this->assertEquals('S-Бебешко', trim($this->object->getFullNameFormat('Бебешко')).'-Бебешко');
    }
    public function testSplDetect53()
    {
        $this->assertEquals('S-Бевзенко', trim($this->object->getFullNameFormat('Бевзенко')).'-Бевзенко');
    }
    public function testSplDetect54()
    {
        $this->assertEquals('S-Рубани', trim($this->object->getFullNameFormat('Рубани')).'-Рубани');
    }
    public function testSplDetect55()
    {
        $this->assertEquals('S-Березовчук', trim($this->object->getFullNameFormat('Березовчук')).'-Березовчук');
    }
    public function testSplDetect56()
    {
        $this->assertEquals('S-Божик', trim($this->object->getFullNameFormat('Божик')).'-Божик');
    }
    public function testSplDetect57()
    {
        $this->assertEquals('S-Божко', trim($this->object->getFullNameFormat('Божко')).'-Божко');
    }
    public function testSplDetect58()
    {
        $this->assertEquals('S-Бойко', trim($this->object->getFullNameFormat('Бойко')).'-Бойко');
    }
    public function testSplDetect59()
    {
        $this->assertEquals('S-Бойцун', trim($this->object->getFullNameFormat('Бойцун')).'-Бойцун');
    }
    public function testSplDetect60()
    {
        $this->assertEquals('S-Бойчак', trim($this->object->getFullNameFormat('Бойчак')).'-Бойчак');
    }
    public function testSplDetect61()
    {
        $this->assertEquals('S-Бойчишин', trim($this->object->getFullNameFormat('Бойчишин')).'-Бойчишин');
    }
    public function testSplDetect62()
    {
        $this->assertEquals('S-Бойчук', trim($this->object->getFullNameFormat('Бойчук')).'-Бойчук');
    }
    public function testSplDetect63()
    {
        $this->assertEquals('S-Бондар', trim($this->object->getFullNameFormat('Бондар')).'-Бондар');
    }
    public function testSplDetect64()
    {
        $this->assertEquals('S-Бондаренко', trim($this->object->getFullNameFormat('Бондаренко')).'-Бондаренко');
    }
    public function testSplDetect65()
    {
        $this->assertEquals('S-Бондарчук', trim($this->object->getFullNameFormat('Бондарчук')).'-Бондарчук');
    }
    public function testSplDetect66()
    {
        $this->assertEquals('S-Борисенко', trim($this->object->getFullNameFormat('Борисенко')).'-Борисенко');
    }
    public function testSplDetect67()
    {
        $this->assertEquals('S-Борисикевич', trim($this->object->getFullNameFormat('Борисикевич')).'-Борисикевич');
    }
    public function testSplDetect68()
    {
        $this->assertEquals('S-Братусь', trim($this->object->getFullNameFormat('Братусь')).'-Братусь');
    }
    public function testSplDetect69()
    {
        $this->assertEquals('S-Букатевич', trim($this->object->getFullNameFormat('Букатевич')).'-Букатевич');
    }
    public function testSplDetect70()
    {
        $this->assertEquals('S-Бурбан', trim($this->object->getFullNameFormat('Бурбан')).'-Бурбан');
    }
    public function testSplDetect71()
    {
        $this->assertEquals('S-Бурячок', trim($this->object->getFullNameFormat('Бурячок')).'-Бурячок');
    }
    public function testSplDetect72()
    {
        $this->assertEquals('S-Бутейко', trim($this->object->getFullNameFormat('Бутейко')).'-Бутейко');
    }
    public function testSplDetect73()
    {
        $this->assertEquals('S-Бутенко', trim($this->object->getFullNameFormat('Бутенко')).'-Бутенко');
    }
    public function testSplDetect74()
    {
        $this->assertEquals('S-Бутник', trim($this->object->getFullNameFormat('Бутник')).'-Бутник');
    }
    public function testSplDetect75()
    {
        $this->assertEquals('S-Бухало', trim($this->object->getFullNameFormat('Бухало')).'-Бухало');
    }
    public function testSplDetect76()
    {
        $this->assertEquals('S-Василашко', trim($this->object->getFullNameFormat('Василашко')).'-Василашко');
    }
    public function testSplDetect77()
    {
        $this->assertEquals('S-Василенко', trim($this->object->getFullNameFormat('Василенко')).'-Василенко');
    }
    public function testSplDetect78()
    {
        $this->assertEquals('S-Васильченко', trim($this->object->getFullNameFormat('Васильченко')).'-Васильченко');
    }
    public function testSplDetect79()
    {
        $this->assertEquals('S-Васильчук', trim($this->object->getFullNameFormat('Васильчук')).'-Васильчук');
    }
    public function testSplDetect80()
    {
        $this->assertEquals('S-Васкул', trim($this->object->getFullNameFormat('Васкул')).'-Васкул');
    }
    public function testSplDetect81()
    {
        $this->assertEquals('S-Вахній', trim($this->object->getFullNameFormat('Вахній')).'-Вахній');
    }
    public function testSplDetect82()
    {
        $this->assertEquals('S-Ващенко-Захарченко', trim($this->object->getFullNameFormat('Ващенко-Захарченко')).'-Ващенко-Захарченко');
    }
    public function testSplDetect83()
    {
        $this->assertEquals('S-Вдовиченко', trim($this->object->getFullNameFormat('Вдовиченко')).'-Вдовиченко');
    }
    public function testSplDetect84()
    {
        $this->assertEquals('S-Величко', trim($this->object->getFullNameFormat('Величко')).'-Величко');
    }
    public function testSplDetect85()
    {
        $this->assertEquals('S-Вертипорох', trim($this->object->getFullNameFormat('Вертипорох')).'-Вертипорох');
    }
    public function testSplDetect86()
    {
        $this->assertEquals('S-Верхола', trim($this->object->getFullNameFormat('Верхола')).'-Верхола');
    }
    public function testSplDetect87()
    {
        $this->assertEquals('S-Винокур', trim($this->object->getFullNameFormat('Винокур')).'-Винокур');
    }
    public function testSplDetect88()
    {
        $this->assertEquals('S-Влох', trim($this->object->getFullNameFormat('Влох')).'-Влох');
    }
    public function testSplDetect89()
    {
        $this->assertEquals('S-Воблий', trim($this->object->getFullNameFormat('Воблий')).'-Воблий');
    }
    public function testSplDetect90()
    {
        $this->assertEquals('S-Вовк', trim($this->object->getFullNameFormat('Вовк')).'-Вовк');
    }
    public function testSplDetect91()
    {
        $this->assertEquals('S-Возняк', trim($this->object->getFullNameFormat('Возняк')).'-Возняк');
    }
    public function testSplDetect92()
    {
        $this->assertEquals('S-Волох', trim($this->object->getFullNameFormat('Волох')).'-Волох');
    }
    public function testSplDetect93()
    {
        $this->assertEquals('S-Волошин', trim($this->object->getFullNameFormat('Волошин')).'-Волошин');
    }
    public function testSplDetect94()
    {
        $this->assertEquals('S-Волощук', trim($this->object->getFullNameFormat('Волощук')).'-Волощук');
    }
    public function testSplDetect95()
    {
        $this->assertEquals('S-Вороновський', trim($this->object->getFullNameFormat('Вороновський')).'-Вороновський');
    }
    public function testSplDetect96()
    {
        $this->assertEquals('S-Гаврилів', trim($this->object->getFullNameFormat('Гаврилів')).'-Гаврилів');
    }
    public function testSplDetect97()
    {
        $this->assertEquals('S-Гавриленко', trim($this->object->getFullNameFormat('Гавриленко')).'-Гавриленко');
    }
    public function testSplDetect98()
    {
        $this->assertEquals('S-Гаврилюк', trim($this->object->getFullNameFormat('Гаврилюк')).'-Гаврилюк');
    }
    public function testSplDetect99()
    {
        $this->assertEquals('S-Гальченко', trim($this->object->getFullNameFormat('Гальченко')).'-Гальченко');
    }
    public function testSplDetect100()
    {
        $this->assertEquals('S-Гамалія', trim($this->object->getFullNameFormat('Гамалія')).'-Гамалія');
    }
    public function testSplDetect101()
    {
        $this->assertEquals('S-Ганицький', trim($this->object->getFullNameFormat('Ганицький')).'-Ганицький');
    }
    public function testSplDetect102()
    {
        $this->assertEquals('S-Гарань', trim($this->object->getFullNameFormat('Гарань')).'-Гарань');
    }
    public function testSplDetect103()
    {
        $this->assertEquals('S-Гармаш', trim($this->object->getFullNameFormat('Гармаш')).'-Гармаш');
    }
    public function testSplDetect104()
    {
        $this->assertEquals('S-Гасай', trim($this->object->getFullNameFormat('Гасай')).'-Гасай');
    }
    public function testSplDetect105()
    {
        $this->assertEquals('S-Гасюк', trim($this->object->getFullNameFormat('Гасюк')).'-Гасюк');
    }
    public function testSplDetect106()
    {
        $this->assertEquals('S-Герасименко', trim($this->object->getFullNameFormat('Герасименко')).'-Герасименко');
    }
    public function testSplDetect107()
    {
        $this->assertEquals('S-Геращенко', trim($this->object->getFullNameFormat('Геращенко')).'-Геращенко');
    }
    public function testSplDetect108()
    {
        $this->assertEquals('S-Герцик', trim($this->object->getFullNameFormat('Герцик')).'-Герцик');
    }
    public function testSplDetect109()
    {
        $this->assertEquals('S-Острозькі', trim($this->object->getFullNameFormat('Острозькі')).'-Острозькі');
    }
    public function testSplDetect110()
    {
        $this->assertEquals('S-Гладченко', trim($this->object->getFullNameFormat('Гладченко')).'-Гладченко');
    }
    public function testSplDetect111()
    {
        $this->assertEquals('S-Глоба', trim($this->object->getFullNameFormat('Глоба')).'-Глоба');
    }
    public function testSplDetect112()
    {
        $this->assertEquals('S-Гнатюк', trim($this->object->getFullNameFormat('Гнатюк')).'-Гнатюк');
    }
    public function testSplDetect113()
    {
        $this->assertEquals('S-Гоголь', trim($this->object->getFullNameFormat('Гоголь')).'-Гоголь');
    }
    public function testSplDetect114()
    {
        $this->assertEquals('S-Годунок', trim($this->object->getFullNameFormat('Годунок')).'-Годунок');
    }
    public function testSplDetect115()
    {
        $this->assertEquals('S-Головатий', trim($this->object->getFullNameFormat('Головатий')).'-Головатий');
    }
    public function testSplDetect116()
    {
        $this->assertEquals('S-Головко', trim($this->object->getFullNameFormat('Головко')).'-Головко');
    }
    public function testSplDetect117()
    {
        $this->assertEquals('S-Голуб', trim($this->object->getFullNameFormat('Голуб')).'-Голуб');
    }
    public function testSplDetect118()
    {
        $this->assertEquals('S-Голубничий', trim($this->object->getFullNameFormat('Голубничий')).'-Голубничий');
    }
    public function testSplDetect119()
    {
        $this->assertEquals('S-Гонта', trim($this->object->getFullNameFormat('Гонта')).'-Гонта');
    }
    public function testSplDetect120()
    {
        $this->assertEquals('S-Гончар', trim($this->object->getFullNameFormat('Гончар')).'-Гончар');
    }
    public function testSplDetect121()
    {
        $this->assertEquals('S-Гончаренко', trim($this->object->getFullNameFormat('Гончаренко')).'-Гончаренко');
    }
    public function testSplDetect122()
    {
        $this->assertEquals('S-Гончаров', trim($this->object->getFullNameFormat('Гончаров')).'-Гончаров');
    }
    public function testSplDetect123()
    {
        $this->assertEquals('S-Горбаль', trim($this->object->getFullNameFormat('Горбаль')).'-Горбаль');
    }
    public function testSplDetect124()
    {
        $this->assertEquals('S-Гордієнко', trim($this->object->getFullNameFormat('Гордієнко')).'-Гордієнко');
    }
    public function testSplDetect125()
    {
        $this->assertEquals('S-Гошовський', trim($this->object->getFullNameFormat('Гошовський')).'-Гошовський');
    }
    public function testSplDetect126()
    {
        $this->assertEquals('S-Грінченко', trim($this->object->getFullNameFormat('Грінченко')).'-Грінченко');
    }
    public function testSplDetect127()
    {
        $this->assertEquals('S-Грабович', trim($this->object->getFullNameFormat('Грабович')).'-Грабович');
    }
    public function testSplDetect128()
    {
        $this->assertEquals('S-Грабовський', trim($this->object->getFullNameFormat('Грабовський')).'-Грабовський');
    }
    public function testSplDetect129()
    {
        $this->assertEquals('S-Григоренко', trim($this->object->getFullNameFormat('Григоренко')).'-Григоренко');
    }
    public function testSplDetect130()
    {
        $this->assertEquals('S-Григорович', trim($this->object->getFullNameFormat('Григорович')).'-Григорович');
    }
    public function testSplDetect131()
    {
        $this->assertEquals('S-Григорович-Барський', trim($this->object->getFullNameFormat('Григорович-Барський')).'-Григорович-Барський');
    }
    public function testSplDetect132()
    {
        $this->assertEquals('S-Григорчук', trim($this->object->getFullNameFormat('Григорчук')).'-Григорчук');
    }
    public function testSplDetect133()
    {
        $this->assertEquals('S-Грицак', trim($this->object->getFullNameFormat('Грицак')).'-Грицак');
    }
    public function testSplDetect134()
    {
        $this->assertEquals('S-Гриценко', trim($this->object->getFullNameFormat('Гриценко')).'-Гриценко');
    }
    public function testSplDetect135()
    {
        $this->assertEquals('S-Гришко', trim($this->object->getFullNameFormat('Гришко')).'-Гришко');
    }
    public function testSplDetect136()
    {
        $this->assertEquals('S-Нащинські', trim($this->object->getFullNameFormat('Нащинські')).'-Нащинські');
    }
    public function testSplDetect137()
    {
        $this->assertEquals('S-Гудзій', trim($this->object->getFullNameFormat('Гудзій')).'-Гудзій');
    }
    public function testSplDetect138()
    {
        $this->assertEquals('S-Гудзь', trim($this->object->getFullNameFormat('Гудзь')).'-Гудзь');
    }
    public function testSplDetect139()
    {
        $this->assertEquals('S-Гуменюк', trim($this->object->getFullNameFormat('Гуменюк')).'-Гуменюк');
    }
    public function testSplDetect140()
    {
        $this->assertEquals('S-Гунько', trim($this->object->getFullNameFormat('Гунько')).'-Гунько');
    }
    public function testSplDetect141()
    {
        $this->assertEquals('S-Діденко', trim($this->object->getFullNameFormat('Діденко')).'-Діденко');
    }
    public function testSplDetect142()
    {
        $this->assertEquals('S-Даниленко', trim($this->object->getFullNameFormat('Даниленко')).'-Даниленко');
    }
    public function testSplDetect143()
    {
        $this->assertEquals('S-Даньків', trim($this->object->getFullNameFormat('Даньків')).'-Даньків');
    }
    public function testSplDetect144()
    {
        $this->assertEquals('S-Данькевич', trim($this->object->getFullNameFormat('Данькевич')).'-Данькевич');
    }
    public function testSplDetect145()
    {
        $this->assertEquals('S-Дараган', trim($this->object->getFullNameFormat('Дараган')).'-Дараган');
    }
    public function testSplDetect146()
    {
        $this->assertEquals('S-Дашкевич', trim($this->object->getFullNameFormat('Дашкевич')).'-Дашкевич');
    }
    public function testSplDetect147()
    {
        $this->assertEquals('S-Денисенко', trim($this->object->getFullNameFormat('Денисенко')).'-Денисенко');
    }
    public function testSplDetect148()
    {
        $this->assertEquals('S-Джус', trim($this->object->getFullNameFormat('Джус')).'-Джус');
    }
    public function testSplDetect149()
    {
        $this->assertEquals('S-Дзюба', trim($this->object->getFullNameFormat('Дзюба')).'-Дзюба');
    }
    public function testSplDetect150()
    {
        $this->assertEquals('S-Дикань', trim($this->object->getFullNameFormat('Дикань')).'-Дикань');
    }
    public function testSplDetect151()
    {
        $this->assertEquals('S-Дмитерко', trim($this->object->getFullNameFormat('Дмитерко')).'-Дмитерко');
    }
    public function testSplDetect152()
    {
        $this->assertEquals('S-Довженко', trim($this->object->getFullNameFormat('Довженко')).'-Довженко');
    }
    public function testSplDetect153()
    {
        $this->assertEquals('S-Дорош', trim($this->object->getFullNameFormat('Дорош')).'-Дорош');
    }
    public function testSplDetect154()
    {
        $this->assertEquals('S-Дорошенко', trim($this->object->getFullNameFormat('Дорошенко')).'-Дорошенко');
    }
    public function testSplDetect155()
    {
        $this->assertEquals('S-Доценко', trim($this->object->getFullNameFormat('Доценко')).'-Доценко');
    }
    public function testSplDetect156()
    {
        $this->assertEquals('S-Дочинець', trim($this->object->getFullNameFormat('Дочинець')).'-Дочинець');
    }
    public function testSplDetect157()
    {
        $this->assertEquals('S-Мартоси', trim($this->object->getFullNameFormat('Мартоси')).'-Мартоси');
    }
    public function testSplDetect158()
    {
        $this->assertEquals('S-Дудко', trim($this->object->getFullNameFormat('Дудко')).'-Дудко');
    }
    public function testSplDetect159()
    {
        $this->assertEquals('S-Дяків', trim($this->object->getFullNameFormat('Дяків')).'-Дяків');
    }
    public function testSplDetect160()
    {
        $this->assertEquals('S-Дяченко', trim($this->object->getFullNameFormat('Дяченко')).'-Дяченко');
    }
    public function testSplDetect161()
    {
        $this->assertEquals('S-Ейбоженко', trim($this->object->getFullNameFormat('Ейбоженко')).'-Ейбоженко');
    }
    public function testSplDetect162()
    {
        $this->assertEquals('S-Жайворон', trim($this->object->getFullNameFormat('Жайворон')).'-Жайворон');
    }
    public function testSplDetect163()
    {
        $this->assertEquals('S-Жаліло', trim($this->object->getFullNameFormat('Жаліло')).'-Жаліло');
    }
    public function testSplDetect164()
    {
        $this->assertEquals('S-Жежерін', trim($this->object->getFullNameFormat('Жежерін')).'-Жежерін');
    }
    public function testSplDetect165()
    {
        $this->assertEquals('S-Желєзняк', trim($this->object->getFullNameFormat('Желєзняк')).'-Желєзняк');
    }
    public function testSplDetect166()
    {
        $this->assertEquals('S-Железняк', trim($this->object->getFullNameFormat('Железняк')).'-Железняк');
    }
    public function testSplDetect167()
    {
        $this->assertEquals('S-Жилко', trim($this->object->getFullNameFormat('Жилко')).'-Жилко');
    }
    public function testSplDetect168()
    {
        $this->assertEquals('S-Жирко', trim($this->object->getFullNameFormat('Жирко')).'-Жирко');
    }
    public function testSplDetect169()
    {
        $this->assertEquals('S-Жук', trim($this->object->getFullNameFormat('Жук')).'-Жук');
    }
    public function testSplDetect170()
    {
        $this->assertEquals('S-Жупанський', trim($this->object->getFullNameFormat('Жупанський')).'-Жупанський');
    }
    public function testSplDetect171()
    {
        $this->assertEquals('S-Заєць', trim($this->object->getFullNameFormat('Заєць')).'-Заєць');
    }
    public function testSplDetect172()
    {
        $this->assertEquals('S-Забашта', trim($this->object->getFullNameFormat('Забашта')).'-Забашта');
    }
    public function testSplDetect173()
    {
        $this->assertEquals('S-Заболотний', trim($this->object->getFullNameFormat('Заболотний')).'-Заболотний');
    }
    public function testSplDetect174()
    {
        $this->assertEquals('S-Завальнюк', trim($this->object->getFullNameFormat('Завальнюк')).'-Завальнюк');
    }
    public function testSplDetect175()
    {
        $this->assertEquals('S-Закусило', trim($this->object->getFullNameFormat('Закусило')).'-Закусило');
    }
    public function testSplDetect176()
    {
        $this->assertEquals('S-Залізняк', trim($this->object->getFullNameFormat('Залізняк')).'-Залізняк');
    }
    public function testSplDetect177()
    {
        $this->assertEquals('S-Заруба', trim($this->object->getFullNameFormat('Заруба')).'-Заруба');
    }
    public function testSplDetect178()
    {
        $this->assertEquals('S-Засядько', trim($this->object->getFullNameFormat('Засядько')).'-Засядько');
    }
    public function testSplDetect179()
    {
        $this->assertEquals('S-Захаренко', trim($this->object->getFullNameFormat('Захаренко')).'-Захаренко');
    }
    public function testSplDetect180()
    {
        $this->assertEquals('S-Захарчук', trim($this->object->getFullNameFormat('Захарчук')).'-Захарчук');
    }
    public function testSplDetect181()
    {
        $this->assertEquals('S-Заяць', trim($this->object->getFullNameFormat('Заяць')).'-Заяць');
    }
    public function testSplDetect182()
    {
        $this->assertEquals('S-Заячківський', trim($this->object->getFullNameFormat('Заячківський')).'-Заячківський');
    }
    public function testSplDetect183()
    {
        $this->assertEquals('S-Зленко', trim($this->object->getFullNameFormat('Зленко')).'-Зленко');
    }
    public function testSplDetect184()
    {
        $this->assertEquals('S-Золотаренко', trim($this->object->getFullNameFormat('Золотаренко')).'-Золотаренко');
    }
    public function testSplDetect185()
    {
        $this->assertEquals('S-Кабачок', trim($this->object->getFullNameFormat('Кабачок')).'-Кабачок');
    }
    public function testSplDetect186()
    {
        $this->assertEquals('S-Каганець', trim($this->object->getFullNameFormat('Каганець')).'-Каганець');
    }
    public function testSplDetect187()
    {
        $this->assertEquals('S-Калинович', trim($this->object->getFullNameFormat('Калинович')).'-Калинович');
    }
    public function testSplDetect188()
    {
        $this->assertEquals('S-Левковські', trim($this->object->getFullNameFormat('Левковські')).'-Левковські');
    }
    public function testSplDetect189()
    {
        $this->assertEquals('S-Кармалюк', trim($this->object->getFullNameFormat('Кармалюк')).'-Кармалюк');
    }
    public function testSplDetect190()
    {
        $this->assertEquals('S-Карпенко', trim($this->object->getFullNameFormat('Карпенко')).'-Карпенко');
    }
    public function testSplDetect191()
    {
        $this->assertEquals('S-Кириленко', trim($this->object->getFullNameFormat('Кириленко')).'-Кириленко');
    }
    public function testSplDetect192()
    {
        $this->assertEquals('S-Китастий', trim($this->object->getFullNameFormat('Китастий')).'-Китастий');
    }
    public function testSplDetect193()
    {
        $this->assertEquals('S-Кицай', trim($this->object->getFullNameFormat('Кицай')).'-Кицай');
    }
    public function testSplDetect194()
    {
        $this->assertEquals('S-Клименко', trim($this->object->getFullNameFormat('Клименко')).'-Клименко');
    }
    public function testSplDetect195()
    {
        $this->assertEquals('S-Климчук', trim($this->object->getFullNameFormat('Климчук')).'-Климчук');
    }
    public function testSplDetect196()
    {
        $this->assertEquals('S-Кмета', trim($this->object->getFullNameFormat('Кмета')).'-Кмета');
    }
    public function testSplDetect197()
    {
        $this->assertEquals('S-Книш', trim($this->object->getFullNameFormat('Книш')).'-Книш');
    }
    public function testSplDetect198()
    {
        $this->assertEquals('S-Ковалів', trim($this->object->getFullNameFormat('Ковалів')).'-Ковалів');
    }
    public function testSplDetect199()
    {
        $this->assertEquals('S-Коваленко', trim($this->object->getFullNameFormat('Коваленко')).'-Коваленко');
    }
    public function testSplDetect200()
    {
        $this->assertEquals('S-Коваль', trim($this->object->getFullNameFormat('Коваль')).'-Коваль');
    }
    public function testSplDetect201()
    {
        $this->assertEquals('S-Ковальчик', trim($this->object->getFullNameFormat('Ковальчик')).'-Ковальчик');
    }
    public function testSplDetect202()
    {
        $this->assertEquals('S-Ковальчук', trim($this->object->getFullNameFormat('Ковальчук')).'-Ковальчук');
    }
    public function testSplDetect203()
    {
        $this->assertEquals('S-Кованько', trim($this->object->getFullNameFormat('Кованько')).'-Кованько');
    }
    public function testSplDetect204()
    {
        $this->assertEquals('S-Ковтун', trim($this->object->getFullNameFormat('Ковтун')).'-Ковтун');
    }
    public function testSplDetect205()
    {
        $this->assertEquals('S-Козаченко', trim($this->object->getFullNameFormat('Козаченко')).'-Козаченко');
    }
    public function testSplDetect206()
    {
        $this->assertEquals('S-Козачинський', trim($this->object->getFullNameFormat('Козачинський')).'-Козачинський');
    }
    public function testSplDetect207()
    {
        $this->assertEquals('S-Козачок', trim($this->object->getFullNameFormat('Козачок')).'-Козачок');
    }
    public function testSplDetect208()
    {
        $this->assertEquals('S-Козубенко', trim($this->object->getFullNameFormat('Козубенко')).'-Козубенко');
    }
    public function testSplDetect209()
    {
        $this->assertEquals('S-Колесник', trim($this->object->getFullNameFormat('Колесник')).'-Колесник');
    }
    public function testSplDetect210()
    {
        $this->assertEquals('S-Колодій', trim($this->object->getFullNameFormat('Колодій')).'-Колодій');
    }
    public function testSplDetect211()
    {
        $this->assertEquals('S-Колодний', trim($this->object->getFullNameFormat('Колодний')).'-Колодний');
    }
    public function testSplDetect212()
    {
        $this->assertEquals('S-Коломієць', trim($this->object->getFullNameFormat('Коломієць')).'-Коломієць');
    }
    public function testSplDetect213()
    {
        $this->assertEquals('S-Комар', trim($this->object->getFullNameFormat('Комар')).'-Комар');
    }
    public function testSplDetect214()
    {
        $this->assertEquals('S-Кондратюк', trim($this->object->getFullNameFormat('Кондратюк')).'-Кондратюк');
    }
    public function testSplDetect215()
    {
        $this->assertEquals('S-Корецький', trim($this->object->getFullNameFormat('Корецький')).'-Корецький');
    }
    public function testSplDetect216()
    {
        $this->assertEquals('S-Корж', trim($this->object->getFullNameFormat('Корж')).'-Корж');
    }
    public function testSplDetect217()
    {
        $this->assertEquals('S-Корнійчук', trim($this->object->getFullNameFormat('Корнійчук')).'-Корнійчук');
    }
    public function testSplDetect218()
    {
        $this->assertEquals('S-Коробка', trim($this->object->getFullNameFormat('Коробка')).'-Коробка');
    }
    public function testSplDetect219()
    {
        $this->assertEquals('S-Королюк', trim($this->object->getFullNameFormat('Королюк')).'-Королюк');
    }
    public function testSplDetect220()
    {
        $this->assertEquals('S-Короткевич', trim($this->object->getFullNameFormat('Короткевич')).'-Короткевич');
    }
    public function testSplDetect221()
    {
        $this->assertEquals('S-Корпанюк', trim($this->object->getFullNameFormat('Корпанюк')).'-Корпанюк');
    }
    public function testSplDetect222()
    {
        $this->assertEquals('S-Корчак', trim($this->object->getFullNameFormat('Корчак')).'-Корчак');
    }
    public function testSplDetect223()
    {
        $this->assertEquals('S-Корчинський', trim($this->object->getFullNameFormat('Корчинський')).'-Корчинський');
    }
    public function testSplDetect224()
    {
        $this->assertEquals('S-Косенко', trim($this->object->getFullNameFormat('Косенко')).'-Косенко');
    }
    public function testSplDetect225()
    {
        $this->assertEquals('S-Костенко', trim($this->object->getFullNameFormat('Костенко')).'-Костенко');
    }
    public function testSplDetect226()
    {
        $this->assertEquals('S-Коструба', trim($this->object->getFullNameFormat('Коструба')).'-Коструба');
    }
    public function testSplDetect227()
    {
        $this->assertEquals('S-Костюк', trim($this->object->getFullNameFormat('Костюк')).'-Костюк');
    }
    public function testSplDetect228()
    {
        $this->assertEquals('S-Котляр', trim($this->object->getFullNameFormat('Котляр')).'-Котляр');
    }
    public function testSplDetect229()
    {
        $this->assertEquals('S-Котляревський', trim($this->object->getFullNameFormat('Котляревський')).'-Котляревський');
    }
    public function testSplDetect230()
    {
        $this->assertEquals('S-Кравців', trim($this->object->getFullNameFormat('Кравців')).'-Кравців');
    }
    public function testSplDetect231()
    {
        $this->assertEquals('S-Кравченко', trim($this->object->getFullNameFormat('Кравченко')).'-Кравченко');
    }
    public function testSplDetect232()
    {
        $this->assertEquals('S-Кравчук', trim($this->object->getFullNameFormat('Кравчук')).'-Кравчук');
    }
    public function testSplDetect233()
    {
        $this->assertEquals('S-Красовський', trim($this->object->getFullNameFormat('Красовський')).'-Красовський');
    }
    public function testSplDetect234()
    {
        $this->assertEquals('S-Криворучко', trim($this->object->getFullNameFormat('Криворучко')).'-Криворучко');
    }
    public function testSplDetect235()
    {
        $this->assertEquals('S-Крикуненко', trim($this->object->getFullNameFormat('Крикуненко')).'-Крикуненко');
    }
    public function testSplDetect236()
    {
        $this->assertEquals('S-Кузьмінський', trim($this->object->getFullNameFormat('Кузьмінський')).'-Кузьмінський');
    }
    public function testSplDetect237()
    {
        $this->assertEquals('S-Кулиняк', trim($this->object->getFullNameFormat('Кулиняк')).'-Кулиняк');
    }
    public function testSplDetect238()
    {
        $this->assertEquals('S-Кульчицький', trim($this->object->getFullNameFormat('Кульчицький')).'-Кульчицький');
    }
    public function testSplDetect239()
    {
        $this->assertEquals('S-Купчинський', trim($this->object->getFullNameFormat('Купчинський')).'-Купчинський');
    }
    public function testSplDetect240()
    {
        $this->assertEquals('S-Кухаренко', trim($this->object->getFullNameFormat('Кухаренко')).'-Кухаренко');
    }
    public function testSplDetect241()
    {
        $this->assertEquals('S-Куц', trim($this->object->getFullNameFormat('Куц')).'-Куц');
    }
    public function testSplDetect242()
    {
        $this->assertEquals('S-Куценко', trim($this->object->getFullNameFormat('Куценко')).'-Куценко');
    }
    public function testSplDetect243()
    {
        $this->assertEquals('S-Кучер', trim($this->object->getFullNameFormat('Кучер')).'-Кучер');
    }
    public function testSplDetect244()
    {
        $this->assertEquals('S-Кучеренко', trim($this->object->getFullNameFormat('Кучеренко')).'-Кучеренко');
    }
    public function testSplDetect245()
    {
        $this->assertEquals('S-Кушнір', trim($this->object->getFullNameFormat('Кушнір')).'-Кушнір');
    }
    public function testSplDetect246()
    {
        $this->assertEquals('S-Лаба', trim($this->object->getFullNameFormat('Лаба')).'-Лаба');
    }
    public function testSplDetect247()
    {
        $this->assertEquals('S-Лаврін', trim($this->object->getFullNameFormat('Лаврін')).'-Лаврін');
    }
    public function testSplDetect248()
    {
        $this->assertEquals('S-Лаврик', trim($this->object->getFullNameFormat('Лаврик')).'-Лаврик');
    }
    public function testSplDetect249()
    {
        $this->assertEquals('S-Лавриненко', trim($this->object->getFullNameFormat('Лавриненко')).'-Лавриненко');
    }
    public function testSplDetect250()
    {
        $this->assertEquals('S-Лазарчук', trim($this->object->getFullNameFormat('Лазарчук')).'-Лазарчук');
    }
    public function testSplDetect251()
    {
        $this->assertEquals('S-Лазорко', trim($this->object->getFullNameFormat('Лазорко')).'-Лазорко');
    }
    public function testSplDetect252()
    {
        $this->assertEquals('S-Левицький', trim($this->object->getFullNameFormat('Левицький')).'-Левицький');
    }
    public function testSplDetect253()
    {
        $this->assertEquals('S-Левченко', trim($this->object->getFullNameFormat('Левченко')).'-Левченко');
    }
    public function testSplDetect254()
    {
        $this->assertEquals('S-Лесів', trim($this->object->getFullNameFormat('Лесів')).'-Лесів');
    }
    public function testSplDetect255()
    {
        $this->assertEquals('S-Лисенко', trim($this->object->getFullNameFormat('Лисенко')).'-Лисенко');
    }
    public function testSplDetect256()
    {
        $this->assertEquals('S-Литвин', trim($this->object->getFullNameFormat('Литвин')).'-Литвин');
    }
    public function testSplDetect257()
    {
        $this->assertEquals('S-Литвиненко', trim($this->object->getFullNameFormat('Литвиненко')).'-Литвиненко');
    }
    public function testSplDetect258()
    {
        $this->assertEquals('S-Литвинов', trim($this->object->getFullNameFormat('Литвинов')).'-Литвинов');
    }
    public function testSplDetect259()
    {
        $this->assertEquals('S-Литовченко', trim($this->object->getFullNameFormat('Литовченко')).'-Литовченко');
    }
    public function testSplDetect260()
    {
        $this->assertEquals('S-Лозина-Лозинський', trim($this->object->getFullNameFormat('Лозина-Лозинський')).'-Лозина-Лозинський');
    }
    public function testSplDetect261()
    {
        $this->assertEquals('S-Лопатинський', trim($this->object->getFullNameFormat('Лопатинський')).'-Лопатинський');
    }
    public function testSplDetect262()
    {
        $this->assertEquals('S-Лукомський', trim($this->object->getFullNameFormat('Лукомський')).'-Лукомський');
    }
    public function testSplDetect263()
    {
        $this->assertEquals('S-Луценко', trim($this->object->getFullNameFormat('Луценко')).'-Луценко');
    }
    public function testSplDetect264()
    {
        $this->assertEquals('S-Людкевич', trim($this->object->getFullNameFormat('Людкевич')).'-Людкевич');
    }
    public function testSplDetect265()
    {
        $this->assertEquals('S-Ляшенко', trim($this->object->getFullNameFormat('Ляшенко')).'-Ляшенко');
    }
    public function testSplDetect266()
    {
        $this->assertEquals('S-Мірошниченко', trim($this->object->getFullNameFormat('Мірошниченко')).'-Мірошниченко');
    }
    public function testSplDetect267()
    {
        $this->assertEquals('S-Мірчук', trim($this->object->getFullNameFormat('Мірчук')).'-Мірчук');
    }
    public function testSplDetect268()
    {
        $this->assertEquals('S-Міщенко', trim($this->object->getFullNameFormat('Міщенко')).'-Міщенко');
    }
    public function testSplDetect269()
    {
        $this->assertEquals('S-Курцевичі', trim($this->object->getFullNameFormat('Курцевичі')).'-Курцевичі');
    }
    public function testSplDetect270()
    {
        $this->assertEquals('S-Мазур', trim($this->object->getFullNameFormat('Мазур')).'-Мазур');
    }
    public function testSplDetect271()
    {
        $this->assertEquals('S-Макаренко', trim($this->object->getFullNameFormat('Макаренко')).'-Макаренко');
    }
    public function testSplDetect272()
    {
        $this->assertEquals('S-Максименко', trim($this->object->getFullNameFormat('Максименко')).'-Максименко');
    }
    public function testSplDetect273()
    {
        $this->assertEquals('S-Маланчук', trim($this->object->getFullNameFormat('Маланчук')).'-Маланчук');
    }
    public function testSplDetect274()
    {
        $this->assertEquals('S-Малишко', trim($this->object->getFullNameFormat('Малишко')).'-Малишко');
    }
    public function testSplDetect275()
    {
        $this->assertEquals('S-Малкович', trim($this->object->getFullNameFormat('Малкович')).'-Малкович');
    }
    public function testSplDetect276()
    {
        $this->assertEquals('S-Мамчур', trim($this->object->getFullNameFormat('Мамчур')).'-Мамчур');
    }
    public function testSplDetect277()
    {
        $this->assertEquals('S-Маркевич', trim($this->object->getFullNameFormat('Маркевич')).'-Маркевич');
    }
    public function testSplDetect278()
    {
        $this->assertEquals('S-Мартиненко', trim($this->object->getFullNameFormat('Мартиненко')).'-Мартиненко');
    }
    public function testSplDetect279()
    {
        $this->assertEquals('S-Кисилі', trim($this->object->getFullNameFormat('Кисилі')).'-Кисилі');
    }
    public function testSplDetect280()
    {
        $this->assertEquals('S-Марунчак', trim($this->object->getFullNameFormat('Марунчак')).'-Марунчак');
    }
    public function testSplDetect281()
    {
        $this->assertEquals('S-Марценюк', trim($this->object->getFullNameFormat('Марценюк')).'-Марценюк');
    }
    public function testSplDetect282()
    {
        $this->assertEquals('S-Марченко', trim($this->object->getFullNameFormat('Марченко')).'-Марченко');
    }
    public function testSplDetect283()
    {
        $this->assertEquals('S-Марчук', trim($this->object->getFullNameFormat('Марчук')).'-Марчук');
    }
    public function testSplDetect284()
    {
        $this->assertEquals('S-Масоха', trim($this->object->getFullNameFormat('Масоха')).'-Масоха');
    }
    public function testSplDetect285()
    {
        $this->assertEquals('S-Матвієнко', trim($this->object->getFullNameFormat('Матвієнко')).'-Матвієнко');
    }
    public function testSplDetect286()
    {
        $this->assertEquals('S-Матюшенко', trim($this->object->getFullNameFormat('Матюшенко')).'-Матюшенко');
    }
    public function testSplDetect287()
    {
        $this->assertEquals('S-Маценко', trim($this->object->getFullNameFormat('Маценко')).'-Маценко');
    }
    public function testSplDetect288()
    {
        $this->assertEquals('S-Мацюк', trim($this->object->getFullNameFormat('Мацюк')).'-Мацюк');
    }
    public function testSplDetect289()
    {
        $this->assertEquals('S-Мельник', trim($this->object->getFullNameFormat('Мельник')).'-Мельник');
    }
    public function testSplDetect290()
    {
        $this->assertEquals('S-Мельниченко', trim($this->object->getFullNameFormat('Мельниченко')).'-Мельниченко');
    }
    public function testSplDetect291()
    {
        $this->assertEquals('S-Мельничук', trim($this->object->getFullNameFormat('Мельничук')).'-Мельничук');
    }
    public function testSplDetect292()
    {
        $this->assertEquals('S-Микитенко', trim($this->object->getFullNameFormat('Микитенко')).'-Микитенко');
    }
    public function testSplDetect293()
    {
        $this->assertEquals('S-Микитин', trim($this->object->getFullNameFormat('Микитин')).'-Микитин');
    }
    public function testSplDetect294()
    {
        $this->assertEquals('S-Мирон', trim($this->object->getFullNameFormat('Мирон')).'-Мирон');
    }
    public function testSplDetect295()
    {
        $this->assertEquals('S-Михайленко', trim($this->object->getFullNameFormat('Михайленко')).'-Михайленко');
    }
    public function testSplDetect296()
    {
        $this->assertEquals('S-Михайличенко', trim($this->object->getFullNameFormat('Михайличенко')).'-Михайличенко');
    }
    public function testSplDetect297()
    {
        $this->assertEquals('S-Михайлюк', trim($this->object->getFullNameFormat('Михайлюк')).'-Михайлюк');
    }
    public function testSplDetect298()
    {
        $this->assertEquals('S-Мицик', trim($this->object->getFullNameFormat('Мицик')).'-Мицик');
    }
    public function testSplDetect299()
    {
        $this->assertEquals('S-Мовчан', trim($this->object->getFullNameFormat('Мовчан')).'-Мовчан');
    }
    public function testSplDetect300()
    {
        $this->assertEquals('S-Значко-Яворські', trim($this->object->getFullNameFormat('Значко-Яворські')).'-Значко-Яворські');
    }
    public function testSplDetect301()
    {
        $this->assertEquals('S-Моргун', trim($this->object->getFullNameFormat('Моргун')).'-Моргун');
    }
    public function testSplDetect302()
    {
        $this->assertEquals('S-Мороз', trim($this->object->getFullNameFormat('Мороз')).'-Мороз');
    }
    public function testSplDetect303()
    {
        $this->assertEquals('S-Домонтовичі', trim($this->object->getFullNameFormat('Домонтовичі')).'-Домонтовичі');
    }
    public function testSplDetect304()
    {
        $this->assertEquals('S-Москаленко', trim($this->object->getFullNameFormat('Москаленко')).'-Москаленко');
    }
    public function testSplDetect305()
    {
        $this->assertEquals('S-Москаль', trim($this->object->getFullNameFormat('Москаль')).'-Москаль');
    }
    public function testSplDetect306()
    {
        $this->assertEquals('S-Мошак', trim($this->object->getFullNameFormat('Мошак')).'-Мошак');
    }
    public function testSplDetect307()
    {
        $this->assertEquals('S-Муратова', trim($this->object->getFullNameFormat('Муратова')).'-Муратова');
    }
    public function testSplDetect308()
    {
        $this->assertEquals('S-Мусієнко', trim($this->object->getFullNameFormat('Мусієнко')).'-Мусієнко');
    }
    public function testSplDetect309()
    {
        $this->assertEquals('S-Назаренко', trim($this->object->getFullNameFormat('Назаренко')).'-Назаренко');
    }
    public function testSplDetect310()
    {
        $this->assertEquals('S-Наливайко', trim($this->object->getFullNameFormat('Наливайко')).'-Наливайко');
    }
    public function testSplDetect311()
    {
        $this->assertEquals('S-Негребецький', trim($this->object->getFullNameFormat('Негребецький')).'-Негребецький');
    }
    public function testSplDetect312()
    {
        $this->assertEquals('S-Непорожній', trim($this->object->getFullNameFormat('Непорожній')).'-Непорожній');
    }
    public function testSplDetect313()
    {
        $this->assertEquals('S-Нестеренко', trim($this->object->getFullNameFormat('Нестеренко')).'-Нестеренко');
    }
    public function testSplDetect314()
    {
        $this->assertEquals('S-Нечай', trim($this->object->getFullNameFormat('Нечай')).'-Нечай');
    }
    public function testSplDetect315()
    {
        $this->assertEquals('S-Нечипоренко', trim($this->object->getFullNameFormat('Нечипоренко')).'-Нечипоренко');
    }
    public function testSplDetect316()
    {
        $this->assertEquals('S-Оберемченко', trim($this->object->getFullNameFormat('Оберемченко')).'-Оберемченко');
    }
    public function testSplDetect317()
    {
        $this->assertEquals('S-Овчаренко', trim($this->object->getFullNameFormat('Овчаренко')).'-Овчаренко');
    }
    public function testSplDetect318()
    {
        $this->assertEquals('S-Олійник', trim($this->object->getFullNameFormat('Олійник')).'-Олійник');
    }
    public function testSplDetect319()
    {
        $this->assertEquals('S-Олексієнко', trim($this->object->getFullNameFormat('Олексієнко')).'-Олексієнко');
    }
    public function testSplDetect320()
    {
        $this->assertEquals('S-Омельченко', trim($this->object->getFullNameFormat('Омельченко')).'-Омельченко');
    }
    public function testSplDetect321()
    {
        $this->assertEquals('S-Омельчук', trim($this->object->getFullNameFormat('Омельчук')).'-Омельчук');
    }
    public function testSplDetect322()
    {
        $this->assertEquals('S-Онищенко', trim($this->object->getFullNameFormat('Онищенко')).'-Онищенко');
    }
    public function testSplDetect323()
    {
        $this->assertEquals('S-Онопенко', trim($this->object->getFullNameFormat('Онопенко')).'-Онопенко');
    }
    public function testSplDetect324()
    {
        $this->assertEquals('S-Опанасенко', trim($this->object->getFullNameFormat('Опанасенко')).'-Опанасенко');
    }
    public function testSplDetect325()
    {
        $this->assertEquals('S-Милорадовичі', trim($this->object->getFullNameFormat('Милорадовичі')).'-Милорадовичі');
    }
    public function testSplDetect326()
    {
        $this->assertEquals('S-Осадчук', trim($this->object->getFullNameFormat('Осадчук')).'-Осадчук');
    }
    public function testSplDetect327()
    {
        $this->assertEquals('S-Осика', trim($this->object->getFullNameFormat('Осика')).'-Осика');
    }
    public function testSplDetect328()
    {
        $this->assertEquals('S-Остапенко', trim($this->object->getFullNameFormat('Остапенко')).'-Остапенко');
    }
    public function testSplDetect329()
    {
        $this->assertEquals('S-Остроградський', trim($this->object->getFullNameFormat('Остроградський')).'-Остроградський');
    }
    public function testSplDetect330()
    {
        $this->assertEquals('S-Півторак', trim($this->object->getFullNameFormat('Півторак')).'-Півторак');
    }
    public function testSplDetect331()
    {
        $this->assertEquals('S-Підопригора', trim($this->object->getFullNameFormat('Підопригора')).'-Підопригора');
    }
    public function testSplDetect332()
    {
        $this->assertEquals('S-Павленко', trim($this->object->getFullNameFormat('Павленко')).'-Павленко');
    }
    public function testSplDetect333()
    {
        $this->assertEquals('S-Павлюк', trim($this->object->getFullNameFormat('Павлюк')).'-Павлюк');
    }
    public function testSplDetect334()
    {
        $this->assertEquals('S-Павлюченко', trim($this->object->getFullNameFormat('Павлюченко')).'-Павлюченко');
    }
    public function testSplDetect335()
    {
        $this->assertEquals('S-Пазенко', trim($this->object->getFullNameFormat('Пазенко')).'-Пазенко');
    }
    public function testSplDetect336()
    {
        $this->assertEquals('S-Паламарчук', trim($this->object->getFullNameFormat('Паламарчук')).'-Паламарчук');
    }
    public function testSplDetect337()
    {
        $this->assertEquals('S-Панас', trim($this->object->getFullNameFormat('Панас')).'-Панас');
    }
    public function testSplDetect338()
    {
        $this->assertEquals('S-Панасюк', trim($this->object->getFullNameFormat('Панасюк')).'-Панасюк');
    }
    public function testSplDetect339()
    {
        $this->assertEquals('S-Паньківський', trim($this->object->getFullNameFormat('Паньківський')).'-Паньківський');
    }
    public function testSplDetect340()
    {
        $this->assertEquals('S-Пархоменко', trim($this->object->getFullNameFormat('Пархоменко')).'-Пархоменко');
    }
    public function testSplDetect341()
    {
        $this->assertEquals('S-Пасічник', trim($this->object->getFullNameFormat('Пасічник')).'-Пасічник');
    }
    public function testSplDetect342()
    {
        $this->assertEquals('S-Пасько', trim($this->object->getFullNameFormat('Пасько')).'-Пасько');
    }
    public function testSplDetect343()
    {
        $this->assertEquals('S-Пашко', trim($this->object->getFullNameFormat('Пашко')).'-Пашко');
    }
    public function testSplDetect344()
    {
        $this->assertEquals('S-Пащенко', trim($this->object->getFullNameFormat('Пащенко')).'-Пащенко');
    }
    public function testSplDetect345()
    {
        $this->assertEquals('S-Перебийніс', trim($this->object->getFullNameFormat('Перебийніс')).'-Перебийніс');
    }
    public function testSplDetect346()
    {
        $this->assertEquals('S-Петренко', trim($this->object->getFullNameFormat('Петренко')).'-Петренко');
    }
    public function testSplDetect347()
    {
        $this->assertEquals('S-Пилипенко', trim($this->object->getFullNameFormat('Пилипенко')).'-Пилипенко');
    }
    public function testSplDetect348()
    {
        $this->assertEquals('S-Пилипишин', trim($this->object->getFullNameFormat('Пилипишин')).'-Пилипишин');
    }
    public function testSplDetect349()
    {
        $this->assertEquals('S-Пилипчук', trim($this->object->getFullNameFormat('Пилипчук')).'-Пилипчук');
    }
    public function testSplDetect350()
    {
        $this->assertEquals('S-Писаренко', trim($this->object->getFullNameFormat('Писаренко')).'-Писаренко');
    }
    public function testSplDetect351()
    {
        $this->assertEquals('S-Писарчук', trim($this->object->getFullNameFormat('Писарчук')).'-Писарчук');
    }
    public function testSplDetect352()
    {
        $this->assertEquals('S-Плющ', trim($this->object->getFullNameFormat('Плющ')).'-Плющ');
    }
    public function testSplDetect353()
    {
        $this->assertEquals('S-Покотило', trim($this->object->getFullNameFormat('Покотило')).'-Покотило');
    }
    public function testSplDetect354()
    {
        $this->assertEquals('S-Поліщук', trim($this->object->getFullNameFormat('Поліщук')).'-Поліщук');
    }
    public function testSplDetect355()
    {
        $this->assertEquals('S-Польовий', trim($this->object->getFullNameFormat('Польовий')).'-Польовий');
    }
    public function testSplDetect356()
    {
        $this->assertEquals('S-Полянський', trim($this->object->getFullNameFormat('Полянський')).'-Полянський');
    }
    public function testSplDetect357()
    {
        $this->assertEquals('S-Пономаренко', trim($this->object->getFullNameFormat('Пономаренко')).'-Пономаренко');
    }
    public function testSplDetect358()
    {
        $this->assertEquals('S-Пономарьов', trim($this->object->getFullNameFormat('Пономарьов')).'-Пономарьов');
    }
    public function testSplDetect359()
    {
        $this->assertEquals('S-Попадюк', trim($this->object->getFullNameFormat('Попадюк')).'-Попадюк');
    }
    public function testSplDetect360()
    {
        $this->assertEquals('S-Попенко', trim($this->object->getFullNameFormat('Попенко')).'-Попенко');
    }
    public function testSplDetect361()
    {
        $this->assertEquals('S-Потапенко', trim($this->object->getFullNameFormat('Потапенко')).'-Потапенко');
    }
    public function testSplDetect362()
    {
        $this->assertEquals('S-Потебенько', trim($this->object->getFullNameFormat('Потебенько')).'-Потебенько');
    }
    public function testSplDetect363()
    {
        $this->assertEquals('S-Прийма', trim($this->object->getFullNameFormat('Прийма')).'-Прийма');
    }
    public function testSplDetect364()
    {
        $this->assertEquals('S-Приймак', trim($this->object->getFullNameFormat('Приймак')).'-Приймак');
    }
    public function testSplDetect365()
    {
        $this->assertEquals('S-Присяжнюк', trim($this->object->getFullNameFormat('Присяжнюк')).'-Присяжнюк');
    }
    public function testSplDetect366()
    {
        $this->assertEquals('S-Приходько', trim($this->object->getFullNameFormat('Приходько')).'-Приходько');
    }
    public function testSplDetect367()
    {
        $this->assertEquals('S-Продан', trim($this->object->getFullNameFormat('Продан')).'-Продан');
    }
    public function testSplDetect368()
    {
        $this->assertEquals('S-Проценко', trim($this->object->getFullNameFormat('Проценко')).'-Проценко');
    }
    public function testSplDetect369()
    {
        $this->assertEquals('S-Проць', trim($this->object->getFullNameFormat('Проць')).'-Проць');
    }
    public function testSplDetect370()
    {
        $this->assertEquals('S-Процюк', trim($this->object->getFullNameFormat('Процюк')).'-Процюк');
    }
    public function testSplDetect371()
    {
        $this->assertEquals('S-Пушкар', trim($this->object->getFullNameFormat('Пушкар')).'-Пушкар');
    }
    public function testSplDetect372()
    {
        $this->assertEquals('S-Тарновські', trim($this->object->getFullNameFormat('Тарновські')).'-Тарновські');
    }
    public function testSplDetect373()
    {
        $this->assertEquals('S-Різун', trim($this->object->getFullNameFormat('Різун')).'-Різун');
    }
    public function testSplDetect374()
    {
        $this->assertEquals('S-Радченко', trim($this->object->getFullNameFormat('Радченко')).'-Радченко');
    }
    public function testSplDetect375()
    {
        $this->assertEquals('S-Рибальченко', trim($this->object->getFullNameFormat('Рибальченко')).'-Рибальченко');
    }
    public function testSplDetect376()
    {
        $this->assertEquals('S-Римар', trim($this->object->getFullNameFormat('Римар')).'-Римар');
    }
    public function testSplDetect377()
    {
        $this->assertEquals('S-Стороженки', trim($this->object->getFullNameFormat('Стороженки')).'-Стороженки');
    }
    public function testSplDetect378()
    {
        $this->assertEquals('S-Рожок', trim($this->object->getFullNameFormat('Рожок')).'-Рожок');
    }
    public function testSplDetect379()
    {
        $this->assertEquals('S-Романенко', trim($this->object->getFullNameFormat('Романенко')).'-Романенко');
    }
    public function testSplDetect380()
    {
        $this->assertEquals('S-Романишин', trim($this->object->getFullNameFormat('Романишин')).'-Романишин');
    }
    public function testSplDetect381()
    {
        $this->assertEquals('S-Романчук', trim($this->object->getFullNameFormat('Романчук')).'-Романчук');
    }
    public function testSplDetect382()
    {
        $this->assertEquals('S-Романюк', trim($this->object->getFullNameFormat('Романюк')).'-Романюк');
    }
    public function testSplDetect383()
    {
        $this->assertEquals('S-Рошкевич', trim($this->object->getFullNameFormat('Рошкевич')).'-Рошкевич');
    }
    public function testSplDetect384()
    {
        $this->assertEquals('S-Рубан', trim($this->object->getFullNameFormat('Рубан')).'-Рубан');
    }
    public function testSplDetect385()
    {
        $this->assertEquals('S-Гординські', trim($this->object->getFullNameFormat('Гординські')).'-Гординські');
    }
    public function testSplDetect386()
    {
        $this->assertEquals('S-Руденко', trim($this->object->getFullNameFormat('Руденко')).'-Руденко');
    }
    public function testSplDetect387()
    {
        $this->assertEquals('S-Рябовіл', trim($this->object->getFullNameFormat('Рябовіл')).'-Рябовіл');
    }
    public function testSplDetect388()
    {
        $this->assertEquals('S-Сімашкевич', trim($this->object->getFullNameFormat('Сімашкевич')).'-Сімашкевич');
    }
    public function testSplDetect389()
    {
        $this->assertEquals('S-Саєнко', trim($this->object->getFullNameFormat('Саєнко')).'-Саєнко');
    }
    public function testSplDetect390()
    {
        $this->assertEquals('S-Савенко', trim($this->object->getFullNameFormat('Савенко')).'-Савенко');
    }
    public function testSplDetect391()
    {
        $this->assertEquals('S-Савицька', trim($this->object->getFullNameFormat('Савицька')).'-Савицька');
    }
    public function testSplDetect392()
    {
        $this->assertEquals('S-Савка', trim($this->object->getFullNameFormat('Савка')).'-Савка');
    }
    public function testSplDetect393()
    {
        $this->assertEquals('S-Савченко', trim($this->object->getFullNameFormat('Савченко')).'-Савченко');
    }
    public function testSplDetect394()
    {
        $this->assertEquals('S-Савчук', trim($this->object->getFullNameFormat('Савчук')).'-Савчук');
    }
    public function testSplDetect395()
    {
        $this->assertEquals('S-Сак', trim($this->object->getFullNameFormat('Сак')).'-Сак');
    }
    public function testSplDetect396()
    {
        $this->assertEquals('S-Самборський', trim($this->object->getFullNameFormat('Самборський')).'-Самборський');
    }
    public function testSplDetect397()
    {
        $this->assertEquals('S-Самойлович', trim($this->object->getFullNameFormat('Самойлович')).'-Самойлович');
    }
    public function testSplDetect398()
    {
        $this->assertEquals('S-Самусь', trim($this->object->getFullNameFormat('Самусь')).'-Самусь');
    }
    public function testSplDetect399()
    {
        $this->assertEquals('S-Свида', trim($this->object->getFullNameFormat('Свида')).'-Свида');
    }
    public function testSplDetect400()
    {
        $this->assertEquals('S-Семашко', trim($this->object->getFullNameFormat('Семашко')).'-Семашко');
    }
    public function testSplDetect401()
    {
        $this->assertEquals('S-Семененко', trim($this->object->getFullNameFormat('Семененко')).'-Семененко');
    }
    public function testSplDetect402()
    {
        $this->assertEquals('S-Семенець', trim($this->object->getFullNameFormat('Семенець')).'-Семенець');
    }
    public function testSplDetect403()
    {
        $this->assertEquals('S-Семенина', trim($this->object->getFullNameFormat('Семенина')).'-Семенина');
    }
    public function testSplDetect404()
    {
        $this->assertEquals('S-Семенченко', trim($this->object->getFullNameFormat('Семенченко')).'-Семенченко');
    }
    public function testSplDetect405()
    {
        $this->assertEquals('S-Семенюк', trim($this->object->getFullNameFormat('Семенюк')).'-Семенюк');
    }
    public function testSplDetect406()
    {
        $this->assertEquals('S-Семеренко', trim($this->object->getFullNameFormat('Семеренко')).'-Семеренко');
    }
    public function testSplDetect407()
    {
        $this->assertEquals('S-Сидоренко', trim($this->object->getFullNameFormat('Сидоренко')).'-Сидоренко');
    }
    public function testSplDetect408()
    {
        $this->assertEquals('S-Силенко', trim($this->object->getFullNameFormat('Силенко')).'-Силенко');
    }
    public function testSplDetect409()
    {
        $this->assertEquals('S-Симоненко', trim($this->object->getFullNameFormat('Симоненко')).'-Симоненко');
    }
    public function testSplDetect410()
    {
        $this->assertEquals('S-Симчич', trim($this->object->getFullNameFormat('Симчич')).'-Симчич');
    }
    public function testSplDetect411()
    {
        $this->assertEquals('S-Скрипник', trim($this->object->getFullNameFormat('Скрипник')).'-Скрипник');
    }
    public function testSplDetect412()
    {
        $this->assertEquals('S-Скуратівський', trim($this->object->getFullNameFormat('Скуратівський')).'-Скуратівський');
    }
    public function testSplDetect413()
    {
        $this->assertEquals('S-Слободян', trim($this->object->getFullNameFormat('Слободян')).'-Слободян');
    }
    public function testSplDetect414()
    {
        $this->assertEquals('S-Слободянюк', trim($this->object->getFullNameFormat('Слободянюк')).'-Слободянюк');
    }
    public function testSplDetect415()
    {
        $this->assertEquals('S-Смик', trim($this->object->getFullNameFormat('Смик')).'-Смик');
    }
    public function testSplDetect416()
    {
        $this->assertEquals('S-Смогоржевський', trim($this->object->getFullNameFormat('Смогоржевський')).'-Смогоржевський');
    }
    public function testSplDetect417()
    {
        $this->assertEquals('S-Собчук', trim($this->object->getFullNameFormat('Собчук')).'-Собчук');
    }
    public function testSplDetect418()
    {
        $this->assertEquals('S-Сопронюк', trim($this->object->getFullNameFormat('Сопронюк')).'-Сопронюк');
    }
    public function testSplDetect419()
    {
        $this->assertEquals('S-Сорока', trim($this->object->getFullNameFormat('Сорока')).'-Сорока');
    }
    public function testSplDetect420()
    {
        $this->assertEquals('S-Сохань', trim($this->object->getFullNameFormat('Сохань')).'-Сохань');
    }
    public function testSplDetect421()
    {
        $this->assertEquals('S-Стадник', trim($this->object->getFullNameFormat('Стадник')).'-Стадник');
    }
    public function testSplDetect422()
    {
        $this->assertEquals('S-Стельмах', trim($this->object->getFullNameFormat('Стельмах')).'-Стельмах');
    }
    public function testSplDetect423()
    {
        $this->assertEquals('S-Степаненко', trim($this->object->getFullNameFormat('Степаненко')).'-Степаненко');
    }
    public function testSplDetect424()
    {
        $this->assertEquals('S-Степура', trim($this->object->getFullNameFormat('Степура')).'-Степура');
    }
    public function testSplDetect425()
    {
        $this->assertEquals('S-Стеценко', trim($this->object->getFullNameFormat('Стеценко')).'-Стеценко');
    }
    public function testSplDetect426()
    {
        $this->assertEquals('S-Стецюк', trim($this->object->getFullNameFormat('Стецюк')).'-Стецюк');
    }
    public function testSplDetect427()
    {
        $this->assertEquals('S-Струтинський', trim($this->object->getFullNameFormat('Струтинський')).'-Струтинський');
    }
    public function testSplDetect428()
    {
        $this->assertEquals('S-Сулима', trim($this->object->getFullNameFormat('Сулима')).'-Сулима');
    }
    public function testSplDetect429()
    {
        $this->assertEquals('S-Войнаровські', trim($this->object->getFullNameFormat('Войнаровські')).'-Войнаровські');
    }
    public function testSplDetect430()
    {
        $this->assertEquals('S-Супруненко', trim($this->object->getFullNameFormat('Супруненко')).'-Супруненко');
    }
    public function testSplDetect431()
    {
        $this->assertEquals('S-Тараненко', trim($this->object->getFullNameFormat('Тараненко')).'-Тараненко');
    }
    public function testSplDetect432()
    {
        $this->assertEquals('S-Татаренко', trim($this->object->getFullNameFormat('Татаренко')).'-Татаренко');
    }
    public function testSplDetect433()
    {
        $this->assertEquals('S-Теплицький', trim($this->object->getFullNameFormat('Теплицький')).'-Теплицький');
    }
    public function testSplDetect434()
    {
        $this->assertEquals('S-Терещенко', trim($this->object->getFullNameFormat('Терещенко')).'-Терещенко');
    }
    public function testSplDetect435()
    {
        $this->assertEquals('S-Терещук', trim($this->object->getFullNameFormat('Терещук')).'-Терещук');
    }
    public function testSplDetect436()
    {
        $this->assertEquals('S-Тесленко', trim($this->object->getFullNameFormat('Тесленко')).'-Тесленко');
    }
    public function testSplDetect437()
    {
        $this->assertEquals('S-Тимошенко', trim($this->object->getFullNameFormat('Тимошенко')).'-Тимошенко');
    }
    public function testSplDetect438()
    {
        $this->assertEquals('S-Тимощук', trim($this->object->getFullNameFormat('Тимощук')).'-Тимощук');
    }
    public function testSplDetect439()
    {
        $this->assertEquals('S-Тимчак', trim($this->object->getFullNameFormat('Тимчак')).'-Тимчак');
    }
    public function testSplDetect440()
    {
        $this->assertEquals('S-Титаренко', trim($this->object->getFullNameFormat('Титаренко')).'-Титаренко');
    }
    public function testSplDetect441()
    {
        $this->assertEquals('S-Тищенко', trim($this->object->getFullNameFormat('Тищенко')).'-Тищенко');
    }
    public function testSplDetect442()
    {
        $this->assertEquals('S-Ткач', trim($this->object->getFullNameFormat('Ткач')).'-Ткач');
    }
    public function testSplDetect443()
    {
        $this->assertEquals('S-Ткаченко', trim($this->object->getFullNameFormat('Ткаченко')).'-Ткаченко');
    }
    public function testSplDetect444()
    {
        $this->assertEquals('S-Ткачук', trim($this->object->getFullNameFormat('Ткачук')).'-Ткачук');
    }
    public function testSplDetect445()
    {
        $this->assertEquals('S-Толочко', trim($this->object->getFullNameFormat('Толочко')).'-Толочко');
    }
    public function testSplDetect446()
    {
        $this->assertEquals('S-Томенко', trim($this->object->getFullNameFormat('Томенко')).'-Томенко');
    }
    public function testSplDetect447()
    {
        $this->assertEquals('S-Тулуб', trim($this->object->getFullNameFormat('Тулуб')).'-Тулуб');
    }
    public function testSplDetect448()
    {
        $this->assertEquals('S-Удовенко', trim($this->object->getFullNameFormat('Удовенко')).'-Удовенко');
    }
    public function testSplDetect449()
    {
        $this->assertEquals('S-Удовиченко', trim($this->object->getFullNameFormat('Удовиченко')).'-Удовиченко');
    }
    public function testSplDetect450()
    {
        $this->assertEquals('S-Усенко', trim($this->object->getFullNameFormat('Усенко')).'-Усенко');
    }
    public function testSplDetect451()
    {
        $this->assertEquals('S-Філоненко', trim($this->object->getFullNameFormat('Філоненко')).'-Філоненко');
    }
    public function testSplDetect452()
    {
        $this->assertEquals('S-Феденко', trim($this->object->getFullNameFormat('Феденко')).'-Феденко');
    }
    public function testSplDetect453()
    {
        $this->assertEquals('S-Федоренко', trim($this->object->getFullNameFormat('Федоренко')).'-Федоренко');
    }
    public function testSplDetect454()
    {
        $this->assertEquals('S-Федорук', trim($this->object->getFullNameFormat('Федорук')).'-Федорук');
    }
    public function testSplDetect455()
    {
        $this->assertEquals('S-Фещенко', trim($this->object->getFullNameFormat('Фещенко')).'-Фещенко');
    }
    public function testSplDetect456()
    {
        $this->assertEquals('S-Фоменко', trim($this->object->getFullNameFormat('Фоменко')).'-Фоменко');
    }
    public function testSplDetect457()
    {
        $this->assertEquals('S-Скоропадські', trim($this->object->getFullNameFormat('Скоропадські')).'-Скоропадські');
    }
    public function testSplDetect458()
    {
        $this->assertEquals('S-Ханенко', trim($this->object->getFullNameFormat('Ханенко')).'-Ханенко');
    }
    public function testSplDetect459()
    {
        $this->assertEquals('S-Скаржинські', trim($this->object->getFullNameFormat('Скаржинські')).'-Скаржинські');
    }
    public function testSplDetect460()
    {
        $this->assertEquals('S-Харчук', trim($this->object->getFullNameFormat('Харчук')).'-Харчук');
    }
    public function testSplDetect461()
    {
        $this->assertEquals('S-Хміляр', trim($this->object->getFullNameFormat('Хміляр')).'-Хміляр');
    }
    public function testSplDetect462()
    {
        $this->assertEquals('S-Хмара', trim($this->object->getFullNameFormat('Хмара')).'-Хмара');
    }
    public function testSplDetect463()
    {
        $this->assertEquals('S-Холодовський', trim($this->object->getFullNameFormat('Холодовський')).'-Холодовський');
    }
    public function testSplDetect464()
    {
        $this->assertEquals('S-Хоменко', trim($this->object->getFullNameFormat('Хоменко')).'-Хоменко');
    }
    public function testSplDetect465()
    {
        $this->assertEquals('S-Царук', trim($this->object->getFullNameFormat('Царук')).'-Царук');
    }
    public function testSplDetect466()
    {
        $this->assertEquals('S-Цибуленко', trim($this->object->getFullNameFormat('Цибуленко')).'-Цибуленко');
    }
    public function testSplDetect467()
    {
        $this->assertEquals('S-Цюпа', trim($this->object->getFullNameFormat('Цюпа')).'-Цюпа');
    }
    public function testSplDetect468()
    {
        $this->assertEquals('S-Чабаненко', trim($this->object->getFullNameFormat('Чабаненко')).'-Чабаненко');
    }
    public function testSplDetect469()
    {
        $this->assertEquals('S-Чанов', trim($this->object->getFullNameFormat('Чанов')).'-Чанов');
    }
    public function testSplDetect470()
    {
        $this->assertEquals('S-Чередниченко', trim($this->object->getFullNameFormat('Чередниченко')).'-Чередниченко');
    }
    public function testSplDetect471()
    {
        $this->assertEquals('S-Чернявський', trim($this->object->getFullNameFormat('Чернявський')).'-Чернявський');
    }
    public function testSplDetect472()
    {
        $this->assertEquals('S-Чорний', trim($this->object->getFullNameFormat('Чорний')).'-Чорний');
    }
    public function testSplDetect473()
    {
        $this->assertEquals('S-Чорновіл', trim($this->object->getFullNameFormat('Чорновіл')).'-Чорновіл');
    }
    public function testSplDetect474()
    {
        $this->assertEquals('S-Чуйкевич', trim($this->object->getFullNameFormat('Чуйкевич')).'-Чуйкевич');
    }
    public function testSplDetect475()
    {
        $this->assertEquals('S-Чумак', trim($this->object->getFullNameFormat('Чумак')).'-Чумак');
    }
    public function testSplDetect476()
    {
        $this->assertEquals('S-Чумаченко', trim($this->object->getFullNameFormat('Чумаченко')).'-Чумаченко');
    }
    public function testSplDetect477()
    {
        $this->assertEquals('S-Шахрай', trim($this->object->getFullNameFormat('Шахрай')).'-Шахрай');
    }
    public function testSplDetect478()
    {
        $this->assertEquals('S-Шевченко', trim($this->object->getFullNameFormat('Шевченко')).'-Шевченко');
    }
    public function testSplDetect479()
    {
        $this->assertEquals('S-Шевчук', trim($this->object->getFullNameFormat('Шевчук')).'-Шевчук');
    }
    public function testSplDetect480()
    {
        $this->assertEquals('S-Шелест', trim($this->object->getFullNameFormat('Шелест')).'-Шелест');
    }
    public function testSplDetect481()
    {
        $this->assertEquals('S-Ханенки', trim($this->object->getFullNameFormat('Ханенки')).'-Ханенки');
    }
    public function testSplDetect482()
    {
        $this->assertEquals('S-Шинкарук', trim($this->object->getFullNameFormat('Шинкарук')).'-Шинкарук');
    }
    public function testSplDetect483()
    {
        $this->assertEquals('S-Шкрібляк', trim($this->object->getFullNameFormat('Шкрібляк')).'-Шкрібляк');
    }
    public function testSplDetect484()
    {
        $this->assertEquals('S-Шнайдер', trim($this->object->getFullNameFormat('Шнайдер')).'-Шнайдер');
    }
    public function testSplDetect485()
    {
        $this->assertEquals('S-Шовкопляс', trim($this->object->getFullNameFormat('Шовкопляс')).'-Шовкопляс');
    }
    public function testSplDetect486()
    {
        $this->assertEquals('S-Шульга', trim($this->object->getFullNameFormat('Шульга')).'-Шульга');
    }
    public function testSplDetect487()
    {
        $this->assertEquals('S-Шухевич', trim($this->object->getFullNameFormat('Шухевич')).'-Шухевич');
    }
    public function testSplDetect488()
    {
        $this->assertEquals('S-Щерба', trim($this->object->getFullNameFormat('Щерба')).'-Щерба');
    }
    public function testSplDetect489()
    {
        $this->assertEquals('S-Щербак', trim($this->object->getFullNameFormat('Щербак')).'-Щербак');
    }
    public function testSplDetect490()
    {
        $this->assertEquals('S-Щербань', trim($this->object->getFullNameFormat('Щербань')).'-Щербань');
    }
    public function testSplDetect491()
    {
        $this->assertEquals('S-Юрженко', trim($this->object->getFullNameFormat('Юрженко')).'-Юрженко');
    }
    public function testSplDetect492()
    {
        $this->assertEquals('S-Юрченко', trim($this->object->getFullNameFormat('Юрченко')).'-Юрченко');
    }
    public function testSplDetect493()
    {
        $this->assertEquals('S-Юрчишин', trim($this->object->getFullNameFormat('Юрчишин')).'-Юрчишин');
    }
    public function testSplDetect494()
    {
        $this->assertEquals('S-Юхименко', trim($this->object->getFullNameFormat('Юхименко')).'-Юхименко');
    }
    public function testSplDetect495()
    {
        $this->assertEquals('S-Ющенко', trim($this->object->getFullNameFormat('Ющенко')).'-Ющенко');
    }
    public function testSplDetect496()
    {
        $this->assertEquals('S-Яковенко', trim($this->object->getFullNameFormat('Яковенко')).'-Яковенко');
    }
    public function testSplDetect497()
    {
        $this->assertEquals('S-Яковина', trim($this->object->getFullNameFormat('Яковина')).'-Яковина');
    }
    public function testSplDetect498()
    {
        $this->assertEquals('S-Янко', trim($this->object->getFullNameFormat('Янко')).'-Янко');
    }
    public function testSplDetect499()
    {
        $this->assertEquals('S-Ярема', trim($this->object->getFullNameFormat('Ярема')).'-Ярема');
    }
    public function testSplDetect500()
    {
        $this->assertEquals('S-Яременко', trim($this->object->getFullNameFormat('Яременко')).'-Яременко');
    }
    public function testSplDetect501()
    {
        $this->assertEquals('S-Яремко', trim($this->object->getFullNameFormat('Яремко')).'-Яремко');
    }
    public function testSplDetect502()
    {
        $this->assertEquals('S-Яремчук', trim($this->object->getFullNameFormat('Яремчук')).'-Яремчук');
    }
    public function testSplDetect503()
    {
        $this->assertEquals('S-Ярмоленко', trim($this->object->getFullNameFormat('Ярмоленко')).'-Ярмоленко');
    }
    public function testSplDetect504()
    {
        $this->assertEquals('S-Ярмолюк', trim($this->object->getFullNameFormat('Ярмолюк')).'-Ярмолюк');
    }
    public function testSplDetect505()
    {
        $this->assertEquals('S-Ярошенко', trim($this->object->getFullNameFormat('Ярошенко')).'-Ярошенко');
    }
    public function testSplDetect506()
    {
        $this->assertEquals('S-Яценко', trim($this->object->getFullNameFormat('Яценко')).'-Яценко');
    }
    public function testSplDetect507()
    {
        $this->assertEquals('S-Ященко', trim($this->object->getFullNameFormat('Ященко')).'-Ященко');
    }
    public function testSplDetect508()
    {
        $this->assertEquals('S-Ґалаґан', trim($this->object->getFullNameFormat('Ґалаґан')).'-Ґалаґан');
    }
    public function testSplDetect509()
    {
        $this->assertEquals('S-Різенки', trim($this->object->getFullNameFormat('Різенки')).'-Різенки');
    }
    public function testSplDetect510()
    {
        $this->assertEquals('S-Родзянки', trim($this->object->getFullNameFormat('Родзянки')).'-Родзянки');
    }
    public function testSplDetect511()
    {
        $this->assertEquals('S-Розумовські', trim($this->object->getFullNameFormat('Розумовські')).'-Розумовські');
    }
    public function testSplDetect512()
    {
        $this->assertEquals('S-Сулими', trim($this->object->getFullNameFormat('Сулими')).'-Сулими');
    }
    public function testSplDetect513()
    {
        $this->assertEquals('S-Танські', trim($this->object->getFullNameFormat('Танські')).'-Танські');
    }
    public function testSplDetect514()
    {
        $this->assertEquals('S-Харитоненки', trim($this->object->getFullNameFormat('Харитоненки')).'-Харитоненки');
    }
    public function testSplDetect515()
    {
        $this->assertEquals('S-Хмельницькі', trim($this->object->getFullNameFormat('Хмельницькі')).'-Хмельницькі');
    }
    public function testSplDetect516()
    {
        $this->assertEquals('S-Шептицькі', trim($this->object->getFullNameFormat('Шептицькі')).'-Шептицькі');
    }
    public function testSplDetect517()
    {
        $this->assertEquals('S-Тишкевичі', trim($this->object->getFullNameFormat('Тишкевичі')).'-Тишкевичі');
    }
    public function testSplDetect518()
    {
        $this->assertEquals('S-Тобілевичі', trim($this->object->getFullNameFormat('Тобілевичі')).'-Тобілевичі');
    }
    public function testSplDetect519()
    {
        $this->assertEquals('S-Трощинські', trim($this->object->getFullNameFormat('Трощинські')).'-Трощинські');
    }
    public function testSplDetect520()
    {
        $this->assertEquals('S-Ограновичі', trim($this->object->getFullNameFormat('Ограновичі')).'-Ограновичі');
    }
    public function testSplDetect521()
    {
        $this->assertEquals('S-Орлики', trim($this->object->getFullNameFormat('Орлики')).'-Орлики');
    }
    public function testSplDetect522()
    {
        $this->assertEquals('S-Могили', trim($this->object->getFullNameFormat('Могили')).'-Могили');
    }
    public function testSplDetect523()
    {
        $this->assertEquals('S-Модзалевські', trim($this->object->getFullNameFormat('Модзалевські')).'-Модзалевські');
    }
    public function testSplDetect524()
    {
        $this->assertEquals('S-Мосендзи', trim($this->object->getFullNameFormat('Мосендзи')).'-Мосендзи');
    }
    public function testSplDetect525()
    {
        $this->assertEquals('S-Леонтовичі', trim($this->object->getFullNameFormat('Леонтовичі')).'-Леонтовичі');
    }
    public function testSplDetect526()
    {
        $this->assertEquals('S-Лесевичі', trim($this->object->getFullNameFormat('Лесевичі')).'-Лесевичі');
    }
    public function testSplDetect527()
    {
        $this->assertEquals('S-Лукашевичі', trim($this->object->getFullNameFormat('Лукашевичі')).'-Лукашевичі');
    }
    public function testSplDetect528()
    {
        $this->assertEquals('S-Мазаракі', trim($this->object->getFullNameFormat('Мазаракі')).'-Мазаракі');
    }
    public function testSplDetect529()
    {
        $this->assertEquals('S-Мазепи', trim($this->object->getFullNameFormat('Мазепи')).'-Мазепи');
    }
    public function testSplDetect530()
    {
        $this->assertEquals('S-Малаховські', trim($this->object->getFullNameFormat('Малаховські')).'-Малаховські');
    }
    public function testSplDetect531()
    {
        $this->assertEquals('S-Маркевичі', trim($this->object->getFullNameFormat('Маркевичі')).'-Маркевичі');
    }
    public function testSplDetect532()
    {
        $this->assertEquals('S-Лазаревські', trim($this->object->getFullNameFormat('Лазаревські')).'-Лазаревські');
    }
    public function testSplDetect533()
    {
        $this->assertEquals('S-Лашкевичі', trim($this->object->getFullNameFormat('Лашкевичі')).'-Лашкевичі');
    }
    public function testSplDetect534()
    {
        $this->assertEquals('S-Кониські', trim($this->object->getFullNameFormat('Кониські')).'-Кониські');
    }
    public function testSplDetect535()
    {
        $this->assertEquals('S-Крупські', trim($this->object->getFullNameFormat('Крупські')).'-Крупські');
    }
    public function testSplDetect536()
    {
        $this->assertEquals('S-Калашники', trim($this->object->getFullNameFormat('Калашники')).'-Калашники');
    }
    public function testSplDetect537()
    {
        $this->assertEquals('S-Кандиби', trim($this->object->getFullNameFormat('Кандиби')).'-Кандиби');
    }
    public function testSplDetect538()
    {
        $this->assertEquals('S-Карашевичі', trim($this->object->getFullNameFormat('Карашевичі')).'-Карашевичі');
    }
    public function testSplDetect539()
    {
        $this->assertEquals('S-Драгоманови', trim($this->object->getFullNameFormat('Драгоманови')).'-Драгоманови');
    }
    public function testSplDetect540()
    {
        $this->assertEquals('S-Дунін-Борковські', trim($this->object->getFullNameFormat('Дунін-Борковські')).'-Дунін-Борковські');
    }
    public function testSplDetect541()
    {
        $this->assertEquals('S-Ждановичі', trim($this->object->getFullNameFormat('Ждановичі')).'-Ждановичі');
    }
    public function testSplDetect542()
    {
        $this->assertEquals('S-Жураківські', trim($this->object->getFullNameFormat('Жураківські')).'-Жураківські');
    }
    public function testSplDetect543()
    {
        $this->assertEquals('S-Закревські', trim($this->object->getFullNameFormat('Закревські')).'-Закревські');
    }
    public function testSplDetect544()
    {
        $this->assertEquals('S-Збаразькі', trim($this->object->getFullNameFormat('Збаразькі')).'-Збаразькі');
    }
    public function testSplDetect545()
    {
        $this->assertEquals('S-Галенковські', trim($this->object->getFullNameFormat('Галенковські')).'-Галенковські');
    }
    public function testSplDetect546()
    {
        $this->assertEquals('S-Герцики', trim($this->object->getFullNameFormat('Герцики')).'-Герцики');
    }
    public function testSplDetect547()
    {
        $this->assertEquals('S-Гнідичі', trim($this->object->getFullNameFormat('Гнідичі')).'-Гнідичі');
    }
    public function testSplDetect548()
    {
        $this->assertEquals('S-Гоголі', trim($this->object->getFullNameFormat('Гоголі')).'-Гоголі');
    }
    public function testSplDetect549()
    {
        $this->assertEquals('S-Гольшанські', trim($this->object->getFullNameFormat('Гольшанські')).'-Гольшанські');
    }
    public function testSplDetect550()
    {
        $this->assertEquals('S-Іловайські', trim($this->object->getFullNameFormat('Іловайські')).'-Іловайські');
    }
    public function testSplDetect551()
    {
        $this->assertEquals('S-Безбородьки', trim($this->object->getFullNameFormat('Безбородьки')).'-Безбородьки');
    }
    public function testSplDetect552()
    {
        $this->assertEquals('S-Блонські', trim($this->object->getFullNameFormat('Блонські')).'-Блонські');
    }
    public function testSplDetect553()
    {
        $this->assertEquals('S-Бутовичі', trim($this->object->getFullNameFormat('Бутовичі')).'-Бутовичі');
    }
    public function testSplDetect554()
    {
        $this->assertEquals('S-Візерські', trim($this->object->getFullNameFormat('Візерські')).'-Візерські');
    }
    public function testSplDetect555()
    {
        $this->assertEquals('S-Васьковичі', trim($this->object->getFullNameFormat('Васьковичі')).'-Васьковичі');
    }
    public function testSplDetect556()
    {
        $this->assertEquals('S-Величковські', trim($this->object->getFullNameFormat('Величковські')).'-Величковські');
    }
    public function testSplDetect557()
    {
        $this->assertEquals('S-Висоцькі', trim($this->object->getFullNameFormat('Висоцькі')).'-Висоцькі');
    }
    public function testSplDetect558()
    {
        $this->assertEquals('S-Вишневецькі', trim($this->object->getFullNameFormat('Вишневецькі')).'-Вишневецькі');
    }
    public function testSplDetect559()
    {
        $this->assertEquals('S-Гошовські', trim($this->object->getFullNameFormat('Гошовські')).'-Гошовські');
    }
    public function testSplDetect560()
    {
        $this->assertEquals('S-Громики', trim($this->object->getFullNameFormat('Громики')).'-Громики');
    }
    public function testSplDetect561()
    {
        $this->assertEquals('S-Євсєєв', trim($this->object->getFullNameFormat('Євсєєв')).'-Євсєєв');
    }
    public function testSplDetect562()
    {
        $this->assertEquals('S-Єгоров', trim($this->object->getFullNameFormat('Єгоров')).'-Єгоров');
    }
    public function testSplDetect563()
    {
        $this->assertEquals('S-Єлізаров', trim($this->object->getFullNameFormat('Єлізаров')).'-Єлізаров');
    }
    public function testSplDetect564()
    {
        $this->assertEquals('S-Єрмилов', trim($this->object->getFullNameFormat('Єрмилов')).'-Єрмилов');
    }
    public function testSplDetect565()
    {
        $this->assertEquals('S-Єрофєєв', trim($this->object->getFullNameFormat('Єрофєєв')).'-Єрофєєв');
    }
    public function testSplDetect566()
    {
        $this->assertEquals('S-Єршов', trim($this->object->getFullNameFormat('Єршов')).'-Єршов');
    }
    public function testSplDetect567()
    {
        $this->assertEquals('S-Єфімов', trim($this->object->getFullNameFormat('Єфімов')).'-Єфімов');
    }
    public function testSplDetect568()
    {
        $this->assertEquals('S-Єфремов', trim($this->object->getFullNameFormat('Єфремов')).'-Єфремов');
    }
    public function testSplDetect569()
    {
        $this->assertEquals('S-Іванов', trim($this->object->getFullNameFormat('Іванов')).'-Іванов');
    }
    public function testSplDetect570()
    {
        $this->assertEquals('S-Ігнатов', trim($this->object->getFullNameFormat('Ігнатов')).'-Ігнатов');
    }
    public function testSplDetect571()
    {
        $this->assertEquals('S-Іллюшин', trim($this->object->getFullNameFormat('Іллюшин')).'-Іллюшин');
    }
    public function testSplDetect572()
    {
        $this->assertEquals('S-Ільїн', trim($this->object->getFullNameFormat('Ільїн')).'-Ільїн');
    }
    public function testSplDetect573()
    {
        $this->assertEquals('S-Аєдоницький', trim($this->object->getFullNameFormat('Аєдоницький')).'-Аєдоницький');
    }
    public function testSplDetect574()
    {
        $this->assertEquals('S-Абатуров', trim($this->object->getFullNameFormat('Абатуров')).'-Абатуров');
    }
    public function testSplDetect575()
    {
        $this->assertEquals('S-Абдулов', trim($this->object->getFullNameFormat('Абдулов')).'-Абдулов');
    }
    public function testSplDetect576()
    {
        $this->assertEquals('S-Абрамов', trim($this->object->getFullNameFormat('Абрамов')).'-Абрамов');
    }
    public function testSplDetect577()
    {
        $this->assertEquals('S-Авілов', trim($this->object->getFullNameFormat('Авілов')).'-Авілов');
    }
    public function testSplDetect578()
    {
        $this->assertEquals('S-Авдєєнко', trim($this->object->getFullNameFormat('Авдєєнко')).'-Авдєєнко');
    }
    public function testSplDetect579()
    {
        $this->assertEquals('S-Аврамов', trim($this->object->getFullNameFormat('Аврамов')).'-Аврамов');
    }
    public function testSplDetect580()
    {
        $this->assertEquals('S-Алексєєв', trim($this->object->getFullNameFormat('Алексєєв')).'-Алексєєв');
    }
    public function testSplDetect581()
    {
        $this->assertEquals('S-Александров', trim($this->object->getFullNameFormat('Александров')).'-Александров');
    }
    public function testSplDetect582()
    {
        $this->assertEquals('S-Альошин', trim($this->object->getFullNameFormat('Альошин')).'-Альошин');
    }
    public function testSplDetect583()
    {
        $this->assertEquals('S-Анісімов', trim($this->object->getFullNameFormat('Анісімов')).'-Анісімов');
    }
    public function testSplDetect584()
    {
        $this->assertEquals('S-Анісов', trim($this->object->getFullNameFormat('Анісов')).'-Анісов');
    }
    public function testSplDetect585()
    {
        $this->assertEquals('S-Ананьєв', trim($this->object->getFullNameFormat('Ананьєв')).'-Ананьєв');
    }
    public function testSplDetect586()
    {
        $this->assertEquals('S-Андріанов', trim($this->object->getFullNameFormat('Андріанов')).'-Андріанов');
    }
    public function testSplDetect587()
    {
        $this->assertEquals('S-Андріяшев', trim($this->object->getFullNameFormat('Андріяшев')).'-Андріяшев');
    }
    public function testSplDetect588()
    {
        $this->assertEquals('S-Андреєв', trim($this->object->getFullNameFormat('Андреєв')).'-Андреєв');
    }
    public function testSplDetect589()
    {
        $this->assertEquals('S-Антипов', trim($this->object->getFullNameFormat('Антипов')).'-Антипов');
    }
    public function testSplDetect590()
    {
        $this->assertEquals('S-Антонов', trim($this->object->getFullNameFormat('Антонов')).'-Антонов');
    }
    public function testSplDetect591()
    {
        $this->assertEquals('S-Анциферов', trim($this->object->getFullNameFormat('Анциферов')).'-Анциферов');
    }
    public function testSplDetect592()
    {
        $this->assertEquals('S-Апухтін', trim($this->object->getFullNameFormat('Апухтін')).'-Апухтін');
    }
    public function testSplDetect593()
    {
        $this->assertEquals('S-Арбузов', trim($this->object->getFullNameFormat('Арбузов')).'-Арбузов');
    }
    public function testSplDetect594()
    {
        $this->assertEquals('S-Аржанов', trim($this->object->getFullNameFormat('Аржанов')).'-Аржанов');
    }
    public function testSplDetect595()
    {
        $this->assertEquals('S-Архипов', trim($this->object->getFullNameFormat('Архипов')).'-Архипов');
    }
    public function testSplDetect596()
    {
        $this->assertEquals('S-Арцибушев', trim($this->object->getFullNameFormat('Арцибушев')).'-Арцибушев');
    }
    public function testSplDetect597()
    {
        $this->assertEquals('S-Астраханцев', trim($this->object->getFullNameFormat('Астраханцев')).'-Астраханцев');
    }
    public function testSplDetect598()
    {
        $this->assertEquals('S-Афіногенов', trim($this->object->getFullNameFormat('Афіногенов')).'-Афіногенов');
    }
    public function testSplDetect599()
    {
        $this->assertEquals('S-Афанасьєв', trim($this->object->getFullNameFormat('Афанасьєв')).'-Афанасьєв');
    }
    public function testSplDetect600()
    {
        $this->assertEquals('S-Бєлов', trim($this->object->getFullNameFormat('Бєлов')).'-Бєлов');
    }
    public function testSplDetect601()
    {
        $this->assertEquals('S-Бєлоглазов', trim($this->object->getFullNameFormat('Бєлоглазов')).'-Бєлоглазов');
    }
    public function testSplDetect602()
    {
        $this->assertEquals('S-Бєлоусов', trim($this->object->getFullNameFormat('Бєлоусов')).'-Бєлоусов');
    }
    public function testSplDetect603()
    {
        $this->assertEquals('S-Бєляєв', trim($this->object->getFullNameFormat('Бєляєв')).'-Бєляєв');
    }
    public function testSplDetect604()
    {
        $this->assertEquals('S-Бібиков', trim($this->object->getFullNameFormat('Бібиков')).'-Бібиков');
    }
    public function testSplDetect605()
    {
        $this->assertEquals('S-Бажанов', trim($this->object->getFullNameFormat('Бажанов')).'-Бажанов');
    }
    public function testSplDetect606()
    {
        $this->assertEquals('S-Баранов', trim($this->object->getFullNameFormat('Баранов')).'-Баранов');
    }
    public function testSplDetect607()
    {
        $this->assertEquals('S-Баришніков', trim($this->object->getFullNameFormat('Баришніков')).'-Баришніков');
    }
    public function testSplDetect608()
    {
        $this->assertEquals('S-Барсов', trim($this->object->getFullNameFormat('Барсов')).'-Барсов');
    }
    public function testSplDetect609()
    {
        $this->assertEquals('S-Батюшков', trim($this->object->getFullNameFormat('Батюшков')).'-Батюшков');
    }
    public function testSplDetect610()
    {
        $this->assertEquals('S-Биков', trim($this->object->getFullNameFormat('Биков')).'-Биков');
    }
    public function testSplDetect611()
    {
        $this->assertEquals('S-Блохін', trim($this->object->getFullNameFormat('Блохін')).'-Блохін');
    }
    public function testSplDetect612()
    {
        $this->assertEquals('S-Бобров', trim($this->object->getFullNameFormat('Бобров')).'-Бобров');
    }
    public function testSplDetect613()
    {
        $this->assertEquals('S-Богданов', trim($this->object->getFullNameFormat('Богданов')).'-Богданов');
    }
    public function testSplDetect614()
    {
        $this->assertEquals('S-Богомазов', trim($this->object->getFullNameFormat('Богомазов')).'-Богомазов');
    }
    public function testSplDetect615()
    {
        $this->assertEquals('S-Бойков', trim($this->object->getFullNameFormat('Бойков')).'-Бойков');
    }
    public function testSplDetect616()
    {
        $this->assertEquals('S-Большаков', trim($this->object->getFullNameFormat('Большаков')).'-Большаков');
    }
    public function testSplDetect617()
    {
        $this->assertEquals('S-Борисов', trim($this->object->getFullNameFormat('Борисов')).'-Борисов');
    }
    public function testSplDetect618()
    {
        $this->assertEquals('S-Бочков', trim($this->object->getFullNameFormat('Бочков')).'-Бочков');
    }
    public function testSplDetect619()
    {
        $this->assertEquals('S-Бризгалов', trim($this->object->getFullNameFormat('Бризгалов')).'-Бризгалов');
    }
    public function testSplDetect620()
    {
        $this->assertEquals('S-Брусилов', trim($this->object->getFullNameFormat('Брусилов')).'-Брусилов');
    }
    public function testSplDetect621()
    {
        $this->assertEquals('S-Бутурлін', trim($this->object->getFullNameFormat('Бутурлін')).'-Бутурлін');
    }
    public function testSplDetect622()
    {
        $this->assertEquals('S-Бутусов', trim($this->object->getFullNameFormat('Бутусов')).'-Бутусов');
    }
    public function testSplDetect623()
    {
        $this->assertEquals('S-Варламов', trim($this->object->getFullNameFormat('Варламов')).'-Варламов');
    }
    public function testSplDetect624()
    {
        $this->assertEquals('S-Васильєв', trim($this->object->getFullNameFormat('Васильєв')).'-Васильєв');
    }
    public function testSplDetect625()
    {
        $this->assertEquals('S-Виноградов', trim($this->object->getFullNameFormat('Виноградов')).'-Виноградов');
    }
    public function testSplDetect626()
    {
        $this->assertEquals('S-Власов', trim($this->object->getFullNameFormat('Власов')).'-Власов');
    }
    public function testSplDetect627()
    {
        $this->assertEquals('S-Внуков', trim($this->object->getFullNameFormat('Внуков')).'-Внуков');
    }
    public function testSplDetect628()
    {
        $this->assertEquals('S-Волков', trim($this->object->getFullNameFormat('Волков')).'-Волков');
    }
    public function testSplDetect629()
    {
        $this->assertEquals('S-Воробей', trim($this->object->getFullNameFormat('Воробей')).'-Воробей');
    }
    public function testSplDetect630()
    {
        $this->assertEquals('S-Воробйов', trim($this->object->getFullNameFormat('Воробйов')).'-Воробйов');
    }
    public function testSplDetect631()
    {
        $this->assertEquals('S-Воронін', trim($this->object->getFullNameFormat('Воронін')).'-Воронін');
    }
    public function testSplDetect632()
    {
        $this->assertEquals('S-Воронцов', trim($this->object->getFullNameFormat('Воронцов')).'-Воронцов');
    }
    public function testSplDetect633()
    {
        $this->assertEquals('S-Ворошилов', trim($this->object->getFullNameFormat('Ворошилов')).'-Ворошилов');
    }
    public function testSplDetect634()
    {
        $this->assertEquals('S-Гаврилов', trim($this->object->getFullNameFormat('Гаврилов')).'-Гаврилов');
    }
    public function testSplDetect635()
    {
        $this->assertEquals('S-Герасимов', trim($this->object->getFullNameFormat('Герасимов')).'-Герасимов');
    }
    public function testSplDetect636()
    {
        $this->assertEquals('S-Горбунов', trim($this->object->getFullNameFormat('Горбунов')).'-Горбунов');
    }
    public function testSplDetect637()
    {
        $this->assertEquals('S-Горчаков', trim($this->object->getFullNameFormat('Горчаков')).'-Горчаков');
    }
    public function testSplDetect638()
    {
        $this->assertEquals('S-Горшков', trim($this->object->getFullNameFormat('Горшков')).'-Горшков');
    }
    public function testSplDetect639()
    {
        $this->assertEquals('S-Громов', trim($this->object->getFullNameFormat('Громов')).'-Громов');
    }
    public function testSplDetect640()
    {
        $this->assertEquals('S-Гусєв', trim($this->object->getFullNameFormat('Гусєв')).'-Гусєв');
    }
    public function testSplDetect641()
    {
        $this->assertEquals('S-Давидов', trim($this->object->getFullNameFormat('Давидов')).'-Давидов');
    }
    public function testSplDetect642()
    {
        $this->assertEquals('S-Данилов', trim($this->object->getFullNameFormat('Данилов')).'-Данилов');
    }
    public function testSplDetect643()
    {
        $this->assertEquals('S-Дементьєв', trim($this->object->getFullNameFormat('Дементьєв')).'-Дементьєв');
    }
    public function testSplDetect644()
    {
        $this->assertEquals('S-Денисов', trim($this->object->getFullNameFormat('Денисов')).'-Денисов');
    }
    public function testSplDetect645()
    {
        $this->assertEquals('S-Дмитрієв', trim($this->object->getFullNameFormat('Дмитрієв')).'-Дмитрієв');
    }
    public function testSplDetect646()
    {
        $this->assertEquals('S-Добролюбов', trim($this->object->getFullNameFormat('Добролюбов')).'-Добролюбов');
    }
    public function testSplDetect647()
    {
        $this->assertEquals('S-Донськой', trim($this->object->getFullNameFormat('Донськой')).'-Донськой');
    }
    public function testSplDetect648()
    {
        $this->assertEquals('S-Дорофєєв', trim($this->object->getFullNameFormat('Дорофєєв')).'-Дорофєєв');
    }
    public function testSplDetect649()
    {
        $this->assertEquals('S-Дубров', trim($this->object->getFullNameFormat('Дубров')).'-Дубров');
    }
    public function testSplDetect650()
    {
        $this->assertEquals('S-Железняков', trim($this->object->getFullNameFormat('Железняков')).'-Железняков');
    }
    public function testSplDetect651()
    {
        $this->assertEquals('S-Жердєв', trim($this->object->getFullNameFormat('Жердєв')).'-Жердєв');
    }
    public function testSplDetect652()
    {
        $this->assertEquals('S-Жуков', trim($this->object->getFullNameFormat('Жуков')).'-Жуков');
    }
    public function testSplDetect653()
    {
        $this->assertEquals('S-Журавльов', trim($this->object->getFullNameFormat('Журавльов')).'-Журавльов');
    }
    public function testSplDetect654()
    {
        $this->assertEquals('S-Заваров', trim($this->object->getFullNameFormat('Заваров')).'-Заваров');
    }
    public function testSplDetect655()
    {
        $this->assertEquals('S-Загаров', trim($this->object->getFullNameFormat('Загаров')).'-Загаров');
    }
    public function testSplDetect656()
    {
        $this->assertEquals('S-Зайцев', trim($this->object->getFullNameFormat('Зайцев')).'-Зайцев');
    }
    public function testSplDetect657()
    {
        $this->assertEquals('S-Захаров', trim($this->object->getFullNameFormat('Захаров')).'-Захаров');
    }
    public function testSplDetect658()
    {
        $this->assertEquals('S-Звєрєв', trim($this->object->getFullNameFormat('Звєрєв')).'-Звєрєв');
    }
    public function testSplDetect659()
    {
        $this->assertEquals('S-Зеров', trim($this->object->getFullNameFormat('Зеров')).'-Зеров');
    }
    public function testSplDetect660()
    {
        $this->assertEquals('S-Золотухін', trim($this->object->getFullNameFormat('Золотухін')).'-Золотухін');
    }
    public function testSplDetect661()
    {
        $this->assertEquals('S-Зубов', trim($this->object->getFullNameFormat('Зубов')).'-Зубов');
    }
    public function testSplDetect662()
    {
        $this->assertEquals('S-Казаков', trim($this->object->getFullNameFormat('Казаков')).'-Казаков');
    }
    public function testSplDetect663()
    {
        $this->assertEquals('S-Калінін', trim($this->object->getFullNameFormat('Калінін')).'-Калінін');
    }
    public function testSplDetect664()
    {
        $this->assertEquals('S-Калашников', trim($this->object->getFullNameFormat('Калашников')).'-Калашников');
    }
    public function testSplDetect665()
    {
        $this->assertEquals('S-Карпов', trim($this->object->getFullNameFormat('Карпов')).'-Карпов');
    }
    public function testSplDetect666()
    {
        $this->assertEquals('S-Каштанов', trim($this->object->getFullNameFormat('Каштанов')).'-Каштанов');
    }
    public function testSplDetect667()
    {
        $this->assertEquals('S-Кисельов', trim($this->object->getFullNameFormat('Кисельов')).'-Кисельов');
    }
    public function testSplDetect668()
    {
        $this->assertEquals('S-Ковальов', trim($this->object->getFullNameFormat('Ковальов')).'-Ковальов');
    }
    public function testSplDetect669()
    {
        $this->assertEquals('S-Кожевников', trim($this->object->getFullNameFormat('Кожевников')).'-Кожевников');
    }
    public function testSplDetect670()
    {
        $this->assertEquals('S-Козлов', trim($this->object->getFullNameFormat('Козлов')).'-Козлов');
    }
    public function testSplDetect671()
    {
        $this->assertEquals('S-Колесников', trim($this->object->getFullNameFormat('Колесников')).'-Колесников');
    }
    public function testSplDetect672()
    {
        $this->assertEquals('S-Кольцов', trim($this->object->getFullNameFormat('Кольцов')).'-Кольцов');
    }
    public function testSplDetect673()
    {
        $this->assertEquals('S-Комаров', trim($this->object->getFullNameFormat('Комаров')).'-Комаров');
    }
    public function testSplDetect674()
    {
        $this->assertEquals('S-Коновалов', trim($this->object->getFullNameFormat('Коновалов')).'-Коновалов');
    }
    public function testSplDetect675()
    {
        $this->assertEquals('S-Конюхов', trim($this->object->getFullNameFormat('Конюхов')).'-Конюхов');
    }
    public function testSplDetect676()
    {
        $this->assertEquals('S-Копилов', trim($this->object->getFullNameFormat('Копилов')).'-Копилов');
    }
    public function testSplDetect677()
    {
        $this->assertEquals('S-Кормильцев', trim($this->object->getFullNameFormat('Кормильцев')).'-Кормильцев');
    }
    public function testSplDetect678()
    {
        $this->assertEquals('S-Коробов', trim($this->object->getFullNameFormat('Коробов')).'-Коробов');
    }
    public function testSplDetect679()
    {
        $this->assertEquals('S-Коровкін', trim($this->object->getFullNameFormat('Коровкін')).'-Коровкін');
    }
    public function testSplDetect680()
    {
        $this->assertEquals('S-Корольов', trim($this->object->getFullNameFormat('Корольов')).'-Корольов');
    }
    public function testSplDetect681()
    {
        $this->assertEquals('S-Котов', trim($this->object->getFullNameFormat('Котов')).'-Котов');
    }
    public function testSplDetect682()
    {
        $this->assertEquals('S-Краснов', trim($this->object->getFullNameFormat('Краснов')).'-Краснов');
    }
    public function testSplDetect683()
    {
        $this->assertEquals('S-Крилов', trim($this->object->getFullNameFormat('Крилов')).'-Крилов');
    }
    public function testSplDetect684()
    {
        $this->assertEquals('S-Кримов', trim($this->object->getFullNameFormat('Кримов')).'-Кримов');
    }
    public function testSplDetect685()
    {
        $this->assertEquals('S-Крюков', trim($this->object->getFullNameFormat('Крюков')).'-Крюков');
    }
    public function testSplDetect686()
    {
        $this->assertEquals('S-Кудряшов', trim($this->object->getFullNameFormat('Кудряшов')).'-Кудряшов');
    }
    public function testSplDetect687()
    {
        $this->assertEquals('S-Кузнецов', trim($this->object->getFullNameFormat('Кузнецов')).'-Кузнецов');
    }
    public function testSplDetect688()
    {
        $this->assertEquals('S-Кузьмін', trim($this->object->getFullNameFormat('Кузьмін')).'-Кузьмін');
    }
    public function testSplDetect689()
    {
        $this->assertEquals('S-Кулаков', trim($this->object->getFullNameFormat('Кулаков')).'-Кулаков');
    }
    public function testSplDetect690()
    {
        $this->assertEquals('S-Куликов', trim($this->object->getFullNameFormat('Куликов')).'-Куликов');
    }
    public function testSplDetect691()
    {
        $this->assertEquals('S-Курков', trim($this->object->getFullNameFormat('Курков')).'-Курков');
    }
    public function testSplDetect692()
    {
        $this->assertEquals('S-Курочкін', trim($this->object->getFullNameFormat('Курочкін')).'-Курочкін');
    }
    public function testSplDetect693()
    {
        $this->assertEquals('S-Лєсков', trim($this->object->getFullNameFormat('Лєсков')).'-Лєсков');
    }
    public function testSplDetect694()
    {
        $this->assertEquals('S-Лідов', trim($this->object->getFullNameFormat('Лідов')).'-Лідов');
    }
    public function testSplDetect695()
    {
        $this->assertEquals('S-Ладигін', trim($this->object->getFullNameFormat('Ладигін')).'-Ладигін');
    }
    public function testSplDetect696()
    {
        $this->assertEquals('S-Лазарєв', trim($this->object->getFullNameFormat('Лазарєв')).'-Лазарєв');
    }
    public function testSplDetect697()
    {
        $this->assertEquals('S-Лебедєв', trim($this->object->getFullNameFormat('Лебедєв')).'-Лебедєв');
    }
    public function testSplDetect698()
    {
        $this->assertEquals('S-Лихоносов', trim($this->object->getFullNameFormat('Лихоносов')).'-Лихоносов');
    }
    public function testSplDetect699()
    {
        $this->assertEquals('S-Лосєв', trim($this->object->getFullNameFormat('Лосєв')).'-Лосєв');
    }
    public function testSplDetect700()
    {
        $this->assertEquals('S-Львов', trim($this->object->getFullNameFormat('Львов')).'-Львов');
    }
    public function testSplDetect701()
    {
        $this->assertEquals('S-Любимов', trim($this->object->getFullNameFormat('Любимов')).'-Любимов');
    }
    public function testSplDetect702()
    {
        $this->assertEquals('S-Мілютін', trim($this->object->getFullNameFormat('Мілютін')).'-Мілютін');
    }
    public function testSplDetect703()
    {
        $this->assertEquals('S-Макаров', trim($this->object->getFullNameFormat('Макаров')).'-Макаров');
    }
    public function testSplDetect704()
    {
        $this->assertEquals('S-Максимов', trim($this->object->getFullNameFormat('Максимов')).'-Максимов');
    }
    public function testSplDetect705()
    {
        $this->assertEquals('S-Малаков', trim($this->object->getFullNameFormat('Малаков')).'-Малаков');
    }
    public function testSplDetect706()
    {
        $this->assertEquals('S-Мамонов', trim($this->object->getFullNameFormat('Мамонов')).'-Мамонов');
    }
    public function testSplDetect707()
    {
        $this->assertEquals('S-Манасеїн', trim($this->object->getFullNameFormat('Манасеїн')).'-Манасеїн');
    }
    public function testSplDetect708()
    {
        $this->assertEquals('S-Марков', trim($this->object->getFullNameFormat('Марков')).'-Марков');
    }
    public function testSplDetect709()
    {
        $this->assertEquals('S-Мартенс', trim($this->object->getFullNameFormat('Мартенс')).'-Мартенс');
    }
    public function testSplDetect710()
    {
        $this->assertEquals('S-Мартинов', trim($this->object->getFullNameFormat('Мартинов')).'-Мартинов');
    }
    public function testSplDetect711()
    {
        $this->assertEquals('S-Масленніков', trim($this->object->getFullNameFormat('Масленніков')).'-Масленніков');
    }
    public function testSplDetect712()
    {
        $this->assertEquals('S-Маслов', trim($this->object->getFullNameFormat('Маслов')).'-Маслов');
    }
    public function testSplDetect713()
    {
        $this->assertEquals('S-Матвєєв', trim($this->object->getFullNameFormat('Матвєєв')).'-Матвєєв');
    }
    public function testSplDetect714()
    {
        $this->assertEquals('S-Медведєв', trim($this->object->getFullNameFormat('Медведєв')).'-Медведєв');
    }
    public function testSplDetect715()
    {
        $this->assertEquals('S-Мельников', trim($this->object->getFullNameFormat('Мельников')).'-Мельников');
    }
    public function testSplDetect716()
    {
        $this->assertEquals('S-Миронов', trim($this->object->getFullNameFormat('Миронов')).'-Миронов');
    }
    public function testSplDetect717()
    {
        $this->assertEquals('S-Михайлов', trim($this->object->getFullNameFormat('Михайлов')).'-Михайлов');
    }
    public function testSplDetect718()
    {
        $this->assertEquals('S-Моїсєєв', trim($this->object->getFullNameFormat('Моїсєєв')).'-Моїсєєв');
    }
    public function testSplDetect719()
    {
        $this->assertEquals('S-Моргунов', trim($this->object->getFullNameFormat('Моргунов')).'-Моргунов');
    }
    public function testSplDetect720()
    {
        $this->assertEquals('S-Морков', trim($this->object->getFullNameFormat('Морков')).'-Морков');
    }
    public function testSplDetect721()
    {
        $this->assertEquals('S-Морозов', trim($this->object->getFullNameFormat('Морозов')).'-Морозов');
    }
    public function testSplDetect722()
    {
        $this->assertEquals('S-Мухін', trim($this->object->getFullNameFormat('Мухін')).'-Мухін');
    }
    public function testSplDetect723()
    {
        $this->assertEquals('S-Нікітін', trim($this->object->getFullNameFormat('Нікітін')).'-Нікітін');
    }
    public function testSplDetect724()
    {
        $this->assertEquals('S-Ніколаєв', trim($this->object->getFullNameFormat('Ніколаєв')).'-Ніколаєв');
    }
    public function testSplDetect725()
    {
        $this->assertEquals('S-Нікулін', trim($this->object->getFullNameFormat('Нікулін')).'-Нікулін');
    }
    public function testSplDetect726()
    {
        $this->assertEquals('S-Набоков', trim($this->object->getFullNameFormat('Набоков')).'-Набоков');
    }
    public function testSplDetect727()
    {
        $this->assertEquals('S-Некрасов', trim($this->object->getFullNameFormat('Некрасов')).'-Некрасов');
    }
    public function testSplDetect728()
    {
        $this->assertEquals('S-Новиков', trim($this->object->getFullNameFormat('Новиков')).'-Новиков');
    }
    public function testSplDetect729()
    {
        $this->assertEquals('S-Орлов', trim($this->object->getFullNameFormat('Орлов')).'-Орлов');
    }
    public function testSplDetect730()
    {
        $this->assertEquals('S-Осипов', trim($this->object->getFullNameFormat('Осипов')).'-Осипов');
    }
    public function testSplDetect731()
    {
        $this->assertEquals('S-Павлов', trim($this->object->getFullNameFormat('Павлов')).'-Павлов');
    }
    public function testSplDetect732()
    {
        $this->assertEquals('S-Павлушков', trim($this->object->getFullNameFormat('Павлушков')).'-Павлушков');
    }
    public function testSplDetect733()
    {
        $this->assertEquals('S-Панов', trim($this->object->getFullNameFormat('Панов')).'-Панов');
    }
    public function testSplDetect734()
    {
        $this->assertEquals('S-Петров', trim($this->object->getFullNameFormat('Петров')).'-Петров');
    }
    public function testSplDetect735()
    {
        $this->assertEquals('S-Пильчиков', trim($this->object->getFullNameFormat('Пильчиков')).'-Пильчиков');
    }
    public function testSplDetect736()
    {
        $this->assertEquals('S-Платонов', trim($this->object->getFullNameFormat('Платонов')).'-Платонов');
    }
    public function testSplDetect737()
    {
        $this->assertEquals('S-Плеханов', trim($this->object->getFullNameFormat('Плеханов')).'-Плеханов');
    }
    public function testSplDetect738()
    {
        $this->assertEquals('S-Поляков', trim($this->object->getFullNameFormat('Поляков')).'-Поляков');
    }
    public function testSplDetect739()
    {
        $this->assertEquals('S-Попов', trim($this->object->getFullNameFormat('Попов')).'-Попов');
    }
    public function testSplDetect740()
    {
        $this->assertEquals('S-Поярков', trim($this->object->getFullNameFormat('Поярков')).'-Поярков');
    }
    public function testSplDetect741()
    {
        $this->assertEquals('S-Пригунов', trim($this->object->getFullNameFormat('Пригунов')).'-Пригунов');
    }
    public function testSplDetect742()
    {
        $this->assertEquals('S-Прошкін', trim($this->object->getFullNameFormat('Прошкін')).'-Прошкін');
    }
    public function testSplDetect743()
    {
        $this->assertEquals('S-Решетников', trim($this->object->getFullNameFormat('Решетников')).'-Решетников');
    }
    public function testSplDetect744()
    {
        $this->assertEquals('S-Рожков', trim($this->object->getFullNameFormat('Рожков')).'-Рожков');
    }
    public function testSplDetect745()
    {
        $this->assertEquals('S-Романов', trim($this->object->getFullNameFormat('Романов')).'-Романов');
    }
    public function testSplDetect746()
    {
        $this->assertEquals('S-Рябов', trim($this->object->getFullNameFormat('Рябов')).'-Рябов');
    }
    public function testSplDetect747()
    {
        $this->assertEquals('S-Саблін', trim($this->object->getFullNameFormat('Саблін')).'-Саблін');
    }
    public function testSplDetect748()
    {
        $this->assertEquals('S-Савін', trim($this->object->getFullNameFormat('Савін')).'-Савін');
    }
    public function testSplDetect749()
    {
        $this->assertEquals('S-Сазонов', trim($this->object->getFullNameFormat('Сазонов')).'-Сазонов');
    }
    public function testSplDetect750()
    {
        $this->assertEquals('S-Сальников', trim($this->object->getFullNameFormat('Сальников')).'-Сальников');
    }
    public function testSplDetect751()
    {
        $this->assertEquals('S-Самойлов', trim($this->object->getFullNameFormat('Самойлов')).'-Самойлов');
    }
    public function testSplDetect752()
    {
        $this->assertEquals('S-Самсонов', trim($this->object->getFullNameFormat('Самсонов')).'-Самсонов');
    }
    public function testSplDetect753()
    {
        $this->assertEquals('S-Сбітнєв', trim($this->object->getFullNameFormat('Сбітнєв')).'-Сбітнєв');
    }
    public function testSplDetect754()
    {
        $this->assertEquals('S-Свиридов', trim($this->object->getFullNameFormat('Свиридов')).'-Свиридов');
    }
    public function testSplDetect755()
    {
        $this->assertEquals('S-Селезньов', trim($this->object->getFullNameFormat('Селезньов')).'-Селезньов');
    }
    public function testSplDetect756()
    {
        $this->assertEquals('S-Семенов', trim($this->object->getFullNameFormat('Семенов')).'-Семенов');
    }
    public function testSplDetect757()
    {
        $this->assertEquals('S-Сербін', trim($this->object->getFullNameFormat('Сербін')).'-Сербін');
    }
    public function testSplDetect758()
    {
        $this->assertEquals('S-Сергєєв', trim($this->object->getFullNameFormat('Сергєєв')).'-Сергєєв');
    }
    public function testSplDetect759()
    {
        $this->assertEquals('S-Сибіряков', trim($this->object->getFullNameFormat('Сибіряков')).'-Сибіряков');
    }
    public function testSplDetect760()
    {
        $this->assertEquals('S-Сидоров', trim($this->object->getFullNameFormat('Сидоров')).'-Сидоров');
    }
    public function testSplDetect761()
    {
        $this->assertEquals('S-Симонов', trim($this->object->getFullNameFormat('Симонов')).'-Симонов');
    }
    public function testSplDetect762()
    {
        $this->assertEquals('S-Синельников', trim($this->object->getFullNameFormat('Синельников')).'-Синельников');
    }
    public function testSplDetect763()
    {
        $this->assertEquals('S-Скобелев', trim($this->object->getFullNameFormat('Скобелев')).'-Скобелев');
    }
    public function testSplDetect764()
    {
        $this->assertEquals('S-Скоблін', trim($this->object->getFullNameFormat('Скоблін')).'-Скоблін');
    }
    public function testSplDetect765()
    {
        $this->assertEquals('S-Смирнов', trim($this->object->getFullNameFormat('Смирнов')).'-Смирнов');
    }
    public function testSplDetect766()
    {
        $this->assertEquals('S-Снєгірьов', trim($this->object->getFullNameFormat('Снєгірьов')).'-Снєгірьов');
    }
    public function testSplDetect767()
    {
        $this->assertEquals('S-Соболєв', trim($this->object->getFullNameFormat('Соболєв')).'-Соболєв');
    }
    public function testSplDetect768()
    {
        $this->assertEquals('S-Соколов', trim($this->object->getFullNameFormat('Соколов')).'-Соколов');
    }
    public function testSplDetect769()
    {
        $this->assertEquals('S-Солнцев', trim($this->object->getFullNameFormat('Солнцев')).'-Солнцев');
    }
    public function testSplDetect770()
    {
        $this->assertEquals('S-Соловйов', trim($this->object->getFullNameFormat('Соловйов')).'-Соловйов');
    }
    public function testSplDetect771()
    {
        $this->assertEquals('S-Сомов', trim($this->object->getFullNameFormat('Сомов')).'-Сомов');
    }
    public function testSplDetect772()
    {
        $this->assertEquals('S-Сорокін', trim($this->object->getFullNameFormat('Сорокін')).'-Сорокін');
    }
    public function testSplDetect773()
    {
        $this->assertEquals('S-Стєклов', trim($this->object->getFullNameFormat('Стєклов')).'-Стєклов');
    }
    public function testSplDetect774()
    {
        $this->assertEquals('S-Старков', trim($this->object->getFullNameFormat('Старков')).'-Старков');
    }
    public function testSplDetect775()
    {
        $this->assertEquals('S-Степанов', trim($this->object->getFullNameFormat('Степанов')).'-Степанов');
    }
    public function testSplDetect776()
    {
        $this->assertEquals('S-Табаков', trim($this->object->getFullNameFormat('Табаков')).'-Табаков');
    }
    public function testSplDetect777()
    {
        $this->assertEquals('S-Тарасов', trim($this->object->getFullNameFormat('Тарасов')).'-Тарасов');
    }
    public function testSplDetect778()
    {
        $this->assertEquals('S-Терентьєв', trim($this->object->getFullNameFormat('Терентьєв')).'-Терентьєв');
    }
    public function testSplDetect779()
    {
        $this->assertEquals('S-Тимофєєв', trim($this->object->getFullNameFormat('Тимофєєв')).'-Тимофєєв');
    }
    public function testSplDetect780()
    {
        $this->assertEquals('S-Титов', trim($this->object->getFullNameFormat('Титов')).'-Титов');
    }
    public function testSplDetect781()
    {
        $this->assertEquals('S-Тихомиров', trim($this->object->getFullNameFormat('Тихомиров')).'-Тихомиров');
    }
    public function testSplDetect782()
    {
        $this->assertEquals('S-Тихонов', trim($this->object->getFullNameFormat('Тихонов')).'-Тихонов');
    }
    public function testSplDetect783()
    {
        $this->assertEquals('S-Тюленєв', trim($this->object->getFullNameFormat('Тюленєв')).'-Тюленєв');
    }
    public function testSplDetect784()
    {
        $this->assertEquals('S-Уваров', trim($this->object->getFullNameFormat('Уваров')).'-Уваров');
    }
    public function testSplDetect785()
    {
        $this->assertEquals('S-Усов', trim($this->object->getFullNameFormat('Усов')).'-Усов');
    }
    public function testSplDetect786()
    {
        $this->assertEquals('S-Устинов', trim($this->object->getFullNameFormat('Устинов')).'-Устинов');
    }
    public function testSplDetect787()
    {
        $this->assertEquals('S-Філіппов', trim($this->object->getFullNameFormat('Філіппов')).'-Філіппов');
    }
    public function testSplDetect788()
    {
        $this->assertEquals('S-Філатов', trim($this->object->getFullNameFormat('Філатов')).'-Філатов');
    }
    public function testSplDetect789()
    {
        $this->assertEquals('S-Федоров', trim($this->object->getFullNameFormat('Федоров')).'-Федоров');
    }
    public function testSplDetect790()
    {
        $this->assertEquals('S-Фомін', trim($this->object->getFullNameFormat('Фомін')).'-Фомін');
    }
    public function testSplDetect791()
    {
        $this->assertEquals('S-Фролов', trim($this->object->getFullNameFormat('Фролов')).'-Фролов');
    }
    public function testSplDetect792()
    {
        $this->assertEquals('S-Хілков', trim($this->object->getFullNameFormat('Хілков')).'-Хілков');
    }
    public function testSplDetect793()
    {
        $this->assertEquals('S-Хвостов', trim($this->object->getFullNameFormat('Хвостов')).'-Хвостов');
    }
    public function testSplDetect794()
    {
        $this->assertEquals('S-Худяков', trim($this->object->getFullNameFormat('Худяков')).'-Худяков');
    }
    public function testSplDetect795()
    {
        $this->assertEquals('S-Цвєтков', trim($this->object->getFullNameFormat('Цвєтков')).'-Цвєтков');
    }
    public function testSplDetect796()
    {
        $this->assertEquals('S-Чевкін', trim($this->object->getFullNameFormat('Чевкін')).'-Чевкін');
    }
    public function testSplDetect797()
    {
        $this->assertEquals('S-Черенков', trim($this->object->getFullNameFormat('Черенков')).'-Черенков');
    }
    public function testSplDetect798()
    {
        $this->assertEquals('S-Черепков', trim($this->object->getFullNameFormat('Черепков')).'-Черепков');
    }
    public function testSplDetect799()
    {
        $this->assertEquals('S-Чулков', trim($this->object->getFullNameFormat('Чулков')).'-Чулков');
    }
    public function testSplDetect800()
    {
        $this->assertEquals('S-Шевельов', trim($this->object->getFullNameFormat('Шевельов')).'-Шевельов');
    }
    public function testSplDetect801()
    {
        $this->assertEquals('S-Шеліхов', trim($this->object->getFullNameFormat('Шеліхов')).'-Шеліхов');
    }
    public function testSplDetect802()
    {
        $this->assertEquals('S-Шинін', trim($this->object->getFullNameFormat('Шинін')).'-Шинін');
    }
    public function testSplDetect803()
    {
        $this->assertEquals('S-Ширяєв', trim($this->object->getFullNameFormat('Ширяєв')).'-Ширяєв');
    }
    public function testSplDetect804()
    {
        $this->assertEquals('S-Шишов', trim($this->object->getFullNameFormat('Шишов')).'-Шишов');
    }
    public function testSplDetect805()
    {
        $this->assertEquals('S-Шулаков', trim($this->object->getFullNameFormat('Шулаков')).'-Шулаков');
    }
    public function testSplDetect806()
    {
        $this->assertEquals('S-Щапов', trim($this->object->getFullNameFormat('Щапов')).'-Щапов');
    }
    public function testSplDetect807()
    {
        $this->assertEquals('S-Щасливий', trim($this->object->getFullNameFormat('Щасливий')).'-Щасливий');
    }
    public function testSplDetect808()
    {
        $this->assertEquals('S-Яковлєв', trim($this->object->getFullNameFormat('Яковлєв')).'-Яковлєв');
    }
    public function testSplDetect809()
    {
        $this->assertEquals('S-Яшин', trim($this->object->getFullNameFormat('Яшин')).'-Яшин');
    }
    public function testSplDetect810()
    {
        $this->assertEquals('S-Єрмоленко', trim($this->object->getFullNameFormat('Єрмоленко')).'-Єрмоленко');
    }
    public function testSplDetect811()
    {
        $this->assertEquals('S-Єсипенко', trim($this->object->getFullNameFormat('Єсипенко')).'-Єсипенко');
    }
    public function testSplDetect812()
    {
        $this->assertEquals('S-Іваненко', trim($this->object->getFullNameFormat('Іваненко')).'-Іваненко');
    }
    public function testSplDetect813()
    {
        $this->assertEquals('S-Іванченко', trim($this->object->getFullNameFormat('Іванченко')).'-Іванченко');
    }
    public function testSplDetect814()
    {
        $this->assertEquals('S-Іванчук', trim($this->object->getFullNameFormat('Іванчук')).'-Іванчук');
    }
    public function testSplDetect815()
    {
        $this->assertEquals('S-Іванюк', trim($this->object->getFullNameFormat('Іванюк')).'-Іванюк');
    }
    public function testSplDetect816()
    {
        $this->assertEquals('S-Івахненко', trim($this->object->getFullNameFormat('Івахненко')).'-Івахненко');
    }
    public function testSplDetect817()
    {
        $this->assertEquals('S-Івашко', trim($this->object->getFullNameFormat('Івашко')).'-Івашко');
    }
    public function testSplDetect818()
    {
        $this->assertEquals('S-Іващенко', trim($this->object->getFullNameFormat('Іващенко')).'-Іващенко');
    }
    public function testSplDetect819()
    {
        $this->assertEquals('S-Івченко', trim($this->object->getFullNameFormat('Івченко')).'-Івченко');
    }
    public function testSplDetect820()
    {
        $this->assertEquals('S-Іллєнко', trim($this->object->getFullNameFormat('Іллєнко')).'-Іллєнко');
    }
    public function testSplDetect821()
    {
        $this->assertEquals('S-Ільницька', trim($this->object->getFullNameFormat('Ільницька')).'-Ільницька');
    }
    public function testSplDetect822()
    {
        $this->assertEquals('S-Ільченко', trim($this->object->getFullNameFormat('Ільченко')).'-Ільченко');
    }
    public function testSplDetect823()
    {
        $this->assertEquals('S-Іщенко', trim($this->object->getFullNameFormat('Іщенко')).'-Іщенко');
    }
    public function testSplDetect824()
    {
        $this->assertEquals('S-Абраменко', trim($this->object->getFullNameFormat('Абраменко')).'-Абраменко');
    }
    public function testSplDetect825()
    {
        $this->assertEquals('S-Абрамчук', trim($this->object->getFullNameFormat('Абрамчук')).'-Абрамчук');
    }
    public function testSplDetect826()
    {
        $this->assertEquals('S-Адамчук', trim($this->object->getFullNameFormat('Адамчук')).'-Адамчук');
    }
    public function testSplDetect827()
    {
        $this->assertEquals('S-Акуленко', trim($this->object->getFullNameFormat('Акуленко')).'-Акуленко');
    }
    public function testSplDetect828()
    {
        $this->assertEquals('S-Алексєєнко', trim($this->object->getFullNameFormat('Алексєєнко')).'-Алексєєнко');
    }
    public function testSplDetect829()
    {
        $this->assertEquals('S-Алексійчук', trim($this->object->getFullNameFormat('Алексійчук')).'-Алексійчук');
    }
    public function testSplDetect830()
    {
        $this->assertEquals('S-Андрієнко', trim($this->object->getFullNameFormat('Андрієнко')).'-Андрієнко');
    }
    public function testSplDetect831()
    {
        $this->assertEquals('S-Андрійчук', trim($this->object->getFullNameFormat('Андрійчук')).'-Андрійчук');
    }
    public function testSplDetect832()
    {
        $this->assertEquals('S-Андрейко', trim($this->object->getFullNameFormat('Андрейко')).'-Андрейко');
    }
    public function testSplDetect833()
    {
        $this->assertEquals('S-Андрущенко', trim($this->object->getFullNameFormat('Андрущенко')).'-Андрущенко');
    }
    public function testSplDetect834()
    {
        $this->assertEquals('S-Анищенко', trim($this->object->getFullNameFormat('Анищенко')).'-Анищенко');
    }
    public function testSplDetect835()
    {
        $this->assertEquals('S-Антонюк', trim($this->object->getFullNameFormat('Антонюк')).'-Антонюк');
    }
    public function testSplDetect836()
    {
        $this->assertEquals('S-Арсенич', trim($this->object->getFullNameFormat('Арсенич')).'-Арсенич');
    }
    public function testSplDetect837()
    {
        $this->assertEquals('S-Артюх', trim($this->object->getFullNameFormat('Артюх')).'-Артюх');
    }
    public function testSplDetect838()
    {
        $this->assertEquals('S-Атаманчук', trim($this->object->getFullNameFormat('Атаманчук')).'-Атаманчук');
    }
    public function testSplDetect839()
    {
        $this->assertEquals('S-Біла', trim($this->object->getFullNameFormat('Біла')).'-Біла');
    }
    public function testSplDetect840()
    {
        $this->assertEquals('S-Білас', trim($this->object->getFullNameFormat('Білас')).'-Білас');
    }
    public function testSplDetect841()
    {
        $this->assertEquals('S-Білодід', trim($this->object->getFullNameFormat('Білодід')).'-Білодід');
    }
    public function testSplDetect842()
    {
        $this->assertEquals('S-Білоус', trim($this->object->getFullNameFormat('Білоус')).'-Білоус');
    }
    public function testSplDetect843()
    {
        $this->assertEquals('S-Бабійчук', trim($this->object->getFullNameFormat('Бабійчук')).'-Бабійчук');
    }
    public function testSplDetect844()
    {
        $this->assertEquals('S-Бабак', trim($this->object->getFullNameFormat('Бабак')).'-Бабак');
    }
    public function testSplDetect845()
    {
        $this->assertEquals('S-Бабчук', trim($this->object->getFullNameFormat('Бабчук')).'-Бабчук');
    }
    public function testSplDetect846()
    {
        $this->assertEquals('S-Багмут', trim($this->object->getFullNameFormat('Багмут')).'-Багмут');
    }
    public function testSplDetect847()
    {
        $this->assertEquals('S-Багрій', trim($this->object->getFullNameFormat('Багрій')).'-Багрій');
    }
    public function testSplDetect848()
    {
        $this->assertEquals('S-Бадлак', trim($this->object->getFullNameFormat('Бадлак')).'-Бадлак');
    }
    public function testSplDetect849()
    {
        $this->assertEquals('S-Бажан', trim($this->object->getFullNameFormat('Бажан')).'-Бажан');
    }
    public function testSplDetect850()
    {
        $this->assertEquals('S-Балтача', trim($this->object->getFullNameFormat('Балтача')).'-Балтача');
    }
    public function testSplDetect851()
    {
        $this->assertEquals('S-Бандура', trim($this->object->getFullNameFormat('Бандура')).'-Бандура');
    }
    public function testSplDetect852()
    {
        $this->assertEquals('S-Баран', trim($this->object->getFullNameFormat('Баран')).'-Баран');
    }
    public function testSplDetect853()
    {
        $this->assertEquals('S-Баранець', trim($this->object->getFullNameFormat('Баранець')).'-Баранець');
    }
    public function testSplDetect854()
    {
        $this->assertEquals('S-Барановська', trim($this->object->getFullNameFormat('Барановська')).'-Барановська');
    }
    public function testSplDetect855()
    {
        $this->assertEquals('S-Баранюк', trim($this->object->getFullNameFormat('Баранюк')).'-Баранюк');
    }
    public function testSplDetect856()
    {
        $this->assertEquals('S-Батюк', trim($this->object->getFullNameFormat('Батюк')).'-Батюк');
    }
    public function testSplDetect857()
    {
        $this->assertEquals('S-Бачинська', trim($this->object->getFullNameFormat('Бачинська')).'-Бачинська');
    }
    public function testSplDetect858()
    {
        $this->assertEquals('S-Бебешко', trim($this->object->getFullNameFormat('Бебешко')).'-Бебешко');
    }
    public function testSplDetect859()
    {
        $this->assertEquals('S-Бевзенко', trim($this->object->getFullNameFormat('Бевзенко')).'-Бевзенко');
    }
    public function testSplDetect860()
    {
        $this->assertEquals('S-Березовчук', trim($this->object->getFullNameFormat('Березовчук')).'-Березовчук');
    }
    public function testSplDetect861()
    {
        $this->assertEquals('S-Божик', trim($this->object->getFullNameFormat('Божик')).'-Божик');
    }
    public function testSplDetect862()
    {
        $this->assertEquals('S-Божко', trim($this->object->getFullNameFormat('Божко')).'-Божко');
    }
    public function testSplDetect863()
    {
        $this->assertEquals('S-Бойко', trim($this->object->getFullNameFormat('Бойко')).'-Бойко');
    }
    public function testSplDetect864()
    {
        $this->assertEquals('S-Бойцун', trim($this->object->getFullNameFormat('Бойцун')).'-Бойцун');
    }
    public function testSplDetect865()
    {
        $this->assertEquals('S-Бойчак', trim($this->object->getFullNameFormat('Бойчак')).'-Бойчак');
    }
    public function testSplDetect866()
    {
        $this->assertEquals('S-Бойчук', trim($this->object->getFullNameFormat('Бойчук')).'-Бойчук');
    }
    public function testSplDetect867()
    {
        $this->assertEquals('S-Бондар', trim($this->object->getFullNameFormat('Бондар')).'-Бондар');
    }
    public function testSplDetect868()
    {
        $this->assertEquals('S-Бондаренко', trim($this->object->getFullNameFormat('Бондаренко')).'-Бондаренко');
    }
    public function testSplDetect869()
    {
        $this->assertEquals('S-Бондарчук', trim($this->object->getFullNameFormat('Бондарчук')).'-Бондарчук');
    }
    public function testSplDetect870()
    {
        $this->assertEquals('S-Борисенко', trim($this->object->getFullNameFormat('Борисенко')).'-Борисенко');
    }
    public function testSplDetect871()
    {
        $this->assertEquals('S-Борисикевич', trim($this->object->getFullNameFormat('Борисикевич')).'-Борисикевич');
    }
    public function testSplDetect872()
    {
        $this->assertEquals('S-Братусь', trim($this->object->getFullNameFormat('Братусь')).'-Братусь');
    }
    public function testSplDetect873()
    {
        $this->assertEquals('S-Букатевич', trim($this->object->getFullNameFormat('Букатевич')).'-Букатевич');
    }
    public function testSplDetect874()
    {
        $this->assertEquals('S-Бурбан', trim($this->object->getFullNameFormat('Бурбан')).'-Бурбан');
    }
    public function testSplDetect875()
    {
        $this->assertEquals('S-Бурячок', trim($this->object->getFullNameFormat('Бурячок')).'-Бурячок');
    }
    public function testSplDetect876()
    {
        $this->assertEquals('S-Бутейко', trim($this->object->getFullNameFormat('Бутейко')).'-Бутейко');
    }
    public function testSplDetect877()
    {
        $this->assertEquals('S-Бутенко', trim($this->object->getFullNameFormat('Бутенко')).'-Бутенко');
    }
    public function testSplDetect878()
    {
        $this->assertEquals('S-Бутник', trim($this->object->getFullNameFormat('Бутник')).'-Бутник');
    }
    public function testSplDetect879()
    {
        $this->assertEquals('S-Бухало', trim($this->object->getFullNameFormat('Бухало')).'-Бухало');
    }
    public function testSplDetect880()
    {
        $this->assertEquals('S-Василашко', trim($this->object->getFullNameFormat('Василашко')).'-Василашко');
    }
    public function testSplDetect881()
    {
        $this->assertEquals('S-Василенко', trim($this->object->getFullNameFormat('Василенко')).'-Василенко');
    }
    public function testSplDetect882()
    {
        $this->assertEquals('S-Васильченко', trim($this->object->getFullNameFormat('Васильченко')).'-Васильченко');
    }
    public function testSplDetect883()
    {
        $this->assertEquals('S-Васильчук', trim($this->object->getFullNameFormat('Васильчук')).'-Васильчук');
    }
    public function testSplDetect884()
    {
        $this->assertEquals('S-Васкул', trim($this->object->getFullNameFormat('Васкул')).'-Васкул');
    }
    public function testSplDetect885()
    {
        $this->assertEquals('S-Вахній', trim($this->object->getFullNameFormat('Вахній')).'-Вахній');
    }
    public function testSplDetect886()
    {
        $this->assertEquals('S-Ващенко-Захарченко', trim($this->object->getFullNameFormat('Ващенко-Захарченко')).'-Ващенко-Захарченко');
    }
    public function testSplDetect887()
    {
        $this->assertEquals('S-Вдовиченко', trim($this->object->getFullNameFormat('Вдовиченко')).'-Вдовиченко');
    }
    public function testSplDetect888()
    {
        $this->assertEquals('S-Величко', trim($this->object->getFullNameFormat('Величко')).'-Величко');
    }
    public function testSplDetect889()
    {
        $this->assertEquals('S-Вертипорох', trim($this->object->getFullNameFormat('Вертипорох')).'-Вертипорох');
    }
    public function testSplDetect890()
    {
        $this->assertEquals('S-Верхола', trim($this->object->getFullNameFormat('Верхола')).'-Верхола');
    }
    public function testSplDetect891()
    {
        $this->assertEquals('S-Винокур', trim($this->object->getFullNameFormat('Винокур')).'-Винокур');
    }
    public function testSplDetect892()
    {
        $this->assertEquals('S-Влох', trim($this->object->getFullNameFormat('Влох')).'-Влох');
    }
    public function testSplDetect893()
    {
        $this->assertEquals('S-Вобла', trim($this->object->getFullNameFormat('Вобла')).'-Вобла');
    }
    public function testSplDetect894()
    {
        $this->assertEquals('S-Вовк', trim($this->object->getFullNameFormat('Вовк')).'-Вовк');
    }
    public function testSplDetect895()
    {
        $this->assertEquals('S-Возняк', trim($this->object->getFullNameFormat('Возняк')).'-Возняк');
    }
    public function testSplDetect896()
    {
        $this->assertEquals('S-Волох', trim($this->object->getFullNameFormat('Волох')).'-Волох');
    }
    public function testSplDetect897()
    {
        $this->assertEquals('S-Волощук', trim($this->object->getFullNameFormat('Волощук')).'-Волощук');
    }
    public function testSplDetect898()
    {
        $this->assertEquals('S-Вороновська', trim($this->object->getFullNameFormat('Вороновська')).'-Вороновська');
    }
    public function testSplDetect899()
    {
        $this->assertEquals('S-Гавриленко', trim($this->object->getFullNameFormat('Гавриленко')).'-Гавриленко');
    }
    public function testSplDetect900()
    {
        $this->assertEquals('S-Гаврилюк', trim($this->object->getFullNameFormat('Гаврилюк')).'-Гаврилюк');
    }
    public function testSplDetect901()
    {
        $this->assertEquals('S-Гальченко', trim($this->object->getFullNameFormat('Гальченко')).'-Гальченко');
    }
    public function testSplDetect902()
    {
        $this->assertEquals('S-Гамалія', trim($this->object->getFullNameFormat('Гамалія')).'-Гамалія');
    }
    public function testSplDetect903()
    {
        $this->assertEquals('S-Ганицька', trim($this->object->getFullNameFormat('Ганицька')).'-Ганицька');
    }
    public function testSplDetect904()
    {
        $this->assertEquals('S-Гарань', trim($this->object->getFullNameFormat('Гарань')).'-Гарань');
    }
    public function testSplDetect905()
    {
        $this->assertEquals('S-Гармаш', trim($this->object->getFullNameFormat('Гармаш')).'-Гармаш');
    }
    public function testSplDetect906()
    {
        $this->assertEquals('S-Гасай', trim($this->object->getFullNameFormat('Гасай')).'-Гасай');
    }
    public function testSplDetect907()
    {
        $this->assertEquals('S-Гасюк', trim($this->object->getFullNameFormat('Гасюк')).'-Гасюк');
    }
    public function testSplDetect908()
    {
        $this->assertEquals('S-Герасименко', trim($this->object->getFullNameFormat('Герасименко')).'-Герасименко');
    }
    public function testSplDetect909()
    {
        $this->assertEquals('S-Геращенко', trim($this->object->getFullNameFormat('Геращенко')).'-Геращенко');
    }
    public function testSplDetect910()
    {
        $this->assertEquals('S-Герцик', trim($this->object->getFullNameFormat('Герцик')).'-Герцик');
    }
    public function testSplDetect911()
    {
        $this->assertEquals('S-Гладченко', trim($this->object->getFullNameFormat('Гладченко')).'-Гладченко');
    }
    public function testSplDetect912()
    {
        $this->assertEquals('S-Глоба', trim($this->object->getFullNameFormat('Глоба')).'-Глоба');
    }
    public function testSplDetect913()
    {
        $this->assertEquals('S-Гнатюк', trim($this->object->getFullNameFormat('Гнатюк')).'-Гнатюк');
    }
    public function testSplDetect914()
    {
        $this->assertEquals('S-Гоголь', trim($this->object->getFullNameFormat('Гоголь')).'-Гоголь');
    }
    public function testSplDetect915()
    {
        $this->assertEquals('S-Годунок', trim($this->object->getFullNameFormat('Годунок')).'-Годунок');
    }
    public function testSplDetect916()
    {
        $this->assertEquals('S-Головата', trim($this->object->getFullNameFormat('Головата')).'-Головата');
    }
    public function testSplDetect917()
    {
        $this->assertEquals('S-Головко', trim($this->object->getFullNameFormat('Головко')).'-Головко');
    }
    public function testSplDetect918()
    {
        $this->assertEquals('S-Голуб', trim($this->object->getFullNameFormat('Голуб')).'-Голуб');
    }
    public function testSplDetect919()
    {
        $this->assertEquals('S-Голубнича', trim($this->object->getFullNameFormat('Голубнича')).'-Голубнича');
    }
    public function testSplDetect920()
    {
        $this->assertEquals('S-Гонта', trim($this->object->getFullNameFormat('Гонта')).'-Гонта');
    }
    public function testSplDetect921()
    {
        $this->assertEquals('S-Гончар', trim($this->object->getFullNameFormat('Гончар')).'-Гончар');
    }
    public function testSplDetect922()
    {
        $this->assertEquals('S-Гончаренко', trim($this->object->getFullNameFormat('Гончаренко')).'-Гончаренко');
    }
    public function testSplDetect923()
    {
        $this->assertEquals('S-Горбаль', trim($this->object->getFullNameFormat('Горбаль')).'-Горбаль');
    }
    public function testSplDetect924()
    {
        $this->assertEquals('S-Гордієнко', trim($this->object->getFullNameFormat('Гордієнко')).'-Гордієнко');
    }
    public function testSplDetect925()
    {
        $this->assertEquals('S-Гошовська', trim($this->object->getFullNameFormat('Гошовська')).'-Гошовська');
    }
    public function testSplDetect926()
    {
        $this->assertEquals('S-Грінченко', trim($this->object->getFullNameFormat('Грінченко')).'-Грінченко');
    }
    public function testSplDetect927()
    {
        $this->assertEquals('S-Грабович', trim($this->object->getFullNameFormat('Грабович')).'-Грабович');
    }
    public function testSplDetect928()
    {
        $this->assertEquals('S-Грабовська', trim($this->object->getFullNameFormat('Грабовська')).'-Грабовська');
    }
    public function testSplDetect929()
    {
        $this->assertEquals('S-Григоренко', trim($this->object->getFullNameFormat('Григоренко')).'-Григоренко');
    }
    public function testSplDetect930()
    {
        $this->assertEquals('S-Григорович', trim($this->object->getFullNameFormat('Григорович')).'-Григорович');
    }
    public function testSplDetect931()
    {
        $this->assertEquals('S-Григорович-Барська', trim($this->object->getFullNameFormat('Григорович-Барська')).'-Григорович-Барська');
    }
    public function testSplDetect932()
    {
        $this->assertEquals('S-Григорчук', trim($this->object->getFullNameFormat('Григорчук')).'-Григорчук');
    }
    public function testSplDetect933()
    {
        $this->assertEquals('S-Грицак', trim($this->object->getFullNameFormat('Грицак')).'-Грицак');
    }
    public function testSplDetect934()
    {
        $this->assertEquals('S-Гриценко', trim($this->object->getFullNameFormat('Гриценко')).'-Гриценко');
    }
    public function testSplDetect935()
    {
        $this->assertEquals('S-Гришко', trim($this->object->getFullNameFormat('Гришко')).'-Гришко');
    }
    public function testSplDetect936()
    {
        $this->assertEquals('S-Гудзій', trim($this->object->getFullNameFormat('Гудзій')).'-Гудзій');
    }
    public function testSplDetect937()
    {
        $this->assertEquals('S-Гудзь', trim($this->object->getFullNameFormat('Гудзь')).'-Гудзь');
    }
    public function testSplDetect938()
    {
        $this->assertEquals('S-Гуменюк', trim($this->object->getFullNameFormat('Гуменюк')).'-Гуменюк');
    }
    public function testSplDetect939()
    {
        $this->assertEquals('S-Гунько', trim($this->object->getFullNameFormat('Гунько')).'-Гунько');
    }
    public function testSplDetect940()
    {
        $this->assertEquals('S-Діденко', trim($this->object->getFullNameFormat('Діденко')).'-Діденко');
    }
    public function testSplDetect941()
    {
        $this->assertEquals('S-Даниленко', trim($this->object->getFullNameFormat('Даниленко')).'-Даниленко');
    }
    public function testSplDetect942()
    {
        $this->assertEquals('S-Данькевич', trim($this->object->getFullNameFormat('Данькевич')).'-Данькевич');
    }
    public function testSplDetect943()
    {
        $this->assertEquals('S-Дараган', trim($this->object->getFullNameFormat('Дараган')).'-Дараган');
    }
    public function testSplDetect944()
    {
        $this->assertEquals('S-Дашкевич', trim($this->object->getFullNameFormat('Дашкевич')).'-Дашкевич');
    }
    public function testSplDetect945()
    {
        $this->assertEquals('S-Денисенко', trim($this->object->getFullNameFormat('Денисенко')).'-Денисенко');
    }
    public function testSplDetect946()
    {
        $this->assertEquals('S-Джус', trim($this->object->getFullNameFormat('Джус')).'-Джус');
    }
    public function testSplDetect947()
    {
        $this->assertEquals('S-Дзюба', trim($this->object->getFullNameFormat('Дзюба')).'-Дзюба');
    }
    public function testSplDetect948()
    {
        $this->assertEquals('S-Дикань', trim($this->object->getFullNameFormat('Дикань')).'-Дикань');
    }
    public function testSplDetect949()
    {
        $this->assertEquals('S-Дмитерко', trim($this->object->getFullNameFormat('Дмитерко')).'-Дмитерко');
    }
    public function testSplDetect950()
    {
        $this->assertEquals('S-Довженко', trim($this->object->getFullNameFormat('Довженко')).'-Довженко');
    }
    public function testSplDetect951()
    {
        $this->assertEquals('S-Дорош', trim($this->object->getFullNameFormat('Дорош')).'-Дорош');
    }
    public function testSplDetect952()
    {
        $this->assertEquals('S-Дорошенко', trim($this->object->getFullNameFormat('Дорошенко')).'-Дорошенко');
    }
    public function testSplDetect953()
    {
        $this->assertEquals('S-Доценко', trim($this->object->getFullNameFormat('Доценко')).'-Доценко');
    }
    public function testSplDetect954()
    {
        $this->assertEquals('S-Дочинець', trim($this->object->getFullNameFormat('Дочинець')).'-Дочинець');
    }
    public function testSplDetect955()
    {
        $this->assertEquals('S-Дудко', trim($this->object->getFullNameFormat('Дудко')).'-Дудко');
    }
    public function testSplDetect956()
    {
        $this->assertEquals('S-Дяченко', trim($this->object->getFullNameFormat('Дяченко')).'-Дяченко');
    }
    public function testSplDetect957()
    {
        $this->assertEquals('S-Ейбоженко', trim($this->object->getFullNameFormat('Ейбоженко')).'-Ейбоженко');
    }
    public function testSplDetect958()
    {
        $this->assertEquals('S-Жайворон', trim($this->object->getFullNameFormat('Жайворон')).'-Жайворон');
    }
    public function testSplDetect959()
    {
        $this->assertEquals('S-Жаліло', trim($this->object->getFullNameFormat('Жаліло')).'-Жаліло');
    }
    public function testSplDetect960()
    {
        $this->assertEquals('S-Жежерін', trim($this->object->getFullNameFormat('Жежерін')).'-Жежерін');
    }
    public function testSplDetect961()
    {
        $this->assertEquals('S-Желєзняк', trim($this->object->getFullNameFormat('Желєзняк')).'-Желєзняк');
    }
    public function testSplDetect962()
    {
        $this->assertEquals('S-Железняк', trim($this->object->getFullNameFormat('Железняк')).'-Железняк');
    }
    public function testSplDetect963()
    {
        $this->assertEquals('S-Жилко', trim($this->object->getFullNameFormat('Жилко')).'-Жилко');
    }
    public function testSplDetect964()
    {
        $this->assertEquals('S-Жирко', trim($this->object->getFullNameFormat('Жирко')).'-Жирко');
    }
    public function testSplDetect965()
    {
        $this->assertEquals('S-Жук', trim($this->object->getFullNameFormat('Жук')).'-Жук');
    }
    public function testSplDetect966()
    {
        $this->assertEquals('S-Жупанська', trim($this->object->getFullNameFormat('Жупанська')).'-Жупанська');
    }
    public function testSplDetect967()
    {
        $this->assertEquals('S-Заєць', trim($this->object->getFullNameFormat('Заєць')).'-Заєць');
    }
    public function testSplDetect968()
    {
        $this->assertEquals('S-Забашта', trim($this->object->getFullNameFormat('Забашта')).'-Забашта');
    }
    public function testSplDetect969()
    {
        $this->assertEquals('S-Заболотна', trim($this->object->getFullNameFormat('Заболотна')).'-Заболотна');
    }
    public function testSplDetect970()
    {
        $this->assertEquals('S-Завальнюк', trim($this->object->getFullNameFormat('Завальнюк')).'-Завальнюк');
    }
    public function testSplDetect971()
    {
        $this->assertEquals('S-Закусило', trim($this->object->getFullNameFormat('Закусило')).'-Закусило');
    }
    public function testSplDetect972()
    {
        $this->assertEquals('S-Залізняк', trim($this->object->getFullNameFormat('Залізняк')).'-Залізняк');
    }
    public function testSplDetect973()
    {
        $this->assertEquals('S-Заруба', trim($this->object->getFullNameFormat('Заруба')).'-Заруба');
    }
    public function testSplDetect974()
    {
        $this->assertEquals('S-Засядько', trim($this->object->getFullNameFormat('Засядько')).'-Засядько');
    }
    public function testSplDetect975()
    {
        $this->assertEquals('S-Захаренко', trim($this->object->getFullNameFormat('Захаренко')).'-Захаренко');
    }
    public function testSplDetect976()
    {
        $this->assertEquals('S-Захарчук', trim($this->object->getFullNameFormat('Захарчук')).'-Захарчук');
    }
    public function testSplDetect977()
    {
        $this->assertEquals('S-Заяць', trim($this->object->getFullNameFormat('Заяць')).'-Заяць');
    }
    public function testSplDetect978()
    {
        $this->assertEquals('S-Заячківська', trim($this->object->getFullNameFormat('Заячківська')).'-Заячківська');
    }
    public function testSplDetect979()
    {
        $this->assertEquals('S-Зленко', trim($this->object->getFullNameFormat('Зленко')).'-Зленко');
    }
    public function testSplDetect980()
    {
        $this->assertEquals('S-Золотаренко', trim($this->object->getFullNameFormat('Золотаренко')).'-Золотаренко');
    }
    public function testSplDetect981()
    {
        $this->assertEquals('S-Кабачок', trim($this->object->getFullNameFormat('Кабачок')).'-Кабачок');
    }
    public function testSplDetect982()
    {
        $this->assertEquals('S-Каганець', trim($this->object->getFullNameFormat('Каганець')).'-Каганець');
    }
    public function testSplDetect983()
    {
        $this->assertEquals('S-Калинович', trim($this->object->getFullNameFormat('Калинович')).'-Калинович');
    }
    public function testSplDetect984()
    {
        $this->assertEquals('S-Кармалюк', trim($this->object->getFullNameFormat('Кармалюк')).'-Кармалюк');
    }
    public function testSplDetect985()
    {
        $this->assertEquals('S-Карпенко', trim($this->object->getFullNameFormat('Карпенко')).'-Карпенко');
    }
    public function testSplDetect986()
    {
        $this->assertEquals('S-Кириленко', trim($this->object->getFullNameFormat('Кириленко')).'-Кириленко');
    }
    public function testSplDetect987()
    {
        $this->assertEquals('S-Китаста', trim($this->object->getFullNameFormat('Китаста')).'-Китаста');
    }
    public function testSplDetect988()
    {
        $this->assertEquals('S-Кицай', trim($this->object->getFullNameFormat('Кицай')).'-Кицай');
    }
    public function testSplDetect989()
    {
        $this->assertEquals('S-Клименко', trim($this->object->getFullNameFormat('Клименко')).'-Клименко');
    }
    public function testSplDetect990()
    {
        $this->assertEquals('S-Климчук', trim($this->object->getFullNameFormat('Климчук')).'-Климчук');
    }
    public function testSplDetect991()
    {
        $this->assertEquals('S-Кмета', trim($this->object->getFullNameFormat('Кмета')).'-Кмета');
    }
    public function testSplDetect992()
    {
        $this->assertEquals('S-Книш', trim($this->object->getFullNameFormat('Книш')).'-Книш');
    }
    public function testSplDetect993()
    {
        $this->assertEquals('S-Коваленко', trim($this->object->getFullNameFormat('Коваленко')).'-Коваленко');
    }
    public function testSplDetect994()
    {
        $this->assertEquals('S-Коваль', trim($this->object->getFullNameFormat('Коваль')).'-Коваль');
    }
    public function testSplDetect995()
    {
        $this->assertEquals('S-Ковальчик', trim($this->object->getFullNameFormat('Ковальчик')).'-Ковальчик');
    }
    public function testSplDetect996()
    {
        $this->assertEquals('S-Ковальчук', trim($this->object->getFullNameFormat('Ковальчук')).'-Ковальчук');
    }
    public function testSplDetect997()
    {
        $this->assertEquals('S-Кованько', trim($this->object->getFullNameFormat('Кованько')).'-Кованько');
    }
    public function testSplDetect998()
    {
        $this->assertEquals('S-Ковтун', trim($this->object->getFullNameFormat('Ковтун')).'-Ковтун');
    }
    public function testSplDetect999()
    {
        $this->assertEquals('S-Козаченко', trim($this->object->getFullNameFormat('Козаченко')).'-Козаченко');
    }
    public function testSplDetect1000()
    {
        $this->assertEquals('S-Козачинська', trim($this->object->getFullNameFormat('Козачинська')).'-Козачинська');
    }
    public function testSplDetect1001()
    {
        $this->assertEquals('S-Козачок', trim($this->object->getFullNameFormat('Козачок')).'-Козачок');
    }
    public function testSplDetect1002()
    {
        $this->assertEquals('S-Козубенко', trim($this->object->getFullNameFormat('Козубенко')).'-Козубенко');
    }
    public function testSplDetect1003()
    {
        $this->assertEquals('S-Колесник', trim($this->object->getFullNameFormat('Колесник')).'-Колесник');
    }
    public function testSplDetect1004()
    {
        $this->assertEquals('S-Колодій', trim($this->object->getFullNameFormat('Колодій')).'-Колодій');
    }
    public function testSplDetect1005()
    {
        $this->assertEquals('S-Колодна', trim($this->object->getFullNameFormat('Колодна')).'-Колодна');
    }
    public function testSplDetect1006()
    {
        $this->assertEquals('S-Коломієць', trim($this->object->getFullNameFormat('Коломієць')).'-Коломієць');
    }
    public function testSplDetect1007()
    {
        $this->assertEquals('S-Комар', trim($this->object->getFullNameFormat('Комар')).'-Комар');
    }
    public function testSplDetect1008()
    {
        $this->assertEquals('S-Кондратюк', trim($this->object->getFullNameFormat('Кондратюк')).'-Кондратюк');
    }
    public function testSplDetect1009()
    {
        $this->assertEquals('S-Корецька', trim($this->object->getFullNameFormat('Корецька')).'-Корецька');
    }
    public function testSplDetect1010()
    {
        $this->assertEquals('S-Корж', trim($this->object->getFullNameFormat('Корж')).'-Корж');
    }
    public function testSplDetect1011()
    {
        $this->assertEquals('S-Корнійчук', trim($this->object->getFullNameFormat('Корнійчук')).'-Корнійчук');
    }
    public function testSplDetect1012()
    {
        $this->assertEquals('S-Коробка', trim($this->object->getFullNameFormat('Коробка')).'-Коробка');
    }
    public function testSplDetect1013()
    {
        $this->assertEquals('S-Королюк', trim($this->object->getFullNameFormat('Королюк')).'-Королюк');
    }
    public function testSplDetect1014()
    {
        $this->assertEquals('S-Короткевич', trim($this->object->getFullNameFormat('Короткевич')).'-Короткевич');
    }
    public function testSplDetect1015()
    {
        $this->assertEquals('S-Корпанюк', trim($this->object->getFullNameFormat('Корпанюк')).'-Корпанюк');
    }
    public function testSplDetect1016()
    {
        $this->assertEquals('S-Корчак', trim($this->object->getFullNameFormat('Корчак')).'-Корчак');
    }
    public function testSplDetect1017()
    {
        $this->assertEquals('S-Корчинська', trim($this->object->getFullNameFormat('Корчинська')).'-Корчинська');
    }
    public function testSplDetect1018()
    {
        $this->assertEquals('S-Косенко', trim($this->object->getFullNameFormat('Косенко')).'-Косенко');
    }
    public function testSplDetect1019()
    {
        $this->assertEquals('S-Костенко', trim($this->object->getFullNameFormat('Костенко')).'-Костенко');
    }
    public function testSplDetect1020()
    {
        $this->assertEquals('S-Коструба', trim($this->object->getFullNameFormat('Коструба')).'-Коструба');
    }
    public function testSplDetect1021()
    {
        $this->assertEquals('S-Костюк', trim($this->object->getFullNameFormat('Костюк')).'-Костюк');
    }
    public function testSplDetect1022()
    {
        $this->assertEquals('S-Котляр', trim($this->object->getFullNameFormat('Котляр')).'-Котляр');
    }
    public function testSplDetect1023()
    {
        $this->assertEquals('S-Котляревська', trim($this->object->getFullNameFormat('Котляревська')).'-Котляревська');
    }
    public function testSplDetect1024()
    {
        $this->assertEquals('S-Кравченко', trim($this->object->getFullNameFormat('Кравченко')).'-Кравченко');
    }
    public function testSplDetect1025()
    {
        $this->assertEquals('S-Кравчук', trim($this->object->getFullNameFormat('Кравчук')).'-Кравчук');
    }
    public function testSplDetect1026()
    {
        $this->assertEquals('S-Красовська', trim($this->object->getFullNameFormat('Красовська')).'-Красовська');
    }
    public function testSplDetect1027()
    {
        $this->assertEquals('S-Криворучко', trim($this->object->getFullNameFormat('Криворучко')).'-Криворучко');
    }
    public function testSplDetect1028()
    {
        $this->assertEquals('S-Крикуненко', trim($this->object->getFullNameFormat('Крикуненко')).'-Крикуненко');
    }
    public function testSplDetect1029()
    {
        $this->assertEquals('S-Кузьмінська', trim($this->object->getFullNameFormat('Кузьмінська')).'-Кузьмінська');
    }
    public function testSplDetect1030()
    {
        $this->assertEquals('S-Кулиняк', trim($this->object->getFullNameFormat('Кулиняк')).'-Кулиняк');
    }
    public function testSplDetect1031()
    {
        $this->assertEquals('S-Кульчицька', trim($this->object->getFullNameFormat('Кульчицька')).'-Кульчицька');
    }
    public function testSplDetect1032()
    {
        $this->assertEquals('S-Купчинська', trim($this->object->getFullNameFormat('Купчинська')).'-Купчинська');
    }
    public function testSplDetect1033()
    {
        $this->assertEquals('S-Кухаренко', trim($this->object->getFullNameFormat('Кухаренко')).'-Кухаренко');
    }
    public function testSplDetect1034()
    {
        $this->assertEquals('S-Куц', trim($this->object->getFullNameFormat('Куц')).'-Куц');
    }
    public function testSplDetect1035()
    {
        $this->assertEquals('S-Куценко', trim($this->object->getFullNameFormat('Куценко')).'-Куценко');
    }
    public function testSplDetect1036()
    {
        $this->assertEquals('S-Кучер', trim($this->object->getFullNameFormat('Кучер')).'-Кучер');
    }
    public function testSplDetect1037()
    {
        $this->assertEquals('S-Кучеренко', trim($this->object->getFullNameFormat('Кучеренко')).'-Кучеренко');
    }
    public function testSplDetect1038()
    {
        $this->assertEquals('S-Кушнір', trim($this->object->getFullNameFormat('Кушнір')).'-Кушнір');
    }
    public function testSplDetect1039()
    {
        $this->assertEquals('S-Лаба', trim($this->object->getFullNameFormat('Лаба')).'-Лаба');
    }
    public function testSplDetect1040()
    {
        $this->assertEquals('S-Лаврін', trim($this->object->getFullNameFormat('Лаврін')).'-Лаврін');
    }
    public function testSplDetect1041()
    {
        $this->assertEquals('S-Лаврик', trim($this->object->getFullNameFormat('Лаврик')).'-Лаврик');
    }
    public function testSplDetect1042()
    {
        $this->assertEquals('S-Лавриненко', trim($this->object->getFullNameFormat('Лавриненко')).'-Лавриненко');
    }
    public function testSplDetect1043()
    {
        $this->assertEquals('S-Лазарчук', trim($this->object->getFullNameFormat('Лазарчук')).'-Лазарчук');
    }
    public function testSplDetect1044()
    {
        $this->assertEquals('S-Лазорко', trim($this->object->getFullNameFormat('Лазорко')).'-Лазорко');
    }
    public function testSplDetect1045()
    {
        $this->assertEquals('S-Левицька', trim($this->object->getFullNameFormat('Левицька')).'-Левицька');
    }
    public function testSplDetect1046()
    {
        $this->assertEquals('S-Левченко', trim($this->object->getFullNameFormat('Левченко')).'-Левченко');
    }
    public function testSplDetect1047()
    {
        $this->assertEquals('S-Лисенко', trim($this->object->getFullNameFormat('Лисенко')).'-Лисенко');
    }
    public function testSplDetect1048()
    {
        $this->assertEquals('S-Литвиненко', trim($this->object->getFullNameFormat('Литвиненко')).'-Литвиненко');
    }
    public function testSplDetect1049()
    {
        $this->assertEquals('S-Литовченко', trim($this->object->getFullNameFormat('Литовченко')).'-Литовченко');
    }
    public function testSplDetect1050()
    {
        $this->assertEquals('S-Лозина-Лозинська', trim($this->object->getFullNameFormat('Лозина-Лозинська')).'-Лозина-Лозинська');
    }
    public function testSplDetect1051()
    {
        $this->assertEquals('S-Лопатинська', trim($this->object->getFullNameFormat('Лопатинська')).'-Лопатинська');
    }
    public function testSplDetect1052()
    {
        $this->assertEquals('S-Лукомська', trim($this->object->getFullNameFormat('Лукомська')).'-Лукомська');
    }
    public function testSplDetect1053()
    {
        $this->assertEquals('S-Луценко', trim($this->object->getFullNameFormat('Луценко')).'-Луценко');
    }
    public function testSplDetect1054()
    {
        $this->assertEquals('S-Людкевич', trim($this->object->getFullNameFormat('Людкевич')).'-Людкевич');
    }
    public function testSplDetect1055()
    {
        $this->assertEquals('S-Ляшенко', trim($this->object->getFullNameFormat('Ляшенко')).'-Ляшенко');
    }
    public function testSplDetect1056()
    {
        $this->assertEquals('S-Мірошниченко', trim($this->object->getFullNameFormat('Мірошниченко')).'-Мірошниченко');
    }
    public function testSplDetect1057()
    {
        $this->assertEquals('S-Мірчук', trim($this->object->getFullNameFormat('Мірчук')).'-Мірчук');
    }
    public function testSplDetect1058()
    {
        $this->assertEquals('S-Міщенко', trim($this->object->getFullNameFormat('Міщенко')).'-Міщенко');
    }
    public function testSplDetect1059()
    {
        $this->assertEquals('S-Мазур', trim($this->object->getFullNameFormat('Мазур')).'-Мазур');
    }
    public function testSplDetect1060()
    {
        $this->assertEquals('S-Макаренко', trim($this->object->getFullNameFormat('Макаренко')).'-Макаренко');
    }
    public function testSplDetect1061()
    {
        $this->assertEquals('S-Максименко', trim($this->object->getFullNameFormat('Максименко')).'-Максименко');
    }
    public function testSplDetect1062()
    {
        $this->assertEquals('S-Маланчук', trim($this->object->getFullNameFormat('Маланчук')).'-Маланчук');
    }
    public function testSplDetect1063()
    {
        $this->assertEquals('S-Малишко', trim($this->object->getFullNameFormat('Малишко')).'-Малишко');
    }
    public function testSplDetect1064()
    {
        $this->assertEquals('S-Малкович', trim($this->object->getFullNameFormat('Малкович')).'-Малкович');
    }
    public function testSplDetect1065()
    {
        $this->assertEquals('S-Мамчур', trim($this->object->getFullNameFormat('Мамчур')).'-Мамчур');
    }
    public function testSplDetect1066()
    {
        $this->assertEquals('S-Маркевич', trim($this->object->getFullNameFormat('Маркевич')).'-Маркевич');
    }
    public function testSplDetect1067()
    {
        $this->assertEquals('S-Мартиненко', trim($this->object->getFullNameFormat('Мартиненко')).'-Мартиненко');
    }
    public function testSplDetect1068()
    {
        $this->assertEquals('S-Марунчак', trim($this->object->getFullNameFormat('Марунчак')).'-Марунчак');
    }
    public function testSplDetect1069()
    {
        $this->assertEquals('S-Марценюк', trim($this->object->getFullNameFormat('Марценюк')).'-Марценюк');
    }
    public function testSplDetect1070()
    {
        $this->assertEquals('S-Марченко', trim($this->object->getFullNameFormat('Марченко')).'-Марченко');
    }
    public function testSplDetect1071()
    {
        $this->assertEquals('S-Марчук', trim($this->object->getFullNameFormat('Марчук')).'-Марчук');
    }
    public function testSplDetect1072()
    {
        $this->assertEquals('S-Масоха', trim($this->object->getFullNameFormat('Масоха')).'-Масоха');
    }
    public function testSplDetect1073()
    {
        $this->assertEquals('S-Матвієнко', trim($this->object->getFullNameFormat('Матвієнко')).'-Матвієнко');
    }
    public function testSplDetect1074()
    {
        $this->assertEquals('S-Матюшенко', trim($this->object->getFullNameFormat('Матюшенко')).'-Матюшенко');
    }
    public function testSplDetect1075()
    {
        $this->assertEquals('S-Маценко', trim($this->object->getFullNameFormat('Маценко')).'-Маценко');
    }
    public function testSplDetect1076()
    {
        $this->assertEquals('S-Мацюк', trim($this->object->getFullNameFormat('Мацюк')).'-Мацюк');
    }
    public function testSplDetect1077()
    {
        $this->assertEquals('S-Мельник', trim($this->object->getFullNameFormat('Мельник')).'-Мельник');
    }
    public function testSplDetect1078()
    {
        $this->assertEquals('S-Мельниченко', trim($this->object->getFullNameFormat('Мельниченко')).'-Мельниченко');
    }
    public function testSplDetect1079()
    {
        $this->assertEquals('S-Мельничук', trim($this->object->getFullNameFormat('Мельничук')).'-Мельничук');
    }
    public function testSplDetect1080()
    {
        $this->assertEquals('S-Микитенко', trim($this->object->getFullNameFormat('Микитенко')).'-Микитенко');
    }
    public function testSplDetect1081()
    {
        $this->assertEquals('S-Мирон', trim($this->object->getFullNameFormat('Мирон')).'-Мирон');
    }
    public function testSplDetect1082()
    {
        $this->assertEquals('S-Михайленко', trim($this->object->getFullNameFormat('Михайленко')).'-Михайленко');
    }
    public function testSplDetect1083()
    {
        $this->assertEquals('S-Михайличенко', trim($this->object->getFullNameFormat('Михайличенко')).'-Михайличенко');
    }
    public function testSplDetect1084()
    {
        $this->assertEquals('S-Михайлюк', trim($this->object->getFullNameFormat('Михайлюк')).'-Михайлюк');
    }
    public function testSplDetect1085()
    {
        $this->assertEquals('S-Мицик', trim($this->object->getFullNameFormat('Мицик')).'-Мицик');
    }
    public function testSplDetect1086()
    {
        $this->assertEquals('S-Мовчан', trim($this->object->getFullNameFormat('Мовчан')).'-Мовчан');
    }
    public function testSplDetect1087()
    {
        $this->assertEquals('S-Моргун', trim($this->object->getFullNameFormat('Моргун')).'-Моргун');
    }
    public function testSplDetect1088()
    {
        $this->assertEquals('S-Мороз', trim($this->object->getFullNameFormat('Мороз')).'-Мороз');
    }
    public function testSplDetect1089()
    {
        $this->assertEquals('S-Москаленко', trim($this->object->getFullNameFormat('Москаленко')).'-Москаленко');
    }
    public function testSplDetect1090()
    {
        $this->assertEquals('S-Москаль', trim($this->object->getFullNameFormat('Москаль')).'-Москаль');
    }
    public function testSplDetect1091()
    {
        $this->assertEquals('S-Мошак', trim($this->object->getFullNameFormat('Мошак')).'-Мошак');
    }
    public function testSplDetect1092()
    {
        $this->assertEquals('S-Муратова', trim($this->object->getFullNameFormat('Муратова')).'-Муратова');
    }
    public function testSplDetect1093()
    {
        $this->assertEquals('S-Мусієнко', trim($this->object->getFullNameFormat('Мусієнко')).'-Мусієнко');
    }
    public function testSplDetect1094()
    {
        $this->assertEquals('S-Назаренко', trim($this->object->getFullNameFormat('Назаренко')).'-Назаренко');
    }
    public function testSplDetect1095()
    {
        $this->assertEquals('S-Наливайко', trim($this->object->getFullNameFormat('Наливайко')).'-Наливайко');
    }
    public function testSplDetect1096()
    {
        $this->assertEquals('S-Негребецька', trim($this->object->getFullNameFormat('Негребецька')).'-Негребецька');
    }
    public function testSplDetect1097()
    {
        $this->assertEquals('S-Непорожній', trim($this->object->getFullNameFormat('Непорожній')).'-Непорожній');
    }
    public function testSplDetect1098()
    {
        $this->assertEquals('S-Нестеренко', trim($this->object->getFullNameFormat('Нестеренко')).'-Нестеренко');
    }
    public function testSplDetect1099()
    {
        $this->assertEquals('S-Нечай', trim($this->object->getFullNameFormat('Нечай')).'-Нечай');
    }
    public function testSplDetect1100()
    {
        $this->assertEquals('S-Нечипоренко', trim($this->object->getFullNameFormat('Нечипоренко')).'-Нечипоренко');
    }
    public function testSplDetect1101()
    {
        $this->assertEquals('S-Оберемченко', trim($this->object->getFullNameFormat('Оберемченко')).'-Оберемченко');
    }
    public function testSplDetect1102()
    {
        $this->assertEquals('S-Овчаренко', trim($this->object->getFullNameFormat('Овчаренко')).'-Овчаренко');
    }
    public function testSplDetect1103()
    {
        $this->assertEquals('S-Олійник', trim($this->object->getFullNameFormat('Олійник')).'-Олійник');
    }
    public function testSplDetect1104()
    {
        $this->assertEquals('S-Олексієнко', trim($this->object->getFullNameFormat('Олексієнко')).'-Олексієнко');
    }
    public function testSplDetect1105()
    {
        $this->assertEquals('S-Омельченко', trim($this->object->getFullNameFormat('Омельченко')).'-Омельченко');
    }
    public function testSplDetect1106()
    {
        $this->assertEquals('S-Омельчук', trim($this->object->getFullNameFormat('Омельчук')).'-Омельчук');
    }
    public function testSplDetect1107()
    {
        $this->assertEquals('S-Онищенко', trim($this->object->getFullNameFormat('Онищенко')).'-Онищенко');
    }
    public function testSplDetect1108()
    {
        $this->assertEquals('S-Онопенко', trim($this->object->getFullNameFormat('Онопенко')).'-Онопенко');
    }
    public function testSplDetect1109()
    {
        $this->assertEquals('S-Опанасенко', trim($this->object->getFullNameFormat('Опанасенко')).'-Опанасенко');
    }
    public function testSplDetect1110()
    {
        $this->assertEquals('S-Осадчук', trim($this->object->getFullNameFormat('Осадчук')).'-Осадчук');
    }
    public function testSplDetect1111()
    {
        $this->assertEquals('S-Осика', trim($this->object->getFullNameFormat('Осика')).'-Осика');
    }
    public function testSplDetect1112()
    {
        $this->assertEquals('S-Остапенко', trim($this->object->getFullNameFormat('Остапенко')).'-Остапенко');
    }
    public function testSplDetect1113()
    {
        $this->assertEquals('S-Остроградська', trim($this->object->getFullNameFormat('Остроградська')).'-Остроградська');
    }
    public function testSplDetect1114()
    {
        $this->assertEquals('S-Півторак', trim($this->object->getFullNameFormat('Півторак')).'-Півторак');
    }
    public function testSplDetect1115()
    {
        $this->assertEquals('S-Підопригора', trim($this->object->getFullNameFormat('Підопригора')).'-Підопригора');
    }
    public function testSplDetect1116()
    {
        $this->assertEquals('S-Павленко', trim($this->object->getFullNameFormat('Павленко')).'-Павленко');
    }
    public function testSplDetect1117()
    {
        $this->assertEquals('S-Павлюк', trim($this->object->getFullNameFormat('Павлюк')).'-Павлюк');
    }
    public function testSplDetect1118()
    {
        $this->assertEquals('S-Павлюченко', trim($this->object->getFullNameFormat('Павлюченко')).'-Павлюченко');
    }
    public function testSplDetect1119()
    {
        $this->assertEquals('S-Пазенко', trim($this->object->getFullNameFormat('Пазенко')).'-Пазенко');
    }
    public function testSplDetect1120()
    {
        $this->assertEquals('S-Паламарчук', trim($this->object->getFullNameFormat('Паламарчук')).'-Паламарчук');
    }
    public function testSplDetect1121()
    {
        $this->assertEquals('S-Панас', trim($this->object->getFullNameFormat('Панас')).'-Панас');
    }
    public function testSplDetect1122()
    {
        $this->assertEquals('S-Панасюк', trim($this->object->getFullNameFormat('Панасюк')).'-Панасюк');
    }
    public function testSplDetect1123()
    {
        $this->assertEquals('S-Паньківська', trim($this->object->getFullNameFormat('Паньківська')).'-Паньківська');
    }
    public function testSplDetect1124()
    {
        $this->assertEquals('S-Пархоменко', trim($this->object->getFullNameFormat('Пархоменко')).'-Пархоменко');
    }
    public function testSplDetect1125()
    {
        $this->assertEquals('S-Пасічник', trim($this->object->getFullNameFormat('Пасічник')).'-Пасічник');
    }
    public function testSplDetect1126()
    {
        $this->assertEquals('S-Пасько', trim($this->object->getFullNameFormat('Пасько')).'-Пасько');
    }
    public function testSplDetect1127()
    {
        $this->assertEquals('S-Пашко', trim($this->object->getFullNameFormat('Пашко')).'-Пашко');
    }
    public function testSplDetect1128()
    {
        $this->assertEquals('S-Пащенко', trim($this->object->getFullNameFormat('Пащенко')).'-Пащенко');
    }
    public function testSplDetect1129()
    {
        $this->assertEquals('S-Перебийніс', trim($this->object->getFullNameFormat('Перебийніс')).'-Перебийніс');
    }
    public function testSplDetect1130()
    {
        $this->assertEquals('S-Петренко', trim($this->object->getFullNameFormat('Петренко')).'-Петренко');
    }
    public function testSplDetect1131()
    {
        $this->assertEquals('S-Пилипенко', trim($this->object->getFullNameFormat('Пилипенко')).'-Пилипенко');
    }
    public function testSplDetect1132()
    {
        $this->assertEquals('S-Пилипчук', trim($this->object->getFullNameFormat('Пилипчук')).'-Пилипчук');
    }
    public function testSplDetect1133()
    {
        $this->assertEquals('S-Писаренко', trim($this->object->getFullNameFormat('Писаренко')).'-Писаренко');
    }
    public function testSplDetect1134()
    {
        $this->assertEquals('S-Писарчук', trim($this->object->getFullNameFormat('Писарчук')).'-Писарчук');
    }
    public function testSplDetect1135()
    {
        $this->assertEquals('S-Плющ', trim($this->object->getFullNameFormat('Плющ')).'-Плющ');
    }
    public function testSplDetect1136()
    {
        $this->assertEquals('S-Покотило', trim($this->object->getFullNameFormat('Покотило')).'-Покотило');
    }
    public function testSplDetect1137()
    {
        $this->assertEquals('S-Поліщук', trim($this->object->getFullNameFormat('Поліщук')).'-Поліщук');
    }
    public function testSplDetect1138()
    {
        $this->assertEquals('S-Польова', trim($this->object->getFullNameFormat('Польова')).'-Польова');
    }
    public function testSplDetect1139()
    {
        $this->assertEquals('S-Полянська', trim($this->object->getFullNameFormat('Полянська')).'-Полянська');
    }
    public function testSplDetect1140()
    {
        $this->assertEquals('S-Пономаренко', trim($this->object->getFullNameFormat('Пономаренко')).'-Пономаренко');
    }
    public function testSplDetect1141()
    {
        $this->assertEquals('S-Попадюк', trim($this->object->getFullNameFormat('Попадюк')).'-Попадюк');
    }
    public function testSplDetect1142()
    {
        $this->assertEquals('S-Попенко', trim($this->object->getFullNameFormat('Попенко')).'-Попенко');
    }
    public function testSplDetect1143()
    {
        $this->assertEquals('S-Потапенко', trim($this->object->getFullNameFormat('Потапенко')).'-Потапенко');
    }
    public function testSplDetect1144()
    {
        $this->assertEquals('S-Потебенько', trim($this->object->getFullNameFormat('Потебенько')).'-Потебенько');
    }
    public function testSplDetect1145()
    {
        $this->assertEquals('S-Прийма', trim($this->object->getFullNameFormat('Прийма')).'-Прийма');
    }
    public function testSplDetect1146()
    {
        $this->assertEquals('S-Приймак', trim($this->object->getFullNameFormat('Приймак')).'-Приймак');
    }
    public function testSplDetect1147()
    {
        $this->assertEquals('S-Присяжнюк', trim($this->object->getFullNameFormat('Присяжнюк')).'-Присяжнюк');
    }
    public function testSplDetect1148()
    {
        $this->assertEquals('S-Приходько', trim($this->object->getFullNameFormat('Приходько')).'-Приходько');
    }
    public function testSplDetect1149()
    {
        $this->assertEquals('S-Продан', trim($this->object->getFullNameFormat('Продан')).'-Продан');
    }
    public function testSplDetect1150()
    {
        $this->assertEquals('S-Проценко', trim($this->object->getFullNameFormat('Проценко')).'-Проценко');
    }
    public function testSplDetect1151()
    {
        $this->assertEquals('S-Проць', trim($this->object->getFullNameFormat('Проць')).'-Проць');
    }
    public function testSplDetect1152()
    {
        $this->assertEquals('S-Процюк', trim($this->object->getFullNameFormat('Процюк')).'-Процюк');
    }
    public function testSplDetect1153()
    {
        $this->assertEquals('S-Пушкар', trim($this->object->getFullNameFormat('Пушкар')).'-Пушкар');
    }
    public function testSplDetect1154()
    {
        $this->assertEquals('S-Різун', trim($this->object->getFullNameFormat('Різун')).'-Різун');
    }
    public function testSplDetect1155()
    {
        $this->assertEquals('S-Радченко', trim($this->object->getFullNameFormat('Радченко')).'-Радченко');
    }
    public function testSplDetect1156()
    {
        $this->assertEquals('S-Рибальченко', trim($this->object->getFullNameFormat('Рибальченко')).'-Рибальченко');
    }
    public function testSplDetect1157()
    {
        $this->assertEquals('S-Римар', trim($this->object->getFullNameFormat('Римар')).'-Римар');
    }
    public function testSplDetect1158()
    {
        $this->assertEquals('S-Рожок', trim($this->object->getFullNameFormat('Рожок')).'-Рожок');
    }
    public function testSplDetect1159()
    {
        $this->assertEquals('S-Романенко', trim($this->object->getFullNameFormat('Романенко')).'-Романенко');
    }
    public function testSplDetect1160()
    {
        $this->assertEquals('S-Романчук', trim($this->object->getFullNameFormat('Романчук')).'-Романчук');
    }
    public function testSplDetect1161()
    {
        $this->assertEquals('S-Романюк', trim($this->object->getFullNameFormat('Романюк')).'-Романюк');
    }
    public function testSplDetect1162()
    {
        $this->assertEquals('S-Рошкевич', trim($this->object->getFullNameFormat('Рошкевич')).'-Рошкевич');
    }
    public function testSplDetect1163()
    {
        $this->assertEquals('S-Рубан', trim($this->object->getFullNameFormat('Рубан')).'-Рубан');
    }
    public function testSplDetect1164()
    {
        $this->assertEquals('S-Руденко', trim($this->object->getFullNameFormat('Руденко')).'-Руденко');
    }
    public function testSplDetect1165()
    {
        $this->assertEquals('S-Рябовіл', trim($this->object->getFullNameFormat('Рябовіл')).'-Рябовіл');
    }
    public function testSplDetect1166()
    {
        $this->assertEquals('S-Сімашкевич', trim($this->object->getFullNameFormat('Сімашкевич')).'-Сімашкевич');
    }
    public function testSplDetect1167()
    {
        $this->assertEquals('S-Саєнко', trim($this->object->getFullNameFormat('Саєнко')).'-Саєнко');
    }
    public function testSplDetect1168()
    {
        $this->assertEquals('S-Савенко', trim($this->object->getFullNameFormat('Савенко')).'-Савенко');
    }
    public function testSplDetect1169()
    {
        $this->assertEquals('S-Савицька', trim($this->object->getFullNameFormat('Савицька')).'-Савицька');
    }
    public function testSplDetect1170()
    {
        $this->assertEquals('S-Савка', trim($this->object->getFullNameFormat('Савка')).'-Савка');
    }
    public function testSplDetect1171()
    {
        $this->assertEquals('S-Савченко', trim($this->object->getFullNameFormat('Савченко')).'-Савченко');
    }
    public function testSplDetect1172()
    {
        $this->assertEquals('S-Савчук', trim($this->object->getFullNameFormat('Савчук')).'-Савчук');
    }
    public function testSplDetect1173()
    {
        $this->assertEquals('S-Сак', trim($this->object->getFullNameFormat('Сак')).'-Сак');
    }
    public function testSplDetect1174()
    {
        $this->assertEquals('S-Самборська', trim($this->object->getFullNameFormat('Самборська')).'-Самборська');
    }
    public function testSplDetect1175()
    {
        $this->assertEquals('S-Самойлович', trim($this->object->getFullNameFormat('Самойлович')).'-Самойлович');
    }
    public function testSplDetect1176()
    {
        $this->assertEquals('S-Самусь', trim($this->object->getFullNameFormat('Самусь')).'-Самусь');
    }
    public function testSplDetect1177()
    {
        $this->assertEquals('S-Свида', trim($this->object->getFullNameFormat('Свида')).'-Свида');
    }
    public function testSplDetect1178()
    {
        $this->assertEquals('S-Семашко', trim($this->object->getFullNameFormat('Семашко')).'-Семашко');
    }
    public function testSplDetect1179()
    {
        $this->assertEquals('S-Семененко', trim($this->object->getFullNameFormat('Семененко')).'-Семененко');
    }
    public function testSplDetect1180()
    {
        $this->assertEquals('S-Семенець', trim($this->object->getFullNameFormat('Семенець')).'-Семенець');
    }
    public function testSplDetect1181()
    {
        $this->assertEquals('S-Семенина', trim($this->object->getFullNameFormat('Семенина')).'-Семенина');
    }
    public function testSplDetect1182()
    {
        $this->assertEquals('S-Семенченко', trim($this->object->getFullNameFormat('Семенченко')).'-Семенченко');
    }
    public function testSplDetect1183()
    {
        $this->assertEquals('S-Семенюк', trim($this->object->getFullNameFormat('Семенюк')).'-Семенюк');
    }
    public function testSplDetect1184()
    {
        $this->assertEquals('S-Семеренко', trim($this->object->getFullNameFormat('Семеренко')).'-Семеренко');
    }
    public function testSplDetect1185()
    {
        $this->assertEquals('S-Сидоренко', trim($this->object->getFullNameFormat('Сидоренко')).'-Сидоренко');
    }
    public function testSplDetect1186()
    {
        $this->assertEquals('S-Силенко', trim($this->object->getFullNameFormat('Силенко')).'-Силенко');
    }
    public function testSplDetect1187()
    {
        $this->assertEquals('S-Симоненко', trim($this->object->getFullNameFormat('Симоненко')).'-Симоненко');
    }
    public function testSplDetect1188()
    {
        $this->assertEquals('S-Симчич', trim($this->object->getFullNameFormat('Симчич')).'-Симчич');
    }
    public function testSplDetect1189()
    {
        $this->assertEquals('S-Скрипник', trim($this->object->getFullNameFormat('Скрипник')).'-Скрипник');
    }
    public function testSplDetect1190()
    {
        $this->assertEquals('S-Скуратівська', trim($this->object->getFullNameFormat('Скуратівська')).'-Скуратівська');
    }
    public function testSplDetect1191()
    {
        $this->assertEquals('S-Слободян', trim($this->object->getFullNameFormat('Слободян')).'-Слободян');
    }
    public function testSplDetect1192()
    {
        $this->assertEquals('S-Слободянюк', trim($this->object->getFullNameFormat('Слободянюк')).'-Слободянюк');
    }
    public function testSplDetect1193()
    {
        $this->assertEquals('S-Смик', trim($this->object->getFullNameFormat('Смик')).'-Смик');
    }
    public function testSplDetect1194()
    {
        $this->assertEquals('S-Смогоржевська', trim($this->object->getFullNameFormat('Смогоржевська')).'-Смогоржевська');
    }
    public function testSplDetect1195()
    {
        $this->assertEquals('S-Собчук', trim($this->object->getFullNameFormat('Собчук')).'-Собчук');
    }
    public function testSplDetect1196()
    {
        $this->assertEquals('S-Сопронюк', trim($this->object->getFullNameFormat('Сопронюк')).'-Сопронюк');
    }
    public function testSplDetect1197()
    {
        $this->assertEquals('S-Сорока', trim($this->object->getFullNameFormat('Сорока')).'-Сорока');
    }
    public function testSplDetect1198()
    {
        $this->assertEquals('S-Сохань', trim($this->object->getFullNameFormat('Сохань')).'-Сохань');
    }
    public function testSplDetect1199()
    {
        $this->assertEquals('S-Стадник', trim($this->object->getFullNameFormat('Стадник')).'-Стадник');
    }
    public function testSplDetect1200()
    {
        $this->assertEquals('S-Стельмах', trim($this->object->getFullNameFormat('Стельмах')).'-Стельмах');
    }
    public function testSplDetect1201()
    {
        $this->assertEquals('S-Степаненко', trim($this->object->getFullNameFormat('Степаненко')).'-Степаненко');
    }
    public function testSplDetect1202()
    {
        $this->assertEquals('S-Степура', trim($this->object->getFullNameFormat('Степура')).'-Степура');
    }
    public function testSplDetect1203()
    {
        $this->assertEquals('S-Стеценко', trim($this->object->getFullNameFormat('Стеценко')).'-Стеценко');
    }
    public function testSplDetect1204()
    {
        $this->assertEquals('S-Стецюк', trim($this->object->getFullNameFormat('Стецюк')).'-Стецюк');
    }
    public function testSplDetect1205()
    {
        $this->assertEquals('S-Струтинська', trim($this->object->getFullNameFormat('Струтинська')).'-Струтинська');
    }
    public function testSplDetect1206()
    {
        $this->assertEquals('S-Сулима', trim($this->object->getFullNameFormat('Сулима')).'-Сулима');
    }
    public function testSplDetect1207()
    {
        $this->assertEquals('S-Супруненко', trim($this->object->getFullNameFormat('Супруненко')).'-Супруненко');
    }
    public function testSplDetect1208()
    {
        $this->assertEquals('S-Тараненко', trim($this->object->getFullNameFormat('Тараненко')).'-Тараненко');
    }
    public function testSplDetect1209()
    {
        $this->assertEquals('S-Татаренко', trim($this->object->getFullNameFormat('Татаренко')).'-Татаренко');
    }
    public function testSplDetect1210()
    {
        $this->assertEquals('S-Теплицька', trim($this->object->getFullNameFormat('Теплицька')).'-Теплицька');
    }
    public function testSplDetect1211()
    {
        $this->assertEquals('S-Терещенко', trim($this->object->getFullNameFormat('Терещенко')).'-Терещенко');
    }
    public function testSplDetect1212()
    {
        $this->assertEquals('S-Терещук', trim($this->object->getFullNameFormat('Терещук')).'-Терещук');
    }
    public function testSplDetect1213()
    {
        $this->assertEquals('S-Тесленко', trim($this->object->getFullNameFormat('Тесленко')).'-Тесленко');
    }
    public function testSplDetect1214()
    {
        $this->assertEquals('S-Тимошенко', trim($this->object->getFullNameFormat('Тимошенко')).'-Тимошенко');
    }
    public function testSplDetect1215()
    {
        $this->assertEquals('S-Тимощук', trim($this->object->getFullNameFormat('Тимощук')).'-Тимощук');
    }
    public function testSplDetect1216()
    {
        $this->assertEquals('S-Тимчак', trim($this->object->getFullNameFormat('Тимчак')).'-Тимчак');
    }
    public function testSplDetect1217()
    {
        $this->assertEquals('S-Титаренко', trim($this->object->getFullNameFormat('Титаренко')).'-Титаренко');
    }
    public function testSplDetect1218()
    {
        $this->assertEquals('S-Тищенко', trim($this->object->getFullNameFormat('Тищенко')).'-Тищенко');
    }
    public function testSplDetect1219()
    {
        $this->assertEquals('S-Ткач', trim($this->object->getFullNameFormat('Ткач')).'-Ткач');
    }
    public function testSplDetect1220()
    {
        $this->assertEquals('S-Ткаченко', trim($this->object->getFullNameFormat('Ткаченко')).'-Ткаченко');
    }
    public function testSplDetect1221()
    {
        $this->assertEquals('S-Ткачук', trim($this->object->getFullNameFormat('Ткачук')).'-Ткачук');
    }
    public function testSplDetect1222()
    {
        $this->assertEquals('S-Толочко', trim($this->object->getFullNameFormat('Толочко')).'-Толочко');
    }
    public function testSplDetect1223()
    {
        $this->assertEquals('S-Томенко', trim($this->object->getFullNameFormat('Томенко')).'-Томенко');
    }
    public function testSplDetect1224()
    {
        $this->assertEquals('S-Тулуб', trim($this->object->getFullNameFormat('Тулуб')).'-Тулуб');
    }
    public function testSplDetect1225()
    {
        $this->assertEquals('S-Удовенко', trim($this->object->getFullNameFormat('Удовенко')).'-Удовенко');
    }
    public function testSplDetect1226()
    {
        $this->assertEquals('S-Удовиченко', trim($this->object->getFullNameFormat('Удовиченко')).'-Удовиченко');
    }
    public function testSplDetect1227()
    {
        $this->assertEquals('S-Усенко', trim($this->object->getFullNameFormat('Усенко')).'-Усенко');
    }
    public function testSplDetect1228()
    {
        $this->assertEquals('S-Філоненко', trim($this->object->getFullNameFormat('Філоненко')).'-Філоненко');
    }
    public function testSplDetect1229()
    {
        $this->assertEquals('S-Феденко', trim($this->object->getFullNameFormat('Феденко')).'-Феденко');
    }
    public function testSplDetect1230()
    {
        $this->assertEquals('S-Федоренко', trim($this->object->getFullNameFormat('Федоренко')).'-Федоренко');
    }
    public function testSplDetect1231()
    {
        $this->assertEquals('S-Федорук', trim($this->object->getFullNameFormat('Федорук')).'-Федорук');
    }
    public function testSplDetect1232()
    {
        $this->assertEquals('S-Фещенко', trim($this->object->getFullNameFormat('Фещенко')).'-Фещенко');
    }
    public function testSplDetect1233()
    {
        $this->assertEquals('S-Фоменко', trim($this->object->getFullNameFormat('Фоменко')).'-Фоменко');
    }
    public function testSplDetect1234()
    {
        $this->assertEquals('S-Ханенко', trim($this->object->getFullNameFormat('Ханенко')).'-Ханенко');
    }
    public function testSplDetect1235()
    {
        $this->assertEquals('S-Харчук', trim($this->object->getFullNameFormat('Харчук')).'-Харчук');
    }
    public function testSplDetect1236()
    {
        $this->assertEquals('S-Хміляр', trim($this->object->getFullNameFormat('Хміляр')).'-Хміляр');
    }
    public function testSplDetect1237()
    {
        $this->assertEquals('S-Хмара', trim($this->object->getFullNameFormat('Хмара')).'-Хмара');
    }
    public function testSplDetect1238()
    {
        $this->assertEquals('S-Холодовська', trim($this->object->getFullNameFormat('Холодовська')).'-Холодовська');
    }
    public function testSplDetect1239()
    {
        $this->assertEquals('S-Хоменко', trim($this->object->getFullNameFormat('Хоменко')).'-Хоменко');
    }
    public function testSplDetect1240()
    {
        $this->assertEquals('S-Царук', trim($this->object->getFullNameFormat('Царук')).'-Царук');
    }
    public function testSplDetect1241()
    {
        $this->assertEquals('S-Цибуленко', trim($this->object->getFullNameFormat('Цибуленко')).'-Цибуленко');
    }
    public function testSplDetect1242()
    {
        $this->assertEquals('S-Цюпа', trim($this->object->getFullNameFormat('Цюпа')).'-Цюпа');
    }
    public function testSplDetect1243()
    {
        $this->assertEquals('S-Чабаненко', trim($this->object->getFullNameFormat('Чабаненко')).'-Чабаненко');
    }
    public function testSplDetect1244()
    {
        $this->assertEquals('S-Чередниченко', trim($this->object->getFullNameFormat('Чередниченко')).'-Чередниченко');
    }
    public function testSplDetect1245()
    {
        $this->assertEquals('S-Чернявська', trim($this->object->getFullNameFormat('Чернявська')).'-Чернявська');
    }
    public function testSplDetect1246()
    {
        $this->assertEquals('S-Чорна', trim($this->object->getFullNameFormat('Чорна')).'-Чорна');
    }
    public function testSplDetect1247()
    {
        $this->assertEquals('S-Чорновіл', trim($this->object->getFullNameFormat('Чорновіл')).'-Чорновіл');
    }
    public function testSplDetect1248()
    {
        $this->assertEquals('S-Чуйкевич', trim($this->object->getFullNameFormat('Чуйкевич')).'-Чуйкевич');
    }
    public function testSplDetect1249()
    {
        $this->assertEquals('S-Чумак', trim($this->object->getFullNameFormat('Чумак')).'-Чумак');
    }
    public function testSplDetect1250()
    {
        $this->assertEquals('S-Чумаченко', trim($this->object->getFullNameFormat('Чумаченко')).'-Чумаченко');
    }
    public function testSplDetect1251()
    {
        $this->assertEquals('S-Шахрай', trim($this->object->getFullNameFormat('Шахрай')).'-Шахрай');
    }
    public function testSplDetect1252()
    {
        $this->assertEquals('S-Шевченко', trim($this->object->getFullNameFormat('Шевченко')).'-Шевченко');
    }
    public function testSplDetect1253()
    {
        $this->assertEquals('S-Шевчук', trim($this->object->getFullNameFormat('Шевчук')).'-Шевчук');
    }
    public function testSplDetect1254()
    {
        $this->assertEquals('S-Шелест', trim($this->object->getFullNameFormat('Шелест')).'-Шелест');
    }
    public function testSplDetect1255()
    {
        $this->assertEquals('S-Шинкарук', trim($this->object->getFullNameFormat('Шинкарук')).'-Шинкарук');
    }
    public function testSplDetect1256()
    {
        $this->assertEquals('S-Шкрібляк', trim($this->object->getFullNameFormat('Шкрібляк')).'-Шкрібляк');
    }
    public function testSplDetect1257()
    {
        $this->assertEquals('S-Шнайдер', trim($this->object->getFullNameFormat('Шнайдер')).'-Шнайдер');
    }
    public function testSplDetect1258()
    {
        $this->assertEquals('S-Шовкопляс', trim($this->object->getFullNameFormat('Шовкопляс')).'-Шовкопляс');
    }
    public function testSplDetect1259()
    {
        $this->assertEquals('S-Шульга', trim($this->object->getFullNameFormat('Шульга')).'-Шульга');
    }
    public function testSplDetect1260()
    {
        $this->assertEquals('S-Шухевич', trim($this->object->getFullNameFormat('Шухевич')).'-Шухевич');
    }
    public function testSplDetect1261()
    {
        $this->assertEquals('S-Щерба', trim($this->object->getFullNameFormat('Щерба')).'-Щерба');
    }
    public function testSplDetect1262()
    {
        $this->assertEquals('S-Щербак', trim($this->object->getFullNameFormat('Щербак')).'-Щербак');
    }
    public function testSplDetect1263()
    {
        $this->assertEquals('S-Щербань', trim($this->object->getFullNameFormat('Щербань')).'-Щербань');
    }
    public function testSplDetect1264()
    {
        $this->assertEquals('S-Юрженко', trim($this->object->getFullNameFormat('Юрженко')).'-Юрженко');
    }
    public function testSplDetect1265()
    {
        $this->assertEquals('S-Юрченко', trim($this->object->getFullNameFormat('Юрченко')).'-Юрченко');
    }
    public function testSplDetect1266()
    {
        $this->assertEquals('S-Юхименко', trim($this->object->getFullNameFormat('Юхименко')).'-Юхименко');
    }
    public function testSplDetect1267()
    {
        $this->assertEquals('S-Ющенко', trim($this->object->getFullNameFormat('Ющенко')).'-Ющенко');
    }
    public function testSplDetect1268()
    {
        $this->assertEquals('S-Яковенко', trim($this->object->getFullNameFormat('Яковенко')).'-Яковенко');
    }
    public function testSplDetect1269()
    {
        $this->assertEquals('S-Яковина', trim($this->object->getFullNameFormat('Яковина')).'-Яковина');
    }
    public function testSplDetect1270()
    {
        $this->assertEquals('S-Янко', trim($this->object->getFullNameFormat('Янко')).'-Янко');
    }
    public function testSplDetect1271()
    {
        $this->assertEquals('S-Ярема', trim($this->object->getFullNameFormat('Ярема')).'-Ярема');
    }
    public function testSplDetect1272()
    {
        $this->assertEquals('S-Яременко', trim($this->object->getFullNameFormat('Яременко')).'-Яременко');
    }
    public function testSplDetect1273()
    {
        $this->assertEquals('S-Яремко', trim($this->object->getFullNameFormat('Яремко')).'-Яремко');
    }
    public function testSplDetect1274()
    {
        $this->assertEquals('S-Яремчук', trim($this->object->getFullNameFormat('Яремчук')).'-Яремчук');
    }
    public function testSplDetect1275()
    {
        $this->assertEquals('S-Ярмоленко', trim($this->object->getFullNameFormat('Ярмоленко')).'-Ярмоленко');
    }
    public function testSplDetect1276()
    {
        $this->assertEquals('S-Ярмолюк', trim($this->object->getFullNameFormat('Ярмолюк')).'-Ярмолюк');
    }
    public function testSplDetect1277()
    {
        $this->assertEquals('S-Ярошенко', trim($this->object->getFullNameFormat('Ярошенко')).'-Ярошенко');
    }
    public function testSplDetect1278()
    {
        $this->assertEquals('S-Яценко', trim($this->object->getFullNameFormat('Яценко')).'-Яценко');
    }
    public function testSplDetect1279()
    {
        $this->assertEquals('S-Ященко', trim($this->object->getFullNameFormat('Ященко')).'-Ященко');
    }
    public function testSplDetect1280()
    {
        $this->assertEquals('S-Ґалаґан', trim($this->object->getFullNameFormat('Ґалаґан')).'-Ґалаґан');
    }
    public function testSplDetect1281()
    {
        $this->assertEquals('S-Євсєєва', trim($this->object->getFullNameFormat('Євсєєва')).'-Євсєєва');
    }
    public function testSplDetect1282()
    {
        $this->assertEquals('S-Єгорова', trim($this->object->getFullNameFormat('Єгорова')).'-Єгорова');
    }
    public function testSplDetect1283()
    {
        $this->assertEquals('S-Єлізарова', trim($this->object->getFullNameFormat('Єлізарова')).'-Єлізарова');
    }
    public function testSplDetect1284()
    {
        $this->assertEquals('S-Єрмилова', trim($this->object->getFullNameFormat('Єрмилова')).'-Єрмилова');
    }
    public function testSplDetect1285()
    {
        $this->assertEquals('S-Єрофєєва', trim($this->object->getFullNameFormat('Єрофєєва')).'-Єрофєєва');
    }
    public function testSplDetect1286()
    {
        $this->assertEquals('S-Єршова', trim($this->object->getFullNameFormat('Єршова')).'-Єршова');
    }
    public function testSplDetect1287()
    {
        $this->assertEquals('S-Єфімова', trim($this->object->getFullNameFormat('Єфімова')).'-Єфімова');
    }
    public function testSplDetect1288()
    {
        $this->assertEquals('S-Єфремова', trim($this->object->getFullNameFormat('Єфремова')).'-Єфремова');
    }
    public function testSplDetect1289()
    {
        $this->assertEquals('S-Іванова', trim($this->object->getFullNameFormat('Іванова')).'-Іванова');
    }
    public function testSplDetect1290()
    {
        $this->assertEquals('S-Ігнатова', trim($this->object->getFullNameFormat('Ігнатова')).'-Ігнатова');
    }
    public function testSplDetect1291()
    {
        $this->assertEquals('S-Іллюшина', trim($this->object->getFullNameFormat('Іллюшина')).'-Іллюшина');
    }
    public function testSplDetect1292()
    {
        $this->assertEquals('S-Ільїна', trim($this->object->getFullNameFormat('Ільїна')).'-Ільїна');
    }
    public function testSplDetect1293()
    {
        $this->assertEquals('S-Аєдоницька', trim($this->object->getFullNameFormat('Аєдоницька')).'-Аєдоницька');
    }
    public function testSplDetect1294()
    {
        $this->assertEquals('S-Абатурова', trim($this->object->getFullNameFormat('Абатурова')).'-Абатурова');
    }
    public function testSplDetect1295()
    {
        $this->assertEquals('S-Абдулова', trim($this->object->getFullNameFormat('Абдулова')).'-Абдулова');
    }
    public function testSplDetect1296()
    {
        $this->assertEquals('S-Абрамова', trim($this->object->getFullNameFormat('Абрамова')).'-Абрамова');
    }
    public function testSplDetect1297()
    {
        $this->assertEquals('S-Авілова', trim($this->object->getFullNameFormat('Авілова')).'-Авілова');
    }
    public function testSplDetect1298()
    {
        $this->assertEquals('S-Авдєєнко', trim($this->object->getFullNameFormat('Авдєєнко')).'-Авдєєнко');
    }
    public function testSplDetect1299()
    {
        $this->assertEquals('S-Аврамова', trim($this->object->getFullNameFormat('Аврамова')).'-Аврамова');
    }
    public function testSplDetect1300()
    {
        $this->assertEquals('S-Алексєєва', trim($this->object->getFullNameFormat('Алексєєва')).'-Алексєєва');
    }
    public function testSplDetect1301()
    {
        $this->assertEquals('S-Александрова', trim($this->object->getFullNameFormat('Александрова')).'-Александрова');
    }
    public function testSplDetect1302()
    {
        $this->assertEquals('S-Альошина', trim($this->object->getFullNameFormat('Альошина')).'-Альошина');
    }
    public function testSplDetect1303()
    {
        $this->assertEquals('S-Анісімова', trim($this->object->getFullNameFormat('Анісімова')).'-Анісімова');
    }
    public function testSplDetect1304()
    {
        $this->assertEquals('S-Анісова', trim($this->object->getFullNameFormat('Анісова')).'-Анісова');
    }
    public function testSplDetect1305()
    {
        $this->assertEquals('S-Ананьєва', trim($this->object->getFullNameFormat('Ананьєва')).'-Ананьєва');
    }
    public function testSplDetect1306()
    {
        $this->assertEquals('S-Андріанова', trim($this->object->getFullNameFormat('Андріанова')).'-Андріанова');
    }
    public function testSplDetect1307()
    {
        $this->assertEquals('S-Андріяшева', trim($this->object->getFullNameFormat('Андріяшева')).'-Андріяшева');
    }
    public function testSplDetect1308()
    {
        $this->assertEquals('S-Андреєва', trim($this->object->getFullNameFormat('Андреєва')).'-Андреєва');
    }
    public function testSplDetect1309()
    {
        $this->assertEquals('S-Антипова', trim($this->object->getFullNameFormat('Антипова')).'-Антипова');
    }
    public function testSplDetect1310()
    {
        $this->assertEquals('S-Антонова', trim($this->object->getFullNameFormat('Антонова')).'-Антонова');
    }
    public function testSplDetect1311()
    {
        $this->assertEquals('S-Анциферова', trim($this->object->getFullNameFormat('Анциферова')).'-Анциферова');
    }
    public function testSplDetect1312()
    {
        $this->assertEquals('S-Апухтіна', trim($this->object->getFullNameFormat('Апухтіна')).'-Апухтіна');
    }
    public function testSplDetect1313()
    {
        $this->assertEquals('S-Арбузова', trim($this->object->getFullNameFormat('Арбузова')).'-Арбузова');
    }
    public function testSplDetect1314()
    {
        $this->assertEquals('S-Аржанова', trim($this->object->getFullNameFormat('Аржанова')).'-Аржанова');
    }
    public function testSplDetect1315()
    {
        $this->assertEquals('S-Архипова', trim($this->object->getFullNameFormat('Архипова')).'-Архипова');
    }
    public function testSplDetect1316()
    {
        $this->assertEquals('S-Арцибушева', trim($this->object->getFullNameFormat('Арцибушева')).'-Арцибушева');
    }
    public function testSplDetect1317()
    {
        $this->assertEquals('S-Астраханцева', trim($this->object->getFullNameFormat('Астраханцева')).'-Астраханцева');
    }
    public function testSplDetect1318()
    {
        $this->assertEquals('S-Афіногенова', trim($this->object->getFullNameFormat('Афіногенова')).'-Афіногенова');
    }
    public function testSplDetect1319()
    {
        $this->assertEquals('S-Афанасьєва', trim($this->object->getFullNameFormat('Афанасьєва')).'-Афанасьєва');
    }
    public function testSplDetect1320()
    {
        $this->assertEquals('S-Бєлова', trim($this->object->getFullNameFormat('Бєлова')).'-Бєлова');
    }
    public function testSplDetect1321()
    {
        $this->assertEquals('S-Бєлоглазова', trim($this->object->getFullNameFormat('Бєлоглазова')).'-Бєлоглазова');
    }
    public function testSplDetect1322()
    {
        $this->assertEquals('S-Бєлоусова', trim($this->object->getFullNameFormat('Бєлоусова')).'-Бєлоусова');
    }
    public function testSplDetect1323()
    {
        $this->assertEquals('S-Бєляєва', trim($this->object->getFullNameFormat('Бєляєва')).'-Бєляєва');
    }
    public function testSplDetect1324()
    {
        $this->assertEquals('S-Бібикова', trim($this->object->getFullNameFormat('Бібикова')).'-Бібикова');
    }
    public function testSplDetect1325()
    {
        $this->assertEquals('S-Бажанова', trim($this->object->getFullNameFormat('Бажанова')).'-Бажанова');
    }
    public function testSplDetect1326()
    {
        $this->assertEquals('S-Баранова', trim($this->object->getFullNameFormat('Баранова')).'-Баранова');
    }
    public function testSplDetect1327()
    {
        $this->assertEquals('S-Баришнікова', trim($this->object->getFullNameFormat('Баришнікова')).'-Баришнікова');
    }
    public function testSplDetect1328()
    {
        $this->assertEquals('S-Барсова', trim($this->object->getFullNameFormat('Барсова')).'-Барсова');
    }
    public function testSplDetect1329()
    {
        $this->assertEquals('S-Батюшкова', trim($this->object->getFullNameFormat('Батюшкова')).'-Батюшкова');
    }
    public function testSplDetect1330()
    {
        $this->assertEquals('S-Бикова', trim($this->object->getFullNameFormat('Бикова')).'-Бикова');
    }
    public function testSplDetect1331()
    {
        $this->assertEquals('S-Блохіна', trim($this->object->getFullNameFormat('Блохіна')).'-Блохіна');
    }
    public function testSplDetect1332()
    {
        $this->assertEquals('S-Боброва', trim($this->object->getFullNameFormat('Боброва')).'-Боброва');
    }
    public function testSplDetect1333()
    {
        $this->assertEquals('S-Богданова', trim($this->object->getFullNameFormat('Богданова')).'-Богданова');
    }
    public function testSplDetect1334()
    {
        $this->assertEquals('S-Богомазова', trim($this->object->getFullNameFormat('Богомазова')).'-Богомазова');
    }
    public function testSplDetect1335()
    {
        $this->assertEquals('S-Бойкова', trim($this->object->getFullNameFormat('Бойкова')).'-Бойкова');
    }
    public function testSplDetect1336()
    {
        $this->assertEquals('S-Большакова', trim($this->object->getFullNameFormat('Большакова')).'-Большакова');
    }
    public function testSplDetect1337()
    {
        $this->assertEquals('S-Борисова', trim($this->object->getFullNameFormat('Борисова')).'-Борисова');
    }
    public function testSplDetect1338()
    {
        $this->assertEquals('S-Бочкова', trim($this->object->getFullNameFormat('Бочкова')).'-Бочкова');
    }
    public function testSplDetect1339()
    {
        $this->assertEquals('S-Бризгалова', trim($this->object->getFullNameFormat('Бризгалова')).'-Бризгалова');
    }
    public function testSplDetect1340()
    {
        $this->assertEquals('S-Брусилова', trim($this->object->getFullNameFormat('Брусилова')).'-Брусилова');
    }
    public function testSplDetect1341()
    {
        $this->assertEquals('S-Бутурліна', trim($this->object->getFullNameFormat('Бутурліна')).'-Бутурліна');
    }
    public function testSplDetect1342()
    {
        $this->assertEquals('S-Бутусова', trim($this->object->getFullNameFormat('Бутусова')).'-Бутусова');
    }
    public function testSplDetect1343()
    {
        $this->assertEquals('S-Варламова', trim($this->object->getFullNameFormat('Варламова')).'-Варламова');
    }
    public function testSplDetect1344()
    {
        $this->assertEquals('S-Васильєва', trim($this->object->getFullNameFormat('Васильєва')).'-Васильєва');
    }
    public function testSplDetect1345()
    {
        $this->assertEquals('S-Виноградова', trim($this->object->getFullNameFormat('Виноградова')).'-Виноградова');
    }
    public function testSplDetect1346()
    {
        $this->assertEquals('S-Власова', trim($this->object->getFullNameFormat('Власова')).'-Власова');
    }
    public function testSplDetect1347()
    {
        $this->assertEquals('S-Внукова', trim($this->object->getFullNameFormat('Внукова')).'-Внукова');
    }
    public function testSplDetect1348()
    {
        $this->assertEquals('S-Волкова', trim($this->object->getFullNameFormat('Волкова')).'-Волкова');
    }
    public function testSplDetect1349()
    {
        $this->assertEquals('S-Воробей', trim($this->object->getFullNameFormat('Воробей')).'-Воробей');
    }
    public function testSplDetect1350()
    {
        $this->assertEquals('S-Воробйова', trim($this->object->getFullNameFormat('Воробйова')).'-Воробйова');
    }
    public function testSplDetect1351()
    {
        $this->assertEquals('S-Вороніна', trim($this->object->getFullNameFormat('Вороніна')).'-Вороніна');
    }
    public function testSplDetect1352()
    {
        $this->assertEquals('S-Воронцова', trim($this->object->getFullNameFormat('Воронцова')).'-Воронцова');
    }
    public function testSplDetect1353()
    {
        $this->assertEquals('S-Ворошилова', trim($this->object->getFullNameFormat('Ворошилова')).'-Ворошилова');
    }
    public function testSplDetect1354()
    {
        $this->assertEquals('S-Гаврилова', trim($this->object->getFullNameFormat('Гаврилова')).'-Гаврилова');
    }
    public function testSplDetect1355()
    {
        $this->assertEquals('S-Герасимова', trim($this->object->getFullNameFormat('Герасимова')).'-Герасимова');
    }
    public function testSplDetect1356()
    {
        $this->assertEquals('S-Гончарова', trim($this->object->getFullNameFormat('Гончарова')).'-Гончарова');
    }
    public function testSplDetect1357()
    {
        $this->assertEquals('S-Горбунова', trim($this->object->getFullNameFormat('Горбунова')).'-Горбунова');
    }
    public function testSplDetect1358()
    {
        $this->assertEquals('S-Горчакова', trim($this->object->getFullNameFormat('Горчакова')).'-Горчакова');
    }
    public function testSplDetect1359()
    {
        $this->assertEquals('S-Горшкова', trim($this->object->getFullNameFormat('Горшкова')).'-Горшкова');
    }
    public function testSplDetect1360()
    {
        $this->assertEquals('S-Громова', trim($this->object->getFullNameFormat('Громова')).'-Громова');
    }
    public function testSplDetect1361()
    {
        $this->assertEquals('S-Гусєва', trim($this->object->getFullNameFormat('Гусєва')).'-Гусєва');
    }
    public function testSplDetect1362()
    {
        $this->assertEquals('S-Давидова', trim($this->object->getFullNameFormat('Давидова')).'-Давидова');
    }
    public function testSplDetect1363()
    {
        $this->assertEquals('S-Данилова', trim($this->object->getFullNameFormat('Данилова')).'-Данилова');
    }
    public function testSplDetect1364()
    {
        $this->assertEquals('S-Дарагана', trim($this->object->getFullNameFormat('Дарагана')).'-Дарагана');
    }
    public function testSplDetect1365()
    {
        $this->assertEquals('S-Дементьєва', trim($this->object->getFullNameFormat('Дементьєва')).'-Дементьєва');
    }
    public function testSplDetect1366()
    {
        $this->assertEquals('S-Денисова', trim($this->object->getFullNameFormat('Денисова')).'-Денисова');
    }
    public function testSplDetect1367()
    {
        $this->assertEquals('S-Дмитрієва', trim($this->object->getFullNameFormat('Дмитрієва')).'-Дмитрієва');
    }
    public function testSplDetect1368()
    {
        $this->assertEquals('S-Добролюбова', trim($this->object->getFullNameFormat('Добролюбова')).'-Добролюбова');
    }
    public function testSplDetect1369()
    {
        $this->assertEquals('S-Донськая', trim($this->object->getFullNameFormat('Донськая')).'-Донськая');
    }
    public function testSplDetect1370()
    {
        $this->assertEquals('S-Дорофєєва', trim($this->object->getFullNameFormat('Дорофєєва')).'-Дорофєєва');
    }
    public function testSplDetect1371()
    {
        $this->assertEquals('S-Дуброва', trim($this->object->getFullNameFormat('Дуброва')).'-Дуброва');
    }
    public function testSplDetect1372()
    {
        $this->assertEquals('S-Железнякова', trim($this->object->getFullNameFormat('Железнякова')).'-Железнякова');
    }
    public function testSplDetect1373()
    {
        $this->assertEquals('S-Жердєва', trim($this->object->getFullNameFormat('Жердєва')).'-Жердєва');
    }
    public function testSplDetect1374()
    {
        $this->assertEquals('S-Жукова', trim($this->object->getFullNameFormat('Жукова')).'-Жукова');
    }
    public function testSplDetect1375()
    {
        $this->assertEquals('S-Журавльова', trim($this->object->getFullNameFormat('Журавльова')).'-Журавльова');
    }
    public function testSplDetect1376()
    {
        $this->assertEquals('S-Заварова', trim($this->object->getFullNameFormat('Заварова')).'-Заварова');
    }
    public function testSplDetect1377()
    {
        $this->assertEquals('S-Загарова', trim($this->object->getFullNameFormat('Загарова')).'-Загарова');
    }
    public function testSplDetect1378()
    {
        $this->assertEquals('S-Зайцева', trim($this->object->getFullNameFormat('Зайцева')).'-Зайцева');
    }
    public function testSplDetect1379()
    {
        $this->assertEquals('S-Захарова', trim($this->object->getFullNameFormat('Захарова')).'-Захарова');
    }
    public function testSplDetect1380()
    {
        $this->assertEquals('S-Звєрєва', trim($this->object->getFullNameFormat('Звєрєва')).'-Звєрєва');
    }
    public function testSplDetect1381()
    {
        $this->assertEquals('S-Зерова', trim($this->object->getFullNameFormat('Зерова')).'-Зерова');
    }
    public function testSplDetect1382()
    {
        $this->assertEquals('S-Золотухіна', trim($this->object->getFullNameFormat('Золотухіна')).'-Золотухіна');
    }
    public function testSplDetect1383()
    {
        $this->assertEquals('S-Зубова', trim($this->object->getFullNameFormat('Зубова')).'-Зубова');
    }
    public function testSplDetect1384()
    {
        $this->assertEquals('S-Казакова', trim($this->object->getFullNameFormat('Казакова')).'-Казакова');
    }
    public function testSplDetect1385()
    {
        $this->assertEquals('S-Калініна', trim($this->object->getFullNameFormat('Калініна')).'-Калініна');
    }
    public function testSplDetect1386()
    {
        $this->assertEquals('S-Калашникова', trim($this->object->getFullNameFormat('Калашникова')).'-Калашникова');
    }
    public function testSplDetect1387()
    {
        $this->assertEquals('S-Карпова', trim($this->object->getFullNameFormat('Карпова')).'-Карпова');
    }
    public function testSplDetect1388()
    {
        $this->assertEquals('S-Каштанова', trim($this->object->getFullNameFormat('Каштанова')).'-Каштанова');
    }
    public function testSplDetect1389()
    {
        $this->assertEquals('S-Кисельова', trim($this->object->getFullNameFormat('Кисельова')).'-Кисельова');
    }
    public function testSplDetect1390()
    {
        $this->assertEquals('S-Ковальова', trim($this->object->getFullNameFormat('Ковальова')).'-Ковальова');
    }
    public function testSplDetect1391()
    {
        $this->assertEquals('S-Кожевникова', trim($this->object->getFullNameFormat('Кожевникова')).'-Кожевникова');
    }
    public function testSplDetect1392()
    {
        $this->assertEquals('S-Козлова', trim($this->object->getFullNameFormat('Козлова')).'-Козлова');
    }
    public function testSplDetect1393()
    {
        $this->assertEquals('S-Колесникова', trim($this->object->getFullNameFormat('Колесникова')).'-Колесникова');
    }
    public function testSplDetect1394()
    {
        $this->assertEquals('S-Кольцова', trim($this->object->getFullNameFormat('Кольцова')).'-Кольцова');
    }
    public function testSplDetect1395()
    {
        $this->assertEquals('S-Комарова', trim($this->object->getFullNameFormat('Комарова')).'-Комарова');
    }
    public function testSplDetect1396()
    {
        $this->assertEquals('S-Коновалова', trim($this->object->getFullNameFormat('Коновалова')).'-Коновалова');
    }
    public function testSplDetect1397()
    {
        $this->assertEquals('S-Конюхова', trim($this->object->getFullNameFormat('Конюхова')).'-Конюхова');
    }
    public function testSplDetect1398()
    {
        $this->assertEquals('S-Копилова', trim($this->object->getFullNameFormat('Копилова')).'-Копилова');
    }
    public function testSplDetect1399()
    {
        $this->assertEquals('S-Кормильцева', trim($this->object->getFullNameFormat('Кормильцева')).'-Кормильцева');
    }
    public function testSplDetect1400()
    {
        $this->assertEquals('S-Коробова', trim($this->object->getFullNameFormat('Коробова')).'-Коробова');
    }
    public function testSplDetect1401()
    {
        $this->assertEquals('S-Коровкіна', trim($this->object->getFullNameFormat('Коровкіна')).'-Коровкіна');
    }
    public function testSplDetect1402()
    {
        $this->assertEquals('S-Корольова', trim($this->object->getFullNameFormat('Корольова')).'-Корольова');
    }
    public function testSplDetect1403()
    {
        $this->assertEquals('S-Котова', trim($this->object->getFullNameFormat('Котова')).'-Котова');
    }
    public function testSplDetect1404()
    {
        $this->assertEquals('S-Краснова', trim($this->object->getFullNameFormat('Краснова')).'-Краснова');
    }
    public function testSplDetect1405()
    {
        $this->assertEquals('S-Крилова', trim($this->object->getFullNameFormat('Крилова')).'-Крилова');
    }
    public function testSplDetect1406()
    {
        $this->assertEquals('S-Кримова', trim($this->object->getFullNameFormat('Кримова')).'-Кримова');
    }
    public function testSplDetect1407()
    {
        $this->assertEquals('S-Крюкова', trim($this->object->getFullNameFormat('Крюкова')).'-Крюкова');
    }
    public function testSplDetect1408()
    {
        $this->assertEquals('S-Кудряшова', trim($this->object->getFullNameFormat('Кудряшова')).'-Кудряшова');
    }
    public function testSplDetect1409()
    {
        $this->assertEquals('S-Кузнецова', trim($this->object->getFullNameFormat('Кузнецова')).'-Кузнецова');
    }
    public function testSplDetect1410()
    {
        $this->assertEquals('S-Кузьміна', trim($this->object->getFullNameFormat('Кузьміна')).'-Кузьміна');
    }
    public function testSplDetect1411()
    {
        $this->assertEquals('S-Кулакова', trim($this->object->getFullNameFormat('Кулакова')).'-Кулакова');
    }
    public function testSplDetect1412()
    {
        $this->assertEquals('S-Куликова', trim($this->object->getFullNameFormat('Куликова')).'-Куликова');
    }
    public function testSplDetect1413()
    {
        $this->assertEquals('S-Куркова', trim($this->object->getFullNameFormat('Куркова')).'-Куркова');
    }
    public function testSplDetect1414()
    {
        $this->assertEquals('S-Курочкіна', trim($this->object->getFullNameFormat('Курочкіна')).'-Курочкіна');
    }
    public function testSplDetect1415()
    {
        $this->assertEquals('S-Лєскова', trim($this->object->getFullNameFormat('Лєскова')).'-Лєскова');
    }
    public function testSplDetect1416()
    {
        $this->assertEquals('S-Лідова', trim($this->object->getFullNameFormat('Лідова')).'-Лідова');
    }
    public function testSplDetect1417()
    {
        $this->assertEquals('S-Ладигіна', trim($this->object->getFullNameFormat('Ладигіна')).'-Ладигіна');
    }
    public function testSplDetect1418()
    {
        $this->assertEquals('S-Лазарєва', trim($this->object->getFullNameFormat('Лазарєва')).'-Лазарєва');
    }
    public function testSplDetect1419()
    {
        $this->assertEquals('S-Лебедєва', trim($this->object->getFullNameFormat('Лебедєва')).'-Лебедєва');
    }
    public function testSplDetect1420()
    {
        $this->assertEquals('S-Лихоносова', trim($this->object->getFullNameFormat('Лихоносова')).'-Лихоносова');
    }
    public function testSplDetect1421()
    {
        $this->assertEquals('S-Лосєва', trim($this->object->getFullNameFormat('Лосєва')).'-Лосєва');
    }
    public function testSplDetect1422()
    {
        $this->assertEquals('S-Львова', trim($this->object->getFullNameFormat('Львова')).'-Львова');
    }
    public function testSplDetect1423()
    {
        $this->assertEquals('S-Любимова', trim($this->object->getFullNameFormat('Любимова')).'-Любимова');
    }
    public function testSplDetect1424()
    {
        $this->assertEquals('S-Мілютіна', trim($this->object->getFullNameFormat('Мілютіна')).'-Мілютіна');
    }
    public function testSplDetect1425()
    {
        $this->assertEquals('S-Макарова', trim($this->object->getFullNameFormat('Макарова')).'-Макарова');
    }
    public function testSplDetect1426()
    {
        $this->assertEquals('S-Максимова', trim($this->object->getFullNameFormat('Максимова')).'-Максимова');
    }
    public function testSplDetect1427()
    {
        $this->assertEquals('S-Малакова', trim($this->object->getFullNameFormat('Малакова')).'-Малакова');
    }
    public function testSplDetect1428()
    {
        $this->assertEquals('S-Мамонова', trim($this->object->getFullNameFormat('Мамонова')).'-Мамонова');
    }
    public function testSplDetect1429()
    {
        $this->assertEquals('S-Манасеїна', trim($this->object->getFullNameFormat('Манасеїна')).'-Манасеїна');
    }
    public function testSplDetect1430()
    {
        $this->assertEquals('S-Маркова', trim($this->object->getFullNameFormat('Маркова')).'-Маркова');
    }
    public function testSplDetect1431()
    {
        $this->assertEquals('S-Мартенс', trim($this->object->getFullNameFormat('Мартенс')).'-Мартенс');
    }
    public function testSplDetect1432()
    {
        $this->assertEquals('S-Мартинова', trim($this->object->getFullNameFormat('Мартинова')).'-Мартинова');
    }
    public function testSplDetect1433()
    {
        $this->assertEquals('S-Масленнікова', trim($this->object->getFullNameFormat('Масленнікова')).'-Масленнікова');
    }
    public function testSplDetect1434()
    {
        $this->assertEquals('S-Маслова', trim($this->object->getFullNameFormat('Маслова')).'-Маслова');
    }
    public function testSplDetect1435()
    {
        $this->assertEquals('S-Матвєєва', trim($this->object->getFullNameFormat('Матвєєва')).'-Матвєєва');
    }
    public function testSplDetect1436()
    {
        $this->assertEquals('S-Медведєва', trim($this->object->getFullNameFormat('Медведєва')).'-Медведєва');
    }
    public function testSplDetect1437()
    {
        $this->assertEquals('S-Мельникова', trim($this->object->getFullNameFormat('Мельникова')).'-Мельникова');
    }
    public function testSplDetect1438()
    {
        $this->assertEquals('S-Миронова', trim($this->object->getFullNameFormat('Миронова')).'-Миронова');
    }
    public function testSplDetect1439()
    {
        $this->assertEquals('S-Михайлова', trim($this->object->getFullNameFormat('Михайлова')).'-Михайлова');
    }
    public function testSplDetect1440()
    {
        $this->assertEquals('S-Моїсєєва', trim($this->object->getFullNameFormat('Моїсєєва')).'-Моїсєєва');
    }
    public function testSplDetect1441()
    {
        $this->assertEquals('S-Моргунова', trim($this->object->getFullNameFormat('Моргунова')).'-Моргунова');
    }
    public function testSplDetect1442()
    {
        $this->assertEquals('S-Моркова', trim($this->object->getFullNameFormat('Моркова')).'-Моркова');
    }
    public function testSplDetect1443()
    {
        $this->assertEquals('S-Морозова', trim($this->object->getFullNameFormat('Морозова')).'-Морозова');
    }
    public function testSplDetect1444()
    {
        $this->assertEquals('S-Мухіна', trim($this->object->getFullNameFormat('Мухіна')).'-Мухіна');
    }
    public function testSplDetect1445()
    {
        $this->assertEquals('S-Нікітіна', trim($this->object->getFullNameFormat('Нікітіна')).'-Нікітіна');
    }
    public function testSplDetect1446()
    {
        $this->assertEquals('S-Ніколаєва', trim($this->object->getFullNameFormat('Ніколаєва')).'-Ніколаєва');
    }
    public function testSplDetect1447()
    {
        $this->assertEquals('S-Нікуліна', trim($this->object->getFullNameFormat('Нікуліна')).'-Нікуліна');
    }
    public function testSplDetect1448()
    {
        $this->assertEquals('S-Набокова', trim($this->object->getFullNameFormat('Набокова')).'-Набокова');
    }
    public function testSplDetect1449()
    {
        $this->assertEquals('S-Некрасова', trim($this->object->getFullNameFormat('Некрасова')).'-Некрасова');
    }
    public function testSplDetect1450()
    {
        $this->assertEquals('S-Новикова', trim($this->object->getFullNameFormat('Новикова')).'-Новикова');
    }
    public function testSplDetect1451()
    {
        $this->assertEquals('S-Орлова', trim($this->object->getFullNameFormat('Орлова')).'-Орлова');
    }
    public function testSplDetect1452()
    {
        $this->assertEquals('S-Осипова', trim($this->object->getFullNameFormat('Осипова')).'-Осипова');
    }
    public function testSplDetect1453()
    {
        $this->assertEquals('S-Павлова', trim($this->object->getFullNameFormat('Павлова')).'-Павлова');
    }
    public function testSplDetect1454()
    {
        $this->assertEquals('S-Павлушкова', trim($this->object->getFullNameFormat('Павлушкова')).'-Павлушкова');
    }
    public function testSplDetect1455()
    {
        $this->assertEquals('S-Панова', trim($this->object->getFullNameFormat('Панова')).'-Панова');
    }
    public function testSplDetect1456()
    {
        $this->assertEquals('S-Петрова', trim($this->object->getFullNameFormat('Петрова')).'-Петрова');
    }
    public function testSplDetect1457()
    {
        $this->assertEquals('S-Пильчикова', trim($this->object->getFullNameFormat('Пильчикова')).'-Пильчикова');
    }
    public function testSplDetect1458()
    {
        $this->assertEquals('S-Платонова', trim($this->object->getFullNameFormat('Платонова')).'-Платонова');
    }
    public function testSplDetect1459()
    {
        $this->assertEquals('S-Плеханова', trim($this->object->getFullNameFormat('Плеханова')).'-Плеханова');
    }
    public function testSplDetect1460()
    {
        $this->assertEquals('S-Полякова', trim($this->object->getFullNameFormat('Полякова')).'-Полякова');
    }
    public function testSplDetect1461()
    {
        $this->assertEquals('S-Пономарьова', trim($this->object->getFullNameFormat('Пономарьова')).'-Пономарьова');
    }
    public function testSplDetect1462()
    {
        $this->assertEquals('S-Попова', trim($this->object->getFullNameFormat('Попова')).'-Попова');
    }
    public function testSplDetect1463()
    {
        $this->assertEquals('S-Пояркова', trim($this->object->getFullNameFormat('Пояркова')).'-Пояркова');
    }
    public function testSplDetect1464()
    {
        $this->assertEquals('S-Пригунова', trim($this->object->getFullNameFormat('Пригунова')).'-Пригунова');
    }
    public function testSplDetect1465()
    {
        $this->assertEquals('S-Прошкіна', trim($this->object->getFullNameFormat('Прошкіна')).'-Прошкіна');
    }
    public function testSplDetect1466()
    {
        $this->assertEquals('S-Решетникова', trim($this->object->getFullNameFormat('Решетникова')).'-Решетникова');
    }
    public function testSplDetect1467()
    {
        $this->assertEquals('S-Рожкова', trim($this->object->getFullNameFormat('Рожкова')).'-Рожкова');
    }
    public function testSplDetect1468()
    {
        $this->assertEquals('S-Романова', trim($this->object->getFullNameFormat('Романова')).'-Романова');
    }
    public function testSplDetect1469()
    {
        $this->assertEquals('S-Рябова', trim($this->object->getFullNameFormat('Рябова')).'-Рябова');
    }
    public function testSplDetect1470()
    {
        $this->assertEquals('S-Сабліна', trim($this->object->getFullNameFormat('Сабліна')).'-Сабліна');
    }
    public function testSplDetect1471()
    {
        $this->assertEquals('S-Савіна', trim($this->object->getFullNameFormat('Савіна')).'-Савіна');
    }
    public function testSplDetect1472()
    {
        $this->assertEquals('S-Сазонова', trim($this->object->getFullNameFormat('Сазонова')).'-Сазонова');
    }
    public function testSplDetect1473()
    {
        $this->assertEquals('S-Сальникова', trim($this->object->getFullNameFormat('Сальникова')).'-Сальникова');
    }
    public function testSplDetect1474()
    {
        $this->assertEquals('S-Самойлова', trim($this->object->getFullNameFormat('Самойлова')).'-Самойлова');
    }
    public function testSplDetect1475()
    {
        $this->assertEquals('S-Самсонова', trim($this->object->getFullNameFormat('Самсонова')).'-Самсонова');
    }
    public function testSplDetect1476()
    {
        $this->assertEquals('S-Сбітнєва', trim($this->object->getFullNameFormat('Сбітнєва')).'-Сбітнєва');
    }
    public function testSplDetect1477()
    {
        $this->assertEquals('S-Свиридова', trim($this->object->getFullNameFormat('Свиридова')).'-Свиридова');
    }
    public function testSplDetect1478()
    {
        $this->assertEquals('S-Селезньова', trim($this->object->getFullNameFormat('Селезньова')).'-Селезньова');
    }
    public function testSplDetect1479()
    {
        $this->assertEquals('S-Семенова', trim($this->object->getFullNameFormat('Семенова')).'-Семенова');
    }
    public function testSplDetect1480()
    {
        $this->assertEquals('S-Сербіна', trim($this->object->getFullNameFormat('Сербіна')).'-Сербіна');
    }
    public function testSplDetect1481()
    {
        $this->assertEquals('S-Сергєєва', trim($this->object->getFullNameFormat('Сергєєва')).'-Сергєєва');
    }
    public function testSplDetect1482()
    {
        $this->assertEquals('S-Сибірякова', trim($this->object->getFullNameFormat('Сибірякова')).'-Сибірякова');
    }
    public function testSplDetect1483()
    {
        $this->assertEquals('S-Сидорова', trim($this->object->getFullNameFormat('Сидорова')).'-Сидорова');
    }
    public function testSplDetect1484()
    {
        $this->assertEquals('S-Симонова', trim($this->object->getFullNameFormat('Симонова')).'-Симонова');
    }
    public function testSplDetect1485()
    {
        $this->assertEquals('S-Синельникова', trim($this->object->getFullNameFormat('Синельникова')).'-Синельникова');
    }
    public function testSplDetect1486()
    {
        $this->assertEquals('S-Скобелева', trim($this->object->getFullNameFormat('Скобелева')).'-Скобелева');
    }
    public function testSplDetect1487()
    {
        $this->assertEquals('S-Скобліна', trim($this->object->getFullNameFormat('Скобліна')).'-Скобліна');
    }
    public function testSplDetect1488()
    {
        $this->assertEquals('S-Смирнова', trim($this->object->getFullNameFormat('Смирнова')).'-Смирнова');
    }
    public function testSplDetect1489()
    {
        $this->assertEquals('S-Снєгірьова', trim($this->object->getFullNameFormat('Снєгірьова')).'-Снєгірьова');
    }
    public function testSplDetect1490()
    {
        $this->assertEquals('S-Соболєва', trim($this->object->getFullNameFormat('Соболєва')).'-Соболєва');
    }
    public function testSplDetect1491()
    {
        $this->assertEquals('S-Соколова', trim($this->object->getFullNameFormat('Соколова')).'-Соколова');
    }
    public function testSplDetect1492()
    {
        $this->assertEquals('S-Солнцева', trim($this->object->getFullNameFormat('Солнцева')).'-Солнцева');
    }
    public function testSplDetect1493()
    {
        $this->assertEquals('S-Соловйова', trim($this->object->getFullNameFormat('Соловйова')).'-Соловйова');
    }
    public function testSplDetect1494()
    {
        $this->assertEquals('S-Сомова', trim($this->object->getFullNameFormat('Сомова')).'-Сомова');
    }
    public function testSplDetect1495()
    {
        $this->assertEquals('S-Сорокіна', trim($this->object->getFullNameFormat('Сорокіна')).'-Сорокіна');
    }
    public function testSplDetect1496()
    {
        $this->assertEquals('S-Стєклова', trim($this->object->getFullNameFormat('Стєклова')).'-Стєклова');
    }
    public function testSplDetect1497()
    {
        $this->assertEquals('S-Старкова', trim($this->object->getFullNameFormat('Старкова')).'-Старкова');
    }
    public function testSplDetect1498()
    {
        $this->assertEquals('S-Степанова', trim($this->object->getFullNameFormat('Степанова')).'-Степанова');
    }
    public function testSplDetect1499()
    {
        $this->assertEquals('S-Табакова', trim($this->object->getFullNameFormat('Табакова')).'-Табакова');
    }
    public function testSplDetect1500()
    {
        $this->assertEquals('S-Тарасова', trim($this->object->getFullNameFormat('Тарасова')).'-Тарасова');
    }
    public function testSplDetect1501()
    {
        $this->assertEquals('S-Терентьєва', trim($this->object->getFullNameFormat('Терентьєва')).'-Терентьєва');
    }
    public function testSplDetect1502()
    {
        $this->assertEquals('S-Тимофєєва', trim($this->object->getFullNameFormat('Тимофєєва')).'-Тимофєєва');
    }
    public function testSplDetect1503()
    {
        $this->assertEquals('S-Титова', trim($this->object->getFullNameFormat('Титова')).'-Титова');
    }
    public function testSplDetect1504()
    {
        $this->assertEquals('S-Тихомирова', trim($this->object->getFullNameFormat('Тихомирова')).'-Тихомирова');
    }
    public function testSplDetect1505()
    {
        $this->assertEquals('S-Тихонова', trim($this->object->getFullNameFormat('Тихонова')).'-Тихонова');
    }
    public function testSplDetect1506()
    {
        $this->assertEquals('S-Тюленєва', trim($this->object->getFullNameFormat('Тюленєва')).'-Тюленєва');
    }
    public function testSplDetect1507()
    {
        $this->assertEquals('S-Уварова', trim($this->object->getFullNameFormat('Уварова')).'-Уварова');
    }
    public function testSplDetect1508()
    {
        $this->assertEquals('S-Усова', trim($this->object->getFullNameFormat('Усова')).'-Усова');
    }
    public function testSplDetect1509()
    {
        $this->assertEquals('S-Устинова', trim($this->object->getFullNameFormat('Устинова')).'-Устинова');
    }
    public function testSplDetect1510()
    {
        $this->assertEquals('S-Філіппова', trim($this->object->getFullNameFormat('Філіппова')).'-Філіппова');
    }
    public function testSplDetect1511()
    {
        $this->assertEquals('S-Філатова', trim($this->object->getFullNameFormat('Філатова')).'-Філатова');
    }
    public function testSplDetect1512()
    {
        $this->assertEquals('S-Федорова', trim($this->object->getFullNameFormat('Федорова')).'-Федорова');
    }
    public function testSplDetect1513()
    {
        $this->assertEquals('S-Фоміна', trim($this->object->getFullNameFormat('Фоміна')).'-Фоміна');
    }
    public function testSplDetect1514()
    {
        $this->assertEquals('S-Фролова', trim($this->object->getFullNameFormat('Фролова')).'-Фролова');
    }
    public function testSplDetect1515()
    {
        $this->assertEquals('S-Хілкова', trim($this->object->getFullNameFormat('Хілкова')).'-Хілкова');
    }
    public function testSplDetect1516()
    {
        $this->assertEquals('S-Хвостова', trim($this->object->getFullNameFormat('Хвостова')).'-Хвостова');
    }
    public function testSplDetect1517()
    {
        $this->assertEquals('S-Худякова', trim($this->object->getFullNameFormat('Худякова')).'-Худякова');
    }
    public function testSplDetect1518()
    {
        $this->assertEquals('S-Цвєткова', trim($this->object->getFullNameFormat('Цвєткова')).'-Цвєткова');
    }
    public function testSplDetect1519()
    {
        $this->assertEquals('S-Чанова', trim($this->object->getFullNameFormat('Чанова')).'-Чанова');
    }
    public function testSplDetect1520()
    {
        $this->assertEquals('S-Чевкіна', trim($this->object->getFullNameFormat('Чевкіна')).'-Чевкіна');
    }
    public function testSplDetect1521()
    {
        $this->assertEquals('S-Черенкова', trim($this->object->getFullNameFormat('Черенкова')).'-Черенкова');
    }
    public function testSplDetect1522()
    {
        $this->assertEquals('S-Черепкова', trim($this->object->getFullNameFormat('Черепкова')).'-Черепкова');
    }
    public function testSplDetect1523()
    {
        $this->assertEquals('S-Чулкова', trim($this->object->getFullNameFormat('Чулкова')).'-Чулкова');
    }
    public function testSplDetect1524()
    {
        $this->assertEquals('S-Шевельова', trim($this->object->getFullNameFormat('Шевельова')).'-Шевельова');
    }
    public function testSplDetect1525()
    {
        $this->assertEquals('S-Шеліхова', trim($this->object->getFullNameFormat('Шеліхова')).'-Шеліхова');
    }
    public function testSplDetect1526()
    {
        $this->assertEquals('S-Шиніна', trim($this->object->getFullNameFormat('Шиніна')).'-Шиніна');
    }
    public function testSplDetect1527()
    {
        $this->assertEquals('S-Ширяєва', trim($this->object->getFullNameFormat('Ширяєва')).'-Ширяєва');
    }
    public function testSplDetect1528()
    {
        $this->assertEquals('S-Шишова', trim($this->object->getFullNameFormat('Шишова')).'-Шишова');
    }
    public function testSplDetect1529()
    {
        $this->assertEquals('S-Шулакова', trim($this->object->getFullNameFormat('Шулакова')).'-Шулакова');
    }
    public function testSplDetect1530()
    {
        $this->assertEquals('S-Щапова', trim($this->object->getFullNameFormat('Щапова')).'-Щапова');
    }
    public function testSplDetect1531()
    {
        $this->assertEquals('S-Щаслива', trim($this->object->getFullNameFormat('Щаслива')).'-Щаслива');
    }
    public function testSplDetect1532()
    {
        $this->assertEquals('S-Яковлєва', trim($this->object->getFullNameFormat('Яковлєва')).'-Яковлєва');
    }
    public function testSplDetect1533()
    {
        $this->assertEquals('S-Яшина', trim($this->object->getFullNameFormat('Яшина')).'-Яшина');
    }

}