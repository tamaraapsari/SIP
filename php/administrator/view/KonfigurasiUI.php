<?php 

require_once 'View.php';
/**
* 
*/
class KonfigurasiUI extends View
{
	
	public function tampilForm()
	{
		include_once 'pages/pageconfig.php';
		$this->end();
	}
}



 ?>