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
						<h3 class="title1">Edit Data Proyek :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $dat['id_proyek'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="namaproyek" value="<?= $dat['namaproyek'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kontraktor</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="id_kontraktor" id="" required="">
											<option value="<?= $kontraktor['id_kontraktor'];?>"><?= $kontraktor['namapt'];?></option>
											<?php
                    $tampil=$koneksi->query("select * from kontraktor");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
											<option value="<?= $data['id_kontraktor'];?>"><?= $data['namapt'];?></option>
										<?php }?>
										</select> 
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
									<label for="focusedinput" class="col-sm-2 control-label">Pengawas Proyek</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="id_pengawas" id="" required="">
											<option value="<?= $pengawas['id_pengawas'];?>">NIP.<?= $pengawas['nip'];?> - <?= $pengawas['nama'];?></option>
											<?php
                    $tampil=$koneksi->query("select * from pengawas");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
											<option value="<?= $data['id_pengawas'];?>">NIP.<?= $data['nip'];?> - <?= $data['nama'];?></option>
										<?php }?>
										</select> 
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kategori Proyek</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="id_kategori" id="" >
											<option value="<?= $dat['id_kategori'];?>"><?= $dat['nama_kategori'];?></option>
											<?php
                    $tampil=$koneksi->query("select * from Kategoriproyek");
                
                     while($data=mysqli_fetch_array($tampil))
                    { if($data['id_kategori']==$dat['id_kategori']){}else{ ?>
											<option value="<?= $data['id_kategori'];?>"><?= $data['nama_kategori'];?></option>
										<?php }
									}
									?>
										</select> 
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Anggaran</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="dana" value="<?= $dat['dana'];?>" >
									</div>
									
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tahun Anggaran</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="tahunanggaran"  >
											
											<option value="<?= $dat['tahunanggaran'];?>"><?= $dat['tahunanggaran'];?></option>
											<?php
for($i=date('Y'); $i>=date('Y')-5; $i-=1){
	if($i==$dat['tahunanggaran']){}else{ 
echo"<option value='$i'> $i </option>";
}
}
?>
										</select>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Design Proyek</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="foto" id="" ><a href="../img/proyek/<?= $data['foto']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">RAB Proyek</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="rab" id="" ><a href="../img/rab/<?= $data['rab']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Latitude</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="latitude" value="<?= $dat['latitude'];?>"><a href="page/maps.php" target="_BLANK" class="btn btn-success">lihat titik Koordinat</a>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Longitude</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="longitude" value="<?= $dat['longitude'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Waktu Pengerjaan (Bulan)</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="lamapekerjaan" value="<?= $dat['lamapekerjaan'];?>" >
									</div>
									
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Mulai Pekerjaan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="tgl_mulai" value="<?= $dat['tgl_mulai'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Selesai Pekerjaan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="tgl_selesai" value="<?= $dat['tgl_selesai'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PDF Surat Perintah Kerja</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="spk" id="" >
										<a href="../img/spk/<?= $data['spk']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Keterangan</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="keterangan" id="" ><?= $dat['keterangan'];?></textarea>
									</div>
									
								</div>
								<div class="form-group">
								<table>

									<?php 
 $no=1;
  $level_dri=$koneksi->query("SELECT * FROM karyawan where id_proyek='$dat[id_proyek]'");
     $p=mysqli_num_rows($level_dri); ?>
  <input type="hidden" name="ttl"  value="<?= $p;?>"><?PHP
            while($mon=mysqli_fetch_array($level_dri)){
    ?>
			<tr>
				
				<td>Nama<input type="hidden" name="id_karyawan<?= $no;?>" value='<?= $mon['id_karyawan'];?>'><input type="text" name="nama<?= $no;?>" value='<?= $mon['nama'];?>'></td>
				<td>&nbsp;</td>
				<td>NIK<input type="text" name="nik<?= $no;?>" value='<?= $mon['nik'];?>'></td>
				<td>&nbsp;</td>
				<td>NO BPJS Kesehatan<input type="text" name="bpjskesehatan<?= $no;?>" value='<?= $mon['bpjskesehatan'];?>'></td>
				<td>&nbsp;</td>
				<td>NO BPJS Ketenagakerjaan<input type="text" name="bpjsketenagakerjaan<?= $no;?>" value='<?= $mon['bpjsketenagakerjaan'];?>'></td>
				<td>&nbsp;</td>
				<td>Foto<input type="file" name="fotokaryawan<?= $no;?>" value='<?= $mon['fotokaryawan'];?>'></td>
			</tr>
			<?php $no++; }?>
			
		</table></div>
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
        $file_name = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        $file_name1 = $_FILES['rab']['name'];
        $tmp_name1 = $_FILES['rab']['tmp_name'];

        $file_name2 = $_FILES['spk']['name'];
        $tmp_name2 = $_FILES['spk']['tmp_name'];
        $tgl_mulai=addslashes($_POST['tgl_mulai']);
        $tgl_selesai=addslashes($_POST['tgl_selesai']);
        $namaproyek=addslashes($_POST['namaproyek']);
		$tahunanggaran = $_POST['tahunanggaran'];
        $id_kategori=addslashes($_POST['id_kategori']);
        $dana=addslashes($_POST['dana']);
        $latitude=addslashes($_POST['latitude']);
        $longitude=addslashes($_POST['longitude']);
        $lamapekerjaan=addslashes($_POST['lamapekerjaan']);
        $keterangan=addslashes($_POST['keterangan']);
        $id_kontraktor=addslashes($_POST['id_kontraktor']);
        $id_pengawas=addslashes($_POST['id_pengawas']);
if(empty($file_name)&&empty($file_name1)&&empty($file_name2)){
	$query_simpan =$koneksi->query( "UPDATE proyek SET 
        namaproyek='$namaproyek',
        id_kategori='$id_kategori',
        tahunanggaran='$tahunanggaran',
        id_pengawas='$id_pengawas',
        id_kontraktor='$id_kontraktor',
        dana='$dana',status='$_POST[status]',
        latitude='$latitude',
        longitude='$longitude',
        lamapekerjaan='$lamapekerjaan',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai',
        keterangan='$keterangan'
         WHERE id_proyek='$_POST[id]'
        ");

}elseif(!empty($file_name)&&empty($file_name1)&&empty($file_name2)){
	$hapus= $koneksi->query("select * from proyek where id_proyek='$_POST[id]'");
    $tanggal_foto=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_foto['foto'];
    $hapus_foto="../img/proyek/$lokasi";
    unlink($hapus_foto);
    move_uploaded_file($_FILES['foto']['tmp_name'],'../img/proyek/'.$file_name);
	$query_simpan =$koneksi->query( "UPDATE proyek SET 
        namaproyek='$namaproyek',
        id_kategori='$id_kategori',
        tahunanggaran='$tahunanggaran',
        dana='$dana',status='$_POST[status]',
        latitude='$latitude',
        id_pengawas='$id_pengawas',
        foto='$file_name',
        longitude='$longitude',
        id_kontraktor='$id_kontraktor',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai',
        lamapekerjaan='$lamapekerjaan',
        keterangan='$keterangan'
         WHERE id_proyek='$_POST[id]'
        ");
}elseif(empty($file_name)&&!empty($file_name1)&&empty($file_name2)){
	$hapus= $koneksi->query("select * from proyek where id_proyek='$_POST[id]'");
    $tanggal_foto=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_foto['rab'];
    $hapus_foto="../img/rab/$lokasi";
    unlink($hapus_foto);
    move_uploaded_file($_FILES['rab']['tmp_name'],'../img/proyek/'.$file_name1);
	$query_simpan =$koneksi->query( "UPDATE proyek SET 
        namaproyek='$namaproyek',
        id_kategori='$id_kategori',
        tahunanggaran='$tahunanggaran',
        id_pengawas='$id_pengawas',
        dana='$dana',status='$_POST[status]',
        latitude='$latitude',
        rab='$file_name1',
        longitude='$longitude',
        id_kontraktor='$id_kontraktor',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai',
        lamapekerjaan='$lamapekerjaan',
        keterangan='$keterangan'
         WHERE id_proyek='$_POST[id]'");
}elseif(empty($file_name)&&empty($file_name1)&&!empty($file_name2)){
	$hapus= $koneksi->query("select * from proyek where id_proyek='$_POST[id]'");
    $tanggal_foto=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_foto['spk'];
    $hapus_foto="../img/spk/$lokasi";
    unlink($hapus_foto);
    move_uploaded_file($_FILES['spk']['tmp_name'],'../img/spk/'.$file_name2);
	$query_simpan =$koneksi->query( "UPDATE proyek SET 
        namaproyek='$namaproyek',
        id_kategori='$id_kategori',
        tahunanggaran='$tahunanggaran',
        dana='$dana',status='$_POST[status]',
        latitude='$latitude',
        id_pengawas='$id_pengawas',
        spk='$file_name2',
        id_kontraktor='$id_kontraktor',
        longitude='$longitude',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai',
        lamapekerjaan='$lamapekerjaan',
        keterangan='$keterangan'
         WHERE id_proyek='$_POST[id]'");
}elseif(!empty($file_name)&&!empty($file_name1)&&empty($file_name2)){
	$hapus= $koneksi->query("select * from proyek where id_proyek='$_POST[id]'");
    $tanggal_foto=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_foto['rab'];
    $hapus_foto="../img/rab/$lokasi";
    unlink($hapus_foto);
    $lokasi1=$tanggal_foto['foto'];
    $hapus_foto1="../img/proyek/$lokasi1";
    unlink($hapus_foto1);
    move_uploaded_file($_FILES['foto']['tmp_name'],'../img/proyek/'.$file_name);
    move_uploaded_file($_FILES['rab']['tmp_name'],'../img/proyek/'.$file_name1);
	$query_simpan =$koneksi->query( "UPDATE proyek SET 
        namaproyek='$namaproyek',
        id_kategori='$id_kategori',
        tahunanggaran='$tahunanggaran',
        dana='$dana',status='$_POST[status]',
        latitude='$latitude',
        rab='$file_name1',
        id_pengawas='$id_pengawas',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai',
        id_kontraktor='$id_kontraktor',
        foto='$file_name',
        longitude='$longitude',
        lamapekerjaan='$lamapekerjaan',
        keterangan='$keterangan'
         WHERE id_proyek='$_POST[id]'");
}elseif(!empty($file_name)&&!empty($file_name1)&&!empty($file_name2)){
	$hapus= $koneksi->query("select * from proyek where id_proyek='$_POST[id]'");
    $tanggal_foto=mysqli_fetch_array($hapus,MYSQLI_BOTH);
    $lokasi=$tanggal_foto['rab'];
    $hapus_foto="../img/rab/$lokasi";
    unlink($hapus_foto);
    $lokasi1=$tanggal_foto['foto'];
    $hapus_foto1="../img/proyek/$lokasi1";
    unlink($hapus_foto1);

    $lokas21=$tanggal_foto['spk'];
    $hapus_foto2="../img/spk/$lokasi2";
    unlink($hapus_foto2);
    move_uploaded_file($_FILES['foto']['tmp_name'],'../img/proyek/'.$file_name);
    move_uploaded_file($_FILES['rab']['tmp_name'],'../img/proyek/'.$file_name1);
    move_uploaded_file($_FILES['spk']['tmp_name'],'../img/spk/'.$file_name2);
	$query_simpan =$koneksi->query( "UPDATE proyek SET 
        namaproyek='$namaproyek',
        id_kategori='$id_kategori',
        tahunanggaran='$tahunanggaran',
        dana='$dana',status='$_POST[status]',
        latitude='$latitude',
        rab='$file_name1',
        id_pengawas='$id_pengawas',
        foto='$file_name',
        tgl_mulai='$tgl_mulai',
        id_kontraktor='$id_kontraktor',
        tgl_selesai='$tgl_selesai',
        longitude='$longitude',
        lamapekerjaan='$lamapekerjaan',
        keterangan='$keterangan'
         WHERE id_proyek='$_POST[id]'");

}
    $total = $_POST['ttl'];
for($i=1; $i<=$total; $i++)
  {
        $file_name3 = $_FILES["fotokaryawan$i"]["name"];
        $tmp_name3 = $_FILES["fotokaryawan$i"]["tmp_name"];
        $nama = $_POST["nama$i"];
        $id_karyawan = $_POST["id_karyawan$i"];
        $nik = $_POST["nik$i"];
        $bpjskesehatan = $_POST["bpjskesehatan$i"];
        $bpjsketenagakerjaan = $_POST["bpjsketenagakerjaan$i"];
        $sql=$koneksi->query( "UPDATE karyawan SET 
        	nama='$nama',
        	nik='$nik',
        	bpjskesehatan='$bpjskesehatan',
        	bpjsketenagakerjaan='$bpjsketenagakerjaan',
        	id_proyek='$_POST[id]',
        	fotokaryawan='$file_name3' where id_karyawan='$id_karyawan'");
	  move_uploaded_file($tmp_name3, "../img/karyawan/".$file_name3);
	}
       
    if ($query_simpan) {
     echo"<script>alert('Selamat Data proyek Berhasil di Edit !!!'); window.location = '?page=page/proyek/index'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Data Proyek Gagal di Edit !!!'); window.location = '?page=page/proyek/tambah'</script>";
    }}?>