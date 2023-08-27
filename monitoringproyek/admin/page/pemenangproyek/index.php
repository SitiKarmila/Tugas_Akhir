 <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Pemenang Proyek</h4>

                       
            <div class="Responsive">
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                         <td>No</td>
                            <td>Nama Proyek</td>
                            <td>Nama Kontraktor</td>
                            <td>Anggaran</td>
                            <td>Harga Penawaran</td>
                            <td>Tanggal Pengjuan</td>
                            <td>Tgl Mulai</td>
                            <td>Tgl Selesai</td>
                            <td>Laporan</td>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                        <?php
                  
                    $tampi=$koneksi->query("select * from pengajuanproyek where status='Diterima' order by hargapenawaran asc");
                
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
                            <td><?= $kontraktor['namapt'];?></td>
                            <td>Rp. <?= number_format($data['dana'],0,",",".");?></td>
                            <td>Rp. <?= number_format($dat['hargapenawaran'],0,",",".");?></td>
                            <td><?= $dat['tgl_pengajuan'];?></td>
                            <td><?= $dat['tgl_mulai']; ?></td>
                            <td><?= $dat['tgl_selesai']; ?></td>
                             <td>
                    	<center>
                    		<div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit proyek" href="?page=page/laporanproyek/index&id=<?= $dat['id_pengajuanproyek']; ?>">
                    				<i class="fa fa-book" style="font-size:15px;"></i></a></div></center></td></tr>

                        <?php   
              } 
              ?>
						</table> 
            </div>
					</div>
				</div>
			</div>
		</div>