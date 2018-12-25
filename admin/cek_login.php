<?php
include "../include/koneksi.php";
$login=mysqli_query($koneksi, "select * from admin where user='$_POST[user]' and password='$_POST[password]'");
if (mysqli_num_rows($login)) {
		$data=mysqli_fetch_array($login);
		session_start();
		if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
		{
			$_SESSION['namauser']=$data['user'];
			$_SESSION['passuser']=$data['password'];
			header("location:server.php?module=dashboard");
		}else{
			print "<script>alert ('Maaf captcha yang anda masukan salah'); location.href = 'index.php';</script>";
			
		}
		
}else{
	print "<script>
	alert ('Maaf user / password anda salah'); 
	location.href = 'index.php';
	</script>";
}
?>