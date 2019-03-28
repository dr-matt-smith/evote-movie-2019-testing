<?php 
class FirstUnitTest extends \Codeception\Test\Unit
{
    public function testOnePlusOneEqualsTwo()
    {
        // arrange
        $expectedResult = 2;

        // act
        $result = 1 + 1;

        // Assert
        $this->assertEquals($expectedResult, $result);

    }
}