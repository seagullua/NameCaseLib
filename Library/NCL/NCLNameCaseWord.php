<?php

/**
 * Description of NCL
 *
 * @author seagull
 */
class NCLNameCaseWord
{

    private $word = '';
    /**
     * Тип текущей записи (Фамилия/Имя/Отчество)
     * @var string
     */
    private $namePart = null;
    /**
     * Вероятность, что мужчина
     * @var int 
     */
    private $genderMan = 0;
    /**
     * Вероятность, что женщина
     * @var int 
     */
    private $genderWoman = 0;
    private $genderSolved = 0;
    private $letterMask = '';
    private $isUpperCase = false;
    private $NameCases = array();
    
    private $rule = 0;
    
    /**
     * Создать запись из слова
     * @param string $word 
     * @param NCLNameCaseCore $core
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
