<!--   Schuifbalkje script   -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/utils/Draggable.min.js'></script>
<script>
    Draggable.create(".scrub", {
        type: "x",
        edgeResistance: 1,
        bounds: ".slider"
    });
    // we are done at this point

    // output the value
    TweenMax.to(this, 1, {
        alpha: 1,
        onUpdate: update,
        repeat: -1
    });

    function update() {
        $('#xpos').val($('.scrub').position().left + 'px');
        $('#percentage').val(Math.round($('.scrub').position().left * 1000 / 2720) + 'Miles');
    }

    // filter show meer en minder 
    //    $('.morefilter').on('click', function (e) {
    //        e.preventDefault();
    //        var $this = $(this);
    //        var $collapse = $this.closest('.collapse-group').find('.collapse');
    //        $collapse.collapse('toggle');
    //    });
</script>
<div class="container">
    <div class="col-xs-12">
        <h1>All Guides</h1>
        <hr>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="sidebar_links">
            <h3 class="filtertitel">Filters:</h3>
            <hr>
            <div class="checkbox">
                <h4 class="filtertype">Distance</h4>
                <h6 class="grijs">scroll to the right to set your distance</h6>
                <ul class="list-group">
                    <div class="slider">
                        <div class="scrub">•</div>
                    </div>
                    <input id="xpos" class="output" type="text" value="0" disabled> to
                    <input id="percentage" class="output" type="text" value="0" disabled> miles
                </ul>
            </div>
            <hr>
            <div class="checkbox">
                <h4 class="filtertype">Kind of tour</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Museums
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Attractions
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">City tour
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Canel cruises
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Bike tours
                        </label>
                    </li>
                    <!--
                    <p class="collapse">
                        <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">City tour
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Canel cruises
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Bike tours
                        </label>
                    </li>
                    </p>
-->
                    <a class="btn" href="#" class="morefilter">View more &raquo;</a>
                </ul>
            </div>
            <hr>
            <div class="checkbox">
                <h4 class="filtertype">Languages</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="" checked>English
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Dutch
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">German
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">France
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Chinees
                        </label>
                    </li>
                    <a class="btn" href="#" class="morefilter">View more &raquo;</a>
                </ul>
            </div>
            <hr>
            <div class="checkbox">
                <h4 class="filtertype">Type of people</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Adults only
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Including children
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Including elder people
                        </label>
                    </li>
                    <li class="list-group-item">
                        <label>
                            <input type="checkbox" value="">Including diabled people
                        </label>
                    </li>

                    <button class="btn btn-warning" id="Reset">Clear Filters</button>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-9">
        <div class="col-xs-12 sorteren">
            <div class="col-xs-2">
                <label for="sort">Sort on:</label>
            </div>
            <div class="col-xs-3">
                <select class="form-control pull-left">
                    <option>Date</option>
                    <option>Alphabet</option>
                    <option>Revfiews</option>
                    <option>Experience</option>
                </select>
            </div>
        </div>
        <?php
        $allGuides = $user->getAllGuides();

        foreach($allGuides as $info) {
        ?>
            <div class="user-block col-md-3">
                <div class="col-md-3">
                    <img class="user-list-image" height="150" width="150" src="images/profile/<?= $info['image']; ?>">
                </div>
                <div class="col-md-12">
                    <h3 class="center"><?= $info['username']; ?></h3>
                    <p class="center">
                        <img src="images/vlaggen/United-Kingdom.png" class="taal-vlag-profiel" alt="English" title="English" />
                        <img src="images/vlaggen/Netherlands.png" class="taal-vlag-profiel" alt="Dutch" title="Dutch" />
                        <img src="images/vlaggen/Germany.png" class="taal-vlag-profiel" alt="German" title="German" />
                    </p>
                    <hr>
                    <p class="nomar">
                        <label for="name" class="nobold">Name:</label>
                        <?= $info['firstname']; ?>
                            <?= $info['lastname']; ?>
                    </p>
                    <p class="nomar">
                        <label for="location" class="nobold">Location:</label> <b><?= $info['city'];?></b></p>
                    <p class="nomar">
<!--
                        <label for="about" class="nobold">About:</label>
                        <?= $info ['description']; ?>
-->
                    </p>
                    <p class="nomar">
                        <label for="email" class="nobold">Email:</label> <code title="Click on: 'Contact guide!' te get his email">Hidden</code>
                        <!--                    <code><?= $info['email']; ?></code>-->
                    </p>
                    <hr>
                    <p class="guidebuttons">
                        <button class="btn-primary guidebutton">Show profile</button>
                        <button class="btn-warning guidebutton">Contact guide!</button>
                    </p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>