
<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'monitoringproyek';
$koneksi = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
<!-- end -->