<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Smartphone extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_smartphone";
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
        $nama_smartphone = $_POST['nama_smartphone'];
        $hrg_smartphone = $_POST['hrg_smartphone'];

        $sql = "INSERT INTO tb_smartphone (nama_smartphone, hrg_smartphone) VALUES (:nama_smartphone, :hrg_smartphone)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_smartphone", $nama_smartphone);
        $stmt->bindParam(":hrg_smartphone", $hrg_smartphone);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_smartphone WHERE id_smartphone=:id_smartphone";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_smartphone", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_smartphone = $_POST['nama_smartphone'];
        $hrg_smartphone = $_POST['hrg_smartphone'];
        $id_smartphone = $_POST['id_smartphone'];

        $sql = "UPDATE tb_smartphone SET nama_smartphone=:nama_smartphone, hrg_smartphone=:hrg_smartphone WHERE id_smartphone=:id_smartphone";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_smartphone", $nama_smartphone);
        $stmt->bindParam(":hrg_smartphone", $hrg_smartphone);
        $stmt->bindParam(":id_smartphone", $id_smartphone);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_smartphone WHERE id_smartphone=:id_smartphone";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_smartphone", $id);
        $stmt->execute();

    }

}