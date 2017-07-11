<?php 


class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/navigasi.php';
		include_once 'template/header.php';
		
	}

	protected function end()
	{
		include_once 'template/footer.php';
	}
	
}


 ?>