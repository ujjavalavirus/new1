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
		<div class="backstep">
			<a class="button" href="home.php">Send SMS</a>
		</div>
		<div class="messagesent">
			<ul>
				<li><span class="col col1">Send No</span><span class="col col2">Message</span><span class="col col3">Date/Time</span></li>
				<?php
				$userid = $_SESSION['user'];
				$messagequery = "SELECT * FROM messagelist WHERE messageuser_id= '$userid' ORDER BY message_datetime desc";
				$messageresult = $connection->myquery($messagequery);
				
				while($mresult = mysqli_fetch_array($messageresult)){


					?>

					<li><span class="col col1"><?php echo $mresult['message_no']; ?></span><span class="col col2"><?php echo $mresult['message_text']; ?></span><span class="col col3">
						<?php 
						date_default_timezone_set("Asia/Kolkata");
						$timestamp= $mresult['message_datetime'];
						echo date("d-m-Y  / h:i:s A", $timestamp);
						?></span></li>

						<?php

					}
					?> 



				</ul>

			</div>

			<div style="clear:both;"></div>

		</div>
		<script type="text/javascript" src="js/script.js"></script>	
	</body>
	</html>

