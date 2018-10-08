<?php
namespace CPS;







class Robot {
	
	public $name = 'Robot';
	public $material;

	public function setName ($name) {
		$this->name = $name;
	}

	public function setMaterial ($material) {
		$this->material = $material;
	}

	public function say ($say) {
		echo "{$this->name}: {$say}".PHP_EOL;
	}

	public function killAllHumanz () {
		echo "Exterminate Exterminate!!!!".PHP_EOL;
	}


}
