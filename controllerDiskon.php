<?php include("modelDiskon.php");

    session_start();


    if(!isset($_SESSION['diskonlist'])){
        $_SESSION['diskonlist'] = array();
    }


    function getKategoriDiskon(){
        return array("Semua", "Makanan", "Minuman", "Camilan", "Dessert");
    }


    function validasiDiskon(){
        $nama = isset($_POST['inputNama']) ? trim($_POST['inputNama']) : '';
        $persentase = isset($_POST['inputPersentase']) ? $_POST['inputPersentase'] : '';
        $kategori = isset($_POST['inputKategori']) ? $_POST['inputKategori'] : '';

        if($nama === ''){
            return "Nama diskon tidak boleh kosong.";
        }
        if(!is_numeric($persentase) || $persentase < 1 || $persentase > 100){
            return "Persentase diskon harus berupa angka antara 1 sampai 100.";
        }
        if(!in_array($kategori, getKategoriDiskon())){
            return "Kategori tidak valid.";
        }
        return null;
    }


    function createDiskon(){
        $diskon = new modelDiskon();
        $diskon -> nama = trim($_POST['inputNama']);
        $diskon -> persentase = (float) $_POST['inputPersentase'];
        $diskon -> kategori = $_POST['inputKategori'];
        array_push($_SESSION['diskonlist'], $diskon);
    }


    function getAllDiskon(){
        return $_SESSION['diskonlist'];
    }


    function deleteDiskon($diskonIndex){
        unset($_SESSION['diskonlist'][$diskonIndex]); 
    }


    function getDiskonWithID($diskonID){
        if(isset($_SESSION['diskonlist'][$diskonID])){
            return $_SESSION['diskonlist'][$diskonID];
        }
        return null;
    }


    function updateDiskon($diskonID){
        $diskon = $_SESSION['diskonlist'][$diskonID]; 
        $diskon -> nama = trim($_POST['inputNama']);
        $diskon -> persentase = (float) $_POST['inputPersentase'];
        $diskon -> kategori = $_POST['inputKategori'];
    }


    function getDiskonByKategori($kategori){
        $terbaik = null;
        foreach($_SESSION['diskonlist'] as $diskon){
            if($diskon->kategori == "Semua" || $diskon->kategori == $kategori){
                if($terbaik === null || $diskon->persentase > $terbaik->persentase){
                    $terbaik = $diskon;
                }
            }
        }
        return $terbaik;
    }


    function hitungHargaSetelahDiskon($harga, $persentase){
        return $harga - ($harga * $persentase / 100);
    }


    if(isset($_POST['buttonTambahDiskon'])){
        $error = validasiDiskon();
        if($error !== null){
            $_SESSION['diskonError'] = $error;
            header("Location:viewAddDiskon.php");
            exit;
        }
        createDiskon();
        header("Location:viewDiskon.php"); 
        exit;
    }


    if(isset($_GET['deleteDiskonID'])){
        deleteDiskon($_GET['deleteDiskonID']);
        header("Location:viewDiskon.php"); 
        exit;
    }


    if(isset($_POST['buttonUpdateDiskon'])){
        $diskonID = $_POST['inputIDDiskon'];
        if(getDiskonWithID($diskonID) === null){
            header("Location:viewDiskon.php");
            exit;
        }
        $error = validasiDiskon();
        if($error !== null){
            $_SESSION['diskonError'] = $error;
            header("Location:viewUpdateDiskon.php?updateID=" . urlencode($diskonID));
            exit;
        }
        updateDiskon($diskonID);
        header("Location:viewDiskon.php"); 
        exit;
    }