 <?php  $query1="select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.id_proyek='$_GET[id]'";
$tampil=$koneksi->query( $query1);
$dat=mysqli_fetch_array($tampil);
$tampila=$koneksi->query("select * from kontraktor where id_kontraktor='$dat[id_kontraktor]'");
$kontraktor=mysqli_fetch_array($tampila);
$tampils=$koneksi->query("select * from pengawas where id_pengawas='$dat[id_pengawas]'");
$pengawas=mysqli_fetch_array($tampils);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Update Status Data Proyek :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $dat['id_proyek'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="namaproyek" value="<?= $dat['namaproyek'];?>" readonly >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kontraktor</label>
									<div class="col-sm-8">
										<input  type="text" class="form-control" name="id_kontraktor" id="" value="<?= $kontraktor['namapt'];?>" required="" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Status Proyek</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="status" id="" required="" >
											<option value="<?= $dat['status'];?>"><?= $dat['status'];?></option>
										
											<option value="Baru">Baru</option>
											<option value="Sedang Proses">Sedang Proses</option>
											<option value="Finish">Finish</option>
									
										</select> 
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kategori Proyek</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="id_kategori" id="" value="<?= $dat['nama_kategori'];?>" readonly="">
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Anggaran</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="dana" value="<?= $dat['dana'];?>" readonly>
									</div>
									
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tahun Anggaran</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="tahunanggaran" value="<?= $dat['tahunanggaran'];?>" readonly >
											
											
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Design Proyek</label>
									<div class="col-sm-8">
										<a href="../img/proyek/<?= $data['foto']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">RAB Proyek</label>
									<div class="col-sm-8"><a href="../img/rab/<?= $data['rab']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Waktu Pengerjaan (Bulan)</label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="lamapekerjaan" value="<?= $dat['lamapekerjaan'];?>" readonly>
									</div>
									
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Mulai Pekerjaan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="tgl_mulai" value="<?= $dat['tgl_mulai'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Selesai Pekerjaan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="tgl_selesai" value="<?= $dat['tgl_selesai'];?>"  readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Update Status</button>
										<a  href="?page=page/proyek/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
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
	$query_simpan =$koneksi->query( "UPDATE proyek SET 
        status='$_POST[status]'
         WHERE id_proyek='$_POST[id]'
        ");

     echo"<script>alert('Selamat status proyek Berhasil di Update !!!'); window.location = '?page=page/proyek/index'</script>";
     }?>