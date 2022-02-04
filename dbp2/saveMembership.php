<?php

    //Database connection
    include 'connection.php';

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $membershipType = $_POST['membershipType'];

    $registerMember = "INSERT INTO membership(passengerFirstName, passengerLastName, membershipType, totalFlightHours, membershipPoints) 
                       VALUES('$firstName','$lastName', '$membershipType', 0, 0)";

    if (mysqli_query($connection, $registerMember))
    {
        $memberRecord = "SELECT * FROM membership WHERE passengerFirstName = '$firstName' AND passengerLastName = '$lastName'";
        $fetchMember = mysqli_query($connection,$memberRecord);
        $rowMember = mysqli_fetch_assoc($fetchMember);
        $membershipID = $rowMember['membershipID'];
        
        ?>
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
                    margin-top:10%;
                    margin-left: 35%;
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
                <a href="Logout.php">Managel Flight</a>
                <a href="MaklumatBilik.php">Membership Registration</a>
                <a href="bookingTicket.html">Booking ticket</a>
                <a href="flightList.php">Flight List</a>
                <a href="homepage.html">Home</a>
            </div>
            <div id="table1">
                <table>
                    <tr>
                        <td>Yeay! You have successfully register for your membership!</td>
                    </tr>
                    <tr>
                        <td>Your membership ID is <?php echo "$membershipID"; ?> </td>
                    </tr>
                </table>
            </div>
            <button name="next" id="next" type="submit" ><a href="homepage.html">Home Page</button>
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