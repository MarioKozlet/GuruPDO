<?php
include '../config/koneksi.php';
$db = new database;
$row = $db->tampil_dataguru();
?>


<html>

<head>
</head>

<body style="background-color:burlywood">


    <div id="card" class="card mx-auto mt-3 shadow-lg " style="width: 90vw;background-color:rgba(8, 82, 122, 0.929);color:whitesmoke;">
        <div class="card-header shadow-lg">
            <h3>DATA GURU</h3>
        </div>
        <div class="card-body" style="background-color: whitesmoke;">
            <div class="card-body"></div>
            <table class="table table-resposive" border="1">
                <thead style="background-color:whitesmoke;">
                    <tr>
                        <th width="10%" style="text-align:center">No</th>
                        <th style="text-align:left">Nama Guru</th>
                        <th style="text-align:center">Alamat</th>
                        <th style="text-align:left">No.HP</th>
                        <th style="text-align:left">Lama Tugas</th>
                        <th style="text-align:center">Aksi</th>
                    </tr>
                </thead>
                <tbody style="background-color: whitesmoke;">
                    <?php
                    $nomor = 1;
                    foreach ($row as $data) {
                    ?>
                        <tr>
                            <td style="text-align:center"><?php echo $nomor++ ?></td>
                            <td style="text-align:left"><?php echo $data['nama_guru'] ?></td>
                            <td style="text-align:center"><?php echo $data['alamat'] ?></td>
                            <td style="text-align:left"><?php echo $data['hp'] ?></td>
                            <td style="text-align:left"><?php echo $data['lama_tugas'] ?></td>
                            <td style="text-align:center">
                                <a href="menu.php?module=edit_guru&id=<?php echo $data['id_guru'] ?>" style=" color: white;" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square fa-bounce"></i></a> |
                                <a onclick="return confirm('Anda yakin data user ini akan di hapsu ?')" href="proses_guru.php?action=delete&id=<?php echo $data['id_guru'] ?>" type="button" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can fa-bounce"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="menu.php?module=input_guru" class="btn btn-sm btn-block shadow" name="tblinput" style="background-color:#6495ed;color:white;">INPUT KAN</a>

        </div>
    </div>
</body>

</html>