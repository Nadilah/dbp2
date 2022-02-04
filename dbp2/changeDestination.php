<?php
include 'connection.php';

    $reservationID = $_POST['reservationID'];
    $destinationID = $_POST['destinationID'];
    
    $updateDestination = "UPDATE reservation SET destinationID = '$destinationID' WHERE reservationID ='$reservationID'";
    $result = mysqli_query($connection, $updateDestination);
    if($result){
      
        include 'successUpdateflight.html';
    }
      
    else{
        echo 'Data Not Updated';
    }
       
    mysqli_close($connection);
?>