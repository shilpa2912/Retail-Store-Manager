<?php
include 'db.php';



$sql = "select 200000- (A.sales_till_now + B.prediction_for_next_days) as wk_tgt_sales_plus_prediction_next_days
from
(select sum(sales) sales_till_now
from pds_sol_1.dh_sales_demo
where sales<>0)A,
(select  sum(sales_pred) prediction_for_next_days
from pds_sol_1.dh_sales_demo
where sales=0)B";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo round($row['wk_tgt_sales_plus_prediction_next_days']/1000,2)."K";
    }
} else {
    echo "Some Error <br> Contact admin";
}
$con->close();
?>
