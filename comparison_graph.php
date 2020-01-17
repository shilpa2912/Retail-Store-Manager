<?php
include 'db.php';



$sql = "select wk_day, sum(sales_last_year_same_week) as sales_last_year_same_week, sum(sales) as sales, sum(sales_pred) as prediction_this_week
from pds_sol_1.dh_sales_demo
group by wk_day
order by case wk_day when 'Sun' then 7
					 when 'Mon' then 1
                     when 'Tue' then 2
                     when 'Wed' then 3
                     when 'Thu' then 4
                     when 'Fri' then 5
                     when 'Sat' then 6
				end";
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
