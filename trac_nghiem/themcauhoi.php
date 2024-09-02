<?php 
	include("KetNoi.php");
?>
<style>
	.container{
			width: 100%;
			height: 100%;
			border: 1px solid;
			display: flex;
			justify-content: center;
			align-items: center;
			/* padding-bottom: 20px; */
		}
		.brand{
			width: 95%;
			height: 85%;
			/* padding-top: 30px; */
			padding-bottom: 50px;
		}
		.header-brand{
			width: 100%;
			height: 5%;
			color: #000;
			text-indent: 20px;
			font-weight: bold;
			font-size: 25px;
			background: #f5f7f7;
			margin-bottom: 20px;
		}
		.content-brand{
			width: 97%;
			height: 90%;
			overflow: auto;
			background: #fff;
			padding: 19px;
		}
		.form-group{
			color: #000;
			font-size: 19px;
			width: 100%;
			height: 10%;
			display: contents;
		}
		.form-group input[type="text"]{
			width: 100%;
			height: 40px;
			margin-bottom: 20px;
			margin-top: 10px;
		}
		.form-group input[type="file"]{
			padding: 16px 0px;
		}
		.footer-form{
			text-align: center;
			margin: 0 auto;
			width: 200px;
			height: 10%;
			margin-bottom: 40px;
		}
		.footer-form span{
			font-size: 18px;
			color: #a578d5;
			margin-top: 10px;
		}
		.form-group span{
			color: red;
		}
		.form-group2{
			margin-top: 20px;
		}
		.form-group2 input[type="text"]{
			width: 80%;
		}
		.form-group2 input[type="checkbox"]{
			width: 20px;
			height: 20px;
		}
		.form-group2 input[type="submit"]{
			text-decoration: none;
			color: black;
			margin-right: 10px;
			width: 150px;
			height: 50px;
			background-color: #e0f2f1;
			border: 1px solid #000;
			border-radius: 2px;
		}
		.form-group2 input[type="submit"]:hover,
		.form-group2 input[type="submit"]:focus{
			opacity: .75;
		}
		.btn-submit{
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
            padding: 10px 24px;
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
		#btnReset{
			margin-left: 10px;
			padding: 7px 10px;
		}
		#btnReset a{
			text-decoration: none;
			color: #000;
		}
		.form-group2 span{
			margin-left: 100px;
		}
		.footer-form>span:first-child{
			color: red;
		}
</style>
<?php 
 	$arr=["A","B","C","D","E","F","G","H","I","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
 	$err=[];
 	$answer=$kq="";
 	$dem=4;
 	$muc_do="";
 	$chon="";
 	$chon_lch="";
 	$x="";
 	$lch="";
 	if(isset($_POST['them_lua_chon'])){
 		$dem=(int)$_POST['dem']+1;
 	}
 	if(isset($_POST['xoa_lua_chon'])){
 		$dem=(int)$_POST['dem']-1;
 		if($dem<0){
 			$dem=0;
 		}
 	}
 	if(isset($_POST['submit'])){
 		$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
 		$image_name=$_FILES['image']['name'];
 		$image_type=$_FILES['image']['type'];
 		$ext=pathinfo($image_name,PATHINFO_EXTENSION);
 		$dem=(int)$_POST['dem'];
 		if(isset($_POST['cb'])){
 			$x=$_POST['cb'];
 		}
 		else{
 			$err['errcauhoi']="Vui lòng chọn 1 đáp án đúng";
 		}
 		foreach ($_POST['lc'] as $key => $value) {
 			if($value!=""){
 				if(isset($_POST['cb']) && in_array($key, $x)){
 					$answer=$answer.$arr[$key].".".$value.";1::";
 				}
 				else{
 					$answer=$answer.$arr[$key].".".$value.";0::";
 				}
 			}
 			else{
 				$err[$key]="Vui lòng điền thông tin";
 			}
 		}
 		if(isset($_POST['noi_dung']) &&$_POST['noi_dung']!=""){
 			$noi_dung=$_POST['noi_dung'];
 		}
 		else{
 			$err['noi_dung']="Vui lòng nhập nội dung câu hỏi";
 		}
 		if(isset($_POST['chon']) && $_POST['chon']!="md"){
 			$chon=$_POST['chon'];
 			if($chon=="gt1"){
 				$muc_do="dễ";
 			}
 			elseif ($chon=="gt2") {
 				$muc_do="trung bình";
 			}
 			elseif($chon=="gt3"){
 				$muc_do="khó";
 			}
 		}	
 		else{
 			$err['chon']="Vui lòng chọn mức độ câu hỏi";
 		}

 		if(isset($_POST['chon_lch']) && $_POST['chon_lch']!="md"){
 			$chon_lch=$_POST['chon_lch'];
 			if($chon_lch=="gt1"){
 				$lch="một đáp án";
 			}
 			elseif ($chon_lch=="gt2") {
 				$lch="nhiều đáp án";
 			}
 			elseif($chon_lch=="gt3"){
 				$lch="điền";
 			}
 		}	
 		else{
 			$err['chon_lch']="Vui lòng chọn loại câu hỏi";
 		}
 		if(isset($_FILES['image']['name'])&&$_FILES['image']['name']!=""){
 			if(!array_key_exists($ext, $allowed)){
			$err['err_image_type']="Vui lòng chọn đúng định dạng file ảnh";
			}
		}
 		if(count($err)>0){

 		}
 		else{
 			$answer=rtrim($answer,"::");
 			$sql="INSERT INTO `cau_hoi` (`id`, `noi_dung`, `answer`, `hinh_anh`, `muc_do`,`loai_cau_hoi`,`id_kien_thuc`) VALUES (NULL, '$noi_dung', '$answer', '$image_name', '$muc_do','$lch',1)";
 			$do=mysqli_query($conn,$sql);
 		?>
 			<script type="text/javascript">
 				confirm("Bạn đã thêm thành công");
 			</script>
 		<?php	
 		}
 	}
  ?>
<div class="container">
 	<div class="brand">
 		<div class="header-brand"><p>Thêm câu hỏi</p></div>
 		<div class="content-brand">
				<table border="1">
					<form enctype="multipart/form-data" action="" method="post">
					<div class="form-group">
						<label>Nội dung câu hỏi</label>
						<input type="text" name="noi_dung" value="<?php if(isset($_POST['noi_dung'])) echo $_POST['noi_dung']; ?>">
						<span><?php if(isset($err['noi_dung'])) echo $err['noi_dung']; ?></span>
					</div>
					<div class="form-group">
						<br>
						<label>Các lựa chọn (đối với câu trả lời đúng tick vào ô bên cạnh)</label>
						<div class="form-group2">
							<?php 

								for ($i=0; $i <$dem; $i++) { 
							?>
								Lựa chọn <?php echo $i+1; ?>
								<input type="text" name="lc[]" value="<?php if(isset($_POST['lc'][$i])) echo $_POST['lc'][$i]; ?>">
								<input type="checkbox" name="cb[]" value="<?php echo $i; ?>" <?php if(isset($_POST['cb'])&&in_array($i, $x)) echo "checked"; ?>>
								<br>
								<span><?php if(isset($err[$i])) echo $err[$i];?></span>
								<br>
							<?php
								}
							 ?>
							 <input type="text" name="dem" hidden="" value="<?php echo $dem; ?>">  
							 <input type="submit" name="them_lua_chon" value="Thêm lựa chọn">
							 <input type="submit" name="xoa_lua_chon" value="Xóa bớt lựa chọn">
						</div>
					</div>
					<div class="form-group">
						<br>
						<label>Hình ảnh</label><br>
						<input type="file" name="image">
						<span><?php
						if(isset($err['err_image_type'])) echo $err['err_image_type']; ?></span>
					</div>
					<div class="form-group">
						<br>
						<label>Mức độ</label>
						<select name="chon" id="">
							<option value="md"></option>
							<option value="gt1" <?php if(isset($_POST['chon']) && $chon=="gt1") echo "selected"; ?>>Dễ</option>
							<option value="gt2" <?php if(isset($_POST['chon']) && $chon=="gt2") echo "selected"; ?>>trung bình</option>
							<option value="gt3" <?php if(isset($_POST['chon']) && $chon=="gt3") echo "selected"; ?>>khó</option>
						</select>
						<br>
						<span><?php if(isset($err['chon'])) echo $err['chon']; ?></span>
					</div>
					<div class="form-group">
						<br>
						<label>Loại câu hỏi</label>
						<select name="chon_lch" id="">
							<option value="md"></option>
							<option value="gt1" <?php if(isset($_POST['chon_lch']) && $chon_lch=="gt1") echo "selected"; ?>>Một đáp án</option>
							<option value="gt2" <?php if(isset($_POST['chon_lch']) && $chon_lch=="gt2") echo "selected"; ?>>Nhiều đáp án</option>
							<option value="gt3" <?php if(isset($_POST['chon_lch']) && $chon_lch=="gt3") echo "selected"; ?>>Điền</option>
						</select>
						<br>
						<span><?php if(isset($err['chon_lch'])) echo $err['chon_lch']; ?></span>
					</div>
					<div class="footer-form">
						<span class="footer-form2">
							 <?php 
							 	if(isset($err['errcauhoi'])){
							 		echo $err['errcauhoi'];
							 	}
							  ?>
						</span>
						<br>
						<input type="submit" name="submit" value="Gửi đi" class="btn-submit"><button id="btnReset"><a href="">Reset</a></button><br>
						<span><?php if(isset($err['succes'])) echo $err['succes'];
						if(isset($kq) && $kq!=""){
							echo $kq;
						} ?></span>
					</div>
				</form>
				</table>
 		</div>
 	</div>
 </div>