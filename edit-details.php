<?php

    session_start();
    require 'pdo.php';

    $id = $_POST['id'];
    $model = $_POST['model'];
    $engine = $_POST['engine'];
    $door = $_POST['door'];
    $status = $_POST['status'];
    $dimension = $_POST['dimension'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];

    $b = str_replace( ',', '', $price );
    $update_price = floatval($b);

    $query = $db->query("UPDATE CARS SET model='$model', engine='$engine', door=$door, status=$status, dimension='$dimension', weight='$weight', price=$update_price WHERE id='$id'");
    $query->execute();

    $uri_array = explode("/", $_SERVER['REQUEST_URI']);
    $uri_link = [];

    for ($i=0; $i < sizeof($uri_array) - 1; $i++) {
        array_push($uri_link, $uri_array[$i]);
    }

    $link_redirect = implode("/",$uri_link) . "/admin-page.php";
    header('Location: '.$link_redirect);
 ?>
