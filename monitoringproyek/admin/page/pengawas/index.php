<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Pengawas Proyek</h4>
						<a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Edit pengawas" href="?page=page/pengawas/tambah">
                    				<i class="fa fa-plus" style="font-size:15px;"></i>Pengawas</a>  <p></p>
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Nama </center></th>
                        <th><center>NIP </center></th>
                        <th><center>No Hp </center></th>
                        <th><center>Kategori Pengawas Proyek </center></th>
                        <th><center>Foto </center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                    $query1="select * from pengawas as p,kategoriproyek as k where p.id_kategori=k.id_kategori";
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><center><?= $data['nama']; ?></center></td>
                    <td><center><?= $data['nip']; ?></a></center></td>
                    <td><center><?= $data['no_hp']; ?></a></center></td>
                    <td><center><?= $data['nama_kategori']; ?></a></center></td>

                    <td><center><img src="../img/pengawas/<?= $data['foto']; ?>"class="img-circle" height="80" width="75" style="border: 3px solid #888;"  /></center></td>
                    
                    <td>
                    	<center>
                    		<div id="thanks">
                    			<a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit pengawas" href="?page=page/pengawas/edit&id=<?= $data['id_pengawas']; ?>">
                    				<i class="fa fa-check-square-o" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Apakah Anda yakin untuk menghapus data ini?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus pengawas" href="?page=page/pengawas/hapus&id=<?= $data['id_pengawas']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>