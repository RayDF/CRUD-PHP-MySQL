<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($koneksi,"select * from tb_users where username ='$user' and password ='$pass'");
$cek=mysqli_num_rows($sql);
if($cek>0)
{
	$data=mysqli_fetch_array($sql);
	session_start();
	$_SESSION['nama_lengkap']=$user;
	$_SESSION['username']=$data['username'];
	$_SESSION['role_id']=$data['role_id'];
	$_SESSION['id_user'] = $data['id_user'];

	?>
	<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
	<script>
		const Toast = Swal.mixin({
			toast : true,
			position : 'top-end',
			showConfirmButton : false,
			timer : 3000
		});
		Toast.fire({
			type : 'success',
			title : 'Login Berhasil'
		})
	</script>
	<?php
	if ($data['role_id']!= "2") 
	{
		header('location:admin/admin.php');
	} else {
		header ('location:masyarakat.php');
	}
	
}
else 
{
	?>
	<script type="text/javascript">
		alert('Username atau Password tidak ditemukan');
		window.location="index.php";
	</script>
	<?php
}
?>