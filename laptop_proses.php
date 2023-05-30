<?php

require_once "inc/Koneksi.php";
require_once "app/Laptop.php";

$kam = new App\Laptop();

if (isset($_POST['btn_simpan'])) {
    $kam->simpan();
    header("location:index.php?hal=laptop_tampil");
}

if (isset($_POST['btn_update'])) {
    $kam->update();
    header("location:index.php?hal=laptop_tampil");
}