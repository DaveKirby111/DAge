<?php require "header.php"; ?>

<?php require "nav.php"; ?>

<?php

$heading = "comments";

require "dbconnect.php";

$db = new database();

?>

<?php require "banner.php"; ?>

<div class="container" 
style="background-image: url('resources/images/D-age.jpg');">

    <main>

    <div class="content">

    <form action="comment.php">
        <label for="name">name:</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="comment">comment:</label><br>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br><br>
        <button type="submit">submit</button>
    </form>

    </div>

    </main>
</div>

<?php require "footer.php"; ?>