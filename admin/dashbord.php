<?php
ob_start();
session_start(); 
include "include/template/navbar2.php";
include "include/template/conn.php";
include "include/template/header.php"; 
if(isset($_SESSION['userID'])){
$do = isset($_GET['do']) ? $_GET['do'] : 'manage';
 if($do == 'manage'){  ?>
<div class="container ">
        <h2 class=" text-center titleh title-1"> إحصائيات النظام </h2>
        <div class="row">
          <div class="col-md-3 ksetting">
                <a href="setting.php?do=all-information" class="thelink">
                  <span class="btn  btn-lg sub33">
                    <i style="font-size: 88px;" class="fa fa-users"></i>
                 إحصائيات النظام 
                  </span>
                </a>
          </div>
          <!--  -->
          <div class="col-md-3 ksetting">
                <a href="setting.php?do=all-information" class="thelink">
                  <span class="btn  btn-lg sub33">
                    <i style="font-size: 88px;" class="fa fa-users"></i>
                 إحصائيات النظام 
                  </span>
                </a>
          </div>
          <!--  -->
          <div class="col-md-3 ksetting">
                <a href="setting.php?do=all-information" class="thelink">
                  <span class="btn  btn-lg sub33">
                    <i style="font-size: 88px;" class="fa fa-users"></i>
                 إحصائيات النظام 
                  </span>
                </a>
          </div>
          <!--  -->
          <div class="col-md-3 ksetting">
                <a href="setting.php?do=all-information" class="thelink">
                  <span class="btn  btn-lg sub33">
                    <i style="font-size: 88px;" class="fa fa-users"></i>
                 إحصائيات النظام 
                  </span>
                </a>
          </div>
          <!--  -->
          <div class="col-md-3 ksetting">
                <a href="setting.php?do=all-information" class="thelink">
                  <span class="btn  btn-lg sub33">
                    <i style="font-size: 88px;" class="fa fa-users"></i>
                 إحصائيات النظام 
                  </span>
                </a>
          </div>
          <!--  -->
          <div class="col-md-3 ksetting">
                <a href="setting.php?do=all-information" class="thelink">
                  <span class="btn  btn-lg sub33">
                    <i style="font-size: 88px;" class="fa fa-users"></i>
                 إحصائيات النظام 
                  </span>
                </a>
          </div>
          <!--  -->
          <div class="col-md-3 ksetting">
                <a href="setting.php?do=all-information" class="thelink">
                  <span class="btn  btn-lg sub33">
                    <i style="font-size: 88px;" class="fa fa-users"></i>
                 إحصائيات النظام 
                  </span>
                </a>
          </div>
          <!--  -->
          <div class="col-md-3 ksetting">
                <a href="setting.php?do=all-information" class="thelink">
                  <span class="btn  btn-lg sub33">
                    <i style="font-size: 88px;" class="fa fa-users"></i>
                 إحصائيات النظام 
                  </span>
                </a>
          </div>
          <!--  -->
          
        </div>
        
<?php }elseif($do=="") { ?>
<div class="container">

<?php } ?>
<?php
include"include/footer.php"; 
}else{
    header("location:index.php");
    exit();
}
?>	
	