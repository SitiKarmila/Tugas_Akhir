<script src="../tampilan/jquery.min.js" type="text/javascript"></script>
  <script src="my.js" type="text/javascript"></script>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tambah Data Proyek :</h3>
						 <div id="angka"> 
            
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
           <div id="input">
								<input type="hidden" name="simpan">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="namaproyek" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kontraktor</label>
									<div class="col-sm-8">
										<select type="text" class="form-control" name="id_kontraktor" id="" required="">
											<option value="">Pilih</option>
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
											<option value="">Pilih</option>
										
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
											<option value="">Pilih</option>
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
										<select type="text" class="form-control" name="id_kategori" id="" required="" >
											<option value="">Pilih</option>
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
										<input type="text" class="form-control" name="dana" id="" required="" onkeydown='return numbersonly(this, event);' onkeyup='javascript:tandaPemisahTitik(this);'>
									</div>
									
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tahun Anggaran</label>
									<div class="col-sm-8">
										<select type="text" class="form-control1" name="tahunanggaran" id="" required="">
											<option value="">Pilih</option>
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
										<input type="file" class="form-control1" name="foto" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">RAB Proyek</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="rab" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Latitude</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="latitude" id="" required=""><a href="page/maps.php" target="_BLANK" class="btn btn-success">lihat titik Koordinat</a>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Longitude</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="longitude" id=""required >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Waktu Pengerjaan (Bulan)</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="lamapekerjaan" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Mulai Pekerjaan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="tgl_mulai" id="" required="" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Selesai Pekerjaan</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="tgl_selesai" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PDF Surat Perintah Kerja</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="spk" id="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Keterangan</label>
									<div class="col-sm-8">
										<textarea type="text" class="form-control1" name="keterangan" id="" required=""></textarea>
									</div>
									
								</div>
								<div class="form-group">
								<table>
			<tr>
				
				<td>Nama<input type="text" name="nama1" required><input type='hidden' name='ttl' value='1'required></td>
				<td>&nbsp;</td>
				<td>NIK<input type="text" name="nik1" required></td>
				<td>&nbsp;</td>
				<td>NO BPJS Kesehatan<input type="text" name="bpjskesehatan1" required></td>
				<td>&nbsp;</td>
				<td>NO BPJS Ketenagakerjaan<input type="text" name="bpjsketenagakerjaan1" required></td>
				<td>&nbsp;</td>
				<td>Foto<input type="file" name="fotokaryawan1" required></td>
			</tr>
			
		</table>
		<div id="insert-form"></div></div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<button type="button" id="btn-tambah-form">Tambah Form Karyawan</button>
		<button type="button" id="btn-reset-form">Reset Form</button>
										<a  href="?page=page/proyek/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
									</div>
									
								</div>

										
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<input type="hidden" id="jumlah-form" value="1">
	
	<script>
	$(document).ready(function(){ // Ketika halaman sudah diload dan siap
		$("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
			var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
			
			// Kita akan menambahkan form dengan menggunakan append
			// pada sebuah tag div yg kita beri id insert-form
			$("#insert-form").append(
				"<table>" +
				"<tr>" +
				"<td>Nama<input type='text' name='nama" + nextform + "' required><input type='hidden' name='ttl' value='" + nextform + "'required></td><td>&nbsp;</td>" +
				"<td>NIK<input type='text' name='nik" + nextform + "' required></td><td>&nbsp;</td>" +
				"<td>NO BPJS Kesehatan<input type='text' name='bpjskesehatan" + nextform + "' required></td><td>&nbsp;</td>" +
				"<td>NO BPJS Ketenagakerjaan<input type='text' name='bpjsketenagakerjaan" + nextform + "' required></td><td>&nbsp;</td>" +
				"<td>Foto<input type='file' name='fotokaryawan" + nextform + "' required></td>" +
				"</tr>" +
				"</table>" );
			
			$("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
		});
		
		// Buat fungsi untuk mereset form ke semula
		$("#btn-reset-form").click(function(){
			$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});
	</script>
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
		$id_kontraktor = $_POST['id_kontraktor'];
		$id_pengawas = $_POST['id_pengawas'];
        $id_kategori=addslashes($_POST['id_kategori']);

    $dana = str_replace(".","",$_POST["dana"]); 
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
        id_kontraktor='$id_kontraktor',
        id_pengawas='$id_pengawas',
        latitude='$latitude',
        longitude='$longitude',
        lamapekerjaan='$lamapekerjaan',
        keterangan='$keterangan',
        status='$_POST[status]',
        tgl='$tgl_sekarang',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai',
        spk='$file_name2',
        rab='$file_name1'
        ");
        move_uploaded_file($tmp_name, "../img/proyek/".$file_name);
        move_uploaded_file($tmp_name1, "../img/rab/".$file_name1);
        move_uploaded_file($tmp_name2, "../img/spk/".$file_name2);


$tampilw=$koneksi->query("SELECT * from proyek  where namaproyek='$namaproyek' and tgl='$tgl_sekarang' and latitude='$latitude'");
$dat=mysqli_fetch_array($tampilw);
    $id_proyek=$dat['id_proyek'];
     $total = $_POST['ttl'];
for($i=1; $i<=$total; $i++)
  {
        $file_name3 = $_FILES["fotokaryawan$i"]["name"];
        $tmp_name3 = $_FILES["fotokaryawan$i"]["tmp_name"];
        $nama = $_POST["nama$i"];
        $nik = $_POST["nik$i"];
        $bpjskesehatan = $_POST["bpjskesehatan$i"];
        $bpjsketenagakerjaan = $_POST["bpjsketenagakerjaan$i"];
        $sql=$koneksi->query( "INSERT INTO karyawan SET 
        	nama='$nama',
        	nik='$nik',
        	bpjskesehatan='$bpjskesehatan',
        	bpjsketenagakerjaan='$bpjsketenagakerjaan',
        	id_proyek='$id_proyek',
        	fotokaryawan='$file_name3'");
	  move_uploaded_file($tmp_name3, "../img/karyawan/".$file_name3);
	}

    if ($query_simpan) {
     echo"<script>alert('Selamat Data Proyek Berhasil di tambah !!!'); window.location = '?page=page/proyek/index'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Data Proyek Gagal di Simpan !!!'); window.location = '?page=page/proyek/tambah'</script>";
    }}?>