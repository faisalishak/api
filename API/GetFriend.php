<?php
	include "Conection.php";


	if (isset($_GET['id_user'])){
		$id_user=$_GET['id_user'];

		$sql = "SELECT * FROM users WHERE id_user = '$id_user'";
		$result = mysqli_query($mysqli,$sql) or die ("Error in selecting". mysqli_error($mysqli));

		$item = array("item" => mysqli_fetch_all($result,MYSQLI_ASSOC));
		
		echo json_encode($item);
		mysqli_close($mysqli);	
	}
	else if(isset($_GET['key_word']))
	{
		$key_word=$_GET['key_word'];

		$sql = "SELECT * FROM users WHERE CONCAT(first_name,' ',last_name) LIKE '%$key_word%'";
		$result = mysqli_query($mysqli,$sql) or die ("Error in selecting". mysqli_error($mysqli));

		$item = array("item" => mysqli_fetch_all($result,MYSQLI_ASSOC));

		echo json_encode($item);
		mysqli_close($mysqli);
	}
	else
	{
		$sql = "SELECT * FROM users";
		$result = mysqli_query($mysqli,$sql) or die ("Error in selecting". mysqli_error($mysqli));

		$item = array("item" => mysqli_fetch_all($result,MYSQLI_ASSOC));
		
		echo json_encode($item);
		mysqli_close($mysqli);
	}
?>

