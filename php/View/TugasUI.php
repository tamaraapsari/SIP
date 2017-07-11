<?php 

include 'View.php';
include 'model/Berita.php';
include 'model/Sidebar.php';
/**
* 
*/
class TugasUI extends View
{
	
	public function tampilkanBerita()
    {
        include_once 'model/Berita.php';
        $brt = new Berita();
        $isi_berita = $brt->ambilBerita();

        include_once 'pages/kontentugas2.php';

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