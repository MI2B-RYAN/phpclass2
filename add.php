

<form name="form_mahasiwa" action="index.php?page=create" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">NIM</label>
    <input type="text" class="form-control" id="nim" placeholder="Nomor Indux Mahasiswa" name="nim" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
  </div>

  <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <select name="jurusan" class="form-control" id="jurusan" name="jurusan" required>
    	<option value="">None</option>
    	<option value="Manajemen Informatika">Manajemen Informatika</option>
    	<option value="Tehnik Informatika">Tehnik Informatika</option>
    	<option value="Tehnik Komputer">Tehnik Komputer</option>
    	<option value="Sistem Informasi">Sistem Informasi</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required></textarea>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" required>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>