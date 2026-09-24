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
              <a class="nav-link" href="viewDiskon.php">List Diskon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="viewAddDiskon.php">Tambah Diskon</a>
            </li>
          </ul>
        </div>

        <div class="card-body">
          <h1>Menambah Diskon Baru</h1>

          <?php if(isset($_SESSION['diskonError'])){ ?>
            <div class="alert alert-danger"><?=htmlspecialchars($_SESSION['diskonError'])?></div>
            <?php unset($_SESSION['diskonError']); ?>
          <?php } ?>

          <form method="POST" action="controllerDiskon.php">
            <div class="form-group">
              <label for="inputNama">Nama Diskon</label>
              <input type="text" class="form-control" id="inputNama" name="inputNama" placeholder="Input Nama Diskon" required>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputKategori">Berlaku untuk Kategori</label>
                <select class="form-control" id="inputKategori" name="inputKategori" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <?php foreach(getKategoriDiskon() as $kategori){ ?>
                      <option value="<?=htmlspecialchars($kategori)?>"><?=htmlspecialchars($kategori)?></option>
                    <?php } ?>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="inputPersentase">Persentase (%)</label>
                <input type="number" class="form-control" id="inputPersentase" name="inputPersentase" placeholder="1 - 100" min="1" max="100" step="1" required>
              </div>
            </div>

            <button name="buttonTambahDiskon" type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>