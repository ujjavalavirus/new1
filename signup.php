<?php
include('header.php');

//echo "hello".$_SESSION['user'];

?>
<?php

if(isset($_POST['signnumber'])){




	$signname 	    =  $_POST['signname'];
	$signmobileno 	=  $_POST['signnumber'];
	$signemail      =  $_POST['signemail'];
	$signcity       = $_POST['signcity'];
	$signstate      = $_POST['signstate'];
	$signpassword   = $_POST['signpassword'];
	$resignpassword = $_POST['reenter_signpassword'];

	if(!empty($signname) && !empty($signmobileno) && !empty($signemail) &&  !empty($signcity) && !empty($signstate )  ) {

		if($signpassword == $resignpassword){

			$signpassword = md5($signpassword);

			$signupquery    = "INSERT INTO logintable (login_name,login_email,login_mobile,login_city,login_state,login_password)

			VALUES('$signname','$signemail','$signmobileno','$signcity','$signstate','$signpassword')";
			$connection->myquery($signupquery);
			header("Location:index.php");



		}


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
		<div class="pageheading">
			<h2>Sign Up</h2>
		</div>
		<div class="signupbox">
			<form action="" method="POST">
				<div class="signuprow">
					<div class="signupleft">
						<label>Name</label>
					</div>
					<div class="signupright">
						<input type="text" maxlength="20" name="signname" id="signname">
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="signuprow">
					<div class="signupleft">
						<label>Mobile</label>
					</div>
					<div class="signupright">
						<input type="tel" maxlength="10" name="signnumber" id="signnumber">
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="signuprow">
					<div class="signupleft">
						<label>Email</label>
					</div>
					<div class="signupright">
						<input type="email" maxlength="30" name="signemail" id="signemail">
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="signuprow">
					<div class="signupleft">
						<label>City</label>
					</div>
					<div class="signupright">
						<input type="text" maxlength="30" name="signcity" id="signcity">
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="signuprow">
					<div class="signupleft">
						<label>State</label>
					</div>
					<div class="signupright">
						<input type="text" maxlength="30" name="signstate" id="signstate">
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="signuprow">
					<div class="signupleft">
						<label>Password</label>
					</div>
					<div class="signupright">
						<input type="password" maxlength="30" name="signpassword" id="signpassword">
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="signuprow">
					<div class="signupleft">
						<label>Re-Enter Password</label>
					</div>
					<div class="signupright">
						<input type="password" maxlength="30" name="reenter_signpassword" id="reenter_signpassword">
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="signuprow signupsubmit">
					<input type="submit" value="Signup" name="signupsubmit" id="signupsubmit"/>
				</div>

				

			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>

