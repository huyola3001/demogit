<?php 
	include("KetNoi.php");
?>
<?php 
	$id=$_GET['id'];
	$sql="SELECT * FROM  khoa_hoc WHERE id='$id'";
	$do=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($do);
	$err=[];
	if(isset($_POST['submit'])){
		if(isset($_POST['ten_khoa_hoc']) && $_POST['ten_khoa_hoc']!="" && $_POST['mo_ta']!=""){
			$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
			$image_name=$_FILES['image']['name'];
			$image_type=$_FILES['image']['type'];
			$ten_khoa_hoc=$_POST['ten_khoa_hoc'];
			$mo_ta=$_POST['mo_ta'];
			$ext=pathinfo($image_name,PATHINFO_EXTENSION);
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=""){
				if(!array_key_exists($ext, $allowed)){
					$err['err_image_type']="Vui lòng chọn đúng định dạng file ảnh";
				}
				else{
				$ext=pathinfo($image_name,PATHINFO_EXTENSION);
				$sql="UPDATE khoa_hoc SET ten_khoa_hoc='$ten_khoa_hoc',mo_ta='$mo_ta',hinh_anh='images/$image_name' WHERE id='$id'";
				$do=$do=mysqli_query($conn,$sql);
					$err['succes']="Bạn đã thêm khóa học thành công";
					header("location:admin_home.php?page=danhsachkhoahoc");
				}
			}
			else{
				$image_name=$row['hinh_anh'];
				$sql="UPDATE khoa_hoc SET ten_khoa_hoc='$ten_khoa_hoc',mo_ta='$mo_ta',hinh_anh='$image_name' WHERE id='$id'";
				$do=$do=mysqli_query($conn,$sql);
				$err['succes']="Bạn đã sửa khóa học thành công";
				header("location:admin_home.php?page=danhsachkhoahoc");
			}
		}
		else{
			if($_POST['ten_khoa_hoc']==""){
				$err['ten_khoa_hoc']="Vui lòng không để tên khóa học trống";
			}
			if($_POST['mo_ta']==""){
				$err['mo_ta']="Vui lòng không để mô tả khóa học trống";
			}
		}
	}
 ?>
<style>
	.wrapper{
		margin: 0 auto;
		width: 90%;
		height: 90%;
		border: 1px solid #e3e3e3;
		padding: 20px;
	}
	.header{
		text-indent: 10px;
		font-weight: bold;
		color: #343a42;
		font-size: 20px;
		width: 100%;
		height: 8%;
		background: #f7f7f7;
		margin-bottom: 20px;
	}
	.header p{
		padding-top: 10px;
	}
	.form-group{
			color: #8f8f8c;
			font-size: 19px;
			width: 100%;
			height: 10%;
			display: contents;
		}
		.form-group input[type="text"],input[type="file"]{
			width: 100%;
			height: 40px;
			margin-bottom: 20px;
			margin-top: 10px;
		}
		.footer-form{
			text-align: center;
			margin: 0 auto;
			width: 200px;
			height: 10%;		
		}
		.footer-form span{
			font-size: 18px;
			color: #a578d5;
			margin-top: 10px;
		}
		.footer-form input[type="submit"]{
			background: #e0f2f1;
			width: 100px;
			height: 40px;
			font-size: 18px;
		}
		.form-group span{
			color: red;
		}
</style>
<div class="wrapper">
	<div class="header"><p>Sửa khóa học</p></div>
	<form enctype="multipart/form-data" action="" method="post">
	<div class="form-group">
		<label>Tên khóa học</label>
		<input type="text" name="ten_khoa_hoc" value="<?php echo $row['ten_khoa_hoc']; ?>">
		<span><?php if(isset($err['ten_khoa_hoc'])) echo $err['ten_khoa_hoc']; ?></span>
	</div>
	<div class="form-group">
		<br>
		<label>Mô tả (nếu có)</label>
		<input type="text" name="mo_ta" value="<?php echo $row['mo_ta'];  ?>">
		<span><?php if(isset($err['mo_ta'])) echo $err['mo_ta']; ?></span>
	</div>
	<div class="form-group">
		<br>
		<label>Hình ảnh</label>
		<input type="file" name="image" value="hf.php">
		<span><?php if(isset($err['image'])) echo $err['image'];
		if(isset($err['err_image_type'])) echo $err['err_image_type']; ?></span>
	</div>
	<div class="footer-form">
		<input type="submit" name="submit" value="Gửi đi"><br>
		<span><?php if(isset($err['succes'])) echo $err['succes']; ?></span>
	</div>
</form>
</div>