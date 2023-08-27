<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Surat Perintah Jalan</h4>
						
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Nama Kontraktor </center></th>
                        <th><center>Nama Proyek </center></th>
                        <th><center>Surat Perintah Jalan</center></th>
                        <th><center>Keterangan </center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                   
                    $tampilan=$koneksi->query("select * from spj where id_pengawas='$_SESSION[id]'");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampilan))
                    { $no++;
                           $pr=$koneksi->query("select * from proyek where id_proyek='$data[id_proyek]'");
                $pro=mysqli_fetch_array($pr);
                        $tampil1=$koneksi->query("select * from kontraktor where id_kontraktor='$pro[id_kontraktor]'");
                $proyek=mysqli_fetch_array($tampil1);
                     ?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><center><?= $proyek['namapt']; ?></center></td>
                    <td><center><?= $pro['namaproyek']; ?></a></center></td>
                    
                    <td><center><center><a href="../img/spj/<?= $data['spj']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></center></td>
                    <td><center><?= $data['keterangan']; ?></center></td>

                    
                    
                    <td><center><?php if($data['status']=="Sudah Konfirmasi"){?>
                        <a class="btn btn-success" href="?page=page/spj/tambahjadwal&id=<?= $data['id_proyek'];?>&id_spj=<?= $data['id_spj'];?>"> Buat Jadwal</a> <?php }else{?>
                                   
                    	
                    		<div id="thanks">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $data['id_spj'];?>">
                                    <input type="hidden" name="id_proyek" value="<?= $data['id_proyek'];?>">
                                    <button type="submit" class="btn btn-warning" name="simpan">Konfirmasi</button>
                                </form></div><?php }?></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>
        <?php

    if (isset ($_POST['simpan'])){
        

        $query_simpan =$koneksi->query( "UPDATE spj SET 
        status='Sudah Konfirmasi'
        WHERE id_spj='$_POST[id]'
        ");
        move_uploaded_file($tmp_name, "../img/spj/".$file_name);

    if ($query_simpan) {
      echo"<script>alert('Selamat Data SPJ Berhasil di Konfirmasi, Silahkan Membuat Jadwal Monitoring !!!'); window.location = '?page=page/spj/tambahjadwal&id=$_POST[id_proyek]&id_spj=$_POST[id]'</script>";
      }else{
      echo"<script>alert('Mohon Maaf Data SPJ Gagal di Konfirmasi!!!'); window.location = '?page=page/spj/indexpegawas'</script>";
    }}?>