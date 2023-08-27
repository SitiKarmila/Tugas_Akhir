<?php 
   
     $koneksi->query("DELETE FROM kategoriproyek WHERE id_kategori='$_GET[id]'");
 echo"<script>alert('Data Berhasil di Hapus !!!'); window.location = '?page=page/kategori/index'</script>";
?>