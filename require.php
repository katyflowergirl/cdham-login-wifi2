<?php

// Incorporate the Mysqli connection script

require ('/includes/config.php');

// Display Mysqli version and host

if (mysqli_ping($dbc));

	{
	echo 'MySQL Server' . mysqli_get_server_info($dbc) . 'on' . mysqli_get_host_info($dbc);
	}

?>