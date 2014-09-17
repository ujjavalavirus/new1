<?php
include('header.php');
if(!isset($_SESSION['user'])){

	header("Location:index.php");

}
//echo "hello".$_SESSION['user'];

?>
<?php


//date_default_timezone_set("Asia/Kolkata");
//echo date("h:i:sa");
//echo "<br/>";
//echo time();
/*echo "<br/>";
$date = new DateTime();
echo $date->format('U = Y-m-d h:i:s') . "\n";
echo "<br/>";

$date->setTimestamp(1171502725);
echo $date->format('U = Y-m-d H:i:s') . "\n";*/



if(isset($_POST['sendermobileno'])){
	$message_number = $_POST['sendermobileno'];
	$message_text = $_POST['sendermessage'];
	$time_date =  time();
	$userid = $_SESSION['user'];

	$messagequery = "INSERT INTO messagelist (messageuser_id,message_no,message_text,message_datetime) VALUES('$userid','$message_number','$message_text','$time_date')";
	$connection->myquery($messagequery);
	header("Location:sendconfirmation.php");

}
?>