<?php 
   $hapus= $koneksi->query("select*from kontraktor where id_kontraktor='$_GET[id]'");
    // memilih npwp1 untuk dihapus
    $nama_npwp1=mysqli_fetch_array($hapus);
    // nama field npwp1
    $lokasi=$nama_npwp1['npwp'];
    $lokasi1=$nama_npwp1['nib'];
    $lokasi2=$nama_npwp1['iup'];
    $lokasi3=$nama_npwp1['akta'];
    // alamat tempat npwp1
    $hapus_npwp1="../img/npwp/$lokasi";
    $hapus_nib1="../img/nib/$lokasi1";
    $hapus_iup1="../img/iup/$lokasi2";
    $hapus_akta1="../img/akta/$lokasi3";
    // script delete npwp1 dari folder
    unlink($hapus_npwp1);
    unlink($hapus_nib1);
    unlink($hapus_iup1);
    unlink($hapus_akta1);
     $koneksi->query("DELETE FROM kontraktor WHERE id_kontraktor='$_GET[id]'");
 echo"<script>alert('Selamat Data Berhasil di Hapus !!!'); window.location = '?page=page/kontraktor/index'</script>";
?>