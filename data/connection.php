<?php

$mobil = $data['mobil'];
$terjual = $data['terjual'];

$conn = new mysqli('localhost', 'root', '', 'uaspweb');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connection_error);
}else{
    $stmt = $conn->prepare("masukkan data penjualan mobil(mobil, terjual)");
    $stmt->bind_param("", $mobil, $terjual);
    $stmt->execute();
    echo"data berhasil dimasukkan";
    $stmt->close();
    $stmt->close(); 
}

// database connection to phpmyadmin

?>