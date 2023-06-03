<?php 
session_start();

if (isset($_POST['username']) && 
	isset($_POST['password'])) {
    
    # Database Connection File
	include "../db_conn.php";
    
    # Validation helper function
	include "func-validation.php";
	
	/** 
	   Get data from POST request 
	   and store them in var
	**/

	$username = $_POST['username'];
	$password = $_POST['password'];

	# simple form validation

	$text = "Username";
	$location = "../login.php";
	$ms = "error";
    is_empty($username, $text, $location, $ms, "");

    $text = "Password";
	$location = "../login.php";
	$ms = "error";
    is_empty($password, $text, $location, $ms, "");

    # search for the username
    $sql = "SELECT * FROM pengguna 
            WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);

    # if the username is exist
    if ($stmt->rowCount() === 1) {
    	$user = $stmt->fetch();

    	$user_id = $user['id'];
    	$user_name = $user['username'];
    	$user_password = $user['password'];
    	if ($username === $user_name) {
    		if ($password===$user_password) {
    			$_SESSION['user_id'] = $user_id;
    			$_SESSION['user_name'] = $user_name;
    			header("Location: ../index.php");
    		}else {
    			# Error message
    	        $em = "Incorrect username or password";
    	        header("Location: ../login.php?error=$em");
    		}
    	}else {
    		# Error message
    	    $em = "Incorrect username or password";
    	    header("Location: ../login.php?error=$em");
    	}
    }else{
    	# Error message
    	$em = "Incorrect username or password";
    	header("Location: ../login.php?error=$em");
    }

}else {
	# Redirect to "../login.php"
	header("Location: ../login.php");
}