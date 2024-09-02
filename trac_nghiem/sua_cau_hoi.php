<?php 
	include("KetNoi.php");
?>
<head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
</head>
<style>
	.container{
			overflow: auto;
			width: 100%;
			height: 100%;
			border: 1px solid;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: 'Montserrat', sans-serif;
		}
		.brand{
			width: 100%;
			height: 100%;
		}
		.header-brand{
			width: 100%;
			height: 5%;
			color: #414c5d;
			text-indent: 20px;
			font-weight: bold;
			font-size: 25px;
			background: #f5f7f7;
		}
		.content-brand{
			width: 97%;
			height: 90%;
			background: #fff;
			padding: 19px;
		}
		.form-group{
			color: #8f8f8c;
			font-size: 19px;
			width: 100%;
			height: 10%;
			display: contents;
		}
		.form-group input[type="text"],input[type="file"]{
			width: 100%;
			height: 40px;
			margin-bottom: 20px;
			margin-top: 10px;
		}
		.footer-form{
			text-align: center;
			margin: 0 auto;
			width: 200px;
			height: 20%;		
		}
		.footer-form span{
			font-size: 18px;
			color: #a578d5;
			margin-top: 10px;
		}

		.form-group span{
			color: red;
		}
		.form-group2 input[type="text"]{
			width: 80%;
		}
		.form-group2 input[type="checkbox"]{
			width: 20px;
			height: 20px;
		}

		.btn-select {
            appearance: button;
            background-color: #1652F0;
            border: 1px solid #1652F0;
            border-radius: 2px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            font-family: Graphik, -apple-system, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
            font-size: 14px;
            line-height: 1.15;
            overflow: visible;
            padding: 12px 16px;
            position: relative;
            text-align: center;
            text-transform: none;
            transition: all 80ms ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: fit-content;
        }

        .btn-select:disabled {
            opacity: .5;
        }

        .btn-select:focus {
            outline: 0;
        }

        .btn-select:hover {
            background-color: #0A46E4;
            border-color: #0A46E4;
        }

        .btn-select:active {
            background-color: #0039D7;
            border-color: #0039D7;
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
		#btnReset{
			margin-left: 10px;
			padding: 7px 10px;
		}
		#btnReset a{
			width: 150px;
			height: 50px;
			color: #000;
			text-decoration: none;
		}
		.form-group2 span{
			margin-left: 100px;
		}
		.footer-form>span:first-child{
			color: red;
		}
</style>
<?php 
	$abc=["A","B","C","D","E","F","G","H","I","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
	$id=$_GET['id'];
	$sql="SELECT * FROM `cau_hoi` WHERE id='$id'";
	$do=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($do);
	//lay các lựa chọn
	$arr=explode("::", $row['answer']);
 	$err=[];
 	$answer=$kq="";
 	$dem=count($arr);
 	$muc_do="";
 	$chon="";
 	$chon_lch="";
 	$x="";
 	$lch="";

 	//hien thi
 	$sql="SELECT * FROM `cau_hoi` WHERE id='$id'";
	$do=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($do);
 	if(isset($_POST['them_lua_chon'])){
 		if(isset($_POST['cb'])){
 			$x=$_POST['cb'];
 		}
 		$dem=(int)$_POST['dem']+1;
 	}
 	if(isset($_POST['xoa_lua_chon'])){
 		$dem=(int)$_POST['dem']-1;
 		if($dem<0){
 			$dem=0;
 		}
 		if(isset($_POST['cb'])){
 			$x=$_POST['cb'];
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
 		if(isset($_POST['cb']) && count($_POST['cb'])>1){
 			if($_POST['chon_lch']=="một đáp án" || $_POST['chon_lch']=="điền"){
 				$err['err1']="Vui lòng chọn đúng loại câu hỏi phù hợp";
 			}
 		}
 		for ($i=0; $i < $dem; $i++) { 
 			if($_POST['lc'][$i]!=""){
 				if(isset($_POST['cb'])&&in_array($i, $x)){
 					$answer=$answer.$abc[$i].".".$_POST['lc'][$i].";1::";
 				}
 				else{
 					$answer=$answer.$abc[$i].".".$_POST['lc'][$i].";0::";
 				}
 			}
 			else{
 				$err[$i]="Vui lòng điền thông tin";
 			}
 		}
 		if(isset($_POST['noi_dung']) &&$_POST['noi_dung']!=""){
 			$noi_dung=$_POST['noi_dung'];
 		}
 		else{
 			$err['noi_dung']="Vui lòng nhập nội dung câu hỏi";
 		}
 		if(isset($_POST['chon'])){
 			$chon=$_POST['chon'];
 			if($chon=="dễ"){
 				$muc_do="dễ";
 			}
 			elseif ($chon=="trung bình") {
 				$muc_do="trung bình";
 			}
 			elseif($chon=="khó"){
 				$muc_do="khó";
 			}
 		}	
 		else{
 			$err['chon']="Vui lòng chọn mức độ câu hỏi";
 		}

 		if(isset($_POST['chon_lch'])){
 			$chon_lch=$_POST['chon_lch'];
 			if($chon_lch=="một đáp án"){
 				$lch="một đáp án";
 			}
 			elseif ($chon_lch=="nhiều đáp án") {
 				$lch="nhiều đáp án";
 			}
 			elseif($chon_lch=="điền"){
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
 			if($image_name!=""){
 				$image_name="images/".$image_name;
 			}
 			$answer=rtrim($answer,"::");
 			$sql="UPDATE `cau_hoi` SET `noi_dung` = '$noi_dung', `answer` = '$answer', `hinh_anh` = '$image_name', `muc_do` = '$muc_do', `loai_cau_hoi` = '$lch' WHERE `cau_hoi`.`id` = $id";
 			$do=mysqli_query($conn,$sql);
 			header("location:admin_home.php?page=danhsachcauhoi");
 		?>
 		<?php	
 		}
 	}
  ?>
<div class="container">
 	<div class="brand">
 		<div class="header-brand"><p>Sửa câu hỏi</p></div>
 		<div class="content-brand">
				<table border="1">
					<form enctype="multipart/form-data" action="" method="post">
					<div class="form-group">
						<label>Nội dung câu hỏi</label>
						<input type="text" name="noi_dung" value="<?php if(isset($_POST['noi_dung'])){ echo $_POST['noi_dung'];}
						else{
							if(!isset($_POST['submit'])){
							echo $row['noi_dung'];
						}
						} ?>">
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
								<input type="text" name="lc[]" value="<?php if(isset($_POST['lc'][$i]) ){ echo $_POST['lc'][$i];}
								else{
									if($i<count($arr)){
										echo substr($arr[$i], 2,(strlen($arr[$i])-4));
									}
								}
							 	?>">
								<input type="checkbox" name="cb[]" value="<?php echo $i; ?>" <?php if(isset($_POST['cb'])&&in_array($i, $x)){ echo "checked";}
									else{
										if($i<count($arr)){
											if(!isset($_POST['submit']) &&substr($arr[$i], strlen($arr[$i])-1,1)==1){
										echo "checked";
										}
										}
									} ?>>
								<br>
								<span><?php if(isset($err[$i])) echo $err[$i];?></span>
								<br>
							<?php
								}
							 ?>
							<input type="text" name="dem" hidden="" value="<?php echo $dem; ?>">  
							<input type="submit" name="them_lua_chon" value="Thêm lựa chọn" class="btn-select">
							<input type="submit" name="xoa_lua_chon" value="Xóa bớt lựa chọn" class="btn-select">
						</div>
					</div>
					<div class="form-group">
						<br>
						<label>Hình ảnh</label>
						<input type="file" name="image">
						<span><?php
						if(isset($err['err_image_type'])) echo $err['err_image_type']; ?></span>
					</div>
					<div class="form-group">
						<br>
						<label>Mức độ</label>
						<select name="chon" id="">
							<option value="dễ" <?php if(isset($_POST['chon']) && $chon=="dễ"){
								echo "selected";
							}
							else{
								if(!isset($_POST['submit']) &&$row['muc_do']=="dễ"){
									echo "selected";
								}
							} ?>>dễ</option>
							<option value="trung bình" <?php if(isset($_POST['chon']) && $chon=="trung bình"){
								echo "selected";
							}
							else{
								if(!isset($_POST['submit'])&&$row['muc_do']=="trung bình"){
									echo "selected";
								}
							} ?>>trung bình</option>
							<option value="khó" <?php if(isset($_POST['chon']) && $chon=="khó"){
								echo "selected";
							}
							else{
								if(!isset($_POST['submit'])&&$row['muc_do']=="khó"){
									echo "selected";
								}
							} ?>>khó</option>
						</select>
						<br>
						<span><?php if(isset($err['chon'])) echo $err['chon']; ?></span>
					</div>
					<div class="form-group">
						<br>
						<label>Loại câu hỏi</label>
						<select name="chon_lch" id="">
							<option value="một đáp án" <?php if(isset($_POST['chon_lch']) && $lch=="một đáp án"){
								echo "selected";
							}
							else{
								if(!isset($_POST['submit']) && $row['loai_cau_hoi']=="một đáp án"){echo "selected";}
							} ?>>một đáp án</option>
							<option value="nhiều đáp án" <?php if(isset($_POST['chon_lch']) && $lch=="nhiều đáp án"){
								echo "selected";
							}
							else{
								if(!isset($_POST['submit']) && $row['loai_cau_hoi']=="nhiều đáp án"){echo "selected";}
							} ?>>nhiều đáp án</option>
							<option value="điền" <?php if(isset($_POST['chon_lch']) && $lch=="điền"){
								echo "selected";
							}
							else{
								if(!isset($_POST['submit']) && $row['loai_cau_hoi']=="điền"){echo "selected";}
							} ?>>điền</option>
						</select>
						<br>
						<span><?php if(isset($err['chon_lch'])) echo $err['chon_lch'];
						if(isset($err['err1'])) echo $err['err1']; ?></span>
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
						<input type="submit" name="submit" value="Gửi đi" class="btn-submit">
						<button id="btnReset"><a href="">Reset</a></button><br>
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