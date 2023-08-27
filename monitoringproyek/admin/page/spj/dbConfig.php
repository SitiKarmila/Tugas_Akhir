<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'monitoringproyek';
$db = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>