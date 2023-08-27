<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Pengawas Proyek :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">NIP</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nip" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Pendidikan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="pddk" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="alamat" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kategori Pengawas Proyek</label>
									<div class="col-sm-8">
										<select name="id_kategori" class="form-control1" type="text" required="">
											<option value="">Pilih</option>
											<?php
                    $tampil=$koneksi->query("select * from Kategoriproyek");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
											<option value="<?= $data['id_kategori'];?>"><?= $data['nama_kategori'];?></option>
										<?php } ?>
										</select>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="username" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="password" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Hp</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nohp" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Foto</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="foto" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
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
        $file_name = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $nama=addslashes($_POST['nama']);
        $nip=addslashes($_POST['nip']);
        $pddk=addslashes($_POST['pddk']);
        $alamat=addslashes($_POST['alamat']);
        $id_kategori=addslashes($_POST['id_kategori']);

$nohp = $_POST['nohp'];
        $username=addslashes($_POST['username']);
        $password=addslashes($_POST['password']);

        $query_simpan =$koneksi->query( "INSERT INTO pengawas SET 
        nama='$nama',
        nip='$nip',
        id_kategori='$id_kategori',
        pddk='$pddk',
        alamat='$alamat',
        username='$username',
        no_hp='$nohp',
        password='$password',
        foto='$file_name'
        ");
        move_uploaded_file($tmp_name, "../img/pengawas/".$file_name);

    if ($query_simpan) {
      echo"<script>alert('Selamat Data Pengawas Berhasil di Tambah !!!'); window.location = '?page=page/pengawas/index&id=Data pengawas'</script>";
      }else{
      echo"<script>alert(' Maaf Data Pengawas Gagal di Simpan !!!'); window.location = '?page=page/pengawas/tambah'</script>";
    }}?>