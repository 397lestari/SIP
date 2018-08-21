<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_anggota");

                                            while ($data=$sql->fetch_assoc()) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nis']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['tempat_lahir']; ?></td>
                                            <td><?php echo $data['tgl_lahir']; ?></td>
                                            <td><?php echo $data['jk']; ?></td>
                                            <td><?php echo $data['jurusan']; ?></td>
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data['nis']; ?>" class="btn btn-info">Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini...???')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nis']; ?>"" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>

                                 <a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-top: 8px;"><i class="fa fa-plus"></i>Tambah Data</a>

                                 <a href="./laporan/laporan_anggota_exel.php" target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i>ExportToExel</a>

                            </div>
                        </div>
                    </div>