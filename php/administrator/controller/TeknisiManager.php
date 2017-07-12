<?php 
/**
* 
*/
include_once 'Controller.php';
class TeknisiManager extends Controller
{
	public function ambilService()
	{
		include_once 'model/Teknisi.php';
		$mb= new Teknisi();
		$id_service = $_GET['id'];
		$id_tek = 1;
		$status = 1;
		$mb->ambilService($id_service,$id_tek,$status);
		
		return true;

	}

	public function detailService()
	{
		$id= $_GET['id'];
		include_once 'model/Teknisi.php';
		$mb= new Teknisi();
		$data = $mb->detailService($id);
		return $data;
	}

	public function listService()
	{
		$id= $_GET['id'];
		include_once 'model/Teknisi.php';
		$mb= new Teknisi();
		$data = $mb->listService($id);
		return $data;
	}

	public function detailKetService()
	{
		include_once 'model/Teknisi.php';
		$mb= new Teknisi();
		$id_service = $_GET['id'];
		$keterangan = $_POST['keterangan'];
		$mb->detailKetService($id_service,$keterangan);
		
		return true;

	}

	public function tambahService()
	{
		include_once 'model/Teknisi.php';
		$mberita = new Teknisi();
		$id_service = $_POST['id_service'];
		$jns_service = $_POST['jns_service'];
		$id_tek = $_POST['id_tek'];
		$pesan = $mberita->tambahService($id_service,$jns_service,$id_tek);
		return $pesan;
	}

	public function delService()
	{
		include_once 'model/Teknisi.php';
		$mb= new Teknisi();
		$id = $_GET['id_service'];
		$id_detail_service = $_GET['id'];
		$mb->delService($id_detail_service, $id);
		
		return true;

	}
	
	public function tambahSC()
	{
		include_once 'model/Teknisi.php';
		$mberita = new Teknisi();
		$id_service = $_POST['id_service'];
		$suku_cadang = $_POST['suku_cadang'];
		$qty = $_POST['qty'];
		$id_tek = $_POST['id_tek'];
		$pesan = $mberita->tambahSC($id_service,$suku_cadang,$id_tek,$qty);
		return $pesan;
	}

	public function listSC()
	{
		$id= $_GET['id'];
		include_once 'model/Teknisi.php';
		$mb= new Teknisi();
		$data = $mb->listSC($id);
		return $data;
	}

	public function delSC()
	{
		include_once 'model/Teknisi.php';
		$mb= new Teknisi();
		$id = $_GET['id_service'];
		$id_detail_sc= $_GET['id'];
		$mb->delSC($id_detail_sc, $id);
		
		return true;

	}
}
 ?>