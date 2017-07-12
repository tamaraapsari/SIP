<div id="isi" class="col-md-10">
          <h3>Tambah Kepala Gudang</h3><br>
            <form action="simpan-gudang.php" method="POST">
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Username</label>
                <input class="form-control" id="exampleInputEmail1" placeholder="Masukan Username"
                type="text" name="username">
              </div>
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Nama</label>
                <input class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama"
                type="text" name="nama">
              </div>
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Jenis Kelamin</label><br>
                <select class="form-control" name="jenis_kelamin">
                  <option value="1">Laki - Laki</option>
                  <option value="2">Perempuan</option>
                </select>
              <form method=post>
              </div>
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Alamat</label>
                <input class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat"
                type="text" name="alamat">
              </div>
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">No Telpon</label>
                <input class="form-control" id="exampleInputEmail1" placeholder="Masukan No Telpon"
                type="text" name="no_telp">
              </div>
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Password</label>
                <input class="form-control" id="exampleInputEmail1" placeholder="Masukan password"
                type="password" name="password">
              </div>
              <button type="Submit" class="btn btn-default">Tambahkan</button>
            </form>
          </div>
        </div>