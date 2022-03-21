<!DOCTYPE HTML>

<html>
	<head>
		<title>墾丁三日遊報名表</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="NUKIM_php_homework">
    	<meta name="author" content="weny">
    	<link rel="icon" href="/php_homework/web.kenting/images/logo.jpg" type="image/x-icon"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'></link>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
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
									<form action="rinfo.php" method="post" style="width: 80%;" enctype="multipart/form-data">
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
													<td align="left"><input type="radio" name="usex" value="1" required="required">男<input type="radio" name="usex" value="2">女<input type="radio" name="usex" value="3">不方便透露</td>
												</tr>
												<tr>
													<td>飲食</td>
													<td align="left">
														<label><input type="checkbox" name="food[]" value="素食"><span>素食</span></label>
														<label><input type="checkbox" name="food[]" value="葷食" checked ><span>葷食</span></label>
														<label><input type="checkbox" name="food[]" value="穆斯林"><span>穆斯林</span></label>
														<label><input type="checkbox" name="food[]" value="生菜"><span>生菜</span></label>
														<label><input type="checkbox" name="food[]" value="海鮮"><span>海鮮</span></label>								
													</td>
												</tr>
												<tr>
													<td>參加行程</td>
													<td>
														<select name="utrip" style="width: 100%; height: 100%" >
															<option value="未選擇">請選擇</option>
															<option value="行程A">行程A&nbsp&nbsp&nbsp特價：6,999元</b>&nbsp&nbsp&nbsp<s>&nbsp<b>原價：8,999元</option>
    														<option value="行程B">行程B&nbsp&nbsp&nbsp特價：4,999元</b>&nbsp&nbsp&nbsp<s>&nbsp<b>原價：6,999元</option> 
														</select>
													</td>
												</tr>
												<tr>
													<td>T-shirt尺寸</td>
													<td>
														<select name="usize" style="width: 100%; height: 100%" >
															<option value="未選擇">請選擇</option>
															<option value="S">S</option>
    														<option value="M">M</option>
    														<option value="L">L</option>
    														<option value="XL">XL</option>
    														<option value="2L">2L</option>
    														<option value="3L">3L</option>
    														<option value="5L">5L</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>參加人數</td>
													<td><input type="number" name="unumber" required="required"></td>
												</tr>
												<tr>
													<td>建議</td>
													<td><textarea style="width: 100%; resize:none;" name="comment">
													</textarea>
													</td>
												</tr>
												<tr>
													<td rowspan="2">生活照</td>
													<td>
														<label class="btn btn-primary" style="width: 100%">
																<input name="uphoto" id="photo" style="display:none;" type="file" onchange="selectImgFile(this.files)" />
																<i class="fa fa-picture-o"></i> 上傳圖片
														</label>
													</td>
												</tr>
												<tr>
													<td>
														<span id="file_name"></span>		
														    <script>
    
														      var inputFile = document.getElementById('photo');

														      inputFile.addEventListener('change', function(e) {

														        var fileData = e.target.files[0]; // 檔案資訊
														        var fileName = fileData.name; // 檔案名稱
														        // var fileType = fileData.type; // 檔案類型
														        // var fileSize = Math.floor(fileData.size * 0.001); // 檔案大小轉成kb
														        // var fileTime = fileData.lastModifiedDate;

														        // console.log(fileData); // 用開發人員工具可看到資料

														        document.getElementById('file_name').innerText = fileName;
														        // document.getElementById('file_type').innerText = fileType;
														        // document.getElementById('file_size').innerText = fileSize + 'kb';
														        // document.getElementById('file_time').innerText = fileTime;
														        // document.getElementById('file_thumbnail').src = URL.createObjectURL(fileData);

														      }, false);

														    </script>
													</td>
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
