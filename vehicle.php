<?php


$Type = filter_input(INPUT_POST, 'type');
$Model = filter_input(INPUT_POST, 'model');


$host = "localhost";
$database_userName = "root";
$database_pass = "";	
$database_name = "services";

$conn = new mysqli ($host, $database_userName, $database_pass, $database_name);

if(mysqli_connect_error()){
	
	die('Error conection (' .mysqli_connect_error() .')' 
	.mysqli_connect_error());
	
}

else {

	$sql="INSERT INTO vehicle_information (type, model) 
	values ('$Type','$Model')";

	if($conn->query($sql)){

		// echo "Record succesful"; 

		header("Location:../form.php");
	}
	else{
		echo "Error record" .$sql ."<br>". $conn->error;
	}
	$conn->close();
}

?>