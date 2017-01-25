
<!--
<script src="javascripts/jquery.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4ckvSeinjX6o29YwWJR-MjSTIC3ilJ1A "></script>
<script type="text/javascript" src="<?=base_url()?>googlemap/jquery.googlemap.js"></script>
-->


<!DOCTYPE html>
<html>
<body>

    <!--
<h1>My First Google Map</h1>
    -->

<div id="map" style="width:100%;height:500px"></div>

<script>
    
 /*   
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
      //@16.4610081,102.8342285,15z
   // center: new google.maps.LatLng(51.508742,-0.120850),
    center: new google.maps.LatLng(16.4610081,102.8342285,15),
    
    zoom: 5
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
*/

/*
function myMap() {
  var myCenter = new google.maps.LatLng(16.4610081,102.8342285,15);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
*/

/*
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(16.4610081,102.8342285,15); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
*/


/*
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(16.4610081,102.8342285,15); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    icon: "<?=base_url()?>images/pinkball.png"
  });
  marker.setMap(map);
}
*/

/*
function myMap() {
  var myCenter = new google.maps.LatLng(16.4610081,102.8342285,15);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content: "ศูนย์ตะวันฉาย"
  });
  infowindow.open(map,marker);
}
*/


/*
function myMap() {
  var myCenter = new google.maps.LatLng(16.4610081,102.8342285,15);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  // Zoom to 9 when clicking on marker
  google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}
*/



function myMap() {
  var myCenter = new google.maps.LatLng(16.4662136,102.8296161);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 17};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker(
          {
              position:myCenter,
     
               icon: "<?=base_url()?>images/pinkball.png"
  
        });
  marker.setMap(map);

  google.maps.event.addListener(marker,'click',function() {
    var pos = map.getZoom();
    map.setZoom(17);
    map.setCenter(marker.getPosition());
    window.setTimeout(function() {map.setZoom(pos);},9000);
  });
}



/*
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(16.4610081,102.8342285,15),
    zoom: 16,
    zoomControl: true,
    zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL}
  };
  var map = new google.maps.Map(mapCanvas ,mapOptions);
}
*/


</script>





</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</body>
</html>


