   <?php

    if (isset ($_POST['simpankeritikan'])){
        $kritikan=addslashes($_POST['keritikan']);
        $nama=addslashes($_POST['nama']);
        $subjek=addslashes($_POST['subjek']);
        $email=addslashes($_POST['email']);

        $query_simpan =$koneksi->query( "INSERT INTO keritikandansaran SET 
        nama='$nama',
        email='$email',
        keritikandansaran='$kritikan',
        tgl='$tgl_sekarang',
        subjek='$subjek',
        jam='$jam_sekarang',
        status='Baru'
        ");
      
    if ($query_simpan) {
      echo"<script>alert('Terimakasih atas Keritikan dan Saran Anda !!!'); window.location = '?page=page/kontakkami'</script>";
      }else{
      echo"<script>alert('Keritikan dan Saran Anda  Gagal di Kirim !!!'); window.location = '?page=page/kontakkami'</script>";
    }}?>