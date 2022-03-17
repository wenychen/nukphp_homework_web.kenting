
<!DOCTYPE HTML>

<html>
	<head>
		<title>墾丁三日遊報名結果</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="NUKIM_php_homework">
    	<meta name="author" content="weny">
    	<link rel="icon" href="/img/logo.jpg" type="image/x-icon"/>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Nav -->
						<?php require_once("all_head.php"); ?>
						<h1 id="logo">報名成功</h2>
					</div>
				</section>



				<section id="features">
					<div class="container">
						<div class="row aln-center">
							<div class="col-6 col-8-medium col-12-small">

								<!-- Feature -->
										<header>
										<p><b style="text-align: center;color: #02C874;"><h2>報名資料</h2></b>						
									</header>
										<?php
											$uname = $_POST['uname'];
											$utel = $_POST['utel'];
											$uemail = $_POST['uemail'];
											$ubir = $_POST['ubir'];
											$uid = $_POST['uid'];
											$usex = $_POST['usex'];
											$food = $_POST['food'];
											//$foods=implode(",",$food);
											$foodsize = count($food);
											$utrip = $_POST['utrip'];
											$usize = $_POST['usize'];
											$unumber = $_POST['unumber'];
											$comment = $_POST['comment'];
											$comment = strip_tags($comment);
											$comment = nl2br($comment);
										?>

										<table style="border: 1px solid #00; border-collapse: collapse;border:8px #FFD382 groove; width: 100%;">
											<tr>
												<td style="text-align: left;">姓名:</td>
												<td style="text-align: left;"><?php echo $uname; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;">電話:</td>
												<td  style="text-align: left;"><?php echo $utel; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;">E-mail:</td>
												<td style="text-align: left;"><?php echo $uemail; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;">生日:</td>
												<td style="text-align: left;"><?php echo $ubir; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;">身份證字號:</td>
												<td style="text-align: left;"><?php echo $uid; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;">性別:</td>
										 		<td style="text-align: left;">
													<?php 
													if ($usex=='1') {
											 		echo '男';} 
											 		elseif ($usex=='2') {
											 		echo '女';}
											 		if ($usex=='3') {
											 		echo '不明';}
											 		?>
										 		</td>
											</tr>
											<tr>
												<td style="text-align: left;">飲食:</td>
												<td style="text-align: left;">
													<?php 
													//echo '飲食:'.$foods;
													for ($i=0; $i <$foodsize ; $i++){ 
														if ($i==0) {
															echo $food[$i];
														}else {
															echo ','.$food[$i];
														}
													}
													?>
												</td>
											</tr>
											<tr style="text-align: left;">
												<td>參加行程	</td>
												<td>
													<?php
													echo $utrip; 
													?>
												</td>
											</tr>
											<tr style="text-align: left;">
												<td>T-shirt尺寸:</td>
												<td>
													<?php
													echo $usize; 
													?>
												</td>
											</tr>
											<tr style="text-align: left;">
												<td>參加人數:</td>
												<td>
													<?php
													echo $usize; 
													?>
												</td>
											</tr>
											<tr>
												<td style="text-align: left;">建議:</td>
												<td style="text-align: left;">								<?php 
													echo $comment;
													?>
												</td>
											</tr>
											<tr>
												<td style="text-align: left;">身分證正面照片:</td>
												<td style="text-align: left;">
													<?php 
													echo $_FILES['uphoto']['name'].'</br>';
													echo $_FILES['uphoto']['tmp_name'].'</br>';
													echo $_FILES['uphoto']['size'].'</br>';
													echo $_FILES['uphoto']['type'].'</br>';
													if(copy($_FILES['uphoto']['tmp_name'],$_FILES['uphoto']['name'])){
														echo 'success';
													}else{
													echo 'failed';
													}
													?>
												</td>
											</tr>
										</table>
									</section>
							</div>
						</div>
					</div>


			<!-- Footer -->
			<?php require_once("all_footer.php"); ?>


		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>