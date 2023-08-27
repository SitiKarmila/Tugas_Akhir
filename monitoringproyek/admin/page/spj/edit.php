 <?php 
$tampil=$koneksi->query( "select * from spj as p,pengawas as k where p.id_pengawas=k.id_pengawas and p.id_spj='$_GET[id]'");
$data=mysqli_fetch_array($tampil);
$tampila=$koneksi->query( "select * from proyek where id_proyek='$data[id_proyek]'");
$proyek=mysqli_fetch_array($tampila);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1"> Edit Data Surat Perintah Jalan</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_spj'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Proyek</label>
									<div class="col-sm-8">
									<select name="id_proyek" class="form-control1" type="text">
											<option value="<?= $proyek['id_proyek'];?>"><?= $proyek['namaproyek'];?></option>
											<?php
                    $tampil2=$koneksi->query("select * from proyek");
                
                     $no=0;
                     while($data1=mysqli_fetch_array($tampil2))
                    { $no++; ?>
											<option value="<?= $data1['id_proyek'];?>"><?= $data1['namaproyek'];?></option>
										<?php } ?>
										</select>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Pengawas Proyek</label>
									<div class="col-sm-8">
										<select name="id_pengawas" class="form-control1" type="text">
											<option value="<?= $data['id_pengawas'];?>"><?= $data['nama'];?></option>
											<option>Pilih</option>
											<?php
                    $tampilr=$koneksi->query("select * from pengawas");
                
                     $no=0;
                     while($datar=mysqli_fetch_array($tampilr))
                    { $no++; ?>
											<option value="<?= $datat['id_pengawas'];?>"><?= $datar['nama'];?></option>
										<?php } ?>
										</select>
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Keterangan</label>
									<div class="col-sm-8">
										<textarea name="keterangan" class="form-control1"><?= $data['keterangan'];?></textarea>
									</div>
									
								</div>
								
							
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">UPLOAD Surat Perintah Jalan (PDF)</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="spj" id="" >
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Edit</button>
										
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

if (isset($_POST['simpan'])){

  $spj   = $_FILES['spj']['name'];
  $id_proyek = $_POST['id_proyek'];
        $id_pengawas=addslashes($_POST['id_pengawas']);
        $keterangan=addslashes($_POST['keterangan']);
  if (empty($spj)){
    $koneksi->query("UPDATE spj SET 
                    id_proyek='$id_proyek',
        			id_pengawas='$id_pengawas',
        			keterangan='$keterangan'
                    WHERE id_spj = '$_POST[id]'");
}else{


    $hapus1= $koneksi->query("select * from spj where id_spj='$_POST[id]'");
    $tanggal_spj1=mysqli_fetch_array($hapus1,MYSQLI_BOTH);
    $lokasi1=$tanggal_spj1['spj'];
    $hapus_spj="../img/spj/$lokasi1";
    unlink($hapus_spj);
    move_uploaded_file($_FILES['spj']['tmp_name'],'../img/spj/'.$spj);
    $koneksi->query("UPDATE spj SET 
                    id_proyek='$id_proyek',
        			id_pengawas='$id_pengawas',
        			keterangan='$keterangan',
                    spj  = '$spj'
                    WHERE id_spj= '$_POST[id]'");
  }
 
  	echo"<script>alert(' Selamat Data SPJ Berhasil di Edit!!!'); window.location = '?page=page/spj/index'</script>";
  

    }



 ?>