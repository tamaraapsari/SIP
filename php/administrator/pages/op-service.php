<div id="isi" class="col-md-10">
          <h3>Kelola Order Servis</h3>
            <h5><a href="op-service-tambah.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Daftarkan Order Servis</a></h5>
            <table class="table table-bordered" border-color="black">
              <tr>
                <th>No</th>
                <th>Plat Nomor</th>
                <th>Nama Pelanggan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
              <?php 
                foreach ($service as $key => $srv) { ?>
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $srv['plat'] ?></td>
                        <td><?php echo $srv['nama_pelanggan'] ?></td>
                        <td>
                            <?php 
                                if ($srv['status'] == 0) {
                                    echo "Belum Ditangani";
                                }elseif ($srv['status'] == 1) {
                                    echo "Sedang Ditangani";
                                }elseif ($srv['status'] == 2) {
                                    echo "Sudah Ditangani";
                                }
                             ?>
                        </td>
                        <td>
                            <?php if ($srv['status'] == 0) { ?>
                                <a href="op-service-batal.php?id=<?php echo $srv['id_service'] ?>">
                                    <button class="btn btn-danger">Batalkan Service</button>
                                </a>
                            <?php }elseif ($srv['status'] == 1) { ?>
                                <a href="op-progress.php?id=<?php echo $srv['id_service'] ?>">
                                    <button class="btn btn-info">Lihat Progress</button>
                                </a>
                            <?php }elseif ($srv['status'] == 2) { ?>
                                <a href="op-pembayaran.php?id=<?php echo $srv['id_service'] ?>">
                                    <button class="btn btn-success">Pembayaran</button>
                                </a>
                            <?php } ?>
                        </td>
                    </tr>
                  
                <?php } ?>
              
            </table>
          </div>