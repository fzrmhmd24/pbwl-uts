<?php

require_once "inc/Koneksi.php";
require_once "app/Kamera.php";

$kam = new App\Kamera();

if (isset($_POST['btn_simpan'])) {
    $kam->simpan();
    header("location:index.php?hal=kamera_tampil");
}

if (isset($_POST['btn_update'])) {
    $kam->update();
    header("location:index.php?hal=kamera_tampil");
}