<?php

require '../data/connection.php';
require '../data/functions.php';


$result = FALSE;
if(isset($_POST['Mobil']) && isset($_POST['Terjual']))
{
    $result = deleteData($_POST);
}

echo json_encode(["result" => $result]);