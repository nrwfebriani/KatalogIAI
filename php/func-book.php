<?php  

# Get All books function
function get_all_books($conn){
   $sql  = "SELECT * FROM books ORDER bY id DESC";
   $stmt = mysqli_query($conn, $sql);

   if ($stmt->num_rows > 0) {
   	 $books = $stmt->fetch_all(MYSQLI_ASSOC);
       echo '<script>console.log("books")</script>';   
      }else {
      $books = 0;
   }

   return $books;
}

# Get  book by ID function
function get_book($conn, $id){
   $sql  = "SELECT * FROM books WHERE id='$id'";
   $stmt = mysqli_query($conn, $sql);

   if ($stmt->num_rows > 0) {
   	  $book = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $book = 0;
   }

   return $book;
}


# Search books function
function search_books($conn, $key){
   # creating simple search algorithm :) 
   $key = "%{$key}%";

   $sql  = "SELECT * FROM books 
            WHERE title LIKE ?
            OR description LIKE ?";
   $stmt = mysqli_query($conn, $sql);


   if ($stmt->num_rows > 0) {
        $books = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $books = 0;
   }

   return $books;
}

# get books by category
function get_books_by_category($conn, $id){
   $sql  = "SELECT * FROM books WHERE category_id='$id'";
   $stmt = mysqli_query($conn, $sql);

   if ($stmt->num_rows > 0) {
        $books = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $books = 0;
   }

   return $books;
}


# get books by author
function get_books_by_author($conn, $id){
   $sql  = "SELECT * FROM books WHERE author_id='$id'";
   $stmt = mysqli_query($conn, $sql);

   if ($stmt->num_rows > 0) {
        $books = $stmt->fetch_all(MYSQLI_ASSOC);
   }else {
      $books = 0;
   }

   return $books;
}