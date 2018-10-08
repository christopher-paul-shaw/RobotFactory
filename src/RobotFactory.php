<?php
namespace CPS;

class RobotFactory {

	public function __construct ($material="metal") {
		$this->material = $material;
	}

	public function createRobot(): Robot {
		$robot = new Robot();
		$robot->setMaterial($this->material);
		return $robot;
	}

}
