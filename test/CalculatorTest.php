<?php
namespace DZFP\Test;

/**
* Do an Equal and a notEqual addnumbers test
*/
class CalculatorTest extends \PHPUnit\Framework\TestCase
{
	public function testEqual()
	{
		$calc = new \DZFP\Calculator;
		$this->assertEquals(4, $calc->add(2,2));
	}

	public function testNotEqual()
	{
		$calc = new \DZFP\Calculator;
		$this->assertNotEquals(4, $calc->add(2,3));
	}
}