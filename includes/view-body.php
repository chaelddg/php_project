<?php

    require 'pdo.php';

    $id = $_GET['id'];
    $query = $db->query("SELECT * FROM CARS WHERE id='$id'");

    while ($r = $query->fetch()) {
        $_SESSION['car_id'] = $r['id'];
        $_SESSION['car_model'] = $r['model'];
        $_SESSION['img_path'] = $r['img_path'];
        $_SESSION['car_engine'] = $r['engine'];
        $_SESSION['car_door'] = $r['door'];
        $_SESSION['car_status'] = $r['status'];
        $_SESSION['car_dimension'] = $r['dimension'];
        $_SESSION['car_weight'] = $r['weight'];
        $_SESSION['car_price'] = $r['price'];
    }

?>

<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo $_SESSION['img_path'] ?>" alt="...">
            <div class="caption">
                <h3><?php echo $_SESSION['car_model'] ?></h3>
                <hr>
                <h4>Engine: <?php echo $_SESSION['car_engine'] ?></h4>
                <h4>Door: <?php echo $_SESSION['car_door'] ?></h4>
                <h4>Status: <?php echo $_SESSION['car_status'] ?></h4>
                <h4>Dimension: <?php echo $_SESSION['car_dimension'] ?></h4>
                <h4>Weight: <?php echo $_SESSION['car_weight'] ?></h4>
                <h4>Price: &#8369; <?php echo number_format($_SESSION['car_price'], 2) ?></h4>
                <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
            </div>
        </div>
    </div>
</div>
