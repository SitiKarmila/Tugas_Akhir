<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Kontraktor</h4>
						<a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Edit pengawas" href="?page=page/kontraktor/tambah">
                            <i class="fa fa-plus" style="font-size:15px;"></i>Kontraktor</a>  <p></p>
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Nama Perusahaan </center></th>
                        <th><center>Kontak Perusahaan </center></th>
                        <th><center>Alamat </center></th>
                        <th><center>lOGO </center></th>
                        <th><center>Dokumen Izin </center></th>
                        <th><center>Status Operasional </center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                    $query1="select * from kontraktor";
                    
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><center><?= $data['namapt']; ?></center></td>
                    <td><center><?= $data['nohp']; ?></center></td>
                    <td><center><?= $data['alamat']; ?></center></td>
                    <td><img src="../img/logo/<?= $data['logo'];?>" width="200px" height="200px"></td>
                    <td><center><a href="../img/dokumen/<?= $data['dokumen']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>

                    <td><center><?= $data['status']; ?></center></td>
                    <td>
                    	<center>
                    		<div id="thanks">
                    			<a class="btn btn-sm btn-warning" title="Edit kontraktor" href="?page=page/kontraktor/edit&id=<?= $data['id_kontraktor']; ?>">
                            <i class="fa fa-edit" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Apakah anda yakin menghapus data ini?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip"  href="?page=page/kontraktor/hapus&id=<?= $data['id_kontraktor']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>

    