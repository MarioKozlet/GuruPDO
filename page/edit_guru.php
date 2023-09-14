<?php

include '../config/koneksi.php';
$id = $_GET['id'];
$tes = new database;
$data = $tes->tampil_id($id);

?>

<body style="background-color: whitesmoke;">
    <div class="card mx-auto mt-3 shadow " style="width:1250px;background-color: white;">
        <div class="card-header" style="background-color:rgba(8, 82, 122, 0.929);color:white">
            <h3>Edit Data Guru</h3>
        </div>
        <form action="proses_guru.php?action=update" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Guru</label>
                    <input type="text" class="form-control" value="<?php echo $data['nama_guru'] ?>" name="nama" required>
                    <input type="hidden" class="form-control" value="<?php echo $data['id_guru'] ?>" name="id" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $data['alamat'] ?>" name="alamat" required>
                </div>
                <div class="form-group">
                    <label>No. Hp</label>
                    <input type="text" class="form-control" value="<?php echo $data['hp'] ?>" name="hp" required>
                </div>
                <div class="form-group">
                    <label>Lama Tugas</label>
                    <input type="text" class="form-control" value="<?php echo $data['lama_tugas'] ?>" name="tugas" required>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-warning" type="reset">Reset</button>
                <a href="menu.php?module=dashboard" class="btn btn-danger" type="button">Batal</a>
            </div>
        </form>
    </div>
</body>

</html>