<html>

<head>
	<link rel="stylesheet" href="includes/animate.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#tou').show();
			$('#toggle-tou').click(function() {
				$('#tou').toggle();
			});
		});
	</script>
	<title>Guest Wifi Login</title>
</head>
<div id="body">
	<center>

		<body>
			<center>
				<?php session_start(); $_SESSION[ 'id']=$_GET; //ID_mac $_SESSION[ 'ap']=$ _GET; //AP_mac $_SESSION[ 'ssid']=$ _GET; //ssid the user is on (POST 2.3.2) $_SESSION[ 'time']=$ _GET; //time the user attempted a request of the portal $_SESSION[ 'refURL']=$ _GET; //url the user attempted to reach $_SESSION[ 'loggingin']=r and(1000,9999); //key to use to check if the user visited the page //Comment out for production, uncomment for testing $_SESSION[ 'id ']="FF:FF:FF:FF:FF:FF" ; $_SESSION[ 'ap']="00:11:22:33:44:55" ; $_SESSION[ 'ssid']="Guest" ; $_SESSION[ 'time']=t ime(); //the user attempted a request of the portal $_SESSION[ 'refURL']="http//www.google.com" ; $_SESSION[ 'loggingin']=r and(1000,9999);
				//dele ?>
				<div id="banner">
					<h1 class="animated bounce">guest-WiFi</h1>
					<img src="CDHAM-top-banner.jpg" alt="Center For Disaster Humanitarian Assistance Medicine"
				</div>
				<br />Welcome to CDHAM guest-WiFi Sponsored by <a href="https://www.youtube.com/user/helpfultechvids" alt="Helpful Tech Vids">Helpful Tech Vids</a>
				</br>
				<br />
				<div id="wrap">
					<div id="row">
						<form name="authorize" action="authorize.php" method="POST">
							<div id="left">First Name*</div>
							<div id="right">
								<input type="text" name="firstname" required />
							</div>
							<br />
							<div id="left">Last Name*</div>
							<div id="right">
								<input type="text" name="lastname" required />
							</div>
							<div id="left">Email*</div>
							<div id="right">
								<input type="text" name="email" id="email" required />
							</div>
							<div id="left">Home Zip Code*</div>
							<div id="right">
								<input type="text" name="zipcode" id="zipcode" required />
							</div>
						</form>
					</div>
				</div>
</div>
<input type="checkbox" name="newsletter" style="vertical-align: middle;" />Please send me monthly newsletters and/or marketing material
<br />
<input type="checkbox" name="tos" style="vertical-align: middle;" required />I accept the <a href="javascript:void(0)" id="toggle-tou">terms of use</a>
<br />
<div class="tou-wrapper" id="tou">
	<div class="tou">
		<p>Terms of Use</p>
		<ol>
			<li>This hotspot is provided <em>as is</em> and may be suspended, terminated, or have the Terms of Use changed at the owner's sole discretion</li>
			<li>It is the user's responsibility to review the Terms of Use before each connection to the hotspot is made</li>
			<li>Traffic may be redirected, stored, cached, restricted, limited, or monitored</li>
			<li>There should be no assumptions of security. The user is responsible for verifying a secure connection to his or her own sites and servers</li>
			<li>Any activity that could be considered immoral, unethical, or illegal is strictly prohibited. Violators will be prosecuted</li>* required</ol>
	</div>
</div>
<input type="submit" name="submit" value="Connect" action="/authorize.php" />
</input>
<A HREF="http://www.aprelium.com">
	<IMG SRC="pwrabyss.gif" ALT="Powered by Abyss Web Server" TITLE="Powered by Abyss Web Server" BORDER="0" WIDTH="88" HEIGHT="31">
</A>

</html>