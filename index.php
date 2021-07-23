<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'SaveThePaws');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

$sql = 'select * from blogs';

//storing the query results in '$result' variable 
$result = mysqli_query($conn, $sql);

//fetching the result as an array
$blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);


//freeing the result from memory
mysqli_free_result($result);

//closing the database connection
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Our Blogs</title>
        <link href="Static/Main.css" rel="stylesheet">
   <h1 class="head-text-align">Save the Paws</h1>
        <?php
        include('templates/header.php')
        ?>


<section>
<?php foreach($blogs as $blog){ ?>
<div class="blog-div img-boundary">
<div class="card" style="width: 18rem;">
  <img src="Images/Blog_img.jpg" class="card-img-top img-boundary" alt="Blog Image">
  <div class="card-body">
    <h5 class="card-title"><?php echo htmlspecialchars($blog['Blog_Title']); ?></h5>
    <p><small>By - <?php echo htmlspecialchars($blog['Blog_Author']) ?> </small> </p>
    <p><?php echo htmlspecialchars($blog['Blog_Content']) ?> </p>
    <p><small>Posted on: <?php echo htmlspecialchars($blog['Posted_On']); ?></small></p>
  </div>
</div>
</div>
<?php } ?>


</section>

    </body>
</html>