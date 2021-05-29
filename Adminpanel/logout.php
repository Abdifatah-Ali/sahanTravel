<?php
session_start();
	include("inc/db.php");
	
	if (isset($_COOKIE[$_SESSION["username"]])) {
            setcookie($_SESSION["username"], $_SESSION['password'], time() - 1);
            // setcookie($_SESSION['password'], $_SESSION['password'], time() - 1);
        }
	session_destroy();
	echo "<script>window.location.href='index.php'</script>";
	
?>