<?php 
    $tittle = "Functions";
    include 'include/header.php'; 
    ?>
    <?php
        function addition($num1, $num2){
            $sum = $num1 + $num2;
            echo "<p>The sum of $num1 and $num2 is: $sum;</p>";
        }
            addition(217, 1234)

    ?>
<?php require 'include/footer.php';