<?php
require_once('./Sample.php');
class SampleTest extends PHPUnit_Framework_TestCase
{
	public function testhelloWorld()
	{
		$Sample = new Sample();
		$this->assertEquals($Sample->helloWorld(),'hello world!');
	}

	public function aaa()
	{
		$Sample = new Sample();
		$this->assertEquals($Sample->helloWorld(),'aaaaa');
	}
}
