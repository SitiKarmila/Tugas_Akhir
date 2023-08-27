 <?php  $query1="select * from kontraktor where id_kontraktor='$_GET[id]'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil)
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data kontraktor :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_kontraktor'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Perusahaan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama" namaptp="<?= $data['namaptp'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Direktur</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="namadirektur" value="<?= $data['namadirektur'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="alamat" value="<?= $data['alamat'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Berdiri</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="tgl_berdiri" value="<?= $data['tgl_berdiri'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="username" value="<?= $data['username'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="password" value="<?= $data['password'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kontak Perusahaan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nohp" value="<?= $data['nohp'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">NPWP</label>
									<div class="col-sm-8">
										<a href="../img/npwp/<?= $data['npwp'];?>" target="_blank" class="btn btn-primary"><i class="fa fa-cloud-download"></i></a>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">NIB</label>
									<div class="col-sm-8">
										<a href="../img/nib/<?= $data['nib'];?>" target="_blank" class="btn btn-primary"><i class="fa fa-cloud-download"></i></a>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">IUP</label>
									<div class="col-sm-8">
										<a href="../img/iup/<?= $data['iup'];?>" target="_blank" class="btn btn-primary"><i class="fa fa-cloud-download"></i></a>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">AKTA</label>
									<div class="col-sm-8">
										<a href="../img/akta/<?= $data['akta'];?>" target="_blank" class="btn btn-primary"><i class="fa fa-cloud-download"></i></a>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Registerasi</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="tgl_regesterasi" value="<?= $data['tgl_regesterasi'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="Status" value="<?= $data['status'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
										<a  href="?page=page/kontraktor/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Kembali</a>
									</div>
									
								</div>

										
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>