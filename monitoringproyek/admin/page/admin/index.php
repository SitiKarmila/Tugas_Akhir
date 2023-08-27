<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Admin</h4>
						<a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Edit Admin" href="?page=page/admin/tambah">
                    				<i class="fa fa-plus" style="font-size:15px;"></i>Admin</a>  <p></p>
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Nama </center></th>
                        <th><center>Username </center></th>
                        <th><center>No Hp </center></th>
                        <th><center>Foto </center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                    $query1="select * from admin";
                    
                    if(isset($_POST['qcari'])){
                 $qcari=$_POST['qcari'];
                 $query1="SELECT * FROM  admin 
                 where nama like '%$qcari%'
                 or username like '%$qcari%'  ";
                    }
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><center><?= $data['nama']; ?></center></td>
                    <td><center><?= $data['username']; ?></a></center></td>
                    <td><center><?= $data['nohp']; ?></a></center></td>

                    <td><center><img src="../img/admin/<?= $data['gambar']; ?>"class="img-circle" height="80" width="75" style="border: 3px solid #888;"  /></center></td>
                    
                    <td>
                    	<center>
                    		<div id="thanks">
                    			<a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Admin" href="?page=page/admin/edit&id=<?= $data['id_admin']; ?>">
                    				<i class="fa fa-check-square-o" style="font-size:15px;"></i></a>  
                        </div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>