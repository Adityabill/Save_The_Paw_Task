<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'SaveThePaws');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['delete'])){
    $blog_title_to_delete = $_POST['blog_title_to_delete']; 
    $sql_delete = "Delete from blogs where Blog_Title = '$blog_title_to_delete'";

    if(mysqli_query($conn, $sql_delete)){
        header('Location: Admin_index.php');
    } {
        echo 'Query error: '.mysqli_error($conn); 
    }

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Delete Blog</title>
        <link href="Static/Main.css" rel="stylesheet">
   <h1 class="head-text-align">Save the Paws</h1>
        <?php
        include('templates/header.php')
        ?>


<section>
<form class="container" action="Remove_Blog.php" method="POST">
<div class="row g-3 align-items-center inputs-spacing">
  <div class="col-auto">
    <label class="col-form-label">Title of Blog:</label>
  </div>
  <div class="col-auto">
    <input type="text" name="blog_title_to_delete" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div>
 
</div>
  <input type="submit" class="btn btn-danger" name="delete" value="Delete">
</form>


</section>

    </body>
</html>