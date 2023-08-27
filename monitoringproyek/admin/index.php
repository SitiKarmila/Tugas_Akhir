<?php //error_reporting(0);
session_start();
include"../config/config.php";?>
<!DOCTYPE HTML>
<html>
<head>
<title>LOGIN ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body >

		<!--left-fixed -navigation-->		
		<!-- header-starts -->
	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">Login</h2>
				<div class="sign-up-row widget-shadow">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="sign-u">
								<input type="text" name="username" placeholder="Username" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="password"  name="password"placeholder="Password" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<select type="text" name="level" class="form-control1" required="">
									<option value="">Pilih Level</option>
									<option value="Admin">Admin</option>
									<option value="Pengawas">Pengawas</option>
								</select>
						<div class="clearfix"> </div>
					</div>
					
					
						<div class="clearfix"> </div>
					<div class="sub_home">
							<input type="submit"  name="login" value="Login">
						<div class="clearfix"> </div>
					</div>
					<div class="registration">
					
					</div>
				</form>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2023 Monitoring Proyek| Design by <a href="" target="_blank">Karmila</a></p>		</div>
        <!--//footer-->
	
   
</body>
</html>
<?php 

if (isset($_POST['login'])){
    //error_reporting(0);
    $username = $_POST['username'];
  $password = $_POST['password'];
$level= $_POST['level'];
if($level=="Pengawas"){
   $log =  $koneksi->query( "SELECT * FROM pengawas WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($log); 
if(mysqli_num_rows($log) == 1){
    session_start();
    $_SESSION['id'] = $data['id_pengawas'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['gambar'] = $data['foto'];
    $_SESSION['nib'] = $data['nib'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['level'] = $level;
    echo "<script>alert('Login berhasil')</script>";
    echo "<meta http-equiv='refresh' content='0; url=beranda.php'></script>";

  }else{
    echo "<script>alert('Login gagal, coba ulangi kembali.')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'></script>";
  } 
}else{
    $log =  $koneksi->query( "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($log);

  if(mysqli_num_rows($log) == 1){
    session_start();
    $_SESSION['id'] = $data['id_admin'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['gambar'] = $data['gambar'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    $_SESSION['level'] = $level;
    echo "<script>alert('Login berhasil')</script>";
    echo "<meta http-equiv='refresh' content='0; url=beranda.php'></script>";

  }else{
    echo "<script>alert('Login gagal, coba ulangi kembali.')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'></script>";
  } 
}
   
  
  

  


}

?>