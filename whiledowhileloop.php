<?php
    $tittle = "While Do while";
    include 'include/header.php'; ?>
    <?php
    $x = 0;
   /* while($x < 15){     while/precondition loop
        echo "<p>Less than 50</p>";                 INFINITE LOOP
    } */
    while($x < 5){
        echo "<p>X is: $x</p>";
        $x ++;                
    }
    echo"<p>while Loop finished</p>"
    ?>
    <?php
    do{
        echo "<p>X is: $x</p>";
        $x ++;
    }while ($x<15)
    ?>
<?php require 'include/footer.php';