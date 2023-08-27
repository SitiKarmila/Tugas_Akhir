<?php 
   $hapus= $koneksi->query("select*from spj where id_spj='$_GET[id]'");
    // memilih gambar1 untuk dihapus
    $nama_gambar1=mysqli_fetch_array($hapus);
    // nama field gambar1
    $lokasi=$nama_gambar1['spj'];
    // alamat tempat gambar1
    $hapus_gambar1="../img/spj/$lokasi";
    // script delete gambar1 dari folder
    unlink($hapus_gambar1);
     $koneksi->query("DELETE FROM spj WHERE id_spj='$_GET[id]'");
 echo"<script>alert('Selamat Data SPJ Berhasil di Hapus !!!'); window.location = '?page=page/spj/index'</script>";
?>