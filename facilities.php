<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facilities</title>
  <?php require ('inc/links.php') ?>
</head>

<style>
  .pop:hover{
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
    <h2 class="fw-bold text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident saepe quos,</br>
      blanditiis voluptates cum assumenda libero eos!</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow border-top border-4 border-dark p-4 pop">
          <div class="d-flex align-items-center mb-2">
            <img width="40px" src="images/facilities/wifi.svg" alt="" srcset="">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias voluptatem sequi in incidunt ex fugiat
            minus?</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow border-top border-4 border-dark p-4 pop">
          <div class="d-flex align-items-center mb-2">
            <img width="40px" src="images/facilities/wifi.svg" alt="" srcset="">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias voluptatem sequi in incidunt ex fugiat
            minus?</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow border-top border-4 border-dark p-4 pop">
          <div class="d-flex align-items-center mb-2">
            <img width="40px" src="images/facilities/wifi.svg" alt="" srcset="">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias voluptatem sequi in incidunt ex fugiat
            minus?</p>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <?php require ('inc/footer.php') ?>
</body>

</html>