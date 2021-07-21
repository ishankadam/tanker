<!-- output starts -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tanker Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome-all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link rel="stylesheet" href="css/swiper.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="css/product-sans.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="login" style="background-image: url(assets/img/Login.jpg); ">
  <div class="container-fluid" >
    <div class="row login-row" >
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-xl-4 offset-xl-4">
      </div>
      <div class="col-12">
        <div class="py-2">
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-4 offset-lg-4 login-wrapper" style="margin-top: 100px; background-color: #b3b3b3;opacity: 0.5px;border-radius: 30px;">
              <center><h3><font color="black">Sign Up</font></h3></center>
                <!-- <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#signup">Sign Up</a>
                  </li><a class="nav-link active" data-toggle="tab" href="#login">Login</a>
                  </li>
                  
                </ul> -->
                <div class="tab-content">
                  <div class="tab-pane container pt-2 active" id="login">
                  <form class="form" method="post" action="signup_process.php">
                  <div class="message" id="message" style="margin: auto;"></div>
                  <div class="form-group has-feedback">
                    <br>
                    <input type="text" name="uname" id="uname" class="form-control" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    &nbsp;&nbsp;<input type="checkbox" onclick="myFun()">&nbsp;Show Password
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" name="conpassword" id="password" class="form-control" placeholder="Password">
                     &nbsp;&nbsp;<input type="checkbox" onclick="myFun()">&nbsp;Show Password
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="col-auto">
                  <center><button type="submit" name="login" id="submit" class="btn btn-primary">Submit</button></center>
                </div>
                </form>
                <div class="row">
                  <div class="col-8" style="margin-top: 8px;">
                    <p><font color="black">Already have an Account?...</font>
                  </div>
                  <div class="col-4">
                    <a class="nav-link" href="login.php">Login</a>
                  </div>
                  <a class="nav-link" href="index.php"> >> back</a>
                  </div>             
                </div>
                     </div>
                  
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-dark">Terms and Conditions</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body text-dark">
        <?php echo $terms_and_conditions; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/lottie.min.js"></script>
<script src="js/custom.js"></script>
 <script>
                function myFun() {
                  var x = document.getElementById("password");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
              </script>
</body>
</html>