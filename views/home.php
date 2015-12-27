<!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script>
    // create google map
    function GoogleMap(position) {
        var location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

        var map = new google.maps.Map(document.getElementById('maps'), {
            zoom: 13,
            scrollwheel: false,
            streetViewControl: false,
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        });

        var marker = new google.maps.Marker({
            map: map,
            position: location,
            animation: google.maps.Animation.DROP,
            draggable: false,
            title: "Uw locatie"
        });

        map.setCenter(location);
    }

    // Laat Amsterdam zien wanneer locatie niet kan worden opgehaald.
    function showAmsterdam() {
        var position = [52.3702157, 4.895167899999933];

        function showGoogleMaps() {

            var latLng = new google.maps.LatLng(position[0], position[1]);

            var mapOptions = {
                zoom: 13, // initialize zoom level - the max value is 21
                streetViewControl: false, // hide the yellow Street View pegman
                scrollwheel: false,
                scaleControl: false, // allow users to zoom the Google Map
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: latLng
            };

            map = new google.maps.Map(document.getElementById('maps'),
                mapOptions);

            // Show the default red marker at the location
            marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: false
            });
        }

        google.maps.event.addDomListener(window, 'load', showGoogleMaps);
    }

    //execute geolocation
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(GoogleMap, showAmsterdam);
    }
</script>
<script>
    function ValidateForm() {
        $('span.error_msg').html('');
        var success = true;
        $("#personID input").each(function () {
            if ($(this).val() == "") {
                $(this).next().html("Field needs filling");
                success = false;
            }
        });
        return success;
    }
</script>
<script src="js/home.js"></script>
<header class="intro">
    <div class="intro-body">
        <div class="blauw flex">
            <div class="col-md-8">
                <div class="row">
                    <h1 class="brand-heading">GuideFinder</h1>
                    <h2 class="intro-text">Find your personal guide!</h2>
                </div>
            </div>
        </div>
        <figure id="pijltje"></figure>
        <div id="maps"></div>
        <div id="vragenbox" class="flex">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 zoeken hidden">
                        <i class="fa fa-search fa-4"></i>
                        <h1 id="vind">Find your guide!</h1>
                        <a href="#">
                            <button id="here">Here!</button>
                        </a>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 vragen" id="vraag1">
                        <div class="col-sm-offset-2 col-xs-12 col-sm-8">
                            <h2 class="vindbox">Find your guide in 5 steps!</h2></div>
                        <div class="col-xs-12">
                            <h2>Step 1</h2>
                            <h3>Where do you want a tour?</h3>
                            <div class="alert alert-danger invullen" role="alert" style="display:none;">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span> Please fill in a placename
                            </div>
                        </div>
                        <div class="col-sm-10 col-xs-12 ui-widget marto20">
                            <input type="text" name="where" class="form-control input-md" placeholder="Fill in a placename.." id="tags" value="" tabindex="2">
                        </div>
                        <div class="col-sm-2 col-xs-12 marto20">
                            <button type="button" class="btn btn-default volgende" onclick="ValidateForm">Next &raquo;</button>
                        </div>
                        <div class="col-sd-offset-3 col-sd-6 col-xs-12">
                            <div class="row marto20">
                                <nav>
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 vragen" id="vraag2" style="display:none;">
                        <div class="col-sm-offset-2 col-xs-12 col-sm-8">
                            <h2 class="vindbox">Find your guide in 5 steps!</h2></div>
                        <div class="col-xs-12">
                            <h2>Step 2</h2>
                            <h3>With how many people are you going to take the tour?</h3></div>
                        <div class="col-sm-10 col-xs-12 ui-widget marto20">
                            <select class="form-control">
                                <option value="" disabled selected>Select the number of persons...</option>
                                <option value="">1 person</option>
                                <option value="">2 persons</option>
                                <option value="">3 persons</option>
                                <option value="">4 persons</option>
                                <option value="">5 persons</option>
                                <option value="">6 persons</option>
                                <option value="">7 persons</option>
                                <option value="">8 persons</option>
                                <option value="">9 persons</option>
                                <option value="">10 persons</option>
                                <option value="">11 persons</option>
                                <option value="">12 persons</option>
                                <option value="">13 persons</option>
                                <option value="">14 persons</option>
                                <option value="">15 persons</option>
                                <option value="">16 persons</option>
                                <option value="">17 persons</option>
                                <option value="">18 persons</option>
                                <option value="">19 persons</option>
                                <option value="">20 persons</option>
                                <option value="" disabled>20+ persons - Please contact us</option>
                            </select>
                        </div>
                        <div class="col-sm-2 col-xs-12 marto20">
                            <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                        </div>
                        <div class="col-sd-offset-3 col-sd-6 col-xs-12">
                            <div class="row marto20">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 vragen" id="vraag3" style="display:none;">
                        <div class="col-sm-offset-2 col-xs-12 col-sm-8">
                            <h2 class="vindbox">Find your guide in 5 steps!</h2></div>
                        <div class="col-xs-12">
                            <h2>Step 3</h2>
                            <h3>Are there children, disabled or elder persons involved?</h3></div>
                        <div class="col-sm-10 col-xs-12 ui-widget marto20">
                            <div class="col-xs-6">
                                <div class="checkbox text-left">
                                    <label>
                                        <input type="checkbox" value="">Only adults
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="checkbox text-left">
                                    <label>
                                        <input type="checkbox" value="">Includes Children
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="checkbox text-left">
                                    <label>
                                        <input type="checkbox" value="">Including elder people
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="checkbox text-left">
                                    <label>
                                        <input type="checkbox" value="">Including disabled people
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-12 marto20">
                            <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                        </div>
                        <div class="col-sd-offset-3 col-sd-6 col-xs-12">
                            <div class="row marto20">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="active"><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 vragen" id="vraag4" style="display:none;">
                        <div class="col-sm-offset-2 col-xs-12 col-sm-8">
                            <h2 class="vindbox">Find your guide in 5 steps!</h2></div>
                        <div class="col-xs-12">
                            <h2>Step 4</h2>
                            <h3>Pick a date...</h3>
                        </div>
                        <div class="col-sm-10 col-xs-12 ui-widget marto20">
                            <input type="text" name="where" id="email" class="form-control input-md" placeholder="Fill in a placename.." value="<?= $info[''] ?>" tabindex="2">
                        </div>
                        <div class="col-sm-2 col-xs-12 marto20">
                            <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                        </div>
                        <div class="col-sd-offset-3 col-sd-6 col-xs-12">
                            <div class="row marto20">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="active"><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 vragen" id="vraag5" style="display:none;">
                        <div class="col-sm-offset-2 col-xs-12 col-sm-8">
                            <h2 class="vindbox">Find your guide in 5 steps!</h2></div>
                        <div class="col-xs-12">
                            <h2>Step 5</h2>
                            <h3>What kind of tour do you want?</h3></div>
                        <div class="col-sm-10 col-xs-12 ui-widget marto20">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                            <input type="checkbox" value="">
                                          </span>
                                    <label for="option5" class="form-control">Museum Tour</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                            <input type="checkbox" value="">
                                          </span>
                                    <label for="option5" class="form-control">City Tour</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" value="">
                                          </span>
                                        <label for="option5" class="form-control">Pub-crawl</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" value="">
                                          </span>
                                        <label for="option5" class="form-control">Other</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-12 marto20">
                                <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                            </div>
                            <div class="col-sd-offset-3 col-sd-6 col-xs-12">
                                <div class="row marto20">
                                    <nav>
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li class="active"><a href="#">5</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</header>

<div class="row">
    <div class="row-height">
        <div class="col-xs-6 col-height">
            <div class="inside">
                <div class="content"></div>
            </div>
        </div>
        <div class="col-xs-3 col-height col-top">
            <div class="inside">
                <div class="content"></div>
            </div>
        </div>
        <div class="col-xs-2 col-height col-middle">
            <div class="inside">
                <div class="content"></div>
            </div>
        </div>
        <div class="col-xs-1 col-height col-bottom">
            <div class="inside">
                <div class="content"></div>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section id="howitworks" class="container-breed text-center flex">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>How does it work?</h2>
                <h3>Simply book a guide in 6 steps!</h3>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail stappen">
                    <span class="badge stapuitleg">1</span>
                    <h4>Where do you want a tour?</h4>
                    <hr>
                    <div class="stapicoon">
                        <img src="images/homepage/stappen/vergrootglas-GuideFinder.png" alt="Stap1" title="zoeken">
                    </div>
                    <div class="caption">
                        <p>Anwser some questions in the fuild above, so oursystem knows what you are looking for</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail stappen">
                    <span class="badge stapuitleg">2</span>
                    <h4>Pick the guide thats best for you</h4>
                    <hr>
                    <div class="stapicoon">
                        <img src="images/homepage/stappen/gidsen-GuideFinder.png" alt="Stap1" title="zoeken">
                    </div>
                    <div class="caption">
                        <p>We show some recommended guides for you, then you pick your guide thats best for you</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail stappen">
                    <span class="badge stapuitleg">3</span>
                    <h4>Guide will get in contact</h4>
                    <hr>
                    <div class="stapicoon">
                        <img src="images/homepage/stappen/mail-GuideFinder.png" alt="Stap1" title="zoeken">
                    </div>
                    <div class="caption">
                        <p>Guide is sending you an email to make an oppointment witin an hour
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail stappen">
                    <span class="badge stapuitleg">4</span>
                    <h4>You will meet your guide</h4>
                    <hr>
                    <div class="stapicoon">
                        <img src="images/homepage/stappen/map-GuideFinder.png" alt="Stap1" title="zoeken">
                    </div>
                    <div class="caption">
                        <p>At the location, date and time you have agreed to meet</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail stappen">
                    <span class="badge stapuitleg">5</span>
                    <h4>Guide will give the tour</h4>
                    <hr>
                    <div class="stapicoon">
                        <img src="images/homepage/stappen/gids-GuideFinder.png" alt="Stap1" title="zoeken">
                    </div>
                    <div class="caption">
                        <p>At the location, date and time you have agreed to meet</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail stappen6">
                    <span class="badge stapuitleg">6</span>
                    <h4>Payment after the tour</h4>
                    <hr>
                    <div class="stapicoon">
                        <img src="images/homepage/stappen/betaling-GuideFinder.png" alt="Stap1" title="zoeken">
                    </div>
                    <div class="caption">
                        <p>He of she will be informing you of everything interesting in the tour</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="text-center flex">
    <div class="container">
        <div class="col-lg-12">
            <h2>GuideFinder?</h2>
            <div class="col col-sm-4 col-xs-12">
                <h3>Who?</h3>
                <hr>
                <p>GuideFinder is a system that connects tourist to guide's (GuideFinder's). Today, everbody could be a 'GuideFinder' do you have experience in guideing? Join us!</p>
            </div>
            <div class="col col-sm-4 col-xs-12">
                <h3>What?</h3>
                <hr>
                <p>I've got a lot of experience in giving tourist and visitors tours in Amsterdam. I was surprised that tourists could not quickly find a guide. That why i started GuideFinder.</p>
            </div>
            <div class="col col-sm-4 col-xs-12">
                <h3>Where?</h3>
                <hr>
                <p>GuideFinder's could be everywhere, every city and all populair places. If you are searching for a GuideFinder you'll have to choose where you want a tour. Our filters will figure out witch GuideFinder is best for you!</p>
            </div>
        </div>
    </div>
</section>
<section id="home-reviews" class="flex">
    <div class="container">
        <div class="col-xs-12">
            <h2 class="center">What people say about us...</h2>
            <div class="col-xs-3">
                <div class="talkcloud flex">
                    <p>I'm glad i have choosen for Guidefinder. I had a very interesting tour with top service!</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="talkcloud flex">
                    <p>I'm glad i have choosen for Guidefinder. I had a very interesting tour with top service!</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="talkcloud flex">
                    <p>I'm glad i have choosen for Guidefinder. I had a very interesting tour with top service!</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="talkcloud flex">
                    <p>I'm glad i have choosen for Guidefinder. I had a very interesting tour with top service!</p>
                </div>
            </div>
        </div>
    </div>
</section>