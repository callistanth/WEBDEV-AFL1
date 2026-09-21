<?php

    include("modelMenu.php");
    session_start();

    if (!isset($_SESSION['menuList'])) {
        $_SESSION['menuList'] = array(); 
    }
  

    function createMember() {
        $menu = new modelMenu();
        $menu->name = $_POST['inputName'];
        $menu->kategori = $_POST['inputKategori'];
        $menu->harga = $_POST['inputHarga'];
    }

    if (!isset($_POST('buttonTambah'))) {
         
    }
?>