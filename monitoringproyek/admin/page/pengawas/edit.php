 <?php  $query1="select * from pengawas as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.id_pengawas='$_GET[id]'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1"> <?php if($_SESSION['level']=='Pengawas'){ echo" Update Profil";}else{ echo "Edit Data pengawas :";}?></h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_pengawas'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama" value="<?= $data['nama'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">NIP</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nip" value="<?= $data['nip'];?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Pendidikan</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="pddk" value="<?= $data['pddk'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="alamat" value="<?= $data['alamat'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kategori Pengawas Proyek</label>
									<div class="col-sm-8">
										<select name="id_kategori" class="form-control1" type="text">
											<option value="<?= $data['id_kategori'];?>"><?= $data['nama_kategori'];?></option>
											<?php
                    $tampil=$koneksi->query("select * from Kategoriproyek");
                
                     $no=0;
                     while($dat=mysqli_fetch_array($tampil))
                    { $no++;
                    if($dat['id_kategori']==$data['id_kategori']){}else{ ?>
											<option value="<?= $data['id_kategori'];?>"><?= $dat['nama_kategori'];?></option>
										<?php } }?>
										</select>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="username" value="<?= $data['username'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="password" value="<?= $data['password'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No Hp</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nohp" value="<?= $data['no_hp'];?>" >
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Foto</label>
									<div class="col-sm-8">
										<img src="../img/pengawas/<?= $data['foto'];?>" width="300px">
										<input type="file" class="form-control1" name="foto">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<?php if($_SESSION['level']=='Pengawas'){}else{?>
										<a  href="?page=page/pengawas/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a><?php } ?>
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

  $foto   = $_FILES['foto']['name'];
  $pp = $_POST['password'];
        $nama=addslashes($_POST['nama']);
        $nip=addslashes($_POST['nip']);
        $pddk=addslashes($_POST['pddk']);
        $alamat=addslashes($_POST['alamat']);
        $id_kategori=addslashes($_POST['id_kategori']);

$nohp = $_POST['nohp'];
        $username=addslashes($_POST['username']);
  if (empty($foto)){
    $koneksi->query("UPDATE pengawas SET 
                    nama='$nama',
        			nip='$nip',
        			id_kategori='$id_kategori',
        			pddk='$pddk',
        			alamat='$alamat',
        			username='$username',
        			no_hp='$nohp',
        			password='$pp'
                    WHERE id_pengawas = '$_POST[id]'");
}else{


    $hapus1= $koneksi->query("select * from pengawas where id_pengawas='$_POST[id]'");
    $tanggal_foto1=mysqli_fetch_array($hapus1,MYSQLI_BOTH);
    $lokasi1=$tanggal_foto1['foto'];
    $hapus_foto="../img/pengawas/$lokasi1";
    unlink($hapus_foto);
    move_uploaded_file($_FILES['foto']['tmp_name'],'../img/pengawas/'.$foto);
    $koneksi->query("UPDATE pengawas SET 
                    nama='$nama',
        			nip='$nip',
        			id_kategori='$id_kategori',
        			pddk='$pddk',
        			alamat='$alamat',
        			username='$username',
        			no_hp='$nohp',
        			password='$pp',
                    foto  = '$foto'
                    WHERE id_pengawas= '$_POST[id]'");
  }
  if($_SESSION['level']=='Pengawas'){
  	echo"<script>alert('Selamat Data Berhasil di Edit!!!'); window.location = '?page=page/pengawas/edit&id=$_SESSION[id]'</script>";

  }else{
  	echo"<script>alert('Selamat Data Berhasil di Edit!!!'); window.location = '?page=page/pengawas/index'</script>";
  }

    }



 ?>