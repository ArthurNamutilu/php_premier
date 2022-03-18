<?php 
    $tittle = "Date";
    include 'include/header.php'; 
    ?>
    <?php
        $datenow = getdate();
        echo "Todays date is: </br>";
        //refrencing using named subscript array["named subscript"].. eg array[numbersubsript]..eg marks[2]
        echo $datenow['mday'].'</br>';
        echo $datenow['mon'].'</br>';
        echo $datenow['year'].'</br>';
        echo "Today's date is " . $datenow['mday'] ."/". $datenow['mon']."/" . $datenow['year'];
    ?>
<?php require 'include/footer.php';