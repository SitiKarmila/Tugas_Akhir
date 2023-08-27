<?php include"tampilan/banner.php";?>
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/kontak/<?= $profil['logo'];?>" alt="">
                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Tentang Kami</h1>
                    <p class="mb-4">
                        <?= $profil['tentangkami'];?>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Features Start -->
    


    <!-- Video Modal Start -->

    <!-- Video Modal End -->




    <!-- Project Start -->
    
    <!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div >
            <div class="container-fluid bg-dark pt-5 my-5 px-0" class="text-center mx-auto  wow fadeIn" data-wow-delay="0.1s" style="max-width: 1700px;">
                <h1 class="display-5 mb-5 text-white mb-5" style="text-align: center;"> Kontraktor</h1>
            </div>
            <div class="row g-4">
                <?php
                    $query1="SELECT * FROM kontraktor ";
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/logo/<?= $data['logo']; ?>" style="height: 390px;" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5><?= $data['namapt']; ?></h5>
                                <span class="text-primary"></span>
                                <div class="team-social">
                                   <h5>Direktur :<?= $data['namadirektur']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
            </div>
        </div>
    </div>
    <!-- Team End -->
