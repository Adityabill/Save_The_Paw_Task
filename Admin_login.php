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
<form class="container">
<div class="row g-3 align-items-center inputs-spacing">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">User Name:</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div>
  <div class="row g-3 align-items-center inputs-spacing">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div>
  <input type="submit" class="btn btn-primary" value="Log In">
</form>


</section>

    </body>
</html>