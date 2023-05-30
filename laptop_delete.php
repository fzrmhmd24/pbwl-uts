<?php

$id = $_GET['id'];

$lap = new App\Laptop();
$rows = $lap->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=laptop_tampil">Kembali</a>
</div>