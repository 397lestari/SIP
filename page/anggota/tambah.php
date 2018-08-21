<div class="panel panel-default">
<div class="panel-heading">
Tambah Data    
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" id="nis" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" id="nama" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" id="tempat_lahir" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" id="tgl" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk" id="jk" /> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk" id="jk" /> Perempuan
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class="form-control" name="jurusan">
                                                <option value="MM">Multimedia</option>
                                                <option value="TSM">Tekhnik Sepeda Motor</option>
                                                
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
        $sql = $koneksi->query("insert into tb_anggota (nis,nama,tempat_lahir,tgl_lahir,jk,jurusan)values('$nis','$nama','$tempat_lahir','$tgl_lahir','$jk','$jurusan')");

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