<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TravellersWorld</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->


      		<script>
      			function validateAdminForm() {
      				var username = document.forms["adminForm"]["username"].value;
      				var email = document.forms["adminForm"]["email"].value;
      				pos = email.indexOf("@");
      				dpos = email.lastIndexOf(".");
      				var pass = document.forms["adminForm"]["password"].value;
              var cpass = document.forms["adminForm"]["cpassword"].value;

          	if (email == "" || pos < 1 || ( dpos - pos < 2 )) {
            alert("User's email must be valid ");
            return false;
                    			}
        		if (email.length > 25){
        		alert("user's email has exceeded the maximux length, 25");
        		return false;
                             			}

      			if (username == "") {
      				alert("User's name must be filled out");
      				return false;
      			}
      			if (username.length > 20){
      				alert("The username has exceeded the maximux length, 20");
      				return false;
      			}
      			var checkNumberInFirstName = username.match(/\d+/g);
      			if (checkNumberInFirstName != null){
      				alert("User's name must not contain a number");
      				return false;
      			}


      				if (pass == "") {
      				alert("The password must be valid");
      				return false;
      			}
            if (pass.length < 8){
              alert("The password must be atleast 8");
              return false;
            }
            if (cpass != pass) {
            alert("The password must match");
            return false;
          }



      		}

      	</script>

    </head>
    <body>
      <header class="bgImage">
          <nav class="navbar">
              <div class="container">
                  <div class="navbar-header"><!--website name/title-->
                      <?php
                      require_once 'utils/functions.php';
                      echo '<a href = "index.php" class = "navbar-brand">
                          TravellersWorld
                      </a> ';
                      ?>
                  </div>
                  <ul class="nav navbar-nav navbar-right"><!--navigation-->
                      <?php
                      //links to database contents. *if logged in
                      if(is_logged_in()){
                          require_once 'utils/functions.php';
                          echo '<li><a href = "index.php">Home</a></li>';
                          echo '<li><a href = "viewEvents.php">Activities</a></li>';
                          echo '<li><a href = "viewLocations.php">Sites</a></li>';
                          echo '<li><a href = "contact.php">Contact Us</a></li>';
                          echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                      }
                      //links non database contents. *if logged out
                      else {

                          echo '<button type = "button" class = "btn btn-default navbar-btn" data-toggle = "modal" data-target = "#login">Login <Span class="glyphicon glyphicon-log-in"></span></button>';
                      }
                      ?>

                      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--modal for login-->
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header"><!--modal header-->
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Login</h4><!--modal title-->
                                  </div>
                                  <div class="row">
                                      <div class="modal-body"><!--modal content-->
                                          <div class ="col-md-6 col-md-offset-3">
                                              <form action="login_form.php" method="POST">
                                                  <div class = "form-group"><!--username-->
                                                    <p>Hello client to use our services, login here or</p>
                                                    <p>Register if you dont have an account.</p>

                                                  </div>
                                                    <button type="submit" class = "btn btn-default loginbtn">Login</button><!--login button-->
                                                  <a class="btn btn-default navbar-btn rgsterbtn" href = "register_form.php">Register</a><!--register button-->
                                              </form>
                                          </div>
                                      </div><!--modal body div-->
                                  </div><!--row div-->
                                  <div class="modal-footer"><!--modal footer-->
                                  <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                  </div><!--modal footer div-->
                              </div><!--modal content div-->
                          </div><!--modal dialog div-->
                      </div><!--modal div-->
                  </ul>
              </div><!--container div-->
          </nav>
          <div class = "col-md-12">
              <div class = "container">
                  <div class = "jumbotron"><!--jumbotron-->
                      <h1>Uganda Tourism Culture</h1><!--jumbotron heading-->
                      <p><!--jumbotron content-->
                      Whether you're looking to book a hotel, reach different sites in the country, celebratory function, business
                      trips, educational trips, our dedicated Tourism team can create a package that will meet
                      your every need.
                      </p>
                      <p id="dateAndTime"></p>
                  </div>
              </div>
          </div>
      </header>
              <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form name = "adminForm" action="register_form.php" class ="form-group" method="POST" onsubmit = "return validateAdminForm()">
                      <div class="form-group">
                          <label for="email">Email: </label>
                          <input type="text"
                                 id="email"
                                 name="email"
                                 class="form-control"
                               >
                          <span class="error">
                              <?php if (isset($errors['email'])) echo $errors['email']; ?>
                          </span>
                      </div>
                        <div class="form-group">
                            <label for="username">Username: </label>
                            <input type="text"
                                   id="username"
                                   name="username"
                                   class="form-control"
                                   value="<?php if (isset($username)) echo $username; ?>"
                                   >
                            <span class="error">
                                <?php if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control"
                                   value=""
                                   >
                            <span class="error">
                                <?php if (isset($errors['password'])) echo $errors['password']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password: </label>
                            <input type="password"
                                   id="cpassword"
                                   name="cpassword"
                                   class="form-control"
                                   value=""
                                   >
                            <span class="error">
                                <?php if (isset($errors['cpassword'])) echo $errors['cpassword']; ?>
                            </span>
                        </div>
                        <input style=" background: #5F9EA0;" class = "btn btn-default navbar-btn" type = "submit" name = "enter" value= "Register"/>

                        <?php

                      			if (isset($_REQUEST['enter'])){
                              ?>
                              <?php
                      			$conn = mysqli_connect("127.0.0.1:3307","root", "")
                            or die ("Failed to connect ti the server".mysqli_error());

      mysqli_select_db($conn, "true")or die("Failed to select to database". mysqli_error());
      $email = $_POST['email'];
      $username = $_POST['username'];
      $tpassword = $_POST['password'];
      $tpass = md5($tpassword);

      $ins = mysqli_query($conn,"INSERT INTO users(Email,username, Password) Values('$email','$username','$tpass')")
      or die("Failed to insert data".mysqli_error());
      if ($ins){
        echo "Details of ".$username. " have been inserted";
      }
    }


    ?>

                        </form>
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
