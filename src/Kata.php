<?php

namespace FizzBuzz; //namespace=apellido
class Kata //class=nombre
{
    private $divisor1 = 3;
    private $fizz = "fizz";

    function devolverNumero($num)
    { 
        if ($num % $this->divisor1 == 0)
        {
            return $this->fizz;
        }
        return $num;

    }
}
