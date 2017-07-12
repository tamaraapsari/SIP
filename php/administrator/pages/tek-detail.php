<div id="isi" class="col-md-10">
          <h3>Servis Kendaraan</h3><br>
          <hr>
            <div class="row">
              <div class="col-md-4">
                 Nama Pemilik
              </div>
              <div class="col-md-8">
                : <?php echo $data['nama_pelanggan'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                 Plat
              </div>
              <div class="col-md-8">
                : <?php echo $data['plat'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                 Nomor Telepon
              </div>
              <div class="col-md-8">
                : <?php echo $data['no_telp'] ?>
              </div>
            </div>
          <hr>
          <h4>
            Keterangan Servis
            <?php  if ($data['keterangan'] == NULL) { ?>
                <button type="button" data-toggle="modal" data-target="#keterangan"><span class="glyphicon glyphicon-plus"></span></button></h4>
            <?php  }else{ ?>
              </h4>
              <div class="row">
                <div class="col-md-12">
                  <i>"<?php echo $data['keterangan'] ?>"</i>
                </div>
              </div>
            <?php  } ?>
          <h4>Jenis Service <button type="button" data-toggle="modal" data-target="#service"><span class="glyphicon glyphicon-plus"></span></button></h4>
          <table class="table table-bordered" border-color="black">
            <tr>
              <th width="200">Jenis Service</th>
              <th width="9%">Aksi</th>
            </tr>
            <?php foreach ($list as $list) { ?>
              <tr>
                <td><?php echo $list['nama_servis'] ?></td>
                <td>
                  <a href="tek-del-detail.php?id=<?php echo $list['id_detail_service'] ?>&id_service=<?php echo $_GET['id'] ?>">
                    <button type="button" class="btn btn-danger" onclick="tombol();">Hapus</button>
                  </a>
                </td>
              </tr>
            <?php } ?>
            
            
          </table>
          <h4>Pemakaian Suku Cadang <button type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></button></h4>
          <table class="table table-bordered" border-color="black">
            <tr>
              <th width="200">Nama Suku Cadang</th>
              <th width="50">qty</th>
              <th width="9%">Aksi</th>
            </tr>
            <?php foreach ($sc as $sc) { ?>
              <tr>
                <td><?php echo $sc['merk'] ?></td>
                <td><?php echo $sc['qty'] ?></td>
                <td>

                  <a href="tek-del-sc.php?id=<?php echo $sc['id_detail_sc'] ?>&id_service=<?php echo $_GET['id'] ?>">
                    <button type="button" class="btn btn-danger" onclick="tombol();">Hapus</button>
                  </a>
                </td>
              </tr>
            <?php } ?>

          </table>
          <div><br>
          <div>
            <a href="tek-selesai.php?id=<?php echo $_GET['id'] ?>">
              <button class="btn btn-primary btn-block">Pekerjaan Selesai</button>
            </a>
          </div><br>
          </div>
          <div id="keterangan" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                  
                  <form action="tek-detail-ket.php?id=<?php echo $data['id_service'] ?>" method="POST">
                     <label for="namaitem"><h4>Keterangan</h4></label><br>
                     <textarea rows="5" cols="40" name="keterangan"></textarea>
                     <br><br>
                     <button type="submit" class="btn btn-default">Tambah</button>
                  </form>
                  
                </div>
              </div>
            </div>
        </div>

        <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                  <form action="tek-tambah-sc.php" method="POST">
                    <input type="hidden" name="id_service" value="<?php echo $data['id_service'] ?>">
                    <label for="namaitem"><h4>Nama Suku Cadang</h4></label><br>
                    <select class="form-control" name="suku_cadang" id="namaitem">
                      <?php foreach ($sukucdg as $ass) { ?>
                          <option value="<?php echo $ass['id_sc'] ?>">
                            <?php echo $ass['supplier'] ?> - <?php echo $ass['merk'] ?> 
                          </option>
                      <?php  } ?>
                    </select><br>
                    <label for="bitem"><h4>Jumlah</h4></label><br>
                    <input type="text" name="qty" size="13"><br>
                    <input type="hidden" name="id_tek" value="1">
                    <br>
                      <button type="submit" class="btn btn-default">Tambah</button>
                    </form>
                  
                </div>
              </div>
            </div>
        </div>

        <div id="service" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                  <form action="tek-tambah-service.php" method="POST">
                    <input type="hidden" name="id_service" value="<?php echo $data['id_service'] ?>">
                    <label for="namaitem"><h4>Jenis Service</h4></label><br>
                    <select class="form-control" name="jns_service" id="namaitem">
                      <?php foreach ($service as $srv) { ?>
                          <option value="<?php echo $srv['id_servis'] ?>">
                            <?php echo $srv['nama_servis'] ?>
                          </option>
                      <?php  } ?>
                    </select>
                    <input type="hidden" name="id_tek" value="1">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-default">Tambah</button></a>
                  </form>
                  
                </div>
              </div>
            </div>
        </div>

