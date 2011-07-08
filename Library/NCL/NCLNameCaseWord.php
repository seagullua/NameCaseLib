<?php
/**
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @package NameCaseLib
 */

/**
 * NCLNameCaseWord - класс, который служит для хранения всей информации о каждом слове
 * 
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4
 * @package NameCaseLib
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
     * Создание нового обьекта со словом <var>$word</var>
     * @param string $word слово
     */
    public function __construct($word)
    {
        $this->generateMask($word);
        $this->word = NCLStr::strtolower($word);
    }
    
    /**
     * Генерирует маску, которая содержит информацию о том, какие буквы в слове были большими, а какие маленькими:
     * - x - маленькая буква
     * - X - больная буква
     * @param string $word слово, для которого генерировать маску 
     */
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
    
    /**
     * Возвращает все падежи слова в начальную маску:
     * - x - маленькая буква
     * - X - больная буква
     */
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
    
    /**
     * Сохраняет результат склонения текущего слова
     * @param array $nameCases массив со всеми падежами
     */
    public function setNameCases($nameCases)
    {
        $this->NameCases = $nameCases;
        $this->returnMask();
    }
    
    /**
     * Возвращает массив со всеми падежами текущего слова
     * @return array массив со всеми падежами 
     */
    public function getNameCases()
    {
        return $this->NameCases;
    }
    
    /**
     * Возвращает строку с нужным падежом текущего слова
     * @param int $number нужный падеж
     * @return string строка с нужным падежом текущего слова 
     */
    public function getNameCase($number)
    {
        if(isset($this->NameCases[$number]))
        {
            return $this->NameCases[$number];
        }
        return false;
    }
    
    /**
     * Расчитывает и возвращает пол текущего слова
     * @return int пол текущего слова 
     */
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
    
    /**
     * Устанавливает вероятности того, что даное слово является мужчиной или женщиной
     * @param int $man вероятность того, что слово мужчина
     * @param int $woman верятность того, что слово женщина
     */
    public function setGender($man, $woman)
    {
        $this->genderMan = $man;
        $this->genderWoman = $woman;
    }
    
    /**
     * Окончательно устанавливает пол человека
     * - 0 - не определено
     * - NCL::$MAN - мужчина
     * - NCL::$WOMAN - женщина
     * @param int $gender пол человека
     */
    public function setTrueGender($gender)
    {
        $this->genderSolved = $gender;
    }
    
    /**
     * Возвращает массив вероятности того, что даное слово является мужчиной или женщиной
     * @return array массив вероятностей 
     */
    public function getGender()
    {
        return array(NCL::$MAN => $this->genderMan, NCL::$WOMAN => $this->genderWoman);
    }
    
    /**
     * Устанавливает тип текущего слова
     * <b>Тип слова:</b>
     * - S - Фамилия
     * - N - Имя
     * - F - Отчество
     * @param string $namePart тип слова
     */
    public function setNamePart($namePart)
    {
        $this->namePart = $namePart;
    }
    
    /**
     * Возвращает тип текущего слова
     * <b>Тип слова:</b>
     * - S - Фамилия
     * - N - Имя
     * - F - Отчество
     * @return string $namePart тип слова
     */
    public function getNamePart()
    {
        return $this->namePart;
    }
    
    /**
     * Возвращает текущее слово.
     * @return string текущее слово 
     */
    public function getWord()
    {
        return $this->word;
    }
    
    /**
     * Если уже был расчитан пол для всех слов системы, тогда каждому слову предается окончательное
     * решение. Эта функция определяет было ли принято окончательное решение.
     * @return bool было ли принято окончательное решение по поводу пола текущего слова 
     */
    public function isGenderSolved()
    {
        return ($this->genderSolved ? true : false);
    }
    
    /**
     * Устанавливает номер правила по которому склонялось текущее слово.
     * @param int $ruleID номер правила
     */
    public function setRule($ruleID)
    {
        $this->rule = $ruleID;
    }
}

?>
