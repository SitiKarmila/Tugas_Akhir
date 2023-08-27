<?php 
     $koneksi->query("DELETE FROM keritikandansaran WHERE id_keritikan='$_GET[id]'");
 echo"<script>alert('Data Berhasil di Hapus !!!'); window.location = '?page=page/keritikandansaran/index'</script>";
?>