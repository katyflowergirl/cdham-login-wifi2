<?php

// /////////////////////////////////////////////////////////////////////////////////////////////////////////

$db = "guest-wifi";
$table = "connections";
$authtable = "auth";
$host = "localhost";
$sqli_user = "galopeian";
$sqli_password = "Katyannflowergirl12#$";
$mysqli_connect = ("$host" + "$sqli_user" + "$sqli_password")
$mac = [];
$ap = $_GET [];
$mac = [];

// /////////////////////////////////////////////////////////////////////////////////////////////////////////

$connection = $mysqli_connect;

if (!$connection)
	{
	die("Database connection failed: " . mysqli_error());
	}

$db_select = mysqli_select_db($db, $connection);

if (!$db_select)
	{
	die("Database selection failed: " . mysqli_error());
	}

function logit($table, $mac, $ap, $ssid, $time, $url, $firstname, $lastname, $email, $zipcode)
	{
	$url = mysqli_real_escape_string($url);
	$stamp = date('Y-m-d H:i:s', $time);
	$query = "INSERT INTO `$table` (`guest_mac`, `ap_mac`, `ssid`, `time`, `url`, `firstname`, `lastname`,  `email`,`zipcode`) VALUES ( "$mac", "$ap", "$ssid", "$stamp", "$url", "$firstname", "$lastname" "$email", "$zipcode")";
	$execute = mysqli_query($query);
	if ($execute == 1)
		{
		sendAuthorization($mac, 60);
		header("Location: http://www.youtube.com/user/helpfultechvids");
		}
	  else
		{
		header("Location: index.php");
		}
	}

function userpass($table, $mac, $ap, $ssid, $time, $url, $firstname, $lastname, $email, $zipcode)
	{
	$url = mysqli_real_escape_string($url);
	$stamp = date('Y-m-d H:i:s', $time);
	$firstname = trim($firstname);
	$lastname = trim($lastname);
	$email = trim($email);
	$zipcode = trim($zipcode);
	$query = "SELECT * FROM `$table` WHERE `email` = $email";
	$execute = mysqli_query($query);
	if (mysqli_num_rows($execute) == 0)
		{
		echo "Email address not found";
		}
	  else
		{
		while ($row = mysqli_fetch_assoc($execute))
			{
			if ($pass == $row['pass'])
				{
				echo "Authentication Succeeded<br />";
				$id = $row['id'];
				$query = "UPDATE `$table` SET `mac` = '$mac', `ap` = '$ap', `ssid` = '$ssid', `last_access` = '$stamp', `orig_url` = '$url' WHERE `email` =$email";
				mysqli_query($query);
				sendAuthorization($mac, 60);
				header("Location: http://www.youtube.com/user/helpfultechvids");
				}
			  else
				{
				header("Location: index.php");
				}
			}
		}
	}

function sendAuthorization($id, $minutes)
	{

	// /////////////////////////////////////////////////////////////////////////////////////////////////////////

	$unifiServer = "https://10.0.1.14:8880";
	$unifiUser = "galopeian";
	$unifiPass = "spongy1234";

	// /////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Start Curl for login

	$ch = curl_init();

	// We are posting data

	curl_setopt($ch, CURLOPT_POST, TRUE);

	// Set up cookies

	$cookie_file = "/tmp/unifi_cookie";
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);

	// Allow Self Signed Certs

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

	// Force SSL3 only

	curl_setopt($ch, CURLOPT_SSLVERSION, 3);

	// Login to the UniFi controller

	curl_setopt($ch, CURLOPT_URL, "$unifiServer/login");
	curl_setopt($ch, CURLOPT_POSTFIELDS, "login=login&username=$unifiUser&password=$unifiPass");

	// send login command

	curl_exec($ch);

	// Send user to authorize and the time allowed

	$data = json_encode(array(
		'cmd' => 'authorize-guest',
		'mac' => $id,
		'minutes' => $minutes
	));

	// Send the command to the API

	curl_setopt($ch, CURLOPT_URL, $unifiServer . '/api/cmd/stamgr');
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'json=' . $data);
	curl_exec($ch);

	// Logout of the UniFi Controller

	curl_setopt($ch, CURLOPT_URL, $unifiServer . '/logout');
	curl_exec($ch);
	curl_close($ch);
	unset($ch);
	}

?>