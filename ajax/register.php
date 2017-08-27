<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		header('Content-Type: application/json');

		$return = [];

		// Make sure the user does not exist. 

		// Make sure the user CAN be added AND is added 

		// Return the proper information back to JavaScrit to redirect us.

		$return['redirect'] = '/dashboard.php';
		$return['name'] = "Kalob Taulien";

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('test');
	}
?>
