<?php include_once('functions.php'); ?>
<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<script src="jscript/jquery.min.js"></script>
<?php

$proyekbaru =mysqli_num_rows($koneksi->query("select * from proyek "));
$proyekonprogr =mysqli_num_rows($koneksi->query("select * from pengawas"));
$proyeksel =mysqli_num_rows($koneksi->query("select * from admin"));
$pkon =mysqli_num_rows($koneksi->query("select * from kontraktor"));
if($_SESSION['level']=='Pengawas'){
?>	
<div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    
                    
                    <div class="row">
                        <div class="form-three widget-shadow">
                       <center><h3 class="title1">Selamat Datang Di Sistem Informasi Monitoring Proyek</h3></center> 
                        <p></p><br><p></p><br><p></p><br><p></p><br><p></p><br><p></p><br><p></p><br><p></p><br>
                        <p></p><br>
                        <p></p><br>
                        <p></p><br>
                        <p></p><br>
                        <p></p><br>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
            <?php }else{?>
            <div id="page-wrapper">
            <div class="main-page">
            
                   
    <!--//photoday-section-->

        <!-- mainpage-chit -->
        <div class="chit-chat-layer1">
    <div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                                        <header class="widget-header">
                                            <h4 class="widget-title">Jadwal Monitoring</h4>
                                        </header>
                            <hr class="widget-separator">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Nama Proyek</th>
                                      <th>Tanggal Monitoring</th>                                   
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 if(isset($_GET['tgl'])){
                                    $tampil=$koneksi->query("select * from jadwal as p, proyek as k where p.id_proyek=k.id_proyek and p.id_pengawas='$_SESSION[id]' and date='$_GET[tgl]'");
                                 }else{
                   
                    $tampil=$koneksi->query("select * from jadwal as p, proyek as k where p.id_proyek=k.id_proyek and p.id_pengawas='$_SESSION[id]'");}
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    {
                        $no++;?>
                                <tr>
                                  <td><?= $no;?></td>
                                  <td><?= $data['title'];?></td>
                                  <td><?= $data['date'];?></td>                                 
                                                             
                                  <td>
                        <center>
                            <div id="thanks">
                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit pengawas" href="?page=page/spj/editjadwal&id=<?= $data['id_jadwal']; ?>">
                                    <i class="fa fa-check-square-o" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Yakin hapus .?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus SPJ" href="?page=page/spj/hapusjadwal&id=<?= $data['id_jadwal']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td>
                              </tr>
                          <?php }?>
                              
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
      <div class="col-md-6 chit-chat-layer1-rit">       
          <div class="geo-chart">
                    <section id="charts1" class="charts">
                <div class="wrapper-flex">
                
                 
                
                    <div class="col geo_main">
                         <h3 id="geoChartTitle">Kalender Jadwal Monitoring</h3>
                        <div id="calendar_div" class="container"> <?php echo getCalender(); ?> </div>
                        

   
                    </div>
                
                
                </div><!-- .wrapper-flex -->
                </section>              
            </div>

      </div>
     <div class="clearfix"> </div>
</div>
        <!-- //mainpage-chit -->
        
        
        <!-- //calendar --> 
                </div>
            </div>
        </div><?php }?>