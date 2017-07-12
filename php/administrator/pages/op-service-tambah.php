<div id="isi" class="col-md-10">
          <h3>Pendaftaran Servis</h3>
            <form action="aksi-op-service-tambah.php" method="POST">
                <div class="form-group">
                  <label for="inputservis" class="col-sm-2 control-label">Plat Motor</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="inputservis" placeholder="Masukan Plat Motor" name="plat">
                </div><br> <br>
                </div>
                <div class="form-group">
                  <label for="inputpelanggan" class="col-sm-2 control-label">Nama Pelanggan</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="inputpelanggan" placeholder="Masukkan Nama Pelanggan" name="nama_pelanggan">
                </div><br> <br>
                </div>
                <div class="form-group">
                  <label for="inputpelanggan" class="col-sm-2 control-label">Nomor Telepon</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="inputpelanggan" placeholder="Masukkan Nomor Telepon" name="no_telp">
                </div><br> <br>
                </div>

                <input type="hidden" name="id_op" value="1">
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
            
          </div>