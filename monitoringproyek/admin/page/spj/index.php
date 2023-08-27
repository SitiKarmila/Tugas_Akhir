<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Surat Perintah Jalan</h4>
						<a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Tambah Proyek" href="?page=page/spj/tambah">
                            <i class="fa fa-plus" style="font-size:15px;"></i>Surat Perintah Jalan</a>  <p></p>
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Nama Pengawas Proyek </center></th>
                        <th><center>Nama Proyek </center></th>
                        <th><center>Surat Perintah Jalan</center></th>
                        <th><center>Keterangan </center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                   
                    $tampil=$koneksi->query("select * from spj as p, pengawas as k where p.id_pengawas=k.id_pengawas");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                        
                    { $no++;
                        $tampil1=$koneksi->query("select * from proyek where id_proyek='$data[id_proyek]'");
                $proyek=mysqli_fetch_array($tampil1);
                     ?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><center><?= $data['nama']; ?></center></td>
                    <td><center><?= $proyek['namaproyek']; ?></a></center></td>
                    
                    <td><center><center><a href="../img/spj/<?= $data['spj']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></center></td>
                    <td><center><?= $data['keterangan']; ?></a></center></td>

                    
                    
                    <td>
                    	<center>
                    		<div id="thanks">
                    			<a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit pengawas" href="?page=page/spj/edit&id=<?= $data['id_spj']; ?>">
                    				<i class="fa fa-check-square-o" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Apakah anda yakin menghapus data SPJ ini ?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus SPJ" href="?page=page/spj/hapus&id=<?= $data['id_spj']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>