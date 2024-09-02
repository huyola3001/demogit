<?php
session_start();
if (isset($_POST['vaothi'])) {
	if (isset($_SESSION['vaothi'])) {
	} else {
		$session_array = array(
			'id' => $_GET['id'],
			'ten_khoa_hoc' => $_GET['ten_khoa_hoc'],
			'mo_ta' => $_GET['mo_ta'],
			'hinh_anh' => $_GET['hinh_anh'],
			'gia_khoa_hoc' => $_GET['gia_khoa_hoc']
		);
		$_SESSION['vaothi'][] = $_session_array;
	}
}
?>
<?php
if (isset($_SESSION['star']) && $_SESSION['star'] == 1) {
	$_SESSION['star'] = 0;
}
?>
<?php
if (!isset($_SESSION['sl_de'])) {
	$_SESSION['sl_de'] = 10;
}
if (!isset($_SESSION['sl_tb'])) {
	$_SESSION['sl_tb'] = 6;
}
if (!isset($_SESSION['sl_kho'])) {
	$_SESSION['sl_kho'] = 4;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c3e14c408d.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<style>
	* {
		box-sizing: border-box;
	}

	body {
		margin: 0;
		font-family: 'Montserrat', sans-serif;
	}

	.topnav {
		overflow: hidden;
		float: left;
	}

	.topnav img {
		width: 60px;
		height: 55px;
		float: left;
	}

	.topnav form {
		float: left;
		padding-left: 10px;
	}

	.topnav a {
		float: left;
		display: block;
		color: #fff;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}

	.topnav a:hover {
		background-color: #fff;
		color: #33b5e5;
	}

	.topnav a.active {
		background-color: #2196F3;
		color: white;
	}

	.topnav .search-container {
		float: right;
	}

	.topnav input[type=text] {
		padding: 6px;
		margin-top: 8px;
		font-size: 17px;
		border: none;
	}

	.topnav .search-container button {
		float: right;
		padding: 6px 10px;
		margin-top: 8px;
		margin-right: 16px;
		background: #ddd;
		font-size: 17px;
		border: none;
		cursor: pointer;
	}

	.topnav .search-container button:hover {
		background: #ccc;
	}

	.topnav button {
		float: none;
		display: block;
		text-align: left;
		margin: 0;
		padding: 14px;
		height: 20px;
	}

	.topnav input[type=text] {
		border: 1px solid #ccc;
	}

	.topnav:last-child {
		float: right;
	}

	.menu {
		display: flex;
		justify-content: center;
	}

	.menu2 {
		background-color: #33b5e5;
		display: flex;
		align-items: center;
		justify-content: space-between;
		width: 1600px;
		float: left;
	}

	.home-page {
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
	}

	.home-page .banner img {
		width: 1600px;
		z-index: 1;
	}

	.home-page .slide-show img {
		width: 1600px;
		height: 550px;
	}

	.home-page .course-hot .course {
		width: 220px;
		height: 300px;
		margin: 15px;
		border: 1px solid #ccc;
		border-radius: 2px;
		box-shadow: 0 0 10px;
	}

	.home-page span h2 {
		padding-top: 40px;
		padding-bottom: 20px;
	}

	.course-hot .course img {
		background-size: 100% 100%;
		width: 100%;
		height: 45%;
		border-radius: 2px;
	}

	.course-hot .course .info {
		width: 100%;
		height: 55%;
	}

	.course-hot .course .info span:first-child {
		font-size: 16px;
		font-weight: bold;
		padding: 10px;
		color: #ff6500!important;
	}

	.course-hot .course .info span {
		font-size: 15px;
		padding: 0px 10px;
	}

	.course-hot .course .info span:last-child {
		width: 100%;
	}

	.course-hot .course .info .cart {
		display: flex;
		flex-direction: row;
		height: 60px;
		margin-top: 10px;
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 0;
	}

	.course-hot {
		display: flex;
		justify-content: space-around;
	}

	.btn {
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

	.btn-submit {
		background: rgb(0, 172, 238);
		background: linear-gradient(0deg, rgba(0, 172, 238, 1) 0%, rgba(2, 126, 251, 1) 100%);
		width: 210px;
		height: 40px;
		line-height: 32px;
		padding: 0;
		border: none;
	}

	.btn-submit a {
		position: relative;
		display: block;
		width: 100%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 16px;
	}

	.btn-submit:before,
	.btn-submit:after {
		position: absolute;
		content: "";
		right: 0;
		top: 0;
		background: rgba(2, 126, 251, 1);
		transition: all 0.3s ease;
	}

	.btn-submit:before {
		height: 0%;
		width: 2px;
	}

	.btn-submit:after {
		width: 0%;
		height: 2px;
	}

	.btn-submit:hover {
		background: transparent;
		box-shadow: none;
	}

	.btn-submit:hover:before {
		height: 100%;
	}

	.btn-submit:hover:after {
		width: 100%;
	}

	.btn-submit a:hover {
		color: rgba(2, 126, 251, 1);
	}

	.btn-submit a:before,
	.btn-submit a:after {
		position: absolute;
		content: "";
		left: 0;
		bottom: 0;
		background: rgba(2, 126, 251, 1);
		transition: all 0.3s ease;
	}

	.btn-submit a:before {
		width: 2px;
		height: 0%;
	}

	.btn-submit a:after {
		width: 0%;
		height: 2px;
	}

	.btn-submit a:hover:before {
		height: 100%;
	}

	.btn-submit a:hover:after {
		width: 100%;
	}

	.btn-submit a {
		text-decoration: none;
		color: #fff;
	}

	.home-page .review img {
		width: 98%;
		height: 100%;
		margin: auto;
		border-top: 1px solid #000;
		border-bottom: 1px solid #000;
	}

	.footer {
		background: #33b5e5;
		height: 400px;
	}

	.footer .container {
		background: #33b5e5;
		width: 1600px;
		font-size: 20px;
		width: 1600px;
		height: 400px;
		display: flex;
		justify-content: flex-start;
		color: #fff;

	}

	.footer .container .col .list {}

	.footer .container .title {
		font-weight: bold;
		color: yellow;
		padding: 80px 0px 10px 0px;
	}

	.footer .container .col:last-child .list {
		display: flex;
		justify-content: col;
	}

	.footer .container .col:last-child .list p {
		padding-left: 10px;
	}

	.course .info span {
		display: -webkit-box;
		-webkit-box-orient: vertical;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: normal;
		-webkit-line-clamp: 2;
		line-height: 1.6rem;
	}

	.slide-show .info span {
		display: -webkit-box;
		max-height: 3.2rem;
		-webkit-box-orient: vertical;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: normal;
		-webkit-line-clamp: 2;
		line-height: 1.6rem;
	}

	.nut_dropdown {
		color: #fff;
		padding: 16px;
		font-size: 16px;
		border: none;
		height: 40px;
		background-color: #33b5e5;
	}

	.dropdown {
		position: absolute;
		display: inline-block;
	}

	.noidung_dropdown {
		display: none;
		position: relative;
		background-color: #33b5e5;
		min-width: 160px;
		margin-top: 5px;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
	}

	.noidung_dropdown a {
		color: #fff;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.noidung_dropdown a:hover {
		background-color: #fff;
		color: #33b5e5;
	}

	.dropdown:hover .noidung_dropdown {
		display: flex;
		flex-direction: column;
	}

	.dropdown:hover .nut_dropdown {
		height: 48px;
	}

	.show-more{
		margin-top: 30px;
		margin-bottom: 30px;
	}
</style>
<?php
function currency_format($number, $suffix = 'đ')
{
	if (!empty($number)) {
		return number_format($number, 0, ',', '.') . "{$suffix}";
	}
}


include "KetNoi.php";

$sql = "select * from khoa_hoc ";
$do = mysqli_query($conn, $sql);
?>

<body>
	<div class="menu">
		<div class="menu2">
			<div class="topnav">
				<a href="home.php" style="padding:0px"><img src="images/logo_web.png"></a>
				<form action="/action_page.php">
					<input type="text" placeholder="Tìm kiếm.." name="search">
				</form>
				<div class="dropdown">
					<button class="nut_dropdown">Khoá học <i class="fas fa-chevron-down"></i></button>
					<div class="noidung_dropdown">
						<?php
						while ($row = mysqli_fetch_array($do)) { ?>
							<a href="khoa_hoc<?php echo $row[0] ?>.php"><?php echo $row[1] ?></a>
						<?php } ?>
					</div>
				</div>

			</div>
			<div class="topnav">
				<?php
				if (isset($_SESSION['tk'])) {
					echo "<botton><a href='#'>Khoá học đã đăng ký</a></botton>";
					echo "<botton><a href='DX.php'>Đăng xuất</a></botton>";
				} else {
					echo "<botton><a href='FORM_DK.php'>Đăng ký</a></botton>";
					echo "<botton><a href='FORM_DN.php'>Đăng nhập</a></botton>";
				}

				?>

			</div>
		</div>
	</div>
	<div class="home-page">
		<div class="slide-show">
			<div>
				<img class="mySlides" src="images/css.jpg">
				<img class="mySlides" src="images/js.jpg">
				<img class="mySlides" src="images/java.png">
				<img class="mySlides" src="images/php.jpg">
				<img class="mySlides" src="images/python.jpg">
				<img class="mySlides" src="images/html.jpg">

			</div>
			<script>
				var slideIndex = 0;
				carousel();

				function carousel() {
					var i;
					var x = document.getElementsByClassName("mySlides");
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";
					}
					slideIndex++;
					if (slideIndex > x.length) {
						slideIndex = 1
					}
					x[slideIndex - 1].style.display = "block";
					setTimeout(carousel, 2000);
				}
			</script>
		</div>
		<span>
			<h2><b>TẤT CẢ KHOÁ HỌC</b></h2>
		</span>

		<div class="course-hot">

			<?php
			$sql1 = "select * from khoa_hoc ";
			$do2 = mysqli_query($conn, $sql1);
			if (mysqli_num_rows($do2) > 0) { ?>

				<?php
				while ($row = mysqli_fetch_array($do2)) { ?>
					<div class="course">
						<img src="<?php echo $row['hinh_anh'] ?>">
						<div class="info">
							<span><?php echo $row['ten_khoa_hoc'] ?></span>
							<span><a><?php echo $row['mo_ta'] ?></a><br></span>
							<div class="cart">
								<?php if (isset($_SESSION['tk'])) { ?>
									<button type="sumbit" class="btn btn-submit" name="vaothi<?php echo $row[0] ?>">
										<a href="khoa_hoc<?php echo $row[0] ?>.php">Vào học</a>
									</button>
								<?php } else { ?>
									<button type="sumbit" class="btn btn-submit" name="vaothi<?php echo $row[0] ?>">
										<a href="FORM_DN.php">Vào học</a>
									</button>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>


		</div>
		<span class="show-more"><a href="">Xem thêm ></a></span>
	</div>
	<div class="footer">
		<div class="container">
			<div class="col">
				<p class="title">Tên</p>
				<div class="list">
					<p>Địa chỉ</p>
					<p>Email</p>
					<p>Giờ làm việc</p>
				</div>
			</div>
			<div class="col">
				<p class="title">Giới thiệu</p>
				<div class="list">
					<a>
						<p>Giảng Viên</p>
					</a>
					<a>
						<p>Chính sách bảo mật</p>
					</a>
					<a>
						<p>Điều khoản</p>
					</a>
					<a>
						<p>Trợ giúp</p>
					</a>
				</div>
			</div>
			<div class="col">
				<p class="title">Chia sẻ</p>
				<div class="list">
					<p><i class="fab fa-facebook-square"></i></p>
					<p><i class="fab fa-youtube"></i></p>
					<p><i class="fab fa-twitter"></i></p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>