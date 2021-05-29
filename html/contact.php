<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="ebPaage Technologies,  Build your dream online website with us. Create a professional platform without any complicated struggle. We are delivering success with every solution. Contact us for Web Designing and Development, SEO or (Search Engine Optimisation), and Applications Development. and Support Indian Developers from Bareilly, Uttar Pradesh , India!!">
   
  <meta name="description" content="WebPaage | contact us for Web Designing and Development, SEO or (Search Engine Optimisation), and Applications Development. and Support Indian Developers from Bareilly, Uttar Pradesh , India!.">

  <meta name="copyright" content="WebPaage , https://www.WebPaage.in/">

  <title>WebPaage Contact Us | Web Designing And Development | SEO (Search engine optimization) | Application Development Services in Bareilly </title>

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-floating nav-dark"  >
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="../assets/img/lw.png" alt="" width="80" height="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="about.html">About</a>
        </li>
               <li class="nav-item">
          <a class="nav-link" href="updates.html">Services</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <a href="contact.php"><button class="btn btn-dark rounded-pill">Contact Us</button></a>
      </div>
    </div>
  </div>
</nav>

<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Get In Touch</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 my-3 wow fadeInUp">
          <div class="card-page">
            <div class="row row-beam-md">
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-location-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Location</p>
                <p class="mb-1">503, Civil Lines, Bareilly,</p>
                <p class="mb-0">UP - 243001</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-call-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Contact</p>
                <p class="mb-1">+91 96347 80846</p>
                <p class="mb-0">+91 82798 75697</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-mail-open-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Email</p>
                <p class="mb-1">webpaagetech@gmail.com</p>
              
              </div>
            </div>
          </div>
        </div>
         
        <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->

        <div class="col-md-6 col-lg-5 my-3 wow fadeInUp">
          <div class="card-page">
            <h3 class="fw-normal">Get in Touch</h3>
            
            <form id="fcf-form-id" class="fcf-form-class" method="post">
              <div class="fcf-form-group">
                <label for="Name" class="fcf-label">Fullname</label>
                <div class="fcf-input-group">
                  <input type="text" id="Name" name="name" class="fcf-form-control" required>
                </div>
              </div>

              <div class="fcf-form-group">
                <label for="Email" class="fcf-label">Email</label>
                <div class="fcf-input-group">
                  <input type="email" id="Email" name="email" class="fcf-form-control" required>
                </div>
              </div>

              <div class="fcf-form-group">
                <label for="Phone" class="fcf-label">Phone No.</label>
                <div class="fcf-input-group">
                  <input type="phone" id="Phone" name="phone" class="fcf-form-control" required>
                </div>
              </div>

              <div class="fcf-form-group">
                <label for="Message" class="fcf-label">Message</label>
                <div class="fcf-input-group">
                  <textarea id="Message" name="message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                </div>
              </div>

              <div class="fcf-form-group">
                <button type="submit" name="submit"id="fcf-button" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          
          </div>
        </div>
        <div class=" wow fadeInUp " >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3511.247549760591!2d79.40727481556776!3d28.35136450350032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a001a31a3c19bd%3A0x94776ea26dbe6822!2sWebPaage%20Technologies!5e0!3m2!1sen!2sin!4v1604209051168!5m2!1sen!2sin" width="380" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>

</div> <!-- .bg-light -->

<div class="page-footer-section bg-dark fg-white">
  <div class="container">
    <div class="row mb-5 py-3">
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Services</h5>
        <ul class="menu-link">
          <li><a href="updates.html" class="">Web Designing And Devlopment</a></li>
          <li><a href="updates.html" class="">Androide App Devlopment</a></li>
          <li><a href="updates.html" class="">Software Devlopment</a></li>
          <li><a href="updates.html" class="">LOGO AND Graphics Designing</a></li>
          <li><a href="updates.html" class="">SEO & Digital Marketing</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Company</h5>
        <ul class="menu-link">
          <li><a href="about.html" class="">About</a></li>
          <li><a href="about.html" class="">Team</a></li>
          <li><a href="contact.html" class="">Careers</a></li>
          <li><a href="contact.html" class="">HIRING!</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Contact</h5>
        <ul class="menu-link">
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="https://www.google.com/maps/place/WebPaage+Technologies/@28.3513598,79.4094635,15z/data=!4m5!3m4!1s0x0:0x94776ea26dbe6822!8m2!3d28.3513598!4d79.4094635">503, Civil Lines, Bareilly - 243001 </a></li>
          <li><a href="mailto:webpaagetech@gmail.com?Subject=Plan%20Info!" class="">webpaagtech@gmail.com</a></li>
          <li><a href="https://wa.me/919634780846" class=""><span class="mai-logo-whatsapp"></span>&nbsp;+91 9634780846</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Subscribe</h5>
        <p>Get some offers, news, or updates</p>
       

        <!-- Social Media Button -->
        <div class="mt-4">
          <a href="https://www.facebook.com/webpaage" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook"></span></a>
          <a href="https://wa.me/919634780846" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-whatsapp"></span></a>
          <a href="https://www.instagram.com/webpaage/" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-instagram"></span></a>
          <a href="https://twitter.com/webpaage" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-twitter"></span></a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 py-2">
        <img src="../assets/img/logo.png" alt="" width="100">
        <!-- Please don't remove or modify the credits below -->
        <p class="d-inline-block ml-2">Copyright &copy; <a href="index.php" class="fg-white fw-medium">Webpaage</a>. All rights reserved</p>
      </div>
      <div class="col-12 col-md-6 py-2">
        <ul class="nav justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f99c2527f0a8e57c2d80199/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<!--End of Tawk.to Script-->

<!--Scroll nav color change-->
<script>
 $(window).scroll(function(){
 $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
 });
</script>

</body>


</html>



