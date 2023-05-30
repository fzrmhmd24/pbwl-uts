<?php

$smrt = new App\Smartphone;
$rows = $smrt->tampil();

?>

<h2>Smartphone</h2>

<a href="index.php?hal=smartphone_input" class="btn">Tambah Smartphone</a>

<table>
    <tr>
        <th>ID SMARTPHONE</th> 
        <th>NAMA SMARTPHONE</th>
        <th>HARGA SERVICE SMARTPHONE</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_smartphone']; ?></td>
        <td><?php echo $row['nama_smartphone']; ?></td>
        <td><?php echo $row['hrg_smartphone']; ?></td>
        <td><a href="index.php?hal=smartphone_edit&id=<?php echo $row['id_smartphone']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=smartphone_delete&id=<?php echo $row['id_smartphone']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
