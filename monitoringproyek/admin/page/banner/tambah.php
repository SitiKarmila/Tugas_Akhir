<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data banner :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Judul</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="judul" id="" required="">
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

    if (isset ($_POST['simpan'])){
        $file_name = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $judul=addslashes($_POST['judul']);


        $query_simpan =$koneksi->query( "INSERT INTO banner SET 
        judul='$judul',
        foto='$file_name'
        ");
        move_uploaded_file($tmp_name, "../img/banner/".$file_name);

    if ($query_simpan) {
      echo"<script>alert('Selamat Data Banner Berhasil di Tambah !!!'); window.location = '?page=page/banner/index&id=Data banner'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Data Banner Gagal di Simpan !!!'); window.location = '?page=page/banner/tambah'</script>";
    }}?>