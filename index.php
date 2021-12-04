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
    <div class="container slider">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="layout/images/1.jpg" class="d-block w-100" alt="Car no 1" />
          </div>
          <div class="carousel-item">
            <img src="layout/images/2.jpg" class="d-block w-100" alt="Car no 2" />
          </div>
          <div class="carousel-item">
            <img src="layout/images/3.jpg" class="d-block w-100" alt="Car no 3" />
          </div>
          <div class="carousel-item">
            <img src="layout/images/4.jpg" class="d-block w-100" alt="Car no 4" />
          </div>
          <div class="carousel-item">
            <img src="layout/images/5.jpg" class="d-block w-100" alt="Car no 5" />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

     <!-- Start our serveses -->
    <h2 class="text-center mb-3">Our Servises</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="layout/images/6.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="layout/images/7.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="layout/images/8.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">المزيد</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End our serveses -->
	
<?php 
 include"include/footer.php"; 
ob_end_flush();
?>	 