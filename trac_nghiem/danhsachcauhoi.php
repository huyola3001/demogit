<?php
include("KetNoi.php");
?>
<style>
	.container {
		overflow: auto;
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.brand {
		width: 100%;
		height: 100%;
	}

	.header-brand {
		width: 100%;
		height: 5%;
		color: #414c5d;
		text-indent: 20px;
		font-weight: bold;
		font-size: 25px;
		background: #f5f7f7;
		margin-top: 15px;
	}

	.content-brand {
		width: 97%;
		height: 90%;
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

	.form-group table img {
		width: 100px;
	}
</style>
</form>
<?php
$sql = "SELECT * FROM `cau_hoi`";
$do = mysqli_query($conn, $sql);
$arr = [];
$answer = [];
$sl = 0;
while ($row1 = mysqli_fetch_array($do)) {
	$answer[$sl] = explode("::", $row1['answer']);
	$sl++;
}
$sql = "SELECT * FROM `cau_hoi`";
$do = mysqli_query($conn, $sql);
?>
<div class="container">
	<div class="brand">
		<div class="header-brand">
			<p>Danh sách câu hỏi</p>
		</div>
		<div class="content-brand">
			<form action="">
				<div class="form-group">
					<table border="1">
						<thead>
							<th>#</th>
							<th>Nội dung</th>
							<th>Các lựa chọn</th>
							<th>Hình ảnh</th>
							<th>Mức độ</th>
							<th>Loại câu hỏi</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</thead>
						<tbody>
							<?php
							$vt = 0;
							while ($row = mysqli_fetch_array($do)) {
							?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['noi_dung'] ?></td>
									<td><?php
										for ($k = 0; $k < count($answer[$vt]); $k++) {
											echo substr($answer[$vt][$k], 0, (trim(strlen($answer[$vt][$k]) - 2))) . "<br>";
										} ?></td>
									<td><?php if ($row['hinh_anh'] != "") {
										?>
											<img src="<?php echo $row['hinh_anh']; ?>" alt="">
										<?php
										} ?>
									</td>
									<td><?php echo $row['muc_do'] ?></td>
									<td><?php echo $row['loai_cau_hoi'] ?></td>
									<td><a href="sua_cau_hoi.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
									<td><a onclick="return Del('<?php echo $row['noi_dung']; ?>')" href="xoa_cau_hoi.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
								</tr>
							<?php
								$vt++;
							}
							?>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function Del(name) {
		return confirm("Bạn có chắc chắn muốn xóa câu hỏi: " + name + "?");
	}
</script>