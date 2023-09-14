<?php
$db = new PDO('mysql:host=localhost;dbname=db_guru3rpl2', "root", "");
session_start();

$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];

try {
    $sql = "SELECT * FROM tbl_login WHERE nama_user = :username AND password = :password";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', md5($password));
    $stmt->execute();

    $count = $stmt->rowCount();

    if ($count == 1) {
        $_SESSION['username'] = $username;

        header("location:page/menu.php?module=dashboard");
        return;
    } else {
        echo '<script>alert("Username adn password tidak dikenali");document.location="login.php";</script>';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
