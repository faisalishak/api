<?php
	$servername = "br-cdbr-azure-south-a.cloudapp.net";
	$username = "b22d98438a9ac7";
	$password = "689854fb";
	$db = "usersdrinkreminder";

	$mysqli = mysqli_connect($servername, $username, $password, $db);

	//check 
	if (!$mysqli){
		die("failed". mysqli_connect_error());
	}else{
		//echo "success";
	}

	//creat database
	/*$sql = "CREAT DATABASE myDB";
	if(mysqli_master_query($conn, $sql)){
		echo "success";
	}else {
		echo "error :". mysqli_error($conn);
	}
	mysqli_close($conn);*/
?>
