 <?php 
  $tampi=$koneksi->query("select * from laporanproyek as l,proyek as p where l.id_proyek=p.id_proyek and l.id_laporan='$_GET[id]' ");
                
                     $dat=mysqli_fetch_array($tampi);
?> <div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Edit Data Laporan Proyek :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $dat['id_laporan'];?>">
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="id_proyek" id="" >
											<option value="<?= $dat['id_proyek'] ?>"><?= $dat['namaproyek'] ?></option>
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
										<input type="file" class="form-control" name="dokumen" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Monitoring</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="tgl_pengawasan" value="<?= $dat['tgl_pengawasan'] ?>" >
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Presentase Pekerjaan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="persentase" value="<?= $dat['persentase'] ?>" >
									</div>
									
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Anggaran Monitoring</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="anggarankeluar" value="<?= $dat['anggarankeluar'] ?>" >
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
if(empty($file_name)){
	$query_simpan =$koneksi->query( "UPDATE laporanproyek SET 
        id_proyek='$id_proyek',
        tgl_pengawasan='$tgl_pengawasan',
        id_pengawas='$_SESSION[id]',
        persentase='$persentase',
        anggarankeluar='$anggarankeluar' WHERE id_laporan='$_POST[id]'
        ");

}else{
	$hapus= $koneksi->query("select * from laporanproyek where id_laporan='$_POST[id]'");
    $tanggal_foto=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_foto['dokumen'];
    $hapus_foto="../img/dokumen/$lokasi";
    unlink($hapus_foto);
    move_uploaded_file($_FILES['dokumen']['tmp_name'],'../img/dokumen/'.$file_name);
    $query_simpan =$koneksi->query( "UPDATE laporanproyek SET 
        id_proyek='$id_proyek',
        tgl_pengawasan='$tgl_pengawasan',
        id_pengawas='$_SESSION[id]',
        persentase='$persentase',
        anggarankeluar='$anggarankeluar',
        dokumen='$file_name' WHERE id_laporan='$_POST[id]'
        ");
}
       

    if ($query_simpan) {
     echo"<script>alert(' Selamat Data Berhasil di tambah !!!'); window.location = '?page=page/laporanproyek/index'</script>";
      }else{
      echo"<script>alert('Mohon maaf Data Gagal di Edit !!!'); window.location = '?page=page/laporanproyek/tambah'</script>";
    }}?>