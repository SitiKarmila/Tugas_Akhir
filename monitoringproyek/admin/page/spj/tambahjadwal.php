<?php $tampil=$koneksi->query("select * from proyek where id_proyek='$_GET[id]'");
                $data=mysqli_fetch_array($tampil);
                $tampiln=$koneksi->query("select * from pengawas where id_pengawas='$_SESSION[id]'");
                $datan=mysqli_fetch_array($tampiln);?>
   <div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Buat Jadwal Monitoring :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
									<input type="hidden" class="form-control1" name="title" value="<?= $data['namaproyek'];?>">
									<input type="hidden" class="form-control1" name="id_proyek" value="<?= $data['id_proyek'];?>">
									<input type="hidden" class="form-control1" name="id_spj" value="<?= $_GET['id_spj'];?>">
									<input type="text" class="form-control1" name="namaproyek" value="<?= $data['namaproyek'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal  Monitoring</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="date" required="" >
									
									</div>
									
								</div>
						
							
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Buat Jadwal</button>
										<a  href="?page=page/pengawas/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
									</div>
									
								</div>

										
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<?php

    if (isset ($_POST['simpan'])){
        $id_pengawas=addslashes($_SESSION['id']);
        $id_proyek=addslashes($_POST['id_proyek']);
        $id_spj=addslashes($_POST['id_spj']);
$pa=mysqli_num_rows($koneksi->query("SELECT * FROM jadwak WHERE id_pengawas='$id_pengawas' AND id_proyek='$id_proyek' AND dat='$_POST[date]' "));
if($pa >1){
	echo"<script>alert('Mohon Maaf Anda Tidak Bisa Menambahkan Jadwal Ditanggal Yang Sama!!!'); window.location = '?page=page/spj/tambahjadwal&id=$id_proyek&id_spj=$id_spj'</script>";
}else{
        $query_simpan =$koneksi->query( "INSERT INTO jadwal SET 
        id_pengawas='$id_pengawas',
        title='$_POST[title]',
        id_proyek='$id_proyek',
        id_spj='$id_spj',
        date='$_POST[date]',
        status='Baru'
        ");

    if ($query_simpan) {
      echo"<script>alert('Selamat Jadwal Monitoring Berhasil di Buat !!!'); window.location = '?page=page/home'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Jadwal Monitoring Gagal di Tambahkan, Silahkan Masukkan Kembali !!!'); window.location = '?page=page/spj/tambahjadwal&id=$id_proyek&id_spj=$id_spj'</script>";
    }
}
  }?>