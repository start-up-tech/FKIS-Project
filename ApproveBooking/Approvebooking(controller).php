<?php
    include('function.php');
    $id = $_GET['Staff_ID'];
    $query = "select * from `booking` where `Staff_ID` = '$Staff_ID'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $Booking_ID = $row['Booking_ID'];
            $Staff_ID = $row['Staff_ID'];
            $Item_Code = $row['Item_Code'];
            $Item_Quantity = $row['Item_Quantity'];
            $query = "INSERT INTO `accounts` (`Booking_ID`, `Staff_ID`, `Item_Code`, `Item_Quantity`) VALUES (NULL, '$Booking_ID', '$Staff_ID', '$Item_Code', '$Item_Quantity');";
        }
        $query .= "DELETE FROM `booking` WHERE `booking``.`Staff_ID` = '$Staff_ID';";
        if(performQuery($query)){
            echo "Booking has been accepted.";
        }else{
            echo "Error. Please try again. ";
        }
    }else{
        echo "Error occured.";
    }
    
?>
<br/><br/>
<a href="home.php">Back</a>