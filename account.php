<?php 
ob_start();
include "include/template/header.php"; 
include "include/template/navbar.php";
include "include/template/conn.php";

$do = isset($_GET['do']) ? $_GET['do'] : 'manage';
 if($do == 'manage'){ 
if($_SERVER['REQUEST_METHOD']=="POST"){
  $cust_name=$_POST['cust_name'];
  $country=$_POST['country'];
  $phone=$_POST['phone'];
  $cus_email=$_POST['cus_email'];
 $error =  array();
    if(empty($cust_name)) {
         $error[] = "<div class='alert alert-danger  text-right' style= 'font-size: 16px;font-weight: bold;'> تحذير!!!لا يمكن تركد حقل الاسم خاليا  </div>";
    }elseif(empty($country)) {
         $error[] = "<div class='alert alert-danger  text-right' style= 'font-size: 16px;font-weight: bold;'> تحذير!!! الرجاء كتابة الدولة  </div>";
    }elseif(empty($phone)) {
         $error[] = "<div class='alert alert-danger  text-right' style= 'font-size: 16px;font-weight: bold;'> تحذير!!! الرجاء كتابة رقم هاتف نشط  </div>";
    }elseif(empty($cus_email)) {
         $error[] = "<div class='alert alert-danger  text-right' style= 'font-size: 16px;font-weight: bold;'> تحذير!!! لايمكن ترك حلق البريد الالكتروني  </div>";
    }if(empty($error)){
       $stmt2 = $con->prepare("INSERT INTO customer(cust_name,cust_conutry,cust_phone,cust_email) values(?,?,?,?)");
       $stmt2->execute(array($cust_name,$country,$phone,$cus_email));
        $id =$con->lastinsertId();
        if($stmt2->rowCount())
        {
           header("location:account.php?do=continue-add-account&id=".$id);
           exit();
        }else{
          echo "<div class='alert alert-danger  text-right' style= 'font-size: 16px;font-weight: bold;'> هناك خطأ حدث  </div>";
        }

       
    }

} ?>
<div class="container " style="font-family: 'Cairo', sans-serif;" >
        <h2 class=" text-center titleh title-1" style="font-family: 'Segoe UI Semibold'"> إنشاء حساب جديد </h2>
                <?php if(isset($error))foreach ($error as $er) {echo $er;}?>
        <form class=" float-right from1" novalidate action="<?php $_SERVER['PHP_SELF'] ?>" method="post" dir="rtl"><!-- needs-validation -->  
 
  <h4 style="color: #e99b3b" class="text-right title-1"> المعلومات الاساسية : </h4>
<div class="form-row formc">
 <div class="col-md-6  mb-3">
      <label for="validationCustom04"> الاسم </label>
      <input type="text" autofocus="ON" class="form-control" name="cust_name" id="validationCustom02" required=required placeholder="أكتب إسمك" value="<?php if(isset($_POST['cust_name'])){
                echo $_POST['cust_name'];
              } ?>">
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
 <div class="col-md-6 mb-3">
      <label for="validationCustom04"> الدولة </label>
       <input type="text" placeholder="أكتب اسم الدولة" class="form-control" name="country" id="validationCustom02" required=required value="<?php if(isset($_POST['country'])){
                echo $_POST['country'];
              } ?>">
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
  </div>
  <br>
  <h4 style="color: #e99b3b" class="text-right title-1"> معلومات الاتصال : </h4>
<div class="form-row formc">
 <div class="col-md-6  mb-3">
      <label for="validationCustom04"> رقم الهاتف</label>
      <input type="number" class="form-control" name="phone" id="validationCustom02" required=required placeholder=" 000 000 0000" value="<?php if(isset($_POST['phone'])){
                echo $_POST['phone'];
              } ?>">
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
 <div class="col-md-6 mb-3">
      <label for="validationCustom04"> البريد الالكتروني </label>
       <input type="text" placeholder="myemail.@gamil.com" class="form-control" name="cus_email" id="validationCustom02" required=required value="<?php if(isset($_POST['cus_email'])){
                echo $_POST['cus_email'];
              } ?>">
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
  </div>
   <div class="form-group">
   <button class="btn btn-info btn-lg update update1" type="submit"> متابعـــــــــــــــــــــة  </button>
  </div>
 <?php }elseif ($do=="continue-add-account") { ?>
  <div class="container " style="font-family: 'Cairo', sans-serif;" >
  <?php 
  $stmt=$con->prepare("SELECT * FROM customer WHERE cust_id=?");
  $stmt->execute([$_GET['id']]);
  $info_cust=$stmt->fetch(); 

   ?>
    <h3 class=" text-center titleh title-1" style="color: #69727a;font-family: 'Segoe UI Semibold'"> تم إرسال رسالة الى بريدك الالكتروني <span>(<?php echo $info_cust['cust_email']; ?>)</span> <h3>
    <h4 class="text-center title-1" style="color: #69727a;font-family: 'Segoe UI Semibold'"> من خانة تحقق منها <span style="font-size: 14px"><a href=""> تغيير البريد </a></span>   </h4>
       <form class=" float-center from1" novalidate action="<?php $_SERVER['PHP_SELF'] ?>" method="post" dir="rtl"><!-- needs-validation -->  
       <br><br>
 <div class="form-row formc">
 <div class="col-md-4  mb-3">
      <input type="text" style="font-size: 23px;"  autofocus="ON" max="6" class="form-control text-center" autocomplete="off" name="code" id="validationCustom02" required=required placeholder="0 0 0 0" value="<?php if(isset($_POST['cust_name'])){
                echo $_POST['cust_name'];
              } ?>">
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
      <div class="form-group">
   <button class="btn btn-info btn-lg update update1" type="submit"> تأكيد </button>
  </div>
  </div>
 <?php }elseif($do=="new-account"){ ?>

<?php } ?>
<?php
include"include/footer.php"; 
ob_end_flush();
?>	 