<?php
	define('BOOK_STATUS_IDEAS','1');
	define('BOOK_STATUS_VOTE','2');
	define('BOOK_STATUS_WRITE','3');
	define('BOOK_STATUS_TITLE','4');
	define('BOOK_STATUS_FINISHED','5');

	// Include models
	include '../model/setting.php';

	//retrieve the curent status
	setting_get_value('book_status');

	// Include config file
	include '../config.php';

	// Database connection
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error($dbc));

?>