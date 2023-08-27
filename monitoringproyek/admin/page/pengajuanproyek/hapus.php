<?php 
   $hapus= $koneksi->query("select*from pengajuanproyek where id_pengajuanproyek='$_GET[id]'");
    // memilih gambar1 untuk dihapus
    $nama_gambar1=mysqli_fetch_array($hapus);
    // nama field gambar1
    $lokasi=$nama_gambar1['proposal'];
    // alamat tempat gambar1
    $hapus_gambar1="../img/proposal/$lokasi";
    unlink($hapus_gambar1);
     $koneksi->query("DELETE FROM pengajuanproyek WHERE id_pengajuanproyek='$_GET[id]'");
 echo"<script>alert('Selamat Data Berhasil di Hapus !!!'); window.location = '?page=page/pengajuanproyek/index&status=<?= $_GET['status']?>'</script>";
?>