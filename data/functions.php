<?php



require "connection.php";

function getdata($sort)
{
        global $db;
        $result = $db->query("SELECT * FROM mobil"); // ORDER BY terjual $sort");
        return $result;
}

function createData($data)
{
    global $db;
    $mobil = $data['mobil'];
    $terjual = $data['terjual'];
    $sql = "INSERT INTO mobil (mobil, terjual) VALUES('$toyota', $terjual)";
    return $db->query($sql);
}

function editData($data)
{
    global $db;
    $mobil = $data['mobil'];
    $terjual = $data['terjual'];
    $id = $data['id'];
    $sql = "UPDATE mobil set mobil='$mobil', terjual = $terjual WHERE id=$id";
    return $db->query($sql);
}


