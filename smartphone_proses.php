<?php

require_once "inc/Koneksi.php";
require_once "app/Smartphone.php";

$smrt = new App\Smartphone();

if (isset($_POST['btn_simpan'])) {
    $smrt->simpan();
    header("location:index.php?hal=smartphone_tampil");
}

if (isset($_POST['btn_update'])) {
    $smrt->update();
    header("location:index.php?hal=smartphone_tampil");
}