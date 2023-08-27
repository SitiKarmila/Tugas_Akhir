 <?php  $query1="select * from profil where id_profil='1'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Kontak :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_profil'];?>">
								<!-- <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Link Maps</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="maps" ><?php //echo $data['maps'];?></textarea>
									
									</div>
									
								</div> -->
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="telpon" value="<?= $data['telpon'];?>">
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Whatsapp</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="wa" value="<?= $data['wa'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control1" name="email" value="<?= $data['email'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="alamat" ><?= $data['alamat'];?></textarea>
									
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Logo</label>
									<div class="col-sm-8">
										<img src="../img/kontak/<?= $data['logo'];?>" width="300px">
										<input type="file" class="form-control1" name="logo">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<a  href="?page=page/kontak/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
									</div>
									
								</div>

										
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<?php 

if (isset($_POST['simpan'])){

  $logo   = $_FILES['logo']['name'];
  if (empty($logo)){
    $koneksi->query("UPDATE profil SET 
                    telpon = '$_POST[telpon]',
                    email = '$_POST[email]',
                    alamat = '$_POST[alamat]',
                    wa    = '$_POST[wa]'
                    WHERE id_profil = '$_POST[id]'");
}else{


    $hapus= $koneksi->query("select * from profil where profil='$_POST[id]'");
    $tanggal_logo=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_logo['logo'];
    $hapus_logo="../img/kontak/$lokasi";
    unlink($hapus_logo);
    move_uploaded_file($_FILES['logo']['tmp_name'],'../img/kontak/'.$logo);
    $koneksi->query("UPDATE profil SET 
                    telpon = '$_POST[telpon]',
                    email = '$_POST[email]',
                    wa    = '$_POST[wa]',
                    alamat    = '$_POST[alamat]',
                    logo  = '$logo'
                    WHERE id_profil= '$_POST[id]'");
  }
echo"<script>alert('Selamat Data Berhasil di Ubah!!!'); window.location = '?page=page/kontak/kontak'</script>";
    }



 ?>