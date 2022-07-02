<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon website</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- css links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/assets/css/popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/assets/css/style.css') }}">
</head>
<body>
    
    <!-- header section starts  -->
@include('layouts.header')
    <!-- header section ends  -->

    <!-- main body starts  -->
    @yield('content')
    <footer class="py-5">
      <div class="container-custom py-5">
          <div class="row">
              <div class="col-md-3 d-flex justify-content-center flex-column">
                  <div class="footer_image">
                    <img src="assets/image/logo.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, et!</p>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="footer_box">
                      <h4>contact us</h4>
                      <ul>
                          <li><a href="#">About</a></li>
                          <li><a href="#">amazon</a></li>
                          <li><a href="#">traffic</a></li>
                          <li><a href="#">google</a></li>
                          <li><a href="#">microsoft</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="footer_box">
                      <h4>matha us</h4>
                      <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">amazon</a></li>
                        <li><a href="#">traffic</a></li>
                        <li><a href="#">google</a></li>
                        <li><a href="#">microsoft</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="footer_box">
                      <h4>about us</h4>
                      <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">amazon</a></li>
                        <li><a href="#">traffic</a></li>
                        <li><a href="#">google</a></li>
                        <li><a href="#">microsoft</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center flex-column">
                  <div class="footer_contact">
                    <h4>Contact Us</h4>
                    <div class="footer_icon">
                        <a href="https://www.facebook.com/delwarit/"> <i class="fa-brands fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fa-brands fa-twitter"></i> </a>
                        <a href="#"> <i class="fa-brands fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fa-brands fa-pinterest-p"></i> </a>
                        <a href="#"> <i class="fa-brands fa-whatsapp"></i> </a>
                    </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="footer_bottom pt-5">
        <div class="container-custom">
          <div class="row">
            <div class="col-md-6">
              <div class="footer_bottom_left">
                &copf; copy right 
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer_bottom_right text-end">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Condition</a>
                <a href="#">FAQ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </footer>
    
    
    




    
    <!-- main body ends -->
    

    <script src="{{ asset('public/front/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('public/front/assets/js/popup.js') }}"></script>
    <script src="{{ asset('public/front/assets/js/app.js') }}"></script>
</body>
</html>