 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">TIM PENGAWAS</h1>
           
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
           
            <div class="row g-4">
                <?php
                    $query1="select * from pengawas as p,kategoriproyek as k where p.id_kategori=k.id_kategori";
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <a href="?page=page/detailpengawas&id=<?= $data['id_pengawas']; ?>"><img class="img-fluid" src="img/pengawas/<?= $data['foto']; ?>" style="height: 390px;" alt=""></a>
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                              <a href="?page=page/detailpengawas&id=<?= $data['id_pengawas']; ?>">  <h5><?= $data['nama']; ?></h5></a>
                                <a href="?page=page/detailpengawas&id=<?= $data['id_pengawas']; ?>"><span class="text-primary">Pengawas Proyek  <?= $data['nama_kategori']; ?></span>
                                <div class="team-social">
                                   <h5><?= $data['nama_kategori']; ?></h5>
                                </div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
            </div>
        </div>
    </div>