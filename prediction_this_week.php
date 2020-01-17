<?php
include 'db.php';

$sql = "select sum(sales_pred) as prediction_this_week from pds_sol_1.dh_sales_demo";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo round($row['prediction_this_week']/1000,2)."K";
    }
} else {
    echo "Some Error <br> Contact admin";
}
$con->close();
?>
