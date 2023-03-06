<?php

namespace Kuleshov\CheckCorrectParenthesis;

class StringCorrect
{
    public static function checkParenthesis(string $string): bool
    {
        if (preg_match_all("/[^\,\(\)\n\t\r \d+\-\*\/]/",  $string)) {
            throw new \InvalidArgumentException("В строке содержится недопустимый символ");
        }

        return (bool)preg_match("/^[^()\n]*+(\((?>[\d\, \t+\-\*÷\/]|(?1))*+\)[^()\n]*+)++$/m",  $string);
    }
}