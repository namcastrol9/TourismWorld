<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TravellersWorld</title>
        <style>
            span.error{
                color: red;
            }
        </style>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
        <script>
          function validateAdminForm() {
            var username = document.forms["theForm"]["username"].value;
            var pass = document.forms["theForm"]["password"].value;

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
                          echo '<li><a href = "indexag.php">Home</a></li>';
                          echo '<li><a href = "viewEvents.php">Activities</a></li>';
                          echo '<li><a href = "viewLocations.php">Sites</a></li>';
                          echo '<li><a href = "contact.php">Contact Us</a></li>';
                          echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                      }
                      //links non database contents. *if logged out
                      else {

                          echo '<button type = "button" class = "btn btn-default navbar-btn" data-toggle = "modal" data-target = "#login">Register <Span class="glyphicon glyphicon-log-in"></span></button>';
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

        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <?php
                    if (isset($errorMessage))
                        echo "<p>$errorMessage</p>";
                    ?>
                    <form name = "theForm" action="login_form.php" class ="form-group" method="POST" onsubmit = "return validateAdminForm()">
                        <div class = "form-group">
                            <!--username field-->
                            <label for="username">Username: </label>
                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                                   />
                            <span class = "error"><!--error message for invalid input-->
                                <?php if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class = "form-group">
                            <!--password field-->
                            <label for="password">Password: </label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   value=""
                                   />
                            <span class = "error"><!--error message for invalid input-->
                                <?php if (isset($errors['password'])) echo $errors['password']; ?>
                            </span>
                        </div>
                        <input style=" background: #5F9EA0;" class = "btn btn-default navbar-btn" type="submit" name="enter" value="Login" href="indexag.php">
                        <?php

                            if (isset($_REQUEST['enter'])){
                              ?>
                              <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root', '','true' )
                            or die ("Failed to connect to the server".mysqli_error());

                      $username = $_POST['username'];
                         $sql = "Select * from users where username = '$username' ";
                         $result = mysqli_query($conn,$sql);
                         if (mysqli_num_rows($result)!=0 )
                         {
                           echo "<script> location.href='indexag.php'; </script>";
                           exit;
                         }
                         else{
                           echo"wrong credentials, register";
                         }
                      }


                      ?>
      </form>
     </div><!--col md 6 div-->
    </div><!--container div-->
   </div><!--content div-->
  <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
 </body>
</html>
