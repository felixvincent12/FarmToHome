<?php
	session_start();
	unset($_SESSION['login_user']);
	unset($_SESSION['role']);
	
	if(empty($_SESSION['login_user'])&& empty($_SESSION['role'])){
		echo "success";
	}
	else {
		echo "unseccessful logout";
	}
	
	session_destroy();
	exit();
?>