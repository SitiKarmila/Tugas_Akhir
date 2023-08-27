 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">DETAIL PENGAWAS</h1>
           
        </div>
    </div>
     <?php
                    $query1="select * from pengawas as p,kategoriproyek as k where p.id_kategori=k.id_kategori AND p.id_pengawas='$_GET[id]'";
                    $tampil=$koneksi->query( $query1);
                $data=mysqli_fetch_array($tampil);?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        
                            <img class="img-fluid" src="img/pengawas/<?= $data['foto']; ?>">
                       
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?= $data['nama']; ?></h1>
                   
                    <div class="d-flex align-items-center mb-4">
                       
                        <div class="ms-4">
                             <p><i class="fa fa-check text-primary me-2"></i>Pendidikan <?= $data['pddk']; ?></p>
                             <p><i class="fa fa-check text-primary me-2"></i>NIP <?= $data['nip']; ?></p>
                            <p><i class="fa fa-check text-primary me-2"></i>Pengawas Proyek <?= $data['nama_kategori']; ?></p>
                            <p><i class="fa fa-check text-primary me-2"></i>Alamat <?= $data['alamat']; ?></p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone" style="font-size:28px; color: white;"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0"><?= $data['no_hp']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>