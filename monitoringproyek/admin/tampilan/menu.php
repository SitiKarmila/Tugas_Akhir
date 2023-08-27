<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="?page=page/home"> Monitoring<p>Proyek&nbsp;</p> <br></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">    <i class="fa fa-calendar"></i>

<?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
 echo "Minggu";
}elseif ($hari=="Monday") {
 echo "Senin";
}elseif ($hari=="Tuesday") {
 echo "Selasa";
}elseif ($hari=="Wednesday") {
 echo "Rabu";
}elseif ($hari=="Thursday") {
 echo("Kamis");
}elseif ($hari=="Friday") {
 echo "Jum'at";
}elseif ($hari=="Saturday") {
 echo "Sabtu";
}
?>,
<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
 echo " Januari ";
}elseif ($bulan=="February") {
 echo " Februari ";
}elseif ($bulan=="March") {
 echo " Maret ";
}elseif ($bulan=="April") {
 echo " April ";
}elseif ($bulan=="May") {
 echo " Mei ";
}elseif ($bulan=="June") {
 echo " Juni ";
}elseif ($bulan=="July") {
 echo " Juli ";
}elseif ($bulan=="August") {
 echo " Agustus ";
}elseif ($bulan=="September") {
 echo " September ";
}elseif ($bulan=="October") {
 echo " Oktober ";
}elseif ($bulan=="November") {
 echo " November ";
}elseif ($bulan=="December") {
 echo " Desember ";
}
$tahun=date('Y');
echo $tahun;
?>
<br>
<i class="fa fa-clock-o"></i><script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
<span id="clock"></span> </li>
              <li class="treeview">
                <a href="?page=page/home">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <?php if($_SESSION['level'] =='Admin'){?>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Managemen Proyek</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="?page=page/kategori/index"><i class="fa fa-angle-right"></i> Kategori Proyek</a></li>
                  <li><a href="?page=page/proyek/index"><i class="fa fa-angle-right"></i>Data Proyek</a></li>
                  <li><a href="?page=page/laporanproyek/index"><i class="fa fa-angle-right"></i>Laporan Pengawasan Proyek</a></li>
                                  </ul>
              </li>

              <li class="treeview">
                <a href="?page=page/kontraktor/index">
                <i class="fa fa-users"></i>
                <span>Data Kontraktor</span>
                </a>
              </li>
             
               <li class="treeview">
                <a href="#">
                <i class="fa fa-universal-access"></i>
                <span>Data Pengawas</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="?page=page/pengawas/index"><i class="fa fa-angle-right"></i>Data Pengawas</a></li>
                  <li><a href="?page=page/spj/index"><i class="fa fa-angle-right"></i>Data Surat Perintah Jalan</a></li>
                                  </ul>
              </li>
             
              <li class="treeview">
                <a href="#">
                <i class="fa fa-globe"></i> <span>Managemen Web</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="?page=page/banner/index"><i class="fa fa-angle-right"></i>Banner</a></li>
                  <li><a href="?page=page/kontak/kontak"><i class="fa fa-angle-right"></i> Kontak</a></li>
                  <li><a href="?page=page/kontak/tentangkami"><i class="fa fa-angle-right"></i> Tentang Kami</a></li>
                </ul>
              </li>
               <li class="treeview">
                <a href="?page=page/keritikandansaran/index">
                <i class="fa fa-comments"></i>
                <span>Data Keritikan dan Saran</span>
                </a>
              </li>
              <li>
                <a href="?page=page/admin/index">
                <i class="fa fa-table"></i> <span>Admin</span>
              </li>
            <?php }else{?>
              <li class="treeview">
                <a href="?page=page/proyek/index">
                <i class="fa fa-table"></i>
                <span>Data Proyek</span>
                </a>
              </li>
              <!-- <li class="treeview">
                <a href="?page=page/jadwal/index">
                <i class="fa fa-users"></i>
                <span>Jadwal Pengawasan</span>
                </a>
              </li> -->
               <li class="treeview">
                <a href="?page=page/laporanproyek/index">
                <i class="fa fa-book"></i>
                <span>Laporan Pengawasan Proyek</span>
                </a>
              </li>
              <li class="treeview">
                <a href="?page=page/spj/indexpengawas">
                <i class="fa fa-envelope"></i>
                <span>Surat Perintah Jalan</span>
                </a>
              </li>
              <li class="treeview">
                <a href="?page=page/jadwal">
                <i class="fa fa-calendar"></i>
                <span>Jadwal</span>
                </a>
              </li>
              <li class="treeview">
                <a href="?page=page/kontraktor/index">
                <i class="fa fa-users"></i>
                <span>Data Kontraktor</span>
                </a>
              </li>
            <?php } ?>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>