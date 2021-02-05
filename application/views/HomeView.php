<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD dengan CodeIgniter</h1>
    <h3><a href="index.php/home/tambah"> + Tambah Pegawai</a></h3>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th></th>
        </tr>
        <?php
        foreach($pegawai as $row) {
            ?>
            <tr>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->alamat ?></td>
                <td>
                    <a href="<?php echo "index.php/home/detail/" . $row->id; ?>">Detail</a>
                    <a href="<?php echo "index.php/home/ubah/" . $row->id; ?>">Ubah</a>
                    <a href="<?php echo "index.php/home/hapus/" . $row->id; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>        
    </table>
</body>
</html>