<?php

require_once dirname(__FILE__) . '/../../Library/NCL.NameCase.ru.php';


class NCLNameCaseRuTest extends PHPUnit_Framework_TestCase
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
        $this->object = new NCLNameCaseRu;
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
        
        $this->assertEquals(explode(',','Августа,Августы,Августе,Августу,Августой,Августе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman1()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman2()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аврелия,Аврелии,Аврелии,Аврелию,Аврелией,Аврелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman3()
    {
        $this->object->setFirstName('Агния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агния,Агнии,Агнии,Агнию,Агнией,Агнии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman4()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman5()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агриппина,Агриппины,Агриппине,Агриппину,Агриппиной,Агриппине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman6()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаида,Аделаиды,Аделаиде,Аделаиду,Аделаидой,Аделаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman7()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделина,Аделины,Аделине,Аделину,Аделиной,Аделине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman8()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азиза,Азизы,Азизе,Азизу,Азизой,Азизе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman9()
    {
        $this->object->setFirstName('Аида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аида,Аиды,Аиде,Аиду,Аидой,Аиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman10()
    {
        $this->object->setFirstName('Александра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александра,Александры,Александре,Александру,Александрой,Александре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman11()
    {
        $this->object->setFirstName('Алина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алина,Алины,Алине,Алину,Алиной,Алине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman12()
    {
        $this->object->setFirstName('Алла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алла,Аллы,Алле,Аллу,Аллой,Алле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman13()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алсу,Алсу,Алсу,Алсу,Алсу,Алсу'), $this->object->getFirstNameCase());
    }
    public function testNameWoman14()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбина,Альбины,Альбине,Альбину,Альбиной,Альбине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman15()
    {
        $this->object->setFirstName('Алена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алена,Алены,Алене,Алену,Аленой,Алене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman16()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman17()
    {
        $this->object->setFirstName('Ангелина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ангелина,Ангелины,Ангелине,Ангелину,Ангелиной,Ангелине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman18()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman19()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисия,Анисии,Анисии,Анисию,Анисией,Анисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman20()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисья,Анисьи,Анисье,Анисью,Анисьей,Анисье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman21()
    {
        $this->object->setFirstName('Анна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анна,Анны,Анне,Анну,Анной,Анне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman22()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антонина,Антонины,Антонине,Антонину,Антониной,Антонине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman23()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анушка,Анушки,Анушке,Анушку,Анушкой,Анушке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman24()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлинария,Аполлинарии,Аполлинарии,Аполлинарию,Аполлинарией,Аполлинарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman25()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman26()
    {
        $this->object->setFirstName('Арна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Арна,Арны,Арне,Арну,Арной,Арне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman27()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman28()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аурика,Аурики,Аурике,Аурику,Аурикой,Аурике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman29()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аэлита,Аэлиты,Аэлите,Аэлиту,Аэлитой,Аэлите'), $this->object->getFirstNameCase());
    }
    public function testNameWoman30()
    {
        $this->object->setFirstName('Беата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беата,Беаты,Беате,Беату,Беатой,Беате'), $this->object->getFirstNameCase());
    }
    public function testNameWoman31()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman32()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентина,Валентины,Валентине,Валентину,Валентиной,Валентине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman33()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Варвара,Варвары,Варваре,Варвару,Варварой,Варваре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman34()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Василиса,Василисы,Василисе,Василису,Василисой,Василисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman35()
    {
        $this->object->setFirstName('Вера');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вера,Веры,Вере,Веру,Верой,Вере'), $this->object->getFirstNameCase());
    }
    public function testNameWoman36()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вероника,Вероники,Веронике,Веронику,Вероникой,Веронике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman37()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виктория,Виктории,Виктории,Викторию,Викторией,Виктории'), $this->object->getFirstNameCase());
    }
    public function testNameWoman38()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виолетта,Виолетты,Виолетте,Виолетту,Виолеттой,Виолетте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman39()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владиславы,Владиславе,Владиславу,Владиславой,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman40()
    {
        $this->object->setFirstName('Галина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галина,Галины,Галине,Галину,Галиной,Галине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman41()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Геннадия,Геннадии,Геннадии,Геннадию,Геннадией,Геннадии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman42()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глафира,Глафиры,Глафире,Глафиру,Глафирой,Глафире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman43()
    {
        $this->object->setFirstName('Дария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дария,Дарии,Дарии,Дарию,Дарией,Дарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman44()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman45()
    {
        $this->object->setFirstName('Диана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Диана,Дианы,Диане,Диану,Дианой,Диане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman46()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman47()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгения,Евгении,Евгении,Евгению,Евгенией,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman48()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman49()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евфросиния,Евфросинии,Евфросинии,Евфросинию,Евфросинией,Евфросинии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman50()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Екатерина,Екатерины,Екатерине,Екатерину,Екатериной,Екатерине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman51()
    {
        $this->object->setFirstName('Елена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елена,Елены,Елене,Елену,Еленой,Елене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman52()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елизавета,Елизаветы,Елизавете,Елизавету,Елизаветой,Елизавете'), $this->object->getFirstNameCase());
    }
    public function testNameWoman53()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жанна,Жанны,Жанне,Жанну,Жанной,Жанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman54()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зинаида,Зинаиды,Зинаиде,Зинаиду,Зинаидой,Зинаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman55()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman56()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зульфия,Зульфии,Зульфии,Зульфию,Зульфией,Зульфии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman57()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Изабелла,Изабеллы,Изабелле,Изабеллу,Изабеллой,Изабелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman58()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иляна,Иляны,Иляне,Иляну,Иляной,Иляне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman59()
    {
        $this->object->setFirstName('Инна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Инна,Инны,Инне,Инну,Инной,Инне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman60()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иоанна,Иоанны,Иоанне,Иоанну,Иоанной,Иоанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman61()
    {
        $this->object->setFirstName('Ирина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ирина,Ирины,Ирине,Ирину,Ириной,Ирине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman62()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman63()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman64()
    {
        $this->object->setFirstName('Камола');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Камола,Камолы,Камоле,Камолу,Камолой,Камоле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman65()
    {
        $this->object->setFirstName('Карина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карина,Карины,Карине,Карину,Кариной,Карине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman66()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каролина,Каролины,Каролине,Каролину,Каролиной,Каролине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman67()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman68()
    {
        $this->object->setFirstName('Клара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клара,Клары,Кларе,Клару,Кларой,Кларе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman69()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman70()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman71()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman72()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman73()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корнелия,Корнелии,Корнелии,Корнелию,Корнелией,Корнелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman74()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кристина,Кристины,Кристине,Кристину,Кристиной,Кристине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman75()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ксения,Ксении,Ксении,Ксению,Ксенией,Ксении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman76()
    {
        $this->object->setFirstName('Лада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лада,Лады,Ладе,Ладу,Ладой,Ладе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman77()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman78()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лейла,Лейлы,Лейле,Лейлу,Лейлой,Лейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman79()
    {
        $this->object->setFirstName('Леся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леся,Леси,Лесе,Лесю,Лесей,Лесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman80()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman81()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman82()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людмила,Людмилы,Людмиле,Людмилу,Людмилой,Людмиле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman83()
    {
        $this->object->setFirstName('Майя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Майя,Майи,Майе,Майю,Майей,Майе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman84()
    {
        $this->object->setFirstName('Мальвина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мальвина,Мальвины,Мальвине,Мальвину,Мальвиной,Мальвине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman85()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марианна,Марианны,Марианне,Марианну,Марианной,Марианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman86()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman87()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мафтуха,Мафтухи,Мафтухе,Мафтуху,Мафтухой,Мафтухе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman88()
    {
        $this->object->setFirstName('Маша');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маша,Маши,Маше,Машу,Машей,Маше'), $this->object->getFirstNameCase());
    }
    public function testNameWoman89()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мелания,Мелании,Мелании,Меланию,Меланией,Мелании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman90()
    {
        $this->object->setFirstName('Милена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милена,Милены,Милене,Милену,Миленой,Милене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman91()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мэри,Мэри,Мэри,Мэри,Мэри,Мэри'), $this->object->getFirstNameCase());
    }
    public function testNameWoman92()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman93()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman94()
    {
        $this->object->setFirstName('Нина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нина,Нины,Нине,Нину,Ниной,Нине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman95()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нинель,Нинели,Нинели,Нинель,Нинелью,Нинели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman96()
    {
        $this->object->setFirstName('Нона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нона,Ноны,Ноне,Нону,Ноной,Ноне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman97()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нонна,Нонны,Нонне,Нонну,Нонной,Нонне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman98()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оксана,Оксаны,Оксане,Оксану,Оксаной,Оксане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman99()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Октавия,Октавии,Октавии,Октавию,Октавией,Октавии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman100()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеся,Олеси,Олесе,Олесю,Олесей,Олесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman101()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ольга,Ольги,Ольге,Ольгу,Ольгой,Ольге'), $this->object->getFirstNameCase());
    }
    public function testNameWoman102()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлина,Павлины,Павлине,Павлину,Павлиной,Павлине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman103()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пелагея,Пелагеи,Пелагее,Пелагею,Пелагеей,Пелагее'), $this->object->getFirstNameCase());
    }
    public function testNameWoman104()
    {
        $this->object->setFirstName('Полина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полина,Полины,Полине,Полину,Полиной,Полине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman105()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman106()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman107()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Раиса,Раисы,Раисе,Раису,Раисой,Раисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman108()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman109()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ревекка,Ревекки,Ревекке,Ревекку,Ревеккой,Ревекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman110()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розалия,Розалии,Розалии,Розалию,Розалией,Розалии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman111()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розарио,Розарио,Розарио,Розарио,Розарио,Розарио'), $this->object->getFirstNameCase());
    }
    public function testNameWoman112()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman113()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Светлана,Светланы,Светлане,Светлану,Светланой,Светлане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman114()
    {
        $this->object->setFirstName('Снежана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Снежана,Снежаны,Снежане,Снежану,Снежаной,Снежане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman115()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman116()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанида,Степаниды,Степаниде,Степаниду,Степанидой,Степаниде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman117()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стефания,Стефании,Стефании,Стефанию,Стефанией,Стефании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman118()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суламифь,Суламифи,Суламифи,Суламифь,Суламифью,Суламифи'), $this->object->getFirstNameCase());
    }
    public function testNameWoman119()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таисия,Таисии,Таисии,Таисию,Таисией,Таисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman120()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тамара,Тамары,Тамаре,Тамару,Тамарой,Тамаре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman121()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татьяна,Татьяны,Татьяне,Татьяну,Татьяной,Татьяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman122()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman123()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульрика,Ульрики,Ульрике,Ульрику,Ульрикой,Ульрике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman124()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульяна,Ульяны,Ульяне,Ульяну,Ульяной,Ульяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman125()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Урсула,Урсулы,Урсуле,Урсулу,Урсулой,Урсуле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman126()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фаина,Фаины,Фаине,Фаину,Фаиной,Фаине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman127()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фатима,Фатимы,Фатиме,Фатиму,Фатимой,Фатиме'), $this->object->getFirstNameCase());
    }
    public function testNameWoman128()
    {
        $this->object->setFirstName('Феба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феба,Фебы,Фебе,Фебу,Фебой,Фебе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman129()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman130()
    {
        $this->object->setFirstName('Филлида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филлида,Филлиды,Филлиде,Филлиду,Филлидой,Филлиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman131()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фрида,Фриды,Фриде,Фриду,Фридой,Фриде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman132()
    {
        $this->object->setFirstName('Фекла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фекла,Феклы,Фекле,Феклу,Феклой,Фекле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman133()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шарлотта,Шарлотты,Шарлотте,Шарлотту,Шарлоттой,Шарлотте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman134()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman135()
    {
        $this->object->setFirstName('Шона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шона,Шоны,Шоне,Шону,Шоной,Шоне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman136()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элеонора,Элеоноры,Элеоноре,Элеонору,Элеонорой,Элеоноре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman137()
    {
        $this->object->setFirstName('Элина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элина,Элины,Элине,Элину,Элиной,Элине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman138()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman139()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman140()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлианна,Юлианны,Юлианне,Юлианну,Юлианной,Юлианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman141()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлия,Юлии,Юлии,Юлию,Юлией,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman142()
    {
        $this->object->setFirstName('Юния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юния,Юнии,Юнии,Юнию,Юнией,Юнии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman143()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярослава,Ярославы,Ярославе,Ярославу,Ярославой,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman144()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman145()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аурика,Аурики,Аурике,Аурику,Аурикой,Аурике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman146()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman147()
    {
        $this->object->setFirstName('Фекла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фекла,Феклы,Фекле,Феклу,Феклой,Фекле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman148()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каролина,Каролины,Каролине,Каролину,Каролиной,Каролине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman149()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman150()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мафтуха,Мафтухи,Мафтухе,Мафтуху,Мафтухой,Мафтухе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman151()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman152()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисья,Анисьи,Анисье,Анисью,Анисьей,Анисье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman153()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman154()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ксения,Ксении,Ксении,Ксению,Ксенией,Ксении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman155()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman156()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбина,Альбины,Альбине,Альбину,Альбиной,Альбине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman157()
    {
        $this->object->setFirstName('Дария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дария,Дарии,Дарии,Дарию,Дарией,Дарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman158()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таисия,Таисии,Таисии,Таисию,Таисией,Таисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman159()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Екатерина,Екатерины,Екатерине,Екатерину,Екатериной,Екатерине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman160()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman161()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анушка,Анушки,Анушке,Анушку,Анушкой,Анушке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman162()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman163()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman164()
    {
        $this->object->setFirstName('Анна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анна,Анны,Анне,Анну,Анной,Анне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman165()
    {
        $this->object->setFirstName('Елена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елена,Елены,Елене,Елену,Еленой,Елене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman166()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman167()
    {
        $this->object->setFirstName('Клара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клара,Клары,Кларе,Клару,Кларой,Кларе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman168()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman169()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глафира,Глафиры,Глафире,Глафиру,Глафирой,Глафире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman170()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman171()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нонна,Нонны,Нонне,Нонну,Нонной,Нонне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman172()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman173()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman174()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розалия,Розалии,Розалии,Розалию,Розалией,Розалии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman175()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлианна,Юлианны,Юлианне,Юлианну,Юлианной,Юлианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman176()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виктория,Виктории,Виктории,Викторию,Викторией,Виктории'), $this->object->getFirstNameCase());
    }
    public function testNameWoman177()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентина,Валентины,Валентине,Валентину,Валентиной,Валентине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman178()
    {
        $this->object->setFirstName('Галина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галина,Галины,Галине,Галину,Галиной,Галине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman179()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фрида,Фриды,Фриде,Фриду,Фридой,Фриде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman180()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисья,Анисьи,Анисье,Анисью,Анисьей,Анисье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman181()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman182()
    {
        $this->object->setFirstName('Ирина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ирина,Ирины,Ирине,Ирину,Ириной,Ирине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman183()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Октавия,Октавии,Октавии,Октавию,Октавией,Октавии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman184()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman185()
    {
        $this->object->setFirstName('Майя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Майя,Майи,Майе,Майю,Майей,Майе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman186()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нинель,Нинели,Нинели,Нинель,Нинелью,Нинели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman187()
    {
        $this->object->setFirstName('Феба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феба,Фебы,Фебе,Фебу,Фебой,Фебе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman188()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лейла,Лейлы,Лейле,Лейлу,Лейлой,Лейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman189()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman190()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людмила,Людмилы,Людмиле,Людмилу,Людмилой,Людмиле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman191()
    {
        $this->object->setFirstName('Нина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нина,Нины,Нине,Нину,Ниной,Нине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman192()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman193()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman194()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владиславы,Владиславе,Владиславу,Владиславой,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman195()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman196()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman197()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаида,Аделаиды,Аделаиде,Аделаиду,Аделаидой,Аделаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman198()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman199()
    {
        $this->object->setFirstName('Галина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галина,Галины,Галине,Галину,Галиной,Галине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman200()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульяна,Ульяны,Ульяне,Ульяну,Ульяной,Ульяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman201()
    {
        $this->object->setFirstName('Алла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алла,Аллы,Алле,Аллу,Аллой,Алле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman202()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman203()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman204()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman205()
    {
        $this->object->setFirstName('Александра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александра,Александры,Александре,Александру,Александрой,Александре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman206()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азиза,Азизы,Азизе,Азизу,Азизой,Азизе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman207()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаида,Аделаиды,Аделаиде,Аделаиду,Аделаидой,Аделаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman208()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мелания,Мелании,Мелании,Меланию,Меланией,Мелании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman209()
    {
        $this->object->setFirstName('Клара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клара,Клары,Кларе,Клару,Кларой,Кларе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman210()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аурика,Аурики,Аурике,Аурику,Аурикой,Аурике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman211()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аэлита,Аэлиты,Аэлите,Аэлиту,Аэлитой,Аэлите'), $this->object->getFirstNameCase());
    }
    public function testNameWoman212()
    {
        $this->object->setFirstName('Феба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феба,Фебы,Фебе,Фебу,Фебой,Фебе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman213()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбина,Альбины,Альбине,Альбину,Альбиной,Альбине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman214()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елизавета,Елизаветы,Елизавете,Елизавету,Елизаветой,Елизавете'), $this->object->getFirstNameCase());
    }
    public function testNameWoman215()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаида,Аделаиды,Аделаиде,Аделаиду,Аделаидой,Аделаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman216()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman217()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman218()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman219()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman220()
    {
        $this->object->setFirstName('Дария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дария,Дарии,Дарии,Дарию,Дарией,Дарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman221()
    {
        $this->object->setFirstName('Инна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Инна,Инны,Инне,Инну,Инной,Инне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman222()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентина,Валентины,Валентине,Валентину,Валентиной,Валентине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman223()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ксения,Ксении,Ксении,Ксению,Ксенией,Ксении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman224()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элеонора,Элеоноры,Элеоноре,Элеонору,Элеонорой,Элеоноре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman225()
    {
        $this->object->setFirstName('Нона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нона,Ноны,Ноне,Нону,Ноной,Ноне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman226()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделина,Аделины,Аделине,Аделину,Аделиной,Аделине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman227()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman228()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азиза,Азизы,Азизе,Азизу,Азизой,Азизе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman229()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman230()
    {
        $this->object->setFirstName('Полина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полина,Полины,Полине,Полину,Полиной,Полине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman231()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фатима,Фатимы,Фатиме,Фатиму,Фатимой,Фатиме'), $this->object->getFirstNameCase());
    }
    public function testNameWoman232()
    {
        $this->object->setFirstName('Беата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беата,Беаты,Беате,Беату,Беатой,Беате'), $this->object->getFirstNameCase());
    }
    public function testNameWoman233()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марианна,Марианны,Марианне,Марианну,Марианной,Марианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman234()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иоанна,Иоанны,Иоанне,Иоанну,Иоанной,Иоанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman235()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman236()
    {
        $this->object->setFirstName('Полина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полина,Полины,Полине,Полину,Полиной,Полине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman237()
    {
        $this->object->setFirstName('Алина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алина,Алины,Алине,Алину,Алиной,Алине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman238()
    {
        $this->object->setFirstName('Элина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элина,Элины,Элине,Элину,Элиной,Элине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman239()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нинель,Нинели,Нинели,Нинель,Нинелью,Нинели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman240()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman241()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman242()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman243()
    {
        $this->object->setFirstName('Диана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Диана,Дианы,Диане,Диану,Дианой,Диане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman244()
    {
        $this->object->setFirstName('Майя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Майя,Майи,Майе,Майю,Майей,Майе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman245()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ольга,Ольги,Ольге,Ольгу,Ольгой,Ольге'), $this->object->getFirstNameCase());
    }
    public function testNameWoman246()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman247()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman248()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman249()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman250()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вероника,Вероники,Веронике,Веронику,Вероникой,Веронике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman251()
    {
        $this->object->setFirstName('Алина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алина,Алины,Алине,Алину,Алиной,Алине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman252()
    {
        $this->object->setFirstName('Аида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аида,Аиды,Аиде,Аиду,Аидой,Аиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman253()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элеонора,Элеоноры,Элеоноре,Элеонору,Элеонорой,Элеоноре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman254()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman255()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шарлотта,Шарлотты,Шарлотте,Шарлотту,Шарлоттой,Шарлотте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman256()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman257()
    {
        $this->object->setFirstName('Карина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карина,Карины,Карине,Карину,Кариной,Карине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman258()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman259()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каролина,Каролины,Каролине,Каролину,Каролиной,Каролине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman260()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman261()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стефания,Стефании,Стефании,Стефанию,Стефанией,Стефании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman262()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розарио,Розарио,Розарио,Розарио,Розарио,Розарио'), $this->object->getFirstNameCase());
    }
    public function testNameWoman263()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman264()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman265()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азиза,Азизы,Азизе,Азизу,Азизой,Азизе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman266()
    {
        $this->object->setFirstName('Карина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карина,Карины,Карине,Карину,Кариной,Карине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman267()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman268()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глафира,Глафиры,Глафире,Глафиру,Глафирой,Глафире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman269()
    {
        $this->object->setFirstName('Леся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леся,Леси,Лесе,Лесю,Лесей,Лесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman270()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman271()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисия,Анисии,Анисии,Анисию,Анисией,Анисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman272()
    {
        $this->object->setFirstName('Мальвина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мальвина,Мальвины,Мальвине,Мальвину,Мальвиной,Мальвине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman273()
    {
        $this->object->setFirstName('Карина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карина,Карины,Карине,Карину,Кариной,Карине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman274()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зинаида,Зинаиды,Зинаиде,Зинаиду,Зинаидой,Зинаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman275()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman276()
    {
        $this->object->setFirstName('Алла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алла,Аллы,Алле,Аллу,Аллой,Алле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman277()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman278()
    {
        $this->object->setFirstName('Беата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беата,Беаты,Беате,Беату,Беатой,Беате'), $this->object->getFirstNameCase());
    }
    public function testNameWoman279()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman280()
    {
        $this->object->setFirstName('Карина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карина,Карины,Карине,Карину,Кариной,Карине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman281()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman282()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елизавета,Елизаветы,Елизавете,Елизавету,Елизаветой,Елизавете'), $this->object->getFirstNameCase());
    }
    public function testNameWoman283()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фатима,Фатимы,Фатиме,Фатиму,Фатимой,Фатиме'), $this->object->getFirstNameCase());
    }
    public function testNameWoman284()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисия,Анисии,Анисии,Анисию,Анисией,Анисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman285()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зульфия,Зульфии,Зульфии,Зульфию,Зульфией,Зульфии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman286()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman287()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фаина,Фаины,Фаине,Фаину,Фаиной,Фаине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman288()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman289()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татьяна,Татьяны,Татьяне,Татьяну,Татьяной,Татьяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman290()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульрика,Ульрики,Ульрике,Ульрику,Ульрикой,Ульрике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman291()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman292()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанида,Степаниды,Степаниде,Степаниду,Степанидой,Степаниде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman293()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зинаида,Зинаиды,Зинаиде,Зинаиду,Зинаидой,Зинаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman294()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman295()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агриппина,Агриппины,Агриппине,Агриппину,Агриппиной,Агриппине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman296()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мафтуха,Мафтухи,Мафтухе,Мафтуху,Мафтухой,Мафтухе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman297()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman298()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman299()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman300()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаида,Аделаиды,Аделаиде,Аделаиду,Аделаидой,Аделаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman301()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman302()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владиславы,Владиславе,Владиславу,Владиславой,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman303()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman304()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каролина,Каролины,Каролине,Каролину,Каролиной,Каролине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman305()
    {
        $this->object->setFirstName('Диана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Диана,Дианы,Диане,Диану,Дианой,Диане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman306()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman307()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman308()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иоанна,Иоанны,Иоанне,Иоанну,Иоанной,Иоанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman309()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розалия,Розалии,Розалии,Розалию,Розалией,Розалии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman310()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman311()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владиславы,Владиславе,Владиславу,Владиславой,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman312()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елизавета,Елизаветы,Елизавете,Елизавету,Елизаветой,Елизавете'), $this->object->getFirstNameCase());
    }
    public function testNameWoman313()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman314()
    {
        $this->object->setFirstName('Беата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беата,Беаты,Беате,Беату,Беатой,Беате'), $this->object->getFirstNameCase());
    }
    public function testNameWoman315()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman316()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman317()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Раиса,Раисы,Раисе,Раису,Раисой,Раисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman318()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мелания,Мелании,Мелании,Меланию,Меланией,Мелании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman319()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman320()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman321()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman322()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman323()
    {
        $this->object->setFirstName('Анна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анна,Анны,Анне,Анну,Анной,Анне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman324()
    {
        $this->object->setFirstName('Мальвина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мальвина,Мальвины,Мальвине,Мальвину,Мальвиной,Мальвине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman325()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мафтуха,Мафтухи,Мафтухе,Мафтуху,Мафтухой,Мафтухе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman326()
    {
        $this->object->setFirstName('Дария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дария,Дарии,Дарии,Дарию,Дарией,Дарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman327()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman328()
    {
        $this->object->setFirstName('Александра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Александра,Александры,Александре,Александру,Александрой,Александре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman329()
    {
        $this->object->setFirstName('Шона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шона,Шоны,Шоне,Шону,Шоной,Шоне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman330()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman331()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таисия,Таисии,Таисии,Таисию,Таисией,Таисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman332()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Екатерина,Екатерины,Екатерине,Екатерину,Екатериной,Екатерине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman333()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлина,Павлины,Павлине,Павлину,Павлиной,Павлине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman334()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Светлана,Светланы,Светлане,Светлану,Светланой,Светлане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman335()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шарлотта,Шарлотты,Шарлотте,Шарлотту,Шарлоттой,Шарлотте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman336()
    {
        $this->object->setFirstName('Феба');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феба,Фебы,Фебе,Фебу,Фебой,Фебе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman337()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman338()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman339()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Светлана,Светланы,Светлане,Светлану,Светланой,Светлане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman340()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman341()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алсу,Алсу,Алсу,Алсу,Алсу,Алсу'), $this->object->getFirstNameCase());
    }
    public function testNameWoman342()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глафира,Глафиры,Глафире,Глафиру,Глафирой,Глафире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman343()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лейла,Лейлы,Лейле,Лейлу,Лейлой,Лейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman344()
    {
        $this->object->setFirstName('Шона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шона,Шоны,Шоне,Шону,Шоной,Шоне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman345()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman346()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярослава,Ярославы,Ярославе,Ярославу,Ярославой,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman347()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman348()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азиза,Азизы,Азизе,Азизу,Азизой,Азизе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman349()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгения,Евгении,Евгении,Евгению,Евгенией,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman350()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman351()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman352()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тамара,Тамары,Тамаре,Тамару,Тамарой,Тамаре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman353()
    {
        $this->object->setFirstName('Нина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нина,Нины,Нине,Нину,Ниной,Нине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman354()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman355()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman356()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman357()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Раиса,Раисы,Раисе,Раису,Раисой,Раисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman358()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman359()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кристина,Кристины,Кристине,Кристину,Кристиной,Кристине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman360()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman361()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нонна,Нонны,Нонне,Нонну,Нонной,Нонне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman362()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman363()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman364()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татьяна,Татьяны,Татьяне,Татьяну,Татьяной,Татьяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman365()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman366()
    {
        $this->object->setFirstName('Полина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полина,Полины,Полине,Полину,Полиной,Полине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman367()
    {
        $this->object->setFirstName('Инна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Инна,Инны,Инне,Инну,Инной,Инне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman368()
    {
        $this->object->setFirstName('Шона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шона,Шоны,Шоне,Шону,Шоной,Шоне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman369()
    {
        $this->object->setFirstName('Алена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алена,Алены,Алене,Алену,Аленой,Алене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman370()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марианна,Марианны,Марианне,Марианну,Марианной,Марианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman371()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделина,Аделины,Аделине,Аделину,Аделиной,Аделине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman372()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman373()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мэри,Мэри,Мэри,Мэри,Мэри,Мэри'), $this->object->getFirstNameCase());
    }
    public function testNameWoman374()
    {
        $this->object->setFirstName('Аида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аида,Аиды,Аиде,Аиду,Аидой,Аиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman375()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman376()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аэлита,Аэлиты,Аэлите,Аэлиту,Аэлитой,Аэлите'), $this->object->getFirstNameCase());
    }
    public function testNameWoman377()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman378()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анушка,Анушки,Анушке,Анушку,Анушкой,Анушке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman379()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанида,Степаниды,Степаниде,Степаниду,Степанидой,Степаниде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman380()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman381()
    {
        $this->object->setFirstName('Клара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клара,Клары,Кларе,Клару,Кларой,Кларе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman382()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алсу,Алсу,Алсу,Алсу,Алсу,Алсу'), $this->object->getFirstNameCase());
    }
    public function testNameWoman383()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисия,Анисии,Анисии,Анисию,Анисией,Анисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman384()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman385()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman386()
    {
        $this->object->setFirstName('Беата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беата,Беаты,Беате,Беату,Беатой,Беате'), $this->object->getFirstNameCase());
    }
    public function testNameWoman387()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лейла,Лейлы,Лейле,Лейлу,Лейлой,Лейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman388()
    {
        $this->object->setFirstName('Милена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милена,Милены,Милене,Милену,Миленой,Милене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman389()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman390()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman391()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman392()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman393()
    {
        $this->object->setFirstName('Анна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анна,Анны,Анне,Анну,Анной,Анне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman394()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марианна,Марианны,Марианне,Марианну,Марианной,Марианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman395()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman396()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman397()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman398()
    {
        $this->object->setFirstName('Клара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клара,Клары,Кларе,Клару,Кларой,Кларе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman399()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman400()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman401()
    {
        $this->object->setFirstName('Галина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галина,Галины,Галине,Галину,Галиной,Галине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman402()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нонна,Нонны,Нонне,Нонну,Нонной,Нонне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman403()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman404()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman405()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman406()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman407()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лейла,Лейлы,Лейле,Лейлу,Лейлой,Лейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman408()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тамара,Тамары,Тамаре,Тамару,Тамарой,Тамаре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman409()
    {
        $this->object->setFirstName('Леся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леся,Леси,Лесе,Лесю,Лесей,Лесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman410()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аурика,Аурики,Аурике,Аурику,Аурикой,Аурике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman411()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman412()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иоанна,Иоанны,Иоанне,Иоанну,Иоанной,Иоанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman413()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman414()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman415()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman416()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Варвара,Варвары,Варваре,Варвару,Варварой,Варваре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman417()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иоанна,Иоанны,Иоанне,Иоанну,Иоанной,Иоанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman418()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman419()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульяна,Ульяны,Ульяне,Ульяну,Ульяной,Ульяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman420()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Урсула,Урсулы,Урсуле,Урсулу,Урсулой,Урсуле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman421()
    {
        $this->object->setFirstName('Алена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алена,Алены,Алене,Алену,Аленой,Алене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman422()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фатима,Фатимы,Фатиме,Фатиму,Фатимой,Фатиме'), $this->object->getFirstNameCase());
    }
    public function testNameWoman423()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman424()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фрида,Фриды,Фриде,Фриду,Фридой,Фриде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman425()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman426()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman427()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корнелия,Корнелии,Корнелии,Корнелию,Корнелией,Корнелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman428()
    {
        $this->object->setFirstName('Ирина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ирина,Ирины,Ирине,Ирину,Ириной,Ирине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman429()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виолетта,Виолетты,Виолетте,Виолетту,Виолеттой,Виолетте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman430()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman431()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman432()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman433()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корнелия,Корнелии,Корнелии,Корнелию,Корнелией,Корнелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman434()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суламифь,Суламифи,Суламифи,Суламифь,Суламифью,Суламифи'), $this->object->getFirstNameCase());
    }
    public function testNameWoman435()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульрика,Ульрики,Ульрике,Ульрику,Ульрикой,Ульрике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman436()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нонна,Нонны,Нонне,Нонну,Нонной,Нонне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman437()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman438()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman439()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярослава,Ярославы,Ярославе,Ярославу,Ярославой,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman440()
    {
        $this->object->setFirstName('Ирина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ирина,Ирины,Ирине,Ирину,Ириной,Ирине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman441()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman442()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мафтуха,Мафтухи,Мафтухе,Мафтуху,Мафтухой,Мафтухе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman443()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тамара,Тамары,Тамаре,Тамару,Тамарой,Тамаре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman444()
    {
        $this->object->setFirstName('Карина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карина,Карины,Карине,Карину,Кариной,Карине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman445()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman446()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Урсула,Урсулы,Урсуле,Урсулу,Урсулой,Урсуле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman447()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman448()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виктория,Виктории,Виктории,Викторию,Викторией,Виктории'), $this->object->getFirstNameCase());
    }
    public function testNameWoman449()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таисия,Таисии,Таисии,Таисию,Таисией,Таисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman450()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman451()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman452()
    {
        $this->object->setFirstName('Нона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нона,Ноны,Ноне,Нону,Ноной,Ноне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman453()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фатима,Фатимы,Фатиме,Фатиму,Фатимой,Фатиме'), $this->object->getFirstNameCase());
    }
    public function testNameWoman454()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людмила,Людмилы,Людмиле,Людмилу,Людмилой,Людмиле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman455()
    {
        $this->object->setFirstName('Карина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карина,Карины,Карине,Карину,Кариной,Карине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman456()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елизавета,Елизаветы,Елизавете,Елизавету,Елизаветой,Елизавете'), $this->object->getFirstNameCase());
    }
    public function testNameWoman457()
    {
        $this->object->setFirstName('Фекла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фекла,Феклы,Фекле,Феклу,Феклой,Фекле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman458()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman459()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аврелия,Аврелии,Аврелии,Аврелию,Аврелией,Аврелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman460()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Урсула,Урсулы,Урсуле,Урсулу,Урсулой,Урсуле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman461()
    {
        $this->object->setFirstName('Леся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леся,Леси,Лесе,Лесю,Лесей,Лесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman462()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman463()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зинаида,Зинаиды,Зинаиде,Зинаиду,Зинаидой,Зинаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman464()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людмила,Людмилы,Людмиле,Людмилу,Людмилой,Людмиле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman465()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman466()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman467()
    {
        $this->object->setFirstName('Леся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леся,Леси,Лесе,Лесю,Лесей,Лесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman468()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суламифь,Суламифи,Суламифи,Суламифь,Суламифью,Суламифи'), $this->object->getFirstNameCase());
    }
    public function testNameWoman469()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman470()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman471()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зульфия,Зульфии,Зульфии,Зульфию,Зульфией,Зульфии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman472()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нинель,Нинели,Нинели,Нинель,Нинелью,Нинели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman473()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алиса,Алисы,Алисе,Алису,Алисой,Алисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman474()
    {
        $this->object->setFirstName('Алина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алина,Алины,Алине,Алину,Алиной,Алине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman475()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman476()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеся,Олеси,Олесе,Олесю,Олесей,Олесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman477()
    {
        $this->object->setFirstName('Шона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шона,Шоны,Шоне,Шону,Шоной,Шоне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman478()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman479()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Геннадия,Геннадии,Геннадии,Геннадию,Геннадией,Геннадии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman480()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman481()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman482()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розалия,Розалии,Розалии,Розалию,Розалией,Розалии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman483()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пелагея,Пелагеи,Пелагее,Пелагею,Пелагеей,Пелагее'), $this->object->getFirstNameCase());
    }
    public function testNameWoman484()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлина,Павлины,Павлине,Павлину,Павлиной,Павлине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman485()
    {
        $this->object->setFirstName('Майя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Майя,Майи,Майе,Майю,Майей,Майе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman486()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman487()
    {
        $this->object->setFirstName('Ирина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ирина,Ирины,Ирине,Ирину,Ириной,Ирине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman488()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman489()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алсу,Алсу,Алсу,Алсу,Алсу,Алсу'), $this->object->getFirstNameCase());
    }
    public function testNameWoman490()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman491()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пелагея,Пелагеи,Пелагее,Пелагею,Пелагеей,Пелагее'), $this->object->getFirstNameCase());
    }
    public function testNameWoman492()
    {
        $this->object->setFirstName('Алла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алла,Аллы,Алле,Аллу,Аллой,Алле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman493()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Василиса,Василисы,Василисе,Василису,Василисой,Василисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman494()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлинария,Аполлинарии,Аполлинарии,Аполлинарию,Аполлинарией,Аполлинарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman495()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбина,Альбины,Альбине,Альбину,Альбиной,Альбине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman496()
    {
        $this->object->setFirstName('Полина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полина,Полины,Полине,Полину,Полиной,Полине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman497()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman498()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фрида,Фриды,Фриде,Фриду,Фридой,Фриде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman499()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman500()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman501()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman502()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аврелия,Аврелии,Аврелии,Аврелию,Аврелией,Аврелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman503()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman504()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нонна,Нонны,Нонне,Нонну,Нонной,Нонне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman505()
    {
        $this->object->setFirstName('Алена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алена,Алены,Алене,Алену,Аленой,Алене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman506()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фрида,Фриды,Фриде,Фриду,Фридой,Фриде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman507()
    {
        $this->object->setFirstName('Диана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Диана,Дианы,Диане,Диану,Дианой,Диане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman508()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman509()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman510()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алсу,Алсу,Алсу,Алсу,Алсу,Алсу'), $this->object->getFirstNameCase());
    }
    public function testNameWoman511()
    {
        $this->object->setFirstName('Майя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Майя,Майи,Майе,Майю,Майей,Майе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman512()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Варвара,Варвары,Варваре,Варвару,Варварой,Варваре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman513()
    {
        $this->object->setFirstName('Диана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Диана,Дианы,Диане,Диану,Дианой,Диане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman514()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оксана,Оксаны,Оксане,Оксану,Оксаной,Оксане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman515()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Светлана,Светланы,Светлане,Светлану,Светланой,Светлане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman516()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman517()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елизавета,Елизаветы,Елизавете,Елизавету,Елизаветой,Елизавете'), $this->object->getFirstNameCase());
    }
    public function testNameWoman518()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеся,Олеси,Олесе,Олесю,Олесей,Олесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman519()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суламифь,Суламифи,Суламифи,Суламифь,Суламифью,Суламифи'), $this->object->getFirstNameCase());
    }
    public function testNameWoman520()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Октавия,Октавии,Октавии,Октавию,Октавией,Октавии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman521()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman522()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ревекка,Ревекки,Ревекке,Ревекку,Ревеккой,Ревекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman523()
    {
        $this->object->setFirstName('Маша');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маша,Маши,Маше,Машу,Машей,Маше'), $this->object->getFirstNameCase());
    }
    public function testNameWoman524()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иоанна,Иоанны,Иоанне,Иоанну,Иоанной,Иоанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman525()
    {
        $this->object->setFirstName('Фекла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фекла,Феклы,Фекле,Феклу,Феклой,Фекле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman526()
    {
        $this->object->setFirstName('Снежана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Снежана,Снежаны,Снежане,Снежану,Снежаной,Снежане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman527()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman528()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владиславы,Владиславе,Владиславу,Владиславой,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman529()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman530()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иоанна,Иоанны,Иоанне,Иоанну,Иоанной,Иоанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman531()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мелания,Мелании,Мелании,Меланию,Меланией,Мелании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman532()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корнелия,Корнелии,Корнелии,Корнелию,Корнелией,Корнелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman533()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman534()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman535()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman536()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ревекка,Ревекки,Ревекке,Ревекку,Ревеккой,Ревекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman537()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розарио,Розарио,Розарио,Розарио,Розарио,Розарио'), $this->object->getFirstNameCase());
    }
    public function testNameWoman538()
    {
        $this->object->setFirstName('Юния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юния,Юнии,Юнии,Юнию,Юнией,Юнии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman539()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman540()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman541()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шарлотта,Шарлотты,Шарлотте,Шарлотту,Шарлоттой,Шарлотте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman542()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аэлита,Аэлиты,Аэлите,Аэлиту,Аэлитой,Аэлите'), $this->object->getFirstNameCase());
    }
    public function testNameWoman543()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Изабелла,Изабеллы,Изабелле,Изабеллу,Изабеллой,Изабелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman544()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шарлотта,Шарлотты,Шарлотте,Шарлотту,Шарлоттой,Шарлотте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman545()
    {
        $this->object->setFirstName('Камола');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Камола,Камолы,Камоле,Камолу,Камолой,Камоле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman546()
    {
        $this->object->setFirstName('Майя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Майя,Майи,Майе,Майю,Майей,Майе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman547()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman548()
    {
        $this->object->setFirstName('Аида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аида,Аиды,Аиде,Аиду,Аидой,Аиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman549()
    {
        $this->object->setFirstName('Дария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дария,Дарии,Дарии,Дарию,Дарией,Дарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman550()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Изабелла,Изабеллы,Изабелле,Изабеллу,Изабеллой,Изабелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman551()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Октавия,Октавии,Октавии,Октавию,Октавией,Октавии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman552()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаида,Аделаиды,Аделаиде,Аделаиду,Аделаидой,Аделаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman553()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оксана,Оксаны,Оксане,Оксану,Оксаной,Оксане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman554()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фаина,Фаины,Фаине,Фаину,Фаиной,Фаине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman555()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman556()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman557()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman558()
    {
        $this->object->setFirstName('Милена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милена,Милены,Милене,Милену,Миленой,Милене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman559()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фаина,Фаины,Фаине,Фаину,Фаиной,Фаине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman560()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman561()
    {
        $this->object->setFirstName('Фекла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фекла,Феклы,Фекле,Феклу,Феклой,Фекле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman562()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иляна,Иляны,Иляне,Иляну,Иляной,Иляне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman563()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman564()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаида,Аделаиды,Аделаиде,Аделаиду,Аделаидой,Аделаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman565()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярослава,Ярославы,Ярославе,Ярославу,Ярославой,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman566()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Октавия,Октавии,Октавии,Октавию,Октавией,Октавии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman567()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman568()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анушка,Анушки,Анушке,Анушку,Анушкой,Анушке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman569()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розалия,Розалии,Розалии,Розалию,Розалией,Розалии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman570()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ревекка,Ревекки,Ревекке,Ревекку,Ревеккой,Ревекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman571()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman572()
    {
        $this->object->setFirstName('Майя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Майя,Майи,Майе,Майю,Майей,Майе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman573()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman574()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman575()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розарио,Розарио,Розарио,Розарио,Розарио,Розарио'), $this->object->getFirstNameCase());
    }
    public function testNameWoman576()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лейла,Лейлы,Лейле,Лейлу,Лейлой,Лейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman577()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Октавия,Октавии,Октавии,Октавию,Октавией,Октавии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman578()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлинария,Аполлинарии,Аполлинарии,Аполлинарию,Аполлинарией,Аполлинарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman579()
    {
        $this->object->setFirstName('Иоанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иоанна,Иоанны,Иоанне,Иоанну,Иоанной,Иоанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman580()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman581()
    {
        $this->object->setFirstName('Нина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нина,Нины,Нине,Нину,Ниной,Нине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman582()
    {
        $this->object->setFirstName('Алена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алена,Алены,Алене,Алену,Аленой,Алене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman583()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Изабелла,Изабеллы,Изабелле,Изабеллу,Изабеллой,Изабелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman584()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman585()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгения,Евгении,Евгении,Евгению,Евгенией,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman586()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жанна,Жанны,Жанне,Жанну,Жанной,Жанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman587()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владиславы,Владиславе,Владиславу,Владиславой,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman588()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman589()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анушка,Анушки,Анушке,Анушку,Анушкой,Анушке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman590()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таисия,Таисии,Таисии,Таисию,Таисией,Таисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman591()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman592()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мэри,Мэри,Мэри,Мэри,Мэри,Мэри'), $this->object->getFirstNameCase());
    }
    public function testNameWoman593()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгения,Евгении,Евгении,Евгению,Евгенией,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman594()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman595()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анушка,Анушки,Анушке,Анушку,Анушкой,Анушке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman596()
    {
        $this->object->setFirstName('Ирина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ирина,Ирины,Ирине,Ирину,Ириной,Ирине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman597()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman598()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman599()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярослава,Ярославы,Ярославе,Ярославу,Ярославой,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman600()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman601()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пелагея,Пелагеи,Пелагее,Пелагею,Пелагеей,Пелагее'), $this->object->getFirstNameCase());
    }
    public function testNameWoman602()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman603()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman604()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman605()
    {
        $this->object->setFirstName('Ирина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ирина,Ирины,Ирине,Ирину,Ириной,Ирине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman606()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman607()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman608()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фаина,Фаины,Фаине,Фаину,Фаиной,Фаине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman609()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделина,Аделины,Аделине,Аделину,Аделиной,Аделине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman610()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman611()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мафтуха,Мафтухи,Мафтухе,Мафтуху,Мафтухой,Мафтухе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman612()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman613()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульрика,Ульрики,Ульрике,Ульрику,Ульрикой,Ульрике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman614()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбина,Альбины,Альбине,Альбину,Альбиной,Альбине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman615()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman616()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ксения,Ксении,Ксении,Ксению,Ксенией,Ксении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman617()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman618()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иляна,Иляны,Иляне,Иляну,Иляной,Иляне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman619()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman620()
    {
        $this->object->setFirstName('Лада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лада,Лады,Ладе,Ладу,Ладой,Ладе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman621()
    {
        $this->object->setFirstName('Нина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нина,Нины,Нине,Нину,Ниной,Нине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman622()
    {
        $this->object->setFirstName('Вера');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вера,Веры,Вере,Веру,Верой,Вере'), $this->object->getFirstNameCase());
    }
    public function testNameWoman623()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгения,Евгении,Евгении,Евгению,Евгенией,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman624()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman625()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фатима,Фатимы,Фатиме,Фатиму,Фатимой,Фатиме'), $this->object->getFirstNameCase());
    }
    public function testNameWoman626()
    {
        $this->object->setFirstName('Лада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лада,Лады,Ладе,Ладу,Ладой,Ладе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman627()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman628()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman629()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марианна,Марианны,Марианне,Марианну,Марианной,Марианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman630()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисья,Анисьи,Анисье,Анисью,Анисьей,Анисье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman631()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman632()
    {
        $this->object->setFirstName('Нина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нина,Нины,Нине,Нину,Ниной,Нине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman633()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульяна,Ульяны,Ульяне,Ульяну,Ульяной,Ульяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman634()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виолетта,Виолетты,Виолетте,Виолетту,Виолеттой,Виолетте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman635()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman636()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стефания,Стефании,Стефании,Стефанию,Стефанией,Стефании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman637()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мэри,Мэри,Мэри,Мэри,Мэри,Мэри'), $this->object->getFirstNameCase());
    }
    public function testNameWoman638()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людмила,Людмилы,Людмиле,Людмилу,Людмилой,Людмиле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman639()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman640()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аурика,Аурики,Аурике,Аурику,Аурикой,Аурике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman641()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вероника,Вероники,Веронике,Веронику,Вероникой,Веронике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman642()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлианна,Юлианны,Юлианне,Юлианну,Юлианной,Юлианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman643()
    {
        $this->object->setFirstName('Маша');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маша,Маши,Маше,Машу,Машей,Маше'), $this->object->getFirstNameCase());
    }
    public function testNameWoman644()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ксения,Ксении,Ксении,Ксению,Ксенией,Ксении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman645()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Светлана,Светланы,Светлане,Светлану,Светланой,Светлане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman646()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Изабелла,Изабеллы,Изабелле,Изабеллу,Изабеллой,Изабелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman647()
    {
        $this->object->setFirstName('Фекла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фекла,Феклы,Фекле,Феклу,Феклой,Фекле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman648()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman649()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нинель,Нинели,Нинели,Нинель,Нинелью,Нинели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman650()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman651()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нонна,Нонны,Нонне,Нонну,Нонной,Нонне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman652()
    {
        $this->object->setFirstName('Милена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милена,Милены,Милене,Милену,Миленой,Милене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman653()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman654()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ольга,Ольги,Ольге,Ольгу,Ольгой,Ольге'), $this->object->getFirstNameCase());
    }
    public function testNameWoman655()
    {
        $this->object->setFirstName('Елена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елена,Елены,Елене,Елену,Еленой,Елене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman656()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульрика,Ульрики,Ульрике,Ульрику,Ульрикой,Ульрике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman657()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеся,Олеси,Олесе,Олесю,Олесей,Олесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman658()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman659()
    {
        $this->object->setFirstName('Элина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элина,Элины,Элине,Элину,Элиной,Элине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman660()
    {
        $this->object->setFirstName('Диана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Диана,Дианы,Диане,Диану,Дианой,Диане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman661()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman662()
    {
        $this->object->setFirstName('Арна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Арна,Арны,Арне,Арну,Арной,Арне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman663()
    {
        $this->object->setFirstName('Юлия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлия,Юлии,Юлии,Юлию,Юлией,Юлии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman664()
    {
        $this->object->setFirstName('Ангелина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ангелина,Ангелины,Ангелине,Ангелину,Ангелиной,Ангелине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman665()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman666()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman667()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman668()
    {
        $this->object->setFirstName('Мальвина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мальвина,Мальвины,Мальвине,Мальвину,Мальвиной,Мальвине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman669()
    {
        $this->object->setFirstName('Корнелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Корнелия,Корнелии,Корнелии,Корнелию,Корнелией,Корнелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman670()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Октавия,Октавии,Октавии,Октавию,Октавией,Октавии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman671()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman672()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman673()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman674()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентина,Валентины,Валентине,Валентину,Валентиной,Валентине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman675()
    {
        $this->object->setFirstName('Элина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элина,Элины,Элине,Элину,Элиной,Элине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman676()
    {
        $this->object->setFirstName('Алина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алина,Алины,Алине,Алину,Алиной,Алине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman677()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виктория,Виктории,Виктории,Викторию,Викторией,Виктории'), $this->object->getFirstNameCase());
    }
    public function testNameWoman678()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman679()
    {
        $this->object->setFirstName('Элина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элина,Элины,Элине,Элину,Элиной,Элине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman680()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman681()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владиславы,Владиславе,Владиславу,Владиславой,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman682()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman683()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman684()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мэри,Мэри,Мэри,Мэри,Мэри,Мэри'), $this->object->getFirstNameCase());
    }
    public function testNameWoman685()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman686()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman687()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фатима,Фатимы,Фатиме,Фатиму,Фатимой,Фатиме'), $this->object->getFirstNameCase());
    }
    public function testNameWoman688()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman689()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мэри,Мэри,Мэри,Мэри,Мэри,Мэри'), $this->object->getFirstNameCase());
    }
    public function testNameWoman690()
    {
        $this->object->setFirstName('Мафтуха');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мафтуха,Мафтухи,Мафтухе,Мафтуху,Мафтухой,Мафтухе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman691()
    {
        $this->object->setFirstName('Нонна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нонна,Нонны,Нонне,Нонну,Нонной,Нонне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman692()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman693()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman694()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman695()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman696()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кристина,Кристины,Кристине,Кристину,Кристиной,Кристине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman697()
    {
        $this->object->setFirstName('Ангелина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ангелина,Ангелины,Ангелине,Ангелину,Ангелиной,Ангелине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman698()
    {
        $this->object->setFirstName('Аида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аида,Аиды,Аиде,Аиду,Аидой,Аиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman699()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman700()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Василиса,Василисы,Василисе,Василису,Василисой,Василисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman701()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агриппина,Агриппины,Агриппине,Агриппину,Агриппиной,Агриппине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman702()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розарио,Розарио,Розарио,Розарио,Розарио,Розарио'), $this->object->getFirstNameCase());
    }
    public function testNameWoman703()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбина,Альбины,Альбине,Альбину,Альбиной,Альбине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman704()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аурика,Аурики,Аурике,Аурику,Аурикой,Аурике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman705()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанида,Степаниды,Степаниде,Степаниду,Степанидой,Степаниде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman706()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman707()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кристина,Кристины,Кристине,Кристину,Кристиной,Кристине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman708()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman709()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жанна,Жанны,Жанне,Жанну,Жанной,Жанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman710()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зульфия,Зульфии,Зульфии,Зульфию,Зульфией,Зульфии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman711()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пелагея,Пелагеи,Пелагее,Пелагею,Пелагеей,Пелагее'), $this->object->getFirstNameCase());
    }
    public function testNameWoman712()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мэри,Мэри,Мэри,Мэри,Мэри,Мэри'), $this->object->getFirstNameCase());
    }
    public function testNameWoman713()
    {
        $this->object->setFirstName('Елизавета');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елизавета,Елизаветы,Елизавете,Елизавету,Елизаветой,Елизавете'), $this->object->getFirstNameCase());
    }
    public function testNameWoman714()
    {
        $this->object->setFirstName('Розарио');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розарио,Розарио,Розарио,Розарио,Розарио,Розарио'), $this->object->getFirstNameCase());
    }
    public function testNameWoman715()
    {
        $this->object->setFirstName('Инна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Инна,Инны,Инне,Инну,Инной,Инне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman716()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбина,Альбины,Альбине,Альбину,Альбиной,Альбине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman717()
    {
        $this->object->setFirstName('Карина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Карина,Карины,Карине,Карину,Кариной,Карине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman718()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зинаида,Зинаиды,Зинаиде,Зинаиду,Зинаидой,Зинаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman719()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman720()
    {
        $this->object->setFirstName('Дария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дария,Дарии,Дарии,Дарию,Дарией,Дарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman721()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иляна,Иляны,Иляне,Иляну,Иляной,Иляне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman722()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman723()
    {
        $this->object->setFirstName('Леся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Леся,Леси,Лесе,Лесю,Лесей,Лесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman724()
    {
        $this->object->setFirstName('Изабелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Изабелла,Изабеллы,Изабелле,Изабеллу,Изабеллой,Изабелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman725()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фрида,Фриды,Фриде,Фриду,Фридой,Фриде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman726()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman727()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеся,Олеси,Олесе,Олесю,Олесей,Олесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman728()
    {
        $this->object->setFirstName('Клара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клара,Клары,Кларе,Клару,Кларой,Кларе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman729()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman730()
    {
        $this->object->setFirstName('Зульфия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зульфия,Зульфии,Зульфии,Зульфию,Зульфией,Зульфии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman731()
    {
        $this->object->setFirstName('Галина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галина,Галины,Галине,Галину,Галиной,Галине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman732()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярослава,Ярославы,Ярославе,Ярославу,Ярославой,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman733()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зинаида,Зинаиды,Зинаиде,Зинаиду,Зинаидой,Зинаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman734()
    {
        $this->object->setFirstName('Дария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дария,Дарии,Дарии,Дарию,Дарией,Дарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman735()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman736()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глафира,Глафиры,Глафире,Глафиру,Глафирой,Глафире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman737()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вероника,Вероники,Веронике,Веронику,Вероникой,Веронике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman738()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глафира,Глафиры,Глафире,Глафиру,Глафирой,Глафире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman739()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman740()
    {
        $this->object->setFirstName('Пелагея');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Пелагея,Пелагеи,Пелагее,Пелагею,Пелагеей,Пелагее'), $this->object->getFirstNameCase());
    }
    public function testNameWoman741()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman742()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлианна,Юлианны,Юлианне,Юлианну,Юлианной,Юлианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman743()
    {
        $this->object->setFirstName('Шона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шона,Шоны,Шоне,Шону,Шоной,Шоне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman744()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вероника,Вероники,Веронике,Веронику,Вероникой,Веронике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman745()
    {
        $this->object->setFirstName('Павлина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Павлина,Павлины,Павлине,Павлину,Павлиной,Павлине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman746()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мелания,Мелании,Мелании,Меланию,Меланией,Мелании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman747()
    {
        $this->object->setFirstName('Анна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анна,Анны,Анне,Анну,Анной,Анне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman748()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman749()
    {
        $this->object->setFirstName('Августа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Августа,Августы,Августе,Августу,Августой,Августе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman750()
    {
        $this->object->setFirstName('Каролина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Каролина,Каролины,Каролине,Каролину,Каролиной,Каролине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman751()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman752()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евфросиния,Евфросинии,Евфросинии,Евфросинию,Евфросинией,Евфросинии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman753()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фрида,Фриды,Фриде,Фриду,Фридой,Фриде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman754()
    {
        $this->object->setFirstName('Ольга');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ольга,Ольги,Ольге,Ольгу,Ольгой,Ольге'), $this->object->getFirstNameCase());
    }
    public function testNameWoman755()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman756()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеся,Олеси,Олесе,Олесю,Олесей,Олесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman757()
    {
        $this->object->setFirstName('Элеонора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элеонора,Элеоноры,Элеоноре,Элеонору,Элеонорой,Элеоноре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman758()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman759()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman760()
    {
        $this->object->setFirstName('Эльвира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эльвира,Эльвиры,Эльвире,Эльвиру,Эльвирой,Эльвире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman761()
    {
        $this->object->setFirstName('Фрида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фрида,Фриды,Фриде,Фриду,Фридой,Фриде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman762()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татьяна,Татьяны,Татьяне,Татьяну,Татьяной,Татьяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman763()
    {
        $this->object->setFirstName('Беата');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Беата,Беаты,Беате,Беату,Беатой,Беате'), $this->object->getFirstNameCase());
    }
    public function testNameWoman764()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman765()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мелания,Мелании,Мелании,Меланию,Меланией,Мелании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman766()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman767()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таисия,Таисии,Таисии,Таисию,Таисией,Таисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman768()
    {
        $this->object->setFirstName('Аполлинария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлинария,Аполлинарии,Аполлинарии,Аполлинарию,Аполлинарией,Аполлинарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman769()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman770()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алсу,Алсу,Алсу,Алсу,Алсу,Алсу'), $this->object->getFirstNameCase());
    }
    public function testNameWoman771()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman772()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евфросиния,Евфросинии,Евфросинии,Евфросинию,Евфросинией,Евфросинии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman773()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman774()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисья,Анисьи,Анисье,Анисью,Анисьей,Анисье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman775()
    {
        $this->object->setFirstName('Маша');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маша,Маши,Маше,Машу,Машей,Маше'), $this->object->getFirstNameCase());
    }
    public function testNameWoman776()
    {
        $this->object->setFirstName('Кира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кира,Киры,Кире,Киру,Кирой,Кире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman777()
    {
        $this->object->setFirstName('Октавия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Октавия,Октавии,Октавии,Октавию,Октавией,Октавии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman778()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman779()
    {
        $this->object->setFirstName('Феодора');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Феодора,Феодоры,Феодоре,Феодору,Феодорой,Феодоре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman780()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman781()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виолетта,Виолетты,Виолетте,Виолетту,Виолеттой,Виолетте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman782()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Светлана,Светланы,Светлане,Светлану,Светланой,Светлане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman783()
    {
        $this->object->setFirstName('Ульяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульяна,Ульяны,Ульяне,Ульяну,Ульяной,Ульяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman784()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татьяна,Татьяны,Татьяне,Татьяну,Татьяной,Татьяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman785()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людмила,Людмилы,Людмиле,Людмилу,Людмилой,Людмиле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman786()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Раиса,Раисы,Раисе,Раису,Раисой,Раисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman787()
    {
        $this->object->setFirstName('Инна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Инна,Инны,Инне,Инну,Инной,Инне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman788()
    {
        $this->object->setFirstName('Виолетта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виолетта,Виолетты,Виолетте,Виолетту,Виолеттой,Виолетте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman789()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman790()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нинель,Нинели,Нинели,Нинель,Нинелью,Нинели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman791()
    {
        $this->object->setFirstName('Инна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Инна,Инны,Инне,Инну,Инной,Инне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman792()
    {
        $this->object->setFirstName('Мэри');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мэри,Мэри,Мэри,Мэри,Мэри,Мэри'), $this->object->getFirstNameCase());
    }
    public function testNameWoman793()
    {
        $this->object->setFirstName('Галина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Галина,Галины,Галине,Галину,Галиной,Галине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman794()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman795()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азиза,Азизы,Азизе,Азизу,Азизой,Азизе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman796()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman797()
    {
        $this->object->setFirstName('Марианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марианна,Марианны,Марианне,Марианну,Марианной,Марианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman798()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стефания,Стефании,Стефании,Стефанию,Стефанией,Стефании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman799()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman800()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman801()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суламифь,Суламифи,Суламифи,Суламифь,Суламифью,Суламифи'), $this->object->getFirstNameCase());
    }
    public function testNameWoman802()
    {
        $this->object->setFirstName('Анисья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисья,Анисьи,Анисье,Анисью,Анисьей,Анисье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman803()
    {
        $this->object->setFirstName('Зинаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зинаида,Зинаиды,Зинаиде,Зинаиду,Зинаидой,Зинаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman804()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman805()
    {
        $this->object->setFirstName('Глафира');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Глафира,Глафиры,Глафире,Глафиру,Глафирой,Глафире'), $this->object->getFirstNameCase());
    }
    public function testNameWoman806()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman807()
    {
        $this->object->setFirstName('Татьяна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Татьяна,Татьяны,Татьяне,Татьяну,Татьяной,Татьяне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman808()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman809()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman810()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman811()
    {
        $this->object->setFirstName('Камола');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Камола,Камолы,Камоле,Камолу,Камолой,Камоле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman812()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman813()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фаина,Фаины,Фаине,Фаину,Фаиной,Фаине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman814()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman815()
    {
        $this->object->setFirstName('Анисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анисия,Анисии,Анисии,Анисию,Анисией,Анисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman816()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розалия,Розалии,Розалии,Розалию,Розалией,Розалии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman817()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman818()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аэлита,Аэлиты,Аэлите,Аэлиту,Аэлитой,Аэлите'), $this->object->getFirstNameCase());
    }
    public function testNameWoman819()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman820()
    {
        $this->object->setFirstName('Маша');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маша,Маши,Маше,Машу,Машей,Маше'), $this->object->getFirstNameCase());
    }
    public function testNameWoman821()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman822()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman823()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жанна,Жанны,Жанне,Жанну,Жанной,Жанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman824()
    {
        $this->object->setFirstName('Камола');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Камола,Камолы,Камоле,Камолу,Камолой,Камоле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman825()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman826()
    {
        $this->object->setFirstName('Филлида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Филлида,Филлиды,Филлиде,Филлиду,Филлидой,Филлиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman827()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виктория,Виктории,Виктории,Викторию,Викторией,Виктории'), $this->object->getFirstNameCase());
    }
    public function testNameWoman828()
    {
        $this->object->setFirstName('Ксения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ксения,Ксении,Ксении,Ксению,Ксенией,Ксении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman829()
    {
        $this->object->setFirstName('Аграфена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аграфена,Аграфены,Аграфене,Аграфену,Аграфеной,Аграфене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman830()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оксана,Оксаны,Оксане,Оксану,Оксаной,Оксане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman831()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Урсула,Урсулы,Урсуле,Урсулу,Урсулой,Урсуле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman832()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman833()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жанна,Жанны,Жанне,Жанну,Жанной,Жанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman834()
    {
        $this->object->setFirstName('Виктория');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Виктория,Виктории,Виктории,Викторию,Викторией,Виктории'), $this->object->getFirstNameCase());
    }
    public function testNameWoman835()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евфросиния,Евфросинии,Евфросинии,Евфросинию,Евфросинией,Евфросинии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman836()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman837()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азиза,Азизы,Азизе,Азизу,Азизой,Азизе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman838()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антонина,Антонины,Антонине,Антонину,Антониной,Антонине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman839()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman840()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лейла,Лейлы,Лейле,Лейлу,Лейлой,Лейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman841()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman842()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вероника,Вероники,Веронике,Веронику,Вероникой,Веронике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman843()
    {
        $this->object->setFirstName('Августа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Августа,Августы,Августе,Августу,Августой,Августе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman844()
    {
        $this->object->setFirstName('Авдотья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Авдотья,Авдотьи,Авдотье,Авдотью,Авдотьей,Авдотье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman845()
    {
        $this->object->setFirstName('Сара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Сара,Сары,Саре,Сару,Сарой,Саре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman846()
    {
        $this->object->setFirstName('Аурика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аурика,Аурики,Аурике,Аурику,Аурикой,Аурике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman847()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антонина,Антонины,Антонине,Антонину,Антониной,Антонине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman848()
    {
        $this->object->setFirstName('Лада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лада,Лады,Ладе,Ладу,Ладой,Ладе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman849()
    {
        $this->object->setFirstName('Нона');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нона,Ноны,Ноне,Нону,Ноной,Ноне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman850()
    {
        $this->object->setFirstName('Варвара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Варвара,Варвары,Варваре,Варвару,Варварой,Варваре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman851()
    {
        $this->object->setFirstName('Оксана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Оксана,Оксаны,Оксане,Оксану,Оксаной,Оксане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman852()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman853()
    {
        $this->object->setFirstName('Валентина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Валентина,Валентины,Валентине,Валентину,Валентиной,Валентине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman854()
    {
        $this->object->setFirstName('Аполлония');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аполлония,Аполлонии,Аполлонии,Аполлонию,Аполлонией,Аполлонии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman855()
    {
        $this->object->setFirstName('Маша');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Маша,Маши,Маше,Машу,Машей,Маше'), $this->object->getFirstNameCase());
    }
    public function testNameWoman856()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman857()
    {
        $this->object->setFirstName('Анушка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анушка,Анушки,Анушке,Анушку,Анушкой,Анушке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman858()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алиса,Алисы,Алисе,Алису,Алисой,Алисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman859()
    {
        $this->object->setFirstName('Розалия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Розалия,Розалии,Розалии,Розалию,Розалией,Розалии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman860()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аэлита,Аэлиты,Аэлите,Аэлиту,Аэлитой,Аэлите'), $this->object->getFirstNameCase());
    }
    public function testNameWoman861()
    {
        $this->object->setFirstName('Аэлита');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аэлита,Аэлиты,Аэлите,Аэлиту,Аэлитой,Аэлите'), $this->object->getFirstNameCase());
    }
    public function testNameWoman862()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman863()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman864()
    {
        $this->object->setFirstName('Лариса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лариса,Ларисы,Ларисе,Ларису,Ларисой,Ларисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman865()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman866()
    {
        $this->object->setFirstName('Геннадия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Геннадия,Геннадии,Геннадии,Геннадию,Геннадией,Геннадии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman867()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлианна,Юлианны,Юлианне,Юлианну,Юлианной,Юлианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman868()
    {
        $this->object->setFirstName('Дария');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дария,Дарии,Дарии,Дарию,Дарией,Дарии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman869()
    {
        $this->object->setFirstName('Клеопатра');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клеопатра,Клеопатры,Клеопатре,Клеопатру,Клеопатрой,Клеопатре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman870()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фаина,Фаины,Фаине,Фаину,Фаиной,Фаине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman871()
    {
        $this->object->setFirstName('Анна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анна,Анны,Анне,Анну,Анной,Анне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman872()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman873()
    {
        $this->object->setFirstName('Божена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Божена,Божены,Божене,Божену,Боженой,Божене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman874()
    {
        $this->object->setFirstName('Евгения');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евгения,Евгении,Евгении,Евгению,Евгенией,Евгении'), $this->object->getFirstNameCase());
    }
    public function testNameWoman875()
    {
        $this->object->setFirstName('Лейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Лейла,Лейлы,Лейле,Лейлу,Лейлой,Лейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman876()
    {
        $this->object->setFirstName('Тамара');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Тамара,Тамары,Тамаре,Тамару,Тамарой,Тамаре'), $this->object->getFirstNameCase());
    }
    public function testNameWoman877()
    {
        $this->object->setFirstName('Алла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алла,Аллы,Алле,Аллу,Аллой,Алле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman878()
    {
        $this->object->setFirstName('Августа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Августа,Августы,Августе,Августу,Августой,Августе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman879()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman880()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вероника,Вероники,Веронике,Веронику,Вероникой,Веронике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman881()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman882()
    {
        $this->object->setFirstName('Анастасия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анастасия,Анастасии,Анастасии,Анастасию,Анастасией,Анастасии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman883()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman884()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлианна,Юлианны,Юлианне,Юлианну,Юлианной,Юлианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman885()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таисия,Таисии,Таисии,Таисию,Таисией,Таисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman886()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman887()
    {
        $this->object->setFirstName('Елена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елена,Елены,Елене,Елену,Еленой,Елене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman888()
    {
        $this->object->setFirstName('Аделаида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделаида,Аделаиды,Аделаиде,Аделаиду,Аделаидой,Аделаиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman889()
    {
        $this->object->setFirstName('Эми');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Эми,Эми,Эми,Эми,Эми,Эми'), $this->object->getFirstNameCase());
    }
    public function testNameWoman890()
    {
        $this->object->setFirstName('Суламифь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Суламифь,Суламифи,Суламифи,Суламифь,Суламифью,Суламифи'), $this->object->getFirstNameCase());
    }
    public function testNameWoman891()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman892()
    {
        $this->object->setFirstName('Зоя');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Зоя,Зои,Зое,Зою,Зоей,Зое'), $this->object->getFirstNameCase());
    }
    public function testNameWoman893()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman894()
    {
        $this->object->setFirstName('Ульрика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ульрика,Ульрики,Ульрике,Ульрику,Ульрикой,Ульрике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman895()
    {
        $this->object->setFirstName('Таисия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Таисия,Таисии,Таисии,Таисию,Таисией,Таисии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman896()
    {
        $this->object->setFirstName('Инна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Инна,Инны,Инне,Инну,Инной,Инне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman897()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евфросиния,Евфросинии,Евфросинии,Евфросинию,Евфросинией,Евфросинии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman898()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman899()
    {
        $this->object->setFirstName('Анжелика');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Анжелика,Анжелики,Анжелике,Анжелику,Анжеликой,Анжелике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman900()
    {
        $this->object->setFirstName('Августа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Августа,Августы,Августе,Августу,Августой,Августе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman901()
    {
        $this->object->setFirstName('Олеся');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Олеся,Олеси,Олесе,Олесю,Олесей,Олесе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman902()
    {
        $this->object->setFirstName('Аврелия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аврелия,Аврелии,Аврелии,Аврелию,Аврелией,Аврелии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman903()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman904()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman905()
    {
        $this->object->setFirstName('Надежда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Надежда,Надежды,Надежде,Надежду,Надеждой,Надежде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman906()
    {
        $this->object->setFirstName('Мелания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Мелания,Мелании,Мелании,Меланию,Меланией,Мелании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman907()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman908()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стефания,Стефании,Стефании,Стефанию,Стефанией,Стефании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman909()
    {
        $this->object->setFirstName('Иляна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иляна,Иляны,Иляне,Иляну,Иляной,Иляне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman910()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанида,Степаниды,Степаниде,Степаниду,Степанидой,Степаниде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman911()
    {
        $this->object->setFirstName('Светлана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Светлана,Светланы,Светлане,Светлану,Светланой,Светлане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman912()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman913()
    {
        $this->object->setFirstName('Ребекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ребекка,Ребекки,Ребекке,Ребекку,Ребеккой,Ребекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman914()
    {
        $this->object->setFirstName('Фаина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фаина,Фаины,Фаине,Фаину,Фаиной,Фаине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman915()
    {
        $this->object->setFirstName('Юния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юния,Юнии,Юнии,Юнию,Юнией,Юнии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman916()
    {
        $this->object->setFirstName('Улла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Улла,Уллы,Улле,Уллу,Уллой,Улле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman917()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman918()
    {
        $this->object->setFirstName('Ревекка');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ревекка,Ревекки,Ревекке,Ревекку,Ревеккой,Ревекке'), $this->object->getFirstNameCase());
    }
    public function testNameWoman919()
    {
        $this->object->setFirstName('Шарлотта');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шарлотта,Шарлотты,Шарлотте,Шарлотту,Шарлоттой,Шарлотте'), $this->object->getFirstNameCase());
    }
    public function testNameWoman920()
    {
        $this->object->setFirstName('Урсула');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Урсула,Урсулы,Урсуле,Урсулу,Урсулой,Урсуле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman921()
    {
        $this->object->setFirstName('Алсу');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алсу,Алсу,Алсу,Алсу,Алсу,Алсу'), $this->object->getFirstNameCase());
    }
    public function testNameWoman922()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman923()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кристина,Кристины,Кристине,Кристину,Кристиной,Кристине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman924()
    {
        $this->object->setFirstName('Марина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Марина,Марины,Марине,Марину,Мариной,Марине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman925()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделина,Аделины,Аделине,Аделину,Аделиной,Аделине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman926()
    {
        $this->object->setFirstName('Антонина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Антонина,Антонины,Антонине,Антонину,Антониной,Антонине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman927()
    {
        $this->object->setFirstName('Милена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Милена,Милены,Милене,Милену,Миленой,Милене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman928()
    {
        $this->object->setFirstName('Юния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юния,Юнии,Юнии,Юнию,Юнией,Юнии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman929()
    {
        $this->object->setFirstName('Жанна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Жанна,Жанны,Жанне,Жанну,Жанной,Жанне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman930()
    {
        $this->object->setFirstName('Владислава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Владислава,Владиславы,Владиславе,Владиславу,Владиславой,Владиславе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman931()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Раиса,Раисы,Раисе,Раису,Раисой,Раисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman932()
    {
        $this->object->setFirstName('Аида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аида,Аиды,Аиде,Аиду,Аидой,Аиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman933()
    {
        $this->object->setFirstName('Августа');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Августа,Августы,Августе,Августу,Августой,Августе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman934()
    {
        $this->object->setFirstName('Юния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юния,Юнии,Юнии,Юнию,Юнией,Юнии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman935()
    {
        $this->object->setFirstName('Евфросиния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евфросиния,Евфросинии,Евфросинии,Евфросинию,Евфросинией,Евфросинии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman936()
    {
        $this->object->setFirstName('Консуэло');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Консуэло,Консуэло,Консуэло,Консуэло,Консуэло,Консуэло'), $this->object->getFirstNameCase());
    }
    public function testNameWoman937()
    {
        $this->object->setFirstName('Елена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елена,Елены,Елене,Елену,Еленой,Елене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman938()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделина,Аделины,Аделине,Аделину,Аделиной,Аделине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman939()
    {
        $this->object->setFirstName('Иуния');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иуния,Иунии,Иунии,Иунию,Иунией,Иунии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman940()
    {
        $this->object->setFirstName('Снежана');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Снежана,Снежаны,Снежане,Снежану,Снежаной,Снежане'), $this->object->getFirstNameCase());
    }
    public function testNameWoman941()
    {
        $this->object->setFirstName('Азиза');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Азиза,Азизы,Азизе,Азизу,Азизой,Азизе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman942()
    {
        $this->object->setFirstName('Евдокия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Евдокия,Евдокии,Евдокии,Евдокию,Евдокией,Евдокии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman943()
    {
        $this->object->setFirstName('Фекла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фекла,Феклы,Фекле,Феклу,Феклой,Фекле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman944()
    {
        $this->object->setFirstName('Алиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Алиса,Алисы,Алисе,Алису,Алисой,Алисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman945()
    {
        $this->object->setFirstName('Асель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Асель,Асели,Асели,Асель,Аселью,Асели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman946()
    {
        $this->object->setFirstName('Нинель');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Нинель,Нинели,Нинели,Нинель,Нинелью,Нинели'), $this->object->getFirstNameCase());
    }
    public function testNameWoman947()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }
    public function testNameWoman948()
    {
        $this->object->setFirstName('Фатима');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Фатима,Фатимы,Фатиме,Фатиму,Фатимой,Фатиме'), $this->object->getFirstNameCase());
    }
    public function testNameWoman949()
    {
        $this->object->setFirstName('Ливия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ливия,Ливии,Ливии,Ливию,Ливией,Ливии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman950()
    {
        $this->object->setFirstName('Ирина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ирина,Ирины,Ирине,Ирину,Ириной,Ирине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman951()
    {
        $this->object->setFirstName('Рада');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Рада,Рады,Раде,Раду,Радой,Раде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman952()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Екатерина,Екатерины,Екатерине,Екатерину,Екатериной,Екатерине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman953()
    {
        $this->object->setFirstName('Ярослава');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ярослава,Ярославы,Ярославе,Ярославу,Ярославой,Ярославе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman954()
    {
        $this->object->setFirstName('Юлианна');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Юлианна,Юлианны,Юлианне,Юлианну,Юлианной,Юлианне'), $this->object->getFirstNameCase());
    }
    public function testNameWoman955()
    {
        $this->object->setFirstName('Аделина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аделина,Аделины,Аделине,Аделину,Аделиной,Аделине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman956()
    {
        $this->object->setFirstName('Шейла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Шейла,Шейлы,Шейле,Шейлу,Шейлой,Шейле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman957()
    {
        $this->object->setFirstName('Полина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Полина,Полины,Полине,Полину,Полиной,Полине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman958()
    {
        $this->object->setFirstName('Стелла');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стелла,Стеллы,Стелле,Стеллу,Стеллой,Стелле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman959()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman960()
    {
        $this->object->setFirstName('Элина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Элина,Элины,Элине,Элину,Элиной,Элине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman961()
    {
        $this->object->setFirstName('Вероника');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вероника,Вероники,Веронике,Веронику,Вероникой,Веронике'), $this->object->getFirstNameCase());
    }
    public function testNameWoman962()
    {
        $this->object->setFirstName('Раиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Раиса,Раисы,Раисе,Раису,Раисой,Раисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman963()
    {
        $this->object->setFirstName('Екатерина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Екатерина,Екатерины,Екатерине,Екатерину,Екатериной,Екатерине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman964()
    {
        $this->object->setFirstName('Вера');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Вера,Веры,Вере,Веру,Верой,Вере'), $this->object->getFirstNameCase());
    }
    public function testNameWoman965()
    {
        $this->object->setFirstName('Кристина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Кристина,Кристины,Кристине,Кристину,Кристиной,Кристине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman966()
    {
        $this->object->setFirstName('Стефания');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Стефания,Стефании,Стефании,Стефанию,Стефанией,Стефании'), $this->object->getFirstNameCase());
    }
    public function testNameWoman967()
    {
        $this->object->setFirstName('Матильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Матильда,Матильды,Матильде,Матильду,Матильдой,Матильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman968()
    {
        $this->object->setFirstName('Елена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елена,Елены,Елене,Елену,Еленой,Елене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman969()
    {
        $this->object->setFirstName('Людмила');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Людмила,Людмилы,Людмиле,Людмилу,Людмилой,Людмиле'), $this->object->getFirstNameCase());
    }
    public function testNameWoman970()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агриппина,Агриппины,Агриппине,Агриппину,Агриппиной,Агриппине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman971()
    {
        $this->object->setFirstName('Альбина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Альбина,Альбины,Альбине,Альбину,Альбиной,Альбине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman972()
    {
        $this->object->setFirstName('Прасковья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Прасковья,Прасковьи,Прасковье,Прасковью,Прасковьей,Прасковье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman973()
    {
        $this->object->setFirstName('Василиса');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Василиса,Василисы,Василисе,Василису,Василисой,Василисе'), $this->object->getFirstNameCase());
    }
    public function testNameWoman974()
    {
        $this->object->setFirstName('Клотильда');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Клотильда,Клотильды,Клотильде,Клотильду,Клотильдой,Клотильде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman975()
    {
        $this->object->setFirstName('Наталия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Наталия,Наталии,Наталии,Наталию,Наталией,Наталии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman976()
    {
        $this->object->setFirstName('Аида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Аида,Аиды,Аиде,Аиду,Аидой,Аиде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman977()
    {
        $this->object->setFirstName('Иулия');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Иулия,Иулии,Иулии,Иулию,Иулией,Иулии'), $this->object->getFirstNameCase());
    }
    public function testNameWoman978()
    {
        $this->object->setFirstName('Агриппина');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Агриппина,Агриппины,Агриппине,Агриппину,Агриппиной,Агриппине'), $this->object->getFirstNameCase());
    }
    public function testNameWoman979()
    {
        $this->object->setFirstName('Ева');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Ева,Евы,Еве,Еву,Евой,Еве'), $this->object->getFirstNameCase());
    }
    public function testNameWoman980()
    {
        $this->object->setFirstName('Елена');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Елена,Елены,Елене,Елену,Еленой,Елене'), $this->object->getFirstNameCase());
    }
    public function testNameWoman981()
    {
        $this->object->setFirstName('Степанида');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Степанида,Степаниды,Степаниде,Степаниду,Степанидой,Степаниде'), $this->object->getFirstNameCase());
    }
    public function testNameWoman982()
    {
        $this->object->setFirstName('Дарья');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Дарья,Дарьи,Дарье,Дарью,Дарьей,Дарье'), $this->object->getFirstNameCase());
    }
    public function testNameWoman983()
    {
        $this->object->setFirstName('Любовь');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Любовь,Любови,Любови,Любовь,Любовью,Любови'), $this->object->getFirstNameCase());
    }
    public function testNameWoman984()
    {
        $this->object->setFirstName('Констанция');
        $this->object->setGender(2);
        
        $this->assertEquals(explode(',','Констанция,Констанции,Констанции,Констанцию,Констанцией,Констанции'), $this->object->getFirstNameCase());
    }

}