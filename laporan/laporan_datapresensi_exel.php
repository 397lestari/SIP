<?php 

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

	$filename = "presensi_exel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-exel");

?>

<h2>Laporan Data Presensi</h2>

<table border="1"> 
 	<tr>
 		<th>No</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jurusan</th>
                                            <th>Tanggal Berkunjung</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_presensi");

                                            while ($data=$sql->fetch_assoc()) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nis']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['jk']; ?></td>
                                            <td><?php echo $data['jurusan']; ?></td>
                                            <td><?php echo $data['tgl_kunjung']; ?></td>
                                            <td>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini...???')" href="?page=datapresensi&aksi=hapus&id=<?php echo $data['nis']; ?>"" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>