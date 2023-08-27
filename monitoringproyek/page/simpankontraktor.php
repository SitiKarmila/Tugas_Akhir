
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

        $query_simpan =$koneksi->query( "INSERT INTO kontraktor SET 
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
        ");
       $p= move_uploaded_file($tmp_logo, "img/logo/".$file_logo);
        $o= move_uploaded_file($tmp_dokumen, "img/dokumen/".$file_dokumen);

    if ($query_simpan) {
      echo"<script>alert('Registerasi Sukses !'); window.location = '?page=page/home'</script>";
      }else{
      echo"<script>alert('Regesterasi Gagal !!!'); window.location = '?page=page/home'</script>";
    }?>