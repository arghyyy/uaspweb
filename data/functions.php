<?php



require "connection.php";

function getdata($sort)
{
        global $conn;
        // echo "SELECT * FROM mobil JOIN jenis ON mobil.id_jenis = mobil.id_jenis ORDER BY jumlah_terjual $sort";
        $result = $conn->query("SELECT * FROM mobil JOIN jenis ON mobil.id_jenis = mobil.id_jenis ORDER BY jumlah_terjual $sort");
        return $result;
}

function createData($data)
{
    global $conn;
    $nama = $data['nama'];
    $jumlah_terjual = $data['jumlah_terjual'];
    $id_jenis = $data['id_jenis'];
    $sql = "INSERT INTO mobil (id, nama, jumlah_terjual, id_jenis) VALUES(NULL, $nama, $jumlah_terjual, $id_jenis)";
    return $conn->query($sql);
}

function editData($data)
{
    global $conn;
    $id = $data['id'];
    $nama = $data['nama'];
    $jumlah_terjual = $data['jumlah_terjual'];
    $id_jenis = $data['id_jenis'];
    $sql = "UPDATE SET nama = '$nama', jumlah_terjual = '$jumlah_terjual', id_jenis = '$id_jenis' ";
    return $conn->query($sql);
}


