<?php

$kam = new App\Laptop;
$rows = $kam->tampil();

?>

<h2>Laptop</h2>

<a href="index.php?hal=laptop_input" class="btn">Tambah Laptop</a>

<table>
    <tr>
        <th>ID LAPTOP</th> 
        <th>NAMA LAPTOP</th>
        <th>HARGA SERVICE LAPTOP</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_laptop']; ?></td>
        <td><?php echo $row['nama_laptop']; ?></td>
        <td><?php echo $row['hrg_laptop']; ?></td>
        <td><a href="index.php?hal=laptop_edit&id=<?php echo $row['id_laptop']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=laptop_delete&id=<?php echo $row['id_laptop']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
