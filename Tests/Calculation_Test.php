<?php
/***********************************************/
/* COMMENT: Call the test from main site folder
/* phpunit UnitTest Tests/Calculation_Test.php
/***********************************************/

declare(strict_types=1);
require './Lib/Calculation.php';
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{

    public function test_test_division_true():void{

        $calculation = new Lib\Calculation();
        $result = $calculation->test_division(9, 3, 'Confirm');

        $this->assertSame('Confirm', $result);

    }

    public function test_test_division_false():void{

        $calculation = new Lib\Calculation();
        $result = $calculation->test_division(10, 3, 'Confirm');

        $this->assertSame('', $result);

    }

    public function test_do_the_did_start():void{

        $calculation = new Lib\Calculation();
        $string_to_test = $calculation->do_the_did();
        $test_string = '1</br>2</br>Fizz </br>4</br>Buzz </br>Fizz';

        $this->assertStringStartsWith($test_string, $string_to_test);

    }

    public function test_do_the_did_end():void{

        $calculation = new Lib\Calculation();
        $string_to_test = $calculation->do_the_did();
        $test_string = 'Buzz </br>Fizz </br>97</br>98</br>Fizz </br>Buzz </br>';

        $this->assertStringEndsWith($test_string, $string_to_test);

    }
}

?>