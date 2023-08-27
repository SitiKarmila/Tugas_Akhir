
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Data Pengajuan Saya</h1>
           
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            
            <div class="Responsive">
                <table class="table table-bordered">
                    <thead >
                        <b>
                        <tr style="background-color: lightgray;">
                            <td>No</td>
                            <td>Nama Proyek</td>
                            <td>Kategori Proyek</td>
                            <td>Anggaran</td>
                            <td>Tahun Anggaran</td>
                            <td>Harga Penawaran</td>
                            <td>Proposal</td>
                            <td>Status</td>
                            <td>Tanggal Pengjuan</td>
                        </tr></b>
                    </thead>
                    <tbody>
                        <?php
                  
                    $tampi=$koneksi->query("select * from pengajuanproyek where id_kontraktor='$_SESSION[id]'");
                
                     $no=0;
                     while($dat=mysqli_fetch_array($tampi))
                    {
    
                    $tampil=$koneksi->query("select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.id_proyek='$dat[id_proyek]'");
                
                    
                     $data=mysqli_fetch_array($tampil);
                
             $p=mysqli_num_rows($koneksi->query("select * from pengajuanproyek where id_proyek='$data[id_proyek]'"));

                     $no++; ?>
                        <?php if($data['status']=='Baru'){ echo"<tr style='background-color: #00ffb5;'>"; }else{   echo"<tr style='background-color: #ff5b007d;'>";}?>
                        
                            <td><?= $no;?></td>
                            <td><?= $data['namaproyek'];?></td>
                            <td><?= $data['nama_kategori'];?></td>
                            <td>Rp. <?= number_format($data['dana'],0,",",".");?></td>
                            <td><?= $data['tahunanggaran'];?></td>
                            <td>Rp. <?= number_format($dat['hargapenawaran'],0,",",".");?></td>
                            <td><center><a href="../img/proposal/<?= $dat['proposal']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>
                    
                    <td><?php if($dat['status']=='Baru'){ echo "Sedang Diproses";}else{ echo $dat['status'];} ?></td>
                    <td><?= $dat['tgl_pengajuan'];?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php

    if (isset ($_POST['kirim'])){
        $p=mysqli_num_rows($koneksi->query("select * from pengajuanproyek where id_proyek='$_POST[id_proyek]' and id_kontraktor='$_POST[id_kontraktor]'"));
        if($p >= 1){
            echo"<script>alert('Anda Sudah Pernah mengajukan Proposal sebelumnya !!!'); window.location = '?page=page/proyek&kat=Baru'</script>";
        }else{
        $file_name = $_FILES['proposal']['name'];
        $tmp_name = $_FILES['proposal']['tmp_name'];
        $hargapenawaran=addslashes($_POST['hargapenawaran']);

        $query_simpan =$koneksi->query( "INSERT INTO pengajuanproyek SET 
        id_proyek='$_POST[id_proyek]',
        id_kontraktor='$_POST[id_kontraktor]',
        lamapekerjaan='$_POST[lamapekerjaan]',
        hargapenawaran='$hargapenawaran',
        status='Baru',
        tgl_pengajuan='$tgl_sekarang',
        proposal='$file_name'
        ");
        move_uploaded_file($tmp_name, "img/proposal/".$file_name);

    if ($query_simpan) {
      echo"<script>alert('penggajuan anda berhasil dikirim !!!'); window.location = '?page=page/pengajuansaya'</script>";
      }else{
      echo"<script>alert('pengajuan anda gagal, silahkan ajukan kembali!!!'); window.location = ''</script>";
    }
}
}?>