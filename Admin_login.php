<?php  

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'SaveThePaws');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select * from Admin_Login where username = '$username' and password = '$password'";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1){
    $_SESSION['username'] = $_POST['username'];
    header('Location: Admin_index.php');
  }
  else{
    echo "Error";
  }
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Login</title>
        <link href="Static/Main.css" rel="stylesheet">
   <h1 class="head-text-align">Save the Paws</h1>
        <?php
        include('templates/header.php')
        ?>


<section>
<form class="container" action="Admin_login.php" method="POST">
<div class="row g-3 align-items-center inputs-spacing">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">User Name:</label>
  </div>
  <div class="col-auto">
    <input type="text" name="username" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div>
  <div class="row g-3 align-items-center inputs-spacing">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" name="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div>
  <input type="submit" name="submit" class="btn btn-primary" value="Log In">
</form>


</section>

    </body>
</html>