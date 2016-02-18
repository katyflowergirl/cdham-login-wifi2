<?php
require 'includes/config.php';

error_reporting(E_ALL);
ini_set('display_errors', '1'); 

error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

if (strlen($_SESSION['loggingin']) == 4)
	{
	if (isset($_POST['newsletter']))
		{
		$newsletter = 1;
		}
	  else
		{
		$newsletter = 0;
		}

	userpass($authtable, $_SESSION['id'], $_SESSION['ap'], $_SESSION['ssid'], $_SESSION['time'], $_SESSION['refURL'], trim($_POST['user']) , trim($_POST['pass']));
	}
  else
	{
	header("Location: index.php");
	}

?>