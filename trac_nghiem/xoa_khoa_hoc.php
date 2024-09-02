<?php 
	include("KetNoi.php");
 ?>
<?php 
	$id=$_GET['id'];
	$sql="DELETE FROM  khoa_hoc WHERE id='$id'";
	$do=mysqli_query($conn,$sql);
	header("location:admin_home.php?page=danhsachkhoahoc");
 ?>