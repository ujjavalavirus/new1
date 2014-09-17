<?php
include('header.php');


if(isset($_POST['userpassword'])){

	

	$useremail = $_POST['username'];
	$userpassword = $_POST['userpassword'];

	$currentquery = "SELECT * FROM logintable WHERE login_email='$useremail' AND login_password='$userpassword'";

	$re = $connection->myquery($currentquery);
	$numofrow =   mysqli_num_rows($re);
	$userid  = "";
	while($r = mysqli_fetch_array($re)){
		$userid = $r['login_id'];

	}
	if($numofrow == 1){

		$_SESSION['user'] = $userid;

		header("Location:home.php");
	}


}


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
		<div class="loginbox">
			<form action="" method="POST" autocomplete="off">
				<div>
					<span>Email</span>
					<p><input type="text" value="" placeholder="Enter email id" name="username" id="username"/></p>	
				</div>
				<div>
					<span>Password</span>
					<p><input type="password"  value="" placeholder="Password" name="userpassword" id="userpassword"/></p>
				</div>
				<div>
					<p><input type="submit" value="Signin" name="usersubmit" id="usersubmit"/></p>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>