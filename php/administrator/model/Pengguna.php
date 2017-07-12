<?php 
/**
* lokasi ada di web2/administrator/model/Berita.php
*/
include_once 'Model.php';
class Pengguna extends Model
{
	public $tanggal;
	public $judul;
	public $isi;
	public $id_kategori;
	public $id_berita;
	
	public function Admin()
	{
		$query = $this->db->prepare("SELECT * FROM admin");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	


	public function lihatAdmin($id)
	{
		try {
			$stmt = $this->db->prepare("SELECT * FROM admin WHERE id_adm=:id");
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

	public function ubahAdmin($id_adm,$username,$nama,$jenis_kelamin,$alamat,$no_telp,$password)
	{
		try {
			$stmt = $this->db->prepare("UPDATE admin SET username=:username, nama=:nama, jenis_kelamin=:jenis_kelamin, alamat=:alamat, no_telp=:no_telp, password=:password WHERE id_adm=:id_adm");
			$stmt->bindparam(":id_adm",$id_adm);
			$stmt->bindparam(":username",$username);
			$stmt->bindparam(":nama",$nama);
			$stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
			$stmt->bindparam(":alamat",$alamat);
			$stmt->bindparam(":no_telp",$no_telp);
			$stmt->bindparam(":password",$password);
			$stmt->execute();
			echo "Admin berhasil di update!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function Operator()
	{
		$query = $this->db->prepare("SELECT * FROM operator");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function saveOperator($username,$nama,$jenis_kelamin,$alamat,$no_telp,$password)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO operator(username,nama,jenis_kelamin,alamat,no_telp,password) VALUES(:username, :nama, :jenis_kelamin, :alamat, :no_telp, :password)");
		   $stmt->bindparam(":username",$username);
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":no_telp",$no_telp);
		   $stmt->bindparam(":password",$password);
		   $stmt->execute();
		   echo "Berhasil Menambahkan Operator";
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
	
	public function lihatOperator($id)
	{
		try {
			$stmt = $this->db->prepare("SELECT * FROM operator WHERE id_op=:id");
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

	public function ubahOperator($id_op,$username,$nama,$jenis_kelamin,$alamat,$no_telp,$password)
	{
		try {
			$stmt = $this->db->prepare("UPDATE operator SET username=:username, nama=:nama, jenis_kelamin=:jenis_kelamin, alamat=:alamat, no_telp=:no_telp, password=:password WHERE id_op=:id_op");
			$stmt->bindparam(":id_op",$id_op);
			$stmt->bindparam(":username",$username);
			$stmt->bindparam(":nama",$nama);
			$stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
			$stmt->bindparam(":alamat",$alamat);
			$stmt->bindparam(":no_telp",$no_telp);
			$stmt->bindparam(":password",$password);
			$stmt->execute();
			echo "Operator berhasil di update!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function delOperator($id_op)
	{
		try {
			$stmt = $this->db->prepare("DELETE FROM operator WHERE id_op=:id_op");
			$stmt->bindparam(":id_op",$id_op);
			$stmt->execute();
			echo "Operator berhasil di hapus!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function Teknisi()
	{
		$query = $this->db->prepare("SELECT * FROM teknisi");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function saveTeknisi($username,$nama,$jenis_kelamin,$alamat,$no_telp,$password)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO teknisi(username,nama,jenis_kelamin,alamat,no_telp,password) VALUES(:username, :nama, :jenis_kelamin, :alamat, :no_telp, :password)");
		   $stmt->bindparam(":username",$username);
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":no_telp",$no_telp);
		   $stmt->bindparam(":password",$password);
		   $stmt->execute();
		   echo "Berhasil Menambahkan Teknisi";
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
	
	public function lihatTeknisi($id)
	{
		try {
			$stmt = $this->db->prepare("SELECT * FROM teknisi WHERE id_tek=:id");
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

	public function ubahTeknisi($id_tek,$username,$nama,$jenis_kelamin,$alamat,$no_telp,$password)
	{
		try {
			$stmt = $this->db->prepare("UPDATE teknisi SET username=:username, nama=:nama, jenis_kelamin=:jenis_kelamin, alamat=:alamat, no_telp=:no_telp, password=:password WHERE id_tek=:id_tek");
			$stmt->bindparam(":id_tek",$id_tek);
			$stmt->bindparam(":username",$username);
			$stmt->bindparam(":nama",$nama);
			$stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
			$stmt->bindparam(":alamat",$alamat);
			$stmt->bindparam(":no_telp",$no_telp);
			$stmt->bindparam(":password",$password);
			$stmt->execute();
			echo "Teknisi berhasil di update!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function delTeknisi($id_tek)
	{
		try {
			$stmt = $this->db->prepare("DELETE FROM teknisi WHERE id_tek=:id_tek");
			$stmt->bindparam(":id_tek",$id_tek);
			$stmt->execute();
			echo "Teknisi berhasil di hapus!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function Gudang()
	{
		$query = $this->db->prepare("SELECT * FROM kepala_gudang");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}

	public function saveGudang($username,$nama,$jenis_kelamin,$alamat,$no_telp,$password)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO kepala_gudang(username,nama,jenis_kelamin,alamat,no_telp,password) VALUES(:username, :nama, :jenis_kelamin, :alamat, :no_telp, :password)");
		   $stmt->bindparam(":username",$username);
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":no_telp",$no_telp);
		   $stmt->bindparam(":password",$password);
		   $stmt->execute();
		   echo "Berhasil Menambahkan Kepala Gudang";
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
	
	public function lihatGudang($id)
	{
		try {
			$stmt = $this->db->prepare("SELECT * FROM kepala_gudang WHERE id_kg=:id");
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

	public function ubahGudang($id_kg,$username,$nama,$jenis_kelamin,$alamat,$no_telp,$password)
	{
		try {
			$stmt = $this->db->prepare("UPDATE kepala_gudang SET username=:username, nama=:nama, jenis_kelamin=:jenis_kelamin, alamat=:alamat, no_telp=:no_telp, password=:password WHERE id_kg=:id_kg");
			$stmt->bindparam(":id_kg",$id_kg);
			$stmt->bindparam(":username",$username);
			$stmt->bindparam(":nama",$nama);
			$stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
			$stmt->bindparam(":alamat",$alamat);
			$stmt->bindparam(":no_telp",$no_telp);
			$stmt->bindparam(":password",$password);
			$stmt->execute();
			echo "Kepala Gudang berhasil di update!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}

	public function delGudang($id_kg)
	{
		try {
			$stmt = $this->db->prepare("DELETE FROM kepala_gudang WHERE id_kg=:id_kg");
			$stmt->bindparam(":id_kg",$id_kg);
			$stmt->execute();
			echo "Kepala Gudang berhasil di hapus!";
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
		}
	}
}
 ?>