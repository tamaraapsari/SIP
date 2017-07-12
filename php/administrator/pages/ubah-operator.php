<div id="isi" class="col-md-10">
          <h3>Edit data Operator</h3><br>
              <form action="aksi-ubah-operator.php?id=<?php echo $data['id_op']?>" method = "POST">
	          	  <div class="form-group">
	                <label class="control-label" for="exampleInputEmail1">Username</label>
	                <input class="form-control" id="exampleInputEmail1" 
	                type="text" name="username" value="<?php echo $data['username'] ?>">
	              </div>
	              <div class="form-group">
	                <label class="control-label" for="exampleInputEmail1">Nama</label>
	                <input class="form-control" id="exampleInputEmail1" 
	                type="text" name="nama" value="<?php echo $data['nama'] ?>">
	              </div>
	              <div class="form-group">
	                <label class="control-label">Jenis Kelamin</label>
	                <select name="jenis_kelamin" class="form-control">
	                <?php 
	                	if ($data['jenis_kelamin'] == 1) {
	                		echo "<option value='1'>Laki - Laki</option>";
	                		echo "<option value='2'>Perempuan</option>";
	                	}elseif ($data['jenis_kelamin'] == 2) {
	                		echo "<option value='2'>Perempuan</option>";
	                		echo "<option value='1'>Laki - Laki</option>";
	                	}
	                 ?>
	                </select>
	              </div>
	              <div class="form-group">
	                <label class="control-label" for="exampleInputEmail1">Alamat</label>
	                <input class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat"
	                type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
	              </div>
	              <div class="form-group">
	                <label class="control-label" for="exampleInputEmail1">No Telpon</label>
	                <input class="form-control" id="exampleInputEmail1" placeholder="Masukan No Telpon"
	                type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>">
	              </div>
	              <div class="form-group">
	                <label class="control-label" for="exampleInputEmail1">Password</label>
	                <input class="form-control" id="exampleInputEmail1" placeholder="Masukan password"
	                type="password" name="password" required>
	              </div>
	              <button type="submit" class="btn btn-default">Submit</button>
              </form>
          </div>
        </div>