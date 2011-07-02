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
        $this->object->setSecondName('Єрмоленко');
        $this->assertEquals('1-Єрмоленко', $this->object->genderAutoDetect().'-Єрмоленко');
    }
    public function testGenDetect1()
    {
        $this->object->setSecondName('Єсипенко');
        $this->assertEquals('1-Єсипенко', $this->object->genderAutoDetect().'-Єсипенко');
    }
    public function testGenDetect2()
    {
        $this->object->setSecondName('Іванів');
        $this->assertEquals('1-Іванів', $this->object->genderAutoDetect().'-Іванів');
    }
    public function testGenDetect3()
    {
        $this->object->setSecondName('Іваненко');
        $this->assertEquals('1-Іваненко', $this->object->genderAutoDetect().'-Іваненко');
    }
    public function testGenDetect4()
    {
        $this->object->setSecondName('Іванченко');
        $this->assertEquals('1-Іванченко', $this->object->genderAutoDetect().'-Іванченко');
    }
    public function testGenDetect5()
    {
        $this->object->setSecondName('Іванчук');
        $this->assertEquals('1-Іванчук', $this->object->genderAutoDetect().'-Іванчук');
    }
    public function testGenDetect6()
    {
        $this->object->setSecondName('Іванюк');
        $this->assertEquals('1-Іванюк', $this->object->genderAutoDetect().'-Іванюк');
    }
    public function testGenDetect7()
    {
        $this->object->setSecondName('Івахненко');
        $this->assertEquals('1-Івахненко', $this->object->genderAutoDetect().'-Івахненко');
    }
    public function testGenDetect8()
    {
        $this->object->setSecondName('Івашко');
        $this->assertEquals('1-Івашко', $this->object->genderAutoDetect().'-Івашко');
    }
    public function testGenDetect9()
    {
        $this->object->setSecondName('Іващенко');
        $this->assertEquals('1-Іващенко', $this->object->genderAutoDetect().'-Іващенко');
    }
    public function testGenDetect10()
    {
        $this->object->setSecondName('Івченко');
        $this->assertEquals('1-Івченко', $this->object->genderAutoDetect().'-Івченко');
    }
    public function testGenDetect11()
    {
        $this->object->setSecondName('Іллєнко');
        $this->assertEquals('1-Іллєнко', $this->object->genderAutoDetect().'-Іллєнко');
    }
    public function testGenDetect12()
    {
        $this->object->setSecondName('Іловайські');
        $this->assertEquals('1-Іловайські', $this->object->genderAutoDetect().'-Іловайські');
    }
    public function testGenDetect13()
    {
        $this->object->setSecondName('Ільницький');
        $this->assertEquals('1-Ільницький', $this->object->genderAutoDetect().'-Ільницький');
    }
    public function testGenDetect14()
    {
        $this->object->setSecondName('Ільченко');
        $this->assertEquals('1-Ільченко', $this->object->genderAutoDetect().'-Ільченко');
    }
    public function testGenDetect15()
    {
        $this->object->setSecondName('Іщенко');
        $this->assertEquals('1-Іщенко', $this->object->genderAutoDetect().'-Іщенко');
    }
    public function testGenDetect16()
    {
        $this->object->setSecondName('Абраменко');
        $this->assertEquals('1-Абраменко', $this->object->genderAutoDetect().'-Абраменко');
    }
    public function testGenDetect17()
    {
        $this->object->setSecondName('Абрамчук');
        $this->assertEquals('1-Абрамчук', $this->object->genderAutoDetect().'-Абрамчук');
    }
    public function testGenDetect18()
    {
        $this->object->setSecondName('Адамчук');
        $this->assertEquals('1-Адамчук', $this->object->genderAutoDetect().'-Адамчук');
    }
    public function testGenDetect19()
    {
        $this->object->setSecondName('Акуленко');
        $this->assertEquals('1-Акуленко', $this->object->genderAutoDetect().'-Акуленко');
    }
    public function testGenDetect20()
    {
        $this->object->setSecondName('Алексєєнко');
        $this->assertEquals('1-Алексєєнко', $this->object->genderAutoDetect().'-Алексєєнко');
    }
    public function testGenDetect21()
    {
        $this->object->setSecondName('Алексійчук');
        $this->assertEquals('1-Алексійчук', $this->object->genderAutoDetect().'-Алексійчук');
    }
    public function testGenDetect22()
    {
        $this->object->setSecondName('Андрієнко');
        $this->assertEquals('1-Андрієнко', $this->object->genderAutoDetect().'-Андрієнко');
    }
    public function testGenDetect23()
    {
        $this->object->setSecondName('Андрійчук');
        $this->assertEquals('1-Андрійчук', $this->object->genderAutoDetect().'-Андрійчук');
    }
    public function testGenDetect24()
    {
        $this->object->setSecondName('Андрейко');
        $this->assertEquals('1-Андрейко', $this->object->genderAutoDetect().'-Андрейко');
    }
    public function testGenDetect25()
    {
        $this->object->setSecondName('Андрусів');
        $this->assertEquals('1-Андрусів', $this->object->genderAutoDetect().'-Андрусів');
    }
    public function testGenDetect26()
    {
        $this->object->setSecondName('Андрушків');
        $this->assertEquals('1-Андрушків', $this->object->genderAutoDetect().'-Андрушків');
    }
    public function testGenDetect27()
    {
        $this->object->setSecondName('Андрущенко');
        $this->assertEquals('1-Андрущенко', $this->object->genderAutoDetect().'-Андрущенко');
    }
    public function testGenDetect28()
    {
        $this->object->setSecondName('Анищенко');
        $this->assertEquals('1-Анищенко', $this->object->genderAutoDetect().'-Анищенко');
    }
    public function testGenDetect29()
    {
        $this->object->setSecondName('Антонюк');
        $this->assertEquals('1-Антонюк', $this->object->genderAutoDetect().'-Антонюк');
    }
    public function testGenDetect30()
    {
        $this->object->setSecondName('Арсенич');
        $this->assertEquals('1-Арсенич', $this->object->genderAutoDetect().'-Арсенич');
    }
    public function testGenDetect31()
    {
        $this->object->setSecondName('Артюх');
        $this->assertEquals('1-Артюх', $this->object->genderAutoDetect().'-Артюх');
    }
    public function testGenDetect32()
    {
        $this->object->setSecondName('Атаманчук');
        $this->assertEquals('1-Атаманчук', $this->object->genderAutoDetect().'-Атаманчук');
    }
    public function testGenDetect33()
    {
        $this->object->setSecondName('Біла');
        $this->assertEquals('1-Біла', $this->object->genderAutoDetect().'-Біла');
    }
    public function testGenDetect34()
    {
        $this->object->setSecondName('Білас');
        $this->assertEquals('1-Білас', $this->object->genderAutoDetect().'-Білас');
    }
    public function testGenDetect35()
    {
        $this->object->setSecondName('Білий');
        $this->assertEquals('1-Білий', $this->object->genderAutoDetect().'-Білий');
    }
    public function testGenDetect36()
    {
        $this->object->setSecondName('Білодід');
        $this->assertEquals('1-Білодід', $this->object->genderAutoDetect().'-Білодід');
    }
    public function testGenDetect37()
    {
        $this->object->setSecondName('Білоус');
        $this->assertEquals('1-Білоус', $this->object->genderAutoDetect().'-Білоус');
    }
    public function testGenDetect38()
    {
        $this->object->setSecondName('Бабійчук');
        $this->assertEquals('1-Бабійчук', $this->object->genderAutoDetect().'-Бабійчук');
    }
    public function testGenDetect39()
    {
        $this->object->setSecondName('Бабак');
        $this->assertEquals('1-Бабак', $this->object->genderAutoDetect().'-Бабак');
    }
    public function testGenDetect40()
    {
        $this->object->setSecondName('Бабчук');
        $this->assertEquals('1-Бабчук', $this->object->genderAutoDetect().'-Бабчук');
    }
    public function testGenDetect41()
    {
        $this->object->setSecondName('Багмут');
        $this->assertEquals('1-Багмут', $this->object->genderAutoDetect().'-Багмут');
    }
    public function testGenDetect42()
    {
        $this->object->setSecondName('Багрій');
        $this->assertEquals('1-Багрій', $this->object->genderAutoDetect().'-Багрій');
    }
    public function testGenDetect43()
    {
        $this->object->setSecondName('Бадлак');
        $this->assertEquals('1-Бадлак', $this->object->genderAutoDetect().'-Бадлак');
    }
    public function testGenDetect44()
    {
        $this->object->setSecondName('Бажан');
        $this->assertEquals('1-Бажан', $this->object->genderAutoDetect().'-Бажан');
    }
    public function testGenDetect45()
    {
        $this->object->setSecondName('Балтача');
        $this->assertEquals('1-Балтача', $this->object->genderAutoDetect().'-Балтача');
    }
    public function testGenDetect46()
    {
        $this->object->setSecondName('Бандура');
        $this->assertEquals('1-Бандура', $this->object->genderAutoDetect().'-Бандура');
    }
    public function testGenDetect47()
    {
        $this->object->setSecondName('Баран');
        $this->assertEquals('1-Баран', $this->object->genderAutoDetect().'-Баран');
    }
    public function testGenDetect48()
    {
        $this->object->setSecondName('Баранець');
        $this->assertEquals('1-Баранець', $this->object->genderAutoDetect().'-Баранець');
    }
    public function testGenDetect49()
    {
        $this->object->setSecondName('Барановський');
        $this->assertEquals('1-Барановський', $this->object->genderAutoDetect().'-Барановський');
    }
    public function testGenDetect50()
    {
        $this->object->setSecondName('Баранюк');
        $this->assertEquals('1-Баранюк', $this->object->genderAutoDetect().'-Баранюк');
    }
    public function testGenDetect51()
    {
        $this->object->setSecondName('Батюк');
        $this->assertEquals('1-Батюк', $this->object->genderAutoDetect().'-Батюк');
    }
    public function testGenDetect52()
    {
        $this->object->setSecondName('Бачинський');
        $this->assertEquals('1-Бачинський', $this->object->genderAutoDetect().'-Бачинський');
    }
    public function testGenDetect53()
    {
        $this->object->setSecondName('Бебешко');
        $this->assertEquals('1-Бебешко', $this->object->genderAutoDetect().'-Бебешко');
    }
    public function testGenDetect54()
    {
        $this->object->setSecondName('Бевзенко');
        $this->assertEquals('1-Бевзенко', $this->object->genderAutoDetect().'-Бевзенко');
    }
    public function testGenDetect55()
    {
        $this->object->setSecondName('Безбородьки');
        $this->assertEquals('1-Безбородьки', $this->object->genderAutoDetect().'-Безбородьки');
    }
    public function testGenDetect56()
    {
        $this->object->setSecondName('Березовчук');
        $this->assertEquals('1-Березовчук', $this->object->genderAutoDetect().'-Березовчук');
    }
    public function testGenDetect57()
    {
        $this->object->setSecondName('Блонські');
        $this->assertEquals('1-Блонські', $this->object->genderAutoDetect().'-Блонські');
    }
    public function testGenDetect58()
    {
        $this->object->setSecondName('Божик');
        $this->assertEquals('1-Божик', $this->object->genderAutoDetect().'-Божик');
    }
    public function testGenDetect59()
    {
        $this->object->setSecondName('Божко');
        $this->assertEquals('1-Божко', $this->object->genderAutoDetect().'-Божко');
    }
    public function testGenDetect60()
    {
        $this->object->setSecondName('Бойко');
        $this->assertEquals('1-Бойко', $this->object->genderAutoDetect().'-Бойко');
    }
    public function testGenDetect61()
    {
        $this->object->setSecondName('Бойцун');
        $this->assertEquals('1-Бойцун', $this->object->genderAutoDetect().'-Бойцун');
    }
    public function testGenDetect62()
    {
        $this->object->setSecondName('Бойчак');
        $this->assertEquals('1-Бойчак', $this->object->genderAutoDetect().'-Бойчак');
    }
    public function testGenDetect63()
    {
        $this->object->setSecondName('Бойчишин');
        $this->assertEquals('1-Бойчишин', $this->object->genderAutoDetect().'-Бойчишин');
    }
    public function testGenDetect64()
    {
        $this->object->setSecondName('Бойчук');
        $this->assertEquals('1-Бойчук', $this->object->genderAutoDetect().'-Бойчук');
    }
    public function testGenDetect65()
    {
        $this->object->setSecondName('Бондар');
        $this->assertEquals('1-Бондар', $this->object->genderAutoDetect().'-Бондар');
    }
    public function testGenDetect66()
    {
        $this->object->setSecondName('Бондаренко');
        $this->assertEquals('1-Бондаренко', $this->object->genderAutoDetect().'-Бондаренко');
    }
    public function testGenDetect67()
    {
        $this->object->setSecondName('Бондарчук');
        $this->assertEquals('1-Бондарчук', $this->object->genderAutoDetect().'-Бондарчук');
    }
    public function testGenDetect68()
    {
        $this->object->setSecondName('Борисенко');
        $this->assertEquals('1-Борисенко', $this->object->genderAutoDetect().'-Борисенко');
    }
    public function testGenDetect69()
    {
        $this->object->setSecondName('Борисикевич');
        $this->assertEquals('1-Борисикевич', $this->object->genderAutoDetect().'-Борисикевич');
    }
    public function testGenDetect70()
    {
        $this->object->setSecondName('Братусь');
        $this->assertEquals('1-Братусь', $this->object->genderAutoDetect().'-Братусь');
    }
    public function testGenDetect71()
    {
        $this->object->setSecondName('Букатевич');
        $this->assertEquals('1-Букатевич', $this->object->genderAutoDetect().'-Букатевич');
    }
    public function testGenDetect72()
    {
        $this->object->setSecondName('Бурбан');
        $this->assertEquals('1-Бурбан', $this->object->genderAutoDetect().'-Бурбан');
    }
    public function testGenDetect73()
    {
        $this->object->setSecondName('Бурячок');
        $this->assertEquals('1-Бурячок', $this->object->genderAutoDetect().'-Бурячок');
    }
    public function testGenDetect74()
    {
        $this->object->setSecondName('Бутейко');
        $this->assertEquals('1-Бутейко', $this->object->genderAutoDetect().'-Бутейко');
    }
    public function testGenDetect75()
    {
        $this->object->setSecondName('Бутенко');
        $this->assertEquals('1-Бутенко', $this->object->genderAutoDetect().'-Бутенко');
    }
    public function testGenDetect76()
    {
        $this->object->setSecondName('Бутник');
        $this->assertEquals('1-Бутник', $this->object->genderAutoDetect().'-Бутник');
    }
    public function testGenDetect77()
    {
        $this->object->setSecondName('Бутовичі');
        $this->assertEquals('1-Бутовичі', $this->object->genderAutoDetect().'-Бутовичі');
    }
    public function testGenDetect78()
    {
        $this->object->setSecondName('Бухало');
        $this->assertEquals('1-Бухало', $this->object->genderAutoDetect().'-Бухало');
    }
    public function testGenDetect79()
    {
        $this->object->setSecondName('Візерські');
        $this->assertEquals('1-Візерські', $this->object->genderAutoDetect().'-Візерські');
    }
    public function testGenDetect80()
    {
        $this->object->setSecondName('Василашко');
        $this->assertEquals('1-Василашко', $this->object->genderAutoDetect().'-Василашко');
    }
    public function testGenDetect81()
    {
        $this->object->setSecondName('Василенко');
        $this->assertEquals('1-Василенко', $this->object->genderAutoDetect().'-Василенко');
    }
    public function testGenDetect82()
    {
        $this->object->setSecondName('Васильченко');
        $this->assertEquals('1-Васильченко', $this->object->genderAutoDetect().'-Васильченко');
    }
    public function testGenDetect83()
    {
        $this->object->setSecondName('Васильчук');
        $this->assertEquals('1-Васильчук', $this->object->genderAutoDetect().'-Васильчук');
    }
    public function testGenDetect84()
    {
        $this->object->setSecondName('Васкул');
        $this->assertEquals('1-Васкул', $this->object->genderAutoDetect().'-Васкул');
    }
    public function testGenDetect85()
    {
        $this->object->setSecondName('Васьковичі');
        $this->assertEquals('1-Васьковичі', $this->object->genderAutoDetect().'-Васьковичі');
    }
    public function testGenDetect86()
    {
        $this->object->setSecondName('Вахній');
        $this->assertEquals('1-Вахній', $this->object->genderAutoDetect().'-Вахній');
    }
    public function testGenDetect87()
    {
        $this->object->setSecondName('Ващенко-Захарченко');
        $this->assertEquals('1-Ващенко-Захарченко', $this->object->genderAutoDetect().'-Ващенко-Захарченко');
    }
    public function testGenDetect88()
    {
        $this->object->setSecondName('Вдовиченко');
        $this->assertEquals('1-Вдовиченко', $this->object->genderAutoDetect().'-Вдовиченко');
    }
    public function testGenDetect89()
    {
        $this->object->setSecondName('Величко');
        $this->assertEquals('1-Величко', $this->object->genderAutoDetect().'-Величко');
    }
    public function testGenDetect90()
    {
        $this->object->setSecondName('Величковські');
        $this->assertEquals('1-Величковські', $this->object->genderAutoDetect().'-Величковські');
    }
    public function testGenDetect91()
    {
        $this->object->setSecondName('Вертипорох');
        $this->assertEquals('1-Вертипорох', $this->object->genderAutoDetect().'-Вертипорох');
    }
    public function testGenDetect92()
    {
        $this->object->setSecondName('Верхола');
        $this->assertEquals('1-Верхола', $this->object->genderAutoDetect().'-Верхола');
    }
    public function testGenDetect93()
    {
        $this->object->setSecondName('Винокур');
        $this->assertEquals('1-Винокур', $this->object->genderAutoDetect().'-Винокур');
    }
    public function testGenDetect94()
    {
        $this->object->setSecondName('Висоцькі');
        $this->assertEquals('1-Висоцькі', $this->object->genderAutoDetect().'-Висоцькі');
    }
    public function testGenDetect95()
    {
        $this->object->setSecondName('Вишневецькі');
        $this->assertEquals('1-Вишневецькі', $this->object->genderAutoDetect().'-Вишневецькі');
    }
    public function testGenDetect96()
    {
        $this->object->setSecondName('Влох');
        $this->assertEquals('1-Влох', $this->object->genderAutoDetect().'-Влох');
    }
    public function testGenDetect97()
    {
        $this->object->setSecondName('Воблий');
        $this->assertEquals('1-Воблий', $this->object->genderAutoDetect().'-Воблий');
    }
    public function testGenDetect98()
    {
        $this->object->setSecondName('Вовк');
        $this->assertEquals('1-Вовк', $this->object->genderAutoDetect().'-Вовк');
    }
    public function testGenDetect99()
    {
        $this->object->setSecondName('Возняк');
        $this->assertEquals('1-Возняк', $this->object->genderAutoDetect().'-Возняк');
    }
    public function testGenDetect100()
    {
        $this->object->setSecondName('Войнаровські');
        $this->assertEquals('1-Войнаровські', $this->object->genderAutoDetect().'-Войнаровські');
    }
    public function testGenDetect101()
    {
        $this->object->setSecondName('Волох');
        $this->assertEquals('1-Волох', $this->object->genderAutoDetect().'-Волох');
    }
    public function testGenDetect102()
    {
        $this->object->setSecondName('Волошин');
        $this->assertEquals('1-Волошин', $this->object->genderAutoDetect().'-Волошин');
    }
    public function testGenDetect103()
    {
        $this->object->setSecondName('Волощук');
        $this->assertEquals('1-Волощук', $this->object->genderAutoDetect().'-Волощук');
    }
    public function testGenDetect104()
    {
        $this->object->setSecondName('Вороновський');
        $this->assertEquals('1-Вороновський', $this->object->genderAutoDetect().'-Вороновський');
    }
    public function testGenDetect105()
    {
        $this->object->setSecondName('Гаврилів');
        $this->assertEquals('1-Гаврилів', $this->object->genderAutoDetect().'-Гаврилів');
    }
    public function testGenDetect106()
    {
        $this->object->setSecondName('Гавриленко');
        $this->assertEquals('1-Гавриленко', $this->object->genderAutoDetect().'-Гавриленко');
    }
    public function testGenDetect107()
    {
        $this->object->setSecondName('Гаврилюк');
        $this->assertEquals('1-Гаврилюк', $this->object->genderAutoDetect().'-Гаврилюк');
    }
    public function testGenDetect108()
    {
        $this->object->setSecondName('Галенковські');
        $this->assertEquals('1-Галенковські', $this->object->genderAutoDetect().'-Галенковські');
    }
    public function testGenDetect109()
    {
        $this->object->setSecondName('Гальченко');
        $this->assertEquals('1-Гальченко', $this->object->genderAutoDetect().'-Гальченко');
    }
    public function testGenDetect110()
    {
        $this->object->setSecondName('Гамалія');
        $this->assertEquals('1-Гамалія', $this->object->genderAutoDetect().'-Гамалія');
    }
    public function testGenDetect111()
    {
        $this->object->setSecondName('Ганицький');
        $this->assertEquals('1-Ганицький', $this->object->genderAutoDetect().'-Ганицький');
    }
    public function testGenDetect112()
    {
        $this->object->setSecondName('Гарань');
        $this->assertEquals('1-Гарань', $this->object->genderAutoDetect().'-Гарань');
    }
    public function testGenDetect113()
    {
        $this->object->setSecondName('Гармаш');
        $this->assertEquals('1-Гармаш', $this->object->genderAutoDetect().'-Гармаш');
    }
    public function testGenDetect114()
    {
        $this->object->setSecondName('Гасай');
        $this->assertEquals('1-Гасай', $this->object->genderAutoDetect().'-Гасай');
    }
    public function testGenDetect115()
    {
        $this->object->setSecondName('Гасюк');
        $this->assertEquals('1-Гасюк', $this->object->genderAutoDetect().'-Гасюк');
    }
    public function testGenDetect116()
    {
        $this->object->setSecondName('Герасименко');
        $this->assertEquals('1-Герасименко', $this->object->genderAutoDetect().'-Герасименко');
    }
    public function testGenDetect117()
    {
        $this->object->setSecondName('Геращенко');
        $this->assertEquals('1-Геращенко', $this->object->genderAutoDetect().'-Геращенко');
    }
    public function testGenDetect118()
    {
        $this->object->setSecondName('Герцик');
        $this->assertEquals('1-Герцик', $this->object->genderAutoDetect().'-Герцик');
    }
    public function testGenDetect119()
    {
        $this->object->setSecondName('Герцики');
        $this->assertEquals('1-Герцики', $this->object->genderAutoDetect().'-Герцики');
    }
    public function testGenDetect120()
    {
        $this->object->setSecondName('Гладченко');
        $this->assertEquals('1-Гладченко', $this->object->genderAutoDetect().'-Гладченко');
    }
    public function testGenDetect121()
    {
        $this->object->setSecondName('Глоба');
        $this->assertEquals('1-Глоба', $this->object->genderAutoDetect().'-Глоба');
    }
    public function testGenDetect122()
    {
        $this->object->setSecondName('Гнідичі');
        $this->assertEquals('1-Гнідичі', $this->object->genderAutoDetect().'-Гнідичі');
    }
    public function testGenDetect123()
    {
        $this->object->setSecondName('Гнатюк');
        $this->assertEquals('1-Гнатюк', $this->object->genderAutoDetect().'-Гнатюк');
    }
    public function testGenDetect124()
    {
        $this->object->setSecondName('Гоголі');
        $this->assertEquals('1-Гоголі', $this->object->genderAutoDetect().'-Гоголі');
    }
    public function testGenDetect125()
    {
        $this->object->setSecondName('Гоголь');
        $this->assertEquals('1-Гоголь', $this->object->genderAutoDetect().'-Гоголь');
    }
    public function testGenDetect126()
    {
        $this->object->setSecondName('Годунок');
        $this->assertEquals('1-Годунок', $this->object->genderAutoDetect().'-Годунок');
    }
    public function testGenDetect127()
    {
        $this->object->setSecondName('Головатий');
        $this->assertEquals('1-Головатий', $this->object->genderAutoDetect().'-Головатий');
    }
    public function testGenDetect128()
    {
        $this->object->setSecondName('Головко');
        $this->assertEquals('1-Головко', $this->object->genderAutoDetect().'-Головко');
    }
    public function testGenDetect129()
    {
        $this->object->setSecondName('Голуб');
        $this->assertEquals('1-Голуб', $this->object->genderAutoDetect().'-Голуб');
    }
    public function testGenDetect130()
    {
        $this->object->setSecondName('Голубничий');
        $this->assertEquals('1-Голубничий', $this->object->genderAutoDetect().'-Голубничий');
    }
    public function testGenDetect131()
    {
        $this->object->setSecondName('Гольшанські');
        $this->assertEquals('1-Гольшанські', $this->object->genderAutoDetect().'-Гольшанські');
    }
    public function testGenDetect132()
    {
        $this->object->setSecondName('Гонта');
        $this->assertEquals('1-Гонта', $this->object->genderAutoDetect().'-Гонта');
    }
    public function testGenDetect133()
    {
        $this->object->setSecondName('Гончар');
        $this->assertEquals('1-Гончар', $this->object->genderAutoDetect().'-Гончар');
    }
    public function testGenDetect134()
    {
        $this->object->setSecondName('Гончаренко');
        $this->assertEquals('1-Гончаренко', $this->object->genderAutoDetect().'-Гончаренко');
    }
    public function testGenDetect135()
    {
        $this->object->setSecondName('Гончаров');
        $this->assertEquals('1-Гончаров', $this->object->genderAutoDetect().'-Гончаров');
    }
    public function testGenDetect136()
    {
        $this->object->setSecondName('Горбаль');
        $this->assertEquals('1-Горбаль', $this->object->genderAutoDetect().'-Горбаль');
    }
    public function testGenDetect137()
    {
        $this->object->setSecondName('Гордієнко');
        $this->assertEquals('1-Гордієнко', $this->object->genderAutoDetect().'-Гордієнко');
    }
    public function testGenDetect138()
    {
        $this->object->setSecondName('Гординські');
        $this->assertEquals('1-Гординські', $this->object->genderAutoDetect().'-Гординські');
    }
    public function testGenDetect139()
    {
        $this->object->setSecondName('Гошовські');
        $this->assertEquals('1-Гошовські', $this->object->genderAutoDetect().'-Гошовські');
    }
    public function testGenDetect140()
    {
        $this->object->setSecondName('Гошовський');
        $this->assertEquals('1-Гошовський', $this->object->genderAutoDetect().'-Гошовський');
    }
    public function testGenDetect141()
    {
        $this->object->setSecondName('Грінченко');
        $this->assertEquals('1-Грінченко', $this->object->genderAutoDetect().'-Грінченко');
    }
    public function testGenDetect142()
    {
        $this->object->setSecondName('Грабович');
        $this->assertEquals('1-Грабович', $this->object->genderAutoDetect().'-Грабович');
    }
    public function testGenDetect143()
    {
        $this->object->setSecondName('Грабовський');
        $this->assertEquals('1-Грабовський', $this->object->genderAutoDetect().'-Грабовський');
    }
    public function testGenDetect144()
    {
        $this->object->setSecondName('Григоренко');
        $this->assertEquals('1-Григоренко', $this->object->genderAutoDetect().'-Григоренко');
    }
    public function testGenDetect145()
    {
        $this->object->setSecondName('Григорович');
        $this->assertEquals('1-Григорович', $this->object->genderAutoDetect().'-Григорович');
    }
    public function testGenDetect146()
    {
        $this->object->setSecondName('Григорович-Барський');
        $this->assertEquals('1-Григорович-Барський', $this->object->genderAutoDetect().'-Григорович-Барський');
    }
    public function testGenDetect147()
    {
        $this->object->setSecondName('Григорчук');
        $this->assertEquals('1-Григорчук', $this->object->genderAutoDetect().'-Григорчук');
    }
    public function testGenDetect148()
    {
        $this->object->setSecondName('Грицак');
        $this->assertEquals('1-Грицак', $this->object->genderAutoDetect().'-Грицак');
    }
    public function testGenDetect149()
    {
        $this->object->setSecondName('Гриценко');
        $this->assertEquals('1-Гриценко', $this->object->genderAutoDetect().'-Гриценко');
    }
    public function testGenDetect150()
    {
        $this->object->setSecondName('Гришко');
        $this->assertEquals('1-Гришко', $this->object->genderAutoDetect().'-Гришко');
    }
    public function testGenDetect151()
    {
        $this->object->setSecondName('Громики');
        $this->assertEquals('1-Громики', $this->object->genderAutoDetect().'-Громики');
    }
    public function testGenDetect152()
    {
        $this->object->setSecondName('Гудзій');
        $this->assertEquals('1-Гудзій', $this->object->genderAutoDetect().'-Гудзій');
    }
    public function testGenDetect153()
    {
        $this->object->setSecondName('Гудзь');
        $this->assertEquals('1-Гудзь', $this->object->genderAutoDetect().'-Гудзь');
    }
    public function testGenDetect154()
    {
        $this->object->setSecondName('Гуменюк');
        $this->assertEquals('1-Гуменюк', $this->object->genderAutoDetect().'-Гуменюк');
    }
    public function testGenDetect155()
    {
        $this->object->setSecondName('Гунько');
        $this->assertEquals('1-Гунько', $this->object->genderAutoDetect().'-Гунько');
    }
    public function testGenDetect156()
    {
        $this->object->setSecondName('Діденко');
        $this->assertEquals('1-Діденко', $this->object->genderAutoDetect().'-Діденко');
    }
    public function testGenDetect157()
    {
        $this->object->setSecondName('Даниленко');
        $this->assertEquals('1-Даниленко', $this->object->genderAutoDetect().'-Даниленко');
    }
    public function testGenDetect158()
    {
        $this->object->setSecondName('Даньків');
        $this->assertEquals('1-Даньків', $this->object->genderAutoDetect().'-Даньків');
    }
    public function testGenDetect159()
    {
        $this->object->setSecondName('Данькевич');
        $this->assertEquals('1-Данькевич', $this->object->genderAutoDetect().'-Данькевич');
    }
    public function testGenDetect160()
    {
        $this->object->setSecondName('Дараган');
        $this->assertEquals('1-Дараган', $this->object->genderAutoDetect().'-Дараган');
    }
    public function testGenDetect161()
    {
        $this->object->setSecondName('Дашкевич');
        $this->assertEquals('1-Дашкевич', $this->object->genderAutoDetect().'-Дашкевич');
    }
    public function testGenDetect162()
    {
        $this->object->setSecondName('Денисенко');
        $this->assertEquals('1-Денисенко', $this->object->genderAutoDetect().'-Денисенко');
    }
    public function testGenDetect163()
    {
        $this->object->setSecondName('Джус');
        $this->assertEquals('1-Джус', $this->object->genderAutoDetect().'-Джус');
    }
    public function testGenDetect164()
    {
        $this->object->setSecondName('Дзюба');
        $this->assertEquals('1-Дзюба', $this->object->genderAutoDetect().'-Дзюба');
    }
    public function testGenDetect165()
    {
        $this->object->setSecondName('Дикань');
        $this->assertEquals('1-Дикань', $this->object->genderAutoDetect().'-Дикань');
    }
    public function testGenDetect166()
    {
        $this->object->setSecondName('Дмитерко');
        $this->assertEquals('1-Дмитерко', $this->object->genderAutoDetect().'-Дмитерко');
    }
    public function testGenDetect167()
    {
        $this->object->setSecondName('Довженко');
        $this->assertEquals('1-Довженко', $this->object->genderAutoDetect().'-Довженко');
    }
    public function testGenDetect168()
    {
        $this->object->setSecondName('Домонтовичі');
        $this->assertEquals('1-Домонтовичі', $this->object->genderAutoDetect().'-Домонтовичі');
    }
    public function testGenDetect169()
    {
        $this->object->setSecondName('Дорош');
        $this->assertEquals('1-Дорош', $this->object->genderAutoDetect().'-Дорош');
    }
    public function testGenDetect170()
    {
        $this->object->setSecondName('Дорошенко');
        $this->assertEquals('1-Дорошенко', $this->object->genderAutoDetect().'-Дорошенко');
    }
    public function testGenDetect171()
    {
        $this->object->setSecondName('Доценко');
        $this->assertEquals('1-Доценко', $this->object->genderAutoDetect().'-Доценко');
    }
    public function testGenDetect172()
    {
        $this->object->setSecondName('Дочинець');
        $this->assertEquals('1-Дочинець', $this->object->genderAutoDetect().'-Дочинець');
    }
    public function testGenDetect173()
    {
        $this->object->setSecondName('Драгоманови');
        $this->assertEquals('1-Драгоманови', $this->object->genderAutoDetect().'-Драгоманови');
    }
    public function testGenDetect174()
    {
        $this->object->setSecondName('Дудко');
        $this->assertEquals('1-Дудко', $this->object->genderAutoDetect().'-Дудко');
    }
    public function testGenDetect175()
    {
        $this->object->setSecondName('Дунін-Борковські');
        $this->assertEquals('1-Дунін-Борковські', $this->object->genderAutoDetect().'-Дунін-Борковські');
    }
    public function testGenDetect176()
    {
        $this->object->setSecondName('Дяків');
        $this->assertEquals('1-Дяків', $this->object->genderAutoDetect().'-Дяків');
    }
    public function testGenDetect177()
    {
        $this->object->setSecondName('Дяченко');
        $this->assertEquals('1-Дяченко', $this->object->genderAutoDetect().'-Дяченко');
    }
    public function testGenDetect178()
    {
        $this->object->setSecondName('Ейбоженко');
        $this->assertEquals('1-Ейбоженко', $this->object->genderAutoDetect().'-Ейбоженко');
    }
    public function testGenDetect179()
    {
        $this->object->setSecondName('Жайворон');
        $this->assertEquals('1-Жайворон', $this->object->genderAutoDetect().'-Жайворон');
    }
    public function testGenDetect180()
    {
        $this->object->setSecondName('Жаліло');
        $this->assertEquals('1-Жаліло', $this->object->genderAutoDetect().'-Жаліло');
    }
    public function testGenDetect181()
    {
        $this->object->setSecondName('Ждановичі');
        $this->assertEquals('1-Ждановичі', $this->object->genderAutoDetect().'-Ждановичі');
    }
    public function testGenDetect182()
    {
        $this->object->setSecondName('Жежерін');
        $this->assertEquals('1-Жежерін', $this->object->genderAutoDetect().'-Жежерін');
    }
    public function testGenDetect183()
    {
        $this->object->setSecondName('Желєзняк');
        $this->assertEquals('1-Желєзняк', $this->object->genderAutoDetect().'-Желєзняк');
    }
    public function testGenDetect184()
    {
        $this->object->setSecondName('Железняк');
        $this->assertEquals('1-Железняк', $this->object->genderAutoDetect().'-Железняк');
    }
    public function testGenDetect185()
    {
        $this->object->setSecondName('Жилко');
        $this->assertEquals('1-Жилко', $this->object->genderAutoDetect().'-Жилко');
    }
    public function testGenDetect186()
    {
        $this->object->setSecondName('Жирко');
        $this->assertEquals('1-Жирко', $this->object->genderAutoDetect().'-Жирко');
    }
    public function testGenDetect187()
    {
        $this->object->setSecondName('Жук');
        $this->assertEquals('1-Жук', $this->object->genderAutoDetect().'-Жук');
    }
    public function testGenDetect188()
    {
        $this->object->setSecondName('Жупанський');
        $this->assertEquals('1-Жупанський', $this->object->genderAutoDetect().'-Жупанський');
    }
    public function testGenDetect189()
    {
        $this->object->setSecondName('Жураківські');
        $this->assertEquals('1-Жураківські', $this->object->genderAutoDetect().'-Жураківські');
    }
    public function testGenDetect190()
    {
        $this->object->setSecondName('Заєць');
        $this->assertEquals('1-Заєць', $this->object->genderAutoDetect().'-Заєць');
    }
    public function testGenDetect191()
    {
        $this->object->setSecondName('Забашта');
        $this->assertEquals('1-Забашта', $this->object->genderAutoDetect().'-Забашта');
    }
    public function testGenDetect192()
    {
        $this->object->setSecondName('Заболотний');
        $this->assertEquals('1-Заболотний', $this->object->genderAutoDetect().'-Заболотний');
    }
    public function testGenDetect193()
    {
        $this->object->setSecondName('Завальнюк');
        $this->assertEquals('1-Завальнюк', $this->object->genderAutoDetect().'-Завальнюк');
    }
    public function testGenDetect194()
    {
        $this->object->setSecondName('Закревські');
        $this->assertEquals('1-Закревські', $this->object->genderAutoDetect().'-Закревські');
    }
    public function testGenDetect195()
    {
        $this->object->setSecondName('Закусило');
        $this->assertEquals('1-Закусило', $this->object->genderAutoDetect().'-Закусило');
    }
    public function testGenDetect196()
    {
        $this->object->setSecondName('Залізняк');
        $this->assertEquals('1-Залізняк', $this->object->genderAutoDetect().'-Залізняк');
    }
    public function testGenDetect197()
    {
        $this->object->setSecondName('Заруба');
        $this->assertEquals('1-Заруба', $this->object->genderAutoDetect().'-Заруба');
    }
    public function testGenDetect198()
    {
        $this->object->setSecondName('Засядько');
        $this->assertEquals('1-Засядько', $this->object->genderAutoDetect().'-Засядько');
    }
    public function testGenDetect199()
    {
        $this->object->setSecondName('Захаренко');
        $this->assertEquals('1-Захаренко', $this->object->genderAutoDetect().'-Захаренко');
    }
    public function testGenDetect200()
    {
        $this->object->setSecondName('Захарчук');
        $this->assertEquals('1-Захарчук', $this->object->genderAutoDetect().'-Захарчук');
    }
    public function testGenDetect201()
    {
        $this->object->setSecondName('Заяць');
        $this->assertEquals('1-Заяць', $this->object->genderAutoDetect().'-Заяць');
    }
    public function testGenDetect202()
    {
        $this->object->setSecondName('Заячківський');
        $this->assertEquals('1-Заячківський', $this->object->genderAutoDetect().'-Заячківський');
    }
    public function testGenDetect203()
    {
        $this->object->setSecondName('Збаразькі');
        $this->assertEquals('1-Збаразькі', $this->object->genderAutoDetect().'-Збаразькі');
    }
    public function testGenDetect204()
    {
        $this->object->setSecondName('Зленко');
        $this->assertEquals('1-Зленко', $this->object->genderAutoDetect().'-Зленко');
    }
    public function testGenDetect205()
    {
        $this->object->setSecondName('Значко-Яворські');
        $this->assertEquals('1-Значко-Яворські', $this->object->genderAutoDetect().'-Значко-Яворські');
    }
    public function testGenDetect206()
    {
        $this->object->setSecondName('Золотаренко');
        $this->assertEquals('1-Золотаренко', $this->object->genderAutoDetect().'-Золотаренко');
    }
    public function testGenDetect207()
    {
        $this->object->setSecondName('Кабачок');
        $this->assertEquals('1-Кабачок', $this->object->genderAutoDetect().'-Кабачок');
    }
    public function testGenDetect208()
    {
        $this->object->setSecondName('Каганець');
        $this->assertEquals('1-Каганець', $this->object->genderAutoDetect().'-Каганець');
    }
    public function testGenDetect209()
    {
        $this->object->setSecondName('Калашники');
        $this->assertEquals('1-Калашники', $this->object->genderAutoDetect().'-Калашники');
    }
    public function testGenDetect210()
    {
        $this->object->setSecondName('Калинович');
        $this->assertEquals('1-Калинович', $this->object->genderAutoDetect().'-Калинович');
    }
    public function testGenDetect211()
    {
        $this->object->setSecondName('Кандиби');
        $this->assertEquals('1-Кандиби', $this->object->genderAutoDetect().'-Кандиби');
    }
    public function testGenDetect212()
    {
        $this->object->setSecondName('Карашевичі');
        $this->assertEquals('1-Карашевичі', $this->object->genderAutoDetect().'-Карашевичі');
    }
    public function testGenDetect213()
    {
        $this->object->setSecondName('Кармалюк');
        $this->assertEquals('1-Кармалюк', $this->object->genderAutoDetect().'-Кармалюк');
    }
    public function testGenDetect214()
    {
        $this->object->setSecondName('Карпенко');
        $this->assertEquals('1-Карпенко', $this->object->genderAutoDetect().'-Карпенко');
    }
    public function testGenDetect215()
    {
        $this->object->setSecondName('Кириленко');
        $this->assertEquals('1-Кириленко', $this->object->genderAutoDetect().'-Кириленко');
    }
    public function testGenDetect216()
    {
        $this->object->setSecondName('Кисилі');
        $this->assertEquals('1-Кисилі', $this->object->genderAutoDetect().'-Кисилі');
    }
    public function testGenDetect217()
    {
        $this->object->setSecondName('Китастий');
        $this->assertEquals('1-Китастий', $this->object->genderAutoDetect().'-Китастий');
    }
    public function testGenDetect218()
    {
        $this->object->setSecondName('Кицай');
        $this->assertEquals('1-Кицай', $this->object->genderAutoDetect().'-Кицай');
    }
    public function testGenDetect219()
    {
        $this->object->setSecondName('Клименко');
        $this->assertEquals('1-Клименко', $this->object->genderAutoDetect().'-Клименко');
    }
    public function testGenDetect220()
    {
        $this->object->setSecondName('Климчук');
        $this->assertEquals('1-Климчук', $this->object->genderAutoDetect().'-Климчук');
    }
    public function testGenDetect221()
    {
        $this->object->setSecondName('Кмета');
        $this->assertEquals('1-Кмета', $this->object->genderAutoDetect().'-Кмета');
    }
    public function testGenDetect222()
    {
        $this->object->setSecondName('Книш');
        $this->assertEquals('1-Книш', $this->object->genderAutoDetect().'-Книш');
    }
    public function testGenDetect223()
    {
        $this->object->setSecondName('Ковалів');
        $this->assertEquals('1-Ковалів', $this->object->genderAutoDetect().'-Ковалів');
    }
    public function testGenDetect224()
    {
        $this->object->setSecondName('Коваленко');
        $this->assertEquals('1-Коваленко', $this->object->genderAutoDetect().'-Коваленко');
    }
    public function testGenDetect225()
    {
        $this->object->setSecondName('Коваль');
        $this->assertEquals('1-Коваль', $this->object->genderAutoDetect().'-Коваль');
    }
    public function testGenDetect226()
    {
        $this->object->setSecondName('Ковальчик');
        $this->assertEquals('1-Ковальчик', $this->object->genderAutoDetect().'-Ковальчик');
    }
    public function testGenDetect227()
    {
        $this->object->setSecondName('Ковальчук');
        $this->assertEquals('1-Ковальчук', $this->object->genderAutoDetect().'-Ковальчук');
    }
    public function testGenDetect228()
    {
        $this->object->setSecondName('Кованько');
        $this->assertEquals('1-Кованько', $this->object->genderAutoDetect().'-Кованько');
    }
    public function testGenDetect229()
    {
        $this->object->setSecondName('Ковтун');
        $this->assertEquals('1-Ковтун', $this->object->genderAutoDetect().'-Ковтун');
    }
    public function testGenDetect230()
    {
        $this->object->setSecondName('Козаченко');
        $this->assertEquals('1-Козаченко', $this->object->genderAutoDetect().'-Козаченко');
    }
    public function testGenDetect231()
    {
        $this->object->setSecondName('Козачинський');
        $this->assertEquals('1-Козачинський', $this->object->genderAutoDetect().'-Козачинський');
    }
    public function testGenDetect232()
    {
        $this->object->setSecondName('Козачок');
        $this->assertEquals('1-Козачок', $this->object->genderAutoDetect().'-Козачок');
    }
    public function testGenDetect233()
    {
        $this->object->setSecondName('Козубенко');
        $this->assertEquals('1-Козубенко', $this->object->genderAutoDetect().'-Козубенко');
    }
    public function testGenDetect234()
    {
        $this->object->setSecondName('Колесник');
        $this->assertEquals('1-Колесник', $this->object->genderAutoDetect().'-Колесник');
    }
    public function testGenDetect235()
    {
        $this->object->setSecondName('Колодій');
        $this->assertEquals('1-Колодій', $this->object->genderAutoDetect().'-Колодій');
    }
    public function testGenDetect236()
    {
        $this->object->setSecondName('Колодний');
        $this->assertEquals('1-Колодний', $this->object->genderAutoDetect().'-Колодний');
    }
    public function testGenDetect237()
    {
        $this->object->setSecondName('Коломієць');
        $this->assertEquals('1-Коломієць', $this->object->genderAutoDetect().'-Коломієць');
    }
    public function testGenDetect238()
    {
        $this->object->setSecondName('Комар');
        $this->assertEquals('1-Комар', $this->object->genderAutoDetect().'-Комар');
    }
    public function testGenDetect239()
    {
        $this->object->setSecondName('Кондратюк');
        $this->assertEquals('1-Кондратюк', $this->object->genderAutoDetect().'-Кондратюк');
    }
    public function testGenDetect240()
    {
        $this->object->setSecondName('Кониські');
        $this->assertEquals('1-Кониські', $this->object->genderAutoDetect().'-Кониські');
    }
    public function testGenDetect241()
    {
        $this->object->setSecondName('Корецький');
        $this->assertEquals('1-Корецький', $this->object->genderAutoDetect().'-Корецький');
    }
    public function testGenDetect242()
    {
        $this->object->setSecondName('Корж');
        $this->assertEquals('1-Корж', $this->object->genderAutoDetect().'-Корж');
    }
    public function testGenDetect243()
    {
        $this->object->setSecondName('Корнійчук');
        $this->assertEquals('1-Корнійчук', $this->object->genderAutoDetect().'-Корнійчук');
    }
    public function testGenDetect244()
    {
        $this->object->setSecondName('Коробка');
        $this->assertEquals('1-Коробка', $this->object->genderAutoDetect().'-Коробка');
    }
    public function testGenDetect245()
    {
        $this->object->setSecondName('Королюк');
        $this->assertEquals('1-Королюк', $this->object->genderAutoDetect().'-Королюк');
    }
    public function testGenDetect246()
    {
        $this->object->setSecondName('Короткевич');
        $this->assertEquals('1-Короткевич', $this->object->genderAutoDetect().'-Короткевич');
    }
    public function testGenDetect247()
    {
        $this->object->setSecondName('Корпанюк');
        $this->assertEquals('1-Корпанюк', $this->object->genderAutoDetect().'-Корпанюк');
    }
    public function testGenDetect248()
    {
        $this->object->setSecondName('Корчак');
        $this->assertEquals('1-Корчак', $this->object->genderAutoDetect().'-Корчак');
    }
    public function testGenDetect249()
    {
        $this->object->setSecondName('Корчинський');
        $this->assertEquals('1-Корчинський', $this->object->genderAutoDetect().'-Корчинський');
    }
    public function testGenDetect250()
    {
        $this->object->setSecondName('Косенко');
        $this->assertEquals('1-Косенко', $this->object->genderAutoDetect().'-Косенко');
    }
    public function testGenDetect251()
    {
        $this->object->setSecondName('Костенко');
        $this->assertEquals('1-Костенко', $this->object->genderAutoDetect().'-Костенко');
    }
    public function testGenDetect252()
    {
        $this->object->setSecondName('Коструба');
        $this->assertEquals('1-Коструба', $this->object->genderAutoDetect().'-Коструба');
    }
    public function testGenDetect253()
    {
        $this->object->setSecondName('Костюк');
        $this->assertEquals('1-Костюк', $this->object->genderAutoDetect().'-Костюк');
    }
    public function testGenDetect254()
    {
        $this->object->setSecondName('Котляр');
        $this->assertEquals('1-Котляр', $this->object->genderAutoDetect().'-Котляр');
    }
    public function testGenDetect255()
    {
        $this->object->setSecondName('Котляревський');
        $this->assertEquals('1-Котляревський', $this->object->genderAutoDetect().'-Котляревський');
    }
    public function testGenDetect256()
    {
        $this->object->setSecondName('Кравців');
        $this->assertEquals('1-Кравців', $this->object->genderAutoDetect().'-Кравців');
    }
    public function testGenDetect257()
    {
        $this->object->setSecondName('Кравченко');
        $this->assertEquals('1-Кравченко', $this->object->genderAutoDetect().'-Кравченко');
    }
    public function testGenDetect258()
    {
        $this->object->setSecondName('Кравчук');
        $this->assertEquals('1-Кравчук', $this->object->genderAutoDetect().'-Кравчук');
    }
    public function testGenDetect259()
    {
        $this->object->setSecondName('Красовський');
        $this->assertEquals('1-Красовський', $this->object->genderAutoDetect().'-Красовський');
    }
    public function testGenDetect260()
    {
        $this->object->setSecondName('Криворучко');
        $this->assertEquals('1-Криворучко', $this->object->genderAutoDetect().'-Криворучко');
    }
    public function testGenDetect261()
    {
        $this->object->setSecondName('Крикуненко');
        $this->assertEquals('1-Крикуненко', $this->object->genderAutoDetect().'-Крикуненко');
    }
    public function testGenDetect262()
    {
        $this->object->setSecondName('Крупські');
        $this->assertEquals('1-Крупські', $this->object->genderAutoDetect().'-Крупські');
    }
    public function testGenDetect263()
    {
        $this->object->setSecondName('Кузьмінський');
        $this->assertEquals('1-Кузьмінський', $this->object->genderAutoDetect().'-Кузьмінський');
    }
    public function testGenDetect264()
    {
        $this->object->setSecondName('Кулиняк');
        $this->assertEquals('1-Кулиняк', $this->object->genderAutoDetect().'-Кулиняк');
    }
    public function testGenDetect265()
    {
        $this->object->setSecondName('Кульчицький');
        $this->assertEquals('1-Кульчицький', $this->object->genderAutoDetect().'-Кульчицький');
    }
    public function testGenDetect266()
    {
        $this->object->setSecondName('Купчинський');
        $this->assertEquals('1-Купчинський', $this->object->genderAutoDetect().'-Купчинський');
    }
    public function testGenDetect267()
    {
        $this->object->setSecondName('Курцевичі');
        $this->assertEquals('1-Курцевичі', $this->object->genderAutoDetect().'-Курцевичі');
    }
    public function testGenDetect268()
    {
        $this->object->setSecondName('Кухаренко');
        $this->assertEquals('1-Кухаренко', $this->object->genderAutoDetect().'-Кухаренко');
    }
    public function testGenDetect269()
    {
        $this->object->setSecondName('Куц');
        $this->assertEquals('1-Куц', $this->object->genderAutoDetect().'-Куц');
    }
    public function testGenDetect270()
    {
        $this->object->setSecondName('Куценко');
        $this->assertEquals('1-Куценко', $this->object->genderAutoDetect().'-Куценко');
    }
    public function testGenDetect271()
    {
        $this->object->setSecondName('Кучер');
        $this->assertEquals('1-Кучер', $this->object->genderAutoDetect().'-Кучер');
    }
    public function testGenDetect272()
    {
        $this->object->setSecondName('Кучеренко');
        $this->assertEquals('1-Кучеренко', $this->object->genderAutoDetect().'-Кучеренко');
    }
    public function testGenDetect273()
    {
        $this->object->setSecondName('Кушнір');
        $this->assertEquals('1-Кушнір', $this->object->genderAutoDetect().'-Кушнір');
    }
    public function testGenDetect274()
    {
        $this->object->setSecondName('Лаба');
        $this->assertEquals('1-Лаба', $this->object->genderAutoDetect().'-Лаба');
    }
    public function testGenDetect275()
    {
        $this->object->setSecondName('Лаврін');
        $this->assertEquals('1-Лаврін', $this->object->genderAutoDetect().'-Лаврін');
    }
    public function testGenDetect276()
    {
        $this->object->setSecondName('Лаврик');
        $this->assertEquals('1-Лаврик', $this->object->genderAutoDetect().'-Лаврик');
    }
    public function testGenDetect277()
    {
        $this->object->setSecondName('Лавриненко');
        $this->assertEquals('1-Лавриненко', $this->object->genderAutoDetect().'-Лавриненко');
    }
    public function testGenDetect278()
    {
        $this->object->setSecondName('Лазаревські');
        $this->assertEquals('1-Лазаревські', $this->object->genderAutoDetect().'-Лазаревські');
    }
    public function testGenDetect279()
    {
        $this->object->setSecondName('Лазарчук');
        $this->assertEquals('1-Лазарчук', $this->object->genderAutoDetect().'-Лазарчук');
    }
    public function testGenDetect280()
    {
        $this->object->setSecondName('Лазорко');
        $this->assertEquals('1-Лазорко', $this->object->genderAutoDetect().'-Лазорко');
    }
    public function testGenDetect281()
    {
        $this->object->setSecondName('Лашкевичі');
        $this->assertEquals('1-Лашкевичі', $this->object->genderAutoDetect().'-Лашкевичі');
    }
    public function testGenDetect282()
    {
        $this->object->setSecondName('Левицький');
        $this->assertEquals('1-Левицький', $this->object->genderAutoDetect().'-Левицький');
    }
    public function testGenDetect283()
    {
        $this->object->setSecondName('Левковські');
        $this->assertEquals('1-Левковські', $this->object->genderAutoDetect().'-Левковські');
    }
    public function testGenDetect284()
    {
        $this->object->setSecondName('Левченко');
        $this->assertEquals('1-Левченко', $this->object->genderAutoDetect().'-Левченко');
    }
    public function testGenDetect285()
    {
        $this->object->setSecondName('Леонтовичі');
        $this->assertEquals('1-Леонтовичі', $this->object->genderAutoDetect().'-Леонтовичі');
    }
    public function testGenDetect286()
    {
        $this->object->setSecondName('Лесів');
        $this->assertEquals('1-Лесів', $this->object->genderAutoDetect().'-Лесів');
    }
    public function testGenDetect287()
    {
        $this->object->setSecondName('Лесевичі');
        $this->assertEquals('1-Лесевичі', $this->object->genderAutoDetect().'-Лесевичі');
    }
    public function testGenDetect288()
    {
        $this->object->setSecondName('Лисенко');
        $this->assertEquals('1-Лисенко', $this->object->genderAutoDetect().'-Лисенко');
    }
    public function testGenDetect289()
    {
        $this->object->setSecondName('Литвин');
        $this->assertEquals('1-Литвин', $this->object->genderAutoDetect().'-Литвин');
    }
    public function testGenDetect290()
    {
        $this->object->setSecondName('Литвиненко');
        $this->assertEquals('1-Литвиненко', $this->object->genderAutoDetect().'-Литвиненко');
    }
    public function testGenDetect291()
    {
        $this->object->setSecondName('Литвинов');
        $this->assertEquals('1-Литвинов', $this->object->genderAutoDetect().'-Литвинов');
    }
    public function testGenDetect292()
    {
        $this->object->setSecondName('Литовченко');
        $this->assertEquals('1-Литовченко', $this->object->genderAutoDetect().'-Литовченко');
    }
    public function testGenDetect293()
    {
        $this->object->setSecondName('Лозина-Лозинський');
        $this->assertEquals('1-Лозина-Лозинський', $this->object->genderAutoDetect().'-Лозина-Лозинський');
    }
    public function testGenDetect294()
    {
        $this->object->setSecondName('Лопатинський');
        $this->assertEquals('1-Лопатинський', $this->object->genderAutoDetect().'-Лопатинський');
    }
    public function testGenDetect295()
    {
        $this->object->setSecondName('Лукашевичі');
        $this->assertEquals('1-Лукашевичі', $this->object->genderAutoDetect().'-Лукашевичі');
    }
    public function testGenDetect296()
    {
        $this->object->setSecondName('Лукомський');
        $this->assertEquals('1-Лукомський', $this->object->genderAutoDetect().'-Лукомський');
    }
    public function testGenDetect297()
    {
        $this->object->setSecondName('Луценко');
        $this->assertEquals('1-Луценко', $this->object->genderAutoDetect().'-Луценко');
    }
    public function testGenDetect298()
    {
        $this->object->setSecondName('Людкевич');
        $this->assertEquals('1-Людкевич', $this->object->genderAutoDetect().'-Людкевич');
    }
    public function testGenDetect299()
    {
        $this->object->setSecondName('Ляшенко');
        $this->assertEquals('1-Ляшенко', $this->object->genderAutoDetect().'-Ляшенко');
    }
    public function testGenDetect300()
    {
        $this->object->setSecondName('Мірошниченко');
        $this->assertEquals('1-Мірошниченко', $this->object->genderAutoDetect().'-Мірошниченко');
    }
    public function testGenDetect301()
    {
        $this->object->setSecondName('Мірчук');
        $this->assertEquals('1-Мірчук', $this->object->genderAutoDetect().'-Мірчук');
    }
    public function testGenDetect302()
    {
        $this->object->setSecondName('Міщенко');
        $this->assertEquals('1-Міщенко', $this->object->genderAutoDetect().'-Міщенко');
    }
    public function testGenDetect303()
    {
        $this->object->setSecondName('Мазаракі');
        $this->assertEquals('1-Мазаракі', $this->object->genderAutoDetect().'-Мазаракі');
    }
    public function testGenDetect304()
    {
        $this->object->setSecondName('Мазепи');
        $this->assertEquals('1-Мазепи', $this->object->genderAutoDetect().'-Мазепи');
    }
    public function testGenDetect305()
    {
        $this->object->setSecondName('Мазур');
        $this->assertEquals('1-Мазур', $this->object->genderAutoDetect().'-Мазур');
    }
    public function testGenDetect306()
    {
        $this->object->setSecondName('Макаренко');
        $this->assertEquals('1-Макаренко', $this->object->genderAutoDetect().'-Макаренко');
    }
    public function testGenDetect307()
    {
        $this->object->setSecondName('Максименко');
        $this->assertEquals('1-Максименко', $this->object->genderAutoDetect().'-Максименко');
    }
    public function testGenDetect308()
    {
        $this->object->setSecondName('Маланчук');
        $this->assertEquals('1-Маланчук', $this->object->genderAutoDetect().'-Маланчук');
    }
    public function testGenDetect309()
    {
        $this->object->setSecondName('Малаховські');
        $this->assertEquals('1-Малаховські', $this->object->genderAutoDetect().'-Малаховські');
    }
    public function testGenDetect310()
    {
        $this->object->setSecondName('Малишко');
        $this->assertEquals('1-Малишко', $this->object->genderAutoDetect().'-Малишко');
    }
    public function testGenDetect311()
    {
        $this->object->setSecondName('Малкович');
        $this->assertEquals('1-Малкович', $this->object->genderAutoDetect().'-Малкович');
    }
    public function testGenDetect312()
    {
        $this->object->setSecondName('Мамчур');
        $this->assertEquals('1-Мамчур', $this->object->genderAutoDetect().'-Мамчур');
    }
    public function testGenDetect313()
    {
        $this->object->setSecondName('Маркевич');
        $this->assertEquals('1-Маркевич', $this->object->genderAutoDetect().'-Маркевич');
    }
    public function testGenDetect314()
    {
        $this->object->setSecondName('Маркевичі');
        $this->assertEquals('1-Маркевичі', $this->object->genderAutoDetect().'-Маркевичі');
    }
    public function testGenDetect315()
    {
        $this->object->setSecondName('Мартиненко');
        $this->assertEquals('1-Мартиненко', $this->object->genderAutoDetect().'-Мартиненко');
    }
    public function testGenDetect316()
    {
        $this->object->setSecondName('Мартоси');
        $this->assertEquals('1-Мартоси', $this->object->genderAutoDetect().'-Мартоси');
    }
    public function testGenDetect317()
    {
        $this->object->setSecondName('Марунчак');
        $this->assertEquals('1-Марунчак', $this->object->genderAutoDetect().'-Марунчак');
    }
    public function testGenDetect318()
    {
        $this->object->setSecondName('Марценюк');
        $this->assertEquals('1-Марценюк', $this->object->genderAutoDetect().'-Марценюк');
    }
    public function testGenDetect319()
    {
        $this->object->setSecondName('Марченко');
        $this->assertEquals('1-Марченко', $this->object->genderAutoDetect().'-Марченко');
    }
    public function testGenDetect320()
    {
        $this->object->setSecondName('Марчук');
        $this->assertEquals('1-Марчук', $this->object->genderAutoDetect().'-Марчук');
    }
    public function testGenDetect321()
    {
        $this->object->setSecondName('Масоха');
        $this->assertEquals('1-Масоха', $this->object->genderAutoDetect().'-Масоха');
    }
    public function testGenDetect322()
    {
        $this->object->setSecondName('Матвієнко');
        $this->assertEquals('1-Матвієнко', $this->object->genderAutoDetect().'-Матвієнко');
    }
    public function testGenDetect323()
    {
        $this->object->setSecondName('Матюшенко');
        $this->assertEquals('1-Матюшенко', $this->object->genderAutoDetect().'-Матюшенко');
    }
    public function testGenDetect324()
    {
        $this->object->setSecondName('Маценко');
        $this->assertEquals('1-Маценко', $this->object->genderAutoDetect().'-Маценко');
    }
    public function testGenDetect325()
    {
        $this->object->setSecondName('Мацюк');
        $this->assertEquals('1-Мацюк', $this->object->genderAutoDetect().'-Мацюк');
    }
    public function testGenDetect326()
    {
        $this->object->setSecondName('Мельник');
        $this->assertEquals('1-Мельник', $this->object->genderAutoDetect().'-Мельник');
    }
    public function testGenDetect327()
    {
        $this->object->setSecondName('Мельниченко');
        $this->assertEquals('1-Мельниченко', $this->object->genderAutoDetect().'-Мельниченко');
    }
    public function testGenDetect328()
    {
        $this->object->setSecondName('Мельничук');
        $this->assertEquals('1-Мельничук', $this->object->genderAutoDetect().'-Мельничук');
    }
    public function testGenDetect329()
    {
        $this->object->setSecondName('Микитенко');
        $this->assertEquals('1-Микитенко', $this->object->genderAutoDetect().'-Микитенко');
    }
    public function testGenDetect330()
    {
        $this->object->setSecondName('Микитин');
        $this->assertEquals('1-Микитин', $this->object->genderAutoDetect().'-Микитин');
    }
    public function testGenDetect331()
    {
        $this->object->setSecondName('Милорадовичі');
        $this->assertEquals('1-Милорадовичі', $this->object->genderAutoDetect().'-Милорадовичі');
    }
    public function testGenDetect332()
    {
        $this->object->setSecondName('Мирон');
        $this->assertEquals('1-Мирон', $this->object->genderAutoDetect().'-Мирон');
    }
    public function testGenDetect333()
    {
        $this->object->setSecondName('Михайленко');
        $this->assertEquals('1-Михайленко', $this->object->genderAutoDetect().'-Михайленко');
    }
    public function testGenDetect334()
    {
        $this->object->setSecondName('Михайличенко');
        $this->assertEquals('1-Михайличенко', $this->object->genderAutoDetect().'-Михайличенко');
    }
    public function testGenDetect335()
    {
        $this->object->setSecondName('Михайлюк');
        $this->assertEquals('1-Михайлюк', $this->object->genderAutoDetect().'-Михайлюк');
    }
    public function testGenDetect336()
    {
        $this->object->setSecondName('Мицик');
        $this->assertEquals('1-Мицик', $this->object->genderAutoDetect().'-Мицик');
    }
    public function testGenDetect337()
    {
        $this->object->setSecondName('Мовчан');
        $this->assertEquals('1-Мовчан', $this->object->genderAutoDetect().'-Мовчан');
    }
    public function testGenDetect338()
    {
        $this->object->setSecondName('Могили');
        $this->assertEquals('1-Могили', $this->object->genderAutoDetect().'-Могили');
    }
    public function testGenDetect339()
    {
        $this->object->setSecondName('Модзалевські');
        $this->assertEquals('1-Модзалевські', $this->object->genderAutoDetect().'-Модзалевські');
    }
    public function testGenDetect340()
    {
        $this->object->setSecondName('Моргун');
        $this->assertEquals('1-Моргун', $this->object->genderAutoDetect().'-Моргун');
    }
    public function testGenDetect341()
    {
        $this->object->setSecondName('Мороз');
        $this->assertEquals('1-Мороз', $this->object->genderAutoDetect().'-Мороз');
    }
    public function testGenDetect342()
    {
        $this->object->setSecondName('Мосендзи');
        $this->assertEquals('1-Мосендзи', $this->object->genderAutoDetect().'-Мосендзи');
    }
    public function testGenDetect343()
    {
        $this->object->setSecondName('Москаленко');
        $this->assertEquals('1-Москаленко', $this->object->genderAutoDetect().'-Москаленко');
    }
    public function testGenDetect344()
    {
        $this->object->setSecondName('Москаль');
        $this->assertEquals('1-Москаль', $this->object->genderAutoDetect().'-Москаль');
    }
    public function testGenDetect345()
    {
        $this->object->setSecondName('Мошак');
        $this->assertEquals('1-Мошак', $this->object->genderAutoDetect().'-Мошак');
    }
    public function testGenDetect346()
    {
        $this->object->setSecondName('Муратова');
        $this->assertEquals('1-Муратова', $this->object->genderAutoDetect().'-Муратова');
    }
    public function testGenDetect347()
    {
        $this->object->setSecondName('Мусієнко');
        $this->assertEquals('1-Мусієнко', $this->object->genderAutoDetect().'-Мусієнко');
    }
    public function testGenDetect348()
    {
        $this->object->setSecondName('Назаренко');
        $this->assertEquals('1-Назаренко', $this->object->genderAutoDetect().'-Назаренко');
    }
    public function testGenDetect349()
    {
        $this->object->setSecondName('Наливайко');
        $this->assertEquals('1-Наливайко', $this->object->genderAutoDetect().'-Наливайко');
    }
    public function testGenDetect350()
    {
        $this->object->setSecondName('Нащинські');
        $this->assertEquals('1-Нащинські', $this->object->genderAutoDetect().'-Нащинські');
    }
    public function testGenDetect351()
    {
        $this->object->setSecondName('Негребецький');
        $this->assertEquals('1-Негребецький', $this->object->genderAutoDetect().'-Негребецький');
    }
    public function testGenDetect352()
    {
        $this->object->setSecondName('Непорожній');
        $this->assertEquals('1-Непорожній', $this->object->genderAutoDetect().'-Непорожній');
    }
    public function testGenDetect353()
    {
        $this->object->setSecondName('Нестеренко');
        $this->assertEquals('1-Нестеренко', $this->object->genderAutoDetect().'-Нестеренко');
    }
    public function testGenDetect354()
    {
        $this->object->setSecondName('Нечай');
        $this->assertEquals('1-Нечай', $this->object->genderAutoDetect().'-Нечай');
    }
    public function testGenDetect355()
    {
        $this->object->setSecondName('Нечипоренко');
        $this->assertEquals('1-Нечипоренко', $this->object->genderAutoDetect().'-Нечипоренко');
    }
    public function testGenDetect356()
    {
        $this->object->setSecondName('Оберемченко');
        $this->assertEquals('1-Оберемченко', $this->object->genderAutoDetect().'-Оберемченко');
    }
    public function testGenDetect357()
    {
        $this->object->setSecondName('Овчаренко');
        $this->assertEquals('1-Овчаренко', $this->object->genderAutoDetect().'-Овчаренко');
    }
    public function testGenDetect358()
    {
        $this->object->setSecondName('Ограновичі');
        $this->assertEquals('1-Ограновичі', $this->object->genderAutoDetect().'-Ограновичі');
    }
    public function testGenDetect359()
    {
        $this->object->setSecondName('Олійник');
        $this->assertEquals('1-Олійник', $this->object->genderAutoDetect().'-Олійник');
    }
    public function testGenDetect360()
    {
        $this->object->setSecondName('Олексієнко');
        $this->assertEquals('1-Олексієнко', $this->object->genderAutoDetect().'-Олексієнко');
    }
    public function testGenDetect361()
    {
        $this->object->setSecondName('Омельченко');
        $this->assertEquals('1-Омельченко', $this->object->genderAutoDetect().'-Омельченко');
    }
    public function testGenDetect362()
    {
        $this->object->setSecondName('Омельчук');
        $this->assertEquals('1-Омельчук', $this->object->genderAutoDetect().'-Омельчук');
    }
    public function testGenDetect363()
    {
        $this->object->setSecondName('Онищенко');
        $this->assertEquals('1-Онищенко', $this->object->genderAutoDetect().'-Онищенко');
    }
    public function testGenDetect364()
    {
        $this->object->setSecondName('Онопенко');
        $this->assertEquals('1-Онопенко', $this->object->genderAutoDetect().'-Онопенко');
    }
    public function testGenDetect365()
    {
        $this->object->setSecondName('Опанасенко');
        $this->assertEquals('1-Опанасенко', $this->object->genderAutoDetect().'-Опанасенко');
    }
    public function testGenDetect366()
    {
        $this->object->setSecondName('Орлики');
        $this->assertEquals('1-Орлики', $this->object->genderAutoDetect().'-Орлики');
    }
    public function testGenDetect367()
    {
        $this->object->setSecondName('Осадчук');
        $this->assertEquals('1-Осадчук', $this->object->genderAutoDetect().'-Осадчук');
    }
    public function testGenDetect368()
    {
        $this->object->setSecondName('Осика');
        $this->assertEquals('1-Осика', $this->object->genderAutoDetect().'-Осика');
    }
    public function testGenDetect369()
    {
        $this->object->setSecondName('Остапенко');
        $this->assertEquals('1-Остапенко', $this->object->genderAutoDetect().'-Остапенко');
    }
    public function testGenDetect370()
    {
        $this->object->setSecondName('Остроградський');
        $this->assertEquals('1-Остроградський', $this->object->genderAutoDetect().'-Остроградський');
    }
    public function testGenDetect371()
    {
        $this->object->setSecondName('Острозькі');
        $this->assertEquals('1-Острозькі', $this->object->genderAutoDetect().'-Острозькі');
    }
    public function testGenDetect372()
    {
        $this->object->setSecondName('Півторак');
        $this->assertEquals('1-Півторак', $this->object->genderAutoDetect().'-Півторак');
    }
    public function testGenDetect373()
    {
        $this->object->setSecondName('Підопригора');
        $this->assertEquals('1-Підопригора', $this->object->genderAutoDetect().'-Підопригора');
    }
    public function testGenDetect374()
    {
        $this->object->setSecondName('Павленко');
        $this->assertEquals('1-Павленко', $this->object->genderAutoDetect().'-Павленко');
    }
    public function testGenDetect375()
    {
        $this->object->setSecondName('Павлюк');
        $this->assertEquals('1-Павлюк', $this->object->genderAutoDetect().'-Павлюк');
    }
    public function testGenDetect376()
    {
        $this->object->setSecondName('Павлюченко');
        $this->assertEquals('1-Павлюченко', $this->object->genderAutoDetect().'-Павлюченко');
    }
    public function testGenDetect377()
    {
        $this->object->setSecondName('Пазенко');
        $this->assertEquals('1-Пазенко', $this->object->genderAutoDetect().'-Пазенко');
    }
    public function testGenDetect378()
    {
        $this->object->setSecondName('Паламарчук');
        $this->assertEquals('1-Паламарчук', $this->object->genderAutoDetect().'-Паламарчук');
    }
    public function testGenDetect379()
    {
        $this->object->setSecondName('Панас');
        $this->assertEquals('1-Панас', $this->object->genderAutoDetect().'-Панас');
    }
    public function testGenDetect380()
    {
        $this->object->setSecondName('Панасюк');
        $this->assertEquals('1-Панасюк', $this->object->genderAutoDetect().'-Панасюк');
    }
    public function testGenDetect381()
    {
        $this->object->setSecondName('Паньківський');
        $this->assertEquals('1-Паньківський', $this->object->genderAutoDetect().'-Паньківський');
    }
    public function testGenDetect382()
    {
        $this->object->setSecondName('Пархоменко');
        $this->assertEquals('1-Пархоменко', $this->object->genderAutoDetect().'-Пархоменко');
    }
    public function testGenDetect383()
    {
        $this->object->setSecondName('Пасічник');
        $this->assertEquals('1-Пасічник', $this->object->genderAutoDetect().'-Пасічник');
    }
    public function testGenDetect384()
    {
        $this->object->setSecondName('Пасько');
        $this->assertEquals('1-Пасько', $this->object->genderAutoDetect().'-Пасько');
    }
    public function testGenDetect385()
    {
        $this->object->setSecondName('Пашко');
        $this->assertEquals('1-Пашко', $this->object->genderAutoDetect().'-Пашко');
    }
    public function testGenDetect386()
    {
        $this->object->setSecondName('Пащенко');
        $this->assertEquals('1-Пащенко', $this->object->genderAutoDetect().'-Пащенко');
    }
    public function testGenDetect387()
    {
        $this->object->setSecondName('Перебийніс');
        $this->assertEquals('1-Перебийніс', $this->object->genderAutoDetect().'-Перебийніс');
    }
    public function testGenDetect388()
    {
        $this->object->setSecondName('Петренко');
        $this->assertEquals('1-Петренко', $this->object->genderAutoDetect().'-Петренко');
    }
    public function testGenDetect389()
    {
        $this->object->setSecondName('Пилипенко');
        $this->assertEquals('1-Пилипенко', $this->object->genderAutoDetect().'-Пилипенко');
    }
    public function testGenDetect390()
    {
        $this->object->setSecondName('Пилипишин');
        $this->assertEquals('1-Пилипишин', $this->object->genderAutoDetect().'-Пилипишин');
    }
    public function testGenDetect391()
    {
        $this->object->setSecondName('Пилипчук');
        $this->assertEquals('1-Пилипчук', $this->object->genderAutoDetect().'-Пилипчук');
    }
    public function testGenDetect392()
    {
        $this->object->setSecondName('Писаренко');
        $this->assertEquals('1-Писаренко', $this->object->genderAutoDetect().'-Писаренко');
    }
    public function testGenDetect393()
    {
        $this->object->setSecondName('Писарчук');
        $this->assertEquals('1-Писарчук', $this->object->genderAutoDetect().'-Писарчук');
    }
    public function testGenDetect394()
    {
        $this->object->setSecondName('Плющ');
        $this->assertEquals('1-Плющ', $this->object->genderAutoDetect().'-Плющ');
    }
    public function testGenDetect395()
    {
        $this->object->setSecondName('Покотило');
        $this->assertEquals('1-Покотило', $this->object->genderAutoDetect().'-Покотило');
    }
    public function testGenDetect396()
    {
        $this->object->setSecondName('Поліщук');
        $this->assertEquals('1-Поліщук', $this->object->genderAutoDetect().'-Поліщук');
    }
    public function testGenDetect397()
    {
        $this->object->setSecondName('Польовий');
        $this->assertEquals('1-Польовий', $this->object->genderAutoDetect().'-Польовий');
    }
    public function testGenDetect398()
    {
        $this->object->setSecondName('Полянський');
        $this->assertEquals('1-Полянський', $this->object->genderAutoDetect().'-Полянський');
    }
    public function testGenDetect399()
    {
        $this->object->setSecondName('Пономаренко');
        $this->assertEquals('1-Пономаренко', $this->object->genderAutoDetect().'-Пономаренко');
    }
    public function testGenDetect400()
    {
        $this->object->setSecondName('Пономарьов');
        $this->assertEquals('1-Пономарьов', $this->object->genderAutoDetect().'-Пономарьов');
    }
    public function testGenDetect401()
    {
        $this->object->setSecondName('Попадюк');
        $this->assertEquals('1-Попадюк', $this->object->genderAutoDetect().'-Попадюк');
    }
    public function testGenDetect402()
    {
        $this->object->setSecondName('Попенко');
        $this->assertEquals('1-Попенко', $this->object->genderAutoDetect().'-Попенко');
    }
    public function testGenDetect403()
    {
        $this->object->setSecondName('Потапенко');
        $this->assertEquals('1-Потапенко', $this->object->genderAutoDetect().'-Потапенко');
    }
    public function testGenDetect404()
    {
        $this->object->setSecondName('Потебенько');
        $this->assertEquals('1-Потебенько', $this->object->genderAutoDetect().'-Потебенько');
    }
    public function testGenDetect405()
    {
        $this->object->setSecondName('Прийма');
        $this->assertEquals('1-Прийма', $this->object->genderAutoDetect().'-Прийма');
    }
    public function testGenDetect406()
    {
        $this->object->setSecondName('Приймак');
        $this->assertEquals('1-Приймак', $this->object->genderAutoDetect().'-Приймак');
    }
    public function testGenDetect407()
    {
        $this->object->setSecondName('Присяжнюк');
        $this->assertEquals('1-Присяжнюк', $this->object->genderAutoDetect().'-Присяжнюк');
    }
    public function testGenDetect408()
    {
        $this->object->setSecondName('Приходько');
        $this->assertEquals('1-Приходько', $this->object->genderAutoDetect().'-Приходько');
    }
    public function testGenDetect409()
    {
        $this->object->setSecondName('Продан');
        $this->assertEquals('1-Продан', $this->object->genderAutoDetect().'-Продан');
    }
    public function testGenDetect410()
    {
        $this->object->setSecondName('Проценко');
        $this->assertEquals('1-Проценко', $this->object->genderAutoDetect().'-Проценко');
    }
    public function testGenDetect411()
    {
        $this->object->setSecondName('Проць');
        $this->assertEquals('1-Проць', $this->object->genderAutoDetect().'-Проць');
    }
    public function testGenDetect412()
    {
        $this->object->setSecondName('Процюк');
        $this->assertEquals('1-Процюк', $this->object->genderAutoDetect().'-Процюк');
    }
    public function testGenDetect413()
    {
        $this->object->setSecondName('Пушкар');
        $this->assertEquals('1-Пушкар', $this->object->genderAutoDetect().'-Пушкар');
    }
    public function testGenDetect414()
    {
        $this->object->setSecondName('Різенки');
        $this->assertEquals('1-Різенки', $this->object->genderAutoDetect().'-Різенки');
    }
    public function testGenDetect415()
    {
        $this->object->setSecondName('Різун');
        $this->assertEquals('1-Різун', $this->object->genderAutoDetect().'-Різун');
    }
    public function testGenDetect416()
    {
        $this->object->setSecondName('Радченко');
        $this->assertEquals('1-Радченко', $this->object->genderAutoDetect().'-Радченко');
    }
    public function testGenDetect417()
    {
        $this->object->setSecondName('Рибальченко');
        $this->assertEquals('1-Рибальченко', $this->object->genderAutoDetect().'-Рибальченко');
    }
    public function testGenDetect418()
    {
        $this->object->setSecondName('Римар');
        $this->assertEquals('1-Римар', $this->object->genderAutoDetect().'-Римар');
    }
    public function testGenDetect419()
    {
        $this->object->setSecondName('Родзянки');
        $this->assertEquals('1-Родзянки', $this->object->genderAutoDetect().'-Родзянки');
    }
    public function testGenDetect420()
    {
        $this->object->setSecondName('Рожок');
        $this->assertEquals('1-Рожок', $this->object->genderAutoDetect().'-Рожок');
    }
    public function testGenDetect421()
    {
        $this->object->setSecondName('Розумовські');
        $this->assertEquals('1-Розумовські', $this->object->genderAutoDetect().'-Розумовські');
    }
    public function testGenDetect422()
    {
        $this->object->setSecondName('Романенко');
        $this->assertEquals('1-Романенко', $this->object->genderAutoDetect().'-Романенко');
    }
    public function testGenDetect423()
    {
        $this->object->setSecondName('Романишин');
        $this->assertEquals('1-Романишин', $this->object->genderAutoDetect().'-Романишин');
    }
    public function testGenDetect424()
    {
        $this->object->setSecondName('Романчук');
        $this->assertEquals('1-Романчук', $this->object->genderAutoDetect().'-Романчук');
    }
    public function testGenDetect425()
    {
        $this->object->setSecondName('Романюк');
        $this->assertEquals('1-Романюк', $this->object->genderAutoDetect().'-Романюк');
    }
    public function testGenDetect426()
    {
        $this->object->setSecondName('Рошкевич');
        $this->assertEquals('1-Рошкевич', $this->object->genderAutoDetect().'-Рошкевич');
    }
    public function testGenDetect427()
    {
        $this->object->setSecondName('Рубан');
        $this->assertEquals('1-Рубан', $this->object->genderAutoDetect().'-Рубан');
    }
    public function testGenDetect428()
    {
        $this->object->setSecondName('Рубани');
        $this->assertEquals('1-Рубани', $this->object->genderAutoDetect().'-Рубани');
    }
    public function testGenDetect429()
    {
        $this->object->setSecondName('Руденко');
        $this->assertEquals('1-Руденко', $this->object->genderAutoDetect().'-Руденко');
    }
    public function testGenDetect430()
    {
        $this->object->setSecondName('Рябовіл');
        $this->assertEquals('1-Рябовіл', $this->object->genderAutoDetect().'-Рябовіл');
    }
    public function testGenDetect431()
    {
        $this->object->setSecondName('Сімашкевич');
        $this->assertEquals('1-Сімашкевич', $this->object->genderAutoDetect().'-Сімашкевич');
    }
    public function testGenDetect432()
    {
        $this->object->setSecondName('Саєнко');
        $this->assertEquals('1-Саєнко', $this->object->genderAutoDetect().'-Саєнко');
    }
    public function testGenDetect433()
    {
        $this->object->setSecondName('Савенко');
        $this->assertEquals('1-Савенко', $this->object->genderAutoDetect().'-Савенко');
    }
    public function testGenDetect434()
    {
        $this->object->setSecondName('Савицька');
        $this->assertEquals('1-Савицька', $this->object->genderAutoDetect().'-Савицька');
    }
    public function testGenDetect435()
    {
        $this->object->setSecondName('Савка');
        $this->assertEquals('1-Савка', $this->object->genderAutoDetect().'-Савка');
    }
    public function testGenDetect436()
    {
        $this->object->setSecondName('Савченко');
        $this->assertEquals('1-Савченко', $this->object->genderAutoDetect().'-Савченко');
    }
    public function testGenDetect437()
    {
        $this->object->setSecondName('Савчук');
        $this->assertEquals('1-Савчук', $this->object->genderAutoDetect().'-Савчук');
    }
    public function testGenDetect438()
    {
        $this->object->setSecondName('Сак');
        $this->assertEquals('1-Сак', $this->object->genderAutoDetect().'-Сак');
    }
    public function testGenDetect439()
    {
        $this->object->setSecondName('Самборський');
        $this->assertEquals('1-Самборський', $this->object->genderAutoDetect().'-Самборський');
    }
    public function testGenDetect440()
    {
        $this->object->setSecondName('Самойлович');
        $this->assertEquals('1-Самойлович', $this->object->genderAutoDetect().'-Самойлович');
    }
    public function testGenDetect441()
    {
        $this->object->setSecondName('Самусь');
        $this->assertEquals('1-Самусь', $this->object->genderAutoDetect().'-Самусь');
    }
    public function testGenDetect442()
    {
        $this->object->setSecondName('Свида');
        $this->assertEquals('1-Свида', $this->object->genderAutoDetect().'-Свида');
    }
    public function testGenDetect443()
    {
        $this->object->setSecondName('Семашко');
        $this->assertEquals('1-Семашко', $this->object->genderAutoDetect().'-Семашко');
    }
    public function testGenDetect444()
    {
        $this->object->setSecondName('Семененко');
        $this->assertEquals('1-Семененко', $this->object->genderAutoDetect().'-Семененко');
    }
    public function testGenDetect445()
    {
        $this->object->setSecondName('Семенець');
        $this->assertEquals('1-Семенець', $this->object->genderAutoDetect().'-Семенець');
    }
    public function testGenDetect446()
    {
        $this->object->setSecondName('Семенина');
        $this->assertEquals('1-Семенина', $this->object->genderAutoDetect().'-Семенина');
    }
    public function testGenDetect447()
    {
        $this->object->setSecondName('Семенченко');
        $this->assertEquals('1-Семенченко', $this->object->genderAutoDetect().'-Семенченко');
    }
    public function testGenDetect448()
    {
        $this->object->setSecondName('Семенюк');
        $this->assertEquals('1-Семенюк', $this->object->genderAutoDetect().'-Семенюк');
    }
    public function testGenDetect449()
    {
        $this->object->setSecondName('Семеренко');
        $this->assertEquals('1-Семеренко', $this->object->genderAutoDetect().'-Семеренко');
    }
    public function testGenDetect450()
    {
        $this->object->setSecondName('Сидоренко');
        $this->assertEquals('1-Сидоренко', $this->object->genderAutoDetect().'-Сидоренко');
    }
    public function testGenDetect451()
    {
        $this->object->setSecondName('Силенко');
        $this->assertEquals('1-Силенко', $this->object->genderAutoDetect().'-Силенко');
    }
    public function testGenDetect452()
    {
        $this->object->setSecondName('Симоненко');
        $this->assertEquals('1-Симоненко', $this->object->genderAutoDetect().'-Симоненко');
    }
    public function testGenDetect453()
    {
        $this->object->setSecondName('Симчич');
        $this->assertEquals('1-Симчич', $this->object->genderAutoDetect().'-Симчич');
    }
    public function testGenDetect454()
    {
        $this->object->setSecondName('Скаржинські');
        $this->assertEquals('1-Скаржинські', $this->object->genderAutoDetect().'-Скаржинські');
    }
    public function testGenDetect455()
    {
        $this->object->setSecondName('Скоропадські');
        $this->assertEquals('1-Скоропадські', $this->object->genderAutoDetect().'-Скоропадські');
    }
    public function testGenDetect456()
    {
        $this->object->setSecondName('Скрипник');
        $this->assertEquals('1-Скрипник', $this->object->genderAutoDetect().'-Скрипник');
    }
    public function testGenDetect457()
    {
        $this->object->setSecondName('Скуратівський');
        $this->assertEquals('1-Скуратівський', $this->object->genderAutoDetect().'-Скуратівський');
    }
    public function testGenDetect458()
    {
        $this->object->setSecondName('Слободян');
        $this->assertEquals('1-Слободян', $this->object->genderAutoDetect().'-Слободян');
    }
    public function testGenDetect459()
    {
        $this->object->setSecondName('Слободянюк');
        $this->assertEquals('1-Слободянюк', $this->object->genderAutoDetect().'-Слободянюк');
    }
    public function testGenDetect460()
    {
        $this->object->setSecondName('Смик');
        $this->assertEquals('1-Смик', $this->object->genderAutoDetect().'-Смик');
    }
    public function testGenDetect461()
    {
        $this->object->setSecondName('Смогоржевський');
        $this->assertEquals('1-Смогоржевський', $this->object->genderAutoDetect().'-Смогоржевський');
    }
    public function testGenDetect462()
    {
        $this->object->setSecondName('Собчук');
        $this->assertEquals('1-Собчук', $this->object->genderAutoDetect().'-Собчук');
    }
    public function testGenDetect463()
    {
        $this->object->setSecondName('Сопронюк');
        $this->assertEquals('1-Сопронюк', $this->object->genderAutoDetect().'-Сопронюк');
    }
    public function testGenDetect464()
    {
        $this->object->setSecondName('Сорока');
        $this->assertEquals('1-Сорока', $this->object->genderAutoDetect().'-Сорока');
    }
    public function testGenDetect465()
    {
        $this->object->setSecondName('Сохань');
        $this->assertEquals('1-Сохань', $this->object->genderAutoDetect().'-Сохань');
    }
    public function testGenDetect466()
    {
        $this->object->setSecondName('Стадник');
        $this->assertEquals('1-Стадник', $this->object->genderAutoDetect().'-Стадник');
    }
    public function testGenDetect467()
    {
        $this->object->setSecondName('Стельмах');
        $this->assertEquals('1-Стельмах', $this->object->genderAutoDetect().'-Стельмах');
    }
    public function testGenDetect468()
    {
        $this->object->setSecondName('Степаненко');
        $this->assertEquals('1-Степаненко', $this->object->genderAutoDetect().'-Степаненко');
    }
    public function testGenDetect469()
    {
        $this->object->setSecondName('Степура');
        $this->assertEquals('1-Степура', $this->object->genderAutoDetect().'-Степура');
    }
    public function testGenDetect470()
    {
        $this->object->setSecondName('Стеценко');
        $this->assertEquals('1-Стеценко', $this->object->genderAutoDetect().'-Стеценко');
    }
    public function testGenDetect471()
    {
        $this->object->setSecondName('Стецюк');
        $this->assertEquals('1-Стецюк', $this->object->genderAutoDetect().'-Стецюк');
    }
    public function testGenDetect472()
    {
        $this->object->setSecondName('Стороженки');
        $this->assertEquals('1-Стороженки', $this->object->genderAutoDetect().'-Стороженки');
    }
    public function testGenDetect473()
    {
        $this->object->setSecondName('Струтинський');
        $this->assertEquals('1-Струтинський', $this->object->genderAutoDetect().'-Струтинський');
    }
    public function testGenDetect474()
    {
        $this->object->setSecondName('Сулима');
        $this->assertEquals('1-Сулима', $this->object->genderAutoDetect().'-Сулима');
    }
    public function testGenDetect475()
    {
        $this->object->setSecondName('Сулими');
        $this->assertEquals('1-Сулими', $this->object->genderAutoDetect().'-Сулими');
    }
    public function testGenDetect476()
    {
        $this->object->setSecondName('Супруненко');
        $this->assertEquals('1-Супруненко', $this->object->genderAutoDetect().'-Супруненко');
    }
    public function testGenDetect477()
    {
        $this->object->setSecondName('Танські');
        $this->assertEquals('1-Танські', $this->object->genderAutoDetect().'-Танські');
    }
    public function testGenDetect478()
    {
        $this->object->setSecondName('Тараненко');
        $this->assertEquals('1-Тараненко', $this->object->genderAutoDetect().'-Тараненко');
    }
    public function testGenDetect479()
    {
        $this->object->setSecondName('Тарновські');
        $this->assertEquals('1-Тарновські', $this->object->genderAutoDetect().'-Тарновські');
    }
    public function testGenDetect480()
    {
        $this->object->setSecondName('Татаренко');
        $this->assertEquals('1-Татаренко', $this->object->genderAutoDetect().'-Татаренко');
    }
    public function testGenDetect481()
    {
        $this->object->setSecondName('Теплицький');
        $this->assertEquals('1-Теплицький', $this->object->genderAutoDetect().'-Теплицький');
    }
    public function testGenDetect482()
    {
        $this->object->setSecondName('Терещенко');
        $this->assertEquals('1-Терещенко', $this->object->genderAutoDetect().'-Терещенко');
    }
    public function testGenDetect483()
    {
        $this->object->setSecondName('Терещук');
        $this->assertEquals('1-Терещук', $this->object->genderAutoDetect().'-Терещук');
    }
    public function testGenDetect484()
    {
        $this->object->setSecondName('Тесленко');
        $this->assertEquals('1-Тесленко', $this->object->genderAutoDetect().'-Тесленко');
    }
    public function testGenDetect485()
    {
        $this->object->setSecondName('Тимошенко');
        $this->assertEquals('1-Тимошенко', $this->object->genderAutoDetect().'-Тимошенко');
    }
    public function testGenDetect486()
    {
        $this->object->setSecondName('Тимощук');
        $this->assertEquals('1-Тимощук', $this->object->genderAutoDetect().'-Тимощук');
    }
    public function testGenDetect487()
    {
        $this->object->setSecondName('Тимчак');
        $this->assertEquals('1-Тимчак', $this->object->genderAutoDetect().'-Тимчак');
    }
    public function testGenDetect488()
    {
        $this->object->setSecondName('Титаренко');
        $this->assertEquals('1-Титаренко', $this->object->genderAutoDetect().'-Титаренко');
    }
    public function testGenDetect489()
    {
        $this->object->setSecondName('Тишкевичі');
        $this->assertEquals('1-Тишкевичі', $this->object->genderAutoDetect().'-Тишкевичі');
    }
    public function testGenDetect490()
    {
        $this->object->setSecondName('Тищенко');
        $this->assertEquals('1-Тищенко', $this->object->genderAutoDetect().'-Тищенко');
    }
    public function testGenDetect491()
    {
        $this->object->setSecondName('Ткач');
        $this->assertEquals('1-Ткач', $this->object->genderAutoDetect().'-Ткач');
    }
    public function testGenDetect492()
    {
        $this->object->setSecondName('Ткаченко');
        $this->assertEquals('1-Ткаченко', $this->object->genderAutoDetect().'-Ткаченко');
    }
    public function testGenDetect493()
    {
        $this->object->setSecondName('Ткачук');
        $this->assertEquals('1-Ткачук', $this->object->genderAutoDetect().'-Ткачук');
    }
    public function testGenDetect494()
    {
        $this->object->setSecondName('Тобілевичі');
        $this->assertEquals('1-Тобілевичі', $this->object->genderAutoDetect().'-Тобілевичі');
    }
    public function testGenDetect495()
    {
        $this->object->setSecondName('Толочко');
        $this->assertEquals('1-Толочко', $this->object->genderAutoDetect().'-Толочко');
    }
    public function testGenDetect496()
    {
        $this->object->setSecondName('Томенко');
        $this->assertEquals('1-Томенко', $this->object->genderAutoDetect().'-Томенко');
    }
    public function testGenDetect497()
    {
        $this->object->setSecondName('Трощинські');
        $this->assertEquals('1-Трощинські', $this->object->genderAutoDetect().'-Трощинські');
    }
    public function testGenDetect498()
    {
        $this->object->setSecondName('Тулуб');
        $this->assertEquals('1-Тулуб', $this->object->genderAutoDetect().'-Тулуб');
    }
    public function testGenDetect499()
    {
        $this->object->setSecondName('Удовенко');
        $this->assertEquals('1-Удовенко', $this->object->genderAutoDetect().'-Удовенко');
    }
    public function testGenDetect500()
    {
        $this->object->setSecondName('Удовиченко');
        $this->assertEquals('1-Удовиченко', $this->object->genderAutoDetect().'-Удовиченко');
    }
    public function testGenDetect501()
    {
        $this->object->setSecondName('Усенко');
        $this->assertEquals('1-Усенко', $this->object->genderAutoDetect().'-Усенко');
    }
    public function testGenDetect502()
    {
        $this->object->setSecondName('Філоненко');
        $this->assertEquals('1-Філоненко', $this->object->genderAutoDetect().'-Філоненко');
    }
    public function testGenDetect503()
    {
        $this->object->setSecondName('Феденко');
        $this->assertEquals('1-Феденко', $this->object->genderAutoDetect().'-Феденко');
    }
    public function testGenDetect504()
    {
        $this->object->setSecondName('Федоренко');
        $this->assertEquals('1-Федоренко', $this->object->genderAutoDetect().'-Федоренко');
    }
    public function testGenDetect505()
    {
        $this->object->setSecondName('Федорук');
        $this->assertEquals('1-Федорук', $this->object->genderAutoDetect().'-Федорук');
    }
    public function testGenDetect506()
    {
        $this->object->setSecondName('Фещенко');
        $this->assertEquals('1-Фещенко', $this->object->genderAutoDetect().'-Фещенко');
    }
    public function testGenDetect507()
    {
        $this->object->setSecondName('Фоменко');
        $this->assertEquals('1-Фоменко', $this->object->genderAutoDetect().'-Фоменко');
    }
    public function testGenDetect508()
    {
        $this->object->setSecondName('Ханенки');
        $this->assertEquals('1-Ханенки', $this->object->genderAutoDetect().'-Ханенки');
    }
    public function testGenDetect509()
    {
        $this->object->setSecondName('Ханенко');
        $this->assertEquals('1-Ханенко', $this->object->genderAutoDetect().'-Ханенко');
    }
    public function testGenDetect510()
    {
        $this->object->setSecondName('Харитоненки');
        $this->assertEquals('1-Харитоненки', $this->object->genderAutoDetect().'-Харитоненки');
    }
    public function testGenDetect511()
    {
        $this->object->setSecondName('Харчук');
        $this->assertEquals('1-Харчук', $this->object->genderAutoDetect().'-Харчук');
    }
    public function testGenDetect512()
    {
        $this->object->setSecondName('Хміляр');
        $this->assertEquals('1-Хміляр', $this->object->genderAutoDetect().'-Хміляр');
    }
    public function testGenDetect513()
    {
        $this->object->setSecondName('Хмара');
        $this->assertEquals('1-Хмара', $this->object->genderAutoDetect().'-Хмара');
    }
    public function testGenDetect514()
    {
        $this->object->setSecondName('Хмельницькі');
        $this->assertEquals('1-Хмельницькі', $this->object->genderAutoDetect().'-Хмельницькі');
    }
    public function testGenDetect515()
    {
        $this->object->setSecondName('Холодовський');
        $this->assertEquals('1-Холодовський', $this->object->genderAutoDetect().'-Холодовський');
    }
    public function testGenDetect516()
    {
        $this->object->setSecondName('Хоменко');
        $this->assertEquals('1-Хоменко', $this->object->genderAutoDetect().'-Хоменко');
    }
    public function testGenDetect517()
    {
        $this->object->setSecondName('Царук');
        $this->assertEquals('1-Царук', $this->object->genderAutoDetect().'-Царук');
    }
    public function testGenDetect518()
    {
        $this->object->setSecondName('Цибуленко');
        $this->assertEquals('1-Цибуленко', $this->object->genderAutoDetect().'-Цибуленко');
    }
    public function testGenDetect519()
    {
        $this->object->setSecondName('Цюпа');
        $this->assertEquals('1-Цюпа', $this->object->genderAutoDetect().'-Цюпа');
    }
    public function testGenDetect520()
    {
        $this->object->setSecondName('Чабаненко');
        $this->assertEquals('1-Чабаненко', $this->object->genderAutoDetect().'-Чабаненко');
    }
    public function testGenDetect521()
    {
        $this->object->setSecondName('Чанов');
        $this->assertEquals('1-Чанов', $this->object->genderAutoDetect().'-Чанов');
    }
    public function testGenDetect522()
    {
        $this->object->setSecondName('Чередниченко');
        $this->assertEquals('1-Чередниченко', $this->object->genderAutoDetect().'-Чередниченко');
    }
    public function testGenDetect523()
    {
        $this->object->setSecondName('Чернявський');
        $this->assertEquals('1-Чернявський', $this->object->genderAutoDetect().'-Чернявський');
    }
    public function testGenDetect524()
    {
        $this->object->setSecondName('Чорний');
        $this->assertEquals('1-Чорний', $this->object->genderAutoDetect().'-Чорний');
    }
    public function testGenDetect525()
    {
        $this->object->setSecondName('Чорновіл');
        $this->assertEquals('1-Чорновіл', $this->object->genderAutoDetect().'-Чорновіл');
    }
    public function testGenDetect526()
    {
        $this->object->setSecondName('Чуйкевич');
        $this->assertEquals('1-Чуйкевич', $this->object->genderAutoDetect().'-Чуйкевич');
    }
    public function testGenDetect527()
    {
        $this->object->setSecondName('Чумак');
        $this->assertEquals('1-Чумак', $this->object->genderAutoDetect().'-Чумак');
    }
    public function testGenDetect528()
    {
        $this->object->setSecondName('Чумаченко');
        $this->assertEquals('1-Чумаченко', $this->object->genderAutoDetect().'-Чумаченко');
    }
    public function testGenDetect529()
    {
        $this->object->setSecondName('Шахрай');
        $this->assertEquals('1-Шахрай', $this->object->genderAutoDetect().'-Шахрай');
    }
    public function testGenDetect530()
    {
        $this->object->setSecondName('Шевченко');
        $this->assertEquals('1-Шевченко', $this->object->genderAutoDetect().'-Шевченко');
    }
    public function testGenDetect531()
    {
        $this->object->setSecondName('Шевчук');
        $this->assertEquals('1-Шевчук', $this->object->genderAutoDetect().'-Шевчук');
    }
    public function testGenDetect532()
    {
        $this->object->setSecondName('Шелест');
        $this->assertEquals('1-Шелест', $this->object->genderAutoDetect().'-Шелест');
    }
    public function testGenDetect533()
    {
        $this->object->setSecondName('Шептицькі');
        $this->assertEquals('1-Шептицькі', $this->object->genderAutoDetect().'-Шептицькі');
    }
    public function testGenDetect534()
    {
        $this->object->setSecondName('Шинкарук');
        $this->assertEquals('1-Шинкарук', $this->object->genderAutoDetect().'-Шинкарук');
    }
    public function testGenDetect535()
    {
        $this->object->setSecondName('Шкрібляк');
        $this->assertEquals('1-Шкрібляк', $this->object->genderAutoDetect().'-Шкрібляк');
    }
    public function testGenDetect536()
    {
        $this->object->setSecondName('Шнайдер');
        $this->assertEquals('1-Шнайдер', $this->object->genderAutoDetect().'-Шнайдер');
    }
    public function testGenDetect537()
    {
        $this->object->setSecondName('Шовкопляс');
        $this->assertEquals('1-Шовкопляс', $this->object->genderAutoDetect().'-Шовкопляс');
    }
    public function testGenDetect538()
    {
        $this->object->setSecondName('Шульга');
        $this->assertEquals('1-Шульга', $this->object->genderAutoDetect().'-Шульга');
    }
    public function testGenDetect539()
    {
        $this->object->setSecondName('Шухевич');
        $this->assertEquals('1-Шухевич', $this->object->genderAutoDetect().'-Шухевич');
    }
    public function testGenDetect540()
    {
        $this->object->setSecondName('Щерба');
        $this->assertEquals('1-Щерба', $this->object->genderAutoDetect().'-Щерба');
    }
    public function testGenDetect541()
    {
        $this->object->setSecondName('Щербак');
        $this->assertEquals('1-Щербак', $this->object->genderAutoDetect().'-Щербак');
    }
    public function testGenDetect542()
    {
        $this->object->setSecondName('Щербань');
        $this->assertEquals('1-Щербань', $this->object->genderAutoDetect().'-Щербань');
    }
    public function testGenDetect543()
    {
        $this->object->setSecondName('Юрженко');
        $this->assertEquals('1-Юрженко', $this->object->genderAutoDetect().'-Юрженко');
    }
    public function testGenDetect544()
    {
        $this->object->setSecondName('Юрченко');
        $this->assertEquals('1-Юрченко', $this->object->genderAutoDetect().'-Юрченко');
    }
    public function testGenDetect545()
    {
        $this->object->setSecondName('Юрчишин');
        $this->assertEquals('1-Юрчишин', $this->object->genderAutoDetect().'-Юрчишин');
    }
    public function testGenDetect546()
    {
        $this->object->setSecondName('Юхименко');
        $this->assertEquals('1-Юхименко', $this->object->genderAutoDetect().'-Юхименко');
    }
    public function testGenDetect547()
    {
        $this->object->setSecondName('Ющенко');
        $this->assertEquals('1-Ющенко', $this->object->genderAutoDetect().'-Ющенко');
    }
    public function testGenDetect548()
    {
        $this->object->setSecondName('Яковенко');
        $this->assertEquals('1-Яковенко', $this->object->genderAutoDetect().'-Яковенко');
    }
    public function testGenDetect549()
    {
        $this->object->setSecondName('Яковина');
        $this->assertEquals('1-Яковина', $this->object->genderAutoDetect().'-Яковина');
    }
    public function testGenDetect550()
    {
        $this->object->setSecondName('Янко');
        $this->assertEquals('1-Янко', $this->object->genderAutoDetect().'-Янко');
    }
    public function testGenDetect551()
    {
        $this->object->setSecondName('Ярема');
        $this->assertEquals('1-Ярема', $this->object->genderAutoDetect().'-Ярема');
    }
    public function testGenDetect552()
    {
        $this->object->setSecondName('Яременко');
        $this->assertEquals('1-Яременко', $this->object->genderAutoDetect().'-Яременко');
    }
    public function testGenDetect553()
    {
        $this->object->setSecondName('Яремко');
        $this->assertEquals('1-Яремко', $this->object->genderAutoDetect().'-Яремко');
    }
    public function testGenDetect554()
    {
        $this->object->setSecondName('Яремчук');
        $this->assertEquals('1-Яремчук', $this->object->genderAutoDetect().'-Яремчук');
    }
    public function testGenDetect555()
    {
        $this->object->setSecondName('Ярмоленко');
        $this->assertEquals('1-Ярмоленко', $this->object->genderAutoDetect().'-Ярмоленко');
    }
    public function testGenDetect556()
    {
        $this->object->setSecondName('Ярмолюк');
        $this->assertEquals('1-Ярмолюк', $this->object->genderAutoDetect().'-Ярмолюк');
    }
    public function testGenDetect557()
    {
        $this->object->setSecondName('Ярошенко');
        $this->assertEquals('1-Ярошенко', $this->object->genderAutoDetect().'-Ярошенко');
    }
    public function testGenDetect558()
    {
        $this->object->setSecondName('Яценко');
        $this->assertEquals('1-Яценко', $this->object->genderAutoDetect().'-Яценко');
    }
    public function testGenDetect559()
    {
        $this->object->setSecondName('Ященко');
        $this->assertEquals('1-Ященко', $this->object->genderAutoDetect().'-Ященко');
    }
    public function testGenDetect560()
    {
        $this->object->setSecondName('Ґалаґан');
        $this->assertEquals('1-Ґалаґан', $this->object->genderAutoDetect().'-Ґалаґан');
    }
    public function testGenDetect561()
    {
        $this->object->setSecondName('Євсєєв');
        $this->assertEquals('1-Євсєєв', $this->object->genderAutoDetect().'-Євсєєв');
    }
    public function testGenDetect562()
    {
        $this->object->setSecondName('Єгоров');
        $this->assertEquals('1-Єгоров', $this->object->genderAutoDetect().'-Єгоров');
    }
    public function testGenDetect563()
    {
        $this->object->setSecondName('Єлізаров');
        $this->assertEquals('1-Єлізаров', $this->object->genderAutoDetect().'-Єлізаров');
    }
    public function testGenDetect564()
    {
        $this->object->setSecondName('Єрмилов');
        $this->assertEquals('1-Єрмилов', $this->object->genderAutoDetect().'-Єрмилов');
    }
    public function testGenDetect565()
    {
        $this->object->setSecondName('Єрофєєв');
        $this->assertEquals('1-Єрофєєв', $this->object->genderAutoDetect().'-Єрофєєв');
    }
    public function testGenDetect566()
    {
        $this->object->setSecondName('Єршов');
        $this->assertEquals('1-Єршов', $this->object->genderAutoDetect().'-Єршов');
    }
    public function testGenDetect567()
    {
        $this->object->setSecondName('Єфімов');
        $this->assertEquals('1-Єфімов', $this->object->genderAutoDetect().'-Єфімов');
    }
    public function testGenDetect568()
    {
        $this->object->setSecondName('Єфремов');
        $this->assertEquals('1-Єфремов', $this->object->genderAutoDetect().'-Єфремов');
    }
    public function testGenDetect569()
    {
        $this->object->setSecondName('Іванов');
        $this->assertEquals('1-Іванов', $this->object->genderAutoDetect().'-Іванов');
    }
    public function testGenDetect570()
    {
        $this->object->setSecondName('Ігнатов');
        $this->assertEquals('1-Ігнатов', $this->object->genderAutoDetect().'-Ігнатов');
    }
    public function testGenDetect571()
    {
        $this->object->setSecondName('Іллюшин');
        $this->assertEquals('1-Іллюшин', $this->object->genderAutoDetect().'-Іллюшин');
    }
    public function testGenDetect572()
    {
        $this->object->setSecondName('Ільїн');
        $this->assertEquals('1-Ільїн', $this->object->genderAutoDetect().'-Ільїн');
    }
    public function testGenDetect573()
    {
        $this->object->setSecondName('Аєдоницький');
        $this->assertEquals('1-Аєдоницький', $this->object->genderAutoDetect().'-Аєдоницький');
    }
    public function testGenDetect574()
    {
        $this->object->setSecondName('Абатуров');
        $this->assertEquals('1-Абатуров', $this->object->genderAutoDetect().'-Абатуров');
    }
    public function testGenDetect575()
    {
        $this->object->setSecondName('Абдулов');
        $this->assertEquals('1-Абдулов', $this->object->genderAutoDetect().'-Абдулов');
    }
    public function testGenDetect576()
    {
        $this->object->setSecondName('Абрамов');
        $this->assertEquals('1-Абрамов', $this->object->genderAutoDetect().'-Абрамов');
    }
    public function testGenDetect577()
    {
        $this->object->setSecondName('Авілов');
        $this->assertEquals('1-Авілов', $this->object->genderAutoDetect().'-Авілов');
    }
    public function testGenDetect578()
    {
        $this->object->setSecondName('Авдєєнко');
        $this->assertEquals('1-Авдєєнко', $this->object->genderAutoDetect().'-Авдєєнко');
    }
    public function testGenDetect579()
    {
        $this->object->setSecondName('Аврамов');
        $this->assertEquals('1-Аврамов', $this->object->genderAutoDetect().'-Аврамов');
    }
    public function testGenDetect580()
    {
        $this->object->setSecondName('Алексєєв');
        $this->assertEquals('1-Алексєєв', $this->object->genderAutoDetect().'-Алексєєв');
    }
    public function testGenDetect581()
    {
        $this->object->setSecondName('Александров');
        $this->assertEquals('1-Александров', $this->object->genderAutoDetect().'-Александров');
    }
    public function testGenDetect582()
    {
        $this->object->setSecondName('Альошин');
        $this->assertEquals('1-Альошин', $this->object->genderAutoDetect().'-Альошин');
    }
    public function testGenDetect583()
    {
        $this->object->setSecondName('Анісімов');
        $this->assertEquals('1-Анісімов', $this->object->genderAutoDetect().'-Анісімов');
    }
    public function testGenDetect584()
    {
        $this->object->setSecondName('Анісов');
        $this->assertEquals('1-Анісов', $this->object->genderAutoDetect().'-Анісов');
    }
    public function testGenDetect585()
    {
        $this->object->setSecondName('Ананьєв');
        $this->assertEquals('1-Ананьєв', $this->object->genderAutoDetect().'-Ананьєв');
    }
    public function testGenDetect586()
    {
        $this->object->setSecondName('Андріанов');
        $this->assertEquals('1-Андріанов', $this->object->genderAutoDetect().'-Андріанов');
    }
    public function testGenDetect587()
    {
        $this->object->setSecondName('Андріяшев');
        $this->assertEquals('1-Андріяшев', $this->object->genderAutoDetect().'-Андріяшев');
    }
    public function testGenDetect588()
    {
        $this->object->setSecondName('Андреєв');
        $this->assertEquals('1-Андреєв', $this->object->genderAutoDetect().'-Андреєв');
    }
    public function testGenDetect589()
    {
        $this->object->setSecondName('Антипов');
        $this->assertEquals('1-Антипов', $this->object->genderAutoDetect().'-Антипов');
    }
    public function testGenDetect590()
    {
        $this->object->setSecondName('Антонов');
        $this->assertEquals('1-Антонов', $this->object->genderAutoDetect().'-Антонов');
    }
    public function testGenDetect591()
    {
        $this->object->setSecondName('Анциферов');
        $this->assertEquals('1-Анциферов', $this->object->genderAutoDetect().'-Анциферов');
    }
    public function testGenDetect592()
    {
        $this->object->setSecondName('Апухтін');
        $this->assertEquals('1-Апухтін', $this->object->genderAutoDetect().'-Апухтін');
    }
    public function testGenDetect593()
    {
        $this->object->setSecondName('Арбузов');
        $this->assertEquals('1-Арбузов', $this->object->genderAutoDetect().'-Арбузов');
    }
    public function testGenDetect594()
    {
        $this->object->setSecondName('Аржанов');
        $this->assertEquals('1-Аржанов', $this->object->genderAutoDetect().'-Аржанов');
    }
    public function testGenDetect595()
    {
        $this->object->setSecondName('Архипов');
        $this->assertEquals('1-Архипов', $this->object->genderAutoDetect().'-Архипов');
    }
    public function testGenDetect596()
    {
        $this->object->setSecondName('Арцибушев');
        $this->assertEquals('1-Арцибушев', $this->object->genderAutoDetect().'-Арцибушев');
    }
    public function testGenDetect597()
    {
        $this->object->setSecondName('Астраханцев');
        $this->assertEquals('1-Астраханцев', $this->object->genderAutoDetect().'-Астраханцев');
    }
    public function testGenDetect598()
    {
        $this->object->setSecondName('Афіногенов');
        $this->assertEquals('1-Афіногенов', $this->object->genderAutoDetect().'-Афіногенов');
    }
    public function testGenDetect599()
    {
        $this->object->setSecondName('Афанасьєв');
        $this->assertEquals('1-Афанасьєв', $this->object->genderAutoDetect().'-Афанасьєв');
    }
    public function testGenDetect600()
    {
        $this->object->setSecondName('Бєлов');
        $this->assertEquals('1-Бєлов', $this->object->genderAutoDetect().'-Бєлов');
    }
    public function testGenDetect601()
    {
        $this->object->setSecondName('Бєлоглазов');
        $this->assertEquals('1-Бєлоглазов', $this->object->genderAutoDetect().'-Бєлоглазов');
    }
    public function testGenDetect602()
    {
        $this->object->setSecondName('Бєлоусов');
        $this->assertEquals('1-Бєлоусов', $this->object->genderAutoDetect().'-Бєлоусов');
    }
    public function testGenDetect603()
    {
        $this->object->setSecondName('Бєляєв');
        $this->assertEquals('1-Бєляєв', $this->object->genderAutoDetect().'-Бєляєв');
    }
    public function testGenDetect604()
    {
        $this->object->setSecondName('Бібиков');
        $this->assertEquals('1-Бібиков', $this->object->genderAutoDetect().'-Бібиков');
    }
    public function testGenDetect605()
    {
        $this->object->setSecondName('Бажанов');
        $this->assertEquals('1-Бажанов', $this->object->genderAutoDetect().'-Бажанов');
    }
    public function testGenDetect606()
    {
        $this->object->setSecondName('Баранов');
        $this->assertEquals('1-Баранов', $this->object->genderAutoDetect().'-Баранов');
    }
    public function testGenDetect607()
    {
        $this->object->setSecondName('Баришніков');
        $this->assertEquals('1-Баришніков', $this->object->genderAutoDetect().'-Баришніков');
    }
    public function testGenDetect608()
    {
        $this->object->setSecondName('Барсов');
        $this->assertEquals('1-Барсов', $this->object->genderAutoDetect().'-Барсов');
    }
    public function testGenDetect609()
    {
        $this->object->setSecondName('Батюшков');
        $this->assertEquals('1-Батюшков', $this->object->genderAutoDetect().'-Батюшков');
    }
    public function testGenDetect610()
    {
        $this->object->setSecondName('Биков');
        $this->assertEquals('1-Биков', $this->object->genderAutoDetect().'-Биков');
    }
    public function testGenDetect611()
    {
        $this->object->setSecondName('Блохін');
        $this->assertEquals('1-Блохін', $this->object->genderAutoDetect().'-Блохін');
    }
    public function testGenDetect612()
    {
        $this->object->setSecondName('Бобров');
        $this->assertEquals('1-Бобров', $this->object->genderAutoDetect().'-Бобров');
    }
    public function testGenDetect613()
    {
        $this->object->setSecondName('Богданов');
        $this->assertEquals('1-Богданов', $this->object->genderAutoDetect().'-Богданов');
    }
    public function testGenDetect614()
    {
        $this->object->setSecondName('Богомазов');
        $this->assertEquals('1-Богомазов', $this->object->genderAutoDetect().'-Богомазов');
    }
    public function testGenDetect615()
    {
        $this->object->setSecondName('Бойков');
        $this->assertEquals('1-Бойков', $this->object->genderAutoDetect().'-Бойков');
    }
    public function testGenDetect616()
    {
        $this->object->setSecondName('Большаков');
        $this->assertEquals('1-Большаков', $this->object->genderAutoDetect().'-Большаков');
    }
    public function testGenDetect617()
    {
        $this->object->setSecondName('Борисов');
        $this->assertEquals('1-Борисов', $this->object->genderAutoDetect().'-Борисов');
    }
    public function testGenDetect618()
    {
        $this->object->setSecondName('Бочков');
        $this->assertEquals('1-Бочков', $this->object->genderAutoDetect().'-Бочков');
    }
    public function testGenDetect619()
    {
        $this->object->setSecondName('Бризгалов');
        $this->assertEquals('1-Бризгалов', $this->object->genderAutoDetect().'-Бризгалов');
    }
    public function testGenDetect620()
    {
        $this->object->setSecondName('Брусилов');
        $this->assertEquals('1-Брусилов', $this->object->genderAutoDetect().'-Брусилов');
    }
    public function testGenDetect621()
    {
        $this->object->setSecondName('Бутурлін');
        $this->assertEquals('1-Бутурлін', $this->object->genderAutoDetect().'-Бутурлін');
    }
    public function testGenDetect622()
    {
        $this->object->setSecondName('Бутусов');
        $this->assertEquals('1-Бутусов', $this->object->genderAutoDetect().'-Бутусов');
    }
    public function testGenDetect623()
    {
        $this->object->setSecondName('Варламов');
        $this->assertEquals('1-Варламов', $this->object->genderAutoDetect().'-Варламов');
    }
    public function testGenDetect624()
    {
        $this->object->setSecondName('Васильєв');
        $this->assertEquals('1-Васильєв', $this->object->genderAutoDetect().'-Васильєв');
    }
    public function testGenDetect625()
    {
        $this->object->setSecondName('Виноградов');
        $this->assertEquals('1-Виноградов', $this->object->genderAutoDetect().'-Виноградов');
    }
    public function testGenDetect626()
    {
        $this->object->setSecondName('Власов');
        $this->assertEquals('1-Власов', $this->object->genderAutoDetect().'-Власов');
    }
    public function testGenDetect627()
    {
        $this->object->setSecondName('Внуков');
        $this->assertEquals('1-Внуков', $this->object->genderAutoDetect().'-Внуков');
    }
    public function testGenDetect628()
    {
        $this->object->setSecondName('Волков');
        $this->assertEquals('1-Волков', $this->object->genderAutoDetect().'-Волков');
    }
    public function testGenDetect629()
    {
        $this->object->setSecondName('Воробей');
        $this->assertEquals('1-Воробей', $this->object->genderAutoDetect().'-Воробей');
    }
    public function testGenDetect630()
    {
        $this->object->setSecondName('Воробйов');
        $this->assertEquals('1-Воробйов', $this->object->genderAutoDetect().'-Воробйов');
    }
    public function testGenDetect631()
    {
        $this->object->setSecondName('Воронін');
        $this->assertEquals('1-Воронін', $this->object->genderAutoDetect().'-Воронін');
    }
    public function testGenDetect632()
    {
        $this->object->setSecondName('Воронцов');
        $this->assertEquals('1-Воронцов', $this->object->genderAutoDetect().'-Воронцов');
    }
    public function testGenDetect633()
    {
        $this->object->setSecondName('Ворошилов');
        $this->assertEquals('1-Ворошилов', $this->object->genderAutoDetect().'-Ворошилов');
    }
    public function testGenDetect634()
    {
        $this->object->setSecondName('Гаврилов');
        $this->assertEquals('1-Гаврилов', $this->object->genderAutoDetect().'-Гаврилов');
    }
    public function testGenDetect635()
    {
        $this->object->setSecondName('Герасимов');
        $this->assertEquals('1-Герасимов', $this->object->genderAutoDetect().'-Герасимов');
    }
    public function testGenDetect636()
    {
        $this->object->setSecondName('Горбунов');
        $this->assertEquals('1-Горбунов', $this->object->genderAutoDetect().'-Горбунов');
    }
    public function testGenDetect637()
    {
        $this->object->setSecondName('Горчаков');
        $this->assertEquals('1-Горчаков', $this->object->genderAutoDetect().'-Горчаков');
    }
    public function testGenDetect638()
    {
        $this->object->setSecondName('Горшков');
        $this->assertEquals('1-Горшков', $this->object->genderAutoDetect().'-Горшков');
    }
    public function testGenDetect639()
    {
        $this->object->setSecondName('Громов');
        $this->assertEquals('1-Громов', $this->object->genderAutoDetect().'-Громов');
    }
    public function testGenDetect640()
    {
        $this->object->setSecondName('Гусєв');
        $this->assertEquals('1-Гусєв', $this->object->genderAutoDetect().'-Гусєв');
    }
    public function testGenDetect641()
    {
        $this->object->setSecondName('Давидов');
        $this->assertEquals('1-Давидов', $this->object->genderAutoDetect().'-Давидов');
    }
    public function testGenDetect642()
    {
        $this->object->setSecondName('Данилов');
        $this->assertEquals('1-Данилов', $this->object->genderAutoDetect().'-Данилов');
    }
    public function testGenDetect643()
    {
        $this->object->setSecondName('Дементьєв');
        $this->assertEquals('1-Дементьєв', $this->object->genderAutoDetect().'-Дементьєв');
    }
    public function testGenDetect644()
    {
        $this->object->setSecondName('Денисов');
        $this->assertEquals('1-Денисов', $this->object->genderAutoDetect().'-Денисов');
    }
    public function testGenDetect645()
    {
        $this->object->setSecondName('Дмитрієв');
        $this->assertEquals('1-Дмитрієв', $this->object->genderAutoDetect().'-Дмитрієв');
    }
    public function testGenDetect646()
    {
        $this->object->setSecondName('Добролюбов');
        $this->assertEquals('1-Добролюбов', $this->object->genderAutoDetect().'-Добролюбов');
    }
    public function testGenDetect647()
    {
        $this->object->setSecondName('Донськой');
        $this->assertEquals('1-Донськой', $this->object->genderAutoDetect().'-Донськой');
    }
    public function testGenDetect648()
    {
        $this->object->setSecondName('Дорофєєв');
        $this->assertEquals('1-Дорофєєв', $this->object->genderAutoDetect().'-Дорофєєв');
    }
    public function testGenDetect649()
    {
        $this->object->setSecondName('Дубров');
        $this->assertEquals('1-Дубров', $this->object->genderAutoDetect().'-Дубров');
    }
    public function testGenDetect650()
    {
        $this->object->setSecondName('Железняков');
        $this->assertEquals('1-Железняков', $this->object->genderAutoDetect().'-Железняков');
    }
    public function testGenDetect651()
    {
        $this->object->setSecondName('Жердєв');
        $this->assertEquals('1-Жердєв', $this->object->genderAutoDetect().'-Жердєв');
    }
    public function testGenDetect652()
    {
        $this->object->setSecondName('Жуков');
        $this->assertEquals('1-Жуков', $this->object->genderAutoDetect().'-Жуков');
    }
    public function testGenDetect653()
    {
        $this->object->setSecondName('Журавльов');
        $this->assertEquals('1-Журавльов', $this->object->genderAutoDetect().'-Журавльов');
    }
    public function testGenDetect654()
    {
        $this->object->setSecondName('Заваров');
        $this->assertEquals('1-Заваров', $this->object->genderAutoDetect().'-Заваров');
    }
    public function testGenDetect655()
    {
        $this->object->setSecondName('Загаров');
        $this->assertEquals('1-Загаров', $this->object->genderAutoDetect().'-Загаров');
    }
    public function testGenDetect656()
    {
        $this->object->setSecondName('Зайцев');
        $this->assertEquals('1-Зайцев', $this->object->genderAutoDetect().'-Зайцев');
    }
    public function testGenDetect657()
    {
        $this->object->setSecondName('Захаров');
        $this->assertEquals('1-Захаров', $this->object->genderAutoDetect().'-Захаров');
    }
    public function testGenDetect658()
    {
        $this->object->setSecondName('Звєрєв');
        $this->assertEquals('1-Звєрєв', $this->object->genderAutoDetect().'-Звєрєв');
    }
    public function testGenDetect659()
    {
        $this->object->setSecondName('Зеров');
        $this->assertEquals('1-Зеров', $this->object->genderAutoDetect().'-Зеров');
    }
    public function testGenDetect660()
    {
        $this->object->setSecondName('Золотухін');
        $this->assertEquals('1-Золотухін', $this->object->genderAutoDetect().'-Золотухін');
    }
    public function testGenDetect661()
    {
        $this->object->setSecondName('Зубов');
        $this->assertEquals('1-Зубов', $this->object->genderAutoDetect().'-Зубов');
    }
    public function testGenDetect662()
    {
        $this->object->setSecondName('Казаков');
        $this->assertEquals('1-Казаков', $this->object->genderAutoDetect().'-Казаков');
    }
    public function testGenDetect663()
    {
        $this->object->setSecondName('Калінін');
        $this->assertEquals('1-Калінін', $this->object->genderAutoDetect().'-Калінін');
    }
    public function testGenDetect664()
    {
        $this->object->setSecondName('Калашников');
        $this->assertEquals('1-Калашников', $this->object->genderAutoDetect().'-Калашников');
    }
    public function testGenDetect665()
    {
        $this->object->setSecondName('Карпов');
        $this->assertEquals('1-Карпов', $this->object->genderAutoDetect().'-Карпов');
    }
    public function testGenDetect666()
    {
        $this->object->setSecondName('Каштанов');
        $this->assertEquals('1-Каштанов', $this->object->genderAutoDetect().'-Каштанов');
    }
    public function testGenDetect667()
    {
        $this->object->setSecondName('Кисельов');
        $this->assertEquals('1-Кисельов', $this->object->genderAutoDetect().'-Кисельов');
    }
    public function testGenDetect668()
    {
        $this->object->setSecondName('Ковальов');
        $this->assertEquals('1-Ковальов', $this->object->genderAutoDetect().'-Ковальов');
    }
    public function testGenDetect669()
    {
        $this->object->setSecondName('Кожевников');
        $this->assertEquals('1-Кожевников', $this->object->genderAutoDetect().'-Кожевников');
    }
    public function testGenDetect670()
    {
        $this->object->setSecondName('Козлов');
        $this->assertEquals('1-Козлов', $this->object->genderAutoDetect().'-Козлов');
    }
    public function testGenDetect671()
    {
        $this->object->setSecondName('Колесников');
        $this->assertEquals('1-Колесников', $this->object->genderAutoDetect().'-Колесников');
    }
    public function testGenDetect672()
    {
        $this->object->setSecondName('Кольцов');
        $this->assertEquals('1-Кольцов', $this->object->genderAutoDetect().'-Кольцов');
    }
    public function testGenDetect673()
    {
        $this->object->setSecondName('Комаров');
        $this->assertEquals('1-Комаров', $this->object->genderAutoDetect().'-Комаров');
    }
    public function testGenDetect674()
    {
        $this->object->setSecondName('Коновалов');
        $this->assertEquals('1-Коновалов', $this->object->genderAutoDetect().'-Коновалов');
    }
    public function testGenDetect675()
    {
        $this->object->setSecondName('Конюхов');
        $this->assertEquals('1-Конюхов', $this->object->genderAutoDetect().'-Конюхов');
    }
    public function testGenDetect676()
    {
        $this->object->setSecondName('Копилов');
        $this->assertEquals('1-Копилов', $this->object->genderAutoDetect().'-Копилов');
    }
    public function testGenDetect677()
    {
        $this->object->setSecondName('Кормильцев');
        $this->assertEquals('1-Кормильцев', $this->object->genderAutoDetect().'-Кормильцев');
    }
    public function testGenDetect678()
    {
        $this->object->setSecondName('Коробов');
        $this->assertEquals('1-Коробов', $this->object->genderAutoDetect().'-Коробов');
    }
    public function testGenDetect679()
    {
        $this->object->setSecondName('Коровкін');
        $this->assertEquals('1-Коровкін', $this->object->genderAutoDetect().'-Коровкін');
    }
    public function testGenDetect680()
    {
        $this->object->setSecondName('Корольов');
        $this->assertEquals('1-Корольов', $this->object->genderAutoDetect().'-Корольов');
    }
    public function testGenDetect681()
    {
        $this->object->setSecondName('Котов');
        $this->assertEquals('1-Котов', $this->object->genderAutoDetect().'-Котов');
    }
    public function testGenDetect682()
    {
        $this->object->setSecondName('Краснов');
        $this->assertEquals('1-Краснов', $this->object->genderAutoDetect().'-Краснов');
    }
    public function testGenDetect683()
    {
        $this->object->setSecondName('Крилов');
        $this->assertEquals('1-Крилов', $this->object->genderAutoDetect().'-Крилов');
    }
    public function testGenDetect684()
    {
        $this->object->setSecondName('Кримов');
        $this->assertEquals('1-Кримов', $this->object->genderAutoDetect().'-Кримов');
    }
    public function testGenDetect685()
    {
        $this->object->setSecondName('Крюков');
        $this->assertEquals('1-Крюков', $this->object->genderAutoDetect().'-Крюков');
    }
    public function testGenDetect686()
    {
        $this->object->setSecondName('Кудряшов');
        $this->assertEquals('1-Кудряшов', $this->object->genderAutoDetect().'-Кудряшов');
    }
    public function testGenDetect687()
    {
        $this->object->setSecondName('Кузнецов');
        $this->assertEquals('1-Кузнецов', $this->object->genderAutoDetect().'-Кузнецов');
    }
    public function testGenDetect688()
    {
        $this->object->setSecondName('Кузьмін');
        $this->assertEquals('1-Кузьмін', $this->object->genderAutoDetect().'-Кузьмін');
    }
    public function testGenDetect689()
    {
        $this->object->setSecondName('Кулаков');
        $this->assertEquals('1-Кулаков', $this->object->genderAutoDetect().'-Кулаков');
    }
    public function testGenDetect690()
    {
        $this->object->setSecondName('Куликов');
        $this->assertEquals('1-Куликов', $this->object->genderAutoDetect().'-Куликов');
    }
    public function testGenDetect691()
    {
        $this->object->setSecondName('Курков');
        $this->assertEquals('1-Курков', $this->object->genderAutoDetect().'-Курков');
    }
    public function testGenDetect692()
    {
        $this->object->setSecondName('Курочкін');
        $this->assertEquals('1-Курочкін', $this->object->genderAutoDetect().'-Курочкін');
    }
    public function testGenDetect693()
    {
        $this->object->setSecondName('Лєсков');
        $this->assertEquals('1-Лєсков', $this->object->genderAutoDetect().'-Лєсков');
    }
    public function testGenDetect694()
    {
        $this->object->setSecondName('Лідов');
        $this->assertEquals('1-Лідов', $this->object->genderAutoDetect().'-Лідов');
    }
    public function testGenDetect695()
    {
        $this->object->setSecondName('Ладигін');
        $this->assertEquals('1-Ладигін', $this->object->genderAutoDetect().'-Ладигін');
    }
    public function testGenDetect696()
    {
        $this->object->setSecondName('Лазарєв');
        $this->assertEquals('1-Лазарєв', $this->object->genderAutoDetect().'-Лазарєв');
    }
    public function testGenDetect697()
    {
        $this->object->setSecondName('Лебедєв');
        $this->assertEquals('1-Лебедєв', $this->object->genderAutoDetect().'-Лебедєв');
    }
    public function testGenDetect698()
    {
        $this->object->setSecondName('Лихоносов');
        $this->assertEquals('1-Лихоносов', $this->object->genderAutoDetect().'-Лихоносов');
    }
    public function testGenDetect699()
    {
        $this->object->setSecondName('Лосєв');
        $this->assertEquals('1-Лосєв', $this->object->genderAutoDetect().'-Лосєв');
    }
    public function testGenDetect700()
    {
        $this->object->setSecondName('Львов');
        $this->assertEquals('1-Львов', $this->object->genderAutoDetect().'-Львов');
    }
    public function testGenDetect701()
    {
        $this->object->setSecondName('Любимов');
        $this->assertEquals('1-Любимов', $this->object->genderAutoDetect().'-Любимов');
    }
    public function testGenDetect702()
    {
        $this->object->setSecondName('Мілютін');
        $this->assertEquals('1-Мілютін', $this->object->genderAutoDetect().'-Мілютін');
    }
    public function testGenDetect703()
    {
        $this->object->setSecondName('Макаров');
        $this->assertEquals('1-Макаров', $this->object->genderAutoDetect().'-Макаров');
    }
    public function testGenDetect704()
    {
        $this->object->setSecondName('Максимов');
        $this->assertEquals('1-Максимов', $this->object->genderAutoDetect().'-Максимов');
    }
    public function testGenDetect705()
    {
        $this->object->setSecondName('Малаков');
        $this->assertEquals('1-Малаков', $this->object->genderAutoDetect().'-Малаков');
    }
    public function testGenDetect706()
    {
        $this->object->setSecondName('Мамонов');
        $this->assertEquals('1-Мамонов', $this->object->genderAutoDetect().'-Мамонов');
    }
    public function testGenDetect707()
    {
        $this->object->setSecondName('Манасеїн');
        $this->assertEquals('1-Манасеїн', $this->object->genderAutoDetect().'-Манасеїн');
    }
    public function testGenDetect708()
    {
        $this->object->setSecondName('Марков');
        $this->assertEquals('1-Марков', $this->object->genderAutoDetect().'-Марков');
    }
    public function testGenDetect709()
    {
        $this->object->setSecondName('Мартенс');
        $this->assertEquals('1-Мартенс', $this->object->genderAutoDetect().'-Мартенс');
    }
    public function testGenDetect710()
    {
        $this->object->setSecondName('Мартинов');
        $this->assertEquals('1-Мартинов', $this->object->genderAutoDetect().'-Мартинов');
    }
    public function testGenDetect711()
    {
        $this->object->setSecondName('Масленніков');
        $this->assertEquals('1-Масленніков', $this->object->genderAutoDetect().'-Масленніков');
    }
    public function testGenDetect712()
    {
        $this->object->setSecondName('Маслов');
        $this->assertEquals('1-Маслов', $this->object->genderAutoDetect().'-Маслов');
    }
    public function testGenDetect713()
    {
        $this->object->setSecondName('Матвєєв');
        $this->assertEquals('1-Матвєєв', $this->object->genderAutoDetect().'-Матвєєв');
    }
    public function testGenDetect714()
    {
        $this->object->setSecondName('Медведєв');
        $this->assertEquals('1-Медведєв', $this->object->genderAutoDetect().'-Медведєв');
    }
    public function testGenDetect715()
    {
        $this->object->setSecondName('Мельников');
        $this->assertEquals('1-Мельников', $this->object->genderAutoDetect().'-Мельников');
    }
    public function testGenDetect716()
    {
        $this->object->setSecondName('Миронов');
        $this->assertEquals('1-Миронов', $this->object->genderAutoDetect().'-Миронов');
    }
    public function testGenDetect717()
    {
        $this->object->setSecondName('Михайлов');
        $this->assertEquals('1-Михайлов', $this->object->genderAutoDetect().'-Михайлов');
    }
    public function testGenDetect718()
    {
        $this->object->setSecondName('Моїсєєв');
        $this->assertEquals('1-Моїсєєв', $this->object->genderAutoDetect().'-Моїсєєв');
    }
    public function testGenDetect719()
    {
        $this->object->setSecondName('Моргунов');
        $this->assertEquals('1-Моргунов', $this->object->genderAutoDetect().'-Моргунов');
    }
    public function testGenDetect720()
    {
        $this->object->setSecondName('Морков');
        $this->assertEquals('1-Морков', $this->object->genderAutoDetect().'-Морков');
    }
    public function testGenDetect721()
    {
        $this->object->setSecondName('Морозов');
        $this->assertEquals('1-Морозов', $this->object->genderAutoDetect().'-Морозов');
    }
    public function testGenDetect722()
    {
        $this->object->setSecondName('Мухін');
        $this->assertEquals('1-Мухін', $this->object->genderAutoDetect().'-Мухін');
    }
    public function testGenDetect723()
    {
        $this->object->setSecondName('Нікітін');
        $this->assertEquals('1-Нікітін', $this->object->genderAutoDetect().'-Нікітін');
    }
    public function testGenDetect724()
    {
        $this->object->setSecondName('Ніколаєв');
        $this->assertEquals('1-Ніколаєв', $this->object->genderAutoDetect().'-Ніколаєв');
    }
    public function testGenDetect725()
    {
        $this->object->setSecondName('Нікулін');
        $this->assertEquals('1-Нікулін', $this->object->genderAutoDetect().'-Нікулін');
    }
    public function testGenDetect726()
    {
        $this->object->setSecondName('Набоков');
        $this->assertEquals('1-Набоков', $this->object->genderAutoDetect().'-Набоков');
    }
    public function testGenDetect727()
    {
        $this->object->setSecondName('Некрасов');
        $this->assertEquals('1-Некрасов', $this->object->genderAutoDetect().'-Некрасов');
    }
    public function testGenDetect728()
    {
        $this->object->setSecondName('Новиков');
        $this->assertEquals('1-Новиков', $this->object->genderAutoDetect().'-Новиков');
    }
    public function testGenDetect729()
    {
        $this->object->setSecondName('Орлов');
        $this->assertEquals('1-Орлов', $this->object->genderAutoDetect().'-Орлов');
    }
    public function testGenDetect730()
    {
        $this->object->setSecondName('Осипов');
        $this->assertEquals('1-Осипов', $this->object->genderAutoDetect().'-Осипов');
    }
    public function testGenDetect731()
    {
        $this->object->setSecondName('Павлов');
        $this->assertEquals('1-Павлов', $this->object->genderAutoDetect().'-Павлов');
    }
    public function testGenDetect732()
    {
        $this->object->setSecondName('Павлушков');
        $this->assertEquals('1-Павлушков', $this->object->genderAutoDetect().'-Павлушков');
    }
    public function testGenDetect733()
    {
        $this->object->setSecondName('Панов');
        $this->assertEquals('1-Панов', $this->object->genderAutoDetect().'-Панов');
    }
    public function testGenDetect734()
    {
        $this->object->setSecondName('Петров');
        $this->assertEquals('1-Петров', $this->object->genderAutoDetect().'-Петров');
    }
    public function testGenDetect735()
    {
        $this->object->setSecondName('Пильчиков');
        $this->assertEquals('1-Пильчиков', $this->object->genderAutoDetect().'-Пильчиков');
    }
    public function testGenDetect736()
    {
        $this->object->setSecondName('Платонов');
        $this->assertEquals('1-Платонов', $this->object->genderAutoDetect().'-Платонов');
    }
    public function testGenDetect737()
    {
        $this->object->setSecondName('Плеханов');
        $this->assertEquals('1-Плеханов', $this->object->genderAutoDetect().'-Плеханов');
    }
    public function testGenDetect738()
    {
        $this->object->setSecondName('Поляков');
        $this->assertEquals('1-Поляков', $this->object->genderAutoDetect().'-Поляков');
    }
    public function testGenDetect739()
    {
        $this->object->setSecondName('Попов');
        $this->assertEquals('1-Попов', $this->object->genderAutoDetect().'-Попов');
    }
    public function testGenDetect740()
    {
        $this->object->setSecondName('Поярков');
        $this->assertEquals('1-Поярков', $this->object->genderAutoDetect().'-Поярков');
    }
    public function testGenDetect741()
    {
        $this->object->setSecondName('Пригунов');
        $this->assertEquals('1-Пригунов', $this->object->genderAutoDetect().'-Пригунов');
    }
    public function testGenDetect742()
    {
        $this->object->setSecondName('Прошкін');
        $this->assertEquals('1-Прошкін', $this->object->genderAutoDetect().'-Прошкін');
    }
    public function testGenDetect743()
    {
        $this->object->setSecondName('Решетников');
        $this->assertEquals('1-Решетников', $this->object->genderAutoDetect().'-Решетников');
    }
    public function testGenDetect744()
    {
        $this->object->setSecondName('Рожков');
        $this->assertEquals('1-Рожков', $this->object->genderAutoDetect().'-Рожков');
    }
    public function testGenDetect745()
    {
        $this->object->setSecondName('Романов');
        $this->assertEquals('1-Романов', $this->object->genderAutoDetect().'-Романов');
    }
    public function testGenDetect746()
    {
        $this->object->setSecondName('Рябов');
        $this->assertEquals('1-Рябов', $this->object->genderAutoDetect().'-Рябов');
    }
    public function testGenDetect747()
    {
        $this->object->setSecondName('Саблін');
        $this->assertEquals('1-Саблін', $this->object->genderAutoDetect().'-Саблін');
    }
    public function testGenDetect748()
    {
        $this->object->setSecondName('Савін');
        $this->assertEquals('1-Савін', $this->object->genderAutoDetect().'-Савін');
    }
    public function testGenDetect749()
    {
        $this->object->setSecondName('Сазонов');
        $this->assertEquals('1-Сазонов', $this->object->genderAutoDetect().'-Сазонов');
    }
    public function testGenDetect750()
    {
        $this->object->setSecondName('Сальников');
        $this->assertEquals('1-Сальников', $this->object->genderAutoDetect().'-Сальников');
    }
    public function testGenDetect751()
    {
        $this->object->setSecondName('Самойлов');
        $this->assertEquals('1-Самойлов', $this->object->genderAutoDetect().'-Самойлов');
    }
    public function testGenDetect752()
    {
        $this->object->setSecondName('Самсонов');
        $this->assertEquals('1-Самсонов', $this->object->genderAutoDetect().'-Самсонов');
    }
    public function testGenDetect753()
    {
        $this->object->setSecondName('Сбітнєв');
        $this->assertEquals('1-Сбітнєв', $this->object->genderAutoDetect().'-Сбітнєв');
    }
    public function testGenDetect754()
    {
        $this->object->setSecondName('Свиридов');
        $this->assertEquals('1-Свиридов', $this->object->genderAutoDetect().'-Свиридов');
    }
    public function testGenDetect755()
    {
        $this->object->setSecondName('Селезньов');
        $this->assertEquals('1-Селезньов', $this->object->genderAutoDetect().'-Селезньов');
    }
    public function testGenDetect756()
    {
        $this->object->setSecondName('Семенов');
        $this->assertEquals('1-Семенов', $this->object->genderAutoDetect().'-Семенов');
    }
    public function testGenDetect757()
    {
        $this->object->setSecondName('Сербін');
        $this->assertEquals('1-Сербін', $this->object->genderAutoDetect().'-Сербін');
    }
    public function testGenDetect758()
    {
        $this->object->setSecondName('Сергєєв');
        $this->assertEquals('1-Сергєєв', $this->object->genderAutoDetect().'-Сергєєв');
    }
    public function testGenDetect759()
    {
        $this->object->setSecondName('Сибіряков');
        $this->assertEquals('1-Сибіряков', $this->object->genderAutoDetect().'-Сибіряков');
    }
    public function testGenDetect760()
    {
        $this->object->setSecondName('Сидоров');
        $this->assertEquals('1-Сидоров', $this->object->genderAutoDetect().'-Сидоров');
    }
    public function testGenDetect761()
    {
        $this->object->setSecondName('Симонов');
        $this->assertEquals('1-Симонов', $this->object->genderAutoDetect().'-Симонов');
    }
    public function testGenDetect762()
    {
        $this->object->setSecondName('Синельников');
        $this->assertEquals('1-Синельников', $this->object->genderAutoDetect().'-Синельников');
    }
    public function testGenDetect763()
    {
        $this->object->setSecondName('Скобелев');
        $this->assertEquals('1-Скобелев', $this->object->genderAutoDetect().'-Скобелев');
    }
    public function testGenDetect764()
    {
        $this->object->setSecondName('Скоблін');
        $this->assertEquals('1-Скоблін', $this->object->genderAutoDetect().'-Скоблін');
    }
    public function testGenDetect765()
    {
        $this->object->setSecondName('Смирнов');
        $this->assertEquals('1-Смирнов', $this->object->genderAutoDetect().'-Смирнов');
    }
    public function testGenDetect766()
    {
        $this->object->setSecondName('Снєгірьов');
        $this->assertEquals('1-Снєгірьов', $this->object->genderAutoDetect().'-Снєгірьов');
    }
    public function testGenDetect767()
    {
        $this->object->setSecondName('Соболєв');
        $this->assertEquals('1-Соболєв', $this->object->genderAutoDetect().'-Соболєв');
    }
    public function testGenDetect768()
    {
        $this->object->setSecondName('Соколов');
        $this->assertEquals('1-Соколов', $this->object->genderAutoDetect().'-Соколов');
    }
    public function testGenDetect769()
    {
        $this->object->setSecondName('Солнцев');
        $this->assertEquals('1-Солнцев', $this->object->genderAutoDetect().'-Солнцев');
    }
    public function testGenDetect770()
    {
        $this->object->setSecondName('Соловйов');
        $this->assertEquals('1-Соловйов', $this->object->genderAutoDetect().'-Соловйов');
    }
    public function testGenDetect771()
    {
        $this->object->setSecondName('Сомов');
        $this->assertEquals('1-Сомов', $this->object->genderAutoDetect().'-Сомов');
    }
    public function testGenDetect772()
    {
        $this->object->setSecondName('Сорокін');
        $this->assertEquals('1-Сорокін', $this->object->genderAutoDetect().'-Сорокін');
    }
    public function testGenDetect773()
    {
        $this->object->setSecondName('Стєклов');
        $this->assertEquals('1-Стєклов', $this->object->genderAutoDetect().'-Стєклов');
    }
    public function testGenDetect774()
    {
        $this->object->setSecondName('Старков');
        $this->assertEquals('1-Старков', $this->object->genderAutoDetect().'-Старков');
    }
    public function testGenDetect775()
    {
        $this->object->setSecondName('Степанов');
        $this->assertEquals('1-Степанов', $this->object->genderAutoDetect().'-Степанов');
    }
    public function testGenDetect776()
    {
        $this->object->setSecondName('Табаков');
        $this->assertEquals('1-Табаков', $this->object->genderAutoDetect().'-Табаков');
    }
    public function testGenDetect777()
    {
        $this->object->setSecondName('Тарасов');
        $this->assertEquals('1-Тарасов', $this->object->genderAutoDetect().'-Тарасов');
    }
    public function testGenDetect778()
    {
        $this->object->setSecondName('Терентьєв');
        $this->assertEquals('1-Терентьєв', $this->object->genderAutoDetect().'-Терентьєв');
    }
    public function testGenDetect779()
    {
        $this->object->setSecondName('Тимофєєв');
        $this->assertEquals('1-Тимофєєв', $this->object->genderAutoDetect().'-Тимофєєв');
    }
    public function testGenDetect780()
    {
        $this->object->setSecondName('Титов');
        $this->assertEquals('1-Титов', $this->object->genderAutoDetect().'-Титов');
    }
    public function testGenDetect781()
    {
        $this->object->setSecondName('Тихомиров');
        $this->assertEquals('1-Тихомиров', $this->object->genderAutoDetect().'-Тихомиров');
    }
    public function testGenDetect782()
    {
        $this->object->setSecondName('Тихонов');
        $this->assertEquals('1-Тихонов', $this->object->genderAutoDetect().'-Тихонов');
    }
    public function testGenDetect783()
    {
        $this->object->setSecondName('Тюленєв');
        $this->assertEquals('1-Тюленєв', $this->object->genderAutoDetect().'-Тюленєв');
    }
    public function testGenDetect784()
    {
        $this->object->setSecondName('Уваров');
        $this->assertEquals('1-Уваров', $this->object->genderAutoDetect().'-Уваров');
    }
    public function testGenDetect785()
    {
        $this->object->setSecondName('Усов');
        $this->assertEquals('1-Усов', $this->object->genderAutoDetect().'-Усов');
    }
    public function testGenDetect786()
    {
        $this->object->setSecondName('Устинов');
        $this->assertEquals('1-Устинов', $this->object->genderAutoDetect().'-Устинов');
    }
    public function testGenDetect787()
    {
        $this->object->setSecondName('Філіппов');
        $this->assertEquals('1-Філіппов', $this->object->genderAutoDetect().'-Філіппов');
    }
    public function testGenDetect788()
    {
        $this->object->setSecondName('Філатов');
        $this->assertEquals('1-Філатов', $this->object->genderAutoDetect().'-Філатов');
    }
    public function testGenDetect789()
    {
        $this->object->setSecondName('Федоров');
        $this->assertEquals('1-Федоров', $this->object->genderAutoDetect().'-Федоров');
    }
    public function testGenDetect790()
    {
        $this->object->setSecondName('Фомін');
        $this->assertEquals('1-Фомін', $this->object->genderAutoDetect().'-Фомін');
    }
    public function testGenDetect791()
    {
        $this->object->setSecondName('Фролов');
        $this->assertEquals('1-Фролов', $this->object->genderAutoDetect().'-Фролов');
    }
    public function testGenDetect792()
    {
        $this->object->setSecondName('Хілков');
        $this->assertEquals('1-Хілков', $this->object->genderAutoDetect().'-Хілков');
    }
    public function testGenDetect793()
    {
        $this->object->setSecondName('Хвостов');
        $this->assertEquals('1-Хвостов', $this->object->genderAutoDetect().'-Хвостов');
    }
    public function testGenDetect794()
    {
        $this->object->setSecondName('Худяков');
        $this->assertEquals('1-Худяков', $this->object->genderAutoDetect().'-Худяков');
    }
    public function testGenDetect795()
    {
        $this->object->setSecondName('Цвєтков');
        $this->assertEquals('1-Цвєтков', $this->object->genderAutoDetect().'-Цвєтков');
    }
    public function testGenDetect796()
    {
        $this->object->setSecondName('Чевкін');
        $this->assertEquals('1-Чевкін', $this->object->genderAutoDetect().'-Чевкін');
    }
    public function testGenDetect797()
    {
        $this->object->setSecondName('Черенков');
        $this->assertEquals('1-Черенков', $this->object->genderAutoDetect().'-Черенков');
    }
    public function testGenDetect798()
    {
        $this->object->setSecondName('Черепков');
        $this->assertEquals('1-Черепков', $this->object->genderAutoDetect().'-Черепков');
    }
    public function testGenDetect799()
    {
        $this->object->setSecondName('Чулков');
        $this->assertEquals('1-Чулков', $this->object->genderAutoDetect().'-Чулков');
    }
    public function testGenDetect800()
    {
        $this->object->setSecondName('Шевельов');
        $this->assertEquals('1-Шевельов', $this->object->genderAutoDetect().'-Шевельов');
    }
    public function testGenDetect801()
    {
        $this->object->setSecondName('Шеліхов');
        $this->assertEquals('1-Шеліхов', $this->object->genderAutoDetect().'-Шеліхов');
    }
    public function testGenDetect802()
    {
        $this->object->setSecondName('Шинін');
        $this->assertEquals('1-Шинін', $this->object->genderAutoDetect().'-Шинін');
    }
    public function testGenDetect803()
    {
        $this->object->setSecondName('Ширяєв');
        $this->assertEquals('1-Ширяєв', $this->object->genderAutoDetect().'-Ширяєв');
    }
    public function testGenDetect804()
    {
        $this->object->setSecondName('Шишов');
        $this->assertEquals('1-Шишов', $this->object->genderAutoDetect().'-Шишов');
    }
    public function testGenDetect805()
    {
        $this->object->setSecondName('Шулаков');
        $this->assertEquals('1-Шулаков', $this->object->genderAutoDetect().'-Шулаков');
    }
    public function testGenDetect806()
    {
        $this->object->setSecondName('Щапов');
        $this->assertEquals('1-Щапов', $this->object->genderAutoDetect().'-Щапов');
    }
    public function testGenDetect807()
    {
        $this->object->setSecondName('Щасливий');
        $this->assertEquals('1-Щасливий', $this->object->genderAutoDetect().'-Щасливий');
    }
    public function testGenDetect808()
    {
        $this->object->setSecondName('Яковлєв');
        $this->assertEquals('1-Яковлєв', $this->object->genderAutoDetect().'-Яковлєв');
    }
    public function testGenDetect809()
    {
        $this->object->setSecondName('Яшин');
        $this->assertEquals('1-Яшин', $this->object->genderAutoDetect().'-Яшин');
    }
    public function testGenDetect810()
    {
        $this->object->setSecondName('Єрмоленко');
        $this->assertEquals('2-Єрмоленко', $this->object->genderAutoDetect().'-Єрмоленко');
    }
    public function testGenDetect811()
    {
        $this->object->setSecondName('Єсипенко');
        $this->assertEquals('2-Єсипенко', $this->object->genderAutoDetect().'-Єсипенко');
    }
    public function testGenDetect812()
    {
        $this->object->setSecondName('Іваненко');
        $this->assertEquals('2-Іваненко', $this->object->genderAutoDetect().'-Іваненко');
    }
    public function testGenDetect813()
    {
        $this->object->setSecondName('Іванченко');
        $this->assertEquals('2-Іванченко', $this->object->genderAutoDetect().'-Іванченко');
    }
    public function testGenDetect814()
    {
        $this->object->setSecondName('Іванчук');
        $this->assertEquals('2-Іванчук', $this->object->genderAutoDetect().'-Іванчук');
    }
    public function testGenDetect815()
    {
        $this->object->setSecondName('Іванюк');
        $this->assertEquals('2-Іванюк', $this->object->genderAutoDetect().'-Іванюк');
    }
    public function testGenDetect816()
    {
        $this->object->setSecondName('Івахненко');
        $this->assertEquals('2-Івахненко', $this->object->genderAutoDetect().'-Івахненко');
    }
    public function testGenDetect817()
    {
        $this->object->setSecondName('Івашко');
        $this->assertEquals('2-Івашко', $this->object->genderAutoDetect().'-Івашко');
    }
    public function testGenDetect818()
    {
        $this->object->setSecondName('Іващенко');
        $this->assertEquals('2-Іващенко', $this->object->genderAutoDetect().'-Іващенко');
    }
    public function testGenDetect819()
    {
        $this->object->setSecondName('Івченко');
        $this->assertEquals('2-Івченко', $this->object->genderAutoDetect().'-Івченко');
    }
    public function testGenDetect820()
    {
        $this->object->setSecondName('Іллєнко');
        $this->assertEquals('2-Іллєнко', $this->object->genderAutoDetect().'-Іллєнко');
    }
    public function testGenDetect821()
    {
        $this->object->setSecondName('Іловайські');
        $this->assertEquals('2-Іловайські', $this->object->genderAutoDetect().'-Іловайські');
    }
    public function testGenDetect822()
    {
        $this->object->setSecondName('Ільницька');
        $this->assertEquals('2-Ільницька', $this->object->genderAutoDetect().'-Ільницька');
    }
    public function testGenDetect823()
    {
        $this->object->setSecondName('Ільченко');
        $this->assertEquals('2-Ільченко', $this->object->genderAutoDetect().'-Ільченко');
    }
    public function testGenDetect824()
    {
        $this->object->setSecondName('Іщенко');
        $this->assertEquals('2-Іщенко', $this->object->genderAutoDetect().'-Іщенко');
    }
    public function testGenDetect825()
    {
        $this->object->setSecondName('Абраменко');
        $this->assertEquals('2-Абраменко', $this->object->genderAutoDetect().'-Абраменко');
    }
    public function testGenDetect826()
    {
        $this->object->setSecondName('Абрамчук');
        $this->assertEquals('2-Абрамчук', $this->object->genderAutoDetect().'-Абрамчук');
    }
    public function testGenDetect827()
    {
        $this->object->setSecondName('Адамчук');
        $this->assertEquals('2-Адамчук', $this->object->genderAutoDetect().'-Адамчук');
    }
    public function testGenDetect828()
    {
        $this->object->setSecondName('Акуленко');
        $this->assertEquals('2-Акуленко', $this->object->genderAutoDetect().'-Акуленко');
    }
    public function testGenDetect829()
    {
        $this->object->setSecondName('Алексєєнко');
        $this->assertEquals('2-Алексєєнко', $this->object->genderAutoDetect().'-Алексєєнко');
    }
    public function testGenDetect830()
    {
        $this->object->setSecondName('Алексійчук');
        $this->assertEquals('2-Алексійчук', $this->object->genderAutoDetect().'-Алексійчук');
    }
    public function testGenDetect831()
    {
        $this->object->setSecondName('Андрієнко');
        $this->assertEquals('2-Андрієнко', $this->object->genderAutoDetect().'-Андрієнко');
    }
    public function testGenDetect832()
    {
        $this->object->setSecondName('Андрійчук');
        $this->assertEquals('2-Андрійчук', $this->object->genderAutoDetect().'-Андрійчук');
    }
    public function testGenDetect833()
    {
        $this->object->setSecondName('Андрейко');
        $this->assertEquals('2-Андрейко', $this->object->genderAutoDetect().'-Андрейко');
    }
    public function testGenDetect834()
    {
        $this->object->setSecondName('Андрущенко');
        $this->assertEquals('2-Андрущенко', $this->object->genderAutoDetect().'-Андрущенко');
    }
    public function testGenDetect835()
    {
        $this->object->setSecondName('Анищенко');
        $this->assertEquals('2-Анищенко', $this->object->genderAutoDetect().'-Анищенко');
    }
    public function testGenDetect836()
    {
        $this->object->setSecondName('Антонюк');
        $this->assertEquals('2-Антонюк', $this->object->genderAutoDetect().'-Антонюк');
    }
    public function testGenDetect837()
    {
        $this->object->setSecondName('Арсенич');
        $this->assertEquals('2-Арсенич', $this->object->genderAutoDetect().'-Арсенич');
    }
    public function testGenDetect838()
    {
        $this->object->setSecondName('Артюх');
        $this->assertEquals('2-Артюх', $this->object->genderAutoDetect().'-Артюх');
    }
    public function testGenDetect839()
    {
        $this->object->setSecondName('Атаманчук');
        $this->assertEquals('2-Атаманчук', $this->object->genderAutoDetect().'-Атаманчук');
    }
    public function testGenDetect840()
    {
        $this->object->setSecondName('Біла');
        $this->assertEquals('2-Біла', $this->object->genderAutoDetect().'-Біла');
    }
    public function testGenDetect841()
    {
        $this->object->setSecondName('Білас');
        $this->assertEquals('2-Білас', $this->object->genderAutoDetect().'-Білас');
    }
    public function testGenDetect842()
    {
        $this->object->setSecondName('Білодід');
        $this->assertEquals('2-Білодід', $this->object->genderAutoDetect().'-Білодід');
    }
    public function testGenDetect843()
    {
        $this->object->setSecondName('Білоус');
        $this->assertEquals('2-Білоус', $this->object->genderAutoDetect().'-Білоус');
    }
    public function testGenDetect844()
    {
        $this->object->setSecondName('Бабійчук');
        $this->assertEquals('2-Бабійчук', $this->object->genderAutoDetect().'-Бабійчук');
    }
    public function testGenDetect845()
    {
        $this->object->setSecondName('Бабак');
        $this->assertEquals('2-Бабак', $this->object->genderAutoDetect().'-Бабак');
    }
    public function testGenDetect846()
    {
        $this->object->setSecondName('Бабчук');
        $this->assertEquals('2-Бабчук', $this->object->genderAutoDetect().'-Бабчук');
    }
    public function testGenDetect847()
    {
        $this->object->setSecondName('Багмут');
        $this->assertEquals('2-Багмут', $this->object->genderAutoDetect().'-Багмут');
    }
    public function testGenDetect848()
    {
        $this->object->setSecondName('Багрій');
        $this->assertEquals('2-Багрій', $this->object->genderAutoDetect().'-Багрій');
    }
    public function testGenDetect849()
    {
        $this->object->setSecondName('Бадлак');
        $this->assertEquals('2-Бадлак', $this->object->genderAutoDetect().'-Бадлак');
    }
    public function testGenDetect850()
    {
        $this->object->setSecondName('Бажан');
        $this->assertEquals('2-Бажан', $this->object->genderAutoDetect().'-Бажан');
    }
    public function testGenDetect851()
    {
        $this->object->setSecondName('Балтача');
        $this->assertEquals('2-Балтача', $this->object->genderAutoDetect().'-Балтача');
    }
    public function testGenDetect852()
    {
        $this->object->setSecondName('Бандура');
        $this->assertEquals('2-Бандура', $this->object->genderAutoDetect().'-Бандура');
    }
    public function testGenDetect853()
    {
        $this->object->setSecondName('Баран');
        $this->assertEquals('2-Баран', $this->object->genderAutoDetect().'-Баран');
    }
    public function testGenDetect854()
    {
        $this->object->setSecondName('Баранець');
        $this->assertEquals('2-Баранець', $this->object->genderAutoDetect().'-Баранець');
    }
    public function testGenDetect855()
    {
        $this->object->setSecondName('Барановська');
        $this->assertEquals('2-Барановська', $this->object->genderAutoDetect().'-Барановська');
    }
    public function testGenDetect856()
    {
        $this->object->setSecondName('Баранюк');
        $this->assertEquals('2-Баранюк', $this->object->genderAutoDetect().'-Баранюк');
    }
    public function testGenDetect857()
    {
        $this->object->setSecondName('Батюк');
        $this->assertEquals('2-Батюк', $this->object->genderAutoDetect().'-Батюк');
    }
    public function testGenDetect858()
    {
        $this->object->setSecondName('Бачинська');
        $this->assertEquals('2-Бачинська', $this->object->genderAutoDetect().'-Бачинська');
    }
    public function testGenDetect859()
    {
        $this->object->setSecondName('Бебешко');
        $this->assertEquals('2-Бебешко', $this->object->genderAutoDetect().'-Бебешко');
    }
    public function testGenDetect860()
    {
        $this->object->setSecondName('Бевзенко');
        $this->assertEquals('2-Бевзенко', $this->object->genderAutoDetect().'-Бевзенко');
    }
    public function testGenDetect861()
    {
        $this->object->setSecondName('Безбородьки');
        $this->assertEquals('2-Безбородьки', $this->object->genderAutoDetect().'-Безбородьки');
    }
    public function testGenDetect862()
    {
        $this->object->setSecondName('Березовчук');
        $this->assertEquals('2-Березовчук', $this->object->genderAutoDetect().'-Березовчук');
    }
    public function testGenDetect863()
    {
        $this->object->setSecondName('Блонські');
        $this->assertEquals('2-Блонські', $this->object->genderAutoDetect().'-Блонські');
    }
    public function testGenDetect864()
    {
        $this->object->setSecondName('Божик');
        $this->assertEquals('2-Божик', $this->object->genderAutoDetect().'-Божик');
    }
    public function testGenDetect865()
    {
        $this->object->setSecondName('Божко');
        $this->assertEquals('2-Божко', $this->object->genderAutoDetect().'-Божко');
    }
    public function testGenDetect866()
    {
        $this->object->setSecondName('Бойко');
        $this->assertEquals('2-Бойко', $this->object->genderAutoDetect().'-Бойко');
    }
    public function testGenDetect867()
    {
        $this->object->setSecondName('Бойцун');
        $this->assertEquals('2-Бойцун', $this->object->genderAutoDetect().'-Бойцун');
    }
    public function testGenDetect868()
    {
        $this->object->setSecondName('Бойчак');
        $this->assertEquals('2-Бойчак', $this->object->genderAutoDetect().'-Бойчак');
    }
    public function testGenDetect869()
    {
        $this->object->setSecondName('Бойчук');
        $this->assertEquals('2-Бойчук', $this->object->genderAutoDetect().'-Бойчук');
    }
    public function testGenDetect870()
    {
        $this->object->setSecondName('Бондар');
        $this->assertEquals('2-Бондар', $this->object->genderAutoDetect().'-Бондар');
    }
    public function testGenDetect871()
    {
        $this->object->setSecondName('Бондаренко');
        $this->assertEquals('2-Бондаренко', $this->object->genderAutoDetect().'-Бондаренко');
    }
    public function testGenDetect872()
    {
        $this->object->setSecondName('Бондарчук');
        $this->assertEquals('2-Бондарчук', $this->object->genderAutoDetect().'-Бондарчук');
    }
    public function testGenDetect873()
    {
        $this->object->setSecondName('Борисенко');
        $this->assertEquals('2-Борисенко', $this->object->genderAutoDetect().'-Борисенко');
    }
    public function testGenDetect874()
    {
        $this->object->setSecondName('Борисикевич');
        $this->assertEquals('2-Борисикевич', $this->object->genderAutoDetect().'-Борисикевич');
    }
    public function testGenDetect875()
    {
        $this->object->setSecondName('Братусь');
        $this->assertEquals('2-Братусь', $this->object->genderAutoDetect().'-Братусь');
    }
    public function testGenDetect876()
    {
        $this->object->setSecondName('Букатевич');
        $this->assertEquals('2-Букатевич', $this->object->genderAutoDetect().'-Букатевич');
    }
    public function testGenDetect877()
    {
        $this->object->setSecondName('Бурбан');
        $this->assertEquals('2-Бурбан', $this->object->genderAutoDetect().'-Бурбан');
    }
    public function testGenDetect878()
    {
        $this->object->setSecondName('Бурячок');
        $this->assertEquals('2-Бурячок', $this->object->genderAutoDetect().'-Бурячок');
    }
    public function testGenDetect879()
    {
        $this->object->setSecondName('Бутейко');
        $this->assertEquals('2-Бутейко', $this->object->genderAutoDetect().'-Бутейко');
    }
    public function testGenDetect880()
    {
        $this->object->setSecondName('Бутенко');
        $this->assertEquals('2-Бутенко', $this->object->genderAutoDetect().'-Бутенко');
    }
    public function testGenDetect881()
    {
        $this->object->setSecondName('Бутник');
        $this->assertEquals('2-Бутник', $this->object->genderAutoDetect().'-Бутник');
    }
    public function testGenDetect882()
    {
        $this->object->setSecondName('Бутовичі');
        $this->assertEquals('2-Бутовичі', $this->object->genderAutoDetect().'-Бутовичі');
    }
    public function testGenDetect883()
    {
        $this->object->setSecondName('Бухало');
        $this->assertEquals('2-Бухало', $this->object->genderAutoDetect().'-Бухало');
    }
    public function testGenDetect884()
    {
        $this->object->setSecondName('Візерські');
        $this->assertEquals('2-Візерські', $this->object->genderAutoDetect().'-Візерські');
    }
    public function testGenDetect885()
    {
        $this->object->setSecondName('Василашко');
        $this->assertEquals('2-Василашко', $this->object->genderAutoDetect().'-Василашко');
    }
    public function testGenDetect886()
    {
        $this->object->setSecondName('Василенко');
        $this->assertEquals('2-Василенко', $this->object->genderAutoDetect().'-Василенко');
    }
    public function testGenDetect887()
    {
        $this->object->setSecondName('Васильченко');
        $this->assertEquals('2-Васильченко', $this->object->genderAutoDetect().'-Васильченко');
    }
    public function testGenDetect888()
    {
        $this->object->setSecondName('Васильчук');
        $this->assertEquals('2-Васильчук', $this->object->genderAutoDetect().'-Васильчук');
    }
    public function testGenDetect889()
    {
        $this->object->setSecondName('Васкул');
        $this->assertEquals('2-Васкул', $this->object->genderAutoDetect().'-Васкул');
    }
    public function testGenDetect890()
    {
        $this->object->setSecondName('Васьковичі');
        $this->assertEquals('2-Васьковичі', $this->object->genderAutoDetect().'-Васьковичі');
    }
    public function testGenDetect891()
    {
        $this->object->setSecondName('Вахній');
        $this->assertEquals('2-Вахній', $this->object->genderAutoDetect().'-Вахній');
    }
    public function testGenDetect892()
    {
        $this->object->setSecondName('Ващенко-Захарченко');
        $this->assertEquals('2-Ващенко-Захарченко', $this->object->genderAutoDetect().'-Ващенко-Захарченко');
    }
    public function testGenDetect893()
    {
        $this->object->setSecondName('Вдовиченко');
        $this->assertEquals('2-Вдовиченко', $this->object->genderAutoDetect().'-Вдовиченко');
    }
    public function testGenDetect894()
    {
        $this->object->setSecondName('Величко');
        $this->assertEquals('2-Величко', $this->object->genderAutoDetect().'-Величко');
    }
    public function testGenDetect895()
    {
        $this->object->setSecondName('Величковські');
        $this->assertEquals('2-Величковські', $this->object->genderAutoDetect().'-Величковські');
    }
    public function testGenDetect896()
    {
        $this->object->setSecondName('Вертипорох');
        $this->assertEquals('2-Вертипорох', $this->object->genderAutoDetect().'-Вертипорох');
    }
    public function testGenDetect897()
    {
        $this->object->setSecondName('Верхола');
        $this->assertEquals('2-Верхола', $this->object->genderAutoDetect().'-Верхола');
    }
    public function testGenDetect898()
    {
        $this->object->setSecondName('Винокур');
        $this->assertEquals('2-Винокур', $this->object->genderAutoDetect().'-Винокур');
    }
    public function testGenDetect899()
    {
        $this->object->setSecondName('Висоцькі');
        $this->assertEquals('2-Висоцькі', $this->object->genderAutoDetect().'-Висоцькі');
    }
    public function testGenDetect900()
    {
        $this->object->setSecondName('Вишневецькі');
        $this->assertEquals('2-Вишневецькі', $this->object->genderAutoDetect().'-Вишневецькі');
    }
    public function testGenDetect901()
    {
        $this->object->setSecondName('Влох');
        $this->assertEquals('2-Влох', $this->object->genderAutoDetect().'-Влох');
    }
    public function testGenDetect902()
    {
        $this->object->setSecondName('Вобла');
        $this->assertEquals('2-Вобла', $this->object->genderAutoDetect().'-Вобла');
    }
    public function testGenDetect903()
    {
        $this->object->setSecondName('Вовк');
        $this->assertEquals('2-Вовк', $this->object->genderAutoDetect().'-Вовк');
    }
    public function testGenDetect904()
    {
        $this->object->setSecondName('Возняк');
        $this->assertEquals('2-Возняк', $this->object->genderAutoDetect().'-Возняк');
    }
    public function testGenDetect905()
    {
        $this->object->setSecondName('Войнаровські');
        $this->assertEquals('2-Войнаровські', $this->object->genderAutoDetect().'-Войнаровські');
    }
    public function testGenDetect906()
    {
        $this->object->setSecondName('Волох');
        $this->assertEquals('2-Волох', $this->object->genderAutoDetect().'-Волох');
    }
    public function testGenDetect907()
    {
        $this->object->setSecondName('Волощук');
        $this->assertEquals('2-Волощук', $this->object->genderAutoDetect().'-Волощук');
    }
    public function testGenDetect908()
    {
        $this->object->setSecondName('Вороновська');
        $this->assertEquals('2-Вороновська', $this->object->genderAutoDetect().'-Вороновська');
    }
    public function testGenDetect909()
    {
        $this->object->setSecondName('Гавриленко');
        $this->assertEquals('2-Гавриленко', $this->object->genderAutoDetect().'-Гавриленко');
    }
    public function testGenDetect910()
    {
        $this->object->setSecondName('Гаврилюк');
        $this->assertEquals('2-Гаврилюк', $this->object->genderAutoDetect().'-Гаврилюк');
    }
    public function testGenDetect911()
    {
        $this->object->setSecondName('Галенковські');
        $this->assertEquals('2-Галенковські', $this->object->genderAutoDetect().'-Галенковські');
    }
    public function testGenDetect912()
    {
        $this->object->setSecondName('Гальченко');
        $this->assertEquals('2-Гальченко', $this->object->genderAutoDetect().'-Гальченко');
    }
    public function testGenDetect913()
    {
        $this->object->setSecondName('Гамалія');
        $this->assertEquals('2-Гамалія', $this->object->genderAutoDetect().'-Гамалія');
    }
    public function testGenDetect914()
    {
        $this->object->setSecondName('Ганицька');
        $this->assertEquals('2-Ганицька', $this->object->genderAutoDetect().'-Ганицька');
    }
    public function testGenDetect915()
    {
        $this->object->setSecondName('Гарань');
        $this->assertEquals('2-Гарань', $this->object->genderAutoDetect().'-Гарань');
    }
    public function testGenDetect916()
    {
        $this->object->setSecondName('Гармаш');
        $this->assertEquals('2-Гармаш', $this->object->genderAutoDetect().'-Гармаш');
    }
    public function testGenDetect917()
    {
        $this->object->setSecondName('Гасай');
        $this->assertEquals('2-Гасай', $this->object->genderAutoDetect().'-Гасай');
    }
    public function testGenDetect918()
    {
        $this->object->setSecondName('Гасюк');
        $this->assertEquals('2-Гасюк', $this->object->genderAutoDetect().'-Гасюк');
    }
    public function testGenDetect919()
    {
        $this->object->setSecondName('Герасименко');
        $this->assertEquals('2-Герасименко', $this->object->genderAutoDetect().'-Герасименко');
    }
    public function testGenDetect920()
    {
        $this->object->setSecondName('Геращенко');
        $this->assertEquals('2-Геращенко', $this->object->genderAutoDetect().'-Геращенко');
    }
    public function testGenDetect921()
    {
        $this->object->setSecondName('Герцик');
        $this->assertEquals('2-Герцик', $this->object->genderAutoDetect().'-Герцик');
    }
    public function testGenDetect922()
    {
        $this->object->setSecondName('Герцики');
        $this->assertEquals('2-Герцики', $this->object->genderAutoDetect().'-Герцики');
    }
    public function testGenDetect923()
    {
        $this->object->setSecondName('Гладченко');
        $this->assertEquals('2-Гладченко', $this->object->genderAutoDetect().'-Гладченко');
    }
    public function testGenDetect924()
    {
        $this->object->setSecondName('Глоба');
        $this->assertEquals('2-Глоба', $this->object->genderAutoDetect().'-Глоба');
    }
    public function testGenDetect925()
    {
        $this->object->setSecondName('Гнідичі');
        $this->assertEquals('2-Гнідичі', $this->object->genderAutoDetect().'-Гнідичі');
    }
    public function testGenDetect926()
    {
        $this->object->setSecondName('Гнатюк');
        $this->assertEquals('2-Гнатюк', $this->object->genderAutoDetect().'-Гнатюк');
    }
    public function testGenDetect927()
    {
        $this->object->setSecondName('Гоголі');
        $this->assertEquals('2-Гоголі', $this->object->genderAutoDetect().'-Гоголі');
    }
    public function testGenDetect928()
    {
        $this->object->setSecondName('Гоголь');
        $this->assertEquals('2-Гоголь', $this->object->genderAutoDetect().'-Гоголь');
    }
    public function testGenDetect929()
    {
        $this->object->setSecondName('Годунок');
        $this->assertEquals('2-Годунок', $this->object->genderAutoDetect().'-Годунок');
    }
    public function testGenDetect930()
    {
        $this->object->setSecondName('Головата');
        $this->assertEquals('2-Головата', $this->object->genderAutoDetect().'-Головата');
    }
    public function testGenDetect931()
    {
        $this->object->setSecondName('Головко');
        $this->assertEquals('2-Головко', $this->object->genderAutoDetect().'-Головко');
    }
    public function testGenDetect932()
    {
        $this->object->setSecondName('Голуб');
        $this->assertEquals('2-Голуб', $this->object->genderAutoDetect().'-Голуб');
    }
    public function testGenDetect933()
    {
        $this->object->setSecondName('Голубнича');
        $this->assertEquals('2-Голубнича', $this->object->genderAutoDetect().'-Голубнича');
    }
    public function testGenDetect934()
    {
        $this->object->setSecondName('Гольшанські');
        $this->assertEquals('2-Гольшанські', $this->object->genderAutoDetect().'-Гольшанські');
    }
    public function testGenDetect935()
    {
        $this->object->setSecondName('Гонта');
        $this->assertEquals('2-Гонта', $this->object->genderAutoDetect().'-Гонта');
    }
    public function testGenDetect936()
    {
        $this->object->setSecondName('Гончар');
        $this->assertEquals('2-Гончар', $this->object->genderAutoDetect().'-Гончар');
    }
    public function testGenDetect937()
    {
        $this->object->setSecondName('Гончаренко');
        $this->assertEquals('2-Гончаренко', $this->object->genderAutoDetect().'-Гончаренко');
    }
    public function testGenDetect938()
    {
        $this->object->setSecondName('Горбаль');
        $this->assertEquals('2-Горбаль', $this->object->genderAutoDetect().'-Горбаль');
    }
    public function testGenDetect939()
    {
        $this->object->setSecondName('Гордієнко');
        $this->assertEquals('2-Гордієнко', $this->object->genderAutoDetect().'-Гордієнко');
    }
    public function testGenDetect940()
    {
        $this->object->setSecondName('Гординські');
        $this->assertEquals('2-Гординські', $this->object->genderAutoDetect().'-Гординські');
    }
    public function testGenDetect941()
    {
        $this->object->setSecondName('Гошовські');
        $this->assertEquals('2-Гошовські', $this->object->genderAutoDetect().'-Гошовські');
    }
    public function testGenDetect942()
    {
        $this->object->setSecondName('Гошовська');
        $this->assertEquals('2-Гошовська', $this->object->genderAutoDetect().'-Гошовська');
    }
    public function testGenDetect943()
    {
        $this->object->setSecondName('Грінченко');
        $this->assertEquals('2-Грінченко', $this->object->genderAutoDetect().'-Грінченко');
    }
    public function testGenDetect944()
    {
        $this->object->setSecondName('Грабович');
        $this->assertEquals('2-Грабович', $this->object->genderAutoDetect().'-Грабович');
    }
    public function testGenDetect945()
    {
        $this->object->setSecondName('Грабовська');
        $this->assertEquals('2-Грабовська', $this->object->genderAutoDetect().'-Грабовська');
    }
    public function testGenDetect946()
    {
        $this->object->setSecondName('Григоренко');
        $this->assertEquals('2-Григоренко', $this->object->genderAutoDetect().'-Григоренко');
    }
    public function testGenDetect947()
    {
        $this->object->setSecondName('Григорович');
        $this->assertEquals('2-Григорович', $this->object->genderAutoDetect().'-Григорович');
    }
    public function testGenDetect948()
    {
        $this->object->setSecondName('Григорович-Барська');
        $this->assertEquals('2-Григорович-Барська', $this->object->genderAutoDetect().'-Григорович-Барська');
    }
    public function testGenDetect949()
    {
        $this->object->setSecondName('Григорчук');
        $this->assertEquals('2-Григорчук', $this->object->genderAutoDetect().'-Григорчук');
    }
    public function testGenDetect950()
    {
        $this->object->setSecondName('Грицак');
        $this->assertEquals('2-Грицак', $this->object->genderAutoDetect().'-Грицак');
    }
    public function testGenDetect951()
    {
        $this->object->setSecondName('Гриценко');
        $this->assertEquals('2-Гриценко', $this->object->genderAutoDetect().'-Гриценко');
    }
    public function testGenDetect952()
    {
        $this->object->setSecondName('Гришко');
        $this->assertEquals('2-Гришко', $this->object->genderAutoDetect().'-Гришко');
    }
    public function testGenDetect953()
    {
        $this->object->setSecondName('Громики');
        $this->assertEquals('2-Громики', $this->object->genderAutoDetect().'-Громики');
    }
    public function testGenDetect954()
    {
        $this->object->setSecondName('Гудзій');
        $this->assertEquals('2-Гудзій', $this->object->genderAutoDetect().'-Гудзій');
    }
    public function testGenDetect955()
    {
        $this->object->setSecondName('Гудзь');
        $this->assertEquals('2-Гудзь', $this->object->genderAutoDetect().'-Гудзь');
    }
    public function testGenDetect956()
    {
        $this->object->setSecondName('Гуменюк');
        $this->assertEquals('2-Гуменюк', $this->object->genderAutoDetect().'-Гуменюк');
    }
    public function testGenDetect957()
    {
        $this->object->setSecondName('Гунько');
        $this->assertEquals('2-Гунько', $this->object->genderAutoDetect().'-Гунько');
    }
    public function testGenDetect958()
    {
        $this->object->setSecondName('Діденко');
        $this->assertEquals('2-Діденко', $this->object->genderAutoDetect().'-Діденко');
    }
    public function testGenDetect959()
    {
        $this->object->setSecondName('Даниленко');
        $this->assertEquals('2-Даниленко', $this->object->genderAutoDetect().'-Даниленко');
    }
    public function testGenDetect960()
    {
        $this->object->setSecondName('Данькевич');
        $this->assertEquals('2-Данькевич', $this->object->genderAutoDetect().'-Данькевич');
    }
    public function testGenDetect961()
    {
        $this->object->setSecondName('Дараган');
        $this->assertEquals('2-Дараган', $this->object->genderAutoDetect().'-Дараган');
    }
    public function testGenDetect962()
    {
        $this->object->setSecondName('Дашкевич');
        $this->assertEquals('2-Дашкевич', $this->object->genderAutoDetect().'-Дашкевич');
    }
    public function testGenDetect963()
    {
        $this->object->setSecondName('Денисенко');
        $this->assertEquals('2-Денисенко', $this->object->genderAutoDetect().'-Денисенко');
    }
    public function testGenDetect964()
    {
        $this->object->setSecondName('Джус');
        $this->assertEquals('2-Джус', $this->object->genderAutoDetect().'-Джус');
    }
    public function testGenDetect965()
    {
        $this->object->setSecondName('Дзюба');
        $this->assertEquals('2-Дзюба', $this->object->genderAutoDetect().'-Дзюба');
    }
    public function testGenDetect966()
    {
        $this->object->setSecondName('Дикань');
        $this->assertEquals('2-Дикань', $this->object->genderAutoDetect().'-Дикань');
    }
    public function testGenDetect967()
    {
        $this->object->setSecondName('Дмитерко');
        $this->assertEquals('2-Дмитерко', $this->object->genderAutoDetect().'-Дмитерко');
    }
    public function testGenDetect968()
    {
        $this->object->setSecondName('Довженко');
        $this->assertEquals('2-Довженко', $this->object->genderAutoDetect().'-Довженко');
    }
    public function testGenDetect969()
    {
        $this->object->setSecondName('Домонтовичі');
        $this->assertEquals('2-Домонтовичі', $this->object->genderAutoDetect().'-Домонтовичі');
    }
    public function testGenDetect970()
    {
        $this->object->setSecondName('Дорош');
        $this->assertEquals('2-Дорош', $this->object->genderAutoDetect().'-Дорош');
    }
    public function testGenDetect971()
    {
        $this->object->setSecondName('Дорошенко');
        $this->assertEquals('2-Дорошенко', $this->object->genderAutoDetect().'-Дорошенко');
    }
    public function testGenDetect972()
    {
        $this->object->setSecondName('Доценко');
        $this->assertEquals('2-Доценко', $this->object->genderAutoDetect().'-Доценко');
    }
    public function testGenDetect973()
    {
        $this->object->setSecondName('Дочинець');
        $this->assertEquals('2-Дочинець', $this->object->genderAutoDetect().'-Дочинець');
    }
    public function testGenDetect974()
    {
        $this->object->setSecondName('Драгоманови');
        $this->assertEquals('2-Драгоманови', $this->object->genderAutoDetect().'-Драгоманови');
    }
    public function testGenDetect975()
    {
        $this->object->setSecondName('Дудко');
        $this->assertEquals('2-Дудко', $this->object->genderAutoDetect().'-Дудко');
    }
    public function testGenDetect976()
    {
        $this->object->setSecondName('Дунін-Борковські');
        $this->assertEquals('2-Дунін-Борковські', $this->object->genderAutoDetect().'-Дунін-Борковські');
    }
    public function testGenDetect977()
    {
        $this->object->setSecondName('Дяченко');
        $this->assertEquals('2-Дяченко', $this->object->genderAutoDetect().'-Дяченко');
    }
    public function testGenDetect978()
    {
        $this->object->setSecondName('Ейбоженко');
        $this->assertEquals('2-Ейбоженко', $this->object->genderAutoDetect().'-Ейбоженко');
    }
    public function testGenDetect979()
    {
        $this->object->setSecondName('Жайворон');
        $this->assertEquals('2-Жайворон', $this->object->genderAutoDetect().'-Жайворон');
    }
    public function testGenDetect980()
    {
        $this->object->setSecondName('Жаліло');
        $this->assertEquals('2-Жаліло', $this->object->genderAutoDetect().'-Жаліло');
    }
    public function testGenDetect981()
    {
        $this->object->setSecondName('Ждановичі');
        $this->assertEquals('2-Ждановичі', $this->object->genderAutoDetect().'-Ждановичі');
    }
    public function testGenDetect982()
    {
        $this->object->setSecondName('Жежерін');
        $this->assertEquals('2-Жежерін', $this->object->genderAutoDetect().'-Жежерін');
    }
    public function testGenDetect983()
    {
        $this->object->setSecondName('Желєзняк');
        $this->assertEquals('2-Желєзняк', $this->object->genderAutoDetect().'-Желєзняк');
    }
    public function testGenDetect984()
    {
        $this->object->setSecondName('Железняк');
        $this->assertEquals('2-Железняк', $this->object->genderAutoDetect().'-Железняк');
    }
    public function testGenDetect985()
    {
        $this->object->setSecondName('Жилко');
        $this->assertEquals('2-Жилко', $this->object->genderAutoDetect().'-Жилко');
    }
    public function testGenDetect986()
    {
        $this->object->setSecondName('Жирко');
        $this->assertEquals('2-Жирко', $this->object->genderAutoDetect().'-Жирко');
    }
    public function testGenDetect987()
    {
        $this->object->setSecondName('Жук');
        $this->assertEquals('2-Жук', $this->object->genderAutoDetect().'-Жук');
    }
    public function testGenDetect988()
    {
        $this->object->setSecondName('Жупанська');
        $this->assertEquals('2-Жупанська', $this->object->genderAutoDetect().'-Жупанська');
    }
    public function testGenDetect989()
    {
        $this->object->setSecondName('Жураківські');
        $this->assertEquals('2-Жураківські', $this->object->genderAutoDetect().'-Жураківські');
    }
    public function testGenDetect990()
    {
        $this->object->setSecondName('Заєць');
        $this->assertEquals('2-Заєць', $this->object->genderAutoDetect().'-Заєць');
    }
    public function testGenDetect991()
    {
        $this->object->setSecondName('Забашта');
        $this->assertEquals('2-Забашта', $this->object->genderAutoDetect().'-Забашта');
    }
    public function testGenDetect992()
    {
        $this->object->setSecondName('Заболотна');
        $this->assertEquals('2-Заболотна', $this->object->genderAutoDetect().'-Заболотна');
    }
    public function testGenDetect993()
    {
        $this->object->setSecondName('Завальнюк');
        $this->assertEquals('2-Завальнюк', $this->object->genderAutoDetect().'-Завальнюк');
    }
    public function testGenDetect994()
    {
        $this->object->setSecondName('Закревські');
        $this->assertEquals('2-Закревські', $this->object->genderAutoDetect().'-Закревські');
    }
    public function testGenDetect995()
    {
        $this->object->setSecondName('Закусило');
        $this->assertEquals('2-Закусило', $this->object->genderAutoDetect().'-Закусило');
    }
    public function testGenDetect996()
    {
        $this->object->setSecondName('Залізняк');
        $this->assertEquals('2-Залізняк', $this->object->genderAutoDetect().'-Залізняк');
    }
    public function testGenDetect997()
    {
        $this->object->setSecondName('Заруба');
        $this->assertEquals('2-Заруба', $this->object->genderAutoDetect().'-Заруба');
    }
    public function testGenDetect998()
    {
        $this->object->setSecondName('Засядько');
        $this->assertEquals('2-Засядько', $this->object->genderAutoDetect().'-Засядько');
    }
    public function testGenDetect999()
    {
        $this->object->setSecondName('Захаренко');
        $this->assertEquals('2-Захаренко', $this->object->genderAutoDetect().'-Захаренко');
    }
    public function testGenDetect1000()
    {
        $this->object->setSecondName('Захарчук');
        $this->assertEquals('2-Захарчук', $this->object->genderAutoDetect().'-Захарчук');
    }
    public function testGenDetect1001()
    {
        $this->object->setSecondName('Заяць');
        $this->assertEquals('2-Заяць', $this->object->genderAutoDetect().'-Заяць');
    }
    public function testGenDetect1002()
    {
        $this->object->setSecondName('Заячківська');
        $this->assertEquals('2-Заячківська', $this->object->genderAutoDetect().'-Заячківська');
    }
    public function testGenDetect1003()
    {
        $this->object->setSecondName('Збаразькі');
        $this->assertEquals('2-Збаразькі', $this->object->genderAutoDetect().'-Збаразькі');
    }
    public function testGenDetect1004()
    {
        $this->object->setSecondName('Зленко');
        $this->assertEquals('2-Зленко', $this->object->genderAutoDetect().'-Зленко');
    }
    public function testGenDetect1005()
    {
        $this->object->setSecondName('Значко-Яворські');
        $this->assertEquals('2-Значко-Яворські', $this->object->genderAutoDetect().'-Значко-Яворські');
    }
    public function testGenDetect1006()
    {
        $this->object->setSecondName('Золотаренко');
        $this->assertEquals('2-Золотаренко', $this->object->genderAutoDetect().'-Золотаренко');
    }
    public function testGenDetect1007()
    {
        $this->object->setSecondName('Кабачок');
        $this->assertEquals('2-Кабачок', $this->object->genderAutoDetect().'-Кабачок');
    }
    public function testGenDetect1008()
    {
        $this->object->setSecondName('Каганець');
        $this->assertEquals('2-Каганець', $this->object->genderAutoDetect().'-Каганець');
    }
    public function testGenDetect1009()
    {
        $this->object->setSecondName('Калашники');
        $this->assertEquals('2-Калашники', $this->object->genderAutoDetect().'-Калашники');
    }
    public function testGenDetect1010()
    {
        $this->object->setSecondName('Калинович');
        $this->assertEquals('2-Калинович', $this->object->genderAutoDetect().'-Калинович');
    }
    public function testGenDetect1011()
    {
        $this->object->setSecondName('Кандиби');
        $this->assertEquals('2-Кандиби', $this->object->genderAutoDetect().'-Кандиби');
    }
    public function testGenDetect1012()
    {
        $this->object->setSecondName('Карашевичі');
        $this->assertEquals('2-Карашевичі', $this->object->genderAutoDetect().'-Карашевичі');
    }
    public function testGenDetect1013()
    {
        $this->object->setSecondName('Кармалюк');
        $this->assertEquals('2-Кармалюк', $this->object->genderAutoDetect().'-Кармалюк');
    }
    public function testGenDetect1014()
    {
        $this->object->setSecondName('Карпенко');
        $this->assertEquals('2-Карпенко', $this->object->genderAutoDetect().'-Карпенко');
    }
    public function testGenDetect1015()
    {
        $this->object->setSecondName('Кириленко');
        $this->assertEquals('2-Кириленко', $this->object->genderAutoDetect().'-Кириленко');
    }
    public function testGenDetect1016()
    {
        $this->object->setSecondName('Кисилі');
        $this->assertEquals('2-Кисилі', $this->object->genderAutoDetect().'-Кисилі');
    }
    public function testGenDetect1017()
    {
        $this->object->setSecondName('Китаста');
        $this->assertEquals('2-Китаста', $this->object->genderAutoDetect().'-Китаста');
    }
    public function testGenDetect1018()
    {
        $this->object->setSecondName('Кицай');
        $this->assertEquals('2-Кицай', $this->object->genderAutoDetect().'-Кицай');
    }
    public function testGenDetect1019()
    {
        $this->object->setSecondName('Клименко');
        $this->assertEquals('2-Клименко', $this->object->genderAutoDetect().'-Клименко');
    }
    public function testGenDetect1020()
    {
        $this->object->setSecondName('Климчук');
        $this->assertEquals('2-Климчук', $this->object->genderAutoDetect().'-Климчук');
    }
    public function testGenDetect1021()
    {
        $this->object->setSecondName('Кмета');
        $this->assertEquals('2-Кмета', $this->object->genderAutoDetect().'-Кмета');
    }
    public function testGenDetect1022()
    {
        $this->object->setSecondName('Книш');
        $this->assertEquals('2-Книш', $this->object->genderAutoDetect().'-Книш');
    }
    public function testGenDetect1023()
    {
        $this->object->setSecondName('Коваленко');
        $this->assertEquals('2-Коваленко', $this->object->genderAutoDetect().'-Коваленко');
    }
    public function testGenDetect1024()
    {
        $this->object->setSecondName('Коваль');
        $this->assertEquals('2-Коваль', $this->object->genderAutoDetect().'-Коваль');
    }
    public function testGenDetect1025()
    {
        $this->object->setSecondName('Ковальчик');
        $this->assertEquals('2-Ковальчик', $this->object->genderAutoDetect().'-Ковальчик');
    }
    public function testGenDetect1026()
    {
        $this->object->setSecondName('Ковальчук');
        $this->assertEquals('2-Ковальчук', $this->object->genderAutoDetect().'-Ковальчук');
    }
    public function testGenDetect1027()
    {
        $this->object->setSecondName('Кованько');
        $this->assertEquals('2-Кованько', $this->object->genderAutoDetect().'-Кованько');
    }
    public function testGenDetect1028()
    {
        $this->object->setSecondName('Ковтун');
        $this->assertEquals('2-Ковтун', $this->object->genderAutoDetect().'-Ковтун');
    }
    public function testGenDetect1029()
    {
        $this->object->setSecondName('Козаченко');
        $this->assertEquals('2-Козаченко', $this->object->genderAutoDetect().'-Козаченко');
    }
    public function testGenDetect1030()
    {
        $this->object->setSecondName('Козачинська');
        $this->assertEquals('2-Козачинська', $this->object->genderAutoDetect().'-Козачинська');
    }
    public function testGenDetect1031()
    {
        $this->object->setSecondName('Козачок');
        $this->assertEquals('2-Козачок', $this->object->genderAutoDetect().'-Козачок');
    }
    public function testGenDetect1032()
    {
        $this->object->setSecondName('Козубенко');
        $this->assertEquals('2-Козубенко', $this->object->genderAutoDetect().'-Козубенко');
    }
    public function testGenDetect1033()
    {
        $this->object->setSecondName('Колесник');
        $this->assertEquals('2-Колесник', $this->object->genderAutoDetect().'-Колесник');
    }
    public function testGenDetect1034()
    {
        $this->object->setSecondName('Колодій');
        $this->assertEquals('2-Колодій', $this->object->genderAutoDetect().'-Колодій');
    }
    public function testGenDetect1035()
    {
        $this->object->setSecondName('Колодна');
        $this->assertEquals('2-Колодна', $this->object->genderAutoDetect().'-Колодна');
    }
    public function testGenDetect1036()
    {
        $this->object->setSecondName('Коломієць');
        $this->assertEquals('2-Коломієць', $this->object->genderAutoDetect().'-Коломієць');
    }
    public function testGenDetect1037()
    {
        $this->object->setSecondName('Комар');
        $this->assertEquals('2-Комар', $this->object->genderAutoDetect().'-Комар');
    }
    public function testGenDetect1038()
    {
        $this->object->setSecondName('Кондратюк');
        $this->assertEquals('2-Кондратюк', $this->object->genderAutoDetect().'-Кондратюк');
    }
    public function testGenDetect1039()
    {
        $this->object->setSecondName('Кониські');
        $this->assertEquals('2-Кониські', $this->object->genderAutoDetect().'-Кониські');
    }
    public function testGenDetect1040()
    {
        $this->object->setSecondName('Корецька');
        $this->assertEquals('2-Корецька', $this->object->genderAutoDetect().'-Корецька');
    }
    public function testGenDetect1041()
    {
        $this->object->setSecondName('Корж');
        $this->assertEquals('2-Корж', $this->object->genderAutoDetect().'-Корж');
    }
    public function testGenDetect1042()
    {
        $this->object->setSecondName('Корнійчук');
        $this->assertEquals('2-Корнійчук', $this->object->genderAutoDetect().'-Корнійчук');
    }
    public function testGenDetect1043()
    {
        $this->object->setSecondName('Коробка');
        $this->assertEquals('2-Коробка', $this->object->genderAutoDetect().'-Коробка');
    }
    public function testGenDetect1044()
    {
        $this->object->setSecondName('Королюк');
        $this->assertEquals('2-Королюк', $this->object->genderAutoDetect().'-Королюк');
    }
    public function testGenDetect1045()
    {
        $this->object->setSecondName('Короткевич');
        $this->assertEquals('2-Короткевич', $this->object->genderAutoDetect().'-Короткевич');
    }
    public function testGenDetect1046()
    {
        $this->object->setSecondName('Корпанюк');
        $this->assertEquals('2-Корпанюк', $this->object->genderAutoDetect().'-Корпанюк');
    }
    public function testGenDetect1047()
    {
        $this->object->setSecondName('Корчак');
        $this->assertEquals('2-Корчак', $this->object->genderAutoDetect().'-Корчак');
    }
    public function testGenDetect1048()
    {
        $this->object->setSecondName('Корчинська');
        $this->assertEquals('2-Корчинська', $this->object->genderAutoDetect().'-Корчинська');
    }
    public function testGenDetect1049()
    {
        $this->object->setSecondName('Косенко');
        $this->assertEquals('2-Косенко', $this->object->genderAutoDetect().'-Косенко');
    }
    public function testGenDetect1050()
    {
        $this->object->setSecondName('Костенко');
        $this->assertEquals('2-Костенко', $this->object->genderAutoDetect().'-Костенко');
    }
    public function testGenDetect1051()
    {
        $this->object->setSecondName('Коструба');
        $this->assertEquals('2-Коструба', $this->object->genderAutoDetect().'-Коструба');
    }
    public function testGenDetect1052()
    {
        $this->object->setSecondName('Костюк');
        $this->assertEquals('2-Костюк', $this->object->genderAutoDetect().'-Костюк');
    }
    public function testGenDetect1053()
    {
        $this->object->setSecondName('Котляр');
        $this->assertEquals('2-Котляр', $this->object->genderAutoDetect().'-Котляр');
    }
    public function testGenDetect1054()
    {
        $this->object->setSecondName('Котляревська');
        $this->assertEquals('2-Котляревська', $this->object->genderAutoDetect().'-Котляревська');
    }
    public function testGenDetect1055()
    {
        $this->object->setSecondName('Кравченко');
        $this->assertEquals('2-Кравченко', $this->object->genderAutoDetect().'-Кравченко');
    }
    public function testGenDetect1056()
    {
        $this->object->setSecondName('Кравчук');
        $this->assertEquals('2-Кравчук', $this->object->genderAutoDetect().'-Кравчук');
    }
    public function testGenDetect1057()
    {
        $this->object->setSecondName('Красовська');
        $this->assertEquals('2-Красовська', $this->object->genderAutoDetect().'-Красовська');
    }
    public function testGenDetect1058()
    {
        $this->object->setSecondName('Криворучко');
        $this->assertEquals('2-Криворучко', $this->object->genderAutoDetect().'-Криворучко');
    }
    public function testGenDetect1059()
    {
        $this->object->setSecondName('Крикуненко');
        $this->assertEquals('2-Крикуненко', $this->object->genderAutoDetect().'-Крикуненко');
    }
    public function testGenDetect1060()
    {
        $this->object->setSecondName('Крупські');
        $this->assertEquals('2-Крупські', $this->object->genderAutoDetect().'-Крупські');
    }
    public function testGenDetect1061()
    {
        $this->object->setSecondName('Кузьмінська');
        $this->assertEquals('2-Кузьмінська', $this->object->genderAutoDetect().'-Кузьмінська');
    }
    public function testGenDetect1062()
    {
        $this->object->setSecondName('Кулиняк');
        $this->assertEquals('2-Кулиняк', $this->object->genderAutoDetect().'-Кулиняк');
    }
    public function testGenDetect1063()
    {
        $this->object->setSecondName('Кульчицька');
        $this->assertEquals('2-Кульчицька', $this->object->genderAutoDetect().'-Кульчицька');
    }
    public function testGenDetect1064()
    {
        $this->object->setSecondName('Купчинська');
        $this->assertEquals('2-Купчинська', $this->object->genderAutoDetect().'-Купчинська');
    }
    public function testGenDetect1065()
    {
        $this->object->setSecondName('Курцевичі');
        $this->assertEquals('2-Курцевичі', $this->object->genderAutoDetect().'-Курцевичі');
    }
    public function testGenDetect1066()
    {
        $this->object->setSecondName('Кухаренко');
        $this->assertEquals('2-Кухаренко', $this->object->genderAutoDetect().'-Кухаренко');
    }
    public function testGenDetect1067()
    {
        $this->object->setSecondName('Куц');
        $this->assertEquals('2-Куц', $this->object->genderAutoDetect().'-Куц');
    }
    public function testGenDetect1068()
    {
        $this->object->setSecondName('Куценко');
        $this->assertEquals('2-Куценко', $this->object->genderAutoDetect().'-Куценко');
    }
    public function testGenDetect1069()
    {
        $this->object->setSecondName('Кучер');
        $this->assertEquals('2-Кучер', $this->object->genderAutoDetect().'-Кучер');
    }
    public function testGenDetect1070()
    {
        $this->object->setSecondName('Кучеренко');
        $this->assertEquals('2-Кучеренко', $this->object->genderAutoDetect().'-Кучеренко');
    }
    public function testGenDetect1071()
    {
        $this->object->setSecondName('Кушнір');
        $this->assertEquals('2-Кушнір', $this->object->genderAutoDetect().'-Кушнір');
    }
    public function testGenDetect1072()
    {
        $this->object->setSecondName('Лаба');
        $this->assertEquals('2-Лаба', $this->object->genderAutoDetect().'-Лаба');
    }
    public function testGenDetect1073()
    {
        $this->object->setSecondName('Лаврін');
        $this->assertEquals('2-Лаврін', $this->object->genderAutoDetect().'-Лаврін');
    }
    public function testGenDetect1074()
    {
        $this->object->setSecondName('Лаврик');
        $this->assertEquals('2-Лаврик', $this->object->genderAutoDetect().'-Лаврик');
    }
    public function testGenDetect1075()
    {
        $this->object->setSecondName('Лавриненко');
        $this->assertEquals('2-Лавриненко', $this->object->genderAutoDetect().'-Лавриненко');
    }
    public function testGenDetect1076()
    {
        $this->object->setSecondName('Лазаревські');
        $this->assertEquals('2-Лазаревські', $this->object->genderAutoDetect().'-Лазаревські');
    }
    public function testGenDetect1077()
    {
        $this->object->setSecondName('Лазарчук');
        $this->assertEquals('2-Лазарчук', $this->object->genderAutoDetect().'-Лазарчук');
    }
    public function testGenDetect1078()
    {
        $this->object->setSecondName('Лазорко');
        $this->assertEquals('2-Лазорко', $this->object->genderAutoDetect().'-Лазорко');
    }
    public function testGenDetect1079()
    {
        $this->object->setSecondName('Лашкевичі');
        $this->assertEquals('2-Лашкевичі', $this->object->genderAutoDetect().'-Лашкевичі');
    }
    public function testGenDetect1080()
    {
        $this->object->setSecondName('Левицька');
        $this->assertEquals('2-Левицька', $this->object->genderAutoDetect().'-Левицька');
    }
    public function testGenDetect1081()
    {
        $this->object->setSecondName('Левковські');
        $this->assertEquals('2-Левковські', $this->object->genderAutoDetect().'-Левковські');
    }
    public function testGenDetect1082()
    {
        $this->object->setSecondName('Левченко');
        $this->assertEquals('2-Левченко', $this->object->genderAutoDetect().'-Левченко');
    }
    public function testGenDetect1083()
    {
        $this->object->setSecondName('Леонтовичі');
        $this->assertEquals('2-Леонтовичі', $this->object->genderAutoDetect().'-Леонтовичі');
    }
    public function testGenDetect1084()
    {
        $this->object->setSecondName('Лесевичі');
        $this->assertEquals('2-Лесевичі', $this->object->genderAutoDetect().'-Лесевичі');
    }
    public function testGenDetect1085()
    {
        $this->object->setSecondName('Лисенко');
        $this->assertEquals('2-Лисенко', $this->object->genderAutoDetect().'-Лисенко');
    }
    public function testGenDetect1086()
    {
        $this->object->setSecondName('Литвиненко');
        $this->assertEquals('2-Литвиненко', $this->object->genderAutoDetect().'-Литвиненко');
    }
    public function testGenDetect1087()
    {
        $this->object->setSecondName('Литовченко');
        $this->assertEquals('2-Литовченко', $this->object->genderAutoDetect().'-Литовченко');
    }
    public function testGenDetect1088()
    {
        $this->object->setSecondName('Лозина-Лозинська');
        $this->assertEquals('2-Лозина-Лозинська', $this->object->genderAutoDetect().'-Лозина-Лозинська');
    }
    public function testGenDetect1089()
    {
        $this->object->setSecondName('Лопатинська');
        $this->assertEquals('2-Лопатинська', $this->object->genderAutoDetect().'-Лопатинська');
    }
    public function testGenDetect1090()
    {
        $this->object->setSecondName('Лукашевичі');
        $this->assertEquals('2-Лукашевичі', $this->object->genderAutoDetect().'-Лукашевичі');
    }
    public function testGenDetect1091()
    {
        $this->object->setSecondName('Лукомська');
        $this->assertEquals('2-Лукомська', $this->object->genderAutoDetect().'-Лукомська');
    }
    public function testGenDetect1092()
    {
        $this->object->setSecondName('Луценко');
        $this->assertEquals('2-Луценко', $this->object->genderAutoDetect().'-Луценко');
    }
    public function testGenDetect1093()
    {
        $this->object->setSecondName('Людкевич');
        $this->assertEquals('2-Людкевич', $this->object->genderAutoDetect().'-Людкевич');
    }
    public function testGenDetect1094()
    {
        $this->object->setSecondName('Ляшенко');
        $this->assertEquals('2-Ляшенко', $this->object->genderAutoDetect().'-Ляшенко');
    }
    public function testGenDetect1095()
    {
        $this->object->setSecondName('Мірошниченко');
        $this->assertEquals('2-Мірошниченко', $this->object->genderAutoDetect().'-Мірошниченко');
    }
    public function testGenDetect1096()
    {
        $this->object->setSecondName('Мірчук');
        $this->assertEquals('2-Мірчук', $this->object->genderAutoDetect().'-Мірчук');
    }
    public function testGenDetect1097()
    {
        $this->object->setSecondName('Міщенко');
        $this->assertEquals('2-Міщенко', $this->object->genderAutoDetect().'-Міщенко');
    }
    public function testGenDetect1098()
    {
        $this->object->setSecondName('Мазаракі');
        $this->assertEquals('2-Мазаракі', $this->object->genderAutoDetect().'-Мазаракі');
    }
    public function testGenDetect1099()
    {
        $this->object->setSecondName('Мазепи');
        $this->assertEquals('2-Мазепи', $this->object->genderAutoDetect().'-Мазепи');
    }
    public function testGenDetect1100()
    {
        $this->object->setSecondName('Мазур');
        $this->assertEquals('2-Мазур', $this->object->genderAutoDetect().'-Мазур');
    }
    public function testGenDetect1101()
    {
        $this->object->setSecondName('Макаренко');
        $this->assertEquals('2-Макаренко', $this->object->genderAutoDetect().'-Макаренко');
    }
    public function testGenDetect1102()
    {
        $this->object->setSecondName('Максименко');
        $this->assertEquals('2-Максименко', $this->object->genderAutoDetect().'-Максименко');
    }
    public function testGenDetect1103()
    {
        $this->object->setSecondName('Маланчук');
        $this->assertEquals('2-Маланчук', $this->object->genderAutoDetect().'-Маланчук');
    }
    public function testGenDetect1104()
    {
        $this->object->setSecondName('Малаховські');
        $this->assertEquals('2-Малаховські', $this->object->genderAutoDetect().'-Малаховські');
    }
    public function testGenDetect1105()
    {
        $this->object->setSecondName('Малишко');
        $this->assertEquals('2-Малишко', $this->object->genderAutoDetect().'-Малишко');
    }
    public function testGenDetect1106()
    {
        $this->object->setSecondName('Малкович');
        $this->assertEquals('2-Малкович', $this->object->genderAutoDetect().'-Малкович');
    }
    public function testGenDetect1107()
    {
        $this->object->setSecondName('Мамчур');
        $this->assertEquals('2-Мамчур', $this->object->genderAutoDetect().'-Мамчур');
    }
    public function testGenDetect1108()
    {
        $this->object->setSecondName('Маркевич');
        $this->assertEquals('2-Маркевич', $this->object->genderAutoDetect().'-Маркевич');
    }
    public function testGenDetect1109()
    {
        $this->object->setSecondName('Маркевичі');
        $this->assertEquals('2-Маркевичі', $this->object->genderAutoDetect().'-Маркевичі');
    }
    public function testGenDetect1110()
    {
        $this->object->setSecondName('Мартиненко');
        $this->assertEquals('2-Мартиненко', $this->object->genderAutoDetect().'-Мартиненко');
    }
    public function testGenDetect1111()
    {
        $this->object->setSecondName('Мартоси');
        $this->assertEquals('2-Мартоси', $this->object->genderAutoDetect().'-Мартоси');
    }
    public function testGenDetect1112()
    {
        $this->object->setSecondName('Марунчак');
        $this->assertEquals('2-Марунчак', $this->object->genderAutoDetect().'-Марунчак');
    }
    public function testGenDetect1113()
    {
        $this->object->setSecondName('Марценюк');
        $this->assertEquals('2-Марценюк', $this->object->genderAutoDetect().'-Марценюк');
    }
    public function testGenDetect1114()
    {
        $this->object->setSecondName('Марченко');
        $this->assertEquals('2-Марченко', $this->object->genderAutoDetect().'-Марченко');
    }
    public function testGenDetect1115()
    {
        $this->object->setSecondName('Марчук');
        $this->assertEquals('2-Марчук', $this->object->genderAutoDetect().'-Марчук');
    }
    public function testGenDetect1116()
    {
        $this->object->setSecondName('Масоха');
        $this->assertEquals('2-Масоха', $this->object->genderAutoDetect().'-Масоха');
    }
    public function testGenDetect1117()
    {
        $this->object->setSecondName('Матвієнко');
        $this->assertEquals('2-Матвієнко', $this->object->genderAutoDetect().'-Матвієнко');
    }
    public function testGenDetect1118()
    {
        $this->object->setSecondName('Матюшенко');
        $this->assertEquals('2-Матюшенко', $this->object->genderAutoDetect().'-Матюшенко');
    }
    public function testGenDetect1119()
    {
        $this->object->setSecondName('Маценко');
        $this->assertEquals('2-Маценко', $this->object->genderAutoDetect().'-Маценко');
    }
    public function testGenDetect1120()
    {
        $this->object->setSecondName('Мацюк');
        $this->assertEquals('2-Мацюк', $this->object->genderAutoDetect().'-Мацюк');
    }
    public function testGenDetect1121()
    {
        $this->object->setSecondName('Мельник');
        $this->assertEquals('2-Мельник', $this->object->genderAutoDetect().'-Мельник');
    }
    public function testGenDetect1122()
    {
        $this->object->setSecondName('Мельниченко');
        $this->assertEquals('2-Мельниченко', $this->object->genderAutoDetect().'-Мельниченко');
    }
    public function testGenDetect1123()
    {
        $this->object->setSecondName('Мельничук');
        $this->assertEquals('2-Мельничук', $this->object->genderAutoDetect().'-Мельничук');
    }
    public function testGenDetect1124()
    {
        $this->object->setSecondName('Микитенко');
        $this->assertEquals('2-Микитенко', $this->object->genderAutoDetect().'-Микитенко');
    }
    public function testGenDetect1125()
    {
        $this->object->setSecondName('Милорадовичі');
        $this->assertEquals('2-Милорадовичі', $this->object->genderAutoDetect().'-Милорадовичі');
    }
    public function testGenDetect1126()
    {
        $this->object->setSecondName('Мирон');
        $this->assertEquals('2-Мирон', $this->object->genderAutoDetect().'-Мирон');
    }
    public function testGenDetect1127()
    {
        $this->object->setSecondName('Михайленко');
        $this->assertEquals('2-Михайленко', $this->object->genderAutoDetect().'-Михайленко');
    }
    public function testGenDetect1128()
    {
        $this->object->setSecondName('Михайличенко');
        $this->assertEquals('2-Михайличенко', $this->object->genderAutoDetect().'-Михайличенко');
    }
    public function testGenDetect1129()
    {
        $this->object->setSecondName('Михайлюк');
        $this->assertEquals('2-Михайлюк', $this->object->genderAutoDetect().'-Михайлюк');
    }
    public function testGenDetect1130()
    {
        $this->object->setSecondName('Мицик');
        $this->assertEquals('2-Мицик', $this->object->genderAutoDetect().'-Мицик');
    }
    public function testGenDetect1131()
    {
        $this->object->setSecondName('Мовчан');
        $this->assertEquals('2-Мовчан', $this->object->genderAutoDetect().'-Мовчан');
    }
    public function testGenDetect1132()
    {
        $this->object->setSecondName('Могили');
        $this->assertEquals('2-Могили', $this->object->genderAutoDetect().'-Могили');
    }
    public function testGenDetect1133()
    {
        $this->object->setSecondName('Модзалевські');
        $this->assertEquals('2-Модзалевські', $this->object->genderAutoDetect().'-Модзалевські');
    }
    public function testGenDetect1134()
    {
        $this->object->setSecondName('Моргун');
        $this->assertEquals('2-Моргун', $this->object->genderAutoDetect().'-Моргун');
    }
    public function testGenDetect1135()
    {
        $this->object->setSecondName('Мороз');
        $this->assertEquals('2-Мороз', $this->object->genderAutoDetect().'-Мороз');
    }
    public function testGenDetect1136()
    {
        $this->object->setSecondName('Мосендзи');
        $this->assertEquals('2-Мосендзи', $this->object->genderAutoDetect().'-Мосендзи');
    }
    public function testGenDetect1137()
    {
        $this->object->setSecondName('Москаленко');
        $this->assertEquals('2-Москаленко', $this->object->genderAutoDetect().'-Москаленко');
    }
    public function testGenDetect1138()
    {
        $this->object->setSecondName('Москаль');
        $this->assertEquals('2-Москаль', $this->object->genderAutoDetect().'-Москаль');
    }
    public function testGenDetect1139()
    {
        $this->object->setSecondName('Мошак');
        $this->assertEquals('2-Мошак', $this->object->genderAutoDetect().'-Мошак');
    }
    public function testGenDetect1140()
    {
        $this->object->setSecondName('Муратова');
        $this->assertEquals('2-Муратова', $this->object->genderAutoDetect().'-Муратова');
    }
    public function testGenDetect1141()
    {
        $this->object->setSecondName('Мусієнко');
        $this->assertEquals('2-Мусієнко', $this->object->genderAutoDetect().'-Мусієнко');
    }
    public function testGenDetect1142()
    {
        $this->object->setSecondName('Назаренко');
        $this->assertEquals('2-Назаренко', $this->object->genderAutoDetect().'-Назаренко');
    }
    public function testGenDetect1143()
    {
        $this->object->setSecondName('Наливайко');
        $this->assertEquals('2-Наливайко', $this->object->genderAutoDetect().'-Наливайко');
    }
    public function testGenDetect1144()
    {
        $this->object->setSecondName('Нащинські');
        $this->assertEquals('2-Нащинські', $this->object->genderAutoDetect().'-Нащинські');
    }
    public function testGenDetect1145()
    {
        $this->object->setSecondName('Негребецька');
        $this->assertEquals('2-Негребецька', $this->object->genderAutoDetect().'-Негребецька');
    }
    public function testGenDetect1146()
    {
        $this->object->setSecondName('Непорожній');
        $this->assertEquals('2-Непорожній', $this->object->genderAutoDetect().'-Непорожній');
    }
    public function testGenDetect1147()
    {
        $this->object->setSecondName('Нестеренко');
        $this->assertEquals('2-Нестеренко', $this->object->genderAutoDetect().'-Нестеренко');
    }
    public function testGenDetect1148()
    {
        $this->object->setSecondName('Нечай');
        $this->assertEquals('2-Нечай', $this->object->genderAutoDetect().'-Нечай');
    }
    public function testGenDetect1149()
    {
        $this->object->setSecondName('Нечипоренко');
        $this->assertEquals('2-Нечипоренко', $this->object->genderAutoDetect().'-Нечипоренко');
    }
    public function testGenDetect1150()
    {
        $this->object->setSecondName('Оберемченко');
        $this->assertEquals('2-Оберемченко', $this->object->genderAutoDetect().'-Оберемченко');
    }
    public function testGenDetect1151()
    {
        $this->object->setSecondName('Овчаренко');
        $this->assertEquals('2-Овчаренко', $this->object->genderAutoDetect().'-Овчаренко');
    }
    public function testGenDetect1152()
    {
        $this->object->setSecondName('Ограновичі');
        $this->assertEquals('2-Ограновичі', $this->object->genderAutoDetect().'-Ограновичі');
    }
    public function testGenDetect1153()
    {
        $this->object->setSecondName('Олійник');
        $this->assertEquals('2-Олійник', $this->object->genderAutoDetect().'-Олійник');
    }
    public function testGenDetect1154()
    {
        $this->object->setSecondName('Олексієнко');
        $this->assertEquals('2-Олексієнко', $this->object->genderAutoDetect().'-Олексієнко');
    }
    public function testGenDetect1155()
    {
        $this->object->setSecondName('Омельченко');
        $this->assertEquals('2-Омельченко', $this->object->genderAutoDetect().'-Омельченко');
    }
    public function testGenDetect1156()
    {
        $this->object->setSecondName('Омельчук');
        $this->assertEquals('2-Омельчук', $this->object->genderAutoDetect().'-Омельчук');
    }
    public function testGenDetect1157()
    {
        $this->object->setSecondName('Онищенко');
        $this->assertEquals('2-Онищенко', $this->object->genderAutoDetect().'-Онищенко');
    }
    public function testGenDetect1158()
    {
        $this->object->setSecondName('Онопенко');
        $this->assertEquals('2-Онопенко', $this->object->genderAutoDetect().'-Онопенко');
    }
    public function testGenDetect1159()
    {
        $this->object->setSecondName('Опанасенко');
        $this->assertEquals('2-Опанасенко', $this->object->genderAutoDetect().'-Опанасенко');
    }
    public function testGenDetect1160()
    {
        $this->object->setSecondName('Орлики');
        $this->assertEquals('2-Орлики', $this->object->genderAutoDetect().'-Орлики');
    }
    public function testGenDetect1161()
    {
        $this->object->setSecondName('Осадчук');
        $this->assertEquals('2-Осадчук', $this->object->genderAutoDetect().'-Осадчук');
    }
    public function testGenDetect1162()
    {
        $this->object->setSecondName('Осика');
        $this->assertEquals('2-Осика', $this->object->genderAutoDetect().'-Осика');
    }
    public function testGenDetect1163()
    {
        $this->object->setSecondName('Остапенко');
        $this->assertEquals('2-Остапенко', $this->object->genderAutoDetect().'-Остапенко');
    }
    public function testGenDetect1164()
    {
        $this->object->setSecondName('Остроградська');
        $this->assertEquals('2-Остроградська', $this->object->genderAutoDetect().'-Остроградська');
    }
    public function testGenDetect1165()
    {
        $this->object->setSecondName('Острозькі');
        $this->assertEquals('2-Острозькі', $this->object->genderAutoDetect().'-Острозькі');
    }
    public function testGenDetect1166()
    {
        $this->object->setSecondName('Півторак');
        $this->assertEquals('2-Півторак', $this->object->genderAutoDetect().'-Півторак');
    }
    public function testGenDetect1167()
    {
        $this->object->setSecondName('Підопригора');
        $this->assertEquals('2-Підопригора', $this->object->genderAutoDetect().'-Підопригора');
    }
    public function testGenDetect1168()
    {
        $this->object->setSecondName('Павленко');
        $this->assertEquals('2-Павленко', $this->object->genderAutoDetect().'-Павленко');
    }
    public function testGenDetect1169()
    {
        $this->object->setSecondName('Павлюк');
        $this->assertEquals('2-Павлюк', $this->object->genderAutoDetect().'-Павлюк');
    }
    public function testGenDetect1170()
    {
        $this->object->setSecondName('Павлюченко');
        $this->assertEquals('2-Павлюченко', $this->object->genderAutoDetect().'-Павлюченко');
    }
    public function testGenDetect1171()
    {
        $this->object->setSecondName('Пазенко');
        $this->assertEquals('2-Пазенко', $this->object->genderAutoDetect().'-Пазенко');
    }
    public function testGenDetect1172()
    {
        $this->object->setSecondName('Паламарчук');
        $this->assertEquals('2-Паламарчук', $this->object->genderAutoDetect().'-Паламарчук');
    }
    public function testGenDetect1173()
    {
        $this->object->setSecondName('Панас');
        $this->assertEquals('2-Панас', $this->object->genderAutoDetect().'-Панас');
    }
    public function testGenDetect1174()
    {
        $this->object->setSecondName('Панасюк');
        $this->assertEquals('2-Панасюк', $this->object->genderAutoDetect().'-Панасюк');
    }
    public function testGenDetect1175()
    {
        $this->object->setSecondName('Паньківська');
        $this->assertEquals('2-Паньківська', $this->object->genderAutoDetect().'-Паньківська');
    }
    public function testGenDetect1176()
    {
        $this->object->setSecondName('Пархоменко');
        $this->assertEquals('2-Пархоменко', $this->object->genderAutoDetect().'-Пархоменко');
    }
    public function testGenDetect1177()
    {
        $this->object->setSecondName('Пасічник');
        $this->assertEquals('2-Пасічник', $this->object->genderAutoDetect().'-Пасічник');
    }
    public function testGenDetect1178()
    {
        $this->object->setSecondName('Пасько');
        $this->assertEquals('2-Пасько', $this->object->genderAutoDetect().'-Пасько');
    }
    public function testGenDetect1179()
    {
        $this->object->setSecondName('Пашко');
        $this->assertEquals('2-Пашко', $this->object->genderAutoDetect().'-Пашко');
    }
    public function testGenDetect1180()
    {
        $this->object->setSecondName('Пащенко');
        $this->assertEquals('2-Пащенко', $this->object->genderAutoDetect().'-Пащенко');
    }
    public function testGenDetect1181()
    {
        $this->object->setSecondName('Перебийніс');
        $this->assertEquals('2-Перебийніс', $this->object->genderAutoDetect().'-Перебийніс');
    }
    public function testGenDetect1182()
    {
        $this->object->setSecondName('Петренко');
        $this->assertEquals('2-Петренко', $this->object->genderAutoDetect().'-Петренко');
    }
    public function testGenDetect1183()
    {
        $this->object->setSecondName('Пилипенко');
        $this->assertEquals('2-Пилипенко', $this->object->genderAutoDetect().'-Пилипенко');
    }
    public function testGenDetect1184()
    {
        $this->object->setSecondName('Пилипчук');
        $this->assertEquals('2-Пилипчук', $this->object->genderAutoDetect().'-Пилипчук');
    }
    public function testGenDetect1185()
    {
        $this->object->setSecondName('Писаренко');
        $this->assertEquals('2-Писаренко', $this->object->genderAutoDetect().'-Писаренко');
    }
    public function testGenDetect1186()
    {
        $this->object->setSecondName('Писарчук');
        $this->assertEquals('2-Писарчук', $this->object->genderAutoDetect().'-Писарчук');
    }
    public function testGenDetect1187()
    {
        $this->object->setSecondName('Плющ');
        $this->assertEquals('2-Плющ', $this->object->genderAutoDetect().'-Плющ');
    }
    public function testGenDetect1188()
    {
        $this->object->setSecondName('Покотило');
        $this->assertEquals('2-Покотило', $this->object->genderAutoDetect().'-Покотило');
    }
    public function testGenDetect1189()
    {
        $this->object->setSecondName('Поліщук');
        $this->assertEquals('2-Поліщук', $this->object->genderAutoDetect().'-Поліщук');
    }
    public function testGenDetect1190()
    {
        $this->object->setSecondName('Польова');
        $this->assertEquals('2-Польова', $this->object->genderAutoDetect().'-Польова');
    }
    public function testGenDetect1191()
    {
        $this->object->setSecondName('Полянська');
        $this->assertEquals('2-Полянська', $this->object->genderAutoDetect().'-Полянська');
    }
    public function testGenDetect1192()
    {
        $this->object->setSecondName('Пономаренко');
        $this->assertEquals('2-Пономаренко', $this->object->genderAutoDetect().'-Пономаренко');
    }
    public function testGenDetect1193()
    {
        $this->object->setSecondName('Попадюк');
        $this->assertEquals('2-Попадюк', $this->object->genderAutoDetect().'-Попадюк');
    }
    public function testGenDetect1194()
    {
        $this->object->setSecondName('Попенко');
        $this->assertEquals('2-Попенко', $this->object->genderAutoDetect().'-Попенко');
    }
    public function testGenDetect1195()
    {
        $this->object->setSecondName('Потапенко');
        $this->assertEquals('2-Потапенко', $this->object->genderAutoDetect().'-Потапенко');
    }
    public function testGenDetect1196()
    {
        $this->object->setSecondName('Потебенько');
        $this->assertEquals('2-Потебенько', $this->object->genderAutoDetect().'-Потебенько');
    }
    public function testGenDetect1197()
    {
        $this->object->setSecondName('Прийма');
        $this->assertEquals('2-Прийма', $this->object->genderAutoDetect().'-Прийма');
    }
    public function testGenDetect1198()
    {
        $this->object->setSecondName('Приймак');
        $this->assertEquals('2-Приймак', $this->object->genderAutoDetect().'-Приймак');
    }
    public function testGenDetect1199()
    {
        $this->object->setSecondName('Присяжнюк');
        $this->assertEquals('2-Присяжнюк', $this->object->genderAutoDetect().'-Присяжнюк');
    }
    public function testGenDetect1200()
    {
        $this->object->setSecondName('Приходько');
        $this->assertEquals('2-Приходько', $this->object->genderAutoDetect().'-Приходько');
    }
    public function testGenDetect1201()
    {
        $this->object->setSecondName('Продан');
        $this->assertEquals('2-Продан', $this->object->genderAutoDetect().'-Продан');
    }
    public function testGenDetect1202()
    {
        $this->object->setSecondName('Проценко');
        $this->assertEquals('2-Проценко', $this->object->genderAutoDetect().'-Проценко');
    }
    public function testGenDetect1203()
    {
        $this->object->setSecondName('Проць');
        $this->assertEquals('2-Проць', $this->object->genderAutoDetect().'-Проць');
    }
    public function testGenDetect1204()
    {
        $this->object->setSecondName('Процюк');
        $this->assertEquals('2-Процюк', $this->object->genderAutoDetect().'-Процюк');
    }
    public function testGenDetect1205()
    {
        $this->object->setSecondName('Пушкар');
        $this->assertEquals('2-Пушкар', $this->object->genderAutoDetect().'-Пушкар');
    }
    public function testGenDetect1206()
    {
        $this->object->setSecondName('Різенки');
        $this->assertEquals('2-Різенки', $this->object->genderAutoDetect().'-Різенки');
    }
    public function testGenDetect1207()
    {
        $this->object->setSecondName('Різун');
        $this->assertEquals('2-Різун', $this->object->genderAutoDetect().'-Різун');
    }
    public function testGenDetect1208()
    {
        $this->object->setSecondName('Радченко');
        $this->assertEquals('2-Радченко', $this->object->genderAutoDetect().'-Радченко');
    }
    public function testGenDetect1209()
    {
        $this->object->setSecondName('Рибальченко');
        $this->assertEquals('2-Рибальченко', $this->object->genderAutoDetect().'-Рибальченко');
    }
    public function testGenDetect1210()
    {
        $this->object->setSecondName('Римар');
        $this->assertEquals('2-Римар', $this->object->genderAutoDetect().'-Римар');
    }
    public function testGenDetect1211()
    {
        $this->object->setSecondName('Родзянки');
        $this->assertEquals('2-Родзянки', $this->object->genderAutoDetect().'-Родзянки');
    }
    public function testGenDetect1212()
    {
        $this->object->setSecondName('Рожок');
        $this->assertEquals('2-Рожок', $this->object->genderAutoDetect().'-Рожок');
    }
    public function testGenDetect1213()
    {
        $this->object->setSecondName('Розумовські');
        $this->assertEquals('2-Розумовські', $this->object->genderAutoDetect().'-Розумовські');
    }
    public function testGenDetect1214()
    {
        $this->object->setSecondName('Романенко');
        $this->assertEquals('2-Романенко', $this->object->genderAutoDetect().'-Романенко');
    }
    public function testGenDetect1215()
    {
        $this->object->setSecondName('Романчук');
        $this->assertEquals('2-Романчук', $this->object->genderAutoDetect().'-Романчук');
    }
    public function testGenDetect1216()
    {
        $this->object->setSecondName('Романюк');
        $this->assertEquals('2-Романюк', $this->object->genderAutoDetect().'-Романюк');
    }
    public function testGenDetect1217()
    {
        $this->object->setSecondName('Рошкевич');
        $this->assertEquals('2-Рошкевич', $this->object->genderAutoDetect().'-Рошкевич');
    }
    public function testGenDetect1218()
    {
        $this->object->setSecondName('Рубан');
        $this->assertEquals('2-Рубан', $this->object->genderAutoDetect().'-Рубан');
    }
    public function testGenDetect1219()
    {
        $this->object->setSecondName('Рубани');
        $this->assertEquals('2-Рубани', $this->object->genderAutoDetect().'-Рубани');
    }
    public function testGenDetect1220()
    {
        $this->object->setSecondName('Руденко');
        $this->assertEquals('2-Руденко', $this->object->genderAutoDetect().'-Руденко');
    }
    public function testGenDetect1221()
    {
        $this->object->setSecondName('Рябовіл');
        $this->assertEquals('2-Рябовіл', $this->object->genderAutoDetect().'-Рябовіл');
    }
    public function testGenDetect1222()
    {
        $this->object->setSecondName('Сімашкевич');
        $this->assertEquals('2-Сімашкевич', $this->object->genderAutoDetect().'-Сімашкевич');
    }
    public function testGenDetect1223()
    {
        $this->object->setSecondName('Саєнко');
        $this->assertEquals('2-Саєнко', $this->object->genderAutoDetect().'-Саєнко');
    }
    public function testGenDetect1224()
    {
        $this->object->setSecondName('Савенко');
        $this->assertEquals('2-Савенко', $this->object->genderAutoDetect().'-Савенко');
    }
    public function testGenDetect1225()
    {
        $this->object->setSecondName('Савицька');
        $this->assertEquals('2-Савицька', $this->object->genderAutoDetect().'-Савицька');
    }
    public function testGenDetect1226()
    {
        $this->object->setSecondName('Савка');
        $this->assertEquals('2-Савка', $this->object->genderAutoDetect().'-Савка');
    }
    public function testGenDetect1227()
    {
        $this->object->setSecondName('Савченко');
        $this->assertEquals('2-Савченко', $this->object->genderAutoDetect().'-Савченко');
    }
    public function testGenDetect1228()
    {
        $this->object->setSecondName('Савчук');
        $this->assertEquals('2-Савчук', $this->object->genderAutoDetect().'-Савчук');
    }
    public function testGenDetect1229()
    {
        $this->object->setSecondName('Сак');
        $this->assertEquals('2-Сак', $this->object->genderAutoDetect().'-Сак');
    }
    public function testGenDetect1230()
    {
        $this->object->setSecondName('Самборська');
        $this->assertEquals('2-Самборська', $this->object->genderAutoDetect().'-Самборська');
    }
    public function testGenDetect1231()
    {
        $this->object->setSecondName('Самойлович');
        $this->assertEquals('2-Самойлович', $this->object->genderAutoDetect().'-Самойлович');
    }
    public function testGenDetect1232()
    {
        $this->object->setSecondName('Самусь');
        $this->assertEquals('2-Самусь', $this->object->genderAutoDetect().'-Самусь');
    }
    public function testGenDetect1233()
    {
        $this->object->setSecondName('Свида');
        $this->assertEquals('2-Свида', $this->object->genderAutoDetect().'-Свида');
    }
    public function testGenDetect1234()
    {
        $this->object->setSecondName('Семашко');
        $this->assertEquals('2-Семашко', $this->object->genderAutoDetect().'-Семашко');
    }
    public function testGenDetect1235()
    {
        $this->object->setSecondName('Семененко');
        $this->assertEquals('2-Семененко', $this->object->genderAutoDetect().'-Семененко');
    }
    public function testGenDetect1236()
    {
        $this->object->setSecondName('Семенець');
        $this->assertEquals('2-Семенець', $this->object->genderAutoDetect().'-Семенець');
    }
    public function testGenDetect1237()
    {
        $this->object->setSecondName('Семенина');
        $this->assertEquals('2-Семенина', $this->object->genderAutoDetect().'-Семенина');
    }
    public function testGenDetect1238()
    {
        $this->object->setSecondName('Семенченко');
        $this->assertEquals('2-Семенченко', $this->object->genderAutoDetect().'-Семенченко');
    }
    public function testGenDetect1239()
    {
        $this->object->setSecondName('Семенюк');
        $this->assertEquals('2-Семенюк', $this->object->genderAutoDetect().'-Семенюк');
    }
    public function testGenDetect1240()
    {
        $this->object->setSecondName('Семеренко');
        $this->assertEquals('2-Семеренко', $this->object->genderAutoDetect().'-Семеренко');
    }
    public function testGenDetect1241()
    {
        $this->object->setSecondName('Сидоренко');
        $this->assertEquals('2-Сидоренко', $this->object->genderAutoDetect().'-Сидоренко');
    }
    public function testGenDetect1242()
    {
        $this->object->setSecondName('Силенко');
        $this->assertEquals('2-Силенко', $this->object->genderAutoDetect().'-Силенко');
    }
    public function testGenDetect1243()
    {
        $this->object->setSecondName('Симоненко');
        $this->assertEquals('2-Симоненко', $this->object->genderAutoDetect().'-Симоненко');
    }
    public function testGenDetect1244()
    {
        $this->object->setSecondName('Симчич');
        $this->assertEquals('2-Симчич', $this->object->genderAutoDetect().'-Симчич');
    }
    public function testGenDetect1245()
    {
        $this->object->setSecondName('Скаржинські');
        $this->assertEquals('2-Скаржинські', $this->object->genderAutoDetect().'-Скаржинські');
    }
    public function testGenDetect1246()
    {
        $this->object->setSecondName('Скоропадські');
        $this->assertEquals('2-Скоропадські', $this->object->genderAutoDetect().'-Скоропадські');
    }
    public function testGenDetect1247()
    {
        $this->object->setSecondName('Скрипник');
        $this->assertEquals('2-Скрипник', $this->object->genderAutoDetect().'-Скрипник');
    }
    public function testGenDetect1248()
    {
        $this->object->setSecondName('Скуратівська');
        $this->assertEquals('2-Скуратівська', $this->object->genderAutoDetect().'-Скуратівська');
    }
    public function testGenDetect1249()
    {
        $this->object->setSecondName('Слободян');
        $this->assertEquals('2-Слободян', $this->object->genderAutoDetect().'-Слободян');
    }
    public function testGenDetect1250()
    {
        $this->object->setSecondName('Слободянюк');
        $this->assertEquals('2-Слободянюк', $this->object->genderAutoDetect().'-Слободянюк');
    }
    public function testGenDetect1251()
    {
        $this->object->setSecondName('Смик');
        $this->assertEquals('2-Смик', $this->object->genderAutoDetect().'-Смик');
    }
    public function testGenDetect1252()
    {
        $this->object->setSecondName('Смогоржевська');
        $this->assertEquals('2-Смогоржевська', $this->object->genderAutoDetect().'-Смогоржевська');
    }
    public function testGenDetect1253()
    {
        $this->object->setSecondName('Собчук');
        $this->assertEquals('2-Собчук', $this->object->genderAutoDetect().'-Собчук');
    }
    public function testGenDetect1254()
    {
        $this->object->setSecondName('Сопронюк');
        $this->assertEquals('2-Сопронюк', $this->object->genderAutoDetect().'-Сопронюк');
    }
    public function testGenDetect1255()
    {
        $this->object->setSecondName('Сорока');
        $this->assertEquals('2-Сорока', $this->object->genderAutoDetect().'-Сорока');
    }
    public function testGenDetect1256()
    {
        $this->object->setSecondName('Сохань');
        $this->assertEquals('2-Сохань', $this->object->genderAutoDetect().'-Сохань');
    }
    public function testGenDetect1257()
    {
        $this->object->setSecondName('Стадник');
        $this->assertEquals('2-Стадник', $this->object->genderAutoDetect().'-Стадник');
    }
    public function testGenDetect1258()
    {
        $this->object->setSecondName('Стельмах');
        $this->assertEquals('2-Стельмах', $this->object->genderAutoDetect().'-Стельмах');
    }
    public function testGenDetect1259()
    {
        $this->object->setSecondName('Степаненко');
        $this->assertEquals('2-Степаненко', $this->object->genderAutoDetect().'-Степаненко');
    }
    public function testGenDetect1260()
    {
        $this->object->setSecondName('Степура');
        $this->assertEquals('2-Степура', $this->object->genderAutoDetect().'-Степура');
    }
    public function testGenDetect1261()
    {
        $this->object->setSecondName('Стеценко');
        $this->assertEquals('2-Стеценко', $this->object->genderAutoDetect().'-Стеценко');
    }
    public function testGenDetect1262()
    {
        $this->object->setSecondName('Стецюк');
        $this->assertEquals('2-Стецюк', $this->object->genderAutoDetect().'-Стецюк');
    }
    public function testGenDetect1263()
    {
        $this->object->setSecondName('Стороженки');
        $this->assertEquals('2-Стороженки', $this->object->genderAutoDetect().'-Стороженки');
    }
    public function testGenDetect1264()
    {
        $this->object->setSecondName('Струтинська');
        $this->assertEquals('2-Струтинська', $this->object->genderAutoDetect().'-Струтинська');
    }
    public function testGenDetect1265()
    {
        $this->object->setSecondName('Сулима');
        $this->assertEquals('2-Сулима', $this->object->genderAutoDetect().'-Сулима');
    }
    public function testGenDetect1266()
    {
        $this->object->setSecondName('Сулими');
        $this->assertEquals('2-Сулими', $this->object->genderAutoDetect().'-Сулими');
    }
    public function testGenDetect1267()
    {
        $this->object->setSecondName('Супруненко');
        $this->assertEquals('2-Супруненко', $this->object->genderAutoDetect().'-Супруненко');
    }
    public function testGenDetect1268()
    {
        $this->object->setSecondName('Танські');
        $this->assertEquals('2-Танські', $this->object->genderAutoDetect().'-Танські');
    }
    public function testGenDetect1269()
    {
        $this->object->setSecondName('Тараненко');
        $this->assertEquals('2-Тараненко', $this->object->genderAutoDetect().'-Тараненко');
    }
    public function testGenDetect1270()
    {
        $this->object->setSecondName('Тарновські');
        $this->assertEquals('2-Тарновські', $this->object->genderAutoDetect().'-Тарновські');
    }
    public function testGenDetect1271()
    {
        $this->object->setSecondName('Татаренко');
        $this->assertEquals('2-Татаренко', $this->object->genderAutoDetect().'-Татаренко');
    }
    public function testGenDetect1272()
    {
        $this->object->setSecondName('Теплицька');
        $this->assertEquals('2-Теплицька', $this->object->genderAutoDetect().'-Теплицька');
    }
    public function testGenDetect1273()
    {
        $this->object->setSecondName('Терещенко');
        $this->assertEquals('2-Терещенко', $this->object->genderAutoDetect().'-Терещенко');
    }
    public function testGenDetect1274()
    {
        $this->object->setSecondName('Терещук');
        $this->assertEquals('2-Терещук', $this->object->genderAutoDetect().'-Терещук');
    }
    public function testGenDetect1275()
    {
        $this->object->setSecondName('Тесленко');
        $this->assertEquals('2-Тесленко', $this->object->genderAutoDetect().'-Тесленко');
    }
    public function testGenDetect1276()
    {
        $this->object->setSecondName('Тимошенко');
        $this->assertEquals('2-Тимошенко', $this->object->genderAutoDetect().'-Тимошенко');
    }
    public function testGenDetect1277()
    {
        $this->object->setSecondName('Тимощук');
        $this->assertEquals('2-Тимощук', $this->object->genderAutoDetect().'-Тимощук');
    }
    public function testGenDetect1278()
    {
        $this->object->setSecondName('Тимчак');
        $this->assertEquals('2-Тимчак', $this->object->genderAutoDetect().'-Тимчак');
    }
    public function testGenDetect1279()
    {
        $this->object->setSecondName('Титаренко');
        $this->assertEquals('2-Титаренко', $this->object->genderAutoDetect().'-Титаренко');
    }
    public function testGenDetect1280()
    {
        $this->object->setSecondName('Тишкевичі');
        $this->assertEquals('2-Тишкевичі', $this->object->genderAutoDetect().'-Тишкевичі');
    }
    public function testGenDetect1281()
    {
        $this->object->setSecondName('Тищенко');
        $this->assertEquals('2-Тищенко', $this->object->genderAutoDetect().'-Тищенко');
    }
    public function testGenDetect1282()
    {
        $this->object->setSecondName('Ткач');
        $this->assertEquals('2-Ткач', $this->object->genderAutoDetect().'-Ткач');
    }
    public function testGenDetect1283()
    {
        $this->object->setSecondName('Ткаченко');
        $this->assertEquals('2-Ткаченко', $this->object->genderAutoDetect().'-Ткаченко');
    }
    public function testGenDetect1284()
    {
        $this->object->setSecondName('Ткачук');
        $this->assertEquals('2-Ткачук', $this->object->genderAutoDetect().'-Ткачук');
    }
    public function testGenDetect1285()
    {
        $this->object->setSecondName('Тобілевичі');
        $this->assertEquals('2-Тобілевичі', $this->object->genderAutoDetect().'-Тобілевичі');
    }
    public function testGenDetect1286()
    {
        $this->object->setSecondName('Толочко');
        $this->assertEquals('2-Толочко', $this->object->genderAutoDetect().'-Толочко');
    }
    public function testGenDetect1287()
    {
        $this->object->setSecondName('Томенко');
        $this->assertEquals('2-Томенко', $this->object->genderAutoDetect().'-Томенко');
    }
    public function testGenDetect1288()
    {
        $this->object->setSecondName('Трощинські');
        $this->assertEquals('2-Трощинські', $this->object->genderAutoDetect().'-Трощинські');
    }
    public function testGenDetect1289()
    {
        $this->object->setSecondName('Тулуб');
        $this->assertEquals('2-Тулуб', $this->object->genderAutoDetect().'-Тулуб');
    }
    public function testGenDetect1290()
    {
        $this->object->setSecondName('Удовенко');
        $this->assertEquals('2-Удовенко', $this->object->genderAutoDetect().'-Удовенко');
    }
    public function testGenDetect1291()
    {
        $this->object->setSecondName('Удовиченко');
        $this->assertEquals('2-Удовиченко', $this->object->genderAutoDetect().'-Удовиченко');
    }
    public function testGenDetect1292()
    {
        $this->object->setSecondName('Усенко');
        $this->assertEquals('2-Усенко', $this->object->genderAutoDetect().'-Усенко');
    }
    public function testGenDetect1293()
    {
        $this->object->setSecondName('Філоненко');
        $this->assertEquals('2-Філоненко', $this->object->genderAutoDetect().'-Філоненко');
    }
    public function testGenDetect1294()
    {
        $this->object->setSecondName('Феденко');
        $this->assertEquals('2-Феденко', $this->object->genderAutoDetect().'-Феденко');
    }
    public function testGenDetect1295()
    {
        $this->object->setSecondName('Федоренко');
        $this->assertEquals('2-Федоренко', $this->object->genderAutoDetect().'-Федоренко');
    }
    public function testGenDetect1296()
    {
        $this->object->setSecondName('Федорук');
        $this->assertEquals('2-Федорук', $this->object->genderAutoDetect().'-Федорук');
    }
    public function testGenDetect1297()
    {
        $this->object->setSecondName('Фещенко');
        $this->assertEquals('2-Фещенко', $this->object->genderAutoDetect().'-Фещенко');
    }
    public function testGenDetect1298()
    {
        $this->object->setSecondName('Фоменко');
        $this->assertEquals('2-Фоменко', $this->object->genderAutoDetect().'-Фоменко');
    }
    public function testGenDetect1299()
    {
        $this->object->setSecondName('Ханенки');
        $this->assertEquals('2-Ханенки', $this->object->genderAutoDetect().'-Ханенки');
    }
    public function testGenDetect1300()
    {
        $this->object->setSecondName('Ханенко');
        $this->assertEquals('2-Ханенко', $this->object->genderAutoDetect().'-Ханенко');
    }
    public function testGenDetect1301()
    {
        $this->object->setSecondName('Харитоненки');
        $this->assertEquals('2-Харитоненки', $this->object->genderAutoDetect().'-Харитоненки');
    }
    public function testGenDetect1302()
    {
        $this->object->setSecondName('Харчук');
        $this->assertEquals('2-Харчук', $this->object->genderAutoDetect().'-Харчук');
    }
    public function testGenDetect1303()
    {
        $this->object->setSecondName('Хміляр');
        $this->assertEquals('2-Хміляр', $this->object->genderAutoDetect().'-Хміляр');
    }
    public function testGenDetect1304()
    {
        $this->object->setSecondName('Хмара');
        $this->assertEquals('2-Хмара', $this->object->genderAutoDetect().'-Хмара');
    }
    public function testGenDetect1305()
    {
        $this->object->setSecondName('Хмельницькі');
        $this->assertEquals('2-Хмельницькі', $this->object->genderAutoDetect().'-Хмельницькі');
    }
    public function testGenDetect1306()
    {
        $this->object->setSecondName('Холодовська');
        $this->assertEquals('2-Холодовська', $this->object->genderAutoDetect().'-Холодовська');
    }
    public function testGenDetect1307()
    {
        $this->object->setSecondName('Хоменко');
        $this->assertEquals('2-Хоменко', $this->object->genderAutoDetect().'-Хоменко');
    }
    public function testGenDetect1308()
    {
        $this->object->setSecondName('Царук');
        $this->assertEquals('2-Царук', $this->object->genderAutoDetect().'-Царук');
    }
    public function testGenDetect1309()
    {
        $this->object->setSecondName('Цибуленко');
        $this->assertEquals('2-Цибуленко', $this->object->genderAutoDetect().'-Цибуленко');
    }
    public function testGenDetect1310()
    {
        $this->object->setSecondName('Цюпа');
        $this->assertEquals('2-Цюпа', $this->object->genderAutoDetect().'-Цюпа');
    }
    public function testGenDetect1311()
    {
        $this->object->setSecondName('Чабаненко');
        $this->assertEquals('2-Чабаненко', $this->object->genderAutoDetect().'-Чабаненко');
    }
    public function testGenDetect1312()
    {
        $this->object->setSecondName('Чередниченко');
        $this->assertEquals('2-Чередниченко', $this->object->genderAutoDetect().'-Чередниченко');
    }
    public function testGenDetect1313()
    {
        $this->object->setSecondName('Чернявська');
        $this->assertEquals('2-Чернявська', $this->object->genderAutoDetect().'-Чернявська');
    }
    public function testGenDetect1314()
    {
        $this->object->setSecondName('Чорна');
        $this->assertEquals('2-Чорна', $this->object->genderAutoDetect().'-Чорна');
    }
    public function testGenDetect1315()
    {
        $this->object->setSecondName('Чорновіл');
        $this->assertEquals('2-Чорновіл', $this->object->genderAutoDetect().'-Чорновіл');
    }
    public function testGenDetect1316()
    {
        $this->object->setSecondName('Чуйкевич');
        $this->assertEquals('2-Чуйкевич', $this->object->genderAutoDetect().'-Чуйкевич');
    }
    public function testGenDetect1317()
    {
        $this->object->setSecondName('Чумак');
        $this->assertEquals('2-Чумак', $this->object->genderAutoDetect().'-Чумак');
    }
    public function testGenDetect1318()
    {
        $this->object->setSecondName('Чумаченко');
        $this->assertEquals('2-Чумаченко', $this->object->genderAutoDetect().'-Чумаченко');
    }
    public function testGenDetect1319()
    {
        $this->object->setSecondName('Шахрай');
        $this->assertEquals('2-Шахрай', $this->object->genderAutoDetect().'-Шахрай');
    }
    public function testGenDetect1320()
    {
        $this->object->setSecondName('Шевченко');
        $this->assertEquals('2-Шевченко', $this->object->genderAutoDetect().'-Шевченко');
    }
    public function testGenDetect1321()
    {
        $this->object->setSecondName('Шевчук');
        $this->assertEquals('2-Шевчук', $this->object->genderAutoDetect().'-Шевчук');
    }
    public function testGenDetect1322()
    {
        $this->object->setSecondName('Шелест');
        $this->assertEquals('2-Шелест', $this->object->genderAutoDetect().'-Шелест');
    }
    public function testGenDetect1323()
    {
        $this->object->setSecondName('Шептицькі');
        $this->assertEquals('2-Шептицькі', $this->object->genderAutoDetect().'-Шептицькі');
    }
    public function testGenDetect1324()
    {
        $this->object->setSecondName('Шинкарук');
        $this->assertEquals('2-Шинкарук', $this->object->genderAutoDetect().'-Шинкарук');
    }
    public function testGenDetect1325()
    {
        $this->object->setSecondName('Шкрібляк');
        $this->assertEquals('2-Шкрібляк', $this->object->genderAutoDetect().'-Шкрібляк');
    }
    public function testGenDetect1326()
    {
        $this->object->setSecondName('Шнайдер');
        $this->assertEquals('2-Шнайдер', $this->object->genderAutoDetect().'-Шнайдер');
    }
    public function testGenDetect1327()
    {
        $this->object->setSecondName('Шовкопляс');
        $this->assertEquals('2-Шовкопляс', $this->object->genderAutoDetect().'-Шовкопляс');
    }
    public function testGenDetect1328()
    {
        $this->object->setSecondName('Шульга');
        $this->assertEquals('2-Шульга', $this->object->genderAutoDetect().'-Шульга');
    }
    public function testGenDetect1329()
    {
        $this->object->setSecondName('Шухевич');
        $this->assertEquals('2-Шухевич', $this->object->genderAutoDetect().'-Шухевич');
    }
    public function testGenDetect1330()
    {
        $this->object->setSecondName('Щерба');
        $this->assertEquals('2-Щерба', $this->object->genderAutoDetect().'-Щерба');
    }
    public function testGenDetect1331()
    {
        $this->object->setSecondName('Щербак');
        $this->assertEquals('2-Щербак', $this->object->genderAutoDetect().'-Щербак');
    }
    public function testGenDetect1332()
    {
        $this->object->setSecondName('Щербань');
        $this->assertEquals('2-Щербань', $this->object->genderAutoDetect().'-Щербань');
    }
    public function testGenDetect1333()
    {
        $this->object->setSecondName('Юрженко');
        $this->assertEquals('2-Юрженко', $this->object->genderAutoDetect().'-Юрженко');
    }
    public function testGenDetect1334()
    {
        $this->object->setSecondName('Юрченко');
        $this->assertEquals('2-Юрченко', $this->object->genderAutoDetect().'-Юрченко');
    }
    public function testGenDetect1335()
    {
        $this->object->setSecondName('Юхименко');
        $this->assertEquals('2-Юхименко', $this->object->genderAutoDetect().'-Юхименко');
    }
    public function testGenDetect1336()
    {
        $this->object->setSecondName('Ющенко');
        $this->assertEquals('2-Ющенко', $this->object->genderAutoDetect().'-Ющенко');
    }
    public function testGenDetect1337()
    {
        $this->object->setSecondName('Яковенко');
        $this->assertEquals('2-Яковенко', $this->object->genderAutoDetect().'-Яковенко');
    }
    public function testGenDetect1338()
    {
        $this->object->setSecondName('Яковина');
        $this->assertEquals('2-Яковина', $this->object->genderAutoDetect().'-Яковина');
    }
    public function testGenDetect1339()
    {
        $this->object->setSecondName('Янко');
        $this->assertEquals('2-Янко', $this->object->genderAutoDetect().'-Янко');
    }
    public function testGenDetect1340()
    {
        $this->object->setSecondName('Ярема');
        $this->assertEquals('2-Ярема', $this->object->genderAutoDetect().'-Ярема');
    }
    public function testGenDetect1341()
    {
        $this->object->setSecondName('Яременко');
        $this->assertEquals('2-Яременко', $this->object->genderAutoDetect().'-Яременко');
    }
    public function testGenDetect1342()
    {
        $this->object->setSecondName('Яремко');
        $this->assertEquals('2-Яремко', $this->object->genderAutoDetect().'-Яремко');
    }
    public function testGenDetect1343()
    {
        $this->object->setSecondName('Яремчук');
        $this->assertEquals('2-Яремчук', $this->object->genderAutoDetect().'-Яремчук');
    }
    public function testGenDetect1344()
    {
        $this->object->setSecondName('Ярмоленко');
        $this->assertEquals('2-Ярмоленко', $this->object->genderAutoDetect().'-Ярмоленко');
    }
    public function testGenDetect1345()
    {
        $this->object->setSecondName('Ярмолюк');
        $this->assertEquals('2-Ярмолюк', $this->object->genderAutoDetect().'-Ярмолюк');
    }
    public function testGenDetect1346()
    {
        $this->object->setSecondName('Ярошенко');
        $this->assertEquals('2-Ярошенко', $this->object->genderAutoDetect().'-Ярошенко');
    }
    public function testGenDetect1347()
    {
        $this->object->setSecondName('Яценко');
        $this->assertEquals('2-Яценко', $this->object->genderAutoDetect().'-Яценко');
    }
    public function testGenDetect1348()
    {
        $this->object->setSecondName('Ященко');
        $this->assertEquals('2-Ященко', $this->object->genderAutoDetect().'-Ященко');
    }
    public function testGenDetect1349()
    {
        $this->object->setSecondName('Ґалаґан');
        $this->assertEquals('2-Ґалаґан', $this->object->genderAutoDetect().'-Ґалаґан');
    }
    public function testGenDetect1350()
    {
        $this->object->setSecondName('Євсєєва');
        $this->assertEquals('2-Євсєєва', $this->object->genderAutoDetect().'-Євсєєва');
    }
    public function testGenDetect1351()
    {
        $this->object->setSecondName('Єгорова');
        $this->assertEquals('2-Єгорова', $this->object->genderAutoDetect().'-Єгорова');
    }
    public function testGenDetect1352()
    {
        $this->object->setSecondName('Єлізарова');
        $this->assertEquals('2-Єлізарова', $this->object->genderAutoDetect().'-Єлізарова');
    }
    public function testGenDetect1353()
    {
        $this->object->setSecondName('Єрмилова');
        $this->assertEquals('2-Єрмилова', $this->object->genderAutoDetect().'-Єрмилова');
    }
    public function testGenDetect1354()
    {
        $this->object->setSecondName('Єрофєєва');
        $this->assertEquals('2-Єрофєєва', $this->object->genderAutoDetect().'-Єрофєєва');
    }
    public function testGenDetect1355()
    {
        $this->object->setSecondName('Єршова');
        $this->assertEquals('2-Єршова', $this->object->genderAutoDetect().'-Єршова');
    }
    public function testGenDetect1356()
    {
        $this->object->setSecondName('Єфімова');
        $this->assertEquals('2-Єфімова', $this->object->genderAutoDetect().'-Єфімова');
    }
    public function testGenDetect1357()
    {
        $this->object->setSecondName('Єфремова');
        $this->assertEquals('2-Єфремова', $this->object->genderAutoDetect().'-Єфремова');
    }
    public function testGenDetect1358()
    {
        $this->object->setSecondName('Іванова');
        $this->assertEquals('2-Іванова', $this->object->genderAutoDetect().'-Іванова');
    }
    public function testGenDetect1359()
    {
        $this->object->setSecondName('Ігнатова');
        $this->assertEquals('2-Ігнатова', $this->object->genderAutoDetect().'-Ігнатова');
    }
    public function testGenDetect1360()
    {
        $this->object->setSecondName('Іллюшина');
        $this->assertEquals('2-Іллюшина', $this->object->genderAutoDetect().'-Іллюшина');
    }
    public function testGenDetect1361()
    {
        $this->object->setSecondName('Ільїна');
        $this->assertEquals('2-Ільїна', $this->object->genderAutoDetect().'-Ільїна');
    }
    public function testGenDetect1362()
    {
        $this->object->setSecondName('Аєдоницька');
        $this->assertEquals('2-Аєдоницька', $this->object->genderAutoDetect().'-Аєдоницька');
    }
    public function testGenDetect1363()
    {
        $this->object->setSecondName('Абатурова');
        $this->assertEquals('2-Абатурова', $this->object->genderAutoDetect().'-Абатурова');
    }
    public function testGenDetect1364()
    {
        $this->object->setSecondName('Абдулова');
        $this->assertEquals('2-Абдулова', $this->object->genderAutoDetect().'-Абдулова');
    }
    public function testGenDetect1365()
    {
        $this->object->setSecondName('Абрамова');
        $this->assertEquals('2-Абрамова', $this->object->genderAutoDetect().'-Абрамова');
    }
    public function testGenDetect1366()
    {
        $this->object->setSecondName('Авілова');
        $this->assertEquals('2-Авілова', $this->object->genderAutoDetect().'-Авілова');
    }
    public function testGenDetect1367()
    {
        $this->object->setSecondName('Авдєєнко');
        $this->assertEquals('2-Авдєєнко', $this->object->genderAutoDetect().'-Авдєєнко');
    }
    public function testGenDetect1368()
    {
        $this->object->setSecondName('Аврамова');
        $this->assertEquals('2-Аврамова', $this->object->genderAutoDetect().'-Аврамова');
    }
    public function testGenDetect1369()
    {
        $this->object->setSecondName('Алексєєва');
        $this->assertEquals('2-Алексєєва', $this->object->genderAutoDetect().'-Алексєєва');
    }
    public function testGenDetect1370()
    {
        $this->object->setSecondName('Александрова');
        $this->assertEquals('2-Александрова', $this->object->genderAutoDetect().'-Александрова');
    }
    public function testGenDetect1371()
    {
        $this->object->setSecondName('Альошина');
        $this->assertEquals('2-Альошина', $this->object->genderAutoDetect().'-Альошина');
    }
    public function testGenDetect1372()
    {
        $this->object->setSecondName('Анісімова');
        $this->assertEquals('2-Анісімова', $this->object->genderAutoDetect().'-Анісімова');
    }
    public function testGenDetect1373()
    {
        $this->object->setSecondName('Анісова');
        $this->assertEquals('2-Анісова', $this->object->genderAutoDetect().'-Анісова');
    }
    public function testGenDetect1374()
    {
        $this->object->setSecondName('Ананьєва');
        $this->assertEquals('2-Ананьєва', $this->object->genderAutoDetect().'-Ананьєва');
    }
    public function testGenDetect1375()
    {
        $this->object->setSecondName('Андріанова');
        $this->assertEquals('2-Андріанова', $this->object->genderAutoDetect().'-Андріанова');
    }
    public function testGenDetect1376()
    {
        $this->object->setSecondName('Андріяшева');
        $this->assertEquals('2-Андріяшева', $this->object->genderAutoDetect().'-Андріяшева');
    }
    public function testGenDetect1377()
    {
        $this->object->setSecondName('Андреєва');
        $this->assertEquals('2-Андреєва', $this->object->genderAutoDetect().'-Андреєва');
    }
    public function testGenDetect1378()
    {
        $this->object->setSecondName('Антипова');
        $this->assertEquals('2-Антипова', $this->object->genderAutoDetect().'-Антипова');
    }
    public function testGenDetect1379()
    {
        $this->object->setSecondName('Антонова');
        $this->assertEquals('2-Антонова', $this->object->genderAutoDetect().'-Антонова');
    }
    public function testGenDetect1380()
    {
        $this->object->setSecondName('Анциферова');
        $this->assertEquals('2-Анциферова', $this->object->genderAutoDetect().'-Анциферова');
    }
    public function testGenDetect1381()
    {
        $this->object->setSecondName('Апухтіна');
        $this->assertEquals('2-Апухтіна', $this->object->genderAutoDetect().'-Апухтіна');
    }
    public function testGenDetect1382()
    {
        $this->object->setSecondName('Арбузова');
        $this->assertEquals('2-Арбузова', $this->object->genderAutoDetect().'-Арбузова');
    }
    public function testGenDetect1383()
    {
        $this->object->setSecondName('Аржанова');
        $this->assertEquals('2-Аржанова', $this->object->genderAutoDetect().'-Аржанова');
    }
    public function testGenDetect1384()
    {
        $this->object->setSecondName('Архипова');
        $this->assertEquals('2-Архипова', $this->object->genderAutoDetect().'-Архипова');
    }
    public function testGenDetect1385()
    {
        $this->object->setSecondName('Арцибушева');
        $this->assertEquals('2-Арцибушева', $this->object->genderAutoDetect().'-Арцибушева');
    }
    public function testGenDetect1386()
    {
        $this->object->setSecondName('Астраханцева');
        $this->assertEquals('2-Астраханцева', $this->object->genderAutoDetect().'-Астраханцева');
    }
    public function testGenDetect1387()
    {
        $this->object->setSecondName('Афіногенова');
        $this->assertEquals('2-Афіногенова', $this->object->genderAutoDetect().'-Афіногенова');
    }
    public function testGenDetect1388()
    {
        $this->object->setSecondName('Афанасьєва');
        $this->assertEquals('2-Афанасьєва', $this->object->genderAutoDetect().'-Афанасьєва');
    }
    public function testGenDetect1389()
    {
        $this->object->setSecondName('Бєлова');
        $this->assertEquals('2-Бєлова', $this->object->genderAutoDetect().'-Бєлова');
    }
    public function testGenDetect1390()
    {
        $this->object->setSecondName('Бєлоглазова');
        $this->assertEquals('2-Бєлоглазова', $this->object->genderAutoDetect().'-Бєлоглазова');
    }
    public function testGenDetect1391()
    {
        $this->object->setSecondName('Бєлоусова');
        $this->assertEquals('2-Бєлоусова', $this->object->genderAutoDetect().'-Бєлоусова');
    }
    public function testGenDetect1392()
    {
        $this->object->setSecondName('Бєляєва');
        $this->assertEquals('2-Бєляєва', $this->object->genderAutoDetect().'-Бєляєва');
    }
    public function testGenDetect1393()
    {
        $this->object->setSecondName('Бібикова');
        $this->assertEquals('2-Бібикова', $this->object->genderAutoDetect().'-Бібикова');
    }
    public function testGenDetect1394()
    {
        $this->object->setSecondName('Бажанова');
        $this->assertEquals('2-Бажанова', $this->object->genderAutoDetect().'-Бажанова');
    }
    public function testGenDetect1395()
    {
        $this->object->setSecondName('Баранова');
        $this->assertEquals('2-Баранова', $this->object->genderAutoDetect().'-Баранова');
    }
    public function testGenDetect1396()
    {
        $this->object->setSecondName('Баришнікова');
        $this->assertEquals('2-Баришнікова', $this->object->genderAutoDetect().'-Баришнікова');
    }
    public function testGenDetect1397()
    {
        $this->object->setSecondName('Барсова');
        $this->assertEquals('2-Барсова', $this->object->genderAutoDetect().'-Барсова');
    }
    public function testGenDetect1398()
    {
        $this->object->setSecondName('Батюшкова');
        $this->assertEquals('2-Батюшкова', $this->object->genderAutoDetect().'-Батюшкова');
    }
    public function testGenDetect1399()
    {
        $this->object->setSecondName('Бикова');
        $this->assertEquals('2-Бикова', $this->object->genderAutoDetect().'-Бикова');
    }
    public function testGenDetect1400()
    {
        $this->object->setSecondName('Блохіна');
        $this->assertEquals('2-Блохіна', $this->object->genderAutoDetect().'-Блохіна');
    }
    public function testGenDetect1401()
    {
        $this->object->setSecondName('Боброва');
        $this->assertEquals('2-Боброва', $this->object->genderAutoDetect().'-Боброва');
    }
    public function testGenDetect1402()
    {
        $this->object->setSecondName('Богданова');
        $this->assertEquals('2-Богданова', $this->object->genderAutoDetect().'-Богданова');
    }
    public function testGenDetect1403()
    {
        $this->object->setSecondName('Богомазова');
        $this->assertEquals('2-Богомазова', $this->object->genderAutoDetect().'-Богомазова');
    }
    public function testGenDetect1404()
    {
        $this->object->setSecondName('Бойкова');
        $this->assertEquals('2-Бойкова', $this->object->genderAutoDetect().'-Бойкова');
    }
    public function testGenDetect1405()
    {
        $this->object->setSecondName('Большакова');
        $this->assertEquals('2-Большакова', $this->object->genderAutoDetect().'-Большакова');
    }
    public function testGenDetect1406()
    {
        $this->object->setSecondName('Борисова');
        $this->assertEquals('2-Борисова', $this->object->genderAutoDetect().'-Борисова');
    }
    public function testGenDetect1407()
    {
        $this->object->setSecondName('Бочкова');
        $this->assertEquals('2-Бочкова', $this->object->genderAutoDetect().'-Бочкова');
    }
    public function testGenDetect1408()
    {
        $this->object->setSecondName('Бризгалова');
        $this->assertEquals('2-Бризгалова', $this->object->genderAutoDetect().'-Бризгалова');
    }
    public function testGenDetect1409()
    {
        $this->object->setSecondName('Брусилова');
        $this->assertEquals('2-Брусилова', $this->object->genderAutoDetect().'-Брусилова');
    }
    public function testGenDetect1410()
    {
        $this->object->setSecondName('Бутурліна');
        $this->assertEquals('2-Бутурліна', $this->object->genderAutoDetect().'-Бутурліна');
    }
    public function testGenDetect1411()
    {
        $this->object->setSecondName('Бутусова');
        $this->assertEquals('2-Бутусова', $this->object->genderAutoDetect().'-Бутусова');
    }
    public function testGenDetect1412()
    {
        $this->object->setSecondName('Варламова');
        $this->assertEquals('2-Варламова', $this->object->genderAutoDetect().'-Варламова');
    }
    public function testGenDetect1413()
    {
        $this->object->setSecondName('Васильєва');
        $this->assertEquals('2-Васильєва', $this->object->genderAutoDetect().'-Васильєва');
    }
    public function testGenDetect1414()
    {
        $this->object->setSecondName('Виноградова');
        $this->assertEquals('2-Виноградова', $this->object->genderAutoDetect().'-Виноградова');
    }
    public function testGenDetect1415()
    {
        $this->object->setSecondName('Власова');
        $this->assertEquals('2-Власова', $this->object->genderAutoDetect().'-Власова');
    }
    public function testGenDetect1416()
    {
        $this->object->setSecondName('Внукова');
        $this->assertEquals('2-Внукова', $this->object->genderAutoDetect().'-Внукова');
    }
    public function testGenDetect1417()
    {
        $this->object->setSecondName('Волкова');
        $this->assertEquals('2-Волкова', $this->object->genderAutoDetect().'-Волкова');
    }
    public function testGenDetect1418()
    {
        $this->object->setSecondName('Воробей');
        $this->assertEquals('2-Воробей', $this->object->genderAutoDetect().'-Воробей');
    }
    public function testGenDetect1419()
    {
        $this->object->setSecondName('Воробйова');
        $this->assertEquals('2-Воробйова', $this->object->genderAutoDetect().'-Воробйова');
    }
    public function testGenDetect1420()
    {
        $this->object->setSecondName('Вороніна');
        $this->assertEquals('2-Вороніна', $this->object->genderAutoDetect().'-Вороніна');
    }
    public function testGenDetect1421()
    {
        $this->object->setSecondName('Воронцова');
        $this->assertEquals('2-Воронцова', $this->object->genderAutoDetect().'-Воронцова');
    }
    public function testGenDetect1422()
    {
        $this->object->setSecondName('Ворошилова');
        $this->assertEquals('2-Ворошилова', $this->object->genderAutoDetect().'-Ворошилова');
    }
    public function testGenDetect1423()
    {
        $this->object->setSecondName('Гаврилова');
        $this->assertEquals('2-Гаврилова', $this->object->genderAutoDetect().'-Гаврилова');
    }
    public function testGenDetect1424()
    {
        $this->object->setSecondName('Герасимова');
        $this->assertEquals('2-Герасимова', $this->object->genderAutoDetect().'-Герасимова');
    }
    public function testGenDetect1425()
    {
        $this->object->setSecondName('Гончарова');
        $this->assertEquals('2-Гончарова', $this->object->genderAutoDetect().'-Гончарова');
    }
    public function testGenDetect1426()
    {
        $this->object->setSecondName('Горбунова');
        $this->assertEquals('2-Горбунова', $this->object->genderAutoDetect().'-Горбунова');
    }
    public function testGenDetect1427()
    {
        $this->object->setSecondName('Горчакова');
        $this->assertEquals('2-Горчакова', $this->object->genderAutoDetect().'-Горчакова');
    }
    public function testGenDetect1428()
    {
        $this->object->setSecondName('Горшкова');
        $this->assertEquals('2-Горшкова', $this->object->genderAutoDetect().'-Горшкова');
    }
    public function testGenDetect1429()
    {
        $this->object->setSecondName('Громова');
        $this->assertEquals('2-Громова', $this->object->genderAutoDetect().'-Громова');
    }
    public function testGenDetect1430()
    {
        $this->object->setSecondName('Гусєва');
        $this->assertEquals('2-Гусєва', $this->object->genderAutoDetect().'-Гусєва');
    }
    public function testGenDetect1431()
    {
        $this->object->setSecondName('Давидова');
        $this->assertEquals('2-Давидова', $this->object->genderAutoDetect().'-Давидова');
    }
    public function testGenDetect1432()
    {
        $this->object->setSecondName('Данилова');
        $this->assertEquals('2-Данилова', $this->object->genderAutoDetect().'-Данилова');
    }
    public function testGenDetect1433()
    {
        $this->object->setSecondName('Дарагана');
        $this->assertEquals('2-Дарагана', $this->object->genderAutoDetect().'-Дарагана');
    }
    public function testGenDetect1434()
    {
        $this->object->setSecondName('Дементьєва');
        $this->assertEquals('2-Дементьєва', $this->object->genderAutoDetect().'-Дементьєва');
    }
    public function testGenDetect1435()
    {
        $this->object->setSecondName('Денисова');
        $this->assertEquals('2-Денисова', $this->object->genderAutoDetect().'-Денисова');
    }
    public function testGenDetect1436()
    {
        $this->object->setSecondName('Дмитрієва');
        $this->assertEquals('2-Дмитрієва', $this->object->genderAutoDetect().'-Дмитрієва');
    }
    public function testGenDetect1437()
    {
        $this->object->setSecondName('Добролюбова');
        $this->assertEquals('2-Добролюбова', $this->object->genderAutoDetect().'-Добролюбова');
    }
    public function testGenDetect1438()
    {
        $this->object->setSecondName('Донськая');
        $this->assertEquals('2-Донськая', $this->object->genderAutoDetect().'-Донськая');
    }
    public function testGenDetect1439()
    {
        $this->object->setSecondName('Дорофєєва');
        $this->assertEquals('2-Дорофєєва', $this->object->genderAutoDetect().'-Дорофєєва');
    }
    public function testGenDetect1440()
    {
        $this->object->setSecondName('Дуброва');
        $this->assertEquals('2-Дуброва', $this->object->genderAutoDetect().'-Дуброва');
    }
    public function testGenDetect1441()
    {
        $this->object->setSecondName('Железнякова');
        $this->assertEquals('2-Железнякова', $this->object->genderAutoDetect().'-Железнякова');
    }
    public function testGenDetect1442()
    {
        $this->object->setSecondName('Жердєва');
        $this->assertEquals('2-Жердєва', $this->object->genderAutoDetect().'-Жердєва');
    }
    public function testGenDetect1443()
    {
        $this->object->setSecondName('Жукова');
        $this->assertEquals('2-Жукова', $this->object->genderAutoDetect().'-Жукова');
    }
    public function testGenDetect1444()
    {
        $this->object->setSecondName('Журавльова');
        $this->assertEquals('2-Журавльова', $this->object->genderAutoDetect().'-Журавльова');
    }
    public function testGenDetect1445()
    {
        $this->object->setSecondName('Заварова');
        $this->assertEquals('2-Заварова', $this->object->genderAutoDetect().'-Заварова');
    }
    public function testGenDetect1446()
    {
        $this->object->setSecondName('Загарова');
        $this->assertEquals('2-Загарова', $this->object->genderAutoDetect().'-Загарова');
    }
    public function testGenDetect1447()
    {
        $this->object->setSecondName('Зайцева');
        $this->assertEquals('2-Зайцева', $this->object->genderAutoDetect().'-Зайцева');
    }
    public function testGenDetect1448()
    {
        $this->object->setSecondName('Захарова');
        $this->assertEquals('2-Захарова', $this->object->genderAutoDetect().'-Захарова');
    }
    public function testGenDetect1449()
    {
        $this->object->setSecondName('Звєрєва');
        $this->assertEquals('2-Звєрєва', $this->object->genderAutoDetect().'-Звєрєва');
    }
    public function testGenDetect1450()
    {
        $this->object->setSecondName('Зерова');
        $this->assertEquals('2-Зерова', $this->object->genderAutoDetect().'-Зерова');
    }
    public function testGenDetect1451()
    {
        $this->object->setSecondName('Золотухіна');
        $this->assertEquals('2-Золотухіна', $this->object->genderAutoDetect().'-Золотухіна');
    }
    public function testGenDetect1452()
    {
        $this->object->setSecondName('Зубова');
        $this->assertEquals('2-Зубова', $this->object->genderAutoDetect().'-Зубова');
    }
    public function testGenDetect1453()
    {
        $this->object->setSecondName('Казакова');
        $this->assertEquals('2-Казакова', $this->object->genderAutoDetect().'-Казакова');
    }
    public function testGenDetect1454()
    {
        $this->object->setSecondName('Калініна');
        $this->assertEquals('2-Калініна', $this->object->genderAutoDetect().'-Калініна');
    }
    public function testGenDetect1455()
    {
        $this->object->setSecondName('Калашникова');
        $this->assertEquals('2-Калашникова', $this->object->genderAutoDetect().'-Калашникова');
    }
    public function testGenDetect1456()
    {
        $this->object->setSecondName('Карпова');
        $this->assertEquals('2-Карпова', $this->object->genderAutoDetect().'-Карпова');
    }
    public function testGenDetect1457()
    {
        $this->object->setSecondName('Каштанова');
        $this->assertEquals('2-Каштанова', $this->object->genderAutoDetect().'-Каштанова');
    }
    public function testGenDetect1458()
    {
        $this->object->setSecondName('Кисельова');
        $this->assertEquals('2-Кисельова', $this->object->genderAutoDetect().'-Кисельова');
    }
    public function testGenDetect1459()
    {
        $this->object->setSecondName('Ковальова');
        $this->assertEquals('2-Ковальова', $this->object->genderAutoDetect().'-Ковальова');
    }
    public function testGenDetect1460()
    {
        $this->object->setSecondName('Кожевникова');
        $this->assertEquals('2-Кожевникова', $this->object->genderAutoDetect().'-Кожевникова');
    }
    public function testGenDetect1461()
    {
        $this->object->setSecondName('Козлова');
        $this->assertEquals('2-Козлова', $this->object->genderAutoDetect().'-Козлова');
    }
    public function testGenDetect1462()
    {
        $this->object->setSecondName('Колесникова');
        $this->assertEquals('2-Колесникова', $this->object->genderAutoDetect().'-Колесникова');
    }
    public function testGenDetect1463()
    {
        $this->object->setSecondName('Кольцова');
        $this->assertEquals('2-Кольцова', $this->object->genderAutoDetect().'-Кольцова');
    }
    public function testGenDetect1464()
    {
        $this->object->setSecondName('Комарова');
        $this->assertEquals('2-Комарова', $this->object->genderAutoDetect().'-Комарова');
    }
    public function testGenDetect1465()
    {
        $this->object->setSecondName('Коновалова');
        $this->assertEquals('2-Коновалова', $this->object->genderAutoDetect().'-Коновалова');
    }
    public function testGenDetect1466()
    {
        $this->object->setSecondName('Конюхова');
        $this->assertEquals('2-Конюхова', $this->object->genderAutoDetect().'-Конюхова');
    }
    public function testGenDetect1467()
    {
        $this->object->setSecondName('Копилова');
        $this->assertEquals('2-Копилова', $this->object->genderAutoDetect().'-Копилова');
    }
    public function testGenDetect1468()
    {
        $this->object->setSecondName('Кормильцева');
        $this->assertEquals('2-Кормильцева', $this->object->genderAutoDetect().'-Кормильцева');
    }
    public function testGenDetect1469()
    {
        $this->object->setSecondName('Коробова');
        $this->assertEquals('2-Коробова', $this->object->genderAutoDetect().'-Коробова');
    }
    public function testGenDetect1470()
    {
        $this->object->setSecondName('Коровкіна');
        $this->assertEquals('2-Коровкіна', $this->object->genderAutoDetect().'-Коровкіна');
    }
    public function testGenDetect1471()
    {
        $this->object->setSecondName('Корольова');
        $this->assertEquals('2-Корольова', $this->object->genderAutoDetect().'-Корольова');
    }
    public function testGenDetect1472()
    {
        $this->object->setSecondName('Котова');
        $this->assertEquals('2-Котова', $this->object->genderAutoDetect().'-Котова');
    }
    public function testGenDetect1473()
    {
        $this->object->setSecondName('Краснова');
        $this->assertEquals('2-Краснова', $this->object->genderAutoDetect().'-Краснова');
    }
    public function testGenDetect1474()
    {
        $this->object->setSecondName('Крилова');
        $this->assertEquals('2-Крилова', $this->object->genderAutoDetect().'-Крилова');
    }
    public function testGenDetect1475()
    {
        $this->object->setSecondName('Кримова');
        $this->assertEquals('2-Кримова', $this->object->genderAutoDetect().'-Кримова');
    }
    public function testGenDetect1476()
    {
        $this->object->setSecondName('Крюкова');
        $this->assertEquals('2-Крюкова', $this->object->genderAutoDetect().'-Крюкова');
    }
    public function testGenDetect1477()
    {
        $this->object->setSecondName('Кудряшова');
        $this->assertEquals('2-Кудряшова', $this->object->genderAutoDetect().'-Кудряшова');
    }
    public function testGenDetect1478()
    {
        $this->object->setSecondName('Кузнецова');
        $this->assertEquals('2-Кузнецова', $this->object->genderAutoDetect().'-Кузнецова');
    }
    public function testGenDetect1479()
    {
        $this->object->setSecondName('Кузьміна');
        $this->assertEquals('2-Кузьміна', $this->object->genderAutoDetect().'-Кузьміна');
    }
    public function testGenDetect1480()
    {
        $this->object->setSecondName('Кулакова');
        $this->assertEquals('2-Кулакова', $this->object->genderAutoDetect().'-Кулакова');
    }
    public function testGenDetect1481()
    {
        $this->object->setSecondName('Куликова');
        $this->assertEquals('2-Куликова', $this->object->genderAutoDetect().'-Куликова');
    }
    public function testGenDetect1482()
    {
        $this->object->setSecondName('Куркова');
        $this->assertEquals('2-Куркова', $this->object->genderAutoDetect().'-Куркова');
    }
    public function testGenDetect1483()
    {
        $this->object->setSecondName('Курочкіна');
        $this->assertEquals('2-Курочкіна', $this->object->genderAutoDetect().'-Курочкіна');
    }
    public function testGenDetect1484()
    {
        $this->object->setSecondName('Лєскова');
        $this->assertEquals('2-Лєскова', $this->object->genderAutoDetect().'-Лєскова');
    }
    public function testGenDetect1485()
    {
        $this->object->setSecondName('Лідова');
        $this->assertEquals('2-Лідова', $this->object->genderAutoDetect().'-Лідова');
    }
    public function testGenDetect1486()
    {
        $this->object->setSecondName('Ладигіна');
        $this->assertEquals('2-Ладигіна', $this->object->genderAutoDetect().'-Ладигіна');
    }
    public function testGenDetect1487()
    {
        $this->object->setSecondName('Лазарєва');
        $this->assertEquals('2-Лазарєва', $this->object->genderAutoDetect().'-Лазарєва');
    }
    public function testGenDetect1488()
    {
        $this->object->setSecondName('Лебедєва');
        $this->assertEquals('2-Лебедєва', $this->object->genderAutoDetect().'-Лебедєва');
    }
    public function testGenDetect1489()
    {
        $this->object->setSecondName('Лихоносова');
        $this->assertEquals('2-Лихоносова', $this->object->genderAutoDetect().'-Лихоносова');
    }
    public function testGenDetect1490()
    {
        $this->object->setSecondName('Лосєва');
        $this->assertEquals('2-Лосєва', $this->object->genderAutoDetect().'-Лосєва');
    }
    public function testGenDetect1491()
    {
        $this->object->setSecondName('Львова');
        $this->assertEquals('2-Львова', $this->object->genderAutoDetect().'-Львова');
    }
    public function testGenDetect1492()
    {
        $this->object->setSecondName('Любимова');
        $this->assertEquals('2-Любимова', $this->object->genderAutoDetect().'-Любимова');
    }
    public function testGenDetect1493()
    {
        $this->object->setSecondName('Мілютіна');
        $this->assertEquals('2-Мілютіна', $this->object->genderAutoDetect().'-Мілютіна');
    }
    public function testGenDetect1494()
    {
        $this->object->setSecondName('Макарова');
        $this->assertEquals('2-Макарова', $this->object->genderAutoDetect().'-Макарова');
    }
    public function testGenDetect1495()
    {
        $this->object->setSecondName('Максимова');
        $this->assertEquals('2-Максимова', $this->object->genderAutoDetect().'-Максимова');
    }
    public function testGenDetect1496()
    {
        $this->object->setSecondName('Малакова');
        $this->assertEquals('2-Малакова', $this->object->genderAutoDetect().'-Малакова');
    }
    public function testGenDetect1497()
    {
        $this->object->setSecondName('Мамонова');
        $this->assertEquals('2-Мамонова', $this->object->genderAutoDetect().'-Мамонова');
    }
    public function testGenDetect1498()
    {
        $this->object->setSecondName('Манасеїна');
        $this->assertEquals('2-Манасеїна', $this->object->genderAutoDetect().'-Манасеїна');
    }
    public function testGenDetect1499()
    {
        $this->object->setSecondName('Маркова');
        $this->assertEquals('2-Маркова', $this->object->genderAutoDetect().'-Маркова');
    }
    public function testGenDetect1500()
    {
        $this->object->setSecondName('Мартенс');
        $this->assertEquals('2-Мартенс', $this->object->genderAutoDetect().'-Мартенс');
    }
    public function testGenDetect1501()
    {
        $this->object->setSecondName('Мартинова');
        $this->assertEquals('2-Мартинова', $this->object->genderAutoDetect().'-Мартинова');
    }
    public function testGenDetect1502()
    {
        $this->object->setSecondName('Масленнікова');
        $this->assertEquals('2-Масленнікова', $this->object->genderAutoDetect().'-Масленнікова');
    }
    public function testGenDetect1503()
    {
        $this->object->setSecondName('Маслова');
        $this->assertEquals('2-Маслова', $this->object->genderAutoDetect().'-Маслова');
    }
    public function testGenDetect1504()
    {
        $this->object->setSecondName('Матвєєва');
        $this->assertEquals('2-Матвєєва', $this->object->genderAutoDetect().'-Матвєєва');
    }
    public function testGenDetect1505()
    {
        $this->object->setSecondName('Медведєва');
        $this->assertEquals('2-Медведєва', $this->object->genderAutoDetect().'-Медведєва');
    }
    public function testGenDetect1506()
    {
        $this->object->setSecondName('Мельникова');
        $this->assertEquals('2-Мельникова', $this->object->genderAutoDetect().'-Мельникова');
    }
    public function testGenDetect1507()
    {
        $this->object->setSecondName('Миронова');
        $this->assertEquals('2-Миронова', $this->object->genderAutoDetect().'-Миронова');
    }
    public function testGenDetect1508()
    {
        $this->object->setSecondName('Михайлова');
        $this->assertEquals('2-Михайлова', $this->object->genderAutoDetect().'-Михайлова');
    }
    public function testGenDetect1509()
    {
        $this->object->setSecondName('Моїсєєва');
        $this->assertEquals('2-Моїсєєва', $this->object->genderAutoDetect().'-Моїсєєва');
    }
    public function testGenDetect1510()
    {
        $this->object->setSecondName('Моргунова');
        $this->assertEquals('2-Моргунова', $this->object->genderAutoDetect().'-Моргунова');
    }
    public function testGenDetect1511()
    {
        $this->object->setSecondName('Моркова');
        $this->assertEquals('2-Моркова', $this->object->genderAutoDetect().'-Моркова');
    }
    public function testGenDetect1512()
    {
        $this->object->setSecondName('Морозова');
        $this->assertEquals('2-Морозова', $this->object->genderAutoDetect().'-Морозова');
    }
    public function testGenDetect1513()
    {
        $this->object->setSecondName('Мухіна');
        $this->assertEquals('2-Мухіна', $this->object->genderAutoDetect().'-Мухіна');
    }
    public function testGenDetect1514()
    {
        $this->object->setSecondName('Нікітіна');
        $this->assertEquals('2-Нікітіна', $this->object->genderAutoDetect().'-Нікітіна');
    }
    public function testGenDetect1515()
    {
        $this->object->setSecondName('Ніколаєва');
        $this->assertEquals('2-Ніколаєва', $this->object->genderAutoDetect().'-Ніколаєва');
    }
    public function testGenDetect1516()
    {
        $this->object->setSecondName('Нікуліна');
        $this->assertEquals('2-Нікуліна', $this->object->genderAutoDetect().'-Нікуліна');
    }
    public function testGenDetect1517()
    {
        $this->object->setSecondName('Набокова');
        $this->assertEquals('2-Набокова', $this->object->genderAutoDetect().'-Набокова');
    }
    public function testGenDetect1518()
    {
        $this->object->setSecondName('Некрасова');
        $this->assertEquals('2-Некрасова', $this->object->genderAutoDetect().'-Некрасова');
    }
    public function testGenDetect1519()
    {
        $this->object->setSecondName('Новикова');
        $this->assertEquals('2-Новикова', $this->object->genderAutoDetect().'-Новикова');
    }
    public function testGenDetect1520()
    {
        $this->object->setSecondName('Орлова');
        $this->assertEquals('2-Орлова', $this->object->genderAutoDetect().'-Орлова');
    }
    public function testGenDetect1521()
    {
        $this->object->setSecondName('Осипова');
        $this->assertEquals('2-Осипова', $this->object->genderAutoDetect().'-Осипова');
    }
    public function testGenDetect1522()
    {
        $this->object->setSecondName('Павлова');
        $this->assertEquals('2-Павлова', $this->object->genderAutoDetect().'-Павлова');
    }
    public function testGenDetect1523()
    {
        $this->object->setSecondName('Павлушкова');
        $this->assertEquals('2-Павлушкова', $this->object->genderAutoDetect().'-Павлушкова');
    }
    public function testGenDetect1524()
    {
        $this->object->setSecondName('Панова');
        $this->assertEquals('2-Панова', $this->object->genderAutoDetect().'-Панова');
    }
    public function testGenDetect1525()
    {
        $this->object->setSecondName('Петрова');
        $this->assertEquals('2-Петрова', $this->object->genderAutoDetect().'-Петрова');
    }
    public function testGenDetect1526()
    {
        $this->object->setSecondName('Пильчикова');
        $this->assertEquals('2-Пильчикова', $this->object->genderAutoDetect().'-Пильчикова');
    }
    public function testGenDetect1527()
    {
        $this->object->setSecondName('Платонова');
        $this->assertEquals('2-Платонова', $this->object->genderAutoDetect().'-Платонова');
    }
    public function testGenDetect1528()
    {
        $this->object->setSecondName('Плеханова');
        $this->assertEquals('2-Плеханова', $this->object->genderAutoDetect().'-Плеханова');
    }
    public function testGenDetect1529()
    {
        $this->object->setSecondName('Полякова');
        $this->assertEquals('2-Полякова', $this->object->genderAutoDetect().'-Полякова');
    }
    public function testGenDetect1530()
    {
        $this->object->setSecondName('Пономарьова');
        $this->assertEquals('2-Пономарьова', $this->object->genderAutoDetect().'-Пономарьова');
    }
    public function testGenDetect1531()
    {
        $this->object->setSecondName('Попова');
        $this->assertEquals('2-Попова', $this->object->genderAutoDetect().'-Попова');
    }
    public function testGenDetect1532()
    {
        $this->object->setSecondName('Пояркова');
        $this->assertEquals('2-Пояркова', $this->object->genderAutoDetect().'-Пояркова');
    }
    public function testGenDetect1533()
    {
        $this->object->setSecondName('Пригунова');
        $this->assertEquals('2-Пригунова', $this->object->genderAutoDetect().'-Пригунова');
    }
    public function testGenDetect1534()
    {
        $this->object->setSecondName('Прошкіна');
        $this->assertEquals('2-Прошкіна', $this->object->genderAutoDetect().'-Прошкіна');
    }
    public function testGenDetect1535()
    {
        $this->object->setSecondName('Решетникова');
        $this->assertEquals('2-Решетникова', $this->object->genderAutoDetect().'-Решетникова');
    }
    public function testGenDetect1536()
    {
        $this->object->setSecondName('Рожкова');
        $this->assertEquals('2-Рожкова', $this->object->genderAutoDetect().'-Рожкова');
    }
    public function testGenDetect1537()
    {
        $this->object->setSecondName('Романова');
        $this->assertEquals('2-Романова', $this->object->genderAutoDetect().'-Романова');
    }
    public function testGenDetect1538()
    {
        $this->object->setSecondName('Рябова');
        $this->assertEquals('2-Рябова', $this->object->genderAutoDetect().'-Рябова');
    }
    public function testGenDetect1539()
    {
        $this->object->setSecondName('Сабліна');
        $this->assertEquals('2-Сабліна', $this->object->genderAutoDetect().'-Сабліна');
    }
    public function testGenDetect1540()
    {
        $this->object->setSecondName('Савіна');
        $this->assertEquals('2-Савіна', $this->object->genderAutoDetect().'-Савіна');
    }
    public function testGenDetect1541()
    {
        $this->object->setSecondName('Сазонова');
        $this->assertEquals('2-Сазонова', $this->object->genderAutoDetect().'-Сазонова');
    }
    public function testGenDetect1542()
    {
        $this->object->setSecondName('Сальникова');
        $this->assertEquals('2-Сальникова', $this->object->genderAutoDetect().'-Сальникова');
    }
    public function testGenDetect1543()
    {
        $this->object->setSecondName('Самойлова');
        $this->assertEquals('2-Самойлова', $this->object->genderAutoDetect().'-Самойлова');
    }
    public function testGenDetect1544()
    {
        $this->object->setSecondName('Самсонова');
        $this->assertEquals('2-Самсонова', $this->object->genderAutoDetect().'-Самсонова');
    }
    public function testGenDetect1545()
    {
        $this->object->setSecondName('Сбітнєва');
        $this->assertEquals('2-Сбітнєва', $this->object->genderAutoDetect().'-Сбітнєва');
    }
    public function testGenDetect1546()
    {
        $this->object->setSecondName('Свиридова');
        $this->assertEquals('2-Свиридова', $this->object->genderAutoDetect().'-Свиридова');
    }
    public function testGenDetect1547()
    {
        $this->object->setSecondName('Селезньова');
        $this->assertEquals('2-Селезньова', $this->object->genderAutoDetect().'-Селезньова');
    }
    public function testGenDetect1548()
    {
        $this->object->setSecondName('Семенова');
        $this->assertEquals('2-Семенова', $this->object->genderAutoDetect().'-Семенова');
    }
    public function testGenDetect1549()
    {
        $this->object->setSecondName('Сербіна');
        $this->assertEquals('2-Сербіна', $this->object->genderAutoDetect().'-Сербіна');
    }
    public function testGenDetect1550()
    {
        $this->object->setSecondName('Сергєєва');
        $this->assertEquals('2-Сергєєва', $this->object->genderAutoDetect().'-Сергєєва');
    }
    public function testGenDetect1551()
    {
        $this->object->setSecondName('Сибірякова');
        $this->assertEquals('2-Сибірякова', $this->object->genderAutoDetect().'-Сибірякова');
    }
    public function testGenDetect1552()
    {
        $this->object->setSecondName('Сидорова');
        $this->assertEquals('2-Сидорова', $this->object->genderAutoDetect().'-Сидорова');
    }
    public function testGenDetect1553()
    {
        $this->object->setSecondName('Симонова');
        $this->assertEquals('2-Симонова', $this->object->genderAutoDetect().'-Симонова');
    }
    public function testGenDetect1554()
    {
        $this->object->setSecondName('Синельникова');
        $this->assertEquals('2-Синельникова', $this->object->genderAutoDetect().'-Синельникова');
    }
    public function testGenDetect1555()
    {
        $this->object->setSecondName('Скобелева');
        $this->assertEquals('2-Скобелева', $this->object->genderAutoDetect().'-Скобелева');
    }
    public function testGenDetect1556()
    {
        $this->object->setSecondName('Скобліна');
        $this->assertEquals('2-Скобліна', $this->object->genderAutoDetect().'-Скобліна');
    }
    public function testGenDetect1557()
    {
        $this->object->setSecondName('Смирнова');
        $this->assertEquals('2-Смирнова', $this->object->genderAutoDetect().'-Смирнова');
    }
    public function testGenDetect1558()
    {
        $this->object->setSecondName('Снєгірьова');
        $this->assertEquals('2-Снєгірьова', $this->object->genderAutoDetect().'-Снєгірьова');
    }
    public function testGenDetect1559()
    {
        $this->object->setSecondName('Соболєва');
        $this->assertEquals('2-Соболєва', $this->object->genderAutoDetect().'-Соболєва');
    }
    public function testGenDetect1560()
    {
        $this->object->setSecondName('Соколова');
        $this->assertEquals('2-Соколова', $this->object->genderAutoDetect().'-Соколова');
    }
    public function testGenDetect1561()
    {
        $this->object->setSecondName('Солнцева');
        $this->assertEquals('2-Солнцева', $this->object->genderAutoDetect().'-Солнцева');
    }
    public function testGenDetect1562()
    {
        $this->object->setSecondName('Соловйова');
        $this->assertEquals('2-Соловйова', $this->object->genderAutoDetect().'-Соловйова');
    }
    public function testGenDetect1563()
    {
        $this->object->setSecondName('Сомова');
        $this->assertEquals('2-Сомова', $this->object->genderAutoDetect().'-Сомова');
    }
    public function testGenDetect1564()
    {
        $this->object->setSecondName('Сорокіна');
        $this->assertEquals('2-Сорокіна', $this->object->genderAutoDetect().'-Сорокіна');
    }
    public function testGenDetect1565()
    {
        $this->object->setSecondName('Стєклова');
        $this->assertEquals('2-Стєклова', $this->object->genderAutoDetect().'-Стєклова');
    }
    public function testGenDetect1566()
    {
        $this->object->setSecondName('Старкова');
        $this->assertEquals('2-Старкова', $this->object->genderAutoDetect().'-Старкова');
    }
    public function testGenDetect1567()
    {
        $this->object->setSecondName('Степанова');
        $this->assertEquals('2-Степанова', $this->object->genderAutoDetect().'-Степанова');
    }
    public function testGenDetect1568()
    {
        $this->object->setSecondName('Табакова');
        $this->assertEquals('2-Табакова', $this->object->genderAutoDetect().'-Табакова');
    }
    public function testGenDetect1569()
    {
        $this->object->setSecondName('Тарасова');
        $this->assertEquals('2-Тарасова', $this->object->genderAutoDetect().'-Тарасова');
    }
    public function testGenDetect1570()
    {
        $this->object->setSecondName('Терентьєва');
        $this->assertEquals('2-Терентьєва', $this->object->genderAutoDetect().'-Терентьєва');
    }
    public function testGenDetect1571()
    {
        $this->object->setSecondName('Тимофєєва');
        $this->assertEquals('2-Тимофєєва', $this->object->genderAutoDetect().'-Тимофєєва');
    }
    public function testGenDetect1572()
    {
        $this->object->setSecondName('Титова');
        $this->assertEquals('2-Титова', $this->object->genderAutoDetect().'-Титова');
    }
    public function testGenDetect1573()
    {
        $this->object->setSecondName('Тихомирова');
        $this->assertEquals('2-Тихомирова', $this->object->genderAutoDetect().'-Тихомирова');
    }
    public function testGenDetect1574()
    {
        $this->object->setSecondName('Тихонова');
        $this->assertEquals('2-Тихонова', $this->object->genderAutoDetect().'-Тихонова');
    }
    public function testGenDetect1575()
    {
        $this->object->setSecondName('Тюленєва');
        $this->assertEquals('2-Тюленєва', $this->object->genderAutoDetect().'-Тюленєва');
    }
    public function testGenDetect1576()
    {
        $this->object->setSecondName('Уварова');
        $this->assertEquals('2-Уварова', $this->object->genderAutoDetect().'-Уварова');
    }
    public function testGenDetect1577()
    {
        $this->object->setSecondName('Усова');
        $this->assertEquals('2-Усова', $this->object->genderAutoDetect().'-Усова');
    }
    public function testGenDetect1578()
    {
        $this->object->setSecondName('Устинова');
        $this->assertEquals('2-Устинова', $this->object->genderAutoDetect().'-Устинова');
    }
    public function testGenDetect1579()
    {
        $this->object->setSecondName('Філіппова');
        $this->assertEquals('2-Філіппова', $this->object->genderAutoDetect().'-Філіппова');
    }
    public function testGenDetect1580()
    {
        $this->object->setSecondName('Філатова');
        $this->assertEquals('2-Філатова', $this->object->genderAutoDetect().'-Філатова');
    }
    public function testGenDetect1581()
    {
        $this->object->setSecondName('Федорова');
        $this->assertEquals('2-Федорова', $this->object->genderAutoDetect().'-Федорова');
    }
    public function testGenDetect1582()
    {
        $this->object->setSecondName('Фоміна');
        $this->assertEquals('2-Фоміна', $this->object->genderAutoDetect().'-Фоміна');
    }
    public function testGenDetect1583()
    {
        $this->object->setSecondName('Фролова');
        $this->assertEquals('2-Фролова', $this->object->genderAutoDetect().'-Фролова');
    }
    public function testGenDetect1584()
    {
        $this->object->setSecondName('Хілкова');
        $this->assertEquals('2-Хілкова', $this->object->genderAutoDetect().'-Хілкова');
    }
    public function testGenDetect1585()
    {
        $this->object->setSecondName('Хвостова');
        $this->assertEquals('2-Хвостова', $this->object->genderAutoDetect().'-Хвостова');
    }
    public function testGenDetect1586()
    {
        $this->object->setSecondName('Худякова');
        $this->assertEquals('2-Худякова', $this->object->genderAutoDetect().'-Худякова');
    }
    public function testGenDetect1587()
    {
        $this->object->setSecondName('Цвєткова');
        $this->assertEquals('2-Цвєткова', $this->object->genderAutoDetect().'-Цвєткова');
    }
    public function testGenDetect1588()
    {
        $this->object->setSecondName('Чанова');
        $this->assertEquals('2-Чанова', $this->object->genderAutoDetect().'-Чанова');
    }
    public function testGenDetect1589()
    {
        $this->object->setSecondName('Чевкіна');
        $this->assertEquals('2-Чевкіна', $this->object->genderAutoDetect().'-Чевкіна');
    }
    public function testGenDetect1590()
    {
        $this->object->setSecondName('Черенкова');
        $this->assertEquals('2-Черенкова', $this->object->genderAutoDetect().'-Черенкова');
    }
    public function testGenDetect1591()
    {
        $this->object->setSecondName('Черепкова');
        $this->assertEquals('2-Черепкова', $this->object->genderAutoDetect().'-Черепкова');
    }
    public function testGenDetect1592()
    {
        $this->object->setSecondName('Чулкова');
        $this->assertEquals('2-Чулкова', $this->object->genderAutoDetect().'-Чулкова');
    }
    public function testGenDetect1593()
    {
        $this->object->setSecondName('Шевельова');
        $this->assertEquals('2-Шевельова', $this->object->genderAutoDetect().'-Шевельова');
    }
    public function testGenDetect1594()
    {
        $this->object->setSecondName('Шеліхова');
        $this->assertEquals('2-Шеліхова', $this->object->genderAutoDetect().'-Шеліхова');
    }
    public function testGenDetect1595()
    {
        $this->object->setSecondName('Шиніна');
        $this->assertEquals('2-Шиніна', $this->object->genderAutoDetect().'-Шиніна');
    }
    public function testGenDetect1596()
    {
        $this->object->setSecondName('Ширяєва');
        $this->assertEquals('2-Ширяєва', $this->object->genderAutoDetect().'-Ширяєва');
    }
    public function testGenDetect1597()
    {
        $this->object->setSecondName('Шишова');
        $this->assertEquals('2-Шишова', $this->object->genderAutoDetect().'-Шишова');
    }
    public function testGenDetect1598()
    {
        $this->object->setSecondName('Шулакова');
        $this->assertEquals('2-Шулакова', $this->object->genderAutoDetect().'-Шулакова');
    }
    public function testGenDetect1599()
    {
        $this->object->setSecondName('Щапова');
        $this->assertEquals('2-Щапова', $this->object->genderAutoDetect().'-Щапова');
    }
    public function testGenDetect1600()
    {
        $this->object->setSecondName('Щаслива');
        $this->assertEquals('2-Щаслива', $this->object->genderAutoDetect().'-Щаслива');
    }
    public function testGenDetect1601()
    {
        $this->object->setSecondName('Яковлєва');
        $this->assertEquals('2-Яковлєва', $this->object->genderAutoDetect().'-Яковлєва');
    }
    public function testGenDetect1602()
    {
        $this->object->setSecondName('Яшина');
        $this->assertEquals('2-Яшина', $this->object->genderAutoDetect().'-Яшина');
    }

}