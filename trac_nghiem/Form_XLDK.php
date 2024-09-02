<?php 
	session_start();
	include'KetNoi.php';
	if( isset($_POST['register']) && $_POST['user']!="" && $_POST['pass']!="" && $_POST['repass']!=""){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$repass=$_POST['repass'];
		$_SESSION['register']=$user;
		if($pass!=$repass){
			$_SESSION['thongbao']="Mật khẩu không trùng khớp";
			header('location: Form_DK.php');
 		}else{
		$sql="SELECT * FROM user WHERE username='$user'";
		$old=mysqli_query($conn,$sql);
		if(mysqli_num_rows($old)>0){
			$_SESSION['thongbao']="<b>username đã tồn tại</b>";
			header("location:Form_DK.php");
		}else{
			$sql1="INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES ('', '$user', '$pass', '1') ";
			$old=mysqli_query($conn,$sql1);
			if($old){
				$_SESSION['thongbao']="<b>Đăng ký thành công</b>";
				header("location:Form_DK.php");	
			}else{
				$_SESSION['thongbao']="<b>Đăng ký không thành công</b>";
				header("location:Form_DK.php");
			}				 
		}
	}
			
	}else{
		$_SESSION['thongbao']="<b>Bạn vui lòng điền đầy đủ thông tin</b>";
		header("location:Form_DK.php");
	}
