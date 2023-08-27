 <?php  $query1="select * from banner where id_banner='$_GET[id]'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Banner :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_banner'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Judul</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="judul" value="<?= $data['judul'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Foto</label>
									<div class="col-sm-8">
										<img src="../img/banner/<?= $data['foto'];?>" width="300px">
										<input type="file" class="form-control1" name="foto">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<a  href="?page=page/banner/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
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

  $foto   = $_FILES['foto']['name'];
  if (empty($foto) ){
    $koneksi->query("UPDATE banner SET 
                    judul     = '$_POST[judul]'
                    WHERE id_banner = '$_POST[id]'");
}else{


    $hapus= $koneksi->query("select * from banner where id_banner='$_POST[id]'");
    $tanggal_foto=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_foto['foto'];
    $hapus_foto="../img/banner/$lokasi";
    unlink($hapus_foto);
    move_uploaded_file($_FILES['foto']['tmp_name'],'../img/banner/'.$foto);
    $koneksi->query("UPDATE banner SET judul     = '$_POST[judul]',
                    foto  = '$foto'
                    WHERE id_banner= '$_POST[id]'");
  }
echo"<script>alert('Data Berhasil di Ubah!!!'); window.location = '?page=page/banner/index'</script>";
    }



 ?>