<?php
require "../../Database/koneksi.php";

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

$id = $_GET["id"];
print_r($id);
if(hapusProduk($id)>0){
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href='../index.php?halaman=produk';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data Gagal Dihapus');
            document.location.href='../index.php?halaman=produk';
        </script>
    ";
}
?>