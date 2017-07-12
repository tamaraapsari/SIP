<div id="isi" class="col-md-10">
  <h3>Detail Admin</h3>
    <table border="1" class="table">
      <thead>
        <tr>
          <th>Username</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>No Telpon</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $data['username'] ?></td>
          <td><?php echo $data['nama'] ?></td>
          <td>
          	<?php 
          		if ($data['jenis_kelamin'] == 1) {
          			echo "Laki - Laki";
          		}else{
          			echo "Perempuan";
          		}
          	 ?>
          </td>
          <td><?php echo $data['alamat'] ?></td>
          <td><?php echo $data['no_telp'] ?></td>
        </tr>
      </tbody>
    </table>
    <a href="pengguna.php"><buton class="btn btn-link">Kembali</buton></a>
  </div>