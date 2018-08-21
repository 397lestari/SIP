<?php
	
	$id = $_GET['id'];

	$koneksi->query("delete from tb_transaksi where id ='$id'");
?>

<script type="text/javascript">
	window.location.href="?page=datapinjam";
</script>