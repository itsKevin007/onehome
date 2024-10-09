<?php
require_once 'global-library/config.php';
require_once 'include/functions.php';

$errorMessage = '&nbsp;';


if (isset($_POST['txtUserName'])) {
	$result = doLogin();

	if ($result != '') {
		$errorMessage = $result;
	}
}
?>

