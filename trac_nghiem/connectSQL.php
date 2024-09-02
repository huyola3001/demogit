<?php 
	$conn=mysqli_connect('localhost','root','','trac_nghiem') or die("Không thể kết nối tới database");
		if($conn){
			mysqli_query($conn,"SET NAMES 'utf8'");
		}else{
		echo "Bạn đã kết nối thất bại".mysqli_connect_error();
	}
 ?>