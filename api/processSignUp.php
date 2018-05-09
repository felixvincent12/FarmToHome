<?php
	
session_start();
include('database.php');

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['dob']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['postcode']) && isset($_POST['phone']) && isset($_POST['role']) ){
	//get the data to insert to table	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$postcode = $_POST['postcode'];
	$phone = $_POST['phone'];
	$role = $_POST['role'];
	//convert date
	$splitDate = explode(" ", $dob);
	$day = $splitDate[1];
	$month = $splitDate[2];
	$year = $splitDate[3];
	$fullDate = $month." ".$day." ".$year;
	//full address
	$address1 = $address . " " . ", " . $postcode . ", " . $city;
	//start session
	$_SESSION['login_user'] = $email;
    $_SESSION['role'] = $role;
	
	//insert the farmer data
	if ($role == 'farmer'){
		$sql = 'INSERT INTO SELLER (SELLEREMAIL, SELLERNAME, SELLERPASS, SELLERPHONE, SADDRESS, SDOB) VALUES ("' . $email . '", "' . $name . '", "'.md5($password).'", ' . $phone . ', "' . $address1 . '", "' . date('Y-m-d', strtotime($fullDate)) . '")';
		if(mysqli_query($conn, $sql))
		{
			echo "success";
		}
		else 
		{
			echo "error inserting data:" . mysqli_error($conn) . "<br/>";
		}
	}
	else if ($role == 'customer'){ //insert customer data
		$sql = 'INSERT INTO CUSTOMER (CUSTEMAIL, CUSTNAME, CUSTPASS, CUSTPHONE, CADDRESS, CDOB) VALUES ("' . $email . '", "' . $name . '", "'.md5($password).'", ' . $phone . ', "' . $address1 . '", "' . date('Y-m-d', strtotime($fullDate)) . '")';
		if(mysqli_query($conn, $sql))
		{
			echo "success";
		}
		else 
		{
			echo "error inserting data:" .mysqli_error($conn) . "<br/>";
		}	
	}
}

mysqli_close($conn);

?>