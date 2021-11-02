<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->
<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];
$mysqli->query("INSERT INTO mahasiswa(nim,nama,jurusan,alamat,gambar) VALUES('$nim','$nama','$jurusan','$alamat','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
header('location:index.php');
?>