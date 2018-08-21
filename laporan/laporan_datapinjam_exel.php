<?php 

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

	$filename = "datatransaksi_exel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-exel");

?>

<h2>Laporan Data Transaksi</h2>

<table border="1"> 
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