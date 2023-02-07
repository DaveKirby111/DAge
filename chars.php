<?php require "partials/header.php"; ?>

<?php require "partials/nav.php"; ?>

<?php

$heading = "characters";

require "dbconnect.php";

$db = new database();

$dao = $db->query("select * from DAchars;");

$da2 = $db->query("select * from DA2chars;");

$da3 = $db->query("select * from DAIchars;");

?>

<?php require "partials/banner.php"; ?>

<div class="container" 
style="background-image: url('resources/images/D-age.jpg');">

    <main>

    <div class="content">

        <h2>DA: origins</h2>

        <?php
        
        foreach($dao as $da1) {
        
        ?>

        <p><strong class="char">
            <?php echo $da1['character']; ?>: </strong><?php echo $da1['desc']; ?>
        </p>

        <?php
        }
        ?>


        <h2>DA: II</h2>

        <?php
        
        foreach($da2 as $da2c) {
        
        ?>

        <p><strong class="char">
            <?php echo $da2c['character']; ?>: </strong><?php echo $da2c['desc']; ?>
        </p>

        <?php
        }
        ?>

       

        <h2>DA: inquisition</h2>

        <?php
        
        foreach($da3 as $da3c) {
        
        ?>

        <p><strong class="char">
            <?php echo $da3c['character']; ?>: </strong><?php echo $da3c['desc']; ?>
        </p>

        <?php
        }
        ?>
        
        
    </div>

    </main>
</div>

<?php require "partials/footer.php"; ?>