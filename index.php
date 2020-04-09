<?php include "header.php";?>
<?php include "home_slider.php";?>
<?php include "category_section.php";?>
<?php include "about.php";?>
<?php include "contactus.php";?>  
<?php include "testimonial.php";?>  
<?php include "footer.php";?>
    <!--<script src="assets/js/insta.js"></script>-->
<script>
// Initialize google maps
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(19.0191945,72.8338114); 
  var mapOptions = {center: myCenter, zoom: 19};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content: "3/25 Keni Building<br>S.K. Bole Road<br>Dadar West Mumbai,<br>Maharashtra 400028 India"
  });
  infowindow.open(map,marker);
}
</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzMRbt5-AnHCgbMCR31etnBDZ0I8gSqaw&callback=myMap"></script>