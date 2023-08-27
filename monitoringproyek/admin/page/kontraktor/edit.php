 <?php  $query1="select * from kontraktor where id_kontraktor='$_GET[id]'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil);
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
										<input type="text" class="form-control1" name="namapt" value="<?= $data['namapt'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Logo Perusahaan</label>
									<div class="col-sm-8">
										<img src="../img/logo/<?= $data['logo'];?>" width="200px" height="200px">
										<input type="file" class="form-control1" name="logo"  >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Direktur</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="namadirektur" value="<?= $data['namadirektur'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="alamat"><?= $data['alamat'];?></textarea>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Berdiri</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="tgl_berdiri" value="<?= $data['tgl_berdiri'];?>">
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kontak Perusahaan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nohp" value="<?= $data['nohp'];?>">
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No SIUP</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="siup" value="<?= $data['siup'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No NPWP</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="npwp" value="<?= $data['npwp'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Surat Keterangan Domisili</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="domisili" value="<?= $data['domisili'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Tanda Daftar Perusahaan(TDP)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="tdp" value="<?= $data['tdp'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Surat Ijin Usaha Jasa Kontruksi</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="siujk" value="<?= $data['siujk'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Sertifikat Badan Usaha</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="sbu" value="<?= $data['sbu'];?>">
									</div>
									
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Dokumen Izin (PDF)</label>
									<div class="col-sm-8">
										<iframe src="../img/dokumen/<?= $data['dokumen'];?>" width="300px" height="300px"></iframe>
										<input type="file" name="dokumen" class="form-control1">
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Status Operasional</label>
									<div class="col-sm-8">
										<select name="status" class="form-control1">
											<option value="<?= $data['status'];?>"><?= $data['status'];?></option>
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
  if (empty($file_logo) && empty($file_dokumen)){
    $koneksi->query("UPDATE kontraktor SET 
                    namapt='$namapt',
        namadirektur='$namadirektur',
        tgl_berdiri='$tgl_berdiri',
        alamat='$alamat',
        siup='$siup',
        npwp='$npwp',
        domisili='$domisili',
        tdp='$tdp',
        siujk='$siujk',
        sbu='$sbu',
        nohp='$nohp',
        status='$_POST[status]'
                    WHERE id_kontraktor = '$_POST[id]'");
}elseif(empty($file_logo) && !empty($file_dokumen)){
	    $hapus= $koneksi->query("select * from kontraktor where id_kontraktor='$_POST[id]'");
    $tanggal_file_logo=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_file_logo['dokumen'];
    $hapus_file_dokumen="../img/dokumen/$lokasi";
    unlink($hapus_file_dokumen);
    move_uploaded_file($_FILES['dokumen']['tmp_name'],'../img/dokumen/'.$file_dokumen);
    $koneksi->query("UPDATE kontraktor SET 
                    namapt='$namapt',
        namadirektur='$namadirektur',
        dokumen='$file_dokumen',
        tgl_berdiri='$tgl_berdiri',
        siup='$siup',
        npwp='$npwp',
        domisili='$domisili',
        tdp='$tdp',
        siujk='$siujk',
        sbu='$sbu',
        alamat='$alamat',
        nohp='$nohp',
        
        status='$_POST[status]'
                    WHERE id_kontraktor = '$_POST[id]'");
    }elseif(!empty($file_logo) && empty($file_dokumen)){


    $hapus= $koneksi->query("select * from kontraktor where id_kontraktor='$_POST[id]'");
    $tanggal_file_logo=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_file_logo['logo'];
    $hapus_file_logo="../img/logo/$lokasi";
    unlink($hapus_file_logo);
    move_uploaded_file($_FILES['logo']['tmp_name'],'../img/logo/'.$file_logo);
    $koneksi->query("UPDATE kontraktor SET 
    	namapt='$namapt',
        namadirektur='$namadirektur',
        logo='$file_logo',
        tgl_berdiri='$tgl_berdiri',
        siup='$siup',
        npwp='$npwp',
        domisili='$domisili',
        tdp='$tdp',
        siujk='$siujk',
        sbu='$sbu',
        alamat='$alamat',
        nohp='$nohp',
        
        status='$_POST[status]'
                    WHERE id_kontraktor= '$_POST[id]'");
  }elseif(!empty($file_logo) && !empty($file_dokumen)){


      $hapus= $koneksi->query("select * from kontraktor where id_kontraktor='$_POST[id]'");
    $tanggal_file_logo=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_file_logo['logo'];
    $hapus_file_logo="../img/logo/$lokasi";
    unlink($hapus_file_logo);
    move_uploaded_file($_FILES['logo']['tmp_name'],'../img/logo/'.$file_logo);
    $lokasi1=$tanggal_file_logo['dokumen'];
    $hapus_file_dokumen1="../img/dokumen/$lokasi1";
    unlink($hapus_file_dokumen1);
    move_uploaded_file($_FILES['dokumen']['tmp_name'],'../img/dokumen/'.$file_dokumen);
    $koneksi->query("UPDATE kontraktor SET 
    	 namapt='$namapt',
        namadirektur='$namadirektur',
        logo='$file_logo',
        dokumen='$file_dokumen',
        tgl_berdiri='$tgl_berdiri',
        siup='$siup',
        npwp='$npwp',
        domisili='$domisili',
        tdp='$tdp',
        siujk='$siujk',
        sbu='$sbu',
        alamat='$alamat',
        nohp='$nohp',
        
        status='$_POST[status]'
                    WHERE id_kontraktor= '$_POST[id]'");
  }
echo"<script>alert('Selamat Data Berhasil di Edit!!!'); window.location = '?page=page/kontraktor/index'</script>";
    

}

 ?>