<?php
session_start();
require_once "includes/variables.php";
require_once "includes/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <title><?= $pageTitle; ?> -Beanies PHP</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="#">My Beanies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">list</a>
          <?php
          if(isset($_SESSION['username'])) {
            ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php"><?=$_SESSION['username'];?></a>

            <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <?php } else { ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php">log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">logout</a>
          </li>
         <?php } ?>
          

</ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
    </nav>
<?php 
  if(isset($_GET['login'])&& $_GET['login'] =="success"){ ?>
    <div class="alert alert-success" role="alert">
   successfull login !
</div>
 <?php } ?>

 <?php 
  if(isset($_GET['logout'])&& $_GET['logout'] =="success"){ ?>
    <div class="alert alert-success" role="alert">
   successfull logout !
</div>
 <?php } ?>
