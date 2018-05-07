<?php
	
session_start();
include('database.php');

if(isset($_POST['data'])){
	$data = $_POST['data'];
	$name = $data->name;
	$email = $data->email;
	$password = $data->password;
	$dob = $data->dob;
	$address = $data->address;
	$city = $data->city;
	$postcode = $data->postcode;
	$phone = $data->phone;
	$role = $data->role;
	
	
//	$data = json_decode(file_get_contents("php://input"));
//	
//	//get the data from form
//	$name = $data->name;
	

	$_SESSION['login_user'] = $email;
	$address1 = $address . " " . ", " . $postcode . ", " . $city;	
	$msg = "";
	
	if ($role == 'Farmer'){
		
		$sql = "INSERT INTO SELLER (SELLERID, SELLEREMAIL, SELLERNAME, SELLERPASS, SELLERPHONE, SADDRESS, SDOB) VALUES ('$email', '$name', '".md5($password)."', '$phone', '$address1', '$dob')";
		if(mysqli_query($conn, $sql))
		{
			$msg = "success";
			return json_encode($msg);
		}
		else 
		{
			$msg = "unsuccessful";
			return json_encode($msg);
//				"error inserting data:" .mysqli_error($conn)."<br/>";
		}
	}
	else if ($role == 'Customer'){
		$sql = "INSERT INTO CUSTOMER (CUSTID, CUSTEMAIL, CUSTNAME, CUSTPASS, CUSTPHONE, CADDRESS, CDOB) VALUES ('$email', '$name', '".md5($password)."', '$phone', '$address1', '$dob')";
		if(mysqli_query($conn, $sql))
		{
			$msg = "success";
			return json_encode($msg);
		}
		else 
		{
			$msg = "unsuccessful";
			return json_encode($msg);
//				"error inserting data:" .mysqli_error($conn)."<br/>";
		}	
	}
}

mysqli_close($conn);

?>