<?php 

# Get all Categories function
function get_all_publishers($conn){
   $sql  = "SELECT * FROM publisher";
   $stmt = mysqli_query($conn, $sql);


   if ($stmt->num_rows > 0) {
   	  $publisher = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $publisher = 0;
   }

   return $publisher;
}


# Get category by ID
function get_publisher($conn, $id_penerbit){
   $sql  = "SELECT * FROM publisher WHERE id_penerbit=?";
   $stmt = mysqli_query($conn, $sql);


   if ($stmt->num_rows > 0) {
   	  $publishers = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $publishers = 0;
   }

   return $publishers;
}