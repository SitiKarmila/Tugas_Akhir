 <?php  $query1="select * from Kategoriproyek where id_kategori='$_GET[id]'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Kategori Proyek :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_kategori'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Katagori</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama_kategori" value="<?= $data['nama_kategori'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<a  href="?page=page/bidang/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
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

    $koneksi->query("UPDATE kategoriproyek SET 
                    nama_kategori     = '$_POST[nama_kategori]'
                    WHERE id_kategori = '$_POST[id]'");

echo"<script>alert('Data Berhasil di Ubah!!!'); window.location = '?page=page/kategori/index'</script>";
    }



 ?>