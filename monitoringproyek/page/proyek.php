
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Data Proyek </h1>
           
        </div>
    </div>

 <center> DATA PROYEK </center>  
  <div class="container-xxl py-5">
        <div class="container">
            
            <div class="Responsive">
 <form action="" method="POST" enctype="multipart/form-data">
     <table>
         <tr>
             <td width="200px">

<select type='text' name='cek' class="form-controll"  style="width: 200px; height:30px;"onchange="this.form.submit();" required="">
                <?php if(isset($_POST['cek'])){?>
                    <option value="<?= $_POST['cek']?>"><?= $_POST['cek']?></option>
                     <?php }elseif($_POST['cek']==''){?>
                        
                <?php }else{?>
                    
              <?php }?>
              <option value="">Pilih Berdasarkan</option>
              <option value="Status">Status</option>
              <option value="Tahun">Tahun</option>
          
          
              
        

          </select>

              </td>
             <td>
                <?php if($_POST['cek']=='Tahun'){?>

                <select type='text' name='tahun' class="form-controll"  style="width: 200px; height:30px;" onchange="this.form.submit();">
                <?php if(isset($_POST['tahun'])){?>
                    <option value="<?= $_POST['tahun']?>"><?= $_POST['tahun']?></option>
                <?php }else{?>
                    
              
          <?php } ?>
          <option value="">Pilih Tahun</option>

        <?php  $date1=date('Y');
          $date=date('Y',strtotime('-5 year'));
          for($i=$date;$i<=$date1;$i++)
            echo"<option value='$i'>$i</option>";

         }elseif($_POST['cek']=='Status'){ ?>
          
              <select type='text' name='status' class="form-controll"  style="width: 200px; height:30px;" onchange="this.form.submit();">
                <?php if(isset($_POST['status'])){?>
                    <option value="<?= $_POST['status']?>"><?= $_POST['status']?></option>
                <?php }else{?>
              
          <?php }?>
          <option value="Semua">Semua</option>
              <option value="Baru">Baru</option>
                                            <option value="Sedang Proses">Sedang Proses</option>
                                            <option value="Finish">Finish</option>
                
           </option>

          </select>
      <?php }else{}?>
        

          </select></td>
         </tr>
     </table>
    
 </form><br>

   
                <table class="table table-bordered">
                    <thead >
                        <b>
                        <tr style="background-color: lightgray;">
                            <td>No</td>
                            <td>Nama Proyek</td>
                            <td>Nama Kontraktor</td>
                            <td>Kategori Proyek</td>
                            <td>Anggaran</td>
                            <td>Tahun Anggaran</td>
                            <td>Waktu Pengerjaan</td>
                            <td>Tanggal Mulai</td>
                            <td>Tanggal Selesai</td>
                            <td>Design</td>
                            <td>RAB</td>
                            <td>Lokasi</td>
                            <td>Status</td>
                        </tr></b>
                    </thead>
                    <tbody style="color: white;">
                        <?php
                        if(isset($_POST['tahun'])){
$query1="select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.tahunanggaran='$_POST[tahun]'";
}elseif($_POST['status']=="Baru"){
$query1="select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.status='$_POST[status]'";
 }elseif($_POST['status']=="Finish"){
    $query1="select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.status='$_POST[status]'";
     }elseif($_POST['status']=="Sedang Proses"){
        $query1="select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.status='$_POST[status]'";

                        }elseif($_POST['status']=="Semua"){
                         $query1="select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori "; 
                        }elseif($_POST['Tahun']==""){
                         $query1="select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori "; 
                        }else{
$query1="select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori "; 
                        }
                    
                    
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    {

                $kon=$koneksi->query("select * from kontraktor where id_kontraktor='$data[id_kontraktor]' "); 
                $kontraktor=mysqli_fetch_array($kon);
             $p=mysqli_num_rows($koneksi->query("select * from pengajuanproyek where id_proyek='$data[id_proyek]'"));

                     $no++; ?>
                        <?php if($data['status']=='Baru'){ echo"<tr style='background-color: #000bff;'>"; }?>
                        <?php if($data['status']=='Sedang Proses'){ echo"<tr style='background-color: orange;'>";}?>
                        <?php if($data['status']=='Finish'){ echo"<tr style='background-color: green;'>";}?>
                            <td><?= $no;?></td>
                            <td><?= $data['namaproyek'];?></td>
                            <td><?= $kontraktor['namapt'];?></td>
                            <td><?= $data['nama_kategori'];?></td>
                            <td>Rp. <?= number_format($data['dana'],0,",",".");?></td>
                            <td><?= $data['tahunanggaran'];?></td>
                            <td><?= $data['lamapekerjaan'];?> Bulan</td>
                            <td><?= tgl_indonesia($data['tgl_mulai']);?></td>
                            <td><?= tgl_indonesia($data['tgl_selesai']);?></td>
                            <td><center><a href="img/proyek/<?= $data['foto']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>
                    <td><center><a href="img/rab/<?= $data['rab']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>
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

                            <td><?= $data['status'];?></td>
                  
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