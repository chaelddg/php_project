<?php include('./includes/header.php'); ?>

<?php
    require 'pdo.php';
 ?>

 <?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];

    $query = $db->query("INSERT INTO USERS(username, password, firstname, lastname, middlename, role, active) VALUES('$username', '$password', '$firstname', '$lastname', '', $role, 1)");

  ?>

  <div class="container">
      <div class="row">
          <div class="col-lg-12">
             <h1>You have Registered Successfully</h1>
             <hr>
            <a href='index.php'>Click To Login</a>
          </div>
      </div>
  </div>

  <?php include('./includes/footer.php'); ?>
