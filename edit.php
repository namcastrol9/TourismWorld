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
          	if (isset($_GET['edit'])) {
          		$id = $_GET['edit'];
          		$update = true;
          		$record = mysqli_query($db, "SELECT * FROM clients WHERE id=$id");

          		if (count($record) == 1 ) {
          			$n = mysqli_fetch_array($record);
          			$email = $n['email'];
          			$TourismSite = $n['TourismSite'];
                $tdate = $n['TravelDate'];
                $loc = $n['Location'];
                $tsize = $n['TourismSize'];
                $dura = $n['Duration'];


          		}
          	}
          ?>
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="text" name="email" value="<?php echo $email; ?>">
           <input type="text" name="TourismSite" value="<?php echo $TourismSite; ?>">
           <input type="text" name="date" value="<?php echo $tdate; ?>">
            <input type="text" name="location" value="<?php echo $loc; ?>">
            <input type="text" name="size" value="<?php echo $tsize; ?>">
             <input type="text" name="duration" value="<?php echo $dura; ?>">
             <?php if ($update == true): ?>
	<button class = "btn btn-default navbar-btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class = "btn btn-default navbar-btn" type="submit" name="save" >Save</button>
<?php endif ?>
<?php
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$email = $_POST['email'];
	$TourismSite = $_POST['TourismSite'];
  $tdate = $_POST['date'];
  $loc = $_POST['location'];
  $tsize = $_POST['size'];
  	$dura = $_POST['duration'];

	$ins = mysqli_query($db, "UPDATE clients SET email='$email', TourismSite='$TourismSite', TravelDate='$tdate', TourismSize='$tsize',
    Location='$loc',Duration='$dura' WHERE id=$id");

    if ($ins){
    echo "Your details have been updated successfully";
    }
    else {
      echo "Information not updated";
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
