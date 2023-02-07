<nav>
    <div class="title">
    <img src="resources/images/title.jpg" alt="title"
    style="height: 45px; width: 150px;">
    <p>fansite</p>
    </div>
    
    <ul>
        
    <?php

    $nav = [
        "/" => "Home",
        "trailer.php" => "Trailer",
        "story.php" => "Story",
        "chars.php" => "Characters",
        "gallery.php" => "Gallery"
    ];

    foreach ($nav as $key => $link) {
        echo '<li><a href="'.$key.'">'.$link.'</a></li>';
    }

    ?>

    </ul>
</nav>