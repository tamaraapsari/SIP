<?php 
/**
* 
*/
include_once 'Controller.php';
class OperatorManager extends Controller
{
	public function saveService()
	{
		include_once 'model/Operator.php';
		$mberita = new Operator();
		$plat = $_POST['plat'];
		$nama_pelanggan = $_POST['nama_pelanggan'];
		$no_telp = $_POST['no_telp'];
		$id_op = $_POST['id_op'];
		$bln   = date('m');
		$thn   = date('Y');
		$pesan = $mberita->saveService($plat,$nama_pelanggan,$no_telp,$id_op,$bln,$thn);
		return $pesan;
	}

	public function delService()
	{
		include_once 'model/Operator.php';
		$mb= new Operator();
		$id_service = $_GET['id'];
		$mb->delService($id_service);
		
		return true;

	}

	public function listService()
	{
		$id= $_GET['id'];
		include_once 'model/Operator.php';
		$mb= new Operator();
		$data = $mb->listService($id);
		return $data;
	}

	public function hitungService()
	{
		$id= $_GET['id'];
		include_once 'model/Operator.php';
		$mb= new Operator();
		$data = $mb->hitungService($id);
		return $data;
	}

	public function listSC()
	{
		$id= $_GET['id'];
		include_once 'model/Operator.php';
		$mb= new Operator();
		$data = $mb->listSC($id);
		return $data;
	}
}
 ?>