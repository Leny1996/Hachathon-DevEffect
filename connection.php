<?php
	$username = "root";
	$password = "root";
	$host = "localhost";
	$database = "walbrzyszanka";

	$connect = mysqli_connect("$host","$username","$password","$database") or die("Server error!");

	if($connect == true){
		echo "Success";
	} else {
		mysqli_close($connect);
	}

	$sqlData = "SELECT pytanie FROM pytania";
	$result =  $connect->query($sqlData);

?>