<?php

class Elerhetoseg_alapinfok_Controller
{
	public $baseName = 'elerhetoseg_alapinfok';  //meghatarozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$view = new View_Loader($this->baseName."_main");
	}
}

?>