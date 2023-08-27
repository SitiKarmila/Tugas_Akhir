 <?php  $query1="select * from admin where id_admin='$_GET[id]'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Edit Data Admin :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_admin'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama" value="<?= $data['nama'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="username" value="<?= $data['username'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="password" value="<?= $data['password'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Hp</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nohp" value="<?= $data['nohp'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Gambar</label>
									<div class="col-sm-8">
										<img src="../img/admin/<?= $data['gambar'];?>" width="300px">
										<input type="file" class="form-control1" name="gambar">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<a  href="?page=page/admin/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
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

  $gambar   = $_FILES['gambar']['name'];
  $pp = $_POST['password'];
  if (empty($gambar) && empty($pp)){
    $koneksi->query("UPDATE admin SET 
                    nama     = '$_POST[nama]',
                    username = '$_POST[username]',
                    nohp    = '$_POST[nohp]'
                    WHERE id_admin = '$_POST[id]'");
}elseif(empty($gambar) && !empty($pp)){
    $koneksi->query("UPDATE admin SET 
                    nama     = '$_POST[nama]',
                    username = '$_POST[username]',
                    nohp    = '$_POST[nohp]',
                    password = '$pp'
                    WHERE id_admin = '$_POST[id]'");
    }elseif(!empty($gambar) && empty($pp)){


    $hapus= $koneksi->query("select * from admin where id_admin='$_POST[id]'");
    $tanggal_gambar=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_gambar['gambar'];
    $hapus_gambar="../img/admin/$lokasi";
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'../img/admin/'.$gambar);
    $koneksi->query("UPDATE admin SET nama     = '$_POST[nama]',
                    username     = '$_POST[username]',
                    nohp    = '$_POST[nohp]',
                    gambar  = '$gambar'
                    WHERE id_admin= '$_POST[id]'");
  }elseif(!empty($gambar) && !empty($pp)){


    $hapus= $koneksi->query("select * from admin where id_admin='$_POST[id]'");
    $tanggal_gambar=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_gambar['gambar'];
    $hapus_gambar="../img/admin/$lokasi";
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'../img/admin/'.$gambar);
    $koneksi->query("UPDATE admin SET nama     = '$_POST[nama]',
                    username     = '$_POST[username]',
                    nohp    = '$_POST[nohp]',
                    password = '$pp',
                    gambar  = '$gambar'
                    WHERE id_admin= '$_POST[id]'");
  }
echo"<script>alert('Selamat Data Admin Berhasil di Edit!!!'); window.location = '?page=page/admin/index'</script>";
    }



 ?>