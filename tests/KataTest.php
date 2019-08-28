<?php

use FizzBuzz\Kata;
use PHPUnit\Framework\TestCase;

//TestCase es el padre y todos sus métodos estarán disponibles para que KataTest los use
class KataTest extends TestCase
{
    function testDevuelveNumeroCuandoNoEsDivisiblePor3y5()
    {
        //defino mi escenario
        $num = 1;
        $kata = new Kata();

        //ejecuto escenario
        $resultado = $kata->devolverNumero($num); //devolverNumero es un metódo que almacena la variable kata
        
        //comprobar assertion

        $this->assertIsNumeric($resultado);

    }

    function testDevuelveFizzSiEsDivisibkePor3 () 
    {
        //defino mi escenario de test

        $num = 3;
        $espero = "fizz";
        $kata = new Kata ();
        

        //ejecuto el escenario
        $fizz = $kata->devolverNumero($num);

        //compruebo el escenario
        $this->assertEquals ($espero, $fizz);
    }


}
