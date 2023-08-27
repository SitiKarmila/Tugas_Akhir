 <?php  


$query_simpan =$koneksi->query( "UPDATE keritikandansaran SET status     = 'Terbaca'
                    WHERE id_keritikan= '$_GET[id]'
        ");

 $query1="select * from keritikandansaran where id_keritikan='$_GET[id]'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil);


?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Detail Kritikan dan Saran :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_keritikan'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama" value="<?= $data['nama'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="username" value="<?= $data['email'];?>" readonly>
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Subjek</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nohp" value="<?= $data['subjek'];?>" readonly>
									</div>
									
								</div><div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kritikan dan Saran</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="nohp" value="" readonly><?= $data['keritikandansaran'];?></textarea>
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
										<a  href="?page=page/keritikandansaran/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Kembali</a>
									</div>
									
								</div>

										
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		