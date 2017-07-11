<?php 
require_once 'View.php';
/**
* 
*/
class AdminUI extends View
{
	public function admin()
	{
		include_once 'pages/admin.php';
		$this->end();
	}
}
 ?>