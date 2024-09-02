<?php 
	session_start();

	include'KetNoi.php';
	if(isset($_POST['login']) && $_POST['user']!="" && $_POST['pass']!=""){
		$user=$_POST['user'];
		$pass=$_POST['pass'];

		$sql="SELECT * from user where username='$user' and password='$pass' and level='0'";
		$sql2="SELECT * from user where username='$user' and password='$pass' and level='1'";
		$tk1=mysqli_query($conn,$sql2);
		$tk=mysqli_query($conn,$sql);

		if(mysqli_num_rows($tk)>0){
			$_SESSION['tk']=$user;
			header('location:admin_home.php');
		}elseif(mysqli_num_rows($tk1)>0){
			$_SESSION['tk']=$user;
			header('location:home.php');
		}else{
			$_SESSION['thongbao']="Tài khoản hoặc mật khẩu của bạn không đúng";
			header('location:Form_DN.php');
		}

 
	} else{
		$_SESSION['thongbao']="Bạn vui lòng điền đầy đủ thông tin";
		header('location:Form_DN.php');
	}
	 
?>
