<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Surat Perintah Jalan :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
									<select name="id_proyek" class="form-control1" type="text" required="">
											<option value="">Pilih</option>
											<?php
                    $tampil=$koneksi->query("select * from proyek");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
											<option value="<?= $data['id_proyek'];?>"><?= $data['namaproyek'];?></option>
										<?php } ?>
										</select>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Pengawas Proyek</label>
									<div class="col-sm-8">
										<select name="id_pengawas" class="form-control1" type="text" required="" required="">
											<option value="">Pilih</option>
											<?php
                    $tampil=$koneksi->query("select * from pengawas");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
											<option value="<?= $data['id_pengawas'];?>"><?= $data['nama'];?></option>
										<?php } ?>
										</select>
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Keterangan</label>
									<div class="col-sm-8">
										<textarea name="keterangan" class="form-control1" required="" required=""></textarea>
									</div>
									
								</div>
								
							
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">UPLOAD Surat Perintah Jalan (PDF)</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="spj" id="" required="">
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
        $file_name = $_FILES['spj']['name'];
        $tmp_name = $_FILES['spj']['tmp_name'];
        $id_pengawas=addslashes($_POST['id_pengawas']);
        $id_proyek=addslashes($_POST['id_proyek']);
        $keterangan=addslashes($_POST['keterangan']);

        $query_simpan =$koneksi->query( "INSERT INTO spj SET 
        id_pengawas='$id_pengawas',
        id_proyek='$id_proyek',
        keterangan='$keterangan',
       
        status='Baru',
        spj='$file_name'
        ");
        move_uploaded_file($tmp_name, "../img/spj/".$file_name);

    if ($query_simpan) {
      echo"<script>alert('Selamat Data SPJ di Tambahkan !!!'); window.location = '?page=page/spj/index'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Data SPJ Gagal di Tambah !!!'); window.location = '?page=page/spj/tambah'</script>";
    }}?>