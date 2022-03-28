<?php
namespace App;

class Calculator
{
    public function __construct($operator){
        $this->operator = $operator;
    }

    public function evaluate($num1, $num2){
        $func = $this->operator;
        return $this->$func($num1, $num2);
    }

    public function add($num1, $num2){
        return $num1 + $num2;
    }

    public function subtract($num1, $num2){
        return $num1 - $num2;
    }


    public function multiply($num1, $num2){
        return $num1 * $num2;
    }


}


