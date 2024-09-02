<?php 
	session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
	<style>
		*{
			margin: 0;
			padding: 0;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			font-family: 'Montserrat', sans-serif;
			text-align: center;
		}
		.wrapper{
			width: 100%;
			height: 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
			background-color: #F2F0F0;
		}
		.parnet{
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.product{
			width: 35%;
			height: 65%;
   			margin: 0 auto;
    		background: #fff;
		}
		h2 {
			background: #33b5e5;
			padding: 20px;
			font-size: 1.4em;
			font-weight: normal;
			text-align: center;
			text-transform: uppercase;
			color: #fff;
		}
		form{
			padding: 30px;
		}
		input[type="text"], input[type="password"], input[type="email"]{
			width: 84%;
			padding: 15px 10px 15px;
			font-size: 14px;
			background: transparent;
			border: 1px solid #000;
			outline: none;
			margin-bottom: 26px;
			color: #000;
			font-family: 'Quicksand', sans-serif;
		}
		
		input[type="email"]:hover {
			border-color: #28d;
		}

		input[type="password"]:hover {
			border-color: #28d;
		}

		input[type="submit"] {
			font-size: 16px;
			padding: 10px 65px;
			background-color: #ef4d4d;
			color: #FFF;
			border: none;
			border-radius: 0px;
			outline: none;
			float:none;
			cursor: pointer;
		}

		input[type="submit"]:hover {
		    background-color: #05a;
		    color: #fff;
		}
		.aitssendbuttonw3ls p{
			padding-top: 20px;
		}
		.aitssendbuttonw3ls a{
			color: #05a;
		}
	</style>
</head>
<body>
	 
	<div class="wrapper">
		<div class="parnet"> 
			<div class="product">
			<h2>Đăng kí tại đây</h2>
			<form action="Form_XLDK.php" method="post">
				<input type="email" name="user" placeholder="Tài khoản">
				<input type="password" name="pass" placeholder="Mật khẩu">
				<input type="password" name="repass" placeholder="Nhập lại mật khẩu">
				<div>
					<?php 	 
						if(isset($_SESSION['thongbao'])){
							echo $_SESSION['thongbao'];
							unset($_SESSION['thongbao']);
						}
					?> 
				</div><br> 
			<div class="aitssendbuttonw3ls">
				<input type="submit" name="register" value="Đăng kí">
				<a class="w3_play_icon1" href="Form_DN.php" style="text-decoration: none;">
					<p>Quay lại đăng nhập</a></p>
				<div class="clear"></div>
			</div>
			</form>
		</div>
		</div>
	</div>
</body>
</html>