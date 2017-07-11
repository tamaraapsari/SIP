<h1>Edit Berita</h1>

<form action="aksi_ubah_berita.php?id=<?php echo $data_berita['id_berita']?>" method = "POST">
<label for = "judul">JUDUL</label><br>
<input type="text" name="judul" value="<?php echo $data_berita['judul']?>" /><br>
<label for ="isi">ISI</label><br>
<textarea name="isi"><?php echo $data_berita['isi']?></textarea><br>
<select name="kategori">
<?php foreach ($data_kategori as $kat): ?>
<option value="<?php echo $kat['id_kategori'] ?>" 
<?php 
if($kat['id_kategori']==$data_berita['id_kategori']){
  echo "selected";
 }
 ?>
><?php echo $kat['nama_kategori'] ?></option>
<?php endforeach ?>
</select><br><br>

<input type="submit" name="submit" value="submit">
</form>