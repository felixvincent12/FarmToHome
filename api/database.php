<?php
//Main function: to connect to database, create and select database and tables
//	header("Access-Control-Allow-Origin: *");
//	header("Content-Type: application/json; charset=UTF-8");

	//connect to database
	$conn = mysqli_connect("localhost", "root", "");
	
	//check if connected
	if (!$conn){
		die ("connection failed:" . mysqli_error($conn) . "<br/>");
	}
	else {
		//check if database exist
		if (mysqli_select_db($conn, 'farm2home')){
//			echo "database exist<br/>";
			
			//check if table exist
            $sql1 = "SELECT * FROM CUSTOMER";
            $sql2 = "SELECT * FROM SELLER";
			if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)){
//				echo "tables exist<br/>";
			}
			else 
			{
//				echo "tables don't exist<br/>";
				//create table if not exists
				$sql3 = 'CREATE TABLE CUSTOMER(CUSTID INT(4) UNSIGNED ZEROFILL AUTO_INCREMENT NOT NULL, CUSTEMAIL VARCHAR(100) NOT NULL, CUSTNAME VARCHAR(100) NOT NULL, CUSTPASS VARCHAR(100) NOT NULL, CUSTPHONE VARCHAR(10) NOT NULL, CADDRESS VARCHAR(200) NOT NULL, CDOB VARCHAR(10) NOT NULL, PRIMARY KEY(CUSTID))';
				
				$sql4 = 'CREATE TABLE SELLER(SELLERID INT(4) UNSIGNED ZEROFILL AUTO_INCREMENT NOT NULL, SELLEREMAIL VARCHAR(100) NOT NULL, SELLERNAME VARCHAR(100) NOT NULL, SELLERPASS VARCHAR(100) NOT NULL, SELLERPHONE VARCHAR(10) NOT NULL, SADDRESS VARCHAR(200) NOT NULL, SDOB VARCHAR(10) NOT NULL, PRIMARY KEY(SELLERID))';
				//check if tables created
				if(mysqli_query($conn, $sql3) && mysqli_query($conn, $sql4)){
//					echo "table created<br/>";
				}
				else {
//					echo "error creating table:<br/>". mysqli_error($conn)."<br/>";
				}
			}
		}
		else {
//			echo "database does not exist<br/>";
			//create database if it does not exist
			$sql1 = "CREATE DATABASE IF NOT EXISTS farm2home";
			if(mysqli_query($conn, $sql1)){
//				echo "Database created successfully<br/>";
				//use database created
				$db_used = mysqli_select_db ($conn, 'farm2home');
				if(!$db_used){
//					echo "can't use database selected:<br/>". mysqli_error($conn);
				}
				else {
//					echo "database selected<br/>";
					//check if table exist
				    $sql4 = "SELECT * FROM CUSTOMER";
                    $sql5 = "SELECT * FROM SELLER";
                    if(mysqli_query($conn, $sql4) && mysqli_query($conn, $sql5)){
//                        echo "tables exist<br/>";
                    }
                    else 
                    {
//                        echo "tables don't exist<br/>";
						//create table if not exists
						$sql3 = 'CREATE TABLE CUSTOMER(CUSTID INT(4) UNSIGNED ZEROFILL AUTO_INCREMENT NOT NULL, CUSTEMAIL VARCHAR(100) NOT NULL, CUSTNAME VARCHAR(100) NOT NULL, CUSTPASS VARCHAR(100) NOT NULL, CUSTPHONE VARCHAR(10) NOT NULL, CADDRESS VARCHAR(200) NOT NULL, CDOB DATE NOT NULL, PRIMARY KEY(CUSTID))';
				
						$sql4 = 'CREATE TABLE SELLER(SELLERID INT(4) UNSIGNED ZEROFILL AUTO_INCREMENT NOT NULL, SELLEREMAIL VARCHAR(100) NOT NULL, SELLERNAME VARCHAR(100) NOT NULL, SELLERPASS VARCHAR(100) NOT NULL, SELLERPHONE VARCHAR(10) NOT NULL, SADDRESS VARCHAR(200) NOT NULL, SDOB DATE NOT NULL, PRIMARY KEY(SELLERID))';
                        //check if tables created
                        if(mysqli_query($conn, $sql3) && mysqli_query($conn, $sql4)){
//                            echo "table created<br/>";
                        }
                        else {
//                            echo "error creating table:<br/>". mysqli_error($conn)."<br/>";
                        }
                    }
				}
			}
			else {
//				echo "Error creating database:<br/>" . mysqli_error($connect)."<br/>";
			}
		}
	}
?>