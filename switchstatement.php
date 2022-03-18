<?php 
    $tittle = "Switch Statements";
    include 'include/header.php' ?>
    <h1>Switch Statement</h1>
    <?php
    $grade = 't';
    switch($grade){
        case 'A':
            echo "<h2 style='color: green'>Excellent</h2>";
            break;
        case 'B':
            echo "<h2 style='color: yellow'>You did well</h2>";
            break;
        case 'C':
            echo "<h2 style='color: pink'>You have passed</h2>";
            break;
        case 'D':
            echo "<h2 style='color: red'>You have failed</h2>";
            break;
        default:
            echo "<h2 style='color: red'>Invalid grade</h2>";
    }
    ?>
<?php require 'include/footer.php';