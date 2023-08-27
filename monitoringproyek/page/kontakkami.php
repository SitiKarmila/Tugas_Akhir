 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Kontak Kami</h1>
           
        </div>
    </div>


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-phone fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">No Telepon/WA</h4>
                        <p class="mb-2">TLP: <?= $profil['telpon'];?></p>
                        <p class="mb-4">WA : <?= $profil['wa'];?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-envelope fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Email </h4>
                        <p class="mb-2"><?= $profil['email'];?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-map fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Alamat</h4>
                        <p class="mb-2"><?= $profil['alamat'];?></p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                   
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <center><img class="w-10"
                        src="img/kontak/<?= $profil['logo'];?>"
                        frameborder="0" style="height: 350px; width=:150px;border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></center>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="?page=page/simpankeritikan" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="nama">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subjek">
                                    <label for="subject">Subjek</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="keritikan"id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Keritikan dan Saran</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" name="simpankeritikan" class="btn btn-primary py-3 px-5" value="Kirim">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


