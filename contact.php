<?php require "partials/header.php"; ?>

<?php require "partials/nav.php"; ?>

<?php

$heading = "contact";

?>

<?php require "partials/banner.php"; ?>

<div class="container" 
style="background-image: url('resources/images/D-age.jpg');
background-size: 100% 100%;">

    <main>

    <div class="content">

    <form action="email.php" method="post" class="e-mail">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" size="50"><br><br>

        <label for="subject">Subject: </label>
        <input type="text" name="subject" id="subject" size="50"><br><br>

        <label for="message">Message: </label><br>
        <textarea name="message" id="message" cols="100" rows="20"></textarea><br>

        <button type="submit">send</button>
        <button type="reset">clear</button>
    </form>
        
    </div>

    </main>
</div>

<?php require "partials/footer.php"; ?>