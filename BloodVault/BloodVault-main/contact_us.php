<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bank</title>
    <link rel="icon" href="images/giphy.gif">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    if(isset($_POST["send"])){
      $name=$_POST['fullname'];
    $number=$_POST['contactno'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
    $sql= "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$number}','{$email}','{$message}')";
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
      echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
    }?>



    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"> BloodVault <i class="icon-heart" aria-hidden="true"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>

                    <li class="nav-item"><a href="contact_us.php" class="nav-link">Contact</a></li>

                    <li class="nav-item"><a href="donate_blood.php" class="nav-link"><span>Donate Blood</span></a></li>
                    <li class="nav-item"><a href="need_blood.php" class="nav-link"><span>Need Blood</span></a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link"><span>Login</span></a></li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container bg-light">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                <p><span>Address:</span> VIT, Vellore, India.</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 9999 9999 99</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">donate@nonprofit.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">bloodbank.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form name="sentMessage"  method="post">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" name="fullname" required>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control" id="phone" name="contactno"  required >
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <button type="submit" name="send"  class="btn btn-primary">Send Message</button>
                    </form>

                </div>


        </div>
    </section>

   <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">BloodVault<i class="icon-heart" aria-hidden="true"></i></h2>
                        <p>By putting people in need of blood in direct contact with blood donors, we are able to solve the problem of unexpected blood shortages.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-5">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="index.html" class="py-2 d-block">Home</a></li>
                            <li><a href="about.html" class="py-2 d-block">About</a></li>

                            <li><a href="contact_us.php" class="py-2 d-block">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">VIT, Vellore, India.</a></li>
                            <li><a href="#" class="py-2 d-block">+ 9999 9999 99</a></li>
                            <li><a href="#" class="py-2 d-block">donate@nonprofit.com</a></li>
                            <li><a href="#" class="py-2 d-block">bloodbank.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="https://twitter.com/bloodaid"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/help/contact/579287765983263"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/indiablooddonation/?hl=en"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">


                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particle.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
	