<?php 

use PHPUnit_Framework_TestCase as PHPUnit;
use Application\NativeElements\Math;

class PHPNativeElementsTest extends PHPUnit {

	/**
	 * undocumented function
	 *
	 * @return void
	 **/
	public function setUp()
	{
		$this->math = new Math;
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 **/
	public function tearDown()
	{

	}

	/**
	 * Test Operation Math
	 *
	 * @return void
	 **/
	public function testOperationMath()
	{
		$this->assertEquals(3, $this->math->sum(1, 2), 'not added correctly');
	}

}
