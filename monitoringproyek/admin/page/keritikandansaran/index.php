<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Kritikan dan Saran</h4>
					
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Nama </center></th>
                        <th><center>Email </center></th>
                        <th><center>Subjek </center></th>
                        <th><center>Tanggal </center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                    
                    $tampil=$koneksi->query("select * from keritikandansaran order by id_keritikan desc");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><center><?= $data['nama']; ?></center></td>
                    <td><center><?= $data['email']; ?></a></center></td>
                    <td><center><?= $data['subjek']; ?></a></center></td>
                    <td><center><?= $data['tgl']; ?> - <?= $data['jam']; ?></a></center></td>

                    
                    <td>
                    	<center>
                    		<div id="thanks">
                    			<a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Admin" href="?page=page/keritikandansaran/edit&id=<?= $data['id_keritikan']; ?>">
                    				<i class="fa fa-columns" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Apakah anda yakin menghapus data ini?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Admin" href="?page=page/keritikandansaran/hapus&id=<?= $data['id_keritikan']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>