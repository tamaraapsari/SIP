<div id="isi" class="col-md-10">
          <h3>Kelola User</h3>
          <br>
          <h3>Olah data Admin</h3>
            <table border="1" class="table">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                	foreach ($admin as $adm) { ?>
                		<tr>
                		  <td><?php echo $adm['username'] ?></td>
		                  <td><?php echo $adm['nama'] ?></td>
		                  <td width="13%">
		                    <a href="ubah-admin.php?id=<?php echo $adm['id_adm'] ?>"><button type="button" class="btn btn-warning">Edit</button></a>
		                    <a href="lihat-admin.php?id=<?php echo $adm['id_adm'] ?>"><button type="buton" class="btn btn-info">Detail</button></a>
		                  </td>
		                </tr>
                <?php } ?>
              </tbody>
            </table><br>
          <h3>Olah data Operator</h3>
          <div id="tbh">
          <h4>Tambah Data <a href="tambah-operator.php"><button type="button"><span class="glyphicon glyphicon-plus"></span></button></a></h4>
          </div>
            <table border="1" class="table">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($operator as $op) { ?>
                    <tr>
                      <td><?php echo $op['username'] ?></td>
                      <td><?php echo $op['nama'] ?></td>
                      <td width="24%">
                        <a href="ubah-operator.php?id=<?php echo $op['id_op'] ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="lihat-operator.php?id=<?php echo $op['id_op'] ?>"><button type="buton" class="btn btn-info">Detail</button></a>
                        <a href="del-operator.php?id=<?php echo $op['id_op'] ?>"><button type="buton" class="btn btn-danger">Hapus</button></a>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table><br>
            <h3>Olah data Teknisi</h3>
            <div id="tbh">
          <h4>Tambah Data <a href="tambah-teknisi.php"><button type="button"><span class="glyphicon glyphicon-plus"></span></button></a></h4>
          </div>
            <table border="1" class="table">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($teknisi as $tek) { ?>
                    <tr>
                      <td><?php echo $tek['username'] ?></td>
                      <td><?php echo $tek['nama'] ?></td>
                      <td width="24%">
                        <a href="ubah-teknisi.php?id=<?php echo $tek['id_tek'] ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="lihat-teknisi.php?id=<?php echo $tek['id_tek'] ?>"><button type="buton" class="btn btn-info">Detail</button></a>
                        <a href="del-teknisi.php?id=<?php echo $tek['id_tek'] ?>"><button type="buton" class="btn btn-danger">Hapus</button></a>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
            <h3>Olah data Kepala Gudang</h3>
            <div id="tbh">
          <h4>Tambah Data <a href="tambah-gudang.php"><button type="button"><span class="glyphicon glyphicon-plus"></span></button></a></h4>
          </div>
            <table border="1" class="table">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($gudang as $gdg) { ?>
                    <tr>
                      <td><?php echo $gdg['username'] ?></td>
                      <td><?php echo $gdg['nama'] ?></td>
                      <td width="24%">
                        <a href="ubah-gudang.php?id=<?php echo $gdg['id_kg'] ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="lihat-gudang.php?id=<?php echo $gdg['id_kg'] ?>"><button type="buton" class="btn btn-info">Detail</button></a>
                        <a href="del-gudang.php?id=<?php echo $gdg['id_kg'] ?>"><button type="buton" class="btn btn-danger">Hapus</button></a>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>