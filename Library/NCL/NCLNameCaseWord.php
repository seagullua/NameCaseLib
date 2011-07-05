<?php
/**
 * Description of NCL
 *
 * @author seagull
 */
class NCLNameCaseWord
{
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
    
    private $letterMask = '';
    
    /**
     * @var NCLNameCaseCore $core
     */
    private $core;
    
    /**
     * Создать запись из слова
     * @param string $word 
     * @param NCLNameCaseCore $core
     */
    public function __construct($word, $core)
    {
        $this->core = $core;
        
    }
}


?>
