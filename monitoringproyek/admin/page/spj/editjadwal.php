<?php $tampil=$koneksi->query("select * from jadwal where id_jadwal='$_GET[id]'");
                $data=mysqli_fetch_array($tampil);
                ?>
   <div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Edit Data Jadwal :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
									
									<input type="hidden" class="form-control1" name="id" value="<?= $data['id_jadwal'];?>" readonly>
									<input type="hidden" class="form-control1" name="id" value="<?= $data['id_proyek'];?>" readonly>
									<input type="text" class="form-control1" name="title" value="<?= $data['title'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal  Monitoring</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="date" value="<?= $data['date'];?>" >
									
									</div>
									
								</div>
						
							
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Edit</button>
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
        
$pa=mysqli_num_rows($koneksi->query("SELECT * FROM jadwak WHERE id_pengawas='$_SESSION[id]' AND id_proyek='$_POST[id_proyek]' AND dat='$_POST[date]' "));
if($pa >1){
	echo"<script>alert('Mohon Ma'af anda tidak bisa buat jadwal ditanggal yang sama!!!'); window.location = '?page=page/spj/tambahjadwal&id=$id_proyek&id_spj=$id_spj'</script>";
}else{
        $query_simpan =$koneksi->query( "UPDATE jadwal SET 
       
        title='$_POST[title]',
        date='$_POST[date]'
        where id_jadwal='$_POST[id]'
        ");

    if ($query_simpan) {
      echo"<script>alert('Selamat Data Jadwal Berhasil di Edit !!!'); window.location = '?page=page/home'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Data Jadwal Gagal di Edit !!!'); window.location = '?page=page/spj/tambahjadwal&id=$_POST[id]'</script>";
    }
  }
}?>