<?php
if (!defined('WEB_ROOT')) {
	header('Location: ../index.php');
	exit;
}
?>
<!-- jQuery Lib -->
<script src="<?php echo WEB_ROOT; ?>js/vendor/jquery-1.12.4.min.js"></script>
		<!-- waypoints js -->
		<script src="<?php echo WEB_ROOT; ?>js/vendor/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo WEB_ROOT; ?>js/vendor/bootstrap.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="<?php echo WEB_ROOT; ?>js/vendor/owl.carousel.min.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="<?php echo WEB_ROOT; ?>js/vendor/smooth-scroll.min.js"></script>
		<!-- venobox JS -->
		<script src="<?php echo WEB_ROOT; ?>js/vendor/venobox.min.js"></script>
		<!-- Counterup JS -->
		<script src="<?php echo WEB_ROOT; ?>js/vendor/jquery.counterup.min.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="<?php echo WEB_ROOT; ?>js/vendor/jquery.ajaxchimp.min.js"></script>
        <!-- Polygon JS -->
	    <script src="<?php echo WEB_ROOT; ?>js/vendor/fss.js"></script>
	    <script src="<?php echo WEB_ROOT; ?>js/vendor/polygon-app.js"></script>
        <!-- wow JS -->
        <script src="<?php echo WEB_ROOT; ?>js/vendor/wow.min.js"></script>
		<!-- Main JS -->
		<script src="<?php echo WEB_ROOT; ?>js/main.js"></script>
		
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/flipdown/flipdown.js"></script>

		<script src="<?php echo WEB_ROOT; ?>ph-address-selector.js"></script>

		<script src="https://www.google.com/recaptcha/api.js?render=6LfaaVkqAAAAAOwKZTEsCxP8Lx6S6D9rPGLuwmPH"></script>


		<!-- partial -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src='https://momentjs.com/downloads/moment.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js'></script><script  src="<?php echo WEB_ROOT; ?>js/script.js"></script>

		<script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openModalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

		


