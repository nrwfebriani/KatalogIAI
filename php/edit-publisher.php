<?php  
session_start();

# If the admin is logged in
if (isset($_SESSION['user_id']) &&
    isset($_SESSION['user_name'])) {

	# Database Connection File
	include "../db_conn.php";


    /** 
	  check if category 
	  name is submitted
	**/
	if (isset($_POST['nama_penerbit']) &&
        isset($_POST['id_penerbit'])) {
		/** 
		Get data from POST request 
		and store them in var
		**/
		$nama_penerbit = $_POST['nama_penerbit'];
		$id_penerbit = $_POST['id_penerbit'];

		#simple form Validation
		if (empty($nama_penerbit)) {
			$em = "The publisher name is required";
			header("Location: ../edit-publisher.php?error=$em&id_penerbit=$id_penerbit");
            exit;
		}else {
			# UPDATE the Database
			$sql  = "UPDATE publisher 
			         SET nama_penerbit=?
			         WHERE id_penerbit=?";
			$stmt = $conn->prepare($sql);
			$res  = $stmt->execute([$nama_penerbit, $id_penerbit]);

			/**
		      If there is no error while 
		      updating the data
		    **/
		     if ($res) {
		     	# success message
		     	$sm = "Successfully updated!";
				header("Location: ../edit-publisher.php?success=$sm&id_penerbit=$id_penerbit");
	            exit;
		     }else{
		     	# Error message
		     	$em = "Unknown Error Occurred!";
				header("Location: ../edit-publisher.php?error=$em&id_penerbit=$id_penerbit");
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