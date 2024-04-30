<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require ('inc/links.php') ?>
</head>

<style>
  .availibility-form {
    position: relative;
    z-index: 1;
    margin-top: -50px;
  }

  @media screen and (max-width: 576px) {
    .availibility-form {
      margin-top: 25px;
      padding: 0 30px;
    }
  }
</style>

<body class="bg-light">

  <!-- Navbar -->
  <?php require ('inc/header.php') ?>

  <!-- Carousel -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_15372.png?raw=true"
            class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_40905.png?raw=true"
            class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_55677.png?raw=true"
            class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_62045.png?raw=true"
            class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_93127.png?raw=true"
            class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_99736.png?raw=true"
            class="w-100 d-block" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- check availibility form -->
  <div class="container availibility-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availibility</h5>
        <form action="">
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label fw-500">Check In</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label fw-500">Check Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label fw-500">Adult</label>
              <select class="form-select shadow-none" aria-label="Default">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label fw-500">Children</label>
              <select class="form-select shadow-none" aria-label="Default">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mt-2 mb-lg-3">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹200 Per Night</h6>

            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathrooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">WIFI</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
            </div>
            <div class="rating mb-3">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex gap-5 mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹200 Per Night</h6>

            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathrooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">WIFI</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
            </div>
            <div class="rating mb-3">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex gap-5 mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹200 Per Night</h6>

            <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathrooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">WIFI</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Telivision</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
            </div>
            <div class="rating mb-3">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
                <i class="ri-star-s-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex gap-5 mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>

  <!-- Our Facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" alt="" srcset="" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" alt="" srcset="" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" alt="" srcset="" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" alt="" srcset="" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" alt="" srcset="" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
      </div>
    </div>
  </div>

  <!-- Reach Us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 h-100 rounded" height=""
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14159812.183505828!2d58.362965860576395!3d29.951098678585485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1712966502235!5m2!1sen!2s"
          loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel:+923243407525" class="d-inline-block text-dark text-decoration-none"><i
              class="ri-phone-line"></i> +92-3243407525</a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Email Us</h5>
          <a href="mail:humaidshaykh@gmail.com" class="d-inline-block text-dark text-decoration-none"><i
              class="ri-mail-send-line"></i> humaidshaykh@gmail.com</a>
        </div>
        <div class="bg-white p-4 rounded">
          <h5>Social Media</h5>
          <a href="facebook.com" class="d-inline-block text-dark text-decoration-none"><i
              class="ri-facebook-circle-line"></i></a>
          <a href="instagram.com" class="d-inline-block text-dark text-decoration-none"><i
              class="ri-instagram-line"></i></a>
          <a href="pinterest.com" class="d-inline-block text-dark text-decoration-none"><i
              class="ri-pinterest-line"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php require ('inc/footer.php') ?>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

</html>