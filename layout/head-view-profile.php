<ul class="nav nav-tabs">
    <li role="presentation" class="<?php echo ($selected == "" ? "active-blauw " : " ")?>">
        <a href="memberpage.php" class="gidspagina gidspagina-<?php echo ($page == " tours " ? "active-blauw " : " ")?>"><h3 class="center"><i class="fa fa-map-marker" title="Tours"></i><br><span class="hidden-xs">Tours</span></h3></a></li>

    <li role="presentation" class="<?php echo ($selected == "times" ? "active-blauw  " : " ")?>">
        <a href="memberpage.php?selected=times" class="gidspagina gidspagina-<?php echo ($page == " times " ? "active-blauw " : " ")?>"><h3 class="center"><i class="fa fa-clock-o" title="Times"></i><br><span class="hidden-xs">Times</span></h3></a></li>

    <li role="presentation" class="<?php echo ($selected == "reviews" ? "active-blauw  " : " ")?>">
        <a href="memberpage.php?selected=reviews" class="gidspagina gidspagina-<?php echo ($page == " reviews " ? "active-blauw " : " ")?>"><h3 class="center"><i class="fa fa-thumbs-o-up" title="Reviews"></i><br><span class="hidden-xs">Reviews</span></h3></a></li>
</ul>
<div class="col col-xs-12 gidscontainer">
    <div class="row">
