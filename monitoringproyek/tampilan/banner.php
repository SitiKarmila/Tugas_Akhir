  <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                  <?php
                    $query1="select * from banner";
                   
                    $tampil=$koneksi->query( $query1);
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    {  ?>
                <div class="carousel-item <?php if($no==1){ echo"active";}else{} ?>">
                    <img class="w-100" src="img/banner/<?= $data['foto'];?>" alt="Image" style="width: 200px; height:700px;">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight"></p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight"><?= $data['judul'];?></h1>
                                   
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <?php $no++;};?>
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>