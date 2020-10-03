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
                    <h1>Clients order</h1><!--body content title-->
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
                  <form name = "adminForm" class ="form-group" method="POST">
          <?php
          $db = mysqli_connect("127.0.0.1:3307","root", "","true")
          or die ("Failed to connect ti the server".mysqli_error());
    if (isset($_GET['del'])) {
    	$id = $_GET['del'];
    $ins =	mysqli_query($db, "DELETE FROM clients WHERE id=$id");

      if ($ins){
    echo "Your details have been deleted successfully";
    }

}?>
                      </form>
              </div>
          </div>
          </div>
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
