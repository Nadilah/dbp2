<?php

    //Database connection
    include 'connection.php';

?>
   
   
    <!DOCTYPE html>
    <link rel="stylesheet" href="style.css">  
    <title>List of Flights</title>
    <div id="header-title"><h1>Manage Flight</h1></div>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <div id="sub-header"><h2>"Everyone can fly to their destination"</h2></div>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&display=swap" rel="stylesheet"> 

        <div class="nav-bar">
            <a href="findReservation.php">MANAGE FLIGHT</a>
            <a href="membershipRegistration.html">Membership Registration</a>
            <a href="bookingTicket.php">Booking ticket</a>
            <a href="flightList.php">Flight List</a>
            <a href="homepage.html">Home</a>
        </div>

        <div class="findflight" align="center">
            <h1>Find Your Flight</h1>

            <form method="post" align="center" action="singleflight.php">
             <tr>
                    <td>Reservation ID</td>
                    <td>:</td>
                    <td><input type="text" name="reservationID" id="reservationID" size="5"></td>
            </tr>
                <br><br>
                <input type="submit" class="button1" name="search" value="FIND">
            </form>
        </div>
    </div>

 

    </html>
    

