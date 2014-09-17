<?php
include('header.php');
if(!isset($_SESSION['user'])){

	header("Location:index.php");

}
//echo "hello".$_SESSION['user'];

?>


<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Multiple Login</title>
	<link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<div class="wrapper">
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
		<div class="messagesending2">

			<p>Your message is send successfully.</p>
			<br/>
			<a href="home.php">Send Another</a>

		</div>

	</div>
	<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>

