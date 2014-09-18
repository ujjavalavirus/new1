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
		<div>
			<a class="button" href="sended.php">Sent Box</a>
		</div>
		<div class="messagesending">

			<form action="messagesend.php" method="POST" autocomplete="off">
				<div>
					<p><input type="tel" name="sendermobileno" maxlength="10" placeholder="Mobile No"  id="sendermobileno"/></p>
				</div>
				<div>
					<textarea name="sendermessage" id="sendermessage" rows="10" cols="39"></textarea>
				</div>
				<div>
					<input type="submit" value="Send" name="messagesend" id="messagesend"/>
				</div>
			</form>

		</div>
		<div class="contact_list">

			<div class="contact_desgin">
				<ul>
					<?php 
					$userid = $_SESSION['user'];
					$contactquery = "SELECT * FROM usercontact WHERE contact_userid = '$userid'";
					$contactresult  = $connection->myquery($contactquery);
					while($contact = mysqli_fetch_array($contactresult)){
						?>		
						<li><span class="contactsname"><?php echo $contact['contact_name']; ?></span>
							<span class="contactsnumber"><?php echo $contact['contact_no']; ?></span>
							<div style="clear:both;"></div>
						</li>
						<?php

					}

					?>
					
				</ul>
			</div>

		</div>
		<div style="clear:both;"></div>

	</div>
	<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>

