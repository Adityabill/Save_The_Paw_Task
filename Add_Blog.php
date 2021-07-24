<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'SaveThePaws');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['submit'])){
    $blog_title = $_POST['blog_title'];
    $blog_author = $_POST['blog_author'];
    $blog_content = $_POST['blog_content'];

    $sql = "insert into blogs(Blog_Title, Blog_Author, Blog_Content)
            values('$blog_title', '$blog_author', '$blog_content')";

    if(mysqli_query($conn, $sql)){
        header('Location: Admin_index.php');
    }        

    else{
        echo 'Error: '. mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Blog</title>
        <link href="Static/Main.css" rel="stylesheet">
   <h1 class="head-text-align">Save the Paws</h1>
        <?php
        include('templates/header.php')
        ?>


<section class="container">
<form action="Add_Blog.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Blog Title:</label>
    <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of author:</label>
    <input type="text" name="blog_author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Write your contents here:</label>
    <textarea name="blog_content" required></textarea>
  </div>

  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>
</section>

<?php include("templates/Footer.php"); ?>

    </body>
</html>