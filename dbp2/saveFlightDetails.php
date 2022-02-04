<?php
    include 'connection.php';
    include 'saveDetails.php';

    $destinationID = $_POST['destID'];
    $compClass = $_POST['compClass'];
    $seatNum = $_POST['seatNum'];    

    $destRecord = "SELECT * FROM destination WHERE destinationID = '$destinationID'";
    $fetchDest = mysqli_query($connection,$destRecord);
    $rowDest = mysqli_fetch_assoc($fetchDest);
    $flightDateTime = $rowDest['flightDateTime'];

    $passRecord = "SELECT * FROM passenger WHERE passengerFirstName = '$firstName' AND passengerLastName = '$lastName'";
    $fetchPass = mysqli_query($connection,$passRecord);
    $rowPass = mysqli_fetch_assoc($fetchPass);
    $passengerID = $rowPass['passengerID'];

    $addReservation = "INSERT INTO reservation(passengerID, compartmentClass, seatNumber, dateOfBooking, dateTimeofDeparture, destinationID)
                       VALUES ('$passengerID', '$compClass', '$seatNum', NOW(), '$flightDateTime', '$destinationID')";
    
    if (mysqli_query($connection, $addReservation))
    {
        echo "Yeay! You have book the ticket!";
    }            
    else
    {
        echo "Add passenger unsuccessful!"; 
        include 'homepage.html';
    }

?>