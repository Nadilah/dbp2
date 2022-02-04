<?php
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];

    //Database connection
    include 'connection.php';

    $addPassenger = "INSERT INTO passenger(passengerFirstName, passengerLastName, passengeremail) 
                     VALUES('$firstName','$lastName', '$email')";

    if (mysqli_query($connection, $addPassenger))
        include 'chooseFlight.html';           
    else
    {
        echo "Add passenger unsuccessful!"; 
        include 'homepage.html';
    }

?>