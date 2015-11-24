<?php include('./includes/header.php') ?>
<?php include('./includes/nav-header.php'); ?>

<?php
    require 'pdo.php';
?>

<div class="container">
    <?php

        if (isset($_SESSION['username'])) {

            include('./includes/actions.php');

            $id = $_GET['id'];
            $query = $db->query("SELECT * FROM CARS WHERE id='$id'");

            while ($r = $query->fetch()) {
                $car_id = $r['id'];
                $car_model = $r['model'];
                $img_path = $r['img_path'];
                $car_engine = $r['engine'];
                $car_door = $r['door'];
                $car_status = $r['status'];
                $car_dimension = $r['dimension'];
                $car_weight = $r['weight'];
                $car_price = $r['price'];
            }

            echo "<h1>Edit</h1>" . "<br>";
            echo "<form action=\"edit-details.php\" method=\"POST\">";
            echo " <input type='hidden' class='form-control' name='id' value='". $car_id ."'>";
            echo " Model <input type='text' class='form-control' name='model' value='". $car_model ."' required>" . "<br>";
            echo " Engine <input type='text' class='form-control' name='engine' value='". $car_engine ."' required>" . "<br>";
            echo " Door <input type='text' class='form-control' name='door' value='". $car_door ."'>" . "<br>";
            echo " Status <input type='number' min='0' max='1' class='form-control' name='status' value='". $car_status ."' required>" . "<br>";
            echo " Dimension <input type='text' class='form-control' name='dimension' value='". $car_dimension ."' required>" . "<br>";
            echo " Weight <input type='text' class='form-control' name='weight' value='". $car_weight ."' required>" . "<br>";
            echo " Price (php - peso)<input type='text' class='form-control' name='price' value='". number_format($car_price, 2) ."' required>" . "<br>";
            echo " <input type='submit' class='btn btn-success' onclick='return alert(\"Update Successful\")' value='Update' /> ";
            echo "</form>";

        } else {
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

 <?php include('./includes/footer.php') ?>
