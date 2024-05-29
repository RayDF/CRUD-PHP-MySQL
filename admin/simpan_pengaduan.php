<?php
require '../koneksi.php';
$tgl=date('Y/m/d');
$mata_kuliah	=$_POST['mata_kuliah'];
$materi			=$_POST['nama_materi'];
$deskripsi		=$_POST['deskripsi'];
$iduser 		=$_POST['id_userc'];

$sql=mysqli_query($koneksi,"INSERT INTO tb_materi(tanggal, mata_kuliah, nama_materi, deskripsi, id_userc) VALUES ('$tgl','$mata_kuliah','$materi','$deskripsi','$iduser')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Materi berhasil disimpan, Terimakasih sudah mengisi Materi.');
		window.location="admin.php";
	</script>
	<?php
}
?>