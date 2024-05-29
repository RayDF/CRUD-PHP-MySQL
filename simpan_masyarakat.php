<?php

$nik=$_POST['nim'];
$nama=$_POST['nama_lengkap'];
$username=$_POST['username'];
$password = $_POST['password'];
$role_id = 2;

include'koneksi.php';
$query_validasi = "SELECT * FROM tb_users WHERE username = '$username'";
$query = mysqli_query($koneksi, $query_validasi);

if(mysqli_num_rows($query) == 0){
	 $query_register = mysqli_query ($koneksi, "INSERT INTO tb_users (username,password,nim,nama_lengkap,role_id) VALUES('$username', '$password','$nim','$nama',  '$role_id')");

	 	if($query_register){ ?>
	         <script>
		          alert ('Data Berhasil Disimpan,Silahkan Gunakan Untuk Login');
		          window.location="index.php";
	         </script>
         <?php }

     }else{ ?>
         <script>
              alert("Username Yang Anda Gunakan Sudah terdaftar");
              window.location.assign("register.php");
         </script>
      <?php
      }