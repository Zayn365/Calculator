<?php


class Calc{
    public $operator;
    public $num1;
    public $num2;

    public function __construct($optcon , int $one , int $two){
        $this->operator = $optcon;
        $this->num1 = $one;
        $this->num2 = $two;
     }
     public function calculator(){
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2 ;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                break;
            case 'multi':
                $result = $this->num1 * $this->num2;
                break;
            case 'divide':
                $result = $this->num1 / $this->num2;
                break;
            default:
                echo "Error";
                break;
        }
        return $result;
     }
}