<?php 
ob_start();
include "include/template/header.php"; 
include "include/template/navbar.php";
include "include/template/conn.php";
if(isset($_SESSION['userID'])){
	$to = "abdulrahmmanspear@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: zukamal123@gamil.com" . "\r\n" .
"CC: zukamal123@gamil.com";

mail($to,$subject,$txt,$headers);
	$stmt=$con->prepare("SELECT * FROM users where user_id=? ");
	$stmt->execute(array($_SESSION['userID']));
	$row=$stmt->fetch();
	if($row['level']==1){
		header("location:dashbord.php");
		exit();
	}else{
		header("location:useraddstudan.php");
		exit();
	}
}else{
if($_SERVER['REQUEST_METHOD']=="POST"){
	
/*	$user=$_POST['user'];
	$hashpass=sha1($_POST['pass']);
	$stmt=$con->prepare("SELECT * FROM users where u_name=? AND user_pass=?");
	$stmt->execute(array($user,$hashpass));
	$row=$stmt->fetch();
	$count=$stmt->rowCount();
	if($count>0){
	$_SESSION['username']=$row['user_name'];
	$_SESSION['userID']=$row['user_id'];
if($row['level']==1){
	
	header("location:dashbord.php");
	exit();
	}	
	
}*/
   // the message
mail("abdulrahmmanspear@gmail.com","Answer","Hope You Vote My Answer Up","From: mzukamal123@gamil.com");
    echo " تم ارسال الرسالة ";
}
?>
	<form style="font-family: 'Cairo', sans-serif;" class="login" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
		<h3 style="text-align: center;color:#69727a; font-family: 'Almarai', sans-serif;">صفحة الدخول</h3>
		<input type="text" class="form-control" autofocus="on" autocomplete="off" name="user" placeholder="ادخل رقم الهاتف" >
		<input type="password" name="pass" class="form-control" placeholder="أدخل كلمة المرور">
		<input style="background-color: #e99b3b" type="submit" class="btn btn-success btn-block btn-co" value=" تسجيل دخول ">
	</form> 	
	<div class="row">
		<div class="col-md-5 text-left  mb-3">
		 <span style="font-size: 20px;font-weight: bold;"><a style="color: green" href=""> هل لديك حساب </a></span>	
		</div>
		<div class="col-md-4 text-right  mb-3">
		 <span style="font-size: 20px;font-weight: bold;"><a style="color: green" href=""> إنشاء حساب جديد </a></span>	
		</div>
	</div>

<?php 
	 include"include/footer.php"; 
}
ob_end_flush();
?>	 