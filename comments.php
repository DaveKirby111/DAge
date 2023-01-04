<?php require "header.php"; ?>

<?php require "nav.php"; ?>

<?php

$heading = "comments";

require "dbconnect.php";

$db = new database();

$cments = $db->query("select * from comments;");

?>

<?php require "banner.php"; ?>

<div class="container" 
style="background-image: url('resources/images/D-age.jpg');">

    <main>

    <div class="content">

    <form action="comment.php" method="post" class="c-ment">
        <label for="name">name:</label><br>
        <input type="text" name="uname" id="name"><br><br>

        <label for="comment">comment:</label><br>
        <textarea name="comm" id="comm" cols="70" rows="20"></textarea><br><br>
        <button type="submit">submit</button>
    </form>

    <?php

    foreach(array_reverse($cments) as $cment) {

    ?>

    <div class="comment">

    <h4>Name: <?php echo $cment['name']; ?></h4>
    <h4>Comment:</h4><br>
    <p><?php echo $cment['comment']; ?></p>
    </div>

    <?php

    }

    ?>

    </div>

    </main>
</div>

<?php require "footer.php"; ?>