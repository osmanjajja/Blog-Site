<?php 

session_start();
$conn = new mysqli("localhost", "root", "", "blog", "3308");
if (!isset($_SESSION['email'])) {
  echo "<script> window.open('login.php','_self') </script>" ;
} ;


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Bloger</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description" />
   

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="#" />
  </head>

  <body>
    <div class="wrapper">
      <!-- header -->
      <header>
        <!-- navigation -->
        <nav class="navbar navbar-default" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img class="img-responsive" src="img/logo.png" alt="Logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="registration.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#event">Events</a></li>
                    <li><a href="#blog">New Blogs</a></li>
                    <li><a href="#subscribe">Subscribe</a></li>
                    <li><a href="#team">Executive Team</a></li>
                  </ul>
                </li>
                <li ><a class="btn btn-primary" href="logout.php">Log Out</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </header>

      <!-- banner -->
      <div class="banner">
        <div class="container">
          <!-- heading -->
          <h2>Blogs from the filed of tech and Events Around the world</h2>
          <!-- paragraph -->
          <p>It is our belief that in order to be most efficient it requires adaptive technology and software our users can focus on their core business.</p>
        </div>
      </div>
      <!-- banner end -->

      <!-- after banner -->
      <div class="after-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <!-- after banner item -->
              <div class="ab-item">
                <!-- heading -->
                <h3>Focus on Systems</h3>
                <!-- paragraph -->
                <p>While our blogs are authentic, it's the value that's unmatched.</p>
                <br />
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <!-- after banner item -->
              <div class="ab-item">
                <!-- heading -->
                <h3>Plan of Action</h3>
                <!-- paragraph -->
                <p>While our blogs are authentic, it's the value that's unmatched.</p>
                <br />
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <!-- after banner item -->
              <div class="ab-item">
                <!-- heading -->
                <h3>Quality Compliance</h3>
                <!-- paragraph -->
                <p>While our blogs are authentic, it's the value that's unmatched.</p>
                <br />
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- after banner end-->

      <!-- events -->
      <div class="event" id="event">
        <div class="container">
          <div class="default-heading">
            <!-- heading -->
            <h2>Upcoming events</h2>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <!-- event item -->
              <div class="event-item">
                <!-- image -->
                <img class="img-responsive" src="img/event/1.jpg" alt="Events" />
                <!-- heading -->
                <h4><a href="#">Rihanna, Eminem on stage</a></h4>
                <!-- sub text -->
                <span class="sub-text">Blog By Usman</span>
                <!-- paragraph -->
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <!-- event item -->
              <div class="event-item">
                <!-- image -->
                <img class="img-responsive" src="img/event/2.jpg" alt="Events" />
                <!-- heading -->
                <h4><a href="#">Dr. Dre on stage live</a></h4>
                <!-- sub text -->
                <span class="sub-text">Blog By Usman</span>
                <!-- paragraph -->
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <!-- event item -->
              <div class="event-item">
                <!-- image -->
                <img class="img-responsive" src="img/event/3.jpg" alt="Events" />
                <!-- heading -->
                <h4><a href="#">Macaroons live Party</a></h4>
                <!-- sub text -->
                <span class="sub-text">Blog By Usman</span>
                <!-- paragraph -->
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- events end -->

      <!-- blog -->
      <div class="blog" id="blog">
        <div class="container">
          <div class="default-heading">
            <!-- heading -->
            <h2>Latest Blogs</h2>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <!-- blog entry -->
              <div class="entry">
                <!-- blog entry image -->
                <img class="img-responsive" src="img/blog/1.jpg" alt="Blog" />
                <!-- heading / blog post title -->
                <h3><a href="#">Communicating with you every step of the way</a></h3>
                <!-- blog information -->
                <span class="meta"> July 02, 2021 | Tag: Technology | By: Usman </span>
                <!-- paragraph -->
                <p>
                  We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project
                  details if you are interested to get our Web Solution or Software Development Services.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <!-- blog entry -->
              <div class="entry">
                <!-- blog entry image -->
                <img class="img-responsive" src="img/blog/2.jpg" alt="Blog" />
                <!-- heading / blog post title -->
                <h3><a href="#">Communicating with you every step of the way</a></h3>
                <!-- blog information -->
                <span class="meta"> July 02, 2021 | Tag: Technology | By: Usman </span>
                <!-- paragraph -->
                <p>
                  We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project
                  details if you are interested to get our Web Solution or Software Development Services.
                </p>
              </div>
            </div>
          </div>
          <div class="text-center">
            <a href="#" class="btn btn-default">See More</a>
          </div>
        </div>
      </div>
      <!-- blog end -->

      <!-- subscribe -->
      <div class="subscribe" id="subscribe">
        <div class="container">
          <!-- subscribe content -->
          <div class="sub-content">
            <h3>Subscribe Here for Updates</h3>
            <form role="form">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Email..." />
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Subscribe</button>
                </span>
              </div>
              <!-- /input-group -->
            </form>
          </div>
        </div>
      </div>
      <!-- subscribe end -->

      <!-- team -->
      <div class="team" id="team">
        <div class="container">
          <div class="default-heading">
            <!-- heading -->
            <h2>Executing Team</h2>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <!-- team member -->
              <div class="member">
                <!-- images -->
                <img class="img-responsive" src="img/team/1.jpg" alt="Team Member" />
                <!-- heading -->
                <h3>Muhammad Usman</h3>
                <!-- designation -->
                <span class="dig">CEO</span>
                <!-- email -->
                <a href="mailto:f2018065186@umt.edu.pk">f2018065186@bloger.com</a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <!-- team member -->
              <div class="member">
                <!-- images -->
                <img class="img-responsive" src="img/team/2.jpg" alt="Team Member" />
                <!-- heading -->
                <h3>Usman Saleem</h3>
                <!-- designation -->
                <span class="dig">CEO</span>
                <!-- email -->
                <a href="mailto:f2018065064@umt.edu.pk">f2018065064@bloger.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- team end -->

      <!-- footer -->
      <footer>
        <div class="container">
          <p><a href="#">Home</a> | <a href="#work">works</a> | <a href="#team">Team</a> | <a href="#contact">Contact</a></p>
          <div class="social">
           <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
            <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
            <a href="https://www.linkedin.com/signup"><i class="fa fa-linkedin"></i></a>
            <a href="https://myaccount.google.com/profile?pli=1"><i class="fa fa-google-plus"></i></a>
          </div>
          <!-- copy right -->
          
          <p class="copy-right">Copyright &copy; 2021 <a href="#">Blog Site</a> | Designed By : <a href="">Usman</a>, All Rights Reserved&copy;</p>
        </div>
      </footer>
    </div>

    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
  </body>
</html>
