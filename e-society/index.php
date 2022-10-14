<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-socity | Apartment & Housing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Login style -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script  src="assets/js/crt.js"></script>
    <script  src="assets/js/validation.js"></script>
    <!-- validations style -->
    <style>
        #error 
        {
            color: red !important;
        }
    </style>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">bombaysociety@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91 1234567890
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">E-Society</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <form method="POST">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#Features">Features</a></li>
          <li><a class="nav-link scrollto " href="#Sell-List">Sell List</a></li>
          <li><a class="nav-link scrollto " href="#Rent-List">Rent List</a></li>
          <li><a class="nav-link scrollto " href="#login">LogIn</a></li>

      </form>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- login form modal -->
  <section id="login" class="login">
    <div class="modal fade" id="log" role="dialog"></div>
    <div class="modal-dialog">
      <div class="modal-content p-5">
          <h2 class="text-success mt-2">Login Form <i class="bi bi-person"></i> <button class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button> </h2>
          <hr class="border border-2 border-danger">
      <form class="row g-3 needs-validation" novalidate>
                    
        <div class="col-md-8">
        
          <input type="email" class="form-control" id="validationCustom03" required placeholder="Enter Email *">
          <div class="invalid-feedback">
            Please provide a email Address.
          </div>
        </div>
        <div class="col-md-8">
            <input type="password" class="form-control" id="validationCustom03" required  placeholder="Enter Password *">
        <div class="invalid-feedback">
          Please provide a Password.
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Login</button>
      <b><a href="register.html">Forget Password</a></b>
      </div>
      <div class="form-group mt-2">
        <b>Don't have an account ? <a href="register.html">Register here</a></b>
      </div>
  </form>
  </div>
    </div>
  </section>
<!-- End login form modal -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to Bombay-society</h1>
      <h2>Bombay society E-society</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  
  
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about1.jpg" height="500" width="500" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <center><h2>About Bombay-Society</h2>
            <h2>==================</h2></center>
            <p class="fst-italic">
              E-Society is web-based software for managing various apartment communities, villas and housing societies smartly.
            </p>
            <p>
              This software enables to track income and expenses, communicate updates over mobile, email etc.
              e-Society is one such software which is helpful for an apartment management. With this solution
              we are trying to automate all the manual work regarding the housing societies.
            </p>
            <p>
              Also, trying to ensure accounts are maintained correctly and provides transparency within the 
              society members. We will be managing the application, thus the society doesn't have to pay large 
              amount and doesn't have to maintain / manage the server / application.
            </p> 
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client4.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="Features" class="services">
      <div class="container">

        <div class="section-title">
          <span>Features</span>
          <h2>Features</h2>
          <p>List of all the features available in e-Society software</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Accounting</a></h4>
              <p>Automate the Monthly Maintenance calculations. 
                Update payment details in the system by themselves. 
                We have digitized the book of accounts.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Society Management</a></h4>
              <p>Changes related to Society profile.
                  Change the Monthly Maintenance, Late Fees and other details of society.
                  Assign the Admin rights to other committee members.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Vendor Management</a></h4>
              <p>Add new vendors.
                  Edit existing vendors.
                  Enable or disable the existing vendors.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Reporting</a></h4>
              <p>Customized reporting related to Accounts, Users and Vendors with Monthly, Yearly, Quarterly, etc.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Visitor Management</a></h4>
              <p>Manage the visitor information.
                  Reporting option to generate the customized reports.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Notice Board</a></h4>
              <p>Online Notice Board.
                  Alert system for all new messages.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Sell List Section ======= -->
    <section id="Sell-List" class="portfolio">
    <div class="container">
      <div class="section-title">
        <span>Sell List</span>
        <h2>Sell List</h2>
      <p>List of all the Sell List available in Bombay-Society software</p>
    </div>
      <div class="container">

        <div class="row d-flex align-items-center">

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client1.png" >
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client4.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
              
    </section><!-- End Sell List  Section -->

    <!-- ======= Rent-List Section ======= -->
    <section id="Rent-List" class="portfolio">
    <div class="container">
      <div class="section-title">
        <span>Rent-List</span>
        <h2>Rent-Listt</h2>
      <p>List of all the Rent List available in Bombay-Society software</p>
    </div>
      <div class="container">

        <div class="row d-flex align-items-center">

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client1.png" >
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <img src="assets/img/clients/client4.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
              
    </section><!-- End Rent-List Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Near Alfa Tower Bombay Society , New Mumbai - 400001</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>bombaysociety@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+19 1234567890</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241412.4989051504!2d72.89307280437271!3d19.01662385768106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9f0b81f13ad%3A0x3c12f7681185f869!2sNavi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1665768345027!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Bombay Society</h3>
              <p>
              Near Alfa Tower Bombay Society,<br>
              New Mumbai - 40000 India<br><br>
                <strong>Phone:</strong> +19 1234567890<br>
                <strong>Email:</strong> bobmaysociety@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sell List</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rent List</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>