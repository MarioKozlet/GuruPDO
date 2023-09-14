<body style="background-color:burlywood">
    <div class="card mx-auto mt-3" style="width:1250px;background-color: whitesmoke;">
        <div class="card-header" style="background-color:rgb(4, 60, 95);color:white">
            <h3>Tambah Data User</h3>
        </div>
        <form action="proses_user.php?action=add" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="txtUser" required>
                </div>
                <div class="form-group">
                    <label>Password </label>
                    <input type="password" class="form-control" name="txtPassword" required>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="menu.php?module=dashboard" class="btn btn-danger" type="button">Batal</a>
            </div>
        </form>
    </div>
</body>