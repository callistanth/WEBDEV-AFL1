<?php require("controllerMenu.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body>
       <div class="container p-3">
        <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="viewMenu.php">List Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewAddMenu.php">Tambah Menu</a>
      </li>
    </ul>
  </div>
  <div class="card-body">

   
    <div class="container p-3">
        <h1>List Menu MichCall</h1>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">kategori</th>
      <th scope="col">Harga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>
        <button class="btn btn-warning">Update</button>
        <button class="btn btn-danger">Delate</button>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    </div>
</body>
</html>