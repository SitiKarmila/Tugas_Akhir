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
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Perusahaan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="namapt"  required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Logo Perusahaan</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="logo"  required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Direktur</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="namadirektur" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="alamat" required=""></textarea>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Berdiri</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="tgl_berdiri" required="">
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kontak Perusahaan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nohp" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No SIUP</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="siup" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No NPWP</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="npwp" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Surat Keterangan Domisili</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="domisili" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Tanda Daftar Perusahaan(TDP)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="tdp" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Surat Ijin Usaha Jasa Kontruksi</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="siujk" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Sertifikat Badan Usaha</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="sbu" required="">
									</div>
									
								</div>

								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Dokumen Izin (PDF)</label>
									<div class="col-sm-8">
										<input type="file" name="dokumen" class="form-control1" required="">
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Status Operasional</label>
									<div class="col-sm-8">
										<select name="status" class="form-control1" required="">
											<option value="">Pilih</option>
											<option value="Aktif">Aktif</option>
											<option value="Non Aktif">Non Aktif</option>
										</select>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
										<button type="submit" class="btn btn-info btn-flat btn-pri btn-md" ><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<a  href="?page=page/kontraktor/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Kembali</a>
									</div>
									
								</div>

										
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<?php
		if(isset($_POST['simpan'])){
        $file_logo= $_FILES['logo']['name'];
        $tmp_logo = $_FILES['logo']['tmp_name'];
        $file_dokumen= $_FILES['dokumen']['name'];
        $tmp_dokumen = $_FILES['dokumen']['tmp_name'];  
        $namadirektur=addslashes($_POST['namadirektur']);
        $namapt=addslashes($_POST['namapt']);
        $tgl_berdiri=addslashes($_POST['tgl_berdiri']);
        $alamat=addslashes($_POST['alamat']);
        $siup=addslashes($_POST['siup']);
        $npwp=addslashes($_POST['npwp']);
        $domisili=addslashes($_POST['domisili']);
        $tdp=addslashes($_POST['tdp']);
        $siujk=addslashes($_POST['siujk']);
        $sbu=addslashes($_POST['sbu']);

$nohp = $_POST['nohp'];
        $query_simpan =$koneksi->query( "INSERT INTO kontraktor SET 
        namapt='$namapt',
        namadirektur='$namadirektur',
        logo='$file_logo',
        dokumen='$file_dokumen',
        tgl_berdiri='$tgl_berdiri',
        alamat='$alamat',
        nohp='$nohp',
        siup='$siup',
        npwp='$npwp',
        domisili='$domisili',
        tdp='$tdp',
        siujk='$siujk',
        sbu='$sbu',
        status='Aktif'
        ");
       $p= move_uploaded_file($tmp_logo, "../img/logo/".$file_logo);
        $o= move_uploaded_file($tmp_dokumen, "../img/dokumen/".$file_dokumen);

    if ($query_simpan) {
      echo"<script>alert('Selamat Data Berhasil disimpan !'); window.location = '?page=page/kontraktor/index'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Data Gagal disimpan !!!'); window.location = '?page=page/kontraktor/tambah'</script>";
    }
}
?>