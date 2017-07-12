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
              </h4>
              <div class="row">
                <div class="col-md-12">
                  <i>"<?php echo $data['keterangan'] ?>"</i>
                </div>
              </div>
          <h4>Jenis Service</h4>
          <table class="table table-bordered" border-color="black">
            <tr>
              <th width="200">Jenis Service</th>
            </tr>
            <?php foreach ($list as $list) { ?>
              <tr>
                <td><?php echo $list['nama_servis'] ?></td>
               
              </tr>
            <?php } ?>
            
            
          </table>
          <h4>Pemakaian Suku Cadang</h4>
          <table class="table table-bordered" border-color="black">
            <tr>
              <th width="200">Nama Suku Cadang</th>
              <th width="50">qty</th>
            </tr>
            <?php foreach ($sc as $sc) { ?>
              <tr>
                <td><?php echo $sc['merk'] ?></td>
                <td><?php echo $sc['qty'] ?></td>
               
              </tr>
            <?php } ?>

          </table>
          <div><br>
          </div>