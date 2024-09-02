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
<?php
$sql = "SELECT id,username FROM `user`";
$do = mysqli_query($conn, $sql);

?>
<div class="container">
	<div class="brand">
		<div class="header-brand">
			<p>Danh sách học viên</p>
		</div>
		<div class="content-brand">
			<form action="">
				<div class="form-group">
					<table border="1">
						<thead>
							<th>#</th>
							<th>Username</th>
						</thead>
						<tbody>
							<?php
							while ($row = mysqli_fetch_array($do)) {
							?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['username']; ?></td>
								</tr>
							<?php	}
							?>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
</div>