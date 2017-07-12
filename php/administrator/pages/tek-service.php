<div id="isi" class="col-md-10">
          <h3>Olah Servis Kendaraan</h3>
          <table class="table table-bordered" border-color="black">
              <tr>
                <th>No</th>
                <th>Plat Nomor</th>
                <th>Nama Pelanggan</th>
                <th width="9%">Aksi</th>
              </tr>
              <?php 
                  foreach ($service as $key => $srv) { ?>
                    <tr>
                      <td><?php echo $key+1 ?></td>
                      <td><?php echo $srv['plat'] ?></td>
                      <td><?php echo $srv['nama_pelanggan'] ?></td>
                      <td>
                        <?php if ($srv['status'] == 0) { ?>
                            <a href="tek-ambil.php?id=<?php echo $srv['id_service'] ?>">
                              <button class="btn btn-warning">Tangani Service</button>
                            </a>
                        <?php  }elseif ($srv['status'] == 1) { ?>
                            <a href="tek-detail.php?id=<?php echo $srv['id_service'] ?>">
                              <button class="btn btn-info">Detail Service</button>
                            </a>
                        <?php  }elseif ($srv['status'] == 2) { ?>
                          <button class="btn btn-success">Service Selesai</button>
                        <?php } ?>
                      </td>
                    </tr>
              <?php } ?>
              
            </table>
          </div>
        </div>