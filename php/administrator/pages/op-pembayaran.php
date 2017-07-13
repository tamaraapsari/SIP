<div id="isi" class="col-md-10">
          <h3>Pembayaran</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              Nama Pelanggan
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
          <div class="col-md-12">
          <table width="100%" border="3" cellspacing="0" cellpadding="10" border-color="white">
            <thead>
              <tr>
                <td class="text-center" width="4%">No</td>
                <td class="text-center">Jenis</td>
                <td class="text-center">Satuan</td>
                <td class="text-center" width="8%">Qty</td>
                <td class="text-center" width="24%">Jumlah</td>
              </tr>
            </thead>
            <tbody>
              <?php
                  $service = 0;  
                  foreach ($srv as $key => $srv) { 
              ?>
                  <tr>
                    <td class="text-center"><?php echo $key+1 ?></td>
                    <td>&nbsp;<?php echo $srv['nama_servis'] ?></td>
                    <td class="text-right"><?php echo $srv['harga'] ?></td>
                    <td class="text-center">1</td>
                    <td class="text-right"><?php echo $srv['harga'] ?></td>
                  </tr>
              <?php 
                  $service += $srv['harga']; 

                  }; 

                ?>

                <?php
                  $suku_cadang = 0;  
                  foreach ($sc as $key => $sc) { 
              ?>
                  <tr>
                    <td class="text-center"><?php echo $key+$hitung+1 ?></td>
                    <td>&nbsp;<?php echo $sc['merk'] ?></td>
                    <td class="text-right"><?php echo $sc['harga'] ?></td>
                    <td class="text-center"><?php echo $sc['qty'] ?></td>
                    <td class="text-right"><?php echo ($sc['harga'] * $sc['qty']); ?></td>
                  </tr>
              <?php 
                  $suku_cadang += $sc['harga'] * $sc['qty']; 

                  }; 

                ?>
              <?php 
                $total = $service + $suku_cadang;
               ?>
              <form id="form1" name="form1">
              <tr>
                <td colspan="4" class="text-center">J U M L A H</td>
                <td>
                  <input type="text" id="harga" name="harga" size="26" value="<?php echo $total ?>" disabled class="text-right">
                </td>
              </tr>
              <tr>
                <td colspan="4" class="text-center">PEMBAYARAN</td>
                <td>
                  <input type="text" id="bayar" name="bayar" size="26" onkeyup="hitung()" autofocus class="text-right">
                </td>
              </tr>
              <tr>
                <td colspan="4" class="text-center">KEMBALIAN</td>
                <td>
                  <input type="text" id="kembali" name="kembali" size="26" disabled class="text-right"      >
                </td>
              </tr>
              </form>
            </tbody>
          </table><br>
    </div>
    <form action="op-bayar.php" method="POST">
      <input type="hidden" name="id_service" value="<?php echo $_GET['id'] ?>">
      <input type="hidden" name="id_op" value="1">
      <input type="hidden" name="status" value="1">
      <input type="hidden" name="tot_bayar" value="<?php echo $total ?>">
      <div class="row">
        <div class="col-md-6">
          <h4>Pilih Metode Pembayaran</h4>
          <select name="method" class="form-control">
            <option value="1">Cash</option>
            <option value="2">Payment Gateway</option>
          </select>
        </div>
        <div class="col-md-6">
          <br><br>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-info btn-block">Bayar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div>
      </div>
      <br><br><br>