<?php

    include("modelMenu.php");
    session_start();

    //create session memberlist if not exist
    if(!isset($_SESSION['menulist'])){
        $_SESSION['menulist'] = array();
    }

    function createMenu(){
        $menu = new modelMenu();
        $menu -> nama = $_POST['inputNama'];
        $menu -> kategori = $_POST['inputKategori'];
        $menu -> harga = $_POST['inputHarga'];
        array_push($_SESSION['menulist'], $menu);
    }


    function getAllMenu(){
        return $_SESSION['menulist'];
    }

    //jika buttonTambah di klik
    if(isset($_POST['buttonTambah'])){
        createMenu();
        header("Location:viewMenu.php"); //kembali ke halaman lain
    }


?>