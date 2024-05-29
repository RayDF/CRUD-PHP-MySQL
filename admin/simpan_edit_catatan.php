<?php

$id_catatan = $_POST['id_catatan'];
$tanggal    = $_POST['tanggal'];
$mata_kuliah = $_POST['mata_kuliah'];
$nama_materi  = $_POST['nama_materi'];
$deskripsi  = $_POST['deskripsi'];

include'../koneksi.php';
$sql = "UPDATE tb_materi SET tanggal='$tanggal',mata_kuliah='$mata_kuliah',nama_materi='$nama_materi',deskripsi='$deskripsi' WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
<script>
     alert("Materi Sudah Teredit.");
     window.location.assign("admin.php?url=lihat_pengaduan");
  </script>
<?php

}else{ ?>
<script>
    alert("Materi Tidak Teredit.");
    window.location.assign("admin.php?url=lihat_pengaduan");
  </script>
<?php

}