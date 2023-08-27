<?php 
   $hapus= $koneksi->query("select*from laporanproyek where id_laporan='$_GET[id]'");
    // memilih gambar1 untuk dihapus
    $nama_gambar1=mysqli_fetch_array($hapus);
    // nama field gambar1
    $lokasi=$nama_gambar1['dokumen'];
    // alamat tempat gambar1
    $hapus_gambar1="../img/dokumen/$lokasi";
    unlink($hapus_gambar1);
     $koneksi->query("DELETE FROM laporanproyek WHERE id_laporan='$_GET[id]'");
 echo"<script>alert('Selmat Data Berhasil di Hapus !!!'); window.location = '?page=page/laporanproyek/index'</script>";
?>