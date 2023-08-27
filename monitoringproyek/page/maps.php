<?php
$koneksi = new mysqli ("localhost","root","","monitoringproyek");
?>
 

<!-- end -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Membuat Peta</title>

   
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7IZt-36CgqSGDFK8pChUdQXFyKIhpMBY&sensor=true" type="text/javascript"></script>
</head>
<body>

<script>    
    var marker;
    function initialize() {  
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);      
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database
        <?php
            $query = $koneksi->query("SELECT * FROM coba");
            while ($data = mysqli_fetch_array($query)) {
                $nama    =$data['nama'];
                $lat    =$data['latitude'];
                $lon    =$data['longitude'];
                echo ("addMarker($lat, $lon, '$nama');\n");                        
            }    
        ?> 
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="map-canvas" class="col-sm-12" style="height:380px;"></div>
</body>
</html>