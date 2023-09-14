<body style="background-color:burlywood">
    <div class="card mx-auto mt-3" style="width:1250px;background-color: whitesmoke;">
        <div class="card-header" style="background-color:rgb(4, 60, 95);color:white">
            <h3>Tambah Data Guru</h3>
        </div>
        <form action="proses_guru.php?action=add" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Guru</label>
                    <input type="text" class="form-control" name="namaGuru" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" required>
                </div>
                <div class="form-group">
                    <label>No. Hp</label>
                    <input type="text" class="form-control" name="no" required>
                </div>
                <div class="form-group">
                    <label>Lama Tugas</label>
                    <input type="text" class="form-control" name="lamaTugas" required>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-warning" type="reset">Reset</button>
                <a href="menu.php?module=dashboard" class="btn btn-danger" type="button">Batal</a>
            </div>
        </form>
    </div>
</body>