<?php
require_once '../global-library/config.php';
require_once '../include/functions.php';

$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
// checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
	
switch ($view) {
	case 'about_us' :
		$content 	= 'about_us.php';		
		$pageTitle 	= $sett_data['system_title'];
		break;
        

	default :
		$content 	= 'about_us.php';		
		$pageTitle 	= $sett_data['system_title'];
}

require_once '../include/template.php';
?>
