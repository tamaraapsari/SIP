<?php 

include 'View.php';
include 'model/Buku.php';
/**
* 
*/
class LihatUI extends View
{
	
	public function tampilkanBuku()
    {
        include_once 'model/Buku.php';
        $buk = new Buku();
        $isi_buku = $buk->ambilBuku();

        include_once 'pages/kontenbuku.php';

        $this->end();

	}
}

 ?>