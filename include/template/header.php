<!DOCTYPE html>
<html dir="rtl">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php 
		foreach (glob('layout/css/*.css') as $cssfile) { ?>
			<link rel="stylesheet" type="text/css" href="<?php echo $cssfile ?> ">
		 <?php } ?> 
		 <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
	</head>
	 <title><?php if(isset($title_name)){
		 	echo $title_name;
		 }else{
		 	echo " نظام إدارة المخزن  ";
		 } ?></title>
		 <link rel="icon" href="include/image/logo.gif" sizes="96x96" type="image/png">
		<body>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v7.0" nonce="V11lyRD5"></script>
			<div class="container-fluid">
		<div class="row">
			<div class="grad">
				<div class="hi1 col-md-8">
					<img src="include/image/header1.gif" class="img">
					<!-- <span class="brand title-1"><span style="color:#e99b3b"><u> توفيرات </u></span>  للترحيل  </span> -->
				</div>
				<!-- <div class="hi2 col-md-4">
					<a class="login btn btn-success" href="login.php">  تسجيل الدخول </a>
					<a class="register btn btn-primary" href="register.php">التسجيل</a>
				</div> -->
			</div>
		</div>
	</div>