<?php
    include 'connection.php';

    $passengerID = $_POST['passID'];

    $selectReservation = "SELECT * FROM reservation WHERE passengerID = '$passengerID'";
    $fetchReservation = mysqli_query($connection,$selectReservation);
    $rowReservation = mysqli_fetch_assoc($fetchReservation);
    $reservationID = $rowReservation['reservationID'];
    $destinationID = $rowReservation['destinationID'];
    $aircraftID = $rowReservation['aircraftID'];
    $compClass = $rowReservation['compartmentClass'];
    $seatNum = $rowReservation['seatNumber'];

    $selectDestination = "SELECT * FROM destination WHERE destinationID = '$destinationID'";
    $fetchDestination = mysqli_query($connection,$selectDestination);
    $rowDestination = mysqli_fetch_assoc($fetchDestination);
    $price = $rowDestination['destinationPrice'];
    $gate = $rowDestination['departureGate'];
    $city = $rowDestination['city'];
    $country = $rowDestination['country'];

    $selectAircraft = "SELECT * FROM aircraft WHERE aircraftID = '$aircraftID'";
    $fetchAircraft = mysqli_query($connection,$selectAircraft);
    $rowAircraft = mysqli_fetch_assoc($fetchAircraft);
    $aircraftCompany = $rowAircraft['aircraftCompany'];
        
    $passRecord = "SELECT * FROM passenger WHERE passengerID = '$passengerID'";
    $fetchPass = mysqli_query($connection,$passRecord);
    $rowPass = mysqli_fetch_assoc($fetchPass);
    $firstName = $rowPass['passengerFirstName'];
    $lastName = $rowPass['passengerLastName'];

    ?>

    <html>
    <title>Payment Detail</title>
        <style>
            h3
            {
                margin-top:15%;
                margin-left:35%;
            }

            table
            {
                margin-top: 5%;
            }

            tr, td 
            {
                padding: 10px;
            }
            #next
            {
                margin-top: 2%;
                margin-left: 48%;
                margin-bottom: 10%;
                color: black;
                padding: 10px 25px; 
                font-size: 15px;
                cursor: pointer;
            }

            #next:hover
            {
                background-color: #708686;
                color: white;
            }
        </style>
        <head>
        </head>
        <body>
            <h1>Ticket details for passenger
                <?php echo "$firstName";
                      echo ", ";
                      echo "$lastName"; ?></h1>
            <table align="center">
                <tr>
                    <td>Reservation ID</td>
                    <td>:</td>
                    <td><?php echo "$reservationID"; ?>
                </tr>
                <tr>
                    <td>Aircraft ID</td>
                    <td>:</td>
                    <td><?php echo "$aircraftID"; ?>
                </tr>
                <tr>
                    <td>Aircraft Company</td>
                    <td>:</td>
                    <td><?php echo "$aircraftCompany"; ?>
                </tr>
                <tr>
                    <td>Destination City</td>
                    <td>:</td>
                    <td><?php echo "$city"; ?>
                </tr>
                <tr>
                    <td>Destination Country</td>
                    <td>:</td>
                    <td><?php echo "$country"; ?>
                </tr>
                <tr>
                    <td>Compartment Class</td>
                    <td>:</td>
                    <td><?php echo "$compClass"; ?>
                </tr>
                <tr>
                    <td>Seat Number</td>
                    <td>:</td>
                    <td><?php echo "$seatNum"; ?>
                </tr>
                <tr>
                    <td>Departure Gate</td>
                    <td>:</td>
                    <td><?php echo "$gate"; ?>
                </tr>
                <tr>
                    <td>Ticket's price</td>
                    <td>:</td>
                    <td><?php echo "$price"; ?>
                </tr>
            </table>
            <button name="next" id="next" type="submit" ><a href="successfulPayment.html">PAY</button>
        </body>

    </html>
    <?php
    
?>