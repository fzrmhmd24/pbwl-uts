<?php

$id = $_GET['id'];
$lap= new App\Laptop();

$row = $lap->edit($id);
?>

<h2>Edit Laptop</h2>

<form action="laptop_proses.php" method="post">
    <input type="hidden" name="id_laptop" value="<?php echo $row['id_laptop']; ?>">
    <table>
        <tr>
            <td>Nama Laptop</td>
            <td><input type="text" name="nama_laptop" value="<?php echo $row['nama_laptop']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Service Laptop</td>
            <td><input type="text" name="hrg_laptop" value="<?php echo $row['hrg_laptop']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 