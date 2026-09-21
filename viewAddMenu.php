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
        <a class="nav-link" href="viewMenu.php">List Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="viewAddMember.php">Tambah Menu</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h1>Menambah Menu Baru</h1>
        <form method= "POST" action = "controllerMenu.php">
            <div class="form-group">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" name="inputNama">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKategori">Kategori</label>
                <input type="text" class="form-control" name="inputKategori">
                </div>

                <div class="form-group col-md-6">
                <label for="inputHarga">Harga</label>
                <input type="text" class="form-control" name="inputHarga">
                </div>
                
            </div>
            <button name="buttonTambah" type="submit" class="btn btn-primary">Tambah</button>
        </form>
  </div>
  </div>
  </div>
</body>
</html>