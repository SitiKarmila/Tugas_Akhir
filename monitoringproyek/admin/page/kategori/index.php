<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Katagori Proyek</h4>
						<a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Edit kategori" href="?page=page/kategori/tambah">
                    				<i class="fa fa-plus" style="font-size:15px;"></i>Katagori Proyek</a>  <p></p>
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Nama Katagori</center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                    $tampil=$koneksi->query("select * from Kategoriproyek");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><center><?= $data['nama_kategori']; ?></center></td>
                    
                    <td>
                    	<center>
                    		<div id="thanks">
                    			<a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit kategori" href="?page=page/kategori/edit&id=<?= $data['id_kategori']; ?>">
                    				<i class="fa fa-check-square-o" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Apakah anda yakin menghapus data ini?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus kategori" href="?page=page/kategori/hapus&id=<?= $data['id_kategori']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>