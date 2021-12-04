<?php 
ob_start();

include "include/template/header.php"; 
include "include/template/navbar.php";
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
} ?>

	
<?php 
 include"include/footer.php"; 
ob_end_flush();
?>	 