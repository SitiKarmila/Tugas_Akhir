<?php 
   $hapus= $koneksi->query("select*from proyek where id_proyek='$_GET[id]'");
    // memilih gambar1 untuk dihapus
    $nama_gambar1=mysqli_fetch_array($hapus);
    // nama field gambar1
    $lokasi=$nama_gambar1['foto'];
    $lokasi1=$nama_gambar1['rab'];
    // alamat tempat gambar1
    $hapus_gambar1="../img/proyek/$lokasi";
    $hapus_gambar2="../img/proyek/$lokasi1";
    // script delete gambar1 dari folder
    unlink($hapus_gambar1);
    unlink($hapus_gambar2);
     $koneksi->query("DELETE FROM proyek WHERE id_proyek='$_GET[id]'");
 echo"<script>alert('Selamat Data Berhasil di Hapus !!!'); window.location = '?page=page/proyek/index'</script>";
?>