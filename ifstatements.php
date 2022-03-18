<?php 
    $tittle = "If Statement";
    include 'include/header.php' 
?>;
    <?php
    echo "<h2>If statement</h2>";
    $Marks = 90;

    if($Marks >100){
        echo "<h3 style='color: orange'>INVALID MARKS</h3>";
    }
    elseif($Marks >= 70){
        echo "<h3 style='color: green'>Your grade is A : EXCELLENT</h3>";
    }
    elseif($Marks >=60){
        echo "<h3 style='color: yellow'>Your grade is B : GOOD</h3>";
    }
    elseif($Marks >=50){
            echo "<h3 style='color: yellow'>Your grade is C : PASS</h3>";
    }
    elseif($Marks <50){
        echo "<h3 style='color: red'>Your grade is D : REPEAT</h3>";
    }
    else{
        echo "<h3 style='color: pink'>Your grade is B : GOOD</h3>";
    }
    ?>
    <?php require 'include/footer.php';