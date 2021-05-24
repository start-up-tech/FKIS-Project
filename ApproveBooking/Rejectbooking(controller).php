<?php
    include('function.php');
    $id = $_GET['Staff_ID'];
    
    $query = "DELETE FROM `booking` WHERE `booking`.`Staff_ID` = '$Staff_ID';";
        if(performQuery($query)){
            echo "Booking has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="home.php">Back</a>