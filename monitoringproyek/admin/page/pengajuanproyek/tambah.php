<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Proyek :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="namaproyek" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kategori Proyek</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="id_kategori" id="" >
											<option>Pilih</option>
											<?php
                    $tampil=$koneksi->query("select * from Kategoriproyek");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
											<option value="<?= $data['id_kategori'];?>"><?= $data['nama_kategori'];?></option>
										<?php }?>
										</select> 
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Anggaran</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="dana" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tahun Anggaran</label>
									<div class="col-sm-8">
										<select type="text" class="form-control1" name="tahunanggaran" id="" >
											<option>Pilih</option>
											<?php
for($i=date('Y'); $i>=date('Y')-5; $i-=1){
echo"<option value='$i'> $i </option>";
}
?>
										</select>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Design Proyek</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="foto" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">RAB Proyek</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="rab" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Latitude</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="latitude" id="" ><a href="page/maps.php" target="_BLANK" class="btn btn-success">lihat titik Koordinat</a>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Longitude</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="longitude" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Waktu Pengerjaan (Bulan)</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="lamapekerjaan" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Keterangan</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="keterangan" id="" ></textarea>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>simpan</button>
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
        $file_name = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        $file_name1 = $_FILES['rab']['name'];
        $tmp_name1 = $_FILES['rab']['tmp_name'];
        $namaproyek=addslashes($_POST['namaproyek']);
		$tahunanggaran = $_POST['tahunanggaran'];
        $id_kategori=addslashes($_POST['id_kategori']);
        $dana=addslashes($_POST['dana']);
        $latitude=addslashes($_POST['latitude']);
        $longitude=addslashes($_POST['longitude']);
        $lamapekerjaan=addslashes($_POST['lamapekerjaan']);
        $keterangan=addslashes($_POST['keterangan']);

        $query_simpan =$koneksi->query( "INSERT INTO proyek SET 
        namaproyek='$namaproyek',
        id_kategori='$id_kategori',
        tahunanggaran='$tahunanggaran',
        dana='$dana',
        foto='$file_name',
        latitude='$latitude',
        longitude='$longitude',
        lamapekerjaan='$lamapekerjaan',
        keterangan='$keterangan',
        status='Baru',
        tgl='$tgl_sekarang',
        rab='$file_name1'
        ");
        move_uploaded_file($tmp_name, "../img/proyek/".$file_name);
        move_uploaded_file($tmp_name1, "../img/rab/".$file_name1);

    if ($query_simpan) {
     echo"<script>alert('Selmat Data proyek Berhasil di tambah !!!'); window.location = '?page=page/proyek/index'</script>";
      }else{
      echo"<script>alert('Mohon Ma'af Data proyek Gagal di Simpan !!!'); window.location = '?page=page/proyek/tambah'</script>";
    }}?>