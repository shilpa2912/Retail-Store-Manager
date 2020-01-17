<?php
$con=mysqli_init();
mysqli_ssl_set($con, NULL, NULL, './BaltimoreCyberTrustRoot.crt.pem', NULL, NULL);
mysqli_real_connect($con,"pdsmysql.mysql.database.azure.com", "MySQLAdmin@pdsmysql", "Admin@123", "pds_sol_1", 3306);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
