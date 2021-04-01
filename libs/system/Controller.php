<?php
namespace libs\system;

use libs\system\View; 

class Controler
{
	protected $view;  
	public function __construct()
	{
		$this->view = new View();
	}
}
?>