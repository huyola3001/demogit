<?php
session_start();
?>
<?php
if (isset($_SESSION['star']) && $_SESSION['star'] == 1) {
	$_SESSION['star'] = 0;
	header("location:result.php");
}
?>
<?php if (isset($_POST['add'])) {
	$_SESSION['tao_de'] = 1;
	header("location:bai_thi.php");
} ?>

<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Khoá học HTML</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c3e14c408d.js" crossorigin="anonymous"></script>
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
		background-color: #33b5e5;
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
		background: #33b5e5;
	}

	.topnav button {
		float: none;
		display: block;
		text-align: left;
		margin: 0;
		padding: 14px;
		height: 20px;
		background-color: #33b5e5;
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
		display: flex;
		align-items: center;
		justify-content: space-between;
		width: 1600px;
		float: left;
		background-color: #33b5e5;
	}

	.course-hot {
		display: flex;
		justify-content: center;
		margin-left: -40%;
	}

	.course-hot .course {
		width: 192px;
		height: 254px;
		box-shadow: 5px 10px #888888;
		margin: 10px;
	}

	.course-hot .course img {
		width: 187px;
		height: 126px;
	}

	.course-hot .course .info {
		background: #33b5e5;
		width: 190px;
		height: 126px;
	}

	.course-hot {
		display: flex;
		justify-content: space-around;
	}

	.them {
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.review {
		height: 600px;
		width: 1600px;
		border: 1px solid black;
		margin: 20px 0px 50px 0px;
	}

	.footer {
		background: #33b5e5;
		height: 400px;
		clear: both;
		position: relative;
		margin-top: 550px;
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
		max-height: 3.2rem;
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
		color: black;
		padding: 16px;
		font-size: 16px;
		border: none;
		height: 40px;
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
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.noidung_dropdown a:hover {
		background-color: #33b5e5;
	}

	.dropdown:hover .noidung_dropdown {
		display: flex;
		flex-direction: column;
	}

	.dropdown:hover .nut_dropdown {
		height: 48px;

	}

	.intro {
		background: linear-gradient(#141e30, #243b55);
		width: 100%;
		height: 400px;
		display: flex;
		align-items: center;
		flex-direction: column;
	}

	.intro>.course {
		width: 1184px;
		padding: 30px 0px;

	}

	.intro>.course .introduction {
		width: 700px;
		font-size: 20px;
		color: #fff;
	}

	.intro>.course .sidebar {
		width: 340px;
		height: 500px;
		position: fixed;
		left: 60%;
		top: 100px;
		background: #fff;
		box-shadow: 1px 1px 5px #fff,
			-2px -2px 5px #fff;
		border: 1px solid #778899;
	}

	.intro>.course .sidebar img {
		width: 340px;
		height: 40%;
	}

	.sidebar> a{
		display: flex;
		align-items: center;
		justify-content: center;
		margin-top: 10px;
	}

	.btn {
        width: 130px;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-weight: 500;
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
        width: 320px;
        height: 50px;
        line-height: 42px;
        padding: 0;
        border: none;
    }

    .btn-submit span {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 22px;
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

    .btn-submit span:hover {
        color: rgba(2, 126, 251, 1);
    }

    .btn-submit span:before,
    .btn-submit span:after {
        position: absolute;
        content: "";
        left: 0;
        bottom: 0;
        background: rgba(2, 126, 251, 1);
        transition: all 0.3s ease;
    }

    .btn-submit span:before {
        width: 2px;
        height: 0%;
    }

    .btn-submit span:after {
        width: 0%;
        height: 2px;
    }

    .btn-submit span:hover:before {
        height: 100%;
    }

    .btn-submit span:hover:after {
        width: 100%;
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

	.intro>.course .sidebar .list-info {
		font-size: 14px;
		padding: 20px;
	}

	.list-info> i{
		margin-right: 10px;
	}

	.course-hot .course {
		width: 200px;
		height: 300px;
		box-shadow: 0 0 10px;
		margin: 15px;
		border: 1px solid #ccc;
		border-radius: 5px;
	}

	.course-hot .course img {
		width: 100%;
		height: 45%;
		border-radius: 5px;
	}

	.course-hot .course .info {
		background-color: #fff;
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
		width: 96px;
	}

	.course-hot .course .info .cart span {
		color: #feba1b;
		font-size: 15px;
		font-weight: normal;
		padding: 5px;
		margin-left: 5px;
		color: #e9e9ed;
	}

	.course-hot .course .info .cart {
		width: 100%;
		display: flex;
		flex-direction: row;
		height: 60px;
		margin-top: 10px;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	#btn-cart{
		width: 190px;
		height: 40px;
	}

	.course-hot {
		display: flex;
		justify-content: space-around;
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

	.nut_dropdown {
		color: #fff;
		padding: 16px;
		font-size: 16px;
		border: none;
		height: 40px;
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
	}

	.dropdown:hover .noidung_dropdown {
		display: flex;
		flex-direction: column;
	}

	.dropdown:hover .nut_dropdown {
		height: 48px;

	}

	.course span h2 {
		margin-top: 300px;
		font-weight: bold;
	}

</style>
<?php
include "KetNoi.php";

$sql = "SELECT * from khoa_hoc ";
$do = mysqli_query($conn, $sql);
?>

<body>
	<div class="menu">
		<div class="menu2">
			<div class="topnav">
				<a href="home.php" style="padding:0px"><img src="images/logo_web.png"> </a>
				<form action="/action_page.php">
					<input type="text" placeholder="Tìm kiếm.." name="search">
				</form>
				<div class="dropdown">
					<button class="nut_dropdown">Khoá học <i class="fas fa-chevron-down"></i></button>
					<div class="noidung_dropdown">
						<?php if (mysqli_num_rows($do) > 0) { ?>
							<?php
							while ($row = mysqli_fetch_array($do)) { ?>
								<a href="khoa_hoc<?php echo $row[0] ?>"><?php echo $row[1] ?></a>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="topnav">
				<?php
				if (isset($_SESSION['tk'])) {
					echo "<botton><a href='history.php'>Khoá học đã đăng ký</a></botton>";
					echo "<botton><a href='DX.php'>Đăng xuất</a></botton>";
				} else {
					echo "<botton><a href='FORM_DK.php'>Đăng ký</a></botton>";
					echo "<botton><a href='FORM_DN.php'>Đăng nhập</a></botton>";
				}

				?>
			</div>
		</div>
	</div>

	<div class="intro">
		<div class="course">
			<div class="introduction">
				<?php
				$sql1 = "select * from khoa_hoc where id=2";
				$do2 = mysqli_query($conn, $sql1);
				if (mysqli_num_rows($do2) > 0) { ?>
					<?php
					while ($row = mysqli_fetch_array($do2)) { ?>
						<h1><?php echo $row[1] ?></h1><br>
						<span><?php echo $row[2] ?></span><br>


					<?php } ?>
				<?php } ?>
			</div>
			<div class="sidebar">
				<?php
				$sql1 = "select * from khoa_hoc where id=2";
				$do2 = mysqli_query($conn, $sql1);
				while ($row = mysqli_fetch_array($do2)) { ?>
					<img src="<?php echo $row['hinh_anh'] ?>"><?php } ?>
				<a href="bai_thi.php">
					<form action="" method="post">
						<button type="submit" name="add" class="btn btn-submit">
							<span>
								VÀO THI
							</span>
						</button>
					</form>
				</a><br>
				<span class="list-info"><i class="fas fa-check"></i> Khoá học bao gồm</span><br>
				<span class="list-info"><i class="fas fa-check"></i> Bài thi thời lượng 20 phút</span><br>
				<span class="list-info"><i class="fas fa-check"></i> Câu hỏi trắc nghiệm</span><br>
				<span class="list-info"><i class="fas fa-check"></i> Các câu hỏi ở 3 mức độ khác nhau </span>
			</div>
			<span>
				<h2>KHOÁ HỌC KHÁC</h2>
			</span>

			<div class="them">
				<div class="course-hot">
					<?php
					$sql1 = "select * from khoa_hoc where id limit 3 ";
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
										<button type="sumbit" class="btn btn-submit" id="btn-cart">
											<a href="khoa_hoc<?php echo $row[0] ?>.php">
												Vào học
											</a>
										</button>
									</div>
								</div>
							</div>

						<?php } ?>
					<?php } ?>


				</div>
			</div>
		</div>
	</div>








	</div>
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