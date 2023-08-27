<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Laporan Monitoring :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="id_proyek" id="" required="">
											<option value="">Pilih</option>
											<?php
                    $tampil=$koneksi->query("select * from proyek where id_pengawas='$_SESSION[id]'");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
											<option value="<?= $data['id_proyek'];?>"><?= $data['namaproyek'];?></option>
										<?php }?>
										</select> 
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PDF Dokumen Laporan Monitoring</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" name="dokumen" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Monitoring</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="tgl_pengawasan" id="" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Presentase Pekerjaan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="persentase" id="" required="">
									</div>
									
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Anggaran Monitoring</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="anggarankeluar" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
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
        $file_name = $_FILES['dokumen']['name'];
        $tmp_name = $_FILES['dokumen']['tmp_name'];
        $id_proyek=addslashes($_POST['id_proyek']);
		$tgl_pengawasan = $_POST['tgl_pengawasan'];
        $persentase=addslashes($_POST['persentase']);
        $anggarankeluar=addslashes($_POST['anggarankeluar']);

        $query_simpan =$koneksi->query( "INSERT INTO laporanproyek SET 
        id_proyek='$id_proyek',
        tgl_pengawasan='$tgl_pengawasan',
        id_pengawas='$_SESSION[id]',
        persentase='$persentase',
        anggarankeluar='$anggarankeluar',
        dokumen='$file_name'
        ");
        move_uploaded_file($tmp_name, "../img/dokumen/".$file_name);

    if ($query_simpan) {
     echo"<script>alert(' Selamat Data Berhasil di tambah !!!'); window.location = '?page=page/laporanproyek/index'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Data Gagal di Simpan !!!'); window.location = '?page=page/laporanproyek/tambah'</script>";
    }}?>