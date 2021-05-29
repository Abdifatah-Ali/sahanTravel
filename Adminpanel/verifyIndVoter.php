<?php
	include("inc/db.php");
	$vID = $_GET['voterID'];
	$verify = mysqli_query($cn, "UPDATE users SET status = 'Active' WHERE userID  = ". $vID ."");
	if ($verify) {
		echo "<script>alert('User Verified Successfully...');</script>";
		echo "<script>window.location.href='verifyUsers.php';</script>";
	} else {
		echo "<script>alert('User Verification Failed...');</script>";
	}
?>