<?php 
require_once 'View.php';
/**
* 
*/
class AdminUI extends View
{
	public function admin()
	{
		include_once 'pages/admin.php';
		$this->end();
	}

	public function pengguna()
	{
		include_once 'model/Pengguna.php';
		$adm = new Pengguna();
		$admin = $adm->Admin();
		$operator = $adm->Operator();
		$teknisi = $adm->Teknisi();
		$gudang = $adm->Gudang();
		include_once 'pages/pengguna.php';
		$this->end();
	}

	public function editadmin()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$data = $bm->editadmin();
		include_once 'pages/ubah-admin.php';
		$this->end();	
	}

	public function UbahAdmin()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$bm->UbahAdmin();
		$this->end();
	}

	public function lihatadmin()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$data = $bm->lihatadmin();
		include_once 'pages/lihat-admin.php';
		$this->end();	
	}

	public function tambahOP()
	{
		include_once 'pages/tambah-op.php';
		$this->end();
	}

	public function lihatoperator()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$data = $bm->lihatoperator();
		include_once 'pages/lihat-operator.php';
		$this->end();	
	}

	public function saveOperator()
	{
		include_once 'controller/AdminManager.php';
		$bm = new AdminManager();
		$pesan = $bm->saveOperator();
		$this->end();
	}

	public function editoperator()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$data = $bm->editoperator();
		include_once 'pages/ubah-operator.php';
		$this->end();	
	}

	public function UbahOperator()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$bm->UbahOperator();
		$this->end();
	}

	public function deloperator()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$bm->delOperator();
		$this->end();
	}

	public function tambahTeknisi()
	{
		include_once 'pages/tambah-teknisi.php';
		$this->end();
	}

	public function lihatteknisi()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$data = $bm->lihatteknisi();
		include_once 'pages/lihat-teknisi.php';
		$this->end();	
	}

	public function saveTeknisi()
	{
		include_once 'controller/AdminManager.php';
		$bm = new AdminManager();
		$pesan = $bm->saveTeknisi();
		$this->end();
	}

	public function editteknisi()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$data = $bm->editteknisi();
		include_once 'pages/ubah-teknisi.php';
		$this->end();	
	}

	public function UbahTeknisi()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$bm->UbahTeknisi();
		$this->end();
	}

	public function delteknisi()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$bm->delteknisi();
		$this->end();
	}

	public function tambahGudang()
	{
		include_once 'pages/tambah-gudang.php';
		$this->end();
	}

	public function lihatgudang()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$data = $bm->lihatgudang();
		include_once 'pages/lihat-gudang.php';
		$this->end();	
	}

	public function saveGudang()
	{
		include_once 'controller/AdminManager.php';
		$bm = new AdminManager();
		$pesan = $bm->saveGudang();
		$this->end();
	}

	public function editgudang()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$data = $bm->editgudang();
		include_once 'pages/ubah-gudang.php';
		$this->end();	
	}

	public function UbahGudang()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$bm->UbahGudang();
		$this->end();
	}

	public function delgudang()
	{
		include_once 'controller/AdminManager.php';
		$bm= new AdminManager();
		$bm->delgudang();
		$this->end();
	}

	public function keuangan()
	{
		include_once 'pages/keuangan.php';
		$this->end();
	}
}
 ?>