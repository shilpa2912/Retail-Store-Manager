<?php
include 'db.php';



$sql = "select '200000' as week_target, sum(sales) as sales_till_now, round(sum(sales_pred),2) as prediction_this_week,
200000-sum(sales) as sales_target_gap , round((sum(sales)/200000)*100,2) as salespercent_till_now,
round((sum(sales_pred)/200000)*100,2) as predictionpercentwrt_target
from pds_sol_1.dh_sales_demo";
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
