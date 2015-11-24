
<?php include('./includes/header.php'); ?>
<?php include('./includes/nav-header.php'); ?>

<div class="container">
    <?php

       if (isset($_SESSION['username'])) {
           include('./includes/actions.php');
           include('./includes/add-body.php');
       }
       else {
           $uri_array = explode("/", $_SERVER['REQUEST_URI']);
           $uri_link = [];

           for ($i=0; $i < sizeof($uri_array) - 1; $i++) {
               array_push($uri_link, $uri_array[$i]);
           }

           $link_redirect = implode("/",$uri_link) . "/index.php";
           header('Location: '.$link_redirect);
       }

    ?>
</div>

 <?php include('./includes/footer.php'); ?>
