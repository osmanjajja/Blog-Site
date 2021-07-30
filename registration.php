<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Bloger - Registration</title>
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
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="img-responsive" src="img/logo.png"
                                alt="Logo" /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="registration.php">Signup</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="index.php">Home</a></li>
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
                <!-- form content / register area -->
                <div class="register-area">
                    <!-- heading -->
                    <h3>Sign Up, For An Account</h3>
                    <form role="form" id="register-form" action="registration.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputName1" name="fname"
                                placeholder="Full Name" />
                        </div>
                        <div class="form-group">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-info"> <input type="radio" name="options" id="option1"
                                        value="Male" /> Male </label>
                                <label class="btn btn-info"> <input type="radio" name="options" id="option2"
                                        value="Female" /> Female </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                placeholder="Enter email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                placeholder="Password" />
                        </div>
                        
                        <div class="checkbox form-group">
                            <label> <input type="checkbox" name="agree" value="true" /> I agree with all terms and
                                conditions. </label>
                        </div>
                        <button type="submit" onclick="" name="insert-btn" class="btn btn-default">SignUp</button>&nbsp;
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- footer -->
        <footer class="ffoot">
            <div class="container">
                <p><a href="#">Home</a> | <a href="#work">works</a> | <a href="#team">Team</a> | <a
                        href="#contact">Contact</a></p>
                <div class="social">
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                    <a href="https://www.linkedin.com/signup"><i class="fa fa-linkedin"></i></a>
                    <a href="https://myaccount.google.com/profile?pli=1"><i class="fa fa-google-plus"></i></a>
                </div>

                <p class="copy-right">Copyright &copy; 2021 <a href="#">Blog Site</a> | Designed By : <a
                        href="">Usman</a>, All Rights Reserved&copy;</p>
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
    <?php
          $conn = new mysqli("localhost", "root", "", "blog", "3308");
          if (mysqli_connect_errno()) {
            echo "Error in connection";
          } else {
            echo "Connection succeeded";
          }
          if (isset($_POST["insert-btn"])) {
            $name = $_POST["fname"];
            $gender = $_POST["options"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $insert = "INSERT INTO users(name,gender,email,password) VALUES('$name','$gender','$email','$password')";
            $run_insert = mysqli_query($conn, $insert);
            if ($run_insert === true) {
              echo "Database UPDATED";
              echo "<script>window.open('login.php','_self') </script>";
            } else {
              echo "Error in entering record.";
            }
          }
                    
  ?>
        </body>

</html>