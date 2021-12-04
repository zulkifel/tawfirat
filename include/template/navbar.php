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
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> الرئيسية <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="natija.php"><i class="fa fa-file"></i> الخدمات </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="all-news.php"><i class="fa fa-newspaper"></i>  المراكز </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chat/chat.php"><i class="fa fa-phone"></i> تواصل معانا  </a>
          </li>
        </ul>
          <ul class="navbar-nav user_nav">
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class='fas fa-user'></i>
             العملاء
            </a>
            <div class="dropdown-menu pd" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="login.php"><i class="fa fa-lock-open"></i> تسجيل دخول </a>
              <a class="dropdown-item" href="account.php"><!-- <i class='fas fa-sign-out-alt'></i> --> <i class="fa fa-plus"></i> إنشاء حساب  </a>
          </li>
        </ul>

       
    </nav>
</div>