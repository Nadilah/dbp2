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
    
    <title>FLIGHT DETAIL</title>
    <div id="header-title"><h1>FLIGHT DETAIL</h1></div>
    <link rel="stylesheet" href="singleflight.css">
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
       
       <h3 align="center">Your Flight Detail</h3>
 <table align="center">
        <div  align="center">
                 <tr>
                    <td><strong>First Name</td>
                    <td name="passengerFirstName"><?php echo $passengerFirstName;?></td>
                </tr>
                <tr>
                    <td><strong>Last Name</td>
                    <td name="passengerLastName"><?php echo $passengerLastName;?></td>
                </tr>
                <tr>
                    <td><strong>DESTINATION ID</td>
                    <td name="destinationID"><?php echo $destinationID;?></td>
                </tr>
                <tr>
                    <td><strong>Aircrat</td>
                    <td name="aircraftID"><?php echo $aircraftID;?></td>
                </tr>
                <tr>
                    <td><strong>Compartment</td>
                    <td name="compartmentClass"><?php echo $compartmentClass;?></td>
                </tr>
                <tr>
                    <td><strong>Seat Number</td>
                    <td name="seatNumber"><?php echo $seatNumber;?></td>
                </tr>
                <tr>
                    <td><strong>DATE AND TIME</td>
                    <td name="flightDateTime"><?php echo $flightDateTime;?></td>
                </tr>
                <tr>
                    <td><strong>Gate</td>
                    <td name="departureGate"><?php echo $departureGate;?></td>
                </tr>
                <tr>
                    <td><strong>City</td>
                    <td name="city"><?php echo $city;?></td>
                </tr>
                <tr>
                    <td><strong>Country</td>
                    <td name="country"><?php echo $country;?></td>
                </tr>
        </div>

    </table>
        <br>
        <div align="center" >
        <a class="back" href="findReservation.php">Go Back</a>
        </div>

        <br>
        <div align="center"class="inlinebutton">
        <form align="center"  method="post" action="deleteReservation.php">
        <input type="hidden" name="reservationID" id="reservationID" value="<?php echo $reservationID;?>" >
        <input type="submit" class="button" name="delete" value="  Cancel Booking ">
        </form>

        <form align="center"  method="post" action="updateReservation.php">
        <input type="hidden" name="reservationID" id="reservationID" value="<?php echo $reservationID;?>" >
        <input type="submit" class="button" name="update" value="Change Destination">
        </form>
        </div>
       

      
        
      