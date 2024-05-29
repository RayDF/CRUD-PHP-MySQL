<?php
require 'koneksi.php';
$tgl=date('Y/m/d');
$matakuliah=$_POST['mata_kuliah'];
$materi=$_POST['materi'];
$deskripsi= $_POST['deskripsi'];
$iduser = $_POST['id_userc'];

$sql=mysqli_query($koneksi,"INSERT INTO tb_materi(tanggal, jam, lokasi, suhu, id_userc) VALUES ('$tgl','$jam','$lokasi','$suhu', '$iduser')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data berhasil disimpan, Terimakasih sudah menulis laporan.');
		window.location="masyarakat.php";
	</script>
	<?php
} else {
	?>
	<script type="text/javascript">
		alert ('Data gagal disimpan');
		window.location="masyarakat.php";
	</script>
	<?php 
}
?>