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
            <a class="nav-link" href="dashbord.php" target="_blank"><i class="fas fa-home"></i> الرئيسية <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book"></i>
            إضافة 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="controltype.php"><i class="fa fa-check"></i> إضافة صنف جديد</a>
                <a class="dropdown-item" href="controltype.php?do=add-company-to-spear"><i class="fa fa-check"></i> إضافة شركات الاسبير</a>
              <a class="dropdown-item" href="controltype.php?do=add-more-information"><i class="fa fa-address-book"></i> اضافة معلومات الاسبير </a>
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-file"></i>
             المخازن
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="storages.php?do=all-information-of-storege"><i class="fa fa-file"></i> التقرير العام للخزن </a>
              <a class="dropdown-item" href="storages.php"><i class="fa fa-file"></i> اضافة فرع </a>
              <a class="dropdown-item" href="storages.php?do=add-spear-to-branch"><i class="fa fa-file"></i> تغذية االفروع </a>
              <a class="dropdown-item" href="storages.php?do=report-branch"><i class="fa fa-file"></i> تقارير الفروع </a>
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-file"></i>
             المبيعات
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="selling.php"><i class="fa fa-file"></i> بيع إسبير </a>
               <a class="dropdown-item" href="dashbord.php?do=return-back-selling"><i class="fa fa-file"></i> استرداد مبيعات </a>
               <a class="dropdown-item" href="report_det.php"><i class="fa fa-file"></i> تقرير المبيعات </a>
             <a class="dropdown-item" href="print_report.php?do=Type-deyoon"><i class="fa fa-file"></i> البيع اآجل </a>
              <a class="dropdown-item" href="print_report.php?do=pay-report-day"><i class="fa fa-file"></i> التقرير اليومي </a>
              <a class="dropdown-item" href="print_report.php?do=report-month"><i class="fa fa-file"></i> تقرير الشهري </a>
              <a class="dropdown-item" href="print_report.php?do=find-pay-date"><i class="fa fa-file"></i> مراجعة التقرير </a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book"></i>
            المستخدمين 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
             
              
              <!--  <a class="dropdown-item" href="std-admin.php?do=degree"> تصحيح الامتحانات </a> -->
               <a class="dropdown-item" href="add-user.php"><i class="fa fa-check"></i> اضافة مستخدم</a>
              <a class="dropdown-item" href="add-user.php?do=access-to-system"><i class="fa fa-address-book"></i> صلاحيات المستخدمين </a>
      
          </li>
        </ul>
        <ul class="navbar-nav user_nav">
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class='fas fa-user'></i>
             
            </a>
            <div class="dropdown-menu pd" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="#"> اعدادات المستخدم </a>
              <a class="dropdown-item" href="logout.php"><!-- <i class='fas fa-sign-out-alt'></i> --> <i class="fa fa-power-off"></i>تسجيل خروج  </a>
          </li>
        </ul>
    </nav>
</div>