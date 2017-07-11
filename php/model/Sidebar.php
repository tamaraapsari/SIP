<?php 

/**
* 
*/

include_once 'Model.php';
class Sidebar extends Model
{
	
	public function ambilSidebar()
	{
		$query = $this->db->prepare("SELECT * FROM kategori");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>