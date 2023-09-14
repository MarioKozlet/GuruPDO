<?php

include('../config/koneksi.php');
$db = new database();
$data_user = $db->tampil_datauser();

?>

<div class="card mx-auto mt-3 shadow-lg" style="width: 90vw;">
    <div class="card-header" style="background-color:rgb(4, 60, 95);color:white">
        <h3>Sign Up (Manajemen User)</h3>
    </div>
    <div class="card-body" style="background: whitesmoke;">
        <div class="table-responsive">
            <table class="table table-striped" width="100%">
                <thead>
                    <tr>
                        <th align="center" width="10%" scope="col">No</th>
                        <th align="left" width="40%" scope="col">Username</th>
                        <th align="left" width="40%" scope="col">Password</th>
                        <th align="center" width="10%" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_user as $row) {
                    ?>
                        <tr class="">
                            <td align="center" scope="row"><?php echo $no++ ?></td>
                            <td align="left"><?php echo $row['nama_user'] ?></td>
                            <td align="left"><?php echo $row['password'] ?></td>
                            <td align="left"><a type="button" onclick="return confirm('Anda yakin data user ini akan di hapus ?')" data-toggle="tooltip" data-placement="left" title="Hapus data user" href="proses_user.php?action=delete&id=<?php echo $row['id_user'] ?>" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can fa-bounce"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="menu.php?module=input_user" class="btn btn-sm btn-block shadow" name="tblinput" style="background-color:#6495ed;color:white;">INPUT KAN</a>
        </div>

    </div>
</div>