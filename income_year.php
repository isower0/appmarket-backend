<?php
include 'dbconfig.php';

$id_market = $_POST['id_market']; 

$sql = "SELECT  YEAR(`datetime_payment`) AS year ,  SUM(`paymant_cost`) AS income 
FROM `history_order` WHERE `status` = 5 AND `id_market` = '$id_market' GROUP BY YEAR(`datetime_payment`) 
 ORDER BY  YEAR(`datetime_payment`)";
$result = mysqli_query($conn,$sql);


$arr = array();

while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}

mysqli_close($conn);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);






?>