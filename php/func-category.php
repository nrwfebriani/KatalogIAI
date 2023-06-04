<?php  

# Get all Categories function
function get_all_categories($conn){
   $sql  = "SELECT * FROM categories";
   $stmt = mysqli_query($conn, $sql);

   if ($stmt->num_rows > 0) {
   	  $categories = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $categories = 0;
   }

   return $categories;
}


# Get category by ID
function get_category($conn, $id){
   $sql  = "SELECT * FROM categories WHERE id=?";
   $stmt = mysqli_query($conn, $sql);


   if ($stmt->num_rows > 0) {
   	  $category = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $category = 0;
   }

   return $category;
}