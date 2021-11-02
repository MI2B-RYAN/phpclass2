<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->
<?php 
   $hapus=$mysqli->query("select*from mahasiswa where id='$_GET[id]'");
    // memilih gambar untuk dihapus
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['gambar'];
    // alamat tempat gambar
    $hapus_gambar="images/$lokasi";
    // script delete gambar dari folder
    unlink($hapus_gambar);
    $mysqli->query("DELETE FROM mahasiswa WHERE id='$_GET[id]'");
    header('location:index.php');
?>