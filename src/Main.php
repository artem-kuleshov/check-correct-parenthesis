<?php


class Main
{
    private $path_file;
    private $string;

    public function __construct(string $path_file)
    {
        $this->path_file = $path_file;
        $this->convertContentToOneLine();
    }

    private function convertContentToOneLine()
    {
        $this->string = file_get_contents($this->path_file);
        $this->string = str_replace("\r\n", "", $this->string);
    }

    public function validateString(): bool
    {
        if (preg_match_all("/[^\,\(\)\n\t\r \d+\-\*\/]/",  $this->string)) {
            throw new \InvalidArgumentException("В строке содержится недопустимый символ");
        }

        return (bool)preg_match("/^[^()\n]*+(\((?>[\d\, \t+\-\*÷\/]|(?1))*+\)[^()\n]*+)++$/m",  $this->string);
    }
}