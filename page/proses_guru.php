<?php
include('../config/koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_dataguru($_POST['namaGuru'], $_POST['alamat'], $_POST['no'], $_POST['lamaTugas']);
    header('location:menu.php?module=view_guru');
} elseif ($action == "delete") {
    $id = $_GET['id'];
    $koneksi->delete_dataguru($id);
    header('location:menu.php?module=view_guru');
} elseif ($action == 'update') {
    $id = $_POST['id'];
    $koneksi->update_dataguru($id, $_POST['nama'], $_POST['alamat'], $_POST['hp'], $_POST['tugas']);
    header('location:menu.php?module=view_guru');
}
