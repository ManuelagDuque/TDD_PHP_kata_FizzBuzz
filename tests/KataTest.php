<?php

use FizzBuzz\Kata;
use PHPUnit\Framework\TestCase;

//TestCase es el padre y todos sus métodos estarán disponibles para que KataTest los use
class KataTest extends TestCase
{
    function test_si_devuelve_Fizz_cuando_es_divisible_por_3()
    {
        //defino mi escenario de test
        $num = 6;
        $kata = new Kata();

        //ejecuto el escenario
        $fizz = $kata->devolverNumero($num);

        //compruebo el escenario
        $this->assertEquals("Fizz", $fizz);
    }

    function test_si_devuelve_Buzz_cuando_es_divisible_por_5()
    {
        $num = 10;
        $kata = new Kata();

        $buzz = $kata->devolverNumero($num);

        $this->assertEquals("Buzz", $buzz);
    }

    function test_si_devuelve_FizzBuzz_cuando_es_divisible_por_3_y_5()
    {
        $num = 15;
        $kata = new Kata();

        $fBuzz = $kata->devolverNumero($num);

        $this->assertEquals("FizzBuzz", $fBuzz);
    }

    function test_si_devuelve_numero_cuando_no_es_divisible_por_3_y_5()
    {
        $num = 13;
        $kata = new Kata();

        $resultado = $kata->devolverNumero($num);

        $this->assertEquals($resultado, $num);
    }
}
