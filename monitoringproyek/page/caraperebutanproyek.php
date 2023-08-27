 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(to right, rgba(2, 36, 91, 1) 0%, rgba(2, 36, 91, 0) 100%), url(img/kontak/<?= $profil['logo'];?>) center center no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Cara Perebutan Proyek</h1>
           
        </div>
    </div>
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/kontak/<?= $profil['cover'];?>" alt="">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="<?= $profil['embed'];?>" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Cara Perebutan Proyek</h1>
                    <p class="mb-4">
                        <?= $profil['caraperebutanproyek'];?>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Features Start -->
    


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Cara Perebutan Proyek</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="<?= $profil['embed'];?>" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->




    
    <!-- Team End -->
