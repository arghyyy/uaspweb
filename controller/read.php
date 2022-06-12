<?php


require '../data/connection.php';
require '../data/functions.php';



$result = getData($_GET["sort"]);
$data = [];
while($row = $result->fetch_assoc()){
    array_push($data, $row);
}

echo json_encode($data);