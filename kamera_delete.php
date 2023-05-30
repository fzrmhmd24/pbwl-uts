<?php

$id = $_GET['id'];

$kam = new App\Kamera();
$rows = $kam->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=kamera_tampil">Kembali</a>
</div>