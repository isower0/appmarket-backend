<?php
include 'dbconfig.php';


$id_market = $_POST['id_market'];

$sql = "SELECT * FROM `count_sell_product` WHERE `id_market` = '$id_market' ORDER BY `count_sell_product`.`myCount` DESC";
$result = mysqli_query($conn,$sql);


$arr = array();

while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}

mysqli_close($conn);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);






?>