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
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Tourism Sites</h1><!--body content title-->
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
                            <img style="width:400px;height:300px;" src="images/el3.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE DINING ROOM THE ROCKS</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/bwhome.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE SWEETEST BEING AT BWINDI</h5><!--content title-->
                                                <p>
                                                <strong>The activities here include</strong><br/>
                                                Sitting amongst historic sandstone, Visiting Batwa pygmies
                                                Enjoying a guided village walk
                                                A guided multi-day trek to/from Kisoro via Lake Mutanda
                                              </p>
                                            </div>
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                With an additional taste, the Buhoma lodge provides the guests with a smooth, conducive and
                                                moist environment which is suitable for post event entertaining, the Private
                                                lodge is a unique, romantic and stylish choice.
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
                            <h1 class="title">Elephant Watching at Bwindi National Park</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            The top attraction site
                            </p>
                            <p class="definition"><!--content body-->
                              A main reason to visit Uganda from a nature perspective is to enjoy incredible mountain gorilla tours. The gorillas are only found in this region.
    Mountain gorillas differ from their lowland cousins as their fur is thicker and adapted to the colder temperature at high altitude.
    Gorillas live in groups of around 10 individuals and are led by the most powerful silverback with the rest of the group comprising females and younger males. The silverback makes important decisions for the group and protects them from danger.
    To see these animals, you can enjoy gorilla tours from Kisoro, which is about 460 kilometres (290 mi) from the capital city of Kampala. Kisoro is located in a fantastic area of Uganda and is in the African Great Lakes region.
    This is where the African continent is slowly splitting apart revealing the beautiful lake scenery. Because of the incredible landscape, many people refer to this part of the continent as the Switzerland of Africa.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img style="width:400px;height:300px;" src="images/baboon.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Kidepo wildlife home</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img style="width:300px;height:200px;"  src="images/kid.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The excitement at Kidepo</h5><!--content title-->
                                                <p>
                                                The active viewing of the Jungle kings (Lions)
                                                </p>
                                            </div>
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Kidepo located in the northern region of Uganda welcomes you With
                                                a variety of wildlife that includes the desert views, the animals
                                                alongside the game rangers.
                                                </p>

                                                <p>
                                                Dont forget the dedicated place has a conducive environment for staying incase guests
                                                turn up. The guest houses also have restaurants that offer full brasserie menu that is
                                                also complemented by a selection of bar treats, available all time.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Kidepo wildlife View</h1><!--location title-->
                            <p class="location">The home of wildlife</p><!--location secondary content-->
                            <p class="definition">
                              Kidepo Valley National Park lies in the rugged, semi arid valleys between Uganda’s borders with Sudan and Kenya, some 700km from Kampala. Gazetted as a national park in 1962, it has a profusion of big game and hosts over 77 mammal species as well as around 475 bird species.
    Kidepo is Uganda’s most isolated national park, but the few who make the long journey north through the wild frontier region of Karamoja would agree that it is also the most magnificent, for Kidepo ranks among Africa’s finest wildernesses. From Apoka, in the heart of the park, a savannah landscape extends far beyond the gazetted area, towards horizons outlined by distant mountain ranges.
    During the dry season, the only permanent water in the park is found in wetlands and remnant pools in the broad Narus Valley near Apoka. These seasonal oases, combined with the open, savannah terrain, make the Narus Valley the park’s prime game viewing location.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img style="width:500px;height:200px;" src="images/k2.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Murchison Falls National Park</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/giraf.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Giraffes at the Karuma game reserve</h5><!--content title-->
                                                <p>
                                                The giraffes look so beautiful along the Karuma game reserves, that always attract the
                                                passengers travelling to the west nile areas of Uganda that include Pakwach, Nebbi,
                                                Paidha, Nyaravur, Arua and so many other places.
                                                </p>
                                            </div>
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                These animals are so rare and they really look beautiful in that they attract tourists and act as
                                                the main tollerants of the wildlife for they are unique.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Murchison Falls National Park</h1>
                            <p class="location">The home of waterfalls</p>
                            <p class="definition">The park is made up of Bugungu and Karuma wildlife reserves found on the road to westnile and northern Uganda. The park straddles the Ugandan districts of Buliisa, Nwoya, Kiryandongo, and Masindi.
                               The driving distance from Masindi, the nearest large town, to the Kibanda area of the national park is about 72 kilometres (45 mi). This area is about 283 kilometres (176 mi), by road, north-west of Kampala, the capital and largest city of Uganda. The coordinates of the park near the Kibanda area are 02°11'15.0"N, 31°46'53.0"E (Latitude:2.187499; Longitude:31.781400).</p>
                            <hr class="customline3">
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </section>
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
                            <img style="width:500px;height:200px;" src="images/mu2.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">The Uganda Museum</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img style="width:500px;height:200px;" src="images/st.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Early men of the stone age</h5>
                                                <p>
                                                Early in the Stone Age, humans lived in small, nomadic groups.
                                                During much of this period, the Earth was in an Ice Age—a period
                                                 of colder global temperatures and glacial expansion.
                                                </p>
                                            </div>
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                              About 14,000 years ago, Earth entered a warming period. Many of the large Ice Age animals went extinct.
                                               In the Fertile Crescent, a boomerang-shaped region bounded on the west by the Mediterranean Sea and on
                                                the east by the Persian Gulf, wild wheat and barley became plentiful as it got warmer.
                                                </p>

                                                <p>
                                                Human artifacts in the Americas begin showing up from around this time, too. Experts aren’t exactly
                                                sure who these first Americans were or where they came from, though there’s some evidence these Stone
                                                Age people may have followed a footbridge between Asia and North America, which became submerged as
                                                glaciers melted at the end of the last Ice Age.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">The Uganda Museum</h1>
                            <p class="location">History home of Ugandans</p>
                            <p class="definition">The Uganda Museum (founded in 1908) in Kampala has exhibits of traditional culture, archaeology, history, science, and natural history. It regularly presents performances of traditional music. Makerere University's main library in Kampala has a general collection, which is the largest in Uganda. The most important specialized collections, all in Kampala, are found in the Albert Cook Library at Makerere Medical School (at Makerere University), the Institute of Teacher Education, the Uganda Polytechnic Kyambogo (formerly Uganda Technical College), the Makerere Institute of Social Research, and the Cabinet Office.</p>
                            <hr class="customline3">
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
