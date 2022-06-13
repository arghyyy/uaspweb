<?php 

require "data/connection.php";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM pembeli WHERE id = $id";
    $db->query($sql);
    echo "<script>alert('DATA BERHASIL DIHAPUS'); window.location.href = 'index.php';</script>";
    // header('Location: index.php');
}


$idButton = "Add";
$valButton = "Add Data";

$mobil = "";
$terjual = "";
if(isset($_GET["edit"])){
    $idButton = "edit";
    $valButton = "Edit Data";
    $id = $_GET['edit'];
    $sql = "SELECT * FROM pembeli WHERE id = $id";
    $data = $db->query($sql);
    $result = $data->fetch_assoc();
    $mobil = $result["mobil"];
    $Terjual = $result["Terjual"];
    $id = $result["id"];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="assets/style.css">
    <title>Data Penjualan Mobil</title>
  </head>
  <body>
    <h1 class="text-center mt-5">Data Penjualan Mobil</h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <!-- tambah / edit -->
                        <form action="" method="post" class="row" id="formId">
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="<?= $mobil ?>" id="mobil" name="mobil" placeholder="Masukan mobil">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="<?= $terjual ?>" id="terjual" name="terjual" placeholder="Masukan jumlah terjual">
                            </div>
                            <?php
                            if($idButton == "edit"){
                                ?>
                                <input type="hidden" id="id" name="id" value="<?= $id ?>">
                                <?php
                            }
                            ?>
                            <div class="col-md-12 mt-2">
                                <button type="submit" id="<?= $idButton ?>" class="btn btn-primary w-full" style="width: 100%;"><?= $valButton ?></button>
                            </div>
                        </form>
                        <!-- data -->
                        <select class="form-select form-select-sm mt-5" id="sort" aria-label=".form-select-sm example">
                            <option value="ASC">Penjualan Terkecil</option>
                            <option value="DESC">Penjualan Terbesar</option>
                        </select>
                        <table class="table table-striped mt-1">
                            <thead>
                                <tr>
                                <th scope="col">Mobil</th>
                                <th scope="col">Terjual</th>
                                <th scope="col">Action</th>               
                                </tr>
                            </thead>
                            <tbody id="data">
  
                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Instead of -->

    <script src="assets/script.js"></script>
  </body>
</html>