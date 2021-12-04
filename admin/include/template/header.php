<!DOCTYPE html>
<html dir="rtl">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php 
		foreach (glob('layout/css/*.css') as $cssfile) { ?>
			<link rel="stylesheet" type="text/css" href="<?php echo $cssfile ?> ">
		 <?php } ?> 
	</head>
	 <title><?php if(isset($title_name)){
		 	echo $title_name;
		 }else{
		 	echo " نظامإدارة المخازن  ";
		 } ?></title>
		 <link rel="icon" href="include/image/logo.jpg" sizes="96x96" type="image/png">
		<body>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v7.0" nonce="V11lyRD5"></script>
			<div class="container-fluid">
		<div class="row">
			<div class="grad">
				<div class="hi1 col-md-8">
					<img src="include/image/logo.jpg" class="img">
					<span class="brand"> محلات <span style="color:#ff880e">أيمن عفيفي </span>  للإسبيرات  </span>
				</div>
				<!-- <div class="hi2 col-md-4">
					<a class="login btn btn-success" href="login.php">  تسجيل الدخول </a>
					<a class="register btn btn-primary" href="register.php">التسجيل</a>
				</div> -->
			</div>
		</div>
	</div>