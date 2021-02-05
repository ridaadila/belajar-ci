<?php 
    if(isset($pegawai)) {
        $link = "../../../";
        ?>
        <h1>Ubah Artikel</h1>
        <?php
    } else {
        ?>
        <h1>Tambah Artikel</h1>
        <?php
        $link = "../../";
    } 
        ?>
<form method="post">
    <div>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" value="<?php if(isset($pegawai)) {
            echo $pegawai[0]->nama;
        } ?>">
    </div>
    <div>
        <label for="email">Email : </label>
        <input type="text" name="email" value="<?php if(isset($pegawai)) {
            echo $pegawai[0]->email;
            }?>">
    </div>
    <div>
        <label for="address">Alamat : </label>
        <textarea name="address" value="<?php if(isset($pegawai)) {
            echo $pegawai[0]->alamat;
        } ?>"></textarea>
    </div>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    <a href="<?php echo $link; ?>">Kembali</a>
</form>