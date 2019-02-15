<!DOCTYPE HTML>
<!--
	From
	Eventually by HTML5 UP
	html5up.net | @ajlkn
	Free use under the CCA 3.0 license (html5up.net/license)
	Modified by
	Marc-Ed
-->
<html>

<head>
	<link rel="stylesheet" href="assets/css/form.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<form id="signup-form" method="post" action="action.php">
		<!-- <input type="text" name="fname" placeholder="First name*"/> -->
		<input type="email" name="email" placeholder="Email Address*"/>
		<input type="submit" name="submit" value="Subscribe"/>
</form>

</body>

</html>
<?php session_start(); // place it on the top of the script ?>
<?php
		$statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
		unset($_SESSION['msg']);
		echo $statusMsg;
?>
