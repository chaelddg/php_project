<?php

    session_start();
    require 'pdo.php';

    $filetmp = $_FILES["toProcess"]["tmp_name"];
    $filename = $_FILES["toProcess"]["name"];
    $filetype = $_FILES["toProcess"]["type"];
    $filepath = "uploads/".$filename;
    $model = $_POST['model'];
    $engine = $_POST['engine'];
    $door = $_POST['door'];
    $status = $_POST['status'];
    $dimension = $_POST['dimension'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];


    $b = str_replace( ',', '', $price );
    $update_price = floatval($b);


    if (is_uploaded_file($_FILES['toProcess']['tmp_name'])) {
        move_uploaded_file($filetmp, $filepath);
        $query = $db->query("INSERT INTO CARS(img_name, img_path, img_type, model, engine, door, status, dimension, weight, price)
            VALUES('$filename', '$filepath', '$filetype', '$model', '$engine', $door, $status, '$dimension', '$weight', $update_price)");

        $uri_array = explode("/", $_SERVER['REQUEST_URI']);
        $uri_link = [];

        for ($i=0; $i < sizeof($uri_array) - 1; $i++) {
            array_push($uri_link, $uri_array[$i]);
        }

        $link_redirect = implode("/",$uri_link) . "/admin-page.php";
        header('Location: '.$link_redirect);
    }


 ?>
