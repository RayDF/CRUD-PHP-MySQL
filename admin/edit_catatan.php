<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tulis Catatan</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<?php

$id_catatan = $_GET['id_catatan'];
include'../koneksi.php';
$sql = "SELECT * FROM tb_materi WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);
?>
<div class="card">  
<div class="card-header">
      <div>
        <h6 class="m-0 font-weight-bold text-primary">Edit Materi</h6>
      </div>
     <a href="admin.php?url=lihat_pengaduan" class="btn btn-primary btn-icon-split">
             <span class="icon text-white-50">
               <i class="fas fa-arrow-left"></i>
             </span>
               <span class="text">Kembali</span>
             </a>
  </div>
  <div class="card-body">
    <form action="simpan_edit_catatan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <input type="hidden" name="id_catatan" value="<?= $id_catatan ?>">
      
      <div class="form-group cols-sm-6">
        <label>Pilih Tanggal</label>
        <input value="<?= $value['tanggal'] ?>" name="tanggal" class="form-control" type="date" placeholder="Pilih Tanggal" required>
      </div>

    <div class="form-group cols-sm-6">
        <label>Mata Kuliah</label>
       <input type="text" name="mata_kuliah" placeholder="Masukan Matkul" class="form-control" value="<?= $value['mata_kuliah'] ?>">
      </div>

      <div class="form-group cols-sm-6">
        <label>Materi</label>
       <input type="text" name="nama_materi" placeholder="Masukan Matkul" class="form-control"  value="<?= $value['nama_materi'] ?>">
      </div>

      <div class="form-group cols-sm-6">
        <label>Deskripsi</label>
       <input type="text" name="deskripsi" placeholder="Masukan Matkul" class="form-control" value="<?= $value['deskripsi'] ?>">
      </div>

      <div class="form-group cols-sm-6">
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> SIMPAN</button>
      <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button>
      </div>
    </form>