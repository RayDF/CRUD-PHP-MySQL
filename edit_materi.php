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
$sql = "SELECT * FROM tb_catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);
?>
<div class="card">  
<div class="card-header">
     <a href="masyarakat.php?url=catatan_perjalanan" class="btn btn-primary btn-icon-split">
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
        <label>Pilih Tanggal Catatan</label>
        <input value="<?= $value['tanggal'] ?>" name="tanggal" class="form-control" type="date" placeholder="Pilih Tanggal" required>
      </div>

      <div class="form-group cols-sm-6">
        <label>Pilih Jam</label>
       <input value="<?= $value['jam'] ?>" name="jam" class="form-control" type="time" placeholder="Pilih Waktu" required>
      </div>

      <div class="form-group cols-sm-6">
        <label>Mata Kuliah</label>
       <input value="<?= $value['Mata Kuliah'] ?>" name="matakuliah" class="form-control" type="text" placeholder="Pilih Mata Kuliah" required>
      </div>

     <div class="form-group cols-sm-6">
        <label>Deskripsi</label>
        <input value="<?= $value['Deskripsi'] ?>" name="deskripsi" class="form-control" type="text" placeholder="Masukkan Deskripsia" required>
      </div>

      <div class="form-group cols-sm-6">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
      <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> HAPUS</button>
      </div>
    </form>