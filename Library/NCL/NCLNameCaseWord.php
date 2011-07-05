<?php

/**
 * NCLNameCaseWord - класс, который служит для хранения всей информации о каждом слове
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4
 */
class NCLNameCaseWord
{

    /**
     * Слово в нижнем регистре, которое хранится в об’єкте класса
     * @var string 
     */
    private $word = '';
    
    /**
     * Тип текущей записи (Фамилия/Имя/Отчество)
     * - <b>N</b> - ім’я
     * - <b>S</b> - прізвище
     * - <b>F</b> - по-батькові
     * @var string
     */
    private $namePart = null;
    
    /**
     * Вероятность того, что текущей слово относится к мужскому полу
     * @var int 
     */
    private $genderMan = 0;
    
    /**
     * Вероятность того, что текущей слово относится к женскому полу
     * @var int 
     */
    private $genderWoman = 0;
    
    /**
     * Окончательное решение, к какому полу относится слово
     * - 0 - не определено
     * - NCL::$MAN - мужской пол
     * - NCL::$WOMAN - женский пол
     * @var int 
     */
    private $genderSolved = 0;
    
    /**
     * Маска больших букв в слове.
     * 
     * Содержит информацию о том, какие буквы в слове были большими, а какие мальникими:
     * - x - маленькая буква
     * - X - больная буква
     * @var string 
     */
    private $letterMask = '';
    
    /**
     * Содержит true, если все слово было в верхнем регистре и false, если не было
     * @var bool 
     */
    private $isUpperCase = false;
    
    /**
     * Массив содержит все падежи слова, полученые после склонения текущего слова
     * @var array 
     */
    private $NameCases = array();
    
    /**
     * Номер правила, по которому было произведено склонение текущего слова
     * @var int 
     */
    private $rule = 0;
    
    /**
     * Создать запись из слова
     * @param string $word 
     */
    public function __construct($word)
    {
        $this->generateMask($word);
        $this->word = NCLStr::strtolower($word);
    }

    private function generateMask($word)
    {
        $letters = NCLStr::splitLetters($word);
        $mask = array();
        $this->isUpperCase = true;
        foreach ($letters as $letter)
        {
            if (NCLStr::isLowerCase($letter))
            {
                $mask[] = 'x';
                $this->isUpperCase = false;
            }
            else
            {
                $mask[] = 'X';
            }
        }
        $this->letterMask = $mask;
    }

    private function returnMask()
    {
        if ($this->isUpperCase)
        {
            foreach ($this->NameCases as $index => $case)
            {
                $this->NameCases[$index] = NCLStr::strtoupper($this->NameCases[$index]);
            }
        }
        else
        {
            $splitedMask = $this->letterMask;
            $maskLength = count($splitedMask);
            foreach ($this->NameCases as $index => $case)
            {
                $caseLength = NCLStr::strlen($case);

                $max = min(array($caseLength, $maskLength));
                $this->NameCases[$index] = '';
                for ($letterIndex = 0; $letterIndex < $max; $letterIndex++)
                {
                    $letter = NCLStr::substr($case, $letterIndex, 1);
                    if ($splitedMask[$letterIndex] == 'X')
                    {
                        $letter = NCLStr::strtoupper($letter);
                    }
                    $this->NameCases[$index] .= $letter;
                }
                $this->NameCases[$index] .= NCLStr::substr($case, $max, $caseLength-$maskLength); 
            }
        }
    }

    public function setNameCases($nameCases)
    {
        $this->NameCases = $nameCases;
        $this->returnMask();
    }

    public function getNameCases()
    {
        return $this->NameCases;
    }

    public function gender()
    {
        if (!$this->genderSolved)
        {
            if ($this->genderMan > $this->genderWoman)
            {
                $this->genderSolved = NCL::$MAN;
            }
            else
            {
                $this->genderSolved = NCL::$WOMAN;
            }
        }
        return $this->genderSolved;
    }

    public function setGender($man, $woman)
    {
        $this->genderMan = $man;
        $this->genderWoman = $woman;
    }
    
    public function setTrueGender($gender)
    {
        $this->genderSolved = $gender;
    }

    public function getGender()
    {
        return array(NCL::$MAN => $this->genderMan, NCL::$WOMAN => $this->genderWoman);
    }

    public function setNamePart($namePart)
    {
        $this->namePart = $namePart;
    }

    public function getNamePart()
    {
        return $this->namePart;
    }

    public function getWord()
    {
        return $this->word;
    }
    
    public function isGenderSolved()
    {
        return ($this->genderSolved ? true : false);
    }
    
    public function setRule($ruleID)
    {
        $this->rule = $ruleID;
    }
}

?>
