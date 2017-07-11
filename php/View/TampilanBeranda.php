<?php 

require_once 'View.php';
include 'model/Berita.php';
include 'model/Sidebar.php';

class TampilanUI extends View
{
	
	public function tampilkanForm()
	{
		include_once 'model/Berita.php';
		$brt= new Berita();
		$isi_berita = $brt->ambilBerita();
		include_once 'pages/tugas.php';
		$this->end();
	}
}
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
