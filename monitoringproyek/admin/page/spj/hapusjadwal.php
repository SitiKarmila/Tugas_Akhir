<?php 
  
     $koneksi->query("DELETE FROM jadwal WHERE id_jadwal='$_GET[id]'");
 echo"<script>alert(' Selamat Data Jadwal Berhasil di Hapus !!!'); window.location = '?page=page/home'</script>";
?>