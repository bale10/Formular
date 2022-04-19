<?php

$FirstName = filter_input(INPUT_POST, 'firstname');
$SurName = filter_input(INPUT_POST, 'surname');
$Id_Pass = filter_input(INPUT_POST, 'id_passport');
$Phone = filter_input(INPUT_POST, 'phone');
$Address = filter_input(INPUT_POST, 'address');



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
	
	$sql="INSERT INTO customer (firstname, surname, id_passport, phone, adress) 
	values ('$FirstName','$SurName', '$Id_Pass', '$Phone', '$Address')";


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