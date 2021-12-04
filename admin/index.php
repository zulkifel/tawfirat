<?php 
session_start();
include "include/template/header.php"; 
//include "include/template/navbar2.php";
include "include/template/conn.php";
if(isset($_SESSION['userID'])){
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
	
	$user=$_POST['user'];
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
	}
else{
	echo "<div class='alert alert-danger  text-center' style= 'font-size: 16px;font-weight: bold;'> تحذير !!! هناك خطأ في معلومات المستخدم </div>";
}
}
?>
	<form class="login" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
		<h3 style="text-align: center;color:#69727a; font-family: 'Almarai', sans-serif;">صفحة الدخول</h3>
		<input type="text" class="form-control" autofocus="on" autocomplete="off" name="user" placeholder="ادخل إسم المستخدم" >
		<input type="password" name="pass" class="form-control" placeholder="أدخل كلمة المرور">
		<input type="submit" class="btn btn-success btn-block btn-co" value=" تسجيل دخول ">
	</form> 	

<?php 
	 include"include/footer.php"; 
}
ob_end_flush();
?>	 