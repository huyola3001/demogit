<?php
session_start();
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
	<style>
		* {
			margin: 0;
			padding: 0;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			font-family: 'Montserrat', sans-serif;
			text-align: center;
		}

		.wrapper {
			width: 100%;
			height: 100%;
			/*background: url("images/b2.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: cover;*/
			background-color: #F2F0F0;
		}

		.parnet {
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.product {
			width: 35%;
			height: 60%;
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

		form {
			padding: 30px;
		}

		input[type="text"],
		input[type="password"],
		input[type="email"] {
			width: 84%;
			padding: 15px 10px 15px;
			font-size: 14px;
			background: transparent;
			border: 1px solid;
			outline: none;
			margin-bottom: 26px;
			color: #000;
			font-family: 'Quicksand', sans-serif;
		}

		input[type="submit"] {
			font-size: 16px;
			padding: 10px 65px;
			background-color: #ef4d4d;
			color: white;
			border: none;
			border-radius: 0px;
			outline: none;
			float: none;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #05a;
			color: #fff;
		}

		.login input[type="submit"]:focus {
			border-color: #05a;
		}

		input[type="email"]:hover {
			border-color: #28d;
		}

		input[type="password"]:hover {
			border-color: #28d;
		}

		.aitssendbuttonw3ls {
			margin-top: 10px;
		}

		.aitssendbuttonw3ls p {
			text-align: center;
			margin-top: 40px;
			text-transform: capitalize;
			letter-spacing: 1px;
			color: #666666;
		}

		.aitssendbuttonw3ls span{
			color: #666666;
		}

		.aitssendbuttonw3ls p a {
			color: #666666;
			font-weight: 600;
			padding: 8px 20px;
			border: 1px solid #fff;
		}

		.aitssendbuttonw3ls p a span {
			font-size: 18px;
		}

		.aitssendbuttonw3ls p a:hover {
			color: #28d;
			border: 1px solid #ef4d4d;
		}
	</style>
</head>

<body>

	<div class="wrapper">

		<div class="parnet">

			<div class="product">
				<h2>Đăng nhập tại đây</h2>
				<form action="Form_XLDN.php" method="post">
					<input type="email" name="user" placeholder="Tài khoản">
					<input type="password" name="pass" placeholder="Mật khẩu"><br>
					<div>
						<?php
						if (isset($_SESSION['thongbao'])) {
							echo $_SESSION['thongbao'];
							unset($_SESSION['thongbao']);
						}
						?>
					</div><br>
					<div class="aitssendbuttonw3ls">
						<input type="submit" name="login" value="Đăng nhập">
						<p> Đăng kí tài khoản mới <span>→</span> <a class="w3_play_icon1" href="Form_DK.php">Tại đây</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>