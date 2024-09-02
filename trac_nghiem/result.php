<?php
include("KetNoi.php");
?>
<?php
session_start();
$username = $_SESSION['tk'];
$sql = "SELECT id FROM `user` WHERE username='$username'";
$do = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($do);
$id = $row['id'];
$id_kien_thuc = $_SESSION['id_kien_thuc'];
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
	<style>
		* {
			margin: 0;
			padding: 0;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			font-family: 'Montserrat', sans-serif;
		}

		.wrapper {
			width: 100%;
			height: 100%;
			background: #EEF2F7;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.parnet {
			width: 700px;
			height: 400px;
			box-shadow:
				0 2.8px 2.2px rgba(0, 0, 0, 0.034),
				0 6.7px 5.3px rgba(0, 0, 0, 0.048),
				0 12.5px 10px rgba(0, 0, 0, 0.06),
				0 22.3px 17.9px rgba(0, 0, 0, 0.072),
				0 41.8px 33.4px rgba(0, 0, 0, 0.086),
				0 100px 80px rgba(0, 0, 0, 0.12);
			background: white;
			border-radius: 5px;
		}

		.header-parnet {
			width: 100%;
			height: 80px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.content {
			width: 100%;
			height: 80px;
			text-align: center;
		}

		.img-result {
			width: 100%;
			height: 130px;
			margin-top: 30px;
		}

		.img-result img {
			width: 70px;
			height: 70px;
			justify-content: center;
			margin-bottom: 20px;
		}

		.score-content {
			color: #423636;
			padding-top: 20px;
			margin: 0 auto;
			width: 50%;
			height: 50px;
			text-align: center;
			font-size: 25px;
		}

		.score-content>p {
			float: left;
		}

		.score-content>p:last-child {
			font-weight: bold;
			float: right;
			margin-right: 80px;
		}

		.product {
			color: #423636;
			margin: 0 auto;
			width: 50%;
			height: 50px;
			text-align: center;
			font-size: 25px;
		}

		.product>p {
			float: left;
		}

		.product>p:last-child {
			font-weight: bold;
			float: right;
			margin-right: 80px;
		}

		.back {
			width: 100%;
			height: 100px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.back .btn {
			width: 130px;
			height: 40px;
			color: #fff;
			border-radius: 5px;
			padding: 10px 25px;
			font-weight: 300;
			background: transparent;
			cursor: pointer;
			transition: all 0.3s ease;
			position: relative;
			display: inline-block;
			box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
				7px 7px 20px 0px rgba(0, 0, 0, .1),
				4px 4px 5px 0px rgba(0, 0, 0, .1);
			outline: none;
		}

		.back .btn-submit {
			background: rgb(0, 172, 238);
			background: linear-gradient(0deg, rgba(0, 172, 238, 1) 0%, rgba(2, 126, 251, 1) 100%);
			width: 240px;
			height: 50px;
			line-height: 32px;
			padding: 0;
			border: none;
		}

		.back .btn-submit a {
			position: relative;
			display: block;
			width: 100%;
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 18px;
		}

		.back .btn-submit:before,
		.back .btn-submit:after {
			position: absolute;
			content: "";
			right: 0;
			top: 0;
			background: rgba(2, 126, 251, 1);
			transition: all 0.3s ease;
		}

		.back .btn-submit:before {
			height: 0%;
			width: 2px;
		}

		.back .btn-submit:after {
			width: 0%;
			height: 2px;
		}

		.back .btn-submit:hover {
			background: transparent;
			box-shadow: none;
		}

		.back .btn-submit:hover:before {
			height: 100%;
		}

		.back .btn-submit:hover:after {
			width: 100%;
		}

		.back .btn-submit a:hover {
			color: rgba(2, 126, 251, 1);
		}

		.back .btn-submit a:before,
		.back .btn-submit a:after {
			position: absolute;
			content: "";
			left: 0;
			bottom: 0;
			background: rgba(2, 126, 251, 1);
			transition: all 0.3s ease;
		}

		.back .btn-submit a:before {
			width: 2px;
			height: 0%;
		}

		.back .btn-submit a:after {
			width: 0%;
			height: 2px;
		}

		.back .btn-submit a:hover:before {
			height: 100%;
		}

		.back .btn-submit a:hover:after {
			width: 100%;
		}

		.back .btn-submit a {
			text-decoration: none;
			color: #fff;
		}

		.pass-score {
			font-weight: bold;
			color: #33CC00;
		}

		.score-content .pass {
			color: #33CC00;
		}

		.score-content .fail {
			color: red;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="parnet">
			<div class="content">
				<div class="img-result">
					<?php if ($_SESSION['score'] >= 60) {
						echo '<img src = "images/passed.png"';
					} else {
						echo '<img src = "images/fail.jpg"';
					} ?>
				</div>
				<h1>
					<?php if ($_SESSION['score'] >= 60 && $_SESSION['score'] != null) {
						echo "Chúc mừng bạn đã vượt qua bài thi";
					} else {
						echo "Bạn đã không vượt qua bài thi";
					} ?>
				</h1>
			</div>
			<div class="score-content">
				<p>Điểm của bạn: </p>
				<?php
				if ($_SESSION['score'] >= 60) { ?>
					<p class="pass"><?php echo $_SESSION['score'] . "%"; ?></p>
				<?php } else { ?>
					<p class="fail"><?php echo $_SESSION['score'] . "%"; ?></p>
				<?php } ?>
			</div>
			<div class="product">
				<p>Passing Score:</p>
				<p class="pass-score">60%</p>
			</div>
			<div class="back">
				<button class="btn btn-submit"><a href="home.php">Quay trở về trang chủ</a></button>
			</div>
		</div>
	</div>
</body>

</html>

<?php
if ($_SESSION['score'] >= 60) {
	$kq = "pass";
} else {
	$kq = "fail";
}
$score = $_SESSION['score'];
$correct = $_SESSION['correct'];
if ($_SESSION['correct'] = 0) {
	$kq = "fail";
}
if ($id_kien_thuc == 1) {
	$sql = "INSERT INTO `chi_tiet_de_thi` (`id`, `ngay_thi`, `ket_qua`, `diem`, `id_de_thi`, `id_user`, `so_cau_dung`) VALUES (NULL, current_timestamp(), '$kq', '$score', '1', '$id', '$correct')";
	$do = mysqli_query($conn, $sql);
} else {
	$sql = "INSERT INTO `chi_tiet_de_thi` (`id`, `ngay_thi`, `ket_qua`, `diem`, `id_de_thi`, `id_user`, `so_cau_dung`) VALUES (NULL, current_timestamp(), '$kq', '$score', '2', '$id', '$correct')";
	$do = mysqli_query($conn, $sql);
}
unset($_SESSION['score']);
?>