<?php 

# Get all Author function
function get_all_author($conn){
   $sql  = "SELECT * FROM authors";
   $stmt = mysqli_query($conn, $sql);


   if ($stmt->num_rows > 0) {
   	  $authors = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $authors = 0;
   }

   return $authors;
}


# Get  Author by ID function
function get_author($conn, $id){
   $sql  = "SELECT * FROM authors WHERE id='$id'";
   $stmt = mysqli_query($conn, $sql);

   if ($stmt->num_rows > 0) {
   	  $author = $stmt->fetch_array();
   }else {
      $author = 0;
   }

   return $author;
}