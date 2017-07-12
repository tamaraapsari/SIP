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
		include_once 'template/header-tek.php';
		include_once 'template/sidebar-tek.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/footer.php';
	}
	
}


 ?>