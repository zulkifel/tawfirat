<?php
 ?>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg stylec">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg width="30" height="30">
          <path d="M0,5 30,5" stroke="#fff" stroke-width="3"/>
          <path d="M0,14 30,14" stroke="#fff" stroke-width="3"/>
          <path d="M0,23 30,23" stroke="#fff" stroke-width="3"/>
      </svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-right">
          <li class="nav-item">
            <a class="nav-link" href="index.php" target="_blank"><i class="fas fa-home"></i> الرئيسية <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book"></i>
            إضافة 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="civil.php?do=add-new-info"><i class="fa fa-check"></i> إضافة صنف جديد</a>
              <a class="dropdown-item" href="std-admin.php?do=information_student"><i class="fa fa-address-book"></i> التعديل في صنف </a>
              <a class="dropdown-item" href="std-admin.php?do=information_student"><i class="fa fa-address-book"></i> اضافة معلومات الاسبير </a>
             
            
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-file"></i>
             المخازن
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
               
              <a class="dropdown-item" href="nateja.php"><i class="fa fa-file"></i> التقرير العام للخزن </a>
              <a class="dropdown-item" href="std-admin.php?do=exam-repot"><i class="fa fa-file"></i> تعديل في مدرسة  </a>
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-file"></i>
             المبيعات
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
               
              <a class="dropdown-item" href="nateja.php"><i class="fa fa-file"></i> التقرير اليومي </a>
              <a class="dropdown-item" href="std-admin.php?do=exam-repot"><i class="fa fa-file"></i> تقرير الشهري </a>
              <a class="dropdown-item" href="std-admin.php?do=exam-repot"><i class="fa fa-file"></i> تقرير السنوي </a>
              <a class="dropdown-item" href="std-admin.php?do=exam-repot"><i class="fa fa-file"></i> مراجعة التقرير </a>
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book"></i>
            المستخدمين 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
             
              
              <!--  <a class="dropdown-item" href="std-admin.php?do=degree"> تصحيح الامتحانات </a> -->
               <a class="dropdown-item" href="civil.php?do=add-new-info"><i class="fa fa-check"></i> اضافة مستخدم</a>
              <a class="dropdown-item" href="std-admin.php?do=information_student"><i class="fa fa-address-book"></i> التعديل في المستخدم </a>
             
            
          </li>
        </ul>
       
        <ul class="navbar-nav user_nav">
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class='fas fa-user'></i>
              <?php echo $_SESSION['username']; ?>
            </a>
            <div class="dropdown-menu pd" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="#"> اعدادات المستخدم </a>
              <a class="dropdown-item" href="logout.php"><!-- <i class='fas fa-sign-out-alt'></i> --> <i class="fa fa-power-off"></i>تسجيل خروج  </a>
          </li>
        </ul>
    </nav>
</div>