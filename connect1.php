<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ramita63070147.mysql.database.azure.com', 'ramita63070147@ramita63070147', 'Rt0877003141', 'labitff', 3306);
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>