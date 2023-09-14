<?php session_start(); ?>
<html>

<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="../assets/jquery/jquery-3.2.1.slim.min.js"> </script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/popper.js"></script>
    <link rel="stylesheet" href="../assets/fontawesome-free-6.4.2-web/css/all.min.css">

</head>

<body style="background-color:whitesmoke;">
    <nav class="navbar navbar-expand-sm justify-content-between shadow" style="background: #6495ed;">
        <span class="navbar-text" style="color:white">
            <img src="../images/logobanteng.jpeg" width="40" height="40" alt="" style="border-radius: 20px;">
            <b>Aplikasi Pendataan Guru</b>
        </span>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="color:white" href="menu.php?module=dashboard">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                    Master Data
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:white;">
                    <a class="dropdown-item text-black text-capitalize " href="menu.php?module=view_guru">view guru</a>
                    <a class="dropdown-item text-black text-capitalize " href="menu.php?module=laporan" target="_blank">Laporan</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="menu.php?module=manajemenuser">
                    Manajemen User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>
    <?php
    if (isset($_GET['module'])) {
        $module = $_GET['module'];
        switch ($module) {
            case 'manajemenuser';
                include "view_user.php";
                break;
            case 'dashboard';
                include "welcome.php";
                break;
            case 'view_guru';
                include "view_guru.php";
                break;
            case 'input_user';
                include "input_user.php";
                break;
            case 'input_guru';
                include "input_guru.php";
                break;
            case 'edit_guru';
                include "edit_guru.php";
                break;
            case 'laporan';
                include "preview_pdf.php";
                break;
        }
    }
    ?>

</body>

</html>