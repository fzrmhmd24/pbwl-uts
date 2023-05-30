<?php

$kam = new App\Kamera;
$rows = $kam->tampil();

?>

<h2>Kamera</h2>

<a href="index.php?hal=kamera_input" class="btn">Tambah Kamera</a>

<table>
    <tr>
        <th>ID KAMERA</th>
        <th>NAMA KAMERA</th>
        <th>HARGA SERVICE KAMERA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_kamera']; ?></td>
        <td><?php echo $row['nama_kamera']; ?></td>
        <td><?php echo $row['hrg_kamera']; ?></td>
        <td><a href="index.php?hal=kamera_edit&id=<?php echo $row['id_kamera']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=kamera_delete&id=<?php echo $row['id_kamera']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
