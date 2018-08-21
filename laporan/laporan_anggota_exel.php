<?php 

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

	$filename = "anggota_exel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-exel");

?>

<h2>Laporan Data Anggota</h2>

<table border="1"> 
 	<tr>
    	<th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        
    </tr>

    <?php 

        $no = 1;

        $sql = $koneksi->query("select * from tb_anggota");

        while ($data=$sql->fetch_assoc()) {

        $jk = ($data['jk']==L)?"Laki-laki":"Wanita";

        $jurusan = ($data['jurusan']==TSM)?"Tekhnik Sepeda Motor":"Multimedia";

    ?>

    <tr>
 	   	<td><?php echo $no++; ?></td>
    	<td><?php echo $data['nis']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['tempat_lahir']; ?></td>
        <td><?php echo $data['tgl_lahir']; ?></td>
        <td><?php echo $jk; ?></td>
        <td><?php echo $jurusan; ?></td>
        
        </tr>

        <?php } ?>

</table>