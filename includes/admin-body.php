<?php
    require 'pdo.php';
    $query = $db->query("SELECT * FROM CARS");
?>


<div class="container">
    <?php
        if (isset($_SESSION['username']) && $_SESSION['userid'] == 1) {
            include('actions.php');
        }
     ?>
    <h3 class="page-header">Car List</h3>
    <table id="carstable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($r = $query->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $r['id'] . '</td>';
                    echo "<td>" . $r['model'] . '</td>';
                    echo "<td class='text-center'>" . $r['status'] . '</td>';
                    echo "<td class='text-center'><a href='view.php?id=" .$r['id']. "' class='btn btn-default'>View</a>&nbsp;<a href='edit.php?id=" .$r['id']. "' class='btn btn-success'>Edit</a>&nbsp;<a href='delete.php?id=" .$r['id']. "' onclick='return confirm(\"Are you Sure you want to delete this record?\")' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>" . "\n";
                }
             ?>
        </tbody>
    </table>
</div>
