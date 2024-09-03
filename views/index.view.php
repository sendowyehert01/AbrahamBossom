<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?> 

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="carousel-image-container">
              <img src="style/images/IMG_1402.PNG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption d-none d-md-block">
              <p>AN ACTIVE BURIAL PLACE FOR EVERYONE</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="style/images/IMG_1403.PNG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption d-none d-md-block">
              <p>AN ACTIVE BURIAL PLACE FOR EVERYONE</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-image-container">
              <img src="style/images/IMG_1406.PNG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption d-none d-md-block">
              <p>AN ACTIVE BURIAL PLACE FOR EVERYONE</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="card m-3">
        <div class="main-card d-flex">
            <div class=" col-xl-4  m-3 body-img">
                <img class="card-img-left img-thumbnail " src="style/images/IMG_1402.PNG" alt="Card image cap"  >
            </div>
            <div class="card-body col-xl-8  m-3">
              <h5 class="card-title body-title ">THE ABRAHAM’S BOSOM MEMORIAL GARDEN </h5>
              <div class="line"></div>
              <p class="card-text body-text">Abraham's Bosom Cemetery, established in Silang, Cavite sometime in the 1990, has become a cornerstone for the community. Its name evokes a sense of comfort, drawing inspiration from the Biblical parable where Abraham welcomes the righteous into paradise.</p>
              <a href="#" class="btn btn-success body-button ">READ MORE <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <div class="container ">
      <div class="products-services text-center">
        <h1>PRODUCTS & SERVICES</h1>
      </div>
      <div id="owl-demo" class="owl-carousel owl-theme mb-3">

        <div class="container-sm p-3 slider-container" style="height:300px;" >
          <div class="card text-bg-dark" style="height:100%;" >
            <img src="style/images/IMG_1402.PNG" class="card-img" alt="..." style="height:100%;" >
            <div class="card-img-overlay " style="padding:20px;">
              <h5 class="card-title">Apartment-Type Lot</h5>
              <p class="card-text py-3"  >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-success slider-button">READ MORE <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="container-sm p-3 slider-container" style="height:300px;">
          <div class="card text-bg-dark" style="height:100%;">
            <img src="style/images/IMG_1402.PNG" class="card-img" alt="..." style="height:100%;">
            <div class="card-img-overlay" style="padding:20px;">
              <h5 class="card-title">Lawn Lot's</h5>
              <p class="card-text py-3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-success slider-button">READ MORE <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="container-sm p-3 slider-container" style="height:300px;">
          <div class="card text-bg-dark" style="height:100%;">
            <img src="style/images/IMG_1402.PNG" class="card-img" alt="..." style="height:100%;">
            <div class="card-img-overlay" style="padding:20px;">
              <h5 class="card-title">Family State</h5>
              <p class="card-text py-3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-success slider-button">READ MORE <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="container-sm p-3 slider-container" style="height:300px;">
          <div class="card text-bg-dark" style="height:100%;">
            <img src="style/images/IMG_1402.PNG" class="card-img" alt="..." style="height:100%;">
            <div class="card-img-overlay " style="padding:20px;">
              <h5 class="card-title">Family State</h5>
              <p class="card-text py-3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-success slider-button">READ MORE <i class="bi bi-arrow-right"></i></a> 
            </div>
          </div>
        </div>
      </div>
    </div>

<?php require 'partials/foot.php'; ?>