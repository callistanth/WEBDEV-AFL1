<?php require("controllerDiskon.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Diskon</title>
</head>


<body>
    <div class="container p-3">
      <div class="card text-center">
        <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link" href="viewMenu.php">List Menu</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="viewAddMenu.php">Tambah Menu</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active" href="viewDiskon.php">List Diskon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewAddDiskon.php">Tambah Diskon</a>
          </li>
        </ul>
        </div>

      <div class="card-body">
        <div class="container p-3">
          <h1>List Diskon MichCall</h1>
          <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Diskon</th>
              <th scope="col">Kategori</th>
              <th scope="col">Persentase</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>


          <?php
          $counter = 0;
          $alldiskon = getAllDiskon();
          foreach ($alldiskon as $index => $diskon){
            $counter++;
            ?>

              <tr>
                <th scope="row"> <?=$counter?> </th>
                <td> <?=htmlspecialchars($diskon->nama)?> </td>
                <td> <?=htmlspecialchars($diskon->kategori)?> </td>
                <td> <?=$diskon->persentase?>% </td>
                <td>
                <a href="viewUpdateDiskon.php?updateID=<?=$index?>">
                  <button class="btn btn-warning">Update</button>
                </a>
                <a href="controllerDiskon.php?deleteDiskonID=<?=$index?>"
                    class="btn btn-danger"
                    onclick="return confirm(<?=htmlspecialchars(json_encode('Apakah Anda yakin ingin menghapus diskon ' . $diskon->nama . '?'), ENT_QUOTES)?>);">
                    Delete
                </a>
                </td>
              </tr>
            <?php
          }
          ?>


          </tbody>
          </table>

          <?php if($counter == 0){ ?>
            <p class="text-muted">Belum ada diskon. Tambahkan lewat tab "Tambah Diskon".</p>
          <?php } ?>
      </div>
    </div>
  </div>
</body>
</html>