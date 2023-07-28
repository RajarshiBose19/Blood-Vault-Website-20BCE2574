<html>

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"> BloodVault<i class="icon-heart" aria-hidden="true"></i></a>
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
                    
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Need Blood</h1>
                </div>
            </div>
        </div>
    </div>
 
 

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


  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">

  <div class="row">
      <div class="col-lg-6">
          <h1 class="mt-4 mb-3">Need Blood</h1>

        </div>
  </div>
  <form name="needblood" action="" method="post">
  <div class="row">
  <div class="col-lg-4 mb-4">
  <div class="font-italic">Blood Group<span style="color:red">*</span></div>
  <div><select name="blood" class="form-control" required>
    <option value=""selected disabled>Select</option>
    <?php
      include 'conn.php';
      $sql= "select * from blood";
      $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    while($row=mysqli_fetch_assoc($result)){
     ?>
     <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
    <?php } ?>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Reason, why do you need blood?<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="search" class="btn btn-primary" value="Search" style="cursor:pointer"></div>
</div>

</div><div class="row">
<?php if(isset($_POST['search'])){

  $bg=$_POST['blood'];
  $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 5";
  $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    if(mysqli_num_rows($result)>0)   {
    while($row = mysqli_fetch_assoc($result)) {
      ?>

      <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
      <div class="card" style="width:300px">
          <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
          <div class="card-body">
            <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
            <p class="card-text">
              <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
              <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
              <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
              <b>Age : </b> <?php echo $row['donor_age']; ?><br>
              <b>Address : </b> <?php echo $row['donor_address']; ?><br>
            </p>

          </div>
        </div>
  </div>

  <?php
    }
  }
    else
    {

        echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';

    }
} ?>
</div>
</div>
</div>

</div>

</div>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">BloodVault <i class="icon-heart" aria-hidden="true"></i></h2>
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
   

</body>

</html>
