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
}
 ?>