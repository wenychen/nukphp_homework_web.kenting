
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
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<header>
										<p><b style="text-align: center;color: #02C874">報名資料</b>						
									</header>
										<?php
											$uname = $_POST['uname'];
											$utel = $_POST['utel'];
											$uemail = $_POST['uemail'];
											$ubir = $_POST['ubir'];
											$uid = $_POST['uid'];
										?>

										<table>
											<tr>
												<td style="text-align: left;"><?php echo '姓名:'.$uname; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;"><?php echo '電話:'.$utel; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;"><?php echo 'E-mail:'.$uemail; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;"><?php echo '生日:'.$ubir; ?></td>
											</tr>
											<tr>
												<td style="text-align: left;"><?php echo '身份證字號:'.$uid; ?></td>
											</tr>

										</table>
									</section>
							</div>
						</div>
					</div>
				</section>

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