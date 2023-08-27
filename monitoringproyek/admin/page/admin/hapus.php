<?php 
   $hapus= $koneksi->query("select*from admin where id_admin='$_GET[id]'");
    // memilih gambar1 untuk dihapus
    $nama_gambar1=mysqli_fetch_array($hapus);
    // nama field gambar1
    $lokasi=$nama_gambar1['gambar'];
    // alamat tempat gambar1
    $hapus_gambar1="../img/admin/$lokasi";
    // script delete gambar1 dari folder
    unlink($hapus_gambar1);
     $koneksi->query("DELETE FROM admin WHERE id_admin='$_GET[id]'");
 echo"<script>alert('Selamat Data Admin Berhasil di Hapus !!!'); window.location = '?page=page/admin/index'</script>";
?>