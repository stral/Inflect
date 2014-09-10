<?php 

use PHPUnit_Framework_TestCase as PHPUnit;

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
	public function testMath()
	{
		$this->assertEquals(3, $this->math->(1, 2), 'Não somou corretamente');
	}

}