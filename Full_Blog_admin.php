<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'SaveThePaws');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_GET['Blog_Title'])){
    $blog_title = mysqli_real_escape_string($conn, $_GET['Blog_Title']);

    $sql = "select * from blogs where Blog_Title = $blog_title";

    $result = mysqli_query($conn, $sql);

    $blog = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}





?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Page</title>
        <link href="Static/Main.css" rel="stylesheet">
   <h1 class="head-text-align">Save the Paws</h1>
        <?php
        include('templates/header.php')
        ?>

<section>
    <div>
     <?php if($blog): ?>
        <h1><?php echo htmlspecialchars($blog['Blog_Title']); ?></h1>
        <p><?php echo htmlspecialchars($blog['Blog_Content']); ?></p>

     <?php else: ?>   

     <?php endif; ?>   

    </div>
</section>        