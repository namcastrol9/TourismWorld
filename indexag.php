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
                    <h1>Activities</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img style="width:400px;height:200px;" src="images/ugg.jpg" class="img-responsive">
                        </div>

                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">The fun bit of it</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img style="width:400px;height:160px;" src="images/kidd.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The trips</h5><!--content title-->
                                                <p>
                                                <strong>Travelling and staying with animals</strong><br/>
                                                This is the most respected activity that is enjoyed by most of the
                                                tourists that go visiting the different sites. The travelling
                                                with friends and the game rangers is just fun and secure.
                                              </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img style="width:400px;height:200px;" src="images/boatcr.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The boat cruise</h5><!--content title-->
                                                <p>
                                                <strong>Sailing on water seems scary</strong><br/>
                                                Trust me, it aint how you all think, we offer secure services for tourists
                                                while on water. We see the wild sea creatures and take pics. Our boats are
                                                safe in that you need to worry not, just have the fun you came for.
                                              </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img style="width:400px;height:200px;" src="images/campfire3.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The Camp fire</h5><!--content title-->
                                                <p>
                                                <strong>The greatest activity here</strong><br/>
                                                Camp fire, this is the most respected activity that is enjoyed by most of the
                                                tourists that go visiting the different sites. The camping involves dancing,
                                                singing, story telling, meat roasting and drinking (boozing).
                                              </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Camping at the National Park</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            The Park fun part
                            </p>
                            <p class="definition"><!--content body-->
                            We organize and provide room for the tourists that
                            use our services to reach their tourism sites within the
                            economy of Uganda. Uganda is a blessed land with multiple
                            tourism sites. You can't miss them out, just check on us.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            Expectations  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
