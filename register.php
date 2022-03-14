<!DOCTYPE HTML>

<html>
	<head>
		<title>墾丁三日遊報名表</title>
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
						<h1 id="logo">報名表</h2>
					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">						
						<div class="row aln-center">
								<!-- Feature -->
									<form action="rinfo.php" method="post" style="width: 80%;">
											<table>
												<tr>
													<td>姓名</td>
													<td><input type="text" name="uname"placeholder="請輸入您的名字" required="required"></td>
												</tr>
												<tr>
													<td>電話</td>
													<td><input type="text" name="utel" minlength="10" maxlength="10" oninput="value=value.replace(/[^\d]/g,'')" pattern="[0-9]{10}"placeholder="請輸入您的聯絡電話" required="required"></td>
												</tr>
												<tr>
													<td>E-mail</td>
													<td><input type="email" name="uemail"placeholder="例如：abc@gmail.com" required="required"></td>
												</tr>
												<tr>
													<td>生日</td>
													<td><input type="date" name="ubir" required="required"></td>
												</tr>
												<tr>
													<td>身份證字號</td>
													<td><input type="text" name="uid" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" pattern="[a-zA-Z0-9]{10}" placeholder="請輸入您的身份證字號" required="required"></td>
												</tr>
												<tr>
													<td>性別</td>
													<td align="left"><input type="radio" name="usex" value="1">男<input type="radio" name="usex" value="2">女</td>
												</tr>
												<tr>
													<td>飲食</td>
													<td align="left">
														<label><input type="checkbox" name="food" value="1" ><span>素食</span></label>
														<label><input type="checkbox" name="food" value="2"><span>葷食</span></label>
														<label><input type="checkbox" name="food" value="3"><span>穆斯林</span></label>
														<label><input type="checkbox" name="food" value="4"><span>生菜</span></label>
														<label><input type="checkbox" name="food" value="5"><span>海鮮</span></label>								
													</td>
												</tr>
												<tr>
													<td>參加行程</td>
													<td>
														<select name="size" style="width: 100%; height: 100%" >
															<option value="0">請選擇</option>
															<option value="1">行程A&nbsp&nbsp&nbsp特價：6,999元</b>&nbsp&nbsp&nbsp<s>&nbsp<b>原價：8,999元</option>
    														<option value="2">行程B&nbsp&nbsp&nbsp特價：4,999元</b>&nbsp&nbsp&nbsp<s>&nbsp<b>原價：6,999元</option>    														
														</select>
													</td>
												</tr>
												<tr>
													<td>T-shirt尺寸</td>
													<td>
														<select name="size" style="width: 100%; height: 100%" >
															<option value="0">請選擇</option>
															<option value="1">S</option>
    														<option value="2">M</option>
    														<option value="3">L</option>
    														<option value="4">XL</option>
    														<option value="5">2L</option>
    														<option value="6">3L</option>
    														<option value="7">5L</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>參加人數</td>
													<td><input type="number" name="unumber" required="required"></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
												</tr>
											</table>

											<div class="col-12">
													<input type="submit" name="" value="報名參加">
													<input type="reset" name="" value="清除資料">
											</div>
										</form>										
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