<?php 
require_once 'View-tek.php';
/**
* 
*/
class TeknisiUI extends View
{
	public function teknisi()
	{
		include_once 'pages/teknisi.php';
		$this->end();
	}


	public function service()
	{
		include_once 'model/Teknisi.php';
		$srv = new Teknisi();
		$service = $srv->service();
		include_once 'pages/tek-service.php';
		$this->end();
	}

	public function ambilService()
	{
		include_once 'controller/TeknisiManager.php';
		$bm= new TeknisiManager();
		$bm->ambilService();
		$this->end();
	}

	public function detailService()
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
		include_once 'pages/tek-detail.php';
		$this->end();
	}

	public function detailKetService()
	{
		include_once 'controller/TeknisiManager.php';
		$bm= new TeknisiManager();
		$bm->detailKetService();
		$this->end();
	}

	public function tambahService()
	{
		include_once 'controller/TeknisiManager.php';
		$bm = new TeknisiManager();
		$pesan = $bm->tambahService();
		$this->end();
	}

	public function delService()
	{
		include_once 'controller/TeknisiManager.php';
		$bm= new TeknisiManager();
		$bm->delService();
		$this->end();
	}

	public function tambahSC()
	{
		include_once 'controller/TeknisiManager.php';
		$bm = new TeknisiManager();
		$pesan = $bm->tambahSC();
		$this->end();
	}

	public function delSC()
	{
		include_once 'controller/TeknisiManager.php';
		$bm= new TeknisiManager();
		$bm->delSC();
		$this->end();
	}	
}
 ?>