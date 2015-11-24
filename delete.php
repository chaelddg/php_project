<?php

    session_start();
    require 'pdo.php';

    $id = $_GET['id'];

    $query = $db->query("DELETE FROM CARS WHERE id='$id'");
    $query->execute();

    $uri_array = explode("/", $_SERVER['REQUEST_URI']);
    $uri_link = [];

    for ($i=0; $i < sizeof($uri_array) - 1; $i++) {
        array_push($uri_link, $uri_array[$i]);
    }

    $link_redirect = implode("/",$uri_link) . "/admin-page.php";
    header('Location: '.$link_redirect);
 ?>
