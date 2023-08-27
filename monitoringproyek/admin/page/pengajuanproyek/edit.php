 <?php 
  $tampi=$koneksi->query("select * from pengajuanproyek where id_pengajuanproyek='$_GET[id]' ");
                
                     $no=0;
                     $dat=mysqli_fetch_array($tampi);
                    $tampil=$koneksi->query("select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.id_proyek='$dat[id_proyek]'");
                     $data=mysqli_fetch_array($tampil);

                     $tampill=$koneksi->query("select * from kontraktor where id_kontraktor='$dat[id_kontraktor]'");
                     $kontraktor=mysqli_fetch_array($tampill);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Konfirmasi Pengajuan Proyek :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $dat['id_pengajuanproyek'];?>">
								<input type="hidden" name="id_proyek" value="<?= $dat['id_proyek'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="namaproyek" value="<?= $data['namaproyek'];?>" readonly >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kategori Proyek</label>
									<div class="col-sm-8">
											<input type="text" class="form-control" name="namaproyek" value="<?= $data['nama_kategori'];?>" readonly >
									
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Anggaran</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="dana" value="<?= $data['dana'];?>" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Lama Pengerjaan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="dana" value="<?= $data['lamapekerjaan'];?> Bulan" readonly>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tahun Anggaran</label>
									<div class="col-sm-8">
											<input type="text" class="form-control" name="namaproyek" value="<?= $data['tahunanggaran'];?>" readonly >
									
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Kontaktor</label>
									<div class="col-sm-8">
											<input type="text" class="form-control" name="namaproyek" value="<?= $kontraktor['namapt'];?>" readonly >
									
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
											<input type="text" class="form-control" name="namaproyek" value="<?= $kontraktor['alamat'];?>" readonly >
									
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Proposal</label>
									<div class="col-sm-8">
											<a href="../img/proposal/<?= $dat['proposal']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a>
									
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Dokumen PT</label>
									<div class="col-sm-8">
											<a href="../img/dokumen/<?= $kontraktor['dokumen']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a>
									
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Konfirmasi</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="status" id="" >
											<option>Pilih</option>
											<option value="Diterima">Diterima</option>
											<option value="Ditolak">Ditolak</option>
										
										</select> 
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alasan Jika ditolak</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control" name="keterangan" id="" ></textarea>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Mulai Pekerjaan(Jika Ditrima)</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="tgl_mulai" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Selesai Pekerjaan(Jika Ditrima)</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="tgl_selesai" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Upload SPK (PDF)</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" name="spk" id="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-check" aria-hidden="true"></i>Konfirmasi</button>
										<a  href="?page=page/pengajuanproyek/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
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
        $file_name = $_FILES['spk']['name'];
        $tmp_name = $_FILES['spk']['tmp_name'];

		$status = $_POST['status'];
        $tgl_mulai=addslashes($_POST['tgl_mulai']);
        $tgl_selesai=addslashes($_POST['tgl_selesai']);
        $keterangan=addslashes($_POST['keterangan']);
        if($status=='Diterima'){
        	$query_simpan =$koneksi->query( "UPDATE proyek SET 
        status='On Progress'
         WHERE id_proyek='$_POST[id_proyek]'
        ");
        }else{}
if(empty($file_name)){
	$query_simpan =$koneksi->query( "UPDATE pengajuanproyek SET 
        status='$status',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai'
         WHERE id_pengajuanproyek='$_POST[id]'
        ");

}else{
	$hapus= $koneksi->query("select * from pengajuanproyek where id_pengajuanproyek='$_POST[id]'");
    $tanggal_spk=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_spk['spk'];
    $hapus_spk="../img/spk/$lokasi";
    unlink($hapus_spk);
    move_uploaded_file($_FILES['spk']['tmp_name'],'../img/spk/'.$file_name);
	$query_simpan =$koneksi->query( "UPDATE pengajuanproyek SET 
        status='$status',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai',
        spk='$file_name'
         WHERE id_pengajuanproyek='$_POST[id]'
        ");
}
       
    if ($query_simpan) {
     echo"<script>alert('Selamat Data Berhasil di konfirmasi !!!'); window.location = '?page=page/pengajuanproyek/index&status=$_GET[status]'</script>";
      }else{
      echo"<script>alert('Mohon Ma'af Data gagal dikonfirmasi !!!'); window.location = '?page=page/penjuanproyek/index&status=$_GET[status]'</script>";
    }}?>