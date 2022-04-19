<?php

$check_in = filter_input(INPUT_POST, 'check_in');
$check_out = filter_input(INPUT_POST, 'check_out');
$insert_price = filter_input(INPUT_POST, 'insert_price');
$payment_method = filter_input(INPUT_POST, 'payment_method');
$name_card = filter_input(INPUT_POST, 'name_card');
$number_card = filter_input(INPUT_POST, 'number_card');
$cvc = filter_input(INPUT_POST, 'cvc');
$expiration_date = filter_input(INPUT_POST, 'expiration_date');

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
	
	$sql="INSERT INTO payment_calculation (check_in_date, check_out_date, price, payment_method, name_card, number_card, cvc, exp_date) 
	values ('$check_in','$check_out', '$insert_price', '$payment_method', '$name_card', '$number_card', '$cvc', '$expiration_date')";

	if($conn->query($sql)){

		// echo "Record succesful"; 

		header("Location: ../form.php");
	}
	else{
		echo "Error record" .$sql ."<br>". $conn->error;
	}
	$conn->close();
}

?>