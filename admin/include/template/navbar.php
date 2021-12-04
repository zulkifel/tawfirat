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
            <a class="nav-link" href="natija.php"><i class="fa fa-file"></i>  النتيجة </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="all-news.php"><i class="fa fa-newspaper"></i>  اخر الاخبار  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chat/chat.php"><i class="fa fa-phone"></i>  التواصل معنا  </a>
          </li>
        </ul>

        <form class="form-inline nav-form my-2 my-lg-0">
          <input class="form-control sre mr-sm-2" type="search" placeholder="اكتب كلمة للبحث" aria-label="Search">
          <button class="btn btn-light search-btn my-2 my-sm-0" type="submit">بحث</button>

        </form>
       
    </nav>
</div>