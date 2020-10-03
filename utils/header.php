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
                    echo '<li><a href = "indexag.php">Home</a></li>';
                    echo '<li><a href = "events2.php">Activities</a></li>';
                    echo '<li><a href = "locations2.php">Sites</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a>
                              <a href = "contact.php"></a>
                              <a href = "contact.php"></a>
                              <a href = "contact.php"></a>
                    </li>';


                    echo '<li><div class="dropdown">
  <button class="dropbtn">Clients</button>
  <div class="dropdown-content">
    <a href="makeorder.php">make request</a>
    <a href="view.php">view request</a>
  </div>
</div></li>';
                }
                ?>


                                    </ul>
        </div><!--container div-->
    </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron"><!--jumbotron-->
                <h1>Uganda Tourism Culture</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
                Travel and reach all the exciting sites in Uganda with respect to all tour
                trips and educational trips. Our dedicated Tourism team is in position to
                create a package that will meet your every need.
                </p>
                <p id="dateAndTime"></p>
            </div>
        </div>
    </div>
</header>
