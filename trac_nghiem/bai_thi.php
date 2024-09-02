<?php
include("KetNoi.php");
?>
<?php
session_start();
if (isset($_SESSION['score'])) {
	$_SESSION['score'] = 0;
} else {
	$_SESSION['score'] = 0;
}
?>
<?php
if (isset($_SESSION['star']) && $_SESSION['star'] == 1) {
	$_SESSION['star'] = 0;
	header("location:result.php");
}
?>
<?php
$tk = $_SESSION['tk'];
$sql = "SELECT id FROM `user` WHERE username='$tk'";
$do = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($do);
$id = $row['id'];
?>
<?php
$sql = "SELECT id_user FROM chi_tiet_de_thi WHERE id_user='$id'"; //xem người thi đã thi lần nào chưa
$do = mysqli_query($conn, $sql);
if (mysqli_num_rows($do) <= 0) { //chưa thi
	$ptt = "SELECT * FROM `cau_hoi` WHERE id_kien_thuc=1";
	$_SESSION['id_kien_thuc'] = 1;
} else { //đã thi
	$sql = "SELECT MAX(id_kien_thuc) FROM chi_tiet_de_thi,de_thi WHERE chi_tiet_de_thi.id_de_thi=de_thi.id AND ket_qua='pass' AND id_user='$id'";
	$do = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($do);
	if (mysqli_num_rows($do) <= 0) { //nếu không tìm thấy giá trị id kiến thức lớn nhất mà user id kiến thức lớn nhất là  fail
		$ptt = "SELECT * FROM `cau_hoi` WHERE id_kien_thuc=1";
		$_SESSION['id_kien_thuc'] = 1;
	} else {   //nếu pass
		$ptt = "SELECT * FROM `cau_hoi` WHERE id_kien_thuc=2";
		$_SESSION['id_kien_thuc'] = 2;
	}
}

$do = mysqli_query($conn, $ptt);
$x_de = 0;
$y_tb = 0;
$z_kho = 0;
$GLOBALS['form_de_thi'] = [];
$_SESSION['score'] = 0;
while ($row = mysqli_fetch_array($do)) {
	if ($row['muc_do'] == "dễ") {
		$GLOBALS['question_de'][$x_de] = $row['noi_dung'];
		$GLOBALS['answer_de'][$x_de] = explode("::", rtrim($row['answer'], "::"));
		$GLOBALS['hinh_anh_de'][$x_de] = $row['hinh_anh'];
		$GLOBALS['loai_cau_hoi_de'][$x_de] = $row['loai_cau_hoi'];
		$x_de++;
	} elseif ($row['muc_do'] == "trung bình") {
		$GLOBALS['question_trung_binh'][$y_tb] = $row['noi_dung'];
		$GLOBALS['answer_trung_binh'][$y_tb] = explode("::", rtrim($row['answer'], "::"));
		$GLOBALS['hinh_anh_trung_binh'][$y_tb] = $row['hinh_anh'];
		$GLOBALS['loai_cau_hoi_trung_binh'][$y_tb] = $row['loai_cau_hoi'];
		$y_tb++;
	} elseif ($row['muc_do'] == "khó") {
		$GLOBALS['question_kho'][$z_kho] = $row['noi_dung'];
		$GLOBALS['answer_kho'][$z_kho] = explode("::", rtrim($row['answer'], "::"));
		$GLOBALS['hinh_anh_kho'][$z_kho] = $row['hinh_anh'];
		$GLOBALS['loai_cau_hoi_kho'][$z_kho] = $row['loai_cau_hoi'];
		$z_kho++;
	}
}
if (isset($_SESSION['tao_de'])) {
	taodethi($_SESSION['sl_de'], $_SESSION['sl_tb'], $_SESSION['sl_kho']);
	$GLOBALS['sl'] = count($form_de_thi);
	$_SESSION['form_de_thi'] = array_merge($question_form_de, $question_form_trung_binh, $question_form_kho);
	$_SESSION['answer_de_thi'] = array_merge($answer_form_de, $answer_form_trung_binh, $answer_form_kho);
	$_SESSION['hinh_anh_de_thi'] = array_merge($hinh_anh_form_de, $hinh_anh_form_trung_binh, $hinh_anh_form_kho);
	$_SESSION['loai_cau_hoi_de_thi'] = array_merge($loai_cau_hoi_form_de, $loai_cau_hoi_form_trung_binh, $loai_cau_hoi_form_kho);
	unset($_SESSION['tao_de']);
}
?>
<style>
	body {
		overflow: auto;
		font-family: 'Montserrat', sans-serif;
	}

	* {
		margin: 0;
		padding: 0;
	}

	.wrapper {
		width: 100%;
		height: auto;
	}

	.header-wrapper {
		width: 100%;
		height: 8%;
	}

	.content-wrapper {
		width: 100%;
		height: auto;
		display: flex;
		/* justify-content: center;
		align-content: center; */
	}

	.parnet {
		width: 100%;
		height: auto;
	}

	.header-parnet {
		width: 100%;
		height: 100px;
		padding-top: 30px;
		text-align: center;
		font-size: 3em;
		color: #444;
		text-shadow:
			1px 0px 1px #ccc, 0px 1px 1px #eee,
			2px 1px 1px #ccc, 1px 2px 1px #eee,
			3px 2px 1px #ccc, 2px 3px 1px #eee,
			4px 3px 1px #ccc, 3px 4px 1px #eee,
			5px 4px 1px #ccc, 4px 5px 1px #eee,
			6px 5px 1px #ccc, 5px 6px 1px #eee,
			7px 6px 1px #ccc;
	}

	.content-parnet {
		width: 100%;
		height: auto;
		margin-left: 8%;
		display: flex;
	}

	.container {
		width: 80%;
		height: 90%;
		border: 0.5px solid #1c87c9;
		border-radius: 4px;
		box-shadow: 0 0 18px 0 #1c87c9;
	}

	.content-container {
		padding: 20px 20px 0 40px;
		width: 90%;
		height: 50%;
		font-size: 19px;
		line-height: 2;
	}

	.content-container span {
		line-height: 2.4;
	}

	.content-container img {
		margin-top: 10px;
		width: 250px;
	}

	.content-container input[type="text"] {
		padding: 10px;
	}

	.container input[type="submit"] {
		top: 260px;
		font-size: 20px;
		right: 30px;
		height: 52px;
		width: 165px;
		color: #fff;
		cursor: pointer;
		position: fixed;
		border: none;
		background-size: 300% 100%;

		border-radius: 2px;
		moz-transition: all .4s ease-in-out;
		-o-transition: all .4s ease-in-out;
		-webkit-transition: all .4s ease-in-out;
		transition: all .4s ease-in-out;
	}

	.container input[type="submit"]:hover {
		background-position: 100% 0;
		moz-transition: all .4s ease-in-out;
		-o-transition: all .4s ease-in-out;
		-webkit-transition: all .4s ease-in-out;
		transition: all .4s ease-in-out;
	}

	.container input[type="submit"]:focus {
		outline: none;
	}

	.container input[type="submit"] {
		background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
		box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
	}


	.test {
		top: 150px;
		right: 50px;
		width: 100px;
		height: 100px;
		position: fixed;
	}

	#clockTime {
		padding-top: 14px;
		text-align: center;
		position: fixed;
		right: 30px;
		font-size: 20px;
		top: 190px;
		background: #dbb0e3;
		width: 165px;
		height: 41px;
		z-index: 1000;
		color: red;
	}

	.num-ques {
		font-weight: bold;
		color: tomato;
		font-size: 22px;

		--x-offset: -0.0625em;
		--y-offset: 0.0625em;
		--stroke: 0.025em;
		--background-color: white;
		--stroke-color: lightblue;

		text-shadow:

			var(--x-offset) var(--y-offset) 0px var(--background-color),

			calc(var(--x-offset) - var(--stroke)) calc(var(--y-offset) + var(--stroke)) 0px var(--stroke-color);
	}

	input[type="checkbox"]{
		top: 0;
		left: 0;
		width: 15px;
		height: 15px;
		border: 1px solid #ccc;
		margin-right: 5px;
	}

	input[type="radio"]{
		width: 15px;
		height: 15px;
	}
</style>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bài thi</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<div class="content-wrapper">
			<div class="parnet">
				<div class="header-parnet">
					<p>Kiểm tra</p>
					<div class="time"></div>
				</div>
				<div class="content-parnet">
					<div class="container">
						<form action="" method="post">
							<?php
							if (isset($_POST['submit'])) {
								$_SESSION['star'] = 1;
								header("location:result.php");
								// echo $_SESSION['score'];
							}
							?>
							<?php
							$j = 0;
							while ($j < count($_SESSION['answer_de_thi'])) {
							?>
								<div class="content-container">
									<?php taocauhoi($j);
									?>
								</div>
							<?php $j++;
							}
							?>
							<input id="save" type="submit" name="submit" value="Nộp bài">
						</form>
						<div id="clockTime">
						</div>
					</div>
				</div>
				<div class="test">

				</div>
			</div>
		</div>
	</div>
</body>

</html>



<?php
function taodethi($tl_de, $tl_tb, $tl_kho)
{
	for ($i = 1; $i <= $tl_de; $i++) {
		$random = rand(0, count($GLOBALS['question_de']) - 1);
		$GLOBALS['question_form_de'][$i] = $GLOBALS['question_de'][$random];
		$GLOBALS['answer_form_de'][$i] = $GLOBALS['answer_de'][$random];
		$GLOBALS['hinh_anh_form_de'][$i] = $GLOBALS['hinh_anh_de'][$random];
		$GLOBALS['loai_cau_hoi_form_de'][$i] = $GLOBALS['loai_cau_hoi_de'][$random];
		array_splice($GLOBALS['question_de'], $random, 1);
		array_splice($GLOBALS['answer_de'], $random, 1);
		array_splice($GLOBALS['hinh_anh_de'], $random, 1);
		array_splice($GLOBALS['loai_cau_hoi_de'], $random, 1);
	}
	for ($i = 1; $i <= $tl_tb; $i++) {
		$random = rand(0, count($GLOBALS['question_trung_binh']) - 1);
		$GLOBALS['question_form_trung_binh'][$i] = $GLOBALS['question_trung_binh'][$random];
		$GLOBALS['answer_form_trung_binh'][$i] = $GLOBALS['answer_trung_binh'][$random];
		$GLOBALS['hinh_anh_form_trung_binh'][$i] = $GLOBALS['hinh_anh_trung_binh'][$random];
		$GLOBALS['loai_cau_hoi_form_trung_binh'][$i] = $GLOBALS['loai_cau_hoi_trung_binh'][$random];
		array_splice($GLOBALS['question_trung_binh'], $random, 1);
		array_splice($GLOBALS['answer_trung_binh'], $random, 1);
		array_splice($GLOBALS['hinh_anh_trung_binh'], $random, 1);
		array_splice($GLOBALS['loai_cau_hoi_trung_binh'], $random, 1);
	}
	for ($i = 1; $i <= $tl_kho; $i++) {
		$random = rand(0, count($GLOBALS['question_kho']) - 1);
		$GLOBALS['question_form_kho'][$i] = $GLOBALS['question_kho'][$random];
		$GLOBALS['answer_form_kho'][$i] = $GLOBALS['answer_kho'][$random];
		$GLOBALS['hinh_anh_form_kho'][$i] = $GLOBALS['hinh_anh_kho'][$random];
		$GLOBALS['loai_cau_hoi_form_kho'][$i] = $GLOBALS['loai_cau_hoi_kho'][$random];
		array_splice($GLOBALS['question_kho'], $random, 1);
		array_splice($GLOBALS['answer_kho'], $random, 1);
		array_splice($GLOBALS['hinh_anh_kho'], $random, 1);
		array_splice($GLOBALS['loai_cau_hoi_kho'], $random, 1);
	}
}
function taocauhoi($j)
{
	$slcd = 0;
	echo '<span class="num-ques">Câu ' . ($j + 1) . ": </span>" . $_SESSION['form_de_thi'][$j] . "<br>";
?>
	<span class="solution">
		<?php if ($_SESSION['hinh_anh_de_thi'][$j] != "") {
		?>
			<img src="<?php echo $_SESSION['hinh_anh_de_thi'][$j]; ?>" alt=""><br>
			<?php	}
		for ($i = 0; $i < count($_SESSION['answer_de_thi'][$j]); $i++) {
			if ($_SESSION['loai_cau_hoi_de_thi'][$j] == "một đáp án" || $_SESSION['loai_cau_hoi_de_thi'][$j] == "nhiều đáp án") {
				if ($_SESSION['loai_cau_hoi_de_thi'][$j] == "nhiều đáp án") {    //if1	?>
					<input type="checkbox" name="<?php echo "checkanswer$j"; ?>[]" value="<?php echo "rad$i" ?>" 
					<?php
					if (isset($_POST['checkanswer' . $j]) && in_array("rad" . $i, $_POST['checkanswer' . $j])) {
						echo "checked";
					}
						echo substr($_SESSION['answer_de_thi'][$j][$i], 0, strlen($_SESSION['answer_de_thi'][$j][$i]) - 2) . "<br>";
					}
				if ($_SESSION['loai_cau_hoi_de_thi'][$j] == "một đáp án") { //elseif1 ?>
					<input type="radio" name="<?php echo "right$j"; ?>" value="<?php echo "gt$i"; ?>" <?php if (isset($_POST['right' . $j]) && $_POST['right' . $j] == "gt$i") {
						echo "checked";
				} ?>>
				<?php //tính điểm radio
					if (isset($_POST['right' . $j]) && $_POST['right' . $j] == "gt$i") { //nếu tồn tại và là ô thứ i kt tại ô thứ i
						if (substr($_SESSION['answer_de_thi'][$j][$i], strlen($_SESSION['answer_de_thi'][$j][$i]) - 1, 1) == 1) {
							$_SESSION['score'] = $_SESSION['score'] + 10; //tính điểm
							$_SESSION['correct'] = $_SESSION['correct'] + 1;
						}
						} else {
							$_SESSION['score'] = $_SESSION['score'];
						}
				} //đóng elseif1
				echo substr($_SESSION['answer_de_thi'][$j][$i], 0, strlen($_SESSION['answer_de_thi'][$j][$i]) - 2) . "<br>"; //tên các đáp án	
				//if1
				} elseif ($_SESSION['loai_cau_hoi_de_thi'][$j] == "điền") {
				?>
				<input type="text" name="<?php echo "txt$j" ?>" value="<?php if (isset($_POST['txt' . $j]))
					echo $_POST['txt' . $j]; ?>">
				<br>
				<?php
					if (isset($_POST['txt' . $j])) {
					// mb_strtolower($_POST['txt'.$j])
						if (substr($_SESSION['answer_de_thi'][$j][$i], 0, strlen($_SESSION['answer_de_thi'][$j][$i]) - 2) == mb_strtolower($_POST['txt' . $j])) {
							$_SESSION['score'] = $_SESSION['score'] + 10;
							$_SESSION['correct'] = $_SESSION['correct'] + 1;
						} else {
							$_SESSION['score'] = $_SESSION['score'];
						}
					}
				}
		} //thẻ đóng for
		?>
	</span>
<?php $x = 0;
	for ($k = 0; $k < count($_SESSION['answer_de_thi'][$j]); $k++) {
		if (substr($_SESSION['answer_de_thi'][$j][$k], strlen($_SESSION['answer_de_thi'][$j][$k]) - 1, 1) == 1) {
			$x = $x + 1;
		}
	}
	if (isset($_POST['checkanswer' . $j])) {
		$vt = 0;
		$flag = 0;
		if (count($_POST['checkanswer' . $j]) == $x) { //tổng số các đáp án tích bằng tổng số đáp án đúng(ví dụ số đáp án đúng là 3 thì phải tích 3 cái)
			for ($xb = 0; $xb < count($_POST['checkanswer' . $j]); $xb++) {
				$yb = (int)$_POST['checkanswer' . $j][$xb]; //lấy vị trí các checkbox đã chọn
				if (substr($GLOBALS['answer_de_thi'][$j][$yb], strlen($GLOBALS['answer_de_thi'][$j][$yb]) - 1, 1) == 0) {
					$flag = 0;
					break;
				}
			}
			if ($flag == 1) {
				$_SESSION['score'] = $_SESSION['score'] + 10;
				$_SESSION['correct'] = $_SESSION['correct'] + 1;
			} else {
				$_SESSION['score'] = $_SESSION['score'];
			}
		}
	}
}
?>

<script type="text/javascript">
	function startTimer(duration, display) {
		var timer = duration,
			minutes, seconds;
		var autoCick = document.getElementById("save");
		var x = setInterval(function() {
			minutes = parseInt(timer / 60, 10);
			seconds = parseInt(timer % 60, 10);

			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;
			display.textContent = minutes + ":" + seconds;

			if (--timer < 0) {
				clearInterval(x);
				document.getElementById("clockTime").innerHTML = "Thời gian đếm ngược đã kết thúc";
				save.click();
			}
		}, 1000);
	}
	window.onload = function() {
		var fiveMinutes = 60 * 20,
			display = document.querySelector('#clockTime');
		startTimer(fiveMinutes, display);
	};
</script>