<?php
namespace App\Test;
use CPS\RobotFactory;
use CPS\Robot;
use PHPUnit\Framework\TestCase;

class RobotTest extends TestCase {
	
	public function testICanCreateFactory () {
		$factory = new RobotFactory();
		$robot = $factory->createRobot();
	 	$this->assertInstanceOf(Robot::class, $robot);
    	}
	
	public function testICanSetNames () {
		$factory = new RobotFactory();
		$robot = $factory->createRobot();
		
		$name = "Robert";
		$robot->setName($name);

	 	$this->assertTrue($name == $robot->name);
    	}
	
}
