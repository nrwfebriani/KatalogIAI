<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);

	$user_data = 'username='. $username;


	if (empty($username)) {
		header("Location: signup.php?error=Username is required&");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Password confirmation is required&");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		$sql = "SELECT * FROM pengguna WHERE username='$username'";
		$result = $conn->query($sql); 

		if ($result->rowCount() > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO pengguna(username, password) VALUES('$username', '$pass')";
           $result2 = $conn->query($sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}