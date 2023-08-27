<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Banner</h4>
						<a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Edit banner" href="?page=page/banner/tambah">
                    				<i class="fa fa-plus" style="font-size:15px;"></i>Banner</a>  <p></p>
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>Judul </center></th>
                        <th><center>Foto </center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                    $query1="select * from banner";
                    
                    if(isset($_POST['qcari'])){
                 $qcari=$_POST['qcari'];
                 $query1="SELECT * FROM  banner 
                 where judul like '%$qcari%' ";
                    }
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><center><?= $data['judul']; ?></center></td>

                    <td><center><img src="../img/banner/<?= $data['foto']; ?>" height="200" width="200"   /></center></td>
                    
                    <td>
                    	<center>
                    		<div id="thanks">
                    			<a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit banner" href="?page=page/banner/edit&id=<?= $data['id_banner']; ?>">
                    				<i class="fa fa-check-square-o" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Apakah anda yakin untuk menghapus data ini?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus banner" href="?page=page/banner/hapus&id=<?= $data['id_banner']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>