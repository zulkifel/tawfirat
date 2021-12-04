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
        <h2 class=" text-center titleh title-1"> مستخدم جديد  </h2>
        <?php if(isset($error))foreach ($error as $er) {echo $er;}?>
	 			<form class=" float-right" novalidate action="<?php $_SERVER['PHP_SELF'] ?>" method="post"><!-- needs-validation -->
  <div class="form-row formc">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01"> اسم المستخدم  </label>
      <input type="text" autocomplete="off" autofocus="ON" class="form-control nn" name="std_name"  id="validationCustom01" required=required placeholder=" ادخل الاسم رباعي  " value="<?php if(isset($_POST['std_name'])){
                echo $_POST['std_name'];
              } ?>">
      <div class="valid-feedback">
        جيد!
      </div>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom02">الاسم البرمجي  </label>
      <input type="tell" autocomplete="off" class="form-control nn" name="std_no" id="validationCustom02" required=required value="<?php if(isset($_POST['std_no'])){
                echo $_POST['std_no'];
              } ?>">
      <div class="valid-feedback">
       جيد!
      </div>
    </div>
      <div class="col-md-4 mb-3">
      <label for="validationCustom02"> كلمة المرور  </label>
      <input type="text" class="form-control nn" name="nati" id="validationCustom02" required=required value="<?php if(isset($_POST['nati'])){
                echo $_POST['nati'];
              } ?>">
      <div class="valid-feedback">
       جيد!
      </div>
    </div>
  </div>
  <div class="form-row formc">
    <div class="col-md-4 mb-3">
      <label for="validationCustom04"> حالة المستخدم </label>
      <select class="custom-select" name="batch" id="validationCustom04" required=required>
        <option selected disabled value=" ">إختر ...</option> 
        <option  value="0">مستخدم</option> 
         <option  value="1">مدير</option> 
      </select>
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
        <div class="col-md-4 mb-3">
      <label for="validationCustom04"> مكان الدكان </label>
      <select class="custom-select" name="sp_id" id="validationCustom04" required=required>
        <option selected disabled value=" ">إختر ...</option> 
        <option value="<?php echo $r['sp_id']; ?>"><?php echo $r['sp_name']; ?> </option>
      </select>
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom04"> الجنس </label>
      <select class="custom-select" name="gender" id="validationCustom04" required=required>
        <option selected disabled value=" ">إختر ...</option> 
        <option value="1"> ذكر </option>
        <option value="2">انثى  </option>
      </select>
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
  </div>
  <div class="form-group">
   <button class="btn btn-primary btn-lg update" type="submit"> إضـــافــــة  </button>
  </div>
</form>
<?php } ?>


<?php
include"include/footer.php"; 
}else{
    header("location:index.php");
    exit();
}
?>	
	