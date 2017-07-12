<?php 
/**
* lokasi ada di web2/administrator/model/Berita.php
*/
include_once 'Model.php';
class Teknisi extends Model
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

	public function jenisService()
	{
		$query = $this->db->prepare("SELECT * FROM jenis_servis");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function jenisSc()
	{
		$query = $this->db->prepare("SELECT * FROM suku_cadang");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function detailService($id)
	{
		try {
			$stmt = $this->db->prepare("SELECT * FROM op_service WHERE id_service = :id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
			}
			catch(PDOException $e) {
				echo $e->getMessage(); 
				return false;
			}

	}

	public function listService($id)
	{
		// $query = $this->db->prepare("SELECT * FROM tek_detail_service WHERE id_service = $id");
		$query = $this->db->prepare("SELECT jenis_servis.nama_servis, tek_detail_service.id_detail_service FROM jenis_servis LEFT JOIN tek_detail_service ON jenis_servis.id_servis = tek_detail_service.jns_service WHERE id_service = $id");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function ambilService($id_service,$id_tek,$status)
	{
		try {
			$stmt = $this->db->prepare("UPDATE op_service SET id_tek=:id_tek, status=:status WHERE id_service=:id_service");
			$stmt->bindparam(":id_service",$id_service);
			$stmt->bindparam(":id_tek",$id_tek);
			$stmt->bindparam(":status",$status);
			$stmt->execute();
			echo "Lakukan Penanganan Service!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function detailKetService($id_service,$keterangan)
	{
		try {
			$stmt = $this->db->prepare("UPDATE op_service SET keterangan=:keterangan WHERE id_service=:id_service");
			$stmt->bindparam(":id_service",$id_service);
			$stmt->bindparam(":keterangan",$keterangan);
			$stmt->execute();
			echo "Keterangan Ditambahkan";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}
	
	public function tambahService($id_service,$jns_service,$id_tek)
		{
			try
			  {
			   $stmt = $this->db->prepare("INSERT INTO tek_detail_service(id_service,jns_service,id_tek) VALUES(:id_service, :jns_service,  :id_tek)");
			   $stmt->bindparam(":id_service",$id_service);
			   $stmt->bindparam(":jns_service",$jns_service);
			   $stmt->bindparam(":id_tek",$id_tek);
			   $stmt->execute();
			   header("Location: tek-detail.php?id=".$id_service."");
			  }
			  catch(PDOException $e)
			  {
			   echo $e->getMessage(); 
			   return false;
			  }
		}	

	public function delService($id_detail_service, $id)
	{
		try {
			$stmt = $this->db->prepare("DELETE FROM tek_detail_service WHERE id_detail_service=:id_detail_service");
			$stmt->bindparam(":id_detail_service",$id_detail_service);
			$stmt->execute();
			header("Location: tek-detail.php?id=".$id."");
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function tambahSC($id_service,$suku_cadang,$id_tek,$qty)
		{
			try
			  {
			   $stmt = $this->db->prepare("INSERT INTO tek_detail_sc(id_service,suku_cadang,id_tek,qty) VALUES(:id_service, :suku_cadang,  :id_tek, :qty)");
			   $stmt->bindparam(":id_service",$id_service);
			   $stmt->bindparam(":suku_cadang",$suku_cadang);
			   $stmt->bindparam(":id_tek",$id_tek);
			   $stmt->bindparam(":qty",$qty);
			   $stmt->execute();
			   header("Location: tek-detail.php?id=".$id_service."");
			  }
			  catch(PDOException $e)
			  {
			   echo $e->getMessage(); 
			   return false;
			  }
		}


	public function listSC($id)
	{
		// $query = $this->db->prepare("SELECT * FROM tek_detail_service WHERE id_service = $id");
		$query = $this->db->prepare("SELECT suku_cadang.merk, tek_detail_sc.qty, tek_detail_sc.id_detail_sc FROM suku_cadang LEFT JOIN tek_detail_sc ON suku_cadang.id_sc = tek_detail_sc.suku_cadang WHERE id_service = $id");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function delSC($id_detail_sc, $id)
	{
		try {
			$stmt = $this->db->prepare("DELETE FROM tek_detail_sc WHERE id_detail_sc=:id_detail_sc");
			$stmt->bindparam(":id_detail_sc",$id_detail_sc);
			$stmt->execute();
			header("Location: tek-detail.php?id=".$id."");
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}
}
 ?>