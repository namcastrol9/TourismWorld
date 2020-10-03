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
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Travellers World</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: TravellersWorld@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/TravellersWorld<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 0779030425
                    </p>
                </div>
                <div class="col-md-6">
                  <form action="contact.php" class ="form-group" method="POST">

                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right" name="enter">Send <span class="glyphicon glyphicon-send"></span></button>


                        <?php

                            if (isset($_REQUEST['enter'])){
                              ?>
                              <?php
                            $conn = mysqli_connect("127.0.0.1:3307","root", "")
                            or die ("Failed to connect ti the server".mysqli_error());

                      mysqli_select_db($conn, "true")or die("Failed to select to database". mysqli_error());
                      $title = $_POST['title'];
                      $message = $_POST['message'];

                      $ins = mysqli_query($conn,"INSERT INTO records(title, message) Values('$title','$message')")

                      or die("Failed to send data".mysqli_error());

                      if ($ins){
                      echo "Information been sent successfully";
                      }
                      }


                      ?>


                    </form>
                </div>
            </div>


        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
