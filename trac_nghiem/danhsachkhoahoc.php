<?php
include("KetNoi.php");
?>
<?php
$sql = "SELECT * FROM `khoa_hoc`";
$do = mysqli_query($conn, $sql);
?>
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
		margin-bottom: 20px;
	}

	.content-brand {
		overflow: auto;

		width: 97%;
		height: 85%;
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

	.footer-form {
		text-align: center;
		margin: 0 auto;
		width: 200px;
		height: 10%;
	}

	.footer-form input[type="submit"] {
		background: #e0f2f1;
		width: 100px;
		height: 40px;
		margin-top: 20px;
		font-size: 18px;
	}

	.form-group span {
		color: red;
	}
</style>
<div class="container">
	<div class="brand">
		<div class="header-brand">
			<p>Danh sách khóa học</p>
		</div>
		<div class="content-brand">
			<form action="">
				<div class="form-group">
					<table border="1">
						<thead>
							<th>#</th>
							<th>Tên khóa học</th>
							<th>Mô tả</th>
							<th>Hình ảnh</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</thead>
						<tbody>
							<?php
							while ($row = mysqli_fetch_array($do)) {
							?>
								<tr>
									<td><?php echo $row['0']; ?></td>
									<td><?php echo $row['1']; ?></td>
									<td><?php echo $row['2']; ?></td>
									<td>
										<?php if ($row['hinh_anh'] != "") {
										?>
											<img src="<?php echo $row['hinh_anh'];
														?>" alt="">
										<?php	} ?>
									</td>
									<td><a href="sua_khoa_hoc.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
									<td><a onclick="return Del('<?php echo $row['ten_khoa_hoc']; ?>')" href="xoa_khoa_hoc.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
								</tr>
							<?php
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
		return confirm("Bạn có chắc chắn muốn xóa khóa học: " + name + "?");
	}
</script>