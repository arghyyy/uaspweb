<?php

require '../data/connection.php';
require '../data/functions.php';


$result = FALSE;
if(isset($_POST['nama']) & isset($_POST['jumlah_terjual']) & isset($_POST['id_jenis']))
{
    $result = editData($_POST);
}

echo json_encode(["result" => $result]);