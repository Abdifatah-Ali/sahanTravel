<?phP

	$server = "localhost";
	$usern = "root";
	$passw =  "";
	$dbname = "sahan";
	
	$cn = mysqli_connect($server, $usern, $passw, $dbname);
	
	if ($cn) {
		// echo "<script>alert('Database connected successfully..');</script>";
	} else {
		echo "<script>alert('Database connectiojn Failed..');</script>";
	}
	

?>