<?php 
session_start();
 ?>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg stylec">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg width="30" height="30">
          <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
          <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
          <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
      </svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-right">
          <li class="nav-item">
            <a class="nav-link" href="index.php"> الرئيسية <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              الادارة
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="std-admin.php?do=degree"> تصحيح الامتحانات </a>
              <a class="dropdown-item" href="std-admin.php?do=information_student"> إدارة الامتحان </a>
              <a class="dropdown-item" href="tet-admin.php?do=main-class"> النتيجة  </a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              التلاميذ
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="std-admin.php?do=main-list"> قائمة التلاميذ </a>
              <a class="dropdown-item" href="std-admin.php?do=main-class">   الحضور والغياب </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">  الاعدادات </a>
          </li>

        </ul>

        <form class="form-inline nav-form my-2 my-lg-0">
          <input class="form-control sre mr-sm-2" type="search" placeholder="اكتب كلمة للبحث" aria-label="Search">
          <button class="btn btn-light search-btn my-2 my-sm-0" type="submit">بحث</button>

        </form>
        <ul class="navbar-nav">
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['username2']; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"> اعدادات المستخدم </a>
              <a class="dropdown-item" href="tlogout.php"> تسجيل خروج  </a>
          </li>
        </ul>
    </nav>
</div>