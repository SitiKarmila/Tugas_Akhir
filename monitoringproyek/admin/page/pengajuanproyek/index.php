 <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Pengajuan Tender <?= $_GET['status']?></h4>

                          <a class="btn btn-warning" data-placement="bottom" data-toggle="tooltip" title="Tambah Proyek" href="?page=page/pengajuanproyek/index&status=Baru">Data Pengajuan Tender Baru</a> 
                          <a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Tambah Proyek" href="?page=page/pengajuanproyek/index&status=Diterima">Data Pengajuan Tender Diterima</a> 

                          <a class="btn btn-danger" data-placement="bottom" data-toggle="tooltip" title="Tambah Proyek" href="?page=page/pengajuanproyek/index&status=Ditolak">Data Pengajuan Tender Ditolak</a><p></p><br>
            <div class="Responsive">
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                         <td>No</td>
                            <td>Nama Proyek</td>
                            <td>Kategori Proyek</td>
                            <td>Nama Kontraktor</td>
                            <td>Anggaran</td>
                            <td>Tahun Anggaran</td>
                            <td>Harga Penawaran</td>
                            <td>Proposal</td>
                            <td>Status</td>
                            <td>Tanggal Pengjuan</td>
                            <td>Konfirmasi</td>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                        <?php
                  
                    $tampi=$koneksi->query("select * from pengajuanproyek where status='$_GET[status]' order by hargapenawaran asc");
                
                     $no=0;
                     while($dat=mysqli_fetch_array($tampi))
                    {
    
                    $tampil=$koneksi->query("select * from proyek as p,kategoriproyek as k where p.id_kategori=k.id_kategori and p.id_proyek='$dat[id_proyek]'");
                     $data=mysqli_fetch_array($tampil);

                     $tampill=$koneksi->query("select * from kontraktor where id_kontraktor='$dat[id_kontraktor]'");
                     $kontraktor=mysqli_fetch_array($tampill);
                
                     $p=mysqli_num_rows($koneksi->query("select * from pengajuanproyek where id_proyek='$data[id_proyek]'"));

                     $no++; ?>
                    <tr>
                    
                            <td><?= $no;?></td>
                            <td><?= $data['namaproyek'];?></td>
                            <td><?= $data['nama_kategori'];?></td>
                            <td><?= $kontraktor['namapt'];?></td>
                            <td>Rp. <?= number_format($data['dana'],0,",",".");?></td>
                            <td><?= $data['tahunanggaran'];?></td>
                            <td>Rp. <?= number_format($dat['hargapenawaran'],0,",",".");?></td>
                            <td><center><a href="../img/proposal/<?= $dat['proposal']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>
                    
                    <td><?= $dat['status']; ?></td>
                    <td><?= $dat['tgl_pengajuan'];?></td>
                    <td>
                    	<center>
                    		<div id="thanks">
                    			<?php if($_GET['status']=='Ditolak'){}else{?><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit proyek" href="?page=page/pengajuanproyek/edit&status=<?= $_GET['status']?>&id=<?= $dat['id_pengajuanproyek']; ?>">
                    				<i class="fa fa-legal" style="font-size:15px;"></i></a><p><br></p><?php }?>

                        <a onclick="return confirm ('Apakah anda yakin menghapus data ini?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus proyek" href="?page=page/pengajuanproyek/hapus&status=<?= $_GET['status']?>&id=<?= $dat['id_pengajuanproyek']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
            </div>
					</div>
				</div>
			</div>
		</div>