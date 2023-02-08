<?php


$nav = [
    "/" => "Home",
    "trailer.php" => "Trailer",
    "story.php" => "Story",
    "chars.php" => "Characters",
    "gallery.php" => "Gallery"
];

?>

<nav>
    <div class="title">
    <img src="resources/images/title.jpg" alt="title"
    style="height: 45px; width: 150px;">
    <p>fansite</p>
    </div>
    
    <ul>
        
    <?php

    foreach ($nav as $key => $link) {
        echo '<li><a href="'.$key.'">'.$link.'</a></li>';
    }

    ?>

    </ul>
</nav>

<!-- Mobile------------------------------------------------------- -->

<div class="mobile">

<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

<div id="links">

<?php

foreach ($nav as $key => $link) {
    echo '<a href="'.$key.'">'.$link.'</a>';
}

?>

</div>

</div>