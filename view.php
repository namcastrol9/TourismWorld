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
                    <h1 style="text-align:center;">Edit and delete client's requests</h1><!--body content title-->
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
                <?php
                $db = mysqli_connect("127.0.0.1:3307","root", "","true")
                or die ("Failed to connect ti the server".mysqli_error());
                $results = mysqli_query($db, "SELECT * FROM clients"); ?>

                <table>
                	<thead>
                		<tr>
                			<th>email</th>
                			<th>TourismSite</th>
                      <th>TravelDate</th>
                			<th>TourismSize</th>
                      <th>Location</th>
                			<th>Duration</th>
                			<th colspan="2">Action</th>
                		</tr>
                	</thead>

                	<?php while ($row = mysqli_fetch_array($results)) { ?>
                		<tr>
                			<td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['TourismSite']; ?></td>
                      <td><?php echo $row['TravelDate']; ?></td>
                			<td><?php echo $row['TourismSize']; ?></td>
                      <td><?php echo $row['Location']; ?></td>
                      <td><?php echo $row['Duration']; ?></td>
                			<td>
                				<a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_bt" >Edit</a>
                			</td>
                			<td>
                				<a href="del.php?del=<?php echo $row['id']; ?>" class="del_bt">Delete</a>
                			</td>
                		</tr>
                	<?php } ?>
                </table>


              </div>
          </div>
          </div>
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
