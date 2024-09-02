<?php 
	include("KetNoi.php");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: 'Montserrat', sans-serif;
		}
		.wrapper{
			width: 100%;
			height: 100%;
			display: flex;
		}
		.product{
			width: 22%;
			height: 100%;
		}
		.header_product{
			padding-top: 10px;
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 8%;
			background: #1e1e2d;
		}
		.header_product img{
			margin-top: 30px;
			width: 50px;
			color: #fff;
		}
		.content_product{
			width: 100%;
			height: 86%;
			background: #1e1e2d;
			padding-top: 35px;
		}
		.content_product ul li{
			padding: 10px 10px 10px 20px;
			margin-bottom: 10px;
			color: #fff;
		}
		.content_product ul li:hover{
			border: 1px solid #0066FF;
			border-radius: 2px;
			background-color: #0066FF;
			color: #fff;
		}
		.content_product ul li a{
			color: #fff;
			font-size: 16px;
			text-decoration: none;
		}
		.content_product ul li:first-child a{
			color: #e3e3e5;
		}
		.content_product ul li a i{
			padding-right: 10px;
			color: #fff;
		}
		.parnet{
			width: 80%;
			height: 100%;
		}
		.header_parnet{
			width: 100%;
			height: 8%;
			background: #ffffff;
		}
		.content_parnet{
			width: 100%;
			height: 92%;
			background: #f1f4f7;
		}
		.header_content_parnet{
			width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="product">
			<div class="header_product">
				<div class="logo_product">
					<a href="admin_home.php"><img src="images/admin.png" alt=""></a>
				</div>
			</div>
			<div class="content_product">
				<ul>
					<li><a href="admin_home.php?page=themcauhoi"><i class="fa-solid fa-plus-minus"></i>Thêm câu hỏi</a></li>
					<li><a href="admin_home.php?page=themkhoahoc"><i class="fa-solid fa-plus-minus"></i>Thêm khóa học</a></li>
					<li><a href="admin_home.php?page=danhsachkhoahoc"><i class="fa-solid fa-list"></i>Danh sách khóa học</a></li>
					<li><a href="admin_home.php?page=thietlapthaydoicauhoi"><i class="fa-solid fa-gear"></i>Thiết lập thay đổi câu hỏi</a></li>
					<li><a href="admin_home.php?page=danhsachcauhoi"><i class="fa-solid fa-list"></i>Danh sách câu hỏi</a></li>
					<li><a href="admin_home.php?page=danhsachhocvien"><i class="fa-solid fa-list"></i>Danh sách học viên</a></li>
					<li><a href="admin_home.php?page=dangxuat"><i class="fa-solid fa-arrow-right-from-bracket"></i>Đăng xuất</a></li>
				</ul>
			</div>
		</div>
		<div class="parnet">
			<div class="header_parnet">
			</div>
			<div class="content_parnet">
				<div class="header_content_parnet">								
					<?php 
						if(isset($_GET['page'])){
							$page=$_GET['page'];
						}
						else{
							$page="";
						}

						if($page=='themkhoahoc'){
							include("themkhoahoc.php");
						}
						elseif($page=="danhsachkhoahoc"){
							include("danhsachkhoahoc.php");
						}
						elseif($page=="themcauhoi"){
							include("themcauhoi.php");
						}
						elseif($page=="danhsachcauhoi"){
							// header("location:danhsachcauhoi.php");
							include("danhsachcauhoi.php");
						}
						elseif ($page=="thietlapthaydoicauhoi") {
							include("thietlapthaydoicauhoi.php");
						}
						elseif($page=="danhsachhocvien"){
							include("danhsachhocvien.php");
						}
						elseif($page=="dangxuat"){
							$_SESSION['tao_de']=1;
							header("location:FORM_DN.php");
						}
						else{
							include("themcauhoi.php");
						}
					 ?>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>