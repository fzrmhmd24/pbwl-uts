<?php

$id = $_GET['id'];

$smrt = new App\Smartphone();
$rows = $smrt->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=smartphone_tampil">Kembali</a>
</div>