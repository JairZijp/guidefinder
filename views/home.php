<?php
include ('layout/header.php');
?>
    <header class="intro">
        <div class="intro-body">
            <div class="blauw">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">GuideFinder</h1>
                            <h2 class="intro-text">Find your personal guide!</h2>
                        </div>
                    </div>
                </div>
            </div>
            <figure id="pijltje"></figure>
            <div id="maps">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 zoeken">
                            <i class="fa fa-search fa-4"></i>
                            <h1 id="vind">Find your guide!</h1>
                            <a href="#">
                                <button id="here">Here!</button>
                            </a>
                        </div>
                        <div class="col-xs-offset-3 col-xs-9">
                            <div class="vragen">
                                <h2>Find your guide in 5 steps!</h2>
                                <h4>Where do you want a tour?</h4>
                                <div class="col-sm-10 col-xs-12">
                                    <input type="text" name="where" id="email" class="form-control input-md" placeholder="Fill in a placename.." value="<?= $info[''] ?>" tabindex="2">
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                                </div>
                                <div class="row houder-nummers">
                                    <button type="button" class="btn btn-default  btn-circle"><b>1</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>2</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>3</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>4</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>5</b></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-offset-3 col-xs-9">
                            <div class="vragen">
                                <h2>Find your guide in 5 steps!</h2>
                                <h4>With how many people are you going to take the tour?</h4>
                                <div class="col-xs-10">
                                    <select class="form-control">
                                        <option value="" disabled selected>Select how many persons...</option>
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
                                <div class="col-sm-2 col-xs-12">
                                    <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                                </div>
                                <div class="row houder-nummers">
                                    <button type="button" class="btn btn-default  btn-circle"><b>1</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>2</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>3</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>4</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>5</b></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-offset-3 col-xs-9">
                            <div class="vragen">
                                <h2>Find your guide in 5 steps!</h2>
                                <h4>Are there children, disabled or elder persons involved?</h4>
                                <div class="col-xs-12">
                                <div class="col-sm-10 col-xs-12">
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
                                <div class="col-sm-2 col-xs-12">
                                    <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                                </div>
                                </div>
                                <div class="row houder-nummers">
                                    <button type="button" class="btn btn-default  btn-circle"><b>1</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>2</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>3</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>4</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>5</b></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-offset-3 col-xs-9">
                            <div class="vragen">
                                <h2>Find your guide in 5 steps!</h2>
                                <h4>Select a date...</h4>
                                <div class="col-sm-10 col-xs-12">
                                    <input type="text" name="where" id="email" class="form-control input-md" placeholder="Fill in a placename.." value="<?= $info[''] ?>" tabindex="2">
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                                </div>
                                <div class="row houder-nummers">
                                    <button type="button" class="btn btn-default  btn-circle"><b>1</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>2</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>3</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>4</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>5</b></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-offset-3 col-xs-9">
                            <div class="vragen">
                                <h2>Find your guide in 5 steps!</h2>
                                <h4>Where do you want a tour?</h4>
                                <div class="col-xs-10">
                                    <input type="text" name="where" id="email" class="form-control input-md" placeholder="Fill in a placename.." value="<?= $info[''] ?>" tabindex="2">
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    <button type="button" class="btn btn-default volgende">Next &raquo;</button>
                                </div>
                                <div class="row houder-nummers">
                                    <button type="button" class="btn btn-default  btn-circle"><b>1</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>2</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>3</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>4</b></button>
                                    <button type="button" class="btn btn-default  btn-circle"><b>5</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>How does it work?</h2>
                <div class="col col-lg-6 col-sm-6 col-xs-12"><span class="nummer">1</span>
                    <h4 class="titel">You are booking a guide</h4></div>
                <div class="col col-lg-6 col-sm-6 col-xs-12"><span class="nummer">2</span>
                    <h4 class="titel">Guide will get in contact</h4></div>
                <div class="col col-lg-6 col-lg-6 col-xs-12"><span class="nummer">3</span>
                    <h4 class="titel">Guide is giving the tour</h4></div>
                <div class="col col-lg-6 col-sm-6 col-xs-12"><span class="nummer">4</span>
                    <h4 class="titel">Payment after the tour</h4></div>
                <p></p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
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
        </div>
    </section>