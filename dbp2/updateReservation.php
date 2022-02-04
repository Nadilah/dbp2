<?php
include 'connection.php';

if(isset($_POST['reservationID']))
{
    //id to search
    $reservationID = $_POST['reservationID'];

    $reserveflight = "SELECT * FROM 
    reservation 
    INNER JOIN passenger
    ON reservation.passengerID = passenger.passengerID
    INNER JOIN destination
    ON reservation.destinationID = destination.destinationID
    where 
    reservationID = $reservationID LIMIT 1";
    $result = mysqli_query($connection, $reserveflight);

    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        { //table reservation
          $destinationID = $row['destinationID'];
          $aircraftID = $row['aircraftID'];
          $compartmentClass = $row['compartmentClass'];
          $seatNumber = $row['seatNumber'];

          //table destination
          $flightDateTime = $row['flightDateTime'];
          $departureGate = $row['departureGate'];
          $city = $row['city'];
          $country = $row['country'];

          //table passenger
          $passengerID = $row['passengerID'];
          $passengerFirstName = $row['passengerFirstName'];
          $passengerLastName = $row['passengerLastName'];
          
        }  
    }

    else{

    }
    
    
    mysqli_free_result($result);
}



?>
<!DOCTYPE html>
    
    <title>List of Flights</title>
    <div id="header-title"><h1>UPDATE RESERVATION</h1></div>
    <link rel="stylesheet" href="updateReservation.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <div id="sub-header"><h2>"Everyone can fly to their destination"</h2></div>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&display=swap" rel="stylesheet"> 

        <div class="nav-bar">
            <a href="findReservation.php">Manage Flight</a>
            <a href="membershipRegistration.html">Membership Registration</a>
            <a href="bookingTicket.html">Booking ticket</a>
            <a href="flightList.php">Flight List</a>
            <a href="homepage.html">Home</a>
        </div>

       
       <h2 align="center">Change Destination</h2>

       <form align="center" action="changeDestination.php" method="POST">
            <table align="center">
                <tr>
                    <td>First Name</td>
                    <td>:</td>
                    <td name="passengerFirstName"><?php echo $passengerFirstName;?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>:</td>
                    <td name="passengerLastName"><?php echo $passengerLastName;?></td>
                </tr>
                <tr>
                    <td>Current Destination</td>
                    <td>:</td>
                    <td name="city"><?php echo $city;?>&nbsp<?php echo $country;?></td>
                </tr>
               
                <tr>
                <td>New Destination</td>
                <td>:</td>
                <td><select id="destinationID" name="destinationID" value=destinationID  required>
                        <option value="BKK">Bangkok, Thailand</option>
                        <option value="CGK">Jakarta, Indonesia</option>
                        <option value="HDY">Hat Yai, Thailand</option>
                        <option value="JHB">Johor Bahru, Malaysia</option>
                        <option value="KBR">Kota Bharu, Malaysia</option>
                        <option value="KCH">Kuching, Malaysia</option>
                        <option value="LHR">London, United Kingdom</option>
                        <option value="PNH">Phnom Penh, Cambodia</option>
                        <option value="REP">Siem Reap, Cambodia</option>
                        <option value="TGG">Kuala Terengganu, Malaysia</option>
                    </select></td>
                </tr>
                </table>  
                <input type="hidden" name="reservationID" id="reservationID" value="<?php echo "$reservationID";?>" >
               
                <input  type="submit" class="button"  value="Update">
        </form>
        </body>
</html>
   