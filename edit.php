<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->

<?php 
  $edit=$mysqli->query("select*from mahasiswa where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_mahasiwa" action="index.php?page=update" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">NIM</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="nim" placeholder="Nomor Indux Mahasiswa" name="nim" required value="<?php echo $e['nim'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required value="<?php echo $e['nama'];?>">
  </div>

  <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <select name="jurusan" class="form-control" id="jurusan" name="jurusan" required>
    	<option value="<?php echo $e['jurusan'];?>"><?php echo $e['jurusan'];?></option>
    	<option value="Manajemen Informatika">Manajemen Informatika</option>
    	<option value="Tehnik Informatika">Tehnik Informatika</option>
    	<option value="Tehnik Komputer">Tehnik Komputer</option>
    	<option value="Sistem Informasi">Sistem Informasi</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required><?php echo $e['alamat'];?></textarea>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar">
    <span><?php echo $e['gambar'];?></span>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>