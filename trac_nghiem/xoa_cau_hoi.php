<?php 
	include("KetNoi.php");
 ?>
<?php 
	$id=$_GET['id'];
	$sql="DELETE FROM  cau_hoi WHERE id='$id'";
	$do=mysqli_query($conn,$sql);
	header("location:admin_home.php?page=danhsachcauhoi");
?>