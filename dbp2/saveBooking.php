<?php

    //Database connection
    include 'connection.php';

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $membershipID = $_POST['membershipID'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $city = $_POST['city']; 
    $compClass = $_POST['compClass'];
    $seatNum = $_POST['seatNum'];

    $addPassenger = "INSERT INTO passenger(passengerFirstName, passengerLastName, passengerEmail, phoneNumber) 
                     VALUES('$firstName','$lastName', '$email', '$phone_num')";

    if (mysqli_query($connection, $addPassenger))
    {
        $destRecord = "SELECT * FROM destination WHERE city = '$city'";
        $fetchDest = mysqli_query($connection,$destRecord);
        $rowDest = mysqli_fetch_assoc($fetchDest);
        $destID = $rowDest['destinationID'];
        $aircraftID = $rowDest['aircraftID'];
        $flightDateTime = $rowDest['flightDateTime'];

        $passRecord = "SELECT * FROM passenger WHERE passengerFirstName = '$firstName' AND passengerLastName = '$lastName'";
        $fetchPass = mysqli_query($connection,$passRecord);
        $rowPass = mysqli_fetch_assoc($fetchPass);
        $passengerID = $rowPass['passengerID'];

        $membershipRecord = "SELECT * FROM membership WHERE passengerFirstName = '$firstName' AND passengerLastName = '$lastName' AND membershipID = '$membershipID'";
        $fetchMembership = mysqli_query($connection,$membershipRecord);
        $rowMembership = mysqli_fetch_assoc($fetchMembership);
        $memIDrec = $rowMembership['membershipID']; 
        $memPoints = $rowMembership['membershipPoints'];

        if ($membershipID == $memIDrec)
        {
            $memPoints = $memPoints + 50;
            $updateMemPoints = "UPDATE membership SET membershipPoints = '$memPoints' WHERE membershipID = '$membershipID'";
            $updateMP = mysqli_query($connection,$updateMemPoints);
            $updatePassID = "UPDATE membership SET passengerID = '$passengerID' WHERE passengerFirstName = '$firstName' AND passengerLastName = '$lastName'";
            $updatePID = mysqli_query($connection, $updatePassID);
        }

        $addReservation = "INSERT INTO reservation(passengerID, aircraftID, compartmentClass, seatNumber, dateOfBooking, destinationID)
                           VALUES ('$passengerID', '$aircraftID', '$compClass', '$seatNum', NOW(), '$destID')";
        mysqli_query($connection, $addReservation);?>
        <html>
            <style>
                #header-title
                {
                    margin-top: 5%;
                    text-align: center;
                    font-family: 'Bebas Neue', cursive;
                    font-size:xx-large;
                }
        
                #sub-header
                {
                    text-align: center;
                    font-family: 'Bodoni Moda', serif;
                }
                
                #table1
                {
                    margin-top:5%;
                    margin-left: 39%;
                    width: 800px;
                    font-size: 20px;
                }

                #table2
                {
                    margin-top: 5%;
                }

                .nav-bar
                {
                    background-color: black;
                    overflow: hidden;
                }

                .nav-bar a
                {
                    float:right;
                    display: block;
                    color: #f2f2f2;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 17px;
                }

                .nav-bar a:hover 
                {
                    background-color: #ddd;
                    color: black;
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
            <body>
                <div id="header-title"><h1>AIRLINE TICKET RESERVATION SYSTEM</h1></div>
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
                <div id="sub-header"><h2>"Everyone can fly to their destination"</h2></div>
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&display=swap" rel="stylesheet"> 

                <div class="nav-bar">
                    <a href="Logout.php">Manage Flight</a>
                    <a href="membershipRegistration.php">Membership Registration</a>
                    <a href="bookingTicket.html">Booking ticket</a>
                    <a href="flightList.php">Flight List</a>
                    <a href="homepage.html">Home</a>
                </div>
                <div id="table1">
                    <table>
                        <tr>
                            <td>Yeay! You have successfully book a ticket!</td>
                        </tr>
                        <tr>
                            <td>Your passenger ID is <?php echo "$passengerID"; ?> </td>
                        </tr>
                        <tr>
                            <td>Please enter your passenger ID below to proceed to payment page. </td>
                        </tr>
                    </table>
                </div>
                    <form action="paymentProcess.php" method="POST">
                    <div id="table2">
                        <table align= "center">
                            <tr>
                                <td>Your passengerID:</td>
                                <td><input type="text" name="passID" id="passID"></td>                    
                            </tr>
                     </table>
                    <button name="next" id="next" type="submit">Next</button>
                    </form>
                    </div>
            </body>
        </html>
        <?php
    }
    else
    {
        echo "Add passenger unsuccessful!"; 
        include 'homepage.html';
    }

?>