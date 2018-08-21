<?php

    $nis = $_GET['id'];

    $sql = $koneksi->query("select * from tb_anggota where nis = '$nis'");

    $tampil = $sql->fetch_assoc();

    $jkl = $tampil['jk'];
    $status = $tampil['status'];


?>

<div class="panel panel-default">
<div class="panel-heading">
Ubah Data    
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" value="<?php echo $tampil['nis']?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk" <?php echo($jkl==L)?"checked":""; ?>/> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk" <?php echo($jkl==P)?"checked":""; ?>/> Perempuan
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class="form-control" name="jurusan">
                                                <option value="MM" <?php if ($jurusan=='MM') {
                                                    echo "selected";
                                                } ?> >Multimedia</option>
                                                <option value="TSM" <?php if ($jurusan=='TSM') {
                                                    echo "selected";
                                                } ?>>Tekhnik Sepeda Motor</option>
                                                
                                            </select>
                                        </div> 



                                        <div>
                                            <input type="submit" name="simpan" class="btn btn-primary">
                                        </div>
                            </div>
                        </form>
                    </div>
</div>
</div>
</div>

<?php

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];
    

    $simpan = $_POST['simpan'];


    if ($simpan) {

        $sql = $koneksi->query("update tb_anggota set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', jurusan='$jurusan' where nis='$nis' ");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=anggota";

                </script>
                <?php
        }
    }

?>