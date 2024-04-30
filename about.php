<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require ('inc/links.php') ?>
</head>

<style>
  .box:hover {
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all .3s;
  }
</style>

<body class="bg-light">

  <!-- Navbar -->
  <?php require ('inc/header.php') ?>

  <!-- Banner -->
  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident saepe quos,</br>
      blanditiis voluptates cum assumenda libero eos!</p>
  </div>

  <!-- Section -->
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam ut, nemo quisquam consequatur rem deleniti
          perferendis asperiores voluptate vel, molestiae vitae id animi nobis ipsam totam, inventore dignissimos
          aliquid quis?</p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img class="img-fluid w-100" src="images/about/about.jpg" alt="" srcset="">
      </div>
    </div>
  </div>

  <!-- Section -->
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img class="img-fluid" width="70px" src="images/about/hotel.svg" alt="" srcset="">
          <h4 class="mt-3">100+ Rooms</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img class="img-fluid" width="70px" src="images/about/customers.svg" alt="" srcset="">
          <h4 class="mt-3">200+ Customers</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img class="img-fluid" width="70px" src="images/about/rating.svg" alt="" srcset="">
          <h4 class="mt-3">150+ Reviews</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img class="img-fluid" width="70px" src="images/about/staff.svg" alt="" srcset="">
          <h4 class="mt-3">200+ Staffs</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Management -->
  <h3 class="my-5 fw-bold text-center">MANAGEMENT TEAM</h3>
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img class="w-100" src="images/about/about.jpg" alt="" srcset="">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img class="w-100" src="images/about/about.jpg" alt="" srcset="">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img class="w-100" src="images/about/about.jpg" alt="" srcset="">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img class="w-100" src="images/about/about.jpg" alt="" srcset="">
          <h5 class="mt-2">Random Name</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Footer -->
  <?php require ('inc/footer.php') ?>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>

</html>