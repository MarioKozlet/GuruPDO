<?php
include('../config/koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_datauser($_POST['txtUser'], md5($_POST['txtPassword']));
    header('location:menu.php?module=manajemenuser');
} elseif ($action == "delete") {
    $id = $_GET['id'];
    echo $id;
    $koneksi->delete_datauser($id);
    header('location:menu.php?module=manajemenuser');
}
