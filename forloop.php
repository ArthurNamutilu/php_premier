<?php 
    $tittle = "For Loop";
    include 'include/header.php' 
?>
    <h1>For loops</h1>
    <?php
    //$i = 5;   variable:condition:increment
    for($count = 0; $count < 10; $count++){
        echo "<p>The count is: $count </p>";
    }

    ?>
<?php require 'include/footer.php';