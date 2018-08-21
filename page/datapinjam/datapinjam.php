<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_transaksi");

                                            while ($data=$sql->fetch_assoc()) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['tgl_pinjam']; ?></td>
                                            <td><?php echo $data['tgl_kembali']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td>
                                                
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini...???')" href="?page=datapinjam&aksi=hapus&id=<?php echo $data['id']; ?>"" class="btn btn-danger">Hapus</a>
                                            </td>
                                            
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>

                                 <a href="./laporan/laporan_datapinjam_exel.php" target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i>ExportToExel</a>
                            </div>
                        </div>
                    </div>