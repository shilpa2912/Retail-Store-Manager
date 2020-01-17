<?php
include 'db.php';



$sql = "select sum(sales)as sales_till_now, round(sum(sales_pred),2) as prediction_till_now
from pds_sol_1.dh_sales_demo
where sales<>0";

$result = $con->query($sql);
$php_data_array = Array(); // create PHP array

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($php_data_array,$row);
    }
} else {
    echo "0 results";
}
$con->close();

echo json_encode($php_data_array);

?>
