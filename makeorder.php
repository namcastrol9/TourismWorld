<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TravellersWorld</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Make your requests</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>




            <div class ="content"><!--body content holder-->
          <div class = "container">
              <div class ="col-md-6 col-md-offset-3">
                  <form name = "adminForm" action="makeorder.php" class ="form-group" method="POST">
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
                        <label for="TourismSite">TourismSite: </label>
                        <input type="text"
                               id="TourismSite"
                               name="TourismSite"
                               class="form-control"
                               placeholder="Tourism place to visit"
                               >

                    </div>
                    <div class="form-group">
                        <label for="TravelDate">TravelDate: </label>
                        <input type="text"
                               id="TravelDate"
                               name="TravelDate"
                               class="form-control"
                                  placeholder="Tourist travel date and time"
                               >

                    </div>
                      <div class="form-group">
                          <label for="Location">Location: </label>
                          <input type="text"
                                 id="Location""
                                 name="Location""
                                 class="form-control"
                                 placeholder="Tourist current location"
                                 >

                      </div>
                      <div class="form-group">
                          <label for="TouristSize">TouristSize: </label>
                          <input type="text"
                                 id="TouristSize"
                                 name="TouristSize"
                                 class="form-control"
                                    placeholder="Number of travelling personel"
                                 >

                      </div>
                      <div class="form-group">
                          <label for="duration">Duration: </label>
                          <input type="text"
                                 id="duration"
                                 name="duration"
                                 class="form-control"
                                 placeholder="Number of days for visit"
                                 >

                      </div>
                      <input style=" background: #5F9EA0;" class = "btn btn-default navbar-btn" type = "submit" name = "make" value= "Make Request"/>

                      <?php

                          if (isset($_REQUEST['make'])){
                            ?>
                            <?php
                          $conn = mysqli_connect("127.0.0.1:3307","root", "")
                          or die ("Failed to connect ti the server".mysqli_error());

          mysqli_select_db($conn, "true")or die("Failed to select to database". mysqli_error());
          $email = $_POST['email'];
          $tsite = $_POST['TourismSite'];
          $tdate = $_POST['TravelDate'];
          $loc = $_POST['Location'];
          $tsize = $_POST['TouristSize'];
          $dura = $_POST['duration'];
        $ins = mysqli_query($conn,"INSERT INTO clients(email,TourismSite, TravelDate, TourismSize, Location,Duration)
           Values('$email','$tsite','$tdate','$tsize','$loc','$dura')")
          or die("Failed to insert data".mysqli_error());


          if ($ins){
          echo "Your Order has been sent";
          }

          }


          ?>

                      </form>
              </div>
          </div>
          </div>
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
