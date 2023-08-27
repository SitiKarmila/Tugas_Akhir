<?php include_once('functions.php'); ?>
<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<script src="jscript/jquery.min.js"></script>
<?php

$proyekbaru =mysqli_num_rows($koneksi->query("select * from proyek "));
$proyekonprogr =mysqli_num_rows($koneksi->query("select * from pengawas"));
$proyeksel =mysqli_num_rows($koneksi->query("select * from admin"));
$pkon =mysqli_num_rows($koneksi->query("select * from kontraktor"));
if($_SESSION['level']=='Admin'){
?>	
<div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    
                    
                    <div class="row">
                        <div class="form-three widget-shadow">
                       <center><h3 class="title1">Selamat Datang Admin Di Sistem Informasi Monitoring Proyek</h3></center> 
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
            <?php }

                if($_SESSION['level']=='Pengawas'){
?>  
<div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    
                    
                    <div class="row">
                        <div class="form-three widget-shadow">
                       <center><h3 class="title1">Selamat Datang Pengawas Di Sistem Informasi Monitoring Proyek</h3></center> 
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

        
        
        
        <!-- //calendar --> 
                </div>
            </div>
        </div><?php }?>