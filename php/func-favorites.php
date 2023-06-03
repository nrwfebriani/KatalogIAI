<?php

# function add to fav
function add_fav($con){
    $sql  = "SELECT * FROM books";
    $stmt = $con->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() > 0) {
          $categories = $stmt->fetchAll();
    }else {
       $categories = 0;
    }
 
    return $categories;
 }
 
 
 # Get category by ID
 function get_category($con, $id){
    $sql  = "SELECT * FROM books WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->execute([$id]);
 
    if ($stmt->rowCount() > 0) {
          $category = $stmt->fetch();
    }else {
       $category = 0;
    }
 
    return $category;
 }