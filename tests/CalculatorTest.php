<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testmultiplication(): void
    {
        //Arrange
        $firstValue = 3;
        $secondValue = 7;
        $expectedResult = 21;

        //Act
        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $multiplication,
            "La méthode multiplication() ne fonctionne plus :-("
        );
    }

    public function testIsEven(): void
    {
        //Arrange
        $first = 10;
        $expectedResult = true;
        
        //Act
        $calculator = new Calculator();
        $isEven = $calculator->isEven($first);

        //Assert
        $this->assertIsBool($expectedResult, "La méthode isEven() ne fonctionne plus :-(");

    }
}