<?php

include("inc/db.php");

$deluserQ= "DELETE FROM users where userID=".$_GET['usID']."";
$delEX= mysqli_query($cn,$deluserQ);
if ($delEX) {
	echo "<script>alert('User was deleted Successfully...');</script>";
	echo "<script>window.location.href='userList.php';</script>";
	} else {
		echo "<script>alert('User delete Failed...');</script>";
	}



?>