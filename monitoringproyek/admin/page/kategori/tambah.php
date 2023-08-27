<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data kategori :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Kategori</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama_kategori" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<a  href="?page=page/kategori/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
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

        $nama_kategori=addslashes($_POST['nama_kategori']);


        $query_simpan =$koneksi->query( "INSERT INTO kategoriproyek SET 
        nama_kategori='$nama_kategori'
        ");

    if ($query_simpan) {
      echo"<script>alert('Selamat Data kategori Berhasil di tambah !!!'); window.location = '?page=page/kategori/index&id=Data kategori'</script>";
      }else{
      echo"<script>alert('Selamat Data kategori Gagal di Simpan !!!'); window.location = '?page=page/kategori/tambah'</script>";
    }}?>