<?php



require "connection.php";

function getdata($sort)
{
        global $db;
        $result = $db->query("SELECT * FROM peminat ORDER BY terjual $sort");
        return $result;
}

function insertData($data)
{
    global $db;
    $toyota = $data['fakultas'];
    $terjual = $data['terjual'];
    $sql = "INSERT INTO peminat (fakultas, terjual) VALUES('$toyota', $terjual)";
    return $db->query($sql);
}

function editData($data)
{
    global $db;
    $fakultas = $data['fakultas'];
    $terjual = $data['terjual'];
    $id = $data['id'];
    $sql = "UPDATE peminat set fakultas='$fakultas', terjual = $terjual WHERE id=$id";
    return $db->query($sql);
}


