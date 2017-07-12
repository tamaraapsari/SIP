<?php 
/**
* lokasi ada di web2/administrator/model/Berita.php
*/
include_once 'Model.php';
class Operator extends Model
{
	// public $tanggal;
	// public $judul;
	// public $isi;
	// public $id_kategori;
	// public $id_berita;
	public function service()
	{
		$query = $this->db->prepare("SELECT * FROM op_service");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function saveService($plat,$nama_pelanggan,$no_telp,$id_op,$bln,$thn)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO op_service(plat,nama_pelanggan,no_telp,id_op,bln,thn) VALUES(:plat, :nama_pelanggan,  :no_telp, :id_op, :bln, :thn)");
		   $stmt->bindparam(":plat",$plat);
		   $stmt->bindparam(":nama_pelanggan",$nama_pelanggan);
		   $stmt->bindparam(":no_telp",$no_telp);
		   $stmt->bindparam(":id_op",$id_op);
		   $stmt->bindparam(":bln",$bln);
		   $stmt->bindparam(":thn",$thn);
		   $stmt->execute();
		   echo "Berhasil Menambahkan Service";
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}

	public function delService($id_service)
	{
		try {
			$stmt = $this->db->prepare("DELETE FROM op_service WHERE id_service=:id_service");
			$stmt->bindparam(":id_service",$id_service);
			$stmt->execute();
			echo "Service berhasil di hapus!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function listService($id)
	{
		// $query = $this->db->prepare("SELECT * FROM tek_detail_service WHERE id_service = $id");
		$query = $this->db->prepare("SELECT jenis_servis.nama_servis,jenis_servis.harga, tek_detail_service.id_detail_service FROM jenis_servis LEFT JOIN tek_detail_service ON jenis_servis.id_servis = tek_detail_service.jns_service WHERE id_service = $id");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function hitungService($id)
	{
		// $query = $this->db->prepare("SELECT * FROM tek_detail_service WHERE id_service = $id");
		$query = $this->db->prepare("SELECT COUNT(*) AS ngitung FROM tek_detail_service  WHERE id_service = $id");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
	
	public function listSC($id)
	{
		// $query = $this->db->prepare("SELECT * FROM tek_detail_service WHERE id_service = $id");
		$query = $this->db->prepare("SELECT suku_cadang.merk, suku_cadang.harga, tek_detail_sc.qty, tek_detail_sc.id_detail_sc FROM suku_cadang LEFT JOIN tek_detail_sc ON suku_cadang.id_sc = tek_detail_sc.suku_cadang WHERE id_service = $id");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

}
 ?>