<?php error_reporting(0);
session_start();
include"config/config.php";
include"config/waktu.php";
include"config/tgl_indo.php";
  $query1a="select * from profil where id_profil='1'";
$tampila=$koneksi->query( $query1a);
$profil=mysqli_fetch_array($tampila)

?>
<!DOCTYPE html>
<html lang="en">

<?php include"tampilan/head.php";?>

<body>
    
<?php include"tampilan/menu.php";?>
<?php include"page/modal.php";?>

<?php 
     if (isset($_GET['page'])) {
                $page = $_GET['page'];
                $file = "$page.php";

                if (!file_exists($file)) {
                    include ("page/home.php");
                }else{
                    include ("$page.php");
                }
            }else{
                include ("page/home.php");
            }
            include"tampilan/footer.php";
      
    ?>


    <!-- JavaScript Libraries -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

   <script src="admin/js/bootstrap.js"> </script>
</body>

</html>