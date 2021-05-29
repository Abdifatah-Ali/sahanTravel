<?php
	session_start();
	
	if ((isset($_SESSION['username']) == true) && ($_SESSION['username']) != "") {
		//
		
	} else {
		echo "<script>window.location.href='index.php'</script>";
	}
?>