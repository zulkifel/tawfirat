<div class="container " style="font-family: 'Cairo', sans-serif;" >
        <h2 class=" text-center titleh title-1"> إنشاء حساب جديد </h2>
                <?php if(isset($error))foreach ($error as $er) {echo $er;}?>
	 			<form class=" float-right from1" novalidate action="<?php $_SERVER['PHP_SELF'] ?>" method="post" dir="rtl"><!-- needs-validation -->  
	 <h4 style="color: #e99b3b" class="text-right"><u> معلومات الموقع :</u></h4>
  <div class="form-row formc">
 

 <div class="col-md-4 mb-3">
      <label for="validationCustom04"> الدولة </label>
      <select class="custom-select" name="spquitly" id="validationCustom04" required=required>
        <option  value=" "> السودان </option> 
        <option  value=" "> المملكة العربية </option> 
      </select>

      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
 <div class="col-md-4 mb-3">
      <label for="validationCustom04"> الولاية  </label>
    <select class="custom-select" name="state" id="validationCustom04" required=required>
        <option  value=" "> الخرطوم </option> 
        <option  value=" ">  القضارف </option> 
      </select>

      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
 <div class="col-md-4 mb-3">
      <label for="validationCustom04"> الحي/القرية </label>
     <input type="text" class="form-control" name="sell_prise" id="validationCustom02" required=required value="<?php if(isset($_POST['sell_prise'])){
                echo $_POST['sell_prise'];
              } ?>">
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
  </div>
     <br><h4 style="color: #e99b3b" class="text-right "><u> معلومات الاتصال :</u></h4>
  <div class="form-row formc"> 
      <div class="col-md-4 mb-3">
      <label for="validationCustom04"> رقم الهاتف نشط </label>
     <input type="text" class="form-control" name="sell_prise" id="validationCustom02" required=required value="<?php if(isset($_POST['sell_prise'])){
                echo $_POST['sell_prise'];
              } ?>">
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>
      <div class="col-md-4 mb-3">
      <label for="validationCustom02"> البريد الالكتروني </label>
      <input type="text" class="form-control" name="spprise" id="validationCustom02" required=required value="<?php if(isset($_POST['spprise'])){
                echo $_POST['spprise'];
              } ?>">
      <div class="valid-feedback">
       جيد!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom04"> الكمية </label>
     <input type="text" class="form-control" name="spcount" id="validationCustom02" required=required value="<?php if(isset($_POST['spcount'])){
                echo $_POST['spcount'];
              } ?>">
      <div class="invalid-feedback">
       الرجاء اختيار النوع
      </div>
    </div>

  </div>
  <div class="form-group">
   <button class="btn btn-info btn-lg update" type="submit"> متعابعــــــة  </button>
  </div>
</form>
</div>