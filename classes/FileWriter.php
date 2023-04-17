<?php

class FileWriter
{
    public $fileName, $file;
    function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->file = fopen($fileName,"w");
    }

    public function write(String $text){
        fwrite($this->file,$text);
    }

    function __destruct()
    {
        fclose($this->file);
    }
}