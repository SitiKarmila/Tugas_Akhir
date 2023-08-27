<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Data Proyek</h4>
						 <?php if($_SESSION['level']=='Pengawas'){}else{?> 
              <a class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Tambah Proyek" href="?page=page/proyek/tambah">
                            <i class="fa fa-plus" style="font-size:15px;"></i>Proyek</a>  <p></p><?php }?>
						<table class="table table-bordered"> 
							<thead>
                      <tr>
                        <th><center>No</center></th>
                        <th><center>Nama Proyek </center></th>
                        <th><center>Status Proyek </center></th>
                        <th><center>Kontraktor </center></th>
                        <th><center>Pengawas Proyek</center></th>
                        <th><center>Anggaran </center></th>
                        <th><center>Tahun Anggaran </center></th>
                        <th><center>Kategori </center></th>
                        <th><center>RAB </center></th>
                        <th><center>Design Proyek</center></th>
                        <th><center>Surat Perintah Kerja </center></th>
                        <th><center>PPK dan PPTK</center></th>
                       <?php if($_SESSION['level']=='Pengawas'){}else{?>  <th><center>Aksi</center></th><?php }?>
                      </tr>
                  </thead>
                   
                    <tbody>
                       
                       <?php
                     
                    $query1="select * from proyek as p,pengawas as k where p.id_pengawas=k.id_pengawas";
                    
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; 
$tampila=$koneksi->query("select * from kontraktor where id_kontraktor='$data[id_kontraktor]'");
$kontraktor=mysqli_fetch_array($tampila);

$kat=$koneksi->query("select * from kategoriproyek where id_kategori='$data[id_kategori]'");
$kategori=mysqli_fetch_array($kat);
$tampilan=$koneksi->query("select * from pengawas where id_pengawas='$data[id_pengawas]'");
$pengawas=mysqli_fetch_array($tampilan);
 $level_dri=$koneksi->query("SELECT * FROM karyawan where id_proyek='$data[id_proyek]'");
     $p=mysqli_num_rows($level_dri);
?>
                    <tr>
                    <td><center><?= $no;?></center></td>
                    <td><left><?= $data['namaproyek']; ?></left></td>
                    <td><center><?= $data['status']; ?><?php if($_SESSION['level']=='Pengawas'){?><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit proyek" href="?page=page/proyek/editstatus&id=<?= $data['id_proyek']; ?>">
                                    <i class="fa fa-check-square-o" style="font-size:15px;"></i></a> <?php }?></center></td>
                    <td><left><?= $kontraktor['namapt']; ?></left></td>
                    <td><left>NIP.<?= $pengawas['nip']; ?> - <?= $pengawas['nama']; ?></left></td>
                    <td><left>Rp. <?= number_format($data['dana'],0,",",".");?></left></td>
                    <td><center><?= $data['tahunanggaran']; ?></center></td>

                    <td><center><?= $kategori['nama_kategori']; ?></center></td>
                    <td><center><a href="../img/rab/<?= $data['rab']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>
                    <td><center><a href="../img/proyek/<?= $data['foto']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>
                    <td><center><a href="../img/spk/<?= $data['spk']; ?>" target="_BLANK" class="btn btn-primary"  /><i class="fa fa-cloud-download"></i></a></center></td>
                    <td><center><?= $p;?> Orang</center></td>
                    
                   <?php if($_SESSION['level']=='Pengawas'){}else{?>  <td>
                    	<center>
                    		<div id="thanks">
                    			<a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit proyek" href="?page=page/proyek/edit&id=<?= $data['id_proyek']; ?>">
                    				<i class="fa fa-check-square-o" style="font-size:15px;"></i></a>  
                        <a onclick="return confirm ('Apakah anda yakin untuk menghapus data ini?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus proyek" href="?page=page/proyek/hapus&id=<?= $data['id_proyek']; ?>"><span class="fa fa-trash-o" style="font-size:15px;"></a></div></center></td><?php } ?></tr>

                        <?php   
              } 
              ?>
						</table> 
					</div>
				</div>
			</div>
		</div>