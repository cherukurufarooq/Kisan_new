<?php
require 'databaseconnect.php';
if (isset($_POST['submit'])) {
  if (isset($_POST['name']) && isset($_POST['email']) &&
      isset($_POST['subject']) && isset($_POST['thoughts'])) {
  $Name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$thoughts = $_POST['thoughts'];
	$query="insert into `contact` (`name`,`email`,`subject`,`thoughts`) values('$Name','$email','$subject','$thoughts')";
	$qr=mysqli_query($mysqlc,$query);

}
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> KisanMitra</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<link rel="stylesheet" href="css/style1.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="menu">
						<a href="about.html">About</a>
					</li>
					<li class="menu">
						<a href="login.html">login</a>
						<ul id="selected" class="secondary">
							<li>
								<a href="signup.html">signup</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact1.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div> <br><br><br><p>your response is shared</p><br><br><br><br></div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://www.facebook.com" class="facebook">facebook</a>
					<a href="http://www.twitter.com" class="twitter">twitter</a>
					<a href="http://www.googleplus.com" class="googleplus">googleplus</a>
					<a href="http://www.pinterest.com" class="pinterest">pinterest</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>