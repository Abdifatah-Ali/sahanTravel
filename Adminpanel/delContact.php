<?php

include("inc/db.php");

$deluserQ= "DELETE FROM contact where id =".$_GET['id']."";
$delEX= mysqli_query($cn,$deluserQ);
if ($delEX) {
	echo "<script>alert('User was deleted Successfully...');</script>";
	echo "<script>window.location.href='contactUs.php';</script>";
	} else {
		echo "<script>alert('User delete Failed...');</script>";
	}



?>