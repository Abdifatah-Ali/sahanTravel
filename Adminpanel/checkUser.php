<?php
	include("inc/db.php");
    
 if(isset($_POST['uname'])){
	$user = $_POST['uname'];
	$checkQry = "SELECT * FROM users WHERE userName = '". $user ."'";
	$checkEx = mysqli_query($cn, $checkQry);
	
	$countU = mysqli_num_rows($checkEx);
	
	if ($user == "") {
		echo "<span></span>";
	} else if ($countU > 0) {
		echo "<span class='badge badge-danger' style='margin-top: 5px; font-size: 14px;'><b>$user</b> is not available</span>";
		echo "<script>document.getElementById('RegisterUser').disabled = true;</script>";
	} else if ($countU <= 0) {
		echo "<span class='badge badge-success' style='margin-top: 5px; font-size: 14px;'><b>$user</b> is available</span>";			
		echo "<script>document.getElementById('RegisterUser').disabled = false;</script>";
	}
    }
?>