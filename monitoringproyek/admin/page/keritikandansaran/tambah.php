<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Admin :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="username" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="password" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Hp</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nohp" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Foto</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="gambar" id="" >
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

    if (isset ($_POST['simpan'])){
        $file_name = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $nama=addslashes($_POST['nama']);

$nohp = $_POST['nohp'];
        $username=addslashes($_POST['username']);
        $password=addslashes($_POST['password']);

        $query_simpan =$koneksi->query( "INSERT INTO admin SET 
        nama='$nama',
        username='$username',
        nohp='$nohp',
        password='$password',
        gambar='$file_name'
        ");
        move_uploaded_file($tmp_name, "../img/admin/".$file_name);

    if ($query_simpan) {
      echo"<script>alert('Selamat Data Berhasil di Tambah !!!'); window.location = '?page=page/admin/index&id=Data Admin'</script>";
      }else{
      echo"<script>alert('Maaf Data Gagal di Simpan !!!'); window.location = '?page=page/admin/tambah'</script>";
    }}?>