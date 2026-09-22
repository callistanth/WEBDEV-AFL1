<?php include("modelMenu.php");

    session_start();


    // create session memberlist if not exist
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


    function deleteMenu($menuIndex){
        unset($_SESSION['menulist'][$menuIndex]); // array 0, 1, 2
    }


    function getMenuWithID($menuID){
        return $_SESSION['menulist'][$menuID];
    }


    function updateMenu($menuID){
        $menu = $_SESSION['menulist'][$menuID]; // ambil data dengan index tertentu
        $menu -> nama = $_POST['inputNama'];
        $menu -> kategori = $_POST['inputKategori'];
        $menu -> harga = $_POST['inputHarga'];
    }


    // jika buttonTambah di klik
    if(isset($_POST['buttonTambah'])){
        createMenu();
        header("Location:viewMenu.php"); // kembali ke halaman lain
    }


    // jika buttonDelete di klik
    if(isset($_GET['deleteID'])){
        deleteMenu($_GET['deleteID']);
        header("Location:viewMenu.php"); // kembali ke halaman lain
    }


    if(isset($_POST['buttonUpdate'])){
        updateMenu($_POST['inputID']);
        header("Location:viewMenu.php"); // kembali ke halaman lain
    }


?>