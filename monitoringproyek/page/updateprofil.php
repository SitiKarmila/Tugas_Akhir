
		<?php

 $file_logo= $_FILES['logo']['name'];
        $tmp_logo = $_FILES['logo']['tmp_name'];
        $file_dokumen= $_FILES['dokumen']['name'];
        $tmp_dokumen = $_FILES['dokumen']['tmp_name'];  
        $namadirektur=addslashes($_POST['namadirektur']);
        $namapt=addslashes($_POST['namapt']);
        $tgl_berdiri=addslashes($_POST['tgl_berdiri']);
        $alamat=addslashes($_POST['alamat']);

$nohp = $_POST['nohp'];
        $username=addslashes($_POST['username']);
        $password=addslashes($_POST['password']);
  if (empty($file_logo) && empty($file_dokumen)){
    $koneksi->query("UPDATE kontraktor SET 
                    namapt='$namapt',
        namadirektur='$namadirektur',
        tgl_berdiri='$tgl_berdiri',
        alamat='$alamat',
        username='$username',
        nohp='$nohp',
        tgl_regesterasi='$tgl_sekarang',
        status='Aktif',
        password='$password'
                    WHERE id_kontraktor = '$_POST[id]'");
}elseif(empty($file_logo) && !empty($file_dokumen)){
	    $hapus= $koneksi->query("select * from kontraktor where id_kontraktor='$_POST[id]'");
    $tanggal_file_logo=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_file_logo['dokumen'];
    $hapus_file_dokumen="img/dokumen/$lokasi";
    unlink($hapus_file_dokumen);
    move_uploaded_file($_FILES['dokumen']['tmp_name'],'img/dokumen/'.$file_dokumen);
    $koneksi->query("UPDATE kontraktor SET 
                    namapt='$namapt',
        namadirektur='$namadirektur',
        dokumen='$file_dokumen',
        tgl_berdiri='$tgl_berdiri',
        alamat='$alamat',
        username='$username',
        nohp='$nohp',
        tgl_regesterasi='$tgl_sekarang',
        status='Aktif',
        password='$password'
                    WHERE id_kontraktor = '$_POST[id]'");
    }elseif(!empty($file_logo) && empty($file_dokumen)){


    $hapus= $koneksi->query("select * from kontraktor where id_kontraktor='$_POST[id]'");
    $tanggal_file_logo=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_file_logo['logo'];
    $hapus_file_logo="img/logo/$lokasi";
    unlink($hapus_file_logo);
    move_uploaded_file($_FILES['logo']['tmp_name'],'img/logo/'.$file_logo);
    $koneksi->query("UPDATE kontraktor SET 
    	namapt='$namapt',
        namadirektur='$namadirektur',
        logo='$file_logo',
        tgl_berdiri='$tgl_berdiri',
        alamat='$alamat',
        username='$username',
        nohp='$nohp',
        tgl_regesterasi='$tgl_sekarang',
        status='Aktif',
        password='$password'
                    WHERE id_kontraktor= '$_POST[id]'");
  }elseif(!empty($file_logo) && !empty($file_dokumen)){


      $hapus= $koneksi->query("select * from kontraktor where id_kontraktor='$_POST[id]'");
    $tanggal_file_logo=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_file_logo['logo'];
    $hapus_file_logo="img/logo/$lokasi";
    unlink($hapus_file_logo);
    move_uploaded_file($_FILES['logo']['tmp_name'],'img/logo/'.$file_logo);
    $lokasi1=$tanggal_file_logo['dokumen'];
    $hapus_file_dokumen1="img/dokumen/$lokasi1";
    unlink($hapus_file_dokumen1);
    move_uploaded_file($_FILES['dokumen']['tmp_name'],'img/dokumen/'.$file_dokumen);
    $koneksi->query("UPDATE kontraktor SET 
    	 namapt='$namapt',
        namadirektur='$namadirektur',
        logo='$file_logo',
        dokumen='$file_dokumen',
        tgl_berdiri='$tgl_berdiri',
        alamat='$alamat',
        username='$username',
        nohp='$nohp',
        tgl_regesterasi='$tgl_sekarang',
        status='Aktif',
        password='$password'
                    WHERE id_kontraktor= '$_POST[id]'");
  }
echo"<script>alert('Data Berhasil di Ubah!!!'); window.location = '?page=page/home'</script>";
    



 ?>