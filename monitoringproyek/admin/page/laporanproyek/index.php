\
 <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4><center>Laporan Monitoring<center></h4>
                        <?php if($_SESSION['level']=='Admin'){}else{?> 
              <a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Tambah Proyek" href="?page=page/laporanproyek/tambah">
                            <i class="fa fa-plus" style="font-size:15px;"></i>Laporan Monitoring</a> <a class="btn btn-warning" data-placement="bottom" data-toggle="tooltip" title="Tambah Proyek" href="../img/formatlaporan/Format_Laporan_pengawasan.docx" target="_BLANK">
                            <i class="fa fa-download" style="font-size:15px;"></i>Unduh Format Laporan Disini</a> <p></p>
                        <?php }?>
            <div class="Responsive">
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                         <td>No</td>
                            <td>Nama Proyek</td>
                            <td>Dokumen Laporan</td>
                            <td>Pengawas Proyek</td>

                            <td>Tanggal Monitoring</td>
                            <td>Persentase Pekerjaan</td>
                            <td>Anggaran Monitoring</td>
                            <?php if($_SESSION['level']=='Admin'){}else{?>
                            <td>Aksi</td><?php }?>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                        <?php
                   $p=mysqli_num_rows($koneksi->query("select * from laporanproyek where id_pengawas='$_SESSION[id]'"));
                
                     $no=0;
                     $tampi=$koneksi->query("select * from laporanproyek where id_pengawas='$_SESSION[id]'");
                     while($dat=mysqli_fetch_array($tampi))
                    {
    
                   

                     
                     $tampill=$koneksi->query("select * from proyek where id_proyek='$dat[id_proyek]'");
                     $proyek=mysqli_fetch_array($tampill);
                     $tampilan=$koneksi->query("select * from pengawas where id_pengawas='$dat[id_pengawas]'");
                     $pengawas=mysqli_fetch_array($tampilan);
                
                    

                     $no++; ?>
                    <tr>
                    
                            <td><?= $no;?></td>
                            <td><?= $proyek['namaproyek'];?></td>
                            <td><a href="../img/dokumen/<?= $dat['dokumen']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></td>
                           
                            <td rowspan="<?= $p;?>"><?= $pengawas['nama'];?></td>
                            <td rowspan="<?= $p;?>"><?= tgl_indonesia($dat['tgl_pengawasan']);?></td>
                            <td rowspan="<?= $p;?>"><?= $dat['persentase'];?></td>
                            <td rowspan="<?= $p;?>">Rp. <?= number_format($dat['anggarankeluar'],0,",",".");?></td>
                        
                          <?php if($_SESSION['level']=='Admin'){}else{?>  
                    <td>
                    	<center>
                    		<div id="thanks">
                    			
                        <center>
                            <div id="thanks">
                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit proyek" href="?page=page/laporanproyek/edit&id=<?= $dat['id_laporan']; ?>">
                                    <i class="fa fa-check-square-o" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Apakah anda yakin untuk menghapus data ini?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus proyek" href="?page=page/laporanproyek/hapus&id=<?= $dat['id_laporan']; ?>">
                            <span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td><?php } ?>

                        </tr>

                        <?php   
              } 
              ?>
						</table> 
            </div>
					</div>
				</div>
			</div>
		</div>