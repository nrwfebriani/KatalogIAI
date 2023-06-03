<?php  
session_start();

# If the admin is logged in
if (isset($_SESSION['user_id']) &&
    isset($_SESSION['user_name'])) {

	# Database Connection File
	include "../db_conn.php";


    /** 
	  check if publisher 
	  name is submitted
	**/
	if (isset($_POST['nama_penerbit'])) {
		/** 
		Get data from POST request 
		and store it in var
		**/
		$nama_penerbit = $_POST['nama_penerbit'];

		#simple form Validation
		if (empty($nama_penerbit)) {
			$em = "The publisher name is required";
			header("Location: ../add-publisher.php?error=$em");
            exit;
		}else {
			# Insert Into Database
			$sql  = "INSERT INTO publisher (nama_penerbit)
			         VALUES (?)";
			$stmt = $conn->prepare($sql);
			$res  = $stmt->execute([$nama_penerbit]);

			/**
		      If there is no error while 
		      inserting the data
		    **/
		     if ($res) {
		     	# success message
		     	$sm = "Successfully created!";
				header("Location: ../add-publisher.php?success=$sm");
	            exit;
		     }else{
		     	# Error message
		     	$em = "Unknown Error Occurred!";
				header("Location: ../add-publisher.php?error=$em");
	            exit;
		     }
		}
	}else {
      header("Location: ../admin.php");
      exit;
	}

}else{
  header("Location: ../login.php");
  exit;
}