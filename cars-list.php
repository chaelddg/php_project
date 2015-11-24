

<div class="container">
    <div class="row">
<?php
    require 'pdo.php';
    $query = $db->query("SELECT * FROM CARS");

    while ($r = $query->fetch()) {
        // echo $r['id'] . "<br>";
        // echo $r['model'] . "<br>";
        // echo $r['img_path'] . "<br>";

        // $_SESSION['car_model'] = $r['model'];
        // $_SESSION['img_path'] = $r['img_path'];
        // $_SESSION['car_engine'] = $r['engine'];
        // $_SESSION['car_door'] = $r['door'];
        // $_SESSION['car_status'] = $r['status'];
        // $_SESSION['car_dimension'] = $r['dimension'];
        // $_SESSION['car_weight'] = $r['weight'];
        // $_SESSION['car_price'] = $r['price'];
        // echo "<div class='row'>";
        // echo "<div class='col-sm-6 col-md-4'>";


        echo "<div class=\"col-xs-6 col-md-3\">";
        echo "<a href=\"view.php?id=" .$r['id']. "\" class=\"thumbnail\">";
        echo "<img src='" . $r['img_path'] . "'>";
        echo "<h3 class=\"text-center\">" . $r['model'] . " </h3>";
        echo "</a>";
        echo "</div>";
        // echo "</div>";
    }
?>

    </div>
</div>
