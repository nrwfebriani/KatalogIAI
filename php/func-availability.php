<?php 

# Get all Availability function
function get_availability($con){
   $sql  = "SELECT stock FROM books";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $stock = $stmt->fetchAll();
   }else {
      $stock = 0;
   }

   return $stock;
}


# Get  Availability by ID function
function get_avail_id($con, $id){
   $sql  = "SELECT * FROM stock WHERE id=?";
   $stmt = $con->prepare($sql);
   $stmt->execute([$id]);

   if ($stmt->rowCount() > 0) {
   	$stock = $stmt->fetch();
   }else {
      $stock = 0;
   }

    return $stock;
}