 <?php  $query1="select * from profil where id_profil='1'";
$tampil=$koneksi->query( $query1);
$data=mysqli_fetch_array($tampil);
?> 
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class="row">
						<div class="form-three widget-shadow">
						<h3 class="title1">Tentang Kami :</h3>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="simpan">
								<input type="hidden" name="id" value="<?= $data['id_profil'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tentang Kami</label>
									<div class="col-sm-8">
										<textarea type="text" id="idsas" class="form-control1" name="tentangkami" ><?= $data['tentangkami'];?></textarea>
									
									
						
  <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace( 'idsas',{height: 200} );
    </script>
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8"><button type="submit" class="btn btn-info btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i>Simpan</button>
										<a  href="?page=page/kontak/index"type="button" class="btn btn-warning btn-flat btn-pri btn- d"><i class="fa fa-mail-reply" aria-hidden="true"></i>Batal</a>
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

    $koneksi->query("UPDATE profil SET 
                    tentangkami     = '$_POST[tentangkami]'
                    WHERE id_profil = '$_POST[id]'");

echo"<script>alert('Selamat Data Berhasil di Ubah!!!'); window.location = '?page=page/kontak/tentangkami'</script>";
    }



 ?>