<?php 

/**
* 
*/

include_once 'Model.php';
class Berita extends Model
{
	public $id_berita;
	public $tanggal;
	public $judul;
	public $isi;
	public $id_kategori;
	
	public function ambilBerita()
	{
		$query = $this->db->prepare("SELECT * FROM berita");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}
	public function setBerita($tanggal,$judul,$isi,$id_kategori){
		
	}

}


 ?>