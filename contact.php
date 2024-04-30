<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <?php require ('inc/links.php') ?>
</head>

<style>
</style>

<body class="bg-light">

  <!-- Navbar -->
  <?php require ('inc/header.php') ?>

  <!-- Banner -->
  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident saepe quos,</br>
      blanditiis voluptates cum assumenda libero eos!</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="260"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14159812.183505828!2d58.362965860576395!3d29.951098678585485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1712966502235!5m2!1sen!2s"
            loading="lazy"></iframe>
          <h5>Address</h5>
          <a class="d-inline-block text-decoration-none text-dark mb-3" href="https://maps.app.goo.gl/UW57WaGVqT1iPEmY7"
            target="_blank">
            <i class="ri-map-2-line"></i> XYZ, PC Hotel
          </a>
          <h5>Call Us</h5>
          <a href="tel:+923243407525" class="d-inline-block text-dark text-decoration-none mb-3"><i
              class="ri-phone-line"></i> +92-3243407525</a>
          <h5>Email Us</h5>
          <a href="mail:humaidshaykh@gmail.com" class="d-inline-block text-dark text-decoration-none mb-3"><i
              class="ri-mail-send-line"></i> humaidshaykh@gmail.com</a>
          <h5>Social Media</h5>
          <a href="facebook.com" class="d-inline-block text-dark text-decoration-none"><i
              class="ri-facebook-circle-line"></i></a>
          <a href="instagram.com" class="d-inline-block text-dark text-decoration-none"><i
              class="ri-instagram-line"></i></a>
          <a href="pinterest.com" class="d-inline-block text-dark text-decoration-none"><i
              class="ri-pinterest-line"></i></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label fw-800">Name</label>
              <input type="text" class="form-control shadow-none" required>
            </div>
            <div class="mt-3">
              <label class="form-label fw-800">Email</label>
              <input type="email" class="form-control shadow-none" required>
            </div>
            <div class="mt-3">
              <label class="form-label fw-800">Subject</label>
              <input type="text" class="form-control shadow-none" required>
            </div>
            <div class="mt-3">
              <label class="form-label fw-800">Message</label>
              <textarea class="form-control shadow-none" name="" rows="5"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <?php require ('inc/footer.php') ?>
</body>

</html>