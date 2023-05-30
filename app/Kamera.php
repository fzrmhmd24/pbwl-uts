<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Kamera extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_kamera";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(); 

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $nama_kamera = $_POST['nama_kamera'];
        $hrg_kamera = $_POST['hrg_kamera'];

        $sql = "INSERT INTO tb_kamera (nama_kamera, hrg_kamera) VALUES (:nama_kamera, :hrg_kamera)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_kamera", $nama_kamera);
        $stmt->bindParam(":hrg_kamera", $hrg_kamera);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_kamera WHERE id_kamera=:id_kamera";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kamera", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_kamera = $_POST['nama_kamera'];
        $hrg_kamera = $_POST['hrg_kamera'];
        $id_kamera = $_POST['id_kamera'];

        $sql = "UPDATE tb_kamera SET nama_kamera=:nama_kamera, hrg_kamera=:hrg_kamera WHERE id_kamera=:id_kamera";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_kamera", $nama_kamera);
        $stmt->bindParam(":hrg_kamera", $hrg_kamera);
        $stmt->bindParam(":id_kamera", $id_kamera);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_kamera WHERE id_kamera=:id_kamera";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kamera", $id);
        $stmt->execute();

    }

}