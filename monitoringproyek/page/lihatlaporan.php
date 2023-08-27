
  <?php $tampil=$koneksi->query("select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.id_proyek='$_GET[id_proyek]'");
                
                     $no=0;
                     $datap=mysqli_fetch_array($tampil);?><div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Laporan Proyek <?= $datap['namaproyek'];?></h1>
           
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
                            <td>Laporan ke</td>
                            <td>Persentase</td>
                            <td>Anggaran yang dikeluarkan</td>
                            <td>Dokumen Laporan</td>
                            <td>TGL Laporan</td>
                            <td>Status Laporan</td>
                            <td>Action</td>
                        </tr></b>
                    </thead>
                    <tbody>

                        <?php
                  
                    $tampi=$koneksi->query("select * from laporanproyek where id_kontraktor='$_SESSION[id]' and id_proyek='$_GET[id_proyek]' and id_pengajuanproyek='$_GET[id_pengajuanproyek]'");
                
                     $no=0;
                     while($dat=mysqli_fetch_array($tampi))
                    {
                        
    $tampilah=$koneksi->query("select * from pengajuanproyek where id_pengajuanproyek='$_GET[id_pengajuanproyek]'");
$datata=mysqli_fetch_array($tampilah);
                    $tampil=$koneksi->query("select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.id_proyek='$dat[id_proyek]'");
                
                     $no=0;
                     $data=mysqli_fetch_array($tampil);
                     $jmlang+=$dat['anggarankeluar'];
                     $jmldan=$datata['hargapenawaran'];
                
             $p=mysqli_num_rows($koneksi->query("select * from pengajuanproyek where id_proyek='$data[id_proyek]'"));

                     $no++; ?>
                       <?php  $pa=mysqli_num_rows($koneksi->query("select * from laporanproyek where id_proyek='$data[id_proyek]' and id_kontraktor='$dat[id_kontraktor]' and id_pengajuanproyek='$dat[id_pengajuanproyek]'"));?>
                        <?php if($data['status']=='Baru'){ echo"<tr style='background-color: #00ffb5;'>"; }else{   echo"<tr style='background-color: #ff5b007d;'>";}?>
                        
                            <td><?= $no;?></td>
                            <td><?= $data['namaproyek'];?></td>
                            <td><?= $dat['laporan_ke'];?></td>
                            <td><?= $dat['persentase'];?></td>
                            <td>Rp. <?= number_format($dat['anggarankeluar'],0,",",".");?></td>
                            <td><center><a href="img/laporan/<?= $dat['dokumen']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>
                    <td><?= $dat['tgl_laporan'];?></td>
                    <td><?= $dat['status'];?></td>

                    <td><?php if($dat['status']=='Ditolak'){?>
<center>
   
    <a href="" target="_BLANK" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#laporan<?= $data['id_proyek'];?>"  /><i class="fa fa-book"></i></a>
</center>
<div class="modal modal-video fade" id="laporan<?= $data['id_proyek'];?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Laporan</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
 
<div class="modal-body">
                    <!-- 169 aspect ratio -->
                  
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_kontraktor" value="<?= $dat['id_kontraktor'];?>">
                            <input type="hidden" name="id_proyek" value="<?= $data['id_proyek'];?>">
                            <input type="hidden" name="id_pengajuanproyek" value="<?= $dat['id_pengajuanproyek'];?>">
                            <input type="hidden" name="id_laporan" value="<?= $dat['id_laporan'];?>">
                            <table width="100%" class="">
                                <tr>
                                    <td width="5%"><P>&nbsp;</P></td>
                                    <td width="15%">Laporan Ke</td>
                                    <td width="65%"> <input type="text" class="form-control" name="laporan_ke" value="<?= $dat['laporan_ke'];?>" Readonly ></td>
                                    <td width="5%"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Persentase</td>
                                    <td> <input type="text" class="form-control" name="persentase" value="<?= $dat['persentase'];?>" Readonly ></td>

                                    <td width="5%"></td>
                                </tr> <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Anggaran yang dikeluarkan</td>
                                    <td> <input type="text" class="form-control" name="anggarankeluar" value="<?= $dat['anggarankeluar'];?>"></td>

                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Dokumen Laporan</td>
                                    <td> <input type="file" class="form-control" name="dokumen"  ></td>

                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>  <input name="kirimlaporan" type="submit" class="btn btn-info btn-flat btn-pri btn-md" value="Kirim Laporan"></td>
                                    <td></td>
                                    <td width="5%"></td>
                                </tr>
                            </table>
                          
                                  
                        </form>
                </div>

            </div>
        </div>
    </div>

                        <?php }else{ ?><?php } ?></td>
                        </tr>

                    <?php } ?>
                    <tr>
                        <td colspan="4">Total Anggaran Keluar</td>
                        <td >Rp. <?= number_format($jmlang,0,",",".");?></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                    </tr>
                    <tr>
                        <td colspan="4">Anggaran Proyek</td>
                        <td >Rp. <?= number_format($jmldan,0,",",".");?></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                    </tr>
                    <tr>
                        <td colspan="4">Sisa Anggaran Proyek</td>
                        <td >Rp. <?= number_format($jmldan-$jmlang,0,",",".");?></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                    </tr>
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
<?php

    if (isset ($_POST['kirimlaporan'])){
       
        $file_name = $_FILES['dokumen']['name'];
        $tmp_name = $_FILES['dokumen']['tmp_name'];
        $laporan_ke=addslashes($_POST['laporan_ke']);
        $persentase=addslashes($_POST['persentase']);
        $id_pengajuanproyek=addslashes($_POST['id_pengajuanproyek']);
        $id_proyek=addslashes($_POST['id_proyek']);
        $id_kontraktor=addslashes($_POST['id_kontraktor']);
if (empty($file_name)){
        $query_simpan =$koneksi->query( "UPDATE laporanproyek SET 
        id_proyek='$id_proyek',
        id_kontraktor='$id_kontraktor',
        id_pengajuanproyek='$id_pengajuanproyek',
        laporan_ke='$laporan_ke',
        persentase='$persentase',
        anggarankeluar='$_POST[anggarankeluar]',
        status='Baru',
        tgl_laporan='$tgl_sekarang' where id_laporan='$_POST[id_laporan]'
        ");
    }else{
        $hapus= $koneksi->query("select * from laporanproyek where id_laporan='$_POST[id_laporan]'");
    $tanggal_gambar=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_gambar['dokumen'];
    $hapus_gambar="img/laporan/$lokasi";
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['dokumen']['tmp_name'],'img/laporan/'.$file_name);
    $query_simpan =$koneksi->query( "UPDATE laporanproyek SET 
        id_proyek='$id_proyek',
        id_kontraktor='$id_kontraktor',
        id_pengajuanproyek='$id_pengajuanproyek',
        laporan_ke='$laporan_ke',
        persentase='$persentase',
        anggarankeluar='$_POST[anggarankeluar]',
        status='Baru',
        tgl_laporan='$tgl_sekarang',
        dokumen='$file_name' where id_laporan='$_POST[id_laporan]'
        ");
    }

    if ($query_simpan) {
      echo"<script>alert('Laporan berhasil di edit !!!'); window.location = '?page=page/lihatlaporan&id_proyek=$id_proyek&id_kontraktor=$id_kontraktor&id_pengajuanproyek=$id_pengajuanproyek'</script>";
      }else{
      echo"<script>alert('pengajuan anda gagal, silahkan ajukan kembali!!!'); window.location = ''</script>";
    }

}?>