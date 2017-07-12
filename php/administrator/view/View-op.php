<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/header-op.php';
		include_once 'template/sidebar-op.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/footer.php';
	}
	
}


 ?>