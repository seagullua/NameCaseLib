<?php
/**
 * Description of EndingsCompiler
 *
 * @author seagull
 */
class EndingsCompiler
{
    private $template;
    private $destination = 'compiled/NCL.NameCase.ua.php';
    private $sourceFile = '../../../Library/NCL.NameCase.ua.php';
    
    private $compiled = '';

    private $mode = 'endings3';
    
    public function __construct($mode)
    {
        $this->template = file_get_contents($this->sourceFile);
        $this->mode = $mode;
    }
    
    private function save()
    {
        file_put_contents($this->destination, $this->compiled);
    }
    
    public function compile($text = '')
    {
        if($text)
        {
            $text = ", '".$text."'";
        }
        
        $this->compiled = str_replace('/*{'.$this->mode.'}*/', $text , $this->template);
        //$this->compiled = $this->template;
        $this->save();
        
    }
}

?>
