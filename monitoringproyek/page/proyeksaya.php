
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Data Proyek Saya</h1>
           
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
                            <td>Lokasi</td>
                            <td>Status</td>
                            <td>Tanggal Pengjuan</td>
                            <td>Lihat / Buat Laporan</td>
                        </tr></b>
                    </thead>
                    <tbody>

                        <?php
                  
                    $tampi=$koneksi->query("select * from pengajuanproyek where id_kontraktor='$_SESSION[id]' and status='Diterima' or status='Selesai'");
                
                     $no=0;
                     while($dat=mysqli_fetch_array($tampi))
                    {
    
                    $tampil=$koneksi->query("select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.id_proyek='$dat[id_proyek]'");
                
                     $no=0;
                     $data=mysqli_fetch_array($tampil);
                
             $p=mysqli_num_rows($koneksi->query("select * from pengajuanproyek where id_proyek='$data[id_proyek]'"));

                     $no++; ?>
                       <?php  $pa=mysqli_num_rows($koneksi->query("select * from laporanproyek where id_proyek='$data[id_proyek]' and id_kontraktor='$dat[id_kontraktor]' and id_pengajuanproyek='$dat[id_pengajuanproyek]'"));?>
                        <?php if($data['status']=='Baru'){ echo"<tr style='background-color: #00ffb5;'>"; }else{   echo"<tr style='background-color: #ff5b007d;'>";}?>
                        
                            <td><?= $no;?></td>
                            <td><?= $data['namaproyek'];?></td>
                            <td><?= $data['nama_kategori'];?></td>
                            <td>Rp. <?= number_format($data['dana'],0,",",".");?></td>
                            <td><?= $data['tahunanggaran'];?></td>
                            <td>Rp. <?= number_format($dat['hargapenawaran'],0,",",".");?></td>
                            <td><center><a href="" target="_BLANK" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#maps<?= $data['id_proyek'];?>"  /><i class="fa fa-map-marker"></i></a></center>
<div class="modal modal-video fade" id="maps<?= $data['id_proyek'];?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><?= $data['namaproyek'];?></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
 

   
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7IZt-36CgqSGDFK8pChUdQXFyKIhpMBY&sensor=true" type="text/javascript"></script>


<script>    
    var marker;
    function initialize() {  
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);      
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database
        <?php
            $nama    =$data['namaproyek'];
                $lat    =$data['latitude'];
                $lon    =$data['longitude'];
                echo ("addMarker($lat, $lon, '$nama');\n");                        
              
        ?> 
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="map-canvas" class="col-sm-12" style="height:380px;"></div>

            </div>
        </div>
    </div>
                            </td>
                    
                    <td><?php if($dat['status']=='Baru'){ echo "Sedang Diproses";}else{ echo $dat['status'];} ?></td>
                    <td><?= $dat['tgl_pengajuan'];?></td>

                    <td><?php if($dat['status']=='Diterima'){?>
<center><a href="?page=page/lihatlaporan&id_proyek=<?= $data['id_proyek'];?>&id_kontraktor=<?= $dat['id_kontraktor'];?>&id_pengajuanproyek=<?= $dat['id_pengajuanproyek'];?>"  class="btn btn-primary"  /><i class="fa fa-search"></i></a>
    <?php if($dat['lamapekerjaan']== $pa){}else{?>
    <a href="" target="_BLANK" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#laporan<?= $data['id_proyek'];?>"  /><i class="fa fa-book"></i></a>
<?php }?></center>
<div class="modal modal-video fade" id="laporan<?= $data['id_proyek'];?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Buat Laporan</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
 
<div class="modal-body">
                    <!-- 169 aspect ratio -->
                  
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_kontraktor" value="<?= $dat['id_kontraktor'];?>">
                            <input type="hidden" name="id_proyek" value="<?= $data['id_proyek'];?>">
                            <input type="hidden" name="id_pengajuanproyek" value="<?= $dat['id_pengajuanproyek'];?>">
                            <table width="100%" class="">
                                <tr>
                                    <td width="5%"><P>&nbsp;</P></td>
                                    <td width="15%">Laporan Ke</td>
                                    <td width="65%"> <input type="text" class="form-control" name="laporan_ke" value="<?= $pa+1?>" Readonly ></td>
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
                                    <td> <input type="text" class="form-control" name="persentase" value="<?= number_format(($pa+1)/$dat['lamapekerjaan']*100);?>%" Readonly ></td>

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
                                    <td>Anggaran yang dikeluarkan</td>
                                    <td> <input type="text" class="form-control" name="anggarankeluar" required=""></td>

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

                        <?php }else{?><?php } ?></td>
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
<?php

    if (isset ($_POST['kirimlaporan'])){
       
        $file_name = $_FILES['dokumen']['name'];
        $tmp_name = $_FILES['dokumen']['tmp_name'];
        $laporan_ke=addslashes($_POST['laporan_ke']);
        $persentase=addslashes($_POST['persentase']);
        $id_pengajuanproyek=addslashes($_POST['id_pengajuanproyek']);
        $id_proyek=addslashes($_POST['id_proyek']);
        $id_kontraktor=addslashes($_POST['id_kontraktor']);

        $query_simpan =$koneksi->query( "INSERT INTO laporanproyek SET 
        id_proyek='$id_proyek',
        id_kontraktor='$id_kontraktor',
        anggarankeluar='$_POST[anggarankeluar]',
        id_pengajuanproyek='$id_pengajuanproyek',
        laporan_ke='$laporan_ke',
        persentase='$persentase',
        status='Baru',
        tgl_laporan='$tgl_sekarang',
        dokumen='$file_name'
        ");
        move_uploaded_file($tmp_name, "img/laporan/".$file_name);

    if ($query_simpan) {
      echo"<script>alert('Laporan anda berhasil dikirim !!!'); window.location = '?page=page/proyeksaya'</script>";
      }else{
      echo"<script>alert('Laporan anda gagal, silahkan ajukan kembali!!!'); window.location = ''</script>";
    }

}?>