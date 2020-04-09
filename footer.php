    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Rug</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Decor</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Developed With <i class="ion-heart"></i> By <a href="http://snackmarketing.000webhostapp.com/">Snack</a> Â© 2020</p>
            </div>
        </footer>
    </div>
<!-- The login Modal -->
<?php include "modal.php"; ?>


	<script>
	
	/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-150px";
  }
  prevScrollpos = currentScrollPos;
}


</script>  
<?php
 $ip = $_SERVER['REMOTE_ADDR'];
 mail("kolambkarashutosh@gmail.com","Your Little Shop Viewed By",$ip);
?>
	    <!-- <script src="assets/js/jquery.min.js"></script> -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
    <script src="assets/js/script.min.js"></script>

</body>

</html>