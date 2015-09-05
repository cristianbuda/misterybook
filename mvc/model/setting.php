<?php
	function setting_get_value($setting_name)
	{
		global $dbc;

		$sql = '
		    SELECT setting_value
		    FROM settings 
		    WHERE
		    	setting_name = "' . $setting_name . '"
	  	';
	  	$select_row = mysqli_query($dbc, $sql);

	  	if ($select_row) {
	    	$select = mysqli_fetch_assoc($select_row);
	  	}

	  	return $select['setting_value'];
	}

	function update_book_status($status)
	{
		global $dbc;

		$sql = '
			UPDATE 
				`settings` 
			SET 
				`setting_value` = "' .$status.'" 
			WHERE 
				`setting_name` = "book_status"
		';

		$select_row = mysqli_query($dbc, $sql);

	}

?>