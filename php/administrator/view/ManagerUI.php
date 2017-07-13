<?php 
require_once 'View.php';
/**
* 
*/
class ManagerUI extends View
{
	public function manager()
	{
		include_once 'pages/admin.php';
		$this->end();
	}