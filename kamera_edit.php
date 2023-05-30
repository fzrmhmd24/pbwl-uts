<?php

$id = $_GET['id'];
$kam= new App\Kamera();

$row = $kam->edit($id);
?>

<h2>Edit Kamera</h2>

<form action="kamera_proses.php" method="post">
    <input type="hidden" name="id_kamera" value="<?php echo $row['id_kamera']; ?>">
    <table>
        <tr>
            <td>Nama Kamera</td>
            <td><input type="text" name="nama_kamera" value="<?php echo $row['nama_kamera']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Service Kamera</td>
            <td><input type="text" name="hrg_kamera" value="<?php echo $row['hrg_kamera']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 