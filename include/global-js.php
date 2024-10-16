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

		<script src="https://www.google.com/recaptcha/api.js?render=6LfaaVkqAAAAAOwKZTEsCxP8Lx6S6D9rPGLuwmPH"></script>


		<!-- partial -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src='https://momentjs.com/downloads/moment.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js'></script><script  src="<?php echo WEB_ROOT; ?>js/script.js"></script>

		<script>
    // First Modal
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Second Modal
    var modal2 = document.getElementById("myModal2");
    var btn2 = document.getElementById("openModalBtn2"); // Independent Service Provider button
    var span2 = document.getElementsByClassName("close2")[0];

    btn2.onclick = function() {
        modal2.style.display = "block";
    }

    span2.onclick = function() {
        modal2.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }

    // Transition between first and second choices
    var serviceProviderBtn = document.getElementById("serviceProviderBtn");
    var firstChoices = document.getElementById("firstChoices");
    var secondChoices = document.getElementById("secondChoices");
    var goBackBtn = document.getElementById("goBackBtn");

    // Show the second choices (Independent/Company)
    serviceProviderBtn.onclick = function() {
        firstChoices.style.display = "none";
        secondChoices.style.display = "block";
    }

    // Go back to first choices
    goBackBtn.onclick = function() {
        secondChoices.style.display = "none";
        firstChoices.style.display = "block";
    }
</script>



		


