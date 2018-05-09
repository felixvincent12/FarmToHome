<?php 

session_start();
include('database.php');

if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
    $password = $_POST['password'];
	
    $selectSeller = "SELECT SELLEREMAIL, SELLERPASS FROM SELLER where SELLEREMAIL='".$email."' and SELLERPASS = '".md5($password)."'";
    $selectCust = "SELECT CUSTEMAIL, CUSTPASS FROM CUSTOMER WHERE CUSTEMAIL = '".$email."' and CUSTPASS = '".md5($password)."'";
	
	$result1 = mysqli_query($conn, $selectSeller);
	$result2 = mysqli_query($conn, $selectCust);
	
	$row1 = mysqli_fetch_array($result1);
	$row2 = mysqli_fetch_array($result2);
	
	$count1 = mysqli_num_rows($result1);
	$count2 = mysqli_num_rows($result2);
	
	if ($count1 > 0){
		if ($row1['SELLEREMAIL'] === $email && $row1['SELLERPASS'] === md5($password)){
			$_SESSION['login_user'] = $email;
			$_SESSION['role'] = "farmer";
			echo "success";
		}
	}
	else if ($count2 > 0){
		if ($row2['CUSTEMAIL'] === $email && $row2['CUSTPASS'] === md5($password)){
			$_SESSION['login_user'] = $email;
			$_SESSION['role'] = "customer";
			echo "success";
		}
	}
	else {
		echo "Email or password is invalid";
	}
	
}

?>