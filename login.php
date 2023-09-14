<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="coba.css" type="text/css">
</head>

<body style="background-color:#6495ed;">
    <div id="card" class="shadow" style="background-color: whitesmoke;">

        <div id="card-title">
            <img src="images/logologin.png" class="center" width="20%" style="border-radius:20%;margin-top:20px">
            <h1>LOGIN</h1>
        </div>

        <div id="card-content">
            <form action="ceklogin.php" method="POST">
                <div class="form-group">
                    <label for="">Username :</label>
                    <input type="text" name="txtusername" class="form-control" placeholder="username" autofocus>
                </div>
                <div class="form-group">
                    <label>Password :</label>
                    <input type="password" name="txtpassword" class="form-control" placeholder="password">

                </div>
                <div class="form-group shadow">
                    <button type="submit" name="masuk" class="btn btn-primary btn-block">LOGIN</button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>