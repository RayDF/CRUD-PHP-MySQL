<?php

session_start();
$nik     		= $_SESSION['nik'];
$tanggal 		= $_POST['tanggal'];
$mata_kuliah	= $_POST['mata_kuliah'];
$nama_materi	= $_POST['nama_materi'];
$deskripsi    	= $_POST['deskripsi'];

include'../koneksi.php';
$sql = "INSERT INTO materi(nik,tanggal,mata_kuliah,nama_materi,deskripsi) VALUES('$nik','$tanggal','$mata_kuliah','$nama_materi','$deskripsi')";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
<script>
     alert("Data Materi Sudah Tersimpan.");
     window.location.assign("admin.php");
  </script>
<?php

}else{ ?>
	<script>
	    alert("Data Materi Tidak Tersimpan.");
	    window.location.assign("admin.php?url=tulis_catatan");
	</script>
<?php

}