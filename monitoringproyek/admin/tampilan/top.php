	<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<?php if($_SESSION['level']=='Pengawas'){}else{?>
					<ul class="nofitications-dropdown"><?php 
             $pa=mysqli_num_rows($koneksi->query("select * from keritikandansaran where status='Baru' ")); ?>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge"><?= $pa;?></span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Kamu Memiliki <?= $pa;?> Keritikan dan Saran Baru</h3>
									</div>
								</li>
								<?php
                    $tampil=$koneksi->query("select * from keritikandansaran where status='Baru' limit 3");
                
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
								<li><a href="?page=page/keritikandansaran/edit&id=<?= $data['id_keritikan'];?>">
								   <div class="user_img"><img src="images/ka.jpg" alt=""></div>
								   <div class="notification_desc">
									<p><?= $data['nama'];?></p>
									<p><span><?= $data['tgl'];?> - <?= $data['jam'];?></span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
							<?php }?>
								<li>
									<div class="notification_bottom">
										<a href="?page=page/keritikandansaran/index">Lihat Semua</a>
									</div> 
								</li>
							</ul>
						</li>
						
					</ul><?php }?>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
			<!-- 
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div>
				 -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="../img/<?php if($_SESSION['level']=='Admin'){ echo"Admin";}else{ echo"pengawas";}?>/<?= $_SESSION['gambar']?>" style="width: 50px;height: 50px;" alt=""> </span> 
									<div class="user-name">
										<p><?= $_SESSION['nama']?></p>
										<span><?php if($_SESSION['level']=='Admin'){ echo"Administrator";}else{ echo"Pengawas";}?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="?page=page/<?php if($_SESSION['level']=='Admin'){ echo"admin";}else{ echo"pengawas";}?>/edit&id=<?= $_SESSION['id']?>"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="?page=page/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>