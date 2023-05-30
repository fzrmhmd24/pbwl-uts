<?php

$id = $_GET['id'];
$smrt= new App\Smartphone();

$row = $smrt->edit($id);
?>

<h2>Edit Smartphone</h2>

<form action="smartphone_proses.php" method="post">
    <input type="hidden" name="id_smartphone" value="<?php echo $row['id_smartphone']; ?>">
    <table>
        <tr>
            <td>Nama Smartphone</td>
            <td><input type="text" name="nama_smartphone" value="<?php echo $row['nama_smartphone']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Service Smartphone</td>
            <td><input type="text" name="hrg_smartphone" value="<?php echo $row['hrg_smartphone']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 