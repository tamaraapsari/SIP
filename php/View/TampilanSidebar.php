<?php 

require_once 'View.php';
include 'model/Sidebar.php';

class TampilanSidebar extends View
{
	
	public function tampilkanSidebar()
	{
		include_once 'model/Sidebar.php';
		$sbr= new Sidebar();
		$isi_sidebar= $sbr->ambilSidebar();
		include_once 'pages/sidebar.php';
		$this->end();
	}
}




 ?>