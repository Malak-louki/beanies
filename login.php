<?php 
$pageTitle = "login";
include 'includes/header.php';
if (isset($_POST['username']) && $_POST['password'] == $password){
  $_SESSION['username'] = $_POST['username'];
  header('Location: index.php?login=success');
} elseif (isset($_POST['password']) && $_POST['password'] != $password) { ?>
<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>
<?php } ?>


<form action="" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">user name</label>
    <input type="text" class="form-control" id="username"  placeholder="Enter user name" name="username">
  </div>
  <div class="mb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include 'includes/footer.php';
?>



