<?php
if (!defined('WEB_ROOT')) {
	header('Location: ../index.php');
	exit;
}

$self = WEB_ROOT . 'index.php';

	function word_split($str,$words=15) {
		$arr = preg_split("/[\s]+/", $str,$words+1);
		$arr = array_slice($arr,0,$words);
		return join(' ',$arr);
	}			
		
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>One Home</title>

    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/' . $sett_data['directory'] . '/include/global-css.php'); ?>
	<?php include ($_SERVER["DOCUMENT_ROOT"] . '/' . $sett_data['directory'] . '/include/misc-js.php'); ?>	

</head>

<body>
	



	<body data-spy="scroll" data-target="#navbar" data-offset="60">
	<?php
		if (isset($_GET['mail'])) {
			$pageId1 = $_GET['mail'];
		} else {
			$pageId1 = '';
		}
?>
<style>
	@media (max-width: 600px) {
		.loader{
			margin-right: 47.5%;
		}
	}
</style>
		<div id='preloader' >
            <div class='loader'>
				<?php 
				if($pageId1 == 'success') {
					?>
						<img src="img/infinite-spinner.svg" width="100" alt="">
					<?php
				}elseif($pageId1 == 'failed') {
					?>
						<img src="img/infinity-red.svg" width="100" alt="">
					<?php
				}else{
					?>
						<img src="img/infinite-spinner.svg" width="100" alt="">
					<?php
				}
				?>
                
            </div>
        </div><!-- Preloader -->

		<!-- header -->
		<?php include ($_SERVER["DOCUMENT_ROOT"] . '/' . $sett_data['directory'] . '/include/header.php'); ?>
		<!-- /header -->
        <!-- Content -->
        <?php require_once $content; ?>
        <!-- /Content -->

		<!-- footer -->
			<?php include ($_SERVER["DOCUMENT_ROOT"] . '/' . $sett_data['directory'] . '/include/footer.php'); ?>
		<!--/footer-->

		<!-- page -->
		
		<div id="toTop"></div><!-- Back to top button -->
		<script>
			// Set the target date and time here
			const targetDate = new Date('2024-10-17T09:00:00').getTime();

			function updateTimer() {
				const now = new Date().getTime();
				const distance = targetDate - now;

				if (distance < 0) {
					document.getElementById("timer").innerHTML = "Countdown has finished!";
					return;
				}

				const seconds = Math.floor((distance / 1000) % 60);
				const minutes = Math.floor((distance / 1000 / 60) % 60);
				const hours = Math.floor((distance / 1000 / 60 / 60) % 24);
				const days = Math.floor((distance / 1000 / 60 / 60 / 24) % 30);
				const months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));

				document.getElementById("months").innerText = months;
				document.getElementById("days").innerText = days;
				document.getElementById("hours").innerText = hours;
				document.getElementById("minutes").innerText = minutes;
				document.getElementById("seconds").innerText = seconds;
			}

			setInterval(updateTimer, 1000);

		</script>
	
	<?php include ($_SERVER["DOCUMENT_ROOT"] . '/' . $sett_data['directory'] . '/include/global-js.php'); ?>
	</body>


</body>
</html>