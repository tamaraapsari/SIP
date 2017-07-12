<?php 
require_once 'View-op.php';
/**
* 
*/
class OperatorUI extends View
{
	public function operator()
	{
		include_once 'pages/operator.php';
		$this->end();
	}

	public function service()
	{
		include_once 'model/Operator.php';
		$srv = new Operator();
		$service = $srv->service();
		include_once 'pages/op-service.php';
		$this->end();
	}

	public function tambahService()
	{
		include_once 'pages/op-service-tambah.php';
		$this->end();
	}

	public function saveService()
	{
		include_once 'controller/OperatorManager.php';
		$bm = new OperatorManager();
		$pesan = $bm->saveService();
		$this->end();
	}

	public function delService()
	{
		include_once 'controller/OperatorManager.php';
		$bm= new OperatorManager();
		$bm->delService();
		$this->end();
	}

	public function progresService()
	{
		include_once 'model/Teknisi.php';
		$adm = new Teknisi();
		$service = $adm->jenisService();
		$sukucdg = $adm->jenisSc();
		include_once 'controller/TeknisiManager.php';
		$bm= new TeknisiManager();
		$data = $bm->detailService();
		$list = $bm->listService();
		$sc = $bm->listSC();
		include_once 'pages/op-progres.php';
		$this->end();
	}

	public function pembayaran()
	{
		include_once 'controller/TeknisiManager.php';
		$bm = new TeknisiManager();
		$data = $bm->detailService();
		include_once 'controller/OperatorManager.php';
		$op = new OperatorManager();
		$srv = $op->listService();
		$hitung = $op->hitungService();
		$hitung = $hitung[0]['ngitung'];
		$sc = $op->listSC();
		include_once 'pages/op-pembayaran.php';
		$this->end();
	}
}
 ?>