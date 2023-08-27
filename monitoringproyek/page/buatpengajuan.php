 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Buat Pengajuan</h1>
           
        </div>
    </div>


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            
           
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="" method="POST" enctype="multipart/form-data">
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
                                <input type="submit" name="simpan" class="btn btn-primary py-3 px-5" value="Kirim">
                            </div>
                        </div>
                    </form>
                </div>
            <
        </div>
    </div>
    <!-- Contact End -->

