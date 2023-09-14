<?php

class database
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_guru3rpl2";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }

    public function tambah_datauser($username, $password)
    {
        $data = $this->db->prepare('INSERT INTO tbl_login (nama_user, password) VALUES (?,?)');
        $data->bindParam(1, $username);
        $data->bindParam(2, $password);
        $data->execute();
        return $data->rowCount();
    }

    public function tampil_datauser()
    {
        $query = $this->db->prepare("SELECT * FROM tbl_login");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function delete_datauser($id)
    {
        $query = $this->db->prepare("DELETE FROM tbl_login WHERE id_user=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function tampil_dataguru()
    {
        $query = $this->db->prepare("SELECT * FROM tbl_guru");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function tambah_dataguru($nama_guru, $alamat, $hp, $lama_tugas)
    {
        $data = $this->db->prepare('INSERT INTO tbl_guru (nama_guru, alamat, hp, lama_tugas) VALUES (?,?,?,?)');
        $data->bindParam(1, $nama_guru);
        $data->bindParam(2, $alamat);
        $data->bindParam(3, $hp);
        $data->bindParam(4, $lama_tugas);
        $data->execute();
        return $data->rowCount();
    }

    public function tampil_id($id)
    {
        $query = $this->db->prepare("SELECT * FROM tbl_guru WHERE id_guru=:id");

        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    public function update_dataguru($id, $nama_guru, $alamat, $hp, $lama_tugas)
    {
        $query = $this->db->prepare("UPDATE tbl_guru SET nama_guru=:nama, alamat=:alamat, hp=:hp, lama_tugas=:lama WHERE id_guru=:id");
        $query->bindParam(':nama', $nama_guru);
        $query->bindParam(':alamat', $alamat);
        $query->bindParam(':hp', $hp);
        $query->bindParam(':lama', $lama_tugas);
        $query->bindParam(':id', $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete_dataguru($id)
    {
        $query = $this->db->prepare("DELETE FROM tbl_guru WHERE id_guru=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query;
    }
}
