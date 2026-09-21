<?php

    include("modelMenu.php");
    session_start();

    if (!isset($_SESSION['menuList'])) {
        $_SESSION['menuList'] = array(); 
    }
  

    function createMenu() {
        $menu = new modelMenu();
        $menu->nama = $_POST['inputName'];
        $menu->kategori = $_POST['inputKategori'];
        $menu->harga = $_POST['inputHarga'];
    }

    if (!isset($_POST('buttonTambah'))) {
         createMenu();
         header("Location:viewMenu.php");
    }
?>