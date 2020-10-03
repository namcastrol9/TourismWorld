<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TravellersWorld</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
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

        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
