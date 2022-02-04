<?php
include 'connection.php';

if(isset($_POST['delete']))
{
     //id to search
     $reservationID = $_POST['reservationID'];

    $deleteReservation = "DELETE FROM reservation WHERE reservationID = $reservationID";
    $result = mysqli_query($connection, $deleteReservation);
    if($result)
    {
        include 'successDeleteData.html';
        
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($connection);

}

?>