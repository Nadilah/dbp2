<?php
include 'connection.php';

$flightList = "SELECT * FROM destination";
$result = mysqli_query($connection, $flightList);
?>
<!DOCTYPE html>

<head>
    
    <title>List of Flights</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header-title"><h1>LIST OF FLIGHT</h1></div>
    
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
    
    <table align="center">
        <tr>
            <td><strong>DESTINATION ID</td>
            <td><strong>CITY</td>
            <td><strong>COUNTRY</td>
            <td><strong>DATE AND TIME</td>
            <td><strong>PRICE</td>
        </tr>
        <?php
            while ($rows = mysqli_fetch_assoc($result))
            {
        ?>
                <tr>
                    <td><?php echo $rows['destinationID']; ?></td>
                    <td><?php echo $rows['city']; ?></td>
                    <td><?php echo $rows['country']; ?></td>
                    <td><?php echo $rows['flightDateTime']; ?></td>
                    <td>RM<?php echo $rows['destinationPrice']; ?></td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>