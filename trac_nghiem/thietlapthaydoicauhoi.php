<style>
	.container {
		width: 100%;
		height: 100%;
		border: 1px solid;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.brand {
		width: 95%;
		height: 95%;
	}

	.header-brand {
		width: 100%;
		height: 5%;
		color: #414c5d;
		text-indent: 20px;
		font-weight: bold;
		font-size: 25px;
		background: #f5f7f7;
	}

	.content-brand {
		width: 97%;
		height: 90%;
		overflow: auto;
		background: #fff;
		padding: 19px;
	}

	.form-group {
		color: #8f8f8c;
		font-size: 19px;
		width: 100%;
		height: 10%;
		display: contents;
	}

	.form-group table {
		text-align: center;
		border-collapse: collapse;
		width: 100%;
	}

	.form-group td {
		padding: 20px;
	}

	.form-group table thead {
		background: #343a42;
		color: #f0f1e3;
	}

	.form-group table thead th {
		padding: 10px;
	}

	.footer-form {
		text-align: center;
		margin: 0 auto;
		width: 200px;
		height: 10%;
		margin-top: 30px;
	}

	.footer-form>span {
		font-size: 18px;
		color: #f55858;
		margin-top: 10px;
	}

	.btn-submit {
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
		padding: 10px 18px;
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

	.form-group span {
		color: red;
	}

	.custom input {
		margin-top: 30px;
		text-align: center;
	}

	#tb {
		padding-top: 10px;
		color: #4277d9;
	}
</style>
<?php
$err = [];
$kq = "";
if (isset($_POST['submit'])) {
	if ($_POST['sl1'] != "" && $_POST['sl2'] != "" && $_POST['sl3'] != "") {
		if ($_POST['sl1'] > 0 && $_POST['sl2'] > 0 && $_POST['sl3'] > 0) {
			if (($_POST['sl1'] + $_POST['sl2'] + $_POST['sl3']) == 35) {
				$_SESSION['sl_de'] = $_POST['sl1'];
				$_SESSION['sl_tb'] = $_POST['sl2'];
				$_SESSION['sl_kho'] = $_POST['sl3'];
				$kq = "Thay đổi thành công";
			} else {
				$err['sl'] = "Vui lòng nhập tổng số lượng là 20";
			}
		} elseif ($_POST['sl1'] < 0) {
			$err['sl1'] = "Vui lòng nhập số lượng lớn hơn hoặc =0 ";
		} elseif ($_POST['sl2'] < 0) {
			$err['sl2'] = "Vui lòng nhập số lượng lớn hơn hoặc =0 ";
		} elseif ($_POST['sl2'] < 0) {
			$err['sl3'] = "Vui lòng nhập số lượng lớn hơn hoặc =0 ";
		}
	} elseif ($_POST['sl1'] == "") {
		$err['sl1'] = "Vui lòng nhập số lượng câu hỏi dễ";
	} elseif ($_POST['sl2'] == "") {
		$err['sl2'] = "Vui lòng nhập số lượng câu hỏi trung bình";
	} elseif ($_POST['sl3'] == "") {
		$err['sl3'] = "Vui lòng nhập số lượng câu hỏi khó";
	} else {
		$err['sl'] = "Vui lòng nhập thông tin";
	}
}
?>
<div class="container">
	<div class="brand">
		<div class="header-brand">
			<p>Thiết lập thay đổi cho câu hỏi</p>
		</div>
		<div class="content-brand">
			<form action="" method="post">
				<div class="form-group">
					<table border="1" class="custom">
						<thead>
							<th>Số lượng câu dễ</th>
							<th>Số lượng câu trung bình</th>
							<th>Số lượng câu khó</th>
						</thead>
						<tbody>
							<tr>
								<td><input name="sl1" type="number" value="
								<?php
								if (isset($_POST['sl1'])) {
									echo $_POST['sl1'];
								} else {
									echo $_SESSION['sl_de'];
								} ?>"><br>
									<span><?php if (isset($err['sl1'])) echo $err['sl1']; ?></span>
								</td>
								<td><input name="sl2" type="number" value="
								<?php
								if (isset($_POST['sl2'])) {
									echo $_POST['sl2'];
								} else {
									echo $_SESSION['sl_tb'];
								} ?>"><br><span><?php if (isset($err['sl2'])) echo $err['sl2']; ?></span></td>

								<td><input name="sl3" type="number" value="
								<?php
								if (isset($_POST['sl3'])) {
									echo $_POST['sl3'];
								} else {
									echo $_SESSION['sl_kho'];
								} ?>"><span><?php if (isset($err['sl3'])) echo $err['sl3']; ?></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="footer-form">
					<input type="submit" name="submit" value="Gửi đi" class="btn-submit"><br>
					<span><?php if (isset($err['succes'])) echo $err['succes'];
							if (isset($err['sl'])) echo $err['sl'];
							?></span>
					<span id="tb">
						<?php if ($kq != "") {
							echo $kq;
						} ?></span>
				</div>
			</form>
		</div>
	</div>
</div>