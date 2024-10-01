<?php 

    if($_REQUEST != "POST")

        //  header("Location: https://www.goflare.com/growth-consultant");

    if(isset($_POST['your_name']) && isset($_POST['your_email']) && isset($_POST['subject']) && isset($_POST['message']) ){

        $name = $_POST['your_name'];

        $email = $_POST['your_email'];

        $subject = $_POST['subject'];

        $message = $_POST['message'];

        // $company = $_POST['company_size'];

        $header =  [

            'From: ' . $email,

            'Reply-To: ' . $email,    

        ];  // header

        $header = implode("\r\n", $header);

        $message = "Name: $name\nEmail: $email\nPhone: $subject \nCompany Size: $message";

        $to = 'nouman.haider4881@gmail.com';

        $subject = 'Contact Form Submission';

        $mail_sent = mail($to, $subject, $message, $header);
        dd(123);
        if($mail_sent)

            {
             
            }

        else

            echo 'Mail not sent';

    } 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Nouman Portfolio |Thankyou</title>
    <!-- SEO Meta Tags-->
  
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #737491;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #766df4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
 
  <body>
  
 
      <!-- Page content-->
      <div class="container d-flex flex-column justify-content-center pt-5 mt-n6" style="flex: 1 0 auto;">
        <div class="pt-7 pb-5">
          <div class="text-center mb-2 pb-4">
            <h1 class="mb-grid-gutter"><img class="d-inline-block" src="img/empower.png" alt="thankyou" style="width: 650px;">
            <h2>THANKYOU!</h2>
            <p class="pb-2">Thanks for contacting us.We will be intouch with you shortly</p><a class="btn btn-translucent-primary me-3" href="index.php">Go to homepage</a>
          </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer py-4">
      <div class="container d-md-flex align-items-center justify-content-between py-2 text-center text-md-end">
        <ul class="list-inline fs-sm mb-3 mb-md-0 order-md-2">
          <li class="list-inline-item my-1"><a class="nav-link-style" href=""></a></li>
         
        </ul>
        <p class="fs-sm mb-0 me-3 order-md-1"><span class="text-muted me-1">© All rights reserved. Made by</span><a class="nav-link-style fw-normal" href="#" target="_blank" rel="noopener">Nouman Haider</a></p>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>
