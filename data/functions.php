<?php



require "connection.php";

function getdata($sort)
{
        global $db;
        $result = $db->query("SELECT * FROM mobil ORDER BY terjual $sort");
        return $result;
}

function createData($data)
{
    global $db;
    $nama = $data['nama'];
    $jenis = $data['jenis'];
    $terjual = $data['terjual'];
    $sql = "INSERT INTO mobil (mobil, jenis, terjual) VALUES($mobil, $jenis, $terjual)";
    return $db->query($sql);
}

function editData($data)
{
    global $db;
    $nama = $data['nama'];
    $jenis = $data['jenis'];
    $terjual = $data['terjual'];
    $id = $data['id'];
    $sql = "UPDATE mobil set mobil='$mobil',jenis='$jenis', terjual = $terjual WHERE id=$id";
    return $db->query($sql);
}


