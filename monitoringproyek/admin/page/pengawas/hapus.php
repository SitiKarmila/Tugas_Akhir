<?php 
   $hapus= $koneksi->query("select*from pengawas where id_pengawas='$_GET[id]'");
    // memilih gambar1 untuk dihapus
    $nama_gambar1=mysqli_fetch_array($hapus);
    // nama field gambar1
    $lokasi=$nama_gambar1['foto'];
    // alamat tempat gambar1
    $hapus_gambar1="../img/pengawas/$lokasi";
    // script delete gambar1 dari folder
    unlink($hapus_gambar1);
     $koneksi->query("DELETE FROM pengawas WHERE id_pengawas='$_GET[id]'");
 echo"<script>alert(' Selamat Data Berhasil di Hapus !!!'); window.location = '?page=page/pengawas/index'</script>";
?>