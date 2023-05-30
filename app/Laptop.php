<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Laptop extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_laptop";
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
        $nama_laptop = $_POST['nama_laptop'];
        $hrg_laptop = $_POST['hrg_laptop'];

        $sql = "INSERT INTO tb_laptop (nama_laptop, hrg_laptop) VALUES (:nama_laptop, :hrg_laptop)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_laptop", $nama_laptop);
        $stmt->bindParam(":hrg_laptop", $hrg_laptop);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_laptop WHERE id_laptop=:id_laptop";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_laptop", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_laptop = $_POST['nama_laptop'];
        $hrg_laptop = $_POST['hrg_laptop'];
        $id_laptop = $_POST['id_laptop'];

        $sql = "UPDATE tb_laptop SET nama_laptop=:nama_laptop, hrg_laptop=:hrg_laptop WHERE id_laptop=:id_laptop";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_laptop", $nama_laptop);
        $stmt->bindParam(":hrg_laptop", $hrg_laptop);
        $stmt->bindParam(":id_laptop", $id_laptop);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_laptop WHERE id_laptop=:id_laptop";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_laptop", $id);
        $stmt->execute();

    }

}