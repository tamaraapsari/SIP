<?php 
/**
* 
*/
include_once 'Controller.php';
class AdminManager extends Controller
{
	public function editadmin()
	{
		$id= $_GET['id'];
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$data = $mb->lihatAdmin($id);
		return $data;
	}

	public function UbahAdmin()
	{
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$id_adm = $_GET['id'];
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$password = md5($_POST['password']);
		$mb->ubahAdmin($id_adm,$username,$nama,$jenis_kelamin,$alamat,$no_telp,$password);
		
		return true;

	}

	public function lihatadmin()
	{
		$id= $_GET['id'];
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$data = $mb->lihatAdmin($id);
		return $data;
	}

	public function saveOperator()
	{
		include_once 'model/Pengguna.php';
		$mberita = new Pengguna();
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$password = md5($_POST['password']);
		$pesan = $mberita->saveOperator($username,$nama,$jenis_kelamin,$alamat,$no_telp,$password);
		return $pesan;
	}

	public function lihatoperator()
	{
		$id= $_GET['id'];
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$data = $mb->lihatOperator($id);
		return $data;
	}

	public function editoperator()
	{
		$id= $_GET['id'];
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$data = $mb->lihatOperator($id);
		return $data;
	}

	public function UbahOperator()
	{
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$id_op = $_GET['id'];
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$password = md5($_POST['password']);
		$mb->ubahOperator($id_op,$username,$nama,$jenis_kelamin,$alamat,$no_telp,$password);
		
		return true;

	}

	public function delOperator()
	{
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$id_op = $_GET['id'];
		$mb->delOperator($id_op);
		
		return true;

	}

	public function saveTeknisi()
	{
		include_once 'model/Pengguna.php';
		$mberita = new Pengguna();
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$password = md5($_POST['password']);
		$pesan = $mberita->saveTeknisi($username,$nama,$jenis_kelamin,$alamat,$no_telp,$password);
		return $pesan;
	}

	public function lihatteknisi()
	{
		$id= $_GET['id'];
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$data = $mb->lihatTeknisi($id);
		return $data;
	}

	public function editteknisi()
	{
		$id= $_GET['id'];
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$data = $mb->lihatTeknisi($id);
		return $data;
	}

	public function UbahTeknisi()
	{
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$id_tek = $_GET['id'];
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$password = md5($_POST['password']);
		$mb->ubahTeknisi($id_tek,$username,$nama,$jenis_kelamin,$alamat,$no_telp,$password);
		
		return true;

	}

	public function delTeknisi()
	{
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$id_tek = $_GET['id'];
		$mb->delTeknisi($id_tek);
		
		return true;

	}

	public function saveGudang()
	{
		include_once 'model/Pengguna.php';
		$mberita = new Pengguna();
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$password = md5($_POST['password']);
		$pesan = $mberita->saveGudang($username,$nama,$jenis_kelamin,$alamat,$no_telp,$password);
		return $pesan;
	}

	public function lihatgudang()
	{
		$id= $_GET['id'];
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$data = $mb->lihatGudang($id);
		return $data;
	}

	public function editgudang()
	{
		$id= $_GET['id'];
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$data = $mb->lihatGudang($id);
		return $data;
	}

	public function UbahGudang()
	{
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$id_kg = $_GET['id'];
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$password = md5($_POST['password']);
		$mb->ubahGudang($id_kg,$username,$nama,$jenis_kelamin,$alamat,$no_telp,$password);
		
		return true;

	}

	public function delGudang()
	{
		include_once 'model/Pengguna.php';
		$mb= new Pengguna();
		$id_kg = $_GET['id'];
		$mb->delGudang($id_kg);
		
		return true;

	}
}
 ?>