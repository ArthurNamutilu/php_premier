    <?php 
    $tittle = "Arrays";
    include 'include/header.php'; 
    ?>
    <?php
    $country = array("Kenya","United Kingdom","India","Scotland","Israel");
    $number = count($country);
    echo "<p>I live in $country[0]</p>";
    echo "<p>I have visited $number countries</p>"
    ?>
    <?php
    for($x = 0; $x <$number; $x++){
        echo "<p>$country[$x]</p>";
    }
    
    
    ?>
<?php require 'include/footer.php';