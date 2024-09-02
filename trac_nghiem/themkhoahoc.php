<?php 
	include("KetNoi.php");
?>
<?php 
	if(isset($_POST['submit'])){
		if($_POST['ten_khoa_hoc']!="" && $_POST['mo_ta']!="" && $_FILES['image']['name']!=""){
			$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
			$image_name=$_FILES['image']['name'];
			$image_type=$_FILES['image']['type'];
			$ten_khoa_hoc=$_POST['ten_khoa_hoc'];
			$mo_ta=$_POST['mo_ta'];
			$ext=pathinfo($image_name,PATHINFO_EXTENSION);
			if(!array_key_exists($ext, $allowed)){
					$err['err_image_type']="Vui lòng chọn đúng định dạng file ảnh";
			}
			else{
				$sql="INSERT INTO `khoa_hoc` (`id`, `ten_khoa_hoc`, `mo_ta`, `hinh_anh`) VALUES (NULL, '$ten_khoa_hoc', 'mo_ta', 'images/$image_name')";
				$do=mysqli_query($conn,$sql);
				$_POST['ten_khoa_hoc']=$_POST['mo_ta']="";
				$err['succes']="Bạn đã thêm khóa học thành công";
			}
		}
		else{
			if($_POST['ten_khoa_hoc']==""){
				$err['ten_khoa_hoc']="Vui lòng nhập tên khóa học";
			}
			if($_POST['mo_ta']==""){
				$err['mo_ta']="Vui lòng mô tả khóa học";
			}
			if($_FILES['image']['name']==""){
				$err['image']="Vui lòng chọn ảnh cho khóa học";
			}
		}
	}
 ?>

<style>
	.container{
			width: 100%;
			height: 100%;
			border: 1px solid;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.brand{
			width: 95%;
			height: 95%;
		}
		.header-brand{
			width: 100%;
			height: 5%;
			color: #414c5d;
			text-indent: 20px;
			font-weight: bold;
			font-size: 25px;
			background: #f5f7f7;
		}
		.content-brand{
			width: 97%;
			height: 80%;
			background: #fff;
			padding: 19px;
			margin-top: 20px;
		}
		.form-group{
			color: #000;
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
		.btn-submit{
			background-color: #000044;
            border-radius: 4px;
            border-style: none;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 18px;
            line-height: 1.5;
            margin: 0;
            min-height: 44px;
            outline: none;
            overflow: hidden;
            padding: 10px 24px;
            position: relative;
            text-align: center;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
		}
		.btn-submit:hover,
        .btn-submit:focus {
            opacity: .75;
        }
		.form-group span{
			color: red;
		}
</style>
<div class="container">
	<div class="brand">
		<div class="header-brand"><p>Thêm khóa học</p></div>
		<div class="content-brand">
			<form enctype="multipart/form-data" action="" method="post">
				<div class="form-group">
					<label>Tên khóa học</label>
					<input type="text" name="ten_khoa_hoc" value="<?php if(isset($_POST['ten_khoa_hoc'])) echo $_POST['ten_khoa_hoc']; ?>">
					<span><?php if(isset($err['ten_khoa_hoc'])) echo $err['ten_khoa_hoc']; ?></span>
				</div>
				<div class="form-group">
					<br>
					<label>Mô tả (nếu có)</label>
					<input type="text" name="mo_ta" value="<?php if(isset($_POST['mo_ta'])) echo $_POST['mo_ta']; ?>">
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
					<input type="submit" name="submit" value="Gửi đi" class="btn-submit"><br>
					<span><?php if(isset($err['succes'])) echo $err['succes']; ?></span>
				</div>
			</form>
		</div>
</div>
</div>
