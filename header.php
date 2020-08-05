<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Assignment</title>
<!-- <link rel="stylesheet" href="style.css"> -->
  <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#"><?php $session= (isset($_SESSION['role'])) ?  $_SESSION['role'] : "Assignment"; echo $session;?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            if (isset($_SESSION['valid'])) {
              // code...
              include("connection.php");
              $result=mysqli_query($mysqli,"SELECT * FROM users");

           ?>
           <?php switch ($_SESSION['role']):case 'Admin': ?>

          <li class="nav-item active">
            <a class="nav-link" href="viewUsers.php">Manage Users
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!-- <li class="nav-item active">
            <a class="nav-link" href="view.php">Manage Editors</a>
          </li> -->
          <li class="nav-item active">
            <a class="nav-link" href="viewArticles.php">Manage Articles</a>
          </li>
          <?php break; ?>
          <?php case 'Author': ?>
          <li class="nav-item active">
            <a class="nav-link" href="viewMyArticles.php">Manage Articles</a>
          </li>
          <?php break; ?>
          <?php default: ?>
          <li class="nav-item active">
            <a class="nav-link" href="editorViewArticles.php">Manage Articles</a>
          </li>
          <?php break; ?>
          <li class="nav-item active">
            <a class="nav-link" href="viewMyArticles.php">Manage Articles</a>
          </li>
          <?php break; ?>
        <?php endswitch ?>
          <li class="nav-item active">
            <a class="nav-link" href="#">Welcome, <?php echo $_SESSION['name'] ?></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <?php
          }  else {


          ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
