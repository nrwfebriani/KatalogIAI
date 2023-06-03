<?php  

# Get all Categories function
function get_all_publishers($con){
   $sql  = "SELECT * FROM publisher";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $publisher = $stmt->fetchAll();
   }else {
      $publisher = 0;
   }

   return $publisher;
}


# Get category by ID
function get_publisher($con, $id){
   $sql  = "SELECT nama_penerbit FROM publisher WHERE id_penerbit=?";
   $stmt = $con->prepare($sql);
   $stmt->execute([$id]);

   if ($stmt->rowCount() > 0) {
   	  $publishers = $stmt->fetch();
   }else {
      $publishers = 0;
   }

   return $publishers;
}