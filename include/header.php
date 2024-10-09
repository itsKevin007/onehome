<?php
if (!defined('WEB_ROOT')) {
	header('Location: ../index.php');
	exit;
}

if (preg_match('/(android|iphone|ipad|ipod|blackberry|iemobile|opera mini)/i', $_SERVER['HTTP_USER_AGENT'])) {
    // If mobile, execute this
    $icon = '<a href="' . WEB_ROOT . '" class="brand logo-dark"><img src="' . WEB_ROOT . 'img/icons/silverlogoh.png" style="width: clamp(150px, 15%, 100px);"></a>';
    $icons = '';
} else {
    // If not mobile, execute this
    $icon = '';
    $icons = '<a href="' . WEB_ROOT . '" class="brand logo-dark"><img src="' . WEB_ROOT . 'img/icons/silverlogoh.png" style="width: clamp(150px, 15%, 100px);"></a>';
}


?>

<header id="header" class="header_section">
	<nav class="navbar">
		<div class="container"><br>

			<a href="<?php echo WEB_ROOT;  ?>" class="brand logo-dark"><img src="<?php echo WEB_ROOT;  ?>img/icons/silverlogoh.png" style="width: clamp(150px, 15%, 100px);"></a>
			
			<!-- <div id="navbar" class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav nav-menu">
					<li class="active"><a data-scroll href="#poly-container">Home<span class="sr-only">(current)</span></a></li>
					<li><a data-scroll href="#features">About Us</a></li>
					<li><a data-scroll href="#screenshots">Faqs</a></li>
					<li><a data-scroll href="#pricing">Subscribe Now</a></li>
				</ul>
			</div> -->
			<!--/.navbar-collapse -->
			
		</div>
	</nav><!-- Navigation Bar --><br>
</header> <!-- Header -->