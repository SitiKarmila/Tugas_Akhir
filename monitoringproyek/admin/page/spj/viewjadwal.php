<?php
   include"../config/config.php";
    $json = array();
    $sqlQuery = "SELECT * FROM jadwal ORDER BY id_jadwal ";

    $result = $koneksi->query($sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    
    echo json_encode($eventArray);
?>