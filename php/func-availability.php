<?php 
# Get all Availability function
function get_availability($conn){
   $sql  = "SELECT stock FROM books";
   $stmt = mysqli_query($conn, $sql);


   if ($stmt->num_rows > 0) {
   	  $stock = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $stock = 0;
   }

   return $stock;
}


# Get  Availability by ID function
function get_avail_id($conn, $id){
   $sql  = "SELECT * FROM stock WHERE id=?";
   $stmt = mysqli_query($conn, $sql);


   if ($stmt->num_rows > 0) {
   	$stock = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $stock = 0;
   }

    return $stock;
}